-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2020 pada 15.13
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-gis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `No_ID` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `No_Handphone` int(13) NOT NULL,
  `Jenis_Kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`No_ID`, `Nama`, `Alamat`, `tanggal_lahir`, `No_Handphone`, `Jenis_Kelamin`) VALUES
(12, 'rizaldi', 'Kampung: Kebon Kopi RT:04 RW:09 Kelurahan: Kebon K', '2020-01-09', 8211212, 'Laki'),
(0, 'qq', 'q', '2020-01-02', 0, 'q'),
(0, 'rizaldi', 'Kampung: Kebon Kopi RT:04 RW:09 Kelurahan: Kebon K', '0000-00-00', 0, 'a'),
(0, 'c', 'c', '0000-00-00', 0, 'c'),
(112313466, 'rizaldi', 'rizaldi', '2020-01-01', 0, 'Laki-Laki '),
(0, 'rizaldi naldian putra', 'Kampung: Kebon Kopi RT:04 RW:09 Kelurahan: Kebon K', '2020-01-07', 0, 'Laki-Laki '),
(0, 'rizaldi naldian putra', 'Kampung: Kebon Kopi RT:04 RW:09 Kelurahan: Kebon K', '2020-01-07', 0, 'Laki-Laki '),
(0, 'rizaldi naldian putra', 'Kampung: Kebon Kopi RT:04 RW:09 Kelurahan: Kebon K', '0000-00-00', 0, 'Laki-Laki '),
(123456789, 'angga', 'kota bogor', '2020-01-21', 0, 'Laki-Laki ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kejahatan`
--

CREATE TABLE `tbl_kejahatan` (
  `id_kejahatan` int(50) NOT NULL,
  `jenis_kejahatan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kejahatan`
--

INSERT INTO `tbl_kejahatan` (`id_kejahatan`, `jenis_kejahatan`, `alamat`, `tanggal`, `latitude`, `longitude`, `keterangan`) VALUES
(35, 'Pencurian ', 'Cilobak', '2019-10-23', '-6.667250522940856', '106.73358901025392', 'Sering Terjadi Pencurian jam 20:00'),
(36, 'Penculikan', 'Cilobak', '2019-10-23', '-6.619635962132641', '106.77659018518068', ' Sering terjadi penculikan jam 10:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Role` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `nama`, `username`, `password`, `Email`, `Role`) VALUES
(1, 'Rizaldi', 'admin', 'admin', '', ''),
(9, 'qq', 'qq', 'q', 'qq@gmail.com', ''),
(10, 'rizaldi', 'n', 'a', 'rizaldi.naldian@gmail.com', ''),
(11, 'c', 'c', 'c', 'c@gmail.com', ''),
(12, 'rizaldi', 'rizaldi', 'rizaldi', 'rizaldi@gmail.com', ''),
(13, 'rizaldi naldian putra', 'admin', 'a', 'rizaldi.naldian@gmail.com', ''),
(14, 'rizaldi naldian putra', 'admin', 'a', 'rizaldi.naldian@gmail.com', ''),
(15, 'rizaldi naldian putra', 'asdsdaasd', '123', 'rizaldi.naldian@gmail.comas', ''),
(16, 'angga', 'angga', '15031996', 'angga@gmail.com', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lokasi`
--

CREATE TABLE `tbl_lokasi` (
  `id_lokasi` int(13) NOT NULL,
  `Lattiude` varchar(50) NOT NULL,
  `Longlatiude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_kejahatan`
--
ALTER TABLE `tbl_kejahatan`
  ADD PRIMARY KEY (`id_kejahatan`);

--
-- Indeks untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_kejahatan`
--
ALTER TABLE `tbl_kejahatan`
  MODIFY `id_kejahatan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
