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
							<hr>
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