<?php
	session_start();	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Login page</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/style_responsive.css" rel="stylesheet" />
  <link href="css/style_default.css" rel="stylesheet" id="style_color" />
	
	<div class="login-header">
		<div id="logo" class="center">
			<img src="img/logologinsi.png" alt="logo" class="center" />&nbsp;&nbsp;&nbsp;
		</div>
	</div> 
	
	<div class="calendar">
		<p class="text-right"><i class="fa icon-calendar fa-fw"></i>&nbsp;
			<span class="text"><?php echo date("l") . ', ' . date("d-m-Y") ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</p>
	</div>
	<div class="header">
		<center><h3 class="text">Login</h3></center>
	</div>
	<style>
		input[type=submit]{
			background: #189598; }
		input[type=submit]:hover{
			background: -webkit-linear-gradient(#157f82, #1caaae, #1caaae,#157f82); /* For Safari 5.1 to 6.0 */
			background: -o-linear-gradient(#157f82, #1caaae, #1caaae,#157f82); /* For Opera 11.1 to 12.0 */
			background: -moz-linear-gradient(#157f82, #1caaae, #1caaae,#157f82); /* For Firefox 3.6 to 15 */
			background: linear-gradient(#157f82, #1caaae, #1caaae,#157f82); /* Standard syntax */
	</style>
</head>
<body id="login-body">
  <div id="login">
    <form name="form" class="form-vertical" enctype="multipart/form-data" method="POST"">
      <div class="lock">
          <i class="icon-lock"></i>
      </div>
      <div class="control-wrap">
          <h4>User Login</h4>          
		  <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
                      <span class="add-on"><i class="icon-user"></i></span>
                      <input id="input-userid" name="userid" type="text" placeholder="UserID" />
                  </div>
              </div>
          </div>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
                      <span class="add-on"><i class="icon-key"></i></span>
                      <input id="input-password" name="password" type="password" placeholder="Password" />
                  </div>
                  <div class="clearfix space5"></div>
              </div>
          </div>
      </div>
        <input type="submit" id="login-btn" class="btn btn-block login-btn" name="login" value="Login" />
    </form>
     <?php
        if (isset($_POST['login'])) { //pengecekan login_attempt kosong atau tidak
			include ("_db.php");
			if($_POST['userid']=='' || $_POST['password']=='') {
				 ?><div class="alert alert-danger">
						<button class="close" data-dismiss="alert">×</button>
						<h4>Login Gagal !</h4>UserID dan password tidak boleh kosong
					</div>
				  <?php 
			}elseif( (strlen($_POST['userid']) > 18) || (strlen($_POST['password'])> 18) ){	  
				 ?><div class="alert alert-danger">
						<button class="close" data-dismiss="alert">×</button>
						<h4>Login Gagal !</h4>UserID atau password terlalu panjang
					</div>
				  <?php 
			}else {
				include ("_db.php");
				$Userid = mysql_real_escape_string($_POST['userid']);
				$Password = mysql_real_escape_string(md5($_POST['password']));
				$result = mysql_query("SELECT * FROM login WHERE BINARY UserID = '$Userid' AND Password = '$Password' ");
				if (mysql_num_rows($result) > 0) {
					$row = mysql_fetch_array($result);
					$ID		  = $row["ID"];
					$UserID   = $row["UserID"];
					$Username = $row["Username"];
					$Passwd   = $row["Password"];
					$Status   = $row["Status"];
					$Ket   	  = $row["Keterangan"];
					//session_start();
					$_SESSION['idusr'] 	 = $ID;  
					$_SESSION['usr'] 	 = $UserID;  
					$_SESSION['usrname'] = $Username;  
					$_SESSION['pw'] 	 = $Passwd;  
					$_SESSION['status']  = $Status;                
					$_SESSION['ket']  	 = $Ket;                
					if($Status=='Mahasiswa'){
						echo "<script>window.location='menu_mhs.php'</script>";
					}elseif($Status=='Dosen'){
						echo "<script>window.location='menu_mhs.php'</script>";
					}elseif($Status=='Admin'){
						echo "<script>window.location='menu_admin.php'</script>";
					}
				} else { 
					?>            
				    <div class="alert alert-error">
						<button class="close" data-dismiss="alert">×</button>
						<h4>Login Gagal !</h4>UserID atau password anda tidak dikenal
					</div>
				  <?php
				}
			}
        }
    ?>
  </div>
  <div id="login-copyright">
	Copyright &COPY; <?php echo '2109 PRODI SISTEM INFORMASI. All Rights Reserved'; ?>
  </div>
	<script>
		jQuery(document).ready(function() {     
		  App.initLogin();
		});
	</script>
</body>
</html>
