-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: kosten
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB-0+deb9u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `boms`
--

DROP TABLE IF EXISTS `boms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `boms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `composition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `knittings_cod` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw1` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raw2` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `raw3` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perc1` decimal(8,6) NOT NULL,
  `perc2` decimal(8,6) DEFAULT NULL,
  `perc3` decimal(8,6) DEFAULT NULL,
  `losses` decimal(8,6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `boms_article_unique` (`article`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boms`
--

LOCK TABLES `boms` WRITE;
/*!40000 ALTER TABLE `boms` DISABLE KEYS */;
INSERT INTO `boms` VALUES (1,'2103CDB03','BIELASTICO','100%PA 6.6','M01','PA661X42/13T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(2,'2116BGB00','POLICHAREL','100%PES','M01','PES1X75/36T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(3,'2324BCB01','MULTICREPE','100%PA 6.6','M01','PA661X80/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(4,'2330BCB00','FITNESS','96%PA 6.6  TEXT 2/78/48 + 4% PA 6.6 1/42/13','M01','PA662X78/48T','PA1X42/13L','',0.960000,0.040000,0.000000,0.065000,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(5,'2342BCB00','STICK LANNY','90%PA 6.6 + 10%PUE','M01','PA662X80/68T','PUE1X40','',0.900000,0.100000,0.000000,0.065000,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(6,'2354BCB01','MULTICREPE POLIESTER','100%PES','M01','PES1X75/72T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(7,'2355BGB00','MULTIELASTIC','93%PES + 7%PUE','M01','PES1X75/72T','PUE1X20','',0.930000,0.070000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(8,'2370BCB00','MULTIPICK','100%PA 6.6','M01','PA662X80/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(9,'2374BCB02','BALIZ','100% PA.6.6','M04','PA1X60/60T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(10,'2375BCB08','POWER 70','88%PA 6 6 + 12%PUE','M01','PA661X200/96T','PUE1X70','',0.880000,0.120000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(11,'2377CCB00','MESCLA BERNAL','96%PA 6 + 4%PUE','M01','PA1X200/96M','PUE1X40','',0.960000,0.040000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(12,'2388BCB00','COOPER DRY','100%PA 6.6','M01','PA661X80/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(13,'2390BCB00','AIR MAX','88%PA 6.6 + 8% PUE + 4%PA 6.6 42/13','M01','PA662X80/68T','PUE1X40','PA661X40/13L',0.880000,0.080000,0.040000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(14,'2392BCB00','MESCLA 40','92%PA 6 + 8% PUE','M01','PA1X200/96M','PUE1X40','',0.920000,0.080000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(15,'2408BCB00','FLUID','96%PA 6.6 TEXT + 4%PA 6.6 1/42/13','M01','PA662X80/68T','PA1X42/13L','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(16,'2410BCB00','AIR SHOX','88%PA 6.6 + 12%PUE','M01','PA662X80/68T','PUE1X70','',0.880000,0.120000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(17,'2702BCB00','PERFETC MAGMA','88%PA EMANA TEXT+ 12 %PUE 70','M02','PA662X80/60TE','PUE1X70',NULL,0.880000,0.120000,0.000000,0.065000,'2017-11-27 16:56:00','2017-12-18 12:15:11'),(18,'2414BCB01','SHINE TRI','97%PA 6.6 + 03%PUE','M07','PA661X60/60T','PUE1X20','',0.970000,0.030000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(19,'2415BCB00','AIR COOL','100%PA 6.6','M01','PA661X80/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(20,'2420BCB03','MULTICREPE ICE','100%PA 6.6','M01','PA661X80/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(21,'2434BCB00','MOLETON PA 40','92%PA 6.6 + 8%PUE','M01','PA662X80/68T','PUE1X40','',0.920000,0.080000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(22,'2455CCB00','FIT MESCLA','97%PA 6 + 03%PA 6','M01','PA1X200/98M','PA1X42/13L','',0.970000,0.030000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(23,'2458CCB00','MESCLA FLUID','92%PA 6 + 8% PA 6','M01','PA1X200/98M','PA1X42/13L','',0.920000,0.080000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(24,'2467BCB00','MEIA MALHA KLEIN','90%PA 6.6 TEXT + 3%PA 6.6 LISO + 7%PUE','M01','PA662X80/68T','PA1X42/13L','PUE1X20',0.900000,0.030000,0.070000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(25,'2470BCB00','DELFOS','100%PA 6.6','M01','PA661X80/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(26,'2471BCB00','STRECH LIGHT','93%PES + 7%PUE','M06','PES1X75/72T','PUE1X20','',0.930000,0.070000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(27,'2473BCB81','EXTRIME TOUCH 40','85% PA 6 + 15%PUE','M06','PA1X80/68L','PUE1X40','',0.850000,0.150000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(28,'2474BCB00','UNDERWEAR','100%PA 6.6','M01','PA661X78/23T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(29,'2480BCB00','PUNHO','97% PA 3X78/23 TEXT 3% PUE 200','M01','PA3X78/23T','PUE1X20','',0.970000,0.030000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(30,'2492BCB00','FAVO','100%PA 6.6','M01','PA662X80/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(31,'2502BCB01','MULTI  ICE MESCLA','100%PA 6.6','M01','PA661X80/68M','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(32,'2508BCB01','EFECTOS','90%PA  EMANA L+ 10% PUE 20','M06','PA1X80/60L','PUE1X20','',0.900000,0.100000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(33,'2517BCB01','DELFOS MESCLA','100%PA 6.6','M01','PA661X80/68M','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(34,'2533BCB00','SOLUTIO','100%PA 6.6','M01','PA661X80/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(35,'2545BCB00','STRECH','100%PES','M10','PES1X75/36T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(36,'2547BCB00','SUPREMO','85%PES + 15%PUE','M03','PES1X150/144T','PUE1X70','',0.850000,0.150000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(37,'2547BCB01','SUPREMO LIGHT','90%PES + 10%PUE','M03','PES1X150/144T','PUE1X70','',0.900000,0.100000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(38,'2547BJB01','SUPREMO LIGHT PELETIZADO','90%PES + 10%PUE','M03','PES1X150/144T','PUE1X70','',0.900000,0.100000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(39,'2548BCB00','CRISTAL','92%PES TEXT + 10%PES LISO + 8%PUE','M01','PES1X150/144T','PES1X50/13L','PUE1X20',0.920000,0.100000,0.080000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(40,'2550BCB00','MARITIMO','95,5%PES TEXT + 4,5%PES LISO','M01','PES1X150/144T','PES1X50/13L','',0.955000,0.045000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(41,'2552BCB00','MOLETON POLY','92%PES + 8%PUE','M01','PES1X150/144T','PUE1X70','',0.920000,0.080000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(42,'2560BCB00','COOPER DRY LARGE','100%PA 6.6','M01','PA661X80/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(43,'2565BCB00','ANGRA','100%PA 6.6','M01','PA662X80/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(44,'2567BCB00','DELFOS DEFENSE','100%PA 6.6','M01','PA661X80/68B','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(45,'2571BCB00','SOLUTIO DEFENSE','100%PA 6.6','M01','PA661X80/68B','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(46,'2576BCB00','SKIN','100%PES','M08','PES1X50/72T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(47,'2584BCB01','SOLUTIO HEAVY','100%PA 6.6','M01','PA662X60/60T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(48,'2584BCB02','SOLUTIO HEAVY C/ LYCRA','97%PA 6.6 + 03%PUE','M01','PA662X60/60T','PUE1X20','',0.970000,0.030000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(49,'2598BDB00','MOVE','100%PES','M01','PES1X75/72T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(50,'2607BCB81','DRAPEADO TINTO','90%PA 6 + 10%PUE','M01','PA662X80/68T','PUE1X40','',0.900000,0.100000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(51,'2620BCB00','ICE ECO SOUL','100%PA 6.6','M01','PA661X80/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(52,'2622BCB00','SOLUTIO ECO SOUL','100%PA 6.6','M01','PA661X80/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(53,'2623BCB00','DELPHOS ECO SOUL','100%PA 6.6','M01','PA661X80/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(54,'2626BCB00','LUXOR','95%PA 6.6 + 5%PUE','M01','PA661X200/68T','PA1X42/13L','PUE1X20',0.820000,0.130000,0.050000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(55,'2630BCB01','FAVO LIGHT MESCLA','100% PA 6','M01','PA1X200/98M','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(56,'2631BCB01','MULTI ICE C/ LYCRA','96% PA 6.6 + 4%PUE','M01','PA661X80/68T','PUE1X20','',0.960000,0.040000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(57,'2634BCB00','MULTI  ICE MESCLA C/ LYCRA','95%PA 6.6 + 5%PUE','M01','PA661X80/68M','PUE1X20','',0.970000,0.030000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(58,'2642BCB00','MICRO ICE','100%PA 6','M01','PA1X70/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(59,'2644BCB00','MICRO SOLUTIO','100%PA 6','M01','PA1X70/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(60,'2645BCB00','MICRO COOPER','100%PA 6','M01','PA1X70/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(61,'2647BCB00','MICRO DELFOS','100%PA 6.6','M01','PA1X70/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(62,'2651CBB01','SPLASH MESCLA','93%PA 6.6 MESCLA + 07%PUE 20','M01','PA661X80/68M','PUE1X20','',0.930000,0.070000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(63,'2652BCB00','DELFOS PLUS','97%PA 6.6 + 3%PUE','M01','PA1X70/68T','PUE1X20','',0.970000,0.030000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(64,'2655BCB00','MOLETON MESCLA VANIZE','78%PA 6 MESCLA + 22% PA 6.6','M01','PA1X200/96M','PA662X80/68T','',0.780000,0.220000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(65,'2657BCB00','MOLETON MESCLA PLUS','73%PA 6 MESCLA + 21% PA 6.6 + 06%PUE 40','M01','PA1X200/96M','PA662X80/68T','PUE1X40',0.730000,0.210000,0.060000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(66,'2662BCB00','MICRO AIR SHOX','88%PA 6 + 12%PUE','M01','PA2X70/68T','PUE1X70','',0.880000,0.120000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(67,'2665BCB00','DELFOS 80 MESCLA BLACK','100%PA 6.6 (PA TEXT 80/68 MESCLA DARK)','M01','PA661X80/68MB','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(68,'2668BCB00','ANGRA MESCLA','100% PA 6 MESCLA','M01','PA1X200/96M','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(69,'2674BCB00','MICRO POWER 70','88%PA6 + 12%PUE','M01','PA1X200/68T','PUE1X70','',0.880000,0.120000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(70,'2679BCB00','BODRUM CREPE','50% PES + 50% PA 6','M01','PAPES1X110T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(71,'2680BCB00','BODRUM','50%PA 6.6 + 50%PES','M01','PAPES1X110T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(72,'2681BCB00','FLUID BODRUM','55%PA 6.6 + 45%PES','M01','PAPES1X110T','PA1X42/13L','',0.950000,0.050000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(73,'2682BCB00','DELFOS LIST MESCLA','70% PA 6.6 + 30%PA 6.6 MESCLA','M01','PA661X80/68T','PA661X80/68M','',0.700000,0.300000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(74,'2688BCB00','MICRO DRY ACTION','100%PA 6','M01','PA1X70/68T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(75,'3044BDD06','VIES','100%PES','M12','PES1X70/36L','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(76,'3140CGD00','VIES DE MONET','100% PES','M12','PES1X70/36L','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(77,'3220AAA00','TULESTAR','100%PES','M11','PES1X70/36B','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(78,'3244BCB00','ELASTIC TULE','100%PES','M09','PES1X70/36L','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(79,'3249BMB00','CREFLAN','100%PES','M12','PES1X70/36L','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(80,'3386BCB00','VERSATILE','100%PA 6.6','M12','PA662X78/48T','','',1.000000,0.000000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(81,'4118DDB00','CRETONI 70','70%CO + 30%PES','M13','CO16X1/OE','PES1X75/36T/URDUME','',0.700000,0.300000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(82,'4162AAA03','TELA PET','100%CO','M14','CO6X1/OE','CO12X1/OE','',0.500000,0.500000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(83,'4182CDBX0','TELA 8922','58%PES + 42%CO','M15','PES1X150/48/TXT','COPES30X1/VORT','',0.580000,0.420000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(84,'4118DDB01','CRETONI 90','70%CO + 30%PES','M16','CO16X1/OE','PES1X75/36T/URDUME','',0.700000,0.300000,0.000000,0.065000,'2017-11-27 16:56:00','2017-11-27 16:56:00');
/*!40000 ALTER TABLE `boms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `criterias`
--

DROP TABLE IF EXISTS `criterias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `criterias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `operational` decimal(16,2) NOT NULL,
  `financial` decimal(16,2) NOT NULL,
  `apportionment` decimal(16,2) NOT NULL,
  `profit` decimal(8,6) NOT NULL,
  `commission` decimal(8,6) NOT NULL,
  `rate` decimal(8,6) NOT NULL,
  `ipi` decimal(8,6) NOT NULL,
  `pis` decimal(8,6) NOT NULL,
  `cofins` decimal(8,6) NOT NULL,
  `csll` decimal(8,6) NOT NULL,
  `ir` decimal(8,6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `criterias`
--

LOCK TABLES `criterias` WRITE;
/*!40000 ALTER TABLE `criterias` DISABLE KEYS */;
INSERT INTO `criterias` VALUES (1,180000.00,120000.00,40000.00,0.100000,0.030000,0.027000,0.000000,0.016500,0.076000,0.000000,0.000000,'2017-11-27 16:55:59','2017-11-27 16:55:59');
/*!40000 ALTER TABLE `criterias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destinations`
--

DROP TABLE IF EXISTS `destinations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destinations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `destination` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icms` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `destinations_destination_unique` (`destination`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinations`
--

LOCK TABLES `destinations` WRITE;
/*!40000 ALTER TABLE `destinations` DISABLE KEYS */;
INSERT INTO `destinations` VALUES (1,'SP Industrialização',0.00,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(2,'SP Consumidor',0.18,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(3,'N/NE',0.07,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(4,'S/SE/CO',0.12,'2017-11-27 16:55:59','2017-11-27 16:55:59');
/*!40000 ALTER TABLE `destinations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dyeings`
--

DROP TABLE IF EXISTS `dyeings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dyeings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dyeings_class_unique` (`class`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dyeings`
--

LOCK TABLES `dyeings` WRITE;
/*!40000 ALTER TABLE `dyeings` DISABLE KEYS */;
INSERT INTO `dyeings` VALUES (1,'COLORIDO',7.99,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(2,'PURGADO',3.73,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(3,'BRANCO',5.90,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(4,'CRU',0.00,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(5,'ESPECIAL',10.16,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(6,'FIXADO+IMPERMEABILIZADO',6.89,'2017-12-18 14:25:47','2017-12-18 14:26:19'),(7,'PRETO+IMPERMEABILIZADO',14.49,'2017-12-18 14:26:10','2017-12-18 14:26:10');
/*!40000 ALTER TABLE `dyeings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `knittings`
--

DROP TABLE IF EXISTS `knittings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `knittings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cod` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `knittings_cod_unique` (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `knittings`
--

LOCK TABLES `knittings` WRITE;
/*!40000 ALTER TABLE `knittings` DISABLE KEYS */;
INSERT INTO `knittings` VALUES (1,'M01','',2.20,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(2,'M02','',3.50,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(3,'M03','',1.80,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(4,'M04','',3.50,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(5,'M05','',5.00,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(6,'M06','',3.90,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(7,'M07','',4.10,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(8,'M08','',3.20,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(9,'M09','',12.00,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(10,'M10','',1.60,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(11,'M11','',7.00,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(12,'M12','',3.76,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(13,'M13','',7.29,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(14,'M14','',4.12,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(15,'M15','',10.39,'2017-11-27 16:55:59','2017-11-27 16:55:59'),(16,'M16','',10.08,'2017-11-27 16:55:59','2017-11-27 16:55:59');
/*!40000 ALTER TABLE `knittings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (19,'2014_10_12_000000_create_users_table',1),(20,'2014_10_12_100000_create_password_resets_table',1),(21,'2017_11_08_195405_create_rawmaterials_table',1),(22,'2017_11_09_125623_create_knittings_table',1),(23,'2017_11_09_125839_create_boms_table',1),(24,'2017_11_09_125946_create_criterias_table',1),(25,'2017_11_09_133922_create_dyeings_table',1),(26,'2017_11_09_140012_create_destinations_table',1),(27,'2017_11_13_171220_create_packagings_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packagings`
--

DROP TABLE IF EXISTS `packagings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packagings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pack` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(8,2) NOT NULL,
  `quota` decimal(8,6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `packagings_pack_unique` (`pack`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packagings`
--

LOCK TABLES `packagings` WRITE;
/*!40000 ALTER TABLE `packagings` DISABLE KEYS */;
INSERT INTO `packagings` VALUES (1,'FARDO','Fardo de Pano + saco plástico + tubete + etiqueta + fita',11.50,0.066667,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(2,'CAIXA','Caixa de papelão + etiqueta + fita',14.35,0.050000,'2017-11-27 16:56:00','2017-11-27 16:56:00'),(3,'SACO_PLASTICO','Saco de Plastico transparente + tubete + etiqueta + fita',2.21,0.066667,'2017-11-27 16:56:00','2017-11-27 16:56:00');
/*!40000 ALTER TABLE `packagings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rawmaterials`
--

DROP TABLE IF EXISTS `rawmaterials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rawmaterials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reference` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(8,4) NOT NULL,
  `valueicms` decimal(8,4) NOT NULL,
  `provider_cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basecomponent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cables` int(10) unsigned NOT NULL,
  `dtex` int(10) unsigned NOT NULL,
  `filaments` int(10) unsigned NOT NULL,
  `finishing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rawmaterials_reference_unique` (`reference`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rawmaterials`
--

LOCK TABLES `rawmaterials` WRITE;
/*!40000 ALTER TABLE `rawmaterials` DISABLE KEYS */;
INSERT INTO `rawmaterials` VALUES (1,'PA1X200/68T',19.8743,22.9053,'','Poliamida','PA',1,200,68,'Texturizado','2017-11-27 16:55:59','2017-11-27 16:55:59'),(2,'PA1X200/96M',20.9179,24.1032,'','Poliamida','PA',1,200,96,'Mescla','2017-11-27 16:55:59','2017-11-27 16:55:59'),(3,'PA1X200/98M',18.8488,24.1032,'','Poliamida','PA',1,200,98,'Mescla','2017-11-27 16:55:59','2017-11-27 16:55:59'),(4,'PA1X42/13L',19.3025,22.1430,'','Poliamida','PA',1,42,13,'Liso','2017-11-27 16:55:59','2017-11-27 16:55:59'),(5,'PA1X60/60T',22.7900,26.2700,'140913','Poliamida','PA',1,60,60,'Texturizado','2017-11-27 16:55:59','2017-12-04 16:36:55'),(6,'PA1X70/68T',16.3350,17.1336,'','Poliamida','PA',1,70,68,'Texturizado','2017-11-27 16:55:59','2017-11-27 16:55:59'),(7,'PA1X80/60L',37.7248,43.4602,'','Poliamida','PA',1,80,60,'Liso','2017-11-27 16:55:59','2017-11-27 16:55:59'),(8,'PA1X80/68L',17.8052,20.5186,'','Poliamida','PA',1,80,68,'Liso','2017-11-27 16:55:59','2017-11-27 16:55:59'),(9,'PA2X70/68T',16.3350,17.1336,'','Poliamida','PA',2,70,68,'Texturizado','2017-11-27 16:55:59','2017-11-27 16:55:59'),(10,'PA3X78/23T',20.4551,23.5587,'','Poliamida','PA',3,78,23,'Texturizado','2017-11-27 16:55:59','2017-11-27 16:55:59'),(11,'PA661X200/68T',19.8743,22.9053,'','Poliamida 6.6','PA6.6',1,200,68,'Texturizado','2017-11-27 16:55:59','2017-11-27 16:55:59'),(12,'PA661X200/96T',19.8743,23.0868,'','Poliamida 6.6','PA6.6',1,200,96,'Texturizado','2017-11-27 16:55:59','2017-11-27 16:55:59'),(13,'PA661X40/13L',19.2481,22.1430,'','Poliamida 6.6','PA6.6',1,40,13,'Liso','2017-11-27 16:55:59','2017-11-27 16:55:59'),(14,'PA661X42/13T',22.3000,25.7000,'','Poliamida 6.6','PA6.6',1,42,13,'Texturizado','2017-11-27 16:55:59','2017-12-04 16:41:47'),(15,'PA661X60/60T',22.7900,26.2700,'','Poliamida 6.6','PA6.6',1,60,60,'Texturizado','2017-11-27 16:55:59','2017-12-04 16:42:48'),(16,'PA661X78/23T',16.8069,19.3661,'','Poliamida 6.6','PA6.6',1,78,23,'Texturizado','2017-11-27 16:55:59','2017-11-27 16:55:59'),(17,'PA661X80/68B',31.0800,35.8200,'','Poliamida 6.6','PA6.6',1,80,68,'Black','2017-11-27 16:55:59','2017-12-04 16:43:39'),(18,'PA661X80/68M',31.0800,35.8200,'','Poliamida 6.6','PA6.6',1,80,68,'Mescla','2017-11-27 16:55:59','2017-12-04 16:43:16'),(19,'PA661X80/68MB',31.0800,35.8200,'','Poliamida 6.6','PA6.6',1,80,68,'MesclaBlack','2017-11-27 16:55:59','2017-12-04 16:44:07'),(20,'PA661X80/68T',19.0600,21.9600,'','Poliamida 6.6','PA6.6',1,80,68,'Texturizado','2017-11-27 16:55:59','2017-12-04 16:45:02'),(21,'PA662X60/60T',21.7800,25.0833,'','Poliamida 6.6','PA6.6',2,60,60,'Texturizado','2017-11-27 16:55:59','2017-11-27 16:55:59'),(22,'PA662X78/48T',18.8800,21.7500,'','Poliamida 6.6','PA6.6',2,78,48,'Texturizado','2017-11-27 16:55:59','2017-12-04 16:44:34'),(23,'PA662X80/68T',19.1573,22.0795,'','Poliamida 6.6','PA6.6',2,80,68,'Texturizado','2017-11-27 16:55:59','2017-11-27 16:55:59'),(24,'PAPES1X110T',21.7709,25.0833,'','Poliamida+Poliester','PAPES',1,110,0,'Texturizado','2017-11-27 16:55:59','2017-11-27 16:55:59'),(25,'PES1X150/144T',6.0803,6.4251,'','Poliester','PES',1,150,144,'Liso','2017-11-27 16:55:59','2017-11-27 16:55:59'),(26,'PES1X50/13L',6.9878,7.3326,'','Poliester','PES',1,50,13,'Liso','2017-11-27 16:55:59','2017-11-27 16:55:59'),(27,'PES1X50/72T',9.0569,9.4743,'','Poliester','PES',1,50,72,'Texturizado','2017-11-27 16:55:59','2017-11-27 16:55:59'),(28,'PES1X70/36B',6.5340,6.8335,'','Poliester','PES',1,70,36,'Black','2017-11-27 16:55:59','2017-11-27 16:55:59'),(29,'PES1X70/36L',6.5340,6.8335,'','Poliester','PES',1,70,36,'Liso','2017-11-27 16:55:59','2017-11-27 16:55:59'),(30,'PES1X70/48',13.6125,13.6125,'MP não usado ???','Poliester','PES',1,70,48,'???','2017-11-27 16:55:59','2017-11-27 16:55:59'),(31,'PES1X75/36T',6.8500,7.1700,'','Poliester','PES',1,75,36,'Texturizado','2017-11-27 16:55:59','2017-12-04 16:40:17'),(32,'PES1X75/72T',6.8970,7.2509,'','Poliester','PES',1,75,72,'Texturizado','2017-11-27 16:55:59','2017-11-27 16:55:59'),(33,'PUE1X20',23.2411,26.7713,'','Elastano','PUE',1,20,0,'---','2017-11-27 16:55:59','2017-11-27 16:55:59'),(34,'PUE1X40',23.0959,26.7985,'','Elastano','PUE',1,40,0,'---','2017-11-27 16:55:59','2017-11-27 16:55:59'),(35,'PUE1X70',23.1776,26.6079,'','Elastano','PUE',1,70,0,'---','2017-11-27 16:55:59','2017-11-27 16:55:59'),(36,'CO12X1/OE',5.7173,6.4705,'','Algodão','CO',1,0,0,'OpenEnd','2017-11-27 16:55:59','2017-11-27 16:55:59'),(37,'CO16X1/OE',8.0300,9.2600,'','Algodão','CO',1,0,0,'OpenEnd','2017-11-27 16:55:59','2017-12-04 16:40:59'),(38,'CO6X1/OE',5.4450,6.1619,'','Algodão','CO',1,0,0,'OpenEnd','2017-11-27 16:55:59','2017-11-27 16:55:59'),(39,'COPES30X1/VORT',7.9316,9.6195,'','Algodão+Poliester','COPES',1,0,0,'PES/CO TRAMA','2017-11-27 16:55:59','2017-11-27 16:55:59'),(40,'PA662X80/60TE',34.8480,43.4693,'','Poliamida 6.6','PA6.6',2,80,60,'Texturizado Emana','2017-11-27 16:55:59','2017-11-27 16:55:59'),(41,'PES1X150/48T',6.6800,6.9900,'','Poliester','PES',1,150,48,'Texturizado','2017-11-27 16:55:59','2017-12-04 16:38:28'),(42,'PES1X75/36T/URDUME',7.1500,7.4800,'','Poliester','PES',1,75,36,'Texturizado URDUME','2017-11-27 16:55:59','2017-12-04 16:38:51');
/*!40000 ALTER TABLE `rawmaterials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','administrador','linux.rlm@gmail.com','$2y$10$Ty0ZmxTji9MMQYP5YHD/Ue68W6plA0/ZL0mpfpNEFhhsIXCPAROT2','arwHXfxQoRgSaTny8XnHrSx3H8GJ7Dtc2G14vSZgdCAqHPZInaRzfXWRwPda','2017-11-27 16:55:59','2017-11-27 16:55:59'),(2,'pinho','Luiz Pinho','luiz.pinho@terra.com.br','$2y$10$u5LIpMm.CGDi/tqvBUWq5OUxk8C2TtI9gJ/Q7Mi2xfcLF0YtuKhUe','ciAl1GH5QBn0f0VSPkB3zr6im49rtuvTABYARNtf69ijbJwRUFhltSzZHZRQ','2017-11-27 17:19:05','2017-11-27 17:19:05'),(3,'rodney','Rodney Cardinal','rodney@benebrokers.com.br','$2y$10$9TUq5JeFwf.AlxeiRNjZj.aTXR6AjpjAef61Bso4f2414uuOU2x12','5CEaDvXcxipAwFnPKLtDExxAy0vu5mEsTFjGzQjgygnMJwTD4ryOqZHK53Tw','2017-11-27 17:41:59','2017-11-27 17:41:59'),(4,'vanessa','Vanessa Cristine de Oliveira','vanessa@fimatec.com.br','$2y$10$nVeAY6j.53C.gEchV9i8zOdew18RrI/QGMeRVAcJ3hy7BpW49yv52','mWHFVDnA0JnpA71QoRxd2RbAg6oz7G11KC4hyTykwINsDI9XujOrW82xCBkK','2017-11-27 17:43:21','2017-11-27 17:43:21'),(5,'fernando','Fernando L. Kairalla','fernando@fimatec.com.br','$2y$10$b2Xp3K9.Vzk5fg.xeDJO8ur2k/bTFIyICpt0bhItckKh0CAUF7aYS','G7qHam0aGKnz2twZ3Y08j2XNy6sGZibi84Dj5Bo78TCFNKi8y6G6KO1FBM9P','2017-11-27 17:44:28','2017-11-27 17:44:28'),(6,'janaina','Janaina','janaina@fimatec.com.br','$2y$10$xvvB2zvy8b.8FuaCYSax.eU8JG3i9AgeiyJPByHym7ge58etQTiTa',NULL,'2017-12-18 14:42:24','2017-12-18 14:42:24');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-24 14:11:53
