-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2026 at 12:50 PM
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
-- Database: `safe_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`) VALUES
(1, 'Sarah', 'Love the dates!Thanks!'),
(2, 'Jana', 'Wonderful Delivery!!'),
(3, 'Saleh', 'A bit expensive, but it is worth it!\r\n'),
(4, '.', 'alert(1)');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `credit_card` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `credit_card`) VALUES
(6, 'lana', '$2y$10$dQCD.u4nL9nhzivMjo/7jOfVxjKj0HBcz8t8Bt795sP6S1lgtuF3K', 'user', 'lana044@gmail.com', 'pNLERHuRpt1nigkd3ooBS0QxWkw0Tzc2YkliV21EVnU5TTVvc3c9PQ=='),
(7, ' SalehUser', '$2y$10$iypLoPD7GvknsZnBr17UGe2oiMh83fkCF.rbHSB/kpkLOSMs1XvN2', 'user', 'salehuser@gmail.com', 'jPSlcFw8Csuo2l9aLO3kOmNuSjZ6T1VITjlWQ2d5aEVZR0xXWFF6QmJTRzIzZkVuZ242K3lrbjk1dG89'),
(8, 'sarah044', '$2y$10$MivNDljzbwvHikZ8tYr3bO7pdj5w95OLhaEAHcZh/LlYPZJClMEyW', 'admin', 'sarah044@gmail.com', 'sNR5SIJNOAb7KQsWuzFwRWVOSUxaQlE1MVpUeVBmbE8yaGs2Ym9CK2E0d0Frc2t0U1Urd0c0ZEgwaGc9'),
(9, 'RehafAdmin', '$2y$10$XNlSn9hQxxNdjhW0yQ4mTOBxDz35uPJ/g7Duk6z8rVH.kNzM.qNm6', 'admin', 'rehafadmin@gmail.com', 'VxnObygBOC6aRfwR7JVWV3NYL3VOaG91TzdyTTdHV3VYbFhmSjZhWFc5ODdTa1F2ckhBcEdIajV2UGc9'),
(10, 'HajarAlmeleehan', '$2y$10$fzZg1KT8q4DezCCk28fLMuxNje8VDOVFXhq0lf1inZF6L1VB5KoqK', 'admin', 'hajaralmeleehan@gmail.com', 'f1JZ7zTcHrViW6TAuanDQWhVR2xVL2Z4V0pvenBWWUlNT1R0UHZoOVpkTjlBakpIREhPbFY3MUVFaHc9'),
(11, 'Jana0022', '$2y$10$pOW7PO5WGJGwsm9ve18AWOT9ZsxSfXzU3fHky2ZAmIxYwoOuUewyW', 'admin', 'jana0022@gmail.com', 'l4yBn6h/MxdS8XUENzrGBEdZblNCczhpVmNDYnh0S2xtYUxFVUV2QXVJRHVXTyt1dEVJVkNqTXhUNW89');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
