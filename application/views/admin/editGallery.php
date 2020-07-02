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
					<h3 class="page-header">Edit Gallery</h3>
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

									<form role="form" method="POST" action="<?php echo base_url('admin/galleries/edit/' . $gallery->id) ?>" enctype="multipart/form-data">
										<div class="form-group">
											<label>File Image</label>
											<div class="row">
												<?php if ($gallery->image) : ?>
													<img src='<?php echo base_url($gallery->image); ?>' width='300px;' />
												<?php endif; ?>
												<input class="form-control col-sm-12" type="file" name="image">
											</div>
										</div>

										<div class="form-group">
											<label>Keterangan</label>
											<input class="form-control" placeholder="Keterangan" type="text" name="keterangan" value="<?php echo $gallery->keterangan ? $gallery->keterangan : ""; ?>">
										</div>

										<div class="form-group">
											<label>Publish?</label>
											<input type="checkbox" name="status" value=1 <?php echo $gallery->status == 1 ? 'checked' : ''; ?> />
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
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<?php include 'foot.php'; ?>

</body>

</html>
