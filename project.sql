# ************************************************************
# Sequel Ace SQL dump
# Version 20050
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 8.1.0)
# Database: project
# Generation Time: 2023-12-24 19:13:07 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table booking
# ------------------------------------------------------------

DROP TABLE IF EXISTS `booking`;

CREATE TABLE `booking` (
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `whereto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `quantity` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `arrival` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `leaving` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `booking` WRITE;
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;

INSERT INTO `booking` (`ID`, `whereto`, `quantity`, `arrival`, `leaving`, `details`)
VALUES
	(1,'1','2','2023-12-15','2023-12-29','a'),
	(2,'1','2','2023-12-15','2023-12-29','a');

/*!40000 ALTER TABLE `booking` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table districts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `districts`;

CREATE TABLE `districts` (
  `ID` tinyint NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `short` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `division_id` tinyint NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `districts` WRITE;
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;

INSERT INTO `districts` (`ID`, `name`, `short`, `division_id`, `created`, `updated`)
VALUES
	(1,'Rajshahi','raj',2,'2023-12-03 12:53:20','2023-12-03 12:53:20'),
	(2,'Chapai','cp',0,'2023-12-10 11:33:17','2023-12-10 11:33:17'),
	(4,'Jamalpur','jlp',6,'2023-12-10 11:38:13','2023-12-10 11:38:13'),
	(5,'Naogaon','ngn',2,'2023-12-10 12:46:19','2023-12-10 12:46:19'),
	(6,'Rajshahi University','',0,'2023-12-14 12:13:48','2023-12-14 12:13:48'),
	(7,'Bagura','bgr',2,'2023-12-14 12:50:57','2023-12-14 12:50:57');

/*!40000 ALTER TABLE `districts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table division
# ------------------------------------------------------------

DROP TABLE IF EXISTS `division`;

CREATE TABLE `division` (
  `ID` tinyint NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `short` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `division` WRITE;
/*!40000 ALTER TABLE `division` DISABLE KEYS */;

INSERT INTO `division` (`ID`, `name`, `short`, `created`, `updated`)
VALUES
	(1,'Dhaka','dhk','2023-12-03 11:44:27','2023-12-03 11:44:27'),
	(2,'Rajshahi','raj','2023-12-03 12:21:29','2023-12-03 12:21:29'),
	(3,'Khulna','khl','2023-12-03 12:47:19','2023-12-03 12:47:19'),
	(4,'Rangpur','rng','2023-12-10 11:28:07','2023-12-10 11:28:07'),
	(5,'Sylhet','syl','2023-12-10 11:36:50','2023-12-10 11:36:50'),
	(6,'Mymensingh','myn','2023-12-10 11:37:02','2023-12-10 11:37:02'),
	(7,'Barisal','brs','2023-12-10 11:37:15','2023-12-10 11:37:15'),
	(8,'Chattogram','ctg','2023-12-10 11:37:24','2023-12-10 11:37:24');

/*!40000 ALTER TABLE `division` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table places
# ------------------------------------------------------------

DROP TABLE IF EXISTS `places`;

CREATE TABLE `places` (
  `ID` tinyint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `location` text COLLATE utf8mb4_general_ci NOT NULL,
  `google_map` text COLLATE utf8mb4_general_ci NOT NULL,
  `youtube_link` text COLLATE utf8mb4_general_ci NOT NULL,
  `district_id` tinyint NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `places` WRITE;
/*!40000 ALTER TABLE `places` DISABLE KEYS */;

INSERT INTO `places` (`ID`, `name`, `description`, `banner`, `location`, `google_map`, `youtube_link`, `district_id`, `created`, `updated`)
VALUES
	(1,'Padma Garden','Padma Garden Description','http://localhost/project/uploads/padma-garden.jpg','Dorgapara, Rajshahi College Pathway','<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14538.246071533971!2d88.5989782!3d24.3617623!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbefa6499c5bb5%3A0xbe2d625c42ed30f7!2z4Kaq4Kam4KeN4Kau4Ka-IOCml-CmvuCmsOCnjeCmoeCnh-CmqA!5e0!3m2!1sbn!2sbd!4v1702532738056!5m2!1sbn!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/W3_NO_a0Cdc?si=FhiGWPUyM46u6Mbs\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>',1,'2023-12-14 11:47:02','2023-12-14 11:47:02'),
	(2,'Rajshahi University','Rajshahi University Description','http://localhost/project/uploads/arts.jpg','Administration Building 1','<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14537.506878346523!2d88.6376358!3d24.368195!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbf02db6d04b59%3A0xaa58eb411ea3ec5c!2z4Kaw4Ka-4Kac4Ka24Ka-4Ka54KeAIOCmrOCmv-CmtuCnjeCmrOCmrOCmv-CmpuCnjeCmr-CmvuCmsuCmr-CmvA!5e0!3m2!1sbn!2sbd!4v1702534387718!5m2!1sbn!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/0Xpm8-OK6H0?si=t0fNj4gPjmZeYcpS\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>',1,'2023-12-14 12:26:13','2023-12-14 12:26:13'),
	(3,'Paharpur Buddhist Bihar','Paharpur Buddhist Bihar description','http://localhost/project/uploads/Paharpur-Buddist-Bihar.jpg','Paharpoor Museum Building, 6500','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28920.43888874265!2d88.93891616553546!3d25.03221220555178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc8ee2b47d3dc7%3A0xd00f858b61a52fae!2z4Kaq4Ka-4Ka54Ka-4Kah4Ka84Kaq4KeB4KawIOCmrOCnjOCmpuCnjeCmpyDgpqzgpr_gprngpr7gprAg4Kac4Ka-4Kam4KeB4KaY4Kaw!5e0!3m2!1sbn!2sbd!4v1702535359321!5m2!1sbn!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/9ay1pjjdK_s?si=GyVdvczd1phhdRWm\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>',5,'2023-12-14 12:29:57','2023-12-14 12:29:57'),
	(4,'Mahasthan','Mahasthan Description','http://localhost/project/uploads/mahasthangarh-bogra.jpg','X87V+3HF, 5810','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6083.4980143567145!2d89.3345205891198!3d24.956941773281685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fcfee89087ae65%3A0xb149cf750e5b69c8!2z4Kau4Ka54Ka-4Ka44KeN4Kal4Ka-4KaoIOCmquCnjeCmsOCmpOCnjeCmqOCmpOCmvuCmpOCnjeCmpOCnjeCmrOCmv-CmlSDgppzgpr7gpqbgp4HgppjgprA!5e0!3m2!1sbn!2sbd!4v1702536701270!5m2!1sbn!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4N8TtNSSehs?si=1u5wV4k2hbdXVWAN\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>',7,'2023-12-14 12:53:13','2023-12-14 12:53:13');

/*!40000 ALTER TABLE `places` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `ID` tinyint NOT NULL AUTO_INCREMENT,
  `meta_key` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `meta_value` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;

INSERT INTO `settings` (`ID`, `meta_key`, `meta_value`)
VALUES
	(1,'banner_heading','Dreams Ride on <br>Wings.'),
	(2,'banner_text','Is a trasted youtube channel to learn web design and development.<br>ipsum dolor sit amet,consectetuer adipiscing elit. <br>Aenean commodo ligula eget dolor.'),
	(3,'banner_button_1','Sign In'),
	(4,'banner_button_2','About'),
	(5,'hero_banner','http://localhost/project/uploads/itl.cat_hd-wallpapers-laptop-windows_1200934.png'),
	(6,'about_heading','Learn More About Us');

/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `ID` tinyint NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`ID`, `name`, `email`, `password`, `created`, `updated`)
VALUES
	(1,'Sondha','test@test.com','81dc9bdb52d04dc20036dbd8313ed055','2023-11-30 00:00:00','2023-11-30 00:00:00'),
	(2,'Kamrul','kamrul@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','2023-11-30 00:00:00','2023-11-30 00:00:00'),
	(6,'Nilufa','nilufa@test.com','81dc9bdb52d04dc20036dbd8313ed055','2023-11-30 13:01:04','2023-11-30 13:01:04');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
