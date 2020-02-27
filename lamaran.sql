-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Feb 2020 pada 07.52
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bkk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lamaran`
--

CREATE TABLE `lamaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `perusahaan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','terima','tolak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `loker_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lamaran`
--

INSERT INTO `lamaran` (`id`, `user_id`, `perusahaan_id`, `nim`, `no_hp`, `upload`, `status`, `created_at`, `updated_at`, `loker_id`) VALUES
(1, 2, 1, '0857576984', '085647364', '0857576984.pdf', 'terima', '2020-02-24 21:19:48', '2020-02-24 23:51:25', 3),
(2, 2, 1, '0857576984', '085647364', '0857576984.pdf', 'terima', '2020-02-24 21:23:51', '2020-02-24 23:49:41', 3),
(3, 2, 1, 'daftar lokerrr', '084474732173', 'daftar lokerrr.jpg', 'pending', '2020-02-24 21:35:46', '2020-02-24 21:35:46', 4),
(4, 2, 1, '1610203444', '085757427', '1610203444.jpg', 'pending', '2020-02-24 21:38:34', '2020-02-24 21:38:34', 4),
(5, 3, 1, '12321839', '085132821993', '12321839.jpg', 'pending', '2020-02-24 23:17:39', '2020-02-24 23:17:39', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lamaran_user_id_foreign` (`user_id`),
  ADD KEY `lamaran_perusahaan_id_foreign` (`perusahaan_id`),
  ADD KEY `lamaran_loker_id_foreign` (`loker_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lamaran`
--
ALTER TABLE `lamaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `lamaran`
--
ALTER TABLE `lamaran`
  ADD CONSTRAINT `lamaran_loker_id_foreign` FOREIGN KEY (`loker_id`) REFERENCES `loker` (`id`),
  ADD CONSTRAINT `lamaran_perusahaan_id_foreign` FOREIGN KEY (`perusahaan_id`) REFERENCES `perusahaan` (`id`),
  ADD CONSTRAINT `lamaran_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
