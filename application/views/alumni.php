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
            <h1 class="mb-2 bread">Alumni</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Mahasiswa <i class="ion-ios-arrow-forward"></i></a></span> <span>Alumni <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<!--Main layout-->
    

    <div class="container-fluid grey lighten-3">
      <div class="container badan">
        <!--<hr>-->
        <div class="row" id="topSection">
          <div class="col-md-12 ftco-animate">
            <section class=" row"  style="margin:0px -30px;">
              <hr>
              <div class="container py-5">
                <div class="row">
                  <?php
                    if(empty($alumni)){
                      ?>
    
                        <div class="w-100 alert alert-danger" role="alert" align="center">
                          Informasi Masih Kosong..
                        </div>
                    <?php
                    }
                    foreach ($alumni as $data) {
                    //   $waktu = strtotime($data->tgl);
                    ?>
                      <div class="col-md-6 col-lg-4 ftco-animate">
                        <div class="blog-entry">
                          <a href="<?php echo base_url($data->image);?>" class="block-16 d-flex align-items-end">
                            <img class="img-terkini w-100" src="<?php echo base_url($data->image);?>" style="height: 250px;" alt="<?php echo $data->image ;?>">
                          </a>
                          <div class="text bg-white p-4">
                            <h3 class="heading"><a href="<?php echo base_url('home/detail_alumni/'.$data->id)?>"><?php echo $data->title; ?></a></h3>
                            <div class="d-flex justify-content-end mt-4">
                              <p class="mb-0"><a href="<?php echo base_url('home/detail_alumni/'.$data->id)?>" class="btn btn-sm btn-outline-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
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
