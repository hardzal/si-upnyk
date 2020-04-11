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
                    <h3 class="page-header">Ubah Informasi Jurusan</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form role="form" method="POST" action="<?php echo base_url('index.php/admin/updateInfo')?>" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label>Judul Informasi</label>
                                            <input class="form-control"  name="id" type="hidden" value="<?php echo $info->id; ?>">
                                            <input class="form-control" name="nama" type="text" value="<?php echo $info->nama; ?>">
                                        </div>
										
										 <div class="form-group ">
                                            <label>Tanggal</label>
                                            <input class="form-control" style="width:170px" name="tgl" type="date" value="<?php echo $info->tgl; ?>">
                                        </div>
										<div class="form-group">
                                            <label>File Photo</label>
                                            <input type="file" name="file">
                                            <input type="hidden" name="file" value="<?php echo $info->file; ?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Isi</label>
                                            <textarea id="elm1" class="form-control" rows="3" name="isi"><?php echo $info->isi; ?></textarea>
                                        </div>
										
												
										
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
