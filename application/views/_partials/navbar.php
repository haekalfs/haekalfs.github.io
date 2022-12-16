<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?= base_url("home") ?>">Nara<a style="color: #6495ED;">demy</a></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="asset/img/logo-narademy.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="<?= site_url('home') ?>">Home</a></li>
          <li><a class="nav-link scrollto" href="<?= site_url('about') ?>">About</a></li>
          <li><a class="nav-link scrollto" href="<?= site_url('course') ?>">Courses</a></li>
          <!-- <a href="<?= site_url('search') ?>">Search</a> -->
          <li><a class="nav-link scrollto" href="<?= site_url('blog') ?>">Blogs</a></li>
          <li><a class="nav-link scrollto" href="<?= site_url('contact') ?>">Contact</a></li>
          <?php if($this->session->userdata('access')=='1'):?>
          <li class="dropdown"><a href="#" class="getstarted scrollto"><span>Admin</span><i class="bi bi-person-circle"></i></a>
            <ul>
              <li><a href="<?= site_url('admin') ?>">Go To Admin Page</a></li>
              <li><a href="<?= site_url('admin/setting') ?>">Settings</a></li>
              <hr>
              <li><a href="<?= site_url('auth/logout') ?>">Logout</a></li>
            </ul>
          </li>
          <!-- Akses Buat Member -->
          <?php elseif($this->session->userdata('access')=='2'):?>
            <li class="dropdown"><a href="#" class="getstarted scrollto"><span>Member</span><i class="bi bi-person-circle"></i></a>
            <ul>
              <li><a href="#">My Certificate</a></li>
              <li><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">Edit Profile</a></li>
              <hr>
              <li><a href="<?= site_url('auth/logout') ?>">Logout</a></li>
            </ul>
          </li>
          <?php else:?>
            <li><a class="getstarted scrollto" href="<?= site_url('admin') ?>">Join Us</a></li>
          <?php endif;?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
