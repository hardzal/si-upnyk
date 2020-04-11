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
                    <h3 class="page-header">Kerja Praktek & SKripsi</h3>
                </div>
			<?php
				foreach($kpskrip as $data){
			?>
				
                <!-- /.col-lg-12 -->
            </div>
			<a href="<?php echo base_url('index.php/admin/ubahKPskripsi/'. $data->id)?>"><button type="button" class="btn btn-info btn-small">ubah Kp dan SKripsi</button></a>
            <!-- /.row -->
			<br><br>
			
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <?php echo $data->kp; ?>
									
									<br>
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <?php echo $data->skripsi; ?>
									
									
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
				<?php } ?>
		 </div>
    </div>
    <!-- /#wrapper -->

  <?php include 'foot.php'; ?>

</body>

</html>
