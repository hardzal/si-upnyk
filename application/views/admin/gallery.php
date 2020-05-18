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
					<h3 class="page-header">Daftar Galery</h3>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="mb-3">
								<a href="<?php echo base_url('admin/galleries/create') ?>"><button type="button" class="btn btn-primary btn-sm">Tambah Galery</button></a>
							</div>
						</div>
						<div class="panel-body">
							<?php echo $this->session->flashdata('message'); ?>
							<div class="dataTable_wrapper">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<th>No</th>
										<th>Image</th>
										<th>Keterangan</th>
										<th>Status</th>
										<th>Aksi</th>
									</thead>
									<tbody>
										<?php $no = 1;
										foreach ($galleries as $gallery) : ?>
											<tr>
												<td width="10px" class="text-center"><?php echo $no++; ?>
												<td><img src='<?php echo base_url($gallery->image) ?? base_url('assets/images/gallery/default.png'); ?>' width="100px;" alt="<?php echo $gallery->image; ?>" /></td>
												<td><?php echo $gallery->keterangan; ?></td>
												<td><?php echo is_publish($gallery->status); ?></td>
												<td>
													<a href="<?php echo base_url('admin/galleries/edit/') . $gallery->id; ?>" class="btn btn-xs btn-primary mr-3">Edit</a>
													<a href="<?php echo base_url('admin/galleries/delete/') . $gallery->id; ?>" class="btn btn-xs btn-danger" onclick="return confirm('apakah kamu yakin ingin menghapusnya?')">Hapus</a>
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

</body>

</html>
