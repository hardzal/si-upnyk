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
                    <h3 class="page-header">Tambah Kurikulum</h3>
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
                                    <form role="form" method="POST" action="<?php echo base_url('index.php/admin/updateKpSkripsi')?>">
                                        
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Tahun" type="hidden" name="id" value="<?php echo $kpskrip->id;?>">
                                        </div>
																				
										<div class="form-group">
                                            <label>KP</label>
                                            <textarea id="elm1" class="form-control" rows="3" name="kp"><?php echo $kpskrip->kp;?></textarea>
                                        </div>
										
										<div class="form-group">
                                            <label>Skripsi</label>
                                            <textarea id="elm1" class="form-control" rows="3" name="skripsi"><?php echo $kpskrip->skripsi;?></textarea>
                                        </div>
										<br>
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
