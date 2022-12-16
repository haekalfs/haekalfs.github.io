<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
	<style>
	div.excerpt {
     width: 250px;
     white-space: nowrap;
     overflow: hidden;
     text-overflow: ellipsis;
	}
	</style>
</head>

<body>

	<?php $this->load->view('_partials/navbar.php'); ?>
	<?php $this->load->view('_partials/breadcumbs.php'); ?>
	<div class="container">
		<article class="article"><br>
			<h1 class="post-title"><?= $course->title ? html_escape($course->title) : "No Title" ?></h1>
			<hr>
			<div class="post-meta">
				<i>Published at <?= $course->created_at ?></i>
			</div><br>

			<div class="row content">
				<div class="col-lg-6">
					<?= $course->content ?>
					<div>
						<br><br><a id="printCert" style="display: none;" class="btn btn-primary" href="<?= site_url('certification') ?>">Print Certificate</a>
					</div>
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0">
					<video controls onended="videoEnd()" id="myVideo" autoplay width="660" height="315" src="<?= $course->link ?>"
						title="<?= $course->title ? html_escape($course->title) : "No Title" ?>" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></video>
				</div>
			</div>
		</article>
	</div><br><br><br>
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

<script type='text/javascript'>

var video = document.getElementById('myVideo');
var supposedCurrentTime = 0;
video.addEventListener('timeupdate', function() {
  if (!video.seeking) {
		supposedCurrentTime = video.currentTime;
  }
});
// prevent user from seeking
video.addEventListener('seeking', function() {
  // guard agains infinite recursion:
  // user seeks, seeking is fired, currentTime is modified, seeking is fired, current time is modified, ....
  var delta = video.currentTime - supposedCurrentTime;
  // delta = Math.abs(delta); // disable seeking previous content if you want
  if (delta > 0.01) {
    video.currentTime = supposedCurrentTime;
  }
});
video.addEventListener('ended', function() {
  // reset state in order to allow for rewind
	supposedCurrentTime = 0;
});

var a = document.getElementById("printCert");
  	function videoEnd(){
	if (a.style.display === "none") {
		a.style.display = "block";
	} else {
		a.style.display = "none";
	}
  }
</script>
</html>
