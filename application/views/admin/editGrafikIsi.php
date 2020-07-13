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
					<h3 class="page-header">Edit Variabel Grafik</h3>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<form role="form" method="POST" action="<?php echo base_url('admin/grafik/isi/edit/'. $grafik->id_grafik . "/" . $grafik->id) ?>" enctype="multipart/form-data">
										<div class="form-group">
											<label for="variable">Nama Variabel</label>
											<input class="form-control" placeholder="Variabel" type="text" name="variable" id="variable" value="<?php echo $grafik->variable_name; ?>" required />
										</div>
										<div class="form-group">
											<label for="variable">Jumlah</label>
											<input class="form-control" placeholder="Value" type="text" name="value" id="value" value="<?php echo $grafik->value; ?>" required />
										</div>
										
										<!--<div class="form-group">-->
										<!--	<label class="col-form-label" for="status">Status</label>-->
										<!--	<select name="type" class="form-control" id="type" required>-->
										<!--		<?php if ($grafik->type == "bar") : ?>-->
										<!--			<option value="bar" selected>Bar</option>-->
										<!--			<option value="pie">Pie</option>-->
										<!--		<?php else : ?>-->
										<!--			<option value="bar">Bar</option>-->
										<!--			<option value="pie" selected>Pie</option>-->
										<!--		<?php endif; ?>-->
										<!--	</select>-->
										<!--</div>-->
										<div class="mt-3">
											<button type="submit" class="btn btn-primary">Submit Button</button>
											<button type="reset" class="btn btn-danger">Reset Button</button>
										</div>
									</form>
								</div>
								<!-- /.col-lg-6 (nested) -->

							</div>
							<!-- /.row (nested) -->
						</div>
						<!-- /.panel-body -->
					</div>
					<!-- /.panel -->
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<?php include 'foot.php'; ?>

</body>

</html>
