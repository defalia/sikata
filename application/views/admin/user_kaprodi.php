<!-- Main Content -->
<?php $no = 1; ?>
<div class="main-content">
	<section class="section">
		<div class="section-body">
			<?php if ($this->session->flashdata('success_alert') != NULL) :  ?>
				<div class="alert alert-success alert-dismissible fade show">
					<?php echo $this->session->flashdata('success_alert'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
			<?php if ($this->session->flashdata('error_alert') != NULL) :  ?>
				<div class="alert alert-danger alert-dismissible fade show">
					<?php echo $this->session->flashdata('error_alert'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
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
							<h4>Data Akun Kaprodi</h4>
						</div>
						<div class="card-body">
							<div class="text-right mb-2">
								<button class="btn btn-primary rounded-circle" data-toggle="modal" data-target="#modalAddAkunKaprodi"><i class="fas fa-plus"></i></button>
							</div>
							<table class="table table-striped" id="table-1">
								<thead>
									<tr>
										<th>Username</th>
										<th>Password</th>
										<th>Nama</th>
										<th>Program Studi</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($account as $a) : ?>
										<tr>
											<td><?php echo $a['username'] ?></td>
											<td><?php echo $a['password'] ?></td>
											<td><?php echo $a['nama_kaprodi'] ?></td>
											<td><?php echo $a['nama_prodi'] ?></td>
											<td>
												<a class="btn btn-danger btn-sm text-white" onclick="return confirm('Data Akan Dihapus?')" href="<?php echo base_url() ?>kaprodi/delete/<?php echo $a['id_kaprodi'] ?>">
													<i class="fas fa-trash"></i>
												</a>
												<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalEditAkunKaprodi" data-username="<?= $a['username'] ?>" data-password="<?= $a['password'] ?>" data-nama_kaprodi="<?= $a['nama_kaprodi'] ?>" data-nama_prodi="<?= $a['nama_prodi'] ?>" data-id_kaprodi="<?= $a['id_kaprodi'] ?>">
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
<div class="modal fade" id="modalAddAkunKaprodi" tabindex="-1" role="dialog" aria-labelledby="modalAddAkunKaprodiTitle" aria-hidden="true">
	<form action="<?= base_url('kaprodi/register_action') ?>" method="post">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalAddAkunKaprodiTitle">Tambah Akun Kaprodi</h5>
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
					<div class="form-group">
						<label for="nama_kaprodi">Nama Kaprodi</label>
						<input type="text" name="nama_kaprodi" id="nama_kaprodi" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama_prodi">Program Studi</label>
						<select name="nama_prodi" id="nama_prodi" class="form-control" required>
							<option value="">Pilih Program Studi</option>
							<?php foreach ($prodi as $p) : ?>
								<option value="<?= $p['nama_prodi'] ?>"><?= $p['nama_prodi'] ?></option>
							<?php endforeach; ?>
						</select>
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
<div class="modal fade" id="modalEditAkunKaprodi" tabindex="-1" role="dialog" aria-labelledby="modalAddAkunKaprodiTitle" aria-hidden="true">
	<form action="<?= base_url('kaprodi/edit_action') ?>" id="formEditAkunKaprodi" method="post">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalAddAkunKaprodiTitle">Tambah Akun Kaprodi</h5>
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
					<div class="form-group">
						<label for="nama_kaprodi">Nama Kaprodi</label>
						<input type="text" name="nama_kaprodi" id="nama_kaprodi" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama_prodi">Program Studi</label>
						<select name="nama_prodi" id="nama_prodi" class="form-control" required>
							<option value="">Pilih Program Studi</option>
							<?php foreach ($prodi as $p) : ?>
								<option value="<?= $p['nama_prodi'] ?>"><?= $p['nama_prodi'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<input type="hidden" name="id_kaprodi" id="id_kaprodi">
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				</div>
			</div>
		</div>
	</form>
</div>