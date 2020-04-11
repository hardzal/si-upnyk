<?php
include ("_script_phpgrid.php");
$g = new jqgrid();

$nomhs = '';

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
    <?php include ("_topside_bar_adm.php"); ?>
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
            <h2 class="text" style="text-align:center">Display <small> Biodata Mahasiswa</small></h2>
 			<div class="row-fluid">
				<div class="span3"></div>
				<div class="span6">
                <form class="form-horizontal" action="biodata_mhs.php" method="POST" enctype="multipart/form-data">
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Biodata</h4>
							<span class="tools">
							   <a href="menu_admin.php" class="icon-remove"></a>
							</span>
                        </div>
                        <div class="widget-body form">
						   <div class="control-group">
							  <label class="control-label" style="width:140px">Nomor Mahasiswa</label>
								 <input type="text" name="nim" value="<?php echo $nomhs ?>"
								 size="9" maxlength="9" style="width: 300px"; />
						   </div><br>
						</div>
					<input type="submit" name="upload" value="Submit" style="margin-left:205px"><br><br>
                    </div>
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
