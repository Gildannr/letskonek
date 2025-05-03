-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2025 at 10:51 AM
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
-- Database: `letskonek`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm_menu`
--

CREATE TABLE `adm_menu` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `menu` varchar(150) DEFAULT NULL,
  `keterangan` varchar(150) DEFAULT NULL,
  `notif_info` enum('1','2') DEFAULT NULL,
  `notif_db` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `adm_menu`
--

INSERT INTO `adm_menu` (`id`, `judul`, `type`, `parent`, `icon`, `menu`, `keterangan`, `notif_info`, `notif_db`) VALUES
(1, 'About', 'parent', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'About Us', 'child', 1, 'fa fa-street-view', 'profile', NULL, NULL, NULL),
(3, 'Banner', 'child', 1, 'fa fa-file-image-o', 'banner', NULL, NULL, NULL),
(4, 'Media Sosial', 'child', 1, 'fa fa-instagram', 'media_sosial', NULL, NULL, NULL),
(5, 'Setup Home', 'child', 1, 'fa fa-star-o', 'setup_home', NULL, NULL, NULL),
(6, 'Why Choose Us?', 'child', 1, 'fa fa-inbox', 'faq', NULL, NULL, NULL),
(7, 'Video ', 'child', 1, 'fa fa-video-camera', 'video', NULL, NULL, NULL),
(8, 'Team', 'child', 1, 'fa fa-heart', 'team', NULL, NULL, NULL),
(9, 'Mentors', 'child', 1, 'fa fa-sitemap', 'mentors', NULL, NULL, NULL),
(10, 'Product Service', 'parent', NULL, '', '', NULL, NULL, NULL),
(11, 'Product Service', 'child', 10, 'fa fa-database', 'service', NULL, NULL, NULL),
(12, 'Orders', 'parent', NULL, '', '', NULL, NULL, NULL),
(13, 'Orders Verification', 'child', 12, 'fa fa-cart-plus', 'orders', NULL, NULL, NULL),
(14, 'Orders Mentors', 'child', 12, 'fa fa-cart-arrow-down', 'orders_setup_mentors', NULL, NULL, NULL),
(15, 'Orders Sucess', 'child', 12, 'fa fa-shopping-cart', 'orders_success', NULL, NULL, NULL),
(18, 'Members', 'parent', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Members', 'child', 18, 'fa fa-users', 'members', NULL, NULL, NULL),
(20, 'Blog', 'parent', NULL, '', '', NULL, NULL, NULL),
(21, 'Blog', 'child', 20, 'fa fa-newspaper-o', 'blog', NULL, NULL, NULL),
(30, 'Orders', 'parent', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Orders Verification', 'child', 30, 'fa fa-cart-plus', 'orders_mentors', NULL, NULL, NULL),
(32, 'Orders', 'child', 30, 'fa fa-shopping-cart', 'orders_mentors_success', NULL, NULL, NULL),
(90, 'User', 'parent', NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'Pengaturan User', 'child', 90, 'fa fa-user', 'pengaturan_user', NULL, NULL, NULL),
(100, 'Dashboard', 'single', NULL, 'feather icon-home', 'home', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `id_menu` varchar(100) DEFAULT NULL,
  `order_by` int(11) DEFAULT NULL,
  `keterangan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `id_menu`, `order_by`, `keterangan`) VALUES
(1, '100', 1, 'admin'),
(2, '1', 2, 'admin'),
(3, '2', 3, 'admin'),
(4, '3', 4, 'admin'),
(5, '4', 5, ''),
(6, '5', 6, 'admin'),
(7, '6', 7, 'admin'),
(8, '7', 8, 'admin'),
(9, '8', 9, 'admin'),
(10, '9', 10, 'admin'),
(11, '10', 11, 'admin'),
(12, '11', 12, 'admin'),
(13, '12', 13, 'admin'),
(14, '13', 14, 'admin'),
(15, '14', 15, 'admin'),
(16, '15', 16, 'admin'),
(17, '90', 17, ''),
(18, '91', 18, ''),
(19, '18', 19, 'admin'),
(20, '19', 20, 'admin'),
(21, '20', 21, 'admin'),
(22, '21', 22, 'admin'),
(23, '100', 23, 'admin_mentors'),
(24, '30', 24, 'admin_mentors'),
(25, '31', 25, 'admin_mentors'),
(26, '32', 26, 'admin_mentors'),
(27, '90', 27, 'admin_mentors'),
(28, '91', 28, 'admin_mentors'),
(29, '90', 29, 'admin'),
(30, '91', 30, 'admin'),
(31, '30', 31, ''),
(32, '31', 32, ''),
(33, '32', 33, ''),
(34, '33', 34, ''),
(35, '34', 35, ''),
(36, '35', 36, ''),
(37, '36', 37, ''),
(38, '37', 38, ''),
(39, '38', 39, ''),
(40, '39', 40, ''),
(41, '40', 41, ''),
(42, '41', 42, ''),
(43, '42', 43, ''),
(44, '43', 44, ''),
(45, '44', 45, ''),
(46, '50', 46, ''),
(47, '51', 47, ''),
(48, '52', 48, '');

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
(1, '2025_04_26_173052_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(11) NOT NULL,
  `id_mentors` int(11) DEFAULT 0,
  `orders_code` varchar(50) NOT NULL DEFAULT '',
  `tgl_order` date DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `total_payment` bigint(20) DEFAULT NULL,
  `price_mentors` bigint(20) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `author` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` enum('0','1','2','3','4','5','6','7') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_orders`, `id_mentors`, `orders_code`, `tgl_order`, `users_id`, `product_id`, `total_payment`, `price_mentors`, `keterangan`, `created`, `author`, `updated`, `updater`, `status`) VALUES
(1, 0, 'TRXAHR0001210216', '2025-04-06', 1, 1, 13500000, NULL, 'biasa', '2025-04-06 21:02:26', 'irwan.medsos@gmail.com', NULL, 'admin', '2'),
(2, 1, 'TRXAHR0001003207', '2025-04-07', 1, 1, 11999999, 300000, 'biasa', '2025-04-07 00:37:56', 'irwan.medsos@gmail.com', '2025-04-27 21:39:10', 'irwan@gmail.com', '4');

-- --------------------------------------------------------

--
-- Table structure for table `orders_addon`
--

CREATE TABLE `orders_addon` (
  `id` int(11) NOT NULL,
  `id_orders` int(11) DEFAULT NULL,
  `orders_code` varchar(50) NOT NULL DEFAULT '',
  `product_id` int(11) DEFAULT NULL,
  `id_product_addon` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `payment` bigint(20) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `author` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` enum('0','1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `orders_addon`
--

INSERT INTO `orders_addon` (`id`, `id_orders`, `orders_code`, `product_id`, `id_product_addon`, `users_id`, `payment`, `keterangan`, `created`, `author`, `status`) VALUES
(1, NULL, 'TRXAHR0001210216', 1, 20250406, 3, 13500000, 'biasa', '2025-04-06 21:02:26', 'irwan.medsos@gmail.com', '2'),
(2, NULL, 'TRXAHR0001003207', 1, 20250407, 3, 11999999, 'biasa', '2025-04-07 00:37:56', 'irwan.medsos@gmail.com', '2');

-- --------------------------------------------------------

--
-- Table structure for table `pw_users`
--

CREATE TABLE `pw_users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `tipe` varchar(100) DEFAULT NULL,
  `akses` varchar(100) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(100) DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `pw_users`
--

INSERT INTO `pw_users` (`id`, `username`, `nama_lengkap`, `password`, `tipe`, `akses`, `gambar`, `last_login`, `created`, `updated`, `updater`, `status`) VALUES
(1, 'admin', 'Administrator', '$2y$10$lRipPLQi.PUY0QCSdNgME.KZmN6Czifdz/Xdoy2j93yjaVxVgufai', 'admin', 'Admin', '671preload.png', '2025-04-27 13:52:49', '2025-04-26 18:29:17', '2022-01-26 10:23:16', 'admin', '2'),
(18, 'irwan@gmail.com', 'irwan', '$2y$10$O4IO06F47bERuhfxmtkuouAC3XJRx7EAtU/8IhBBz5onaeUStnjdO', 'admin_mentors', 'Mentors', '632founder.CzPaw5r3.jpg', '2025-04-27 15:40:11', '2025-04-27 15:35:01', NULL, NULL, '2');

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
('LvMgHmLxza4oHy5fQ06v5VifxPxge2XETfMXwrFV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiT2phVmVhaXVPd3pGUlk1aGRHZXlZR2loZHhTSGp2cjhjUHZaWjBtOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9pbmRleC5waHAvcHJvZHVjdC1ieS1jYXRlZ29yeS8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozODoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3Byb2R1Y3QtZGV0YWlsLzEiO319', 1746262125);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_about_us`
--

CREATE TABLE `tabel_about_us` (
  `id_about_us` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `sub_title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT '',
  `gambar` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(255) DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tabel_about_us`
--

INSERT INTO `tabel_about_us` (`id_about_us`, `title`, `sub_title`, `description`, `slug`, `gambar`, `banner`, `created`, `author`, `updated`, `updater`, `status`) VALUES
(1, 'About Us', 'About Us', '<p align=\"justify\">Pada tanggal 31 Desember 2020, Perseroan resmi mengubah namanya menjadi <strong>PT Menthobi Karyatama Raya</strong>&nbsp;setelah terjadi <strong>perubahan kepemilikan saham</strong>&nbsp;melalui akuisisi oleh <strong>PT Maktour Bangun Persada</strong>. Perubahan nama ini disahkan melalui Akta Pernyataan Keputusan Rapat No. 36 oleh Notaris Andhika Mayrizal Amir, SH., M.Kn., dan disetujui oleh Kementerian Hukum dan HAM pada 28 Januari 2021.</p>\r\n<p align=\"justify\">Selanjutnya, pada tahun 2022, Perseroan melaksanakan <strong>Penawaran Umum Perdana (IPO)</strong>&nbsp;di <strong>Bursa Efek Indonesia</strong>, dengan menerbitkan sebanyak <strong>2,5 miliar lembar saham</strong>&nbsp;bernilai nominal Rp10 per lembar. Sejak saat itu, status Perseroan berubah menjadi <strong>Perusahaan Publik</strong>, dan nama resminya menjadi <strong>PT Menthobi Karyatama Raya Tbk</strong>.</p>\r\n<p align=\"justify\">Hingga 31 Desember 2024, Perseroan tercatat memiliki <strong>total cadangan lahan seluas 1.807,94 hektare</strong>&nbsp;dari area yang telah ditanami, di mana sebagian telah dialokasikan untuk <strong>petani kecil</strong>, sesuai ketentuan dari pemerintah Indonesia.</p>\r\n<p align=\"justify\">Dalam menjalankan usahanya, Perseroan mengedepankan prinsip <strong>tata kelola keberlanjutan</strong>&nbsp;dengan mengintegrasikan proses dari hasil perkebunan, pengolahan, hingga pemanfaatan produk samping. Hal ini sejalan dengan <strong>visi perusahaan</strong>&nbsp;untuk menjadi penghasil produk perkebunan terbaik melalui penerapan <strong>Best Practice Agronomi</strong>&nbsp;yang berkelanjutan dan ramah lingkungan.</p>\r\n<p align=\"justify\">Perseroan juga terus berinovasi untuk menciptakan <strong>produk yang bernilai tambah</strong>, tidak hanya untuk perusahaan, tetapi juga bagi lingkungan dan industri kelapa sawit secara keseluruhan. Komitmen terhadap <strong>prinsip keberlanjutan (sustainability)</strong>&nbsp;menjadi dasar dalam setiap langkah perusahaan untuk menghadirkan produk terbaik bagi masyarakat.</p>', NULL, '812_MKT7617-min.JPG', '3119987826636slider-new2.jpg', '0000-00-00 00:00:00', NULL, '2025-04-18 01:45:29', 'admin', '2'),
(2, 'Founder Story', 'Founder Story', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_article`
--

CREATE TABLE `tabel_article` (
  `id_article` int(11) NOT NULL,
  `id_article_category` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT 'open',
  `content` longtext DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `keterangan_gambar` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT '',
  `tags` varchar(100) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `sumber_artikel` varchar(255) DEFAULT '',
  `count_article` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(255) DEFAULT NULL,
  `schedule` datetime DEFAULT NULL,
  `scheduled` varchar(255) DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tabel_article`
--

INSERT INTO `tabel_article` (`id_article`, `id_article_category`, `title`, `sub_title`, `content`, `gambar`, `keterangan_gambar`, `slug`, `tags`, `meta_keyword`, `meta_description`, `sumber_artikel`, `count_article`, `created`, `author`, `updated`, `updater`, `schedule`, `scheduled`, `status`) VALUES
(1, 0, 'Cari Beasiswa Kuliah ke AS? Pameran EducationUSA Akan Digelar di 3 Kota', 'open', '<p>Cari Beasiswa Kuliah ke AS? Pameran EducationUSA Akan Digelar di 3 Kota</p>', '3471.jpg', 'Gambar Sendiri', 'cari-beasiswa-kuliah-ke-as-pameran-educationusa-akan-digelar-di-3-kota', NULL, 'tes', 'tes', 'letskonek.com', NULL, '2025-04-26 21:28:04', 'admin', '2025-04-26 21:35:28', 'admin', NULL, NULL, '1'),
(3, 0, 'tes43', 'open', '<p>tes</p>', '6901.jpg', 'tes', 'tes43', NULL, 'tes', 'tes', 'tes', NULL, '2025-04-26 21:34:33', 'admin', '2025-04-26 21:38:56', 'admin', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_article_category`
--

CREATE TABLE `tabel_article_category` (
  `id_article_category` int(11) NOT NULL,
  `article_category_name` varchar(150) DEFAULT NULL,
  `slug` varchar(150) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `author` varchar(150) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(150) DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_banner`
--

CREATE TABLE `tabel_banner` (
  `id_banner` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `gambar_mobile` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(50) DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tabel_banner`
--

INSERT INTO `tabel_banner` (`id_banner`, `title`, `description`, `link`, `gambar`, `gambar_mobile`, `created`, `author`, `updated`, `updater`, `status`) VALUES
(1, 'Personalized Navigation for Career and Study', '<p>tes</p>', NULL, '2460ilustration-letskonek-02.png', NULL, NULL, NULL, '2025-04-26 20:51:44', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_faq`
--

CREATE TABLE `tabel_faq` (
  `id_faq` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(50) DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tabel_faq`
--

INSERT INTO `tabel_faq` (`id_faq`, `title`, `description`, `urutan`, `created`, `author`, `updated`, `updater`, `status`) VALUES
(1, 'Tailored and Flexible Services', '<p><span>Pay only for what you need&mdash;no bundled packages or unnecessary calls. Our adaptable approach ensures that you and your mentor can coordinate schedules effectively, accommodating time zone differences as many of our mentors are based internationally</span></p>', 1, '2025-04-26 21:06:25', 'admin', '2025-04-26 21:11:45', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mentors`
--

CREATE TABLE `tabel_mentors` (
  `id_mentors` int(10) UNSIGNED NOT NULL,
  `mentros_name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` char(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `gambar_detail` varchar(255) DEFAULT NULL,
  `slug` varchar(150) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(50) DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tabel_mentors`
--

INSERT INTO `tabel_mentors` (`id_mentors`, `mentros_name`, `email`, `phone`, `address`, `description`, `gambar`, `gambar_detail`, `slug`, `created`, `author`, `updated`, `updater`, `status`) VALUES
(1, 'irwan Tes', 'irwan@gmail.com', '43243', '<p>fds</p>', '<p>fds</p>', '632founder.CzPaw5r3.jpg', '139founder.CzPaw5r3.jpg', 'irwan-tes', '0000-00-00 00:00:00', 'admin', '2025-04-27 21:51:39', 'admin', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_product`
--

CREATE TABLE `tabel_product` (
  `product_id` int(11) NOT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `information` text DEFAULT NULL,
  `faq` text DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `author` int(150) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` enum('0','1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tabel_product`
--

INSERT INTO `tabel_product` (`product_id`, `product_category_id`, `product_name`, `description`, `information`, `faq`, `thumbnail`, `image`, `price`, `slug`, `view_count`, `meta_description`, `meta_keyword`, `created`, `author`, `updated`, `updater`, `status`) VALUES
(1, 2, 'Mentorship for scholarship applications basic package', '<p>Whether you&#39;re applying for LPDP, Chevening, Australian Awards, IISMA, or any other scholarship programs, our Basic Package is designed specifically for you. If you&#39;re applying for multiple scholarships, you will need to purchase a separate package for each application.</p>', '<p>Whether you&#39;re applying for LPDP, Chevening, Australian Awards, IISMA, or any other scholarship programs, our Basic Package is designed specifically for you. If you&#39;re applying for multiple scholarships, you will need to purchase a separate package for each application.</p>', '<p>Whether you&#39;re applying for LPDP, Chevening, Australian Awards, IISMA, or any other scholarship programs, our Basic Package is designed specifically for you. If you&#39;re applying for multiple scholarships, you will need to purchase a separate package for each application.</p>', '823ilustration-letskonek-15.jpg', '522ilustration-letskonek-16.jpg', 120000.00, 'mentorship-for-scholarship-applications-basic-package', 1237, 'tes', 'tes', '2025-04-15 07:35:03', 2, '2025-04-26 23:31:46', 'admin', '2'),
(2, 2, 'Scholarship Essay Review Only', '<p>tes</p>', '<p>tes</p>', '<p>tes</p>', '754ilustration-letskonek-15.jpg', '118ilustration-letskonek-14.jpg', 2000.00, 'scholarship-essay-review-only', 20, 'tes', 'tes', '2025-04-16 05:35:11', 3, '2025-04-27 00:09:57', 'admin', '2'),
(3, 2, 'Scholarship Resume Review', 'What You Will Receive in This Mentorship:', 'What You Will Receive in This Mentorship:', 'What You Will Receive in This Mentorship:', NULL, NULL, NULL, NULL, NULL, 'tes', 'tes', NULL, NULL, NULL, '2', '2'),
(4, 2, 'Recommendation Letter Review', '', '', '', NULL, NULL, NULL, NULL, NULL, 'tes', 'tes', NULL, NULL, NULL, '2', '2'),
(5, 0, 'tes', '<p>tes</p>', '<p>tse</p>', '<p>tes</p>', '550ilustration-letskonek-14.jpg', '69ilustration-letskonek-14.jpg', NULL, 'tes', NULL, '4343', '4343', '2025-04-26 23:38:50', 0, NULL, NULL, '1'),
(6, 0, 'tes', '<p>tes</p>', '<p>tes</p>', '<p>tes</p>', '843ilustration-letskonek-15.jpg', '874ilustration-letskonek-15.jpg', NULL, 'tes', NULL, 'fds', 'fdsf', '2025-04-26 23:39:55', 0, NULL, NULL, '1'),
(7, 0, 'tes', '<p>tes</p>', '<p>tes</p>', '<p>tes</p>', '947ilustration-letskonek-15.jpg', '929ilustration-letskonek-15.jpg', NULL, 'tes', NULL, 'fds', 'fdsf', '2025-04-26 23:40:14', 0, NULL, NULL, '1'),
(8, 0, 'tes', '<p>tes</p>', '<p>tes</p>', '<p style=\\\"left: 20px; top: 20px; width: 100px; height: 100px; position: absolute;\\\">tes</p>', '240ilustration-letskonek-14.jpg', '939ilustration-letskonek-14.jpg', NULL, 'tes', NULL, 'fsd', 'fds', '2025-04-26 23:40:36', 0, NULL, NULL, '1'),
(9, 0, 'tes', '<p>tes</p>', '<p>tes</p>', '<p style=\\\"left: 20px; top: 20px; width: 100px; height: 100px; position: absolute;\\\">tes</p>', '659ilustration-letskonek-14.jpg', '10ilustration-letskonek-14.jpg', NULL, 'tes', NULL, 'fsd', 'fds', '2025-04-26 23:41:00', 0, NULL, NULL, '1'),
(10, 2, 'tes', '<p>tes</p>', '<p>fds</p>', '<p>fds</p>', '66ilustration-letskonek-16.jpg', '719ilustration-letskonek-15.jpg', 545.00, 'tes', NULL, '434', '3434', '2025-04-26 23:43:45', 0, '2025-04-26 23:44:42', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_product_category`
--

CREATE TABLE `tabel_product_category` (
  `product_category_id` int(11) NOT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `information` text DEFAULT NULL,
  `faq` text DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `author` varchar(150) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` enum('0','1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tabel_product_category`
--

INSERT INTO `tabel_product_category` (`product_category_id`, `product_category`, `description`, `information`, `faq`, `thumbnail`, `image`, `price`, `view_count`, `meta_description`, `meta_keyword`, `slug`, `created`, `author`, `updated`, `updater`, `status`) VALUES
(1, 'Coffee Chat', '<p>tes</p>', '<p>tes</p>', '<p>tes</p>', '705ilustration-letskonek-14.jpg', '159ilustration-letskonek-14.jpg', 54545.00, NULL, 'tes', 'tes', 'coffee-chat', '2025-04-25 21:48:19', 'admin', '2025-04-26 22:25:04', 'admin', '2'),
(2, 'Mentorship', '<p>tes</p>', '<p>tes</p>', '<p>tes</p>', '658ilustration-letskonek-16.jpg', '258ilustration-letskonek-16.jpg', 54545.00, NULL, 'tes', 'tes', 'mentorship', '2025-04-25 21:48:21', 'admin', '2025-04-26 22:25:16', 'admin', '2'),
(3, 'Mock Interview', '<p>tes</p>', '<p>tes</p>', '<p>tes</p>', '615ilustration-letskonek-15.jpg', '79ilustration-letskonek-15.jpg', 54545.00, NULL, 'tes', 'tes', 'mock-interview', '2025-04-25 21:48:24', 'admin', '2025-04-26 22:25:42', 'admin', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_setup_home`
--

CREATE TABLE `tabel_setup_home` (
  `id_setup_home` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `sub_title` varchar(150) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(50) DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tabel_setup_home`
--

INSERT INTO `tabel_setup_home` (`id_setup_home`, `title`, `sub_title`, `description`, `gambar`, `urutan`, `created`, `author`, `updated`, `updater`, `status`) VALUES
(1, 'Relevant Information', 'Human connections provide insider knowledge and practical advice that goes beyond generic data, helping you navigate competitive job markets and acade', 'Human connections provide insider knowledge and practical advice that goes beyond generic data, helping you navigate competitive job markets and academic programs.', '', 1, '2025-04-26 21:06:25', 'admin', '2025-04-26 21:07:43', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_team`
--

CREATE TABLE `tabel_team` (
  `id_team` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `sub_title` varchar(150) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `gambar_detail` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `slug` varchar(150) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(50) DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tabel_team`
--

INSERT INTO `tabel_team` (`id_team`, `title`, `sub_title`, `description`, `gambar`, `gambar_detail`, `banner`, `slug`, `urutan`, `created`, `author`, `updated`, `updater`, `status`) VALUES
(1, 'Christiani Sagala', 'Founder', '<p><span>Christiani Sagala spent her childhood in Sumatra, Indonesia, born in West Sumatra and raised in Jambi province. She pursued her studies in Communication Science at Universitas Indonesia. Inspired by her personal journey and the people she encountered along the way, Christiani is deeply passionate about youth development and its profound impact on individuals, families, and future generations. Her enthusiasm for sustainability led her to establish several initiatives in this field, drawing on her professional experience. An avid traveler and lifelong learner, she recently completed her MBA at Cornell University, New York, in 2024. Christiani firmly believes in the transformative power of education to bring freedom and empower lives.</span></p>', '812founder.CzPaw5r3.jpg', '405founder.CzPaw5r3.jpg', '', 'founder', 1, '2025-04-26 18:52:37', 'admin', '2025-04-26 20:25:38', 'admin', '1'),
(4, 'tes1', 'tes', '<p>te</p>', '867ilustration-letskonek-13.jpg', '386ilustration-letskonek-02.png', '129ilustration-letskonek-02.png', 'tes', 23, '2025-04-26 21:37:51', 'admin', '2025-04-26 21:38:45', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_video`
--

CREATE TABLE `tabel_video` (
  `id_video` int(10) UNSIGNED NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(50) DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tabel_video`
--

INSERT INTO `tabel_video` (`id_video`, `video`, `gambar`, `updated`, `updater`, `status`) VALUES
(1, 'Personalized Navigation for Career and Study', '48361ilustration-letskonek-13.jpg', '2025-04-26 21:16:59', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `trs_product_addon`
--

CREATE TABLE `trs_product_addon` (
  `product_addon_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_addon` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `author` int(150) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` enum('0','1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `trs_product_addon`
--

INSERT INTO `trs_product_addon` (`product_addon_id`, `product_id`, `product_addon`, `description`, `price`, `created`, `author`, `updated`, `updater`, `status`) VALUES
(1, 1, 'Scholarship Essay Review Only (LPDP, Chevening, Australian Awards, IISMA, etc)\r\n', 'Tesss', 12000.00, '2025-04-15 07:35:03', 2, '2025-04-16 05:34:25', NULL, '1'),
(2, 1, 'Resume Review\r\n', 'Table', 12000.00, '2025-04-16 05:35:11', 3, '2025-04-16 05:35:11', NULL, '1'),
(3, 1, 'Recommendation letter review\r\n', 'tes', 12000.00, NULL, NULL, NULL, NULL, NULL),
(4, 10, 'tes2', '<p>fds2</p>', 10000.00, '2025-04-26 23:59:28', 0, '2025-04-27 00:07:23', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `trs_product_category_img`
--

CREATE TABLE `trs_product_category_img` (
  `product_category_img_id` int(11) NOT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `product_img` varchar(255) DEFAULT NULL,
  `thumbail` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `author` int(150) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` enum('0','1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `trs_product_category_img`
--

INSERT INTO `trs_product_category_img` (`product_category_img_id`, `product_category_id`, `product_img`, `thumbail`, `created`, `author`, `updated`, `updater`, `status`) VALUES
(1, 1, 'Produk wkwkw', 'product_images/YoFn6HAKomFJ1WwUJj3voU8CXGus2DpGfkzYqnyN.jpg', '2025-04-15 07:35:03', 2, '2025-04-16 05:34:25', NULL, '1'),
(2, 1, 'Table', 'product_images/9W55wEkdOAV0hncqpfR8r9dwDqroeC2H0FZUaAEt.jpg', '2025-04-16 05:35:11', 3, '2025-04-16 05:35:11', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `trs_product_category_regis`
--

CREATE TABLE `trs_product_category_regis` (
  `id` int(11) NOT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `author` int(150) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` enum('0','1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `trs_product_category_regis`
--

INSERT INTO `trs_product_category_regis` (`id`, `product_category_id`, `question`, `description`, `created`, `author`, `updated`, `updater`, `status`) VALUES
(1, 1, 'Scholarship Essay Review Only (LPDP, Chevening, Australian Awards, IISMA, etc)\r\n', 'Tesss', '2025-04-15 07:35:03', 2, '2025-04-16 05:34:25', NULL, '1'),
(2, 1, 'What type of mock interview preparation would you like to purchase?', 'Table', '2025-04-16 05:35:11', 3, '2025-04-16 05:35:11', NULL, '1'),
(3, 1, 'Recommendation letter review\r\n', 'tes', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trs_product_category_regis_answer`
--

CREATE TABLE `trs_product_category_regis_answer` (
  `id` int(11) NOT NULL,
  `product_category_regis_id` int(11) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `author` int(150) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` enum('0','1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `author` varchar(150) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `updater` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` enum('0','1','2') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `fcm_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `fullname`, `email`, `phone`, `created`, `author`, `updated`, `updater`, `status`, `avatar`, `fcm_token`) VALUES
(1, 'irwan', 'irwan@gmail.coim', '0812121212', '2025-04-27 14:33:39', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm_menu`
--
ALTER TABLE `adm_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`) USING BTREE;

--
-- Indexes for table `orders_addon`
--
ALTER TABLE `orders_addon`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `pw_users`
--
ALTER TABLE `pw_users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tabel_about_us`
--
ALTER TABLE `tabel_about_us`
  ADD PRIMARY KEY (`id_about_us`) USING BTREE;

--
-- Indexes for table `tabel_article`
--
ALTER TABLE `tabel_article`
  ADD PRIMARY KEY (`id_article`) USING BTREE;
ALTER TABLE `tabel_article` ADD FULLTEXT KEY `title` (`title`,`content`);
ALTER TABLE `tabel_article` ADD FULLTEXT KEY `title_2` (`title`);

--
-- Indexes for table `tabel_article_category`
--
ALTER TABLE `tabel_article_category`
  ADD PRIMARY KEY (`id_article_category`) USING BTREE;

--
-- Indexes for table `tabel_banner`
--
ALTER TABLE `tabel_banner`
  ADD PRIMARY KEY (`id_banner`) USING BTREE;

--
-- Indexes for table `tabel_faq`
--
ALTER TABLE `tabel_faq`
  ADD PRIMARY KEY (`id_faq`) USING BTREE;

--
-- Indexes for table `tabel_mentors`
--
ALTER TABLE `tabel_mentors`
  ADD PRIMARY KEY (`id_mentors`) USING BTREE;

--
-- Indexes for table `tabel_product`
--
ALTER TABLE `tabel_product`
  ADD PRIMARY KEY (`product_id`) USING BTREE;

--
-- Indexes for table `tabel_product_category`
--
ALTER TABLE `tabel_product_category`
  ADD PRIMARY KEY (`product_category_id`) USING BTREE;

--
-- Indexes for table `tabel_setup_home`
--
ALTER TABLE `tabel_setup_home`
  ADD PRIMARY KEY (`id_setup_home`) USING BTREE;

--
-- Indexes for table `tabel_team`
--
ALTER TABLE `tabel_team`
  ADD PRIMARY KEY (`id_team`) USING BTREE;

--
-- Indexes for table `tabel_video`
--
ALTER TABLE `tabel_video`
  ADD PRIMARY KEY (`id_video`) USING BTREE;

--
-- Indexes for table `trs_product_addon`
--
ALTER TABLE `trs_product_addon`
  ADD PRIMARY KEY (`product_addon_id`) USING BTREE;

--
-- Indexes for table `trs_product_category_img`
--
ALTER TABLE `trs_product_category_img`
  ADD PRIMARY KEY (`product_category_img_id`) USING BTREE;

--
-- Indexes for table `trs_product_category_regis`
--
ALTER TABLE `trs_product_category_regis`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `trs_product_category_regis_answer`
--
ALTER TABLE `trs_product_category_regis_answer`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm_menu`
--
ALTER TABLE `adm_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13321358;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders_addon`
--
ALTER TABLE `orders_addon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pw_users`
--
ALTER TABLE `pw_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tabel_about_us`
--
ALTER TABLE `tabel_about_us`
  MODIFY `id_about_us` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_article`
--
ALTER TABLE `tabel_article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_article_category`
--
ALTER TABLE `tabel_article_category`
  MODIFY `id_article_category` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_banner`
--
ALTER TABLE `tabel_banner`
  MODIFY `id_banner` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_faq`
--
ALTER TABLE `tabel_faq`
  MODIFY `id_faq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_mentors`
--
ALTER TABLE `tabel_mentors`
  MODIFY `id_mentors` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_product`
--
ALTER TABLE `tabel_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tabel_product_category`
--
ALTER TABLE `tabel_product_category`
  MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_setup_home`
--
ALTER TABLE `tabel_setup_home`
  MODIFY `id_setup_home` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_team`
--
ALTER TABLE `tabel_team`
  MODIFY `id_team` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_video`
--
ALTER TABLE `tabel_video`
  MODIFY `id_video` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trs_product_addon`
--
ALTER TABLE `trs_product_addon`
  MODIFY `product_addon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trs_product_category_img`
--
ALTER TABLE `trs_product_category_img`
  MODIFY `product_category_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trs_product_category_regis`
--
ALTER TABLE `trs_product_category_regis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trs_product_category_regis_answer`
--
ALTER TABLE `trs_product_category_regis_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
