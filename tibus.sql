-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 14, 2020 at 06:14 AM
-- Server version: 10.4.12-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tibus`
--
CREATE DATABASE IF NOT EXISTS `tibus` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tibus`;

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

DROP TABLE IF EXISTS `akun`;
CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `email`, `nama_depan`, `nama_belakang`, `telpon`, `password`, `id_level`, `created_at`, `updated_at`) VALUES
(1, 'sultangendut@gmail.com', 'Sultan', 'Achmad Qum Masykuro NS', '085155338303', 'test123', 2, NULL, NULL),
(2, 'lala@gmail.com', 'lala', 'lili', '2193129391293', 'adsjdaskjdask', 1, NULL, NULL),
(3, 'natlus@gmail.com', 'hihi', 'huhu', '628921832134', '$2y$10$NQ3PlBMiwpHoqHI5NqjCRukTAEmPJRGlAVC5dH6zcewCTk18xutJC', 1, NULL, NULL),
(4, 'lelele@gmail.com', 'hihi', 'huhu', '628921832134', 'daef4953b9783365cad6615223720506cc46c5167cd16ab500fa597aa08ff964eb24fb19687f34d7665f778fcb6c5358fc0a5b81e1662cf90f73a2671c53f991', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

DROP TABLE IF EXISTS `keys`;
CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 0, '3efd7b6dd8d0fd2a47f618b94d53a9ce1b246d25', 0, 0, 0, NULL, 20200505),
(2, 0, 'qwe123', 0, 0, 0, NULL, 20200509);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `name`) VALUES
(1, 'member'),
(2, 'admin'),
(3, 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `kode_booking` int(11) NOT NULL,
  `total` varchar(20) NOT NULL,
  `metode_bayar` int(11) NOT NULL,
  `bukti_bayar` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `id_akun`, `kode_booking`, `total`, `metode_bayar`, `bukti_bayar`, `status`) VALUES
(1, 1, 1, '25000', 2, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

DROP TABLE IF EXISTS `payment_method`;
CREATE TABLE `payment_method` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `no` varchar(30) NOT NULL,
  `an` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`id`, `name`, `no`, `an`) VALUES
(1, 'Bank Transfer - BCA', '389129381894', 'PT. Tibus Tbk'),
(2, 'Bank Transfer - BNI', '3112674412321', 'PT. Tibus Tbk');

-- --------------------------------------------------------

--
-- Table structure for table `payment_status`
--

DROP TABLE IF EXISTS `payment_status`;
CREATE TABLE `payment_status` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_status`
--

INSERT INTO `payment_status` (`id`, `name`) VALUES
(1, 'waiting'),
(2, 'completed'),
(3, 'failed');

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

DROP TABLE IF EXISTS `po`;
CREATE TABLE `po` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po`
--

INSERT INTO `po` (`id`, `nama`) VALUES
(1, 'P.O Restu'),
(2, 'P.O Antar Lintas Sumatera (ALS)');

-- --------------------------------------------------------

--
-- Table structure for table `po_trayek`
--

DROP TABLE IF EXISTS `po_trayek`;
CREATE TABLE `po_trayek` (
  `id` int(11) NOT NULL,
  `id_po` int(11) NOT NULL,
  `dari` int(11) NOT NULL,
  `tujuan` int(11) NOT NULL,
  `jam_berangkat` time NOT NULL,
  `jam_tiba` time NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_tiba` date NOT NULL,
  `harga` int(11) NOT NULL,
  `sisa_kursi` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po_trayek`
--

INSERT INTO `po_trayek` (`id`, `id_po`, `dari`, `tujuan`, `jam_berangkat`, `jam_tiba`, `tanggal_berangkat`, `tanggal_tiba`, `harga`, `sisa_kursi`) VALUES
(1, 1, 1, 2, '09:06:00', '10:20:00', '2020-04-30', '2020-04-30', 25000, '10'),
(2, 1, 2, 1, '10:37:00', '11:40:00', '2020-04-30', '2020-04-30', 25000, '15');

-- --------------------------------------------------------

--
-- Table structure for table `terminal`
--

DROP TABLE IF EXISTS `terminal`;
CREATE TABLE `terminal` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terminal`
--

INSERT INTO `terminal` (`id`, `nama`, `kota`, `alamat`) VALUES
(1, 'Terminal Arjosari', 'Malang', 'Arjosari'),
(2, 'Terminal Purabaya', 'Surabaya', 'purabaya');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

DROP TABLE IF EXISTS `tiket`;
CREATE TABLE `tiket` (
  `id` int(11) NOT NULL,
  `kode_booking` int(11) NOT NULL,
  `nama_penumpang` varchar(100) NOT NULL,
  `no_ktp_penumpang` varchar(30) NOT NULL,
  `no_duduk` varchar(10) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_trayek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id`, `kode_booking`, `nama_penumpang`, `no_ktp_penumpang`, `no_duduk`, `id_akun`, `id_trayek`) VALUES
(1, 1, 'Mrs. Tifa Lockhart', '35017823673123', '8', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tiket_booking`
--

DROP TABLE IF EXISTS `tiket_booking`;
CREATE TABLE `tiket_booking` (
  `id` int(11) NOT NULL,
  `name` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket_booking`
--

INSERT INTO `tiket_booking` (`id`, `name`) VALUES
(1, 10001),
(2, 10002);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkLevel` (`id_level`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkMetode` (`metode_bayar`),
  ADD KEY `fkStatus` (`status`),
  ADD KEY `fkAkun2` (`id_akun`),
  ADD KEY `fkBooking2` (`kode_booking`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_status`
--
ALTER TABLE `payment_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po_trayek`
--
ALTER TABLE `po_trayek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkDari` (`dari`),
  ADD KEY `fkTujuan` (`tujuan`),
  ADD KEY `fkPo` (`id_po`);

--
-- Indexes for table `terminal`
--
ALTER TABLE `terminal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkAkun` (`id_akun`),
  ADD KEY `fkTrayek` (`id_trayek`),
  ADD KEY `fkBooking` (`kode_booking`);

--
-- Indexes for table `tiket_booking`
--
ALTER TABLE `tiket_booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_status`
--
ALTER TABLE `payment_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `po`
--
ALTER TABLE `po`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `po_trayek`
--
ALTER TABLE `po_trayek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `terminal`
--
ALTER TABLE `terminal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tiket_booking`
--
ALTER TABLE `tiket_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `fkLevel` FOREIGN KEY (`id_level`) REFERENCES `level` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fkAkun2` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkBooking2` FOREIGN KEY (`kode_booking`) REFERENCES `tiket_booking` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkMetode` FOREIGN KEY (`metode_bayar`) REFERENCES `payment_method` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkStatus` FOREIGN KEY (`status`) REFERENCES `payment_status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `po_trayek`
--
ALTER TABLE `po_trayek`
  ADD CONSTRAINT `fkDari` FOREIGN KEY (`dari`) REFERENCES `terminal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkPo` FOREIGN KEY (`id_po`) REFERENCES `po` (`id`),
  ADD CONSTRAINT `fkTujuan` FOREIGN KEY (`tujuan`) REFERENCES `terminal` (`id`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `fkAkun` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkBooking` FOREIGN KEY (`kode_booking`) REFERENCES `tiket_booking` (`id`),
  ADD CONSTRAINT `fkTrayek` FOREIGN KEY (`id_trayek`) REFERENCES `po_trayek` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
