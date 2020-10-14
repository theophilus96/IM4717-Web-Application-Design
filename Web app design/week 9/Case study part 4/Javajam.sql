-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 13, 2020 at 11:01 PM
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
-- Table structure for table `Javajam`
--

CREATE TABLE IF NOT EXISTS `Javajam` (
  `MenuID` int(11) NOT NULL,
  `Name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Price` float NOT NULL,
  `Description` varchar(1000) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Item` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`MenuID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Javajam`
--

INSERT INTO `Javajam` (`MenuID`, `Name`, `Price`, `Description`, `Item`) VALUES
(1, 'Java', 1, 'Regular house blend, decaffeinated coffee, or flavor of the day', 'Endless Cup'),
(2, 'Cafe au Lait', 2, 'House blended coffee infuse in to a smooth, steamed milk', 'Single'),
(3, 'Cafe au Lait', 3, 'House blended coffee infuse in to a smooth, steamed milk', 'Double'),
(4, 'Iced Cappucino', 4, 'Sweetened espresso blended with icy-cold milk and served in a\r\n                chilled glass', 'Single'),
(5, 'Iced Cappucino', 5, 'Sweetened espresso blended with icy-cold milk and served in a\r\n                chilled glass', 'Double');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
