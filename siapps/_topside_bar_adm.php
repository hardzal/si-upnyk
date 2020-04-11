<?php
	$stat=$_SESSION['status'];
?> 
<div id="header" class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="brand" href=""><img src="img/logosiapps.png" alt="Logo SI"/></a>
			<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="arrow"></span>
			</a>
			<div class="top-menu ">
				<ul class="nav pull-right top-menu" >
					<div class="top-nav-text"><i class="fa icon-calendar fa-fw"></i>&nbsp;
					<span class="top-nav-text"><?php echo date("l") . ', ' . date("d-m-Y") ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
					<i class="fa icon-user-md fa-fw"></i>&nbsp; <?php echo $_SESSION['usr'] ?>
					</div>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="container" class="row-fluid">     
	<div id="sidebar" class="nav-collapse collapse">
		 <div class="sidebar-toggler hidden-phone"></div>   
		 <div class="navbar-inverse">
			<form class="navbar-search visible-phone">
			   <input type="text" class="search-query" placeholder="Search" />
			</form>
		 </div>
			<ul class="sidebar-menu">
				<li class="active">
					<a href="menu_admin.php">
					<span class="icon-box"> <i class="icon-home"></i></span>Home
					</a>
				</li>
				<li class="">
					<a href="data_mhs.php" class="">
						<span class="icon-box"> <i class="icon-user"></i></span> Data Mahasiswa
					</a>
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
						<span class="icon-box"><i class="icon-font"></i></span> Akademik
						<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="hasil_kuesioner.php"> Kuesioner</a></li>
						<li><a class="" href="daftar_nilai.php"> Dartar Nilai</a></li>
						<li><a class="" href="dashboard_masa_studi.php"> Masa Studi</a></li>
					</ul>
				</li>
				<li class="has-sub">
				<li class="has-sub">
					<a href="javascript:;" class="">
						<span class="icon-box"> <i class="icon-wrench"></i></span> Kerja Praktek
						<span class="arrow"></span>
					</a>
				</li>
				<li class="">
					<a href="input_tgl_jr.php" class="">
						<span class="icon-box"> <i class="icon-list-alt"></i></span> Tugas Akhir
					</a>
				</li>
				<li class="change_pw_adm.php">
					<a href="kelola_login.php" class="">
						<span class="icon-box"> <i class="icon-lock"></i></span> Data Login
					</a>
				</li>
				<li class="help_adm.php">
					<a href="reset_data_tanggal.php" class="">
						<span class="icon-box"> <i class="icon-question-sign"></i></span> Help
					</a>
				</li>
				<li class="">
					<a href="logout.php" class="">
						<span class="icon-box"> <i class="icon-signout"></i></span> Logout
					</a>
				</li>
			</ul>
	</div>
</div>
