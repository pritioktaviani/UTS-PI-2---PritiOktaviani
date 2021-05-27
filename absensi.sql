-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 09:54 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblabsen`
--

CREATE TABLE IF NOT EXISTS `tblabsen` (
  `idabsen` int(5) NOT NULL,
  `tglabsen` date NOT NULL,
  `masuk` time NOT NULL,
  `keluar` time NOT NULL,
  `kodedosen` varchar(5) NOT NULL,
  `sesi` char(1) NOT NULL,
  `kelassesi` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblabsen`
--

INSERT INTO `tblabsen` (`idabsen`, `tglabsen`, `masuk`, `keluar`, `kodedosen`, `sesi`, `kelassesi`) VALUES
(1, '2021-05-25', '01:02:03', '01:03:02', 'KO-2', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbldosen`
--

CREATE TABLE IF NOT EXISTS `tbldosen` (
  `kodedosen` varchar(5) NOT NULL,
  `nids` varchar(12) NOT NULL,
  `nipy` varchar(12) NOT NULL,
  `namadosen` varchar(80) NOT NULL,
  `kodeprodi` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbljadwal`
--

CREATE TABLE IF NOT EXISTS `tbljadwal` (
  `id` int(11) NOT NULL,
  `jadwalid` int(4) NOT NULL,
  `kodedosen` varchar(5) NOT NULL,
  `thnakademik` varchar(10) NOT NULL,
  `semester` varchar(6) NOT NULL,
  `kodemk` varchar(12) NOT NULL,
  `sesi` char(1) NOT NULL,
  `jammasuk` time NOT NULL,
  `jamkeluar` time NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `ruang` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `kelassesi` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblmkuliah`
--

CREATE TABLE IF NOT EXISTS `tblmkuliah` (
  `kodemk` varchar(15) NOT NULL,
  `namamk` varchar(60) NOT NULL,
  `sks` int(2) NOT NULL,
  `smt` int(1) NOT NULL,
  `kodeprodi` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblprodi`
--

CREATE TABLE IF NOT EXISTS `tblprodi` (
  `kodeprodi` varchar(1) NOT NULL,
  `namaprodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblabsen`
--
ALTER TABLE `tblabsen`
 ADD PRIMARY KEY (`idabsen`);

--
-- Indexes for table `tbldosen`
--
ALTER TABLE `tbldosen`
 ADD PRIMARY KEY (`kodedosen`);

--
-- Indexes for table `tbljadwal`
--
ALTER TABLE `tbljadwal`
 ADD PRIMARY KEY (`kodedosen`);

--
-- Indexes for table `tblmkuliah`
--
ALTER TABLE `tblmkuliah`
 ADD PRIMARY KEY (`kodemk`);

--
-- Indexes for table `tblprodi`
--
ALTER TABLE `tblprodi`
 ADD PRIMARY KEY (`kodeprodi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
