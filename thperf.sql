-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 27 juin 2023 à 11:51
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
  `color` varchar(255) NOT NULL,
  `nb_door` tinyint NOT NULL,
  `power` int NOT NULL,
  `miles` varchar(255) NOT NULL,
  `fuel` enum('gazoil','essence','electric','ethanol','hybrid') NOT NULL,
  `creation_year` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int NOT NULL,
  `id_cat` int NOT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `transmission` enum('Manual','Automatique') NOT NULL,
  PRIMARY KEY (`id_car`),
  KEY `id_cat` (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `car`
--

INSERT INTO `car` (`id_car`, `color`, `nb_door`, `power`, `miles`, `fuel`, `creation_year`, `title`, `description`, `price`, `id_cat`, `picture`, `transmission`) VALUES
(24, 'Jaune', 5, 245, '1000', 'essence', 2012, 'BMW M3 F80', 'Top sport car', 100000, 5, 'profil-1687295803-6492173bee7b1-3f807.webp', 'Automatique'),
(25, 'red', 5, 245, '78', 'essence', 2018, 'BMW M3 G80', 'Top sport car', 90000, 6, 'profil-1687438490-6494449accc88-3g803.webp', 'Automatique'),
(26, 'Blanc', 5, 245, '470', 'gazoil', 2006, 'BMW', 'Deutch qualidad', 23000, 4, 'profil-1687454991-6494850f3d749-3e9014.webp', 'Automatique'),
(27, 'Vert', 3, 88, '140', 'gazoil', 2008, 'BMW M3 E93', 'Deutch qualidad', 42000, 4, 'profil-1687455477-649486f5f3ce2-3e93.webp', 'Automatique'),
(28, 'Blue', 3, 123, '110030', 'gazoil', 2012, 'M3 E92', 'Top sport car', 19000, 4, 'profil-1687455706-649487dab1e99-3e9210.webp', 'Automatique'),
(29, 'Rouge', 3, 245, '51000', 'essence', 1986, 'M3 E30', 'Top sport car', 23000, 1, 'profil-1687456313-64948a399373f-3e306.webp', 'Manual'),
(30, 'Gris', 3, 245, '30000', 'essence', 1986, 'BMW E30', 'Top sport car', 32000, 1, 'profil-1687456690-64948bb29b4f8-3e301.webp', 'Manual'),
(31, 'Bleu', 5, 185, '28000', 'essence', 2018, 'BMW M3 F80 C', 'Top sport car', 46000, 5, 'profil-1687457009-64948cf1c96b5-3f803.webp', 'Automatique'),
(32, 'Blanc', 3, 245, '60518', 'essence', 1986, 'BMW E30 M3 C', 'Top sport car', 26000, 1, 'profil-1687457610-64948f4a73805-3e30c.webp', 'Manual'),
(34, 'Blanc', 3, 245, '32000', 'essence', 2012, 'M3 E92 Compétitions', 'Top sport car', 71620, 4, 'profil-1687457904-64949070ab362-3e92c.webp', 'Manual'),
(35, 'Jaune', 3, 245, '9230', 'gazoil', 1992, 'BMW E46 M3', 'Top sport car', 46000, 2, 'profil-1687458153-64949169c93e9-3e36.webp', 'Manual'),
(36, 'Gris', 3, 245, '16000', 'essence', 2000, 'E46 Gris', 'Top sport car', 32000, 3, 'profil-1687458397-6494925d29ef3-3e46.webp', 'Manual'),
(37, 'gris', 3, 110, '48000', 'gazoil', 2003, 'BMW M3 Convertible', 'Top sport car', 28000, 3, 'profil-1687459587-64949703357ce-3e463.webp', 'Manual'),
(38, 'Bleu', 3, 245, '23000', 'gazoil', 2000, 'M3 E46', 'Top sport car', 31000, 3, 'profil-1687459771-649497bbf10e3-3e461.webp', 'Automatique'),
(39, 'red', 3, 300, '43000', 'gazoil', 1992, 'M3 GT', 'Top sport car', 96000, 2, 'profil-1687460683-64949b4bd24c6-3e3641.webp', 'Manual'),
(40, 'Blanc', 3, 300, '55000', 'gazoil', 1993, 'BMW E36 GT', 'Top sport car', 84000, 2, 'profil-1687460774-64949ba6d5c64-3e36gt.webp', 'Manual'),
(41, 'Noir', 5, 236, '88000', 'gazoil', 2017, 'M3 Batman F80', 'Top sport car', 66000, 5, 'profil-1687461034-64949caa2846a-3f80b.webp', 'Automatique'),
(42, 'Gris', 5, 187, '49030', 'gazoil', 2016, 'F80 Compétition', 'Top sport car', 80000, 5, 'profil-1687461211-64949d5b4e34e-3f80csable.webp', 'Automatique'),
(43, 'Orange', 5, 160, '1003', 'gazoil', 2022, 'M3 Jahr', 'Top sport car', 86000, 6, 'profil-1687461419-64949e2bbd2f3-3g809.webp', 'Automatique'),
(44, 'Jaune', 5, 200, '3000', 'gazoil', 2021, 'BMW M3 6-Speed', 'Top sport car', 86000, 6, 'profil-1687461594-64949eda155fc-3g8010.webp', 'Automatique'),
(47, 'red', 3, 325, '7090', 'essence', 1986, 'BMW E30', 'top sport car', 66000, 1, 'profil-1687713818-6498781a5a12e-3e309.webp', 'Automatique'),
(49, 'Blanc', 5, 300, '21', 'essence', 2008, 'Thomas BMW M', 'C\'est la voiture a Thomas !!!', 1, 4, 'profil-1687865846-649ac9f614229-3e90T.webp', 'Manual');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_cat` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `name`, `image`) VALUES
(1, 'M3 E30', '3e30c.webp'),
(2, 'M3 E36', '3e36.webp'),
(3, 'M3 E46', '3e46.webp'),
(4, 'M3 E90', '3e929.webp'),
(5, 'M3 F80', '3f80.webp'),
(6, 'M3 G80', '3g803.webp');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `first_name`, `last_name`, `mail`, `password`, `address`, `data_creation`, `statut`) VALUES
(9, 'Thomas', 'Sauce', 'Chateau@gmail.com', 'Thomas', '34 Avenue', '2023-04-17 17:15:45', 0),
(10, 'POP', 'test', 'Postesti@gmail.com', 'test', '36 Avenue', '2023-05-15 13:55:36', 0),
(11, 'Dam', 'Dolla', 'Dolla@gmail.com', 'Dolla', '36 Avenue', '2023-05-15 15:34:30', 1);

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
