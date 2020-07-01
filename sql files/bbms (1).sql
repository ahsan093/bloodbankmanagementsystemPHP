-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 01:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbms`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getbloodgroupsdata` (IN `bgroup` VARCHAR(3))  NO SQL
begin
select * from patient WHERE pbloodgroup=bgroup;
select * from donor WHERE dbloodgroup=bgroup;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getemployeebyid` (IN `ida` BIGINT(3))  NO SQL
BEGIN
select *from employee where id=ida;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getpersondata` (IN `name` VARCHAR(35))  NO SQL
BEGIN
select * from patient where pname=name;
select * from donor where dname=name;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `bloodbankID` int(4) NOT NULL,
  `bbname` varchar(40) DEFAULT NULL,
  `bbaddress` varchar(40) DEFAULT NULL,
  `bbdname` varchar(30) DEFAULT NULL,
  `bbcontact` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`bloodbankID`, `bbname`, `bbaddress`, `bbdname`, `bbcontact`) VALUES
(89, 'AL SHIFA-BLOODBANK', 'JOHAR TOWN LHR', 'JUNAID KHAN', 4235677),
(54, 'al ihsan', 'johartown l block', 'ahsan', 90077866),
(8, 'islam blood bank', 'johartown l block', 'sami', 90077866),
(9, 'humanity blood bank', 'madina colony  lahore', 'usama', 657589),
(32, 'ammar blood bank', 'shafiqabad', 'ammar', 546757);

-- --------------------------------------------------------

--
-- Table structure for table `bloodorder`
--

CREATE TABLE `bloodorder` (
  `id` bigint(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(35) NOT NULL,
  `description` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `dname` varchar(30) DEFAULT NULL,
  `did` int(11) NOT NULL,
  `dbloodgroup` varchar(3) DEFAULT NULL,
  `dmedreport` varchar(50) DEFAULT NULL,
  `daddress` varchar(30) DEFAULT NULL,
  `dcontact` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`dname`, `did`, `dbloodgroup`, `dmedreport`, `daddress`, `dcontact`) VALUES
('OSAMA MUMTAZ KHAN', 66, 'b+', 'clear', 'lahore pakistan', 859944),
('babar', 99, 'B_', 'Clear', 'choga python', 785868);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `name` varchar(20) NOT NULL,
  `id` bigint(3) NOT NULL,
  `address` varchar(25) NOT NULL,
  `contact` int(11) NOT NULL,
  `designation` varchar(16) NOT NULL,
  `salary` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`name`, `id`, `address`, `contact`, `designation`, `salary`) VALUES
('sohail khan', 78, 'bwn', 5755895, 'developer', 4353);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--
-- Error reading structure for table bbms.hospital: #1932 - Table 'bbms.hospital' doesn't exist in engine
-- Error reading data for table bbms.hospital: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `bbms`.`hospital`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `hspital`
--

CREATE TABLE `hspital` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(55) NOT NULL,
  `contact` int(11) NOT NULL,
  `bottles` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hspital`
--

INSERT INTO `hspital` (`id`, `name`, `address`, `contact`, `bottles`) VALUES
(54, 'ali memorial', 'bahawali chowk', 78999, 43);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(12) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('ahsan197', '24726');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pname` varchar(30) DEFAULT NULL,
  `pid` int(11) NOT NULL,
  `pbloodgroup` varchar(3) DEFAULT NULL,
  `disease` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pname`, `pid`, `pbloodgroup`, `disease`) VALUES
('Ahsan Hassan', 98, 'B+', 'none'),
('ahsan', 12, 'B ', 'Heart patient'),
('Ahsan', 44, 'B ', 'NON'),
('ahsan', 33, 'k-', 'none'),
('Umair sunn', 554, 'C-', 'Lung'),
('tariq raza', 32, 'B-', 'cardiovascular disease'),
('Mirha Shehzad', 454, 'B+', 'None'),
('mohammad amir', 20, 'x+', 'joint dislocation'),
('bouks khan', 76, 'AB+', 'none');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`bloodbankID`);

--
-- Indexes for table `bloodorder`
--
ALTER TABLE `bloodorder`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hspital`
--
ALTER TABLE `hspital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
