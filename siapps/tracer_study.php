<?php
include ("_script_phpgrid.php");
$g = new jqgrid();
$sb1a=''; $sb1b=''; $sb1c=''; $sb1d='';
$bs1a=''; $bs1b=''; $bs1c=''; $bs1d=''; 
$cb1a=''; $cb1b=''; $cb1c=''; $cb1d=''; 
$kr1a=''; $kr1b=''; $kr1c=''; $kr1d=''; 
$tp1a=''; $tp1b=''; $tp1c=''; $tp1d=''; 

$bs1a='Checked'; $cb1b='Checked'; $bs1c='Checked'; $tp1d='Checked'; $st11='Checked'

?>
<!DOCTYPE html>
<head>
   <meta charset="utf-8" />
	<title>Tracer Study</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style_responsive.css" rel="stylesheet" />
   <link href="css/style_default.css" rel="stylesheet" id="style_color" />

   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />    
   <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />

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
				<li><a href="#">Tracer</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Study</a><span class="divider-last">&nbsp;</span></li>
			</ul><br> 
 			<div class="row-fluid">
				<div class="span1"></div>
				<div class="span10">
                  <form class="form-horizontal" action="update_biodata.php" method="POST" enctype="multipart/form-data">
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Data Tracer Study</h4>
							<span class="tools">
							   <a href="javascript:;" class="icon-chevron-down"></a>
							   <a href="menu_mhs.php" class="icon-remove"></a>
							</span>
                        </div>
                        <div class="widget-body form">
						   <div class="control-group">
							    <label class="control-label" style="width:600px">
								 1. &nbsp;Menurut Anda seberapa besar penekanan metode pembelajaran di Prodi SI dilaksanakan?</label>
						   </div>
						   <div class="control-group">
								<label class="control-label" style="width:180px; margin-left:20px">a. &nbsp;Pada Perkuliahan</label>
								<label class="control-label" style="width:150px">
									<input type="radio" name="mkul" value="SB1A" <?php echo $sb1a ?> />Sangat besar
								</label>
								<label class="control-label" style="width:100px">
									<input type="radio" name="mkul" value="BS1A" <?php echo $bs1a ?> />Besar
								</label>  
								<label class="control-label" style="width:140px">
									<input type="radio" name="mkul" value="CB1A" <?php echo $cb1a ?> />Cukup Besar
								</label>  
								<label class="control-label" style="width:110px">
									<input type="radio" name="mkul" value="KR1A" <?php echo $kr1a ?> />Kurang
								</label>  
								<label class="control-label" style="width:150px">
									<input type="radio" name="mkul" value="TP1A" <?php echo $tp1a ?> />Tidak Pernah
								</label>  
							</div>	 
						   <div class="control-group">
								<label class="control-label" style="width:180px; margin-left:20px">b. &nbsp;Pelaksanaan Praktikum</label>
								<label class="control-label" style="width:150px">
									<input type="radio" name="mpra" value="SB1B" <?php echo $sb1b ?> />Sangat besar
								</label>
								<label class="control-label" style="width:100px">
									<input type="radio" name="mpra" value="BS1B" <?php echo $bs1b ?> />Besar
								</label>  
								<label class="control-label" style="width:140px">
									<input type="radio" name="mpra" value="CB1B" <?php echo $cb1b ?> />Cukup Besar
								</label>  
								<label class="control-label" style="width:110px">
									<input type="radio" name="mpra" value="KR1B" <?php echo $kr1b ?> />Kurang
								</label>  
								<label class="control-label" style="width:150px">
									<input type="radio" name="mpra" value="TP1B" <?php echo $tp1b ?> />Tidak Pernah
								</label>  
							</div>	 
						   <div class="control-group">
								<label class="control-label" style="width:180px; margin-left:20px">c. &nbsp;Diskusi Kelompok</label>
								<label class="control-label" style="width:150px">
									<input type="radio" name="mdis" value="SB1C" <?php echo $sb1c ?> />Sangat besar
								</label>
								<label class="control-label" style="width:100px">
									<input type="radio" name="mdis" value="BS1C" <?php echo $bs1c ?> />Besar
								</label>  
								<label class="control-label" style="width:140px">
									<input type="radio" name="mdis" value="CB1C" <?php echo $cb1c ?> />Cukup Besar
								</label>  
								<label class="control-label" style="width:110px">
									<input type="radio" name="mdis" value="KR1C" <?php echo $kr1c ?> />Kurang
								</label>  
								<label class="control-label" style="width:150px">
									<input type="radio" name="mdis" value="TP1C" <?php echo $tp1c ?> />Tidak Pernah
								</label>  
							</div>	 
						   <div class="control-group">
								<label class="control-label" style="width:180px; margin-left:20px">d. &nbsp;Kerja Praktek</label>
								<label class="control-label" style="width:150px">
									<input type="radio" name="mkp" value="SB1D" <?php echo $sb1d ?> />Sangat besar
								</label>
								<label class="control-label" style="width:100px">
									<input type="radio" name="mkp" value="BS1D" <?php echo $bs1d ?> />Besar
								</label>  
								<label class="control-label" style="width:140px">
									<input type="radio" name="mkp" value="CB1D" <?php echo $cb1d ?> />Cukup Besar
								</label>  
								<label class="control-label" style="width:110px">
									<input type="radio" name="mkp" value="KR1D" <?php echo $kr1d ?> />Kurang
								</label>  
								<label class="control-label" style="width:150px">
									<input type="radio" name="mkp" value="TP1D" <?php echo $tp1d ?> />Tidak Pernah
								</label>  
							</div>	 
						    <div class="control-group">
								<label class="control-label" style="width:450px">2. &nbsp;Kapan Anda mulai mencari pekerjaan? 
								&nbsp;&nbsp;(Bukan pekerjaan sambilan)</label><br>
							</div>	 
						    <div class="control-group">
								<label class="control-label" style="width:210px; margin-left:20px">
									<input type="radio" name="mlam" value="SBL1" <?php echo $sbl1 ?> />1 - 3 bulan sebelum lulus
								</label>
								<label class="control-label" style="width:210px">
									<input type="radio" name="mlam" value="STL1" <?php echo $stl1 ?> />1 - 3 bulan setelah lulus
								</label>  
								<label class="control-label" style="width:210px">
									<input type="radio" name="mlam" value="STL3" <?php echo $stl3 ?> />3 - 6 bulan setelah lulus
								</label>  
								<label class="control-label" style="width:250px">
									<input type="radio" name="mlam" value="STMP" <?php echo $stmp ?> />Saya tidak melamar pekerjaan
								</label>  
							</div>	 
						    <div class="control-group">
								<label class="control-label" style="width:750px">3. &nbsp;Bagaimana cara Anda mencari pekerjaan? 
								&nbsp;&nbsp;(Jawaban boleh lebih dari satu)</label><br>
						      <div class="controls"style="margin-left:20px">
                                 <label class="checkbox" style="width:350px; margin-left:20px"> 
									<input type="checkbox" value="" /> Mencari lewat internet</label>
                                 <label class="checkbox" style="width:350px; margin-left:20px"> 
									<input type="checkbox" value="" /> Mencari informasi dari media sosial</label>
                                 <label class="checkbox" style="width:350px; margin-left:20px"> 
									<input type="checkbox" value="" /> Melalui koran/poster/brosur</label>
                                 <label class="checkbox" style="width:350px; margin-left:20px"> 
									<input type="checkbox" value="" /> Melalui bursa kerja/pameran lowongan kerja</label>
                                 <label class="checkbox" style="width:350px; margin-left:20px"> 
									<input type="checkbox" value="" /> Mendaftar langsung ke perusahaan/instansi</label>
                                 <label class="checkbox" style="width:350px; margin-left:20px"> 
									<input type="checkbox" value="" /> Melalui informasi lowongan kerja dari pemerintah</label>
                                 <label class="checkbox" style="width:350px; margin-left:20px"> 
									<input type="checkbox" value="" /> Membangun jejaring (network) sejak masih kuliah</label>
                                 <label class="checkbox" style="width:450px; margin-left:20px"> 
									<input type="checkbox" value="" /> Melalui relasi (orang tua, saudara, dosen, teman kuliah) </label>
                                 <label class="checkbox" style="width:350px; margin-left:20px"> 
									<input type="checkbox" value="" /> Melalui program magang ketika kuliah</label>
                                 <label class="checkbox" style="width:350px; margin-left:20px"> 
									<input type="checkbox" value="" /> Dihubungi pihak perusahaan</label>
                                 <label class="checkbox" style="width:350px; margin-left:20px"> 
									<input type="checkbox" value="" /> UPT Pengembangan Karir UPN Veteran Yogyakarta</label>
                                 <label class="checkbox" style="width:350px; margin-left:20px"> 
									<input type="checkbox" value="" /> Lainnya</label>
							  </div>	 
							</div>	 
						    <div class="control-group">
								<label class="control-label" style="width:750px">4. &nbsp;Berapa lama Anda menunggu untuk mendapatkan 
								pekerjaan pertama kali?</label><br>
							</div>	 
						    <div class="control-group">
								<label class="control-label" style="width:170px; margin-left:20px">
									<input type="radio" name="mlam" value="STL0" <?php echo $stl0 ?> />Sebelum lulus kuliah
								</label>
								<label class="control-label" style="width:120px">
									<input type="radio" name="mlam" value="STL1" <?php echo $stl1 ?> />1 - 3 bulan
								</label>  
								<label class="control-label" style="width:120px">
									<input type="radio" name="mlam" value="STL2" <?php echo $stl2 ?> />3 - 6 bulan 
								</label>  
								<label class="control-label" style="width:120px">
									<input type="radio" name="mlam" value="STL3" <?php echo $stl3 ?> />6 - 9 bulan 
								</label>  
								<label class="control-label" style="width:120px">
									<input type="radio" name="mlam" value="STL4" <?php echo $stl4 ?> />6 - 12 bulan 
								</label>  
								<label class="control-label" style="width:150px">
									<input type="radio" name="mlam" value="STL5" <?php echo $stl5 ?> />Lebih dari 1 tahun
								</label>  
							</div>	 
						   
						</div> 
					</div>
					<input type="submit" name="upload" value="Submit">
                 </form><br>
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
   <script src="js/jquery-1.8.2.min.js"></script>    
   <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="js/scripts.js"></script>
   
	<script>
	  jQuery(document).ready(function() {       
		 App.init();
	  });
	</script>
</body>

