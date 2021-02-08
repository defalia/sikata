<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_auth extends CI_Model
{
  // Login user admin
  public function login_admin($username, $password)
  {
    // Set username
    $this->db->where('username', $username);
    // Set password
    $this->db->where('password', $password);
    // Get user admin
    $admin = $this->db->get('user_admin')->row_array();
    // return admin data
    return $admin;
  }

  // Login user keuangan
  public function login_keuangan($username, $password)
  {
    // Set username
    $this->db->where('username', $username);
    // Set password
    $this->db->where('password', $password);
    // Get user keuangan
    $keuangan = $this->db->get('user_keuangan')->row_array();
    // return keuangan data
    return $keuangan;
  }

  // Login user kaprodi
  public function login_kaprodi($username, $password)
  {
    // Set username
    $this->db->where('username', $username);
    // Set password
    $this->db->where('password', $password);
    // Get user kaprodi
    $kaprodi = $this->db->get('user_kaprodi')->row_array();
    // return kaprodi data
    return $kaprodi;
  }

  // Login user dekanat
  public function login_dekanat($username, $password)
  {
    // Set username
    $this->db->where('username', $username);
    // Set password
    $this->db->where('password', $password);
    // Get user dekanat
    $dekanat = $this->db->get('user_dekanat')->row_array();
    // return dekanat data
    return $dekanat;
  }
}
