-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 07:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siperpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `judul_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pengarang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `kategori_id`, `judul_buku`, `nama_pengarang`, `created_at`, `updated_at`) VALUES
(5, 6, 'Dilan 1990', 'Pidi Baiq', NULL, '2022-01-18 10:29:37'),
(6, 6, 'Ketika Cinta Bertasbih', 'Habiburrahman El Shirazy', NULL, NULL),
(7, 6, 'Filosofi Kopi, Petir, Supernova', 'Dee Lestari', NULL, NULL),
(8, 6, 'Pergi, Bumi, Pulang', 'Tere Liye', NULL, NULL),
(9, 7, 'A Beautiful Mind', 'Sylvia Nasar', NULL, NULL),
(10, 7, 'Alexander Hamilton', 'Ron Chernow', NULL, NULL),
(11, 7, 'Barracoon: The Story of the Last \"Black Cargo\"', 'Zora Neale Hurston', NULL, NULL),
(12, 7, 'Churchill: A Life', 'Martin Gilbert', NULL, NULL),
(13, 10, 'Akasha: Ito Junji - Best of Best Short Story Collection', 'Ito Junji', NULL, NULL),
(14, 10, 'Demon Slayer: Kimetsu No Yaiba', 'Koyoharu Gotouge', NULL, NULL),
(15, 10, 'Kungfu Boy Legends 27', 'Takeshi Maekawa', NULL, NULL),
(16, 10, 'Detektif Conan', 'Aoyama Gosho', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

CREATE TABLE `borrows` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `borrows`
--

INSERT INTO `borrows` (`id`, `member_id`, `book_id`, `status_id`, `created_at`, `updated_at`) VALUES
(14, 1, 14, 1, '2022-01-18 10:43:52', '2022-01-18 10:43:52'),
(15, 1, 13, 2, '2022-01-18 10:44:17', '2022-01-18 10:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `category_book`
--

CREATE TABLE `category_book` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_book`
--

INSERT INTO `category_book` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(6, 'Novel', NULL, NULL),
(7, 'Biografi', '2022-01-18 10:34:28', '2022-01-18 10:34:28'),
(10, 'Komik', '2022-01-18 10:40:52', '2022-01-18 10:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_13_072635_create_category_book', 1),
(5, '2020_10_15_135950_create_books_table', 1),
(6, '2020_10_17_090342_create_roles_table', 1),
(7, '2020_10_21_114447_rename_role_column_users', 1),
(8, '2020_10_26_025639_add_info_user_table', 1),
(9, '2020_10_26_033506_create_statuses_table', 1),
(10, '2020_10_26_033552_create_borrows_table', 1);

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
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2022-01-08 01:14:40', '2022-01-08 01:14:40'),
(2, 'member', '2022-01-08 01:14:40', '2022-01-08 01:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `nama_status`, `created_at`, `updated_at`) VALUES
(1, 'peminjaman', '2022-01-08 01:14:40', '2022-01-08 01:14:40'),
(2, 'pengembalian', '2022-01-08 01:14:40', '2022-01-08 01:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'Moch Satrio', 'admin@siperpus.com', NULL, '$2y$10$9UTnPvYr3cCuRGUQdEI12.HJsRPWYffzdHYD1g6WgMGeFUEtiecuW', '081888888888', 'Jl. Sawojajar No.3', NULL, '2022-01-08 01:14:40', '2022-01-18 10:15:59', 1),
(2, 'Dike Joran', 'user@siperpus.com', NULL, '$2y$10$VznSFd9UegIGLTUszxT64eM/S/8.sLXzg6lsw5f0YtFLL0JH.a5xe', '081000000000', 'Jl. Serayu No.99', NULL, '2022-01-08 01:14:40', '2022-01-18 10:16:39', 2),
(3, 'Setyawan', 'setyawan@gmail.com', NULL, '$2y$10$4ZMQtNC1ylsxDoiqB66tHuM0Z2lTHN6yKh3lD/rqjz0Z7fiRvBdKG', '081212341234', 'Jl. Batu No.99', NULL, '2022-01-18 10:49:36', '2022-01-18 10:49:36', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `borrows`
--
ALTER TABLE `borrows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borrows_member_id_foreign` (`member_id`),
  ADD KEY `borrows_book_id_foreign` (`book_id`),
  ADD KEY `borrows_status_id_foreign` (`status_id`);

--
-- Indexes for table `category_book`
--
ALTER TABLE `category_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `borrows`
--
ALTER TABLE `borrows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `category_book`
--
ALTER TABLE `category_book`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `category_book` (`id`);

--
-- Constraints for table `borrows`
--
ALTER TABLE `borrows`
  ADD CONSTRAINT `borrows_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `borrows_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `borrows_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
