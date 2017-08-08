-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2017 at 12:29 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocamion`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonce_expediteur`
--

CREATE TABLE `annonce_expediteur` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `datea` datetime NOT NULL,
  `wilaya_d` varchar(15) NOT NULL,
  `commune_d` varchar(15) NOT NULL,
  `rue_d` varchar(50) NOT NULL,
  `ver` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL,
  `tonage` int(11) NOT NULL,
  `wilaya_a` varchar(20) NOT NULL,
  `commune_a` varchar(20) NOT NULL,
  `rue_a` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `type_camion` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annonce_expediteur`
--

INSERT INTO `annonce_expediteur` (`id`, `date`, `datea`, `wilaya_d`, `commune_d`, `rue_d`, `ver`, `id_user`, `tonage`, `wilaya_a`, `commune_a`, `rue_a`, `prix`, `type_camion`) VALUES
(1, '2017-06-30 00:00:00', '2017-06-30 00:00:00', '', '', '', 0, 1, 1, '', '', '', 1, ''),
(4, '2017-05-24 17:30:00', '2017-05-31 17:30:00', 'Laghouat', 'Laghouat', '', 0, 12, 12, 'Laghouat', 'El Karimia', '', 12, 'Le camion frigo');

-- --------------------------------------------------------

--
-- Table structure for table `annonce_prestataire`
--

CREATE TABLE `annonce_prestataire` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `datea` datetime NOT NULL,
  `wilaya_d` varchar(15) NOT NULL,
  `commune_d` varchar(15) NOT NULL,
  `rue_d` varchar(50) NOT NULL,
  `ver` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL,
  `tonage` int(11) NOT NULL,
  `wilaya_a` varchar(20) NOT NULL,
  `commune_a` varchar(20) NOT NULL,
  `rue_a` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `type_camion` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annonce_prestataire`
--

INSERT INTO `annonce_prestataire` (`id`, `date`, `datea`, `wilaya_d`, `commune_d`, `rue_d`, `ver`, `id_user`, `tonage`, `wilaya_a`, `commune_a`, `rue_a`, `prix`, `type_camion`) VALUES
(1, '2017-05-17 06:30:00', '2017-05-24 08:00:00', 'Batna', 'Batna', '', 0, 1, 23, 'Batna', 'El Karimia', '', 2300, 'Le camion Ampliroll'),
(2, '2017-05-17 06:30:00', '2017-05-24 08:00:00', 'Batna', 'Batna', '', 0, 1, 23, 'Batna', 'El Karimia', '', 2300, 'Le camion Ampliroll'),
(3, '2017-05-17 07:30:00', '2017-05-31 07:30:00', 'Laghouat', 'Laghouat', '', 0, 1, 23, 'Laghouat', 'Chelata', '', 1500, 'Le camion Plateau'),
(4, '2017-06-30 00:00:00', '2017-05-31 00:00:00', '', '', '', 0, 1, 15, '', '', '', 11, ''),
(5, '2017-05-31 00:00:00', '2017-05-31 00:00:00', '', '', '', 0, 12, 12, '', '', '', 12, ''),
(6, '2017-05-23 19:00:00', '2017-05-31 21:30:00', 'Bouira', 'Bouira', '', 0, 1, 25, 'Bouira', 'Tadjna', '', 12000, 'le camion citerne');

-- --------------------------------------------------------

--
-- Table structure for table `exp`
--

CREATE TABLE `exp` (
  `id` int(11) NOT NULL,
  `Nom_entreprise` varchar(50) NOT NULL,
  `Nom_user` varchar(150) NOT NULL,
  `Registre_commerce` varchar(20) NOT NULL,
  `Rue` varchar(100) NOT NULL,
  `Commun` varchar(20) NOT NULL,
  `Wilaya` varchar(20) NOT NULL,
  `Email_user` varchar(150) NOT NULL,
  `Telephone_use` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(150) NOT NULL,
  `ver` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exp`
--

INSERT INTO `exp` (`id`, `Nom_entreprise`, `Nom_user`, `Registre_commerce`, `Rue`, `Commun`, `Wilaya`, `Email_user`, `Telephone_use`, `username`, `pwd`, `ver`) VALUES
(12, 'billel inc', 'billel bounil', '', '', '', '', '12', '', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(13, 'Khaldi Abdel Halim', 'Khaldi Abdel Halim', 'aa', 'cite 1100 logts BT R N 2', 'Adrar', 'Adrar', 'golden-boy1994@hotmail.fr', '0559778889', 'aa', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prestataire`
--

CREATE TABLE `prestataire` (
  `id` int(11) NOT NULL,
  `Nom_entreprise` varchar(50) NOT NULL,
  `Nom_gerant` varchar(150) NOT NULL,
  `Nom_user` varchar(150) NOT NULL,
  `Registre_commerce` varchar(20) NOT NULL,
  `Rue` varchar(100) NOT NULL,
  `Commun` varchar(20) NOT NULL,
  `Wilaya` varchar(20) NOT NULL,
  `Email_gerant` varchar(30) NOT NULL,
  `Email_user` varchar(50) NOT NULL,
  `Telephone_gerant` varchar(10) NOT NULL,
  `Telephone_use` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(2000) NOT NULL,
  `ver` int(1) NOT NULL DEFAULT '0',
  `marge` int(3) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestataire`
--

INSERT INTO `prestataire` (`id`, `Nom_entreprise`, `Nom_gerant`, `Nom_user`, `Registre_commerce`, `Rue`, `Commun`, `Wilaya`, `Email_gerant`, `Email_user`, `Telephone_gerant`, `Telephone_use`, `username`, `pwd`, `ver`, `marge`) VALUES
(1, 'brilog', 'Brahim tabani', 'Brahim tabani', '12345786971234', '', 'Alger', 'Alger', 'aa@cdta.com', 'aa@cdta.com', '0559778889', '0559778889', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 2),
(2, 'Abdelhalim Khaldi', 'Abdelhalim Khaldi', 'Abdelhalim Khaldi', 'aa', '248 15th Street, 25', 'Adrar', 'Adrar', 'khaldiabdelhalim1894@gmail.com', 'khaldiabdelhalim1894@gmail.com', '5108334464', '5108334464', 'aa', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reserver`
--

CREATE TABLE `reserver` (
  `id` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL,
  `date_reserver` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_attribuer` datetime DEFAULT NULL,
  `date_deposer` date DEFAULT NULL,
  `deposer` int(11) NOT NULL DEFAULT '0',
  `id_res` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `payer` int(11) NOT NULL DEFAULT '0',
  `numero_entrepot` int(11) DEFAULT NULL,
  `adresse_entrepot` varchar(150) DEFAULT NULL,
  `nom_chauffeur` varchar(150) DEFAULT NULL,
  `matricul` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserver`
--

INSERT INTO `reserver` (`id`, `id_annonce`, `date_reserver`, `date_attribuer`, `date_deposer`, `deposer`, `id_res`, `type`, `payer`, `numero_entrepot`, `adresse_entrepot`, `nom_chauffeur`, `matricul`) VALUES
(1, 1, '2017-05-21 00:09:22', '2017-05-21 03:50:36', NULL, 0, 1, 0, 0, NULL, NULL, 'halim', '11111111111'),
(2, 4, '2017-05-21 01:34:02', '2017-05-21 03:52:18', NULL, 1, 12, 1, 0, 12, 'city 1100 logt bt r n 2', 'halim', 'finaly'),
(3, 4, '2017-05-21 01:34:02', '2017-05-21 03:52:18', NULL, 1, 12, 1, 0, 12, 'city 1100 logt bt r n 2', 'halim', 'finaly'),
(4, 5, '2017-05-21 14:32:31', NULL, NULL, 0, 12, 1, 0, 12, 'frtguhibnjomkp;l\'', NULL, NULL),
(6, 4, '2017-05-22 00:10:39', NULL, NULL, 0, 1, 0, 0, NULL, NULL, 'halim', 'oui'),
(7, 6, '2017-05-22 15:32:58', NULL, NULL, 0, 12, 1, 0, 12, 'cfyvgubihnojk', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonce_expediteur`
--
ALTER TABLE `annonce_expediteur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `annonce_prestataire`
--
ALTER TABLE `annonce_prestataire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `prestataire`
--
ALTER TABLE `prestataire`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `reserver`
--
ALTER TABLE `reserver`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annonce_expediteur`
--
ALTER TABLE `annonce_expediteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `annonce_prestataire`
--
ALTER TABLE `annonce_prestataire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `exp`
--
ALTER TABLE `exp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `prestataire`
--
ALTER TABLE `prestataire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reserver`
--
ALTER TABLE `reserver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
