-- -------------------------------------------------------------
-- TablePlus 5.3.8(500)
--
-- https://tableplus.com/
--
-- Database: trezza_master_casting
-- Generation Time: 2023-08-07 08:33:38.4040
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `approval_statuses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `customers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate_contact` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `employees` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `menus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `text` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` int DEFAULT NULL,
  `label_color` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_by` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `order_comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `work_order_id` bigint unsigned NOT NULL,
  `work_order_upload_id` bigint unsigned NOT NULL,
  `work_order_upload_image_id` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `order_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `work_order_id` bigint unsigned NOT NULL,
  `work_order_assign_id` bigint unsigned NOT NULL,
  `work_order_upload_id` bigint unsigned NOT NULL,
  `view_id` bigint unsigned DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `order_statuses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `work_order_id` bigint unsigned NOT NULL,
  `status_id` bigint unsigned NOT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `processes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `role_url` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned NOT NULL,
  `url_id` bigint unsigned NOT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `role_user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  `table_id` bigint unsigned DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `room_users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `room_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `rooms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `room_name_id` bigint unsigned NOT NULL,
  `has_group` tinyint NOT NULL DEFAULT '0',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `statuses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `urls` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `text` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` int DEFAULT NULL,
  `label_color` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_by` int DEFAULT NULL,
  `menu_id` int unsigned DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `user_urls` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `url_id` bigint unsigned NOT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `work_order_assigns` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `work_order_id` bigint unsigned NOT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `is_closed` tinyint(1) NOT NULL DEFAULT '0',
  `status_id` bigint unsigned DEFAULT NULL,
  `approval_status_id` bigint unsigned DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `work_order_uploads` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `work_order_id` bigint unsigned NOT NULL,
  `work_order_assign_id` bigint unsigned NOT NULL,
  `for_approver_approval` tinyint(1) NOT NULL DEFAULT '0',
  `for_customer_approval` tinyint(1) NOT NULL DEFAULT '0',
  `is_closed` tinyint(1) NOT NULL DEFAULT '0',
  `status_id` bigint unsigned DEFAULT NULL,
  `approval_status_id` bigint unsigned DEFAULT NULL,
  `employee_id` bigint unsigned NOT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `work_orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint unsigned DEFAULT NULL,
  `process_id` bigint unsigned DEFAULT NULL,
  `job_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `po_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` decimal(12,2) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8mb4_unicode_ci,
  `status_id` bigint unsigned DEFAULT NULL,
  `approval_status_id` bigint unsigned DEFAULT NULL,
  `is_closed` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `approval_statuses` (`id`, `name`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Approval Pending', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Approved', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Approved & show to customer', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Modification', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Hold', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Reject', NULL, NULL, NULL, NULL, NULL, NULL);

INSERT INTO `customers` (`id`, `code`, `name`, `phone`, `email`, `address`, `alternate_contact`, `user_id`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1234', 'mannu', '1234567890', 'mannu@gmail.com', 'mumbai-maharastra', '123456', NULL, 1, 1, NULL, '2023-07-30 15:44:26', '2023-07-30 15:44:57', NULL),
(2, 'p12345', 'pravin', '91828373774', 'pravin@gmail.com', 'bhGA', '8828928373', 3, 1, NULL, NULL, '2023-08-06 23:05:59', '2023-08-06 23:05:59', NULL);

INSERT INTO `employees` (`id`, `name`, `code`, `email`, `profile`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'mantosh1', 'm1234561', 'mantosh@gmail1.com', 'profile1', 1, 1, NULL, '2023-07-30 15:21:23', '2023-07-30 15:22:22', NULL);

INSERT INTO `menus` (`id`, `text`, `url`, `icon`, `label`, `label_color`, `order_by`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dashboard', '/admin', 'fas fa-tachometer-alt', NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, NULL),
(2, 'Masters', 'admin', 'fas fa-cog', NULL, NULL, 2, 1, NULL, NULL, NULL, NULL, NULL);

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_11_112809_add_column_to_users_table', 1),
(6, '2022_10_12_120225_create_roles_table', 1),
(7, '2022_11_27_093627_create_urls_table', 1),
(8, '2022_12_02_054601_create_user_urls_table', 1),
(9, '2023_01_25_162503_create_rooms_table', 1),
(10, '2023_01_25_162656_create_room_users_table', 1),
(11, '2023_01_26_093605_create_menus_table', 1),
(12, '2023_06_12_221529_create_role_user_table', 1),
(13, '2023_06_12_221632_create_role_url_table', 1),
(14, '2023_07_30_150830_create_employees_table', 2),
(15, '2023_07_30_152308_create_customers_table', 3),
(17, '2023_07_30_155302_create_statuses_table', 4),
(18, '2023_07_30_155328_create_order_statuses_table', 4),
(21, '2023_07_30_160725_create_processes_table', 5),
(24, '2023_07_30_155350_create_order_comments_table', 6),
(25, '2023_07_30_155409_create_order_images_table', 6),
(28, '2023_08_04_230846_create_approval_statuses_table', 7),
(29, '2023_07_30_154656_create_work_orders_table', 8),
(30, '2023_08_02_225715_create_work_order_assigns_table', 8),
(31, '2023_08_02_225725_create_work_order_uploads_table', 8);

INSERT INTO `order_comments` (`id`, `work_order_id`, `work_order_upload_id`, `work_order_upload_image_id`, `user_id`, `comment`, `attachment`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, 1, 'test', NULL, NULL, NULL, NULL, '2023-08-05 22:53:19', '2023-08-05 22:53:19', NULL);

INSERT INTO `order_images` (`id`, `work_order_id`, `work_order_assign_id`, `work_order_upload_id`, `view_id`, `image`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, NULL, 'images/workorder/16910878001.jpg', NULL, NULL, NULL, '2023-08-04 00:06:40', '2023-08-04 00:06:40', NULL),
(2, 1, 1, 1, NULL, 'images/workorder/16910878002.jpg', NULL, NULL, NULL, '2023-08-04 00:06:40', '2023-08-04 00:06:40', NULL),
(3, 1, 1, 1, NULL, 'images/workorder/16910878003.jpg', NULL, NULL, NULL, '2023-08-04 00:06:40', '2023-08-04 00:06:40', NULL),
(4, 1, 1, 1, NULL, 'images/workorder/16910878004.jpg', NULL, NULL, NULL, '2023-08-04 00:06:40', '2023-08-04 00:06:40', NULL),
(5, 1, 1, 2, NULL, 'images/workorder/16911680571.jpg', NULL, NULL, NULL, '2023-08-04 22:24:17', '2023-08-04 22:24:17', NULL),
(6, 1, 1, 2, NULL, 'images/workorder/16911680572.jpg', NULL, NULL, NULL, '2023-08-04 22:24:17', '2023-08-04 22:24:17', NULL),
(7, 1, 1, 2, NULL, 'images/workorder/16911680573.jpg', NULL, NULL, NULL, '2023-08-04 22:24:17', '2023-08-04 22:24:17', NULL),
(8, 1, 1, 2, NULL, 'images/workorder/16911680574.jpg', NULL, NULL, NULL, '2023-08-04 22:24:17', '2023-08-04 22:24:17', NULL),
(9, 1, 1, 3, NULL, 'images/workorder/16911685041.jpg', NULL, NULL, NULL, '2023-08-04 22:31:44', '2023-08-04 22:31:44', NULL),
(10, 1, 1, 3, NULL, 'images/workorder/16911685042.jpg', NULL, NULL, NULL, '2023-08-04 22:31:44', '2023-08-04 22:31:44', NULL),
(11, 1, 1, 3, NULL, 'images/workorder/16911685043.jpg', NULL, NULL, NULL, '2023-08-04 22:31:44', '2023-08-04 22:31:44', NULL),
(12, 1, 1, 3, NULL, 'images/workorder/16911685044.jpg', NULL, NULL, NULL, '2023-08-04 22:31:44', '2023-08-04 22:31:44', NULL),
(13, 1, 1, 1, NULL, 'images/workorder/16911723191.jpg', NULL, NULL, NULL, '2023-08-04 23:35:19', '2023-08-04 23:35:19', NULL),
(14, 1, 1, 1, NULL, 'images/workorder/16911723192.jpg', NULL, NULL, NULL, '2023-08-04 23:35:19', '2023-08-04 23:35:19', NULL),
(15, 1, 1, 1, NULL, 'images/workorder/16911723193.jpg', NULL, NULL, NULL, '2023-08-04 23:35:19', '2023-08-04 23:35:19', NULL),
(16, 1, 1, 1, NULL, 'images/workorder/16911723194.jpg', NULL, NULL, NULL, '2023-08-04 23:35:19', '2023-08-04 23:35:19', NULL);

INSERT INTO `order_statuses` (`id`, `work_order_id`, `status_id`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 3, 1, 1, NULL, NULL, '2023-07-30 18:09:09', '2023-07-30 18:09:09', NULL),
(3, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, 1, 1, NULL, NULL, '2023-08-03 21:44:06', '2023-08-03 21:44:06', NULL),
(5, 1, 1, NULL, 1, NULL, '2023-08-03 22:41:17', '2023-08-03 22:41:17', NULL),
(6, 1, 1, NULL, 1, NULL, '2023-08-03 22:42:53', '2023-08-03 22:42:53', NULL),
(7, 1, 1, NULL, 1, NULL, '2023-08-03 22:43:58', '2023-08-03 22:43:58', NULL),
(8, 1, 1, NULL, 1, NULL, '2023-08-03 22:45:10', '2023-08-03 22:45:10', NULL),
(9, 1, 1, NULL, 1, NULL, '2023-08-03 22:47:05', '2023-08-03 22:47:05', NULL),
(10, 1, 1, NULL, 1, NULL, '2023-08-03 22:49:34', '2023-08-03 22:49:34', NULL),
(11, 1, 1, NULL, 1, NULL, '2023-08-04 22:27:24', '2023-08-04 22:27:24', NULL),
(12, 1, 1, NULL, 1, NULL, '2023-08-04 22:29:59', '2023-08-04 22:29:59', NULL),
(13, 1, 1, 1, NULL, NULL, '2023-08-04 23:33:27', '2023-08-04 23:33:27', NULL),
(14, 1, 1, NULL, 1, NULL, '2023-08-05 23:16:43', '2023-08-05 23:16:43', NULL);

INSERT INTO `processes` (`id`, `code`, `name`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'RS', 'rough sketch', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'FS', 'Final Sketch', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'CD', 'CAD', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'CAM', 'CAM', NULL, NULL, NULL, NULL, NULL, NULL);

INSERT INTO `role_url` (`id`, `role_id`, `url_id`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, 4, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 1, 5, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 1, 30, 1, NULL, NULL, '2023-07-30 13:50:18', '2023-07-30 13:50:18', NULL),
(28, 1, 29, 1, NULL, NULL, '2023-07-30 13:50:30', '2023-07-30 13:50:30', NULL),
(29, 1, 31, 1, NULL, NULL, '2023-07-30 13:50:42', '2023-07-30 13:50:42', NULL),
(30, 1, 32, 1, NULL, NULL, '2023-08-05 23:26:36', '2023-08-05 23:26:36', NULL),
(31, 2, 31, 1, NULL, NULL, '2023-08-07 07:52:20', '2023-08-07 07:52:20', NULL);

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `table_id`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 2, 1, 1, NULL, NULL, '2023-08-06 00:09:55', '2023-08-06 00:09:55', NULL),
(3, 3, 2, 2, NULL, NULL, NULL, '2023-08-06 23:19:08', '2023-08-06 23:19:08', NULL),
(4, 2, 2, 1, NULL, NULL, NULL, '2023-08-06 23:19:52', '2023-08-06 23:19:52', NULL);

INSERT INTO `roles` (`id`, `role_name`, `role_desc`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super Admin', 'Super Admin', NULL, NULL, NULL, '2023-06-12 23:26:52', '2023-06-12 23:26:52', NULL),
(2, 'Customer', 'Customer', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Employee', 'Employee', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Customer Support', 'Customer Support', NULL, NULL, NULL, NULL, NULL, NULL);

INSERT INTO `statuses` (`id`, `name`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Open', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Closed', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Hold', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Reject', NULL, NULL, NULL, NULL, NULL, NULL);

INSERT INTO `urls` (`id`, `text`, `url`, `icon`, `label`, `label_color`, `order_by`, `menu_id`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Menu', 'master/menu', 'far fa-dot-circle', NULL, NULL, 1, 2, 1, 1, NULL, NULL, '2023-06-13 00:11:18', NULL),
(2, 'Urls', 'master/urls', 'far fa-dot-circle', NULL, NULL, 2, 2, 1, NULL, NULL, NULL, NULL, NULL),
(3, 'RoleMapUrl', 'master/role-url', 'far fa-dot-circle', NULL, NULL, 3, 2, 1, NULL, NULL, NULL, NULL, NULL),
(4, 'RoleMapUser', 'master/role-user', 'far fa-dot-circle', NULL, NULL, 4, 2, 1, NULL, NULL, NULL, NULL, NULL),
(5, 'User', 'master/user', 'far fa-dot-circle', NULL, NULL, 4, 2, 1, NULL, NULL, NULL, NULL, NULL),
(29, 'Customer', 'master/customer', NULL, NULL, NULL, NULL, 2, 1, NULL, NULL, '2023-07-30 13:49:03', '2023-07-30 13:49:03', NULL),
(30, 'Employee', 'master/employee', NULL, NULL, NULL, NULL, 2, 1, NULL, NULL, '2023-07-30 13:49:22', '2023-07-30 13:49:22', NULL),
(31, 'Work Order', 'master/workorder', NULL, NULL, NULL, NULL, 2, 1, NULL, NULL, '2023-07-30 13:49:58', '2023-07-30 13:49:58', NULL),
(32, 'Role', 'master/role', NULL, NULL, NULL, NULL, 2, 1, NULL, NULL, '2023-08-05 23:26:09', '2023-08-05 23:26:09', NULL);

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Mantosh Nishad', 'mantosh@gmail.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '2023-06-12 23:26:52', '2023-06-12 23:26:52'),
(2, 'customer', 'mannu@gmail.com', NULL, '$2y$10$M3CyQjvouhtlkla42b4BIum9RjctHsXp4M.e3IKDgWpSspC0pnZlq', NULL, NULL, '2023-08-06 00:08:32', '2023-08-06 00:08:32'),
(3, 'Pravin', 'pravin@gmail.com', NULL, '$2y$10$md9Zw266DNQP4csozWcogOAUjjUzHdf74xw..3nkDkySw1xoY1Wkm', NULL, NULL, '2023-08-06 22:57:38', '2023-08-07 08:18:26');

INSERT INTO `work_order_assigns` (`id`, `work_order_id`, `employee_id`, `is_closed`, `status_id`, `approval_status_id`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 0, NULL, NULL, 1, NULL, NULL, '2023-08-04 23:33:27', '2023-08-04 23:33:27', NULL),
(2, 1, 1, 0, NULL, NULL, 1, NULL, NULL, '2023-08-05 23:16:43', '2023-08-05 23:16:43', NULL);

INSERT INTO `work_order_uploads` (`id`, `work_order_id`, `work_order_assign_id`, `for_approver_approval`, `for_customer_approval`, `is_closed`, `status_id`, `approval_status_id`, `employee_id`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 0, 0, 3, 2, 1, NULL, NULL, NULL, '2023-08-04 23:35:19', '2023-08-05 22:53:19', NULL);

INSERT INTO `work_orders` (`id`, `customer_id`, `process_id`, `job_id`, `po_number`, `budget`, `start_date`, `end_date`, `title`, `image`, `info`, `status_id`, `approval_status_id`, `is_closed`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '123', '123', 1000.00, '2023-08-03', '2023-08-04', 'Test By Mantosh Nishad', 'images/workorder/project_files_image_003.jpg', 'Please make this product i mention my budget', 1, 2, 0, 1, 1, NULL, '2023-08-04 23:33:27', '2023-08-05 23:16:43', NULL);



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;