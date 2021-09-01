-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 05:35 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobile_numbers`
--

CREATE TABLE `mobile_numbers` (
  `id` int(11) NOT NULL,
  `mobile_number` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `verification_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=Verified, 0=Not verified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mobile_numbers`
--

INSERT INTO `mobile_numbers` (`id`, `mobile_number`, `verification_code`, `verified`) VALUES
(1, '+917058861', '88273', 0),
(2, '+917058861', '53022', 0),
(3, '+919359346', '33123', 0),
(4, '+919359346', '55178', 0),
(5, '+917058861', '24636', 0),
(6, '(615) 505-', '17158', 0),
(7, '6155054235', '86925', 0),
(8, '+917058861', '79209', 0),
(9, '+917058861', '39341', 0),
(10, '+919359346', '92935', 0),
(11, '+917058861', '67643', 0),
(12, '+917058861', '72044', 0),
(13, '+917058861', '79205', 0),
(14, '+917058861', '16665', 0),
(15, '+917058861', '59758', 0),
(16, '+917058861', '96239', 0),
(17, '+919359346', '60917', 0),
(18, '+917058861', '11111', 0),
(19, '+917058861', '17630', 0),
(20, '+919359346', '78244', 0),
(24, '+917020944008', '89820', 0),
(25, '+917058861791', '20541', 1),
(26, '20541', '78756', 0),
(27, '+919359346775', '96361', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobile_numbers`
--
ALTER TABLE `mobile_numbers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobile_numbers`
--
ALTER TABLE `mobile_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
