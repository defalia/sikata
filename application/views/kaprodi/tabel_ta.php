<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card card-info">
						<div class="card-header">
							<h4>Data Mahasiswa TA</h4>
						</div>
						<div class="card-body">
							<?php $no = 1; ?>
							<div class="table-responsive d-none d-md-block">
								<table class="table table-striped" id="table-1">
									<thead class="text">
										<th>No.</th>
										<th>Nama</th>
										<th>NIM</th>
										<th>SMT/Th. Akademik</th>
										<th>Rencana Judul</th>
										<th>Monitoring Nilai</th>
										<th>Dosen Pembimbing</th>
										<th></th>
									</thead>
									<tbody>
										<?php foreach ($registrasi_ta as $key) : ?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $key['nama_mhs'] ?></td>
												<td><?php echo $key['nim_mhs'] ?></td>
												<td><?php echo $key['tahun'] ?></td>
												<td><?php echo $key['judul_ta'] ?></td>
												<td>
													<a href="<?php echo base_url(); ?>assets/img/<?php echo $key['monitoring'] ?>" target="_blank">
														<?php echo $key['monitoring'] ?>
													</a>
												</td>
												<form action="<?php echo base_url('kaprodi/verif_kap_ta') ?>" onsubmit="return confirm('Data Akan Diverifikasi?');" method="POST">
													<td>
														<select name="nama_dosbim1" id="nama_dosbim1" class="form-control mb-2" required>
															<option value="">Pilih Dosen Pembimbing 1</option>
															<?php foreach ($dosen as $d) : ?>
																<option value="<?= $d['nama_dosen'] ?>" <?= $d['nama_dosen'] == $key['nama_dosbim1'] ? 'selected' : '' ?>><?= $d['nama_dosen'] ?></option>
															<?php endforeach; ?>
														</select>
														<select name="nama_dosbim2" id="nama_dosbim2" class="form-control" required>
															<option value="">Pilih Dosen Pembimbing 2</option>
															<?php foreach ($dosen as $d) : ?>
																<option value="<?= $d['nama_dosen'] ?>"><?= $d['nama_dosen'] ?></option>
															<?php endforeach; ?>
														</select>
													</td>
													<td class="text-center">
														<input type="hidden" name="id_registrasi" value="<?php echo $key['id_registrasi'] ?>">
														<button type="submit" class="btn btn-success btn-sm w-100">
															<i class="fas fa-check"></i>
														</button>
												</form>
												<button class="btn btn-danger btn-sm mt-1 w-100" data-toggle="modal" data-target="#modalKaprodiBatalTA" data-id_registrasi="<?= $key['id_registrasi'] ?>">
													<i class="fas fa-times"></i>
												</button>
												</td>
											</tr>
											<?php $no++; ?>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
							<?php $no = 1; ?>
							<div class="d-block d-md-none">
								<table class="table table-striped" id="table-1">
									<thead>
										<tr>
											<th>No</th>
											<th>NIM</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($registrasi_ta as $key) : ?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $key['nama_mhs'] ?></td>
												<td>
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKaprodiShowDataTA" data-nim="<?= $key['nim_mhs'] ?>" data-nama="<?= $key['nama_mhs'] ?>" data-tahun="<?= $key['tahun'] ?>" data-monitoring="<?= $key['monitoring'] ?>" data-judul_ta="<?= $key['judul_ta'] ?>" data-keterangan="<?= $key['status_registrasi'] ?>" data-id_registrasi="<?= $key['id_registrasi'] ?>" data-nama_dosbim1="<?= $key['nama_dosbim1'] ?>">
														<i class="fas fa-eye"></i>
													</button>
												</td>
											</tr>
											<?php $no++; ?>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- MODAL VIEW TA -->
<div class="modal fade" id="modalKaprodiShowDataTA" tabindex="-1" role="dialog" aria-labelledby="modalKaprodiShowDataTATitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalKaprodiShowDataTATitle">Data Mahasiswa TA</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="mb-0"><b>Nama</b></p>
				<p id="nama"></p>
				<p class="mb-0"><b>NIM</b></p>
				<p id="nim"></p>
				<p class="mb-0"><b>SMT/Tahun Ajaran</b></p>
				<p id="tahun"></p>
				<p class="mb-0 mt-3"><b>Rencana Judul</b></p>
				<p id="judul_pkl"></p>
				<p class="mb-0"><b>Monitoring</b></p>
				<a id="monitoring" target="_blank"></a>
				<p class="mb-0"><b>Aksi</b></p>
				<form id="form-setuju" action="<?php echo base_url('kaprodi/verif_kap_ta') ?>" onsubmit="return confirm('Data Akan Diverifikasi?');" method="POST">
					<td>
						<select name="nama_dosbim1" id="nama_dosbim1" class="form-control mb-2" required>
							<option value="">Pilih Dosen Pembimbing 1</option>
							<?php foreach ($dosen as $d) : ?>
								<option value="<?= $d['nama_dosen'] ?>" <?= $d['nama_dosen'] == $key['nama_dosbim1'] ? 'selected' : '' ?>><?= $d['nama_dosen'] ?></option>
							<?php endforeach; ?>
						</select>
						<select name="nama_dosbim2" id="nama_dosbim2" class="form-control" required>
							<option value="">Pilih Dosen Pembimbing 2</option>
							<?php foreach ($dosen as $d) : ?>
								<option value="<?= $d['nama_dosen'] ?>"><?= $d['nama_dosen'] ?></option>
							<?php endforeach; ?>
						</select>
					</td>
					<td class="text-center">
						<input type="hidden" name="id_registrasi" id="id_registrasi" value="<?php echo $key['id_registrasi'] ?>">
						<button type="submit" class="btn btn-success btn-sm" style="width:4rem">
							<i class="fas fa-check"></i>
						</button>
				</form>
				<form action="<?= base_url('kaprodi/batal_kap_ta') ?>" class="d-none" id="form-batal" method="POST">
					<div class="form-group">
						<label for="alasan_batal">Alasan Pembatalan</label>
						<input type="text" name="alasan_batal" class="form-control" placeholder="Alasan Pembatalan" id="alasan_batal" required>
					</div>
					<input type="hidden" name="id_registrasi" id="id_registrasi_batal">
					<button type="submit" class="btn btn-danger btn-sm" style="width:4rem"><i class="fas fa-times"></i></button>
					<button type="button" class="btn btn-secondary btn-sm" style="width:4rem" onclick="cancelBatalRegistrasi()">Cancel</button>
				</form>
				<button class="btn btn-danger btn-sm" style="width:4rem" id="button-batal"><i class="fas fa-times" onclick="batalRegistrasi()"></i></button>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalKaprodiBatalTA" role="dialog">
	<div class="modal-dialog">
		<?php echo form_open('kaprodi/batal_kap_ta'); ?>
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="alasan_batal">Alasan Batal</label>
					<input class="form-control" type="text" name="alasan_batal" placeholder="Alasan Pembatalan" pattern="[A-Za-z].{2,100}" required>
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" name="id_registrasi" id="id_registrasi">
				<button type="submit" class="btn btn-success">Kirim</button>
			</div>
		</div>
		</form>
	</div>
</div>

<script>
	const batalRegistrasi = () => {
		document.getElementById('form-batal').classList.remove('d-none');
		document.getElementById('button-batal').classList.add('d-none');
		document.getElementById('form-setuju').classList.add('d-none');
	}

	const cancelBatalRegistrasi = () => {
		document.getElementById('form-batal').classList.add('d-none');
		document.getElementById('alasan_batal').value = null;
		document.getElementById('button-batal').classList.remove('d-none');
		document.getElementById('form-setuju').classList.remove('d-none');
	}
</script>