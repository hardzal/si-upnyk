<?php
include ("_script_phpgrid.php");
$g = new jqgrid();

$nomhs = $_SESSION['usr'];
$nama = $_SESSION['usrname'];

$jmlmka=0; $i=0; $datamka=array(); $kode=array(); $cfield=array();
$hasil = mysql_query("SELECT * FROM buffer_nilai");
$jmlmka=mysql_num_rows($hasil);
while ($row = mysql_fetch_array($hasil)) {
	$datamka[] = $row;	}
foreach($datamka as $row) {
	$i++;
	$kode[$i]	= $row['kode'];
	$cfield[$i] = 'k'.$row['kode'];
}

$g->select_command = "SELECT * FROM buffer_nilai";
$g->table = "buffer_nilai";

$grid["caption"] = "&nbsp;";
$grid["multiselect"] = false;
$grid["shrinkToFit"] = true;
$grid["height"] = "435"; 
$grid["width"] = "700";
$grid["autowidth"] = false; 
$grid["rowList"] = array();
$grid["pgbuttons"] = false;
$grid["pgtext"] = null;
$grid["rownumbers"] = true;
$grid["rownumWidth"] = 30;
$grid["rowNum"] = 999;
$grid["toolbar"] = "bottom";

$g->set_options($grid);

$g->set_actions(array(  "add"=>false, 
                        "edit"=>true, 
                        "delete"=>false, 
                        "rowactions"=>false, 
                        "autofilter" => true ) ); 
$col = array();
$col["title"] = "No."; 
$col["name"] = "IDmka"; 
$col["width"] = "40"; 
$col["editable"] = false;
$col["align"] = "center";
$col["show"] = array("list"=>false, "add"=>false, "edit"=>false, "view"=>true, "bulkedit"=>true);
$cols[] = $col;   

$col = array();
$col["title"] = "Smt."; 
$col["name"] = "sem"; 
$col["width"] = "50"; 
$col["editable"] = false;
$col["editrules"]["readonly"] = true;
$col["align"] = "center";
$col["show"] = array("list"=>true, "add"=>false, "edit"=>false, "view"=>true, "bulkedit"=>true);
$cols[] = $col;   

$col = array();
$col["title"] = "Kode"; 
$col["name"] = "kode"; 
$col["width"] = "70"; 
$col["editable"] = true;
$col["editrules"]["readonly"] = true;
$$col["align"] = "center";
$col["show"] = array("list"=>true, "add"=>false, "edit"=>true, "view"=>true, "bulkedit"=>true);
$cols[] = $col;   

$col = array();
$col["title"] = "Nama MKA";
$col["name"] = "mka"; 
$col["width"] = "330";
$col["editable"] = true;
$col["editrules"]["readonly"] = true;
$col["show"] = array("list"=>true, "add"=>false, "edit"=>true, "view"=>true, "bulkedit"=>true);
$$col["align"] = "left";
$cols[] = $col;   

$col = array();
$col["title"] = "SKS";
$col["name"] = "sks"; 
$col["width"] = "50"; 
$col["editable"] = true;
$col["align"] = "center";
$col["editrules"]["readonly"] = true;
$col["search"] = false;
$col["show"] = array("list"=>true, "add"=>false, "edit"=>true, "view"=>true, "bulkedit"=>true);
$cols[] = $col;   

$col = array();
$col["title"] = "Nilai";
$col["name"] = "nilai"; 
$col["width"] = "60"; 
$col["search"] = false;
$col["editable"] = true;
$col["align"] = "center";
$cols[] = $col;   

$g->set_columns($cols);

$opt["cellEdit"] = true;
$opt["reloadedit"] = true;
$g->set_options($opt);

$out = $g->render("list1");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Daftar Nilai</title>
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
		.ui-jqgrid .ui-pg-table td {font-size: 14px;}
		h2 {
			text-align:center;
			width:70%;
			line-height:55%;
			margin:0 auto;
			padding-bottom:8px; }
	  .ui-jqgrid .ui-pg-selbox {
		font-size:13px;
		line-height:4px;
		display:block;
		height:26px;
		margin: 0em; }
	  .ui-jqgrid .ui-pg-input{
		height:13px;
		font-size:13px;
		margin:0; }
	  .button {
		position: absolute;	}
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
				<li><a href="">Daftar</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Nilai</a>&nbsp;<span class="divider-last">&nbsp;&nbsp;</span></li>
			</ul>	 
            <h2 class="text" style="margin-top: -20px;">Daftar<small> Nilai</small></h2>
            <div class="row-fluid">
 			   <div align="center">			
				   <?php echo $out?>
			   </div>
            </div><br>
			<button type="button" style="margin-left: 290px;" class="btn btn-info" 
						onclick="window.location.href='update_nilai.php'"> Submit </button>		
			<button type="button" style="margin-left: 30px;" class="btn btn-success" 
						onclick="window.location.href='grafik_nilai.php'"> Statistik </button>		
 			<button style="margin-left: 30px" class="btn btn-inverse" 
					onclick="window.location.href='menu_mhs.php'"> Back </button>
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
