-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2024 at 05:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `guardian_phone_number` varchar(15) NOT NULL,
  `guardian_passport` varchar(255) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone_number`, `dob`, `guardian_name`, `guardian_phone_number`, `guardian_passport`, `user_type`, `created_at`) VALUES
(1, '', '', '', '9808055786', '2027-01-04', '', '', '', '', '2024-04-12 09:50:44'),
(3, '', '', '', '9807779563', '2027-01-04', '', '', '', '', '2024-04-12 09:53:44'),
(4, 'suman', 'suman@gmail.com', 'suman', '9808989899', '2022-06-03', 'jajaj', '', '6777', 'Parent', '2024-04-12 10:04:14'),
(5, 'gahha', 'tahga@gmail.com', 'abcdef', '9808989899', '2016-06-16', 'gaga', '9888787877', '567890', 'Parent', '2024-04-12 10:08:05'),
(6, 'Rahul', 'ry1858576@gmail.com', 'ASDFGH', '9807779563', '2025-05-12', 'FAFA', '9888787877', '123445', 'Parent', '2024-04-12 10:39:22'),
(7, 'Rahul', 'ry1858576@gmail.com', 'ASDFGH', '9807779563', '2025-05-12', 'FAFA', '9888787877', '123445', '5', '2024-04-12 10:39:28'),
(8, 'Rahul', 'kenabkc48@gmail.com', 'asdfgh', '9808055786', '2026-05-12', 'FAFA', '9888787877', '12345', '4', '2024-04-12 10:45:09'),
(9, 'userAdmin', 'NP03CS4S230040@heraldcollege.edu.np', 'asdfghj', '9842742225', '2028-01-03', 'laplap', '9888787877', '123456', '5', '2024-04-12 10:49:53');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('Student','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
