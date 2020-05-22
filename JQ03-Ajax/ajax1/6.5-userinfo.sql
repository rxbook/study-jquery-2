/*
SQLyog Ultimate v8.32 
MySQL - 5.5.15-log : Database - ajaxpage
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ajaxpage` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ajaxpage`;

/*Table structure for table `userinfo` */

DROP TABLE IF EXISTS `userinfo`;

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `userinfo` */

insert  into `userinfo`(`id`,`name`,`password`) values (1,'sunyang1','sunyang1'),(2,'sunyang2','sunyang2'),(3,'sunyang3','sunyang3'),(4,'sunyang4','sunyang4'),(5,'sunyang5','sunyang5'),(6,'Changchun1','Changchun1'),(7,'Changchun2','Changchun2'),(8,'Changchun3','Changchun3'),(9,'Changchun4','Changchun4'),(10,'Changchun5','Changchun5'),(11,'Jilin1','Jilin1'),(12,'Jilin2','Jilin2'),(13,'Jilin3','Jilin3');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
