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
-- Table structure for table `usr_blogs`
--

DROP TABLE IF EXISTS `usr_blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usr_blogs` (
  `id` varchar(32) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `slug` varchar(128) NOT NULL,
  `content` text,
  `draft` enum('true','false') NOT NULL DEFAULT 'true',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usr_blogs`
--

LOCK TABLES `usr_blogs` WRITE;
/*!40000 ALTER TABLE `usr_blogs` DISABLE KEYS */;
INSERT INTO `usr_blogs` VALUES ('1','Hello World!','hello-world','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','false','2022-12-12 00:04:29'),('6396ac102cd584.38986780','Introduction to JAVA','introduction-to-java-6396ac102cd584.38986780','<p>The logical OR operator ( || ) returns the boolean value true if either or both operands is true and returns false otherwise. The operands are implicitly converted to type bool before evaluation, and the result is of type bool .</p>','false','2022-12-12 11:20:32'),('6396ac1f04fe54.91531444','Introduction to Golang','introduction-to-golang-6396ac1f04fe54.91531444','<p>The logical OR operator ( || ) returns the boolean value true if either or both operands is true and returns false otherwise. The operands are implicitly converted to type bool before evaluation, and the result is of type bool .</p>','false','2022-12-12 11:20:47'),('6396ac5db85441.98969300','Introduction to JAVA','introduction-to-java-6396ac5db85441.98969300','<p>The logical OR operator ( || ) returns the boolean value true if either or both operands is true and returns false otherwise. The operands are implicitly converted to type bool before evaluation, and the result is of type bool .</p>','false','2022-12-12 11:21:49'),('6396ac6440d3f7.04896268','Introduction to JAVA','introduction-to-java-6396ac6440d3f7.04896268','<p>The logical OR operator ( || ) returns the boolean value true if either or both operands is true and returns false otherwise. The operands are implicitly converted to type bool before evaluation, and the result is of type bool .</p>','false','2022-12-12 11:21:56'),('6396ac6e6d3a24.59086062','Introduction to JAVA','introduction-to-java-6396ac6e6d3a24.59086062','<p>The logical OR operator ( || ) returns the boolean value true if either or both operands is true and returns false otherwise. The operands are implicitly converted to type bool before evaluation, and the result is of type bool .</p>','false','2022-12-12 11:22:06'),('6396ae6f6d2d13.49824378','Tsetettet error','tsetettet-error-6396ae6f6d2d13.49824378','<p>The logical OR operator ( || ) returns the boolean value true if either or both operands is true and returns false otherwise. The operands are implicitly converted to type bool before evaluation, and the result is of type bool .The logical OR operator ( || ) returns the boolean value true if either or both operands is true and returns false otherwise. The operands are implicitly converted to type bool before evaluation, and the result is of type bool .The logical OR operator ( || ) returns the boolean value true if either or both operands is true and returns false otherwise. The operands are implicitly converted to type bool before evaluation, and the result is of type bool .</p>','false','2022-12-12 11:30:39');
/*!40000 ALTER TABLE `usr_blogs` ENABLE KEYS */;
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
