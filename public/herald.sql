-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2017 at 10:51 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `herald`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `image`, `owner`, `created_at`, `updated_at`) VALUES
(1, 'More than a Conqueror', 'We are more than a conqueror. This is what Christ has given unto us that have put our faith in Him.', '1503798350.jpg', 'Agada Victoria', '2017-08-27 13:45:51', '2017-08-27 13:45:51'),
(2, 'It\'s about the process', 'God knew how weak the Israelites were owing to the fact that they were used to being slaves so rather than allow them reach the promised land through the shorter way which are greater opposition, He took them through the longer way - the wilderness.', '1503798506.jpg', 'Agada Victoria', '2017-08-27 13:48:26', '2017-08-27 13:48:26'),
(5, 'The Power of Purpose', 'Every single morning', '1503798637.jpg', 'Ogunboyewa Samuel', '2017-08-27 13:50:38', '2017-08-27 13:50:38'),
(6, 'Will you live for purpose?', 'It should be impressed on our hearts that we are not some random species in the so called animal world nor are we some data spiting creature as some intellectuals', '1503798751.jpg', 'Samuel', '2017-08-27 13:52:31', '2017-08-27 13:52:31');

-- --------------------------------------------------------

--
-- Table structure for table `article_comments`
--

CREATE TABLE `article_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `article_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `article_comments`
--

INSERT INTO `article_comments` (`id`, `name`, `comment`, `article_id`, `created_at`, `updated_at`) VALUES
(1, 'Titi', 'Lovely', '1', '2017-08-28 00:21:38', '2017-08-28 00:21:38'),
(2, 'Bade', 'This is really a beautiful piece. Welldone girl', '1', '2017-09-06 11:27:18', '2017-09-06 11:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `message_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `single_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `message_id`, `single_id`, `created_at`, `updated_at`) VALUES
(8, 'Ewaoluwa', 'sweet', NULL, '2', '2017-09-06 13:11:16', '2017-09-06 13:11:16'),
(7, 'Biggs', 'The word edifies', '2', NULL, '2017-09-06 12:40:55', '2017-09-06 12:40:55'),
(6, 'nsk', 'nodhsao', '2', NULL, '2017-09-06 11:54:34', '2017-09-06 11:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `meetingname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `meetingname`, `about`, `image`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Feast', 'The feast', '1504091539.jpg', '2017-09-09 12:00:00', '2017-08-30 23:12:20', '2017-08-30 23:12:20'),
(2, 'Breakfast with Jesus', 'A morning session to study God\'s word, enjoying and edifying one another with His word.', '1504162835.jpg', '2017-09-12 12:00:00', '2017-08-31 19:00:37', '2017-08-31 19:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `fileentries`
--

CREATE TABLE `fileentries` (
  `id` int(10) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `original_filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `series_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fileentries`
--

INSERT INTO `fileentries` (`id`, `filename`, `mime`, `original_filename`, `series_title`, `created_at`, `updated_at`) VALUES
(1, 'Forgiven- One Sin At A Time.mp3', 'audio/mp3', 'Forgiven- One Sin At A Time.mp3', '1', '2017-09-05 20:43:59', '2017-09-05 20:43:59'),
(2, 'Alagbara_Onos_Naijapals - Copy.mp3', 'audio/mp3', 'Alagbara_Onos_Naijapals - Copy.mp3', '1', '2017-09-05 20:51:43', '2017-09-05 20:51:43'),
(3, 'A Walk Through Revelations 1.mp3', 'audio/mp3', 'A Walk Through Revelations 1.mp3', '2', '2017-09-05 20:52:05', '2017-09-05 20:52:05'),
(4, 'A Walk Through Revelations 2.mp3', 'audio/mp3', 'A Walk Through Revelations 2.mp3', '2', '2017-09-05 20:54:48', '2017-09-05 20:54:48');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(7, '1503918631.png', '2017-08-28 23:10:33', '2017-08-28 23:10:33'),
(5, '1503918599.jpg', '2017-08-28 23:10:00', '2017-08-28 23:10:00'),
(6, '1503918614.png', '2017-08-28 23:10:16', '2017-08-28 23:10:16'),
(8, '1503920786.jpg', '2017-08-28 23:46:27', '2017-08-28 23:46:27'),
(9, '1503920797.jpg', '2017-08-28 23:46:37', '2017-08-28 23:46:37'),
(10, '1503920821.jpg', '2017-08-28 23:47:02', '2017-08-28 23:47:02'),
(12, '1503920842.jpg', '2017-08-28 23:47:23', '2017-08-28 23:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(74, '2014_10_12_000000_create_users_table', 1),
(75, '2014_10_12_100000_create_password_resets_table', 1),
(76, '2017_06_13_054340_create_fileentries_table', 1),
(77, '2017_06_15_014807_create_series_table', 1),
(78, '2017_06_18_142243_create_comments_table', 1),
(79, '2017_08_23_093943_create_articles_table', 1),
(80, '2017_08_24_232227_create_article_comments_table', 1),
(81, '2017_08_28_060512_create_galleries_table', 2),
(82, '2017_08_30_092920_create_events_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Single', '2017-09-05 20:42:34', '2017-09-05 20:42:34'),
(2, 'A walk through Revelation', '2017-09-05 20:42:42', '2017-09-05 20:42:42'),
(3, 'The Reality of a Christian', '2017-09-05 20:43:03', '2017-09-05 20:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Inioluwa', 'inioluwahh@gmail.com', '$2y$10$Ggd94oMnUyzZzjih78xjBOONl7FhZrKFgkiGFjDcn/9ei51XWHSM.', NULL, '2017-08-27 13:34:03', '2017-08-27 13:34:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_comments`
--
ALTER TABLE `article_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fileentries`
--
ALTER TABLE `fileentries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `article_comments`
--
ALTER TABLE `article_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fileentries`
--
ALTER TABLE `fileentries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
