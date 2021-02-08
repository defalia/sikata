<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_prodi extends CI_Model
{
	// Get all data prodi
	public function get($parameters = [])
	{
		foreach ($parameters as $parameter => $value) {
			$this->db->where($parameter, $value);
		}
		$prodi = $this->db->get('prodi')->result_array();
		return $prodi;
	}

	// Get prodi data by id
	public function getById($id_prodi)
	{
		$this->db->where('id_prodi', $id_prodi);
		$prodi = $this->db->get('prodi')->row_array();
		return $prodi;
	}

	// Create new prodi data
	public function create($newProdi)
	{
		$prodi = $this->db->insert('prodi', $newProdi);
		return $prodi;
	}

	// Update prodi data by id
	public function update($newProdi, $id_prodi)
	{
		$this->db->where('id_prodi', $id_prodi);
		$prodi = $this->db->update('prodi', $newProdi);
		return $prodi;
	}

	// Delete prodi data by id
	public function delete($id_prodi)
	{
		$this->db->where('id_prodi', $id_prodi);
		$prodi = $this->db->delete('prodi');
		return $prodi;
	}
}
