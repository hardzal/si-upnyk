<?php

	session_start();

	$user = $_SESSION['usr']

?> 

<div id="header" class="navbar navbar-inverse navbar-fixed-top">

	<div class="navbar-inner">

		<div class="container-fluid">

			<a class="brand" href=""><img src="img/Logosiapps.png" alt="Logo SI"/></a>

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

					<i class="fa icon-user-md fa-fw"></i>&nbsp; <?php echo $user ?>

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

					<a href="menu_mhs.php">

					<span class="icon-box"> <i class="icon-home"></i></span>Home

					</a>

				</li>
				<li class="">

					<a href="biodata.php" class="">

						<span class="icon-box"> <i class="icon-user"></i></span> Biodata

					</a>

				</li>
				<li class="has-sub">

					<a href="javascript:;" class="">

						<span class="icon-box"><i class="icon-font"></i></span> Akademik

						<span class="arrow"></span>

					</a>

					<ul class="sub">

						<li><a class="" href="Kuesioner.php"> Kuesioner</a></li>

						<li><a class="" href="read_nilai.php"> Dartar Nilai</a></li>

					</ul>

				</li>

				<li class="">

					<a href="kerja_praktek.php?data" class="">

						<span class="icon-box"> <i class="icon-wrench"></i></span> Kerja Praktek

					</a>

				</li>

				<li class="">

					<a href="tugas_akhir.php" class="">

						<span class="icon-box"> <i class="icon-list-alt"></i></span> Tugas Akhir

					</a>

				</li>

				<li class="">

					<a href="tracer_study.php" class="">

						<span class="icon-box"> <i class="icon-eye-open"></i></span> Tracer Study

					</a>

				</li>

				<li class="">

					<a href="change_pw_mhs.php" class="">

						<span class="icon-box"> <i class="icon-lock"></i></span> Ganti Password

					</a>

				</li>

				<li class="help_adm.php">

					<a href="" class="">

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

