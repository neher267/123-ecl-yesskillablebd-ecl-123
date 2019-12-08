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

-- Dumping data for table test_my_package.guests: ~0 rows (approximately)
/*!40000 ALTER TABLE `guests` DISABLE KEYS */;
INSERT INTO `guests` (`id`, `age_type_id`, `eater_type_id`, `family_id`, `relation_id`, `name`, `gifts`, `is_invited`, `is_present`, `is_eaten`, `created_at`, `updated_at`) VALUES
	(1, 3, 2, 1, 1, 'Barun Kumar Maitra', NULL, 1, 1, 1, '2019-12-08 15:54:30', '2019-12-08 15:54:31'),
	(2, 3, 2, 1, 1, 'Arun Kumar Maitra', NULL, 1, 1, 1, '2019-12-08 15:54:30', '2019-12-08 15:54:31'),
	(3, 3, 2, 1, 1, 'Sri Sunik Kumar Maitra', NULL, 1, 1, 1, '2019-12-08 15:54:30', '2019-12-08 15:54:31'),
	(4, 3, 2, 1, 1, 'Barun er Ma', NULL, 1, 0, 0, '2019-12-08 15:54:30', '2019-12-08 15:54:31'),
	(5, 3, 2, 1, 1, 'Barun er Bou', NULL, 1, 0, 0, '2019-12-08 15:54:30', '2019-12-08 15:54:31'),
	(6, 3, 4, 1, 1, 'Barun er Thakuma', NULL, 1, 1, 1, '2019-12-08 15:54:30', '2019-12-08 15:54:31'),
	(7, 1, 2, 1, 1, 'Barun er Chele', NULL, 1, 1, 1, '2019-12-08 15:54:30', '2019-12-08 15:54:31');
/*!40000 ALTER TABLE `guests` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

INSERT INTO `guests` (`age_type_id`, `eater_type_id`, `family_id`, `relation_id`, `name`) VALUES
	(3, 2, 1, 1, 'Barun Kumar Maitra'),
	(3, 2, 1, 1, 'Arun Kumar Maitra');