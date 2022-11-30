-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2022 pada 03.08
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staditek2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `branch`
--

CREATE TABLE `branch` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `open_hour` time NOT NULL,
  `close_hour` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `branch`
--

INSERT INTO `branch` (`id`, `name`, `location`, `phone`, `open_hour`, `close_hour`, `created_at`, `updated_at`) VALUES
(1, 'Arcade 2', 'Pondok Aren', '12390032', '08:00:00', '21:00:00', '2022-11-28 05:43:31', '2022-11-28 05:43:31'),
(2, 'Arcade 1', 'Pondok Aren Selatan', '1234123554', '08:00:00', '21:00:00', '2022-11-28 05:44:19', '2022-11-28 05:44:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cashier`
--

CREATE TABLE `cashier` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('pria','wanita') NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cashier`
--

INSERT INTO `cashier` (`id`, `nik`, `name`, `gender`, `phone`, `email`, `password`) VALUES
(1, '327323123456', 'Didin Santoso', 'pria', '085724123456', 'didin@santoso.com', 'didin1'),
(2, '327323123457', 'Sigit Rendang', 'pria', '0857321456', 'Sigit@rendang.com', '12345'),
(3, '327323123458', 'Eko Lengkuas', 'pria', '086753134532', 'eko@lengkuas.com', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trx_detail`
--

CREATE TABLE `trx_detail` (
  `id` int(11) NOT NULL,
  `items_name` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `trx_detail`
--

INSERT INTO `trx_detail` (`id`, `items_name`, `amount`, `price`) VALUES
(1, 'Chitato', 1, 5000),
(2, 'Teh Pucuk', 1, 5000),
(3, 'Aqua', 1, 3000),
(4, 'Hexos', 1, 5000),
(5, 'Gorengan', 2, 5000),
(6, 'Teh manis', 1, 3000),
(7, 'Happy Tos', 2, 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `trx_header`
--

CREATE TABLE `trx_header` (
  `id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `cashier_id` int(11) NOT NULL,
  `transaction_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `discount` double DEFAULT NULL,
  `total_price` double NOT NULL,
  `total` double NOT NULL,
  `changed` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `trx_header`
--

INSERT INTO `trx_header` (`id`, `branch_id`, `cashier_id`, `transaction_at`, `discount`, `total_price`, `total`, `changed`, `created_at`) VALUES
(1, 1, 1, '2022-11-28 05:48:12', 0, 20000, 40000, 20000, '2022-11-28 05:47:53'),
(2, 2, 3, '2022-11-28 05:48:46', 0, 20000, 50000, 30000, '2022-11-28 05:48:46'),
(3, 1, 2, '2022-11-28 08:05:26', 0, 20000, 30000, 10000, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `trx_detail`
--
ALTER TABLE `trx_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `trx_header`
--
ALTER TABLE `trx_header`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cashier_id` (`cashier_id`),
  ADD KEY `fk_branch_id` (`branch_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `cashier`
--
ALTER TABLE `cashier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `trx_detail`
--
ALTER TABLE `trx_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `trx_header`
--
ALTER TABLE `trx_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
