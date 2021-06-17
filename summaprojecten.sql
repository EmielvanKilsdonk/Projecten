-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2021 at 10:00 AM
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
  `bestandurl` varchar(50) NOT NULL,
  PRIMARY KEY (`bestandid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectlid`
--

DROP TABLE IF EXISTS `projectlid`;
CREATE TABLE IF NOT EXISTS `projectlid` (
  `projectid` int(11) NOT NULL,
  `lidid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
