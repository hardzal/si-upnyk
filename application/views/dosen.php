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
            <h1 class="mb-2 bread">Dosen</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Data Personil <i class="ion-ios-arrow-forward"></i></a></span> <span>Dosen <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<!--Main layout-->
<div class="container-fluid grey lighten-3 pt-5">
  <div class="container badan">
    <div class="row" id="topSection">
      <div class="col-md-12">
        <!-- <hr> -->
        <!-- Row table -->
        <div class="row">
          <?php foreach ($data->result() as $row) :?>
          <div class="col-md-6 mb-3">
            <div class="card my-3 bg-light" style="max-width: 540px;">
              <div class="row no-gutters d-flex align-items-stretch">
                <div class="col-md-4 col-sm-4" >
                  <img src="<?php echo base_url('assets/images/'.$row->file); ?>" class="card-img img-fluid" alt="<?php echo $row->file;?>">
                </div>
                <div class="col-md-8 col-sm-8" >
                  <div class="card-body ml-2">
                    <h3 class="card-title my-2"><?php echo $row->nama; ?></h3>
                    <p class="card-text"><strong>NIP : <?php echo $row->nip; ?></strong></p>
                    <p class="card-text">Bidang : <?php echo $row->bidang; ?></p>
                  </div>

                    <a type="button" class="btn btn-primary float-right m-4" href="#" style="position: absolute; right:0; bottom:0;">Detail</a>
                </div>
              </div>
            </div>

            <!-- <table class="tabel">
              <tbody>
                <tr>
                  <td rowspan="4" class="foto"><img src="<?php echo base_url('assets/images/'.$row->file); ?>" class="img-fluid foto-dosen"></td>
                  <td colspan="3"><strong><?php echo $row->nama; ?></strong></td>
                </tr>
                <tr>
                  <td>NIP/NIK</td>
                  <td>:</td>
                  <td><?php echo $row->nip; ?></td>
                </tr>
                <tr>
                  <td>Pendidikan</td>
                  <td>:</td>
                  <td><?php echo $row->pendidikan; ?></td>
                </tr>
                <tr>
                  <td>Bidang</td>
                  <td>:</td>
                  <td><?php echo $row->bidang; ?></td>
                </tr>
              </tbody>
            </table> -->
          </div>
             <?php endforeach; ?>
        </div>
        <!-- End Row table -->

        <hr>
        <!-- Pagination -->
        <nav aria-label="Page navigation example">
          <ul class="pagination pg-blue justify-content-center">
            <?php echo $pagination; ?>
          </ul>
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
