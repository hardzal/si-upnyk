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
					<h3 class="page-header">Daftar Agenda</h3>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="mb-3">
								<a href="<?php echo base_url('admin/agenda/create') ?>"><button type="button" class="btn btn-primary btn-sm">Tambah Agenda</button></a>
							</div>
						</div>
						<div class="panel-body">
							<?php echo $this->session->flashdata('message'); ?>
							<div class="dataTable_wrapper">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<th>No</th>
										<th>Judul</th>
										<th>Waktu Pelaksanaan</th>
										<th>Lokasi</th>
										<th>Status</th>
										<th>Aksi</th>
									</thead>
									<tbody>
										<?php $no = 1;
										foreach ($events as $event) : ?>
											<td width="10px" class="text-center"><?php echo $no++; ?>
											<td><?php echo $event->title; ?></td>
											<td><?php echo date('H:i d-F-Y', strtotime($event->time_start)) . " s/d " . date('H:i d-F-Y', strtotime($event->time_end)); ?></td>
											<td><?php echo $event->location; ?></td>
											<td><?php echo is_publish($event->status); ?></td>
											<td>
												<a href="<?php echo base_url('admin/agenda/edit/') . $event->id; ?>" class="btn btn-xs btn-primary mr-3">Edit</a>
												<a href="<?php echo base_url('admin/agenda/delete/') . $event->id; ?>" class="btn btn-xs btn-danger" onclick="return confirm('apakah kamu yakin ingin menghapusnya?')">Hapus</a>
											</td>
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
