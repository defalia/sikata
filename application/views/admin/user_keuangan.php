<!-- Main Content -->
<?php $no = 1; ?>
<div class="main-content">
	<section class="section">
		<div class="section-body">
			<?php if ($this->session->flashdata('register_success') != NULL) :  ?>
				<div class="alert alert-success alert-dismissible fade show">
					<?php echo $this->session->flashdata('register_success'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
			<div class="row">
				<div class="col-12">
					<div class="card card-primary">
						<div class="card-header">
							<h4>Data Akun Keuangan</h4>
						</div>
						<div class="card-body">
							<div class="text-right mb-2">
								<button class="btn btn-primary rounded-circle" data-toggle="modal" data-target="#modalAddAkunKeuangan"><i class="fas fa-plus"></i></button>
							</div>
							<table class="table table-striped" id="table-1">
								<thead>
									<tr>
										<th>Username</th>
										<th>Password</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($account as $a) : ?>
										<tr>
											<td><?php echo $a['username'] ?></td>
											<td><?php echo $a['password'] ?></td>
											<td>
												<a class="btn btn-danger btn-sm" onclick="return confirm('Data Akan Dihapus?')" href="<?php echo base_url() ?>keuangan/delete/<?php echo $a['id_keuangan'] ?>"><i class="fas fa-trash"></i></a>
												<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalEditAkunKeuangan" data-username="<?= $a['username'] ?>" data-password="<?= $a['password'] ?>" data-id_keuangan="<?= $a['id_keuangan'] ?>"><i class="fas fa-pencil-alt"></i></button>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- MODAL ADD AKUN KEUANGAN -->
<div class="modal fade" id="modalAddAkunKeuangan" tabindex="-1" role="dialog" aria-labelledby="modalAddAkunKeuanganTitle" aria-hidden="true">
	<form action="<?= base_url('keuangan/register_action') ?>" method="post">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalAddAkunKeuanganTitle">Tambah Akun Keuangan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" id="username" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="text" name="password" id="password" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				</div>
			</div>
		</div>
	</form>
</div>
<!-- MODAL EDIT AKUN KEUANGAN -->
<div class="modal fade" id="modalEditAkunKeuangan" tabindex="-1" role="dialog" aria-labelledby="modalAddAkunKeuanganTitle" aria-hidden="true">
	<form action="<?= base_url('keuangan/edit_action') ?>" id="formEditAkunKeuangan" method="post">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalAddAkunKeuanganTitle">Tambah Akun Keuangan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" id="username" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="text" name="password" id="password" class="form-control" required>
					</div>
					<input type="hidden" name="id_keuangan" id="id_keuangan">
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				</div>
			</div>
		</div>
	</form>
</div>