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
                    <h3 class="page-header">Slide</h3>
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
									<a href="<?php echo base_url('index.php/admin/addslide') ?>"><button type="button" class="btn btn-primary btn-sm">Tambah Slide</button></a>
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
															<th>Link</th>
															<th>Opsi</th>
														</tr>
													</thead>
													<tbody>
													<?php 
														$no=0;
														foreach($slide as$data){
															$no++;
													?>
														<tr class="odd gradeX">
															<td><?php echo $no; ?></td>
															<td><?php echo $data->file; ?></td>
															<td><?php echo $data->link; ?></td>
															<td class="center"> <a href="<?php echo base_url('index.php/admin/ubahslide/'. $data->id) ?>"><button type="button" class="btn btn-warning btn-xs">Ubah</button></a> <a href="<?php echo base_url('index.php/admin/hapusslide/'. $data->id) ?>"><button type="button" class="btn btn-danger btn-xs" onclick='return confirm("Anda Yakin Akan Menghapus?")'>Hapus</button></a> </td>
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
