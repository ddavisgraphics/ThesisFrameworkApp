--
-- Table structure for table `completed`
--

DROP TABLE IF EXISTS `completed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `completed` (
  `cID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `ipAddr` varchar(50) NOT NULL,
  `numCompleted` tinyint(2) NOT NULL,
  `section` varchar(50) NOT NULL,
  PRIMARY KEY (`cID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `databaseSurvey`
--

DROP TABLE IF EXISTS `databaseSurvey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `databaseSurvey` (
  `dbID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `ipAddr` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rating` tinyint(3) DEFAULT NULL,
  `feedback` text,
  `code` text,
  `framework` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dbID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `fID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `ipAddr` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rating` tinyint(3) DEFAULT NULL,
  `feedback` text,
  PRIMARY KEY (`fID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `logicSurvey`
--

DROP TABLE IF EXISTS `logicSurvey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logicSurvey` (
  `dbID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `ipAddr` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rating` tinyint(3) DEFAULT NULL,
  `feedback` text,
  `code` text,
  `framework` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dbID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `routerSurvey`
--

DROP TABLE IF EXISTS `routerSurvey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `routerSurvey` (
  `rID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `ipAddr` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rating` tinyint(3) DEFAULT NULL,
  `feedback` text,
  `framework` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`rID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session` (
  `sID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `ipAddr` varchar(50) NOT NULL,
  `occupation` varchar(200) DEFAULT NULL,
  `html` tinyint(1) NOT NULL DEFAULT '0',
  `job` varchar(200) DEFAULT NULL,
  `degree` varchar(300) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`sID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `setupSurvey`
--

DROP TABLE IF EXISTS `setupSurvey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setupSurvey` (
  `ssID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `ipAddr` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rating` tinyint(3) DEFAULT NULL,
  `feedback` text,
  `framework` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ssID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `viewsSurvey`
--

DROP TABLE IF EXISTS `viewsSurvey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `viewsSurvey` (
  `dbID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `ipAddr` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rating` tinyint(3) DEFAULT NULL,
  `feedback` text,
  `code` text,
  `framework` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dbID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

