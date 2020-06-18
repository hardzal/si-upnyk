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
					<h3 class="page-header">Edit Pengajaran</h3>
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
									<form role="form" method="POST" action="<?php echo base_url('admin/pengajaran/edit/' . $tridharma->id) ?>" enctype="multipart/form-data">
										<div class="form-group">
											<label for="title">Nama Pengajaran</label>
											<input class="form-control" placeholder="Pengajaran" type="text" name="title" id="title" value="<?php echo $tridharma->title; ?>" required />
										</div>
										<div class="form-group">
											<div class="row">
												<label for="file" class="col-form-label col-md-12">File</label>
												<?php if ($tridharma->file) : ?>
													<div class="col-sm-12 my-5">
														<a href='<?php echo base_url('') . $tridharma->file; ?>' class='btn btn-info mb-3'>Lihat File</a>
													</div>
													<div class='col-md-8'>
														<input type="file" name="file" class="form-control" id="file" />
													</div>
												<?php else : ?>
													<input type="file" name="file" class="form-control" id="file" />
												<?php endif; ?>
											</div>
											<small class='text-danger'>* Max file 2 mb</small>
										</div>
										<div class="form-group">
											<label for="description" class="col-form-label">Deskripsi</label>
											<textarea id="elm1" class="form-control" rows="3" name="description" value="<?php echo $tridharma->description; ?>"><?php echo $tridharma->description; ?></textarea>
										</div>
										<div class="form-group">
											<label class="col-form-label" for="status">Status</label>
											<select name="status" class="form-control" id="status" required>
												<option value>Pilih Status</option>
												<?php if ($tridharma->status == 1) : ?>
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
