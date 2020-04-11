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
 			<div class="row-fluid">
				<div class="span1"></div>
				<div class="span10">
                  <form class="form-horizontal" action="update_kuesioner.php" method="POST" enctype="multipart/form-data">
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Kuesioner</h4>
							<span class="tools">
							   <a href="javascript:;" class="icon-chevron-down"></a>
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
										<?php for($i=1;$i<=$jmldosen;$i++){
											if($i==1){
												?><option <?php echo 'selected=="selected"'?> ><?php echo $dosen[$i]?></option><?php
											}else{	
											?><option <?php echo '' ?>><?php echo $dosen[$i]?></option><?php
											}
										  }?>
								  </select>
							  </div>
						   </div><br>
						   <div class="alert alert-info">
								<div class="s"> Jawablah pertanyaan berikut ini sesuai dengan yang Anda alami
													selama mengikuti proses pembelajaran</div><br>
								<div class="s">Keterangan->&nbsp &nbsp &nbsp &nbsp &nbsp1 : Sangat Tidak Setuju      
											&nbsp &nbsp &nbsp &nbsp &nbsp2 : Tidak Setuju
											&nbsp &nbsp &nbsp &nbsp &nbsp3 : Netral
											&nbsp &nbsp &nbsp &nbsp &nbsp4 : Setuju
											&nbsp &nbsp &nbsp &nbsp &nbsp5 : Sangat Setuju
								</div>
							</div><br>
							<div class="t">1. Dosen menyediakan silabus mata kuliah</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb1" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb1" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb1" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb1" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb1" value=5/>5</label>
							</div><br><br>
							<div class="t">2. Dosen mendiskusikan silabus dengan mahasiswa</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb2" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb2" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb2" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb2" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb2" value=5/>5</label>
							</div><br><br>
							<div class="t">3. Dosen menyediakan bahan bacaan yang sesuai dengan materi silabus</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb3" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb3" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb3" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb3" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb3" value=5/>5</label>
							</div><br><br>
							<div class="t">4. Dosen memperlihatkan penguasaan materi mata kuliah</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb4" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb4" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb4" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb4" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb4" value=5/>5</label>
							</div><br><br>
							
							<div class="t">5. Dosen mengajarkan materi dengan metode yang efektif</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb5" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb5" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb5" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb5" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb5" value=5/>5</label>
							</div><br><br>
							<div class="t">6. Dosen selalu memberi contoh konkrit setiap menjelaskan suatu hal</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb6" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb6" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb6" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb6" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb6" value=5/>5</label>
							</div><br><br>
							<div class="t">7. Dosen sangat komunikatif</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb7" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb7" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb7" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb7" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb7" value=5/>5</label>
							</div><br><br>
							<div class="t">8. Dosen menciptakan suasana kelas yang kondusif / membuat mahasiswa termotivasi</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb8" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb8" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb8" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb8" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb8" value=5/>5</label>
							</div><br><br>
							<div class="t">9. Dosen mengajar tidak terlalu cepat / lambat, sehingga mudah dimengerti mahasiswa</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb9" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb9" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb9" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb9" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb9" value=5/>5</label>
							</div><br><br>
							<div class="t">10. Dosen selalu memberi kesempatan mahasiswa untuk bertanya</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb10" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb10" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb10" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb10" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb10" value=5/>5</label>
							</div><br><br>
							<div class="t">11. Materi dari mata kuliah telah menambah / memperluas pengetahuan dan wawasan mahasiswa</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb11" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb11" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb11" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb11" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb11" value=5/>5</label>
							</div><br><br>
							<div class="t">12. Mahasiswa puas setelah mengikuti perkuliahan mata kuliah tersebut</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb12" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb12" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb12" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb12" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb12" value=5/>5</label>
							</div><br><br>
							<div class="t">13. Mata kuliah tersebut sangat mudah dipahami mahasiswa</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb13" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb13" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb13" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb13" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb13" value=5/>5</label>
							</div><br><br>
							<div class="t">14. Dosen menciptakan suasana kelas yang menyenangkan</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb14" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb14" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb14" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb14" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb14" value=5/>5</label>
							</div><br><br>
							<div class="t">15. Dosen memperlihatkan sikap menghormati mahasiswa dan mendorong / memotivasi mahasiswa</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb15" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb15" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb15" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb15" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb15" value=5/>5</label>
							</div><br><br>
							<div class="t">16. Dosen terampil menggunakan teknologi modern dalam memberi kuliah</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb16" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb16" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb16" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb16" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb16" value=5/>5</label>
							</div><br><br>
							<div class="t">17. Dosen selalu mengembalikan hasil tes / tugas kepada mahasiswa dalam waktu yang wajar</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb17" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb17" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb17" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb17" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb17" value=5/>5</label>
							</div><br><br>
							<div class="t">18. Dosen tidak banyak bercerita tentang hal diluar materi mata kuliah yang bersangkutan</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb18" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb18" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb18" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb18" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb18" value=5/>5</label>
							</div><br><br>
							<div class="t">19. Buku tes untuk mata kuliah tersebut mudah didapat</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb19" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb19" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb19" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb19" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb19" value=5/>5</label>
							</div><br><br>
							<div class="t">20. Materi mata kuliah selalu diperbaharui dengan contoh atau perkembangan terakhir</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb20" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb20" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb20" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb20" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb20" value=5/>5</label>
							</div><br><br>
							<div class="t">21. Isi buku teks / bahan mata kuliah mudah dipahami</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb21" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb21" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb21" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb21" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb21" value=5/>5</label>
							</div><br><br>
							<div class="t">22. Dosen selalu hadir memberi kuliah setiap pertemuan</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb22" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb22" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb22" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb22" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb22" value=5/>5</label>
							</div><br><br>
							<div class="t">23. Dosen hadir di kelas tepat waktu</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb23" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb23" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb23" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb23" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb23" value=5/>5</label>
							</div><br><br>
							<div class="t">24. Dosen tidak pernah meniadakan kuliah tanpa alasan</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb24" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb24" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb24" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb24" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb24" value=5/>5</label>
							</div><br><br>
							<div class="t">25. Dosen meninggalkan kelas tepat waktu</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb25" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb25" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb25" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb25" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb25" value=5/>5</label>
							</div><br><br>
							<div class="t">26. Dosen memberi penilaian yang obyektif</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb26" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb26" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb26" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb26" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb26" value=5/>5</label>
							</div><br><br>
							<div class="t">27. Dosen selalu memberi penjelasan tentang cara menilai</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb27" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb27" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb27" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb27" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb27" value=5/>5</label>
							</div><br><br>
							<div class="t">28. Dosen selalu mengembalikan hasil tes / tugas dengan catatan / komentar</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb28" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb28" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb28" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb28" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb28" value=5/>5</label>
							</div><br><br>
							<div class="t">29. Materi tugas, tes, dan ujian sesuai dengan materi mata kuliah dan selaras dengan isi silabus</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb29" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb29" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb29" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb29" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb29" value=5/>5</label>
							</div><br><br>
							<div class="t">30. Dosen selalu mengembalikan hasil tes / tugas kepada mahasiswa dalam waktu yang wajar</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb30" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb30" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb30" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb30" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb30" value=5/>5</label>
							</div><br><br>
							<div class="t">31. Dosen mudah ditemui diluar kelas</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb31" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb31" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb31" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb31" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb31" value=5/>5</label>
							</div><br><br>
							<div class="t">32. Dosen berwibawa dimata mahasiswa</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb32" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb32" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb32" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb32" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb32" value=5/>5</label>
							</div><br><br>
							<div class="t">33. Dosen memberi pendidikan tentang nilai (values), moral, etika selain tentang materi mata kuliah</div><br>
							<div class="controls" style="margin-left:92px">
								<label class="radio" style="width:50px"><input type="radio" name="jwb33" value=1 required/>1</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb33" value=2/>2</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb33" value=3/>3</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb33" value=4/>4</label>
								<label class="radio" style="width:50px"><input type="radio" name="jwb33" value=5/>5</label>
							</div><br>
							<div class="controls">
								<input type="hidden" name="nim" value="<?php echo $nomhs ?>">
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
