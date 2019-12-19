-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 12:31 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dressign2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Super Admin' COMMENT 'Admin|Super Admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone_no`, `avatar`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Farhan Israk', 'dressignofficial@gmail.com', '$2y$10$MIWoKvLFNMIqpyDWOJfr9OVQWsXgDnA3YnfwC/TAQDu75fVhHvw5y', '01969279140', NULL, 'Super Admin', 'hdM2jbiML1wDMEGXsyvlDd5tHfU1FtvraOaOWbN13UUFi8fCvIijHSuYBW3C', '2019-04-14 07:24:58', '2019-04-14 07:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `bottoms`
--

CREATE TABLE `bottoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bottoms`
--

INSERT INTO `bottoms` (`id`, `code`, `image`, `created_at`, `updated_at`) VALUES
(6, 'b1', '1555156560.jpg', '2019-04-13 05:56:00', '2019-04-13 05:56:00'),
(7, 'b2', '1555156568.jpg', '2019-04-13 05:56:08', '2019-04-13 05:56:08'),
(8, 'b3', '1555156574.jpg', '2019-04-13 05:56:14', '2019-04-13 05:56:14'),
(9, 'b4', '1555156582.jpg', '2019-04-13 05:56:22', '2019-04-13 05:56:22'),
(10, 'b5', '1555156594.jpg', '2019-04-13 05:56:34', '2019-04-13 05:56:34'),
(11, 'b6', '1555156601.jpg', '2019-04-13 05:56:41', '2019-04-13 05:56:41'),
(12, 'b7', '1555156609.jpg', '2019-04-13 05:56:49', '2019-04-13 05:56:49'),
(13, 'b8', '1555156617.jpg', '2019-04-13 05:56:57', '2019-04-13 05:56:57'),
(14, 'b9', '1555156627.jpg', '2019-04-13 05:57:07', '2019-04-13 05:57:07'),
(15, 'b10', '1555156642.jpg', '2019-04-13 05:57:23', '2019-04-13 05:57:23'),
(16, 'b11', '1555156664.jpg', '2019-04-13 05:57:44', '2019-04-13 05:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Aarong', 'Clothing Brand', '1554926960.png', '2019-04-10 14:09:21', '2019-04-10 14:09:21'),
(2, 'Aarong', 'Clothing Brand', '1554927005.png', '2019-04-10 14:10:05', '2019-04-10 14:10:05'),
(3, 'Cats Eye', 'Clothing Brand', '1554927046.jpg', '2019-04-10 14:10:47', '2019-04-10 14:10:47'),
(4, 'Rich Man', 'Clothing Brand', '1554927070.jpg', '2019-04-10 14:11:10', '2019-04-10 14:11:10'),
(5, 'Ecstasy', 'Clothing Brand', '1554927109.png', '2019-04-10 14:11:49', '2019-04-10 14:11:49'),
(6, 'Rang', 'Clothing Brand', '1554927147.png', '2019-04-10 14:12:27', '2019-04-10 14:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_id`, `order_id`, `ip_address`, `product_quantity`, `created_at`, `updated_at`) VALUES
(2, 4, 5, 2, '127.0.0.1', 2, '2019-04-10 17:31:12', '2019-04-13 16:22:23'),
(3, 17, NULL, 2, '127.0.0.1', 4, '2019-04-10 23:54:38', '2019-04-13 16:28:35'),
(4, 17, 5, 2, '127.0.0.1', 7, '2019-04-11 00:21:49', '2019-04-14 07:32:58'),
(5, 18, NULL, 3, '127.0.0.1', 1, '2019-04-13 16:38:21', '2019-04-14 12:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Salwar', NULL, NULL, NULL, '2019-04-10 14:13:00', '2019-04-10 14:13:00'),
(2, 'Salwar Kameez', NULL, NULL, NULL, '2019-04-10 14:13:19', '2019-04-10 14:13:19'),
(3, 'Saree', NULL, NULL, NULL, '2019-04-10 14:13:34', '2019-04-10 14:13:34'),
(4, 'Office Wear', NULL, NULL, NULL, '2019-04-10 14:13:50', '2019-04-10 14:13:50'),
(5, 'Party Wear', NULL, NULL, NULL, '2019-04-10 14:14:08', '2019-04-10 14:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designs_images`
--

CREATE TABLE `designs_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `design_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `design_categories`
--

CREATE TABLE `design_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `design_checkouts`
--

CREATE TABLE `design_checkouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sleeve` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bottom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ankle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `armhole` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aroundhead` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fbklb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `backwidth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bottomlength` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bust` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elbow` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frontchest` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fbklf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullsleeve` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insideleg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `midcalf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `midthigh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nw` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outleg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shoulder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `se` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waist` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wrist` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `design_checkouts`
--

INSERT INTO `design_checkouts` (`id`, `email`, `name`, `contact`, `address`, `kf`, `sleeve`, `nf`, `bottom`, `kb`, `nb`, `ankle`, `armhole`, `aroundhead`, `fbklb`, `backwidth`, `bottomlength`, `bust`, `elbow`, `frontchest`, `fbklf`, `swf`, `fullsleeve`, `insideleg`, `hip`, `midcalf`, `midthigh`, `nw`, `outleg`, `shoulder`, `se`, `wh`, `waist`, `wrist`, `created_at`, `updated_at`) VALUES
(1, 'hydro.toluyn@gmail.com', 'Farhan Israk', '31124', '75/1,SharatGupta Road,Narinda,Dhaka-1100', 'n12', '1231', '12', NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2019-04-15 17:25:39', '2019-04-15 17:25:39');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dress_designs`
--

CREATE TABLE `dress_designs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `design_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kameez_backs`
--

CREATE TABLE `kameez_backs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kameez_backs`
--

INSERT INTO `kameez_backs` (`id`, `code`, `image`, `created_at`, `updated_at`) VALUES
(1, 'kb1', '1555155426.jpg', '2019-04-13 05:37:06', '2019-04-13 05:37:06'),
(2, 'kb2', '1555155438.jpg', '2019-04-13 05:37:18', '2019-04-13 05:37:18'),
(3, 'kb3', '1555155445.jpg', '2019-04-13 05:37:25', '2019-04-13 05:37:25'),
(4, 'kb4', '1555155459.jpg', '2019-04-13 05:37:39', '2019-04-13 05:37:39'),
(5, 'kb5', '1555155469.jpg', '2019-04-13 05:37:49', '2019-04-13 05:37:49'),
(6, 'kb6', '1555155480.jpg', '2019-04-13 05:38:00', '2019-04-13 05:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `kameez_fronts`
--

CREATE TABLE `kameez_fronts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kameez_fronts`
--

INSERT INTO `kameez_fronts` (`id`, `code`, `image`, `created_at`, `updated_at`) VALUES
(1, 'kf1', '1555154956.jpg', '2019-04-13 05:29:17', '2019-04-13 05:29:17'),
(2, 'kf2', '1555154970.jpg', '2019-04-13 05:29:31', '2019-04-13 05:29:31'),
(3, 'kf3', '1555154996.jpg', '2019-04-13 05:29:56', '2019-04-13 05:29:56'),
(4, 'kf4', '1555155017.jpg', '2019-04-13 05:30:17', '2019-04-13 05:30:17'),
(5, 'kf5', '1555155030.jpg', '2019-04-13 05:30:30', '2019-04-13 05:30:30'),
(6, 'kf6', '1555155047.jpg', '2019-04-13 05:30:47', '2019-04-13 05:30:47'),
(7, 'kf7', '1555155150.jpg', '2019-04-13 05:32:30', '2019-04-13 05:32:30'),
(8, 'kf8', '1555155168.jpg', '2019-04-13 05:32:48', '2019-04-13 05:32:48'),
(9, 'kf9', '1555155183.jpg', '2019-04-13 05:33:04', '2019-04-13 05:33:04'),
(10, 'kf10', '1555155201.jpg', '2019-04-13 05:33:22', '2019-04-13 05:33:22'),
(11, 'kf11', '1555155257.jpg', '2019-04-13 05:34:17', '2019-04-13 05:34:17'),
(12, 'kf12', '1555155274.jpg', '2019-04-13 05:34:34', '2019-04-13 05:34:34'),
(13, 'kf13', '1555155294.jpg', '2019-04-13 05:34:54', '2019-04-13 05:34:54'),
(14, 'kf14', '1555155310.jpg', '2019-04-13 05:35:10', '2019-04-13 05:35:10'),
(15, 'kf15', '1555155327.jpg', '2019-04-13 05:35:27', '2019-04-13 05:35:27'),
(16, 'kf16', '1555155343.jpg', '2019-04-13 05:35:43', '2019-04-13 05:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_21_115850_create_divisions_table', 1),
(4, '2018_07_21_115908_create_districts_table', 1),
(5, '2019_03_27_224702_create_admins_table', 1),
(6, '2019_03_27_224738_create_dress_designs_table', 1),
(7, '2019_03_27_225000_create_products_table', 1),
(8, '2019_03_27_225027_create_brands_table', 1),
(9, '2019_03_27_225055_create_categories_table', 1),
(10, '2019_03_27_230116_create_product_images_table', 1),
(11, '2019_04_02_201424_create_designs_table', 1),
(12, '2019_04_02_203520_create_designs_images_table', 1),
(13, '2019_04_02_203850_create_design_categories_table', 1),
(14, '2019_04_10_223207_create_orders_table', 2),
(15, '2019_04_11_002727_create_payments_table', 3),
(16, '2018_08_28_033110_create_orders_table', 4),
(17, '2018_08_28_083714_create_settings_table', 5),
(18, '2019_04_12_190635_create_kameez_fronts_table', 6),
(19, '2019_04_12_191237_create_kameez_backs_table', 6),
(20, '2019_04_12_191320_create_neck_backs_table', 6),
(21, '2019_04_12_191407_create_neck_fronts_table', 6),
(22, '2019_04_12_191440_create_sleeves_table', 6),
(23, '2019_04_12_191500_create_bottoms_table', 6),
(24, '2019_04_14_190816_create_sliders_table', 7),
(25, '2019_04_14_234230_create_design_checkouts_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `neck_backs`
--

CREATE TABLE `neck_backs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `neck_backs`
--

INSERT INTO `neck_backs` (`id`, `code`, `image`, `created_at`, `updated_at`) VALUES
(5, 'nb1', '1555156006.jpg', '2019-04-13 05:46:46', '2019-04-13 05:46:46'),
(6, 'nb2', '1555156041.jpg', '2019-04-13 05:47:21', '2019-04-13 05:47:21'),
(7, 'nb3', '1555156049.jpg', '2019-04-13 05:47:29', '2019-04-13 05:47:29'),
(8, 'nb4', '1555156057.jpg', '2019-04-13 05:47:37', '2019-04-13 05:47:37'),
(9, 'nb5', '1555156066.jpg', '2019-04-13 05:47:46', '2019-04-13 05:47:46'),
(10, 'nb6', '1555156080.jpg', '2019-04-13 05:48:00', '2019-04-13 05:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `neck_fronts`
--

CREATE TABLE `neck_fronts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `neck_fronts`
--

INSERT INTO `neck_fronts` (`id`, `code`, `image`, `created_at`, `updated_at`) VALUES
(4, 'n1', '1555155553.jpg', '2019-04-13 05:39:13', '2019-04-13 05:39:13'),
(5, 'n2', '1555155584.jpg', '2019-04-13 05:39:44', '2019-04-13 05:39:44'),
(6, 'n3', '1555155591.jpg', '2019-04-13 05:39:52', '2019-04-13 05:39:52'),
(7, 'n4', '1555155599.jpg', '2019-04-13 05:39:59', '2019-04-13 05:39:59'),
(8, 'n5', '1555155606.jpg', '2019-04-13 05:40:06', '2019-04-13 05:40:06'),
(9, 'n6', '1555155613.jpg', '2019-04-13 05:40:13', '2019-04-13 05:40:13'),
(10, 'n7', '1555155620.jpg', '2019-04-13 05:40:20', '2019-04-13 05:40:20'),
(11, 'n8', '1555155627.jpg', '2019-04-13 05:40:27', '2019-04-13 05:40:27'),
(12, 'n9', '1555155636.jpg', '2019-04-13 05:40:36', '2019-04-13 05:40:36'),
(13, 'n10', '1555155643.jpg', '2019-04-13 05:40:43', '2019-04-13 05:40:43'),
(14, 'n11', '1555155652.jpg', '2019-04-13 05:40:52', '2019-04-13 05:40:52'),
(15, 'n12', '1555155704.jpg', '2019-04-13 05:41:44', '2019-04-13 05:41:44'),
(16, 'n13', '1555155711.jpg', '2019-04-13 05:41:51', '2019-04-13 05:41:51'),
(17, 'n14', '1555155719.jpg', '2019-04-13 05:41:59', '2019-04-13 05:41:59'),
(18, 'n16', '1555155747.jpg', '2019-04-13 05:42:27', '2019-04-13 05:42:27'),
(19, 'n17', '1555155755.jpg', '2019-04-13 05:42:35', '2019-04-13 05:42:35'),
(20, 'n18', '1555155764.jpg', '2019-04-13 05:42:44', '2019-04-13 05:42:44'),
(21, 'n19', '1555155774.jpg', '2019-04-13 05:42:54', '2019-04-13 05:42:54'),
(22, 'n20', '1555155783.jpg', '2019-04-13 05:43:03', '2019-04-13 05:43:03'),
(23, 'n21', '1555155791.jpg', '2019-04-13 05:43:11', '2019-04-13 05:43:11'),
(24, 'n15', '1555155885.jpg', '2019-04-13 05:44:45', '2019-04-13 05:44:45'),
(25, 'n22', '1555155909.jpg', '2019-04-13 05:45:09', '2019-04-13 05:45:09'),
(26, 'n23', '1555155919.jpg', '2019-04-13 05:45:19', '2019-04-13 05:45:19'),
(27, 'n24', '1555155926.jpg', '2019-04-13 05:45:27', '2019-04-13 05:45:27'),
(28, 'n25', '1555155934.jpg', '2019-04-13 05:45:34', '2019-04-13 05:45:34'),
(29, 'n26', '1555155942.jpg', '2019-04-13 05:45:42', '2019-04-13 05:45:42'),
(30, 'n27', '1555155965.jpg', '2019-04-13 05:46:05', '2019-04-13 05:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `payment_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  `is_completed` tinyint(1) NOT NULL DEFAULT '0',
  `is_seen_by_admin` tinyint(1) NOT NULL DEFAULT '0',
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shipping_charge` int(11) NOT NULL DEFAULT '60',
  `custom_discount` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_id`, `ip_address`, `name`, `phone_no`, `shipping_address`, `email`, `message`, `is_paid`, `is_completed`, `is_seen_by_admin`, `transaction_id`, `created_at`, `updated_at`, `shipping_charge`, `custom_discount`) VALUES
(1, NULL, 1, '127.0.0.1', 'Farhan Israk', '1969279140', '75/1,SharatGupta Road,Narinda,Dhaka-1100', 'hydro.toluyn@gmail.com', NULL, 1, 1, 1, NULL, '2019-04-13 16:14:47', '2019-04-16 10:38:23', 60, 0),
(2, NULL, 3, '127.0.0.1', 'Farhan Israk', '1969279140', '75/1,SharatGupta Road,Narinda,Dhaka-1100', 'hydro.toluyn@gmail.com', NULL, 0, 0, 1, '13123123123', '2019-04-13 16:22:23', '2019-04-14 12:53:44', 60, 0),
(3, NULL, 4, '127.0.0.1', 'Farhan Israk', '1969279140', '75/1,SharatGupta Road,Narinda,Dhaka-1100', 'hydro.toluyn@gmail.com', NULL, 1, 1, 1, '331231233', '2019-04-13 16:38:45', '2019-04-16 12:39:37', 60, 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dressignofficial@gmail.com', '$2y$10$9T9HE2doJyunUwmtuM7YxuCPKLlEyQTYNE2U3dwUxMnfOqXV..3ea', '2019-04-14 10:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` tinyint(4) NOT NULL DEFAULT '1',
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Payment No',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'agent|personal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `image`, `priority`, `short_name`, `no`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Cash On Delivery', 'cash_in.jpg', 1, 'cash_in', NULL, NULL, '2019-04-11 01:09:23', '2019-04-11 01:09:23'),
(3, 'Bkash', 'bkash.jpg', 2, 'bkash', '01969279140', 'Personal', '2019-04-11 01:10:36', '2019-04-11 01:10:36'),
(4, 'Rocket', 'rocket.jpg', 3, 'rocket', '01969279140', 'personal', '2019-04-11 01:11:36', '2019-04-11 01:11:36');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `offer_price` int(11) DEFAULT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `description`, `slug`, `quantity`, `price`, `status`, `offer_price`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Green Salwar Kameez', 'Color: Green', 'green-salwar-kameez', 5, 1500, 0, NULL, 1, '2019-04-10 14:20:53', '2019-04-10 14:20:53'),
(2, 5, 1, 'Orange Party wear', 'Color: Orange', 'orange-party-wear', 5, 1500, 0, NULL, 1, '2019-04-10 14:22:41', '2019-04-10 14:22:41'),
(3, 2, 2, 'Suti Salwar Kameez', 'Color:Bottle Green', 'suti-salwar-kameez', 5, 1500, 0, NULL, 1, '2019-04-10 14:23:42', '2019-04-10 14:23:42'),
(4, 2, 5, 'Salwar Kameez', 'Color: Sky Blue', 'salwar-kameez', 6, 1500, 0, NULL, 1, '2019-04-10 14:24:35', '2019-04-10 14:24:35'),
(5, 2, 5, 'Long Dress', 'Color: Blue', 'long-dress', 6, 1500, 0, NULL, 1, '2019-04-10 14:25:26', '2019-04-10 14:25:26'),
(6, 1, 5, 'Party Top', 'Color: Navy Blue', 'party-top', 7, 1200, 0, NULL, 1, '2019-04-10 14:26:22', '2019-04-10 14:26:22'),
(7, 5, 5, 'Party Tops', 'Color:Blue', 'party-tops', 6, 1400, 0, NULL, 1, '2019-04-10 14:26:59', '2019-04-10 14:26:59'),
(8, 5, 2, 'aasd', 'sdfaf sdfsdg sfDG', 'aasd', 4, 1212, 0, NULL, 1, '2019-04-10 14:27:23', '2019-04-10 14:27:23'),
(9, 5, 4, 'hfadys', 'asdd asdasf asfas asfsr', 'hfadys', 4, 3211, 0, NULL, 1, '2019-04-10 14:28:23', '2019-04-10 14:28:23'),
(10, 3, 6, 'Saree123', 'saf asfs asf asasf', 'saree123', 3, 2222, 0, NULL, 1, '2019-04-10 14:29:16', '2019-04-10 14:29:16'),
(11, 3, 3, 'Purple Saree', 'safsf sadfsdf SFdsf SF', 'purple-saree', 2, 2121, 0, NULL, 1, '2019-04-10 14:30:06', '2019-04-10 14:30:06'),
(12, 5, 3, 'dasd asf', 'asfda xccz xv vngn', 'dasd-asf', 1, 1111, 0, NULL, 1, '2019-04-10 14:30:48', '2019-04-10 14:30:48'),
(13, 5, 5, 'White Tops', 'asdas assf asfas fsa fas', 'white-tops', 2, 2131, 0, NULL, 1, '2019-04-10 14:31:30', '2019-04-10 14:31:30'),
(14, 5, 6, 'Blue Tops', 'asdasd asdaseqwr wrfrwer asrwqr', 'blue-tops', 7, 1000, 0, NULL, 1, '2019-04-10 14:32:27', '2019-04-10 14:32:27'),
(15, 4, 2, 'ase', 'asda sdasd asdwqr zdsz dd', 'ase', 6, 2111, 0, NULL, 1, '2019-04-10 14:33:07', '2019-04-10 14:33:07'),
(16, 5, 6, 'qweqw', 'addad', 'qweqw', 4, 2132, 0, NULL, 1, '2019-04-10 14:33:54', '2019-04-10 14:33:54'),
(17, 5, 6, 'saawr', 'rwccra safsf ewaf asf', 'saawr', 3, 2111, 0, NULL, 1, '2019-04-10 14:34:45', '2019-04-10 14:34:45'),
(18, 1, 5, 'Salwar Kameez', 'dasd asdfa 3rrwer sdf gdsg d', 'salwar-kameez', 3, 2121, 0, NULL, 1, '2019-04-10 14:35:30', '2019-04-10 14:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '1554927653.PNG', '2019-04-10 14:20:53', '2019-04-10 14:20:53'),
(2, 1, '1554927653.PNG', '2019-04-10 14:20:54', '2019-04-10 14:20:54'),
(3, 1, '1554927654.PNG', '2019-04-10 14:20:54', '2019-04-10 14:20:54'),
(4, 2, '1554927761.jpg', '2019-04-10 14:22:41', '2019-04-10 14:22:41'),
(5, 3, '1554927822.PNG', '2019-04-10 14:23:42', '2019-04-10 14:23:42'),
(6, 3, '1554927822.PNG', '2019-04-10 14:23:42', '2019-04-10 14:23:42'),
(7, 3, '1554927822.PNG', '2019-04-10 14:23:42', '2019-04-10 14:23:42'),
(8, 4, '1554927875.jpg', '2019-04-10 14:24:36', '2019-04-10 14:24:36'),
(9, 4, '1554927876.PNG', '2019-04-10 14:24:36', '2019-04-10 14:24:36'),
(10, 4, '1554927876.PNG', '2019-04-10 14:24:36', '2019-04-10 14:24:36'),
(11, 5, '1554927926.PNG', '2019-04-10 14:25:27', '2019-04-10 14:25:27'),
(12, 5, '1554927927.PNG', '2019-04-10 14:25:27', '2019-04-10 14:25:27'),
(13, 5, '1554927927.jpg', '2019-04-10 14:25:27', '2019-04-10 14:25:27'),
(14, 6, '1554927983.jpg', '2019-04-10 14:26:23', '2019-04-10 14:26:23'),
(15, 7, '1554928019.jpg', '2019-04-10 14:26:59', '2019-04-10 14:26:59'),
(16, 8, '1554928043.jpg', '2019-04-10 14:27:23', '2019-04-10 14:27:23'),
(17, 9, '1554928103.PNG', '2019-04-10 14:28:23', '2019-04-10 14:28:23'),
(18, 9, '1554928103.PNG', '2019-04-10 14:28:24', '2019-04-10 14:28:24'),
(19, 9, '1554928104.PNG', '2019-04-10 14:28:24', '2019-04-10 14:28:24'),
(20, 10, '1554928156.PNG', '2019-04-10 14:29:16', '2019-04-10 14:29:16'),
(21, 10, '1554928156.PNG', '2019-04-10 14:29:17', '2019-04-10 14:29:17'),
(22, 11, '1554928206.PNG', '2019-04-10 14:30:06', '2019-04-10 14:30:06'),
(23, 11, '1554928206.PNG', '2019-04-10 14:30:06', '2019-04-10 14:30:06'),
(24, 12, '1554928248.PNG', '2019-04-10 14:30:48', '2019-04-10 14:30:48'),
(25, 12, '1554928248.PNG', '2019-04-10 14:30:48', '2019-04-10 14:30:48'),
(26, 12, '1554928248.PNG', '2019-04-10 14:30:49', '2019-04-10 14:30:49'),
(27, 13, '1554928290.PNG', '2019-04-10 14:31:31', '2019-04-10 14:31:31'),
(28, 13, '1554928291.PNG', '2019-04-10 14:31:31', '2019-04-10 14:31:31'),
(29, 14, '1554928347.PNG', '2019-04-10 14:32:28', '2019-04-10 14:32:28'),
(30, 14, '1554928348.PNG', '2019-04-10 14:32:28', '2019-04-10 14:32:28'),
(31, 14, '1554928348.PNG', '2019-04-10 14:32:28', '2019-04-10 14:32:28'),
(32, 15, '1554928387.PNG', '2019-04-10 14:33:07', '2019-04-10 14:33:07'),
(33, 16, '1554928434.PNG', '2019-04-10 14:33:54', '2019-04-10 14:33:54'),
(34, 16, '1554928434.PNG', '2019-04-10 14:33:54', '2019-04-10 14:33:54'),
(35, 16, '1554928434.PNG', '2019-04-10 14:33:54', '2019-04-10 14:33:54'),
(36, 17, '1554928485.jpg', '2019-04-10 14:34:45', '2019-04-10 14:34:45'),
(37, 18, '1554928530.jpeg', '2019-04-10 14:35:30', '2019-04-10 14:35:30'),
(38, 18, '1554928530.jpeg', '2019-04-10 14:35:31', '2019-04-10 14:35:31'),
(39, 18, '1554928531.jpeg', '2019-04-10 14:35:31', '2019-04-10 14:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_cost` int(10) UNSIGNED NOT NULL DEFAULT '100',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `phone`, `address`, `shipping_cost`, `created_at`, `updated_at`) VALUES
(1, 'test@gmail.com', '+8801969279140', 'Dhaka', 100, '2019-04-11 01:05:38', '2019-04-11 01:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `sleeves`
--

CREATE TABLE `sleeves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sleeves`
--

INSERT INTO `sleeves` (`id`, `code`, `image`, `created_at`, `updated_at`) VALUES
(4, 's1', '1555156109.jpg', '2019-04-13 05:48:29', '2019-04-13 05:48:29'),
(5, 's2', '1555156125.jpg', '2019-04-13 05:48:45', '2019-04-13 05:48:45'),
(6, 's3', '1555156153.jpg', '2019-04-13 05:49:13', '2019-04-13 05:49:13'),
(7, 's5', '1555156170.jpg', '2019-04-13 05:49:31', '2019-04-13 05:49:31'),
(8, 's6', '1555156178.jpg', '2019-04-13 05:49:38', '2019-04-13 05:49:38'),
(9, 's7', '1555156184.jpg', '2019-04-13 05:49:44', '2019-04-13 05:49:44'),
(10, 's8', '1555156190.jpg', '2019-04-13 05:49:50', '2019-04-13 05:49:50'),
(11, 's9', '1555156196.jpg', '2019-04-13 05:49:56', '2019-04-13 05:49:56'),
(12, 's10', '1555156204.jpg', '2019-04-13 05:50:04', '2019-04-13 05:50:04'),
(13, 's11', '1555156212.jpg', '2019-04-13 05:50:12', '2019-04-13 05:50:12'),
(14, 's12', '1555156242.jpg', '2019-04-13 05:50:42', '2019-04-13 05:50:42'),
(15, 's4', '1555156293.jpg', '2019-04-13 05:51:33', '2019-04-13 05:51:33'),
(16, 's13', '1555156325.jpg', '2019-04-13 05:52:05', '2019-04-13 05:52:05'),
(17, 's14', '1555156331.jpg', '2019-04-13 05:52:11', '2019-04-13 05:52:11'),
(18, 's15', '1555156338.jpg', '2019-04-13 05:52:18', '2019-04-13 05:52:18'),
(19, 's16', '1555156347.jpg', '2019-04-13 05:52:27', '2019-04-13 05:52:27'),
(20, 's17', '1555156356.jpg', '2019-04-13 05:52:36', '2019-04-13 05:52:36'),
(21, 's18', '1555156363.jpg', '2019-04-13 05:52:43', '2019-04-13 05:52:43'),
(22, 's19', '1555156422.jpg', '2019-04-13 05:53:42', '2019-04-13 05:53:42'),
(23, 's20', '1555156445.jpg', '2019-04-13 05:54:06', '2019-04-13 05:54:06'),
(24, 's21', '1555156474.jpg', '2019-04-13 05:54:34', '2019-04-13 05:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL DEFAULT '10',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `button_text`, `button_link`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to DRESSIGN', '1555269823.png', 'Go Inside', 'https://www.google.com/', 6, '2019-04-14 13:22:58', '2019-04-14 13:47:17'),
(3, 'DRESSIGN', '1555270749.jpg', 'Go Inside', 'https://www.google.com/', 1, '2019-04-14 13:39:09', '2019-04-14 13:39:09'),
(4, 'DRESSIGN', '1555271195.jpg', 'Go Inside', 'https://www.google.com/', 2, '2019-04-14 13:46:36', '2019-04-14 13:46:36'),
(5, 'DRESSIGN', '1555271213.jpg', 'Go Inside', 'https://www.google.com/', 3, '2019-04-14 13:46:53', '2019-04-14 13:46:53'),
(6, 'DRESSIGN', '1555271252.jpg', 'Go Inside', 'https://www.google.com/', 4, '2019-04-14 13:47:32', '2019-04-14 13:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '0=Inactive|1=Active|2=Ban',
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `phone_no`, `email`, `password`, `street_address`, `status`, `ip_address`, `avatar`, `shipping_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Farhan', 'Israk', 'farhanisrak', '01969279140', 'hydro.toluyn@gmail.com', '$2y$10$NLpvIWd0yJrT7o65pNLug.Y3im3v9plhQBjD.7/mUT3MrnbnPiW8.', '75/1,SharatGupta Road,Narinda,Dhaka-1100', 0, '127.0.0.1', NULL, NULL, '41SGCCwoIuOdmBXHYdv2KeAYQcg84HYGRf5jIHTILwu4FpTWHlMKKUIFwFYO', '2019-04-09 17:54:12', '2019-04-12 04:55:26'),
(6, 'a', 'b', 'ab', '12345678', 'a@gmail.com', '$2y$10$jC2rzhujY6ai5uCjvQ17G.IJk/m3Gl1VUIk4yDpu4wclzIMbb.2OC', '75/1,SharatGupta Road,Narinda,Dhaka-1100', 0, '127.0.0.1', NULL, NULL, 'amTwUxgxwGT7bw2BiwYfWXvHTjrDnYfEEPeyUXpSFm0m6gX6IDCfayoVsKWC', '2019-04-14 08:16:19', '2019-04-14 08:16:19'),
(9, 'Farhan', 'Israk2', 'farhanisrak2', '1969279140', 'farhan.yen@northsouth.edu', '$2y$10$LebrDiKdEEfv6XS4XNrzXeiKWWmpfdjZYFuigYD9fXb//C91D8b/S', '75/1,SharatGupta Road,Narinda,Dhaka-1100', 0, '127.0.0.1', NULL, NULL, 'WfHNroBmJTBrJ2Db6WLSI93GkkxZVigOpe3nJmkBuw2ysqqaomQDvYG8AqQo', '2019-04-14 08:19:28', '2019-04-14 08:19:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `bottoms`
--
ALTER TABLE `bottoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designs_images`
--
ALTER TABLE `designs_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_categories`
--
ALTER TABLE `design_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_checkouts`
--
ALTER TABLE `design_checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dress_designs`
--
ALTER TABLE `dress_designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kameez_backs`
--
ALTER TABLE `kameez_backs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kameez_fronts`
--
ALTER TABLE `kameez_fronts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neck_backs`
--
ALTER TABLE `neck_backs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neck_fronts`
--
ALTER TABLE `neck_fronts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_short_name_unique` (`short_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sleeves`
--
ALTER TABLE `sleeves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_phone_no_unique` (`phone_no`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bottoms`
--
ALTER TABLE `bottoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designs_images`
--
ALTER TABLE `designs_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `design_categories`
--
ALTER TABLE `design_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `design_checkouts`
--
ALTER TABLE `design_checkouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dress_designs`
--
ALTER TABLE `dress_designs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kameez_backs`
--
ALTER TABLE `kameez_backs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kameez_fronts`
--
ALTER TABLE `kameez_fronts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `neck_backs`
--
ALTER TABLE `neck_backs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `neck_fronts`
--
ALTER TABLE `neck_fronts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sleeves`
--
ALTER TABLE `sleeves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
