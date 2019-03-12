-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2019 at 02:31 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_name`, `user_password`) VALUES
('admin1', 'hp'),
('admin2', 'dc'),
('admin3', 'cc'),
('admin4', 'ec');

-- --------------------------------------------------------

--
-- Table structure for table `student_information`
--

CREATE TABLE `student_information` (
  `name` varchar(20) NOT NULL,
  `roll` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `session` varchar(10) NOT NULL,
  `department` varchar(30) NOT NULL,
  `year` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `S_ID` int(30) NOT NULL,
  `SB_1` int(5) NOT NULL,
  `SB_2` int(5) NOT NULL,
  `SB_3` int(5) NOT NULL,
  `SB_4` int(5) NOT NULL,
  `registration` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_information`
--

INSERT INTO `student_information` (`name`, `roll`, `fname`, `mname`, `session`, `department`, `year`, `semester`, `S_ID`, `SB_1`, `SB_2`, `SB_3`, `SB_4`, `registration`) VALUES
('Sadaf Salman Pantho', 140117, 'gfdg', 'fghfvb', '2014-2015', 'CSE', 'fourth', 'second', 7, 1, 0, 0, 0, 1401035),
('badhan', 140142, 'gfdg', 'fghfvb', '2014-2015', 'CSE', 'fourth', 'first', 20, 1, 0, 0, 0, 1401039),
('Md Mortuja Kaisar', 140139, 'abcd', 'dgfsd', '2014-2015', 'CSE', 'first', 'second', 22, 1, 1, 1, 1, 1401037),
('mk khan', 140139, 'gfdg', 'dgfsd', '2014-2015', 'CSE', 'second', 'first', 24, 1, 0, 0, 0, 1401037),
('Md Mortuja Kaisar', 140139, 'gfdg', 'dgfsd', '2014-2015', 'CSE', 'fourth', 'second', 25, 0, 0, 0, 0, 1401037);

-- --------------------------------------------------------

--
-- Table structure for table `s_login`
--

CREATE TABLE `s_login` (
  `S_username` varchar(30) NOT NULL,
  `S_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_login`
--

INSERT INTO `s_login` (`S_username`, `S_password`) VALUES
('140139', 'kaisar'),
('140117', 'sadaf'),
('140147', 'zaki'),
('140142', 'king');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_information`
--
ALTER TABLE `student_information`
  ADD PRIMARY KEY (`S_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_information`
--
ALTER TABLE `student_information`
  MODIFY `S_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
