-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 23, 2018 at 09:48 AM
-- Server version: 10.3.11-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud3`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(8) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `merk` varchar(80) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `bbm` varchar(80) NOT NULL,
  `nopol` varchar(80) NOT NULL,
  `norangka` varchar(80) NOT NULL,
  `nomesin` varchar(80) NOT NULL,
  `pemilik` varchar(80) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `jenis`, `merk`, `warna`, `tahun`, `bbm`, `nopol`, `norangka`, `nomesin`, `pemilik`, `alamat`) VALUES
(1, 'SPM RODA 2', 'HONDA VARIO 125', 'MERAH', '2016', 'BENSIN', 'K-7844-NU', 'MH8FD34GJSX-245548', 'WTPM2F4KH', 'YOGI', 'SEMARANG TENGAH'),
(3, 'SPM RODA 2', 'YAMAHA MIO J', 'HITAM', '2010', 'BENSIN', 'H-8345-ZA', 'TPQ6DH88DX-264837', 'DS2I9P07D', 'FERA', 'SEMARANG BARAT');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Mohammad Nur Fawaiq', 'admin', 'admin'),
(2, 'YukCoding Tutor', 'yukcoding', 'yukcoding');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
