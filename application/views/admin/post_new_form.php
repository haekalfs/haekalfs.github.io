<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/header.php') ?>
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div id="layoutSidenav_content">
			<div class="container-fluid px-4">
                <h1 class="mt-4">Add New Courses</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">New Courses</li>
                    </ol>

			<form action="" method="POST">
				<div>
					<label for="title">Course Title</label>
					<input type="text" name="title" class="<?= form_error('title') ? 'invalid' : '' ?> form-control" placeholder="Judul artikel" value="<?= set_value('title') ?>" required maxlength="128" />
					<div class="invalid-feedback">
						<?= form_error('title') ?>
					</div>
				</div>

				<div>
                    <label for="link">Link Content</label>
                    <input class="form-control" type="text" name="link" value="<?= set_value('link') ?>">
                </div>

				<div>
                    <label for="content">Explanation</label>
                    <input type="hidden" type="text" name="content" value="<?= set_value('content') ?>">
                    <div id="editor" style="min-height: 160px;"><?= set_value('content') ?></div>
                </div>

				<div>
					<br>
					<button class="btn btn-dark" type="submit" name="draft" class="button" value="true">Save to Draft</button>
					<button class="btn btn-primary" type="submit" name="draft" class="button button-primary" value="false">Publish</button>
					<div class="invalid-feedback">
						<?= form_error('draft') ?>
					</div>
				</div>
			</form>

			<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
			<script>
            var quill = new Quill('#editor', {
                theme: 'snow',
                modules: {
                toolbar: [
                    [{ header: [1, 2, 3, 4, 5, 6, false] }],
                    [{ font: [] }],
                    ["bold", "italic"],
                    ["link", "blockquote", "code-block", "image"],
                    [{ list: "ordered" }, { list: "bullet" }],
                    [{ script: "sub" }, { script: "super" }],
                    [{ color: [] }, { background: [] }],
                ]
                },
            });
            quill.on('text-change', function (delta, oldDelta, source) {
                document.querySelector("input[name='content']").value = quill.root.innerHTML;
            });
            </script>
			</div>
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>