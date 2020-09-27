-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 08:49 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `currency_converts`
--

CREATE TABLE `currency_converts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `exFrom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'IRR',
  `exTo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'EUR',
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currency_converts`
--

INSERT INTO `currency_converts` (`id`, `user_id`, `exFrom`, `exTo`, `rate`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'IRR', 'IRR', '1', 1, '2020-04-21 19:30:00', NULL, NULL),
(2, 1, 'IRR', 'EUR', '0.00000882', 1, NULL, NULL, NULL),
(3, 1, 'EUR', 'IRR', '170000', 0, NULL, NULL, NULL),
(4, 1, 'USD', 'IRR', '160000', 0, NULL, NULL, NULL),
(5, 1, 'IRR', 'USD', '0.000007', 1, NULL, NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `images` text COLLATE utf8mb4_unicode_ci,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `icon` text COLLATE utf8mb4_unicode_ci,
  `priority` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_04_09_134204_create_product_categories_table', 1),
(4, '2020_04_09_134236_create_products_table', 1),
(5, '2020_04_09_134307_create_product_images_table', 1),
(6, '2020_04_09_134439_create_site_details_table', 1),
(7, '2020_04_09_141147_create_menus_table', 1),
(8, '2020_04_09_163121_create_sliders_table', 1),
(9, '2020_04_22_095407_create_currency_converts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_categories_id` int(11) NOT NULL,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` double NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT 'normal',
  `images` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `user_id`, `product_categories_id`, `slug`, `description`, `body`, `price`, `discount`, `type`, `images`, `tags`, `priority`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(18, 'fa==سینک عنوان@@en==sinc title', 1, 10, 'fa-سینک-عنوان-en-sinc-title', 'fa==سینک خلاصه@@en==sinc de', 'fa==سینک متن@@en==sinc body', '12000000', 12, 'normal', '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/5\\/products\\/5eac4847984e6.jpg\",\"50\":\"\\/upload\\/images\\/2020\\/5\\/products\\/50_5eac4847984e6.jpg\",\"66\":\"\\/upload\\/images\\/2020\\/5\\/products\\/66_5eac4847984e6.jpg\",\"200\":\"\\/upload\\/images\\/2020\\/5\\/products\\/200_5eac4847984e6.jpg\",\"350\":\"\\/upload\\/images\\/2020\\/5\\/products\\/350_5eac4847984e6.jpg\",\"500\":\"\\/upload\\/images\\/2020\\/5\\/products\\/500_5eac4847984e6.jpg\"},\"thumb\":\"\\/upload\\/images\\/2020\\/5\\/products\\/50_5eac4847984e6.jpg\"}', 'ss', 1, 1, '2020-05-01 05:47:02', '2020-05-01 11:33:19', NULL),
(19, 'fa==سینک ویژه@@en==s vip', 1, 10, 'fa-سینک-ویژه-en-s-vip', 'fa==سینک ویژه خ@@en==svip d', 'fa==سینک ویژه متن@@en==s vip en', '1230000', 20, 'special', '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/5\\/products\\/5eac483ee79c3.jpg\",\"50\":\"\\/upload\\/images\\/2020\\/5\\/products\\/50_5eac483ee79c3.jpg\",\"66\":\"\\/upload\\/images\\/2020\\/5\\/products\\/66_5eac483ee79c3.jpg\",\"200\":\"\\/upload\\/images\\/2020\\/5\\/products\\/200_5eac483ee79c3.jpg\",\"350\":\"\\/upload\\/images\\/2020\\/5\\/products\\/350_5eac483ee79c3.jpg\",\"500\":\"\\/upload\\/images\\/2020\\/5\\/products\\/500_5eac483ee79c3.jpg\"},\"thumb\":\"\\/upload\\/images\\/2020\\/5\\/products\\/50_5eac483ee79c3.jpg\"}', 't', 2, 1, '2020-05-01 05:48:30', '2020-05-01 11:33:11', NULL),
(20, 'fa==سینک رو کار@@en==s r t', 1, 11, 'fa-سینک-رو-کار-en-s-r-t', 'fa==سینک رو کار خلاصه@@en==srd', 'fa==سینک رو کار متن@@en==s r b', '20000000', 0, 'normal', '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/5\\/products\\/5eac4854258ec.jpg\",\"50\":\"\\/upload\\/images\\/2020\\/5\\/products\\/50_5eac4854258ec.jpg\",\"66\":\"\\/upload\\/images\\/2020\\/5\\/products\\/66_5eac4854258ec.jpg\",\"200\":\"\\/upload\\/images\\/2020\\/5\\/products\\/200_5eac4854258ec.jpg\",\"350\":\"\\/upload\\/images\\/2020\\/5\\/products\\/350_5eac4854258ec.jpg\",\"500\":\"\\/upload\\/images\\/2020\\/5\\/products\\/500_5eac4854258ec.jpg\"},\"thumb\":\"\\/upload\\/images\\/2020\\/5\\/products\\/50_5eac4854258ec.jpg\"}', 'jj', 5, 1, '2020-05-01 05:50:28', '2020-05-01 11:33:32', NULL),
(21, 'fa==سینک تو کار@@en==s t t', 1, 12, 'fa-سینک-تو-کار-en-s-t-t', 'fa==سینک تو کار خلاصه@@en==std', 'fa==سینک تو کار بدنه@@en==stb', '30000000', 0, 'special', '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/5\\/products\\/5eac4831ee4f1.jpg\",\"50\":\"\\/upload\\/images\\/2020\\/5\\/products\\/50_5eac4831ee4f1.jpg\",\"66\":\"\\/upload\\/images\\/2020\\/5\\/products\\/66_5eac4831ee4f1.jpg\",\"200\":\"\\/upload\\/images\\/2020\\/5\\/products\\/200_5eac4831ee4f1.jpg\",\"350\":\"\\/upload\\/images\\/2020\\/5\\/products\\/350_5eac4831ee4f1.jpg\",\"500\":\"\\/upload\\/images\\/2020\\/5\\/products\\/500_5eac4831ee4f1.jpg\"},\"thumb\":\"\\/upload\\/images\\/2020\\/5\\/products\\/50_5eac4831ee4f1.jpg\"}', 'ا', 8, 1, '2020-05-01 05:51:48', '2020-05-01 11:32:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `images` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `icon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `priority` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `title`, `slug`, `user_id`, `description`, `body`, `parent_id`, `images`, `tags`, `icon`, `priority`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'sef', 'sef', 1, 'srf', 'sr', 1, '[]', 'r', 'e', 1, 1, '2020-04-17 10:22:39', '2020-04-17 10:43:46', '2020-04-17 10:43:46'),
(2, 'fa==qq@@en==q', 'fa-qq-en-q', 1, 'fa==sdf@@en==s', 'fa==sdfsdf@@en==sdf', 0, '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/product\\/5ea092ff74044.png\",\"300\":\"\\/upload\\/images\\/2020\\/4\\/product\\/300_5ea092ff74044.png\",\"600\":\"\\/upload\\/images\\/2020\\/4\\/product\\/600_5ea092ff74044.png\",\"900\":\"\\/upload\\/images\\/2020\\/4\\/product\\/900_5ea092ff74044.png\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/product\\/300_5ea092ff74044.png\"}', 'sdf', 'sdf', 1, 1, '2020-04-17 10:32:22', '2020-04-23 04:43:32', '2020-04-23 04:43:32'),
(3, 'fa==aa@@en==ee', 'fa-aa-en-ee', 1, 'fa==a@@en==e', 'fa==aaaaaaaaaaa@@en==eeeeeeeeeee', 0, '{}', 'e', 'e', 1, 1, '2020-04-22 14:02:38', '2020-04-22 14:09:51', '2020-04-22 14:09:51'),
(4, 'fa==ت@@en==t', 'fa-ت-en-t', 1, 'fa==تست@@en==test', 'fa==تست م@@en==test b', 0, '{}', 'ت', '1', 1, 1, '2020-04-22 14:11:55', '2020-04-23 04:43:34', '2020-04-23 04:43:34'),
(5, 'fa==همه سرویس ها@@en==eeeee', 'fa-همه-سرویس-ها-en-eeeee', 1, 'fa==ههه@@en==eeeeeeee', 'fa==هههههه@@en==eee', 1, '{}', 'e', 'e', 1, 1, '2020-04-22 14:17:12', '2020-04-23 04:43:36', '2020-04-23 04:43:36'),
(6, 'fa==e@@en==ee', 'fa-e-en-ee', 1, 'fa==f@@en==ff', 'fa==r@@en==rr', 0, '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/5ea09365e5572.jpg\",\"300\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea09365e5572.jpg\",\"600\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/600_5ea09365e5572.jpg\",\"900\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/900_5ea09365e5572.jpg\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea09365e5572.jpg\"}', 'e', 'e', 1, 1, '2020-04-22 14:26:27', '2020-04-23 04:43:38', '2020-04-23 04:43:38'),
(7, 'fa==چینی و بهداشتی@@en==Chinese and sanitary', 'fa-چینی-و-بهداشتی-en-Chinese-and-sanitary', 1, 'fa==چینی و بهداشتی@@en==Chinese and sanitary', 'fa==چینی و بهداشتی@@en==Chinese and sanitary', 0, '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/5ea15cc1f1295.png\",\"300\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea15cc1f1295.png\",\"600\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/600_5ea15cc1f1295.png\",\"900\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/900_5ea15cc1f1295.png\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea15cc1f1295.png\"}', 'Chinese and sanitary', 'e', 1, 1, '2020-04-23 04:45:46', '2020-04-23 04:45:46', NULL),
(8, 'fa==روشویی@@en==wash basin', 'fa-روشویی-en-wash-basin', 1, 'fa==روشویی@@en==wash basin', 'fa==روشویی@@en==wash basin', 7, '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/5ea15d4a284b6.png\",\"300\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea15d4a284b6.png\",\"600\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/600_5ea15d4a284b6.png\",\"900\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/900_5ea15d4a284b6.png\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea15d4a284b6.png\"}', 'wash basin', 'wash basin', 1, 1, '2020-04-23 04:48:02', '2020-04-23 04:48:12', NULL),
(9, 'fa==کالای آشپزخانه@@en==Kitchen goods', 'fa-کالای-آشپزخانه-en-Kitchen-goods', 1, 'fa==کالای آشپزخانه@@en==Kitchen goods', 'fa==کالای آشپزخانه@@en==Kitchen goods', 0, '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/5ea161734b234.jpg\",\"300\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea161734b234.jpg\",\"600\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/600_5ea161734b234.jpg\",\"900\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/900_5ea161734b234.jpg\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea161734b234.jpg\"}', 'Kitchen goods', 'Kitchen goods', 1, 1, '2020-04-23 05:05:47', '2020-04-23 05:05:47', NULL),
(10, 'fa==سینک@@en==Kitchen sink', 'fa-سینک-en-Kitchen-sink', 1, 'fa==سینک@@en==Kitchen sink', 'fa==سینک@@en==Kitchen sink', 9, '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/5ea161b95e3ca.png\",\"300\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea161b95e3ca.png\",\"600\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/600_5ea161b95e3ca.png\",\"900\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/900_5ea161b95e3ca.png\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea161b95e3ca.png\"}', 'Kitchen sink', 'Kitchen sink', 1, 1, '2020-04-23 05:06:57', '2020-04-23 05:06:57', NULL),
(11, 'fa==سینک روکار@@en==Surface sink', 'fa-سینک-روکار-en-Surface-sink', 1, 'fa==سینک روکار@@en==Surface sink', 'fa==سینک روکار@@en==Surface sink', 10, '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/5ea161fcc1a1f.png\",\"300\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea161fcc1a1f.png\",\"600\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/600_5ea161fcc1a1f.png\",\"900\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/900_5ea161fcc1a1f.png\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea161fcc1a1f.png\"}', 'Surface sink', 'Surface sink', 1, 1, '2020-04-23 05:08:05', '2020-04-23 05:08:05', NULL),
(12, 'fa==سینک توکار@@en==Built-in sink', 'fa-سینک-توکار-en-Built-in-sink', 1, 'fa==سینک توکار@@en==Built-in sink', 'fa==سینک توکار@@en==Built-in sink', 10, '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/5ea16232c9098.png\",\"300\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea16232c9098.png\",\"600\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/600_5ea16232c9098.png\",\"900\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/900_5ea16232c9098.png\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea16232c9098.png\"}', 'سینک توکار', 'سینک توکار', 1, 1, '2020-04-23 05:08:59', '2020-04-23 05:08:59', NULL),
(13, 'fa==هود@@en==Hood', 'fa-هود-en-Hood', 1, 'fa==هود@@en==Hood', 'fa==هود@@en==Hood', 9, '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/5ea162886b020.png\",\"300\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea162886b020.png\",\"600\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/600_5ea162886b020.png\",\"900\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/900_5ea162886b020.png\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea162886b020.png\"}', 'Hood', 'i', 1, 1, '2020-04-23 05:10:24', '2020-04-23 05:10:24', NULL),
(14, 'fa==فر@@en==the oven', 'fa-فر-en-the-oven', 1, 'fa==فر@@en==the oven', 'fa==فر@@en==the oven', 9, '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/5ea162b285cd1.png\",\"300\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea162b285cd1.png\",\"600\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/600_5ea162b285cd1.png\",\"900\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/900_5ea162b285cd1.png\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea162b285cd1.png\"}', 'the oven', 'i', 1, 1, '2020-04-23 05:11:06', '2020-04-23 05:11:06', NULL),
(15, 'fa==لوله و اتصالات@@en==Pipes and fittings', 'fa-لوله-و-اتصالات-en-Pipes-and-fittings', 1, 'fa==لوله و اتصالات@@en==Pipes and fittings', 'fa==لوله و اتصالات@@en==Pipes and fittings', 0, '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/5ea162de74ebe.png\",\"300\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea162de74ebe.png\",\"600\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/600_5ea162de74ebe.png\",\"900\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/900_5ea162de74ebe.png\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea162de74ebe.png\"}', 'لوله و اتصالات', 'i', 1, 1, '2020-04-23 05:11:50', '2020-04-23 05:11:50', NULL),
(16, 'fa==پنج لایه@@en==Five layers', 'fa-پنج-لایه-en-Five-layers', 1, 'fa==پنج لایه@@en==Five layers', 'fa==پنج لایه@@en==Five layers', 15, '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/5ea1631eeb22f.png\",\"300\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea1631eeb22f.png\",\"600\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/600_5ea1631eeb22f.png\",\"900\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/900_5ea1631eeb22f.png\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/productCategories\\/300_5ea1631eeb22f.png\"}', 'Five layers', 'i', 1, 1, '2020-04-23 05:12:55', '2020-04-23 05:12:55', NULL),
(17, 'fa==لوله های فلزی@@en==Metal pipes', 'fa-لوله-های-فلزی-en-Metal-pipes', 1, 'fa==لوله های فلزی@@en==Metal pipes', 'fa==لوله های فلزی@@en==Metal pipes', 15, '[]', 'لوله های فلزی', 'i', 1, 1, '2020-04-23 05:17:02', '2020-04-23 05:17:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `images` text CHARACTER SET utf8,
  `priority` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_details`
--

CREATE TABLE `site_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `images` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_details`
--

INSERT INTO `site_details` (`id`, `title`, `key`, `user_id`, `value`, `images`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'safd', 'sdf', 1, 'sdf', '[]', 'text', 1, '2020-04-16 13:46:39', '2020-04-17 04:18:49', '2020-04-17 04:18:49'),
(2, 'e', 'e', 1, 'e', '[]', 'text', 1, '2020-04-16 13:47:36', '2020-04-16 13:47:36', NULL),
(3, 'asd', 'asdsad', 1, 'cdsf', '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/product\\/5e996d8331299.jpg\",\"300\":\"\\/upload\\/images\\/2020\\/4\\/product\\/300_5e996d8331299.jpg\",\"600\":\"\\/upload\\/images\\/2020\\/4\\/product\\/600_5e996d8331299.jpg\",\"900\":\"\\/upload\\/images\\/2020\\/4\\/product\\/900_5e996d8331299.jpg\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/product\\/300_5e996d8331299.jpg\"}', 'image', 1, '2020-04-17 03:57:05', '2020-04-17 04:19:07', NULL),
(4, 'logo', 'image_logo', 1, 'fa==rr@@en==rr', '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/product\\/5ea1b774e1954.jpg\",\"300\":\"\\/upload\\/images\\/2020\\/4\\/product\\/300_5ea1b774e1954.jpg\",\"600\":\"\\/upload\\/images\\/2020\\/4\\/product\\/600_5ea1b774e1954.jpg\",\"900\":\"\\/upload\\/images\\/2020\\/4\\/product\\/900_5ea1b774e1954.jpg\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/product\\/300_5ea1b774e1954.jpg\"}', 'image', 1, '2020-04-17 13:05:04', '2020-04-23 11:12:45', NULL),
(5, 'site_name', 'site_name', 1, 'assen', '[]', 'text', 1, '2020-04-17 14:52:44', '2020-04-17 14:52:44', NULL),
(6, 'ds', 'ds', 1, 'fa==fff@@en==eeeeeee', '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/product\\/5ea05ebd205b1.jpg\",\"300\\u00d7100\":\"\\/upload\\/images\\/2020\\/4\\/product\\/300\\u00d7100_5ea05ebd205b1.jpg\",\"600\\u00d7200\":\"\\/upload\\/images\\/2020\\/4\\/product\\/600\\u00d7200_5ea05ebd205b1.jpg\",\"900\\u00d71500\":\"\\/upload\\/images\\/2020\\/4\\/product\\/900\\u00d71500_5ea05ebd205b1.jpg\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/product\\/300\\u00d7100_5ea05ebd205b1.jpg\"}', 'text', 1, '2020-04-22 06:49:04', '2020-04-22 13:27:51', NULL),
(7, 'ww', 'ww', 1, 'fa==fffffff@@en==eeeeee', '[]', 'text', 1, '2020-04-22 13:30:45', '2020-04-22 13:32:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'index',
  `priority` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `user_id`, `images`, `link`, `type`, `priority`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'fa==1@@en==11', 1, '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/slider\\/5ea1b1d142e7d.jpg\",\"920-380\":\"\\/upload\\/images\\/2020\\/4\\/slider\\/920-380_5ea1b1d142e7d.jpg\",\"600\":\"\\/upload\\/images\\/2020\\/4\\/slider\\/600_5ea1b1d142e7d.jpg\",\"920\":\"\\/upload\\/images\\/2020\\/4\\/slider\\/920_5ea1b1d142e7d.jpg\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/slider\\/920-380_5ea1b1d142e7d.jpg\"}', '#', 'index', 1, 1, '2020-04-22 15:55:07', '2020-04-23 10:53:56', NULL),
(2, 'fa==slider@@en==slider', 1, '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/slider\\/5ea1b1b8e6459.jpg\",\"920-380\":\"\\/upload\\/images\\/2020\\/4\\/slider\\/920-380_5ea1b1b8e6459.jpg\",\"600\":\"\\/upload\\/images\\/2020\\/4\\/slider\\/600_5ea1b1b8e6459.jpg\",\"920\":\"\\/upload\\/images\\/2020\\/4\\/slider\\/920_5ea1b1b8e6459.jpg\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/slider\\/920-380_5ea1b1b8e6459.jpg\"}', '#', 'index', 6, 1, '2020-04-23 10:36:59', '2020-04-23 10:53:21', NULL),
(3, 'fa==2@@en==2', 1, '{\"images\":{\"original\":\"\\/upload\\/images\\/2020\\/4\\/slider\\/5ea1b33ee6b97.jpg\",\"920-380\":\"\\/upload\\/images\\/2020\\/4\\/slider\\/920-380_5ea1b33ee6b97.jpg\",\"600\":\"\\/upload\\/images\\/2020\\/4\\/slider\\/600_5ea1b33ee6b97.jpg\",\"920\":\"\\/upload\\/images\\/2020\\/4\\/slider\\/920_5ea1b33ee6b97.jpg\"},\"thumb\":\"\\/upload\\/images\\/2020\\/4\\/slider\\/920-380_5ea1b33ee6b97.jpg\"}', '#', 'index', 2, 1, '2020-04-23 10:54:47', '2020-04-23 10:54:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `family`, `active`, `level`, `email`, `phone`, `email_verified_at`, `phone_verified_at`, `password`, `priority`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'admin', 1, 'user', 'admin@gmail.com', '1', NULL, NULL, '1', 0, 0, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currency_converts`
--
ALTER TABLE `currency_converts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `currency_converts_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `site_details`
--
ALTER TABLE `site_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `site_details_key_unique` (`key`),
  ADD KEY `site_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currency_converts`
--
ALTER TABLE `currency_converts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_details`
--
ALTER TABLE `site_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `currency_converts`
--
ALTER TABLE `currency_converts`
  ADD CONSTRAINT `currency_converts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `site_details`
--
ALTER TABLE `site_details`
  ADD CONSTRAINT `site_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
