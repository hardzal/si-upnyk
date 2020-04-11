<?php
include ("_script_phpgrid.php");
$g = new jqgrid();

if(isset($_GET['tgl'])) {
	$tgl	= $_GET['tgl'];
	$tglz	= date_format(date_create($tgl),"Y-m-d");
	$bulan1	= date_format(date_create(substr($tglz, -4).'-01-01'),'F Y');
	$bulanz = date_format(date_create($tglz),'F Y');	
	$blnini = date_format(date_create($tglz),'m');
} else {
	$tgl  	= date("d-m-Y");
	$tglz 	= date_format(date_create($tgl),"Y-m-d");
	$bulan1	= date_format(date_create(substr($tglz, -4).'-01-01'),'F Y');
	$bulanz = date_format(date_create($tglz),'F Y');	
	$blnini = date_format(date_create($tglz),'m');
}
if($blnini=='01'){
	$period = $bulanz;
}else{
	$period = 'January - '.$bulanz;
}

$datalap=array(); $kode=array(); $ship=array();
$hasil = mysql_query("SELECT * FROM lapangan WHERE kode>='P01' AND kode<='P26' ORDER BY kode");
while ($row = mysql_fetch_array($hasil)){
	$datalap[] = $row;	}
$i=0; $jmldata=0;
foreach($datalap as $row) {
	$i++;  $jmldata++;
	$kode[$i] = $row['kode'];
	$ship[$i] = $row['labelgrafik'];
}
$datatrm = array(); $i=0; 
$hasil  = mysql_query("SELECT * FROM terima_str_closing WHERE Tanggal='$tglz'");
$ndata  = mysql_num_rows($hasil);
while($row = mysql_fetch_assoc($hasil)) {
	$datatrm[] = $row;
}
foreach($datatrm as $row) {
	$i++;
	$kodetrm[$i] = $row['Kode'];
	$voltrm[$i]  = $row['Volume1'];
	$tloss[$i]	 = $row['TotalLossInd']+$row['Shrink1']+$row['Shrink2']+$row['Shrink3'];
	$trmakt[$i]  = $row['Terima_akt3'];
}
$arrKir = array(); $arrLos = array(); $arrTer = array();
$kir1  = 0; $kir2  = 0; $kir3  = 0; $kir4  = 0; $kir5  = 0; $kir6  = 0; $kir7  = 0; $kir8  = 0;
$kir9  = 0; $kir10 = 0; $kir11 = 0; $kir12 = 0; $kir13 = 0; $kir14 = 0; $kir15 = 0; $kir16 = 0;
$kir17 = 0; $kir18 = 0; $kir19 = 0; $kir20 = 0; $kir21 = 0; $kir22 = 0; $kir23 = 0; $kir24 = 0;
$kir25 = 0; $kir26 = 0;

$los1  = 0; $los2  = 0; $los3  = 0; $los4  = 0; $los5  = 0; $los6  = 0; $los7  = 0; $los8  = 0; 
$los9  = 0; $los10 = 0; $los11 = 0; $los12 = 0; $los13 = 0; $los14 = 0; $los15 = 0; $los16 = 0; 
$los17 = 0; $los18 = 0; $los19 = 0; $los20 = 0; $los21 = 0; $los22 = 0; $los23 = 0; $los24 = 0; 
$los25 = 0; $los26 = 0; 

$ter1  = 0; $ter2  = 0; $ter3  = 0; $ter4  = 0; $ter5  = 0; $ter6  = 0; $ter7  = 0; $ter8  = 0;
$ter9  = 0; $ter10 = 0; $ter11 = 0; $ter12 = 0; $ter13 = 0; $ter14 = 0; $ter15 = 0; $ter16 = 0;
$ter17 = 0; $ter18 = 0; $ter19 = 0; $ter20 = 0; $ter21 = 0; $ter22 = 0; $ter23 = 0; $ter24 = 0;
$ter25 = 0; $ter26 = 0;

$totalkir = 0; $totallos = 0; $terimatgl = 0;
$akukir = 0;   $akulos = 0;   $akuter = 0;
if($ndata>0){
	for($i=1; $i<=$ndata; $i++){
		if($kodetrm[$i]==$kode[1]){
			$kir1 = $kir1 + $voltrm[$i]; 
			$los1 = $los1 + $tloss[$i]; 
			$ter1 = $ter1 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[2]){
			$kir2 = $kir2 + $voltrm[$i]; 
			$los2 = $los2 + $tloss[$i]; 
			$ter2 = $ter2 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[3]){
			$kir3 = $kir3 + $voltrm[$i]; 
			$los3 = $los3 + $tloss[$i]; 
			$ter3 = $ter3 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[4]){
			$kir4 = $kir4 + $voltrm[$i]; 
			$los4 = $los4 + $tloss[$i]; 
			$ter4 = $ter4 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[5]){
			$kir5 = $kir5 + $voltrm[$i]; 
			$los5 = $los5 + $tloss[$i]; 
			$ter5 = $ter5 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[6]){
			$kir6 = $kir6 + $voltrm[$i]; 
			$los6 = $los6 + $tloss[$i]; 
			$ter6 = $ter6 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[7]){
			$kir7 = $kir7 + $voltrm[$i]; 
			$los7 = $los7 + $tloss[$i]; 
			$ter7 = $ter7 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[8]){
			$kir8 = $kir8 + $voltrm[$i]; 
			$los8 = $los8 + $tloss[$i]; 
			$ter8 = $ter8 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[9]){
			$kir9 = $kir9 + $voltrm[$i]; 
			$los9 = $los9 + $tloss[$i]; 
			$ter9 = $ter9 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[10]){
			$kir10 = $kir10 + $voltrm[$i]; 
			$los10 = $los10 + $tloss[$i]; 
			$ter10 = $ter10 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[11]){
			$kir11 = $kir11 + $voltrm[$i]; 
			$los11 = $los11 + $tloss[$i]; 
			$ter11 = $ter11 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[12]){
			$kir12 = $kir12 + $voltrm[$i]; 
			$los12 = $los12 + $tloss[$i]; 
			$ter12 = $ter12 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[13]){
			$kir13 = $kir13 + $voltrm[$i]; 
			$los13 = $los13 + $tloss[$i]; 
			$ter13 = $ter13 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[14]){
			$kir14 = $kir14 + $voltrm[$i]; 
			$los14 = $los14 + $tloss[$i]; 
			$ter14 = $ter14 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[15]){
			$kir15 = $kir15 + $voltrm[$i]; 
			$los15 = $los15 + $tloss[$i]; 
			$ter15 = $ter15 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[16]){
			$kir16 = $kir16 + $voltrm[$i]; 
			$los16 = $los16 + $tloss[$i]; 
			$ter16 = $ter16 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[17]){
			$kir17 = $kir17 + $voltrm[$i]; 
			$los17 = $los17 + $tloss[$i]; 
			$ter17 = $ter17 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[18]){
			$kir18 = $kir18 + $voltrm[$i]; 
			$los18 = $los18 + $tloss[$i]; 
			$ter18 = $ter18 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[19]){
			$kir19 = $kir19 + $voltrm[$i]; 
			$los19 = $los19 + $tloss[$i]; 
			$ter19 = $ter19 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[20]){
			$kir20 = $kir20 + $voltrm[$i]; 
			$los20 = $los20 + $tloss[$i]; 
			$ter20 = $ter20 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[21]){
			$kir21 = $kir21 + $voltrm[$i]; 
			$los21 = $los21 + $tloss[$i]; 
			$ter21 = $ter21 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[22]){
			$kir22 = $kir22 + $voltrm[$i]; 
			$los22 = $los22 + $tloss[$i]; 
			$ter22 = $ter22 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[23]){
			$kir23 = $kir23 + $voltrm[$i]; 
			$los23 = $los23 + $tloss[$i]; 
			$ter23 = $ter23 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[24]){
			$kir24 = $kir24 + $voltrm[$i]; 
			$los24 = $los24 + $tloss[$i]; 
			$ter24 = $ter24 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[25]){
			$kir25 = $kir25 + $voltrm[$i]; 
			$los25 = $los25 + $tloss[$i]; 
			$ter25 = $ter25 + $trmakt[$i];
		}
		if($kodetrm[$i]==$kode[26]){
			$kir26 = $kir26 + $voltrm[$i]; 
			$los26 = $los26 + $tloss[$i]; 
			$ter26 = $ter26 + $trmakt[$i];
		}
	}
}
$arrKir = array($kir1, $kir2, $kir3, $kir4, $kir5, $kir6, $kir7, $kir8, $kir9, $kir10, $kir11, $kir12, $kir13, $kir14,
				$kir15, $kir16, $kir17, $kir18, $kir19, $kir20, $kir21, $kir22, $kir23, $kir24, $kir25, $kir26);
$arrLos = array($los1, $los2, $los3, $los4, $los5, $los6, $los7, $los8, $los9, $los10, $los11, $los12, $los13, $los14, 
				$los15, $los16, $los17, $los18, $los19, $los20, $los21, $los22, $los23, $los24, $los25, $los26);
$arrTer = array($ter1, $ter2, $ter3, $ter4, $ter5, $ter6, $ter7, $ter8, $ter9, $ter10, $ter11, $ter12, $ter13, $ter14, 
				$ter15, $ter16, $ter17, $ter18, $ter19, $ter20, $ter21, $ter22, $ter23, $ter24, $ter25, $ter26);
				
//----------------------- Per Tanggal ----------------------------
$hasil = mysql_query("SELECT sum(Totalvol) AS Terima FROM terima_akt WHERE Tanggal='$tglz' AND kode>'P28' AND kode<'P35'");
$row = mysql_fetch_assoc($hasil);
$terimap3tgl = $row['Terima'];
$warna2 = '#004fae';

$hasil = mysql_query("SELECT sum(Volume) AS Kirim FROM kirim_shp WHERE Tanggal='$tglz' AND kode>'P28'");
$row = mysql_fetch_assoc($hasil);
$kirimp3tgl  = $row['Kirim'];

$hasil = mysql_query("SELECT sum(Totalvol) AS Terima FROM terima_akt WHERE Tanggal='$tglz' AND kode='P35'");
$row = mysql_fetch_assoc($hasil);
$terimakm3tgl = $row['Terima'];

$ulimtgl = 24000;

//----------------------- Per Bulan ----------------------------
$hasil = mysql_query("SELECT sum(Totalvol) AS Terima FROM terima_akt 
		 WHERE Date_Format(Tanggal,'%M %Y')='$bulanz' AND kode>'P28' AND kode<'P35'");
$row = mysql_fetch_assoc($hasil);
$terimap3bln = $row['Terima'];

$hasil = mysql_query("SELECT sum(Volume) AS Kirim FROM kirim_shp 
		 WHERE Date_Format(Tanggal,'%M %Y')='$bulanz' AND kode>'P28'");
$row = mysql_fetch_assoc($hasil);
$kirimp3bln  = $row['Kirim'];

$hasil = mysql_query("SELECT sum(Totalvol) AS Terima FROM terima_akt 
		 WHERE Date_Format(Tanggal,'%M %Y')='$bulanz' AND kode='P35'");
$row = mysql_fetch_assoc($hasil);
$terimakm3bln = $row['Terima'];

if(strlen($terimap3bln)<=5){
	$klp = 1000;
}elseif(strlen($terimap3bln)==6){
	$klp = 10000;
}else{
	$klp = 100000;
}
$remainder = $terimakm3bln % 4;
$quotient  = ($terimakm3bln - $remainder) / 4;
$intv	   = round($quotient/$klp,0) * $klp;
$ulimbln   = 5 * $intv;

//----------------------- Per Periode ----------------------------
$hasil = mysql_query("SELECT sum(Totalvol) AS Terima FROM terima_akt 
		 WHERE Date_Format(Tanggal,'%M %Y')>='$bulan1' AND Date_Format(Tanggal,'%M %Y')<='$bulanz' 
		 AND kode>'P28' AND kode<'P35'");
$row = mysql_fetch_assoc($hasil);
$terimap3prd = $row['Terima'];

$hasil = mysql_query("SELECT sum(Volume) AS Kirim FROM kirim_shp 
		 WHERE Date_Format(Tanggal,'%M %Y')>='$bulan1' AND Date_Format(Tanggal,'%M %Y')<='$bulanz' AND kode>'P28'");
$row = mysql_fetch_assoc($hasil);
$kirimp3prd  = $row['Kirim'];

$hasil = mysql_query("SELECT sum(Totalvol) AS Terima FROM terima_akt 
		 WHERE Date_Format(Tanggal,'%M %Y')>='$bulan1' AND Date_Format(Tanggal,'%M %Y')<='$bulanz' AND kode='P35'");
$row = mysql_fetch_assoc($hasil);
$terimakm3prd = $row['Terima'];

if(strlen($terimap3prd)<=5){
	$klp = 1000;
}elseif(strlen($terimap3prd)==6){
	$klp = 10000;
}else{
	$klp = 100000;
}
$remainder = $terimakm3prd % 4;
$quotient  = ($terimakm3prd - $remainder) / 4;
$intv	   = round($quotient/$klp,0) * $klp;
$ulimprd   = 5 * $intv;

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
	<link href="lib/js/themes/sunny/jquery-ui.custom.css" rel="stylesheet" type="text/css" media="screen" ></link>	
	<link href="lib/js/jqgrid/css/ui.jqgrid.css" rel="stylesheet" type="text/css" media="screen" ></link>	

	<script src="js/fusioncharts.js"></script>
	<script src="lib/js/jquery.min.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
	<script src="lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
	<style>
	  .ui-datepicker{
		width:18em; }	
	  .ui-datepicker .ui-datepicker-title select{
	    font-size:1.2em; }
	  .button {
		position: absolute;	}
	  input[type="text"] {
		width: 90px;
	  input[type='text'] {
		  -moz-box-shadow: 0px 0px 4px #ffffff;
		  -webkit-box-shadow: 0px 0px 4px #ffffff;
		  box-shadow: 0px 0px 4px #ffffff;}				
	</style>
	<script>
		$(function() {
		$( "#tanggal" ).datepicker({
		   altFormat: "dd-mm-yy",
           dateFormat: "dd-mm-yy",
		   onSelect : function(){ $('#myFormID').submit(); }		   
		   } );
		});
	</script>
</head>
<body class="fixed-top">
	<?php include("inc/fusioncharts.php"); ?>
	<?php include ("chart_1_spv.php"); ?>
	<?php include ("chart_2_spv.php"); ?>
	<?php include ("chart_3_spv.php"); ?>
	<?php include ("chart_4_spv.php"); ?>
	<?php include ("chart_5_spv.php"); ?>
	<?php include ("chart_6_spv.php"); ?>
	<?php include ("chart_7_spv.php"); ?>
	<?php include ("chart_8_spv.php"); ?>
	<?php include ("chart_9_spv.php"); ?>
	<?php include ("chart_10_spv.php"); ?>
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
			<div class="row-fluid">
				<form id="myFormID" action="dashboard_adm.php" method="GET">
					<span style="padding-left: 5px"><br>
					<div class="input-append date form_datetime">
						<input type="text" id="tanggal" name="tgl" value=
							"<?php echo date_format(date_create($tgl),"d-m-Y");?>" 
							size="16" placeholder="Masukkan tanggal"/><span class="add-on"><i class="icon-calendar"></i></span>
					</div> 
				</form>
			</div>
			<div id="page">
				<div class="widget">
					<div class="widget-body">
						<div id="chart-1" style="height:410px;"></div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span4">
						<div class="widget">
							<div class="widget-body">
								<div id="chart-2" style="height:270px;"></div>
							</div>
						</div>
					</div>
					<div class="span4">
						<div class="widget">
							<div class="widget-body">
								<div id="chart-3" style="height:270px;"></div>
							</div>
						</div>
					</div>
					<div class="span4">
						<div class="widget">
							<div class="widget-body">
								<div id="chart-4" style="height:270px;"></div>
							</div>
						</div>
					</div>
				</div>			
				<div class="row-fluid">
					<div class="span4">
						<div class="widget">
							<div class="widget-body">
								<div id="chart-5" style="height:270px;"></div>
							</div>
						</div>
					</div>
					<div class="span4">
						<div class="widget">
							<div class="widget-body">
								<div id="chart-6" style="height:270px;"></div>
							</div>
						</div>
					</div>
					<div class="span4">
						<div class="widget">
							<div class="widget-body">
								<div id="chart-7" style="height:270px;"></div>
							</div>
						</div>
					</div>
				</div>			
				<div class="row-fluid">
					<div class="span4">
						<div class="widget">
							<div class="widget-body">
								<div id="chart-8" style="height:270px;"></div>
							</div>
						</div>
					</div>
					<div class="span4">
						<div class="widget">
							<div class="widget-body">
								<div id="chart-9" style="height:270px;"></div>
							</div>
						</div>
					</div>
					<div class="span4">
						<div class="widget">
							<div class="widget-body">
								<div id="chart-10" style="height:270px;"></div>
							</div>
						</div>
					</div>
				</div>			
			</div>
		 </div>		
         <!-- END PAGE CONTAINER-->	
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
