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
                    <h3 class="page-header">Berita</h3>
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
									<a href="<?php echo base_url ('index.php/admin/addberita') ?>"><button type="button" class="btn btn-primary btn-sm">Tambah Berita</button></a>
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
															<th width="10%">Tanggal</th>
															<th width="40%">Isi</th>
															<th>Lihat file </th>
															<th width="10%">Opsi</th>
														</tr>
													</thead>
													<tbody>
														<?php 
                                                            $no = 0;
                                                            foreach ($berita as $data) {
                                                            $no++;
                                                        ?>
                                                        <tr class="gradeC">
                                                            <td><?php echo $no ?></td>
                                                            <td><?php echo $data->judul;?></td>
                                                            <td><?php echo $data->tgl;?></td>
                                                            <td class="center"><?php echo substr(strip_tags(str_replace('\\','', str_replace('\r\n'," ",$data->isi))), 0, 350)."...."; ?> <br> <a href="<?php echo base_url('index.php/admin/beritaadmin/'.$data->id)?>"  ><p style="color:#e3722e;"><u>Lihat Selengkapnya</u></p></a></td>
                                                            <td class="center"><a href="<?php echo base_url('assets/images/'.$data->file) ?>" target="blank">Lihat File</a></td>
                                                            <td class="center">
                                                                <a href="<?php echo base_url('index.php/admin/ubahberita/'.$data->id) ?>" class="btn btn-xs btn-primary">Edit</a>
                                                                <a href="<?php echo base_url('index.php/admin/deleteberita/'.$data->id) ?>" onclick='return confirm("Anda Yakin Akan Menghapus?")' class="btn btn-xs btn-danger">hapus</a>
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
