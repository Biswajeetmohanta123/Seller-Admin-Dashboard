-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 06:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internshipproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `costomer_master`
--

CREATE TABLE `costomer_master` (
  `costomer_id` int(100) NOT NULL,
  `costomer_name` varchar(100) NOT NULL,
  `costomer_address` varchar(100) NOT NULL,
  `costomer_email` varchar(100) NOT NULL,
  `costomer_contact` varchar(100) NOT NULL,
  `gst_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `costomer_master`
--

INSERT INTO `costomer_master` (`costomer_id`, `costomer_name`, `costomer_address`, `costomer_email`, `costomer_contact`, `gst_type`) VALUES
(8, 'raja', 'kjr', 'raja@gmail.com', '837774646', 'gst'),
(10, 'Biswajeet', 'rrpur', 'biswa123@gmail.com', '7735113945', 'gst'),
(11, 'ram', 'qwe', 'raja@gmail.com', '12345', 'igst');

-- --------------------------------------------------------

--
-- Table structure for table `login_master`
--

CREATE TABLE `login_master` (
  `no` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_master`
--

INSERT INTO `login_master` (`no`, `username`, `password`) VALUES
(1, 'Biswajeet', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_master`
--

CREATE TABLE `purchase_master` (
  `purchase_id` int(100) NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `invoice_date` date NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_amount` decimal(10,2) NOT NULL,
  `gst_amount` decimal(10,2) NOT NULL,
  `cgst_amount` decimal(10,2) NOT NULL,
  `sgst_amount` decimal(10,2) NOT NULL,
  `discount_amount` decimal(10,2) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_master`
--

INSERT INTO `purchase_master` (`purchase_id`, `invoice_number`, `invoice_date`, `vendor_name`, `service_name`, `service_amount`, `gst_amount`, `cgst_amount`, `sgst_amount`, `discount_amount`, `total`) VALUES
(61, '1234123', '2023-10-31', 'Biswajeet', 'dev', 123456.00, 30864.00, 15432.00, 15432.00, 1234.00, 153086),
(62, '0', '2024-01-19', 'biswa', 'dev', 32000.00, 8000.00, 0.00, 0.00, 800.00, 39200),
(63, '0', '2024-01-13', 'arjun', 'fooding', 8000.00, 2460.80, 0.00, 0.00, 800.00, 9661),
(64, '0', '2024-01-04', 'arjun', 'fooding', 32000.00, 9843.20, 0.00, 0.00, 800.00, 41043),
(65, '0', '2024-01-12', 'Biswajeet', 'closting', 123456.00, 74900.76, 37450.38, 37450.38, 2000.00, 196357),
(66, '0', '2024-01-18', 'biswa', 'closting', 8000.00, 4853.60, 2426.80, 2426.80, 10.00, 12844),
(67, '0', '2024-01-12', 'biswa', 'closting', 8000.00, 4853.60, 2426.80, 2426.80, 10.00, 12844),
(68, '0', '2024-01-13', 'biswa', 'dev', 8000.00, 2000.00, 0.00, 0.00, 10.00, 9990),
(69, '0', '2024-01-14', 'Biswajeet', 'dev', 50000.00, 12500.00, 6250.00, 6250.00, 10.00, 62490),
(70, '0', '2024-02-04', 'biswa', 'hostel', 123456.00, 22222.08, 11111.04, 11111.04, 12.00, 145666),
(71, '0', '2024-01-04', 'arjun', 'closting', 50000.00, 30335.00, 0.00, 0.00, 800.00, 79535),
(72, '0', '2024-01-12', 'arjun', 'closting', 32000.00, 19414.40, 0.00, 0.00, 10.00, 51404),
(73, '0', '2024-01-05', 'arjun', 'closting', 32000.00, 19414.40, 0.00, 0.00, 800.00, 50614),
(74, 'INV5555', '2024-01-12', 'arjun', 'closting', 32000.00, 19414.40, 0.00, 0.00, 800.00, 50614),
(75, 'INV44444444', '2024-01-05', 'biswa', 'dev', 4444.00, 1111.00, 555.50, 555.50, 222.00, 5333),
(76, 'INV6758', '2024-01-03', 'Biswajeet', 'dev', 8000.00, 2000.00, 1000.00, 1000.00, 100.00, 9900);

-- --------------------------------------------------------

--
-- Table structure for table `sale_master`
--

CREATE TABLE `sale_master` (
  `sale_id` int(100) NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `invoice_date` date NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_amount` decimal(65,0) NOT NULL,
  `gst_amount` decimal(65,0) NOT NULL,
  `cgst_amount` decimal(65,0) NOT NULL,
  `sgst_amount` decimal(65,0) NOT NULL,
  `discount_amount` decimal(65,0) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sale_master`
--

INSERT INTO `sale_master` (`sale_id`, `invoice_number`, `invoice_date`, `customer_name`, `service_name`, `service_amount`, `gst_amount`, `cgst_amount`, `sgst_amount`, `discount_amount`, `total`) VALUES
(17, '765432', '2023-10-31', 'Biswajeet', 'dev', 50000, 12500, 6250, 6250, 1200, 61300),
(18, '75757', '2024-01-13', 'Biswajeet', 'dev', 8000, 2000, 1000, 1000, 800, 9200),
(19, '12', '2024-01-04', 'Biswajeet', 'closting', 50000, 30335, 15168, 15168, 800, 79535),
(20, '333333333', '2024-01-13', 'Biswajeet', 'drinks', 32000, 8960, 4480, 4480, 10, 40950),
(21, 'INV4567', '2024-01-02', 'raja', 'drinks', 8000, 2240, 1120, 1120, 800, 9440);

-- --------------------------------------------------------

--
-- Table structure for table `service_master`
--

CREATE TABLE `service_master` (
  `service_id` int(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `gst_per` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_master`
--

INSERT INTO `service_master` (`service_id`, `service_name`, `gst_per`) VALUES
(17, 'hostel', 18.00),
(19, 'drinks', 28.00),
(20, 'closting', 60.67),
(21, 'medicine', 50.45),
(22, 'fooding', 30.76),
(23, 'dev', 25.00);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_master`
--

CREATE TABLE `vendor_master` (
  `vendor_id` int(100) NOT NULL,
  `vendor_name` varchar(100) NOT NULL,
  `vendor_address` varchar(100) NOT NULL,
  `vendor_email` varchar(100) NOT NULL,
  `vendor_contact` varchar(100) NOT NULL,
  `gst_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_master`
--

INSERT INTO `vendor_master` (`vendor_id`, `vendor_name`, `vendor_address`, `vendor_email`, `vendor_contact`, `gst_type`) VALUES
(11, 'arjun', 'bpd', 'sagar@gmail.com', '7735113945', 'igst'),
(12, 'sagar', 'bpd', 'sagar@gmail.com', '7735113945', 'igst'),
(14, 'biswa', 'bpd', 'raja@gmail.com', '7735113945', 'gst'),
(15, 'biswa', 'bpd', 'sagar@gmail.com', '6537363783', 'igst'),
(19, 'Biswajeet', 'rrpur', 'biswa123@gmail.com', '1234567', 'gst');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costomer_master`
--
ALTER TABLE `costomer_master`
  ADD PRIMARY KEY (`costomer_id`);

--
-- Indexes for table `login_master`
--
ALTER TABLE `login_master`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `purchase_master`
--
ALTER TABLE `purchase_master`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `sale_master`
--
ALTER TABLE `sale_master`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `service_master`
--
ALTER TABLE `service_master`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `vendor_master`
--
ALTER TABLE `vendor_master`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costomer_master`
--
ALTER TABLE `costomer_master`
  MODIFY `costomer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login_master`
--
ALTER TABLE `login_master`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_master`
--
ALTER TABLE `purchase_master`
  MODIFY `purchase_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `sale_master`
--
ALTER TABLE `sale_master`
  MODIFY `sale_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `service_master`
--
ALTER TABLE `service_master`
  MODIFY `service_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `vendor_master`
--
ALTER TABLE `vendor_master`
  MODIFY `vendor_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
