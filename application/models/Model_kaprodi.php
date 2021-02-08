<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kaprodi extends CI_Model
{
	// Get all data kaprodi
	public function get($parameters = [])
	{
		foreach ($parameters as $parameter => $value) {
			$this->db->where($parameter, $value);
		}
		$kaprodi = $this->db->get('user_kaprodi')->result_array();
		return $kaprodi;
	}

	// Get kaprodi data by id
	public function getById($id_kaprodi)
	{
		$this->db->where('id_kaprodi', $id_kaprodi);
		$kaprodi = $this->db->get('user_kaprodi')->row_array();
		return $kaprodi;
	}

	// Create new kaprodi data
	public function create($newKaprodi)
	{
		$kaprodi = $this->db->insert('user_kaprodi', $newKaprodi);
		return $kaprodi;
	}

	// Update kaprodi data by id
	public function update($newKaprodi, $id_kaprodi)
	{
		$this->db->where('id_kaprodi', $id_kaprodi);
		$kaprodi = $this->db->update('user_kaprodi', $newKaprodi);
		return $kaprodi;
	}

	// Delete kaprodi data by id
	public function delete($id_kaprodi)
	{
		$this->db->where('id_kaprodi', $id_kaprodi);
		$kaprodi = $this->db->delete('user_kaprodi');
		return $kaprodi;
	}
}
