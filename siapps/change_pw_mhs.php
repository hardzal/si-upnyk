<?php
session_start();
include ("_script_phpgrid.php");
$userid=$_SESSION['usr'];
$password=$_SESSION['pw'];
$g = new jqgrid();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Change Password</title>
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
		.ui-jqgrid {
			font-family: "tahoma","verdana","sans serif";
			font-size: 12px;}
		 .ui-jqgrid .ui-pg-table td {
			font-size: 12px;}
		 .chgpw-btn {
			height:30px;
			line-height:10px;
			padding:0 0px;}
		  input[type=submit]{
			font-size:12px;}
	</style>
</head>

<body class="fixed-top">
    <?php include ("_topside_bar_mhs.php"); ?>
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
				<li><a href="menu_mhs.php"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
				<li><a href="#">Ganti</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Password</a>&nbsp;<span class="divider-last">&nbsp;</span></li>
			</ul>	 
           <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
				<div id="login">
				<!-- BEGIN LOGIN FORM -->
					<form  action='#' class="form-vertical" enctype="multipart/form-data" method="POST">
						<div class="lock">
						  <i class="icon-lock"></i>
						</div>
						<div class="control-wrap">
						  <h4>&nbsp;&nbsp;&nbsp;&nbsp;Ganti Password</h4>          
						  <div class="control-group">
							  <div class="controls">
								  <div class="input-prepend">
									  <span class="add-on"><i class="icon-key"></i></span>
									  <input autocomplete="off" id="input-oldpw" name="oldpw" type="Password" placeholder="Password lama"/>
								  </div>
							  </div>
						  </div>
						  <div class="control-group">
							  <div class="controls">
								  <div class="input-prepend">
									  <span class="add-on"><i class="icon-signin"></i></span>
									  <input id="input-newpw" name="newpw" type="password" placeholder="Password Baru" />
								  </div>
							  </div>
						  </div>
						</div>
						<input type="submit" class="chgpw-btn" name="chgpw" value="Save Change"/>&nbsp;&nbsp;
						<input type="submit" class="chgpw-btn" name="cancel" value="Cancel"/>
					</form>
					<?php 
					if (isset($_POST['cancel'])) {?>
						<div class="alert alert-info">
							<button class="close" data-dismiss="alert">×</button>
							<h4><strong>Batal!</strong>&nbsp;&nbsp;Password lama batal diganti</h4>
						</div>
						<?php echo "<script>setTimeout(\"location.href = 'menu_mhs.php';\",1700);</script>";	
					} ?>
					<?php
					if (isset($_POST['chgpw'])){ 
						$pwlama = md5($_POST['oldpw']);
						$pwbaru = md5($_POST['newpw']);
						if($pwlama==$password){
							mysql_query("UPDATE login SET password='$pwbaru' WHERE userID='$userid' AND password = '$password'");
							$_SESSION['pw'] = $pwbaru;  ?>
							<div class="alert alert-success">
								<button class="close" data-dismiss="alert">×</button>
								<h4><strong>Sukses!</strong>&nbsp;&nbsp;Password berhasil diganti</h4>
							</div>
							<?php echo "<script>setTimeout(\"location.href = 'menu_mhs.php';\",1700);</script>";	
						} else { ?>
							<div class="alert alert-danger">
								<button class="close" data-dismiss="alert">×</button>
								<h4><strong>Gagal!</strong>&nbsp;&nbsp;Password lama tidak dikenal</h4>
							</div>
							<?php echo "<script>setTimeout(\"location.href = 'change_pw_shp.php';\",2200);</script>";	
						}
					} ?>
				</div>
           </div>
         </div>
      </div>
    </div>
   <!-- BEGIN FOOTER -->
   <div id="footer">
       2019 &copy; Prodi Sistem Informasi
      <div class="span pull-right">
         <span class="go-top"><i class="icon-arrow-up"></i></span>
      </div>
   </div>
   <!-- END FOOTER -->
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <script src="js/scripts.js"></script>
   <script>
      jQuery(document).ready(function() {			
      	App.init();
		src="js/jquery.blockui.js";
      });
   </script>         
</body>
</html>
