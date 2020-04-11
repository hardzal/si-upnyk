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
                    <h3 class="page-header">Ubah File</h3>
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
                                    <form role="form" method="POST" action="<?php echo base_url('index.php/admin/updatefile')?>" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label>File Upload</label>
                                            <input class="form-control"  type="hidden" name="id" value="<?php echo $download->id; ?>">
                                            <input class="form-control"  type="file" name="file" >
                                            <input class="form-control"  type="hidden" name="file" value="<?php echo $download->file; ?>">
                                        </div>
										
									
										
										<div class="form-group">
                                            <label>Keterangan</label>
                                            <input class="form-control" placeholder="Kode MKA" type="text" name="keterangan" value="<?php echo $download->keterangan; ?>">
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
