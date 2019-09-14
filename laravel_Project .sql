-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 14, 2019 at 07:12 PM
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
(1, '2019-09-07 04:05:36', '2019-09-07 04:05:36', 'Shubham', '1567848936.c1.jpeg', 'Shubham is Great');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `name`, `parent_id`) VALUES
(1, '2019-09-09 01:52:29', '2019-09-09 01:52:29', 'Nilesh', 0),
(2, '2019-09-09 01:52:36', '2019-09-09 01:52:36', 'mobile', 1),
(3, '2019-09-09 03:02:26', '2019-09-09 03:35:06', 'electronic', 1),
(4, '2019-09-09 03:02:54', '2019-09-09 03:02:54', 'hp', 3);

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
(1, '2019-09-11 03:06:11', '2019-09-11 03:06:11', 'Rahul', 'arrrrara', 'percentage', 444),
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
(37, '2019_09_14_122150_add_google_id_column', 11);

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
(1, 'App\\User', 3),
(2, 'App\\User', 3),
(4, 'App\\User', 3),
(1, 'App\\User', 4),
(4, 'App\\User', 4),
(5, 'App\\User', 5),
(2, 'App\\User', 13);

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
('eric@gmail.com', '$2y$10$R.OymO23R40/4fb3xe4tmOuPpIEaXT8R8WV8BGaL2tYw4853Gm0Qq', '2019-09-14 07:51:32');

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
(1, '2019-09-10 04:12:40', '2019-09-10 04:12:40', 'Shubham', '23');

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
(1, 1, 7, 'WHite', '2019-09-10 04:12:40', '2019-09-10 04:12:40');

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
(1, 2, 1, '2019-09-10 04:12:40', '2019-09-10 04:12:40');

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
(1, 'Product Image/1568108560_blog_share_stumble.jpg', 1, '2019-09-10 04:12:40', '2019-09-10 04:12:40'),
(2, 'Product Image/1568108560_blog_share_twitter.jpg', 1, '2019-09-10 04:12:40', '2019-09-10 04:12:40'),
(3, 'Product Image/1568108560_bx_loader.gif', 1, '2019-09-10 04:12:40', '2019-09-10 04:12:40');

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
(5, 'customer', 'web', '2019-09-07 00:56:27', '2019-09-07 00:56:27'),
(6, 'Shubham', 'web', '2019-09-11 08:01:46', '2019-09-11 08:01:46');

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
(32, 2);

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
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`, `google_id`) VALUES
(1, 'rahul', 'sonawane', 'rahul@gmail.com', '$2y$10$G/zhepYNf5wg71aoMSIkBO0/hv3R9gHA7uquhyd1xp1BEFn6CC84O', '1', 'k0y4I43zGAS7U9L1Jkvo67U2tyJ62h38I2MYtPGFsDJP3UwQ9tAzOaiG0O6f', '2019-09-07 00:39:54', '2019-09-07 00:39:54', NULL),
(2, 'shubham', 'ingole', 'shubham@gmail.com', '12345678', 'InActive', NULL, '2019-09-07 01:10:37', '2019-09-07 01:10:37', NULL),
(3, 'eric', 'suvana', 'eric@gmail.com', '$2y$10$YsDyAhFyFnJ7ksxVAIv9ye6IffsQj7oD6m404O9zbeXLynbLR.AJK', 'Active', 'whvIxpppd92wzO0OKJr6JDOKNRFVldISFJpAP5oAqXwBhJ7FN1qneIzpyzTP', '2019-09-07 01:11:01', '2019-09-07 04:03:43', NULL),
(4, 'Steave', 'Jobs', 'steave@gmail.com', '$2y$10$yCOMyBuRhaPoNttM/O8Zz.CYq7r2/czEw5PfYvd8bHX04GW2FPLzW', 'Active', NULL, '2019-09-07 03:17:01', '2019-09-07 04:03:11', NULL),
(5, 'sagar', 'padalaghare', 'sagar@gmail.com', '$2y$10$qD1SHSImmmOo2w5qlPniUOib98Jx.M0yD7nUSlW9CvK0nJ2.77geO', 'Active', NULL, '2019-09-07 03:36:44', '2019-09-07 04:02:57', NULL),
(7, 'shubham', 'ingole', 'shubhamingole@gmail.com', '$2y$10$EghBShsjkPrgLXAwIhg2/ufW8hcv.RiNdOLIB.uNWQ5yigz6p13Za', '1', NULL, '2019-09-13 03:15:08', '2019-09-13 03:15:08', NULL),
(9, 'shubham', 'sonawane', 'eric232@gmail.com', '$2y$10$JcL49xe4b6EuDWvz7tB1YO1PWx.dWEGTjlmq2UQgcoKQ1.33MCeUy', '1', NULL, '2019-09-13 04:21:14', '2019-09-13 04:21:14', NULL),
(10, 'shubham', 'sonawane', 'sagar312312@gmail.com', '$2y$10$6.ipkaxx49Qk68CI.DD.SuJq6uU4TLsnCiabzT3swxagpLXKVqcS6', '1', NULL, '2019-09-13 04:22:42', '2019-09-13 04:22:42', NULL),
(11, 'akash', 'sonni', 'akash@gmail.com', '$2y$10$e.h8Pai70mr0xjq5JrQyKeK0pwNG4X1uj/K/GXuMAgmWWQ6V/AyHK', '1', NULL, '2019-09-13 05:47:35', '2019-09-13 05:47:35', NULL),
(12, 'Steave', 'sonawane', 'sagar33432@gmail.com', '$2y$10$kXc23ysipcRW6klkfTpTY.ekBEiVfSspKljgQASmP/MAcKl3LGvIi', '1', NULL, '2019-09-13 05:58:52', '2019-09-13 05:58:52', NULL),
(13, 'best player in pubg', '', 'rahulcplayer@gmail.com', '', '1', '6pzvFGLBlpOwoleZYUOWmjsspyztvsQVxZ8NOtBUvmGWd12BjM6EwxttFEuo', '2019-09-14 07:18:26', '2019-09-14 07:18:26', '101089321346172137641');

--
-- Indexes for dumped tables
--

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
  ADD UNIQUE KEY `product_attributes_color_unique` (`color`),
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

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
