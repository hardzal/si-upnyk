
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
 <link rel="stylesheet" href="<?php echo base_url('assets/tabel/css/bootstrap.min.css') ?>">	
 <link rel="stylesheet" href="<?php echo base_url('assets/tabel/css/dataTables.bootstrap.css')?>">
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
				<div class=col-md-12>
					<h4><CENTER><b>PRESTASI</b></CENTER></h4>
					<hr color="black">
				</div>
					
			<div class=col-md-12>
				<div class="agile-welcome-right">
					<h4><b style="color:#043a6f; font-family:calibri"></b></h4>
					
				<div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr style="background-color: #337ab7; color: white">
                            <th>#</th>
                            <th >Tahun</th>
                            <th>Prestasi</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    	<?php
                    		$no=0;
                    		foreach($prestasi as $data){
                    			$no++;
                    	?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data->tahun; ?></td>
                            <td><?php echo $data->isi; ?></td>
                           
                        </tr>
                            <?php } ?>                   
                                         
                    </tbody>
                    
                </table>
            </div>
				</div>
				<div class="clearfix"> </div> 
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
		 <script src="<?php echo base_url('assets/tabel/js/jquery.dataTables.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/tabel/js/dataTables.bootstrap.js') ?>"></script>	
        <script type="text/javascript">
            $(function() {
                $('#example1').dataTable();
            });
        </script>
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