<!-- <aside class="side-nav">
	<div class="brand">
		<h2>Berita Coding</h2>
		<div style="display: flex; gap: 0.8rem; margin:1rem 0;">
			<?php
			$avatar = $current_user->avatar ?
				base_url('upload/avatar/' . $current_user->avatar)
				: get_gravatar($current_user->email)
			?>
			<img src="<?= $avatar ?>" alt="<?= htmlentities($current_user->name, TRUE) ?>" height="32" width="32">
			<div>
				<b><?= htmlentities($current_user->name) ?></b>
				<small><?= htmlentities($current_user->email) ?></small>
			</div>
		</div>
	</div>
	<nav>
		<a href="<?= site_url('admin/dashboard') ?>">Overview</a>
		<a href="<?= site_url('admin/post') ?>">Post</a>
		<a href="<?= site_url('admin/feedback') ?>">Feedback</a>
		<a href="<?= site_url('admin/setting') ?>">Setting</a>
		<a href="<?= site_url('auth/logout') ?>">Logout</a>
	</nav>
</aside> -->
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?= site_url('admin/dashboard') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Tools
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="<?= site_url('admin/post') ?>">
                                        <div class="sb-nav-link-icon"></div>
                                        Courses
                                    </a>
                                    <a class="nav-link" href="<?= site_url('admin/blog') ?>">
                                        <div class="sb-nav-link-icon"></div>
                                        Blog Posts
                                    </a>
                                    <a class="nav-link" href="<?= site_url('admin/feedback') ?>">
                                        <div class="sb-nav-link-icon"></div>
                                        Feedback
                                    </a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Master Data</div>
                            <a class="nav-link" href="<?= site_url('admin/users') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Manage Users
                            </a>
                            <a class="nav-link" href="<?= site_url('admin/setting') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Settings
                            </a>
                            <a class="nav-link" href="<?= site_url('auth/logout') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Log Out
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
						<div style="display: flex; gap: 0.8rem;">
							<?php
							$avatar = $current_user->avatar ?
								base_url('upload/avatar/' . $current_user->avatar)
								: get_gravatar($current_user->email)
							?>
							<img src="<?= $avatar ?>" alt="<?= htmlentities($current_user->name, TRUE) ?>" height="32" width="32">
							<div>
								<b><?= htmlentities($current_user->name) ?></b>
								<small><?= htmlentities($current_user->email) ?></small>
							</div>
						</div>
                    </div>
                </nav>
            </div>