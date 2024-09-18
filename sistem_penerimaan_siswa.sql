-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2024 at 04:48 AM
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
-- Database: `sistem_penerimaan_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `gelombangs`
--

CREATE TABLE `gelombangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_gelombang` varchar(255) NOT NULL,
  `aktif` tinyint(4) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gelombangs`
--

INSERT INTO `gelombangs` (`id`, `nama_gelombang`, `aktif`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Angkatan 1', 0, NULL, NULL, '2024-09-12 20:37:13'),
(2, 'Angkatan 2', 1, NULL, NULL, '2024-09-12 20:37:13'),
(3, 'Angkatan 3', 0, NULL, '2024-09-12 20:55:05', '2024-09-12 20:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `jurusans`
--

CREATE TABLE `jurusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusans`
--

INSERT INTO `jurusans` (`id`, `nama_jurusan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Operator Komputer', NULL, NULL, NULL),
(2, 'Bahasa Inggris', NULL, NULL, NULL),
(3, 'Desain Grafis', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_level` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `nama_level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin  Aplikasi', NULL, '2024-09-14 06:49:24', NULL),
(2, 'PIC', NULL, NULL, NULL),
(3, 'Administrator', NULL, NULL, NULL);

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
(1, '2024_09_11_050033_create_levels_table', 1),
(2, '2024_09_11_063354_create_users_table', 1),
(3, '2024_09_12_051050_add_softdelete_to_level_table', 1),
(4, '2024_09_12_064017_create_jurusans_table', 1),
(5, '2024_09_13_014319_create_gelombangs_table', 1),
(10, '2024_09_13_054735_create_pesertas_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pesertas`
--

CREATE TABLE `pesertas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jurusan` bigint(20) UNSIGNED NOT NULL,
  `id_gelombang` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `kartu_keluarga` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `kejuruan` varchar(100) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `aktivitas_saat_ini` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesertas`
--

INSERT INTO `pesertas` (`id`, `id_jurusan`, `id_gelombang`, `nama_lengkap`, `nik`, `kartu_keluarga`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `pendidikan_terakhir`, `nama_sekolah`, `kejuruan`, `nomor_hp`, `email`, `aktivitas_saat_ini`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Anisa Putri MilaSari', '3171074606000002', '3171074606000002', 'Perempuan', 'Sragen', '2000-06-06', 'S1', 'UB', 'Operator Komputer', '089674325591', 'annisaputrims@gmail.com', 'pengacara', 1, NULL, NULL, '2024-09-17 18:32:13'),
(2, 3, 2, 'Yen', '7', '18', 'Wanita', 'Quod maxime nisi dol', '2012-02-11', 'S1', 'Nathan Byrd', 'Rerum illo sint eu e', '0988098', 'zucy@mailinator.com', 'Consectetur volupta', 0, NULL, '2024-09-16 19:59:39', '2024-09-16 19:59:39'),
(3, 2, 2, 'Isaiah', '92', '13', 'Pria', 'Quia excepturi volup', '2010-10-05', 'SMP', 'Dominique Burton', 'Est pariatur Non qu', '1553922', 'xufyxaku@mailinator.com', 'Ipsam fugiat porro i', 0, NULL, '2024-09-16 21:10:14', '2024-09-16 21:10:14'),
(4, 2, 2, 'MilaSari', '22222222222', '22222222222', 'Pria', 'Dimana', '2024-09-17', 'S3', 'SMAN 135', 'IPA', '1111111', 'a@gmail.com', 'pengacara', 0, NULL, '2024-09-16 21:42:31', '2024-09-16 21:42:31'),
(5, 2, 2, 'Dwi S', '123456789098765', '123456789098765', 'Wanita', 'Solo', '1972-07-10', 'SMK', 'SMAN 1 SOLO', 'RIAS', '0987654321', 'dwi@gmail.com', 'IRT', 0, NULL, '2024-09-17 05:28:09', '2024-09-17 05:28:09'),
(6, 2, 2, 'Shafira', '31', '91', 'Pria', 'Ut sed ut tenetur pa', '1985-10-17', 'S1', 'Genevieve Fisher', 'In repudiandae ex do', '11066', 'nyxixopozu@mailinator.com', 'Eius autem debitis m', 0, NULL, '2024-09-17 05:33:38', '2024-09-17 05:33:38'),
(7, 2, 2, 'Karleigh', '94', '40', 'Wanita', 'Laboriosam facere q', '2000-04-03', 'SMP', 'Irene Randall', 'Quis corporis modi q', '7765', 'selugaride@mailinator.com', 'Officia earum eiusmo', 0, NULL, '2024-09-17 05:39:33', '2024-09-17 05:39:33'),
(8, 1, 2, 'Rylee', '84', '97', 'Wanita', 'Qui nostrud rerum co', '1997-08-27', 'S1', 'Merritt Meyers', 'Ut voluptate nobis a', '3643', 'kufekoxota@mailinator.com', 'Reprehenderit ipsa', 0, NULL, '2024-09-17 17:46:17', '2024-09-17 17:46:17'),
(9, 3, 2, 'Kato', '66', '61', 'Wanita', 'Dolore sed corporis', '2021-06-08', 'SD', 'Ria Gamble', 'Aute quasi eiusmod s', '1099', 'divebuna@mailinator.com', 'Alias sit aut conse', 0, NULL, '2024-09-17 17:47:23', '2024-09-17 17:47:23'),
(10, 3, 2, 'Regina', '43', '63', 'Pria', 'Ducimus tenetur con', '1989-07-24', 'SMA', 'Linus Guthrie', 'Reiciendis quas aliq', '9108', 'sacaworaz@mailinator.com', 'Vel impedit exercit', 0, NULL, '2024-09-17 17:49:59', '2024-09-17 17:49:59'),
(11, 2, 2, 'Mia', '13', '85', 'Pria', 'Corrupti eos aut v', '2016-06-12', 'S3', 'Madeson Richardson', 'Aliquid aspernatur l', '08098089', 'zebogiw@mailinator.com', 'Impedit in omnis qu', 0, NULL, '2024-09-17 18:16:58', '2024-09-17 18:16:58'),
(12, 3, 2, 'Kennan', '18', '77', 'Wanita', 'Aspernatur id obcae', '1994-06-07', 'SD', 'Quinn Burke', 'Ut aliqua Ut alias', '5675', 'petamef@mailinator.com', 'Impedit corporis si', 0, NULL, '2024-09-17 18:22:04', '2024-09-17 18:22:04');

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
('ST40kac3aRJn4rQ5OUg2qWci3RHSFyDa2qxxGjmt', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiT2d4V3dvT0hTYlRqRTR3bnZBNzd0RG1pREpVdlhkTVUwVDVmNnF1cSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI2OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvZm9ybSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1726560626),
('WSGK7w0WLqi3I6moQkNRKRvxe4QZ7GBw7nmE62Ne', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibUV6MXVHcDYxaFA2alRQNlJZUTczYmh4bDk1WTFsVnlVUVNzVVFEayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jb25maXJtIjt9fQ==', 1726576774),
('XFd1rhDYB0aHG91YWvuLrzpLEgx5VSiE1khyObLb', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZE9zNldSa1puMXBLWU5YM0ZsZzBuSDRnYlJsVWZwZk1Vd0EyVzFCTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YToxOntpOjA7czo1OiJlcnJvciI7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2Rhc2hib2FyZCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czo1OiJlcnJvciI7czoyOToiYW5kYSB0aWRhayBtZW1pbGlraSBoYWsgYWtzZXMiO30=', 1726555538),
('ZAVOrVMxO7HMDVmjjyaKAxGG9YzbvLuyzaoPf5ak', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoib1V4cGFOQmR6QzlPMmxQTzNQWFhuZGJqWWlkWjFMekRvU0pPSURwaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wZXNlcnRhL2RldGFpbC85Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyOToiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2NvbmZpcm0iO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1726625793);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_level` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_level`, `nama_lengkap`, `email`, `password`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 1, 'Dudung', 'admin@gmail.com', '$2y$12$wH5g6owGKQFqMscBMCKIUOGGJbGs8gFoTBMyOEDKwTmB3PcXyFi6G', NULL, NULL, NULL),
(3, 2, 'Maman', 'pic@gmail.com', '$2y$12$0i5fQxdWjpCtgvvU35kfTOPT0VX5MFsAmO.M6qMnyAZMONUXctn0G', NULL, '2024-09-14 06:48:23', '2024-09-14 06:48:23'),
(4, 3, 'Rojali', 'administrator@gmail.com', '$2y$12$dmj0cF1ZaTQYVPB3Hc5AnO7UEJoQRw5P67mpQvwDOiXobYIQWgw.e', NULL, '2024-09-14 06:49:05', '2024-09-14 06:49:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gelombangs`
--
ALTER TABLE `gelombangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusans`
--
ALTER TABLE `jurusans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesertas`
--
ALTER TABLE `pesertas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pesertas_email_unique` (`email`),
  ADD KEY `pesertas_id_jurusan_foreign` (`id_jurusan`),
  ADD KEY `pesertas_id_gelombang_foreign` (`id_gelombang`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_level_foreign` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gelombangs`
--
ALTER TABLE `gelombangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pesertas`
--
ALTER TABLE `pesertas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesertas`
--
ALTER TABLE `pesertas`
  ADD CONSTRAINT `pesertas_id_gelombang_foreign` FOREIGN KEY (`id_gelombang`) REFERENCES `gelombangs` (`id`),
  ADD CONSTRAINT `pesertas_id_jurusan_foreign` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusans` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_level_foreign` FOREIGN KEY (`id_level`) REFERENCES `levels` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
