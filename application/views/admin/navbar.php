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
				<?php
				$role_id = $this->session->userdata('role_id');
				$menus = $this->menu->getList($role_id);
				?>

				<?php foreach ($menus as $menu) : ?>
					<?php
					$checkSubMenu = $this->menu->check($menu->menu_id);
					$subMenus = $this->submenu->listSubMenu($menu->menu_id);
					$arrowIcon = ($subMenus && $checkSubMenu->has_submenu) ? "<span class='fa arrow'></span>" : "";
					?>
					<li>
						<a href="<?php echo base_url($menu->url); ?>"><i class="<?php echo $menu->icon; ?> fa-fw" aria-hidden="true"></i> <?php echo $menu->menu; ?> <?php echo $arrowIcon; ?></a>
						<?php if ($checkSubMenu->has_submenu) : ?>
							<ul class="nav nav-second-level">
								<?php foreach ($subMenus as $submenu) :
									$url = ($submenu->url != "#") ? base_url($submenu->url) : "#";
									$checkThirdMenu = $this->submenu->check($submenu->id);
									$subThirdMenu = $this->submenu->listThirdMenu($submenu->id);

									$arrowIconThird = ($subThirdMenu && $checkThirdMenu->has_submenu) ? "<span class='fa arrow'></span>" : "";
								?>
									<li>
										<a href="<?php echo $url; ?>"><?php echo $submenu->submenu . "" . $arrowIconThird; ?></a>
										<?php if ($submenu->has_submenu) :
										?>
											<ul class="nav nav-third-level">
												<?php foreach ($subThirdMenu as $submenu_child) : ?>
													<li>
														<a href="<?php $submenu_child->url; ?>"><?php echo $submenu_child->submenu; ?></a>
													</li>
												<?php endforeach; ?>
											</ul>
										<?php endif; ?>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>

				<li>
					<a href="<?php echo base_url('index.php/login/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout </a>
				</li>
			</ul>
		</div>
		<!-- /.sidebar-collapse -->
	</div>
	<!-- /.navbar-static-side -->
</nav>
