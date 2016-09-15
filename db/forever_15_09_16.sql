-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2016 at 03:16 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forever`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(100) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `user_agent` varchar(200) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL,
  `user_data` text NOT NULL,
  `date_ajout_visiteur` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `compte_bancaire`
--

CREATE TABLE IF NOT EXISTS `compte_bancaire` (
  `id_cb` int(11) NOT NULL AUTO_INCREMENT,
  `code_distributeur` varchar(100) NOT NULL,
  `numero_compte` varchar(200) NOT NULL,
  PRIMARY KEY (`id_cb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `compte_bancaire`
--

INSERT INTO `compte_bancaire` (`id_cb`, `code_distributeur`, `numero_compte`) VALUES
(14, '1000000001', '44565223300001'),
(15, '1000000005', '44565223300002'),
(16, '1000000010', '44565223300003'),
(17, '1000000018', '44565223300004'),
(18, '1000108841', '44565223300005'),
(19, '1000219253', '44565223300006'),
(20, '221000101012', '44565223300007'),
(21, '221000101145', '44565223300008'),
(22, '221000102271', '44565223300009'),
(23, '221000104193', '44565223300010'),
(24, '221000109554', '44565223300011'),
(25, '221000146844', '44565223300012');

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE IF NOT EXISTS `credit` (
  `id_credit` int(11) NOT NULL AUTO_INCREMENT,
  `montant_credit` int(11) NOT NULL,
  `id_fbo` int(11) NOT NULL,
  `code_distributeur` varchar(100) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type_operation` int(11) NOT NULL,
  `motif` varchar(200) NOT NULL,
  PRIMARY KEY (`id_credit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`id_credit`, `montant_credit`, `id_fbo`, `code_distributeur`, `date_creation`, `type_operation`, `motif`) VALUES
(3, 200000, 0, '1000000001', '2016-09-15 14:55:37', 0, 'pour la tabaski'),
(4, 0, 0, '0', '2016-09-15 14:57:12', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `fbo`
--

CREATE TABLE IF NOT EXISTS `fbo` (
  `id_fbo` int(11) NOT NULL AUTO_INCREMENT,
  `code_distributeur` varchar(100) NOT NULL,
  `nom_prenom` varchar(200) NOT NULL,
  `numero_compte` varchar(200) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_fbo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data for table `fbo`
--

INSERT INTO `fbo` (`id_fbo`, `code_distributeur`, `nom_prenom`, `numero_compte`, `date_creation`) VALUES
(97, '1000000001', 'REX MAUGHAN', '44565223300001', '2016-09-15 11:56:19'),
(98, '1000000005', 'GREGG E MAUGHAN', '44565223300002', '2016-09-15 11:56:20'),
(99, '1000000010', 'PMG FAMILY VENTURES LP', '44565223300003', '2016-09-15 11:56:20'),
(100, '1000000018', 'GARY GLENN SHREEVE', '44565223300004', '2016-09-15 11:56:20'),
(101, '1000108841', 'JACK HUDSPETH', '44565223300005', '2016-09-15 11:56:20'),
(102, '1000219253', 'AMPARO BERNARD', '44565223300006', '2016-09-15 11:56:20'),
(103, '221000101012', 'LASSINA JEAN PAUL SOMBIE', '44565223300007', '2016-09-15 11:56:20'),
(104, '221000101145', 'THERESE GBAGUIDI', '44565223300008', '2016-09-15 11:56:20'),
(105, '221000102271', 'LOUISE GUEYE', '44565223300009', '2016-09-15 11:56:20'),
(106, '221000104193', 'ROSALIE NIAGO', '44565223300010', '2016-09-15 11:56:20'),
(107, '221000109554', 'MADELEINE GBEDO', '44565223300011', '2016-09-15 11:56:20'),
(108, '221000146844', 'FOUSSEYNI TRAORE', '44565223300012', '2016-09-15 11:56:20'),
(109, '221000155693', 'KARIM DIALLO', '', '2016-09-15 11:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `fichier_importer`
--

CREATE TABLE IF NOT EXISTS `fichier_importer` (
  `id_fi` int(11) NOT NULL AUTO_INCREMENT,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `numero_mois` int(11) NOT NULL,
  `nbre_distributeur` int(11) NOT NULL,
  `nom_fichier` varchar(100) NOT NULL,
  PRIMARY KEY (`id_fi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `fichier_importer`
--

INSERT INTO `fichier_importer` (`id_fi`, `date_creation`, `numero_mois`, `nbre_distributeur`, `nom_fichier`) VALUES
(10, '2016-09-15 11:56:19', 9, 14, 'bonus_09_2016.xls'),
(11, '2016-09-15 11:58:12', 9, 14, 'bonus_10_2016.xls');

-- --------------------------------------------------------

--
-- Table structure for table `resume_fbo`
--

CREATE TABLE IF NOT EXISTS `resume_fbo` (
  `id_rfbo` int(11) NOT NULL AUTO_INCREMENT,
  `code_distributeur` varchar(100) NOT NULL,
  `apayer` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_rfbo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `resume_fbo`
--

INSERT INTO `resume_fbo` (`id_rfbo`, `code_distributeur`, `apayer`, `credit`, `status`) VALUES
(14, '1000000001', 3143649, 200000, 0),
(15, '1000000005', 120856, 0, 0),
(16, '1000000010', 695830, 0, 0),
(17, '1000000018', 131112, 0, 0),
(18, '1000108841', 432455, 0, 0),
(19, '1000219253', 803301, 0, 0),
(20, '221000101012', 61235, 0, 0),
(21, '221000101145', 123829, 0, 0),
(22, '221000102271', 87472, 0, 0),
(23, '221000104193', 57491, 0, 0),
(24, '221000109554', 105123, 0, 0),
(25, '221000146844', 60005, 0, 0),
(26, '221000155693', 97450, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id_transaction` int(11) NOT NULL AUTO_INCREMENT,
  `id_fbo` int(11) NOT NULL,
  `code_distributeur` varchar(100) NOT NULL,
  `montant_bonus` int(11) NOT NULL,
  `ajustements` int(11) NOT NULL,
  `sous_total` int(11) NOT NULL,
  `bic` int(11) NOT NULL,
  `apayer` int(11) NOT NULL,
  `arembourser` int(11) NOT NULL,
  `date_transaction` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mois` varchar(50) NOT NULL,
  `id_fichier` int(11) NOT NULL,
  `numero_mois` int(11) NOT NULL,
  PRIMARY KEY (`id_transaction`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id_transaction`, `id_fbo`, `code_distributeur`, `montant_bonus`, `ajustements`, `sous_total`, `bic`, `apayer`, `arembourser`, `date_transaction`, `mois`, `id_fichier`, `numero_mois`) VALUES
(27, 97, '1000000001', 1955683, 1187466, 3143149, 0, 3143149, 0, '2016-09-15 11:56:19', '', 10, 9),
(28, 98, '1000000005', 76831, 43525, 120356, 0, 120356, 0, '2016-09-15 11:56:20', '', 10, 9),
(29, 99, '1000000010', 170272, 525058, 695330, 0, 695330, 0, '2016-09-15 11:56:20', '', 10, 9),
(30, 100, '1000000018', 153661, -23049, 130612, 0, 130612, 0, '2016-09-15 11:56:20', '', 10, 9),
(31, 101, '1000108841', 114680, 317275, 431955, 0, 431955, 0, '2016-09-15 11:56:20', '', 10, 9),
(32, 102, '1000219253', 224057, 578744, 802801, 0, 802801, 0, '2016-09-15 11:56:20', '', 10, 9),
(33, 103, '221000101012', 41011, 19724, 60735, 0, 60735, 0, '2016-09-15 11:56:20', '', 10, 9),
(34, 104, '221000101145', 140782, -17453, 123329, 0, 123329, 0, '2016-09-15 11:56:20', '', 10, 9),
(35, 105, '221000102271', 74552, 12420, 86972, 0, 86972, 0, '2016-09-15 11:56:20', '', 10, 9),
(36, 106, '221000104193', 29864, 27127, 56991, 0, 56991, 0, '2016-09-15 11:56:20', '', 10, 9),
(37, 107, '221000109554', 46574, 58049, 104623, 0, 104623, 0, '2016-09-15 11:56:20', '', 10, 9),
(38, 108, '221000146844', 37288, 22217, 59505, 0, 59505, 0, '2016-09-15 11:56:20', '', 10, 9),
(39, 109, '221000155693', 23594, 73356, 96950, 0, 96950, 0, '2016-09-15 11:56:20', '', 10, 9),
(40, 97, '1000000001', 1955683, 1187466, 3143149, 0, 500, 0, '2016-09-15 11:58:12', '', 11, 9),
(41, 98, '1000000005', 76831, 43525, 120356, 0, 500, 0, '2016-09-15 11:58:13', '', 11, 9),
(42, 99, '1000000010', 170272, 525058, 695330, 0, 500, 0, '2016-09-15 11:58:13', '', 11, 9),
(43, 100, '1000000018', 153661, -23049, 130612, 0, 500, 0, '2016-09-15 11:58:13', '', 11, 9),
(44, 101, '1000108841', 114680, 317275, 431955, 0, 500, 0, '2016-09-15 11:58:13', '', 11, 9),
(45, 102, '1000219253', 224057, 578744, 802801, 0, 500, 0, '2016-09-15 11:58:13', '', 11, 9),
(46, 103, '221000101012', 41011, 19724, 60735, 0, 500, 0, '2016-09-15 11:58:13', '', 11, 9),
(47, 104, '221000101145', 140782, -17453, 123329, 0, 500, 0, '2016-09-15 11:58:13', '', 11, 9),
(48, 105, '221000102271', 74552, 12420, 86972, 0, 500, 0, '2016-09-15 11:58:13', '', 11, 9),
(49, 106, '221000104193', 29864, 27127, 56991, 0, 500, 0, '2016-09-15 11:58:13', '', 11, 9),
(50, 107, '221000109554', 46574, 58049, 104623, 0, 500, 0, '2016-09-15 11:58:13', '', 11, 9),
(51, 108, '221000146844', 37288, 22217, 59505, 0, 500, 0, '2016-09-15 11:58:13', '', 11, 9),
(52, 109, '221000155693', 23594, 73356, 96950, 0, 500, 0, '2016-09-15 11:58:13', '', 11, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `login_user` varchar(255) NOT NULL,
  `pwd_user` varchar(255) NOT NULL,
  `name_user` varchar(50) NOT NULL,
  `surname_user` varchar(100) NOT NULL,
  `date_ajout_user` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `login_user`, `pwd_user`, `name_user`, `surname_user`, `date_ajout_user`) VALUES
(4, 'admin@admin.com', '0192023a7bbd73250516f069df18b500', 'user', 'user', '2016-07-29 16:11:46');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
