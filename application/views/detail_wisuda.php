<!DOCTYPE html>
<html lang="en">
<head>
 <?php $this->load->view("_partial/head.php") ?>
</head>
<body>

  <!-- Start your project here-->
  <?php $this->load->view("_partial/navbar.php") ?>
  <section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url('assets/images/lulus.jpg') ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Detail Wisuda</h1>
            <p class="breadcrumbs">
              <span class="mr-2">Wisuda <i class="ion-ios-arrow-forward"></i></span>
              <span class="mr-2">Detail <i class="ion-ios-arrow-forward"></i></span>
            </p>
          </div>
        </div>
      </div>
    </section>

<!--Main layout-->
<div class="container-fluid grey lighten-5">
  <div class="container badan">

    <div class="row" id="topSection">
      <!-- Section Berita -->
      <div class="col-md-8">
        <hr>
        <!-- Row Berita -->
        <div class="row">
          <!-- Container Berita -->
          <div class="container">
            <!-- Judul Berita -->
            <h4 class="font-weight-bold">
              <?php echo $wisuda->title; ?>
            </h4>
            <!-- Tanggal Berita -->
            <small>
              <p class="text-uppercase"><i class="far fa-calendar-alt"></i> | <?php echo date("d - F - Y", strtotime($wisuda->created_at)); ?></p>
            </small>
            <hr>
            <!-- Gambar Berita -->
            <!--<img src="<?php echo base_url($wisuda->image)?>" class="img-fluid mb-3 foto-berita" alt="gambar">-->
            <!-- Isi Berita -->
            <p>
              <?php echo html_entity_decode($wisuda->description); ?>
            </p>
            <a class="btn btn-sm  btn-outline-primary waves-effect waves-light" href="<?=base_url($wisuda->file);?>"><?php print_r(explode("/",$wisuda->file)[4]); ?></a>
            <hr>
          </div>
          <!-- End Container Berita -->

        </div>
        <!-- Row Berita -->
        
      </div>
      <!-- End Section Berita -->
      <div class="col-md-4">
        <h4 class=" mb-3 text-center text-uppercase">Link terkait</h4>
        <hr>

        <?php $this->load->view("_partial/linkTerkait.php") ?>
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
