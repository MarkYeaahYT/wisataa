-- MySQL dump 10.13  Distrib 8.0.21, for Linux (x86_64)
--
-- Host: localhost    Database: Travel
-- ------------------------------------------------------
-- Server version	8.0.21-0ubuntu0.20.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id_admin` varchar(5) NOT NULL,
  `nama_admin` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('1','Garr','garr','garr');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentar`
--

DROP TABLE IF EXISTS `comentar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comentar` (
  `id_comentar` varchar(5) NOT NULL,
  `comentar` text,
  `nama` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `id_destination` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_comentar`),
  KEY `id_destination` (`id_destination`),
  CONSTRAINT `comentar_ibfk_2` FOREIGN KEY (`id_destination`) REFERENCES `destinations` (`id_destination`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentar`
--

LOCK TABLES `comentar` WRITE;
/*!40000 ALTER TABLE `comentar` DISABLE KEYS */;
INSERT INTO `comentar` VALUES ('2efZ','Give that man a cookie','Vladimir Putin','2020-10-13','tJ7M'),('6hxR','mantap','Jokowi','2020-10-13','CMNX'),('90Ah','pinus mantap','PinusMan','2020-10-13','ypME'),('9k5F','bagus sekali','mr. bean','2020-10-13','tJ7M'),('B4GI','wkwk','suep','2020-10-13','tJ7M'),('cumB','yes nice','Nice','2020-10-13','O0TT'),('g5Ex','i love this place so much','Donald J Trump','2020-10-13','tJ7M'),('I7cJ','pinus jos','PinusGirls','2020-10-13','ypME'),('i7S5','gege','suep','2020-10-13','O0TT'),('kfoj','gege','suep','2020-10-13','O0TT'),('lOtT','mrbpois','bois','2020-10-13','9EFH'),('mest','gege','suep','2020-10-13','O0TT'),('o2Hd','gege','suep','2020-10-13','O0TT'),('r8SF','i didn\'t realize that this place is mars, Lmao ','Elon Musk','2020-10-13','9EFH'),('tys9','yes','Admin','2020-10-13','ypME'),('U9EE','gege','suep','2020-10-13','O0TT'),('vbNi','','','2020-10-13','ypME'),('yAnv','gege','suep','2020-10-13','O0TT'),('znwV','i love bean cuz bean is bean','MrBean','2020-10-13','CMNX');
/*!40000 ALTER TABLE `comentar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destinations`
--

DROP TABLE IF EXISTS `destinations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `destinations` (
  `id_destination` varchar(5) NOT NULL,
  `nama_dest` varchar(80) DEFAULT NULL,
  `urlgmaps` text,
  `image` varchar(50) DEFAULT NULL,
  `artikel` text,
  PRIMARY KEY (`id_destination`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinations`
--

LOCK TABLES `destinations` WRITE;
/*!40000 ALTER TABLE `destinations` DISABLE KEYS */;
INSERT INTO `destinations` VALUES ('9EFH','Pantai Parangtritis','https://goo.gl/maps/4E99SJbTYsfU59qP7','1600059357.png','Parangtritis merupakan objek wisata yang cukup terkenal di Yogyakarta selain objek pantai lainnya seperti Samas, Baron, Kukup, Krakal dan Glagah. Parangtritis mempunyai keunikan pemandangan yang tidak terdapat pada objek wisata lainnya yaitu selain ombak yang besar juga adanya gunung-gunung pasir di sekitar pantai, yang biasa disebut gumuk. Objek wisata ini sudah dikelola oleh pihak Pemkab Bantul dengan cukup baik, mulai dari fasilitas penginapan maupun pasar yang menjajakan souvenir khas Parangtritis.\r\nDi Parangtritis ada juga ATV, kereta kuda dan kuda yang dapat disewa untuk menyusuri pantai dari timur ke barat. Selain itu Parangtritis juga merupakan tempat untuk olahraga udara/aeromodeling.'),('CMNX','Titik Nol Kilometer Jogja','https://goo.gl/maps/m9FCitnMbu4rDh6V9','index1.jpeg','Titik Nol Kilometer merupakan tempat dimulainya segala kisah tentang Jogja. Di persimpangan ini kamu bisa melihat Jogja secara utuh. Jogja yang semrawut namun syahdu, Jogja yang modern namun tetap mempertahanan lokalitas, Jogja yang mencipta kelu juga rindu.'),('O0TT','Candi Borobudur','https://goo.gl/maps/gbw78hUjgoGJ6BuCA','1601437588.png','Borobudur adalah candi atau kuil Buddha terbesar di dunia, sekaligus salah satu monumen Buddha terbesar di dunia. Monumen ini terdiri atas enam teras berbentuk bujur sangkar yang di atasnya terdapat tiga pelataran melingkar, pada dindingnya dihiasi dengan 2.672 panel relief dan aslinya terdapat 504 arca Buddha.'),('tJ7M','Candi Prambanan','https://goo.gl/maps/PMXGy7vb8Vnks14W8','1602552377.png','Candi Prambanan ini adalah termasuk Situs Warisan Dunia UNESCO, candi Hindu terbesar di Indonesia, sekaligus salah satu candi terindah di Asia Tenggara. Arsitektur bangunan ini berbentuk tinggi dan ramping sesuai dengan arsitektur Hindu pada umumnya dengan candi Siwa sebagai candi utama memiliki ketinggian mencapai 47 meter menjulang di tengah kompleks gugusan candi-candi yang lebih kecil.[3] Sebagai salah satu candi termegah di Asia Tenggara, candi Prambanan menjadi daya tarik kunjungan wisatawan dari seluruh dunia.'),('ypME','Hutan Pinus Mangunan','https://goo.gl/maps/aZQozH3pqvnQ45Yw9','mangunan2.jpeg','Hutan Pinus Mangunan yang indah');
/*!40000 ALTER TABLE `destinations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-31  9:37:32
