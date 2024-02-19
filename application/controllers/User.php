<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('UserModel', 'user');
  }

  public function index()
  {
    $data['title'] = 'Input Data';
    $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    $data['pemohon'] = $this->user->getAllPemohon();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambahData()
  {
    $data['title'] = 'Tambah Data';
    $data['pemohon'] = $this->user->getAllPemohon();
    $data['kelurahan'] = $this->user->getAllKelurahan();
    $data['kecamatan'] = $this->user->getAllKecamatan();

    // Validasi inputan
    // Form Input Nomor KK memiliki validasi yang harus dipenuhi
    // 1. Required (Harus Diisi)
    // 2. Exact Length (Memiliki panjang nilai pasti 16)
    // 3. Numeric (Tidak bisa diisi selain angka)
    $this->form_validation->set_rules('nomor_kk', 'Nomor KK', 'required|exact_length[16]|numeric', [
      'required' => 'Nomor KK harus diisi!',
      'exact_length' => 'Nomor KK harus berjumlah 16!',
      'numeric' => 'Nomor KK harus diisi angka!'
    ]);

    // Form Input NIK memiliki validasi yang harus dipenuhi
    // 1. Required (Harus Diisi)
    // 2. Exact Length (Memiliki panjang nilai pasti 16)
    // 3. Numeric (Tidak bisa diisi selain angka)
    // 4. Is Unique (Memastikan nomor Nik belum terdaftar)
    $this->form_validation->set_rules('nik', 'NIK', 'required|exact_length[16]|numeric|is_unique[pemohon.nik]', [
      'required' => 'NIK harus diisi!',
      'exact_length' => 'NIK harus berjumlah 16!',
      'numeric' => 'NIK harus diisi angka!',
      'is_unique' => 'Nomor NIK sudah terdaftar!'
    ]);

    // Form Input Nama memiliki validasi yang harus dipenuhi
    // 1. Required (Harus Diisi)
    $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
      'required' => 'Nama harus diisi!'
    ]);

    // Form Input Jenis Kelamin memiliki validasi yang harus dipenuhi
    // 1. Required (Harus Diisi)
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
      'required' => 'Jenis Kelamin harus diisi'
    ]);

    // Form Input Tempat Lahir memiliki validasi yang harus dipenuhi
    // 1. Required (Harus Diisi)
    $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', [
      'required' => 'Tempat Lahir harus diisi!'
    ]);

    // Form Input Tanggal Lahir memiliki validasi yang harus dipenuhi
    // 1. Required (Harus Diisi)
    $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', [
      'required' => 'Tanggal Lahir harus diisi!'
    ]);

    // Form Input Alamat memiliki validasi yang harus dipenuhi
    // 1. Required (Harus Diisi)
    $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
      'required' => 'Alamat harus diisi!'
    ]);

    // Form Input RT memiliki validasi yang harus dipenuhi
    // 1. Required (Harus Diisi)
    $this->form_validation->set_rules('rt', 'RT', 'required', [
      'required' => 'RT harus diisi!'
    ]);

    // Form Input RW memiliki validasi yang harus dipenuhi
    // 1. Required (Harus Diisi)
    $this->form_validation->set_rules('rw', 'RW', 'required', [
      'required' => 'RW harus diisi!'
    ]);

    // Form Input Kelurahan memiliki validasi yang harus dipenuhi
    // 1. Required (Harus Diisi)
    $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required', [
      'required' => 'Kelurahan harus diisi!'
    ]);

    // Form Input Kecamatan memiliki validasi yang harus dipenuhi
    // 1. Required (Harus Diisi)
    $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [
      'required' => 'Kecamatan harus diisi!'
    ]);

    // Proses pengecekan validasi
    // Jika validasi menghasilkan false
    // Akan kembali kehalaman Inputan dengan mengirimkan pesan error
    if($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('user/tambah-data', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $this->user->prosesTambahData();
    }
  }

  // Fungsi Mengubah data
  public function ubahData()
  {
    //$data['pemohonById'] = $this->user->getPemohonById($id);
    $this->user->prosesubahData();
  }

  // Fungsi Menghapus Data
  public function hapusData($id)
  {
    $where = array('id' => $id);
    $this->user->prosesHapusData($where, 'pemohon');
    $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
    redirect('User');
  }

  public function buatSurat($nik)
  {
    $data['title'] = 'Surat PBI DTKS APBD';
    $data['pemohonByNik'] = $this->user->getPemohonByNik($nik);
    $data['surat'] = $this->user->getAllSurat();
    $data['pengesah'] = $this->user->getAllPengesah();
    $data['kelurahan'] = $this->user->getAllKelurahan();
    $data['kecamatan'] = $this->user->getAllKecamatan();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('user/buat-surat', $data);
    $this->load->view('templates/footer', $data);
  }

  public function prosesBuatSurat()
  {
    $data = [
      'nomor_surat' => $this->input->post('nomor_surat'),
      'nomor_kk' => htmlspecialchars($this->input->post('nomor_kk')),
      'nik' => htmlspecialchars($this->input->post('nik')),
      'nama' => $this->input->post('nama'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'tempat_lahir' => $this->input->post('tempat_lahir'),
      'tanggal_lahir' => $this->input->post('tanggal_lahir'),
      'usia' => $this->input->post('usia'),
      'id_dtks' => $this->input->post('id_dtks'),
      'nomor_peserta' => $this->input->post('nomor_peserta'),
      'kecamatan' => $this->input->post('kecamatan'),
      'kelurahan' => $this->input->post('kelurahan'),
      'id_surat' => $this->input->post('id_surat'),
      'id_pengesah' => $this->input->post('id_pengesah'),
      'alamat' => $this->input->post('alamat'),
      'rt' => $this->input->post('rt'),
      'rw' => $this->input->post('rw'),
      'status' => 'On Progress',
      'dibuat_pada' => date('Y-m-d')
    ];

    $this->db->insert('laporan_pengajuan', $data);
    $this->session->set_flashdata('flash', 'Surat Berhasil Dibuat');
    redirect('User');
  }

  public function buatSuratNDTKS($nik)
  {
    $data['title'] = 'Surat PBI Non DTKS';
    $data['pemohonByNik'] = $this->user->getPemohonByNik($nik);
    $data['surat'] = $this->user->getAllSurat();
    $data['pengesah'] = $this->user->getAllPengesah();
    $data['kelurahan'] = $this->user->getAllKelurahan();
    $data['kecamatan'] = $this->user->getAllKecamatan();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('user/buat-surat-ndtks', $data);
    $this->load->view('templates/footer', $data);
  }

  public function prosesBuatSuratNDTKS()
  {
    $data = [
      'nomor_surat' => $this->input->post('nomor_surat'),
      'nomor_kk' => htmlspecialchars($this->input->post('nomor_kk')),
      'nik' => htmlspecialchars($this->input->post('nik')),
      'nama' => $this->input->post('nama'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'tempat_lahir' => $this->input->post('tempat_lahir'),
      'tanggal_lahir' => $this->input->post('tanggal_lahir'),
      'usia' => $this->input->post('usia'),
      'id_dtks' => $this->input->post('id_dtks'),
      'nomor_peserta' => $this->input->post('nomor_peserta'),
      'kecamatan' => $this->input->post('kecamatan'),
      'kelurahan' => $this->input->post('kelurahan'),
      'id_surat' => $this->input->post('id_surat'),
      'id_pengesah' => $this->input->post('id_pengesah'),
      'alamat' => $this->input->post('alamat'),
      'rt' => $this->input->post('rt'),
      'rw' => $this->input->post('rw'),
      'status' => 'On Progress',
      'dibuat_pada' => date('Y-m-d')
    ];

    $this->db->insert('laporan_pengajuan', $data);
    $this->session->set_flashdata('flash', 'Surat Berhasil Dibuat');
    redirect('User');
  }
}