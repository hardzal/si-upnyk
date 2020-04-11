<?php
include ("_script_phpgrid.php");
$g = new jqgrid();

$nomhs = $_SESSION['usr'];
$nama = $_SESSION['usrname'];

mysql_query("UPDATE buffer_nilai SET nilai=''");
$hasil = mysql_query("SELECT * FROM buffer_nilai");
$jmlmka=mysql_num_rows($hasil);
while ($row = mysql_fetch_array($hasil)) {
	$datamka[] = $row;	}
foreach($datamka as $row) {
	$i++;
	$kode[$i]	= $row['kode'];
	$cfield[$i] = 'k'.$row['kode'];
}

$hasil = mysql_query("SELECT * FROM nilai WHERE nim='$nomhs'");
if(mysql_num_rows($hasil)>0){
	$row = mysql_fetch_array($hasil);
	for($i=1;$i<=$jmlmka;$i++){
		$x 	 = $cfield[$i];
		$nil = $row[$x];
		mysql_query("UPDATE buffer_nilai SET nilai='$nil' WHERE kode='$kode[$i]'");
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
	<title>Read Nilai</title>
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />
	<link rel="stylesheet" type="text/css" media="screen" href="lib/js/themes/sunny/jquery-ui.custom.css"></link>	

    <script src="js/bootstrap.min.js"></script>
	<script src="lib/js/jquery.min.js" type="text/javascript"></script>
	<script src="lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
	<style>
	  #myProgress {
		  width: 100%;
		  background-color: #ddd;
		}
	  #myBar {
		  width: 1%;
		  height: 30px;
		  background-color: #2ebeb3;
		  text-align: center;
		  line-height: 30px;
		  color: white;
		}
	  h2 {
		text-align:center;
		width:70%;
		line-height:55%;
		margin: 0 auto;
		padding-bottom:6px;
	  }
	</style>
	<script>
		function progressbar() {
		  var elem = document.getElementById("myBar");   
		  var width = 1;
		  var id = setInterval(frame, 5);
		  function frame() {
			if (width >= 100) {
			  clearInterval(id);
			} else {
			  width++; 
			  elem.style.width = width + '%'; 
			  elem.innerHTML = width * 1  + '%';
			}
		  }
		}	
		window.onload = progressbar;
		var t = setTimeout("document.myform.submit();",1500); //2 seconds measured in miliseconds
	</script>    
</head>
<body class="fixed-top">
	<?php include ("_topside_bar_mhs.php"); ?>	
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
				<li><a href="#">Read </a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Nilai</a><span class="divider-last">&nbsp;</span></li>
			</ul><br><br>
			<div class="row-fluid">
				<div class="span3"></div>
				<div class="span6">
					<div class="widget">
						<div class="widget-title">
							<h4><i class="icon-reorder"></i></h4>
							<span class="tools">
							<a href="menu_admin.php" class="icon-remove"></a>
							</span>
						</div>
						<div class="widget-body">
							<div class="">
								<h2 class="text">Read <small>Daftar Nilai</small></h2>
							</div><br>
							<h2 class="text"><small>Proses</small></h2>
							<div style="position:relative; color:#009688" id="myProgress">
								<div id="myBar">0%</div>
							</div>
							<form name="myform" action="daftar_nilai.php" method="post"></form><br>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
       2019 &copy; Prodi Sistem Informasi
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
