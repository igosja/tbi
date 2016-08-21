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
-- Table structure for table `resize`
--

DROP TABLE IF EXISTS `resize`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resize` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cut` tinyint(1) DEFAULT '0',
  `height` int(11) DEFAULT '0',
  `image_id` int(11) DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `width` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `image_id` (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resize`
--

LOCK TABLES `resize` WRITE;
/*!40000 ALTER TABLE `resize` DISABLE KEYS */;
INSERT INTO `resize` VALUES (1,1,327,4,'/uploads/cad/e1a/cf5/3653d5a7b1a1ec78fc8a.jpg',600),(2,1,150,1,'/uploads/a86/287/b7f/0df4c44364964e13a72e.jpg',200),(3,1,327,5,'/uploads/f01/5db/634/c319ea9409f73176d07f.jpg',600),(4,1,400,5,'/uploads/86d/df5/8e0/5033fedc56c7a41dae51.jpg',600),(5,1,327,6,'/uploads/2c6/655/868/d8bf4f15617cdcad5081.jpg',600),(6,1,400,6,'/uploads/ea0/f82/c8c/d53f47b0550e760aef0d.jpg',600),(7,1,400,7,'/uploads/62c/d25/6b3/c98fa1a07c508ef49b42.jpg',600),(8,1,327,7,'/uploads/151/3c8/084/bb8e9be76b4e984ff757.jpg',600),(9,1,327,8,'/uploads/52b/8b3/463/2bc71e798a8a983c4c6a.jpg',600),(10,1,327,10,'/uploads/cfc/c58/657/d949fd22ecf5ea57ca6b.jpg',600),(11,1,327,9,'/uploads/38d/d6d/f41/b0060268a5a9fd52ac28.jpg',600),(12,1,400,10,'/uploads/aa6/ea6/c78/eb26f4f4870c589519d3.jpg',600),(13,1,327,11,'/uploads/4ce/9fe/3f4/b35e3b9a5d4ac2a2460a.jpg',600),(14,1,400,11,'/uploads/d7b/327/3ac/e5f7abec273c155edf9d.jpg',600),(15,1,327,12,'/uploads/97e/4cd/d35/19747cd3044697d79c97.jpg',600),(16,1,400,12,'/uploads/a95/209/64a/5491ba17c684e42d987a.jpg',600),(17,1,327,13,'/uploads/429/2c2/d1d/5e73f65e28099451269a.jpg',600),(18,1,400,13,'/uploads/6df/0a4/b05/7ca65515a616ef2da91d.jpg',600),(19,1,327,14,'/uploads/b48/9c7/4a4/30c68a878a532436b491.jpg',600),(20,1,327,15,'/uploads/77d/7d9/7dd/df85234a7203b59d1662.jpg',600),(21,1,400,14,'/uploads/6ef/5c4/f44/92d5ea78005fa14dad32.jpg',600),(22,1,400,15,'/uploads/7f3/d62/f8d/441edb83faff93e2234e.jpg',600),(23,1,280,16,'/uploads/bf4/ef9/2a9/712d0445a8d0817048f8.jpg',280),(24,1,350,18,'/uploads/67f/4ab/fa0/a7d4218a98a1b4e2c7a6.jpg',1200),(25,1,530,19,'/uploads/cf1/007/f25/1ced44301d8a6b7e2923.jpg',380),(26,1,250,19,'/uploads/054/785/fd4/a9fa2ea2d6342972b12b.jpg',380),(27,1,250,23,'/uploads/da9/dec/ea9/6eb48c749dadbcd4c765.jpg',380),(28,1,250,20,'/uploads/56c/4c8/40b/b3b96b379539b41673f5.jpg',380),(29,1,250,22,'/uploads/d91/5e3/885/1256a0e79f0823f83d84.jpg',380),(30,1,250,21,'/uploads/a12/6ee/c02/71870831aaacbdf8c971.jpg',380),(31,1,280,24,'/uploads/2cb/b41/ae5/7698ad4dfa8f1c557f0b.jpg',280),(32,1,380,19,'/uploads/f5d/67c/d43/c1cc7302642cbdafcd58.jpg',380),(33,1,380,20,'/uploads/072/7a0/176/c6b53d853b0d97e4d646.jpg',380),(34,1,380,21,'/uploads/545/d22/d7d/86c690320f1c9983dc25.jpg',380),(35,1,380,22,'/uploads/354/f90/c10/52460d01ef5629e3b986.jpg',380),(36,1,380,23,'/uploads/901/1d0/a57/2e1c4702057d30670abc.jpg',380),(37,1,162,1,'/uploads/909/8a4/ce4/ed312667d89ecb1707b2.jpg',216),(38,1,150,25,'/uploads/6d8/91c/615/6fe412bf27301155dbc9.jpg',200),(39,1,162,25,'/uploads/b75/508/25f/d0c44139d4d0db514a81.jpg',216),(40,1,162,28,'/uploads/f65/c9c/ce9/8b14e158885008091394.jpg',216),(41,1,150,26,'/uploads/8c3/77e/f6e/064d2d1062625df7a68e.jpg',200),(42,1,150,27,'/uploads/6f5/cba/464/44c013fbc704f658bbea.jpg',200),(43,1,150,28,'/uploads/3e0/14d/8e3/2c6dee7d41b9393d365b.jpg',200),(44,1,150,29,'/uploads/379/85d/456/cc91c6ad2ab127ff00f4.jpg',200),(45,1,150,30,'/uploads/3d1/08c/569/b6bd9b32b896c165de58.jpg',200),(46,1,150,31,'/uploads/ad0/ab8/91a/19c35dcbbd0dbc5f9b96.jpg',200),(47,1,162,32,'/uploads/781/5b3/fa2/35efda1b0fb1b1011c13.jpg',216),(48,1,150,32,'/uploads/2c5/663/c5c/5ae8e951f3b1b570be58.jpg',200),(49,1,150,33,'/uploads/288/6a5/848/346b51bd22f55b87fa28.jpg',200),(50,1,150,35,'/uploads/a82/cb5/621/26d9417c6c254e353e39.jpg',200),(51,1,150,34,'/uploads/233/d99/9f4/44dec799bb505f43ed79.jpg',200),(52,1,150,36,'/uploads/585/be6/c5a/6696164b3f39e57dfacf.jpg',200),(53,1,150,37,'/uploads/8f7/95d/e64/b3df829dae3cf0a5c21a.jpg',200),(54,1,280,38,'/uploads/d72/3ea/0f6/ee8be1c5403c37c5f38a.jpg',280);
/*!40000 ALTER TABLE `resize` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-21 19:38:16
