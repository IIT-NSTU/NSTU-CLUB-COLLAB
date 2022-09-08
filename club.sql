-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 12:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `club`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubmonthypayment`
--

CREATE TABLE `clubmonthypayment` (
  `payment_id` int(100) NOT NULL,
  `club_id` int(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `pay_number` int(100) NOT NULL,
  `totall` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clubmonthypayment`
--

INSERT INTO `clubmonthypayment` (`payment_id`, `club_id`, `month`, `year`, `pay_number`, `totall`) VALUES
(1, 27, 'jan', '2000', 1814940719, 0),
(2, 28, 'jan', '2000', 19876654, 0);

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `club_id` int(100) NOT NULL,
  `club_name` varchar(100) NOT NULL,
  `totall_members` int(100) NOT NULL,
  `club_type` varchar(100) NOT NULL DEFAULT 'cultural',
  `club_description` varchar(100) NOT NULL,
  `club_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`club_id`, `club_name`, `totall_members`, `club_type`, `club_description`, `club_image`) VALUES
(27, 'Drupod', 80, 'cultural', 'Band and singing club', 'dhrupod.jpg'),
(28, 'Adventure Club', 30, 'adventure', 'adventure club', 'dhrupod.jpg'),
(29, 'Debating Club', 70, 'educational', 'Debating Club nitu', 'dhrupod.jpg'),
(30, 'IIT Club', 90, 'educational', ' programming', 'dhrupod.jpg'),
(31, 'Eshti kutum', 80, 'cultural', 'Draeing club', 'dhrupod.jpg'),
(32, 'Vorer alo', 90, 'social', 'Helping club', 'dhrupod.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `club_members`
--

CREATE TABLE `club_members` (
  `user_id` int(100) NOT NULL,
  `club_id` int(100) NOT NULL,
  `member_type` varchar(100) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club_members`
--

INSERT INTO `club_members` (`user_id`, `club_id`, `member_type`) VALUES
(4, 28, 'admin'),
(5, 29, 'admin'),
(4, 30, 'admin'),
(5, 32, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `user_id` int(100) NOT NULL,
  `payment_id` int(100) NOT NULL,
  `payment_ammount` int(100) NOT NULL,
  `transiction_number` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL DEFAULT 'not-checked',
  `userpayment_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`user_id`, `payment_id`, `payment_ammount`, `transiction_number`, `payment_status`, `userpayment_no`) VALUES
(1, 1, 1000, 'yuyufg', 'checked', 9);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `club_id` int(100) NOT NULL,
  `post_caption` varchar(100) NOT NULL,
  `post_picture` varchar(100) NOT NULL,
  `post_status` varchar(100) NOT NULL DEFAULT 'private',
  `post_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `club_id`, `post_caption`, `post_picture`, `post_status`, `post_time`) VALUES
(17, 1, 27, 'kjhgfsd', 'jpined.png', 'public', '09.08.2022');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `batch` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `user_type`, `department`, `batch`) VALUES
(1, 'IKRA CHOWDHURY NOWKSHI', 'ikra2514@student.nstu.edu.bd', '34173cb38f07f89ddbebc2ac9128303f', 'student', 'IIT', 14),
(2, 'nowkshi', 'nowkshi@student.nstu.edu.bd', '37693cfc748049e45d87b8c7d8b9aacd', 'student', 'CSE', 14),
(3, 'Rintu', 'rintu@student.nstu.edu.bd', '37693cfc748049e45d87b8c7d8b9aacd', 'student', 'IIT', 14),
(4, 'Arman', 'arman@student.nstu.edu.bd', '37693cfc748049e45d87b8c7d8b9aacd', 'student', 'EEE', 14),
(5, 'Nitu', 'nitu@student.nstu.edu.bd', '1ff1de774005f8da13f42943881c655f', 'student', 'Chemical', 13),
(6, 'Anupa', 'anupa@student.nstu.edu.bd', 'b6d767d2f8ed5d21a44b0e5886680cb9', 'student', 'English', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubmonthypayment`
--
ALTER TABLE `clubmonthypayment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`userpayment_no`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubmonthypayment`
--
ALTER TABLE `clubmonthypayment`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `club_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `userpayment_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
