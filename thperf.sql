-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 15 mai 2023 à 10:50
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `3pm`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat_car`
--

DROP TABLE IF EXISTS `achat_car`;
CREATE TABLE IF NOT EXISTS `achat_car` (
  `id_achat` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `car_id` int NOT NULL,
  `nb_voiture` int NOT NULL,
  PRIMARY KEY (`id_achat`),
  KEY `user_id` (`user_id`),
  KEY `car_id` (`car_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `id_car` int NOT NULL AUTO_INCREMENT,
  `color` varchar(100) NOT NULL,
  `nb_door` tinyint NOT NULL,
  `power` int NOT NULL,
  `miles` varchar(50) NOT NULL,
  `fuel` enum('gazoil','essence','electric','ethanol','hybrid') NOT NULL,
  `creation_year` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int NOT NULL,
  `id_cat` int NOT NULL,
  `picture` varchar(200) NOT NULL,
  `transmission` enum('Manual','Automatique') NOT NULL,
  PRIMARY KEY (`id_car`),
  KEY `id_cat` (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `car`
--

INSERT INTO `car` (`id_car`, `color`, `nb_door`, `power`, `miles`, `fuel`, `creation_year`, `title`, `description`, `price`, `id_cat`, `picture`, `transmission`) VALUES
(1, 'red', 4, 12, '12', 'essence', '0000-00-00', 'BMW', 'top sprots car', 123, 1, '', 'Manual'),
(6, 'red', 4, 120, '120', 'essence', '0000-00-00', 'BMW', 'top sport car', 120, 1, '', 'Manual'),
(7, 'red', 120, 4, '120', 'essence', '0000-00-00', 'BMW', 'top sport car', 120, 3, '', 'Manual'),
(8, 'red', 120, 4, '120', 'essence', '0000-00-00', 'BMW', 'top sport car', 120, 5, '', 'Manual'),
(9, 'blue', 4, 325, '556', 'essence', '0000-00-00', 'BMW', 'top sport car', 660, 2, '', 'Manual'),
(10, 'red', 4, 12, '5000', 'gazoil', '0000-00-00', 'BMW', 'top sport car', 90000, 5, '', 'Manual'),
(11, 'red', 4, 45, '5000', 'gazoil', '0000-00-00', 'BMW', 'top sport car', 90000, 5, '', 'Manual'),
(12, 'blue', 4, 12, '7500', 'essence', '0000-00-00', 'BMW', 'Top sport car', 66000, 5, '', 'Automatique');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_cat` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `name`) VALUES
(1, 'M3 E30'),
(2, 'M3 E36'),
(3, 'M3 E46'),
(4, 'M3 E90'),
(5, 'M3 F80'),
(6, 'M3 G80');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `data_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statut` tinyint NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `first_name`, `last_name`, `mail`, `password`, `address`, `data_creation`, `statut`) VALUES
(9, 'Thomas', 'Sauce', 'Chateau@gmail.com', 'Thomas', '34 Avenue', '2023-04-17 17:15:45', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achat_car`
--
ALTER TABLE `achat_car`
  ADD CONSTRAINT `achat_car_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `car` (`id_car`),
  ADD CONSTRAINT `achat_car_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id_cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
