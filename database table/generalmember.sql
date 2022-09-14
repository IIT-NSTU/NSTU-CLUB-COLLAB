-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 07:52 PM
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
-- Database: `clubcollab`
--

-- --------------------------------------------------------

--
-- Table structure for table `generalmember`
--

CREATE TABLE `generalmember` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `wing` varchar(20) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generalmember`
--

INSERT INTO `generalmember` (`id`, `name`, `status`, `wing`, `picture`) VALUES
(1, 'Sourav Barman', 'active', 'Performance', 'sourav.jpg'),
(2, 'Siyam', 'active', 'Relationship', 'siyam.jpg'),
(3, 'Razu Biswas', 'none', 'general', 'razu.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `generalmember`
--
ALTER TABLE `generalmember`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `generalmember`
--
ALTER TABLE `generalmember`
  ADD CONSTRAINT `generalmember_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pay` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
