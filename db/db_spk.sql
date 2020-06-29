-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2020 pada 04.56
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `kriteria` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL COMMENT 'cost /  benefit',
  `bobot` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `kriteria`, `keterangan`, `tipe`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'C1', 'Kualitas Kerja', 'benefit', 1, '2019-06-22 01:37:54', '2019-06-22 01:37:54'),
(2, 'C2', 'Kuantitas Kerja', 'benefit', 0.2, '2019-06-22 01:37:54', '2019-06-22 01:37:54'),
(3, 'C3', 'Inisiatif Kerja', 'benefit', 0.8, '2019-06-22 01:37:54', '2019-06-22 01:37:54'),
(4, 'C4', 'Disiplin Kerja', 'benefit', 0.8, '2019-06-22 01:37:54', '2019-06-22 01:37:54'),
(5, 'C5', 'Tanggung Jawab pada Pekerjaan', 'benefit', 0.75, '2019-06-22 01:37:54', '2019-06-22 01:37:54'),
(6, 'C6', 'Motivasi Kerja', 'benefit', 0.7, '2019-06-22 01:37:54', '2019-06-22 01:37:54'),
(7, 'C7', 'Kerjasama dalam Bekerja', 'benefit', 0.45, '2019-06-22 01:37:54', '2019-06-22 01:37:54'),
(8, 'C8', 'Pemahaman terhadap Tugas', 'benefit', 0.3, '2019-06-22 01:37:54', '2019-06-22 01:37:54'),
(9, 'C9', 'Penyesuaian Diri dalam Lingkungan', 'benefit', 0.15, '2019-06-22 01:37:54', '2019-06-22 01:37:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `c1` float NOT NULL,
  `c2` float NOT NULL,
  `c3` float NOT NULL,
  `c4` float NOT NULL,
  `c5` float NOT NULL,
  `c6` float NOT NULL,
  `c7` float NOT NULL,
  `c8` float NOT NULL,
  `c9` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`, `created_at`, `updated_at`) VALUES
(1, 'Thoriq Nurchaidir', 9, 7, 7, 7, 6, 6, 7, 7, 7, '2020-06-19 07:18:02', '2020-06-19 02:18:02'),
(2, 'Shinta Fadhilasari', 8, 7, 7, 6, 6, 6, 7, 7, 7, '2020-06-19 07:18:16', '2020-06-19 02:18:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
