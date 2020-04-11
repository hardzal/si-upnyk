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
                    <h3 class="page-header">Ubah Dosen</h3>
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
                                    <form role="form" method="POST" action="<?php echo base_url('index.php/admin/updateDosen')?>" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label>NIP/NIK</label>
                                            <input class="form-control" placeholder="NIP/NIK" name="id" type="hidden" value="<?php echo $dosen->id; ?>">
                                            <input class="form-control" name="nip" type="text" value="<?php echo $dosen->nip; ?>">
                                        </div>
										
										 <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" placeholder="Nama Lengkap" name="nama" type="text" value="<?php echo $dosen->nama; ?>">
                                        </div>
										<div class="form-group">
                                            <label>File Photo</label>
                                            <input type="file" name="file">
                                            <input type="hidden" name="file" value="<?php echo $dosen->bidang; ?>">
                                        </div>
										<div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Email" name="email" type="email" value="<?php echo $dosen->email; ?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Bidang</label>
                                            <input class="form-control" placeholder="Bidang" name="bidang" type="text" value="<?php echo $dosen->bidang; ?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Pendidikan</label>
                                            <textarea id="elm1" class="form-control" rows="3" name="pendidikan"><?php echo $dosen->pendidikan; ?></textarea>
                                        </div>
										
										<div class="form-group">
                                            <label>Penelitian</label>
                                            <textarea id="elm1" class="form-control" rows="3" name="penelitian"><?php echo $dosen->penelitian; ?></textarea>
                                        </div>
										
										<div class="form-group">
                                            <label>Pengabdian</label>
                                            <textarea id="elm1" class="form-control" rows="3" name="pengabdian"><?php echo $dosen->pengabdian; ?></textarea>
                                        </div>
										
										<div class="form-group">
                                            <label>Pelatihan</label>
                                            <textarea id="elm1" class="form-control" rows="3" name="pelatihan"><?php echo $dosen->pelatihan; ?></textarea>
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
