<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_gis extends CI_Model
{

  //tambah data
  public function tambah($data)
  {
    $this->db->insert('tbl_kejahatan', $data);
  }
  //menampilkan data
  public function datakejahatan()
  {
    $this->db->select('*');
    $this->db->from('tbl_kejahatan');
    $query = $this->db->get();
    return $query->result();
  }
  //Menghapus data
  public function delete($data)
  {
    $this->db->where('id_kejahatan', $data['id_kejahatan']);
    $this->db->delete('tbl_kejahatan');
  }
  //detail data
  public function detail($id_kejahatan)
  {
    $this->db->select('*');
    $this->db->from('tbl_kejahatan');
    $this->db->where('id_kejahatan', $id_kejahatan);
    $query = $this->db->get();
    return $query->row();
  }
  //update data
  public function update($data)
  {
    $this->db->where('id_kejahatan', $data['id_kejahatan']);
    $this->db->update('tbl_kejahatan', $data);
  }

  //menampilkan Grafik
  public function graph()
  {
    $data = $this->db->query("SELECT * from tbl_kejahatan");
    return $data->result();
  }
  function daftar($data)
  {
    $this->db->insert('tbl_login', $data);
  }
  function daftar2($data2)
  {
    $this->db->insert('tbl_admin', $data2);
  }
}
