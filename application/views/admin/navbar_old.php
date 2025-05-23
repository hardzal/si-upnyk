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
							<a href="<?php echo base_url('admin/profil') ?>">Sejarah, Visi Misi dan Tujuan</a>
						</li>
						<li>
							<a href="<?php echo base_url('admin/struktur') ?>">Struktur Organisasi</a>
						</li>
						<li>
							<a href="#">Tri Dharma<span class="fa arrow"></span></a>
							<ul class="nav nav-third-level">
								<li>
									<a href="<?php echo base_url('admin/pengajaran') ?>">Pengajaran</a>
								</li>
								<li>
									<a href="<?php echo base_url('admin/penelitian') ?>">Penelitian</a>
								</li>
								<li>
									<a href="<?php echo base_url('admin/pengabdian') ?>">Pengabdian</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?php echo base_url('admin/fasilitas') ?>">Fasilitas</a>
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
							<a href="<?php echo base_url('admin/kalender') ?>">Kalendar Akademik</a>
						</li>
						<li>
							<a href="<?php echo base_url('admin/Kurikulum') ?>">Kurikulum</a>
						</li>
						<li>
							<a href="<?php echo base_url('admin/specialization'); ?>"> Perminatan</a>
						</li>
						<li>
							<a href="<?php echo base_url('admin/kerja_praktik'); ?>"> Kerja Praktik</a>
						</li>
						<li>
							<a href="<?php echo base_url('admin/skripsi'); ?>"> Skripsi</a>
						</li>
					</ul>
					<!-- /.nav-second-level -->
				</li>
				<li>
					<a href="<?php echo base_url('admin/category'); ?>"><i class="fa fa-tags" aria-hidden="true"></i> Kategori </a>
				</li>
				<li>
					<a href="<?php echo base_url('index.php/admin/Berita') ?>"><i class="fa fa-bullhorn fa-fw"></i> Informasi</a>
				</li>
				<!--  <li>
                            <a href="<?php echo base_url('index.php/admin/KPskripsi') ?>"><i class="fa fa-book fa-fw"></i> KP dan Skripsi</a>
						</li>-->
				<li>
					<a href="<?php echo base_url('admin/agenda'); ?>"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i> Agenda</a>
				</li>
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

				<li>
					<a href="<?php echo base_url('index.php/admin/question'); ?>"><i class="fa fa-question-circle" aria-hidden="true"></i> Pertanyaan</a>
				</li>

				<li>
					<a href="<?php echo base_url('admin/wisuda'); ?>"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Wisuda</a>
				</li>

				<li>
					<a href="<?php echo base_url('admin/user'); ?>"><i class="fa fa-users" aria-hidden="true"></i> Users</a>
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
