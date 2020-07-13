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
					<h3 class="page-header">Daftar SubMenu</h3>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<!-- <div class="mb-3">
								<a href="<?php echo base_url('admin/submenu/create') ?>"><button type="button" class="btn btn-primary btn-sm">Tambah SubMenu</button></a>
							</div> -->
						</div>
						<div class="panel-body">
							<?php echo $this->session->flashdata('message'); ?>
							<div class="dataTable_wrapper">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<th>No</th>
										<th>Menu</th>
										<th>SubMenu</th>
										<th>Status</th>
										<th>Aksi</th>
									</thead>
									<tbody>
										<?php $no = 1;
										foreach ($submenus_data as $submenu) : ?>
											<tr>
												<td width="10px" class="text-center"><?php echo $no++; ?>
												<td><?php echo showMenu($submenu); ?></td>
												<td><?php echo $submenu->submenu; ?></td>
												<td><?php echo is_publish($submenu->is_active, "aktif"); ?></td>
												<td>
													<a href="<?php echo base_url('admin/submenu/edit/') . $submenu->id; ?>" class="btn btn-xs btn-primary mr-3">Edit</a>
													<!-- <a href="<?php echo base_url('admin/submenu/delete/') . $submenu->id; ?>" class="btn btn-xs btn-danger" onclick="return confirm('apakah kamu yakin ingin menghapusnya?')">Hapus</a> -->
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /.panel -->
				</div>
				<!-- /.col-lg-12 -->
			</div>
		</div>
	</div>
	<!-- /#wrapper -->

	<?php include 'foot.php'; ?>
	<script>
		tinymce.init({
			plugins: "paste",
			paste_as_text: true
		});
	</script>
</body>

</html>
