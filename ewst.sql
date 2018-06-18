-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2018 at 10:35 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `ewst`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `city` varchar(25) NOT NULL,
  `subject` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`fname`, `lname`, `city`, `subject`) VALUES
('as', 'ssdd', 'siliguri', 'sssssssss'),
('fff', 'rrr', 'kolkata', 'rrrrr');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `contactno` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `passwd`, `contactno`) VALUES
('Ananya', 'a@gmai.com', '222', '123'),
('Purbita', 'p@gmail.com', '123', '222222'),
('debarati', 'd@gmail.com', '123456', '1111111');