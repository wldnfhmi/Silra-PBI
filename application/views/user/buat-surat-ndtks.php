
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="flash-data" style="display: none;" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
      <div class="flash-data-error" style="display: none;" data-flashdataerror="<?= $this->session->flashdata('error'); ?>"></div>
        <div style="display: none;"><?= $this->session->flashdata('flash'); ?></div>
        <div style="display: none;"><?= $this->session->flashdata('error'); ?></div>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-secondary"><?= $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('User'); ?>">User</a></li>
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

      <div class="row">
        <div class="col-12 col-sm-12">
          <div class="card card-purple card-outline">
            <div class="card-body">
              <form action="<?= base_url('User/prosesBuatSuratNDTKS'); ?>" id="formSurat" method="post">
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label for="nomor_kk" class="col-form-label-sm text-gray">Nomor KK</label>
                    <input type="text" class="form-control" id="nomor_kk" name="nomor_kk" value="<?= $pemohonByNik['nomor_kk']; ?>">
                  </div>
                  <div class="col-sm-6">
                    <label for="nik" class="col-form-label-sm text-gray">Nik</label>
                    <input type="text" class="form-control" id="nik" name="nik" value="<?= $pemohonByNik['nik']; ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label for="nomor_surat" class="text-gray col-form-label-sm">Nomor Surat</label>
                    <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" autocomplete="off" required autofocus>
                    <small id="nomor_suratHelp" class="form-text text-muted">*Nomor surat keterangan tidak mampu</small>
                  </div>
                  <div class="col-sm-6">
                    <label for="id_pengesah" class="col-form-label-sm text-gray">Pengesah</label>
                      <select class="form-control" name="id_pengesah" id="id_pengesah">
                        <option value="">Pilih Pengesah</option>
                        <?php foreach($pengesah as $p) : ?>
                          <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                        <?php endforeach; ?>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" id="id_surat" name="id_surat" value="Surat PBI Non DTKS">
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $pemohonByNik['jenis_kelamin']; ?>">
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $pemohonByNik['tempat_lahir']; ?>">
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $pemohonByNik['tanggal_lahir']; ?>">
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" id="alamat" name="alamat" value="<?= $pemohonByNik['alamat']; ?>">
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" id="rt" name="rt" value="<?= $pemohonByNik['rt']; ?>">
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" id="rw" name="rw" value="<?= $pemohonByNik['rw']; ?>">
                </div>
                <div class="form-group">
                  <input type="hidden" class="form-control" id="usia" name="usia" value="-">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label for="nama" class="col-form-label-sm text-gray">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $pemohonByNik['nama']; ?>">
                  </div>
                  <div class="col-sm-3">
                    <label for="id_dtks" class="col-form-label-sm text-gray">ID. DTKS</label>
                    <input type="text" class="form-control" id="id_dtks" name="id_dtks" autocomplete="off" required>
                  </div>
                  <div class="col-sm-3">
                    <label for="nomor_peserta" class="col-form-label-sm text-gray">Nomor Peserta</label>
                    <input type="text" class="form-control" id="nomor_peserta" name="nomor_peserta" autocomplete="off" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <label for="kecamatan" class="col-form-label-sm text-gray">Kecamatan</label>
                      <select class="form-control" name="kecamatan" id="kecamatan">
                        <option value="<?= $pemohonByNik['kecamatan']; ?>"><?= $pemohonByNik['kecamatan']; ?></option>
                        <?php foreach($kecamatan as $k) : ?>
                          <option value="<?= $k['kecamatan']; ?>"><?= $k['kecamatan']; ?></option>
                        <?php endforeach; ?>
                      </select>
                  </div>
                  <div class="col-sm-6">
                    <label for="kelurahan" class="col-form-label-sm text-gray">Kelurahan</label>
                      <select class="form-control" name="kelurahan" id="kelurahan">
                        <option value="<?= $pemohonByNik['kelurahan']; ?>"><?= $pemohonByNik['kelurahan']; ?></option>
                        <?php foreach($kelurahan as $k) : ?>
                          <option value="<?= $k['kelurahan']; ?>"><?= $k['kelurahan']; ?></option>
                        <?php endforeach; ?>
                      </select>
                  </div>
                </div>
                <div class="form-group row">
                
                  <div class="col-sm-6">
                    
                  </div>
                </div>
                <button type="button" class="btn" onclick="reset()">Cancel</button>
                <button type="submit" class="btn bg-gradient-olive">Buat Surat</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->