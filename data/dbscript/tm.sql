-- MySQL dump 10.13  Distrib 5.5.28, for osx10.6 (i386)
--
-- Host: localhost    Database: tm
-- ------------------------------------------------------
-- Server version	5.5.28

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
-- Table structure for table `day_plan`
--

DROP TABLE IF EXISTS `day_plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `day_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `dayth` tinyint(4) NOT NULL,
  `traffic` varchar(50) NOT NULL,
  `arrive_time` varchar(20) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `hotel_id` varchar(50) NOT NULL,
  `spot_list` varchar(200) NOT NULL,
  `insert_time` int(10) NOT NULL,
  `update_time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10062 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `day_plan`
--

LOCK TABLES `day_plan` WRITE;
/*!40000 ALTER TABLE `day_plan` DISABLE KEYS */;
INSERT INTO `day_plan` VALUES (1,12,1,'飞机','7:29','光光','4122396','[&quot;2760076&quot;,&quot;2845225&quot;]',1369820650,1369820650),(2,12,2,'飞机','7:29','','0','[]',1369820650,1369820650),(3,13,1,'飞机','7:29','光光','4122396','[&quot;2760076&quot;,&quot;2845225&quot;]',1369820713,1369820713),(4,13,2,'汽车','11:30','呵呵','4122396','[&quot;2716477&quot;,&quot;2290345&quot;]',1369820713,1369820713),(5,14,1,'飞机','7:29','光光','4122396','[&quot;2760076&quot;,&quot;2845225&quot;]',1369820722,1369820722),(6,14,2,'汽车','11:30','呵呵','4122396','[&quot;2716477&quot;,&quot;2290345&quot;]',1369820722,1369820722),(7,15,1,'飞机','7:29','光光','4122396','[\"2760076\",\"2845225\"]',1369820808,1369820808),(8,15,2,'汽车','11:30','呵呵','4122396','[\"2716477\",\"2290345\"]',1369820808,1369820808),(9,16,1,'飞机','7:29','光光','0','[\"3677188\"]',1369876052,1369876052),(10054,10000,2,'火车','20:10','长隆水上乐园','2669044','[\"2267356\",\"2954893\",\"5202451\"]',1370251150,1370251150),(10002,10001,1,'火车','8:31','','0','[\"5334831\",\"2614342\"]',1369892060,1369892060),(10053,10000,1,'汽车','8:0','荔湾区','4511236','[\"3677188\",\"2396437\",\"2542066\",\"6442847\",\"4112317\",\"1596211\",\"2703274\",\"1595860\",\"1596916\",\"1596247\",\"1596271\"]',1370251150,1370251150),(10047,10002,1,'飞机','12:30','武汉机场','4672396','[\"8720702\",\"3011371\",\"4707977\",\"1738432\",\"1738504\",\"2577043\"]',1369969196,1369969196),(10048,10002,2,'汽车','10:0','武汉动物园','2776684','[\"1738450\",\"1738483\",\"4659605\"]',1369969196,1369969196),(10049,10002,3,'汽车','9:30','沙湖公园','9946416','[\"5388379\",\"1738456\"]',1369969196,1369969196),(10050,10003,1,'飞机','12:30','武汉机场','4672396','[\"8720702\",\"3011371\",\"4707977\",\"1738432\",\"1738504\",\"2577043\"]',1369969205,1369969205),(10051,10003,2,'汽车','10:0','武汉动物园','2776684','[\"1738450\",\"1738483\",\"4659605\"]',1369969205,1369969205),(10052,10003,3,'汽车','9:30','沙湖公园','9946416','[\"5388379\",\"1738456\"]',1369969205,1369969205),(10055,10004,1,'飞机','7:29','','0','[\"2396437\",\"1596289\",\"8845880\"]',1370252649,1370252649),(10056,10005,1,'飞机','7:29','','0','[\"2396437\",\"1596289\",\"8845880\"]',1370252651,1370252651),(10057,10006,1,'飞机','7:29','','0','[\"2396437\",\"1596289\",\"8845880\"]',1370252651,1370252651),(10058,10007,1,'飞机','7:29','','0','[\"2396437\",\"1596289\",\"8845880\"]',1370252651,1370252651),(10059,10008,1,'飞机','7:29','dfdf','2333917','[\"2396437\",\"1596289\",\"8845880\"]',1370252659,1370252659),(10060,10009,1,'飞机','7:29','','0','[\"1595860\",\"4281878\",\"5128550\",\"2580415\",\"11556022\"]',1377164238,1377164238),(10061,10010,1,'飞机','7:29','','0','[\"10651970\"]',1384841880,1384841880);
/*!40000 ALTER TABLE `day_plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel`
--

LOCK TABLES `hotel` WRITE;
/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
/*!40000 ALTER TABLE `hotel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `play`
--

DROP TABLE IF EXISTS `play`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `play` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `play`
--

LOCK TABLES `play` WRITE;
/*!40000 ALTER TABLE `play` DISABLE KEYS */;
/*!40000 ALTER TABLE `play` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scenic_spot`
--

DROP TABLE IF EXISTS `scenic_spot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scenic_spot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scenic_spot`
--

LOCK TABLES `scenic_spot` WRITE;
/*!40000 ALTER TABLE `scenic_spot` DISABLE KEYS */;
/*!40000 ALTER TABLE `scenic_spot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `travel`
--

DROP TABLE IF EXISTS `travel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `travel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `start_time` varchar(50) NOT NULL,
  `recommended` tinyint(4) NOT NULL,
  `insert_time` int(10) NOT NULL,
  `update_time` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10011 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `travel`
--

LOCK TABLES `travel` WRITE;
/*!40000 ALTER TABLE `travel` DISABLE KEYS */;
INSERT INTO `travel` VALUES (13,'广州游','2013-05-30',0,1369820713,1369820713),(12,'广州游','2013-05-30',0,1369820650,1369820650),(11,'广州游','2013-05-30',0,1369818829,1369818829),(10,'广州游','2013-05-30',0,1369818826,1369818826),(9,'广州游','2013-05-30',0,1369818572,1369818572),(14,'广州游','2013-05-30',0,1369820722,1369820722),(15,'广州游','2013-05-30',0,1369820808,1369820808),(16,'广州游','',0,1369876052,1369876052),(10000,'广州一日','2013-06-30',1,1369877954,1370251150),(10001,'广州一日游','2013-06-01',0,1369892060,1369892060),(10002,'武汉三日游','2013-06-06',1,1369969196,1369969196),(10003,'武汉三日游','2013-06-06',0,1369969205,1369969205),(10004,'广州游','2013-06-04',0,1370252649,1370252649),(10005,'广州游','2013-06-04',0,1370252651,1370252651),(10006,'广州游','2013-06-04',0,1370252651,1370252651),(10007,'广州游','2013-06-04',0,1370252651,1370252651),(10008,'广州游','2013-06-04',0,1370252659,1370252659),(10009,'广州游','2013-08-23',0,1377164238,1377164238),(10010,'广州游','2013-11-20',0,1384841880,1384841880);
/*!40000 ALTER TABLE `travel` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-11-25 11:33:58
