-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 20, 2020 at 02:08 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siupnyk1_sisfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'sisfo', '$2y$10$7TcgmETOUb66lLPm6n3xQeamqXb/CgWKo7y7SLx2GD7lGyGeX1DRK', 1),
(2, 'dosen1', '$2y$10$/OR2f6yKmuedtiJnVCl7VOmjC/8pjPNpB5FEYxCndnxYpAWWepwvq', 2),
(3, 'mahasiswa1', '$2y$10$/OR2f6yKmuedtiJnVCl7VOmjC/8pjPNpB5FEYxCndnxYpAWWepwvq', 3);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `isi` text NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `user_id`, `judul`, `tgl`, `isi`, `file`) VALUES
(148, 1, 'Mahasiswa Berprestasi: Valeria Paulini Yuwono Juara Renang dalam POMNAS XVI 2019', '2019-09-27', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'berita/WhatsApp_Image_2020-01-16_at_10_30_311.jpeg'),
(149, 1, 'Pengenalan Kehidupan Kampus Program Studi Sistem Informasi', '2019-07-11', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'berita/25bd8fb8-8fc4-43e5-8635-a48fc910b5611.jpg'),
(150, 1, 'Seminar Motivasi \" Menjadi Pribadi Unggul\"', '2019-04-26', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'berita/seminar-menjadi-pribadi-unggul1.jpg'),
(147, 1, 'Sarasehan Dosen dan Mahasiswa Sistem Informasi', '2019-11-08', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'berita/WhatsApp_Image_2019-11-08_at_11_34_151.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

DROP TABLE IF EXISTS `dosen`;
CREATE TABLE IF NOT EXISTS `dosen` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bidang` varchar(30) NOT NULL,
  `pendidikan` varchar(500) NOT NULL,
  `penelitian` text NOT NULL,
  `pengabdian` text NOT NULL,
  `pelatihan` text NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=973 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `nama`, `email`, `bidang`, `pendidikan`, `penelitian`, `pengabdian`, `pelatihan`, `file`) VALUES
(11, '2 7607 00 0230 1', 'Juwairiah, S.Si.,M.T.', 'juwai_riah@yahoo.com', 'Sistem Informasi', 'Matematika, UNIVERSITAS GADJAH MADA', '<ol>\r\n<li>Menulis Naskah \" Aplikasi Penyisipan Pesan Rahasia Dalam Gambar Pada Handphone Android Menggunakan Kriptografi dengan Algoritma RSA dan Steganografi dengan Algoritma LSB\" (penulis pertama dari tiga penulis)</li>\r\n<li>Perancangan Framework Umum Untuk Diagnosis Kegagalan Sistem Informasi Berbasis Web Menggunakan Pembelajaran Mesin</li>\r\n<li>Aplikasi Mobile untuk Monitoring Pendidikan Siswa Sekolah Berbasis Android</li>\r\n<li>Sistem Pakar Berbasis Web Penentu Pasal Tindak Pidana Narkotika</li>\r\n<li>Aplikasi Quickcount Pemilihan Presiden RI Menggunakan Teknologi Mobile</li>\r\n<li>Aplikasi Pembelajaran Integral Berbasis WEB</li>\r\n<li>Simulasi Antrian Nasabah Dengan Multiteller Untuk Analisis Dalam Menentukan Jumlah Teller Ideal</li>\r\n<li>Aplikasi Kriptografi File Menggunakan Algoritma Blowfish</li>\r\n</ol>', '', '', 'dosen/juwai.JPG'),
(16, '2 7203 97 0142 1', 'Hafsah, S.Si.,M.T.', 'hafsahotha@gmail.com', 'Information System, Artificial', 'Ilmu Komputer, Institut Sains & Teknologi AKPRIND ', '<ol>\r\n<li>Sistem Pendukung Keputusan Pemilihan Jurusan Di SMU Dengan Logika Fuzzy</li>\r\n<li>Sistem Humidifier Dan Temperaturizer Digunakan Dalam Penyiraman Otomatis Tanaman</li>\r\n<li>Perancangan Aplikasi Online Menggunakan Basis Data Fuzzy Untuk Menentukan Topologi Daerah Pertanian Dan Jenis Tanaman Pertanian</li>\r\n<li>Aplikasi Mobile untuk Monitoring Pendidikan Siswa Sekolah Berbasis Android</li>\r\n<li>Sistem Pendukung Keputusan Penentuan Hotel Dengan menggunakan Metode Promitee dan AHP</li>\r\n<li>Aplikasi Berbasis Web Pemilihan Obyek Pariwisata Di Yogyakarta Menggunakan Metode Tahani</li>\r\n</ol>', '', '', 'dosen/hafsah.jpg'),
(17, '2 7708 02 0235 1', 'Herlina Jayadianti, S.T.,M.T.**', 'jayadianti@lycos.com', 'Artificial Intelligence, Ontol', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Teknik Informatika UPN</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ol>\r\n<li>Strategi pengelolaan pengetahuan (Knowledge management) pemilihan anggota legislatif di Daerah Istimewa Yogyakarta</li>\r\n<li>Aplikasi Pengenalan Bendera Negara Menggunakan Histogram Citra</li>\r\n<li>Penerapan Teknologi Semantic Web untuk Menentukan Pilihan Jalur Bis Trans Jogya</li>\r\n<li>Penerapan Teknologi Semantic Web pada Aplikasi Pencarian Koleksi Perpustakaan</li>\r\n</ol>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'dosen/IMG-20190711-WA000421.jpg'),
(21, '2 8305 11 0300 1', 'Oliver Samuel Simanjuntak, S.Kom., M.Eng.', 'oliversimanjuntak@yahoo.com', 'Teknik Informatika', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Teknik Informatika UKDW Yogyakarta</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Pemodelan Pengoperasian MCAP Dalam Rangka Pemberdayaan Masyarakat Menuju Masyarakat Informasi di DIY</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'dosen/oliv6.jpg'),
(949, '2 6404 96 0139 1', 'Herry Sofyan, S.T.,M.Kom.', 'herrysofyan@gmail.com', 'Ilmu Komputer, Basis Data', ' Teknik Perminyakan, UPN ', '<ol style=\"font-family: Arial, Helvetica, sans-serif; font-size: small; line-height: 19.2px;\">\r\n<li>Melakukan penelitian berjudul \"Pengembangan Intelegent Agent pada Sistem Informasi Keuangan untuk Lembaga Sertifikasi Pariwisata Wiyata Nusantara Yogyakarta\" sampai tahap akhir. Peneliti pertama/ketua dari dua orang peneliti.</li>\r\n<li>Aplikasi Supply Chain Management Berbasis Short Message Service (SMS) Gateway</li>\r\n<li>Aplikasi MRP (Material Requirement Planning) untuk Proses Penentuan Kebutuhan Material Pada Industri Manufaktur</li>\r\n<li>SIG Penyebaran Penduduk Berdasarkan Tingkat Usia Di Kabupaten Sleman Berbasis Web</li>\r\n<li>Pengembangan Aplikasi Layanan Pertanahan Berbasis Web Pada Kantor BPN (Badan Pertanahan Nasional) Kabupaten Badung</li>\r\n<li>Aplikasi Pengolahan Citra Digital pada Telepon Seluler</li>\r\n<li>Sistem Pencarian Citra Digital Menggunakan Content-Based</li>\r\n<li>Pengembangan Group Decision Support System Menggunakan Metode Fuzzy Analytic Hierarchy Process Group</li>\r\n<li>Aplikasi Laporan Hasil Survei Non Seismik Berbasis Web untuk Kontraktor Kontrak Kerja Sama (KKKS) pada Badan Pelaksana Kegiatan Usaha Hulu Minyak dan Gas (BPMIGAS)</li>\r\n<li>Pengembangan Metodologi Data Mining pada Database Manufaktur</li>\r\n<li>Visualisasi Luas Daerah Pengurasan Sumur Minyak</li>\r\n</ol>', '', '', 'dosen/herrysofyan.JPG'),
(968, ' 2 7107 98 0180 1 ', 'Yuli Fauziah, S.T., M.T.', '', 'Sistem Komputer dan Informasi', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>S2 Universitas Gadjah Mada Yogyakarta</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'dosen/yul1.jpg'),
(972, '2 7302 00 0225 1', 'Bambang Yuwono,S.T.,M.T.', 'bambangy@gmail.com', 'Ilmu Komputer , Image Processi', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Teknik Informatika, UNIVERSITAS AHMAD DAHLAN</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul>\r\n<li>Menulis Artikel Ilmiah \"Sistem Pakar Berbasis Web Untuk Mendiagnosa Penyakit Gigi Menggunakan Metode Certainty Factor\" (Penulis pertama&nbsp; dari tiga Penulis)</li>\r\n<li>Sistem Pakar Berbasis Web untuk Mengidentifikasi Jenis dan Penyakit pada Bunga Mawar</li>\r\n<li>Perancangan dan Implementasi Jaringan Syaraf Tiruan untuk Mendiagnosa Jenis Penyakit Kandungan</li>\r\n<li>Hybrid Computational with Fuzzy Neural Network</li>\r\n<li>System Development In Search Data Book Library Using Voice Commands</li>\r\n<li>Implementasi Algoritma Koloni Semut pada Proses Pencarian Jalur Terpendek Jalan Protokol di Kota Yogyakarta</li>\r\n<li>Perancangan dan Pengembangan Sistem Pakar Berbasis WAP untuk Diagnosa Penyakit Gigi</li>\r\n<li>Pengembangan Sistem Pakar Online Untuk Diagnosa Penyakit Gigi</li>\r\n<li>Diagnosa Gangguan Saluran Pernafasan Menggunakan Jaringan Syaraf Tiruan Backpropagation</li>\r\n<li>Aplikasi Enkripsi Pengiriman File Suara Menggunakan Algoritma Blowfish</li>\r\n<li>Agent Untuk Pemantau Keamanan Server Pada Jaringan Internet Menggunakan Mobile Device</li>\r\n<li>Aplikasi Jaringan Syaraf Tiruan untuk Mendiagnosa Gangguan Saluran Pernafasan</li>\r\n<li>Sistem Pencarian Data Buku Di Perpustakaan Menggunakan Perintah Suara</li>\r\n<li>Sistem Pakar Diagnosa Penyakit Ayam Menggunakan Perintah Suara</li>\r\n<li>Perancangan dan Pengembangan Sistem Pakar Berbasis WAP untuk Diagnosa Penyakit Gigi</li>\r\n<li>Pengembangan Sistem Pakar Online Untuk Diagnosa Penyakit Gigi</li>\r\n<li>Image Smoothing Menggunakan Mean Filtering, Median Filtering, Modus Filtering dan Gaussian Filtering</li>\r\n<li>Sistem Pendukung Keputusan Menggunakan Metode Promethee (Studi Kasus : Stasiun Pengisian Bahan Bakar Umum)</li>\r\n<li>Pengembangan Sistem Pakar Pada Perangkat Mobile Untuk Mendiagnosa Penyakit Gigi</li>\r\n<li>Aplikasi Penilaian Kualitas Jasa/Layanan Retail Dengan Metode Retail Service Quality Dan Analytic Hierarchy Process</li>\r\n</ul>\r\n</body>\r\n</html>', '<p>Pelatihan Internet dan Pembuatan Blog di TPA Masjid Ukhuwah Keniten, Tamanmartani, Kalasan, Sleman (Tim beranggotakan 4 orang.</p>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'dosen/bayu2.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `location` text,
  `time_start` timestamp NULL DEFAULT NULL,
  `time_end` timestamp NOT NULL,
  `status` int(11) DEFAULT NULL,
  `cover` text NOT NULL,
  `file` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `user_id`, `title`, `description`, `location`, `time_start`, `time_end`, `status`, `cover`, `file`, `created_at`, `updated_at`) VALUES
(2, 1, 'Agenda terbaru', '&lt;!DOCTYPE html>\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n<p>siapa sih kamu ini</p>\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'Sistem Informasi', '2020-05-13 09:00:00', '2020-05-16 07:30:00', 0, '', '', NULL, NULL),
(3, 1, 'Seminar Melawan Corona-2020', '&lt;!DOCTYPE html>\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n<p>wwwwwwwwwwwww percobaan lagi </p>\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'R. Seminar, Jurusan  Teknik Informatika', '2020-05-13 03:00:00', '2020-05-12 17:00:00', 1, './assets/images/agenda/growth-mindset-1589209108.png', './assets/file/agenda/sample-2-1589209586.docx', '2020-05-11 14:36:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

DROP TABLE IF EXISTS `fasilitas`;
CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `image` text,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
CREATE TABLE IF NOT EXISTS `file` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `file`, `keterangan`) VALUES
(48, 'file/Modul_Prak_Algo1.zip', 'Algoritma dan Pemrograman 1'),
(49, 'file/Modul_PBO.zip', 'Modul PBO'),
(50, 'file/Modul_Struktur_Data.zip', 'Modul Struktur Data');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` text,
  `image` text NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `keterangan`, `image`, `status`, `created_at`, `updated_at`) VALUES
(24, 'Visited By UAD', './assets/images/gallery/img-20200609-wa0004-1592399149.jpg', 0, '2020-06-17 13:05:49', NULL),
(25, 'Sarasehan 2019', './assets/images/gallery/img-20200609-wa0007-1592399199.jpg', 0, '2020-06-17 13:06:39', NULL),
(20, 'Inagural Lecture', './assets/images/gallery/img-20200609-wa0012-1592398783.jpg', 0, '2020-06-17 12:59:43', NULL),
(27, 'PKK OCEAN 2019', './assets/images/gallery/img-20200609-wa0011-1592399431.jpg', 0, '2020-06-17 13:10:31', NULL),
(16, '', './assets/images/gallery/7-1591799199.jpg', 0, '2020-06-10 14:26:39', NULL),
(21, 'Orca 1', './assets/images/gallery/img-20200609-wa0000-1592398867.jpg', 0, '2020-06-17 13:01:07', NULL),
(18, '', './assets/images/gallery/seminar-menjadi-pribadi-unggul-1591799386.jpg', 0, '2020-06-10 14:29:46', NULL),
(19, '', './assets/images/gallery/whatsapp_image_2020-01-16_at_10_30_31-1591799403.jpeg', 0, '2020-06-10 14:30:03', NULL),
(22, 'Orca 2', './assets/images/gallery/img-20200609-wa0013-1592398981.jpg', 0, '2020-06-17 13:03:01', NULL),
(23, 'Techness Talk', './assets/images/gallery/img-20200609-wa0005-1592399028.jpg', 0, '2020-06-17 13:03:48', NULL),
(26, 'Visited FEB', './assets/images/gallery/img-20200609-wa0003-1592399368.jpg', 0, '2020-06-17 13:09:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kalendar`
--

DROP TABLE IF EXISTS `kalendar`;
CREATE TABLE IF NOT EXISTS `kalendar` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `tahun` varchar(30) NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kalendar`
--

INSERT INTO `kalendar` (`id`, `tahun`, `file`, `status`, `created_at`) VALUES
(1, '2020/2021', 'kalender/Kalender_Akademik_19-20.pdf', 1, '2020-06-20 00:11:16'),
(2, '2016/2017', '', 1, '2020-06-20 00:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `kerja_praktik`
--

DROP TABLE IF EXISTS `kerja_praktik`;
CREATE TABLE IF NOT EXISTS `kerja_praktik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `file` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

DROP TABLE IF EXISTS `kurikulum`;
CREATE TABLE IF NOT EXISTS `kurikulum` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `tahun` varchar(20) NOT NULL,
  `file` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=367 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id`, `tahun`, `file`, `status`, `created_at`) VALUES
(365, '2018/2019', 'Kurikulum_SI-2017.pdf', 0, '2020-06-16 17:00:00'),
(366, '2017/2018', '', 1, '2020-06-20 00:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

DROP TABLE IF EXISTS `profil`;
CREATE TABLE IF NOT EXISTS `profil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sejarah` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tujuan` text NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `sejarah`, `visi`, `misi`, `tujuan`, `file`) VALUES
(1, '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Pendirian Program Studi <strong>Sistem Informasi</strong> UPN &rdquo;Veteran&rdquo; Yogyakarta dimaksudkan untuk membantu program pemerintah dalam rangka <strong>mengembangkan kecerdasan dan martabat bangsa</strong> melalui kegiatan pendidikan tinggi dengan tetap memegang nilai-nilai moral dan etika yang kuat, jiwa pengabdian dan tanggung jawab serta disiplin yang tinggi. Secara khusus pendirian program studi ini dimaksudkan juga untuk menampung minat masyarakat untuk menekuni bidang sistem informasi dan memenuhi kebutuhan sistem informasi dalam pembangunan nasional, dimana lulusannya mampu bersaing di tingkat nasional karena memiliki kemampuan menerapkan sistem informasi dalam organisasi baik pemerintah maupun swasta <em>khususnya</em> lagi di <strong>bidang kebumian</strong>.</p>\r\n<p><br />Universitas Pembangunan Nasional \"Veteran\" Yogyakarta membuka program studi Sistem Informasi tingkat Sarjana (S1) dengan SK pendirian Prodi 82/KPT/I/2016 dengan seleksi penerimaan mahasiswa baru pada tahun 2017 dengan memulai perkuliahan pada 3 September 2017. Terobosan ini menjadikan UPN Veteran Yogyakarta menjadi satu-satunya perguruan tinggi negeri di yogyakarta yang memiliki program studi Sistem Informasi. Dibukanya program studi Sistem Informasi ini menjawab tuntutan masyarakat terkait kebutuhan sumber daya manusia yang memiliki pengetahuan dan kompetensi pada pemanfaatan data &amp; informasi dalam berbagai membangun alternatif solusi sistem informasi untuk menyelesaikan masalah organisasi.</p>\r\n<p><br />Saat ini Prodi Sistem Informasi berada dibawah naungan Jurusan Informatika dan Fakultas Teknik Industri.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Menjadi Program Studi Sistem Informasi yang profesional dan berintegritas berlandaskan jiwa bela negara dengan keunggulan di bidang Sistem Informasi Kebumian di Tingkat Nasional pada tahun 2027</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ol>\r\n<li>Menyelenggarakan pendidikan tinggi untuk menghasilkan sarjana sistem informasi di bidang kebumian dengan berpedoman pada standar mutu pendidikan nasional dan trend perkembangan TIK di tingkat internasional</li>\r\n<li>Berperan aktif dalam penelitian dan pemanfaatan sistem informasi/teknologi informasi yang bertujuan meningkatkan kesejahteraan masyarakat dan daya saing bangsa</li>\r\n<li>Menyelenggarakan penabdian kepada masyarakat dengan memanfaatkan dan menerapkan hasil penelitian di bidang sistem informasi dan telekomunikasi</li>\r\n</ol>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ol>\r\n<li>Menghasilkan lulusan sistem informasi yang bermoral, profesional, berintegritas dan memiliki jiwa bela negara serta memiliki kompetensi di bidang sistem informasi</li>\r\n<li>Menghasilkan penelitian yang berorientasi pada pengembangan Sistem Informasi</li>\r\n<li>Mengembangkan kegiatan pengabdian pada masyarakat yang dapat membantu penanganan masalah dan meningkatkan kualitas hidup</li>\r\n<li>Menjalin kerjasama dengan lembaga pemerintah maupun swasta dalam rangka meningkatkan mutu pendidikan sistem informasi</li>\r\n</ol>\r\n</body>\r\n</html>', '');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `quest` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `name`, `email`, `quest`, `created_at`) VALUES
(6, 'BEBASKAN UKT SEMUA MAHASISWA', 'yakuzakey60@gmail.com', 'YANG TERHORMAT BAPAK/IBU DOSEN\r\nSAYA DISINI MENYALURKAN ASPIRASI PULUHAN RIBU ANAK DIDIK ANDA YANG KINI HANY DIAM DIRUMAH, BERHARAP MEMBAYAR SEGEPOK UANG UNTUK MENDAPATKAN ILMU YANG SETIMPAL\r\nKAMI TIDAK MENYALAHKAN BAPAK/IBU DOSEN ATAS TERJADINYA PANDEMI ININAMUN SIKAP PANJENENGAN YANG KAMI SAYANGKAN, KAMI TAHU KAMI BODOH, TAPI KAMI JUGA TETAP MEMPERJUANGKAN PENDIDIKAN YANG SELAYAKNYA KAMI DAPATKAN, RUANG DAN WAKTU HANYA TERSAMBUNGKAN OLEH JEJARING INTERNET\r\nILMU YANG KALIAN SAMPAIKAN TIDAK SEMUANYA DAPAT KAMI SERAPKALIAN MENUNTUT KITA PINTAR , TAPI KONDISI INI TIDAK MEMUNGKINKANKALIAN MENUNTUT KITA DISIPLIN, TAPI DISINI KITA JUGA TERPURUKFASILITAS KAMPUS TIDAK KITA RASAKAN, BAHKAN MINIM, TAPI PANJENENGAN TETAP MEMATOK HARGA (UKT)\r\nKAMI MOHON AGAR PANJENENGAN SEDOYO MENGERTI YANG KAMI RASAKAN, RINGANKAN BEBAN KAMI !HAPUSKAN UKT, ATAU SETIDAKNYA BERI KERINGANAN BAGI SELURUH MAHASISWA, TIDAK HANYA SEGELINTIR SAJA !', '2020-06-15 10:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`) VALUES
(1, 'admin', '2020-04-11 07:52:48'),
(2, 'dosen', '2020-04-11 07:52:48'),
(3, 'mahasiswa', '2020-04-11 07:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `skripsi`
--

DROP TABLE IF EXISTS `skripsi`;
CREATE TABLE IF NOT EXISTS `skripsi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text,
  `file` text,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `file`, `link`) VALUES
(31, 'slide/jurusan-if1.jpg', '#'),
(32, 'slide/upn-rektorat1.jpg', '#');

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

DROP TABLE IF EXISTS `specialization`;
CREATE TABLE IF NOT EXISTS `specialization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `description` text,
  `img` text,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`id`, `title`, `id_dosen`, `description`, `img`, `status`, `created_at`) VALUES
(2, 'Manajemen Informasi Bisnis (Business Information Management)', 0, '&lt;!DOCTYPE html>\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n<p>Manajemen Informasi Bisnis merupakan perpanduan antara ilmu manajemen dan teknologi informasi dengan penerapannya didunia bisnis dengan mempertimbangkan faktor manusia, organisasi/perusahaan, informasi dan teknologi. Topik-topik pembahasan pada peminatan ini meliputi peningkatan performa bisnis dengan SI/TI, strategi pengembangan bisnis dengan SI/TI, pengelolaan SI/TI sampai dengan evaluasi kinerja dari SI/TI dalam mendukung bisnis ataupun organisasi.</p>\r\n&lt;/body&gt;\r\n&lt;/html&gt;', './assets/images/perminatan/minat1-1591799751.jpg', 1, '2020-06-10 14:35:51'),
(3, 'Kecerdasan dan Analisis Bisnis (Business Intelligence and Analytics)', 1, '&lt;!DOCTYPE html>\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n<p xss=removed align=\"justify\"><span xss=removed>Kecerdasan dan analisis bisnis merupakan solusi isu dalam manajemen data dan informasi, terutama data dan informasi perusahaan. Kecerdasan bisnis menggunakan data dan informasi masa lampau untuk mencari tahu penyebab kondisi sekarang, sedangkan analisis bisnis menganalisis penyebab kondisi masa lampau dan bisa digunakan untuk pengambilan keputusan.</span></p>\r\n&lt;/body&gt;\r\n&lt;/html&gt;', './assets/images/perminatan/business-intelligence-1591800838.jpg', 1, '2020-06-10 14:53:58'),
(4, 'Pengembangan dan Pengintegrasian Sistem Informasi dan Sistem Informasi Kebumian (IS/ESIS Integration and Development)', 1, '&lt;!DOCTYPE html>\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n<p xss=removed align=\"justify\"><span xss=removed>Pengembangan dan Pengintegrasian Sistem Informasi dan Sistem Informasi Kebumian merupakan peminatan yang berfokus tidak hanya pada mengembangkan dan mengintegrasikan suatu sistem informasi akan tetapi meliputi sistem informasi kebumian, yang dimaksudkan sistem informasi kebumian yaitu sistem yang dapat memberikan data dan informasi dalam bentuk visualisasi (map) terkait geologi suatu tempat atau daerah. Sistem informasi ataupun Sistem Informasi Kebumian akan dikembangkan sesuai dengan kebutuhan bisnis atau perusahaan dengan melakukan analisis hingga testing untuk nantinya dapat di implementasikan. Tidak hanya pengembangan, integrasi sistem informasi diperlukan sehingga proses bisnis dari sistem bisa lebih singkat dan efektif, dengan adanya sistem terintegrasi dapat memudahkan pengguna dalam mencari data ataupun informasi yang komplex tanpa harus membuka satu persatu sistem yang telah ada.</span></p>\r\n&lt;/body&gt;\r\n&lt;/html&gt;', './assets/images/perminatan/esis_-_rueckkanal-1591801782.png', 1, '2020-06-10 15:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pelatihan` text NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=421 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `nik`, `nama`, `email`, `pelatihan`, `file`) VALUES
(420, '', 'Sri Rahayu Astari, ST', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'images/staff/4x6fix2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

DROP TABLE IF EXISTS `struktur`;
CREATE TABLE IF NOT EXISTS `struktur` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id`, `file`) VALUES
(34, 'images/struktur.png');

-- --------------------------------------------------------

--
-- Table structure for table `tridharma_penelitian`
--

DROP TABLE IF EXISTS `tridharma_penelitian`;
CREATE TABLE IF NOT EXISTS `tridharma_penelitian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text,
  `file` text,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tridharma_penelitian`
--

INSERT INTO `tridharma_penelitian` (`id`, `title`, `description`, `file`, `status`, `created_at`) VALUES
(1, 'Apakah bisa?', '&lt;!DOCTYPE html>\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n<p>KDKDKSAKDAKDSKADKS</p>\r\n&lt;/body&gt;\r\n&lt;/html&gt;', './assets/file/tri_dharma/penelitian/daftar pertanyaan review proposal anggota kelompok-1592466241.pdf', 0, '2020-06-18 07:44:01');

-- --------------------------------------------------------

--
-- Table structure for table `tridharma_pengabdian`
--

DROP TABLE IF EXISTS `tridharma_pengabdian`;
CREATE TABLE IF NOT EXISTS `tridharma_pengabdian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text,
  `file` text,
  `image` text NOT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tridharma_pengabdian`
--

INSERT INTO `tridharma_pengabdian` (`id`, `title`, `description`, `file`, `image`, `status`, `created_at`) VALUES
(1, 'coba lagi ya coba', '&lt;!DOCTYPE html>\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n<p>sosososoossskokwokoakoaowa</p>\r\n&lt;/body&gt;\r\n&lt;/html&gt;', './assets/file/tri_dharma/pengabdian/soal_uas_jst_2020-1592471705.pdf', './assets/images/tri_dharma/pengabdian/output2l-1592471705.png', 1, '2020-06-18 09:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `tridharma_pengajaran`
--

DROP TABLE IF EXISTS `tridharma_pengajaran`;
CREATE TABLE IF NOT EXISTS `tridharma_pengajaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text,
  `file` text,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tridharma_pengajaran`
--

INSERT INTO `tridharma_pengajaran` (`id`, `title`, `description`, `file`, `status`, `created_at`) VALUES
(1, 'coba lagi ya coba', '</p>\r\n&lt;/body&gt;\r\n&lt;/html&gt;\">&lt;!DOCTYPE html>\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n<p>COBACOOACAOCA</p>\r\n<p> </p>\r\n<p><img src=\"https://image.shutterstock.com/image-vector/square-grunge-black-example-stamp-260nw-647778754.jpg\" alt=\"\" width=\"599\" height=\"280\"></p>\r\n&lt;/body&gt;\r\n&lt;/html&gt;', './assets/file/tri_dharma/pengajaran/1530-1369-1-pb-1592464825.pdf', 1, '2020-06-18 07:20:25'),
(2, 'coba coba lagi deh', '&lt;!DOCTYPE html>\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n<p>ai suru hito yo shiranai tomo yo</p>\r\n&lt;/body&gt;\r\n&lt;/html&gt;', './assets/file/tri_dharma/pengajaran/169-333-1-sm-1592471875.pdf', 0, '2020-06-18 09:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `wisuda`
--

DROP TABLE IF EXISTS `wisuda`;
CREATE TABLE IF NOT EXISTS `wisuda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `file` text,
  `status` int(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisuda`
--

INSERT INTO `wisuda` (`id`, `title`, `description`, `file`, `status`, `created_at`) VALUES
(1, 'Wisuda tahun baru apasaja?', '&lt;!DOCTYPE html>\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n<p>akowkaoowaoakowoqwaokoakdoakwkad</p>\r\n&lt;/body&gt;\r\n&lt;/html&gt;', './assets/file/wisuda/paper yuyun snastikom 2015-1592625148.pdf', 0, '2020-06-20 03:18:32');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
