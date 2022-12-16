<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>
	<?php $this->load->view('_partials/breadcumbs.php'); ?>

	<section id="faq" class="faq">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h1>Search Courses</h1>
				<p>Search your desired course topics and get certified now!.</p>
			</div>
			<div class="footer-newsletter">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-5">
							<form action="" method="get" style="flex-direction: row; align-items:center">
								<div class="row justify-content-center">
									<input class="form-control" type="search" name="keyword"
										style="width: 460px;" placeholder="Keyword..."
										value="<?= html_escape($keyword) ?>" required maxlength="32" />
								</div>
									<br>
								<div class="row justify-content-center">
									<div class="col-lg-3">
										<input style="width: 120px;" type="submit" class="btn btn-primary" value="Search">
									</div>
								</div>
							</form>

							<?php if ($search_result) : ?>
							<div class="search-result">
								<hr>
								<?php foreach ($search_result as $course) : ?>
								<h2>
									<a
										href="<?= site_url('course/' . $course->slug) ?>"><?= html_escape($course->title) ?></a>
								</h2>
								<p><?= strip_tags(substr($course->content, 0, 200)) ?></p>
								<?php endforeach ?>
							</div>
							<?php else : ?>
							<?php if ($keyword) : ?>
						<br>
							<div style="height: 100px; text-align:center;">
								<h1 style="color:red;">Error 404... Desired Courses not found.</h1>
								<p>Try again with another keyword.</p>
							</div>
							<?php endif ?>
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>

		</div>
		</div>
	</section>
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>
