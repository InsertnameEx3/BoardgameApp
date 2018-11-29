-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                10.3.9-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Versie:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van boardgame wordt geschreven
CREATE DATABASE IF NOT EXISTS `boardgame` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `boardgame`;

-- Structuur van  tabel boardgame.battles wordt geschreven
CREATE TABLE IF NOT EXISTS `battles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dtPlayed` date NOT NULL,
  `gameid` int(11) NOT NULL,
  `wonby` varchar(128) NOT NULL,
  `score` varchar(256) DEFAULT NULL,
  `players` varchar(12800) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `battles_games__fk` (`gameid`),
  CONSTRAINT `battles_games__fk` FOREIGN KEY (`gameid`) REFERENCES `games` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- Dumpen data van tabel boardgame.battles: ~12 rows (ongeveer)
/*!40000 ALTER TABLE `battles` DISABLE KEYS */;
INSERT INTO `battles` (`id`, `dtPlayed`, `gameid`, `wonby`, `score`, `players`) VALUES
	(13, '2018-10-25', 14, '', NULL, 'admin<br>'),
	(15, '2018-10-25', 14, '', NULL, 'admin<br>user<br>'),
	(16, '2018-10-25', 14, '', NULL, 'admin<br>user<br>'),
	(17, '2018-10-25', 14, '', NULL, 'admin<br>user<br>'),
	(18, '2018-10-25', 15, '', NULL, 'admin<br>'),
	(19, '2018-10-25', 14, 'admin', NULL, 'admin<br>test<br>user<br>'),
	(20, '2018-10-25', 14, 'test', '15', 'admin<br>test<br>user<br>'),
	(21, '2018-10-25', 14, 'user', '16', 'admin<br>user<br>'),
	(22, '2018-10-25', 15, 'user', NULL, 'admin<br>user<br>'),
	(23, '2018-10-25', 14, 'test', '25', 'admin<br>test<br>user<br>'),
	(24, '2018-10-25', 14, 'admin', '800', 'admin<br>'),
	(25, '2018-10-25', 14, 'admin', '50', 'admin<br>user<br>');
/*!40000 ALTER TABLE `battles` ENABLE KEYS */;

-- Structuur van  tabel boardgame.games wordt geschreven
CREATE TABLE IF NOT EXISTS `games` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `nopf` int(2) NOT NULL,
  `nopt` int(4) NOT NULL,
  `dor` year(4) DEFAULT NULL,
  `publisherid` int(4) DEFAULT NULL,
  `score` bit(1) NOT NULL DEFAULT b'0',
  `duration` varchar(32) DEFAULT NULL,
  `description` varchar(12800) NOT NULL DEFAULT '',
  `suggestion` bit(1) DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- Dumpen data van tabel boardgame.games: ~8 rows (ongeveer)
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` (`id`, `name`, `nopf`, `nopt`, `dor`, `publisherid`, `score`, `duration`, `description`, `suggestion`) VALUES
	(14, 'Terra mystica', 1, 8, '1996', NULL, b'0', NULL, 'Terra mystica is an epic adventure like game', b'0'),
	(15, 'D&D', 2, 4, '1986', NULL, b'1', NULL, 'test', b'0'),
	(16, 'testofplayers', 1, 1, '2001', NULL, b'1', NULL, 'test', b'0'),
	(17, 'Suggestie', 1, 5, '1985', NULL, b'1', NULL, 'Dit is een suggestie', b'0'),
	(18, 'Suggestie', 1, 5, '2001', NULL, b'0', NULL, 'test', b'0'),
	(19, 'Red dead redemption', 1, 1, '2011', NULL, b'0', NULL, 'Geweldig spel', b'0'),
	(22, 'test', 1, 2, '2001', NULL, b'1', NULL, 'suggestie', b'1'),
	(23, 'Test2', 1, 5, '2008', NULL, b'0', NULL, 'leuk spel', b'1');
/*!40000 ALTER TABLE `games` ENABLE KEYS */;

-- Structuur van  tabel boardgame.player wordt geschreven
CREATE TABLE IF NOT EXISTS `player` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(128) NOT NULL,
  `gamestatus` bit(1) NOT NULL DEFAULT b'1',
  `wins` int(11) DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nickname` (`nickname`),
  CONSTRAINT `player_users_id_fk` FOREIGN KEY (`id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

-- Dumpen data van tabel boardgame.player: ~2 rows (ongeveer)
/*!40000 ALTER TABLE `player` DISABLE KEYS */;
INSERT INTO `player` (`id`, `nickname`, `gamestatus`, `wins`) VALUES
	(73, 'admin', b'0', 3),
	(74, 'user', b'1', 2);
/*!40000 ALTER TABLE `player` ENABLE KEYS */;

-- Structuur van  tabel boardgame.players wordt geschreven
CREATE TABLE IF NOT EXISTS `players` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `Player` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Player` (`Player`)
) ENGINE=InnoDB AUTO_INCREMENT=222 DEFAULT CHARSET=utf8;

-- Dumpen data van tabel boardgame.players: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `players` DISABLE KEYS */;
/*!40000 ALTER TABLE `players` ENABLE KEYS */;

-- Structuur van  tabel boardgame.users wordt geschreven
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `functie` varchar(50) NOT NULL DEFAULT 'gebruiker' COMMENT 'gebruiker/admin',
  `fname` varchar(128) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(256) DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

-- Dumpen data van tabel boardgame.users: ~2 rows (ongeveer)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `functie`, `fname`, `lname`, `email`, `password`) VALUES
	(73, 'admin', 'Admin', 'administrator', 'admin@admin.nl', '$2y$10$1faSdd9oP/6z58paWFZQeO5F3U35B0lOgfpYziL/HAyQIZELunO6W'),
	(74, 'gebruiker', 'user', 'user', 'user@user.com', '$2y$10$QxXTwR6vw9.ev3nw3xBWeOoVXl334pBq.f9bgrbGvt1u7mfNLTPGm');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
