<?php
include ("_script_phpgrid.php");
$g = new jqgrid();
if (!isset($_SESSION['usr'])) 
	{  echo "<script>window.location='index.php'</script>";} 
else 
	{ include ("_db.php");
	$user = $_SESSION['usr']; 
	$username = $_SESSION['usrname']; 
	}
$thn7  = substr($user,3,2)+7;
$tglin = '20'.substr($user,3,2).'-09-01';
$tglout = '20'.$thn7.'-08-31';
$tglskrg = date_create(date());
$interval = date_create($tglin)->diff($tglskrg);
$interval2 = $tglskrg->diff(date_create($tglout));
$tempuh=$interval->y . " tahun, " . $interval->m." bulan, ".$interval->d." hari"; 
$sisa=$interval2->y . " tahun, " . $interval2->m." bulan, ".$interval2->d." hari";
$years=$interval->y + $interval->m/30 + $interval->d/365;

?>
<!DOCTYPE html>
<head>
   <meta charset="utf-8" />
   <title>Main Menu</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style_responsive.css" rel="stylesheet" />
   <link href="css/style_default.css" rel="stylesheet" id="style_color" />
	<script src="js/fusioncharts.js"></script>
	<script src="lib/js/jquery.min.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
	<script src="lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
</head>
<body class="fixed-top">
	<?php include ("_topside_bar_mhs.php"); ?>
	<?php include("inc/fusioncharts.php"); ?>
	<?php include ("chart_masa_studi.php"); ?>
      <div id="main-content">
         <div class="container-fluid">
            <div class="row-fluid">
               <div class="span12">
					<div id="theme-change" class="hidden-phone">
						<i class="icon-cogs"></i>
						<span class="settings">
							<span class="text">Warna:</span>
							<span class="colors">
								<span class="color-gray" data-style="gray"></span>
								<span class="color-purple" data-style="purple"></span>
								<span class="color-cyan" data-style="cyan"></span>
								<span class="color-default" data-style="default"></span>
							</span>
						</span>
					</div>
                  <h3 class="page-title">Home
                     <small>Halaman Beranda</small>
                  </h3>
                  <h2 class="page-title" style="text-align:center; margin-top:-45px"><strong>Student Page</strong>
                  </h2>
				  <label class="control-label" style="text-align:center; font-size: 17px"
				  >Halloo... <?php echo $username?></label>
				  <label class="control-label" style="text-align:center; font-size: 17px"
				  >Selamat Bergabung</label><br><br>
				  <div id="chart-1" style="height:370px; text-align:center"></div>
				  <label class="control-label" style="font-size: 18px; text-align:center">Telah ditempuh : <?php echo $tempuh ;?></label>
				  <label class="control-label" style="font-size: 18px; text-align:center">Sisa waktu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							: <?php echo $sisa ;?></label>
              </div>
            </div>
			<div id="page"></div>
         </div>
      </div>
   <div id="footer">
       2019 &copy; Prodi Sistem Informasi
      <div class="span pull-right">
         <span class="go-top"><i class="icon-arrow-up"></i></span>
      </div>
   </div>
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script src="js/scripts.js"></script>
   <script>
      jQuery(document).ready(function() {			
      	App.init();
      });
   </script>
</body>
</html>
