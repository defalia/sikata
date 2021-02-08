<!DOCTYPE html>
<html>
<head>
	<title>Registrasi PKL</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>">
	<style type="text/css">
	body{background-color: #e6f2ff;}
</style>
</head>
<body>
	<!-- navbar -->
	<nav class="navbar navbar-light bg-primary">
		<a class="navbar-brand text-light">Registrasi PKL Perpanjangan</a>
	</nav>
	<!-- konten -->
	<div class="container py-5">
		<div class="text-right">
			<a class="btn btn-primary btn-sm" href="<?php echo base_url() ?>registrasi/add">Kembali</a>
		</div>
		<form action="<?php echo base_url(); ?>registrasi/action_pp_pkl" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Lengkap</label>
				<input class="form-control" type="text" name="nama_mhs" placeholder="Isi Nama Lengkap" required>
			</div>
			<div class="form-group">
				<label>NIM</label>
				<input class="form-control" type="text" name="nim_mhs" placeholder="NIM" pattern=".{10,10}" required title="NIM Harus 10 digit" required>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="pilihProdi">Pilih Program Studi</label>
					<select id="pilihProdi" name="nama_prodi" class="form-control" required>
						<option selected>Pilih..</option>
						<?php foreach ($prodi as $p) : ?>
							<option value="<?php echo $p['nama_prodi']?>"><?php echo $p['nama_prodi']?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="pilihTahun">Pilih SMT/Tahun Akademik</label>
					<select id="pilihTahun" name="tahun" class="form-control" required>
						<option selected>Pilih..</option>
						<option value="Genap/2018-2019">Genap/2018-2019</option>
						<option value="Ganjil/2018-2019">Ganjil/2018-2019</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label>Rencana Judul</label>
				<input class="form-control" type="text" name="judul_pkl" placeholder="Judul" required>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="monitoring">Upload Monitoring Nilai</label>
					<input type="file" class="form-control-file" name="monitoring" required>
					<small>JPG/PNG/PDF maksimal 2MB</small>
				</div>
			</div>
			<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>