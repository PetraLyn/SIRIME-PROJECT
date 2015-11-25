-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: siri_me
-- ------------------------------------------------------
-- Server version	5.5.44-0ubuntu0.14.04.1

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
-- Table structure for table `Cartitem`
--

DROP TABLE IF EXISTS `Cartitem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cartitem` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cartitem`
--

LOCK TABLES `Cartitem` WRITE;
/*!40000 ALTER TABLE `Cartitem` DISABLE KEYS */;
/*!40000 ALTER TABLE `Cartitem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `email` varchar(320) NOT NULL,
  `item_name` text NOT NULL,
  `category` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (1,'nyamburadavids@gmail.com','lifecell','skin_tightener','2015-09-16 14:24:39','0000-00-00 00:00:00'),(2,'wambuimwangis@gmail.com','megablast','skin_lightener','2015-09-16 14:24:39','0000-00-00 00:00:00'),(3,'katealgos@gmail.com','carolyte','skin_lightener','2015-09-16 14:25:23','0000-00-00 00:00:00'),(4,'sammargy@gmail.com','marykay','slimming_product','2015-09-16 14:25:23','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `skin_lighteners` text NOT NULL,
  `skin_tighteners` text NOT NULL,
  `bleaching_products` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'carolyte','lifecell','shape up','2015-09-16 14:24:39','0000-00-00 00:00:00'),(2,'gigi','benars','Tea tort','2015-09-16 14:24:39','0000-00-00 00:00:00'),(3,'face and body','wheat night cream','slimfy','2015-09-16 14:25:23','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `category` text NOT NULL,
  `descrition` text NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'SKIN GLOW','Bleaching cream','makes one to have a light complexion',0,150,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'SUTLA BLEACH','Bleaching cream','makes one to have a light complexion',0,350,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'JOLEN BLEACH','Bleaching cream','makes one to have a light complexion',0,300,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'TONY MOLY CREAM','Bleaching cream','makes one to have a light complexion',0,250,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'CLINICIANS CREAM','Bleaching cream','makes one to have a light complexion',0,450,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,'DAGGETT CREAM','Bleaching cream','makes one to have a light complexion',0,200,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,'SHAPE CREAM','Slimming Products','Helps in loosing excess fat',0,250,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,'EVOTEA','Slimming Products','Helps in loosing excess fat',0,250,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,'GELCREAM','Slimming Products','Helps in loosing excess fat',0,250,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,'BENARS','Skin tighteners','Helps in making the skin look more younger',0,250,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(11,'CELLEX','Skin tighteners','Helps in making the skin look more younger',0,250,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(12,'CERVIL','Skin tighteners','Helps in making the skin look more younger',0,250,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `location` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(320) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Lavine','Masistsa','Rongai','777','masistsalineav@gmail.com','2547123456789','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Janet','Shikami','Lavington','767','shikamyjanet@gmail.com','2547900348954','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'Lucy','Wambui','Runda','345','bobolucy@gmail.com','2547003456789','0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'Maria','Ken','Karen','504','maryqeen@gmail.com','2547345634789','0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'Ken','Maria','South C','100','kenmary@gmail.com','2547312456789','0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,'Beatrice','Njeri','Ngong road','34','beat568@gmail.com','2547123456000','0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,'Vigtalyn','Nyamai','Hurligham','27','vignyamai@gmail.com','2547123490789','0000-00-00 00:00:00','0000-00-00 00:00:00');
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

-- Dump completed on 2015-11-25 15:38:23
