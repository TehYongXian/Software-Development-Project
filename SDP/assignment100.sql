-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 02, 2021 at 01:24 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment100`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(100) NOT NULL,
  `Issues` text NOT NULL,
  `Opinion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `student_id`, `Issues`, `Opinion`) VALUES
(34, 'TP04', 'Password cannot be updated', 'pls update my password'),
(30, 'TP056546', 'Name is wrong', 'i m alan'),
(31, 'TP056546', 'Name is wrong', '123123123'),
(32, 'TP056546', 'Intake is wrong', '99999'),
(33, 'TP056555', 'Password cannot be updated', '222');

-- --------------------------------------------------------

--
-- Table structure for table `loginadmin`
--

DROP TABLE IF EXISTS `loginadmin`;
CREATE TABLE IF NOT EXISTS `loginadmin` (
  `admin_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loginadmin`
--

INSERT INTO `loginadmin` (`admin_id`, `name`, `password`) VALUES
('AD2222', '22221', '2222'),
('AD01', 'sad', '123'),
('AD02', 'Lily', '123'),
('AD003', 'vincent', '123');

-- --------------------------------------------------------

--
-- Table structure for table `loginlecturer`
--

DROP TABLE IF EXISTS `loginlecturer`;
CREATE TABLE IF NOT EXISTS `loginlecturer` (
  `lecturer_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  PRIMARY KEY (`lecturer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loginlecturer`
--

INSERT INTO `loginlecturer` (`lecturer_id`, `name`, `email`, `password`, `department`) VALUES
('LT11', '11', '22', '33', 'School in software engineering'),
('LT22233', '2233', '333', '333', 'School in business'),
('LT01', 'wong', 'wong@gmail.com', '123', 'School in software engineering'),
('LT02', 'wongchung', 'wong@gmail.com', '22', 'School in engineering'),
('LT002', 'alan', 'alan@gmail', '123', 'School in engineering'),
('LT003', 'ivan', 'ivan123@gmail.com', '123', 'School in business');

-- --------------------------------------------------------

--
-- Table structure for table `loginparent`
--

DROP TABLE IF EXISTS `loginparent`;
CREATE TABLE IF NOT EXISTS `loginparent` (
  `parent_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`parent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loginparent`
--

INSERT INTO `loginparent` (`parent_id`, `name`, `phone`, `password`) VALUES
('PT11122', '1111', '222', '2222'),
('PT02', 'chung', '010', '123'),
('PT2222', '111', '1111', '111'),
('PT03', 'chung', '010', '123');

-- --------------------------------------------------------

--
-- Table structure for table `loginstudent`
--

DROP TABLE IF EXISTS `loginstudent`;
CREATE TABLE IF NOT EXISTS `loginstudent` (
  `student_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `intake` varchar(50) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loginstudent`
--

INSERT INTO `loginstudent` (`student_id`, `name`, `email`, `password`, `intake`) VALUES
('TP056547', 'Vincentc', 'tp0565466', '123', 'UCDF1905ICT(ITR)'),
('TP056546', 'Vincent', 'tp056546', '123', 'UCDF1905ICT(SE)'),
('TP222', '22222', '222', '2222', 'UCDF1905ICT(SE)'),
('TP056555', 'alan', 'alan@gmail', '123', 'UCDF1905ICT(DI)'),
('TP22', '222', '2222', '2222', 'UCDF1905ICT(SE)'),
('TP04', 'teh', 'teh01@gmail.com', '123456', 'UCDF1905ICT(SE)');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
