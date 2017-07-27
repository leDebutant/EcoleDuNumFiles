-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ikea
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.24-MariaDB

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
-- Table structure for table `commercial`
--

DROP TABLE IF EXISTS `commercial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commercial` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `promotion_id` int(255) DEFAULT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `promotion_id` (`promotion_id`),
  CONSTRAINT `commercial_ibfk_1` FOREIGN KEY (`promotion_id`) REFERENCES `promotion` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commercial`
--

LOCK TABLES `commercial` WRITE;
/*!40000 ALTER TABLE `commercial` DISABLE KEYS */;
INSERT INTO `commercial` VALUES (1,'JEFFREY','69316045',2);
/*!40000 ALTER TABLE `commercial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produit` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `description` text,
  `prix` int(255) DEFAULT NULL,
  `couleur` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produit`
--

LOCK TABLES `produit` WRITE;
/*!40000 ALTER TABLE `produit` DISABLE KEYS */;
INSERT INTO `produit` VALUES (1,'KIVIK','Pelotonnez-vous dans le canapé KIVIK en mousse à mémoire de forme, matériau qui s’adapte aux contours du corps. Pour se détendre, se reposer ou passer de bons moments entre amis. Pas de souci si vous renversez quelque chose : la housse est lavable.',869,'noir'),(2,'KLIPPAN','Le revêtement est facile à nettoyer à l\'aide d\'une éponge humide ou imprégnée de détergent doux.',349,'orange'),(3,'TIMSFORS','Zones de contact couvertes de cuir fleur souple teinté dans la masse de 1,2 mm d\'épaisseur très moelleux et doux au toucher.',999,'noir'),(4,'Nouveau nom Meuble','Superchaise au PAM',50,'noir'),(5,'Chaise Ikki','Superchaise au PAM',50,'noir'),(6,'Chaise Ikki','Superchaise au PAM',50,'noir'),(7,'Chaise Ikki','Superchaise au PAM',50,'noir'),(8,'Chaise Ikki','Superchaise au PAM',50,'noir');
/*!40000 ALTER TABLE `produit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promotion` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `pourcentage` int(255) DEFAULT NULL,
  `produit_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`produit_id`),
  CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotion`
--

LOCK TABLES `promotion` WRITE;
/*!40000 ALTER TABLE `promotion` DISABLE KEYS */;
INSERT INTO `promotion` VALUES (1,'solde été',25,1),(2,'solde hiver',30,1),(3,'solde printemps',10,2);
/*!40000 ALTER TABLE `promotion` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-26 15:58:48
