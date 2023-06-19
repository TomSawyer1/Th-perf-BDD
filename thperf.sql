-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 19 juin 2023 à 16:51
-- Version du serveur : 5.7.34
-- Version de PHP : 7.4.21

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

CREATE TABLE `achat_car` (
  `id_achat` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `nb_voiture` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `car`
--

CREATE TABLE `car` (
  `id_car` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `nb_door` tinyint(255) NOT NULL,
  `power` int(255) NOT NULL,
  `miles` varchar(255) NOT NULL,
  `fuel` enum('gazoil','essence','electric','ethanol','hybrid') NOT NULL,
  `creation_year` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(255) NOT NULL,
  `id_cat` int(255) NOT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `transmission` enum('Manual','Automatique') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `car`
--

INSERT INTO `car` (`id_car`, `color`, `nb_door`, `power`, `miles`, `fuel`, `creation_year`, `title`, `description`, `price`, `id_cat`, `picture`, `transmission`) VALUES
(1, 'red', 5, 54, '21', 'gazoil', 2012, 'mercedes', 'mercedes benz', 213, 1, '', 'Automatique'),
(6, 'red', 4, 120, '120', 'essence', 0, 'BMW', 'top sport car', 120, 1, '', 'Manual'),
(16, 'blue', 4, 245, '12', 'gazoil', 2012, 'ALPINA', 'Top sport car', 23000, 4, 'profil-1684773456-646b9a5089f96-Simulation01.jpg', 'Manual'),
(17, 'blue', 5, 245, '12', 'gazoil', 2017, 'ALPINA', 'Deutch qualidad', 29000, 1, 'profil-1684848177-646cbe315b795-3e30.jpg', 'Manual'),
(18, 'yellow', 3, 12, '140', 'gazoil', 1986, 'BMW', 'French qualité', 33000, 1, 'profil-1684848235-646cbe6bf13a6-3e302.jpg', 'Manual'),
(22, 'Green', 5, 245, '1000', 'essence', 2013, 'Alpina', 'Top sport car', 29000, 5, 'profil-1684942545-646e2ed1020ad-3f90cs.jpeg', 'Automatique'),
(23, 'yellow', 5, 123, '1000', 'essence', 1986, 'BMW', 'Voiture de sport', 23000, 1, 'profil-1685089800-64706e08ac596-3e303.jpg', 'Manual');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `name`, `image`) VALUES
(1, 'M3 E30', '3e30c.webp'),
(2, 'M3 E36', ''),
(3, 'M3 E46', ''),
(4, 'M3 E90', ''),
(5, 'M3 F80', ''),
(6, 'M3 G80', '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `data_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statut` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `first_name`, `last_name`, `mail`, `password`, `address`, `data_creation`, `statut`) VALUES
(9, 'Thomas', 'Sauce', 'Chateau@gmail.com', 'Thomas', '34 Avenue', '2023-04-17 17:15:45', 0),
(10, 'POP', 'test', 'Postesti@gmail.com', 'test', '36 Avenue', '2023-05-15 13:55:36', 0),
(11, 'Dam', 'Dolla', 'Dolla@gmail.com', 'Dolla', '36 Avenue', '2023-05-15 15:34:30', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achat_car`
--
ALTER TABLE `achat_car`
  ADD PRIMARY KEY (`id_achat`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `car_id` (`car_id`);

--
-- Index pour la table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id_car`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achat_car`
--
ALTER TABLE `achat_car`
  MODIFY `id_achat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `car`
--
ALTER TABLE `car`
  MODIFY `id_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
