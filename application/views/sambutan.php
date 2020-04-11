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
            <h1 class="mb-2 bread">Sambutan Koordinator</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Profil <i class="ion-ios-arrow-forward"></i></a></span> <span>Sambutan <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<!--Main layout-->
<div class="container-fluid grey lighten-3">
  <div class="container badan">


    <div class="row" id="topSection">
      <div class="col-md-8">
        <h3 class=" mb-3 text-center text-uppercase ftco-animate">Sambutan</h3>
        <hr>
        <!-- Row Berita -->
        <div class="row">
         <div class="profil mb-3 ftco-animate">
           <h4 class="text-uppercase ">Koordinator Program Studi <br> Sistem Informasi</h4>
           <small>
             <p>Menjadi Program Studi Sistem Informasi yang profesional dan berintegritas berlandaskan jiwa bela negara dengan keunggulan di bidang Sistem Informasi Kebumian di Tingkat Nasional pada tahun 2027</p>
           </small>
         </div>
         <div class="profil">
           <h4 class="text-uppercase">Misi</h4>
           <small>
             <p> 1. Menyelenggarakan pendidikan tinggi untuk menghasilkan sarjana sistem informasi di bidang kebumian dengan berpedoman pada standar mutu pendidikan nasional dan trend perkembangan TIK di tingkat internasional
              <br>
              2. Berperan aktif dalam penelitian dan pemanfaatan sistem informasi/teknologi informasi yang bertujuan meningkatkan kesejahteraan masyarakat dan daya saing bangsa
              <br>
            3. Menyelenggarakan penabdian kepada masyarakat dengan memanfaatkan dan menerapkan hasil penelitian di bidang sistem informasi dan telekomunikasi</p>
          </small>
        </div>
        <div class="profil">
         <h4 class="text-uppercase">Tujuan</h4>
         <small>
           <p>
             1. Menghasilkan lulusan sistem informasi yang bermoral, profesional, berintegritas dan memiliki jiwa bela negara serta memiliki kompetensi di bidang sistem informasi
             <br>
             2. Menghasilkan penelitian yang berorientasi pada pengembangan Sistem Informasi
             <br>
             3. Mengembangkan kegiatan pengabdian pada masyarakat yang dapat membantu penanganan masalah dan meningkatkan kualitas hidup
             <br>
             4. Menjalin kerjasama dengan lembaga pemerintah maupun swasta dalam rangka meningkatkan mutu pendidikan sistem informasi
           </p>
         </small>
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
