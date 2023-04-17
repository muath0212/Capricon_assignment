-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 11:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `address` varchar(150) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `contact`, `address`, `password`) VALUES
('muath', 'amuath242@gmail.com', 725726360, 'nvsdk,fjvfnvfnj', '$2y$10$eUjvqyPFJQTGbAIYe0'),
('muath', 'amuath242@gmail.com', 725726360, 'nvsdk,fjvfnvfnj', '$2y$10$nRna1jpJMDnI3QV8s8'),
('muath', 'amuath242@gmail.com', 725726360, 'nvsdk,fjvfnvfnj', ''),
('muath', 'amuath242@gmail.com', 725726360, 'nvsdk,fjvfnvfnj', '$2y$10$xLhNeguiIwEhEkgE7C'),
('muath', 'amuath242@gmail.com', 725726360, 'nvsdk,fjvfnvfnj', '$2y$10$FoG69hROoC933b..dw'),
('muath', 'amuath242@gmail.com', 725726360, 'nvsdk,fjvfnvfnj', '$2y$10$xSygyS3N9U069j9lF0'),
('muath', 'amuath242@gmail.com', 725726360, 'nvsdk,fjvfnvfnj', '$2y$10$S4y1fLp.MyzAIT0mN5'),
('muath', 'amuath24@gmail.com', 725726360, 'nvsdk,fjvfnvfnj', '$2y$10$wR8T2WX3cB48jGtiGb'),
('muath', 'amuath@gmail.com', 753021697, 'no.123', '$2y$10$YCBNlEeH9BVMcHfjKa'),
('muath', 'amuath11@gmail.com', 1214155222, 'no.123', 'e19d5cd5af0378da05f63f891');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
