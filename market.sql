-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2022 at 10:57 AM
-- Server version: 10.3.10-MariaDB-log
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `description` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `name`, `user_id`, `category_id`, `description`, `contact`, `image`) VALUES
(26, '1', 2, 1, '2', '1', 'images/26.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'computers'),
(2, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `map_markers`
--

CREATE TABLE `map_markers` (
  `id` int(10) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `title` varchar(100) NOT NULL,
  `info` varchar(500) NOT NULL,
  `icon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `map_markers`
--

INSERT INTO `map_markers` (`id`, `latitude`, `longitude`, `title`, `info`, `icon`) VALUES
(1, 54.8921, 23.3048, 'test', '<a href=\"example.com\">link to garbage webpage</a>', 'custom_markers/info.png'),
(2, 54.9921, 23.3048, 'test2', 'this is one half', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(2, 'user1@example.com', '24b0fba747b27ebc183aff09407cff2267c1af2a', 'User 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `map_markers`
--
ALTER TABLE `map_markers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `map_markers`
--
ALTER TABLE `map_markers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `announcements_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `announcements_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
