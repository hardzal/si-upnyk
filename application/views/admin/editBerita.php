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
					<h3 class="page-header">Ubah Berita</h3>
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
									<form role="form" method="POST" action="<?php echo base_url('admin/berita/edit/' . $berita->id) ?>" enctype="multipart/form-data">
										<?php if (validation_errors()) : ?>
											<div class="alert alert-danger">
												<?php echo validation_errors(); ?>
											</div>
										<?php endif; ?>
										<div class="form-group">
											<label>Judul Berita</label>
											<input class="form-control" name="id" type="hidden" value="<?php echo $berita->id; ?>">
											<input class="form-control" name="judul" type="text" value="<?php echo $berita->judul; ?>">
										</div>

										<div class="form-group">
											<label>Kategori</label>
											<select name="category_id" class="form-control">
												<?php foreach ($categories as $category) : ?>
													<?php if ($category->id == $berita->category_id) : ?>
														<option value="<?php echo $category->id; ?>" selected><?php echo $category->name; ?></option>
													<?php else : ?>
														<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
													<?php endif; ?>
												<?php endforeach; ?>
											</select>
										</div>

										<div class="form-group ">
											<label>Tanggal</label>
											<input class="form-control" style="width:170px" name="tgl" type="date" value="<?php echo $berita->tgl; ?>">
										</div>

										<div class="form-group">
											<label class="col-form-label-sm">Penulis</label>
											<select name="user_id" class="form-control">
												<?php foreach ($author as $auth) : ?>
													<?php if ($berita->user_id == $auth->id) : ?>
														<option value="<?php echo $auth->id; ?>" selected><?php echo $auth->username; ?></option>
													<?php else : ?>
														<option value="<?php echo $auth->id; ?>"><?php echo $auth->username; ?></option>
													<?php endif; ?>
												<?php endforeach; ?>

											</select>
										</div>

										<div class="form-group">
											<label>File Photo</label>
											<img class="img-thumbnail" src="<?php echo base_url($berita->file); ?>">
											<input type="file" name="file">
											<input type="hidden" name="file" value="<?php echo $berita->file; ?>">
										</div>

										<div class="form-group">
											<label>Isi</label>
											<textarea id="elm1" class="form-control" rows="3" name="isi"><?php echo $berita->isi; ?></textarea>
										</div>

										<div class="form-group">
											<label>File Tambahan</label>
											<a href="<?php echo base_url($berita->file2); ?>">Lihat File</a>
											<input type="file" name="file2">
											<input type="hidden" name="file" value="<?php echo $berita->file2; ?>">
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
