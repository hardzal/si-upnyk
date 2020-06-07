<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("_partial/head.php") ?>
  <style type="text/css">
    .center {
      margin: auto;
      width: 50%;
      /*border: 3px solid green;*/
      padding: 10px;
    }
  </style>
  
</head>
<body >
  <div class="ftco-footer grey lighten-2 ftco-section overlay" style="background-image: url('<?=base_url('assets/images/app-background.jpg')?>'); background-size: cover; opacity: 0.9;" >
    <div class="container-fluid">
      <div class="row mb-2" >
        <div class="col-md-6 col-lg-6 text-center " >
          <h1 style="color: white;">Portal Aplikasi</h1>
          <div class="mb-5" style="font-style: italic;">
            <h5 style="color: white;">Program Studi Sistem Informasi</h5>
            <h6>Jurusan Teknik Informatika</h6>
             UPN "Veteran" Yogyakarta
          </div>

          <div class="row w-100" >
            <!-- <div class="col-md-4 text-center align-self-end">
              <br>
              <div class="row justify-content-center">
                <img src="<?php echo base_url('assets/assets2/img/logo_sisfo.ico'); ?>">              
              </div>
              <a href="http://si.upnyk.ac.id/siapps/index.php" class="ftco-heading-2"><em>Student Page</em></a>
            </div> -->s
            <div class="center col-md-4 text-center align-self-center">
              <br>
              <div class="row justify-content-center">
                <img src="<?php echo base_url('assets/assets2/img/logo_sisfo.ico'); ?>">              
              </div>
              <a href="http://si.upnyk.ac.id/siapps/index.php" class="ftco-heading-2"><em>Student Page</em></a>
            </div>
             <!-- <div class="col-md-4 text-center align-self-end">
              <br>
              <div class="row justify-content-center">
                <img src="<?php echo base_url('assets/assets2/img/logo_sisfo.ico'); ?>">              
              </div>
              <a href="http://si.upnyk.ac.id/siapps/index.php" class="ftco-heading-2"><em>Student Page</em></a>
            </div> -->
          </div>
          
        </div>
        <div class="col-md-6 col-lg-6 text-center mt-5" >
          <a style=" width: 100%;" href=""><img width="60%" src="<?php echo base_url('assets/assets2/img/logo-sisfo.png'); ?>"></a>
        </div>
      </div>
      </div>
    </div>
  </div>
  <?php $this->load->view("_partial/footer.php") ?>
</body>
</html>