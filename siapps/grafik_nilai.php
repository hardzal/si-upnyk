<?php
include ("_script_phpgrid.php");
$g = new jqgrid();
session_start();

$nomhs = $_SESSION['usr'];
$nama = $_SESSION['usrname'];
$hasil = mysql_query("SELECT * FROM buffer_nilai");
$jmlmka=mysql_num_rows($hasil);
while ($row = mysql_fetch_array($hasil)) {
	$datamka[] = $row;	}
foreach($datamka as $row) {
	$i++;
	$kode[$i]	= $row['kode'];
	$sks[$i]    = $row['sks'];
	$cfield[$i] = 'k'.$row['kode'];
}

$ipk=0.00;
$hasil = mysql_query("SELECT * FROM nilai WHERE nim='$nomhs'");
if(mysql_num_rows($hasil)>0){
	$row = mysql_fetch_array($hasil);
	for($i=1;$i<=$jmlmka;$i++){
		$x 	 = $cfield[$i];
		$nil = $row[$x];
		if($nil=='A'){
			$jna++; $jsa+=$sks[$i]; $bobot=4;
		}elseif($nil=='B+'){
			$jnbp++; $jsbp+=$sks[$i]; $bobot=3.5;
		}elseif($nil=='B'){
			$jnb++; $jsb+=$sks[$i]; $bobot=3;
		}elseif($nil=='C+'){
			$jncp++; $jscp+=$sks[$i]; $bobot=2.5;
		}elseif($nil=='C'){
			$jnc++; $jsc+=$sks[$i]; $bobot=2;
		}elseif($nil=='D'){
			$jnd++; $jsd+=$sks[$i]; $bobot=1;
		}elseif($nil=='E'){
			$jne++; $jse+=$sks[$i]; $bobot=0;
		}elseif($nil=='K'){
			$jnk++; $jsk+=$sks[$i]; $bobot=0;
		}
		$jsks += $sks[$i];
		$jsksbbt += $sks[$i] * $bobot;
	}
	$ipk = number_format($jsksbbt/$jsks,2);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Grafik Nilai</title>
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
	<?php include ("_topside_bar_mhs.php"); ?>
	<?php include("inc/fusioncharts.php"); ?>
	<?php include ("chart_nilai.php"); ?>
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
				<li><a href="#">Grafik</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Nilai</a><span class="divider-last">&nbsp;</span></li>
			</ul><br>
 			<div class="row-fluid">
				<div class="span2"></div>
				<div class="span8"><br>
 					<div id="chart-2" ></div>
				</div>
			</div><br>
 			<button style="margin-left: 230px" class="btn btn-inverse" 
					onclick="window.location.href='daftar_nilai.php'"> Back </button>
 		</div>
	<!-- BEGIN FOOTER -->
	<div id="footer">
       2019 &copy; Prodi Sistem Informasi
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
