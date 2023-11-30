DROP DATABASE IF EXISTS `zoo`;

CREATE DATABASE zoo;
USE zoo;

DROP TABLE IF EXISTS `animal`;
CREATE TABLE `animal` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `nom` varchar(50) DEFAULT NULL,
  `id_espece` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `poids` double DEFAULT NULL,
  `id_pays` int(11) DEFAULT NULL,
  `id_regime` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Dumping data for table `animal`
--

LOCK TABLES `animal` WRITE;
/*!40000 ALTER TABLE `animal` DISABLE KEYS */;
INSERT INTO `animal` VALUES (1,'felix',2,8,3.5,1,2),(2,'medor',1,12,8.2,4,2),(3,'babar',3,32,1703.5,5,1),(4,'miaou',2,4,1.7,2,2),(5,'papou',4,9,12.1,3,1),(6,'babe',5,7,113.7,4,3),(7,'noiraude',6,4,511,4,1),(8,'kass',7,3,41,6,1),(9,'ric',8,2,0.12,4,4);
/*!40000 ALTER TABLE `animal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `espece`
--

DROP TABLE IF EXISTS `espece`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `espece` (
  `id` int(11)  AUTO_INCREMENT PRIMARY KEY,
  `nom` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `espece`
--

LOCK TABLES `espece` WRITE;
/*!40000 ALTER TABLE `espece` DISABLE KEYS */;
INSERT INTO `espece` VALUES (1,'chien'),(2,'chat'),(3,'elephant'),(4,'panda'),(5,'cochon'),(6,'vache'),(7,'chevre'),(8,'perruche');
/*!40000 ALTER TABLE `espece` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pays`
--

DROP TABLE IF EXISTS `pays`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pays` (
  `id` int(11)  AUTO_INCREMENT PRIMARY KEY,
  `nom` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pays`
--

LOCK TABLES `pays` WRITE;
/*!40000 ALTER TABLE `pays` DISABLE KEYS */;
INSERT INTO `pays` VALUES (1,'siam'),(2,'suisse'),(3,'chine'),(4,'france'),(5,'indes'),(6,'italie');
/*!40000 ALTER TABLE `pays` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regime`
--

DROP TABLE IF EXISTS `regime`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regime` (
  `id` int(11)  AUTO_INCREMENT PRIMARY KEY,
  `nom` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regime`
--

LOCK TABLES `regime` WRITE;
/*!40000 ALTER TABLE `regime` DISABLE KEYS */;
INSERT INTO `regime` VALUES (1,'herbivore'),(2,'carnivore'),(3,'omnivore'),(4,'granivore');
/*!40000 ALTER TABLE `regime` ENABLE KEYS */;
UNLOCK TABLES;
