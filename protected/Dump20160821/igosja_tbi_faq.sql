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
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` text,
  `order` int(11) DEFAULT '0',
  `question` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `order` (`order`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` VALUES (1,'<p>Рады сообщить, что отныне продукция итальянского производителя декоративных материалов GIORGIO GRAESAN &amp; FRIENDS представлена и в интернет-магазине нашего сайта.</p>\r\n<p>Вы наверное знаете, что декоративные материалы GIORGIO GRAESAN &amp; FRIENDS от недавнего времени можно приобрести не только у официального представителя – Фирмы «ТБИ», но и online, через сайт www.giorgiograesan.ua , где Вы сможете не только выбрать материалы, но и заказать работы по нанесению отделки.</p>',0,'Задайте свой вопрос менеджеру',1),(2,'<p>Рады сообщить, что отныне продукция итальянского производителя декоративных материалов GIORGIO GRAESAN &amp; FRIENDS представлена и в интернет-магазине нашего сайта.</p>\r\n<p>Вы наверное знаете, что декоративные материалы GIORGIO GRAESAN &amp; FRIENDS от недавнего времени можно приобрести не только у официального представителя – Фирмы «ТБИ», но и online, через сайт www.giorgiograesan.ua , где Вы сможете не только выбрать материалы, но и заказать работы по нанесению отделки.</p>',5,'Часто задаваемые вопросы об оплате и доставке',1),(3,'<p>Сделайте подарок, наполненный стилем  - подарочный сертификат от  www.tbi.ua. Это идеальный подарок для ценителей роскошных и комфортных интерьеров. Вы можете выбрать подходящий номинал сертификата, который будет являться предварительным платежом, который дает возможность приобрести товары или услуги в интернет-магазине tbi.ua, на сумму, эквивалентную его номиналу.</p>',1,'Часто задаваемые вопросы о www.tbi.ua',1),(4,'<p>Рады сообщить, что отныне продукция итальянского производителя декоративных материалов GIORGIO GRAESAN &amp; FRIENDS представлена и в интернет-магазине нашего сайта.</p>\r\n<p>Вы наверное знаете, что декоративные материалы GIORGIO GRAESAN &amp; FRIENDS от недавнего времени можно приобрести не только у официального представителя – Фирмы «ТБИ», но и online, через сайт www.giorgiograesan.ua , где Вы сможете не только выбрать материалы, но и заказать работы по нанесению отделки.</p>\r\n<p>Декоративные материалы Giorgio Graesan &amp; Friends уже давно представлены в интерьер-салоне «VOGUE INTERIORS», где можно не только подобрать отделки, но и заказать декор.  Для Вашего удобства, теперь все это можно сделать не выходя из дома, используя раздел GIORGIO GRAESAN &amp; FRIENDS в интернет магазине салона «VOGUE INTERIORS\".  Доставка декоративных материалов и выполнение работ по декору осуществляются, как по Киеву, так и по всей Украине.</p>\r\n<p>Рады сообщить, что отныне продукция итальянского производителя декоративных материалов GIORGIO GRAESAN &amp; FRIENDS представлена и в интернет-магазине нашего сайта. Вы наверное знаете, что декоративные материалы GIORGIO GRAESAN &amp; FRIENDS от недавнего времени можно приобрести не только у официального представителя.</p>\r\n<p>Фирмы «ТБИ», но и online, через сайт www.giorgiograesan.ua , где Вы сможете не только выбрать материалы, но и заказать работы по нанесению отделки.</p>\r\n<p>Декоративные материалы Giorgio Graesan &amp; Friends уже давно представлены в интерьер-салоне «VOGUE INTERIORS», где можно не только подобрать отделки, но и заказать декор.  Для Вашего удобства, теперь все это можно сделать не выходя из дома, используя раздел GIORGIO GRAESAN &amp; FRIENDS в интернет магазине салона «VOGUE INTERIORS\".  Доставка декоративных материалов и выполнение работ по декору осуществляются, как по Киеву, так и по всей Украине.</p>',3,'Часто задаваемые вопросы о продукции NOVACOLOR и  Giorgio Graesan & Friends',1),(5,'<p>Рады сообщить, что отныне продукция итальянского производителя декоративных материалов GIORGIO GRAESAN &amp; FRIENDS представлена и в интернет-магазине нашего сайта.</p>\r\n<p>Вы наверное знаете, что декоративные материалы GIORGIO GRAESAN &amp; FRIENDS от недавнего времени можно приобрести не только у официального представителя – Фирмы «ТБИ», но и online, через сайт www.giorgiograesan.ua , где Вы сможете не только выбрать материалы, но и заказать работы по нанесению отделки.</p>',2,'Часто задаваемые вопросы о продукции MOTTURA',1),(6,'<p>Рады сообщить, что отныне продукция итальянского производителя декоративных материалов GIORGIO GRAESAN &amp; FRIENDS представлена и в интернет-магазине нашего сайта.</p>\r\n<p>Вы наверное знаете, что декоративные материалы GIORGIO GRAESAN &amp; FRIENDS от недавнего времени можно приобрести не только у официального представителя – Фирмы «ТБИ», но и online, через сайт www.giorgiograesan.ua , где Вы сможете не только выбрать материалы, но и заказать работы по нанесению отделки.</p>',4,'Часто задаваемые вопросы о тканях',1);
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-21 19:38:14
