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
					<h3 class="page-header">Tambah File</h3>
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
									<form role="form" method="POST" action="<?php echo base_url('admin/document/create') ?>" enctype="multipart/form-data">
										<?php if (validation_errors()) : ?>
											<div class="alert alert-danger">
												<?php echo validation_errors(); ?>
											</div>
										<?php endif; ?>
										<div class="form-group">
											<label>FIle Upload</label>
											<input class="form-control" placeholder="Kode MKA" type="file" name="file">
										</div>


										<div class="form-group">
											<label>Keterangan</label>
											<input class="form-control" placeholder="Keterangan" type="text" name="keterangan">
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
