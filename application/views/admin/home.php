<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>

	<div id="wrapper">

		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url('admin'); ?>">Administrator</a>
			</div>
			<!-- /.navbar-header -->

			<ul class="nav navbar-top-links navbar-right">
				<!-- /.dropdown -->
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-user">
						<li><a href="<?php echo base_url('index.php/admin/profadmin') ?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
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
							<a href="<?php echo base_url('index.php/admin/home') ?>"><i class="fa fa-dashboard fa-fw"></i> Beranda</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-flag fa-fw"></i> Profil <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="<?php echo base_url('index.php/admin/profil') ?>">Visi Misi dan Tujuan</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/admin/struktur') ?>">Struktur Organisasi</a>
								</li>
							</ul>
							<!-- /.nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-users fa-fw"></i> Data Personil <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="<?php echo base_url('index.php/admin/Dosen') ?>">Dosen</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/admin/Tendik') ?>">Tenaga Kependidikan</a>
								</li>
							</ul>
							<!-- /.nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-book fa-fw"></i>Akademik<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="<?php echo base_url('index.php/admin/Akademik') ?>">Kalendar Akademik</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/admin/Kurikulum') ?>">Kurikulum</a>
								</li>

							</ul>
							<!-- /.nav-second-level -->
						</li>
						<li>
							<a href="<?php echo base_url('index.php/admin/Berita') ?>"><i class="fa fa-bullhorn fa-fw"></i> Informasi</a>
						</li>
						<li>
							<a href="<?php echo base_url('admin/agenda'); ?>"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i> Agenda</a>
						</li>
						<!--  <li>
                            <a href="<?php echo base_url('index.php/admin/KPskripsi') ?>"><i class="fa fa-book fa-fw"></i> KP dan Skripsi</a>
                        </li>-->
						<li>
							<a href="<?php echo base_url('index.php/admin/slide') ?>"><i class="fa fa-list fa-fw"></i> Slide </a>
						</li>
						<li>
							<a href="<?php echo base_url('index.php/admin/download') ?>"><i class="fa fa-upload fa-fw"></i> File Upload</a>
						</li>
						<li>
							<a href="<?php echo base_url('index.php/admin/galleries'); ?>"><i class="fa fa-picture-o" aria-hidden="true"></i>
								Galery</a>
						</li>
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


		<!-- Page Content -->
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="page-header">Halo Admin..</h3>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->


</body>

</html>
