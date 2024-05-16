-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 08:33 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `idn` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl` datetime NOT NULL,
  `batas` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`idn`, `nama`, `alamat`, `tgl`, `batas`) VALUES
(26, 'yola', 'hghghg', '2020-01-16 03:46:19', '2020-01-18 03:46:19'),
(27, 'paula', 'jhjh', '2020-01-16 03:47:10', '2020-01-18 03:47:10'),
(28, 'Pekok', 'kjkjkjkj', '2020-01-16 04:02:09', '2020-01-18 04:02:09'),
(29, 'Hyoulala', 'jhhjhjhj', '2020-01-16 17:24:59', '2020-01-18 17:24:59'),
(30, 'asas', 'asasas', '2020-07-15 08:18:39', '2020-07-17 08:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `brg`
--

CREATE TABLE `brg` (
  `id` int(11) NOT NULL,
  `nm_brg` varchar(120) NOT NULL,
  `kategori` varchar(225) NOT NULL,
  `size` int(2) NOT NULL,
  `harga` int(30) NOT NULL,
  `merek` varchar(20) NOT NULL,
  `warna` varchar(40) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brg`
--

INSERT INTO `brg` (`id`, `nm_brg`, `kategori`, `size`, `harga`, `merek`, `warna`, `stok`, `gambar`) VALUES
(2, 'Twisted Blue Hoey Loper', 'Casual', 40, 230000, 'Balenciaga', 'Blue Hoey', 394, 'twisted-x-womens-blue-hoey-loper-shoe.jpg'),
(3, 'Vl Retro Denim Star', 'Casual', 39, 240000, 'Nike', 'Blue Jeans', 396, 'vl-womens-retro-denim-star.jpg'),
(4, 'Hiking Sport Casual', 'Casual', 39, 250000, 'Nike', 'Blue Dongker', 396, 'hiking-sport-shoes-casual.jpg'),
(5, 'Twisted Lifestyle ', 'Casual', 40, 260000, 'Fila', 'Canvas', 399, 'twisted-x-womens-lifestyle-shoes.jpg'),
(6, 'Woowfoot Canvas', 'Casual', 40, 198000, 'Fila', 'Canvas', 400, 'woowfoot-canvas-casual.jpg'),
(7, 'Tiller Lace Up ', 'Casual', 41, 225000, 'Adidas', 'Blue Dongker', 398, 'tiller-lace-up-sneaker.jpg'),
(8, 'Denim Jeans Sneakers', 'Casual', 40, 205000, 'Prada', 'Blue Jeans', 395, 'denim-jeans-sneakers-casual.jpg'),
(9, 'Restinfoot Grey Original', 'Casual', 90, 200000, 'Nike', 'Grey', 438, '307-43-restinfoot-grey-original-imafeuvuqnpkawgk.jpeg'),
(10, 'Mechanische Schuhe', 'Sport', 27, 550000, 'Nike', 'Black', 299, 'Mechanische-Schuhe-Mit-Stahl-Frühling-Draht-Schnürsenkel-2-in-1-Sport-Schuhe-Dämpfung-Schuhe_jpg_640x640.jpg'),
(11, 'Jeffrey Campbell', 'Sport', 42, 460000, 'Balenciaga', 'Green-Brown', 199, 'jeffrey_campbell-hotspot-khaki-camo-left.jpg'),
(12, 'Hypervenom Phantom', 'Sport', 41, 520000, 'Nike', 'Dark Black', 350, 'nike_hypervenom_phantom_3_df_fg_pitch_dark_black_game_royal_white_h.jpg'),
(13, 'Shox Monster', 'Nike', 40, 620000, 'Nike', 'Black-Gold', 189, 'nike-shox-monster.jpg'),
(14, 'Fendi Mania', 'The Coolest', 41, 540000, 'Fendi', 'Black', 245, 'fendi_mania.jpg'),
(15, 'Air VaporMax Plus', 'The Coolest', 42, 790000, 'Nike', 'Ocean\'s Blue', 102, 'Air_VaporMax_Plus.jpg'),
(16, 'Shoes Aldo Brue', 'Formal', 41, 570000, 'Balenciaga', 'Black', 297, 'shoes-aldo-brue-ab4060g-cn-nero-black-vktyhwu-4900-400x400.jpg'),
(17, 'Lawyers Low', 'Formal', 41, 480000, 'Mavendra', 'Black', 446, 'Mavendra.jpg'),
(18, 'Marc Loire', 'Formal', 39, 540000, 'Balenciaga', 'Soft Pink', 229, 'Marc_Loire.jpg'),
(19, 'Lycra Upper', 'The Coolest', 42, 985000, 'Nike', 'Rainbow', 323, 'Lycra_Upper_Breathable_Chunky.jpg'),
(20, 'Nike Air Max Leather Mens', 'Sport', 40, 860000, 'Nike', 'Green-Black', 344, 'nike-air-max-leather-mens-runiing.jpg'),
(21, 'Saucony Kilkenny', 'Sport', 40, 880000, 'Nike', 'Black-Green', 500, 'saucony-kilkenny-xc.jpg'),
(22, 'Low Top', 'The Coolest', 42, 980000, 'Balenciaga', 'Rainbow', 65, 'Low_Top_Balenciaga.jpg'),
(23, 'Alligator Leather Tassel Semi', 'Formal', 40, 766000, 'Mavendra', 'Brown', 786, 'Alligator-Leather-Tassel-Semi-Formal-Loafer-400x400.jpg'),
(24, 'Air Vapormax Plus', 'The Coolest', 41, 870000, 'Nike', 'Black', 97, 'nike_air_vapormax_plus_black_anthracite_grande.jpg'),
(25, 'Light Vegas', 'The Coolest', 39, 740000, 'Fila', 'Light Yellow', 112, '987bb117-69c3-4045-bcb3-ca9dd90cacb2_1_e5ad5c2c759bf037cf68706b3c52c83d.jpeg'),
(26, 'React Presto', 'The Coolest', 40, 680000, 'Adidas', 'Black-Yellow', 234, 'React_Presto_Nike.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(19, 19, 2, 'Twisted Blue Hoey Loper', 2, 230000, ''),
(22, 20, 20, 'Nike Air Max Leather Mens', 1, 860000, ''),
(25, 21, 3, 'Vl Retro Denim Star', 1, 240000, ''),
(28, 23, 8, 'Denim Jeans Sneakers', 2, 205000, ''),
(29, 24, 4, 'Hiking Sport Casual', 2, 250000, ''),
(30, 25, 8, 'Denim Jeans Sneakers', 2, 205000, ''),
(31, 26, 7, 'Tiller Lace Up ', 1, 225000, ''),
(32, 26, 16, 'Shoes Aldo Brue', 2, 570000, ''),
(33, 27, 5, 'Twisted Lifestyle ', 1, 260000, ''),
(34, 27, 2, 'Twisted Blue Hoey Loper', 1, 230000, ''),
(35, 28, 11, 'Jeffrey Campbell', 1, 460000, ''),
(36, 28, 24, 'Air Vapormax Plus', 1, 870000, ''),
(37, 28, 22, 'Low Top', 1, 980000, ''),
(38, 28, 18, 'Marc Loire', 1, 540000, ''),
(39, 29, 7, 'Tiller Lace Up ', 1, 225000, ''),
(40, 29, 9, 'Restinfoot Grey Original', 1, 200000, ''),
(41, 30, 2, 'Twisted Blue Hoey Loper', 2, 230000, ''),
(42, 30, 19, 'Lycra Upper', 1, 985000, '');

--
-- Triggers `pesan`
--
DELIMITER $$
CREATE TRIGGER `pesan_penjualan` AFTER INSERT ON `pesan` FOR EACH ROW BEGIN
UPDATE brg SET stok = stok - NEW.jumlah WHERE id = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `username` varchar(56) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '1234', 1),
(2, 'user', 'user', '4321', 2),
(3, 'Hyoulala', 'hyoula', 'rani', 2),
(4, 'asas', 'asas', 'asas', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`idn`);

--
-- Indexes for table `brg`
--
ALTER TABLE `brg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beli`
--
ALTER TABLE `beli`
  MODIFY `idn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `brg`
--
ALTER TABLE `brg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
