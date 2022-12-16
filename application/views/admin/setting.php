<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/header.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div id="layoutSidenav_content">
			<div class="container-fluid px-4">
				<h1 class="mt-4">Edit Profile</h1>
				<ol class="breadcrumb mb-4">
					<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
					<li class="breadcrumb-item active">Settings</li>
				</ol>
				<div class="row" >
					<div class="col-lg-4">
						<div class="card mb-4" style="height: 300px;">
							<div class="card-header">
								<b>Profile Settings</b>
								<a href="<?= site_url('admin/setting/edit_profile') ?>">Edit Profile</a>
							</div>
							<div class="card-body">
								Name: <span class="text-gray"><?= html_escape($current_user->name) ?></span>
								<br>
								Email: <span class="text-gray"><?= html_escape($current_user->email) ?></span>
							</div>
							<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card mb-4" style="height: 300px;">
							<div class="card-header">
								<i class="fas fa-chart-bar me-1"></i>
								Avatar
							</div>
							<div class="card-body">
								<div>
									<div style="display: flex; gap: 1em">
										<a href="<?= site_url('admin/setting/remove_avatar') ?>"
											class="btn btn-danger">Remove
											Avatar</a>
										<a href="<?= site_url('admin/setting/upload_avatar') ?>"
											class="btn btn-primary">Change Avatar</a>
									</div>
								</div>
								<div class="card-body">
									<?php
									$avatar = $current_user->avatar ?
										base_url('upload/avatar/' . $current_user->avatar)
										: get_gravatar($current_user->email)
									?>
									<img src="<?= $avatar ?>" alt="<?= htmlentities($current_user->name, TRUE) ?>"
										height="80" width="80">
								</div>
								</canvas>
							</div>
							<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card mb-4" style="height: 300px;">
							<div class="card-header">
								<i class="fas fa-chart-pie me-1"></i>
								<b>Security & Password</b>
							</div>
							<div class="card-body">
								<div>
									<a class="btn btn-danger" href="<?= site_url('admin/setting/edit_password') ?>">Edit
										Password</a>
								</div>
								<div class="card-body">
									Your Password: <span class="text-gray">******</span>
									<br>
									Last Changed: <span
										class="text-gray"><?= $current_user->password_updated_at ?></span>
								</div>
							</div>
							<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
						</div>
					</div>
				</div>
			</div><?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
	<?php if ($this->session->flashdata('message')) : ?>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			Toast.fire({
				icon: 'success',
				title: '<?= $this->session->flashdata('message') ?>'
			})
		</script>
	<?php endif ?>
</body>

</html>
