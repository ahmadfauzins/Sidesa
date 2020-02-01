-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2020 pada 02.57
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
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'default.png',
  `body` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `user_id`, `title`, `slug`, `type`, `image`, `body`, `status`, `is_approved`, `date`) VALUES
(12, 22, 'Lorem Ipsum', 'lorem-ipsum', 'Pendidikan', 'download.jpg', '<div style=\"margin: 0px 14.4px 0px 28.8px; padding: 0px; width: 436.8px; float: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-weight: 400; line-height: 24px; font-family: DauphinPlain; font-size: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div style=\"margin: 0px 28.8px 0px 14.4px; padding: 0px; width: 436.8px; float: right; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-weight: 400; line-height: 24px; font-family: DauphinPlain; font-size: 24px;\">Why do we use it?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><p><br style=\"margin: 0px; padding: 0px; clear: both; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: center;\"></p><div style=\"margin: 0px 14.4px 0px 28.8px; padding: 0px; width: 436.8px; float: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-weight: 400; line-height: 24px; font-family: DauphinPlain; font-size: 24px;\">Where does it come from?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div><div style=\"margin: 0px 28.8px 0px 14.4px; padding: 0px; width: 436.8px; float: right; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-weight: 400; line-height: 24px; font-family: DauphinPlain; font-size: 24px;\">Where can I get some?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p></div>', 1, 1, '2020-01-30 13:32:07'),
(13, 20, 'Tugas Grow Model Saya', 'tugas-grow-model-saya', 'Ekonomi', '20180630_1420401.jpg', '<p></p><p>STMIK IKMI CIrebon</p>', 1, 1, '2020-01-29 01:59:47'),
(15, 20, 'Tugas Grow Model Saya Juga', 'tugas-grow-model-saya-juga', 'Pendidikan', '1.png', '<p>Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks Ini Teks&nbsp;<br></p>', 1, 1, '2020-01-30 13:32:11'),
(16, 20, 'Tugas Grow Model Saya Juga Iya SIh', 'tugas-grow-model-saya-juga-iya-sih', 'Eknonomi', 'Data_Real_Pemilu_BEM_2020.png', '<p>&nbsp; &nbsp; Ini TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni Teks</p>', 0, 0, '2020-01-30 12:38:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL DEFAULT 'default.png',
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `auth`
--

INSERT INTO `auth` (`id`, `email`, `name`, `password`, `img`, `role`) VALUES
(18, 'superadmin@karangsari.desa.id', 'Fauzi', '441c9d45e54ac3321c25f0e346cef5396ae6088f', 'default.png', 1),
(19, 'admin@karangsari.desa.id', 'Ryan', 'af3dbfe86368370bdf2ec7456944df627c8865f5', 'download7.png', 2),
(20, 'jurnalis@karangsari.desa.id', 'Ibnu Soffyan', 'ef5d5e12b7c277b6beb10df250c150cc1145c43c', 'download1.png', 3),
(22, 'didin@gmail.com', 'Didin', '1d28cc17f60d3f92e02a83eeef330e4165859d04', 'download2.png', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuangan`
--

CREATE TABLE `keuangan` (
  `id` int(11) NOT NULL,
  `jenis_keuangan` char(1) NOT NULL,
  `type` varchar(100) NOT NULL,
  `jumlah` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `id` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekomendasi`
--

INSERT INTO `rekomendasi` (`id`, `id_warga`, `keterangan`) VALUES
(2, 11, 'Coba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt`
--

CREATE TABLE `rt` (
  `id` int(11) NOT NULL,
  `role` int(1) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL DEFAULT 'default.png',
  `level` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rt`
--

INSERT INTO `rt` (`id`, `role`, `name`, `email`, `password`, `img`, `level`) VALUES
(6, 4, 'Pak RT 01', 'pakrt01@karangsari.desa.id', 'd4c196931d637518ffe407a98d4b5ff10d6f79be', 'Koala1.jpg', '01'),
(7, 4, 'Pak RT 02', 'pakrt02@karangsari.desa.id', '1479e380c3cb4bf8df539d0d254d2209d678a2e9', 'Lighthouse.jpg', '02'),
(8, 4, 'Pak RT 03', 'pakrt03@karangsari.desa.id', 'dbd531c02a07bdd1d1e827d4106fc1d35296f9fb', 'Jellyfish.jpg', '03'),
(9, 4, 'Pak RT 04', 'pakrt04@karangsari.desa.id', '07ada34528c0d06d6b09fdc5f4f73199719a4db7', 'Koala.jpg', '04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id`, `judul`, `deskripsi`, `foto`) VALUES
(1, 'Desa Karangsari ', 'Desa Karangsari Kecamatan Weru Kabupaten Cirebon', 'banner.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suara_warga`
--

CREATE TABLE `suara_warga` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suara_warga`
--

INSERT INTO `suara_warga` (`id`, `user_id`, `title`, `slug`, `image`, `body`, `date`) VALUES
(5, 3, 'Lorem Ipsum Ganti', 'lorem-ipsum-ganti', 'download.jpg', '<p>hdjfshfkjhksgsdg ganti</p>', '2020-01-26 08:05:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id`, `user_id`, `type`, `message`, `date`) VALUES
(3, 3, 'Surat Keterangan Harga Tanah', '<p>Mohon Dibuatkan pak prosesnya</p>', '2020-01-26 17:15:40'),
(4, 12, 'Surat Keterangan Usaha', '<p>Ini TeksIni TeksIni TeksIni TeksIni TeksIni TeksIni Teks<br></p>', '2020-01-31 01:50:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role` int(1) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `role`, `id_warga`, `nik`, `password`, `foto`) VALUES
(3, 5, 11, '3210171604980021', 'df77b837b21302aa136fcc53dd7d4392d72b8bf5', 'download.png'),
(4, 5, 12, '321017160', '9ec5672a6813a655e77fd61f2266b4c34a28ea01', 'default.png'),
(10, 5, 18, '897996', '808ba88b366c6f889722d46ec2e209d1594ee7d6', 'default.png'),
(11, 5, 18, '3329151203980005', '914533f8a8361deb607e69c733647513a4625ec7', 'default.png'),
(12, 5, 11, '33291512039800053', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` char(1) NOT NULL,
  `blok` varchar(200) NOT NULL,
  `rt` varchar(2) NOT NULL,
  `rw` varchar(2) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `pekerjaan` varchar(250) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id`, `nik`, `name`, `tempat_lahir`, `tgl_lahir`, `jk`, `blok`, `rt`, `rw`, `agama`, `status_perkawinan`, `pekerjaan`, `img`) VALUES
(11, '3210171604980021', 'Ryan Aprianto', 'Majalengka', '2020-01-08', 'L', 'Blok Selasa', '01', '09', 'Islam', 'Belum Kawin', 'Freelancer', 'Penguins1.jpg'),
(12, '321017160', 'Fauzi', 'Majalengka', '2020-01-03', 'L', 'Selasa', '02', '09', 'Islam', 'Belum Kawin', 'UI UX Designer', 'Lighthouse.jpg'),
(18, '897996', 'Ibnu Soffyan', 'Majalengka', '2020-01-11', 'L', 'Blok Selasa', '01', '09', 'Islam', 'Belum Kawin', 'Freelancer', 'Penguins.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indeks untuk tabel `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suara_warga`
--
ALTER TABLE `suara_warga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_warga` (`id_warga`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `rekomendasi`
--
ALTER TABLE `rekomendasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rt`
--
ALTER TABLE `rt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `suara_warga`
--
ALTER TABLE `suara_warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `auth` (`id`);

--
-- Ketidakleluasaan untuk tabel `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD CONSTRAINT `rekomendasi_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `suara_warga`
--
ALTER TABLE `suara_warga`
  ADD CONSTRAINT `suara_warga_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
