-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Mer 24 Mai 2017 à 15:28
-- Version du serveur :  5.5.49-log
-- Version de PHP :  7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ei2i.com`
--

-- --------------------------------------------------------

--
-- Structure de la table `connections`
--

CREATE TABLE IF NOT EXISTS `connections` (
  `ID` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `docs`
--

CREATE TABLE IF NOT EXISTS `docs` (
  `up_id` int(11) NOT NULL,
  `up_title` varchar(50) NOT NULL,
  `up_extension` varchar(255) NOT NULL,
  `up_filesize` int(11) NOT NULL,
  `up_date` datetime NOT NULL,
  `up_member` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `connections`
--
ALTER TABLE `connections`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`up_id`),
  ADD KEY `up_id` (`up_id`,`up_filesize`,`up_title`,`up_date`,`up_member`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `connections`
--
ALTER TABLE `connections`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `docs`
--
ALTER TABLE `docs`
  MODIFY `up_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
