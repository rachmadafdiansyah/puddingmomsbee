-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 24, 2022 at 07:27 PM
-- Server version: 10.3.32-MariaDB-log-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puddingm_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `gambar`, `harga`, `stok`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Pudding Bulat Sedang', 'p4.jpg', '190000', '3', 'Diameter Pudding 25 cm', '2019-11-13 17:00:00', '2022-01-10 08:51:05'),
(2, 'Pudding Persegi Besar', 'p8.jpg', '230000', '5', 'Besar Pudding 30x30 cm', '2019-11-13 17:00:00', '2021-12-30 20:05:14'),
(3, 'Pudding Persegi Panjang', 'p9.jpg', '85000', '3', 'Panjang 22 cm dan Lebar 10 cm', '2019-11-13 17:00:00', '2022-01-03 19:27:53'),
(4, 'Pudding Bulat Sedang', 'p6.jpg', '130000', '2', 'Diameter Pudding 23 cm', '2019-11-13 17:00:00', '2019-11-13 17:00:00'),
(5, 'Pudding Bulat Besar', 'p1.jpg', '200000', '2', 'Diameter Pudding 27 cm', '2019-11-13 17:00:00', '2022-01-10 08:47:36'),
(6, 'Puding Persegi Kecil', 'p7.jpg', '100000', '2', 'Besar Pudding 15x15 cm', '2019-11-13 17:00:00', '2021-07-14 08:15:02'),
(7, 'Pudding Gula Merah Buah', 'p11.jpg', '200000', '3', 'Diameter Pudding 25 cm', '2019-11-13 17:00:00', '2022-01-10 08:10:40'),
(8, 'Fudgy Brownies', 'p12.jpg', '90000', '2', 'Besar Kue 15x15cm, Bebas Topping', '2019-11-13 17:00:00', '2019-11-13 17:00:00'),
(9, 'Kue Brownis Coklat', 'p13.jpg', '110000', '2', 'Bentuk Hati Besar, Bebas Topping', '2019-11-13 17:00:00', '2019-11-13 17:00:00');

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
(3, '2019_11_14_012420_create_barangs_table', 1),
(4, '2019_11_14_012711_create_pesanans_table', 1),
(5, '2019_11_14_012822_create_pesanan_details_table', 1);

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
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `user_id`, `tanggal`, `status`, `kode`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(9, 6, '2021-07-14', '4', 598, 100000, '2021-07-14 08:14:32', '2021-12-30 19:52:53'),
(10, 7, '2021-07-14', '4', 905, 170000, '2021-07-14 08:18:40', '2021-12-30 20:07:26'),
(11, 8, '2021-07-15', '3', 480, 250000, '2021-07-15 02:38:50', '2021-12-30 20:24:18'),
(12, 8, '2021-08-05', '2', 494, 250000, '2021-08-05 03:07:40', '2021-12-30 19:55:43'),
(13, 8, '2021-08-20', '1', 337, 250000, '2021-08-20 11:36:25', '2021-08-20 11:41:44'),
(14, 8, '2021-08-28', '0', 863, 0, '2021-08-27 21:00:33', '2021-08-29 03:49:40'),
(15, 10, '2021-09-05', '0', 810, 250000, '2021-09-05 04:36:15', '2021-09-05 04:36:15'),
(16, 13, '2022-01-04', '4', 482, 85000, '2022-01-03 19:26:49', '2022-01-03 19:31:22'),
(17, 11, '2022-01-10', '1', 848, 200000, '2022-01-10 08:10:22', '2022-01-10 08:10:40'),
(18, 14, '2022-01-10', '2', 713, 200000, '2022-01-10 08:46:31', '2022-01-10 08:55:08'),
(19, 15, '2022-01-12', '0', 625, 85000, '2022-01-11 22:04:21', '2022-01-11 22:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_details`
--

CREATE TABLE `pesanan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanan_details`
--

INSERT INTO `pesanan_details` (`id`, `barang_id`, `pesanan_id`, `jumlah`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(13, 6, 9, 1, 100000, '2021-07-14 08:14:32', '2021-07-14 08:14:32'),
(14, 3, 10, 2, 170000, '2021-07-14 08:18:40', '2021-07-14 08:19:21'),
(15, 2, 11, 1, 250000, '2021-07-15 02:38:50', '2021-07-15 02:38:50'),
(16, 2, 12, 1, 250000, '2021-08-05 03:07:40', '2021-08-05 03:07:40'),
(17, 2, 13, 1, 250000, '2021-08-20 11:36:25', '2021-08-20 11:36:25'),
(19, 2, 15, 1, 250000, '2021-09-05 04:36:15', '2021-09-05 04:36:15'),
(20, 3, 16, 1, 85000, '2022-01-03 19:26:49', '2022-01-03 19:26:49'),
(21, 7, 17, 1, 200000, '2022-01-10 08:10:22', '2022-01-10 08:10:22'),
(22, 5, 18, 1, 200000, '2022-01-10 08:46:31', '2022-01-10 08:46:31'),
(23, 3, 19, 1, 85000, '2022-01-11 22:04:21', '2022-01-11 22:04:21');

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
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'admin1@gmail.com'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `alamat`, `nohp`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
(2, 'Admin 1', 'admin1@gmail.com', NULL, '$2y$10$QHd75SDtCkNmgrzBNOrJFeZx8WMl7HKsst4G9kpowClU50erTuv6S', 'Jln. Dato Tonggara III no. 8, Kramat Jati, Jakarta Timur', '082113565600', NULL, '2021-07-10 08:53:01', '2021-07-11 05:50:26', 'admin'),
(6, 'test', 'adidia@gmail.com', NULL, '$2y$10$jD.V2Bi4Um/9urv7.Hreu.a8qDO74f1CIVX1JhCwRxe.ubbuDkbgG', 'Jln. Berut', '082113565612', NULL, '2021-07-14 08:14:17', '2021-07-14 08:14:53', 'admin1@gmail.com'),
(7, 'Zaky', 'zakyfn0303@gmail.com', NULL, '$2y$10$tBRQQvLAP/.URL92hH9Co.azR9J7mYBePJZWia0JbEcrFasDxiNAW', 'Jl. Perintis', '087781167041', NULL, '2021-07-14 08:14:45', '2021-07-14 08:18:59', 'admin1@gmail.com'),
(8, 'Rachmad Afdiansyah', 'rachmadafdiansyah@gmail.com', NULL, '$2y$10$tJQ4qKxri9SNSxbpWCi1peaz24nt9NY.3UVHA2BDH9z2m3ibS71h.', 'Jln. Dato Tonggara III no. 8', '082113565600', NULL, '2021-07-15 02:16:36', '2021-07-15 03:14:50', 'admin1@gmail.com'),
(9, 'sintia', 'sintia@gmail.com', NULL, '$2y$10$xJTXOa5yhWha/2XDRgjlMOrlB/kb93qFEZKj.cgDfxpdHEwTCcNvq', NULL, NULL, NULL, '2021-09-05 03:06:10', '2021-09-05 03:06:10', 'admin1@gmail.com'),
(10, 'Marshall', 'n46hazta@gmail.com', NULL, '$2y$10$qBf/ns1ONYfsGTR7oc242ugxX.E7pIlYnVncKTkgGYG.6pgJyQIt.', NULL, NULL, NULL, '2021-09-05 04:36:05', '2021-09-05 04:36:05', 'admin1@gmail.com'),
(11, 'Selfiour', 'selfiour@gmail.com', NULL, '$2y$10$TLa5rfEj/iT/thbKZgojmuRLH15qMhXEQA73Qv5btHriOo8K0Gkme', 'Jln Biruk', '082311341292', NULL, '2022-01-02 08:53:25', '2022-01-10 08:10:35', 'admin1@gmail.com'),
(12, 'Orang', 'orangberpantatpanas@gmail.com', NULL, '$2y$10$IATJJWhPBb39110xGmRZ2.W0oEJvUPT3Gs6VK/s6XSO2MNdvaC9te', NULL, NULL, NULL, '2022-01-03 19:16:45', '2022-01-03 19:16:45', 'admin1@gmail.com'),
(13, 'Rachmad', 'rachmad@gmail.com', NULL, '$2y$10$iCxBRLDf8oq3c6fnRGJ80OkFNtRp8qBAHLPT2SapWgQD3OwGXLXU2', 'Jln. Binjai', '081342748502', NULL, '2022-01-03 19:26:16', '2022-01-03 19:27:45', 'admin1@gmail.com'),
(14, 'Zaky Fauzan', 'zaky@gmail.com', NULL, '$2y$10$01X./52fkUyIeKsel8WT2ObTg7pa62DyzGiQ9vEI9daKl96W5n9YS', 'Jln. Perintis', '082113565641', NULL, '2022-01-10 08:45:48', '2022-01-10 08:47:15', 'admin1@gmail.com'),
(15, 'Indi', 'indi28@gmail.com', NULL, '$2y$10$hYpxmH3qQVvUESjS65ffeeWlpsgMoq82n7fBiWy4wTyUtDlh/yPNu', NULL, NULL, NULL, '2022-01-11 22:04:04', '2022-01-11 22:04:04', 'admin1@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
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
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan_details`
--
ALTER TABLE `pesanan_details`
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
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pesanan_details`
--
ALTER TABLE `pesanan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
