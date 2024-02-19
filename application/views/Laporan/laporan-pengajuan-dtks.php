
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      <div class="flash-data" style="display: none;" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <div style="display: none;"><?= $this->session->flashdata('flash'); ?></div>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-secondary"><?= $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('Laporan'); ?>">Laporan</a></li>
              <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card mb-4">
        <div class="card-header" style="display: flex; align-items: center;">
          <form class="form-inline" action="<?= base_url('Laporan/filterByMonth'); ?>" method="post" style="margin-left: auto;">
            <div class="form-group mx-sm-3">
              <select class="form-control" name="bulan" id="bulan">
                <option value="">---</option>
                <option value="1">Januari</option>
                <option value="2">Febuari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
              </select>
            </div>
             <button type="submit" class="btn btn-primary">Filter</button>
              <a href="<?= base_url('Laporan/resetFilter'); ?>" class="btn btn-default ml-3">
                  <i class="fas fa-sync-alt"></i>
              </a>
              <a href="<?= base_url('Laporan/exportExcel'); ?>" class="btn bg-gradient-teal ml-3" id="exportExcelBtn">
                <i class="fas fa-file-excel"></i>
              </a>
          </form>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jenis Surat</th>
                  <th>Status</th>
                  <th>Tanggal Dibuat</th>
                  <th></th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th></th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jenis Surat</th>
                  <th>Status</th>
                  <th>Tanggal Dibuat</th>
                  <th></th>
                </tr>
              </tfoot>
              <tbody>
                <?php $i = 1;
                foreach ($laporan_APBD as $row) : ?>
                <tr>
                  <td style="vertical-align: middle;"><?= $i++; ?></td>
                  <td style="vertical-align: middle;"><?= $row['nik']; ?></td>
                  <td style="vertical-align: middle;"><?= $row['nama']; ?></td>
                  <td style="vertical-align: middle;"><?= $row['id_surat']; ?></td>
                  <td style="vertical-align: middle;" align="center">
                    <a href="<?= base_url('Laporan/changeStatusDTKS/') . $row['id']; ?>" class="btn btn-default btn-stat" id="btn-status" style="width: 125px;"><?= $row['status']; ?></a>
                  </td>
                  <td style="vertical-align: middle;"><?= $row['dibuat_pada']; ?></td>
                  <td style="vertical-align: middle;">
                  <a href="<?= base_url('Laporan/laporanPengajuanPdfDTKS/') . $row['id'] . '/' . $row['id_pengesah']; ?>" target="_blank" class="btn btn-sm bg-gradient-danger">
                    <i class="fas fa-file-pdf"></i>
                  </a>
                  </div>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
