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

/*Table structure for table `bayarkas` */

DROP TABLE IF EXISTS `bayarkas`;

CREATE TABLE `bayarkas` (
  `id_bk` int(11) NOT NULL AUTO_INCREMENT,
  `siswa_bk` int(11) DEFAULT NULL,
  `bulan_bk` int(11) DEFAULT NULL,
  `kurang_bk` int(11) DEFAULT NULL,
  `tanggal_bk` date DEFAULT NULL,
  PRIMARY KEY (`id_bk`)
) ENGINE=InnoDB AUTO_INCREMENT=1801 DEFAULT CHARSET=latin1;

/*Table structure for table `login_kas` */

DROP TABLE IF EXISTS `login_kas`;

CREATE TABLE `login_kas` (
  `pin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `login_kas` */

insert  into `login_kas`(`pin`) values 
('4badaee57fed5610012a296273158f5f');

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

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
