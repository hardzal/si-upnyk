<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap1.css')?>">
<body>
	
	<!--start: Wrapper -->
	<div id="wrapper">
		<?php include 'menu.php';?>
		
		<!--start: Container -->
    	<div class="container">
	
			
		<div class="row">
			<div class="span8">
				<div class="title"><h3>BERITA </h3></div>
				
                <?php foreach ($data->result() as $row) :?>
				<div class="span8">
					<div class="icons-box-vert">
						<img src="<?php echo base_url('assets/images/'.$row->file)?>" width="25%">
						<div class="icons-box-vert-info">
							<h4><b style="color:#043a6f; font-family:calibri"><a href="<?php echo base_url('index.php/sisfo/detailberita/'.$row->id)?>"><?php echo $row->judul; ?></a></b></h4>
							<p align="justify" style="font-weight:normal;"><?php echo substr(strip_tags(str_replace('\\','', str_replace('\r\n'," ",$row->isi))), 0, 350)."...."; ?></p>
						</div>
						<div class="clear"></div>
					</div>
				</div>	
                  <?php endforeach; ?>
				
				<div>
			<hr>
			<center><p style="color:black; font-size:15px;"><a href="#">Halaman: <?php echo $pagination; ?></p></a></center>
				</div>
			</div>
			<div class="span4">
						
				<div class="title"><h3>LINK TERKAIT</h3></div>
                
			<a href="http://upnyk.ac.id/"><img src="<?php echo base_url('assets/img/upn.png')?>"></a><br><br>
			<a href="http://fti.upnyk.ac.id/"><img src="<?php echo base_url('assets/img/cbis.png')?>"></a> <br><br>
			<a href="http://pmb.upnyk.ac.id/"><img src="<?php echo base_url('assets/img/pmb.png')?>"></a><br><br>
			<a href="http://jurnal.upnyk.ac.id/"><img src="<?php echo base_url('assets/img/jurnal.png')?>"></a>
			<br><br>
				<div class="title"><h3>VISITOR</h3></div>
			<a href="https://www.freecounterstat.com" title="free hit counter"><img src="https://counter4.whocame.ovh/private/freecounterstat.php?c=k5datrp3l51x53l5qyddyrs98kzwz4xk" border="0" title="free hit counter" alt="free hit counter"></a>
		</div>
		</div>
		<hr>
		
			<!-- start Clients List -->	
			<div class="clients-carousel">
		
				<ul class="slides clients">
					<li><img src="<?php echo base_url('assets/img/galeri/1.jpg')?>" alt=""/></li>
					<li><img src="<?php echo base_url('assets/img/galeri/2.jpg')?>" alt=""/></li>	
					<li><img src="<?php echo base_url('assets/img/galeri/3.jpg')?>" alt=""/></li>
					<li><img src="<?php echo base_url('assets/img/galeri/4.jpg')?>" alt=""/></li>
					<li><img src="<?php echo base_url('assets/img/galeri/5.jpg')?>" alt=""/></li>
					<li><img src="<?php echo base_url('assets/img/galeri/6.jpg')?>" alt=""/></li>
					<li><img src="<?php echo base_url('assets/img/galeri/7.jpg')?>" alt=""/></li>
				</ul>
		
			</div>
			<!-- end Clients List -->
		
			<hr>
			
			<!-- start: Row -->
			
			<!-- end: Row -->
			
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
