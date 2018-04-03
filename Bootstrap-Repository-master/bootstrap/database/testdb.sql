-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 05:33 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `srno` int(5) NOT NULL,
  `emp_id` int(5) NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `emp_email` varchar(40) NOT NULL,
  `emp_mobileno` varchar(10) NOT NULL,
  `emp_password` varchar(8) NOT NULL,
  `query_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`srno`, `emp_id`, `emp_name`, `emp_email`, `emp_mobileno`, `emp_password`, `query_id`) VALUES
(3, 10110, 'umesh', 'umeshc@ec-mobility.biz', '7875496971', '1234', 100);

-- --------------------------------------------------------

--
-- Table structure for table `flight_book`
--

CREATE TABLE `flight_book` (
  `srno` int(5) NOT NULL,
  `emp_name` varchar(40) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `flight_origin` varchar(40) NOT NULL,
  `flight_desctination` varchar(40) NOT NULL,
  `flight_start_date` varchar(40) NOT NULL,
  `flight_end_date` varchar(40) NOT NULL,
  `flight_on_person` varchar(40) NOT NULL,
  `flight_password_number` varchar(20) NOT NULL,
  `flight_visa_status` int(1) NOT NULL,
  `query_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_book`
--

CREATE TABLE `hotel_book` (
  `srno` int(2) NOT NULL,
  `emp_name` varchar(40) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `hotel_city` varchar(40) NOT NULL,
  `hotel_pre1` varchar(40) NOT NULL,
  `hotel_pre2` varchar(40) NOT NULL,
  `hotel_address` varchar(40) NOT NULL,
  `hotel_checkin` varchar(15) NOT NULL,
  `hotel_checkout` varchar(15) NOT NULL,
  `hotel_guestname` varchar(40) NOT NULL,
  `hotel_member` int(2) NOT NULL,
  `hotel_roomcount` int(2) NOT NULL,
  `hotel_guest_category` varchar(10) NOT NULL,
  `query_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lunch_book`
--

CREATE TABLE `lunch_book` (
  `srno` int(5) NOT NULL,
  `emp_name` varchar(40) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `querie_id` int(4) NOT NULL,
  `lunch_category` varchar(15) NOT NULL,
  `lunch_date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `srno` int(11) NOT NULL,
  `emp_name` varchar(40) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `request_details` varchar(150) NOT NULL,
  `request_date` varchar(15) NOT NULL,
  `request_time` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `query_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`srno`, `emp_name`, `admin_name`, `request_details`, `request_date`, `request_time`, `status`, `query_id`) VALUES
(4, 'umesh', 'Sachin Kulkarni', 'flight booking', '2018-03-28', '08:56:21', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `taxi_booking`
--

CREATE TABLE `taxi_booking` (
  `srno` int(5) NOT NULL,
  `emp_name` varchar(40) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `querie_id` int(11) NOT NULL,
  `taxi_start_date` varchar(11) NOT NULL,
  `taxi_end_date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visa_request`
--

CREATE TABLE `visa_request` (
  `srno` int(5) NOT NULL,
  `emp_name` varchar(40) NOT NULL,
  `admin_name` varchar(40) NOT NULL,
  `querie_id` int(4) NOT NULL,
  `visa_start_date` varchar(15) NOT NULL,
  `visa_end_date` varchar(15) NOT NULL,
  `visa_country` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `flight_book`
--
ALTER TABLE `flight_book`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `hotel_book`
--
ALTER TABLE `hotel_book`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `srno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flight_book`
--
ALTER TABLE `flight_book`
  MODIFY `srno` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_book`
--
ALTER TABLE `hotel_book`
  MODIFY `srno` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
