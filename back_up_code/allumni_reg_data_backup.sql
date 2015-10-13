-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2015 at 11:51 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allumni_reg_data_backup`
--
ALTER TABLE `allumni_reg_data_backup`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allumni_reg_data_backup`
--
ALTER TABLE `allumni_reg_data_backup`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
