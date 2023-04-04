# ************************************************************
# Sequel Ace SQL dump
# Version 20046
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.11.2-MariaDB-1:10.11.2+maria~ubu2204)
# Database: MatchAttax
# Generation Time: 2023-04-04 13:06:42 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table clubs
# ------------------------------------------------------------

CREATE OR REPLACE DATABASE MatchAttax;

USE MatchAttax;

DROP TABLE IF EXISTS `clubs`;

CREATE TABLE `clubs` (
                         `id` int(11) NOT NULL AUTO_INCREMENT,
                         `name` varchar(255) NOT NULL,
                         PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `clubs` WRITE;
/*!40000 ALTER TABLE `clubs` DISABLE KEYS */;

INSERT INTO `clubs` (`id`, `name`)
VALUES
    (1,'Liverpool'),
    (2,'Chelsea'),
    (3,'Tottenham'),
    (4,'Manchester United'),
    (5,'Machester City'),
    (6,'Arsenal');

/*!40000 ALTER TABLE `clubs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table player_stats
# ------------------------------------------------------------

DROP TABLE IF EXISTS `player_stats`;

CREATE TABLE `player_stats` (
                                `id` int(11) NOT NULL AUTO_INCREMENT,
                                `player_id` int(11) NOT NULL,
                                `star_rating` int(11) NOT NULL,
                                `rarity` varchar(255) NOT NULL,
                                `dob` date NOT NULL,
                                `country` varchar(255) NOT NULL,
                                PRIMARY KEY (`id`),
                                KEY `player_id` (`player_id`),
                                CONSTRAINT `player_stats_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `player_stats` WRITE;
/*!40000 ALTER TABLE `player_stats` DISABLE KEYS */;

INSERT INTO `player_stats` (`id`, `player_id`, `star_rating`, `rarity`, `dob`, `country`)
VALUES
    (1,1,5,'Showboat \'The Step Over\'','1985-10-09','Croatia'),
    (2,2,5,'Star Player','1978-06-20','England'),
    (3,3,5,'Standard','1970-10-29','Netherlands'),
    (4,4,5,'Star Player','1985-02-05','Portugal'),
    (5,5,5,'Man Of The Match','1978-03-11','Ivory Coast'),
    (6,6,5,'Star Player','1980-05-30','England'),
    (7,7,3,'Standard','1989-10-01','England'),
    (8,8,5,'Standard','1978-11-07','England'),
    (9,9,5,'Star Player','1978-01-28','England'),
    (10,10,5,'Standard','1984-03-20','Spain'),
    (11,11,5,'Star Player','1980-12-07','England'),
    (12,12,5,'Man Of The Match','1989-03-16','England'),
    (13,13,5,'Limited Edition ','1980-10-04','Czech Republic'),
    (14,14,5,'Golden Moment 2004/05 - Record Clean Sheets','1982-05-20','Czech Republic'),
    (15,15,5,'Man Of The Match','1992-01-01','England'),
    (16,16,5,'Man Of The Match','1987-05-04','Spain');

/*!40000 ALTER TABLE `player_stats` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table players
# ------------------------------------------------------------

DROP TABLE IF EXISTS `players`;

CREATE TABLE `players` (
                           `id` int(11) NOT NULL AUTO_INCREMENT,
                           `name` varchar(255) NOT NULL,
                           `club_id` int(11) NOT NULL,
                           `attack` int(11) NOT NULL,
                           `defence` int(11) NOT NULL,
                           `position_id` int(11) NOT NULL,
                           `image` varchar(255) NOT NULL,
                           PRIMARY KEY (`id`),
                           KEY `club_id` (`club_id`),
                           KEY `players_position_fk` (`position_id`),
                           CONSTRAINT `players_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`),
                           CONSTRAINT `players_position_fk` FOREIGN KEY (`position_id`) REFERENCES `position` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `players` WRITE;
/*!40000 ALTER TABLE `players` DISABLE KEYS */;

INSERT INTO `players` (`id`, `name`, `club_id`, `attack`, `defence`, `position_id`, `image`)
VALUES
    (1,'Luka Modric',3,57,87,3,'https://res.cloudinary.com/dhi7djro1/image/upload/v1680607985/IMG_0031_1_gsfn7l.jpg'),
    (2,'Frank Lampard',2,65,81,3,'https://res.cloudinary.com/dhi7djro1/image/upload/v1680607615/IMG_0022_vq3xpu.jpg'),
    (3,'Edwin Van Der Sar',4,3,88,1,'https://res.cloudinary.com/dhi7djro1/image/upload/v1680607708/IMG_0030_t24nek.jpg'),
    (4,'Cristiano Ronaldo',4,90,24,3,'https://res.cloudinary.com/dhi7djro1/image/upload/v1680607627/IMG_0029_iitnb1.jpg'),
    (5,'Didier Drogba',2,100,53,4,'https://res.cloudinary.com/dhi7djro1/image/upload/v1680607620/IMG_0028_u8eljl.jpg'),
    (6,'Steven Gerrard',1,84,80,3,'https://res.cloudinary.com/dhi7djro1/image/upload/v1680607617/IMG_0027_clpvyl.jpg'),
    (7,'Daniel Sturridge',5,59,12,4,'https://res.cloudinary.com/dhi7djro1/image/upload/v1680607619/IMG_0026_i0wpxe.jpg'),
    (8,'Rio Ferdinand ',4,38,89,2,'https://res.cloudinary.com/dhi7djro1/image/upload/v1680607617/IMG_0025_vsosng.jpg'),
    (9,'Jamie Carragher',1,22,86,2,'https://res.cloudinary.com/dhi7djro1/image/upload/v1680607618/IMG_0024_rvph1h.jpg'),
    (10,'Fernando Torres',1,88,11,4,'https://res.cloudinary.com/dhi7djro1/image/upload/v1680607580/IMG_0021_klkdh2.jpg'),
    (11,'John Terry',2,41,90,2,'https://res.cloudinary.com/dhi7djro1/image/upload/v1680607580/IMG_0018_ub6kam.jpg'),
    (12,'Theo Walcott',6,93,38,4,'https://res.cloudinary.com/dhi7djro1/image/upload/v1680607580/IMG_0016_sntc55.jpg'),
    (13,'Tomas Rosicky',6,77,53,3,'https://res.cloudinary.com/dhi7djro1/image/upload/v1680607578/IMG_0015_ox3elb.jpg'),
    (14,'Petr Cech',2,3,99,1,'https://res.cloudinary.com/dhi7djro1/image/upload/v1680607576/IMG_0014_bzjhvi.jpg'),
    (15,'Jack Wilshere',6,92,72,3,'https://res.cloudinary.com/dhi7djro1/image/upload/v1680607348/IMG_0013_iknbyb.jpg'),
    (16,'Francesc Fabregas',6,94,82,3,'https://res.cloudinary.com/dhi7djro1/image/upload/v1680604368/IMG_0012_tw1j4a.jpg');

/*!40000 ALTER TABLE `players` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table position
# ------------------------------------------------------------

DROP TABLE IF EXISTS `position`;

CREATE TABLE `position` (
                            `id` int(11) NOT NULL AUTO_INCREMENT,
                            `name` varchar(255) NOT NULL,
                            PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `position` WRITE;
/*!40000 ALTER TABLE `position` DISABLE KEYS */;

INSERT INTO `position` (`id`, `name`)
VALUES
    (1,'Goalkeeper'),
    (2,'Defender'),
    (3,'Midfielder'),
    (4,'Forward');

/*!40000 ALTER TABLE `position` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
