-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 08:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dream_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sterling', 'Sterling Description', 'brand-images/1675571063.png', 1, '2023-02-04 22:24:23', '2023-02-04 22:24:23'),
(2, 'NS8', 'NS8 Description', 'brand-images/1675571385.png', 1, '2023-02-04 22:29:45', '2023-02-04 22:29:45'),
(3, 'Elegent Auto Group', 'Elegent Auto Group Description', 'brand-images/1675571418.png', 1, '2023-02-04 22:30:18', '2023-02-04 22:30:18'),
(5, 'Sterling', 'Sterling Description', 'brand-images/1675572126.png', 1, '2023-02-04 22:42:06', '2023-02-04 22:42:06'),
(6, 'Node', 'Node Description', 'brand-images/1675617977.png', 1, '2023-02-05 11:22:02', '2023-02-05 11:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Man Fashion', 'Man Fashion Description', 'category-images/1675561181.jpg', 1, '2023-02-04 03:55:35', '2023-02-04 19:39:41'),
(2, 'Woman Fashion', 'Woman Fashion', 'category-images/1675504646.jpg', 1, '2023-02-04 03:57:26', '2023-02-04 03:57:26'),
(3, 'Childs Fashion', 'Childs Fashion Description', 'category-images/1675524231.jpg', 1, '2023-02-04 09:23:51', '2023-02-04 09:23:51'),
(5, 'Electronics', 'Electronics Description', 'category-images/1675528340.jpg', 1, '2023-02-04 10:32:20', '2023-02-04 10:32:20'),
(7, 'Furniture', 'Furniture Description', 'category-images/1675546838.jpg', 1, '2023-02-04 15:40:38', '2023-02-04 15:40:38'),
(8, 'Footware', 'Footware Description', 'category-images/1675617532.jpg', 1, '2023-02-05 11:18:04', '2023-02-05 11:18:52'),
(9, 'Cookeries', 'Cookeries Description', 'category-images/1675998400.jpg', 1, '2023-02-09 21:06:40', '2023-02-09 21:06:40'),
(10, 'Cycle', 'Cycle Description', 'category-images/1676133430.jpg', 1, '2023-02-11 10:37:10', '2023-02-11 10:37:10'),
(11, 'Monitor', 'Monitor Desc', 'category-images/1677567021.jpg', 1, '2023-02-28 00:50:22', '2023-02-28 00:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `mobile`, `image`, `nid`, `dob`, `blood_group`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Md Shawon', 'shawon@gmail.com', '$2y$10$dITC4e6ST93xSHf65T6UIeZYtXNAwjM4ZOfK3Mu2.ejIcvuQwFDxO', '1234567890', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-15 20:51:21', '2023-02-15 20:51:21'),
(2, 'MD. MAHMUDUL ISLAM', 'mdmahmudul413@gmail.com', '$2y$10$NehqFlfYCc/p/Uq0H0qSre2jdIQ3LDYdX1aZ5Fnhx6o8CR7vboJcO', '01686211413', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-15 21:27:34', '2023-02-15 21:27:34'),
(3, 'Sifat', 'mehrab256@gmail.com', '$2y$10$l66kGXWt1hpupLTce4jKQO4RYZDLNE6yevMxIhPXKxjuSkC73je.W', '01972445100', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-23 10:58:06', '2023-02-23 10:58:06'),
(4, 'Elias Kanchod', 'ek@gmail', '$2y$10$pWnLNJLJBj4HKRVZ9fuvI.ZWGlfIiT.8LoHM91zCmLL/o5x7r.GQq', '123423434', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-27 07:49:56', '2023-02-27 07:49:56'),
(5, 'Elias Kanchod Khan', 'ekk@gmail.com', '$2y$10$Zn4NjykRRy3ZYR.kNBbnfeZTckfO7yAJrzRKGFJkjnlRpyVjkWAp6', '0193747220', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-27 09:55:47', '2023-02-27 09:55:47'),
(6, 'Moon', 'moon@gmail', '$2y$10$20f89hTc0eMx4ZwkXC6ta.BENeadef7C5oqvCa.CZRb.wsBDC9YPW', '234576543', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-27 10:48:12', '2023-02-27 10:48:12'),
(7, 'Rafi', 'r@g', '$2y$10$xjuXKYHbQLrBNIWLV9LrS.x0/6aIvC3vD2e2d5/e3wVJcK/4EqXX2', '45673456', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-27 10:50:43', '2023-02-27 10:50:43'),
(8, 'Belal', 'belal@gmail.com', '$2y$10$Xay7FOE4uommMknswM4aQOAiRJX.0FAS5m9tPX3G5COaPoavvgnHS', '23456789', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-27 11:01:51', '2023-02-27 11:01:51'),
(9, 'Munna', 'munna@hotmail', '$2y$10$w/TbdfPr4ABDpNAxqRCg1.j0XGGdPSQy0e9FpAWwBelogaAZ1rXAG', '45667789', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-27 11:10:20', '2023-02-27 11:10:20'),
(10, 'Akkas', 'akkas@gmail', '$2y$10$vUvBIhhB28BaIiM6JfsGb.KjW21kQkHQ4BHSxRe2lzlSnm7rJB9Ya', '123456784567', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-27 11:49:08', '2023-02-27 11:49:08'),
(11, 'Dindar Mohila', 'dmo@gmail.com', '$2y$10$K.QokYIprsjFwERYnApMTuXboIsPaSIoYM1pTqf.ng1aVoYnv6owm', '123498765', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-27 12:16:00', '2023-02-27 12:16:00'),
(12, 'Manoar Hossain', 'mh@gmail', '$2y$10$I.52mGL3H44VilQetUKEQOg9X4DN8kDr4FFlooO61rea0XBfbKdim', '123478945', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-27 20:16:51', '2023-02-27 20:16:51'),
(13, 'Zuhani', 'z@g', '$2y$10$CQr8W2vbM/RRq2gTmDFPXuytyUpydiq2P0k8MIedmfR.Cr1mumC3e', '1234673489', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-28 00:41:19', '2023-02-28 00:41:19'),
(14, 'Habib', 'h@g', '$2y$10$DCjjRk/rDBEpiksOtxVDZOO3jsnkR/7QAwAhQjsP0t7MqFxPvTMbO', '82749572935', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-28 00:52:52', '2023-02-28 00:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_03_054002_create_sessions_table', 1),
(7, '2023_02_04_090927_create_categories_table', 2),
(8, '2023_02_04_214249_create_sub_categories_table', 3),
(9, '2023_02_05_020719_create_brands_table', 4),
(10, '2023_02_05_044702_create_units_table', 5),
(11, '2023_02_05_172737_create_products_table', 6),
(12, '2023_02_05_173941_create_other_images_table', 6),
(17, '2023_02_13_015814_create_customers_table', 7),
(18, '2023_02_13_015835_create_orders_table', 7),
(19, '2023_02_13_015909_create_order_details_table', 7),
(20, '2023_02_15_181033_add_payment_amount_to_orders_table', 7),
(21, '2023_02_16_045549_add_user_type_to_users_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_total` int(11) NOT NULL,
  `tax_total` int(11) NOT NULL,
  `shipping_total` int(11) NOT NULL,
  `order_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_timestamp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `delivery_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `delivery_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_timestamp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `payment_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_timestamp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_amount` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_total`, `tax_total`, `shipping_total`, `order_date`, `order_timestamp`, `order_status`, `delivery_address`, `delivery_status`, `delivery_date`, `delivery_timestamp`, `payment_method`, `payment_status`, `payment_date`, `payment_timestamp`, `currency`, `transaction_id`, `created_at`, `updated_at`, `payment_amount`) VALUES
(1, 1, 4009, 490, 250, '2023-02-16', '1676505600', 'Complete', 'Mirpur', 'Complete', '2023-02-28', '1677542400', '1', 'Complete', '2023-02-28', '1677542400', NULL, NULL, '2023-02-15 20:54:05', '2023-02-27 20:00:09', 0),
(2, 1, 354, 14, 250, '2023-02-16', '1676505600', 'Complete', 'Taltola, Dhaka, Bangladesh', 'complete', '2023-02-16', '1676505600', '1', 'complete', '2023-02-16', '1676505600', NULL, NULL, '2023-02-15 20:55:30', '2023-02-15 21:02:48', 320),
(4, 3, 1035250, 135000, 250, '2023-02-23', '1677110400', 'Complete', 'Jessore', 'complete', '2023-02-23', '1677110400', '1', 'complete', '2023-02-23', '1677110400', NULL, NULL, '2023-02-23 10:58:06', '2023-02-23 11:03:37', 0),
(11, 4, 208285, 27135, 250, '2023-02-27', '1677456000', 'Pending', 'Mirpur', 'pending', NULL, NULL, '2', 'pending', NULL, NULL, 'BDT', '63fcd1492a44f', NULL, NULL, 0),
(12, 4, 208285, 27135, 250, '2023-02-27', '1677456000', 'Pending', 'Mirpur', 'pending', NULL, NULL, '2', 'pending', NULL, NULL, 'BDT', '63fcd1a610048', NULL, NULL, 0),
(13, 4, 208285, 27135, 250, '2023-02-27', '1677456000', 'Pending', 'Mirpur', 'pending', NULL, NULL, '2', 'pending', NULL, NULL, 'BDT', '63fcd1b107ed3', NULL, NULL, 0),
(14, 4, 208285, 27135, 250, '2023-02-27', '1677456000', 'Pending', 'Mirpur', 'pending', NULL, NULL, '2', 'pending', NULL, NULL, 'BDT', '63fcd1bce3ccd', NULL, NULL, 0),
(15, 5, 108025, 14058, 250, '2023-02-27', '1677456000', 'Processing', 'Hongkong', 'pending', NULL, NULL, '2', 'pending', NULL, NULL, 'BDT', '63fcd2b6b7cc0', NULL, NULL, 0),
(16, 6, 1458, 158, 250, '2023-02-27', '1677456000', 'Processing', 'Jhalukathi', 'pending', NULL, NULL, '2', 'pending', NULL, NULL, 'BDT', '63fcdeda42bee', NULL, NULL, 0),
(17, 7, 354, 14, 250, '2023-02-27', '1677456000', 'Pending', 'India', 'pending', NULL, NULL, '1', 'pending', NULL, NULL, NULL, NULL, '2023-02-27 10:50:43', '2023-02-27 10:50:43', 0),
(18, 8, 1285, 135, 250, '2023-02-27', '1677456000', 'Processing', 'Taltola', 'pending', NULL, NULL, '2', 'pending', NULL, NULL, 'BDT', '63fce25528962', NULL, NULL, 0),
(19, 9, 6053, 757, 250, '2023-02-27', '1677456000', 'Processing', 'Pirojpur', 'pending', NULL, NULL, '2', 'pending', NULL, NULL, 'BDT', '63fce9fbb02d3', NULL, NULL, 0),
(20, 10, 354, 14, 250, '2023-02-27', '1677456000', 'Processing', 'Bangkok', 'pending', NULL, NULL, '2', 'pending', NULL, NULL, 'BDT', '63fced85eeac8', NULL, NULL, 0),
(21, 10, 1285, 135, 250, '2023-02-27', '1677456000', 'Processing', 'Pallabi', 'pending', NULL, NULL, '2', 'pending', NULL, NULL, 'BDT', '63fcf0857a08a', NULL, NULL, 0),
(22, 11, 4525, 558, 250, '2023-02-27', '1677456000', 'Pending', 'West Kafrul', 'pending', NULL, NULL, '2', 'pending', NULL, NULL, 'BDT', '63fcf36e8adde', NULL, NULL, 0),
(23, 11, 4525, 558, 250, '2023-02-27', '1677456000', 'Processing', 'West Kafrul', 'pending', NULL, NULL, '2', 'pending', NULL, NULL, 'BDT', '63fcf38faeaea', NULL, NULL, 0),
(24, 12, 1561, 171, 250, '2023-02-28', '1677542400', 'Complete', 'America', 'Complete', '2023-02-28', '1677542400', '2', 'Complete', '2023-02-28', '1677542400', 'BDT', '63fd64eb3c51d', NULL, '2023-02-27 20:26:14', 1561),
(25, 12, 457, 27, 250, '2023-02-28', '1677542400', 'Processing', 'Israil', 'Pending', NULL, NULL, '2', 'Pending', NULL, NULL, 'BDT', '63fd676ed774a', NULL, NULL, 0),
(26, 13, 5425, 675, 250, '2023-02-28', '1677542400', 'Processing', '60 fit', 'Processing', NULL, NULL, '1', 'Processing', NULL, NULL, NULL, NULL, '2023-02-28 00:41:19', '2023-02-28 00:46:19', 0),
(27, 14, 1675, 186, 250, '2023-02-28', '1677542400', 'Processing', 'Mouchak', 'Pending', NULL, NULL, '2', 'Pending', NULL, NULL, 'BDT', '63fda4c8c5a45', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 7, 'Lather Jacket', 800, 1, '2023-02-15 20:54:05', '2023-02-15 20:54:05'),
(2, 1, 6, 'Instant Pot Duo Crisp Ultimate Lid', 1239, 1, '2023-02-15 20:54:05', '2023-02-15 20:54:05'),
(3, 1, 5, 'HP Probook Laptop', 90, 1, '2023-02-15 20:54:05', '2023-02-15 20:54:05'),
(4, 1, 4, 'Dark-Grey Mobile Charger', 90, 1, '2023-02-15 20:54:06', '2023-02-15 20:54:06'),
(5, 1, 2, 'Electronics Black Wrist Watch', 1050, 1, '2023-02-15 20:54:06', '2023-02-15 20:54:06'),
(6, 2, 4, 'Dark-Grey Mobile Charger', 90, 1, '2023-02-15 20:55:30', '2023-02-15 20:55:30'),
(8, 4, 8, '800W Generator Motor TP 7912-81', 90000, 10, '2023-02-23 10:58:06', '2023-02-23 10:58:06'),
(9, 11, 7, 'Lather Jacket', 900, 1, '2023-02-27 09:50:33', '2023-02-27 09:50:33'),
(10, 11, 8, '800W Generator Motor TP 7912-81', 90000, 2, '2023-02-27 09:50:34', '2023-02-27 09:50:34'),
(11, 15, 8, '800W Generator Motor TP 7912-81', 90000, 1, '2023-02-27 09:56:39', '2023-02-27 09:56:39'),
(12, 15, 6, 'Instant Pot Duo Crisp Ultimate Lid', 1239, 3, '2023-02-27 09:56:39', '2023-02-27 09:56:39'),
(13, 16, 2, 'Electronics Black Wrist Watch', 1050, 1, '2023-02-27 10:48:26', '2023-02-27 10:48:26'),
(14, 17, 5, 'HP Probook Laptop', 90, 1, '2023-02-27 10:50:43', '2023-02-27 10:50:43'),
(15, 18, 7, 'Lather Jacket', 900, 1, '2023-02-27 11:03:17', '2023-02-27 11:03:17'),
(16, 19, 4, 'Dark-Grey Mobile Charger', 90, 1, '2023-02-27 11:35:56', '2023-02-27 11:35:56'),
(17, 19, 6, 'Instant Pot Duo Crisp Ultimate Lid', 1239, 4, '2023-02-27 11:35:56', '2023-02-27 11:35:56'),
(18, 20, 4, 'Dark-Grey Mobile Charger', 90, 1, '2023-02-27 11:51:02', '2023-02-27 11:51:02'),
(19, 21, 7, 'Lather Jacket', 900, 1, '2023-02-27 12:03:49', '2023-02-27 12:03:49'),
(20, 22, 6, 'Instant Pot Duo Crisp Ultimate Lid', 1239, 3, '2023-02-27 12:16:14', '2023-02-27 12:16:14'),
(21, 24, 4, 'Dark-Grey Mobile Charger', 90, 1, '2023-02-27 20:20:28', '2023-02-27 20:20:28'),
(22, 24, 2, 'Electronics Black Wrist Watch', 1050, 1, '2023-02-27 20:20:28', '2023-02-27 20:20:28'),
(23, 25, 5, 'HP Probook Laptop', 90, 2, '2023-02-27 20:31:11', '2023-02-27 20:31:11'),
(24, 26, 7, 'Lather Jacket', 900, 5, '2023-02-28 00:41:19', '2023-02-28 00:41:19'),
(25, 27, 6, 'Instant Pot Duo Crisp Ultimate Lid', 1239, 1, '2023-02-28 00:52:56', '2023-02-28 00:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `other_images`
--

CREATE TABLE `other_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_images`
--

INSERT INTO `other_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(27, 4, 'product-other-images/25677.jpg', '2023-02-09 02:30:40', '2023-02-09 02:30:40'),
(45, 2, 'product-other-images/29225.jpg', '2023-02-27 22:41:47', '2023-02-27 22:41:47'),
(46, 2, 'product-other-images/41716.jpg', '2023-02-27 22:41:47', '2023-02-27 22:41:47'),
(50, 8, 'product-other-images/44729.jpg', '2023-02-27 23:13:42', '2023-02-27 23:13:42'),
(52, 7, 'product-other-images/49447.jpg', '2023-02-27 23:32:48', '2023-02-27 23:32:48'),
(53, 6, 'product-other-images/16079.jpg', '2023-02-27 23:47:41', '2023-02-27 23:47:41'),
(54, 5, 'product-other-images/36995.jpg', '2023-02-27 23:58:24', '2023-02-27 23:58:24');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_amount` int(11) NOT NULL,
  `regular_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `hit_count` int(11) NOT NULL DEFAULT 0,
  `featured_count` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `brand_id`, `unit_id`, `name`, `code`, `stock_amount`, `regular_price`, `selling_price`, `short_description`, `long_description`, `image`, `status`, `hit_count`, `featured_count`, `created_at`, `updated_at`) VALUES
(2, 5, 5, 5, 2, 'Electronics Black Wrist Watch', 'ebww', 994, 1200, 1050, 'Ultrices eros in cursus turpis massa cursus mattis.', '<p style=\"margin: 10px 0px; outline: none; padding: 0px; line-height: 30px; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; outline: none; padding: 0px;\">Main Function</strong></p><ul style=\"margin: 12px 0px; outline: none; padding: 0px 0px 0px 36px; list-style-position: initial; list-style-image: initial; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\"><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Heart Rate, ECG, Blood pressure, Blood oxygen, pedometer, Stopwatch, Alarm clock, Music control，Remote camera.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Bluetooth Push: Calling, SMS, Wechat, WhatsApp etc. Content synchronization display (Supports languages for 170 countries and regions) call reminder, message reminder, many social software reminders.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Heart Rate Monitor: 24 hours heart rate monitoring.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Pedometer: Exercise steps, calorie burned, mileage records.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Sleep Monitor: Automatically ON from 9pm to 9am every night.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Call Reminder: Support call Decline.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Multiple Modes of Motion: walking, running, swimming, climbing, cycling, Football, basketball, table tennis, badminton etc.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Sedentary Reminder: You can set time to remind yourself stand up.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Find Your Phone: Tap it and phone makes a ringtone alert.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Wrist Bright Screen: Set it in the App, it takes more power consumption when it is on.</li></ul><p style=\"margin: 10px 0px; outline: none; padding: 0px; line-height: 30px; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; outline: none; padding: 0px;\">Parameters</strong></p><ul style=\"margin: 12px 0px; outline: none; padding: 0px 0px 0px 36px; list-style-position: initial; list-style-image: initial; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\"><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Chipset: Nordic nrf52840, 64 MHz.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Product Modeling: Sports health watch.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Watch Case: Alloy watchcase, plating fingerprint - proof mineral glass mirror, plastic back case.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Watch Band: Edible grade silicone watchband.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Charge Base: Magnetic charging.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Main Screen: 1.2 inch AMOLED round screen, resolution 390*390.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Touch Screen: Full fit multi-touch.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Bluetooth Version: Bluetooth 5.1.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Vibrator: Support.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">APP Name: HPlusFit.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">APP Support Language: Chinese, English, Japanese, Russian, Spanish, French, Italian, German, Portuguese, Greek, Dutch, Polish, Thai, Arabic.</li></ul><p style=\"margin: 10px 0px; outline: none; padding: 0px; line-height: 30px; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; outline: none; padding: 0px;\">Package Included</strong></p><ul style=\"margin: 12px 0px; outline: none; padding: 0px 0px 0px 36px; list-style-position: initial; list-style-image: initial; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px;\"><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">1* Original SG3 Smart Watch.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">1* Magnetic Charger.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">1* English Manual.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">1* Original Box.</li><li style=\"margin: 0px; outline: none; padding: 0px; text-align: left;\">Color: Random.</li></ul>', 'product-images/1675931271.jpg', 1, 0, 0, '2023-02-05 21:11:27', '2023-02-27 23:06:08'),
(4, 5, 7, 3, 2, 'Dark-Grey Mobile Charger', 'dgmc', 995, 130, 90, 'Pack 15000mAh Dual USB Power Bank Output 5V3.1A \r\nFast Charging Portable Charger \r\nCompatible with Smartphones and All USB Devices', '<h2 class=\"ProductDescription__title\" style=\"box-sizing: inherit; font-size: 14px; font-weight: 600; margin-bottom: 15px;\">Description</h2><div class=\"ProductDescription__text \" style=\"box-sizing: inherit; font-size: 14px; padding-bottom: 50px; position: relative; overflow-wrap: break-word;\"><div itemprop=\"description\" style=\"box-sizing: inherit;\"><div class=\"LinesEllipsis  \" style=\"box-sizing: inherit; color: rgba(0, 0, 0, 0.87); font-family: Lato, sans-serif;\"><div style=\"box-sizing: inherit;\"><div style=\"box-sizing: inherit;\"><ul style=\"box-sizing: inherit; padding-left: 16px;\"><li style=\"box-sizing: inherit;\">Power Bank has 15000 mAh ultra-high capacity can give you an excellent battery life experience. Keep Your phone running all day.Without extra worry about low phone battery.The shell adopts the imitation metal wire drawing process, which is more wear-resistant than other smooth ordinary styles. The ergonomic arc design is easy to hold and feels comfortable..</li><li style=\"box-sizing: inherit;\">Portable Charger with 5V 3.1A 2 USB Output ports ,which can fast charge 2 devices at the same time.You can share with your companions to get rid of worries about the remaining battery power of your phone. The Type-C input and Micro USB input ports can fully refill the battery itself in 4-5 hrs at 5V 2.0A.(Note: Type-C port can only input, does not support output).</li><li style=\"box-sizing: inherit;\">Portable Chargers are very compact ,they are not only for portable charging but also around the home making it a favorite for travel.You could benefit from these battery packs When you go out.Allowing you charge mobile devices without having to be tethered to a plug socket. You could get more convenience and happiness from these high-quality power banks..</li><li style=\"box-sizing: inherit;\">Power bank bulit-in Intelliegent Controlling IC can automatically identify and is universally compatible with all products, It switches the corresponding current and voltage to charge the device. Also IC can convert fluctuating current into stable current, It can effectively prevent your power bank overcharge, overvoltage, overcurrent and short circuit.Bring you the safe using experience..</li><li style=\"box-sizing: inherit;\">Power bank uses the safe high-density lithium polymer battery module, which is more compact and has a larger battery capacity, It exceeds the traditional Lithium ion battery on safety.The safety of customers is our most concerned about ,Customer satisfaction is our greatest motivation. We sincerely hope that this shopping experience will bring you good memory..</li></ul><ul style=\"box-sizing: inherit; padding-left: 16px;\"><li style=\"box-sizing: inherit;\"><span class=\"import_usa\" style=\"box-sizing: inherit;\">Imported from USA (Sizes &amp; Specifications are based on the USA Market)</span>.</li></ul><div><br></div></div></div></div></div></div>', 'product-images/1675931374.jpg', 1, 0, 0, '2023-02-09 00:35:49', '2023-02-27 20:20:28'),
(5, 5, 8, 2, 2, 'HP Probook Laptop', 'hpl', 996, 100, 90, 'abcd', '<table id=\"gadget-specs\" class=\"item_specification\" cellspacing=\"0\" cellpadding=\"5\" style=\"font-size: 12px; font-family: tahoma, Helvetica, sans-serif; padding: 0px; margin: 15px 0px 0px; border-width: 5px 1px 1px; border-style: solid; border-color: rgb(204, 204, 204); border-image: initial; width: 702px; border-spacing: 0px; color: rgb(102, 102, 102);\"><thead><tr><th colspan=\"3\" style=\"padding: 12px 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(16, 35, 138); text-align: right; line-height: 20px; white-space: nowrap;\"><h2 class=\"h2default\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: 16px; color: rgb(16, 35, 138); text-align: center; border: 0px;\"><strong style=\"padding: 0px; margin: 0px;\">HP Victus Gaming Laptop 15 Specification (fb0103AX)</strong></h2></th></tr></thead><tbody><tr><th class=\"title\" colspan=\"2\" style=\"padding: 8px 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 16px; color: rgb(16, 35, 138); text-align: center; line-height: 20px; white-space: nowrap;\">Release</th></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Release Status</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">Release 2023, Feb</td></tr><tr><th class=\"title\" colspan=\"2\" style=\"padding: 8px 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 16px; color: rgb(16, 35, 138); text-align: center; line-height: 20px; white-space: nowrap;\">Performance</th></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Processor</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">AMD Ryzen™ 5 5600H</td></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Max Clock Speed</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">4.2 GHz</td></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">GPU</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">NVIDIA® GeForce® GTX 1650 Laptop GPU (4 GB GDDR6 dedicated)</td></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">RAM</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">8 GB DDR4-3200 MHz RAM (1 x 8 GB)</td></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">SSD</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">512 GB PCIe® NVMe™ TLC M.2 SSD</td></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">OS</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">Windows 11 Home Single Language</td></tr><tr><th class=\"title\" colspan=\"2\" style=\"padding: 8px 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 16px; color: rgb(16, 35, 138); text-align: center; line-height: 20px; white-space: nowrap;\">Display</th></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Display Size</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">39.6 cm (15.6\") diagonal, FHD (1920 x 1080), 144 Hz</td></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Display Type</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">9 ms response time, IPS, micro-edge, anti-glare, 250 nits, 45% NTSC</td></tr><tr><th class=\"title\" colspan=\"2\" style=\"padding: 8px 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 16px; color: rgb(16, 35, 138); text-align: center; line-height: 20px; white-space: nowrap;\">Power &amp; Battery</th></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Power Adapter</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">150 W Smart AC power adapter</td></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Battery Capacity</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">3-cell, 52.5 Wh Li-ion polymer</td></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Battery Hour</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">Up to 10 hours and 45 minutes</td></tr><tr><th class=\"title\" colspan=\"2\" style=\"padding: 8px 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 16px; color: rgb(16, 35, 138); text-align: center; line-height: 20px; white-space: nowrap;\">Body</th></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Dimension</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">35.79 x 25.5 x 2.35 cm</td></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Weight</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">2.29 kg</td></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Colors</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">Ceramic white, black chrome logo</td></tr><tr><th class=\"title\" colspan=\"2\" style=\"padding: 8px 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 16px; color: rgb(16, 35, 138); text-align: center; line-height: 20px; white-space: nowrap;\">IO and Ports</th></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">IO Ports</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">1 USB Type-C® 5Gbps signaling rate (DisplayPort™ 1.4, HP Sleep and Charge)<br>1 USB Type-A 5Gbps signaling rate (HP Sleep and Charge)<br>1 USB Type-A 5Gbps signaling rate<br>1 AC smart pin<br>1 HDMI 2.1<br>1 headphone/microphone combo<br>1 RJ-45<br>1 multi-format SD media card reader</td></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Camera</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">HP Wide Vision 720p HD camera with temporal noise reduction and integrated dual array digital microphones</td></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Keyboard</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">Full-size, backlit, ceramic white keyboard with numeric keypad</td></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Touchpad</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">HP Imagepad with multi-touch gesture support; Precision Touchpad support</td></tr><tr><th class=\"title\" colspan=\"2\" style=\"padding: 8px 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 16px; color: rgb(16, 35, 138); text-align: center; line-height: 20px; white-space: nowrap;\">Connectivity</th></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">WIFI</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">MediaTek Wi-Fi 6 MT7921 (2x2)</td></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Bluetooth</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">Bluetooth® 5.3 wireless card (supporting gigabit d</td></tr><tr><th class=\"title\" colspan=\"2\" style=\"padding: 8px 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 16px; color: rgb(16, 35, 138); text-align: center; line-height: 20px; white-space: nowrap;\">Audio</th></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Speaker</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">Audio by B&amp;O; Dual speakers; HP Audio Boost</td></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Mic</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">Integrated dual array digital microphones</td></tr><tr><th class=\"title\" colspan=\"2\" style=\"padding: 8px 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 16px; color: rgb(16, 35, 138); text-align: center; line-height: 20px; white-space: nowrap;\">Others</th></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Software</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">McAfee LiveSafe™</td></tr><tr><th style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); vertical-align: top; border-collapse: collapse; background-color: rgb(228, 228, 228); font-size: 14px; color: rgb(125, 116, 100); text-align: right; line-height: 20px; white-space: nowrap;\">Warranty</th><td style=\"padding-right: 5px; padding-left: 5px; margin: 0px; border-color: rgb(204, 204, 204); font-size: 14px; color: rgb(51, 51, 51);\">2 Years On-site Warranty + ADP</td></tr></tbody></table>', 'product-images/1677563904.jpg', 1, 0, 0, '2023-02-09 02:57:47', '2023-02-28 00:00:48'),
(6, 9, 9, 5, 1, 'Instant Pot Duo Crisp Ultimate Lid', 'pc32', 988, 1300, 1239, 'Available at a lower price from other sellers that may not offer free Prime shipping.', '<h1 class=\"a-size-base-plus a-text-bold\" style=\"padding: 0px 0px 4px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; text-rendering: optimizelegibility; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-weight: 700 !important; font-size: 16px !important; line-height: 24px !important;\">About this item</h1><ul class=\"a-unordered-list a-vertical a-spacing-none\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 18px; padding: 0px;\"><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">13-in-1 FUNCTIONALITY: Air Fryer, Pressure Cooker, Sauté, Slow Cook, Steam, Warm, Roast, Bake, Broil, Dehydrate, Yogurt, Sous Vide and Bread Proofing</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">THE INSTANT POT THAT AIR FRIES: From the makers of the best-selling Duo series comes a pressure cooker and air fryer combo, with removable air fryer cover.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">EASY-TO-READ INSTRUCTIONS: The only multi-cooker with step-by-step cooking instructions on a large LCD display making cooking simple!</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">STAINLESS STEAL AIR FRYER COVER: We thought everything! Protective inner stainless steal cover keeps the air frying heating unit clean during pressure cooking.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">WHISPER QUIET STEAM RELEASE: Featuring an advanced steam release technology for quietest steam release and a steam release button on Large LCD Panel, instructing the user that it is \"ok to open lid\".</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">EVENCRISP TECHNOLOGY: The included air fryer lid delivers all the crunch and tenderness of deep-frying with 95% less oil.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">DISCOVER AMAZING RECIPES: Download our free Instant Pot app, so you can create quick new favorites and prepare delicious meals, available iOS and Android.</span></li></ul><div class=\"a-row a-expander-container a-expander-inline-container\" style=\"width: 320.1px; color: rgb(15, 17, 17); font-family: &quot;Amazon Ember&quot;, Arial, sans-serif; font-size: 14px;\"><div aria-expanded=\"true\" class=\"a-expander-content a-expander-extend-content a-expander-content-expanded\" style=\"overflow: hidden;\"></div></div>', 'product-images/1677563232.jpg', 1, 0, 0, '2023-02-09 21:10:32', '2023-02-28 00:52:56'),
(7, 1, 10, 6, 2, 'Lather Jacket', 'lt35', 991, 1200, 900, 'Main Material: Aritifical Leather\r\nGender: Men\r\nBrand: Jony E Shop\r\nSleeve: Long Sleeve\r\nColor: Black\r\nQuality: 100% export quality.', '<h2 class=\"pdp-mod-section-title outer-title\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 24px; font-family: Roboto-Medium; font-size: 16px; line-height: 52px; color: rgb(33, 33, 33); overflow: hidden; text-overflow: ellipsis; white-space: nowrap; height: 52px; background: rgb(250, 250, 250);\">Product details of GC Men Leather Jacket Slim Fit Motorcycle Jacket Zipper Casual Coat Spring Autumn Winter</h2><div class=\"pdp-product-detail\" data-spm=\"product_detail\" style=\"margin: 0px; padding: 0px; position: relative; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px;\"><div class=\"pdp-product-desc \" style=\"margin: 0px; padding: 5px 14px 5px 24px; height: auto; overflow-y: hidden;\"><div class=\"html-content pdp-product-highlights\" style=\"margin: 0px; padding: 11px 0px 16px; word-break: break-word; border-bottom: 1px solid rgb(239, 240, 245); overflow: hidden;\"><ul class=\"\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; overflow: hidden; columns: auto 2; column-gap: 32px;\"><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">-- Comfortable material: soft, breathable, feels smooth, comfortable to wear..</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">-- Fashionable design: simple solid color, slim fit, making you look cool..</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">-- Warm keeping: windproof, keeping you warm in cold days..</li></ul></div><div class=\"html-content detail-content\" style=\"margin: 16px 0px 0px; padding: 0px 0px 16px; word-break: break-word; position: relative; height: auto; line-height: 19px; overflow-y: hidden; border-bottom: 1px solid rgb(239, 240, 245);\"><span style=\"margin: 0px; padding: 0px;\"></span><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 8px 0px; font-size: 14px; white-space: pre-wrap;\"><span style=\"margin: 0px; padding: 0px;\">Description:</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 8px 0px; font-size: 14px; white-space: pre-wrap;\"><span style=\"margin: 0px; padding: 0px;\">Product type: jacket</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 8px 0px; font-size: 14px; white-space: pre-wrap;\"><span style=\"margin: 0px; padding: 0px;\">Collar type: lapel</span><span innertext=\"\" style=\"margin: 0px; padding: 0px;\"></span><span style=\"margin: 0px; padding: 0px;\">Garment pocket style: side seaming pocket</span><span innertext=\"\" style=\"margin: 0px; padding: 0px;\"></span><span style=\"margin: 0px; padding: 0px;\">Leather type: PU leather</span><span innertext=\"\" style=\"margin: 0px; padding: 0px;\"></span><span style=\"margin: 0px; padding: 0px;\">Hooded or not: not hooded</span><span innertext=\"\" style=\"margin: 0px; padding: 0px;\"></span><span style=\"margin: 0px; padding: 0px;\">Front: zip</span><span innertext=\"\" style=\"margin: 0px; padding: 0px;\"></span><span style=\"margin: 0px; padding: 0px;\">Applicable gender: male</span><span innertext=\"\" style=\"margin: 0px; padding: 0px;\"></span><span style=\"margin: 0px; padding: 0px;\">Applicable scene: casual</span><span innertext=\"\" style=\"margin: 0px; padding: 0px;\"></span><span style=\"margin: 0px; padding: 0px;\">Size:Length,Bust,sleeve,Shoulder</span><span innertext=\"\" style=\"margin: 0px; padding: 0px;\"></span><span style=\"margin: 0px; padding: 0px;\">M:61cm,100cm,60cm,45cm</span><span innertext=\"\" style=\"margin: 0px; padding: 0px;\"></span><span style=\"margin: 0px; padding: 0px;\">L:63cm,104cm,61.5cm,46.2cm</span><span innertext=\"\" style=\"margin: 0px; padding: 0px;\"></span><span style=\"margin: 0px; padding: 0px;\">XL:65cm,108cm,63cm,47.4cm</span><span innertext=\"\" style=\"margin: 0px; padding: 0px;\"></span><span style=\"margin: 0px; padding: 0px;\">2XL:67cm,112cm,64.5cm,48.6cm</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 8px 0px; font-size: 14px; white-space: pre-wrap;\"><span style=\"margin: 0px; padding: 0px;\">Packing list:</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 8px 0px; font-size: 14px; white-space: pre-wrap;\"><span style=\"margin: 0px; padding: 0px;\">1 * Jacket</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 8px 0px; font-size: 14px; white-space: pre-wrap;\"><span style=\"margin: 0px; padding: 0px;\">Note:</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 8px 0px; font-size: 14px; white-space: pre-wrap;\"><span style=\"margin: 0px; padding: 0px;\">There might be a measurement tolerance of 1-3 cm due to different measuring methods, please refer to the size chart to choose a suitable size, and you can email us for suggestion if not sure about it.</span></p><p data-spm-anchor-id=\"a2a0e.pdp.product_detail.i0.7b90CAL6CAL6Dn\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 8px 0px; font-size: 14px; white-space: pre-wrap;\"><span style=\"margin: 0px; padding: 0px;\">Color deviation might exist due to different monitor settings and light, please kindly understand.</span></p></div></div></div>', 'product-images/1677562274.jpg', 1, 0, 0, '2023-02-09 21:19:04', '2023-02-28 00:41:19'),
(8, 5, 6, 6, 2, 'Pureit Classic Water Purifier 23L', 'gn800', 37, 100000, 90000, 'Copper Range: Use CODE ‘HEALTHYCOPPER’ for Copper Range & get upto additional 10% Off\r\nRO UV & ECO RANGE: Use Code ‘CLASSICPURITY’ for selected UV Range & get upto additional 10% Off on selected devices\r\nVital Range: Use CODE ‘FILTRAPOWER’ for Vital Range & get upto additional 12% Off', '<h2 class=\"pdp-mod-section-title outer-title\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 24px; font-family: Roboto-Medium; font-size: 16px; line-height: 52px; color: rgb(33, 33, 33); overflow: hidden; text-overflow: ellipsis; white-space: nowrap; height: 52px; background: rgb(250, 250, 250);\">Product details of Pureit Classic Water Purifier 23L</h2><div class=\"pdp-product-detail\" data-spm=\"product_detail\" style=\"margin: 0px; padding: 0px; position: relative; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px;\"><div class=\"pdp-product-desc \" style=\"margin: 0px; padding: 5px 14px 5px 24px; height: auto; overflow-y: hidden;\"><div class=\"html-content pdp-product-highlights\" style=\"margin: 0px; padding: 11px 0px 16px; word-break: break-word; border-bottom: 1px solid rgb(239, 240, 245); overflow: hidden;\"><ul class=\"\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; overflow: hidden; columns: auto 2; column-gap: 32px;\"><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Virus Removal: Removes 1 crore virus in 1 litre of water</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Activated Carbon Trap: Removes harmful pesticides to make water safe for consumption</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">HIPS / ABS body: Made of strong plastic to ensure the purifier has a long life</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Multi-Stage Purification: Purification process through Programmed Germkill Technology</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Break-Resistance Tap: Tested up to 50,000 times to ensure that it lasts long</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Total Purifier Volume 23 Litres</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Water Storage Capacity 9 litres</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">#UnileverBangladesh</li><li class=\"\" style=\"margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">#WaterFilter</li></ul></div><div class=\"html-content detail-content\" style=\"margin: 16px 0px 0px; padding: 0px 0px 16px; word-break: break-word; position: relative; height: auto; line-height: 19px; overflow-y: hidden; border-bottom: 1px solid rgb(239, 240, 245);\"><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none;\"><li style=\"margin: 0px; padding: 0px;\">Pureit Classic Water Purifier 23L</li></ul><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none;\"><li style=\"margin: 0px; padding: 0px;\">Virus Removal: Removes 1 crore virus in 1 litre of water</li><li style=\"margin: 0px; padding: 0px;\">Activated Carbon Trap: Removes harmful pesticides to make water safe for consumption</li><li style=\"margin: 0px; padding: 0px;\">HIPS / ABS body: Made of strong plastic to ensure the purifier has a long life</li><li style=\"margin: 0px; padding: 0px;\">Multi-Stage Purification: Purification process through Programmed Germkill Technology</li><li style=\"margin: 0px; padding: 0px;\">Break-Resistance Tap: Tested up to 50,000 times to ensure that it lasts long</li><li style=\"margin: 0px; padding: 0px;\">Total Purifier Volume 23 Litres</li><li style=\"margin: 0px; padding: 0px;\">Water Storage Capacity 9 litres</li><li style=\"margin: 0px; padding: 0px;\">#UnileverBangladesh</li><li data-spm-anchor-id=\"a2a0e.pdp.product_detail.i1.4fe7PCA1PCA10J\" style=\"margin: 0px; padding: 0px;\">#WaterFilter</li></ul></div></div></div>', 'product-images/1677560988.jpg', 1, 0, 0, '2023-02-23 10:53:48', '2023-02-27 23:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('06efIckn1xQx87NgeMp2bgDGDPKwQL2APnGafntM', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36 Edg/106.0.1370.42', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoidnA5Nk1YaVJmb3ZLRnprT1JPQUpZZGdaRWVuakdjMGlXUkZKMXdjeSI7czoxMToiY3VzdG9tZXJfaWQiO2k6MTI7czoxMzoiY3VzdG9tZXJfbmFtZSI7czoxNDoiTWFub2FyIEhvc3NhaW4iO3M6NjoiX2ZsYXNoIjthOjI6e3M6MzoibmV3IjthOjA6e31zOjM6Im9sZCI7YTowOnt9fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvcHJvZHVjdC1kZXRhaWwvNSI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFNCL2s5UHh0dVF4WDFYTzJDakJNRC5XbFpCTWs1bzYvU0FTWXB2dWU1bE1lVGkvRFFIenQuIjt9', 1677564069),
('puJ0W6uPgK4rPliDRDgC4eyIggEo5TEqRQFe4L6Y', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36 Edg/106.0.1370.42', 'YToxMjp7czo2OiJfdG9rZW4iO3M6NDA6IlR3WXBFWG5ybk10aFptVnNUeXd2QUZwY0F4aEpNa1pTbDBnc2JYVFYiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvY2hlY2tvdXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjI2OiI0eVRsVERLdTNvSk9mekRfY2FydF9pdGVtcyI7TzozMjoiRGFycnlsZGVjb2RlXENhcnRcQ2FydENvbGxlY3Rpb24iOjI6e3M6ODoiACoAaXRlbXMiO2E6MTp7aTo2O086MzI6IkRhcnJ5bGRlY29kZVxDYXJ0XEl0ZW1Db2xsZWN0aW9uIjozOntzOjg6IgAqAGl0ZW1zIjthOjY6e3M6MjoiaWQiO2k6NjtzOjQ6Im5hbWUiO3M6MzQ6Ikluc3RhbnQgUG90IER1byBDcmlzcCBVbHRpbWF0ZSBMaWQiO3M6NToicHJpY2UiO2k6MTIzOTtzOjg6InF1YW50aXR5IjtzOjE6IjEiO3M6MTA6ImF0dHJpYnV0ZXMiO086NDE6IkRhcnJ5bGRlY29kZVxDYXJ0XEl0ZW1BdHRyaWJ1dGVDb2xsZWN0aW9uIjoyOntzOjg6IgAqAGl0ZW1zIjthOjM6e3M6NToiaW1hZ2UiO3M6Mjk6InByb2R1Y3QtaW1hZ2VzLzE2Nzc1NjMyMzIuanBnIjtzOjg6ImNhdGVnb3J5IjtzOjk6IkNvb2tlcmllcyI7czo1OiJicmFuZCI7czo4OiJTdGVybGluZyI7fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9czoxMDoiY29uZGl0aW9ucyI7YTowOnt9fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDtzOjk6IgAqAGNvbmZpZyI7YTo2OntzOjE0OiJmb3JtYXRfbnVtYmVycyI7YjowO3M6ODoiZGVjaW1hbHMiO2k6MDtzOjk6ImRlY19wb2ludCI7czoxOiIuIjtzOjEzOiJ0aG91c2FuZHNfc2VwIjtzOjE6IiwiO3M6Nzoic3RvcmFnZSI7TjtzOjY6ImV2ZW50cyI7Tjt9fX1zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fXM6MTE6Im9yZGVyX3RvdGFsIjtkOjE2NzQuODU7czo5OiJ0YXhfdG90YWwiO2Q6MTg1Ljg1O3M6MTQ6InNoaXBwaW5nX3RvdGFsIjtpOjI1MDtzOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRTQi9rOVB4dHVReFgxWE8yQ2pCTUQuV2xaQk1rNW82L1NBU1lwdnVlNWxNZVRpL0RRSHp0LiI7czoxMToiY3VzdG9tZXJfaWQiO2k6MTQ7czoxMzoiY3VzdG9tZXJfbmFtZSI7czo1OiJIYWJpYiI7fQ==', 1677567172),
('XvLSywGO37pmHwi0pi36ekvAL8VNXDfhKzq1uICY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36 Edg/106.0.1370.42', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiOHdLY0dadFFnRG5qRjFrZ2Y2R2tXcEZWR2hTZ25STHc1QnZzZ3lPUiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1677567303),
('YWobV2jIAL1hbvrQ0v6eUmT1ng3fWgCFskDU6Fzs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36 Edg/106.0.1370.42', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoia0RESVlDalNUS3NWanM5S2xxdDNqWWE2WVdhUmJ1S1J5cHV0WW9zNSI7czoxMToiY3VzdG9tZXJfaWQiO2k6MTQ7czoxMzoiY3VzdG9tZXJfbmFtZSI7czo1OiJIYWJpYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb21wbGV0ZS1vcmRlciI7fX0=', 1677567193);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'T-Shirt', 'T-Shirt Description', 'sub-category-images/1675561815.jpg', 1, '2023-02-04 16:18:52', '2023-02-04 19:50:15'),
(3, 2, 'Borka', 'Borka Description', 'sub-category-images/1675562361.jpg', 1, '2023-02-04 19:59:21', '2023-02-04 19:59:21'),
(4, 8, 'Bata', 'Bata Description', 'sub-category-images/1675617629.jpg', 1, '2023-02-05 11:19:39', '2023-02-05 11:20:29'),
(5, 5, 'Watch', 'Watch Description', 'sub-category-images/1675650185.jpg', 1, '2023-02-05 20:23:05', '2023-02-05 20:23:05'),
(6, 1, 'Belt', 'Belt Description', 'sub-category-images/1675697591.jpg', 1, '2023-02-06 09:33:12', '2023-02-06 09:33:12'),
(7, 5, 'Mobile Charger', 'Mobile Charger Description', 'sub-category-images/1675924129.jpg', 1, '2023-02-09 00:28:49', '2023-02-09 00:28:49'),
(8, 5, 'Laptop', 'Laptop Description', 'sub-category-images/1675932742.jpg', 1, '2023-02-09 02:52:22', '2023-02-09 02:52:22'),
(9, 9, 'Pressure Cooker', 'Pressure Cooker Description', 'sub-category-images/1675998490.jpg', 1, '2023-02-09 21:08:10', '2023-02-09 21:08:10'),
(10, 1, 'Lather Jacket', 'Leather Jacket Description', 'sub-category-images/1675998990.jpg', 1, '2023-02-09 21:16:30', '2023-02-09 21:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `code`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Box', 'bx23', 'Box Description', 1, '2023-02-05 10:54:21', '2023-02-05 10:54:21'),
(2, 'Piece', 'psc', 'Piece Description', 1, '2023-02-05 10:55:07', '2023-02-05 10:55:07'),
(4, 'Pair', 'p', 'Pair Description', 1, '2023-02-05 11:17:03', '2023-02-05 11:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_type` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `user_type`) VALUES
(1, 'Mahmud', 'mdmahmudul413@gmail.com', NULL, '$2y$10$SB/k9PxtuQxX1XO2CjBMD.WlZBMk5o6/SASYpvue5lMeTi/DQHzt.', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-02 23:53:52', '2023-02-16 22:06:38', 1),
(2, 'Mahadi', 'mahadi@gmail.com', NULL, '$2y$10$mNtfowiN.Y8H1f/sl30l0udhOVRBLlFP4BZLai4NjyPUvLOUy091C', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-15 23:00:40', '2023-02-16 21:46:25', 2),
(5, 'Sagor', 'sagor@gmail.com', NULL, '$2y$10$higCYHes4yvt/okEunFdRuU6udbKFbtITgQzGK6nXUjboBExVAdOS', NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-16 21:36:55', '2023-02-16 22:05:32', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD UNIQUE KEY `customers_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `customers_nid_unique` (`nid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_images`
--
ALTER TABLE `other_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `other_images`
--
ALTER TABLE `other_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
