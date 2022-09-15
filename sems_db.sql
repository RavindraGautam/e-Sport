-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 02:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sems_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `logindb`
--

CREATE TABLE `logindb` (
  `sportid` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logindb`
--

INSERT INTO `logindb` (`sportid`, `username`, `password`) VALUES
(1, 'ravindra', 'kumar');

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `sportid` int(10) NOT NULL,
  `sportname` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`sportid`, `sportname`, `date`) VALUES
(2, 'cricket', '0000-00-00'),
(3, 'Vollyball', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `stu_register`
--

CREATE TABLE `stu_register` (
  `studentid` int(10) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobileno` int(20) NOT NULL,
  `dob` varchar(20) CHARACTER SET armscii8 NOT NULL,
  `branch` char(20) NOT NULL,
  `year` year(4) NOT NULL,
  `gender` char(20) NOT NULL,
  `choosegame` varchar(20) NOT NULL,
  `address` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu_register`
--

INSERT INTO `stu_register` (`studentid`, `uname`, `email`, `mobileno`, `dob`, `branch`, `year`, `gender`, `choosegame`, `address`) VALUES
(1, 'ravi', '', 2147483647, '0000-00-00', 'COMPUTER SCIENCE ENG', 0000, 'Male', '			Cricket, Football', '218\r\nVILLAGE JALALPUR\r\nPO'),
(2, 'shivani', '', 2147483647, '0000-00-00', 'COMPUTER SCIENCE ENG', 0000, 'Female', '			Table tannies', '		chaindaili		');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logindb`
--
ALTER TABLE `logindb`
  ADD PRIMARY KEY (`sportid`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`sportid`);

--
-- Indexes for table `stu_register`
--
ALTER TABLE `stu_register`
  ADD PRIMARY KEY (`studentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logindb`
--
ALTER TABLE `logindb`
  MODIFY `sportid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `sportid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stu_register`
--
ALTER TABLE `stu_register`
  MODIFY `studentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
