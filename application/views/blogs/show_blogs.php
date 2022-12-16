<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>
	<?php $this->load->view('_partials/breadcumbs.php'); ?>
	<div class="container">
		<article class="article"><br>
			<h1 class="post-title"><?= $blog->title ? html_escape($blog->title) : "No Title" ?></h1><hr>
			<div class="post-meta">
				<i>Published at <?= $blog->created_at ?></i>
			</div>
			<div class="post-body"><br>
				<?= $blog->content ?>
			</div><br><br>
		</article>
	</div>
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>
