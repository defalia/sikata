
<?php $no=1; ?>		

<div class="row">
	<div class="col-md-12">
		<?php if($this->session->flashdata('verif_success')): ?>
				<div class="alert alert-success alert-dismissible fade show">
					<?php echo $this->session->flashdata('verif_success'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
		<div class="card">
			<div class="card-header card-header-rose">
				<h4>Data Mahasiswa KP</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table" id="myTable">
						<thead class="text">
							<th>No.</th>
							<th>Nama</th>
							<th>NIM</th>
							<th>Prodi</th>
							<th>SMT/Th. Akademik</th>
							<th>Bukti Bayar</th>
							<th>Tanggal Registrasi</th>
							<th></th>
						</thead>
						<tbody>
							<?php foreach ($registrasi as $key): ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $key['nama_mhs'] ?></td>
									<td><?php echo $key['nim_mhs'] ?></td>
									<td><?php echo $key['nama_prodi'] ?></td>
									<td><?php echo $key['tahun'] ?></td>
									<td><a href="<?php echo base_url(); ?>/assets/img/<?php echo $key['bukti_bayar'] ?>"><?php echo $key['bukti_bayar'] ?></a></td>
									<td><?php echo $key['tanggal_registrasi'] ?></td>
									<td class="text-center">
										<form action="<?php echo base_url('keuangan/verif_keu') ?>" onsubmit="return confirm('Data Akan Diverifikasi?');" method="POST">
										<input type="hidden" name="id_registrasi" value="<?php echo $key['id_registrasi'] ?>">
										<button type="submit" class="btn btn-success btn-sm w-100">
											<i class="material-icons">check</i>
										</button>
									</form>
									<button class="btn btn-danger btn-sm mt-1 w-100" data-toggle="modal" data-target="#myModal<?php echo $key['id_registrasi']?>">
										<i class="material-icons">cancel</i>
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
<?php $no=1; ?>
<div class="col-md-12">
	<div class="card">
		<div class="card-header card-header-rose">
			<h4>Data Mahasiswa TA</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table" id="myTable2">
					<thead class="text">
						<th>No.</th>
						<th>Nama</th>
						<th>NIM</th>
						<th>Prodi</th>
						<th>SMT/Th. Akademik</th>
						<th>Bukti Bayar</th>
						<th>Tanggal Registrasi</th>
						<th></th>
					</thead>
					<tbody>
						<?php foreach ($registrasi_ta as $key): ?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $key['nama_mhs'] ?></td>
								<td><?php echo $key['nim_mhs'] ?></td>
								<td><?php echo $key['nama_prodi'] ?></td>
								<td><?php echo $key['tahun'] ?></td>
								<td><a href="<?php echo base_url(); ?>/assets/img/<?php echo $key['bukti_bayar'] ?>"><?php echo $key['bukti_bayar'] ?></a></td>
								<td><?php echo $key['tanggal_registrasi'] ?></td>
								<td class="text-center">
									<form action="<?php echo base_url('keuangan/verif_keu_ta') ?>" onsubmit="return confirm('Data Akan Diverifikasi?');" method="POST">
									<input type="hidden" name="id_registrasi" value="<?php echo $key['id_registrasi'] ?>">
									<button type="submit" class="btn btn-success btn-sm w-100">
											<i class="material-icons">check</i>
										</button>
								</form>
								<button class="btn btn-danger btn-sm mt-1 w-100" data-toggle="modal" data-target="#myModal2<?php echo $key['id_registrasi']?>">
											<i class="material-icons">cancel</i>
									
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

<!-- Modal -->
<?php foreach ($registrasi as $key): ?>
	<div class="modal fade" id="myModal<?php echo $key['id_registrasi']?>" role="dialog">
		<div class="modal-dialog">
			<?php echo form_open('keuangan/batal_keu'); ?>
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"></h4>
				</div>
				<div class="modal-body">
					<input class="form-control" type="text" name="alasan_batal" placeholder="Alasan Pembatalan" pattern="[A-Za-z].{2,100}" required>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="id_registrasi" value="<?php echo $key['id_registrasi']?>">
					<button type="submit" class="btn btn-default">Kirim</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php endforeach; ?>

<?php foreach ($registrasi_ta as $key): ?>
	<div class="modal fade" id="myModal2<?php echo $key['id_registrasi']?>" role="dialog">
		<div class="modal-dialog">
			<?php echo form_open('keuangan/batal_keu_ta'); ?>
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"></h4>
				</div>
				<div class="modal-body">
					<input class="form-control" type="text" name="alasan_batal" placeholder="Alasan Pembatalan" pattern="[A-Za-z].{2,100}" required>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="id_registrasi" value="<?php echo $key['id_registrasi']?>">
					<button type="submit" class="btn btn-default">Kirim</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php endforeach; ?>
