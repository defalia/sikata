<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurnal extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  // @route		GET jurnal
  // @desc 		Display verified jurnal
  // @access 	Public
  public function index()
  {
    // Set parameters
    $parameters = array(
      'status' => "Disetujui"
    );

    // Get jurnal data
    $data['jurnal'] = $this->Model_jurnal->get($parameters);

    // Load view page
    $this->load->view('jurnal/index', $data);
  }

  // @route		GET jurnal/add
  // @desc 		Display add jurnal page
  // @access 	Public
  public function add()
  {
    // Load view page
    $this->load->view('jurnal/tambah');
  }

  // @route		POST jurnal/action_add
  // @desc 		Process add jurnal information
  // @access 	Public
  public function action_add()
  {
    // Get id_registrasi_ta from input nomor_sk
    $id_registrasi_ta = explode('/', $this->input->post('nomor_sk'))[0];

    if (empty(explode('.', $id_registrasi_ta)[1])) {
      // Id_registrasi not found in nomor_sk

      // Set error flashdata
      $this->session->set_flashdata("alert_error", "Nomor SK is not valid!");

      // Redirect to add jurnal page
      redirect('jurnal/add');
    }

    // Separate SK and id_registrasi
    $id_registrasi_ta = explode('.', $id_registrasi_ta)[1];

    // Set parameters
    $parameters = array(
      'id_registrasi' => $id_registrasi_ta,
      'nim_mhs' => $this->input->post('nim_mhs')
    );

    // Get registrasi_ta data
    $mahasiswa = $this->Model_registrasi_ta->get($parameters);

    if (count($mahasiswa) == 0) {
      // Id_egistrasi or nim_mhs is invalid

      // Set error flashdata
      $this->session->set_flashdata("alert_error", "Nomor SK atau NIM tidak terdaftar!");

      // Redirect to add jurnal page
      redirect('jurnal/add');
    }

    // Upload file jurnal
    $config['upload_path'] = './assets/uploads/jurnal';
    $config['allowed_types'] = 'jpg|jpeg|png|pdf';
    $config['max_size'] = '10000';
    $config['file_name'] = url_title($this->input->post('nim_mhs'), '-', TRUE) . '_Jurnal';

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('file_jurnal')) {
      $this->session->set_flashdata('alert_error', 'File Jurnal Tidak Sesuai Format!');
      redirect('registrasi/add_ta');
    } else {
      $data = array('upload_data' => $this->upload->data('file_jurnal'));
      $file_jurnal = $this->upload->data('file_name');
    }

    // Set jurnal
    $newJurnal = array(
      'id_registrasi_ta' => $id_registrasi_ta,
      'judul' => $this->input->post('judul'),
      'file_jurnal' => $file_jurnal,
      'status' => ''
    );

    // Create new jurnal
    $this->Model_jurnal->create($newJurnal);

    // Set success flashdata
    $this->session->set_flashdata("alert_success", "Jurnal berhasil diunggah mohon tunggu verifikasi dari Kaprodi!");

    // Redirect to home
		redirect('/');
  }
}
