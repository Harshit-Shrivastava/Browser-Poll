-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2012 at 08:11 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE IF NOT EXISTS `entries` (
  `Name` varchar(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Browser` varchar(32) NOT NULL,
  `Reason` varchar(128) NOT NULL,
  `Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entries`
--


-- --------------------------------------------------------

--
-- Table structure for table `pollresult`
--

CREATE TABLE IF NOT EXISTS `pollresult` (
  `Browser` varchar(32) NOT NULL,
  `Count` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pollresult`
--

INSERT INTO `pollresult` (`Browser`, `Count`) VALUES
('Konqueror', 0),
('Opera', 0),
('Safari', 0),
('Chrome', 0),
('Firefox', 0),
('Internet Explorer', 0),
('Lynx', 0);
