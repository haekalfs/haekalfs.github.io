<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/header.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div id="layoutSidenav_content">
			<div class="container-fluid px-4">
				<h1 class="mt-4">Manage Users</h1>
				<ol class="breadcrumb mb-4">
					<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
					<li class="breadcrumb-item active">Manage Users</li>
				</ol>
				<div>
					<div>
						<a href="#" class="btn btn-primary" role="button">+ Create New
							User</a>
					</div>
				</div><br>
				<div class="card mb-4">
					<div class="card-header">
						<i class="fas fa-table me-1"></i>
						List Users
					</div>
					<div class="card-body">
						<table id="datatablesSimple">
							<thead>
								<tr>
									<th>No.</th>
									<th>Name</th>
									<th class="text-center">Email</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1; foreach($users as $user): ?>
								<tr>
									<td style="width: 10px;">
										<?php echo $i++; ?>
									</td>
									<td>
										<div><?= $user->name ?></div>
									</td>
									<td><?= $user->email ?></td>
									<td style="width: 10%;">
										<div>
											<a href="#"
                                                data-delete-url="<?= site_url('admin/users/delete/'.$user->id) ?>"
												class="btn btn-danger" role="button"
												onclick="deleteConfirm(this)">Delete</a>
										</div>
									</td>
								</tr>
								<?php endforeach ?>
						</table>
					</div>
				</div>
				</tbody>
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
