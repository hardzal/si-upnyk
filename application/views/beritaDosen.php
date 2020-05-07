<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("_partial/head.php") ?>
</head>
<body>

  <!-- Start your project here-->
 <?php $this->load->view("_partial/navbar.php") ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url('assets/images/berita.jpg') ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Berita Dosen</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Berita <i class="ion-ios-arrow-forward"></i></a></span> <span>Dosen <i class="ion-ios-arrow-forward"></i></span></p>
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
            <section class=" row"  style="margin:0px -30px;">
          <hr>
          <div class="container py-5">
            <!-- <div class="row justify-content-center mb-5 pb-2">
              <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class=""><span>Berita</span> Terbaru</h2>
                <hr> -->
                <!-- <p>Daftar berita terbaru</p> -->
              <!-- </div>
            </div> -->
            <div class="row">
              <?php
                foreach ($berita as $data) {
                  $waktu = strtotime($data->tgl);
                ?>
                  <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                      <a href="blog-single.html" class="block-16 d-flex align-items-end">
                        <img class="img-terkini w-100" src="<?php echo base_url('assets/images/'.$data->file)?>" style="height: 250px;" alt="<?php echo $data->file ?>">
                        <div class="meta-date text-center p-2" style="position: absolute;">
                          <span class="day"><?= date("d", $waktu); ?></span>
                          <span class="mos"><?= date("F", $waktu); ?></span>
                          <span class="yr"><?= date("Y", $waktu); ?></span>
                        </div>
                      </a>
                      <div class="text bg-white p-4">
                        <h3 class="heading"><a href="<?php echo base_url('index.php/sisfo/detailberita/'.$data->id)?>"><?php echo $data->judul; ?></a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex justify-content-end mt-4">
                          <p class="mb-0"><a href="#" class="btn btn-sm btn-outline-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php

                  // $count++;
                }
                ?>
                </div>
          </div>
        </section>
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
