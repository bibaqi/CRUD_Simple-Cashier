-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2023 pada 13.32
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minimarket_billybaihaqi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_billy`
--

CREATE TABLE `barang_billy` (
  `id_barang` int(12) NOT NULL,
  `namabarang` varchar(30) NOT NULL,
  `satuan` char(20) NOT NULL,
  `harga_satuan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_billy`
--

INSERT INTO `barang_billy` (`id_barang`, `namabarang`, `satuan`, `harga_satuan`) VALUES
(112, 'buku', '100', 1000),
(123, 'kertas', '1', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualan_billy`
--

CREATE TABLE `detail_penjualan_billy` (
  `id_penjualan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `kuantitas` smallint(6) NOT NULL,
  `harga_satuan` float NOT NULL,
  `sub_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_penjualan_billy`
--

INSERT INTO `detail_penjualan_billy` (`id_penjualan`, `id_barang`, `kuantitas`, `harga_satuan`, `sub_total`) VALUES
(1112, 123, 229, 100, 111111);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasir_billy`
--

CREATE TABLE `kasir_billy` (
  `id_kasir` int(12) NOT NULL,
  `username` char(10) NOT NULL,
  `password` char(23) NOT NULL,
  `namakasir` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomorhp` char(15) NOT NULL,
  `nomorktp` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kasir_billy`
--

INSERT INTO `kasir_billy` (`id_kasir`, `username`, `password`, `namakasir`, `alamat`, `nomorhp`, `nomorktp`) VALUES
(211, 'adminbilly', '', 'udinsedunia', 'tangerang', '0999', '082299457889'),
(1010, 'budi', '', 'Budi Maryadi', 'tangerang', '08126565343', '5674820808710003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shift_billy`
--

CREATE TABLE `shift_billy` (
  `id_shift` int(11) NOT NULL,
  `id_kasir` int(11) NOT NULL,
  `waktu_buka` datetime NOT NULL,
  `saldo_awal` double NOT NULL,
  `jumlah_penjualan` double NOT NULL,
  `saldo_akhir` double NOT NULL,
  `waktu_tutup` datetime NOT NULL,
  `status` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `shift_billy`
--

INSERT INTO `shift_billy` (`id_shift`, `id_kasir`, `waktu_buka`, `saldo_awal`, `jumlah_penjualan`, `saldo_akhir`, `waktu_tutup`, `status`) VALUES
(112, 1010, '2023-06-07 06:48:32', 10000, 0, 10000, '0000-00-00 00:00:00', 'BUKA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang_billy`
--
ALTER TABLE `barang_billy`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `detail_penjualan_billy`
--
ALTER TABLE `detail_penjualan_billy`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indeks untuk tabel `kasir_billy`
--
ALTER TABLE `kasir_billy`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indeks untuk tabel `shift_billy`
--
ALTER TABLE `shift_billy`
  ADD PRIMARY KEY (`id_shift`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
