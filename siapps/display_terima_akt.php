<?php
include ("_script_phpgrid.php");
$g = new jqgrid();

if(isset($_GET['tgl'])) {
	$tgl = $_GET['tgl'];
	$tglz = date_format(date_create($tgl),"Y-m-d");
} else {
	$tgl  = date('d-m-Y',strtotime("-1 days"));
	$tglz = date_format(date_create($tgl),"Y-m-d");
}

$g->select_command = "SELECT * FROM terima_akt WHERE Tanggal='$tglz'";
$g->table='terima_akt';

$grid["caption"] = "&nbsp";
$grid["multiselect"] = false;
$grid["width"] = "50%"; 
$grid["height"] = "30%";
$grid["rowNum"] = 150;
$grid["rownumbers"] = true;
$grid["rownumWidth"] = 30;
$grid["viewrecords"] = false;
$grid["autowidth"] = false; 
$grid["rowList"] = array();
$grid["pgbuttons"] = false;
$grid["pgtext"] = null;
$grid["toolbar"] = "bottom";
$grid["add_options"] = array('width'=>'350',
							 "font"=>"12px",
                             "closeAfterAdd"=>true, // close dialog after add/edit
                             "top"=>"200", // absolute top position of dialog
                             "left"=>"350" // absolute left position of dialog
                             );
$g->set_options($grid);

$col = array();
$col["title"] = "ID Terima"; 
$col["name"] = "IDtrm"; // grid column name, same as db field or alias from sql
$col["width"] = "100"; // width on grid
$col["hidedlg"] = true;
$col["hidden"] = true;
$col["editable"] = false;
$col["align"] = "center";
$cols[] = $col;   

$col = array();
$col["title"] = "Kode"; // caption of column, can use HTML tags too
$col["name"] = "Kode"; // grid column name, same as db field or alias from sql
$col["width"] = "100"; // width on grid
$col["editable"] = true;
$col["editrules"]["readonly"] = true; 
$col["show"] = array("list"=>false, "add"=>true, "edit"=>true);
$col["align"] = "center";
$cols[] = $col;   

$col = array();
$col["title"] = "Tangki"; // caption of column, can use HTML tags too
$col["name"] = "Tank"; // grid column name, same as db field or alias from sql
$col["width"] = "190"; // width on grid
$col["editable"] = true;
$col["editrules"]["readonly"] = true; 
$col["show"] = array("list"=>true, "add"=>true, "edit"=>true);
$col["align"] = "left";
$cols[] = $col;   

$col = array();
$col["title"] = "Jam"; // caption of column, can use HTML tags too
$col["name"] = "Waktu"; // grid column name, same as db field or alias from sql
$col["width"] = "130"; // width on grid
$col["search"] = false;
$col["editable"] = true;
$col["align"] = "center";
$col["formatter"] = "Time";
$col["formatoptions"] = array("srcformat"=>'H:i:s',"newformat"=>'H:i');
$col["editoptions"] = array("size"=>10, "defaultValue"=>"01:00"); 
$col["editrules"] = array("required"=>true); 
$cols[] = $col;   

$col = array();
$col["title"] = "Volume (bbl)"; // caption of column, can use HTML tags too
$col["name"] = "Volume"; // grid column name, same as db field or alias from sql
$col["width"] = "170"; // width on grid
$col["editable"] = true;
$col["align"] = "right";
$col["formatter"] = "number";
$col["formatoptions"] = array("thousandsSeparator" => ",","decimalSeparator" => ".","decimalPlaces" => 6);
$cols[] = $col;   

$g->set_columns($cols);
$g->set_actions(array(	"add"=>false, 
						"edit"=>false, 
						"delete"=>false,
						"rowactions"=>false,
						"autofilter" => false,
						"search" => false, 
 						"view" => false, 
                        "export"=>false 						
					) 
				);
				
$out = $g->render("list1");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
	
	<title>Terima Aktual</title>
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />
	<link rel="stylesheet" type="text/css" media="screen" href="lib/js/themes/sunny/jquery-ui.custom.css"></link>	
	<link rel="stylesheet" type="text/css" media="screen" href="lib/js/jqgrid/css/ui.jqgrid.css"></link>	

    <script src="js/bootstrap.min.js"></script>
	<script src="lib/js/jquery.min.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
	<script src="lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
	<style>
	  .ui-jqgrid {position: relative; font-size:14px; font-family:"tahoma","verdana","sans serif";}
	  .ui-widget button {font-family:"verdana","tahoma","sans serif"; font-size:14px;}
	  .ui-jqgrid .ui-pg-table td {
		font-size: 16px;}
	  .ui-jqgrid .ui-pg-input{
		height:12px;
		font-size:16px;
		margin:0; }
	  .ui-datepicker{
		font-size:12px;
		width:18em; }	
	  .disabled {
		pointer-events:none; 
		opacity:0.6;         
	  }
	  input[type='text'] {
		width:80px;
		padding-top: 2px;
		padding-bottom: 6px;
		-moz-box-shadow: 0px 0px 4px #ffffff;
		-webkit-box-shadow: 0px 0px 4px #ffffff;
		box-shadow: 0px 0px 4px #ffffff;}			
	  label {
		padding-top:6px;
		font: normal 16px verdana !important;
	  }
	  form {
		text-align:center;
		width:60%;
		margin: 0 auto;
	  }
	  h2 {
		text-align:center;
		width:80%;
		padding-bottom:4px;
		line-height:55%;
		margin: 0 auto;
	  }
	</style>
	<script>
		$(function() {
		$( "#tanggaldisp" ).datepicker({
		   altFormat: "dd-mm-yy",
           dateFormat: "dd-mm-yy",
		   onSelect : function(){ $('#myFormID').submit(); }		   
		   } );
		});
	
		var opts = {
			'ondblClickRow': function (id) {
				jQuery(this).jqGrid('editGridRow', id, <?php echo json_encode_jsfunc($g->options["edit_options"])?>);
			}
		};
	</script>
</head>
<body class="fixed-top">
	<?php include ("_topside_bar.php"); ?>
	<div id="main-content"> 
	 <!-- BEGIN PAGE CONTAINER-->
		<div class="container-fluid">
			<!-- BEGIN THEME CUSTOMIZER-->
			<div id="theme-change" class="hidden-phone">
				<i class="icon-eye-open"></i>
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
			<!-- END THEME CUSTOMIZER-->
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<ul class="breadcrumb">
				<li><a href="menu_admin.php"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
				<li><a href="#">Terima</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Aktual</a><span class="divider-last">&nbsp;</span></li>
			</ul><br>
			<form class="form-inline" id="myFormID" action="display_terima_akt.php" method="GET">
				<h2 class="text">Penerimaan <small>Aktual di SPU Liba, SP1 TTB, PPP dan KM3</small></h2>
				<label font size="14" for="tgl">Tanggal:</label>
				<div class="input-append date form_datetime">
					 <input type="text" id="tanggaldisp" name="tgl" value="<?php echo date_format(date_create($tgl),"d-m-Y");?>" 
						   size="12" placeholder="Masukkan tanggal"/><span class="add-on"><i class="icon-calendar"></i></span>
				</div>
			</form><br>
			<div align="center">			
				<?php echo $out?><br>
				<button class="btn btn-inverse" 
						onclick="window.location.href='submenu_tank.php'"> Back </button>			
			</div>
		</div>
    </div>
   <!-- BEGIN FOOTER -->
   <div id="footer">
       2016 &copy; Pertamina EP Asset 2 - Jalur Limau
      <div class="span pull-right">
         <span class="go-top"><i class="icon-arrow-up"></i></span>
      </div>
   </div>
   <!-- END FOOTER -->
   <script src="js/bootstrap.min.js"></script>
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
