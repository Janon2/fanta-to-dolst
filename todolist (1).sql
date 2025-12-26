-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2025 at 06:54 PM
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
-- Database: `todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `status` varchar(128) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task`, `status`) VALUES
(60, 'ปวดหัวกูอยากนอน', 'pending');

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
(15, 'pin', '$2y$10$KuuA1oX6rDcsa6Cg4SDzieF7NwOomLOLEnS8hMSVwN.1Izt83aXGq', '2025-12-25 03:39:10'),
(16, '@#!$%^&*()_-  erre', '$2y$10$JygihsWXLnJ5dyflwmGLV.cR8nsd1.V04Ws3jlzUg5tm7vb5Bq1K2', '2025-12-25 05:21:52'),
(17, 'ถภ-ุถ345345e', '$2y$10$u8que5feOVXFCGAxTF9C8u2WU75Io.TPSuWEFrNKmmomoYvioYTHS', '2025-12-25 05:25:20'),
(22, 'ีเรเนว', '$2y$10$6AxEcoIj6ChunfBImQz/iOOh.qoS6Li69R7ytWzFNjNbSZyKb8m/m', '2025-12-25 05:27:19'),
(23, 'gigh \\igou\\', '$2y$10$aSrBSyhkaTmb7ZT0ptqgf.9Mc53.8MiMHqLdMngcwz2eIpjaIqOjK', '2025-12-25 05:27:41'),
(28, 'ff', '$2y$10$7oqyMfU3Ia09y6EonDszdeAF5fkGUi0i8D9yj9Rp9VhpJh42f1BA6', '2025-12-25 15:40:50'),
(29, 'fff', '$2y$10$4T1M5nYqiQYcVewK3wvkDecFTSmqipUxrgHYFOg2jHQFhwSMNMW7G', '2025-12-25 15:41:06'),
(30, 'ffg', '$2y$10$b5a.kZIUWzIjzOJ3yW9FfO5qJTgsjR4Ngz.4DFAJbxtyqtWSuvD8C', '2025-12-25 16:38:06'),
(31, 'ffH', '$2y$10$ZIl9KdBD04rVTA/ENrDPTe/EPbC1GLvR75KHyWy8LWsQAODaFkyO6', '2025-12-25 16:41:18'),
(32, 'fantaERT', '$2y$10$pUH8l.q.5.ghMvgbO2MuWOZ1JAW.If6s8261EK.DnL2Xp/QyUmCFe', '2025-12-25 16:44:14');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
