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
					<h3 class="page-header">Tambah Berita</h3>
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
									<form role="form" method="POST" action="<?php echo base_url('index.php/dosen/insertBerita') ?>" enctype="multipart/form-data">

										<div class="form-group">
											<label>Judul Berita</label>
											<input class="form-control" placeholder="Judul Berita" type="text" name="judul">
										</div>

										<div class="form-group">
											<label>Tanggal</label>
											<input class="form-control" type="date" name="tgl">
										</div>
										<div class="form-group">
											<label>File Pas Photo</label>
											<input type="file" name="file">
										</div>

										<div class="form-group">
											<label>Isi Berita</label>
											<textarea id="elm1" class="form-control" rows="3" name="isi"></textarea>
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
