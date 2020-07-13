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
					<h3 class="page-header">Ubah Slide</h3>
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
									<form role="form" method="POST" action="<?php echo base_url('admin/slide/edit/' . $slide->id) ?>" enctype="multipart/form-data">
										<?php if (validation_errors()) : ?>
											<div class="alert alert-danger">
												<?php echo validation_errors(); ?>
											</div>
										<?php endif; ?>
										<div class="form-group">
											<label>File Upload</label>
											<?php if ($slide->file) : ?>
												<div class="col-md-12 my-5">
													<img src="<?php echo base_url('assets/images/' . $slide->file); ?>" width="300px" class="img-thumbnail" />
												</div>
											<?php endif; ?>
											<input class="form-control" type="hidden" name="id" value="<?php echo $slide->id; ?>">
											<input class="form-control" type="file" name="file">
											<input class="form-control" type="hidden" name="file" value="<?php echo $slide->file; ?>">
											<p><br>
												<font color="red"><b>ukuran slide yang ditampilkan 460x290</b></font> (sesuaikan ukuran)
											</p>
										</div>

										<div class="form-group">
											<label>Link</label>
											<input class="form-control" type="text" name="link" value="<?php echo $slide->link; ?>">
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
