<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>

	<div id="wrapper">

		<!-- Navigation -->
		<?php include 'navbar.php'; ?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Profil</h3>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<?php
			foreach ($struk as $data) {
			?>
				<h3>Sejarah</h3>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">

							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<?php echo $data->sejarah; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<h3>Visi</h3>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">

							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<?php echo $data->visi; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<h3>Misi</h3>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">

							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<?php echo $data->misi; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<h3>Tujuan</h3>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">

							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<?php echo $data->tujuan; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<h3>Sambutan</h3>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">

							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<?php echo $data->sambutan; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.row -->


				<a href="<?php echo base_url('admin/profile/edit/' . $data->id) ?>"><button type="button" class="btn btn-primary btn-sm">Ubah Profil</button></a>
				<br>
				<br><?php } ?>
		</div>
	</div>
	<!-- /#wrapper -->

	<?php include 'foot.php'; ?>

</body>

</html>
