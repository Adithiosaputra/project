/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_produk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_produk` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_produk`;

/*Table structure for table `tbl_barang` */

DROP TABLE IF EXISTS `tbl_barang`;

CREATE TABLE `tbl_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nmproduk` varchar(150) DEFAULT NULL,
  `jnproduk` enum('Shoes','Apparel','Accessories') DEFAULT NULL,
  `brand` enum('specs','piero','mizuno','nike','adidas') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_barang` */

insert  into `tbl_barang`(`id`,`nmproduk`,`jnproduk`,`brand`) values 
(9,'SPECS GALACTICA NBR FG-BLACK BEAN/BLACK','Shoes','specs');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
