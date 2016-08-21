-- MySQL dump 10.13  Distrib 5.7.14, for Linux (x86_64)
--
-- Host: localhost    Database: igosja_tbi
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.16-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `office_address` varchar(255) DEFAULT NULL,
  `office_email` varchar(255) DEFAULT NULL,
  `office_lat` varchar(255) NOT NULL,
  `office_lng` varchar(255) NOT NULL,
  `office_name` varchar(255) NOT NULL,
  `office_phone` varchar(255) DEFAULT NULL,
  `salon_address` varchar(255) DEFAULT NULL,
  `salon_email` varchar(255) DEFAULT NULL,
  `salon_lat` varchar(255) NOT NULL,
  `salon_lng` varchar(255) NOT NULL,
  `salon_name` varchar(255) NOT NULL,
  `salon_phone` varchar(255) DEFAULT NULL,
  `text` text,
  `seo_description` text,
  `seo_keywords` text,
  `seo_title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'01054, г.Киев,;ул. Гоголевская, 23','info@tbi.ua','50.451502','30.494894','Фирма \"ТБИ\"','(044) 482-01-01;(044) 482-36-46;(044) 482-36-47;(044) 482-04-91','01054, г.Киев,;ул. Гоголевская, 15','info@tbi.ua','50.450755','30.495665','Салон \"VOGUE INTERIORS\"','(044) 482-01-01;(044) 482-36-46;(044) 482-36-47;(044) 482-04-91','Мы будем рады предоставить Вам подробную консультацию по предлагаемой продукции, провести презентацию материалов, обучающий или ознакомительный семинар, внедрить дисконтную и бонусную программы, а также предоставить наиболее удобный формат сотрудничества для длительной и плодотворной кооперации.\r\n','Контакты','Контакты','Контакты');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-21 19:38:17
