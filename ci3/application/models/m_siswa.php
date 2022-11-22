<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_siswa extends CI_Model
{
  public function getDataSiswa()
  {
    $this->db->select('*');
    $this->db->from('tb_siswa');
    $query = $this->db->get('');
    return $query->result();
  }

  public function insertDataSiswa($data)
  {
    $this->db->insert('tb_siswa', $data);
  }


  public function editDataSiswa($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('tb_siswa', $data);
  }

  public function getDataSiswaDetail($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('tb_siswa');
    return $query->row();
  }

  public function deleteDataSiswa($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('tb_siswa');
  }
}
