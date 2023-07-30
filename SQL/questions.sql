-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2016 at 10:45 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myleader`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `QID` varchar(10) DEFAULT NULL,
  `Question` varchar(60) DEFAULT NULL,
  `qA` varchar(50) DEFAULT NULL,
  `qB` varchar(50) DEFAULT NULL,
  `qC` varchar(50) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`QID`, `Question`, `qA`, `qB`,`qC`) VALUES
('q1', 'Chairperson','Osii Steve Osii','Odhiambo Ray Samuel',''),
('q2', 'Secretary General','Cecilia Ogutu','Shavine Stephen',''),
('q3', 'Treasurer', 'Njoroge Mbuthia Dennis','Kipkirui Dickson Langat',''),
('q4', 'Project Coordinator','Alfred Kipkoech Langat','Ochieng Kevin','Akosi Kennedy' ),
('q5', 'Asst Project Coordinator','Sebastian Kimunya','Joseph Kisia',''),
('q6', 'Asst Secretart General','Sharon Adhiambo','Ondari Hesbon','Shitote Wasi'),
('q7', 'Vote in new constitution?','Yes','No','');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
