<?php
include ("_script_phpgrid.php");
$g = new jqgrid();
session_start();

if($_POST['upload']){
	$vmka	= $_POST['mka'];
	$vdosen	= $_POST['dosen'];
	$vsem	= $_POST['smt'];
	$vthn	= $_POST['thnakd'];
	$_SESSION['matkul']=$vmka;
	$_SESSION['dos']=$vdosen;
	$datakues=array();
	$hasil = mysql_query("SELECT * FROM kuesioner WHERE mka='$vmka' AND dosen='$vdosen' 
						  AND semester='$vsem' AND tahun='$vthn'");
	$jmlmhs=mysql_num_rows($hasil);
	while ($row = mysql_fetch_array($hasil)) {
		$datakues[] = $row;	}
	foreach($datakues as $row) {
		for($i=1;$i<=33;$i++){
			$tj[$i] += $row[$i+4];
		}
	}
	mysql_query("UPDATE score_kuesioner SET score=0");
	for($i=1;$i<=33;$i++){
		$sj[$i]=$tj[$i]/$jmlmhs;
		mysql_query("UPDATE score_kuesioner SET score='$sj[$i]' WHERE ID='$i'");
	}
}
$g->select_command = "SELECT * FROM score_kuesioner";
$g->table = "score_kuesioner";

$grid["caption"] = "&nbsp;";
$grid["multiselect"] = false;
$grid["shrinkToFit"] = true;
$grid["height"] = "100%"; 
$grid["width"] = "850";
$grid["autowidth"] = false; 
$grid["rowList"] = array();
$grid["pgbuttons"] = false;
$grid["pgtext"] = null;
$grid["rownumbers"] = true;
$grid["rownumWidth"] = 30;
$grid["rowNum"] = 50;
$grid["toolbar"] = "bottom";

$g->set_options($grid);

$g->set_actions(array(  "add"=>false, 
                        "edit"=>false, 
                        "delete"=>false, 
                        "rowactions"=>false, 
                        "autofilter" => false ) ); 
$col = array();
$col["title"] = "No."; 
$col["name"] = "ID"; 
$col["width"] = "50"; 
$col["editable"] = true;
$col["align"] = "center";
$col["show"] = array("list"=>false, "add"=>false, "edit"=>false, "view"=>true, "bulkedit"=>false);
$cols[] = $col;   

$col = array();
$col["title"] = "Butir Pernyataan";
$col["name"] = "item"; 
$col["width"] = "700";
$col["editable"] = false;
$col["align"] = "left";
$cols[] = $col;   

$col = array();
$col["title"] = "Score Rata-rata";
$col["name"] = "score"; 
$col["width"] = "150"; 
$col["editable"] = false;
$col["align"] = "center";
$col["search"] = false;
$col["show"] = array("list"=>true, "add"=>false, "edit"=>false, "view"=>true, "bulkedit"=>false);
$cols[] = $col;   

$g->set_columns($cols);
$out = $g->render("list1");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Hasil Kuesioner</title>
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />
	<link href="lib/js/themes/redmond/jquery-ui.custom.css" rel="stylesheet" type="text/css" media="screen" ></link>	
	<link href="lib/js/jqgrid/css/ui.jqgrid.css" rel="stylesheet" type="text/css" media="screen" ></link>	

	<script src="lib/js/jquery.min.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
	<script src="lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
	<style>	
		.ui-jqgrid {font-family: "tahoma","verdana","sans serif"; font-size: 14px;}
		.ui-jqgrid .ui-pg-table td {font-size: 13px;}
		h2 {
			text-align:center;
			width:70%;
			line-height:55%;
			margin:0 auto;
			padding-bottom:8px; }
	</style>
	<script>
		var opts = {
			'ondblClickRow': function (id) {
				jQuery(this).jqGrid('editGridRow', id, <?php echo json_encode_jsfunc($g->options["edit_options"])?>);
			}
		};
	</script>
</head>

<body class="fixed-top">
	<?php include ("_topside_bar_mhs.php"); ?>
      <div id="main-content"> 
         <div class="container-fluid">
			<div id="theme-change" class="hidden-phone">
				<i class="icon-cogs"></i>
				<span class="settings">
					<span class="text">Warna:</span>
					<span class="colors">
						<span class="color-default" data-style="default"></span>
						<span class="color-gray" data-style="gray"></span>
						<span class="color-purple" data-style="purple"></span>
						<span class="color-cyan" data-style="cyan"></span>
					</span>
				</span>
			</div>
			<ul class="breadcrumb">
				<li><a href="menu_mhs.php"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
				<li><a href="">Kuesioner</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Mahasiswa</a>&nbsp;<span class="divider-last">&nbsp;&nbsp;</span></li>
			</ul><br>	 
            <h2 class="text" style="text-align:center">Hasil<small> Kuesioner</small></h2>
		    <div class="control-group">
			  <div class="span12">
				<label class="control-label" style="text-align:center; font-size: 18px"
				>Semester : <?php echo $vsem,', ',$vthn?></label>
			  </div>	 
			  <div class="span7">
				<label class="control-label" style="margin-left:185px; font-size: 16px"
				>MKA : <?php echo $vmka?></label>
			  </div>	 
			  <div class="span5">
				<label class="control-label" style="margin-left:0px; font-size: 16px"
				>Dosen : <?php echo $vdosen?></label>
			  </div><br>	 
		    </div><br>

            <div class="row-fluid">
 			   <div align="center">			
				   <?php echo $out?>
			   </div><br>
			   <button style="margin-left:18%" class="btn btn-inverse" 
					onclick="window.location.href='hasil_kuesioner.php'"> Back </button>
			   <button style="margin-left: 20px;" class="btn btn-success" 
					onclick="window.location.href='grafik_kuesioner.php'"> Grafik </button>		
           </div><br>
         </div>
      </div>
   <div id="footer">
       2019 &copy; Prodi Sistem Informasi
      <div class="span pull-right">
         <span class="go-top"><i class="icon-arrow-up"></i></span>
      </div>
   </div>
   <!-- END FOOTER -->
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <script src="js/scripts.js"></script>
   <script>
      jQuery(document).ready(function() {			
      	// initiate layout and plugins
      	App.init();
		src="js/jquery.blockui.js";
      });
   </script>   
</body>
</html>
