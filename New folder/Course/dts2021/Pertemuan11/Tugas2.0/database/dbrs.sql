-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2021 at 06:59 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nm_admin` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nm_admin`, `username`, `password`) VALUES
(1, 'Nauvan', 'nauvan', '12345'),
(2, 'Admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbanggota`
--

CREATE TABLE `tbanggota` (
  `idanggota` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL,
  `spesialis` varchar(35) NOT NULL,
  `foto` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbanggota`
--

INSERT INTO `tbanggota` (`idanggota`, `nama`, `jeniskelamin`, `alamat`, `status`, `spesialis`, `foto`) VALUES
('AG001', 'Riki Subekti', 'Pria', 'Jl.Semangka No 3', 'Non-Active', 'Jantung', ''),
('AG002', 'Aini Rahmawati', 'Wanita', 'Jl.Anggrek No 45', 'Active', 'Jantung', ''),
('AG003', 'Rudi Hartono', 'Pria', 'Jl.Manggis 98', 'Active', 'Penyakit Kulit', ''),
('AG004', 'Dino Riano', 'Pria', 'Jl.Melon No 33', 'Non-Active', 'Penyakit Kulit', ''),
('AG005', 'Agus Wardoyo', 'Pria', 'Jl.Cempedak No 88', 'Active', 'Kanker', ''),
('AG006', 'Shinta Riani', 'Wanita', 'JL.Jeruk No 1', 'Non-Active', 'Kanker', ''),
('AG007', 'Irwan Hakim', 'Pria', 'Jl.Salak No 34', 'Active', 'Bidan Kandungan', ''),
('AG008', 'Indah Dian', 'Wanita', 'Jl.Semangka No 23', 'Non-Active', 'Bidan Kandungan', ''),
('AG009', 'Rina Auliah', 'Wanita', 'Jl.Merpati No 44', 'Non-Active', 'Kejiwaan Manusia', ''),
('AG010', 'Septi Putri', 'Wanita', 'Jl.Beringin No 2', 'Active', 'Kejiwaan Manusia', ''),
('AG011', 'Ali Ahmadi', 'Pria', 'Jl. Lokananta No.121', 'Active', 'Flu', ''),
('AG014', 'Rangga', 'Pria', 'Jl.Manggis No 41', 'Active', 'Flu', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbanggota`
--
ALTER TABLE `tbanggota`
  ADD PRIMARY KEY (`idanggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
