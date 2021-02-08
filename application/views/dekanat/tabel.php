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
			<div class="card-header card-header-warning">
				<h4>Data Mahasiswa KP</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table" id="myTable">
						<thead class="text">
							<th scope="col">No.</th>
							<th scope="col">Nama</th>
							<th scope="col">NIM</th>
							<th scope="col">SMT/Th. Akademik</th>
							<th scope="col">Program Studi</th>
							<th scope="col"></th>
						</thead>
						<tbody>
							<?php foreach ($registrasi as $key): ?>
								<tr>
									<td><?php echo $no ?></td>
									<td><?php echo $key['nama_mhs'] ?></td>
									<td><?php echo $key['nim_mhs'] ?></td>
									<td class="text-center"><?php echo $key['tahun'] ?></td>
									<td class="text-center"><?php echo $key['nama_prodi'] ?></td>
									<td class="text-center">
										<form action="<?php echo base_url('dekanat/verif_dek') ?>" onsubmit="return confirm('Data Akan Diverifikasi?');" method="POST">
										<input type="hidden" name="id_registrasi" value="<?php echo $key['id_registrasi'] ?>">
										<button type="submit" class="btn btn-sm btn-success">
											<i class="material-icons">check</i>
										</button>
									</form>
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
		<div class="card-header card-header-warning">
			<h4>Data Mahasiswa TA</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table" id="myTable2">
					<thead class="text">
						<th scope="col">No.</th>
						<th scope="col">Nama</th>
						<th scope="col">NIM</th>
						<th scope="col">SMT/Th. Akademik</th>
						<th scope="col">Program Studi</th>
						<th scope="col"></th>
					</thead>
					<tbody>
						<?php foreach ($registrasi_ta as $key): ?>
							<tr>
								<td><?php echo $no ?></td>
								<td><?php echo $key['nama_mhs'] ?></td>
								<td><?php echo $key['nim_mhs'] ?></td>
								<td class="text-center"><?php echo $key['tahun'] ?></td>
								<td class="text-center"><?php echo $key['nama_prodi'] ?></td>
								<td class="text-center">
									<form action="<?php echo base_url('dekanat/verif_dek_ta') ?>" onsubmit="return confirm('Data Akan Diverifikasi?');" method="POST">
									<input type="hidden" name="id_registrasi" value="<?php echo $key['id_registrasi'] ?>">
									<button type="submit" class="btn btn-sm btn-success">
										<i class="material-icons">check</i>
									</button>
								</form>
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