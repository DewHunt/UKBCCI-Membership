-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 10:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukbcci_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attandence`
--

CREATE TABLE `attandence` (
  `id` int(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `business_name` varchar(30) NOT NULL,
  `business_address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attandence`
--

INSERT INTO `attandence` (`id`, `first_name`, `surname`, `business_name`, `business_address`, `email`, `contact`, `created_at`) VALUES
(104, 'Samiraa', 'Jahan', 'Ladies Corner', 'Mirpur', 'samira.giantssoft@gmail.com', '012544', '2023-12-31 11:15:27'),
(106, 'Samiraa', 'Akhter', 'Carnesia', 'Mirpur', 'samirashammi67@gmail.com', '012544', '2024-01-01 12:40:02'),
(107, 'Samiraa', 'Akhter', 'Carnesia', 'Mirpur', 'salman.giantssoft@gmail.com', '012544', '2024-01-04 14:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `member_list`
--

CREATE TABLE `member_list` (
  `id` int(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `business_type` varchar(30) NOT NULL,
  `establish_year` int(30) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `business_address` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `website` varchar(100) NOT NULL,
  `employee_number` int(50) NOT NULL,
  `business_references` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member_list`
--

INSERT INTO `member_list` (`id`, `first_name`, `last_name`, `company_name`, `business_type`, `establish_year`, `telephone`, `business_address`, `mobile`, `fax`, `email`, `website`, `employee_number`, `business_references`) VALUES
(2, 'Samira', 'Shammi', 'Giantssoft Solution', 'Software Company', 2015, '015896365456', 'Mirpur\r\nMirpur-10', '012544', '', 'samira.giantssoft@gmail.com', 'http://lgiantssoft.com', 16, ''),
(3, 'Samira Jahan', 'Shammi', 'Elipos System', 'Software Company', 2015, '158963244', '21 North St, Bridgtown, Cannock, UK,  WS11 0BB            ', '015896325545', '6525066262', 'samira.giantssoft@gmail.com', 'https://elipos.co.uk/', 25, 'MD. ABC'),
(6, 'Samiraa', 'fdtyry', 'yryu', '', 0, '', 'Mirpur\r\nMirpur-10', '012544', '', 'samira.giantssoft@gmail.com', '', 10, ''),
(7, 'Samiraa', 'fdtyry', 'yryu', '', 0, '', 'Mirpur\r\nMirpur-10', '012544', '', 'samira.giantssoft@gmail.com', '', 10, ''),
(8, 'Samiraa', 'fdh', 'gh', '', 0, '', 'Mirpur\r\nMirpur-10', '012544', '', 'samira.giantssoft@gmail.com', '', 12, ''),
(9, 'Samiraa', 'fdh', 'gh', '', 0, '', 'Mirpur\r\nMirpur-10', '012544', '', 'samira.giantssoft@gmail.com', '', 12, '');

-- --------------------------------------------------------

--
-- Table structure for table `stall`
--

CREATE TABLE `stall` (
  `id` int(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `business_name` varchar(30) NOT NULL,
  `business_address` varchar(30) NOT NULL,
  `business_email` varchar(30) NOT NULL,
  `business_contact` varchar(30) NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT current_timestamp(5) ON UPDATE current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stall`
--

INSERT INTO `stall` (`id`, `first_name`, `surname`, `business_name`, `business_address`, `business_email`, `business_contact`, `created_at`) VALUES
(25, 'Samiraa', 'Akhter', 'Carnesia', 'Mirpur', 'samira.giantssoft@gmail.com', '012544', '2023-12-31 06:56:15.62403');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attandence`
--
ALTER TABLE `attandence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_list`
--
ALTER TABLE `member_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stall`
--
ALTER TABLE `stall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attandence`
--
ALTER TABLE `attandence`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `member_list`
--
ALTER TABLE `member_list`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stall`
--
ALTER TABLE `stall`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
