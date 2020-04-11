<?php
include ("_script_phpgrid.php");
$g = new jqgrid();

$nomhs = $_SESSION['usr'];
$jmlmka=0; $i=0;
$datamka=array(); $mka=array();
$results = mysql_query("SELECT * FROM mka");
$jmlmka=mysql_num_rows($results);
while ($row = mysql_fetch_array($results)) {
	$datamka[] = $row;	}
foreach($datamka as $row) {
	$i++;	 
	$mka[$i] = $row['MKA'];
}

$jmldosen=0; $i=0;
$datadosen=array(); $dosen=array();
$results = mysql_query("SELECT * FROM dosen");
$jmldosen=mysql_num_rows($results);
while ($row = mysql_fetch_array($results)) {
	$datadosen[] = $row;	}
foreach($datadosen as $row) {
	$i++;	 
	$dosen[$i] = $row['nama'];
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
   <meta charset="utf-8" />
	<title>Kuesioner</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />
	<link href="lib/js/themes/sunny/jquery-ui.custom.css" rel="stylesheet" type="text/css" media="screen" ></link>	
	<link href="lib/js/jqgrid/css/ui.jqgrid.css" rel="stylesheet" type="text/css" media="screen" ></link>	
    <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />

    <script src="js/fusioncharts.js"></script>
	<script src="lib/js/jquery.min.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
	<script src="lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
	<style>
	  .disabled {
		pointer-events:none; 
		opacity:0.6;         
	  }
	  form {
		text-align:left;
		width:100%;
		line-height:100%;
		margin: 0 auto;
	  }
	  .form-horizontal .control-group {
		position:static;
		margin-bottom: 0px;
		margin-left: 20px;
	  }
	  div.s {
		font-size: 16px;
		margin-left: 30px;
	  }
	  div.t {
		font-size: 16px;
		margin-left: 50px;
	  }
	</style>
	<script>
		$(function() {
		$( "#tgllahir" ).datepicker({
		   altFormat: "dd-mm-yy",
           dateFormat: "dd-mm-yy",
		   onSelect : function(){ $('').submit(); }		   
		   } );
		});
		
      $('#datepicker').datepicker({ format: 'dd-mm-yyyy' });
  </script>
</head>
<body class="fixed-top">
    <?php include ("_topside_bar_mhs.php"); ?>
    <div id="main-content">
		<div class="container-fluid">
			<div id="theme-change" class="hidden-phone">
				<i class="icon-cogs"></i>
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
            <h2 class="text" style="text-align:center">Display <small> Hasil Kuesioner</small></h2>
 			<div class="row-fluid">
				<div class="span1"></div>
				<div class="span10">
                  <form class="form-horizontal" action="display_kuesioner.php" method="POST" enctype="multipart/form-data">
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Kuesioner</h4>
							<span class="tools">
							   <a href="menu_mhs.php" class="icon-remove"></a>
							</span>
                        </div>
                        <div class="widget-body form">
						   <div class="control-group">
							  <div class="span6">
								<label class="control-label" style="width:120px; margin-top:-5px">Semester</label>
								<div class="controls">
									<label class="radio" style="width:80px">
										<input type="radio" name="smt" value="Gasal" checked />
										Gasal
									</label>
									<label class="radio">
										<input type="radio" name="smt" value="Genap" />
										Genap
									</label>
								</div>
							  </div>	 
							  <div class="span6">
								  <label class="control-label" style="width:90px; margin-left:20px">Tahun Akd.</label>
									 <select style="width:105px" name="thnakd" data-placeholder="Pilih" tabindex="1">
										<option <?php echo 'selected="selected"' ?>>2017/2018</option>
										<option <?php echo '' ?>>2018/2019</option>
										<option <?php echo '' ?>>2019/2020</option>
										<option <?php echo '' ?>>2020/2021</option>
										<option <?php echo '' ?>>2021/2022</option>
										<option <?php echo '' ?>>2022/2023</option>
									 </select>
							  </div>	 
						   </div><br>
						   <div class="control-group">
							  <div class="span6">
								  <label class="control-label" style="width:100px">Mata Kuliah</label>
								  <select style="width:350px" name="mka" data-placeholder="Pilih" tabindex="1">
										<?php for($i=1;$i<=$jmlmka;$i++){
											if($i==1){
											   ?><option <?php echo 'selected=="selected"'?> ><?php echo $mka[$i]?></option><?php
											}else{	  
											   ?><option <?php echo '' ?>><?php echo $mka[$i]?></option><?php
											}
										  }?>
								  </select>
							  </div>
							  <div class="span6">
								  <label class="control-label" style="width:90px; margin-left:20px">Dosen </label>
								  <select style="width:350px" name="dosen" data-placeholder="Pilih" tabindex="1">
										<?php for($i=1;$i<=8;$i++){
											if($i==1){
												?><option <?php echo 'selected=="selected"'?> ><?php echo $dosen[$i]?></option><?php
											}else{	
											?><option <?php echo '' ?>><?php echo $dosen[$i]?></option><?php
											}
										  }?>
								  </select>
							  </div>
						   </div><br>
						</div>
                    </div>
					<input type="submit" name="upload" value="Submit" style="align:center"><br><br>
                 </form>
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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.blockui.js"></script>
    <script src="js/scripts.js"></script>
	<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>	
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	<script>
	  jQuery(document).ready(function() {       
		 App.init();
	  });
	</script>
</body>
