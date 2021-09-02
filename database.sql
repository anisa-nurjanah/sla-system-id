-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: sli_system
-- ------------------------------------------------------
-- Server version	8.0.17

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
-- Temporary view structure for view `document`
--

DROP TABLE IF EXISTS `document`;
/*!50001 DROP VIEW IF EXISTS `document`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8 */;
/*!50001 CREATE VIEW `document` AS SELECT 
 1 AS `id_history`,
 1 AS `id_penerus`,
 1 AS `loop`,
 1 AS `remaks`,
 1 AS `date_created`,
 1 AS `date_update`,
 1 AS `id_document`,
 1 AS `no_document`,
 1 AS `debitur`,
 1 AS `file_nk3`,
 1 AS `file_2`,
 1 AS `no_skk`,
 1 AS `status`,
 1 AS `id_pengguna`,
 1 AS `nama_pengguna`,
 1 AS `posisi_pengguna`,
 1 AS `nama_penerus`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `tb_document`
--

DROP TABLE IF EXISTS `tb_document`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `tb_document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengguna` varchar(255) DEFAULT NULL,
  `no_document` varchar(255) DEFAULT NULL,
  `debitur` varchar(45) DEFAULT NULL,
  `file_nk3` text,
  `file_2` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `date_document` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `no_skk` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_document`
--

LOCK TABLES `tb_document` WRITE;
/*!40000 ALTER TABLE `tb_document` DISABLE KEYS */;
INSERT INTO `tb_document` VALUES (1,'1002','DK-001','Handri','IND-Job_Application_Form_Hashmicro_update-dikonversi1.docx','SLA1.xlsx','8',NULL,'2021-08-28 09:26:40','2021-09-02 11:06:23','test');
/*!40000 ALTER TABLE `tb_document` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_document_analyst`
--

DROP TABLE IF EXISTS `tb_document_analyst`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `tb_document_analyst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_document` int(11) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `nama_debitur` varchar(45) DEFAULT NULL,
  `nama_group` varchar(45) DEFAULT NULL,
  `fasilitas1` varchar(45) DEFAULT NULL,
  `maximum1` varchar(45) DEFAULT NULL,
  `fasilitas2` varchar(45) DEFAULT NULL,
  `maximum2` varchar(45) DEFAULT NULL,
  `fasilitas3` varchar(45) DEFAULT NULL,
  `maximum3` varchar(45) DEFAULT NULL,
  `fasilitas4` varchar(45) DEFAULT NULL,
  `maximum4` varchar(45) DEFAULT NULL,
  `fasilitas5` varchar(45) DEFAULT NULL,
  `maximum5` varchar(45) DEFAULT NULL,
  `nk3_check` varchar(45) DEFAULT NULL,
  `data_debitur_check` varchar(45) DEFAULT NULL,
  `pak_check` varchar(45) DEFAULT NULL,
  `fia_check` varchar(45) DEFAULT NULL,
  `ipk_check` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_document_analyst`
--

LOCK TABLES `tb_document_analyst` WRITE;
/*!40000 ALTER TABLE `tb_document_analyst` DISABLE KEYS */;
INSERT INTO `tb_document_analyst` VALUES (1,1,1007,'revisi','Nama Group revisi','Fasilitas 1 revisi','maximum 1','Fasilitas 2','maximum 2','Fasilitas 3','maximum 3','Fasilitas 4','maximum 4','Fasilitas 5','maximum 5','on','on','on',NULL,NULL,'2021-09-02 11:06:23','2021-09-02 11:06:23');
/*!40000 ALTER TABLE `tb_document_analyst` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_history_document`
--

DROP TABLE IF EXISTS `tb_history_document`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `tb_history_document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_document` varchar(45) DEFAULT NULL,
  `id_pengguna` varchar(255) DEFAULT NULL,
  `id_penerus` varchar(255) DEFAULT NULL,
  `remaks` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `loop` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_history_document`
--

LOCK TABLES `tb_history_document` WRITE;
/*!40000 ALTER TABLE `tb_history_document` DISABLE KEYS */;
INSERT INTO `tb_history_document` VALUES (1,'1','1002','1003','Upload File NK3','2021-08-28 09:26:40','2021-09-02 11:06:23','2'),(2,'1','1003','1004','test dari seketaris','2021-08-28 09:28:45','2021-08-28 09:28:45',NULL),(3,'1','1004','1005','dari gm','2021-08-28 10:49:45','2021-08-28 10:49:45',NULL),(4,'1','1005','1006','dari pemimpin','2021-08-28 10:52:40','2021-08-28 10:52:40',NULL),(5,'1','1006','1007','dari pengelola','2021-08-28 10:55:54','2021-08-28 10:55:54',NULL),(7,'1','1007','1006','Catatan','2021-08-31 11:42:38','2021-08-31 11:42:38',NULL),(10,'1','1006','1005',NULL,'2021-08-31 13:01:23','2021-08-31 13:01:23',NULL),(11,'1','1005','1008',NULL,'2021-08-31 13:20:59','2021-08-31 13:20:59',NULL),(16,'1','1008','1003','  test','2021-09-01 17:07:34','2021-09-01 17:07:34',NULL),(18,'1','1003','1004','kirim ke GM','2021-09-01 18:27:34','2021-09-01 18:27:34','1'),(19,'1','1004','1005','ok mantap','2021-09-01 21:37:36','2021-09-01 21:37:36','1'),(20,'1','1005','1006','dari bisnis pemimpin kelompok','2021-09-02 10:24:05','2021-09-02 10:24:05','1'),(21,'1','1006','1007','dari pengelola bisnsi ke analys','2021-09-02 10:35:26','2021-09-02 10:35:26','1'),(23,'1','1007','1006','revisi','2021-09-02 11:06:23','2021-09-02 11:06:23',NULL);
/*!40000 ALTER TABLE `tb_history_document` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_level_user`
--

DROP TABLE IF EXISTS `tb_level_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `tb_level_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `posisi` int(11) DEFAULT NULL,
  `nama_posisi` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_level_user`
--

LOCK TABLES `tb_level_user` WRITE;
/*!40000 ALTER TABLE `tb_level_user` DISABLE KEYS */;
INSERT INTO `tb_level_user` VALUES (1,1,'admin'),(2,2,'Sekkom'),(3,3,'Seketaris'),(4,4,'DGM / GM'),(5,5,'Pemimpin Kelompok'),(6,6,'Penglola'),(7,7,'Analys'),(8,8,'Sekretaris Bisnis');
/*!40000 ALTER TABLE `tb_level_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pengguna`
--

DROP TABLE IF EXISTS `tb_pengguna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `tb_pengguna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `npp` varchar(45) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `posisi` int(11) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `password` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pengguna`
--

LOCK TABLES `tb_pengguna` WRITE;
/*!40000 ALTER TABLE `tb_pengguna` DISABLE KEYS */;
INSERT INTO `tb_pengguna` VALUES (1,'1001','admin',1,'2021-08-21','55e8b0af8c4b85c8570218dc7b3f3d40'),(3,'1002','Sekkom',2,'2021-08-21','55e8b0af8c4b85c8570218dc7b3f3d40'),(4,'1003','Seketaris',3,'2021-08-21','55e8b0af8c4b85c8570218dc7b3f3d40'),(6,'1004','DGM / GM',4,'2021-08-21','55e8b0af8c4b85c8570218dc7b3f3d40'),(7,'1005','Pemimpin Kelompok',5,'2021-08-21','55e8b0af8c4b85c8570218dc7b3f3d40'),(10,'1006','Penglola',6,'2021-08-21','55e8b0af8c4b85c8570218dc7b3f3d40'),(11,'1007','Analys',7,'2021-08-21','55e8b0af8c4b85c8570218dc7b3f3d40'),(12,'1008','Bisnis',8,'2021-08-21','55e8b0af8c4b85c8570218dc7b3f3d40');
/*!40000 ALTER TABLE `tb_pengguna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `document`
--

/*!50001 DROP VIEW IF EXISTS `document`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`admin`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `document` AS select `tb_history_document`.`id` AS `id_history`,`tb_history_document`.`id_penerus` AS `id_penerus`,`tb_history_document`.`loop` AS `loop`,`tb_history_document`.`remaks` AS `remaks`,date_format(`tb_history_document`.`created_at`,'%d %M %y %H:%i') AS `date_created`,date_format(`tb_history_document`.`updated_at`,'%d %M %y %H:%i') AS `date_update`,`tb_document`.`id` AS `id_document`,`tb_document`.`no_document` AS `no_document`,`tb_document`.`debitur` AS `debitur`,`tb_document`.`file_nk3` AS `file_nk3`,`tb_document`.`file_2` AS `file_2`,`tb_document`.`no_skk` AS `no_skk`,`tb_document`.`status` AS `status`,`tb_pengguna`.`npp` AS `id_pengguna`,`tb_pengguna`.`nama` AS `nama_pengguna`,`tb_pengguna`.`posisi` AS `posisi_pengguna`,`c`.`nama` AS `nama_penerus` from (((`tb_history_document` left join `tb_document` on((`tb_history_document`.`id_document` = `tb_document`.`id`))) left join `tb_pengguna` on((`tb_history_document`.`id_pengguna` = `tb_pengguna`.`npp`))) left join `tb_pengguna` `c` on((`tb_history_document`.`id_penerus` = `c`.`npp`))) order by `tb_history_document`.`updated_at` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-02 16:47:03
