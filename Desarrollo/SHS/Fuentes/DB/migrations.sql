-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando datos para la tabla shs.migrations: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(4, '2020_12_06_202725_create_servicios_table', 1),
	(5, '2014_10_12_000000_create_users_table', 2),
	(6, '2014_10_12_100000_create_password_resets_table', 2),
	(7, '2019_08_19_000000_create_failed_jobs_table', 2),
	(8, '2020_08_03_032243_create_profiles_table', 2),
	(9, '2020_08_24_193054_create_services_table', 2),
	(10, '2020_09_08_233848_create_posts_table', 2),
	(11, '2020_09_08_234333_create_comments_table', 2),
	(12, '2020_09_13_154557_create_type_ratings', 2),
	(13, '2020_09_13_161706_create_ratings_table', 2),
	(14, '2020_09_13_161721_create_purchases_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
