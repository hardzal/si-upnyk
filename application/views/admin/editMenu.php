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
					<h3 class="page-header">Perbaharui Menu</h3>
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
									<form role="form" method="POST" action="<?php echo base_url('admin/menu/edit/') . $menu_data->id ?>">

										<div class="form-group">
											<label>Nama Menu</label>
											<input class="form-control" placeholder="Nama Menu" type="text" name="menu" value="<?php echo $menu_data->menu; ?>" />
										</div>

										<div class="form-group">
											<label>URL</label>
											<input class="form-control" placeholder="Nama Menu" type="text" name="url" value="<?php echo $menu_data->url; ?>" />
											<small class="text-warning">Isi '#' jika memiliki submenu</small>
										</div>

										<div class="form-group">
											<label>Icon</label>
											<input class="form-control" placeholder="Nama Icon" type="text" name="icon" value="<?php echo $menu_data->icon; ?>" />
										</div>

										<div class="form-group">
											<label>Status</label>
											<select name="is_active" class="form-control">
												<?php if ($menu_data->is_active) : ?>
													<option value=1 selected>Aktif</option>
													<option value=0>Tidak Aktif</option>
												<?php else : ?>
													<option value=1>Aktif</option>
													<option value=0 selected>Tidak Aktif</option>
												<?php endif; ?>
											</select>
										</div>

										<div class="form-group">
											<label>Punya Submenu?</label>
											<select name="has_submenu" class="form-control">
												<?php if ($menu_data->has_submenu) : ?>
													<option value=1 selected>Ya</option>
													<option value=0>Tidak</option>
												<?php else : ?>
													<option value=1>Ya</option>
													<option value=0 selected>Tidak</option>
												<?php endif; ?>
											</select>
										</div>

										<div class="form-group">
											<label>Urutan</label>
											<select name="order" class="form-control">
												<?php for ($i = 1; $i <= $total_menu; $i++) : ?>
													<?php if ($i == 0) : ?>
														<option value="" selected>Pilih Urutan Menu</option>
													<?php elseif ($menu_data->urutan == $i) : ?>
														<option value="<?php echo $i; ?>" selected><?php echo $i; ?></option>
													<?php else : ?>
														<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
													<?php endif; ?>
												<?php endfor; ?>
											</select>
										</div>

										<div class="form-group">
											<label>Hak Akses</label><br>
											<input type="checkbox" onclick="checkAll(this)" /> <strong>Pilih Semua</strong><br><br>
											<?php foreach ($roles as $role) : ?>
												<?php if (in_array($role->id, $menu_roles)) : ?>
													<input type="checkbox" name="roles[]" value="<?php echo $role->id; ?>" checked /> <?php echo $role->role; ?>
												<?php else : ?>
													<input type="checkbox" name="roles[]" value="<?php echo $role->id; ?>" /> <?php echo $role->role; ?>
												<?php endif; ?>
												<br />
											<?php endforeach; ?>
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
