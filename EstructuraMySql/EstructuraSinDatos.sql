-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.11-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para reportero
CREATE DATABASE IF NOT EXISTS `reportero` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `reportero`;

-- Volcando estructura para tabla reportero.colareportes
CREATE TABLE IF NOT EXISTS `colareportes` (
  `idcolaReportes` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `descripcionreporte` varchar(500) DEFAULT NULL,
  `RutaAlQuery` varchar(500) DEFAULT NULL COMMENT 'Es la ruta al reporte .sql',
  `rutasalida` varchar(500) DEFAULT NULL,
  `usuarioSql` varchar(45) DEFAULT NULL,
  `passwordSql` varchar(45) DEFAULT NULL,
  `basedata` varchar(45) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `windowsProcessId` varchar(45) DEFAULT '0',
  `EstaEnEjecucion` varchar(45) DEFAULT NULL,
  `fechaencolado` datetime DEFAULT NULL,
  `fechafinalizado` datetime DEFAULT NULL,
  `FechaHoraEjecucion` datetime DEFAULT NULL,
  PRIMARY KEY (`idcolaReportes`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para evento reportero.mantenimiento_colareportes
DELIMITER //
CREATE DEFINER=`admin`@`%` EVENT `mantenimiento_colareportes` ON SCHEDULE EVERY 1 DAY STARTS '2021-06-09 19:21:59' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM colareportes WHERE fechaencolado < NOW()-30//
DELIMITER ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
