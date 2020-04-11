<!DOCTYPE html>
<html lang="en">
<head>
 <?php $this->load->view("_partial/head.php") ?>
</head>
<body>

  <!-- Start your project here-->
  <?php $this->load->view("_partial/navbar.php") ?>

<!--Main layout-->
<div class="container-fluid grey lighten-5">
  <div class="container badan">

    <div class="row" id="topSection">
      <!-- Section Berita -->
      <div class="col-md-8">
        <h4 class="mb-3 text-center text-uppercase">Berita</h4>
        <hr>
        <!-- Row Berita -->
        <div class="row">
          <?php foreach ($data->result() as $row) :?>
          <!-- Container Berita -->
          <div class="container">
            <!-- Judul Berita -->
            <h4 class="font-weight-bold">
              <a href="<?php echo base_url('index.php/sisfo/detailberita/'.$row->id)?>"> <?php echo $row->judul; ?> </a>
            </h4>
            <!-- Tanggal Berita -->
            <small>
              <p class="text-uppercase"><i class="far fa-calendar-alt"></i> | <?php echo date("d - F - Y", strtotime($row->tgl)); ?></p>
            </small>
            <hr>
            <!-- Gambar Berita -->
            <img src="<?php echo base_url('assets/images/'.$row->file)?>" class="img-fluid mb-3 foto-berita" alt="gambar">
            <!-- Isi Berita -->
            <p>
              <?php echo substr(strip_tags(str_replace('\\','', str_replace('\r\n'," ",$row->isi))), 0, 350)."...."; ?>
              <a id="readMore" href="<?php echo base_url('index.php/sisfo/detailberita/'.$row->id)?>">Read More</a>
            </p>
            <hr>
          </div>
          <!-- End Container Berita -->
          <?php endforeach; ?>
        </div>
        <!-- Row Berita -->
        <!-- Pagination -->
        <nav aria-label="Page navigation example">
          <ul class="pagination pg-blue justify-content-center">
            <?php echo $pagination; ?>
          </ul>
        </nav>
      </div>
      <!-- End Section Berita -->
      <div class="col-md-4">
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
