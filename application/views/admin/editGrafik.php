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
					<h3 class="page-header">Edit Grafik</h3>
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
									<form role="form" method="POST" action="<?php echo base_url('admin/grafik/edit/' . $grafik->id) ?>" enctype="multipart/form-data">
										<div class="form-group">
											<label for="title">Judul Grafik</label>
											<input class="form-control" placeholder="Judul" type="text" name="title" id="title" value="<?php echo $grafik->title; ?>" required />
										</div>
										
										<div class="form-group">
											<label class="col-form-label" for="status">Status</label>
											<select name="type" class="form-control" id="type" required>
												<?php if ($grafik->type == "bar") : ?>
													<option value="bar" selected>Bar</option>
													<option value="pie">Pie</option>
													<option value="column">Column</option>
												<?php endif; ?>	
												<?php if ($grafik->type == "pie") : ?>
													<option value="bar">Bar</option>
													<option value="pie" selected>Pie</option>
													<option value="column">Column</option>
												<?php endif; ?>
												<?php if ($grafik->type == "column") : ?>
													<option value="bar">Bar</option>
													<option value="pie">Pie</option>
													<option value="column" selected>Column</option>
												<?php endif; ?>
											</select>
										</div>
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
