-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 08:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ispmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `fans`
--

CREATE TABLE `fans` (
  `username` varchar(20) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `nationality` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fans`
--

INSERT INTO `fans` (`username`, `fullName`, `email`, `password`, `gender`, `nationality`, `dob`, `photo`) VALUES
('josuasuherman', 'Josua Suherman', 'josua.suherman@gmail.com', 'sl67/od8o8gow', 'male', 'Singaporean', '2007-07-07', 'comp.jpg'),
('natasyakinata', 'Natasya Kinata', 'natasya.kinata@binus.ac.id', 'slZkREvd65cEU', 'female', 'Indonesian', '2002-03-01', '123.png');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `meetingID` int(10) NOT NULL,
  `meetingDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `venue` varchar(50) NOT NULL,
  `contactPerson` varchar(100) NOT NULL,
  `contactNumber` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`meetingID`, `meetingDate`, `startTime`, `endTime`, `venue`, `contactPerson`, `contactNumber`) VALUES
(2, '2001-01-01', '01:23:00', '04:56:00', 'Taman Indonesia', 'Raditya Dika', '081281139755'),
(3, '2003-03-03', '10:11:00', '12:13:00', 'Auditorium Singapore', 'Cong Fan', '081283347652');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fans`
--
ALTER TABLE `fans`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`meetingID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `meetingID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
