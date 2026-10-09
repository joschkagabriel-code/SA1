-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2026 at 09:36 AM
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
-- Database: `task_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `task_date` date NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `status`, `task_date`, `created_at`) VALUES
(1, 'Finish activity', 'pending', '2026-10-08', '2026-10-08 08:00:00'),
(2, 'Review lesson', 'completed', '2026-10-08', '2026-10-08 09:00:00'),
(3, 'Work on assignment', 'pending', '2026-10-08', '2026-10-08 10:00:00'),
(4, 'Study confusing topics', 'pending', '2026-10-07', '2026-10-07 08:30:00'),
(5, 'Submit pending activity', 'completed', '2026-10-07', '2026-10-07 11:00:00'),
(6, 'Practice coding', 'pending', '2026-10-06', '2026-10-06 09:00:00'),
(7, 'Organize things', 'completed', '2026-10-06', '2026-10-06 13:00:00'),
(8, 'Prepare for quiz', 'pending', '2026-10-08', '2026-10-08 07:00:00'),
(11, 'Watch lecture recordings', 'completed', '2026-10-11', '2026-10-08 13:00:00'),
(12, 'Finalize project', 'pending', '2026-10-13', '2026-10-08 09:00:00'),
(13, 'Prepare presentation slides', 'pending', '2026-10-09', '2026-10-09 11:00:00'),
(14, 'Submit final project updates', 'pending', '2026-10-15', '2026-10-08 08:30:00'),
(15, 'Review notes for class', 'pending', '2026-10-15', '2026-10-09 10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `email`, `created_at`) VALUES
(1, 'Demo', 'Demo User', 'demouser@gmail.com', '2026-10-08 08:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
