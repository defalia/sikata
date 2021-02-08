<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-body">
			<?php if ($this->session->flashdata('verif_success')) : ?>
				<div class="alert alert-success alert-dismissible fade show">
					<?php echo $this->session->flashdata('verif_success'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
			<div class="row">
				<div class="col-12">
					<div class="card card-warning">
						<div class="card-header">
							<h4>Data Mahasiswa KP</h4>
						</div>
						<div class="card-body">
							<a href="<?= base_url('dekanat/cetak_pkl') ?>" class="btn btn-sm btn-success">Print</a>
							<?php $no = 1; ?>
							<div class="table-responsive d-none d-md-block">
								<table class="table table-striped" id="table-1">
									<thead>
										<th>No.</th>
										<th>Nama</th>
										<th>NIM</th>
										<th>SMT/Th. Akademik</th>
										<th>Program Studi</th>
										<th>Keterangan</th>
										<th>Nomor SK</th>
									</thead>
									<tbody>
										<?php foreach ($registrasi as $key) : ?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $key['nama_mhs'] ?></td>
												<td><?php echo $key['nim_mhs'] ?></td>
												<td><?php echo $key['tahun'] ?></td>
												<td><?php echo $key['nama_prodi'] ?></td>
												<td>
													<span class="badge badge-success">
														<?php echo $key['status_registrasi'] ?>
													</span>
												</td>
												<td>PKL.<?php echo $key['id_registrasi'] ?>/SK/DEK/FT.AK/IV/2019</td>
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
										<?php foreach ($registrasi as $key) : ?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $key['nama_mhs'] ?></td>
												<td>
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDekanatShowRekapKP" data-nim="<?= $key['nim_mhs'] ?>" data-nama="<?= $key['nama_mhs'] ?>" data-tahun="<?= $key['tahun'] ?>" data-prodi="<?= $key['nama_prodi'] ?>" data-id_registrasi="<?= $key['id_registrasi'] ?>" data-keterangan="<?= $key['status_registrasi'] ?>">
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
<!-- MODAL VIEW KP -->
<div class="modal fade" id="modalDekanatShowRekapKP" tabindex="-1" role="dialog" aria-labelledby="modalDekanatShowRekapKPTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalDekanatShowRekapKPTitle">Data Mahasiswa KP</h5>
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
				<p class="mb-0"><b>Program Studi</b></p>
				<p id="prodi"></p>
				<p class="mb-0"><b>Keterangan</b></p>
				<p id="keterangan"></p>
				<p class="mb-0"><b>Nomor SK</b></p>
				<p id="nomor_sk"></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>