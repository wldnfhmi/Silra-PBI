-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 08:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silra-pbi`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `id` int(11) NOT NULL,
  `nama_surat` varchar(128) NOT NULL,
  `perihal` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_surat`
--

INSERT INTO `jenis_surat` (`id`, `nama_surat`, `perihal`) VALUES
(1, 'SURAT PBI DTKS APBD', 'Usulan PBI DTKS APBD'),
(2, 'SURAT PBI Non DTKS', 'Usulan PBI Non DTKS');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `kecamatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `kecamatan`) VALUES
(1, 'Ciputat'),
(2, 'Ciputat Timur'),
(3, 'Pamulang'),
(4, 'Podok Aren'),
(5, 'Serpong'),
(6, 'Serpong Utara'),
(7, 'Setu');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `kelurahan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `id_kecamatan`, `kelurahan`) VALUES
(1, 1, 'Cipayung'),
(2, 1, 'Ciputat'),
(3, 1, 'Jombang'),
(4, 1, 'Sawah Baru'),
(5, 1, 'Sawah Lama'),
(6, 1, 'Serua'),
(7, 1, 'Serua Indah'),
(8, 2, 'Cempaka Putih'),
(9, 2, 'Cireundeu'),
(10, 2, 'Pisangan'),
(11, 2, 'Pondok Ranji'),
(12, 2, 'Rempoa'),
(13, 2, 'Rengas'),
(14, 3, 'Bambu Apus'),
(15, 3, 'Benda Baru'),
(16, 3, 'Kedaung'),
(17, 3, 'Pamulang Barat'),
(18, 3, 'Pamulang Timur'),
(19, 3, 'Pondok Benda'),
(20, 3, 'Pondok Cabe Ilir'),
(21, 3, 'Pondok Cabe Udik'),
(22, 4, 'Jurangmangu Barat'),
(23, 4, 'Jurangmangu Timur'),
(24, 4, 'Parigi'),
(25, 4, 'Parigi Baru'),
(26, 4, 'Pondok Aren'),
(27, 4, 'Pondok Betung'),
(28, 4, 'Pondok Jaya'),
(29, 4, 'Pondok Kacang Barat'),
(30, 4, 'Pondok Kacang Timur'),
(31, 4, 'Pondok Karya'),
(32, 4, 'Pondok Pucung'),
(33, 5, 'Buaran'),
(34, 5, 'Ciater'),
(35, 5, 'Cilenggang'),
(36, 5, 'Lengkong Gudang'),
(37, 5, 'Lengkong Gudang Timur'),
(38, 5, 'Lengkong Wetan'),
(39, 5, 'Rawa Mekarjaya'),
(40, 5, 'Rawabuntu'),
(41, 5, 'Serpong'),
(42, 6, 'Jelupang'),
(43, 6, 'Lengkong Karya'),
(44, 6, 'Pakualam'),
(45, 6, 'Pakujaya'),
(46, 6, 'Pakulonan'),
(47, 6, 'Pondok Jagung'),
(48, 6, 'Pondok Jagung Timur'),
(49, 7, 'Babakan'),
(50, 7, 'Bakti Jaya'),
(51, 7, 'Kademangan'),
(52, 7, 'Keranggan'),
(53, 7, 'Muncul'),
(54, 7, 'Setu');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_pengajuan`
--

CREATE TABLE `laporan_pengajuan` (
  `id` int(11) NOT NULL,
  `nomor_surat` varchar(128) NOT NULL,
  `lampiran` varchar(128) NOT NULL,
  `nomor_kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` varchar(128) NOT NULL,
  `id_dtks` varchar(128) NOT NULL,
  `nomor_peserta` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `kelurahan` varchar(128) NOT NULL,
  `id_surat` varchar(128) NOT NULL,
  `id_pengesah` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `status` varchar(128) NOT NULL,
  `dibuat_pada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemohon`
--

CREATE TABLE `pemohon` (
  `id` int(11) NOT NULL,
  `nomor_kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `kelurahan` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `tanggal_terdata` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengesah`
--

CREATE TABLE `pengesah` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `pangkat` varchar(128) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengesah`
--

INSERT INTO `pengesah` (`id`, `nama`, `pangkat`, `nip`, `jabatan`) VALUES
(1, 'Mohammad Ervin Ardani, S.H', 'Pembina Tk.I, IV/b', '19771119 200112 1 004', 'Kepala Dinas Sosial'),
(2, 'Ir. Lisherni, M.Si', 'Pembina Tk.I, IV/b', '19660226 199303 2 004', 'Sekretaris Dinas Sosial'),
(3, 'Drs. Hamdani, MM', 'Pembina, IV/a', '19651203 199208 1 001', 'Kepala Bidang Rehabilitasi Sosial'),
(4, 'Yasir Arafat, S.Ag', 'Penata Tk.I, III/d', '19760918 201001 1 010', 'Kepala Bidang Perlindungan dan Jaminan Sosial'),
(5, 'Agus Jatmika, S.Kom', 'Penata TK I, III/d', '19780805 200604 1 009', 'Kepala Sub Bagian Umum, Kepegawaian, dan Keungan'),
(6, 'Suhani, SH, MM', 'Pembina, IV/a', '19680514 200501 2 015', 'JF Perencana Ahli Muda'),
(7, 'Wini Liniawati, S.E., M.SI', 'Pembina, IV/a', '19720204 199803 2 004', 'JF Penyuluh Sosial Ahli Muda'),
(8, 'Syaiful Bachri, ST', 'Penata TK I, III/d', '19840220 201001 1 006', 'JF Penyuluh Sosial Ahli Muda'),
(9, 'N. Sani, S.Pd., M.SI', 'Pembina, IV/a', '19670306 199403 2 008', 'JF Penyuluh Sosial Ahli Muda'),
(10, 'Agus Supriadi, S.Sos, M.SI', 'Pembina, IV/a', '19720705 100701 1 021', 'JF Penyuluh Sosial Ahli Muda'),
(11, 'Hadiana, S.Pd', 'Penata TK I, III/d', '19740210 199703 1 003', 'JF Penyuluh Sosial Ahli Muda'),
(12, 'Aris Prakoso, S.T., MM', 'Pembina, IV/a', '19720510 200604 1 016', 'JF Penyuluh Sosial Ahli Muda'),
(13, 'Agus Mulyanto, S.Sos', 'Penata TK I, III/d', '19710211 199203 1 005', 'JF Penyuluh Sosial Ahli Muda'),
(14, 'Filipe Da Kosta, S.STP., M.SI', 'Pembina, IV/a', '19770501 199810 1 001', 'JF Penyuluh Sosial Ahli Muda');

-- --------------------------------------------------------

--
-- Table structure for table `role_id`
--

CREATE TABLE `role_id` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_id`
--

INSERT INTO `role_id` (`id`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'superadmin', '$2y$10$Kl9MiVDVapn10fMv0yDnG.DcpCcbGJm4pSGPxJqoCJvXBtnz00JdO', 1, 1, 1707589901),
(3, 'admin1', '$2y$10$HG3ieGNFrZOR.vgojtKxZOn3USJ/5.qUeJ4hp4H8JxQUCT5ngAJ8C', 2, 1, 1707594271);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 2),
(6, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Laporan'),
(4, 'Management');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'Admin', 'fas fa-fw fa-university', 1),
(2, 2, 'Input Data', 'User', 'fas fa-fw fa-users', 1),
(3, 3, 'PBI DTKS APBD', 'Laporan', 'fas fa-fw fa-file', 1),
(4, 3, 'PBI Non DTKS', 'Laporan/laporanNonDTKS', 'fas fa-fw fa-file', 1),
(5, 4, 'Tambah Pengguna', 'Management/tambahPengguna', 'fas fa-fw fa-cog', 1),
(6, 4, 'Manage Menu', 'Management', 'fas fa-fw fa-cog', 1),
(7, 4, 'Manage Sub Menu', 'Management/subMenu', 'fas fa-fw fa-cog', 1),
(10, 1, 'Pengesah', 'Admin/pengesah', 'fas fa-fw fa-user', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_pengajuan`
--
ALTER TABLE `laporan_pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemohon`
--
ALTER TABLE `pemohon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengesah`
--
ALTER TABLE `pengesah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_id`
--
ALTER TABLE `role_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `laporan_pengajuan`
--
ALTER TABLE `laporan_pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemohon`
--
ALTER TABLE `pemohon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengesah`
--
ALTER TABLE `pengesah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `role_id`
--
ALTER TABLE `role_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
