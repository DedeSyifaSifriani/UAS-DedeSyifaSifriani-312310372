-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2025 at 06:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kuliner`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_makanan`
--

CREATE TABLE `tbl_makanan` (
  `id_makanan` int(2) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `daerah_makanan` varchar(100) NOT NULL,
  `foto_makanan` blob DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_makanan`
--

INSERT INTO `tbl_makanan` (`id_makanan`, `nama_makanan`, `daerah_makanan`, `foto_makanan`, `keterangan`, `gambar`) VALUES
(5, 'Mie Aceh', 'Aceh', NULL, NULL, 'Mie Aceh.jpg'),
(6, 'Bika Ambon', 'Sumatera Utara', NULL, NULL, 'Rendang.jpeg'),
(7, 'Rendang', 'Sumatera Barat', NULL, NULL, 'Rendang.jpeg'),
(8, 'Gulai Belacan', 'Riau', NULL, NULL, 'Gulai Belacan.JPEG'),
(9, 'Lempok Durian', 'Kepulauan Riau', NULL, NULL, 'Lempok Durian.jpeg'),
(10, 'Pempek', 'Sumatera Selatan', NULL, NULL, 'Pempek.jpeg'),
(11, 'Seruit', 'Lampung', NULL, NULL, 'Seriut.jpeg'),
(12, 'Kerak Telor', 'DKI Jakarta', NULL, NULL, 'Kerak Telor.jpeg'),
(13, 'Surabi', 'Jawa Barat', NULL, NULL, 'Surabi.jpeg'),
(14, 'Gudeg', 'DI Yogyakarta', NULL, NULL, 'Gudeg.jpg'),
(15, 'Rawon', 'Jawa Timur', NULL, NULL, 'Rawon.jpeg'),
(16, 'Coto Makassar', 'Sulawesi Selatan', NULL, NULL, 'Coto Makassar.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_minuman`
--

CREATE TABLE `tbl_minuman` (
  `id_minuman` int(2) NOT NULL,
  `nama_minuman` varchar(100) NOT NULL,
  `daerah_minuman` varchar(100) NOT NULL,
  `foto_minuman` blob DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_minuman`
--

INSERT INTO `tbl_minuman` (`id_minuman`, `nama_minuman`, `daerah_minuman`, `foto_minuman`, `keterangan`, `gambar`) VALUES
(2, 'Bir Pletok', 'DKI Jakarta', NULL, NULL, 'Bir Pletok.jpeg'),
(3, 'Bajigur', 'Jawa Barat', NULL, NULL, 'Bajigur.jpeg'),
(4, 'Wedang Uwuh', 'Jawa Tengah', NULL, NULL, 'Wedang Uwuh.jpeg'),
(5, 'Wedang Ronde', 'DI Yogyakarta', NULL, NULL, 'Wedang Ronde.jpeg'),
(6, 'Wedang Pokak', 'Jawa Timur', NULL, NULL, 'Wedang Pokak.jpg'),
(7, 'Es Lidah Buaya', 'Kalimantan Barat', NULL, NULL, 'Es Lidah Buaya.jpeg'),
(8, 'Es Daluman', 'Kalimantan Tengah', NULL, NULL, 'Es Daluman.jpeg'),
(9, 'Es Pisang Ijo', 'Gorontalo', NULL, NULL, 'Es Pisang Ijo.jpg'),
(10, 'Es Kacang Merah', 'Sulawesi Tengah', NULL, NULL, 'Es Kacang Merah.jpeg'),
(11, 'Loloh Cemcem', 'Bali', NULL, NULL, 'Loloh Cemcem.jpg'),
(12, 'Es Pallu Butung', 'Sulawesi Selatan', NULL, NULL, 'Es Pallu Butung .jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_makanan`
--
ALTER TABLE `tbl_makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `tbl_minuman`
--
ALTER TABLE `tbl_minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_makanan`
--
ALTER TABLE `tbl_makanan`
  MODIFY `id_makanan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_minuman`
--
ALTER TABLE `tbl_minuman`
  MODIFY `id_minuman` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
