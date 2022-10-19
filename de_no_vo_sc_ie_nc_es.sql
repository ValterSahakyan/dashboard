-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: de_no_vo_sc_ie_nc_es
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

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
-- Table structure for table `careers`
--

DROP TABLE IF EXISTS `careers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `careers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `responsibilities` longtext COLLATE utf8mb4_unicode_ci,
  `qualifications` longtext COLLATE utf8mb4_unicode_ci,
  `apply` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `careers`
--

LOCK TABLES `careers` WRITE;
/*!40000 ALTER TABLE `careers` DISABLE KEYS */;
INSERT INTO `careers` VALUES (1,'Data Scientist','2022-03-24','Yerevan','middle','full_time','<h2>Who we&#39;re looking for</h2>\r\n\r\n<ul>\r\n	<li>2+ years experience with Machine Learning and Deep Learning</li>\r\n	<li>A degree in Computer Science, Mathematics, Data Science, Statistics or relevant field</li>\r\n	<li>Strong knowledge of Python</li>\r\n	<li>Familiarity with Deep Learning frameworks (preferably PyTorch)</li>\r\n	<li>Familiarity with Version Control (Git/Github)</li>\r\n	<li>Experience with Reinforcement Learning is a plus</li>\r\n	<li>Experience with Graph Neural Networks is a plus</li>\r\n	<li>Knowledge of Chemistry and/or Biology is a plus</li>\r\n</ul>','<h2>Responsibilities</h2>\r\n\r\n<ul>\r\n	<li>Conduct research and keep up with current state-of-the-art in Drug Discovery and Deep Learning</li>\r\n	<li>Write scripts, work with and interpret a diverse set of molecular data</li>\r\n	<li>Improve and develop new features on algorithms</li>\r\n	<li>Work as a part of a multi-disciplinary team and develop solutions to challenging computational problems in the field of Drug Discovery</li>\r\n</ul>',NULL,'<h2>How to Apply</h2>\r\n\r\n<p>Send your CV to <a href=\"mailto:hr@denovosciences.ai\">hr@denovosciences.ai</a> and specify the name of the position in the email subject. Make sure to attach your Github or any other relevant links.</p>','2022-01-24 10:22:40','2022-02-08 07:52:39','2022-02-08 07:52:39'),(2,'Data Science','2022-04-03','Yerevan','intern','full_time','<p>If you are interested in working with us, but don&rsquo;t have any experience in this field yet, we are happy to help you with your first steps.</p>\r\n\r\n<h2>Who we&#39;re looking for</h2>\r\n\r\n<ul>\r\n	<li>Knowledge of Machine Learning and Deep Learning</li>\r\n	<li>A degree in Computer Science, Mathematics, Data Science, Statistics or relevant field</li>\r\n	<li>Strong knowledge of Python</li>\r\n	<li>Familiarity with Deep Learning frameworks (preferably PyTorch)</li>\r\n	<li>Experience with Reinforcement Learning is a plus</li>\r\n	<li>Knowledge of Chemistry and Biology is a plus</li>\r\n</ul>','<h2>Responsibilities</h2>\r\n\r\n<ul>\r\n	<li>Conduct research and keep up with current state-of-the-art in Drug Discovery and Deep Learning</li>\r\n	<li>Analyze molecular datasets, identify patterns, find relevant features</li>\r\n	<li>Work as a part of a multi-disciplinary team and develop solutions to challenging computational problems in the field of Drug Discovery</li>\r\n</ul>',NULL,'<h2>How to Apply</h2>\r\n\r\n<p>Send your CV to <a href=\"mailto:hr@denovosciences.ai\">hr@denovosciences.ai</a> and specify the name of the position in the email subject. Make sure to attach your Github or any other relevant links.</p>','2022-01-24 10:23:42','2022-01-24 10:23:42',NULL),(3,'Medicinal Chemist','2022-03-12','Yerevan','senior','full_time','<h2>Who we&#39;re looking for</h2>\r\n\r\n<ul>\r\n	<li>PhD in synthetic organic or medicinal chemistry with 5+ years drug discovery or medicinal chemistry experience</li>\r\n	<li>Strong record of productivity as demonstrated by publications.</li>\r\n	<li>Expertise in synthetic organic chemistry</li>\r\n	<li>Chemistry team leadership experience advancing hits to leads and candidate status.</li>\r\n	<li>An understanding of drug design principles, DMPK, tox, etc.</li>\r\n	<li>Experience mentoring other chemists.</li>\r\n</ul>','<h2>Responsibilities</h2>\r\n\r\n<ul>\r\n	<li>Undertake data analysis to assess the results of experiments and the characteristics of the molecules produced</li>\r\n	<li>Ensure the structure and purity of compounds are correct</li>\r\n	<li>Write up experiments accurately</li>\r\n	<li>Work closely with other scientific colleagues across different disciplines</li>\r\n	<li>Use computational techniques to model the properties of new molecules</li>\r\n	<li>Explore how it may be possible to &#39;scale up&#39; production of useful compounds that are created</li>\r\n	<li>Keep up to date with scientific literature</li>\r\n</ul>',NULL,'<h2>How to Apply</h2>\r\n\r\n<p>Send your CV to <a href=\"mailto:hr@denovosciences.ai\">hr@denovosciences.ai</a> and specify the name of the position in the email subject. Make sure to attach your Github or any other relevant links.</p>','2022-01-24 10:24:39','2022-02-08 07:52:47',NULL);
/*!40000 ALTER TABLE `careers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collaborations`
--

DROP TABLE IF EXISTS `collaborations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `collaborations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collaborations`
--

LOCK TABLES `collaborations` WRITE;
/*!40000 ALTER TABLE `collaborations` DISABLE KEYS */;
INSERT INTO `collaborations` VALUES (1,'emory','storage/uploads/collaborations/1644311921_emory.png','https://med.emory.edu/departments/pediatrics/divisions/biochem/index.html',NULL,NULL,'2022-02-08 09:18:55'),(2,'uniroma1','storage/uploads/collaborations/1644316630_sapienza.png','https://www.uniroma1.it/en/pagina-strutturale/home',NULL,NULL,NULL),(3,'sandiego','storage/uploads/collaborations/1644320046_san_diego.png','https://www.sandiego.edu/',NULL,NULL,NULL),(4,'molbiol','storage/uploads/collaborations/1644320064_molecular_biology.png','http://www.molbiol.sci.am/',NULL,NULL,NULL),(5,'emory','storage/uploads/collaborations/1644316646_emory.png','https://med.emory.edu/departments/pediatrics/divisions/biochem/index.html',NULL,NULL,NULL);
/*!40000 ALTER TABLE `collaborations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_requests`
--

DROP TABLE IF EXISTS `data_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_requests` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `affiliation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `project_id` int NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_requests`
--

LOCK TABLES `data_requests` WRITE;
/*!40000 ALTER TABLE `data_requests` DISABLE KEYS */;
INSERT INTO `data_requests` VALUES (1,'hgghghg','gfhgfhfg','admin@agdmin.com','gfhgfh','fghfgh','7878848484','fghfghfgh',1,'0','2022-01-26 10:33:22','2022-01-26 10:35:59','2022-01-26 10:35:59'),(2,'gtfdhfdtg','dfgdfg','valtersahakyan4@gmail.com','dsfsdf','dsfsdf','458454545','sdfsdfsdfsdf',1,'0','2022-01-26 10:34:57','2022-01-26 10:35:58','2022-01-26 10:35:58'),(3,'Mher','Matevosyan','mherm@denovosciences.ai','Denovo','Denovo',NULL,'plz give data',2,'1','2022-04-06 07:20:31','2022-04-07 09:23:26',NULL),(4,'Valter','Sahakyan','valters@denovosciences.ai','YSU','student','+37477760470','asd asd asd asd asd as',2,'0','2022-04-06 07:22:29','2022-04-06 13:24:25','2022-04-06 13:24:25'),(5,'Mher','Matevosyan','mherm@denovosciences.ai','Denovo','Denovo','+37411111111','plzzzzzzzzzzzzzzzz',2,'1','2022-04-06 07:23:57','2022-04-06 13:24:23','2022-04-06 13:24:23'),(6,'test','test','valters@denovosciences.ai','test','test',NULL,'test test',2,'1','2022-04-06 13:15:26','2022-04-06 13:24:20','2022-04-06 13:24:20'),(7,'test','test','valters@denovosciences.ai','test','test',NULL,'test test',2,'1','2022-04-06 13:24:52','2022-04-07 09:26:06','2022-04-07 09:26:06'),(8,'data','data','valters@denovosciences.ai','data','dat',NULL,'sdasd afds sd sdd s',2,'1','2022-04-07 11:13:18','2022-04-11 10:31:06','2022-04-11 10:31:06');
/*!40000 ALTER TABLE `data_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_template`
--

DROP TABLE IF EXISTS `email_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `email_template` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_template`
--

LOCK TABLES `email_template` WRITE;
/*!40000 ALTER TABLE `email_template` DISABLE KEYS */;
INSERT INTO `email_template` VALUES (1,NULL,NULL,'<!DOCTYPE html>\n                <html lang=\"en\">\n                <head>\n                    <meta charset=\"utf-8\">\n                    <meta name=\"viewport\" content=\"width=device-width\">\n                    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> \n                    <meta name=\"x-apple-disable-message-reformatting\">\n                    <title>Example</title>\n                    <style>\n                        body {\n                            background-color:#fff;\n                            color:#222222;\n                            margin: 0px auto;\n                            padding: 0px;\n                            height: 100%;\n                            width: 100%;\n                            font-weight: 400;\n                            font-size: 15px;\n                            line-height: 1.8;\n                        }\n                        .continer{\n                            width:400px;\n                            margin-left:auto;\n                            margin-right:auto;\n                            background-color:#efefef;\n                            padding:30px;\n                        }\n                        .btn{\n                            padding: 5px 15px;\n                            display: inline-block;\n                        }\n                        .btn-primary{\n                            border-radius: 3px;\n                            background: #0b3c7c;\n                            color: #fff;\n                            text-decoration: none;\n                        }\n                        .btn-primary:hover{\n                            border-radius: 3px;\n                            background: #4673ad;\n                            color: #fff;\n                            text-decoration: none;\n                        }\n                    </style>\n                </head>\n                <body>\n                    <div class=\"continer\">\n                        <h1>Lorem ipsum dolor</h1>\n                        <h4>Ipsum dolor cet emit amet</h4>\n                        <p>\n                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <strong>commodo consequat</strong>. \n                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \n                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n                        </p>\n                        <h4>Ipsum dolor cet emit amet</h4>\n                        <p>\n                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <a href=\"#\">tempor incididunt ut labore</a> et dolore magna aliqua.\n                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \n                        </p>\n                        <h4>Ipsum dolor cet emit amet</h4>\n                        <p>\n                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \n                        </p>\n                        <a href=\"#\" class=\"btn btn-primary\">Lorem ipsum dolor</a>\n                        <h4>Ipsum dolor cet emit amet</h4>\n                        <p>\n                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\n                            Ut enim ad minim veniam, quis nostrud exercitation <a href=\"#\">ullamco</a> laboris nisi ut aliquip ex ea commodo consequat. \n                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \n                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n                        </p>\n                    </div>\n                </body>\n                </html>','Example E-mail','Example E-mail');
/*!40000 ALTER TABLE `email_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `example`
--

DROP TABLE IF EXISTS `example`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `example` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `example`
--

LOCK TABLES `example` WRITE;
/*!40000 ALTER TABLE `example` DISABLE KEYS */;
INSERT INTO `example` VALUES (1,NULL,NULL,'Eum dolor amet est.','Cupiditate et aut et pariatur.',1),(2,NULL,NULL,'Maxime vitae nemo soluta perspiciatis.','Iste voluptas dolore tempore. Iure totam quia hic natus a sed.',4),(3,NULL,NULL,'Cum quibusdam inventore.','Natus consequatur ea iure repudiandae inventore voluptatem. Vero ut officiis quae alias.',2),(4,NULL,NULL,'Accusamus quisquam quae et.','Quisquam est atque iure eaque quas soluta magnam similique. Officia delectus harum impedit est quas repudiandae dignissimos.',4),(5,NULL,NULL,'Non quos nulla.','Quia molestiae dolorem debitis id molestias. Eos consequatur dolor consequatur ea sunt quae autem nobis.',2),(6,NULL,NULL,'Nihil quaerat odit atque.','Odio cum delectus ducimus totam quidem beatae. Dolores voluptatem ratione assumenda rerum sunt.',3),(7,NULL,NULL,'Omnis qui quis.','A maxime recusandae sapiente sed.',4),(8,NULL,NULL,'Hic voluptatem repudiandae dicta dolore.','Rerum dolorem aut at quam aliquid eum est. Ut fugit est similique maxime repellat.',3),(9,NULL,NULL,'Ipsam praesentium eaque ut minus.','Ea ut facere distinctio et.',4),(10,NULL,NULL,'Odit laborum voluptate in fuga.','Aut dolorem sit animi illum nihil molestiae.',3),(11,NULL,NULL,'In repudiandae voluptatibus ut.','Cumque enim voluptas consectetur deleniti.',2),(12,NULL,NULL,'Sit voluptas eos assumenda quisquam.','Consequatur aut quam ut accusantium repellendus saepe animi libero.',4),(13,NULL,NULL,'Nesciunt vero mollitia dolore.','Omnis doloremque rem voluptatem corrupti nobis neque aut.',2),(14,NULL,NULL,'Consequatur corrupti excepturi.','Corrupti impedit qui numquam ut nostrum. Et iure qui officia in doloremque voluptate omnis.',4),(15,NULL,NULL,'Amet ipsum laborum.','Labore quisquam vel facere. Iure sunt et id eveniet.',2),(16,NULL,NULL,'Delectus omnis qui.','Expedita modi sapiente veniam nulla deleniti consequuntur.',4),(17,NULL,NULL,'Earum eum ut aut sed expedita.','Adipisci sed corporis ut dolore. Ut saepe est omnis soluta accusantium fuga.',4),(18,NULL,NULL,'Aut eum et.','Quo iste maiores temporibus tempora repellat.',3),(19,NULL,NULL,'Reiciendis sequi possimus unde nesciunt.','Aut numquam incidunt exercitationem occaecati voluptatem ratione necessitatibus quaerat. Alias voluptatem et est maiores excepturi vel aut.',3),(20,NULL,NULL,'Nisi aliquid possimus quidem.','Incidunt minima quia architecto corrupti veniam dicta non fuga. Excepturi dignissimos saepe sit dignissimos modi voluptate.',2),(21,NULL,NULL,'Aut distinctio magni in maiores.','Corrupti eos et saepe accusantium commodi.',4),(22,NULL,NULL,'Iste dignissimos nihil nam.','Consequuntur officia corporis accusamus asperiores quia id similique ut. Dolorem et ea laudantium est occaecati et.',3),(23,NULL,NULL,'Perferendis dolores nemo voluptas.','Quae voluptas est excepturi cum. Quia amet quia incidunt ab id.',1),(24,NULL,NULL,'Esse omnis dignissimos sed.','Debitis dolor dolores maxime possimus beatae in.',1),(25,NULL,NULL,'Qui dolorem quia quaerat nisi corporis.','Ut officiis voluptas minima dolor.',1);
/*!40000 ALTER TABLE `example` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `folder`
--

DROP TABLE IF EXISTS `folder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `folder` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder_id` int unsigned DEFAULT NULL,
  `resource` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folder`
--

LOCK TABLES `folder` WRITE;
/*!40000 ALTER TABLE `folder` DISABLE KEYS */;
INSERT INTO `folder` VALUES (1,NULL,NULL,'root',NULL,NULL),(2,NULL,NULL,'resource',1,1),(3,NULL,NULL,'documents',1,NULL),(4,NULL,NULL,'graphics',1,NULL),(5,NULL,NULL,'other',1,NULL);
/*!40000 ALTER TABLE `folder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form`
--

DROP TABLE IF EXISTS `form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `form` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` tinyint(1) NOT NULL,
  `edit` tinyint(1) NOT NULL,
  `add` tinyint(1) NOT NULL,
  `delete` tinyint(1) NOT NULL,
  `pagination` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form`
--

LOCK TABLES `form` WRITE;
/*!40000 ALTER TABLE `form` DISABLE KEYS */;
INSERT INTO `form` VALUES (1,NULL,NULL,'Example','example',1,1,1,1,5);
/*!40000 ALTER TABLE `form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form_field`
--

DROP TABLE IF EXISTS `form_field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `form_field` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browse` tinyint(1) NOT NULL,
  `read` tinyint(1) NOT NULL,
  `edit` tinyint(1) NOT NULL,
  `add` tinyint(1) NOT NULL,
  `relation_table` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation_column` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_id` int unsigned NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_field`
--

LOCK TABLES `form_field` WRITE;
/*!40000 ALTER TABLE `form_field` DISABLE KEYS */;
INSERT INTO `form_field` VALUES (1,NULL,NULL,'Title','text',1,1,1,1,NULL,NULL,1,'name'),(2,NULL,NULL,'Description','text_area',1,1,1,1,NULL,NULL,1,'description'),(3,NULL,NULL,'Status','relation_select',1,1,1,1,'status','name',1,'status_id');
/*!40000 ALTER TABLE `form_field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `media` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint unsigned NOT NULL,
  `uuid` bigint unsigned NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_role`
--

DROP TABLE IF EXISTS `menu_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_role` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menus_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_role`
--

LOCK TABLES `menu_role` WRITE;
/*!40000 ALTER TABLE `menu_role` DISABLE KEYS */;
INSERT INTO `menu_role` VALUES (1,'guest',1),(2,'user',1),(3,'admin',1),(4,'user',2),(5,'admin',2),(6,'user',3),(7,'admin',3),(8,'user',4),(9,'admin',4),(10,'user',5),(11,'admin',5),(12,'user',6),(13,'admin',6),(14,'user',7),(15,'admin',7),(16,'user',8),(17,'admin',8),(18,'user',9),(19,'admin',9),(22,'admin',11),(23,'admin',12),(24,'admin',13),(25,'admin',14),(26,'admin',15),(27,'admin',16),(28,'admin',17),(29,'guest',18),(30,'user',18),(31,'admin',18),(32,'guest',19),(33,'user',19),(34,'admin',19),(35,'admin',20),(36,'admin',21),(37,'admin',22),(38,'admin',23),(39,'admin',24),(40,'admin',25),(43,'admin',10),(44,'user',10);
/*!40000 ALTER TABLE `menu_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menulist`
--

DROP TABLE IF EXISTS `menulist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menulist` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menulist`
--

LOCK TABLES `menulist` WRITE;
/*!40000 ALTER TABLE `menulist` DISABLE KEYS */;
INSERT INTO `menulist` VALUES (1,'sidebar menu'),(2,'top menu');
/*!40000 ALTER TABLE `menulist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int unsigned DEFAULT NULL,
  `menu_id` int unsigned NOT NULL,
  `sequence` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Dashboard','/','cil-speedometer','link',NULL,1,1),(2,'Team Members','/team-members','cil-user-follow','link',NULL,1,2),(3,'Technology','/technologies','cil-cog','link',NULL,1,3),(4,'Projects','/projects','cil-puzzle','link',NULL,1,4),(5,'Careers','/careers','cil-vector','link',NULL,1,5),(6,'Posts','/posts','cil-newspaper','link',NULL,1,6),(7,'Messages','/messages','cil-chat-bubble','link',NULL,1,7),(8,'The Numbers','/numbers','cil-list-numbered','link',NULL,1,8),(9,'Collaborations','/collaborations','cil-apps','link',NULL,1,9),(10,'Data Requests','/data-requests','cil-inbox','link',NULL,1,10),(11,'Settings',NULL,'cil-calculator','dropdown',NULL,1,11),(12,'Users','/users',NULL,'link',11,1,12),(13,'Edit menu','/menu/menu',NULL,'link',11,1,13),(14,'Edit menu elements','/menu/element',NULL,'link',11,1,14),(15,'Edit roles','/roles',NULL,'link',11,1,15),(16,'BREAD','/bread',NULL,'link',11,1,16),(17,'Email','/mail',NULL,'link',11,1,17),(18,'Pages',NULL,'','dropdown',NULL,2,18),(19,'Dashboard','/',NULL,'link',18,2,19),(20,'Users','/users',NULL,'link',18,2,20),(21,'Settings',NULL,'','dropdown',NULL,2,21),(22,'Edit menu','/menu/menu',NULL,'link',21,2,22),(23,'Edit menu elements','/menu/element',NULL,'link',21,2,23),(24,'Edit roles','/roles',NULL,'link',21,2,24),(25,'BREAD','/bread',NULL,'link',21,2,25);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'test','test','admin@admin.com','077760470','sdasd sadd asd sad asd asda','0','2022-01-24 10:38:53','2022-02-05 20:33:06','2022-02-05 20:33:06'),(2,'test','test','admin@admin.com','+37445451515','sdgffsdfsdfsdf','0','2022-02-07 09:33:22','2022-02-07 09:34:11','2022-02-07 09:34:11'),(3,'dfsdf','test','admin@admin.com','+3744553435','sdffsdfsdf','0','2022-02-07 09:33:58','2022-02-07 09:34:09','2022-02-07 09:34:09'),(4,'Vardan','Harutyunyan','irinat@fast.foundation','+374000000','lololllololo','0','2022-02-07 13:34:37','2022-03-07 12:23:56','2022-03-07 12:23:56'),(5,'Vardan','Harutyunyan','irinat@fast.foundation','+374000000','lololllololo','0','2022-02-07 13:34:39','2022-03-07 12:23:55','2022-03-07 12:23:55'),(6,'olololo','lolololo','irinat@fast.foundation','+374000000000','olololol','0','2022-02-08 07:48:27','2022-03-07 12:23:54','2022-03-07 12:23:54'),(7,'Vardan','Harutyunyan','irinat@fast.foundation','+3746758674867459','barior','0','2022-02-08 11:47:30','2022-03-07 12:23:52','2022-03-07 12:23:52'),(8,'testsdfsdf','ghujfghfhf','mherm@denovosciences.ai','+374787878787','sdfsdfsdfsdfdsf','0','2022-02-11 06:58:11','2022-03-07 12:23:46','2022-03-07 12:23:46'),(9,'test','twst','valtersahakyan4@gmail.com','+37477760470','sad asd ada da as','1','2022-03-07 12:18:18','2022-03-07 12:23:48','2022-03-07 12:23:48'),(10,'test','testttt','valtersahakyan4@gmail.com','+37477760470','hjhasjd asdha sdasdas dasdassdffd','0','2022-03-07 12:23:32','2022-03-07 12:23:45','2022-03-07 12:23:45'),(11,'Anastasia','Kuzminykh','kuzminykh.av@phystech.edu','+79686180707','I studied physics along with programming and biology in Moscow Institute of Physics and Technology at the Department of Biological and Medical Physics. Now I am in my 4th and last year of bachelor degree. I\'m looking for an opportunity to relocate. Do you currently have any open vacancies or the opportunity to participate in your project? I would be glad to cooperate with you. \n\nThank you for your attention and hope to hear from you.\n\nSincerely yours,\nAnastasia Kuzminykh','1','2022-03-11 19:05:12','2022-04-08 06:09:11',NULL),(12,'fdsfsdf','sdfsdfsd','valtersahakyan4@gmail.com','+3747878848484','sdfsdfsdfsdfsdfsdfsdf','0','2022-03-18 08:49:35','2022-04-06 13:14:16','2022-04-06 13:14:16'),(13,'Waldo','Pardon','dragonsap29@gmail.com','+3272498434','Great Job!!!!!','1','2022-04-03 14:54:37','2022-04-08 06:09:07',NULL),(14,'test','sgfdsfgdf','valters@denovosciences.ai','+37477760470','test','0','2022-04-04 05:41:40','2022-04-06 07:24:05','2022-04-06 07:24:05'),(15,'test','sgfdsfgdf','valters@denovosciences.ai','+37477760470','test','0','2022-04-04 05:41:52','2022-04-06 07:24:04','2022-04-06 07:24:04'),(16,'dgfdhfgh','fghfghfgh','valters@denovosciences.ai','+37477760470','dsf srfd  dfgdf df d dfg','0','2022-04-04 05:45:11','2022-04-06 07:24:02','2022-04-06 07:24:02'),(17,'sadasd','asdasdasd','valters@denovosciences.ai','+37477760470','asdsad asd asd as as','0','2022-04-04 05:54:49','2022-04-06 07:24:00','2022-04-06 07:24:00'),(18,'dasdasd','asdasdasd','valters@denovosciences.ai','+37477760470','asdasd asd asd asd asd','0','2022-04-04 06:02:00','2022-04-06 07:23:59','2022-04-06 07:23:59'),(19,'dasdasd','asdasdasd','valters@denovosciences.ai','+37477760470','asdasd asd asd asd asd','0','2022-04-04 06:02:53','2022-04-06 07:23:57','2022-04-06 07:23:57'),(20,'dsaasd','asdasd','valters@denovosciences.ai','+37477760470','asdasd asd sda asd','0','2022-04-04 06:03:46','2022-04-06 07:23:55','2022-04-06 07:23:55'),(21,'vdsfgdsf','sdfsdfsdf','valters@denovosciences.ai','+37477760470','sdfsfsfsdf','0','2022-04-06 12:37:06','2022-04-06 13:14:14','2022-04-06 13:14:14'),(22,'sdfsdfs','sdfsdfsdf','valters@denovosciences.ai','+37477760470','sdfsdfsdf sdfsd fdssd','0','2022-04-06 12:40:46','2022-04-06 13:14:08','2022-04-06 13:14:08'),(23,'sfsdfs','sdfsdf','valters@denovosciences.ai',NULL,'sdfsdfsdf','0','2022-04-06 12:41:08','2022-04-06 13:14:06','2022-04-06 13:14:06'),(24,'asdasd','asdasdasd','valters@denovosciences.ai',NULL,'adsasd asda dsa dasd asd','0','2022-04-06 13:13:33','2022-04-06 13:14:04','2022-04-06 13:14:04'),(25,'test','test','valters@denovosciences.ai',NULL,'test test','1','2022-04-06 13:14:39','2022-04-08 06:08:56','2022-04-08 06:08:56'),(26,'test','test','valtersahakyan4@gmail.com',NULL,'sad sad asd sad','0','2022-04-07 08:52:17','2022-04-08 06:08:59','2022-04-08 06:08:59'),(27,'sadfas','asdasd','valters@denovosciences.ai',NULL,'asdasdasdasdas','0','2022-04-07 11:17:59','2022-04-08 06:09:00','2022-04-08 06:09:00'),(28,'test','test','valters@denovosciences.ai',NULL,'test','1','2022-04-08 06:03:40','2022-04-08 06:09:02','2022-04-08 06:09:02'),(29,'test','test','valtersahakyan4@gmail.com',NULL,'asdsa asd asd asd sadasd','1','2022-04-08 06:05:44','2022-04-08 06:09:04','2022-04-08 06:09:04'),(30,'Valter','Sahakyan','valters@denovosciences.ai',NULL,'test test ets  sadas fsd','1','2022-04-08 06:08:19','2022-04-08 06:08:54','2022-04-08 06:08:54'),(31,'test','test','valters@denovosciences.ai',NULL,'ad asd asd asd asd asd','0','2022-04-08 06:12:19','2022-04-11 10:29:39','2022-04-11 10:29:39'),(32,'Valter','Sahakyan','valters@denovosciences.ai','+37477760470','orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum','0','2022-04-08 06:15:38','2022-04-11 10:29:36','2022-04-11 10:29:36'),(33,'asdas','asdasd','valters@denovosciences.ai','+37477760470','asdas','0','2022-04-18 11:01:38','2022-04-20 12:25:28','2022-04-20 12:25:28'),(34,'sadas','asdas','admin@admin.com','+37477760470','asdasd','0','2022-04-18 11:19:32','2022-04-20 12:25:26','2022-04-20 12:25:26'),(35,'Richard','Minasian','rminas6@gmail.com','+12019620553','My name is Richard Minasian and I am the Chair of the 2022 AYF Internship in Armenia Summer Program. This year\'s program will be from June 11th to August 12th (these are the dates they will be able to intern for you!)\n\nI am reaching out because I sent you an email regarding a volunteer intern possibility and would love to have our program participant volunteer for you. Please let me know if this is a possibility.','1','2022-04-22 15:11:50','2022-04-27 13:37:21',NULL),(36,'Tiffany','Young','tiffanyyoung@maoinc.com','+17349418980','Mid-America Overseas (MAO) Detroit Office is reaching out today to let you know that we are ready and able to assist your company with any of your international shipping needs. MAO DTW would really like the opportunity to work with you and we are excited to earn your business in this market along with finding out what needs we can help your company fulfill.','0','2022-04-27 20:13:41','2022-04-27 20:13:41',NULL),(37,'gsasasas','asas','valtersahakyan4@gmail.com','+37477760470','asdas asd asd asd s asd assd','0','2022-05-03 07:19:55','2022-05-06 11:02:31','2022-05-06 11:02:31'),(38,'test','from server','valtersahakyan4@gmail.com','+37477760470','ads asd asd asd asd','0','2022-05-04 10:12:25','2022-05-06 11:02:25','2022-05-06 11:02:25'),(39,'Rick','Carlson','rc0322@pronovapartners.com','+18304654676','ProNova Partners would like to collaborate with you on the sale of your business ASAP.  Buyer demand is sky-high for our offerings - we closed ALMOST ALL of the new engagements we were hired for nationwide in 2021 despite','0','2022-06-02 13:25:03','2022-06-02 13:25:03',NULL),(40,'Rick','Carlson','rc0322@pronovapartners.com','+18304654676','ProNova Partners would like to collaborate with you on the sale of your business ASAP.  Buyer demand is sky-high for our offerings - we closed ALMOST ALL of the new engagements we were hired for nationwide in 2021 despite','0','2022-06-02 13:25:08','2022-06-09 07:07:20','2022-06-09 07:07:20'),(41,'Lilit','Baghdasaryan','lilit_baghdasaryan@aybschool.am','+37498979026','«Այբ» ավագ դպրոցը յուրաքանչյուր տարի իր աշակերտների և շրջանավարտների համար անցկացնում է «Սովորում եմ աշխատելով» աշխատափորձի տոնավաճառ/Ayb Internship Fair 2022 ամենամյա միջոցառում։  \nՍույն նամակով հրավիրում ենք ձեզ հուլիսի 1-ին որպես կազմակերպություն մասնակցելու միջոցառմանը եւ հնարավորության դեպքում առաջարկելու ամառային պրակտիկա տոնավաճառի մասնակիցներին։\nՀավելյալ տեղեկությունների համար խնդրուն են տրամադրել e-mail հասցե։\nՀետագա համագործակցության ակնկալիքով և հարգանքով՝\nԼիլիթ Բաղդասարյան','0','2022-06-08 11:47:35','2022-06-09 07:07:14','2022-06-09 07:07:14'),(42,'Lilit','Baghdasaryan','lilit_baghdasaryan@aybschool.am','+37498979026','«Այբ» ավագ դպրոցը յուրաքանչյուր տարի իր աշակերտների և շրջանավարտների համար անցկացնում է «Սովորում եմ աշխատելով» աշխատափորձի տոնավաճառ/Ayb Internship Fair 2022 ամենամյա միջոցառում։  \nՍույն նամակով հրավիրում ենք ձեզ հուլիսի 1-ին որպես կազմակերպություն մասնակցելու միջոցառմանը եւ հնարավորության դեպքում առաջարկելու ամառային պրակտիկա տոնավաճառի մասնակիցներին։\nՀավելյալ տեղեկությունների համար խնդրուն են տրամադրել e-mail հասցե։\nՀետագա համագործակցության ակնկալիքով և հարգանքով՝\nԼիլիթ Բաղդասարյան','0','2022-06-08 11:47:36','2022-06-09 07:07:09','2022-06-09 07:07:09'),(43,'Lilit','Baghdasaryan','lilit_baghdasaryan@aybschool.am','+37498979026','«Այբ» ավագ դպրոցը յուրաքանչյուր տարի իր աշակերտների և շրջանավարտների համար անցկացնում է «Սովորում եմ աշխատելով» աշխատափորձի տոնավաճառ/Ayb Internship Fair 2022 ամենամյա միջոցառում։  \nՍույն նամակով հրավիրում ենք ձեզ հուլիսի 1-ին որպես կազմակերպություն մասնակցելու միջոցառմանը եւ հնարավորության դեպքում առաջարկելու ամառային պրակտիկա տոնավաճառի մասնակիցներին։\nՀավելյալ տեղեկությունների համար խնդրուն են տրամադրել e-mail հասցե։\nՀետագա համագործակցության ակնկալիքով և հարգանքով՝\nԼիլիթ Բաղդասարյան','0','2022-06-08 11:47:39','2022-06-08 11:47:39',NULL);
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_10_11_085455_create_notes_table',1),(5,'2019_10_12_115248_create_status_table',1),(6,'2019_11_08_102827_create_menus_table',1),(7,'2019_11_13_092213_create_menurole_table',1),(8,'2019_12_10_092113_create_permission_tables',1),(9,'2019_12_11_091036_create_menulist_table',1),(10,'2019_12_18_092518_create_role_hierarchy_table',1),(11,'2020_01_07_093259_create_folder_table',1),(12,'2020_01_08_184500_create_media_table',1),(13,'2020_01_21_161241_create_form_field_table',1),(14,'2020_01_21_161242_create_form_table',1),(15,'2020_01_21_161243_create_example_table',1),(16,'2020_03_12_111400_create_email_template_table',1),(17,'2021_12_02_102145_create_team_members_table',1),(18,'2021_12_03_131700_create_technologies_table',1),(19,'2021_12_06_065536_create_projects_table',1),(20,'2021_12_06_065617_create_careers_table',1),(21,'2021_12_06_071618_create_posts_table',1),(22,'2021_12_06_131310_create_messages_table',1),(23,'2021_12_07_095926_create_numbers_table',1),(24,'2021_12_07_100057_create_collaborations_table',1),(25,'2022_01_18_103649_create_data_requests_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',1),(2,'App\\Models\\User',2),(2,'App\\Models\\User',3),(2,'App\\Models\\User',4),(2,'App\\Models\\User',5),(2,'App\\Models\\User',6),(2,'App\\Models\\User',7),(2,'App\\Models\\User',8),(2,'App\\Models\\User',9),(2,'App\\Models\\User',10),(2,'App\\Models\\User',11);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applies_to_date` date NOT NULL,
  `users_id` int unsigned NOT NULL,
  `status_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
INSERT INTO `notes` VALUES (1,'Velit vel fugiat voluptatum.','Debitis veritatis nisi consequatur hic sint repellat. Sit dolores eaque recusandae saepe eius laudantium. Explicabo reprehenderit placeat quaerat quibusdam aut maiores deserunt.','repellat dolor','1988-06-12',6,4,NULL,NULL),(2,'Repudiandae occaecati omnis aperiam corporis provident.','Eveniet porro tenetur et autem maxime. Eos qui dolorum voluptas accusamus cumque velit. Laboriosam sit sunt voluptate aperiam.','quod commodi','1982-09-03',10,1,NULL,NULL),(3,'Magni quos ratione aut sit.','Culpa itaque rem quia dicta accusantium distinctio. Repellat et dolore accusantium et veniam corrupti. Iure accusamus in explicabo qui. Rerum aut consequatur sed possimus autem aut.','quia necessitatibus','2011-10-19',10,3,NULL,NULL),(4,'Fuga amet harum voluptates quos laudantium.','Omnis est delectus assumenda sed culpa perferendis voluptas eveniet. Omnis a eligendi occaecati adipisci non. Dolores repudiandae delectus cum.','qui sit','2005-10-02',8,1,NULL,NULL),(5,'Fugit officia enim et.','Magni eum qui voluptatum dicta. Omnis iste sed explicabo dolorum quos eum repellat. Similique aut consequatur ea nihil ipsam ut. Quae rerum quo et exercitationem.','voluptates','1977-02-20',2,2,NULL,NULL),(6,'Ut earum voluptatem rerum tenetur numquam.','Est dignissimos et dolore numquam animi tempora. Consequuntur quae ut eum fuga velit rerum. Tenetur quo ratione aspernatur dolor dolorum quasi maxime.','occaecati culpa','2004-12-09',9,2,NULL,NULL),(7,'Sed voluptatem ipsum nulla illo doloremque.','Eos officia vitae ut iusto commodi rem error. Nisi qui amet ab aut. Quis voluptas ut quidem quidem ut voluptatibus ea. Et minus sunt dignissimos sint dolor sit laboriosam.','ratione quisquam','1988-03-15',7,4,NULL,NULL),(8,'Pariatur fuga omnis officia.','Officia est facere placeat rem delectus sint voluptas non. Error porro earum aut distinctio debitis. Repellendus dignissimos in eveniet blanditiis qui sit.','voluptas voluptatibus','2004-02-23',10,4,NULL,NULL),(9,'Tenetur incidunt temporibus nemo alias.','Et aliquid dolorem voluptatem consequuntur quo sint minus eaque. Quis ad est modi quisquam aspernatur voluptatem. Recusandae dolorem ex iure dolorem. Quidem quod voluptate ut quam sunt assumenda et.','magni non','1986-09-07',10,4,NULL,NULL),(10,'Dolorem omnis excepturi saepe.','Consequuntur dolorum quod amet laborum blanditiis occaecati autem ea. Qui voluptatem fugit velit voluptatibus aperiam provident mollitia voluptatem. Doloribus tempore ex modi rerum et et. Possimus voluptatem enim quos necessitatibus esse rerum enim.','voluptas ea','1994-01-01',8,1,NULL,NULL),(11,'Temporibus laboriosam voluptatem et eum.','In sed ullam dolor doloribus. Fugiat sit ipsum voluptate est magni aut. Sint magnam quos animi dicta mollitia ratione.','molestiae laudantium','2015-05-20',11,4,NULL,NULL),(12,'Fugiat sit quidem et deserunt.','Quae vel quisquam ducimus qui dolorem molestiae amet qui. Consequatur qui perspiciatis vitae. Labore ducimus aliquid qui aut sit ab molestiae odio.','ut','2019-09-27',3,1,NULL,NULL),(13,'Eveniet corporis sapiente veritatis.','Voluptatem vel est quae incidunt. Odit incidunt eligendi qui et. Deserunt non placeat maiores voluptatem tempora.','quod','2012-04-23',10,1,NULL,NULL),(14,'Deleniti quos in sed porro.','Id odio odit voluptatem possimus. Alias ab nemo dolor odit perspiciatis rerum. Porro sit quos facere inventore saepe dolores saepe. Illum rerum voluptatem maiores.','aspernatur vero','2003-06-12',11,3,NULL,NULL),(15,'Vitae ipsam vero et ut.','Velit aut velit voluptatem nihil voluptatem. Praesentium quas asperiores corporis. Sunt et numquam molestiae nobis repellat in. Doloribus iste nam ab illo.','quidem','2006-06-13',6,2,NULL,NULL),(16,'Assumenda facere adipisci cum ut nulla.','Quis est libero quis asperiores. Pariatur qui delectus excepturi. Repellendus magnam magni et nihil non dicta error cumque.','ullam','1992-04-08',9,4,NULL,NULL),(17,'Et reprehenderit ea illo.','Nisi distinctio dolor consequatur vel consectetur nisi. Maiores expedita vel ratione voluptas quis provident. Excepturi voluptatum ea ea quos qui sit ducimus.','quis','2009-05-04',3,2,NULL,NULL),(18,'Aut nam explicabo.','Porro qui recusandae aut iste cum exercitationem nulla. Aut qui eos voluptatem repudiandae. Non est neque dolor unde sit ea. Ad est aliquam amet voluptatum.','veniam consequatur','1972-09-06',11,3,NULL,NULL),(19,'Totam facere a velit.','Quibusdam id iure sed praesentium suscipit eum doloribus. Ut animi deleniti aliquid delectus. Sit molestiae aspernatur repellendus et vitae voluptatem.','explicabo','1970-06-19',2,4,NULL,NULL),(20,'Ab doloremque deserunt quas.','Quia exercitationem aut ab consectetur. Beatae molestiae ex reiciendis eveniet. Vero nihil repellat eos voluptatem accusantium expedita animi unde. Et laboriosam delectus qui libero sed aut.','atque nisi','2005-01-11',7,2,NULL,NULL),(21,'Aut molestias nemo sed est.','Voluptatem corporis fuga magni inventore nisi error dolor esse. Reprehenderit eaque laboriosam rerum porro. Odio non itaque necessitatibus reprehenderit similique unde. Tempore placeat et provident recusandae numquam voluptatem et minima.','ullam tenetur','1990-06-10',7,2,NULL,NULL),(22,'Corporis sunt porro aut.','Aliquid nemo et pariatur repellendus ullam. Soluta omnis reprehenderit ipsa culpa veniam ab.','molestiae voluptatem','2005-01-25',9,4,NULL,NULL),(23,'Tempore sit autem amet.','Rem voluptatem autem ipsam vero placeat. Dicta provident eveniet tempora perferendis quia. Esse laboriosam expedita voluptatem voluptates sed et modi. Sunt aperiam reprehenderit fugiat eos veniam dolores ut.','rerum atque','1970-02-28',9,4,NULL,NULL),(24,'Repellendus autem modi omnis possimus.','Quo blanditiis debitis accusamus totam quas amet. Adipisci alias consequuntur est consectetur non vel. Esse distinctio nobis et magni molestiae at placeat.','cumque','2019-11-08',7,4,NULL,NULL),(25,'Impedit qui earum magnam hic repudiandae.','Esse quia et quam aut nam. Aut natus numquam quae sunt. Voluptatum rerum aspernatur quod enim nemo voluptatum optio.','culpa beatae','1989-03-20',3,4,NULL,NULL),(26,'Ab voluptatum ullam voluptas aut.','Impedit amet ratione et voluptatem dolorem quis maxime magnam. Exercitationem ad minima a provident quaerat sit aut.','cupiditate','2019-09-12',2,3,NULL,NULL),(27,'Eos sit quod.','Quia omnis autem rem reprehenderit pariatur qui aut. Qui ea at saepe tempora.','et accusantium','1979-08-09',2,4,NULL,NULL),(28,'Omnis voluptatem suscipit.','Laboriosam et molestias quasi quibusdam vel sit officia. Architecto qui aperiam tenetur. Quod voluptatem aliquam beatae ab voluptatem repudiandae error. Est hic quia ipsum velit iste.','eius cupiditate','1975-05-12',7,1,NULL,NULL),(29,'Harum ea quia qui cum optio.','Voluptatem qui quia fuga explicabo maiores. Soluta quasi tempora quasi asperiores. Velit dolores velit nemo distinctio. Adipisci odio laudantium quis in doloribus qui quis.','iste','2016-12-15',11,4,NULL,NULL),(30,'Nostrum et occaecati fugiat eius.','Et ratione occaecati explicabo corrupti veniam dolor. Vero esse modi non quasi sit debitis. Iusto dicta fugit amet ut.','aut','2015-01-24',4,1,NULL,NULL),(31,'Iste dolore tenetur voluptatibus quia.','Quasi veniam ducimus doloremque tenetur eveniet. Sit cum dicta temporibus exercitationem quasi illo quia. Soluta sapiente harum assumenda ut optio sed esse. Ad aut fugiat tempore aut et ipsa aut. Voluptate doloribus reiciendis corrupti sed.','quidem','2001-06-08',9,2,NULL,NULL),(32,'Dolore dolores odio dicta ratione.','Dolores distinctio quod et ipsum tenetur ut impedit ducimus. Nisi omnis et eum maxime ut. Commodi praesentium odio beatae dolores. Perferendis corporis omnis voluptatibus ad voluptas.','sapiente','1995-02-22',6,4,NULL,NULL),(33,'Neque incidunt earum.','Eveniet cupiditate ea atque sed dolore quisquam commodi. Inventore dolor alias eligendi est et. Rem distinctio architecto ut repellat. Dolorum est reprehenderit dolor minima quia.','et eaque','2006-01-26',2,3,NULL,NULL),(34,'Totam suscipit consequatur corporis.','Consectetur quia ut a quis eveniet. Et saepe placeat temporibus quod qui laudantium. Ut placeat itaque autem ut est et ut. Facilis velit dolores cum.','deserunt','2003-02-12',7,3,NULL,NULL),(35,'Qui eos eius earum.','Dolor sapiente qui voluptates inventore esse laborum. Debitis omnis veritatis dolorem praesentium accusamus sapiente sequi eligendi.','aut','1973-07-05',11,2,NULL,NULL),(36,'Et praesentium repellendus excepturi molestias distinctio.','Qui minima voluptatum a temporibus consequatur. Reprehenderit dolores quaerat deleniti nobis illo. Dolorum qui ex aliquam non.','enim','1997-05-25',9,4,NULL,NULL),(37,'Iste est quia sint recusandae consequatur.','Molestias labore molestias quaerat earum. Ipsa eius ut similique qui. Unde distinctio ipsum nisi quasi nam illum ratione.','nulla aut','1981-06-16',3,4,NULL,NULL),(38,'Sed laboriosam porro quas cupiditate perspiciatis.','Quo dignissimos eos animi repudiandae asperiores. Exercitationem est architecto doloremque ab dolor officiis. Ut nobis dignissimos modi ratione.','iste accusamus','1993-04-12',9,4,NULL,NULL),(39,'Labore laborum dolorum sed.','Rerum blanditiis consequatur aliquid ex nesciunt debitis voluptates. Ut non dolore voluptas exercitationem. Necessitatibus ut autem aut et odit dolores nemo. Consequatur nulla sint tenetur ipsa.','reprehenderit illo','1989-01-02',9,2,NULL,NULL),(40,'Optio non sequi eius.','Esse rerum tenetur rem dicta aut veniam aliquid ipsa. Voluptatem ut aspernatur et incidunt. Optio cupiditate possimus veritatis architecto rerum repellat voluptates.','consequatur','2004-08-21',4,3,NULL,NULL),(41,'Non impedit expedita et.','Molestiae ut omnis praesentium rerum eum. Voluptas enim quia autem quae incidunt nam fugiat. At occaecati debitis voluptatem hic voluptates adipisci omnis.','tempore temporibus','1995-04-30',3,2,NULL,NULL),(42,'Ipsa iste architecto eaque eligendi.','Earum quo exercitationem et numquam perferendis voluptatum. Et ipsum corporis numquam aut quod. Perferendis minima debitis distinctio et. Rerum pariatur iusto qui esse sunt enim.','reprehenderit','1987-04-14',11,4,NULL,NULL),(43,'Quas et aut accusamus.','Non accusantium perferendis amet perspiciatis corrupti rem. Qui eius autem sit dolores. Quam voluptatem nihil eos nobis eum odit corrupti aut. Quasi ex provident enim accusamus in necessitatibus amet.','qui','2011-11-14',2,3,NULL,NULL),(44,'Facilis quia quia inventore modi.','Est maxime voluptatem dolor dolorum illum. Ratione dolorum iure expedita error et sint. Aut consectetur repellendus illo ut odio quidem. Accusantium est ut sed qui quae quidem temporibus.','fuga','1982-08-05',7,3,NULL,NULL),(45,'Optio laudantium sed.','At dolorum exercitationem voluptas reiciendis qui ea. Odio impedit expedita officia. Fugiat veniam occaecati laudantium quasi est aut. Beatae est sunt quis adipisci aliquid. Et delectus qui labore quia modi rem.','dignissimos cupiditate','2008-12-13',5,2,NULL,NULL),(46,'Labore deserunt ullam.','Inventore odit et porro et sunt. Ut veniam porro repellendus voluptas rerum dolore eos. Nam molestiae ratione labore qui. Non sint totam quaerat voluptas.','facere molestiae','1989-09-29',5,1,NULL,NULL),(47,'Non pariatur recusandae quo.','Commodi recusandae commodi perferendis quisquam nesciunt adipisci totam neque. Temporibus consequuntur debitis dolore ut sequi dolor qui. Velit harum minus excepturi et fuga.','dolorum illo','1980-08-30',10,3,NULL,NULL),(48,'Eos reiciendis dolor veniam omnis est.','Et enim ea rerum. Accusamus eligendi repellendus possimus ipsum doloremque recusandae et. Quia provident quis est culpa totam quo voluptatibus eos. Quod laborum delectus at assumenda tenetur molestiae. Dignissimos ratione numquam repellat.','inventore recusandae','1996-06-07',10,1,NULL,NULL),(49,'Esse rerum dolorum nisi assumenda.','Aperiam voluptatem sed cumque iusto ut esse ipsa. Optio autem est nostrum et enim. Qui tempore et ut et at minus asperiores. Architecto vero nesciunt sunt. Distinctio repudiandae delectus neque architecto voluptatem dolores accusamus.','aperiam ab','2003-07-11',2,2,NULL,NULL),(50,'Possimus rerum quisquam dolorem.','Nulla id maiores consequuntur qui aut est. Qui quis necessitatibus ipsa culpa. Rerum eligendi distinctio in ea.','et','2011-11-19',8,1,NULL,NULL),(51,'Dolorem aut suscipit qui aspernatur.','Ad eius aspernatur quasi omnis magni nisi a. Dolorum necessitatibus repellat magni molestias sint est. Ipsa iusto laudantium non ipsa qui enim.','magnam','2004-07-23',8,2,NULL,NULL),(52,'Dolorem aut aut.','Quas dolore odio quas at eos nam. Iste est distinctio eaque. Ut tempora natus excepturi tempora dolor sit. Officiis placeat tenetur enim natus ut.','aut','1972-05-18',9,1,NULL,NULL),(53,'Aut possimus dolorum natus.','Repudiandae consequatur repudiandae id nam illo quia distinctio. Voluptatem quod voluptatem delectus possimus fugit.','ipsum doloremque','2005-11-21',10,4,NULL,NULL),(54,'Consequatur aut dignissimos id sunt.','Distinctio provident impedit aliquam doloremque. Voluptatem omnis distinctio consequatur ea. Voluptates facere dolore saepe et fuga quo recusandae. Consequatur eligendi aliquid nulla.','iste','2003-03-19',3,3,NULL,NULL),(55,'Sed nesciunt quia illo ullam.','In vel aut doloremque labore. Sed est laborum est dolorem. Doloremque commodi tempore quae nisi.','quae','2010-01-13',8,3,NULL,NULL),(56,'Fugiat voluptatibus soluta est itaque.','Quisquam numquam et error et possimus commodi autem. Sit illo consequatur et placeat. Occaecati sint fugiat nisi. Libero cupiditate nihil mollitia ut est eos aut.','minus','1973-02-16',3,1,NULL,NULL),(57,'Totam aut qui praesentium hic voluptatibus.','Illum ducimus vel nihil sunt. Omnis ut reprehenderit veritatis distinctio hic possimus quia. Perspiciatis aspernatur unde nostrum cumque sed. Dolor nulla beatae reiciendis iure omnis corrupti quia.','ea','1994-11-02',7,1,NULL,NULL),(58,'Quisquam nam aut autem.','Sit voluptas quis assumenda neque dolor aut. Adipisci et quae ullam culpa rerum. Voluptatem odio sint vel doloribus. Excepturi sapiente voluptates deleniti saepe unde.','quia unde','2010-12-29',3,3,NULL,NULL),(59,'Nemo recusandae blanditiis animi.','Sit nemo perspiciatis commodi. Consequatur impedit corporis necessitatibus ducimus voluptatem ut voluptates. Voluptate omnis voluptatum id assumenda ipsa placeat.','qui','2003-03-17',3,4,NULL,NULL),(60,'Ratione provident consequatur rerum consectetur.','Ut sed voluptatibus laudantium cupiditate numquam facere. Quia sit dolores illum quo dolorem ipsam. Tempore dolorem et doloremque sint perspiciatis quae a. Voluptatem est optio incidunt quam corporis enim adipisci repellendus.','quas','1989-11-21',7,3,NULL,NULL),(61,'Eaque et sint beatae impedit odio.','Similique similique assumenda officia et dolore. Neque ad qui alias quo est dolores eos. Et doloribus sapiente sit quis.','est','2021-05-16',8,2,NULL,NULL),(62,'Rerum vel maxime quos.','Omnis et ut et unde aut recusandae. Aut quos voluptate distinctio voluptatem ipsam distinctio. Voluptas illum exercitationem non ab. Reiciendis possimus sequi provident consequuntur repellendus natus. Nemo in ut quas et consequuntur laborum est.','est quod','1990-06-28',5,4,NULL,NULL),(63,'Et facere assumenda ea fuga voluptatem.','Qui sit sit ut consequatur animi nihil aliquid. In aut perspiciatis vero et suscipit sit. Velit qui odit voluptas voluptate porro sed.','accusamus dolor','2009-02-09',5,3,NULL,NULL),(64,'Corrupti reiciendis doloremque esse vel optio.','Temporibus vero ut aut ut animi et. Incidunt ea dolorem aliquam et animi dolore quae. Et neque nesciunt excepturi temporibus deserunt et labore. Voluptas et aspernatur sint voluptas veritatis rem distinctio.','tempora qui','2013-09-08',10,1,NULL,NULL),(65,'Nesciunt libero et.','Maxime quisquam similique modi non. Voluptatem quos voluptas inventore veniam culpa non incidunt. Est ut corrupti atque consequuntur repellat natus.','similique et','1982-08-31',3,3,NULL,NULL),(66,'Labore minima nobis hic sit.','Officia vel aut tempora hic excepturi voluptas. Ut magnam nihil ullam eveniet voluptas quia omnis. Consequatur minima omnis maiores dolores. Sed ratione doloremque sequi deleniti enim blanditiis nisi nostrum.','animi','1989-03-31',2,4,NULL,NULL),(67,'Mollitia neque fugit.','Molestias sint tempore quibusdam non dolores. Doloremque aliquid labore omnis iusto quibusdam atque. Officiis velit ut facilis amet minima. Impedit totam vel enim mollitia sunt tempore. Maxime provident quibusdam numquam soluta reprehenderit.','atque','1975-08-05',2,4,NULL,NULL),(68,'Aut fuga nemo sint officia culpa.','Est tempora nam ut corporis nesciunt eveniet debitis. Ea dicta sed molestiae tempore. Voluptatem nihil labore animi dolorem. Dolorem ab adipisci quidem quisquam vel vitae.','omnis','2001-04-13',4,2,NULL,NULL),(69,'Ducimus qui ex libero eveniet.','Velit amet pariatur omnis quia excepturi odio rem. Ut sed rem placeat. Omnis sed et officiis esse voluptatum hic expedita rerum.','soluta sapiente','1997-02-06',10,1,NULL,NULL),(70,'Veniam neque accusantium.','Eum nisi sint consectetur quos accusantium deleniti voluptas quo. Cumque soluta eligendi eaque. Non perspiciatis praesentium voluptas qui qui. Inventore omnis molestiae repellat facere nesciunt.','non mollitia','1981-01-10',7,4,NULL,NULL),(71,'Nostrum labore quibusdam tempora ratione.','Totam aut maxime accusantium et. Qui aliquid quibusdam et necessitatibus. Aut repellat magnam sint tenetur maxime dicta eveniet. Et quisquam eum iusto molestias qui.','maiores','1995-11-24',11,2,NULL,NULL),(72,'Aspernatur reiciendis et enim cumque.','Et sint repellat assumenda qui minus adipisci. Dicta vitae distinctio corporis in necessitatibus eligendi aliquam. Qui numquam iure expedita. Ullam placeat qui voluptatem sit enim corrupti.','inventore et','2010-12-10',5,1,NULL,NULL),(73,'Ut atque minima.','Voluptatem tempora ullam error. Praesentium dolor necessitatibus quis ea voluptas assumenda amet ea. Nihil expedita et laborum facere natus blanditiis.','voluptas amet','2008-11-23',5,4,NULL,NULL),(74,'Modi molestiae doloribus vitae.','Voluptas harum rerum labore reprehenderit qui. Quis reprehenderit recusandae et quas soluta. Iste eligendi repellendus et unde. Laborum omnis et rerum minus porro ipsum.','voluptatem','2002-07-27',7,2,NULL,NULL),(75,'Nam cumque reiciendis.','Et quisquam officiis inventore quibusdam. Eius laboriosam aut voluptas fugiat. Aut voluptatem libero voluptatibus iusto quibusdam.','fugiat repudiandae','2005-07-14',2,4,NULL,NULL),(76,'Pariatur quae similique neque.','Aliquid natus autem fugit et et numquam sint. Ad repellendus incidunt consequatur repellendus hic consectetur cum velit. Eligendi et doloribus quidem vero. Illum a ab officia voluptatibus ipsam omnis labore blanditiis. Ducimus officiis et a quisquam repellendus aliquam in maxime.','quos','2007-07-15',6,2,NULL,NULL),(77,'Dolor quia et nihil sint.','Qui aliquid minus accusantium facere omnis iure sunt. Saepe facere rerum possimus vero rerum. Ipsum eius quia quasi modi minus corporis natus ut.','sint','1991-09-07',4,4,NULL,NULL),(78,'Fugit inventore unde est sed.','Officia blanditiis molestiae ea velit. Consequuntur et quis sint neque quia laudantium. Ex neque veritatis nihil accusantium. Porro ratione odit vel quaerat dolorum iste quia.','voluptatem','1972-06-10',3,4,NULL,NULL),(79,'Sequi numquam commodi debitis sed.','Recusandae ut accusamus velit quis soluta quibusdam optio quae. Praesentium est ipsa et odit. Quis recusandae asperiores repellendus enim. Alias est ut at quos et eius sed.','voluptate velit','1986-09-30',11,4,NULL,NULL),(80,'Et occaecati ratione.','Tempora suscipit repellendus architecto ut dolor voluptas sed. Perspiciatis aut vel perferendis incidunt ea architecto. Sit animi voluptatibus aut nihil quod inventore ut. Sunt quia voluptatem deserunt occaecati corrupti qui dolorum. Est pariatur sit eum deleniti rerum sunt dolores.','fugit','2017-03-07',8,2,NULL,NULL),(81,'Sint distinctio repellendus fugit consequatur voluptatum.','Illo soluta quo nam recusandae non. Dolores ut labore vitae quis dolorem incidunt quia. Quia nostrum maxime sunt tenetur. Voluptate soluta sunt totam.','quia est','1984-05-12',8,2,NULL,NULL),(82,'Labore in eveniet blanditiis temporibus.','Iusto et itaque modi quia voluptatum. Nisi vero molestias culpa laudantium. Soluta laudantium ut esse impedit velit.','aliquam necessitatibus','2013-08-04',10,2,NULL,NULL),(83,'Quis dignissimos sit optio.','Delectus qui exercitationem veniam repellat ea. Veniam repellat molestias odit perferendis molestiae fugiat. Libero eaque aliquid perspiciatis doloremque velit. Odio molestias ad fugit architecto voluptate.','enim','1987-01-23',3,2,NULL,NULL),(84,'Deserunt aspernatur dolore rerum est est.','Consectetur pariatur aut in. Consequatur voluptates laudantium illum debitis quia iste. Voluptate distinctio nam dolores sunt voluptatem.','dolorem','1974-08-11',6,4,NULL,NULL),(85,'Et officia sed.','Quaerat consectetur voluptate ratione asperiores qui libero. Aspernatur voluptates dolores ducimus nihil et. Odit est rerum quis quas illo accusamus est. Magni voluptates ut reiciendis quia accusamus illo iure. Velit neque illum dolore a saepe.','in','1985-08-19',2,3,NULL,NULL),(86,'Velit reiciendis laudantium molestias provident.','Laboriosam vel mollitia non magnam totam est. Corrupti ipsa dicta consequatur et. Inventore suscipit incidunt nostrum expedita odit corrupti. Qui minima ea est magnam nihil voluptatum animi.','id','1983-07-01',10,1,NULL,NULL),(87,'Dolorem occaecati dicta.','Consectetur ad alias id voluptatum. Quod blanditiis recusandae et rerum optio deserunt exercitationem.','unde sunt','1983-07-19',4,3,NULL,NULL),(88,'Laudantium ut dolores corporis ipsum.','Totam voluptatem vel vero. Dolorum dolores esse nesciunt doloremque autem. Quidem sapiente hic aut eaque repudiandae aut. Assumenda ea quae unde.','sit','1980-09-02',2,1,NULL,NULL),(89,'Est sed et perspiciatis eaque.','Et error pariatur occaecati omnis impedit. Et sit quos ab eos fugit vitae. Sint a tempora saepe cum. Et voluptatem vel consequatur omnis aut sunt.','aut','1993-08-25',11,3,NULL,NULL),(90,'Omnis magni minima illo.','Quam aut assumenda rerum labore nostrum accusantium. Et nihil dolorem dolor magnam rerum. Dolorem laudantium omnis ut.','dolorem','2003-12-26',9,4,NULL,NULL),(91,'Inventore eveniet id.','Perferendis ex veniam maxime et ratione numquam fuga eaque. Animi suscipit provident nisi molestiae sit facere minima. Facere error et doloribus dolorem. Sit eveniet fugit in laboriosam voluptatibus provident.','nostrum','2018-07-12',6,2,NULL,NULL),(92,'Corporis pariatur quia autem aut.','Delectus adipisci cupiditate temporibus dolor nemo. Aspernatur saepe harum expedita voluptate minus molestiae.','ea consequatur','2009-02-10',4,1,NULL,NULL),(93,'Explicabo est accusamus vel aut.','Consectetur aut voluptatem recusandae voluptates voluptas aut. Quasi officia possimus officiis ipsum qui consequatur vel. Adipisci sed ut qui a ea repellat rem. Expedita repellat tempora quia similique ut.','odit ut','1982-09-23',9,3,NULL,NULL),(94,'Natus laboriosam fugit est nisi.','Iusto deleniti eveniet necessitatibus sapiente veritatis enim. Accusantium fugit velit voluptatem et. Dolor quia exercitationem vel iure. Enim et porro rem architecto incidunt. Quia asperiores minima quo rerum.','et voluptas','1986-09-16',5,2,NULL,NULL),(95,'Deleniti recusandae qui nihil qui culpa.','Nobis reiciendis sit sed. Perspiciatis sint molestias dolor aut qui eos rerum quis. Consequatur laudantium id omnis sit consequatur voluptatem qui.','eum doloribus','2006-08-23',9,1,NULL,NULL),(96,'Inventore accusamus soluta.','Velit ratione voluptas deserunt dolores nesciunt magni. Illum sapiente illum voluptas et aut voluptatem voluptatem. Eaque qui modi veniam possimus.','nihil nulla','1972-04-26',2,3,NULL,NULL),(97,'Rerum ea veniam consequatur in dolore.','Ut exercitationem velit aperiam quibusdam. Quibusdam et quia et et et ex ut. Aut vel molestiae et ut tempore. Et porro inventore qui necessitatibus ducimus iusto rerum.','eveniet','2016-09-23',5,1,NULL,NULL),(98,'Et sunt id nam.','Rerum ducimus eius tenetur dolor. Iusto sit nemo sit quod. Consequatur aut nihil corrupti ad. Quibusdam et voluptatum expedita iusto.','ut','1990-06-15',7,2,NULL,NULL),(99,'Et autem consequatur omnis.','Quia sit vel quisquam et aut delectus rerum. Eligendi commodi maiores iusto. Dolores numquam sunt et tempore enim exercitationem.','consequuntur','1971-04-06',6,1,NULL,NULL),(100,'Et nisi iste hic cupiditate.','Aut ad est dolorem et. Vitae a iure minima rerum ab tenetur suscipit. Asperiores corrupti eaque tempora distinctio nobis eum qui.','explicabo','1979-01-18',8,2,NULL,NULL);
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `numbers`
--

DROP TABLE IF EXISTS `numbers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `numbers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `numbers`
--

LOCK TABLES `numbers` WRITE;
/*!40000 ALTER TABLE `numbers` DISABLE KEYS */;
/*!40000 ALTER TABLE `numbers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse bread 1','web','2022-01-24 09:24:07','2022-01-24 09:24:07'),(2,'read bread 1','web','2022-01-24 09:24:07','2022-01-24 09:24:07'),(3,'edit bread 1','web','2022-01-24 09:24:07','2022-01-24 09:24:07'),(4,'add bread 1','web','2022-01-24 09:24:07','2022-01-24 09:24:07'),(5,'delete bread 1','web','2022-01-24 09:24:07','2022-01-24 09:24:07');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Our Cheminformatics Bootcamp is Officially Over!','storage/uploads/posts/1643982244_IMG_20220119_195219-min.jpg','<p><strong><span style=\"font-size:18px\">&nbsp;🎉 Our students from Cheminformatics Bootcamp graduated yesterday!</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:18px\">We&rsquo;d like to thank the participants for their hard work and diligence that they showed during these couple of months.</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:18px\">We would also like to thank&nbsp;<a href=\"https://www.linkedin.com/company/fast-foundation/\"><span style=\"color:#0097bb\">Foundation for Armenian Science and Technology (FAST)</span></a>&nbsp;and&nbsp;<a href=\"https://www.linkedin.com/company/ayb-educational-foundation/\"><span style=\"color:#0097bb\">Ayb Educational Foundation</span></a>&nbsp;for their assistance, as well as&nbsp;<a href=\"https://www.linkedin.com/company/solaron-solar-panel/\"><span style=\"color:#0097bb\">SOLARON - Solar Panel Manufacturer</span></a>&nbsp;for their support!</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:18px\">We are happy to see more people picking up interest in Cheminformatics and contributing to the field. We are hoping to see more and more Armenian companies join in to foster and advance the Armenian biotech scene.</span></strong></p>','news',1,NULL,NULL,NULL),(2,'Denovo Sciences Amongst Top 25 Startups at EWC21','storage/uploads/posts/1643020035-1636287187267.jpg','<p><strong><span style=\"font-size:18px\">We&#39;re excited to announce that Denovo Sciences has been selected as one of Entrepreneurship World Cup (EWC) Top 25 Finalists!</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:18px\">The&nbsp;<a href=\"http://www.genglobal.org/\">Global Entrepreneurship Network</a>&nbsp;(GEN),&nbsp;<a href=\"https://miskglobalforum.com/\">Misk Global Forum</a>&nbsp;and&nbsp;<a href=\"https://www.tgelf.org/\">The Global Education &amp; Leadership Foundation</a>&nbsp;announced the 25 top startups that will pitch at the&nbsp;<a href=\"http://www.entrepreneurshipworldcup.com/\">Entrepreneurship World Cup</a>&nbsp;Global Finals later this year. They are the top performers among 100,000 startups in 200 countries that registered for the competition. Profiles on the top 25 finalists can be found at&nbsp;<a href=\"http://www.entrepreneurshipworldcup.com/\">www.entrepreneurshipworldcup.com</a>.</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:18px\">The Entrepreneurship World Cup is one of the world&rsquo;s largest and most diverse pitch competitions and support programs for the next generation of entrepreneurs. Since launching in 2019, EWC has supported more than 300,000 participants from 200 countries, awarded $2 million in cash prizes and provided in-kind support and services valued at $150 million.</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:18px\">Get more information and the full list of finalists at <a href=\"https://entrepreneurshipworldcup.com/Insights/top-25-entrepreneurship-world-cup-finalists-announced-as-global-entrepreneurship-week-kicks-off-in-200-countries/\">https://entrepreneurshipworldcup.com/Insights/top-25-entrepreneurship-world-cup-finalists-announced-as-global-entrepreneurship-week-kicks-off-in-200-countries/</a>.</span></strong></p>','news',1,NULL,NULL,NULL),(3,'Denovo Sciences at DigiWeek21','storage/uploads/posts/1644489168_vardan_gray.png','<p><strong><span style=\"font-size:18px\">Join us on November 1 at 2PM at <a href=\"https://www.linkedin.com/feed/hashtag/?keywords=digiweek21&amp;highlightedUpdateUrns=urn%3Ali%3Aactivity%3A6860876584807653377\"><span style=\"color:#0097bb\">#DigiWeek21</span></a> Science and Sustainability Summit for a panel discussion on Innovation in Biotech &amp; Life Sciences.</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:18px\">Our co-founder Vardan Harutyunyan will discuss the critical role of science, innovation and sustainable technology on the Armenian economy, as well as the role that Denovo Sciences plays in establishing the biotech ecosystem.</span></strong></p>\r\n\r\n<ul>\r\n	<li><strong><span style=\"font-size:18px\">Livestream link: <a href=\"https://www.youtube.com/watch?v=t70R2rZgEdI\"><span style=\"color:#0097bb\">https://www.youtube.com/watch?v=t70R2rZgEdI</span></a></span></strong></li>\r\n	<li><strong><span style=\"font-size:18px\">Full event agenda: <a href=\"https://digiweek.am/digiweek21-science-and-sustainability-summit/\"><span style=\"color:#0097bb\">https://digiweek.am/digiweek21-science-and-sustainability-summit/</span></a></span></strong></li>\r\n</ul>','event',1,NULL,NULL,NULL),(4,'Cheminformatics Bootcamp','storage/uploads/posts/1644488461_denovo_gray_cover.png','<p><strong><span style=\"font-size:18px\">Denovo Sciences in collaboration with <a href=\"https://www.linkedin.com/company/ayb-educational-foundation/\"><span style=\"color:#0097bb\">Ayb Educational Foundation</span></a> and <a href=\"https://www.linkedin.com/company/fast-foundation/\"><span style=\"color:#0097bb\">Foundation for Armenian Science and Technology (FAST)</span></a> is organizing a Cheminformatics Bootcamp. The bootcamp will introduce students and researchers to the basics of Computational Chemistry and Data Science for Drug Discovery.</span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style=\"font-size:18px\">The list of topics includes but is not limited to:</span></strong></p>\r\n\r\n<ul>\r\n	<li><strong><span style=\"font-size:18px\">Python Programming Basics</span></strong></li>\r\n	<li><strong><span style=\"font-size:18px\">Machine Learning for Molecular Property Prediction</span></strong></li>\r\n	<li><strong><span style=\"font-size:18px\">Molecular Descriptors: SMILES, SMARTS, Fingerprints</span></strong></li>\r\n	<li><strong><span style=\"font-size:18px\">Druglikeness Estimation Techniques</span></strong></li>\r\n	<li><strong><span style=\"font-size:18px\">Molecular Docking</span></strong></li>\r\n	<li><strong><span style=\"font-size:18px\">Molecular Dynamics</span></strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style=\"font-size:18px\">📅 The deadline for registration is August 30.</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:18px\">🧪Candidates that successfully complete the bootcamp will have the opportunity to join Denovo Sciences on our mission of accelerating drug discovery!</span></strong></p>\r\n\r\n<ul>\r\n	<li><strong><span style=\"font-size:18px\">Check out the registration link:</span></strong>&nbsp;<strong><span style=\"font-size:18px\"><a href=\"https://lnkd.in/ebJWZfkQ\"><span style=\"color:#0097bb\">https://lnkd.in/ebJWZfkQ</span></a></span></strong></li>\r\n	<li><strong><span style=\"font-size:18px\">Bootcamp details:</span></strong>&nbsp;<strong><span style=\"font-size:18px\"><a href=\"https://lnkd.in/eYuGcW7q\"><span style=\"color:#0097bb\">https://lnkd.in/eYuGcW7q</span></a></span></strong></li>\r\n</ul>','news',1,NULL,NULL,NULL),(5,'test',NULL,'<p>asdsad</p>','news',1,NULL,NULL,'2022-04-06 13:45:36');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'RNA-Binding Molecules Against Hepatitis C Virus','<p><strong><span style=\"font-size:18px\">Historically, proteins are the main biomolecules considered for small molecule drug design. More than 95% of current therapeutics have been developed to modulate protein targets. However, in recent years, certain RNAs have been identified as druggable targets, thereby opening the race to drug RNA with small molecules.</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:18px\">Our <span style=\"color:#0097bb\">target-agnostic</span> AI-based drug discovery platform generates small molecules that can interact with well-defined RNA structures and modulate downstream processes. We currently develop small molecules that can bind to the <span style=\"color:#0097bb\">internal ribosome entry site (IRES)</span> in the 5&#39; untranslated region of the hepatitis C virus (HCV) RNA genome, which is responsible for the initiation of viral protein synthesis. Our AI-designed molecules are able to alter the structural features of a functional HCV RNA and have the ability to inhibit virus-mediated translation and replication.</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:18px\"><em><span style=\"color:#0097bb\">About Hepatitis C Virus</span></em><br />\r\nHCV is estimated to infect about 1% of the global population. In 2019, approximately 300k people died from HCV. Current direct acting antiviral drugs demonstrate high efficacy. However, about 5% of patients do not succeed in eradicating HCV, largely due to antiviral drugs triggering strong drug selection favoring mutants that offer partial resistance to them. Thus, it is necessary to continue developing or improving the efficiency of antiviral drugs against HCV</span></strong></p>\r\n\r\n<p>&nbsp;</p>','storage/uploads/projects/1645190167_rna1.jpg',NULL,NULL,NULL,NULL),(2,'Dual-Acting Molecules Against Influenza Virus','<p><strong><span style=\"font-size:18px\">The one-ligand-one-target-one-disease approach is a tested drug design principle that has been successfully implemented in development of therapeutic agents for human and veterinary diseases. However, the fact is that drugs usually interact with more than one target, so they are pleiotropic. It could be the cause of side effects, however, pleiotropy is a two-edged sword as it may increase the therapeutic effect because many diseases are not caused by a defect in one specific target but based on a plethora of targets.</span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:18px\">Our AI-based drug discovery platform allows us to design small molecules able to modulate two different targets thought to be responsible for the certain disease. We currently utilize our platform to develop dual-acting drug candidates against <span style=\"color:#0097bb\">influenza A and B viruses</span>. Our AI-designed molecules are simultaneously acting on two different viral proteins essential for the viral life cycle, thereby increasing the therapeutic effect and resistance barrier for the new class of antivirals.</span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style=\"font-size:18px\"><em><span style=\"color:#0097bb\">About Influenza Virus</span> </em><br />\r\nAccording to the World Health Organization reports, the seasonal influenza virus causes up to 5 mln cases of severe illness and up to 500k deaths per year worldwide. Although seasonal vaccines and antiviral drugs are available, there is a constant need for developing new anti-influenza drugs due to resistance and high genetic variability issues observed among new Influenza virus strains.<br />\r\n<br />\r\n<em><span style=\"color:#0097bb\">Dataset of dual-acting molecules</span></em></span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:18px\">We have open-sourced our top-performing NCEs for academic use. If you want access to the list of NCEs, please, fill in the form below. A paper describing how we generated and evaluated dual-acting molecules will be published soon.</span></strong></p>','storage/uploads/projects/1645190188_mols.jpg','storage/uploads/projects/DS21-inf1-top304.csv',NULL,NULL,NULL);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,3),(2,3),(3,3),(4,3),(5,3);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_hierarchy`
--

DROP TABLE IF EXISTS `role_hierarchy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_hierarchy` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int unsigned NOT NULL,
  `hierarchy` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_hierarchy`
--

LOCK TABLES `role_hierarchy` WRITE;
/*!40000 ALTER TABLE `role_hierarchy` DISABLE KEYS */;
INSERT INTO `role_hierarchy` VALUES (1,1,1),(2,2,2),(3,3,3);
/*!40000 ALTER TABLE `role_hierarchy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','web','2022-01-24 09:24:06','2022-01-24 09:24:06'),(2,'user','web','2022-01-24 09:24:06','2022-01-24 09:24:06'),(3,'guest','web','2022-01-24 09:24:06','2022-01-24 09:24:06');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'ongoing','badge badge-pill badge-primary'),(2,'stopped','badge badge-pill badge-secondary'),(3,'completed','badge badge-pill badge-success'),(4,'expired','badge badge-pill badge-warning');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_members`
--

DROP TABLE IF EXISTS `team_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `team_members` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_members_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_members`
--

LOCK TABLES `team_members` WRITE;
/*!40000 ALTER TABLE `team_members` DISABLE KEYS */;
INSERT INTO `team_members` VALUES (1,'Hovakim','Zakaryan','hovakimz@denovosciences.ai','Co-Founder, CEO','- Machine Learning algorithms for de novo drug design and optimization.\r\n- Discovery and development of new broad-spectrum antiviral agents against some animal viruses like African swine fever virus for which no effective vaccines and drugs are available.','storage/uploads/team_members/1645188092_hovakim.jpg','https://www.linkedin.com/in/hovakim-zakaryan-63993568/',NULL,NULL,NULL,NULL,NULL),(2,'Mher','Matevosyan','mherm@denovosciences.ai','Co-Founder, CTO','Interested in every aspect of Data Science. Favorite research areas are Generative Adversarial Networks, Reinforcement Learning.','storage/uploads/team_members/1645190552_mher.jpg','https://www.linkedin.com/in/mher-matevosyan-642577140/',NULL,NULL,NULL,NULL,NULL),(3,'Vardan','Harutyunyan','vardanh@denovosciences.ai','Co-Founder, CAIO',NULL,'storage/uploads/team_members/1645190649_vardan.jpg','https://www.linkedin.com/in/vardan-harutunyan-30a003150/',NULL,NULL,NULL,NULL,NULL),(4,'Irina','Tirosyan','irinat@denovosciences.ai','Data Scientist',NULL,'storage/uploads/team_members/1645192058_irina.jpg',NULL,NULL,NULL,NULL,NULL,NULL),(5,'Hamlet','Khachatryan','hamletk@denovosciences.ai','Computational Chemist',NULL,'storage/uploads/team_members/1645192252_hamlet.jpg','https://www.linkedin.com/in/hamlet-khachatryan-95a80815b/',NULL,NULL,NULL,NULL,NULL),(6,'Grigor','Arakelov','grigora@denovosciences.ai','Lead Computational Biologist',NULL,'storage/uploads/team_members/1645192344_grigor.jpg','https://www.linkedin.com/in/grigor-arakelov-472b9143/',NULL,NULL,NULL,NULL,NULL),(7,'Yeva','Gabrielyan','yevag@denovosciences.ai','Data Scientist',NULL,'storage/uploads/team_members/1645192539_yeva.jpg',NULL,NULL,NULL,NULL,NULL,NULL),(8,'Valter','Sahakyan','valters@denovosciences.ai','Software Developer',NULL,'storage/uploads/team_members/1645192624_valter.jpg','https://www.linkedin.com/in/valtersahakyan/',NULL,NULL,NULL,NULL,NULL),(9,'Vahram','Arakelov','vahrama@denovosciences.ai','Computational Biologist',NULL,'storage/uploads/team_members/1645192754_vahram.jpg','https://www.linkedin.com/in/vahram-arakelov-a16256158/',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `team_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `technologies`
--

DROP TABLE IF EXISTS `technologies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `technologies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `discovery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `technologies`
--

LOCK TABLES `technologies` WRITE;
/*!40000 ALTER TABLE `technologies` DISABLE KEYS */;
INSERT INTO `technologies` VALUES (1,'Voyaging in the Chemical Space','<p>An AI-integrated drug discovery platform that explores the untapped chemical space to find new therapeutic stars.</p>','Targeted AI Drug Discovery','<p>Our AI algorithm explores chemical space for target-specific molecules with better properties than existing drugs.&nbsp;</p>\r\n\r\n<p>Underneath its core, our technology utilizes multi-parameter optimization to generate&nbsp;high-quality&nbsp;molecules satisfying the given parameters.</p>',NULL,NULL,NULL,NULL),(2,'Drugging the Undruggable','<p>No matter what target, our AI technology enables efficient discovery of novel molecular structures in a matter of few days.</p>','Working with Unique Targets','<p>Our AI algorithms learn from chemical, biological and physical simulations and do not rely on datasets of compounds.</p>\r\n\r\n<p>Being dataset-independent dramatically expands the pool of potential drug targets and allows to work with unconventional targets such as RNA structures.</p>',NULL,NULL,NULL,NULL),(3,'Changing the Paradigm','<p>Our AI platform opens novel avenues to rationally design more effective but less toxic compounds acting on multiple therapeutic targets at once.</p>','One Drug Multiple Targets','<p>Building up on the &quot;one drug multiple targets&quot; philosophy, our platform utilizes cutting-edge AI technology for generating polypharmacological compounds.</p>\r\n\r\n<p>The flexibility of our technology allows to not only design compounds acting on multiple targets at once, but also to control specificity and off-target side-effects.</p>',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `technologies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menuroles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','valters@denovosciences.ai','2022-01-24 09:24:06','$2y$10$uhC9d6kDE5F8hV49PTU9le1SrRQZi8AjgAMwUQXPcSVNRzIOI2EQi','user,admin','LQCftZ5S1ziNNftzKXoOIXwp1boqgyMxbMkqnBf2trUxSQbsgNvzUKrvjTqv','2022-01-24 09:24:06','2022-05-10 07:34:12',NULL),(2,'Concepcion Cronin III','walsh.gerda@example.net','2022-01-24 09:24:06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','user','KVTTuz0Zta','2022-01-24 09:24:06','2022-01-24 09:24:06',NULL),(3,'Marcella Simonis','everett.barton@example.org','2022-01-24 09:24:06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','user','qQ22Ds8Iz6','2022-01-24 09:24:06','2022-02-05 20:32:30','2022-02-05 20:32:30'),(4,'Americo Gulgowski','talon.rippin@example.com','2022-01-24 09:24:06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','user','Ss4VZZKNoW','2022-01-24 09:24:06','2022-02-05 20:32:26','2022-02-05 20:32:26'),(5,'Dr. Devan Keeling','igreenfelder@example.com','2022-01-24 09:24:06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','user','R7CNmUL3uB','2022-01-24 09:24:06','2022-02-05 20:32:24','2022-02-05 20:32:24'),(6,'Brando Breitenberg','tfahey@example.com','2022-01-24 09:24:06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','user','jPBl4Y2gZy','2022-01-24 09:24:06','2022-02-05 20:32:20','2022-02-05 20:32:20'),(7,'Gabriel Streich','immanuel.langworth@example.com','2022-01-24 09:24:06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','user','22Mb0ezRR3','2022-01-24 09:24:06','2022-02-05 20:32:17','2022-02-05 20:32:17'),(8,'Francisca Wisoky MD','rowe.josefa@example.net','2022-01-24 09:24:06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','user','gJ4oe8ADsM','2022-01-24 09:24:06','2022-02-05 20:32:13','2022-02-05 20:32:13'),(9,'Prof. Eryn Jenkins MD','ignatius94@example.net','2022-01-24 09:24:06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','user','n3Fp3q0Sjn','2022-01-24 09:24:06','2022-02-05 20:32:10','2022-02-05 20:32:10'),(10,'Mrs. Savanah Spinka','conn.kiana@example.org','2022-01-24 09:24:06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','user','AypH8WT9fz','2022-01-24 09:24:06','2022-02-05 20:32:07','2022-02-05 20:32:07'),(11,'Arden Lindgren I','pagac.lenora@example.com','2022-01-24 09:24:06','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','user','DA0MExw7oT','2022-01-24 09:24:06','2022-02-05 20:32:03','2022-02-05 20:32:03');
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

-- Dump completed on 2022-06-28  9:21:41
