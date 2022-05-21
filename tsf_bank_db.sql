-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 28, 2021 at 09:57 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsf_bank_db`
--
CREATE DATABASE IF NOT EXISTS `tsf_bank_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `tsf_bank_db`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curr_balance` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `curr_balance`) VALUES
(1, 'Ujjwal Tyagi', 'ujjwaltyagi@gmail.com', 11000),
(2, 'Naman Gogia', 'namangogia@gmail.com', 19000),
(3, 'Harsh Agarwaal', 'perrharsh@gmail.com', 25000),
(4, 'Priyam Seth', 'sethpriyam@gmail.com', 45000),
(5, 'Apoorv Garg', 'apporvgarg@gmail.com', 50000),
(6, 'Jatin Bagai', 'jatinbagai@gmail.com', 26000),
(7, 'Satyam Chauhan', 'satyamchauhan@gmail.com', 68000),
(8, 'Krishna Pandit', 'panditji@gmail.com', 8000),
(9, 'Shivam Parashar', 'shivamparashar@gmail.com', 43112),
(10, 'Kawaljeet Batra', 'kawaljeetbatra@gmail.com', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

DROP TABLE IF EXISTS `transfers`;
CREATE TABLE IF NOT EXISTS `transfers` (
  `sno` int(50) NOT NULL AUTO_INCREMENT,
  `sender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`sno`, `sender`, `receiver`, `amount`) VALUES
(1, 'Ujjwal Tyagi', 'Naman Gogia', 4),
(2, 'Naman Gogia', 'Apoorv Garg', 120),
(3, 'Apoorv Garg', 'Harsh Agarwaal', 300),
(4, 'Kawaljeet Batra', 'Shivam Parashar', 10),
(5, 'Priyam Seth', 'Jatin Bagai', 10),
(6, 'Jatin Bagai', 'Satyam Chauhan', 10),
(7, 'Satyam Chauhan', 'Krishna Pandit', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
