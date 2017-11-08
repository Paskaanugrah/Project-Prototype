-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 12:56 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smaca`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jdw` int(3) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `kereta` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jdw`, `asal`, `tujuan`, `kereta`, `tanggal`, `waktu`) VALUES
(1, 'Jogja', 'Jakarta', 'Fajar Utama', '2017-11-14', '08:00:00'),
(2, 'Jogja', 'Bandung', 'Argo Lawu', '2017-11-23', '12:30:00'),
(3, 'Surabaya', 'Solo', 'Sumber Kencono', '2017-11-13', '09:00:00'),
(4, 'Cilacap', 'Malang', 'Senja Utama', '2017-11-15', '18:00:00'),
(5, 'Semarang', 'Banten', 'Sumber Kencono', '2017-11-17', '05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_psn` int(5) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `kereta` varchar(40) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `jumlah` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_psn`, `asal`, `tujuan`, `kereta`, `tanggal`, `waktu`, `jumlah`) VALUES
(17, 'Semarang', 'Banten', 'Sumber Kencono', '2017-11-17', '05:00:00', NULL),
(18, 'Jogja', 'Bandung', 'Argo Lawu', '2017-11-23', '12:30:00', NULL),
(19, 'Jogja', 'Bandung', 'Argo Lawu', '2017-11-23', '12:30:00', NULL),
(20, 'Jogja', 'Jakarta', 'Fajar Utama', '2017-11-14', '08:00:00', NULL),
(21, 'Surabaya', 'Solo', 'Sumber Kencono', '2017-11-13', '09:00:00', NULL),
(22, 'Surabaya', 'Solo', 'Sumber Kencono', '2017-11-13', '09:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(13) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `identitas` int(25) NOT NULL,
  `gambar` blob NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `identitas`, `gambar`, `username`, `password`) VALUES
('5a0385541ce8d', 'Fuad Fikri S', 24354, '', 'fikri_s', '618dcdfb0cd9ae4481164961c4796dd8e3930c8d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jdw`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_psn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jdw` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_psn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
