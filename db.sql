-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 02 Apr 2023 pada 16.06
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bakumutu`
--

CREATE TABLE `bakumutu` (
  `id_bakumutu` int(50) NOT NULL,
  `bakumutu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bakumutu`
--

INSERT INTO `bakumutu` (`id_bakumutu`, `bakumutu`) VALUES
(1, 'bakumutu1'),
(2, 'bakumutu2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_hasiluji`
--

CREATE TABLE `data_hasiluji` (
  `id_hasiluji` int(25) NOT NULL,
  `id_order` varchar(5) NOT NULL,
  `no_permohonan` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `hasiluji` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_hasiluji`
--

INSERT INTO `data_hasiluji` (`id_hasiluji`, `id_order`, `no_permohonan`, `nama`, `hasiluji`, `status`) VALUES
(1, '1', '00001', 'nama', 'hasiluji', 'status');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_order`
--

CREATE TABLE `data_order` (
  `id_order` int(25) NOT NULL,
  `no_permohonan` varchar(5) NOT NULL,
  `id_perusahaan` varchar(10) NOT NULL,
  `id_bakumutu` varchar(15) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jenis_pengujian` varchar(50) NOT NULL,
  `jumlah_parameter` varchar(25) NOT NULL,
  `jadwal` varchar(5) NOT NULL,
  `id_pembayaran` varchar(5) NOT NULL,
  `status_pembayaran` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `tanggal_order` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_order`
--

INSERT INTO `data_order` (`id_order`, `no_permohonan`, `id_perusahaan`, `id_bakumutu`, `nama_perusahaan`, `kelas`, `jenis_pengujian`, `jumlah_parameter`, `jadwal`, `id_pembayaran`, `status_pembayaran`, `status`, `tanggal_order`) VALUES
(1, '00001', '1', '1', 'nama perusahaan1', '', 'cair', '2', '1', '1', 'Belum Bayar', 'Order', 'tanggal order'),
(2, '00002', '1', '1', 'satu', '', 'cair', '2', '1', '2', 'Menunggu Konfirmasi', 'Order', 'tanggal order1'),
(3, '00003', '1', '1', 'PT. Bumi Merapi Energi', '', 'cair', '4', '', '', '', 'Order', ''),
(4, '00004', '1', '1', 'PT. Bintang Cemerlang Sentosa ', '', 'cair', '4', '', '', '', 'Order', ''),
(5, '00005', '1', '1', 'PT. Bintang Cemerlang Sentosa ', '', 'cair', '4', '', '', '', 'Order', ''),
(6, '00006', '1', '1', 'PT. Muara Alam Sejahtera', '', 'cair', '8', '', '', '', 'Order', ''),
(7, '00007', '1', '1', 'PT. Pembangkit Jawa Bali Servie', '', 'cair', '4', '', '', '', 'Order', ''),
(8, '00008', '1', '1', 'PT. Pembangkit Jawa Bali Servie', '1', 'air', '15', '', '', '', 'Order', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_order_parameter`
--

CREATE TABLE `data_order_parameter` (
  `id_data_order_parameter` int(11) NOT NULL,
  `id_parameter` varchar(10) NOT NULL,
  `id_order` varchar(10) NOT NULL,
  `id_metode` varchar(10) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `digunakan` varchar(255) NOT NULL,
  `sisa` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `hasil` varchar(255) NOT NULL,
  `4d` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_order_parameter`
--

INSERT INTO `data_order_parameter` (`id_data_order_parameter`, `id_parameter`, `id_order`, `id_metode`, `jumlah`, `digunakan`, `sisa`, `tanggal`, `hasil`, `4d`, `result`, `keterangan`) VALUES
(1, '1', '2', '1', '2', 'digunakan22', 'digunakan22', '2023-01-09', 'hasil2', '142', 'hasil12', 'Verifikasi'),
(2, '2', '2', '2', '3', 'digunakan1', 'digunakan2', '2023-01-08', 'hasil2', 'hasil2', 'hasil2', 'Dikembalikan'),
(3, '1', '3', '1', '8', '', '', '', '', '', '', ''),
(4, '2', '3', '1', '8', '', '', '', '', '', '', ''),
(5, '2', '3', '1', '7', '', '', '', '', '', '', ''),
(6, '2', '3', '1', '7', '', '', '', '', '', '', ''),
(7, '1', '4', '1', '4', '', '', '', '', '', '', ''),
(8, '2', '4', '1', '4', '', '', '', '', '', '', ''),
(9, '1', '4', '1', '4', '', '', '', '', '', '', ''),
(10, '2', '4', '1', '4', '', '', '', '', '', '', ''),
(11, '1', '5', '1', '4', '', '', '', '', '', '', ''),
(12, '2', '5', '1', '4', '', '', '', '', '', '', ''),
(13, '1', '5', '1', '4', '', '', '', '', '', '', ''),
(14, '2', '5', '1', '4', '', '', '', '', '', '', ''),
(15, '1', '6', '1', '10', '', '', '', '', '', '', ''),
(16, '1', '6', '1', '6', '', '', '', '', '', '', ''),
(17, '2', '6', '1', '10', '', '', '', '', '', '', ''),
(18, '2', '6', '1', '6', '', '', '', '', '', '', ''),
(19, '1', '6', '1', '10', '', '', '', '', '', '', ''),
(20, '1', '6', '1', '6', '', '', '', '', '', '', ''),
(21, '2', '6', '1', '10', '', '', '', '', '', '', ''),
(22, '2', '6', '1', '6', '', '', '', '', '', '', ''),
(23, '2', '7', '1', '4', '', '', '', '', '', '', ''),
(24, '1', '7', '1', '4', '', '', '', '', '', '', ''),
(25, '1', '7', '1', '4', '', '', '', '', '', '', ''),
(26, '1', '7', '1', '4', '', '', '', '', '', '', ''),
(27, '1', '8', '1', '1', '', '', '', '', '', '', ''),
(28, '1', '8', '1', '1', '', '', '', '', '', '', ''),
(29, '1', '8', '1', '1', '', '', '', '', '', '', ''),
(30, '1', '8', '1', '1', '', '', '', '', '', '', ''),
(31, '1', '8', '1', '1', '', '', '', '', '', '', ''),
(32, '1', '8', '1', '1', '', '', '', '', '', '', ''),
(33, '1', '8', '1', '1', '', '', '', '', '', '', ''),
(34, '1', '8', '1', '1', '', '', '', '', '', '', ''),
(35, '1', '8', '1', '1', '', '', '', '', '', '', ''),
(36, '1', '8', '1', '1', '', '', '', '', '', '', ''),
(37, '1', '8', '1', '1', '', '', '', '', '', '', ''),
(38, '1', '8', '1', '1', '', '', '', '', '', '', ''),
(39, '1', '8', '1', '1', '', '', '', '', '', '', ''),
(40, '1', '8', '1', '1', '', '', '', '', '', '', ''),
(41, '1', '8', '1', '1', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `mulai` varchar(255) NOT NULL,
  `selesai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `kegiatan`, `mulai`, `selesai`) VALUES
(1, 'test', '2023-01-11', '2023-01-11'),
(3, 'tets', '2023-01-12', '2023-01-12'),
(5, '00001', '2023-01-14', '2023-01-14'),
(6, '00002', '2023-01-13', '2023-01-13'),
(7, '00001', '2023-04-13', '2023-04-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(25) NOT NULL,
  `no_permohonan` varchar(25) NOT NULL,
  `tanggal_diterima` varchar(25) NOT NULL,
  `tanggal_selesai` varchar(25) NOT NULL,
  `volume` varchar(50) NOT NULL,
  `wadah` varchar(50) NOT NULL,
  `pengawetan` varchar(50) NOT NULL,
  `pengambilan` varchar(50) NOT NULL,
  `abnormalitas` varchar(50) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `segel` varchar(50) NOT NULL,
  `kondisi_fisik` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `no_permohonan`, `tanggal_diterima`, `tanggal_selesai`, `volume`, `wadah`, `pengawetan`, `pengambilan`, `abnormalitas`, `kondisi`, `segel`, `kondisi_fisik`, `status`) VALUES
(1, 'no', 'no', 'no', 'no', 'no', 'pengawetan', 'pengambilan', 'abnormalitas', 'kondisi', 'segel', 'kondisi', 'status'),
(2, '00002', '14-01-2023', '28-01-2023', 'volume', 'Botol Gelas', 'Tanpa Pengawetan', 'pengambilan', 'abnormal', 'Rusak', 'Ada', 'Keruh', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode`
--

CREATE TABLE `metode` (
  `id_metode` int(25) NOT NULL,
  `metode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `metode`
--

INSERT INTO `metode` (`id_metode`, `metode`) VALUES
(1, 'metode1'),
(2, 'metode2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `misc`
--

CREATE TABLE `misc` (
  `id_misc` int(10) NOT NULL,
  `kondisi` varchar(25) NOT NULL,
  `atribute` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `misc`
--

INSERT INTO `misc` (`id_misc`, `kondisi`, `atribute`) VALUES
(1, 'pengawetan', 'Pengawetan'),
(2, 'pengawetan', 'Tanpa Pengawetan'),
(3, 'kondisi', 'Utuh'),
(4, 'kondisi', 'Rusak'),
(5, 'kondisi', 'Bocor'),
(6, 'segel', 'Ada'),
(7, 'segel', 'Tidak'),
(8, 'segel', 'Rusak'),
(9, 'kondisi_fisik', 'Keruh'),
(10, 'kondisi_fisik', 'Agak Keruh'),
(11, 'kondisi_fisik', 'Coklat'),
(12, 'kondisi_fisik', 'Hitam'),
(13, 'kondisi_fisik', 'Hijau'),
(14, 'wadah', 'Botol Gelas'),
(15, 'wadah', 'Plastik'),
(16, 'role', 'Admin'),
(17, 'role', 'Penyelia'),
(18, 'role', 'Petugas'),
(19, 'role', 'Koordinator'),
(20, 'role', 'Kepala Lab'),
(21, 'ket_lppc', 'Verifikasi'),
(22, 'ket_lppc', 'Dikembalikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `parameter`
--

CREATE TABLE `parameter` (
  `id_parameter` int(11) NOT NULL,
  `parameter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `parameter`
--

INSERT INTO `parameter` (`id_parameter`, `parameter`) VALUES
(1, 'parameter1'),
(2, 'parameter2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(25) NOT NULL,
  `no_permohonan` varchar(50) NOT NULL,
  `totalpembayaran` varchar(50) NOT NULL,
  `bankpenerima` varchar(25) NOT NULL,
  `rekeningpenerima` varchar(25) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `buktipembayaran` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `no_permohonan`, `totalpembayaran`, `bankpenerima`, `rekeningpenerima`, `tanggal`, `buktipembayaran`) VALUES
(1, '1', '1', '', '', '', ''),
(2, '00002', '100000', 'bank', 'ban', '2023-01-13', 'Undangan_Rapat_TL_Investi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(25) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `alamat_perusahaan` varchar(50) NOT NULL,
  `jenis_usaha` varchar(50) NOT NULL,
  `no_telepon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `id_user`, `nama_pelanggan`, `alamat`, `nama_perusahaan`, `alamat_perusahaan`, `jenis_usaha`, `no_telepon`) VALUES
(1, 3, 'Tanto Alkadafi', 'Kec. Merapi Timur', 'PT. Pembangkit Jawa Bali Servie', 'Kec. Merapi Timur', 'Pembangkit Listrik', '-'),
(3, 0, 'nama12', 'alamat12', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(25) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Petugas'),
(3, 'Perusahaan'),
(4, 'Penyelia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(25) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `role` varchar(255) NOT NULL,
  `blokir` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama`, `role`, `blokir`, `id_session`) VALUES
(1, 'a@gmail.com', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'Admin', 'Admin', 'N', 'q173s8hs1jl04st35169ccl8o7'),
(7, 'd@gmail.com', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'Penyelia', 'Penyelia', 'N', '3cb8d7de3ee9f208a9ab7ca4dd1beb4d-20230106223952'),
(3, 'c@gmail.com', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'Perusahaan', 'Perusahaan', 'N', 'q173s8hs1jl04st35169ccl8o1'),
(6, 'b@gmail.com', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'Petugas', 'Petugas', 'N', '3cb8d7de3ee9f208a9ab7ca4dd1beb4d-20230106223952'),
(8, 'e@gmail.com', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'Koordinator', 'Koordinator', 'N', '3cb8d7de3ee9f208a9ab7ca4dd1beb4d-20230106223952'),
(9, 'f@gmail.com', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', 'Koordinator', 'Kepala Lab', 'N', '3cb8d7de3ee9f208a9ab7ca4dd1beb4d-20230106223952');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bakumutu`
--
ALTER TABLE `bakumutu`
  ADD PRIMARY KEY (`id_bakumutu`);

--
-- Indeks untuk tabel `data_hasiluji`
--
ALTER TABLE `data_hasiluji`
  ADD PRIMARY KEY (`id_hasiluji`);

--
-- Indeks untuk tabel `data_order`
--
ALTER TABLE `data_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `data_order_parameter`
--
ALTER TABLE `data_order_parameter`
  ADD PRIMARY KEY (`id_data_order_parameter`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `metode`
--
ALTER TABLE `metode`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indeks untuk tabel `misc`
--
ALTER TABLE `misc`
  ADD PRIMARY KEY (`id_misc`);

--
-- Indeks untuk tabel `parameter`
--
ALTER TABLE `parameter`
  ADD PRIMARY KEY (`id_parameter`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bakumutu`
--
ALTER TABLE `bakumutu`
  MODIFY `id_bakumutu` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_hasiluji`
--
ALTER TABLE `data_hasiluji`
  MODIFY `id_hasiluji` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_order`
--
ALTER TABLE `data_order`
  MODIFY `id_order` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `data_order_parameter`
--
ALTER TABLE `data_order_parameter`
  MODIFY `id_data_order_parameter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `metode`
--
ALTER TABLE `metode`
  MODIFY `id_metode` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `misc`
--
ALTER TABLE `misc`
  MODIFY `id_misc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `parameter`
--
ALTER TABLE `parameter`
  MODIFY `id_parameter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
