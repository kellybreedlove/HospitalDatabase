-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 10, 2016 at 06:23 PM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `procedures`
--

CREATE TABLE `procedures` (
  `pcode` char(9) NOT NULL,
  `pprice` int(11) DEFAULT NULL,
  `pdescr` varchar(200) DEFAULT NULL,
  `pdate` date DEFAULT NULL,
  `ptime` time DEFAULT NULL,
  `pssn` char(9) DEFAULT NULL,
  `essn` char(9) DEFAULT NULL,
  `rid` char(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `procedures`
--

INSERT INTO `procedures` (`pcode`, `pprice`, `pdescr`, `pdate`, `ptime`, `pssn`, `essn`, `rid`) VALUES
('432198765', 10, 'This will help sick people.', '2016-12-10', '20:15:22', '123456789', '789123456', '123456789'),
('567891234', 15, 'This will help people.', '2016-12-09', '12:16:21', '234567891', '789123456', '123456789'),
('678912345', 100000000, 'This will cure a cold', '2016-12-10', '12:16:21', '234567891', '678912345', '876543219'),
('789123456', 1, 'This procedure tests how hard you laugh when your funny bone is hit.', '2016-12-10', '08:59:00', '321987654', '678912345', '876543219');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `procedures`
--
ALTER TABLE `procedures`
  ADD PRIMARY KEY (`pcode`),
  ADD KEY `pssn` (`pssn`),
  ADD KEY `essn` (`essn`),
  ADD KEY `rid` (`rid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `procedures`
--
ALTER TABLE `procedures`
  ADD CONSTRAINT `procedures_ibfk_1` FOREIGN KEY (`pssn`) REFERENCES `patient` (`pssn`),
  ADD CONSTRAINT `procedures_ibfk_2` FOREIGN KEY (`essn`) REFERENCES `employee` (`essn`),
  ADD CONSTRAINT `procedures_ibfk_3` FOREIGN KEY (`rid`) REFERENCES `room` (`rid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
