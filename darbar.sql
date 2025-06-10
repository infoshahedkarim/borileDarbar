-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2025 at 12:12 PM
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
-- Database: `darbar`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner1` varchar(255) DEFAULT NULL,
  `message1` varchar(255) DEFAULT NULL,
  `description1` text DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `banner2` varchar(255) DEFAULT NULL,
  `message2` varchar(255) DEFAULT NULL,
  `description2` text DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `banner3` varchar(255) DEFAULT NULL,
  `message3` varchar(255) DEFAULT NULL,
  `description3` text DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner1`, `message1`, `description1`, `img1`, `banner2`, `message2`, `description2`, `img2`, `banner3`, `message3`, `description3`, `img3`, `created_at`, `updated_at`) VALUES
(1, 'assets/img/banner/5.jpg', 'Allah is the greatest', 'It\'s a declaration of faith and a powerful reminder of God\'s supremacy. ', 'assets/img/banner/hero-img-1.png', 'assets/img/banner/4.jpg', 'Allah is the greatest', 'It\'s a declaration of faith and a powerful reminder of God\'s supremacy. ', 'assets/img/banner/hero-img-1.png', 'assets/img/banner/6.png', 'Allah is the greatest', 'It\'s a declaration of faith and a powerful reminder of God\'s supremacy. ', 'assets/img/banner/hero-img-1.png', '2025-04-10 07:45:20', '2025-04-10 07:45:20'),
(2, 'assets/img/banner/gallery-bg.jpg', 'Allah is the greatest', 'It\'s a declaration of faith and a powerful reminder of God\'s supremacy. ', 'assets/img/banner/hero-img-1.png', 'assets/img/banner/1.jpg', 'Allah is the greatest', 'It\'s a declaration of faith and a powerful reminder of God\'s supremacy. ', 'assets/img/banner/hero-img-1.png', 'assets/img/banner/2.jpg', 'Allah is the greatest', 'It\'s a declaration of faith and a powerful reminder of God\'s supremacy. ', 'assets/img/banner/hero-img-1.png', '2025-04-10 02:48:34', '2025-04-10 02:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `banner1`
--

CREATE TABLE `banner1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner1`
--

INSERT INTO `banner1` (`id`, `banner`, `message`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 'assets/img/banner/1744272017_banner.jpg', 'ok', 'very good', 'assets/img/banner/1744272017_img.jpg', '2025-04-10 02:00:17', '2025-04-10 02:00:17'),
(2, NULL, NULL, NULL, NULL, '2025-04-10 02:00:34', '2025-04-10 02:00:34'),
(3, 'assets/img/banner/1744272050_banner.jpg', 'okk', 'banner1', 'assets/img/banner/1744272050_img.jpg', '2025-04-10 02:00:50', '2025-04-10 02:00:50'),
(4, 'assets/img/banner/1744709338_banner.jpg', 'okk', 'hgk', 'assets/img/banner/1744709338_img.jpg', '2025-04-15 03:28:58', '2025-04-15 03:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `banner2`
--

CREATE TABLE `banner2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner3`
--

CREATE TABLE `banner3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner3`
--

INSERT INTO `banner3` (`id`, `banner`, `message`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 'assets/img/banner/1744272068_banner.jpg', 'okkk', 'asdfg', 'assets/img/banner/1744272068_img.jpg', '2025-04-10 02:01:08', '2025-04-10 02:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `header`, `img`, `date`, `time`, `description`, `created_at`, `updated_at`) VALUES
(1, 'shob e kadar', 'assets/img/blog-img-1.jpg', '2024-12-26', '10:00 AM', 'In this blog, we explore the essence of spiritual awakening and how Dorbar Sharif has guided thousands through a path of light, devotion, and peace. Join us in reflecting on this incredible journey.', '2025-04-12 12:17:10', '2025-04-12 12:17:31'),
(2, 'header2', 'assets/img/blog/1744461026_aa.png', '2025-04-10', '10:00 AM', 'this was really nice one. this was really nice one. this was really nice one. this was really nice one. this was really nice one. this was really nice one.', '2025-04-12 06:24:26', '2025-04-12 06:30:26'),
(3, 'header2', 'assets/img/blog/1744461021_1.jpg', '2025-04-05', '10:00 AM', 'In this blog, we explore the essence of spiritual awakening and how Dorbar Sharif has guided thousands through a path of light, devotion, and peace. Join us in reflecting on this incredible journey.', '2025-04-12 06:26:49', '2025-04-12 12:34:27'),
(4, 'header2', 'assets/img/blog/courses-7.jpg', '2025-04-11', '10:00 AM', 'this was really nice one. this was really nice one. this was really nice one. this was really nice one. this was really nice one. this was really nice one. one. this was really nice one. this was really nice one.', '2025-04-12 06:28:36', '2025-04-15 05:56:45'),
(5, 'shob e borat', 'assets/img/blog/1744790639_aa.png', '2025-04-16', '10:00 AM', 'In this blog, we explore the essence of spiritual awakening and how Dorbar Sharif has guided thousands through a path of light, devotion, and peace. Join us in reflecting on this incredible journey.', '2025-04-16 02:03:59', '2025-04-16 02:03:59'),
(6, 'shob e kadar', 'assets/img/blog/IMG_0507.jpg', '2024-12-26', '10:00 AM', 'In this blog, we explore the essence of spiritual awakening and how Dorbar Sharif has guided thousands through a path of light, devotion, and peace. Join us in reflecting on this incredible journey.', '2025-04-12 12:17:10', '2025-04-23 12:01:29'),
(7, 'shob e borat', 'assets/img/blog/IMG_7061.JPG', '2025-04-16', '10:00 AM', 'In this blog, we explore the essence of spiritual awakening and how Dorbar Sharif has guided thousands through a path of light, devotion, and peace. Join us in reflecting on this incredible journey.', '2025-04-16 02:03:59', '2025-04-23 12:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `board_members`
--

CREATE TABLE `board_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `board_members`
--

INSERT INTO `board_members` (`id`, `img`, `name`, `designation`, `phone`, `fb`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'assets/img/board-members/1744453025_2.jpg', 'Shahed', 'PHD', '01521350473', 'https://ridgebenit.com/', 'https://ridgebenit.com/', '2025-04-12 04:17:05', '2025-04-12 04:17:05'),
(2, 'assets/img/board-members/1744453025_2.jpg', 'Kamrul', 'Hons', '01749140494', 'https://ridgebenit.com/', 'https://ridgebenit.com/', '2025-04-12 04:23:16', '2025-04-15 13:25:19'),
(3, 'assets/img/board-members/1744457773_aa.png', 'Hasan', 'SSC', '01749140494', 'https://ridgebenit.com/', 'https://ridgebenit.com/', '2025-04-12 05:36:13', '2025-04-12 05:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_4b395aae7fc73c932b5916b09303a118', 'i:1;', 1745661432),
('laravel_cache_4b395aae7fc73c932b5916b09303a118:timer', 'i:1745661432;', 1745661432),
('laravel_cache_a6e065fccd0ee330a2322e6033273f09', 'i:1;', 1745659830),
('laravel_cache_a6e065fccd0ee330a2322e6033273f09:timer', 'i:1745659830;', 1745659830);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `history` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `history`, `created_at`, `updated_at`) VALUES
(1, 'Dorbar Sharif has a long-standing tradition of organizing spiritual gatherings, religious events, and educational seminars that have enriched the lives of countless devotees. Since its inception, it has served as a beacon of unity, knowledge, and faith. soiya Dorbar Sharif has a long-standing tradition of organizing spiritual gatherings, religious events, and educational seminars that have enriched the lives of countless devotees. Since its inception, it has served as a beacon of unity, knowledge, and faith. soiya Dorbar Sharif has a long-standing tradition of organizing spiritual gatherings, religious events, and educational seminars that have enriched the lives of countless devotees. Since its inception, it has served as a beacon of unity, knowledge, and faith. soiya Dorbar Sharif has a long-standing tradition of organizing spiritual gatherings, religious events, and educational seminars that have enriched the lives of countless devotees. Since its inception, it has served as a beacon of unity, knowledge, and faith. soiya', '2025-04-12 09:00:33', '2025-04-15 05:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_12_074659_add_two_factor_columns_to_users_table', 2),
(5, '2025_03_12_074725_create_personal_access_tokens_table', 2),
(6, '2025_04_10_091550_create_send_emails_table', 2),
(7, '0001_01_01_000000_create_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `namaz`
--

CREATE TABLE `namaz` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fajr` varchar(255) DEFAULT NULL,
  `zuhr` varchar(255) DEFAULT NULL,
  `asr` varchar(255) DEFAULT NULL,
  `magrib` varchar(255) DEFAULT NULL,
  `isha` varchar(255) DEFAULT NULL,
  `jummah` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `namaz`
--

INSERT INTO `namaz` (`id`, `fajr`, `zuhr`, `asr`, `magrib`, `isha`, `jummah`, `created_at`, `updated_at`) VALUES
(1, '04:45 AM', '1:30 PM', '04:45 PM', '06:29 PM', '07:45 PM', '01:45 PM', '2025-04-10 09:26:32', '2025-04-24 01:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `next_orosh`
--

CREATE TABLE `next_orosh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `start_time` varchar(20) DEFAULT NULL,
  `end_time` varchar(20) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `next_orosh`
--

INSERT INTO `next_orosh` (`id`, `date`, `img`, `start_time`, `end_time`, `location`, `header`, `description`, `created_at`, `updated_at`) VALUES
(1, '2025-04-12', 'assets/img/orosh/courses-2.jpg', '10:00 PM', '12:00 PM', 'Dhaka', 'Nice Orosh', 'By Dorbarshorif, this will proceed smoothly', '2025-04-12 00:07:01', '2025-04-23 12:06:55'),
(2, '2025-04-10', 'assets/img/orosh/courses-2.jpg', '10:00 PM', '12:00 PM', 'Dhaka', 'Nice Orosh', 'By Dorbarshorif, this will proceed smoothly', '2025-04-12 00:07:01', '2025-04-23 12:06:55'),
(3, '2025-04-20', 'assets/img/orosh/courses-2.jpg', '10:00 PM', '12:00 PM', 'Dhaka', 'Nice Orosh', 'By Dorbarshorif, this will proceed smoothly', '2025-04-12 00:07:01', '2025-04-23 12:06:55'),
(4, '2025-05-19', 'assets/img/orosh/courses-2.jpg', '10:00 PM', '12:00 PM', 'Dhaka', 'Nice Orosh', 'By Dorbarshorif, this will proceed smoothly', '2025-04-12 00:07:01', '2025-04-23 12:06:55'),
(5, '2025-05-09', 'assets/img/orosh/courses-2.jpg', '10:00 PM', '12:00 PM', 'Dhaka', 'Nice Orosh', 'By Dorbarshorif, this will proceed smoothly', '2025-04-12 00:07:01', '2025-04-23 12:06:55'),
(6, '2025-04-08', 'assets/img/orosh/courses-2.jpg', '10:00 PM', '12:00 PM', 'Dhaka', 'Nice Orosh', 'By Dorbarshorif, this will proceed smoothly', '2025-04-12 00:07:01', '2025-04-23 12:06:55'),
(7, '2025-06-20', 'assets/img/orosh/courses-2.jpg', '10:00 PM', '12:00 PM', 'Dhaka', 'Nice Orosh', 'By Dorbarshorif, this will proceed smoothly', '2025-04-12 00:07:01', '2025-04-23 12:06:55'),
(8, '2025-04-20', 'assets/img/orosh/courses-2.jpg', '10:00 PM', '12:00 PM', 'Dhaka', 'Nice Orosh', 'By Dorbarshorif, this will proceed smoothly', '2025-04-12 00:07:01', '2025-04-23 12:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `send_emails`
--

CREATE TABLE `send_emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('96AD9BIZ0HOROkqvVrtc1w6s0xCpm46tQJ2SBndm', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTHJkMUJrMGp4azdZYXMwdmlGUm5QV0tFOGtnU3dlclpUQlNOcXFxUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL3Byb2ZpbGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJDFRMkVoVWlCWWt0ME5zWDd6dTBjak8zN1FZcEVaa05UWVpyWXM3d3JpM2YydkliT0dHWTBPIjt9', 1745661827),
('s3TiRNLNJukrbIHfvMEEBgoS5OpFQdgDV7rpme2D', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoib3NCREhkb01rSktFQmxmdVZ5a3NxdTE4VzlVRmZaOFA0RHhqd3l3bCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJGc4V0J5amFrU0dJL2daVWpGWGt3aGVWN1B2VFlhZW83WGYvMnRlTkpkcnk3NEVDWFpTNURLIjt9', 1745659774);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_type`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'shahed karim', 'admin', 'shahed.ridgeben@gmail.com', NULL, '$2y$12$1Q2EhUiBYkt0NsX7zu0cjO37QYpEZkNTYZrYs7wri3f2vIbOGGY0O', NULL, NULL, NULL, '2025-04-26 03:09:10', '2025-04-26 03:09:10'),
(2, 'sa', 'user', 'ridgebenitsolutions@gmail.com', NULL, '$2y$12$g8WByjakSGI/gZUjFXkwheV7PvTYaeo7Xf/2teNJdry74ECXZS5DK', NULL, NULL, NULL, '2025-04-26 03:28:39', '2025-04-26 03:28:39');

-- --------------------------------------------------------

--
-- Table structure for table `web_info`
--

CREATE TABLE `web_info` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `info` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_info`
--

INSERT INTO `web_info` (`id`, `facebook`, `twitter`, `linkedin`, `number`, `location`, `email`, `info`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'https://facebook.com/dorbarshorif', 'https://twitter.com/dorbarshorif', 'https://linkedin.com/company/dorbarshorif', '+88013456789', 'Dhaka, Bangladesh', 'info@dorbarshorif.com', 'Dorbarshorif is an Islamic community centre committed to social welfare and spiritual growth.', 'assets/img/logo.png', '2025-04-15 06:02:40', '2025-04-15 00:53:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner1`
--
ALTER TABLE `banner1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner2`
--
ALTER TABLE `banner2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner3`
--
ALTER TABLE `banner3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board_members`
--
ALTER TABLE `board_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `namaz`
--
ALTER TABLE `namaz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `next_orosh`
--
ALTER TABLE `next_orosh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `send_emails`
--
ALTER TABLE `send_emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `web_info`
--
ALTER TABLE `web_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner1`
--
ALTER TABLE `banner1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner2`
--
ALTER TABLE `banner2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner3`
--
ALTER TABLE `banner3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `board_members`
--
ALTER TABLE `board_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `namaz`
--
ALTER TABLE `namaz`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `next_orosh`
--
ALTER TABLE `next_orosh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `send_emails`
--
ALTER TABLE `send_emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `web_info`
--
ALTER TABLE `web_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
