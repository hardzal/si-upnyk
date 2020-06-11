<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("_partial/head.php") ?>
</head>
<body>

  <!-- Start your project here-->
 <?php $this->load->view("_partial/navbar.php") ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url('assets/images/organisasi.jpg') ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Kerja Praktik</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Akademik <i class="ion-ios-arrow-forward"></i></a></span> <span>KP <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<!--Main layout-->
    <div class="container-fluid grey lighten-3">
      <div class="container badan">
        <hr>
        <div class="row" id="topSection">
          <div class="col-md-12 ftco-animate">

            <!-- <img class="w-100" src="<?php echo base_url('assets/images/struktur.png')?>"> -->
            <!-- <hr> -->
            <!-- Row kurikulum -->
            <!-- <div class="row"> -->
              
              <!-- data kurikulum -->
              <!-- <div class="col-md-6 mb-2">
                <a href="" class="text-capitalize"><i class="fas fa-download"></i> Kurikulum tahun ajaran</a>
              </div> -->
              
            <!-- </div> -->
            <!-- end Row kurikulum -->
            <!-- <hr> -->
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
