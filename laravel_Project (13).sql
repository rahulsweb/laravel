-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 13, 2019 at 05:13 PM
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
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `fullname`, `address1`, `address2`, `state`, `country`, `pincode`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(9, 'Amruta', 'kalewadi phata ,gajanan nagar ,rahatani,pune', 'Unit No. 6 & 7, Laxmi Plaza, Laxmi industrial Estate, New Link Road , Andheri West, Mumbai, Maharashtra 400053', 'sagar', 'india', '411033', 49, NULL, '2019-10-11 08:58:07', '2019-10-11 08:58:07'),
(10, 'Aniket Suryawanshi', 'Unit No. 6 & 7, Laxmi Plaza, Laxmi industrial Estate, New Link Road , Andheri West, Mumbai, Maharashtra 400053', 'dange hinjawadi', 'gujrat', 'india', '342323', 49, NULL, '2019-10-11 08:58:19', '2019-10-11 08:58:19');

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
(10, '2019-09-26 03:36:29', '2019-09-26 03:36:29', 'LG Electronics', '1569488789_lg7.jpeg', 'When you need high performance, speed and reliability, count on LG DVD burners and drives.'),
(11, '2019-09-26 03:36:55', '2019-09-26 03:36:55', 'Honor Mobile', '1569488859_honor2.jpeg', 'Discover the ultimate in data storage products with LG DVD burners and drives. Experience the reliability and performance you need with the security and peace of mind you expect from LG.'),
(12, '2019-09-26 03:37:24', '2019-09-26 03:37:24', 'LG TV and Monitor', '1569488844_lg3.jpeg', 'Lg home thetor and tv 32 inch with 6 GB Ram Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(28, '2019-10-11 07:19:33', '2019-10-11 07:19:33', 'Mobile', 0, NULL),
(29, '2019-10-11 07:19:50', '2019-10-11 07:19:50', 'Laptop', 0, NULL),
(30, '2019-10-11 07:19:59', '2019-10-11 07:19:59', 'Computer', 0, NULL),
(31, '2019-10-11 07:20:10', '2019-10-11 07:20:10', 'Electronic', 0, NULL),
(32, '2019-10-11 07:20:53', '2019-10-11 07:20:53', 'LG', 31, NULL),
(33, '2019-10-11 07:21:27', '2019-10-11 07:21:27', 'Hp', 30, NULL),
(34, '2019-10-11 07:21:48', '2019-10-11 07:21:48', 'Lenovo', 29, NULL),
(35, '2019-10-11 07:22:02', '2019-10-11 07:22:02', 'APPLE', 28, NULL),
(36, '2019-10-11 07:22:19', '2019-10-11 07:22:19', 'APPO', 28, NULL),
(37, '2019-10-11 07:23:03', '2019-10-11 07:23:03', 'APPLE X2', 28, NULL),
(38, '2019-10-11 07:23:25', '2019-10-11 07:23:25', 'APPO XMC', 28, NULL),
(39, '2019-10-11 07:23:41', '2019-10-11 07:23:41', 'HP 5', 29, NULL),
(40, '2019-10-11 07:24:10', '2019-10-11 07:24:10', 'LG WashingMachine', 31, NULL),
(41, '2019-10-11 07:28:54', '2019-10-11 07:28:54', 'HONOR', 28, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `category_id`, `product_id`, `created_at`, `updated_at`) VALUES
(28, 35, 52, '2019-10-11 07:25:10', '2019-10-11 07:25:10'),
(29, 40, 53, '2019-10-11 07:26:14', '2019-10-11 07:26:14'),
(30, 36, 54, '2019-10-11 07:27:04', '2019-10-11 07:27:04'),
(31, 33, 55, '2019-10-11 07:28:06', '2019-10-11 07:28:06'),
(32, 41, 56, '2019-10-11 07:29:32', '2019-10-11 07:29:32');

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
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_uses`
--

CREATE TABLE `contact_uses` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci
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
-- Table structure for table `log_order`
--

CREATE TABLE `log_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(44, '2019_09_23_073940_unique_product_attributes', 16),
(45, '2019_09_26_111748_create_orders_table', 17),
(46, '2019_09_26_113011_create_orders_produts_table', 18),
(47, '2019_09_29_104721_carts_table', 19),
(48, '2019_09_29_121643_rename_table', 20),
(49, '2019_09_29_130214_create_addresses_table', 21),
(50, '2019_09_29_132637_rename_product_category', 22),
(53, '2019_10_01_065829_add_delete_cascade', 23),
(54, '2019_10_01_065943_add_delete_cascade_image', 24),
(55, '2019_10_03_124754_create_orders_table', 25),
(56, '2019_10_03_125553_create_order_payment_details_table', 26),
(57, '2019_10_03_131219_create_order_cart_details_table', 27),
(58, '2019_10_04_065332_change_data_type_orders', 28),
(59, '2019_10_04_072621_add_column_total', 29),
(60, '2019_10_04_104117_user_wish_lists_table', 30),
(61, '2019_10_06_091133_add_profile_image', 31),
(62, '2019_10_06_105030_model_has_roles', 32),
(63, '2019_10_09_120419_change_foreignkey', 33),
(64, '2019_10_10_054520_add_image_field', 34),
(65, '2019_10_10_153640_create_table_contact_us', 35),
(66, '2019_10_11_052438_create_log_table', 36),
(67, '2019_10_11_073044_create_contact_uses_table', 37),
(68, '2019_10_11_123548_add_address_field', 38),
(69, '2019_10_11_123604_add_demo', 38);

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
(5, 'App\\User', 38),
(5, 'App\\User', 47),
(2, 'App\\User', 48),
(5, 'App\\User', 49),
(5, 'App\\User', 50);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `billing_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shipping_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_cart_details`
--

CREATE TABLE `order_cart_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_payment_details`
--

CREATE TABLE `order_payment_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(52, '2019-10-11 07:25:10', '2019-10-11 07:25:10', 'APPLE X2', '15500'),
(53, '2019-10-11 07:26:14', '2019-10-11 07:26:14', 'LG WashingMachine X2', '5555'),
(54, '2019-10-11 07:27:04', '2019-10-11 07:27:04', 'APPO X2', '67000'),
(55, '2019-10-11 07:28:06', '2019-10-11 07:28:06', 'Hp Laptop 3x', '78888'),
(56, '2019-10-11 07:29:31', '2019-10-11 07:29:31', 'HONOR S2', '15000');

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
(19, 52, 8, 'black', '2019-10-11 07:25:10', '2019-10-11 07:25:10'),
(20, 53, 2, 'blue', '2019-10-11 07:26:14', '2019-10-11 07:26:14'),
(21, 54, 9, 'black', '2019-10-11 07:27:04', '2019-10-11 07:27:04'),
(22, 55, 7, 'Green', '2019-10-11 07:28:06', '2019-10-11 07:28:06'),
(23, 56, 5, 'blue', '2019-10-11 07:29:32', '2019-10-11 07:29:32');

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
(46, 'Product Image/1570798510_Apple2.jpeg', 52, '2019-10-11 07:25:10', '2019-10-11 07:25:10'),
(47, 'Product Image/1570798510_apple4.jpeg', 52, '2019-10-11 07:25:10', '2019-10-11 07:25:10'),
(48, 'Product Image/1570798510_apple3.jpeg', 52, '2019-10-11 07:25:10', '2019-10-11 07:25:10'),
(49, 'Product Image/1570798510_apple2.jpeg', 52, '2019-10-11 07:25:10', '2019-10-11 07:25:10'),
(50, 'Product Image/1570798574_lg7.jpeg', 53, '2019-10-11 07:26:14', '2019-10-11 07:26:14'),
(51, 'Product Image/1570798624_appo4.jpeg', 54, '2019-10-11 07:27:04', '2019-10-11 07:27:04'),
(52, 'Product Image/1570798624_appo2.jpeg', 54, '2019-10-11 07:27:04', '2019-10-11 07:27:04'),
(53, 'Product Image/1570798624_appo1.jpeg', 54, '2019-10-11 07:27:04', '2019-10-11 07:27:04'),
(54, 'Product Image/1570798624_appo.jpeg', 54, '2019-10-11 07:27:04', '2019-10-11 07:27:04'),
(55, 'Product Image/1570798686_hp3.jpeg', 55, '2019-10-11 07:28:06', '2019-10-11 07:28:06'),
(56, 'Product Image/1570798686_hp2.jpeg', 55, '2019-10-11 07:28:06', '2019-10-11 07:28:06'),
(57, 'Product Image/1570798686_hp1.jpeg', 55, '2019-10-11 07:28:06', '2019-10-11 07:28:06'),
(58, 'Product Image/1570798771_honor4.jpeg', 56, '2019-10-11 07:29:31', '2019-10-11 07:29:31'),
(59, 'Product Image/1570798771_honor2.jpeg', 56, '2019-10-11 07:29:31', '2019-10-11 07:29:31'),
(60, 'Product Image/1570798772_honor1.jpeg', 56, '2019-10-11 07:29:32', '2019-10-11 07:29:32'),
(61, 'Product Image/1570798772_honor.jpeg', 56, '2019-10-11 07:29:32', '2019-10-11 07:29:32');

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
(31, 1),
(32, 1),
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
(9, 4),
(10, 4),
(11, 4),
(12, 4),
(23, 4),
(24, 4),
(25, 4),
(26, 4),
(27, 4),
(28, 4),
(29, 4),
(30, 4),
(9, 5),
(10, 5),
(11, 5),
(12, 5);

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
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `status`, `profile`, `remember_token`, `created_at`, `updated_at`, `google_id`, `github_id`) VALUES
(1, 'rahul', 'sonawane', 'rahul@gmail.com', '$2y$10$/oqN/dg216lpe0tmlMqMoOzUBv.kFEi3jHYYx8zPujFzctXRthQ6u', '1', 'User/1570360285_h.jpeg', 'VIstST7IiuxNeb1HJaJd4ew3K6P25JVsZrZ1IJTKd1DS0m81wxaBQrxquToT', '2019-09-07 00:39:54', '2019-10-06 05:41:25', NULL, NULL),
(2, 'shubham', 'ingole', 'shubham@gmail.com', '12345678', 'InActive', NULL, NULL, '2019-09-07 01:10:37', '2019-09-07 01:10:37', NULL, NULL),
(5, 'sagar', 'padalaghare', 'sagar@gmail.com', '$2y$10$qD1SHSImmmOo2w5qlPniUOib98Jx.M0yD7nUSlW9CvK0nJ2.77geO', 'Active', NULL, NULL, '2019-09-07 03:36:44', '2019-09-07 04:02:57', NULL, NULL),
(31, 'ericke', 'suvane', 'suvane@gmail.com', '$2y$10$k9fIS.BMfsjp61ytj45wq.7Lt7z5BqmUZNnSzIutILpItWaMnwbnW', 'Active', NULL, 'sgJFFro3asUhI7jk5RdEwOPu7QBga23Hkv8qw6W8OpjAI7lH8957dSv1gcwe', '2019-09-18 03:11:10', '2019-09-18 03:11:10', NULL, NULL),
(32, 'sundar', 'pichai', 'sundar@gmail.com', '$2y$10$HesExHtc8NqlcBZmCQvQ5ORUx02TdeH.zLLw.FutTfB/6mluzhNy2', 'Active', NULL, 'ynd91fAp5yc3lo9vCVCl1t4MMXPBskZJOUt1LSb14Y6lZdaPGiyQknfhgtlI', '2019-09-18 03:33:06', '2019-09-18 03:33:06', NULL, NULL),
(36, 'akash', 'aksss', 'akashs@gmail.com', '$2y$10$6JOWXbAnXFRLRJ3.JFd/luyRm8QTAqJ283wnTrnFBbGlJoQbLkfou', 'Active', NULL, NULL, '2019-09-19 05:31:33', '2019-09-19 05:43:08', NULL, NULL),
(37, 'Steave', 'sonawane', 'steave123@gmail.com', '$2y$10$yeV0k4YXRHgzFIsUCqznFe232Ev9Fdh3WZZ1FALmhlb/l31Q5cBt2', 'Active', NULL, NULL, '2019-09-20 06:43:47', '2019-09-20 06:43:47', NULL, NULL),
(38, 'virat', 'kohali', 'virat@gmail.com', '$2y$10$hwE5e8eVZVnA56N58J1mCu26RfOTobh32ZZdVCUT6/hy.SO3TNQdS', 'Active', NULL, NULL, '2019-09-20 06:45:30', '2019-09-20 06:45:30', NULL, NULL),
(47, 'Aniket', 'Surya', 'any@gmail.com', '$2y$10$ro1EX7liN/HCwFpo005ha.kK1NEKolvyMY.wQBMZQqz/Y/ijgA2Jq', '1', NULL, 'CbtLVqCkFKIVvD5CcDdeZrtIIX6Fbk9kAlsjKTu8GPbFz20xNjSw9ByukdlA', '2019-09-27 00:21:25', '2019-09-27 00:21:25', NULL, NULL),
(48, 'Vitesh', 'Jadhav', 'vitashj@gmail.com', '$2y$10$EWWAFUvAZ7N8eqmhjYNd5emnCJK70VwMcriY0gIoxwHtXc/yWRlMK', '1', 'User/1570359183_a.jpeg', '28brCRmWqukg9McY5dvEmC4FhNYd2WIaJgFAD354XEVtiNBv7DEI1gbO4F2X', '2019-10-06 05:15:34', '2019-10-06 05:23:03', NULL, NULL),
(49, 'kajal', 'waykule', 'kajal@gmail.com', '$2y$10$YJc9vXwp077lVvK1uR6P3.MYoqAVtBue3JFO8uHQnsfcgO6idGpb2', '1', 'User/1570448037_x.jpeg', 'EKqbNhAQatzWIjrD9vJgFpOyt2mNX6s3ndtSbXaKlawa2B1WI67JiHuqtbLT', '2019-10-07 06:03:25', '2019-10-10 09:56:06', NULL, NULL),
(50, 'vinay', 'jadhav', 'vinay@gmail.com', '$2y$10$wjV9trLIZyzJDau462.nYuViOf/srQoYo1solNBs1SZhBdPuS1glu', '1', 'User/1570601567_w.jpeg', 'jW2xct9xxIJKXW37PDjQg8jaD8Gwn4KR3TvX9LJlgLcZAl8TgINh7aQRXGOg', '2019-10-09 00:38:35', '2019-10-09 00:42:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_wish_lists`
--

CREATE TABLE `user_wish_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_category_id_foreign` (`category_id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_uses`
--
ALTER TABLE `contact_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `log_order`
--
ALTER TABLE `log_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_order_order_id_foreign` (`order_id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_code_unique` (`order_code`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_billing_id_foreign` (`billing_id`),
  ADD KEY `orders_shipping_id_foreign` (`shipping_id`);

--
-- Indexes for table `order_cart_details`
--
ALTER TABLE `order_cart_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_cart_details_product_id_foreign` (`product_id`),
  ADD KEY `order_cart_details_order_id_foreign` (`order_id`);

--
-- Indexes for table `order_payment_details`
--
ALTER TABLE `order_payment_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_payment_details_payment_id_unique` (`payment_id`),
  ADD KEY `order_payment_details_order_id_foreign` (`order_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_profile_unique` (`profile`);

--
-- Indexes for table `user_wish_lists`
--
ALTER TABLE `user_wish_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_wish_lists_user_id_foreign` (`user_id`),
  ADD KEY `user_wish_lists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact_uses`
--
ALTER TABLE `contact_uses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `log_order`
--
ALTER TABLE `log_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_cart_details`
--
ALTER TABLE `order_cart_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_payment_details`
--
ALTER TABLE `order_payment_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `user_wish_lists`
--
ALTER TABLE `user_wish_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `log_order`
--
ALTER TABLE `log_order`
  ADD CONSTRAINT `log_order_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_billing_id_foreign` FOREIGN KEY (`billing_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_shipping_id_foreign` FOREIGN KEY (`shipping_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_cart_details`
--
ALTER TABLE `order_cart_details`
  ADD CONSTRAINT `order_cart_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_cart_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_payment_details`
--
ALTER TABLE `order_payment_details`
  ADD CONSTRAINT `order_payment_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD CONSTRAINT `product_attributes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_wish_lists`
--
ALTER TABLE `user_wish_lists`
  ADD CONSTRAINT `user_wish_lists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_wish_lists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
