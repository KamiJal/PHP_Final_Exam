-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 04:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamijalexam`
--
CREATE DATABASE IF NOT EXISTS `kamijalexam` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kamijalexam`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_01_04_014316_create_task_10_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `task_06`
--

CREATE TABLE `task_06` (
  `id` int(10) UNSIGNED NOT NULL,
  `info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task_06`
--

INSERT INTO `task_06` (`id`, `info`) VALUES
(1, 'C#'),
(2, 'C++'),
(3, 'PHP'),
(4, 'Java'),
(5, 'JavaScript'),
(6, 'Python'),
(7, 'Objective-C'),
(8, 'Swift');

-- --------------------------------------------------------

--
-- Table structure for table `task_09`
--

CREATE TABLE `task_09` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `task_10`
--

CREATE TABLE `task_10` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `body_brand` varchar(20) NOT NULL,
  `weight` int(10) UNSIGNED NOT NULL,
  `doors_count` tinyint(3) UNSIGNED NOT NULL,
  `horse_power` smallint(5) UNSIGNED NOT NULL,
  `year_of_issue` smallint(5) UNSIGNED NOT NULL,
  `average_fuel_consumption` double(4,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task_10`
--

INSERT INTO `task_10` (`id`, `name`, `body_brand`, `weight`, `doors_count`, `horse_power`, `year_of_issue`, `average_fuel_consumption`, `created_at`, `updated_at`) VALUES
(1, 'Mitsubishi FTO', 'DE3A', 1150, 2, 180, 1994, 8.20, NULL, NULL),
(2, 'Subaru Impreza', 'GF8', 1185, 5, 125, 1998, 12.10, NULL, NULL),
(3, 'Hyundai i30', 'GD', 1220, 5, 130, 2015, 9.50, NULL, NULL),
(4, 'Volkswagen Tiguan', '5N1', 1646, 5, 180, 2015, 11.60, NULL, NULL),
(5, 'Volkswagen Passat', '3B2', 1585, 4, 193, 1999, 16.20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task_12_images`
--

CREATE TABLE `task_12_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `task_12_users`
--

CREATE TABLE `task_12_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `secure_hash` char(60) NOT NULL,
  `ip_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `task_06`
--
ALTER TABLE `task_06`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_09`
--
ALTER TABLE `task_09`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_10`
--
ALTER TABLE `task_10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_12_images`
--
ALTER TABLE `task_12_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_12_users_id` (`user_id`);

--
-- Indexes for table `task_12_users`
--
ALTER TABLE `task_12_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ip_address` (`ip_address`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task_06`
--
ALTER TABLE `task_06`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task_09`
--
ALTER TABLE `task_09`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task_10`
--
ALTER TABLE `task_10`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task_12_images`
--
ALTER TABLE `task_12_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task_12_users`
--
ALTER TABLE `task_12_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `task_12_images`
--
ALTER TABLE `task_12_images`
  ADD CONSTRAINT `task_12_users_id` FOREIGN KEY (`user_id`) REFERENCES `task_12_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
