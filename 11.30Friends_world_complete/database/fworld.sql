-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2015 at 09:09 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

CREATE TABLE IF NOT EXISTS `draft` (
  `frm` varchar(100) NOT NULL,
  `too` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `mesg` varchar(400) NOT NULL,
  `dat` varchar(100) NOT NULL,
  `att` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `frireq`
--

CREATE TABLE IF NOT EXISTS `frireq` (
  `sid` varchar(100) NOT NULL,
  `rid` varchar(100) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frireq`
--

INSERT INTO `frireq` (`sid`, `rid`, `dat`) VALUES
('amit@gmail.com', 'anuj@gmail.com', '2015-07-13 07:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `frm` varchar(100) NOT NULL,
  `too` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `mesg` varchar(400) NOT NULL,
  `dat` varchar(100) NOT NULL,
  `att` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`frm`, `too`, `sub`, `mesg`, `dat`, `att`) VALUES
('amit@gmail.com', 'anuj@gmail.com', 'hello', 'helloo,\r\nanuj hw r u', '12-07-15 08-35-59 am', 'Koala.jpg'),
('anuj@gmail.com', 'anuj@gmail.com', 'hiiii', 'test mail', '12-07-15 08-48-47 am', 'Chrysanthemum_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `qua` varchar(100) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `fname`, `lname`, `qua`, `mob`, `address`) VALUES
('amit@gmail.com', 'amit', 'joshi', 'b.tech', '9898989899', 'sec 16 noida , up'),
('anuj@gmail.com', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE IF NOT EXISTS `regis` (
  `uid` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gen` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `sq` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL,
  `dat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`uid`, `uname`, `pass`, `age`, `gen`, `city`, `sq`, `ans`, `dat`) VALUES
('amit@gmail.com', 'ammu', '0cb1eb413b8f7cee17701a37a1d74dc3', 56, 'male', 'Delhi', 'What is ur pet name?', 'ammu', '2015-07-06 09:15:20'),
('anuj@gmail.com', 'anuj', 'ae69a331121724849f83f2aca559eb49', 56, 'male', 'Delhi', 'What is ur pet name?', 'anuj', '2015-07-06 09:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `sent`
--

CREATE TABLE IF NOT EXISTS `sent` (
  `frm` varchar(100) NOT NULL,
  `too` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `mesg` varchar(400) NOT NULL,
  `dat` varchar(100) NOT NULL,
  `att` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sent`
--

INSERT INTO `sent` (`frm`, `too`, `sub`, `mesg`, `dat`, `att`) VALUES
('amit@gmail.com', 'anuj@gmail.com', 'hello', 'helloo,\r\nanuj hw r u', '12-07-15 08-35-59 am', 'Koala.jpg'),
('anuj@gmail.com', 'anuj@gmail.com', 'hiiii', 'test mail', '12-07-15 08-48-47 am', 'Chrysanthemum_2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `frireq`
--
ALTER TABLE `frireq`
 ADD PRIMARY KEY (`sid`,`rid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
 ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `uname` (`uname`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
