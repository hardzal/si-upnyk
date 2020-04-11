<?php
session_start();
if (!isset($_SESSION['usr'])){  
	echo "<script>window.location='index.php'</script>";
}else{ 
    include ("_db.php");
	$user = $_SESSION['usr']; 
}
	  
include ("_script_phpgrid.php");
$g = new jqgrid();
$g->select_command = "SELECT * FROM login";
$g->table = "login";

$grid["caption"] = "&nbsp;Data Login User";
$grid["sortname"] = "UserID"; // by default sort grid by this field
$grid["sortorder"] = "Asc"; // ASC or DESC$grid["multiselect"] = true;
$grid["forceFit"] = false;
$grid["height"] = "450";
$grid["width"] = "900";
$grid["rowList"] = array();
$grid["pgbuttons"] = false;
$grid["pgtext"] = null;
$grid["rownumbers"] = true;
$grid["rownumWidth"] = 30;
$grid["rowNum"] = 5000;
$grid["multiselect"] = true;
$grid["toolbar"] = "bottom";

$g->set_options($grid);

$col = array();
$col["title"]   = "ID";
$col["name"]    = "ID"; 
$col["width"]   = "20"; 
$col["hidden"] = true;
$col["hidedlg"] = true;
$col["editable"] = true;
$col["align"]   = "center";
$cols[] = $col;   

$col = array();
$col["title"] = "User ID";
$col["name"] = "UserID"; 
$col["width"] = "90"; 
$col["editable"] = true;
$cols[] = $col;   

$col = array();
$col["title"] = "User Name";
$col["name"] = "Username"; 
$col["width"] = "275"; 
$col["editable"] = true;
$cols[] = $col;   

$col = array();
$col["title"] = "Password"; 
$col["name"] = "Password"; 
$col["width"] = "275";
$col["editable"] = true;
$col["editoptions"] = array("defaultValue"=>md5('si123'));
$cols[] = $col;   

$col = array();
$col["title"] = "Status";
$col["name"]  = "Status"; 
$col["width"] = "90"; 
$col["show"]  = array("list"=>true, "add"=>true, "edit"=>true);
$col["editable"] = true;
$col["edittype"] = "select"; 
$col["editoptions"] = array("value"=>'Mahasiswa:Mahasiswa;Dosen:Dosen;Admin:Admin');
$col["formatter"] = "select";
$col["stype"] = "select"; 
$col["searchoptions"]["sopt"] = array("cn");
$cols[] = $col;   

$col = array();
$col["title"] = "Keterangan";
$col["name"]  = "Keterangan"; 
$col["width"] = "70"; 
$col["show"]  = array("list"=>true, "add"=>true, "edit"=>true);
$col["editable"] = true;
$col["edittype"] = "select"; 
$col["editoptions"] = array("value"=>'Aktif:Aktif;Lulus:Lulus;Pindah:Pindah;Keluar:Keluar;DO:DO');
$col["formatter"] = "select";
$col["stype"] = "select"; 
$col["searchoptions"]["sopt"] = array("cn");
$cols[] = $col;   

$g->set_columns($cols);
$g->set_actions(array(  "add"=>true, 
						"edit"=>true, 
						"delete"=>true,
						"rowactions"=>false,
						"autofilter" => false ) );
						
$e["on_insert"] = array("add_login", null, true);
$g->set_events($e);

function add_login(&$data)
{	
	$uid 	= $data["params"]["UserID"];
	$uname 	= $data["params"]["Username"];
	$pw 	= md5($data["params"]["Password"]);
	$stat	= $data["params"]["Status"];
	$ket	= $data["params"]["Keterangan"];
	$hasil = mysql_query("SELECT * FROM option_login");
	$row   = mysql_fetch_assoc($hasil);
    $data["params"]["UserID"]=$uid;
    $data["params"]["Username"]=$uname;
    $data["params"]["Password"]=$pw;
    $data["params"]["Status"]=$stat;
    $data["params"]["Keterangan"]=$ket;
};	

						
$out = $g->render("list1");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Data Login</title>
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
	.ui-jqgrid {
		font-family: "tahoma","verdana","sans serif";
		font-size: 13px;}
	 .ui-jqgrid .ui-pg-table td {
		font-size: 13px;}
	</style>
	
</head>

<body class="fixed-top">
	<?php include ("_topside_bar_adm.php"); ?>
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
				<li><a href="#">Kelola</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Login</a><span class="divider-last">&nbsp;</span></li>
			</ul>	 
           <!-- BEGIN PAGE HEADER-->
            <h2 class="text" style="margin-left: 550px" >Daftar<small> Login User</small></h2>
            <!-- END PAGE HEADER-->		 
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
 			  <div style="margin-left: 170px">			
				<?php echo $out?>
			  </div>	
            </div>
           <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->	
      </div>
    </div>
   <!-- BEGIN FOOTER -->
   <div id="footer">
       2019 &copy; Prodi Sistem Informasi
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
      	App.init();
		src="js/jquery.blockui.js";
      });
   </script>      
	
</body>
</html>
