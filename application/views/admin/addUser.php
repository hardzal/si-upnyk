<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>

	<div id="wrapper">

		<!-- Navigation -->
		<?php include 'navbar.php'; ?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Tambah User</h3>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">

						<div class="panel-body">
							<div class="row">
								<?php if (validation_errors()) : ?>
									<div class="alert alert-warning">
										<?php echo validation_errors(); ?>
									</div>
								<?php endif; ?>
								<div class="col-lg-8">
									<form role="form" method="POST" action="<?php echo base_url('admin/user/create') ?>" enctype="multipart/form-data">

										<div class="form-group">
											<label>Username</label>
											<input class="form-control" placeholder="Username" type="text" name="username">
										</div>

										<div class="form-group">
											<label>Password</label>
											<input class="form-control" type="password" name="password">
										</div>

										<div class="form-group">
											<label>Ulangi Password</label>
											<input class="form-control" type="password" name="password_repeat">
										</div>

										<div class="form-group">
											<label>Hak Akses</label>
											<select name="role_id" class="form-control">
												<?php foreach ($roles as $role) : ?>
													<option value="<?php echo $role->id; ?>"><?php echo $role->role; ?></option>
												<?php endforeach; ?>
											</select>
										</div>

										<br>
										<button type="submit" class="btn btn-info">Submit Button</button>
										<button type="reset" class="btn btn-warning">Reset Button</button>
									</form>
								</div>
								<!-- /.col-lg-6 (nested) -->

							</div>
							<!-- /.row (nested) -->
						</div>
						<!-- /.panel-body -->
					</div>
					<!-- /.panel -->
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<?php include 'foot.php'; ?>

</body>

</html>
