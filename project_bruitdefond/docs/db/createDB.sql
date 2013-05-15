-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 15 Mai 2013 à 07:29
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bruitdefond`
--

-- --------------------------------------------------------

--
-- Structure de la table `dates`
--

CREATE TABLE IF NOT EXISTS `dates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` datetime NOT NULL,
  `title` varchar(200) CHARACTER SET latin1 NOT NULL,
  `place` varchar(200) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=7 ;

--
-- Contenu de la table `dates`
--

INSERT INTO `dates` (`id`, `day`, `title`, `place`) VALUES
(1, '2013-04-30 19:30:00', 'Axel Tour', 'Salle des fêtes Onet-le-chateau'),
(2, '2013-04-27 21:00:00', 'Festival cancan', 'Amphi - Rodez'),
(3, '2013-05-31 20:00:00', 'Xavier fait un mega barbeuc', 'Chez Xavier'),
(4, '2013-05-30 20:22:00', 'Nouvelle Scène', 'Paris');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` varchar(200) COLLATE latin1_general_cs NOT NULL,
  `content` varchar(2000) COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=5 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `timestamp`, `title`, `content`) VALUES
(3, '2013-05-15 06:30:00', 'Voici une news ', 'Une news ou vous pouvez mettre votre baratin sans fin'),
(4, '0000-00-00 00:00:00', 'Une seconde news pour tester', 'cette news veut elle marcher deux fois d affile ?');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `link` varchar(150) COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=27 ;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`id`, `timestamp`, `title`, `link`) VALUES
(22, '2013-05-13 07:00:00', 'vidéo 1', '8xMQTqSvzAw'),
(23, '2013-05-13 07:01:00', 'vidéo 2', 'TJcGxmLtBX8'),
(24, '2013-05-13 07:02:00', 'vidéo 3', 'B88Z9xTxFuw'),
(25, '2013-05-13 07:03:00', 'vidéo 4', 'o_Za_Te2368'),
(26, '2013-05-13 07:04:00', 'vidéo 5', '9sAKf6SIMy8');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
