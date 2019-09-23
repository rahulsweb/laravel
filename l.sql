-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2019 at 07:30 PM
-- Server version: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `created_at`, `updated_at`, `fullname`, `state`, `country`, `pincode`, `user_id`, `address1`, `address2`) VALUES
(1, '2019-09-21 03:48:34', '2019-09-21 03:48:34', 'tom jerry', 'maharashtra', 'india', '411033', 33, 'kalewadi phata', 'kalewadi phata'),
(2, '2019-09-21 04:03:50', '2019-09-21 04:03:50', 'shubham', 'maharashtra', 'india', '411033', 33, 'kalewadi phata', 'kalewadi phata'),
(3, '2019-09-21 04:22:47', '2019-09-21 04:22:47', 'eric suvana', 'sagar', 'india', '411033', 33, 'kalewadi phata', 'kalewadi phata'),
(4, '2019-09-21 04:22:58', '2019-09-21 04:22:58', 'eric suvana', 'maharashtra', 'india', '411033', 33, 'kalewadi phata', 'kalewadi phata'),
(5, '2019-09-21 04:23:12', '2019-09-21 04:23:12', 'eric suvana', 'sagar', 'india', '411033', 33, 'kalewadi phata', 'kalewadi phata'),
(6, '2019-09-21 04:23:23', '2019-09-21 04:23:23', 'tom jerry', 'maharashtra', 'india', '411033', 33, 'kalewadi phata', 'kalewadi phata'),
(7, '2019-09-21 04:23:34', '2019-09-21 04:23:34', 'dasd', 'asasd', 'asdas', '411033', 33, 'asdas', 'asds'),
(8, '2019-09-21 04:23:46', '2019-09-21 04:23:46', 'asdasd', 'asdasd', 'asdas', '342323', 33, 'asdas', 'asdas'),
(9, '2019-09-21 04:24:08', '2019-09-21 04:24:08', 'asdasdasdasa', 'sagar', 'india', '411033', 33, 'asdas', 'asds'),
(10, '2019-09-21 04:24:20', '2019-09-21 04:24:20', 'tom jerry', 'gujrat', 'india', '342323', 33, 'kalewadi phata', 'kalewadi phata'),
(12, '2019-09-21 04:48:42', '2019-09-21 04:48:42', 'eric suvana', 'sagar', 'asdas', '411033', 33, 'kalewadi phata', 'kalewadi phata');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `created_at`, `updated_at`, `name`, `image`, `description`) VALUES
(4, '2019-09-20 01:03:07', '2019-09-20 01:03:07', 'Shubham', '1568961192_blog_post_iamge_1.jpg', 'Shubham is Great'),
(6, '2019-09-20 08:10:55', '2019-09-20 08:10:55', 'mobile', '1568986855_mi6.jpeg', 'mi phone is best phone in the word');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `name`, `parent_id`, `deleted_at`) VALUES
(11, '2019-09-20 08:26:28', '2019-09-20 08:26:28', 'Mobile', 0, NULL),
(12, '2019-09-20 08:27:51', '2019-09-20 08:27:51', 'Electronic', 0, NULL),
(16, '2019-09-20 09:04:48', '2019-09-20 09:04:48', 'Samsung', 11, NULL),
(17, '2019-09-20 09:05:23', '2019-09-20 09:05:23', 'Nokia', 11, NULL),
(18, '2019-09-20 09:05:53', '2019-09-23 01:21:17', 'Hp', 12, NULL),
(19, '2019-09-20 09:07:03', '2019-09-23 01:21:11', 'LG', 12, NULL),
(20, '2019-09-20 09:07:22', '2019-09-20 09:12:13', 'Panasonic', 11, NULL),
(21, '2019-09-23 01:23:49', '2019-09-23 01:23:49', 'Laptop', 0, NULL),
(22, '2019-09-23 01:24:25', '2019-09-23 01:24:25', 'Lenovo', 21, NULL),
(23, '2019-09-23 06:32:21', '2019-09-23 06:32:21', 'Xiaome', 11, NULL),
(24, '2019-09-23 06:32:49', '2019-09-23 06:32:49', 'JBL', 12, NULL),
(25, '2019-09-23 06:33:13', '2019-09-23 06:44:51', 'OPPO', 11, NULL),
(26, '2019-09-23 06:33:25', '2019-09-23 06:33:25', 'HONOR', 11, NULL),
(27, '2019-09-23 06:36:14', '2019-09-23 06:36:14', 'APPLE', 11, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `created_at`, `updated_at`, `title`, `code`, `type`, `discount`) VALUES
(2, '2019-09-11 03:12:09', '2019-09-11 03:12:09', '20% Discount all product', 'COUPON20', 'percentage', 20);

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
(7, '2016_02_06_172606_create_users_table', 1),
(8, '2019_09_03_141858_create_password_resets_table', 1),
(9, '2019_09_04_061230_create_permission_tables', 1),
(10, '2019_09_04_133547_create_configurations_table', 1),
(11, '2019_09_06_065223_create_banners_table', 1),
(22, '2019_09_09_070335_create_categories_table', 2),
(24, '2019_09_09_091702_create_products_table', 3),
(28, '2019_09_09_114651_create_products_table', 7),
(32, '2019_09_10_093355_create_products_categories_table', 8),
(33, '2019_09_10_093359_create_products_images_table', 8),
(34, '2019_09_10_093406_create_products_attributes_table', 8),
(35, '2019_09_10_141057_create_coupons_table', 9),
(36, '2019_09_14_073137_add_google_id_column', 10),
(37, '2019_09_14_122150_add_google_id_column', 11),
(38, '2019_09_16_102135_create_addresses_table', 12),
(39, '2019_09_17_054043_add_github', 13),
(40, '2019_09_20_134736_add_deleted_at', 14),
(41, '2019_09_21_071633_add_address_column', 15),
(44, '2019_09_23_073940_unique_product_attributes', 16);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\User', 1),
(5, 'App\\User', 2),
(5, 'App\\User', 5),
(2, 'App\\User', 13),
(5, 'App\\User', 29),
(4, 'App\\User', 31),
(5, 'App\\User', 32),
(5, 'App\\User', 33),
(4, 'App\\User', 36),
(4, 'App\\User', 37),
(5, 'App\\User', 38),
(3, 'App\\User', 39);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shubham@gmail.com', '$2y$10$bKoTtATvMFEUft45dUvIaetj.anuEGixpPomLSiWU34jELjiD5wVa', '2019-09-16 01:55:07'),
('rahul@gmail.com', '$2y$10$r4ZyjvD5b8I6CQlGqDigoupE.nMwQwPEujik8Hi42I7M3PXNmvjKC', '2019-09-16 03:43:31'),
('rahulcplayer@gmail.com', '$2y$10$3UzXhqAuLmuGgUmesUZGDuSgPhQ8BTn1uafM6vRx78oP7BmfaPwdO', '2019-09-17 07:07:02'),
('eric@gmail.com', '$2y$10$u8Q0snD9bPQVSE/S5hW/ju2eWUh/dzutilQpODmpGXEtr3O.lEXIe', '2019-09-17 07:07:42');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(9, 'role-list', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(10, 'role-create', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(11, 'role-edit', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(12, 'role-delete', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(13, 'product-list', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(14, 'product-create', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(15, 'product-edit', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(16, 'product-delete', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(17, 'banner-list', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(18, 'banner-create', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(19, 'banner-edit', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(20, 'banner-delete', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(21, 'coupon-list', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(22, 'coupon-create', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(23, 'coupon-edit', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(24, 'coupon-delete', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(25, 'category-list', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(26, 'category-create', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(27, 'category-edit', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(28, 'category-delete', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(29, 'user-list', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(30, 'user-create', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(31, 'user-edit', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29'),
(32, 'user-delete', 'web', '2019-09-11 04:19:29', '2019-09-11 04:19:29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `name`, `rate`) VALUES
(34, '2019-09-23 06:42:50', '2019-09-23 06:42:50', 'MI 6 PRO', '23000'),
(35, '2019-09-23 06:43:39', '2019-09-23 06:43:39', 'OPPO X1', '15999'),
(36, '2019-09-23 06:44:22', '2019-09-23 06:44:22', 'OPPO F7', '15000'),
(37, '2019-09-23 06:45:52', '2019-09-23 06:45:52', 'Samsung Galaxy S5', '35000'),
(38, '2019-09-23 06:46:46', '2019-09-23 06:46:46', 'Samsung Galaxy S9', '56000'),
(39, '2019-09-23 06:47:34', '2019-09-23 06:47:34', 'Samsung Galaxy A6', '67000'),
(40, '2019-09-23 06:49:08', '2019-09-23 06:49:08', 'LG', '1000'),
(41, '2019-09-23 06:50:15', '2019-09-23 06:50:15', 'LG X', '68000'),
(42, '2019-09-23 06:51:01', '2019-09-23 06:51:01', 'HONOR S2', '34000'),
(43, '2019-09-23 06:51:54', '2019-09-23 06:51:54', 'APPLE XXS', '150000'),
(44, '2019-09-23 06:52:24', '2019-09-23 06:52:24', 'APPLE X2', '12');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `product_id`, `quantity`, `color`, `created_at`, `updated_at`) VALUES
(1, 34, 45, 'blue', '2019-09-23 06:42:50', '2019-09-23 06:42:50'),
(2, 35, 8, 'BLACK', '2019-09-23 06:43:39', '2019-09-23 06:43:39'),
(3, 36, 7, 'blue', '2019-09-23 06:44:22', '2019-09-23 06:44:22'),
(4, 37, 23, 'WHite', '2019-09-23 06:45:52', '2019-09-23 06:45:52'),
(5, 38, 8, 'BLUE', '2019-09-23 06:46:46', '2019-09-23 06:46:46'),
(6, 39, 7, 'black', '2019-09-23 06:47:34', '2019-09-23 06:47:34'),
(7, 40, 8, 'BLACK', '2019-09-23 06:49:08', '2019-09-23 06:49:08'),
(8, 41, 5, 'BLACK', '2019-09-23 06:50:15', '2019-09-23 06:50:15'),
(9, 42, 23, 'BLACK', '2019-09-23 06:51:02', '2019-09-23 06:51:02'),
(10, 43, 8, 'black', '2019-09-23 06:51:54', '2019-09-23 06:51:54'),
(11, 44, 23, 'black', '2019-09-23 06:52:24', '2019-09-23 06:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `category_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 23, 34, '2019-09-23 06:42:50', '2019-09-23 06:42:50'),
(2, 25, 35, '2019-09-23 06:43:39', '2019-09-23 06:43:39'),
(3, 23, 36, '2019-09-23 06:44:22', '2019-09-23 06:44:22'),
(4, 16, 37, '2019-09-23 06:45:53', '2019-09-23 06:45:53'),
(5, 16, 38, '2019-09-23 06:46:46', '2019-09-23 06:46:46'),
(6, 16, 39, '2019-09-23 06:47:34', '2019-09-23 06:47:34'),
(7, 19, 40, '2019-09-23 06:49:08', '2019-09-23 06:49:08'),
(8, 19, 41, '2019-09-23 06:50:15', '2019-09-23 06:50:15'),
(9, 26, 42, '2019-09-23 06:51:02', '2019-09-23 06:51:02'),
(10, 27, 43, '2019-09-23 06:51:54', '2019-09-23 06:51:54'),
(11, 27, 44, '2019-09-23 06:52:24', '2019-09-23 06:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Product Image/1569240770_mi.jpeg', 34, '2019-09-23 06:42:50', '2019-09-23 06:42:50'),
(2, 'Product Image/1569240770_mi6.jpeg', 34, '2019-09-23 06:42:50', '2019-09-23 06:42:50'),
(3, 'Product Image/1569240819_appo.jpeg', 35, '2019-09-23 06:43:39', '2019-09-23 06:43:39'),
(4, 'Product Image/1569240862_appo1.jpeg', 36, '2019-09-23 06:44:22', '2019-09-23 06:44:22'),
(5, 'Product Image/1569240952_s4.jpeg', 37, '2019-09-23 06:45:52', '2019-09-23 06:45:52'),
(6, 'Product Image/1569241006_s5.jpeg', 38, '2019-09-23 06:46:46', '2019-09-23 06:46:46'),
(7, 'Product Image/1569241054_s2.jpeg', 39, '2019-09-23 06:47:34', '2019-09-23 06:47:34'),
(8, 'Product Image/1569241148_lg5.jpeg', 40, '2019-09-23 06:49:08', '2019-09-23 06:49:08'),
(9, 'Product Image/1569241215_lg3.jpeg', 41, '2019-09-23 06:50:15', '2019-09-23 06:50:15'),
(10, 'Product Image/1569241261_honor4.jpeg', 42, '2019-09-23 06:51:01', '2019-09-23 06:51:01'),
(11, 'Product Image/1569241314_APPLE.jpeg', 43, '2019-09-23 06:51:54', '2019-09-23 06:51:54'),
(12, 'Product Image/1569241344_apple3.jpeg', 44, '2019-09-23 06:52:24', '2019-09-23 06:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'web', '2019-09-07 00:56:27', '2019-09-07 00:56:27'),
(2, 'admin', 'web', '2019-09-07 00:56:27', '2019-09-07 00:56:27'),
(3, 'inventory manager', 'web', '2019-09-07 00:56:27', '2019-09-07 00:56:27'),
(4, 'order manager', 'web', '2019-09-07 00:56:27', '2019-09-07 00:56:27'),
(5, 'customer', 'web', '2019-09-07 00:56:27', '2019-09-07 00:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(13, 3),
(14, 3),
(15, 3),
(25, 3),
(26, 3),
(27, 3),
(23, 4),
(24, 4),
(25, 4),
(26, 4),
(9, 5),
(10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`, `google_id`, `github_id`) VALUES
(1, 'rahul', 'sonawane', 'rahul@gmail.com', '$2y$10$/oqN/dg216lpe0tmlMqMoOzUBv.kFEi3jHYYx8zPujFzctXRthQ6u', '1', 'ehhJv8XxhxKQuClMvzb2nKgp5eE3CMT7HExSAf4z4HpQmPlurf8bHSAdDGdy', '2019-09-07 00:39:54', '2019-09-16 03:32:32', NULL, NULL),
(2, 'shubham', 'ingole', 'shubham@gmail.com', '12345678', 'InActive', NULL, '2019-09-07 01:10:37', '2019-09-07 01:10:37', NULL, NULL),
(5, 'sagar', 'padalaghare', 'sagar@gmail.com', '$2y$10$qD1SHSImmmOo2w5qlPniUOib98Jx.M0yD7nUSlW9CvK0nJ2.77geO', 'Active', NULL, '2019-09-07 03:36:44', '2019-09-07 04:02:57', NULL, NULL),
(29, 'best player in pubg', '', 'rahulcplayer@gmail.com', '', '1', 'yrwoCyDddJ7D0pu6KR2g1Hu0oopTEAaVQkp6AKtVwYO3XFqhd0FWl6mdEbWj', '2019-09-17 04:30:36', '2019-09-17 04:30:36', '101089321346172137641', NULL),
(31, 'ericke', 'suvane', 'suvane@gmail.com', '$2y$10$k9fIS.BMfsjp61ytj45wq.7Lt7z5BqmUZNnSzIutILpItWaMnwbnW', 'Active', 'pl0qYrXLt6FA9ioqy7aUtZnzu2OwAuvCGnzXgkJf3BYzwaLXVCzJ0qpGwozC', '2019-09-18 03:11:10', '2019-09-18 03:11:10', NULL, NULL),
(32, 'sundar', 'pichai', 'sundar@gmail.com', '$2y$10$HesExHtc8NqlcBZmCQvQ5ORUx02TdeH.zLLw.FutTfB/6mluzhNy2', 'Active', 'ynd91fAp5yc3lo9vCVCl1t4MMXPBskZJOUt1LSb14Y6lZdaPGiyQknfhgtlI', '2019-09-18 03:33:06', '2019-09-18 03:33:06', NULL, NULL),
(33, 'tom', 'jerry', 'tom@gmail.com', '$2y$10$StDFzrRpUXoTrH3U6aBEQepWLRCfuy5Ok/BVQJx7CrPgbRlG/8Pki', 'Active', 'oxrrMl0D0NRXDbHzAqwzIiYEq9MvT9xDaOh9XALnSnektVfa1AwDhBY1m9J6', '2019-09-18 05:43:53', '2019-09-21 01:38:08', NULL, NULL),
(36, 'akash', 'aksss', 'akashs@gmail.com', '$2y$10$6JOWXbAnXFRLRJ3.JFd/luyRm8QTAqJ283wnTrnFBbGlJoQbLkfou', 'Active', NULL, '2019-09-19 05:31:33', '2019-09-19 05:43:08', NULL, NULL),
(37, 'Steave', 'sonawane', 'steave123@gmail.com', '$2y$10$yeV0k4YXRHgzFIsUCqznFe232Ev9Fdh3WZZ1FALmhlb/l31Q5cBt2', 'Active', NULL, '2019-09-20 06:43:47', '2019-09-20 06:43:47', NULL, NULL),
(38, 'virat', 'kohali', 'virat@gmail.com', '$2y$10$hwE5e8eVZVnA56N58J1mCu26RfOTobh32ZZdVCUT6/hy.SO3TNQdS', 'Active', NULL, '2019-09-20 06:45:30', '2019-09-20 06:45:30', NULL, NULL),
(39, 'rohit', 'sharma', 'rohit@gmail.com', '$2y$10$YBcOEIaT.GoPRK4ZAQ9npOB1yP4EPNmP5MP0D4XzOXduMsmUcdQNa', 'Active', NULL, '2019-09-20 06:46:21', '2019-09-20 06:46:21', NULL, NULL),
(40, 'rahulsweb', '', 'rahulsonawanen@gmail.com', '', '1', 'XvhGuxuoR7sYAYysjMwRymAn3U8B3j3tEt1pO5eDAzt4voG5qrK6L5IR4z9S', '2019-09-21 00:18:06', '2019-09-21 00:18:06', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_attributes_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_category_id_foreign` (`category_id`),
  ADD KEY `product_categories_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD CONSTRAINT `product_attributes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `product_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
