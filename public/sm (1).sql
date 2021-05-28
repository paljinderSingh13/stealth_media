-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2021 at 10:15 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pos', 'super@admin.com', NULL, '$2y$10$xa8z1W4uy71e.5glLNrZn.gIb2QiCtb2trCs69xU1xHl2NPCUdm2m', NULL, '2020-08-25 02:46:21', '2020-08-25 02:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_25_061713_create_roles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prod_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sales` int(191) DEFAULT NULL,
  `stock` int(191) DEFAULT NULL,
  `imei` bigint(191) NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prod_name`, `category`, `brand`, `supplier`, `model`, `color`, `sales`, `stock`, `imei`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Iphone 10 pro', 'Smart Phone', 'Apple', 'Logitechno', '2019', 'Midnight Black', 20, 20, 36547896542344, NULL, NULL, '2020-10-02 00:23:31'),
(2, 'S10 Lite', 'Smart Phone', 'Samsung', 'Brisknet', '2018', 'Baby Pink', 4, 25, 3546975214565, NULL, NULL, NULL),
(4, 'Iphone 11', 'Smart Phone', 'Apple', 'Avintic', '2019', NULL, 230, 3453, 357346101738397, NULL, '2020-09-30 00:40:10', '2020-10-01 06:40:16'),
(5, 'One Plus nord', 'Smart Phone', 'One Plus', 'Gardien Techno', '2020', NULL, 123, 242, 36447896545254, NULL, '2020-09-30 00:44:33', '2020-09-30 00:44:33'),
(6, 'Iphone 11 Pro Max', 'Smart Phone', 'Apple', 'Bramsters', '2020', NULL, 26, 54, 3524612479, NULL, '2020-09-30 00:58:51', '2020-09-30 00:58:51'),
(7, 'Galaxy M40', 'Smart Phone', 'Samsung', 'Gardien Techno', '2019', NULL, 43, 233, 36465465488, NULL, '2020-09-30 01:06:49', '2020-09-30 01:06:49'),
(8, 'Iphone 8 plus', 'Smart Phone', 'Apple', 'Bramsters', '2016', NULL, 5, 17, 532356595895, NULL, '2020-09-30 01:10:48', '2020-09-30 01:10:48'),
(9, 'Reno 2', 'Smart Phone', 'Oppo', 'Omniscent', '2020', NULL, 23, 765, 3652474125211, NULL, '2020-09-30 01:18:29', '2020-09-30 01:18:29'),
(10, 'Note 20', 'Smart Phone', 'Samsung', 'Bramsters', '2020', NULL, 43, 324, 51465326565, NULL, '2020-09-30 23:51:18', '2020-09-30 23:51:18'),
(11, 'Vivo v 19', 'Smart Phone', 'Vivo', 'kraxets', '2020', NULL, 76, 433, 7456854985, NULL, '2020-10-01 04:49:57', '2020-10-01 04:49:57'),
(12, 'Macbook Air next gen', 'Laptops', 'Apple', 'Currents', '2018', 'White', 234, 456, 56654945669, NULL, '2020-10-01 05:12:41', '2020-10-01 05:42:02'),
(13, 'Macbook pro', 'Laptops', 'Apple', 'Currents', '2020', 'Black', 89, 898, 8498858585, NULL, '2020-10-01 05:16:43', '2020-10-01 05:16:43'),
(14, 'Inferior 2 plus', 'Smart Phone', 'LG', 'Omniscent', '2020', 'Space Bule', 120, 687, 54654354654, NULL, '2020-10-01 05:32:38', '2020-10-01 06:23:17'),
(15, 'Redmi note 8 Pro', 'Smart Phone', 'Xiomi', 'Avintic', '2019', 'Gradient blue', 123, 654, 6548765965865, NULL, '2020-10-01 23:25:35', '2020-10-01 23:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `client_phone` varchar(255) DEFAULT NULL,
  `client_email` varchar(255) DEFAULT NULL,
  `client_address` varchar(255) DEFAULT NULL,
  `sale_id` bigint(20) DEFAULT NULL,
  `website_url` varchar(255) DEFAULT NULL,
  `drive_link` varchar(255) DEFAULT NULL,
  `website_info` varchar(255) DEFAULT NULL,
  `project_status` varchar(255) DEFAULT NULL,
  `test_url` varchar(255) DEFAULT NULL,
  `admin_panel_url` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `hosted_by` varchar(255) DEFAULT NULL,
  `hosted_on` varchar(255) DEFAULT NULL,
  `domain_register` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `cost` varchar(255) DEFAULT NULL,
  `seo` varchar(255) NOT NULL,
  `monthly_maintenance` varchar(255) NOT NULL,
  `technology` varchar(255) DEFAULT NULL,
  `additional_information` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `google_review` varchar(255) DEFAULT NULL,
  `project_testing` varchar(255) DEFAULT NULL,
  `email_password` varchar(255) DEFAULT NULL,
  `webscope_file` varchar(255) DEFAULT NULL,
  `service_agreement_file` varchar(255) DEFAULT NULL,
  `seo_scope_file` varchar(255) DEFAULT NULL,
  `website_training_file` varchar(255) DEFAULT NULL,
  `email_setup_file` varchar(255) DEFAULT NULL,
  `dir_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `client_name`, `client_phone`, `client_email`, `client_address`, `sale_id`, `website_url`, `drive_link`, `website_info`, `project_status`, `test_url`, `admin_panel_url`, `user_name`, `password`, `hosted_by`, `hosted_on`, `domain_register`, `note`, `start_date`, `cost`, `seo`, `monthly_maintenance`, `technology`, `additional_information`, `email`, `google_review`, `project_testing`, `email_password`, `webscope_file`, `service_agreement_file`, `seo_scope_file`, `website_training_file`, `email_setup_file`, `dir_path`, `created_at`, `updated_at`) VALUES
(1, 'as', 'aa', 'ssa', 'abc@acmemedia.in', 'adresss1\nadress', 3, 'abc.com', 'bad.g', 'New', '1', 'tst', 'sercpanel.comu', 'user', 'passs', 'stealth', 'DNS', 'client', 'address', '2021-02-10', '12313412', 'false', 'true', 'magento', 'null', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-03 05:59:03', '2021-05-12 09:55:27'),
(2, 'brand new projects', 'newone', 'null', 'null', 'null', NULL, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1970-01-01', 'null', '', '', 'null', NULL, NULL, NULL, NULL, NULL, 'webscope.png', 'service_agreement.png', NULL, NULL, NULL, 'project/brand_new_projects', '2021-02-09 05:46:45', '2021-02-09 05:46:45'),
(3, 'testing', 'test', 'null', 'null', 'null', NULL, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1970-01-01', 'null', '', '', 'null', NULL, NULL, NULL, NULL, NULL, 'webscope.png', 'service_agreement.png', 'seo_scope.png', 'website_training.png', 'email_setup.png', 'project/testing', '2021-02-09 06:43:38', '2021-02-09 06:43:38'),
(4, 'pname', 'cname', '9915482378', 'cc@gmail.com', 'client address', NULL, 'website.com', 'ddrive.lnk', 'New', '1', 'testurl.cocm', 'adp.com', 'usernemw', 'pwd', 'stealth', 'A Record', 'stealth', 'special requrest', '2021-04-13', '12233', '', '', 'tech', NULL, 'email@gmail.com', 'yes', 'no', '12345678', 'webscope.png', 'service_agreement.png', 'seo_scope.png', 'website_training.png', 'email_setup.png', 'project/pname', '2021-04-14 07:00:05', '2021-04-14 07:00:22'),
(5, 'newproject', 'cnaeme', '9915482378', 'c@gmail.com', 'claddress', 3, 'weurl.com', 'd.com', 'Rebuilt', '2', 'tt.com', 'ad.com', 'user', '78789898989', 'stealth', 'DNS', 'stealth', 'special rew', '2021-04-16', '12546445454545', 'true', 'true', 'react', 'helllooo', 'e1@gmail.cm', 'no', 'no', '677889898989', 'webscope.png', 'service_agreement.png', 'seo_scope.png', 'website_training.png', 'email_setup.png', 'project/new_project', '2021-04-14 07:04:16', '2021-05-12 23:17:22'),
(7, 'helloo', 'clname', 'cphone', 'c@email.com', 'client addresss', NULL, 'web.com', 'dlink.com', 'New', '2', 'ttt.com', 'addmin url', 'user14', '12222', 'stealth', 'A Record', 'stealth', 'sp', '2021-04-17', '100', '', '', NULL, 'magento', 'abv@g.com', 'yes', 'yes', '8989898', 'webscope.png', 'service_agreement.png', 'seo_scope.png', 'website_training.png', 'email_setup.png', 'project/helloo', '2021-04-16 07:02:05', '2021-04-16 07:02:05'),
(10, 'null', 'null', 'null', 'null', 'null', NULL, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1970-01-01', 'null', '', '', NULL, 'undefined', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, 'project/null', '2021-05-11 03:30:42', '2021-05-11 03:30:42'),
(11, 'null', 'null', 'null', 'null', 'null', NULL, 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1970-01-01', 'null', '', '', NULL, 'undefined', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, 'project/null', '2021-05-11 03:34:00', '2021-05-11 03:34:00'),
(12, 'newppro', NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01', NULL, '', '', NULL, 'undefined', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'project/newppro', '2021-05-12 07:25:18', '2021-05-12 07:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `project_chats`
--

CREATE TABLE `project_chats` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `project_id` bigint(20) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_chats`
--

INSERT INTO `project_chats` (`id`, `user_id`, `project_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 29, 5, 'hello', '2021-05-13 07:04:44', '2021-05-13 01:07:17'),
(2, 29, 5, 'hello', '2021-05-13 01:08:25', '2021-05-13 01:08:25'),
(3, 29, 5, 'hi', '2021-05-13 01:32:23', '2021-05-13 01:32:23'),
(4, 29, 5, 'how re you', '2021-05-13 01:32:36', '2021-05-13 01:32:36'),
(5, 29, 7, 'hi', '2021-05-14 05:37:09', '2021-05-14 05:37:09'),
(6, 29, 7, 'helloooo', '2021-05-14 05:37:17', '2021-05-14 05:37:17'),
(7, 29, 7, 'helloooo12', '2021-05-14 05:37:23', '2021-05-14 05:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `detail`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'Admin', 'Staff lead updated1', 1, '2020-08-26 20:31:50', '2020-09-23 00:41:33', NULL),
(2, 'Staff', 'Lead Updated', 1, '2020-08-28 17:44:48', '2020-09-02 21:26:45', NULL),
(3, 'Sale Manager', 'Senior Staff', 1, '2020-09-01 19:13:50', '2020-09-02 20:43:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rosters`
--

CREATE TABLE `rosters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) NOT NULL,
  `staff_id` bigint(20) NOT NULL,
  `date` varchar(1919) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` tinyint(2) NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `available` tinyint(4) NOT NULL,
  `shift_start` varchar(1919) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift_end` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rosters`
--

INSERT INTO `rosters` (`id`, `store_id`, `staff_id`, `date`, `day`, `month`, `year`, `available`, `shift_start`, `shift_end`, `created_at`, `updated_at`) VALUES
(1, 6, 1, '2020-11-1', 1, '11', '2020', 1, '8', '12', '2020-10-08 00:14:37', '2020-10-13 00:25:10'),
(2, 6, 1, '2020-11-2', 2, '11', '2020', 1, '11', '12', '2020-10-08 00:28:00', '2020-10-08 00:28:00'),
(3, 6, 1, '2020-11-3', 3, '11', '2020', 1, '2', '5', '2020-10-09 00:20:52', '2020-10-09 00:20:52'),
(4, 6, 1, '2020-11-4', 4, '11', '2020', 1, '2', '6', '2020-10-09 01:46:39', '2020-10-09 01:48:08'),
(5, 6, 1, '2020-11-30', 30, '11', '2020', 1, '1', '4', '2020-10-09 01:47:45', '2020-10-09 01:47:45'),
(6, 6, 6, '2020-11-1', 1, '11', '2020', 1, '9', '6', '2020-10-10 02:37:11', '2020-10-10 02:37:11'),
(7, 6, 7, '2020-12-1', 1, '12', '2020', 1, '9', '6', '2020-10-10 03:06:02', '2020-10-10 03:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `staff_availables`
--

CREATE TABLE `staff_availables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) NOT NULL,
  `date` varchar(1919) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` tinyint(2) NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `available` tinyint(4) NOT NULL,
  `shift_start` varchar(1919) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift_end` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_availables`
--

INSERT INTO `staff_availables` (`id`, `staff_id`, `date`, `day`, `month`, `year`, `available`, `shift_start`, `shift_end`, `created_at`, `updated_at`) VALUES
(4, 2, '2020-10-2', 2, '10', '2020', 1, '6', '9', '2020-09-28 00:10:38', '2020-09-30 03:16:40'),
(5, 2, '2020-10-1', 1, '10', '2020', 1, '1', '2', '2020-09-28 00:10:38', '2020-09-30 03:16:40'),
(7, 2, '2020-10-3', 3, '10', '2020', 1, '11', '9', '2020-09-30 02:10:14', '2020-09-30 03:16:40'),
(8, 1, '2020-10-1', 1, '10', '2020', 1, '1', '2', '2020-09-30 03:20:33', '2020-09-30 03:22:34'),
(9, 1, '2020-10-2', 2, '10', '2020', 1, '8', '8', '2020-09-30 03:22:34', '2020-09-30 03:22:34'),
(10, 1, '2020-10-3', 3, '10', '2020', 1, '3', '7', '2020-09-30 03:22:34', '2020-09-30 03:22:34'),
(11, 1, '2020-10-4', 4, '10', '2020', 1, '8', '9', '2020-09-30 03:22:34', '2020-09-30 03:22:34'),
(12, 1, '2020-10-5', 5, '10', '2020', 1, '3', '9', '2020-09-30 03:22:34', '2020-09-30 03:22:34'),
(13, 1, '2020-10-6', 6, '10', '2020', 1, '4', '8', '2020-09-30 03:22:34', '2020-09-30 03:22:34'),
(14, 1, '2020-10-7', 7, '10', '2020', 1, '8', '7', '2020-09-30 03:22:34', '2020-09-30 03:22:34'),
(15, 1, '2020-10-31', 31, '10', '2020', 1, '5', '6', '2020-09-30 03:22:34', '2020-09-30 03:22:34'),
(16, 1, '2020-11-1', 1, '11', '2020', 1, '1', '2', '2020-10-01 00:43:55', '2020-10-13 00:20:57'),
(17, 1, '2020-11-30', 30, '11', '2020', 1, '1', '4', '2020-10-01 00:43:55', '2020-10-01 00:43:55'),
(18, 1, '2020-11-2', 2, '11', '2020', 1, '11', '12', '2020-10-05 00:04:01', '2020-10-13 00:20:57'),
(20, 1, '2020-11-3', 3, '11', '2020', 1, '2', '1', '2020-10-13 00:20:57', '2020-10-13 00:20:57'),
(21, 1, '2020-11-4', 4, '11', '2020', 1, '1', '1', '2020-10-13 00:20:57', '2020-10-13 00:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alertnate_contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suburb_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bsb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `email`, `contact_number`, `alertnate_contact_number`, `unit_number`, `street_number`, `street_name`, `post_code`, `suburb_name`, `state`, `country`, `timezone`, `bsb`, `bank_account_number`, `bank_account_name`, `business_number`, `business_name`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(6, 'MY STORE', 'store@email.com1', '5566761', '879889891', 'u667781', '778781', '7771', '8post1', 'suburb1', 'Sydeny', 'Australia', 'ACST', 'bsb1', 'account number1', 'aanam1', 'timezone12', 'qwrttrtrtrrt1', 1, 1, '2020-08-28 02:38:04', '2020-09-20 22:03:11'),
(9, '2 sept test11', 'email@gmail.com11', '9911', '7811', 'unit11', 'street11', 's name11', 'postcode11', 'subrub11', 'Sydeny', 'Australia', 'AWST', 'bsb11', 'bac11', 'bnumber11', '9977776676711', '99387383711', 1, 1, '2020-09-01 23:42:18', '2020-09-02 01:33:56'),
(14, 'new store 3 sept1', 'eerr@gmail.com1', '656541', '9878771', '561', '361', 'sn1', 'po1', 'sbn1', 'Sydeny', 'Australia', 'AWST', 'bsb1', 'ban1', 'bann1', 'bn11', 'bname1', 0, 1, '2020-09-03 01:52:23', '2020-10-13 00:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'sale',
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_affiliation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `first_name`, `last_name`, `user_name`, `gender`, `user_type`, `contact`, `alternate`, `store_affiliation`, `created_by`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'employee', 'emp@org.com', 'justin', 'lee', 'ab', 'Male', 'sale', '7899456656', '3216547889', '9', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-02 23:03:02', '2020-10-09 00:20:16'),
(3, NULL, 'monica@gmail.com', 'Monica', 'Bing', 'Monica', 'Female', 'sale', '457921526', '654132122', '9', 'Admin', 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-08 23:45:24', '2020-10-09 00:19:22'),
(6, NULL, 'kamlesh@gmail.com', 'kamlesk', 'Kumar', 'kamlesh', 'Male', 'sale', '1165478521', '2234698748', '6', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-09 19:14:27', '2020-09-10 20:10:52'),
(7, NULL, 'komal@gmail.com', 'KomalNath', 'Chaudhary', 'Komal123', 'Male', 'sale', '1165478521', '2234698748', '6', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-10 01:04:14', '2020-09-10 19:56:38'),
(9, NULL, 'kavita@gmail.com', 'kavita', 'Kumari', 'kavita10', 'Female', 'sale', '1165478521', '2234698748', '9', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-10 01:14:50', '2020-10-09 00:20:28'),
(10, NULL, 'kavit1a@gmail.com', 'kavita', 'Kumari', 'kavita10', 'Female', 'sale', '1165478521', '2234698748', '7', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-10 01:14:50', '2020-09-10 01:14:50'),
(11, NULL, 'advin987@gmail.com', 'hvkh', 'jhvjh', 'Advin', 'Female', 'sale', '1165478521', '2234698748', '7', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-10 01:17:23', '2020-09-10 01:17:39'),
(12, NULL, 'simran@gmail.com', 'Simran', 'deep', 'Simran12', 'Male', 'sale', '1125478963', '2234698748', '7', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-10 20:36:50', '2020-09-10 21:27:10'),
(13, NULL, 'gurdev@gmail.com', 'Gurdev', 'Singh', 'Gurdev', 'Male', 'sale', '1165478521', '2234698748', '7', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-10 20:38:13', '2020-09-10 20:38:13'),
(14, NULL, 'gur@gmail.com', 'Gurpartap', 'Singh', 'Gurpartap', 'Male', 'sale', '1165478521', '2234698748', '7', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-10 20:39:48', '2020-09-10 20:39:48'),
(15, NULL, 'bal@gmail.com', 'balmeet', 'kaur', 'balmeet', 'Female', 'sale', '1165478521', '2234698748', '7', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-10 20:42:53', '2020-09-10 20:42:53'),
(16, NULL, 'palwinder@hgmail.com', 'palwinder', 'Kaur', 'palwinder', 'Female', 'sale', '1165478521', '2234698748', '7', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-10 20:44:03', '2020-09-10 20:44:03'),
(17, NULL, 'dsa@gmail.com', 'kjsad', 'kmds', 'lkdaf', 'Male', 'sale', '1165478521', '2234698748', '7', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-10 20:45:43', '2020-09-10 20:45:43'),
(18, NULL, 'sd@gmail.com', 'save', 'test', 'savr', 'Male', 'sale', '1165478521', '2234698748', '7', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-10 20:46:20', '2020-09-10 20:46:20'),
(19, NULL, 'save@gmail.com', 'savedata1', 'test', 'savedatat2', 'Male', 'sale', '1165478521', '2234698748', '7', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-10 20:47:13', '2020-09-10 20:47:13'),
(20, NULL, 'savedatat@fgmail.com', 'saveda2', 'test', 'savedata4', 'Male', 'sale', '1165478521', '2234698748', '7', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-10 20:48:06', '2020-09-10 20:48:06'),
(21, NULL, 'dfgd@hotmail.com', 'fgdfg', 'asfsdf', 'savedata45`', 'Female', 'sale', '1165478521', '2234698748', '7', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-10 20:50:22', '2020-09-10 20:50:33'),
(22, NULL, 'ndcnk@gmail.comr', 'savert', 'test', 'savedata90', 'Male', 'sale', '1165478521', '2234698748', '7', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-10 20:54:57', '2020-09-10 20:58:42'),
(23, NULL, 'dfnnjdkln@gmail.com', 'sabkjb', 'klnsnlk', 'savedata78', 'Male', 'sale', '1165478521', '2234698748', '7', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-10 21:02:11', '2020-09-10 21:02:11'),
(24, NULL, 'lal@gmail.com', 'kantilal2', 'Kumari', 'kantilal', 'Female', 'sale', '1165478521', '2234698748', '7', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-10 21:05:55', '2020-09-10 21:14:14'),
(25, NULL, 'test78@gmail.com', 'test first', 'test last', 'test 78', 'Male', 'sale', '0988778', '7786555667', '7', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-28 23:59:06', '2020-09-28 23:59:06'),
(26, NULL, 'newstaff@gmail.com', 'staff', 'last', 'newstaff', 'Male', 'sale', '4555565151', NULL, '6', NULL, 1, NULL, '$2y$10$BJjEXJ7/LSF3mV3Y9W.Sw.HXsw.zBFvviucbyqyAWniTmE0w9YaTa', NULL, '2020-10-08 02:23:06', '2020-10-08 02:23:06'),
(29, 'employee1', 'admin1@org.com', 'Sahil', 'sahil', 'ab', 'Male', '1', '7899456656', '3216547889', '9', NULL, 1, NULL, '$2y$10$5aGQ7tQGwxhODjFRceEWF.wCtRX3TQ3qANWI/bmP/K2Gkuf7miiwK', NULL, '2020-09-02 23:03:02', '2020-10-09 00:20:16'),
(30, NULL, 'newsale@gmail.com', 'new sale user', 'lasrt', NULL, 'Male', NULL, '98988946', '466446645', NULL, NULL, 1, NULL, '$2y$10$VhsPKrWGs2dKW4r/dLNg6ue35G5ianBFzbWJch2eAVF27Bo3LT1MS', NULL, '2020-10-29 08:44:30', '2020-10-29 08:44:30'),
(31, NULL, 'n@gmail.com', 'nsale namessss', 'lastsss', NULL, 'Male', NULL, '54455454452222', '44545454222', NULL, NULL, 1, NULL, '$2y$10$rcPb/40y7VKE/iu2lFHrKe0wg2LYbv2kpLp.sMYu8L.qwbIt4IChW', NULL, '2020-10-29 08:45:28', '2020-10-29 08:45:52'),
(32, NULL, 'ravi@gmail.com', 'ravi1', 'kumar', NULL, 'Male', 'sale', '231421324', '1431234132', NULL, NULL, 1, NULL, '$2y$10$3yzrSGGnwFDanXKhjk97JeN/FmbuC6xrN/y88IR636.103PorNMT.', NULL, '2021-05-14 05:35:43', '2021-05-14 05:36:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_chats`
--
ALTER TABLE `project_chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rosters`
--
ALTER TABLE `rosters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_availables`
--
ALTER TABLE `staff_availables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `project_chats`
--
ALTER TABLE `project_chats`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `rosters`
--
ALTER TABLE `rosters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff_availables`
--
ALTER TABLE `staff_availables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
