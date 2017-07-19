-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2017 at 06:29 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `selab`
--

-- --------------------------------------------------------

--
-- Table structure for table `Booking`
--

CREATE TABLE IF NOT EXISTS `Booking` (
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `OwnerEmail` varchar(50) NOT NULL,
  `OwnerContact` varchar(50) NOT NULL,
  `VehicleNum` varchar(30) NOT NULL,
  `Source` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Time` time NOT NULL,
`Booking_Id` bigint(20) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `City`
--

CREATE TABLE IF NOT EXISTS `City` (
`Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `City`
--

INSERT INTO `City` (`Id`, `Name`) VALUES
(1, 'Srikakulam'),
(2, 'Guntur'),
(3, 'Vijayawada'),
(4, 'Visakhapatnam'),
(5, 'Rajahmundary'),
(6, 'Anakapalli'),
(7, 'Pathapatnam'),
(8, 'Tekkali'),
(9, 'Palakonda'),
(10, 'Medak'),
(11, 'Nizamabad'),
(12, 'Adilabad'),
(13, 'Basar'),
(14, 'Hyderabad'),
(15, 'Secunderabad'),
(16, 'Narasannapeta'),
(17, 'Karimnagar'),
(18, 'Khammam'),
(19, 'Siddipet'),
(20, 'Kamareddy'),
(21, 'Eluru'),
(22, 'Dwarakanagar'),
(23, 'Rajam'),
(24, 'Nuzivid'),
(25, 'Nalgonda'),
(26, 'Suryapet'),
(27, 'Warangal'),
(28, 'Miryalaguda'),
(29, 'Nellore'),
(30, 'Chittor'),
(31, 'Tirupati'),
(32, 'Kadapa'),
(33, 'Palasa'),
(34, 'Berhampur'),
(35, 'Parlakhemundi'),
(36, 'Sompeta'),
(37, 'Kotabommali'),
(38, 'Seetampeta');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Password` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `VehicleNum` varchar(20) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Source` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `Fare` int(50) DEFAULT NULL,
  `Date` varchar(10) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Password`, `Username`, `FirstName`, `Email`, `ContactNumber`, `Gender`, `VehicleNum`, `Picture`, `Source`, `Destination`, `Fare`, `Date`, `Status`) VALUES
('$2y$10$b0g.o2ABauFqXksNeMuI3ut5PqCMospqZDJ5JcS5dOd', '123@gmail.com', 'Ram', '123@gmail.com', '8989898989', 'on', 'ap15p2345', './upload/', 'Nizamabad', 'Basar', 1500, '08/05/2017', 'Available'),
('$2y$10$qtDsKscRI8CE1fqiYo/eV.BleA3AbEhjWjs/pvTgf32', 'nani@gmail.com', 'Nani', 'nani@gmail.com', '9988776655', 'on', 'AP30D5707', './upload/index.jpeg', 'Srikakulam', 'Tekkali', 150005, '05/02/2017', 'Available'),
('$2y$10$zybcUrWMOUdPwdpja2UIVe8sUowCwzGi7Ea8nZW9dgJ', 'naveen.kammari92@gmail.com', 'NaveenKumar', 'naveen.kammari92@gmail.com', '9441319799', 'on', 'AP30D5701', './upload/DSC_0013.jpg', 'Medak', 'Srikakulam', 1456, '04/27/2017', 'Available'),
('$2y$10$69Gh/Vf.9jNwb8SIvTzVZ.i7G0nLbilzYFLoXCVDiZQ', 'rajuarts@gmail.com', 'Raju', 'rajuarts@gmail.com', '9441319799', 'on', 'AP30D5707', './upload/DSC_0027.jpg', 'Pathapatnam', 'Nizamabad', 120, '04/23/2017', 'Available'),
('$2y$10$ncxykHAMsRT4uTta4sFqgOS0mmd.C9aA06H2BUKEkBe', 'shiva.danthoju@gmail.com', 'Shiva', 'shiva.danthoju@gmail.com', '9876543219', 'on', 'TS20P9876', './upload/DSC_0022.jpg', 'Srikakulam', 'Guntur', 1234, '04/29/2017', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
`sno` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `Contact` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`sno`, `FirstName`, `Email`, `Password`, `Contact`) VALUES
(17, 'Chintuyadav', 'chintuyadav.sr336@gmail.com', '$2y$10$GkSR0f3YM4ueA1mTM3Rq4ujLMzbKFdl1QvKmgqJkxGdRq6ZLU64/O', '9963618687'),
(19, 'parashuram', 'parashuram@gmail.com', '$2y$10$WVJvkSsRrCBYqn1sebDFsuFxR5dlwLAT7PKVEQ7VG0wJqkoy60CWq', '9491201451'),
(20, 'Sai', '123@gmail.com', '$2y$10$MTr2o8hNtkbnUwzTDep1W.mT385KznUUJqoOxq1Y68GPuPrhdYTzK', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Booking`
--
ALTER TABLE `Booking`
 ADD PRIMARY KEY (`Booking_Id`), ADD UNIQUE KEY `Booking_Id` (`Booking_Id`);

--
-- Indexes for table `City`
--
ALTER TABLE `City`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
 ADD PRIMARY KEY (`sno`), ADD UNIQUE KEY `sno` (`sno`), ADD UNIQUE KEY `Email` (`Email`), ADD UNIQUE KEY `Email_2` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Booking`
--
ALTER TABLE `Booking`
MODIFY `Booking_Id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `City`
--
ALTER TABLE `City`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
