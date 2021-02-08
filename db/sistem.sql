-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2020 pada 16.31
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`) VALUES
(1, 'Mesin'),
(2, 'Elektro'),
(3, 'Industri'),
(4, 'Sipil'),
(5, 'Arsitektur'),
(6, 'Perencanaan Wilayah dan Kota'),
(7, 'Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id_registrasi` int(20) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `nim_mhs` int(20) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL DEFAULT 'Informatika',
  `judul_pkl` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL,
  `monitoring` varchar(255) NOT NULL,
  `nama_dosbim` varchar(255) NOT NULL,
  `tanggal_registrasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_registrasi` varchar(255) NOT NULL,
  `alasan_batal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id_registrasi`, `nama_mhs`, `nim_mhs`, `nama_prodi`, `judul_pkl`, `tahun`, `bukti_bayar`, `monitoring`, `nama_dosbim`, `tanggal_registrasi`, `status_registrasi`, `alasan_batal`) VALUES
(1, 'Defalia Widamutia', 16130104, 'Informatika', 'uji coba sistem', 'Genap / 2018-2019', 'bukti1.jpg', 'monitoring.jpg', 'contoh', '2019-05-21 15:23:49', 'Dibatalkan', 'Bukti bayar tidak sesuai'),
(2, 'Arie Widodo', 1470231174, 'Informatika', '', 'Ganjil / 2018-2019', 'bukti_pembayaran.jpg', 'monitoring_ak.png', 'M.Syarif Hartawan,SKom,MKom', '2019-05-21 15:23:50', 'Telah disetujui oleh Dekan. Surat dapat dicetak', ''),
(3, 'Bisyar Akhmad', 1570231110, 'Informatika', '', 'Ganjil / 2018-2019', 'bukti_pembayaran.jpg', 'monitoring_ak.png', '', '2019-05-21 15:23:51', 'Telah disetujui oleh keuangan', ''),
(4, 'Tri Wahyu Novianto', 1570231033, 'Informatika', '', 'Ganjil / 2018-2019', 'bukti_pembayaran.jpg', 'monitoring_ak.png', 'Junaidi,MKom', '2019-05-21 15:23:52', 'Telah disetujui oleh Dekan. Surat dapat dicetak', ''),
(5, 'Farida Yanthi', 1470231066, 'Informatika', '', 'Ganjil / 2018-2019', 'bukti_pembayaran.jpg', 'monitoring_ak.png', 'Ali Khumaidi, MKom', '2019-05-21 15:23:52', 'Telah disetujui oleh Dekan. Surat dapat dicetak', ''),
(6, 'Mochammad Hisyam', 1570231076, 'Informatika', '', 'Ganjil / 2018-2019', 'bukti_pembayaran.jpg', 'monitoring_ak.png', '', '2019-05-21 15:23:53', 'Telah disetujui oleh keuangan', ''),
(7, 'M Alfi Fahreza', 1470231064, 'Informatika', '', 'Ganjil / 2018-2019', 'bukti_pembayaran.jpg', 'monitoring_ak.png', '', '2019-05-21 15:23:54', 'Dibatalkan', 'suka bolos'),
(8, 'Michael Robert P', 1770235003, 'Informatika', '', 'Ganjil / 2018-2019', 'bukti_pembayaran.jpg', 'monitoring_ak.png', 'M.Syarif Hartawan,SKom,MKom', '2019-05-21 16:04:45', 'Telah disetujui oleh Dekan. Surat dapat dicetak', ''),
(9, 'Rizky Budi Saputra', 1570231052, 'Informatika', '', 'Ganjil / 2018-2019', 'bukti_pembayaran.jpg', 'monitoring_ak.png', '', '2019-05-21 15:23:55', 'Telah disetujui oleh keuangan', ''),
(10, 'M Nur Septian', 1570231036, 'Informatika', '', 'Ganjil / 2018-2019', 'bukti_pembayaran.jpg', 'monitoring_ak.png', '', '2019-05-24 03:41:15', 'Dibatalkan', 'suka bolos'),
(11, 'Defalia Widamutia', 16130106, 'Informatika', 'Uji Coba Sistem', 'Ganjil / 2018-2019', 'bukti_pembayaran.jpg', 'monitoring_ak.png', '', '2019-05-21 15:23:56', 'Dibatalkan', 'Bukti bayar tidak sesuai'),
(12, 'Defalia Widamutia', 123, 'Informatika', 'test', 'Genap/2018-2019', 'bukti_pembayaran.jpg', 'monitoring.jpg', '', '2019-05-21 16:06:03', 'Telah disetujui oleh Dekan. Surat dapat dicetak', ''),
(13, 'Defalia Widamutia', 1234567890, 'Informatika', 'tes', 'Ganjil/2018-2019', '1234567890_buktibayar.png', '1234567890_buktibayar1.png', '', '2019-05-21 15:23:57', 'Dibatalkan', ''),
(14, 'Defalia Widamutia', 1234543212, 'Informatika', 'testing', 'Genap/2018-2019', '1234543212_buktibayar.png', '1234543212_buktibayar1.png', '', '2019-05-21 15:23:58', 'Dibatalkan', ''),
(15, 'Defalia Widamutia', 1470231176, 'Informatika', 'testing', 'Ganjil/2018-2019', '1470231176_.png', '1470231176_1.png', '', '2019-05-22 16:41:45', 'Dibatalkan', 'suka bolos'),
(16, 'Defalia Widamutia', 1234543212, 'Informatika', 'uji coba sistem', 'Genap/2018-2019', 'perpanjangan.jpg', '1234543212_.png', '', '2019-05-21 15:30:29', 'Dibatalkan', 'asas sdsd'),
(17, 'Defalia Widamutia', 1234543213, 'Informatika', 'testing', 'Ganjil/2018-2019', '1234543213_.png', '1234543213_1.png', '', '2019-05-22 15:46:35', 'Telah disetujui oleh Dekan. Surat dapat dicetak', ''),
(18, 'Defalia Widamutia', 1234543215, 'Informatika', 'uji coba sistem', 'Genap/2018-2019', '1234543215_.png', '1234543215_1.png', '', '2019-05-22 16:53:02', 'Telah disetujui oleh Dekan. Surat dapat dicetak', ''),
(19, 'Defalia Widamutia', 1316130097, 'Informatika', 'SIKATA', 'Genap/2018-2019', '1316130097_.png', '1316130097_1.png', '', '2019-05-22 16:38:30', 'Telah disetujui oleh Kaprodi', ''),
(20, 'Defalia', 2147483647, 'Industri', 'Haloooo', 'Ganjil/2018-2019', '10316130104_.png', '10316130104_1.png', '', '2019-05-22 16:27:45', 'Dibatalkan', 'suka bolos'),
(21, 'Andi Hanif', 2147483647, 'Informatika', 'Pengembangan Sistem Pengelolaan Administrasi Bengkel', 'Genap/2018-2019', '10316130110_.jpg', '10316130110_.png', '', '2019-05-24 03:39:32', 'Dibatalkan', 'suka bolos'),
(22, 'Budi Prasetyo', 2147483647, 'Informatika', 'Pembuatan Jaringan Rumah Sakit Islam', 'Genap/2018-2019', '10316130111_.jpg', '10316130111_.png', '', '2019-05-23 08:03:19', '', ''),
(23, 'Candra Darendra', 2147483647, 'Informatika', 'Pengembangan Sistem Peminjaman Mobil', 'Genap/2018-2019', '10316130112_.jpg', '10316130112_.png', '', '2019-05-23 08:04:19', '', ''),
(24, 'Davin Putra Firmansyah', 2147483647, 'Informatika', 'Pengembangan Aplikasi Mobile Keuangan', 'Ganjil/2018-2019', '10316130113_.jpg', '10316130113_.png', '', '2019-05-23 08:07:58', '', ''),
(25, 'Eka Gusti Pratiwi', 2147483647, 'Informatika', 'Pembuatan Website SDN 05 Jakarta', 'Ganjil/2018-2019', '10316130114_.jpg', '10316130114_.png', '', '2019-05-23 08:09:41', '', ''),
(26, 'Fajar Fakhri Utomo', 2147483647, 'Informatika', 'Pembuatan Website Rumah Sakit', 'Ganjil/2018-2019', '10316140116_.jpg', '10316140116_.png', '', '2019-05-23 08:12:14', '', ''),
(27, 'Rizaldi Arif F', 2147483647, 'Mesin', 'Pembuatan Kerangka Mesin Uap', 'Genap/2018-2019', '10316140085_.jpg', '10316140085_.png', '', '2019-05-24 02:32:32', '', ''),
(28, 'Mayang', 2147483647, 'Informatika', 'Pengembangan Sistem Pengelolaan Administrasi Bengkel', 'Genap/2018-2019', '10316130105_.jpg', '10316130105_.png', '', '2019-05-24 03:42:10', 'Telah disetujui oleh Dekan. Surat dapat dicetak', ''),
(29, 'Rizaldi Arif', 2147483647, 'Elektro', 'Reengineering', 'Ganjil/2018-2019', '24010316130_.jpg', '24010316130_1.jpg', '', '2020-03-01 11:37:22', 'Telah disetujui oleh Dekan. Surat dapat dicetak', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi_ta`
--

CREATE TABLE `registrasi_ta` (
  `id_registrasi` int(11) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `nim_mhs` int(20) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL DEFAULT 'Informatika',
  `judul_ta` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL,
  `monitoring` varchar(255) NOT NULL,
  `nama_dosbim1` varchar(255) NOT NULL,
  `nama_dosbim2` varchar(255) NOT NULL,
  `tanggal_registrasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_registrasi` varchar(255) NOT NULL,
  `alasan_batal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `registrasi_ta`
--

INSERT INTO `registrasi_ta` (`id_registrasi`, `nama_mhs`, `nim_mhs`, `nama_prodi`, `judul_ta`, `tahun`, `bukti_bayar`, `monitoring`, `nama_dosbim1`, `nama_dosbim2`, `tanggal_registrasi`, `status_registrasi`, `alasan_batal`) VALUES
(1, 'Defalia', 16130114, 'Informatika', 'testing', 'Ganjil / 2018-2019', 'bukti1.jpg', 'monitoring.jpg', 'Ali Khumaidi,MKom', 'M.Syarif Hartawan,SKom,MKom', '2019-05-22 15:46:41', 'Telah disetujui oleh Dekan. Surat dapat dicetak', ''),
(2, 'Nabil Ramadhana', 1370231037, 'Informatika', 'Perancangan Sistem Informasi Kemahasiswaan dan Aplikasi E-Voting Bagi Lembaga Kemahasiswaan Berbasis Web Pada Fakultas Teknik Unkris', 'Ganjil / 2018-2019', 'bukti_pembayaran.jpg', 'monitoring_ak.png', 'Ali Khumaidi,MKom', 'M.Syarif Hartawan,SKom,MKom', '2019-05-21 15:24:13', 'Telah disetujui oleh Dekan. Surat dapat dicetak', ''),
(3, 'Defalia Widamutia', 16130108, 'Informatika', 'test uji coba', 'Ganjil / 2018-2019', 'bukti_pembayaran.jpg', 'monitoring_ak.png', 'Ali Khumaidi, MKom - Lektor', 'Dr.Herwanto, SKom, MSi - Lektor', '2019-05-22 16:53:10', 'Telah disetujui oleh Dekan. Surat dapat dicetak', ''),
(4, 'Rizaldi Arif F', 2147483647, 'Informatika', 'Haloooo', 'Ganjil / 2018-2019', '10316130108_2.png', '10316130108_3.png', 'M.Syarif Hartawan, SKom, MKom - Asisten Ahli', 'Moch. Fachri, ST, MT', '2020-03-01 12:01:22', 'Telah disetujui oleh Dekan. Surat dapat dicetak', ''),
(5, 'Ghani Karya Utama', 2147483647, 'Informatika', 'Sistem Administrasi Kantor Berbasis Web dan mobile', 'Genap / 2018-2019', '10316140075_.jpg', '10316140075_.png', 'Harjono P Putro,ST, MKom', '', '2019-05-23 08:13:39', '', ''),
(6, 'Hanifah Pusparini', 2147483647, 'Informatika', 'Sistem Inventory Pabrik Baju', 'Genap / 2018-2019', '10316140076_.jpg', '10316140076_.png', 'Nuke L Chusna, S.Si., M.Kom', '', '2019-05-23 08:14:43', '', ''),
(7, 'Ilham Putra Widiatama', 2147483647, 'Informatika', 'Sistem Informasi Akademik Universitas Jakarta', 'Ganjil / 2018-2019', '10316140077_.jpg', '10316140077_.png', 'Ir. Junaidi, M.Kom', '', '2019-05-23 08:20:31', '', ''),
(8, 'Lathifah Ulwiyah', 2147483647, 'Informatika', 'Sistem Pendeteksi Kanker Kulit', 'Genap / 2018-2019', '10316140079_.jpg', '10316140079_.png', 'Wargijono Utomo, S.Kom., M.Kom', '', '2019-05-23 08:23:20', '', ''),
(9, 'Annisa Fitriani Calista', 2147483647, 'Informatika', 'Sistem Informasi Administrasi Rumah Sakit', 'Ganjil / 2018-2019', '10316140080_.jpg', '10316140080_.png', 'M.Syarif Hartawan, SKom, MKom', '', '2019-05-23 08:24:56', '', ''),
(10, 'Nadyanti Larasati', 2147483647, 'Informatika', 'Pengelolaan Jaringan Dengan Model Infrastruktur Sederhana Berbasis Web', 'Ganjil / 2018-2019', '10316140081_.jpg', '10316140081_.png', 'Harjono P Putro,ST, MKom', '', '2019-05-23 08:26:23', '', ''),
(11, 'Rudi Tabuti', 2147483647, 'Mesin', 'Pembuatan Infrastruktur ', 'Genap / 2018-2019', '10316140087_.jpg', '10316140087_.png', 'Ir. Muchayar, MT', '', '2019-05-24 02:34:42', '', ''),
(12, 'Akmal', 2147483647, 'Informatika', 'Pengembangan Sistem Pengelolaan Administrasi Bengkel', 'Ganjil / 2018-2019', '03161301056_.jpg', '03161301056_.png', 'Ali Khumaidi, MKom - Lektor', 'Wargijono Utomo, S.Kom., M.Kom - Asisten Ahli', '2019-05-24 03:42:20', 'Telah disetujui oleh Dekan. Surat dapat dicetak', ''),
(13, 'Ajeng Mifta', 214748364, 'Arsitektur', 'Perancangan Permukiman', 'Ganjil / 2018-2019', '23456543212_.jpg', '23456543212_1.jpg', 'Dr. Ir. Ayub Muktiono, M.SiP - Lektor Kepala', 'Widiyanti, ST, MDP - Lektor', '2020-03-01 11:59:19', 'Telah disetujui oleh Dekan. Surat dapat dicetak', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE `user_admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`username`, `password`, `id_admin`) VALUES
('admin', 'admin12321', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_dekanat`
--

CREATE TABLE `user_dekanat` (
  `id_dekanat` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_dekanat`
--

INSERT INTO `user_dekanat` (`id_dekanat`, `username`, `password`) VALUES
(1, 'dekanat', 'dekanat'),
(2, 'dekanat2', 'dekanat2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_kaprodi`
--

CREATE TABLE `user_kaprodi` (
  `id_kaprodi` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_prodi` varchar(255) NOT NULL,
  `nama_kaprodi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_kaprodi`
--

INSERT INTO `user_kaprodi` (`id_kaprodi`, `username`, `password`, `nama_prodi`, `nama_kaprodi`) VALUES
(1, 'kaprodi', 'kaprodi', 'Informatika', 'Hehe'),
(2, 'kapmesin', 'kapmesin', 'Mesin', ''),
(3, 'kapelektro', 'elektro123', 'Elektro', ''),
(4, 'kaparsitek', 'arsitektur123', 'Arsitektur', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_keuangan`
--

CREATE TABLE `user_keuangan` (
  `id_keuangan` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_keuangan`
--

INSERT INTO `user_keuangan` (`id_keuangan`, `username`, `password`) VALUES
(1, 'keuangan1', 'keuangan21'),
(2, 'keuangan2', 'keuangan12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id_registrasi`);

--
-- Indeks untuk tabel `registrasi_ta`
--
ALTER TABLE `registrasi_ta`
  ADD PRIMARY KEY (`id_registrasi`);

--
-- Indeks untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `user_dekanat`
--
ALTER TABLE `user_dekanat`
  ADD PRIMARY KEY (`id_dekanat`);

--
-- Indeks untuk tabel `user_kaprodi`
--
ALTER TABLE `user_kaprodi`
  ADD PRIMARY KEY (`id_kaprodi`);

--
-- Indeks untuk tabel `user_keuangan`
--
ALTER TABLE `user_keuangan`
  ADD PRIMARY KEY (`id_keuangan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id_registrasi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `registrasi_ta`
--
ALTER TABLE `registrasi_ta`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_dekanat`
--
ALTER TABLE `user_dekanat`
  MODIFY `id_dekanat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_kaprodi`
--
ALTER TABLE `user_kaprodi`
  MODIFY `id_kaprodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_keuangan`
--
ALTER TABLE `user_keuangan`
  MODIFY `id_keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
