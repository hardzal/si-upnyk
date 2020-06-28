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
					<h3 class="page-header">Perbaharui SubMenu</h3>
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
									<form role="form" method="POST" action="<?php echo base_url('admin/submenu/edit/') . $submenu->id ?>">

										<div class="form-group">
											<label>Nama Menu</label>
											<select name="menu_id" class="form-control">
												<?php foreach ($menus_data as $menu) : ?>
													<?php if ($submenu_data->menu_id == $menu->id) : ?>
														<option value=<?php echo $menu->id; ?> selected><?php echo $menu->menu; ?></option>
													<?php else : ?>
														<option value=<?php echo $menu->id; ?>><?php echo $menu->menu; ?></option>
													<?php endif; ?>
												<?php endforeach; ?>
											</select>
										</div>

										<div class="form-group">
											<label>Nama Submenu</label>
											<input class="form-control" placeholder="Nama Submenu" type="text" name="submenu" value="<?php echo $submenu_data->submenu; ?>" />
										</div>

										<div class="form-group">
											<label>URL</label>
											<input class="form-control" placeholder="URL Submenu" type="text" name="url" value="<?php echo $submenu_data->url; ?>" />
											<small class="text-danger">* Isi '#' jika memiliki submenu</small>
										</div>

										<div class="form-group">
											<label>Status</label>
											<select name="is_active" class="form-control">
												<?php if ($submenu_data->is_active) : ?>
													<option value=1 selected>Aktif</option>
													<option value=0>Tidak Aktif</option>
												<?php else : ?>
													<option value=1>Aktif</option>
													<option value=0 selected>Tidak Aktif</option>
												<?php endif; ?>
											</select>
											</select>
										</div>

										<div class="form-group">
											<label>Punya Submenu?</label>
											<select name="has_submenu" class="form-control">
												<?php if ($submenu_data->has_submenu) : ?>
													<option value=1 selected>Ya</option>
													<option value=0>Tidak</option>
												<?php else : ?>
													<option value=1>Ya</option>
													<option value=0 selected>Tidak</option>
												<?php endif; ?>
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
