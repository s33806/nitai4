-- MySQL dump 10.13  Distrib 5.6.50, for Linux (x86_64)
--
-- Host: localhost    Database: nitai4-xf
-- ------------------------------------------------------
-- Server version	5.6.50-log

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
-- Table structure for table `xf_elements`
--

DROP TABLE IF EXISTS `xf_elements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xf_elements` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `uid` int(12) NOT NULL COMMENT '用户id',
  `name` varchar(255) NOT NULL COMMENT '技能名称',
  `proficiency` varchar(50) NOT NULL DEFAULT '50' COMMENT '熟练度',
  `evaluate` text NOT NULL COMMENT '评价',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='专业技能';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xf_elements`
--

LOCK TABLES `xf_elements` WRITE;
/*!40000 ALTER TABLE `xf_elements` DISABLE KEYS */;
INSERT INTO `xf_elements` VALUES (11,1,'恋爱','99%','本人单身cpdd'),(12,1,'社交','95%','患有社交牛逼症!'),(13,1,'JavaScript','30%','脚本语言的使用能力'),(14,1,'CSS3','75%','层叠样式表的使用能力'),(15,1,'HTML5','80%','标签语言的使用能力'),(16,1,'PR/AE','66%','剪辑特效都可以找我噢!'),(17,1,'Illustrator','75%','绘图也很腻害噢'),(18,1,'Photoshop','90%','LOGO制作,UI设计,广告设计...都可以找我噢!');
/*!40000 ALTER TABLE `xf_elements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xf_friend`
--

DROP TABLE IF EXISTS `xf_friend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xf_friend` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `userid` int(12) NOT NULL DEFAULT '1',
  `web_name` varchar(255) NOT NULL COMMENT '网站名称',
  `web_url` varchar(255) NOT NULL COMMENT '网站URL',
  `web_ico` varchar(255) NOT NULL COMMENT '网站ICO',
  `web_email` varchar(100) NOT NULL COMMENT 'QQ邮箱',
  `web_introduce` text NOT NULL COMMENT '网站介绍',
  `status` tinyint(1) DEFAULT '1',
  `web_time` varchar(20) NOT NULL COMMENT '提交时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COMMENT='友链';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xf_friend`
--

LOCK TABLES `xf_friend` WRITE;
/*!40000 ALTER TABLE `xf_friend` DISABLE KEYS */;
INSERT INTO `xf_friend` VALUES (20,1,'小枫音乐播放器','https://music.xfyun.club','https://www.xfwl.club/favicon.ico','1809185784@qq.com','小枫音乐播放器是一款功能强大的HTML悬浮播放器。',0,'2022-06-18 22:05:29'),(22,1,'小枫网络','https://www.xfwl.club','https://www.xfwl.club/favicon.ico','1809185784@qq.com','小枫网络是一家免费资源共享平台,专为新手打造的免费共享资源网',1,'2022-06-18 23:02:34'),(23,1,'小枫网络','https://www.xfwl.club','https://www.xfwl.club/favicon.ico','1809185784@qq.com','小枫网络是一家免费资源共享平台,专为新手打造的免费共享资源网',0,'2022-06-18 23:03:52');
/*!40000 ALTER TABLE `xf_friend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xf_hezuo`
--

DROP TABLE IF EXISTS `xf_hezuo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xf_hezuo` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL COMMENT '名称',
  `url` varchar(255) NOT NULL COMMENT '地址',
  `color` varchar(20) NOT NULL DEFAULT '#333' COMMENT '颜色',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='合作站点';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xf_hezuo`
--

LOCK TABLES `xf_hezuo` WRITE;
/*!40000 ALTER TABLE `xf_hezuo` DISABLE KEYS */;
INSERT INTO `xf_hezuo` VALUES (1,'稳定云互联 -一款高速的免备案虚拟主机平台','http://www.wdhost.cn','#e519e'),(2,'苏晨云计算|100G金牌防御|三线BGP|MC首选','http://cloud.stucnet.com','#a119e'),(3,'桔子岛论坛(https://www.jvzidao.com/)','http://www.jvzidao.com/','#1993e'),(4,'折云码支付 -专业稳定的支付技术服务商','http://mzf.zywln.cn','#e5611'),(5,'iQ群管 — 红包名片引流综合群管','http://iq.acybot.cn','#08993'),(6,'天天云社区,天天云机器人,天天云服务器,值得信赖','http://www.810fk.com/links/56E41181','#ff95d1'),(7,'鸿梦云-助力企业成功上云-稳定服务器','http://idc.homwl.cn','#37384');
/*!40000 ALTER TABLE `xf_hezuo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xf_msg`
--

DROP TABLE IF EXISTS `xf_msg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xf_msg` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '名称',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `msg` text NOT NULL COMMENT '内容',
  `addtime` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='留言';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xf_msg`
--

LOCK TABLES `xf_msg` WRITE;
/*!40000 ALTER TABLE `xf_msg` DISABLE KEYS */;
INSERT INTO `xf_msg` VALUES (1,'小枫','1809185784@qq.com','欢迎使用小枫拟态UI4.0',1655650350);
/*!40000 ALTER TABLE `xf_msg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xf_system`
--

DROP TABLE IF EXISTS `xf_system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xf_system` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `copyright` text NOT NULL,
  `sitename` varchar(150) NOT NULL COMMENT '网站名称',
  `site_title` varchar(255) NOT NULL COMMENT '网站副标题',
  `siteurl` varchar(255) NOT NULL COMMENT '网站链接',
  `recordno` varchar(50) NOT NULL COMMENT '备案信息',
  `keywords` varchar(255) NOT NULL COMMENT '关键词',
  `description` varchar(255) NOT NULL COMMENT '描述',
  `author` varchar(150) NOT NULL COMMENT '作者',
  `qq_group` varchar(50) NOT NULL COMMENT 'qq群',
  `site_logo` varchar(255) NOT NULL COMMENT '网站ico图标',
  `station_establishment_time` varchar(100) NOT NULL COMMENT '建站时间',
  `site_music` varchar(255) NOT NULL COMMENT '播放器KEY',
  `site_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '站点开关',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='系统设置';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xf_system`
--

LOCK TABLES `xf_system` WRITE;
/*!40000 ALTER TABLE `xf_system` DISABLE KEYS */;
INSERT INTO `xf_system` VALUES (1,'Copyright © 2022','小枫拟态ui4.0','Mimic UI4.0','https://www.xfwl.club','赣ICP备2020011714号','拟态ui设计,拟态源码,引导页,个人引导页,个人主页,个人介绍页,拟态引导页,简约个人主页,个人主页源码','拟态UI设计是小枫原创的一款简约平滑开源的个人主页设计。','小枫QQ1809185784','951649263','https://www.xfwl.club/favicon.ico','2022-06-18','606e5a8824639',1);
/*!40000 ALTER TABLE `xf_system` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xf_user`
--

DROP TABLE IF EXISTS `xf_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xf_user` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL COMMENT '账号',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `head_portrait` varchar(255) NOT NULL COMMENT '头像',
  `name` varchar(100) NOT NULL COMMENT '姓名',
  `age` tinyint(2) NOT NULL DEFAULT '18' COMMENT '年龄',
  `coordinate` varchar(50) NOT NULL COMMENT '北京',
  `hobby` varchar(255) NOT NULL DEFAULT '音乐' COMMENT '爱好',
  `qq` int(12) NOT NULL COMMENT 'qq',
  `wx` varchar(255) NOT NULL COMMENT '微信',
  `bilibili` varchar(255) NOT NULL COMMENT 'bilibili',
  `introduce` text NOT NULL COMMENT '关于介绍',
  `home_page_name` varchar(255) NOT NULL COMMENT '主页名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xf_user`
--

LOCK TABLES `xf_user` WRITE;
/*!40000 ALTER TABLE `xf_user` DISABLE KEYS */;
INSERT INTO `xf_user` VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e','/storage/avatar/0f/a1c04e2a284c4fd21b81a31283ebed.jpg','小枫',19,'江西','想你',1809185784,'/storage/avatar/d0/db9ac840ffb97d745ee3d4646c95a9.jpg','https://space.bilibili.com/349762020?spm_id_from=333.1007.0.0','本站前端源代码以及UI图由小枫原创，采用GPL2.0开源协议！','阿婆枫 | UP Maple');
/*!40000 ALTER TABLE `xf_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xf_website`
--

DROP TABLE IF EXISTS `xf_website`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xf_website` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL COMMENT '名称',
  `url` varchar(255) NOT NULL COMMENT 'url',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='旗下站点';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xf_website`
--

LOCK TABLES `xf_website` WRITE;
/*!40000 ALTER TABLE `xf_website` DISABLE KEYS */;
INSERT INTO `xf_website` VALUES (1,'小枫网络','http://www.xfwl.club'),(2,'h5音乐播放器','http://music.xfyun.club'),(3,'联系小枫','http://wpa.qq.com/msgrd?v=3&uin=1809185784&site=qq&menu=yes'),(4,'cpdd','http://wpa.qq.com/msgrd?v=3&uin=1809185784&site=qq&menu=yes');
/*!40000 ALTER TABLE `xf_website` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'nitai4-xf'
--

--
-- Dumping routines for database 'nitai4-xf'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-20  0:55:47
