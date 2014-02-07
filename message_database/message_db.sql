-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2013 at 08:08 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `message_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_posted` date NOT NULL,
  `is_approved` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`, `date_posted`, `is_approved`) VALUES
(24, 'Rodrigo', 'Rodrigo_Galura3rd@yahoo.com', 'Hello', '2013-11-25', 'Y'),
(27, 'Marjoe Casidsid', 'marjoesullencasidsid@yahoo.com', 'hello po', '2013-11-25', 'N'),
(28, 'Marjoe Casidsid', 'marjoesullencasidsid@yahoo.com', 'Hello po ::D', '2013-11-25', 'N'),
(29, 'Marjoe Casidsid', 'marjoesullencasidsid@yahoo.com', 'Hello po ::D', '2013-11-25', 'N'),
(30, 'Marjoe Casidsid', 'marjoesullencasidsid@yahoo.com', 'Hello po ::D', '2013-11-25', 'N'),
(31, 'Marjoe Casidsid', 'marjoesullencasidsid@yahoo.com', 'Hello po ::D', '2013-11-25', 'N'),
(32, 'Marjoe Casidsid', 'marjoesullencasidsid@yahoo.com', 'Hello po ::D', '2013-11-25', 'N'),
(33, 'Marjoe Casidsid', 'marjoesullencasidsid@yahoo.com', 'Hello po ::D', '2013-11-25', 'N'),
(34, 'Marjoe Casidsid', 'marjoesullencasidsid@yahoo.com', 'Hello po ::D', '2013-11-25', 'N'),
(35, 'Marjoe Casidsid', 'marjoesullencasidsid@yahoo.com', 'Hello po ::D', '2013-11-25', 'Y'),
(36, 'marjoe', 'marjoesullencasidsid@yahoo.com', 'hello po', '2013-11-25', 'N'),
(37, 'Marjoe Casidsid', 'casidsidmarjoe@yahoo.com', 'Hello po :D\r\n', '2013-11-25', 'N'),
(38, 'lerelyn Moraleda', 'yenyen@yahoo.com', 'huy! ayos brad!\r\n', '2013-11-25', 'N'),
(39, 'Marjoe Casidsid', 'marjoesullencasidsid@yahoo.com', 'uy, yenyen, muzta???\r\n', '2013-11-25', 'N');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
