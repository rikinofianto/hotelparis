/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.21-MariaDB : Database - db_hotel_id
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_hotel_id` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `db_hotel_id`;

/*Table structure for table `kamar` */

DROP TABLE IF EXISTS `kamar`;

CREATE TABLE `kamar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipe` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `selimut` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `tempat` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

/*Data for the table `kamar` */

insert  into `kamar`(`id`,`tipe`,`selimut`,`tempat`,`cusid`) values (1,'Kamar Presiden','Single','Gratis',0),(2,'Kamar Presiden','Double','Gratis',NULL),(3,'Kamar Presiden','Triple','Gratis',NULL),(4,'Kamar Biasa','Quad','Gratis',NULL),(5,'Kamar Presiden','Quad','Gratis',NULL),(6,'Kamar Superior','Single','Tidak Gratis',4),(7,'Kamar Superior','Double','Gratis',NULL),(8,'Kamar Superior','Triple','Tidak Gratis',6),(9,'Kamar Superior','Quad','Gratis',0),(10,'Kamar Keluarga','Single','Gratis',NULL),(11,'Kamar Keluarga','Double','Gratis',NULL),(12,'Kamar Keluarga','Quad','Gratis',NULL),(13,'Kamar Biasa','Single','Gratis',NULL),(14,'Kamar Biasa','Double','Gratis',NULL),(15,'Kamar Biasa','Triple','Gratis',NULL);

/*Table structure for table `kontak` */

DROP TABLE IF EXISTS `kontak`;

CREATE TABLE `kontak` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `no_tlp` varchar(13) DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `persetujuan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `kontak` */

insert  into `kontak`(`id`,`nama_lengkap`,`no_tlp`,`email`,`tanggal`,`persetujuan`) values (4,'bayu artika w','8912222','bayuartika67@gmail.com','2018-04-17','Allowed'),(5,'bayu artika w','8912222','bayuartika67@gmail.com','2018-04-17','Allowed');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `login` */

insert  into `login`(`id`,`username`,`password`) values (1,'Admin','1234');

/*Table structure for table `newsletterlog` */

DROP TABLE IF EXISTS `newsletterlog`;

CREATE TABLE `newsletterlog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(52) CHARACTER SET latin1 DEFAULT NULL,
  `subjek` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `berita` text CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `newsletterlog` */

insert  into `newsletterlog`(`id`,`judul`,`subjek`,`berita`) values (1,'','','');

/*Table structure for table `pembayaran` */

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `id` int(11) DEFAULT NULL,
  `gelar` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `nama_depan` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `nama_belakang` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `tipe_kamar` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `tipe_tempat_tidur` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `jml_kamar` int(11) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `ttot` double(10,2) DEFAULT NULL,
  `fintot` double(10,2) DEFAULT NULL,
  `mepr` double(10,2) DEFAULT NULL,
  `makanan` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `btot` double(10,2) DEFAULT NULL,
  `jml_hari` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `pembayaran` */

insert  into `pembayaran`(`id`,`gelar`,`nama_depan`,`nama_belakang`,`tipe_kamar`,`tipe_tempat_tidur`,`jml_kamar`,`check_in`,`check_out`,`ttot`,`fintot`,`mepr`,`makanan`,`btot`,`jml_hari`) values (2,'Bapak','bayu','artika','Kamar Superior','Single',1,'2018-04-18','2018-04-19',999999.99,4659275.00,0.00,'Hanya Kamar',3.20,1),(3,'Bapak','bayua','asas','Kamar Keluarga','Triple',1,'0000-00-00','0000-00-00',0.00,0.00,0.00,'Hanya Kamar',0.00,0),(4,'Bapak','jgf','llk','Kamar Superior','Single',1,'2018-04-18','2018-04-19',999999.99,3205235.00,0.00,'Hanya Kamar',2.20,1),(5,'Ibu','hvhv','lllk','Kamar Superior','Quad',1,'0000-00-00','2018-04-20',0.00,0.00,0.00,'Hanya Kamar',0.00,0),(6,'Bapak','hvhvj','jjjjj','Kamar Superior','Triple',1,'2018-04-18','2018-04-20',999999.99,999999.99,0.00,'Hanya Kamar',13.20,2);

/*Table structure for table `pesan_kamar` */

DROP TABLE IF EXISTS `pesan_kamar`;

CREATE TABLE `pesan_kamar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gelar` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `nama_depan` text CHARACTER SET latin1,
  `nama_belakang` text CHARACTER SET latin1,
  `email` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `kewarganegaraan` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `negara` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `no_telp` text CHARACTER SET latin1,
  `tipe_kamar` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `tempat_tidur` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `jml_kamar` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `makanan` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `status` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `jml_hari` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `pesan_kamar` */

insert  into `pesan_kamar`(`id`,`gelar`,`nama_depan`,`nama_belakang`,`email`,`kewarganegaraan`,`negara`,`no_telp`,`tipe_kamar`,`tempat_tidur`,`jml_kamar`,`makanan`,`check_in`,`check_out`,`status`,`jml_hari`) values (4,'Dr.','jgf','llk','jvhgvvgvg@hj','Indonesia','Indonesia','9899777','Kamar Superior','Single','1','Room only','2018-04-18','2018-04-19','Sesuai',1),(6,'Dr.','hvhvj','jjjjj','jnbj@gg','Indonesia','Indonesia','9998887','Kamar Superior','Triple','1','Room only','2018-04-18','2018-04-20','Sesuai',2),(7,'Prof.','hjhjhjhjh','jkkjkj','kjhkjhjk@kjjjk','Indonesia','Indonesia','0009090','Kamar Superior','Double','1','Room only','2018-04-18','2018-04-21','Tidak sesuai',3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
