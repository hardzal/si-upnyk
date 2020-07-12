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
	<section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url('assets/images/helloquence-5fNmWej4tAA-unsplash.jpg') ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Detail Dosen</h1>
            <p class="breadcrumbs">
            	<span class="mr-2">Data Personil <i class="ion-ios-arrow-forward"></i></span>
            	<span class="mr-2">Dosen <i class="ion-ios-arrow-forward"></i></span> 
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
				              <?=$dosen->nama;?>
				            </h4>
							<hr>
							<div class="gambar text-center">
								<img src="<?php echo base_url('assets/images/'.$dosen->file); ?>" class="img-fluid mb-3 img-thumbnail" alt="gambar" width="45%">
							</div>
							<hr>
							<!-- <p class="font-24">
								<span class="font-weight-bold">Nama Dosen :</span>
								<span class="ml-5"><?=$dosen->nama;?></span>
							</p>
							<p class="font-24">
								<span class="font-weight-bold">NIP/NIK :</span>
								<span class="ml-5"><?=$dosen->nip;?></span>
							</p> -->
							<table width="100%" border="0">
								<tr>
									<td class="font-weight-bold">Nama Dosen</td>
									<td><?=$dosen->nama;?></td>
								</tr>
								<tr>
									<td class="font-weight-bold">NIP/NIK</td>
									<td><?=$dosen->nip;?></td>
								</tr>
								<tr>
									<td class="font-weight-bold">Email</td>
									<td><?=$dosen->email;?></td>
								</tr>
								<tr>
									<td class="font-weight-bold">Pendidikan</td>
									<td><?=$dosen->pendidikan;?></td>
								</tr>
								<tr>
									<td class="font-weight-bold">Bidang</td>
									<td><?=$dosen->bidang;?></td>
								</tr>
								<tr>
									<td class="font-weight-bold">Mata Kuliah yang diajarkan</td>
									<td><?=$dosen->matkul;?></td>
								</tr>
								
								<tr>
									<td class="font-weight-bold">Penelitian</td>
								</tr>
								<tr>
									<td colspan="2"><?=$dosen->penelitian;?></td>
								</tr>
								<tr>	
									<td class="font-weight-bold">Pelatihan</td>
								</tr>
								<tr>
									<td colspan="2"><?=$dosen->pelatihan;?></td>
								</tr>
								<tr>
									<td class="font-weight-bold">Pengabdian</td>
								</tr>
								<tr>
									<td colspan="2"><?=$dosen->pengabdian;?></td>
								</tr>
								
							</table>
							
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