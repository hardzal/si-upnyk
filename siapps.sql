-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 08:38 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siapps`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE IF NOT EXISTS `alamat` (
  `nim` varchar(9) NOT NULL,
  `alamatyk` varchar(35) NOT NULL,
  `kelurahanyk` varchar(15) NOT NULL,
  `kecamatanyk` varchar(15) NOT NULL,
  `kabupatenyk` varchar(12) NOT NULL,
  `alamat_asal` varchar(35) NOT NULL,
  `kelurahan_asal` varchar(20) NOT NULL,
  `kecamatan_asal` varchar(20) NOT NULL,
  `kabupaten_asal` varchar(20) NOT NULL,
  `propinsi_asal` varchar(20) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`nim`, `alamatyk`, `kelurahanyk`, `kecamatanyk`, `kabupatenyk`, `alamat_asal`, `kelurahan_asal`, `kecamatan_asal`, `kabupaten_asal`, `propinsi_asal`) VALUES
('', '', '', '', '', '', '', '', '', ''),
('123170001', 'Perum UPN B.25 Kregan', 'Wedomartani', 'Ngemplak', 'Sleman', 'Jl.Warukin II / 104 Parikesit', 'Karang Jati', 'Balikpapan Utara', 'Balikpapan', 'Kalimantan Timur');

-- --------------------------------------------------------

--
-- Table structure for table `asalsekolah`
--

CREATE TABLE IF NOT EXISTS `asalsekolah` (
  `nim` varchar(9) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `propinsi` varchar(20) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asalsekolah`
--

INSERT INTO `asalsekolah` (`nim`, `nama`, `jurusan`, `alamat`, `kabupaten`, `propinsi`) VALUES
('123170001', 'SMA Taruna Bhakti 3', 'IPA', 'Jl. Sekolah No.15', 'Palembang', 'Sumatera Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
  `nim` varchar(9) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tmp_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jkel` varchar(1) NOT NULL,
  `agama` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `foto` varchar(13) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_lulus` date NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `Dosen` varchar(41) DEFAULT NULL,
  `NIDN` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`Dosen`, `NIDN`) VALUES
('Bambang Yuwono, S.T., M.T.', '512027401'),
('Hafsah, S.Si., M.T', '529037201'),
('Hari Prapcoyo, S.Kom., M.ICT.', '8128204'),
('Herlina Jayadianti, S.T., M.T., DR.', '527087701'),
('Herry Sofyan, S.T., M.Kom.', '524046402'),
('Heru Cahya Rustamaji, S.Si., M.T.', '514067101'),
('Juwairiah, S.Si., M.T.', '527077601'),
('Oliver Samuel Simanjuntak, S.Kom., M.Eng.', '525058302'),
('Yuli Fauziah, S.T., M.T.', '508077102');

-- --------------------------------------------------------

--
-- Table structure for table `kp`
--

CREATE TABLE IF NOT EXISTS `kp` (
  `nim` varchar(9) NOT NULL,
  `judul` text NOT NULL,
  `lokasi` varchar(32) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `pembimbing_lap` varchar(35) NOT NULL,
  `pembimbing_si` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE IF NOT EXISTS `kuesioner` (
  `nim` varchar(9) NOT NULL,
  `mka` varchar(44) NOT NULL,
  `dosen` varchar(41) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `tahun` varchar(9) NOT NULL,
  `j01` tinyint(4) NOT NULL,
  `j02` tinyint(4) NOT NULL,
  `j03` tinyint(4) NOT NULL,
  `j04` tinyint(4) NOT NULL,
  `j05` tinyint(4) NOT NULL,
  `j06` tinyint(4) NOT NULL,
  `j07` tinyint(4) NOT NULL,
  `j08` tinyint(4) NOT NULL,
  `j09` tinyint(4) NOT NULL,
  `j10` tinyint(4) NOT NULL,
  `j11` tinyint(4) NOT NULL,
  `j12` tinyint(4) NOT NULL,
  `j13` tinyint(4) NOT NULL,
  `j14` tinyint(4) NOT NULL,
  `j15` tinyint(4) NOT NULL,
  `j16` tinyint(4) NOT NULL,
  `j17` tinyint(4) NOT NULL,
  `j18` tinyint(4) NOT NULL,
  `j19` tinyint(4) NOT NULL,
  `j20` tinyint(4) NOT NULL,
  `j21` tinyint(4) NOT NULL,
  `j22` tinyint(4) NOT NULL,
  `j23` tinyint(4) NOT NULL,
  `j24` tinyint(4) NOT NULL,
  `j25` tinyint(4) NOT NULL,
  `j26` tinyint(4) NOT NULL,
  `j27` tinyint(4) NOT NULL,
  `j28` tinyint(4) NOT NULL,
  `j29` tinyint(4) NOT NULL,
  `j30` tinyint(4) NOT NULL,
  `j31` tinyint(4) NOT NULL,
  `j32` tinyint(4) NOT NULL,
  `j33` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`nim`, `mka`, `dosen`, `semester`, `tahun`, `j01`, `j02`, `j03`, `j04`, `j05`, `j06`, `j07`, `j08`, `j09`, `j10`, `j11`, `j12`, `j13`, `j14`, `j15`, `j16`, `j17`, `j18`, `j19`, `j20`, `j21`, `j22`, `j23`, `j24`, `j25`, `j26`, `j27`, `j28`, `j29`, `j30`, `j31`, `j32`, `j33`) VALUES
('123170001', 'Pendidikan Agama Islam', 'Bambang Yuwono, S.T., M.T.', 'Gasal', '2017/2018', 5, 4, 3, 4, 4, 4, 3, 5, 5, 4, 4, 4, 4, 5, 4, 4, 4, 4, 5, 4, 3, 4, 5, 3, 0, 3, 4, 5, 4, 4, 4, 3, 4),
('123170001', 'Kalkulus', 'Juwairiah, S.Si., M.T.', 'Gasal', '2017/2018', 5, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('123170001', 'Manajemen Basis Data', 'Hari Prapcoyo, S.Kom., M.ICT.', 'Gasal', '2017/2018', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('124180001', 'Pendidikan Agama Islam', 'Bambang Yuwono, S.T., M.T.', 'Gasal', '2017/2018', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` varchar(15) DEFAULT NULL,
  `Username` varchar(40) DEFAULT NULL,
  `Password` varchar(55) DEFAULT NULL,
  `Status` varchar(12) DEFAULT NULL,
  `Keterangan` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=187 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `UserID`, `Username`, `Password`, `Status`, `Keterangan`) VALUES
(1, 'admin', 'Herry Sofyan', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Aktif'),
(2, '124170001', 'AZURI KAMIL PASHA', 'd8e56665164b7b432fc666796ed922fa', 'Mahasiswa', 'Aktif'),
(3, '124170002', 'DONA ARYANTI', '44a1b58db8bbcd4b5f4f334b9646584d', 'Mahasiswa', 'Aktif'),
(4, '124170003', 'NANDA RIZKY WIDYANTO', 'b4765630b6a58b31a286249ed651f22a', 'Mahasiswa', 'Aktif'),
(5, '124170004', 'MUHAMMAD LUQMANUL HAKIM', '3f71dd6ad1b794546318f9d53f62e7c0', 'Mahasiswa', 'Aktif'),
(6, '124170005', 'MUHAMMAD RAFI FADHLURRAHMAN', '1f0121902c9c20969717cfaf0febcfad', 'Mahasiswa', 'Aktif'),
(7, '124170006', 'RAMADHAN DESTRIANTO', '8919590e64bfa67e0c2d47377c2804a1', 'Mahasiswa', 'Aktif'),
(8, '124170007', 'BRILLIANT HANIF ALMUBARAK', '3479f600635069b7a3de2f3c3f367940', 'Mahasiswa', 'Aktif'),
(9, '124170008', 'MIKHAEL SITORUS', '0e61d1f6568a6aa4dfc5e000878bda98', 'Mahasiswa', 'Aktif'),
(10, '124170009', 'FARIED AGUNG LEKSONO', '619b85ba233c6a279d0a886431b71fae', 'Mahasiswa', 'Aktif'),
(11, '124170010', 'KHOIRUL BAHRI NASUTION', 'd3f54f23f84bdb68b70a217c542df11c', 'Mahasiswa', 'Aktif'),
(12, '124170011', 'ANGELICA AMARTYA PUTRI', '7a2cba8c2d8d7b0e2d8a07848aa14954', 'Mahasiswa', 'Aktif'),
(13, '124170012', 'AZYUMARDI AZRA', '0eb520c1c88363190309fc805c1a75f6', 'Mahasiswa', 'Aktif'),
(14, '124170013', 'DANANG ABDUL MUIS HADI', 'ca699c32aff8ec78bd8b0f7a997548e5', 'Mahasiswa', 'Aktif'),
(15, '124170014', 'NAUFAL FAKHRI', '0f41c6a8ac93068d99812f392daba572', 'Mahasiswa', 'Aktif'),
(16, '124170016', 'MUHAMMAD HAFIEDZ DANDY KHADAFI', '5ee0ae958652859cc96bc39df19a3e4b', 'Mahasiswa', 'Aktif'),
(17, '124170017', 'ALIYA PUTRI DEWINTHA', '7db2a836af4562e2686979b9597b7696', 'Mahasiswa', 'Aktif'),
(18, '124170018', 'MEGA OKTAVIANI', 'b53ec488cedfb127769c6d77ff9934c5', 'Mahasiswa', 'Aktif'),
(19, '124170019', 'MUHAMMAD AFIN FAUZI', '1d97c31d7a08f562c4effe1d57f3ba55', 'Mahasiswa', 'Aktif'),
(20, '124170021', 'MUHAMMAD RUBBEL LUTHFI DIWANUJAN', '785a66a5d8e93826ea2e57809a4ff967', 'Mahasiswa', 'Aktif'),
(21, '124170022', 'GILBERT GIORALDO MAULANY', '233810e7765312c9885e12ce57ca643f', 'Mahasiswa', 'Aktif'),
(22, '124170023', 'FAIRUZ AKMAL LANANG', '2149f7da9e2199f7c8bf88650989711f', 'Mahasiswa', 'Aktif'),
(23, '124170024', 'DYAH AYU SUCI ILHAMI', '7ebbaace4912d7e535493078e5e2aacc', 'Mahasiswa', 'Aktif'),
(24, '124170025', 'TAUFIQ ALHAKIM', 'e9c4296c29e7c94890c308f94b66fd53', 'Mahasiswa', 'Aktif'),
(25, '124170026', 'DAFFA AULIA ZAKHARIA', '5b906e254366adde87dfa293a6f97d37', 'Mahasiswa', 'Aktif'),
(26, '124170027', 'GIWANG NUELSYAPUTRI', 'cd367c5a469f12446d50387bd620f941', 'Mahasiswa', 'Aktif'),
(27, '124170028', 'FEBI ANDRIA PUTRA', '88019dc1ffa42ed4712fc51abdb944fc', 'Mahasiswa', 'Aktif'),
(28, '124170029', 'YANU RAMDHANI SAPUTRA', '271028f0e2cbab73bccca20b75860aa7', 'Mahasiswa', 'Aktif'),
(29, '124170030', 'VIKRI ALIM MASYOGI', 'e6ce1e369b1e98459f53dc708945f5e9', 'Mahasiswa', 'Aktif'),
(30, '124170031', 'MUHAMMAD NUR HENDRA ALVIANTO', '588c73d48af14e2cc40f9cc607499a89', 'Mahasiswa', 'Aktif'),
(31, '124170032', 'HAWARY ANSORULLOH', 'c0a8a69a54c5760e91aa47f28083750a', 'Mahasiswa', 'Aktif'),
(32, '124170033', 'FANDI AGUS KUNCORO', '2c30e86c291319c13bd6b531fe62c2c6', 'Mahasiswa', 'Aktif'),
(33, '124170034', 'LINTANG HAKIMI', '6fbcb6996753c161dc0ee5cea809dcd5', 'Mahasiswa', 'Aktif'),
(34, '124170035', 'REZA RAMADEA PUTERA', 'c6c2551b942ab5529e2776ff8ec27dd2', 'Mahasiswa', 'Aktif'),
(35, '124170036', 'QORI FATKHUL KURNIYADI', '7e5a7f733b836f713961b91af30a9c07', 'Mahasiswa', 'Aktif'),
(36, '124170037', 'KEZIA MELISA', '7f7abba182f6d416f00fc3390353a7cd', 'Mahasiswa', 'Aktif'),
(37, '124170038', 'DICKY GUNAWAN MUSTAFA AZIS', '4e02dc46c87cd45fb81f0edb3f2a5344', 'Mahasiswa', 'Aktif'),
(38, '124170039', 'DIMAS YONANDA', '444e5b9ce6f43cf908ef999fa732621b', 'Mahasiswa', 'Aktif'),
(39, '124170040', 'FAGIL ARYA BASKORO', 'd4c0acf9b2116d3dd50a4d8122ca9f2e', 'Mahasiswa', 'Aktif'),
(40, '124180001', 'JAMES', '2cfc1874f3bd0cd9d7d6ba4ce04c2d77', 'Mahasiswa', 'Aktif'),
(41, '124180002', 'LUCKY GINANJAR', '744e7c73add44f822312ffb7cce9756f', 'Mahasiswa', 'Aktif'),
(42, '124180003', 'ANGELI MARGARETHA', '23b15ce8abd63bd329d096e8afffd8c5', 'Mahasiswa', 'Aktif'),
(43, '124180004', 'GRACE MARIANA', '30ff48afd063f56903f9fdd1c1378235', 'Mahasiswa', 'Aktif'),
(44, '124180005', 'LIDYA ANGELINA SILITONGA', 'ebc98161cc3f4accd3907ccfaa73de60', 'Mahasiswa', 'Aktif'),
(45, '124180006', 'SEKAR RIZKI FEBRIYANTI', '1553f6eca97a2c12ec1ecccef29d54bc', 'Mahasiswa', 'Aktif'),
(46, '124180007', 'ADISTY RANIA FADHILA', '4df5e32e82ccdcfd91c6565c2c3ad61f', 'Mahasiswa', 'Aktif'),
(47, '124180008', 'RIFKI FIRMANSYAH', 'ee128a010ac377d4a0c6d7746bf41c31', 'Mahasiswa', 'Aktif'),
(48, '124180009', 'BERTHA OLIVERA LIVERIA GOWASA', '6f9e12f943971dfdb33c95344d902be5', 'Mahasiswa', 'Aktif'),
(49, '124180010', 'ULIL AZMI UTARI', '73f6cc3972645e6d2db9d118a1b47e41', 'Mahasiswa', 'Aktif'),
(50, '124180011', 'NABILA GITA RAMADHANTI', '6b59cb9d081b7af7b6f5175635fff977', 'Mahasiswa', 'Aktif'),
(51, '124180012', 'ATIKA NOVA PAKPAHAN', '1a7f5183e430f20e22e801797179fb45', 'Mahasiswa', 'Aktif'),
(52, '124180013', 'KUKUH SEPTIAN SETIYO ADI', '1e865c9281cc19e58a75befa0790b5cb', 'Mahasiswa', 'Aktif'),
(53, '124180014', 'BAMBANG BUDI SETIAWAN', 'f341e034604d33d3167b876cd065e60f', 'Mahasiswa', 'Aktif'),
(54, '124180015', 'ABD. ROFIK BUDIN', 'c7bbadda0d9c1d5c03c06f630e4e568c', 'Mahasiswa', 'Aktif'),
(55, '124180016', 'MUHAMMAD NABIL FITRAH', '2ece688e382acd890e941f252420faee', 'Mahasiswa', 'Aktif'),
(56, '124180017', 'ADITYA DWI CAHYO PUTRA', '91dfda8dd25d4467ba5adf566e627940', 'Mahasiswa', 'Aktif'),
(57, '124180018', 'TAUFIK HIDAYAT', '02c13a8161b82958d84cf2274fe1ca6a', 'Mahasiswa', 'Aktif'),
(58, '124180019', 'IVANOF FERNANDO DONACHU', '9c916a12d0fecb8eeec3779228110473', 'Mahasiswa', 'Aktif'),
(59, '124180020', 'DEBI EFRITA', 'b1adbeca7e3c93e96d3ef0a605574983', 'Mahasiswa', 'Aktif'),
(60, '124180021', 'M. ALIF HAMLIKA', '21f26880fa86a9dcfdd331cf5946ae2d', 'Mahasiswa', 'Aktif'),
(61, '124180022', 'KEVIN PRAPASKA PUTRA', 'be12d81792ef79ad0f1d3131564aeec9', 'Mahasiswa', 'Aktif'),
(62, '124180023', 'MARSELINDA AJENG SUWARNO PUTRI', '66503faea8f6bfd399037c092e07cd92', 'Mahasiswa', 'Aktif'),
(63, '124180024', 'TASYA AMELIA HARDINAL PUTRI', '6660cc4ff946ca3da854023b69b21fd7', 'Mahasiswa', 'Aktif'),
(64, '124180025', 'YOFAN ALFIATUR ROHMAN', 'debe5173526f94fe241f82036242c03e', 'Mahasiswa', 'Aktif'),
(65, '124180026', 'CATUR RAHMAT', '196404fb5dcb793ccca5542a39fc758c', 'Mahasiswa', 'Aktif'),
(66, '124180027', 'ANELTA TIRTA PUTRI SUBANDONO', 'de31675b829230d7e5dfbbec70126f35', 'Mahasiswa', 'Aktif'),
(67, '124180028', 'FEBRIAN DHIYA ULHAQ', '968cee9ef09d26395ddda59cc0fce7da', 'Mahasiswa', 'Aktif'),
(68, '124180029', 'ALEX MASROBI', 'e7668de072048e4f063e62f411d4fd05', 'Mahasiswa', 'Aktif'),
(69, '124180030', 'RAHADATUL RIZKY RAMADHAN', '4a2961df60fd48ed1121a2fe560255f9', 'Mahasiswa', 'Aktif'),
(70, '124180031', 'YUDISTIRA SATRIANANTA', '9d5c58055aa2c11c2c005d9880bbf4c0', 'Mahasiswa', 'Aktif'),
(71, '124180032', 'YESSA ISBRIYANSA HARMADE', 'cb515741f93f1b2903c62070fdca1b19', 'Mahasiswa', 'Aktif'),
(72, '124180033', 'BUDHI BHAKTI WIRA UTAMA', '1762053c07dc092ea0558fc8bbfc4c7f', 'Mahasiswa', 'Aktif'),
(73, '124180034', 'ANDRIAN RIZQI MUHAMMAD', 'bd2d17368d761fa3657052200b363b0a', 'Mahasiswa', 'Aktif'),
(74, '124180035', 'RAINNER IVANOV SAVIO NAHAK', '87aad086c4d63398ae7aa59f16eebcc7', 'Mahasiswa', 'Aktif'),
(75, '124180036', 'NURUL HANA SINTYA', '71ab0773662056f490b116f0465cf86a', 'Mahasiswa', 'Aktif'),
(76, '124180037', 'RIZKY MAHFUDDIN HARAHAP', 'd2ddb4158fbfa950a1f57f10aed93141', 'Mahasiswa', 'Aktif'),
(77, '124180038', 'FADHLURRAHMAN ARYO WICAKSONO', 'c7bb3179fd119c4e6c06c159e0869da4', 'Mahasiswa', 'Aktif'),
(78, '124180039', 'NAUFAL FADHILLAH', '309ab85fdfcd977c90b050872ee1672c', 'Mahasiswa', 'Aktif'),
(79, '124180040', 'RADEN RARA ANINDYA DIAN PERTIWI', '1a882a012b22f30d22091dd23ca66fd5', 'Mahasiswa', 'Aktif'),
(80, '124180041', 'MONICA AMEILIANA ANDISTA MUNTHE', '14e970f0967b0c46c064814cc649552f', 'Mahasiswa', 'Aktif'),
(81, '124180042', 'MUHAMMAD ANDIKA ARYASATYA PUTRA', '74e499a2e5aa0faa0e1338ccacfcc421', 'Mahasiswa', 'Aktif'),
(82, '124180043', 'KEVIN OKTANAYA SALMAN', 'bc19559712e4f2661882ef5b4f73273e', 'Mahasiswa', 'Aktif'),
(83, '124180044', 'ARIE PAMUNGKAS', '30f326bfd9cbdd35835ad4d25aba2c88', 'Mahasiswa', 'Aktif'),
(84, '124180045', 'FAIZ MUHAMMAD', '617089abbcaee01104b250103a019c73', 'Mahasiswa', 'Aktif'),
(85, '124180046', 'SHIDQI MAULANA', 'ecb722ab4c04879e3dc2c86a339371e5', 'Mahasiswa', 'Aktif'),
(86, '124180047', 'MUHAMMAD YUSUF ADI PURWANTO', 'c5feff785204fa1fca424ff8c368e3d1', 'Mahasiswa', 'Aktif'),
(87, '124180048', 'Muhammad Raihan Hafiz', 'e4f5b95fd70bca7e03dd4a66a387a5e1', 'Mahasiswa', 'Aktif'),
(88, '124180049', 'GALUH RORO VEBIANA', 'aa790fd1b1acfb9771ca8c746cdf3bb7', 'Mahasiswa', 'Aktif'),
(89, '124180050', 'ISHAQ ADHELTYO', '8ae49a432cfc1e7b18df4da544a69a86', 'Mahasiswa', 'Aktif'),
(90, '124180051', 'OKTAVIA ISNANIA PUTRI', 'f16e8d07ff50574f88d028c1e2b9c693', 'Mahasiswa', 'Aktif'),
(91, '124180052', 'ALDIAN YUDHA RHAFIF', '1290f550238b469ffe4ada4a1c091354', 'Mahasiswa', 'Aktif'),
(92, '124180053', 'JERRY ONG', '15c4651dbf3c81615caba567d3291648', 'Mahasiswa', 'Aktif'),
(93, '124180054', 'MUHAMMAD FARHAN RULLY FERDIAN', '614b303f8bad418c100b37aaae7240d0', 'Mahasiswa', 'Aktif'),
(94, '124180055', 'NAUFAL NUR AIDIL', '14b3a1a3b03d7d9e9f8053e50690b5c0', 'Mahasiswa', 'Aktif'),
(95, '124180056', 'MUHAMMAD RIZKI HIDAYAT', 'a736476706e5f380efaf9f4ad3ae80ce', 'Mahasiswa', 'Aktif'),
(96, '124180057', 'ZHAFIRAH AZ-ZAHRA', 'fab441fc61e77881fdd4d496499240db', 'Mahasiswa', 'Aktif'),
(97, '124180058', 'ADLI RAI RAFIF', 'b41c752afe735c25ad5da19b81d19b1f', 'Mahasiswa', 'Aktif'),
(98, '124180059', 'BAGAS TAUFIK MADHAWY', '02d6b0b6458092d45c8af2e56ba6e43f', 'Mahasiswa', 'Aktif'),
(99, '124180060', 'LUKMANUL HAKIM', 'a22c6a963eb82efcbfbaa83fe926f0f6', 'Mahasiswa', 'Aktif'),
(100, '124180061', 'ABHIRAMA MOHAMMAD', '4d63e16044005ee9c809da66fd8438fc', 'Mahasiswa', 'Aktif'),
(101, '124180062', 'DYAH ANGGRAINI KARTIKA PUTRI', 'b441524bb87ef6ca6da3e6ca37ad39be', 'Mahasiswa', 'Aktif'),
(102, '124180063', 'ALIF HIDAYAT', 'fb7d0e2ee3bafae5f221e82895c57507', 'Mahasiswa', 'Aktif'),
(103, '124180064', 'FIANA DEWI', 'c04b4080fd61a5bca26934954df159b3', 'Mahasiswa', 'Aktif'),
(104, '124180065', 'AURAMA ZULFA PRATAMA', '915908009924e1da8a6653a9cc3abde5', 'Mahasiswa', 'Aktif'),
(105, '124180066', 'FEBRINAWAN SATRIA ADHITAMA', 'b880346417aa76282b45008fd8d4a2ad', 'Mahasiswa', 'Aktif'),
(106, '124180067', 'AMIRA SALSABILA', '8bdd3dbd5e422eb5f1c0e7d4de069d65', 'Mahasiswa', 'Aktif'),
(107, '124180068', 'VALERIA PAULINI YUWONO', '4e331281ec1056d36d1ec8ebfe3ae277', 'Mahasiswa', 'Aktif'),
(108, '124180069', 'LUQIYYATUS SHOUBATIL ILMIYAH', '83fc3db168146b335603d6831cdf47d0', 'Mahasiswa', 'Aktif'),
(109, '124190001', 'RESTI AYUNDA SARI', 'ae077d50cfd9fa5a0c81c7bcba46a5be', 'Mahasiswa', 'Aktif'),
(110, '124190002', 'INGE DWI PRATIWI', '280c885492abee079ffdfd2d461a6c6c', 'Mahasiswa', 'Aktif'),
(111, '124190003', 'NURKHOFIFAH HAYATI', 'b80ed41c4cc0b32ec26661d8c42618a4', 'Mahasiswa', 'Aktif'),
(112, '124190004', 'FADHILLAH SANI', '4a02e7255b7330c6fdeaac97b24d3691', 'Mahasiswa', 'Aktif'),
(113, '124190005', 'ANGGI LAYLA AL - AFIFAH NASUTION', 'e4e0df2f8565aad60c36d8840cf70f8c', 'Mahasiswa', 'Aktif'),
(114, '124190006', 'YOLANDA DEBORA', '8bcffe83863550ca24864adbcb083430', 'Mahasiswa', 'Aktif'),
(115, '124190007', 'HANIK RIYADHOTUS SHOLIHAH', 'b20e94b18d8dc5b83b74b48916d221dd', 'Mahasiswa', 'Aktif'),
(116, '124190008', 'BERLYNDA AULIA ROSSI', 'b16f1aa5e9e5c849cea82ee5cfa6fb43', 'Mahasiswa', 'Aktif'),
(117, '124190009', 'IFTINAN HANIFATI AKSARI', 'aa40a8471e490c5dd824a8cce7e3ab09', 'Mahasiswa', 'Aktif'),
(118, '124190010', 'DEAVI ARIEFA WIDIASMARA', '960ab5ecfa20ec180679d179195291da', 'Mahasiswa', 'Aktif'),
(119, '124190011', 'WELLIS R. H . PANGGABEAN', 'ba3c6ac7d897054d01cba92999fc1ec4', 'Mahasiswa', 'Aktif'),
(120, '124190012', 'ANDHIKA RAMA AUDITYA', 'f6f36d4e65874b237000fde7c358f7e1', 'Mahasiswa', 'Aktif'),
(121, '124190013', 'KALVINA GABRIELLA', 'e4547ec4040caab3f1006ff37731d29f', 'Mahasiswa', 'Aktif'),
(122, '124190014', 'SYAFA ULLIA', '1e547c7876d9e3f9aa1e4faae543e5a1', 'Mahasiswa', 'Aktif'),
(123, '124190015', 'DELLA PUTRI HESTIANA', '72be7fdad546427e8d8e447b07abb573', 'Mahasiswa', 'Aktif'),
(124, '124190016', 'SURYA AJI PRATAMA', '807eebd3866885b28a907b9a13978cca', 'Mahasiswa', 'Aktif'),
(125, '124190017', 'LILY FADILA', 'eb799157afb4c23e2a4bfe58d61be9dd', 'Mahasiswa', 'Aktif'),
(126, '124190018', 'SEPTIA AFRI YENDA', '4787f84f96ecca69ce2888c823d42a40', 'Mahasiswa', 'Aktif'),
(127, '124190019', 'ANINDITA KHUSNUL OKTAVIA', '966b2fd451110607b13f8a83beee0249', 'Mahasiswa', 'Aktif'),
(128, '124190020', 'ALIF YULIANTO', '4331de11e9c7adee6a786db5ef034f7d', 'Mahasiswa', 'Aktif'),
(129, '124190021', 'UMI ROHMAH NUR HIDAYATI', '129940b248091d48ae2905bfc531fc7b', 'Mahasiswa', 'Aktif'),
(130, '124190022', 'ICHWAL MELIANTO', '87faf9600cf99b7ebde7cce63d83c7ea', 'Mahasiswa', 'Aktif'),
(131, '124190023', 'REYHAN DEVARA SAMUDRA', '4fa78b5d1721faa729bbbbdc9de84779', 'Mahasiswa', 'Aktif'),
(132, '124190024', 'FERINA AQILA REYHANDYA', 'c56432a81f0d6de7698a0ddcf9c7d560', 'Mahasiswa', 'Aktif'),
(133, '124190025', 'HANIF MAAJID', '21ed161f777a9fee69a1fa2661432785', 'Mahasiswa', 'Aktif'),
(134, '124190026', 'GABRIL CAHYA LUKITA', 'cdfe10a806c17e51f2b62f7659427805', 'Mahasiswa', 'Aktif'),
(135, '124190027', 'WAHYU PURWO YUWONO', '7a59388c6d56bf5ac0d556de722f1d4a', 'Mahasiswa', 'Aktif'),
(136, '124190028', 'FATIH SAFAAT DWI AFIAN', 'c49032d51f22e8157764c88c8e722e6a', 'Mahasiswa', 'Aktif'),
(137, '124190029', 'VIVO PUTRI WENERDA', '26102ed458e06efe1a88576282174153', 'Mahasiswa', 'Aktif'),
(138, '124190030', 'ERBINAR PAQUITA BR. MELIALA', 'a57f7385cc47b942448da2736e9367ca', 'Mahasiswa', 'Aktif'),
(139, '124190031', 'MUHAMMAD RIZKY ALFIAN NOOR', 'd33fdb9dec449eac4e7a96beedc2530e', 'Mahasiswa', 'Aktif'),
(140, '124190032', 'ODE ABDUL RASYID', '6137b6f19cc52b5fb428bc1b5f3ab86b', 'Mahasiswa', 'Aktif'),
(141, '124190033', 'THALIB ABU QITAAL', 'a6e9e3aa803b39ddae6d63e58c1924e8', 'Mahasiswa', 'Aktif'),
(142, '124190034', 'REIHAN HERIANTONO', '88980214d5d8395f7282da527a67f905', 'Mahasiswa', 'Aktif'),
(143, '124190035', 'CAROL EMMANUEL YUNIOR RIKIN', 'bf5ad8c576172d55dcaac03d7acb3e3e', 'Mahasiswa', 'Aktif'),
(144, '124190036', 'FAZA RAYHANOVA', '1ac30932ffe772600ef55b02471906eb', 'Mahasiswa', 'Aktif'),
(145, '124190037', 'ANGGITA SETIYANI PUTRI', '6f2089fdee2ef44821d36e04f3f795dc', 'Mahasiswa', 'Aktif'),
(146, '124190038', 'RIZQI AKBAR DERMAWAN', 'd238d4b744a12c973af16c8acd582fe4', 'Mahasiswa', 'Aktif'),
(147, '124190039', 'ADJIE DJAKA PERMANA', '93a30dad569375d302dd106de582630d', 'Mahasiswa', 'Aktif'),
(148, '124190040', 'AHMADA PRIMANDA BRAMANTYO', '874ab0e91615bf8a004cfaa7b1ff3a30', 'Mahasiswa', 'Aktif'),
(149, '124190041', 'BIMA ARYA TIANTO', '8b3bed25212e7e3f4971f7c38e477bf3', 'Mahasiswa', 'Aktif'),
(150, '124190042', 'YOHANES ADEO ALLEN NATHANAEL', '9822c762fbf39adf1f82c4844ad2d32c', 'Mahasiswa', 'Aktif'),
(151, '124190043', 'MUHAMMAD RAIHANSYAH ABIRAMA', '17479008c46cd245e3de725e42744c79', 'Mahasiswa', 'Aktif'),
(152, '124190044', 'PANDU DHAULAGIRI', 'dbaa1b269a46e56ffb7117577afd67af', 'Mahasiswa', 'Aktif'),
(153, '124190045', 'LUQMANUL HAKIM', '366c91dd5b98ab8e46b01fbfc68aaf8b', 'Mahasiswa', 'Aktif'),
(154, '124190046', 'MUHAMMAD RIDHWAN SANTOSA', '46ec844266f9b040d9af48f93ee08e48', 'Mahasiswa', 'Aktif'),
(155, '124190047', 'AKBARA JATI GAYUH RISANGAJI', 'e5405a345f9ea413eeb6ce9925fde408', 'Mahasiswa', 'Aktif'),
(156, '124190048', 'KARINA SEKAR ARUM', 'e292350790abd7d5a2142425319c7bce', 'Mahasiswa', 'Aktif'),
(157, '124190049', 'NURFARIDA SEKAR ANDZANI', '14729b47d0293150099060e8f027db0a', 'Mahasiswa', 'Aktif'),
(158, '124190050', 'PRADIPTA AJI RASYID SIDIQ', '95eb175a3c0dd7076d351cfd1f706415', 'Mahasiswa', 'Aktif'),
(159, '124190051', 'YUDHA KHOIRUNNAS AJIPUTRA', '76537f76ea8dfe2b8f144dda17e95f07', 'Mahasiswa', 'Aktif'),
(160, '124190052', 'ILMA FAJRINA RAHMADINA HIMAWAN', 'ff69869239a170700d9f07d632cb07d0', 'Mahasiswa', 'Aktif'),
(161, '124190053', 'MUCHAMMAD RAFI` MAULANA', '5384b3ce89faa01dc4ad8bb8bfeda5bc', 'Mahasiswa', 'Aktif'),
(162, '124190054', 'ALTRARIQ WELFARE YUBAIDI', 'bee1cdde61cb303671afdaa49ceaa33b', 'Mahasiswa', 'Aktif'),
(163, '124190055', 'PUTRIMA AZIZI AL FAUZTINA', '6097e8d37ed26a4c67e0ba96e474c830', 'Mahasiswa', 'Aktif'),
(164, '124190056', 'LATIEF IRFANSYAH', 'ae3046201298929d0d7c25f565f15003', 'Mahasiswa', 'Aktif'),
(165, '124190057', 'MUHAMMAD FAUZAN SULAEMAN', '7d77ea2384435934bd1e716fda12e70d', 'Mahasiswa', 'Aktif'),
(166, '124190058', 'PATRICK SAMUEL OWEN SARITUA SINAGA', 'd4a70ae3e6300e8795fe3f92aa2d8b2a', 'Mahasiswa', 'Aktif'),
(167, '124190059', 'GATAN AGRASYACH DEWARA', 'e81b073832abdc952f15aabaab68cf3b', 'Mahasiswa', 'Aktif'),
(168, '124190060', 'VISKA ALIFIA DIANTI', '2d6932258e46caa3a80ece2a6346be62', 'Mahasiswa', 'Aktif'),
(169, '124190061', 'MUHAMMAD RIFKI ARIFFIN', '95df9342a2209306b7d7f8f239b02e3d', 'Mahasiswa', 'Aktif'),
(170, '124190062', 'DINI PUTRI HANDAYANI', '15d593f2158a4e4f9b1a3473363b148a', 'Mahasiswa', 'Aktif'),
(171, '124190063', 'NABILLA PUTRI WAHYUNINGTYAS', 'cf2fe462556d08ed6db71443b0622475', 'Mahasiswa', 'Aktif'),
(172, '124190064', 'MARIA YOSEPHA GALUH PRAMESTI', '81c3e04b60e0f4b333b294fa8f526f28', 'Mahasiswa', 'Aktif'),
(173, '124190065', 'FACHRIZA BASKARA', '4e05d94072ce272cc8f441e9ea963cfa', 'Mahasiswa', 'Aktif'),
(174, '124190066', 'DANY KUMARA AJI', '3ba00d5b631f28cb6cd65f7390e95824', 'Mahasiswa', 'Aktif'),
(175, '124190067', 'ARYA ADHI PRADANA', 'e2a7590583af654423c33269e1f9cb00', 'Mahasiswa', 'Aktif'),
(176, '124190068', 'KRISNA DEWA NANDA', '413958014d5900c0b3a4b2008b5db237', 'Mahasiswa', 'Aktif'),
(177, '124190069', 'ERMIN FADLINA ROSYIDA', 'c4924f07e303489d3684ee23cd6eb6cc', 'Mahasiswa', 'Aktif'),
(178, '124190070', 'MUFLIHUL HAKIM', '68aeb1deac466a1fc32e5a881f511aae', 'Mahasiswa', 'Aktif'),
(179, '124190071', 'ABDULLAH UBAB ALI MURTADLO', 'adce3a00210861bc39821091860d7188', 'Mahasiswa', 'Aktif'),
(180, '124190072', 'SEVIANA INTAN FATIMA', 'cae9183339a2517f319e521ea8f59809', 'Mahasiswa', 'Aktif'),
(181, '124190073', 'ENDANG HERLINA', '34cb5c1d07787f5b265eddb93bfba3f3', 'Mahasiswa', 'Aktif'),
(182, '124190074', 'IVONNI TIAHAQ', '01d65081af75544e91369a63512b1c7e', 'Mahasiswa', 'Aktif'),
(183, '124190075', 'PRADANA ALDI MUSTHOFA', '245ab311d1d1ef969a9dbc1b84724d74', 'Mahasiswa', 'Aktif'),
(184, '124190076', 'SYAH RIZAL ALMEDIFA', '637f82e44173f5bead3c2011632122a7', 'Mahasiswa', 'Aktif'),
(185, '124190077', 'HAYDAR DZAKY BARIDHWAN', '60b597d50920e6d83a890660597a2fce', 'Mahasiswa', 'Aktif'),
(186, '124190078', 'MIFTAHUR SIDQ AZIZ', '9c6c452d566ef2d6fa4185a81b99e6ff', 'Mahasiswa', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `login old`
--

CREATE TABLE IF NOT EXISTS `login old` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `name` varchar(36) NOT NULL,
  `password` varchar(60) NOT NULL,
  `status` varchar(12) NOT NULL,
  `keterangan` varchar(8) NOT NULL,
  PRIMARY KEY (`userID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `login old`
--

INSERT INTO `login old` (`userID`, `username`, `name`, `password`, `status`, `keterangan`) VALUES
(1, '124180001', '', '2cfc1874f3bd0cd9d7d6ba4ce04c2d77', 'Mahasiswa', 'Aktif'),
(61, 'herrys', '', 'edf0921bff1aacbc5a6e9ec951c5e82a', 'Admin', 'Aktif'),
(78, '123170001', '', '92ec3ebc03038c204f6cd3a7a24d5d30', 'Mahasiswa', 'Aktif'),
(79, 'admin', '', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `mka`
--

CREATE TABLE IF NOT EXISTS `mka` (
  `Kode` varchar(7) DEFAULT NULL,
  `MKA` varchar(44) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mka`
--

INSERT INTO `mka` (`Kode`, `MKA`) VALUES
('1000012', 'Pendidikan Agama Islam'),
('1000022', 'Pendidikan Agama Kristen'),
('1000032', 'Pendidikan Agama Katholik'),
('1000042', 'Pendidikan Agama Hindu'),
('1000052', 'Pendidikan Agama Budha'),
('1000062', 'Pendidikan Agama Kong Hu Cu'),
('1240012', 'Pengantar Teknologi Informasi dan Komunikasi'),
('1000072', 'Pancasila'),
('1240023', 'Algoritma dan Pemrograman I'),
('1240033', 'Kalkulus'),
('1200012', 'Konsep Teknologi'),
('1240043', 'Manajemen Basis Data'),
('1000101', 'Olahraga I'),
('1000132', 'Bahasa Inggris'),
('1240073', 'Pengantar Sistem Informasi'),
('1240083', 'Algoritma dan Pemrograman II'),
('1000092', 'Bela Negara dan Widya Mwat Yasa'),
('1240092', 'Dasar-Dasar Manajemen'),
('1240102', 'Pemrograman Web'),
('1000111', 'Olahraga II'),
('1240133', 'Struktur Data'),
('1240143', 'Matematika Diskrit'),
('1240152', 'Statistika Bisnis'),
('1240162', 'Sistem Operasi'),
('1240173', 'Pemrograman Berorintasi Objek'),
('1000122', 'Bahasa Indonesia'),
('1240182', 'Teori dan Perilaku Organisasi'),
('1240213', 'Jaringan Komputer'),
('1240222', 'Interaksi Manusia dan Komputer'),
('1240232', 'Arsitektur dan Organisasi Komputer'),
('1240243', 'e-Commerce'),
('1240253', 'Pemrograman Mobile'),
('1240262', 'Informatika Sosial'),
('1240272', 'Pemodelan Proses Bisnis'),
('1240383', 'Manajemen Proyek Perangkat Lunak'),
('1240393', 'Sistem Pendukung Keputusan'),
('1240403', 'Proteksi Aset Informasi'),
('1240412', 'Metodologi Penulisan Ilmiah'),
('1240423', 'Kerja Praktik '),
('1240433', 'Uji Kualitas Perangkat Lunak'),
('1240443', 'Tata Kelola dan Audit SI/TI'),
('1240453', 'Tugas Akhir I'),
('1240462', 'Kapita Selekta'),
('1000143', 'KKN'),
('1240493', 'Tugas Akhir II'),
('1240503', 'Manajemen Pengelolaan Lapangan Migas'),
('1240513', 'Manajemen Pengelolaan Tambang'),
('1240523', 'Manajemen Bencana'),
('1240533', 'Manajemen Lingkungan, Mineral dan Energi'),
('1240543', 'Manajemen Kualitas TI '),
('1240553', 'Manajemen Resiko TI '),
('1240563', 'Teknologi Cloud'),
('1240573', 'Manajemen Rantai Pasok'),
('1240583', 'Integrasi Aplikasi Korporasi'),
('1240593', 'Bisnis Cerdas'),
('1240603', 'Arsitektur Enterprise'),
('1240613', 'Integrasi Sistem');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `IDmka` int(11) NOT NULL AUTO_INCREMENT,
  `sem` varchar(1) DEFAULT NULL,
  `kode` varchar(7) DEFAULT NULL,
  `mka` varchar(35) DEFAULT NULL,
  `sks` int(1) DEFAULT NULL,
  `nilai` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`IDmka`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`IDmka`, `sem`, `kode`, `mka`, `sks`, `nilai`) VALUES
(1, '1', '1000012', 'Pendidikan Agama Islam', 2, 'A'),
(2, '1', '1000022', 'Pendidikan Agama Kristen', 2, ''),
(3, '1', '1000032', 'Pendidikan Agama Katholik', 2, ''),
(4, '1', '1000042', 'Pendidikan Agama Hindu', 2, ''),
(5, '1', '1000052', 'Pendidikan Agama Budha', 2, ''),
(6, '1', '1000062', 'Pendidikan Agama Kong Hu Cu', 2, ''),
(7, '1', '1240012', 'Pengantar Tek. Info dan Komunikasi', 2, 'A'),
(8, '1', '1000072', 'Pancasila', 2, 'B'),
(9, '1', '1240023', 'Algoritma dan Pemrograman I', 3, ''),
(10, '1', '1240033', 'Kalkulus', 3, ''),
(11, '1', '1200012', 'Konsep Teknologi', 2, ''),
(12, '1', '1240043', 'Manajemen Basis Data', 3, ''),
(13, '1', '1000101', 'Olahraga I', 1, ''),
(14, '1', '1240051', 'Praktikum Manajemen Basis Data', 1, ''),
(15, '1', '1240061', 'Praktikum Algoritma Pemrograman I', 1, ''),
(16, '2', '1000132', 'Bahasa Inggris', 2, ''),
(17, '2', '1240073', 'Pengantar Sistem Informasi', 3, ''),
(18, '2', '1240083', 'Algoritma dan Pemrograman II', 3, ''),
(19, '2', '1000092', 'Bela Negara dan Widya Mwat Yasa', 2, ''),
(20, '2', '1240092', 'Dasar-Dasar Manajemen', 2, ''),
(21, '2', '1240102', 'Pemrograman Web', 2, ''),
(22, '2', '1000111', 'Olahraga II', 1, ''),
(23, '2', '1000082', 'Pendidikan Kewarganegaraan', 2, ''),
(24, '2', '1240111', 'Praktikum Algoritma Pemrograman II', 1, ''),
(25, '2', '1240121', 'Praktikum Pemrograman Web', 1, ''),
(26, '3', '1240133', 'Struktur Data', 3, ''),
(27, '3', '1240143', 'Matematika Diskrit', 3, ''),
(28, '3', '1240152', 'Statistika Bisnis', 2, ''),
(29, '3', '1240162', 'Sistem Operasi', 2, ''),
(30, '3', '1240173', 'Pemrograman Berorintasi Objek', 3, ''),
(31, '3', '1000122', 'Bahasa Indonesia', 2, ''),
(32, '3', '1240182', 'Teori dan Perilaku Organisasi', 2, ''),
(33, '3', '1240191', 'Praktikum Struktur Data', 1, ''),
(34, '3', '1240201', 'Praktikum PBO', 1, ''),
(35, '4', '1240213', 'Jaringan Komputer', 3, ''),
(36, '4', '1240222', 'Interaksi Manusia dan Komputer', 2, ''),
(37, '4', '1240232', 'Arsitektur dan Organisasi Komputer', 2, ''),
(38, '4', '1240243', 'e-Commerce', 3, ''),
(39, '4', '1240253', 'Pemrograman Mobile', 3, ''),
(40, '4', '1240262', 'Informatika Sosial', 2, ''),
(41, '4', '1240272', 'Pemodelan Proses Bisnis', 2, ''),
(42, '4', '1240281', 'Praktikum Pemrograman Mobile', 1, ''),
(43, '4', '1240291', 'Praktikum Jaringan Komputer', 1, ''),
(44, '5', '1200022', ' Technopreneurship', 2, ''),
(45, '5', '1240303', 'Sistem Informasi Akuntansi', 3, ''),
(46, '5', '1240312', 'Manajemen Sains', 2, ''),
(47, '5', '1240323', 'Manajemen Investasi TI', 3, ''),
(48, '5', '1240333', 'Rancang Bangun Perangkat Lunak', 3, ''),
(49, '5', '1240343', 'Sistem Informasi Geografi', 3, ''),
(50, '5', '1240353', 'Data Mining dan Data Warehousing', 3, ''),
(51, '5', '1240361', 'Praktikum Sistem Informasi Geografi', 1, ''),
(52, '5', '1240371', 'Praktikum RBPL', 1, ''),
(53, '6', '1240383', 'Manajemen Proyek Perangkat Lunak', 3, ''),
(54, '6', '1240393', 'Sistem Pendukung Keputusan', 3, ''),
(55, '6', '1240403', 'Proteksi Aset Informasi', 3, ''),
(56, '6', '1240412', 'Metodologi Penulisan Ilmiah', 2, ''),
(57, '6', '1240423', 'Kerja Praktik ', 3, ''),
(58, '6', '1240503', 'Manaj. Pengelolaan Lapangan Migas', 3, ''),
(59, '6', '1240513', 'Manajemen Pengelolaan Tambang', 3, ''),
(60, '7', '1240433', 'Uji Kualitas Perangkat Lunak', 3, ''),
(61, '7', '1240443', 'Tata Kelola dan Audit SI/TI', 3, ''),
(62, '7', '1240453', 'Tugas Akhir I', 3, ''),
(63, '7', '1240462', 'Kapita Selekta', 2, ''),
(64, '7', '1240543', 'Manajemen Kualitas TI ', 3, ''),
(65, '7', '1240553', 'Manajemen Resiko TI ', 3, ''),
(66, '7', '1240563', 'Teknologi Cloud', 3, ''),
(67, '8', '1000143', 'KKN', 3, ''),
(68, '8', '1240493', 'Tugas Akhir II', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `orangtua`
--

CREATE TABLE IF NOT EXISTS `orangtua` (
  `nim` varchar(9) NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `kerja_ayah` varchar(16) NOT NULL,
  `telp_ayah` varchar(14) NOT NULL,
  `ibu` varchar(30) NOT NULL,
  `kerja_ibu` varchar(16) NOT NULL,
  `telp_ibu` varchar(14) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `propinsi` varchar(20) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orangtua`
--

INSERT INTO `orangtua` (`nim`, `ayah`, `kerja_ayah`, `telp_ayah`, `ibu`, `kerja_ibu`, `telp_ibu`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten`, `propinsi`) VALUES
('123170001', 'Drs. Sutrisno Wondo, M.Ph.', 'Dosen', '08122876554', 'Dr. RR. Yasmin Widya', 'Dokter', '087765432109', 'Jl. Merdeka Timur, No.17', 'Surakarasa', 'Sukamiskin', 'Tangerang', 'Banten');

-- --------------------------------------------------------

--
-- Table structure for table `propinsi`
--

CREATE TABLE IF NOT EXISTS `propinsi` (
  `ID` varchar(3) DEFAULT NULL,
  `Propinsi` varchar(20) DEFAULT NULL,
  `Ibu Kota` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `propinsi`
--

INSERT INTO `propinsi` (`ID`, `Propinsi`, `Ibu Kota`) VALUES
('p01', 'Aceh', 'Banda Aceh'),
('p02', 'Sumatera Utara', 'Medan'),
('p03', 'Sumatera Barat', 'Padang'),
('p04', 'Riau', 'Pekanbaru'),
('p05', 'Kepulauan Riau', 'Tanjung Pinang'),
('p06', 'Jambi', 'Jambi'),
('p07', 'Bengkulu', 'Bengkulu'),
('p08', 'Sumatera Selatan', 'Palembang'),
('p09', 'Kep. Bangka Belitung', 'Pangkalpinang'),
('p10', 'Lampung', 'Banda Lampung'),
('p11', 'Banten', 'Serang'),
('p12', 'Jawa Barat', 'Bandung'),
('p13', 'DKI Jakarta', 'Jakarta'),
('p14', 'Jawa Tengah', 'Semarang'),
('p15', 'DI Yogyakarta', 'Yogyakarta'),
('p16', 'Jawa Timur', 'Surabaya'),
('p17', 'Bali', 'Denpasar'),
('p18', 'Nusa Tenggara Barat', 'Mataram'),
('p19', 'Nusa Tenggara Timur', 'Kupang'),
('p20', 'Kalimantan Utara', 'Tanjungselor'),
('p21', 'Kalimantan Barat', 'Pontianak'),
('p22', 'Kalimantan Tengah', 'Palangkaraya'),
('p23', 'Kalimantan Selatan', 'Banjarmasin'),
('p24', 'Kalimantan Timur', 'Samarinda'),
('p25', 'Gorontalo', 'Gorontalo'),
('p26', 'Sulawesi Utara', 'Manado'),
('p27', 'Sulawesi Barat', 'Mamuju'),
('p28', 'Sulawesi Tengah', 'Palu'),
('p29', 'Sulawesi Selatan', 'Makassar'),
('p30', 'Sulawesi Tenggara', 'Kendari'),
('p31', 'Maluku Utara', 'Sofifi'),
('p32', 'Maluku', 'Ambon'),
('p33', 'Papua Barat', 'Manokwari'),
('p34', 'Papua', 'Jayapura');

-- --------------------------------------------------------

--
-- Table structure for table `score_kuesioner`
--

CREATE TABLE IF NOT EXISTS `score_kuesioner` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(95) DEFAULT NULL,
  `score` decimal(4,2) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `score_kuesioner`
--

INSERT INTO `score_kuesioner` (`ID`, `item`, `score`) VALUES
(1, 'Dosen menyediakan silabus mata kuliah', '4.50'),
(2, 'Dosen mendiskusikan silabus dengan mahasiswa', '2.00'),
(3, 'Dosen menyediakan bahan bacaan yang sesuai dengan materi silabus', '1.50'),
(4, 'Dosen memperlihatkan penguasaan materi mata kuliah', '2.00'),
(5, 'Dosen mengajarkan materi dengan metode yang efektif', '2.00'),
(6, 'Dosen selalu memberi contoh konkrit setiap menjelaskan suatu hal', '2.00'),
(7, 'Dosen sangat komunikatif', '1.50'),
(8, 'Dosen menciptakan suasana kelas yang kondusif / membuat mahasiswa termotivasi', '2.50'),
(9, 'Dosen mengajar tidak terlalu cepat / lambat, sehingga mudah dimengerti mahasiswa', '2.50'),
(10, 'Dosen selalu memberi kesempatan mahasiswa untuk bertanya', '2.00'),
(11, 'Materi dari mata kuliah telah menambah / memperluas pengetahuan dan wawasan mahasiswa', '2.00'),
(12, 'Mahasiswa puas setelah mengikuti perkuliahan mata kuliah tersebut', '2.00'),
(13, 'Mata kuliah tersebut sangat mudah dipahami mahasiswa', '2.00'),
(14, 'Dosen menciptakan suasana kelas yang menyenangkan', '2.50'),
(15, 'Dosen memperlihatkan sikap menghormati mahasiswa dan mendorong / memotivasi mahasiswa', '2.00'),
(16, 'Dosen terampil menggunakan teknologi modern dalam memberi kuliah', '2.00'),
(17, 'Dosen selalu mengembalikan hasil tes / tugas kepada mahasiswa dalam waktu yang wajar', '2.00'),
(18, 'Dosen tidak banyak bercerita tentang hal diluar materi mata kuliah yang bersangkutan', '2.00'),
(19, 'Buku tes untuk mata kuliah tersebut mudah didapat', '2.50'),
(20, 'Materi mata kuliah selalu diperbaharui dengan contoh atau perkembangan terakhir', '2.00'),
(21, 'Isi buku teks / bahan mata kuliah mudah dipahami', '1.50'),
(22, 'Dosen selalu hadir memberi kuliah setiap pertemuan', '2.00'),
(23, 'Dosen hadir di kelas tepat waktu', '2.50'),
(24, 'Dosen tidak pernah meniadakan kuliah tanpa alasan', '1.50'),
(25, 'Dosen meninggalkan kelas tepat waktu', '0.00'),
(26, 'Dosen memberi penilaian yang obyektif', '1.50'),
(27, 'Dosen selalu memberi penjelasan tentang cara menilai', '2.00'),
(28, 'Dosen selalu mengembalikan hasil tes / tugas dengan catatan / komentar', '2.50'),
(29, 'Materi tugas, tes, dan ujian sesuai dengan materi mata kuliah dan selaras dengan isi silabus', '2.00'),
(30, 'Dosen selalu mengembalikan hasil tes / tugas kepada mahasiswa dalam waktu yang wajar', '2.00'),
(31, 'Dosen mudah ditemui diluar kelas', '2.00'),
(32, 'Dosen berwibawa dimata mahasiswa', '1.50'),
(33, 'Dosen memberi pendidikan tentang nilai (values), moral, etika selain tentang materi mata kuliah', '2.00');

-- --------------------------------------------------------

--
-- Table structure for table `table 14`
--

CREATE TABLE IF NOT EXISTS `table 14` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` varchar(15) DEFAULT NULL,
  `Username` varchar(40) DEFAULT NULL,
  `Password` varchar(55) DEFAULT NULL,
  `Status` varchar(12) DEFAULT NULL,
  `Keterangan` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=187 ;

--
-- Dumping data for table `table 14`
--

INSERT INTO `table 14` (`ID`, `UserID`, `Username`, `Password`, `Status`, `Keterangan`) VALUES
(1, 'admin', 'Herry Sofyan', 'admin', 'Admin', 'Aktif'),
(2, '124170001', 'AZURI KAMIL PASHA', 'si170001', 'Mahasiswa', 'Aktif'),
(3, '124170002', 'DONA ARYANTI', 'si170002', 'Mahasiswa', 'Aktif'),
(4, '124170003', 'NANDA RIZKY WIDYANTO', 'si170003', 'Mahasiswa', 'Aktif'),
(5, '124170004', 'MUHAMMAD LUQMANUL HAKIM', 'si170004', 'Mahasiswa', 'Aktif'),
(6, '124170005', 'MUHAMMAD RAFI FADHLURRAHMAN', 'si170005', 'Mahasiswa', 'Aktif'),
(7, '124170006', 'RAMADHAN DESTRIANTO', 'si170006', 'Mahasiswa', 'Aktif'),
(8, '124170007', 'BRILLIANT HANIF ALMUBARAK', 'si170007', 'Mahasiswa', 'Aktif'),
(9, '124170008', 'MIKHAEL SITORUS', 'si170008', 'Mahasiswa', 'Aktif'),
(10, '124170009', 'FARIED AGUNG LEKSONO', 'si170009', 'Mahasiswa', 'Aktif'),
(11, '124170010', 'KHOIRUL BAHRI NASUTION', 'si170010', 'Mahasiswa', 'Aktif'),
(12, '124170011', 'ANGELICA AMARTYA PUTRI', 'si170011', 'Mahasiswa', 'Aktif'),
(13, '124170012', 'AZYUMARDI AZRA', 'si170012', 'Mahasiswa', 'Aktif'),
(14, '124170013', 'DANANG ABDUL MUIS HADI', 'si170013', 'Mahasiswa', 'Aktif'),
(15, '124170014', 'NAUFAL FAKHRI', 'si170014', 'Mahasiswa', 'Aktif'),
(16, '124170016', 'MUHAMMAD HAFIEDZ DANDY KHADAFI', 'si170016', 'Mahasiswa', 'Aktif'),
(17, '124170017', 'ALIYA PUTRI DEWINTHA', 'si170017', 'Mahasiswa', 'Aktif'),
(18, '124170018', 'MEGA OKTAVIANI', 'si170018', 'Mahasiswa', 'Aktif'),
(19, '124170019', 'MUHAMMAD AFIN FAUZI', 'si170019', 'Mahasiswa', 'Aktif'),
(20, '124170021', 'MUHAMMAD RUBBEL LUTHFI DIWANUJAN', 'si170021', 'Mahasiswa', 'Aktif'),
(21, '124170022', 'GILBERT GIORALDO MAULANY', 'si170022', 'Mahasiswa', 'Aktif'),
(22, '124170023', 'FAIRUZ AKMAL LANANG', 'si170023', 'Mahasiswa', 'Aktif'),
(23, '124170024', 'DYAH AYU SUCI ILHAMI', 'si170024', 'Mahasiswa', 'Aktif'),
(24, '124170025', 'TAUFIQ ALHAKIM', 'si170025', 'Mahasiswa', 'Aktif'),
(25, '124170026', 'DAFFA AULIA ZAKHARIA', 'si170026', 'Mahasiswa', 'Aktif'),
(26, '124170027', 'GIWANG NUELSYAPUTRI', 'si170027', 'Mahasiswa', 'Aktif'),
(27, '124170028', 'FEBI ANDRIA PUTRA', 'si170028', 'Mahasiswa', 'Aktif'),
(28, '124170029', 'YANU RAMDHANI SAPUTRA', 'si170029', 'Mahasiswa', 'Aktif'),
(29, '124170030', 'VIKRI ALIM MASYOGI', 'si170030', 'Mahasiswa', 'Aktif'),
(30, '124170031', 'MUHAMMAD NUR HENDRA ALVIANTO', 'si170031', 'Mahasiswa', 'Aktif'),
(31, '124170032', 'HAWARY ANSORULLOH', 'si170032', 'Mahasiswa', 'Aktif'),
(32, '124170033', 'FANDI AGUS KUNCORO', 'si170033', 'Mahasiswa', 'Aktif'),
(33, '124170034', 'LINTANG HAKIMI', 'si170034', 'Mahasiswa', 'Aktif'),
(34, '124170035', 'REZA RAMADEA PUTERA', 'si170035', 'Mahasiswa', 'Aktif'),
(35, '124170036', 'QORI FATKHUL KURNIYADI', 'si170036', 'Mahasiswa', 'Aktif'),
(36, '124170037', 'KEZIA MELISA', 'si170037', 'Mahasiswa', 'Aktif'),
(37, '124170038', 'DICKY GUNAWAN MUSTAFA AZIS', 'si170038', 'Mahasiswa', 'Aktif'),
(38, '124170039', 'DIMAS YONANDA', 'si170039', 'Mahasiswa', 'Aktif'),
(39, '124170040', 'FAGIL ARYA BASKORO', 'si170040', 'Mahasiswa', 'Aktif'),
(40, '124180001', 'JAMES', 'si180001', 'Mahasiswa', 'Aktif'),
(41, '124180002', 'LUCKY GINANJAR', 'si180002', 'Mahasiswa', 'Aktif'),
(42, '124180003', 'ANGELI MARGARETHA', 'si180003', 'Mahasiswa', 'Aktif'),
(43, '124180004', 'GRACE MARIANA', 'si180004', 'Mahasiswa', 'Aktif'),
(44, '124180005', 'LIDYA ANGELINA SILITONGA', 'si180005', 'Mahasiswa', 'Aktif'),
(45, '124180006', 'SEKAR RIZKI FEBRIYANTI', 'si180006', 'Mahasiswa', 'Aktif'),
(46, '124180007', 'ADISTY RANIA FADHILA', 'si180007', 'Mahasiswa', 'Aktif'),
(47, '124180008', 'RIFKI FIRMANSYAH', 'si180008', 'Mahasiswa', 'Aktif'),
(48, '124180009', 'BERTHA OLIVERA LIVERIA GOWASA', 'si180009', 'Mahasiswa', 'Aktif'),
(49, '124180010', 'ULIL AZMI UTARI', 'si180010', 'Mahasiswa', 'Aktif'),
(50, '124180011', 'NABILA GITA RAMADHANTI', 'si180011', 'Mahasiswa', 'Aktif'),
(51, '124180012', 'ATIKA NOVA PAKPAHAN', 'si180012', 'Mahasiswa', 'Aktif'),
(52, '124180013', 'KUKUH SEPTIAN SETIYO ADI', 'si180013', 'Mahasiswa', 'Aktif'),
(53, '124180014', 'BAMBANG BUDI SETIAWAN', 'si180014', 'Mahasiswa', 'Aktif'),
(54, '124180015', 'ABD. ROFIK BUDIN', 'si180015', 'Mahasiswa', 'Aktif'),
(55, '124180016', 'MUHAMMAD NABIL FITRAH', 'si180016', 'Mahasiswa', 'Aktif'),
(56, '124180017', 'ADITYA DWI CAHYO PUTRA', 'si180017', 'Mahasiswa', 'Aktif'),
(57, '124180018', 'TAUFIK HIDAYAT', 'si180018', 'Mahasiswa', 'Aktif'),
(58, '124180019', 'IVANOF FERNANDO DONACHU', 'si180019', 'Mahasiswa', 'Aktif'),
(59, '124180020', 'DEBI EFRITA', 'si180020', 'Mahasiswa', 'Aktif'),
(60, '124180021', 'M. ALIF HAMLIKA', 'si180021', 'Mahasiswa', 'Aktif'),
(61, '124180022', 'KEVIN PRAPASKA PUTRA', 'si180022', 'Mahasiswa', 'Aktif'),
(62, '124180023', 'MARSELINDA AJENG SUWARNO PUTRI', 'si180023', 'Mahasiswa', 'Aktif'),
(63, '124180024', 'TASYA AMELIA HARDINAL PUTRI', 'si180024', 'Mahasiswa', 'Aktif'),
(64, '124180025', 'YOFAN ALFIATUR ROHMAN', 'si180025', 'Mahasiswa', 'Aktif'),
(65, '124180026', 'CATUR RAHMAT', 'si180026', 'Mahasiswa', 'Aktif'),
(66, '124180027', 'ANELTA TIRTA PUTRI SUBANDONO', 'si180027', 'Mahasiswa', 'Aktif'),
(67, '124180028', 'FEBRIAN DHIYA ULHAQ', 'si180028', 'Mahasiswa', 'Aktif'),
(68, '124180029', 'ALEX MASROBI', 'si180029', 'Mahasiswa', 'Aktif'),
(69, '124180030', 'RAHADATUL RIZKY RAMADHAN', 'si180030', 'Mahasiswa', 'Aktif'),
(70, '124180031', 'YUDISTIRA SATRIANANTA', 'si180031', 'Mahasiswa', 'Aktif'),
(71, '124180032', 'YESSA ISBRIYANSA HARMADE', 'si180032', 'Mahasiswa', 'Aktif'),
(72, '124180033', 'BUDHI BHAKTI WIRA UTAMA', 'si180033', 'Mahasiswa', 'Aktif'),
(73, '124180034', 'ANDRIAN RIZQI MUHAMMAD', 'si180034', 'Mahasiswa', 'Aktif'),
(74, '124180035', 'RAINNER IVANOV SAVIO NAHAK', 'si180035', 'Mahasiswa', 'Aktif'),
(75, '124180036', 'NURUL HANA SINTYA', 'si180036', 'Mahasiswa', 'Aktif'),
(76, '124180037', 'RIZKY MAHFUDDIN HARAHAP', 'si180037', 'Mahasiswa', 'Aktif'),
(77, '124180038', 'FADHLURRAHMAN ARYO WICAKSONO', 'si180038', 'Mahasiswa', 'Aktif'),
(78, '124180039', 'NAUFAL FADHILLAH', 'si180039', 'Mahasiswa', 'Aktif'),
(79, '124180040', 'RADEN RARA ANINDYA DIAN PERTIWI', 'si180040', 'Mahasiswa', 'Aktif'),
(80, '124180041', 'MONICA AMEILIANA ANDISTA MUNTHE', 'si180041', 'Mahasiswa', 'Aktif'),
(81, '124180042', 'MUHAMMAD ANDIKA ARYASATYA PUTRA', 'si180042', 'Mahasiswa', 'Aktif'),
(82, '124180043', 'KEVIN OKTANAYA SALMAN', 'si180043', 'Mahasiswa', 'Aktif'),
(83, '124180044', 'ARIE PAMUNGKAS', 'si180044', 'Mahasiswa', 'Aktif'),
(84, '124180045', 'FAIZ MUHAMMAD', 'si180045', 'Mahasiswa', 'Aktif'),
(85, '124180046', 'SHIDQI MAULANA', 'si180046', 'Mahasiswa', 'Aktif'),
(86, '124180047', 'MUHAMMAD YUSUF ADI PURWANTO', 'si180047', 'Mahasiswa', 'Aktif'),
(87, '124180048', 'Muhammad Raihan Hafiz', 'si180048', 'Mahasiswa', 'Aktif'),
(88, '124180049', 'GALUH RORO VEBIANA', 'si180049', 'Mahasiswa', 'Aktif'),
(89, '124180050', 'ISHAQ ADHELTYO', 'si180050', 'Mahasiswa', 'Aktif'),
(90, '124180051', 'OKTAVIA ISNANIA PUTRI', 'si180051', 'Mahasiswa', 'Aktif'),
(91, '124180052', 'ALDIAN YUDHA RHAFIF', 'si180052', 'Mahasiswa', 'Aktif'),
(92, '124180053', 'JERRY ONG', 'si180053', 'Mahasiswa', 'Aktif'),
(93, '124180054', 'MUHAMMAD FARHAN RULLY FERDIAN', 'si180054', 'Mahasiswa', 'Aktif'),
(94, '124180055', 'NAUFAL NUR AIDIL', 'si180055', 'Mahasiswa', 'Aktif'),
(95, '124180056', 'MUHAMMAD RIZKI HIDAYAT', 'si180056', 'Mahasiswa', 'Aktif'),
(96, '124180057', 'ZHAFIRAH AZ-ZAHRA', 'si180057', 'Mahasiswa', 'Aktif'),
(97, '124180058', 'ADLI RAI RAFIF', 'si180058', 'Mahasiswa', 'Aktif'),
(98, '124180059', 'BAGAS TAUFIK MADHAWY', 'si180059', 'Mahasiswa', 'Aktif'),
(99, '124180060', 'LUKMANUL HAKIM', 'si180060', 'Mahasiswa', 'Aktif'),
(100, '124180061', 'ABHIRAMA MOHAMMAD', 'si180061', 'Mahasiswa', 'Aktif'),
(101, '124180062', 'DYAH ANGGRAINI KARTIKA PUTRI', 'si180062', 'Mahasiswa', 'Aktif'),
(102, '124180063', 'ALIF HIDAYAT', 'si180063', 'Mahasiswa', 'Aktif'),
(103, '124180064', 'FIANA DEWI', 'si180064', 'Mahasiswa', 'Aktif'),
(104, '124180065', 'AURAMA ZULFA PRATAMA', 'si180065', 'Mahasiswa', 'Aktif'),
(105, '124180066', 'FEBRINAWAN SATRIA ADHITAMA', 'si180066', 'Mahasiswa', 'Aktif'),
(106, '124180067', 'AMIRA SALSABILA', 'si180067', 'Mahasiswa', 'Aktif'),
(107, '124180068', 'VALERIA PAULINI YUWONO', 'si180068', 'Mahasiswa', 'Aktif'),
(108, '124180069', 'LUQIYYATUS SHOUBATIL ILMIYAH', 'si180069', 'Mahasiswa', 'Aktif'),
(109, '124190001', 'RESTI AYUNDA SARI', 'si190001', 'Mahasiswa', 'Aktif'),
(110, '124190002', 'INGE DWI PRATIWI', 'si190002', 'Mahasiswa', 'Aktif'),
(111, '124190003', 'NURKHOFIFAH HAYATI', 'si190003', 'Mahasiswa', 'Aktif'),
(112, '124190004', 'FADHILLAH SANI', 'si190004', 'Mahasiswa', 'Aktif'),
(113, '124190005', 'ANGGI LAYLA AL - AFIFAH NASUTION', 'si190005', 'Mahasiswa', 'Aktif'),
(114, '124190006', 'YOLANDA DEBORA', 'si190006', 'Mahasiswa', 'Aktif'),
(115, '124190007', 'HANIK RIYADHOTUS SHOLIHAH', 'si190007', 'Mahasiswa', 'Aktif'),
(116, '124190008', 'BERLYNDA AULIA ROSSI', 'si190008', 'Mahasiswa', 'Aktif'),
(117, '124190009', 'IFTINAN HANIFATI AKSARI', 'si190009', 'Mahasiswa', 'Aktif'),
(118, '124190010', 'DEAVI ARIEFA WIDIASMARA', 'si190010', 'Mahasiswa', 'Aktif'),
(119, '124190011', 'WELLIS R. H . PANGGABEAN', 'si190011', 'Mahasiswa', 'Aktif'),
(120, '124190012', 'ANDHIKA RAMA AUDITYA', 'si190012', 'Mahasiswa', 'Aktif'),
(121, '124190013', 'KALVINA GABRIELLA', 'si190013', 'Mahasiswa', 'Aktif'),
(122, '124190014', 'SYAFA ULLIA', 'si190014', 'Mahasiswa', 'Aktif'),
(123, '124190015', 'DELLA PUTRI HESTIANA', 'si190015', 'Mahasiswa', 'Aktif'),
(124, '124190016', 'SURYA AJI PRATAMA', 'si190016', 'Mahasiswa', 'Aktif'),
(125, '124190017', 'LILY FADILA', 'si190017', 'Mahasiswa', 'Aktif'),
(126, '124190018', 'SEPTIA AFRI YENDA', 'si190018', 'Mahasiswa', 'Aktif'),
(127, '124190019', 'ANINDITA KHUSNUL OKTAVIA', 'si190019', 'Mahasiswa', 'Aktif'),
(128, '124190020', 'ALIF YULIANTO', 'si190020', 'Mahasiswa', 'Aktif'),
(129, '124190021', 'UMI ROHMAH NUR HIDAYATI', 'si190021', 'Mahasiswa', 'Aktif'),
(130, '124190022', 'ICHWAL MELIANTO', 'si190022', 'Mahasiswa', 'Aktif'),
(131, '124190023', 'REYHAN DEVARA SAMUDRA', 'si190023', 'Mahasiswa', 'Aktif'),
(132, '124190024', 'FERINA AQILA REYHANDYA', 'si190024', 'Mahasiswa', 'Aktif'),
(133, '124190025', 'HANIF MAAJID', 'si190025', 'Mahasiswa', 'Aktif'),
(134, '124190026', 'GABRIL CAHYA LUKITA', 'si190026', 'Mahasiswa', 'Aktif'),
(135, '124190027', 'WAHYU PURWO YUWONO', 'si190027', 'Mahasiswa', 'Aktif'),
(136, '124190028', 'FATIH SAFAAT DWI AFIAN', 'si190028', 'Mahasiswa', 'Aktif'),
(137, '124190029', 'VIVO PUTRI WENERDA', 'si190029', 'Mahasiswa', 'Aktif'),
(138, '124190030', 'ERBINAR PAQUITA BR. MELIALA', 'si190030', 'Mahasiswa', 'Aktif'),
(139, '124190031', 'MUHAMMAD RIZKY ALFIAN NOOR', 'si190031', 'Mahasiswa', 'Aktif'),
(140, '124190032', 'ODE ABDUL RASYID', 'si190032', 'Mahasiswa', 'Aktif'),
(141, '124190033', 'THALIB ABU QITAAL', 'si190033', 'Mahasiswa', 'Aktif'),
(142, '124190034', 'REIHAN HERIANTONO', 'si190034', 'Mahasiswa', 'Aktif'),
(143, '124190035', 'CAROL EMMANUEL YUNIOR RIKIN', 'si190035', 'Mahasiswa', 'Aktif'),
(144, '124190036', 'FAZA RAYHANOVA', 'si190036', 'Mahasiswa', 'Aktif'),
(145, '124190037', 'ANGGITA SETIYANI PUTRI', 'si190037', 'Mahasiswa', 'Aktif'),
(146, '124190038', 'RIZQI AKBAR DERMAWAN', 'si190038', 'Mahasiswa', 'Aktif'),
(147, '124190039', 'ADJIE DJAKA PERMANA', 'si190039', 'Mahasiswa', 'Aktif'),
(148, '124190040', 'AHMADA PRIMANDA BRAMANTYO', 'si190040', 'Mahasiswa', 'Aktif'),
(149, '124190041', 'BIMA ARYA TIANTO', 'si190041', 'Mahasiswa', 'Aktif'),
(150, '124190042', 'YOHANES ADEO ALLEN NATHANAEL', 'si190042', 'Mahasiswa', 'Aktif'),
(151, '124190043', 'MUHAMMAD RAIHANSYAH ABIRAMA', 'si190043', 'Mahasiswa', 'Aktif'),
(152, '124190044', 'PANDU DHAULAGIRI', 'si190044', 'Mahasiswa', 'Aktif'),
(153, '124190045', 'LUQMANUL HAKIM', 'si190045', 'Mahasiswa', 'Aktif'),
(154, '124190046', 'MUHAMMAD RIDHWAN SANTOSA', 'si190046', 'Mahasiswa', 'Aktif'),
(155, '124190047', 'AKBARA JATI GAYUH RISANGAJI', 'si190047', 'Mahasiswa', 'Aktif'),
(156, '124190048', 'KARINA SEKAR ARUM', 'si190048', 'Mahasiswa', 'Aktif'),
(157, '124190049', 'NURFARIDA SEKAR ANDZANI', 'si190049', 'Mahasiswa', 'Aktif'),
(158, '124190050', 'PRADIPTA AJI RASYID SIDIQ', 'si190050', 'Mahasiswa', 'Aktif'),
(159, '124190051', 'YUDHA KHOIRUNNAS AJIPUTRA', 'si190051', 'Mahasiswa', 'Aktif'),
(160, '124190052', 'ILMA FAJRINA RAHMADINA HIMAWAN', 'si190052', 'Mahasiswa', 'Aktif'),
(161, '124190053', 'MUCHAMMAD RAFI` MAULANA', 'si190053', 'Mahasiswa', 'Aktif'),
(162, '124190054', 'ALTRARIQ WELFARE YUBAIDI', 'si190054', 'Mahasiswa', 'Aktif'),
(163, '124190055', 'PUTRIMA AZIZI AL FAUZTINA', 'si190055', 'Mahasiswa', 'Aktif'),
(164, '124190056', 'LATIEF IRFANSYAH', 'si190056', 'Mahasiswa', 'Aktif'),
(165, '124190057', 'MUHAMMAD FAUZAN SULAEMAN', 'si190057', 'Mahasiswa', 'Aktif'),
(166, '124190058', 'PATRICK SAMUEL OWEN SARITUA SINAGA', 'si190058', 'Mahasiswa', 'Aktif'),
(167, '124190059', 'GATAN AGRASYACH DEWARA', 'si190059', 'Mahasiswa', 'Aktif'),
(168, '124190060', 'VISKA ALIFIA DIANTI', 'si190060', 'Mahasiswa', 'Aktif'),
(169, '124190061', 'MUHAMMAD RIFKI ARIFFIN', 'si190061', 'Mahasiswa', 'Aktif'),
(170, '124190062', 'DINI PUTRI HANDAYANI', 'si190062', 'Mahasiswa', 'Aktif'),
(171, '124190063', 'NABILLA PUTRI WAHYUNINGTYAS', 'si190063', 'Mahasiswa', 'Aktif'),
(172, '124190064', 'MARIA YOSEPHA GALUH PRAMESTI', 'si190064', 'Mahasiswa', 'Aktif'),
(173, '124190065', 'FACHRIZA BASKARA', 'si190065', 'Mahasiswa', 'Aktif'),
(174, '124190066', 'DANY KUMARA AJI', 'si190066', 'Mahasiswa', 'Aktif'),
(175, '124190067', 'ARYA ADHI PRADANA', 'si190067', 'Mahasiswa', 'Aktif'),
(176, '124190068', 'KRISNA DEWA NANDA', 'si190068', 'Mahasiswa', 'Aktif'),
(177, '124190069', 'ERMIN FADLINA ROSYIDA', 'si190069', 'Mahasiswa', 'Aktif'),
(178, '124190070', 'MUFLIHUL HAKIM', 'si190070', 'Mahasiswa', 'Aktif'),
(179, '124190071', 'ABDULLAH UBAB ALI MURTADLO', 'si190071', 'Mahasiswa', 'Aktif'),
(180, '124190072', 'SEVIANA INTAN FATIMA', 'si190072', 'Mahasiswa', 'Aktif'),
(181, '124190073', 'ENDANG HERLINA', 'si190073', 'Mahasiswa', 'Aktif'),
(182, '124190074', 'IVONNI TIAHAQ', 'si190074', 'Mahasiswa', 'Aktif'),
(183, '124190075', 'PRADANA ALDI MUSTHOFA', 'si190075', 'Mahasiswa', 'Aktif'),
(184, '124190076', 'SYAH RIZAL ALMEDIFA', 'si190076', 'Mahasiswa', 'Aktif'),
(185, '124190077', 'HAYDAR DZAKY BARIDHWAN', 'si190077', 'Mahasiswa', 'Aktif'),
(186, '124190078', 'MIFTAHUR SIDQ AZIZ', 'si190078', 'Mahasiswa', 'Aktif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
