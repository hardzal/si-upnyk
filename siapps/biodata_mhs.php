<?php
include ("_script_phpgrid.php");
$g = new jqgrid();

if($_POST['upload']){
	$nomhs	  = $_POST['nim'];
}

	
$a=''; $b=''; $c=''; $d=''; $e=''; $f=''; 
$k1=''; $k2=''; $k3=''; $k4=''; $k5='';

$dataprop=array(); 
$results = mysql_query("SELECT * FROM propinsi");
while ($row = mysql_fetch_array($results)) {
	$dataprop[] = $row;	}

$hasil = mysql_query("SELECT * FROM biodata WHERE nim='$nomhs'");
if(mysql_num_rows($hasil)>0){
	$row = mysql_fetch_assoc($hasil);
	$nama		= $row['nama'];
	$tmplahir	= $row['tmp_lahir'];
	$tgllahir	= date('d-m-Y',strtotime($row['tgl_lahir']));
	$jkel		= $row['jkel'];
	$agama		= $row['agama'];
	$email		= $row['email'];
	$telp		= $row['telp'];
	$foto		= $row['foto'];
	$almyk		= $row['alamatyk'];
	$kelyk		= $row['kelurahanyk'];
	$kecyk		= $row['kecamatanyk'];
	$kabyk		= $row['kabupatenyk'];
// ----- agama ---------
	if($agama=='Islam'){
		$a='selected="selected"';
	}elseif($agama=='Kristen'){
		$a='selected="selected"';
	}elseif($agama=='Katholik'){
		$a='selected="selected"';
	}elseif($agama=='Hindu'){
		$a='selected=="selected"';
	}elseif($agama=='Budha'){
		$a='selected="selected"';
	}else{
		$a='selected="selected"'; }
// ----- Jenis Kelamin ---------
	if($jkel=='L'){ $lkel='Checked'; $pkel=''; 
	}else{ $lkel=''; $pkel='Checked'; }
} else {
	$tmplahir  = "";
	$tgllahir  = "01-01-1985";
	$foto	   = "myphoto4x6.jpg";
	$lkel	   = 'Checked';
	$a		   = 'selected="selected"';
}
$_SESSION['oldfoto'] = $foto;

// ----- Alamat  ---------
$hasil = mysql_query("SELECT * FROM alamat WHERE nim='$nomhs'");
if($hasil>0){
	$row = mysql_fetch_assoc($hasil);
	$almyk	= $row['alamatyk'];
	$kelyk	= $row['kelurahanyk'];
	$kecyk	= $row['kecamatanyk'];
	$kabyk	= $row['kabupatenyk'];
	$almasl	= $row['alamat_asal'];
	$kelasl	= $row['kelurahan_asal'];
	$kecasl	= $row['kecamatan_asal'];
	$kabasl	= $row['kabupaten_asal'];
	$propasl= $row['propinsi_asal'];
// ----- kabupaten ---------
	if($kabyk=='Yogyakarta'){
		$k1='selected="selected"';
	}elseif($kabyk=='Sleman'){
		$k1='selected="selected"';
	}elseif($kabyk=='Bantul'){
		$k1='selected="selected"';
	}elseif($kabyk=='Gunung Kidul'){
		$k1='selected=="selected"';
	}elseif($kabyk=='Kulon Progo'){
		$k1='selected=="selected"'; }
}else{
	$almyk	= '';
	$kelyk	= '';
	$kecyk	= '';
	$kabyk	= '';
	$almasl	= '';
	$kelasl	= '';
	$kecasl	= '';
	$kabasl	= '';
	$propasl= '';
}

// ----- Orang Tua  ---------
$hasil = mysql_query("SELECT * FROM orangtua WHERE nim='$nomhs'");
if($hasil>0){
	$row = mysql_fetch_assoc($hasil);
	$ayah		= $row['ayah'];
	$kerjaayah	= $row['kerja_ayah'];
	$telpayah	= $row['telp_ayah'];
	$ibu		= $row['ibu'];
	$kerjaibu	= $row['kerja_ibu'];
	$telpibu	= $row['telp_ibu'];
	$alm		= $row['alamat'];
	$kel		= $row['kelurahan'];
	$kec		= $row['kecamatan'];
	$kab		= $row['kabupaten'];
	$prop		= $row['propinsi'];
	
}else{
	$ayah		= '';
	$kerjaayah	= '';
	$telpayah	= '';
	$ibu		= '';
	$kerjaibu	= '';
	$telpibu	= '';
	$alm		= '';
	$kel		= '';
	$kec		= '';
	$kab		= '';
	$prop		= '';
}

// ----- Asal Sekolah  ---------
$hasil = mysql_query("SELECT * FROM asalsekolah WHERE nim='$nomhs'");
if($hasil>0){
	$row = mysql_fetch_assoc($hasil);
	$namasek	= $row['nama'];
	$jursek		= $row['jurusan'];
	$almsek		= $row['alamat'];
	$kabsek		= $row['kabupaten'];
	$propsek	= $row['propinsi'];
	
}else{
	$namasek	= '';
	$jursek		= '';
	$almsek		= '';
	$kabsek		= '';
	$propsek	= '';
}

?>
<!DOCTYPE html>
<head>
   <meta charset="utf-8" />
	<title>Biodata</title>
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
				<li><a href="menu_admin.php"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
				<li><a href="#">Biodata</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Mahasiswa</a><span class="divider-last">&nbsp;</span></li>
			</ul><br> 
 			<div class="row-fluid">
				<div class="span2"></div>
				<div class="span8">
                  <form class="form-horizontal" action="data_mhs.php" method="POST" enctype="multipart/form-data">
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Data Mahasiswa</h4>
							<span class="tools">
							   <a href="javascript:;" class="icon-chevron-down"></a>
							   <a href="data_mhs.php" class="icon-remove"></a>
							</span>
                        </div>
                        <div class="widget-body form">
						   <div class="control-group">
							  <label class="control-label" style="width:140px">Nomor Mahasiswa</label>
								 <input type="text" name="nim" value="<?php echo $nomhs ?>"
								 size="9" maxlength="9" style="width: 600px"; readonly />
						   </div><br>
						   <div class="control-group">
							  <label class="control-label" style="width:140px">Nama Mahasiswa</label>
								 <input type="text" name="nama" value="<?php echo $nama ?>"
								 size="36" maxlength="36" style="width: 600px"; readonly />
						   </div><br>
						   <div class="control-group">
							  <div class="span7">
								 <label class="control-label" style="width:140px">Tempat Lahir</label>
								 <input type="text" name="tmplahir" value="<?php echo $tmplahir ?>"
								 size="25" maxlength="25" style="width: 265px"; readonly />
							  </div>	 
							  <div class="span5">
								 <label class="control-label" style="width:110px">Tanggal Lahir</label>
								<div class="input-append date form_datetime" >
								   <input type="text" value="<?php echo $tgllahir?>" name='tgllahir' id="tgllahir" 
								   placeholder="tgl-bln-thn" size="10" maxlength="10" style="width:135px"; readonly />
								   <span class="add-on"><i class="icon-calendar"></i></span>
								</div>
							  </div>
						   </div><br>
						   <div class="control-group">
							  <div class="span7">
								 <label class="control-label" style="width:140px">Jenis Kelamin</label>
								 <label class="control-label" style="width:100px">
									 <input type="radio" name="jkel" value="L" <?php echo $lkel ?> readonly />
									 Laki-laki
								 </label>
								 <label class="control-label" style="width:100px">
									 <input type="radio" name="jkel" value="P" <?php echo $pkel ?> />
									 Perempuan
								 </label>  
							  </div>	 
							  <div class="span5">
								  <label class="control-label" style="width:110px">Agama</label>
									 <select style="width:175px" name="agama" data-placeholder="Pilih" tabindex="1">
										<option <?php echo $a ?>><?php echo $agama ?></option>
									 </select>
							  </div>	 
						   </div><br>
						   <div class="control-group">
							  <div class="span7">
								 <label class="control-label" style="width:140px">Email</label>
								 <input type="text" name="email" value="<?php echo $email ?>"
								 size="30" maxlength="30" style="width: 265px"; readonly />
							  </div>	 
							  <div class="span5">
								 <label class="control-label" style="width:110px">Telpon/HP</label>
								 <input type="text" name="telp" value="<?php echo $telp ?>" 
								 size="14" maxlength="14" style="width:162px"; readonly />
							  </div>	 
						   </div><br>
						   <div class="control-group">
								<label class="control-label" style="width:140px">Foto</label>
                                    <div class="controls">
										<div class="fileupload fileupload-new" data-provides="fileupload" data-name="fileimage">
                                            <div class="fileupload-new thumbnail" style="width: 150px; height: 200px;">
												<img src="<?php echo 'foto/'.$foto ?>" onerror="this.src='foto/myphoto4x6.jpg'">
											</div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 200px; line-height: 20px;"></div>
                                            <div>
											   <span class="btn btn-file"><span class="fileupload-new">Select Image</span>
											   <span class="fileupload-exists">Edit</span>
											   <input type="file" class="default" /></span>
                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
							</div>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Alamat</h4>
							<span class="tools">
							   <a href="javascript:;" class="icon-chevron-down"></a>
							   <a href="data_mhs.php" class="icon-remove"></a>
							</span>
                        </div>
                        <div class="widget-body form">
						   <div class="control-group">
							  <label class="control-label" style="width:180px"><strong>Alamat di Yogyakarta</strong></label>
						   </div><br>
						   <div class="control-group">
							  <label class="control-label" style="width:140px">Alamat</label>
								 <input type="text" name="almyk" value="<?php echo $almyk ?>"
								 size="35" maxlength="35" style="width: 600px"; readonly />
						   </div><br>
						   <div class="control-group">
							  <div class="span6">
								 <label class="control-label" style="width:140px">Kelurahan/Desa</label>
								 <input type="text" name="kelyk" value="<?php echo $kelyk ?>"
								 size="15" maxlength="15" style="width: 215px"; readonly />
							  </div>	 
							  <div class="span6">
								 <label class="control-label" style="width:94px">Kecamatan</label>
								 <input type="text" name="kecyk" value="<?php echo $kecyk ?>"
								 size="15" maxlength="15" style="width: 245px"; readonly />
							  </div>
						   </div><br>
						   <div class="control-group">
							 <label class="control-label" style="width:140px">Kodya/Kabupaten</label>
							 <select  style="width:175px" name="kabyk" data-placeholder="Pilih" tabindex="1">
								<option <?php echo $k1 ?>><?php echo $kabyk ?></option>
							 </select>
						   </div><br>
						   <div class="control-group">
							  <label class="control-label" style="width:140px"><strong>Alamat Asal</strong></label>
						   </div><br>
						   <div class="control-group">
							  <label class="control-label" style="width:140px">Alamat</label>
								 <input type="text" name="almasal" value="<?php echo $almasl ?>"
								 size="35" maxlength="35" style="width: 600px"; readonly />
						   </div><br>
						   <div class="control-group">
							  <div class="span6">
								 <label class="control-label" style="width:140px">Kelurahan</label>
								 <input type="text" name="kelasal" value="<?php echo $kelasl ?>"
								 size="20" maxlength="20" style="width: 215px"; readonly />
							  </div>	 
							  <div class="span6">
								 <label class="control-label" style="width:94px">Kecamatan</label>
								 <input type="text" name="kecasal" value="<?php echo $kecasl ?>"
								 size="20" maxlength="20" style="width: 245px"; readonly />
							  </div>
						   </div><br>
						   <div class="control-group">
							  <div class="span6">
								 <label class="control-label" style="width:140px">Kodya/Kabupaten</label>
								 <input type="text" name="kabasal" value="<?php echo $kabasl ?>"
								 size="20" maxlength="20" style="width: 215px"; readonly />
							  </div>	 
							  <div class="span6">
								<label class="control-label" style="width:94px">Propinsi</label>
								<select name="propasal" style="width:260px" data-placeholder="Pilih" tabindex="1">
									<?php foreach($dataprop as $row) { 
										if($row['Propinsi']==$propasl){
											$pil1 = 'selected=="selected"';
										}else{ 
											$pil1 = '';
										} ?>
										<option <?php echo $pil1; ?>> <?php echo $row['Propinsi'];?></option>
									<?php }; ?>
								</select>
							  </div>
						   </div><br>
						</div>	
					</div>
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Orang Tua</h4>
							<span class="tools">
							   <a href="javascript:;" class="icon-chevron-down"></a>
							   <a href="data_mhs.php" class="icon-remove"></a>
							</span>
                        </div>
                        <div class="widget-body form">
						   <div class="control-group">
							  <label class="control-label" style="width:140px">Nama Ayah</label>
								 <input type="text" name="namaayah" value="<?php echo $ayah ?>"
								 size="30" maxlength="30" style="width: 600px"; readonly />
						   </div><br>
						   <div class="control-group">
							  <div class="span7">
								 <label class="control-label" style="width:140px">Pekerjaan Ayah</label>
								 <input type="text" name="kerjaayah" value="<?php echo $kerjaayah ?>"
								 size="16" maxlength="16" style="width: 250px"; readonly />
							  </div>	 
							  <div class="span5">
								 <label class="control-label" style="width:110px">Telpon/HP</label>
								 <input type="text" name="telpayah" value="<?php echo $telpayah ?>"
								 size="14" maxlength="14" style="width:162px"; readonly />
							  </div>	 
						   </div><br>
						   <div class="control-group">
							  <label class="control-label" style="width:140px">Nama Ibu</label>
								 <input type="text" name="namaibu" value="<?php echo $ibu ?>"
								 size="30" maxlength="30" style="width: 600px"; readonly />
						   </div><br>
						   <div class="control-group">
							  <div class="span7">
								 <label class="control-label" style="width:140px">Pekerjaan Ibu</label>
								 <input type="text" name="kerjaibu" value="<?php echo $kerjaibu ?>"
								 size="16" maxlength="16" style="width: 250px"; readonly />
							  </div>	 
							  <div class="span5">
								 <label class="control-label" style="width:110px">Telpon/HP</label>
								 <input type="text" name="telpibu" value="<?php echo $telpibu ?>"
								 size="14" maxlength="14" style="width:162px"; readonly />
							  </div>	 
						   </div><br>
						   <div class="control-group">
							  <label class="control-label" style="width:140px"><strong>Alamat Orang Tua</strong></label>
						   </div><br>
						   <div class="control-group">
							  <label class="control-label" style="width:140px">Alamat</label>
								 <input type="text" name="alm" value="<?php echo $alm ?>"
								 size="35" maxlength="35" style="width: 600px"; readonly />
						   </div><br>
						   <div class="control-group">
							  <div class="span6">
								 <label class="control-label" style="width:140px">Kelurahan</label>
								 <input type="text" name="kel" value="<?php echo $kel ?>"
								 size="20" maxlength="20" style="width: 215px"; readonly />
							  </div>	 
							  <div class="span6">
								 <label class="control-label" style="width:94px">Kecamatan</label>
								 <input type="text" name="kec" value="<?php echo $kec ?>"
								 size="20" maxlength="20" style="width: 245px"; readonly />
							  </div>
						   </div><br>
						   <div class="control-group">
							  <div class="span6">
								 <label class="control-label" style="width:140px">Kodya/Kabupaten</label>
								 <input type="text" name="kab" value="<?php echo $kab ?>"
								 size="20" maxlength="20" style="width: 215px"; readonly />
							  </div>	 
							  <div class="span6">
								<label class="control-label" style="width:94px">Propinsi</label>
								<select name="prop" style="width:260px" data-placeholder="Pilih" tabindex="1">
									<?php foreach($dataprop as $row) { 
										if($row['Propinsi']==$prop){
											$pil2 = 'selected=="selected"';
										}else{ 
											$pil2 = '';
										} ?>
										<option <?php echo $pil2; ?>> <?php echo $row['Propinsi'];?></option>
									<?php }; ?>
								</select>
							  </div>
						   </div><br>
						</div>	
					</div>
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Asal Sekolah</h4>
							<span class="tools">
							   <a href="javascript:;" class="icon-chevron-down"></a>
							   <a href="data_mhs.php" class="icon-remove"></a>
							</span>
                        </div>
                        <div class="widget-body form">
						   <div class="control-group">
							  <div class="span8">
								 <label class="control-label" style="width:140px">Nama Sekolah</label>
								 <input type="text" name="namasek" value="<?php echo $namasek ?>"
								 size="40" maxlength="40" style="width: 330px"; readonly />
							  </div>	 
							  <div class="span4">
								 <label class="control-label" style="width:70px">Jurusan</label>
								 <input type="text" name="jursek" value="<?php echo $jursek ?>"
								 size="20" maxlength="20" style="width:135px"; readonly />
							  </div>	 
						   </div><br>
						   <div class="control-group">
							  <label class="control-label" style="width:140px">Alamat</label>
								 <input type="text" name="almsek" value="<?php echo $almsek ?>"
								 size="40" maxlength="40" style="width: 600px"; readonly />
						   </div><br>
						   <div class="control-group">
							  <div class="span6">
								 <label class="control-label" style="width:140px">Kodya/Kabupaten</label>
								 <input type="text" name="kabsek" value="<?php echo $kabsek ?>"
								 size="20" maxlength="20" style="width: 215px"; readonly />
							  </div>	 
							  <div class="span6">
								<label class="control-label" style="width:94px">Propinsi</label>
								<select name="propsek" style="width:260px" data-placeholder="Pilih" tabindex="1">
									<?php foreach($dataprop as $row) { 
										if($row['Propinsi']==$propsek){
											$pil3 = 'selected=="selected"';
										}else{ 
											$pil3 = '';
										} ?>
										<option <?php echo $pil3; ?>> <?php echo $row['Propinsi'];?></option>
									<?php }; ?>
								</select>
							  </div>
						   </div><br>
						</div>	
					</div>
					<button type="submit" value="Submit" style="margin-left:10px" 
							class="btn btn-inverse"> Back </button>
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

