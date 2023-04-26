-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2021 at 08:03 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xyz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminname` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminname`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(5) NOT NULL,
  `topic_name` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `course_name` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `examdetails`
--

CREATE TABLE `examdetails` (
  `ExamID` int(3) NOT NULL,
  `ExamName` int(50) NOT NULL,
  `Q1` text NOT NULL,
  `Q2` text NOT NULL,
  `Q3` text NOT NULL,
  `Q4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examdetails`
--

INSERT INTO `examdetails` (`ExamID`, `ExamName`, `Q1`, `Q2`, `Q3`, `Q4`) VALUES
(10, 111111, '111111111', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `facultytable`
--

CREATE TABLE `facultytable` (
  `FID` int(5) NOT NULL,
  `FName` varchar(25) NOT NULL,
  `FaName` varchar(25) NOT NULL,
  `Addrs` text NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `JDate` date NOT NULL,
  `City` varchar(15) NOT NULL,
  `Pass` varchar(15) NOT NULL,
  `PhNo` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facultytable`
--

INSERT INTO `facultytable` (`FID`, `FName`, `FaName`, `Addrs`, `Gender`, `JDate`, `City`, `Pass`, `PhNo`) VALUES
(1, 'pa', 'aa', 'aaaaaa', 'Female', '2021-07-06', 'NADIA', '123', 123334),
(6, 'pratap bhattacharjee', 'gouranga bhattacharjee', 'NADIA', 'male', '2021-07-16', 'NADIA', '1231', 123411111),
(9, 'ramaaa', 'shyam', 'santipur', 'Female', '2021-08-25', 'ranaghat', '1234', 1234567890),
(10, 'karina', 'ranbir', 'mumbai', 'Female', '2021-08-02', 'NADIA', '1111', 9652656632),
(11, 'sks', 'pnpc', 'santipur', 'Male', '2021-08-04', 'ranaghat', '963852', 3698527410);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `eid` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `query` text NOT NULL,
  `ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`eid`, `name`, `email`, `query`, `ans`) VALUES
(2, '', 'q@gmail.com', '							hii ', '				hlw									'),
(3, '', 'pratapbhattacharya8@gmail.com', '							hiiiii ', '													hlww'),
(4, '', 'a@gmail.com', 'hii', ''),
(5, '', 'pratapbhattacharya8@gmail.com', 'what is programing', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `address`, `city`, `email`, `phone`, `dob`, `gender`, `password`) VALUES
(25, 'pratap lal 1222', 'san', 'Jaipur', 'a@gmail.com', 973382111, '2021-07-14', 'Female', '121'),
(26, 'PRATAP BHATTACHARJEE', 'bara goswami para  santipur', '', 'pratapbhattacharya8@gmail.com', 2147483647, '2000-01-18', 'Female', '1111'),
(27, 'PRATAP BHATTACHARJEE', 'bara goswami para', 'Bangalore', 'pratapbhattacharya81@gmail.com', 2147483647, '2000-01-18', 'Female', '555'),
(29, 'p das sdt', 'kalyani ssss', 'Kolkata', 'pratap@gmail.com', 745, '2010-01-14', 'Female', '963'),
(30, 'PRATAP BHATTACHARJEE', 'pratap2', 'Kolkata', 'qqq@gmail.com', 963258, '2000-01-18', 'Male', '963258'),
(31, 'aaaabbbbb', 'ccccccccccdddddddddd', 'Bangalore', 'q@gmail.com', 1234, '2021-08-26', 'Female', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `RsID` bigint(20) NOT NULL,
  `Eno` varchar(50) NOT NULL,
  `Ex_ID` int(5) NOT NULL,
  `Marks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `id` int(9) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `V_id` int(5) NOT NULL,
  `V_Title` text NOT NULL,
  `V_Url` longtext NOT NULL,
  `V_Remarks` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`V_id`, `V_Title`, `V_Url`, `V_Remarks`) VALUES
(3, 'PHP Sessions', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/3CS-eQdcMLU\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'PHP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examdetails`
--
ALTER TABLE `examdetails`
  ADD PRIMARY KEY (`ExamID`);

--
-- Indexes for table `facultytable`
--
ALTER TABLE `facultytable`
  ADD PRIMARY KEY (`FID`),
  ADD UNIQUE KEY `PhNo` (`PhNo`),
  ADD UNIQUE KEY `FaName` (`FaName`),
  ADD UNIQUE KEY `FID` (`FID`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`RsID`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`V_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examdetails`
--
ALTER TABLE `examdetails`
  MODIFY `ExamID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `facultytable`
--
ALTER TABLE `facultytable`
  MODIFY `FID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `eid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `RsID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `V_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
