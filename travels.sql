-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 06:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_flight_no`
--

CREATE TABLE `admin_flight_no` (
  `admin_no` varchar(15) NOT NULL,
  `flight_number` varchar(15) NOT NULL,
  `airline_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_flight_no`
--

INSERT INTO `admin_flight_no` (`admin_no`, `flight_number`, `airline_code`) VALUES
('bme_001', 'JC-2222', '103'),
('bme_001', 'JC-9995', '103'),
('bme_002', 'AB-0303', '102'),
('bme_001', 'JC-0423', '103'),
('bme_001', 'JC-2211', '102'),
('bme_001', 'AB-2701', '102'),
('bme_001', 'AB-2627', '102'),
('bme_001', 'IX-9081', '101'),
('bme_001', 'IX-1234', '101');

-- --------------------------------------------------------

--
-- Table structure for table `admin_help_no`
--

CREATE TABLE `admin_help_no` (
  `admin_id` varchar(15) NOT NULL,
  `complain_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_help_no`
--

INSERT INTO `admin_help_no` (`admin_id`, `complain_id`) VALUES
('bme_001', 5),
('bme_001', 8),
('bme_001', 7),
('bme_001', 6),
('bme_001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `emp_no` varchar(15) NOT NULL,
  `emp_pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`emp_no`, `emp_pass`) VALUES
('bme_001', 'bme_emp_001'),
('bme_002', 'bme_emp_002'),
('bme_003', 'bme_emp_003'),
('bme_004', 'bme_emp_004'),
('bme_005', 'bme_emp_005'),
('bme_006', 'bme_emp_006'),
('bme_007', 'bme_emp_007'),
('bme_008', 'bme_emp_008');

-- --------------------------------------------------------

--
-- Table structure for table `airline_info`
--

CREATE TABLE `airline_info` (
  `a_code` varchar(30) NOT NULL,
  `a_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airline_info`
--

INSERT INTO `airline_info` (`a_code`, `a_name`) VALUES
('101', 'Jet Airways'),
('102', 'Air India'),
('103', 'Indigo');

-- --------------------------------------------------------

--
-- Table structure for table `booking_info`
--

CREATE TABLE `booking_info` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `pnumber` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `f_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_info`
--

INSERT INTO `booking_info` (`fname`, `lname`, `pnumber`, `email`, `f_code`) VALUES
('Julie', 'Macsizzle', '1111111111', 'juliemcsizz@gmail.com', 'IX-0203'),
('Petunia', 'Dursley', '010101010', 'pdursley@gmail.com', 'AB-0001'),
('Harry', 'Potter', '123789000', 'harry@gmail.com', 'JC-0003'),
('Aman', 'Mathur', '444444444', 'amanm@gmail.com', 'JC-1011'),
('Poorna', 'Rajput', '443215678', 'poorna@gmail.com', 'JC-1011'),
('Mayra', 'Parekh', '111110000', 'mayra@gmail.com', 'AB-1000'),
('Mayra', 'Parekh', '111110000', 'mayra@gmail.com', 'IX-2019'),
('Pamela', 'Verma', '123456789', 'pamela@gmail.com', 'AB-1000'),
('Pamela', 'Verma', '123456789', 'pamela@gmail.com', 'AB-1960'),
('Sam', 'Winchester', '333333333', 'sam@gmail.com', 'AB-0001'),
('Dean', 'Winchester', '222222222', 'dean@gmail.com', 'AB-0981'),
('Mason', 'Samuels', '555555555', 'mason@gmail.com', 'AB-0981'),
('Sam', 'Winchester', '333333333', 'sam@gmail.com', 'JC-1011'),
('Mona', 'Mehta', '123123123', 'mona@gmail.com', 'AB-9999'),
('Leela', 'Sharma', '23002300', 'leela@gmail.com', 'IX-1289');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `pnumber` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`fname`, `lname`, `pnumber`, `email`) VALUES
('Petunia', 'Dursley', '010101010', 'pdursley@gmail.com'),
('Mayra', 'Parekh', '111110000', 'mayra@gmail.com'),
('Julie', 'Macsizzle', '1111111111', 'juliemcsizz@gmail.com'),
('Mona', 'Mehta', '123123123', 'mona@gmail.com'),
('Aarav', 'Mehra', '123412345', '1234@gmail.com'),
('Pamela', 'Verma', '123456789', 'pamela@gmail.com'),
('Harry', 'Potter', '123789000', 'harry@gmail.com'),
('Dean', 'Winchester', '222222222', 'dean@gmail.com'),
('Leela', 'Sharma', '23002300', 'leela@gmail.com'),
('Sam', 'Winchester', '333333333', 'sam@gmail.com'),
('Poorna', 'Rajput', '443215678', 'poorna@gmail.com'),
('Aman', 'Mathur', '444444444', 'amanm@gmail.com'),
('Mason', 'Samuels', '555555555', 'mason@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `flight_info`
--

CREATE TABLE `flight_info` (
  `a_code` varchar(30) NOT NULL,
  `flight_code` varchar(30) NOT NULL,
  `from_source` varchar(30) NOT NULL,
  `to_dest` varchar(30) NOT NULL,
  `arrival_time` time NOT NULL,
  `departure_time` time NOT NULL,
  `seats_available` int(11) NOT NULL,
  `date_of_flight` date NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight_info`
--

INSERT INTO `flight_info` (`a_code`, `flight_code`, `from_source`, `to_dest`, `arrival_time`, `departure_time`, `seats_available`, `date_of_flight`, `price`) VALUES
('102', 'AB-0000', 'Dubai', 'Mangalore', '18:00:00', '14:10:00', 150, '2020-08-01', 5700),
('102', 'AB-0001', 'Mumbai', 'Mangalore', '09:30:00', '07:45:00', 145, '2020-06-27', 3200),
('102', 'AB-0002', 'Mangalore', 'Dubai', '18:50:00', '14:22:00', 186, '2020-06-24', 5700),
('102', 'AB-0010', 'Mangalore', 'Doha', '18:00:00', '14:40:00', 250, '2020-07-25', 6550),
('102', 'AB-0189', 'London', 'Mumbai', '16:35:00', '04:45:00', 125, '2020-07-31', 10000),
('102', 'AB-0200', 'Doha ', 'Mumbai', '18:00:00', '14:25:00', 150, '2020-06-27', 4500),
('102', 'AB-0210', 'Mumbai', 'Doha', '14:25:00', '10:00:00', 220, '2020-07-24', 6500),
('102', 'AB-0303', 'Dubai', 'London', '16:50:00', '04:30:00', 100, '2020-11-01', 9800),
('102', 'AB-0909', 'Delhi', 'Mangalore', '16:50:00', '13:45:00', 125, '2020-06-25', 2500),
('102', 'AB-0981', 'Mumbai', 'London', '04:20:00', '16:36:00', 180, '2020-07-29', 12000),
('102', 'AB-1000', 'Delhi', 'Mumbai', '17:30:00', '15:30:00', 158, '2020-07-31', 2300),
('102', 'AB-1009', 'Doha', 'Mangalore', '13:55:20', '09:36:23', 199, '2020-09-03', 5500),
('102', 'AB-1056', 'Mumbai', 'Dubai', '17:15:00', '13:15:00', 120, '2020-06-12', 4780),
('102', 'AB-1057', 'Dubai', 'Mangalore', '21:00:00', '17:15:00', 220, '2020-06-28', 6500),
('102', 'AB-1114', 'Mangalore', 'Delhi', '18:50:00', '15:50:00', 175, '2020-08-14', 2000),
('102', 'AB-1960', 'Mangalore', 'Mumbai', '14:15:00', '11:45:00', 183, '2020-07-01', 2300),
('102', 'AB-2202', 'London', 'Mumbai', '19:30:00', '07:45:00', 250, '2020-08-28', 9900),
('102', 'AB-2627', 'London', 'Delhi', '10:30:00', '21:30:00', 150, '2020-06-06', 10200),
('102', 'AB-2701', 'Doha', 'Delhi', '14:30:00', '09:45:00', 155, '2020-06-10', 6780),
('102', 'AB-9998', 'Mumbai', 'Delhi', '11:15:00', '09:00:00', 180, '2020-06-18', 1890),
('102', 'AB-9999', 'Mangalore', 'Mumbai', '01:45:00', '11:30:00', 299, '2020-12-12', 3600),
('101', 'IX-0000', 'Mangalore', 'Delhi', '19:30:00', '16:10:00', 250, '2020-11-27', 3200),
('101', 'IX-0002', 'London', 'Mumbai', '21:00:00', '09:30:00', 248, '2020-06-30', 5700),
('101', 'IX-0003', 'Delhi', 'Mumbai', '21:00:00', '16:30:00', 240, '2020-07-25', 1300),
('101', 'IX-0005', 'Mangalore', 'Dubai', '17:15:00', '13:00:00', 255, '2020-07-17', 3400),
('101', 'IX-0007', 'Mangalore', 'Doha', '09:00:00', '13:00:00', 174, '2020-06-20', 4500),
('101', 'IX-0008', 'Doha', 'Mangalore', '18:00:00', '14:15:00', 250, '2020-06-21', 5500),
('101', 'IX-0014', 'Dubai', 'Mangalore', '16:35:00', '10:00:00', 300, '2020-06-30', 3400),
('101', 'IX-0070', 'Dubai', 'Mumbai', '17:00:00', '13:00:00', 195, '2020-07-18', 2000),
('101', 'IX-0098', 'Mumbai', 'Dubai', '18:00:00', '14:00:00', 178, '2020-07-19', 3670),
('101', 'IX-0110', 'Doha ', 'Mumbai', '18:00:00', '15:00:00', 180, '2020-08-04', 5600),
('101', 'IX-0120', 'Mumbai', 'Doha', '20:00:00', '16:00:00', 200, '2020-08-21', 4900),
('101', 'IX-0203', 'Mangalore', 'Mumbai', '10:30:00', '07:45:00', 168, '2020-07-17', 1500),
('101', 'IX-1111', 'Mumbai', 'London', '19:35:00', '07:55:00', 250, '2020-06-18', 5000),
('101', 'IX-1234', 'Dubai', 'Delhi', '21:30:00', '16:10:00', 250, '2020-10-20', 8790),
('101', 'IX-1289', 'Mangalore', 'Mumbai', '14:15:00', '12:25:00', 98, '2020-06-20', 1100),
('101', 'IX-2017', 'Dubai', 'Doha', '16:00:00', '14:00:00', 155, '2020-11-30', 1000),
('101', 'IX-2018', 'Dubai', 'Doha', '21:45:00', '19:35:00', 250, '2020-12-31', 1200),
('101', 'IX-2019', 'Delhi', 'Mangalore', '08:00:00', '05:30:00', 154, '2020-11-29', 1250),
('101', 'IX-2020', 'Mumbai', 'London', '06:55:00', '19:10:00', 250, '2020-12-19', 6200),
('101', 'IX-2309', 'Mumbai', 'Delhi', '13:55:00', '11:30:00', 124, '2020-06-16', 1350),
('101', 'IX-4499', 'Mumbai', 'Mangalore', '16:00:00', '13:45:00', 111, '2020-06-30', 1260),
('101', 'IX-9081', 'Delhi', 'London', '10:25:00', '20:45:00', 125, '2020-06-09', 13000),
('101', 'IX-9999', 'Mumbai', 'Mangalore', '17:10:00', '14:40:00', 246, '2020-07-09', 2800),
('103', 'JC-0001', 'Mumbai', 'Dubai', '19:29:00', '15:30:00', 155, '2020-07-23', 5800),
('103', 'JC-0002', 'Mumbai ', 'Mangalore', '17:15:00', '15:00:00', 200, '2020-07-14', 3800),
('103', 'JC-0003', 'Mangalore', 'Mumbai ', '09:30:00', '11:45:00', 198, '2020-07-24', 3400),
('103', 'JC-0009', 'Mumbai', 'London', '18:50:00', '06:25:00', 185, '2020-08-02', 9900),
('103', 'JC-0101', 'Dubai', 'Mumbai', '18:50:00', '14:20:00', 155, '2020-06-22', 5950),
('103', 'JC-0423', 'London', 'Doha', '06:30:00', '16:10:00', 50, '2020-12-01', 11000),
('103', 'JC-1000', 'Mumbai', 'Doha', '16:35:50', '12:30:00', 125, '2020-08-29', 6500),
('103', 'JC-1001', 'Doha', 'Mumbai', '21:00:00', '16:35:50', 225, '2020-08-28', 5670),
('103', 'JC-1011', 'Mumbai', 'Delhi', '17:15:00', '19:45:00', 147, '2020-07-24', 2890),
('103', 'JC-1012', 'Delhi', 'Mumbai', '22:45:00', '20:30:00', 175, '2020-07-18', 2300),
('103', 'JC-1420', 'London', 'Mumbai', '13:00:20', '11:10:00', 104, '2020-06-19', 10000),
('103', 'JC-1968', 'Mangalore', 'Delhi', '20:25:00', '18:00:00', 300, '2020-06-25', 4300),
('103', 'JC-1969', 'Delhi', 'Mangalore', '21:00:00', '19:25:00', 150, '2020-07-17', 4670),
('103', 'JC-2000', 'Mangalore', 'Doha', '17:15:00', '13:00:00', 250, '2020-08-20', 6700),
('103', 'JC-2001', 'Doha', 'Mangalore', '12:45:00', '16:45:00', 175, '2020-08-19', 7800),
('102', 'JC-2211', 'Doha', 'Mangalore', '10:55:00', '06:30:00', 150, '2020-10-10', 6890),
('103', 'JC-2222', 'Dubai', 'London', '10:30:00', '16:10:00', 250, '2020-11-09', 9800),
('103', 'JC-9995', 'Delhi', 'London', '05:20:00', '16:10:00', 180, '2020-09-19', 8900),
('103', 'JC-9999', 'Dubai', 'Doha', '22:45:00', '21:00:00', 250, '2020-10-10', 1400);

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `problem` longtext NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `email`, `fname`, `lname`, `contact`, `problem`, `status`) VALUES
(1, 'sam@gmail.com', 'Sam', 'Winchester', '333333333', 'Unable to check prior bookings', 'Resolved'),
(3, 'dean@gmail.com', 'Dean', 'Winchester', '123123123', 'Unable to book the tickets', 'Not Resolved'),
(4, 'mauli@gmail.com', 'Mauli', 'Chetti', '212212212', 'Website being shown as down as a result of which unable to check for my prior bookings.', 'Not Resolved'),
(5, 'pooja@gmail.com', 'Pooja', 'Mehta', '182182182', 'My bookings are not showing up on checking in phone but details are available while checking in computer', 'Resolved'),
(6, 'amar@yahoo.in', 'Aman', 'Mathur', '208208208', 'Website acting up in my tablet, unable to book my tickets', 'Resolved'),
(7, 'abc@gmail.com', 'Mahira', 'Pauline', '232323232', 'Not being able to book the flight', 'Resolved'),
(8, 'akshay@gmail.com', 'Akshay', 'Khanna', '878787878', 'Trouble with checking the previous bookings!!!!', 'Resolved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_flight_no`
--
ALTER TABLE `admin_flight_no`
  ADD KEY `admin_no` (`admin_no`),
  ADD KEY `admin_flight_no_ibfk_3` (`airline_code`),
  ADD KEY `flight_number` (`flight_number`);

--
-- Indexes for table `admin_help_no`
--
ALTER TABLE `admin_help_no`
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `complain_id` (`complain_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`emp_no`);

--
-- Indexes for table `airline_info`
--
ALTER TABLE `airline_info`
  ADD PRIMARY KEY (`a_code`);

--
-- Indexes for table `booking_info`
--
ALTER TABLE `booking_info`
  ADD KEY `f_code` (`f_code`),
  ADD KEY `pnumber` (`pnumber`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`pnumber`);

--
-- Indexes for table `flight_info`
--
ALTER TABLE `flight_info`
  ADD PRIMARY KEY (`flight_code`),
  ADD KEY `a_code` (`a_code`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_flight_no`
--
ALTER TABLE `admin_flight_no`
  ADD CONSTRAINT `admin_flight_no_ibfk_1` FOREIGN KEY (`admin_no`) REFERENCES `admin_login` (`emp_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_flight_no_ibfk_3` FOREIGN KEY (`airline_code`) REFERENCES `flight_info` (`a_code`),
  ADD CONSTRAINT `admin_flight_no_ibfk_4` FOREIGN KEY (`flight_number`) REFERENCES `flight_info` (`flight_code`);

--
-- Constraints for table `admin_help_no`
--
ALTER TABLE `admin_help_no`
  ADD CONSTRAINT `admin_help_no_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin_login` (`emp_no`),
  ADD CONSTRAINT `admin_help_no_ibfk_2` FOREIGN KEY (`complain_id`) REFERENCES `help` (`id`);

--
-- Constraints for table `booking_info`
--
ALTER TABLE `booking_info`
  ADD CONSTRAINT `booking_info_ibfk_1` FOREIGN KEY (`f_code`) REFERENCES `flight_info` (`flight_code`),
  ADD CONSTRAINT `booking_info_ibfk_2` FOREIGN KEY (`pnumber`) REFERENCES `customer_info` (`pnumber`);

--
-- Constraints for table `flight_info`
--
ALTER TABLE `flight_info`
  ADD CONSTRAINT `flight_info_ibfk_1` FOREIGN KEY (`a_code`) REFERENCES `airline_info` (`a_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
