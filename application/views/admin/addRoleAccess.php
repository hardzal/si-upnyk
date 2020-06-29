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
					<h3 class="page-header">Tambah Hak Akses</h3>
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
									<form role="form" method="POST" action="<?php echo base_url('admin/roleaccess/create') ?>" enctype="multipart/form-data">

										<div class="form-group">
											<label>Role</label>
											<input class="form-control" placeholder="Hak Akses" type="text" name="role">
										</div>
										<div class="form-group">
											<label>Hak Akses</label><br>
											<input type="checkbox" onclick="checkAll(this)" /> <strong>Pilih Semua</strong><br><br>
											<?php foreach ($menus as $key => $menu) : ?>
												<input type="checkbox" name="menu[]" value="<?php echo $menu->menu_id; ?>" /> <?php echo $menu->menu; ?><br />
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

	<script type="text/javascript">
		function checkAll(source) {
			let input = document.getElementsByName('menu[]');
			for (let i = 0, n = input.length; i < n; i++) {
				input[i].checked = source.checked;
			}
		}
	</script>
</body>

</html>
