/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.1.13-MariaDB : Database - exot1s
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`exot1s` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `exot1s`;

/*Table structure for table `absensi` */

DROP TABLE IF EXISTS `absensi`;

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa_absensi` int(11) DEFAULT NULL,
  `tanggal_absensi` date DEFAULT NULL,
  `status_absensi` int(11) DEFAULT '1',
  PRIMARY KEY (`id_absensi`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

/*Data for the table `absensi` */

insert  into `absensi`(`id_absensi`,`id_siswa_absensi`,`tanggal_absensi`,`status_absensi`) values 
(1,1,'2018-05-04',4),
(2,2,'2018-05-04',1),
(3,3,'2018-05-04',1),
(4,4,'2018-05-04',1),
(5,5,'2018-05-04',1),
(6,6,'2018-05-04',1),
(7,7,'2018-05-04',1),
(8,8,'2018-05-04',1),
(9,9,'2018-05-04',1),
(10,10,'2018-05-04',1),
(11,11,'2018-05-04',1),
(12,12,'2018-05-04',1),
(13,13,'2018-05-04',1),
(14,14,'2018-05-04',1),
(15,15,'2018-05-04',1),
(16,16,'2018-05-04',1),
(17,17,'2018-05-04',1),
(18,18,'2018-05-04',1),
(19,19,'2018-05-04',1),
(20,20,'2018-05-04',1),
(21,21,'2018-05-04',1),
(22,22,'2018-05-04',1),
(23,23,'2018-05-04',1),
(24,24,'2018-05-04',1),
(25,25,'2018-05-04',1),
(26,26,'2018-05-04',1),
(27,27,'2018-05-04',1),
(28,28,'2018-05-04',1),
(29,29,'2018-05-04',1),
(30,30,'2018-05-04',1),
(31,31,'2018-05-04',1),
(32,32,'2018-05-04',1),
(33,33,'2018-05-04',1),
(34,34,'2018-05-04',1),
(35,1,'2018-05-08',4),
(36,2,'2018-05-08',1),
(37,3,'2018-05-08',1),
(38,4,'2018-05-08',1),
(39,5,'2018-05-08',1),
(40,6,'2018-05-08',1),
(41,7,'2018-05-08',1),
(42,8,'2018-05-08',3),
(43,9,'2018-05-08',1),
(44,10,'2018-05-08',1),
(45,11,'2018-05-08',1),
(46,12,'2018-05-08',1),
(47,13,'2018-05-08',1),
(48,14,'2018-05-08',1),
(49,15,'2018-05-08',2),
(50,16,'2018-05-08',1),
(51,17,'2018-05-08',1),
(52,18,'2018-05-08',1),
(53,19,'2018-05-08',1),
(54,20,'2018-05-08',1),
(55,21,'2018-05-08',1),
(56,22,'2018-05-08',1),
(57,23,'2018-05-08',1),
(58,24,'2018-05-08',1),
(59,25,'2018-05-08',1),
(60,26,'2018-05-08',1),
(61,27,'2018-05-08',1),
(62,28,'2018-05-08',1),
(63,29,'2018-05-08',1),
(64,30,'2018-05-08',1),
(65,31,'2018-05-08',1),
(66,32,'2018-05-08',1),
(67,33,'2018-05-08',1),
(68,34,'2018-05-08',1);

/*Table structure for table `bayarkas` */

DROP TABLE IF EXISTS `bayarkas`;

CREATE TABLE `bayarkas` (
  `id_bk` int(11) NOT NULL AUTO_INCREMENT,
  `siswa_bk` int(11) DEFAULT NULL,
  `bulan_bk` int(11) DEFAULT NULL,
  `kurang_bk` int(11) DEFAULT NULL,
  `tanggal_bk` date DEFAULT NULL,
  PRIMARY KEY (`id_bk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bayarkas` */

/*Table structure for table `cat_galery` */

DROP TABLE IF EXISTS `cat_galery`;

CREATE TABLE `cat_galery` (
  `id_cat_img` int(11) NOT NULL AUTO_INCREMENT,
  `nama_cat_img` varchar(100) NOT NULL,
  PRIMARY KEY (`id_cat_img`,`nama_cat_img`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `cat_galery` */

insert  into `cat_galery`(`id_cat_img`,`nama_cat_img`) values 
(1,'Utama'),
(2,'Love'),
(4,'Dokumentasi');

/*Table structure for table `comment_galery` */

DROP TABLE IF EXISTS `comment_galery`;

CREATE TABLE `comment_galery` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `id_img_comment` int(11) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `comment_galery` */

/*Table structure for table `galery` */

DROP TABLE IF EXISTS `galery`;

CREATE TABLE `galery` (
  `id_img` int(11) NOT NULL AUTO_INCREMENT,
  `nama_img` varchar(100) DEFAULT NULL,
  `caption_img` varchar(1000) DEFAULT NULL,
  `cat_img` int(11) DEFAULT NULL,
  `uploader_img` varchar(100) DEFAULT 'EXOT1S Class',
  `waktu_upload_img` date DEFAULT NULL,
  `pin_img` varchar(100) DEFAULT NULL,
  `w_img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `galery` */

insert  into `galery`(`id_img`,`nama_img`,`caption_img`,`cat_img`,`uploader_img`,`waktu_upload_img`,`pin_img`,`w_img`) values 
(1,'a.jpg','Kebersamaan yang Hangat',1,'Khazim STAR','2018-05-12','aaa',NULL),
(2,'b.jpg','Cinta OYK',1,'EXOT1S Class','2018-05-12','bbb',NULL),
(3,'c.jpg','Cinta Kalian',2,'Khazim STAR','2018-05-12','ccc',NULL),
(4,'5.jpg','Gokuku STAR',1,'STAR K','2018-06-25','abcd','dryudb');

/*Table structure for table `keterlambatan` */

DROP TABLE IF EXISTS `keterlambatan`;

CREATE TABLE `keterlambatan` (
  `id_keterlambatan` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa_keterlambatan` int(11) DEFAULT NULL,
  `tanggal_keterlambatan` date DEFAULT NULL,
  PRIMARY KEY (`id_keterlambatan`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `keterlambatan` */

insert  into `keterlambatan`(`id_keterlambatan`,`id_siswa_keterlambatan`,`tanggal_keterlambatan`) values 
(1,1,'2018-05-03'),
(2,30,'2018-05-03'),
(5,3,'2018-05-03'),
(6,6,'2018-05-03'),
(7,12,'2018-05-04'),
(8,34,'2018-05-04'),
(9,1,'2018-05-04');

/*Table structure for table `login_absensi` */

DROP TABLE IF EXISTS `login_absensi`;

CREATE TABLE `login_absensi` (
  `pin` varchar(100) NOT NULL,
  PRIMARY KEY (`pin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `login_absensi` */

insert  into `login_absensi`(`pin`) values 
('aac4ef9e5c13676f102dba76a153684e');

/*Table structure for table `login_kas` */

DROP TABLE IF EXISTS `login_kas`;

CREATE TABLE `login_kas` (
  `pin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `login_kas` */

insert  into `login_kas`(`pin`) values 
('4badaee57fed5610012a296273158f5f');

/*Table structure for table `login_keterlambatan` */

DROP TABLE IF EXISTS `login_keterlambatan`;

CREATE TABLE `login_keterlambatan` (
  `pin` varchar(100) NOT NULL,
  PRIMARY KEY (`pin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `login_keterlambatan` */

insert  into `login_keterlambatan`(`pin`) values 
('05b8dc55ae61522bfdff45ae4e32e65b');

/*Table structure for table `manage_kas` */

DROP TABLE IF EXISTS `manage_kas`;

CREATE TABLE `manage_kas` (
  `id_mk` int(11) NOT NULL AUTO_INCREMENT,
  `mount_mk` varchar(30) DEFAULT NULL,
  `week_mk` int(1) DEFAULT NULL,
  `day_mk` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_mk`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `manage_kas` */

insert  into `manage_kas`(`id_mk`,`mount_mk`,`week_mk`,`day_mk`) values 
(1,'Januari',4,5),
(2,'Febuari',4,5),
(3,'Maret',4,5),
(4,'April',4,5),
(5,'Mei',4,5),
(6,'Juni',4,5),
(7,'Juli',4,5),
(8,'Agustus',4,5),
(9,'September',4,5),
(10,'Oktober',4,5),
(11,'November',4,5),
(12,'Desember',4,5);

/*Table structure for table `siswa` */

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

/*Data for the table `siswa` */

insert  into `siswa`(`id_siswa`,`nama_siswa`) values 
(1,'Adib Sauqi'),
(2,'Aisa Khumairoh'),
(3,'Berliana Febiarti'),
(4,'Cindy Dwiyanti'),
(5,'Dea Ayu lestari'),
(6,'Dian Melawati'),
(7,'Dina Sarofah'),
(8,'Dwiki Saputra'),
(9,'Fajrina Eka Amalia'),
(10,'Heri Kusuma'),
(11,'Hilda Ainu Rachma'),
(12,'Indah Ayu Lestari'),
(13,'Indah Dharu Kartika'),
(14,'Indri Dwi Arlita'),
(15,'Khazim Fikri Al-Fadhli'),
(16,'Khoiruddin Maulana Siddiq'),
(17,'Khusnah Alfianingrum'),
(18,'Legenda Telaga Asih'),
(19,'Lidia Putri Ayu Wandani'),
(20,'Melly'),
(21,'Moechlis Abdurrozak'),
(22,'Monika Yulia Andini'),
(23,'Muhammad Nazar Nurdiansyah'),
(24,'Niswatun Solikhah'),
(25,'Ramadina Fitriani'),
(26,'Rendi Herinarso'),
(27,'Riski Dwi Nugroho'),
(28,'Sinta Aprilia'),
(29,'Sipa Lestari'),
(30,'Siti Aminah'),
(31,'Syahrul Ramadhani Darmawan Putra'),
(32,'Syaifudin'),
(33,'Umiatun'),
(34,'Veni Rosiana');

/*Table structure for table `status_absensi` */

DROP TABLE IF EXISTS `status_absensi`;

CREATE TABLE `status_absensi` (
  `id_status_absensi` int(11) NOT NULL AUTO_INCREMENT,
  `ket_status_absensi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_status_absensi`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `status_absensi` */

insert  into `status_absensi`(`id_status_absensi`,`ket_status_absensi`) values 
(1,'Hadir'),
(2,'Izin'),
(3,'Sakit'),
(4,'Alfa');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
