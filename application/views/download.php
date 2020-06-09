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
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Akademik <i class="ion-ios-arrow-forward"></i></a></span> <span>Minat <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<!--Main layout-->
<div class="container-fluid grey lighten-4">
  <div class="container badan">
    <div class="row" id="topSection">
      <!-- Kolom Download -->
      <div class="col-md-8">
        <h4 class=" mb-3 text-center text-uppercase ftco-animate">Bidang Minat 1</h4>
        <hr>
        <img class="img-thumbnail ftco-animate" src="<?=base_url('assets/images/minat1.jpg')?>">
        <hr>
        <div class="profil mb-3 ftco-animate">
         <h5 class="text-uppercase">Manajemen Informasi Bisnis <br> (Business Information Management)</h5>
         <small style="text-align: justify;">
           <p>Manajemen Informasi Bisnis merupakan perpanduan antara ilmu manajemen dan teknologi informasi dengan penerapannya didunia bisnis dengan mempertimbangkan faktor manusia, organisasi/perusahaan, informasi dan teknologi. Topik-topik pembahasan pada peminatan ini meliputi peningkatan performa bisnis dengan SI/TI, strategi pengembangan bisnis dengan SI/TI, pengelolaan SI/TI sampai dengan evaluasi kinerja dari SI/TI dalam mendukung bisnis ataupun organisasi.</p>
           
         </small>
        </div>
        <!-- <hr>
        Row Download
        <div class="row">
          <?php 
              foreach($file as $data){
          ?>
          data Download
          <div class="col-md-6 mb-2">
            <a href="<?php echo base_url('assets/'.$data->file)?>" class="text-capitalize"><i class="fas fa-download"></i> <?php echo $data->keterangan; ?></a>
          </div>
          <?php } ?>
        </div>
        End Row Download
        <hr> -->
      </div>
      <!-- End Kolom Download -->
      <!-- Kolom Link Terkait -->
      <div class="col-md-4">
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
