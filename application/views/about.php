<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>
  <?php $this->load->view('_partials/breadcumbs.php'); ?>
	<!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              First of all, let us introduce ourself. What are we? and what benefits can you get by become our member?
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> New method for learning new skill and become pro easily.</li>
              <li><i class="ri-check-double-line"></i> Sharing your knowledge, and get promoted in all our platforms.</li>
              <li><i class="ri-check-double-line"></i> Get certificate after completing every courses.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Narademy stands for Nara Academy which provide education for all levels especially in IT Field. Narademy is not just about learning but it allows people to share their knowledge to the others, so they can grow together.
              We Learn, Grow and achieve our dreams together.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>