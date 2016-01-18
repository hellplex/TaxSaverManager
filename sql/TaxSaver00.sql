-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2016 at 08:07 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TaxSaver01`
--

-- --------------------------------------------------------

--
-- Table structure for table `txs_request`
--

CREATE TABLE IF NOT EXISTS `txs_request` (
  `request_id` int(11) NOT NULL,
  `request_date_mmyy` varchar(4) NOT NULL,
  `usr_email` varchar(60) NOT NULL,
  `ticket_typeId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `txs_ticket_category`
--

CREATE TABLE IF NOT EXISTS `txs_ticket_category` (
  `tcktcat_id` int(11) NOT NULL,
  `tcktcat_name` varchar(20) NOT NULL,
  `tcktcat_url` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `txs_ticket_type`
--

CREATE TABLE IF NOT EXISTS `txs_ticket_type` (
  `ticket_typeId` int(11) NOT NULL,
  `ticket_name` varchar(60) NOT NULL,
  `ticket_gross` decimal(4,0) NOT NULL,
  `ticket_net1` decimal(4,0) NOT NULL,
  `ticket_net2` decimal(4,0) NOT NULL,
  `ticket_shortDescript` varchar(500) NOT NULL,
  `ticket_longDescript` varchar(500) NOT NULL,
  `tcktcat_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `txs_user`
--

CREATE TABLE IF NOT EXISTS `txs_user` (
  `usr_email` varchar(60) NOT NULL,
  `usr_password` text NOT NULL,
  `usr_firstName` text NOT NULL,
  `usr_lastName` text NOT NULL,
  `usr_travelCardId` text NOT NULL,
  `usr_departmentId` tinyint(2) NOT NULL,
  `usr_isAdmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `txs_request`
--
ALTER TABLE `txs_request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `usr_email` (`usr_email`),
  ADD KEY `usr_email_2` (`usr_email`),
  ADD KEY `ticket_typeId` (`ticket_typeId`);

--
-- Indexes for table `txs_ticket_category`
--
ALTER TABLE `txs_ticket_category`
  ADD PRIMARY KEY (`tcktcat_id`);

--
-- Indexes for table `txs_ticket_type`
--
ALTER TABLE `txs_ticket_type`
  ADD PRIMARY KEY (`ticket_typeId`),
  ADD KEY `tcktcat_id` (`tcktcat_id`);

--
-- Indexes for table `txs_user`
--
ALTER TABLE `txs_user`
  ADD PRIMARY KEY (`usr_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `txs_request`
--
ALTER TABLE `txs_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `txs_ticket_category`
--
ALTER TABLE `txs_ticket_category`
  MODIFY `tcktcat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `txs_ticket_type`
--
ALTER TABLE `txs_ticket_type`
  MODIFY `ticket_typeId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `txs_request`
--
ALTER TABLE `txs_request`
  ADD CONSTRAINT `txs_request_ibfk_1` FOREIGN KEY (`usr_email`) REFERENCES `txs_user` (`usr_email`),
  ADD CONSTRAINT `txs_request_ibfk_2` FOREIGN KEY (`ticket_typeId`) REFERENCES `txs_ticket_type` (`ticket_typeId`);

--
-- Constraints for table `txs_ticket_type`
--
ALTER TABLE `txs_ticket_type`
  ADD CONSTRAINT `txs_ticket_type_ibfk_1` FOREIGN KEY (`tcktcat_id`) REFERENCES `txs_ticket_category` (`tcktcat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
