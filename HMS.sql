-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 25, 2024 at 05:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `guardian_phone_number` varchar(15) NOT NULL,
  `guardian_passport` varchar(255) NOT NULL,
  `guardian_type` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone_number`, `dob`, `guardian_name`, `guardian_phone_number`, `guardian_passport`, `guardian_type`, `status`, `created_at`) VALUES
(1, 'kenabey', 'kenab@gmail.com', 'hello@123', '9842742225', '2023-06-06', 'Kalpana Karki', '9841535026', '123 456 678', 'Parent', 'Active', '2024-04-23 13:06:53');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `message_type` varchar(20) NOT NULL,
  `date_posted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `message`, `message_type`, `date_posted`) VALUES
(2, 'Also, please bring your own water bottles.', 'Breakfast', '2024-05-02 16:22:52'),
(7, 'Please bring water bottle', 'Lunch', '2024-05-08 11:21:20'),
(8, 'Rahul is not invited.', 'Dinner', '2024-05-08 11:29:30');

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `food_id` int(50) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `food_type` varchar(50) NOT NULL,
  `food_category` varchar(50) NOT NULL,
  `food_cuisine` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`food_id`, `food_name`, `food_type`, `food_category`, `food_cuisine`) VALUES
(1, 'Chowmein but this is just a test as well', 'Noodle Dish', 'Non-vegetarian / Vegetarian', 'Chinese Cuisine'),
(2, 'Chi. Thakali Rice', 'Rice Dish', 'Non-vegetarian / Vegetarian', 'Nepali or Himalayan Cuisine'),
(3, 'Veg Thakali Rice Set', 'Rice Dish', 'Vegetarian', 'Nepali or Himalayan Cuisine'),
(4, 'Momo', 'Dumpling', 'Non-vegetarian / Vegetarian', 'Himalayan or Tibetan Cuisine'),
(5, 'Burger', 'Fast Food', 'Non-vegetarian / Vegetarian', 'International Fast Food'),
(6, 'Coke', 'Beverage', 'Non-vegetarian / Vegetarian', 'International Beverage'),
(7, 'Fanta', 'Beverage', 'Non-vegetarian / Vegetarian', 'International Beverage'),
(8, 'Sprite', 'Beverage', 'Non-vegetarian / Vegetarian', 'International Beverage'),
(9, 'Pasta', 'Spicy Pasta Dish ', 'Vegetarian', 'Italian Cuisine'),
(16, 'Quick Noodles', 'Non-vegetarian / Vegetarian', 'Noodle Dish', 'Varies'),
(17, 'Milk Masala Tea', 'Tea', 'Non-vegetarian / Vegetarian', 'Indian or South Asian'),
(18, 'Black Masala Tea', 'Tea', 'Non-vegetarian / Vegetarian', 'Indian or South Asian'),
(19, 'Lemon Tea', 'Tea', 'Non-vegetarian / Vegetarian', 'Varies'),
(20, 'Fries', 'Snacks', 'Non-vegetarian / Vegetarian', 'International Fast Food'),
(21, 'Nachos', 'Snacks', 'Non-vegetarian / Vegetarian', 'Mexican'),
(30, 'Adding just for test', 'Adding just for test', 'Non-vegetarian / Vegetarian', 'Adding just for test');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `room_img` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `bed_type` varchar(255) NOT NULL,
  `toilet` varchar(255) NOT NULL,
  `air_conditioning` varchar(10) NOT NULL,
  `internet` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_img`, `room_type`, `bed_type`, `toilet`, `air_conditioning`, `internet`) VALUES
(1, 'https://www.hostelworld.com/blog/wp-content/uploads/2018/09/hostel-room-types-5.jpg', 'Dorms', 'bunk', '1', 'Yes', ''),
(2, 'https://qph.cf2.quoracdn.net/main-qimg-6a3df0b7530bbffc02ac3f198851db1d-lq', 'Individual', 'Self', '1', 'No', '5G'),
(3, 'https://images-cdn.ubuy.co.in/647b2bdb4cdc9a6dba4b3687-upper-and-lower-bunk-bed-double-bed.jpg', 'Shared', 'Joint', '1', 'Yes', '5G'),
(4, 'https://fancyhouse-design.com/wp-content/uploads/2023/11/In-this-bedroom-the-luxury-headboard-with-plush-upholstery-commands-attention..jpg', 'Luxury Suite', 'King', '2', 'Yes', '5G'),
(11, 'https://cdn.pixabay.com/photo/2021/06/11/12/25/woman-6328466_1280.jpg', 'asd', 'Queen', '2', 'No', '5G'),
(12, 'https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA4L3Jhd3BpeGVsb2ZmaWNlNF9waG90b19vZl9hX2ZyYW1lX2luX3RoZV9saXZpbmdfcm9vbV9pbl90aGVfc3R5bF85YWM1MjY1ZS02OTdjLTQ4OWMtYTFmYS03NzgzMjJlMTEwODNfMi5qcGc.jpg', 'Normal', 'Queen', '1', 'No', '5G');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `course` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `guardian_phone_number` varchar(15) NOT NULL,
  `guardian_citizen` varchar(255) NOT NULL,
  `guardian_type` varchar(50) NOT NULL,
  `food_category` varchar(10) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `approved` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`, `course`, `password`, `phone_number`, `dob`, `guardian_name`, `guardian_phone_number`, `guardian_citizen`, `guardian_type`, `food_category`, `status`, `created_at`, `approved`) VALUES
(49, 'This is just a test', 'kenab@gmail.com', 'Male', 'Computer Science', 'hello@123', '9842742225', '2003-06-06', 'Kalpana Karki', '9842742225', '123123', 'Parent', 'Non - Veg', 'Inactive', '2024-04-23 13:55:23', 'Yes'),
(61, 'Avsek KC', 'avsek@gmail.com', 'Male', 'Computer Science', 'hello@123', '9810298376', '2003-12-05', 'George Kc', '9816253415', '123123123', 'Parent', 'Veg', 'Active', '2024-04-26 16:36:25', 'Yes'),
(62, 'Niraj Chaudhary', 'niraj@gmail.com', 'Male', 'Computer Science', 'hello@123', '9887651029', '2003-06-05', 'Steward Chaudhary', '9716289503', '123123', 'Parent', 'Veg', 'Inactive', '2024-04-26 16:38:34', 'Yes'),
(64, 'Pragati Bista', 'pragati@gmail.com', 'Female', 'Computer Science', 'hello@123', '9844076609', '2004-06-30', 'Saru Bista', '9876152345', '1268712312', 'Parent', 'Veg', 'Active', '2024-04-27 02:43:22', 'Yes'),
(66, 'Pranima Dhakal', 'pranima@gmail.com', 'Female', 'Computer Science', 'asd', '9810294857', '2003-04-04', 'Sam Dhakal', '9809182736', '2135643', 'Parent', 'Non - Veg', 'Pending', '2024-04-28 07:02:32', 'Yes'),
(69, 'Buddha Lama', 'buddha@gmail.com', 'Male', 'Computer Science', 'hello@123', '9840928726', '2024-04-18', 'Sita Lama', '9842742225', '12091287', 'Parent', 'Non - Veg', 'Pending', '2024-04-28 07:24:05', 'Yes'),
(77, 'Kenab K.C.', 'kebab.bahadur@gmail.coms', 'Male', 'Hotel Management', 'qwe', '9842742225', '2024-05-03', 'qwe', '9842742225', '123', 'Parent', 'Non - Veg', 'Pending', '2024-05-06 11:38:59', 'Rejected'),
(78, 'yogesh', 'ybs@gmail.com', 'Male', 'Hotel Management', 'asdfgh123', '9842742226', '2024-05-07', 'NARAYAN', '9842742227', '1234546678', 'Sibling', 'Non - Veg', 'Inactive', '2024-05-08 05:32:35', 'Yes'),
(79, 'barun', 'barun@gmail.com', 'Male', 'Computer Science', 'asd', '9842742225', '2024-05-02', 'asd ', '9842742225', '123123123', 'Parent', 'Non - Veg', 'Active', '2024-05-12 08:32:46', 'Yes'),
(81, 'Test', 'test@gmail.com', 'Male', 'Bachelors in IT', 'asdasdasd', '9841029384', '2003-06-06', 'Test Test', '9841230918', '17564925', 'Parent', 'Non - Veg', 'Pending', '2024-05-20 08:52:34', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `food_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
