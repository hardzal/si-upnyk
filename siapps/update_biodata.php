<?php
include ("_script_phpgrid.php");
$g = new jqgrid();
 
if($_POST['upload']){
// --------- biodata -------------
	$vnim	  = $_POST['nim'];
	$vnama	  = $_POST['nama'];      
	$vtmplhr  = $_POST['tmplahir'];
	$xtgl     = $_POST['tgllahir'];
	$vtgllhr  = substr($xtgl,6,4).'-'.substr($xtgl,3,2).'-'.substr($xtgl,0,2);
	$vtglin   = '20'.substr($vnim,3,2).'-09-01';
	$vkel     = $_POST['jkel'];
	$vagama   = $_POST['agama'];
	$vemail   = $_POST['email'];
	$vtelp    = $_POST['telp'];
	$vfoto    = $_SESSION['oldfoto'];
	$ekstensi_diperbolehkan	= array('png','jpg');
	$fileimg = $_FILES['fileimage']['name'];
	$x = explode('.', $fileimg);
	$ekstensi = strtolower(end($x));
	$photo = $vnim.'.'.$ekstensi;
	$ukuran	= $_FILES['fileimage']['size'];
	$file_tmp = $_FILES['fileimage']['tmp_name'];	
	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran < 1044070){			
			move_uploaded_file($file_tmp, 'foto/'.$photo);
		}else{
			$photo = $_SESSION['oldfoto'];
		}
	}else{
		$photo = $_SESSION['oldfoto'];
	}

	$hasil = mysql_query("SELECT * FROM biodata WHERE nim='$vnim'");
	if(mysql_num_rows($hasil)>0){ 
		mysql_query("UPDATE biodata SET nama='$vnama',tmp_lahir='$vtmplhr',tgl_lahir='$vtgllhr',jkel='$vkel',
					 agama='$vagama', email='$vemail', telp='$vtelp', foto='$photo', tgl_masuk='$vtglin' WHERE nim='$vnim'"); 
	} else {
		mysql_query("INSERT INTO biodata(nim,nama,tmp_lahir,tgl_lahir,jkel,agama,email,telp,foto) 
		             VALUES ('$vnim','$vnama','$vtmplhr','$vtgllhr','$vkel','$vagama','$vemail','$vtelp','$photo')");
	}
	
	$hasil = mysql_query("SELECT * FROM login WHERE nim='$vnim'");
	if(mysql_num_rows($hasil)>0){
		if(username<>$vnama)
		mysql_query("UPDATE biodata SET username='$vnama'"); 
	}
	
// --------- alamat -------------
	$valmyk	 = $_POST['almyk'];      
	$vkelyk	 = $_POST['kelyk'];      
	$vkecyk	 = $_POST['kecyk'];      
	$vkabyk	 = $_POST['kabyk'];      
	$valmasl = $_POST['almasal'];      
	$vkelasl = $_POST['kelasal'];      
	$vkecasl = $_POST['kecasal'];      
	$vkabasl = $_POST['kabasal'];      
	$vpropasl= $_POST['propasal'];      

	$hasil = mysql_query("SELECT * FROM alamat WHERE nim='$vnim'");
	if(mysql_num_rows($hasil)>0){ 
		mysql_query("UPDATE alamat SET alamatyk='$valmyk', kelurahanyk='$vkelyk', kecamatanyk='$vkecyk', kabupatenyk='$vkabyk',
					 alamat_asal='$valmasl', kelurahan_asal='$vkelasl', kecamatan_asal='$vkecasl', kabupaten_asal='$vkabasl',
					 propinsi_asal='$vpropasl' WHERE nim='$vnim'"); 
	} else {
		mysql_query("INSERT INTO alamat(nim,alamatyk,kelurahanyk,kecamatanyk,kabupatenyk,alamat_asal,kelurahan_asal,
					kecamatan_asal,kabupaten_asal,propinsi_asal) 
		             VALUES ('$vnim','$valmyk','$vkelyk','$vkecyk','$vkabyk','$valmasl','$vkelasl','$vkecasl',
					 '$vkabasl','$vpropasl')");
	}
// --------- orang tua -------------
	$vayah	 = $_POST['namaayah'];      
	$vkerayah= $_POST['kerjaayah'];      
	$vtlpayah= $_POST['telpayah'];      
	$vibu	 = $_POST['namaibu'];      
	$vkeribu = $_POST['kerjaibu'];      
	$vtlpibu = $_POST['telpibu'];      
	$valm	 = $_POST['alm'];      
	$vkel	 = $_POST['kel'];      
	$vkec	 = $_POST['kec'];      
	$vkab	 = $_POST['kab'];      
	$vprop	 = $_POST['prop'];      

	$hasil = mysql_query("SELECT * FROM orangtua WHERE nim='$vnim'");
	if(mysql_num_rows($hasil)>0){ 
		mysql_query("UPDATE orangtua SET ayah='$vayah', kerja_ayah='$vkerayah', telp_ayah='$vtlpayah', ibu='$vibu',
					 kerja_ibu='$vkeribu', telp_ibu='$vtlpibu', alamat='$valm', kelurahan='$vkel', kecamatan='$vkec', 
					 kabupaten='$vkab', propinsi='$vprop' WHERE nim='$vnim'"); 
	} else {
		mysql_query("INSERT INTO orangtua(nim,'ayah','kerja_ayah','telp_ayah','ibu','kerja_ibu','telp_ibu','alamat',
					 'kelurahan','kecamatan','kabupaten','propinsi') 
		             VALUES ('$vnim','$vayah','$vkerayah','$vtlpayah','$vibu','$vkeribu','$vtlpibu','$valm',
					 '$vkel','$vkec','$vkab','$vprop')");
	}
	
// --------- Asal Sekolah -------------
	$vsek	 = $_POST['namasek'];      
	$vjursek = $_POST['jursek'];      
	$valmsek = $_POST['almsek'];      
	$vkabsek = $_POST['kabsek'];      
	$vprosek = $_POST['propsek'];      

	$hasil = mysql_query("SELECT * FROM asalsekolah WHERE nim='$vnim'");
	if(mysql_num_rows($hasil)>0){ 
		mysql_query("UPDATE asalsekolah SET nama='$vsek', jurusan='$vjursek', alamat='$valmsek',
					 kabupaten='$vkabsek', propinsi='$vprosek' WHERE nim='$vnim'"); 
	} else {
		mysql_query("INSERT INTO asalsekolah(nim,'nama','jurusan','alamat','kabupaten','propinsi') 
		             VALUES ('$vnim','$vsek','$vjursek','$valmsek','$vkabsek','$vprosek')");
	}
}

?>
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

    <script src="js/fusioncharts.js"></script>
	<script src="lib/js/jquery.min.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
	<script src="lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
   
   
	<style>
	  form {
		width:100%;
		line-height:100%;
		margin: 0 auto;
	  }
	  .form-horizontal .control-group {
		text-align:center;
		position:static;
		margin-bottom: 0px;
		margin-left: 250px;
	  }	  
	</style>
	<script>
		setTimeout("redir()",1000);
		function redir()
		{
		   window.location.href = 'biodata.php';
		}
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
				<li><a href="#">Biodata</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Mahasiswa</a><span class="divider-last">&nbsp;</span></li>
			</ul><br> 
 			<div class="row-fluid">
				<div class="span3"></div>
				<div class="span6"><br><br>
                  <form class="form-horizontal" action="biodata.php" method="post" enctype="multipart/form-data">
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Data Mahasiswa</h4>
							<span class="tools">
							   <a href="javascript:;" class="icon-chevron-down"></a>
							   <a href="menu_mhs.php" class="icon-remove"></a>
							</span>
                        </div>
                        <div class="widget-body form">
						   <div class="control-group"><br><br>
							  <label class="control-label" style="width:140px" >Updating data...</label>
						   </div><br><br><br>
						</div>
                    </div>
				  </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
			
				  