-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 20 mars 2022 à 23:50
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `paint`
--

-- --------------------------------------------------------

--
-- Structure de la table `circles`
--

CREATE TABLE `circles` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `project_title` varchar(50) NOT NULL,
  `forme_type` varchar(10) NOT NULL DEFAULT 'circle',
  `ccolor` varchar(10) DEFAULT NULL,
  `copacity` float DEFAULT NULL,
  `cwidth` int(11) DEFAULT NULL,
  `cheight` int(11) DEFAULT NULL,
  `cborder_width` int(11) DEFAULT NULL,
  `cborder_color` varchar(10) DEFAULT NULL,
  `cformePositionX` int(11) DEFAULT NULL,
  `cformePositionY` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `circles`
--

INSERT INTO `circles` (`id`, `username`, `project_title`, `forme_type`, `ccolor`, `copacity`, `cwidth`, `cheight`, `cborder_width`, `cborder_color`, `cformePositionX`, `cformePositionY`) VALUES
(5, 'admin', 'logo_principale', 'circle', '#9e9e9e', 1, 100, 100, 0, '#000000', 200, 200),
(4, 'test', 'projet_test', 'circle', '#b031b9', 1, 50, 50, 10, '#296185', 247, 186);

-- --------------------------------------------------------

--
-- Structure de la table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pwd` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `log`
--

INSERT INTO `log` (`id`, `username`, `pwd`) VALUES
(1, 'test', 'test'),
(5, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `project_title` varchar(50) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(5) DEFAULT NULL,
  `descript` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `username`, `project_title`, `last_update`, `type`, `descript`) VALUES
(3, 'test', 'projet_test', '2022-03-17 13:07:57', NULL, 'Ceci est un projet test.'),
(4, 'admin', 'logo_principale', '2022-03-20 18:48:32', NULL, 'ce projet illustre le logo du site');

-- --------------------------------------------------------

--
-- Structure de la table `squares`
--

CREATE TABLE `squares` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `project_title` varchar(50) NOT NULL,
  `forme_type` varchar(10) NOT NULL DEFAULT 'square',
  `scolor` varchar(10) DEFAULT NULL,
  `sopacity` float DEFAULT NULL,
  `swidth` int(11) DEFAULT NULL,
  `sheight` int(11) DEFAULT NULL,
  `sborder_width` int(11) DEFAULT NULL,
  `sborder_color` varchar(10) DEFAULT NULL,
  `sborder_radius` int(11) DEFAULT NULL,
  `sformePositionX` int(11) DEFAULT NULL,
  `sformePositionY` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `squares`
--

INSERT INTO `squares` (`id`, `username`, `project_title`, `forme_type`, `scolor`, `sopacity`, `swidth`, `sheight`, `sborder_width`, `sborder_color`, `sborder_radius`, `sformePositionX`, `sformePositionY`) VALUES
(6, 'test', 'projet_test', 'square', '#1b6924', 1, 205, 138, 7, '#dd4b4b', 11, 144, 116),
(7, 'admin', 'logo_principale', 'square', '#696969', 1, 200, 200, 0, '#000000', 10, 100, 100);

-- --------------------------------------------------------

--
-- Structure de la table `textzones`
--

CREATE TABLE `textzones` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `project_title` varchar(50) NOT NULL,
  `forme_type` varchar(10) NOT NULL DEFAULT 'textzone',
  `tzcolor` varchar(10) DEFAULT NULL,
  `tzfont` varchar(50) DEFAULT NULL,
  `tzsize` int(11) DEFAULT NULL,
  `tzbold` varchar(10) DEFAULT NULL,
  `tzunderline` varchar(10) DEFAULT NULL,
  `tzformePositionX` int(11) DEFAULT NULL,
  `tzformePositionY` int(11) DEFAULT NULL,
  `tzcontent` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `textzones`
--

INSERT INTO `textzones` (`id`, `username`, `project_title`, `forme_type`, `tzcolor`, `tzfont`, `tzsize`, `tzbold`, `tzunderline`, `tzformePositionX`, `tzformePositionY`, `tzcontent`) VALUES
(1, 'test', 'projet_test', 'textzone', '#791395', '\'Hubballi\',cursive', 36, 'bold', 'underline', 106, 394, 'ceci est un test'),
(2, 'admin', 'logo_principale', 'textzone', '#000000', '\'Ubuntu\',sans-serif', 110, 'initial', 'initial', 166, 148, 'T');

-- --------------------------------------------------------

--
-- Structure de la table `triangles`
--

CREATE TABLE `triangles` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `project_title` varchar(50) NOT NULL,
  `forme_type` varchar(10) NOT NULL DEFAULT 'triangle',
  `tcolor` varchar(10) DEFAULT NULL,
  `topacity` float DEFAULT NULL,
  `tdimension` int(11) DEFAULT NULL,
  `tborder_width` int(11) DEFAULT NULL,
  `tborder_color` varchar(10) DEFAULT NULL,
  `tformePositionX` int(11) DEFAULT NULL,
  `tformePositionY` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `triangles`
--

INSERT INTO `triangles` (`id`, `username`, `project_title`, `forme_type`, `tcolor`, `topacity`, `tdimension`, `tborder_width`, `tborder_color`, `tformePositionX`, `tformePositionY`) VALUES
(3, 'test', 'projet_test', 'triangle', '#299e61', 0.7, 19, 7, '#d93636', 154, 177),
(4, 'admin', 'logo_principale', 'triangle', '#ffffff', 1, 16, 0, '#000000', 120, 100);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `circles`
--
ALTER TABLE `circles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `squares`
--
ALTER TABLE `squares`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `textzones`
--
ALTER TABLE `textzones`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `triangles`
--
ALTER TABLE `triangles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `circles`
--
ALTER TABLE `circles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `squares`
--
ALTER TABLE `squares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `textzones`
--
ALTER TABLE `textzones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `triangles`
--
ALTER TABLE `triangles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
