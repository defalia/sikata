<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_dosen extends CI_Model
{
  // Get all data dosen
  public function get($parameters = [])
  {
    foreach ($parameters as $parameter => $value) {
      $this->db->where($parameter, $value);
    }
    $this->db->join('prodi', 'prodi.id_prodi = dosen.id_prodi');
    $dosen = $this->db->get('dosen')->result_array();
    return $dosen;
  }

  // Get dosen data by nip
  public function getById($nip)
  {
    $this->db->where('nip', $nip);
    $dosen = $this->db->get('dosen')->row_array();
    return $dosen;
  }

  // Create new dosen data
  public function create($newProdi)
  {
    $dosen = $this->db->insert('dosen', $newProdi);
    return $dosen;
  }

  // Update dosen data by nip
  public function update($newProdi, $nip)
  {
    $this->db->where('nip', $nip);
    $dosen = $this->db->update('dosen', $newProdi);
    return $dosen;
  }

  // Delete dosen data by nip
  public function delete($nip)
  {
    $this->db->where('nip', $nip);
    $dosen = $this->db->delete('dosen');
    return $dosen;
  }
}
