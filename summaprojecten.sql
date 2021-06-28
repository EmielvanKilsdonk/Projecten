-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 28, 2021 at 06:27 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `summaprojecten`
--
CREATE DATABASE IF NOT EXISTS `summaprojecten` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `summaprojecten`;

-- --------------------------------------------------------

--
-- Table structure for table `bestand`
--

DROP TABLE IF EXISTS `bestand`;
CREATE TABLE IF NOT EXISTS `bestand` (
  `bestandid` int(11) NOT NULL AUTO_INCREMENT,
  `projectid` int(11) NOT NULL,
  `bestandurl` varchar(300) NOT NULL,
  PRIMARY KEY (`bestandid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lid`
--

DROP TABLE IF EXISTS `lid`;
CREATE TABLE IF NOT EXISTS `lid` (
  `lidid` int(11) NOT NULL AUTO_INCREMENT,
  `lidnaam` varchar(25) NOT NULL,
  `liddocent` tinyint(1) NOT NULL,
  `gebruikersnaam` varchar(25) NOT NULL,
  `wachtwoord` varchar(300) NOT NULL,
  PRIMARY KEY (`lidid`),
  UNIQUE KEY `gebruikersnaam` (`gebruikersnaam`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lid`
--

INSERT INTO `lid` (`lidid`, `lidnaam`, `liddocent`, `gebruikersnaam`, `wachtwoord`) VALUES
(2, 'Volkan Welp', 1, 'Volkandocent', '$2y$10$hTbkaRD5dJ.8R9Kmqlib5.GxMdpwR9cA0TvPd.2fVkEmHeQ31bxaO'),
(3, 'Jan', 0, 'Jan', '$2y$10$5bycFmjTU/shaDFAAFk6QOHckplsfUZbYTsemR/rA4AqxTnGE6yle'),
(4, 'Bob', 0, 'Bob', '$2y$10$UkLGjqy1uJ4ArGhDDh/pqe0O6D/hyp5Ec.L86cB444IOQzylMB5rO'),
(5, 'Dean', 1, 'Dean', '$2y$10$/X6y7GZJoUenWR7X3VrpGeNeLsmH.mbqnri4bczJrOvANPP0WIkW6'),
(6, 'Docent', 1, 'Docent', '$2y$10$LViLy0N92nDq5rNLv4D1lej9kGpa6eNFExiX58MTN57nULidMpnTW');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `projectid` int(11) NOT NULL AUTO_INCREMENT,
  `projectnaam` varchar(25) NOT NULL,
  `projectomschrijving` varchar(50) NOT NULL,
  PRIMARY KEY (`projectid`),
  KEY `projectnaam` (`projectnaam`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectid`, `projectnaam`, `projectomschrijving`) VALUES
(1, 'WebOpdracht1', 'De eerste opdracht voor het vak web'),
(2, 'ProjectProgrammeren', 'Project voor het vak programmeren');

-- --------------------------------------------------------

--
-- Table structure for table `projectlid`
--

DROP TABLE IF EXISTS `projectlid`;
CREATE TABLE IF NOT EXISTS `projectlid` (
  `projectid` int(11) NOT NULL,
  `lidid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectlid`
--

INSERT INTO `projectlid` (`projectid`, `lidid`) VALUES
(1, 2),
(1, 4),
(2, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
