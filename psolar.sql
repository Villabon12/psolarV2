/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 8.0.28 : Database - psolar
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`psolar` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `psolar`;

/*Table structure for table `calendario` */

DROP TABLE IF EXISTS `calendario`;

CREATE TABLE `calendario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `usuario_id` int NOT NULL,
  `hijo_id` int NOT NULL,
  `color_id` int NOT NULL,
  `activo` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_calendario_usuario1_idx` (`usuario_id`),
  KEY `fk_calendario_usuario2_idx` (`hijo_id`),
  KEY `fk_calendario_color1_idx` (`color_id`),
  CONSTRAINT `fk_calendario_color1` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`),
  CONSTRAINT `fk_calendario_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `fk_calendario_usuario2` FOREIGN KEY (`hijo_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

/*Data for the table `calendario` */

/*Table structure for table `color` */

DROP TABLE IF EXISTS `color`;

CREATE TABLE `color` (
  `id` int NOT NULL AUTO_INCREMENT,
  `css` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

/*Data for the table `color` */

insert  into `color`(`id`,`css`,`nombre`) values 
(1,'Azul oscuro','0071c5'),
(2,'Turquesa','40E0D0'),
(3,'verde','008000'),
(4,'Amarillo','FFD700'),
(5,'Naranja','FF8C00'),
(6,'Rojo','FF0000'),
(7,'Negro','000');

/*Table structure for table `disponibilidad` */

DROP TABLE IF EXISTS `disponibilidad`;

CREATE TABLE `disponibilidad` (
  `id` int NOT NULL AUTO_INCREMENT,
  `disponible` varchar(45) DEFAULT NULL,
  `hecho` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

/*Data for the table `disponibilidad` */

insert  into `disponibilidad`(`id`,`disponible`,`hecho`) values 
(1,'En progreso','warning'),
(2,'Cancelado','danger'),
(3,'Terminado','success'),
(4,'En espera','info');

/*Table structure for table `estado` */

DROP TABLE IF EXISTS `estado`;

CREATE TABLE `estado` (
  `id` int NOT NULL,
  `estado` varchar(92) NOT NULL,
  `pais_codigo_postal` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_estado_pais_idx` (`pais_codigo_postal`),
  CONSTRAINT `fk_estado_pais` FOREIGN KEY (`pais_codigo_postal`) REFERENCES `pais` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

/*Data for the table `estado` */

insert  into `estado`(`id`,`estado`,`pais_codigo_postal`) values 
(2130833,'McArthur Reef',70),
(3577483,'The Narrow',70),
(3831601,'Nantucket Shoals',70),
(3831610,'Little Stellwagen',70),
(3831661,'Cashes Ledge',70),
(3831676,'Ammen Rock',70),
(3981608,'Tijuana River',70),
(4020151,'Southern California',70),
(4020248,'Monterey Canyon',70),
(4030396,'Heceta Bank',70),
(4031854,'Prince of Wales',70),
(4031857,'Portlock Bank',70),
(4031961,'Bogoslof Canyon',70),
(4045408,'Chitka Cove',70),
(4045409,'West Armica',70),
(4045410,'Vulcan Point',70),
(4045411,'Tropical Ridge',70),
(4045412,'Thirty-Seven Hill',70),
(4045413,'Temnac Bay',70),
(4045414,'Tanadak',70),
(4045415,'Square Point',70);

/*Table structure for table `etapas` */

DROP TABLE IF EXISTS `etapas`;

CREATE TABLE `etapas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `etapa` varchar(45) DEFAULT NULL,
  `porcentaje` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

/*Data for the table `etapas` */

insert  into `etapas`(`id`,`etapa`,`porcentaje`) values 
(1,'etapa 1',14.28),
(2,'etapa 2',28.56),
(3,'etapa 3',42.84),
(4,'etapa 4',57.12),
(5,'etapa 5',71.4),
(6,'etapa 6',85.68),
(7,'etapa 7',100);

/*Table structure for table `notificaciones` */

DROP TABLE IF EXISTS `notificaciones`;

CREATE TABLE `notificaciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `usuario_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_notificaciones_usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_notificaciones_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

/*Data for the table `notificaciones` */

/*Table structure for table `pais` */

DROP TABLE IF EXISTS `pais`;

CREATE TABLE `pais` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(45) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `codigo_postal` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=245 DEFAULT CHARSET=utf8mb3;

/*Data for the table `pais` */

insert  into `pais`(`id`,`codigo`,`pais`,`codigo_postal`) values 
(1,'AF','AFGHANISTAN',NULL),
(2,'AX','ALAND ISLANDS',NULL),
(3,'AL','ALBANIA',NULL),
(4,'DE','ALEMANIA',NULL),
(5,'DZ','ALGERIA',NULL),
(6,'AS','AMERICAN SAMOA',NULL),
(7,'AD','ANDORRA',NULL),
(8,'AO','ANGOLA',NULL),
(9,'AI','ANGUILLA',NULL),
(10,'AQ','ANTARCTICA',NULL),
(11,'AG','ANTIGUA Y BARBUDA',NULL),
(12,'SA','ARABIA SAUDITA',NULL),
(13,'AR','ARGENTINA',NULL),
(14,'AM','ARMENIA',NULL),
(15,'AW','ARUBA',NULL),
(16,'AP','ASIA / REGION PACIFICO',NULL),
(17,'AU','AUSTRALIA',NULL),
(18,'AT','AUSTRIA',NULL),
(19,'AZ','AZERBAIJAN',NULL),
(20,'BS','BAHAMAS',NULL),
(21,'BH','BAHRAIN',NULL),
(22,'BD','BANGLADESH',NULL),
(23,'BB','BARBADOS',NULL),
(24,'BY','BELARUS',NULL),
(25,'BE','BELGICA',NULL),
(26,'BZ','BELICE',NULL),
(27,'BJ','BENIN',NULL),
(28,'BM','BERMUDA',NULL),
(29,'BT','BHUTAN',NULL),
(30,'BO','BOLIVIA',NULL),
(31,'BQ','BONAIR',NULL),
(32,'BA','BOSNIA AND HERZEGOVINA',NULL),
(33,'BW','BOTSWANA',NULL),
(34,'BR','BRASIL',NULL),
(35,'IO','BRITISH INDIAN OCEAN TERRITORY',NULL),
(36,'BN','BRUNEI DARUSSALAM',NULL),
(37,'BG','BULGARIA',NULL),
(38,'BF','BURKINA FASO',NULL),
(39,'BI','BURUNDI',NULL),
(40,'CV','CABO VERDE',NULL),
(41,'KH','CAMBOYA',NULL),
(42,'CM','CAMERUN',NULL),
(43,'CA','CANADA',NULL),
(44,'TD','CHAD',NULL),
(45,'CL','CHILE',NULL),
(46,'CN','CHINA',NULL),
(47,'CY','CHIPRE',NULL),
(48,'CC','COCOS (KEELING) ISLANDS',NULL),
(49,'CO','COLOMBIA',NULL),
(50,'KM','COMOROS',NULL),
(51,'CD','CONG',NULL),
(52,'CG','CONGO',NULL),
(53,'CK','COOK ISLANDS',NULL),
(54,'CR','COSTA RICA',NULL),
(55,'CI','COTE D IVOIRE',NULL),
(56,'HR','CROACIA',NULL),
(57,'CU','CUBA',NULL),
(58,'CW','CURACAO',NULL),
(59,'DK','DINAMARCA',NULL),
(60,'DJ','DJIBOUTI',NULL),
(61,'DM','DOMINICA',NULL),
(62,'EC','ECUADOR',NULL),
(63,'EG','EGIPTO',NULL),
(64,'SV','EL SALVADOR',NULL),
(65,'AE','EMIRATOS ARABES UNIDOS',NULL),
(66,'ER','ERITREA',NULL),
(67,'SK','ESLOVAQUIA',NULL),
(68,'SI','ESLOVENIA',NULL),
(69,'ES','ESPAÑA',NULL),
(70,'US','ESTADOS UNIDOS',NULL),
(71,'EE','ESTONIA',NULL),
(72,'ET','ETIOPIA',NULL),
(73,'FO','FAROE ISLANDS',NULL),
(74,'FJ','FIJI',NULL),
(75,'PH','FILIPINAS',NULL),
(76,'FI','FINLANDIA',NULL),
(77,'FR','FRANCIA',NULL),
(78,'PF','FRENCH POLYNESIA',NULL),
(79,'GA','GABON',NULL),
(80,'GM','GAMBIA',NULL),
(81,'GH','GANA',NULL),
(82,'GE','GEORGIA',NULL),
(83,'GI','GIBRALTAR',NULL),
(84,'GD','GRANADA',NULL),
(85,'GR','GRECIA',NULL),
(86,'GL','GROENLANDIA',NULL),
(87,'GP','GUADELOUPE',NULL),
(88,'GU','GUAM',NULL),
(89,'GT','GUATEMALA',NULL),
(90,'GG','GUERNSEY',NULL),
(91,'GN','GUINEA',NULL),
(92,'GQ','GUINEA ECUATORIAL',NULL),
(93,'GW','GUINEA-BISSAU',NULL),
(94,'GY','GUYANA',NULL),
(95,'GF','GUYANA FRANCESA',NULL),
(96,'HT','HAITI',NULL),
(97,'NL','HOLANDA, PAISES BAJOS',NULL),
(98,'VA','HOLY SEE (VATICAN CITY STATE)',NULL),
(99,'HN','HONDURAS',NULL),
(100,'HU','HUNGRIA',NULL),
(101,'IN','INDIA',NULL),
(102,'ID','INDONESIA',NULL),
(103,'IR','IRA',NULL),
(104,'IQ','IRAQ',NULL),
(105,'IE','IRLANDA',NULL),
(106,'IS','ISLANDIA',NULL),
(107,'FK','ISLAS (MALVINAS)',NULL),
(108,'KY','ISLAS CAIMAN',NULL),
(109,'CX','ISLAS DE PASCUA',NULL),
(110,'SB','ISLAS SALOMON',NULL),
(111,'IM','ISLE OF MAN',NULL),
(112,'IL','ISRAEL',NULL),
(113,'IT','ITALIA',NULL),
(114,'JM','JAMAICA',NULL),
(115,'JP','JAPAN',NULL),
(116,'JE','JERSEY',NULL),
(117,'JO','JORDAN',NULL),
(118,'KZ','KAZAKHSTAN',NULL),
(119,'KE','KENYA',NULL),
(120,'KI','KIRIBATI',NULL),
(121,'KR','KORE',NULL),
(122,'KW','KUWAIT',NULL),
(123,'KG','KYRGYZSTAN',NULL),
(124,'LA','LAO PEOPLES DEMOCRATIC REPUBLIC',NULL),
(125,'LV','LATVIA',NULL),
(126,'LB','LEBANON',NULL),
(127,'LS','LESOTHO',NULL),
(128,'LR','LIBERIA',NULL),
(129,'LY','LIBYA',NULL),
(130,'LI','LIECHTENSTEIN',NULL),
(131,'LT','LITHUANIA',NULL),
(132,'LU','LUXEMBOURG',NULL),
(133,'MO','MACAU',NULL),
(134,'MK','MACEDONIA',NULL),
(135,'MG','MADAGASCAR',NULL),
(136,'MY','MALASIA',NULL),
(137,'MW','MALAWI',NULL),
(138,'MV','MALDIVES',NULL),
(139,'ML','MALI',NULL),
(140,'MT','MALTA',NULL),
(141,'MA','MARRUECOS',NULL),
(142,'MH','MARSHALL ISLANDS',NULL),
(143,'MQ','MARTINIQUE',NULL),
(144,'MR','MAURITANIA',NULL),
(145,'MU','MAURITIUS',NULL),
(146,'YT','MAYOTTE',NULL),
(147,'MX','MEXICO',NULL),
(148,'FM','MICRONESI',NULL),
(149,'MD','MOLDOV',NULL),
(150,'MC','MONACO',NULL),
(151,'MN','MONGOLIA',NULL),
(152,'ME','MONTENEGRO',NULL),
(153,'MS','MONTSERRAT',NULL),
(154,'MZ','MOZAMBIQUE',NULL),
(155,'MM','MYANMAR',NULL),
(156,'NA','NAMIBIA',NULL),
(157,'NR','NAURU',NULL),
(158,'NP','NEPAL',NULL),
(159,'NI','NICARAGUA',NULL),
(160,'NE','NIGER',NULL),
(161,'NG','NIGERIA',NULL),
(162,'NU','NIUE',NULL),
(163,'NF','NORFOLK ISLAND',NULL),
(164,'MP','NORTHERN MARIANA ISLANDS',NULL),
(165,'NO','NORUEGA',NULL),
(166,'NC','NUEVA CALEDONIA',NULL),
(167,'NZ','NUEVA ZELANDIA',NULL),
(168,'OM','OMAN',NULL),
(169,'PK','PAKISTAN',NULL),
(170,'PW','PALAU',NULL),
(171,'PS','PALESTINA',NULL),
(172,'PA','PANAMA',NULL),
(173,'PG','PAPUA NEW GUINEA',NULL),
(174,'PY','PARAGUAY',NULL),
(175,'PE','PERU',NULL),
(176,'PN','PITCAIRN ISLANDS',NULL),
(177,'PL','POLONIA',NULL),
(178,'PT','PORTUGAL',NULL),
(179,'PR','PUERTO RICO',NULL),
(180,'QA','QATAR',NULL),
(181,'GB','REINO UNIDO',NULL),
(182,'CF','REPUBLICA CENTRAL DE AFRICA',NULL),
(183,'CZ','REPUBLICA CHECA',NULL),
(184,'DO','REPUBLICA DOMINICANA',NULL),
(185,'RE','REUNION',NULL),
(186,'RO','ROMANIA',NULL),
(187,'RW','RUANDA',NULL),
(188,'RU','RUSIA',NULL),
(189,'BL','SAINT BARTHELEMY',NULL),
(190,'SH','SAINT HELENA',NULL),
(191,'KN','SAINT KITTS AND NEVIS',NULL),
(192,'PM','SAINT PIERRE AND MIQUELON',NULL),
(193,'VC','SAINT VINCENT AND THE GRENADINES',NULL),
(194,'WS','SAMOA',NULL),
(195,'SM','SAN MARINO',NULL),
(196,'MF','SAN MARTIN',NULL),
(197,'LC','SANTA LUCIA',NULL),
(198,'ST','SAO TOME AND PRINCIPE',NULL),
(199,'SN','SENEGAL',NULL),
(200,'RS','SERBIA',NULL),
(201,'SC','SEYCHELLES',NULL),
(202,'SL','SIERRA LEONE',NULL),
(203,'SG','SINGAPUR',NULL),
(204,'SX','SINT MAARTEN (DUTCH PART)',NULL),
(205,'SY','SIRIA REPUBLICA ARABE',NULL),
(206,'SO','SOMALIA',NULL),
(207,'GS','SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS',NULL),
(208,'LK','SRI LANKA',NULL),
(209,'ZA','SUDAFRICA',NULL),
(210,'SD','SUDAN',NULL),
(211,'SS','SUDAN DEL SUR',NULL),
(212,'SE','SUECIA',NULL),
(213,'CH','SUIZA',NULL),
(214,'SR','SURINAM',NULL),
(215,'SJ','SVALBARD AND JAN MAYEN',NULL),
(216,'SZ','SWAZILAND',NULL),
(217,'TH','TAILANDIA',NULL),
(218,'TW','TAIWAN',NULL),
(219,'TJ','TAJIKISTAN',NULL),
(220,'TZ','TANZANIA',NULL),
(221,'TL','TIMOR-LESTE',NULL),
(222,'TG','TOGO',NULL),
(223,'TK','TOKELAU',NULL),
(224,'TO','TONGA',NULL),
(225,'TT','TRINIDAD Y TOBAGO',NULL),
(226,'TN','TUNISIA',NULL),
(227,'TM','TURKMENISTAN',NULL),
(228,'TC','TURKS AND CAICOS ISLANDS',NULL),
(229,'TR','TURQUIA',NULL),
(230,'TV','TUVALU',NULL),
(231,'UA','UCRANIA',NULL),
(232,'UG','UGANDA',NULL),
(233,'UM','UNITED STATES MINOR OUTLYING ISLANDS',NULL),
(234,'UY','URUGUAY',NULL),
(235,'UZ','UZBEKISTAN',NULL),
(236,'VU','VANUATU',NULL),
(237,'VE','VENEZUELA',NULL),
(238,'VN','VIETNAM',NULL),
(239,'VG','VIRGIN ISLAND',NULL),
(240,'WF','WALLIS AND FUTUNA',NULL),
(241,'EH','WESTERN SAHARA',NULL),
(242,'YE','YEMEN',NULL),
(243,'ZM','ZAMBIA',NULL),
(244,'ZW','ZIMBABWE',NULL);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

/*Data for the table `roles` */

insert  into `roles`(`id`,`rol`) values 
(1,'Admin'),
(2,'Lider'),
(3,'Vendedor'),
(4,'Cliente');

/*Table structure for table `timestamps` */

DROP TABLE IF EXISTS `timestamps`;

CREATE TABLE `timestamps` (
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

/*Data for the table `timestamps` */

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(125) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL,
  `apellido` varchar(125) NOT NULL,
  `pass` varchar(90) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `telefono` varchar(45) NOT NULL,
  `papa` int DEFAULT NULL,
  `estado_id` int DEFAULT NULL,
  `roles_id` int DEFAULT NULL,
  `activo` tinyint NOT NULL DEFAULT '1',
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `v_luz` float DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `disponibilidad_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_estado1_idx` (`estado_id`),
  KEY `fk_usuario_roles1_idx` (`roles_id`),
  KEY `fk_usuario_usuario1_idx` (`papa`),
  KEY `fk_usuario_disponibilidad1` (`disponibilidad_id`),
  CONSTRAINT `fk_usuario_disponibilidad1` FOREIGN KEY (`disponibilidad_id`) REFERENCES `disponibilidad` (`id`),
  CONSTRAINT `fk_usuario_estado1` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`),
  CONSTRAINT `fk_usuario_roles1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`),
  CONSTRAINT `fk_usuario_usuario1` FOREIGN KEY (`papa`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`nombre`,`apellido`,`pass`,`direccion`,`email`,`telefono`,`papa`,`estado_id`,`roles_id`,`activo`,`fecha_creacion`,`fecha_modificacion`,`v_luz`,`ciudad`,`disponibilidad_id`) values 
(1,'Walter','villabon','123','neiva','walter@villa.com','3153711299',NULL,2130833,1,1,'2022-04-26 11:00:49','2022-04-26 11:03:16',NULL,NULL,NULL),
(2,'Robinson','Villabon','123','Neiva','villa@villa.com','2222',NULL,2130833,1,1,'2022-04-26 11:31:42','2022-04-26 11:31:42',NULL,NULL,NULL),
(3,'El mejor','Mejor','123','neiva','elmejor@elmejor.com','3333',NULL,2130833,1,1,'2022-04-26 11:32:18','2022-04-26 11:32:18',NULL,NULL,NULL),
(4,'Juan','Sebastian','','Neiva',NULL,'4444',2,2130833,4,1,'2022-04-27 10:18:18','2022-04-29 10:29:06',NULL,NULL,1),
(5,'Laura','Bahamon',NULL,'Neiva',NULL,'5555',3,2130833,4,1,'2022-04-29 09:16:22','2022-04-29 11:01:14',NULL,NULL,2),
(6,'Estefania','Gomez',NULL,'Neiva',NULL,'6666',1,2130833,4,1,'2022-04-29 09:16:48','2022-04-29 10:35:05',NULL,NULL,2),
(7,'Sebastian','Cruz',NULL,'Neiva',NULL,'7777',2,2130833,4,1,'2022-04-29 09:17:18','2022-04-29 09:17:18',NULL,NULL,4);

/*Table structure for table `usuario_historial` */

DROP TABLE IF EXISTS `usuario_historial`;

CREATE TABLE `usuario_historial` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(125) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL,
  `apellido` varchar(125) NOT NULL,
  `pass` varchar(90) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `papa` int DEFAULT NULL,
  `estado_id` int DEFAULT NULL,
  `roles_id` int DEFAULT NULL,
  `activo` tinyint NOT NULL DEFAULT '1',
  `fecha_modificacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `v_luz` float DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_estado1_idx` (`estado_id`),
  KEY `fk_usuario_roles1_idx` (`roles_id`),
  KEY `fk_usuario_usuario1_idx` (`papa`),
  CONSTRAINT `fk_usuario_estado10` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`),
  CONSTRAINT `fk_usuario_roles10` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`),
  CONSTRAINT `fk_usuario_usuario10` FOREIGN KEY (`papa`) REFERENCES `usuario_historial` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

/*Data for the table `usuario_historial` */

/*Table structure for table `venta` */

DROP TABLE IF EXISTS `venta`;

CREATE TABLE `venta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_actualizacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `etapas_id` int DEFAULT '1',
  `disponibilidad_id` int DEFAULT '1',
  `usuario_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_desarrollo_venta_etapas1_idx` (`etapas_id`),
  KEY `fk_venta_disponibilidad1_idx` (`disponibilidad_id`),
  KEY `fk_venta_usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_desarrollo_venta_etapas1` FOREIGN KEY (`etapas_id`) REFERENCES `etapas` (`id`),
  CONSTRAINT `fk_venta_disponibilidad1` FOREIGN KEY (`disponibilidad_id`) REFERENCES `disponibilidad` (`id`),
  CONSTRAINT `fk_venta_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

/*Data for the table `venta` */

insert  into `venta`(`id`,`fecha_creacion`,`fecha_actualizacion`,`etapas_id`,`disponibilidad_id`,`usuario_id`) values 
(1,'2022-04-26 11:10:32','2022-04-27 09:54:06',7,3,1),
(2,'2022-04-26 11:32:33','2022-04-28 16:06:06',4,1,2),
(3,'2022-04-26 11:32:46','2022-04-29 10:35:57',7,3,3),
(4,'2022-04-26 18:19:13','2022-04-27 09:53:40',7,3,2),
(5,'2022-04-27 10:18:52','2022-04-28 16:06:40',5,1,4),
(11,'2022-04-29 10:22:12','2022-04-29 10:22:12',1,1,7),
(12,'2022-04-29 10:29:06','2022-04-29 10:29:06',1,1,4);

/*Table structure for table `venta_historial` */

DROP TABLE IF EXISTS `venta_historial`;

CREATE TABLE `venta_historial` (
  `id` int NOT NULL AUTO_INCREMENT,
  `modifica_usuario` int DEFAULT NULL,
  `fecha_actualiza` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `disponibilidad_id` int DEFAULT NULL,
  `venta_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_registro_venta_usuario1_idx` (`modifica_usuario`),
  KEY `fk_venta_historial_disponibilidad1_idx` (`disponibilidad_id`),
  KEY `fk_venta_historial_venta1_idx` (`venta_id`),
  CONSTRAINT `fk_registro_venta_usuario1` FOREIGN KEY (`modifica_usuario`) REFERENCES `usuario` (`id`),
  CONSTRAINT `fk_venta_historial_disponibilidad1` FOREIGN KEY (`disponibilidad_id`) REFERENCES `disponibilidad` (`id`),
  CONSTRAINT `fk_venta_historial_venta1` FOREIGN KEY (`venta_id`) REFERENCES `venta` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb3;

/*Data for the table `venta_historial` */

insert  into `venta_historial`(`id`,`modifica_usuario`,`fecha_actualiza`,`disponibilidad_id`,`venta_id`) values 
(1,1,'2022-04-26 17:01:35',3,1),
(2,1,'2022-04-27 08:56:17',3,1),
(3,1,'2022-04-27 08:56:42',3,1),
(4,2,'2022-04-27 08:57:18',3,4),
(5,2,'2022-04-27 08:57:45',3,4),
(6,2,'2022-04-27 08:57:57',3,4),
(7,2,'2022-04-27 08:57:58',3,4),
(8,2,'2022-04-27 08:58:00',3,4),
(9,2,'2022-04-27 08:58:03',3,4),
(10,2,'2022-04-27 08:58:12',3,4),
(11,2,'2022-04-27 09:02:01',3,4),
(12,2,'2022-04-27 09:47:49',3,4),
(13,2,'2022-04-27 09:50:10',3,4),
(14,2,'2022-04-27 09:52:26',3,4),
(15,2,'2022-04-27 09:53:40',3,4),
(16,1,'2022-04-27 09:53:58',3,1),
(17,1,'2022-04-27 09:54:00',3,1),
(18,1,'2022-04-27 09:54:01',3,1),
(19,1,'2022-04-27 09:54:04',3,1),
(20,1,'2022-04-27 09:54:06',3,1),
(21,3,'2022-04-27 10:04:10',3,3),
(22,2,'2022-04-27 14:19:29',3,2),
(23,4,'2022-04-27 14:20:27',3,5),
(24,4,'2022-04-27 14:21:02',3,5),
(25,4,'2022-04-27 14:21:08',3,5),
(26,3,'2022-04-27 14:21:23',3,3),
(27,2,'2022-04-27 15:41:55',3,4),
(28,2,'2022-04-28 16:06:02',3,2),
(29,2,'2022-04-28 16:06:06',3,2),
(30,4,'2022-04-28 16:06:40',3,5),
(31,2,'2022-04-28 16:18:05',3,NULL),
(32,2,'2022-04-28 16:18:08',3,NULL),
(33,2,'2022-04-28 16:18:12',3,NULL),
(34,2,'2022-04-28 16:18:15',3,NULL),
(35,3,'2022-04-28 16:19:51',3,3),
(36,3,'2022-04-28 16:19:53',3,3),
(37,3,'2022-04-28 16:23:57',3,3),
(38,3,'2022-04-29 10:35:57',3,3);

/* Trigger structure for table `venta` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `venta_BEFORE_UPDATE` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `venta_BEFORE_UPDATE` BEFORE UPDATE ON `venta` FOR EACH ROW BEGIN

END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
