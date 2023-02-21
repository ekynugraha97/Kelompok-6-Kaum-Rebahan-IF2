-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 04:46 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_adilkind`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_gerabah`
--

CREATE TABLE `tb_gerabah` (
  `idgerabah` int(5) NOT NULL,
  `id_jenis` int(5) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `foto_gerabah` varchar(25) NOT NULL,
  `nama_gerabah` varchar(25) NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gerabah`
--

INSERT INTO `tb_gerabah` (`idgerabah`, `id_jenis`, `jenis`, `foto_gerabah`, `nama_gerabah`, `harga`, `stok`) VALUES
(1, 1, 'Cangkir', 'cangkir-kopin-jago.webp', 'Cangkir Motif Jago Kopin', 120000, 0),
(2, 1, 'Cangkir', 'teaset-biru.jpg', 'Teaset Kopin Biru', 100000, 0),
(3, 1, 'Cangkir', 'teaset-bunga-teko.jpg', 'Teaset Motif Bunga Kopin', 200000, 88),
(4, 1, 'Cangkir', 'teaset-hitam.jpg', 'Teaset Kopin Hitam', 100000, 0),
(5, 2, 'Mangkok', 'mangkok-jago1.webp', 'Mangkok Jago Sedang', 20000, 82),
(6, 2, 'Mangkok', 'mangkok-jago2.png', 'Mangkok Jado Kecil', 15000, 100),
(7, 7, 'gelas', 'gelascantik1.webp', 'Nadir Gelas Kaki Wine Bar', 190000, 2),
(8, 7, 'gelas', 'gelascantik2.jpg', 'Gelas Pokal', 89000, 20),
(9, 7, 'gelas', 'gelascantik3.jpg', 'Gelas Frasera', 31000, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `idgerabah` int(11) NOT NULL,
  `nama_gerabah` varchar(30) NOT NULL,
  `jml_item` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tanggal_pesan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `alamat` text NOT NULL,
  `pembayaran` varchar(64) NOT NULL,
  `status` enum('Menunggu Pembayaran','Pembayaran Diterima','Pembayaran Gagal') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_pelanggan`, `idgerabah`, `nama_gerabah`, `jml_item`, `harga`, `total_harga`, `tanggal_pesan`, `alamat`, `pembayaran`, `status`) VALUES
(15, 1, 1, 'Cangkir Motif Jago Kopin', 2, 240000, 235000, '2021-06-26 05:23:23', 'Adentya Jl. Dahlia No. 27 RT 05 / RW 05 Gandasuli Brebes Jawa Timur Kabupaten Pati 52215 081392690434', '', 'Menunggu Pembayaran'),
(16, 1, 2, 'Teaset Kopin Biru', 6, 600000, 595000, '2021-06-26 19:08:33', 'Adentya Brebes Jawa Tengah Kabupaten Brebes 52215 081392690434', '', 'Menunggu Pembayaran'),
(17, 7, 5, 'Mangkok Jago Sedang', 18, 360000, 355000, '2021-06-28 01:22:12', 'Adentya Brebes Jawa Tengah Kabupaten Rembang 52215 081392690434', '', 'Menunggu Pembayaran'),
(18, 2, 4, 'Teaset Kopin Hitam', 100, 10000000, 9995000, '2021-06-28 01:23:17', 'Adentya Kota Bandung Jawa Barat Kabupaten Cilacap 52215 081392690434', '', 'Menunggu Pembayaran'),
(19, 1, 2, 'Teaset Kopin Biru', 8, 800000, 795000, '2021-06-29 01:50:32', 'Adentya Brebes Jawa Tengah Kabupaten Banjarnegara 52215 081392690434', '', 'Menunggu Pembayaran'),
(20, 1, 2, 'Teaset Kopin Biru', 86, 8600000, 8595000, '2021-06-30 05:43:11', 'Adentya Brebes Jawa Tengah Kabupaten Brebes 52215 081392690434', '', 'Menunggu Pembayaran'),
(21, 10, 3, 'Teaset Motif Bunga Kopin', 4, 800000, 795000, '2023-02-10 20:44:14', 'adul asasssas Sumatera Utara Kabupaten Banyumas 234234 1123434322', '', 'Menunggu Pembayaran'),
(22, 10, 3, 'Teaset Motif Bunga Kopin', 1, 200000, 200000, '2023-02-13 03:39:24', '  Pilih Provinsi   ', '', 'Menunggu Pembayaran'),
(23, 10, 3, 'Teaset Motif Bunga Kopin', 1, 200000, 200000, '2023-02-13 03:40:30', '  Pilih Provinsi   ', '', 'Menunggu Pembayaran'),
(24, 10, 3, 'Teaset Motif Bunga Kopin', 1, 200000, 200000, '2023-02-13 03:41:59', ' a Pilih Provinsi  aa a', '', 'Menunggu Pembayaran'),
(25, 10, 3, 'Teaset Motif Bunga Kopin', 1, 200000, 200000, '2023-02-13 03:43:27', 'aaa aaa 11 1101 aaa aaa', '', 'Menunggu Pembayaran'),
(26, 10, 3, 'Teaset Motif Bunga Kopin', 1, 200000, 200000, '2023-02-13 03:58:47', 'Omen Jl. Hegarmanah Rt 01/02 JAWA BARAT KABUPATEN BANDUNG BARAT NGAMPRAH NGAMPRAH 40553 081210110328', '', 'Menunggu Pembayaran'),
(27, 10, 3, 'Teaset Motif Bunga Kopin', 1, 200000, 200000, '2023-02-13 04:04:43', 'Omen Jl. Hegarmanah Rt 01/02, KERTAJAYA, PADALARANG, KABUPATEN BANDUNG BARAT, JAWA BARAT, 40553, 081210110328', '', 'Menunggu Pembayaran'),
(28, 10, 3, 'Teaset Motif Bunga Kopin', 1, 200000, 200000, '2023-02-13 04:06:11', 'Omen Jl. Hegarmanah Rt 01/02, SINUNUKAN IV, SINUNUKAN, KABUPATEN MANDAILING NATAL, SUMATERA UTARA, 40553, 081210110328', '', 'Menunggu Pembayaran'),
(29, 10, 3, 'Teaset Motif Bunga Kopin', 1, 200000, 200000, '2023-02-13 04:07:45', 'Omen Jl. Hegarmanah Rt 01/02, LATIUNG, TEUPAH SELATAN, KABUPATEN SIMEULUE, ACEH, 40553, 081210110328', 'Omen Jl. Hegarmanah Rt 01/02, LATIUNG, TEUPAH SELATAN, KABUPATEN', ''),
(30, 10, 3, 'Teaset Motif Bunga Kopin', 1, 200000, 200000, '2023-02-13 04:08:32', 'Omen Jl. Hegarmanah Rt 01/02, BATU RALANG, TEUPAH SELATAN, KABUPATEN SIMEULUE, ACEH, 40553, 081210110328', 'BCA', 'Menunggu Pembayaran'),
(31, 10, 3, 'Teaset Motif Bunga Kopin', 1, 200000, 200000, '2023-02-13 04:18:21', 'Omen Jl. Hegarmanah Rt 01/02, TRANS BARU, TEUPAH SELATAN, KABUPATEN SIMEULUE, ACEH, 40553, 081210110328', 'Bank Mandiri', 'Menunggu Pembayaran'),
(32, 10, 3, 'Teaset Motif Bunga Kopin', 1, 200000, 200000, '2023-02-13 04:26:43', 'Omen Jl. Hegarmanah Rt 01/02, PASI MALI, WOYLA BARAT, KABUPATEN ACEH BARAT, ACEH, 40553, 081210110328', 'BCA', 'Menunggu Pembayaran'),
(33, 10, 7, 'Nadir Gelas Kaki Wine Bar', 3, 570000, 570000, '2023-02-13 04:34:28', 'Omen Jl. Hegarmanah Rt 01/02, MALIWAA, IDANO GAWO, KABUPATEN NIAS, SUMATERA UTARA, 40553, 1123434322', 'OVO', 'Menunggu Pembayaran'),
(34, 10, 3, 'Teaset Motif Bunga Kopin', 1, 200000, 200000, '2023-02-12 19:04:49', 'Omen Jl. Hegarmanah Rt 01/02, PASIR BIRU, CIBIRU, KOTA BANDUNG, JAWA BARAT, 40553, 082233232212', 'BCA', 'Menunggu Pembayaran'),
(35, 10, 3, 'Teaset Motif Bunga Kopin', 6, 1200000, 1200000, '2023-02-14 05:16:11', 'Omen Jl. Hegarmanah Rt 01/02, SOPO TINJAK, BATANG NATAL, KABUPATEN MANDAILING NATAL, SUMATERA UTARA, 123, 081210110328', 'Bank Mandiri', 'Menunggu Pembayaran');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`idUser`, `username`, `password`, `nama`) VALUES
(1, 'adentyae', '1234', 'Adentya Elmas Pranawa'),
(8, 'emil.kontesa', '1234', 'Emil Kontesa'),
(9, 'aldisi', '12345', 'Hasan'),
(10, 'adul', 'aa123123', 'adul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_gerabah`
--
ALTER TABLE `tb_gerabah`
  ADD PRIMARY KEY (`idgerabah`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gerabah`
--
ALTER TABLE `tb_gerabah`
  MODIFY `idgerabah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
