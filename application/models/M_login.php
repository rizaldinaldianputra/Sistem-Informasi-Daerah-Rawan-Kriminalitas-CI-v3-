<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    public function login($username, $password)
    {
      $this->db->select('*');
      $this->db->from('tbl_login');
      $this->db->where(array('username' => $username, 'password'=> $password));
      $query=$this->db->get();
      return $query->row();
    }
}