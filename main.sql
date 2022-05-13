-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2021 at 06:09 AM
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
-- Database: `main`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`) VALUES
(1, 'alpha1'),
(2, 'beta'),
(3, 'gamma'),
(6, 'new1'),
(5, 'trashd');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `role` enum('user','manager') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `user_id`, `project_id`, `role`) VALUES
(1, 2, 1, 'manager'),
(2, 3, 2, 'manager'),
(3, 4, 1, 'user'),
(5, 5, 2, 'user'),
(8, 7, 5, 'user'),
(9, 3, 5, 'manager'),
(10, 3, 1, 'user'),
(11, 2, 5, 'manager'),
(12, 2, 3, 'user'),
(14, 8, 6, 'user'),
(15, 3, 6, 'manager'),
(16, 4, 3, 'manager'),
(17, 10, 1, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `assignee_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` enum('New','In Progress','Done') NOT NULL,
  `last_modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `project_id`, `assignee_id`, `name`, `status`, `last_modified`) VALUES
(1, 1, 4, 'make more tasks', 'Done', '2021-12-06 23:49:34'),
(2, 2, 3, 'make more users and tasks', 'New', '2021-12-06 21:46:40'),
(7, 5, 7, 'do shit yourself', 'New', '2021-12-06 21:46:40'),
(9, 6, 8, 'hello', 'New', '2021-12-06 21:46:40'),
(10, 3, 4, 'sefsef', 'Done', '2021-12-06 23:51:38'),
(11, 3, 4, 'sdfghjk', 'Done', '2021-12-07 00:47:08'),
(12, 1, 10, 'arstdy', 'Done', '2021-12-07 14:05:31'),
(13, 1, 10, 'setdhfdydrydry', 'In Progress', '2021-12-07 14:05:50'),
(14, 1, 2, 'fdrysssyey', 'In Progress', '2021-12-07 14:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', '528827e337787b2c6e14c14f3c841815bce26aad'),
(2, 'pma', 'f535f36194284d077750fccc76697bc7ccc8f719'),
(3, 'pmb', '8f3872227ad81caf5a3e85e731c3f5c97614ca09'),
(4, 'user1', '27a6cb1e3325c9f2c4d35d48165ee22226c6b848'),
(5, 'user2', '350aace99e52bba10d862aef17b107f40f217775'),
(7, 'durak', '46b755151381592e90ab13bf86443ba1210c86b7'),
(8, 'michael', '5761597f7b7b9165d9ed170ec2b922bfbda3e46f'),
(9, 'john', 'd0d12fc2849b41e5f40af1233603c998c3af9519'),
(10, 'mike', 'f1b2ebbfb71af383c110f9640e433f587591fb2b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`project_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assignee_id` (`assignee_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `roles_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`assignee_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tasks_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
