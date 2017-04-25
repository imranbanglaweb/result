-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2015 at 09:01 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `diu_result`
--

CREATE TABLE IF NOT EXISTS `diu_result` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(25) NOT NULL,
  `Father` varchar(25) NOT NULL,
  `mother` varchar(25) NOT NULL,
  `roll` int(15) NOT NULL,
  `reg` int(15) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `department` varchar(15) NOT NULL,
  `s_session` year(4) NOT NULL,
  `cgpa` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `diu_result`
--

INSERT INTO `diu_result` (`id`, `t_name`, `Father`, `mother`, `roll`, `reg`, `batch`, `department`, `s_session`, `cgpa`) VALUES
(2, 'arif', 'aaa', 'ccc', 2, 275034, 'e-32th', 'cse', 2014, 4),
(12, 'arif', 'md.arif', 'farid', 28, 285012, 'e-33th', 'Cse', 2014, 3.25),
(13, 'rahman', 'md.rahman', 'mrs.rahman', 15, 275032, 'e-36th', 'CSE', 2013, 3),
(14, 'rahman', 'md.rahman', 'mrs.rahman', 15, 275032, 'e-36th', 'CSE', 2013, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
