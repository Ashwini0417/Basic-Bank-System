-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 08:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `amount` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `amount`) VALUES
(1, 'Anil', 'anil@gmail.com', 65000),
(2, 'Soni', 'soni@gmail.com', 40000),
(3, 'Pavankumar', 'pavan@gmail.com', 45000),
(4, 'Kiran', 'kiran@gmail.com', 70000),
(5, 'Pranav', 'pranav@gmail.com', 55000),
(6, 'Omkar', 'omkar@gmail.com', 60000),
(7, 'Aditya', 'adi@gmail.com', 50000),
(8, 'Varad', 'varad@gmail.com', 70000),
(9, 'Aishwarya', 'aish@gmail.com', 90000),
(10, 'Sameer', 'sam@gmail.com', 60000),
(11, 'Nishtha', 'nishtha@gmail.com', 75000),
(12, 'Rahul', 'rahul@gmail.com', 65000),
(13, 'Shubham', 'shubham@gmail.com', 60000),
(14, 'Anujya', 'anu@gmail.com', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `id` int(3) NOT NULL,
  `fromuser` text NOT NULL,
  `touser` text NOT NULL,
  `transamount` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`id`, `fromuser`, `touser`, `transamount`) VALUES
(1, 'Sameer', 'Aishwarya', 40000),
(2, 'Soni', 'Aditya', 40000),
(3, 'Omkar', 'Nishtha', 80000),
(4, 'Pavankumar', 'kiran', 10000),
(5, 'Pranav', 'Soni', 100000),
(6, 'Aditya', 'Omkar', 50000),
(7, 'Varad', 'Aishwarya', 80000),
(8, 'Anil', 'Rupa', 50000),
(9, 'Sameer', 'Nishtha', 10000),
(10, 'Soni', 'Omkar', 20000),
(11, 'Anil', 'Soni', 10000),
(12, 'Kiran', 'Soni', 10000),
(13, 'Rahul', 'Soni', 10000),
(14, 'Rahul', 'Pranav', 15000),
(15, 'Shubham', 'Nishtha', 15000),
(16, 'Shubham', 'Anujya', 10000),
(17, 'Anujya', 'Sameer', 50000),
(18, 'Shubham', 'Kiran', 50000),
(19, 'Kiran', 'Shubham', 40000),
(20, 'Pavankumar', 'Anil', 5000),
(21, 'Omkar', 'Aishwarya', 40000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
