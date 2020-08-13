-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 13 Agu 2020 pada 16.54
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u608128420_E6RgA`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapilot`
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
-- Dumping data untuk tabel `datapilot`
--

INSERT INTO `datapilot` (`id`, `category`, `nama`, `last_name`, `hari`, `gender`, `tanggal_pendaftaran`, `fai_no`, `pilot_rating`, `address1`, `team`, `city`, `postcode`, `country`, `phone`, `email`, `nok_zip`, `nok_name`, `nok_relationship`, `nok_phone`, `glider_make`, `glider_model`, `glider_color`, `harnes`, `parasut`, `parasutEmergensi`, `herky`, `trip_type`, `embarkasi`, `other`, `gbr_foto`, `gbr_KTP`) VALUES
(41, 'kelas A', 'syahroni', '-', '10/8/1993', 'male', '19-02-2020 02:33:09pm', 'HG0137', 'H4', 'jorong mato jariang,nagari kubang putiah,sumbar', 'SUMBAR', 'Agam', '26181', 'SumateraBarat', '082386363300', 'syahronibagus@yahoo.co.id', 'M', '-', '-', '082386363300', 'icaro', 'icaro', 'icaro', 'icaro', '', 'icaro', '0', '1', '-', '', 'syahroni_FOTO.png', 'syahroni_KTP.jpg'),
(44, 'Kelas B', 'Nastain', '', '24/12/1988', 'male', '19-02-2020 08:56:41am', 'HG0107', 'H-3', 'Link. Randegan Rt02/rw01', 'Jatim', 'Mojokerto', '61316', 'Indonesia', '085731742633', 'nastain.nastain@yahoo.com', 'L', 'Arif eko', 'Pelatih', '0816526151', 'Harnes n layangan', 'Falcon 170', 'Biru', 'Woodyvalley', '', 'Woodyvaley', '1', '2', 'Malang', '', 'Nastain_FOTO.jpg', 'Nastain_KTP.jpg'),
(45, 'Kelas B', 'Achmad', 'Teguh wibowo', '5/12/1989', 'male', '19-02-2020 08:49:19am', 'HG0105', 'H-4', 'Desa banjarjo RT/RW 06/01,kecamatan sumberrejo,kabupaten bojonegoro', 'Jawa Timur', 'Bojonegoro', '62191', 'Indonesia', '081314421841', 'teguh.falcon@gmail.com', 'M', 'Herda eka NH', 'teman', '+6281333212742', 'Willswing', 'Falcon 4 (145)', 'white,blue,red', 'woody valley', '', 'woody valley', '1', '2', 'Malang (abd. saleh)', '', 'Achmad_FOTO.jpg', 'Achmad_KTP.jpg'),
(46, 'kelas A', 'Syaiful Rijal ', 'Zarkasi', '5/12/1990', 'male', '19-02-2020 09:09:50am', 'HG0106', 'H-4', 'JL. KH. Mustofa RT 13 RW 3 Dusun Perjuangan Desa Petahunan Kec. Sumbersuko ', 'Gantolle Jatim', 'Lumajang ', '67316', 'Indonesia', '08121697945', 'syaifulrijalzarkasi@gmail.com', 'XL', 'Herda Eka', 'Coach', '081333212742', 'Wills Wing', 'Sport 2 ', 'Hijau, Hitam, Biru', 'Woodey Valley Cosmic', '', 'Woodey Valley ', '1', '2', 'ABD. SHALEH Malang ', '', 'Syaiful Rijal _FOTO.jpg', 'Syaiful Rijal _KTP.jpg'),
(47, 'kelas A', 'Khaidir', 'Anas', '2/12/1987', 'male', '19-02-2020 10:06:43am', 'HG097', 'H-4', 'Sumbar', 'Sumbar', 'Padang', '25221', 'Indonesia', '082390925084', 'mp_427@yahoo.co.id', 'L', 'Aan', 'Saudara', '085266091985', 'Wills wing', 'Sport 2', 'Putih lis hitam', 'Bb lines', '', '-', '0', '2', '', '', 'Khaidir_FOTO.jpg', 'Khaidir_KTP.jpg'),
(48, 'Kelas B', 'Gerry', 'Oktaviano Putra', '30/10/1994', 'male', '19-02-2020 10:24:43am', '0173', 'H3', 'Jl.belibis blok C no. 20 air tawar barat', 'Sumatera barat', 'Padang', '', 'Indonesia', '081363099887', 'Gerry.oktavianoputra@Gmail.com', 'L', 'Khaidir Annas', 'Family', '082390925084', 'Moyes', 'Malibu 2 166', 'Hijau, Oren dan putih', 'Up 2', '', 'Metafora ', '0', '2', '', '', 'Gerry_FOTO.jpg', 'Gerry_KTP.jpg'),
(49, 'Kelas B', 'Rio mandri', 'Rio mandri', '21/12/1984', 'male', '19-02-2020 10:42:25am', 'Hg0153', 'H-2', 'Pasar usang', 'Padang pariaman', 'Padang', '25886', 'Indonesia', '085265904519', 'pt.ozone18@gmail.com', 'M', '082384181985', '_', '_', '_', '_', '_', '_', '', '_', '0', '2', '_', '_', 'Rio mandri_FOTO.jpg', 'Rio mandri_KTP.jpg'),
(50, 'kelas A', 'Herda', 'Eka', '16/12/1984', 'male', '19-02-2020 11:19:19am', 'HG0092', 'H-4', 'Ds. Turi, Pohjejer', 'Jawa Timur ', 'Mojokerto', '61372', 'Indonesia ', '+6281333212742', 'herda.eka2000@gmail.com', 'L', 'Arif Eko ', 'Pelatih ', '0816-526-151', 'Airborne', 'Sting R', 'Hijau', 'Woddyvally', '', 'Woddyvally', '1', '2', 'Abd. Saleh', '', 'Herda_FOTO.jpg', 'Herda_KTP.jpeg'),
(51, 'Kelas B', 'MUHAMMAD ABDUL MUHID', 'MUHID', '16/12/1990', 'male', '19-02-2020 11:32:48am', 'HG0134', 'H-3', 'KH. MUSTOFA DUSUN KRAJAN RT 01 RW 01 DESA PETAHUNAN KECAMATAN SUMBERSUKO', 'JATIM', 'LUMAJANG', '67316', 'INDONESIA', '082331011373', 'abdulmuhid.04@gmail.com', 'L', 'SUGENG YANU', 'MANAGER', '0811324393', 'ICARO', 'PIUMA', 'HIJAU PUTIH BIRU', 'BODY VALLY', '', 'BODY VALLY', '1', '2', 'TIDAK', '', 'MUHAMMAD ABDUL MUHID_FOTO.jpg', 'MUHAMMAD ABDUL MUHID_KTP.jpg'),
(53, 'kelas A', '', '', '0/12/2006', 'male', '19-02-2020 12:11:25pm', '', 'H-2', '', 'Jawa timur', '', '', '', '', '', 'L', 'Wakhid fitroya faturohman', 'Muhid', '081333212742', '', '', '', '', '', '', '1', '2', 'Malang (Abd. Saleh)', 'Mekanik', '_FOTO.jpg', '_KTP.jpeg'),
(55, 'Kelas B', 'Nsr', 'Yalatif m', '15/12/1988', 'male', '19-02-2020 04:18:35pm', 'HG0097', 'H-4', 'Pasar tanjung gadang', 'Sumatera Barat', 'SIjunjung', '27571', 'Indonesia', '085274539928', 'nsrlatief@gmail.com', 'L', '', '', '', 'Icaro', 'RX2', 'Red/white', 'BBline', '', 'Lara', '0', '2', '', '', 'Nsr_FOTO.jpg', 'Nsr_KTP.jpg'),
(56, 'kelas A', 'Rio mandri', 'Fitri desi', '21/12/1984', 'male', '19-02-2020 04:40:01pm', 'Hg0153', 'H-2', 'Pasar usang', 'Padang pariaman', 'Padang', '25586', 'Indonesia', '085265904519', 'Pt.ozone18@gmail.com', 'M', 'Fitridesi', 'Istri', '082384181985', 'Jepang', 'Fans', 'Biru stabilo', 'Beby lend', '', 'Beby lend', '0', '2', '_', '_', 'Rio mandri_FOTO.jpg', 'Rio mandri_KTP.jpg'),
(59, 'kelas A', 'Rijalul', 'Fathani', '28/12/1985', 'male', '21-02-2020 10:41:59am', 'HG0095', 'H-4', 'Jl. Tepi Sei Jirak Gang Damai No 5 Cendana Mata Air', 'Sumatra Barat', 'Padang', '25216', 'Indonesia', '085263550055', 'jalul406@gmail.com', 'L', 'Rini Afriyanti', 'Istri', '08121345445', 'ICARO2000', 'Orbiter 2', 'Black Red Yellow', 'BBline', '', 'Lara Gold', '0', '2', '', '', 'Rijalul_FOTO.jpg', 'Rijalul_KTP.jpg'),
(60, 'Kelas B', 'Ridho', 'Ridho', '10/12/1997', 'male', '21-02-2020 04:20:18pm', 'HG0178', 'H-3', ' Pulau punjung Dharmasraya', 'Sumbar', 'Padang', '27573', 'Indonesia', '081276544110', 'Ridhorar64@gmail.com', 'S', 'Mardaus', 'Keluarga', '085263392988', 'Jerman', 'Falcon', 'Biru putih', 'Will swing', '', 'Will swing', '0', '1', '', '', 'Ridho_FOTO.jpg', 'Ridho_KTP.jpg'),
(61, 'Kelas B', 'Ridho', 'Ridho', '10/12/1997', 'male', '21-02-2020 04:27:58pm', 'HG0178', 'H-3', ' Pulau punjung Dharmasraya', 'Sumbar', 'Padang', '27573', 'Indonesia', '081276544110', 'Ridhorar64@gmail.com', 'S', 'Mardaus', 'Keluarga', '085263392988', 'Jerman', 'Falcon', 'Biru putih', 'Will swing', '', 'Will swing', '0', '2', '', '', 'Ridho_FOTO.jpg', 'Ridho_KTP.jpg'),
(62, 'Kelas B', 'Mifra', 'Rezeki', '22/12/1979', 'female', '21-02-2020 11:27:14pm', 'HG0152', 'H-2', 'Koto baru', 'SUMBAR/sipatuang', 'Dharmasraya', '27581', 'Indonesia', '082388397909', 'mifrarezekikuranji@gmail.com', 'M', 'Dori handayani', 'Wife', '082386457259', 'Air space', 'Tecma', 'White,pink', 'Adrenalin', '', '', '0', '2', '', '', 'Mifra_FOTO.jpg', 'Mifra_KTP.jpg'),
(63, 'Kelas B', 'Rafika', 'Efendi', '20/12/1994', 'male', '22-02-2020 01:43:25am', 'HG-170', 'H-2', 'Tekukur 21 air tawar barat', 'Sumabar', 'Kota padang', '25131', 'Indonesia', '082283263554', 'rafiefendi229@gmail.com', 'L', 'Rahmat', 'Abg', '+62 812-7036-5995', '', 'Techma', 'Pink', 'Apco', '', '-', '0', '2', '', '', 'Rafika_FOTO.jpg', 'Rafika_KTP.jpg'),
(64, 'Kelas B', 'rahman', '', '9/12/1996', 'male', '22-02-2020 01:44:41am', 'HG0130', 'H-3', 'jl kurao kapalo banda no 062', 'padang', 'padang', '', 'Indonesia', '081219750747', 'rahmanikp0900@gmail.com', 'XL', 'yelmawati', 'kakak kandung', '+6285274856082', '', 'willswing', 'biru putih', 'moyes', '', 'ada', '0', '2', '', '', 'rahman_FOTO.jpg', 'rahman_KTP.pdf'),
(65, 'Kelas B', 'rahman', '', '9/12/1996', 'male', '22-02-2020 01:44:41am', 'HG0130', 'H-3', 'jl kurao kapalo banda no 062', 'padang', 'padang', '', 'Indonesia', '081219750747', 'rahmanikp0900@gmail.com', 'XL', 'yelmawati', 'kakak kandung', '+6285274856082', '', 'willswing', 'biru putih', 'moyes', '', 'ada', '0', '2', '', '', 'rahman_FOTO.jpg', 'rahman_KTP.pdf'),
(66, 'Kelas B', 'Asep', 'Ruhiat', '12/12/1997', 'male', '22-02-2020 04:30:33am', 'HG0158', 'H-3', 'Cihampelas Bandung barat', 'Sulawesi Utara', 'Cihampelas', '40562', 'Indonesia', '081324397996', '', 'L', 'Adang', 'Kakak', '083149728000', 'Air born', 'Fun', 'Putih hijau', 'M2', '', 'M2', '1', '2', '', '', 'Asep_FOTO.jpg', 'Asep_KTP.jpg'),
(67, 'Kelas B', 'Acep', 'Rohmat', '11/12/1989', 'male', '22-02-2020 05:24:10am', 'HG0156', 'H-3', 'Cihampelas Bandung barat', 'Sulawesi Utara', 'Cihampelas', '40562', 'Indonesia', '087715227171', 'acepachmad54@yahoo.com', 'M', 'Asep sopyan', 'Paman', '+62 831-0221-8624', 'Wilswing', 'Falcon4', 'Putih hijau biru', 'UP', '', 'UP', '1', '2', '', '', 'Acep_FOTO.jpg', 'Acep_KTP.jpg'),
(68, 'Junior', 'Andhika', 'Pratama', '11/12/1989', 'male', '28-02-2020 12:53:05am', 'HG0177', 'H-2', 'Pakandangan', 'SUMBAR', 'Padang pariaman', '25584', 'Indonesia', '081326438081', 'Dhika. Hunt11@gmail.com', 'L', 'Dewi kartika', 'Istri', '085363044235', 'Lamoyet', 'Atlas 15', 'Merah Putih', 'Big Bird', '', '', '0', '2', '', '', 'Andhika_FOTO.jpeg', 'Andhika_KTP.jpg'),
(69, 'Kelas B', 'Asep ', 'Putra Utama', '22/12/1990', 'male', '28-02-2020 04:49:06am', 'HG 0151', 'H-2', 'TAROK INDAH PERMAI 1.BLOK F/14 BALAI BARU', '', 'PADANG', '', 'INDONESIA', '085375732004', 'asepputrautama48.apu@gmail.com', 'XL', 'Silvia Anggraini', 'Istri', '081267924244', 'Icaro 2000', 'RX 2 (M)', 'Putih pink', 'UP', '', '', '0', '2', '', '', 'Asep _FOTO.jpg', 'Asep _KTP.jpg'),
(70, 'Junior', 'OKI ARIA', 'ADINATA', '27/12/1990', 'male', '28-02-2020 04:52:33am', 'HG0172', 'H-2', 'Jl ptof dr hamka 159 tabing', 'BUKITTINGGI', 'Padang', '26131', 'Indonesia', '081372881520', 'Cockycadel@gmail.com', 'S', 'Edo', 'Brother', '+62 821-5273-2763', 'Willswing', 'Falcon 1', 'Putih tosca', 'Bbline s', '', 'Ada', '0', '2', '', '', 'OKI ARIA_FOTO.jpg', 'OKI ARIA_KTP.jpg'),
(71, 'Junior', 'Muhammad', 'Aziz', '18/12/1997', 'male', '05-03-2020 03:17:46am', 'HG0176', 'H-2', 'Padang utara', 'Gantolle sumbar', 'Padang', '27531', 'Batusangkar', '+6285263000051', 'moehjunior@gmail.com', 'XL', 'Ridho', 'Friends', '081276544110', 'Australia', 'Atlas', 'Merah', 'Moyes', '', 'Moyes', '0', '2', '', '', 'Muhammad_FOTO.jpg', 'Muhammad_KTP.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(13, 'syahroni', 'syahronibagus@yahoo.co.id', 'logo.png', '$2y$10$DABVebUf0rKYD0WaDr5U0u785b.vzgvxoTnDAr2URbGIBE07qmLpe', 1, 1, 1581399790),
(14, 'gantolle', 'gantolesipatuang@gmail.com', 'profile2.jpg', '$2y$10$JjpUJiEu6Xqypg/MKeVeLumz98rjHovB.SOy.Qduq8932/Qf4.FAK', 2, 1, 1582020585);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 3),
(8, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
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
-- Dumping data untuk tabel `user_sub_menu`
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
(12, 2, 'Daftar Peserta', 'Pendaftaran/data_peserta', 'fas fa-fw fa-folder', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(9, 'syahronibagus@yahoo.co.id', 'ZfgpBorDHW6X6h38wXHzflaVivDDs9GFeqFbfmGirvc=', 1581399790);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapilot`
--
ALTER TABLE `datapilot`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datapilot`
--
ALTER TABLE `datapilot`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
