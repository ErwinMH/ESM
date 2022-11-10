-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: mfct_bd
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `datos_form1`
--

DROP TABLE IF EXISTS `datos_form1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datos_form1` (
  `ano_graduacion` year NOT NULL,
  `institucion_perteneciente` varchar(45) DEFAULT NULL,
  `curso` varchar(45) DEFAULT NULL,
  `matricula` varchar(45) DEFAULT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `carrera_tecnica` varchar(45) DEFAULT NULL,
  `tecnico_basico` varchar(45) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `seccion` char(1) DEFAULT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `pais_natalidad` varchar(45) DEFAULT NULL,
  `telefono_res` varchar(45) DEFAULT NULL,
  `telefono_mov` varchar(45) DEFAULT NULL,
  `licencia_conducir` varchar(45) DEFAULT NULL,
  `vehiculo_propio` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datos_form1`
--

LOCK TABLES `datos_form1` WRITE;
/*!40000 ALTER TABLE `datos_form1` DISABLE KEYS */;
/*!40000 ALTER TABLE `datos_form1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datos_form2`
--

DROP TABLE IF EXISTS `datos_form2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datos_form2` (
  `nombre_empresa` varchar(45) DEFAULT NULL,
  `RNC` varchar(45) DEFAULT NULL,
  `identidad_empresa` varchar(45) DEFAULT NULL,
  `departamento_formacion` varchar(45) DEFAULT NULL,
  `alcance_empresa` varchar(45) DEFAULT NULL,
  `actividad_econonomica` mediumtext,
  `industria` varchar(45) DEFAULT NULL,
  `tamaño_empresa` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `sector` varchar(45) DEFAULT NULL,
  `seccion` varchar(45) DEFAULT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `pais_operacion` varchar(45) DEFAULT NULL,
  `telefono_pri` varchar(45) DEFAULT NULL,
  `telefono_di` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL,
  `contacto_empresa` varchar(45) DEFAULT NULL,
  `tel_ext` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datos_form2`
--

LOCK TABLES `datos_form2` WRITE;
/*!40000 ALTER TABLE `datos_form2` DISABLE KEYS */;
/*!40000 ALTER TABLE `datos_form2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datos_form3`
--

DROP TABLE IF EXISTS `datos_form3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datos_form3` (
  `nombre_empresa` varchar(45) DEFAULT NULL,
  `nombre_puesto` varchar(45) DEFAULT NULL,
  `perfil_puesto` varchar(45) DEFAULT NULL,
  `sueldo` varchar(45) DEFAULT NULL,
  `ubicacion` varchar(45) DEFAULT NULL,
  `tipo_contrato` varchar(45) DEFAULT NULL,
  `horario` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `persona_contacto` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datos_form3`
--

LOCK TABLES `datos_form3` WRITE;
/*!40000 ALTER TABLE `datos_form3` DISABLE KEYS */;
/*!40000 ALTER TABLE `datos_form3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'mfct_bd'
--

--
-- Dumping routines for database 'mfct_bd'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-10  6:19:39
