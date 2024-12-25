-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2024 at 08:05 AM
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
-- Database: `inowtech`
--

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
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama_guru`, `id_kelas`, `created_at`, `updated_at`) VALUES
(1, 'Guru A', 2, '2024-12-24 21:44:19', '2024-12-24 23:33:16'),
(2, 'Guru B', 3, '2024-12-24 23:33:41', '2024-12-24 23:33:41'),
(3, 'Guru C', 4, '2024-12-24 23:33:56', '2024-12-24 23:33:56'),
(4, 'Guru D', 6, '2024-12-24 23:34:14', '2024-12-24 23:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(2, 'A', '2024-12-24 20:11:39', '2024-12-24 20:11:39'),
(3, 'B', '2024-12-24 20:11:48', '2024-12-24 20:11:48'),
(4, 'C', '2024-12-24 23:29:32', '2024-12-24 23:29:32'),
(6, 'D', '2024-12-24 23:32:33', '2024-12-24 23:32:33');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_12_24_190417_create_kelas_table', 1),
(6, '2024_12_24_190426_create_guru_table', 1),
(7, '2024_12_24_190435_create_murid_table', 1),
(10, '2024_12_25_035848_create_guru_table', 2),
(11, '2024_12_25_050825_create_murid_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_murid` varchar(255) NOT NULL,
  `id_kelas` bigint(20) UNSIGNED NOT NULL,
  `id_guru` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`id`, `nama_murid`, `id_kelas`, `id_guru`, `created_at`, `updated_at`) VALUES
(1, 'Rene Goldner DVM', 3, 2, '2024-12-24 23:59:30', '2024-12-24 23:59:47'),
(2, 'Chasity Larkin IV', 6, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:54'),
(3, 'Gwen Koelpin', 2, 1, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(4, 'Macie Runolfsson', 2, 1, '2024-12-24 23:59:30', '2024-12-25 00:00:05'),
(5, 'Reta Ratke IV', 6, 4, '2024-12-24 23:59:30', '2024-12-25 00:00:12'),
(6, 'Bianka Boehm I', 3, 2, '2024-12-24 23:59:30', '2024-12-25 00:00:20'),
(7, 'Judson Bradtke II', 3, 2, '2024-12-24 23:59:30', '2024-12-25 00:00:27'),
(8, 'Johann Boyer', 6, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(9, 'Dudley Willms Jr.', 3, 2, '2024-12-24 23:59:30', '2024-12-25 00:00:34'),
(10, 'Modesto Rau', 4, 3, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(11, 'Javon Hyatt PhD', 3, 2, '2024-12-24 23:59:30', '2024-12-25 00:00:58'),
(12, 'Vivianne Feil', 3, 2, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(13, 'Bessie Schimmel', 4, 3, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(14, 'Dr. Emmie Wehner PhD', 2, 1, '2024-12-24 23:59:30', '2024-12-25 00:01:14'),
(15, 'Myra Schuster', 3, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(16, 'Blanca Hermann', 4, 3, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(17, 'Ms. Odie Kiehn', 4, 1, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(18, 'Savanna Gorczany', 4, 3, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(19, 'Opal Zieme', 6, 4, '2024-12-24 23:59:30', '2024-12-25 00:01:28'),
(20, 'Ethyl Huel', 2, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(21, 'Dr. Gail Hickle', 3, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(22, 'Dr. Pinkie Reichel', 2, 2, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(23, 'Mr. Price Toy', 6, 1, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(24, 'Mr. Thurman Gleichner', 2, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(25, 'Anahi Hyatt', 6, 2, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(26, 'Mr. Jared Luettgen II', 6, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(27, 'Orpha Baumbach', 3, 3, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(28, 'Gerard Schaden', 4, 1, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(29, 'Ms. Hettie Kulas', 6, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(30, 'Taurean Marvin MD', 2, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(31, 'Alysson Kovacek', 2, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(32, 'Vivienne McGlynn', 4, 3, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(33, 'Dr. Mckayla Shields V', 6, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(34, 'Louvenia Kemmer', 3, 2, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(35, 'Sophie VonRueden', 3, 1, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(36, 'Margret Keeling', 2, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(37, 'Jett Moen', 4, 1, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(38, 'Prof. Hortense Gerhold I', 2, 3, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(39, 'Mckenna Rogahn', 4, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(40, 'Prof. Anika Stanton II', 3, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(41, 'Bertrand Berge III', 6, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(42, 'Karlee Brakus', 6, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(43, 'Brandyn Price PhD', 2, 3, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(44, 'Wyatt Padberg II', 3, 1, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(45, 'Prof. Adelle Williamson MD', 6, 2, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(46, 'Stephany Schmitt', 6, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(47, 'Trenton Nikolaus', 2, 1, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(48, 'Ms. Ashlee Nikolaus Jr.', 2, 2, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(49, 'Dr. Daphne Dicki', 3, 1, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(50, 'Rubye Von', 3, 3, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(51, 'Christa Oberbrunner', 4, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(52, 'Dr. Markus Morar DDS', 6, 2, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(53, 'Robb Barton Sr.', 2, 3, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(54, 'Wilber Beahan', 2, 1, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(55, 'Darron Jerde', 6, 2, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(56, 'Mr. Arnulfo Nicolas II', 3, 2, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(57, 'Antonetta Schiller DDS', 3, 1, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(58, 'Prof. Ralph Haley III', 2, 3, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(59, 'Giovani Nikolaus', 6, 4, '2024-12-24 23:59:30', '2024-12-24 23:59:30'),
(60, 'Rossie Ondricka', 2, 1, '2024-12-24 23:59:30', '2024-12-24 23:59:30');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'admin@example.com', '2024-12-24 23:45:10', '$2y$12$9FRCTFolIVkHm4QvodxOe.X4gqWoOPvzi9YeyoagRLNmObZnunbs.', 'aBHUAxe725', '2024-12-24 23:45:10', '2024-12-24 23:45:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guru_id_kelas_foreign` (`id_kelas`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id`),
  ADD KEY `murid_id_kelas_foreign` (`id_kelas`),
  ADD KEY `murid_id_guru_foreign` (`id_guru`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `murid`
--
ALTER TABLE `murid`
  ADD CONSTRAINT `murid_id_guru_foreign` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id`),
  ADD CONSTRAINT `murid_id_kelas_foreign` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
