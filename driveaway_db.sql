-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2025 at 03:11 PM
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
-- Database: `driveaway_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL,
  `selection` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pickupdate` datetime NOT NULL,
  `returndate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `selection`, `full_name`, `email`, `phone`, `pickupdate`, `returndate`) VALUES
(38, 'Mercedes Benz', 'Abraham AB', 'abrahamlinc@gmail.com', '0246575651', '2025-02-19 00:00:00', '2025-02-21 00:00:00'),
(39, 'Mercedes Benz', 'Abraham AB', 'abrahamlinc@gmail.com', '0246575651', '2025-02-19 00:00:00', '2025-02-21 00:00:00'),
(40, 'Mercedes Benz', 'Abraham AB', 'abrahamlinc@gmail.com', '0246575651', '2025-02-19 00:00:00', '2025-02-21 00:00:00'),
(41, 'Mercedes Benz', 'Abraham', 'dominicnjangnabe42@gmail.com', '0551283612', '2025-02-10 00:00:00', '2025-02-13 00:00:00'),
(42, 'Mercedes Benz', 'Abraham', 'dominicnjangnabe42@gmail.com', '0551283612', '2025-02-28 00:00:00', '2025-03-05 00:00:00'),
(43, 'Mercedes Benz', 'Abraham', 'abrahamlinc@gmail.com', '0246575651', '2025-02-10 00:00:00', '2025-02-27 00:00:00'),
(44, 'Rolls Royce', 'Dominic njangnabe', 'dominicnjangnabe42@gmail.com', '0551283612', '2025-02-04 00:00:00', '2025-02-13 00:00:00'),
(45, 'Toyota vits', 'Abraham', 'dominicnjangnabe42@gmail.com', '0551283612', '2025-01-30 00:00:00', '2025-02-20 00:00:00'),
(46, 'Rolls Royce', 'Abraham', 'abrahamlinc@gmail.com', '0551283612', '2025-01-31 00:00:00', '2025-02-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `full_name`, `email`, `phone`, `message`) VALUES
(11, 'Abraham', 'abrahamlinc@gmail.com', '0241655636', 'Abraham posted in the group that we are meeting. Are you guys not coming to the meeting today? If no, what is your reasons of saying no? If yes come we are waiting for you guys'),
(12, 'Abraham', 'abrahamlinc@gmail.com', '0241655636', 'Abraham posted in the group that we are meeting. Are you guys not coming to the meeting today? If no, what is your reasons of saying no? If yes come we are waiting for you guys'),
(13, 'Dominic njangnabe', 'abrahamlinc@gmail.com', '0551283612', 'What is this'),
(14, 'Dominic njangnabe', 'abrahamlinc@gmail.com', '0551283612', 'What is this'),
(15, 'Dominic njangnabe', 'abrahamlinc@gmail.com', '0551283612', 'What was that? '),
(16, 'Dominic njangnabe', 'abrahamlinc@gmail.com', '0551283612', 'What was that? '),
(17, 'Dominic njangnabe', 'abrahamlinc@gmail.com', '0551283612', 'Yes, I was part of the meeting yesterday\r\n'),
(18, 'Dominic njangnabe', 'abrahamlinc@gmail.com', '0551283612', 'Yes, I was part of the meeting yesterday\r\n'),
(23, 'Dominic njangnabe', 'dominicnjangnabe42@gmail.com', '0551283612', 'The message goes here'),
(24, 'Dominic njangnabe', 'dominicnjangnabe42@gmail.com', '0551283612', 'The message goes here'),
(25, 'Abraham', 'dominicnjangnabe42@gmail.com', '0551283612', 'Okay oo'),
(26, 'Abraham', 'dominicnjangnabe42@gmail.com', '0551283612', 'Okay oo'),
(27, 'Dominic njangnabe', 'dominicnjangnabe42@gmail.com', '0551283612', 'The map is your guide'),
(29, 'Abraham AB', 'abrahamlinc@gmail.com', '0551236124', 'It was yesterday ');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `license_number` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `first_name`, `last_name`, `email`, `phone`, `license_number`, `created_at`) VALUES
(2, 'Dominic', 'Evaristus', 'dominicnjangnabe42@gmail.com', '0551283612', '2023 latest', '2025-01-27 00:00:00'),
(3, 'Abraham ', 'Nayepoan', 'abrahamlinc@gmail.com', '0246575651', '2164897', '2025-02-04 00:00:00'),
(4, 'Abraham ', 'Nayepoan', 'abrahamlinc@gmail.com', '0246575651', '2164897', '2025-02-08 00:00:00'),
(5, 'Abraham ', 'Nayepoan', 'abrahamlinc@gmail.com', '0246575651', '2164897', '2025-01-29 00:00:00'),
(6, 'Stanley', 'Kofi', 'stanley@gmail.com', '0551283612', '2164897', '2025-01-30 00:00:00'),
(7, 'Abraham', 'Nayepoan', 'abrahamlinc@gmail.com', '0246575651', '2025 latest', '2025-02-11 00:00:00'),
(9, 'Dominic', 'Nayepoan', 'abrahamlinc@gmail.com', '0551283612', '2024 latest', '2025-01-30 00:00:00'),
(11, 'Dominic', 'Evaristus', 'dominicnjangnabe42@gmail.com', '0551283612', '2025 latest', '2025-02-15 00:00:00'),
(17, 'Dominic', 'Nayepoan', 'abrahamlinc@gmail.com', '0551283612', '2024 latest', '2025-02-04 00:00:00'),
(18, 'Dominic', 'Nayepoan', 'abrahamlinc@gmail.com', '0551283612', '2024 latest', '2025-02-04 00:00:00'),
(21, 'Kundi', 'Stanley', 'stanley@gmail.com', '0551236124', 'TC012325', '2025-02-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`) VALUES
(24, 'Dominic Evaristus', '0551283612'),
(25, 'Dominic Spiderman', '055124836'),
(27, 'Dominic Evaristus', '0551243612'),
(28, 'Dominic Spiderman', '055124361');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `signup_id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `confirm_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`signup_id`, `email`, `username`, `password`, `confirm_password`) VALUES
(18, 'kofi@gmail.com', 'Dominic Spiderman', '$2y$10$nXbnModlmrWT3wY78VJYBeaLaASMz71LCcWt.JmWCsbAuTXt3VdQ2', ''),
(19, 'dominicnjangnabe42@gmail.com', 'Dominic Spiderman', '$2y$10$MlN63mjSUdvUc3VrnfMjqeB6QiMOeovAqiP0Mg2bWds5hZVAWaNeO', ''),
(20, 'stanley@gmail.com', 'jessica', '$2y$10$ho9vN.w4SRp9F9csy0ESxuImNPhz86O9i1rvYXtnDmOOzNpzkccMS', ''),
(21, 'dominicnjangnabe42@gmail.com', 'Dominic1Don', '$2y$10$VYOIoET.ABfOlhQxdTq3rOxeQZeVyYse0gjW2b36S/3ugGTOfW9mu', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`signup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `signup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
