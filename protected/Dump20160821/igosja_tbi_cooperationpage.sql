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
-- Table structure for table `cooperationpage`
--

DROP TABLE IF EXISTS `cooperationpage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cooperationpage` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `dealer` text,
  `designer` text,
  `text_footer` text,
  `text_header` text,
  `seo_description` text,
  `seo_keywords` text,
  `seo_title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cooperationpage`
--

LOCK TABLES `cooperationpage` WRITE;
/*!40000 ALTER TABLE `cooperationpage` DISABLE KEYS */;
INSERT INTO `cooperationpage` VALUES (1,'<ul>\r\n<li>продукция от компаний-лидеров отрасли, постоянно в наличии, напрямую от эксклюзивного представителя;</li>\r\n<li>эксклюзивный ассортиментный ряд с конкурентным ценовым предложением;</li>\r\n<li>индивидуальные условия сотрудничества для удобного формата работы;</li>\r\n<li>обучающие семинары и тренинги;</li>\r\n<li>помощь в оформлении экспозиции, постоянная консультационная поддержка и многое другое.</li>\r\n</ul>','<p>Клиентоориентированность и индивидуальный подход позволяют предложить не только выгодные, но и комфортные условия совместной работы на объектах и с Заказчиками, а именно:</p>\r\n<ul>\r\n<li>продукция с первых рук от эксклюзивного импортера;</li>\r\n<li>полное информационное и материально-техническое сопровождение объектов от стадии «П» до реализации «под ключ»;</li>\r\n<li>уникальная подборка продукции для решения самых сложных задач  практически без каких-либо технических или функциональных ограничений;</li>\r\n<li>возможность создания индивидуальных решений под проект;</li>\r\n<li>только индивидуальный подход и условия сотрудничества, качество и профессионализм с более чем 24-х летним опытом;</li>\r\n<li>бесплатный мастер-класс или шеф монтаж для индивидуальных мастеров или монтажников клиента.</li>\r\n</ul>','Индивидуальный подход для организации плодотворного сотрудничества и совместного развития бизнеса с работой на результат, предлагая лучшее, что есть на рынке по очень конкурентным ценам.','Компания «ТБИ» приглашает к сотрудничеству профессионалов, предлагая лучшие решения для декора стен (краски и штукатурки), декора окон (карнизы и карнизные системы) и профессиональной солнцезащиты. Итальянские бренды NOVACOLOR и Giorgio Graesan &amp; Friends – это лидеры отрасли «декоративные материалы», а компания MOTTURA – самый крупный профессионал в сфере систем для зашторивания и солнцезащиты. Эти три бренда Компания «ТБИ» эксклюзивно представляет на территории Украины и заинтересована в расширении дилерской и партнерской сети.','Сотрудничество','Сотрудничество','Сотрудничество');
/*!40000 ALTER TABLE `cooperationpage` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-21 19:38:15
