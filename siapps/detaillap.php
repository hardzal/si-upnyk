<?php
include ("_script_phpgrid.php");
$g = new jqgrid();

$g->select_command = "SELECT * FROM lapangan WHERE kode<='P26'";
$g->table = "lapangan";

$grid["caption"] = "&nbsp;";
$grid["multiselect"] = true;
$grid["shrinkToFit"] = true;
$grid["height"] = "100%"; 
$grid["width"] = "900";
$grid["autowidth"] = false; 
$grid["rowList"] = array();
$grid["pgbuttons"] = false;
$grid["pgtext"] = null;
$grid["rownumbers"] = true;
$grid["rownumWidth"] = 30;
$grid["rowNum"] = 50;
$grid["toolbar"] = "bottom";

$g->set_options($grid);

$g->set_actions(array(  "add"=>true, 
                        "edit"=>true, 
                        "delete"=>false, 
                        "rowactions"=>false, 
                        "autofilter" => false ) ); 
$col = array();
$col["title"] = "No."; 
$col["name"] = "IDlap"; 
$col["width"] = "40"; 
$col["editable"] = true;
$col["align"] = "center";
$col["show"] = array("list"=>false, "add"=>false, "edit"=>false, "view"=>true, "bulkedit"=>true);
$cols[] = $col;   

$col = array();
$col["title"] = "Kode"; 
$col["name"] = "kode"; 
$col["width"] = "50"; 
$col["editable"] = true;
$col["align"] = "center";
$col["show"] = array("list"=>true, "add"=>false, "edit"=>false, "view"=>true, "bulkedit"=>true);
$cols[] = $col;   

$col = array();
$col["title"] = "Shipper";
$col["name"] = "identifier"; 
$col["width"] = "100";
$col["editable"] = true;
$cols[] = $col;   

$col = array();
$col["title"] = "Lapangan";
$col["name"] = "lapangan"; 
$col["width"] = "120"; 
$col["editable"] = true;
$col["search"] = false;
$cols[] = $col;   

$col = array();
$col["title"] = "Pengelola";
$col["name"] = "pengelola"; 
$col["width"] = "250";
$col["editable"] = true;
$col["search"] = false;
$cols[] = $col;   

$col = array();
$col["title"] = "Kode Report";
$col["name"] = "labelreport"; 
$col["width"] = "85"; 
$col["search"] = false;
$col["editable"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "Kode Grafik";
$col["name"] = "labelgrafik"; 
$col["width"] = "85"; 
$col["search"] = false;
$col["editable"] = true;
$cols[] = $col;

$g->set_columns($cols);
$out = $g->render("list1");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Detail Lap</title>
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />
	<link href="lib/js/themes/sunny/jquery-ui.custom.css" rel="stylesheet" type="text/css" media="screen" ></link>	
	<link href="lib/js/jqgrid/css/ui.jqgrid.css" rel="stylesheet" type="text/css" media="screen" ></link>	

	<script src="lib/js/jquery.min.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
	<script src="lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
	<style>	
		.ui-jqgrid {font-family: "tahoma","verdana","sans serif"; font-size: 13px;}
		.ui-jqgrid .ui-pg-table td {font-size: 12px;}
		h2 {
			text-align:center;
			width:70%;
			line-height:55%;
			margin:0 auto;
			padding-top:6px; }
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
	<?php include ("_topside_bar.php"); ?>
      <div id="main-content"> 
         <div class="container-fluid">
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
			<ul class="breadcrumb">
				<li><a href="menu_admin.php"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
				<li><a href="">Data</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Lapangan</a>&nbsp;<span class="divider-last">&nbsp;&nbsp;</span></li>
			</ul>	 
            <h2 class="text" >Data<small> Lapangan</small></h2><br>
            <div class="row-fluid">
 			   <div align="center">			
				   <?php echo $out?><br>
				   <button class="btn btn-inverse" onclick="window.location.href='menu_admin.php'"> Back </button>
			   </div><br>
            </div>
         </div>
      </div>
   <div id="footer">
       2016 &copy; Pertamina EP Asset 2 - Prabumulih
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
