-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2026 at 06:38 PM
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
(2, 'Sarah', 'Love the dates! Thanks\r\n'),
(3, 'Jana', 'Wonderful delivery!!'),
(5, 'Saleh', 'Might be expensive, but it is worth it!'),
(20, '.', 'alert(1)'),
(21, '.', 'alert(\"XSS\")');

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
(6, 'SalehUser', '$2y$10$mm5z5PC7DgFma63Bn2CEmOvsvdrJAMCFOqfWzOC7V4Z5qlrLoRaoO', 'user', 'salehuser@gmail.com', 'fKShxMJqQFUar2z81unwbWxlT3BWR1N0OUZVdjdvL1F3NXNWQnEvQzVlQ3VJSUpkdlpnai8yb1RHdlE9'),
(7, 'sarah044', '$2y$10$xWRCwEw3hqDb22zeyph5ve8N61X.cvzxr9L6IPxW0658nY8yUxx3.', 'admin', 'sarah044@gmail.com', 'CIxRa/bxZe1MuQ7Pv3A6VXpUR1R3VDh1cU93Skl4NTdXTVZqZ1NZZTYzTzFHT3I3bzE4T3dZcEgySjg9'),
(8, 'RehafAdmin', '$2y$10$TEHfubtk8iE74rW9Bk2MeOW3oxmcq53TXr70Dg/47h909kWTL8U/2', 'admin', 'rehafadmin@gmail.com', 'BzAktcd3X6iBQ5DRq77+VEZtdGpPdmQzQU1XVEU4UXRBK0NucDAzY05NOXBTc0pJdGhjc0thMzJSUTA9'),
(9, 'HajarAlmeleehan', '$2y$10$cX.eG6uOaM2hPYUGBGvk6.prikqyJwrMdhd5lGeoZ.fGe.Qk3/IaK', 'admin', 'hajaralmeleehan@gmail.com', 'HDRRmBCApwuSzDBbNYGYikpEWFAvYzBUVWFYMVF0MnZ5eURjKytya2JuYnBWbTd5cmYzSmtHTGhBVTQ9'),
(10, 'Jana123', '$2y$10$kLSK6LVdP..Rf1L7YlbpIecpxPhyeRT4/1CzDJGxTekZ2v0SsEo16', 'admin', 'jana0022@gmail.com', 'Zu2tGwnPu1bCYtHo63J/HnMrSGFlK21paXU1ZHFpMVhnb0N3S2pVV2U1dFEwc3ZlMVJ3ZDBPblhuSDg9'),
(11, 'Lamar', '$2y$10$WWzkq1DiXQiHR6zAT.nazeDlb3xS8IpL0yak75qpzcJU6rxni1wLu', 'user', 'Lamar@gmail.com', '2FWPUwsTaf2zL753pUSNelE0TFhHMitlME8zQ2xnYmVUMW9rTFE9PQ=='),
(12, 'Niels Provos', '$2y$10$dMGxpVj0JAh673ZNWXMSYeWTXe8A9XgzC.tRzgTdh0BcBW/fmIjSW', 'user', 'bcryptPreventsSameHashing@gmail.com', 'IekNvjRUy6W5nzabG+iwfEE1eDlrVkVBYjNLd0I0RFF1cWFlUHc9PQ==');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
