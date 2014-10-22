CREATE DATABASE  IF NOT EXISTS `info_examen_lab` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `info_examen_lab`;
-- MySQL dump 10.13  Distrib 5.6.10, for Win32 (x86)
--
-- Host: localhost    Database: info_examen_lab
-- ------------------------------------------------------
-- Server version	5.6.10

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
-- Table structure for table `exa_examen`
--

DROP TABLE IF EXISTS `exa_examen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exa_examen` (
  `exa_id_examen` int(11) NOT NULL AUTO_INCREMENT,
  `exa_id_tipo_examen` int(11) NOT NULL,
  `exa_nombre_examen` varchar(80) NOT NULL,
  `exa_observacion` varchar(250) DEFAULT NULL,
  `exa_descrip_examen` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`exa_id_examen`),
  KEY `tipo_idx` (`exa_id_tipo_examen`),
  CONSTRAINT `tipo` FOREIGN KEY (`exa_id_tipo_examen`) REFERENCES `exa_tipo_examen` (`ete_id_tipo_examen`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exa_examen`
--

LOCK TABLES `exa_examen` WRITE;
/*!40000 ALTER TABLE `exa_examen` DISABLE KEYS */;
INSERT INTO `exa_examen` VALUES (1,1,'Glucosa','Ninguna',NULL),(2,1,'Glucosa Completa','Sin Observacion',NULL),(3,1,'Prueba','Ningua',NULL),(4,2,'Pruebas hematológicas','Las mediciones de la capacidad de transporte de oxígeno se cuantifican. Una sola capa de células de la sangre se unta en un portaobjetos de microscopio, manchada y visualmente examinada por un experto entrenado','Se realizan directamente en la sangre entera líquida. Se usa una máquina para contar y separar las células presentes diferentes. '),(5,2,'Hematológicas 2','Las anomalías se comunican al médico para una evaluación diagnóstica.',' Las células se examinan por el tamaño, forma y estado.'),(6,3,'La heparina','Las pruebas de coagulación también detectan trastornos de la coagulación, como la enfermedad de Von Willebrand, hemofilia u otras deficiencias de factores de la coagulación.','Se miden mediante el ensayo del tiempo que tarda la sangre en coagularse.'),(7,3,'Coumadin','Las pruebas de coagulación también detectan trastornos de la coagulación, como la enfermedad de Von Willebrand, hemofilia u otras deficiencias de factores de la coagulación.','Se miden mediante el ensayo del tiempo que tarda la sangre en coagularse.'),(8,3,'Anticoagulantes de sangre','Las pruebas de coagulación también detectan trastornos de la coagulación, como la enfermedad de Von Willebrand, hemofilia u otras deficiencias de factores de la coagulación.','Se realizan directamente en la sangre entera líquida. Se usa una máquina para contar y separar las células presentes diferentes. '),(9,1,'Fluidos de la sangre','Los niveles terapéuticos de drogas también pueden ser probados por un analizador de química. Los rangos de referencia a los médicos si un analito es normal o anormal.','Las células se separan de la muestra por la fuerza centrífuga y la porción de fluido superior se analizan por química, enzimática o mediciones colorimétricas.'),(10,1,'La orina ','Los niveles terapéuticos de drogas también pueden ser probados por un analizador de química. Los rangos de referencia a los médicos si un analito es normal o anormal.','Las células se separan de la muestra por la fuerza centrífuga y la porción de fluido superior se analizan por química, enzimática o mediciones colorimétricas.'),(11,1,'BUN(Nitrogeno Ureico)','1 dia laborable','Prueba correspondiente a la Quimica Sanguinea');
/*!40000 ALTER TABLE `exa_examen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exa_tipo_examen`
--

DROP TABLE IF EXISTS `exa_tipo_examen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exa_tipo_examen` (
  `ete_id_tipo_examen` int(11) NOT NULL AUTO_INCREMENT,
  `ete_nombre_examen` varchar(80) NOT NULL,
  PRIMARY KEY (`ete_id_tipo_examen`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exa_tipo_examen`
--

LOCK TABLES `exa_tipo_examen` WRITE;
/*!40000 ALTER TABLE `exa_tipo_examen` DISABLE KEYS */;
INSERT INTO `exa_tipo_examen` VALUES (1,'Quimica Sanguinea'),(2,'Hematológicas de sangre'),(3,'Coagulación'),(4,'Microbiología'),(5,'Análisis de orina'),(6,'Serológicas de laboratorio'),(7,'Citología, histología y anatomía patológica'),(8,'Inmunohematología y banco de sangre');
/*!40000 ALTER TABLE `exa_tipo_examen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exa_tubo`
--

DROP TABLE IF EXISTS `exa_tubo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exa_tubo` (
  `ext_id_tubo` int(11) NOT NULL AUTO_INCREMENT,
  `ext_nombre_color` varchar(50) NOT NULL,
  `ext_codigo_color` varchar(10) NOT NULL,
  PRIMARY KEY (`ext_id_tubo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exa_tubo`
--

LOCK TABLES `exa_tubo` WRITE;
/*!40000 ALTER TABLE `exa_tubo` DISABLE KEYS */;
INSERT INTO `exa_tubo` VALUES (1,'Tapón Rojo','#f00'),(2,'Tapón Azul','#00f'),(3,'Tapón Amarillo','#fff100'),(4,'Tapón negro','#000'),(5,'Tapón malva','#bc8cbf'),(6,'Tapón verde','#007236'),(7,'Tubo Rojo Especiales','#ee1d24');
/*!40000 ALTER TABLE `exa_tubo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exa_tubo_examen`
--

DROP TABLE IF EXISTS `exa_tubo_examen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exa_tubo_examen` (
  `ett_id` int(11) NOT NULL AUTO_INCREMENT,
  `ett_id_tubo` int(11) NOT NULL,
  `ett_id_examen` int(11) NOT NULL,
  PRIMARY KEY (`ett_id`),
  KEY `tubo_idx` (`ett_id_tubo`),
  KEY `examen_idx` (`ett_id_examen`),
  CONSTRAINT `examen` FOREIGN KEY (`ett_id_examen`) REFERENCES `exa_examen` (`exa_id_examen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tubo` FOREIGN KEY (`ett_id_tubo`) REFERENCES `exa_tubo` (`ext_id_tubo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exa_tubo_examen`
--

LOCK TABLES `exa_tubo_examen` WRITE;
/*!40000 ALTER TABLE `exa_tubo_examen` DISABLE KEYS */;
INSERT INTO `exa_tubo_examen` VALUES (1,1,1),(3,2,1),(4,1,5),(5,5,5),(6,7,11);
/*!40000 ALTER TABLE `exa_tubo_examen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exa_usuario`
--

DROP TABLE IF EXISTS `exa_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exa_usuario` (
  `exa_id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `exa_nombre_usuario` varchar(80) NOT NULL,
  `exa_login` varchar(20) NOT NULL,
  `exa_pass_usuario` varchar(20) NOT NULL,
  `exa_permiso_usuario` int(11) NOT NULL,
  PRIMARY KEY (`exa_id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exa_usuario`
--

LOCK TABLES `exa_usuario` WRITE;
/*!40000 ALTER TABLE `exa_usuario` DISABLE KEYS */;
INSERT INTO `exa_usuario` VALUES (1,'Administrador del Sistema','admin','admin',3),(2,'Gonzalo Molina','gmolina','gmolina',2);
/*!40000 ALTER TABLE `exa_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration_version`
--

DROP TABLE IF EXISTS `migration_version`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_version` (
  `version` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration_version`
--

LOCK TABLES `migration_version` WRITE;
/*!40000 ALTER TABLE `migration_version` DISABLE KEYS */;
INSERT INTO `migration_version` VALUES (9);
/*!40000 ALTER TABLE `migration_version` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'info_examen_lab'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-10 20:07:50
