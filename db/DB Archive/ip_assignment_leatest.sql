-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2015 at 11:57 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ip_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `allumni_reg_data`
--

CREATE TABLE IF NOT EXISTS `allumni_reg_data` (
`id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `std_id` int(11) NOT NULL,
  `batch` varchar(6) NOT NULL,
  `sex` tinyint(4) NOT NULL,
  `passing_year` int(11) NOT NULL,
  `phone_no` varchar(14) NOT NULL,
  `email` varchar(150) NOT NULL,
  `current_employer` varchar(300) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `present_address` varchar(350) NOT NULL,
  `profile_photo` varchar(400) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `allumni_reg_data_backup`
--

CREATE TABLE IF NOT EXISTS `allumni_reg_data_backup` (
`id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `std_id` int(11) NOT NULL,
  `batch` varchar(6) NOT NULL,
  `sex` tinyint(4) NOT NULL,
  `passing_year` int(11) NOT NULL,
  `phone_no` varchar(14) NOT NULL,
  `email` varchar(150) NOT NULL,
  `current_employer` varchar(300) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `present_address` varchar(350) NOT NULL,
  `pp_name` varchar(400) NOT NULL,
  `pp_type` varchar(30) NOT NULL,
  `pp_size` int(11) NOT NULL,
  `profile_photo` mediumblob NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event_news`
--

CREATE TABLE IF NOT EXISTS `event_news` (
`id` int(11) NOT NULL,
  `news_headline` varchar(150) NOT NULL,
  `news_details` text NOT NULL,
  `created_by` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_news`
--

INSERT INTO `event_news` (`id`, `news_headline`, `news_details`, `created_by`) VALUES
(1, 'Allumni Association', 'Asian University of Bangladesh will arrange an Allumni Association in December.', 'Sharmin Sultana Happy'),
(2, 'Carnival', 'Asian University of Bangladesh will arrange a Carnival', 'Sharmin Sultana Happy'),
(3, 'Convocation', 'Former Students will get convocation on 19th December 2015', 'Sharmin Sultana Happy'),
(4, 'AUB Permanent Campus', 'AUB will be going to launch an Permanent Campus', 'Sharmin Sultana Happy'),
(5, 'AUCC', 'AUCC will going to arrange an gaming contest', 'Sharmin Sultana Happy'),
(6, 'AUDC', 'AUDC will going to arrane and dibeting contest', 'Sharmin Sultana Happy'),
(7, 'Other', 'Other program will be noticed later', 'Sharmin Sultana Happy'),
(9, 'dhdfg', 'dsfsd', 'Sharmin Sultana Happy');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion_box`
--

CREATE TABLE IF NOT EXISTS `suggestion_box` (
`id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `suggestion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suggestion_box`
--

INSERT INTO `suggestion_box` (`id`, `name`, `email`, `suggestion`) VALUES
(1, 'X', 'x@f', 'This site need to upgrade'),
(2, 'ZUK', 'z@z.com', 'ABCDE'),
(3, 'Habijabi', 'zawad@g.com', 'Hagu dhorse');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `contact_no` varchar(14) NOT NULL,
  `sex` tinyint(4) NOT NULL,
  `user_type` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `date_of_birth`, `contact_no`, `sex`, `user_type`, `status`) VALUES
(1, 'Zawadul Kawum', 'zawad1992@gmail.com', '12345', '1992-08-03', '01912669325', 1, 1, 1),
(2, 'Sharmin Sultana Happy', 'sharminhappy40@gmail.com', '12345', '2015-09-18', '01770206755', 2, 2, 1),
(3, 'Jihad Ibn Emdad', 'jihad.kawum@gmail.com', '12345', '1988-09-11', '01911957015', 1, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allumni_reg_data`
--
ALTER TABLE `allumni_reg_data`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allumni_reg_data_backup`
--
ALTER TABLE `allumni_reg_data_backup`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_news`
--
ALTER TABLE `event_news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestion_box`
--
ALTER TABLE `suggestion_box`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allumni_reg_data`
--
ALTER TABLE `allumni_reg_data`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `allumni_reg_data_backup`
--
ALTER TABLE `allumni_reg_data_backup`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_news`
--
ALTER TABLE `event_news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `suggestion_box`
--
ALTER TABLE `suggestion_box`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
