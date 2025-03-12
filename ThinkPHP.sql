-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           11.5.2-MariaDB - mariadb.org binary distribution
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour thinkphp
DROP DATABASE IF EXISTS `thinkphp`;
CREATE DATABASE IF NOT EXISTS `thinkphp` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `thinkphp`;

-- Listage de la structure de la table thinkphp. quiz_answers
DROP TABLE IF EXISTS `quiz_answers`;
CREATE TABLE IF NOT EXISTS `quiz_answers` (
  `question` varchar(250) DEFAULT NULL,
  `reponse1` varchar(250) DEFAULT NULL,
  `reponse2` varchar(50) DEFAULT NULL,
  `reponse3` varchar(50) DEFAULT NULL,
  `reponse4` varchar(50) DEFAULT NULL,
  `vrai1` tinyint(1) DEFAULT NULL,
  `vrai2` tinyint(1) DEFAULT NULL,
  `vrai3` tinyint(1) DEFAULT NULL,
  `vrai4` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table thinkphp.quiz_answers : ~1 rows (environ)
DELETE FROM `quiz_answers`;
INSERT INTO `quiz_answers` (`question`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `vrai1`, `vrai2`, `vrai3`, `vrai4`) VALUES
	('Quelle est la capitale de la France ?', 'Paris', 'Berlin', 'Madrid', 'Marseillle', 1, 0, 0, 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
