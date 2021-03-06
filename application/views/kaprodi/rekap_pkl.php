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
					<div class="card card-success">
						<div class="card-header">
							<h4>Data Mahasiswa PKL</h4>
						</div>
						<div class="card-body">
							<a class="btn btn-success btn-sm text-center m-1" href="<?php echo base_url() ?>kaprodi/cetak_pkl" target="_BLANK">Print</a>
							<?php $no = 1; ?>
							<div class="table-responsive d-none d-md-block">
								<table class="table table-striped" id="table-1">
									<thead class="text">
										<th>No.</th>
										<th>Nama</th>
										<th>NIM</th>
										<th>SMT/Th. Akademik</th>
										<th>Monitoring Nilai</th>
										<th>Dosen Pembimbing Terpilih</th>
										<th>Keterangan</th>
										<th>Nomor SK</th>
									</thead>
									<tbody>
										<?php foreach ($registrasi_b as $key) : ?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $key['nama_mhs'] ?></td>
												<td><?php echo $key['nim_mhs'] ?></td>
												<td><?php echo $key['tahun'] ?></td>
												<td>
													<a href="<?php echo base_url(); ?>assets/img/<?php echo $key['monitoring'] ?>" target="_blank">
														<?php echo $key['monitoring'] ?>
													</a>
												</td>
												<td><?php echo $key['nama_dosbim'] ?></td>
												<td><span class="badge badge-success"><?= $key['status_registrasi'] ?></span></td>
												<td></td>
											</tr>
											<?php $no++; ?>
										<?php endforeach ?>
										<?php foreach ($registrasi_c as $key) : ?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $key['nama_mhs'] ?></td>
												<td><?php echo $key['nim_mhs'] ?></td>
												<td><?php echo $key['tahun'] ?></td>
												<td>
													<a href="<?php echo base_url(); ?>assets/img/<?php echo $key['monitoring'] ?>" target="_blank">
														<?php echo $key['monitoring'] ?>
													</a>
												</td>
												<td><?php echo $key['nama_dosbim'] ?></td>
												<td><span class="badge badge-success"><?= $key['status_registrasi'] ?></span></td>
												<td>PKL.<?php echo $key['id_registrasi'] ?>/SK/DEK/FT.AK/IV/2019</td>
											</tr>
											<?php $no++; ?>
										<?php endforeach ?>
										<?php foreach ($registrasi_d as $key) : ?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $key['nama_mhs'] ?></td>
												<td><?php echo $key['nim_mhs'] ?></td>
												<td class="text-center"><?php echo $key['tahun'] ?></td>
												<td>
													<a href="<?php echo base_url(); ?>assets/img/<?php echo $key['monitoring'] ?>"><?php echo $key['monitoring'] ?></a>
												</td>
												<td><?php echo $key['nama_dosbim'] ?></td>
												<td><span class="badge badge-danger"><?= $key['status_registrasi'] ?></span></td>
												<td></td>
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
										<?php foreach ($registrasi_b as $key) : ?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $key['nama_mhs'] ?></td>
												<td>
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKaprodiShowRekapKP" data-nim="<?= $key['nim_mhs'] ?>" data-nama="<?= $key['nama_mhs'] ?>" data-tahun="<?= $key['tahun'] ?>" data-monitoring="<?= $key['monitoring'] ?>" data-nama_dosbim="<?= $key['nama_dosbim'] ?>" data-keterangan="<?= $key['status_registrasi'] ?>" data-id_registrasi="<?= $key['id_registrasi'] ?>">
														<i class="fas fa-eye"></i>
													</button>
												</td>
											</tr>
											<?php $no++; ?>
										<?php endforeach ?>
										<?php foreach ($registrasi_c as $key) : ?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $key['nama_mhs'] ?></td>
												<td>
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKaprodiShowRekapKP" data-nim="<?= $key['nim_mhs'] ?>" data-nama="<?= $key['nama_mhs'] ?>" data-tahun="<?= $key['tahun'] ?>" data-monitoring="<?= $key['monitoring'] ?>" data-nama_dosbim="<?= $key['nama_dosbim'] ?>" data-keterangan="<?= $key['status_registrasi'] ?>" data-id_registrasi="<?= $key['id_registrasi'] ?>">
														<i class="fas fa-eye"></i>
													</button>
												</td>
											</tr>
											<?php $no++; ?>
										<?php endforeach ?>
										<?php foreach ($registrasi_d as $key) : ?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $key['nama_mhs'] ?></td>
												<td>
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKaprodiShowRekapKP" data-nim="<?= $key['nim_mhs'] ?>" data-nama="<?= $key['nama_mhs'] ?>" data-tahun="<?= $key['tahun'] ?>" data-monitoring="<?= $key['monitoring'] ?>" data-nama_dosbim="<?= $key['nama_dosbim'] ?>" data-keterangan="<?= $key['status_registrasi'] ?>" data-id_registrasi="<?= $key['id_registrasi'] ?>">
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
<div class="modal fade" id="modalKaprodiShowRekapKP" tabindex="-1" role="dialog" aria-labelledby="modalKaprodiShowRekapKPTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalKaprodiShowRekapKPTitle">Data Mahasiswa PKL</h5>
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
				<p class="mb-0"><b>Monitoring Nilai</b></p>
				<a id="monitoring" target="_blank"></a>
				<p class="mb-0 mt-3"><b>Dosen Pembimbing</b></p>
				<p id="nama_dosbim"></p>
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