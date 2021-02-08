<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	// @route		GET admin
	// @desc 		Display new registrations
	// @access 	Private
	public function index()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Set parameters
		$parameters = array(
			'status_registrasi' => ''
		);

		// Get registrasi data
		$data['registrasi'] = $this->Model_registrasi->get($parameters);
		// Get registrasi_ta data
		$data['registrasi_ta'] = $this->Model_registrasi_ta->get($parameters);

		// Load view page
		$this->load->view('admin/header');
		$this->load->view('admin/tabel_registrasi', $data);
		$this->load->view('admin/footer');
	}

	// @route		GET admin/keuangan
	// @desc 		Display registrations verified by Keuangan
	// @access 	Private
	public function keuangan()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Set parameters
		$parameters = array(
			'status_registrasi' => 'Telah disetujui oleh keuangan'
		);

		// Get registrasi data
		$data['registrasi'] = $this->Model_registrasi->get($parameters);
		// Get registrasi_ta data
		$data['registrasi_ta'] = $this->Model_registrasi_ta->get($parameters);

		// Load view page
		$this->load->view('admin/header');
		$this->load->view('admin/tabel_keuangan', $data);
		$this->load->view('admin/footer');
	}

	// @route		GET admin/kaprodi
	// @desc 		Display registrations verified by Kaprodi
	// @access 	Private
	public function kaprodi()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Set parameters
		$parameters = array(
			'status_registrasi' => 'Telah disetujui oleh Kaprodi'
		);

		// Get registrasi data
		$data['registrasi'] = $this->Model_registrasi->get($parameters);
		// Get registrasi_ta data
		$data['registrasi_ta'] = $this->Model_registrasi_ta->get($parameters);

		// Load view page
		$this->load->view('admin/header');
		$this->load->view('admin/tabel_kaprodi', $data);
		$this->load->view('admin/footer');
	}

	// @route		GET admin/dekanat
	// @desc 		Display registrations verified by Dekanat
	// @access 	Private
	public function dekanat()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Set parameters
		$parameters = array(
			'status_registrasi' => 'Telah disetujui oleh Dekan. Surat dapat dicetak'
		);

		// Get registrasi data
		$data['registrasi'] = $this->Model_registrasi->get($parameters);
		// Get registrasi_ta data
		$data['registrasi_ta'] = $this->Model_registrasi_ta->get($parameters);

		// Load view page
		$this->load->view('admin/header');
		$this->load->view('admin/tabel_dekanat', $data);
		$this->load->view('admin/footer');
	}

	// @route		GET admin/u_keuangan
	// @desc 		Display user_keuangan data
	// @access 	Private
	public function u_keuangan()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Get user_keuangan data
		$data['account'] = $this->Model_keuangan->get();

		// Load view page
		$this->load->view('admin/header');
		$this->load->view('admin/user_keuangan', $data);
		$this->load->view('admin/footer');
	}

	// @route		GET admin/u_kaprodi
	// @desc 		Display user_kaprodi data
	// @access 	Private
	public function u_kaprodi()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Get user_kaprodi data
		$data['account'] = $this->Model_kaprodi->get();
		// Get prodi data
		$data['prodi'] = $this->Model_prodi->get();

		// Load view page
		$this->load->view('admin/header');
		$this->load->view('admin/user_kaprodi', $data);
		$this->load->view('admin/footer');
	}

	// @route		GET admin/u_dekanat
	// @desc 		Display user_dekanat data
	// @access 	Private
	public function u_dekanat()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Get user_dekanat data
		$data['account'] = $this->Model_dekanat->get();

		// Load view page
		$this->load->view('admin/header');
		$this->load->view('admin/user_dekanat', $data);
		$this->load->view('admin/footer');
	}

	// @route		GET admin/login
	// @desc 		Display login page
	// @access 	Public
	public function login()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') == 'admin') {
			redirect('admin');
		}

		// Load view page
		$this->load->view('admin/login');
	}

	// @route		POST admin/action_login
	// @desc 		Process admin login information
	// @access 	Public
	public function action_login()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') == 'admin') {
			redirect('admin');
		}

		// Assign input to local variables
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// Check admin login informations
		$admin = $this->Model_auth->login_admin($username, $password);

		if (!empty($admin)) {
			// Login success

			// Assign session data
			$data_session = array(
				'username' => $admin['username'],
				'status' => "admin"
			);
			$this->session->set_userdata($data_session);

			// Set flashdata
			$this->session->set_flashdata('alert_success', 'You are successfully logged in!');

			// rediret to admin index page
			redirect('admin');
		} else {
			// Login Failed

			// Set flashdata
			$this->session->set_flashdata('alert_error', 'Username / Password Anda Salah!');

			// rediret to admin login page
			redirect('admin/login');
		}
	}

	// @route		GET admin/logout
	// @desc 		Log admin out
	// @access 	Private
	public function logout()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Destroy session data
		$this->session->sess_destroy();

		// rediret to admin login page
		redirect('admin/login');
	}

	// @route		GET admin/prodi
	// @desc 		Display prodi data
	// @access 	Private
	public function prodi()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Get prodi data
		$data['prodi'] = $this->Model_prodi->get();

		// Load view page
		$this->load->view('admin/header');
		$this->load->view('admin/prodi', $data);
		$this->load->view('admin/footer');
	}

	// @route		GET admin/dosen
	// @desc 		Display dosen data
	// @access 	Private
	public function dosen()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Get dosen data
		$data['dosen'] = $this->Model_dosen->get();
		// Get prodi data
		$data['prodi'] = $this->Model_prodi->get();

		// Load view page
		$this->load->view('admin/header');
		$this->load->view('admin/dosen', $data);
		$this->load->view('admin/footer');
	}
}
