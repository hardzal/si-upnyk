<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Login Admin</title>

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="<?php echo base_url('assets/admin/bower_components/metisMenu/dist/metisMenu.min.css') ?>" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="<?php echo base_url('assets/admin/dist/css/sb-admin-2.css') ?>" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?php echo base_url('assets/admin/bower_components/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">

				<div class="login-panel panel panel-default">
					<div class="panel-heading" style="background-color: #34388b;">
						<h3 class="panel-title"><b>
								<font color="white">Admin Sistem Informasi</font>
							</b></h3>
					</div>
					<?php echo $this->session->flashdata('notif'); ?>
					<div class="panel-body">
						<form role="form" action="<?php echo base_url('index.php/Login/proseslogin') ?>" method="POST">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="Username" name="username" type="text" autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" type="password" value="">
								</div>

								<!-- Change this to a button or input when using this as a form -->
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Login</button>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="<?php echo base_url('assets/admin/bower_components/jquery/dist/jquery.min.js') ?>"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url('assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="<?php echo base_url('assets/admin/bower_components/metisMenu/dist/metisMenu.min.js') ?>"></script>

	<!-- Custom Theme JavaScript -->
	<script src="<?php echo base_url('assets/admin/dist/js/sb-admin-2.js') ?>"></script>

</body>

</html>
