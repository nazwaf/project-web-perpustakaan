-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2024 pada 17.37
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpusdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `buku_id` int(11) NOT NULL,
  `pinjam_id` int(11) NOT NULL,
  `kembali_id` int(11) NOT NULL,
  `anggota_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `rak_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_anggota` varchar(30) NOT NULL,
  `nama_anggota` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `jk` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `kode_anggota`, `nama_anggota`, `email`, `nohp`, `alamat`, `jk`, `created_at`, `updated_at`) VALUES
(1, 'AGT001', 'Anindya Silvia', 'aninanin@gmail.com', '088987676543', 'Kota Baru', 'Perempuan', '2024-12-01 04:46:36', '2024-12-01 04:46:36'),
(2, 'AGT002', 'Nazwa Finanda', 'wawa@gmail.com', '088987676543', 'Eka Jaya', 'Perempuan', '2024-12-22 15:22:01', '2024-12-22 15:22:01'),
(3, 'AGT003', 'Fitriya Rahma', 'lala@gmail.com', '088998767654', 'Jelutung', 'Perempuan', '2024-12-19 15:22:01', '2024-12-19 15:22:01'),
(4, 'AGT004', 'Shafaa Kayla', 'keil@gmail.com', '087898765634', 'Kota Baru', 'Perempuan', '2024-12-26 15:24:18', '2024-12-26 15:24:18'),
(5, 'AGT005', 'Dzakwan Syah', 'zakwan@gmail.com', '088978654332', 'Talang Bakung', 'Laki-Laki', '2024-12-29 15:24:18', '2024-12-29 15:24:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_buku` varchar(10) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `isbn` varchar(60) NOT NULL,
  `thn_terbit` varchar(10) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `rak` varchar(10) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `kode_buku`, `judul`, `pengarang`, `penerbit`, `isbn`, `thn_terbit`, `kategori`, `rak`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'BK001', 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', '978-602-250-048-0', '2005', 'Fiksi', '1A', '5', '2024-12-27 04:57:52', '2024-12-27 04:57:52'),
(2, 'BK002', 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Hasta Mitra', '978-979-685-410-2', '1980', 'Fiksi', '1B', '2', '2024-12-27 04:57:52', '2024-12-27 04:57:52'),
(3, 'BK003', 'Filosofi Teras', 'Henry Manampiring', 'Gramedia Pustaka Utama', '978-602-03-3516-2', '2016', 'Non Fiksi', '2B', '25', '2024-12-29 10:16:33', '2024-12-29 10:16:33'),
(4, 'BK004', 'Sejarah Indonesia Modern', 'M.C. Ricklefs', 'PT. Gramedia Pustaka Utama', '978-979-605-909-8', ' 2008', 'Sejarah', '2A', '35', '2024-12-29 10:16:33', '2024-12-29 10:16:33'),
(5, 'BK005', 'Laut Bercerita', 'Leila S. Chudori', 'Gramedia Pustaka Utama', '978-602-03-2181-1', '2017', 'Fiksi', '1A', '25', '2024-12-29 10:21:51', '2024-12-29 10:21:51'),
(6, 'BK006', 'Bintang di Surga', ' Tere Liye', 'Mizan Publishing', '978-602-413-078-1', '2008', 'Anak - Anak', '3B', '30', '2024-12-29 10:21:51', '2024-12-29 10:21:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kategori` varchar(30) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kode_kategori`, `kategori`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'KT001', 'Fiksi', '10', '2024-12-27 04:54:15', '2024-12-27 04:54:15'),
(2, 'KT002', 'Non Fiksi', '30', '2024-12-27 04:54:15', '2024-12-27 04:54:15'),
(3, 'KT003', 'Ensiklopedia', '50', '2024-12-29 10:13:56', '2024-12-29 10:13:56'),
(4, 'KT004', 'Anak-Anak', '50', '2024-12-29 10:13:56', '2024-12-29 10:13:56'),
(5, 'KT005', 'Sejarah', '50', '2024-12-29 10:15:36', '2024-12-29 10:15:36'),
(6, 'KT006', 'Lainnya', '50', '2024-12-29 10:15:36', '2024-12-29 10:15:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kembali`
--

CREATE TABLE `kembali` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kembali` varchar(10) NOT NULL,
  `nama_pengembali` varchar(60) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tenggat` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2024_12_27_042414_create_admin_table', 1),
(3, '2024_12_27_042458_create_pinjam_table', 1),
(4, '2024_12_27_042518_create_kembali_table', 1),
(5, '2024_12_27_042549_create_anggota_table', 1),
(6, '2024_12_27_042612_create_buku_table', 1),
(7, '2024_12_27_042631_create_kategori_table', 1),
(8, '2024_12_27_042652_create_rak_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 2),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pinjam` varchar(10) NOT NULL,
  `nama_peminjam` varchar(60) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tenggat` date NOT NULL,
  `status` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rak`
--

CREATE TABLE `rak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_rak` varchar(30) NOT NULL,
  `rak` varchar(40) NOT NULL,
  `lantai` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rak`
--

INSERT INTO `rak` (`id`, `kode_rak`, `rak`, `lantai`, `created_at`, `updated_at`) VALUES
(1, 'RK001', '1A', 'Lantai 1', '2024-12-27 04:56:09', '2024-12-27 04:56:09'),
(2, 'RK002', '1B', 'Lantai 1', '2024-12-27 04:56:09', '2024-12-27 04:56:09'),
(3, 'RK003', '2A', 'Lantai 2', '2024-12-29 10:09:37', '2024-12-29 10:09:37'),
(4, 'RK004', '2B', 'Lantai 2', '2024-12-29 10:09:37', '2024-12-29 10:09:37'),
(5, 'RK005', '3A', 'Lantai 3', '2024-12-29 10:11:14', '2024-12-29 10:11:14'),
(6, 'RK006', '3B', 'Lantai 3', '2024-12-29 10:11:14', '2024-12-29 10:11:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Project Kelompok', 'stuvidylrn@gmail.com', NULL, '$2y$10$ziYCvYeZyudzclwJJyr9ruXS.ze7ULzzxG7JsaOBOEPXgXH6wcU/S', NULL, '2024-12-13 07:10:00', '2024-12-13 07:10:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kembali`
--
ALTER TABLE `kembali`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kembali`
--
ALTER TABLE `kembali`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rak`
--
ALTER TABLE `rak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
