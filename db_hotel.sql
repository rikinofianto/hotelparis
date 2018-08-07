-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 08:44 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phoneno`, `email`, `cdate`, `approval`) VALUES
(3, 'bayu artika w', 8912222, 'bayuartika67@gmail.com', '2018-04-17', 'Allowed'),
(4, 'bayu artika w', 8912222, 'bayuartika67@gmail.com', '2018-04-17', 'Not Allowed'),
(5, 'bayu artika w', 8912222, 'bayuartika67@gmail.com', '2018-04-17', 'Allowed');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(2, 'Dr.', 'bayu', 'artika', 'Superior Room', 'Single', 1, '2018-04-18', '2018-04-19', 320.00, 323.20, 0.00, 'Room only', 3.20, 1),
(3, 'Dr.', 'bayua', 'asas', 'Family Room', 'Triple', 1, '0000-00-00', '0000-00-00', 0.00, 0.00, 0.00, 'Room only', 0.00, 0),
(4, 'Dr.', 'jgf', 'llk', 'Superior Room', 'Single', 1, '2018-04-18', '2018-04-19', 220.00, 222.20, 0.00, 'Room only', 2.20, 1),
(5, 'Miss.', 'hvhv', 'lllk', 'Superior Room', 'Quad', 1, '0000-00-00', '2018-04-20', 0.00, 0.00, 0.00, 'Room only', 0.00, 0),
(6, 'Dr.', 'hvhvj', 'jjjjj', 'Superior Room', 'Triple', 1, '2018-04-18', '2018-04-20', 440.00, 453.20, 0.00, 'Room only', 13.20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, 'President Room', 'Single', 'Free', 0),
(2, 'President Room', 'Double', 'Free', NULL),
(3, 'President Room', 'Triple', 'Free', NULL),
(4, 'Standard Room', 'Quad', 'Free', NULL),
(5, 'President Room', 'Quad', 'Free', NULL),
(6, 'Superior Room', 'Single', 'NotFree', 4),
(7, 'Superior Room', 'Double', 'Free', NULL),
(8, 'Superior Room', 'Triple', 'NotFree', 6),
(9, 'Superior Room', 'Quad', 'NotFree', 5),
(10, 'Family Room', 'Single', 'Free', NULL),
(11, 'Family Room', 'Double', 'Free', NULL),
(12, 'Family Room', 'Quad', 'Free', NULL),
(13, 'Standard Room', 'Single', 'Free', NULL),
(14, 'Standard Room', 'Double', 'Free', NULL),
(15, 'Standard Room', 'Triple', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text,
  `LName` text,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`) VALUES
(4, 'Dr.', 'jgf', 'llk', 'jvhgvvgvg@hj', 'Sri Lankan', 'Sri Lanka', '9899777', 'Superior Room', 'Single', '1', 'Room only', '2018-04-18', '2018-04-19', 'Conform', 1),
(5, 'Miss.', 'hvhv', 'lllk', 'jhhh@ggg', 'Sri Lankan', 'Sri Lanka', '989898', 'Superior Room', 'Quad', '1', 'Room only', '0000-00-00', '2018-04-20', 'Conform', NULL),
(6, 'Dr.', 'hvhvj', 'jjjjj', 'jnbj@gg', 'Sri Lankan', 'Sri Lanka', '9998887', 'Superior Room', 'Triple', '1', 'Room only', '2018-04-18', '2018-04-20', 'Conform', 2),
(7, 'Prof.', 'hjhjhjhjh', 'jkkjkj', 'kjhkjhjk@kjjjk', 'Sri Lankan', 'Sri Lanka', '0009090', 'Superior Room', 'Double', '1', 'Room only', '2018-04-18', '2018-04-21', 'Not Conform', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
