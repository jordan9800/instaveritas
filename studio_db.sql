-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 19, 2020 at 08:53 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `booking_id` int(10) UNSIGNED NOT NULL,
  `studio_id` int(10) UNSIGNED NOT NULL,
  `booking_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int(10) UNSIGNED NOT NULL,
  `booked_by` int(10) UNSIGNED NOT NULL,
  `booking_status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `bookings_booking_id_unique` (`booking_id`),
  KEY `bookings_studio_id_foreign` (`studio_id`),
  KEY `bookings_booked_by_foreign` (`booked_by`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `booking_id`, `studio_id`, `booking_date`, `start_time`, `end_time`, `total_price`, `booked_by`, `booking_status`, `created_at`, `updated_at`) VALUES
(1, 100001, 1000001, '01/20/2020', '07:00 AM', '08:00 AM', 1000, 100001, 0, '2020-01-19 15:01:01', '2020-01-19 15:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
CREATE TABLE IF NOT EXISTS `features` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `feature_id` int(10) UNSIGNED NOT NULL,
  `studio_id` int(10) UNSIGNED NOT NULL,
  `studio_amenities` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `studio_equipments` text COLLATE utf8mb4_unicode_ci,
  `studio_rules` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `features_feature_id_unique` (`feature_id`),
  KEY `features_studio_id_foreign` (`studio_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `feature_id`, `studio_id`, `studio_amenities`, `studio_equipments`, `studio_rules`, `created_at`, `updated_at`) VALUES
(1, 10001, 1000001, 'Chairs, Mikes, Central Air Condition', NULL, NULL, '2020-01-18 16:45:01', '2020-01-18 16:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `hours`
--

DROP TABLE IF EXISTS `hours`;
CREATE TABLE IF NOT EXISTS `hours` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hour_id` int(10) UNSIGNED NOT NULL,
  `studio_id` int(10) UNSIGNED NOT NULL,
  `studio_opening` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studio_closing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `hours_hour_id_unique` (`hour_id`),
  KEY `hours_studio_id_foreign` (`studio_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hours`
--

INSERT INTO `hours` (`id`, `hour_id`, `studio_id`, `studio_opening`, `studio_closing`, `created_at`, `updated_at`) VALUES
(1, 10001, 1000001, '5', '10', '2020-01-18 16:45:01', '2020-01-18 16:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `location_id` int(10) UNSIGNED NOT NULL,
  `studio_id` int(10) UNSIGNED NOT NULL,
  `studio_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `studio_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studio_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `locations_location_id_unique` (`location_id`),
  KEY `locations_studio_id_foreign` (`studio_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location_id`, `studio_id`, `studio_address`, `studio_city`, `studio_country`, `created_at`, `updated_at`) VALUES
(1, 10001, 1000001, 'Sarita Vihar, New Delhi, Delhi, India', 'Delhi', 'India', '2020-01-18 16:45:01', '2020-01-18 16:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_01_15_184230_create_studios_table', 1),
(4, '2020_01_16_185320_create_studio_types_table', 1),
(5, '2020_01_16_190308_create_features_table', 1),
(6, '2020_01_16_191935_create_locations_table', 1),
(7, '2020_01_16_192703_create_hours_table', 1),
(8, '2020_01_19_185559_create_bookings_table', 2),
(9, '2020_01_19_201224_add_booking_date_to_bookings', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studios`
--

DROP TABLE IF EXISTS `studios`;
CREATE TABLE IF NOT EXISTS `studios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `studio_id` int(10) UNSIGNED NOT NULL,
  `studio_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studio_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `studio_type` int(10) UNSIGNED NOT NULL,
  `min_booking` int(10) UNSIGNED NOT NULL,
  `max_occp` int(10) UNSIGNED NOT NULL,
  `past_clients` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio_samples` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pricing_per_hour` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra_photos` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `studios_studio_id_unique` (`studio_id`),
  KEY `studios_studio_type_foreign` (`studio_type`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studios`
--

INSERT INTO `studios` (`id`, `studio_id`, `studio_name`, `studio_details`, `studio_type`, `min_booking`, `max_occp`, `past_clients`, `audio_samples`, `pricing_per_hour`, `profile_photo`, `extra_photos`, `created_at`, `updated_at`) VALUES
(1, 1000001, 'Akash Studio', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 1002, 1, 10, NULL, NULL, '1000', 'podcaststudio_1579385701.jpg', NULL, '2020-01-18 16:45:01', '2020-01-18 16:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `studio_types`
--

DROP TABLE IF EXISTS `studio_types`;
CREATE TABLE IF NOT EXISTS `studio_types` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `studiotype_id` int(10) UNSIGNED NOT NULL,
  `studiotype_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `studio_types_studiotype_id_unique` (`studiotype_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studio_types`
--

INSERT INTO `studio_types` (`id`, `studiotype_id`, `studiotype_name`, `created_at`, `updated_at`) VALUES
(1, 1001, 'Rehearsal Space', NULL, NULL),
(2, 1002, 'Podcast Space', NULL, NULL),
(3, 1003, 'Home Studio', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_user_id_unique` (`user_id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_unique` (`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `profile_photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 100001, 'Akash Singh', 'singh9800akash@gmail.com', '8920871449', NULL, '$2y$10$dnSFE/BuKd/3vRoRIzwdYuWC6mvacN7uaO25gyoUckhPwEXUBaM9y', NULL, NULL, '2020-01-18 03:41:15', '2020-01-18 03:41:15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
