/*
SQLyog Enterprise v10.42 
MySQL - 5.7.18-log : Database - stockopname
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`stockopname` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `stockopname`;

/*Table structure for table `depo` */

DROP TABLE IF EXISTS `depo`;

CREATE TABLE `depo` (
  `id` int(10) DEFAULT NULL,
  `depo` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `so2021` */

DROP TABLE IF EXISTS `so2021`;

CREATE TABLE `so2021` (
  `barcode` varchar(21) DEFAULT NULL,
  `namaasset` varchar(66) DEFAULT NULL,
  `merk` varchar(19) DEFAULT NULL,
  `type` varchar(35) DEFAULT NULL,
  `user` varchar(22) DEFAULT NULL,
  `lokasi` varchar(23) DEFAULT NULL,
  `masterstock` int(11) DEFAULT NULL,
  `fisikopname` varchar(2) DEFAULT NULL,
  `kondisi` varchar(6) DEFAULT NULL,
  `keterangan` varchar(48) DEFAULT NULL,
  `depo` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `so2022` */

DROP TABLE IF EXISTS `so2022`;

CREATE TABLE `so2022` (
  `tanggal` datetime DEFAULT NULL,
  `barcode` varchar(30) NOT NULL,
  `namaasset` varchar(50) DEFAULT NULL,
  `merk` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `user` varchar(20) DEFAULT NULL,
  `depo` varchar(15) DEFAULT NULL,
  `lokasi` varchar(25) DEFAULT NULL,
  `masterstock` varchar(50) DEFAULT NULL,
  `fisikopname` varchar(5) DEFAULT NULL,
  `kondisi` varchar(10) DEFAULT NULL,
  `keterangan` text,
  `qrcode` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`barcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `so2023` */

DROP TABLE IF EXISTS `so2023`;

CREATE TABLE `so2023` (
  `tanggal` datetime DEFAULT NULL,
  `barcode` varchar(30) NOT NULL,
  `serialnum` varchar(30) DEFAULT NULL,
  `namaasset` varchar(50) DEFAULT NULL,
  `merk` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `user` varchar(20) DEFAULT NULL,
  `depo` varchar(15) DEFAULT NULL,
  `lokasi` varchar(25) DEFAULT NULL,
  `masterstock` varchar(10) DEFAULT NULL,
  `fisikopname` varchar(5) DEFAULT NULL,
  `kondisi` varchar(10) DEFAULT NULL,
  `keterangan` text,
  `qrcode` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`barcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
