-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2024 at 09:43 AM
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
-- Database: `lerosho`
--

-- --------------------------------------------------------

--
-- Table structure for table `disabled`
--

CREATE TABLE `disabled` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` text NOT NULL,
  `county` varchar(11) NOT NULL,
  `disability_type` varchar(255) NOT NULL,
  `contact_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disabled`
--

INSERT INTO `disabled` (`id`, `name`, `age`, `gender`, `county`, `disability_type`, `contact_info`) VALUES
(1, 'Zakayo', 26, 'male', 'Narok', 'Deaf', '0112345678'),
(2, 'Mark', 14, 'male', 'Nairobi', 'Dump', '0712345678'),
(3, 'Rose', 56, 'female', 'Kajiado', 'Lame', '0154237653'),
(4, 'Nancy', 35, 'female', 'Narok', 'Cripled', '0713245687'),
(5, 'Wycliff', 24, 'male', 'Makueni', 'Deaf', '0187654321'),
(6, 'Roseline', 35, 'female', 'Kiambu', 'Lame', '0745237642'),
(7, 'Frankline', 15, 'male', 'Nyeri', 'Dump', '0798765432'),
(8, 'Daniel', 26, 'male', 'Samburu', 'Deaf', '07134257634'),
(9, 'Nathan', 19, 'male', 'Mombasa', 'Dump', '0736854321'),
(10, 'Maggy', 43, 'female', 'Kiambu', 'Dump', '0732458658'),
(11, 'Kelvin', 17, 'male', 'Mombasa', 'Dumb', '0723092490');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_preference` varchar(255) NOT NULL,
  `font_size` enum('small','medium','large') NOT NULL DEFAULT 'medium',
  `color_scheme` enum('light','dark') NOT NULL DEFAULT 'light'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'Lerosho', '0712345678', 'lerosho@gmail.com', '1234'),
(2, 'Burming', '0721980578', 'burmingisimale@gmail.com', 'Burming#20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disabled`
--
ALTER TABLE `disabled`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disabled`
--
ALTER TABLE `disabled`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
