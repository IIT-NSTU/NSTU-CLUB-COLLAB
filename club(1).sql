-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 10:45 PM
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
(28, 'Adventure Club', 30, 'adventure', 'adventure club', 'adventureClub.jpg'),
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
(4, 28, 'member'),
(4, 30, 'admin'),
(5, 29, 'member'),
(5, 32, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `post_id` int(100) NOT NULL,
  `comment_content` varchar(100) NOT NULL,
  `comment_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment_reply`
--

CREATE TABLE `comment_reply` (
  `reply_id` int(100) NOT NULL,
  `comment_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `post_id` int(100) NOT NULL,
  `reply_content` varchar(100) NOT NULL,
  `comment_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invitation`
--

CREATE TABLE `invitation` (
  `invite_id` int(100) NOT NULL,
  `club_id` int(100) NOT NULL,
  `invitedclub_id` int(100) NOT NULL,
  `invite_msg` varchar(100) NOT NULL,
  `invite_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invitation`
--

INSERT INTO `invitation` (`invite_id`, `club_id`, `invitedclub_id`, `invite_msg`, `invite_date`) VALUES
(1, 27, 28, 'its a invitation', '09.14.2022'),
(2, 28, 29, 'arman from advanture club', '09.14.2022');

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
(1, 1, 1000, 'yuyufg', 'checked', 9),
(4, 2, 89, 'tg6', 'not-checked', 10);

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
(19, 1, 28, 'this is a adventure club psot', 'adventureClub.jpg', 'private', '9-10-22'),
(20, 1, 27, 'Hello from drhupod', 'joined.png', 'private', '9-10-22'),
(26, 1, 27, 'new post dhrupod', '1_CDCeyYxNhl-VTM0-MtmC-Q.png', 'Public', '09.14.2022'),
(27, 4, 28, 'arman posted to advanture club 4,28', 'img.png', 'Public', '09.14.2022'),
(28, 4, 30, 'IIT CLUb\r\nArman\r\nClub id-30\r\nuser -id -4', '20210831_164205.jpg', 'Private', '09.14.2022'),
(29, 5, 32, 'Vorer Alo\r\nNitu\r\nClub id-32\r\nUser -id -5', 'IMG-20210717-WA0024.jpg', 'Private', '09.14.2022'),
(30, 5, 29, 'Debating CLub\r\nNItu\r\nClub id-29\r\nuser -id -5', 'IMG-20211203-WA0029.jpg', 'Private', '09.14.2022');

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
  `batch` int(100) NOT NULL,
  `is_validate` int(100) NOT NULL,
  `v_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `user_type`, `department`, `batch`, `is_validate`, `v_code`) VALUES
(1, ' ikra', 'ikra2514@student.nstu.edu.bd', '1ff1de774005f8da13f42943881c655f', 'Student', 'IIT', 14, 1, '577be93a'),
(2, 'nowkshi', 'nowkshi@student.nstu.edu.bd', '37693cfc748049e45d87b8c7d8b9aacd', 'student', 'CSE', 14, 0, ''),
(3, 'Rintu', 'rintu@student.nstu.edu.bd', '37693cfc748049e45d87b8c7d8b9aacd', 'student', 'IIT', 14, 0, ''),
(4, 'Arman', 'arman@student.nstu.edu.bd', '37693cfc748049e45d87b8c7d8b9aacd', 'student', 'EEE', 14, 1, ''),
(5, 'Nitu', 'nitu@student.nstu.edu.bd', '1ff1de774005f8da13f42943881c655f', 'student', 'Chemical', 13, 1, ''),
(6, 'Anupa', 'anupa@student.nstu.edu.bd', 'b6d767d2f8ed5d21a44b0e5886680cb9', 'student', 'English', 14, 0, '');

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
-- Indexes for table `club_members`
--
ALTER TABLE `club_members`
  ADD PRIMARY KEY (`user_id`,`club_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `comment_reply`
--
ALTER TABLE `comment_reply`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `invitation`
--
ALTER TABLE `invitation`
  ADD PRIMARY KEY (`invite_id`);

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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `comment_reply`
--
ALTER TABLE `comment_reply`
  MODIFY `reply_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `invitation`
--
ALTER TABLE `invitation`
  MODIFY `invite_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `userpayment_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;