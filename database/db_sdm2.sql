-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 08:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sdm2`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` bigint(20) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_istirahat` time NOT NULL,
  `tanggal_kerja` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `pegawai_id`, `jam_masuk`, `jam_istirahat`, `tanggal_kerja`, `created_at`, `updated_at`) VALUES
(1, 2, '03:55:04', '06:55:04', '2023-06-01', NULL, NULL),
(2, 3, '10:47:00', '13:47:00', '2023-05-04', '2023-06-03 04:47:26', '2023-06-03 21:09:39'),
(3, 4, '13:02:00', '15:59:00', '2023-06-13', '2023-06-03 20:00:06', '2023-06-03 21:45:47');

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
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` bigint(20) DEFAULT NULL,
  `tunjangan_id` bigint(20) NOT NULL,
  `jumlah_gaji` varchar(255) NOT NULL,
  `total_gaji` varchar(255) NOT NULL,
  `tanggal_gaji` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id`, `pegawai_id`, `tunjangan_id`, `jumlah_gaji`, `total_gaji`, `tanggal_gaji`, `created_at`, `updated_at`) VALUES
(7, 5, 2, '60000', '70000', '2023-06-01', '2023-06-03 21:44:19', '2023-06-03 21:47:17'),
(8, 2, 2, '60000', '70000', '2023-05-01', '2023-06-04 02:48:02', '2023-06-04 02:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `ijin`
--

CREATE TABLE `ijin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alasan_ijin` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ijin`
--

INSERT INTO `ijin` (`id`, `alasan_ijin`, `created_at`, `updated_at`) VALUES
(1, 'FLU', NULL, '2023-06-03 05:16:49'),
(2, 'Kepentingan Keluarga', '2023-06-03 04:58:31', '2023-06-03 04:58:31');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_03_011153_create_pegawais_table', 1),
(6, '2023_06_03_014451_create_absensis_table', 1),
(7, '2023_06_03_014654_create_gajis_table', 1),
(8, '2023_06_03_014711_create_ijins_table', 1),
(9, '2023_06_03_014726_create_pendidikans_table', 1),
(10, '2023_06_03_014741_create_pengajuans_table', 1),
(11, '2023_06_03_014756_create_pengembangans_table', 1),
(12, '2023_06_03_014811_create_penggunas_table', 1),
(13, '2023_06_03_014824_create_tunjangans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_handphone` varchar(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `alamat`, `nomor_handphone`, `jabatan`, `created_at`, `updated_at`) VALUES
(2, 'Fulan', 'Pakis', '0841435244131', 'Kasir', '2023-06-03 00:02:16', '2023-06-03 00:02:16'),
(3, 'Sueb', 'Nganjuk', '0841435244131', 'Inventory Control', '2023-06-03 21:09:19', '2023-06-03 21:09:19'),
(4, 'Anggoro', 'Malang', '0851318319618', 'Driver', '2023-06-03 21:40:55', '2023-06-03 21:40:55'),
(5, 'Budi', 'Nganjuk', '087631312414567', 'Pramuniaga', '2023-06-03 21:41:39', '2023-06-03 21:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `asal_pendidikan` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `pendidikan_terakhir`, `asal_pendidikan`, `created_at`, `updated_at`) VALUES
(1, 'SMA', 'SMA Negeri 1 Nganjuk', NULL, NULL),
(2, 'SMK', 'SMK Negeri 6 Malang', '2023-06-03 05:00:17', '2023-06-03 05:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` bigint(20) NOT NULL,
  `ijin_id` bigint(20) NOT NULL,
  `tgl_mulaiizin` date NOT NULL,
  `tgl_selesaiizin` date NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `pegawai_id`, `ijin_id`, `tgl_mulaiizin`, `tgl_selesaiizin`, `tgl_pengajuan`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2023-06-01', '2023-06-02', '2023-05-28', NULL, NULL),
(2, 2, 2, '2023-05-11', '2023-05-14', '2023-05-06', '2023-06-03 05:04:09', '2023-06-03 05:04:09'),
(3, 4, 1, '2023-05-01', '2023-05-03', '2023-06-02', '2023-06-03 21:13:01', '2023-06-03 21:58:49');

-- --------------------------------------------------------

--
-- Table structure for table `pengembangan`
--

CREATE TABLE `pengembangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pegawai_id` bigint(20) NOT NULL,
  `nama_pengembangan` varchar(255) NOT NULL,
  `pendidikan_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengembangan`
--

INSERT INTO `pengembangan` (`id`, `pegawai_id`, `nama_pengembangan`, `pendidikan_id`, `created_at`, `updated_at`) VALUES
(1, 5, 'Ngarit', 1, NULL, '2023-06-03 22:02:13'),
(2, 2, 'Macul', 2, '2023-06-03 05:06:07', '2023-06-03 05:06:07'),
(3, 3, 'Pramuka', 2, '2023-06-03 21:15:40', '2023-06-03 21:15:40'),
(4, 4, 'Basket', 2, '2023-06-03 22:01:52', '2023-06-03 22:01:52');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan`
--

CREATE TABLE `tunjangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tunjangan` varchar(50) NOT NULL,
  `nilai_tunjangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tunjangan`
--

INSERT INTO `tunjangan` (`id`, `nama_tunjangan`, `nilai_tunjangan`, `created_at`, `updated_at`) VALUES
(1, 'Lembur', '50000', NULL, NULL),
(2, 'Lembur 3 Jam', '150000', '2023-06-03 05:09:01', '2023-06-03 05:09:01');

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
(1, 'sueb', 'sueb@gmail.com', NULL, '$2y$10$Z1RNP7xQlw7gFWKsUSlUG.aikNu7C1w7bolluhvP1uUB9xMH7jI1m', NULL, NULL, NULL),
(2, 'budi', 'budi@gmail.com', NULL, '$2y$10$iuBuT1BGjROCfg3FY7xAbuZW.CzRWEy/s4y23gZeUS.wR4nxmwIZ.', NULL, '2023-06-04 02:45:45', '2023-06-04 07:44:10'),
(4, 'angga', 'angga@gmail.com', NULL, '$2y$10$90XMskFyDQEbF5XVH5ur2.668S4pv.MPCtS2lMqbnKM6a9yAqM.vO', NULL, '2023-06-04 18:02:44', '2023-06-04 18:02:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ijin`
--
ALTER TABLE `ijin`
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
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengembangan`
--
ALTER TABLE `pengembangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tunjangan`
--
ALTER TABLE `tunjangan`
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
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ijin`
--
ALTER TABLE `ijin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengembangan`
--
ALTER TABLE `pengembangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tunjangan`
--
ALTER TABLE `tunjangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
