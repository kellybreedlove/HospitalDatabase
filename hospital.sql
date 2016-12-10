-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 10, 2016 at 06:28 PM
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
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `aid` char(3) NOT NULL,
  `adate` date DEFAULT NULL,
  `atime` time DEFAULT NULL,
  `pssn` char(9) DEFAULT NULL,
  `essn` char(9) DEFAULT NULL,
  `rid` char(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `essn` char(9) NOT NULL,
  `fname` varchar(15) DEFAULT NULL,
  `minit` char(1) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `contact_num` int(11) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `hid` char(9) DEFAULT NULL,
  `nurse_flg` char(1) DEFAULT NULL,
  `doctor_flg` char(1) DEFAULT NULL,
  `liscence_no` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`essn`, `fname`, `minit`, `lname`, `address`, `sex`, `age`, `contact_num`, `salary`, `hid`, `nurse_flg`, `doctor_flg`, `liscence_no`) VALUES
('678912345', 'Jane', 'T', 'Lastington', 'The Moon', 'F', 55, 4567891, 100000000, '987654321', 'N', 'Y', 98765),
('789123456', 'Bill', 'A', 'Last', '17 Temp Lane', 'M', 45, 1234567, 120000, '123456789', 'N', 'Y', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
CREATE TABLE `hospital` (
  `hid` char(9) NOT NULL,
  `hname` varchar(15) DEFAULT NULL,
  `haddress` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hid`, `hname`, `haddress`) VALUES
('123456789', 'Test', '15 test lane Wheaton, IL'),
('987654321', 'Full Recovery', 'The Moon');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

DROP TABLE IF EXISTS `medicine`;
CREATE TABLE `medicine` (
  `mcode` char(9) NOT NULL,
  `dose` varchar(15) DEFAULT NULL,
  `mprice` int(11) DEFAULT NULL,
  `mdescr` varchar(200) DEFAULT NULL,
  `essn` char(9) DEFAULT NULL,
  `pssn` char(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `pssn` char(9) NOT NULL,
  `fname` varchar(15) DEFAULT NULL,
  `minit` char(1) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `date_admit` date DEFAULT NULL,
  `date_disch` date DEFAULT NULL,
  `contactNum` char(10) DEFAULT NULL,
  `info` varchar(200) DEFAULT NULL,
  `rid` char(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pssn`, `fname`, `minit`, `lname`, `address`, `sex`, `age`, `date_admit`, `date_disch`, `contactNum`, `info`, `rid`) VALUES
('123456789', 'John', 'M', 'Smith', '12 fake st Wheaton, IL', 'M', 25, '2016-01-01', '2016-02-01', '5551234567', 'This patient is sick.', '123456789'),
('234567891', 'Sharon', 'P', 'Smith', 'The Moon', 'F', 73, '2016-12-02', '2016-12-12', '2345678', 'This patient has the common cold.', '876543219'),
('321987654', 'Alex', 'J', 'Jones', '57 Madeup Lane, Wheaton, IL60189', 'F', 27, '2016-11-18', '2016-11-26', '3456789', 'This patient just likes to stay in hospitals and get random procedures.', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `procedures`
--

DROP TABLE IF EXISTS `procedures`;
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

-- --------------------------------------------------------

--
-- Table structure for table `procedure_nurse`
--

DROP TABLE IF EXISTS `procedure_nurse`;
CREATE TABLE `procedure_nurse` (
  `pcode` char(9) NOT NULL,
  `essn` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE `room` (
  `rid` char(9) NOT NULL,
  `rdescription` varchar(200) DEFAULT NULL,
  `hid` char(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rid`, `rdescription`, `hid`) VALUES
('123456789', 'This is a room for sick people', '123456789'),
('876543219', 'This room has magical healing powers.', '987654321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `pssn` (`pssn`),
  ADD KEY `essn` (`essn`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`essn`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`mcode`),
  ADD KEY `essn` (`essn`),
  ADD KEY `pssn` (`pssn`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pssn`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `procedures`
--
ALTER TABLE `procedures`
  ADD PRIMARY KEY (`pcode`),
  ADD KEY `pssn` (`pssn`),
  ADD KEY `essn` (`essn`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `procedure_nurse`
--
ALTER TABLE `procedure_nurse`
  ADD KEY `pcode` (`pcode`),
  ADD KEY `essn` (`essn`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `hid` (`hid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`pssn`) REFERENCES `patient` (`pssn`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`essn`) REFERENCES `employee` (`essn`),
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`rid`) REFERENCES `room` (`rid`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`hid`) REFERENCES `hospital` (`hid`);

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`essn`) REFERENCES `employee` (`essn`),
  ADD CONSTRAINT `medicine_ibfk_2` FOREIGN KEY (`pssn`) REFERENCES `patient` (`pssn`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `room` (`rid`);

--
-- Constraints for table `procedures`
--
ALTER TABLE `procedures`
  ADD CONSTRAINT `procedures_ibfk_1` FOREIGN KEY (`pssn`) REFERENCES `patient` (`pssn`),
  ADD CONSTRAINT `procedures_ibfk_2` FOREIGN KEY (`essn`) REFERENCES `employee` (`essn`),
  ADD CONSTRAINT `procedures_ibfk_3` FOREIGN KEY (`rid`) REFERENCES `room` (`rid`);

--
-- Constraints for table `procedure_nurse`
--
ALTER TABLE `procedure_nurse`
  ADD CONSTRAINT `procedure_nurse_ibfk_1` FOREIGN KEY (`pcode`) REFERENCES `procedures` (`pcode`),
  ADD CONSTRAINT `procedure_nurse_ibfk_2` FOREIGN KEY (`essn`) REFERENCES `employee` (`essn`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`hid`) REFERENCES `hospital` (`hid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
