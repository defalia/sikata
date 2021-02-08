<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajax extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  // @route		GET ajax/getOptionDosenByProdi
  // @desc 		Get dosen data by nama_prodi
  // @access 	Public
  public function getOptionDosenByProdi($nama_prodi)
  {
    // Set parameters
    $parameters = array(
      'nama_prodi' => $nama_prodi
    );

    // Get dosen data
    $dosen = $this->Model_dosen->get($parameters);

    // Return data in JSON encoded form
    echo json_encode($dosen);
  }
}
