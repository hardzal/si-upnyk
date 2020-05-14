<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("_partial/head.php") ?>
	<style type="text/css">
		td {
			padding: 5px;
			font-size: 24px;
		}
	</style>
</head>
<body>
	<?php $this->load->view("_partial/navbar.php") ?>

	<section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url('assets/images/event.jpg') ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Detail Event</h1>
            <p class="breadcrumbs">
            	<span class="mr-2">Berita <i class="ion-ios-arrow-forward"></i></span>
            	<span class="mr-2">Event <i class="ion-ios-arrow-forward"></i></span> 
            	<span >Detail <i class="ion-ios-arrow-forward"></i></span>
            </p>
          </div>
        </div>
      </div>
    </section>
<!-- Main Layout -->
	<div class="container-fluid grey lighten-5">
		<div class="container badan">
			<div class="row" id="topSection">
				<!-- Section Detail Dosen -->
				<div class="col-md-8">
					<hr>
					<!-- Row Detail Dosen -->
					<div class="row">
						<!-- Container Detail Dosen -->
						<div class="container">
							<h4 class="font-weight-bold" style="font-size: 30px">
				              <?=$event->title;?>
				            </h4>
				            <table width="100%">
				            	<tr>
				            		<td style="border: solid 2px #26428B ;background-color: #26428B; color: white;" width="25%">
				            			<?php
				            	if (date('d:w',strtotime($event->time_start)) == date('d:w',strtotime($event->time_end))) {
				            		echo date('D, d F Y', strtotime($event->time_start));
				            	} else {
				            		echo date('D, d F Y', strtotime($event->time_start)) . " s/d " . date('D, d F Y', strtotime($event->time_end));
				            	} ?>
				            		</td>
				            	</tr>
				            	<tr>
				            		<td style="border: solid 2px #26428B; color: #26428B;" width="25%">
				            			<?php echo date('H:i a', strtotime($event->time_start));?>
				            		</td>
				            		<td style="border-bottom: solid 2px #26428B;" width="75%">
				            			
				            		</td>
				            	</tr>
				            </table>
				            <br>
							<div class="gambar text-center">
								<?php if(strlen($event->cover) > 2) : ?>
								<img src="<?php echo base_url($event->cover); ?>" class="img-fluid mb-3 img-thumbnail" alt="gambar">
								<?php endif;?>
							</div>							
							<!-- <p class="font-24">
								<span class="font-weight-bold">Nama Dosen :</span>
								<span class="ml-5"><?=$dosen->nama;?></span>
							</p>
							<p class="font-24">
								<span class="font-weight-bold">NIP/NIK :</span>
								<span class="ml-5"><?=$dosen->nip;?></span>
							</p> -->
							<?php echo html_entity_decode($event->description);?>
							
						</div>
					</div>

				</div>
				<div class="col-md-4">
					
					<hr>
			        <h4 class=" mb-3 text-center text-uppercase">Link terkait</h4>
			        <hr>

			    	<?php $this->load->view("_partial/linkTerkait.php") ?>
			    </div>
			</div>
		</div>
	</div>


	<!-- Footer -->

	<?php $this->load->view("_partial/footer.php") ?>
	<!-- End Footer -->
	<!-- End your project here-->
	<?php $this->load->view("_partial/js.php") ?>

</body>
</html>