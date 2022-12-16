<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>
	<?php $this->load->view('_partials/breadcumbs.php'); ?>
	<div class="container"><br>

		<?php if($this->session->flashdata('message_login_error')): ?>
		<div class="invalid-feedback">
			<?= $this->session->flashdata('message_login_error') ?>
		</div>
		<?php endif ?>

		<div class="row">
			<div class="col-lg-6">
				<h3 class="">Login</h3>
				<form action="" method="post">
					<div>
						<label for="name">Email/Username*</label>
						<input type="text" name="username" style="width: 300px;" 
							class="<?= form_error('username') ? 'invalid' : '' ?> form-control"
							placeholder="Your username or email" value="<?= set_value('username') ?>" required />
						<div class="invalid-feedback">
							<?= form_error('username') ?>
						</div>
					</div>
					<div>
						<label for="password">Password*</label>
						<input type="password" name="password" style="width: 300px;"
							class="<?= form_error('password') ? 'invalid' : '' ?> form-control"
							placeholder="Enter your password" value="<?= set_value('password') ?>" required />
						<div class="invalid-feedback">
							<?= form_error('password') ?>
						</div>
					</div>
					<br>
					<div>
						<input type="submit" class="btn btn-primary" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>
