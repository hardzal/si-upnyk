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
					<h3 class="page-header">Tambah Agenda</h3>
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
									<form role="form" method="POST" action="<?php echo base_url('event/create') ?>" enctype="multipart/form-data">
										<div class="form-group">
											<label for="title">Judul Agenda</label>
											<input class="form-control" placeholder="Judul Berita" type="text" name="title" id="title" required />
										</div>
										<div class="form-group row">
											<label for="tgl_start" class="col-sm-6 col-form-label">Tanggal Mulai</label>
											<label for="time_start" class="col-sm-6 col-form-label">Waktu Mulai</label>
											<div class="col-sm-6">
												<input class="form-control" type="date" name="tgl_start" id="tgl_start" min="<?php echo date('Y-m-d', time()); ?>" required />
											</div>
											<div class="col-sm-6">
												<input class="form-control" type="time" name="time_start" id="time_start" required />
											</div>
										</div>
										<div class="form-group row">
											<label for="tgl_end" class="col-sm-6 col-form-label">Tanggal Selesai</label>
											<label for="time_end" class="col-sm-6 col-form-label">Waktu Selesai</label>
											<div class="col-sm-6">
												<input class="form-control" type="date" name="tgl_end" id="tgl_end" min="<?php echo date('Y-m-d', time()); ?>" required />
											</div>
											<div class=" col-sm-6">
												<input class="form-control" type="time" name="time_end" id="time_end" required />
											</div>
										</div>
										<div class="form-group">
											<label for="location">Lokasi</label>
											<input class="form-control" type="text" name="location" id="location" required />
										</div>
										<div class="form-group">
											<label for="image">Cover</label>
											<input type="file" name="image" class="form-control" id="image" />
										</div>
										<div class="form-group">
											<label for="description" class="col-form-label">Isi Berita</label>
											<textarea id="elm1" class="form-control" rows="3" name="description"></textarea>
										</div>
										<div class="form-group">
											<label for="file" class="col-form-label">File</label>
											<input type="file" name="file" class="form-control" id="file" />
										</div>
										<div class="form-group">
											<label class="col-form-label" for="status">Status</label>
											<select name="status" class="form-control" id="status" required>
												<option value>Pilih Status</option>
												<option value=1>Publish</option>
												<option value=0>Unpublish</option>
											</select>
										</div>
										<div class="mt-3">
											<input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>" />
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
