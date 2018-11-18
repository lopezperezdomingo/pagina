-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.28-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para ham_oconsingo
DROP DATABASE IF EXISTS `ham_oconsingo`;
CREATE DATABASE IF NOT EXISTS `ham_oconsingo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ham_oconsingo`;

-- Volcando estructura para tabla ham_oconsingo.tbl_secciones
DROP TABLE IF EXISTS `tbl_secciones`;
CREATE TABLE IF NOT EXISTS `tbl_secciones` (
  `seccion_id` int(11) NOT NULL AUTO_INCREMENT,
  `seccion_nombre` varchar(500) DEFAULT '',
  `seccion_descripcion` varchar(500) DEFAULT '',
  `seccion_img` varchar(500) DEFAULT '',
  PRIMARY KEY (`seccion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ham_oconsingo.tbl_secciones: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tbl_secciones` DISABLE KEYS */;
INSERT INTO `tbl_secciones` (`seccion_id`, `seccion_nombre`, `seccion_descripcion`, `seccion_img`) VALUES
	(3, '9', '', '20181118225756.png'),
	(4, 'DESCRIPCION DE LAS SECCIOn', '', '20181118225741.jpg'),
	(5, 'NOMBRE DE LA SECCIOn', 'DESCRIPCION DE LA SECCION', '20181118225733.jpg'),
	(6, 'NOMBRE DE LA SECCIOn', 'DESCRIPCION DE LA SECCION', '20181118223223.png'),
	(7, 'SECCION 1 EDIT', 'DESCRIPCION DE LA SECCION 1', '20181118225807.jpg');
/*!40000 ALTER TABLE `tbl_secciones` ENABLE KEYS */;

-- Volcando estructura para tabla ham_oconsingo.tbl_secciones_docs
DROP TABLE IF EXISTS `tbl_secciones_docs`;
CREATE TABLE IF NOT EXISTS `tbl_secciones_docs` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_nombre` varchar(50) DEFAULT NULL,
  `doc_file` varchar(50) DEFAULT NULL,
  `doc_ext` varchar(50) DEFAULT NULL,
  `seccion_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ham_oconsingo.tbl_secciones_docs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tbl_secciones_docs` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_secciones_docs` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
