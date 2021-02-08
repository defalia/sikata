<!DOCTYPE html>
<html>
<head>
	<title>SISTEM PKL/TA</title>

	<!-- Custom Fonts -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<!-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
-->	<link href="assets/css/stylish-portfolio.min.css" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand"></a>
		<?php echo form_open('home/get_nim','class="form-inline"') ?>
		<input class="form-control mr-sm-2" name="nim_mhs" type="text" placeholder="Masukkan NIM" aria-label="Search" required pattern="[0-9].{9,9}" title="NIM Harus Angka 10 Digit!">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cek Status</button>
		<?php echo form_close() ?>
	</nav>
	<header class="masthead d-flex">
		<div class="container text-center my-auto">
			<?php if($this->session->flashdata('registrasi_success')): ?>
				<div class="alert alert-success alert-dismissible fade show">
					<?php echo $this->session->flashdata('registrasi_success'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
			<h1 class="">SiKaTa</h1>
			<h3 class="">
				<p>"Sistem Informasi Kerja Praktek dan Tugas Akhir" <br/>
					Fakultas Teknik Universitas Krisnadwipayana
				</p>
			</h3>
			<!-- <h3 class="mb-5 mt-0">
				<em>Fakultas Teknik Universitas Krisnadwipayana</em>
			</h3> -->
			<a class="btn btn-primary btn-xl js-scroll-trigger shadow" href="<?php echo base_url(); ?>registrasi/add">Registrasi KP</a>
			<a class="btn btn-warning btn-xl js-scroll-trigger m-3 shadow" style="background-color: #ff6600; color: white;" href="<?php echo base_url(); ?>registrasi/add_ta">Registrasi TA</a>
		</div>
		<div class="overlay"></div>
	</header>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>