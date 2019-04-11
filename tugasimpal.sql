-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Apr 2019 pada 07.43
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(15) NOT NULL,
  `kode_pegawai` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `kode_pegawai`, `password`) VALUES
('admin', 'mngr01', 'admin'),
('anon', 'koor01', 'anon'),
('mamalz', 'supl01', 'mamalz');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
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
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode_barang`, `kode_pegawai`, `nama_barang`, `tipe_barang`, `stok`, `harga`) VALUES
('123123', 'koor01', 'micin', 'pengawet', 5, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_keuangan`
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
-- Struktur dari tabel `membuat`
--

CREATE TABLE `membuat` (
  `kode_pegawai` varchar(20) NOT NULL,
  `kode_laporan_keuangan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menambah`
--

CREATE TABLE `menambah` (
  `kode_barang` varchar(20) NOT NULL,
  `kode_pesanan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `kode_pegawai` varchar(20) NOT NULL,
  `nama_pegawai` varchar(15) NOT NULL,
  `gaji` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`kode_pegawai`, `nama_pegawai`, `gaji`) VALUES
('koor01', 'Rismada Gerra', 5000000),
('mngr01', 'Fahru Adi R', 7500000),
('supl01', 'M. Turmudzi', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
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
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`kode_pesanan`, `nama_barang`, `tanggal_pesanan`, `jumlah_barang`, `nama_supplier`, `total`, `ket_bayar`) VALUES
(1170000001, 'tango vanilla', '2019-03-06', 200, 'Parman', 200000, 0);

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
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `fk_akun_pegawai` FOREIGN KEY (`kode_pegawai`) REFERENCES `pegawai` (`kode_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_barang_pegawai` FOREIGN KEY (`kode_pegawai`) REFERENCES `pegawai` (`kode_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `membuat`
--
ALTER TABLE `membuat`
  ADD CONSTRAINT `fk_membuat_laporan_keuangan` FOREIGN KEY (`kode_laporan_keuangan`) REFERENCES `laporan_keuangan` (`kode_laporan_keuangan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_membuat_pegawai` FOREIGN KEY (`kode_pegawai`) REFERENCES `pegawai` (`kode_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `menambah`
--
ALTER TABLE `menambah`
  ADD CONSTRAINT `fk_menambah_barang` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_menambah_pesanan` FOREIGN KEY (`kode_pesanan`) REFERENCES `pesanan` (`kode_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
