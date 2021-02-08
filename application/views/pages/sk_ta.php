<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<div class="row mt-3">
			<div class="col-md-3">
				<img src="<?php echo base_url() ?>assets/img/logo-unkris.png" class="ml-3 float-right" style="width: 160px; margin-right: 0px">
			</div>
			<div class="col-md-9" style="color:blue; margin-left: 0">
				<h3 class="mt-2" style="font-weight: bold; line-height: 30px">UNIVERSITAS KRISNADWIPAYANA <br /> FAKULTAS TEKNIK</h3>
				<p class="" style="font-size: 20px; line-height: 22px">ALAMAT : Kampus UNKRIS Jatiwaringin Telp. 021-8462229-31 <br />
					Langsung 021-84998529 Fax. 021-84998529 <br />
					P.O. BOX 7774/Jat CM Jakarta 13077</p>
			</div>
		</div>
		<hr color="black" style="margin-bottom: 3px">
		<hr color="black" style="height: 5px; margin: auto;">
		<div class="mt-4">
			<!-- judul -->
			<h4 class="text-center" style="font-weight: bold;">KEPUTUSAN <br />
				DEKAN FAKULTAS TEKNIK</h4>
			<h4 class="text-center" style="font-weight: bold; text-decoration: underline; line-height: 15px;">UNIVERSITAS KRISNADWIPAYANA</h4>
			<h5 class="text-center" style="font-weight: bold; line-height: 20px;">NO : TA.<?php echo $registrasi_ta['id_registrasi'] ?>/SK/DEK/FT.AK/IV/2019</h5>
			<h5 class="text-center m-4" style="font-weight: bold; line-height: 20px;">TENTANG</h5>
			<h5 class="text-center m-4" style="font-weight: bold; line-height: 20px;">PEMBIMBING TUGAS AKHIR / SKRIPSI (TA)
				<br />
				PERIODE SEMESTER GENAP TH. 2018/2019</h5>
		</div>
		<div class="sub-judul">
			<p class="mt-1" style="text-align: justify; font-size: 20px">Dengan pertimbangan sebagaimana yang telah ditentukan dalam peraturan di Fakultas Teknik Universitas Krisnadwipayana, maka dengan ini :</p>
			<h5 class="text-center m-1" style="font-weight: bold;">DEKAN FAKULTAS TEKNIK</h5>
		</div>
		<div class="isi">
			<p class="" style="text-align: justify; font-size: 20px; margin-bottom: 1px">Memutuskan :</p>
			<ol type="1" style="text-align: justify; font-size: 20px; margin-left: 15px">
				<li>Nama Mahasiswa/i&emsp;&emsp;&emsp;&emsp; : <?php echo $registrasi_ta['nama_mhs'] ?></li>
				<p style="text-align: justify; font-size: 20px; margin-bottom: 0">Nomor Induk Mahasiswa/i&emsp;: <?php echo $registrasi_ta['nim_mhs'] ?> (<?php echo $registrasi_ta['nama_prodi'] ?>)<br />
					Telah memenuhi syarat untuk mengambil Skripsi/Tugas Akhir (TA) dengan judul : <br />"<?php echo $registrasi_ta['judul_ta'] ?>"
				</p>
				<li>Dosen pembimbing untuk Skripsi/Tugas Akhir (TA) mahasiswa/i tersebut diatas ditetapkan : <br />
					<ol type="a">
						<li>Dosen Pembimbing ke-1 : <?php echo $registrasi_ta['nama_dosbim1'] ?></li>
						<li>Dosen Pembimbing ke-2 : <?php echo $registrasi_ta['nama_dosbim2'] ?></li>
					</ol>
				</li>
				<li>Dosen Pembimbing Skripsi/Tugas Akhir (TA) diberikan honorarium sebagaimana peraturan yang berlaku.</li>
				<li>Keputusan ini berlaku pada Semester Genap Tahun 2018 / 2019 dan apabila di kemudian hari ternyata terdapat kekeliruan dalam penetapan keputusan ini, akan diperbaiki sebagaimana mestinya.</li>
			</ol>
		</div>
		<div class="row mt-5" style="margin-top: 15px;">
			<div class="col-md-8"></div>
			<div class="col-md-4">
				<p style="text-align: left; font-size: 20px">Ditetapkan di : Jakarta <br />
					Pada tanggal&ensp;:
					<?php
					function tgl_indo($tanggal)
					{
						$bulan = array(
							1 =>   'Januari',
							'Februari',
							'Maret',
							'April',
							'Mei',
							'Juni',
							'Juli',
							'Agustus',
							'September',
							'Oktober',
							'November',
							'Desember'
						);
						$pecahkan = explode('-', $tanggal);

						// variabel pecahkan 0 = tanggal
						// variabel pecahkan 1 = bulan
						// variabel pecahkan 2 = tahun

						return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
					}

					echo tgl_indo(date('Y-m-d'));
					?>
					<br />
					D e k a n </p>
				<img src="<?php echo base_url() ?>assets/img/ttd-dekan.png" style="width: 200px; margin-bottom: 0">
				<p style="text-align: left; font-weight: bold; text-decoration: underline; font-size: 20px; margin-bottom: 0">Dr. Ir. Ayub Muktiono, M.SiP</p>
				<p style="text-align: left; font-size: 20px;">NIDN. 0304096402</p>
			</div>
		</div>
		<div class="row mt-5" style="margin-top: 15px">
			<div class="col-md-3">
				<p style="text-align: left; font-size: 18px; text-decoration: underline; font-weight: bold; margin-bottom: 0">Tembusan Yth :</p>
				<ol style="font-size: 15px; margin-top: 0">
					<li>Wadek I FT.UNKRIS.</li>
					<li>Kabag. TU</li>
					<li>Dosen dan Mahasiswa ybs.</li>
					<li>Arsip</li>
				</ol>
			</div>
		</div>
	</div> <!-- container -->

	<script>
		window.print();
	</script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>