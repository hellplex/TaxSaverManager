-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2016 at 08:28 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `txs_request`
--

INSERT INTO `txs_request` (`request_id`, `request_date_mmyy`, `usr_email`, `ticket_typeId`) VALUES
(59, '0116', 'ann@gmail.com', 9),
(60, '0216', 'ann@gmail.com', 9),
(61, '0516', 'ann@gmail.com', 9),
(62, '0116', 'john@gmail.com', 11),
(63, '0116', 'kathy@gmail.com', 9),
(64, '0316', 'kathy@gmail.com', 9),
(65, '0216', 'kathy@gmail.com', 9),
(66, '0516', 'kathy@gmail.com', 9),
(67, '0416', 'kathy@gmail.com', 9),
(68, '0116', 'rose@gmail.com', 10),
(69, '0416', 'rose@gmail.com', 10);

-- --------------------------------------------------------

--
-- Table structure for table `txs_ticket_category`
--

CREATE TABLE IF NOT EXISTS `txs_ticket_category` (
  `tcktcat_id` int(11) NOT NULL,
  `tcktcat_name` varchar(20) NOT NULL,
  `tcktcat_url` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `txs_ticket_category`
--

INSERT INTO `txs_ticket_category` (`tcktcat_id`, `tcktcat_name`, `tcktcat_url`) VALUES
(1, 'LUAS', 'https://taxsavertickets.luas.ie/'),
(2, 'COMBINATIONS', 'http://www.taxsaver.ie/'),
(3, 'SWORD EXPRESS', 'http://www.swordsexpress.com/Tickets-Fares/Taxsaver-Order-Form/');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `txs_ticket_type`
--

INSERT INTO `txs_ticket_type` (`ticket_typeId`, `ticket_name`, `ticket_gross`, `ticket_net1`, `ticket_net2`, `ticket_shortDescript`, `ticket_longDescript`, `tcktcat_id`) VALUES
(9, 'LUAS only', '91', '64', '76', 'Monthly All Zones', 'With Tax Saver Commuter Tickets from Luas it is easy for employers and employees to make a significant saving on their tax bill: no more queuing for purchasing your ticket. Benefits include: Up to 49.5% travel costs savings for staff Up to 10.75% savings for employers on PRSI No more queues for Luas Tickets Journeys are cheaper with prepaid Tickets than with cash', 1),
(10, 'LUAS and BUS', '191', '94', '76', 'Monthly Dublin BUS and LUAS', 'More information about this type of ticket found on the website', 2),
(11, 'Sword Express monthly', '40', '21', '15', 'Sword Express short info', 'Sword Express long info', 3),
(12, 'BUS', '91', '64', '46', 'Monthly bus ticket', 'With Tax Saver Commuter Tickets from BUS it is easy for employers and employees to make a significant saving on their tax bill: no more queuing for purchasing your ticket. Benefits include: Up to 49.5% travel costs savings for staff Up to 10.75% savings for employers on PRSI No more queues for Luas Tickets Journeys are cheaper with prepaid Tickets than with cash', 2);

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
-- Dumping data for table `txs_user`
--

INSERT INTO `txs_user` (`usr_email`, `usr_password`, `usr_firstName`, `usr_lastName`, `usr_travelCardId`, `usr_departmentId`, `usr_isAdmin`) VALUES
('ann@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Ann', 'Redmond', '7898R', 2, 2),
('john@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'John', 'McCarthy', '567F', 4, 1),
('kathy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Katherine', 'Martin', '786T', 2, 1),
('rose@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Rose', 'Chang', '8686G', 5, 1),
('tim@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Timothy', 'Cook', '768F', 3, 1);

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
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `txs_ticket_category`
--
ALTER TABLE `txs_ticket_category`
  MODIFY `tcktcat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `txs_ticket_type`
--
ALTER TABLE `txs_ticket_type`
  MODIFY `ticket_typeId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
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
