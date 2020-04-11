
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Teknik Informatika</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Science Study Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php echo base_url('assets/css/bootstrap.css')?>" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo base_url('assets/css/style.css')?>" type="text/css" rel="stylesheet" media="all">   
<link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/flexslider.css')?>" type="text/css" media="screen" /> 
<!-- //Custom Theme files --> 
<!-- js -->
<script src="<?php echo base_url('assets/js/jquery-2.2.3.min.js')?>"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Oranienbaum" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Aguafina+Script" rel="stylesheet">
<!-- //web-fonts -->

<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/slider/engine1/style.css') ?>" />
<script type="text/javascript" src="<?php echo base_url('assets/slider/engine1/jquery.js')?>"></script>
<!-- End WOWSlider.com HEAD section -->
</head>
<body> 
	<!-- header -->
	<div class="header-w3layoutstop">
		<div class="container" style="padding-left:5px;margin-left:15px;">  
			<div class="hdr-w3left navbar-left" >
				<p><img src="<?php echo base_url('assets/images/asd.png')?>" class="responsive"></p> 
			</div>
						
		</div>
	</div>
	
	<?php include 'nav.php' ?>
	
	<!-- //header -->
	
	<!-- about-slid -->
	<div class="about-w3slid jarallax">
		<div class="subscribe-agileinfo"> 
			<div class="container">  
				
			<img src="<?php echo base_url('assets/images/IFWEB.PNG') ?>" height="80px" class="responsive">
			
			</div>
		</div>
	</div>
	<!-- //about-slid --> 
	<!-- welcome -->
	<div class="welcome"> 
		<div class="container">
		<div class=col-md-12>
			<div class="welcome-agileinfo">
				<div class=col-md-8>
					<h4><CENTER><b>STRUKTUR ORGANISASI</b></CENTER></h4>
					<hr color="black">
				</div>
				<div class=col-md-4>
				<h4><CENTER><b>INFORMASI JURUSAN</b></CENTER></h4>
				<hr color="black"></div>
			<?php
					foreach($struktur as $data){
				?>		
			<div class=col-md-8>
				<div class="agile-welcome-right">
					<h4><b style="color:#043a6f; font-family:calibri"></b></h4>
					
				<center><img src="<?php echo base_url('assets/'.$data->file) ?> " class="responsive"></center>
					<br><br>
				</div>
				<div class="clearfix"> </div> 
			</div>
			<?php } ?> 

			<div class=col-md-4>
			<div class="agile-welcome-right">
					
						<?php
					foreach($info as $data){
				?><ul><font size=2px>
					<li><b><a href="<?php echo base_url('index.php/ppsm/detailinfo/'.$data->id)?>"><?php echo $data->nama; ?></a></b></li>
					
					</font>
					</ul>
					<?php } ?>
					</div>

					<p></p><h4><center><b>LINK TERKAIT<b></center></h4>
				<hr>
					<div class="agile-welcome-right">
					<ul><font size=2px>
					<li style='list-style-type:none'><a href="http://www.upnyk.ac.id"><img src="<?php echo base_url('assets/images/upn.png')?>"></a></li>
					<li style='list-style-type:none'><a href="http://pmb.upnyk.ac.id/"><img src="<?php echo base_url('assets/images/PMB.png')?>"></a></li>
					<li style='list-style-type:none'><a href="http://jurnal.upnyk.ac.id/"><img src="<?php echo base_url('assets/images/jurnal.png')?>"></a></li>
					<li style='list-style-type:none'><a href="http://fti.upnyk.ac.id/"><img src="<?php echo base_url('assets/images/CBIS.png')?>"></a></li>
					<li style='list-style-type:none'><a href="http://www.himatif.or.id"><img src="<?php echo base_url('assets/images/HIMATIF.png')?>"></a></li>
					</font>
					</ul>
			</div>


					
			</div>
		</div>
	</div> 		
	</div>
	<!-- //welcome -->
	
	

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-6 col-sm-6 agileinfo_footer_grid">
				<h4><b>KERJASAMA</b></h4>
				<hr color="black">
				<div class="col-md-12">
				<div class="col-md-3">
					<img src="<?php echo base_url('assets/images/multimatics.PNG')?>" class="responsive">
				</div>
				<div class="col-md-3">
					<img src="<?php echo base_url('assets/images/inixindo.PNG')?>" class="responsive">
				</div>
				<div class="col-md-3">
					<img src="<?php echo base_url('assets/images/oracle.PNG')?>" class="responsive">
				</div>
				<div class="col-md-3">
					<img src="<?php echo base_url('assets/images/malay.PNG')?>" class="responsive">
				</div>
				<div class="col-md-3">
					<img src="<?php echo base_url('assets/images/pertamina.PNG')?>" class="responsive">
				</div>
				<div class="col-md-3">
					<img src="<?php echo base_url('assets/images/ec-council.PNG')?>" class="responsive">
				</div>
				<div class="col-md-3">
					<img src="<?php echo base_url('assets/images/bnsp.PNG')?>" class="responsive">
				</div>
				<div class="col-md-3">
					<img src="<?php echo base_url('assets/images/bukitasam.PNG')?>" class="responsive">
				</div>
				</div>
			</div>
			
			<div class="col-md-6 col-sm-6 agileinfo_footer_grid">
				<h4><b>ADDRESS</b></h4>
				<hr color="black">
				<ul>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span><font size="1.5px"> Jl. SWK 104 (Lingkar Utara), Condongcatur, Yogyakarta 55283 (Kampus Pusat)</font></li>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span><font size="1.5px">  Jl. Babarsari 2 Yogyakarta 55281 (Kampus Unit II)</font></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><font size="1.5px">  +62 274 485786 </font></li>
				</ul>
			</div> 
			<div class="clearfix"> </div>
			<div class="w3agile_footer_copy">
				<p>© Teknik Informatika UPNYK 2018</p>
			</div>
		</div>
	</div>
	<!-- //footer -->

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
	<!-- FlexSlider --> 
	<script defer src="<?php echo base_url('assets/js/jquery.flexslider.js')?>"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- End-slider-script -->

</body>
</html>