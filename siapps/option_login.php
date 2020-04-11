<?php
include ("_script_phpgrid.php");

$g = new jqgrid();
$g->table = "option_login";

$grid["caption"] = "&nbsp;";
$grid["multiselect"] = true;
$grid["forceFit"] = true;
$grid["height"] = "320";
$grid["width"] = "600";
$grid["rowList"] = array();
$grid["pgbuttons"] = false;
$grid["pgtext"] = null;
$grid["rownumbers"] = true;
$grid["rownumWidth"] = 30;
$grid["rowNum"] = 150;
$grid["toolbar"] = "bottom";

$g->set_options($grid);

$g->set_actions(array(  "add"=>true, 
                        "edit"=>true, 
                        "delete"=>true, 
                        "search"=>false, 
                        "rowactions"=>false, 
                        "autofilter" => true ) ); 
$col = array();
$col["title"] = "Kode"; 
$col["name"] = "kode"; 
$col["width"] = "40"; 
$col["editable"] = true;
$col["align"] = "center";
$cols[] = $col;   

$col = array();
$col["title"] = "Identifier";
$col["name"] = "identifier"; 
$col["width"] = "100";
$col["editable"] = true;
$cols[] = $col;   

$col = array();
$col["title"] = "Label";
$col["name"] = "label"; 
$col["width"] = "100"; 
$col["search"] = false;
$col["editable"] = true;
$cols[] = $col;

$col = array();
$col["title"] = "Status";
$col["name"] = "status"; 
$col["width"] = "65"; 
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
	<title>Option Login</title>
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
		.ui-jqgrid .ui-pg-table td {font-size: 13px;}
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
			<ul class="breadcrumb">
				<li><a href="menu_admin.php"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
				<li><a href="#">Utility</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Login</a>&nbsp;<span class="divider-last">&nbsp;&nbsp;</span></li>
			</ul>	 
            <h2 class="text" >Option<small> Login</small></h2><br>
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
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <script src="js/scripts.js"></script>
   <script>
      jQuery(document).ready(function() {			
      	App.init();
		src="js/jquery.blockui.js";
      });
   </script>   
</body>
</html>
