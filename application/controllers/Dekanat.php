<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dekanat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	// @route		GET dekanat
	// @desc 		Get dekanat index page
	// @access 	Private
	public function index()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'dekanat') {
			redirect('dekanat/login');
		}

		// Redirect to pkl page
		redirect('dekanat/pkl');
	}

	// @route		GET dekanat/index_pkl
	// @desc 		Display registrations data for Dekanat to approve
	// @access 	Private
	public function index_pkl()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'dekanat') {
			redirect('dekanat/login');
		}

		// Set parameters
		$parameters = array(
			'status_registrasi' => 'Telah disetujui oleh Kaprodi'
		);

		// Get registrasi data
		$data['registrasi'] = $this->Model_registrasi->get($parameters);

		// Load view page
		$this->load->view('template/header_dek');
		$this->load->view('dekanat/tabel_pkl', $data);
		$this->load->view('template/footer');
	}

	// @route		GET dekanat/index_ta
	// @desc 		Display registration_tas data for Dekanat to approve
	// @access 	Private
	public function index_ta()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'dekanat') {
			redirect('dekanat/login');
		}

		// Set parameters
		$parameters = array(
			'status_registrasi' => 'Telah disetujui oleh Kaprodi'
		);

		// Get registrasi_ta data
		$data['registrasi_ta'] = $this->Model_registrasi_ta->get($parameters);

		// Load view page
		$this->load->view('template/header_dek');
		$this->load->view('dekanat/tabel_ta', $data);
		$this->load->view('template/footer');
	}

	// @route		POST dekanat/verif_dek
	// @desc 		Approve registration status
	// @access 	Private
	public function verif_dek()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'dekanat') {
			redirect('dekanat/login');
		}

		// Assign new registrasi
		$newRegistration = array(
			'status_registrasi' => 'Telah disetujui oleh Dekan. Surat dapat dicetak'
		);

		// Update registrasi data
		$this->Model_registrasi->update($newRegistration, $this->input->post('id_registrasi'));

		// Set success flashdata
		$this->session->set_flashdata('alert_success', 'Verifikasi Berhasil!');

		// redirect to registration page
		redirect('dekanat/pkl');
	}

	// @route		POST dekanat/verif_dek_ta
	// @desc 		Approve registration_ta status
	// @access 	Private
	public function verif_dek_ta()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'dekanat') {
			redirect('dekanat/login');
		}

		// Assign new registrasi
		$newRegistration = array(
			'status_registrasi' => 'Telah disetujui oleh Dekan. Surat dapat dicetak'
		);

		// Update registrasi data
		$this->Model_registrasi_ta->update($newRegistration, $this->input->post('id_registrasi'));

		// Set success flashdata
		$this->session->set_flashdata('alert_success', 'Verifikasi Berhasil!');

		// redirect to registration_ta page
		redirect('dekanat/ta');
	}

	// @route		GET dekanat/rekap_pkl
	// @desc 		Display registrasions approved by Dekanat data
	// @access 	Private
	public function rekap_pkl()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'dekanat') {
			redirect('dekanat/login');
		}

		// Set parameters
		$parameters = array(
			'status_registrasi' => 'Telah disetujui oleh Dekan. Surat dapat dicetak'
		);

		// Get registrasi data
		$data['registrasi'] = $this->Model_registrasi->get($parameters);

		// Load view page
		$this->load->view('template/header_dek');
		$this->load->view('dekanat/rekap_pkl', $data);
		$this->load->view('template/footer');
	}

	// @route		GET dekanat/rekap_ta
	// @desc 		Display registrasion_tas approved by Dekanat data
	// @access 	Private
	public function rekap_ta()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'dekanat') {
			redirect('dekanat/login');
		}

		// Set parameters
		$parameters = array(
			'status_registrasi' => 'Telah disetujui oleh Dekan. Surat dapat dicetak'
		);

		// Get registrasi data
		$data['registrasi_ta'] = $this->Model_registrasi_ta->get($parameters);

		// Load view page
		$this->load->view('template/header_dek');
		$this->load->view('dekanat/rekap_ta', $data);
		$this->load->view('template/footer');
	}

	// @route		GET dekanat/login
	// @desc 		Display login page
	// @access 	Public
	public function login()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') == 'dekanat') {
			redirect('dekanat');
		}

		// Load view page
		$this->load->view('dekanat/login');
	}

	// @route		POST dekanat/action_login
	// @desc 		Process dekanat login information
	// @access 	Public
	public function action_login()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') == 'dekanat') {
			redirect('dekanat');
		}

		// Assign input to local variables
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// Check dekanat login informations
		$dekanat = $this->Model_auth->login_dekanat($username, $password);

		if (!empty($dekanat)) {
			// Login success

			// Assign session data
			$data_session = array(
				'username' => $dekanat['username'],
				'status' => "dekanat"
			);
			$this->session->set_userdata($data_session);

			// Set success flashdata
			$this->session->set_flashdata('alert_success', 'You are successfully logged in!');

			// rediret to dekanat index page
			redirect('dekanat');
		} else {
			// Login Failed

			// Set error flashdata
			$this->session->set_flashdata('alert_error', 'Username / Password Anda Salah!');

			// rediret to dekanat login page
			redirect('dekanat/login');
		}
	}

	// @route		GET dekanat/register
	// @desc 		Display register dekanat page
	// @access 	Private
	public function register()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Load view page
		$this->load->view('dekanat/register');
	}

	// @route		POST dekanat/register_action
	// @desc 		Process register information
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

		// Get dekanat data
		$dekanat = $this->Model_dekanat->get($parameters);

		if (count($dekanat) > 0) {
			// Username already used

			// Set error flashdata
			$this->session->set_flashdata('alert_error', 'Username Sudah Terdaftar!');

			// Redirect to register dekanat page
			redirect('admin/dekanat');
		}

		// Set new Dekanat
		$newDekanat = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);

		// Create new dekanat data
		$this->Model_dekanat->create($newDekanat);

		// Set error flashdata
		$this->session->set_flashdata('alert_success', 'User dekanat successfully registered!');

		// Redirect to user dekanat page
		redirect('admin/dekanat');
	}

	// @route		GET dekanat/delete/:id_dekanat
	// @desc 		Delete user dekanat by id
	// @access 	Private
	public function delete($id_dekanat)
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Delete user by id
		$this->Model_dekanat->delete($id_dekanat);

		// Set error flashdata
		$this->session->set_flashdata('alert_success', 'User dekanat successfully deleted!');

		// Redirect to user dekanat page
		redirect('admin/dekanat');
	}

	// @route		POST dekanat/edit_action
	// @desc 		Update user dekanat by id
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
			'id_dekanat !=' => $this->input->post('id_dekanat')
		);

		// Get dekanat data
		$check = $this->Model_dekanat->get($parameters);
		if (count($check) > 0) {
			// Username already used

			// Set error flashdata
			$this->session->set_flashdata('alert_error', 'Username Sudah Terdaftar!');

			// Redirect to edit dekanat page
			redirect("admin/dekanat");
		}

		// Set new dekanat
		$newDekanat = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);

		// Update dekanat data
		$this->Model_dekanat->update($newDekanat, $this->input->post('id_dekanat'));

		// Set success flashdata
		$this->session->set_flashdata('alert_success', 'Dekanat successfully updated!');

		// Redirect to user dekanat page
		redirect('admin/dekanat');
	}

	// @route		GET dekanat/logout
	// @desc 		Log dekanat out
	// @access 	Private
	public function logout()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'dekanat') {
			redirect('dekanat/login');
		}

		// Delete session data
		$this->session->sess_destroy();

		// Redirect to login dekanat page
		redirect('dekanat/login');
	}

	// @route		GET dekanat/cetak_pkl
	// @desc 		Create Excel file of registrasion approved by Dekanat
	// @access 	Private
	public function cetak_pkl()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'dekanat') {
			redirect('dekanat/login');
		}

		// Set parameters
		$parameters = array(
			'status_registrasi' => 'Telah disetujui oleh Dekan. Surat dapat dicetak'
		);

		// Get registrasi data
		$data['registrasi'] = $this->Model_registrasi->get($parameters);

		// PHPExcel
		// Load plugin PHPExcel
		include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

		$spreadsheet = new PHPExcel();

		$spreadsheet->setActiveSheetIndex(0);
		// Set document properties
		$spreadsheet->getProperties()->setCreator('SiKaTa')
			->setLastModifiedBy('SiKaTa')
			->setTitle('Rekap Data Dekanat Mahasiswa KP')
			->setSubject('Rekap Data Dekanat Mahasiswa KP')
			->setDescription('Rekap Data Dekanat Mahasiswa KP');
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
		foreach ($data['registrasi'] as $registrasi) {
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
		$filename = 'Rekap Data Dekanat Mahasiswa KP ' . date('d-m-Y H:i:s');

		// Save Excel 2007 file
		$objWriter = PHPExcel_IOFactory::createWriter($spreadsheet, 'Excel2007');
		ob_end_clean();
		// We'll be outputting an excel file
		header('Content-type: application/vnd.ms-excel');
		header('Content-Disposition: attachment; filename="' . $filename . '.xlsx"');
		$objWriter->save('php://output');
	}

	// @route		GET dekanat/cetak_ta
	// @desc 		Create Excel file of registrasion_ta approved by Dekanat
	// @access 	Private
	public function cetak_ta()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'dekanat') {
			redirect('dekanat/login');
		}

		// Set parameters
		$parameters = array(
			'status_registrasi' => 'Telah disetujui oleh Dekan. Surat dapat dicetak'
		);

		// Get registrasi data
		$data['registrasi'] = $this->Model_registrasi->get($parameters);

		// PHPExcel
		// Load plugin PHPExcel
		include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

		$spreadsheet = new PHPExcel();

		$spreadsheet->setActiveSheetIndex(0);
		// Set document properties
		$spreadsheet->getProperties()->setCreator('SiKaTa')
			->setLastModifiedBy('SiKaTa')
			->setTitle('Rekap Data Dekanat Mahasiswa TA')
			->setSubject('Rekap Data Dekanat Mahasiswa TA')
			->setDescription('Rekap Data Dekanat Mahasiswa TA');
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
		foreach ($data['registrasi'] as $registrasi) {
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
		$filename = 'Rekap Data Dekanat Mahasiswa TA ' . date('d-m-Y H:i:s');

		// Save Excel 2007 file
		$objWriter = PHPExcel_IOFactory::createWriter($spreadsheet, 'Excel2007');
		ob_end_clean();
		// We'll be outputting an excel file
		header('Content-type: application/vnd.ms-excel');
		header('Content-Disposition: attachment; filename="' . $filename . '.xlsx"');
		$objWriter->save('php://output');
	}
}
