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
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'/uploads/ff6/130/b05/1daf5f6eb59074138b7d.jpg'),(4,'/uploads/a46/91b/605/c3a178491487ca1d01ca.jpg'),(5,'/uploads/29a/c4c/974/4103f0df17b892d72197.jpg'),(6,'/uploads/96d/bfa/0cf/79d37319d8310fa11c60.jpg'),(7,'/uploads/5dd/5bd/fe1/7a14d5f77dc7f70733f6.jpg'),(8,'/uploads/ab1/622/bb5/bb3ab5b4648a3e4c9d26.jpg'),(9,'/uploads/975/f98/1ce/df98b5d9d11d9c1e391a.jpg'),(10,'/uploads/ab7/bbb/b5b/e1f2092ebc1a1193fe17.jpg'),(11,'/uploads/017/95f/38e/a4b2d24440be721c2d33.jpg'),(12,'/uploads/86c/1c5/19f/dcaa80f109c151f747a5.jpg'),(13,'/uploads/d6b/942/bde/818759fb1758639c8827.jpg'),(14,'/uploads/0b9/966/ff0/fe7c13ab760ee702d4de.jpg'),(15,'/uploads/28a/825/0f2/726d4bf5d9ccf32cd094.jpg'),(16,'/uploads/798/618/c07/a162dcb2133e943ada89.jpg'),(18,'/uploads/c37/739/d30/68d49fc72b1b1e7a747e.jpg'),(19,'/uploads/175/749/a4a/4d53bf8e1f6e152994d4.jpg'),(20,'/uploads/44d/571/ff3/0faeb831ed1804c7566f.jpg'),(21,'/uploads/7c7/565/b85/26cc836e7029f801c1d3.jpg'),(22,'/uploads/232/1b1/c0c/96bae79caf24b19e7253.jpg'),(23,'/uploads/905/4f3/49a/51f6f0ed40077d8666bf.jpg'),(24,'/uploads/4b5/920/776/4b89234ca7256c45143a.jpg'),(25,'/uploads/70b/48b/277/483a44ec34db2ca14194.jpg'),(26,'/uploads/99a/3f3/83a/a729059304677e786e7f.jpg'),(27,'/uploads/107/bdd/464/2275b1e7cea93eed8b65.jpg'),(28,'/uploads/105/21e/f51/6c56e628720d84fec465.jpg'),(29,'/uploads/8cd/230/43a/6bf1be7a8b26085a967c.jpg'),(30,'/uploads/0bc/459/87b/6e7b8d275d3c5ce81ef0.jpg'),(31,'/uploads/bcd/43f/95a/396924364f6f6fdc24be.jpg'),(32,'/uploads/a06/a8c/202/60b384ed171ee540ab46.jpg'),(33,'/uploads/8c8/78f/78f/749adbace35a1e1ea2c7.jpg'),(34,'/uploads/08a/f7b/603/589829b8aab4425220e0.jpg'),(35,'/uploads/6e4/6fe/1ca/3d56a8e0609d231dafe8.jpg'),(36,'/uploads/ef7/e10/cbd/f7d07df7a44264d32f17.jpg'),(37,'/uploads/69c/e28/c05/41b18e0bc5da954161d3.jpg'),(38,'/uploads/e5c/185/97d/95020b5285970be41191.jpg');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-21 19:38:11
