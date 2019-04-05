-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 10:27 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang1`
--

CREATE TABLE `bidang1` (
  `b1_kode` int(11) NOT NULL,
  `b1_nama` varchar(100) DEFAULT NULL,
  `b1_alamat` text,
  `b1_imb` varchar(100) DEFAULT NULL,
  `b1_luas` int(11) DEFAULT NULL,
  `b1_luas_lahan` int(11) DEFAULT NULL,
  `b1_sertifikat` varchar(100) DEFAULT NULL,
  `b1_status` varchar(100) DEFAULT NULL,
  `b1_surat` varchar(100) DEFAULT NULL,
  `b1_asal` varchar(100) DEFAULT NULL,
  `b1_penduduk1` int(11) DEFAULT NULL,
  `b1_penduduk2` int(11) DEFAULT NULL,
  `b1_penduduk3` int(11) DEFAULT NULL,
  `b1_penduduk4` int(11) DEFAULT NULL,
  `b1_islam1` int(11) DEFAULT NULL,
  `b1_islam2` int(11) DEFAULT NULL,
  `b1_islam3` int(11) DEFAULT NULL,
  `b1_non1` int(11) DEFAULT NULL,
  `b1_non2` int(11) DEFAULT NULL,
  `b1_longitude` varchar(50) DEFAULT NULL,
  `b1_latitude` varchar(50) DEFAULT NULL,
  `b1_lainnya` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang1`
--

INSERT INTO `bidang1` (`b1_kode`, `b1_nama`, `b1_alamat`, `b1_imb`, `b1_luas`, `b1_luas_lahan`, `b1_sertifikat`, `b1_status`, `b1_surat`, `b1_asal`, `b1_penduduk1`, `b1_penduduk2`, `b1_penduduk3`, `b1_penduduk4`, `b1_islam1`, `b1_islam2`, `b1_islam3`, `b1_non1`, `b1_non2`, `b1_longitude`, `b1_latitude`, `b1_lainnya`) VALUES
(1, 'test', 'dsads', '', 11, 321, ' das', '  dsa', ' das', ' as', 1, 2, 3, 4, 1, 2, 3, 2, 2, '-7.749626', '110.397683', 'dasd'),
(7, 'Jannatun naim', 'Tamanan', '1kk21', 200, 300, '50', 'Keluarga', 'ASA1213', 'Bantul', 30, 40, 30, 20, 5, 10, 20, 5, 5, '-7.762320', '110.389662', ''),
(8, 'Islamic UAD', 'Banguntapan', '1200', 400, 700, 'ksaka21', 'Yayasan', 'DAKKU12', 'Yogyakarta', 40, 50, 40, 30, 10, 10, 25, 5, 6, '-7.824013', '110.364499', 'asawqwq');

-- --------------------------------------------------------

--
-- Table structure for table `bidang2`
--

CREATE TABLE `bidang2` (
  `b2_kode` int(11) NOT NULL,
  `b2_namapapan` enum('ada','tidak') DEFAULT NULL,
  `b2_maket` enum('ya','tidak') DEFAULT NULL,
  `b2_simbol` enum('ya','tidak') DEFAULT NULL,
  `b2_artistik` enum('ya','tidak') DEFAULT NULL,
  `b2_kemegahan` enum('ya','tidak') DEFAULT NULL,
  `b2_kebersihan` enum('ya','tidak') DEFAULT NULL,
  `b2_parkir` enum('ya','tidak') DEFAULT NULL,
  `b2_nyaman` enum('ya','tidak') DEFAULT NULL,
  `b2_aman` enum('ya','tidak') DEFAULT NULL,
  `b2_artistik2` enum('ya','tidak') DEFAULT NULL,
  `b2_najis` enum('ya','tidak') DEFAULT NULL,
  `b2_indah` enum('ya','tidak') DEFAULT NULL,
  `b2_sehat` enum('ya','tidak') DEFAULT NULL,
  `b2_fotodepan` varchar(100) DEFAULT NULL,
  `b2_fotoutama` varchar(100) DEFAULT NULL,
  `b2_fotowudhu` varchar(100) DEFAULT NULL,
  `b2_fotokamar` varchar(100) DEFAULT NULL,
  `b2_ketua` varchar(20) DEFAULT NULL,
  `b2_sekretaris` varchar(20) DEFAULT NULL,
  `b2_bendahara` varchar(20) DEFAULT NULL,
  `b2_sertifikasi` varchar(100) DEFAULT NULL,
  `b2_imb` varchar(100) DEFAULT NULL,
  `b2_sholatsubuh` int(5) DEFAULT NULL,
  `b2_sholatdzuhur` int(5) DEFAULT NULL,
  `b2_sholatmaghrib` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang2`
--

INSERT INTO `bidang2` (`b2_kode`, `b2_namapapan`, `b2_maket`, `b2_simbol`, `b2_artistik`, `b2_kemegahan`, `b2_kebersihan`, `b2_parkir`, `b2_nyaman`, `b2_aman`, `b2_artistik2`, `b2_najis`, `b2_indah`, `b2_sehat`, `b2_fotodepan`, `b2_fotoutama`, `b2_fotowudhu`, `b2_fotokamar`, `b2_ketua`, `b2_sekretaris`, `b2_bendahara`, `b2_sertifikasi`, `b2_imb`, `b2_sholatsubuh`, `b2_sholatdzuhur`, `b2_sholatmaghrib`) VALUES
(1, 'ada', 'tidak', 'tidak', 'tidak', 'tidak', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'tidak', 'ya', '-', '-', '-', '-', '08124xxxx', '08351xxxx', '08817xxxx', '11236128721', '338638291362178', 20, 40, 50),
(7, 'ada', 'tidak', 'tidak', 'ya', 'ya', 'tidak', 'ya', 'ya', 'tidak', 'ya', 'tidak', 'ya', 'tidak', '5bd6a7cc18b8c20ef430249464826ed4.jpg', '66c23cc74abeff9b8aa51b45ab09f7d8.jpg', '6e942d718efca01c22568b57002f43c6.jpg', 'f4ed709d02cad997f009fc3f20caac6c.jpg', 'Naufal', 'Adil', 'Bagus', '31628327', '3712', 99, 99, 99),
(8, 'ada', 'ya', 'tidak', 'ya', 'tidak', 'ya', 'ya', 'tidak', 'ya', 'ya', 'ya', 'tidak', 'tidak', 'ada', 'ada', 'ada', 'ada', '1212', '313424', '1424', 'asa12', 'asa13', 30, 30, 30);

-- --------------------------------------------------------

--
-- Table structure for table `bidang3`
--

CREATE TABLE `bidang3` (
  `b3_kode` int(11) NOT NULL,
  `b3_wudhu` enum('ada','tidak') DEFAULT NULL,
  `b3_kamar` enum('ada','tidak') DEFAULT NULL,
  `b3_air` enum('ada','tidak') DEFAULT NULL,
  `b3_sound` enum('ada','tidak') DEFAULT NULL,
  `b3_gudang` enum('ada','tidak') DEFAULT NULL,
  `b3_lahan` enum('ada','tidak') DEFAULT NULL,
  `b3_kantor` enum('ada','tidak') DEFAULT NULL,
  `b3_jarak` enum('ada','tidak') DEFAULT NULL,
  `b3_perpustakaan` enum('ada','tidak') DEFAULT NULL,
  `b3_audio` enum('ada','tidak') DEFAULT NULL,
  `b3_projector` enum('ada','tidak') DEFAULT NULL,
  `b3_penginapan` enum('ada','tidak') DEFAULT NULL,
  `b3_taman` enum('ada','tidak') DEFAULT NULL,
  `b3_lainnya` enum('ada','tidak') DEFAULT NULL,
  `b3_petugas` enum('ada','tidak') DEFAULT NULL,
  `b3_pengurus` enum('ada','tidak') DEFAULT NULL,
  `b3_surat` enum('ada','tidak') DEFAULT NULL,
  `b3_kualitassurat` text,
  `b3_visimisi` enum('ada','tidak') DEFAULT NULL,
  `b3_remaja` enum('ada','tidak') DEFAULT NULL,
  `b3_yayasan` enum('ada','tidak') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang3`
--

INSERT INTO `bidang3` (`b3_kode`, `b3_wudhu`, `b3_kamar`, `b3_air`, `b3_sound`, `b3_gudang`, `b3_lahan`, `b3_kantor`, `b3_jarak`, `b3_perpustakaan`, `b3_audio`, `b3_projector`, `b3_penginapan`, `b3_taman`, `b3_lainnya`, `b3_petugas`, `b3_pengurus`, `b3_surat`, `b3_kualitassurat`, `b3_visimisi`, `b3_remaja`, `b3_yayasan`) VALUES
(1, 'ada', 'tidak', 'ada', 'ada', 'tidak', 'tidak', 'ada', 'tidak', 'ada', 'tidak', 'ada', 'tidak', 'ada', 'tidak', 'ada', 'tidak', 'ada', 'ada', 'ada', 'ada', 'tidak'),
(7, 'tidak', 'tidak', 'tidak', 'ada', 'ada', 'tidak', 'ada', 'ada', 'tidak', 'tidak', 'ada', 'ada', 'tidak', 'ada', 'ada', 'tidak', 'ada', 'tidak', 'ada', 'ada', 'tidak'),
(8, 'ada', 'tidak', 'tidak', 'ada', 'ada', 'tidak', 'ada', 'ada', 'tidak', 'tidak', 'ada', 'tidak', 'ada', 'tidak', 'ada', 'ada', 'ada', 'tidak', 'ada', 'tidak', 'ada');

-- --------------------------------------------------------

--
-- Table structure for table `bidang4`
--

CREATE TABLE `bidang4` (
  `b4_kode` int(11) NOT NULL,
  `b4_tpa` enum('ada','tidak') DEFAULT NULL,
  `b4_anak` enum('ada','tidak') DEFAULT NULL,
  `b4_seni` enum('ada','tidak') DEFAULT NULL,
  `b4_haribesar` enum('ada','tidak') DEFAULT NULL,
  `b4_pengajian` enum('ada','tidak') DEFAULT NULL,
  `b4_olahraga` enum('ada','tidak') DEFAULT NULL,
  `b4_tadarus` enum('ada','tidak') DEFAULT NULL,
  `b4_keagamaan` enum('ada','tidak') DEFAULT NULL,
  `b4_gender` enum('ada','tidak') DEFAULT NULL,
  `b4_pemberdayaan` enum('ada','tidak') DEFAULT NULL,
  `b4_pendidikan` enum('ada','tidak') NOT NULL,
  `b4_pentas` enum('ada','tidak') DEFAULT NULL,
  `b4_tafsir` enum('ada','tidak') DEFAULT NULL,
  `b4_madrasah` enum('ada','tidak') DEFAULT NULL,
  `b4_tk` enum('ada','tidak') DEFAULT NULL,
  `b4_sd` enum('ada','tidak') DEFAULT NULL,
  `b4_sltp` enum('ada','tidak') DEFAULT NULL,
  `b4_slta` enum('ada','tidak') DEFAULT NULL,
  `b4_klinik` enum('ada','tidak') DEFAULT NULL,
  `b4_tahfiz` enum('ada','tidak') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang4`
--

INSERT INTO `bidang4` (`b4_kode`, `b4_tpa`, `b4_anak`, `b4_seni`, `b4_haribesar`, `b4_pengajian`, `b4_olahraga`, `b4_tadarus`, `b4_keagamaan`, `b4_gender`, `b4_pemberdayaan`, `b4_pendidikan`, `b4_pentas`, `b4_tafsir`, `b4_madrasah`, `b4_tk`, `b4_sd`, `b4_sltp`, `b4_slta`, `b4_klinik`, `b4_tahfiz`) VALUES
(1, 'ada', 'ada', 'ada', 'ada', 'tidak', 'tidak', 'tidak', 'tidak', 'ada', 'ada', 'ada', 'tidak', 'tidak', 'tidak', 'tidak', 'ada', 'ada', 'ada', 'tidak', 'tidak'),
(7, 'tidak', 'tidak', 'tidak', 'ada', 'ada', 'tidak', 'tidak', 'ada', 'tidak', 'ada', 'ada', 'tidak', 'ada', 'ada', 'tidak', 'ada', 'tidak', 'ada', 'tidak', 'ada'),
(8, 'ada', 'tidak', 'ada', 'ada', 'tidak', 'ada', 'ada', 'tidak', 'tidak', 'ada', 'tidak', 'ada', 'ada', 'tidak', 'ada', 'tidak', 'ada', 'tidak', 'ada', 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `bidang_relasi`
--

CREATE TABLE `bidang_relasi` (
  `bidang_kode` int(11) NOT NULL,
  `b1` int(11) NOT NULL,
  `b2` int(11) NOT NULL,
  `b3` int(11) NOT NULL,
  `b4` int(11) NOT NULL,
  `pengguna_id` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL DEFAULT '1',
  `score` float NOT NULL DEFAULT '0',
  `progress` int(11) NOT NULL DEFAULT '0',
  `status_flag` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang_relasi`
--

INSERT INTO `bidang_relasi` (`bidang_kode`, `b1`, `b2`, `b3`, `b4`, `pengguna_id`, `tipe`, `score`, `progress`, `status_flag`) VALUES
(1, 1, 1, 1, 1, 1, '1', 245.222, 100, '0'),
(8, 7, 7, 7, 7, 19, '1', 121, 18, '0'),
(9, 8, 8, 8, 8, 20, '1', 121, 18, '0');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `nilai_kode` int(11) NOT NULL,
  `nilai` int(11) NOT NULL DEFAULT '0',
  `pengguna_id` int(11) NOT NULL,
  `bidang_kode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`nilai_kode`, `nilai`, `pengguna_id`, `bidang_kode`) VALUES
(1, 4, 7, 1),
(2, 0, 7, 8),
(3, 0, 15, 8),
(4, 0, 16, 8),
(5, 0, 7, 9),
(6, 0, 15, 9),
(7, 0, 16, 9),
(8, 3, 15, 1),
(9, 4, 16, 1),
(10, 0, 7, 2),
(11, 0, 7, 3),
(12, 0, 7, 4),
(13, 0, 7, 5),
(14, 0, 7, 6),
(15, 0, 7, 7),
(16, 0, 15, 2),
(17, 0, 15, 3),
(18, 0, 15, 4),
(19, 0, 15, 5),
(20, 0, 15, 6),
(21, 0, 15, 7),
(22, 0, 16, 2),
(23, 0, 16, 3),
(24, 0, 16, 4),
(25, 0, 16, 5),
(26, 0, 16, 6),
(27, 0, 16, 7),
(28, 0, 7, 10),
(29, 0, 15, 10),
(30, 0, 16, 10),
(31, 0, 7, 11),
(32, 0, 15, 11),
(33, 0, 16, 11),
(34, 0, 7, 12),
(35, 0, 15, 12),
(36, 0, 16, 12),
(37, 0, 7, 13),
(38, 0, 15, 13),
(39, 0, 16, 13);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(100) DEFAULT NULL,
  `level` varchar(1) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`, `token`, `level`) VALUES
(1, 'Naufal Afif', 'lpm', '73fd60474304c4a526443a8bc1ec775b24f69b7c', NULL, '0'),
(7, 'juri1', 'juri', '73fd60474304c4a526443a8bc1ec775b24f69b7c', NULL, '1'),
(15, 'juri2', 'juri2', 'e303edcf92dd8ec5148991e19aad44d8e7f0af8d', NULL, '1'),
(16, 'juri3', 'juri3', '29ea64a9fd188160f5d52373d5a87ed646ce69c0', NULL, '1'),
(19, 'naufal', 'takmir', '73fd60474304c4a526443a8bc1ec775b24f69b7c', '1234', '2'),
(20, 'newuser1', 'takmir1', 'a4dcd93e5d12c75780b35b12196ca59e167a7045', '1234', '2'),
(21, 'Naufal Afif', 'naufal123', 'naufal123', '1234', '2'),
(22, 'test', 'test', 'test', '1234', '2'),
(23, 'dhsajkdhkj', 'dsakhdsajkhdkj', 'aa', 'ce02468289c34297863eb4e70669f71e', '2'),
(24, 'suprih', 'supri', '123', '5badb16272527859ca8ec41dba46ec34', '2'),
(25, 'bagus', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `setting_kode` int(11) NOT NULL,
  `setting_true` int(11) NOT NULL DEFAULT '4',
  `setting_false` int(11) NOT NULL DEFAULT '1',
  `setting_start` date NOT NULL,
  `setting_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`setting_kode`, `setting_true`, `setting_false`, `setting_start`, `setting_end`) VALUES
(1, 4, 1, '2018-01-01', '2018-01-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang1`
--
ALTER TABLE `bidang1`
  ADD PRIMARY KEY (`b1_kode`);

--
-- Indexes for table `bidang2`
--
ALTER TABLE `bidang2`
  ADD PRIMARY KEY (`b2_kode`);

--
-- Indexes for table `bidang3`
--
ALTER TABLE `bidang3`
  ADD PRIMARY KEY (`b3_kode`);

--
-- Indexes for table `bidang_relasi`
--
ALTER TABLE `bidang_relasi`
  ADD PRIMARY KEY (`bidang_kode`),
  ADD KEY `b1` (`b1`),
  ADD KEY `b2` (`b2`),
  ADD KEY `b3` (`b3`),
  ADD KEY `b4` (`b4`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`nilai_kode`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`setting_kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang1`
--
ALTER TABLE `bidang1`
  MODIFY `b1_kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bidang2`
--
ALTER TABLE `bidang2`
  MODIFY `b2_kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bidang3`
--
ALTER TABLE `bidang3`
  MODIFY `b3_kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `setting_kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
