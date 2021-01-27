-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 06:47 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssagro`
--

-- --------------------------------------------------------

--
-- Table structure for table `advanced_salary`
--

CREATE TABLE `advanced_salary` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `empinfo_id` int(12) DEFAULT NULL,
  `advanced_amount` int(12) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `month` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advanced_salary`
--

INSERT INTO `advanced_salary` (`id`, `name`, `empinfo_id`, `advanced_amount`, `date`, `month`, `created_at`, `updated_at`) VALUES
(14, 'Asif Ikbal', 44, 500, '2020-02-20', 'February', '2020-02-09 08:23:07', '2020-02-09 08:23:07'),
(15, 'Asif Ikbal', 44, 0, '2020-03-19', 'March', '2020-02-09 08:23:57', '2020-02-09 08:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `buy_order`
--

CREATE TABLE `buy_order` (
  `id` int(11) NOT NULL,
  `product_id` int(12) DEFAULT NULL,
  `product_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `amount` int(12) DEFAULT NULL,
  `price` int(12) DEFAULT NULL,
  `final_price` int(12) DEFAULT NULL,
  `purchased_type` varchar(20) DEFAULT '' COMMENT '1=Buy,2=Sell',
  `status` varchar(20) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy_order`
--

INSERT INTO `buy_order` (`id`, `product_id`, `product_name`, `customer_name`, `location`, `mobile`, `amount`, `price`, `final_price`, `purchased_type`, `status`, `created_at`, `updated_at`) VALUES
(24, 1, 'বি আর ২৯', 'safa', 'Dhaka', '01683136954', 2, 1000, 2000, 'Buy', '3', '2020-02-06 22:33:42', '2020-02-06 16:33:42'),
(25, 5, 'বাসমতী', 'Shaju', 'Dhaka', '01683136956', 3, 9000, 27000, 'Buy', '3', '2020-02-06 22:33:38', '2020-02-06 16:33:38'),
(26, 26, 'বি আর ২৮', 'Shaju', 'Dhaka', '01683136958', 6, 2400, 14400, 'Buy', '3', '2020-02-06 22:33:21', '2020-02-06 16:33:21'),
(27, 7, 'ধান', 'safa', 'Dhaka', '01683136958', 1, 3900, 3900, 'Sell', '2', '2020-02-06 22:33:16', '2020-02-06 16:33:16'),
(28, 8, 'মুরির ধাণ', 'Shaju', 'Dhaka', '01683136932', 2, 1400, 2800, 'Sell', '2', '2020-02-06 22:33:12', '2020-02-06 16:33:12'),
(29, 27, 'মিনিকেট', 'Shaju', 'Dhaka', '01683136932', 3, 1764, 5292, 'Buy', '3', '2020-02-07 19:53:31', '2020-02-07 13:53:31'),
(30, 23, 'cow', 'safa', 'Dhaka', '01683136958', 1, 200, 200, 'Buy', '1', '2020-02-10 13:55:43', '2020-02-10 07:55:43'),
(31, 24, 'paddy', 'safa', 'Dhaka', '01683136956', 3, 120, NULL, 'Buy', '1', '2020-02-10 07:57:38', '2020-02-10 07:57:38'),
(32, 24, 'paddy', 'Shaju', 'Dhaka', '01683136956', 2, 80, NULL, 'Buy', '1', '2020-02-10 08:02:29', '2020-02-10 08:02:29'),
(33, 24, 'paddy', 'Shaju', 'Dhaka', '01683136956', 2, 80, NULL, 'Buy', '1', '2020-02-10 08:04:04', '2020-02-10 08:04:04'),
(34, 24, 'paddy', 'Shaju', 'Dhaka', '01683136956', 2, 80, NULL, 'Buy', '1', '2020-02-10 08:05:56', '2020-02-10 08:05:56'),
(35, 24, 'paddy', 'Shaju', 'Dhaka', '01683136956', 2, 80, NULL, 'Buy', '1', '2020-02-10 08:06:17', '2020-02-10 08:06:17'),
(36, 1, 'বি আর ২৯', 'adasd', 'dsadsad', '01683134456', 1, 500, NULL, 'Buy', '1', '2021-01-17 11:45:25', '2021-01-17 11:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `type`, `created_at`, `updated_at`) VALUES
(1, 'মুরির চাউল', 'মুরির০০১', 'Buy', '2019-11-06 02:46:00', '2020-01-21 00:14:40'),
(2, 'চাউল', 'চাউল০২', 'Buy', '2019-11-06 02:46:00', '2020-01-21 00:54:08'),
(3, 'ধান', 'ধান ১', 'Sell', '2019-11-06 02:46:00', '2020-01-21 01:22:16'),
(4, 'ভাল কুরা', 'ভাল কুরা ১', 'Buy', '2019-11-06 02:46:00', '2020-01-21 01:20:10'),
(5, 'চাউল খুদ', 'চাউল খুদ ১', 'Buy', '2019-11-06 02:46:00', '2020-01-21 01:21:05'),
(9, 'ভাল মানের খুদ', 'ভাল মানের খুদ ১', 'Buy', '2019-11-11 16:45:09', '2020-01-21 01:21:50'),
(10, 'cow', 'cows', 'Featured_buy', '2019-12-18 04:47:39', '2019-12-18 04:47:39'),
(11, 'paddy', 'paddies', 'Featured_buy', '2019-12-18 04:48:11', '2019-12-18 04:48:11'),
(12, 'Goat', 'goats', 'Featured_sell', '2019-12-18 05:52:25', '2019-12-18 05:52:25'),
(13, 'চাউল কুরা', 'চাউল কুরা ১', 'Buy', '2020-01-21 00:13:52', '2020-01-21 01:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, '2020-01-21 00:56:15'),
(5, 5, 2, NULL, NULL),
(6, 6, 2, NULL, NULL),
(7, 7, 2, NULL, NULL),
(8, 8, 3, NULL, '2020-01-21 01:27:21'),
(23, 23, 10, '2019-12-18 04:49:10', '2019-12-18 04:49:10'),
(24, 24, 1, '2019-12-18 04:56:05', '2019-12-18 04:56:05'),
(25, 25, 12, '2019-12-18 05:55:45', '2019-12-18 05:55:45'),
(26, 26, 1, '2020-01-21 00:28:23', '2020-01-21 00:28:23'),
(27, 27, 2, '2020-01-21 01:02:19', '2020-01-21 01:02:19');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mobile`, `message`, `created_at`, `updated_at`) VALUES
(1, 'safa', '01683136954', 'Test message here...', '2019-12-17 15:14:11', '2019-12-17 15:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `employeeid`
--

CREATE TABLE `employeeid` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeeid`
--

INSERT INTO `employeeid` (`id`, `emp_id`, `created_at`, `updated_at`) VALUES
(1, 'emp01', NULL, NULL),
(2, 'emp02', NULL, NULL),
(3, 'emp03', NULL, NULL),
(4, 'emp06', NULL, NULL),
(5, 'emp07', NULL, NULL),
(6, 'emp011', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `id` int(11) NOT NULL,
  `user_id` int(12) DEFAULT NULL,
  `emp_id` varchar(50) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `emp_address` varchar(50) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `emp_blood_group` varchar(12) DEFAULT NULL,
  `emp_nid` bigint(20) DEFAULT NULL,
  `salary_amount` int(12) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`id`, `user_id`, `emp_id`, `emp_name`, `designation`, `image`, `emp_address`, `joining_date`, `emp_blood_group`, `emp_nid`, `salary_amount`, `created_at`, `updated_at`) VALUES
(44, NULL, 'emp01', 'Asif Ikbal', 'Manager', 'emp01.jpg', 'badda', '2019-12-23', 'B+', 121212, 19000, '2020-02-06 17:22:25', '2020-02-06 11:22:25'),
(46, NULL, 'emp03', 'bijoy', 'Cashier', 'emp03.png', 'badda', '2010-10-14', 'A+', 420000, 9000, '2020-02-07 09:52:19', '2020-02-07 03:52:19'),
(48, NULL, 'emp005', 'Munzur Ahmed', 'assistant manager', '73269420_1656265364510058_385874271487918080_n.jpg', 'rampura', '2019-11-19', 'B+', 9367333, 8000, '2020-02-07 09:52:55', '2020-02-07 03:52:55'),
(49, NULL, 'emp-106', 'Mst Remely khatun', 'assistant manager', NULL, 'malibag', '2019-10-10', 'A+', 198725, 16000, '2020-02-07 10:11:57', '2020-02-07 04:11:57'),
(50, NULL, 'emp-107', 'Md Sazedur Rahman', 'Manager', 'saju.jpg', 'mohammad pur', '2020-01-10', 'B+', 33000, 7000, '2020-02-09 07:23:55', '2020-02-09 01:23:55'),
(51, NULL, 'emp-115', 'Md Torun Ahmed', 'worker', 'saju1.jpg', 'Dhanmondi 15', '2019-12-01', 'B+', 1998234567456, NULL, '2020-01-22 17:53:58', '2020-01-22 11:53:58'),
(52, NULL, 'emp-101', 'Md Najmul', 'worker', 'saju2.jpg', 'khaskarara', '2019-12-01', 'AB-', 199812345678, NULL, '2020-01-22 17:32:30', '2020-01-22 11:32:30'),
(53, NULL, 'emp-111', 'Md pappu mollik', 'worker', 'saju 3.jpg', 'khaskarara', '2019-10-06', 'B+', 19973456098765, NULL, '2020-01-22 11:34:24', '2020-01-22 11:34:24'),
(54, NULL, 'emp-112', 'Md Ripon Rana', 'worker', 'saju4.jpg', 'mohammad pur', '2019-11-07', 'AB+', 19912345678765, NULL, '2020-01-22 11:35:53', '2020-01-22 11:35:53'),
(55, NULL, 'emp-114', 'Md Rabby mollik', 'worker', 'saju5.jpg', 'khaskarara', '2019-10-23', 'AB+', 19963456789876, NULL, '2020-01-22 11:37:44', '2020-01-22 11:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `employee_notice`
--

CREATE TABLE `employee_notice` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_notice`
--

INSERT INTO `employee_notice` (`id`, `title`, `body`, `date`, `created_at`, `updated_at`) VALUES
(2, 'Lorem ipsum dolor sit amet', 'Fusce erat tortor, iaculis nec magna ac, rutrum dignissim dolor. Vivamus posuere egestas odio in venenatis. Aenean ut porttitor eros. Aliquam nec est at sapien eleifend tempus vel et diam. Sed at justo finibus, tincidunt urna a, vulputate eros.', '2019-12-21', '2019-12-07 14:14:59', '2019-12-07 14:14:59'),
(3, 'Praesent ex odio, sagittis at sem ut, accumsan molestie lorem.', 'Nam vulputate mattis velit, vel volutpat diam faucibus vel. Aenean a purus auctor, blandit augue vitae, finibus turpis. Ut non commodo tortor, in sodales massa. ', '2019-11-11', '2019-12-07 14:15:21', '2019-12-07 14:15:21'),
(4, 'Donec sit amet sodales dui. Suspendisse ac mi a nulla blandit convallis.', 'Nunc ornare, leo nec varius commodo, est ex pulvinar libero, id bibendum ipsum ante in mi. Nam varius leo massa, a commodo nulla molestie a. In non dolor tellus. Phasellus luctus leo a justo luctus tincidunt.', '2019-10-08', '2019-12-07 14:15:46', '2019-12-07 14:15:46'),
(5, 'In rutrum orci nec pharetra imperdiet.', 'orci in tincidunt dictum, urna metus luctus nisi, at faucibus erat nunc ac ipsum. Ut auctor lorem quis magna pulvinar tempor. Duis gravida ac ex eget viverra.', '2019-09-04', '2019-12-07 14:16:12', '2019-12-07 14:16:12'),
(6, 'Sed fringilla congue porttitor', 'Aenean a purus auctor, blandit augue vitae, finibus turpis. Ut non commodo tortor, in sodales massa. Vivamus ut tempor leo, eget egestas ipsum.', '2019-10-14', '2019-12-07 14:16:43', '2019-12-07 14:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `employee_performance`
--

CREATE TABLE `employee_performance` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `month_name` varchar(20) DEFAULT NULL,
  `empinfo_id` int(12) DEFAULT NULL,
  `behavior` int(12) DEFAULT NULL,
  `punctuality` int(12) DEFAULT NULL,
  `attendance` int(12) DEFAULT NULL,
  `attitude` int(12) DEFAULT NULL,
  `integrity` int(12) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_performance`
--

INSERT INTO `employee_performance` (`id`, `name`, `month_name`, `empinfo_id`, `behavior`, `punctuality`, `attendance`, `attitude`, `integrity`, `created_at`, `updated_at`) VALUES
(3, 'Munzur Ahmed', NULL, 48, 1, 10, 5, 8, 6, '2020-01-21 00:40:30', '2020-01-21 00:40:30'),
(4, 'Mst Remely khatun', NULL, 49, 5, 5, 9, 8, 9, '2020-01-21 04:11:05', '2020-01-21 04:11:05'),
(5, 'Md Sazedur Rahman', NULL, 50, 9, 7, 9, 9, 5, '2020-01-22 10:36:39', '2020-01-22 10:36:39'),
(6, 'Md Torun Ahmed', NULL, 51, 9, 3, 6, 8, 8, '2020-01-22 11:46:22', '2020-01-22 11:46:22'),
(8, 'Md pappu mollik', NULL, 53, 8, 6, 6, 7, 8, '2020-01-22 11:47:21', '2020-01-22 11:47:21'),
(9, 'Md Najmul', NULL, 52, 8, 9, 7, 9, 9, '2020-01-22 11:47:45', '2020-01-22 11:47:45'),
(10, 'Md Ripon Rana', NULL, 54, 5, 6, 7, 7, 9, '2020-01-22 11:48:23', '2020-01-22 11:48:23'),
(11, 'Md Rabby mollik', NULL, 55, 9, 8, 9, 7, 8, '2020-01-22 11:48:40', '2020-01-22 11:48:40'),
(12, 'Asif Ikbal', 'January', 44, 5, 5, 5, 5, 5, '2020-01-25 07:58:53', '2020-01-25 07:58:53'),
(13, 'Asif Ikbal', 'April', 44, 7, 7, 7, 7, 7, '2020-01-25 07:59:12', '2020-01-25 07:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary`
--

CREATE TABLE `employee_salary` (
  `id` int(11) NOT NULL,
  `empinfo_id` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `salary_amount` int(12) DEFAULT NULL,
  `month` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `advanced` int(12) DEFAULT NULL,
  `previous_month_advanced` int(20) DEFAULT NULL,
  `final_salary` int(20) DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_salary`
--

INSERT INTO `employee_salary` (`id`, `empinfo_id`, `name`, `salary_amount`, `month`, `date`, `advanced`, `previous_month_advanced`, `final_salary`, `note`, `created_at`, `updated_at`) VALUES
(8, 48, 'Munzur Ahmed', 18000, 'december', '2020-01-01', NULL, 4000, 18000, 'pAID', '2020-01-21 06:44:48', '2020-01-21 00:44:48'),
(9, 49, 'Mst Remely khatun', 27000, 'october', '2019-01-11', NULL, 2000, 27000, 'PAID', '2020-01-22 16:20:13', '2020-01-22 10:20:13'),
(10, 50, 'Md Sazedur Rahman', 31000, 'November', '2020-01-11', NULL, 2000, 31000, 'PAID', '2020-01-22 10:35:48', '2020-01-22 10:35:48'),
(12, 51, 'Md Torun Ahmed', 16000, 'january', '2020-01-01', NULL, NULL, 16000, 'PAID', '2020-01-22 11:41:08', '2020-01-22 11:41:08'),
(13, 52, 'Md Najmul', 17000, 'january', '2020-01-01', NULL, NULL, 17000, 'PAID', '2020-01-22 11:42:10', '2020-01-22 11:42:10'),
(14, 53, 'Md pappu mollik', 15000, 'january', '2020-01-01', NULL, NULL, 15000, 'PAID', '2020-01-22 11:42:57', '2020-01-22 11:42:57'),
(15, 53, 'Md pappu mollik', 15000, 'december', '2019-12-01', NULL, NULL, 15000, 'PAID', '2020-01-22 11:43:34', '2020-01-22 11:43:34'),
(16, 54, 'Md Ripon Rana', 17000, 'january', '2019-12-01', NULL, NULL, 17000, 'PAID', '2020-01-22 11:44:27', '2020-01-22 11:44:27'),
(17, 54, 'Md Ripon Rana', 13000, 'january', '2020-01-01', NULL, 2000, 13000, 'PAID', '2020-01-22 11:45:00', '2020-01-22 11:45:00'),
(18, 55, 'Md Rabby mollik', 15000, 'january', '2020-01-22', NULL, NULL, 15000, 'PAID', '2020-01-22 11:45:29', '2020-01-22 11:45:29'),
(27, 49, 'Mst Remely khatun', 16000, 'April', '2020-03-11', NULL, 0, 16000, 'Paid', '2020-02-07 14:48:47', '2020-02-07 14:48:47'),
(28, 49, 'Mst Remely khatun', 16000, 'August', '2020-08-06', 0, 0, 16000, 'Paid', '2020-02-09 01:08:21', '2020-02-09 01:08:21'),
(29, 50, 'Md Sazedur Rahman', 7000, NULL, '2020-08-13', 0, 0, 7000, 'Paid', '2020-02-09 01:24:09', '2020-02-09 01:24:09'),
(30, 50, 'Md Sazedur Rahman', 7000, 'October', '2020-10-15', 0, 0, 7000, 'Paid', '2020-02-09 01:31:42', '2020-02-09 01:31:42'),
(31, 44, 'Asif Ikbal', 19000, 'February', '2020-02-10', 0, 0, 19000, 'Paid', '2020-02-09 08:22:21', '2020-02-09 08:22:21'),
(32, 44, 'Asif Ikbal', 19000, 'March', '2020-03-11', 500, 0, 19500, 'Paid', '2020-02-09 08:23:25', '2020-02-09 08:23:25'),
(33, 44, 'Asif Ikbal', 19000, 'April', '2020-04-09', 0, 500, 18500, 'Paid', '2020-02-09 08:24:11', '2020-02-09 08:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `featured_buy`
--

CREATE TABLE `featured_buy` (
  `id` int(12) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `product_title` varchar(80) NOT NULL,
  `product_info` varchar(100) NOT NULL,
  `price` int(12) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured_buy`
--

INSERT INTO `featured_buy` (`id`, `image`, `product_title`, `product_info`, `price`, `category_name`, `created_at`, `updated_at`) VALUES
(4, 'fbuy_1.jpg', 'Australain cow', 'This is a tasty australian cow', 50000, 'cow', '2019-10-24 07:05:48', '2019-10-24 07:05:48'),
(5, 'fbuy_2.jpg', 'Paddy', 'This is tasty paddy', 100, 'amon paddy', '2019-10-24 13:08:52', '2019-10-24 07:08:52');

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
(3, '2019_11_06_080516_create_products_table', 1),
(4, '2019_11_06_080735_create_categories_table', 1),
(5, '2019_11_10_114252_create_notifications_table', 2),
(6, '2019_11_10_130823_create_notifications_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `id` int(11) NOT NULL,
  `month_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`id`, `month_name`, `created_at`, `updated_at`) VALUES
(1, 'January', NULL, NULL),
(2, 'February', NULL, NULL),
(3, 'March', NULL, NULL),
(4, 'April', NULL, NULL),
(5, 'May', NULL, NULL),
(6, 'June', NULL, NULL),
(7, 'July', NULL, NULL),
(8, 'August', NULL, NULL),
(9, 'September', NULL, NULL),
(10, 'October', NULL, NULL),
(11, 'November', NULL, NULL),
(12, 'December', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('02e9fb3e-6de5-4102-b937-bab9210485e2', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2020-02-06 16:33:46', '2020-02-06 16:28:31', '2020-02-06 16:33:46'),
('062089c7-1aba-40dd-a69c-f79f23077c3b', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 18, '{\"data\":\"New Order Request\"}', NULL, '2020-02-10 08:06:18', '2020-02-10 08:06:18'),
('1229c0d2-0b8e-4101-815d-9874a491f2d3', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 17, '{\"data\":\"New Order Request\"}', NULL, '2021-01-17 11:45:26', '2021-01-17 11:45:26'),
('13a2ce22-054c-449b-b829-9e8575a7fbda', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 11, '{\"data\":\"New Order Request\"}', NULL, '2021-01-17 11:45:26', '2021-01-17 11:45:26'),
('173f9715-f3ba-4aa2-b9d2-5fff47fe64d5', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New buy Order\"}', '2019-11-10 11:18:19', '2019-11-10 11:17:17', '2019-11-10 11:18:19'),
('18f44dec-30c6-4b32-9051-539e86c46e18', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-13 22:08:28', '2019-11-13 21:58:14', '2019-11-13 22:08:28'),
('1de3dd41-ebe0-4642-8d70-e6dbef989046', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-13 23:05:18', '2019-11-13 22:57:20', '2019-11-13 23:05:18'),
('20388725-22f7-4c01-a37d-8222447cd131', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2020-02-10 08:06:41', '2020-02-10 08:06:17', '2020-02-10 08:06:41'),
('24ad6512-3730-4c30-bf9b-61129124568a', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 2, '{\"data\":\"New Order Request\"}', NULL, '2021-01-17 11:45:26', '2021-01-17 11:45:26'),
('2818a64b-a9c7-45c8-877a-ea0dff5add8f', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 17, '{\"data\":\"New Order Request\"}', NULL, '2020-02-10 08:06:18', '2020-02-10 08:06:18'),
('2920022a-7e38-43b0-8e07-51b914e3c472', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-13 22:08:28', '2019-11-13 22:05:55', '2019-11-13 22:08:28'),
('2bc14ab2-f10d-44a7-8e9f-cfed69f82a3d', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-13 22:08:28', '2019-11-13 21:55:53', '2019-11-13 22:08:28'),
('2cca78c8-857c-4c85-8060-23dc79c747d3', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 16, '{\"data\":\"New Order Request\"}', NULL, '2020-02-10 08:06:18', '2020-02-10 08:06:18'),
('2d3ea5e2-adc8-42f7-8bb4-8955138915f9', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2020-02-06 16:33:46', '2020-02-06 16:29:29', '2020-02-06 16:33:46'),
('3132473e-4af6-49bb-8459-b9dc0aeea68c', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 14, '{\"data\":\"New Order Request\"}', NULL, '2021-01-17 11:45:26', '2021-01-17 11:45:26'),
('34994f53-7ee9-4e34-873d-448996ad9084', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2020-02-07 14:43:15', '2020-02-07 13:53:10', '2020-02-07 14:43:15'),
('3539fb7c-6e4c-4583-84c1-294c185c348a', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-12 14:29:32', '2019-11-12 13:10:58', '2019-11-12 14:29:32'),
('3d62df72-dbce-4930-990b-6e7effcff2eb', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-13 22:08:28', '2019-11-13 22:04:39', '2019-11-13 22:08:28'),
('4b813f3b-046f-4a5c-b447-d57691feb6c7', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-13 22:49:54', '2019-11-13 22:46:15', '2019-11-13 22:49:54'),
('4e66a14f-e517-4b5b-9ebe-923d61cb6968', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2021-01-17 11:46:03', '2021-01-17 11:45:26', '2021-01-17 11:46:03'),
('5282fcfe-9424-4e53-9177-8adf9e825e68', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2020-02-06 16:33:46', '2020-02-06 16:27:45', '2020-02-06 16:33:46'),
('560a694b-c4fb-4cce-9cc5-1479467bc638', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-13 23:05:18', '2019-11-13 22:54:01', '2019-11-13 23:05:18'),
('58bf2f99-5a27-470e-88da-cfade3db7e2b', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 9, '{\"data\":\"New Order Request\"}', NULL, '2020-02-10 08:06:17', '2020-02-10 08:06:17'),
('650714a2-4579-4117-8fb4-b927f0497bde', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 15, '{\"data\":\"New Order Request\"}', NULL, '2020-02-10 08:06:18', '2020-02-10 08:06:18'),
('65d2d291-ffc0-47b7-bf3a-159bf446b62b', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-12 14:29:31', '2019-11-12 14:16:00', '2019-11-12 14:29:31'),
('6763e54a-e9e9-4bd1-8ef1-f9fc72c5883f', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-14 00:10:21', '2019-11-13 23:07:04', '2019-11-14 00:10:21'),
('6bb839dd-5c25-4adb-96c0-e6a01c7be452', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-12 12:56:58', '2019-11-12 12:55:03', '2019-11-12 12:56:58'),
('6ef565c5-b97c-4f7d-848c-218397ef09dd', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New buy Order\"}', '2019-11-11 17:14:02', '2019-11-11 17:06:53', '2019-11-11 17:14:02'),
('6f574656-183f-4c65-a50d-11bcee377ee5', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2020-02-10 08:02:04', '2020-02-10 07:57:38', '2020-02-10 08:02:04'),
('73f6cb2e-da48-468b-8cfd-e120da8302a3', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 13, '{\"data\":\"New Order Request\"}', NULL, '2021-01-17 11:45:26', '2021-01-17 11:45:26'),
('832542e5-ce2b-44ac-a765-52d07b4e2a4f', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 9, '{\"data\":\"New Order Request\"}', NULL, '2021-01-17 11:45:26', '2021-01-17 11:45:26'),
('83b6c9e4-a104-4c6a-8137-d42e32601a19', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-12 12:52:29', '2019-11-12 12:25:33', '2019-11-12 12:52:29'),
('840a00f2-e4f8-483a-8d22-63257e1b46fc', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-12 12:52:29', '2019-11-12 12:22:50', '2019-11-12 12:52:29'),
('8670679a-a645-431b-ad8d-943cc8c26a16', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 12, '{\"data\":\"New Order Request\"}', NULL, '2021-01-17 11:45:26', '2021-01-17 11:45:26'),
('8aba284a-67a6-40ba-8098-fde22f01fc9d', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2020-02-10 08:02:04', '2020-02-10 07:50:12', '2020-02-10 08:02:04'),
('8cddd78a-dd9f-4496-8214-ce0ab5e9b7a4', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-13 22:09:29', '2019-11-13 22:08:41', '2019-11-13 22:09:29'),
('930ba69a-b9c1-4960-9013-4af92cbc0bc1', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-13 21:39:01', '2019-11-13 21:34:08', '2019-11-13 21:39:01'),
('9aeb9060-cfa5-4016-b5b1-017bd6639b49', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 2, '{\"data\":\"New Order Request\"}', '2020-02-10 08:06:26', '2020-02-10 08:06:17', '2020-02-10 08:06:26'),
('9bb159b1-537a-431d-943f-a524df8331d9', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 19, '{\"data\":\"New Order Request\"}', NULL, '2021-01-17 11:45:26', '2021-01-17 11:45:26'),
('9c4fa1d3-208c-48fe-8dae-0be63a8b6fd5', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 18, '{\"data\":\"New Order Request\"}', NULL, '2021-01-17 11:45:26', '2021-01-17 11:45:26'),
('9c924018-fb47-4220-a22e-81017095d2cb', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-13 22:08:28', '2019-11-13 22:05:15', '2019-11-13 22:08:28'),
('9f7289c0-e692-4ebe-bd2f-390b21792f94', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New buy Order\"}', '2019-11-11 17:14:02', '2019-11-11 17:07:57', '2019-11-11 17:14:02'),
('abe61239-fff0-4597-b520-b47585539ab4', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-13 23:06:46', '2019-11-13 23:05:59', '2019-11-13 23:06:46'),
('ada86866-d5db-444e-874f-a29fb743265a', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-13 23:06:46', '2019-11-13 23:06:35', '2019-11-13 23:06:46'),
('b2438058-7830-4086-ba40-15b32bbb563e', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 15, '{\"data\":\"New Order Request\"}', NULL, '2021-01-17 11:45:26', '2021-01-17 11:45:26'),
('b986c92f-e58a-4f96-827b-8b7a996a93da', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New buy Order\"}', '2019-11-10 23:06:58', '2019-11-10 13:37:45', '2019-11-10 23:06:58'),
('baa62e5e-1c6b-4814-937b-768e44e3d87b', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2020-02-06 16:33:46', '2020-02-06 16:29:10', '2020-02-06 16:33:46'),
('bad85794-bf9c-45d4-9597-780a0ba3d6a7', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 16, '{\"data\":\"New Order Request\"}', NULL, '2021-01-17 11:45:26', '2021-01-17 11:45:26'),
('bc3146a6-626e-4ba5-b8bf-ae245a4fa30e', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 14, '{\"data\":\"New Order Request\"}', NULL, '2020-02-10 08:06:18', '2020-02-10 08:06:18'),
('be2cd198-fd79-4862-b79c-b47e763d2c68', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 13, '{\"data\":\"New Order Request\"}', NULL, '2020-02-10 08:06:17', '2020-02-10 08:06:17'),
('bea29e07-0517-4abe-8a9e-cf4e38b00d75', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 19, '{\"data\":\"New Order Request\"}', NULL, '2020-02-10 08:06:18', '2020-02-10 08:06:18'),
('c32c98b4-5bb2-4379-99ce-ce25ad9624c5', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-13 22:08:28', '2019-11-13 22:05:47', '2019-11-13 22:08:28'),
('c5e66354-cd9e-4d8e-a339-81900445bf9a', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New buy Order\"}', '2019-11-10 11:18:19', '2019-11-10 11:17:30', '2019-11-10 11:18:19'),
('c91535b8-4082-49dc-8a1b-64bc47621d68', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2020-01-22 12:45:19', '2020-01-21 02:00:57', '2020-01-22 12:45:19'),
('c9fda5e9-4500-485e-8272-a84a75fd41c5', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 12, '{\"data\":\"New Order Request\"}', NULL, '2020-02-10 08:06:17', '2020-02-10 08:06:17'),
('cb4d7e7f-71fd-40b5-b357-f57c4c091403', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New buy Order\"}', '2019-11-10 23:06:58', '2019-11-10 23:05:45', '2019-11-10 23:06:58'),
('d80e60a0-79ae-4b07-beed-5346a94bad78', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-12 12:22:24', '2019-11-12 12:08:40', '2019-11-12 12:22:24'),
('dce1a07e-37e1-4910-a5fc-7dd7a47012e9', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2019-11-13 22:08:28', '2019-11-13 22:03:20', '2019-11-13 22:08:28'),
('de5897d4-82da-43eb-9cff-97f3f639ed8e', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2020-02-06 16:33:46', '2020-02-06 16:28:15', '2020-02-06 16:33:46'),
('e546adb7-2b45-41f3-992b-3ee1fc95d927', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New Order Request\"}', '2020-01-22 12:45:19', '2020-01-22 12:42:28', '2020-01-22 12:45:19'),
('e63312a0-946b-467d-88c0-3398be0b5e92', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 1, '{\"data\":\"New buy Order\"}', '2019-11-10 11:33:46', '2019-11-10 11:33:33', '2019-11-10 11:33:46'),
('fb68e274-5a1c-4761-8235-015d98ea9585', 'App\\Notifications\\OrderPlacedBuy', 'App\\User', 11, '{\"data\":\"New Order Request\"}', NULL, '2020-02-10 08:06:17', '2020-02-10 08:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'pending', '2019-11-12 17:46:47', '0000-00-00 00:00:00'),
(2, 'sold', '2019-11-12 17:46:47', '0000-00-00 00:00:00'),
(3, 'bought', '2019-11-12 17:47:04', '0000-00-00 00:00:00'),
(4, 'declined', '2019-11-12 17:47:04', '0000-00-00 00:00:00');

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
('bountyhunter099@gmail.com', '$2y$10$oi1r38sgdW6kB1NT2JKDru0Ld25P2cHzJ.Od0p8Db6iKb2wU60TNu', '2019-11-19 05:58:43'),
('bountyhunter099@gmail.com', '$2y$10$oi1r38sgdW6kB1NT2JKDru0Ld25P2cHzJ.Od0p8Db6iKb2wU60TNu', '2019-11-19 05:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `production_cost` int(12) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(1) DEFAULT NULL COMMENT '1=Buy,2=Sell,3=Featured Buy,4=Featured Sell',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `details`, `price`, `production_cost`, `description`, `image`, `unit`, `type`, `created_at`, `updated_at`) VALUES
(1, 'বি আর ২৯', 'বিআর০০৯', 'আমার নাম সাফা', 500, NULL, 'জহুর আহমদ চৌধুরী স্টেডিয়ামে বিপিএলের ম্যাচ চলাকালীন হারিয়ে গেছে একটি ড্রোন ক্যামেরা। দিনের দ্বিতীয় ম্যাচে ফ্লাডলাইটের আলো বিভ্রাটে খেলাও বন্ধ ছিল কিছুক্ষণ', 'basmati-rice.jpg', 'মন', 1, '2019-11-06 02:46:00', '2020-02-06 15:42:13'),
(5, 'বাসমতী', 'বাসমতী ১', 'আমার নাম সাফা', 3000, NULL, 'প্রতিবছর মাঘ মাসের প্রথম দিন ঘটা করে পলো দিয়ে মাছ ধরার উৎসব উদযাপন করা হয় সিলেটের বিশ্বনাথ উপজেলার গোয়াহরি বিলে। বিলের আশপাশের সব গ্রামে নির্দিষ্ট দিনে ঘোষণা দিয়ে উৎসব পালন করা হয়।', 'basmati-rice.jpg', 'মন', 1, '2019-11-06 02:46:00', '2020-02-06 15:42:29'),
(6, 'জিরা', 'জিরা ১', 'আমার নাম সাফা', 439, NULL, 'প্রতিবছর মাঘ মাসের প্রথম দিন ঘটা করে পলো দিয়ে মাছ ধরার উৎসব উদযাপন করা হয় সিলেটের বিশ্বনাথ উপজেলার গোয়াহরি বিলে। বিলের আশপাশের সব গ্রামে নির্দিষ্ট দিনে ঘোষণা দিয়ে উৎসব পালন করা হয়। মাছ ধরার দিন সকালে বিভিন্ন উপকরণ নিয়ে সবাই বিলে হাজির হয়ে যান। ভিন্ন এক উৎসবে পরিণত হয় দিনটি', 'jeera-rice.jpg', 'মন', 1, '2019-11-06 02:46:00', '2020-02-06 15:44:24'),
(7, 'ধান', '্ধান১', 'সদফস এক্সভভ ভক্সভক্সচ', 3900, 3800, 'Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', '1.jpg', 'মন', 2, '2019-11-06 02:46:00', '2020-02-06 15:45:36'),
(8, 'মুরির ধাণ', 'ধান ২', '25 inch, 1 TB SSD, 32GB RAM', 700, 550, 'ঝযভধভয হযভক্সুচভযক্সচ', '800px_COLOURBOX8113026.jpg', 'মন', 2, '2019-11-06 02:46:00', '2020-02-06 15:45:46'),
(23, 'cow', 'cows', 'this is a tasty cow', 200, NULL, 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'fbuy_1.jpg', 'piece', 3, '2019-12-18 04:49:10', '2020-02-06 15:45:52'),
(24, 'paddy', 'paddies', 'this is a tasty paddy', 40, NULL, 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'fbuy_2.jpg', 'kg', 3, '2019-12-18 04:56:05', '2020-02-06 15:45:59'),
(25, 'Goat', 'goats', 'this is a tasty goat', 3000, 2700, 'Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!', 'goat.jpg', 'piece', 4, '2019-12-18 05:55:45', '2020-02-06 15:46:07'),
(26, 'বি আর ২৮', 'মুরির০০১', 'আমার নাম সাফা', 400, NULL, 'হেল্লকহদবুওগ গসদ', 'jeera-rice.jpg', 'মন', 1, '2020-01-21 00:28:23', '2020-02-06 15:46:12'),
(27, 'মিনিকেট', 'মিনিকেট ১', 'উহ্ববুভ্ব হুও৭ভদ্দ্ব উওেফভ্ব', 588, NULL, 'সদফঘহহহজ', 'minikit-rice.jpg', 'মন', 1, '2020-01-21 01:02:19', '2020-02-06 15:46:22');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Desktop 4', '2019-11-09 02:00:33', '2019-11-09 02:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `type_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type_name`, `created_at`, `updated_at`) VALUES
(1, 'Buy', '2019-11-18 13:57:05', NULL),
(2, 'Sell', '2019-11-18 13:57:05', NULL),
(3, 'Featured_buy', '2019-12-17 18:00:00', NULL),
(4, 'Featured_sell', '2019-12-17 18:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `emp_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emp_id`, `name`, `role`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'USER 1', 'admin', 'safa@test.com', '$2y$10$aE8bJdR4xYXfCCibfZSHg.P30MIPqTOkjOix8vC4vm6uyg36DJdoW', 'kifZEWPiMljX0Do82wknmTr6rM76BGdWMbpXblNFazuroEbqhYGoMJ7ajxEM', '2019-10-23 16:21:16', '2019-10-23 16:21:16'),
(2, NULL, 'Shaju Mollik', 'admin', 'shaju@test.com', '$2y$10$jk5HC4MJHEZPFSxxQ3Bj.uRsxCbpF2ZxCAtaz5YttgSe09Da8E5Y6', 'RqPyNUO72JOt6tUUqbZ2q0WeHmUfoS5tmvI7L7TOCkRMyx6sTa7Q8YUT7MTe', '2019-10-23 16:56:18', '2019-10-23 16:56:18'),
(9, 'emp01', 'Asif', 'staff', 'asif@test.com', '$2y$10$IzahsTBflbyxB2CAeNxuRuLYMp809Rm7DL42oB4/97LcfCvwXDDde', 'dfKlsYVXAAppaJPUDnVeNU0Hy5BwLmZ8jjOalh39VN03IwhxRCfrkkCDyGVE', '2019-11-18 07:14:47', '2019-11-18 07:14:47'),
(11, 'emp03', 'bijoy', 'staff', 'bijoy@test.com', '$2y$10$K86tL43gxnmbktp34bRSROLTcKudp9snma8TVhlnfO0DsvWlEI4Hm', 'jMcyZJb7cKdr6JWyHUfDvnwVFr3xjkHsvfZLsr7RaGeQmqLNy8Qljkq2lA7V', '2019-11-18 14:03:43', '2019-11-18 14:03:43'),
(12, 'emp005', 'MUNZUR AHMED', 'staff', 'munzur@test.com', '$2y$10$Bxx88vFMKGDB1hvNhTzK2.8sUOH6VRuIxynqBfh/j7EJ9NsrIG04u', 'I4fRBGKwTSy0yj2NVeiDHtvOLJd5jwFjG0whODJMyczOPobDuzDAoNHTFppR', '2020-01-21 00:38:45', '2020-01-21 00:38:45'),
(13, 'emp-106', 'Mst Remely khatun', 'staff', 'Remely@test.com', '$2y$10$9BEpzh5iSMC.zCnq0FJu6.n9xu7dPgkD8Wq63nrgmNHxvVZC0ZLTu', 'arYomCypnmpJpr42BlCiTKV1AdUgKIrgY709rKUjW995xXkWK0geqWyU9IYe', '2020-01-21 04:16:19', '2020-01-21 04:16:19'),
(14, 'emp-107', 'Md Sazedur Rahman', 'staff', 'Sazedur@test.com', '$2y$10$lGMazicPFz/hfVAdg3qdiOF42Q9GPZXZomaKOCtM0RIs3ZVVx8sam', 'ZXanLoa9cWgRINWxM7mphPKm4QdFaYC1jAS95MaQleWXOGXUlJLkphnwVyxF', '2020-01-22 11:57:10', '2020-01-22 11:57:10'),
(15, 'emp-115', 'Md Torun Ahmed', 'staff', 'Torun@test.com', '$2y$10$mqWWSGpAw7JlmuTZ2AmklOhJh6ue64sXe7tu6kfCIGmiZru2pSTjC', 'SKLY5IBZmo1GMpzk0UWFp1dS4JYfWKhVavROeh0ROfZXecpTXGoODKq69zKo', '2020-01-22 11:58:51', '2020-01-22 11:58:51'),
(16, 'emp-101', 'Md Najmul', 'staff', 'Najmul@test.com', '$2y$10$G4nVN3m7PUurbkQmpQDZ9.8A0IKA6gph7PMYuqNoNkuG.Qb7W8vtW', 'hHCr6l9kKohqzMUFDt04D1NpWUcuUnXlD3qWOW4zPhWz7pBRjHJfrAwwagem', '2020-01-22 12:00:37', '2020-01-22 12:00:37'),
(17, 'emp-111', 'Md Pappu moliik', 'staff', 'Pappu@test.com', '$2y$10$hzmcth5lhxNJrcXMQNNlt.e5shm6KFvVQRke64w9GJH0QzQu2hv6O', 'KIxURI9LHvkua0UeKfEhtRMl9Uq5Q2qG3kesgcgV9MPLwJwyItOROHhFaKIh', '2020-01-22 12:01:45', '2020-01-22 12:01:45'),
(18, 'emp-112', 'Md Ripon Rana', 'staff', 'Ripon@test.com', '$2y$10$LCQD2kb2eby9d154R5.vZOmGJ08zzmPTKWBjubPo03sfM0efaqTvO', 'dq37ZVIbSCqBJMAfjrjwgneCy4SFbxKShNOCGfqaBFEMgcWA2czUvZtU7a9f', '2020-01-22 12:02:40', '2020-01-22 12:02:40'),
(19, 'emp-114', 'Md Rabby mollik', 'staff', 'Rabby@test.com', '$2y$10$w6doG9Kg1PlMZ0hH0EY.y.IQqsUgjvxsxA/DcVpTlZY99JWDIa.um', NULL, '2020-01-22 12:03:38', '2020-01-22 12:03:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advanced_salary`
--
ALTER TABLE `advanced_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_order`
--
ALTER TABLE `buy_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeeid`
--
ALTER TABLE `employeeid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_notice`
--
ALTER TABLE `employee_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_performance`
--
ALTER TABLE `employee_performance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_salary`
--
ALTER TABLE `employee_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_buy`
--
ALTER TABLE `featured_buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `advanced_salary`
--
ALTER TABLE `advanced_salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `buy_order`
--
ALTER TABLE `buy_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employeeid`
--
ALTER TABLE `employeeid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `employee_notice`
--
ALTER TABLE `employee_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_performance`
--
ALTER TABLE `employee_performance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employee_salary`
--
ALTER TABLE `employee_salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `featured_buy`
--
ALTER TABLE `featured_buy`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
