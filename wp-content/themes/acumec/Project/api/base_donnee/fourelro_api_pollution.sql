-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 11 Janvier 2018 à 09:33
-- Version du serveur :  10.1.26-MariaDB-0+deb9u1
-- Version de PHP :  7.0.19-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fourelro_api_pollution`
--

-- --------------------------------------------------------

--
-- Structure de la table `bdpollution2.5`
--

CREATE TABLE `bdpollution2.5` (
  `id` int(11) NOT NULL,
  `geo\time` varchar(17) DEFAULT NULL,
  `2000` varchar(4) DEFAULT NULL,
  `2001` varchar(4) DEFAULT NULL,
  `2002` varchar(4) DEFAULT NULL,
  `2003` varchar(4) DEFAULT NULL,
  `2004` varchar(4) DEFAULT NULL,
  `2005` varchar(4) DEFAULT NULL,
  `2006` varchar(4) DEFAULT NULL,
  `2007` varchar(4) DEFAULT NULL,
  `2008` varchar(4) DEFAULT NULL,
  `2009` varchar(4) DEFAULT NULL,
  `2010` varchar(4) DEFAULT NULL,
  `2011` varchar(4) DEFAULT NULL,
  `2012` varchar(4) DEFAULT NULL,
  `2013` varchar(4) DEFAULT NULL,
  `2014` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `bdpollution2.5`
--

INSERT INTO `bdpollution2.5` (`id`, `geo\time`, `2000`, `2001`, `2002`, `2003`, `2004`, `2005`, `2006`, `2007`, `2008`, `2009`, `2010`, `2011`, `2012`, `2013`, `2014`) VALUES
(1, 'EU (28 countries)', '14,4', '14,4', '14,6', '14,9', '16,8', '15,5', '17,7', '16,7', '17,5', '17,4', '18', '18,4', '16,8', '15,9', '15,2'),
(2, 'Belgium', '14,5', '14,3', '14,5', '15,2', '13,3', '15', '18,5', '21,1', '18,6', '18,9', '17,7', '17,7', '16,1', '16,8', '14,2'),
(3, 'Bulgaria', ':', ':', ':', ':', ':', ':', '44,7', '41,2', '41,5', '24,7', '31,1', '41,3', '29,3', '26,5', '26,1'),
(4, 'Czech Republic', ':', ':', ':', ':', '23,8', '26,1', '25', '18', '19,3', '20,3', '22,8', '21', '19,2', '20,4', '19'),
(5, 'Denmark', ':', ':', ':', ':', '9,7', '10,8', '11,7', '10,3', '10,8', '10,2', '11', '16,3', '11,1', '10,1', '12,4'),
(6, 'Germany', ':', ':', ':', '17,7', '13', '15,6', '17,1', '15,3', '16,1', '16,7', '17,4', '17,1', '14,2', '14,6', '15,1'),
(7, 'Estonia', ':', ':', ':', ':', ':', ':', ':', '10,9', '5,4', '6,2', '7,6', '6,9', '7,8', '8,1', '8,6'),
(8, 'Ireland', ':', ':', ':', ':', ':', ':', ':', ':', ':', '9,6', '10,9', '9', ':', '10,3', '7,8'),
(9, 'Greece', ':', ':', ':', ':', ':', '28,6', ':', '26,2', '24,3', '20', ':', '17', '18,4', ':', ':'),
(10, 'Spain', ':', ':', ':', ':', '14,1', '13,2', '20,7', '13,1', '14,2', '15,2', '12,4', '12,8', '13,5', '10', '11,1'),
(11, 'France', ':', '20,7', '15,8', '15,6', '13,4', '13,5', '13,6', '12,9', '15,5', '18,1', '18,3', '17,8', '16', '15,4', '12,6'),
(12, 'Croatia', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':'),
(13, 'Italy', ':', ':', ':', ':', '51,4', ':', '30,8', '28,8', '25,1', '25,1', '23,3', '26,8', '23', '20,1', '17,5'),
(14, 'Cyprus', ':', ':', ':', ':', ':', ':', ':', ':', ':', '21,5', '22,2', '23,2', '24,3', '17', '17,2'),
(15, 'Latvia', ':', ':', ':', ':', ':', ':', ':', ':', '19,4', '15,8', ':', ':', '17,3', '16,8', '18,3'),
(16, 'Lithuania', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':'),
(17, 'Luxembourg', ':', ':', ':', ':', ':', ':', ':', ':', ':', '18,9', '16', '13,7', '12,2', ':', '11,4'),
(18, 'Hungary', ':', ':', ':', ':', ':', ':', ':', ':', ':', '16', '22,3', '26,5', '23,4', '17,3', '20,2'),
(19, 'Malta', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':'),
(20, 'Netherlands', ':', ':', ':', ':', ':', ':', ':', ':', '16,3', '16,7', '17,1', '16,8', '13,5', '13,9', '13,9'),
(21, 'Austria', ':', ':', ':', ':', ':', '23,8', '25', '23,1', '19,9', '17,9', '19,9', '19', '16,2', '17', '14,8'),
(22, 'Poland', ':', ':', ':', ':', ':', '23,8', '22', ':', '33,1', '30', '30,5', '27,4', '27,1', '24,5', '26,1'),
(23, 'Portugal', ':', ':', ':', ':', '15,4', '15,3', '13,6', '15,1', '11,1', '11,2', '8,8', '10,9', '9,5', '9,9', '9,9'),
(24, 'Romania', ':', ':', ':', ':', ':', ':', ':', ':', ':', '19', '19,1', '19,5', '19,4', '14,9', '15,1'),
(25, 'Slovenia', ':', ':', ':', ':', ':', ':', ':', ':', '23,9', '18,7', '21,8', '24,1', '20,4', '20,1', '17,5'),
(26, 'Slovakia', ':', ':', ':', '22,8', ':', ':', '33,3', '26,4', '25,1', '27,2', '22,8', '26,7', '22,7', '17,2', '19,7'),
(27, 'Finland', ':', '8,2', '8,8', '8,8', '7,6', '8,3', '9,8', '8,8', '8,4', '7,6', '8,4', '7,5', '7', '6,6', '8,4'),
(28, 'Sweden', ':', ':', ':', ':', '10,7', '11,1', '11,7', '9,5', '9,2', '7,2', '7,4', '7,8', '6', '5,5', '7,2'),
(29, 'United Kingdom', '14,3', '13,1', '13,7', '14,1', '12,5', '12,8', '14', '14,2', '12,9', '13,2', '13,8', '14,7', '13,1', '12,9', '12,8'),
(30, 'Iceland', ':', ':', ':', '7,6', '9,5', '7,7', ':', ':', ':', '6', '7,7', '4,7', '4,6', '7', ':'),
(31, 'Norway', ':', ':', ':', ':', '9,1', '9,5', '10', ':', '8,1', '8,2', '10,2', '8,3', '7,6', '7,2', '7,6'),
(32, 'Switzerland', '17,2', '18,1', '19,5', '22,6', '18,6', '18,5', '18,1', '15,6', '14,3', '14,6', ':', ':', ':', ':', ':'),
(33, ':=not available ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 'Source of Data:', 'Euro', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 'Last update:', '28.1', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 'Date of extractio', '10 J', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, 'Hyperlink to the ', 'http', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 'General Disclaime', 'http', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, 'Code:', 'sdg_', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `bdpollution10`
--

CREATE TABLE `bdpollution10` (
  `id` int(11) NOT NULL,
  `geo\time` varchar(17) DEFAULT NULL,
  `2000` varchar(4) DEFAULT NULL,
  `2001` varchar(4) DEFAULT NULL,
  `2002` varchar(4) DEFAULT NULL,
  `2003` varchar(4) DEFAULT NULL,
  `2004` varchar(4) DEFAULT NULL,
  `2005` varchar(4) DEFAULT NULL,
  `2006` varchar(4) DEFAULT NULL,
  `2007` varchar(4) DEFAULT NULL,
  `2008` varchar(4) DEFAULT NULL,
  `2009` varchar(4) DEFAULT NULL,
  `2010` varchar(4) DEFAULT NULL,
  `2011` varchar(4) DEFAULT NULL,
  `2012` varchar(4) DEFAULT NULL,
  `2013` varchar(4) DEFAULT NULL,
  `2014` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `bdpollution10`
--

INSERT INTO `bdpollution10` (`id`, `geo\time`, `2000`, `2001`, `2002`, `2003`, `2004`, `2005`, `2006`, `2007`, `2008`, `2009`, `2010`, `2011`, `2012`, `2013`, `2014`) VALUES
(1, 'EU (28 countries)', '28.7', '27.5', '27.7', '30.1', '26.9', '28.4', '30.2', '28.5', '26.3', '26.1', '25.8', '27', '24.7', '23.8', '22.5'),
(2, 'Belgium', '32.6', '33.9', '33', '36.1', '31.4', '29.8', '30.8', '26.2', '26.1', '29', '27', '26.7', '24.8', '24.7', '21.7'),
(3, 'Bulgaria', '20.4', ':', ':', '58.7', '51.9', '49.7', '54.9', '57.5', '61', '54.5', '48.6', '57.8', '46.1', '43.9', '41.2'),
(4, 'Czech Republic', '30.2', '32.7', '39.2', '41.9', '34.4', '34.9', '35.8', '27.3', '25.9', '26.8', '29.9', '29.2', '27.2', '27.6', '27.7'),
(5, 'Denmark', ':', ':', '24.1', '24.5', '19.5', '24.2', '27.2', '21.9', '21.4', '17', '12.1', ':', '17.4', ':', '19.5'),
(6, 'Germany', '26.6', '25', '26.8', '29.2', '23.6', '24.4', '25.9', '22.4', '21', '22.3', '22.8', '22.8', '19.7', '20.3', '20.3'),
(7, 'Estonia', ':', '18.2', '21.3', '19.4', '17.6', '20.7', '22.7', '18.6', '11.1', '13.3', '13.9', '12.5', '12.7', '13.8', '15.3'),
(8, 'Ireland', ':', '20.4', '19.2', '18.8', '14.7', '15.1', '16.5', '14.7', '13.8', '13.3', '15.6', '15.7', '12.7', '12.2', '14.3'),
(9, 'Greece', ':', '47.3', '44.8', '43.2', '45.1', '41.1', '42.5', '37.8', '41.6', '34.2', '33.4', '26.4', '30', ':', '25.8'),
(10, 'Spain', '38.7', '31.7', '31.9', '33', '32', '34.2', '34.8', '31.5', '26.9', '25.7', '23.9', '23.3', '24.7', '19.5', '20.7'),
(11, 'France', ':', '21.4', '21.5', '23.6', '20.5', '20.3', '20.9', '27', '24.1', '26.6', '25', '25.5', '23.9', '22.9', '18.2'),
(12, 'Croatia', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':'),
(13, 'Italy', '48.7', '39.4', '40.1', '39.2', '38', '40.3', '38.8', '37.8', '35.3', '32.9', '30.3', '35.2', '30.6', '28.7', '26.8'),
(14, 'Cyprus', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', '48', '35.7', '36.4', '37.4', '32.4'),
(15, 'Latvia', ':', ':', ':', ':', ':', ':', ':', ':', '23.8', '20.3', '24.4', '23', '22.8', '21.4', '23.7'),
(16, 'Lithuania', ':', ':', ':', ':', '23.3', '22.8', '20.3', '20.6', '18.5', '23', '26.9', '22.7', '20.3', '24.1', '23.4'),
(17, 'Luxembourg', ':', ':', ':', ':', ':', ':', '21', '17.2', '14.4', '14.2', '17', '18.2', '17.8', '20.8', '20.7'),
(18, 'Hungary', ':', ':', ':', '33.9', '23.7', '39', '37.4', '31.6', '29.3', '29.7', '31.3', '33.3', '28.8', '27.3', '28.2'),
(19, 'Malta', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':', ':'),
(20, 'Netherlands', '31', '30.2', '32.4', '34.7', '30.6', '30', '32.5', '31.2', '25.3', '25.3', '24.7', '25.3', '21.2', '21.2', '21.2'),
(21, 'Austria', '25.9', '33', '25.7', '30.8', '24.8', '28.9', '29.9', '23', '22.4', '23.8', '26.9', '27', '22.5', '23.4', '20.9'),
(22, 'Poland', '40.3', '37.7', '41.3', '42.8', '34', '37.1', '42.6', '32.3', '31.5', '34.9', '38.2', '39.3', '37.3', '33.1', '35.2'),
(23, 'Portugal', '32.7', '36.5', '34.3', '33.7', '33.9', '34.2', '33.2', '31.3', '24.2', '26.3', '24.5', '26.3', '22.3', '22', '20'),
(24, 'Romania', ':', ':', ':', '49.9', '54', '49.4', '52.8', '45.6', '39.7', '29.9', '34.9', '38.4', '33.3', '25.5', '25'),
(25, 'Slovenia', ':', ':', '31', '44', '40.9', '36.8', '33.3', '32.3', '29.1', '27.5', '28.2', '31', '25.4', '24.9', '22.5'),
(26, 'Slovakia', '29.1', '27.1', '28.8', '30.3', '31.5', '33.8', '31.2', '28.7', '27.1', '24.8', '29.6', '34.4', '28.9', '24.5', '27.9'),
(27, 'Finland', '14.7', '15.3', '15.9', '15.3', '13.5', '14.8', '15.7', '15.6', '13.4', '13.1', '13.4', '12.5', '11.1', '12', '13.7'),
(28, 'Sweden', '16.9', '17.8', '19.3', '19.2', '18.1', '19.5', '20.1', '17.2', '17.4', '14.5', '14', '16', '14.1', '14.9', '14.3'),
(29, 'United Kingdom', '23.2', '23.9', '23.1', '25.9', '22.4', '23.3', '24.7', '23.9', '20.8', '18.9', '17.9', '21.3', '17.9', '17.8', '17.7'),
(30, 'Iceland', ':', ':', ':', '21.3', '29.7', '19.6', '20.2', '11.5', ':', '8.6', '10.8', '9.1', '8.7', '11.5', ':'),
(31, 'Norway', ':', ':', ':', '19.6', '16.8', '22.4', '22.2', '20', '18.6', '18.6', '20.8', '20.3', '16.2', '17.2', '14.8'),
(32, 'Switzerland', '22.4', '22.5', '23.2', '26.7', '21.8', '22.5', '24.9', '20.5', '20.1', '20.5', '20.3', '21.3', '18.4', '19.4', ':');

-- --------------------------------------------------------

--
-- Structure de la table `consultation_cardio`
--

CREATE TABLE `consultation_cardio` (
  `id` int(11) NOT NULL,
  `pays` varchar(18) DEFAULT NULL,
  `2001` varchar(6) DEFAULT NULL,
  `2002` varchar(6) DEFAULT NULL,
  `2003` varchar(6) DEFAULT NULL,
  `2004` varchar(6) DEFAULT NULL,
  `2005` varchar(6) DEFAULT NULL,
  `2006` varchar(6) DEFAULT NULL,
  `2007` varchar(6) DEFAULT NULL,
  `2008` varchar(6) DEFAULT NULL,
  `2009` varchar(6) DEFAULT NULL,
  `2010` varchar(6) DEFAULT NULL,
  `2011` varchar(6) DEFAULT NULL,
  `2012` varchar(6) DEFAULT NULL,
  `2013` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `consultation_cardio`
--

INSERT INTO `consultation_cardio` (`id`, `pays`, `2001`, `2002`, `2003`, `2004`, `2005`, `2006`, `2007`, `2008`, `2009`, `2010`, `2011`, `2012`, `2013`) VALUES
(1, '001 France entière', '1859,9', '1875,9', '1848,4', '1822,7', '1712,3', '1724,9', '1684,4', '1652,9', '1614,7', '1577,5', '1556,8', '1540,1', '1516,4');

-- --------------------------------------------------------

--
-- Structure de la table `consultation_pneumo`
--

CREATE TABLE `consultation_pneumo` (
  `id` int(11) NOT NULL,
  `pays` varchar(18) DEFAULT NULL,
  `2001` int(4) DEFAULT NULL,
  `2002` int(4) DEFAULT NULL,
  `2003` int(4) DEFAULT NULL,
  `2004` int(4) DEFAULT NULL,
  `2005` int(4) DEFAULT NULL,
  `2006` int(4) DEFAULT NULL,
  `2007` int(4) DEFAULT NULL,
  `2008` int(4) DEFAULT NULL,
  `2009` int(4) DEFAULT NULL,
  `2010` int(4) DEFAULT NULL,
  `2011` int(4) DEFAULT NULL,
  `2012` int(4) DEFAULT NULL,
  `2013` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `consultation_pneumo`
--

INSERT INTO `consultation_pneumo` (`id`, `pays`, `2001`, `2002`, `2003`, `2004`, `2005`, `2006`, `2007`, `2008`, `2009`, `2010`, `2011`, `2012`, `2013`) VALUES
(1, '001 France entière', 3436, 3503, 3485, 3477, 3423, 3694, 3828, 3828, 3953, 3992, 3852, 3857, 3882);

-- --------------------------------------------------------

--
-- Structure de la table `consultation_totale`
--

CREATE TABLE `consultation_totale` (
  `id` int(11) NOT NULL,
  `pays` varchar(18) DEFAULT NULL,
  `2001` varchar(6) DEFAULT NULL,
  `2002` varchar(6) DEFAULT NULL,
  `2003` varchar(6) DEFAULT NULL,
  `2004` varchar(6) DEFAULT NULL,
  `2005` varchar(6) DEFAULT NULL,
  `2006` varchar(6) DEFAULT NULL,
  `2007` varchar(6) DEFAULT NULL,
  `2008` varchar(6) DEFAULT NULL,
  `2009` varchar(6) DEFAULT NULL,
  `2010` varchar(6) DEFAULT NULL,
  `2011` varchar(6) DEFAULT NULL,
  `2012` varchar(6) DEFAULT NULL,
  `2013` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `consultation_totale`
--

INSERT INTO `consultation_totale` (`id`, `pays`, `2001`, `2002`, `2003`, `2004`, `2005`, `2006`, `2007`, `2008`, `2009`, `2010`, `2011`, `2012`, `2013`) VALUES
(1, '001 France entière', '3151,2', '3226,8', '3337,5', '3312,4', '3343,4', '3267,0', '3263,6', '3221,0', '3253,6', '3199,1', '3264,6', '3232,9', '3256,5');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `bdpollution2.5`
--
ALTER TABLE `bdpollution2.5`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bdpollution10`
--
ALTER TABLE `bdpollution10`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `consultation_cardio`
--
ALTER TABLE `consultation_cardio`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `consultation_pneumo`
--
ALTER TABLE `consultation_pneumo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `consultation_totale`
--
ALTER TABLE `consultation_totale`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `bdpollution2.5`
--
ALTER TABLE `bdpollution2.5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT pour la table `bdpollution10`
--
ALTER TABLE `bdpollution10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `consultation_cardio`
--
ALTER TABLE `consultation_cardio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `consultation_pneumo`
--
ALTER TABLE `consultation_pneumo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `consultation_totale`
--
ALTER TABLE `consultation_totale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
