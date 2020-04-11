<?php
include ("_script_phpgrid.php");
$g = new jqgrid();
 
if($_POST['upload']){
	$vnim	  = $_POST['nim'];
	$vjudul	  = $_POST['judul'];
	$vtmp	  = $_POST['tempat'];
	$xtgl 	  = $_POST['tglmulai'];
	$ytgl 	  = $_POST['tglstop'];
	$vtglstart= substr($xtgl,6,4).'-'.substr($xtgl,3,2).'-'.substr($xtgl,0,2);
	$vtglstop = substr($ytgl,6,4).'-'.substr($ytgl,3,2).'-'.substr($ytgl,0,2);
	$vpemlap  = $_POST['pemblap'];
	$vpemsi   = $_POST['pembsi'];
	$hasil = mysql_query("SELECT * FROM kp WHERE nim='$vnim'");
	if(mysql_num_rows($hasil)>0){ 
		mysql_query("UPDATE  kp SET judul='$vjudul',tempat='$vtmp',tgl_mulai='$vtglstart',tgl_selesai='$vtglstop',
					 pemb_lap='$vpemlap', pemb_si='$vpemsi' WHERE nim='$vnim'"); 
	} else {
		mysql_query("INSERT INTO  kp(nim,judul,tempat,tgl_mulai,tgl_selesai,pemb_lap,pemb_si) 
		             VALUES ('$vnim','$vjudul','$vtmp','$vtglstart','$vtglstop','$vpemlap','$vpemsi')");
	}
}

?>
<head>
   <meta charset="utf-8" />
	<title>Update KP</title>
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
		   window.location.href = 'kerja_praktek.php';
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
				<li><a href="#">Kerja</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Praktek</a><span class="divider-last">&nbsp;</span></li>
			</ul><br> 
 			<div class="row-fluid">
				<div class="span3"></div>
				<div class="span6"><br><br>
                  <form class="form-horizontal" action="kerja_praktek.php" method="post" enctype="multipart/form-data">
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Kerja Praktek</h4>
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
			
				  