
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_mhs extends CI_Model{
	public function verif_keu(){
		$data = array(
			'status_registrasi' => 'Telah disetujui oleh keuangan'
		);

		$this->db->where('id_registrasi',$this->input->post('id_registrasi'));
		return $this->db->update('registrasi',$data);
	}

	public function verif_keu_ta(){
		$data = array(
			'status_registrasi' => 'Telah disetujui oleh keuangan'
		);

		$this->db->where('id_registrasi',$this->input->post('id_registrasi'));
		return $this->db->update('registrasi_ta',$data);
	}

	public function verif_kap(){
		$data = array(
			'status_registrasi' => 'Telah disetujui oleh Kaprodi',
			'nama_dosbim' => $this->input->post('nama_dosbim')
		);

		$this->db->where('id_registrasi',$this->input->post('id_registrasi'));
		return $this->db->update('registrasi',$data);
	}

	public function verif_kap_ta(){
		$data = array(
			'status_registrasi' => 'Telah disetujui oleh Kaprodi',
			'nama_dosbim1' => $this->input->post('nama_dosbim1'),
			'nama_dosbim2' => $this->input->post('nama_dosbim2'),

		);

		$this->db->where('id_registrasi',$this->input->post('id_registrasi'));
		return $this->db->update('registrasi_ta',$data);
	}

	public function verif_dek(){
		$data = array(
			'status_registrasi' => 'Telah disetujui oleh Dekan. Surat dapat dicetak'
		);

		$this->db->where('id_registrasi',$this->input->post('id_registrasi'));
		return $this->db->update('registrasi',$data);
	}

	public function verif_dek_ta(){
		$data = array(
			'status_registrasi' => 'Telah disetujui oleh Dekan. Surat dapat dicetak'
		);

		$this->db->where('id_registrasi',$this->input->post('id_registrasi'));
		return $this->db->update('registrasi_ta',$data);
	}

	public function rekap_pkl($status_registrasi){
		$this->db->order_by("id_registrasi", "desc");
		$query = $this->db->get_where('registrasi', array('status_registrasi' => $status_registrasi));

		return $query->result_array();
	}

	public function rekap_ta($status_registrasi){
		$this->db->order_by("id_registrasi", "desc");
		$query = $this->db->get_where('registrasi_ta', array('status_registrasi' => $status_registrasi));

		return $query->result_array();
	}

	public function get_status($status_registrasi){
		$query = $this->db->get_where('registrasi', array('status_registrasi' => $status_registrasi));

		return $query->result_array();
	}

	public function get_status_ta($status_registrasi){
		$query = $this->db->get_where('registrasi_ta', array('status_registrasi' => $status_registrasi));

		return $query->result_array();
	}

	public function get_nim($nim_mhs){
		$query = $this->db->get_where('registrasi', array('nim_mhs' => $nim_mhs));
		return $query->row_array();
	}

	public function get_nim_ta($nim_mhs){
		$query = $this->db->get_where('registrasi_ta', array('nim_mhs' => $nim_mhs));
		return $query->row_array();
	}

	public function batal($id_registrasi){
		$data = array(
			'status_registrasi' => 'Dibatalkan',
			'alasan_batal' => $this->input->post('alasan_batal')
		);

		$this->db->where('id_registrasi',$id_registrasi);
		return $this->db->update('registrasi',$data);
	}

	public function batal_ta($id_registrasi){
		$data = array(
			'status_registrasi' => 'Dibatalkan',
			'alasan_batal' => $this->input->post('alasan_batal')
		);

		$this->db->where('id_registrasi',$id_registrasi);
		return $this->db->update('registrasi_ta',$data);
	}

	public function get_prodi($status_registrasi,$nama_prodi){
		$this->db->order_by("nama_prodi", "asc");
		$this->db->order_by("nim_mhs", "asc");

		$query = $this->db->get_where('registrasi', array('status_registrasi' => $status_registrasi,'nama_prodi' => $nama_prodi));

		return $query->result_array();
	}

	public function get_prodi_ta($status_registrasi,$nama_prodi){
		$this->db->order_by("nama_prodi", "asc");
		$this->db->order_by("nim_mhs", "asc");

		$query = $this->db->get_where('registrasi_ta', array('status_registrasi' => $status_registrasi,'nama_prodi' => $nama_prodi));

		return $query->result_array();
	}

	
}

?>