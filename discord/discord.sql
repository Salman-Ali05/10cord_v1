-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 24 mai 2022 à 12:19
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `discord`
--

-- --------------------------------------------------------

--
-- Structure de la table `conversation`
--

DROP TABLE IF EXISTS `conversation`;
CREATE TABLE IF NOT EXISTS `conversation` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `messagesReçus` varchar(256) DEFAULT NULL,
  `messagesEnvoyes` varchar(256) DEFAULT NULL,
  `idRecever` int(16) NOT NULL,
  `idSender` int(16) NOT NULL,
  `image` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `conversation`
--

INSERT INTO `conversation` (`id`, `messagesReçus`, `messagesEnvoyes`, `idRecever`, `idSender`, `image`) VALUES
(1, 'Voici le début d\'une grande aventure avec ce bot :)', 'Ah je savais pas :)', 1, 5, NULL),
(3, 'Yaabe kore', 'maji deska', 3, 5, NULL),
(6, 'test d\'un test ', 'il a reçu le test', 1, 5, NULL),
(7, 'eaz', 'eaz', 1, 5, NULL),
(8, 'az', 'eza', 2, 5, NULL),
(9, 'N-U-T-E-L-L-A. -So what s the spelling ? - PEANUUUT BUTTTTAAA !', 'eza', 1, 5, NULL),
(10, 'I would ... I would like to ... I would like to be a... a terrorist', 'yes', 1, 5, NULL),
(11, 'Ceci est un message conçu par nos soins, de ce fait, il est aléatoire due à un tirage aléatoire du hasard, se basant sur le hasard lié à l aléatoire. Oui.', 'test', 2, 5, NULL),
(12, 'I would ... I would like to ... I would like to be a... a terrorist', 'oui', 2, 5, NULL),
(13, 'N-U-T-E-L-L-A. -So what s the spelling ? - PEANUUUT BUTTTTAAA !', 'you like peanuts ?', 4, 5, NULL),
(14, 'I would ... I would like to ... I would like to be a... a terrorist', 'tkt', 6, 5, NULL),
(15, 'I would ... I would like to ... I would like to be a... a terrorist', 'oui', 6, 5, NULL),
(16, 'N-U-T-E-L-L-A. -So what s the spelling ? - PEANUUUT BUTTTTAAA !', 'bien ?', 2, 1, NULL),
(17, 'N-U-T-E-L-L-A. -So what s the spelling ? - PEANUUUT BUTTTTAAA !', 'si jai ajaa ni jaaa ', 6, 5, NULL),
(18, 'I would ... I would like to ... I would like to be a... a terrorist', 'haittt toutoutoute', 6, 5, NULL),
(19, 'Ceci est un message conçu par nos soins, de ce fait, il est aléatoire due à un tirage aléatoire du hasard, se basant sur le hasard lié à l aléatoire. Oui.', 'tkt', 1, 5, NULL),
(21, 'Voilà voilà, j aime bien, J AIME BIEN !', 'tkt', 1, 5, NULL),
(24, 'Ajaa Ni Ajaa Ajaaa ', 'grand messagegrand messagegrand messagegrand messagegrand message', 7, 5, 'images/conversationsPic/hehe.jpg'),
(25, 'Voilà voilà, j aime bien, J AIME BIEN !', 'tkt', 4, 5, NULL),
(26, 'Ajaa Ni Ajaa Ajaaa ', 'use', 2, 5, NULL),
(27, 'Ajaa Ni Ajaa Ajaaa ', 'oui', 3, 5, NULL),
(28, 'Ceci est un message conçu par nos soins, de ce fait, il est aléatoire due à un tirage aléatoire du hasard, se basant sur le hasard lié à l aléatoire. Oui.', 'ohee kintoki', 3, 5, NULL),
(29, 'I would ... I would like to ... I would like to be a... a terrorist', 'Ipopoo', 4, 5, 'images/conversationsPic/ippo.jpg'),
(30, 'Ceci est un message conçu par nos soins, de ce fait, il est aléatoire due à un tirage aléatoire du hasard, se basant sur le hasard lié à l aléatoire. Oui.', 'on test loverflow', 1, 5, NULL),
(31, 'POV: You got Rick Rolled !', 'rick roll ?', 11, 5, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `messagealeatoire`
--

DROP TABLE IF EXISTS `messagealeatoire`;
CREATE TABLE IF NOT EXISTS `messagealeatoire` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `messageAlea` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messagealeatoire`
--

INSERT INTO `messagealeatoire` (`id`, `messageAlea`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(2, 'Ceci est un message conçu par nos soins, de ce fait, il est aléatoire due à un tirage aléatoire du hasard, se basant sur le hasard lié à l aléatoire. Oui.'),
(3, 'I would ... I would like to ... I would like to be a... a terrorist'),
(4, 'N-U-T-E-L-L-A. -So what s the spelling ? - PEANUUUT BUTTTTAAA !'),
(5, 'Voilà voilà, j aime bien, J AIME BIEN !'),
(6, 'Ajaa Ni Ajaa Ajaaa '),
(7, 'POV: You got Rick Rolled !');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `login` varchar(256) NOT NULL,
  `mdp` varchar(256) NOT NULL,
  `photo` varchar(512) NOT NULL,
  `username` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `mdp`, `photo`, `username`) VALUES
(1, 'admin', 'admin', 'noPic.jpeg', 'admin'),
(2, 'user', 'user', 'noPic.jpeg', 'user'),
(3, 'test', 'test', '4jZCGfy.jpg', 'test'),
(4, 'b', 'b', '38203-1532336922.jpg', 'b'),
(5, 'tkt', 'tkt', '4jZCGfy.jpg', 'kuzumo'),
(6, 'o', 'o', 'IMG-20200625-WA0005.jpg', 'peanuts'),
(7, 'discord', 'discrod', '1635857934555.jpg', 'DisCord'),
(9, 'new', 'new', 'megb.jpg', 'MegaloNoYaro'),
(11, 'rick', 'roll', 'neverGonnaGiveYouUp.png', 'Rick Roller');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
