-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2021 at 01:43 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopify`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` int(11) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `sexe` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `fidelite` varchar(255) DEFAULT 'NON',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ID`, `identifiant`, `nom`, `prenom`, `sexe`, `age`, `email`, `mdp`, `adresse`, `fidelite`) VALUES
(15, 12, 'x', 'amine', 'Homme', 21, 'shopify@gmail.com', '4567', 'morneg', 'oui'),
(16, NULL, 'Ghassen', 'Boughzala', 'Homme', 20, 'ghassen.g.b.boughzala@gmail.com', '1234', 'SW', 'non'),
(37, NULL, 'X', 'Boughzala', 'Male', 54, 'boughzala@gmail.com', '20334330', 'Tunisia', 'NON'),
(40, NULL, 'Ranim', 'Ranim', 'F', 26, 'RR@gmail.com', '123456', 'Tunisa', 'NON');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `lib_prod` varchar(50) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `prix` double NOT NULL,
  `qte_prod` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  PRIMARY KEY (`idp`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`idp`, `lib_prod`, `id`, `prix`, `qte_prod`, `image`, `description`) VALUES
(60, 'Too Cool', NULL, 50, 5, 'product2.png', 'Green - Too Cool'),
(64, 'Shirt', NULL, 30, 5, 'product3.png', 'Yellow'),
(72, 'Robe', NULL, 100, 1, 'category_11', 'Black'),
(71, 'x', NULL, 20, 5, 'product2.png', 'RED');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `joining_date`, `role`) VALUES
(1, 'Ahmed', 'rim.douss@esprit.tn', '123', '2016-04-12 19:57:17', 'Admin'),
(2, 'Amina', 'amina@esprit.tn', 'bbb', '2016-04-12 20:21:42', 'Client');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
