<!DOCTYPE html>
<html>
<head>
	<title>Registrasi PKL</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=2.0.5">
	<style type="text/css">
	body{background-color: #e6f2ff;}
</style>
</head>
<body>
	<!-- navbar -->
	<nav class="navbar navbar-light bg-info">
		<div class="container">
			<a class="navbar-brand text-light" href="<?= base_url() ?>">Registrasi KP</a>			
		</div>
	</nav>
	<!-- konten -->
	<div class="container py-5">
		<?php if($this->session->flashdata('nim_existing') != NULL) :  ?>
			<div class="alert alert-danger alert-dismissible fade show">
				<?php echo $this->session->flashdata('nim_existing'); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
  				</button>
			</div>
		<?php endif; ?>
		<?php if($this->session->flashdata('pilih_prodi') != NULL) :  ?>
			<div class="alert alert-danger alert-dismissible fade show">
				<?php echo $this->session->flashdata('pilih_prodi'); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
  				</button>
			</div>
		<?php endif; ?>
		<?php if($this->session->flashdata('pilih_tahun') != NULL) :  ?>
			<div class="alert alert-danger alert-dismissible fade show">
				<?php echo $this->session->flashdata('pilih_tahun'); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
  				</button>
			</div>
		<?php endif; ?>
		<?php if($this->session->flashdata('bukti_bayar') != NULL) :  ?>
			<div class="alert alert-danger alert-dismissible fade show">
				<?php echo $this->session->flashdata('bukti_bayar'); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
  				</button>
			</div>
		<?php endif; ?>
		<?php if($this->session->flashdata('monitoring') != NULL) :  ?>
			<div class="alert alert-danger alert-dismissible fade show">
				<?php echo $this->session->flashdata('monitoring'); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
  				</button>
			</div>
		<?php endif; ?>
		<form action="<?php echo base_url(); ?>registrasi/action_add" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-4">
					<div class="card shadow">
						<div class="card-header card-header-info">
							<span class="text-lead">Data Pribadi Mahasiswa</span>						
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input class="form-control" type="text" name="nama_mhs" placeholder="Isi Nama Lengkap" required pattern=".{3,50}" >
							</div>
							<div class="form-group">
								<label>NIM</label>
								<input class="form-control" type="text" name="nim_mhs" placeholder="NIM" pattern="[0-9].{10,10}" title="NIM Harus Angka 10 Digit!" required>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card shadow">
						<div class="card-header card-header-info">
							<span class="text-lead">Data Akademik Mahasiswa</span>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="pilihProdi">Pilih Program Studi</label>
								<select id="pilihProdi" name="nama_prodi" class="form-control" required>
									<option selected value="default">Pilih..</option>
									<?php foreach ($prodi as $p) : ?>
										<option value="<?php echo $p['nama_prodi']?>"><?php echo $p['nama_prodi']?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group">
								<label for="pilihTahun">Pilih SMT/Tahun Akademik</label>
								<select id="pilihTahun" name="tahun" class="form-control" required>
									<option selected value="default">Pilih..</option>
									<option value="Genap/2018-2019">Genap/2018-2019</option>
									<option value="Ganjil/2018-2019">Ganjil/2018-2019</option>
								</select>
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card shadow">
						<div class="card-header card-header-info">
							<span class="text-lead">Data Kerja Praktik</span>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Rencana Judul</label>
								<input class="form-control" type="text" name="judul_pkl" placeholder="Judul" required pattern=".{5,200}">
							</div>
							<div class="">
								<label for="bukti_bayar">Upload Bukti Pembayaran</label>
								<input type="file" class="form-control" name="bukti_bayar" required>
								<small>JPG/JPEG/PNG maksimal 1MB</small>
							</div>
							<div class="">
								<label for="monitoring">Upload Monitoring Nilai</label>
								<input type="file" class="form-control" name="monitoring" required>
								<small>JPG/PNG/PDF maksimal 2MB</small>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 mx-auto">
					<button type="submit" class="btn btn-lg btn-block rounded mt-3 btn-info">Submit</button>				
				</div>
			</div>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>