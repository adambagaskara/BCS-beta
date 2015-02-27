-- MySQL dump 10.13  Distrib 5.6.21, for Win32 (x86)
--
-- Host: localhost    Database: mobil
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Table structure for table `cashs`
--

DROP TABLE IF EXISTS `cashs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cashs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_cash` varchar(20) NOT NULL,
  `ktp` varchar(30) NOT NULL,
  `kode_mobil` varchar(20) NOT NULL,
  `cash_tgl` varchar(10) NOT NULL,
  `cash_bayar` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cashs`
--

LOCK TABLES `cashs` WRITE;
/*!40000 ALTER TABLE `cashs` DISABLE KEYS */;
INSERT INTO `cashs` VALUES (9,'1234','12345678','4','20022015','100000000','0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,'C4','99881','3','23022015','100000000','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `cashs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cicilans`
--

DROP TABLE IF EXISTS `cicilans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cicilans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_cicilan` varchar(25) NOT NULL,
  `kode_kredit` varchar(20) NOT NULL,
  `tgl_cicilan` int(25) NOT NULL,
  `cicilan_ke` int(5) DEFAULT NULL,
  `cicilan_sisa` int(5) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `bayar` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cicilans`
--

LOCK TABLES `cicilans` WRITE;
/*!40000 ALTER TABLE `cicilans` DISABLE KEYS */;
INSERT INTO `cicilans` VALUES (1,'002','121212',27022015,1,11,'0000-00-00 00:00:00','0000-00-00 00:00:00',9000000),(2,'012099','12012',27022015,3,9,'0000-00-00 00:00:00','0000-00-00 00:00:00',10000000),(3,'Ci1','K2',20022015,1,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',3000000);
/*!40000 ALTER TABLE `cicilans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kredits`
--

DROP TABLE IF EXISTS `kredits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kredits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_kredit` varchar(20) NOT NULL,
  `ktp` varchar(30) NOT NULL,
  `kode_paket` varchar(30) NOT NULL,
  `kode_mobil` varchar(30) NOT NULL,
  `tgl_kredit` int(25) NOT NULL,
  `fotokopi_ktp` varchar(5) DEFAULT NULL,
  `fotokopi_kk` varchar(5) DEFAULT NULL,
  `fotokopi_slip_gaji` varchar(5) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `uangmuka` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kredits`
--

LOCK TABLES `kredits` WRITE;
/*!40000 ALTER TABLE `kredits` DISABLE KEYS */;
INSERT INTO `kredits` VALUES (2,'03','999999','02','02',20022015,'y','y','y','0000-00-00 00:00:00','0000-00-00 00:00:00','3000000');
/*!40000 ALTER TABLE `kredits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mobils`
--

DROP TABLE IF EXISTS `mobils`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mobils` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_mobil` varchar(20) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `harga` varchar(90) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tahun` varchar(10) DEFAULT NULL,
  `tgl_masuk` varchar(10) DEFAULT NULL,
  `kadaluarsa` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mobils`
--

LOCK TABLES `mobils` WRITE;
/*!40000 ALTER TABLE `mobils` DISABLE KEYS */;
INSERT INTO `mobils` VALUES (3,'','Kijang','001','Hitam','100000000',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','2008','10012015','10012020'),(4,'','Avanza','002','Merah','150000000',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','2010','10012015','10012020'),(5,'','Daihatsu','002','Merah','150000000',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','2010','10022015','10022020'),(6,'','Subharu','003','Hijau','150000000',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00','2009','15022015','15022025');
/*!40000 ALTER TABLE `mobils` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pakets`
--

DROP TABLE IF EXISTS `pakets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pakets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_paket` varchar(30) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `uangmuka` varchar(30) NOT NULL,
  `paketcicilan` int(4) NOT NULL,
  `bunga` varchar(4) DEFAULT NULL,
  `nilaicicilan` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pakets`
--

LOCK TABLES `pakets` WRITE;
/*!40000 ALTER TABLE `pakets` DISABLE KEYS */;
INSERT INTO `pakets` VALUES (2,'','150000000','3000000',24,'10','9000000','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'','200000000','3000000',24,'10','80000000','0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'','150000000','5000000',12,'5','13000000','0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'','200000000','10000000',12,'5','17000000','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `pakets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pembelis`
--

DROP TABLE IF EXISTS `pembelis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pembelis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ktp` int(30) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(25) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pembelis`
--

LOCK TABLES `pembelis` WRITE;
/*!40000 ALTER TABLE `pembelis` DISABLE KEYS */;
INSERT INTO `pembelis` VALUES (6,99999999,'Adam Bagaskiri','Indonesia','0891891891891','0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,2147483647,'Adam X','Eropa','09109109','0000-00-00 00:00:00','0000-00-00 00:00:00'),(13,12345678,'didit','pinang ranti','08974152072','0000-00-00 00:00:00','0000-00-00 00:00:00'),(14,99881,'aroh','Jakarta','8988989','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `pembelis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `jabatan` varchar(35) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Adam Bagaskara','admin','adambagaskara36@gmail.com','petugas','petugas',NULL,'2015-02-16 18:17:34','0000-00-00 00:00:00'),(2,'bagas','admin','adambagas@gmail.com','yaiiii','admin',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');
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

-- Dump completed on 2015-02-27 13:35:42
