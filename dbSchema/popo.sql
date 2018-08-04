-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2018 at 06:00 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `popo`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_name` varchar(64) DEFAULT NULL,
  `employee_id` varchar(32) DEFAULT NULL,
  `employee_password` varchar(32) DEFAULT NULL,
  `hub_id` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_name`, `employee_id`, `employee_password`, `hub_id`) VALUES
('Nantha kumar', 'knantha', 'nknkit1;', 'popo'),
('a', 'a', 'a', 'popo'),
('b', 'b', 'b', 'popo'),
('c', 'c', 'c', 'popo'),
('d', 'd', 'd', 'popo');

-- --------------------------------------------------------

--
-- Table structure for table `hub`
--

CREATE TABLE `hub` (
  `hub_id` varchar(25) NOT NULL,
  `hub_password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hub`
--

INSERT INTO `hub` (`hub_id`, `hub_password`) VALUES
('popo', 'popo');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `product_id` int(11) NOT NULL,
  `hub_id` varchar(32) DEFAULT NULL,
  `date_of_entry` datetime DEFAULT NULL,
  `date_of_arrival` datetime DEFAULT NULL,
  `status` varchar(32) DEFAULT NULL,
  `source_city` varchar(32) DEFAULT NULL,
  `destination_city` varchar(32) DEFAULT NULL,
  `sender_name` varchar(32) DEFAULT NULL,
  `sender_email` varchar(32) DEFAULT NULL,
  `sender_number` varchar(15) DEFAULT NULL,
  `sender_address` varchar(128) DEFAULT NULL,
  `receiver_name` varchar(32) DEFAULT NULL,
  `receiver_email` varchar(32) DEFAULT NULL,
  `receiver_number` varchar(15) DEFAULT NULL,
  `receiver_address` varchar(128) DEFAULT NULL,
  `hashed_record` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`product_id`, `hub_id`, `date_of_entry`, `date_of_arrival`, `status`, `source_city`, `destination_city`, `sender_name`, `sender_email`, `sender_number`, `sender_address`, `receiver_name`, `receiver_email`, `receiver_number`, `receiver_address`, `hashed_record`) VALUES
(1, 'popo', '2018-06-26 12:33:58', '2018-06-13 19:00:00', 'Delivered', 'Chennai', 'Chennai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'popo', '2018-06-26 21:54:15', '2018-06-30 21:00:00', 'Delivered', 'Bangalore', 'Chennai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'popo', '2018-07-31 23:45:38', '2018-08-01 23:45:38', 'Pending', 'a', 'a', 'a', 'a', '0', 'a', 'a', 'a', '0', 'a', NULL),
(4, 'popo', '2018-07-31 23:47:53', '2018-08-02 23:47:53', 'Pending', 'b', 'b', 'b', 'b', '2147483647', 'b', 'b', 'b', '2147483647', 'b', NULL),
(5, 'popo', '2018-07-31 23:49:00', '2018-08-02 23:49:00', 'Pending', 'c', 'c', 'c', 'c', '1', 'c', 'c', 'c', '2', 'c', NULL),
(6, 'popo', '2018-07-31 23:49:46', '2018-08-02 23:49:46', 'Pending', 'd', 'd', 'd', 'd', '2147483647', 'd', 'd', 'd', '2147483647', 'd', NULL),
(7, 'popo', '2018-07-31 23:51:46', '2018-08-02 23:51:46', 'Pending', 'e', 'e', 'e', 'e', '7401567867', 'e', 'e', 'e', '9551565415', 'e', NULL),
(8, 'popo', '2018-08-01 17:58:29', '2018-08-03 17:58:29', 'Pending', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', NULL),
(9, 'popo', '2018-08-01 18:23:02', '2018-08-03 18:23:02', 'Pending', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', NULL),
(10, 'popo', '2018-08-02 14:48:05', '2018-08-03 14:48:05', 'Pending', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', '4941b02167334e51063e6184cf182b3f3a6c510d'),
(11, 'popo', '2018-08-02 14:48:07', '2018-08-03 14:48:07', 'Pending', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', '4941b02167334e51063e6184cf182b3f3a6c510d');

-- --------------------------------------------------------

--
-- Table structure for table `sales_person`
--

CREATE TABLE `sales_person` (
  `name` varchar(64) DEFAULT NULL,
  `id` varchar(64) NOT NULL,
  `phone_no` varchar(32) DEFAULT NULL,
  `location` varchar(256) DEFAULT NULL,
  `vehicle` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `hub_id` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_person`
--

INSERT INTO `sales_person` (`name`, `id`, `phone_no`, `location`, `vehicle`, `password`, `hub_id`) VALUES
('a', 'a', 'a', 'a', 'Bike', 'a', 'popo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hub`
--
ALTER TABLE `hub`
  ADD PRIMARY KEY (`hub_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sales_person`
--
ALTER TABLE `sales_person`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hub_id` (`hub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales_person`
--
ALTER TABLE `sales_person`
  ADD CONSTRAINT `sales_person_ibfk_1` FOREIGN KEY (`hub_id`) REFERENCES `hub` (`hub_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
