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
                    <h3 class="page-header">Ubah Struktur Organisasi</h3>
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
                                    <form role="form" method="POST" action="<?php echo base_url('index.php/admin/updateprofil')?>">
                                         <input type="hidden" class="form-control" rows="3" name="id" value="<?php echo $profil->id; ?>">
                                        <div class="form-group">
                                            <label>Sejarah</label>
                                           
                                            <textarea id="elm1" class="form-control" rows="3" name="sejarah" ><?php echo $profil->sejarah; ?></textarea>
                                        </div>
                                        
										<br>
                                        <div class="form-group">
                                            <label>Visi</label>
                                           
                                            <textarea id="elm1" class="form-control" rows="3" name="visi" ><?php echo $profil->visi; ?></textarea>
                                        </div>
                                        
										<br>
                                        <div class="form-group">
                                            <label>Misi</label>
                                            <textarea id="elm1" class="form-control" rows="3" name="misi"><?php echo $profil->misi; ?></textarea>
                                        </div>
										
										<br>
                                        <div class="form-group">
                                            <label>Tujuan</label>
                                            <textarea id="elm1" class="form-control" rows="3" name="tujuan"><?php echo $profil->tujuan; ?></textarea>
                                        </div>
										
										<br>
										<div class="form-group">
                                            <label>Sambutan</label>
                                            <textarea id="elm1" class="form-control" rows="3" name="sambutan"><?php echo $profil->sambutan; ?></textarea>
                                        </div>
										
										<br>
										
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
