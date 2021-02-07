-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 04:31 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` tinyint(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'gsmart', 'f1fd3e8aaad5f0625d12880fefd1a668d81e87e9', 'Antonius');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `topik` varchar(225) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `pengarang` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `kata_kunci` text NOT NULL,
  `cover` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL,
  `kurikulum` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_guru`, `kelas`, `tahun`, `topik`, `judul`, `pengarang`, `deskripsi`, `kata_kunci`, `cover`, `file`, `kurikulum`) VALUES
(1, 1, 1, 2017, 'Tematik', 'Kelas 1 Tema 8 Buku Guru - Peristiwa Alam', 'Yun Kusumawati, Panca Ariguntar, Lubna Assagaf', '<p>Buku Guru ini sebagai petunjuk penggunaan Buku Siswa Kelas 1 Tema 8 tentang Peristiwa Alam</p>', 'BSE, Buku Guru, Kelas 1, Tema 8, Peristiwa alam', 'iqra_daily_target_1.png', '865-Article_Text-1644-1-10-20180726.pdf', 'K-13'),
(2, 1, 2, 2017, 'Tematik', 'Kelas 1 Tema 8 Buku Siswa - Peristiwa Alam', 'Yun Kusumawati, Panca Ariguntar, Lubna Assagaf', '<p>Buku Siswa ini sebagai pegangan Siswa Kelas 1 Tema 8 tentang Peristiwa Alam . Terdiri dari 4 Sub Tema, yaitu peristiwa siang dan malam, penghujan, kemarau, dan bencana alam</p>', 'BSE, Buku Siswa, Kelas 1, Tema 8, Peristiwa alam', 'iqra_daily_target.png', '152866951a2e8d02954fb4a9e00b308139f8.pdf', 'KTSP'),
(7, 1, 1, 2017, 'Tematik', 'Kelas 1 Tema 8', 'Deni Ambarwati', '<p>daskjcskjabckasbkcbskab</p>', 'djaskdhkjasdhkjsahd', 'iqra_daily_target_11.png', '266-Article_Text-454-1-10-20190111.pdf', 'K-13');

-- --------------------------------------------------------

--
-- Table structure for table `edukatif`
--

CREATE TABLE `edukatif` (
  `id_edukatif` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `topik` varchar(225) NOT NULL,
  `url` text NOT NULL,
  `deskripsi` text NOT NULL,
  `kata_kunci` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edukatif`
--

INSERT INTO `edukatif` (`id_edukatif`, `id_guru`, `judul`, `topik`, `url`, `deskripsi`, `kata_kunci`) VALUES
(1, 0, 'Bukupaket.com', 'Buku Sekolah', 'https://www.bukupaket.com/', '<p>Situs ini berisi berbagai macam buku BSE dan rangkuman materi dari SD, &nbsp;SMP hingga SMA/SMK.</p>', 'Buku BSE, SD, SMP, SMA, Bank Soal, Ringkasan Materi');

-- --------------------------------------------------------

--
-- Table structure for table `lkpd`
--

CREATE TABLE `lkpd` (
  `id_lkpd` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `muatan` varchar(225) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `kata_kunci` text NOT NULL,
  `cover` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lkpd`
--

INSERT INTO `lkpd` (`id_lkpd`, `id_guru`, `kelas`, `muatan`, `judul`, `deskripsi`, `kata_kunci`, `cover`, `file`) VALUES
(3, 0, 2, 'Tematik', 'LKPD kelas 2 tema 3 subtema 3 pembelajaran 3 - tugasku sehari-hari - Bekti Kawuri', '<p>LKPD Kelas 2 Semester 1 Tema 3 Subtema 3 Tugasku sehari-hari,&nbsp;<br />\r\nSub Tema &nbsp;3. Tugasku sebagai umat beragama<br />\r\nPembelajaran ke &nbsp;3<br />\r\nTerdiri dari 3 Muatan yaitu Bahasa indonesia, PKn, dan Matematika</p>', 'LKPD, Kelas 3, Tema 3, Subtema 3 Pembelajaran 3, Tugasku sehari- hari', 'iqra_daily_target.png', 'Buku_Panduan_SI_Infra_Grobogan.docx'),
(4, 0, 2, 'Tematik', 'LKPD kelas 2 tema 3 subtema 3 pembelajaran 3 - tugasku sehari-hari - Bekti Kawuri', '<p>LKPD Kelas 2 Semester 1 Tema 3 Subtema 3 Tugasku sehari-hari,&nbsp;<br />\r\nSub Tema &nbsp;3. Tugasku sebagai umat beragama<br />\r\nPembelajaran ke &nbsp;3<br />\r\nTerdiri dari 3 Muatan yaitu Bahasa indonesia, PKn, dan Matematika</p>', 'LKPD, Kelas 3, Tema 3, Subtema 3 Pembelajaran 3, Tugasku sehari- hari', 'iqra_daily_target.png', '152866951a2e8d02954fb4a9e00b308139f8.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id_pengaturan` tinyint(3) NOT NULL,
  `kolom_pengaturan` varchar(100) NOT NULL,
  `isi_pengaturan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id_pengaturan`, `kolom_pengaturan`, `isi_pengaturan`) VALUES
(1, 'nama_web', 'G-SMART | ICT Service Provider'),
(2, 'deskripsi_web', 'pengaturan 1 pengaturan 1'),
(3, 'gambar_hero', 'http://localhost/proyek/gsmart/pengunjung/img/hero.jpg'),
(4, 'isi_hero', '<div class=\"col-md-8 col-md-offset-2 text-center\">\r\n                    <h1>Takes Your Great Experience With Us</h1>\r\n                    <p>Time Excelindo is the best partner for your business</p>\r\n                    <a href=\"#about\" class=\"page-scroll btn-get-started wow fadeInLeft\">About Us</a>\r\n                    <a href=\"#service\" class=\"page-scroll btn-projects wow fadeInRight\">Our Service</a>\r\n                </div>'),
(5, 'home_about', '                <div class=\"col-lg-6\">\r\n                    <div class=\"about-image wow fadeInLeft\">\r\n                        <img src=\"http://localhost/excelindo/assets/media/about1.jpg\" alt=\"\" class=\"img-responsive\">\r\n                    </div>\r\n                </div>\r\n                <div class=\"col-lg-6\">\r\n                    <h2 class=\"section-heading\">About Time Excelindo</h2>\r\n                    <p>Media Internet juga memungkinkan penggunanya untuk berkorespondensi dengan cepat dan mudah menggunakan e-mail. Begitu banyak hal yang bisa dilakukan dengan media Internet, mulai dari sekedar browsing untuk mencari informasi, chatting, sampai dengan bisnis (commerce). Karena berbagai kegunaan yang ditawarkan, Internet saat ini sudah menjadi salah satu kebutuhan bagi perusahaan.</p>\r\n                    <p>Saat bisnis anda berkembang, tantangan yang ditemui semakin banyak. Begitu pula tantangan dalam komunikasi internal dan eksternal serta tantangan dalam memenuhi kebutuhan tersebut dengan cara yang paling efisien, efektif dan terpercaya.</p>\r\n                    <a href=\"http://localhost/excelindo/profile/detail/about-us\" class=\"btn-get-started sr-button\">Read More</a>\r\n                </div>\r\n            '),
(6, 'home', '<h1 class=\"section-heading\">Komponen Materi</h1>\r\n <p></p>'),
(7, 'home_lkpd', ' <h1 class=\"section-heading\">LKPD</h1>\r\n<p></p>'),
(8, 'home_buku', '<h1 class=\"section-title\">Buku Teks Pelajaran</h1>\r\n<p style=\"margin-bottom:50px\">Explore more about Time Excelindo and technology</p>'),
(9, 'footer_1', '<div class=\"col-md-6 text-left\">\r\n<h2>Universitas Sarjanawiyata Tamansiswa Yogyakarta</h2>\r\n<p><strong>Kontak Kami</strong></p>\r\n<p>\r\nPhone: (0274) 562265 <br>\r\nEmail: gateknoofficial@gmail.com <br>\r\nJl. Kusumanegara No.157, Muja Muju, Kec. Umbulharjo, <br/> Kota Yogyakarta, <br/>Daerah Istimewa Yogyakarta 55165</p>\r\n</div>'),
(10, 'footer_2', '<div class=\"col-md-6 text-right\">\r\n                    <ul class=\"footer-menu\">\r\n                        <li><a href=\"\">Home</a></li>\r\n                        <li><a href=\"\">news</a></li>\r\n                        <li><a href=\"\">Product</a></li>\r\n                        <li><a href=\"\">Portfolio</a></li>\r\n                        <li><a href=\"\">lowongan</a></li>\r\n                    </ul>\r\n                    <ul class=\"footer-sosmed\" style=\"margin-bottom:15px\">\r\n                      <li>\r\n                          <img src=\"http://localhost/excelindo/assets/media/fb.png\" alt=\"\">\r\n                      </li>\r\n                      <li>\r\n                          <img src=\"http://localhost/excelindo/assets/media/tw.png\" alt=\"\">\r\n                      </li>\r\n                  </ul>\r\n<div>\r\nOffice Yogyakarta<br>\r\nJl. Kusumanegara No.157, Muja Muju, Kec. Umbulharjo, <br/> Kota Yogyakarta, <br/>Daerah Istimewa Yogyakarta 55165 <br>\r\nPhone: (0274) 562265<br>\r\nEmail: gateknoofficial@gmail.com</div>\r\n              </div>'),
(11, 'footer_copyright', '\r\n                copyright &copy; team-coding.com. 2019 \r\n            '),
(12, 'kontak_hubungi', '                     <h3>Our Office</h3>                     <p>                         Jl. Kusumanegara No.157, Muja Muju, Kec. Umbulharjo, <br/> Kota Yogyakarta, <br/>Daerah Istimewa Yogyakarta 55165 </p>                     <h3>Follow Us On Social Media</h3>                     <ul class=\"contact-social\">                         <li><a href=\"\"><i class=\"fa fa-facebook fa-2x\"></i></a></li>                         <li><a href=\"\"><i class=\"fa fa-instagram fa-2x\"></i></a></li>                         <li><a href=\"\"><i class=\"fa fa-twitter fa-2x\"></i></a></li>                         <li><a href=\"\"><i class=\"fa fa-linkedin fa-2x\"></i></a></li>                     </ul>                                       '),
(13, 'kontak_peta', 'Jl. Kusumanegara No.157, Muja Muju, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55165'),
(14, 'kontak_email_fw', 'teamtrainit@gmail.com,arifrahman2592@gmail.com,celmirashop@gmail.com'),
(15, 'kontak_header', '<h1>Hubungi Kami</h1>\r\n<p>Ceritakan pada kami solusi bisnis apa yang Anda perlukan, Time Excelindo siap membantu memberikan solusi terbaik untuk bisnis Anda</p>'),
(16, 'produk_header', '<h1>Produk Kami</h1>\r\n                    <p>Time Excelindo menghasilkan mahakarya yang luar biasa seiring berjalannya waktu</p>'),
(17, 'produk_quotes', 'The best Information Technology product made with love'),
(18, 'header', ' <h1>G-SMART</h1>\r\n                    <p>Gerakan Sadar Teknologi bagi Guru SD</p>'),
(19, 'career_header', '<h1>Career</h1>\r\n                    <p>Begabung dan menjadi bagian dari perjalanan Time Excelindo</p>'),
(20, 'career_konten', '<h3>Mari Tumbuh Bersama Kami</h3>\r\n                    <p>\r\n                        Graha Universitas AMIKOM <br>\r\n                        Jl. Cempaka Baru No R4 Condong Catur Sleman Yogyakarta 55283\r\n                    </p>\r\n               '),
(21, 'klien_header', '<h1>Klien Kami</h1>\r\n                    <p>Dalam perjalanananya, Time Excelindo telah dipercaya lebih dari 50 Klien baik Swasta maupun instansi pemerintah</p>'),
(22, 'portfolio_header', '<h1>Portfolio Time Excelindo</h1>\r\n<p>Kami mengabadikan karya-karya terbaik Time Excelindo</p>'),
(23, 'pengirim_email', 'cs@teamtrainit.com'),
(24, 'isi_email_fw', '\r\n<!DOCTYPE html>\r\n<html>\r\n\r\n<head>\r\n    <title>Email Forworder Buku Tamu Time Excelindo</title>\r\n</head>\r\n\r\n<body style=\"background: #f2f2f2; padding: 15px;\">\r\n    <div class=\"box\" style=\"margin-bottom: 20px;background-color: #ffffff;padding: 20px;-webkit-border-radius: 2px;-webkit-background-clip: padding-box;-moz-border-radius: 2px;-moz-background-clip: padding;border-radius: 2px;background-clip: padding-box;-webkit-box-shadow: 0 1px 2px rgba(71, 73, 72, 0.25);-moz-box-shadow: 0 1px 2px rgba(71, 73, 72, 0.25);box-shadow: 0 1px 2px rgba(71, 73, 72, 0.25);\">\r\n        <div class=\"box-header\" style=\"margin: 0 -20px;padding: 0 20px;border-bottom: 1px solid #f0f0f0;padding-bottom: 20px;background-color: #ffffff;\">\r\n            <div style=\"width: 50%;float: left;\">\r\n                <h3 class=\"judul\" style=\"font-size: 16px;line-height: 24px;color: #474948;font-weight: 700;margin: 0;\">Kepada Yth. {email_fw}</h3>\r\n                <h5 style=\"font-size: 14px;line-height: 21px;color: #939694;font-weight: 400;margin: 0;\">excelindo.co.id</h5> </div>\r\n            <div style=\"width: 50%;float: left; text-align: right;\"> <img src=\"https://Jalaraya.com/assets/images/logo_2.png\" width=\"200px;\" alt=\"Jalaraya\"> </div>\r\n            <div style=\"clear: both;\"></div>\r\n        </div>\r\n        <div class=\"box-body\" style=\"margin-top: 20px;\">\r\n            <p>\r\n                Kepad Sdr. <strong>{email_fw}</strong>, Email ini adalah pemberitahuan bahwa {nama_bukutamu} mengirimkan pesan yang berisi <br>\r\n                <strong>{isi_bukutamu}</strong> pada tanggal {tanggal_bukutamu}\r\n            </p>\r\n            <table>\r\n                <tr>\r\n                    <th style=\"text-align: left;\">Nama</th>\r\n                    <th>:</th>\r\n                    <th style=\"text-align: left;\">{nama_bukutamu}</th>\r\n                </tr>\r\n                <tr>\r\n                    <th style=\"text-align: left;\">Email</th>\r\n                    <th>:</th>\r\n                    <th style=\"text-align: left;\">{email_bukutamu}</th>\r\n                </tr>\r\n                <tr>\r\n                    <th style=\"text-align: left;\">Telepon</th>\r\n                    <th>:</th>\r\n                    <th style=\"text-align: left;\">{telepon_bukutamu}</th>\r\n                </tr>\r\n                \r\n            </table>\r\n            <div style=\"clear: both;\"></div>\r\n            <br>\r\n            <br> </div>\r\n        <div class=\"box-footer\" style=\"margin: 20px -20px -20px;padding: 20px;border-top: 1px solid #f0f0f0;background-color: #f9f9f9;\"> <a href=\"#\" class=\"btn btn-color\" style=\"color: #fff;background-color: #108bea;display: inline-block;padding: 6px 12px;margin-bottom: 0;font-size: 14px;font-weight: 400;line-height: 1.42857143;text-align: center;white-space: nowrap;vertical-align: middle;-ms-touch-action: manipulation;touch-action: manipulation;cursor: pointer;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;background-image: none;border: 1px solid transparent;border-radius: 4px;text-decoration: none;\"><i class=\"fa fa-globe\"></i> excelindo.co.id</a> </div>\r\n    </div>\r\n</body>\r\n\r\n</html>'),
(25, 'api_google_map', 'AIzaSyAZlgi_GjRxGAd-wPYqU9y-lp4PQSA-j1o'),
(26, 'home_soal', '<h1 class=\"section-title\">Bank Soal</h1>\r\n<p style=\"margin-bottom:50px\">Explore more about Time Excelindo and technology</p>'),
(27, 'home_rpp', '<h1 class=\"section-title\">RPP</h1>\r\n<p style=\"margin-bottom:50px\">Explore more about Time Excelindo and technology</p>');

-- --------------------------------------------------------

--
-- Table structure for table `referensi`
--

CREATE TABLE `referensi` (
  `id_referensi` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `topik` varchar(225) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `pengarang` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `kata_kunci` text NOT NULL,
  `cover` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `referensi`
--

INSERT INTO `referensi` (`id_referensi`, `id_guru`, `tahun`, `topik`, `judul`, `pengarang`, `deskripsi`, `kata_kunci`, `cover`, `file`) VALUES
(1, 0, 2017, 'Tematik', 'Kelas 1 Tema 8 referensi Guru - Peristiwa Alam', 'Yun Kusumawati, Panca Ariguntar, Lubna Assagaf', 'referensi Guru ini sebagai petunjuk penggunaan referensi Siswa Kelas 1 Tema 8 tentang Peristiwa Alam', 'BSE, referensi Guru, Kelas 1, Tema 8, Peristiwa alam', '', ''),
(7, 0, 2017, 'Perangkat Mengajar', 'Panduan Teknis Penyusunan RPP untuk Sekolah Dasar', 'Kemdikbud', '<p>Panduan tersebut disusun sebagai acuan bagi guru, kepala sekolah, pengawas, para<br />\r\npembina pada Dinas Pendidikan, orang tua, serta masyarakat dalam melaksanakan,<br />\r\nmembina, dan memfasilitasi pelaksanaan Kurikulum 2013 di Sekolah Dasar.</p>', 'matematika, miskonsepsi', 'algoritma-ahp-saw-dll.png', '102318950Pedoman_penyusunan_proposal.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `rpp`
--

CREATE TABLE `rpp` (
  `id_rpp` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `muatan` varchar(225) NOT NULL,
  `jenis` varchar(225) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `kata_kunci` text NOT NULL,
  `cover` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rpp`
--

INSERT INTO `rpp` (`id_rpp`, `id_guru`, `kelas`, `muatan`, `jenis`, `judul`, `deskripsi`, `kata_kunci`, `cover`, `file`) VALUES
(1, 0, 1, 'Tematik', 'RPP', 'RPP KELAS 1 TEMA 4 SUBTEMA 1 PB 1', 'RPP KELAS 1 TEMA 4 SUBTEMA 1 Pembelajaran 1 tentang anggota keluargaku', 'Kelas 1, tematik, anggota keluargaku', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `muatan` varchar(225) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `kata_kunci` text NOT NULL,
  `cover` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `id_guru`, `kelas`, `muatan`, `judul`, `deskripsi`, `kata_kunci`, `cover`, `file`) VALUES
(4, 0, 1, 'Bahasa Indonesia', 'Soal Uji Kendali Mutu (UKM) SD Kelas 1 Bahasa Indonesia (Soal dan Jawaban)', '<p>Soal uji kendali mutu (UKM) SD Kelas 1 mata pelajaran bahasa Indonesia, berupa soal pilihan ganda, isian singkat, dan soal uraian. Serta dilengkapi dengan kunci jawaban dan pedoman penskoran&nbsp;</p>', 'UKM, Bahasa Indonesia, Kelas 1 SD', 'tabunagan_emas.jpg', '524-1483-1-PB.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `jenis` enum('Guru','Siswa','User') NOT NULL DEFAULT 'User',
  `asal_sekolah` varchar(225) NOT NULL,
  `alamat_sekolah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama`, `jk`, `jenis`, `asal_sekolah`, `alamat_sekolah`) VALUES
(1, 'antoniusardyyansah@gmail.com', '79a1ecaea9840e705494ec75b8c77adb27b728d2', 'Deni Ambarwati', 'Perempuan', 'Guru', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `edukatif`
--
ALTER TABLE `edukatif`
  ADD PRIMARY KEY (`id_edukatif`);

--
-- Indexes for table `lkpd`
--
ALTER TABLE `lkpd`
  ADD PRIMARY KEY (`id_lkpd`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `referensi`
--
ALTER TABLE `referensi`
  ADD PRIMARY KEY (`id_referensi`);

--
-- Indexes for table `rpp`
--
ALTER TABLE `rpp`
  ADD PRIMARY KEY (`id_rpp`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `edukatif`
--
ALTER TABLE `edukatif`
  MODIFY `id_edukatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lkpd`
--
ALTER TABLE `lkpd`
  MODIFY `id_lkpd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id_pengaturan` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `referensi`
--
ALTER TABLE `referensi`
  MODIFY `id_referensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rpp`
--
ALTER TABLE `rpp`
  MODIFY `id_rpp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
