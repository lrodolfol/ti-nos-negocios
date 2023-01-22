-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: ti_nos_negocios
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `address` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned DEFAULT NULL,
  `street` varchar(255) NOT NULL DEFAULT '',
  `number` varchar(255) NOT NULL DEFAULT '',
  `complement` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `addr_user` (`user_id`),
  CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` VALUES (1,1,'rua manoel pedro vieira, 810','810','casa 1','2018-09-03 19:40:57','2018-09-16 22:39:59'),(2,2,'paraguai','2041','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:01'),(3,3,'emilio daroz ','107','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:02'),(4,4,'rua lavinia moreira da silva','145','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:03'),(5,5,'padre anchieta','121','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:04'),(6,6,'rua amoroso costa','254','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:06'),(7,7,'alaor martins','312','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:07'),(8,8,'rua das violetas','330','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:09'),(9,9,'francisco carlos ','105','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:10'),(10,10,'torino','95','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:12'),(11,11,'rua erotidas','64','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:13'),(12,12,'r. orquideas','169','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:14'),(13,13,'rua joffre motta','44','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:14'),(14,14,'rua piauí','17','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:15'),(15,15,'fernandes marques','1229','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:16'),(16,16,'av. beta','07','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:17'),(17,17,'abagiba','674','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:23'),(18,18,'gumercindo araujo','302','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:25'),(19,19,'rua 01, quadra 35','35b','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:26'),(20,20,'rua piauí','23d','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:27'),(21,21,'rua leopoldina araãºjo','380','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:28'),(22,22,'rua conceiã§ã£o','101','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:29'),(23,23,'rua benedetto bonfilgi','755','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:30'),(24,24,'rua sã£o francisco','17','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:30'),(25,25,'rua dona zulmira','479','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:32'),(26,26,'rua mampituba','740','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:32'),(27,27,'dezeseis','151','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:34'),(28,28,'rua dos goitacazes','375','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:35'),(29,29,'av lucio jose de meneses','930','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:36'),(30,30,'caetano','3457','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:38'),(31,31,'um nova ','335','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:39'),(32,32,'sres area especial','19','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:40'),(33,33,'islandia','99','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:41'),(34,34,'independência','700','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:42'),(35,35,'sebastiã£o thomaz de oliveira','25','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:46'),(36,36,'nogueira','185','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:48'),(37,37,'tv londrina','12','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:49'),(38,38,'teofilo otoni','222','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:51'),(39,39,'joã£o rasmussen','244','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:53'),(40,40,'travessa elizeu araãºjo','46','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:56'),(41,41,'av. dr. joão pessoa','185','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:58'),(42,42,'travessa brandão','4','casa 1','2018-09-03 19:40:57','2018-09-16 22:40:59'),(43,43,'coqueiros','SN','casa 1','2018-09-03 19:40:57','2018-09-16 22:41:00'),(44,44,'estrada m boi mirim','820','casa 1','2018-09-03 19:40:57','2018-09-16 22:41:01'),(45,45,'travessa dos comerciarios ','5','casa 1','2018-09-03 19:40:57','2018-09-16 22:41:02'),(46,46,'dos jacarandas','30','casa 1','2018-09-03 19:40:57','2018-09-16 22:41:03'),(47,47,'dona ermelinda pereira','413','casa 1','2018-09-03 19:40:57','2018-09-16 22:41:04'),(48,48,'rua projetada 02','742','casa 1','2018-09-03 19:40:57','2018-09-16 22:41:05'),(49,49,'samambaia','96','casa 1','2018-09-03 19:40:57','2018-09-16 22:41:07'),(50,50,'rua dos gerã¢nios','110','casa 1','2018-09-03 19:40:57','2018-09-16 22:41:09');
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq_channels`
--

DROP TABLE IF EXISTS `faq_channels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faq_channels` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `channel` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq_channels`
--

LOCK TABLES `faq_channels` WRITE;
/*!40000 ALTER TABLE `faq_channels` DISABLE KEYS */;
INSERT INTO `faq_channels` VALUES (1,'Sobre o CaféControl','Saiba mais sobre o CaféControl','2018-10-21 12:24:51','2018-10-21 12:27:21');
/*!40000 ALTER TABLE `faq_channels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq_questions`
--

DROP TABLE IF EXISTS `faq_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faq_questions` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `channel_id` int unsigned NOT NULL,
  `question` varchar(255) NOT NULL DEFAULT '',
  `response` text NOT NULL,
  `order_by` int unsigned DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `channel_id` (`channel_id`),
  CONSTRAINT `channel_id` FOREIGN KEY (`channel_id`) REFERENCES `faq_channels` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq_questions`
--

LOCK TABLES `faq_questions` WRITE;
/*!40000 ALTER TABLE `faq_questions` DISABLE KEYS */;
INSERT INTO `faq_questions` VALUES (1,1,'O CaféControl é gratuito?','<p>Sim, o CaféControl é gratuito e com ele você pode usar os recursos de controle e automação sem qualquer custo ou cobrança.</p><p>No futuro pretendemos ter planos com recursos premium onde você terá ainda mais controle, este será um plano pago, mas você poderá optar por usa-lo ou continuar no plano gratuito.</p>',1,'2018-10-21 12:28:11','2018-10-21 12:48:41'),(2,1,'O que fazer com o CaféControl?','<p>Com o CaféControl você pode lançar suas contas a receber ou a pagar, além disso pode lançar recorrências e usufruir de poderosas automações de controle, tudo de forma muito simples.</p><p>Com as contas organizadas em seu painel, você passa a ter acesso a relatórios e gráficos incríveis, além de ser notificado sempre que uma ação for necessária, como validar ou pagar uma conta.</p>',2,'2018-10-21 12:30:04','2018-10-21 12:49:17'),(4,1,'Como usar o CaféControl?','<p>Para usar o CaféControl é simples, basta se cadastrar em nossa plataforma e começar a cadastrar suas contas.</p><p>Detalhando contas rotineiras e recorentes, todas com valor, categorias e informações de controle. A partir disso nosso APP vai gerar automações e relatórios para te ajudar a controlar.</p><p>Simples, fácil e gratuito!</p>',3,'2018-10-22 11:04:00','2018-10-22 11:06:41'),(5,1,'De onde surgiu o CaféControl?','<p>O CaféControl é um projeto desenvolvido na formação Full Stack PHP Developer da UpInside Treinamentos, onde o aluno tem acesso do zero ao expert em uma formação completa sobre ferramentas, HTML, CSS e jQuery.</p><p>Uma formação aprofundada com foco em PHP onde desenvolvemos esse e vários outros projetos a partir do zero.</p><p>Quer saber mais? <a target=\'_blank\' href=\'https://www.upinside.com.br/fsphp\' title=\'Full Stack PHP Developer\'>Acesse aqui</a> e conheça a formação!</p>',4,'2018-10-22 11:07:01','2018-10-22 11:09:46'),(6,1,'Sobre a UpInside Treinamentos','<p>A UpInside Treinamentos é uma escola de formação profissional em desenvolvimento web e programação. Hoje eleita a melhor do Brasil no segmento, tendo reconhecimento em mais de 17 países da AL.</p>',5,'2018-10-22 11:10:32','2018-10-22 11:11:35'),(8,1,'Ainda com dúvidas?','<p>Caso ainda tenha qualquer dúvida, fique a vontade para entrar em contato consoco em nossos canais de atendimento. Estamos aqui para te ajudar a controlar suas contas enquanto toma um ótimo café :)</p>',6,'2018-10-22 11:11:58','2018-10-22 11:12:42');
/*!40000 ALTER TABLE `faq_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `author` int unsigned DEFAULT NULL,
  `category` int unsigned DEFAULT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `uri` varchar(255) NOT NULL,
  `subtitle` text NOT NULL,
  `content` text NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `video` varchar(50) DEFAULT NULL,
  `views` int NOT NULL DEFAULT '0',
  `status` varchar(20) NOT NULL DEFAULT 'draft' COMMENT 'post, draft, trash ',
  `post_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category`),
  KEY `user_id` (`author`),
  CONSTRAINT `category_id` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  CONSTRAINT `user_id` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonies`
--

DROP TABLE IF EXISTS `testimonies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `segment` varchar(45) DEFAULT NULL,
  `testimonies` varchar(250) NOT NULL,
  `path_photo` varchar(45) DEFAULT '/testimonials/avatar.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COMMENT='table for testimonies';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonies`
--

LOCK TABLES `testimonies` WRITE;
/*!40000 ALTER TABLE `testimonies` DISABLE KEYS */;
INSERT INTO `testimonies` VALUES (1,'Rodolfo Jesus','CEO - Ti nos negocios','Excelente empresa. Total empenho e dedicação na necessiadade do cliente','images/testimonials/avatar.jpg'),(2,'Kelly Cristina','CFO - Ti nos negocios','Empresa com excelente profissionalismo e grande inovação. ','images/testimonials/avatar.jpg'),(3,'Gustavo Jesus','CEO - Frango mais feliz','Superou todas minhas expectativas. Tem muito dominio de todo negócio desde a base até a entrega do produto final. Estão de parabens','images/testimonials/avatar.jpg');
/*!40000 ALTER TABLE `testimonies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL DEFAULT '',
  `last_name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(50) NOT NULL DEFAULT 'registered' COMMENT 'registered, confirmed',
  `password` varchar(255) NOT NULL DEFAULT '',
  `forget` varchar(255) DEFAULT NULL,
  `document` varchar(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Robson','Leite','cursos@upinside.com.br','registered','$2y$10$7aQNdKPaeaX0wwxShqfDN.Jwc4SzPPQGOk7fZdLgV/WmGvVx6oFwm',NULL,NULL,'images/2018/10/robsonvleite.jpg','2018-09-03 19:39:07','2018-10-24 14:26:46'),(2,'Alexandre','Santos','alexandre27@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(3,'Willian','Santos','willian28@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(4,'Eleno','Santos','eleno29@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(5,'Lucas','Santos','lucas30@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(6,'Mateus','Santos','mateus31@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(7,'João','Santos','joão32@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(8,'Felipe','Santos','felipe33@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(9,'Anderson','Santos','anderson34@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(10,'Elton','Santos','elton35@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(11,'Leonardo','Santos','leonardo36@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(12,'Regilton','Santos','regilton37@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(13,'Sidney','Santos','sidney38@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(14,'Lourival','Santos','lourival39@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(15,'Henrique','Santos','henrique40@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(16,'Daniel','Santos','daniel41@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(17,'Pedro','Santos','pedro42@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(18,'Andre Roberto','Santos','andre roberto43@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(19,'Ozeias','Santos','ozeias44@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(20,'Arnobio','Santos','arnobio45@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(21,'Roniel','Santos','roniel46@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(22,'Caíque','Santos','caíque47@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(23,'Lucas','Santos','lucas48@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(24,'Francisco','Santos','francisco49@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(25,'Cristian','Santos','cristian50@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(26,'Eduardo','Santos','eduardo51@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(27,'Rodrigo','Santos','rodrigo52@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(28,'Raphael','Santos','raphael53@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(29,'Jose','Santos','jose54@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(30,'Rodrigo','Santos','rodrigo55@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(31,'Diego','Santos','diego56@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(32,'Alexandre','Santos','alexandre57@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(33,'Edimar','Santos','edimar58@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(34,'Jackell','Santos','jackell59@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(35,'Luis','Santos','luis60@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(36,'Lucas','Santos','lucas61@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(37,'Wander','Santos','wander62@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(38,'Tairo','Santos','tairo63@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(39,'Rubens','Santos','rubens64@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(40,'Hugo','Santos','hugo65@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(41,'Gustavo','Santos','gustavo66@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(42,'Paulo','Santos','paulo67@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(43,'Rodrigo','Santos','rodrigo68@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(44,'Denio','Santos','denio69@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(45,'Idalmir','Santos','idalmir70@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(46,'Ataide','Santos','ataide71@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(47,'Luiz','Santos','luiz72@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(48,'Luciano','Santos','luciano73@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(49,'Adir','Santos','adir74@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(50,'Tainan','Santos','tainan75@email.com.br','registered','',NULL,NULL,NULL,'2018-09-03 19:39:07','2018-10-24 14:26:46'),(53,'Rodolfo','J.Silva','ceo@tinosnegocios.com.br','registered','$2y$10$6rMnLl5nE6yx.z/qxvj5Kue.MzKL5GCVIho66Yk8xf//5Wz3ifOoe',NULL,'13458245200',NULL,'2022-02-20 19:41:22','2022-02-23 00:13:27'),(74,'rodolfo','silva','rodolfo0ti@gmail.com','confirmed','$2y$10$usgaNZyxcnTjGo9LOm5DQeIUSBNAAZMPUEN4ccNpZb6ckWB7O67u.',NULL,NULL,NULL,'2022-03-06 18:26:08','2022-03-08 01:02:31');
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

-- Dump completed on 2023-01-21 15:28:13
