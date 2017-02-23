-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2015 at 08:15 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `traveller`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `uid` varchar(100) NOT NULL,
  `fid` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL AUTO_INCREMENT,
  `pname` varchar(500) NOT NULL,
  `like` int(100) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `fid` int(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`uid`, `pid`, `pname`, `like`, `comment`, `fid`) VALUES
(0, 0, '0', 0, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `uid` int(250) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uid`, `name`, `email`, `pwd`, `gender`, `dob`, `city`, `country`) VALUES
(4, 'Anshi agarwal', 'abc@gmail.com', 'ab', 'F', '2015-10-01', 's', 's'),
(5, 'Bhavya Singh', 'bsbhavya@gmail.com', 'b', 'female', '2015-10-22', '1', '1'),
(1, 'Anshi Agarwal', 'cool.anshi15@gmail.com', 'd', 'female', '2015-10-15', '1', '1'),
(2, 'kriti dwivedi', 'dwivedi.kriti2@gmail.com', 'a', 'female', '2015-10-23', '1', '1'),
(3, 'Rachna Bharti', 'rachnabharti1995@gmail.com', 'd', 'female', '2015-10-02', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE IF NOT EXISTS `reminder` (
  `uid` int(100) NOT NULL,
  `plid` int(100) NOT NULL AUTO_INCREMENT,
  `destination` varchar(1000) NOT NULL,
  `date` varchar(20) NOT NULL,
  `remdate` varchar(20) NOT NULL,
  PRIMARY KEY (`plid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`uid`, `plid`, `destination`, `date`, `remdate`) VALUES
(3, 1, 'Switzerland', '2015-10-14', '2015-10-13'),
(3, 2, 'kj', '2015-10-16', '2015-10-15'),
(3, 3, 'Deoghar', '2015-10-21', '2015-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `request status`
--

CREATE TABLE IF NOT EXISTS `request status` (
  `uid` int(100) NOT NULL,
  `fid` int(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request status`
--

INSERT INTO `request status` (`uid`, `fid`, `status`) VALUES
(2, 3, 0),
(1, 3, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
