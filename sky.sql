# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.38)
# Database: cms
# Generation Time: 2015-04-16 08:30:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table sky_article
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sky_article`;

CREATE TABLE `sky_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(255) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `sky_article` WRITE;
/*!40000 ALTER TABLE `sky_article` DISABLE KEYS */;

INSERT INTO `sky_article` (`id`, `title`, `content`, `username`, `time`)
VALUES
	(47,'ç¬¬ä¸€ç‰ˆæœ¬é›å½¢ç¼–å†™','<p>\r\n	<span .=\"line-height:1.5;\">2014å¹´12æœˆä»½ï¼Œ</span><span .=\"line-height:1.5;\">ç¬¬ä¸€ç‰ˆæœ¬é›å½¢ç¼–å†™</span><span .=\"line-height:1.5;\"></span>\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<img src=\"/cms/upload/image/20150411/s1_20150411170459_20710.png\" alt=\"\" />\r\n</p>','sky',1428743126),
	(48,'ç¬¬äºŒç‰ˆæœ¬è¯•ç”¨','2015å¹´1æœˆä»½ï¼Œé‡æ–°ç¼–å†™ç¬¬äºŒç‰ˆæœ¬&nbsp;<img src=\"/cms/upload/image/20150411/s1_20150411170322_83465.png\" alt=\"\" />','sky',1428743163),
	(49,'ç¬¬ä¸‰ç‰ˆæœ¬è¯•ç”¨','<p>\r\n	2015å¹´2æœˆä»½ï¼Œåœ¨ç¬¬äºŒç‰ˆæœ¬çš„åŸºç¡€ä¸Šå†™å‡ºäº†ç¬¬ä¸‰ç‰ˆæœ¬\r\n</p>\r\n<p>\r\n	<img src=\"/cms/upload/image/20150411/s1_20150411170642_68259.png\" alt=\"\" />\r\n</p>','sky',1428743207),
	(50,'ç¬¬å››ç‰ˆæœ¬è¯•ç”¨','2015å¹´3æœˆï¼Œåœ¨ç¬¬äºŒç‰ˆæœ¬çš„åŸºç¡€ä¸Šç¼–å†™å‡ºæ¥äº†ç¬¬å››ç‰ˆæœ¬<img src=\"/cms/upload/image/20150411/s1_20150411170739_81324.png\" alt=\"\" />','sky',1428743282),
	(51,'ç¬¬äº”ç‰ˆæœ¬å†…æµ‹','<p>\r\n	<strong><span .=\"font-size:18px;\">2014å¹´4æœˆï¼Œ</span></strong><strong><span .=\"font-size:18px;\">ç¬¬äº”ç‰ˆæœ¬å†…æµ‹</span></strong>\r\n</p>\r\n<p>\r\n	<img src=\"/cms/upload/image/20150411/s1_20150411170909_97706.png\" alt=\"\" /> \r\n</p>','sky',1428743668);

/*!40000 ALTER TABLE `sky_article` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sky_invite_reg
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sky_invite_reg`;

CREATE TABLE `sky_invite_reg` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `addKeyUser` varchar(500) DEFAULT NULL,
  `inviteKey` varchar(255) DEFAULT NULL,
  `isUsed` tinyint(1) DEFAULT '0',
  `regUserName` varchar(500) DEFAULT NULL,
  `regUserEmail` varchar(500) DEFAULT NULL,
  `regTime` int(11) DEFAULT '0',
  `addTime` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `sky_invite_reg` WRITE;
/*!40000 ALTER TABLE `sky_invite_reg` DISABLE KEYS */;

INSERT INTO `sky_invite_reg` (`id`, `addKeyUser`, `inviteKey`, `isUsed`, `regUserName`, `regUserEmail`, `regTime`, `addTime`)
VALUES
	(4,'sky','80251216de62c65c7d146b1877aa5c2b',1,'awdkawd','awd@qq.com',1428480372,1427962172),
	(5,'sky','a034d59459461760d068ae00fb4d9d31',1,'sb','sb@sb.com',1427963542,1427963549),
	(6,'sky','ef0eac32c0334ebeda81bf573a95b4f9',1,'awhdad','audyawdya@skdjas.com',1428027612,1427972737),
	(8,'sky','df9d64410878bbf60b9d3bb4316e7aeb',1,'akwdnaw','awd@aa.com',1428480438,1427977599),
	(9,'sky','6a9421c8563e9dfdcc548f0df5c1d310',1,'sgk','319777311@qq.com',1428027960,1427977599),
	(10,'sky','de6ab511fb643091f76458ba74f42749',1,'awdklamdnawkljdlk','idhjakwhdha@q.com',1428480597,1427977599),
	(11,'sky','86a0dcf44abfe7f1e586c4515d80a211',0,NULL,NULL,0,1427977599),
	(12,'sky','4025ef6fb9ef94dfe9676807a956081c',0,NULL,NULL,0,1427977636),
	(13,'sky','f30d20838ce7244df04fd4edb1bc53d5',0,NULL,NULL,0,1427977636),
	(14,'sky','a23f87eb333aa332c18611f6c5e9b48a',0,NULL,NULL,0,1427977636),
	(15,'sky','6a3d804f2763134ba526bbf4a59af826',0,NULL,NULL,0,1427977636),
	(16,'sky','bfa5239d330ff15194c8b20ac0d5cbcf',0,NULL,NULL,0,1427977657),
	(17,'sky','7d36ac17230e65dcf13b2ba68d800821',0,NULL,NULL,0,1427977657),
	(18,'sky','311c14bf82e791b225a6e53eb6caa38a',0,NULL,NULL,0,1427977657),
	(19,'sky','165cf6b2f52e01f3dba5bcc021f33a7a',0,NULL,NULL,0,1427977657),
	(20,'sky','46e18265b80d6032a033d7ba5f16648d',0,NULL,NULL,0,1427977698),
	(21,'sky','d89c90466888bddd7aa18a06af345edd',0,NULL,NULL,0,1427977698),
	(22,'sky','5a3176445888eede5ae351cb4420b70e',0,NULL,NULL,0,1427977698),
	(23,'sky','09960e7c85c1a126243c06f632416af9',0,NULL,NULL,0,1427977698),
	(24,'sky','b15805cce7065d34f0bcb835ce7defc7',0,NULL,NULL,0,1427977698),
	(25,'sky','e716188f862902f4f1badba268fab52e',0,NULL,NULL,0,1427977698),
	(26,'sky','82feffebece9cf132e0b25423c984515',0,NULL,NULL,0,1427977698),
	(27,'sky','24e62b058770930d57abb9a3a252914a',0,NULL,NULL,0,1427977698),
	(28,'sky','2b8d435496d76d98e9930f7dee6af69d',0,NULL,NULL,0,1427977698),
	(29,'sky','282b88a1615904bc5bae0cd4312f1b3b',0,NULL,NULL,0,1427977698),
	(30,'sky','bb15b28f88fe5e3dadce17d90f05f583',0,NULL,NULL,0,1427977698),
	(31,'sky','6fb81ae9a71c93a636e3de12fc827961',0,NULL,NULL,0,1427977698),
	(32,'sky','65da7f1aea6cbb8e0f0a8c8602b14232',0,NULL,NULL,0,1427977698),
	(33,'sky','8ce1bfd8f820594d71cb3583202632b1',0,NULL,NULL,0,1427977698),
	(34,'sky','c076226a2b4833e74dac8c9fb2c42e52',0,NULL,NULL,0,1427977698),
	(35,'sky','ef4cf6b0b0a99dc0a4ac863b498f096d',0,NULL,NULL,0,1427977698),
	(36,'sky','8aaacb55498bf04d0361c71d3ec44feb',0,NULL,NULL,0,1427977698),
	(37,'sky','1d876b03a87f877f599a10f6bf2868ff',0,NULL,NULL,0,1427977698),
	(38,'sky','3b6b232b3383ceb3ffbe1b9d792d623b',0,NULL,NULL,0,1427977698),
	(39,'sky','df6822ab1ebf48e909424e3f0caf9b3b',0,NULL,NULL,0,1427977698),
	(40,'sky','09d679e253d2715458978b4f684af3e5',0,NULL,NULL,0,1427977698),
	(41,'sky','ab78ed914850106a1ce0c4a0cca91906',0,NULL,NULL,0,1427977698),
	(42,'sky','1c01f367563d67d4ab205ee0bcf9ab8a',0,NULL,NULL,0,1427977698),
	(43,'sky','bee100b3b1bcf4dcc35b312aed40a793',0,NULL,NULL,0,1427977698),
	(44,'sky','c07d49a50a863c1df1548579c688f50e',0,NULL,NULL,0,1427977698),
	(45,'sky','c2ce9d0aed0333329c4a745f4945c20b',0,NULL,NULL,0,1427977698),
	(46,'sky','e2f5e9e68b0a87c1cd5a4a930714322e',0,NULL,NULL,0,1427977698),
	(47,'sky','87dc8a3509fc38348eb738c2fe67989a',0,NULL,NULL,0,1427977698),
	(48,'sky','7d818a96f63f810bef5fe3fed13c2754',0,NULL,NULL,0,1427977698),
	(49,'sky','61bd11548b3a87ad6bde1d64dc6ce1fb',0,NULL,NULL,0,1427977698),
	(50,'sky','8dbf38e641d9d31ae80fc6abb9703f6d',0,NULL,NULL,0,1427977698),
	(51,'sky','e424f98e30e30cc7c77677f0c52db573',0,NULL,NULL,0,1427977698),
	(52,'sky','454098b001c7b4631f43e61dd009ec95',0,NULL,NULL,0,1427977698),
	(53,'sky','3b2b4df75ec15b49c95b2cbf052a0f9d',0,NULL,NULL,0,1427977698),
	(54,'sky','c48cfb8750ec1a2831761e9f36c09a16',0,NULL,NULL,0,1427977698),
	(55,'sky','8d2f54c6712990c5450323d884da1c09',0,NULL,NULL,0,1427977698),
	(56,'sky','b281936a6874c5e1bd2647127f4a9ff4',0,NULL,NULL,0,1427977698),
	(57,'sky','ebfc0d91d42b9f4ac997f05ea870e774',0,NULL,NULL,0,1427977698),
	(58,'sky','c3fd771c9fc15c792ef2306692becb24',0,NULL,NULL,0,1427977698),
	(59,'sky','5fa818d370f7eb1ae3a0834299f1b2f6',0,NULL,NULL,0,1427977698),
	(60,'sky','fff8559cc2c2647889f6a2da4df807ec',0,NULL,NULL,0,1427977698),
	(61,'sky','e983b2d1637cf40d32bf7eb108fd6f4b',0,NULL,NULL,0,1427977698),
	(62,'sky','ba2501ba9be39de3ba23d4be425d1b07',0,NULL,NULL,0,1427977698),
	(63,'sky','268daf4a4237742a11e97900dd447cba',0,NULL,NULL,0,1427977698),
	(64,'sky','99197eaf997cc736d6f054cd641540ca',0,NULL,NULL,0,1427977698),
	(65,'sky','25cd706ee1bb6396f997bc983b369d88',0,NULL,NULL,0,1427977698),
	(66,'sky','9a15a131185d44d9fa89ec429e73e5e0',0,NULL,NULL,0,1427977698),
	(67,'sky','b3bbe6700011343fd97d2f1083eb3272',0,NULL,NULL,0,1427977698),
	(68,'sky','8f3cc36eb353957b42bdaf683f7ebea0',0,NULL,NULL,0,1427977698),
	(69,'sky','73ca5e65a5fd6265ddfb0a897fa84860',0,NULL,NULL,0,1427977698),
	(70,'sky','765a39b212b753def73c500b377ee49b',0,NULL,NULL,0,1427977698),
	(71,'sky','5d734c236be3966bc093391e670fd40c',0,NULL,NULL,0,1427977698),
	(72,'sky','3bfadea3d1b90d61fa617f70760c1d02',0,NULL,NULL,0,1427977698),
	(73,'sky','399b47e378283c27ea7224e7304c8c0d',0,NULL,NULL,0,1427977698),
	(74,'sky','9078ddcd70897d9dd7a01edd92cc44ff',0,NULL,NULL,0,1427977698),
	(75,'sky','4ab36a58d48b84c3312386f73fa87204',0,NULL,NULL,0,1427977698),
	(76,'sky','a6224799ec62cc8e07ad99af2f2fc67e',0,NULL,NULL,0,1427977698),
	(77,'sky','efbfdac5ee654b63f1ee1180e816cfaa',0,NULL,NULL,0,1427977698),
	(78,'sky','46c3cf4b42c2997703b63949c0e942b1',0,NULL,NULL,0,1427977698),
	(79,'sky','a8407abea9f598e0c8075008d95c673a',0,NULL,NULL,0,1427977698),
	(80,'sky','fa6e75f4aace24bffaab7d9f8bfc67bc',0,NULL,NULL,0,1427977698),
	(81,'sky','552972d436eacd85b54d3501f5966246',0,NULL,NULL,0,1427977698),
	(82,'sky','75f8ebe7ffae0c53e51ccaa689d43d2b',0,NULL,NULL,0,1427977698),
	(83,'sky','bd4a0899b9a40064c53098cdcab91ca2',0,NULL,NULL,0,1427977698),
	(84,'sky','4f573eed169aa4fc4f57c931d91db796',0,NULL,NULL,0,1427977698),
	(85,'sky','26b3f0e70b0e744afcc01e39eb658b1b',0,NULL,NULL,0,1427977698),
	(86,'sky','0e3e6fefbce4b01f07b7c8a0bd0ad578',0,NULL,NULL,0,1427977698),
	(87,'sky','db3923ea87eaf35a5e7d39cecc0763be',0,NULL,NULL,0,1427977698),
	(88,'sky','a15a941980721805b63f1a8b6f124541',0,NULL,NULL,0,1427977698),
	(89,'sky','f7087846f2707db41a763a3effc8e558',0,NULL,NULL,0,1427977698),
	(90,'sky','e9a643900e22e22ad47c42ee2c0d5fd4',0,NULL,NULL,0,1427977698),
	(91,'sky','74d40a688eab44de09f03b25c5e8727e',0,NULL,NULL,0,1427977698),
	(92,'sky','5ae1c4387ec8fa7738ef901df84ba43f',0,NULL,NULL,0,1427977698),
	(93,'sky','0789986898180bfcc2297a256a5f6b77',0,NULL,NULL,0,1427977698),
	(94,'sky','6b4a7f5bf8d5dee86ab7219259a6a7fe',0,NULL,NULL,0,1427977698),
	(95,'sky','7e214f480bf33615a065f65e2b030fbd',0,NULL,NULL,0,1427977698),
	(96,'sky','d825e3146eae29fe0f788b87c225ca01',0,NULL,NULL,0,1427977698),
	(97,'sky','dc1bb92e2d66bf8316abe8fa7d6bbae1',0,NULL,NULL,0,1427977698),
	(98,'sky','a024e3a724c238539e9053ced1dcddd8',0,NULL,NULL,0,1427977698),
	(99,'sky','ad76b8512a5b326bf8276c69b94ba76e',0,NULL,NULL,0,1427977698),
	(100,'sky','b1e53d49c65cc6228beddc27ee9ea5c0',0,NULL,NULL,0,1427977698),
	(101,'sky','4ecbea03b6c679295af8eb6d53b11850',0,NULL,NULL,0,1427977698),
	(102,'sky','09bf90a143197b541b38c48cf0397a3b',0,NULL,NULL,0,1427977698),
	(103,'sky','b355e3eb466d8832886734ac9112fadc',0,NULL,NULL,0,1427977698),
	(104,'sky','ed289e53a2e06ff9c21723b730352175',0,NULL,NULL,0,1427977698),
	(105,'sky','9b7f360414bd318e0741498fb037818b',0,NULL,NULL,0,1427977698),
	(106,'sky','47830543f51e08d8baa9e16fb4c88e04',0,NULL,NULL,0,1427977698),
	(107,'sky','1c385e3322837085ebbd8d63db22cc9e',0,NULL,NULL,0,1427977698),
	(108,'sky','d58043b64a730b4c14ac629c5b197fd9',0,NULL,NULL,0,1427977698),
	(109,'sky','e9f7d78bde9a098d3935e6d869b78750',0,NULL,NULL,0,1427977698),
	(110,'sky','5a1b12da207711f50c42674080a5a0e6',0,NULL,NULL,0,1427977698),
	(111,'sky','43dfdc181b146fdf01c97ee65bc129bd',0,NULL,NULL,0,1427977698),
	(112,'sky','2663fbd77be5402c891069ce95474e50',0,NULL,NULL,0,1427977698),
	(113,'sky','13f5ec7ffc3e271f69a52ad537bb6aa6',0,NULL,NULL,0,1427977698),
	(114,'sky','65b15f1597b33fa87aa2faa6e21bc2b4',0,NULL,NULL,0,1427977698),
	(115,'sky','5b1554c7e47aec68e1e649695a805a49',0,NULL,NULL,0,1427977698),
	(116,'sky','0519fc7de7c5cbd6163673f872a5e785',0,NULL,NULL,0,1427977698),
	(117,'sky','544df7e33fcdbb2892923127f9e61264',0,NULL,NULL,0,1427977698),
	(118,'sky','77dabcbdc3650fe2ab4087ecd259e4e2',0,NULL,NULL,0,1427977698),
	(119,'sky','6e049ac790b422c40112f3b1bc24bd70',0,NULL,NULL,0,1427977698),
	(120,'sky','6b5dbd3bffa43b151cfdd5640d880b4f',0,NULL,NULL,0,1427977698),
	(121,'sky','950b372b6770507ff08c9e5434649f7a',0,NULL,NULL,0,1427980717),
	(122,'sky','6525e6b05d965173912b658a99f3b282',1,'akwdj','aksjdakwh@aksdja.com',1428480254,1427980725),
	(123,'sky','a50275b5dabc8f61de48138d9fa995dc',0,NULL,NULL,0,1428481077),
	(124,'sky','3dc03517a925ff1401304cb4f89b9463',0,NULL,NULL,0,1428481077),
	(125,'sky','6184072d9dc1293ee418a87ab6a21c9b',0,NULL,NULL,0,1428481084),
	(126,'sky','97a54674c04383ebaf62f612009c67d0',0,NULL,NULL,0,1428481084),
	(127,'sky','50c84f5524f82d6b63bfe23dd91036c7',0,NULL,NULL,0,1428481128);

/*!40000 ALTER TABLE `sky_invite_reg` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sky_session
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sky_session`;

CREATE TABLE `sky_session` (
  `userId` int(11) DEFAULT '0',
  `ocKey` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `ip` char(20) DEFAULT NULL,
  `data` text,
  `expires` int(11) DEFAULT '0',
  `updateTime` int(11) DEFAULT '0',
  `addTime` int(11) DEFAULT '0',
  KEY `userId` (`userId`),
  KEY `ocKey` (`ocKey`),
  KEY `expires` (`expires`),
  KEY `updateTime` (`updateTime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `sky_session` WRITE;
/*!40000 ALTER TABLE `sky_session` DISABLE KEYS */;

INSERT INTO `sky_session` (`userId`, `ocKey`, `token`, `ip`, `data`, `expires`, `updateTime`, `addTime`)
VALUES
	(25,'99dc388aa9ec992d22bbb962347104de','640375dd84ec132885b37f0b9405eb70','::1','a:7:{s:6:\"userId\";s:2:\"25\";s:5:\"email\";s:14:\"root@03sec.com\";s:10:\"adminLevel\";s:1:\"0\";s:8:\"userName\";s:4:\"test\";s:9:\"avatarImg\";N;s:11:\"avatarImg_s\";N;s:9:\"signature\";N;}',1429194552,1429172970,1429172952),
	(1,'7f1265eb9c470e7ccc4df838238d156e','4dd12b8da5aecb30a77d9ce723d868f0','::1','a:7:{s:6:\"userId\";s:1:\"1\";s:5:\"email\";s:13:\"sky@03sec.com\";s:10:\"adminLevel\";s:1:\"1\";s:8:\"userName\";s:3:\"sky\";s:9:\"avatarImg\";s:0:\"\";s:11:\"avatarImg_s\";s:0:\"\";s:9:\"signature\";N;}',1429206819,1429172936,1429170819),
	(1,'049158b675190b2687da3bc316fca594','86d3c89a81bfbf0241c591a15d600fca','::1','a:7:{s:6:\"userId\";s:1:\"1\";s:5:\"email\";s:13:\"sky@03sec.com\";s:10:\"adminLevel\";s:1:\"1\";s:8:\"userName\";s:3:\"sky\";s:9:\"avatarImg\";s:0:\"\";s:11:\"avatarImg_s\";s:0:\"\";s:9:\"signature\";N;}',1429183742,1429172946,1429172942);

/*!40000 ALTER TABLE `sky_session` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sky_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sky_user`;

CREATE TABLE `sky_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminLevel` tinyint(1) DEFAULT '0',
  `userName` varchar(50) DEFAULT NULL,
  `userPwd` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `validated` tinyint(1) DEFAULT '0',
  `validateKey` varchar(255) DEFAULT NULL,
  `avatarImg` varchar(255) DEFAULT NULL,
  `avatarImg_b` varchar(255) DEFAULT NULL,
  `avatarImg_s` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `creditPoint` int(11) DEFAULT '0',
  `rankPoint` int(11) DEFAULT '0',
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `contentNum` int(11) DEFAULT '0',
  `attentNum` int(11) DEFAULT '0',
  `hotNum` int(11) DEFAULT '0',
  `loginTime` int(11) DEFAULT '0',
  `addTime` int(11) DEFAULT '0',
  `ip` char(16) DEFAULT NULL,
  `inviter` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `sky_user` WRITE;
/*!40000 ALTER TABLE `sky_user` DISABLE KEYS */;

INSERT INTO `sky_user` (`id`, `adminLevel`, `userName`, `userPwd`, `email`, `validated`, `validateKey`, `avatarImg`, `avatarImg_b`, `avatarImg_s`, `signature`, `creditPoint`, `rankPoint`, `description`, `status`, `contentNum`, `attentNum`, `hotNum`, `loginTime`, `addTime`, `ip`, `inviter`)
VALUES
	(1,1,'sky','cef5511c427889620dffb4f81b92f797','sky@03sec.com',1,NULL,'','','',NULL,0,0,NULL,0,0,0,0,1429172942,1427342154,'::1','de6ab511fb643091f76458ba74f42749'),
	(25,0,'test','cef5511c427889620dffb4f81b92f797','root@03sec.com',1,'61346cda5f28992c729272e1e24a20e7',NULL,NULL,NULL,NULL,0,0,NULL,0,0,0,0,1429172952,1427938228,'::1',NULL);

/*!40000 ALTER TABLE `sky_user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
