<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	// @route		POST prodi/add_action
	// @desc 		Process create new prodi
	// @access 	Private
	public function add_action()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Set prodi
		$newProdi = array(
			'nama_prodi' => $this->input->post('nama_prodi')
		);

		// Create new prodi
		$this->Model_prodi->create($newProdi);

		// Set success flashdata
		$this->session->set_flashdata('alert_success', "Program Studi Berhasil Dibuat!");

		// redirect to admin prodi page
		redirect('admin/prodi');
	}

	// @route		POST prodi/edit_action
	// @desc 		Process edit prodi by id
	// @access 	Private
	public function edit_action()
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Set prodi
		$newProdi = array(
			'nama_prodi' => $this->input->post('nama_prodi')
		);

		// Update prodi by id
		$this->Model_prodi->update($newProdi, $this->input->post('id_prodi'));

		// Set success flashdata
		$this->session->set_flashdata('alert_success', "Program Studi Berhasil Diperbarui!");

		// Redirect to admin prodi page
		redirect('admin/prodi');
	}

	// @route		GET prodi/delete/:id_prodi
	// @desc 		Process delete prodi by id
	// @access 	Private
	public function delete($id_prodi)
	{
		// Check if user has logged in
		if ($this->session->userdata('status') !== 'admin') {
			redirect('admin/login');
		}

		// Delete prodi
		$this->Model_prodi->delete($id_prodi);

		// Set success flashdata
		$this->session->set_flashdata('alert_success', "Program Studi Berhasil Dihapus!");

		// Redirect to admin prodi page
		redirect('admin/prodi');
	}
}
