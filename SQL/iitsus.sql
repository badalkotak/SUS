-- phpMyAdmin SQL Dump
-- version 4.1.13
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2016 at 12:26 PM
-- Server version: 5.5.32
-- PHP Version: 5.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iitsus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(10) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `passwd`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `Answers`
--

CREATE TABLE IF NOT EXISTS `Answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_no` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `user_uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=221 ;

--
-- Dumping data for table `Answers`
--

INSERT INTO `Answers` (`id`, `question_no`, `answer`, `comment`, `user_uid`) VALUES
(41, 1, 2, '', 19024),
(42, 3, 2, '', 19024),
(43, 5, 3, '', 19024),
(44, 7, 2, '', 19024),
(45, 9, 2, '', 19024),
(46, 2, 2, '', 19024),
(47, 4, 2, '', 19024),
(48, 6, 2, '', 19024),
(49, 8, 3, '', 19024),
(50, 10, 2, '', 19024),
(51, 1, 3, '', 9091),
(52, 3, 3, '', 9091),
(53, 5, 3, '', 9091),
(54, 7, 3, '', 9091),
(55, 9, 3, '', 9091),
(56, 2, 1, '', 9091),
(57, 4, 1, '', 9091),
(58, 6, 1, '', 9091),
(59, 8, 1, '', 9091),
(60, 10, 1, '', 9091),
(61, 1, 3, '', 48329),
(62, 3, 4, '', 48329),
(63, 5, 4, '', 48329),
(64, 7, 4, '', 48329),
(65, 9, 4, '', 48329),
(66, 2, 0, '', 48329),
(67, 4, 0, '', 48329),
(68, 6, 0, '', 48329),
(69, 8, 0, '', 48329),
(70, 10, 0, '', 48329),
(71, 1, 3, 'its good for data analyzing', 75904),
(72, 3, 4, '', 75904),
(73, 5, 3, '', 75904),
(74, 7, 2, '', 75904),
(75, 9, 3, '', 75904),
(76, 2, 0, 'At the start i got confused', 75904),
(77, 4, 0, '', 75904),
(78, 6, 2, '', 75904),
(79, 8, 1, '', 75904),
(80, 10, 0, '', 75904),
(81, 1, 4, '', 3688),
(82, 3, 4, '', 3688),
(83, 5, 4, '', 3688),
(84, 7, 4, '', 3688),
(85, 9, 3, '', 3688),
(86, 2, 0, '', 3688),
(87, 4, 4, '', 3688),
(88, 6, 1, '', 3688),
(89, 8, 0, '', 3688),
(90, 10, 2, '', 3688),
(91, 1, 1, '', 45924),
(92, 3, 1, '', 45924),
(93, 5, 1, '', 45924),
(94, 7, 0, '', 45924),
(95, 9, 1, '', 45924),
(96, 2, 3, '', 45924),
(97, 4, 3, '', 45924),
(98, 6, 3, '', 45924),
(99, 8, 3, '', 45924),
(100, 10, 3, '', 45924),
(101, 1, 4, '', 41955),
(102, 3, 2, '', 41955),
(103, 5, 3, '', 41955),
(104, 7, 4, '', 41955),
(105, 9, 2, '', 41955),
(106, 2, 2, '', 41955),
(107, 4, 0, '', 41955),
(108, 6, 0, '', 41955),
(109, 8, 2, '', 41955),
(110, 10, 2, '', 41955),
(111, 1, 3, '', 16639),
(112, 3, 4, '', 16639),
(113, 5, 3, '', 16639),
(114, 7, 2, '', 16639),
(115, 9, 3, '', 16639),
(116, 2, 0, '', 16639),
(117, 4, 3, '', 16639),
(118, 6, 0, '', 16639),
(119, 8, 0, '', 16639),
(120, 10, 0, '', 16639),
(121, 1, 4, '', 17741),
(122, 3, 4, '', 17741),
(123, 5, 3, '', 17741),
(124, 7, 4, '', 17741),
(125, 9, 4, '', 17741),
(126, 2, 0, '', 17741),
(127, 4, 1, '', 17741),
(128, 6, 0, '', 17741),
(129, 8, 0, '', 17741),
(130, 10, 0, '', 17741),
(131, 1, 2, '', 21826),
(132, 3, 3, '', 21826),
(133, 5, 3, '', 21826),
(134, 7, 3, '', 21826),
(135, 9, 3, '', 21826),
(136, 2, 2, '', 21826),
(137, 4, 1, '', 21826),
(138, 6, 3, '', 21826),
(139, 8, 3, '', 21826),
(140, 10, 2, '', 21826),
(141, 1, 4, '', 60482),
(142, 3, 2, '', 60482),
(143, 5, 3, '', 60482),
(144, 7, 3, '', 60482),
(145, 9, 2, '', 60482),
(146, 2, 1, '', 60482),
(147, 4, 3, '', 60482),
(148, 6, 1, '', 60482),
(149, 8, 3, '', 60482),
(150, 10, 3, '', 60482),
(151, 1, 4, '', 43315),
(152, 3, 3, '', 43315),
(153, 5, 3, '', 43315),
(154, 7, 3, '', 43315),
(155, 9, 3, '', 43315),
(156, 2, 2, '', 43315),
(157, 4, 3, '', 43315),
(158, 6, 2, '', 43315),
(159, 8, 1, '', 43315),
(160, 10, 2, '', 43315),
(161, 1, 3, '', 19303),
(162, 3, 1, '', 19303),
(163, 5, 1, '', 19303),
(164, 7, 1, '', 19303),
(165, 9, 1, '', 19303),
(166, 2, 3, '', 19303),
(167, 4, 3, '', 19303),
(168, 6, 1, '', 19303),
(169, 8, 3, '', 19303),
(170, 10, 3, '', 19303),
(171, 1, 4, '', 32696),
(172, 3, 4, '', 32696),
(173, 5, 2, '', 32696),
(174, 7, 4, '', 32696),
(175, 9, 4, '', 32696),
(176, 2, 0, '', 32696),
(177, 4, 0, '', 32696),
(178, 6, 1, '', 32696),
(179, 8, 1, '', 32696),
(180, 10, 3, '', 32696),
(181, 1, 4, '', 13808),
(182, 3, 4, '', 13808),
(183, 5, 4, '', 13808),
(184, 7, 4, '', 13808),
(185, 9, 4, '', 13808),
(186, 2, 0, '', 13808),
(187, 4, 4, '', 13808),
(188, 6, 4, '', 13808),
(189, 8, 0, '', 13808),
(190, 10, 1, '', 13808),
(191, 1, 3, '', 1108),
(192, 3, 3, '', 1108),
(193, 5, 4, '', 1108),
(194, 7, 4, '', 1108),
(195, 9, 4, '', 1108),
(196, 2, 0, '', 1108),
(197, 4, 2, '', 1108),
(198, 6, 0, '', 1108),
(199, 8, 1, '', 1108),
(200, 10, 1, '', 1108),
(201, 1, 4, '', 28089),
(202, 3, 4, '', 28089),
(203, 5, 4, '', 28089),
(204, 7, 4, '', 28089),
(205, 9, 4, '', 28089),
(206, 2, 0, '', 28089),
(207, 4, 0, '', 28089),
(208, 6, 0, '', 28089),
(209, 8, 0, '', 28089),
(210, 10, 0, '', 28089),
(211, 1, 4, '', 64353),
(212, 3, 4, '', 64353),
(213, 5, 4, '', 64353),
(214, 7, 2, '', 64353),
(215, 9, 4, '', 64353),
(216, 2, 0, '', 64353),
(217, 4, 0, '', 64353),
(218, 6, 0, '', 64353),
(219, 8, 0, '', 64353),
(220, 10, 1, '', 64353);

-- --------------------------------------------------------

--
-- Table structure for table `Custom_questions`
--

CREATE TABLE IF NOT EXISTS `Custom_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `workshop_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Custom_workshop`
--

CREATE TABLE IF NOT EXISTS `Custom_workshop` (
  `workshop_id` int(11) NOT NULL,
  PRIMARY KEY (`workshop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Questions`
--

CREATE TABLE IF NOT EXISTS `Questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `Questions`
--

INSERT INTO `Questions` (`id`, `question`) VALUES
(81, 'I think that I would like to use SYSTEM frequently'),
(82, 'I found SYSTEM unnecessarily complex'),
(83, 'I thought SYSTEM was easy to use'),
(84, 'I think that I would need the\r\nsupport of a technical person to\r\nbe able to use SYSTEM'),
(85, 'I found the various functions in\r\nSYSTEM were well integrated'),
(86, 'I thought there was too much\r\ninconsistency in SYSTEM'),
(87, 'I would imagine that most people\r\nwould learn to use SYSTEM\r\nvery quickly'),
(88, 'I found SYSTEM very cumbersome to use'),
(89, 'I felt very confident using SYSTEM'),
(90, 'I needed to learn a lot of\r\nthings before I could get going\r\nwith SYSTEM');

-- --------------------------------------------------------

--
-- Table structure for table `Researcher`
--

CREATE TABLE IF NOT EXISTS `Researcher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `workshop` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `Researcher`
--

INSERT INTO `Researcher` (`id`, `fname`, `lname`, `email`, `passwd`, `workshop`) VALUES
(5, 'A', 'B', 'badal.kotak@somaiya.edu', 'ppjp', 7),
(6, 'jk', 'madathil', 'jayakrishnan.m@iitb.ac.in', 'uSRK', 6),
(12, 'Jignesh', 'Davda', 'jigneshd108@gmail.com', 'Pfja', 7),
(13, 'Dhiren', 'Gangani', 'dhireng110@gmail.com', '1i63', 6),
(14, 'Badal', 'Kotak', 'badalkotak@gmail.com', 'uZp5', 8),
(16, 'Krishna', 'Kotak', 'badal.kotak@e-gyaan.in', '1234', 7),
(17, 'Anita', 'Diwakar', 'anitasd2008@gmail.com', 'T99v', 9);

-- --------------------------------------------------------

--
-- Table structure for table `Score`
--

CREATE TABLE IF NOT EXISTS `Score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `score` double NOT NULL,
  `user_uid` int(11) NOT NULL,
  `idd` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `Score`
--

INSERT INTO `Score` (`id`, `user`, `score`, `user_uid`, `idd`, `date`) VALUES
(5, '', 50, 19024, '5', '30/12/2015'),
(6, '', 75, 9091, '5', '31/12/2015'),
(7, 'Test 1', 97.5, 48329, '5', '31/12/2015'),
(8, 'Test1', 80, 75904, '5', '31/12/2015'),
(9, 'Test2', 80, 3688, '5', '31/12/2015'),
(10, 'Test3', 22.5, 45924, '5', '31/12/2015'),
(11, 'Test4', 72.5, 41955, '5', '31/12/2015'),
(12, 'Test5', 80, 16639, '5', '31/12/2015'),
(13, 'Test6', 95, 17741, '5', '31/12/2015'),
(14, 'Test7', 57.5, 21826, '5', '31/12/2015'),
(15, 'Test8', 57.5, 60482, '5', '31/12/2015'),
(16, '', 65, 43315, '5', '31/12/2015'),
(17, 'Test9', 35, 19303, '5', '31/12/2015'),
(18, 'Test10', 82.5, 32696, '5', '31/12/2015'),
(19, 'Test11', 77.5, 13808, '5', '31/12/2015'),
(20, 'Test12', 85, 1108, '5', '31/12/2015'),
(21, 'Test13', 100, 28089, '5', '31/12/2015'),
(22, 'test', 92.5, 64353, '5', '09/01/2016');

-- --------------------------------------------------------

--
-- Table structure for table `Workshop`
--

CREATE TABLE IF NOT EXISTS `Workshop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `show_score` text NOT NULL,
  `Sys_name` varchar(50) DEFAULT NULL,
  `reason` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `Workshop`
--

INSERT INTO `Workshop` (`id`, `name`, `show_score`, `Sys_name`, `reason`) VALUES
(5, 'iSAT workshop', 'Y', 'iSAT', 'Y'),
(6, 'LD Workshop', 'Y', 'LD', 'N'),
(7, 'EGyaan Workshop', 'Y', 'EGyaan', 'Y'),
(8, 'Test', 'N', 'iTest', 'N'),
(9, 'Virtual Lab Workshop', 'Y', 'OLE-DM Tool', 'Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
