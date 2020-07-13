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
					<h3 class="page-header">Tambah Gallery</h3>
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
									<?php if (validation_errors()) : ?>
										<p class="alert alert-danger"><?php echo validation_errors(); ?></p>
									<?php endif; ?>

									<form role="form" method="POST" action="<?php echo base_url('admin/galleries/create') ?>" enctype="multipart/form-data">
										<div class="form-group">
											<label>File Image</label>
											<input class="form-control" type="file" name="image">
										</div>
										
										<div class="form-group">
											<label class="col-form-label">Keterangan</label>
											<textarea id="elm1" class="form-control" rows="3" name="description"></textarea>
										</div>

										<div class="form-group">
											<label class="col-form-label" for="status">Status</label>
											<select name="status" class="form-control" id="status" required>
												<option value>Pilih Status</option>
												<option value=1>Publish</option>
												<option value=0>Unpublish</option>
											</select>
										</div>

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
		<!-- /#page-wrapper -->\

	</div>
	<!-- /#wrapper -->

	<?php include 'foot.php'; ?>

</body>

</html>
