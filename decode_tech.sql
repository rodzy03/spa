-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2021 at 06:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `decode_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `r_business_type`
--

CREATE TABLE `r_business_type` (
  `business_type_id` int(11) NOT NULL,
  `business_type` varchar(50) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL,
  `active_flag` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_business_type`
--

INSERT INTO `r_business_type` (`business_type_id`, `business_type`, `created_date`, `updated_date`, `active_flag`) VALUES
(1, 'Digital App', '2021-06-17 09:19:55', '2021-06-17 15:19:01', 1),
(2, 'Offline Service', '2021-06-17 09:19:55', '2021-06-17 15:19:01', 1),
(3, 'Crypto Service', '2021-06-17 09:20:53', '2021-06-17 15:20:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `r_services`
--

CREATE TABLE `r_services` (
  `services_id` int(11) NOT NULL,
  `services_name` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT NULL,
  `active_flag` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_services`
--

INSERT INTO `r_services` (`services_id`, `services_name`, `created_date`, `updated_date`, `active_flag`) VALUES
(1, 'HRM', '2021-06-17 09:54:17', '2021-06-17 15:52:26', 1),
(2, 'EMAIL AND DOMAIN', '2021-06-17 09:54:17', '2021-06-17 15:52:26', 1),
(3, 'WORK FLOW MANAGER', '2021-06-17 09:54:17', '2021-06-17 15:52:26', 1),
(4, 'PRODUCT DEVELOPMENT TOOLS', '2021-06-17 09:54:17', '2021-06-17 15:52:26', 1),
(5, 'DEV OPS INTRA', '2021-06-17 09:54:17', '2021-06-17 15:52:26', 1),
(6, 'OFFLINE ADMIN SERVICES', '2021-06-17 09:54:17', '2021-06-17 15:52:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_clients`
--

CREATE TABLE `t_clients` (
  `client_id` int(11) NOT NULL,
  `client_email` varchar(50) DEFAULT NULL,
  `client_name` varchar(50) DEFAULT NULL,
  `business_type_id` int(11) DEFAULT NULL,
  `services_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `update_date` datetime DEFAULT NULL,
  `active_flag` int(11) DEFAULT 1,
  `email_verified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_clients`
--

INSERT INTO `t_clients` (`client_id`, `client_email`, `client_name`, `business_type_id`, `services_id`, `message`, `created_date`, `update_date`, `active_flag`, `email_verified_at`) VALUES
(3, 'duterterodelb@gmail.com', 'Rodel', 1, 1, 'asdasd', '2021-06-17 12:14:42', NULL, 1, NULL),
(4, 'duterterodelb@gmail.com', 'Rodel', 1, 1, 'asdasd', '2021-06-17 12:15:12', NULL, 1, NULL),
(5, 'duterterodelb@gmail.com', 'Rodel', 1, 1, 'asdasd', '2021-06-17 12:15:42', NULL, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `r_business_type`
--
ALTER TABLE `r_business_type`
  ADD PRIMARY KEY (`business_type_id`);

--
-- Indexes for table `r_services`
--
ALTER TABLE `r_services`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `t_clients`
--
ALTER TABLE `t_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `r_business_type`
--
ALTER TABLE `r_business_type`
  MODIFY `business_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `r_services`
--
ALTER TABLE `r_services`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_clients`
--
ALTER TABLE `t_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
