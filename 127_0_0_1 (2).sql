-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 07, 2021 at 08:40 AM
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
CREATE DATABASE IF NOT EXISTS `assignment100` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `assignment100`;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `lecturer_id` varchar(100) NOT NULL,
  `selectclass` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_class` date NOT NULL,
  `starttime` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `duration` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `classtype` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `otp_num` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`class_id`, `lecturer_id`, `selectclass`, `date_class`, `starttime`, `duration`, `classtype`, `otp_num`, `status`) VALUES
(43, 'LT01', 'APP003-3-8-MPU-UCDF1905ICT(SE) ', '2021-03-07', '14:30pm', '1hours30min', 'Tutorial', '680', ''),
(44, 'LT01', 'APP004-4-6-PITS-UCDF1905ICT(DI) ', '2021-03-26', '10:30am', '1hours', 'Tutorial', '468', ''),
(45, 'LT01', 'APP002-2-1-JP-UCDF1905ICT(DI) ', '2021-03-07', '8:30am', '1hours30min', 'Lecturer', '661', ''),
(46, 'LT01', 'APP002-2-1-JP-UCDF1905ICT(DI) ', '2021-03-07', '13:30pm', '1hours', 'Lecturer', '800', ''),
(47, 'LT01', 'APP003-3-8-MPU-UCDF1905ICT(SE) ', '2021-03-07', '13:30pm', '1hours', 'Tutorial', '100', '');

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
  `reply` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `student_id`, `Issues`, `Opinion`, `reply`) VALUES
(40, 'tp01', 'Attendance not update', '123', 'eee'),
(41, 'tp01', 'Attendance not update', '123', '12333'),
(51, 'tp01', 'Attendance not update', '`213123', ''),
(50, 'tp01', 'Attendance not update', '12312313', ''),
(49, 'tp01', 'Name is wrong', '123123123123', ''),
(48, 'TP02', 'Attendance not update', '1231231', ''),
(47, 'tp01', 'Name is wrong', '4234234234', 'yyyy');

-- --------------------------------------------------------

--
-- Table structure for table `feedback1`
--

DROP TABLE IF EXISTS `feedback1`;
CREATE TABLE IF NOT EXISTS `feedback1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` varchar(100) NOT NULL,
  `Issues` text NOT NULL,
  `Opinion` text NOT NULL,
  `reply` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback1`
--

INSERT INTO `feedback1` (`id`, `parent_id`, `Issues`, `Opinion`, `reply`) VALUES
(1, 'PT01', 'Name is wrong', '1231231231', '32123'),
(2, 'PT01', 'Attendance Student cannot view', '2131231', '312312312'),
(3, 'PT01', 'Password cannot be updated', '12312312', '3123'),
(4, 'PT02', 'Attendance Student cannot view', '3123123', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback2`
--

DROP TABLE IF EXISTS `feedback2`;
CREATE TABLE IF NOT EXISTS `feedback2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lecturer_id` varchar(100) NOT NULL,
  `Issues` text NOT NULL,
  `Opinion` text NOT NULL,
  `reply` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback2`
--

INSERT INTO `feedback2` (`id`, `lecturer_id`, `Issues`, `Opinion`, `reply`) VALUES
(1, 'LT01', 'Timetable cannot create', '12312', '123123'),
(2, 'LT01', 'Name is wrong', '123123', '2131231'),
(3, 'LT02', 'Password cannot be updated', '123123', ''),
(4, 'LT01', 'Password cannot be updated', '123123', '');

-- --------------------------------------------------------

--
-- Table structure for table `loginadmin`
--

DROP TABLE IF EXISTS `loginadmin`;
CREATE TABLE IF NOT EXISTS `loginadmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loginadmin`
--

INSERT INTO `loginadmin` (`id`, `admin_id`, `name`, `password`) VALUES
(5, 'AD01', 'vincent', '123'),
(3, 'ad03', 'lu', '222222');

-- --------------------------------------------------------

--
-- Table structure for table `loginlecturer`
--

DROP TABLE IF EXISTS `loginlecturer`;
CREATE TABLE IF NOT EXISTS `loginlecturer` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `lecturer_id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loginlecturer`
--

INSERT INTO `loginlecturer` (`id`, `lecturer_id`, `name`, `email`, `password`, `department`) VALUES
(3, 'LT01', 'chenweijie', 'chen@gmail.comm', '123', '      School in business      '),
(5, 'LT02', 'sarah', 'sarah123@gmail.com', '123', 'School in software engineering');

-- --------------------------------------------------------

--
-- Table structure for table `loginparent`
--

DROP TABLE IF EXISTS `loginparent`;
CREATE TABLE IF NOT EXISTS `loginparent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loginparent`
--

INSERT INTO `loginparent` (`id`, `parent_id`, `name`, `phone`, `password`) VALUES
(1, 'PT01', 'vincent', '010982xxxxx ', '123'),
(4, 'PT02', 'chung', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `loginstudent`
--

DROP TABLE IF EXISTS `loginstudent`;
CREATE TABLE IF NOT EXISTS `loginstudent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `intake` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loginstudent`
--

INSERT INTO `loginstudent` (`id`, `student_id`, `name`, `email`, `password`, `intake`) VALUES
(9, 'TP02', 'alan', 'alan@gmail.com', '123', 'UCDF1905ICT(ITR)'),
(1, 'tp01', 'vincent', 'vincent@gmail.com', '123', 'UCDF1905ICT(SE)');

-- --------------------------------------------------------

--
-- Table structure for table `studentattendance`
--

DROP TABLE IF EXISTS `studentattendance`;
CREATE TABLE IF NOT EXISTS `studentattendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(100) NOT NULL,
  `absent_or_present` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `studentattendance`
--

INSERT INTO `studentattendance` (`id`, `student_id`, `absent_or_present`) VALUES
(4, 'tp01', 'Present'),
(2, 'tp01', 'Present'),
(3, 'tp01', 'Present'),
(5, 'tp01', 'Present');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
