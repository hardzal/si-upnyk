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
					<h3 class="page-header">Edit Kurikulum</h3>
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
									<form role="form" method="POST" action="<?php echo base_url('admin/kurikulum/edit/') . $kurikulum->id ?>" enctype="multipart/form-data">
										<h3> Tahun Ajaran <?php echo $kurikulum->tahun; ?> </h3>
										<div class="form-group">
											<label>File akademik</label>
											<?php if ($kurikulum->file) : ?>
												<a href='<?php echo base_url('assets/file/') . $kurikulum->file; ?>'>Lihat File</a>
												<input type="file" name="file" class="form-control" />
											<?php else : ?>
												<input type="file" name="file" class="form-control" />
											<?php endif; ?>
											<small class="text-danger">* Max File 10MB</small>
											<input type="hidden" name="id" value="<?php echo $kurikulum->id; ?>">
										</div>
										<div class="form-group">
											<label>Tahun Ajaran</label>
											<input type="text" name="tahun" value="<?php echo $kurikulum->tahun; ?>" required class="form-control" />
										</div>
										<div class="form-group">
											<label class="col-form-label" for="status">Status</label>
											<select name="status" class="form-control" id="status" required>
												<option value>Pilih Status</option>
												<?php if ($kurikulum->status == 1) : ?>
													<option value=1 selected>Publish</option>
													<option value=0>Unpublish</option>
												<?php else : ?>
													<option value=1>Publish</option>
													<option value=0 selected>Unpublish</option>
												<?php endif; ?>
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
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<?php include 'foot.php'; ?>

</body>

</html>
