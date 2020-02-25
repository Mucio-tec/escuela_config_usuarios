/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.6-MariaDB : Database - schoolenglishbase
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`schoolenglishbase` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `schoolenglishbase`;

/*Table structure for table `alumnos` */

DROP TABLE IF EXISTS `alumnos`;

CREATE TABLE `alumnos` (
  `idalum` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idmun` bigint(20) unsigned NOT NULL,
  `nombre` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ap_emp` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `am_emp` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_calle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colonia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idalum`),
  KEY `idmun` (`idmun`),
  CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`idmun`) REFERENCES `municipios` (`idmun`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `alumnos` */

insert  into `alumnos`(`idalum`,`idmun`,`nombre`,`ap_emp`,`am_emp`,`edad`,`calle`,`num_calle`,`colonia`,`telefono`,`cp`,`correo`,`sexo`,`activo`,`remember_token`,`deleted_at`,`created_at`,`updated_at`) values (1,3,'Kendra','Lust','Addams','34','Mexicali','67','Zamarrero','1234567890','50020','\r\nkendra@gmail.com','Femenino','si',NULL,NULL,NULL,'2019-12-17 15:35:25'),(4,2,'Michel','Martinez','Martinez','40','Zaragoza','23','La Mora','7151104983','50020','mich@gmail.com','Masculino','si',NULL,NULL,'2019-10-04 03:52:11','2019-10-04 19:25:33'),(5,7,'Carmen','Martinez','Martinez','40','Zaragoza','345','La Mora','7226096639','50030','adriana@gmail.com','Femenino','si',NULL,NULL,'2019-10-04 04:31:55','2019-10-06 22:55:31'),(6,1,'Michel','Martinez','Martinez','30','Zaragoza','23','La Mora','7151104983','50030','mich@gmail.com','Masculino','si',NULL,NULL,'2019-10-04 04:35:16','2019-10-04 04:35:29'),(7,1,'Jairo','Lara','Lara','30','Zaragoza','23','Zaragoza','7151104983','50020','mich@gmail.com','Masculino','si',NULL,NULL,'2019-10-04 05:13:50','2019-10-06 22:57:55'),(8,4,'Jairo','Martinez','Martinez','30','Zaragoza','23','Italia','7151104983','50090','mich@gmail.com','Masculino','si',NULL,NULL,'2019-10-04 05:22:48','2019-10-06 22:58:14'),(9,5,'Michel','Martinez','Martinez','30','Zaragoza','3','Las Palmas','7226096639','50020','adriana@gmail.com','Femenino','si',NULL,NULL,'2019-10-04 05:56:50','2019-10-04 05:58:20'),(10,4,'Michel','Martinez','Martinez','30','Zaragoza','3','Las Palmas','7226096639','53020','adriana@gmail.com','Femenino','si',NULL,NULL,'2019-10-04 06:02:39','2019-10-04 06:02:47'),(11,1,'Michel','Martinez','Martinez','19','Zaragoza','23','La Mora','7151104983','50030','mich@gmail.com','Masculino','si',NULL,NULL,'2019-10-04 06:11:53','2019-10-04 06:12:04'),(12,7,'Michel','Martinez','Martinez','19','Zaragoza','23','La Mora','7151104983','50030','adriana@gmail.com','Masculino','si',NULL,NULL,'2019-10-04 06:59:31','2019-10-04 06:59:31'),(13,3,'Michel','Lara','Lara','19','Zaragoza','23','La Mora','7151104983','50020','mich@gmail.com','Masculino','si',NULL,NULL,'2019-10-04 07:17:34','2019-10-04 07:17:56'),(14,7,'Roberto','Ramirez','Ramirez','13','Independencia','12','Parque','7225621121','50000','s@gmail.com','F','si',NULL,NULL,'2019-12-30 15:13:36','2019-12-30 15:13:36'),(15,7,'Carlos','Rosas','Rosas','32','Independencia','12','Parque','7225621121','50000','s@gmail.com','Masculino','si',NULL,NULL,'2019-12-30 20:54:49','2019-12-30 20:54:49');

/*Table structure for table `categorias` */

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(30) DEFAULT NULL,
  `activo` varchar(10) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `categorias` */

insert  into `categorias`(`id_categoria`,`nombre_categoria`,`activo`,`deleted_at`,`created_at`,`updated_at`) values (1,'Empresa','si',NULL,NULL,NULL),(2,'Escuela','si',NULL,NULL,NULL);

/*Table structure for table `dclaves` */

DROP TABLE IF EXISTS `dclaves`;

CREATE TABLE `dclaves` (
  `iddclaves` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`iddclaves`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dclaves` */

insert  into `dclaves`(`iddclaves`,`deleted_at`,`updated_at`,`created_at`) values (1,NULL,'2020-01-05 02:44:15','2020-01-05 02:44:15'),(2,NULL,'2020-01-05 02:48:24','2020-01-05 02:48:24'),(3,NULL,'2020-01-05 08:27:12','2020-01-05 08:27:12'),(4,NULL,'2020-01-05 08:27:27','2020-01-05 08:27:27'),(5,NULL,'2020-01-05 20:42:19','2020-01-05 20:42:19'),(6,NULL,'2020-01-05 21:32:16','2020-01-05 21:32:16');

/*Table structure for table `detalle_claves` */

DROP TABLE IF EXISTS `detalle_claves`;

CREATE TABLE `detalle_claves` (
  `iddc` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idlu` bigint(20) unsigned NOT NULL,
  `id_niv` bigint(20) unsigned NOT NULL,
  `idh` bigint(20) unsigned NOT NULL,
  `idprof` bigint(20) unsigned NOT NULL,
  `iddclaves` int(11) DEFAULT NULL,
  `idempresa` int(11) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`iddc`),
  KEY `detalle_claves_idlu_foreign` (`idlu`),
  KEY `detalle_claves_id_niv_foreign` (`id_niv`),
  KEY `detalle_claves_idprof_foreign` (`idprof`),
  KEY `idh` (`idh`),
  KEY `iddclaves` (`iddclaves`),
  KEY `idempresa` (`idempresa`),
  KEY `id_grupo` (`id_grupo`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `detalle_claves_ibfk_1` FOREIGN KEY (`idh`) REFERENCES `horarios` (`idh`),
  CONSTRAINT `detalle_claves_ibfk_2` FOREIGN KEY (`iddclaves`) REFERENCES `dclaves` (`iddclaves`),
  CONSTRAINT `detalle_claves_ibfk_3` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`),
  CONSTRAINT `detalle_claves_ibfk_4` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`),
  CONSTRAINT `detalle_claves_ibfk_5` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`),
  CONSTRAINT `detalle_claves_id_niv_foreign` FOREIGN KEY (`id_niv`) REFERENCES `niveles` (`id_niv`),
  CONSTRAINT `detalle_claves_idlu_foreign` FOREIGN KEY (`idlu`) REFERENCES `lugares` (`idlu`),
  CONSTRAINT `detalle_claves_idprof_foreign` FOREIGN KEY (`idprof`) REFERENCES `profesores` (`idprof`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `detalle_claves` */

insert  into `detalle_claves`(`iddc`,`idlu`,`id_niv`,`idh`,`idprof`,`iddclaves`,`idempresa`,`id_grupo`,`id_categoria`,`remember_token`,`deleted_at`,`created_at`,`updated_at`) values (1,2,1,1,1,1,1,5,1,NULL,NULL,'2019-12-16 06:12:06','2019-12-16 06:12:06'),(2,10,1,1,2,1,1,4,1,NULL,NULL,'2019-12-16 06:13:59','2019-12-16 06:13:59'),(3,2,1,1,1,1,2,4,1,NULL,NULL,'2019-12-16 07:57:25','2019-12-16 07:57:25'),(4,2,1,1,1,1,1,4,1,NULL,NULL,'2019-12-16 08:52:20','2019-12-16 08:52:20'),(5,9,2,1,2,1,1,4,1,NULL,NULL,'2019-12-17 15:22:12','2019-12-17 15:22:12'),(8,2,1,1,1,6,6,1,2,NULL,NULL,'2020-01-05 21:32:16','2020-01-05 21:32:16'),(10,2,1,1,1,6,6,3,2,NULL,NULL,'2020-01-05 21:32:20','2020-01-05 21:32:20');

/*Table structure for table `detalle_grupos` */

DROP TABLE IF EXISTS `detalle_grupos`;

CREATE TABLE `detalle_grupos` (
  `id_dgrupo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_niv` bigint(20) unsigned DEFAULT NULL,
  `idmod` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `idh` bigint(20) unsigned DEFAULT NULL,
  `idalum` bigint(20) unsigned DEFAULT NULL,
  `iddgrupos` int(11) DEFAULT NULL,
  `activo` varchar(10) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_dgrupo`),
  KEY `id_grupo` (`id_grupo`),
  KEY `idmod` (`idmod`),
  KEY `id_categoria` (`id_categoria`),
  KEY `idempresa` (`idempresa`),
  KEY `id_niv` (`id_niv`),
  KEY `idh` (`idh`),
  KEY `idalum` (`idalum`),
  KEY `iddgrupos` (`iddgrupos`),
  CONSTRAINT `detalle_grupos_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`),
  CONSTRAINT `detalle_grupos_ibfk_2` FOREIGN KEY (`idmod`) REFERENCES `modulos` (`idmod`),
  CONSTRAINT `detalle_grupos_ibfk_3` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`),
  CONSTRAINT `detalle_grupos_ibfk_4` FOREIGN KEY (`idempresa`) REFERENCES `empresas` (`idempresa`),
  CONSTRAINT `detalle_grupos_ibfk_5` FOREIGN KEY (`id_niv`) REFERENCES `niveles` (`id_niv`),
  CONSTRAINT `detalle_grupos_ibfk_6` FOREIGN KEY (`idh`) REFERENCES `horarios` (`idh`),
  CONSTRAINT `detalle_grupos_ibfk_7` FOREIGN KEY (`idalum`) REFERENCES `alumnos` (`idalum`),
  CONSTRAINT `detalle_grupos_ibfk_8` FOREIGN KEY (`iddgrupos`) REFERENCES `dgrupos` (`iddgrupos`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

/*Data for the table `detalle_grupos` */

insert  into `detalle_grupos`(`id_dgrupo`,`id_niv`,`idmod`,`id_categoria`,`idempresa`,`id_grupo`,`idh`,`idalum`,`iddgrupos`,`activo`,`deleted_at`,`created_at`,`updated_at`) values (1,3,2,1,2,4,1,8,1,NULL,NULL,'2019-12-13 19:36:55','2019-12-13 19:36:55'),(2,2,1,2,6,1,1,1,1,NULL,NULL,'2019-12-13 19:51:01','2019-12-13 19:51:01'),(3,2,1,2,6,1,1,1,1,NULL,NULL,'2019-12-13 19:54:43','2019-12-13 19:54:43'),(4,2,5,1,3,4,1,4,1,NULL,NULL,'2019-12-13 20:10:45','2019-12-13 20:10:45'),(5,1,1,2,6,2,1,10,1,NULL,NULL,'2019-12-13 20:32:55','2019-12-13 20:32:55'),(6,1,1,2,6,1,1,1,1,NULL,NULL,'2019-12-13 22:08:18','2019-12-13 22:08:18'),(7,1,1,1,1,4,1,1,1,NULL,NULL,'2019-12-13 22:17:41','2019-12-13 22:17:41'),(8,1,1,1,1,4,1,1,1,NULL,NULL,'2019-12-13 22:26:45','2019-12-13 22:26:45'),(9,1,1,1,1,4,1,1,1,NULL,NULL,'2019-12-13 23:53:43','2019-12-13 23:53:43'),(10,3,2,2,6,2,2,4,1,NULL,NULL,'2019-12-14 00:09:38','2019-12-14 00:09:38'),(11,1,1,2,6,2,1,1,1,NULL,NULL,'2019-12-16 06:00:46','2019-12-16 06:00:46'),(12,1,1,2,6,3,1,10,1,NULL,NULL,'2019-12-16 06:04:26','2019-12-16 06:04:26'),(13,1,3,2,6,1,1,10,1,NULL,NULL,'2019-12-16 06:07:23','2019-12-16 06:07:23'),(14,1,1,2,6,1,1,1,1,NULL,NULL,'2019-12-16 06:13:26','2019-12-16 06:13:26'),(15,1,1,1,1,4,1,1,1,NULL,NULL,'2019-12-16 08:52:44','2019-12-16 08:52:44'),(16,1,1,1,1,4,1,1,1,NULL,NULL,'2019-12-16 17:13:34','2019-12-16 17:13:34'),(17,1,1,1,2,4,1,12,1,NULL,NULL,'2019-12-16 17:32:06','2019-12-16 17:32:06'),(18,2,2,1,2,4,1,8,1,NULL,NULL,'2019-12-17 15:23:34','2019-12-17 15:23:34'),(19,1,1,1,1,4,1,1,1,NULL,NULL,'2019-12-17 21:35:58','2019-12-17 21:35:58'),(20,1,1,2,1,4,1,1,1,NULL,NULL,'2019-12-28 01:50:06','2019-12-28 01:50:06'),(21,1,1,2,6,1,1,1,1,NULL,NULL,'2020-01-02 22:56:11','2020-01-02 22:56:11'),(22,1,1,1,1,4,1,1,1,NULL,NULL,'2020-01-02 22:56:55','2020-01-02 22:56:55'),(23,1,1,2,6,1,1,1,NULL,NULL,NULL,'2020-01-05 20:43:14','2020-01-05 20:43:14'),(24,1,1,2,6,1,1,1,5,NULL,NULL,'2020-01-05 21:08:47','2020-01-05 21:08:47'),(25,1,1,2,6,1,1,5,5,NULL,NULL,'2020-01-05 21:08:52','2020-01-05 21:08:52'),(26,1,1,2,6,1,1,1,6,NULL,NULL,'2020-01-05 21:24:57','2020-01-05 21:24:57'),(27,1,1,2,6,1,1,5,6,NULL,NULL,'2020-01-05 21:25:02','2020-01-05 21:25:02'),(28,1,1,2,6,1,1,13,6,NULL,NULL,'2020-01-05 21:25:08','2020-01-05 21:25:08'),(29,1,1,2,6,1,1,1,6,NULL,NULL,'2020-01-05 21:25:42','2020-01-05 21:25:42'),(30,1,1,1,1,4,1,1,7,NULL,NULL,'2020-01-05 21:27:13','2020-01-05 21:27:13'),(32,1,1,1,1,6,1,1,7,NULL,NULL,'2020-01-05 21:27:19','2020-01-05 21:27:19'),(33,1,1,2,6,1,1,1,8,NULL,NULL,'2020-01-05 21:36:34','2020-01-05 21:36:34'),(34,1,1,2,6,2,1,1,8,NULL,NULL,'2020-01-05 21:36:38','2020-01-05 21:36:38'),(35,1,1,2,6,3,1,1,8,NULL,NULL,'2020-01-05 21:36:39','2020-01-05 21:36:39'),(36,1,1,2,6,3,1,4,8,NULL,NULL,'2020-01-05 21:37:13','2020-01-05 21:37:13'),(37,1,1,2,6,3,1,4,8,NULL,NULL,'2020-01-05 21:38:09','2020-01-05 21:38:09'),(38,1,1,1,1,4,1,1,9,NULL,NULL,'2020-01-05 21:39:33','2020-01-05 21:39:33'),(39,1,1,1,1,5,1,1,9,NULL,NULL,'2020-01-05 21:39:36','2020-01-05 21:39:36'),(40,1,1,1,1,6,1,1,9,NULL,NULL,'2020-01-05 21:39:38','2020-01-05 21:39:38'),(41,1,1,1,1,4,1,1,10,NULL,NULL,'2020-01-05 21:40:11','2020-01-05 21:40:11'),(42,1,1,1,1,5,1,1,10,NULL,NULL,'2020-01-05 21:40:15','2020-01-05 21:40:15'),(43,1,1,1,1,6,1,1,10,NULL,NULL,'2020-01-05 21:40:17','2020-01-05 21:40:17'),(44,1,1,1,1,4,1,1,11,NULL,NULL,'2020-01-05 21:44:01','2020-01-05 21:44:01'),(45,1,1,1,1,5,1,1,11,NULL,NULL,'2020-01-05 21:44:04','2020-01-05 21:44:04'),(46,1,1,1,1,6,1,1,11,NULL,NULL,'2020-01-05 21:44:06','2020-01-05 21:44:06'),(47,1,1,1,1,4,1,1,12,NULL,NULL,'2020-01-05 21:48:33','2020-01-05 21:48:33'),(48,1,1,1,1,5,1,1,12,NULL,NULL,'2020-01-05 21:48:36','2020-01-05 21:48:36'),(49,1,1,1,1,6,1,1,12,NULL,NULL,'2020-01-05 21:48:38','2020-01-05 21:48:38'),(50,1,1,1,1,4,1,1,12,NULL,NULL,'2020-01-05 21:58:37','2020-01-05 21:58:37'),(51,1,1,1,1,4,1,1,13,NULL,NULL,'2020-01-05 22:00:46','2020-01-05 22:00:46'),(53,1,1,1,1,6,1,1,13,NULL,NULL,'2020-01-05 22:00:51','2020-01-05 22:00:51');

/*Table structure for table `dgrupos` */

DROP TABLE IF EXISTS `dgrupos`;

CREATE TABLE `dgrupos` (
  `iddgrupos` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`iddgrupos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dgrupos` */

insert  into `dgrupos`(`iddgrupos`,`deleted_at`,`updated_at`,`created_at`) values (1,NULL,'2020-01-05 02:44:15','2020-01-05 02:44:15'),(2,NULL,'2020-01-05 02:48:24','2020-01-05 02:48:24'),(3,NULL,'2020-01-05 08:27:12','2020-01-05 08:27:12'),(4,NULL,'2020-01-05 08:27:27','2020-01-05 08:27:27'),(5,NULL,'2020-01-05 21:08:47','2020-01-05 21:08:47'),(6,NULL,'2020-01-05 21:24:57','2020-01-05 21:24:57'),(7,NULL,'2020-01-05 21:27:13','2020-01-05 21:27:13'),(8,NULL,'2020-01-05 21:36:34','2020-01-05 21:36:34'),(9,NULL,'2020-01-05 21:39:33','2020-01-05 21:39:33'),(10,NULL,'2020-01-05 21:40:11','2020-01-05 21:40:11'),(11,NULL,'2020-01-05 21:44:01','2020-01-05 21:44:01'),(12,NULL,'2020-01-05 21:48:33','2020-01-05 21:48:33'),(13,NULL,'2020-01-05 22:00:46','2020-01-05 22:00:46');

/*Table structure for table `empresas` */

DROP TABLE IF EXISTS `empresas`;

CREATE TABLE `empresas` (
  `idempresa` int(200) NOT NULL AUTO_INCREMENT,
  `nombreempresa` varchar(200) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `encargado` varchar(200) DEFAULT NULL,
  `telefono` int(200) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `activo` varchar(10) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idempresa`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `empresas` */

insert  into `empresas`(`idempresa`,`nombreempresa`,`direccion`,`foto`,`encargado`,`telefono`,`id_categoria`,`activo`,`deleted_at`,`created_at`,`updated_at`) values (1,'kirui','parque industrial doña rosa','IMG-20190925-WA0008.jpg','benjamin garcia',2147483647,1,'si',NULL,NULL,NULL),(2,'italika','calle miguel aleman','IMG-20190925-WA0009.jpg','roberto bosh',2147483647,1,'si',NULL,NULL,NULL),(3,'Tecnologico de Toluca','av.tecnologico','IMG-20190925-WA0010.jpg','Roberto',8349392,1,'si',NULL,NULL,NULL),(6,'Schoolenglish','toluca','IMG-20190925-WA0011.jpg','Pablo',82939,2,'si',NULL,NULL,NULL);

/*Table structure for table `grupos` */

DROP TABLE IF EXISTS `grupos`;

CREATE TABLE `grupos` (
  `id_grupo` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_grupo` varchar(50) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `activo` varchar(10) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_grupo`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `grupos` */

insert  into `grupos`(`id_grupo`,`nombre_grupo`,`id_categoria`,`activo`,`deleted_at`,`created_at`,`updated_at`) values (1,'A-101',2,'si',NULL,NULL,NULL),(2,'A-102',2,'si',NULL,NULL,NULL),(3,'A-103',2,'si',NULL,NULL,NULL),(4,'E-101',1,'si',NULL,NULL,NULL),(5,'E-102',1,'si',NULL,NULL,NULL),(6,'E-103',1,'si',NULL,NULL,NULL);

/*Table structure for table `horarios` */

DROP TABLE IF EXISTS `horarios`;

CREATE TABLE `horarios` (
  `idh` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `horario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idh`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `horarios` */

insert  into `horarios`(`idh`,`horario`,`horas`,`activo`,`remember_token`,`deleted_at`,`created_at`,`updated_at`) values (1,'Lunes-Miercoles','18:00 a 21:00','si',NULL,NULL,NULL,'2019-10-06 23:16:20'),(2,'Lunes','13:00 a 15:00','si',NULL,NULL,'2019-10-04 14:53:12','2019-10-04 14:53:12');

/*Table structure for table `lugares` */

DROP TABLE IF EXISTS `lugares`;

CREATE TABLE `lugares` (
  `idlu` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idmun` bigint(20) unsigned NOT NULL,
  `lugar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colonia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_exterior` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idlu`),
  KEY `lugares_idmun_foreign` (`idmun`),
  CONSTRAINT `lugares_idmun_foreign` FOREIGN KEY (`idmun`) REFERENCES `municipios` (`idmun`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `lugares` */

insert  into `lugares`(`idlu`,`idmun`,`lugar`,`calle`,`colonia`,`num_exterior`,`activo`,`remember_token`,`deleted_at`,`created_at`,`updated_at`) values (2,5,'Crucero','Avenida','calle','345','si',NULL,NULL,NULL,'2019-10-04 09:32:11'),(3,6,'Villa','Carretera','Colonia','2300','si',NULL,NULL,NULL,'2019-10-03 21:16:00'),(9,2,'Sendero','Zaragoza','Caracas','23','si',NULL,NULL,'2019-10-03 21:17:00','2019-10-06 23:28:02'),(10,4,'Sendero','Torres','Las Palmas','23','si',NULL,NULL,'2019-10-03 21:22:55','2019-10-03 21:48:17'),(11,2,'Kiru Mexicana','Zaragoza','La Mora','23','si',NULL,NULL,'2019-10-03 21:56:10','2019-10-04 05:27:58'),(12,1,'Kiru Mexicana','Zaragoza','Avenida Tecnológico','2501','si',NULL,NULL,'2019-10-04 05:52:06','2019-10-04 16:25:03');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=261 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (250,'2019_09_27_131340_niveles',1),(251,'2019_09_27_131659_municipios',1),(252,'2019_09_27_132628_alumnos',1),(253,'2019_09_27_133131_tutores',1),(254,'2019_09_27_133831_lugares',1),(255,'2019_09_27_134401_horarios',1),(256,'2019_09_27_134654_pagos',1),(257,'2019_09_27_135223_profesores',1),(258,'2019_09_27_135449_detalle_claves',1),(259,'2019_09_27_140421_clave_alumnos',1),(260,'2019_09_27_141008_calificaciones',1);

/*Table structure for table `modulos` */

DROP TABLE IF EXISTS `modulos`;

CREATE TABLE `modulos` (
  `idmod` int(11) NOT NULL AUTO_INCREMENT,
  `modulo` int(200) DEFAULT NULL,
  `activo` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idmod`),
  KEY `idmod` (`idmod`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `modulos` */

insert  into `modulos`(`idmod`,`modulo`,`activo`,`deleted_at`,`created_at`,`updated_at`) values (1,1,'si',NULL,NULL,NULL),(2,2,'si',NULL,NULL,NULL),(3,3,'si',NULL,NULL,NULL),(4,4,'si',NULL,NULL,NULL),(5,5,'si',NULL,NULL,NULL),(6,6,'si',NULL,NULL,NULL);

/*Table structure for table `municipios` */

DROP TABLE IF EXISTS `municipios`;

CREATE TABLE `municipios` (
  `idmun` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `municipio` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idmun`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `municipios` */

insert  into `municipios`(`idmun`,`municipio`,`activo`,`remember_token`,`created_at`,`updated_at`) values (1,'Toluca','si','',NULL,NULL),(2,'Lerma','si','',NULL,NULL),(3,'San Mateo','si','',NULL,NULL),(4,'Ocoyoacac','si','',NULL,NULL),(5,'Xonacatlan','si','',NULL,NULL),(6,'Otzolotepec','si','',NULL,NULL),(7,'Tenango del Valle','si',NULL,NULL,NULL);

/*Table structure for table `niveles` */

DROP TABLE IF EXISTS `niveles`;

CREATE TABLE `niveles` (
  `id_niv` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nivel` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_niv`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `niveles` */

insert  into `niveles`(`id_niv`,`Nivel`,`activo`,`remember_token`,`created_at`,`updated_at`) values (1,'A1 Basico','si',NULL,NULL,NULL),(2,'A2 Intermedio','si',NULL,NULL,NULL),(3,'A3 Avanzado','si',NULL,NULL,NULL);

/*Table structure for table `pagos` */

DROP TABLE IF EXISTS `pagos`;

CREATE TABLE `pagos` (
  `idp` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idalum` bigint(20) unsigned NOT NULL,
  `costo` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Folio` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idp`),
  KEY `pagos_idalum_foreign` (`idalum`),
  CONSTRAINT `pagos_idalum_foreign` FOREIGN KEY (`idalum`) REFERENCES `alumnos` (`idalum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pagos` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `profesores` */

DROP TABLE IF EXISTS `profesores`;

CREATE TABLE `profesores` (
  `idprof` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idmun` bigint(20) unsigned NOT NULL,
  `nombre` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ap_emp` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `am_emp` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_calle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colonia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idprof`),
  KEY `profesores_idmun_foreign` (`idmun`),
  CONSTRAINT `profesores_idmun_foreign` FOREIGN KEY (`idmun`) REFERENCES `municipios` (`idmun`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `profesores` */

insert  into `profesores`(`idprof`,`idmun`,`nombre`,`ap_emp`,`am_emp`,`edad`,`calle`,`num_calle`,`colonia`,`telefono`,`cp`,`correo`,`sexo`,`activo`,`remember_token`,`deleted_at`,`created_at`,`updated_at`) values (1,5,'Edgar','Mora','Martinez','45','Mexico','234','Te molesta','7226096638','45676','edgar@gmail.com','Masculino','si',NULL,NULL,NULL,'2019-12-17 15:19:48'),(2,3,'Javier','Avila','Avila','50','Zaragoza','23','La Mora','0987654321','56043','javi@gmail.com','Masculino','si',NULL,NULL,'2019-10-02 17:59:45','2019-10-04 07:17:05');

/*Table structure for table `tutores` */

DROP TABLE IF EXISTS `tutores`;

CREATE TABLE `tutores` (
  `idtut` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idmun` bigint(20) unsigned NOT NULL,
  `nombre` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ap_emp` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `am_emp` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_calle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colonia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idtut`),
  KEY `tutores_idmun_foreign` (`idmun`),
  CONSTRAINT `tutores_idmun_foreign` FOREIGN KEY (`idmun`) REFERENCES `municipios` (`idmun`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tutores` */

insert  into `tutores`(`idtut`,`idmun`,`nombre`,`ap_emp`,`am_emp`,`edad`,`calle`,`num_calle`,`colonia`,`telefono`,`cp`,`correo`,`sexo`,`activo`,`remember_token`,`deleted_at`,`created_at`,`updated_at`) values (1,6,'Elias','Elias','Avila','34','Zaragoza','23','Mirador','0987654321','50020','michel@gmial.com','Masculino','no',NULL,NULL,NULL,'2019-10-08 00:30:30'),(2,4,'Elias ','Perez','Cortez','21','Universidad','32','La Mora','1234567890','50034','elias@gmail.com','Masculino','si',NULL,NULL,NULL,'2019-10-04 06:33:50'),(8,1,'Michel','Martinez','Martinez','30','Zaragoza','23','La Mora','7151104983','50030','mich@gmail.com','Masculino','si',NULL,NULL,'2019-10-04 06:36:47','2019-10-04 06:41:18'),(9,3,'Michel','Martinez','Martinez','19','Zaragoza','3','Las Palmas','7151104983','50030','mich@gmail.com','Masculino','si',NULL,NULL,'2019-10-04 06:51:36','2019-10-04 06:51:55');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Michel','al221611579@gmail.com',NULL,'$2y$10$7xLBDsk0TUMaxH/4nI7qcejSg7G7.KQjCFuvRHqY1NRMVtf1jvtS6',NULL,NULL,NULL),(2,'Javier','space_jam170@hotmail.com',NULL,'$2y$10$7xLBDsk0TUMaxH/4nI7qcejSg7G7.KQjCFuvRHqY1NRMVtf1jvtS6',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
