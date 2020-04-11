<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("_partial/head.php") ?>
</head>
<body>

  <!-- Start your project here-->
  <?php $this->load->view("_partial/navbar.php") ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url('assets/images/helloquence-5fNmWej4tAA-unsplash.jpg') ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Tenaga Pendidik</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Data Personil <i class="ion-ios-arrow-forward"></i></a></span> <span>Tenaga Pendidik <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<!--Main layout-->
<section class="ftco-section grey lighten-2 pb-2 pt-1">
      <div class="container-fluid px-4 pt-4">
        <hr class="pb-4">

        <div class="row">

          <?php foreach ($data->result() as $row) :?>

          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(<?php echo base_url('assets/images/'.$row->file); ?>);"></div>
              </div>
              <div class="text pt-3 text-center">
                <h3><?php echo $row->nama; ?></h3>
                <span class="position mb-2" style="color: #26428B;"><?php echo $row->nik; ?></span>
                <div class="faded">
                  <p><?php echo $row->pelatihan; ?></p>
                  <!-- <ul class="ftco-social text-center" >
                      <li class="ftco-animate"><a href="#"><span class="icon-twitter" style="color: #26428B;"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-facebook" style="color: #26428B;"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-google-plus" style="color: #26428B;"></span></a></li>
                      <li class="ftco-animate"><a href="#"><span class="icon-instagram" style="color: #26428B;"></span></a></li>
                  </ul> -->
                </div>
              </div>
            </div>
          </div>

             <?php endforeach; ?>

        </div>
      </div>
      <hr>
    </section>

        <!-- <hr> -->
        <!-- Pagination -->
        <nav aria-label="Page navigation" class="example grey lighten-2 py-2">
          <div class="pagination pg-blue justify-content-center">
            <?php echo $pagination; ?>
          </div>
        </nav>
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
