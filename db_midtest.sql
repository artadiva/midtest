/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.38-MariaDB : Database - midtest
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`midtest` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `midtest`;

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` char(50) DEFAULT NULL,
  `nim` char(10) DEFAULT NULL,
  `alamat` char(100) DEFAULT NULL,
  `notelp` char(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`id`,`nama`,`nim`,`alamat`,`notelp`,`tgl_lahir`) values (1,'coba','1234567890','coba','20391031','2020-05-06'),(2,'asdawdawd','1234567890','coba','21212','2020-05-04'),(3,'kadek','2841390','jalan','81232342','2020-05-06'),(4,'wayan','1894738593','sukawati','847284923','2020-05-01'),(5,'komang','1943820482','gianyar','83647284','2020-05-04'),(7,'budi','8394857384','denpasar utara','0847583854753','2020-05-01'),(8,'doni','1984726475','denpasr selatan','08846372845','2020-05-11'),(9,'dodi','0746274853','denpasar utara','0843532674823','2020-05-08'),(10,'edo','2859365728','denpasar barat','087472857389','2020-05-01'),(11,'fanta','3785936475','denpsar timur','08465728942','2020-04-07'),(12,'arta diva','1805551057','banjar gelulung','0813370101','2020-01-30');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
