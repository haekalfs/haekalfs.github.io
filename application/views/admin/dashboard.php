<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/_partials/header.php') ?>
</head>

<body>
  <main class="main">
    <?php $this->load->view('admin/_partials/side_nav.php') ?>

    <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><a>Courses <a style="color:red;"><b><?= $course_count ?></b></a></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= site_url('admin/post') ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Blogs <a style="color:red;"><b><?= $blog_count ?></b></a></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= site_url('admin/blog') ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Feedback <a style="color:red;"><b><?= $feedback_count ?></b></a></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= site_url('admin/feedback') ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Log Out</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= site_url('auth/logout') ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><iframe style="height:550px; width:100%; border: none;" src="https://databoks.katadata.co.id/datapublishembed/125606/dki-jakarta-miliki-1628-perusahaan-manufaktur-pada-2021"></iframe></div>
                                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Pie Chart Example
                                    </div>
                                    <div class="card-body"><iframe id="iframe-chart" style="height:550px; width:100%; border: none;" src="https://databoks.katadata.co.id/datapublishembed/146284/update-harga-emas-antam-naik-menjadi-rp-1013000-per-gram"></iframe></div>
                                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
      <?php $this->load->view('admin/_partials/footer.php') ?>
    </div>
  </main>
</body>

</html>