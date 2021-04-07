-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2020 pada 17.15
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `address`, `email`, `created_at`, `updated_at`) VALUES
(4025, 'Hilvia', '0899999', 'Blitar', 'hil@gmail.com', '2020-07-13 15:06:50', '2020-07-13 15:06:50'),
(6374, 'kharisma', '0899999', 'malang', 'khar@gmail.com', '2020-07-15 12:35:04', '2020-07-15 12:35:04'),
(8806, 'sari', '089993456', 'Jatimulyo, Malang', 'adeliarisma73@gmail.com', '2020-07-23 20:31:17', '2020-07-23 20:31:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `invoices`
--

INSERT INTO `invoices` (`id`, `customer_id`, `status`, `note`, `total`, `created_at`, `updated_at`) VALUES
(15, 4025, 0, NULL, 1500000, '2020-07-15 10:11:55', '2020-07-15 10:12:01'),
(19, 6374, 0, NULL, 4500000, '2020-07-15 12:35:22', '2020-07-15 12:35:38'),
(20, 6374, 0, NULL, 4500000, '2020-07-15 16:24:39', '2020-07-15 16:24:56'),
(21, 6374, 0, NULL, 2800000, '2020-07-23 07:27:06', '2020-07-23 07:27:28'),
(23, 4025, 0, NULL, 1400000, '2020-07-23 16:41:24', '2020-07-23 16:42:01'),
(24, 6374, 0, NULL, 1400000, '2020-07-23 19:54:04', '2020-07-23 19:54:18'),
(25, 8806, 0, NULL, 7000000, '2020-07-23 20:31:54', '2020-07-23 20:32:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice_details`
--

CREATE TABLE `invoice_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `invoice_details`
--

INSERT INTO `invoice_details` (`id`, `invoice_id`, `product_id`, `price`, `qty`, `created_at`, `updated_at`) VALUES
(3, 15, 9774, 1500000, 1, '2020-07-15 10:12:01', '2020-07-15 10:12:01'),
(6, 19, 9774, 1500000, 3, '2020-07-15 12:35:38', '2020-07-15 12:35:38'),
(7, 20, 9774, 1500000, 3, '2020-07-15 16:24:56', '2020-07-15 16:24:56'),
(8, 21, 9774, 1400000, 2, '2020-07-23 07:27:28', '2020-07-23 07:27:28'),
(9, 23, 9774, 1400000, 1, '2020-07-23 16:42:01', '2020-07-23 16:42:01'),
(10, 24, 9774, 1400000, 1, '2020-07-23 19:54:17', '2020-07-23 19:54:17'),
(11, 25, 9774, 1400000, 5, '2020-07-23 20:32:10', '2020-07-23 20:32:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_07_04_070606_create_produks_table', 1),
(4, '2020_07_12_050719_cretae_users_table', 2),
(5, '2020_07_12_064306_create_user_table', 3),
(6, '2020_07_12_064813_create_users_table', 4),
(7, '2020_07_12_065056_create_users_table', 5),
(8, '2020_07_12_090808_create_pegawai_table', 6),
(9, '2020_07_13_173532_create_customers_table', 7),
(10, '2020_07_13_174220_create_invoices_table', 7),
(11, '2020_07_13_174330_create_invoice_details_table', 7),
(12, '2020_07_13_183636_add_relationships_to_invoices_table', 8),
(13, '2020_07_13_190349_create_invoice_details_table', 9),
(14, '2020_07_13_192452_create_invoice_details_table', 10),
(15, '2020_07_13_193531_create_invoice_details_table', 11),
(16, '2020_07_13_195113_create_invoice_details_table', 12),
(17, '2020_07_13_201240_create_invoice_details_table', 13),
(18, '2020_07_13_202540_create_invoice_details_table', 14),
(19, '2020_07_13_204745_create_products_table', 15),
(20, '2020_07_13_210456_create_invoice_details_table', 16),
(21, '2020_07_13_210717_add_relationships_to_invoice_details_table', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jkelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `user_id`, `gambar`, `nama`, `nohp`, `jkelamin`, `email`, `alamat`, `created_at`, `updated_at`) VALUES
(975, 13, 'pegawai/YlMsbWnHEvnTmT6cOQgG5soT4UPIwvSMSwEl6HK4.jpeg', 'adelia', '0877025805857', 'perempuan', 'adel@gmail.com', 'Jetis, Mojokerto', '2020-07-23 20:29:34', '2020-07-23 20:29:34'),
(6721, 7, 'pegawai/II4dQcigTDhkAJjFnKzyBu8DOKN2vdwbOq6FwJBR.jpeg', 'Kharisma Adelia', '087702580587', 'Perempuan', 'kharismadelia11@gmail.com', 'Malang', '2020-07-14 10:31:26', '2020-07-14 10:34:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panjang` int(11) NOT NULL,
  `lebar` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `nama_produk`, `harga`, `deskripsi`, `gambar`, `berat`, `panjang`, `lebar`, `tinggi`, `created_at`, `updated_at`) VALUES
(2307, 'pewangi', '5000', 'pewangi', 'produk/05eaPgc20qqoa3ZKs2jlIXOPHLe1W0gyMtQ0AB80.jpeg', '1', 2, 2, 6, '2020-07-23 20:28:07', '2020-07-23 20:28:07'),
(9774, 'Snapbridge', '1400000', 'IOT by PT Ada Ide Langsung Jalan', 'produk/Iusj8UkXLSsB7WTSrrFfoCfKXMK2sLTZp2J2MRvB.jpeg', '1', 2, 4, 6, '2020-07-13 14:01:21', '2020-07-23 07:22:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'admin@gmail.com', NULL, '$2y$10$VmEiAUbEmRoLa9BLDumQxuNePDxFYnEypbMzwlIJzkkwMWx.nFF3u', 'QnBcCEMLfS9HKR3Hc2nKVXQvGbHVxk20GZitX2IQ80xDzVDmg1wOY5cWYTGd', '2020-07-11 23:58:24', '2020-07-11 23:58:24'),
(5, 'pegawai', 'Adelia', 'adeliarisma73@gmail.com', NULL, '$2y$10$qJBM.citlJL.NcyICjdQl.hTy.kXvHVCS4c7WvYhTpb3MGORkPkxO', 'RNJ6AOqt0ACamymKn0J3lfxUSs6jSQTgITMR0rg8JG9KX5oJFRSvX8zBl7RE', '2020-07-12 07:38:28', '2020-07-12 07:38:28'),
(6, 'pegawai', 'asas', 'adel@gmail.com', NULL, '$2y$10$cuh99lzvRKJ2d4i3.rktLOWBSVCMnpfEElWOhHWTohxA3le01xyCm', 'QkOUwP2SWttZ2pWq0m3zFeJsxqpogbLpbspqWIrAfjozUUjvUTCVgNkL3J65', '2020-07-14 10:30:48', '2020-07-14 10:30:48'),
(7, 'pegawai', 'Kharisma', 'kharismadelia11@gmail.com', NULL, '$2y$10$w8nlIw9ig.Hx1JZkQMTD1.QDTy244wuSVc.KXPkjjvxOroSZ5SKaS', 'EjgHk9MRRzO7H5Kso0gLkTbDUKVT64sQZiCbZNn0FRUqTdmJkGaUTQDusB8s', '2020-07-14 10:31:26', '2020-07-14 10:31:26'),
(8, 'pegawai', 'kharisma', 'khar@gmail.com', NULL, '$2y$10$5s0zX77H.Ts.tFiDYDY8C.uFURMvl6ypb5rzyIJW3MW8OzT7WQyKi', '05XUWc4B0i1HCZmz3oHftorZSAWaW1SrojcOGG86btPJYKptJWSmo3PTLEVA', '2020-07-15 12:13:30', '2020-07-15 12:13:30'),
(9, 'pegawai', 'kharisma', 'khar@gmail.com', NULL, '$2y$10$Gz9MCrGES.Sj5FUig/OW8u5Bx9FAxbXmJkZRklAjrh4RvfT2kEmxm', 'Dj5bbF6V6tIjdDhzz6i5kmbn18np9WSVR1Triwq8pARfqyOH7pdw9i9t2RM2', '2020-07-15 12:22:22', '2020-07-15 12:22:22'),
(10, 'pegawai', 'kharisma', 'khar@gmail.com', NULL, '$2y$10$SNpKSkrxC/8s/sEQ1Lni6.yj3BO4ld28Zz/9eYo6WZ8.LsDGNywra', 'M21PF7KTDzgRTj40Mq5IInZu8GGbtzpWohBcSmmt6VdcwZG91IQWj9CEbRtw', '2020-07-15 12:34:03', '2020-07-15 12:34:03'),
(11, 'pegawai', 'adelia', 'khar@gmail.com', NULL, '$2y$10$aKcgeXhbn7sFQ0n4mP9WXO0qyO17TybL4L34H6ToGs6/kh.6HEFxG', 'BLdeTT9NYSzfVjbO68pa73o02sfiXD72zndibgBpwVW0B70mKRdTzHE09VHW', '2020-07-15 16:22:35', '2020-07-15 16:22:35'),
(12, 'pegawai', 'adelia', 'adeliarisma73@gmail.com', NULL, '$2y$10$Dq4x0r8I17phKxeUNQKiC.yOmtwsIZBviaiZJldOSsegdrr.xw/VK', 'u43aeiMyBiMz1rmntZnV92sSfh4X4cpdtZsQ0eETJcGfT04lad48gkPGRZji', '2020-07-23 19:09:48', '2020-07-23 19:09:48'),
(13, 'pegawai', 'adelia', 'adel@gmail.com', NULL, '$2y$10$r63E1aqUHds.pBIbH5LlDOTYStn1OK0zTu/jOiRJu5NDyIi9j8VAq', 'VsvBppmLCNBP6zMWS8t1uV5N8vYZacQo9R2IxI9iOm5n5ddzGmXO3wVTfkJS', '2020-07-23 20:29:33', '2020-07-23 20:29:33');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_customer_id_foreign` (`customer_id`);

--
-- Indeks untuk tabel `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_details_invoice_id_foreign` (`invoice_id`),
  ADD KEY `invoice_details_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8807;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9775;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD CONSTRAINT `invoice_details_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invoice_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
