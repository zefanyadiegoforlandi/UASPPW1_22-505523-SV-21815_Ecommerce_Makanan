-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2023 pada 06.34
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deliver`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `meja`
--

CREATE TABLE `meja` (
  `id_MEJA` varchar(10) NOT NULL,
  `NOMOR_MEJA` varchar(10) DEFAULT NULL,
  `status_MEJA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `meja`
--

INSERT INTO `meja` (`id_MEJA`, `NOMOR_MEJA`, `status_MEJA`) VALUES
('', '', ''),
('1', 'Meja_11', 'Dipesan'),
('halo', 'test1', 'pesan'),
('id_meja_11', 'nomor_meja', 'kosong'),
('id_meja_12', 'nomor_meja', 'dipesan'),
('id_meja_13', 'nomor_meja', 'kosong'),
('id_meja_21', 'nomor_meja', 'kosong'),
('id_meja_22', 'nomor_meja', 'kosong'),
('id_meja_23', 'nomor_meja', 'kosong'),
('id_meja_31', 'nomor_meja', 'dipesan'),
('id_meja_32', 'nomor_meja', 'kosong'),
('id_meja_33', 'nomor_meja', 'kosong'),
('s', 's1', 'pesan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `restaurant`
--

CREATE TABLE `restaurant` (
  `id_restaurant` varchar(10) NOT NULL,
  `nama_rest` varchar(10) DEFAULT NULL,
  `alamat_rest` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id_MEJA`);

--
-- Indeks untuk tabel `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id_restaurant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
