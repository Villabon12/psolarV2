/*
SQLyog Community
MySQL - 8.0.28 : Database - loyolabd
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `calendario` */

CREATE TABLE `calendario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  `rol_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_calendario_color1_idx` (`color`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

/*Table structure for table `disponibilidad` */

CREATE TABLE `disponibilidad` (
  `id` int NOT NULL AUTO_INCREMENT,
  `disponible` varchar(45) DEFAULT NULL,
  `hecho` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

/*Table structure for table `estado` */

CREATE TABLE `estado` (
  `id` int NOT NULL,
  `estado` varchar(92) NOT NULL,
  `pais_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

/*Table structure for table `etapas` */

CREATE TABLE `etapas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `etapa` varchar(45) DEFAULT NULL,
  `porcentaje` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

/*Table structure for table `notificaciones` */

CREATE TABLE `notificaciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

/*Table structure for table `pais` */

CREATE TABLE `pais` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `codigo_postal` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=245 DEFAULT CHARSET=utf8mb3;

/*Table structure for table `roles` */

CREATE TABLE `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

/*Table structure for table `usuario_historial` */

CREATE TABLE `usuario_historial` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(125) CHARACTER SET 'ascii' NOT NULL,
  `apellido` VARCHAR(125) NOT NULL,
  `pass` VARCHAR(90) NULL DEFAULT NULL,
  `direccion` VARCHAR(255) NULL DEFAULT NULL,
  `email` VARCHAR(255) CHARACTER SET 'utf8' NULL DEFAULT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `activo` TINYINT NOT NULL DEFAULT '1',
  `fecha_creacion` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `v_luz` VARCHAR(255) NULL DEFAULT NULL,
  `ciudad` VARCHAR(45) NULL DEFAULT NULL,
  `roles_id` INT NULL,
  `pais_id` INT NULL,
  `disponibilidad_id` INT NULL,
  `papa` INT NULL,
  `ciudad` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;

/*Table structure for table `venta` */

CREATE TABLE `venta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `etapas_id` int DEFAULT NULL,
  `disponibilidad_id` int DEFAULT NULL,
  `usuario_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3;

/*Table structure for table `venta_historial` */

CREATE TABLE `venta_historial` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha_actualiza` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `etapas_id` int DEFAULT NULL,
  `disponibilidad_id` int DEFAULT NULL,
  `usuario_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb3;



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
