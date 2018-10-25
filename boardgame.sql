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

-- Dumpen data van tabel boardgame.games: ~4 rows (ongeveer)
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

-- Dumpen data van tabel boardgame.player: ~2 rows (ongeveer)
/*!40000 ALTER TABLE `player` DISABLE KEYS */;
INSERT INTO `player` (`id`, `nickname`, `gamestatus`, `wins`) VALUES
	(73, 'admin', b'0', 3),
	(74, 'user', b'1', 2);
/*!40000 ALTER TABLE `player` ENABLE KEYS */;

-- Dumpen data van tabel boardgame.players: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `players` DISABLE KEYS */;
/*!40000 ALTER TABLE `players` ENABLE KEYS */;

-- Dumpen data van tabel boardgame.users: ~2 rows (ongeveer)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `functie`, `fname`, `lname`, `email`, `password`) VALUES
	(73, 'admin', 'Admin', 'administrator', 'admin@admin.nl', '$2y$10$1faSdd9oP/6z58paWFZQeO5F3U35B0lOgfpYziL/HAyQIZELunO6W'),
	(74, 'gebruiker', 'user', 'user', 'user@user.com', '$2y$10$QxXTwR6vw9.ev3nw3xBWeOoVXl334pBq.f9bgrbGvt1u7mfNLTPGm');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
