-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 12:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mamacleanlaundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `laundry_order`
--

CREATE TABLE `laundry_order` (
  `id_orderlaundry` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `total_banyak_item` int(11) NOT NULL,
  `total_berat` decimal(10,0) NOT NULL,
  `total_harga` decimal(10,0) NOT NULL,
  `service_laundry` varchar(50) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laundry_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `laundry_order_item`
--

CREATE TABLE `laundry_order_item` (
  `id_item` int(11) NOT NULL,
  `id_orderlaundry` int(11) NOT NULL,
  `nama_item` varchar(100) NOT NULL,
  `banyak_item` int(11) NOT NULL,
  `berat_item` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laundry_order_item`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laundry_order`
--
ALTER TABLE `laundry_order`
  ADD PRIMARY KEY (`id_orderlaundry`);

--
-- Indexes for table `laundry_order_item`
--
ALTER TABLE `laundry_order_item`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_orderlaundry` (`id_orderlaundry`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laundry_order`
--
ALTER TABLE `laundry_order`
  MODIFY `id_orderlaundry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `laundry_order_item`
--
ALTER TABLE `laundry_order_item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laundry_order_item`
--
ALTER TABLE `laundry_order_item`
  ADD CONSTRAINT `laundry_order_item_ibfk_1` FOREIGN KEY (`id_orderlaundry`) REFERENCES `laundry_order` (`id_orderlaundry`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
