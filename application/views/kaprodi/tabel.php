
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
			
		<?php if($this->session->flashdata('pilih_dosbim1') != NULL) :  ?>
			<div class="alert alert-danger alert-dismissible fade show">
				<?php echo $this->session->flashdata('pilih_dosbim1'); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
  				</button>
			</div>
		<?php endif; ?>
		
		<div class="card">
			<div class="card-header card-header-info">
				<h4>Data Mahasiswa KP</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table" id="myTable">
						<thead class="text">
							<th>No.</th>
							<th>Nama</th>
							<th>NIM</th>
							<th>SMT/Th. Akademik</th>
							<th>Rencana Judul</th>
							<th>Monitoring Nilai</th>
							<th>Dosen Pembimbing</th>
							<th></th>
						</thead>
						<tbody>
							<?php foreach ($registrasi as $key): ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $key['nama_mhs'] ?></td>
									<td><?php echo $key['nim_mhs'] ?></td>
									<td class="text-center"><?php echo $key['tahun'] ?></td>
									<td><?php echo $key['judul_pkl'] ?></td>
									<td><a href="<?php echo base_url(); ?>/assets/img/<?php echo $key['monitoring'] ?>"><?php echo $key['monitoring'] ?></a></td>
									<form action="<?php echo base_url('kaprodi/verif_kap') ?>" onsubmit="return confirm('Data Akan Diverifikasi?');" method="POST">
									<td>
										<div class="form-row">
											<div class="form-group col-md-12">
												<select id="pilihProdi" name="nama_dosbim1" class="form-control" required>
													<?php if($this->session->userdata('nama_prodi') == 'Mesin'): ?>
														<option selected value="default">Pilih Dosen Pembimbing 1 </option>
														<option value="Ir. Tatang Subagdja, MT - Lektor">Ir. Tatang Subagdja, MT - Lektor</option>
														<option value="Kis Yoga Utomo, ST, MT - Asisten Ahli">Kis Yoga Utomo, ST, MT - Asisten Ahli</option>
														<option value="Ir. Muchayar, MT - Lektor">Ir. Muchayar, MT - Lektor</option>
														<option value="Denny Prumanto, ST, MT - Asisten Ahli">Denny Prumanto, ST, MT - Asisten Ahli</option>
														<option value="Suwanda, ST, MT - Lektor">Suwanda, ST, MT - Lektor</option>
														<option value="Bilhan Gamaliel, ST, M.Eng - Asisten Ahli">Bilhan Gamaliel, ST, M.Eng - Asisten Ahli</option>
														<option value="Dr. Jenniria R., M.Si - Lektor Kepala">Dr. Jenniria R., M.Si - Lektor Kepala</option>
														<option value="Rani Anggraini, S.Si, MT - Tenaga Pendidik">Rani Anggraini, S.Si, MT - Tenaga Pendidik</option>
														<option value="Aries Abbas, ST, MM - Asisten Ahli">Aries Abbas, ST, MM - Asisten Ahli</option>
														<option value="Wiga Ariani, S.Pd, M.Pd - Tenaga Pendidik">Wiga Ariani, S.Pd, M.Pd - Tenaga Pendidik</option>
														<option value="Azat Jatmika, ST, MT - Tenaga Pendidik">Azat Jatmika, ST, MT - Tenaga Pendidik</option>
													<?php endif; ?>
													<?php if($this->session->userdata('nama_prodi') == 'Elektro'): ?>
														<option selected value="default">Pilih Dosen Pembimbing 1 </option>
														<option value="Ujang Wiharja, ST, MT - Lektor">Ujang Wiharja, ST, MT - Lektor</option>
														<option value="Abdul Kodir, ST, MT - Lektor">Abdul Kodir, ST, MT - Lektor</option>
														<option value="Slamet Purwo, ST, MT - Asisten Ahli">Slamet Purwo, ST, MT - Asisten Ahli</option>
														<option value="Lukman Aditya, ST, MT - Asisten Ahli">Lukman Aditya, ST, MT - Asisten Ahli</option>
														<option value="Ir. Tri Ongko Priyono, MT - Lektor">Ir. Tri Ongko Priyono, MT- Lektor</option>
														<option value="Teten Dian Hakim, ST, MT - Asisten Ahli">Teten Dian Hakim, ST, MT - Asisten Ahli</option>
														<option value="Sri Hartanto, ST, MT - Asisten Ahli">Sri Hartanto, ST, MT - Asisten Ahli</option>
														<option value="Ir. NURHABIBAH NAIBAHO, MT - Asisten Ahli">Ir. NURHABIBAH NAIBAHO, MT - Asisten Ahli</option>
													<?php endif; ?>
													<?php if($this->session->userdata('nama_prodi') == 'Industri'): ?>
														<option selected value="default">Pilih Dosen Pembimbing 1 </option>
														<option value="Ir. Florida Butarbutar, MT - Lektor">Ir. Florida Butarbutar, MT - Lektor</option>
														<option value="Ir. Vera Nova L. Raja, MT - Asisten Ahli">Ir. Vera Nova L. Raja, MT - Asisten Ahli</option>
														<option value="Suwanda, ST, MT - Lektor">Suwanda, ST, MT - Lektor</option>
														<option value="Ismail Kurnia, ST, MT - Asisten Ahli">Ismail Kurnia, ST, MT - Asisten Ahli</option>
														<option value="Yudi Sosialisman, ST, MT - Tenaga Pendidik">Yudi Sosialisman, ST, MT - Tenaga Pendidik</option>
														<option value="Hendro Susiyanto, ST, MT - Tenaga Pendidik">Hendro Susiyanto, ST, MT - Tenaga Pendidik</option>
														<option value="Ir. Japinal Sagala, MM - Lektor">Ir. Japinal Sagala, MM - Lektor</option>
													<?php endif; ?>
													<?php if($this->session->userdata('nama_prodi') == 'Sipil'): ?>
														<option selected value="default">Pilih Dosen Pembimbing 1 </option>
														<option value="Indriasari, ST, MT - Asisten Ahli">Indriasari, ST, MT - Asisten Ahli</option>
														<option value="Lydia Darmiyanti, ST, MT - Asisten Ahli">Lydia Darmiyanti, ST, MT - Asisten Ahli</option>
														<option value="Dr. Ir. Nusa Setiani, MT - Lektor">Dr. Ir. Nusa Setiani, MT - Lektor</option>
														<option value="Ir. Sahat Martua Sihombing, MT - Lektor">Ir. Sahat Martua Sihombing, MT - Lektor</option>
														<option value="Achmad Pahrul Rodji, ST, MT - Asisten Ahli">Achmad Pahrul Rodji, ST, MT - Asisten Ahli</option>
													<?php endif; ?>
													<?php if($this->session->userdata('nama_prodi') == 'Arsitektur'): ?>
														<option selected value="default">Pilih Dosen Pembimbing 1 </option>
														<option value="Dr. Ir. Ayub Muktiono, M.SiP - Lektor Kepala">Dr. Ir. Ayub Muktiono, M.SiP - Lektor Kepala</option>
														<option value="Nazaruddin Khuluk, ST, MT - Asisten Ahli">Nazaruddin Khuluk, ST, MT - Asisten Ahli</option>
														<option value="Widiyanti, ST, MDP - Lektor">Widiyanti, ST, MT - Lektor</option>
														<option value="Astria Melanira, ST, M.Si - Asisten Ahli">Astria Melanira, ST, M.Si - Asisten Ahli</option>
														<option value="Ir. Siswarini, MT">Ir. Siswarini, MT</option>
														<option value="Ir. Handono, MT">Ir. Handono, MT</option>
														<option value="Tuntun Rahayu, ST, MT - Asisten Ahli">Tuntun Rahayu, ST, MT - Asisten Ahli</option>
														<option value="Ir. Nurwono, MMa">Ir. Nurwono, MMa</option>
													<?php endif; ?>
													<?php if($this->session->userdata('nama_prodi') == 'Perencanaan Wilayah dan Kota'): ?>
														<option selected value="default">Pilih Dosen Pembimbing 1 </option>
														<option value="Dr. Zefri, M.Si - Lektor">Dr. Zefri, M.Si - Lektor</option>
														<option value="Ir. Sutaryo, M.Si - Lektor Kepala">Ir. Sutaryo, M.Si - Lektor Kepala</option>
														<option value="Ir. Reny Savitri, MT - Lektor">Ir. Reny Savitri, MT - Lektor</option>
														<option value="Dr. Ir. Semuel Th. S., M.Si - Lektor">Dr. Ir. Semuel Th. S., M.Si - Lektor</option>
														<option value="Siska Amelia, ST, MT - Asisten Ahli">Siska Amelia, ST, MT - Asisten Ahli</option>
														<option value="Fauziah Bagawat Sari, ST, MT - Asisten Ahli">Fauziah Bagawat Sari, ST, MT - Asisten Ahli</option>
													<?php endif; ?>
													<?php if($this->session->userdata('nama_prodi') == 'Informatika'): ?>
														<option selected value="default">Pilih Dosen Pembimbing 1 </option>
														<option value="Ali Khumaidi, MKom - Lektor">Ali Khumaidi, MKom - Lektor</option>
														<option value="Nuke L Chusna, S.Si., M.Kom - Asisten Ahli">Nuke L Chusna, S.Si., M.Kom - Asisten Ahli</option>
														<option value="M.Syarif Hartawan, SKom, MKom - Asisten Ahli">M. Syarif Hartawan, SKom, MKom - Asisten Ahli</option>
														<option value="Dr.Herwanto, SKom, MSi - Lektor">Dr. Herwanto, SKom, MSi - Lektor</option>
														<option value="Harjono P Putro,ST, MKom - Lektor">Harjono P Putro, ST, MKom - Lektor</option>
														<option value="Risanto Darmawan, MM., M.Kom - Asisten Ahli">Risanto Darmawan, MM., M.Kom - Asisten Ahli</option>
														<option value="Nurhikmah, ST., M.Kom - Asisten Ahli">Nurhikmah, ST., M.Kom - Asisten Ahli</option>
														<option value="Nur Azis, S.Kom., M.Kom - Asisten Ahli">Nur Azis, S.Kom., M.Kom - Asisten Ahli</option>
														<option value="Wargijono Utomo, S.Kom., M.Kom - Asisten Ahli">Wargijono Utomo, S.Kom., M.Kom - Asisten Ahli</option>
														<option value="Elmi Delvia, S.Kom., M.Kom - Asisten Ahli">Elmi Delvia, S.Kom., M.Kom - Asisten Ahli</option>
														<option value="Ir. Junaidi, M.Kom - Asisten Ahli">Ir. Junaidi, M.Kom - Asisten Ahli</option>
														<option value="Moch. Fachri, ST, MT">Moch. Fachri, ST, MT</option>
													<?php endif; ?>
												</select>
											</div>
										</div>
									</td>
									<td class="text-center">
										<input type="hidden" name="id_registrasi" value="<?php echo $key['id_registrasi'] ?>" required>
										<button type="submit" class="btn btn-success btn-sm btn-block">
											<i class="material-icons mr-1">check</i>
										</button>
									</form>
									<button class="btn btn-danger btn-sm mt-1 btn-block" data-toggle="modal" data-target="#myModal<?php echo $key['id_registrasi']?>">
										<i class="material-icons mr-1">cancel</i>
									</button>
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
	<?php if($this->session->flashdata('pilih_dosbimTA1') != NULL) :  ?>
		<div class="alert alert-danger alert-dismissible fade show">
			<?php echo $this->session->flashdata('pilih_dosbimTA1'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
				</button>
		</div>
	<?php endif; ?>
	<?php if($this->session->flashdata('pilih_dosbimTA2') != NULL) :  ?>
		<div class="alert alert-danger alert-dismissible fade show">
			<?php echo $this->session->flashdata('pilih_dosbimTA2'); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
				</button>
		</div>
	<?php endif; ?>
	<div class="card">
		<div class="card-header card-header-info">
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
						<th scope="col">Rencana Judul</th>
						<th scope="col">Monitoring Nilai</th>
						<th scope="col">Dosen Pembimbing</th>
						<th scope="col"></th>
					</thead>
					<tbody>
						<?php foreach ($registrasi_ta as $key): ?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $key['nama_mhs'] ?></td>
								<td><?php echo $key['nim_mhs'] ?></td>
								<td class="text-center"><?php echo $key['tahun'] ?></td>
								<td><?php echo $key['judul_ta'] ?></td>
								<td><a href="<?php echo base_url(); ?>/assets/img/<?php echo $key['monitoring'] ?>"><?php echo $key['monitoring'] ?></a></td>
								<form action="<?php echo base_url('kaprodi/verif_kap_ta') ?>" onsubmit="return confirm('Data Akan Diverifikasi?');" method="POST">								<td>
									<div class="form-row">
										<div class="form-group col-md-12">
											<select id="pilihProdi" name="nama_dosbim1" class="form-control" required>
												<?php if($this->session->userdata('nama_prodi') == 'Mesin'): ?>
													<option selected value="default">Pilih Dosen Pembimbing 1 </option>
													<option value="Ir. Tatang Subagdja, MT - Lektor">Ir. Tatang Subagdja, MT - Lektor</option>
													<option value="Kis Yoga Utomo, ST, MT - Asisten Ahli">Kis Yoga Utomo, ST, MT - Asisten Ahli</option>
													<option value="Ir. Muchayar, MT - Lektor">Ir. Muchayar, MT - Lektor</option>
													<option value="Denny Prumanto, ST, MT - Asisten Ahli">Denny Prumanto, ST, MT - Asisten Ahli</option>
													<option value="Suwanda, ST, MT - Lektor">Suwanda, ST, MT - Lektor</option>
													<option value="Bilhan Gamaliel, ST, M.Eng - Asisten Ahli">Bilhan Gamaliel, ST, M.Eng - Asisten Ahli</option>
													<option value="Dr. Jenniria R., M.Si - Lektor Kepala">Dr. Jenniria R., M.Si - Lektor Kepala</option>
													<option value="Rani Anggraini, S.Si, MT - Tenaga Pendidik">Rani Anggraini, S.Si, MT - Tenaga Pendidik</option>
													<option value="Aries Abbas, ST, MM - Asisten Ahli">Aries Abbas, ST, MM - Asisten Ahli</option>
													<option value="Wiga Ariani, S.Pd, M.Pd - Tenaga Pendidik">Wiga Ariani, S.Pd, M.Pd - Tenaga Pendidik</option>
													<option value="Azat Jatmika, ST, MT - Tenaga Pendidik">Azat Jatmika, ST, MT - Tenaga Pendidik</option>
												<?php endif; ?>
												<?php if($this->session->userdata('nama_prodi') == 'Elektro'): ?>
													<option selected value="default">Pilih Dosen Pembimbing 1 </option>
													<option value="Ujang Wiharja, ST, MT - Lektor">Ujang Wiharja, ST, MT - Lektor</option>
													<option value="Abdul Kodir, ST, MT - Lektor">Abdul Kodir, ST, MT - Lektor</option>
													<option value="Slamet Purwo, ST, MT - Asisten Ahli">Slamet Purwo, ST, MT - Asisten Ahli</option>
													<option value="Lukman Aditya, ST, MT - Asisten Ahli">Lukman Aditya, ST, MT - Asisten Ahli</option>
													<option value="Ir. Tri Ongko Priyono, MT - Lektor">Ir. Tri Ongko Priyono, MT- Lektor</option>
													<option value="Teten Dian Hakim, ST, MT - Asisten Ahli">Teten Dian Hakim, ST, MT - Asisten Ahli</option>
													<option value="Sri Hartanto, ST, MT - Asisten Ahli">Sri Hartanto, ST, MT - Asisten Ahli</option>
													<option value="Ir. NURHABIBAH NAIBAHO, MT - Asisten Ahli">Ir. NURHABIBAH NAIBAHO, MT - Asisten Ahli</option>
												<?php endif; ?>
												<?php if($this->session->userdata('nama_prodi') == 'Industri'): ?>
													<option selected value="default">Pilih Dosen Pembimbing 1 </option>
													<option value="Ir. Florida Butarbutar, MT - Lektor">Ir. Florida Butarbutar, MT - Lektor</option>
													<option value="Ir. Vera Nova L. Raja, MT - Asisten Ahli">Ir. Vera Nova L. Raja, MT - Asisten Ahli</option>
													<option value="Suwanda, ST, MT - Lektor">Suwanda, ST, MT - Lektor</option>
													<option value="Ismail Kurnia, ST, MT - Asisten Ahli">Ismail Kurnia, ST, MT - Asisten Ahli</option>
													<option value="Yudi Sosialisman, ST, MT - Tenaga Pendidik">Yudi Sosialisman, ST, MT - Tenaga Pendidik</option>
													<option value="Hendro Susiyanto, ST, MT - Tenaga Pendidik">Hendro Susiyanto, ST, MT - Tenaga Pendidik</option>
													<option value="Ir. Japinal Sagala, MM - Lektor">Ir. Japinal Sagala, MM - Lektor</option>
												<?php endif; ?>
												<?php if($this->session->userdata('nama_prodi') == 'Sipil'): ?>
													<option selected value="default">Pilih Dosen Pembimbing 1 </option>
													<option value="Indriasari, ST, MT - Asisten Ahli">Indriasari, ST, MT - Asisten Ahli</option>
													<option value="Lydia Darmiyanti, ST, MT - Asisten Ahli">Lydia Darmiyanti, ST, MT - Asisten Ahli</option>
													<option value="Dr. Ir. Nusa Setiani, MT - Lektor">Dr. Ir. Nusa Setiani, MT - Lektor</option>
													<option value="Ir. Sahat Martua Sihombing, MT - Lektor">Ir. Sahat Martua Sihombing, MT - Lektor</option>
													<option value="Achmad Pahrul Rodji, ST, MT - Asisten Ahli">Achmad Pahrul Rodji, ST, MT - Asisten Ahli</option>
												<?php endif; ?>
												<?php if($this->session->userdata('nama_prodi') == 'Arsitektur'): ?>
													<option selected value="default">Pilih Dosen Pembimbing 1 </option>
													<option value="Dr. Ir. Ayub Muktiono, M.SiP - Lektor Kepala">Dr. Ir. Ayub Muktiono, M.SiP - Lektor Kepala</option>
													<option value="Nazaruddin Khuluk, ST, MT - Asisten Ahli">Nazaruddin Khuluk, ST, MT - Asisten Ahli</option>
													<option value="Widiyanti, ST, MDP - Lektor">Widiyanti, ST, MT - Lektor</option>
													<option value="Astria Melanira, ST, M.Si - Asisten Ahli">Astria Melanira, ST, M.Si - Asisten Ahli</option>
													<option value="Ir. Siswarini, MT">Ir. Siswarini, MT</option>
													<option value="Ir. Handono, MT">Ir. Handono, MT</option>
													<option value="Tuntun Rahayu, ST, MT - Asisten Ahli">Tuntun Rahayu, ST, MT - Asisten Ahli</option>
													<option value="Ir. Nurwono, MMa">Ir. Nurwono, MMa</option>
												<?php endif; ?>
												<?php if($this->session->userdata('nama_prodi') == 'Perencanaan Wilayah dan Kota'): ?>
													<option selected value="default">Pilih Dosen Pembimbing 1 </option>
													<option value="Dr. Zefri, M.Si - Lektor">Dr. Zefri, M.Si - Lektor</option>
													<option value="Ir. Sutaryo, M.Si - Lektor Kepala">Ir. Sutaryo, M.Si - Lektor Kepala</option>
													<option value="Ir. Reny Savitri, MT - Lektor">Ir. Reny Savitri, MT - Lektor</option>
													<option value="Dr. Ir. Semuel Th. S., M.Si - Lektor">Dr. Ir. Semuel Th. S., M.Si - Lektor</option>
													<option value="Siska Amelia, ST, MT - Asisten Ahli">Siska Amelia, ST, MT - Asisten Ahli</option>
													<option value="Fauziah Bagawat Sari, ST, MT - Asisten Ahli">Fauziah Bagawat Sari, ST, MT - Asisten Ahli</option>
												<?php endif; ?>
												<?php if($this->session->userdata('nama_prodi') == 'Informatika'): ?>
													<option selected value="default">Pilih Dosen Pembimbing 1 </option>
													<option value="Ali Khumaidi, MKom - Lektor">Ali Khumaidi, MKom - Lektor</option>
													<option value="Nuke L Chusna, S.Si., M.Kom - Asisten Ahli">Nuke L Chusna, S.Si., M.Kom - Asisten Ahli</option>
													<option value="M.Syarif Hartawan, SKom, MKom - Asisten Ahli">M. Syarif Hartawan, SKom, MKom - Asisten Ahli</option>
													<option value="Dr.Herwanto, SKom, MSi - Lektor">Dr. Herwanto, SKom, MSi - Lektor</option>
													<option value="Harjono P Putro,ST, MKom - Lektor">Harjono P Putro, ST, MKom - Lektor</option>
													<option value="Risanto Darmawan, MM., M.Kom - Asisten Ahli">Risanto Darmawan, MM., M.Kom - Asisten Ahli</option>
													<option value="Nurhikmah, ST., M.Kom - Asisten Ahli">Nurhikmah, ST., M.Kom - Asisten Ahli</option>
													<option value="Nur Azis, S.Kom., M.Kom - Asisten Ahli">Nur Azis, S.Kom., M.Kom - Asisten Ahli</option>
													<option value="Wargijono Utomo, S.Kom., M.Kom - Asisten Ahli">Wargijono Utomo, S.Kom., M.Kom - Asisten Ahli</option>
													<option value="Elmi Delvia, S.Kom., M.Kom - Asisten Ahli">Elmi Delvia, S.Kom., M.Kom - Asisten Ahli</option>
													<option value="Ir. Junaidi, M.Kom - Asisten Ahli">Ir. Junaidi, M.Kom - Asisten Ahli</option>
													<option value="Moch. Fachri, ST, MT">Moch. Fachri, ST, MT</option>
												<?php endif; ?>
											</select>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-12">
											<select id="pilihProdi" name="nama_dosbim2" class="form-control">
												<?php if($this->session->userdata('nama_prodi') == 'Mesin'): ?>
													<option selected value="default">Pilih Dosen Pembimbing 2 </option>
													<option value="Ir. Tatang Subagdja, MT - Lektor">Ir. Tatang Subagdja, MT - Lektor</option>
													<option value="Kis Yoga Utomo, ST, MT - Asisten Ahli">Kis Yoga Utomo, ST, MT - Asisten Ahli</option>
													<option value="Ir. Muchayar, MT - Lektor">Ir. Muchayar, MT - Lektor</option>
													<option value="Denny Prumanto, ST, MT - Asisten Ahli">Denny Prumanto, ST, MT - Asisten Ahli</option>
													<option value="Suwanda, ST, MT - Lektor">Suwanda, ST, MT - Lektor</option>
													<option value="Bilhan Gamaliel, ST, M.Eng - Asisten Ahli">Bilhan Gamaliel, ST, M.Eng - Asisten Ahli</option>
													<option value="Dr. Jenniria R., M.Si - Lektor Kepala">Dr. Jenniria R., M.Si - Lektor Kepala</option>
													<option value="Rani Anggraini, S.Si, MT - Tenaga Pendidik">Rani Anggraini, S.Si, MT - Tenaga Pendidik</option>
													<option value="Aries Abbas, ST, MM - Asisten Ahli">Aries Abbas, ST, MM - Asisten Ahli</option>
													<option value="Wiga Ariani, S.Pd, M.Pd - Tenaga Pendidik">Wiga Ariani, S.Pd, M.Pd - Tenaga Pendidik</option>
													<option value="Azat Jatmika, ST, MT - Tenaga Pendidik">Azat Jatmika, ST, MT - Tenaga Pendidik</option>
												<?php endif; ?>
												<?php if($this->session->userdata('nama_prodi') == 'Elektro'): ?>
													<option selected value="default">Pilih Dosen Pembimbing 2 </option>
													<option value="Ujang Wiharja, ST, MT - Lektor">Ujang Wiharja, ST, MT - Lektor</option>
													<option value="Abdul Kodir, ST, MT - Lektor">Abdul Kodir, ST, MT - Lektor</option>
													<option value="Slamet Purwo, ST, MT - Asisten Ahli">Slamet Purwo, ST, MT - Asisten Ahli</option>
													<option value="Lukman Aditya, ST, MT - Asisten Ahli">Lukman Aditya, ST, MT - Asisten Ahli</option>
													<option value="Ir. Tri Ongko Priyono, MT - Lektor">Ir. Tri Ongko Priyono, MT- Lektor</option>
													<option value="Teten Dian Hakim, ST, MT - Asisten Ahli">Teten Dian Hakim, ST, MT - Asisten Ahli</option>
													<option value="Sri Hartanto, ST, MT - Asisten Ahli">Sri Hartanto, ST, MT - Asisten Ahli</option>
													<option value="Ir. NURHABIBAH NAIBAHO, MT - Asisten Ahli">Ir. NURHABIBAH NAIBAHO, MT - Asisten Ahli</option>
												<?php endif; ?>
												<?php if($this->session->userdata('nama_prodi') == 'Industri'): ?>
													<option selected value="default">Pilih Dosen Pembimbing 2 </option>
													<option value="Ir. Florida Butarbutar, MT - Lektor">Ir. Florida Butarbutar, MT - Lektor</option>
													<option value="Ir. Vera Nova L. Raja, MT - Asisten Ahli">Ir. Vera Nova L. Raja, MT - Asisten Ahli</option>
													<option value="Suwanda, ST, MT - Lektor">Suwanda, ST, MT - Lektor</option>
													<option value="Ismail Kurnia, ST, MT - Asisten Ahli">Ismail Kurnia, ST, MT - Asisten Ahli</option>
													<option value="Yudi Sosialisman, ST, MT - Tenaga Pendidik">Yudi Sosialisman, ST, MT - Tenaga Pendidik</option>
													<option value="Hendro Susiyanto, ST, MT - Tenaga Pendidik">Hendro Susiyanto, ST, MT - Tenaga Pendidik</option>
													<option value="Ir. Japinal Sagala, MM - Lektor">Ir. Japinal Sagala, MM - Lektor</option>
												<?php endif; ?>
												<?php if($this->session->userdata('nama_prodi') == 'Sipil'): ?>
													<option selected value="default">Pilih Dosen Pembimbing 2 </option>
													<option value="Indriasari, ST, MT - Asisten Ahli">Indriasari, ST, MT - Asisten Ahli</option>
													<option value="Lydia Darmiyanti, ST, MT - Asisten Ahli">Lydia Darmiyanti, ST, MT - Asisten Ahli</option>
													<option value="Dr. Ir. Nusa Setiani, MT - Lektor">Dr. Ir. Nusa Setiani, MT - Lektor</option>
													<option value="Ir. Sahat Martua Sihombing, MT - Lektor">Ir. Sahat Martua Sihombing, MT - Lektor</option>
													<option value="Achmad Pahrul Rodji, ST, MT - Asisten Ahli">Achmad Pahrul Rodji, ST, MT - Asisten Ahli</option>
												<?php endif; ?>
												<?php if($this->session->userdata('nama_prodi') == 'Arsitektur'): ?>
													<option selected value="default">Pilih Dosen Pembimbing 2 </option>
													<option value="Dr. Ir. Ayub Muktiono, M.SiP - Lektor Kepala">Dr. Ir. Ayub Muktiono, M.SiP - Lektor Kepala</option>
													<option value="Nazaruddin Khuluk, ST, MT - Asisten Ahli">Nazaruddin Khuluk, ST, MT - Asisten Ahli</option>
													<option value="Widiyanti, ST, MDP - Lektor">Widiyanti, ST, MT - Lektor</option>
													<option value="Astria Melanira, ST, M.Si - Asisten Ahli">Astria Melanira, ST, M.Si - Asisten Ahli</option>
													<option value="Ir. Siswarini, MT">Ir. Siswarini, MT</option>
													<option value="Ir. Handono, MT">Ir. Handono, MT</option>
													<option value="Tuntun Rahayu, ST, MT - Asisten Ahli">Tuntun Rahayu, ST, MT - Asisten Ahli</option>
													<option value="Ir. Nurwono, MMa">Ir. Nurwono, MMa</option>
												<?php endif; ?>
												<?php if($this->session->userdata('nama_prodi') == 'Perencanaan Wilayah dan Kota'): ?>
													<option selected value="default">Pilih Dosen Pembimbing 2 </option>
													<option value="Dr. Zefri, M.Si - Lektor">Dr. Zefri, M.Si - Lektor</option>
													<option value="Ir. Sutaryo, M.Si - Lektor Kepala">Ir. Sutaryo, M.Si - Lektor Kepala</option>
													<option value="Ir. Reny Savitri, MT - Lektor">Ir. Reny Savitri, MT - Lektor</option>
													<option value="Dr. Ir. Semuel Th. S., M.Si - Lektor">Dr. Ir. Semuel Th. S., M.Si - Lektor</option>
													<option value="Siska Amelia, ST, MT - Asisten Ahli">Siska Amelia, ST, MT - Asisten Ahli</option>
													<option value="Fauziah Bagawat Sari, ST, MT - Asisten Ahli">Fauziah Bagawat Sari, ST, MT - Asisten Ahli</option>
												<?php endif; ?>
												<?php if($this->session->userdata('nama_prodi') == 'Informatika'): ?>
													<option selected value="default">Pilih Dosen Pembimbing 2 </option>
													<option value="Ali Khumaidi, MKom - Lektor">Ali Khumaidi, MKom - Lektor</option>
													<option value="Nuke L Chusna, S.Si., M.Kom - Asisten Ahli">Nuke L Chusna, S.Si., M.Kom - Asisten Ahli</option>
													<option value="M.Syarif Hartawan, SKom, MKom - Asisten Ahli">M. Syarif Hartawan, SKom, MKom - Asisten Ahli</option>
													<option value="Dr.Herwanto, SKom, MSi - Lektor">Dr. Herwanto, SKom, MSi - Lektor</option>
													<option value="Harjono P Putro,ST, MKom - Lektor">Harjono P Putro, ST, MKom - Lektor</option>
													<option value="Risanto Darmawan, MM., M.Kom - Asisten Ahli">Risanto Darmawan, MM., M.Kom - Asisten Ahli</option>
													<option value="Nurhikmah, ST., M.Kom - Asisten Ahli">Nurhikmah, ST., M.Kom - Asisten Ahli</option>
													<option value="Nur Azis, S.Kom., M.Kom - Asisten Ahli">Nur Azis, S.Kom., M.Kom - Asisten Ahli</option>
													<option value="Wargijono Utomo, S.Kom., M.Kom - Asisten Ahli">Wargijono Utomo, S.Kom., M.Kom - Asisten Ahli</option>
													<option value="Elmi Delvia, S.Kom., M.Kom - Asisten Ahli">Elmi Delvia, S.Kom., M.Kom - Asisten Ahli</option>
													<option value="Ir. Junaidi, M.Kom - Asisten Ahli">Ir. Junaidi, M.Kom - Asisten Ahli</option>
													<option value="Moch. Fachri, ST, MT">Moch. Fachri, ST, MT</option>
												<?php endif; ?>
											</select>
										</div>
									</div>
								</td>
								<td class="text-center">

									<input type="hidden" name="id_registrasi" value="<?php echo $key['id_registrasi'] ?>" required>
									<button type="submit" class="btn btn-sm btn-success">
										<i class="material-icons">check</i>
									</button>
								</form>
								<button class="btn btn-danger btn-sm mt-1" data-toggle="modal" data-target="#myModalTA<?php echo $key['id_registrasi']?>">
									<i class="material-icons">cancel</i>
								</button>
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

<!-- Modal -->
<?php foreach ($registrasi as $key): ?>
	<div class="modal fade" id="myModal<?php echo $key['id_registrasi']?>" role="dialog">
		<div class="modal-dialog">
			<?php echo form_open('kaprodi/batal'); ?>
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<input class="form-control" type="text" name="alasan_batal" placeholder="Alasan Pembatalan" pattern="[A-Za-z]" required>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="id_registrasi" value="<?php echo $key['id_registrasi']?>">
					<button type="submit" class="btn btn-default">Kirim</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php endforeach; ?>

<!-- Modal -->
<?php foreach ($registrasi_ta as $key): ?>
	<div class="modal fade" id="myModalTA<?php echo $key['id_registrasi']?>" role="dialog">
		<div class="modal-dialog">
			<?php echo form_open('kaprodi/batal_ta'); ?>
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<input class="form-control" type="text" name="alasan_batal" placeholder="Alasan Pembatalan" pattern="[A-Za-z]" required>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="id_registrasi" value="<?php echo $key['id_registrasi']?>">
					<button type="submit" class="btn btn-default">Kirim</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php endforeach; ?>
