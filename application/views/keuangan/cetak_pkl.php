<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h4 class="mt-5 text-center">Rekap Data Mahasiswa Registrasi PKL</h4>
		<?php $no=1; ?>
		<table class="table table-bordered table-striped mt-3">
			<thead class="thead-dark text-center">
				<tr>
					<th scope="col">No.</th>
					<th scope="col">Nama</th>
					<th scope="col">NIM</th>
					<th scope="col">SMT/Th. Akademik</th>
					<th scope="col">Bukti Bayar</th>
					<th scope="col">Tgl Registrasi</th>
					<th scope="col">Keterangan</th>
				</tr>
			</thead>

			<tbody>

				<?php foreach ($registrasi_a as $key): ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $key['nama_mhs'] ?></td>
						<td><?php echo $key['nim_mhs'] ?></td>
						<td class="text-center"><?php echo $key['tahun'] ?></td>
						<td><a href="<?php echo base_url(); ?>/assets/img/<?php echo $key['bukti_bayar'] ?>"><?php echo $key['bukti_bayar'] ?></a></td>
						<td><?php echo $key['tanggal_registrasi'] ?></td>
						<td><?php echo $key['status_registrasi'] ?></td>
					</tr>
					<?php $no++; ?>
				<?php endforeach ?>
				<?php foreach ($registrasi_b as $key): ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $key['nama_mhs'] ?></td>
						<td><?php echo $key['nim_mhs'] ?></td>
						<td class="text-center"><?php echo $key['tahun'] ?></td>
						<td><a href="<?php echo base_url(); ?>/assets/img/<?php echo $key['bukti_bayar'] ?>"><?php echo $key['bukti_bayar'] ?></a></td>
						<td><?php echo $key['tanggal_registrasi'] ?></td>
						<td><?php echo $key['status_registrasi'] ?></td>
					</tr>
					<?php $no++; ?>
				<?php endforeach ?>
				<?php foreach ($registrasi_c as $key): ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $key['nama_mhs'] ?></td>
						<td><?php echo $key['nim_mhs'] ?></td>
						<td class="text-center"><?php echo $key['tahun'] ?></td>
						<td><a href=""><?php echo $key['bukti_bayar'] ?></a></td>
						<td><?php echo $key['tanggal_registrasi'] ?></td>
						<td><?php echo $key['status_registrasi'] ?></td>
					</tr>
					<?php $no++; ?>
				<?php endforeach ?>

			</tbody>
		</table>
	</div>

<script>
	window.print();
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>