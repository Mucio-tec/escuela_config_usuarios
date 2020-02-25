/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.6-MariaDB : Database - controlalumnos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`controlalumnos` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `controlalumnos`;

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
  `activo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idalum`),
  KEY `alumnos_idmun_foreign` (`idmun`),
  CONSTRAINT `alumnos_idmun_foreign` FOREIGN KEY (`idmun`) REFERENCES `municipios` (`idmun`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `alumnos` */

insert  into `alumnos`(`idalum`,`idmun`,`nombre`,`ap_emp`,`am_emp`,`edad`,`calle`,`num_calle`,`colonia`,`telefono`,`cp`,`correo`,`sexo`,`activo`,`remember_token`,`deleted_at`,`created_at`,`updated_at`) values (1,3,'Kendra','Lust','Addams','34','Mexicali','67','Zamarrero','1234567890','50020','kendra@gmail.com','Femenino','si',NULL,NULL,NULL,'2019-10-14 23:37:09'),(4,2,'Michel','Martinez','Martinez','40','Zaragoza','23','La Mora','7151104983','50020','mich@gmail.com','Masculino','si',NULL,NULL,'2019-10-04 03:52:11','2019-10-04 19:25:33'),(5,7,'Carmen','Martinez','Martinez','40','Zaragoza','345','La Mora','7226096639','50030','adriana@gmail.com','Femenino','si',NULL,NULL,'2019-10-04 04:31:55','2019-10-06 22:55:31'),(6,1,'Michel','Martinez','Martinez','30','Zaragoza','23','La Mora','7151104983','50030','mich@gmail.com','Masculino','si',NULL,NULL,'2019-10-04 04:35:16','2019-10-04 04:35:29'),(7,1,'Jairo','Lara','Lara','30','Zaragoza','23','Zaragoza','7151104983','50020','mich@gmail.com','Masculino','si',NULL,NULL,'2019-10-04 05:13:50','2019-10-06 22:57:55'),(8,4,'Jairo','Martinez','Martinez','30','Zaragoza','23','Italia','7151104983','50090','mich@gmail.com','Masculino','si',NULL,NULL,'2019-10-04 05:22:48','2019-10-06 22:58:14'),(9,5,'Michel','Martinez','Martinez','30','Zaragoza','3','Las Palmas','7226096639','50020','adriana@gmail.com','Femenino','si',NULL,NULL,'2019-10-04 05:56:50','2019-10-04 05:58:20'),(10,4,'Michel','Martinez','Martinez','30','Zaragoza','3','Las Palmas','7226096639','53020','adriana@gmail.com','Femenino','si',NULL,NULL,'2019-10-04 06:02:39','2019-10-04 06:02:47'),(11,1,'Michel','Martinez','Martinez','19','Zaragoza','23','La Mora','7151104983','50030','mich@gmail.com','Masculino','si',NULL,NULL,'2019-10-04 06:11:53','2019-10-04 06:12:04'),(12,7,'Michel','Martinez','Martinez','19','Zaragoza','23','La Mora','7151104983','50030','adriana@gmail.com','Masculino','si',NULL,NULL,'2019-10-04 06:59:31','2019-10-04 06:59:31'),(13,3,'Michel','Lara','Lara','19','Zaragoza','23','La Mora','7151104983','50020','mich@gmail.com','Masculino','si',NULL,NULL,'2019-10-04 07:17:34','2019-10-04 07:17:56');

/*Table structure for table `calificaciones` */

DROP TABLE IF EXISTS `calificaciones`;

CREATE TABLE `calificaciones` (
  `idcal` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `iddc` bigint(20) unsigned NOT NULL,
  `calificacion` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evaluacion` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idcal`),
  KEY `calificaciones_iddc_foreign` (`iddc`),
  CONSTRAINT `calificaciones_iddc_foreign` FOREIGN KEY (`iddc`) REFERENCES `detalle_claves` (`iddc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `calificaciones` */

/*Table structure for table `clave_alumnos` */

DROP TABLE IF EXISTS `clave_alumnos`;

CREATE TABLE `clave_alumnos` (
  `idca` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `iddc` bigint(20) unsigned NOT NULL,
  `idalum` bigint(20) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idca`),
  KEY `clave_alumnos_idalum_foreign` (`idalum`),
  KEY `clave_alumnos_iddc_foreign` (`iddc`),
  CONSTRAINT `clave_alumnos_idalum_foreign` FOREIGN KEY (`idalum`) REFERENCES `alumnos` (`idalum`),
  CONSTRAINT `clave_alumnos_iddc_foreign` FOREIGN KEY (`iddc`) REFERENCES `detalle_claves` (`iddc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `clave_alumnos` */

/*Table structure for table `detalle_claves` */

DROP TABLE IF EXISTS `detalle_claves`;

CREATE TABLE `detalle_claves` (
  `iddc` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idlu` bigint(20) unsigned NOT NULL,
  `id_niv` bigint(20) unsigned NOT NULL,
  `idh` bigint(20) unsigned NOT NULL,
  `idprof` bigint(20) unsigned NOT NULL,
  `idalum` bigint(20) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`iddc`),
  KEY `detalle_claves_idlu_foreign` (`idlu`),
  KEY `detalle_claves_id_niv_foreign` (`id_niv`),
  KEY `detalle_claves_idh_foreign` (`idh`),
  KEY `detalle_claves_idprof_foreign` (`idprof`),
  KEY `detalle_claves_idalum_foreign` (`idalum`),
  CONSTRAINT `detalle_claves_id_niv_foreign` FOREIGN KEY (`id_niv`) REFERENCES `niveles` (`id_niv`),
  CONSTRAINT `detalle_claves_idalum_foreign` FOREIGN KEY (`idalum`) REFERENCES `alumnos` (`idalum`),
  CONSTRAINT `detalle_claves_idh_foreign` FOREIGN KEY (`idh`) REFERENCES `horarios` (`idh`),
  CONSTRAINT `detalle_claves_idlu_foreign` FOREIGN KEY (`idlu`) REFERENCES `lugares` (`idlu`),
  CONSTRAINT `detalle_claves_idprof_foreign` FOREIGN KEY (`idprof`) REFERENCES `profesores` (`idprof`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `detalle_claves` */

/*Table structure for table `horarios` */

DROP TABLE IF EXISTS `horarios`;

CREATE TABLE `horarios` (
  `idh` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `horario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idh`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `horarios` */

insert  into `horarios`(`idh`,`horario`,`horas`,`activo`,`remember_token`,`deleted_at`,`created_at`,`updated_at`) values (1,'Lunes-Miercoles','18:00 a 21:00','no',NULL,NULL,NULL,'2019-10-06 23:16:20'),(2,'Lunes','13:00 a 15:00','si',NULL,NULL,'2019-10-04 14:53:12','2019-10-04 14:53:12');

/*Table structure for table `lugares` */

DROP TABLE IF EXISTS `lugares`;

CREATE TABLE `lugares` (
  `idlu` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idmun` bigint(20) unsigned NOT NULL,
  `lugar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colonia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_exterior` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=250 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (237,'2014_10_12_000000_create_users_table',1),(238,'2014_10_12_100000_create_password_resets_table',1),(239,'2019_09_27_131340_niveles',1),(240,'2019_09_27_131659_municipios',1),(241,'2019_09_27_132628_alumnos',1),(242,'2019_09_27_133131_tutores',1),(243,'2019_09_27_133831_lugares',1),(244,'2019_09_27_134401_horarios',1),(245,'2019_09_27_134654_pagos',1),(246,'2019_09_27_135223_profesores',1),(247,'2019_09_27_135449_detalle_claves',1),(248,'2019_09_27_140421_clave_alumnos',1),(249,'2019_09_27_141008_calificaciones',1);

/*Table structure for table `municipios` */

DROP TABLE IF EXISTS `municipios`;

CREATE TABLE `municipios` (
  `idmun` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `municipio` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `activo` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_niv`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `niveles` */

insert  into `niveles`(`id_niv`,`Nivel`,`activo`,`remember_token`,`created_at`,`updated_at`) values (1,'A1 Intermedio Avanzado','si',NULL,NULL,'2019-10-04 08:37:37'),(2,'A2','si',NULL,'2019-10-04 08:12:37','2019-10-04 08:12:37'),(4,'A4','si',NULL,'2019-10-04 08:36:58','2019-10-06 23:37:45');

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
  `activo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idprof`),
  KEY `profesores_idmun_foreign` (`idmun`),
  CONSTRAINT `profesores_idmun_foreign` FOREIGN KEY (`idmun`) REFERENCES `municipios` (`idmun`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `profesores` */

insert  into `profesores`(`idprof`,`idmun`,`nombre`,`ap_emp`,`am_emp`,`edad`,`calle`,`num_calle`,`colonia`,`telefono`,`cp`,`correo`,`sexo`,`activo`,`remember_token`,`deleted_at`,`created_at`,`updated_at`) values (1,5,'Edgar','Mora','Martinez','45','Mexico','234','Te molesta','7226096639','45676','edgar@gmail.com','Masculino','no',NULL,NULL,NULL,'2019-10-06 23:05:05'),(2,3,'Javier','Avila','Avila','50','Zaragoza','23','La Mora','0987654321','56043','javi@gmail.com','Masculino','si',NULL,NULL,'2019-10-02 17:59:45','2019-10-04 07:17:05');

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
  `activo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
