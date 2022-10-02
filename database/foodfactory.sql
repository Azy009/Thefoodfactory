-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 22, 2022 at 11:04 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodfactory`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id` int(69) NOT NULL AUTO_INCREMENT,
  `aname` varchar(40) DEFAULT NULL,
  `username` varchar(60) DEFAULT NULL,
  `apassword` varchar(60) DEFAULT NULL,
  `age` int(67) DEFAULT NULL,
  `anumber` varchar(200) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `aaddress` varchar(180) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `aname`, `username`, `apassword`, `age`, `anumber`, `email`, `aaddress`, `city`) VALUES
(1, 'Ajay', 'Ajay007', 'AJAY9222', 19, '8178609471', 'as1816444@gmail.com', 'Rz-58 A3-block Dharampura njf', 'DELHI'),
(2, 'Mohit sharma', 'Mohit123', 'mohit4321', 20, '4747583273', 'da1235@gmail.com', 'U-128 d4-block uttam nagar', 'AGRA'),
(3, 'Tanvi', 'Tanvi123', 'tanvi543', 26, '3848653255', 'tan321@gmail.com', 'U-128 d4-block uttam nagar', 'GOA'),
(4, 'Rohan verma', 'Rohan009', 'rohan994', 20, '3848653255', 'da1235@gmail.com', 'RZ-58 A3-Block, Dharampura Extn. Najafgarh New Delhi - 110043', 'DELHI'),
(6, 'Vinod', 'vinod231', 'vinod1234', 21, '4747583273', 'vi2353@gmail.com', 'ht-45 c7-block darampura njf', 'DELHI');

-- --------------------------------------------------------

--
-- Table structure for table `changebackground`
--

DROP TABLE IF EXISTS `changebackground`;
CREATE TABLE IF NOT EXISTS `changebackground` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) DEFAULT NULL,
  `backimg` varchar(170) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `changebackground`
--

INSERT INTO `changebackground` (`id`, `username`, `backimg`) VALUES
(1, 'Ajay007', 'dcl.jpg'),
(3, 'Rohan009', 'hj.jpg'),
(2, 'Mohit123', 'img1 (8).jpg'),
(4, 'vinod231', 'acb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `changeimg`
--

DROP TABLE IF EXISTS `changeimg`;
CREATE TABLE IF NOT EXISTS `changeimg` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `username` varchar(70) DEFAULT NULL,
  `img` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `changeimg`
--

INSERT INTO `changeimg` (`id`, `username`, `img`) VALUES
(1, 'Ajay007', 'img2 (1).jpg'),
(2, 'Ajay007', 'img2 (1).jpg'),
(3, 'Ajay007', 'img2 (1).jpg'),
(4, 'Ajay007', 'img2 (1).jpg'),
(5, 'Mohit123', 'dcl.jpg'),
(6, 'Ajay007', 'img2 (1).jpg'),
(7, 'Rohan009', 'aswd.jpg'),
(8, 'vinod231', 'acb.jpg'),
(9, 'vinod231', 'aswd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactme`
--

DROP TABLE IF EXISTS `contactme`;
CREATE TABLE IF NOT EXISTS `contactme` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `age` int(89) DEFAULT NULL,
  `cnumber` varchar(200) DEFAULT NULL,
  `problem` varchar(240) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactme`
--

INSERT INTO `contactme` (`id`, `name`, `age`, `cnumber`, `problem`) VALUES
(1, 'Ajay', 19, '8178609471', 'hello my name is ajay and i forget my account password can you help me ');

-- --------------------------------------------------------

--
-- Table structure for table `dishesmenu`
--

DROP TABLE IF EXISTS `dishesmenu`;
CREATE TABLE IF NOT EXISTS `dishesmenu` (
  `ID` int(80) NOT NULL AUTO_INCREMENT,
  `CATEGORY` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishesmenu`
--

INSERT INTO `dishesmenu` (`ID`, `CATEGORY`) VALUES
(1, 'MOMOS'),
(2, 'PIZZA'),
(3, 'NOODLES'),
(4, 'FRIED RICE'),
(5, 'BURGER'),
(6, 'FRENCH FRIES');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(89) NOT NULL AUTO_INCREMENT,
  `pusername` varchar(60) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `paddress` varchar(150) DEFAULT NULL,
  `pselect` varchar(70) DEFAULT NULL,
  `pdescription` varchar(245) DEFAULT NULL,
  `pdate` varchar(170) DEFAULT NULL,
  `img` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `pusername`, `title`, `paddress`, `pselect`, `pdescription`, `pdate`, `img`) VALUES
(1, 'Ajay007', 'HELLO WORLD', 'U-128 d4-block uttam nagar', 'INDIAN', 'This is the best movie if you already watch is movies than you know why is the best movie and this site is also one o fthe best site', '21 Apr,2022', 'img1 (8).jpg'),
(2, 'Mohit123', 'NATURE', 'U-128 d4-block uttam nagar', 'TURKEY', 'This is the best movie if you already watch is movies than you know why is the best movie and this site is also one o fthe best site', '21 Apr,2022', 'sssa.jpg'),
(4, 'Tanvi123', 'sun light', 'U-128 d4-block uttam nagar', 'INDIAN', 'd  dfd ff f fd  f f fd er er er e ee r w r re re rew rew rew ew rew rew re rer e rwee e e  re re ', '21 Apr,2022', 'hj.jpg'),
(6, 'Rohan009', 'dark light', 'RZ-58 A3-Block, Dharampura Extn. Najafgarh New Delhi - 110043', 'INDIAN', 'ddsf fvfdg ffdgdf ffdgfrg fddf  fxvfdgfdg  fdvfdgg', '21 Apr,2022', 'jpg.jpg'),
(7, 'Rohan009', 'MARVEL STUDIO', 'RZ-58 A3-Block, Dharampura Extn. Najafgarh New Delhi - 110043', 'INDIAN', 'fds effdsdfg hgjjhg yhytytjt  asd axsasc fdff thtrht rgreg fthth csds dvfdgf dfgf dfvfbfb', '22 Apr,2022', 'acb.jpg'),
(8, 'Mohit123', 'google', 'RZ-58 A3-Block, Dharampura Extn. Najafgarh New Delhi - 110043', 'INDIAN', 'fdfdsfsf gfgfht dfefe dsfesfeef dvfdgfg dgfdgfdg', '22 Apr,2022', 'dcl.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `recive`
--

DROP TABLE IF EXISTS `recive`;
CREATE TABLE IF NOT EXISTS `recive` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `age` int(89) DEFAULT NULL,
  `rnumber` varchar(200) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `rorder` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recive`
--

INSERT INTO `recive` (`id`, `name`, `age`, `rnumber`, `address`, `rorder`) VALUES
(1, 'Ajay', 19, '8178609471', 'Rz-58 A3-block Dharampura njf', 'PIZZA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
