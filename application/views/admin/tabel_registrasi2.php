<!-- your content here --> 
 <?php $no=1; ?>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header card-header-rose">
				 Data Mahasiswa Registrasi KP
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="myTable" class="table">
						<thead class="text">
							<th scope="col">No.</th>
				 			<th scope="col">Nama</th>
				 			<th scope="col">NIM</th>
				 			<th scope="col">Prodi</th>
				 			<th scope="col">SMT/Th. Akademik</th>
				 			<th scope="col">Bukti Bayar</th>
				 			<th scope="col">Tanggal Registrasi</th>
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
 
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header card-header-rose">
				 Data Mahasiswa Registrasi TA
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="myTable2" class="table">
						<thead class="text">
							<th scope="col">No.</th>
							<th scope="col">Nama</th>
							<th scope="col">NIM</th>
							<th scope="col">Prodi</th>
							<th scope="col">SMT/Th. Akademik</th>
							<th scope="col">Bukti Bayar</th>
							<th scope="col">Tanggal Registrasi</th>
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
									<td scope="col"><?php $key['tanggal_registrasi'] ?></td>
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
