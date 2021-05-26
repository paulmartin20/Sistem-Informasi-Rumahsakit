-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Des 2020 pada 07.23
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `Jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `jadwal_kerja` varchar(255) NOT NULL,
  `id_rumah_sakit` int(11) DEFAULT NULL,
  `id_puskesmas` int(11) DEFAULT NULL,
  `id_posyandu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `Jenis_kelamin`, `spesialis`, `jadwal_kerja`, `id_rumah_sakit`, `id_puskesmas`, `id_posyandu`) VALUES
(1121, 'Dery Wahyudi', 'laki-laki', 'Jantung', 'senin-jumat\r\n07:00-19:00', 1101, NULL, NULL),
(122321, 'hg', 'laki-laki', 'hati', '--', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `latitude`, `longitude`) VALUES
(2, 'rumah sakit Dr. Agoesdjam', '-1.8321406987999256', '109.96745824813843'),
(4, 'jk', '-1.831008256208187', '109.96886470304109'),
(5, 'vv', '-1.8257969712501492', '109.95582941041026');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posyandu`
--

CREATE TABLE `posyandu` (
  `id_posyandu` int(11) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `nama_posyandu` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `fasilitas` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `posyandu`
--

INSERT INTO `posyandu` (`id_posyandu`, `foto`, `nama_posyandu`, `alamat`, `fasilitas`) VALUES
(0, '-', 'posyandu sukaharja', 'sukaharja', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id_puskesmas` int(11) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `nama_puskesmas` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `fasilitas` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `puskesmas`
--

INSERT INTO `puskesmas` (`id_puskesmas`, `gambar`, `nama_puskesmas`, `alamat`, `fasilitas`) VALUES
(190102, '--', 'puskesmas kedondong', 'Jl. H.  Murni no 27, Kel. Tengah, Kec. Delta Pawan, Kab. Ketapang, Kalbar 78812', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id_rumah_sakit` int(10) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `nama_rumah_sakit` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `fasilitas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id_rumah_sakit`, `foto`, `nama_rumah_sakit`, `alamat`, `fasilitas`) VALUES
(6106016, '-', 'RS Umum Daerah Dr. Agoesdjam Ketapang', 'Jl. Panjaitan No.51 Ketapang', 'Farmasi, Instalasi Gizi,  Instalasi Rawat Inap,  Instalasi Rawat Jalan,  Kantin,  Masjid,  Area Parkir,  Instalasi Laboratorium, Instalasi Radiologi, Ruang Tunggu, Unit Gawat Darurat (UGD),  Instalasi'),
(6106020, 'a.jpg', 'fatima', 'Jl. Jend. Sudirman No.27, Mulia Baru, Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78811', 'ugd, rawat jalan, rawat inap, icu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'gozali', 'goza@gmail.com', '4297f44b13955235245b2497399d7a93');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD UNIQUE KEY `id_playkes` (`id_rumah_sakit`),
  ADD UNIQUE KEY `id_puskesmas` (`id_puskesmas`,`id_posyandu`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `posyandu`
--
ALTER TABLE `posyandu`
  ADD PRIMARY KEY (`id_posyandu`);

--
-- Indeks untuk tabel `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id_puskesmas`);

--
-- Indeks untuk tabel `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`id_rumah_sakit`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
