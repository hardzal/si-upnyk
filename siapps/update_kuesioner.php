<?php
include ("_script_phpgrid.php");
$g = new jqgrid();
 
if($_POST['upload']){
// --------- biodata -------------
    $nil = array();
	$vnim	= $_POST['nim'];
	$vmka	= $_POST['mka'];
	$vdosen	= $_POST['dosen'];
	$vsem	= $_POST['smt'];
	$vthn	= $_POST['thnakd'];
	$nil[1]  = $_POST['jwb1'];  $nil[2]  = $_POST['jwb2'];  $nil[3]  = $_POST['jwb3'];  $nil[4]  = $_POST['jwb4'];  $nil[5]  = $_POST['jwb5']; 
	$nil[6]  = $_POST['jwb6'];  $nil[7]  = $_POST['jwb7'];  $nil[8]  = $_POST['jwb8'];  $nil[9]  = $_POST['jwb9'];  $nil[10] = $_POST['jwb10']; 
	$nil[11] = $_POST['jwb11']; $nil[12] = $_POST['jwb12']; $nil[13] = $_POST['jwb13']; $nil[14] = $_POST['jwb14']; $nil[15] = $_POST['jwb15']; 
	$nil[16] = $_POST['jwb16']; $nil[17] = $_POST['jwb17']; $nil[18] = $_POST['jwb18']; $nil[19] = $_POST['jwb19']; $nil[20] = $_POST['jwb20']; 
	$nil[21] = $_POST['jwb21']; $nil[22] = $_POST['jwb22']; $nil[23] = $_POST['jwb23']; $nil[24] = $_POST['jwb24']; $nil[25] = $_POST['jwb25']; 
	$nil[26] = $_POST['jwb26']; $nil[27] = $_POST['jwb27']; $nil[28] = $_POST['jwb28']; $nil[29] = $_POST['jwb29']; $nil[30] = $_POST['jwb30']; 
	$nil[31] = $_POST['jwb31']; $nil[32] = $_POST['jwb32']; $nil[33] = $_POST['jwb33'];
	$hasil = mysql_query("SELECT * FROM kuesioner WHERE nim='$vnim' AND mka='$vmka' AND dosen='$vdosen' 
						  AND semester='$vsem' AND tahun='$vthn'");
	if(mysql_num_rows($hasil)>0){ 
		mysql_query("UPDATE kuesioner SET j01='$nil[1]',  j02='$nil[2]',  j03='$nil[3]',  j04='$nil[4]',  j05='$nil[5]', 
										  j06='$nil[6]',  j07='$nil[7]',  j08='$nil[8]',  j09='$nil[9]',  j10='$nil[10]', 
										  j11='$nil[11]', j12='$nil[12]', j13='$nil[13]', j14='$nil[14]', j15='$nil[15]', 
										  j16='$nil[16]', j17='$nil[17]', j18='$nil[18]', j19='$nil[19]', j20='$nil[20]', 
										  j21='$nil[21]', j22='$nil[22]', j23='$nil[28]', j24='$nil[24]', j15='$nil[25]', 
										  j26='$nil[26]', j27='$nil[27]', j28='$nil[28]', j29='$nil[29]', j30='$nil[30]', 
										  j31='$nil[31]', j32='$nil[32]', j33='$nil[33]' 
					WHERE nim='$vnim' AND mka='$vmka' AND dosen='$vdosen' AND semester='$vsem' AND tahun='$vthn'");
	}else{
		mysql_query("INSERT INTO kuesioner(nim,mka,dosen,semester,tahun,j01,j02,j03,j04,j05,j06,j07,j08,j09,j10,
					 j11,j12,j13,j14,j15,j16,j17,j18,j19,j20,j21,j22,j23,j24,j25,j26,j27,j28,j29,j30,j31,j32,j33) 
		             VALUES ('$vnim','$vmka','$vdosen','$vsem','$vthn','$nil[1]','$nil[2]','$nil[3]','$nil[4]','$nil[5]',
					 '$nil[6]','$nil[7]','$nil[8]','$nil[9]','$nil[10]','$nil[11]','$nil[12]','$nil[13]','$nil[14]','$nil[15]',
					 '$nil[16]','$nil[17]','$nil[18]','$nil[19]','$nil[20]','$nil[21]','$nil[22]','$nil[23]','$nil[24]','$nil[25]',
					 '$nil[26]','$nil[27]','$nil[28]','$nil[29]','$nil[30]','$nil[31]','$nil[32]','$nil[33]')");
	}
}
?>
<head>
   <meta charset="utf-8" />
	<title>Kuesioner</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />
	<link href="lib/js/themes/sunny/jquery-ui.custom.css" rel="stylesheet" type="text/css" media="screen" ></link>	
	<link href="lib/js/jqgrid/css/ui.jqgrid.css" rel="stylesheet" type="text/css" media="screen" ></link>	
    <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />

    <script src="js/fusioncharts.js"></script>
	<script src="lib/js/jquery.min.js" type="text/javascript"></script>
	<script src="lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>	
	<script src="lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
   
   
	<style>
	  form {
		width:100%;
		line-height:100%;
		margin: 0 auto;
	  }
	  .form-horizontal .control-group {
		text-align:center;
		position:static;
		margin-bottom: 0px;
		margin-left: 250px;
	  }	  
	</style>
	<script>
		setTimeout("redir()",100);
		function redir()
		{
		   window.location.href = 'kuesioner.php';
		}
	</script>

</head>
<body class="fixed-top">
    <?php include ("_topside_bar_mhs.php"); ?>
    <div id="main-content">
		<div class="container-fluid">
			<div id="theme-change" class="hidden-phone">
				<i class="icon-cogs"></i>
				<span class="settings">
					<span class="text">Warna:</span>
					<span class="colors">
						<span class="color-default" data-style="default"></span>
						<span class="color-gray" data-style="gray"></span>
						<span class="color-purple" data-style="purple"></span>
						<span class="color-cyan" data-style="cyan"></span>
					</span>
				</span>
			</div>
			<ul class="breadcrumb">
				<li><a href="menu_mhs.php"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
				<li><a href="#">Kuesioner</a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Mahasiswa</a><span class="divider-last">&nbsp;</span></li>
			</ul><br> 
 			<div class="row-fluid">
				<div class="span3"></div>
				<div class="span6"><br><br>
                  <form class="form-horizontal" action="kuesioner.php" method="post" enctype="multipart/form-data">
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Kuesioner</h4>
							<span class="tools">
							   <a href="javascript:;" class="icon-chevron-down"></a>
							   <a href="menu_mhs.php" class="icon-remove"></a>
							</span>
                        </div>
                        <div class="widget-body form">
						   <div class="control-group"><br><br>
							  <label class="control-label" style="width:140px" >Updating data...</label>
						   </div><br><br><br>
						</div>
                    </div>
				  </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
			
				  