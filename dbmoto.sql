-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 06:36 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmoto`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbm_admin`
--

CREATE TABLE `dbm_admin` (
  `id_admin` int(11) NOT NULL,
  `pseudo_admin` varchar(20) NOT NULL,
  `passwd_admin` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbm_admin`
--

INSERT INTO `dbm_admin` (`id_admin`, `pseudo_admin`, `passwd_admin`) VALUES
(1, 'falyrass', 'e117bdc896cafd5f56f4cc56f6b68f80');

-- --------------------------------------------------------

--
-- Table structure for table `moto`
--

CREATE TABLE `moto` (
  `id_moto94267` int(11) NOT NULL,
  `numero_moteur94267` varchar(16) NOT NULL,
  `nom_titulaire94267` varchar(40) NOT NULL,
  `date_enregistrement94267` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `numero_cadre94267` varchar(16) DEFAULT NULL,
  `numero_cin94267` char(12) NOT NULL,
  `numero_matricule94267` varchar(15) NOT NULL,
  `justificatif_moteur` varchar(36) NOT NULL,
  `justificatif_identite` varchar(36) NOT NULL,
  `description94267` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `real_record34126`
--

CREATE TABLE `real_record34126` (
  `id_moto34126` int(11) NOT NULL,
  `numero_moteur34126` varchar(16) NOT NULL,
  `nom_titulaire34126` varchar(40) NOT NULL,
  `date_enregistrement34126` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `numero_cadre34126` varchar(16) NOT NULL,
  `numero_cin34126` char(12) NOT NULL,
  `numero_matricule34126` varchar(15) NOT NULL,
  `justificatif_moteur34126` varchar(36) NOT NULL,
  `justificatif_identite34126` varchar(36) NOT NULL,
  `description34126` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `real_record34126`
--

INSERT INTO `real_record34126` (`id_moto34126`, `numero_moteur34126`, `nom_titulaire34126`, `date_enregistrement34126`, `numero_cadre34126`, `numero_cin34126`, `numero_matricule34126`, `justificatif_moteur34126`, `justificatif_identite34126`, `description34126`) VALUES
(30, '4UF150786', 'RAHERISOA', '2020-03-14 06:03:49', '4UF012435', '101101101101', '1312TAP', 'a6bb5746f26df2744b88d109db54a01f.jpg', 'c0a5d3db0b9c2c623345e3c9e861e09b.jpg', 'okok'),
(31, '4UF65554', 'TIANARISOA', '2020-03-14 07:03:40', '4KX567756', '101557558559', '2020TAP', '3ba471d2885cd1676d258ebd50813817.jpg', '0717deace904bf5c1f2e62abb81a6292.jpg', ''),
(32, '4UF150786', 'RASAMY FALY', '2020-03-14 10:03:27', '4UF012435', '101241165166', '1010WWWT', '9707cca4f32f6029f29c48fc62514c8b.jpg', '823b550c66a95d99f86d4cfd55c6d060.jpg', 'jog pro'),
(33, '4KX567756', 'FELANA', '2020-03-15 08:03:58', '4KX567756', '220220220220', '1313WWT', 'cc8d7cffa297c1dd5997cbb548a8a89c.jpg', 'b4c85e16f0c1eb1e2930bbfe604570a9.jpg', 'jog4'),
(34, '4DM442455', 'JEAN PAUL', '2020-03-16 03:03:56', '4DM442455', '132132132132', '1123TAS', '465ab380cf999659713c02874a60eee6.jpg', 'e8db2c8638c10d78c3a6a17b39b47e82.jpg', 'jog4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbm_admin`
--
ALTER TABLE `dbm_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`id_moto94267`);

--
-- Indexes for table `real_record34126`
--
ALTER TABLE `real_record34126`
  ADD PRIMARY KEY (`id_moto34126`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbm_admin`
--
ALTER TABLE `dbm_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `moto`
--
ALTER TABLE `moto`
  MODIFY `id_moto94267` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `real_record34126`
--
ALTER TABLE `real_record34126`
  MODIFY `id_moto34126` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
