<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_registrasi_ta extends CI_Model
{
  // Get all data registrasi_ta
  public function get($parameters = [])
  {
    foreach ($parameters as $parameter => $value) {
      $this->db->where($parameter, $value);
    }
    $registrasi_ta = $this->db->get('registrasi_ta')->result_array();
    return $registrasi_ta;
  }

  // Get registrasi_ta data by id
  public function getById($id_registrasi)
  {
    $this->db->where('id_registrasi', $id_registrasi);
    $registrasi_ta = $this->db->get('registrasi_ta')->row_array();
    return $registrasi_ta;
  }

  // Create new registrasi_ta data
  public function create($newRegistrasi)
  {
    $registrasi_ta = $this->db->insert('registrasi_ta', $newRegistrasi);
    return $registrasi_ta;
  }

  // Update registrasi_ta data by id
  public function update($newRegistrasi, $id_registrasi)
  {
    $this->db->where('id_registrasi', $id_registrasi);
    $registrasi_ta = $this->db->update('registrasi_ta', $newRegistrasi);
    return $registrasi_ta;
  }

  // Delete registrasi_ta data by id
  public function delete($id_registrasi)
  {
    $this->db->where('id_registrasi', $id_registrasi);
    $registrasi_ta = $this->db->delete('registrasi_ta');
    return $registrasi_ta;
  }
}
