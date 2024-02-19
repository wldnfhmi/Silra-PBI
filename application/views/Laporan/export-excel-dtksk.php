<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=" . $title . ".xls");
header("Pragma: no-cache");
header("Expires: 0");

?>

<h3>
  <center><?= $title; ?></center>
</h3>
<br>
<table class="table-data" border='1'>
  <thead>
    <tr>
      <th>No</th>
      <th>NO KK</th>
      <th>NIK</th>
      <th>NAMA</th>
      <th>JENIS KELAMIN</th>
      <th>TEMPAT, TANGGAL LAHIR</th>
      <th>USIA</th>
      <th>KECAMATAN</th>
      <th>KELUARAHAN</th>
      <th>ALAMAT DOMISILI</th>
      <th>DIBUAT PADA</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
    foreach ($laporan as $l) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td>'<?= $l['nomor_kk']; ?></td>
      <td>'<?= $l['nik']; ?></td>
      <td><?= $l['nama']; ?></td>
      <td><?= $l['jenis_kelamin']; ?></td>
      <td><?= $l['tempat_lahir'] . ', ' . $l['tanggal_lahir']; ?></td>
      <td><?= $l['usia']; ?></td>
      <td><?= $l['kecamatan']; ?></td>
      <td><?= $l['kelurahan']; ?></td>
      <td><?= $l['alamat']; ?></td>
      <td><?= $l['dibuat_pada']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>