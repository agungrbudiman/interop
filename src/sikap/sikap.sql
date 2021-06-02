-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 01:56 PM
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

INSERT INTO `cuti` (`id`, `us_id`, `jenis_cuti`, `saldo`, `durasi`, `cuti_start`, `cuti_end`, `alamat`, `keterangan`) VALUES
(3, 1, 1, '0', '5', '2021-06-02', '2021-06-06', 'ini data dummy', 'ini data dummy'),
(6, 1, 2, '0', '1', '2021-06-02', '2021-06-03', 'Sleman', 'Warisan buat beli tanah'),
(7, 1, 1, '0', '7', '2021-06-02', '2021-06-02', '', '');

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
(1, 'Cuti alasan penting'),
(2, 'Cuti mengurus warisan'),
(3, 'Cuti tahunan');

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
(1, 1, 'admin', 'admin', 'admin.png', 'admin@gmail.com');

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
-- Indexes for table `jenis_cuti`
--
ALTER TABLE `jenis_cuti`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jenis_cuti`
--
ALTER TABLE `jenis_cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id_kehadiran` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `fk-jenis_cuti` FOREIGN KEY (`jenis_cuti`) REFERENCES `jenis_cuti` (`id`),
  ADD CONSTRAINT `fk-us_id` FOREIGN KEY (`us_id`) REFERENCES `user` (`us_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
