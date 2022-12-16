-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: narademy
-- ------------------------------------------------------
-- Server version	8.0.19

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
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `courses` (
  `id` varchar(32) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `slug` varchar(128) NOT NULL,
  `content` text,
  `link` varchar(255) NOT NULL,
  `draft` enum('true','false') NOT NULL DEFAULT 'true',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES ('6396260a63f9b4.58074489','Introduction to Python Programming','testrun-6396260a63f9b4.58074489','<p>Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically-typed and garbage-collected. It supports multiple programming paradigms, including structured, object-oriented and functional programming.</p>','https://narademy.com/video_courses/python.mp4','false','2022-12-12 01:48:42'),('639626439b1290.94019214','6 stages in graphic design','asdad-639626439b1290.94019214','<p>THE DESIGN PROCESS CONSISTS OF 6 STEPS:</p><ol><li>Define the Problem. You can\'t find a solution until you have a clear idea of what the problem is.</li><li>Collect Information. Collect sketches, take photographs and gather data to start giving you inspiration.</li><li>Brainstorm and Analyze Ideas. ...</li><li>Develop Solutions. ...</li><li>Gather Feedback. ...</li><li>Improve.</li></ol>','https://narademy.com/video_courses/abc.mp4','false','2022-12-12 01:49:39'),('63963101959b80.33657200','Pengenalan tentang metode MVC','pengenalan-tentang-metode-mvc-63963101959b80.33657200','<p>MVC adalah konsep desain arsitektur dengan cara kerja memisahkan aplikasi menjadi tiga komponen utama, yakni model, view, dan controller. Ketiga komponen ini dibangun untuk menangani suatu aspek pengembangan aplikasi tertentu.</p>','https://narademy.com/video_courses/mvc.mp4','false','2022-12-12 02:35:29'),('639631e2934243.50436698','Introduction to C++','introduction-to-c-639631e2934243.50436698','<p>C++ adalah bahasa pemrograman komputer yang di buat oleh Bjarne</p><p>Stroustrup, yang merupakan perkembangan dari bahasa C dikembangkan</p><p>di Bong Labs (Dennis Ritchie) pada awal tahun 1970-an, Bahasa itu diturunkan</p><p>dari bahasa sebelumnya, yaitu B, Pada awalnya, bahasa tersebut dirancang</p><p>sebagai bahasa pemrograman yang dijalankan pada sistem Unix, Pada</p><p>perkembangannya, versi ANSI (American National Standart Institute). Bahasa</p><p>pemrograman C menjadi versi dominan, Meskipun versi tersebut sekarang jarang</p><p>dipakai dalam pengembangan sistem dan jaringan maupun untuk sistem</p><p>embedded, Bjarne Stroustrup pada Bel labs pertama kali mengembangkan C++</p><p>pada awal 1980-an. Untuk mendukung fitur-fitur pada C++, dibangun efisiensi dan</p><p>sistem support untuk pemrograman tingkat rendah (low level coding).</p>','https://narademy.com/video_courses/cpp.mp4','false','2022-12-12 02:39:14'),('6396322ca659c1.22250043','Mari belajar Programming','mari-belajar-programming-6396322ca659c1.22250043','<p>C++ adalah bahasa pemrograman komputer yang di buat oleh Bjarne</p><p>Stroustrup, yang merupakan perkembangan dari bahasa C dikembangkan</p><p>di Bong Labs (Dennis Ritchie) pada awal tahun 1970-an, Bahasa itu diturunkan</p><p>dari bahasa sebelumnya, yaitu B, Pada awalnya, bahasa tersebut dirancang</p><p>sebagai bahasa pemrograman yang dijalankan pada sistem Unix, Pada</p><p>perkembangannya, versi ANSI (American National Standart Institute). Bahasa</p><p>pemrograman C menjadi versi dominan, Meskipun versi tersebut sekarang jarang</p><p>dipakai dalam pengembangan sistem dan jaringan maupun untuk sistem</p><p>embedded, Bjarne Stroustrup pada Bel labs pertama kali mengembangkan C++</p><p>pada awal 1980-an. Untuk mendukung fitur-fitur pada C++, dibangun efisiensi dan</p><p>sistem support untuk pemrograman tingkat rendah (low level coding).</p>','https://narademy.com/video_courses/programming.mp4','false','2022-12-12 02:40:28');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-12 20:24:55
