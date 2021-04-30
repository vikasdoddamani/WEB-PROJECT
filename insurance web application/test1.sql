-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 07:35 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `Agent_code` varchar(10) NOT NULL,
  `Agent_name` varchar(150) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(80) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Contact_Num` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`Agent_code`, `Agent_name`, `DOB`, `Address`, `Pincode`, `Branch`, `Contact_Num`) VALUES
('123abc123', 'qwerty', '1969-02-26', 'Dharwad', 580001, 'Dharwad', 9123431212),
('124gfl548', 'gfetv', '2016-04-05', 'hombal', 582204, 'hgfcye35925295', 6259385212),
('234abc231', 'Sanjay', '1966-02-21', '21/694, Satyam Apartment, Refinery Road, Gorwa', 390016, 'Vadodara', 7016636683);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_Num` bigint(10) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Middle_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Gender` char(1) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Contact_Number` bigint(10) NOT NULL,
  `Mother_Name` varchar(150) NOT NULL,
  `Father_Name` varchar(150) NOT NULL,
  `Nominee` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_Num`, `First_Name`, `Middle_Name`, `Last_Name`, `Gender`, `DOB`, `Address`, `Pincode`, `Contact_Number`, `Mother_Name`, `Father_Name`, `Nominee`) VALUES
(10002, 'Devam', 'Sanjay', 'Sheth', 'M', '2018-10-02', '21/694, Satyam Apartment, Refinery Road, Gorwa', 390016, 7016636683, 'Harsha Sheth', 'Sanjay Sheth', ''),
(10004, 'dsz', 'gjgjh', 'jkjg', 'M', '2019-11-04', 'kjhkj', 58554, 1236547891, 'hgfhgf', 'gjgh', 'nkjbk'),
(10005, 'dsz', 'gjgjh', 'jkjg', 'M', '2019-11-04', 'kjhkj', 58554, 1236547891, 'hgfhgf', 'gjgh', 'nkjbk'),
(10006, 'fssd', 'ghdhf', 'hgrhh', 'M', '2019-11-04', 'hhfhhh', 546464, 5746756776, 'gegedgr', 'rhrhrrh', 'rhhyrht');

-- --------------------------------------------------------

--
-- Table structure for table `paid_premium`
--

CREATE TABLE `paid_premium` (
  `Receipt_Num` int(23) NOT NULL,
  `Receipt_Date` date NOT NULL,
  `Policy_Num` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paid_premium`
--

INSERT INTO `paid_premium` (`Receipt_Num`, `Receipt_Date`, `Policy_Num`) VALUES
(325256815, '2018-10-31', 123564789),
(325284137, '2018-11-01', 284049583),
(325289940, '2018-11-01', 123564789),
(1573672655, '2019-11-13', 3),
(1573713072, '2019-11-14', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `policy_data`
--

CREATE TABLE `policy_data` (
  `Policy_Num` int(15) NOT NULL,
  `Customer_Num` bigint(10) NOT NULL,
  `Agent_code` varchar(10) NOT NULL,
  `DOC` date NOT NULL,
  `Product` varchar(50) NOT NULL,
  `Sum_Assured` int(10) NOT NULL,
  `Pay_Period` int(2) NOT NULL,
  `Ins_Period` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy_data`
--

INSERT INTO `policy_data` (`Policy_Num`, `Customer_Num`, `Agent_code`, `DOC`, `Product`, `Sum_Assured`, `Pay_Period`, `Ins_Period`) VALUES
(1, 10002, '234abc231', '2019-11-09', 'qwe', 15000, 3, 15),
(3, 10002, '234abc231', '2015-07-12', 'home', 12232, 11, 1),
(5, 10002, '234abc231', '2008-10-27', 'ioio', 5555, 56, 99),
(6, 10002, '234abc231', '2008-10-27', 'ioio', 5555, 56, 99),
(112233441, 10002, '234abc231', '2019-10-28', 'ssaasas', 12345, 21, 22),
(123456789, 10002, '123abc123', '1889-12-12', 'gnggh', 2333333, 2, 4),
(123564789, 10002, '234abc231', '2018-10-02', 'Jeevan Labh', 35000, 5, 10),
(284049583, 10002, '234abc231', '2007-06-20', 'Jeevan Lakshya', 450000, 35, 80),
(999888745, 10002, '123abc123', '2010-04-08', 'Home', 123456, 13, 13);

-- --------------------------------------------------------

--
-- Table structure for table `premium`
--

CREATE TABLE `premium` (
  `Policy_Num` int(15) NOT NULL,
  `Premium` int(10) NOT NULL,
  `Mode` varchar(3) NOT NULL,
  `Last_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `premium`
--

INSERT INTO `premium` (`Policy_Num`, `Premium`, `Mode`, `Last_date`) VALUES
(3, 1019, 'MLY', '2019-12-13'),
(5, 5, 'MLY', '2008-11-27'),
(6, 5, 'MLY', '2008-11-27'),
(112233441, 47, 'MLY', '2019-11-28'),
(123456789, 48611, 'MLY', '2020-11-14'),
(123564789, 3500, 'YLY', '2018-12-01'),
(284049583, 469, 'MLY', '2018-12-01'),
(999888745, 9497, 'YLY', '2011-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `unpaid_premium`
--

CREATE TABLE `unpaid_premium` (
  `Policy_Num` int(15) NOT NULL,
  `Fine` int(10) NOT NULL,
  `Lateness` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unpaid_premium`
--

INSERT INTO `unpaid_premium` (`Policy_Num`, `Fine`, `Lateness`) VALUES
(3, 0, 0),
(5, 0, 0),
(6, 0, 0),
(112233441, 0, 0),
(123456789, 0, 0),
(123564789, 0, 0),
(284049583, 0, 0),
(999888745, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`Agent_code`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_Num`);

--
-- Indexes for table `paid_premium`
--
ALTER TABLE `paid_premium`
  ADD PRIMARY KEY (`Receipt_Num`),
  ADD KEY `paid_premium_ibfk_1` (`Policy_Num`);

--
-- Indexes for table `policy_data`
--
ALTER TABLE `policy_data`
  ADD PRIMARY KEY (`Policy_Num`),
  ADD KEY `Agent_code` (`Agent_code`),
  ADD KEY `Customer_Num` (`Customer_Num`);

--
-- Indexes for table `premium`
--
ALTER TABLE `premium`
  ADD PRIMARY KEY (`Policy_Num`);

--
-- Indexes for table `unpaid_premium`
--
ALTER TABLE `unpaid_premium`
  ADD PRIMARY KEY (`Policy_Num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_Num` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10007;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paid_premium`
--
ALTER TABLE `paid_premium`
  ADD CONSTRAINT `paid_premium_ibfk_1` FOREIGN KEY (`Policy_Num`) REFERENCES `premium` (`Policy_Num`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `policy_data`
--
ALTER TABLE `policy_data`
  ADD CONSTRAINT `Agent_code` FOREIGN KEY (`Agent_code`) REFERENCES `agent` (`Agent_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Customer_Num` FOREIGN KEY (`Customer_Num`) REFERENCES `customer` (`Customer_Num`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `premium`
--
ALTER TABLE `premium`
  ADD CONSTRAINT `premium_ibfk_1` FOREIGN KEY (`Policy_Num`) REFERENCES `policy_data` (`Policy_Num`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `unpaid_premium`
--
ALTER TABLE `unpaid_premium`
  ADD CONSTRAINT `Policy` FOREIGN KEY (`Policy_Num`) REFERENCES `premium` (`Policy_Num`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
