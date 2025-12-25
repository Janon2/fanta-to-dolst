-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2025 at 05:36 AM
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
-- Database: `user_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'phkhnanthphuykhasingh@gmail.com', '$2y$10$.0yBHXV8DZ6YyrQGxXGr0OITP2jTmA309.SvVP1hARcUzDpvpLiiu', '2025-12-24 16:49:27'),
(3, 'fanta', '$2y$10$738navNE4xoEwEKo9UyLA.zzEeZM9RZBBlefMEgr8LTZEh2JOluLK', '2025-12-24 16:50:17'),
(9, 'efenata2@gmail.com', '$2y$10$j55.YLUNla16ICPwfEsOOuetNNrb7h7jU6LRiJ27Lu26TQRV8tPzW', '2025-12-24 17:17:16'),
(11, 'hgjgjhfg', '$2y$10$BSU/5IjHx22byj0FcbsHzubMVVFto.pLBfMlYo8Cu2IdFXqYaDQ/6', '2025-12-24 17:17:39'),
(12, 'fann', '$2y$10$3p0li3tldZJUVlvDAT4kOum/pD3pc6XEROfoNHwQo/VHSNkr8CjZi', '2025-12-24 17:17:50'),
(15, 'pin', '$2y$10$KuuA1oX6rDcsa6Cg4SDzieF7NwOomLOLEnS8hMSVwN.1Izt83aXGq', '2025-12-25 03:39:10');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
