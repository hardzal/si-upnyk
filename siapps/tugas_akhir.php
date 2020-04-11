<?php
include ("_script_phpgrid.php");
$g = new jqgrid();
$nomhs=$_SESSION['usr'];
$nama =$_SESSION['usrname'];

$datakp=array(); $i=0; $pemb1='xxx'; $pemb2='yyy';
$hasil = mysql_query("SELECT * FROM ta WHERE nim='$nomhs'");
if(mysql_num_rows($hasil)>0){
	$row = mysql_fetch_assoc($hasil);
	$judul		= $row['judul'];
	$tempat		= $row['tempat'];
	$tgldaftar	= date('d-m-Y',strtotime($row['tgl_daftar']));
	$tglstop	= date('d-m-Y',strtotime($row['tgl_selesai']));
	$pemb1		= $row['pemb_1'];
	$pemb2		= $row['pemb_2'];
}

$datapem=array(); $pemb01=array(); $pemb02=array();
$i=0; $ipemb1=1; $ipemb2=2;
$hasil = mysql_query("SELECT * FROM pembimbing");
$jmlpem= mysql_num_rows($hasil);
while ($row = mysql_fetch_array($hasil)) {
	$datapem[] = $row;	}
foreach($datapem as $row) {
	$i++;	 
	$pemb01[$i] = $row['nama'];
	$pemb02[$i] = $row['nama'];
	if($pemb01[$i]==$pemb1){
		$ipemb1=$i;
	}else if($pemb02[$i]==$pemb2){
		$ipemb2=$i;
	} 
}

?>
<!DOCTYPE html>
<head>
   <meta charset="utf-8" />
	<title>Tugas Akhir</title>
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
	  	  
	</style>
	<script>
		$(function() {
		$( "#tglta1" ).datepicker({
		   altFormat: "dd-mm-yy",
           dateFormat: "dd-mm-yy",
		   onSelect : function(){ $('').submit(); }		   
		   } );
		});
		$(function() {
		$( "#tglta2" ).datepicker({
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
				<li><a href="#">Tugas</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Akhir</a><span class="divider-last">&nbsp;</span></li>
			</ul><br> 
 			<div class="row-fluid">
				<div class="span2"></div>
				<div class="span8">
                  <form class="form-horizontal" action="update_ta.php" method="POST" enctype="multipart/form-data">
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Form Tugas Akhir</h4>
							<span class="tools">
							   <a href="javascript:;" class="icon-chevron-down"></a>
							   <a href="menu_mhs.php" class="icon-remove"></a>
							</span>
                        </div>
                        <div class="widget-body form">
						   <div class="control-group">
							  <label class="control-label" style="width:150px">Nomor Mahasiswa</label>
								 <input type="text" name="nim" value="<?php echo $nomhs ?>"
								 size="9" maxlength="9" style="width: 600px" readonly="readonly" ; />
						   </div><br>
						   <div class="control-group">
							  <label class="control-label" style="width:150px">Nama Mahasiswa</label>
								 <input type="text" name="nama" value="<?php echo $nama ?>"
								 size="30" maxlength="30" style="width: 600px" readonly="readonly"; />
						   </div><br>
						   <div class="control-group">
								<label class="control-label" style="width:150px">Judul Tugas akhir</label>
								<div class="controls">
									<textarea class="input-large" style="width: 600px; margin-left: 0px" 
									 name="judul" rows="2" required="required"
									 oninvalid="this.setCustomValidity('Judul harus diisi')" 
									 onvalid="this.setCustomValidity('')" ><?php echo $judul ?></textarea>
								</div>
						   </div><br>
						   <div class="control-group">
								<label class="control-label" style="width:150px">Tempat Penelitian</label>
								<div class="controls">
									<textarea class="input-large" style="width: 600px; margin-left: 0px" 
									name="tempat" rows="2" ><?php echo $tempat ?></textarea>
								</div>
						   </div><br>
						   <div class="control-group">
							  <div class="span7">
								 <label class="control-label" style="width:150px">Tgl. Pendaftaran</label>
								<div class="input-append date form_datetime" >
								   <input type="text" value="<?php echo $tgldaftar?>" name='tgldaftar' id="tglta1" 
								   placeholder="tgl-bln-thn" size="20" maxlength="10" style="width:95px";/>
								   <span class="add-on"><i class="icon-calendar"></i></span>
								</div>
							  </div>	 
							  <div class="span5">
								 <label class="control-label" style="width:160px;">Tgl. Lulus Pendadaran</label>
								<div class="input-append date form_datetime" >
								   <input type="text" value="<?php echo $tglstop?>" name='tglstop' id="tglta2" 
								   placeholder="tgl-bln-thn" size="20" maxlength="10" style="width:95px";/>
								   <span class="add-on"><i class="icon-calendar"></i></span>
								</div>
							  </div>
						   </div><br>
							<div class="control-group">
							  <label class="control-label" style="width:150px">Pembimbing-1</label>
							  <select style="width:350px" name="pemb1" data-placeholder="Pilih" tabindex="1">
									<?php for($i=1;$i<=$jmlpem;$i++){
										if($i==$ipemb1){
											?><option <?php echo 'selected=="selected"'?> ><?php echo $pemb01[$i]?></option><?php
										}else{	
											?><option <?php echo '' ?>><?php echo $pemb01[$i]?></option><?php
										}
									  }?>
							  </select>
							</div><br>
							<div class="control-group">
							  <label class="control-label" style="width:150px">Pembimbing-2</label>
							  <select style="width:350px" name="pemb2" data-placeholder="Pilih" tabindex="1">
									<?php for($i=1;$i<=$jmlpem;$i++){
										if($i==$ipemb2){
											?><option <?php echo 'selected=="selected"'?> ><?php echo $pemb02[$i]?></option><?php
										}else{	
											?><option <?php echo '' ?>><?php echo $pemb02[$i]?></option><?php
										}
									  }?>
							  </select>
							</div><br>
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

