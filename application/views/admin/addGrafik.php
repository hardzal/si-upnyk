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
					<h3 class="page-header">Tambah Grafik</h3>
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
									<form role="form" method="POST" action="<?php echo base_url('admin/grafik/create') ?>" enctype="multipart/form-data">
										<div class="form-group">
											<label for="title">Judul Grafik</label>
											<input class="form-control" placeholder="Judul" type="text" name="title" id="title" required />
										</div>
										<!--<div class="form-group">-->
										<!--	<label for="image">Gambar</label>-->
										<!--	<input type="file" name="image" class="form-control" id="image" />-->
										<!--</div>-->
										<div class="form-group">
											<label for="type" class="col-form-label">Type</label>
											<select class="custom-select" name="type" id="type">
											    <option value="bar">Bar</option>
											    <option value"pie">Pie</option>
										    	<option value="column">Column</option>
											</select>
										</div>
										<!--<div class="form-group">-->
										<!--	<label class="col-form-label" for="status">Status</label>-->
										<!--	<select name="status" class="form-control" id="status" required>-->
										<!--		<option value>Pilih Status</option>-->
										<!--		<option value=1>Publish</option>-->
										<!--		<option value=0>Unpublish</option>-->
										<!--	</select>-->
										<!--</div>-->
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
