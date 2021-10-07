-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 04:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdnbutun02`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Pembenahan Bangunan Kelas', 'Pembenahan ruang kelas dilakukan pada tanggal 17 Desember 2020', 'bersih.jpg', NULL, '2020-12-20 03:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `user_id`, `nama`, `telepon`, `alamat`, `profile`, `created_at`, `updated_at`) VALUES
(196203161980102001, '4', 'Eko Endang Iriani', '081217236028', 'Jl. Kartini No.90 Talun', '03d485f828f088d2ddd34a3da5efb7da.jpg', '2020-12-19 03:06:46', '2020-12-19 07:38:59'),
(196203161980102005, '9', 'Farida Ulfa', '087654368245', 'Jl. Suhatta No. 56 Klojen', '1239bccd30fc2aba5ea23aac5425354c.jpg', '2020-12-19 16:44:32', '2020-12-20 06:47:27'),
(196203161980102006, '10', 'Destiara Nurlisya Rahayu', '081122334455', 'Jl. Kenanga No.77 Sukun', NULL, '2020-12-19 16:45:52', '2020-12-19 16:45:52'),
(196203161980102007, '12', 'Lilik Supadmi', '0812345678', 'jl. kartomo no.19', 'PAS FOTO.jpeg', '2021-09-27 03:12:23', '2021-09-27 03:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guru_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `kode`, `nama`, `semester`, `guru_id`, `created_at`, `updated_at`) VALUES
(200020, 'PBO-01', 'Pemrograman Objek', 'genap', 196203161980102001, '2020-12-19 10:09:03', '2020-12-19 06:45:50'),
(200022, 'BASDAT-01', 'Bahasa Inggris 1', 'Ganjil', 196203161980102001, '2020-12-19 16:36:58', '2020-12-19 16:45:11'),
(200023, 'BING-01', 'Bahasa Inggris 1', 'Ganjil', 196203161980102001, '2020-12-19 16:45:03', '2020-12-19 21:25:18'),
(200024, 'UI-01', 'Desain Interface', 'Ganjil', 196203161980102006, '2020-12-20 06:48:18', '2020-12-20 06:48:18');

-- --------------------------------------------------------

--
-- Table structure for table `mapel_siswa`
--

CREATE TABLE `mapel_siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mapel_id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mapel_siswa`
--

INSERT INTO `mapel_siswa` (`id`, `mapel_id`, `siswa_id`, `nilai`, `created_at`, `updated_at`) VALUES
(2, 200022, 1931710180, 85, '2020-12-19 16:37:34', '2020-12-19 16:37:34');

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
(4, '2020_12_16_011641_create_admin_table', 1),
(11, '2020_12_17_163626_create_mapel_siswa_table', 2),
(72, '2014_10_12_000000_create_users_table', 3),
(73, '2014_10_12_100000_create_password_resets_table', 3),
(74, '2019_08_19_000000_create_failed_jobs_table', 3),
(75, '2020_12_16_011642_create_siswa_table', 3),
(76, '2020_12_17_074040_create_guru_table', 3),
(77, '2020_12_17_163002_create_mapel_table', 3),
(78, '2020_12_17_223044_create_mapel_siswa_table', 3),
(79, '2020_12_20_063737_create_berita_table', 4),
(80, '2020_12_20_063922_create_profil_sekolah_table', 4),
(81, '2020_12_20_063945_create_fasilitas_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profil_sekolah`
--

CREATE TABLE `profil_sekolah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `user_id`, `kelas`, `jenis_kelamin`, `agama`, `alamat`, `profile`, `created_at`, `updated_at`) VALUES
(1931710180, 'Dyah Ayu Anggraini', '2', 'MI-2C', 'P', 'Islam', 'Jl. Sudirman No.23 Wlingi', '8acb9ef5f2c5b83e7cf55a02ebbe7bc9.jpg', '2020-12-19 02:11:42', '2020-12-19 05:02:02'),
(1931710182, 'Abdush Shidqi', '5', 'MI-2C', 'L', 'Islam', 'Jl. Soekarno-Hatta No.9 Malang', NULL, '2020-12-19 04:59:10', '2020-12-19 04:59:10'),
(1931710183, 'Elsa Apreliani Sutrisno', '8', 'MI-2C', 'P', 'Islam', 'Jl. Timur No. Lowokwaru', NULL, '2020-12-19 16:42:22', '2020-12-19 16:42:22'),
(1931710184, 'Osy Krisdayanti', '11', 'MI-2C', 'P', 'Islam', 'Jl. Semeru No.17 Malang', '8acb9ef5f2c5b83e7cf55a02ebbe7bc9.jpg', '2020-12-20 06:45:13', '2020-12-20 06:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ayu Ariesta', 'admin', 'ayuariesta71@gmail.com', NULL, '$2y$10$JCW4OwXnbj5R19.Cq6lmIehUoQAkuTH1EkhNNChmb0UyH0b0DlG/a', NULL, '2020-12-19 01:47:50', '2020-12-19 01:47:50'),
(2, 'Dyah Ayu Anggraini', 'siswa', 'dyahayu@gmail.com', NULL, '$2y$10$pWiOcn4A3Y1fuWXLMpHC8OSQHFzp2Izhve0x5xH4wiHU2kXU7GSDi', NULL, '2020-12-19 02:11:42', '2020-12-19 02:11:42'),
(4, 'Eko Endang Iriani', 'guru', 'ekoendang09096@gmail.com', NULL, '$2y$10$keCYfsOPYcK5oaf1lfeBuefQHG4Qf/Ytm.mnTn9TsSrk2ApU2qm9i', NULL, '2020-12-19 03:06:46', '2020-12-19 03:06:46'),
(5, 'Abdush Shidqi', 'siswa', 'dikiabdush@gmail.com', NULL, '$2y$10$Tfv66nkAl9mUp.fODO/DAON3yuF3.rLhslp44rjhP71is4ywzoklO', NULL, '2020-12-19 04:59:10', '2020-12-19 04:59:10'),
(8, 'Elsa Apreliani Sutrisno', 'siswa', 'elsaaprelia@gmail.com', NULL, '$2y$10$OMfQfkDSX/NuFd5ytvTi5e8B8Ya50g1a.WAPdQYesrmv4HXjSq9j6', NULL, '2020-12-19 16:42:22', '2020-12-19 16:42:22'),
(9, 'Farida Ulfa', 'guru', 'faridaulfa@gmail.com', NULL, '$2y$10$1l8c2nxTh6iAY4a4iykVC.FZyHmq3n9.e.ZmXTfCteax1smfvjk.q', NULL, '2020-12-19 16:44:32', '2020-12-19 16:44:32'),
(10, 'Destiara Nurlisya Rahayu', 'guru', 'destiarara@gmail.com', NULL, '$2y$10$AH2E4HIscP4lif2Yrl5AZuvqFxpUsqBStlhlcrEpwunYlz.bjA0bW', NULL, '2020-12-19 16:45:52', '2020-12-19 16:45:52'),
(11, 'Osy Krisdayanti', 'siswa', 'osykris12@gmail.com', NULL, '$2y$10$iwwG0h9nvJA166sn8aZu0ekSptyXvXeP4h3sOywcAUEIN.vaLxUJa', NULL, '2020-12-20 06:45:13', '2020-12-20 06:45:13'),
(12, 'Lilik Supadmi', 'guru', 'lilik123@gmail.com', NULL, '$2y$10$La.X0.ovhZT09PLu/XJOZ.17Dx58DUCgd3/x7rDz9eRn5/Rl.55/S', NULL, '2021-09-27 03:12:23', '2021-09-27 03:12:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapel_guru_id_foreign` (`guru_id`);

--
-- Indexes for table `mapel_siswa`
--
ALTER TABLE `mapel_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapel_siswa_mapel_id_foreign` (`mapel_id`),
  ADD KEY `mapel_siswa_siswa_id_foreign` (`siswa_id`);

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
-- Indexes for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
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
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196203161980102008;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200025;

--
-- AUTO_INCREMENT for table `mapel_siswa`
--
ALTER TABLE `mapel_siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1931710185;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mapel`
--
ALTER TABLE `mapel`
  ADD CONSTRAINT `mapel_guru_id_foreign` FOREIGN KEY (`guru_id`) REFERENCES `guru` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mapel_siswa`
--
ALTER TABLE `mapel_siswa`
  ADD CONSTRAINT `mapel_siswa_mapel_id_foreign` FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mapel_siswa_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
