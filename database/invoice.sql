-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2020 at 08:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'item',
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'hsn',
  `price` double NOT NULL DEFAULT 0,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '00.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `code`, `price`, `tax`, `created_at`, `updated_at`) VALUES
(1, 'item', 'hsn001', 0, 's', NULL, NULL),
(2, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(3, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(4, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(5, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(6, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(7, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(8, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(9, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(10, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(11, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(12, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(13, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(14, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(15, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(16, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(17, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(18, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(19, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(20, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(21, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(22, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(23, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(24, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(25, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(26, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(27, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(28, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(29, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(30, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(31, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(32, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(33, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(34, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(35, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(36, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(37, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(38, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(39, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(40, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(41, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(42, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(43, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(44, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(45, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(46, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(47, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(48, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(49, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(50, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(51, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(52, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(53, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(54, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(55, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(56, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(57, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(58, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(59, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(60, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(61, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(62, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(63, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(64, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(65, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(66, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(67, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(68, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(69, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(70, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(71, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(72, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(73, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(74, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(75, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(76, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(77, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(78, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(79, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(80, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(81, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(82, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(83, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(84, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(85, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(86, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(87, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(88, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(89, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(90, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(91, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(92, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(93, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(94, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(95, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(96, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(97, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(98, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(99, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(100, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(101, 'item', 'hsn', 0, '00.00', '2020-09-06 23:44:37', '2020-09-06 23:44:37'),
(102, 'sajid', 'saz001', 0, '5', '2020-09-07 05:05:18', '2020-09-07 05:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_09_03_053222_create_items_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sajid', 'mansari@bamko.net', '$2y$10$q/YXf8/1y5MokgfB8JJqj.VhbcFEQncJVQVNwuaQ6vXWxCJzONGSy', NULL, '2020-09-02 23:51:24', '2020-09-02 23:51:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
