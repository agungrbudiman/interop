-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 04:45 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikap`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_control`
--

CREATE TABLE `access_control` (
  `ac_id` int(11) NOT NULL,
  `ac_desc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_control`
--

INSERT INTO `access_control` (`ac_id`, `ac_desc`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id` int(11) NOT NULL,
  `us_id` int(11) NOT NULL,
  `jenis_cuti` int(11) NOT NULL,
  `jenis_cuti_val` varchar(100) NOT NULL,
  `saldo` varchar(3) NOT NULL,
  `durasi` varchar(3) NOT NULL,
  `cuti_start` varchar(10) DEFAULT NULL,
  `cuti_end` varchar(10) DEFAULT NULL,
  `alamat` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id`, `us_id`, `jenis_cuti`, `jenis_cuti_val`, `saldo`, `durasi`, `cuti_start`, `cuti_end`, `alamat`, `keterangan`) VALUES
(1, 1, 7, 'Studi Banding', '0', '7', '2021-06-03', '2021-06-10', 'Kejaksaan Negeri Sleman', 'Tugas dari atasan'),
(2, 1, 2, 'Cuti Sakit', '0', '14', '2021-06-03', '2021-06-17', 'Wisma Atlet', 'Isolasi COVID-19'),
(3, 1, 7, 'Studi Banding', '0', '0', '2021-06-03', '2021-06-03', '', ''),
(4, 1, 3, 'Cuti Besar', '0', '3', '2021-06-05', '2021-06-08', 'Jl. Percontohan', ''),
(5, 1, 4, 'Cuti Bersalin', '0', '7', '2021-06-03', '2021-06-10', 'Rumah sakit ibu dan anak', 'Melahirkan anak ke-2'),
(6, 1, 1, 'Cuti Tahunan', '0', '3', '2021-06-04', '2021-06-07', 'Jl. Malioboro', 'Makan di warung');

-- --------------------------------------------------------

--
-- Table structure for table `izin`
--

CREATE TABLE `izin` (
  `id` int(11) NOT NULL,
  `us_id` int(11) NOT NULL,
  `jenis_izin` int(11) NOT NULL,
  `jenis_izin_val` varchar(100) NOT NULL,
  `durasi` varchar(3) NOT NULL,
  `izin_start` varchar(10) DEFAULT NULL,
  `izin_end` varchar(10) DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `izin`
--

INSERT INTO `izin` (`id`, `us_id`, `jenis_izin`, `jenis_izin_val`, `durasi`, `izin_start`, `izin_end`, `keterangan`) VALUES
(1, 1, 1, 'Lain-lain', '7', '2021-06-03', '2021-06-10', ''),
(2, 1, 2, 'Bermain', '90', '2021-06-04', '2021-09-02', '');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_cuti`
--

CREATE TABLE `jenis_cuti` (
  `id` int(11) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_cuti`
--

INSERT INTO `jenis_cuti` (`id`, `value`) VALUES
(1, 'Cuti Tahunan'),
(2, 'Cuti Sakit'),
(3, 'Cuti Besar'),
(4, 'Cuti Bersalin'),
(5, 'Cuti Alasan Penting'),
(6, 'Cuti Diluar Tanggungan'),
(7, 'Studi Banding');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_izin`
--

CREATE TABLE `jenis_izin` (
  `id` int(11) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_izin`
--

INSERT INTO `jenis_izin` (`id`, `value`) VALUES
(1, 'Lain-lain'),
(2, 'Bermain');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `us_id` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jam_masuk` varchar(100) NOT NULL,
  `jam_keluar` varchar(100) NOT NULL,
  `ishoma` varchar(100) NOT NULL,
  `kekurangan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id_kehadiran` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`us_id`, `tanggal`, `jam_masuk`, `jam_keluar`, `ishoma`, `kekurangan`, `keterangan`, `id_kehadiran`) VALUES
('1', '01-06-2021', '07:30', '16:45', '01:00', '', 'Hadir', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `us_id` int(11) NOT NULL,
  `ac_id` int(11) NOT NULL,
  `us_username` varchar(30) NOT NULL,
  `us_password` varchar(100) NOT NULL,
  `us_photo` varchar(100) NOT NULL,
  `us_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`us_id`, `ac_id`, `us_username`, `us_password`, `us_photo`, `us_email`) VALUES
(1, 1, 'admin', 'admin', 'admin.png', 'admin@gmail.com'),
(2, 2, 'test', 'test', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_control`
--
ALTER TABLE `access_control`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-us_id` (`us_id`),
  ADD KEY `fk-jenis_cuti` (`jenis_cuti`);

--
-- Indexes for table `izin`
--
ALTER TABLE `izin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-us_id` (`us_id`),
  ADD KEY `fk-jenis_cuti` (`jenis_izin`);

--
-- Indexes for table `jenis_cuti`
--
ALTER TABLE `jenis_cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_izin`
--
ALTER TABLE `jenis_izin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id_kehadiran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`us_id`),
  ADD KEY `ac_id` (`ac_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_control`
--
ALTER TABLE `access_control`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_cuti`
--
ALTER TABLE `jenis_cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jenis_izin`
--
ALTER TABLE `jenis_izin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id_kehadiran` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `fk-jenis_cuti` FOREIGN KEY (`jenis_cuti`) REFERENCES `jenis_cuti` (`id`),
  ADD CONSTRAINT `fk-us_id` FOREIGN KEY (`us_id`) REFERENCES `user` (`us_id`);

--
-- Constraints for table `izin`
--
ALTER TABLE `izin`
  ADD CONSTRAINT `fkizin-jenis_izin` FOREIGN KEY (`jenis_izin`) REFERENCES `jenis_cuti` (`id`),
  ADD CONSTRAINT `fkizin-us_id` FOREIGN KEY (`us_id`) REFERENCES `user` (`us_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
