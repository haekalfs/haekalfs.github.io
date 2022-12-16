<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>
  <?php $this->load->view('_partials/hero.php'); ?>
    
<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url("assets/img/clients/Binus.png") ?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url("assets/img/clients/Jasamarga.png") ?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url("assets/img/clients/Maranatha.png") ?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url("assets/img/clients/UII.png") ?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url("assets/img/clients/XLAxiata.png") ?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url("assets/img/clients/Smartfren.png") ?>" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= Blogs Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Recent Blogs</h2>
          <p>Stay tune here to keep get updates about our newest tutorials, event and many more.</p>
        </div>
        
        <div class="row"><?php foreach ($blogs as $blog) : ?>
          <div style="padding-top: 20px;" class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="<?= site_url('blog/'.$blog->slug) ?>"><?= $blog->title ? html_escape($blog->title) : "No Title" ?></a></h4>
              <p style="width: 300px;"><?= substr_replace($blog->content, "...", 180); ?></p>
            </div>
          </div><?php endforeach ?>
        </div>
      </div>
    </section><!-- End Services Section -->

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
            <a href="<?= site_url('about') ?>" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Team</h2>
          <p>A Perfect blend of creativity and talented people. Maybe talent wins games, but teamwork and intelligence win championships.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/haekal.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Haekal Sastradilaga</h4>
                <span>19210677</span>
                <p>Sayangi ibumu jangan ibu-ibu dan bekerjalah hingga tulang anda keropos.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/nada1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Nada Rahmawati</h4>
                <span>19211226</span>
                <p>When life gets you down, do you wanna know what you've gotta do? Just keep swimming-dory.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/dhika.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Andhika Prasetya</h4>
                <span>19210748</span>
                <p>With a great power, comes a great responsibility.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/fauzan.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Fauzan</h4>
                <span>19211304</span>
                <p>Bangun, Makan, Main PS, Kuliah, Push Rank, Pulang, Tidur.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/fariz.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Fariz Darmawan</h4>
                <span>19211101</span>
                <p>Sehat tidak perlu, yang penting joki lancar, cuan pun datang.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <?php $this->load->view('_partials/footer.php'); ?>
</body>
</html>