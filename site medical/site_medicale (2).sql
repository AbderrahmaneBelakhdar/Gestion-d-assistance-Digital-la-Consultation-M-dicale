-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 09 mai 2022 à 22:12
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site_medicale`
--

-- --------------------------------------------------------

--
-- Structure de la table `appointment_list`
--

CREATE TABLE `appointment_list` (
  `id` int(30) NOT NULL,
  `doctor_id` int(30) NOT NULL,
  `patient_id` int(30) NOT NULL,
  `schedule` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0= for verification, 1=confirmed,2= reschedule,3=done',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `idc` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `idm` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `datec` date NOT NULL DEFAULT current_timestamp(),
  `parent_comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`idc`, `commentaire`, `idm`, `idp`, `datec`, `parent_comment_id`) VALUES
(1, 'aaaa', 1, 1, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `education`
--

CREATE TABLE `education` (
  `ide` int(5) NOT NULL,
  `diplome` varchar(35) DEFAULT NULL,
  `Annee` int(4) DEFAULT NULL,
  `institut` varchar(40) DEFAULT NULL,
  `id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `education`
--

INSERT INTO `education` (`ide`, `diplome`, `Annee`, `institut`, `id`) VALUES
(1, 'MBBS, M.D', 2006, 'Université de Wyoming', 1),
(2, 'Residanat', 2018, 'Université Djillali Liabes', 4),
(3, 'Residanat', 2021, 'Université Djillali Liabes', 4),
(20, 'stamboli', 2022, 'info', 45);

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `idex` int(11) NOT NULL,
  `departement` varchar(40) DEFAULT NULL,
  `position` varchar(40) DEFAULT NULL,
  `hopital` varchar(40) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`idex`, `departement`, `position`, `hopital`, `id`) VALUES
(3, 'n', 'n', 'n', NULL),
(4, 'ttktlk', 'ldkdl', 'lkdkd', NULL),
(5, 'Service Pediatrique', 'Medecin ', 'Tighennif', 1),
(6, 'Service Algologue', 'Chirurgien', 'Hopital USTO', 41),
(13, 'stamboli', 'profesesur', 'Hopital USTO', 45),
(14, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `informationsm`
--

CREATE TABLE `informationsm` (
  `id` int(5) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `DN` date NOT NULL,
  `Sexe` varchar(6) CHARACTER SET utf8 NOT NULL,
  `Email` text NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Telephone` varchar(11) NOT NULL,
  `Specialite` varchar(50) NOT NULL,
  `wilaya` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `informationsm`
--

INSERT INTO `informationsm` (`id`, `Nom`, `Prenom`, `DN`, `Sexe`, `Email`, `Password`, `Telephone`, `Specialite`, `wilaya`) VALUES
(1, 'abdo', 'belakhdar', '2001-12-09', 'Homme', 'abdomad7@gmail.com', 'aaaa', '0553725379', 'Chirurgien dentiste', 'Mascara'),
(4, 'youcef', 'belakhdar', '1962-12-09', 'Homme', 'abdomad777@gmail.com', '1234', '0666666666', 'Chirurgien dentiste', 'Oran'),
(5, 'Mokhtar', 'chaiberras', '2001-03-02', 'Homme', 'mokhtar@gmail.com', '1234', '0722562558', 'Cardiologue', 'Alger'),
(7, 'brahim', 'chaieb', '2001-02-14', 'Femme', 'chaiebrras@gmail.com', '1234', '0549552365', 'Chirurgien dentiste', 'Mascara'),
(41, 'Belakhdar', 'sedik', '2005-05-20', 'Homme', 'sedikbelakhdar@gmail.com', '1234', '0696171144', 'Algologue', 'Mascara'),
(45, 'kartali', 'issame', '2001-12-12', 'Femme', 'Mostapha1997@gmail.com', 'abdo2001', '0772812820', 'Centre d imagerie médicale', 'Béchar');

-- --------------------------------------------------------

--
-- Structure de la table `informationsp`
--

CREATE TABLE `informationsp` (
  `idP` int(11) NOT NULL,
  `NomP` varchar(25) NOT NULL,
  `PrenomP` varchar(25) NOT NULL,
  `DNP` date NOT NULL,
  `SexeP` varchar(5) NOT NULL,
  `EmailP` text NOT NULL,
  `PasswordP` varchar(20) NOT NULL,
  `TelephoneP` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `informationsp`
--

INSERT INTO `informationsp` (`idP`, `NomP`, `PrenomP`, `DNP`, `SexeP`, `EmailP`, `PasswordP`, `TelephoneP`) VALUES
(1, 'Belakhdar', 'Abderrahmane', '2001-12-09', 'Homme', 'abdobelakhdar1@gmail.com', 'abdo2001', '0553725379'),
(5, 'chayba', 'mokhtar', '2000-09-16', 'Homme', 'mokhtar@gmail.com', '1234', ''),
(8, '', '', '0000-00-00', '', '', '', ''),
(9, '', '', '0000-00-00', '', '', '', ''),
(10, '', '', '0000-00-00', '', '', '', ''),
(11, '', '', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `medecin_programme`
--

CREATE TABLE `medecin_programme` (
  `id` int(30) NOT NULL,
  `medecin_id` int(30) NOT NULL,
  `day` varchar(20) NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

CREATE TABLE `rdv` (
  `id_rdv` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `idm` int(11) NOT NULL,
  `ord` varchar(250) NOT NULL,
  `idp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rdv`
--

INSERT INTO `rdv` (`id_rdv`, `date`, `time`, `idm`, `ord`, `idp`) VALUES
(4, '2022-09-09', '10:00:00', 4, 'Weather-Station-Rain-Gauge-and-Thermometer.jpg', 1),
(5, '2022-09-09', '10:00:00', 4, 'Capture.PNG', 1),
(6, '2022-11-11', '10:00:00', 4, '1.jpg', 1),
(7, '2022-04-19', '10:00:00', 1, 'st-patricks-day-gnomes-banner-st-patrick-day_41327-1886.jpg', 1),
(8, '2022-04-22', '10:00:00', 1, 'slide01.jpg', 1),
(9, '2022-04-23', '11:00:00', 1, '', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appointment_list`
--
ALTER TABLE `appointment_list`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`idc`),
  ADD KEY `idp` (`idp`);

--
-- Index pour la table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`ide`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`idex`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `informationsm`
--
ALTER TABLE `informationsm`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`) USING HASH;

--
-- Index pour la table `informationsp`
--
ALTER TABLE `informationsp`
  ADD PRIMARY KEY (`idP`);

--
-- Index pour la table `medecin_programme`
--
ALTER TABLE `medecin_programme`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`id_rdv`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appointment_list`
--
ALTER TABLE `appointment_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `education`
--
ALTER TABLE `education`
  MODIFY `ide` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `idex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `informationsm`
--
ALTER TABLE `informationsm`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `informationsp`
--
ALTER TABLE `informationsp`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `medecin_programme`
--
ALTER TABLE `medecin_programme`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `id_rdv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`idp`) REFERENCES `informationsp` (`idP`);

--
-- Contraintes pour la table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`id`) REFERENCES `informationsm` (`id`);

--
-- Contraintes pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_ibfk_1` FOREIGN KEY (`id`) REFERENCES `informationsm` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
