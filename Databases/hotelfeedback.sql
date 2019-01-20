-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 16, 2014 at 04:56 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotelfeedback`
--
CREATE DATABASE IF NOT EXISTS `hotelfeedback` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hotelfeedback`;

-- --------------------------------------------------------

--
-- Table structure for table `banquetbook`
--

CREATE TABLE IF NOT EXISTS `banquetbook` (
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `country` varchar(20) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `functiontype` varchar(30) NOT NULL,
  `functiondate` varchar(30) NOT NULL,
  `alternativedate` varchar(20) NOT NULL,
  `guestno` varchar(10) NOT NULL,
  `starttime` varchar(20) NOT NULL,
  `endtime` varchar(20) NOT NULL,
  `paymode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banquetbook`
--

INSERT INTO `banquetbook` (`name`, `address`, `city`, `state`, `pincode`, `country`, `phoneno`, `mobileno`, `email`, `functiontype`, `functiondate`, `alternativedate`, `guestno`, `starttime`, `endtime`, `paymode`) VALUES
('jfjdnjf', 'jdfhkgvkj', 'hkjvkijvg', 'bhfvj', '54548555', 'dfgbg', '5421211212', '1212121212', 'dfghdgjgkvk@gmail.com', 'kjdfhb', 'DD-MM-YY', 'DD-MM-YY', '45', 'Hour-Minutes-AM', 'Hour-Minutes-AM', 'Credit Card');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `count` varchar(999) NOT NULL,
  `name` varchar(40) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `priority` varchar(15) NOT NULL,
  `query` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`count`, `name`, `contact`, `emailid`, `priority`, `query`) VALUES
('1', 'pqrs', '8452145789', 'someone@gmail.com', 'low', 'hsjjfuihkfhihfknv'),
('4', 'krishn', '9641915955', 'anand27krishn@gmail.com', 'Medium', 'gjhgkjk');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `FeedNo` varchar(999) NOT NULL,
  `FeederName` varchar(50) NOT NULL,
  `FeederCity` varchar(20) NOT NULL,
  `FeederContactNo` varchar(15) NOT NULL,
  `FeederEmailID` varchar(50) NOT NULL,
  `FeederFeed` varchar(250) NOT NULL,
  `FeederRadio1` varchar(15) NOT NULL,
  `FeederRadio2` varchar(15) NOT NULL,
  `FeederRadio3` varchar(15) NOT NULL,
  `FeederRadio4` varchar(15) NOT NULL,
  `FeederRadio5` varchar(15) NOT NULL,
  `FeederRadio6` varchar(15) NOT NULL,
  `FeederRadio7` varchar(15) NOT NULL,
  `FeederRadio8` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE IF NOT EXISTS `roombook` (
  `name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `country` varchar(15) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `checkin` varchar(15) NOT NULL,
  `checkout` varchar(15) NOT NULL,
  `categoryroom` varchar(10) NOT NULL,
  `noofrooms` varchar(10) NOT NULL,
  `adults` varchar(10) NOT NULL,
  `children` varchar(10) NOT NULL,
  `paymentmode` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
