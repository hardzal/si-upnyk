<!DOCTYPE html>
<html lang="en">
	<?php include 'head.php'?>
<body>
	
	<!--start: Wrapper -->
	<div id="wrapper">
			<?php include 'menu.php' ?>
				
		<!--start: Container -->
    	<div class="container">
	
			<!-- start: Flexslider -->
		
		<div class="row">
			<div class="span8">
				<div class="title"><h3>VISI & MISI</h3></div>
				<?php
					foreach($profil as $data){
				?>
				<div class="span8">
					<div class="icons-box-vert">
						<h3><u><b>VISI</b></u></h3>
							<p><font color="black"><?php echo $data->visi; ?></p>
						
						<div class="clear"></div>
					</div>
				</div>
                <div class="span8">
					<div class="icons-box-vert">
						<h3><u><b>MISI</b></u></h3><br><br>
							<p><font color="black"><?php echo $data->misi; ?></p>
						
						<div class="clear"></div>
					</div>
				</div>
				
				<?php } ?>
				
			</div>
			<div class="span4">
				<div class="title"><h3>LINK TERKAIT</h3></div>
                
			<a href="http://upnyk.ac.id/"><img src="<?php echo base_url('assets/img/upn.png')?>"></a><br><br>
			<a href="http://fti.upnyk.ac.id/"><img src="<?php echo base_url('assets/img/cbis.png')?>"></a> <br><br>
			<a href="http://pmb.upnyk.ac.id/"><img src="<?php echo base_url('assets/img/pmb.png')?>"></a><br><br>
			<a href="http://jurnal.upnyk.ac.id/"><img src="<?php echo base_url('assets/img/jurnal.png')?>"></a>
			<br><br>
				
			</div>
		</div>
		<hr>
			
		</div>
		<!--end: Container-->
				
		<!--start: Container -->
    	<div class="container">		

      		<!-- start: Footer Menu -->
			<div id="footer-menu" class="hidden-tablet hidden-phone">

				<!-- start: Container -->
				<div class="container">
				
					<!-- start: Row -->
					<div class="row">

						<!-- start: Footer Menu Logo -->
						<div class="span1">
							
						</div>
						<!-- end: Footer Menu Logo -->

						<!-- start: Footer Menu Links-->
						<div class="span10">
						
							
						
						</div>
						<!-- end: Footer Menu Links-->

						<!-- start: Footer Menu Back To Top -->
						<div class="span1">
							
							<div id="footer-menu-back-to-top">
								<a href="#"></a>
							</div>
					
						</div>
						<!-- end: Footer Menu Back To Top -->
				
					</div>
					<!-- end: Row -->
				
				</div>
				<!-- end: Container  -->	

			</div>	
			<!-- end: Footer Menu -->

			<!-- start: Footer -->
		
			<!-- end: Footer -->
	
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Wrapper  -->


	<!-- start: Copyright -->
	<div id="copyright">
	
		<!-- start: Container -->
		<div class="container">
		
				<p>
					&copy; 2013, creativeLabs. <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> Designed by BootstrapMaster in Poland <img src="img/poland.png" alt="Poland" style="margin-top:-4px">
				</p>
	
		</div>
		<!-- end: Container  -->
		
	</div>	
	<!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('assets/js/jquery-1.8.2.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/js/flexslider.js')?>"></script>
<script src="<?php echo base_url('assets/js/carousel.js')?>"></script>
<script def src="<?php echo base_url('assets/js/custom.js')?>"></script>
<!-- end: Java Script -->

</body>
</html>
