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
					<h3 class="page-header">Edit Wisuda</h3>
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

									<form role="form" method="POST" action="<?php echo base_url('admin/wisuda/edit/') . $wisuda->id ?>" enctype="multipart/form-data">

										<div class="form-group">
											<label>Judul</label>
											<input class="form-control" placeholder="Keterangan" type="text" name="title" value="<?php echo $wisuda->title; ?>">
										</div>

										<div class="form-group row">
											<label>File</label>
											<small class='text-danger'>* Max file 5 mb</small>
											<?php if ($wisuda->file) : ?>
												<div class="col-sm-12 my-5">
													<a href='<?php echo base_url('') . $wisuda->file; ?>'>Lihat File</a>
												</div>
												<div class=' col-md-8'>
													<input type="file" name="file" class="form-control" id="file" />
												</div>
											<?php else : ?>
												<input type="file" name="file" class="form-control" id="file" />
											<?php endif; ?>
										</div>

										<div class="form-group">
											<label>Keterangan</label>
											<textarea id="elm1" class="form-control" rows="3" name="description" value="<?php echo $wisuda->description; ?>"><?php echo $wisuda->description; ?></textarea>
										</div>

										<div class="form-group">
											<label class="col-form-label" for="status">Status</label>
											<select name="status" class="form-control" id="status" required>
												<option value>Pilih Status</option>
												<?php if ($wisuda->status == 1) : ?>
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
