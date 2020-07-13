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
          <h1 class="mb-2 bread">Bidang Minat</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Akademik <i class="ion-ios-arrow-forward"></i></a></span> <span>Bidang Minat <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <!--Main layout-->
  <div class="container-fluid grey lighten-4">
    <div class="container badan">
      <div class="row" id="topSection">
        <!-- Kolom Download -->
        <div class="col-md-8 col-sm-8">
          <?php
        //   $no = 1;
          foreach ($specializations as $sp) :
          ?>
            <h4 class=" mb-3 text-center text-uppercase ftco-animate"><?= $sp->title; ?></h4>
            <hr>
            <div class="row" style="margin: auto;width: 80%;">
              <img class="img-thumbnail ftco-animate" src="<?= base_url($sp->img) ?>">
            </div>
            <!--<hr>-->
            <br>
            <div class="profil mb-3 ftco-animate">
              <!--<h5 class="text-uppercase"></h5>-->
              <small style="text-align: justify;">
                <?= html_entity_decode($sp->description); ?>
              </small>
            </div>
            <div>
                <h5 style="text-decoration: underline;">Kepala Bidang Minat</h5>
                <?php echo $sp->koordinator; ?>
            </div>
            <div>
                <h5 style="text-decoration: underline;">Anggota</h5>
                <small><?php echo html_entity_decode($sp->anggota); ?></small>
            </div>
            <hr>
            <br>
          <?php endforeach; ?>
          
        </div>
        <!-- End Kolom Download -->
        <!-- Kolom Link Terkait -->
        <div class="col-md-4 col-sm-4">
          <h4 class=" mb-3 text-center text-uppercase">Link Terkait</h4>
          <hr>

          <?php $this->load->view("_partial/linkTerkait.php") ?>

        </div>
        <!-- End Kolom Link Terkait -->
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