<!-- Main Content -->
<?php $no = 1; ?>
<div class="main-content">
	<section class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card card-primary">
						<div class="card-header">
							<h4>Data Akun Dekanat</h4>
						</div>
						<div class="card-body">
							<div class="text-right mb-2">
								<button class="btn btn-primary rounded-circle" data-toggle="modal" data-target="#modalAddAkunDekanat">
									<i class="fas fa-plus"></i>
								</button>
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
												<a class="btn btn-danger btn-sm text-white" onclick="return confirm('Data Akan Dihapus?')" href="<?php echo base_url() ?>dekanat/delete/<?php echo $a['id_dekanat'] ?>">
													<i class="fas fa-trash"></i>
												</a>
												<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalEditAkunDekanat" data-username="<?= $a['username'] ?>" data-password="<?= $a['password'] ?>" data-id_dekanat="<?= $a['id_dekanat'] ?>">
													<i class="fas fa-pencil-alt"></i>
												</button>
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
<div class="modal fade" id="modalAddAkunDekanat" tabindex="-1" role="dialog" aria-labelledby="modalAddAkunDekanatTitle" aria-hidden="true">
	<form action="<?= base_url('dekanat/register_action') ?>" method="post">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalAddAkunDekanatTitle">Tambah Akun Dekanat</h5>
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
<div class="modal fade" id="modalEditAkunDekanat" tabindex="-1" role="dialog" aria-labelledby="modalAddAkunDekanatTitle" aria-hidden="true">
	<form action="<?= base_url('dekanat/edit_action') ?>" id="formEditAkunDekanat" method="post">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalAddAkunDekanatTitle">Tambah Akun Dekanat</h5>
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
					<input type="hidden" name="id_dekanat" id="id_dekanat">
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				</div>
			</div>
		</div>
	</form>
</div>