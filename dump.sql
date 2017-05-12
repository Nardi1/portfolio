-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 12, 2017 at 06:12 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `projetdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `creation`
--

CREATE TABLE `creation` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `creation`
--

INSERT INTO `creation` (`id`, `nom`, `image`, `description`) VALUES
(1, 'Makiwan', 'http://jixart.fr/creation/img/makiwan.jpg', 'Création et réalisation du site internet.\r\nMissions : Web Design, intégration et développement sous prestashop (cms), référencement naturel, logo, charte graphique.'),
(2, 'Crunch Brunch', 'http://jixart.fr/creation/img/crunch-brunch.jpg', 'Création et réalisation du site internet.\r\nMissions : Web Design, intégration et développement, référencement naturel, logo, charte graphique, marketing.\r\n\r\n'),
(3, 'Aralia', 'http://jixart.fr/creation/img/aralia.jpg', 'Création et réalisation du site internet.\r\nMissions : Web Design, intégration et développement sous Wordpress (cms), référencement naturel, logo, charte graphique.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creation`
--
ALTER TABLE `creation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `creation`
--
ALTER TABLE `creation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;