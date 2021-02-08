<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  // @route		POST dosen/add_action
  // @desc 		Create new dosen
  // @access 	Private
  public function add_action()
  {
    // Check if user has logged in
    if ($this->session->userdata('status') !== 'admin') {
      redirect('admin/login');
    }

    // Set parameters
    $parameters = array(
      'nip' => $this->input->post('nip')
    );

    // Get dosen data
    $dosen = $this->Model_dosen->get($parameters);

    if (count($dosen) > 0) {
      // Nip is already registered

      // Set error flashdata
      $this->session->set_flashdata('alert_error', "Gagal Menambahkan Dosen, NIP Sudah Terdaftar!");

      // Redirect to dosen page
      redirect('admin/dosen');
    }

    // Set new dosen
    $newDosen = array(
      'nip' => $this->input->post('nip'),
      'nama_dosen' => $this->input->post('nama_dosen'),
      'id_prodi' => $this->input->post('id_prodi'),
      'jabatan_fungsional' => $this->input->post('jabatan_fungsional')
    );

    // Create new dosen data
    $this->Model_dosen->create($newDosen);

    // Set success flashdata
    $this->session->set_flashdata('alert_success', "Dosen Berhasil Dibuat!");

    // Redirect to dosen page
    redirect('admin/dosen');
  }

  // @route		POST dosen/edit_action
  // @desc 		Update dosen by id
  // @access 	Private
  public function edit_action()
  {
    // Check if user has logged in
    if ($this->session->userdata('status') !== 'admin') {
      redirect('admin/login');
    }

    // Set parameters
    $parameters = array(
      'nip !=' => $this->input->post('current_nip'),
      'nip' => $this->input->post('nip')
    );

    // Get dosen data
    $dosen = $this->Model_dosen->get($parameters);

    if (count($dosen) > 0) {
      // Nip is already registered

      // Set error flashdata
      $this->session->set_flashdata('alert_error', "Gagal Menambahkan Dosen, NIP Sudah Terdaftar!");

      // Redirect to dosen page
      redirect('admin/dosen');
    }

    // Set new dosen
    $newDosen = array(
      'nip' => $this->input->post('nip'),
      'nama_dosen' => $this->input->post('nama_dosen'),
      'id_prodi' => $this->input->post('id_prodi'),
      'jabatan_fungsional' => $this->input->post('jabatan_fungsional')
    );

    // Update dosen data
    $this->Model_dosen->update($newDosen, $this->input->post('current_nip'));

    // Set success flashdata
    $this->session->set_flashdata('alert_success', "Dosen Berhasil Diperbarui!");

    // Redirect to dosen page
    redirect('admin/dosen');
  }

  // @route		GET dosen/delete/:nip
  // @desc 		Delete dosen by id
  // @access 	Private
  public function delete($nip)
  {
    // Check if user has logged in
    if ($this->session->userdata('status') !== 'admin') {
      redirect('admin/login');
    }

    // Delete dosen data
    $this->Model_dosen->delete($nip);

    // Set success flashdata
    $this->session->set_flashdata('alert_success', "Dosen Berhasil Dihapus!");

    // Redirect to dosen page
    redirect('admin/dosen');
  }
}
