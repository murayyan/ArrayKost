-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2018 pada 15.49
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kost`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `nama_admin`, `password`) VALUES
(1, 'admin@gmail.com', 'ogen', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrasi`
--

CREATE TABLE `administrasi` (
  `id_administrasi` int(10) NOT NULL,
  `id_member` int(10) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `administrasi`
--

INSERT INTO `administrasi` (`id_administrasi`, `id_member`, `tgl_pembayaran`, `jatuh_tempo`, `status`) VALUES
(1, 1, '2018-05-23', '2018-05-31', 'Lunas'),
(2, 2, '2018-05-25', '2018-05-31', 'Lunas'),
(3, 2, '2018-06-14', '0000-00-00', 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `kota_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_kamar` int(100) NOT NULL,
  `tgl_gabung` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `email`, `nama_member`, `password`, `nik`, `no_hp`, `foto`, `kota_lahir`, `tgl_lahir`, `pekerjaan`, `alamat`, `no_kamar`, `tgl_gabung`, `status`) VALUES
(1, 'member@gmail.com', 'Array', '123', '123456789', '08123456789', '', 'jakarta', '1992-01-10', 'Mahasiswi', 'jl.ikan no 24 malang', 1, '2018-01-01', 'aktif'),
(2, 'member2@gmail.com', 'Ogen', '321', '123949401', '08129389239', '', 'Malang', '1997-02-10', 'Mahasiswa', 'Jl. Anila', 2, '2017-12-01', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_datang` date NOT NULL,
  `tgl_pengambilan` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama`, `tgl_datang`, `tgl_pengambilan`, `status`) VALUES
(1, 'deni', '2018-05-09', '0000-00-00', 'Belum Diambil'),
(2, 'deki', '2018-05-08', '2018-05-10', 'Sudah Diambil');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`,`email`);

--
-- Indeks untuk tabel `administrasi`
--
ALTER TABLE `administrasi`
  ADD PRIMARY KEY (`id_administrasi`),
  ADD KEY `id_member` (`id_member`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`,`email`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `administrasi`
--
ALTER TABLE `administrasi`
  MODIFY `id_administrasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `administrasi`
--
ALTER TABLE `administrasi`
  ADD CONSTRAINT `administrasi_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
