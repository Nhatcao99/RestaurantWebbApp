-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 11, 2019 at 05:06 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `Disk`
--

CREATE TABLE `Disk` (
  `DiskID` int(11) NOT NULL,
  `DiskName` varchar(20) NOT NULL,
  `Ingredient Involved` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Cost/Disk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Earn and profit`
--

CREATE TABLE `Earn and profit` (
  `Earn` int(11) NOT NULL,
  `Profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE `Employees` (
  `EmID` varchar(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Speciality` varchar(20) NOT NULL,
  `Shift` varchar(20) NOT NULL,
  `Contact Number` varchar(11) NOT NULL,
  `Salary` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Employees`
--

INSERT INTO `Employees` (`EmID`, `Name`, `Gender`, `Speciality`, `Shift`, `Contact Number`, `Salary`) VALUES
('1', 'Dang Manh Dung', 'Male', 'Chef', 'Morning', '98123456', '30000000'),
('101', 'Dinh Thuy Duong', 'Female', 'Chef', 'Evening', '093124567', '32000000'),
('102', 'Tran Thi Hai Yen', 'Female', 'Cook Assitant', 'Evening', '093145667', '17000000'),
('103', 'Hoang Hai Lam', 'Male', 'Cook Assistant', 'Evening', '091222444', '17000000'),
('104', 'Le Tam', 'Female', 'Bartender', 'Evening', '093124567', '1200000'),
('105', 'Le Kien', 'Male', 'Bakery', 'Evening', '093124321', '19000000'),
('106', 'Nguyen Nga', 'Male', 'Steward', 'Evening', '091222411', '1700000'),
('107', 'Nguyen Van Kha', 'Male', 'Steward', 'Evening', '091232323', '1700000'),
('108', 'Nguyen Thap Cam', 'Female', 'Table Runner', 'Evening', '091222444', '2500000'),
('109', 'Nguyen Ngan Ngu', 'Male', 'Table Runner', 'Evening', '091222444', '2500000'),
('123', 'Nhatcao', 'Male', 'Chef', 'Morning', '0914513', '1534513'),
('2', 'Nguyen Thi Kim Dung', 'Female', 'Cook Assistant', 'Morning', '98123789', '15000000'),
('3', 'Hoang Hai Nam', 'Male', 'Cook Assistant', 'Morning', '98777888', '15000000'),
('4', 'Hoang The Thien', 'Male', 'Bartender', 'Morning', '98766888', '10000000'),
('5', 'Cao Ly Nhi', 'Female', 'Bakery', 'Morning', '98777888', '17000000'),
('6', 'Nguyen Van An', 'Male', 'Steward', 'Morning', '98777998', '1500000'),
('7', 'Nguyen Trung Ngoc', 'Male', 'Steward', 'Morning', '98776988', '1500000'),
('8', 'Tran Trung Thuc', 'Female', 'Table runner', 'Morning', '98777888', '2000000'),
('9', 'Nguyen Hai Vuong', 'Male', 'Table runner', 'Morning', '98777888', '2000000');

-- --------------------------------------------------------

--
-- Table structure for table `Ingredient`
--

CREATE TABLE `Ingredient` (
  `Quantity` int(11) NOT NULL,
  `Measurement` varchar(20) NOT NULL,
  `Cost/Quantity` int(11) NOT NULL,
  `IngreID` int(11) NOT NULL,
  `Ingredient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`username`, `password`) VALUES
('caominhnhat', 'nhatcao123'),
('macdinhminh', 'macmac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Disk`
--
ALTER TABLE `Disk`
  ADD PRIMARY KEY (`DiskID`);

--
-- Indexes for table `Employees`
--
ALTER TABLE `Employees`
  ADD PRIMARY KEY (`EmID`);

--
-- Indexes for table `Ingredient`
--
ALTER TABLE `Ingredient`
  ADD PRIMARY KEY (`IngreID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
