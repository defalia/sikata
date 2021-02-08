<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_dekanat extends CI_Model
{
	// Get All Dekanat
	public function get($parameters = [])
	{
		foreach ($parameters as $parameter => $value) {
			$this->db->where($parameter, $value);
		}
		return $this->db->get('user_dekanat')->result_array();
	}

	// Get Dekanat by Id
	public function getById($id_dekanat)
	{
		$this->db->where('id_dekanat', $id_dekanat);
		return $this->db->get('user_dekanat')->row_array();
	}

	// Create New Dekanat
	public function create($newDekanat)
	{
		return $this->db->insert('user_dekanat', $newDekanat);
	}

	// Update Dekanat By Id
	public function update($newDekanat, $id_dekanat)
	{
		$this->db->where('id_dekanat', $id_dekanat);
		$dekanat = $this->db->update('user_dekanat', $newDekanat);
		return $dekanat;
	}

	// Delete Dekanat By Id
	public function delete($id_dekanat)
	{
		$this->db->where('id_dekanat', $id_dekanat);
		return $this->db->delete('user_dekanat');
	}
}
