<!DOCTYPE html>
<html lang="en">

<?php include 'head.php';?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'navbar.php';?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Sarana dan Prasarana</h3>
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
									<a href=""><button type="button" class="btn btn-primary btn-sm">Tambah dosen</button></a>
									<br>
									<br>
                                    <div class="panel panel-default">
									
										<!-- /.panel-heading -->
										<div class="panel-body">
											<div class="dataTable_wrapper">
												<table class="table table-striped table-bordered table-hover" id="dataTables-example">
													<thead>
														<tr>
															<th>Nama Sarana</th>
															<th>File</th>
															<th>Keterangan</th>
															<th>Opsi</th>
														</tr>
													</thead>
													<tbody>
														<tr class="odd gradeX">
															<td>Trident</td>
															<td>Internet Explorer 4.0</td>
															<td>Win 95+</td>
															<td class="center"><a href=""><button type="button" class="btn btn-info btn-xs">detail</button></a> <a href=""><button type="button" class="btn btn-warning btn-xs">Ubah</button></a> <a href=""><button type="button" class="btn btn-danger btn-xs">Hapus</button></a> </td>
														</tr>
														
														
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
