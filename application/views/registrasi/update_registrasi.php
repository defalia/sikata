<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>">
</head>
<body>
	<!-- navbar -->
	<nav class="navbar navbar-light bg-danger">
		<a class="navbar-brand text-light">Registrasi</a>
	</nav>
	<!-- konten -->

	<?php foreach ($registrasi->result() as $key): ?>
		<div class="container mt-4 py-5">
			<form action="<?php echo base_url(); ?>registrasi/action_update/<?php echo $key->id_registrasi ?>" method="post">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input class="form-control" type="name" name="nama_mhs" placeholder="Isi Nama Lengkap" value="<?php echo $key->nama_mhs ?>">
				</div>
				<div class="form-group">
					<label>NIM</label>
					<input class="form-control" type="text" name="nim_mhs" placeholder="NIM" value="<?php echo $key->nim_mhs?>">
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="pilihProdi">Pilih Program Studi</label>
						<select id="pilihProdi" name="nama_prodi" class="form-control">
							<option selected value="<?php echo $key->nama_prodi ?>"><?php echo $key->nama_prodi ?></option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="pilihTahun">SMT / Tahun Akademik</label>
						<select id="pilihTahun" name="tahun" class="form-control">
							<option selected value="<?php echo $key->tahun ?>"><?php echo $key->tahun ?></option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label>Rencana Judul</label>
					<input class="form-control" type="text" name="judul_pkl" placeholder="Judul" value="<?php echo $key->judul_pkl ?>">
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="bukti_bayar">Upload Bukti Pembayaran</label>
						<input type="file" class="form-control-file" name="bukti_bayar">
					</div>
					<div class="form-group col-md-6">
						<label for="monitoring">Upload Monitoring Nilai</label>
						<input type="file" class="form-control-file" name="monitoring">
					</div>
				</div>
				<button type="submit" class="btn btn-primary btn-danger mt-3">Submit</button>
			</form>

		</div>
	<?php endforeach ?>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>