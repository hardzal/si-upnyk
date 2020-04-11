<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("_partial/head.php") ?>
	<style type="text/css">
		td {
			padding: 5px;
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
				              Profil (Nama Dosen)
				            </h4>
							<hr>
							<div class="gambar text-center">
								<img src="<?php echo base_url('assets/images/dosen/bayu.JPG')?>" class="img-fluid mb-3 img-thumbnail" alt="gambar">
							</div>
							<hr>
							<table width="100%">
								<tr>
									<td>Nama Dosen</td>
									<td>(Konten Nama)</td>
								</tr>
								<tr>
									<td>NIP/NIK</td>
									<td>(Konten NIK)</td>
								</tr>
								<tr>
									<td>Pendidikan</td>
									<td>(Konten Pendidikan)</td>
								</tr>
								<tr>
									<td>Bidang</td>
									<td>(Konten Bidang)</td>
								</tr>
								<tr>
									<td>Penelitian</td>
									<td>(Konten Penelitian)</td>
								</tr>
								<tr>
									<td>Pengabdian</td>
									<td>(Konten Pengabdian)</td>
								</tr>
								<tr>	
									<td>Pelatihan</td>
									<td>(Konten Pelaltihan)</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>(Konten Email)</td>
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