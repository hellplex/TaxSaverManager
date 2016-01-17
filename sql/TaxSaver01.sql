-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2016 at 09:45 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `txs_request`
--

INSERT INTO `txs_request` (`request_id`, `request_date_mmyy`, `usr_email`, `ticket_typeId`) VALUES
(4, '0316', 'csuarez9@gmail.com', 2),
(8, '0416', 'csuarez9@gmail.com', 3),
(9, '0916', 'csuarez9@gmail.com', 2),
(11, '0616', 'csuarez9@gmail.com', 2),
(17, '0816', 'csuarez8@gmail.com', 2),
(19, '0516', 'csuarez8@gmail.com', 2),
(23, '0116', 'csuarez8@gmail.com', 2),
(25, '0216', 'csuarez8@gmail.com', 3),
(26, '0216', 'csuarez9@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `txs_ticket_category`
--

CREATE TABLE IF NOT EXISTS `txs_ticket_category` (
  `tcktcat_id` int(11) NOT NULL,
  `tcktcat_name` varchar(20) NOT NULL,
  `tcktcat_url` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `txs_ticket_category`
--

INSERT INTO `txs_ticket_category` (`tcktcat_id`, `tcktcat_name`, `tcktcat_url`) VALUES
(1, 'LUAS only', 'https://taxsavertickets.luas.ie/'),
(2, 'BUS and Combinations', 'http://www.taxsaver.ie/Employers/'),
(3, 'Sword Express', 'http://www.swordsexpress.com/Tickets-Fares/Taxsaver-Order-Form/');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `txs_ticket_type`
--

INSERT INTO `txs_ticket_type` (`ticket_typeId`, `ticket_name`, `ticket_gross`, `ticket_net1`, `ticket_net2`, `ticket_shortDescript`, `ticket_longDescript`, `tcktcat_id`) VALUES
(2, 'LUAS only', '91', '64', '46', 'Monthly All Zones', 'With Tax Saver Commuter Tickets from Luas it is easy for employers and employees to make a significant saving on their tax bill: no more queuing for purchasing your ticket. Benefits include: Up to 49.5% travel costs savings for staff Up to 10.75% savings for employers on PRSI No more queues for Luas Tickets Journeys are cheaper with prepaid Tickets than with cash', 1),
(3, 'BUS only', '91', '64', '46', 'Monthly Dublin BUS', 'With Tax Saver Commuter Tickets from Luas it is easy for employers and employees to make a significant saving on their tax bill: no more queuing for purchasing your ticket. Benefits include: Up to 49.5% travel costs savings for staff Up to 10.75% savings for employers on PRSI No more queues for Luas Tickets Journeys are cheaper with prepaid Tickets than with cash', 2);

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
('csuarez10@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'bb8', 'the robot', 'ufgghjgjh', 0, 0),
('csuarez12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'jghjhv', 'hgjhkg', 'hgkjg', 0, 1),
('csuarez15@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Cristina', 'Suarez', 't58576', 3, 0),
('csuarez17@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Crig', 'hghjg', 'hjgh', 0, 0),
('csuarez1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Cristina', 'Suarez Corzo', '343f', 3, 1),
('csuarez20@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'gdfhkhjb', 'hjgkh', 'gjh', 0, 0),
('csuarez2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Cristina', 'Suarez Corzo', '343f', 2, 0),
('csuarez3@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ytuyt', 'uyt', 'yut', 0, 0),
('csuarez4@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'tuytyh', 'ghj', 'gjh', 0, 0),
('csuarez5@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'hj', 'hkj', 'kj', 0, 0),
('csuarez6@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'hj', 'hkj', 'kj', 0, 0),
('csuarez7@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'h', 'j', 'jk', 0, 0),
('csuarez8@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Paula', 'GarcÃ­a SuÃ¡rez', '64376478tg', 4, 1),
('csuarez9@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'princesa', 'amidala', '74657', 0, 1),
('csuarez@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Cristina', 'Suarez Corzo', '123434F', 3, 0),
('lala', 'e10adc3949ba59abbe56e057f20f883e', 'hjh', 'hghg', '11', 1, 0);

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
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `txs_ticket_category`
--
ALTER TABLE `txs_ticket_category`
  MODIFY `tcktcat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `txs_ticket_type`
--
ALTER TABLE `txs_ticket_type`
  MODIFY `ticket_typeId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
