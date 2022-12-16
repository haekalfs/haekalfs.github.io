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
				<h1 class="mt-4">Upload Avatar</h1>
				<ol class="breadcrumb mb-4">
					<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
					<li class="breadcrumb-item active">Upload Avatar</li>
				</ol>


				<div class="row">
					<div class="col-xl-6">
						<div class="card mb-4">
							<div class="card-header">
								Upload Avatar
							</div>
							<div class="card-body">
								<form action="" method="POST" enctype="multipart/form-data">
									<div>
										<label for="avatar">Pilih Gambar Avatar</label>
										<input class="form-control" type="file" name="avatar" id="avatar"
											accept="image/png, image/jpeg, image/jpg, image/gif">
									</div>

									<?php if (isset($error)) : ?>
									<div class="invalid-feedback"><?= $error ?></div>
									<?php endif; ?>
									<br>
									<div>
										<button type="submit" name="save" class="btn btn-dark">Upload</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<h4>Upload Avatar</h4>
						<p class="lead">Upload Your Avatar.</p>
					</div>
				</div>
			</div>
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>
