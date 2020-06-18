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
            <h1 class="mb-2 bread">Tri Dharma</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Profil <i class="ion-ios-arrow-forward"></i></a></span> <span>Tri Dharma <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<!--Main layout-->
<div class="container-fluid grey lighten-3">
  <div class="container badan">


    <div class="row" id="topSection">
      <div class="col-md-8">
        <h3 class=" mb-3 text-center text-uppercase ftco-animate">Tri Dharma Perguruan Tinggi</h3>
        <hr>
        <!-- Row Berita -->
        <div class="row">
          <div class="profil ftco-animate">
              <h4>
                  1. Pendidikan dan Pengajaran
              </h4>
           <small>
             <p>Poin pertama Tri Dharma Perguruan Tinggi adalah Pendidikan dan Pengajaran. Pendidikan adalah usaha sadar dan terencana untuk mewujudkan suasana belajar dan proses pembelajaran agar peserta didik secara aktif mengembangkan potensi dirinya untuk memiliki kekuatan spiritual kegamaan, pengendalian diri, kepribadian, kecerdasan, ahlak mulia serta keterampilan yang diperlukan dirinya, masyarakat, bangsa dan Negara.</p>
           </small>
         </div>
         <div class="profil ftco-animate">
             <h4>2. Penelitian dan Pengembangan</h4>
           <small>
             <p> Research and Development, adalah hal yang harus senantiasa dilakukan oleh bangsa ini jika ingin maju dan berkembang. Melaksanakan penelitian dan pengembangan, tentunya akan berdampak kepada majunya ekoomi, pendidikan, sosial, dan sektor-sektor lainnya di masyarakat.</p>
          </small>
        </div>
        <div class="profil ftco-animate">
            <h4>
                3. Pengabdian Kepada Masyarakat
            </h4>
         <small>
           <p>
             Dari dua poin di atas, tentunya ada satu hal lagi yang digunakan untuk melengkapi, yaitu Pengabdian Kepada Masyarakat. Tanpa jiwa dan semangat pengabdian kepada masyarakat, tentu saja tidak akan ada artinya. Mahasiswa hanya menjadi cikal bakal manusia yang egois dan tidak peduli terhadap masyarakat. Tentu bukan sesuatu yang baik, dimana mahasiswa adalah harapan besar bangsa ini dan diharapkan mampu tumbuh, berkembang, dan menjadi harapan masa depan bangsa.
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
