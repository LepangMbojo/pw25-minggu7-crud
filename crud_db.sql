-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2025 at 02:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_122`
--

CREATE TABLE `login_122` (
  `Username_ID` varchar(50) NOT NULL,
  `Name` int(50) NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_122`
--

INSERT INTO `login_122` (`Username_ID`, `Name`, `Password`) VALUES
('Lepang', 0, 2343);

-- --------------------------------------------------------

--
-- Table structure for table `produk_122`
--

CREATE TABLE `produk_122` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `merek` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk_122`
--

INSERT INTO `produk_122` (`id`, `nama`, `harga`, `merek`, `stock`) VALUES
(3, 'Dodi', 243, '', 0),
(4, 'Dodi', 243, '', 0),
(5, 'adda', 3343, '', 0),
(7, 'yang ', 10000000, 'alfa', 0),
(8, 'M. Khalid Al Rejeki', 13253453, 'kanvas', 87);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_122`
--
ALTER TABLE `login_122`
  ADD PRIMARY KEY (`Username_ID`);

--
-- Indexes for table `produk_122`
--
ALTER TABLE `produk_122`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk_122`
--
ALTER TABLE `produk_122`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
