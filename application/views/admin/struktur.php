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
                    <h3 class="page-header">Struktur Organisasi</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       <?php 
							foreach($struktur as $data){
						?>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                   <img src="<?php echo base_url('assets/'.$data->file)?>" width="50%">
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
							
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        <a href="<?php echo base_url('index.php/admin/ubahStruktur/'.$data->id)?>"><button type="button" class="btn btn-primary btn-sm">Ubah Profil</button></a>
		<br><?php } ?>
		</div>
    </div>
    <!-- /#wrapper -->

  <?php include 'foot.php'; ?>

</body>

</html>
