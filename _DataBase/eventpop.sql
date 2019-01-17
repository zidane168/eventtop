-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 16:50 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventpop`
--

-- --------------------------------------------------------

--
-- Table structure for table `kinds`
--

CREATE TABLE `kinds` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kinds`
--

INSERT INTO `kinds` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Stories', NULL, NULL),
(2, 'Events', NULL, NULL),
(3, 'International Artists & DJ', NULL, NULL),
(4, 'Entertainment', NULL, NULL),
(5, 'Education\r\n', NULL, NULL),
(6, 'Sport\r\n', NULL, NULL),
(7, 'Activities', NULL, NULL),
(8, 'Technology', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2019_01_16_201105_create_kinds_table', 2),
(4, '2019_01_16_201127_create_posts_table', 2);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kindId` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `address`, `image`, `slug`, `kindId`, `created_at`, `updated_at`) VALUES
(1, 'Chang Carnival presents The Green World, Safari Campfire!', 'The Ocean Khao Yai Nong Nam Daeng, Pak Chong District, Nakhon Ratchasima, Thailand ', 'the-green-house.jpg', 'change-carnival-presents-the-green-world-safari-campfire', 2, '2019-01-29 06:00:00', NULL),
(2, 'BNK48 Space Mission Concert - มาร่วมสร้างคอนเสิร์ตที่สวยงามที่', 'IMPACT Arena, Exhibition and Convention Center, Muang Thong Thani, Popular 3 Road, Banmai Sub-district Pak Kret District, Nonthaburi, Thailand', 'space-mission.jpg', 'bnk48-space-mission-concert-มาร่วมสร้างคอนเสิร์ตที่สวยงามที่', 2, '2019-01-21 05:00:00', NULL),
(3, 'Kolour In The Park 2019', 'THAI WAKE PARK - Lumlukka (TWP Lumlukka), Bungkumploy, Lumlukka, Pathum Thani, Thailand ', 'kolour.jpg', 'bnk48-space-mission-concert-มาร่วมสร้างคอนเสิร์ตที่สวยงามที่', 2, '2019-01-25 12:00:00', NULL),
(4, 'Marshmello Live in Bangkok 2019 ', 'Crystal Design Center, Pradit Manutham Road, Khlong Chan, Bang Kapi, Bangkok, Thailand ', 'marshmello.jpg', 'marshmelo-live-in-bangkok-2019 ', 2, '2019-01-15 02:00:00', NULL),
(5, '10 ร้านมิชลินสตาร์ที่ต้องไปให้ได้ (ซักครั้งนึง)', '', 'stories1.jpg', '10-ร้านมิชลินสตาร์ที่ต้องไปให้ได้-(ซักครั้งนึง)', 1, '2019-01-14 01:00:00', NULL),
(6, 'CTC 2019 งานทอล์คสร้างแรงบันดาลใจ ที่ครั้งต่อไปอย่าจัดวันเดียว', '', 'stories2.jpg', 'ctc-2019-งานทอล์คสร้างแรงบันดาลใจ-ที่ครั้งต่อไปอย่าจัดวันเดียว', 1, '2019-01-10 19:00:00', NULL),
(7, 'Circoloco Thailand', 'Baba Beach Club Phuket Luxury Pool Villa Hotel by Sri panwa, Takua Thung, Khok Kloi, Phang Nga, Thailand ', 'space-mission.jpg', 'circoloco-Thailand', 3, '2019-01-09 08:15:00', NULL),
(8, 'Singha Corporation Presents One Night in BKK with BOB SINCLAR', 'Escape Bangkok 5 Floor EmQuartier, Khlong Tan Nuea, Watthana, Bangkok, Thailand ', 'the-green-house.jpg', 'circoloco-Thailand', 3, '2019-01-23 11:00:00', NULL),
(9, 'bnk3 Change', 'Escape Bangkok 5 Floor EmQuartier, Khlong Tan Nuea, Watthana, Bangkok, Thailand ', 'banner2.jpg', 'bnk3-change', 4, '2019-02-23 11:00:00', NULL),
(10, 'space mission', 'Escape Bangkok 5 Floor EmQuartier, Khlong Tan Nuea, Watthana, Bangkok, Thailand ', 'banner1.jpg', 'bnk3-change', 4, '2019-02-23 11:00:00', NULL),
(11, 'Group Asia Festival', 'THAI WAKE PARK - Lumlukka (TWP Lumlukka), Bungkumploy, Lumlukka, Pathum Thani, Thailand ', 'kolour.jpg', 'group-asia-festival', 5, '2019-01-28 12:00:00', NULL),
(12, 'Rita ora 2019', 'Crystal Design Center, Pradit Manutham Road, Khlong Chan, Bang Kapi, Bangkok, Thailand ', 'marshmello.jpg', 'rita-ora-2019', 5, '2019-02-01 02:00:00', NULL),
(13, 'Car Sport', 'The Ocean Khao Yai Nong Nam Daeng, Pak Chong District, Nakhon Ratchasima, Thailand ', 'the-green-house.jpg', 'car-sport', 6, '2019-01-29 06:00:00', NULL),
(14, 'Fishing 2019', 'THAI WAKE PARK - Lumlukka (TWP Lumlukka), Bungkumploy, Lumlukka, Pathum Thani, Thailand ', 'space-mission.jpg', 'fishing-2019', 6, '2019-01-25 09:30:00', NULL),
(15, 'Football Festival', 'Baba Beach Club Phuket Luxury Pool Villa Hotel by Sri panwa, Takua Thung, Khok Kloi, Phang Nga, Thailand ', 'the-green-house.jpg', 'football-festival', 7, '2019-01-09 08:30:00', NULL),
(16, 'Horse Rising', 'Escape Bangkok 5 Floor EmQuartier, Khlong Tan Nuea, Watthana, Bangkok, Thailand ', 'the-green-house.jpg', 'horse-rising', 7, '2019-01-23 11:00:00', NULL),
(17, 'IOT', 'Escape Bangkok 5 Floor EmQuartier, Khlong Tan Nuea, Watthana, Bangkok, Thailand ', 'space-mission.jpg', 'iot', 8, '2019-02-23 11:00:00', NULL),
(18, 'practice IOT', 'Crystal Design Center, Pradit Manutham Road, Khlong Chan, Bang Kapi, Bangkok, Thailand ', 'the-green-house.jpg', 'rita-ora-2019', 8, '2019-02-01 02:00:00', NULL),
(19, 'Block Chain', 'Escape Bangkok 5 Floor EmQuartier, Khlong Tan Nuea, Watthana, Bangkok, Thailand ', 'space-mission.jpg', 'block-chain', 8, '2019-02-23 11:00:00', NULL),
(20, 'Workshop: Jump into DevOps World Workshop รุ่น 2 ', '', 'the-green-house.jpg', 'workshop-jump-into-devOps-world-workshop รุ่น-2 ', 8, '2019-01-14 01:00:00', NULL),
(21, 'My stories', 'THAI WAKE PARK - Lumlukka (TWP Lumlukka), Bungkumploy, Lumlukka, Pathum Thani, Thailand ', 'stories2.jpg', 'my-stories', 1, '2019-01-25 12:00:00', NULL),
(22, 'Chang Carnival presents The Green World, Safari Campfire! 3', 'The Ocean Khao Yai Nong Nam Daeng, Pak Chong District, Nakhon Ratchasima, Thailand ', 'the-green-house.jpg', 'change-carnival-presents-the-green-world-safari-campfire', 2, '2019-01-29 06:00:00', NULL),
(23, 'Chang Carnival presents The Green World, Safari Campfire! 2', 'The Ocean Khao Yai Nong Nam Daeng, Pak Chong District, Nakhon Ratchasima, Thailand ', 'the-green-house.jpg', 'change-carnival-presents-the-green-world-safari-campfire', 2, '2019-01-29 06:00:00', NULL),
(24, 'Presents One Night in BKK with BOB SINCLAR', 'Escape Bangkok 5 Floor EmQuartier, Khlong Tan Nuea, Watthana, Bangkok, Thailand ', 'the-green-house.jpg', 'circoloco-Thailand', 3, '2019-01-23 11:00:00', NULL),
(25, 'Bircoloco', 'Baba Beach Club Phuket Luxury Pool Villa Hotel by Sri panwa, Takua Thung, Khok Kloi, Phang Nga, Thailand ', 'space-mission.jpg', 'bircoloco', 3, '2019-01-09 08:15:00', NULL),
(26, 'Sport', ' Nam Daeng, Pak Chong District, Nakhon Ratchasima, Thailand ', 'the-green-house.jpg', 'car-sport', 6, '2019-01-29 06:00:00', NULL),
(27, 'Fishing 2017', 'Lumlukka (TWP Lumlukka), Bungkumploy, Lumlukka, Pathum Thani, Thailand ', 'space-mission.jpg', 'fishing-2019', 6, '2019-01-25 09:30:00', NULL),
(28, 'social Festival', 'Baba Beach Club Phuket Luxury Pool Villa Hotel by Sri panwa, Takua Thung, Khok Kloi, Phang Nga, Thailand ', 'the-green-house.jpg', 'social-festival', 7, '2019-01-09 08:30:00', NULL),
(29, 'The Sun', 'Escape Bangkok 5 Floor EmQuartier, Khlong Tan Nuea, Watthana, Bangkok, Thailand ', 'the-green-house.jpg', 'the-sun', 7, '2019-01-23 11:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL COMMENT 'Lưu trữ thời gian kích hoạt email',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'Hữu Vị', 'huuvi168@gmail.com', '2019-01-16 13:36:44', '$2y$10$Nk4pYdkDwCXAAxo7I7XBsegK6S5VpVATkRJaHNmPqDl82GbLOixu.', 'bmk69sjGgdoUR0mtrPDA8dUqRm2swDezxbhSBfd8p0gRpWoxd05a2ynVA2nk', '2019-01-16 13:36:44', '2019-01-16 13:36:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kinds`
--
ALTER TABLE `kinds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_kindid_foreign` (`kindId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kinds`
--
ALTER TABLE `kinds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_kindid_foreign` FOREIGN KEY (`kindId`) REFERENCES `kinds` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
