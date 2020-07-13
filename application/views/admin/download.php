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
					<h3 class="page-header">File</h3>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<?php if ($this->session->userdata('notif')) : ?>
							<div class="alert alert-success">
								<?php echo $this->session->userdata('notif'); ?>
							</div>
						<?php endif; ?>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<a href="<?php echo base_url('admin/document/create') ?>"><button type="button" class="btn btn-primary btn-sm">Tambah File</button></a>
									<br>
									<br>
									<div class="panel panel-default">

										<!-- /.panel-heading -->
										<div class="panel-body">
											<div class="dataTable_wrapper">
												<table class="table table-striped table-bordered table-hover" id="dataTables-example">
													<thead>
														<tr>
															<th>#</th>
															<th>File</th>
															<th>Keterangan</th>
															<th>Opsi</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$no = 0;
														foreach ($download as $data) {
															$no++;
														?>
															<tr class="odd gradeX">
																<td><?php echo $no; ?></td>
																<td><a href="<?php echo '../../assets/' . $data->file; ?>"><?php echo $data->keterangan; ?></a></td>
																<td><?php echo $data->keterangan; ?></td>
																<td class="center"> <a href="<?php echo base_url('admin/document/edit/' . $data->id) ?>"><button type="button" class="btn btn-warning btn-xs">Ubah</button></a> <a href="<?php echo base_url('admin/document/delete/' . $data->id) ?>"><button type="button" class="btn btn-danger btn-xs" onclick='return confirm("Anda Yakin Akan Menghapus?")'>Hapus</button></a> </td>
															</tr>
														<?php } ?>

													</tbody>
												</table>
											</div>
											<!-- /.table-responsive -->
										</div>
										<!-- /.panel-body -->
									</div>
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
