-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2016 at 04:03 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`id_credit`, `montant_credit`, `id_fbo`, `code_distributeur`, `date_creation`, `type_operation`, `motif`) VALUES
(5, 500, 0, '1000000001', '2016-09-15 17:08:02', 0, 'pour la tabaski'),
(6, 25000, 0, '1000000001', '2016-10-01 08:06:39', 0, 'pour la tabaski');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123 ;

--
-- Dumping data for table `fbo`
--

INSERT INTO `fbo` (`id_fbo`, `code_distributeur`, `nom_prenom`, `numero_compte`, `date_creation`) VALUES
(110, '1000000001', 'REX MAUGHAN', '44565223300001', '2016-09-15 17:03:20'),
(111, '1000000005', 'GREGG E MAUGHAN', '44565223300002', '2016-09-15 17:03:20'),
(112, '1000000010', 'PMG FAMILY VENTURES LP', '44565223300003', '2016-09-15 17:03:20'),
(113, '1000000018', 'GARY GLENN SHREEVE', '44565223300004', '2016-09-15 17:03:20'),
(114, '1000108841', 'JACK HUDSPETH', '44565223300005', '2016-09-15 17:03:20'),
(115, '1000219253', 'AMPARO BERNARD', '44565223300006', '2016-09-15 17:03:20'),
(116, '221000101012', 'LASSINA JEAN PAUL SOMBIE', '44565223300007', '2016-09-15 17:03:20'),
(117, '221000101145', 'THERESE GBAGUIDI', '44565223300008', '2016-09-15 17:03:20'),
(118, '221000102271', 'LOUISE GUEYE', '44565223300009', '2016-09-15 17:03:21'),
(119, '221000104193', 'ROSALIE NIAGO', '44565223300010', '2016-09-15 17:03:21'),
(120, '221000109554', 'MADELEINE GBEDO', '44565223300011', '2016-09-15 17:03:21'),
(121, '221000146844', 'FOUSSEYNI TRAORE', '44565223300012', '2016-09-15 17:03:22'),
(122, '221000155693', 'KARIM DIALLO', '', '2016-09-15 17:03:22');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `fichier_importer`
--

INSERT INTO `fichier_importer` (`id_fi`, `date_creation`, `numero_mois`, `nbre_distributeur`, `nom_fichier`) VALUES
(12, '2016-09-15 17:03:20', 9, 14, 'bonus_09_2016.xls'),
(13, '2016-09-15 17:12:28', 9, 14, 'bonus_10_2016.xls');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `resume_fbo`
--

INSERT INTO `resume_fbo` (`id_rfbo`, `code_distributeur`, `apayer`, `credit`, `status`) VALUES
(14, '1000000001', 3143649, 25000, 0),
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
(26, '221000155693', 97450, 0, 0),
(27, '1000000001', 3143649, 25000, 0),
(28, '1000000005', 120856, 0, 0),
(29, '1000000010', 695830, 0, 0),
(30, '1000000018', 131112, 0, 0),
(31, '1000108841', 432455, 0, 0),
(32, '1000219253', 803301, 0, 0),
(33, '221000101012', 61235, 0, 0),
(34, '221000101145', 123829, 0, 0),
(35, '221000102271', 87472, 0, 0),
(36, '221000104193', 57491, 0, 0),
(37, '221000109554', 105123, 0, 0),
(38, '221000146844', 60005, 0, 0),
(39, '221000155693', 97450, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id_transaction`, `id_fbo`, `code_distributeur`, `montant_bonus`, `ajustements`, `sous_total`, `bic`, `apayer`, `arembourser`, `date_transaction`, `mois`, `id_fichier`, `numero_mois`) VALUES
(53, 110, '1000000001', 1955683, 1187466, 3143149, 0, 3143149, 0, '2016-09-15 17:03:20', '', 12, 9),
(54, 111, '1000000005', 76831, 43525, 120356, 0, 120356, 0, '2016-09-15 17:03:20', '', 12, 9),
(55, 112, '1000000010', 170272, 525058, 695330, 0, 695330, 0, '2016-09-15 17:03:20', '', 12, 9),
(56, 113, '1000000018', 153661, -23049, 130612, 0, 130612, 0, '2016-09-15 17:03:20', '', 12, 9),
(57, 114, '1000108841', 114680, 317275, 431955, 0, 431955, 0, '2016-09-15 17:03:20', '', 12, 9),
(58, 115, '1000219253', 224057, 578744, 802801, 0, 802801, 0, '2016-09-15 17:03:20', '', 12, 9),
(59, 116, '221000101012', 41011, 19724, 60735, 0, 60735, 0, '2016-09-15 17:03:20', '', 12, 9),
(60, 117, '221000101145', 140782, -17453, 123329, 0, 123329, 0, '2016-09-15 17:03:21', '', 12, 9),
(61, 118, '221000102271', 74552, 12420, 86972, 0, 86972, 0, '2016-09-15 17:03:21', '', 12, 9),
(62, 119, '221000104193', 29864, 27127, 56991, 0, 56991, 0, '2016-09-15 17:03:21', '', 12, 9),
(63, 120, '221000109554', 46574, 58049, 104623, 0, 104623, 0, '2016-09-15 17:03:22', '', 12, 9),
(64, 121, '221000146844', 37288, 22217, 59505, 0, 59505, 0, '2016-09-15 17:03:22', '', 12, 9),
(65, 122, '221000155693', 23594, 73356, 96950, 0, 96950, 0, '2016-09-15 17:03:22', '', 12, 9),
(66, 110, '1000000001', 1955683, 1187466, 3143149, 0, 500, 0, '2016-09-15 17:12:28', '', 13, 9),
(67, 111, '1000000005', 76831, 43525, 120356, 0, 500, 0, '2016-09-15 17:12:28', '', 13, 9),
(68, 112, '1000000010', 170272, 525058, 695330, 0, 500, 0, '2016-09-15 17:12:28', '', 13, 9),
(69, 113, '1000000018', 153661, -23049, 130612, 0, 500, 0, '2016-09-15 17:12:29', '', 13, 9),
(70, 114, '1000108841', 114680, 317275, 431955, 0, 500, 0, '2016-09-15 17:12:29', '', 13, 9),
(71, 115, '1000219253', 224057, 578744, 802801, 0, 500, 0, '2016-09-15 17:12:29', '', 13, 9),
(72, 116, '221000101012', 41011, 19724, 60735, 0, 500, 0, '2016-09-15 17:12:29', '', 13, 9),
(73, 117, '221000101145', 140782, -17453, 123329, 0, 500, 0, '2016-09-15 17:12:29', '', 13, 9),
(74, 118, '221000102271', 74552, 12420, 86972, 0, 500, 0, '2016-09-15 17:12:29', '', 13, 9),
(75, 119, '221000104193', 29864, 27127, 56991, 0, 500, 0, '2016-09-15 17:12:29', '', 13, 9),
(76, 120, '221000109554', 46574, 58049, 104623, 0, 500, 0, '2016-09-15 17:12:29', '', 13, 9),
(77, 121, '221000146844', 37288, 22217, 59505, 0, 500, 0, '2016-09-15 17:12:29', '', 13, 9),
(78, 122, '221000155693', 23594, 73356, 96950, 0, 500, 0, '2016-09-15 17:12:29', '', 13, 9);

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
