-- phpMyAdmin SQL Dump
-- version 5.2.2-1.fc40.remi
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2025 at 05:42 PM
-- Server version: 8.0.41
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id` int NOT NULL,
  `kode_klasifikasi` varchar(100) NOT NULL,
  `no_arsip` varchar(100) NOT NULL,
  `perihal` text NOT NULL,
  `kurun_waktu` varchar(50) DEFAULT NULL,
  `asal_surat` varchar(255) DEFAULT NULL,
  `media_arsip` varchar(100) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `lembar` int DEFAULT NULL,
  `folder_boks` varchar(100) DEFAULT NULL,
  `file_surat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `kode_klasifikasi`, `no_arsip`, `perihal`, `kurun_waktu`, `asal_surat`, `media_arsip`, `tanggal_masuk`, `tanggal_surat`, `lembar`, `folder_boks`, `file_surat`, `created_at`) VALUES
(1, '6787665', 'SM-001/2025', 'Permohonan Bantuan Internet', '2025', 'DISKOMINFO Kabupaten', 'Kertas', '2025-05-17', '2025-05-15', 3, 'Boks 1', '', '2025-05-19 16:08:34'),
(2, '666', '777', 'Pelaporan Project Pembuatan Jembatan', '2 Tahun', 'PT Yono', '22009', '2025-05-13', '2025-05-06', 2, 'Test', '', '2025-05-19 16:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`) VALUES
(1, 'Admin', 'admin@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1),
(2, 'User', 'user@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2),
(3, 'Reza Nurfachmi', 'reza@gmail.com', '$2y$10$qtceD3ohWvYVWdS.CEic8uxZ1jOMJlKdKziF86h76X9CDRbHe4/R2', 2),
(4, 'Herlan', 'herlan@mail.com', '$2y$10$sqtceD3ohhVvYWdS.CiE6i8uxZ1jIOMJIKKdZiF86h76X9RMOTJ1K', 2),
(5, 'Muhamad Herlan', 'test@mail.com', '$2y$10$pyegnt.LLMXyg6F8ffK1PuVft35PwBABTTm7yFwFw6ynO8bDivcRC', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_email_unique` (`email`),
  ADD KEY `login_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `login_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
