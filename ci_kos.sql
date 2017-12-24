-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2017 at 12:53 AM
-- Server version: 5.7.12-0ubuntu1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_kos`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kos`
--

CREATE TABLE `data_kos` (
  `id_kos` int(11) NOT NULL,
  `nama_kos` varchar(20) NOT NULL,
  `id_pemilik` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `fasilitas` varchar(500) NOT NULL,
  `kamar_kosong` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kos`
--

INSERT INTO `data_kos` (`id_kos`, `nama_kos`, `id_pemilik`, `jenis`, `alamat`, `foto`, `harga`, `fasilitas`, `kamar_kosong`, `keterangan`) VALUES
(1, 'Muslim Sejati', 0, 'Putra', 'Candiwinangun', '', 0, 'Wi-fi', 5, 'Ready'),
(2, 'kos2', 0, '', '', 'images/datakos/kos1.jpg', 21812991, '', 0, ''),
(4, 'kos4', 0, '', '', 'images/datakos/kos2.jpg', 2131, '', 0, ''),
(7, 'Kos Melati', 0, 'Putri', 'Lanjaran', '', 201283131, 'Kamar Mandi Dalam', 5, 'Ready'),
(9, 'Kos Melati', 0, 'Putri', 'Lanjaran', '', 201283131, 'Kamar Mandi Dalam', 5, 'Ready');

-- --------------------------------------------------------

--
-- Table structure for table `data_pemesan`
--

CREATE TABLE `data_pemesan` (
  `id_pemesan` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jenis_kelamin` int(10) NOT NULL,
  `asal` int(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pemesanan`
--

CREATE TABLE `data_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `id_kos` int(11) NOT NULL,
  `id_pemesan` int(11) NOT NULL,
  `id_pemilik` int(11) NOT NULL,
  `permintaan_fasilitas` varchar(100) NOT NULL,
  `permintaan_penjemputan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pemilik`
--

CREATE TABLE `data_pemilik` (
  `id_pemilik` int(11) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `rekening` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengguna`
--

INSERT INTO `data_pengguna` (`id_pengguna`, `username`, `password`, `level`, `nama`, `email`) VALUES
(1, 'admin', 'admin', 1, 'admin', ''),
(3, 'user', 'user', 2, 'user', 'user@gmail.com'),
(5, 'barka', 'barkah', 2, 'Barkah', 'subarkaharif67@gmail'),
(6, 'susan', 'susan', 3, 'susan', 'susan@admin.com'),
(9, 'tarso', 'tarso', 2, 'Sutarso', 'tarso@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `data_permintaan_iklan`
--

CREATE TABLE `data_permintaan_iklan` (
  `id_permintaan` int(11) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `nama_kos` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `kamar_kosong` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_permintaan_iklan`
--

INSERT INTO `data_permintaan_iklan` (`id_permintaan`, `nama_pemilik`, `nama_kos`, `jenis`, `alamat`, `foto`, `harga`, `fasilitas`, `kamar_kosong`, `keterangan`) VALUES
(2, 'Susanto', 'Kos Melati', 'Putri', 'Lanjaran', '', 201283131, 'Kamar Mandi Dalam', 5, 'Ready');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kos`
--
ALTER TABLE `data_kos`
  ADD PRIMARY KEY (`id_kos`);

--
-- Indexes for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `data_permintaan_iklan`
--
ALTER TABLE `data_permintaan_iklan`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kos`
--
ALTER TABLE `data_kos`
  MODIFY `id_kos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `data_permintaan_iklan`
--
ALTER TABLE `data_permintaan_iklan`
  MODIFY `id_permintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
