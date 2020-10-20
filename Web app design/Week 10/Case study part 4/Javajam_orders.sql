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
-- Table structure for table `Javajam_orders`
--

CREATE TABLE IF NOT EXISTS `Javajam_orders` (
  `OrderID` int(11) NOT NULL AUTO_INCREMENT,
  `Amount` float NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`OrderID`),
  KEY `OrderID` (`OrderID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `Javajam_orders`
--

INSERT INTO `Javajam_orders` (`OrderID`, `Amount`, `Date`) VALUES
(9, 20.25, '2020-10-17 16:55:43'),
(11, 68.25, '2020-10-17 16:56:49'),
(12, 40.5, '2020-10-17 17:16:47'),
(14, 25.25, '2020-10-17 17:22:35'),
(15, 25.25, '2020-10-17 17:24:01'),
(16, 57.5, '2020-10-17 18:18:21'),
(17, 57.5, '2020-10-17 18:20:07'),
(18, 43.75, '2020-10-17 20:06:16'),
(19, 2, '2020-10-17 20:07:36'),
(20, 2, '2020-10-17 20:08:39'),
(21, 2, '2020-10-17 20:09:42');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
