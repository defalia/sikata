<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Status Surat Mahasiswa</title>
	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?= base_url('assets/css/app.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/bundles/datatables/datatables.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') ?>">
	<!-- Template CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/components.css') ?>">
	<!-- Custom style CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
	<link rel='shortcut icon' type='image/x-icon' href='<?= base_url('assets/img/favicon.ico') ?>' />
</head>

<body>
	<div class="loader"></div>
	<div id="app">
		<section class="section">
			<div class="container mt-5">
				<div class="row">
					<div class="col-10 mx-auto">
						<h1 class="text-center">SiKaTa</h1>
						<p class="text-center d-lg-none">
							Sistem Informasi Kerja Praktek dan Tugas Akhir
							<br>
							Fakultas Teknik Universitas Krisnadwipayana
						</p>
						<div class="login-brand d-none d-lg-block">
							"Sistem Informasi Kerja Praktek dan Tugas Akhir"
							<br>
							Fakultas Teknik Universitas Krisnadwipayana
						</div>
						<ol class="breadcrumb bg-transparent">
							<li class="breadcrumb-item"><a href="<?= base_url() ?>" class="text-dark">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Cek Status</li>
						</ol>
						<div class="card card-info">
							<div class="card-header">
								Status Surat Mahasiswa PKL
							</div>
							<div class="card-body my-3">
								<div class="d-none d-md-block">
									<table class="table">
										<thead>
											<tr>
												<th>Nama</th>
												<th>NIM</th>
												<th>Prodi</th>
												<th>Status</th>
												<th>Keterangan</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($registrasi as $r) : ?>
												<tr>
													<td><?php echo $r['nama_mhs'] ?></td>
													<td><?php echo $r['nim_mhs'] ?></td>
													<td><?php echo $r['nama_prodi'] ?></td>
													<td>
														<?php if ($r['status_registrasi'] == 'Dibatalkan') : ?>
															<span class="badge badge-danger">
																<?php echo $r['status_registrasi'] ?>
															</span>
														<?php elseif ($r['status_registrasi'] == '') : ?>
															<badge class="badge badge-warning">
																Sedang Diverifikasi
															</badge>
														<?php else : ?>
															<span class="badge badge-success">
																<?php echo $r['status_registrasi'] ?>
															</span>
														<?php endif; ?>
													</td>
													<td>
														<?php echo $r['alasan_batal'] ?>
														<?php if ($r['status_registrasi'] == 'Telah disetujui oleh Dekan. Surat dapat dicetak') : ?>
															<a class="btn btn-success btn-sm text-center m-1" href="<?php echo base_url() ?>home/surat/<?php echo $r['id_registrasi'] ?>" target="_BLANK"><i class="fas fa-print"></i></a>
														<?php endif; ?>
													</td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="d-block d-md-none">
									<table class="table">
										<thead>
											<tr>
												<th>Nama</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($registrasi as $r) : ?>
												<tr>
													<td><?php echo $r['nama_mhs'] ?></td>
													<td> <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalStatusKP" data-nama_mhs="<?= $r['nama_mhs'] ?>" data-nim_mhs="<?= $r['nim_mhs'] ?>" data-nama_prodi="<?= $r['nama_prodi'] ?>" data-status_registrasi="<?= $r['status_registrasi'] ?>" data-alasan_batal="<?= $r['alasan_batal'] ?>"><i class="fas fa-eye"></i></button>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="card card-warning">
							<div class="card-header">
								Status Surat Mahasiswa TA
							</div>
							<div class="card-body my-3">
								<div class="d-none d-md-block">
									<table class="table">
										<thead>
											<tr>
												<th>Nama</th>
												<th>NIM</th>
												<th>Prodi</th>
												<th>Status</th>
												<th>Keterangan</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($registrasi_ta as $r) : ?>
												<tr>
													<td><?php echo $r['nama_mhs'] ?></td>
													<td><?php echo $r['nim_mhs'] ?></td>
													<td><?php echo $r['nama_prodi'] ?></td>
													<td>
														<?php if ($r['status_registrasi'] == 'Dibatalkan') : ?>
															<span class="badge badge-danger">
																<?php echo $r['status_registrasi'] ?>
															</span>
														<?php elseif ($r['status_registrasi'] == '') : ?>
															<badge class="badge badge-warning">
																Sedang Diverifikasi
															</badge>
														<?php else : ?>
															<span class="badge badge-success">
																<?php echo $r['status_registrasi'] ?>
															</span>
														<?php endif; ?>
													</td>
													<td>
														<?php echo $r['alasan_batal'] ?>
														<?php if ($r['status_registrasi'] == 'Telah disetujui oleh Dekan. Surat dapat dicetak') : ?>
															<a class="btn btn-success btn-sm text-center m-1" href="<?php echo base_url() ?>home/surat_ta/<?php echo $r['id_registrasi'] ?>" target="_BLANK"><i class="fas fa-print"></i></a>
														<?php endif; ?>
													</td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="d-block d-md-none">
									<table class="table">
										<thead>
											<tr>
												<th>Nama</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($registrasi_ta as $r) : ?>
												<tr>
													<td><?php echo $r['nama_mhs'] ?></td>
													<td> <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalStatusTA" data-nama_mhs="<?= $r['nama_mhs'] ?>" data-nim_mhs="<?= $r['nim_mhs'] ?>" data-nama_prodi="<?= $r['nama_prodi'] ?>" data-status_registrasi="<?= $r['status_registrasi'] ?>" data-alasan_batal="<?= $r['alasan_batal'] ?>" data-id_registrasi="<?= $r['id_registrasi'] ?>"> <i class="fas fa-eye"></i></button>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="card card-success">
							<div class="card-header">
								Status Surat Jurnal TA
							</div>
							<div class="card-body my-3">
								<div class="d-none d-md-block">
									<table class="table">
										<thead>
											<tr>
												<th>Judul</th>
												<th>Status</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($jurnal as $j) : ?>
												<tr>
													<td><?php echo $j['judul'] ?></td>
													<td>
														<?php if ($j['status'] == '') : ?>
															<span class="badge badge-warning"><?= $j['status'] ?></span>
														<?php else : ?>
															<span class="badge badge-success"><?= $j['status'] ?></span>
														<?php endif; ?>
													</td>
													<td>
														<a href="<?= base_url('assets/uploads/jurnal/') . $j['file_jurnal'] ?>" class="btn btn-sm btn-primary" target="_blank"><i class="fas fa-eye"></i></a>
													</td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="d-block d-md-none">
									<table class="table">
										<thead>
											<tr>
												<th>Judul</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($jurnal as $j) : ?>
												<tr>
													<td><?= $j['judul'] ?></td>
													<td> <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalStatusJurnal" data-judul="<?= $j['judul'] ?>" data-status="<?= $j['status'] ?>" data-file_jurnal="<?= $j['file_jurnal'] ?>">
															<i class="fas fa-eye"></i>
														</button>
													</td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="simple-footer">
							Copyright &copy; SIKATA <?= date('Y') ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- MODAL VIEW STATUS KP -->
	<div class="modal fade" id="modalStatusKP" tabindex="-1" role="dialog" aria-labelledby="modalStatusKPTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalStatusKPTitle">Status Jurnal</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p class="mb-0"><b>Nama Mahasiswa</b></p>
					<p id="nama_mhs"></p>
					<p class="mb-0"><b>NIM Mahasiswa</b></p>
					<p id="nim_mhs"></p>
					<p class="mb-0"><b>Nama Prodi</b></p>
					<p id="nama_prodi"></p>
					<p class="mb-0"><b>Status</b></p>
					<p id="status_registrasi"></p>
					<p class="mb-0"><b>Keterangan</b></p>
					<p id="keterangan"></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- MODAL VIEW STATUS TA -->
	<div class="modal fade" id="modalStatusTA" tabindex="-1" role="dialog" aria-labelledby="modalStatusTATitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalStatusTATitle">Status Jurnal</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p class="mb-0"><b>Nama Mahasiswa</b></p>
					<p id="nama_mhs"></p>
					<p class="mb-0"><b>NIM Mahasiswa</b></p>
					<p id="nim_mhs"></p>
					<p class="mb-0"><b>Nama Prodi</b></p>
					<p id="nama_prodi"></p>
					<p class="mb-0"><b>Status</b></p>
					<p id="status_registrasi"></p>
					<p class="mb-0"><b>Keterangan</b></p>
					<div id="keterangan"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- MODAL VIEW STATUS JURNAL -->
	<div class="modal fade" id="modalStatusJurnal" tabindex="-1" role="dialog" aria-labelledby="modalStatusJurnalTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalStatusJurnalTitle">Status Jurnal</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p class="mb-0"><b>Judul</b></p>
					<p id="judul"></p>
					<p class="mb-0"><b>Status</b></p>
					<p id="status"></p>
					<p class="mb-0"><b>File Jurnal</b></p>
					<a class="btn btn-primary text-white" target="_blank" style="width: 4rem" id="file_jurnal"><i class="fas fa-eye"></i></a>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- General JS Scripts -->
	<script src="<?= base_url('assets/js/app.min.js') ?>"></script>
	<!-- JS Libraies -->
	<script src="<?= base_url('assets/bundles/datatables/datatables.min.js') ?>"></script>
	<script src="<?= base_url('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') ?>"></script>
	<script src="<?= base_url('assets/bundles/jquery-ui/jquery-ui.min.js') ?>"></script>
	<!-- Page Specific JS File -->
	<script src="<?= base_url('assets/js/page/datatables.js') ?>"></script>
	<!-- Template JS File -->
	<script src="<?= base_url('assets/js/scripts.js') ?>"></script>
	<!-- Custom JS File -->
	<script src="<?= base_url('assets/js/custom.js') ?>"></script>
	<script>
		$(document).ready(function() {
			$('table').DataTable();
		});
	</script>
	<script>
		// SHOW KP
		$("#modalStatusKP").on("show.bs.modal", function(event) {
			let button = $(event.relatedTarget);
			let nama_mhs = button.data("nama_mhs");
			let nim_mhs = button.data("nim_mhs");
			let nama_prodi = button.data("nama_prodi");
			let status_registrasi = button.data("status_registrasi");
			let alasan_batal = button.data("alasan_batal");

			let modal = $(this);
			modal.find("#nama_mhs").text(nama_mhs);
			modal.find("#nim_mhs").text(nim_mhs);
			modal.find("#nama_prodi").text(nama_prodi);
			modal.find("#status_registrasi").text(status_registrasi);
			switch (status_registrasi) {
				case 'Dibatalkan':
					modal.find("#status_registrasi").removeClass("badge badge-success").addClass("badge badge-danger");
					break;
				default:
					modal.find("#status_registrasi").removeClass("badge badge-danger").addClass("badge badge-success");
					break;
			}
			modal.find("#alasan_batal").text(alasan_batal);
		});

		// SHOW TA
		$("#modalStatusTA").on("show.bs.modal", function(event) {
			let button = $(event.relatedTarget);
			let nama_mhs = button.data("nama_mhs");
			let nim_mhs = button.data("nim_mhs");
			let nama_prodi = button.data("nama_prodi");
			let status_registrasi = button.data("status_registrasi");
			let alasan_batal = button.data("alasan_batal");
			let id_registrasi = button.data("id_registrasi");

			let modal = $(this);
			modal.find("#nama_mhs").text(nama_mhs);
			modal.find("#nim_mhs").text(nim_mhs);
			modal.find("#nama_prodi").text(nama_prodi);
			modal.find("#status_registrasi").text(status_registrasi);
			switch (status_registrasi) {
				case 'Dibatalkan':
					modal.find("#status_registrasi").removeClass("badge badge-success").addClass("badge badge-danger");
					modal.find("#keterangan").text(alasan_batal);
					break;
				case 'Telah disetujui oleh Dekan. Surat dapat dicetak':
					modal.find("#status_registrasi").removeClass("badge badge-danger").addClass("badge badge-success");
					button = $(`<a target="_blank" href='<?= base_url('home/surat/') ?>${id_registrasi}' class='btn btn-success text-white'><i class='fas fa-print'></></a>`);
					modal.find('#keterangan').html(button);
					break;
				default:
					modal.find("#status_registrasi").removeClass("badge badge-danger").addClass("badge badge-success");
					break;
			}
		});

		// SHOW JURNAL
		$("#modalStatusJurnal").on("show.bs.modal", function(event) {
			let button = $(event.relatedTarget);
			let judul = button.data("judul");
			let status = button.data("status");
			let file_jurnal = button.data("file_jurnal");

			let modal = $(this);
			modal.find("#judul").text(judul);
			modal.find("#status").text(status);
			switch (status_registrasi) {
				case 'Dibatalkan':
					modal.find("#status").removeClass("badge badge-success").addClass("badge badge-danger");
					break;
				default:
					modal.find("#status").removeClass("badge badge-danger").addClass("badge badge-success");
					break;
			}
			modal
				.find("#file_jurnal")
				.attr("href", "<?= base_url('assets/uploads/jurnal/') ?>" + file_jurnal);
		});
	</script>
</body>

</html>