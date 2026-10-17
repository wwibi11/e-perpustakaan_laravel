-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2026 at 05:12 AM
-- Server version: 11.2.2-MariaDB-log
-- PHP Version: 8.3.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eperpus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `birth_year` year(4) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `nationality`, `birth_year`, `bio`, `created_at`, `updated_at`) VALUES
(1, 'Andrea Hirata', 'Indonesia', '1967', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(2, 'Tere Liye', 'Indonesia', '1979', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(3, 'Habiburrahman El Shirazy', 'Indonesia', '1976', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(4, 'Dee Lestari', 'Indonesia', '1976', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(5, 'Pramoedya Ananta Toer', 'Indonesia', '1925', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(6, 'A. Fuadi', 'Indonesia', '1972', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(7, 'James Clear', 'Amerika Serikat', '1986', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(8, 'Yuval Noah Harari', 'Israel', '1976', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(9, 'Henry Manampiring', 'Indonesia', '1977', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(50) NOT NULL,
  `isbn` varchar(20) DEFAULT NULL,
  `title` varchar(300) NOT NULL,
  `slug` varchar(300) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `publisher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `publish_year` year(4) DEFAULT NULL,
  `edition` varchar(50) DEFAULT NULL,
  `language` varchar(50) DEFAULT 'Indonesia',
  `pages` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `code`, `isbn`, `title`, `slug`, `category_id`, `author_id`, `publisher_id`, `publish_year`, `edition`, `language`, `pages`, `description`, `cover`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'BK-0001', '9789793062792', 'Laskar Pelangi', NULL, 1, 1, 4, '2005', NULL, 'Indonesia', 534, 'Novel tentang anak-anak Belitung yang gigih menuntut ilmu.', NULL, NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(2, 'BK-0002', '9789799731234', 'Bumi Manusia', NULL, 1, 5, 6, '1980', NULL, 'Indonesia', 535, 'Novel sejarah perjuangan Minke di era kolonial.', NULL, NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(3, 'BK-0003', '9789792248760', 'Negeri 5 Menara', NULL, 1, 6, 1, '2009', NULL, 'Indonesia', 423, 'Kisah santri dari lima benua dengan motto man jadda wajada.', NULL, NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(4, 'BK-0004', '9786028811252', 'Perahu Kertas', NULL, 1, 4, 4, '2009', NULL, 'Indonesia', 444, 'Novel romansa anak seni dan sastra.', NULL, NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(5, 'BK-0005', '9789791101507', 'Hafalan Shalat Delisa', NULL, 1, 2, 3, '2005', NULL, 'Indonesia', 282, 'Kisah Delisa kecil di tengah bencana tsunami Aceh.', NULL, NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(6, 'BK-0006', '9789791111050', 'Ayat-Ayat Cinta', NULL, 1, 3, 3, '2004', NULL, 'Indonesia', 418, 'Novel islami tentang cinta dan pernikahan.', NULL, NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(7, 'BK-0007', '9786020332675', 'Pulang', NULL, 1, 2, 3, '2015', NULL, 'Indonesia', 400, 'Petualangan Bujang dalam dunia gelap.', NULL, NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(8, 'BK-0008', '9786020633175', 'Atomic Habits', NULL, 2, 7, 1, '2019', NULL, 'Indonesia', 340, 'Panduan membangun kebiasaan kecil yang berdampak besar.', NULL, NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(9, 'BK-0009', '9786024246947', 'Sapiens: Riwayat Singkat Umat Manusia', NULL, 2, 8, 1, '2011', NULL, 'Indonesia', 536, 'Sejarah singkat umat manusia dari zaman purba.', NULL, NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(10, 'BK-0010', '9786022987216', 'Filosofi Teras', NULL, 2, 9, 1, '2018', NULL, 'Indonesia', 320, 'Pengantar filsafat Stoa untuk hidup tenang.', NULL, NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(11, 'BK-0011', '9786024345001', 'Matematika untuk SMA Kelas X', NULL, 3, NULL, 5, '2020', NULL, 'Indonesia', 280, 'Buku pelajaran matematika kurikulum 2013.', NULL, NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(12, 'BK-0012', '9786024345002', 'Bahasa Indonesia untuk SMA Kelas X', NULL, 3, NULL, 5, '2020', NULL, 'Indonesia', 260, 'Buku pelajaran bahasa Indonesia.', NULL, NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `book_categories`
--

CREATE TABLE `book_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(20) NOT NULL,
  `ddc` varchar(10) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_categories`
--

INSERT INTO `book_categories` (`id`, `name`, `code`, `ddc`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Fiksi', 'FIC', '800', 'Novel, cerpen, roman', 'fas fa-book', '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(2, 'Non-Fiksi', 'NFI', '000', 'Buku pengetahuan umum', 'fas fa-book-open', '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(3, 'Pelajaran', 'PLJ', '300', 'Buku pelajaran sekolah', 'fas fa-graduation-cap', '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(4, 'Referensi', 'REF', '000', 'Ensiklopedia, kamus, atlas', 'fas fa-bookmark', '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(5, 'Sains & Teknologi', 'SAT', '500', 'Sains, teknologi, komputer', 'fas fa-flask', '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(6, 'Sejarah & Biografi', 'SJB', '900', 'Sejarah, biografi, memoar', 'fas fa-landmark', '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(7, 'Agama', 'AGM', '200', 'Buku keagamaan & spiritual', 'fas fa-pray', '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(8, 'Sastra', 'STR', '800', 'Puisi, drama, karya sastra', 'fas fa-feather-alt', '2026-10-16 19:36:01', '2026-10-16 19:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `book_copies`
--

CREATE TABLE `book_copies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(50) NOT NULL,
  `condition` enum('baik','rusak','perbaikan') DEFAULT 'baik',
  `status` enum('tersedia','dipinjam','perbaikan','hilang') DEFAULT 'tersedia',
  `location` varchar(100) DEFAULT NULL,
  `acquisition_date` date DEFAULT NULL,
  `acquisition_price` decimal(12,2) DEFAULT NULL,
  `source` enum('pembelian','hibah','dinas','lainnya') DEFAULT 'pembelian',
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_copies`
--

INSERT INTO `book_copies` (`id`, `book_id`, `code`, `condition`, `status`, `location`, `acquisition_date`, `acquisition_price`, `source`, `notes`, `created_at`, `updated_at`) VALUES
(1, 1, 'BK-0001-01', 'baik', 'tersedia', 'Rak A1', '2026-01-10', 85000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(2, 1, 'BK-0001-02', 'baik', 'tersedia', 'Rak A1', '2026-01-10', 85000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(3, 1, 'BK-0001-03', 'baik', 'tersedia', 'Rak A1', '2026-01-10', 85000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(4, 2, 'BK-0002-01', 'baik', 'tersedia', 'Rak A1', '2026-01-12', 95000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(5, 2, 'BK-0002-02', 'baik', 'tersedia', 'Rak A1', '2026-01-12', 95000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(6, 3, 'BK-0003-01', 'baik', 'tersedia', 'Rak A2', '2026-01-15', 78000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(7, 3, 'BK-0003-02', 'baik', 'tersedia', 'Rak A2', '2026-01-15', 78000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(8, 3, 'BK-0003-03', 'baik', 'tersedia', 'Rak A2', '2026-01-15', 78000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(9, 4, 'BK-0004-01', 'baik', 'tersedia', 'Rak A2', '2026-02-01', 82000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(10, 4, 'BK-0004-02', 'baik', 'tersedia', 'Rak A2', '2026-02-01', 82000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(11, 5, 'BK-0005-01', 'baik', 'tersedia', 'Rak A3', '2026-02-10', 65000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(12, 5, 'BK-0005-02', 'baik', 'tersedia', 'Rak A3', '2026-02-10', 65000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(13, 6, 'BK-0006-01', 'baik', 'tersedia', 'Rak A3', '2026-02-15', 75000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(14, 6, 'BK-0006-02', 'baik', 'tersedia', 'Rak A3', '2026-02-15', 75000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(15, 7, 'BK-0007-01', 'baik', 'tersedia', 'Rak A4', '2026-03-01', 88000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(16, 7, 'BK-0007-02', 'baik', 'tersedia', 'Rak A4', '2026-03-01', 88000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(17, 8, 'BK-0008-01', 'baik', 'tersedia', 'Rak B1', '2026-03-10', 98000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(18, 8, 'BK-0008-02', 'baik', 'tersedia', 'Rak B1', '2026-03-10', 98000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(19, 9, 'BK-0009-01', 'baik', 'tersedia', 'Rak B2', '2026-03-15', 125000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(20, 9, 'BK-0009-02', 'baik', 'tersedia', 'Rak B2', '2026-03-15', 125000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(21, 10, 'BK-0010-01', 'baik', 'tersedia', 'Rak B3', '2026-04-01', 89000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(22, 10, 'BK-0010-02', 'baik', 'tersedia', 'Rak B3', '2026-04-01', 89000.00, 'pembelian', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(23, 11, 'BK-0011-01', 'baik', 'tersedia', 'Rak C1', '2026-06-01', 55000.00, 'dinas', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(24, 11, 'BK-0011-02', 'baik', 'tersedia', 'Rak C1', '2026-06-01', 55000.00, 'dinas', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(25, 11, 'BK-0011-03', 'baik', 'tersedia', 'Rak C1', '2026-06-01', 55000.00, 'dinas', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(26, 11, 'BK-0011-04', 'baik', 'tersedia', 'Rak C1', '2026-06-01', 55000.00, 'dinas', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(27, 11, 'BK-0011-05', 'baik', 'tersedia', 'Rak C1', '2026-06-01', 55000.00, 'dinas', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(28, 12, 'BK-0012-01', 'baik', 'tersedia', 'Rak C2', '2026-06-01', 52000.00, 'dinas', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(29, 12, 'BK-0012-02', 'baik', 'tersedia', 'Rak C2', '2026-06-01', 52000.00, 'dinas', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(30, 12, 'BK-0012-03', 'rusak', 'perbaikan', 'Rak C2', '2026-06-01', 52000.00, 'dinas', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `book_history`
--

CREATE TABLE `book_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED DEFAULT NULL,
  `book_copy_id` bigint(20) UNSIGNED DEFAULT NULL,
  `action` enum('create','update','delete','borrow','return','repair','lost') NOT NULL,
  `old_condition` enum('baik','rusak','perbaikan') DEFAULT NULL,
  `new_condition` enum('baik','rusak','perbaikan') DEFAULT NULL,
  `old_status` enum('tersedia','dipinjam','perbaikan','hilang') DEFAULT NULL,
  `new_status` enum('tersedia','dipinjam','perbaikan','hilang') DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(20) NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `loan_date` date NOT NULL,
  `due_date` date NOT NULL,
  `return_date` date DEFAULT NULL,
  `total_books` int(11) NOT NULL DEFAULT 0,
  `status` enum('pending','dipinjam','dikembalikan','terlambat','hilang') DEFAULT 'pending',
  `fine_amount` decimal(12,2) DEFAULT 0.00,
  `fine_paid` tinyint(1) DEFAULT 0,
  `renewal_count` int(11) DEFAULT 0,
  `notes` text DEFAULT NULL,
  `approved_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `code`, `member_id`, `loan_date`, `due_date`, `return_date`, `total_books`, `status`, `fine_amount`, `fine_paid`, `renewal_count`, `notes`, `approved_by`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'PJM-202607-0001', 1, '2026-07-08', '2026-07-15', '2026-07-12', 2, 'dikembalikan', 0.00, 1, 0, '-', NULL, 2, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(2, 'PJM-202607-0002', 2, '2026-07-10', '2026-07-17', NULL, 1, 'dipinjam', 0.00, 0, 0, '-', NULL, 2, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(3, 'PJM-202606-0001', 3, '2026-06-01', '2026-06-08', NULL, 1, 'terlambat', 0.00, 0, 0, 'Belum dikembalikan', NULL, 2, '2026-10-16 19:36:01', '2026-10-16 19:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `loan_details`
--

CREATE TABLE `loan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loan_id` bigint(20) UNSIGNED NOT NULL,
  `book_copy_id` bigint(20) UNSIGNED NOT NULL,
  `condition_before` enum('baik','rusak','perbaikan') DEFAULT 'baik',
  `condition_after` enum('baik','rusak','perbaikan') DEFAULT NULL,
  `status` enum('dipinjam','dikembalikan','hilang') DEFAULT 'dipinjam',
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loan_details`
--

INSERT INTO `loan_details` (`id`, `loan_id`, `book_copy_id`, `condition_before`, `condition_after`, `status`, `notes`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'baik', 'baik', 'dikembalikan', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(2, 1, 6, 'baik', 'baik', 'dikembalikan', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(3, 2, 2, 'baik', NULL, 'dipinjam', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(4, 3, 3, 'baik', NULL, 'dipinjam', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `identity_number` varchar(50) DEFAULT NULL,
  `member_type` enum('siswa','guru','mahasiswa','karyawan','umum') DEFAULT 'siswa',
  `class` varchar(50) DEFAULT NULL,
  `major` varchar(100) DEFAULT NULL,
  `institution` varchar(200) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `valid_until` date DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `code`, `name`, `identity_number`, `member_type`, `class`, `major`, `institution`, `phone`, `email`, `address`, `photo`, `join_date`, `valid_until`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'AGT-0001', 'Ahmad Fauzi', '1234567890123456', 'siswa', 'X IPA 1', 'IPA', 'SMA Negeri 1 Jakarta', '081234567890', 'ahmad@email.com', NULL, NULL, '2026-01-15', '2027-01-15', 1, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(2, 'AGT-0002', 'Siti Nurhaliza', '2345678901234567', 'siswa', 'XI IPS 2', 'IPS', 'SMA Negeri 1 Jakarta', '081987654321', 'siti@email.com', NULL, NULL, '2026-01-20', '2027-01-20', 1, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(3, 'AGT-0003', 'Budi Santoso, S.Pd', '3456789012345678', 'guru', NULL, 'Matematika', 'SMA Negeri 1 Jakarta', '082112233445', 'budi@email.com', NULL, NULL, '2025-08-01', '2026-08-01', 1, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(4, 'AGT-0004', 'Dewi Kartika', '4567890123456789', 'umum', NULL, NULL, 'Dinas Pendidikan', '083334445556', 'dewi@email.com', NULL, NULL, '2026-03-10', '2027-03-10', 1, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(5, 'AGT-0005', 'Rudi Hermawan', '5678901234567890', 'mahasiswa', NULL, 'Teknik Informatika', 'Universitas Brawijaya', '081567891234', 'rudi@email.com', NULL, NULL, '2026-04-05', '2027-04-05', 1, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(6, 'AGT-0006', 'Nina Kusuma', '6789012345678901', 'siswa', 'XII IPA 3', 'IPA', 'SMA Negeri 1 Jakarta', '082345678901', 'nina@email.com', NULL, NULL, '2026-05-12', '2027-05-12', 1, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(7, 'AGT-0007', 'Agus Prabowo', '7890123456789012', 'karyawan', NULL, NULL, 'SMA Negeri 1 Jakarta', '081278901234', 'agus@email.com', NULL, NULL, '2025-06-01', '2026-06-01', 0, '2026-10-16 19:36:01', '2026-10-16 19:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Gramedia Pustaka Utama', 'Jl. Palmerah Barat, Jakarta', '021-53650110', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(2, 'Mizan', 'Jl. Cinambo, Bandung', '022-7834310', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(3, 'Republika', 'Jl. Warung Buncit, Jakarta', '021-7803747', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(4, 'Bentang Pustaka', 'Jl. Plemburan, Yogyakarta', '0274-625825', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(5, 'Erlangga', 'Jl. H. Baping, Jakarta', '021-8717000', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(6, 'Lentera Dipantara', 'Jl. Kalibata, Jakarta', '021-7971719', NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(20) NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `reservation_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `status` enum('menunggu','siap','diambil','batal','kadaluarsa') DEFAULT 'menunggu',
  `notes` text DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

CREATE TABLE `returns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(20) NOT NULL,
  `loan_id` bigint(20) UNSIGNED NOT NULL,
  `return_date` date NOT NULL,
  `total_books` int(11) NOT NULL DEFAULT 0,
  `fine_amount` decimal(12,2) DEFAULT 0.00,
  `fine_paid` tinyint(1) DEFAULT 0,
  `received_by` bigint(20) UNSIGNED DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `returns`
--

INSERT INTO `returns` (`id`, `code`, `loan_id`, `return_date`, `total_books`, `fine_amount`, `fine_paid`, `received_by`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'KMB-202607-0001', 1, '2026-07-12', 2, 0.00, 1, 2, '', '2026-10-16 19:36:01', '2026-10-16 19:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `return_details`
--

CREATE TABLE `return_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `return_id` bigint(20) UNSIGNED NOT NULL,
  `loan_detail_id` bigint(20) UNSIGNED NOT NULL,
  `book_copy_id` bigint(20) UNSIGNED NOT NULL,
  `condition` enum('baik','rusak','perbaikan') DEFAULT 'baik',
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `return_details`
--

INSERT INTO `return_details` (`id`, `return_id`, `loan_detail_id`, `book_copy_id`, `condition`, `notes`, `created_at`) VALUES
(1, 1, 1, 1, 'baik', NULL, '2026-10-16 19:36:01'),
(2, 1, 2, 6, 'baik', NULL, '2026-10-16 19:36:01');

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
('aWLCluc9gMSPYFxn15HS95FvUKytlo2h4vNXq0Z0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJERG9GSHlwck1BallBMDUyZVNaSnd6cnFsN0hIUXhnTk9ub3E2MEpMIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwIiwicm91dGUiOm51bGx9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1792179820),
('baL8YVatbXCsegZaiFHCMF9wbZcylebJFQXoR38Q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiI3Q0FDaWJCa3FRQlJodVhMZUxGckw2Mm54UTZWajNtdTZtbzF2UGZtIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwIiwicm91dGUiOiJkYXNoYm9hcmQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1792211545),
('xn5QckxlrkLGY1Fmy8Zec2RTPuS5P4ZCLpZsKdoN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.140.0 Chrome/150.0.7871.250 Electron/43.7.3 Safari/537.36', 'eyJfdG9rZW4iOiJHMVZiWW9ES093UXB4MDFGOHNhV2FiaXdKWkV1UWx2MWRCN0RWTjE2IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwIiwicm91dGUiOiJkYXNoYm9hcmQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1792211536),
('YHnMXQOU4BoS2QSxDCIVvWhI1UkmMMN2Is8Ce7Qi', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJZb2l3RXJMVkpPRmUxZ2oyWVJQeHBjN0JnbnhyZHV4MzRLd21LV0daIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwIiwicm91dGUiOiJkYXNoYm9hcmQifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1792213837);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(50) NOT NULL,
  `value` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `description`, `created_at`, `updated_at`) VALUES
(1, 'app_name', 'E-Perpustakaan', 'Nama Aplikasi', '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(2, 'app_version', '1.0.0', 'Versi Aplikasi', '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(3, 'loan_duration', '7', 'Durasi peminjaman default (hari)', '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(4, 'max_loan_per_member', '3', 'Maksimal buku dipinjam per anggota', '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(5, 'fine_per_day', '1000', 'Denda per hari keterlambatan (Rp)', '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(6, 'max_renewal', '1', 'Maksimal perpanjangan', '2026-10-16 19:36:01', '2026-10-16 19:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `temp_loans`
--

CREATE TABLE `temp_loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` varchar(100) NOT NULL,
  `book_copy_id` bigint(20) UNSIGNED NOT NULL,
  `condition_before` enum('baik','rusak','perbaikan') DEFAULT 'baik',
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('super_admin','admin','pustakawan','staff') DEFAULT 'staff',
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `last_login` datetime DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `phone`, `address`, `photo`, `is_active`, `last_login`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', 'admin@eperpus.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', '081234567890', NULL, NULL, 1, NULL, NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(2, 'Pustakawan Utama', 'pustakawan', 'pustakawan@eperpus.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pustakawan', '081234567891', NULL, NULL, 1, NULL, NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01'),
(3, 'Super Administrator', 'superadmin', 'superadmin@eperpus.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'super_admin', '081234567899', NULL, NULL, 1, NULL, NULL, '2026-10-16 19:36:01', '2026-10-16 19:36:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_author_name` (`name`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `publisher_id` (`publisher_id`),
  ADD KEY `idx_isbn` (`isbn`),
  ADD KEY `idx_title` (`title`);

--
-- Indexes for table `book_categories`
--
ALTER TABLE `book_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `book_copies`
--
ALTER TABLE `book_copies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `idx_copy_status` (`status`),
  ADD KEY `idx_copy_condition` (`condition`);

--
-- Indexes for table `book_history`
--
ALTER TABLE `book_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `book_copy_id` (`book_copy_id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `idx_loan_status` (`status`),
  ADD KEY `idx_loan_dates` (`loan_date`,`due_date`);

--
-- Indexes for table `loan_details`
--
ALTER TABLE `loan_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loan_id` (`loan_id`),
  ADD KEY `book_copy_id` (`book_copy_id`),
  ADD KEY `idx_loan_detail_status` (`status`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `idx_member_type` (`member_type`),
  ADD KEY `idx_active` (`is_active`),
  ADD KEY `idx_name` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `returns`
--
ALTER TABLE `returns`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `loan_id` (`loan_id`);

--
-- Indexes for table `return_details`
--
ALTER TABLE `return_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `return_id` (`return_id`),
  ADD KEY `loan_detail_id` (`loan_detail_id`),
  ADD KEY `book_copy_id` (`book_copy_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key` (`key`);

--
-- Indexes for table `temp_loans`
--
ALTER TABLE `temp_loans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_id` (`session_id`),
  ADD KEY `book_copy_id` (`book_copy_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idx_role` (`role`),
  ADD KEY `idx_active` (`is_active`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `book_categories`
--
ALTER TABLE `book_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `book_copies`
--
ALTER TABLE `book_copies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `book_history`
--
ALTER TABLE `book_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loan_details`
--
ALTER TABLE `loan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `returns`
--
ALTER TABLE `returns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `return_details`
--
ALTER TABLE `return_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `temp_loans`
--
ALTER TABLE `temp_loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `books_author_fk` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `books_category_fk` FOREIGN KEY (`category_id`) REFERENCES `book_categories` (`id`),
  ADD CONSTRAINT `books_publisher_fk` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `book_copies`
--
ALTER TABLE `book_copies`
  ADD CONSTRAINT `copies_book_fk` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `loans`
--
ALTER TABLE `loans`
  ADD CONSTRAINT `loans_member_fk` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`);

--
-- Constraints for table `loan_details`
--
ALTER TABLE `loan_details`
  ADD CONSTRAINT `loan_details_copy_fk` FOREIGN KEY (`book_copy_id`) REFERENCES `book_copies` (`id`),
  ADD CONSTRAINT `loan_details_loan_fk` FOREIGN KEY (`loan_id`) REFERENCES `loans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_book_fk` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservations_member_fk` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `returns`
--
ALTER TABLE `returns`
  ADD CONSTRAINT `returns_loan_fk` FOREIGN KEY (`loan_id`) REFERENCES `loans` (`id`);

--
-- Constraints for table `return_details`
--
ALTER TABLE `return_details`
  ADD CONSTRAINT `return_details_copy_fk` FOREIGN KEY (`book_copy_id`) REFERENCES `book_copies` (`id`),
  ADD CONSTRAINT `return_details_loan_detail_fk` FOREIGN KEY (`loan_detail_id`) REFERENCES `loan_details` (`id`),
  ADD CONSTRAINT `return_details_return_fk` FOREIGN KEY (`return_id`) REFERENCES `returns` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `temp_loans`
--
ALTER TABLE `temp_loans`
  ADD CONSTRAINT `temp_loans_copy_fk` FOREIGN KEY (`book_copy_id`) REFERENCES `book_copies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
