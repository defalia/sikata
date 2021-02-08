<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_registrasi extends CI_Model
{
  // Get all data registrasi
  public function get($parameters = [])
  {
    foreach ($parameters as $parameter => $value) {
      $this->db->where($parameter, $value);
    }
    $registrasi = $this->db->get('registrasi')->result_array();
    return $registrasi;
  }

  // Get registrasi data by id
  public function getById($id_registrasi)
  {
    $this->db->where('id_registrasi', $id_registrasi);
    $registrasi = $this->db->get('registrasi')->row_array();
    return $registrasi;
  }

  // Create new registrasi data
  public function create($newRegistrasi)
  {
    $registrasi = $this->db->insert('registrasi', $newRegistrasi);
    return $registrasi;
  }

  // Update registrasi data by id
  public function update($newRegistrasi, $id_registrasi)
  {
    $this->db->where('id_registrasi', $id_registrasi);
    $registrasi = $this->db->update('registrasi', $newRegistrasi);
    return $registrasi;
  }

  // Delete registrasi data by id
  public function delete($id_registrasi)
  {
    $this->db->where('id_registrasi', $id_registrasi);
    $registrasi = $this->db->delete('registrasi');
    return $registrasi;
  }
}
