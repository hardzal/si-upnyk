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
					<h3 class="page-header">Edit Fasilitas</h3>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<form role="form" method="POST" action="<?php echo base_url('admin/fasilitas/edit/' . $fasilitas->id) ?>" enctype="multipart/form-data">
										<div class="form-group">
											<label for="title">Nama Bidang Perminatan</label>
											<input class="form-control" placeholder="Fasilitas" type="text" name="title" id="title" value="<?php echo $fasilitas->title; ?>" required />
										</div>
										<div class="form-group">
											<div class="row">
												<label for="image" class="col-form-label col-md-12">Ilustrasi</label>
												<?php if ($fasilitas->image) : ?>
													<div class="col-md-12 my-5">
														<img src="<?php echo base_url($fasilitas->image); ?>" width="300px" class="img-thumbnail" />
													</div>
												<?php endif; ?>
											</div>
											<input type="file" name="image" class="form-control" id="image" />
										</div>
										<div class="form-group">
											<label class="col-form-label" for="status">Status</label>
											<select name="status" class="form-control" id="status" required>
												<option value>Pilih Status</option>
												<?php if ($fasilitas->status == 1) : ?>
													<option value=1 selected>Publish</option>
													<option value=0>Unpublish</option>
												<?php else : ?>
													<option value=1>Publish</option>
													<option value=0 selected>Unpublish</option>
												<?php endif; ?>
											</select>
										</div>
										<div class="mt-3">
											<button type="submit" class="btn btn-primary">Submit Button</button>
											<button type="reset" class="btn btn-danger">Reset Button</button>
										</div>
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
