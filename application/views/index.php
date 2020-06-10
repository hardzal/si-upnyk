<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php $this->load->view("_partial/head.php") ?>
</head>

<body>

	<!-- Start your project here-->
	<!-- load Navbar -->
	<?php $this->load->view("_partial/navbar.php") ?>
	<!-- End Navbar -->

	<div class="row1" style=" margin: -1px;" id="topSection">
		<section class="home-slider owl-carousel">
			<?php
			foreach ($slide as $key => $value) {
				// $active = ($key == 0) ? 'active' : '';
				// echo '<div class="carousel-item '.$active.'"><a><img class="d-block img-fluid" src="'.base_url('assets/images/'.$value['file']).'" alt="'.$value['file'].'"></a></div>';
			?>
				<div class="slider-item" style="background:url(<?php echo base_url('assets/images/' . $value['file']) ?>) center center; width: 100%; height: 100%;">
					<div class="overlay"></div>
					<div class="container">
						<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
							<div class="col-md-6 ftco-animate">
								<h1 class="mb-4">Selamat Datang di Prodi Sistem Informasi</h1>
								<p>Fakultas Teknik Industri <br> Universitas Pembangunan Nasional "Veteran" Yogyakarta .</p>
								<!-- <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p> -->
							</div>
						</div>
					</div>
				</div>

			<?php
			}
			?>

		</section>
	</div>
	<!--Main layout-->
	<div class="container-fluid grey lighten-4">
		<div class="container-fluid">
			<!-- <hr> -->
			<section class=" grey lighten-4 ">
				<div class="container text-center py-5">
					<div class="row justify-content-center mb-5 pb-2">
						<div class="col-md-8 text-center heading-section ftco-animate">
							<h2 class=""><span>Berita</span> Terbaru</h2>
							<hr>
							<!-- <p>Daftar berita terbaru</p> -->
						</div>
					</div>
					<div class="row">
						<?php
						$count = 0;
						foreach ($berita as $key => $value) {
							if ($count < 3) {
								$waktu = strtotime($value->tgl);
						?>
								<div class="col-md-6 col-lg-4 ftco-animate">
									<div class="blog-entry">
										<a href="<?php echo base_url('assets/images/' . $value->file) ?>" class="block-16 d-flex align-items-end">
											<img class="img-terkini w-100" src="<?php echo base_url('assets/images/' . $value->file) ?>" style="height: 250px;" alt="<?php echo $value->file ?>">
											<div class="meta-date text-center p-2" style="position: absolute;">
												<span class="day"><?= date("d", $waktu); ?></span>
												<span class="mos"><?= date("F", $waktu); ?></span>
												<span class="yr"><?= date("Y", $waktu); ?></span>
											</div>
										</a>
										<div class="text bg-white p-4">
											<h3 class="heading"><a href="<?php echo base_url('home/detailberita/' . $value->id) ?>"><?php echo $value->judul; ?></a></h3>
											<p>
												<?php
												$string = strip_tags($value->isi);
												if (strlen($string) > 50) {
													// truncate string
													$stringCut = substr($string, 0, 40);
													$endPoint = strrpos($stringCut, ' ');

													//if the string doesn't contain any space then it will cut without word basis.
													$string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
													$string .= '... ';
												}
												echo $string;
												?>
											</p>
											<div class="d-flex justify-content-end mt-4">
												<p class="mb-0"><a href="<?php echo base_url('home/detailberita/' . $value->id) ?>" class="btn btn-sm btn-outline-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
											</div>
										</div>
									</div>
								</div>
						<?php
							}
							$count++;
						}
            if ($count==0) {
              ?>    <div class=" w-100 alert alert-danger" role="alert">
                      Berita Masih Kosong..
                    </div>
            <?php
            }
						?>
					</div>
				</div>
			</section>

			<div class="row">
				<hr>

				<div class="col-md-9 ">
					<!-- <h4 class=" mb-3 text-center text-uppercase" style="font-size: 32px;">Berita Terkini</h4>
          <hr> -->
					<!-- Row Berita -->
					<!-- <div class="row">
            <?php
			$count = 0;
			foreach ($berita as $key => $value) {
				if ($count < 3) {
			?> -->
					<!-- Card -->
					<!-- <div class="col-md-4 mb-4"> -->
					<!-- Card image -->
					<!-- <img class="card-img-top img-terkini" src="<?php echo base_url('assets/images/' . $value->file) ?>" alt="<?php echo $value->file ?>"> -->

					<!-- Card content -->
					<!-- <div class="card-body grey lighten-2"> -->
					<!-- Title -->
					<!-- <h5 class="card-title text-capitalize font-weight-bold"><a href="<?php echo base_url('index.php/sisfo/detailberita/' . $value->id) ?>"><?php echo $value->judul; ?></a></h5> -->
					<!-- Text -->
					<!-- <small>
                  <p class="card-text text-uppercase"><?php echo date("d F Y", strtotime($value->tgl)); ?></p>
                </small> -->
					<!-- </div> -->
					<!-- </div> -->
					<!-- end Card -->
					<!-- <?php
						}
						$count++;
					}
							?>
          </div> -->
					<!-- Row Berita -->
					<!-- Row Galeri -->
					<div class="row">
						<div class="col-md-12 berita-lain">
							<h3 class=" mb-1 text-center  heading-section ftco-animate" style="font-size: 30px;">Galeri</h3>
							<div class="row justify-content-center pb-2">
								<div class="col-md-8 text-center heading-section ftco-animate">
									<!-- <h2 class=""><span>Galeri</span></h2> -->
								</div>
							</div>
							<hr>
							<div id="main">
								<div class="inner">
									<div class="columns">
										<?php
                     if (empty($galleries)) {
                        ?>
                            <div class="w-100 alert alert-danger" role="alert" align="center">
                              Galeri Masih Kosong..
                            </div>
                        <?php
                      }
										foreach ($galleries as $photo) {
										?>
											<div class="image fit">
												<a href="<?= base_url($photo->image) ?>"><img src="<?= base_url($photo->image) ?>" alt="" /></a>
											</div>

										<?php
										}
										?>

										<!-- Column 1 (horizontal, vertical, horizontal, vertical) -->
										<!-- <div class="image fit">
                        <a href="detail1.html"><img src="<?= base_url('assets/images/gallery/pic01.jpg') ?>" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="<?= base_url('assets/images/gallery/pic02.jpg') ?>" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="<?= base_url('assets/images/gallery/pic03.jpg') ?>" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="<?= base_url('assets/images/gallery/pic04.jpg') ?>" alt="" /></a>
                      </div> -->


										<!-- Column 2 (vertical, horizontal, vertical, horizontal) -->
										<!-- <div class="image fit">
                        <a href="detail1.html"><img src="<?= base_url('assets/images/gallery/pic06.jpg') ?>" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="<?= base_url('assets/images/gallery/pic05.jpg') ?>" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="<?= base_url('assets/images/gallery/pic08 .jpg') ?>" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="<?= base_url('assets/images/gallery/pic07.jpg') ?>" alt="" /></a>
                      </div> -->

										<!-- Column 3 (horizontal, vertical, horizontal, vertical) -->
										<!-- <div class="image fit">
                        <a href="detail1.html"><img src="<?= base_url('assets/images/gallery/pic09.jpg') ?>" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="<?= base_url('assets/images/gallery/pic12.jpg') ?>" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="<?= base_url('assets/images/gallery/pic11.jpg') ?>" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="<?= base_url('assets/images/gallery/pic10.jpg') ?>" alt="" /></a>
                      </div> -->

										<!-- Column 4 (vertical, horizontal, vertical, horizontal) -->
										<!-- <div class="image fit">
                        <a href="detail1.html"><img src="<?= base_url('assets/images/gallery/pic13.jpg') ?>" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="<?= base_url('assets/images/gallery/pic14.jpg') ?>" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="<?= base_url('assets/images/gallery/pic15.jpg') ?>" alt="" /></a>
                      </div>
                      <div class="image fit">
                        <a href="detail1.html"><img src="<?= base_url('assets/images/gallery/pic16.jpg') ?>" alt="" /></a>
                      </div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row Galei -->
				</div>
				<!-- Link Terkait -->
				<div class="col-md-3 ">
					<div>
						<div class="row justify-content-center pb-2">
							<div class="col-md-8 text-center heading-section ftco-animate">
								<h3 class=""><span>Event</span></h3>
							</div>
						</div>
						<!-- <h4 class=" mb-3 text-center text-uppercase">Event</h4> -->
						<hr>
						<!-- Load Link Terkait -->
						<?php $count = 0;
            if (empty($events)) {
              ?>
                  <div class="w-100 alert alert-danger" role="alert" align="center">
                    Event Masih Kosong..
                  </div>
              <?php
            }
						foreach ($events as $event) {
							if ($count < 3) {
								$waktu = strtotime($event->time_start);
								$waktu2 = strtotime($event->time_end);
						?>
								<div class="row mt-2 ftco-animate">
									<div class=" text-center grey lighten-1 py-3 w-25" style="border-radius: 10px 0px 0px 10px;">

										<div class="meta-date text-center p-2">
											<!-- <span class="day">23</span>
                      <span class="mos">Jul</span> -->
											<h3 style="font-size: 42px; font-weight: bold; color: black;"><?= date("d", $waktu); ?></h3>
											<h4 style="font-weight: bold; color: black; margin-top: -20px;"><?= date("F", $waktu); ?></h4>
										</div>

									</div>
									<div class=" grey lighten-2 p-3 w-75 align-content-center" style="border-radius: 0px 10px 10px 0px;">
										<a class="mb-0" href="<?php echo base_url('home/detailevent/' . $event->id) ?>">
											<p style="font-size: 18px;  color: black;"><?php echo $event->title; ?></p>
										</a>
										<p style=" margin-top: -10px;"><i class="icon icon-calendar"></i> <?= date("H:i", $waktu); ?> - <?= date("H:i", $waktu); ?></p>
										<p style=" margin-top: -18px;"><i class="icon icon-map-marker"></i> <?php echo $event->location; ?></p>
									</div>
								</div>
						<?php
							}
							$count++;
						}
						?>
					</div>
					<div class="mt-4">
						<div class="row justify-content-center pt-2">
							<div class="col-md-8 text-center heading-section ftco-animate">
								<h3 class=""><span>Link Terkait</span></h3>
							</div>
						</div>
						<!-- <h4 class=" mb-3 text-center text-uppercase">Link Terkait</h4> -->
						<hr>
						<!-- Load Link Terkait -->
						<?php $this->load->view("_partial/linkTerkait.php") ?>
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
	<!-- Load Footer -->
	<?php $this->load->view("_partial/footer.php") ?>
	<!-- End Footer -->
	<!-- End your project here-->

	<!-- Load JS -->
	<?php $this->load->view("_partial/js.php") ?>

</body>

</html>
