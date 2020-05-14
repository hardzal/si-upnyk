<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("_partial/head.php") ?>
</head>
<body>

  <!-- Start your project here-->
  <?php $this->load->view("_partial/navbar.php") ?>
  <section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url('assets/images/informasi.jpg') ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Download Kalender Akademik</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Akademik <i class="ion-ios-arrow-forward"></i></a></span> <span>Kalender <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<!--Main layout-->
<div class="container-fluid grey lighten-5">
  <div class="container badan">
    <div class="row" id="topSection">
      <div class="col-md-12">
        <!-- <h4 class=" mb-3 text-center text-uppercase">Download Kalender Akademik</h4> -->

        <hr>
        <!-- Row Kalender -->
        <div class="row">
          <?php 
              foreach($akademik as $data){
          ?>
          <!-- data Kalender -->
          <div class="col-md-6 mb-2">
            <a href="<?php echo base_url('assets/'.$data->file)?>" class="text-capitalize"><i class="fas fa-download"></i> Kalender Akademik tahun ajaran <?php echo $data->tahun; ?></a>
          </div>
          <?php } ?>
        </div>
        <!-- end Row Kalender -->
        <hr>
      </div>
    </div>
  </div>
</div>
<!--Back to Top-->
<button onclick="topFunction()" id="backToTop" title="Go to top">
  <i class="fa fa-arrow-up"></i>
</button> 
</div>
<!--End Main layout-->


<!-- Footer -->

<?php $this->load->view("_partial/footer.php") ?>
<!-- End Footer -->
<!-- End your project here-->

<!-- jQuery -->
<?php $this->load->view("_partial/js.php") ?>

</body>
</html>
