-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 11:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastelec`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carname` varchar(100) NOT NULL,
  `carregno` varchar(10) NOT NULL,
  `regdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carname`, `carregno`, `regdate`) VALUES
('Ferrari la Ferrari', 'KA35021947', '2022-09-07'),
('Bugatti Cheron', 'AP02451456', '2022-08-16'),
('Lamborghini', 'TN054A7852', '2022-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `fullname` varchar(100) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fullname`, `username`, `email`, `contact`, `address`, `password`) VALUES
('Tushar Kumar B P', 'tusharbp2001', 'tusharbp2001@gmail.com', 2147483647, 'VIT Vellore', 'Tushar2001smash');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
