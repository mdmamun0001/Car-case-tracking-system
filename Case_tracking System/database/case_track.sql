-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 06:13 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `case_track`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `Car_Number` varchar(40) NOT NULL,
  `Car_Name` varchar(40) NOT NULL,
  `Car_Model` varchar(40) NOT NULL,
  `Purchasing_Date` date NOT NULL,
  `Owner_NID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`Car_Number`, `Car_Name`, `Car_Model`, `Purchasing_Date`, `Owner_NID`) VALUES
('12345', 'hero', 'hero4', '2018-08-08', '123'),
('12346', 'xyz', 'abc', '2019-02-11', '124'),
('12347', 'toyota', 'probox', '2019-02-11', '123');

-- --------------------------------------------------------

--
-- Table structure for table `case_details`
--

CREATE TABLE `case_details` (
  `Case_ID` varchar(40) NOT NULL,
  `Case_Type` varchar(40) NOT NULL,
  `Case_Date` date NOT NULL,
  `Deadline` date NOT NULL,
  `Amount` double NOT NULL,
  `Payment` varchar(40) NOT NULL,
  `Car_Number` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_details`
--

INSERT INTO `case_details` (`Case_ID`, `Case_Type`, `Case_Date`, `Deadline`, `Amount`, `Payment`, `Car_Number`) VALUES
(' 1111111111111', ' 11111111111111', '2019-04-02', '2019-04-04', 1000, ' No ', '12345'),
('1000001', '1000001', '2019-04-08', '2019-04-18', 1400, 'No', '12345'),
('1000002', '1000002', '2019-04-08', '2019-04-18', 200, 'No', '12346'),
('101010', '101010', '2019-04-11', '2019-04-26', 1000, 'No', '12345'),
('1200001', '120001', '2019-04-08', '2019-04-10', 1200, 'No', '12346'),
('1200002', '120002', '2019-04-08', '2019-04-10', 1200, 'No', '12346'),
('12012', '12012', '2019-04-11', '2019-04-18', 1000, 'No', '12346'),
('120120', '120120', '2019-04-12', '2019-04-26', 200, 'No', '12345'),
('5001', '5001', '2019-04-02', '2019-04-04', 1400, 'No', '12346'),
('600', '600', '2019-04-09', '2019-04-18', 1000, 'Yes', '12347'),
('abc', 'abc', '2019-04-12', '2019-04-30', 200, 'No', '12347');

-- --------------------------------------------------------

--
-- Table structure for table `case_type`
--

CREATE TABLE `case_type` (
  `Case_Type_ID` varchar(40) NOT NULL,
  `Type1` varchar(40) NOT NULL,
  `Type2` varchar(40) NOT NULL,
  `Type3` varchar(40) NOT NULL,
  `Type4` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_type`
--

INSERT INTO `case_type` (`Case_Type_ID`, `Type1`, `Type2`, `Type3`, `Type4`) VALUES
(' 11111111111111', '11', '01', ' 13 ', ' 14 '),
('1000001', '2', '22', '222', ''),
('1000002', '09', '12', '222', ''),
('101010', '2', '23', '', ''),
('120001', '12', '11', '', ''),
('120002', '12', '11', '', ''),
('12012', '2', '12', '04', '14'),
('120120', '12', '1', '4', '14'),
('5001', '09', '01', '03', '02'),
('600', '11', '23', '', ''),
('abc', '2', '22', '4', '');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Location_ID` varchar(40) NOT NULL,
  `Country_Name` varchar(40) NOT NULL,
  `Division` varchar(40) NOT NULL,
  `Postal_Code` varchar(40) NOT NULL,
  `Road_Number` varchar(40) NOT NULL,
  `House_Number` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Location_ID`, `Country_Name`, `Division`, `Postal_Code`, `Road_Number`, `House_Number`) VALUES
('1', 'bangladesh', 'dhaka', '1200', '12/A', '33'),
('2', 'bangladesh', 'khulna', '1100', '13/E', '32');

-- --------------------------------------------------------

--
-- Table structure for table `owner_info`
--

CREATE TABLE `owner_info` (
  `NID` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Birth_day` date NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone_Number` varchar(11) NOT NULL,
  `Location_ID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_info`
--

INSERT INTO `owner_info` (`NID`, `Name`, `Birth_day`, `Email`, `Phone_Number`, `Location_ID`) VALUES
('123', 'Mamun', '2017-04-07', 'mdmamun3940@gmail.com', '1778770533', '1'),
('124', 'apel', '2017-04-07', 'apel23@gmail.com', '01910311605', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(40) NOT NULL,
  `ID` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Type` int(1) NOT NULL DEFAULT '0',
  `Car_Number` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `ID`, `Password`, `Type`, `Car_Number`) VALUES
('abc', 'abc@gmaail.com', 'abc@gmaail.com', 0, '12347'),
('axy', 'abc@gmail.com', '1234', 0, '12347'),
('apel', 'apel@gmail.com', '120013', 1, ''),
('bulbul', 'bulbul@gmail.com', '120017', 0, '12346'),
('himel', 'himel@gmail.com', '120014', 8, ''),
('Imran', 'Imran@gmail.com', '120020', 1, ''),
('Md. Mamun Hassan', 'mamun@gmai.com', '120012', 0, '12347'),
('Md. Mamun Hassan', 'md@gmail.com', 'md@gmail.com', 0, '12347'),
('amchgfh', 'mdhgsjh@gmail.com', 'abc123', 0, '12345'),
('Rafsan', 'rafsan@gmail.com', '120015', 1, ''),
('zisan', 'zisan@gmail.com', 'zisan@gmail.com', 0, '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_details`
--
ALTER TABLE `car_details`
  ADD PRIMARY KEY (`Car_Number`),
  ADD KEY `fowner_NID` (`Owner_NID`);

--
-- Indexes for table `case_details`
--
ALTER TABLE `case_details`
  ADD PRIMARY KEY (`Case_ID`),
  ADD KEY `Car_Number` (`Car_Number`),
  ADD KEY `Case_Type` (`Case_Type`);

--
-- Indexes for table `case_type`
--
ALTER TABLE `case_type`
  ADD PRIMARY KEY (`Case_Type_ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Location_ID`);

--
-- Indexes for table `owner_info`
--
ALTER TABLE `owner_info`
  ADD PRIMARY KEY (`NID`),
  ADD KEY `flocation` (`Location_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_details`
--
ALTER TABLE `car_details`
  ADD CONSTRAINT `fowner_NID` FOREIGN KEY (`Owner_NID`) REFERENCES `owner_info` (`NID`);

--
-- Constraints for table `case_details`
--
ALTER TABLE `case_details`
  ADD CONSTRAINT `case_details_ibfk_1` FOREIGN KEY (`Car_Number`) REFERENCES `car_details` (`Car_Number`),
  ADD CONSTRAINT `case_details_ibfk_2` FOREIGN KEY (`Case_Type`) REFERENCES `case_type` (`Case_Type_ID`);

--
-- Constraints for table `owner_info`
--
ALTER TABLE `owner_info`
  ADD CONSTRAINT `flocation` FOREIGN KEY (`Location_ID`) REFERENCES `location` (`Location_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
