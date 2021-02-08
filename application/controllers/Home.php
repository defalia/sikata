<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	// @route		GET home
	// @desc 		Display home page
	// @access 	Public
	public function index()
	{
		// Load view page
		$this->load->view('pages/home');
	}

	// @route		POST home/get_nim
	// @desc 		Check registrations by nim
	// @access 	Public
	public function get_nim()
	{
		// Set parameters
		$parameters = array(
			'nim_mhs' => $this->input->post('nim_mhs')
		);

		// Get registrasi data
		$data['registrasi'] = $this->Model_registrasi->get($parameters);
		// Get registrasi ta data
		$data['registrasi_ta'] = $this->Model_registrasi_ta->get($parameters);
		// Get registrasi jurnal data
		$data['jurnal'] = $this->Model_jurnal->get($parameters);

		// Load view page
		$this->load->view('pages/status_mhs', $data);
	}

	// @route		GET home/surat/:id_registrasi
	// @desc 		Generate SK PKL by id_registrasi
	// @access 	Public
	public function surat($id_registrasi)
	{
		// Get registrasi data
		$data['registrasi'] = $this->Model_registrasi->getById($id_registrasi);

		// Load vire page
		$this->load->view('pages/sk_pkl', $data);
	}

	// @route		GET home/surat_ta/:id_registrasi
	// @desc 		Generate SK TA by id_registrasi
	// @access 	Public
	public function surat_ta($id_registrasi)
	{
		// Get registrasi data
		$data['registrasi_ta'] = $this->Model_registrasi_ta->getById($id_registrasi);

		// Load view page
		$this->load->view('pages/sk_ta', $data);
	}
}
