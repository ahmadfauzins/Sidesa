-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2020 pada 15.53
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL DEFAULT 'default.jpg',
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `auth`
--

INSERT INTO `auth` (`id`, `email`, `name`, `password`, `img`, `role`) VALUES
(1, 'admin@karangsari.desa.id', 'Ryan', 'af3dbfe86368370bdf2ec7456944df627c8865f5', 'default.jpg', 2),
(3, 'superadmin@karangsari.desa.id', 'Fauzi', '441c9d45e54ac3321c25f0e346cef5396ae6088f', 'default.jpg', 1),
(4, 'jurnalis@karangsari.desa.id', 'Ibnu', 'ef5d5e12b7c277b6beb10df250c150cc1145c43c', 'default.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL,
  `judul_berita` text NOT NULL,
  `isi_berita` text NOT NULL,
  `pengirim` varchar(150) NOT NULL,
  `tanggal` datetime NOT NULL,
  `foto_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `nama_kategori`, `judul_berita`, `isi_berita`, `pengirim`, `tanggal`, `foto_berita`) VALUES
(1, 'hutan', 'Tersesat Seminggu di Hutan Kaltara, WN Australia Ditemukan Selamat', 'Malinau - Warga negara (WN) Australia ditemukan selamat setelah satu minggu tersesat di hutan Kabupaten Malinau, Provinsi Kalimantan Utara (Kaltara). Pria bernama Stephen Leonard dalam kondisi lemas ketika ditemukan.\r\n\r\nKomandan SSK I Pos Apauping Satagas Pamtas RI-Malaysia Yonif Raider 303/SSM Kostrad, Lettu Inf Suhendra, mengatakan, Stephen dan seorang warga bernama Mukhtar tersesat setelah ditinggalkan oleh pemadu wisata Desa Long Layu saat sedang berwisata di hutan kawasan Long Tua, Desa Apauping, Kecamatan Bahau Ulu, Kabupaten Malinau.\r\n\"Mereka seminggu tersesat. Keduanya ditinggalkan dengan dibekali logistik yang terbatas. Kondisinya sangat lemah,\" ujar Suhendra, Sabtu (4/1/2020).\r\nSuhendra menjelaskan, kabar adanya seorang wisatawan dan seorang pemandu wisata hilang di dalam hutan berawal dari informasi yang diterima dari warga. Pihaknya menurunkan delapan personel Satgas di bawah pimpinan Serda Satria Situmorang bersama warga lainnya langsung melakukan pencarian pada Kamis (2/1) lalu.\r\n\"Setelah informasi itu diterima anggota, lalu anggota bersama warga langsung melakukan pencarian. Anggota masuk ke dalam hutan dan menyisir sekitar Sungai Bahau,\" kata Suhendra.\r\n\r\nKeduanya ditemukan di hulu Sungai Bahau dalam kondisi drop. Keduanya langsung dievakuasi, serta diistirahatkan di kediaman Kepala Desa Apauping.\r\n\r\n\"Sudah dievakuasi dan sekarang menunggu petunjuk lebih lanjut dari Polres Malinau,\" ujar Suhendra. (dkp/dkp)', 'suhendra', '0000-00-00 00:00:00', 'tersesat.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `population`
--

CREATE TABLE `population` (
  `id_warga` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `ttl` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `blok` varchar(200) NOT NULL,
  `rt` int(11) NOT NULL,
  `desa` varchar(100) NOT NULL DEFAULT 'Karangsari',
  `kecamatan` varchar(100) NOT NULL DEFAULT 'Weru',
  `kabupaten` varchar(50) NOT NULL DEFAULT 'Cirebon',
  `agama` varchar(20) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `pekerjaan` varchar(250) NOT NULL,
  `kewarganegaraan` varchar(3) NOT NULL,
  `foto_warga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `population`
--

INSERT INTO `population` (`id_warga`, `nik`, `nama_lengkap`, `ttl`, `jenis_kelamin`, `blok`, `rt`, `desa`, `kecamatan`, `kabupaten`, `agama`, `status_perkawinan`, `pekerjaan`, `kewarganegaraan`, `foto_warga`) VALUES
(4, '62476194111', 'rafatar', '2019-05-17', '0', 'Megulu', 3, 'Karangsari', 'Weru', 'Cirebon', 'Islam', 'Belum Kawin', 'pns', 'WNI', 'IBNU_SOFFYAN_TSAURI.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `population`
--
ALTER TABLE `population`
  ADD PRIMARY KEY (`id_warga`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `population`
--
ALTER TABLE `population`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
