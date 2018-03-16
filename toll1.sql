-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2018 at 05:09 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toll1`
--

-- --------------------------------------------------------

--
-- Table structure for table `central`
--

CREATE TABLE `central` (
  `email` varchar(25) NOT NULL,
  `rfid_no` varchar(20) NOT NULL,
  `vehicle_no` varchar(20) NOT NULL,
  `vehicle_category` varchar(20) NOT NULL,
  `balance` int(15) NOT NULL,
  `stolen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `central`
--

INSERT INTO `central` (`email`, `rfid_no`, `vehicle_no`, `vehicle_category`, `balance`, `stolen`) VALUES
('ds49574@gmail.com', 'M25456545', 'MH-05-1234', 'Light Vehicle', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `vehicle_no` varchar(20) NOT NULL,
  `rfid_no` varchar(20) NOT NULL,
  `branch_name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `passport` varchar(100) NOT NULL,
  `identity` varchar(100) NOT NULL,
  `vehicle` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`vehicle_no`, `rfid_no`, `branch_name`, `address`, `passport`, `identity`, `vehicle`, `description`) VALUES
('MHo080', 'D56565', 'Mumbai', '12 s park', '../images/photo/31-01-2018-1517414777-16096196', '../images/identity/31-01-2018-1517414777-67251846', '../images/vehicle/31-01-2018-1517414777-65072466', '<p>Description that covers your vehicle information,area from where it is lost,and any other details which is relevant to this complaint....</p>');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `user` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`user`, `password`) VALUES
('dsingh', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `phone` bigint(15) NOT NULL,
  `DOB` date NOT NULL,
  `vehicle` varchar(20) NOT NULL,
  `balance` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `name`, `phone`, `DOB`, `vehicle`, `balance`) VALUES
('ds49574@gmail.com', '12345678', 'Dharmendra Subhash Singh', 9766052114, '1995-09-30', 'MH-05-1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `number` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `rfid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`number`, `type`, `category`, `company`, `model`, `color`, `image`, `rfid`) VALUES
('MH-05-1234', 'Car', 'Light Vehicle', 'Suzuki', 'BMW', 'black', '../images/31-01-2018-1517409740-94962373', 'M25456545');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `central`
--
ALTER TABLE `central`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `vehicle` (`vehicle`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`number`),
  ADD UNIQUE KEY `rfid` (`rfid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
