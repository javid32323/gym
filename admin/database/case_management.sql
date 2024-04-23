-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 09:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `case_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `password`, `number`) VALUES
(3, 'admin', 'admin@gmail.com', 'admin', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `behalf` varchar(100) NOT NULL,
  `case_no` varchar(100) NOT NULL,
  `case_type` varchar(60) NOT NULL,
  `court_name` varchar(60) NOT NULL,
  `pet_name` varchar(50) NOT NULL,
  `section` varchar(200) NOT NULL,
  `judge_name` varchar(200) NOT NULL,
  `hearing` varchar(200) NOT NULL,
  `case_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `c_name`, `behalf`, `case_no`, `case_type`, `court_name`, `pet_name`, `section`, `judge_name`, `hearing`, `case_date`) VALUES
(24, 'ijaz', '1', '2323', '1', '1', 'dsfljsflkjdsfdsjfl', 'fjsfjflksjflksdjf', 'ljdsfjlkfjslfjsdl', 'dsdfsfdsfs', '2023-05-24'),
(26, 'javid', '2', '34', '1', '1', 'dsfljsflkjdsfdsjfl', 'fjsfjflksjflksdjf', 'ljdsfjlkfjslfjsdl', 'testing', '2023-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `cases_type`
--

CREATE TABLE `cases_type` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cases_type`
--

INSERT INTO `cases_type` (`id`, `type`) VALUES
(1, 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `father` varchar(100) NOT NULL,
  `cnic` varchar(100) NOT NULL,
  `number` varchar(200) NOT NULL,
  `address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `fullname`, `father`, `cnic`, `number`, `address`) VALUES
(2, 'Donald John ', 'muhammad khan', '21708-1121114-7', '64654656456', 'peshawar,  Arbab road'),
(8, 'Javid', 'aaryaa', '21708-1121114-7', '03055173887', ' lahore'),
(10, 'rehan', 'aaryaa', '0234345345', '03055173887', 'ITSAWK PESHAWAR'),
(29, 'Javid', 'aaryaa', '21708-1121114-7', '03055173887', 'wana');

-- --------------------------------------------------------

--
-- Table structure for table `court_type`
--

CREATE TABLE `court_type` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `court_type`
--

INSERT INTO `court_type` (`id`, `type`) VALUES
(1, 'testings');

-- --------------------------------------------------------

--
-- Table structure for table `p_detail`
--

CREATE TABLE `p_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `father` varchar(100) NOT NULL,
  `cnic` varchar(100) NOT NULL,
  `number` varchar(200) NOT NULL,
  `address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_detail`
--

INSERT INTO `p_detail` (`id`, `name`, `father`, `cnic`, `number`, `address`) VALUES
(1, 'penadole', 'muhammad khan', '21708-1121114-7', '03055173887', 'wana'),
(2, 'Javid', 'aaryaa', '21708-1121114-7', '03055173887', 'wana'),
(3, 'Client Name', 'muhammad khan', '21708-1121114-7', 'Test Number', ' lahore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cases_type`
--
ALTER TABLE `cases_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `court_type`
--
ALTER TABLE `court_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_detail`
--
ALTER TABLE `p_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `cases_type`
--
ALTER TABLE `cases_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `court_type`
--
ALTER TABLE `court_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `p_detail`
--
ALTER TABLE `p_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
