<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>
	<?php $this->load->view('_partials/breadcumbs.php'); ?>
	<!-- ======= Contact Section ======= -->
	<section id="contact" class="contact">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
			<h2>Contact</h2>
			<p>Contact Us from this form, we'll respond immediately.</p>
			</div>

			<div class="row">

			<div class="col-lg-5 d-flex align-items-stretch">
				<div class="info">
				<div class="address">
					<i class="bi bi-geo-alt"></i>
					<h4>Location:</h4>
					<p>Jln. Jatiwaringin, Jakarta Timur</p>
				</div>

				<div class="email">
					<i class="bi bi-envelope"></i>
					<h4>Email:</h4>
					<p>info@narademy.com</p>
				</div>

				<div class="phone">
					<i class="bi bi-phone"></i>
					<h4>Call:</h4>
					<p>+62 999 888 000</p>
				</div>

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d963.2739493780954!2d106.91073213771497!3d-6.26371600563073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f32af6703c71%3A0xf89cd7f58da5243f!2sUniversitas%20Bina%20Sarana%20Informatika%20Kampus%20Jatiwaringin!5e0!3m2!1sen!2sid!4v1670764623909!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
				</div>

			</div>

			<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
				<div class="info">
				<form action="" method="post">
					<div class="row">
						<div class="form-group col-md-6">
						<label for="name">Your Name</label>
						<input type="text" name="name" class="<?= form_error('name') ? 'invalid' : '' ?> form-control" placeholder="your name" value="<?= set_value('name') ?>" required maxlength="32" />
						<div class="invalid-feedback"><?= form_error('name') ?></div>
						</div>
						<div class="form-group col-md-6">
						<label for="name">Your Email</label>
						<input type="email" name="email" class="<?= form_error('email') ? 'invalid' : '' ?> form-control" placeholder="your email address" value="<?= set_value('email') ?>" />
						<div class="invalid-feedback"><?= form_error('email') ?></div>
						</div>
					</div><br>
					<div class="form-group">
						<label for="name">Message</label>
						<textarea name="message" class="<?= form_error('message') ? 'invalid' : '' ?> form-control" rows="10" placeholder="write your message"><?= set_value('message') ?></textarea>
						<div class="invalid-feedback"><?= form_error('message') ?></div>
					</div><br>
					<div class="text-center"><input type="submit" style="width: 150px;" class="btn btn-primary" value="Send Message"> &nbsp;&nbsp;&nbsp; <input style="width: 100px;" type="reset" class="btn btn-dark" value="Reset"></div>
				</form>
				</div>
			</div>

			</div>

		</div>
	</section><!-- End Contact Section -->
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>