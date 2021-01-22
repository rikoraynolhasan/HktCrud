-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 09:58 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hk_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `jenis` enum('Asus','Acer','HP') DEFAULT NULL,
  `jumlah_barang` int(10) DEFAULT NULL,
  `diskon` double DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `jenis`, `jumlah_barang`, `diskon`, `tanggal_masuk`, `created_at`, `updated_at`) VALUES
(7, 'Asus Laptop X441MA', 'Asus', 2, 0.5, '2021-01-23', '2021-01-22 20:41:47', '2021-01-22 12:41:47'),
(8, 'Acer Aspire 3 A314-32', 'Acer', 10, 0.5, '2021-01-23', '2021-01-22 12:41:33', '2021-01-22 12:41:33'),
(9, 'Acer Nitro 5', 'Acer', 3, 10.5, '2021-01-22', '2021-01-22 12:42:46', '2021-01-22 12:42:46'),
(10, 'HP Pavillion 15', 'HP', 2, 5, '2021-01-23', '2021-01-22 12:43:34', '2021-01-22 12:43:34'),
(11, 'Zenbook Duo UX481FA', 'Asus', 29, 0, '2021-01-13', '2021-01-22 12:44:43', '2021-01-22 12:44:43'),
(12, 'HP EliteBook 820 G2', 'HP', 3, 0, '2021-01-22', '2021-01-22 12:45:59', '2021-01-22 12:45:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
