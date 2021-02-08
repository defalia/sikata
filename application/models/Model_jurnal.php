<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_jurnal extends CI_Model
{
  // Get all data jurnal
  public function get($parameters = [])
  {
    foreach ($parameters as $parameter => $value) {
      $this->db->where($parameter, $value);
    }
    $this->db->join('registrasi_ta', 'registrasi_ta.id_registrasi = jurnal.id_registrasi_ta');
    $jurnal = $this->db->get('jurnal')->result_array();
    return $jurnal;
  }

  // Get jurnal data by id
  public function getById($id_jurnal)
  {
    $this->db->where('id_jurnal', $id_jurnal);
    $jurnal = $this->db->get('jurnal')->row_array();
    return $jurnal;
  }

  // Create new jurnal data
  public function create($newJurnal)
  {
    $jurnal = $this->db->insert('jurnal', $newJurnal);
    return $jurnal;
  }

  // Update jurnal data by id
  public function update($newJurnal, $id_jurnal)
  {
    $this->db->where('id_jurnal', $id_jurnal);
    $jurnal = $this->db->update('jurnal', $newJurnal);
    return $jurnal;
  }

  // Delete jurnal data by id
  public function delete($id_jurnal)
  {
    $this->db->where('id_jurnal', $id_jurnal);
    $jurnal = $this->db->delete('jurnal');
    return $jurnal;
  }
}
