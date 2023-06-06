-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 06:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'mosleh', '123'),
(2, 'ahmed', '345');

-- --------------------------------------------------------

--
-- Table structure for table `appointements`
--

CREATE TABLE `appointements` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `fieldname` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `patient_number` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `ModifiedDate` datetime DEFAULT current_timestamp(),
  `room` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointements`
--

INSERT INTO `appointements` (`id`, `name`, `phone`, `doctorname`, `fieldname`, `day`, `time`, `doctor_id`, `patient_number`, `created_at`, `ModifiedDate`, `room`) VALUES
(1, 'mosleh', ' 01063808811', 'Mosleh', 'Heart', ' Wed-Sat', '12-3', NULL, NULL, '2023-05-29 15:15:55', '2023-05-29 18:15:55', NULL),
(5, 'mosleh', ' 123456789', 'Osama', 'Chest disease', ' Wed-Sun', '3-6', NULL, NULL, '2023-05-29 15:15:55', '2023-05-29 18:15:55', NULL),
(6, 'Adel', ' 01110440605', 'Mosleh', 'Heart', ' Wed-Sat', '12-3', NULL, NULL, '2023-05-29 15:15:55', '2023-05-29 18:15:55', NULL),
(7, 'Adel', ' 0101593429', 'Mosleh', 'Heart', ' Wed-Sat', '12-3', NULL, NULL, '2023-05-29 15:15:55', '2023-05-29 18:15:55', NULL),
(8, 'Adel', ' 12345678', 'Mosleh', 'Heart', ' Wed-Sat', '12-3', NULL, NULL, '2023-05-29 15:15:55', '2023-05-29 18:15:55', NULL),
(11, 'fdf', ' 12345678', 'Mosleh', 'Heart', ' Wed-Sat', '12-3', 1, NULL, '2023-05-29 15:15:55', '2023-05-29 18:15:55', NULL),
(14, 'edeffds', ' 12345678', 'Mosleh', 'Heart', ' Wed-Sat', '12-3', 1, 12345678, '2023-05-29 15:15:55', '2023-05-29 18:15:55', NULL),
(15, 'edeffds', ' 12345678', 'Mosleh', 'Heart', ' Wed-Sat', '12-3', 1, 12345678, '2023-05-29 15:15:55', '2023-05-29 18:15:55', NULL),
(16, 'sasa', ' 12345678', 'Mosleh', 'Heart', ' Wed-Sat', '12-3', 1, 12345678, '2023-05-29 15:15:55', '2023-05-29 18:15:55', NULL),
(19, '878', ' 12345678', 'Mosleh', 'Heart', ' Wed-Sat', '12-3', 1, NULL, '2023-05-29 15:15:55', '2023-05-29 18:15:55', NULL),
(20, 'Adel', ' 12345678', 'Mosleh', 'Heart', ' Wed-Sat', '12-3', 1, 12345678, '2023-05-29 15:15:55', '2023-05-29 18:15:55', NULL),
(21, 'fdf', ' 12345678', 'Mosleh', 'Heart', ' Wed-Sat', '12-3', 1, 12345678, '2023-05-29 15:15:55', '2023-05-29 18:15:55', NULL),
(22, 'wqwwwq', ' 12345678', 'Mosleh', 'Heart', ' Wed-Sat', '12-3', 1, 12345678, '2023-05-29 15:15:55', '2023-05-29 18:15:55', NULL),
(23, 'wqw', ' 12345678', 'Mosleh', 'Chest disease', ' 2121', 'as', 59, 12345678, '2023-05-29 16:06:54', '2023-05-29 19:06:54', 102),
(24, 'assa', ' 12345678', 'Mosleh', 'Chest disease', ' 2121', 'as', 59, 12345678, '2023-05-29 16:07:42', '2023-05-29 19:07:42', 102);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `fieldid` int(11) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `Day` varchar(255) DEFAULT NULL,
  `room_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `ModifiedDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `fieldid`, `price`, `time`, `Day`, `room_id`, `created`, `ModifiedDate`) VALUES
(59, 'Mosleh', 2, 'r443 ', 'as', '2121', 2, '2023-05-29 15:50:07', '2023-05-29 18:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`id`, `name`) VALUES
(1, 'Heart'),
(2, 'Chest disease');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_number`) VALUES
(1, 101),
(2, 102),
(3, 103);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `ModifiedDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `phone`, `password`, `email`, `created_at`, `ModifiedDate`) VALUES
('xczczxc434', 12345678, '12345678', 'mo@gmail.com', '2023-05-29 15:16:14', '2023-05-29 18:16:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointements`
--
ALTER TABLE `appointements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_doctor_id` (`doctor_id`),
  ADD KEY `FK_patient_number` (`patient_number`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fieldid` (`fieldid`),
  ADD KEY `FK_room_id` (`room_id`);

--
-- Indexes for table `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointements`
--
ALTER TABLE `appointements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointements`
--
ALTER TABLE `appointements`
  ADD CONSTRAINT `FK_doctor_id` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `FK_patient_number` FOREIGN KEY (`patient_number`) REFERENCES `users` (`phone`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `FK_room_id` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`),
  ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`fieldid`) REFERENCES `fields` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
