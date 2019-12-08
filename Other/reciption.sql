-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.2.3-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table test_my_package.age_types
CREATE TABLE IF NOT EXISTS `age_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_my_package.age_types: ~3 rows (approximately)
/*!40000 ALTER TABLE `age_types` DISABLE KEYS */;
INSERT INTO `age_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Infant', '2019-12-08 15:52:45', '2019-12-08 15:52:45'),
	(2, 'Young', '2019-12-08 15:52:45', '2019-12-08 15:52:45'),
	(3, 'Older', '2019-12-08 15:53:22', '2019-12-08 15:53:22');
/*!40000 ALTER TABLE `age_types` ENABLE KEYS */;

-- Dumping structure for table test_my_package.eater_types
CREATE TABLE IF NOT EXISTS `eater_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_my_package.eater_types: ~5 rows (approximately)
/*!40000 ALTER TABLE `eater_types` DISABLE KEYS */;
INSERT INTO `eater_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Vegetarian', '2019-12-08 15:45:12', '2019-12-08 15:45:14'),
	(2, 'Non Vegetarian', '2019-12-08 15:45:36', '2019-12-08 15:45:37'),
	(3, 'Non Vegetagian Without Mutton', '2019-12-08 15:45:36', '2019-12-08 15:45:37'),
	(4, 'Non Vegetagian Without Meat', '2019-12-08 15:45:36', '2019-12-08 15:45:37'),
	(5, 'Avoiding Rice Items', '2019-12-08 15:45:36', '2019-12-08 15:45:37');
/*!40000 ALTER TABLE `eater_types` ENABLE KEYS */;

-- Dumping structure for table test_my_package.families
CREATE TABLE IF NOT EXISTS `families` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `care_of` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_members` tinyint(3) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_my_package.families: ~1 rows (approximately)
/*!40000 ALTER TABLE `families` DISABLE KEYS */;
INSERT INTO `families` (`id`, `care_of`, `total_members`, `created_at`, `updated_at`) VALUES
	(1, 'Sri Sunil Kumar Maitra', 7, '2019-12-08 15:50:25', '2019-12-08 15:50:26');
/*!40000 ALTER TABLE `families` ENABLE KEYS */;

-- Dumping structure for table test_my_package.guests
CREATE TABLE IF NOT EXISTS `guests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `age_type_id` int(10) unsigned NOT NULL,
  `eater_type_id` int(10) unsigned NOT NULL,
  `family_id` int(10) unsigned DEFAULT NULL,
  `relation_id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gifts` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_invited` tinyint(3) unsigned NOT NULL DEFAULT 1,
  `is_present` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `is_eaten` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_my_package.guests: ~7 rows (approximately)
/*!40000 ALTER TABLE `guests` DISABLE KEYS */;
INSERT INTO `guests` (`id`, `age_type_id`, `eater_type_id`, `family_id`, `relation_id`, `name`, `gifts`, `is_invited`, `is_present`, `is_eaten`, `created_at`, `updated_at`) VALUES
	(1, 3, 2, 1, 1, 'Barun Kumar Maitra', NULL, 1, 1, 1, '2019-12-08 15:54:30', '2019-12-08 15:54:31'),
	(2, 3, 2, 1, 1, 'Arun Kumar Maitra', NULL, 1, 1, 1, '2019-12-08 15:54:30', '2019-12-08 15:54:31'),
	(3, 3, 2, 1, 1, 'Sri Sunik Kumar Maitra', NULL, 1, 1, 1, '2019-12-08 15:54:30', '2019-12-08 15:54:31'),
	(4, 3, 2, 2, 1, 'Barun er Ma', NULL, 1, 0, 0, '2019-12-08 15:54:30', '2019-12-08 15:54:31'),
	(5, 3, 2, 2, 1, 'Barun er Bou', NULL, 1, 0, 0, '2019-12-08 15:54:30', '2019-12-08 15:54:31'),
	(6, 3, 4, 1, 1, 'Barun er Thakuma', NULL, 1, 1, 1, '2019-12-08 15:54:30', '2019-12-08 15:54:31'),
	(7, 1, 2, 1, 1, 'Barun er Chele', NULL, 1, 1, 1, '2019-12-08 15:54:30', '2019-12-08 15:54:31');
/*!40000 ALTER TABLE `guests` ENABLE KEYS */;

-- Dumping structure for table test_my_package.inquiries
CREATE TABLE IF NOT EXISTS `inquiries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_my_package.inquiries: ~0 rows (approximately)
/*!40000 ALTER TABLE `inquiries` DISABLE KEYS */;
/*!40000 ALTER TABLE `inquiries` ENABLE KEYS */;

-- Dumping structure for table test_my_package.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_my_package.migrations: ~8 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_04_28_095559_create_inquiries_table', 1),
	(4, '2019_12_08_085626_create_families_table', 1),
	(5, '2019_12_08_085734_create_relations_table', 1),
	(6, '2019_12_08_090034_create_age_types_table', 1),
	(7, '2019_12_08_090104_create_eater_types_table', 1),
	(8, '2019_12_08_090116_create_guests_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table test_my_package.relations
CREATE TABLE IF NOT EXISTS `relations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table test_my_package.relations: ~3 rows (approximately)
/*!40000 ALTER TABLE `relations` DISABLE KEYS */;
INSERT INTO `relations` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Neighbor', '2019-12-08 15:48:57', '2019-12-08 15:48:59'),
	(2, 'Relative', '2019-12-08 15:48:57', '2019-12-08 15:48:59'),
	(3, 'Outside Guest', '2019-12-08 15:48:57', '2019-12-08 15:48:59');
/*!40000 ALTER TABLE `relations` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
