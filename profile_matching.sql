-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 04:56 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile_matching`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `fixed_acid` float NOT NULL,
  `volatile_acid` float NOT NULL,
  `citric_acid` float NOT NULL,
  `ph` float NOT NULL,
  `residual_sugar` float NOT NULL,
  `chlorides` float NOT NULL,
  `free_sulfur_dioxide` float NOT NULL,
  `sulphates` float NOT NULL,
  `alcohol` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `fixed_acid`, `volatile_acid`, `citric_acid`, `ph`, `residual_sugar`, `chlorides`, `free_sulfur_dioxide`, `sulphates`, `alcohol`) VALUES
(1, 'fadli', 11.6, 0.58, 0.66, 3.25, 2.2, 0.074, 10, 0.57, 9),
(2, 'budi', 10.5, 0.59, 0.49, 3.3, 2.1, 0.07, 14, 0.56, 9.6),
(3, 'ani', 7.4, 0.7, 0, 3.51, 1.9, 0.076, 11, 0.56, 9.4),
(4, 'dhiya', 11.2, 0.28, 0.56, 3.16, 1.9, 0.075, 17, 0.58, 9.8),
(5, 'tia', 7.3, 0.65, 0, 3.39, 1.2, 0.065, 15, 0.47, 10),
(6, 'alif', 7.9, 0.35, 0.46, 3.35, 3.6, 0.078, 15, 0.86, 12.8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
