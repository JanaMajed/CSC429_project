-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2026 at 06:39 PM
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
-- Database: `unsafe_db`
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
(5, 'Saleh', 'Might be expensive, but it is worth it!');

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
(1, 'sarah044', 'ec26202651ed221cf8f993668c459d46', 'admin', 'sarah044@gmail.com', '1111222233334444'),
(2, 'RehafAdmin', '91ce64a57bd9823630a6e893e83b2434', 'admin', 'rehafadmin@gmail.com', '2222333344445555'),
(3, 'HajarAlmeleehan', '11023768840e9ce36ce90495d943045', 'admin', 'hajaralmeleehan@gmail.com', '3333444455556666'),
(4, 'Jana0022', 'f7b3f1599b9508bdf1d069ffa38f49cc', 'admin', 'jana0022@gmail.com', '4444555566667777'),
(5, 'SalehUser', '6a60e2585fec30b0e9f0df4188aa7c3c', 'user', 'salehuser@gmail.com', '5555666677778888'),
(6, 'Lamar', '925921eb602e596af266a2c23c2bf77b', 'user', 'lamar1@gmail.com', '1112223333444'),
(7, 'xiaoyunwang', '925921eb602e596af266a2c23c2bf77b', 'user', 'xiaoyunwang@gmail.com', '666777788889999');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
