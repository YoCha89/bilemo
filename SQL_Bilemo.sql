-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Listage des données de la table bilemo.brand : ~0 rows (environ)
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
INSERT INTO `brand` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'iPhone', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(2, 'Samsung', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(3, 'Oppo', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(4, 'Huawei', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(5, 'Xiaomi', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(6, 'FairPhone', '2022-08-03 16:49:01', '2022-08-03 16:49:01');
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;

-- Listage des données de la table bilemo.capacity : ~0 rows (environ)
/*!40000 ALTER TABLE `capacity` DISABLE KEYS */;
INSERT INTO `capacity` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, '80GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(2, '180GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(3, '360GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(4, '500GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(5, '75GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(6, '400GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(7, '300GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01');
/*!40000 ALTER TABLE `capacity` ENABLE KEYS */;

-- Listage des données de la table bilemo.color : ~8 rows (environ)
/*!40000 ALTER TABLE `color` DISABLE KEYS */;
INSERT INTO `color` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Blue', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(2, 'Red', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(3, 'Yellow', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(4, 'Green', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(5, 'Purple', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(6, 'White', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(7, 'Black', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(8, 'Orange', '2022-08-03 16:49:01', '2022-08-03 16:49:01');
/*!40000 ALTER TABLE `color` ENABLE KEYS */;

-- Listage des données de la table bilemo.doctrine_migration_versions : ~0 rows (environ)
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
	('DoctrineMigrations\\Version20220803164138', '2022-08-03 16:48:48', 236);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;

-- Listage des données de la table bilemo.model : ~0 rows (environ)
/*!40000 ALTER TABLE `model` DISABLE KEYS */;
INSERT INTO `model` (`id`, `brand_id`, `capacity_id`, `color_id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 1, 6, 1, 'IPHBLU400GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(2, 2, 5, 5, 'SAMPUR75GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(3, 2, 2, 3, 'SAMYEL180GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(4, 5, 2, 4, 'XIAGRE180GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(5, 4, 2, 2, 'HUARED180GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(6, 2, 6, 1, 'SAMBLU400GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(7, 3, 1, 7, 'OPPBLA80GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(8, 1, 5, 7, 'IPHBLA75GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(9, 6, 7, 6, 'FAIWHI300GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(10, 3, 6, 6, 'OPPWHI400GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(11, 4, 5, 3, 'HUAYEL75GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(12, 3, 5, 6, 'OPPWHI75GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(13, 6, 7, 1, 'FAIBLU300GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(14, 3, 7, 2, 'OPPRED300GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(15, 6, 2, 6, 'FAIWHI180GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(16, 5, 3, 7, 'XIABLA360GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(17, 4, 7, 8, 'HUAORA300GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(18, 6, 7, 2, 'FAIRED300GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(19, 1, 4, 8, 'IPHORA500GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(20, 4, 3, 8, 'HUAORA360GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(21, 1, 5, 4, 'IPHGRE75GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(22, 3, 1, 8, 'OPPORA80GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(23, 4, 3, 5, 'HUAPUR360GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(24, 1, 7, 1, 'IPHBLU300GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(25, 2, 7, 3, 'SAMYEL300GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(26, 1, 7, 8, 'IPHORA300GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(27, 5, 5, 7, 'XIABLA75GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(28, 3, 3, 2, 'OPPRED360GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(29, 3, 3, 6, 'OPPWHI360GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(30, 3, 6, 6, 'OPPWHI400GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(31, 1, 7, 5, 'IPHPUR300GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(32, 4, 1, 4, 'HUAGRE80GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(33, 3, 7, 5, 'OPPPUR300GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(34, 6, 6, 1, 'FAIBLU400GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(35, 4, 7, 6, 'HUAWHI300GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(36, 6, 1, 5, 'FAIPUR80GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(37, 1, 2, 5, 'IPHPUR180GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(38, 1, 3, 6, 'IPHWHI360GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(39, 6, 4, 3, 'FAIYEL500GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(40, 1, 1, 3, 'IPHYEL80GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(41, 6, 4, 2, 'FAIRED500GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(42, 4, 1, 3, 'HUAYEL80GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(43, 4, 7, 8, 'HUAORA300GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(44, 5, 7, 7, 'XIABLA300GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(45, 3, 2, 3, 'OPPYEL180GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(46, 5, 5, 5, 'XIAPUR75GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(47, 6, 4, 5, 'FAIPUR500GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(48, 1, 4, 4, 'IPHGRE500GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(49, 3, 4, 5, 'OPPPUR500GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(50, 5, 3, 6, 'XIAWHI360GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(51, 2, 4, 2, 'SAMRED500GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(52, 2, 6, 2, 'SAMRED400GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(53, 3, 5, 2, 'OPPRED75GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(54, 4, 4, 3, 'HUAYEL500GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(55, 6, 1, 8, 'FAIORA80GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(56, 4, 1, 7, 'HUABLA80GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(57, 4, 1, 4, 'HUAGRE80GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(58, 1, 4, 8, 'IPHORA500GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(59, 3, 5, 6, 'OPPWHI75GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(60, 1, 6, 3, 'IPHYEL400GO', '2022-08-03 16:49:01', '2022-08-03 16:49:01');
/*!40000 ALTER TABLE `model` ENABLE KEYS */;

-- Listage des données de la table bilemo.phone : ~200 rows (environ)
/*!40000 ALTER TABLE `phone` DISABLE KEYS */;
INSERT INTO `phone` (`id`, `model_id`, `created_at`, `updated_at`) VALUES
	(1, 7, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(2, 28, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(3, 37, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(4, 18, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(5, 16, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(6, 26, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(7, 42, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(8, 51, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(9, 12, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(10, 53, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(11, 8, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(12, 2, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(13, 50, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(14, 41, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(15, 39, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(16, 23, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(17, 5, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(18, 41, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(19, 2, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(20, 31, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(21, 35, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(22, 53, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(23, 53, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(24, 8, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(25, 47, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(26, 12, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(27, 8, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(28, 37, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(29, 48, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(30, 43, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(31, 39, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(32, 24, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(33, 31, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(34, 54, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(35, 50, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(36, 33, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(37, 19, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(38, 21, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(39, 19, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(40, 9, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(41, 5, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(42, 22, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(43, 6, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(44, 21, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(45, 9, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(46, 50, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(47, 60, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(48, 36, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(49, 44, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(50, 34, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(51, 39, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(52, 52, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(53, 36, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(54, 1, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(55, 12, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(56, 28, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(57, 26, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(58, 54, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(59, 19, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(60, 21, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(61, 1, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(62, 29, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(63, 22, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(64, 12, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(65, 48, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(66, 4, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(67, 24, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(68, 2, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(69, 27, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(70, 33, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(71, 2, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(72, 46, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(73, 19, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(74, 8, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(75, 18, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(76, 52, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(77, 29, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(78, 12, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(79, 31, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(80, 55, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(81, 16, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(82, 48, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(83, 24, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(84, 9, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(85, 54, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(86, 31, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(87, 38, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(88, 25, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(89, 5, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(90, 32, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(91, 11, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(92, 4, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(93, 7, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(94, 52, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(95, 34, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(96, 4, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(97, 9, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(98, 55, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(99, 20, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(100, 35, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(101, 3, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(102, 46, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(103, 19, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(104, 60, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(105, 14, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(106, 26, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(107, 53, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(108, 44, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(109, 38, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(110, 19, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(111, 10, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(112, 50, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(113, 4, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(114, 19, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(115, 35, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(116, 22, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(117, 40, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(118, 15, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(119, 22, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(120, 36, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(121, 13, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(122, 41, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(123, 44, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(124, 35, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(125, 6, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(126, 26, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(127, 55, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(128, 33, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(129, 59, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(130, 21, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(131, 21, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(132, 58, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(133, 15, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(134, 19, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(135, 53, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(136, 60, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(137, 26, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(138, 19, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(139, 46, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(140, 32, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(141, 44, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(142, 4, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(143, 46, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(144, 49, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(145, 41, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(146, 32, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(147, 25, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(148, 27, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(149, 29, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(150, 10, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(151, 8, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(152, 12, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(153, 23, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(154, 32, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(155, 6, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(156, 54, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(157, 15, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(158, 17, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(159, 35, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(160, 19, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(161, 55, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(162, 35, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(163, 37, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(164, 60, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(165, 36, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(166, 51, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(167, 58, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(168, 10, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(169, 58, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(170, 57, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(171, 60, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(172, 20, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(173, 31, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(174, 2, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(175, 3, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(176, 26, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(177, 46, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(178, 33, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(179, 28, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(180, 35, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(181, 25, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(182, 16, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(183, 46, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(184, 10, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(185, 51, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(186, 59, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(187, 3, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(188, 51, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(189, 12, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(190, 30, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(191, 21, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(192, 23, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(193, 12, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(194, 40, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(195, 58, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(196, 33, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(197, 12, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(198, 47, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(199, 16, '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(200, 44, '2022-08-03 16:49:01', '2022-08-03 16:49:01');
/*!40000 ALTER TABLE `phone` ENABLE KEYS */;

-- Listage des données de la table bilemo.refresh_tokens : ~6 rows (environ)
/*!40000 ALTER TABLE `refresh_tokens` DISABLE KEYS */;
INSERT INTO `refresh_tokens` (`id`, `refresh_token`, `username`, `valid`) VALUES
	(1, '68b4d47c88f4c02492ef16e0dabe009798d7626521e0fe0227ae96e2585737f0815ff3ab97e15744c6f86fef39deddf99140f749155e48644b38271b1ac72c99', 'JoséphineLaroche@gmail.com', '2022-09-14 18:26:10'),
	(2, '83491ea969914cdbbe9d48f126f8f49fdabcd1b120d071afcc9ca30c6c91e1ae16c92d748e14c60622896b2494832a6c493859d02242f37d41a24cf03285f388', 'JoséphineLaroche@gmail.com', '2022-09-18 07:33:17'),
	(3, 'f8a232144871634501b300f54fb8b55ebc4f645a291e6ba2c5fd36623e5ea5cc9375bf267748ed98746b030e50fbb0c4676992fe26d85871b618652c55aafc78', 'JoséphineLaroche@gmail.com', '2022-09-22 16:26:26'),
	(4, '7e59f96d0a7ec238ea81882c8532fced109db89c77c1878177d64cf1f1088fd9eadcb5dc9dba56f718ae26c06de6f51b032dae27697971225bfc639cb116ff8e', 'JoséphineLaroche@gmail.com', '2022-09-22 17:11:33'),
	(5, 'ca258440821215be8c8f7d80ff0a90642f2621395f40485de074663cf57799c482d7fbf3471f50b1a399cced1192b45ea4464211a7abf50b1ec6820106f2e8f0', 'JoséphineLaroche@gmail.com', '2022-09-22 17:21:08'),
	(6, '5e6d096cfb2e0531c689b60d1d927d2ce8809d236e6ce96a446871868d0e4cd0598e17c5f5517e5ecb134d2939eadb2729f247d6c4f7deb4e718ef17536a8418', 'JoséphineLaroche@gmail.com', '2022-09-22 17:21:22'),
	(7, '911579547d031b10c71d1265ceedebbfe00a14f6249efd0da5ad2befceb5f6f16095d9e90a2fc24a621fd5408bfc3ba3dbf6e85497244ba849766498dc47e3f5', 'JoséphineLaroche@gmail.com', '2022-09-23 16:39:16');
/*!40000 ALTER TABLE `refresh_tokens` ENABLE KEYS */;

-- Listage des données de la table bilemo.user : ~24 rows (environ)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `user_client_id`, `email`, `roles`, `password`, `created_at`, `updated_at`) VALUES
	(1, NULL, 'admin@gmail.com', '["ROLE_SUPER_ADMIN"]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(2, NULL, 'JoséphineLaroche@gmail.com', '["ROLE_ADMIN"]', '$2y$13$CeLVPHelVpVP/6rohdycoOfEUoDXUcIGcp8tpp5LvdqAbZ879tLsW', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(3, 2, 'ArthurRiou@gmail.com', '[]', '$2y$13$OVWKHY7MwMxElHQqHyD23.cU81vUEx6x9aurMROuqmccToj8mKg62', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(5, 2, 'JulieDurand@gmail.com', '[]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(6, 2, 'Céline-ValérieRiou@gmail.com', '[]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(7, 2, 'IsabelleBertrand-Teixeira@gmail.com', '[]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(8, 2, 'BernardMillet@gmail.com', '[]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(9, NULL, 'LucyRibeiro-Weiss@gmail.com', '["ROLE_ADMIN"]', '$2y$13$Y1r7AQko0JV2sgMPdcmqjOxpybhdONTA9OO0aV/54IaBoJexvl8Fa', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(10, 9, 'LucieDufour@gmail.com', '[]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(11, 9, 'Marguerite-CarolineWeber@gmail.com', '[]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(12, 9, 'HenriSchmitt@gmail.com', '[]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(13, 9, 'Michel-StéphaneColas@gmail.com', '[]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(14, 9, 'Jean-VictorMillet@gmail.com', '[]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(15, 9, 'LucieMartinez-Bousquet@gmail.com', '[]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(16, NULL, 'ÉlodieCarre@gmail.com', '["ROLE_ADMIN"]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(17, 16, 'ArnaudeduBertrand@gmail.com', '[]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(18, 16, 'RogerMerle@gmail.com', '[]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(19, 16, 'GuyToussaint@gmail.com', '[]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(20, 16, 'CélinedelaDias@gmail.com', '[]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(21, 16, 'LaetitiaLefort@gmail.com', '[]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01'),
	(22, 16, 'LucPhilippe@gmail.com', '[]', '$2y$10$PEyedR2lEiPFiq1STt4pc.MxhmgrF3bUvz2s17A6DT1OMY6A1/x..', '2022-08-03 16:49:01', '2022-08-03 16:49:01');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
