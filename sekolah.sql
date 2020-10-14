-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 02:54 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_ber` int(11) NOT NULL,
  `jdl` varchar(255) NOT NULL,
  `kategori` int(20) NOT NULL,
  `isi` mediumtext NOT NULL,
  `tgl_input` date NOT NULL,
  `id_user` int(16) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_ber`, `jdl`, `kategori`, `isi`, `tgl_input`, `id_user`, `image`) VALUES
(8, 'Berita Belajar', 0, '<h2>Masukkan Isi Berita aja sekarang kan lagi musim corna, yuk kita keluar bersama sama untuk memberantas corona.</h2>\r\n', '2020-09-09', 12184783, 'img1589870709.jpg'),
(9, 'Perkenalkan Kami', 1, '<p><img alt="" src="blob:http://localhost/3d114976-fac3-4eae-9e72-2aa0cbc57991" width="800"></p>\r\n\r\n<figcaption> </figcaption>\r\n\r\n<p> </p>\r\n\r\n<p>"></p>\r\n\r\n<p>kami adalah sekumpulan para pendidik ra asy syawaliyyah yang akan mengajar anak anda dengan sepenuh hati dan mendidiknya dengan penuh kasih sayang.</p>\r\n\r\n<figure class="easyimage easyimage-full"><img alt="" src="blob:http://localhost/3d114976-fac3-4eae-9e72-2aa0cbc57991" width="800">\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p> </p>\r\n', '2020-05-23', 12184783, 'img1589876029.jpg'),
(10, 'Perkenalkan saya', 1, '<p><img alt="" src="blob:http://localhost/3d114976-fac3-4eae-9e72-2aa0cbc57991" width="800"></p>\r\n\r\n<figcaption> </figcaption>\r\n\r\n<p> </p>\r\n\r\n<p>"></p>\r\n\r\n<p>kami adalah sekumpulan para pendidik ra asy syawaliyyah yang akan mengajar anak anda dengan sepenuh hati dan mendidiknya dengan penuh kasih sayang.</p>\r\n\r\n<figure class="easyimage easyimage-full"><img alt="" src="blob:http://localhost/3d114976-fac3-4eae-9e72-2aa0cbc57991" width="800">\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p> </p>\r\n', '2020-05-23', 12184783, 'img1589876029.jpg'),
(11, 'Perkenalkan Kami1', 2, '<p><img alt="" src="blob:http://localhost/3d114976-fac3-4eae-9e72-2aa0cbc57991" width="800"></p>\r\n\r\n<figcaption> </figcaption>\r\n\r\n<p> </p>\r\n\r\n<p>"></p>\r\n\r\n<p>kami adalah sekumpulan para pendidik ra asy syawaliyyah yang akan mengajar anak anda dengan sepenuh hati dan mendidiknya dengan penuh kasih sayang.</p>\r\n\r\n<figure class="easyimage easyimage-full"><img alt="" src="blob:http://localhost/3d114976-fac3-4eae-9e72-2aa0cbc57991" width="800">\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p> </p>\r\n', '2020-05-23', 12184783, 'img1589876029.jpg'),
(12, 'Perkenalkan saya2', 1, '<p><img alt="" src="blob:http://localhost/3d114976-fac3-4eae-9e72-2aa0cbc57991" width="800"></p>\r\n\r\n<figcaption> </figcaption>\r\n\r\n<p> </p>\r\n\r\n<p>"></p>\r\n\r\n<p>kami adalah sekumpulan para pendidik ra asy syawaliyyah yang akan mengajar anak anda dengan sepenuh hati dan mendidiknya dengan penuh kasih sayang.</p>\r\n\r\n<figure class="easyimage easyimage-full"><img alt="" src="blob:http://localhost/3d114976-fac3-4eae-9e72-2aa0cbc57991" width="800">\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p> </p>\r\n', '2020-05-30', 12184783, 'img1589876029.jpg'),
(13, 'mundur', 2, '<p>Masukkan Isi Berita aja sekarang kan lagi musim corna, yuk kita keluar bersama sama untuk memberantas corona.</p>\r\n', '2020-05-23', 12184783, 'img1589870709.jpg'),
(14, 'maju1', 1, '<p>Masukkan Isi Berita aja sekarang kan lagi musim corna, yuk kita keluar bersama sama untuk memberantas corona.</p>\r\n', '2020-05-23', 12184783, 'img1589870709.jpg'),
(15, 'bangkit', 2, '<p>Masukkan Isi fefefeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee</p>\r\n', '2020-05-23', 12184783, '');

-- --------------------------------------------------------

--
-- Table structure for table `detail_user`
--

CREATE TABLE `detail_user` (
  `id_detail` int(11) NOT NULL,
  `user` int(128) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_user`
--

INSERT INTO `detail_user` (`id_detail`, `user`, `jk`, `alamat`) VALUES
(1, 12184783, 'laki-laki', 'rancadulang');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` int(55) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tpt_lhr` varchar(128) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `ajar` varchar(33) NOT NULL,
  `jabatan` int(10) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `tpt_lhr`, `tgl_lhr`, `jk`, `alamat`, `telp`, `ajar`, `jabatan`, `image`) VALUES
(212121212, 'hilman', 'tangerang', '2000-12-05', 'laki-laki', 'newyork', '089524113345', 'Matematika', 1, 'pro1589811988.jpg'),
(213222222, 'aulia', 'tangerang', '2000-12-15', 'perempuan', 'tangerang', '+6289689321673', 'B.Indonesia', 2, 'team-2.jpg'),
(213222225, 'joko', 'tangerang', '2000-12-05', 'laki-laki', 'tangerang', '2147483647', 'B.Inggris', 3, 'pro1589692428.jpg'),
(213222227, 'hilmaninaja', 'jawa', '2020-05-06', 'laki-laki', 'jonggol', '+6289689321698', 'Penjaskes', 7, 'img1589863191.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(10) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`) VALUES
(1, 'Kepala Sekolah'),
(2, 'Bidang Kesiswaan'),
(3, 'Bidang pengajaran  '),
(4, 'Sarana&Pra Sarana'),
(6, 'teller'),
(7, 'Guru');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kat` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `kategori`) VALUES
(1, 'Sekolah'),
(2, 'Sains');

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id` int(10) NOT NULL,
  `pelajaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`id`, `pelajaran`) VALUES
(221, 'Matematika'),
(222, 'IPA'),
(223, 'IPS'),
(224, 'B.Indonesia'),
(225, 'B.Inggris'),
(226, 'PKN'),
(227, 'Penjaskes'),
(228, 'SBK'),
(229, 'Agama'),
(230, 'TIK'),
(231, 'ski');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_daftar` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tpt_lhr` varchar(100) NOT NULL,
  `tgl_lhr` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `tpt_tgl` varchar(50) NOT NULL,
  `ayah_nama` varchar(100) NOT NULL,
  `ayah_nik` int(100) NOT NULL,
  `ayah_kerja` varchar(50) NOT NULL,
  `ayah_gaji` varchar(50) NOT NULL,
  `ibu_nama` varchar(100) NOT NULL,
  `ibu_nik` int(100) NOT NULL,
  `ibu_kerja` varchar(50) NOT NULL,
  `ibu_gaji` varchar(50) NOT NULL,
  `wali_nama` varchar(100) NOT NULL,
  `wali_nik` int(100) NOT NULL,
  `wali_kerja` varchar(50) NOT NULL,
  `wali_gaji` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id_daftar`, `nama`, `jk`, `nisn`, `nik`, `agama`, `tpt_lhr`, `tgl_lhr`, `negara`, `alamat`, `tpt_tgl`, `ayah_nama`, `ayah_nik`, `ayah_kerja`, `ayah_gaji`, `ibu_nama`, `ibu_nik`, `ibu_kerja`, `ibu_gaji`, `wali_nama`, `wali_nik`, `wali_kerja`, `wali_gaji`, `telp`, `hp`, `email`) VALUES
(1, 'hilmaninajas', 'Laki-Laki', '2147483647', '2147483647', 'Islam', 'jawa', '2000-05-12', 'Indonesia', 'tangerang\r\n', 'Bersama Orang Tua', 'Madrozie', 2147483647, 'Karyawan Swasta', 'Rp 500.000 - Rp 999.999', 'siti jubaedah', 2147483647, 'Wirausaha', 'Rp 1.000.000 - Rp 1.999.999', 'Siti jubaedah', 2147483647, 'Wirausaha', 'Rp 1.000.000 - Rp 1.999.999', '089524113345', '089524113345', 'hilmanahmad089@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `jdl` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `jdl`, `isi`, `tgl_input`) VALUES
(2, 'Masukk!!', 'Besok Masuk Lagi Ya Anak-Anak', '2020-05-21'),
(3, 'Masukk!!', 'Besok Masuk Lagi Ya Anak-Anak', '2020-05-21'),
(4, 'Masukk!!', 'Besok Masuk Lagi Ya Anak-Anak', '2020-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `ppdb`
--

CREATE TABLE `ppdb` (
  `id` int(11) NOT NULL,
  `b_daftar` varchar(30) NOT NULL,
  `b_spp` varchar(30) NOT NULL,
  `b_seragam` varchar(30) NOT NULL,
  `b_bangunan` varchar(30) NOT NULL,
  `prosedur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppdb`
--

INSERT INTO `ppdb` (`id`, `b_daftar`, `b_spp`, `b_seragam`, `b_bangunan`, `prosedur`) VALUES
(0, '36000', '85000', '550000', '150000', '<h2>                                                       GELOMBANG 1</h2>\r\n\r\n<p> </p>\r\n\r\n<p>10 Oct - 20 Dec 2019</p>\r\n\r\n<p>Free WIFI</p>\r\n\r\n<p>Siswa Yatim Free SPP (Lampirkan SKTM dan Surat Kematian Orang Tua)</p>\r\n\r\n<p>Siswa Tidak Mampu Dapat Bantuan Sesuai Kebijakan Kepala Madrasah (Lampirkan SKTM)</p>\r\n\r\n<p>Beasiswa Bagi Siswa Berprestasi Setelah Masuk RA Asy Syawaliyyah</p>\r\n\r\n<h2>                                                      GELOMBANG 2</h2>\r\n\r\n<p> </p>\r\n\r\n<p>05 Januari - 31 Maret 2020</p>\r\n\r\n<p>Free WIFI</p>\r\n\r\n<p>Siswa Yatim Free SPP (Lampirkan SKTM dan Surat Kematian Orang Tua)</p>\r\n\r\n<p>Siswa Tidak Mampu Dapat Bantuan Sesuai Kebijakan Kepala Madrasah (Lampirkan SKTM)</p>\r\n\r\n<p>Beasiswa Bagi Siswa Berprestasi Setelah Masuk RA Asy Syawaliyyah</p>\r\n\r\n<h2>                                                        GELOMBANG 3</h2>\r\n\r\n<p> </p>\r\n\r\n<p>01 April - 11 Juli 2020</p>\r\n\r\n<p>Free WIFI</p>\r\n\r\n<p>Siswa Yatim Free SPP (Lampirkan SKTM dan Surat Kematian Orang Tua)</p>\r\n\r\n<p>Siswa Tidak Mampu Dapat Bantuan Sesuai Kebijakan Kepala Madrasah (Lampirkan SKTM)</p>\r\n\r\n<p>Beasiswa Bagi Siswa Berprestasi Setelah Masuk RA Asy Syawaliyyah</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tpt_lhr` varchar(50) NOT NULL,
  `tgl_lhr` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `tpt_tgl` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `ayah_nama` varchar(200) NOT NULL,
  `ayah_nik` varchar(50) NOT NULL,
  `ayah_kerja` varchar(100) NOT NULL,
  `ayah_gaji` varchar(50) NOT NULL,
  `ibu_nama` varchar(200) NOT NULL,
  `ibu_nik` varchar(50) NOT NULL,
  `ibu_kerja` varchar(100) NOT NULL,
  `ibu_gaji` varchar(50) NOT NULL,
  `wali_nama` varchar(200) NOT NULL,
  `wali_nik` varchar(50) NOT NULL,
  `wali_kerja` varchar(100) NOT NULL,
  `wali_gaji` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nik`, `nama`, `jk`, `tpt_lhr`, `tgl_lhr`, `agama`, `negara`, `tpt_tgl`, `alamat`, `ayah_nama`, `ayah_nik`, `ayah_kerja`, `ayah_gaji`, `ibu_nama`, `ibu_nik`, `ibu_kerja`, `ibu_gaji`, `wali_nama`, `wali_nik`, `wali_kerja`, `wali_gaji`, `telp`, `hp`, `email`, `password`, `image`) VALUES
('12180057', '1211212121', 'firdiani', 'Perempuan', 'tangerang', '', 'Pilih Agama', 'Pilih kewarganegaraan', 'Pilih Tempat Tinggal', 'rancadulang', 'says', '34343', 'Tidak Bekerja', 'Kurang dari Rp 500.000', 'ereee', '2147483647', 'Tidak Bekerja', 'Kurang dari Rp 500.000', 'wali', '12121221', '-', '-', '089773737373', '12121212121', 'auliakhusnul73@gmail.com', '$2y$10$CGmOieUT6IuOmHu7WE/JzO/nQQ.xagnYy97VJNyj/C40iL6pe2tG6', 'pro1589814055.jpg'),
('12180909', '2147483647', 'teller', 'Laki-Laki', 'tangerang', '2020-07-21', 'Islam', 'Indonesia', 'Kos', 'ttyttytt', 'ajax', '0', '-pilih pekerjaan-', '-pilih gaji-', 'ejek', '0', '-pilih pekerjaan-', '-pilih gaji-', '', '0', '-pilih pekerjaan-', '-pilih gaji-', '', '', '@gmail.com', '$2y$10$fbm1m9gGmy9raj24GKHaMOLdiXGdpDgiCi0FznLoUh2.4sL6cQ7gG', 'default.jpg'),
('12184747', '367107070892827', 'zahraaa', 'Perempuan', 'tangerang', '2020-09-18', 'Islam', 'Indonesia', 'Bersama Orang Tua', '', '', '', '-pilih pekerjaan-', '-pilih gaji-', '', '', '-pilih pekerjaan-', '-pilih gaji-', '', '', '-pilih pekerjaan-', '-pilih gaji-', '', '', '@gmail.com', '$2y$10$hs8h/1/jfWeTuy7bjOnMneR5qKMTLKJniDqaGw//h4e2h31ceg54u', 'default.jpg'),
('2147483647', '2147483647', 'hilmaninajas', 'Laki-Laki', 'jawa', '2000-05-12', 'Islam', 'Indonesia', 'Bersama Orang Tua', 'tangerang\r\n', 'Madrozie', '2147483647', 'Karyawan Swasta', 'Rp 500.000 - Rp 999.999', 'siti jubaedah', '2147483647', 'Wirausaha', 'Rp 1.000.000 - Rp 1.999.999', 'Siti jubaedah', '2147483647', 'Wirausaha', 'Rp 1.000.000 - Rp 1.999.999', '089524113345', '089524113345', 'hilmanahmad089@gmail.com', '$2y$10$wQsGP8eCX3/lPXcDXDdut.lM32ABdD2a4My2ORKT2jexn/w3lzY5G', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `jabatan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nis`, `email`, `password`, `is_active`, `role_id`, `jabatan`) VALUES
(2, 'siiiap', 1212112, 'ahmad@gmail.com', '$2y$10$elnr5N6f8ptrvYHTxWteY.V6eMXVpqoFdFAyBqXKlxTtgv6FWmlxS', 1, 1, 1),
(12184783, 'hilmaninaja', 0, 'hilman123@gmail.com', '$2y$10$elnr5N6f8ptrvYHTxWteY.V6eMXVpqoFdFAyBqXKlxTtgv6FWmlxS', 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_ber`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `ajar` (`ajar`),
  ADD KEY `jabatan` (`jabatan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppdb`
--
ALTER TABLE `ppdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jabatan` (`jabatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_ber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `detail_user`
--
ALTER TABLE `detail_user`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `nip` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213222228;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;
--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ppdb`
--
ALTER TABLE `ppdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12184784;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
