<?php
session_start();
if (!isset($_SESSION['usr'])) 
	{  echo "<script>window.location='index.php'</script>";} 
else 
	{ include ("_db.php");
	  $user = $_SESSION['usr']; 
?>
<!DOCTYPE html>
<head>
   <meta charset="utf-8" />
   <title>Main Menu</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style_responsive.css" rel="stylesheet" />
   <link href="css/style_default.css" rel="stylesheet" id="style_color" />
</head>
<body class="fixed-top">
	  <?php include ("_topside_bar_adm.php"); ?>
      <div id="main-content">
         <div class="container-fluid">
            <div class="row-fluid">
               <div class="span12">
					<div id="theme-change" class="hidden-phone">
						<i class="icon-eye-open"></i>
						<span class="settings">
							<span class="text">Warna:</span>
							<span class="colors">
								<span class="color-gray" data-style="gray"></span>
								<span class="color-purple" data-style="purple"></span>
								<span class="color-cyan" data-style="cyan"></span>
								<span class="color-default" data-style="default"></span>
							</span>
						</span>
					</div>
                  <h3 class="page-title">Home
                     <small>Halaman Beranda</small>
                  </h3>
                   <h2 class="page-title" style="text-align:center; margin-top:-40px"><strong>Admin Page</strong>
 					<center><img src="img/admin_page.png" width="80%" alt="admin page" /></center>							  
                 </h2>
               </div>
            </div>
			<div id="page"></div>
         </div>
      </div>
   <div id="footer">
       2019 &copy; Prodi Sistem Informasi
      <div class="span pull-right">
         <span class="go-top"><i class="icon-arrow-up"></i></span>
      </div>
   </div>
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script src="js/scripts.js"></script>
   <script>
      jQuery(document).ready(function() {			
      	App.init();
      });
   </script>
</body>
</html>
<?php } ?>