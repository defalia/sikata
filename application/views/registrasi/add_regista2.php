<!DOCTYPE html>
<html>
<head>
	<title>Registrasi TA</title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=2.0.5">
	<style type="text/css">
	body{background-color: #ffe0cc;}
</style>
</head>
<body>
	<!-- navbar -->
	<nav class="navbar bg-warning">
		<div class="container">
			<a class="navbar-brand text-light" href="<?= base_url() ?>">Registrasi TA</a>			
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
		<?php if($this->session->flashdata('pilih_dosbim1') != NULL) :  ?>
			<div class="alert alert-danger alert-dismissible fade show">
				<?php echo $this->session->flashdata('pilih_dosbim1'); ?>
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
		<form action="<?php echo base_url(); ?>registrasi/action_add_ta" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-4">
					<div class="card shadow">
						<div class="card-header card-header-warning text-white">
							<span class="text-lead">Data Pribadi Mahasiswa</span>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input class="form-control" type="name" name="nama_mhs" placeholder="Isi Nama Lengkap" required pattern=".{3,50}">
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
						<div class="card-header card-header-warning">
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
								<label for="pilihTahun">SMT / Tahun Akademik</label>
								<select id="pilihTahun" name="tahun"  class="form-control" required>
									<option selected value="default">Pilih..</option>
									<option value="Ganjil / 2018-2019">Ganjil / 2018-2019</option>
									<option value="Genap / 2018-2019">Genap / 2018-2019</option>
								</select>
							</div>
							<div class="form-group">
								<label for="pilihDosbim">Pilih Dosen Pembimbing</label>
								<select id="pilihDosbim" name="nama_dosbim1" class="form-control" required>
									<option selected value="default">Pilih Program Studi Dahulu</option>
<!-- 									<option value="Ali Khumaidi,MKom">Ali Khumaidi, MKom</option>
									<option value="M.Syarif Hartawan,SKom,MKom">M. Syarif Hartawan, SKom, MKom</option>
									<option value="Dr.Herwanto,SKom,MSi">Dr. Herwanto, SKom, MSi</option>
									<option value="Junaidi,MKom">Junaidi, MKom</option>
									<option value="Harjono P Putro,ST,MKom">Harjono P Putro, ST, MKom</option> -->
								</select>
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card shadow">
						<div class="card-header card-header-warning">
							<span class="text-lead">Data Tugas Akhir</span>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Rencana Judul</label>
								<input class="form-control" type="text" name="judul_pkl" placeholder="Judul" required pattern=".{2,200}">
							</div>
							<div class="">
								<label for="bukti_bayar">Upload Bukti Pembayaran</label>
								<input type="file" class="form-control" name="bukti_bayar" required>
								<small class="text-muted form-text">JPG/PNG maksimal 1MB</small>
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
					<button type="submit" class="btn btn-lg btn-block btn-warning mt-3" style="background-color: #ff6600; color: white;">Submit</button>				
				</div>
			</div>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#pilihProdi").change(function(){
				switch($("#pilihProdi").val()){
					case 'Mesin':
					$("#pilihDosbim").html(`
					    <option value="Ir. Tatang Subagdja, MT">Ir. Tatang Subagdja, MT</option>
						<option value="Kis Yoga Utomo, ST, MT">Kis Yoga Utomo, ST, MT</option>
						<option value="Ir. Muchayar, MT">Ir. Muchayar, MT</option>
						<option value="Denny Prumanto, ST, MT">Denny Prumanto, ST, MT</option>
						<option value="Suwanda, ST, MT">Suwanda, ST, MT</option>
						<option value="Bilhan Gamaliel, ST, M.Eng">Bilhan Gamaliel, ST, M.Eng</option>
						<option value="Dr. Jenniria R., M.Si">Dr. Jenniria R., M.Si</option>
						<option value="Rani Anggraini, S.Pd, M.Pd">Rani Anggraini, S.Pd, M.Pd</option>
						<option value="Aries Abbas, ST, MM">Aries Abbas, ST, MM</option>
						<option value="Wiga Ariani, S.Pd, M.Pd">Wiga Ariani, S.Pd, M.Pd</option>
						<option value="Azat Jatmika, ST, MT">Azat Jatmika, ST, MT</option>
						`);
					break;
					case 'Elektro':
					$("#pilihDosbim").html(`
						<option value="Ujang Wiharja, ST, MT">Ujang Wiharja, ST, MT</option>
						<option value="Abdul Kodir, ST, MT">Abdul Kodir, ST, MT</option>
						<option value="Slamet Purwo, ST, MT">Slamet Purwo, ST, MT</option>
						<option value="Lukman Aditya, ST, MT">Lukman Aditya, ST, MT</option>
						<option value="Ir. Tri Ongko Priyono, MT">Ir. Tri Ongko Priyono, MT</option>
						<option value="Teten Dian Hakim, ST, MT">Teten Dian Hakim, ST, MT</option>
						<option value="Sri Hartanto, ST, MT">Sri Hartanto, ST, MT</option>
						`);
					break;
					case 'Industri':
					$("#pilihDosbim").html(`
						<option value="Ir. Florida Butarbutar, MT">Ir. Florida Butarbutar, MT</option>
						<option value="Ir. Vera Nova L. Raja, MT">Ir. Vera Nova L. Raja, MT</option>
						<option value="Suwanda, ST, MT">Suwanda, ST, MT</option>
						<option value="Ismail Kurnia, ST, MT">Ismail Kurnia, ST, MT</option>
						<option value="Yudi Sosialisman, ST, MT">Yudi Sosialisman, ST, MT</option>
						<option value="Hendro Susiyanto, ST, MT">Hendro Susiyanto, ST, MT</option>
						<option value="Ir. Japinal Sagala, MM">Ir. Japinal Sagala, MM</option>
						`);
					break;
					case 'Sipil':
					$("#pilihDosbim").html(`
					    <option value="Indriasari, ST, MT">Indriasari, ST, MT</option>
					    <option value="Lydia Darmiyanti, ST, MT">Lydia Darmiyanti, ST, MT</option>
						<option value="Dr. Ir. Nusa Setiani, MT">Dr. Ir. Nusa Setiani, MT</option>
						<option value="Ir. Sahat Martua Sihombing, MT">Ir. Sahat Martua Sihombing, MT</option>
						<option value="Achmad Pahrul Rodji, ST, MT">Achmad Pahrul Rodji, ST, MT</option>
						`);
					break;
					case 'Arsitektur':
					$("#pilihDosbim").html(`
						<option value="Dr. Ir. Ayub Muktiono, M.SiP">Dr. Ir. Ayub Muktiono, M.SiP</option>
						<option value="Nazaruddin Khuluk, ST, MT">Nazaruddin Khuluk, ST, MT</option>
						<option value="Widiyanti, ST, MDP">Widiyanti, ST, MT</option>
						<option value="Astria Melanira, ST, M.Si">Astria Melanira, ST, M.Si</option>
						<option value="Ir. Siswarini, MT">Ir. Siswarini, MT</option>
						<option value="Ir. Handono, MT">Ir. Handono, MT</option>
						<option value="Tuntun Rahayu, ST, MT">Tuntun Rahayu, ST, MT</option>
						<option value="Ir. Nurwono, MMa">Ir. Nurwono, MMa</option>
						`);
					break;
					case 'Perencanaan Wilayah dan Kota':
					$("#pilihDosbim").html(`
						<option value="Dr. Zefri, M.Si">Dr. Zefri, M.Si</option>
						<option value="Ir. Sutaryo, M.Si">Ir. Sutaryo, M.Si</option>
						<option value="Ir. Reny Savitri, MT">Ir. Reny Savitri, MT</option>
						<option value="Dr. Ir. Semuel Th. S., M.Si">Dr. Ir. Semuel Th. S., M.Si</option>
						<option value="Siska Amelia, ST, MT">Siska Amelia, ST, MT</option>
						<option value="Fauziah Bagawat Sari, ST, MT">Fauziah Bagawat Sari, ST, MT</option>
						`);
					break;
					case 'Informatika':
					$("#pilihDosbim").html(`
						<option value="Ali Khumaidi, MKom">Ali Khumaidi, MKom </option>
						<option value="Nuke L Chusna, S.Si., M.Kom">Nuke L Chusna, S.Si., M.Kom</option>
						<option value="M.Syarif Hartawan, SKom, MKom">M. Syarif Hartawan, SKom, MKom</option>
						<option value="Dr.Herwanto, SKom, MSi">Dr. Herwanto, SKom, MSi</option>
						<option value="Harjono P Putro,ST, MKom">Harjono P Putro, ST, MKom</option>
						<option value="Risanto Darmawan, MM., M.Kom">Risanto Darmawan, MM., M.Kom</option>
						<option value="Nurhikmah, ST., M.Kom">Nurhikmah, ST., M.Kom</option>
						<option value="Nur Azis, S.Kom., M.Kom">Nur Azis, S.Kom., M.Kom</option>
						<option value="Wargijono Utomo, S.Kom., M.Kom">Wargijono Utomo, S.Kom., M.Kom</option>
						<option value="Elmi Delvia, S.Kom., M.Kom">Elmi Delvia, S.Kom., M.Kom</option>
						<option value="Ir. Junaidi, M.Kom">Ir. Junaidi, M.Kom</option>
						<option value="Moch. Fachri, ST, MT">Moch. Fachri, ST, MT</option>
						`);
					break;
					default:
					$("#pilihDosbim").html(`
						<option>Pilih Program Studi Dahulu</option>								
						`);
					break;
				}
			});
		});
	</script>
</body>
</html>