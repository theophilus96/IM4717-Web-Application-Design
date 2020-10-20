-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2020 at 10:42 AM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f32ee`
--

-- --------------------------------------------------------

--
-- Table structure for table `Javajam_order_items`
--

CREATE TABLE IF NOT EXISTS `Javajam_order_items` (
  `OrderID` int(11) NOT NULL,
  `MenuID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Javajam_order_items`
--

INSERT INTO `Javajam_order_items` (`OrderID`, `MenuID`, `Quantity`) VALUES
(9, 1, 1),
(9, 2, 2),
(9, 4, 3),
(11, 1, 5),
(11, 3, 6),
(11, 4, 7),
(12, 1, 2),
(12, 2, 4),
(12, 4, 6),
(14, 1, 1),
(14, 3, 2),
(14, 4, 3),
(15, 1, 1),
(15, 3, 2),
(15, 4, 3),
(16, 1, 0),
(16, 3, 0),
(16, 4, 10),
(17, 1, 0),
(17, 3, 0),
(17, 5, 10),
(18, 1, 5),
(18, 2, 5),
(18, 4, 5),
(19, 1, 1),
(19, 2, 1),
(19, 4, 1),
(20, 1, 1),
(20, 2, 1),
(20, 4, 1),
(21, 1, 1),
(21, 2, 1),
(21, 4, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
