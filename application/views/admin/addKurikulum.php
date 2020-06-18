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
                                    <form role="form" method="POST" action="<?php echo base_url('index.php/admin/insertKurikulum')?>">
                                        
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input class="form-control" placeholder="Kode MKA" type="text" name="kode">
                                        </div>
										
										 <div class="form-group">
                                            <label>Nama MKA</label>
                                            <input class="form-control" placeholder="Nama MKA" type="text" name="nama">
                                        </div>
										<div class="form-group">
                                            <label>Jumlah SKS</label>
                                            <select class="form-control" name="sks">
                                                <option value="#">-Jumlah SKS-</option>
                                                <option value="1">1 SKS</option>
                                                <option value="2">2 SKS</option>
                                                <option value="3">3 SKS</option>
                                                
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Semester</label>
                                            <select class="form-control" name="semester">
                                                <option value="#">-Pilih Semester-</option>
                                                <option value="Semester 1">Semester 1</option>
                                                <option value="Semester 2">Semester 2</option>
                                                <option value="Semester 3">Semester 3</option>
                                                <option value="Semester 4">Semester 4</option>
                                                <option value="Semester 5">Semester 5</option>
                                                <option value="Semester 6">Semester 6</option>
                                                <option value="Semester 7">Semester 7</option>
                                                <option value="Semester 8">Semester 8</option>
                                                <option value="Semester 8">Semester 8</option>
                                                <option value="Pilihan Wajib">Pilihan Wajib</option>
                                                <option value="Pilihan Bidang Kajian Multimedia">Pilihan Bidang Kajian Multimedia</option>
                                                <option value="Pilihan Bidang Kajian Sistem Cerdas">Pilihan Bidang KajianSistem Cerdas</option>
                                                <option value="Pilihan Bidang Kajian Jaringan Komputer">Pilihan Bidang Kajian Jaringan Komputer</option>
                                                <option value="Pilihan Bidang Kajian Sistem Informasi">Pilihan Bidang Kajian Sistem Informasi</option>
                                                
                                            </select>
                                        </div>
										
										<div class="form-group">
                                            <label>Status MKA</label>
                                            <select class="form-control" name="status">
                                                <option value="#">-Pilih Status-</option>
                                                <option value="Wajib">Wajib</option>
                                                <option value="Pilihan">Pilihan</option>              
                                            </select>
                                        </div>
										
										<div class="form-group">
                                            <label>Syarat</label>
                                            <textarea id="elm1" class="form-control" rows="3" name="syarat"></textarea>
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
