-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2019 at 09:46 PM
-- Server version: 5.7.27-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.7

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
(10, 'Aniket Suryawanshi', 'Unit No. 6 & 7, Laxmi Plaza, Laxmi industrial Estate, New Link Road , Andheri West, Mumbai, Maharashtra 400053', 'dange hinjawadi', 'gujrat', 'india', '342323', 49, NULL, '2019-10-11 08:58:19', '2019-10-11 08:58:19'),
(11, 'Nilesh jawale', 'Hinjawadi - Wakad Rd, Hinjawadi Village, Wakad, Pimpri-Chinchwad,', 'Unit No. 6 & 7, Laxmi Plaza, Laxmi industrial Estate, New Link Road , Andheri West, Mumbai, Maharashtra 400053', 'Maharashtra', 'india', '411057', 90, NULL, '2019-10-22 07:18:50', '2019-10-22 07:18:50'),
(12, 'eric suvana', 'Survey No. 124, Paud Road, MIT College Campus Ex, Shivtirthanagar, Kothrud, Pune,', 'kalewadi phata', 'Maharashtra', 'india', '411038', 90, NULL, '2019-10-22 07:19:56', '2019-10-22 07:19:56'),
(13, 'tom jerry', 'kalewadi phata ,gajanan nagar ,rahatani,pune', 'dange hinjawadi', 'maharashtra', 'india', '411038', 91, NULL, '2019-10-22 09:53:55', '2019-10-22 09:53:55'),
(38, 'Nilesh jawale', 'kalewadi phata ,gajanan nagar ,rahatani,pune', NULL, 'maharashtra', 'Pakistan', '411033', 49, NULL, '2019-10-30 05:08:37', '2019-10-30 05:08:37'),
(39, 'Aniket Suryawanshi', 'Unit No. 6 & 7, Laxmi Plaza, Laxmi industrial Estate, New Link Road , Andheri West, Mumbai, Maharashtra 400053', NULL, 'maharashtra', 'United States', '342323', 49, NULL, '2019-10-30 05:08:37', '2019-10-30 05:08:37'),
(40, 'Aniket Suryawanshi', 'Unit No. 6 & 7, Laxmi Plaza, Laxmi industrial Estate, New Link Road , Andheri West, Mumbai, Maharashtra 400053', NULL, 'maharashtra', 'United States', '342323', 49, NULL, '2019-10-30 05:11:04', '2019-10-30 05:11:04'),
(41, 'Nilesh jawale', 'kalewadi phata ,gajanan nagar ,rahatani,pune', NULL, 'maharashtra', 'Pakistan', '411033', 49, NULL, '2019-10-30 05:43:39', '2019-10-30 05:43:39'),
(42, 'Aniket Suryawanshi', 'Unit No. 6 & 7, Laxmi Plaza, Laxmi industrial Estate, New Link Road , Andheri West, Mumbai, Maharashtra 400053', NULL, 'maharashtra', 'india', '342323', 49, NULL, '2019-10-30 05:43:39', '2019-10-30 05:43:39'),
(43, 'Aniket Suryawanshi', 'Unit No. 6 & 7, Laxmi Plaza, Laxmi industrial Estate, New Link Road , Andheri West, Mumbai, Maharashtra 400053', NULL, 'maharashtra', 'United States', '342323', 49, NULL, '2019-10-30 06:04:13', '2019-10-30 06:04:13'),
(44, 'Nilesh jawale', 'kalewadi phata ,gajanan nagar ,rahatani,pune', NULL, 'maharashtra', 'Pakistan', '411033', 49, NULL, '2019-10-30 06:05:15', '2019-10-30 06:05:15'),
(45, 'shubham ingole', 'amaravati jspm collage', NULL, 'maharashtra', 'Dubai', '411033', 90, NULL, '2019-10-31 05:55:53', '2019-10-31 05:55:53'),
(46, 'mangesh bodake', 'kalewadi phata ,gajanan nagar ,rahatani,pune', NULL, 'maharashtra', 'UK', '455333', 90, NULL, '2019-10-31 05:55:53', '2019-10-31 05:55:53'),
(47, 'Aniket Suryawanshi', 'Unit No. 6 & 7, Laxmi Plaza, Laxmi industrial Estate, New Link Road , Andheri West, Mumbai, Maharashtra 400053', NULL, 'maharashtra', 'Pakistan', '342323', 49, NULL, '2019-10-31 06:01:52', '2019-10-31 06:01:52'),
(48, 'eric suvana', 'Opposite Hard Rock Cafe, Next to Shree Simandhar Swami Jain Temple, Worli, Mumbai, Maharashtra', NULL, 'maharashtra', 'Pakistan', '400013', 113, NULL, '2019-10-31 06:40:12', '2019-10-31 06:40:12'),
(49, 'bhushan sir', 'Neosoft Technology', NULL, 'maharashtra', 'United States', '342323', 113, NULL, '2019-10-31 06:40:12', '2019-10-31 06:40:12'),
(50, 'Aniket Suryawanshi', 'Unit No. 6 & 7, Laxmi Plaza, Laxmi industrial Estate, New Link Road , Andheri West, Mumbai, Maharashtra 400053', NULL, 'maharashtra', 'Canada', '411057', 91, NULL, '2019-10-31 06:54:21', '2019-10-31 06:54:21'),
(51, 'mangesh bodake', 'kalewadi phata ,gajanan nagar ,rahatani,pune', NULL, 'maharashtra', 'Pakistan', '455333', 90, NULL, '2019-10-31 07:08:07', '2019-10-31 07:08:07'),
(52, 'eric suvana', 'Survey No. 124, Paud Road, MIT College Campus Ex, Shivtirthanagar, Kothrud, Pune,', NULL, 'maharashtra', 'india', '411038', 90, NULL, '2019-10-31 07:08:07', '2019-10-31 07:08:07'),
(53, 'akash soni', 'pimple saudagar rahatani', NULL, 'maharashtra', 'Ucrane', '411033', 114, NULL, '2019-10-31 07:21:23', '2019-10-31 07:21:23'),
(54, 'kiran soni', 'hadpasar', NULL, 'maharashtra', 'india', '411033', 114, NULL, '2019-10-31 07:21:23', '2019-10-31 07:21:23'),
(55, 'akash soni', 'pimple saudagar rahatani', NULL, 'maharashtra', 'Ucrane', '411033', 114, NULL, '2019-10-31 07:28:42', '2019-10-31 07:28:42'),
(56, 'kiran soni', 'hadpasar', NULL, 'maharashtra', 'india', '411033', 114, NULL, '2019-10-31 07:28:42', '2019-10-31 07:28:42'),
(57, 'Aniket Suryawanshi', 'Unit No. 6 & 7, Laxmi Plaza, Laxmi industrial Estate, New Link Road , Andheri West, Mumbai, Maharashtra 400053', NULL, 'maharashtra', 'Dubai', '342323', 49, NULL, '2019-11-01 00:23:58', '2019-11-01 00:23:58'),
(58, 'Nilesh jawale', 'kalewadi phata ,gajanan nagar ,rahatani,pune', NULL, 'maharashtra', 'Pakistan', '411033', 49, NULL, '2019-11-01 00:23:58', '2019-11-01 00:23:58'),
(59, 'Nilesh jawale', 'kalewadi phata ,gajanan nagar ,rahatani,pune', NULL, 'maharashtra', 'Pakistan', '411033', 49, NULL, '2019-11-01 04:32:43', '2019-11-01 04:32:43'),
(60, 'bhushan dhangar', 'hinjawadi pune -33', NULL, 'maharashtra', 'india', '411033', 117, NULL, '2019-11-01 06:20:08', '2019-11-01 06:20:08'),
(61, 'shubham ingole', 'amarawati washim', NULL, 'maharashtra', 'Bangladesh', '411033', 117, NULL, '2019-11-01 06:20:08', '2019-11-01 06:20:08'),
(62, 'bhushan dhangar', 'hinjawadi pune -33', NULL, 'maharashtra', 'india', '411033', 117, NULL, '2019-11-01 06:30:27', '2019-11-01 06:30:27'),
(63, 'shubham ingole', 'amarawati washim', NULL, 'maharashtra', 'Canada', '411033', 117, NULL, '2019-11-01 06:30:27', '2019-11-01 06:30:27'),
(64, 'bhushan dhangar', 'hinjawadi pune -33', NULL, 'maharashtra', 'india', '411033', 117, NULL, '2019-11-01 06:32:04', '2019-11-01 06:32:04'),
(65, 'shubham ingole', 'amarawati washim', NULL, 'maharashtra', 'Canada', '411033', 117, NULL, '2019-11-01 06:32:04', '2019-11-01 06:32:04');

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
(14, '2019-10-29 23:46:24', '2019-10-29 23:46:24', 'shubham', '1572412801_art-artistic-background-673648.jpg', 'shubham'),
(15, '2019-10-29 23:48:30', '2019-10-29 23:48:30', 'banner2', '1572412710_art-art-materials-bright-743986.jpg', 'banner2'),
(16, '2019-10-30 00:21:11', '2019-10-30 00:21:11', 'banner4', '1572414671_automobile-automotive-blurred-background-385997.jpg', 'banner4'),
(17, '2019-10-30 00:21:40', '2019-10-30 00:21:40', 'banner5', '1572414700_background-backlight-blur-262713.jpg', 'banner5');

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
(47, '2019-10-25 06:41:26', '2019-10-25 06:41:26', 'Electronics', 0, NULL),
(48, '2019-10-25 06:41:40', '2019-10-25 06:41:40', 'Mobile', 47, NULL),
(49, '2019-10-25 06:41:50', '2019-10-25 06:41:50', 'CPU', 47, NULL),
(50, '2019-10-25 06:42:49', '2019-10-25 06:42:49', 'Computer', 47, NULL),
(51, '2019-10-29 03:46:06', '2019-10-29 03:46:06', 'Washing Machine', 47, NULL),
(52, '2019-10-30 06:44:31', '2019-10-30 06:44:31', 'Laptop', 47, NULL),
(53, '2019-10-30 06:44:49', '2019-10-30 06:44:49', 'Automobile', 0, NULL),
(54, '2019-10-30 06:45:08', '2019-10-30 06:45:08', 'Construction', 0, NULL),
(55, '2019-10-30 06:45:18', '2019-10-30 06:45:18', 'Software', 0, NULL),
(56, '2019-10-30 06:51:09', '2019-10-30 06:51:09', 'Bike', 53, NULL),
(57, '2019-10-30 06:51:24', '2019-10-30 06:51:24', 'JCB', 54, NULL),
(58, '2019-10-30 06:51:49', '2019-10-30 06:51:49', 'Anti Virus', 55, NULL);

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
(1, 48, 56, '2019-10-29 03:16:32', '2019-10-29 03:42:11'),
(2, 51, 53, '2019-10-29 03:16:42', '2019-10-29 03:46:17'),
(3, 48, 57, '2019-10-29 03:45:45', '2019-10-29 03:45:45'),
(4, 50, 58, '2019-10-30 06:40:41', '2019-10-30 06:40:41'),
(5, 56, 59, '2019-10-30 06:52:28', '2019-10-30 06:52:28'),
(6, 56, 60, '2019-10-30 06:53:07', '2019-10-30 06:53:07'),
(7, 56, 61, '2019-10-30 06:54:19', '2019-10-30 06:54:19'),
(8, 56, 62, '2019-10-30 06:54:55', '2019-10-30 06:54:55'),
(9, 58, 63, '2019-10-30 06:55:32', '2019-10-30 06:55:32'),
(10, 58, 64, '2019-10-30 06:57:19', '2019-10-30 06:57:19'),
(12, 57, 66, '2019-10-31 07:15:59', '2019-10-31 07:15:59'),
(13, 48, 67, '2019-10-31 21:49:57', '2019-10-31 21:49:57');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `name`, `title`, `slug`, `content`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Blog', 'Blog manage', 'blog', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', '0', '2019-10-17 05:38:46', '2019-10-18 06:55:33'),
(5, 'about us', 'About us', 'about-us', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1><strong>About Us Page</strong></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="file:///var/www/html/images/c1.jpeg"><img src="http://localhost:8000/images/c1.jpeg" style="height:1300px; width:867px" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="http://localhost:8000">Shopping Website</a></p>\r\n\r\n<p>its is a shopping website for buy a products</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1><strong>Rahul Sonawanes</strong></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>At Absolute, we&#39;re looking to revamp our entire website over the coming months, and in particular we&#39;ll be focusing our attention on our about page. We recognize that our page is currently a little on the dull side and while we are researching the topic, I thought it would be great to share nine great, easily applicable techniques we picked up from some of our favorite About Us pages from around the web.</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Send me mail at</p>\r\n\r\n<p><a href="http://rahul.sonawane@neosofttech.com">rahul.sonawane@neosofttech.com</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Although everyone knows that users prefer&nbsp;<a href="https://www.nngroup.com/articles/photos-as-web-content/">images to text</a>, it&rsquo;s not as easy as just putting a bunch of pictures on your About Us page (although, as you will see, that definitely helps) and moving on to the next project. While creating an innovative page is hard work and can be time consuming, it can build the trust and respect of a potential customer, thus tipping the scale greatly tipped in your favor.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Human nature dictates that we are, first and foremost, concerned with our own problems. While some of us may give to charity or volunteer in our spare time, when it comes to searching for products or services online, we&#39;re all about ourselves and what a brand can do for us.</strong></p>\r\n\r\n<p><br />\r\n<strong><em>This is a new sentence without a paragraph break, in bold italics.</em></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<hr />\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '0', '2019-10-18 03:14:58', '2019-10-18 06:41:36'),
(10, 'Shubham', 'shubham is great', 'shu-bham', '<p>shubham is greatt again</p>', '0', '2019-10-18 04:49:05', '2019-10-18 04:49:05'),
(12, 'mobile', 'mobile is great', 'mobile', '<p><strong>Content Management System TEMPLATE Creating</strong></p>\r\n\r\n<p>&nbsp;</p>', '0', '2019-10-18 05:05:53', '2019-10-18 06:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `created_at`, `updated_at`, `name`, `email`, `status`) VALUES
(1, '2019-10-31 05:43:06', '2019-10-31 05:43:06', 'Shubham', 'shubham@gmail.com', 'Active'),
(2, '2019-10-31 05:46:07', '2019-10-31 05:49:07', 'Nilesh', 'Nilesh@gmail.com', 'Active');

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

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `contact`, `message`, `created_at`, `updated_at`) VALUES
(1, 'shubham', 'shubha@gmail.com', 'shu', '9797979797', 'asdasdasdasas', '2019-10-16 07:21:02', '2019-10-16 07:21:02'),
(2, 'shubham', 'shubha@gmail.com', 'shu', '9797979797', 'asdasdasdasas', '2019-10-16 07:21:33', '2019-10-16 07:21:33'),
(3, 'shubham', 'shubha@gmail.com', 'shu', '9797979797', 'asdasdasdasas', '2019-10-16 07:22:00', '2019-10-16 07:22:00'),
(4, 'shubham', 'shubha@gmail.com', 'shu', '9797979797', 'asdasdasdasas', '2019-10-16 07:22:18', '2019-10-16 07:22:18'),
(5, 'shubham', 'shubha@gmail.com', 'shu', '9797979797', 'asdasdasdasas', '2019-10-16 07:22:32', '2019-10-16 07:22:32'),
(6, 'shubham', 'shubha@gmail.com', 'shu', '9797979797', 'asdasdasdasas', '2019-10-16 07:23:51', '2019-10-16 07:23:51'),
(7, 'shubham', 'shubha@gmail.com', 'shu', '9797979797', 'asdasdasdasas', '2019-10-16 07:24:17', '2019-10-16 07:24:17'),
(8, 'shubham', 'shubha@gmail.com', 'shu', '9797979797', 'asdasdasdasas', '2019-10-16 07:24:31', '2019-10-16 07:24:31'),
(9, 'sdas', 'shubham123@gmail.com', 'shubam is happy', '9797776262', 'asdasdasdasdas', '2019-10-16 07:39:13', '2019-10-16 07:39:13'),
(10, 'shubham', 'enga@gmai.com', 'shubham is great', '9797979797', 'shubham is also greaet', '2019-10-17 07:53:54', '2019-10-17 07:53:54'),
(11, 'nilesh', 'Nilesh@gmail.com', 'shubham is great', '9797979797', 'shubham is great', '2019-10-30 02:07:29', '2019-10-30 02:07:29'),
(12, 'Shubham', 'kajal@gmail.com', 'Register Users', '9797979799', 'asda', '2019-11-01 03:55:40', '2019-11-01 03:55:40'),
(13, 'Shubham', 'kajal@gmail.com', 'great', '9797979799', 'sdfsds', '2019-11-01 03:56:06', '2019-11-01 03:56:06');

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
  `discount` int(11) DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty_left` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `created_at`, `updated_at`, `title`, `code`, `type`, `discount`, `qty`, `qty_left`, `status`) VALUES
(2, '2019-09-11 03:12:09', '2019-11-01 06:21:31', '20% Discount all product', 'COUPON20', 'percentage', 20, '5', '5', 'Active'),
(3, '2019-10-21 03:11:28', '2019-11-01 06:21:35', '25% dISCOUNT Offer', 'CO25', 'percentage', 25, '5', '5', 'Active'),
(4, '2019-10-21 03:12:06', '2019-10-30 02:37:09', '100% cashbacks', '100CASH', 'amount', 50, '10', '10', 'Active'),
(6, '2019-10-29 04:11:51', '2019-11-01 06:30:27', 'Diwali Offer 5% Off', 'DIWA5', 'percentage', 15, '10', '9', 'Active'),
(7, '2019-10-31 06:53:39', '2019-11-01 06:20:08', '50% OFF  ON TOTAL', '50OFF', 'percentage', 50, '6', '4', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `name`, `subject`, `message`, `created_at`, `updated_at`, `key`) VALUES
(3, 'Registration', 'User Register', '<h1>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="marker"> &nbsp; &nbsp; &nbsp;<strong>Welcome to My Shopping Cart.</strong></span></h1>\r\n\r\n<p>To log in when visiting our site just click Login or My Account at the top of every page, and<br />\r\nthen enter your email address and password.<br />\r\nUse the following values when prompted to log in:<br />\r\nEmail:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>{{email}}</strong><br />\r\nPassword:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>{{password}}</strong><br />\r\nWhen you log in to your account, you will be able to do the following:</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Proceed through checkout faster when making a purchase</li>\r\n	<li>&nbsp;Check the status of orders</li>\r\n	<li>View past orders</li>\r\n	<li>Make changes to your account information</li>\r\n	<li>Change your password</li>\r\n	<li>Store alternative addresses (for shipping to multiple family members and friends!)</li>\r\n</ul>\r\n\r\n<p>If you have any questions, please feel free to contact us at <strong>rahulsonawanen@gmail.com</strong>&nbsp;or<br />\r\nby phone at <strong>+91 9763362750</strong></p>', '2019-10-15 04:05:51', '2019-10-17 01:42:40', 'user_register'),
(4, 'Admin will get copy of above email without password', 'Admin will get copy of above email without password', '<h1>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Welcome to My Shopping Cart.</strong></h1>\r\n\r\n<p>To log in when visiting our site just click Login or My Account at the top of every page, and<br />\r\nthen enter your email address and password.<br />\r\nUse the following values when prompted to log in:</p>\r\n\r\n<p>Email:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>&nbsp; &nbsp; {{email}}</strong><br />\r\n<br />\r\nWhen you log in to your account, you will be able to do the following:</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Proceed through checkout faster when making a purchase</li>\r\n	<li>&nbsp;Check the status of orders</li>\r\n	<li>View past orders</li>\r\n	<li>Make changes to your account information</li>\r\n	<li>Change your password</li>\r\n	<li>Store alternative addresses (for shipping to multiple family members and friends!)</li>\r\n</ul>\r\n\r\n<p>If you have any questions, please feel free to contact us at <strong>rahulsonawanen@gmail.com</strong>&nbsp;or<br />\r\nby phone at <strong>+91 9763362750</strong></p>', '2019-10-15 05:48:33', '2019-10-16 04:09:46', 'admin_register'),
(5, 'ORDER', 'order place', '<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><span class="marker"><strong>THANK YOU FOR YOUR ORDER&nbsp; FROM MY SHOPPING CART</strong></span></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align="center" border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<thead>\r\n		<tr>\r\n			<th scope="col" style="text-align:center"><strong>No</strong></th>\r\n			<th scope="col" style="text-align:center"><strong>Product</strong></th>\r\n			<th scope="col" style="text-align:center"><strong>Price</strong></th>\r\n			<th scope="col" style="text-align:center"><strong>Quantity</strong></th>\r\n			<th scope="col" style="text-align:center"><strong>Total</strong></th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr><td>1</td><td>{{ name }}</td><td>{{ rate }}</td><td>{{ qty }}</td><td>{{ total }}</td></tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h2 style="font-style:italic"><cite><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Your Order</strong></cite></h2>\r\n\r\n<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Bill To:{{ fullname }}</strong></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align="center" border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<th><strong>Payment</strong></th>\r\n			<td><strong>{{ payment }}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope="row"><strong>Billing Address</strong></th>\r\n			<td><strong>{{ billing }}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<th scope="row"><strong>Shipping Address</strong></th>\r\n			<td><strong>{{ shipping }}</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></p>', '2019-10-15 08:17:30', '2019-10-17 03:46:17', 'order_place'),
(6, 'Contact us form submission notification to admin', 'Contact us form submission notification to admin', '<!-- CSS goes in the document HEAD or added to your external stylesheet --><!-- Table goes in the document BODY -->\r\n<p><strong>Dear Administrator,</strong></p>\r\n\r\n<p><strong>Please check below details of customer.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align="center" border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<th>Name</th>\r\n			<th style="text-align: center;">{{ name }}</th>\r\n		</tr>\r\n		<tr>\r\n			<td style="text-align:center"><strong>Email</strong></td>\r\n			<td style="text-align:center"><strong>{{ email }}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="text-align:center"><strong>Contact</strong></td>\r\n			<td style="text-align:center"><strong>{{ contact }}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="text-align:center"><strong>Subject</strong></td>\r\n			<td style="text-align:center"><strong>{{ subject }}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="text-align:center"><strong>Message</strong></td>\r\n			<td style="text-align:center"><strong>{{ message }}</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>&nbsp;Form Posted by IP: {{ ip }}&nbsp;</strong><strong>Comments by administrator:</strong></p>', '2019-10-16 01:16:34', '2019-10-17 07:51:23', 'contact_us_admin'),
(7, 'If Admin responds to contact us form send email to customer with note.', 'If Admin responds to contact us form send email to customer with note.', '<p><!-- CSS goes in the document HEAD or added to your external stylesheet --><!-- Table goes in the document BODY --><strong>Dear Administrator,</strong></p>\r\n\r\n<p><strong>Please check below details of customer.</strong></p>\r\n\r\n<table align="center" border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Name</strong></td>\r\n			<td><strong>{{ name }}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Email</strong></td>\r\n			<td><strong>{{ email }}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Contact</strong></td>\r\n			<td><strong>{{ contact }}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Subject</strong></td>\r\n			<td><strong>{{ subject }}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Messsage</strong></td>\r\n			<td><strong>{{ message }}</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<strong>Form Posted by IP: {{ ip }}&nbsp;&nbsp;</strong><strong>Comments by administrator:</strong></p>', '2019-10-16 01:18:55', '2019-10-17 07:48:08', 'contact_us_user'),
(8, 'Admin changes status of order then email will be sent to customer', 'Admin changes status of order then email will be sent to customer', '<p><!-- CSS goes in the document HEAD or added to your external stylesheet --><!-- Table goes in the document BODY --></p>\r\n\r\n<h3><span class="marker"><strong>THANK YOU FOR YOUR ORDER<br />\r\nFROM MY SHOPPING CART.</strong></span></h3>\r\n\r\n<p><span class="marker">Once your package ships we will send an email with a link to track your order. Your order summary is below. Thank you again for your business)</span></p>\r\n\r\n<p><span class="marker">Call Us: +91 - 22 - 40500699<br />\r\nEmail: info@shoppingcompany.com</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1><strong><span class="marker">Your Shipment #</span></strong></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align="center" border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<caption><strong>order track</strong></caption>\r\n	<thead>\r\n		<tr>\r\n			<th scope="col">Tracking Order</th>\r\n			<th scope="col">{{ order_code }}</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h1>&nbsp;</h1>\r\n\r\n<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><strong>&nbsp;Bill To: {{ fullname }}</strong></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align="center" border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td style="text-align:center"><strong>Status</strong></td>\r\n			<td style="text-align:center"><strong>{{ status }}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Billing Address</strong></td>\r\n			<td style="text-align:center"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{ billing }}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Shipping Address</strong></td>\r\n			<td style="text-align:center"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;{{ shipping }}</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><strong>Payment:{{ payment }}</strong></div>', '2019-10-16 01:22:35', '2019-10-17 03:03:03', 'status_change_user');

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

--
-- Dumping data for table `log_order`
--

INSERT INTO `log_order` (`id`, `order_id`, `status`, `created_at`, `updated_at`) VALUES
(9, 9, 'Pending', '2019-11-01 04:32:44', '2019-11-01 04:32:44'),
(10, 10, 'Pending', '2019-11-01 06:20:08', '2019-11-01 06:20:08'),
(11, 11, 'Pending', '2019-11-01 06:30:27', '2019-11-01 06:30:27'),
(12, 12, 'Pending', '2019-11-01 06:32:05', '2019-11-01 06:32:05');

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
(69, '2019_10_11_123604_add_demo', 38),
(70, '2019_10_03_124754_create_orders_table_add_order_code', 39),
(71, '2019_10_14_042158_create_cats_table', 39),
(72, '2019_10_15_054726_create_email_template', 40),
(73, '2019_10_15_090351_create__orders__table__add__order__code', 40),
(74, '2019_10_16_065704_add_template_key', 40),
(75, '2019_10_17_095201_create_cms_table', 41),
(76, '2019_10_18_135554_add_coupon_id', 42),
(77, '2019_10_22_060410_add_total_and_totalqty', 43),
(78, '2019_10_22_120734_create_xyzs_table', 44),
(79, '2019_10_23_085417_add_category_id', 44),
(80, '2019_10_23_091204_add_category_name', 45),
(81, '2019_10_25_052259_add_category_id', 46),
(82, '2019_10_30_073922_add_status_coupons', 46),
(83, '2019_11_01_030912_add_status_products', 47);

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
(5, 'App\\User', 50),
(5, 'App\\User', 51),
(5, 'App\\User', 52),
(5, 'App\\User', 53),
(5, 'App\\User', 54),
(5, 'App\\User', 55),
(5, 'App\\User', 56),
(5, 'App\\User', 57),
(5, 'App\\User', 58),
(5, 'App\\User', 59),
(5, 'App\\User', 60),
(5, 'App\\User', 61),
(5, 'App\\User', 62),
(5, 'App\\User', 63),
(5, 'App\\User', 64),
(5, 'App\\User', 65),
(5, 'App\\User', 66),
(5, 'App\\User', 67),
(5, 'App\\User', 68),
(5, 'App\\User', 69),
(5, 'App\\User', 70),
(5, 'App\\User', 71),
(5, 'App\\User', 72),
(5, 'App\\User', 73),
(5, 'App\\User', 74),
(5, 'App\\User', 75),
(5, 'App\\User', 76),
(5, 'App\\User', 77),
(5, 'App\\User', 78),
(5, 'App\\User', 79),
(5, 'App\\User', 80),
(5, 'App\\User', 81),
(5, 'App\\User', 82),
(5, 'App\\User', 83),
(5, 'App\\User', 84),
(5, 'App\\User', 85),
(5, 'App\\User', 86),
(5, 'App\\User', 87),
(5, 'App\\User', 88),
(5, 'App\\User', 89),
(5, 'App\\User', 90),
(5, 'App\\User', 91),
(2, 'App\\User', 93),
(4, 'App\\User', 94),
(5, 'App\\User', 102),
(3, 'App\\User', 103),
(5, 'App\\User', 104),
(5, 'App\\User', 105),
(5, 'App\\User', 107),
(5, 'App\\User', 108),
(5, 'App\\User', 109),
(5, 'App\\User', 110),
(5, 'App\\User', 111),
(5, 'App\\User', 112),
(5, 'App\\User', 113),
(5, 'App\\User', 114),
(5, 'App\\User', 116),
(5, 'App\\User', 117);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `billing_id` int(10) UNSIGNED NOT NULL,
  `coupon_id` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shipping_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `user_id`, `billing_id`, `coupon_id`, `deleted_at`, `created_at`, `updated_at`, `shipping_id`) VALUES
(9, 'OD_1572602563', 49, 10, 7, NULL, '2019-11-01 04:32:43', '2019-11-01 04:32:43', 59),
(10, 'OD_1572609008', 117, 60, 7, NULL, '2019-11-01 06:20:08', '2019-11-01 06:20:08', 61),
(11, 'OD_1572609627', 117, 62, 6, NULL, '2019-11-01 06:30:27', '2019-11-01 06:30:27', 63),
(12, 'OD_1572609724', 117, 64, NULL, NULL, '2019-11-01 06:32:04', '2019-11-01 06:32:04', 65);

-- --------------------------------------------------------

--
-- Table structure for table `order_cart_details`
--

CREATE TABLE `order_cart_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) DEFAULT '1',
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total_cart` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_cart_details`
--

INSERT INTO `order_cart_details` (`id`, `order_id`, `product_id`, `qty`, `total`, `images`, `deleted_at`, `created_at`, `updated_at`, `total_cart`, `total_qty`, `category_name`) VALUES
(28, 9, 66, 2, '1560000', 'Product Image/1572525959_poklane.jpeg', NULL, '2019-11-01 04:32:43', '2019-11-01 04:32:43', '1030709', '4', 'JCB'),
(29, 9, 62, 2, '18', 'Product Image/1572438295_bajaj.jpeg', NULL, '2019-11-01 04:32:43', '2019-11-01 04:32:43', '1030709', '4', 'Bike'),
(30, 9, 63, 2, '1400', 'Product Image/1572438332_avast.jpeg', NULL, '2019-11-01 04:32:43', '2019-11-01 04:32:43', '1030709', '4', 'Anti Virus'),
(31, 9, 60, 1, '500000', 'Product Image/1572438187_ktm.jpeg', NULL, '2019-11-01 04:32:44', '2019-11-01 04:32:44', '1030709', '4', 'Bike'),
(32, 10, 67, 3, '75000', 'Product Image/1572578397_APPLE.jpeg', NULL, '2019-11-01 06:20:08', '2019-11-01 06:20:08', '37500', '1', 'Mobile'),
(33, 11, 63, 7, '4900', 'Product Image/1572438332_avast.jpeg', NULL, '2019-11-01 06:30:27', '2019-11-01 06:30:27', '4165', '1', 'Anti Virus'),
(34, 12, 67, 2, '50000', 'Product Image/1572578397_APPLE.jpeg', NULL, '2019-11-01 06:32:04', '2019-11-01 06:32:04', '192100', '3', 'Mobile'),
(35, 12, 63, 3, '2100', 'Product Image/1572438332_avast.jpeg', NULL, '2019-11-01 06:32:04', '2019-11-01 06:32:04', '192100', '3', 'Anti Virus'),
(36, 12, 61, 2, '140000', 'Product Image/1572438259_bike1.jpeg', NULL, '2019-11-01 06:32:04', '2019-11-01 06:32:04', '192100', '3', 'Bike');

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

--
-- Dumping data for table `order_payment_details`
--

INSERT INTO `order_payment_details` (`id`, `order_id`, `payment_id`, `payment_type`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(9, 9, NULL, 'COD', 'Pending', NULL, '2019-11-01 04:32:43', '2019-11-01 04:32:43'),
(10, 10, NULL, 'COD', 'Pending', NULL, '2019-11-01 06:20:08', '2019-11-01 06:20:08'),
(11, 11, NULL, 'COD', 'Pending', NULL, '2019-11-01 06:30:27', '2019-11-01 06:30:27'),
(12, 12, NULL, 'COD', 'Pending', NULL, '2019-11-01 06:32:04', '2019-11-01 06:32:04');

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
('kajal@gmail.com', '$2y$10$pHvJPPGE3eq73e46jR43je2y6efIdvx4jZPLDFH0hzgElZKG5/Qwe', '2019-10-15 06:25:42');

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
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty_left` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `name`, `rate`, `qty_left`, `status`) VALUES
(53, '2019-10-11 07:26:14', '2019-11-01 06:36:41', 'LG WashingMachine X2', '5555', '15', 'Active'),
(56, '2019-10-11 07:29:31', '2019-11-01 06:36:31', 'HONOR S3', '15000', '15', 'Active'),
(57, '2019-10-29 03:45:45', '2019-11-01 00:33:25', 'MI F7', '34444', '15', 'Active'),
(58, '2019-10-30 06:40:41', '2019-11-01 06:36:19', 'Laptop', '50000', '15', 'Active'),
(59, '2019-10-30 06:52:27', '2019-11-01 06:36:12', 'bullet', '350000', '15', 'Active'),
(60, '2019-10-30 06:53:07', '2019-11-01 06:33:15', 'Yamaha KTM', '500000', '14', 'Active'),
(61, '2019-10-30 06:54:19', '2019-11-01 06:36:44', 'YAMAHA Z1', '70000', '13', 'Active'),
(62, '2019-10-30 06:54:55', '2019-11-01 06:36:44', 'Pulser', '9', '13', 'Active'),
(63, '2019-10-30 06:55:32', '2019-11-01 06:36:45', 'Avast Antivirus', '700', '8', 'Active'),
(64, '2019-10-30 06:57:19', '2019-11-01 06:35:54', 'Quick Heal', '500', '20', 'Active'),
(66, '2019-10-31 07:15:59', '2019-11-01 06:36:45', 'JCB Pokelane', '780000', '18', 'Active'),
(67, '2019-10-31 21:49:57', '2019-11-01 06:33:15', 'Apple XXL', '25000', '25', 'Active');

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
(20, 53, 15, 'blue', '2019-10-11 07:26:14', '2019-11-01 06:36:42'),
(23, 56, 15, 'blue', '2019-10-11 07:29:32', '2019-11-01 06:36:31'),
(24, 57, 15, 'yellow', '2019-10-29 03:45:45', '2019-11-01 00:33:25'),
(25, 58, 15, 'blue', '2019-10-30 06:40:41', '2019-11-01 06:36:19'),
(26, 59, 15, 'black', '2019-10-30 06:52:28', '2019-11-01 06:36:13'),
(27, 60, 15, 'RED', '2019-10-30 06:53:07', '2019-10-31 23:14:15'),
(28, 61, 15, 'yellow', '2019-10-30 06:54:19', '2019-11-01 06:36:07'),
(29, 62, 15, 'black', '2019-10-30 06:54:55', '2019-11-01 06:36:01'),
(30, 63, 20, 'red', '2019-10-30 06:55:32', '2019-11-01 06:35:33'),
(31, 64, 20, 'orange', '2019-10-30 06:57:19', '2019-11-01 06:35:54'),
(33, 66, 20, 'YELLOW', '2019-10-31 07:15:59', '2019-11-01 06:35:41'),
(34, 67, 30, 'black', '2019-10-31 21:49:57', '2019-10-31 22:41:08');

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
(50, 'Product Image/1570798574_lg7.jpeg', 53, '2019-10-11 07:26:14', '2019-10-11 07:26:14'),
(58, 'Product Image/1570798771_honor4.jpeg', 56, '2019-10-11 07:29:31', '2019-10-11 07:29:31'),
(59, 'Product Image/1570798771_honor2.jpeg', 56, '2019-10-11 07:29:31', '2019-10-11 07:29:31'),
(60, 'Product Image/1570798772_honor1.jpeg', 56, '2019-10-11 07:29:32', '2019-10-11 07:29:32'),
(62, 'Product Image/1572340545_appo1.jpeg', 57, '2019-10-29 03:45:45', '2019-10-29 03:45:45'),
(63, 'Product Image/1572437441_hp3.jpeg', 58, '2019-10-30 06:40:41', '2019-10-30 06:40:41'),
(64, 'Product Image/1572438147_bullet.jpeg', 59, '2019-10-30 06:52:27', '2019-10-30 06:52:27'),
(65, 'Product Image/1572438187_ktm.jpeg', 60, '2019-10-30 06:53:07', '2019-10-30 06:53:07'),
(66, 'Product Image/1572438259_bike1.jpeg', 61, '2019-10-30 06:54:19', '2019-10-30 06:54:19'),
(67, 'Product Image/1572438295_bajaj.jpeg', 62, '2019-10-30 06:54:55', '2019-10-30 06:54:55'),
(68, 'Product Image/1572438332_avast.jpeg', 63, '2019-10-30 06:55:32', '2019-10-30 06:55:32'),
(69, 'Product Image/1572438439_quick.jpeg', 64, '2019-10-30 06:57:19', '2019-10-30 06:57:19'),
(71, 'Product Image/1572525959_poklane.jpeg', 66, '2019-10-31 07:15:59', '2019-10-31 07:15:59'),
(72, 'Product Image/1572578397_APPLE.jpeg', 67, '2019-10-31 21:49:57', '2019-10-31 21:49:57'),
(73, 'Product Image/1572578397_Apple2.jpeg', 67, '2019-10-31 21:49:57', '2019-10-31 21:49:57'),
(74, 'Product Image/1572578397_apple2.jpeg', 67, '2019-10-31 21:49:57', '2019-10-31 21:49:57');

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
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(16, 3),
(17, 3),
(18, 3),
(19, 3),
(20, 3),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(30, 3),
(31, 3),
(32, 3),
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
(12, 5),
(32, 5);

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
(1, 'rahul', 'sonawane', 'rahul@gmail.com', '$2y$10$/oqN/dg216lpe0tmlMqMoOzUBv.kFEi3jHYYx8zPujFzctXRthQ6u', '1', 'User/1570360285_h.jpeg', '0cTyfoqiEygCKYa8HGvn01HCta01m17MFfCnV3BagyaQim7WuwOrsbS2gZaq', '2019-09-07 00:39:54', '2019-10-06 05:41:25', NULL, NULL),
(49, 'kajal', 'waykule', 'kajal@gmail.com', '$2y$10$YJc9vXwp077lVvK1uR6P3.MYoqAVtBue3JFO8uHQnsfcgO6idGpb2', '1', 'User/1572614627_j.jpeg', 'P0RIIdKIQfxGcpAnPpvNkj2gaJgYKTlNv3QUIzaGdFuwUWIUzG1ONNA6eY6m', '2019-10-07 06:03:25', '2019-11-01 07:53:47', NULL, NULL),
(90, 'Shubham', 'Ingole', 'shubham@gmail.com', '$2y$10$WJUuJHgnCAlab2plRJL6JO/tLosde/XmpXWPbZhr5yEr2ylAvLfpy', '1', 'User/1572007724_s.jpeg', 'PG44Xl2noMSXXBoY9PnSsS8PMDBlK6jhKUynM4pohcgJTGATWwtrLpuknYa9', '2019-10-22 07:16:34', '2019-10-25 07:18:44', NULL, NULL),
(91, 'Vinay', 'Jadhav', 'vinay@gmail.com', '$2y$10$LUOvtDqpUJl0RCHAxFv0/OoRrmtdrPZVeh3tkaqW3jz6puBoIXfG2', '1', NULL, 'd9KhH641g3pDbD4eszhu264YN0WX396mz8fxyo8PEVUFJSY5UncCXKBIFtep', '2019-10-22 09:53:00', '2019-10-22 09:53:00', NULL, NULL),
(93, 'Nilesh', 'Jawale', 'nilesh@gmail.com', '$2y$10$cM9cjZ1E.0ohS9HU831R3uOWnXqp5w9hKTBBki8wjcfYKIa5kGE4m', 'Active', NULL, '6Lsmygf1MmXPbpstZNiAdqoy8gz7RWoQF98mt9Ygzu8njNSq02A9Uqo9XE4I', '2019-10-25 07:25:57', '2019-10-25 07:25:57', NULL, NULL),
(94, 'sagar', 'paddy', 'sagar@gmail.com', '$2y$10$POwAHEkkpqCKVLMbDj0an.PaDIlwIRU11GqjYCYF1D98C5d5..AVm', 'InActive', NULL, 'P6m0G92oOLidrS5Htp2NqITtPSkFzSnfpAqUKDq4yIw7D6VXX6KRVlUEARLc', '2019-10-25 07:36:36', '2019-10-28 22:35:36', NULL, NULL),
(103, 'sukhmit', 'sir', 'su@gmail.com', '$2y$10$BlXBvxfoWs26yf0c0w6YaeTXwva47JsSBN/TXmR/My9HuEVnQ3kau', 'Active', NULL, NULL, '2019-10-29 02:57:24', '2019-10-29 02:57:24', NULL, NULL),
(104, 'best player in pubg', '', 'rahulcplayer@gmail.com', '', '1', NULL, '1xIeYJqbDkNIRSNEH2Li43OKNUZirCDtjxGUWKSP3vd415OKbBlsrD0954Ai', '2019-10-29 04:27:13', '2019-10-29 04:27:13', '101089321346172137641', NULL),
(105, 'Rahul Sonawane', '', 'rahulsonawanen@gmail.com20', '', '1', NULL, 'FR0hVlkp5rnPsWsRWqfBfhSA26r0BMvHtnpl5yhfCgFhnsJM0yLEAPyAxSZX', '2019-10-29 04:28:10', '2019-10-29 04:36:09', '116479574336070926475', ''),
(107, 'shubham', 'ingole', 'rahulsonawanen@gmail.com33', '$2y$10$TkKcklqdTuVhNdfvOmTGPuYftx8VFMEZTQTu2cgeqOikRnUKvy4hS', '1', NULL, NULL, '2019-10-29 04:44:10', '2019-10-29 04:44:10', NULL, NULL),
(108, 'vvasda', 'asdaqqq', 'rahulsonawanen@gmail.com.206', '$2y$10$uUQde1ZaAv78jkzNdQKUP.Szd5gsucHltbNf2W.N1T6JGT3jtrfwS', '1', NULL, NULL, '2019-10-29 04:46:04', '2019-10-29 04:46:04', NULL, NULL),
(111, 'rahul', 'sonawane', 'rahulsonawanen@gmail.com3', '$2y$10$tcnrZCfga00ypswZJMxhKOtxzUTCVGQz/iNNFdVhP0kaQ23AmVbOK', '1', NULL, NULL, '2019-10-29 04:50:04', '2019-10-29 04:50:04', NULL, NULL),
(113, 'eric', 'suvane', 'eic@gmail.com', '$2y$10$91srnbAAEKybRlaKWYy9AeKSL1kn/1JIucsgJMvs/C/f2t1R8Ri6i', '1', NULL, 'lAhSjJDjRakXqtNf2iDXT4onL7tV3DRGxWuQOwdy7n6lAoxnk99b4a8uScuG', '2019-10-31 06:37:30', '2019-10-31 06:37:30', NULL, NULL),
(114, 'najrin', 'shah', 'najrin@gmail.com', '$2y$10$SuLmCHtZqYfL8nUHxcARWeZ6VVCfdECEGRVRhGatn889EkvtrPRYS', '1', 'User/1572528225_a.jpeg', 'PrVB3IMg4yCQLUf01BmEp6WFBRjjgVueh5Qm9oT2w6yDLKllcqI2bMoadI26', '2019-10-31 07:17:05', '2019-10-31 07:53:45', NULL, NULL),
(116, 'rahulsweb', '', 'rahulsonawanen@gmail.com', '', '1', NULL, 'R09X270Kqob6qEcxWDjgjPlGoXmA4vPYvOH8eg6pMxi1pDL502X9fGncsE3f', '2019-10-31 10:31:18', '2019-10-31 10:31:39', '116479574336070926475', '43261847'),
(117, 'megha', 'kalal', 'megha@gmail.com', '$2y$10$NMyTzLxop3ECKwwEPs99uOug0lyjgiwo6PCoXabv90nDTE04kCIRW', 'Active', NULL, '2giPBjLZQYb9Vv0qdGUNnhqp9POLRgIldPTT0b8ecCnYQhZebiEhhNYGbjNe', '2019-11-01 06:14:12', '2019-11-01 09:32:50', NULL, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `xyzs`
--

CREATE TABLE `xyzs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci
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
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_templates_key_unique` (`key`);

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
  ADD KEY `orders_shipping_id_foreign` (`shipping_id`),
  ADD KEY `orders_coupon_id_foreign` (`coupon_id`);

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
-- Indexes for table `xyzs`
--
ALTER TABLE `xyzs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `contact_uses`
--
ALTER TABLE `contact_uses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `log_order`
--
ALTER TABLE `log_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `order_cart_details`
--
ALTER TABLE `order_cart_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `order_payment_details`
--
ALTER TABLE `order_payment_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `user_wish_lists`
--
ALTER TABLE `user_wish_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `xyzs`
--
ALTER TABLE `xyzs`
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
  ADD CONSTRAINT `orders_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
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
