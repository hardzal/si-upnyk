<?php
include ("_script_phpgrid.php");
$g = new jqgrid();
session_start();

$vmatkul = $_SESSION['matkul'];
$vdos    = $_SESSION['dos'];
$datascore=array(); $i=0;
$hasil = mysql_query("SELECT * FROM score_kuesioner");
while ($row = mysql_fetch_array($hasil)) {
	$datascore[] = $row;	}
foreach($datascore as $row) {
	$i++;
	$score[$i] = $row['score'];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Grafik Kuesioner</title>
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />
	<link href="lib/js/themes/sunny/jquery-ui.custom.css" rel="stylesheet" type="text/css" media="screen" ></link>	
	<link href="lib/js/jqgrid/css/ui.jqgrid.css" rel="stylesheet" type="text/css" media="screen" ></link>	

	<script src="js/fusioncharts.js"></script>
	<script src="lib/js/jquery.min.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
	<script src="lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
	<style>
	  label {
		padding-top:2px;
		padding-bottom:2px;
		line-height:100%;
		margin-left:245px;
		font: normal 16px verdana !important;
	  }
	</style>
</head>
<body class="fixed-top">
	<?php include ("_topside_bar_adm.php"); ?>
	<?php include("inc/fusioncharts.php"); ?>
	<?php include ("chart_kuesioner.php"); ?>
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
				<li><a href="menu_mhs.php"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
				<li><a href="#">Kuesioner</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Mahasiswa</a><span class="divider-last">&nbsp;</span></li>
			</ul><br>
 			<div class="row-fluid">
				<div class="span1"></div>
				<div class="span10">
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i></h4>
							<span class="tools">
							   <a href="javascript:;" class="icon-chevron-down"></a>
							   <a href="hasil_kuesioner.php" class="icon-remove"></a>
							</span>
                        </div>
						<div class="widget-body" style="width:900; height:500px;">
							<div id="chart-1" ></div>
						</div><br>
					</div>
				</div>
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
