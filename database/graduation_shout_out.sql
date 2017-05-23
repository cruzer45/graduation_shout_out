CREATE DATABASE  IF NOT EXISTS `graduation_shout_out` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `graduation_shout_out`;
-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: localhost    Database: graduation_shout_out
-- ------------------------------------------------------
-- Server version	5.6.26

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
-- Table structure for table `shout_out`
--

DROP TABLE IF EXISTS `shout_out`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shout_out` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `to` varchar(255) DEFAULT NULL,
  `from` varchar(255) DEFAULT NULL,
  `message` text,
  `counter` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shout_out`
--

LOCK TABLES `shout_out` WRITE;
/*!40000 ALTER TABLE `shout_out` DISABLE KEYS */;
INSERT INTO `shout_out` VALUES (1,'sadfas','dfsadfasd','fasdfasd',3),(2,'Mike','Maurice','2 Great JOB!!!!',3),(3,'Mike','Maurice','3 Great JOB!!!!',3),(4,'Mike','Maurice','4 Great JOB!!!!',3),(5,'Mike','Maurice','5 Great JOB!!!!',3),(6,'Mike','Maurice','6 Great JOB!!!!',3),(7,'Mike','Maurice','7 Great JOB!!!!',3),(8,'Mike','Maurice','8 Great JOB!!!!',3),(9,'Mike','Maurice','9 Great JOB!!!!',3),(10,'Mike','Maurice','10 Great JOB!!!!',3),(11,'Mike','Maurice','11 Great JOB!!!!',3),(12,'Mike','Maurice','12 Great JOB!!!!',3),(13,'Mike','Maurice','13 Great JOB!!!!',3),(14,'Mike','Maurice','14 Great JOB!!!!',3),(15,'Mike','Maurice','15 Great JOB!!!!',3),(16,'Mike','Maurice','16 Great JOB!!!!',3),(17,'Mike','Maurice','17 Great JOB!!!!',3),(18,'Mike','Maurice','18 Great JOB!!!!',3),(19,'Mike','Maurice','19 Great JOB!!!!',3),(20,'Mike','Maurice','20 Great JOB!!!!',3),(21,'Mike','Maurice','21 Great JOB!!!!',3),(22,'Mike','Maurice','22 Great JOB!!!!',3),(23,'Mike','Maurice','23 Great JOB!!!!',3),(24,'Mike','Maurice','24 Great JOB!!!!',3),(25,'Karyn','Dad','Love You!!!!!',3),(26,'Karyn','Dad','asdfasdfasdfadfsad',3),(27,'Jennifer','Mason','WHADDUP!!!!!!!!',3);
/*!40000 ALTER TABLE `shout_out` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-23 13:59:35
