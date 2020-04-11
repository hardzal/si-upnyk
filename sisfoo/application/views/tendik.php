<!DOCTYPE html>
<html lang="en">
	<?php include 'head.php '?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap1.css')?>">
<body>
	
	<!--start: Wrapper -->
	<div id="wrapper">
		<?php include 'menu.php'; ?>
		
		<!--start: Container -->
    	<div class="container">
	
			<!-- start: Row -->
			<div class="row">
				
				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">
                   <?php foreach ($data->result() as $row) :?>
					<!-- start: Icon Box Start -->
					<div class="span6"><br>
						<table border="0px" width="100%" >
							<tr>
								<td rowspan="5" width="30%"><font face="Calibri" color="#27517b"><b>
									<img src="<?php echo base_url('assets/images/'.$row->file); ?>" width="110" height="190" class="img-responsive"></td>
                                    <td colspan="3" style="font-size:18px"><font face="Calibri" color="#27517b"><b><?php echo $row->nama; ?></font><br><font face="Calibri" size="2pt">NIP/NIK. <?php echo $row->nik; ?></font></b></td>
							</tr>
							
							
						</table>
					</div>
					<!-- end: Icon Box-->
   <?php endforeach; ?>
				</div>
                    
				<!-- end: Icon Boxes -->
				<div class="clear"></div>
                    
			</div>
			<!-- end: Row -->	
                
		<hr>
			<center><p style="color:black; font-size:15px;"><a href="#">Halaman: <?php echo $pagination; ?></p></a></center>
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
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap1.js')?>"></script>
<!-- end: Java Script -->

</body>
</html>
