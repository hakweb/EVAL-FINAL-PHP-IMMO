-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 09 mai 2022 à 16:50
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
-- Base de données : `immoa3l`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `specialite` varchar(250) NOT NULL,
  `origine` varchar(250) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_user`, `nom`, `prenom`, `specialite`, `origine`, `photo`) VALUES
(1, 'BYRDE', 'Marty', 'Evasion sans compter ', 'Suisse', './asset/img/marty bird.jpg\r\n\r\n\r\n'),
(2, 'BYRDE', 'Wendy', 'Evasion de rêves', 'Monaco', './asset/img/wendy.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

DROP TABLE IF EXISTS `logement`;
CREATE TABLE IF NOT EXISTS `logement` (
  `id_logement` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `cp` int(5) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `surface` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `type` enum('location','vente') NOT NULL,
  `description` text,
  PRIMARY KEY (`id_logement`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`id_logement`, `titre`, `adresse`, `cp`, `ville`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
(3, 'Villa de LuxOr', 'La maison au bord de l\'eau !!!', 6600, 'ANTIBES', 1300, 28300000, './asset/img/luxefive.jpg', 'vente', 'Cette villa familiale à vendre à Cap d\'Antibes, avec vue sur la mer, bénéficie d\'un jardin de 2257 m² et 2 terrasses. Cette propriété de 1 300 m², située dans le quartier Garoupe, vous offre une belle proximité avec la mer, le port, la marina et la plage. '),
(4, 'Villa du Soleil', 'il etait une fois ', 13260, 'Cassis', 300, 12000, './asset/img/luxetwo.jpg', 'location', 'Profitez du confort absolue au large du ciel bleue'),
(10, 'La perle Bleue', '123, pres de chez toi ', 13016, 'Carry le Rouet', 200, 900000, 'luxeone.png', 'vente', 'Bienvenue sur la cÃ´te bleue. Wendy & Marty '),
(11, 'Le Palace', '13 rue du printemps', 83000, 'Hyeres', 200, 20000, './asset/img/luxeone.png', 'location', 'Réservez vos nuits de prestiges'),
(12, 'La Spirale', '79, avenue du puits', 4500, 'GAP', 450, 15000, './asset/img/Luxe Alpes.jpg', 'location', 'Respirez l\'air pur sous un ciel etoilÃ©');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
