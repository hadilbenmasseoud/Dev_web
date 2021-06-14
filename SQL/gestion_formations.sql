-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 07 Juin 2021 à 20:53
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestion_formations`
--

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE IF NOT EXISTS `demande` (
  `id_demande` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `etat` varchar(10) NOT NULL,
  PRIMARY KEY (`id_demande`),
  KEY `cin` (`cin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `demande`
--

INSERT INTO `demande` (`id_demande`, `cin`, `nom`, `etat`) VALUES
(7, '16549872', 'Technique de Commerc', 'accepte'),
(8, '09898371', 'Python', 'accepte'),
(9, '09898371', 'Angular', 'accepte'),
(10, '09898371', 'JEE', 'accepte'),
(11, '09898371', 'JAVA', 'accepte'),
(12, '03256418', 'Commercial', 'refuse'),
(13, '09898371', 'Symfony 4', 'refuse'),
(14, '09898371', 'Symfony', 'accepte'),
(15, '06598741', 'React js', 'en attente'),
(16, '16549872', 'Node js', 'en attente'),
(17, '16549872', 'aaa', 'en attente'),
(18, '16549872', 'ppp', 'en attente');

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `cin` varchar(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `salaire` int(11) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `service` varchar(30) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `employee`
--

INSERT INTO `employee` (`cin`, `nom`, `prenom`, `tel`, `email`, `salaire`, `titre`, `service`) VALUES
('0000', 'flen', 'flen', '25361487', 'salahbensalah@gmail.com', 400, 'Commerciale', 'Responsable Commercial'),
('02158746', 'ben mohamed', 'Sami', '25361487', 'benabdallah.sami@gmail.com', 1200, 'Informatique', 'Technicien Informatique'),
('03256418', 'ben mohamed', 'Zied', '58364198', 'benmohamed.zied@gmail.com', 1400, 'Commerciale', 'Responsable Commercial'),
('06598741', 'Riahi', 'Ghassen', '98762350', 'riahi.ghassen@gmail.com', 1400, 'Informatique', 'Ingénieur Informatique'),
('09876221', 'Salah', 'Ali', '25361487', 'salah.ali@gamil.com', 2800, 'Finances', 'Directeur Finance'),
('09876241', 'khefifi', 'Montassar', '24536987', 'khefifi.montassar@gmail.com', 900, 'Ressources Humaines', 'Responsable RH'),
('09898371', 'Khefifi', 'Selim', '53870256', 'selim@gmail.com', 1200, 'Informatique', 'Ingénieur Informatique'),
('09921312', 'Ben Achour', 'Fatma', '21398720', 'benachour.fatma@gmail.com', 1200, 'Qualité', 'Responsable Qualité'),
('15489763', 'Naffati', 'Hamza', '25410368', 'naffati.mohamed@gmail.com', 2600, 'Informatique', 'Directeur Informatique'),
('16549872', 'ben Mansour', 'Ahlem', '28123231', 'benmansour.ahlem@gmail.com', 1200, 'Commerciale', 'Responsable Commercial');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id_formation` int(11) NOT NULL AUTO_INCREMENT,
  `nom_formation` varchar(20) NOT NULL,
  `centre` varchar(50) NOT NULL,
  `formateur` varchar(20) NOT NULL,
  `dd` date NOT NULL,
  `df` date NOT NULL,
  `lieu` varchar(20) NOT NULL,
  PRIMARY KEY (`id_formation`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `nom_formation`, `centre`, `formateur`, `dd`, `df`, `lieu`) VALUES
(3, 'Angular', 'we code', 'flen ben flen', '2020-12-02', '2020-12-31', 'Tunis'),
(4, 'JAVA', 'RBK', 'Montassar Khefifi', '2020-12-04', '2021-01-27', 'Ariana'),
(5, 'JEE', 'Go my Code', 'Mohamed salah', '2021-01-07', '2021-01-31', 'Tunis'),
(6, 'Commerce', 'xxxxx', 'Mohsen', '2021-01-06', '2021-01-15', 'Nabeul'),
(7, 'Python', 'We Code', 'Ahmed gharbi', '2021-01-07', '2021-01-10', 'Ben Arous'),
(8, 'PHP', 'we code', 'Montassar Khefifi', '2021-01-14', '2021-01-17', 'Tunis');

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `cin` varchar(10) NOT NULL,
  `id_formation` int(11) NOT NULL,
  PRIMARY KEY (`cin`,`id_formation`),
  KEY `id_formation` (`id_formation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `participants`
--

INSERT INTO `participants` (`cin`, `id_formation`) VALUES
('02158746', 3),
('0000', 4),
('02158746', 4),
('09898371', 4),
('02158746', 5),
('16549872', 6),
('09898371', 7);

-- --------------------------------------------------------

--
-- Structure de la table `utulisateurs`
--

CREATE TABLE IF NOT EXISTS `utulisateurs` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(10) NOT NULL,
  `login` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `etat` int(1) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  PRIMARY KEY (`iduser`),
  KEY `cin` (`cin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `utulisateurs`
--

INSERT INTO `utulisateurs` (`iduser`, `cin`, `login`, `role`, `etat`, `pwd`) VALUES
(8, '09876241', 'Montassar1999', 'responsableRH', 1, '4a7d1ed414474e4033ac29ccb8653d9b'),
(9, '16549872', 'Ahlem', 'employee', 1, 'fb1626a06c1193ccff0ccaa711fbdf92');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `demande_ibfk_1` FOREIGN KEY (`cin`) REFERENCES `employee` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `participants_ibfk_1` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id_formation`),
  ADD CONSTRAINT `participants_ibfk_2` FOREIGN KEY (`cin`) REFERENCES `employee` (`cin`);

--
-- Contraintes pour la table `utulisateurs`
--
ALTER TABLE `utulisateurs`
  ADD CONSTRAINT `utulisateurs_ibfk_1` FOREIGN KEY (`cin`) REFERENCES `employee` (`cin`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
