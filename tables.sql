-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2013 at 09:21 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `codeforgood`
--

-- --------------------------------------------------------

--
-- Table structure for table `AccountInformation`
--

CREATE TABLE `AccountInformation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `name` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `ProjectInformation`
--

CREATE TABLE `ProjectInformation` (
  `account_id` int(32) NOT NULL,
  `Question` varchar(32) NOT NULL,
  `UserInput` varchar(255) NOT NULL,
  `project_id` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ProjectInformation`
--

INSERT INTO `ProjectInformation` (`account_id`, `Question`, `UserInput`, `project_id`) VALUES
(0, 'Major Updates for Social Entrepr', '', NULL),
(0, 'Biggest Challenges at the Moment', '', NULL),
(0, 'Specific Support Request for Soc', '', NULL),
(0, 'Big News Update', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `QuantData`
--

CREATE TABLE `QuantData` (
  `Question` varchar(255) NOT NULL,
  `userinput` varchar(255) NOT NULL,
  `account_id` int(32) NOT NULL,
  `project_id` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `QuantData`
--

INSERT INTO `QuantData` (`Question`, `userinput`, `account_id`, `project_id`) VALUES
('Number of People Impacted Since Last Report', '', 0, 0),
('Number of People Currently Employed', '', 0, 0),
('Number of Volunteers Working With Organisation', '', 0, 0),
('Funds Raised Since Last Report', '', 0, 0);
