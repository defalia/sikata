<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_keuangan extends CI_Model
{
	// Get all data keuangan
	public function get($parameters = [])
	{
		foreach ($parameters as $parameter => $value) {
			$this->db->where($parameter, $value);
		}
		$keuangan = $this->db->get('user_keuangan')->result_array();
		return $keuangan;
	}

	// Get keuangan data by id
	public function getById($id_keuangan)
	{
		$this->db->where('id_keuangan', $id_keuangan);
		$keuangan = $this->db->get('user_keuangan')->row_array();
		return $keuangan;
	}

	// Create new keuangan data
	public function create($newKeuangan)
	{
		$keuangan = $this->db->insert('user_keuangan', $newKeuangan);
		return $keuangan;
	}

	// Update keuangan data by id
	public function update($newKeuangan, $id_keuangan)
	{
		$this->db->where('id_keuangan', $id_keuangan);
		$keuangan = $this->db->update('user_keuangan', $newKeuangan);
		return $keuangan;
	}

	// Delete keuangan data by id
	public function delete($id_keuangan)
	{
		$this->db->where('id_keuangan', $id_keuangan);
		$keuangan = $this->db->delete('user_keuangan');
		return $keuangan;
	}
}
