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
				<h1 class="mt-4">Edit Password</h1>
				<ol class="breadcrumb mb-4">
					<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
					<li class="breadcrumb-item active">Edit Password</li>
				</ol>

				<div class="row">
					<div class="col-xl-6">
						<div class="card mb-4">
							<div class="card-header">
								Edit Password
							</div>
							<div class="card-body">
								<form action="" method="POST">
									<div>
										<label for="password">Password Baru</label>
										<input type="password" name="password"
											class="<?= form_error('password') ? 'invalid' : '' ?> form-control"
											value="<?= set_value("password") ?>" required />
										<div class="invalid-feedback">
											<?= form_error('password') ?>
										</div>
									</div>
									<div>
										<label for="password_confirm">Konfirmasi Password Baru</label>
										<input type="password" name="password_confirm"
											class="<?= form_error('password_confirm') ? 'invalid' : '' ?> form-control"
											value="<?= set_value("password_confirm") ?>" required />
										<div class="invalid-feedback">
											<?= form_error('password_confirm') ?>
										</div>
									</div>
									<br>
									<div>
										<button type="submit" name="save" class="btn btn-dark">Save Password</button>
									</div>
								</form>
								</div>
						</div>
					</div>
				</div>
			</div>
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>
