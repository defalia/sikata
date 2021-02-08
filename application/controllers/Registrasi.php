<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	// @route		GET registrasi
	// @desc 		Display registrasi pkl page
	// @access 	Public
	public function index()
	{
		// Get registrasi data
		$data['registrasi'] = $this->Model_registrasi->get();

		// Load view page
		$this->load->view('registrasi/index', $data);
	}

	// @route		GET registrasi/add
	// @desc 		Display add registrasi pkl page
	// @access 	Public
	public function add()
	{
		// Get prodi data
		$data['prodi'] = $this->Model_prodi->get();

		// Load view page
		$this->load->view('registrasi/add_registrasi', $data);
	}

	// @route		POST registrasi/add
	// @desc 		Process add registrasi information
	// @access 	Public
	public function action_add()
	{
		// Set parameters
		$parameters = array(
			'nim_mhs' => $this->input->post('nim_mhs'),
			'status_registrasi !=' => 'Dibatalkan'
		);

		// Get registrasi
		$registrasi = $this->Model_registrasi->get($parameters);

		if (count($registrasi) > 0) {
			// NIM is currently registered

			// Set error flashdata
			$this->session->set_flashdata('alert_error', 'Mahasiswa Sudah Terdaftar!');

			// Redirect to add registrasi page
			redirect('registrasi/add');
		}

		// Upload bukti bayar
		$config['upload_path'] = './assets/img';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size'] = '1000';
		$config['file_name'] = url_title($this->input->post('nim_mhs'), '-', TRUE) . '_';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('bukti_bayar')) {
			$this->session->set_flashdata('alert_error', 'File Bukti Pembayaran Tidak Sesuai Format!');
			redirect('registrasi/add');
		} else {
			$data = array('upload_data' => $this->upload->data('bukti_bayar'));
			$bukti_bayar = $this->upload->data('file_name');
		}

		// Upload monitoring
		$config2['upload_path'] = './assets/img';
		$config2['allowed_types'] = 'jpg|jpeg|png|pdf';
		$config2['max_size'] = '2000';
		$config2['file_name'] = url_title($this->input->post('nim_mhs'), '-', TRUE) . '_';

		$this->load->library('upload', $config2);

		if (!$this->upload->do_upload('monitoring')) {
			$this->session->set_flashdata('alert_error', 'File Monitoring Nilai Tidak Sesuai Format!');
			redirect('registrasi/add');
		} else {
			$data = array('upload_data' => $this->upload->data('monitoring'));
			$monitoring = $this->upload->data('file_name');
		}

		// Set registrasi
		$newRegistrasi = array(
			'nama_mhs' => $this->input->post('nama_mhs'),
			'nim_mhs' => $this->input->post('nim_mhs'),
			'judul_pkl' => $this->input->post('judul_pkl'),
			'nama_prodi' => $this->input->post('nama_prodi'),
			'tahun' => $this->input->post('tahun'),
			'bukti_bayar' => $bukti_bayar,
			'monitoring' => $monitoring
		);

		// Create new registrasi
		$this->Model_registrasi->create($newRegistrasi);

		// Set success flashdata
		$this->session->set_flashdata('alert_success', 'Regitrasi Berhasil!');

		// Redirect to registrasi page
		redirect('/');
	}

	// @route		GET registrasi/add_ta
	// @desc 		Display add registrasi_ta page
	// @access 	Public
	public function add_ta()
	{
		// Get prodi data
		$data['prodi'] = $this->Model_prodi->get();

		// Load view page
		$this->load->view('registrasi/add_regista', $data);
	}

	// @route		POST registrasi/action_add_ta
	// @desc 		Process add registrasi_ta information
	// @access 	Public
	public function action_add_ta()
	{
		// Set parameters
		$parameters = array(
			'nim_mhs' => $this->input->post('nim_mhs'),
			'status_registrasi !=', 'Dibatalkan'
		);

		// Get registrasi_ta data
		$registrasi_ta = $this->Model_registrasi_ta->get($parameters);

		if (count($registrasi_ta) > 0) {
			// NIM is currently registered

			// Set error flashdata
			$this->session->set_flashdata('alert_error', 'Mahasiswa Sudah Terdaftar!');

			// Redirect to registration ta page
			redirect('registrasi/add_ta');
		}

		// Check Kuota Dosen Pembimbing
		// Set parameters
		$parameters1 = array(
			'nama_dosbim1' => $this->input->post('nama_dosbim1'),
			'status_registrasi !=' => 'Dibatalkan',
			'status_registrasi !=' => "Telah disetujui oleh Dekan. Surat dapat dicetak",
		);
		$parameters2 = array(
			'nama_dosbim2' => $this->input->post('nama_dosbim1'),
			'status_registrasi !=' => 'Dibatalkan',
			'status_registrasi !=' => "Telah disetujui oleh Dekan. Surat dapat dicetak",
		);

		// Get registrasi_ta data
		$registrasi_ta1 = $this->Model_registrasi_ta->get($parameters1);
		$registrasi_ta2 = $this->Model_registrasi_ta->get($parameters2);
		if (count($registrasi_ta1) + count($registrasi_ta2) >= 8) {
			// Dosen pembimbing exceed quota

			// Set error flashdata
			$this->session->set_flashdata('alert_error', 'Jumlah mahasiswa bimbingan ' . $this->input->post('nama_dosbim1') . ' sudah melebihi kuota, silahkan pilih dosen pembimbing lain!');

			// Redirect to add registrasi ta page
			redirect('registrasi/add_ta');
		}

		// Upload bukti bayar
		$config['upload_path'] = './assets/img';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size'] = '1000';
		$config['file_name'] = url_title($this->input->post('nim_mhs'), '-', TRUE) . '_';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('bukti_bayar')) {
			$this->session->set_flashdata('alert_error', 'File Bukti Pembayaran Tidak Sesuai Format!');
			redirect('registrasi/add_ta');
		} else {
			$data = array('upload_data' => $this->upload->data('bukti_bayar'));
			$bukti_bayar = $this->upload->data('file_name');
		}

		// Upload monitoring
		$config2['upload_path'] = './assets/img';
		$config2['allowed_types'] = 'jpg|jpeg|png|pdf';
		$config2['max_size'] = '2000';
		$config2['file_name'] = url_title($this->input->post('nim_mhs'), '-', TRUE) . '_';

		$this->load->library('upload', $config2);

		if (!$this->upload->do_upload('monitoring')) {
			$this->session->set_flashdata('alert_error', 'File Monitoring Nilai Tidak Sesuai Format!');
			redirect('registrasi/add_ta');
		} else {
			$data = array('upload_data' => $this->upload->data('monitoring'));

			$monitoring = $this->upload->data('file_name');
		}

		// Set registrasi ta
		$newRegistrasi = array(
			'nama_mhs' => $this->input->post('nama_mhs'),
			'nim_mhs' => $this->input->post('nim_mhs'),
			'judul_ta' => $this->input->post('judul_ta'),
			'nama_prodi' => $this->input->post('nama_prodi'),
			'tahun' => $this->input->post('tahun'),
			'nama_dosbim1' => $this->input->post('nama_dosbim1'),
			'bukti_bayar' => $bukti_bayar,
			'monitoring' => $monitoring
		);

		// Create new registrasi_ta
		$this->Model_registrasi_ta->create($newRegistrasi);

		// Set success flashdata
		$this->session->set_flashdata('alert_success', 'Regitrasi Berhasil!');

		// Redirect to home
		redirect('/');
	}
}
