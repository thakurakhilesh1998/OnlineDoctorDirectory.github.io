-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 08:15 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `counseling system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(200) NOT NULL,
  `pwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pwd`) VALUES
('root', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `aid` int(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `sem` int(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `assign` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`aid`, `cname`, `sem`, `sub`, `assign`) VALUES
(1, 'MCA', 4, 'Math', 'It is my assignment'),
(2, 'Btech', 5, 'Science', 'It is my assignment'),
(3, 'BCS', 6, 'Computer', 'It is my assignment'),
(4, 'BCS', 6, 'Computer', 'It is my assignment'),
(5, 't', 3, 'Science', 'fjalkjflkajflkajlfk');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(100) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `bsem` int(10) NOT NULL,
  `bcourse` varchar(100) NOT NULL,
  `bsun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `bname`, `bsem`, `bcourse`, `bsun`) VALUES
(1, 'R.D. Sharma', 4, 't', 'Science'),
(2, 'Ramdhar Singh Dinkar', 4, 'BTECH', 'CG'),
(3, 'fjklajklaf', 4, 'BCS', 'fajfk'),
(4, 'Danpatrai', 3, 't', 'Maths');

-- --------------------------------------------------------

--
-- Table structure for table `counseler`
--

CREATE TABLE `counseler` (
  `username` varchar(200) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(200) NOT NULL,
  `Age` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counseler`
--

INSERT INTO `counseler` (`username`, `pwd`, `name`, `email`, `phone`, `Age`) VALUES
('thakur', 'himachal', 'Ravi', 'thakurakhilesh20@gmail.com', 3248977, 12);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eid` int(100) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `edetails` varchar(100) NOT NULL,
  `edate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eid`, `ename`, `edetails`, `edate`) VALUES
(1, 'bollywood match', 'Hello it is akhilesh thakur', '2020/11/09'),
(2, 'bollywood match', 'Hello it is akhilesh thakur', '2020/11/09'),
(3, 'bollywood match', 'fkdjflksjflka', '2020/11/09');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `counseler` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `title`, `msg`, `counseler`) VALUES
(1, 'Home Page of Government Website', 'Hi my name is Akhilesh Thakur', 'Rani'),
(2, 'Home Page of Government Website', 'Hi my name is Akhilesh Thakur', 'Rani'),
(3, 'Home Page of Government Website', 'Hi my name is Akhilesh Thakur', 'Rani'),
(4, 'Home Page of Government Website', 'Hi my name is Akhilesh Thakur', 'Rani'),
(5, 'Home Page of Government Website', 'Hi my name is Akhilesh Thakur', 'Rani'),
(6, 'Home Page of Government Website', 'Hi my name is Akhilesh Thakur', 'Rani'),
(7, 'Home Page of Government Website', 'Hi my name is Akhilesh Thakur', 'Rani');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question` varchar(200) NOT NULL,
  `option1` varchar(200) NOT NULL,
  `option2` varchar(200) NOT NULL,
  `option3` varchar(200) NOT NULL,
  `option4` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `qid` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question`, `option1`, `option2`, `option3`, `option4`, `answer`, `qid`) VALUES
('What does HTML stands for?', 'Hyper Text Transfer Protocol', 'Hyper Transfer Text Protocol', 'High Text Transfer Protocol', 'High Text Transfer Protocol', 'A', 7),
('Who is founder of Microsoft?', 'Jeff Bezos', 'Narendra Modi', 'Bill Gates', 'Bill Gates', 'C', 8),
('What does POP stands for?', 'Post Office Protocol', 'Post Office Process', 'Post Offline Protocol', 'Post Offline Protocol', 'A', 9);

-- --------------------------------------------------------

--
-- Table structure for table `testresult`
--

CREATE TABLE `testresult` (
  `testid` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `Total Question` varchar(100) NOT NULL,
  `Correct Answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testresult`
--

INSERT INTO `testresult` (`testid`, `name`, `userid`, `Total Question`, `Correct Answer`) VALUES
(1, 'Akhilesh', '43234', '3', '1'),
(2, 'Akhilesh', '43234', '3', '1'),
(3, 'Akhilesh', '43234', '3', '1'),
(4, 'Akhilesh', '43234', '3', '0'),
(5, 'Akhilesh Thakur', '1290', '3', '1'),
(6, 'Akhilesh Thakur', '1290', '3', '1'),
(7, 'Akhilesh', '43234', '3', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `rollno` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `Course` varchar(200) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `sem` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`rollno`, `username`, `name`, `email`, `Course`, `pwd`, `sem`, `gender`) VALUES
(1290, 'akhilesh', 'Akhilesh Thakur', 'thakurakhilesh1998@gmail.com', 'Btech', 'akhilesh', '4', 'Male'),
(43234, 'ak', 'Akhilesh', 'thakurakhilesh200@gmail.com', 't', 'ak', '3', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `counseler`
--
ALTER TABLE `counseler`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qid`),
  ADD UNIQUE KEY `question` (`question`);

--
-- Indexes for table `testresult`
--
ALTER TABLE `testresult`
  ADD PRIMARY KEY (`testid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`rollno`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `aid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testresult`
--
ALTER TABLE `testresult`
  MODIFY `testid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
