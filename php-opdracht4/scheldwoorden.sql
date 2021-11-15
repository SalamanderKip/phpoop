-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2021 at 08:49 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scheldwoorden`
--

-- --------------------------------------------------------

--
-- Table structure for table `woorden`
--

CREATE TABLE `woorden` (
  `id` int(11) NOT NULL,
  `scheldwoord` varchar(20) NOT NULL,
  `level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `woorden`
--

INSERT INTO `woorden` (`id`, `scheldwoord`, `level`) VALUES
(1, 'stom', 1),
(2, 'lelijk', 1),
(3, 'mooi', 1),
(4, 'homo', 1),
(5, 'lesbie', 1),
(6, 'kunker', 2),
(7, 'humu', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `woorden`
--
ALTER TABLE `woorden`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `woorden`
--
ALTER TABLE `woorden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
