-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.10-log - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para programacionweb
CREATE DATABASE IF NOT EXISTS `programacionweb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `programacionweb`;


-- Volcando estructura para tabla programacionweb.personas smallint unsigned autoincrement zerofill pk
CREATE TABLE IF NOT EXISTS `personas smallint unsigned autoincrement zerofill pk` (
  `persona_id` int(11) DEFAULT NULL,
  `paterno` varchar(50) DEFAULT NULL,
  `materno` varchar(50) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `fecha_actualizacion` timestamp NULL DEFAULT NULL,
  `fecha_registro` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla programacionweb.personas smallint unsigned autoincrement zerofill pk: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `personas smallint unsigned autoincrement zerofill pk` DISABLE KEYS */;
/*!40000 ALTER TABLE `personas smallint unsigned autoincrement zerofill pk` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
