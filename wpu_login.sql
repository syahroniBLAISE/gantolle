-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 07:42 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `artikel` mediumtext NOT NULL,
  `tgl_post` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `artikel`, `tgl_post`) VALUES
(1, '122sasd', '<div style=\"text-align:justify;\">\r\n          <h4 class=\"text-white\" >\r\n          Kejuaraan Nasional Gntolle Seri 1 Ketepatan Mendarat (KTM) dalam ivent Bupati Padang Pariaman Cup  2020 yang dilaksanakan pada tanggal 6 s/d 8 Maret 2020, di \'DESA KANTER\' - Kab. Padang Pariaman yang berlokasi dekat dengan jalan menuju Bandara Minang Kabau - Sumatera Barat, Kejuaraan Kali ini Akan di meriahkan oleh atlet Gantolle (Hanggliding) yang berasal dari seluruh indonesia.\r\n          <br>\r\n          <br>\r\n          Pepatah Mengatakan Tak kenal maka tak sayang oleh sebab itu berikut sedikit cerita tentang padang pariaman di mana kejuaraan ini berlansung :\r\n          <br>\r\n          <br>\r\n          Padang Pariaman adalah sebuah kabupaten di provinsi Sumatra Barat, Indonesia. yang memiliki Moto \"Saiyo Sakato\" yang artinya \"seiya dan sekata\", dulunya Buya Hamka pernah Mengatakan, nama kabupaten ini sendiri berasal dari kata dalam bahasa arab,”barri aman” kurang lebih memiliki arti: “tanah daratan yang aman sentosa”.dan dalam literatur lain, kata Pariaman kadang juga dianggap berasal dari “parik nan aman”, yang artinya kira-kira pelabuhan yang aman. Kapal-kapal yang singgah untuk berdagang di bandar-bandar di Rantau Pariaman dapat dengan aman bertransaksi dagang .\r\n\r\n          <br>\r\n         </h4>\r\n        </div>', '2020-03-05 01:42:24'),
(2, '2', '2', '0000-00-00 00:00:00'),
(3, '3', '3', '0000-00-00 00:00:00'),
(4, '4', '4', '0000-00-00 00:00:00'),
(5, '4', '4', '0000-00-00 00:00:00'),
(6, '5', '5', '2020-03-04 04:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `datapilot`
--

CREATE TABLE `datapilot` (
  `id` int(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `tanggal_pendaftaran` varchar(100) NOT NULL,
  `fai_no` varchar(100) NOT NULL,
  `pilot_rating` varchar(100) NOT NULL,
  `address1` varchar(500) NOT NULL,
  `team` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `country` varchar(500) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nok_zip` varchar(100) NOT NULL,
  `nok_name` varchar(100) NOT NULL,
  `nok_relationship` varchar(100) NOT NULL,
  `nok_phone` varchar(100) NOT NULL,
  `glider_make` varchar(100) NOT NULL,
  `glider_model` varchar(100) NOT NULL,
  `glider_color` varchar(100) NOT NULL,
  `harnes` varchar(100) NOT NULL,
  `parasut` varchar(100) NOT NULL,
  `parasutEmergensi` varchar(100) NOT NULL,
  `herky` varchar(100) NOT NULL,
  `trip_type` varchar(100) NOT NULL,
  `embarkasi` varchar(100) NOT NULL,
  `other` varchar(1000) NOT NULL,
  `gbr_foto` varchar(100) NOT NULL,
  `gbr_KTP` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapilot`
--

INSERT INTO `datapilot` (`id`, `category`, `nama`, `last_name`, `hari`, `gender`, `tanggal_pendaftaran`, `fai_no`, `pilot_rating`, `address1`, `team`, `city`, `postcode`, `country`, `phone`, `email`, `nok_zip`, `nok_name`, `nok_relationship`, `nok_phone`, `glider_make`, `glider_model`, `glider_color`, `harnes`, `parasut`, `parasutEmergensi`, `herky`, `trip_type`, `embarkasi`, `other`, `gbr_foto`, `gbr_KTP`) VALUES
(32, 'kelas A', 'syahroni', '-', '10/12/1993', 'male', '19-02-2020 12:24:06pm', 'hgxxx', 'H4', 'Bukittiggi', 'sumbar', 'bukittinggi', '26181', 'sumbar', '082386363300', 'syahronibagus@yahoo.co.id', '12', 'bundo', 'bundo', '082386363300', 'icaro', 'icaro', 'icaro', 'icaro', '', 'icaro', '0', '1', 'icaro', '', 'syahroni_FOTO.png', 'syahroni_KTP.jpg'),
(33, 'kelas A', '1', '', '0/12/2006', 'male', 'Monday, 20-02-17', '', 'H-2', '', '', '', '0', '', '0', '', 'S', '', '', '0', '', '', '', '', '', '', '0', '2', '', '', '1_FOTO.png', '1_KTP.jpg'),
(34, 'kelas A', '2', '', '0/12/2006', 'male', '20-02-17', '', 'H-2', '', '', '', '0', '', '0', '', 'S', '', '', '0', '', '', '', '', '', '', '0', '2', '', '', '2_FOTO.png', '2_KTP.jpg'),
(35, 'kelas A', 'adsf', '', '0/12/2006', 'male', '17-02-2020 05:26:07pm', '', 'H-2', '', '', '', '0', '', '0', '', 'S', '', '', '0', '', '', '', '', '', '', '0', '2', '', '', 'adsf_FOTO.png', 'adsf_KTP.jpg'),
(40, 'kelas A', '12311232', '', '0/12/2006', 'male', '18-02-2020 12:09:35pm', '', 'H4', '', 'xxxx', '', '0', '', '0', '', '12', '', '', '0', '', '', '', '', '', '', '0', '2', '', '', '12311232_FOTO.png', '12311232_KTP.jpg'),
(42, 'kelas A', '1', '', '0/12/2006', 'male', '18-02-2020 12:42:21pm', '', 'H-2', '', '', '', '0', '', '0', '', 'S', '', '', '0', '', '', '', '', '', '', '0', '2', '', '', '1_FOTO.png', '1_KTP.jpg'),
(43, 'kelas A', 'rqwe', '', '0/12/2006', 'male', '19-02-2020 06:45:18pm', '', 'H-2', '', '', '', '', '', '', '', 'S', '', '', '', '', '', '', '', '', '', '0', '2', '', '', 'rqwe_FOTO.png', 'rqwe_KTP.jpg'),
(44, 'kelas A', 'wfsad', '', '0/12/2006', 'male', '19-02-2020 06:46:04pm', '', 'H-2', '', '', '', '', '', '', '', 'S', '', '', '', '', '', '', '', '', '', '0', '2', '', '', 'wfsad_FOTO.png', 'wfsad_KTP.jpg'),
(45, 'kelas A', 'test 20 february 2020', '1', '29/12/1950', 'male', '20-02-2020 04:39:18pm', '2', 'H-4', '4', '3', '5', '6', '7', '8', '9', 'XL', '', '', '', '', '', '', '', '', '', '0', '2', '', '', 'test 20 february 2020_FOTO.png', 'test 20 february 2020_KTP.jpg'),
(46, 'kelas A', '2234', '', '0/12/2006', 'male', '20-02-2020 04:41:45pm', '', 'H-2', '', '', '', '', '', '', '', 'S', '', '', '', '', '', '', '', '', '', '0', '2', '', '', '2234_FOTO.png', '2234_KTP.jpg'),
(47, 'kelas A', 'qwewq', '', '0/12/2006', 'male', '20-02-2020 04:42:54pm', '', 'H-2', '', '', '', '', '', '', '', 'S', '', '', '', '', '', '', '', '', '', '0', '2', '', '', 'qwewq_FOTO.png', 'qwewq_KTP.jpg'),
(48, 'kelas A', 'aertasdf', '', '0/12/2006', 'male', '20-02-2020 04:43:47pm', '', 'H-2', '', '', '', '', '', '', '', 'S', '', '', '', '', '', '', '', '', '', '0', '2', '', '', 'aertasdf_FOTO.png', 'aertasdf_KTP.jpg'),
(49, 'kelas A', 'asdfad', '', '0/12/2006', 'male', '20-02-2020 04:45:57pm', '', 'H-2', '', '', '', '', '', '', '', 'S', '', '', '', '', '', '', '', '', '', '0', '2', '', '', 'asdfad_FOTO.png', 'asdfad_KTP.jpg'),
(50, 'kelas A', 'qwerqweqwe', '', '0/12/2006', 'male', '20-02-2020 04:47:23pm', '', 'H-2', '', '', '', '', '', '', '', 'S', '', '', '', '', '', '', '', '', '', '0', '2', '', '', 'qwerqweqwe_FOTO.png', 'qwerqweqwe_KTP.jpg'),
(51, 'kelas A', 'q3452345', '', '0/12/2006', 'male', '20-02-2020 04:49:48pm', '', 'H-2', '', '', '', '', '', '', '', 'S', '', '', '', '', '', '', '', '', '', '0', '2', '', '', 'q3452345_FOTO.png', 'q3452345_KTP.jpg'),
(52, 'kelas A', 'test download gambar', '', '0/12/2006', 'male', '02-03-2020 05:36:41pm', '', 'H-2', '', '', '', '', '', '', '', 'S', '', '', '', '', '', '', '', '', '', '0', '2', '', '', 'test download gambar_FOTO.png', 'test download gambar_KTP.jpg'),
(53, 'kelas A', 'qwerty', '', '0/12/2006', 'male', '02-03-2020 07:25:45pm', '', 'H-2', '', '', '', '', '', '', '', 'S', '', '', '', '', '', '', '', '', '', '0', '2', '', '', 'qwerty_FOTO.png', 'qwerty_KTP.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'Sandhika Galih', 'sandhikagalih@unpas.ac.id', 'profile1.jpg', '$2y$10$nXnrqGQTjpvg58OtOB/N.evYQjVlz7KIW37oUSQSQ2EgNMD0Dgrzq', 2, 0, 1552120289),
(6, 'Doddy Ferdiansyah', 'doddy@gmail.com', 'profile.jpg', '$2y$10$FhGzXwwTWLN/yonJpDLR0.nKoeWlKWBoRG9bsk0jOAgbJ007XzeFO', 2, 0, 1552285263),
(11, 'Sandhika Galih', 'sandhikagalih@gmail.com', 'default.jpg', '$2y$10$0QYEK1pB2L.Rdo.ZQsJO5eeTSpdzT7PvHaEwsuEyGSs0J1Qf5BoSq', 2, 0, 1553151354),
(13, 'syahroni', 'syahronibagus@yahoo.co.id', 'default.jpg', '$2y$10$DABVebUf0rKYD0WaDr5U0u785b.vzgvxoTnDAr2URbGIBE07qmLpe', 1, 1, 1581399790),
(14, 'Uda Roni', 'gantolesipatuang@gmail.com', '2.png', '$2y$10$JjpUJiEu6Xqypg/MKeVeLumz98rjHovB.SOy.Qduq8932/Qf4.FAK', 2, 1, 1582020585);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 3),
(8, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(11, 3, 'Data Pendaftar', 'Menu/data_pendaftar', 'fas fa-fw fa-folder', 1),
(14, 2, 'Daftar Peserta', 'Pendaftaran/data_peserta', 'fas fa-fw fa-folder', 1),
(17, 2, 'Artikel', 'Menu/Artikel', 'fas fa-fw fa-folder', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(9, 'syahronibagus@yahoo.co.id', 'ZfgpBorDHW6X6h38wXHzflaVivDDs9GFeqFbfmGirvc=', 1581399790),
(10, 'gantolesipatuang@gmail.com', 'cfuV1NyH521ZejWkc/Ua2Fpz6GIBLLTseIG1NSrqg0c=', 1582020585);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapilot`
--
ALTER TABLE `datapilot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `datapilot`
--
ALTER TABLE `datapilot`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
