<!DOCTYPE html>
<html>
<head>
	<title>Data Registrasi PKL</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<a href="<?php echo base_url(); ?>registrasi/add">Add</a>
		<table class="table" border="2">
			<thead class="thead-dark text-center">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Nama</th>
					<th scope="col">NIM</th>
					<th scope="col">Judul PKL</th>
					<th scope="col">Prodi</th>
					<th scope="col">Tahun</th>
					<th scope="col">Bukti Bayar</th>
					<th scope="col">Monitoring</th>
					<th scope="col">Tanggal Registrasi</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			
			<tbody>
				<?php foreach ($registrasi->result_array() as $key): ?>
					<tr>
						<td><?php echo $key['id_registrasi'] ?></td>
						<td><?php echo $key['nama_mhs'] ?></td>
						<td><?php echo $key['nim_mhs'] ?></td>
						<td><?php echo $key['judul_pkl'] ?></td>
						<td><?php echo $key['nama_prodi'] ?></td>
						<td><?php echo $key['tahun'] ?></td>
						<td><?php echo $key['bukti_bayar'] ?></td>
						<td><?php echo $key['monitoring'] ?></td>
						<td><?php echo $key['tanggal_registrasi'] ?></td>
						<td>
							<a href="<?php echo base_url(); ?>registrasi/delete/<?php echo $key['id_registrasi'] ?>">Delete</a>
							<a href="<?php echo base_url(); ?>registrasi/update/<?php echo $key['id_registrasi'] ?>">Edit</a>
						</td>
						</tr>
					<?php endforeach ?>	
				</tbody>
			</table>
		</div>

		<!-- script -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>
	</html>