<?php
include ("_script_phpgrid.php");
$g = new jqgrid();

$nomhs = $_SESSION['usr'];
$nama = $_SESSION['usrname'];
$jmlmka=0; $i=0; $datamka=array(); $cfield=array(); $nil=array();
$hasil = mysql_query("UPDATE buffer_nilai SET nilai=UPPER(nilai)");
$hasil = mysql_query("SELECT * FROM buffer_nilai");
$jmlmka=mysql_num_rows($hasil);
while ($row = mysql_fetch_array($hasil)) {
	$datamka[] = $row;	}
foreach($datamka as $row) {
	$i++;
	$cfield[$i] = 'k'.$row['kode'];
	$nil[$i]	= $row['nilai'];
}

$hasil = mysql_query("SELECT * FROM nilai WHERE nim='$nomhs'");
$row = mysql_fetch_array($hasil);	
if(mysql_num_rows($hasil)>0){
	for($i=1;$i<=$jmlmka;$i++){
		$fld = $cfield[$i];
		$cnil = $nil[$i];
		mysql_query("UPDATE nilai SET ".$fld."='$cnil' WHERE nim='$nomhs'");
	}
} else {
	mysql_query("INSERT INTO nilai(nim,nama) VALUES('$nomhs','$nama')");
	for($i=1;$i<=$jmlmka;$i++){
		$fld = $cfield[$i];
		$cnil = $nil[$i];
		mysql_query("UPDATE nilai SET ".$fld."='$cnil' WHERE nim='$nomhs'");
	}
}

?>
<head>
   <meta charset="utf-8" />
	<title>Update Nilai</title>
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
		   window.location.href = 'daftar_nilai.php';
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
				<li><a href="daftar_nilai.php"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
				<li><a href="#">Daftar</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Nilai</a><span class="divider-last">&nbsp;</span></li>
			</ul><br> 
 			<div class="row-fluid">
				<div class="span3"></div>
				<div class="span6"><br><br>
                  <form class="form-horizontal" action="kerja_praktek.php" method="post" enctype="multipart/form-data">
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Daftar Nilai</h4>
							<span class="tools">
							   <a href="javascript:;" class="icon-chevron-down"></a>
							   <a href="daftar_nilai.php" class="icon-remove"></a>
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
			
				  