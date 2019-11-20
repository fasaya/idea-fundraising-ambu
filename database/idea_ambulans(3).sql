-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 11:47 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idea_ambulans`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  `no_rekening` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `is_deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `bank`, `atas_nama`, `no_rekening`, `img`, `is_deleted`) VALUES
(1, 'Mandiri', 'Yayasan Kasih Fibonacci', '654356789', 'mandiri.png', '0'),
(2, 'BCA', 'Yayasan Kasih Fibonacci', '654356789', 'blog_5dd50ecf246724_79179282.png', '0'),
(3, 'BNI', 'Yayasan Kasih Fibonacci', '654356789', 'bni.png', '0'),
(4, 'BRI', 'Yayasan Kasih Fibonacci', '654356789', 'bri.png', '0'),
(5, 'BRI', 'Yayasan Kasih Fibonacci', '654356789', 'bri.png', '1'),
(6, 'ss', 'ssss', '2567', 'bank_5dd5177d106784_25406732.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `isi_web`
--

CREATE TABLE `isi_web` (
  `id` int(11) NOT NULL,
  `kode` varchar(200) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isi_web`
--

INSERT INTO `isi_web` (`id`, `kode`, `isi`) VALUES
(1, 'home_1_img', 'isi_5dd4bcc21a4a65_56279176.png'),
(2, 'home_1_judul1', 'Layout'),
(3, 'home_1_judul2', 'Styles & Variants'),
(4, 'home_1_isi1', 'There are so many styles you can combine that is possible to create almost any kind of layout based on Porto Template, navigate in our preview and see the header variations, the colors, and the page content types that you will be able to use.'),
(5, 'home_1_isi2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.'),
(6, 'home_2_img', 'isi_5dd4d0bce703e4_44448571.png'),
(7, 'home_2_judul1', 'judul'),
(8, 'home_2_judul2', 'lanjut'),
(9, 'home_2_isi1', 'acdvbn'),
(10, 'home_2_isi2', 'dfgnhbse'),
(11, 'home_3_gbr3a', 'isi_5dd4d87f0f95e8_98851195.jpg'),
(12, 'home_3_gbr3b', 'isi_5dd4d88b292528_44558833.jpg'),
(13, 'home_3_gbr3c', 'isi_5dd4d8934a37b9_57829432.jpg'),
(14, 'home_3_gbr3d', 'isi_5dd4d89b30b179_89045506.jpg'),
(15, 'home_3_gbr3e', 'isi_5dd4d8e8cdc884_15305110.jpg'),
(16, 'tentang_1_title1', 'Tentang Yayasan Kasih Fibonacci'),
(17, 'tentang_1_title2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.'),
(18, 'tentang_1_judul1', 'A place where amazing things'),
(19, 'tentang_1_judul2', 'Get Done!'),
(20, 'tentang_1_isi1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat urna arcu, vel molestie nunc commodo non. Nullam vestibulum odio vitae fermentum rutrum.'),
(21, 'tentang_1_isi2', 'Mauris lobortis nulla ut aliquet interdum. Donec commodo ac elit sed placerat. Mauris rhoncus est ac sodales gravida. In eros felis, elementum aliquam nisi vel, pellentesque faucibus nulla.'),
(22, 'visimisi_1_title1', 'Visi dan Misi'),
(23, 'visimisi_1_title2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.'),
(24, 'visimisi_1_visi', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.'),
(26, 'visimisi_1_misi', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.'),
(28, 'visimisi_1_quotes1', 'Pellentesque pellentesque eget tempor tellus. Fusce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada.'),
(29, 'visimisi_1_quotes2', 'David Doe, CEO'),
(30, 'visimisi_2_img2a', 'isi_5dd4efca3bcb01_48640101.jpg'),
(31, 'visimisi_2_img2b', 'isi_5dd4efe57126d6_26031843.jpg'),
(32, 'visimisi_2_img2c', 'isi_5dd4efeca44718_32932023.jpg'),
(33, 'visimisi_2_img2d', 'isi_5dd4eff3de3d72_59730435.jpg'),
(34, 'visimisi_2_img2e', ''),
(35, 'motto_1_a', 'Porto is'),
(36, 'motto_1_b', 'everything'),
(37, 'motto_1_c', 'you need to create an'),
(38, 'motto_1_d', 'awesome'),
(39, 'motto_1_e', 'website!'),
(40, 'motto_1_sub', 'The best HTML template for your new website.'),
(41, 'lain_header', 'isi_5dd4f9522b53c2_39816864.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `id_log` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`id_log`, `id_user`, `ip_address`, `user_agent`, `date`) VALUES
(23, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', '2019-11-18 11:18:52'),
(24, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', '2019-11-18 11:19:53'),
(25, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', '2019-11-18 13:44:16'),
(26, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', '2019-11-19 10:36:55'),
(27, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', '2019-11-19 13:24:01'),
(28, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', '2019-11-19 14:57:25'),
(29, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', '2019-11-20 11:19:50');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `name`) VALUES
('11', 'ACEH'),
('12', 'SUMATERA UTARA'),
('13', 'SUMATERA BARAT'),
('14', 'RIAU'),
('15', 'JAMBI'),
('16', 'SUMATERA SELATAN'),
('17', 'BENGKULU'),
('18', 'LAMPUNG'),
('19', 'KEPULAUAN BANGKA BELITUNG'),
('21', 'KEPULAUAN RIAU'),
('31', 'DKI JAKARTA'),
('32', 'JAWA BARAT'),
('33', 'JAWA TENGAH'),
('34', 'DI YOGYAKARTA'),
('35', 'JAWA TIMUR'),
('36', 'BANTEN'),
('51', 'BALI'),
('52', 'NUSA TENGGARA BARAT'),
('53', 'NUSA TENGGARA TIMUR'),
('61', 'KALIMANTAN BARAT'),
('62', 'KALIMANTAN TENGAH'),
('63', 'KALIMANTAN SELATAN'),
('64', 'KALIMANTAN TIMUR'),
('65', 'KALIMANTAN UTARA'),
('71', 'SULAWESI UTARA'),
('72', 'SULAWESI TENGAH'),
('73', 'SULAWESI SELATAN'),
('74', 'SULAWESI TENGGARA'),
('75', 'GORONTALO'),
('76', 'SULAWESI BARAT'),
('81', 'MALUKU'),
('82', 'MALUKU UTARA'),
('91', 'PAPUA BARAT'),
('94', 'PAPUA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_blog`
--

CREATE TABLE `tb_blog` (
  `id_blog` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `date` datetime NOT NULL,
  `is_deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_blog`
--

INSERT INTO `tb_blog` (`id_blog`, `slug`, `img`, `judul`, `isi`, `date`, `is_deleted`) VALUES
(1, 'class-aptent-taciti-sociosqu-ad-litora-torquent', 'logo-2.png', 'Class aptent taciti sociosqu ad litora torquent', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec tempus nibh. Donec mollis commodo metus et fringilla. Etiam venenatis, diam id adipiscing convallis, nisi eros lobortis tellus, feugiat adipiscing ante ante sit amet dolor. Vestibulum vehicula scelerisque facilisis. Sed faucibus placerat bibendum. Maecenas sollicitudin commodo justo, quis hendrerit leo consequat ac. Proin sit amet risus sapien, eget interdum dui. Proin justo sapien, varius sit amet hendrerit id, egestas quis mauris.\r\n\r\nUt ac elit non mi pharetra dictum nec quis nibh. Pellentesque ut fringilla elit. Aliquam non ipsum id leo eleifend sagittis id a lorem. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam massa mauris, viverra et rhoncus a, feugiat ut sem. Quisque ultricies diam tempus quam molestie vitae sodales dolor sagittis. Praesent commodo sodales purus. Maecenas scelerisque ligula vitae leo adipiscing a facilisis nisl ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;\r\n\r\nCurabitur non erat quam, id volutpat leo. Nullam pretium gravida urna et interdum. Suspendisse in dui tellus. Cras luctus nisl vel risus adipiscing aliquet. Phasellus convallis lorem dui. Quisque hendrerit, lectus ut accumsan gravida, leo tellus porttitor mi, ac mattis eros nunc vel enim. Nulla facilisi. Nam non nulla sed nibh sodales auctor eget non augue. Pellentesque sollicitudin consectetur mauris, eu mattis mi dictum ac. Etiam et sapien eu nisl dapibus fermentum et nec tortor.\r\n\r\nCurabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a. Curabitur nulla dui, fermentum sed dapibus at, adipiscing eget nisi. Aenean iaculis vehicula imperdiet. Donec suscipit leo sed metus vestibulum pulvinar. Phasellus bibendum magna nec tellus fringilla faucibus. Phasellus mollis scelerisque volutpat. Ut sed molestie turpis. Phasellus ultrices suscipit tellus, ac vehicula ligula condimentum et.\r\n\r\nAenean metus nibh, molestie at consectetur nec, molestie sed nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec euismod urna. Donec gravida pharetra ipsum, non volutpat ipsum sagittis a. Phasellus ut convallis ipsum. Sed nec dui orci, nec hendrerit massa. Curabitur at risus suscipit massa varius accumsan. Proin eu nisi id velit ultrices viverra nec condimentum magna. Ut porta orci quis nulla aliquam at dictum mi viverra. Maecenas ultricies elit in tortor scelerisque facilisis. Mauris vehicula porttitor lacus, vel pretium est semper non. Ut accumsan rhoncus metus non pharetra. Quisque luctus blandit nisi, id tempus tellus pulvinar eu. Nam ornare laoreet mi a molestie. Donec sodales scelerisque congue.', '2019-11-04 06:18:25', '0'),
(2, 'test-bikin-judul', 'blog_5dd3c95ef13123_07566092.jpg', 'test bikin judul', 'sbss', '2019-11-19 18:52:15', '0'),
(5, 'tes-1-2-3', 'blog_5dd50862cd5613_49351826.jpg', 'tes 1 2 3', 'sfs asbjabvlacsss', '2019-11-20 11:22:37', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_donasi`
--

CREATE TABLE `tb_donasi` (
  `id_donasi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `provinsi` int(11) NOT NULL,
  `jumlah_donasi` decimal(20,0) NOT NULL,
  `date` datetime NOT NULL,
  `bank` int(11) DEFAULT NULL,
  `keterangan` text NOT NULL,
  `anonim` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_donasi`
--

INSERT INTO `tb_donasi` (`id_donasi`, `nama`, `no_hp`, `email`, `provinsi`, `jumlah_donasi`, `date`, `bank`, `keterangan`, `anonim`) VALUES
(1, 'sssssssss', '242423', 'sdc@dsf.ov', 64, '20000', '2019-11-19 14:13:31', 3, '', '1'),
(2, 'sss', '354', 'dd@d.co', 62, '20002', '2019-11-19 14:38:40', 2, '', '1'),
(3, 'adax', '234567', 'dsf@d.vo', 65, '20000', '2019-11-19 14:38:53', 4, 's', '0'),
(4, 'adaxssssss', '23456755', 'dsf@d.voss', 17, '20004', '2019-11-19 16:08:54', 2, 'ssss', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_donasi_baru`
--

CREATE TABLE `tb_donasi_baru` (
  `id_donasi` int(11) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `provinsi` int(11) NOT NULL,
  `jumlah_donasi` decimal(20,0) NOT NULL,
  `date` datetime NOT NULL,
  `bank` int(11) DEFAULT NULL,
  `anonim` enum('0','1') NOT NULL,
  `status` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_donasi_baru`
--

INSERT INTO `tb_donasi_baru` (`id_donasi`, `kode`, `nama`, `no_hp`, `email`, `provinsi`, `jumlah_donasi`, `date`, `bank`, `anonim`, `status`) VALUES
(2, 'TYZHID', 'Andi', '245678', 'aya@smail.clm', 18, '250000', '2019-11-18 16:09:25', 2, '0', '0'),
(3, 'YLWFCS', 'efgesv', '432', 'ef@g.com', 36, '550000', '2019-11-18 17:36:50', 4, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `keterangan` enum('admin') NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_user`, `username`, `password`, `keterangan`, `email`) VALUES
(1, 'admin', '$2y$10$OVjoNl4cE12phgIM/jO4cOlik0PSh.gClloYk49utA9e6jR59Cj1W', 'admin', 'adminweb@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_setting`
--

CREATE TABLE `tb_setting` (
  `id_setting` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_setting`
--

INSERT INTO `tb_setting` (`id_setting`, `kode`, `nama`, `nilai`) VALUES
(1, 'DONATUR', 'Jumlah Donatur', '8'),
(2, 'DONASI', 'Jumlah Donasi', '30000'),
(3, 'NOHP', 'No. Handphone', '62811415779'),
(4, 'NOWA', 'No. Whatsapp', '62811415779'),
(5, 'EMAIL', 'E-mail', 'yayasancheetah@gmail.com'),
(6, 'ALAMAT', 'Alamat', 'Jalan Contoh Nama Jalan 123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `isi_web`
--
ALTER TABLE `isi_web`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_member` (`id_user`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  ADD PRIMARY KEY (`id_donasi`),
  ADD KEY `bank` (`bank`),
  ADD KEY `provinsi` (`provinsi`);

--
-- Indexes for table `tb_donasi_baru`
--
ALTER TABLE `tb_donasi_baru`
  ADD PRIMARY KEY (`id_donasi`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD KEY `bank` (`bank`),
  ADD KEY `provinsi` (`provinsi`),
  ADD KEY `provinsi_2` (`provinsi`),
  ADD KEY `provinsi_3` (`provinsi`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `isi_web`
--
ALTER TABLE `isi_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `id_log` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_donasi_baru`
--
ALTER TABLE `tb_donasi_baru`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_setting`
--
ALTER TABLE `tb_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
