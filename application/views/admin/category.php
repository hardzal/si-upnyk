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
					<h3 class="page-header">Kategori</h3>
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
									<a href="<?php echo base_url('admin/category/create') ?>"><button type="button" class="btn btn-primary btn-sm">Tambah Kategori</button></a>
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
															<th>Judul</th>
															<th width="10%">Opsi</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$no = 0;
														foreach ($categories as $category) {
															$no++;
														?>
															<tr class="gradeC">
																<td><?php echo $no ?></td>
																<td><?php echo $category->name; ?></td>
																<td class="center">
																	<a href="<?php echo base_url('admin/category/edit/' . $category->id) ?>" class="btn btn-xs btn-primary">Edit</a>
																	<a href="<?php echo base_url('admin/category/delete/' . $category->id) ?>" onclick='return confirm("Anda Yakin Akan Menghapus?")' class="btn btn-xs btn-danger">hapus</a>
																</td>
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
