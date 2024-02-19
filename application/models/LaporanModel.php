<?php

class LaporanModel extends CI_Model
{
  public function getAllLaporan()
  {
    return $this->db->get('laporan_pengajuan')->result_array();
  }

  public function laporanById()
  {
    $id = $this->uri->segment(3);
    return $this->db->get_where('laporan_pengajuan', ['id' => $id])->row_array();
  }
  
  public function suratById()
  {
    $id_surat = $this->uri->segment(5);
    return $this->db->get_where('jenis_surat', ['id' => $id_surat])->row_array();
  }

  public function pengesahById()
  {
    $id_pengesah = $this->uri->segment(4);
    return $this->db->get_where('pengesah', ['id' => $id_pengesah])->row_array();
  }

  public function getAllPBIDTKS()
  {
    $query = "SELECT * FROM laporan_pengajuan
              WHERE id_surat = 'Surat PBI DTKS APBD'
              ORDER BY CASE WHEN status = 'On Progress' THEN 0 ELSE 1 END, dibuat_pada ASC
    ";
    return $this->db->query($query)->result_array();
  }

  public function getAllPBINDTKS()
  {
    $query = "SELECT * FROM laporan_pengajuan
              WHERE id_surat = 'Surat PBI Non DTKS'
              ORDER BY CASE WHEN status = 'On Progress' THEN 0 ELSE 1 END, dibuat_pada ASC
    ";
    return $this->db->query($query)->result_array();
  }

  public function getAllPBIDTKSByMonth($bulan)
  {
    $query = "SELECT * FROM laporan_pengajuan
              WHERE id_surat = 'Surat PBI DTKS APBD'
              AND MONTH(dibuat_pada) = '$bulan'
              ORDER BY CASE WHEN status = 'On Progress' THEN 0 ELSE 1 END, dibuat_pada ASC
    ";

    return $this->db->query($query)->result_array();
  }

  public function getAllNDTKSByMonth($bulan)
  {
    $query = "SELECT * FROM laporan_pengajuan
              WHERE id_surat = 'Surat PBI Non DTKS'
              AND MONTH(dibuat_pada) = '$bulan'
              ORDER BY CASE WHEN status = 'On Progress' THEN 0 ELSE 1 END, dibuat_pada ASC
    ";

    return $this->db->query($query)->result_array();
  }

  public function joinSuratDTKS()
  {
    $query = "SELECT laporan_pengajuan.*, jenis_surat.nama_surat
              FROM laporan_pengajuan
              JOIN jenis_surat ON laporan_pengajuan.id_surat = jenis_surat.id
              WHERE jenis_surat.nama_surat = 'Surat PBI DTKS APBD'
              ORDER BY CASE WHEN laporan_pengajuan.status = 'On Progress' THEN 0 ELSE 1 END, laporan_pengajuan.dibuat_pada ASC
    ";
    return $this->db->query($query)->result_array();
  }

  public function joinSuratDTKSK()
  {
    $query = "SELECT laporan_pengajuan.*, jenis_surat.nama_surat
              FROM laporan_pengajuan
              JOIN jenis_surat ON laporan_pengajuan.id_surat = jenis_surat.id
              WHERE jenis_surat.nama_surat = 'Surat PBI DTKS APBD KK'
              ORDER BY CASE WHEN laporan_pengajuan.status = 'On Progress' THEN 0 ELSE 1 END, laporan_pengajuan.dibuat_pada ASC
    ";
    return $this->db->query($query)->result_array();
  }

  public function joinSuratDTKSByMonth($bulan)
  {
    $query = "SELECT laporan_pengajuan.*, jenis_surat.nama_surat
              FROM laporan_pengajuan
              JOIN jenis_surat ON laporan_pengajuan.id_surat = jenis_surat.id
              WHERE jenis_surat.nama_surat = 'Surat PBI DTKS APBD'
                AND MONTH(laporan_pengajuan.dibuat_pada) = '$bulan'
              ORDER BY CASE WHEN laporan_pengajuan.status = 'On Progress' THEN 0 ELSE 1 END, laporan_pengajuan.dibuat_pada ASC
    ";
    return $this->db->query($query)->result_array();
  }

  public function joinSuratDTKSKByMonth($bulan)
  {
    $query = "SELECT laporan_pengajuan.*, jenis_surat.nama_surat
              FROM laporan_pengajuan
              JOIN jenis_surat ON laporan_pengajuan.id_surat = jenis_surat.id
              WHERE jenis_surat.nama_surat = 'Surat PBI DTKS APBD KK'
                AND MONTH(laporan_pengajuan.dibuat_pada) = '$bulan'
              ORDER BY CASE WHEN laporan_pengajuan.status = 'On Progress' THEN 0 ELSE 1 END, laporan_pengajuan.dibuat_pada ASC
    ";
    return $this->db->query($query)->result_array();
  }
  // X - Akhir Model Halaman LAPORAN PBI DTKS

  public function joinSuratNonDTKS()
  {
    $query = "SELECT laporan_pengajuan.*, jenis_surat.nama_surat
              FROM laporan_pengajuan
              JOIN jenis_surat ON laporan_pengajuan.id_surat = jenis_surat.id
              WHERE jenis_surat.nama_surat = 'Surat PBI Non DTKS'
              ORDER BY CASE WHEN laporan_pengajuan.status = 'On Progress' THEN 0 ELSE 1 END, laporan_pengajuan.dibuat_pada ASC
    ";
    return $this->db->query($query)->result_array();
  }

  public function joinSuratNDTKSByMonth($bulan)
  {
    $query = "SELECT laporan_pengajuan.*, jenis_surat.nama_surat
              FROM laporan_pengajuan
              JOIN jenis_surat ON laporan_pengajuan.id_surat = jenis_surat.id
              WHERE jenis_surat.nama_surat = 'Surat PBI Non DTKS'
                AND MONTH(laporan_pengajuan.dibuat_pada) = '$bulan'
              ORDER BY CASE WHEN laporan_pengajuan.status = 'On Progress' THEN 0 ELSE 1 END, laporan_pengajuan.dibuat_pada ASC
    ";
    return $this->db->query($query)->result_array();
  }
}