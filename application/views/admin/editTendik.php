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
					<h3 class="page-header">Ubah Data Tendik</h3>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">

						<div class="panel-body">
							<div class="row">
								<div class="col-lg-8">
									<form role="form" method="POST" action="<?php echo base_url('admin/tendik/edit/' . $tendik->id) ?>" enctype="multipart/form-data">
										<?php if (validation_errors()) : ?>
											<div class="alert alert-danger">
												<?php echo validation_errors(); ?>
											</div>
										<?php endif; ?>
										<div class="form-group">
											<label>NIP/NIK</label>
											<input class="form-control" placeholder="NIP/NIK" value="<?php echo $tendik->id; ?>" type="hidden" name="id">
											<input class="form-control" placeholder="NIP/NIK" value="<?php echo $tendik->nik; ?>" type="text" name="nik">
										</div>

										<div class="form-group">
											<label>Nama Lengkap</label>
											<input class="form-control" placeholder="Nama Lengkap" type="text" name="nama" value="<?php echo $tendik->nama; ?>">
										</div>
										<div class="form-group">
											<label>File Pas Photo</label>
											<input type="file" name="file">
											<input type="hidden" name="file" value="<?php echo $tendik->file; ?>">
										</div>
										<div class="form-group">
											<label>Email</label>
											<input class="form-control" placeholder="Email" type="email" name="email" value="<?php echo $tendik->email; ?>">
										</div>


										<div class="form-group">
											<label>Pelatihan</label>
											<textarea id="elm1" class="form-control" rows="3" name="pelatihan"><?php echo $tendik->pelatihan; ?></textarea>
										</div>

										<br>
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
