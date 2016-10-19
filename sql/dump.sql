-- MySQL dump 10.13  Distrib 5.7.12, for osx10.9 (x86_64)
--
-- Host: 127.0.0.1    Database: conex
-- ------------------------------------------------------
-- Server version	5.7.16

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
-- Table structure for table `action`
--

DROP TABLE IF EXISTS `action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `action` (
  `id_action` int(11) NOT NULL AUTO_INCREMENT,
  `id_action_type` int(11) NOT NULL,
  `action` varchar(45) DEFAULT NULL,
  `status` tinyint(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_action`),
  KEY `fk_action_action_type1_idx` (`id_action_type`),
  CONSTRAINT `fk_action_action_type1` FOREIGN KEY (`id_action_type`) REFERENCES `action_type` (`id_action_type`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `action`
--

LOCK TABLES `action` WRITE;
/*!40000 ALTER TABLE `action` DISABLE KEYS */;
INSERT INTO `action` VALUES (1,1,'view',1,NULL),(2,1,'save',1,NULL),(3,1,'delete',1,NULL),(4,1,'edit',1,NULL),(5,1,'destroy',1,NULL),(6,1,'pusher',1,NULL),(7,1,'test',1,NULL),(8,1,'createProduct',1,NULL),(9,1,'createEvent',1,NULL);
/*!40000 ALTER TABLE `action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `action_type`
--

DROP TABLE IF EXISTS `action_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `action_type` (
  `id_action_type` int(11) NOT NULL AUTO_INCREMENT,
  `action_type` varchar(45) DEFAULT NULL,
  `status` tinyint(2) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_action_type`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `action_type`
--

LOCK TABLES `action_type` WRITE;
/*!40000 ALTER TABLE `action_type` DISABLE KEYS */;
INSERT INTO `action_type` VALUES (1,'create',1,NULL),(2,'read',1,NULL),(3,'update',1,NULL),(4,'delete',1,NULL);
/*!40000 ALTER TABLE `action_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `advertisement`
--

DROP TABLE IF EXISTS `advertisement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `advertisement` (
  `id_advertisement` int(11) NOT NULL AUTO_INCREMENT,
  `id_advertisement_characteristics` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_advertisement`),
  KEY `fk_advertisement_users1_idx` (`id_users`),
  KEY `fk_advertisement_advertisement_characteristics1_idx` (`id_advertisement_characteristics`),
  CONSTRAINT `fk_advertisement_advertisement_characteristics1` FOREIGN KEY (`id_advertisement_characteristics`) REFERENCES `advertisement_characteristics` (`id_advertisement_characteristics`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_advertisement_users1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `advertisement`
--

LOCK TABLES `advertisement` WRITE;
/*!40000 ALTER TABLE `advertisement` DISABLE KEYS */;
/*!40000 ALTER TABLE `advertisement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `advertisement_characteristics`
--

DROP TABLE IF EXISTS `advertisement_characteristics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `advertisement_characteristics` (
  `id_advertisement_characteristics` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `description` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_advertisement_characteristics`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `advertisement_characteristics`
--

LOCK TABLES `advertisement_characteristics` WRITE;
/*!40000 ALTER TABLE `advertisement_characteristics` DISABLE KEYS */;
/*!40000 ALTER TABLE `advertisement_characteristics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `id_company` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `id_legal_constitution` int(11) NOT NULL,
  `id_size_company` int(11) NOT NULL,
  `id_company_assets` int(11) NOT NULL,
  `id_employee_number` int(11) NOT NULL,
  `id_company_sector` int(11) NOT NULL,
  `id_coverage` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `slogan` varchar(45) DEFAULT NULL,
  `logo` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `ceo` varchar(45) DEFAULT NULL,
  `webpage` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_company`),
  KEY `fk_company_legal_constitution1_idx` (`id_legal_constitution`),
  KEY `fk_company_size_company1_idx` (`id_size_company`),
  KEY `fk_company_company_assets1_idx` (`id_company_assets`),
  KEY `fk_company_employee_number1_idx` (`id_employee_number`),
  KEY `fk_company_company_sector1_idx` (`id_company_sector`),
  KEY `fk_company_coverage1_idx` (`id_coverage`),
  KEY `fk_company_users1_idx` (`id_users`),
  CONSTRAINT `fk_company_company_assets1` FOREIGN KEY (`id_company_assets`) REFERENCES `company_assets` (`id_company_assets`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_company_company_sector1` FOREIGN KEY (`id_company_sector`) REFERENCES `company_sector` (`id_company_sector`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_company_coverage1` FOREIGN KEY (`id_coverage`) REFERENCES `coverage` (`id_coverage`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_company_employee_number1` FOREIGN KEY (`id_employee_number`) REFERENCES `employee_number` (`id_employee_number`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_company_legal_constitution1` FOREIGN KEY (`id_legal_constitution`) REFERENCES `legal_constitution` (`id_legal_constitution`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_company_size_company1` FOREIGN KEY (`id_size_company`) REFERENCES `size_company` (`id_size_company`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_company_users1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_assets`
--

DROP TABLE IF EXISTS `company_assets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_assets` (
  `id_company_assets` int(11) NOT NULL AUTO_INCREMENT,
  `company_assets` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_company_assets`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_assets`
--

LOCK TABLES `company_assets` WRITE;
/*!40000 ALTER TABLE `company_assets` DISABLE KEYS */;
/*!40000 ALTER TABLE `company_assets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_sector`
--

DROP TABLE IF EXISTS `company_sector`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_sector` (
  `id_company_sector` int(11) NOT NULL AUTO_INCREMENT,
  `company_sector` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_company_sector`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_sector`
--

LOCK TABLES `company_sector` WRITE;
/*!40000 ALTER TABLE `company_sector` DISABLE KEYS */;
/*!40000 ALTER TABLE `company_sector` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `controller`
--

DROP TABLE IF EXISTS `controller`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `controller` (
  `id_controller` int(11) NOT NULL AUTO_INCREMENT,
  `controller` varchar(45) DEFAULT NULL,
  `label` varchar(45) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_controller`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controller`
--

LOCK TABLES `controller` WRITE;
/*!40000 ALTER TABLE `controller` DISABLE KEYS */;
INSERT INTO `controller` VALUES (1,'index',NULL,1,NULL),(2,'deals',NULL,1,NULL),(3,'profile',NULL,1,NULL),(4,'reports',NULL,1,NULL),(5,'services',NULL,1,NULL);
/*!40000 ALTER TABLE `controller` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coverage`
--

DROP TABLE IF EXISTS `coverage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coverage` (
  `id_coverage` int(11) NOT NULL AUTO_INCREMENT,
  `coverage` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_coverage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coverage`
--

LOCK TABLES `coverage` WRITE;
/*!40000 ALTER TABLE `coverage` DISABLE KEYS */;
/*!40000 ALTER TABLE `coverage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_number`
--

DROP TABLE IF EXISTS `employee_number`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee_number` (
  `id_employee_number` int(11) NOT NULL AUTO_INCREMENT,
  `employee_number` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_employee_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_number`
--

LOCK TABLES `employee_number` WRITE;
/*!40000 ALTER TABLE `employee_number` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee_number` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_gallery`
--

DROP TABLE IF EXISTS `event_gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_gallery` (
  `id_events_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `id_events` int(11) NOT NULL,
  `image` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_events_gallery`),
  KEY `fk_table1_events1_idx` (`id_events`),
  CONSTRAINT `fk_table1_events1` FOREIGN KEY (`id_events`) REFERENCES `events` (`id_events`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_gallery`
--

LOCK TABLES `event_gallery` WRITE;
/*!40000 ALTER TABLE `event_gallery` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_guest`
--

DROP TABLE IF EXISTS `event_guest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_guest` (
  `id_event_guest` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `details` text,
  `speaker_time` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_event_guest`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_guest`
--

LOCK TABLES `event_guest` WRITE;
/*!40000 ALTER TABLE `event_guest` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_guest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_topic`
--

DROP TABLE IF EXISTS `event_topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_topic` (
  `id_event_topic` int(11) NOT NULL AUTO_INCREMENT,
  `id_event_guest` int(11) NOT NULL,
  `id_events` int(11) NOT NULL,
  `event_topic` text,
  `date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_event_topic`),
  KEY `fk_event_topic_event_guest1_idx` (`id_event_guest`),
  KEY `fk_event_topic_events1_idx` (`id_events`),
  CONSTRAINT `fk_event_topic_event_guest1` FOREIGN KEY (`id_event_guest`) REFERENCES `event_guest` (`id_event_guest`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_event_topic_events1` FOREIGN KEY (`id_events`) REFERENCES `events` (`id_events`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_topic`
--

LOCK TABLES `event_topic` WRITE;
/*!40000 ALTER TABLE `event_topic` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_type`
--

DROP TABLE IF EXISTS `event_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_type` (
  `id_event_type` int(11) NOT NULL AUTO_INCREMENT,
  `event_type` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_event_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_type`
--

LOCK TABLES `event_type` WRITE;
/*!40000 ALTER TABLE `event_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id_events` int(11) NOT NULL,
  `id_event_type` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `details` varchar(45) DEFAULT NULL,
  `slogan` varchar(45) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `finish_date` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_events`),
  KEY `fk_events_event_type1_idx` (`id_event_type`),
  KEY `fk_events_users1_idx` (`id_users`)
) ENGINE=MEMORY DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `legal_constitution`
--

DROP TABLE IF EXISTS `legal_constitution`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `legal_constitution` (
  `id_legal_constitution` int(11) NOT NULL AUTO_INCREMENT,
  `legal_constitution` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_legal_constitution`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `legal_constitution`
--

LOCK TABLES `legal_constitution` WRITE;
/*!40000 ALTER TABLE `legal_constitution` DISABLE KEYS */;
/*!40000 ALTER TABLE `legal_constitution` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `id_type_menu` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `label` varchar(45) DEFAULT NULL,
  `default` varchar(45) DEFAULT NULL,
  `logo` text,
  `status` tinyint(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_menu`),
  KEY `fk_menu_item_role1_idx` (`id_role`),
  KEY `fk_menu_type_menu1_idx` (`id_type_menu`),
  CONSTRAINT `fk_menu_item_role1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_menu_type_menu1` FOREIGN KEY (`id_type_menu`) REFERENCES `type_menu` (`id_type_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,1,1,'index',NULL,'index',NULL,1,NULL),(2,1,1,'deals',NULL,'index',NULL,1,NULL),(3,1,1,'services',NULL,'index',NULL,1,NULL),(7,1,1,'profile','Mi perfil','index',NULL,1,NULL),(8,1,1,'company','Empresarial','index',NULL,1,NULL),(9,1,1,'reports','Reportes','index',NULL,1,NULL),(10,1,2,'roles','Roles','index',NULL,1,NULL),(15,1,1,'services','Crear evento','index','img/calendar.png',1,NULL),(16,1,1,'services','Crear producto','index','img/barcode.png',1,NULL),(17,1,1,'services','Crear anuncio','index','img/cart.png',1,NULL),(18,1,1,'services','Crear servicio','index','img/truck.png',1,NULL),(19,1,1,'index','Cerrar  sesión','destroy',NULL,1,NULL),(20,1,2,'menu','Menus','index',NULL,1,NULL),(21,1,2,'index','Cerrar sesión','destroy',NULL,1,NULL),(22,2,2,'menuitem','Menú Item','index','',1,NULL),(23,1,2,'typemenu','Type Menu','index','',1,NULL),(24,1,2,'user','User Administration','index','',1,NULL);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_item`
--

DROP TABLE IF EXISTS `menu_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_item` (
  `id_menu_item` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `menu_item` varchar(45) DEFAULT NULL,
  `label` varchar(45) DEFAULT NULL,
  `logo` text,
  `status` tinyint(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_menu_item`),
  KEY `fk_menu_item_menu1_idx` (`id_menu`),
  CONSTRAINT `fk_menu_item_menu1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_item`
--

LOCK TABLES `menu_item` WRITE;
/*!40000 ALTER TABLE `menu_item` DISABLE KEYS */;
INSERT INTO `menu_item` VALUES (1,1,'index',NULL,NULL,1,NULL),(2,2,'index',NULL,NULL,1,NULL),(3,2,'pusher',NULL,NULL,1,NULL),(4,2,'test',NULL,NULL,1,NULL),(5,3,'index',NULL,NULL,1,NULL),(6,3,'createProduct',NULL,NULL,1,NULL),(7,3,'createEvent',NULL,NULL,1,NULL),(8,3,'createAdvertisement',NULL,NULL,1,NULL),(9,3,'createService',NULL,NULL,1,NULL),(10,1,'destroy',NULL,NULL,1,NULL),(11,7,'index',NULL,NULL,1,NULL),(12,7,'createMenu',NULL,NULL,1,NULL),(13,7,'createMenuItem',NULL,NULL,1,NULL),(14,10,'index',NULL,NULL,1,NULL),(15,10,'edit',NULL,NULL,0,NULL),(16,10,'delete',NULL,NULL,1,NULL),(17,10,'new',NULL,NULL,1,NULL),(18,21,'destroy',NULL,NULL,1,NULL),(19,20,'items',NULL,NULL,1,NULL),(20,20,'new',NULL,NULL,1,NULL),(21,20,'edit',NULL,NULL,1,NULL),(22,20,'delete',NULL,NULL,1,NULL),(23,20,'index',NULL,NULL,1,NULL),(24,22,'index',NULL,NULL,1,NULL),(25,22,'available',NULL,NULL,1,NULL),(26,22,'new','jajaja','jojojojo',1,NULL),(28,22,'edit','Edición','no',1,NULL),(30,23,'index','search','',1,NULL),(31,23,'edit','Update','',1,NULL),(32,23,'delete','Delete','',1,NULL),(33,23,'new','new','',1,NULL),(34,24,'index','Search','',1,NULL),(35,24,'edit','Update','',1,NULL),(36,24,'delete','Delete','',1,NULL),(37,24,'new','New user','',1,NULL);
/*!40000 ALTER TABLE `menu_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id_permissions` int(11) NOT NULL AUTO_INCREMENT,
  `id_action_type` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `permissions` varchar(45) DEFAULT NULL,
  `status` tinyint(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_permissions`),
  KEY `fk_permissions_menu1_idx` (`id_menu`),
  KEY `fk_permissions_action_type1_idx` (`id_action_type`),
  CONSTRAINT `fk_permissions_action_type1` FOREIGN KEY (`id_action_type`) REFERENCES `action_type` (`id_action_type`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_permissions_menu1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_capacity`
--

DROP TABLE IF EXISTS `product_capacity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_capacity` (
  `id_product_capacity` int(11) NOT NULL AUTO_INCREMENT,
  `product_capacity` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_product_capacity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_capacity`
--

LOCK TABLES `product_capacity` WRITE;
/*!40000 ALTER TABLE `product_capacity` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_capacity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_type`
--

DROP TABLE IF EXISTS `product_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_type` (
  `id_product_type` int(11) NOT NULL AUTO_INCREMENT,
  `product_type` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_product_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_type`
--

LOCK TABLES `product_type` WRITE;
/*!40000 ALTER TABLE `product_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id_products` int(11) NOT NULL AUTO_INCREMENT,
  `id_product_type` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_product_capacity` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `slogan` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_products`),
  KEY `fk_products_product_type1_idx` (`id_product_type`),
  KEY `fk_products_users1_idx` (`id_users`),
  KEY `fk_products_product_capacity1_idx` (`id_product_capacity`),
  CONSTRAINT `fk_products_product_capacity1` FOREIGN KEY (`id_product_capacity`) REFERENCES `product_capacity` (`id_product_capacity`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_product_type1` FOREIGN KEY (`id_product_type`) REFERENCES `product_type` (`id_product_type`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_users1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_gallery`
--

DROP TABLE IF EXISTS `products_gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_gallery` (
  `id_products_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `products_id_products` int(11) NOT NULL,
  `image` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_products_gallery`),
  KEY `fk_products_gallery_products1_idx` (`products_id_products`),
  CONSTRAINT `fk_products_gallery_products1` FOREIGN KEY (`products_id_products`) REFERENCES `products` (`id_products`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_gallery`
--

LOCK TABLES `products_gallery` WRITE;
/*!40000 ALTER TABLE `products_gallery` DISABLE KEYS */;
/*!40000 ALTER TABLE `products_gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `profile` varchar(45) DEFAULT NULL,
  `default_redirect` text NOT NULL,
  `status` tinyint(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'principal','deals/index',1,'2016-10-17 04:25:18'),(2,'admin','roles/index',1,NULL);
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `id_service` int(11) NOT NULL AUTO_INCREMENT,
  `id_service_type` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` text,
  `info_json` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_service`),
  KEY `fk_service_service_type_idx` (`id_service_type`),
  KEY `fk_service_users1_idx` (`id_users`),
  CONSTRAINT `fk_service_service_type` FOREIGN KEY (`id_service_type`) REFERENCES `service_type` (`id_service_type`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_service_users1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_gallery`
--

DROP TABLE IF EXISTS `service_gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_gallery` (
  `id_service_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `image` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_service_gallery`),
  KEY `fk_service_gallery_service1_idx` (`id_service`),
  CONSTRAINT `fk_service_gallery_service1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_gallery`
--

LOCK TABLES `service_gallery` WRITE;
/*!40000 ALTER TABLE `service_gallery` DISABLE KEYS */;
/*!40000 ALTER TABLE `service_gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_type`
--

DROP TABLE IF EXISTS `service_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_type` (
  `id_service_type` int(11) NOT NULL AUTO_INCREMENT,
  `service_type` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_service_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_type`
--

LOCK TABLES `service_type` WRITE;
/*!40000 ALTER TABLE `service_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `service_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `size_company`
--

DROP TABLE IF EXISTS `size_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `size_company` (
  `id_size_company` int(11) NOT NULL AUTO_INCREMENT,
  `size_company` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) NOT NULL,
  PRIMARY KEY (`id_size_company`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `size_company`
--

LOCK TABLES `size_company` WRITE;
/*!40000 ALTER TABLE `size_company` DISABLE KEYS */;
/*!40000 ALTER TABLE `size_company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_menu`
--

DROP TABLE IF EXISTS `type_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type_menu` (
  `id_type_menu` int(11) NOT NULL AUTO_INCREMENT,
  `type_menu` varchar(45) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_type_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_menu`
--

LOCK TABLES `type_menu` WRITE;
/*!40000 ALTER TABLE `type_menu` DISABLE KEYS */;
INSERT INTO `type_menu` VALUES (1,'principal_access',1,NULL),(2,'config',1,NULL);
/*!40000 ALTER TABLE `type_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_email`
--

DROP TABLE IF EXISTS `user_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_email` (
  `id_user_email` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `domain` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user_email`),
  KEY `fk_user_email_users1_idx` (`id_users`),
  CONSTRAINT `fk_user_email_users1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_email`
--

LOCK TABLES `user_email` WRITE;
/*!40000 ALTER TABLE `user_email` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `id_role` int(11) NOT NULL,
  `user` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `identify` varchar(45) DEFAULT NULL,
  `mobile_phone` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_users`),
  KEY `fk_users_role1_idx` (`id_role`),
  CONSTRAINT `fk_users_role1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (6,1,'jmolinac5116','$2y$10$yww3d/rWbFlI4PAvdL71G.41KAtjNgNomLhDbBP1NScRfEWE7sjV.','JULIAN ARTURO MOLINA CASTIBLANCO','1015435116','6883615-',NULL,NULL,'BOGOTÁ D.C.','1992-08-11',1,'2016-10-18 02:42:39'),(7,2,'admin','$2y$10$XAWLMCTfCx1lIAMVuQSHX.imaEEK/QoL.II3kQzzIggSMk/TT1Z.W','ADMINISTRATOR','','','','','BOGOTÁ D.C','1992-08-11',1,'2016-10-18 04:48:32');
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

-- Dump completed on 2016-10-18 20:29:35
