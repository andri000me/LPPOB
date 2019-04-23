-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 09:03 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lppob`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
`id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `rekening` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id` int(11) NOT NULL,
  `nometer` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `idtarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nometer`, `nama`, `alamat`, `idtarif`) VALUES
(0, 2147483647, 'celana pendek', 'Jepara', 1),
(1, 2147483647, 'Aku', 'Surabaya', 1),
(2, 2147483647, 'celana pendek', 'Jepara', 1),
(3, 2147483647, 'Fauzi', 'Jepara', 3),
(4, 2147483647, 'Shafa', 'Bangsri', 1),
(5, 2147483647, 'Haji Ida', 'Jepara', 4),
(6, 2147483647, 'Desi', 'Demak', 3),
(7, 231413, 'Diw', 'Jepara', 1),
(8, 23423434, 'Set', 'Jepara', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
`id` int(11) NOT NULL,
  `idpelanggan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bulanbayar` varchar(11) NOT NULL,
  `biayaadmin` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `idpelanggan`, `tanggal`, `bulanbayar`, `biayaadmin`) VALUES
(1, 0, '2019-04-21', 'Maret', 2000),
(2, 0, '2019-04-22', 'Januari', 2000),
(3, 0, '2019-04-23', 'April', 2000),
(4, 0, '2019-04-23', 'Februari', 2000),
(5, 0, '2019-04-23', 'Maret', 2000),
(6, 0, '2019-04-23', 'Maret', 2000),
(7, 0, '2019-04-23', 'Januari', 2000),
(8, 0, '2019-04-23', 'Februari', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `penggunaan`
--

CREATE TABLE IF NOT EXISTS `penggunaan` (
  `id` int(11) NOT NULL,
  `bulan` enum('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') NOT NULL,
  `tahun` year(4) NOT NULL,
  `meterawal` varchar(11) NOT NULL,
  `meterakhir` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penggunaan`
--

INSERT INTO `penggunaan` (`id`, `bulan`, `tahun`, `meterawal`, `meterakhir`) VALUES
(1, 'Maret', 2019, '100', '500'),
(2, 'Januari', 2019, '400', '900'),
(3, 'April', 2019, '200', '700'),
(4, 'Februari', 2019, '300', '900'),
(5, 'Maret', 2019, '600', '900'),
(6, 'Maret', 2019, '200', '700'),
(7, 'Januari', 2019, '500', '800'),
(8, 'Februari', 2019, '200', '500');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE IF NOT EXISTS `tagihan` (
`id` int(11) NOT NULL,
  `bulan` varchar(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlahmeter` int(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id`, `bulan`, `tahun`, `jumlahmeter`, `status`) VALUES
(1, 'Maret', 2019, 400, 1),
(2, 'Januari', 2019, 500, 1),
(3, 'April', 2019, 500, 1),
(4, 'Februari', 2019, 600, 1),
(5, 'Maret', 2019, 300, 1),
(6, 'Maret', 2019, 500, 0),
(7, 'Januari', 2019, 300, 1),
(8, 'Februari', 2019, 300, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE IF NOT EXISTS `tarif` (
`id` int(11) NOT NULL,
  `kodetarif` varchar(11) NOT NULL,
  `daya` varchar(25) NOT NULL,
  `tarifperkwh` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`id`, `kodetarif`, `daya`, `tarifperkwh`) VALUES
(1, 'R-1/450 VA', '450', 415),
(3, 'R-1/900 VA', '900', 568),
(4, 'R-1/1300 VA', '1300', 1467);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'petugas', 'petugas', 'petugas'),
(3, 'pengguna', 'pengguna', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penggunaan`
--
ALTER TABLE `penggunaan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
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
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
