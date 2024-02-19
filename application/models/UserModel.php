<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model
{
  public function getAllPemohon()
  {
    $query = "SELECT * FROM pemohon ORDER BY nama ASC";
    return $this->db->query($query)->result_array();
  }

  // Pemohon berdasarkan Id
  public function getPemohonById($id)
  {
    $id = $this->uri->segment(3);
    return $this->db->get_where('pemohon', ['id' => $id])->row_array();
  }

  // Pemohon berdasarkan NIk
  public function getPemohonByNik($nik)
  {
    $nik = $this->uri->segment(3);
    return $this->db->get_where('pemohon', ['nik' => $nik])->row_array();
  }
  
  public function getAllKecamatan()
  {
    return $this->db->get('kecamatan')->result_array();
  }

  public function getAllKelurahan()
  {
    return $this->db->get('kelurahan')->result_array();
  }

  // Semua surat
  public function getAllSurat()
  {
    return $this->db->get('jenis_surat')->result_array();
  }

  // Semua Pengesah
  public function getAllPengesah()
  {
    return $this->db->get('pengesah')->result_array();
  }

  public function prosesTambahData()
  {
    $data = [
      'nomor_kk' => htmlspecialchars($this->input->post('nomor_kk', true)),
      'nik' => htmlspecialchars($this->input->post('nik', true)),
      'nama' => htmlspecialchars($this->input->post('nama', true)),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'tempat_lahir' => $this->input->post('tempat_lahir'),
      'tanggal_lahir' => $this->input->post('tanggal_lahir'),
      'alamat' => $this->input->post('alamat'),
      'rt' => $this->input->post('rt'),
      'rw' => $this->input->post('rw'),
      'kelurahan' => $this->input->post('kelurahan'),
      'kecamatan' => $this->input->post('kecamatan'),
      'tanggal_terdata' => date('Y-m-d')
    ];

    $this->db->insert('pemohon', $data);
    $this->session->set_flashdata('flash', 'Data Berhasil Ditambahkan');
    redirect('User');
  }

  public function prosesubahData()
  {
    $data = [
      'nomor_kk' => htmlspecialchars($this->input->post('nomor_kk', true)),
      'nik' => htmlspecialchars($this->input->post('nik', true)),
      'nama' => htmlspecialchars($this->input->post('nama', true)),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'tempat_lahir' => $this->input->post('tempat_lahir'),
      'tanggal_lahir' => $this->input->post('tanggal_lahir'),
      'alamat' => $this->input->post('alamat'),
      'rt' => $this->input->post('rt'),
      'rw' => $this->input->post('rw'),
      'kelurahan' => $this->input->post('kelurahan'),
      'kecamatan' => $this->input->post('kecamatan')
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('pemohon', $data);
    $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
    redirect('User');
  }

  public function prosesHapusData($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
}