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
							<h4>Data Mahasiswa TA</h4>
						</div>
						<div class="card-body">
							<a class="btn btn-success btn-sm text-center m-1" href="<?php echo base_url() ?>kaprodi/cetak_ta" target="_BLANK">Print</a>
							<?php $no = 1; ?>
							<div class="table-responsive d-none d-md-block">
								<table class="table table-striped" id="table-1">
									<thead class="text">
										<th>No.</th>
										<th>Nama</th>
										<th>NIM</th>
										<th>SMT/Th. Akademik</th>
										<th>Monitoring Nilai</th>
										<th>Dosen Pembimbing 1</th>
										<th>Dosen Pembimbing 2</th>
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
												<td><?php echo $key['nama_dosbim1'] ?></td>
												<td><?php echo $key['nama_dosbim2'] ?></td>
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
												<td><?php echo $key['nama_dosbim1'] ?></td>
												<td><?php echo $key['nama_dosbim2'] ?></td>
												<td><span class="badge badge-success"><?= $key['status_registrasi'] ?></span></td>
												<td>TA.<?php echo $key['id_registrasi'] ?>/SK/DEK/FT.AK/IV/2019</td>
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
												<td><?php echo $key['nama_dosbim1'] ?></td>
												<td><?php echo $key['nama_dosbim2'] ?></td>
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
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKaprodiShowRekapTA" data-nim="<?= $key['nim_mhs'] ?>" data-nama="<?= $key['nama_mhs'] ?>" data-tahun="<?= $key['tahun'] ?>" data-monitoring="<?= $key['monitoring'] ?>" data-nama_dosbim1="<?= $key['nama_dosbim1'] ?>" data-nama_dosbim2="<?= $key['nama_dosbim2'] ?>" data-keterangan="<?= $key['status_registrasi'] ?>" data-id_registrasi="<?= $key['id_registrasi'] ?>">
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
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKaprodiShowRekapTA" data-nim="<?= $key['nim_mhs'] ?>" data-nama="<?= $key['nama_mhs'] ?>" data-tahun="<?= $key['tahun'] ?>" data-monitoring="<?= $key['monitoring'] ?>" data-nama_dosbim1="<?= $key['nama_dosbim1'] ?>" data-nama_dosbim2="<?= $key['nama_dosbim2'] ?>" data-keterangan="<?= $key['status_registrasi'] ?>" data-id_registrasi="<?= $key['id_registrasi'] ?>">
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
													<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKaprodiShowRekapTA" data-nim="<?= $key['nim_mhs'] ?>" data-nama="<?= $key['nama_mhs'] ?>" data-tahun="<?= $key['tahun'] ?>" data-monitoring="<?= $key['monitoring'] ?>" data-nama_dosbim1="<?= $key['nama_dosbim1'] ?>" data-nama_dosbim2="<?= $key['nama_dosbim2'] ?>" data-keterangan="<?= $key['status_registrasi'] ?>" data-id_registrasi="<?= $key['id_registrasi'] ?>">
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
<div class="modal fade" id="modalKaprodiShowRekapTA" tabindex="-1" role="dialog" aria-labelledby="modalKaprodiShowRekapTATitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalKaprodiShowRekapTATitle">Data Mahasiswa TA</h5>
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
				<p class="mb-0 mt-3"><b>Dosen Pembimbing 1</b></p>
				<p id="nama_dosbim1"></p>
				<p class="mb-0 mt-3"><b>Dosen Pembimbing 2</b></p>
				<p id="nama_dosbim2"></p>
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
<?php $no = 1; ?>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header card-header-primary">
				<h4>Data Mahasiswa TA</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table" id="myTable">
						<thead class="text">
							<th scope="col">No.</th>
							<th scope="col">Nama</th>
							<th scope="col">NIM</th>
							<th scope="col">SMT/Th. Akademik</th>
							<th scope="col">Dosen Pembimbing 1 Terpilih</th>
							<th scope="col">Dosen Pembimbing 2 Terpilih</th>
							<th scope="col">Keterangan</th>
							<th scope="col">Nomor SK</th>
						</thead>
						<tbody>
							<?php foreach ($registrasi_b as $key) : ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $key['nama_mhs'] ?></td>
									<td><?php echo $key['nim_mhs'] ?></td>
									<td class="text-center"><?php echo $key['tahun'] ?></td>
									<td><?php echo $key['nama_dosbim1'] ?></td>
									<td><?php echo $key['nama_dosbim2'] ?></td>
									<td><?php echo $key['status_registrasi'] ?></td>
									<td></td>
								</tr>
								<?php $no++; ?>
							<?php endforeach ?>
							<?php foreach ($registrasi_c as $key) : ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $key['nama_mhs'] ?></td>
									<td><?php echo $key['nim_mhs'] ?></td>
									<td class="text-center"><?php echo $key['tahun'] ?></td>
									<td><?php echo $key['nama_dosbim1'] ?></td>
									<td><?php echo $key['nama_dosbim2'] ?></td>
									<td><?php echo $key['status_registrasi'] ?></td>
									<td>TA.<?php echo $key['id_registrasi'] ?>/SK/DEK/FT.AK/IV/2019</td>
								</tr>
								<?php $no++; ?>
							<?php endforeach ?>
							<?php foreach ($registrasi_d as $key) : ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $key['nama_mhs'] ?></td>
									<td><?php echo $key['nim_mhs'] ?></td>
									<td class="text-center"><?php echo $key['tahun'] ?></td>
									<td><?php echo $key['nama_dosbim1'] ?></td>
									<td><?php echo $key['nama_dosbim2'] ?></td>
									<td><?php echo $key['status_registrasi'] ?></td>
									<td></td>
								</tr>
								<?php $no++; ?>
							<?php endforeach ?>
						</tbody>
					</table>
					<a class="btn btn-success btn-sm text-center m-1" href="<?php echo base_url() ?>kaprodi/cetak_ta" target="_BLANK">Print</a>
				</div>
			</div>
		</div>
	</div>
</div>