<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	// @route		GET keuangan
	// @desc 		Get keuangan index page
	// @access 	Private
	public function index()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') != 'keuangan') {
			redirect('keuangan/login');
		}

		// Redirect to pkl
		redirect('keuangan/pkl');
	}

	// @route		GET keuangan/index_pkl
	// @desc 		Display registrations data for Keuangan to approve
	// @access 	Private
	public function index_pkl()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'keuangan') {
			redirect('keuangan/login');
		}

		// Set parameters
		$parameters = array(
			'status_registrasi' => ''
		);

		// Get registrasi data
		$data['registrasi'] = $this->Model_registrasi->get($parameters);

		// Load view page
		$this->load->view('template/header_keu');
		$this->load->view('keuangan/tabel_pkl', $data);
		$this->load->view('template/footer');
	}

	// @route		GET keuangan/index_ta
	// @desc 		Display registration tas data for Keuangan to approve
	// @access 	Private
	public function index_ta()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'keuangan') {
			redirect('keuangan/login');
		}

		// Set parameters
		$parameters = array(
			'status_registrasi' => ''
		);

		// Get registrasi_ta data
		$data['registrasi_ta'] = $this->Model_registrasi_ta->get($parameters);

		// Load view page
		$this->load->view('template/header_keu');
		$this->load->view('keuangan/tabel_ta', $data);
		$this->load->view('template/footer');
	}

	// @route		POST keuangan/verif_keu
	// @desc 		Approve registration status
	// @access 	Private
	public function verif_keu()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'keuangan') {
			redirect('keuangan/login');
		}

		// Assign new registrasi
		$newRegistration = array(
			'status_registrasi' => 'Telah disetujui oleh keuangan'
		);

		// Update registrasi data
		$this->Model_registrasi->update($newRegistration, $this->input->post('id_registrasi'));

		// Set success flashdata
		$this->session->set_flashdata('alert_success', 'Verifikasi Berhasil!');

		// Redirect to keuangan pkl page
		redirect('keuangan/pkl');
	}

	// @route		POST keuangan/verif_keu_ta
	// @desc 		Approve registration_ta status
	// @access 	Private
	public function verif_keu_ta()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'keuangan') {
			redirect('keuangan/login');
		}

		// Assign new registrasi
		$newRegistration = array(
			'status_registrasi' => 'Telah disetujui oleh keuangan'
		);

		// Update registrasi data
		$this->Model_registrasi_ta->update($newRegistration, $this->input->post('id_registrasi'));

		// Set success flashdata
		$this->session->set_flashdata('alert_success', 'Verifikasi Berhasil!');

		// Redirect to keuangan pkl page
		redirect('keuangan/ta');
	}

	// @route		GET keuangan/rekap_keu
	// @desc 		Display registrasions approved by Keuangan data
	// @access 	Private
	public function rekap_keu()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'keuangan') {
			redirect('keuangan/login');
		}

		// Set parameters
		$parameters_a = array(
			'status_registrasi' => 'Telah disetujui oleh keuangan'
		);
		$parameters_b = array(
			'status_registrasi' => 'Telah disetujui oleh Kaprodi'
		);
		$parameters_c = array(
			'status_registrasi' => 'Dibatalkan'
		);

		// Get registrations data
		$data['registrasi_a'] = $this->Model_registrasi->get($parameters_a);
		$data['registrasi_b'] = $this->Model_registrasi->get($parameters_b);
		$data['registrasi_c'] = $this->Model_registrasi->get($parameters_c);

		// Load view page
		$this->load->view('template/header_keu');
		$this->load->view('keuangan/rekap_pkl', $data);
		$this->load->view('template/footer');
	}

	// @route		GET keuangan/rekap_keu_ta
	// @desc 		Display registrasions approved by Keuangan data
	// @access 	Private
	public function rekap_keu_ta()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'keuangan') {
			redirect('keuangan/login');
		}

		// Set parameters
		$parameters_a = array(
			'status_registrasi' => 'Telah disetujui oleh keuangan'
		);
		$parameters_b = array(
			'status_registrasi' => 'Telah disetujui oleh Kaprodi'
		);
		$parameters_c = array(
			'status_registrasi' => 'Dibatalkan'
		);

		// Get registration tas data
		$data['registrasi_a'] = $this->Model_registrasi_ta->get($parameters_a);
		$data['registrasi_b'] = $this->Model_registrasi_ta->get($parameters_b);
		$data['registrasi_c'] = $this->Model_registrasi_ta->get($parameters_c);

		// Load view page
		$this->load->view('template/header_keu');
		$this->load->view('keuangan/rekap_ta', $data);
		$this->load->view('template/footer');
	}

	// @route		GET keuangan/cetak_pkl
	// @desc 		Generate Excel registrasions approved by Keuangan data
	// @access 	Private
	public function cetak_pkl()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'keuangan') {
			redirect('keuangan/login');
		}

		// Set parameters
		$parameters_a = array(
			'status_registrasi' => 'Telah disetujui oleh keuangan'
		);
		$parameters_b = array(
			'status_registrasi' => 'Telah disetujui oleh Kaprodi'
		);
		$parameters_c = array(
			'status_registrasi' => 'Dibatalkan'
		);

		// Get registrations data
		$data['registrasi_a'] = $this->Model_registrasi->get($parameters_a);
		$data['registrasi_b'] = $this->Model_registrasi->get($parameters_b);
		$data['registrasi_c'] = $this->Model_registrasi->get($parameters_c);

		// PHPExcel
		// Load plugin PHPExcel
		include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

		$spreadsheet = new PHPExcel();

		$spreadsheet->setActiveSheetIndex(0);
		// Set document properties
		$spreadsheet->getProperties()->setCreator('SiKaTa')
			->setLastModifiedBy('SiKaTa')
			->setTitle('Rekap Data Keuangan Mahasiswa KP')
			->setSubject('Rekap Data Keuangan Mahasiswa KP')
			->setDescription('Rekap Data Keuangan Mahasiswa KP');
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
		$spreadsheet->getActiveSheet()->setCellValue('E1', 'Bukti Bayar');
		$spreadsheet->getActiveSheet()->setCellValue('F1', 'Tanggal Registrasi');
		$spreadsheet->getActiveSheet()->setCellValue('G1', 'Keterangan');
		$spreadsheet->getActiveSheet()->setCellValue('H1', 'Alasan Pembatalan');

		// Add some data
		$x = 2;
		foreach ($data['registrasi_a'] as $registrasi) {
			$spreadsheet->getActiveSheet()->setCellValue('A' . $x, $x - 1);
			$spreadsheet->getActiveSheet()->setCellValue('B' . $x, $registrasi['nama_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('C' . $x, $registrasi['nim_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('D' . $x, $registrasi['tahun']);
			$spreadsheet->getActiveSheet()->setCellValue('E' . $x, base_url('assets/img/') . $registrasi['bukti_bayar']);
			$spreadsheet->getActiveSheet()->setCellValue('F' . $x, date('d-m-Y', strtotime($registrasi['tanggal_registrasi'])));
			$spreadsheet->getActiveSheet()->setCellValue('G' . $x, $registrasi['status_registrasi']);
			$spreadsheet->getActiveSheet()->setCellValue('H' . $x, $registrasi['alasan_batal']);
			$x++;
		}
		foreach ($data['registrasi_b'] as $registrasi) {
			$spreadsheet->getActiveSheet()->setCellValue('A' . $x, $x - 1);
			$spreadsheet->getActiveSheet()->setCellValue('B' . $x, $registrasi['nama_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('C' . $x, $registrasi['nim_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('D' . $x, $registrasi['tahun']);
			$spreadsheet->getActiveSheet()->setCellValue('E' . $x, base_url('assets/img/') . $registrasi['bukti_bayar']);
			$spreadsheet->getActiveSheet()->setCellValue('F' . $x, date('d-m-Y', strtotime($registrasi['tanggal_registrasi'])));
			$spreadsheet->getActiveSheet()->setCellValue('G' . $x, $registrasi['status_registrasi']);
			$spreadsheet->getActiveSheet()->setCellValue('H' . $x, $registrasi['alasan_batal']);
			$x++;
		}
		foreach ($data['registrasi_c'] as $registrasi) {
			$spreadsheet->getActiveSheet()->setCellValue('A' . $x, $x - 1);
			$spreadsheet->getActiveSheet()->setCellValue('B' . $x, $registrasi['nama_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('C' . $x, $registrasi['nim_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('D' . $x, $registrasi['tahun']);
			$spreadsheet->getActiveSheet()->setCellValue('E' . $x, base_url('assets/img/') . $registrasi['bukti_bayar']);
			$spreadsheet->getActiveSheet()->setCellValue('F' . $x, date('d-m-Y', strtotime($registrasi['tanggal_registrasi'])));
			$spreadsheet->getActiveSheet()->setCellValue('G' . $x, $registrasi['status_registrasi']);
			$spreadsheet->getActiveSheet()->setCellValue('H' . $x, $registrasi['alasan_batal']);
			$x++;
		}

		//Create file excel.xlsx
		$filename = 'Rekap Data Keuangan Mahasiswa KP ' . date('d-m-Y H:i:s');

		// Save Excel 2007 file
		$objWriter = PHPExcel_IOFactory::createWriter($spreadsheet, 'Excel2007');
		ob_end_clean();
		// We'll be outputting an excel file
		header('Content-type: application/vnd.ms-excel');
		header('Content-Disposition: attachment; filename="' . $filename . '.xlsx"');
		$objWriter->save('php://output');
	}

	// @route		GET keuangan/cetak_ta
	// @desc 		Generate Excel registrasions approved by Keuangan data
	// @access 	Private
	public function cetak_ta()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'keuangan') {
			redirect('keuangan/login');
		}

		// Set parameters
		$parameters_a = array(
			'status_registrasi' => 'Telah disetujui oleh keuangan'
		);
		$parameters_b = array(
			'status_registrasi' => 'Telah disetujui oleh Kaprodi'
		);
		$parameters_c = array(
			'status_registrasi' => 'Dibatalkan'
		);

		// Get registration tas data
		$data['registrasi_a'] = $this->Model_registrasi_ta->get($parameters_a);
		$data['registrasi_b'] = $this->Model_registrasi_ta->get($parameters_b);
		$data['registrasi_c'] = $this->Model_registrasi_ta->get($parameters_c);

		// PHPExcel
		// Load plugin PHPExcel
		include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

		$spreadsheet = new PHPExcel();

		$spreadsheet->setActiveSheetIndex(0);
		// Set document properties
		$spreadsheet->getProperties()->setCreator('SiKaTa')
			->setLastModifiedBy('SiKaTa')
			->setTitle('Rekap Data Keuangan Mahasiswa TA')
			->setSubject('Rekap Data Keuangan Mahasiswa TA')
			->setDescription('Rekap Data Keuangan Mahasiswa TA');
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
		$spreadsheet->getActiveSheet()->setCellValue('E1', 'Bukti Bayar');
		$spreadsheet->getActiveSheet()->setCellValue('F1', 'Tanggal Registrasi');
		$spreadsheet->getActiveSheet()->setCellValue('G1', 'Keterangan');
		$spreadsheet->getActiveSheet()->setCellValue('H1', 'Alasan Pembatalan');

		// Add some data
		$x = 2;
		foreach ($data['registrasi_a'] as $registrasi) {
			$spreadsheet->getActiveSheet()->setCellValue('A' . $x, $x - 1);
			$spreadsheet->getActiveSheet()->setCellValue('B' . $x, $registrasi['nama_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('C' . $x, $registrasi['nim_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('D' . $x, $registrasi['tahun']);
			$spreadsheet->getActiveSheet()->setCellValue('E' . $x, base_url('assets/img/') . $registrasi['bukti_bayar']);
			$spreadsheet->getActiveSheet()->setCellValue('F' . $x, date('d-m-Y', strtotime($registrasi['tanggal_registrasi'])));
			$spreadsheet->getActiveSheet()->setCellValue('G' . $x, $registrasi['status_registrasi']);
			$spreadsheet->getActiveSheet()->setCellValue('H' . $x, $registrasi['alasan_batal']);
			$x++;
		}
		foreach ($data['registrasi_b'] as $registrasi) {
			$spreadsheet->getActiveSheet()->setCellValue('A' . $x, $x - 1);
			$spreadsheet->getActiveSheet()->setCellValue('B' . $x, $registrasi['nama_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('C' . $x, $registrasi['nim_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('D' . $x, $registrasi['tahun']);
			$spreadsheet->getActiveSheet()->setCellValue('E' . $x, base_url('assets/img/') . $registrasi['bukti_bayar']);
			$spreadsheet->getActiveSheet()->setCellValue('F' . $x, date('d-m-Y', strtotime($registrasi['tanggal_registrasi'])));
			$spreadsheet->getActiveSheet()->setCellValue('G' . $x, $registrasi['status_registrasi']);
			$spreadsheet->getActiveSheet()->setCellValue('H' . $x, $registrasi['alasan_batal']);
			$x++;
		}
		foreach ($data['registrasi_c'] as $registrasi) {
			$spreadsheet->getActiveSheet()->setCellValue('A' . $x, $x - 1);
			$spreadsheet->getActiveSheet()->setCellValue('B' . $x, $registrasi['nama_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('C' . $x, $registrasi['nim_mhs']);
			$spreadsheet->getActiveSheet()->setCellValue('D' . $x, $registrasi['tahun']);
			$spreadsheet->getActiveSheet()->setCellValue('E' . $x, base_url('assets/img/') . $registrasi['bukti_bayar']);
			$spreadsheet->getActiveSheet()->setCellValue('F' . $x, date('d-m-Y', strtotime($registrasi['tanggal_registrasi'])));
			$spreadsheet->getActiveSheet()->setCellValue('G' . $x, $registrasi['status_registrasi']);
			$spreadsheet->getActiveSheet()->setCellValue('H' . $x, $registrasi['alasan_batal']);
			$x++;
		}

		//Create file excel.xlsx
		$filename = 'Rekap Data Keuangan Mahasiswa TA ' . date('d-m-Y H:i:s');

		// Save Excel 2007 file
		$objWriter = PHPExcel_IOFactory::createWriter($spreadsheet, 'Excel2007');
		ob_end_clean();
		// We'll be outputting an excel file
		header('Content-type: application/vnd.ms-excel');
		header('Content-Disposition: attachment; filename="' . $filename . '.xlsx"');
		$objWriter->save('php://output');
	}

	// @route		POST keuangan/batal_keu
	// @desc 		Disapprove registration status
	// @access 	Private
	public function batal_keu()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'keuangan') {
			redirect('keuangan/login');
		}

		// Set registrasi
		$newRegistrasi = array(
			'status_registrasi' => 'Dibatalkan',
			'alasan_batal' => $this->input->post('alasan_batal')
		);

		// Update registrasi
		$this->Model_registrasi->update($newRegistrasi, $this->input->post('id_registrasi'));

		// Set error flashdata
		$this->session->set_flashdata('alert_success', 'Registration successfully dibatalkan!');

		// Redirect to keuangan pkl page
		redirect('keuangan/pkl', 'refresh');
	}

	// @route		POST keuangan/batal_keu_ta
	// @desc 		Disapprove registration ta status
	// @access 	Private
	public function batal_keu_ta()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'keuangan') {
			redirect('keuangan/login');
		}

		// Set registrasi
		$newRegistrasi = array(
			'status_registrasi' => 'Dibatalkan',
			'alasan_batal' => $this->input->post('alasan_batal')
		);

		// Update registrasi
		$this->Model_registrasi_ta->update($newRegistrasi, $this->input->post('id_registrasi'));

		// Set error flashdata
		$this->session->set_flashdata('alert_success', 'Registration TA successfully dibatalkan!');

		// Redirect to keuangan pkl page
		redirect('keuangan/ta', 'refresh');
	}

	// @route		GET keuangan/login
	// @desc 		Display keuangan login page
	// @access 	Private
	public function login()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') == 'keuangan') {
			redirect('keuangan');
		}

		// Load view page
		$this->load->view('keuangan/login');
	}

	// @route		POST keuangan/action_login
	// @desc 		Process keuangan login information
	// @access 	Private
	public function action_login()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') == 'keuangan') {
			redirect('keuangan');
		}

		// Set inputs to local variable
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// Check login information
		$keuangan = $this->Model_auth->login_keuangan($username, $password);

		if (!empty($keuangan)) {
			// User keuangan found

			// Set session data
			$data_session = array(
				'username' => $username,
				'status' => "keuangan"
			);
			$this->session->set_userdata($data_session);

			// Set error flashdata
			$this->session->set_flashdata('alert_success', 'Successfully logged in!');

			// Redirect to keuangan index page
			redirect('keuangan');
		} else {
			// User keuangan not foung
			$this->session->set_flashdata('alert_error', 'Username / Password Anda Salah!');

			// Redirect to keuangan index page
			redirect('keuangan/login');
		}
	}

	// @route		GET keuangan/register
	// @desc 		Display keuangan register page
	// @access 	Private
	public function register()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Load view page
		$this->load->view('keuangan/register');
	}

	// @route		POST keuangan/register_action
	// @desc 		Process keuangan register information
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

		// Get keuangan data
		$keuangan = $this->Model_keuangan->get($parameters);

		if (count($keuangan) > 0) {
			// Username already user

			// Set error flashdata
			$this->session->set_flashdata('alert_error', 'Username Sudah Terdaftar!');

			// Redirect to keuangan register page
			redirect('keuangan/register');
		}

		// Set keuangan
		$newKeuangan = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);

		// Create new keuangan
		$this->Model_keuangan->create($newKeuangan);

		// Set success flashdata
		$this->session->set_flashdata('alert_success', 'Data Berhasil Ditambahkan!');

		// Redirect to admin keuangan page
		redirect('admin/keuangan');
	}

	// @route		GET keuangan/delete/:id_keuangan
	// @desc 		Process delete keuangan data
	// @access 	Private
	public function delete($id_keuangan)
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Delete keuangan data
		$this->Model_keuangan->delete($id_keuangan);

		// Set success flashdata
		$this->session->set_flashdata('alert_success', 'Data Berhasil Dihapus!');

		// Redirect to admin keuangan page
		redirect('admin/keuangan');
	}

	// @route		POST keuangan/edit_action
	// @desc 		Process keuangan edit information
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
			'id_keuangan !=' => $this->input->post('id_keuangan')
		);

		// Get keuangan data
		$keuangan = $this->Model_keuangan->get($parameters);

		if (count($keuangan) > 0) {
			// Username already used

			// Set error flashdata
			$this->session->set_flashdata('alert_error', 'Username Sudah Terdaftar!');

			// Redirect to admin keuangan page
			redirect("admin/keuangan");
		}

		// Set keuangan
		$newKeuangan = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);

		// Update keuangan data
		$this->Model_keuangan->update($newKeuangan, $this->input->post('id_keuangan'));

		// Set success flashdata
		$this->session->set_flashdata('alert_success', 'Data Berhasil Diperbarui!');

		// Redirect to admin keuangan page
		redirect('admin/keuangan');
	}

	// @route		GET keuangan/logout
	// @desc 		Log keuangan out
	// @access 	Private
	public function logout()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'keuangan') {
			redirect('keuangan/login');
		}

		// Delete session data
		$this->session->sess_destroy();

		// Redirect to keuangan login page
		redirect('keuangan/login');
	}
}
