<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?php echo base_url('mahasiswa'); ?>">Administrator|mahasiswa</a>
	</div>
	<!-- /.navbar-header -->

	<ul class="nav navbar-top-links navbar-right">
		<!-- /.dropdown -->
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-user">
				<li><a href="<?php echo base_url('mahasiswa/profadmin') ?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
				</li>
				<li class="divider"></li>
				<li><a href="<?php echo base_url('index.php/Login/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
				</li>
			</ul>
			<!-- /.dropdown-user -->
		</li>
		<!-- /.dropdown -->
	</ul>
	<!-- /.navbar-top-links -->

	<div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav navbar-collapse">
			<ul class="nav" id="side-menu">

				<li>
					<a href="<?php echo base_url('mahasiswa/index') ?>"><i class="fa fa-dashboard fa-fw"></i> Beranda</a>
				</li>
				<li>
					<a href="<?php echo base_url('mahasiswa/Berita') ?>"><i class="fa fa-bullhorn fa-fw"></i> Informasi mahasiswa</a>
				</li>
				<!--  <li>
                            <a href="<?php echo base_url('index.php/admin/KPskripsi') ?>"><i class="fa fa-book fa-fw"></i> KP dan Skripsi</a>
						</li>-->
				<!-- <li>
					<a href="<?php echo base_url('mahasiswa/agenda'); ?>"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i> Agenda</a>
				</li> -->


				<!-- <li class="active">
                            <a href="#"><i class="fa fa-bullhorn fa-fw"></i> Informasi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="active" href="<?php echo base_url('index.php/admin/Berita') ?>">Umum</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/admin/infoJurusan') ?>">Informasi Jurusan</a>
                                </li>
                                <li>
                                    <a class="active" href="<?php echo base_url('index.php/admin/Kegiatan') ?>">Kegiatan Mahasiswa</a>
                                </li>
                            </ul>
                           /.nav-second-level 
                        </li>-->
				<li>
					<a href="<?php echo base_url('index.php/login/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout </a>
				</li>
			</ul>
		</div>
		<!-- /.sidebar-collapse -->
	</div>
	<!-- /.navbar-static-side -->
</nav>
