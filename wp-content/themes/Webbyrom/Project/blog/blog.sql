-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 09 mars 2018 à 09:44
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

DROP TABLE IF EXISTS `billets`;
CREATE TABLE IF NOT EXISTS `billets` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `billets`
--

INSERT INTO `billets` (`id`, `titre`, `contenu`, `date_creation`) VALUES
(1, 'test1', 'Lorem 1 Lorem 1 Lorem 1 Lorem 1 Lorem 1 Lorem 1 Lorem 1 Lorem 1 Lorem 1 Lorem 1 Lorem 1 Lorem 1 Lorem 1 Lorem 1 Lorem 1 Lorem 1 Lorem 1 Lorem 1 Lorem 1 Lorem 1 ', '2017-12-15 00:00:00'),
(2, 'test2', 'Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 Lorem 2 ', '2017-12-16 00:00:00'),
(20, 'dfghjk', 'fdghgrfeb,edgegevevvebebetbeteb !!!', '2018-02-14 13:37:09');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `id_billet` int(16) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_billet`, `auteur`, `commentaire`, `date_commentaire`) VALUES
(20, 2, 'grvdf', 'vdfvdfvdfvdfvdfv', '2017-12-18 16:55:46'),
(21, 1, 'NAIM', 'YES PAPA !', '2017-12-18 16:56:00'),
(18, 1, 'rgthgrdrf', 'bdfbgdfbdfbgdfg', '2017-12-18 15:37:27'),
(19, 2, 'hdthfgh', 'ngnhfgngnfgnfgngn', '2017-12-18 15:37:38'),
(17, 2, 'abdel', 'je suis tombé sur ce site et franchement il est génial on peut laisser des commentaires comme ca, gratuit franchemenheuu\r\n', '2017-12-18 13:42:29'),
(16, 1, 'bdfhdtfhdg', 'hdghghghgh', '2017-12-18 12:06:13'),
(14, 1, ' vdwvxdvx', ' vxvxcvxcvxv', '2017-12-18 11:59:09'),
(15, 2, 'dthtfjhfj', 'jhghjfhjhj', '2017-12-18 12:06:07'),
(13, 2, 'dfbdfgdfbdf', 'bdfbdfbdfbdfbdgb', '2017-12-18 11:58:59'),
(22, 14, 'tim', 'toto\r\n\r\n', '2017-12-19 11:14:54'),
(23, 14, 'tom', 'Check', '2017-12-19 13:02:01'),
(24, 18, 'fzefzef', 'fzeeeeeeeeeeeeeeeeeeeeeeeeee', '2017-12-21 14:42:06'),
(25, 18, 'zefzefze', 'zefzefzefzefzefzefzgzrgzegze', '2018-01-05 16:42:35'),
(26, 18, 'bdgbdbgd', 'dbfbdfbdfbdfb', '2018-01-05 16:45:27'),
(27, 18, 'fdefgfe', 'efgfrerf', '2018-01-09 11:36:19'),
(28, 18, 'ghj', 'dsfgbvnhvdfsf', '2018-01-22 15:12:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
