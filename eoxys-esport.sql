-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 02 mars 2018 à 01:12
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eoxys-esport`
--

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `imagePath` varchar(100) NOT NULL,
  `imagePathSmall` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `date`, `title`, `text`, `imagePath`, `imagePathSmall`) VALUES
(18, '2018-02-15', 'Vous êtes les bienvenus chez Eoxys Esport', '<p>Bonjour,&nbsp;</p>\r\n\r\n<p>Je suis MydroX, Pr&eacute;sident et Fondateur d&#39;Eoxys Esport et afin de pr&eacute;senter la structure et ses objectifs voici une petite pr&eacute;sentation de l&#39;association.</p>\r\n\r\n<blockquote>\r\n<p>Eoxys Esport sera une association loi 1901, principalement tourn&eacute; vers l&#39;esport. L&#39;association prendra forme vers 3 parties distinctes : une administrative, une esportive, une dite &quot;fun&quot;.</p>\r\n\r\n<p>La partie administration aura pour but de veiller au bon fonctionnement de l&#39;association en g&eacute;n&eacute;ral et que le staff ainsi que les joueurs se sentent bien dans la structure.</p>\r\n\r\n<p>Celle esportive inclura tous les joueurs de line up y compris leurs leaders et managers et tout le staff qui aura autour de ces &eacute;quipes.</p>\r\n\r\n<p>Et enfin la partie &quot;fun&quot;, aura pour objectif de faire venir des joueurs n&#39;ayant pas de but esportif afin de les faire jouer ensemble ou avec des membres de line-up, pour leurs faire d&eacute;couvrir le jeu en &eacute;quipe et &eacute;ventuellement les former &agrave; un futur de joueur esport.</p>\r\n</blockquote>\r\n\r\n<p>Donc voici comment s&#39;annonce la structure de l&#39;association et son but. Si vous souhaitez consulter la pr&eacute;sentation compl&egrave;te voici le&nbsp;<a href=\"https://www.dropbox.com/s/mboypihcxwlgmlh/Presentation%20projet%20Eoxys%20Esport%20%5BFR%5D.pdf?dl=0\">lien</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Merci d&#39;avoir lu cette pr&eacute;sentation, vous etes maintenant les bienvenus dans l&#39; association et ce sera avec grand plaisir de vous acceuillir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>MydroX, Pr&eacute;sident fondateur d&#39;Eoxys Esport</p>\r\n', 'porte.png', 'porte-small.jpg'),
(19, '2018-02-15', 'Nouvelle équipe Overwatch', '<p>Bienvenue &agrave; la nouvelle &eacute;quipe Overwatch &agrave; qui on souhaite un maximum de r&eacute;ussite dans ses projets futures !&nbsp;</p>\r\n', 'ow.jpg', 'OW-small.jpg'),
(20, '2018-02-26', 'Nouvelle équipe Fortnite', '<p>Je souhaite la bienvenue &agrave; notre &eacute;quipe Fortnite tout en leur souhaitant le meilleur pour l&#39;avenir chez Eoxys Esport !&nbsp;</p>\r\n', 'fornite-banner.jpg', 'Fortnite-small.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(10) NOT NULL,
  `game` varchar(50) NOT NULL,
  `tournament` varchar(150) NOT NULL,
  `opponent_name` varchar(50) NOT NULL,
  `opponent_rounds` int(11) NOT NULL,
  `eoxys_rounds` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `results`
--

INSERT INTO `results` (`id`, `date`, `game`, `tournament`, `opponent_name`, `opponent_rounds`, `eoxys_rounds`) VALUES
(8, '2018-02-15', 'League of Legends', 'Futur tournoi', 'Adversaire', 0, 0),
(10, '2018-02-15', 'Rocket League', 'Futur tournoi', 'Adversaire', 0, 0),
(9, '2018-02-15', 'Overwatch', 'Futur tournoi', 'Adversaire', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `staff_and_players`
--

DROP TABLE IF EXISTS `staff_and_players`;
CREATE TABLE IF NOT EXISTS `staff_and_players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `game` varchar(50) NOT NULL,
  `player_name` varchar(30) NOT NULL,
  `player_position` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
