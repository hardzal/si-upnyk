<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("_partial/head.php") ?>

</head>
<body>

  <!-- Start your project here-->
  <?php $this->load->view("_partial/navbar.php") ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url('assets/images/wp2244206-history-wallpapers.jpg') ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Visi & Misi</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Profil <i class="ion-ios-arrow-forward"></i></a></span> <span>Visi & Misi <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<!--Main layout-->
<div class="container-fluid grey lighten-3">
  <div class="container badan">


    <div class="row" id="topSection">
      <div class="col-md-8">
         <!--<h3 class=" mb-3 text-center text-uppercase heading-section ftco-animate">Visi & Misi</h3> -->
        <hr>
        <!-- Row Berita -->
        <div class="row">
          <div class="profil mb-3 ftco-animate">
           <h4 class="text-uppercase">Visi</h4>
           <div align="justify">
           <small>
           <?php
            echo $profil->visi;
           ?>
           </small>
           </div>
          </div>
         <div class="profil ftco-animate">
            <h4 class="text-uppercase">Misi</h4>
            <div align="justify">
            <small>
            <?php
                echo $profil->misi;
            ?>
            </small>
            </div>
          </div>
        <div class="profil ftco-animate">
          <h4 class="text-uppercase">Tujuan</h4>
          <div align="justify">
          <small>
          <?php
                echo $profil->tujuan;
            ?>
            </small>
            </div>
        </div>
        <hr>
      </div>
      <!-- Row Berita -->
    </div>
    <div class="col-md-4 ftco-animate">
      <h4 class=" mb-3 text-center text-uppercase">Link Terkait</h4>
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
