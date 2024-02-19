<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('LaporanModel', 'laporan');
    $this->load->model('UserModel', 'user');
    $this->load->library('Dompdf_gen');
    is_logged_in();
  }

  public function index()
  {
    $data['title'] = 'PBI DTKS APBD';
    $data['laporan'] = $this->laporan->getAllLaporan();
    $data['laporan_APBD'] = $this->laporan->getAllPBIDTKS();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('Laporan/laporan-pengajuan-dtks', $data);
    $this->load->view('templates/footer', $data);
  }

  public function laporanDTKSK()
  {
    $data['title'] = 'PBI DTKS APBD (KK)';
    $data['laporan'] = $this->laporan->getAllLaporan();
    $data['join'] = $this->laporan->joinSuratDTKSK();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('laporan/laporan-pengajuan-dtksk', $data);
    $this->load->view('templates/footer', $data);
  }

  public function filterByMonth()
  {
    $bulan = $this->input->post('bulan');

    $data['title'] = 'PBI DTKS APBD';
    $data['laporan'] = $this->laporan->getAllLaporan();
    $data['laporan_APBD'] = $this->laporan->getAllPBIDTKSByMonth($bulan);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('Laporan/laporan-pengajuan-dtks', $data);
    $this->load->view('templates/footer', $data);

    $this->session->set_userdata('selected_month', $bulan);
  }

  public function filterByMonthDTKSK()
  {
    $bulan = $this->input->post('bulan');

    $data['title'] = 'PBI DTKS APBD KK';
    $data['laporan'] = $this->laporan->getAllLaporan();
    $data['join'] = $this->laporan->joinSuratDTKSKByMonth($bulan);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('laporan/laporan-pengajuan-dtksk', $data);
    $this->load->view('templates/footer', $data);

    $this->session->set_userdata('selected_month', $bulan);
  }

  public function resetFilter()
  {
    $this->session->unset_userdata('selected_month');
    redirect('Laporan');
  }

  public function resetFilterDTKSK()
  {
    $this->session->unset_userdata('selected_month');
    redirect('Laporan/laporanDTKSK');
  }

  public function exportExcel()
  {
    $data['title'] = 'PBI DTKS APBD';
    $bulan = $this->session->userdata('selected_month');
    
    if (!empty($bulan)) {
        // Jika filter bulan dipilih
        $data['laporan'] = $this->laporan->getAllPBIDTKSByMonth($bulan);
    } else {
        // Jika tidak ada filter, tampilkan semua data
        $data['laporan'] = $this->laporan->getAllPBIDTKS();
    }

    $this->load->view('Laporan/export-excel-dtks', $data);
  }

  public function exportExcelDTKSK()
  {
    $data['title'] = 'Laporan PBI DTKS APBD KK';
    $bulan = $this->session->userdata('selected_month');
    
    if (!empty($bulan)) {
        // Jika filter bulan dipilih
        $data['laporan'] = $this->laporan->joinSuratDTKSKByMonth($bulan);
    } else {
        // Jika tidak ada filter, tampilkan semua data
        $data['laporan'] = $this->laporan->joinSuratDTKSK();
    }

    $this->load->view('laporan/export-excel-dtksk', $data);
  }

  public function changeStatusDTKS($id)
  {
    $id = $this->uri->segment(3);

    // Ambil Status dari database
    $currentStatus = $this->db->get_where('laporan_pengajuan', array('id' => $id))->row()->status;

    // Tentukan Status
    if($currentStatus == 'Selesai') {
      $status = 'On Progress';
    } else {
      $status = 'Selesai';
    }

    $this->db->set('status', $status);
    $this->db->where('id', $id);
    $this->db->update('laporan_pengajuan');
    $this->session->set_flashdata('flash', 'Status Berhasil Diperbarui');
    redirect('Laporan');
  }

  public function changeStatusDTKSK($id)
  {
    $id = $this->uri->segment(3);

    // Ambil Status dari database
    $currentStatus = $this->db->get_where('laporan_pengajuan', array('id' => $id))->row()->status;

    // Tentukan Status
    if($currentStatus == 'Selesai') {
      $status = 'On Progress';
    } else {
      $status = 'Selesai';
    }

    $this->db->set('status', $status);
    $this->db->where('id', $id);
    $this->db->update('laporan_pengajuan');
    $this->session->set_flashdata('flash', 'Status Berhasil Diperbarui');
    redirect('Laporan/laporanDTKSK');
  }

  public function laporanPengajuanPdfDTKS($id, $id_pengesah)
  {
    $data['title'] = 'Surat Pengajuan';
    $data['laporanById'] = $this->laporan->laporanById($id);
    $data['pengesahById'] = $this->laporan->pengesahById($id_pengesah);

    $status = 'Selesai';
    $this->db->set('status', $status);
    $this->db->where('id', $this->uri->segment(4));
    $this->db->update('laporan_pengajuan');
    
    $this->load->view('Laporan/laporan-pengajuan-dtks-pdf', $data);
    
    $html = $this->output->get_output();
    $paper_size = 'A4';
    $orientation = 'portrait';
    
    $this->dompdf->set_paper($paper_size, $orientation);
    $this->dompdf->load_html($html);

    $this->dompdf->render();
    $this->dompdf->stream('surat-pengajuan-pbi-dtks-apbd.pdf', array('Attachment' => 0));
  }

  public function laporanPengajuanPdfDTKSK($id, $id_surat, $id_pengesah, $nik)
  {
    $data['title'] = 'Surat Pengajuan';
    $data['laporanById'] = $this->laporan->laporanById($id);
    $data['suratById'] = $this->laporan->suratById($id_surat);
    $data['pengesahById'] = $this->laporan->pengesahById($id_pengesah);
    $data['userByNik'] = $this->data->getUserByNik($nik);

    $status = 'Selesai';
    $this->db->set('status', $status);
    $this->db->where('id', $this->uri->segment(4));
    $this->db->update('laporan_pengajuan');

    $this->load->view('Laporan/laporan-pengajuan-dtksk-pdf', $data);
    
    $paper_size = 'A4';
    $orientation = 'potrait';
    $html = $this->output->get_output();
    
    $this->dompdf->set_paper($paper_size, $orientation);
    $this->dompdf->load_html($html);

    $this->dompdf->render();
    $this->dompdf->stream('surat-pengajuan-pbi-dtks-apbd-kk.pdf', array('Attachment' => 0));
  }
  // X - Akhir Contoller Halaman Laporan PBI DTKS APBD

  public function laporanNonDTKS()
  {
    $data['title'] = 'PBI Non DTKS';
    $data['laporan'] = $this->laporan->getAllLaporan();
    $data['laporan_NDTKS'] = $this->laporan->getAllPBINDTKS();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('Laporan/laporan-pengajuan-nondtks', $data);
    $this->load->view('templates/footer', $data);
  }

  public function filterByMonthNDTKS()
  {
    $bulan = $this->input->post('bulan');

    $data['title'] = 'PBI Non DTKS';
    $data['laporan'] = $this->laporan->getAllLaporan();
    $data['laporan_NDTKS'] = $this->laporan->getAllNDTKSByMonth($bulan);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('Laporan/laporan-pengajuan-nondtks', $data);
    $this->load->view('templates/footer', $data);

    $this->session->set_userdata('selected_month', $bulan);
  }

  public function resetFilterNDTKS()
  {
    $this->session->unset_userdata('selected_month');
    redirect('Laporan/laporanNonDTKS');
  }

  public function changeStatusNonDTKS($id)
  {
    $id = $this->uri->segment(3);

    // Ambil status dari database
    $currentStatus = $this->db->get_where('laporan_pengajuan', array('id' => $id))->row()->status;

    // Tentukan Status
    if($currentStatus == 'Selesai') {
      $status = 'On Progress';
    } else {
      $status = 'Selesai';
    }

    $this->db->set('status', $status);
    $this->db->where('id', $id);
    $this->db->update('laporan_pengajuan');
    $this->session->set_flashdata('flash', 'Status Berhasil Diperbarui');
    redirect('Laporan/laporanNonDTKS');
  }

  public function exportExcelNDTKS()
  {
    $data['title'] = 'Laporan PBI Non DTKS';
    $bulan = $this->session->userdata('selected_month');
    
    if (!empty($bulan)) {
        // Jika filter bulan dipilih
        $data['laporan'] = $this->laporan->getAllNDTKSByMonth($bulan);
    } else {
        // Jika tidak ada filter, tampilkan semua data
        $data['laporan'] = $this->laporan->getAllPBINDTKS();
    }

    $this->load->view('Laporan/export-excel-ndtks', $data);
  }

  public function laporanPengajuanPdfNonDTKS($id, $id_pengesah)
  {
    $data['title'] = 'Surat Pengajuan';
    $data['laporanById'] = $this->laporan->laporanById($id);
    $data['pengesahById'] = $this->laporan->pengesahById($id_pengesah);

    $status = 'Selesai';
    $this->db->set('status', $status);
    $this->db->where('id', $this->uri->segment(4));
    $this->db->update('laporan_pengajuan');

    $this->load->view('Laporan/laporan-pengajuan-nondtks-pdf', $data);
    
    $paper_size = 'A4';
    $orientation = 'potrait';
    $html = $this->output->get_output();
    
    $this->dompdf->set_paper($paper_size, $orientation);
    $this->dompdf->load_html($html);

    $this->dompdf->render();
    $this->dompdf->stream('surat-pengajuan-pbi-non-dtks.pdf', array('Attachment' => 0));
  }
}