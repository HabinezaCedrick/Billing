-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2016 at 12:53 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `names` text NOT NULL,
  `subject` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`number`, `names`, `subject`, `email`, `message`, `date`) VALUES
(1, 'niyigena', 'odette', 'niyomubyeyidi@gmail.com', 'Yr web is looking good rwosee peee', '2016-02-21'),
(3, 'niyigena', 'student', 'niyomubyeyidi@gmail.com', 'I want you to help me to get the becouse i  nsbbdsnmf ggdd', '2015-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `title`) VALUES
('', '', ''),
('', '', ''),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE IF NOT EXISTS `pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `slip_no` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id`, `reg_no`, `amount`, `slip_no`, `date`) VALUES
(4, 9, 3500, 8765, '2016-05-02'),
(5, 6, 7000, 233, '2016-05-09'),
(6, 8, 3000, 2344, '2016-05-18'),
(7, 9, 2000, 3224, '2016-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` text NOT NULL,
  `national_id` text NOT NULL,
  `tel_no` text,
  `sex` text NOT NULL,
  `sector` text NOT NULL,
  `district` text NOT NULL,
  `province` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `names`, `national_id`, `tel_no`, `sex`, `sector`, `district`, `province`) VALUES
(9, 'HABINEZA Cedrick', '66583644', '345566', 'Female', 'Biryogo', 'Nyarugenge', 'South'),
(8, 'TUMUKUNDE Egide', '9586211334', '0727329436', 'Female', 'Nyarugenge', 'Kicukiro', 'Kigali'),
(6, 'NDATIMANA Jean de Dieu', '1199407321', '0727329445', 'M', 'Gahini', 'nyarugenge', 'Northern');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
