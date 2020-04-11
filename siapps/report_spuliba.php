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

$datalap=array();
$hasil = mysql_query("SELECT * FROM lapangan WHERE kode>='P17' AND kode<='P24' ORDER BY kode");
while ($row = mysql_fetch_array($hasil)){
	$datalap[] = $row;	}
$i=16; $jmldata=1;
foreach($datalap as $row) {
	$i++;  $jmldata++;
	$ckd[$i] = $row['kode'];
	$shp[$i]   = $row['labelreport'];
}
for($i=1; $i<=11; $i++){
	$field[$i]= 'Shipper'.$i;
}
$kode[1]=$ckd[21]; $kode[2]=$ckd[24]; $kode[3]=$ckd[22]; $kode[4]=$ckd[23]; $kode[5]=$ckd[17]; $kode[6]=$ckd[17]; 
$kode[7]=$ckd[18]; $kode[8]=$ckd[19]; $kode[9]=$ckd[20]; 

$ship[1]=$shp[21]; $ship[2]=$shp[24]; $ship[3]=$shp[22]; $ship[4]=$shp[23]; 
$ship[5]='ASD<br>78.04 %'; $ship[6]='ASD<br>21.96 %'; 
$ship[7]=$shp[18]; $ship[8]=$shp[19]; $ship[9]=$shp[20];

mysql_query("DELETE FROM bufferreport");
mysql_query("INSERT INTO bufferreport SELECT * FROM terima_str_closing WHERE 
			kode>='P17' AND kode<='P24' AND tanggal='$tglz' ORDER BY kode");
for($i=1; $i<=9; $i++){
	mysql_query("UPDATE jr_limau SET $field[$i]=''");
}
for($i=1; $i<=9; $i++){
//  -------------  Individual ---------------------
    if($i==5){
		$fx=0.7804;
	}elseif($i==6){
		$fx=0.2196;
	}else{
		$fx=1;
	}
	mysql_query("UPDATE bufferreport SET LossGain1=CONCAT('(',TRUNCATe(ABS(selisih1*$fx),3),')') WHERE selisih1<0");
	mysql_query("UPDATE bufferreport SET LossGain1='   -   ' WHERE selisih1=0.000");
	mysql_query("UPDATE bufferreport SET LossGain1=CONCAT(TRUNCATe(selisih1*$fx,3)) WHERE selisih1>0.0000");
	mysql_query("UPDATE bufferreport SET LossGain2=CONCAT('(',TRUNCATe(ABS(selisih2*$fx),3),')') WHERE selisih2<0");
	mysql_query("UPDATE bufferreport SET LossGain2='   -   ' WHERE selisih2=0.000");
	mysql_query("UPDATE bufferreport SET LossGain2=CONCAT(TRUNCATe(selisih2*$fx),3) WHERE selisih2>0.0000");
	mysql_query("UPDATE bufferreport SET LossGain3=CONCAT('(',TRUNCATe(ABS(selisih3*$fx),3),')') WHERE selisih3<0");
	mysql_query("UPDATE bufferreport SET LossGain3='   -   ' WHERE selisih3=0.000");
	mysql_query("UPDATE bufferreport SET LossGain3=CONCAT(TRUNCATe(selisih3*$fx),3) WHERE selisih3>0.0000");
	
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Volume1 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b01'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT PersenWC FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b02'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT WaterCut FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b03'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT VolNet FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b04'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT FKE FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b05'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Emulsi FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b06'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT FKF FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b07'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Flash FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b08'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT TotalLossInd FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b09'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Net1 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b10'");
	//     SPU Liba
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT FKShr1 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b12'");	
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Shrink1 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b13'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Kirim_kor1 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b14'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Terima_akt1 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b15'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT LossGain1 FROM bufferreport WHERE kode='$kode[$i]') WHERE baris='b16'");

	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Volume2 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b17'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Awal2 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b18'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Akhir2 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b19'");
	//   PPP
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT FKShr2 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b21'");	
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Shrink2 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b22'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Kirim_kor2 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b23'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Terima_akt2 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b24'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT LossGain2 FROM bufferreport WHERE kode='$kode[$i]') WHERE baris='b25'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Emulsi+Flash+Shrink1+Shrink2 FROM bufferreport WHERE kode='$kode[$i]') * $fx
				WHERE baris='b26'");	
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Volume3 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b27'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Awal3 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b28'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Akhir3 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b29'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Akhir3-Awal3 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b30'");	
	//   KM3 Plaju
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT FKShr3 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b32'");	
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Shrink3 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b33'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Kirim_kor3 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b34'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT Terima_akt3 FROM bufferreport WHERE kode='$kode[$i]') * $fx WHERE baris='b35'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT LossGain3 FROM bufferreport WHERE kode='$kode[$i]') WHERE baris='b36'");
	mysql_query("UPDATE jr_limau SET $field[$i]=(SELECT LossGainall FROM bufferreport WHERE kode='$kode[$i]') WHERE baris='b38'");
}

$g->table = "jr_limau";

$grid["caption"] = "&nbsp;Joint Report";
$grid["multiselect"] = false;
$grid["autowidth"] = false;
$grid["shrinkToFit"] = false;
$grid["height"] = "350"; 
$grid["width"] = "1095"; 
$grid["multiselect"] = false;
$grid["autowidth"] = false; 
$grid["rowList"] = array();
$grid["pgbuttons"] = false;
$grid["pgtext"] = null;
$grid["rownumbers"] = true;
$grid["rownumWidth"] = 30;
$grid["rowNum"] = 50;
$grid["scroll"] = true; 

$g->set_options($grid);

$col = array();
$col["title"] = "Uraian";
$col["name"] = "Item"; 
$col["width"] = "255";
$col["editable"] = true;
$cols[] = $col;   

$col = array();
$col["title"] = "$ship[1]";
$col["name"] = "Shipper1"; 
$col["width"] = "80"; 
$col["editable"] = true;
$col["align"] = "right";
$cols[] = $col;

$col = array();
$col["title"] = "$ship[2]";
$col["name"] = "Shipper2"; 
$col["width"] = "80"; 
$col["editable"] = true;
$col["align"] = "right";
$cols[] = $col;

$col = array();
$col["title"] = "$ship[3]";
$col["name"] = "Shipper3"; 
$col["width"] = "75"; 
$col["editable"] = true;
$col["align"] = "right";
$cols[] = $col;

$col = array();
$col["title"] = "$ship[4]";
$col["name"] = "Shipper4"; 
$col["width"] = "75"; 
$col["editable"] = true;
$col["align"] = "right";
$cols[] = $col;

$col = array();
$col["title"] = "$ship[5]";
$col["name"] = "Shipper5"; 
$col["width"] = "90"; 
$col["editable"] = true;
$col["align"] = "right";
$cols[] = $col;

$col = array();
$col["title"] = "$ship[6]";
$col["name"] = "Shipper6"; 
$col["width"] = "90"; 
$col["editable"] = true;
$col["align"] = "right";
$col["align"] = "right";
$cols[] = $col;

$col = array();
$col["title"] = "$ship[7]";
$col["name"] = "Shipper7"; 
$col["width"] = "80"; 
$col["editable"] = true;
$col["align"] = "right";
$cols[] = $col;

$col = array();
$col["title"] = "$ship[8]";
$col["name"] = "Shipper8"; 
$col["width"] = "84"; 
$col["editable"] = true;
$col["align"] = "right";
$cols[] = $col;

$col = array();
$col["title"] = "$ship[9]";
$col["name"] = "Shipper9"; 
$col["width"] = "84"; 
$col["editable"] = true;
$col["align"] = "right";
$cols[] = $col;

$g->set_columns($cols);

$g->set_actions(array(  "add"=>false, 
                        "edit"=>false, 
                        "delete"=>false, 
						"search" => false,
                        "export_excel"=>true,
						"rowactions"=>false,
                        "autofilter"=>false ) ); 
$out = $g->render("list1");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Laporan SPU Liba</title>
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
	  .ui-jqgrid .ui-pg-selbox {
		font-size:13px;
		line-height:4px;
		display:block;
		height:26px;
		margin: 0em; }
	  .ui-jqgrid .ui-pg-input{
		height:13px;
		font-size:13px;
		margin:0; }
	  .ui-datepicker{
		width:20em; }	
	  .ui-datepicker .ui-datepicker-title select{
		font-size:1.3em; }
	  .button {
		position: absolute;	}
	  input[type="text"] {
		width: 120px;
	  .disabled {
		pointer-events:none; 
		opacity:0.6; }
	  input[type='text'] {
		-moz-box-shadow: 0px 0px 4px #ffffff;
		-webkit-box-shadow: 0px 0px 4px #ffffff;
		box-shadow: 0px 0px 4px #ffffff;}				
		
	</style>
	<script>
		$(function() {
			$('.TglPicker').datepicker({
				dateFormat: 'dd-mm-yy'
			})	});

		$(function() {
		$( "#tanggalreport" ).datepicker({
		   altFormat: "dd-mm-yy",
           dateFormat: "dd-mm-yy",
		   onSelect : function(){ $('#myFormID').submit(); }		   
		   } );
		});
	</script>
</head>

<body class="fixed-top">
    <style>
		.focus-cell
		{ background: #bcff79; }
		.focus-cell-1
		{ background: #ffaeae; }
		.focus-cell-tloss
		{ background: #ffff77; }

    </style>
	<?php include ("_topside_bar_spuliba.php"); ?>
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
				<li><a href="#">Joint</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Report</a>&nbsp;<span class="divider-last">&nbsp;&nbsp;</span></li>
			</ul>	 
 			<h2 class="text" style="position:absolute; left:47%";>Joint Report <small> SPU Liba
			</small></h2><br>
           <!-- BEGIN PAGE CONTENT-->
 			<form id="myFormID" action="report_spuliba.php" method="GET">
				<div class="input-append date form_datetime">
					<input type="text" id="tanggalreport" name="tgl" value=
						"<?php echo date_format(date_create($tgl),"d-m-Y");?>" 
						size="16" placeholder="Masukkan tanggal"/><span class="add-on"><i class="icon-calendar"></i></span>
				</div> 
				<div style="margin-left: 0px">			
					<?php echo $out?>
				</div>
			</form>
			<button class="btn btn-inverse" onclick="window.location.href='menu_input_spuliba.php'">Go Back</button>			
           <!-- END PAGE CONTENT-->
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
