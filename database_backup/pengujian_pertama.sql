-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql111.byetcluster.com
-- Waktu pembuatan: 05 Jun 2022 pada 11.58
-- Versi server: 10.3.27-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31539907_odgj`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `username` varchar(125) NOT NULL,
  `id_tema` int(11) NOT NULL,
  `id_kuis` int(11) NOT NULL,
  `goal` text DEFAULT NULL,
  `real1` int(11) DEFAULT NULL,
  `option1` text DEFAULT NULL,
  `will` text DEFAULT NULL,
  `tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `username`, `id_tema`, `id_kuis`, `goal`, `real1`, `option1`, `will`, `tgl`) VALUES
(1, 'Singakepo', 11, 51, 'null', 0, 'null', 'null', '2022-05-23 11:54:38'),
(2, 'Getas', 1, 1, 'null', 0, 'null', 'null', '2022-05-23 11:57:56'),
(3, 'saya', 6, 6, 'Muka Tegang, Bicara Kasar, ', 2, 'Memperhatikan perilaku ODGJ secara berkala, tes', 'tindakan yang dilakukan', '2022-05-23 12:05:21'),
(4, 'Resti', 1, 1, 'Muka Tegang, Bicara Kasar, ', 2, 'Memperhatikan perilaku ODGJ secara berkala, ', 'Tindakan yang dilakukan', '2022-05-23 12:05:44'),
(5, 'Aria', 1, 1, 'Merusak Barang, ', 5, 'Memperhatikan perilaku ODGJ secara berkala, ', 'null', '2022-05-23 12:06:43'),
(6, 'Rozanah', 1, 1, 'Bicara Kasar, Menciderai Orang Lain, ', 2, 'Memperhatikan perilaku ODGJ secara berkala, ', 'Hrs', '2022-05-23 12:06:07'),
(7, 'Aliyah', 1, 1, 'null', 0, 'null', 'null', '2022-05-23 12:00:54'),
(8, 'Umikk', 1, 1, 'null', 0, 'null', 'null', '2022-05-23 12:01:04'),
(9, 'Aji123', 1, 1, ' Wajah Merah, ', 0, 'null', 'null', '2022-05-23 12:02:19'),
(10, 'Kim', 2, 11, 'null', 0, 'null', 'null', '2022-05-23 12:02:11'),
(11, 'Mustakim', 1, 1, 'null', 0, 'null', 'null', '2022-05-23 12:02:23'),
(12, 'DEMY', 1, 1, 'null', 0, 'null', 'null', '2022-05-23 12:03:52'),
(13, 'Hana', 1, 1, 'Muka Tegang, Bicara Kasar, ', 3, 'Berkonsultasi dengan petugas kesehatan bila ada tanda tanda yang mencurigakan, ', 'Catat gejala', '2022-05-23 12:08:29'),
(14, 'Hana', 1, 1, 'null', 0, 'null', 'null', '2022-05-23 12:08:34'),
(15, 'Aziz', 11, 51, 'null', 0, 'null', 'null', '2022-05-23 12:24:17'),
(16, 'kdw2', 1, 1, 'Muka Tegang, Bicara Kasar, ', 3, 'Memperhatikan perilaku ODGJ secara berkala, Berkonsultasi dengan petugas kesehatan bila ada tanda tanda yang mencurigakan, ', 'Dikasih nasehat secara halus dan diarahkan ', '2022-05-23 12:41:05'),
(17, 'kdw2', 1, 1, 'Muka Tegang, Bicara Kasar, ', 3, 'Memperhatikan perilaku ODGJ secara berkala, ', '4test', '2022-05-23 12:42:44'),
(18, 'Aisyah', 12, 56, 'Berbicara sendiri, ', 1, 'null', 'null', '2022-05-23 12:54:22'),
(19, 'Aisyah', 14, 66, 'Merasa tidak mampu, ', 3, 'Berkonsultasi dengan petugas kesehatan bila ada tanda tanda yang baru, ', 'null', '0000-00-00 00:00:00'),
(20, 'Kim', 3, 21, 'null', 0, 'null', 'null', '2022-05-23 16:43:03'),
(21, 'Rofik', 2, 11, 'Berbicara sendiri, Khawatir berlebihan, Melamun, Curiga, Menyatakan mendengar sesuatu, melihat sesuatu, merasakan sesuatu yang tidak jelas sumbernya, ', 10, 'Memperhatikan perilaku ODGJ secara berkala, Berkonsultasi dengan petugas kesehatan bila ada tanda tanda yang mencurigakan, ', 'Memberikan pengarahan kepada adik agar tidak jangan berhalusinasi, dan selalu di ajak berkomunikasi ', '2022-05-26 06:23:38'),
(22, 'Rofik', 2, 11, 'null', 0, 'null', 'null', '2022-05-26 06:23:52'),
(23, 'Rofik', 2, 12, 'Menghubungi saudara terdekat, Menghubungi petugas kesehatan atau membawa ke tempat pelayanan kesehatan, ', 10, 'Mengambil keputusan cepat ada kondisi darurat yang harus segera ditangani oleh pihak terkait, Berunding dengan pihak terkait seperti tenaga kesehatan, kader dan perangkat desa, ', 'null', '2022-05-26 06:30:51'),
(24, 'Kiki', 1, 1, 'null', 0, 'null', 'null', '2022-06-01 09:24:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuis`
--

CREATE TABLE `kuis` (
  `id_kuis` int(11) NOT NULL,
  `nama_kuis` varchar(100) NOT NULL,
  `tema` varchar(100) DEFAULT NULL,
  `url` varchar(100) NOT NULL,
  `level` enum('Administrator','Keluarga','Perawat') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuis`
--

INSERT INTO `kuis` (`id_kuis`, `nama_kuis`, `tema`, `url`, `level`) VALUES
(1, 'Tugas 1', 'amuk', 'amuk/tugas1_keluarga.php', 'Keluarga'),
(2, 'Tugas 2', 'amuk', 'amuk/tugas2_keluarga.php', 'Keluarga'),
(3, 'Tugas 3', 'amuk', 'amuk/tugas3_keluarga.php', 'Keluarga'),
(4, 'Tugas 4', 'amuk', 'amuk/tugas4_keluarga.php', 'Keluarga'),
(5, 'Tugas 5', 'amuk', 'amuk/tugas5_keluarga.php', 'Keluarga'),
(6, 'Tugas 1', 'amuk', 'amuk/tugas1.php', 'Administrator'),
(7, 'Tugas 2', 'amuk', 'amuk/tugas2.php', 'Administrator'),
(8, 'Tugas 3', 'amuk', 'amuk/tugas3.php', 'Administrator'),
(9, 'Tugas 4', 'amuk', 'amuk/tugas4.php', 'Administrator'),
(10, 'Tugas 5', 'amuk', 'amuk/tugas5.php', 'Administrator'),
(11, 'Tugas 1', 'halusinasi', 'halusinasi/tugas1_keluarga.php', 'Keluarga'),
(12, 'Tugas 2', 'halusinasi', 'halusinasi/tugas2_keluarga.php', 'Keluarga'),
(13, 'Tugas 3', 'halusinasi', 'halusinasi/tugas3_keluarga.php', 'Keluarga'),
(14, 'Tugas 4', 'halusinasi', 'halusinasi/tugas4_keluarga.php', 'Keluarga'),
(15, 'Tugas 5', 'halusinasi', 'halusinasi/tugas5_keluarga.php', 'Keluarga'),
(16, 'Tugas 1', 'halusinasi', 'halusinasi/tugas1.php', 'Administrator'),
(17, 'Tugas 2', 'halusinasi', 'halusinasi/tugas2.php', 'Administrator'),
(18, 'Tugas 3', 'halusinasi', 'halusinasi/tugas3.php', 'Administrator'),
(19, 'Tugas 4', 'halusinasi', 'halusinasi/tugas4.php', 'Administrator'),
(20, 'Tugas 5', 'halusinasi', 'halusinasi/tugas5.php', 'Administrator'),
(21, 'Tugas 1', 'menarik_diri', 'menarik_diri/tugas1_keluarga.php', 'Keluarga'),
(22, 'Tugas 2', 'menarik_diri', 'menarik_diri/tugas2_keluarga.php', 'Keluarga'),
(23, 'Tugas 3', 'menarik_diri', 'menarik_diri/tugas3_keluarga.php', 'Keluarga'),
(24, 'Tugas 4', 'menarik_diri', 'menarik_diri/tugas4_keluarga.php', 'Keluarga'),
(25, 'Tugas 5', 'menarik_diri', 'menarik_diri/tugas5_keluarga.php', 'Keluarga'),
(26, 'Tugas 1', 'menarik_diri', 'menarik_diri/tugas1.php', 'Administrator'),
(27, 'Tugas 2', 'menarik_diri', 'menarik_diri/tugas2.php', 'Administrator'),
(28, 'Tugas 3', 'menarik_diri', 'menarik_diri/tugas3.php', 'Administrator'),
(29, 'Tugas 4', 'menarik_diri', 'menarik_diri/tugas4.php', 'Administrator'),
(30, 'Tugas 5', 'menarik_diri', 'menarik_diri/tugas5.php', 'Administrator'),
(31, 'Tugas 1', 'hdr', 'hdr/tugas1_keluarga.php', 'Keluarga'),
(32, 'Tugas 2', 'hdr', 'hdr/tugas2_keluarga.php', 'Keluarga'),
(33, 'Tugas 3', 'hdr', 'hdr/tugas3_keluarga.php', 'Keluarga'),
(34, 'Tugas 4', 'hdr', 'hdr/tugas4_keluarga.php', 'Keluarga'),
(35, 'Tugas 5', 'hdr', 'hdr/tugas5_keluarga.php', 'Keluarga'),
(36, 'Tugas 1', 'hdr', 'hdr/tugas1.php', 'Administrator'),
(37, 'Tugas 2', 'hdr', 'hdr/tugas2.php', 'Administrator'),
(38, 'Tugas 3', 'hdr', 'hdr/tugas3.php', 'Administrator'),
(39, 'Tugas 4', 'hdr', 'hdr/tugas4.php', 'Administrator'),
(40, 'Tugas 5', 'hdr', 'hdr/tugas5.php', 'Administrator'),
(41, 'Tugas 1', 'kuper', 'kuper/tugas1_keluarga.php', 'Keluarga'),
(42, 'Tugas 2', 'kuper', 'kuper/tugas2_keluarga.php', 'Keluarga'),
(43, 'Tugas 3', 'kuper', 'kuper/tugas3_keluarga.php', 'Keluarga'),
(44, 'Tugas 4', 'kuper', 'kuper/tugas4_keluarga.php', 'Keluarga'),
(45, 'Tugas 5', 'kuper', 'kuper/tugas5_keluarga.php', 'Keluarga'),
(46, 'Tugas 1', 'kuper', 'kuper/tugas1.php', 'Administrator'),
(47, 'Tugas 2', 'kuper', 'kuper/tugas2.php', 'Administrator'),
(48, 'Tugas 3', 'kuper', 'kuper/tugas3.php', 'Administrator'),
(49, 'Tugas 4', 'kuper', 'kuper/tugas4.php', 'Administrator'),
(50, 'Tugas 5', 'kuper', 'kuper/tugas5.php', 'Administrator'),
(51, 'Tugas 1', 'amuk', 'amuk/tugas1_perawat.php', 'Perawat'),
(52, 'Tugas 2', 'amuk', 'amuk/tugas2_perawat.php', 'Perawat'),
(53, 'Tugas 3', 'amuk', 'amuk/tugas3_perawat.php', 'Perawat'),
(54, 'Tugas 4', 'amuk', 'amuk/tugas4_perawat.php', 'Perawat'),
(55, 'Tugas 5', 'amuk', 'amuk/tugas5_perawat.php', 'Perawat'),
(56, 'Tugas 1', 'halusinasi', 'halusinasi/tugas1_perawat.php', 'Perawat'),
(57, 'Tugas 2', 'halusinasi', 'halusinasi/tugas2_perawat.php', 'Perawat'),
(58, 'Tugas 3', 'halusinasi', 'halusinasi/tugas3_perawat.php', 'Perawat'),
(59, 'Tugas 4', 'halusinasi', 'halusinasi/tugas4_perawat.php', 'Perawat'),
(60, 'Tugas 5', 'halusinasi', 'halusinasi/tugas5_perawat.php', 'Perawat'),
(61, 'Tugas 1', 'menarik_diri', 'menarik_diri/tugas1_perawat.php', 'Perawat'),
(62, 'Tugas 2', 'menarik_diri', 'menarik_diri/tugas2_perawat.php', 'Perawat'),
(63, 'Tugas 3', 'menarik_diri', 'menarik_diri/tugas3_perawat.php', 'Perawat'),
(64, 'Tugas 4', 'menarik_diri', 'menarik_diri/tugas4_perawat.php', 'Perawat'),
(65, 'Tugas 5', 'menarik_diri', 'menarik_diri/tugas5_perawat.php', 'Perawat'),
(66, 'Tugas 1', 'hdr', 'hdr/tugas1_perawat.php', 'Perawat'),
(67, 'Tugas 2', 'hdr', 'hdr/tugas2_perawat.php', 'Perawat'),
(68, 'Tugas 3', 'hdr', 'hdr/tugas3_perawat.php', 'Perawat'),
(69, 'Tugas 4', 'hdr', 'hdr/tugas4_perawat.php', 'Perawat'),
(70, 'Tugas 5', 'hdr', 'hdr/tugas5_perawat.php', 'Perawat'),
(71, 'Tugas 1', 'kuper', 'kuper/tugas1_perawat.php', 'Perawat'),
(72, 'Tugas 2', 'kuper', 'kuper/tugas2_perawat.php', 'Perawat'),
(73, 'Tugas 3', 'kuper', 'kuper/tugas3_perawat.php', 'Perawat'),
(74, 'Tugas 4', 'kuper', 'kuper/tugas4_perawat.php', 'Perawat'),
(75, 'Tugas 5', 'kuper', 'kuper/tugas5_perawat.php', 'Perawat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi1` text NOT NULL,
  `isi2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `modul`
--

INSERT INTO `modul` (`id_modul`, `judul`, `isi1`, `isi2`) VALUES
(1, 'Amuk/Perilaku Kekerasan', '<p><strong>1. Pengertian Amuk /&nbsp;Perilaku Kekerasan</strong></p><p>Perilaku kekerasan adalah kemarahan yang dilampiaskan secara berlebihan dan tidak terkendali melalui perkataan sampai mencederai orang lain dan/ atau merusak lingkungan</p><p><strong>2. Penyebab</strong></p><ol><li>Ketidakmampuan mengendalikan dorongan marah</li><li>Pemicu lingkungan</li><li>Masalah dengan orang lain</li><li>Putus obat</li><li>Penyalahgunaan zat/alkohol</li></ol><p><strong>3. Tanda gejala</strong></p><ol><li>Mengancam</li><li>Mengucapkan kata-kata kasar</li><li>Suara keras</li><li>Bicara ketus</li><li>Menyerang orang lain</li><li>Melukai diri sendiri/orang lain</li><li>Merusak lingkungan</li><li>Mengamuk</li></ol>', '<p><strong>4. Tugas keluarga dalam merawat&nbsp;</strong></p><ol><li>Keluarga mengenal pengertian dan tanda gejala perilaku kekerasan</li><li>Keluarga mampu mengambil keputusan. Ketika klien melakukan perilaku kekerasan atau bunuh diri maka keluarga harus segera mengambil keputusan untuk membawa ke fasilitas pelayanan kesehatan&nbsp;</li><li>Keluarga mampu merawat ODGJ yang mengalami perilaku kekerasan</li></ol><ul><li>Melatih klien mengendalikan marah dengan melakukan relaksasi nafas dalam</li><li>Melatih klien mengendalikan marah dengan memukul benda yang tidak berbahaya seperti kasur, bantal</li><li>Melatih klien untuk melakukan aktivitas fisik seperti olahraga dan membersihkan rumah</li><li>Melatih klien untuk menceritakan masalah kepada orang lain</li><li>Melatih klien mengungkapkan kemarahannya dengan menulis di buku</li><li>Melatih klien untuk meminta, menolak dan menyampaikan pendapat atau keinginan dengan baik</li><li>Melatih klien untuk beibadah</li><li>Memberikan pujian untuk usaha dan hal baik yang dilakukan klien</li></ul><p><strong>&nbsp; &nbsp; &nbsp;&nbsp;</strong>4. Keluarga mampu memodifikasi lingkungan yang sehat jiwa.&nbsp;</p><ul><li>Menyediakan tempat tinggal yang bersih serta memotivasi klien untuk berpartisipasi dalam menjaga kebersihan</li><li>Menjauhkan barang-barang berbahaya dari jangkauan klien</li><li>Membuat suasana nyaman di rumah</li><li>Memberikan pujian untuk usaha dan hal baik yang dilakukan klien</li></ul><p><strong>5. Keluarga mampu memanfaatkan sarana pelayanan kesehatan yang ada. Klien perlu mendapatkan pelayanan kesehatan jiwa secara teratur, pilihannya bisa di puskesmas, praktik perawat, praktik dokter, rumah sakit umum atau rumah sakit jiwa.</strong></p>'),
(2, 'Halusinasi', '<strong>1.	Pengertian Halusinasi</strong><br>\nHalusinasi adalah gejala gangguan jiwa berupa penglihatan, pendengaran, penciuman, perabaan dan pengecapan terhadap sumber yang tidak nyata. Penderita halusinasi seolah-olah melihat, mendengar, mencium, meraba dan mengecap sesuatu yang sebenarnya tidak nyata.<br>\n<strong>2.	Penyebab </strong><br>\n&nbsp;&nbsp;1.	Kurang tidur<br>\n&nbsp;&nbsp;2.	Mengurung diri<br>\n&nbsp;&nbsp;3.	Kurang kegiatan bermasyarakat<br>\n<strong>3.	Tanda gejala</strong><br>\n&nbsp;&nbsp;1.	Mendengar suara yang tidak nyata<br>\n&nbsp;&nbsp;2.	Melihat sesuatu yang tidak nyata<br>\n&nbsp;&nbsp;3.	Mencium bau yang tidak nyata<br>\n&nbsp;&nbsp;4.	Mengecap atau merasakan sesuatu yang tidak nyata<br>\n&nbsp;&nbsp;5.	Merasakan diraba atau disentuh sesuatu yang tidak nyata<br>\n&nbsp;&nbsp;6.	Bicara sendiri<br>\n&nbsp;&nbsp;7.	Tertawa sendiri<br>\n&nbsp;&nbsp;8.	Melihat ke satu arah<br>\n&nbsp;&nbsp;9.	Mendekatkan telinga ke arah tertentu<br>\n&nbsp;&nbsp;10.	Diam sambil menikamati halusinasi\n', '<p><strong>4. Tugas keluarga dalam merawat&nbsp;</strong></p><ol><li>Keluarga mengenal pengertian dan tanda gejala halusinasi</li><li>Keluarga mampu mengambil keputusan. Ketika isi halusinasi memerintahkan untuk melakukan perilaku kekerasan atau bunuh diri maka keluarga harus segera mengambil keputusan untuk membawa ke fasilitas pelayanan kesehatan&nbsp;</li><li>Keluarga mampu merawat ODGJ yang mengalami halusinasi</li></ol><ul><li>&nbsp;Menghindari situasi yang menyebabkan halusinasi</li><li>Membimbing ODGJ dalam melakukan latihan cara mengendalikan halusinasi sesuai dengan yang dilatih perawat</li></ul><p>&nbsp; &nbsp; &nbsp; &nbsp;4. Keluarga mampu memodifikasi lingkungan yang sehat jiwa.&nbsp;</p><ul><li>Menyediakan tempat tinggal yang bersih serta memotivasi klien untuk berpartisipasi dalam menjaga kebersihan</li><li>Menjauhkan barang-barang berbahaya dari jangkauan klien</li><li>Melibatkan seluruh anggota keluarga untuk bercakap-cakap secara bergantian, memotivasi klien melakukan latihan dan memberi pujian atas keberhasilannya.</li></ul><p><strong>5. Keluarga mampu memanfaatkan sarana pelayanan kesehatan yang ada. Klien perlu mendapatkan pelayanan kesehatan jiwa secara teratur, pilihannya bisa di puskesmas, praktik perawat, praktik dokter, rumah sakit umum atau rumah sakit jiwa.</strong></p>'),
(3, 'Menarik Diri', '<strong>1.	Pengertian Menarik Diri</strong><br>\nMenarik diri adalah perasaan merasa sendiri yang dialami seseorang dan dianggap muncul karena orang lain atau kondisi yang tidak nyaman atau mengancam.<br>\n<strong>2.	Penyebab </strong><br>\n&nbsp;&nbsp;1.	Sulit berkomunikasi/berbicara dengan orang lain<br>\n&nbsp;&nbsp;2.	Merasa malu<br>\n&nbsp;&nbsp;3.	Merasa tidak berharga<br>\n&nbsp;&nbsp;4.	Pengalaman ditolak, dihina dan dikucilkan<br>\n<strong>3.	Tanda gejala</strong><br>\n&nbsp;&nbsp;1.	Ingin sendiri<br>\n&nbsp;&nbsp;2.	Merasa tidak nyaman di tempat umum<br>\n&nbsp;&nbsp;3.	Merasa berbeda dengan orang lain<br>\n&nbsp;&nbsp;4.	Tidak punya teman<br>\n&nbsp;&nbsp;5.	Menyendiri<br>\n&nbsp;&nbsp;6.	Tidak mau bicara<br>\n&nbsp;&nbsp;7.	Terlihat sedih, murung<br>\n&nbsp;&nbsp;8.	Tidak memandang lawan bicara<br>\n', '<p><strong>4. Tugas keluarga dalam merawat&nbsp;</strong></p><ol><li>Keluarga mengenal pengertian dan tanda gejala menarik diri</li><li>Keluarga mampu memutuskan cara merawat dan pelayanan kesehatan yang diperlukan klien.&nbsp;</li><li>Keluarga mampu merawat klien yang mengalami menarik diri</li></ol><ul><li>Melatih dan memotivasi klien untuk berkenalan dengan orang lain</li><li>Mengajak klien berbicara&nbsp;</li><li>Melatih melakukan kegiatan rumah tangga sambil berbicara</li><li>Mengajak kegiatan sosial</li><li>Memberikan pujian</li></ul><p>&nbsp; &nbsp; &nbsp; &nbsp;4. Keluarga mampu memodifikasi lingkungan yang sehat jiwa.&nbsp;</p><ul><li>Menyediakan tempat tinggal yang bersih serta memotivasi klien untuk berpartisipasi dalam menjaga kebersihan</li><li>Menjauhkan barang-barang berbahaya dari jangkauan klien</li><li>Mengajak klien melakukan kegiatan bersama</li><li>Memberikan pujian jika klien berusaha atau melakukan hal baik</li></ul><p><strong>5. Keluarga mampu memanfaatkan sarana pelayanan kesehatan yang ada. Klien perlu mendapatkan pelayanan kesehatan jiwa secara teratur, pilihannya bisa di puskesmas, praktik perawat, praktik dokter, rumah sakit umum atau rumah sakit jiwa.</strong></p>'),
(4, 'Harga Diri Rendah', '<p><strong>1. Pengertian Harga Diri Rendah</strong></p><p>Harga diri rendah (HDR) adalah penilaian diri atau menganggap diri sendiri lebih rendah/lemah/tidak berharga dibandingkan dengan orang lain.</p><p><strong>2. Penyebab</strong></p><ol><li>Kurang kasih sayang</li><li>Kurang rasa memiliki</li><li>Kurang penghargaan dari orang lain</li><li>Mengalami kegagalan</li><li>Diejek, dihina, dijauhi orang lain</li><li>Kenyataan tidak sesuai keinginan atau harapan</li></ol><p><strong>3. Tanda gejala</strong></p><ol><li>Menganggap diri banyak kekurangan</li><li>Merasa tidak berarti</li><li>Merasa tidak berharga</li><li>Malu</li><li>Minder</li><li>Merasa tidak mampu melakukan apapun</li><li>Meremehkan kemampuan sendiri</li><li>Merasa tidak memiliki kelebihan</li><li>Menunduk</li><li>Berbicara tidak memandang lawan bicara</li><li>Lesu dan tidak bergairah</li><li>Berbicara pelan dan lirih</li><li>Lebih banyak diam</li></ol>', '<p><strong>4. Tugas keluarga dalam merawat&nbsp;</strong></p><ol><li>Keluarga mengenal pengertian dan tanda gejala HDR</li><li>Keluarga mampu memutuskan cara merawat dan pelayanan kesehatan yang diperlukan klien.&nbsp;</li><li>Keluarga mampu merawat klien yang mengalami HDR</li></ol><ul><li>Memberi pujian pada klien</li><li>Jangan mengejek, menghina, merendahkan</li><li>Melibatkan dalam kegiatan di rumah</li><li>Membantu klien mengidentifikasi kemampuan atau kelebihan yang dimiliki klien</li><li>Melatih klien melakukan kemampuan atau kelebihan yang dimiliki klien</li><li>Menganjurkan klien melakukan kemampuan atau kelebihan yang dimiliki&nbsp;</li></ul><p>&nbsp; &nbsp; &nbsp; &nbsp;4. Keluarga mampu memodifikasi lingkungan yang sehat jiwa.&nbsp;</p><ul><li>Menyediakan tempat tinggal yang bersih serta memotivasi klien untuk berpartisipasi dalam menjaga kebersihan</li><li>Menjauhkan barang-barang berbahaya dari jangkauan klien</li><li>Mengajak klien melakukan kegiatan bersama</li><li>Memberikan pujian jika klien berusaha atau melakukan hal baik</li></ul><p><strong>5. Keluarga mampu memanfaatkan sarana pelayanan kesehatan yang ada. Klien perlu mendapatkan pelayanan kesehatan jiwa secara teratur, pilihannya bisa di puskesmas, praktik perawat, praktik dokter, rumah sakit umum atau rumah sakit jiwa.</strong></p>'),
(5, 'Kurang Perawatan Diri', '<p><strong>1. Pengertian Kurang Perawatan Diri</strong></p><p>Kurang perawatan diri adalah tidak mampu melakukan atau menyelesaikan perawatan diri yang meliputi kebersihan diri, berpakaian, makan minum, BAB serta BAK.</p><p><strong>2. Penyebab</strong></p><ol><li>Kelemahan</li><li>Penurunan motivasi</li><li>Penurunan kemampuan</li><li>Gangguan psikologis</li><li>Kendala lingkungan</li></ol><p><strong>3. Tanda gejala</strong></p><ol><li>Menolak perawatan diri</li><li>Mengatakan tidak mau merawat diri</li><li>Mengatakan tidak tahu cara melakukan perawatan diri</li><li>Kotor</li><li>Tidak rapi</li><li>Makan minum tidak beraturan</li><li>BAB/BAK tidak pada tempatnya</li><li>Lingkungan tempat tinggal kotor, tidak rapi</li></ol>', '<p><strong>4. Tugas keluarga dalam merawat&nbsp;</strong></p><ol><li>Keluarga mengenal pengertian dan tanda gejala kurang perawatan diri</li><li>Keluarga mampu memutuskan cara merawat dan pelayanan kesehatan yang diperlukan klien.&nbsp;</li><li>Keluarga mampu merawat klien yang mengalami kurang perawatan diri</li></ol><ul><li>Melatih kebersihan diri yang meliputi sikat gigi, keramas, dan mandi.</li><li>Melatih makan minum</li><li>Melatih BAB dan BAK</li><li>Melatih berpakaian</li><li>Melatih berhias</li><li>Menyediakan alat-alat kebersihan</li><li>Memberi pujian pada klien&nbsp;</li></ul><p>&nbsp; &nbsp; &nbsp; 4. Keluarga mampu memodifikasi lingkungan yang sehat jiwa.&nbsp;</p><ul><li>Menyediakan tempat tinggal yang bersih serta memotivasi klien untuk berpartisipasi dalam menjaga kebersihan</li><li>Menjauhkan barang-barang berbahaya dari jangkauan klien</li><li>Memotivasi klien untuk melakuakan perawatan diri</li><li>Menyediakan fasilitas untuk perawatan diri</li><li>Memberikan pujian jika klien berusaha atau melakukan hal baik</li></ul><p><strong>5. Keluarga mampu memanfaatkan sarana pelayanan kesehatan yang ada. Klien perlu mendapatkan pelayanan kesehatan jiwa secara teratur, pilihannya bisa di puskesmas, praktik perawat, praktik dokter, rumah sakit umum atau rumah sakit jiwa.</strong></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `odgj`
--

CREATE TABLE `odgj` (
  `nik` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `pendidikan` varchar(200) NOT NULL,
  `awal_sakit` year(4) NOT NULL,
  `rawat` varchar(200) NOT NULL,
  `status` text NOT NULL,
  `posisi` varchar(200) NOT NULL,
  `obat` varchar(200) NOT NULL,
  `puskesmas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `odgj`
--

INSERT INTO `odgj` (`nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `pekerjaan`, `pendidikan`, `awal_sakit`, `rawat`, `status`, `posisi`, `obat`, `puskesmas`) VALUES
('3326131901940022', 'Nur Khakim', 'Pekalongan', '1994-01-29', 'Pajomblangan Selatan RT01 RW03 No.14 KDW, Kab. PKL', 'Wirausaha', 'S1', 2020, '2', 'Berangsur membaik ( rasa cemas dan sedih sudah berkurang )', 'Di Rumah', 'Cukup untuk 1 Bulan', 'Kedungwuni 2'),
('3326131906850002', 'ROMANDHON', 'Pekalongan', '1985-06-19', 'Capgawen utara, kedungwuni timur', 'Tidak Bekerja', 'SMP Sederajat', 2007, '1', 'Aman', 'Di Rumah', 'Cukup untuk 1 Bulan', 'Kedungwuni 2'),
('3326134402770001', 'Suminarni', 'Pekalongan', '1977-02-04', 'Salakbrojo Kedungwuni', 'Tidak Bekerja', 'SD', 2018, '2', 'Aman', 'Di Rumah', 'Cukup untuk 1 Bulan', 'Kedungwuni 2'),
('3326134609750023', 'Mustaqimah', 'Pekalongan', '1975-09-06', 'Pajomblangan', 'Tidak Bekerja', 'SD', 2010, '1', 'Berobat dipuskesmas', 'Di Rumah', 'Cukup untuk 1 Bulan', 'Kedungwuni 2'),
('3326136106620062', 'Nur robitoh', 'Pekalongan ', '2022-06-21', 'Madukaran', 'Tidak Bekerja', 'SD', 2003, '1', 'Aman\r\n', 'Di Rumah', 'Cukup untuk 1 Bulan', 'Kedungwuni 2'),
('7167676712', 'nma', 'Pekalongan', '2000-02-23', 'alamat Rt rw', 'Wirausaha', 'SD', 2005, '2 ', 'aman', 'Lainnya', 'Cukup Untuk 1 Hari', 'Kedungwuni 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tema`
--

CREATE TABLE `tema` (
  `id_tema` int(11) NOT NULL,
  `nama_tema` varchar(100) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `level` enum('Administrator','Keluarga','Perawat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tema`
--

INSERT INTO `tema` (`id_tema`, `nama_tema`, `url`, `level`) VALUES
(1, 'Amuk/Perilaku Kekerasan', 'video/amuk_keluarga.php', 'Keluarga'),
(2, 'Halusinasi', 'video/halusinasi_keluarga.php', 'Keluarga'),
(3, 'Menarik Diri', 'video/menarik_diri_keluarga.php', 'Keluarga'),
(4, 'Harga Diri Rendah', 'video/hdr_keluarga.php', 'Keluarga'),
(5, 'Kurang Perawatan Diri', 'video/kuper_keluarga.php', 'Keluarga'),
(6, 'Amuk/Perilaku Kekerasan', 'video/amuk.php', 'Administrator'),
(7, 'Halusinasi', 'video/halusinasi.php', 'Administrator'),
(8, 'Menarik Diri', 'video/menarik_diri.php', 'Administrator'),
(9, 'Harga Diri Rendah', 'video/hdr.php', 'Administrator'),
(10, 'Kurang Perawatan Diri', 'video/kuper.php', 'Administrator'),
(11, 'Amuk/Perilaku Kekerasan', 'video/amuk_perawat.php', 'Perawat'),
(12, 'Halusinasi', 'video/halusinasi_perawat.php', 'Perawat'),
(13, 'Menarik Diri', 'video/menarik_diri_perawat.php', 'Perawat'),
(14, 'Harga Diri Rendah', 'video/hdr_perawat.php', 'Perawat'),
(15, 'Kurang Perawatan Diri', 'video/kuper_perawat.php', 'Perawat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Administrator','Perawat','Kader','Dinas','Dokter','Keluarga') NOT NULL,
  `nama` varchar(200) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `puskesmas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `level`, `nama`, `no_hp`, `puskesmas`) VALUES
('Ade hermawati', '0110', 'Keluarga', 'Ade hermawati', '0856-0050-8212', 'Wonopringgo'),
('admin', 'admin', 'Administrator', 'Mokhamad Arifin', '085123456', 'Wonopringgo'),
('Agung', 'talun', 'Keluarga', 'Agung s', '082345890123', 'Talun'),
('Aisyah', 'arshan1', 'Perawat', 'Aisyah Dzil Kamalah', '08156968112', 'Wonopringgo'),
('Aji pradana', 'amanah11', 'Perawat', 'Dwi aji pradana', '085526319057', 'Kedungwuni 2'),
('Aji123', 'pradana11', 'Keluarga', 'Dwi aji pradana', '085526319057', 'Talun'),
('alim', 'alim', 'Keluarga', 'alimaturohman', '081806744286', 'Kedungwuni 2'),
('Alipah', 'alipah', 'Kader', 'Alipah Ahmad', '085225514611', 'Tirto 2'),
('Aliyah', '123456', 'Keluarga', 'Aliyah', '081548417438', 'Kedungwuni 2'),
('Andy', '123', 'Keluarga', 'Andy Pramono', '081548563350', 'Kedungwuni 2'),
('Aria', 'ariaartasukma', 'Keluarga', 'Aria Arta Sukma', '081227503093', 'Kedungwuni 2'),
('Arief', 'Arief', 'Perawat', 'Arief', '085703185000', 'Kedungwuni 2'),
('Arif', 'arif', 'Keluarga', 'Mad arif', '088888888', 'Kedungwuni 2'),
('Arifah ', '123456', 'Perawat', 'Arifah puji artati ', '081343671066', 'Kesesi'),
('Aziz', 'aziz', 'Perawat', 'Abdul aziz', '087871068184', 'Tirto 2'),
('basyar', 'basyar', 'Perawat', 'khoirul basyar', '0895618470637', 'Wiradesa'),
('Capgawen', 'kdw33', 'Keluarga', 'Ibu', '08855667781888', 'Talun'),
('DEMY', '020365', 'Keluarga', 'Dimyati ', '08156912465', 'Kedungwuni 2'),
('Dr.denis', 'nunungok01', 'Dokter', 'Denis', '08568679130', 'Talun'),
('emy ', 'eyy', 'Keluarga', 'emy tufriyah ', '081548749287', 'Kedungwuni 2'),
('Endah', 'Endah', 'Keluarga', 'Endah', '082220022215', 'Kedungwuni 2'),
('FIFI', '020107', 'Kader', 'SITI NURHALIZA ALAFIAH', '085786903339', 'Kedungwuni 2'),
('Getas', 'getas', 'Keluarga', 'Getas', '000000', 'Wonopringgo'),
('hadipramono', 'sehatselalu', 'Keluarga', 'Hadi Pramono', '085642569050', 'Wonopringgo'),
('Hana', 'hana1704', 'Keluarga', 'Hana Nafiah', '085225548663', 'Kedungwuni 2'),
('Harti', 'talunn', 'Perawat', 'Harti Lestari', '085878552907', 'Talun'),
('huma', '12345', 'Keluarga', 'Huma', '987666', 'Kesesi'),
('Ibatul Uyun ', 'Sandiku27', 'Keluarga', 'Ibatul Uyun ', '081327862417', 'Wonopringgo'),
('Irfan', 'talun', 'Keluarga', 'Irfan m', '0815223695874', 'Talun'),
('Joko', '1345', 'Keluarga', 'Joko aldo hardianto', '085848422092', 'Tirto 2'),
('kdw2', 'kdw2', 'Keluarga', 'kdw', '02828282999', 'Kedungwuni 2'),
('Kiki', 'medono', 'Keluarga', 'Rizki Nuansa hadyan', '08122868565', 'Tirto 2'),
('Kim', 'saras212888', 'Keluarga', 'Nur Khakim', '085228005872', 'Kedungwuni 2'),
('laelysoftyan', 'laelysoftyan', 'Perawat', 'Laelysoftyan ', '081542010492', 'Talun'),
('Langgeng', 'lanhheng123', 'Kader', 'Langgeng Muntarmi', '085641922914', 'Tirto 2'),
('Lieya afida', '10021988', 'Perawat', 'Lia Afida', '082324069274', 'Kedungwuni 2'),
('Lisminah', '123', 'Keluarga', 'Lisminah', '085702317960', 'Kedungwuni 2'),
('M.MUFIDZ', '11042002', 'Kader', 'M.MUFIDZ', '085784477204', 'Tirto 2'),
('Mustakim', 'timnas', 'Keluarga', 'Mustakim', '085643515287', 'Kedungwuni 2'),
('Nisa ', 'nisadinana', 'Keluarga', 'nisa dinana', '082138607878', 'Kedungwuni 2'),
('nisa dinana', 'nisadinana', 'Dokter', 'Zuhrotunnisa Dinana', '082138607878', 'Kedungwuni 2'),
('Nur Ibatul Uyun ', 'Sandiku27', 'Kader', 'Nur Ibatul Uyun ', '085642648897', 'Wonopringgo'),
('NUR Maghfiroh', 'Nurma', 'Keluarga', 'NUR MAGHFIROH', '085742528008', 'Wonopringgo'),
('nurlaila', 'talun', 'Perawat', 'nurlaila', '085640072529', 'Talun'),
('Pradana aji', '11amanah', 'Perawat', 'Dwi aji pradana', '085526319057', 'Kedungwuni 2'),
('Resti', 'resti', 'Keluarga', 'Kharisma resti maulidiya', '085772256472', 'Kedungwuni 2'),
('RetnoIndriaty', '15031982', 'Kader', 'Retno indriaty', '08156915603', 'Wonopringgo'),
('Rifs', 'rifs1234', 'Keluarga', 'Moh. Riefqi Insani', '081229240094', 'Wonopringgo'),
('Rinsani', 'insani08', 'Kader', 'Moh. Riefqi Insani', '085742000003', 'Wonopringgo'),
('Rizki', '123', 'Keluarga', 'Rizki Amanati', '085643353928', 'Kedungwuni 2'),
('Rizky Amelia utami', 'rizkyamelia', 'Kader', 'Rizky Amelia utami', '085641438737', 'Wonopringgo'),
('Roby', '123', 'Keluarga', 'Roby', '085870184773', 'Kedungwuni 2'),
('Rofik', 'R4', 'Keluarga', 'Mohamad Rofik', '085642534474', 'Kedungwuni 2'),
('Rozanah', 'roza', 'Keluarga', 'Nur rozanah', '085648855568', 'Kedungwuni 2'),
('Sari', 'sari1234', 'Keluarga', 'SRIYANTI', '081392202088', 'Kesesi'),
('saya', '123456', 'Administrator', 'Humaidi', '082324118692', 'Kesesi'),
('septi', 'septi', 'Keluarga', 'Septi rahayu rini', '085225689248', 'Kedungwuni 2'),
('Singakepo', 'wopy', 'Perawat', 'Bogimardian', '08157711208', 'Wonopringgo'),
('Siti', 'talun', 'Keluarga', 'Siti M', '088899990000', 'Talun'),
('Sulistianingsih', '040465', 'Perawat', 'Sulistianingsih', '085728110560', 'Kedungwuni 2'),
('Tanti', '210103', 'Keluarga', 'Tanti silfiya', '085742865376', 'Kedungwuni 2'),
('Tarmidi', 'undang', 'Keluarga', 'Tarmidi saja', '088876543210', 'Kedungwuni 2'),
('Taufik ', 'puskesmas', 'Kader', 'Taufik Hidayat', '085740864963', 'Wiradesa'),
('Taufik Hidayat', 'puskesmas', 'Kader', 'Taufik Hidayat', '085740864963', 'Wiradesa'),
('testing', 'testing', 'Keluarga', 'Keluarga', '0', 'Tirto 2'),
('text', 'text', 'Dinas', 'text', 'text', 'Wonopringgo'),
('titik haryani ', 'titikharyani', 'Kader', 'titik haryani ', '082134888371', 'Wonopringgo'),
('Umikk', 'umi28092000', 'Keluarga', 'Umi Azizah', '081548333246', 'Kedungwuni 2'),
('Wati', '0110', 'Keluarga', 'Ade hermawati', '0856-0050-8212', 'Wonopringgo'),
('Winarsih', '12345', 'Keluarga', 'Winarsih', '089603209249', 'Kedungwuni 2'),
('Wiwik taruni', '131', 'Keluarga', 'Wiwik taruni', '081229206386', 'Wonopringgo'),
('Yaya', 'yaya', 'Keluarga', 'Yaya Basuki ', '082326084250', 'Talun'),
('Yuliana', 'Yuliana', 'Kader', 'Yuliana', '087868420662', 'Wonopringgo'),
('Yullaicha', 'jiwaku', 'Kader', 'Yullaicha', '087723922309', 'Tirto 2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `kuis`
--
ALTER TABLE `kuis`
  ADD PRIMARY KEY (`id_kuis`);

--
-- Indeks untuk tabel `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indeks untuk tabel `odgj`
--
ALTER TABLE `odgj`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id_tema`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `kuis`
--
ALTER TABLE `kuis`
  MODIFY `id_kuis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tema`
--
ALTER TABLE `tema`
  MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
