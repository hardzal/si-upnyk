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
                    <h3 class="page-header">Detail Data</h3>
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
								<h3> <?php echo $dosen->nama; ?></h3>
									 <?php echo $dosen->nip; ?>
											
									<br>
									<br>
										<img src="<?php echo base_url('assets/'.$dosen->file)?>" width="20%">
											<br>
											<br>
                                    <div class="panel panel-default">
									
										<!-- /.panel-heading -->
										<div class="panel-body">
											<b>Bidang</b>
											<br>
											 <?php echo $dosen->bidang; ?>
											<br>
											<br>
											
											<b>Pendidikan</b>
											<br>
											 <?php echo $dosen->pendidikan; ?>
											<br>
											<br>
											<b>Penelitian</b>
											<br>
											<?php echo $dosen->penelitian; ?>
											<br><br>
											<b>Pengabdian</b>
											<br>
											 <?php echo $dosen->pengabdian; ?>
											<br>
											<br>
											<b>Pelatihan</b>
											<br>
											 <?php echo $dosen->pelatihan; ?>
											<br>
											<br>
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
