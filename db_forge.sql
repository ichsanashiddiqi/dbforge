-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2021 pada 05.28
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_forge`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(5) UNSIGNED NOT NULL,
  `blog_author` varchar(100) NOT NULL DEFAULT '',
  `blog_description` text DEFAULT NULL,
  `kar_01` text DEFAULT NULL,
  `kar_02` text DEFAULT NULL,
  `kar_03` text DEFAULT NULL,
  `kar_04` text DEFAULT NULL,
  `kar_05` text DEFAULT NULL,
  `kar_06` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `blog_author`, `blog_description`, `kar_01`, `kar_02`, `kar_03`, `kar_04`, `kar_05`, `kar_06`) VALUES
(1, '', NULL, '1', '12', '13', '14', NULL, ''),
(2, '', NULL, 'kar_05', 'kar_06', 'kar_07', NULL, NULL, ''),
(4, '', NULL, '2', '1', '1', NULL, NULL, ''),
(5, '', NULL, '2', '1', '2', '2', NULL, ''),
(6, '', NULL, NULL, NULL, NULL, NULL, '2', ''),
(7, '', NULL, NULL, NULL, NULL, NULL, '1', ''),
(8, '', NULL, NULL, NULL, NULL, NULL, 'kar_05', ''),
(9, '', NULL, NULL, NULL, NULL, NULL, 'kar_05', ''),
(10, '', NULL, NULL, NULL, NULL, NULL, 'kar_05', ''),
(11, '', NULL, '2', '1', '2', '2', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kar`
--

CREATE TABLE `tbl_kar` (
  `id` int(11) NOT NULL,
  `kar` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kar`
--

INSERT INTO `tbl_kar` (`id`, `kar`, `status`) VALUES
(1, 'kar_05', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tes`
--

CREATE TABLE `tbl_tes` (
  `id` int(11) NOT NULL,
  `karakter` varchar(100) NOT NULL,
  `tanaman` varchar(100) NOT NULL,
  `kondisi` int(11) NOT NULL,
  `option_1` varchar(100) NOT NULL,
  `option_2` varchar(100) NOT NULL,
  `option_3` varchar(100) NOT NULL,
  `option_4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tes`
--

INSERT INTO `tbl_tes` (`id`, `karakter`, `tanaman`, `kondisi`, `option_1`, `option_2`, `option_3`, `option_4`) VALUES
(1, 'kar_01', 'abaka', 1, 'bau', 'panjang', 'lebar', 'berat'),
(2, 'kar_02', '', 0, '', '', '', ''),
(3, 'kar_03', '', 0, 'besar', 'kecil', 'heaven', ''),
(4, 'kar_04', '', 0, 'option', 'option', '', ''),
(5, 'kar_05', '', 0, 'dada', 'dadu', '', ''),
(9, 'kar_06', '', 0, 'sambal', 'goreng', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indeks untuk tabel `tbl_kar`
--
ALTER TABLE `tbl_kar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_tes`
--
ALTER TABLE `tbl_tes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_kar`
--
ALTER TABLE `tbl_kar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_tes`
--
ALTER TABLE `tbl_tes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
