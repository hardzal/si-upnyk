<?php
include ("_script_phpgrid.php");
$g = new jqgrid();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Dashboard</title>
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />
	<script src="lib/js/jquery.min.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
	<style>
		mark { background-color: lightgray;
			   color: black; }
	</style>
</head>
<body class="fixed-top">
	<?php include ("_topmenu.php"); ?>
    <!-- BEGIN PAGE CONTAINER-->
	<div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div id="sidebar" class="nav-collapse collapse">
         <div class="sidebar-toggler hidden-phone"></div>   
		 <!-- BEGIN SIDEBAR MENU -->
			<?php include ("_sidebar_adm.php"); ?>
		 <!-- END SIDEBAR MENU -->
      </div>
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
			<ul class="breadcrumb">
				<li><a href="menu_admin.php"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
				<li><a href="#">Admin</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Help</a><span class="divider-last">&nbsp;</span></li>
			</ul>	 			
			<div id="page">
				<div class="span12">
					<div class="widget">
						<div class="widget-title">
							<h4><i class="icon-reorder"></i> Help Contain</h4>
						</div>
						<div class="widget-body">
							<div id="" style="height:600px;">
								<span><p>a. <mark>&nbsp;<i class="icon-home"></i> Home&nbsp;</mark> : Menu ini digunakan untuk menampilkan
								halaman beranda, sebagai halaman depan aplikasi.</p></span>
								<span><p>b. <mark>&nbsp;<i class="icon-fire"></i> Lapangan&nbsp;</mark> : Menu ini digunakan untuk mengelola
								data lapangan, terdiri dari:</p></span>
								<span><p style="text-indent:30px; line-height:90%"><mark>&nbsp;Detail&nbsp;</mark> : Menu ini digunakan untuk mengelola
								data detail lapangan</p></span>
								<span><p style="text-indent:30px; line-height:90%"><mark>&nbsp;Properti Komponen&nbsp;</mark> : Menu ini 
								digunakan untuk mengelola data karakteristik fluida produksi untuk masing-masing lapangan</p></span>
								<span><p style="text-indent:30px; line-height:90%"><mark>&nbsp;Konstata Emulsi&nbsp;</mark> : Menu ini 
								digunakan untuk mengelola data konstanta emulsi fluida dari masing-masing lapangan yang digunakan 
								untuk perhitungan oil losses karena </p></span>
								<span><p style="text-indent:140px; line-height:50%"> percampuran fluida (shrinkage)</p></span>
								<span><p>c. <mark>&nbsp;<i class="icon-upload-alt"></i> Pengiriman&nbsp;</mark> : Menu ini digunakan untuk 
								mengelola data pengiriman produksi oil dari masing-masing shipper. Caranya pilih nama shipper hingga 
								muncul tabel history pengiriman shipper</p></span>
								
								
								
							</div>
						</div>
					</div>
				</div>
			  </div>			   
			</div>		
            <!-- BEGIN PAGE CONTENT-->
		  </div>
         <!-- END PAGE CONTAINER-->	
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
