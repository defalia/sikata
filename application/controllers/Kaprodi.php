<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kaprodi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	// @route		GET kaprodi
	// @desc 		Display kaprodi index page
	// @access 	Private
	public function index()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'kaprodi') {
			redirect('kaprodi/login');
		}

		// Redirect to pkl page
		redirect('kaprodi/pkl');
	}

	// @route		GET kaprodi/pkl
	// @desc 		Display registrasions for Kaprodi to approve
	// @access 	Private
	public function index_pkl()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'kaprodi') {
			redirect('kaprodi/login');
		}

		// Set parameters for registrasi
		$parameters = array(
			'status_registrasi' => 'Telah disetujui oleh keuangan',
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);

		// Get registrasi data
		$data['registrasi'] = $this->Model_registrasi->get($parameters);

		// Set parameters for dosen
		$parameters = array(
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);

		// Get dosen data
		$data['dosen'] = $this->Model_dosen->get($parameters);

		// Load view page
		$this->load->view('template/header_kap');
		$this->load->view('kaprodi/tabel_pkl', $data);
		$this->load->view('template/footer');
	}

	// @route		GET kaprodi/ta
	// @desc 		Display registrasion_tas for Kaprodi to approve
	// @access 	Private
	public function index_ta()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'kaprodi') {
			redirect('kaprodi/login');
		}

		// Set parameters for registrasi
		$parameters = array(
			'status_registrasi' => 'Telah disetujui oleh keuangan',
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);

		// Get registrasi_ta data
		$data['registrasi_ta'] = $this->Model_registrasi_ta->get($parameters);

		// Set parameters for dosen
		$parameters = array(
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);

		// Get dosen data
		$data['dosen'] = $this->Model_dosen->get($parameters);

		// Load view page
		$this->load->view('template/header_kap');
		$this->load->view('kaprodi/tabel_ta', $data);
		$this->load->view('template/footer');
	}

	// @route		POST kaprodi/verif_kap
	// @desc 		Approve registration status
	// @access 	Private
	public function verif_kap()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'kaprodi') {
			redirect('kaprodi/login');
		}

		// Check Kuota Dosen Pembimbing

		// Set parameters for check nama_dosbim
		$parameters = array(
			'nama_dosbim' => $this->input->post('nama_dosbim'),
			'status_registrasi !=' => 'Dibatalkan'
		);

		// Get registrasi data
		$registrasi = $this->Model_registrasi->get($parameters);

		if (count($registrasi) >= 8) {
			// Dosen Pembimbing exceeded quota

			// Set error flashdata
			$this->session->set_flashdata('alert_error', 'Jumlah mahasiswa bimbingan ' . $this->input->post('nama_dosbim') . ' sudah melebihi kuota, silahkan pilih dosen pembimbing lain!');

			// Redirect to pkl page
			redirect('kaprodi/pkl');
		}

		// Set new registrasi
		$newRegistrasi = array(
			'status_registrasi' => 'Telah disetujui oleh Kaprodi',
			'nama_dosbim' => $this->input->post('nama_dosbim')
		);

		// Update registrasi data
		$this->Model_registrasi->update($newRegistrasi, $this->input->post('id_registrasi'));

		// Set success flashdata
		$this->session->set_flashdata('alert_success', 'Verifikasi Berhasil!');

		// Redirect to pkl page
		redirect('kaprodi/pkl');
	}

	// @route		POST kaprodi/verif_kap_ta
	// @desc 		Approve registration status
	// @access 	Private
	public function verif_kap_ta()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'kaprodi') {
			redirect('kaprodi/login');
		}

		if ($this->input->post('nama_dosbim1') == $this->input->post('nama_dosbim2')) {
			// Set error flashdata
			$this->session->set_flashdata('alert_error', 'Pembimbing tidak boleh sama!');

			// redirect to registrasi ta page
			redirect('kaprodi/ta');
		}

		// Check Kuota Dosen Pembimbing 1
		// Set parameters for check nama_dosbim1
		// Search as Dosen Pembimbing 1
		$parameters1 = array(
			'nama_dosbim1' => $this->input->post('nama_dosbim1'),
			'status_registrasi !=' => "Dibatalkan",
			'status_registrasi !=' => "Telah disetujui oleh Dekan. Surat dapat dicetak",
			'id_registrasi !=' => $this->input->post('id_registrasi'),
		);
		// Search as Dosen Pembimbing 2
		$parameters2 = array(
			'nama_dosbim2' => $this->input->post('nama_dosbim1'),
			'status_registrasi !=' => "Dibatalkan",
			'status_registrasi !=' => "Telah disetujui oleh Dekan. Surat dapat dicetak",
			'id_registrasi !=' => $this->input->post('id_registrasi'),
		);

		// Get data
		$registrasi_ta1 = $this->Model_registrasi_ta->get($parameters1);
		$registrasi_ta2 = $this->Model_registrasi_ta->get($parameters2);

		if (count($registrasi_ta1) + count($registrasi_ta2) >= 8) {
			// Exceeded kuota dosen pembimbing

			// Set error flashdata
			$this->session->set_flashdata('alert_error', 'Jumlah mahasiswa bimbingan ' . $this->input->post('nama_dosbim1') . ' sudah melebihi kuota, silahkan pilih dosen pembimbing lain!');

			// redirect to registrasi ta page
			redirect('kaprodi/ta');
		}

		// Check Kuota Dosen Pembimbing 2
		// Set parameters for check nama_dosbim2
		// Search as Dosen Pembimbing 1
		$parameters1 = array(
			'nama_dosbim1' => $this->input->post('nama_dosbim2'),
			'status_registrasi !=' => "Dibatalkan",
			'status_registrasi !=' => "Telah disetujui oleh Dekan. Surat dapat dicetak",
			'id_registrasi !=' => $this->input->post('id_registrasi'),
		);
		// Search as Dosen Pembimbing 2
		$parameters2 = array(
			'nama_dosbim2' => $this->input->post('nama_dosbim2'),
			'status_registrasi !=' => "Dibatalkan",
			'status_registrasi !=' => "Telah disetujui oleh Dekan. Surat dapat dicetak",
			'id_registrasi !=' => $this->input->post('id_registrasi'),
		);

		// Get data
		$registrasi_ta1 = $this->Model_registrasi_ta->get($parameters1);
		$registrasi_ta2 = $this->Model_registrasi_ta->get($parameters2);

		if (count($registrasi_ta1) + count($registrasi_ta2) >= 8) {
			// Exceeded kuota dosen pembimbing

			// Set error flashdata
			$this->session->set_flashdata('alert_error', 'Jumlah mahasiswa bimbingan ' . $this->input->post('nama_dosbim2') . ' sudah melebihi kuota, silahkan pilih dosen pembimbing lain!');

			// redirect to registrasi ta page
			redirect('kaprodi/ta');
		}

		// Set registrasi ta data
		$newRegistrasi = array(
			'status_registrasi' => 'Telah disetujui oleh Kaprodi',
			'nama_dosbim1' => $this->input->post('nama_dosbim1'),
			'nama_dosbim2' => $this->input->post('nama_dosbim2'),
		);

		// Update registrasi ta data
		$this->Model_registrasi_ta->update($newRegistrasi, $this->input->post('id_registrasi'));

		// Set success flashdata
		$this->session->set_flashdata('alert_success', 'Verifikasi Berhasil!');

		// redirect to registration ta page
		redirect('kaprodi/ta');
	}


	// @route		POST kaprodi/batal_kap
	// @desc 		Batal registration status
	// @access 	Private
	public function batal_kap()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'kaprodi') {
			redirect('kaprodi/login');
		}

		// Set registrasi
		$newRegistrasi = array(
			'status_registrasi' => 'Dibatalkan',
			'alasan_batal' => $this->input->post('alasan_batal')
		);

		// Update registrasi data
		$this->Model_registrasi->update($newRegistrasi, $this->input->post('id_registrasi'));

		// Set success flashdata
		$this->session->set_flashdata('alert_success', 'Pembatalan Berhasil!');

		// redirect to registration pkl page
		redirect('kaprodi/pkl', 'refresh');
	}

	// @route		POST kaprodi/batal_kap_ta
	// @desc 		Batal registration ta status
	// @access 	Private
	public function batal_kap_ta()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'kaprodi') {
			redirect('kaprodi/login');
		}

		// Set registrasi
		$newRegistrasi = array(
			'status_registrasi' => 'Dibatalkan',
			'alasan_batal' => $this->input->post('alasan_batal')
		);

		// Update registrasi data
		$this->Model_registrasi_ta->update($newRegistrasi, $this->input->post('id_registrasi'));

		// Set success flashdata
		$this->session->set_flashdata('alert_success', 'Pembatalan Berhasil!');

		// redirect to registration pkl page
		redirect('kaprodi/ta', 'refresh');
	}

	// @route		GET kaprodi/rekap_kap
	// @desc 		Display registrations approved by Kaprodi
	// @access 	Private
	public function rekap_kap()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'kaprodi') {
			redirect('kaprodi/login');
		}

		// Set parameters
		$parameters_b = array(
			'status_registrasi' => 'Telah disetujui oleh Kaprodi',
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);
		$parameters_c = array(
			'status_registrasi' => 'Telah disetujui oleh Dekan. Surat dapat dicetak',
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);
		$parameters_d = array(
			'status_registrasi' => 'Dibatalkan',
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);

		// Get registrations data
		$data['registrasi_b'] = $this->Model_registrasi->get($parameters_b);
		$data['registrasi_c'] = $this->Model_registrasi->get($parameters_c);
		$data['registrasi_d'] = $this->Model_registrasi->get($parameters_d);

		// Load view page
		$this->load->view('template/header_kap');
		$this->load->view('kaprodi/rekap_pkl', $data);
		$this->load->view('template/footer');
	}

	// @route		GET kaprodi/rekap_ta_kap
	// @desc 		Display registration tas approved by Kaprodi
	// @access 	Private
	public function rekap_ta_kap()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'kaprodi') {
			redirect('kaprodi/login');
		}

		// Set parameters
		$parameters_b = array(
			'status_registrasi' => 'Telah disetujui oleh Kaprodi',
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);
		$parameters_c = array(
			'status_registrasi' => 'Telah disetujui oleh Dekan. Surat dapat dicetak',
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);
		$parameters_d = array(
			'status_registrasi' => 'Dibatalkan',
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);

		// Get registrations data
		$data['registrasi_b'] = $this->Model_registrasi_ta->get($parameters_b);
		$data['registrasi_c'] = $this->Model_registrasi_ta->get($parameters_c);
		$data['registrasi_d'] = $this->Model_registrasi_ta->get($parameters_d);

		// Load view page
		$this->load->view('template/header_kap');
		$this->load->view('kaprodi/rekap_ta', $data);
		$this->load->view('template/footer');
	}

	// @route		GET kaprodi/cetak_ta
	// @desc 		Generate Excel registration tas approved by Kaprodi
	// @access 	Private
	public function cetak_ta()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'kaprodi') {
			redirect('kaprodi/login');
		}

		// Set parameters
		$parameters_b = array(
			'status_registrasi' => 'Telah disetujui oleh Kaprodi',
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);
		$parameters_c = array(
			'status_registrasi' => 'Telah disetujui oleh Dekan. Surat dapat dicetak',
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);
		$parameters_d = array(
			'status_registrasi' => 'Dibatalkan',
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);

		// Get registrations data
		$data['registrasi_b'] = $this->Model_registrasi_ta->get($parameters_b);
		$data['registrasi_c'] = $this->Model_registrasi_ta->get($parameters_c);
		$data['registrasi_d'] = $this->Model_registrasi_ta->get($parameters_d);

		// PHPExcel
		// Load plugin PHPExcel
		include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

		$spreadsheet = new PHPExcel();

		$spreadsheet->setActiveSheetIndex(0);
		// Set document properties
		$spreadsheet->getProperties()->setCreator('SiKaTa')
			->setLastModifiedBy('SiKaTa')
			->setTitle('Rekap Data Kaprodi ' . $this->session->userdata('nama_prodi') . ' Mahasiswa TA')
			->setSubject('Rekap Data Kaprodi ' . $this->session->userdata('nama_prodi') . ' Mahasiswa TA')
			->setDescription('Rekap Data Kaprodi ' . $this->session->userdata('nama_prodi') . ' Mahasiswa TA');
		// add style to the header
		$styleArray = array(
			'font' => array(
				'bold' => true,
			),
			'borders' => array(
				'bottom' => array(
					'color' => array('rgb' => '333333'),
				),
			)
		);
		$spreadsheet->getActiveSheet()->getStyle('A1:H1')->applyFromArray($styleArray);
		// auto fit column to content
		foreach (range('A', 'H') as $columnID) {
			$spreadsheet->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
		}
		// set the names of header cells
		$spreadsheet->getActiveSheet()->setCellValue('A1', 'No');
		$spreadsheet->getActiveSheet()->setCellValue('B1', 'Nama');
		$spreadsheet->getActiveSheet()->setCellValue('C1', 'NIM');
		$spreadsheet->getActiveSheet()->setCellValue('D1', 'Semester/Tahun Akademik');
		$spreadsheet->getActiveSheet()->setCellValue('E1', 'Monitoring');
		$spreadsheet->getActiveSheet()->setCellValue('F1', 'Dosen Pembimbing 1');
		$spreadsheet->getActiveSheet()->setCellValue('G1', 'Dosen Pembimbing 2');
		$spreadsheet->getActiveSheet()->setCellValue('H1', 'Keterangan');
		$spreadsheet->getActiveSheet()->setCellValue('I1', 'Alasan Pembatalan');

		// Add some data
		$x = 2;
		foreach ($data['registrasi_b'] as $registrasi) {
			$spreadsheet->getActiveSheet()->setCellValue('A' . $x, $x - 1);
			$spreadsheet->getActiveSheet()->setCellValue('B' . $x, $registrasi['nama_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('C' . $x, $registrasi['nim_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('D' . $x, $registrasi['tahun']);
			$spreadsheet->getActiveSheet()->setCellValue('E' . $x, base_url('assets/img/') . $registrasi['monitoring']);
			$spreadsheet->getActiveSheet()->setCellValue('F' . $x, $registrasi['nama_dosbim1']);
			$spreadsheet->getActiveSheet()->setCellValue('G' . $x, $registrasi['nama_dosbim2']);
			$spreadsheet->getActiveSheet()->setCellValue('H' . $x, $registrasi['status_registrasi']);
			$spreadsheet->getActiveSheet()->setCellValue('I' . $x, $registrasi['alasan_batal']);
			$x++;
		}
		foreach ($data['registrasi_c'] as $registrasi) {
			$spreadsheet->getActiveSheet()->setCellValue('A' . $x, $x - 1);
			$spreadsheet->getActiveSheet()->setCellValue('B' . $x, $registrasi['nama_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('C' . $x, $registrasi['nim_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('D' . $x, $registrasi['tahun']);
			$spreadsheet->getActiveSheet()->setCellValue('E' . $x, base_url('assets/img/') . $registrasi['monitoring']);
			$spreadsheet->getActiveSheet()->setCellValue('F' . $x, $registrasi['nama_dosbim1']);
			$spreadsheet->getActiveSheet()->setCellValue('G' . $x, $registrasi['nama_dosbim2']);
			$spreadsheet->getActiveSheet()->setCellValue('H' . $x, $registrasi['status_registrasi']);
			$spreadsheet->getActiveSheet()->setCellValue('I' . $x, $registrasi['alasan_batal']);
			$x++;
		}
		foreach ($data['registrasi_d'] as $registrasi) {
			$spreadsheet->getActiveSheet()->setCellValue('A' . $x, $x - 1);
			$spreadsheet->getActiveSheet()->setCellValue('B' . $x, $registrasi['nama_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('C' . $x, $registrasi['nim_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('D' . $x, $registrasi['tahun']);
			$spreadsheet->getActiveSheet()->setCellValue('E' . $x, base_url('assets/img/') . $registrasi['monitoring']);
			$spreadsheet->getActiveSheet()->setCellValue('F' . $x, $registrasi['nama_dosbim1']);
			$spreadsheet->getActiveSheet()->setCellValue('G' . $x, $registrasi['nama_dosbim2']);
			$spreadsheet->getActiveSheet()->setCellValue('H' . $x, $registrasi['status_registrasi']);
			$spreadsheet->getActiveSheet()->setCellValue('I' . $x, $registrasi['alasan_batal']);
			$x++;
		}

		//Create file excel.xlsx
		$filename = 'Rekap Data Kaprodi ' . $this->session->userdata('nama_prodi') . ' Mahasiswa TA ' . date('d-m-Y H:i:s');

		// Save Excel 2007 file
		$objWriter = PHPExcel_IOFactory::createWriter($spreadsheet, 'Excel2007');
		ob_end_clean();
		// We'll be outputting an excel file
		header('Content-type: application/vnd.ms-excel');
		header('Content-Disposition: attachment; filename="' . $filename . '.xlsx"');
		$objWriter->save('php://output');
	}

	// @route		GET kaprodi/cetak_pkl
	// @desc 		Generate Excel registrations approved by Kaprodi
	// @access 	Private
	public function cetak_pkl()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'kaprodi') {
			redirect('kaprodi/login');
		}

		// Set parameters
		$parameters_b = array(
			'status_registrasi' => 'Telah disetujui oleh Kaprodi',
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);
		$parameters_c = array(
			'status_registrasi' => 'Telah disetujui oleh Dekan. Surat dapat dicetak',
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);
		$parameters_d = array(
			'status_registrasi' => 'Dibatalkan',
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);

		// Get registrations data
		$data['registrasi_b'] = $this->Model_registrasi->get($parameters_b);
		$data['registrasi_c'] = $this->Model_registrasi->get($parameters_c);
		$data['registrasi_d'] = $this->Model_registrasi->get($parameters_d);

		// PHPExcel
		// Load plugin PHPExcel
		include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

		$spreadsheet = new PHPExcel();

		$spreadsheet->setActiveSheetIndex(0);
		// Set document properties
		$spreadsheet->getProperties()->setCreator('SiKaTa')
			->setLastModifiedBy('SiKaTa')
			->setTitle('Rekap Data Kaprodi ' . $this->session->userdata('nama_prodi') . ' Mahasiswa KP')
			->setSubject('Rekap Data Kaprodi ' . $this->session->userdata('nama_prodi') . ' Mahasiswa KP')
			->setDescription('Rekap Data Kaprodi ' . $this->session->userdata('nama_prodi') . ' Mahasiswa KP');
		// add style to the header
		$styleArray = array(
			'font' => array(
				'bold' => true,
			),
			'borders' => array(
				'bottom' => array(
					'color' => array('rgb' => '333333'),
				),
			)
		);
		$spreadsheet->getActiveSheet()->getStyle('A1:H1')->applyFromArray($styleArray);
		// auto fit column to content
		foreach (range('A', 'H') as $columnID) {
			$spreadsheet->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
		}
		// set the names of header cells
		$spreadsheet->getActiveSheet()->setCellValue('A1', 'No');
		$spreadsheet->getActiveSheet()->setCellValue('B1', 'Nama');
		$spreadsheet->getActiveSheet()->setCellValue('C1', 'NIM');
		$spreadsheet->getActiveSheet()->setCellValue('D1', 'Semester/Tahun Akademik');
		$spreadsheet->getActiveSheet()->setCellValue('E1', 'Monitoring');
		$spreadsheet->getActiveSheet()->setCellValue('F1', 'Dosen Pembimbing Terpilih');
		$spreadsheet->getActiveSheet()->setCellValue('G1', 'Keterangan');
		$spreadsheet->getActiveSheet()->setCellValue('H1', 'Alasan Pembatalan');

		// Add some data
		$x = 2;
		foreach ($data['registrasi_b'] as $registrasi) {
			$spreadsheet->getActiveSheet()->setCellValue('A' . $x, $x - 1);
			$spreadsheet->getActiveSheet()->setCellValue('B' . $x, $registrasi['nama_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('C' . $x, $registrasi['nim_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('D' . $x, $registrasi['tahun']);
			$spreadsheet->getActiveSheet()->setCellValue('E' . $x, base_url('assets/img/') . $registrasi['monitoring']);
			$spreadsheet->getActiveSheet()->setCellValue('F' . $x, $registrasi['nama_dosbim']);
			$spreadsheet->getActiveSheet()->setCellValue('G' . $x, $registrasi['status_registrasi']);
			$spreadsheet->getActiveSheet()->setCellValue('H' . $x, $registrasi['alasan_batal']);
			$x++;
		}
		foreach ($data['registrasi_c'] as $registrasi) {
			$spreadsheet->getActiveSheet()->setCellValue('A' . $x, $x - 1);
			$spreadsheet->getActiveSheet()->setCellValue('B' . $x, $registrasi['nama_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('C' . $x, $registrasi['nim_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('D' . $x, $registrasi['tahun']);
			$spreadsheet->getActiveSheet()->setCellValue('E' . $x, base_url('assets/img/') . $registrasi['monitoring']);
			$spreadsheet->getActiveSheet()->setCellValue('F' . $x, $registrasi['nama_dosbim']);
			$spreadsheet->getActiveSheet()->setCellValue('G' . $x, $registrasi['status_registrasi']);
			$spreadsheet->getActiveSheet()->setCellValue('H' . $x, $registrasi['alasan_batal']);
			$x++;
		}
		foreach ($data['registrasi_d'] as $registrasi) {
			$spreadsheet->getActiveSheet()->setCellValue('A' . $x, $x - 1);
			$spreadsheet->getActiveSheet()->setCellValue('B' . $x, $registrasi['nama_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('C' . $x, $registrasi['nim_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('D' . $x, $registrasi['tahun']);
			$spreadsheet->getActiveSheet()->setCellValue('E' . $x, base_url('assets/img/') . $registrasi['monitoring']);
			$spreadsheet->getActiveSheet()->setCellValue('F' . $x, $registrasi['nama_dosbim']);
			$spreadsheet->getActiveSheet()->setCellValue('G' . $x, $registrasi['status_registrasi']);
			$spreadsheet->getActiveSheet()->setCellValue('H' . $x, $registrasi['alasan_batal']);
			$x++;
		}

		//Create file excel.xlsx
		$filename = 'Rekap Data Kaprodi ' . $this->session->userdata('nama_prodi') . ' Mahasiswa KP ' . date('d-m-Y H:i:s');

		// Save Excel 2007 file
		$objWriter = PHPExcel_IOFactory::createWriter($spreadsheet, 'Excel2007');
		ob_end_clean();
		// We'll be outputting an excel file
		header('Content-type: application/vnd.ms-excel');
		header('Content-Disposition: attachment; filename="' . $filename . '.xlsx"');
		$objWriter->save('php://output');
	}

	// @route		GET kaprodi/login
	// @desc 		Display kaprodi login page
	// @access 	Public
	public function login()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') == 'kaprodi') {
			redirect('kaprodi/login');
		}

		// Load view page
		$this->load->view('kaprodi/login');
	}

	// @route		POST kaprodi/action_login
	// @desc 		Process kaprodi login information
	// @access 	Public
	public function action_login()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') == 'kaprodi') {
			redirect('kaprodi');
		}

		// Set inputs to local variables
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// Check login information
		$kaprodi = $this->Model_auth->login_kaprodi($username, $password);

		if (!empty($kaprodi)) {
			// User kaprodi found

			// Set session userdata
			$data_session = array(
				'username' => $kaprodi['username'],
				'status' => "kaprodi",
				'nama_prodi' => $kaprodi['nama_prodi']
			);
			$this->session->set_userdata($data_session);

			// Set success flashdata
			$this->session->set_flashdata('alert_success', 'Kaprodi successfully logged in!');

			// Redirect to index kaprodi
			redirect('kaprodi');
		} else {
			// User kaprodi not found

			// Set error flashdata
			$this->session->set_flashdata('alert_error', 'Username / Password Anda Salah!');

			// Redirect to login kaprodi
			redirect('kaprodi/login');
		}
	}

	// @route		GET kaprodi/register
	// @desc 		Display add kaprodi page
	// @access 	Private
	public function register()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Get prodi data
		$data['prodi'] = $this->Model_prodi->get();

		// Load view page
		$this->load->view('kaprodi/register', $data);
	}

	// @route		POST kaprodi/register_action
	// @desc 		Process add kaprodi information
	// @access 	Private
	public function register_action()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Set parameters
		$parameters = array(
			'username' => $this->input->post('username')
		);

		// Get user kaprodi data
		$kaprodi = $this->Model_kaprodi->get($parameters);

		if (count($kaprodi) > 0) {
			// Username is already used

			// Set error flashdata
			$this->session->set_flashdata('alert_error', 'Username Sudah Terdaftar!');

			// Redirect to kaprodi register page
			redirect('kaprodi/register');
		}

		// Set new kaprodi
		$newKaprodi = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama_prodi' => $this->input->post('nama_prodi'),
			'nama_kaprodi' => $this->input->post('nama_kaprodi'),
		);

		// Create new kaprodi
		$this->Model_kaprodi->create($newKaprodi);

		// Set success flashdata
		$this->session->set_flashdata('alert_success', "Kaprodi berhasil ditambahkan!");

		// redirect to user kaprodi page
		redirect('admin/kaprodi');
	}

	// @route		GET kaprodi/delete/:id_kaprodi
	// @desc 		Delete kaprodi by id
	// @access 	Private
	public function delete($id_kaprodi)
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Delete Kaprodi
		$this->Model_kaprodi->delete($id_kaprodi);

		// Set success flashdata
		$this->session->set_flashdata('alert_success', "Kaprodi berhasil dihapus!");

		// Redirect to kaprodi page
		redirect('admin/kaprodi');
	}

	// @route		POST kaprodi/edit_action
	// @desc 		Process edit kaprodi by id
	// @access 	Private
	public function edit_action()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Set parameters
		$parameters = array(
			'username' => $this->input->post('username'),
			'id_kaprodi !=' => $this->input->post('id_kaprodi')
		);

		// Get kaprodi data
		$kaprodi = $this->Model_kaprodi->get($parameters);

		if (count($kaprodi) > 0) {
			// Username is already used

			// Set error flashdata
			$this->session->set_flashdata('alert_error', 'Username Sudah Terdaftar!');

			// Redirect to kaprodi page
			redirect("admin/kaprodi");
		}

		// Set new kaprodi
		$newKaprodi = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama_prodi' => $this->input->post('nama_prodi'),
			'nama_kaprodi' => $this->input->post('nama_kaprodi'),
		);

		// Update kaprodi data
		$this->Model_kaprodi->update($newKaprodi, $this->input->post('id_kaprodi'));

		// Set success flashdata
		$this->session->set_flashdata('alert_success', 'Kaprodi berhasil diubah!');

		// Redirect to kaprodi page
		redirect('admin/kaprodi');
	}

	// @route		GET kaprodi/logout
	// @desc 		Log kaprodi out
	// @access 	Private
	public function logout()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'kaprodi') {
			redirect('kaprodi/login');
		}

		// Delete session data
		$this->session->sess_destroy();

		// Redirect to kaprodi login page
		redirect('kaprodi/login');
	}

	// @route		GET kaprodi/jurnal
	// @desc 		Display jurnal data for Kaprodi to approve
	// @access 	Private
	public function jurnal()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'kaprodi') {
			redirect('kaprodi/login');
		}

		// Set parameters
		$parameters = array(
			'status' => '',
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);

		// Get jurnal data
		$data['jurnal'] = $this->Model_jurnal->get($parameters);

		// Load view page
		$this->load->view('template/header_kap');
		$this->load->view('kaprodi/tabel_jurnal', $data);
		$this->load->view('template/footer');
	}

	// @route		GET kaprodi/rekap_jurnal
	// @desc 		Display jurnal data approved by Kaprodi
	// @access 	Private
	public function rekap_jurnal()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'kaprodi') {
			redirect('kaprodi/login');
		}

		// Set parameters
		$parameters = array(
			'status !=' => '',
			'nama_prodi' => $this->session->userdata('nama_prodi')
		);

		// Get jurnal data
		$data['jurnal'] = $this->Model_jurnal->get($parameters);

		// Load view page
		$this->load->view('template/header_kap');
		$this->load->view('kaprodi/rekap_jurnal', $data);
		$this->load->view('template/footer');
	}

	// @route		POST kaprodi/verif_jurnal
	// @desc 		Process approve jurnal
	// @access 	Private
	public function verif_jurnal()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'kaprodi') {
			redirect('kaprodi/login');
		}

		// Set jurnal
		$newJurnal = array(
			'status' => "Disetujui"
		);

		// Update jurnal data
		$this->Model_jurnal->update($newJurnal, $this->input->post('id_jurnal'));

		// Set success flashdata
		$this->session->set_flashdata('alert_success', "Jurnal Berhasil Diverifikasi!");

		// redirect to kaprodi jurnal page
		redirect('kaprodi/jurnal');
	}
}
