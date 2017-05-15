-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Lun 15 Mai 2017 à 14:18
-- Version du serveur :  5.6.35
-- Version de PHP :  7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `projetdev`
--

-- --------------------------------------------------------

--
-- Structure de la table `creation`
--

CREATE TABLE `creation` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `creation`
--

INSERT INTO `creation` (`id`, `nom`, `image`, `description`) VALUES
(1, 'Makiwan', 'http://jixart.fr/creation/img/makiwan.jpg', 'Création et réalisation du site internet.\r\nMissions : Web Design, intégration et développement sous prestashop (cms), référencement naturel, logo, charte graphique.'),
(2, 'Crunch Brunch', 'http://jixart.fr/creation/img/crunch-brunch.jpg', 'Création et réalisation du site internet.\r\nMissions : Web Design, intégration et développement, référencement naturel, logo, charte graphique, marketing.\r\n\r\n'),
(3, 'Aralia', 'http://jixart.fr/creation/img/aralia.jpg', 'Création et réalisation du site internet.\r\nMissions : Web Design, intégration et développement sous Wordpress (cms), référencement naturel, logo, charte graphique.'),
(4, 'Aran Park', 'http://jixart.fr/creation/img/aran-park.jpg', 'Création graphique complète\r\nMissions : Logo, charte graphique, identité visuelle, plaquette, flyer, affiche promotionnelle, textile staff.');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `creation`
--
ALTER TABLE `creation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `creation`
--
ALTER TABLE `creation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;