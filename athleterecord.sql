-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 10:03 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `athleterecord`
--

-- --------------------------------------------------------

--
-- Table structure for table `athlete`
--

CREATE TABLE `athlete` (
  `member_num` int(11) NOT NULL,
  `firstname` varchar(9) NOT NULL,
  `surname` varchar(9) NOT NULL,
  `address` varchar(16) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `postal_code` varchar(6) NOT NULL,
  `emergency_contact_id` int(11) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `athlete`
--

INSERT INTO `athlete` (`member_num`, `firstname`, `surname`, `address`, `contact`, `gender`, `dob`, `postal_code`, `emergency_contact_id`, `status`) VALUES
(2, 'benedict', 'yose', 'cikarang', '90789675', 'm', '1998-03-16', '32423', 2, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `athlete_record`
--

CREATE TABLE `athlete_record` (
  `record_num` int(11) NOT NULL,
  `squad` varchar(16) NOT NULL,
  `status` varchar(8) NOT NULL,
  `grade` varchar(8) NOT NULL,
  `team` varchar(8) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `member_num` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `id` int(11) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `first_name` varchar(16) NOT NULL,
  `address` varchar(16) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `postal_code` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`id`, `last_name`, `first_name`, `address`, `phone`, `postal_code`) VALUES
(1, 'julia', 'stefanny', 'karawang', '021932817', '876576');

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `sport_id` int(11) NOT NULL,
  `primary_sport` varchar(8) NOT NULL,
  `secondary_sport` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `name` varchar(32) NOT NULL,
  `sss_num` varchar(10) NOT NULL,
  `address` varchar(16) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `team` varchar(16) NOT NULL,
  `type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `sss_num`, `address`, `contact`, `team`, `type`) VALUES
(1, 'dharma', 'pustaka', 'Dharma Pustaka', '0012016004', 'Djava Residence', '082260130668', 'computing', 'coach'),
(2, 'adi', 'firman', 'adi firman', '9078677867', 'cilacap', '09876543457', 'it', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athlete`
--
ALTER TABLE `athlete`
  ADD PRIMARY KEY (`member_num`);

--
-- Indexes for table `athlete_record`
--
ALTER TABLE `athlete_record`
  ADD PRIMARY KEY (`record_num`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`sport_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athlete`
--
ALTER TABLE `athlete`
  MODIFY `member_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `athlete_record`
--
ALTER TABLE `athlete_record`
  MODIFY `record_num` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `sport_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
