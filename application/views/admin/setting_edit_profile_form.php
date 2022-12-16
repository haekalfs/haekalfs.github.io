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
					<li class="breadcrumb-item active">Edit Profile</li>
				</ol>


				<div class="row">
					<div class="col-xl-6">
						<div class="card mb-4">
							<div class="card-header">
								Edit Profile
							</div>
							<div class="card-body">
								<form action="" method="POST">
									<div>
										<label for="name">Name</label>
										<input type="text" name="name"
											class="<?= form_error('name') ? 'invalid' : '' ?> form-control"
											value="<?= form_error('name') ? set_value('name') : $current_user->name ?>"
											required maxlength="32" />
										<div class="invalid-feedback">
											<?= form_error('name') ?>
										</div>
									</div>
									<div>
										<label for="email">Email</label>
										<input type="text" name="email"
											class="<?= form_error('email') ? 'invalid' : '' ?> form-control"
											value="<?= form_error('email') ? set_value('email') : $current_user->email ?>"
											required maxlength="32" />
										<div class="invalid-feedback">
											<?= form_error('email') ?>
										</div>
									</div>
									<br>
									<div>
										<button type="submit" name="save" class="btn btn-dark">Save Update</button>
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
