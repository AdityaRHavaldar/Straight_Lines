-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 08:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `distanceb_w`
--

CREATE TABLE `distanceb_w` (
  `x1` int(11) NOT NULL,
  `y1` int(11) NOT NULL,
  `x2` int(11) NOT NULL,
  `y2` int(11) NOT NULL,
  `distance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `distanceb_w`
--

INSERT INTO `distanceb_w` (`x1`, `y1`, `x2`, `y2`, `distance`) VALUES
(10, 10, 20, 20, 15.2);

-- --------------------------------------------------------

--
-- Table structure for table `point_slope_form`
--

CREATE TABLE `point_slope_form` (
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `slope` float NOT NULL,
  `equation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


--
-- Dumping data for table `point_slope_form`
--
INSERT INTO `point_slope_form` (`x`, `y`, `slope`, `equation`) VALUES
(15, 25, 2.5, 'y = 2.5x + 12.5'),
(20, 30, 1.2, 'y = 1.2x - 6.4');

-- --------------------------------------------------------

--
-- Table structure for table `slope_of_the_line`
--

CREATE TABLE `slope_of_the_line` (
  `x1` int(11) NOT NULL,
  `y1` int(11) NOT NULL,
  `x2` int(11) NOT NULL,
  `y2` int(11) NOT NULL,
  `slope` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `slope_of_the_line`
--

INSERT INTO `slope_of_the_line` (`x1`, `y1`, `x2`, `y2`, `slope`) VALUES
(10, 10, 20, 20, 15.5);

-- --------------------------------------------------------

--
-- Table structure for table `two_point_form`
--

CREATE TABLE `two_point_form` (
  `x1` int(11) NOT NULL,
  `y1` int(11) NOT NULL,
  `x2` int(11) NOT NULL,
  `y2` int(11) NOT NULL,
  `equation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `two_point_form`
--

INSERT INTO `two_point_form` (`x1`, `y1`, `x2`, `y2`, `equation`) VALUES
(10, 10, 20, 20, '20'),
(10, 10, 20, 20, 'x1+y1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
