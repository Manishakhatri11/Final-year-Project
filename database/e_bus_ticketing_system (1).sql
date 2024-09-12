-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 04:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_bus_ticketing_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `bus_id` int(100) NOT NULL,
  `bus_number` varchar(100) NOT NULL,
  `bus_description` varchar(500) NOT NULL,
  `departure_time` varchar(50) NOT NULL,
  `reach_time` varchar(50) NOT NULL,
  `bus_image` varchar(60) NOT NULL,
  `bus_type` varchar(20) NOT NULL,
  `pickup_points` varchar(20) NOT NULL,
  `route_point` varchar(30) NOT NULL,
  `bus_created` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`bus_id`, `bus_number`, `bus_description`, `departure_time`, `reach_time`, `bus_image`, `bus_type`, `pickup_points`, `route_point`, `bus_created`) VALUES
(155, 'AAAA 1111', ' AAAA 1111: luxury. Plush glide, cool swirl, world blurs. Whispered service, pampered every need. Not a number, a journey. Unforgettable comfort rolls. Catch 4A, 4 1s, escape awaits.', '05: 00 A.M', '11: 45 AM', 'bus1.jpg', 'Tourist', 'Boudha', 'Kathmandu-Chitwan', '2023-07-30 17:27:09.115065'),
(156, 'BBBB 2222', '8:15am symphony. Plush, cool, wifi hums. City fades. Book paints landscapes. Yearning whispers: sun, wind. But lullaby, undiscovered notes.', '08: 00 AM', '03:00 PM', 'bus2.jpg', 'Tourist', 'Thali', 'Kathmandu-Pokhara', '2023-07-30 18:13:49.266990'),
(157, 'CCCC', 'Imagine a first-class cabin on wheels: plush recliners, your own TV and Wi-Fi, gourmet meals served ', '07:00AM', '09:00 AM', 'bus6.jpg', 'Deluxe', 'Jorpati', 'Kathmandu-Mustang', '2023-07-31 03:17:58.430714');

-- --------------------------------------------------------

--
-- Table structure for table `reservation1`
--

CREATE TABLE `reservation1` (
  `session_id` varchar(16) NOT NULL,
  `seat_id` varchar(16) NOT NULL,
  `user_id` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation2`
--

CREATE TABLE `reservation2` (
  `session_id` varchar(16) NOT NULL,
  `seat_id` varchar(16) NOT NULL,
  `user_id` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `session_id` bigint(20) NOT NULL,
  `seat_id` varchar(16) NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seat_id` varchar(16) NOT NULL,
  `bus_id` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seat_id`, `bus_id`) VALUES
('A1', '155'),
('A1', '156'),
('A1', '157'),
('A2', '155'),
('A2', '156'),
('A2', '157'),
('A3', '155'),
('A3', '156'),
('A3', '157'),
('A4', '155'),
('A4', '156'),
('A4', '157'),
('A5', '155'),
('A5', '156'),
('A5', '157'),
('A6', '155'),
('A6', '156'),
('A6', '157'),
('A7', '155'),
('A7', '156'),
('A7', '157'),
('A8', '155'),
('A8', '156'),
('A8', '157'),
('B1', '155'),
('B1', '156'),
('B1', '157'),
('B2', '155'),
('B2', '156'),
('B2', '157'),
('B3', '155'),
('B3', '156'),
('B3', '157'),
('B4', '155'),
('B4', '156'),
('B4', '157'),
('B5', '155'),
('B5', '156'),
('B5', '157'),
('B6', '155'),
('B6', '156'),
('B6', '157'),
('B7', '155'),
('B7', '156'),
('B7', '157'),
('B8', '155'),
('B8', '156'),
('B8', '157'),
('C1', '155'),
('C1', '156'),
('C1', '157'),
('C2', '155'),
('C2', '156'),
('C2', '157'),
('C3', '155'),
('C3', '156'),
('C3', '157'),
('C4', '155'),
('C4', '156'),
('C4', '157'),
('C5', '155'),
('C5', '156'),
('C5', '157'),
('C6', '155'),
('C6', '156'),
('C6', '157'),
('C7', '155'),
('C7', '156'),
('C7', '157'),
('C8', '155'),
('C8', '156'),
('C8', '157'),
('D1', '155'),
('D1', '156'),
('D1', '157'),
('D2', '155'),
('D2', '156'),
('D2', '157'),
('D3', '155'),
('D3', '156'),
('D3', '157'),
('D4', '155'),
('D4', '156'),
('D4', '157'),
('D5', '155'),
('D5', '156'),
('D5', '157'),
('D6', '155'),
('D6', '156'),
('D6', '157'),
('D7', '155'),
('D7', '156'),
('D7', '157'),
('D8', '155'),
('D8', '156'),
('D8', '157');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` bigint(20) NOT NULL,
  `bus_id` varchar(16) NOT NULL,
  `session_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `bus_id`, `session_date`) VALUES
(1, '155', '2077-06-05 08:00:00'),
(2, '156', '2024-01-13 14:06:08'),
(3, '157', '2024-01-13 14:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `phone`, `password`, `usertype`) VALUES
(13, 'wang', 'wangbutamang44@gmail.com', '81818181', '1212', 'admin'),
(14, 'Nupur Khadgi', 'nupurkhadgi21@gmail.com', '9823849939', 'nupur@', 'user'),
(27, 'Rakesh Tamang', 'rakesh12@gmail.com', '9818556677', 'rakesh@123', 'user'),
(31, 'Penzin tamang', 'penzin@gmail.com', '12121212', '1234', 'user'),
(37, 'Kiran Tamang', 'kiran@gmail.com', '1212123434', '123456', 'user'),
(46, 'Tashi lama', 'tashi@gmail.com', '9818232323', '1234', 'user'),
(49, 'Apple', 'apple@gmail.com', '87876565', 'apple123', 'user'),
(54, 'Manisha Khatri', 'manisha123@gmail.com', '9898982626', 'Manisha123@', 'user'),
(55, 'Sabina', 'sabina123@gmail.com', '9817263746', 'Sabina123@', 'user'),
(56, 'Ani ani', '123@gmail.com', '11112222333', 'Aniani123@gmail.com', 'user'),
(57, 'Pradip', '11111@gmail.com', '0000000000', 'pradip@123gmail.com', 'user'),
(60, 'Hari Karki', 'harikarki123@gmail.com', '9823849999', 'Harikarki@123', 'user'),
(61, 'Hrishit', 'hrishit12@gmail.com', 'abcd', 'Hrishit@12', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `reservation1`
--
ALTER TABLE `reservation1`
  ADD PRIMARY KEY (`session_id`,`seat_id`,`user_id`);

--
-- Indexes for table `reservation2`
--
ALTER TABLE `reservation2`
  ADD PRIMARY KEY (`seat_id`,`session_id`,`user_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`session_id`,`seat_id`,`user_id`) USING BTREE;

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seat_id`,`bus_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `room_id` (`bus_id`),
  ADD KEY `session_date` (`session_date`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `bus_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `session_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
