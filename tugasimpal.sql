-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 12:25 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasimpal`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(15) NOT NULL,
  `kode_pegawai` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `kode_pegawai`, `password`) VALUES
('fahruadi', 'mngr01', 'fahruadi'),
('gerranindya', 'koor01', 'gerranindya'),
('mturmudzi', 'supl01', 'mturmudzi');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(20) NOT NULL,
  `kode_pegawai` varchar(20) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `tipe_barang` varchar(15) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `kode_pegawai`, `nama_barang`, `tipe_barang`, `stok`, `harga`) VALUES
('123123', 'koor01', 'micin', 'pengawer', 5, 100);

-- --------------------------------------------------------

--
-- Table structure for table `laporan_keuangan`
--

CREATE TABLE `laporan_keuangan` (
  `kode_laporan_keuangan` int(10) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `tanggal_laporan` date NOT NULL,
  `jumlah_barang_terjual` int(11) NOT NULL,
  `total_pendapatan` int(11) NOT NULL,
  `total_pengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `membuat`
--

CREATE TABLE `membuat` (
  `kode_pegawai` varchar(20) NOT NULL,
  `kode_laporan_keuangan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menambah`
--

CREATE TABLE `menambah` (
  `kode_barang` varchar(20) NOT NULL,
  `kode_pesanan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `kode_pegawai` varchar(20) NOT NULL,
  `nama_pegawai` varchar(15) NOT NULL,
  `gaji` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`kode_pegawai`, `nama_pegawai`, `gaji`) VALUES
('koor01', 'Rismada Gerra', 5000000),
('mngr01', 'Fahru Adi R', 7500000),
('supl01', 'M. Turmudzi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `kode_pesanan` int(10) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `nama_supplier` varchar(20) NOT NULL,
  `total` int(11) NOT NULL,
  `ket_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`kode_pesanan`, `nama_barang`, `tanggal_pesanan`, `jumlah_barang`, `nama_supplier`, `total`, `ket_bayar`) VALUES
(1170000001, 'tango vanilla', '2017-09-11', 200, 'Parman', 200000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`),
  ADD KEY `kode_pegawai` (`kode_pegawai`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`),
  ADD KEY `kode_pegawai` (`kode_pegawai`);

--
-- Indexes for table `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  ADD PRIMARY KEY (`kode_laporan_keuangan`);

--
-- Indexes for table `membuat`
--
ALTER TABLE `membuat`
  ADD KEY `kode_pegawai` (`kode_pegawai`,`kode_laporan_keuangan`),
  ADD KEY `fk_membuat_laporan_keuangan` (`kode_laporan_keuangan`);

--
-- Indexes for table `menambah`
--
ALTER TABLE `menambah`
  ADD KEY `idxkode_barang` (`kode_barang`),
  ADD KEY `idxkode_pesanan` (`kode_pesanan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`kode_pegawai`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`kode_pesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  MODIFY `kode_laporan_keuangan` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `kode_pesanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1170000002;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `fk_akun_pegawai` FOREIGN KEY (`kode_pegawai`) REFERENCES `pegawai` (`kode_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_barang_pegawai` FOREIGN KEY (`kode_pegawai`) REFERENCES `pegawai` (`kode_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `membuat`
--
ALTER TABLE `membuat`
  ADD CONSTRAINT `fk_membuat_laporan_keuangan` FOREIGN KEY (`kode_laporan_keuangan`) REFERENCES `laporan_keuangan` (`kode_laporan_keuangan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_membuat_pegawai` FOREIGN KEY (`kode_pegawai`) REFERENCES `pegawai` (`kode_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menambah`
--
ALTER TABLE `menambah`
  ADD CONSTRAINT `fk_menambah_barang` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_menambah_pesanan` FOREIGN KEY (`kode_pesanan`) REFERENCES `pesanan` (`kode_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
