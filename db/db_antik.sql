-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 03:53 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_antik`
--

-- --------------------------------------------------------

--
-- Table structure for table `antri`
--

CREATE TABLE `antri` (
  `no_antri` int(3) NOT NULL,
  `anama` varchar(25) NOT NULL,
  `aprodi` varchar(25) NOT NULL,
  `hal` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(25) NOT NULL,
  `nim` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antri`
--

INSERT INTO `antri` (`no_antri`, `anama`, `aprodi`, `hal`, `tanggal`, `status`, `nim`) VALUES
(1, 'mhs2', 'Akuntansi', 'KHS', '2021-07-29', '0', 'f1d'),
(1, 'mhs2', 'Akuntansi', 'Transkrip', '2021-07-29', '0', 'f1d');

-- --------------------------------------------------------

--
-- Table structure for table `tb_akses`
--

CREATE TABLE `tb_akses` (
  `id_akses` int(11) NOT NULL,
  `ket_akses` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_akses`
--

INSERT INTO `tb_akses` (`id_akses`, `ket_akses`) VALUES
(1, 'Admin'),
(2, 'Pasien'),
(3, 'Dokter Umum'),
(4, 'Dokter Gigi'),
(5, 'Apoteker');

-- --------------------------------------------------------

--
-- Table structure for table `tb_periksa`
--

CREATE TABLE `tb_periksa` (
  `id_periksa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `tensi_darah` varchar(11) NOT NULL,
  `riwayat_penyakit` varchar(255) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  `diagnosa` varchar(255) NOT NULL,
  `tindakan` varchar(255) NOT NULL,
  `resep_obat` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_status_periksa` int(11) NOT NULL,
  `id_status_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_periksa`
--

INSERT INTO `tb_periksa` (`id_periksa`, `id_user`, `id_poli`, `tanggal`, `no_antrian`, `tensi_darah`, `riwayat_penyakit`, `gejala`, `diagnosa`, `tindakan`, `resep_obat`, `keterangan`, `id_status_periksa`, `id_status_obat`) VALUES
(12, 8, 1, '2021-07-19', 1, '', '', '', '', '', '', '', 1, 1),
(13, 8, 1, '2021-07-19', 2, '', '', '', '', '', '', '', 1, 1),
(14, 7, 1, '2021-07-19', 3, '', '', '', '', '', '', '', 1, 1),
(15, 7, 1, '2021-07-19', 4, '', '', '', '', '', '', '', 1, 1),
(16, 0, 1, '2021-07-28', 1, '', '', '', '', '', '', '', 1, 1),
(17, 0, 1, '2021-07-28', 2, '', '', '', '', '', '', '', 1, 1),
(18, 0, 2, '2021-07-28', 1, '', '', '', '', '', '', '', 1, 1),
(19, 0, 1, '2021-07-28', 3, '', '', '', '', '', '', '', 1, 1),
(20, 0, 1, '2021-07-28', 4, '', '', '', '', '', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_poli`
--

CREATE TABLE `tb_poli` (
  `id_poli` int(11) NOT NULL,
  `ket_poli` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_poli`
--

INSERT INTO `tb_poli` (`id_poli`, `ket_poli`) VALUES
(1, 'UMUM'),
(2, 'GIGI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(11) NOT NULL,
  `ket_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `ket_status`) VALUES
(1, 'BELUM'),
(2, 'SUDAH'),
(3, 'PROSES');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `id_akses` int(11) NOT NULL,
  `no_identitas` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(55) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `id_akses`, `no_identitas`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `pekerjaan`, `no_hp`, `email`, `username`, `password`, `foto`) VALUES
(1, 1, '503/A.0/0066.ADM/35', 'Amry Zulfa Al Husna', 'L', 'Kediri', '1999-08-17', 'Dsn. Bulurejo Plosoklaten Kediri', 'Swasta', '082234121604', 'amryzoelfa@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'dbb947a11ae417b99b17da14442e903d.png'),
(2, 2, 'E31181295', 'An Nissa Safitri', 'P', 'Lumajang', '1999-12-23', 'Tempeh, Lumajang', 'Mahasiswa', '085895014535', 'annisa@gmail.com', 'E31181295', '202cb962ac59075b964b07152d234b70', '0ad248db6661d63a485ec6172fb7f237.jpg'),
(3, 3, '503/A.1/0066.DU/35', 'dr. Anindita Pramadyasiwi', 'P', 'Jember', '1989-05-10', 'Jl. Mastrip, Jember', 'PNS', '085111333555', '', 'drumum', '202cb962ac59075b964b07152d234b70', '7f06502c4a6b49998af85d24efc5e0a6.jpg'),
(4, 4, '504/B.2/0076.DRG/35', 'drg. Fariz Gustafianto', 'L', 'Jember', '1995-06-06', 'Jl. Kalimantan, Jember', 'PNS', '085522663311', '', 'drgigi', '202cb962ac59075b964b07152d234b70', '5561f012f2b20f2d854879b0f37d9101.jpg'),
(5, 5, '501/P.1/0066.TK/35/1', 'Wulan Cahya Wandani', 'P', 'Situbondo', '1999-08-22', 'Jl. Masing - masing, Situbondo', 'PNS', '085708514574', '', 'apoteker', '202cb962ac59075b964b07152d234b70', '00794627fa22d188c1b1db212fa94064.jpg'),
(6, 2, 'E31181373', 'Ratna Dewi Safitri', 'P', 'Lumajang', '1999-12-07', 'Jl. in Aja, Lumajang', 'Mahasiswa', '085607936355', '', 'E31181373', '202cb962ac59075b964b07152d234b70', '00ec8f8d9934eb527f48aa2b4de7c47d.jpg'),
(7, 2, 'E31180980', 'Afif Faris Hudaifi', 'L', 'Ponorogo', '1999-06-04', 'Jl. Khianat, Ponorogo', 'Mahasiswa', '089697020078', 'afif@gmail.com', 'E31180908', '202cb962ac59075b964b07152d234b70', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nim` varchar(9) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `status` int(3) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `tmp_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nim`, `nama`, `status`, `gender`, `alamat`, `tmp_lahir`, `tgl_lahir`, `prodi`, `email`, `no_hp`, `password`, `foto`) VALUES
('qwerty', 'staff', 1, 'L', 'kantor', 'rumah', '2021-07-10', 'IESP', 'admin@lol.com', '1234', '202cb962ac59075b964b07152d234b70', ''),
('123', 'mhs', 2, 'L', 'hutan', 'dasf', '2021-07-14', 'IESP', 'sari.hidayati26@gmail.com', '38248', '202cb962ac59075b964b07152d234b70', ''),
('f1d', 'mhs2', 2, 'P', 'asddr', 'iop', '2021-07-02', 'Akuntansi', 'admin@lol.com', '38248', '202cb962ac59075b964b07152d234b70', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akses`
--
ALTER TABLE `tb_akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `tb_periksa`
--
ALTER TABLE `tb_periksa`
  ADD PRIMARY KEY (`id_periksa`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_poli` (`id_poli`),
  ADD KEY `id_status_periksa` (`id_status_periksa`),
  ADD KEY `id_status_obat` (`id_status_obat`);

--
-- Indexes for table `tb_poli`
--
ALTER TABLE `tb_poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_akses` (`id_akses`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akses`
--
ALTER TABLE `tb_akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_periksa`
--
ALTER TABLE `tb_periksa`
  MODIFY `id_periksa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_poli`
--
ALTER TABLE `tb_poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
