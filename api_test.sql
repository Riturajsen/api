-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2022 at 05:12 AM
-- Server version: 5.5.48
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sameep_erm`
--

-- --------------------------------------------------------

--
-- Table structure for table `api`
--

CREATE TABLE `api` (
  `ID` int(11) NOT NULL,
  `EmpFname` varchar(50) DEFAULT NULL,
  `EmpLName` varchar(50) NOT NULL,
  `EmpCode` varchar(50) DEFAULT NULL,
  `EmpDept` varchar(120) DEFAULT NULL,
  `EmpDesignation` varchar(120) DEFAULT NULL,
  `EmpContactNo` bigint(10) DEFAULT NULL,
  `EmpGender` enum('Male','Female') DEFAULT NULL,
  `EmpEmail` varchar(200) DEFAULT NULL,
  `EmpPassword` varchar(100) DEFAULT NULL,
  `EmpJoingdate` date DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeedetail`
--

INSERT INTO `employeedetail` (`ID`, `EmpFname`, `EmpLName`, `EmpCode`, `EmpDept`, `EmpDesignation`, `EmpContactNo`, `EmpGender`, `EmpEmail`, `EmpPassword`, `EmpJoingdate`, `PostingDate`) VALUES
(1, 'Rajesh', 'Pandey', '123465', 'IT', 'Software Developer', 1234567890, 'Male', 'abc@gmail.com', 'Test@12345', '2019-01-02', '2019-02-06 06:31:49'),
(2, 'Anuj', 'Kumar', '123465558', 'CS', 'Software Developer', 1234567890, 'Male', 'anuj@gmail.com', '123', '2017-03-23', '2019-02-06 06:41:42'),
(3, 'Ankush', 'Pandey', '123467', 'IT', 'Software Developer', 1234567890, 'Male', 'ankush@gmail.com', '89756', '2010-09-13', '2019-02-06 06:42:15'),
(4, 'Sarita', 'Pandey', '12346012', 'IT', 'Software Developer', 1234567890, '', 'abhi@gmail.com', '156975', NULL, '2019-02-06 06:42:47'),
(4, 'Rohan', 'Pandey', '123460212', 'It', 'Software Developer', 1234567890, '', 'rohan@gmail.com', '156575', NULL, '2019-02-06 06:42:47'),
(6, 'Manu', 'Ramesh', '369874', NULL, NULL, NULL, NULL, 'manu@gmail.com', '987563', NULL, '2019-02-06 12:00:50'),
(7, 'Ragunath', 'Shahye', '63', NULL, NULL, NULL, NULL, 'shahye@gmail.com', '99999', NULL, '2019-02-08 07:22:40'),
(8, 'raju', '', '', NULL, NULL, NULL, NULL, '', '', NULL, '2019-02-11 05:08:40'),
(9, 'Garuv', 'Bhatia', '89745', NULL, NULL, NULL, NULL, 'jk@gmail.com', '12', NULL, '2019-02-11 05:12:28'),
(10, 'Khusi', 'Dev', '1234', NULL, NULL, NULL, NULL, 'hjk@gmail.com', '1990', NULL, '2019-02-11 05:18:08'),
(11, 'SARITA', 'pANDEY', '789', NULL, NULL, NULL, NULL, 'PANDEY@GMAIL.COM', '1111', NULL, '2019-02-11 08:50:55'),
(12, 'Dinesh', 'Karthik', '56989', NULL, NULL, NULL, NULL, 'dinesh@gmail.com', '8989', NULL, '2019-02-11 12:30:50'),
(13, 'Test', 'User', '2131231', 'IT', 'Software Developer', 1234567890, 'Male', 'testuser@gmail.com', 'Test@123', '2018-10-09', '2019-02-11 16:21:58'),
(14, 'Anuj', 'Kumar', '1023647885', 'IT', 'Software Developer', 1234567890, 'Male', 'aktest@gmail.com', 'Test@123', '2019-01-01', '2020-02-19 16:58:51'),
(15, 'Hello ', 'trial', '121212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-08 08:52:02'),
(17, 'Hello ', 'trial', '12124442', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-08 08:52:17'),
(18, 'Rituraj', 'Singh', '32323232', NULL, NULL, NULL, NULL, 'pulaksingh1998@gmail.com', 'test@123', NULL, '2021-02-08 18:01:21'),
(19, 'Simar ', 'Singh', '00022', 'NA', 'Marketing Intern', 33232323232, 'Male', 'simar@gmail.com', 'Test@123', '0000-00-00', '2021-02-22 13:51:41'),
(30, 'Imran', 'Ansari', '131313', 'CTO', 'Chief Techno Official', 123456789, 'Male', 'test@123.com', '123456789', '2022-03-01', '2022-03-11 09:06:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeedetail`
--
ALTER TABLE `employeedetail`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EmpCode` (`EmpCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeedetail`
--
ALTER TABLE `employeedetail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
