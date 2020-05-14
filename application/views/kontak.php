<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("_partial/head.php") ?>

</head>
<body>

  <!-- Start your project here-->
  <?php $this->load->view("_partial/navbar.php") ?>
  <section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url('assets/images/map.jpg') ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Kontak</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Detail <i class="ion-ios-arrow-forward"></i></a></span></p>
          </div>
        </div>
      </div>
    </section>


<!--Main layout-->
<div class="container-fluid grey lighten-5">
  <div class="container badan">
    <div class="row" id="topSection">
      <div class="col-md-12">
        <!-- <h4 class=" mb-3 text-center text-uppercase">Kontak</h4> -->

        <!-- <hr> -->
        <!-- Row Alamat -->
        <div class="row mb-3">
          <div class="col-md-6 text-center">
            <i class="fas fa-map-marked-alt"></i>
            <p>
              Jl. SWK 104 (Lingkar Utara), Condongcatur, Yogyakarta 55283 (Kampus Pusat)
            </p>
          </div>
          <div class="col-md-6 text-center">
            <i class="fas fa-map-marker-alt"></i>
            <p>
              Program Studi Sistem Informasi Jl. Babarsari 2 Yogyakarta 55281 (Kampus Unit II)
            </p>
          </div>
        </div>
        <!-- End Row Alamat -->
        <hr>
        <!-- Row Peta -->
        <div class="row mb-3">
          <div class="col-md-12">
          <!--Google map-->
          <div id="map-container-google-2" class="map-container-2" style="height: 500px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.2677588763341!2d110.41397172916929!3d-7.782293270896425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59f0238ff2db%3A0xf87a25a8b46e51b3!2sFakultas+Teknik+Informatika%2C+UPN!5e0!3m2!1sid!2sid!4v1465009495665" frameborder="0" allowfullscreen></iframe>
          </div>
          <!--Google Maps-->
          </div>
        </div>
        <!-- End Row Peta -->
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
