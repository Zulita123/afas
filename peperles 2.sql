-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Feb 2020 pada 10.47
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peperles`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `password`, `alamat`, `level`) VALUES
(1, 'admin', 'YWRtaW4=', 'Wikrama', 'Admin'),
(24, 'ilham', 'b2dha3JldGk=', 'Bumiharjo', 'Guru'),
(25, 'joko', 'MTIz', 'Joko', 'Guru'),
(26, 'Aqshol Rifansa', 'MQ==', 'a', 'Tamu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `id_mapel` int(15) NOT NULL,
  `id_soal` int(15) NOT NULL,
  `kunci` varchar(6) NOT NULL,
  `jawaban` varchar(6) NOT NULL,
  `poin` varchar(10) NOT NULL,
  `id_jenis` int(15) NOT NULL,
  `sts_listening` varchar(20) NOT NULL,
  `nomor` int(15) NOT NULL,
  `sts_jwb` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `nis`, `id_mapel`, `id_soal`, `kunci`, `jawaban`, `poin`, `id_jenis`, `sts_listening`, `nomor`, `sts_jwb`) VALUES
(1, '1', 1, 21, 'D', '', '', 1, 'No', 1, ''),
(2, '1', 1, 51, 'D', '', '', 1, 'No', 2, ''),
(3, '1', 1, 20, 'C', '', '', 1, 'No', 3, ''),
(4, '1', 1, 24, 'B', '', '', 1, 'No', 4, ''),
(5, '1', 1, 48, 'C', '', '', 1, 'No', 5, ''),
(6, '1', 1, 36, 'C', '', '', 1, 'No', 6, ''),
(7, '1', 1, 26, 'A', '', '', 1, 'No', 7, ''),
(8, '1', 1, 42, 'C', '', '', 1, 'No', 8, ''),
(9, '1', 1, 40, 'A', '', '', 1, 'No', 9, ''),
(10, '1', 1, 39, 'A', '', '', 1, 'No', 10, ''),
(11, '1', 1, 45, 'D', '', '', 1, 'No', 11, ''),
(12, '1', 1, 2, 'D', '', '', 1, 'No', 12, ''),
(13, '1', 1, 37, 'D', '', '', 1, 'No', 13, ''),
(14, '1', 1, 41, 'D', '', '', 1, 'No', 14, ''),
(15, '1', 1, 33, 'B', '', '', 1, 'No', 15, ''),
(16, '1', 1, 13, 'B', '', '', 1, 'No', 16, ''),
(17, '1', 1, 53, 'A', '', '', 1, 'No', 17, ''),
(18, '1', 1, 32, 'B', '', '', 1, 'No', 18, ''),
(19, '1', 1, 27, 'B', '', '', 1, 'No', 19, ''),
(20, '1', 1, 43, 'D', '', '', 1, 'No', 20, ''),
(21, '1', 1, 23, 'A', '', '', 1, 'No', 21, ''),
(22, '1', 1, 1, 'A', '', '', 1, 'No', 22, ''),
(23, '1', 1, 5, 'A', '', '', 1, 'No', 23, ''),
(24, '1', 1, 17, 'A', '', '', 1, 'No', 24, ''),
(25, '1', 1, 34, 'C', '', '', 1, 'No', 25, ''),
(26, '1', 1, 30, 'C', '', '', 1, 'No', 26, ''),
(27, '1', 1, 44, 'A', '', '', 1, 'No', 27, ''),
(28, '1', 1, 25, 'A', '', '', 1, 'No', 28, ''),
(29, '1', 1, 28, 'B', '', '', 1, 'No', 29, ''),
(30, '1', 1, 11, 'C', '', '', 1, 'No', 30, ''),
(31, '1', 1, 4, 'C', '', '', 1, 'No', 31, ''),
(32, '1', 1, 9, 'A', '', '', 1, 'No', 32, ''),
(33, '1', 1, 10, 'D', '', '', 1, 'No', 33, ''),
(34, '1', 1, 47, 'B', '', '', 1, 'No', 34, ''),
(35, '1', 1, 7, 'B', '', '', 1, 'No', 35, ''),
(36, '1', 1, 52, 'D', '', '', 1, 'No', 36, ''),
(37, '1', 1, 3, 'B', '', '', 1, 'No', 37, ''),
(38, '1', 1, 35, 'A', '', '', 1, 'No', 38, ''),
(39, '1', 1, 29, 'C', '', '', 1, 'No', 39, ''),
(40, '1', 1, 50, 'C', '', '', 1, 'No', 40, ''),
(41, '1', 1, 49, 'A', '', '', 1, 'No', 41, ''),
(42, '1', 1, 31, 'D', '', '', 1, 'No', 42, ''),
(43, '1', 1, 46, 'B', '', '', 1, 'No', 43, ''),
(44, '1', 1, 19, 'D', '', '', 1, 'No', 44, ''),
(45, '1', 1, 6, 'A', '', '', 1, 'No', 45, ''),
(46, '1', 1, 8, 'C', '', '', 1, 'No', 46, ''),
(47, '1', 1, 16, 'B', '', '', 1, 'No', 47, ''),
(48, '1', 1, 38, 'B', '', '', 1, 'No', 48, ''),
(49, '1', 1, 12, 'B', '', '', 1, 'No', 49, ''),
(50, '1', 1, 18, 'C', '', '', 1, 'No', 50, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_ujian`
--

CREATE TABLE `jenis_ujian` (
  `id_jenis` int(11) NOT NULL,
  `jenis_ujian` varchar(30) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `jam` varchar(6) NOT NULL,
  `menit` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_ujian`
--

INSERT INTO `jenis_ujian` (`id_jenis`, `jenis_ujian`, `tgl_awal`, `tgl_akhir`, `jam`, `menit`) VALUES
(1, 'Try Out', '2020-02-20', '2020-02-20', '2', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `jumlah_soal` varchar(6) NOT NULL,
  `kkm1` int(6) NOT NULL,
  `kkm2` int(6) NOT NULL,
  `kkm3` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `mapel`, `jumlah_soal`, `kkm1`, `kkm2`, `kkm3`) VALUES
(1, 'Bahasa Indonesia', '50', 70, 70, 70),
(2, 'Matematika', '40', 70, 70, 70),
(3, 'Bahasa Inggris', '50', 70, 70, 70),
(4, 'IPA', '40', 70, 70, 70);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel_guru`
--

CREATE TABLE `mapel_guru` (
  `id_mpg` int(11) NOT NULL,
  `id_guru` int(15) NOT NULL,
  `id_mapel` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel_guru`
--

INSERT INTO `mapel_guru` (`id_mpg`, `id_guru`, `id_mapel`) VALUES
(50, 24, 1),
(51, 24, 2),
(56, 25, 1),
(57, 25, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `tgl_kerja` date NOT NULL,
  `nilai` varchar(10) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `id_mapel` int(15) NOT NULL,
  `id_jenis` int(15) NOT NULL,
  `kkm` int(10) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `tgl_kerja`, `nilai`, `nis`, `id_mapel`, `id_jenis`, `kkm`, `status`) VALUES
(1, '2019-08-25', '24', '11400357', 1, 1, 70, 'Belum Kompeten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sesi`
--

CREATE TABLE `sesi` (
  `id_sesi` int(11) NOT NULL,
  `sesi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sesi`
--

INSERT INTO `sesi` (`id_sesi`, `sesi`) VALUES
(1, 'LAB1'),
(3, 'LAB2'),
(5, 'LAB3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jk` varchar(40) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `id_uk` int(15) NOT NULL,
  `id_sesi` int(11) NOT NULL,
  `ses` varchar(15) NOT NULL,
  `status` varchar(6) NOT NULL,
  `absen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `password`, `jk`, `kelas`, `id_uk`, `id_sesi`, `ses`, `status`, `absen`) VALUES
('1', 'xxx', 'xxx', 'L', 'IX', 12, 1, '1', 'off', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `kunci` varchar(10) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `id_mapel` int(15) NOT NULL,
  `id_jenis` int(15) NOT NULL,
  `listening` text NOT NULL,
  `id_thj` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_soal`, `soal`, `kunci`, `kelas`, `id_mapel`, `id_jenis`, `listening`, `id_thj`) VALUES
(1, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/gambar_soal_1_sd_3.jpg\" style=\"height:196px; width:642px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/1_A.jpg\" style=\"height:93px; width:504px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(2, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/gambar_soal_1_sd_3.jpg\" style=\"height:196px; width:642px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/2_D.jpg\" style=\"height:94px; width:582px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(3, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/gambar_soal_1_sd_3.jpg\" style=\"height:196px; width:642px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/3_b.jpg\" style=\"height:97px; width:316px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(4, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/4_c.jpg\" style=\"height:219px; width:631px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(5, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/5_a.jpg\" style=\"height:266px; width:632px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(6, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/6_a.jpg\" style=\"height:238px; width:627px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(7, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/7_b.jpg\" style=\"height:271px; width:629px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(8, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/8_c.jpg\" style=\"height:236px; width:628px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(9, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/9_sd_11.jpg\" style=\"height:187px; width:641px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/9_a.jpg\" style=\"height:96px; width:386px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(10, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/9_sd_11.jpg\" style=\"height:187px; width:641px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/10_d.jpg\" style=\"height:96px; width:387px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(11, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/9_sd_11.jpg\" style=\"height:187px; width:641px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/11_c.jpg\" style=\"height:104px; width:435px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(12, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/12_b.jpg\" style=\"height:227px; width:663px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(13, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/13_b.jpg\" style=\"height:238px; width:625px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(16, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/14_b.jpg\" style=\"height:337px; width:631px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(17, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/15_a.jpg\" style=\"height:274px; width:624px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(18, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/16_c.jpg\" style=\"height:343px; width:621px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(19, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/17_d.jpg\" style=\"height:187px; width:633px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(20, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/18_c.jpg\" style=\"height:235px; width:630px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(21, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/19_d.jpg\" style=\"height:328px; width:623px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(23, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/20_sd_22.jpg\" style=\"height:325px; width:646px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/20_a.jpg\" style=\"height:101px; width:297px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(24, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/20_sd_22.jpg\" style=\"height:325px; width:646px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/21_b.jpg\" style=\"height:98px; width:353px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(25, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/20_sd_22.jpg\" style=\"height:325px; width:646px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/22_a.jpg\" style=\"height:94px; width:420px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(26, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/23_sd_24.jpg\" style=\"height:233px; width:645px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/23_a.jpg\" style=\"height:93px; width:571px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(27, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/23_sd_24.jpg\" style=\"height:233px; width:645px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/24_b.jpg\" style=\"height:94px; width:513px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(28, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/25_b.jpg\" style=\"height:272px; width:628px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(29, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/26_sd_28.jpg\" style=\"height:293px; width:645px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/26_c.jpg\" style=\"height:104px; width:419px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(30, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/26_sd_28.jpg\" style=\"height:293px; width:645px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/27_c.jpg\" style=\"height:135px; width:597px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(31, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/26_sd_28.jpg\" style=\"height:293px; width:645px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/28_d.jpg\" style=\"height:95px; width:349px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(32, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/29_sd_31.jpg\" style=\"height:339px; width:643px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/29_b.jpg\" style=\"height:102px; width:561px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(33, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/29_sd_31.jpg\" style=\"height:339px; width:643px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/30_b.jpg\" style=\"height:107px; width:506px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(34, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/29_sd_31.jpg\" style=\"height:339px; width:643px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/31_c.jpg\" style=\"height:105px; width:496px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'C', 'IX', 1, 1, '', 2),
(35, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/32_sd_33.jpg\" style=\"height:247px; width:640px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/32_a.jpg\" style=\"height:125px; width:399px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(36, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/32_sd_33.jpg\" style=\"height:247px; width:640px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/33_c.jpg\" style=\"height:124px; width:492px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'C', 'IX', 1, 1, '', 2),
(37, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/34_d.jpg\" style=\"height:219px; width:635px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(38, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/35_b.jpg\" style=\"height:237px; width:642px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(39, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/36_a.jpg\" style=\"height:255px; width:629px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(40, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/37_a.jpg\" style=\"height:216px; width:622px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(41, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/38_d.jpg\" style=\"height:254px; width:624px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(42, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/39_c.jpg\" style=\"height:237px; width:623px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(43, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/40_d.jpg\" style=\"height:186px; width:616px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(44, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/41_a.jpg\" style=\"height:179px; width:620px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(45, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/42_d.jpg\" style=\"height:191px; width:631px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(46, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/43_b.jpg\" style=\"height:181px; width:624px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(47, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/44_b.jpg\" style=\"height:291px; width:642px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(48, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/45_c.jpg\" style=\"height:160px; width:515px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(49, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/46_a.jpg\" style=\"height:166px; width:552px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(50, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/47_c.jpg\" style=\"height:226px; width:631px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(51, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/48_d.jpg\" style=\"height:180px; width:618px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(52, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/49_d.jpg\" style=\"height:235px; width:629px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(53, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/50_a.jpg\" style=\"height:184px; width:565px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(54, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/1_b.png\" style=\"height:117px; width:510px\" /></p>\r\n', 'B', 'IX', 2, 1, '', 2),
(55, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/2_b.png\" style=\"height:163px; width:920px\" /></p>\r\n', 'B', 'IX', 2, 1, '', 2),
(56, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/3_d.png\" style=\"height:302px; width:929px\" /></p>\r\n', 'D', 'IX', 2, 1, '', 2),
(58, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/4_c.png\" style=\"height:162px; width:917px\" /></p>\r\n', 'C', 'IX', 2, 1, '', 2),
(59, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/5_c.png\" style=\"height:460px; width:724px\" /></p>\r\n', 'C', 'IX', 2, 1, '', 2),
(60, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/6_b.png\" style=\"height:195px; width:942px\" /></p>\r\n', 'B', 'IX', 2, 1, '', 2),
(61, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/7_a.png\" style=\"height:175px; width:575px\" /></p>\r\n', 'A', 'IX', 2, 1, '', 2),
(62, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/8_d.png\" style=\"height:169px; width:513px\" /></p>\r\n', 'D', 'IX', 2, 1, '', 2),
(63, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/9_c.png\" style=\"height:245px; width:935px\" /></p>\r\n', 'C', 'IX', 2, 1, '', 2),
(64, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/10_d.png\" style=\"height:116px; width:891px\" /></p>\r\n', 'D', 'IX', 2, 1, '', 2),
(65, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/11_c.png\" style=\"height:197px; width:904px\" /></p>\r\n', 'C', 'IX', 2, 1, '', 2),
(66, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/12_c.png\" style=\"height:197px; width:902px\" /></p>\r\n', 'C', 'IX', 2, 1, '', 2),
(67, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/13_c.png\" style=\"height:193px; width:906px\" /></p>\r\n', 'C', 'IX', 2, 1, '', 2),
(68, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/14_a.png\" style=\"height:115px; width:591px\" /></p>\r\n', 'A', 'IX', 2, 1, '', 2),
(69, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/15_c.png\" style=\"height:114px; width:635px\" /></p>\r\n', 'C', 'IX', 2, 1, '', 2),
(70, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/16_b.png\" style=\"height:148px; width:871px\" /></p>\r\n', 'B', 'IX', 2, 1, '', 2),
(71, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/17_D.png\" style=\"height:153px; width:836px\" /></p>\r\n', 'D', 'IX', 2, 1, '', 2),
(72, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/18_b.png\" style=\"height:190px; width:895px\" /></p>\r\n', 'B', 'IX', 2, 1, '', 2),
(73, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/19_d.png\" style=\"height:210px; width:773px\" /></p>\r\n', 'D', 'IX', 2, 1, '', 2),
(74, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/20_c.png\" style=\"height:120px; width:856px\" /></p>\r\n', 'C', 'IX', 2, 1, '', 2),
(75, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/21_a.png\" style=\"height:306px; width:581px\" /></p>\r\n', 'A', 'IX', 2, 1, '', 2),
(76, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/22_d.png\" style=\"height:115px; width:914px\" /></p>\r\n', 'D', 'IX', 2, 1, '', 2),
(78, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/23_b.png\" style=\"height:231px; width:922px\" /></p>\r\n', 'B', 'IX', 2, 1, '', 2),
(79, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/24_a.png\" style=\"height:228px; width:703px\" /></p>\r\n', 'A', 'IX', 2, 1, '', 2),
(80, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/25_b.png\" style=\"height:192px; width:898px\" /></p>\r\n', 'B', 'IX', 2, 1, '', 2),
(81, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/26_b.png\" style=\"height:398px; width:865px\" /></p>\r\n', 'B', 'IX', 2, 1, '', 2),
(82, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/27_a.png\" style=\"height:203px; width:889px\" /></p>\r\n', 'A', 'IX', 2, 1, '', 2),
(83, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/28_b.png\" style=\"height:428px; width:637px\" /></p>\r\n', 'B', 'IX', 2, 1, '', 2),
(84, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/29_a.png\" style=\"height:307px; width:844px\" /></p>\r\n', 'A', 'IX', 2, 1, '', 2),
(85, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/30_d.png\" style=\"height:117px; width:538px\" /></p>\r\n', 'D', 'IX', 2, 1, '', 2),
(86, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/31_c.png\" style=\"height:353px; width:873px\" /></p>\r\n', 'C', 'IX', 2, 1, '', 2),
(87, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/32_c.png\" style=\"height:194px; width:891px\" /></p>\r\n', 'C', 'IX', 2, 1, '', 2),
(88, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/33_b.png\" style=\"height:186px; width:914px\" /></p>\r\n', 'B', 'IX', 2, 1, '', 2),
(89, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/34_a.png\" style=\"height:377px; width:899px\" /></p>\r\n', 'A', 'IX', 2, 1, '', 2),
(90, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/35_d.png\" style=\"height:434px; width:598px\" /></p>\r\n', 'D', 'IX', 2, 1, '', 2),
(91, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/36_a.png\" style=\"height:202px; width:875px\" /></p>\r\n', 'A', 'IX', 2, 1, '', 2),
(92, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/37_c.png\" style=\"height:237px; width:454px\" /></p>\r\n', 'C', 'IX', 2, 1, '', 2),
(93, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/38_d.png\" style=\"height:193px; width:885px\" /></p>\r\n', 'D', 'IX', 2, 1, '', 2),
(94, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/39_c.png\" style=\"height:368px; width:778px\" /></p>\r\n', 'C', 'IX', 2, 1, '', 2),
(95, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/matematika A/40_b.png\" style=\"height:246px; width:932px\" /></p>\r\n', 'B', 'IX', 2, 1, '', 2),
(96, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/1_B.png\" style=\"height:150px; width:566px\" /></p>\r\n', 'B', 'IX', 4, 1, '', 2),
(97, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/2_D.png\" style=\"height:113px; width:584px\" /></p>\r\n', 'D', 'IX', 4, 1, '', 2),
(98, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/3_A.png\" style=\"height:156px; width:572px\" /></p>\r\n', 'A', 'IX', 4, 1, '', 2),
(99, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/4_C.png\" style=\"height:350px; width:587px\" /></p>\r\n', 'C', 'IX', 4, 1, '', 2),
(100, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/5_D.png\" style=\"height:121px; width:594px\" /></p>\r\n', 'D', 'IX', 4, 1, '', 2),
(101, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/6_A.png\" style=\"height:139px; width:596px\" /></p>\r\n', 'A', 'IX', 4, 1, '', 2),
(102, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/7_A.png\" style=\"height:330px; width:581px\" /></p>\r\n', 'A', 'IX', 4, 1, '', 2),
(103, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/8_B.png\" style=\"height:281px; width:593px\" /></p>\r\n', 'B', 'IX', 4, 1, '', 2),
(104, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/9_D.png\" style=\"height:131px; width:579px\" /></p>\r\n', 'D', 'IX', 4, 1, '', 2),
(105, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/10_A.png\" style=\"height:150px; width:591px\" /></p>\r\n', 'A', 'IX', 4, 1, '', 2),
(106, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/11_D.png\" style=\"height:156px; width:594px\" /></p>\r\n', 'D', 'IX', 4, 1, '', 2),
(107, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/12_C.png\" style=\"height:159px; width:596px\" /></p>\r\n', 'C', 'IX', 4, 1, '', 2),
(108, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/13_B.png\" style=\"height:295px; width:602px\" /></p>\r\n', 'B', 'IX', 4, 1, '', 2),
(109, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/14_B.png\" style=\"height:132px; width:597px\" /></p>\r\n', 'B', 'IX', 4, 1, '', 2),
(110, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/15_C.png\" style=\"height:201px; width:541px\" /></p>\r\n', 'C', 'IX', 4, 1, '', 2),
(111, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/16_D.png\" style=\"height:295px; width:605px\" /></p>\r\n', 'D', 'IX', 4, 1, '', 2),
(112, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/17_A.png\" style=\"height:115px; width:610px\" /></p>\r\n', 'A', 'IX', 4, 1, '', 2),
(113, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/18_D.png\" style=\"height:281px; width:558px\" /></p>\r\n', 'D', 'IX', 4, 1, '', 2),
(114, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/19_D.png\" style=\"height:187px; width:553px\" /></p>\r\n', 'D', 'IX', 4, 1, '', 2),
(115, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/20_A.png\" style=\"height:203px; width:582px\" /></p>\r\n', 'A', 'IX', 4, 1, '', 2),
(116, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/21_C.png\" style=\"height:149px; width:602px\" /></p>\r\n', 'C', 'IX', 4, 1, '', 2),
(117, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/22_B.png\" style=\"height:208px; width:565px\" /></p>\r\n', 'B', 'IX', 4, 1, '', 2),
(118, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/23_B.png\" style=\"height:149px; width:609px\" /></p>\r\n', 'B', 'IX', 4, 1, '', 2),
(119, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/24_A.png\" style=\"height:130px; width:606px\" /></p>\r\n', 'A', 'IX', 4, 1, '', 2),
(120, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/25_A.png\" style=\"height:302px; width:606px\" /></p>\r\n', 'A', 'IX', 4, 1, '', 2),
(121, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/26_A.png\" style=\"height:127px; width:605px\" /></p>\r\n', 'A', 'IX', 4, 1, '', 2),
(122, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/27_B.png\" style=\"height:423px; width:611px\" /></p>\r\n', 'B', 'IX', 4, 1, '', 2),
(123, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/28_C.png\" style=\"height:137px; width:612px\" /></p>\r\n', 'C', 'IX', 4, 1, '', 2),
(124, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/29_A.png\" style=\"height:315px; width:580px\" /></p>\r\n', 'A', 'IX', 4, 1, '', 2),
(125, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/30_B.png\" style=\"height:474px; width:524px\" /></p>\r\n', 'B', 'IX', 4, 1, '', 2),
(126, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/31_A.png\" style=\"height:346px; width:560px\" /></p>\r\n', 'A', 'IX', 4, 1, '', 2),
(127, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/32_D.png\" style=\"height:360px; width:533px\" /></p>\r\n', 'D', 'IX', 4, 1, '', 2),
(129, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/33_C.png\" style=\"height:335px; width:511px\" /></p>\r\n', 'C', 'IX', 4, 1, '', 2),
(130, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/34_D.png\" style=\"height:246px; width:558px\" /></p>\r\n', 'D', 'IX', 4, 1, '', 2),
(131, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/36_B.png\" style=\"height:301px; width:552px\" /></p>\r\n', 'B', 'IX', 4, 1, '', 2),
(132, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/37_A.png\" style=\"height:396px; width:619px\" /></p>\r\n', 'A', 'IX', 4, 1, '', 2),
(133, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/38_C.png\" style=\"height:347px; width:602px\" /></p>\r\n', 'C', 'IX', 4, 1, '', 2),
(134, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/39_C.png\" style=\"height:190px; width:601px\" /></p>\r\n', 'C', 'IX', 4, 1, '', 2),
(135, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/40_B.png\" style=\"height:117px; width:597px\" /></p>\r\n', 'B', 'IX', 4, 1, '', 2),
(136, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/IPA A/35_C.png\" style=\"height:115px; width:603px\" /></p>\r\n', 'C', 'IX', 4, 1, '', 2),
(137, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/1_sd_2.jpg\" style=\"height:208px; width:747px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/1_c.jpg\" style=\"height:141px; width:500px\" /></p>\r\n', 'C', 'IX', 3, 1, '', 2),
(138, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/1_sd_2.jpg\" style=\"height:208px; width:747px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/2_d.jpg\" style=\"height:147px; width:479px\" /></p>\r\n', 'D', 'IX', 3, 1, '', 2),
(139, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/3_sd_5.jpg\" style=\"height:307px; width:759px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/3_d.jpg\" style=\"height:149px; width:568px\" /></p>\r\n', 'D', 'IX', 3, 1, '', 2),
(140, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/3_sd_5.jpg\" style=\"height:307px; width:759px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/4_d.jpg\" style=\"height:155px; width:388px\" /></p>\r\n', 'D', 'IX', 3, 1, '', 2),
(141, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/3_sd_5.jpg\" style=\"height:307px; width:759px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/5_a.jpg\" style=\"height:150px; width:585px\" /></p>\r\n', 'A', 'IX', 3, 1, '', 2),
(142, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/6_sd_8.jpg\" style=\"height:254px; width:720px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/6_b.jpg\" style=\"height:135px; width:308px\" /></p>\r\n', 'B', 'IX', 3, 1, '', 2),
(143, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/6_sd_8.jpg\" style=\"height:254px; width:720px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/7_a.jpg\" style=\"height:138px; width:533px\" /></p>\r\n', 'A', 'IX', 3, 1, '', 2),
(144, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/6_sd_8.jpg\" style=\"height:254px; width:720px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/8_c.jpg\" style=\"height:147px; width:578px\" /></p>\r\n', 'C', 'IX', 3, 1, '', 2),
(145, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/9_sd_11.jpg\" style=\"height:204px; width:591px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/9_a.jpg\" style=\"height:130px; width:343px\" /></p>\r\n', 'A', 'IX', 3, 1, '', 2),
(146, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/9_sd_11.jpg\" style=\"height:204px; width:591px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/10_c.jpg\" style=\"height:141px; width:421px\" /></p>\r\n', 'C', 'IX', 3, 1, '', 2),
(147, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/9_sd_11.jpg\" style=\"height:204px; width:591px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/11_c.jpg\" style=\"height:181px; width:678px\" /></p>\r\n', 'C', 'IX', 3, 1, '', 2),
(148, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/12_sd_15.jpg\" style=\"height:262px; width:557px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/12_c.jpg\" style=\"height:143px; width:436px\" /></p>\r\n', 'C', 'IX', 3, 1, '', 2),
(149, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/12_sd_15.jpg\" style=\"height:262px; width:557px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/13_b.jpg\" style=\"height:141px; width:444px\" /></p>\r\n', 'B', 'IX', 3, 1, '', 2),
(150, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/12_sd_15.jpg\" style=\"height:262px; width:557px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/14_b.jpg\" style=\"height:137px; width:318px\" /></p>\r\n', 'B', 'IX', 3, 1, '', 2),
(151, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/12_sd_15.jpg\" style=\"height:262px; width:557px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/15_a.jpg\" style=\"height:159px; width:257px\" /></p>\r\n', 'A', 'IX', 3, 1, '', 2),
(152, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/16_sd_18.jpg\" style=\"height:381px; width:380px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/16_d.jpg\" style=\"height:121px; width:403px\" /></p>\r\n', 'D', 'IX', 3, 1, '', 2),
(153, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/16_sd_18.jpg\" style=\"height:381px; width:380px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/17_a.jpg\" style=\"height:122px; width:269px\" /></p>\r\n', 'A', 'IX', 3, 1, '', 2),
(154, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/16_sd_18.jpg\" style=\"height:381px; width:380px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/18_c.jpg\" style=\"height:121px; width:627px\" /></p>\r\n', 'C', 'IX', 3, 1, '', 2),
(155, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/19_sd_21.jpg\" style=\"height:346px; width:328px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/19_d.jpg\" style=\"height:135px; width:270px\" /></p>\r\n', 'D', 'IX', 3, 1, '', 2),
(156, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/19_sd_21.jpg\" style=\"height:346px; width:328px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/20_d.jpg\" style=\"height:137px; width:253px\" /></p>\r\n', 'D', 'IX', 3, 1, '', 2),
(157, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/19_sd_21.jpg\" style=\"height:346px; width:328px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/21_c.jpg\" style=\"height:136px; width:423px\" /></p>\r\n', 'C', 'IX', 3, 1, '', 2),
(158, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/22_sd_25.jpg\" style=\"height:297px; width:724px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/22_b.jpg\" style=\"height:161px; width:421px\" /></p>\r\n', 'B', 'IX', 3, 1, '', 2),
(159, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/22_sd_25.jpg\" style=\"height:297px; width:724px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/23_d.jpg\" style=\"height:119px; width:437px\" /></p>\r\n', 'D', 'IX', 3, 1, '', 2),
(160, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/22_sd_25.jpg\" style=\"height:297px; width:724px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/24_a.jpg\" style=\"height:129px; width:421px\" /></p>\r\n', 'A', 'IX', 3, 1, '', 2),
(161, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/22_sd_25.jpg\" style=\"height:297px; width:724px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/25_d.jpg\" style=\"height:140px; width:330px\" /></p>\r\n', 'D', 'IX', 3, 1, '', 2),
(162, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/26_d.jpg\" style=\"height:154px; width:328px\" /></p>\r\n', 'B', 'IX', 3, 1, '', 2),
(163, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/27_sd_30.jpg\" style=\"height:456px; width:669px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/27_c.jpg\" style=\"height:128px; width:322px\" /></p>\r\n', 'C', 'IX', 3, 1, '', 2),
(164, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/27_sd_30.jpg\" style=\"height:456px; width:669px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/28_b.jpg\" style=\"height:138px; width:470px\" /></p>\r\n', 'B', 'IX', 3, 1, '', 2),
(165, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/27_sd_30.jpg\" style=\"height:456px; width:669px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/29_a.jpg\" style=\"height:132px; width:549px\" /></p>\r\n', 'A', 'IX', 3, 1, '', 2),
(166, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/27_sd_30.jpg\" style=\"height:456px; width:669px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/30_c.jpg\" style=\"height:165px; width:407px\" /></p>\r\n', 'C', 'IX', 3, 1, '', 2),
(167, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/31_sd_33.jpg\" style=\"height:513px; width:515px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/31_a.jpg\" style=\"height:127px; width:370px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'A', 'IX', 3, 1, '', 2),
(168, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/31_sd_33.jpg\" style=\"height:513px; width:515px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/32_c.jpg\" style=\"height:120px; width:315px\" /></p>\r\n', 'C', 'IX', 3, 1, '', 2),
(169, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/31_sd_33.jpg\" style=\"height:513px; width:515px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/33_d.jpg\" style=\"height:171px; width:621px\" /></p>\r\n', 'D', 'IX', 3, 1, '', 2),
(170, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/34_sd_38.jpg\" style=\"height:283px; width:678px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/34_b.jpg\" style=\"height:112px; width:257px\" /></p>\r\n', 'B', 'IX', 3, 1, '', 2),
(171, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/34_sd_38.jpg\" style=\"height:283px; width:678px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/35_d.jpg\" style=\"height:121px; width:334px\" /></p>\r\n', 'D', 'IX', 3, 1, '', 2),
(172, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/34_sd_38.jpg\" style=\"height:283px; width:678px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/36_a.jpg\" style=\"height:129px; width:428px\" /></p>\r\n', 'A', 'IX', 3, 1, '', 2),
(173, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/34_sd_38.jpg\" style=\"height:283px; width:678px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/37_b.jpg\" style=\"height:116px; width:185px\" /></p>\r\n', 'B', 'IX', 3, 1, '', 2),
(174, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/34_sd_38.jpg\" style=\"height:283px; width:678px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/38_a.jpg\" style=\"height:127px; width:291px\" /></p>\r\n', 'A', 'IX', 3, 1, '', 2),
(175, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/39_sd_42.jpg\" style=\"height:350px; width:644px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/39_a.jpg\" style=\"height:123px; width:317px\" /></p>\r\n', 'A', 'IX', 3, 1, '', 2),
(176, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/39_sd_42.jpg\" style=\"height:350px; width:644px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/40_d.jpg\" style=\"height:126px; width:471px\" /></p>\r\n', 'D', 'IX', 3, 1, '', 2),
(177, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/39_sd_42.jpg\" style=\"height:350px; width:644px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/41_c.jpg\" style=\"height:135px; width:575px\" /></p>\r\n', 'C', 'IX', 3, 1, '', 2),
(178, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/39_sd_42.jpg\" style=\"height:350px; width:644px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/42_a.jpg\" style=\"height:151px; width:533px\" /></p>\r\n', 'A', 'IX', 3, 1, '', 2),
(179, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/43_sd_45.jpg\" style=\"height:281px; width:710px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/43_d.jpg\" style=\"height:126px; width:418px\" /></p>\r\n', 'D', 'IX', 3, 1, '', 2),
(180, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/43_sd_45.jpg\" style=\"height:281px; width:710px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/44_d.jpg\" style=\"height:141px; width:576px\" /></p>\r\n', 'D', 'IX', 3, 1, '', 2),
(181, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/43_sd_45.jpg\" style=\"height:281px; width:710px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/45_d.jpg\" style=\"height:151px; width:605px\" /></p>\r\n', 'D', 'IX', 3, 1, '', 2),
(182, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/46_sd_48.jpg\" style=\"height:350px; width:651px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/46_c.jpg\" style=\"height:134px; width:377px\" /></p>\r\n', 'C', 'IX', 3, 1, '', 2),
(183, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/46_sd_48.jpg\" style=\"height:350px; width:651px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/47_b.jpg\" style=\"height:131px; width:402px\" /></p>\r\n', 'B', 'IX', 3, 1, '', 2),
(184, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/46_sd_48.jpg\" style=\"height:350px; width:651px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/48_c.jpg\" style=\"height:127px; width:487px\" /></p>\r\n', 'C', 'IX', 3, 1, '', 2),
(185, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/49_sd_50.jpg\" style=\"height:321px; width:658px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/49_d.jpg\" style=\"height:119px; width:292px\" /></p>\r\n', 'D', 'IX', 3, 1, '', 2),
(186, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/49_sd_50.jpg\" style=\"height:321px; width:658px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.Ing Paket A/50_c.jpg\" style=\"height:127px; width:289px\" /></p>\r\n', 'C', 'IX', 3, 1, '', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_aktif`
--

CREATE TABLE `soal_aktif` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `kunci` varchar(10) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `id_mapel` int(15) NOT NULL,
  `id_jenis` int(15) NOT NULL,
  `listening` text NOT NULL,
  `id_thj` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal_aktif`
--

INSERT INTO `soal_aktif` (`id_soal`, `soal`, `kunci`, `kelas`, `id_mapel`, `id_jenis`, `listening`, `id_thj`) VALUES
(1, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/gambar_soal_1_sd_3.jpg\" style=\"height:196px; width:642px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/1_A.jpg\" style=\"height:93px; width:504px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(2, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/gambar_soal_1_sd_3.jpg\" style=\"height:196px; width:642px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/2_D.jpg\" style=\"height:94px; width:582px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(3, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/gambar_soal_1_sd_3.jpg\" style=\"height:196px; width:642px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/3_b.jpg\" style=\"height:97px; width:316px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(4, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/4_c.jpg\" style=\"height:219px; width:631px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(5, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/5_a.jpg\" style=\"height:266px; width:632px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(6, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/6_a.jpg\" style=\"height:238px; width:627px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(7, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/7_b.jpg\" style=\"height:271px; width:629px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(8, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/8_c.jpg\" style=\"height:236px; width:628px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(9, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/9_sd_11.jpg\" style=\"height:187px; width:641px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/9_a.jpg\" style=\"height:96px; width:386px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(10, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/9_sd_11.jpg\" style=\"height:187px; width:641px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/10_d.jpg\" style=\"height:96px; width:387px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(11, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/9_sd_11.jpg\" style=\"height:187px; width:641px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/11_c.jpg\" style=\"height:104px; width:435px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(12, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/12_b.jpg\" style=\"height:227px; width:663px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(13, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/13_b.jpg\" style=\"height:238px; width:625px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(16, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/14_b.jpg\" style=\"height:337px; width:631px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(17, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/15_a.jpg\" style=\"height:274px; width:624px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(18, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/16_c.jpg\" style=\"height:343px; width:621px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(19, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/17_d.jpg\" style=\"height:187px; width:633px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(20, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/18_c.jpg\" style=\"height:235px; width:630px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(21, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/19_d.jpg\" style=\"height:328px; width:623px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(23, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/20_sd_22.jpg\" style=\"height:325px; width:646px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/20_a.jpg\" style=\"height:101px; width:297px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(24, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/20_sd_22.jpg\" style=\"height:325px; width:646px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/21_b.jpg\" style=\"height:98px; width:353px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(25, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/20_sd_22.jpg\" style=\"height:325px; width:646px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/22_a.jpg\" style=\"height:94px; width:420px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(26, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/23_sd_24.jpg\" style=\"height:233px; width:645px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/23_a.jpg\" style=\"height:93px; width:571px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(27, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/23_sd_24.jpg\" style=\"height:233px; width:645px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/24_b.jpg\" style=\"height:94px; width:513px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(28, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/25_b.jpg\" style=\"height:272px; width:628px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(29, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/26_sd_28.jpg\" style=\"height:293px; width:645px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/26_c.jpg\" style=\"height:104px; width:419px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(30, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/26_sd_28.jpg\" style=\"height:293px; width:645px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/27_c.jpg\" style=\"height:135px; width:597px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(31, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/26_sd_28.jpg\" style=\"height:293px; width:645px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/28_d.jpg\" style=\"height:95px; width:349px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(32, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/29_sd_31.jpg\" style=\"height:339px; width:643px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/29_b.jpg\" style=\"height:102px; width:561px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(33, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/29_sd_31.jpg\" style=\"height:339px; width:643px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/30_b.jpg\" style=\"height:107px; width:506px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(34, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/29_sd_31.jpg\" style=\"height:339px; width:643px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/31_c.jpg\" style=\"height:105px; width:496px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'C', 'IX', 1, 1, '', 2),
(35, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/32_sd_33.jpg\" style=\"height:247px; width:640px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/32_a.jpg\" style=\"height:125px; width:399px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(36, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/32_sd_33.jpg\" style=\"height:247px; width:640px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/33_c.jpg\" style=\"height:124px; width:492px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'C', 'IX', 1, 1, '', 2),
(37, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/34_d.jpg\" style=\"height:219px; width:635px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(38, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/35_b.jpg\" style=\"height:237px; width:642px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(39, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/36_a.jpg\" style=\"height:255px; width:629px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(40, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/37_a.jpg\" style=\"height:216px; width:622px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(41, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/38_d.jpg\" style=\"height:254px; width:624px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(42, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/39_c.jpg\" style=\"height:237px; width:623px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(43, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/40_d.jpg\" style=\"height:186px; width:616px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(44, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/41_a.jpg\" style=\"height:179px; width:620px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(45, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/42_d.jpg\" style=\"height:191px; width:631px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(46, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/43_b.jpg\" style=\"height:181px; width:624px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(47, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/44_b.jpg\" style=\"height:291px; width:642px\" /></p>\r\n', 'B', 'IX', 1, 1, '', 2),
(48, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/45_c.jpg\" style=\"height:160px; width:515px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(49, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/46_a.jpg\" style=\"height:166px; width:552px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2),
(50, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/47_c.jpg\" style=\"height:226px; width:631px\" /></p>\r\n', 'C', 'IX', 1, 1, '', 2),
(51, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/48_d.jpg\" style=\"height:180px; width:618px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(52, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/49_d.jpg\" style=\"height:235px; width:629px\" /></p>\r\n', 'D', 'IX', 1, 1, '', 2),
(53, '<p><img alt=\"\" src=\"/afas/mastercontrol/assets/ckeditor/plugins/fileman/Uploads/B.indo Paket A/50_a.jpg\" style=\"height:184px; width:565px\" /></p>\r\n', 'A', 'IX', 1, 1, '', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_thj` int(11) NOT NULL,
  `tahun_ajaran` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_thj`, `tahun_ajaran`, `status`) VALUES
(2, '2019/2020', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `token`
--

CREATE TABLE `token` (
  `id_token` int(11) NOT NULL,
  `token` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `token`
--

INSERT INTO `token` (`id_token`, `token`) VALUES
(1, 'YGPED');

-- --------------------------------------------------------

--
-- Struktur dari tabel `urutan_kelas`
--

CREATE TABLE `urutan_kelas` (
  `id_uk` int(11) NOT NULL,
  `urutan_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `urutan_kelas`
--

INSERT INTO `urutan_kelas` (`id_uk`, `urutan_kelas`) VALUES
(12, 'IX');

-- --------------------------------------------------------

--
-- Struktur dari tabel `waktu`
--

CREATE TABLE `waktu` (
  `id_waktu` int(11) NOT NULL,
  `jam` int(10) NOT NULL,
  `menit` int(10) NOT NULL,
  `detik` int(10) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `id_mapel` int(15) NOT NULL,
  `id_jenis` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `waktu`
--

INSERT INTO `waktu` (`id_waktu`, `jam`, `menit`, `detik`, `nis`, `id_mapel`, `id_jenis`) VALUES
(1, 1, 59, 9, '1', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indeks untuk tabel `jenis_ujian`
--
ALTER TABLE `jenis_ujian`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `mapel_guru`
--
ALTER TABLE `mapel_guru`
  ADD PRIMARY KEY (`id_mpg`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `sesi`
--
ALTER TABLE `sesi`
  ADD PRIMARY KEY (`id_sesi`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `soal_aktif`
--
ALTER TABLE `soal_aktif`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_thj`);

--
-- Indeks untuk tabel `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id_token`);

--
-- Indeks untuk tabel `urutan_kelas`
--
ALTER TABLE `urutan_kelas`
  ADD PRIMARY KEY (`id_uk`);

--
-- Indeks untuk tabel `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `jenis_ujian`
--
ALTER TABLE `jenis_ujian`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mapel_guru`
--
ALTER TABLE `mapel_guru`
  MODIFY `id_mpg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sesi`
--
ALTER TABLE `sesi`
  MODIFY `id_sesi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT untuk tabel `soal_aktif`
--
ALTER TABLE `soal_aktif`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_thj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `urutan_kelas`
--
ALTER TABLE `urutan_kelas`
  MODIFY `id_uk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
