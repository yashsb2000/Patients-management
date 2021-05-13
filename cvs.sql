-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 03:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvs`
--

-- --------------------------------------------------------

--
-- Table structure for table `glogin`
--

CREATE TABLE `glogin` (
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `glogin`
--

INSERT INTO `glogin` (`user_name`, `password`) VALUES
('government', 'government');

-- --------------------------------------------------------

--
-- Table structure for table `mlogin`
--

CREATE TABLE `mlogin` (
  `area_code` varchar(1) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mlogin`
--

INSERT INTO `mlogin` (`area_code`, `user_name`, `password`) VALUES
('A', 'medicalA', 'medicalA'),
('B', 'medicalB', 'medicalB'),
('C', 'medicalC', 'medicalC'),
('D', 'medicalD', 'medicalD'),
('E', 'medicalE', 'medicalE');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `area_code` varchar(1) NOT NULL,
  `total_cases` int(11) NOT NULL,
  `currently_sick` int(11) NOT NULL,
  `discharged` int(11) NOT NULL,
  `dead` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`area_code`, `total_cases`, `currently_sick`, `discharged`, `dead`) VALUES
('A', 100, 50, 50, 0),
('B', 100, 50, 50, 0),
('C', 100, 50, 50, 0),
('D', 100, 50, 50, 0),
('E', 100, 50, 50, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
