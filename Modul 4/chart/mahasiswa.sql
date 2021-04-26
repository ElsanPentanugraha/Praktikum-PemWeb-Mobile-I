-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 04:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nomor` int(5) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `nim` bigint(12) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nomor`, `nama_mhs`, `nim`, `jenis_kelamin`, `fakultas`) VALUES
(7, 'Gibran', 1122432434, 'L', 'FKIP'),
(6, 'Qiano Arfabian Putra', 1123555365, 'L', 'Pertanian'),
(16, 'Han tokyo', 1826393377, 'L', 'Teknik'),
(8, 'Johny', 12363377332, 'L', 'Pertanian'),
(13, 'Radi Mahardika', 12837139223, 'L', 'Ekonomi'),
(9, 'Muhammad Riski', 12837373839, 'L', 'Ekonomi'),
(2, 'Angelia watson', 19202503028, 'P', 'FKIP'),
(10, 'Rahmat Syah Alub', 122652626252, 'L', 'Ekonomi'),
(11, 'Mahmud Amir', 123455467464, 'L', 'Pertanian'),
(12, 'Maya Putri', 191020502040, 'P', 'Teknik'),
(4, 'Frista Amelia', 193020502047, 'P', 'Teknik'),
(17, 'Muhammad Arifin', 193020503025, 'L', 'Teknik'),
(3, 'Oscar Oktorian', 193020503037, 'L', 'Teknik'),
(1, 'Elsan Pentanugraha', 193030503047, 'L', 'Teknik'),
(18, 'Rio Geradi Muke', 193030503051, 'L', 'Teknik'),
(5, 'Rahmaniah', 212111231133, 'P', 'FKIP'),
(15, 'Mia Toretto', 221323435545, 'P', 'Ekonomi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `nomor` (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nomor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
