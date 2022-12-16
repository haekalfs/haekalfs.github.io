<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/header.php') ?>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th,
		td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #DDD;
		}

		tr:hover {
			background-color: #D6EEEE;
		}

	</style>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>
		<div id="layoutSidenav_content">
			<div class="container-fluid px-4">
				<h1 class="mt-4">Manage Feedback</h1>
				<ol class="breadcrumb mb-4">
					<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
					<li class="breadcrumb-item active">Feedback</li>
				</ol>
				<div class="card mb-4">
					<div class="card-header">
						<i class="fas fa-table me-1"></i>
						List Feedback
					</div>
					<div class="card-body">
						<table id="datatablesSimple">
							<thead>
								<tr>
									<th>Sender's Name</th>
									<th>Email</th>
									<th>Message</th>
									<th>Created At</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($feedbacks as $feedback): ?>
								<tr>
									<td><?= $feedback->name ?></td>
									<td><?= $feedback->email ?></td>
									<td><?= $feedback->message ?></td>
									<td><?= $feedback->created_at ?></td>
									<td><a class="btn btn-danger" href="#"
											data-delete-url="<?= site_url('admin/feedback/delete/'.$feedback->id) ?>"
											class="button button-danger button-small" role="button"
											onclick="deleteConfirm(this)">Delete</a></td>
								</tr>
								<?php endforeach ?>
						</table>
					</div>
				</div>
			</div>
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function deleteConfirm(event){
			Swal.fire({
				title: 'Delete Confirmation!',
				text: 'Are you sure to delete the item?',
				icon: 'warning',
				showCancelButton: true,
				cancelButtonText: 'No',
				confirmButtonText: 'Yes Delete',
				confirmButtonColor: 'red'
			}).then(dialog => {
				if(dialog.isConfirmed){
					window.location.assign(event.dataset.deleteUrl);
				}
			});
		}
	</script>

	<?php if($this->session->flashdata('message')): ?>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			Toast.fire({
				icon: 'success',
				title: '<?= $this->session->flashdata('message') ?>'
			})
		</script>
	<?php endif ?>
</body>

</html>
