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
					<h3 class="page-header">Tambah Menu</h3>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">

						<div class="panel-body">
							<div class="row">
								<?php if (validation_errors()) : ?>
									<div class="alert alert-warning">
										<?php echo validation_errors(); ?>
									</div>
								<?php endif; ?>
								<div class="col-lg-8">
									<form role="form" method="POST" action="<?php echo base_url('admin/menu/create') ?>">

										<div class="form-group">
											<label>Nama Menu</label>
											<input class="form-control" placeholder="Nama Menu" type="text" name="menu" />
										</div>

										<div class="form-group">
											<label>URL</label>
											<input class="form-control" placeholder="URL Menu" type="text" name="url" />
											<small class="text-danger">* Isi '#' jika memiliki submenu</small>
										</div>

										<div class="form-group">
											<label>Icon</label>
											<input class="form-control" placeholder="Icon" type="text" name="icon" />
										</div>

										<div class="form-group">
											<label>Status</label>
											<select name="is_active" class="form-control">
												<option value=1>Aktif</option>
												<option value=0>Tidak Aktif</option>
											</select>
										</div>

										<div class="form-group">
											<label>Punya Submenu?</label>
											<select name="has_submenu" class="form-control">
												<option value=1>Ya</option>
												<option value=0>Tidak</option>
											</select>
										</div>

										<div class="form-group">
											<label>Urutan</label>
											<select name="order" class="form-control">
												<option value="">Pilih Urutan Menu</option>
												<?php for ($i = 1; $i <= $total_menu; $i++) : ?>
													<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
												<?php endfor; ?>
											</select>
										</div>
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
