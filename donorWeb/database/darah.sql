-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2026 at 03:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darah`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `waktu` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `foto`, `lokasi`, `waktu`, `keterangan`) VALUES
(1, 'event1.jpg', 'Mataram', '15 Juli 2026', 'Donor darah bersama PMI Kota Mataram'),
(2, 'event2.jpg', 'Lombok Barat', '20 Juli 2026', 'Kegiatan donor darah di kantor bupati');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `nik` varchar(30) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `kelamin` varchar(20) DEFAULT NULL,
  `tempat_l` varchar(100) DEFAULT NULL,
  `tanggal_l` varchar(5) DEFAULT NULL,
  `bulan_l` varchar(20) DEFAULT NULL,
  `tahun_l` varchar(5) DEFAULT NULL,
  `goldar` varchar(5) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `telfon` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `verify` tinyint(1) DEFAULT NULL,
  `forgotpass` tinyint(1) DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`nik`, `nama`, `kota`, `kelamin`, `tempat_l`, `tanggal_l`, `bulan_l`, `tahun_l`, `goldar`, `username`, `password`, `telfon`, `email`, `status`, `verify`, `forgotpass`, `role`) VALUES
('00000001', 'Administrator', 'Mataram', 'L', 'Mataram', '01', 'Januari', '2000', 'O+', 'admin', 'admin123', '08123456789', 'admin@caridonor.com', 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `stok_darah`
--

CREATE TABLE `stok_darah` (
  `id` int(11) NOT NULL,
  `goldar` varchar(5) DEFAULT NULL,
  `komponen` varchar(50) DEFAULT NULL,
  `utd` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stok_darah`
--

INSERT INTO `stok_darah` (`id`, `goldar`, `komponen`, `utd`, `alamat`, `jumlah`) VALUES
(1, 'A+', 'PRC', 'Mataram', 'PMI Kota Mataram', 120),
(2, 'O+', 'WB', 'Mataram', 'PMI Kota Mataram', 85),
(3, 'B+', 'TC', 'Sumbawa', 'PMI Kabupaten Sumbawa', 55);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `stok_darah`
--
ALTER TABLE `stok_darah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stok_darah`
--
ALTER TABLE `stok_darah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
