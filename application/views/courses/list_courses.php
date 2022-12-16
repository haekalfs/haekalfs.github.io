<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
</head>

<body>

	<?php $this->load->view('_partials/navbar.php'); ?>
	<?php $this->load->view('_partials/breadcumbs.php'); ?>

	<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Browse all of our available courses and claim your certificate.</p>
        </div>
        <div class="text-end">
        <a href="<?= site_url('search') ?>" class="btn btn-primary">Search Courses <i class="bi-search"></i></a><br><br><br>
        </div>
        <div class="row">
        <?php foreach ($courses as $course) : ?>
          <div style="padding-top: 20px;" class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="height: 280px;">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4>
                <?php if($this->session->userdata('access')=='1'):?>
                  <a href="<?= site_url('course/'.$course->slug) ?>"><?= $course->title ? html_escape($course->title) : "No Title" ?></a>
                <?php elseif($this->session->userdata('access')=='2'):?>
                  <a href="<?= site_url('course/'.$course->slug) ?>"><?= $course->title ? html_escape($course->title) : "No Title" ?></a>
                <?php else:?>
                  <a href="javascript:void(0)" data-toggle="modal" data-target="#restrictModal"> <i class="fa fa-plus" aria-hidden="true"></i> <?= $course->title ? html_escape($course->title) : "No Title" ?></a>
                <?php endif;?>
              </h4>
              <p style="width: 300px;"><?= substr_replace($course->content, "...", 80); ?></p>
            </div>
          </div>
		  <?php endforeach ?>
		</div>
  </div>
  <!-- modal -->
<div class="modal" id="restrictModal">
   <div class="modal-dialog ">
       <div class="modal-content">
           <div class="modal-header">
              <h4 class="modal-title">An Error Occured</h4>
           </div>
          <div class="modal-body">
        <p>You need to become a member.</p>
          </div>
           <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
       </div>
  </div>
</div>
</section><!-- End Services Section -->
    <?=  $this->pagination->create_links(); ?>
	<?php $this->load->view('_partials/footer.php'); ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>