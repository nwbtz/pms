-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2018 at 05:52 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scpms`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `company` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `cname`, `email`, `company`, `phone`, `country`) VALUES
(1, 'Edwin Bruno', 'edwin@smartcodes.co.tz', 'Smart Codes', '+255765119119', 'Tanzania'),
(2, 'Jonas Njau', 'jonas@primus.com', 'PRM Media Group', '+211 6859 356', 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(10) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `dept_desc` varchar(100) NOT NULL,
  `color` varchar(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `dept_desc`, `color`, `created_at`, `updated_at`) VALUES
(1, 'management', 'management team', '#f2085d', '2018-09-05 11:48:21', '2018-09-05 14:48:21'),
(5, 'developers', 'management team', '#f2b008', '2018-09-05 12:00:48', '2018-09-05 15:00:48'),
(11, 'Creative', 'creative department', '#1fbd8d', '2018-09-05 12:03:51', '2018-09-05 15:03:51'),
(12, 'Smartlab', 'Smartlab', '#199c0d', '2018-09-06 04:20:17', '2018-09-06 07:20:17');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `user_id` varchar(12) NOT NULL,
  `title` varchar(100) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `room_id` int(10) NOT NULL,
  `capacity` int(10) NOT NULL,
  `client` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `user_id`, `title`, `start_date`, `end_date`, `room_id`, `capacity`, `client`, `status`, `description`, `color`, `created_at`, `updated_at`) VALUES
(1, '0', 'Primus', '2018-09-10 01:00:00', '2018-09-10 02:00:00', 0, 0, '', 1, '', 'blue', '2018-09-07 07:59:48', '0000-00-00 00:00:00'),
(2, '0', 'Mpaper IOS', '2018-09-04 00:00:00', '2018-09-04 00:00:00', 0, 0, '', 0, '', 'red', '2018-09-07 08:12:10', '0000-00-00 00:00:00'),
(3, '0', 'kWANZA', '2018-09-04 00:00:00', '2018-09-04 00:00:00', 0, 0, '', 0, '', 'yellow', '2018-09-07 08:12:43', '0000-00-00 00:00:00'),
(4, '0', 'ic', '2018-09-04 00:00:00', '2018-09-14 00:00:00', 0, 0, '', 0, '', 'violet', '2018-09-07 08:13:35', '0000-00-00 00:00:00'),
(5, '0', 'Insignia', '2018-09-04 00:00:00', '2018-09-07 00:00:00', 0, 0, '', 1, '', 'green', '2018-09-07 08:13:35', '0000-00-00 00:00:00'),
(6, '0', 'Mpaper web', '2018-09-07 03:00:00', '2018-09-07 05:00:00', 0, 0, '', 0, '', 'indigo', '2018-09-07 08:25:02', '0000-00-00 00:00:00'),
(7, '0', 'Miss Tz', '2018-09-02 03:00:00', '2018-09-02 04:00:00', 2, 12, 'Vodacom', 0, '', '', '2018-09-07 08:51:52', '2018-09-07 11:51:52'),
(8, '0', 'Zim paper', '2018-09-02 03:00:00', '2018-09-02 04:00:00', 2, 12, 'Vodacom', 0, '', '', '2018-09-07 08:52:23', '2018-09-07 11:52:23'),
(9, '0', 'Kilimo APP', '2018-09-07 03:00:00', '2018-09-07 04:00:00', 2, 12, 'Vodacom', 1, '', '', '2018-09-07 08:59:36', '2018-09-07 11:59:36'),
(10, '', 'Bill Board', '2018-09-10 03:00:00', '2018-09-10 05:30:00', 2, 12, 'Media Company', 0, '', '', '2018-09-10 07:36:18', '2018-09-10 10:36:18');

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
(1, '2018_09_14_074616_create_permission_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `p_category` varchar(255) NOT NULL,
  `p_owner` varchar(100) NOT NULL,
  `client` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `p_category`, `p_owner`, `client`, `start_date`, `end_date`, `filename`, `created_at`, `updated_at`) VALUES
(1, 'Primus', 'Media monitoring tool for all social media networks   Media monitoring tool for all social media networks  Media monitoring tool for all social media networks  Media monitoring tool for all social media networks', '3,4', '2', '2', '2018-09-04', '2018-10-04', NULL, '2018-09-13 12:19:04', '2018-09-13 12:19:04'),
(2, 'M-Paper', 'Online News Magazine and newspaper ,mobile and web applications', '1,2,3,4', '1', '1', '2018-05-04', '2018-11-29', NULL, '2018-09-13 12:23:34', '2018-09-13 12:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `project_cat`
--

CREATE TABLE `project_cat` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pdescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_cat`
--

INSERT INTO `project_cat` (`id`, `name`, `pdescription`) VALUES
(1, 'Android Application', ''),
(2, 'IOS Application', ''),
(3, 'Websites', ''),
(4, 'Web Application', '');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(2) NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `phone`, `role`, `status`, `department`, `created_at`, `updated_at`) VALUES
(1, 'Baraka Kaminyoge', 'admin@smartcodes.co.tz', NULL, '$2y$10$DV3yWDPslwMnJiM2/NG9vuA59P5FNuw6VlSNnU7C73vMz4OU0HpHS', 'WIaDB20S3dCbLPWv3c1Uohm6wp7BiBESTSMaoWD5BM7gJpPtk2CGdaz2f9oI', '', 0, 'Administrator', 1, '2018-09-04 08:50:32', '2018-09-04 08:50:32'),
(2, 'Juliana', 'juliana@gmail.com', NULL, '123456', NULL, '255755373473', 100, 'Developer', 5, '2018-09-05 12:33:13', '2018-09-05 12:33:13'),
(5, 'Herman', 'herman@smartcodes.co.tz', NULL, '123456', NULL, '255755337475', 100, 'Media Manager', 11, '2018-09-06 04:38:35', '2018-09-06 04:38:35'),
(6, 'Edwin Bruno', 'edwin@smartcodes.co.tz', NULL, '123456', NULL, '25575537343', 10, 'Founder & CEO', 1, '2018-09-06 04:40:57', '2018-09-06 04:40:57'),
(8, 'Baraka Kaminyoge', 'baraka@smartcodes.co.tz', NULL, '123456', NULL, '255765172123', 100, 'Developer', 5, '2018-09-10 07:14:20', '2018-09-10 07:14:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_cat`
--
ALTER TABLE `project_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_cat`
--
ALTER TABLE `project_cat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
