-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 12, 2021 at 05:42 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Temps_de_parole`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajoute_a`
--

CREATE TABLE `ajoute_a` (
  `idCom` int(11) DEFAULT NULL,
  `idPage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `amelioration`
--

CREATE TABLE `amelioration` (
  `idAmelioration` int(11) NOT NULL,
  `amelioration_texte` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `amelioration`
--

INSERT INTO `amelioration` (`idAmelioration`, `amelioration_texte`) VALUES
(1, ' '),
(2, ' '),
(3, ' p'),
(4, ' '),
(5, ' '),
(6, ' '),
(7, ' az'),
(8, ' a'),
(9, '& '),
(10, ' a'),
(11, ' a'),
(12, ' a'),
(13, ' f'),
(14, ' r'),
(15, ' e'),
(16, 'r '),
(17, ' z'),
(18, 'h '),
(19, 'e '),
(20, ' a'),
(21, ' rez'),
(22, ' z'),
(23, ' z'),
(24, ' e'),
(25, ' e'),
(26, ' a'),
(27, ' a'),
(28, ' e'),
(29, ' z'),
(30, ' z'),
(31, ' e'),
(32, ' r'),
(33, ' h'),
(34, ' ez'),
(35, ' e'),
(36, ' aze'),
(37, ' d'),
(38, ' z'),
(39, ' eze'),
(40, 'ce '),
(41, ' je propose une amelioration'),
(42, ' f'),
(43, 'r '),
(44, 'e '),
(45, ' e'),
(46, ' e'),
(47, ' de'),
(48, ' ds'),
(49, ' d'),
(50, ' s'),
(51, 'rt '),
(52, ' ft('),
(53, ' t'),
(54, ' z'),
(55, ' z'),
(56, ' d'),
(57, ' df');

-- --------------------------------------------------------

--
-- Table structure for table `a_commente`
--

CREATE TABLE `a_commente` (
  `idUtil` int(11) DEFAULT NULL,
  `idCom` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `a_propose_amelioration`
--

CREATE TABLE `a_propose_amelioration` (
  `idUtil` int(11) DEFAULT NULL,
  `idAmelioration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `idCom` int(11) NOT NULL,
  `commentaire_texte` varchar(5000) DEFAULT NULL,
  `ref` varchar(100) DEFAULT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `dateCom` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`idCom`, `commentaire_texte`, `ref`, `pseudo`, `dateCom`) VALUES
(2, ' Test', '1995', 'Alphatrio', '2021-03-29 10:21:34'),
(3, ' Test 2', '1995', 'Alphatrio', '2021-03-29 11:11:26'),
(4, ' sd', '2001', 'leboss', ''),
(5, ' sd', '2015', 'leboss', ''),
(6, ' a', 'Europe 1', 'leboss', ''),
(7, ' zz', '2011', 'leboss', ''),
(8, ' po', '2001', 'leboss', ''),
(9, ' dc', '2017', 'Alphatrio', '2021-04-01 09:36:23'),
(10, ' tr', '2017', 'Alphatrio', '2021-04-01 10:47:04'),
(11, ' and', 'cherie fm', 'Alphatrio', '2021-04-08 21:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `elues`
--

CREATE TABLE `elues` (
  `idElues` int(11) NOT NULL,
  `typeElues` varchar(5000) DEFAULT NULL,
  `repartitionElues` float DEFAULT NULL,
  `annee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `elues`
--

INSERT INTO `elues` (`idElues`, `typeElues`, `repartitionElues`, `annee`) VALUES
(1, 'Sénateurs', 5, 1992),
(2, 'Sénateurs', 5.6, 1995),
(3, 'Sénateurs', 5.9, 1998),
(4, 'Sénateurs', 10.9, 2001),
(5, 'Sénateurs', 16.9, 2004),
(6, 'Sénateurs', 21.9, 2008),
(7, 'Sénateurs', 22.1, 2011),
(8, 'Sénateurs', 25, 2014),
(9, 'Sénateurs', 32.1, 2017),
(10, 'Députés', 6, 1993),
(11, 'Députés', 11, 1997),
(12, 'Députés', 12.3, 2002),
(13, 'Députés', 18.5, 2007),
(14, 'Députés', 26.9, 2012),
(15, 'Députes', 38.8, 2017),
(16, 'Conseillers régionaux', 12, 1992),
(17, 'Conseillers régionaux', 27.1, 1998),
(18, 'Conseillers régionaux', 47.6, 2004),
(19, 'Conseillers régionaux', 48, 2010),
(20, 'Conseillers régionaux', 47.8, 2015),
(21, 'Conseillers départementaux', 5.6, 1992),
(22, 'Conseillers departementaux', 5.4, 1994),
(23, 'Conseillers départementaux', 8.6, 1998),
(24, 'Conseillers départementaux', 9.8, 2001),
(25, 'Conseillers départementaux', 10.9, 2004),
(26, 'Conseillers départementaux', 13.1, 2008),
(27, 'Conseillers départementaux', 13.8, 2011),
(28, 'Conseillers départementaux', 50, 2015),
(29, 'Conseillers municipaux', 21.7, 1995),
(30, 'Conseillers municipaux', 33, 2001),
(31, 'Conseillers municipaux', 36, 2008),
(32, 'Conseillers municipaux', 40.3, 2014);

-- --------------------------------------------------------

--
-- Table structure for table `esalaire`
--

CREATE TABLE `esalaire` (
  `idEcart` int(11) NOT NULL,
  `EcartPublic` float DEFAULT NULL,
  `EcartPrive` float DEFAULT NULL,
  `annee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `esalaire`
--

INSERT INTO `esalaire` (`idEcart`, `EcartPublic`, `EcartPrive`, `annee`) VALUES
(1, 21.45, 13.76, 1995),
(2, 21.68, 14.5, 1996),
(3, 21.1, 14.05, 1997),
(4, 20.78, 13.42, 1998),
(5, 20.45, 13.07, 1999),
(6, 21.17, 13.3, 2000),
(7, 21.11, 13.56, 2001),
(8, 20.47, 13.3, 2002),
(9, 20.3, 13.83, 2003),
(10, 20.2, 13.49, 2004),
(11, 19.52, 13.35, 2005),
(12, 19.12, 14.01, 2006),
(13, 19.28, 13.69, 2007),
(14, 19.62, 14.21, 2008),
(15, 19.14, 14.5, 2009),
(16, 18.64, 14.19, 2010),
(17, 18.39, 14.38, 2011),
(18, 18.24, 13.98, 2012),
(19, 18.01, 13.91, 2013),
(20, 17.63, 13.4, 2014),
(21, 17.58, 13.38, 2015),
(22, 17.15, 12.86, 2016),
(23, 16.76, 12.45, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `idMed` int(11) NOT NULL,
  `typeMed` varchar(5000) DEFAULT NULL,
  `rnomMed` varchar(5000) DEFAULT NULL,
  `public` tinyint(1) DEFAULT NULL,
  `temps_parole` float DEFAULT NULL,
  `annee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`idMed`, `typeMed`, `rnomMed`, `public`, `temps_parole`, `annee`) VALUES
(1, 'radio', 'cherie fm', 0, 47.1, 2002),
(2, 'radio', 'cherie fm', 0, 46.03, 2003),
(3, 'radio', 'cherie fm', 0, 48.38, 2004),
(4, 'radio', 'cherie fm', 0, 45.45, 2005),
(5, 'radio', 'cherie fm', 0, 47.81, 2006),
(6, 'radio', 'cherie fm', 0, 43.94, 2007),
(7, 'radio', 'cherie fm', 0, 51.39, 2008),
(8, 'radio', 'cherie fm', 0, 49.95, 2009),
(9, 'radio', 'cherie fm', 0, 48.06, 2010),
(10, 'radio', 'cherie fm', 0, 47.83, 2011),
(11, 'radio', 'cherie fm', 0, 51.89, 2012),
(12, 'radio', 'cherie fm', 0, 54.11, 2013),
(13, 'radio', 'cherie fm', 0, 50.3, 2014),
(14, 'radio', 'cherie fm', 0, 51.22, 2015),
(15, 'radio', 'cherie fm', 0, 51.17, 2016),
(16, 'radio', 'cherie fm', 0, 53.08, 2017),
(17, 'radio', 'cherie fm', 0, 52.14, 2018),
(18, 'radio', 'cherie fm', 0, 48.67, 2019),
(19, 'radio', 'Europe 1', 0, 22.05, 2001),
(20, 'radio', 'Europe 1', 0, 24.26, 2002),
(21, 'radio', 'Europe 1', 0, 26.71, 2003),
(22, 'radio', 'Europe 1', 0, 23.68, 2004),
(23, 'radio', 'Europe 1', 0, 23.67, 2005),
(24, 'radio', 'Europe 1', 0, 25.43, 2006),
(25, 'radio', 'Europe 1', 0, 25.98, 2007),
(26, 'radio', 'Europe 1', 0, 26.29, 2008),
(27, 'radio', 'Europe 1', 0, 24.83, 2009),
(28, 'radio', 'Europe 1', 0, 26.79, 2010),
(29, 'radio', 'Europe 1', 0, 28.04, 2011),
(30, 'radio', 'Europe 1', 0, 30.13, 2012),
(31, 'radio', 'Europe 1', 0, 32.34, 2013),
(32, 'radio', 'Europe 1', 0, 31.06, 2014),
(33, 'radio', 'Europe 1', 0, 32.08, 2015),
(34, 'radio', 'Europe 1', 0, 33.94, 2016),
(35, 'radio', 'Europe 1', 0, 36.8, 2017),
(36, 'radio', 'Europe 1', 0, 39.15, 2018),
(37, 'radio', 'Europe 1', 0, 40.37, 2019),
(38, 'radio', 'France Bleu', 1, 38.31, 2000),
(39, 'radio', 'France Bleu', 1, 34.63, 2001),
(40, 'radio', 'France Bleu', 1, 32.04, 2002),
(41, 'radio', 'France Bleu', 1, 34.28, 2003),
(42, 'radio', 'France Bleu', 1, 37.53, 2004),
(43, 'radio', 'France Bleu', 1, 37.85, 2005),
(44, 'radio', 'France Bleu', 1, 43.83, 2006),
(45, 'radio', 'France Bleu', 1, 42.53, 2007),
(46, 'radio', 'France Bleu', 1, 39.82, 2008),
(47, 'radio', 'France Bleu', 1, 41.65, 2009),
(48, 'radio', 'France Bleu', 1, 38.13, 2010),
(49, 'radio', 'France Bleu', 1, 37.97, 2011),
(50, 'radio', 'France Bleu', 1, 36.44, 2012),
(51, 'radio', 'France Bleu', 1, 35.32, 2013),
(52, 'radio', 'France Bleu', 1, 33.41, 2014),
(53, 'radio', 'France Bleu', 1, 34.78, 2015),
(54, 'radio', 'France Bleu', 1, 38.11, 2016),
(55, 'radio', 'France Bleu', 1, 39.01, 2017),
(56, 'radio', 'France Bleu', 1, 36.64, 2018),
(57, 'radio', 'France Bleu', 1, 37.21, 2019),
(58, 'radio', 'France Culture', 1, 26.49, 1995),
(59, 'radio', 'France Culture', 1, 26.45, 1996),
(60, 'radio', 'France Culture', 1, 26.71, 1997),
(61, 'radio', 'France Culture', 1, 26.56, 1998),
(62, 'radio', 'France Culture', 1, 27.04, 1999),
(63, 'radio', 'France Culture', 1, 26.54, 2000),
(64, 'radio', 'France Culture', 1, 24.51, 2001),
(65, 'radio', 'France Culture', 1, 24.64, 2002),
(66, 'radio', 'France Culture', 1, 25.28, 2003),
(67, 'radio', 'France Culture', 1, 24.78, 2004),
(68, 'radio', 'France Culture', 1, 23.79, 2005),
(69, 'radio', 'France Culture', 1, 25, 2006),
(70, 'radio', 'France Culture', 1, 26.6, 2007),
(71, 'radio', 'France Culture', 1, 27.19, 2008),
(72, 'radio', 'France Culture', 1, 26.55, 2009),
(73, 'radio', 'France Culture', 1, 28.18, 2010),
(74, 'radio', 'France Culture', 1, 29.61, 2011),
(75, 'radio', 'France Culture', 1, 29.34, 2012),
(76, 'radio', 'France Culture', 1, 29.36, 2013),
(77, 'radio', 'France Culture', 1, 31.19, 2014),
(78, 'radio', 'France Culture', 1, 31.12, 2015),
(79, 'radio', 'France Culture', 1, 32.59, 2016),
(80, 'radio', 'France Culture', 1, 35.05, 2017),
(81, 'radio', 'France Culture', 1, 34.7, 2018),
(82, 'radio', 'France Culture', 1, 34.78, 2019),
(83, 'radio', 'France Info', 1, 21.08, 1995),
(84, 'radio', 'France Info', 1, 22.31, 1996),
(85, 'radio', 'France Info', 1, 21.42, 1997),
(86, 'radio', 'France Info', 1, 21.68, 1998),
(87, 'radio', 'France Info', 1, 23.04, 1999),
(88, 'radio', 'France Info', 1, 25.44, 2000),
(89, 'radio', 'France Info', 1, 25.18, 2001),
(90, 'radio', 'France Info', 1, 26.18, 2002),
(91, 'radio', 'France Info', 1, 25.01, 2003),
(92, 'radio', 'France Info', 1, 25.05, 2004),
(93, 'radio', 'France Info', 1, 26.51, 2005),
(94, 'radio', 'France Info', 1, 28.19, 2006),
(95, 'radio', 'France Info', 1, 28.12, 2007),
(96, 'radio', 'France Info', 1, 29.55, 2008),
(97, 'radio', 'France Info', 1, 28.81, 2009),
(98, 'radio', 'France Info', 1, 29.42, 2010),
(99, 'radio', 'France Info', 1, 28.79, 2011),
(100, 'radio', 'France Info', 1, 29.57, 2012),
(101, 'radio', 'France Info', 1, 29.31, 2013),
(102, 'radio', 'France Info', 1, 30.77, 2014),
(103, 'radio', 'France Info', 1, 30.21, 2015),
(104, 'radio', 'France Info', 1, 30.15, 2016),
(105, 'radio', 'France Info', 1, 29.6, 2017),
(106, 'radio', 'France Info', 1, 30.23, 2018),
(107, 'radio', 'France Info', 1, 29.18, 2019),
(108, 'radio', 'France Inter', 1, 23.15, 1995),
(109, 'radio', 'France Inter', 1, 23.04, 1996),
(110, 'radio', 'France Inter', 1, 24.2, 1997),
(111, 'radio', 'France Inter', 1, 24.68, 1998),
(112, 'radio', 'France Inter', 1, 26.89, 1999),
(113, 'radio', 'France Inter', 1, 25.43, 2000),
(114, 'radio', 'France Inter', 1, 25.8, 2001),
(115, 'radio', 'France Inter', 1, 27, 2002),
(116, 'radio', 'France Inter', 1, 26.22, 2003),
(117, 'radio', 'France Inter', 1, 26.15, 2004),
(118, 'radio', 'France Inter', 1, 25.87, 2005),
(119, 'radio', 'France Inter', 1, 26.88, 2006),
(120, 'radio', 'France Inter', 1, 28.3, 2007),
(121, 'radio', 'France Inter', 1, 29.78, 2008),
(122, 'radio', 'France Inter', 1, 29.03, 2009),
(123, 'radio', 'France Inter', 1, 30.56, 2010),
(124, 'radio', 'France Inter', 1, 33.14, 2011),
(125, 'radio', 'France Inter', 1, 31.96, 2012),
(126, 'radio', 'France Inter', 1, 31.25, 2013),
(127, 'radio', 'France Inter', 1, 32.5, 2014),
(128, 'radio', 'France Inter', 1, 34.48, 2015),
(129, 'radio', 'France Inter', 1, 33.7, 2016),
(130, 'radio', 'France Inter', 1, 32.89, 2017),
(131, 'radio', 'France Inter', 1, 34.39, 2018),
(132, 'radio', 'France Inter', 1, 34.34, 2019),
(133, 'radio', 'France Musique', 1, 33.81, 1995),
(134, 'radio', 'France Musique', 1, 32.18, 1996),
(135, 'radio', 'France Musique', 1, 26.59, 1997),
(136, 'radio', 'France Musique', 1, 24.67, 1998),
(137, 'radio', 'France Musique', 1, 26.34, 1999),
(138, 'radio', 'France Musique', 1, 27.19, 2000),
(139, 'radio', 'France Musique', 1, 18.82, 2001),
(140, 'radio', 'France Musique', 1, 16.84, 2002),
(141, 'radio', 'France Musique', 1, 18.3, 2003),
(142, 'radio', 'France Musique', 1, 15.82, 2004),
(143, 'radio', 'France Musique', 1, 20.66, 2005),
(144, 'radio', 'France Musique', 1, 21.95, 2006),
(145, 'radio', 'France Musique', 1, 21.99, 2007),
(146, 'radio', 'France Musique', 1, 17.37, 2008),
(147, 'radio', 'France Musique', 1, 17.93, 2009),
(148, 'radio', 'France Musique', 1, 21.56, 2010),
(149, 'radio', 'France Musique', 1, 24.4, 2011),
(150, 'radio', 'France Musique', 1, 21.58, 2012),
(151, 'radio', 'France Musique', 1, 28.54, 2013),
(152, 'radio', 'France Musique', 1, 28.8, 2014),
(153, 'radio', 'France Musique', 1, 26.74, 2015),
(154, 'radio', 'France Musique', 1, 32.15, 2016),
(155, 'radio', 'France Musique', 1, 35.98, 2017),
(156, 'radio', 'France Musique', 1, 36.15, 2018),
(157, 'radio', 'France Musique', 1, 37.95, 2019),
(158, 'radio', 'Fun Radio', 0, 24.83, 2001),
(159, 'radio', 'Fun Radio', 0, 22.53, 2003),
(160, 'radio', 'Fun Radio', 0, 21.01, 2004),
(161, 'radio', 'Fun Radio', 0, 18.84, 2005),
(162, 'radio', 'Fun Radio', 0, 32, 2006),
(163, 'radio', 'Fun Radio', 0, 28.66, 2007),
(164, 'radio', 'Fun Radio', 0, 26.68, 2008),
(165, 'radio', 'Fun Radio', 0, 28.96, 2009),
(166, 'radio', 'Fun Radio', 0, 28.46, 2010),
(167, 'radio', 'Fun Radio', 0, 28.11, 2011),
(168, 'radio', 'Fun Radio', 0, 29.34, 2012),
(169, 'radio', 'Fun Radio', 0, 27.45, 2013),
(170, 'radio', 'Fun Radio', 0, 25.18, 2014),
(171, 'radio', 'Fun Radio', 0, 28.03, 2015),
(172, 'radio', 'Fun Radio', 0, 34.72, 2016),
(173, 'radio', 'Fun Radio', 0, 35.99, 2017),
(174, 'radio', 'Fun Radio', 0, 35.15, 2018),
(175, 'radio', 'Fun Radio', 0, 35.17, 2019),
(176, 'radio', 'MOUV', 1, 26.41, 2012),
(177, 'radio', 'MOUV', 1, 27.58, 2013),
(178, 'radio', 'MOUV', 1, 35.19, 2014),
(179, 'radio', 'MOUV', 1, 35.46, 2015),
(180, 'radio', 'MOUV', 1, 32.15, 2016),
(181, 'radio', 'MOUV', 1, 26.28, 2017),
(182, 'radio', 'MOUV', 1, 22.75, 2018),
(183, 'radio', 'MOUV', 1, 22.44, 2019),
(184, 'radio', 'NRJ', 0, 19.87, 2002),
(185, 'radio', 'NRJ', 0, 20.74, 2003),
(186, 'radio', 'NRJ', 0, 21.29, 2004),
(187, 'radio', 'NRJ', 0, 21, 2005),
(188, 'radio', 'NRJ', 0, 22.16, 2006),
(189, 'radio', 'NRJ', 0, 20.84, 2007),
(190, 'radio', 'NRJ', 0, 23.84, 2008),
(191, 'radio', 'NRJ', 0, 22.87, 2009),
(192, 'radio', 'NRJ', 0, 27.82, 2010),
(193, 'radio', 'NRJ', 0, 27.14, 2011),
(194, 'radio', 'NRJ', 0, 25.91, 2012),
(195, 'radio', 'NRJ', 0, 27.72, 2013),
(196, 'radio', 'NRJ', 0, 26.23, 2014),
(197, 'radio', 'NRJ', 0, 27.28, 2015),
(198, 'radio', 'NRJ', 0, 27.14, 2016),
(199, 'radio', 'NRJ', 0, 26.21, 2017),
(200, 'radio', 'NRJ', 0, 25.61, 2018),
(201, 'radio', 'NRJ', 0, 23.59, 2019),
(202, 'radio', 'Nostalgie', 0, 27.59, 2001),
(203, 'radio', 'Nostalgie', 0, 30.69, 2003),
(204, 'radio', 'Nostalgie', 0, 29.05, 2004),
(205, 'radio', 'Nostalgie', 0, 27.86, 2005),
(206, 'radio', 'Nostalgie', 0, 28.68, 2006),
(207, 'radio', 'Nostalgie', 0, 26.02, 2007),
(208, 'radio', 'Nostalgie', 0, 28.58, 2008),
(209, 'radio', 'Nostalgie', 0, 31.67, 2009),
(210, 'radio', 'Nostalgie', 0, 30.99, 2010),
(211, 'radio', 'Nostalgie', 0, 33.9, 2011),
(212, 'radio', 'Nostalgie', 0, 34.25, 2012),
(213, 'radio', 'Nostalgie', 0, 39.98, 2013),
(214, 'radio', 'Nostalgie', 0, 40.95, 2014),
(215, 'radio', 'Nostalgie', 0, 38.12, 2015),
(216, 'radio', 'Nostalgie', 0, 39.16, 2016),
(217, 'radio', 'Nostalgie', 0, 39.56, 2017),
(218, 'radio', 'Nostalgie', 0, 37.3, 2018),
(219, 'radio', 'Nostalgie', 0, 36.49, 2019),
(220, 'radio', 'RFI', 1, 29.21, 2000),
(221, 'radio', 'RFI', 1, 29.42, 2001),
(222, 'radio', 'RFI', 1, 29.53, 2002),
(223, 'radio', 'RFI', 1, 28.73, 2003),
(224, 'radio', 'RFI', 1, 28.67, 2004),
(225, 'radio', 'RFI', 1, 30.82, 2005),
(226, 'radio', 'RFI', 1, 31.27, 2006),
(227, 'radio', 'RFI', 1, 31.98, 2007),
(228, 'radio', 'RFI', 1, 31.15, 2008),
(229, 'radio', 'RFI', 1, 33.42, 2009),
(230, 'radio', 'RFI', 1, 32.07, 2010),
(231, 'radio', 'RFI', 1, 30.8, 2011),
(232, 'radio', 'RFI', 1, 30.97, 2012),
(233, 'radio', 'RFI', 1, 32.43, 2013),
(234, 'radio', 'RFI', 1, 36.39, 2014),
(235, 'radio', 'RFI', 1, 33.84, 2015),
(236, 'radio', 'RFI', 1, 34.69, 2016),
(237, 'radio', 'RFI', 1, 34.03, 2017),
(238, 'radio', 'RFI', 1, 33.15, 2018),
(239, 'radio', 'RFI', 1, 32.11, 2019),
(240, 'radio', 'RFM', 0, 33.46, 2002),
(241, 'radio', 'RFM', 0, 34.19, 2003),
(242, 'radio', 'RFM', 0, 33.52, 2004),
(243, 'radio', 'RFM', 0, 36.9, 2005),
(244, 'radio', 'RFM', 0, 26.91, 2006),
(245, 'radio', 'RFM', 0, 26.96, 2007),
(246, 'radio', 'RFM', 0, 27.52, 2008),
(247, 'radio', 'RFM', 0, 31.65, 2009),
(248, 'radio', 'RFM', 0, 31.45, 2010),
(249, 'radio', 'RFM', 0, 34.82, 2011),
(250, 'radio', 'RFM', 0, 31.33, 2012),
(251, 'radio', 'RFM', 0, 34.23, 2013),
(252, 'radio', 'RFM', 0, 33.24, 2014),
(253, 'radio', 'RFM', 0, 32.39, 2015),
(254, 'radio', 'RFM', 0, 33.64, 2016),
(255, 'radio', 'RFM', 0, 35.26, 2017),
(256, 'radio', 'RFM', 0, 34.81, 2018),
(257, 'radio', 'RFM', 0, 34.62, 2019),
(258, 'radio', 'RMC', 0, 24.72, 2001),
(259, 'radio', 'RMC', 0, 25.44, 2002),
(260, 'radio', 'RMC', 0, 25.62, 2003),
(261, 'radio', 'RMC', 0, 24.86, 2004),
(262, 'radio', 'RMC', 0, 19.75, 2005),
(263, 'radio', 'RMC', 0, 18.25, 2006),
(264, 'radio', 'RMC', 0, 17.83, 2007),
(265, 'radio', 'RMC', 0, 17.66, 2008),
(266, 'radio', 'RMC', 0, 17.75, 2009),
(267, 'radio', 'RMC', 0, 17.18, 2010),
(268, 'radio', 'RMC', 0, 16.71, 2011),
(269, 'radio', 'RMC', 0, 16.08, 2012),
(270, 'radio', 'RMC', 0, 17.14, 2013),
(271, 'radio', 'RMC', 0, 17.06, 2014),
(272, 'radio', 'RMC', 0, 17.66, 2015),
(273, 'radio', 'RMC', 0, 16.98, 2016),
(274, 'radio', 'RMC', 0, 16.69, 2017),
(275, 'radio', 'RMC', 0, 16.58, 2018),
(276, 'radio', 'RMC', 0, 17.33, 2019),
(277, 'radio', 'RTL', 0, 26.43, 2001),
(278, 'radio', 'RTL', 0, 28.31, 2002),
(279, 'radio', 'RTL', 0, 27.39, 2003),
(280, 'radio', 'RTL', 0, 27.42, 2004),
(281, 'radio', 'RTL', 0, 26.37, 2005),
(282, 'radio', 'RTL', 0, 25.91, 2006),
(283, 'radio', 'RTL', 0, 24.1, 2007),
(284, 'radio', 'RTL', 0, 23.98, 2008),
(285, 'radio', 'RTL', 0, 25.16, 2009),
(286, 'radio', 'RTL', 0, 26.08, 2010),
(287, 'radio', 'RTL', 0, 26.62, 2011),
(288, 'radio', 'RTL', 0, 27.13, 2012),
(289, 'radio', 'RTL', 0, 28.82, 2013),
(290, 'radio', 'RTL', 0, 27.52, 2014),
(291, 'radio', 'RTL', 0, 28.92, 2015),
(292, 'radio', 'RTL', 0, 28.04, 2016),
(293, 'radio', 'RTL', 0, 29.2, 2017),
(294, 'radio', 'RTL', 0, 29.63, 2018),
(295, 'radio', 'RTL', 0, 31.43, 2019),
(296, 'radio', 'RTL 2', 0, 31.17, 2002),
(297, 'radio', 'RTL 2', 0, 31.04, 2003),
(298, 'radio', 'RTL 2', 0, 33.33, 2004),
(299, 'radio', 'RTL 2', 0, 33.1, 2005),
(300, 'radio', 'RTL 2', 0, 31.2, 2006),
(301, 'radio', 'RTL 2', 0, 38.28, 2007),
(302, 'radio', 'RTL 2', 0, 43.2, 2008),
(303, 'radio', 'RTL 2', 0, 43.33, 2009),
(304, 'radio', 'RTL 2', 0, 43.91, 2010),
(305, 'radio', 'RTL 2', 0, 47.79, 2011),
(306, 'radio', 'RTL 2', 0, 47.75, 2012),
(307, 'radio', 'RTL 2', 0, 46.27, 2013),
(308, 'radio', 'RTL 2', 0, 44.31, 2014),
(309, 'radio', 'RTL 2', 0, 44.71, 2015),
(310, 'radio', 'RTL 2', 0, 41.79, 2016),
(311, 'radio', 'RTL 2', 0, 43.24, 2017),
(312, 'radio', 'RTL 2', 0, 44.26, 2018),
(313, 'radio', 'RTL 2', 0, 45.73, 2019),
(314, 'radio', 'Radio Classique', 0, 41.74, 2009),
(315, 'radio', 'Radio Classique', 0, 46.37, 2010),
(316, 'radio', 'Radio Classique', 0, 40.13, 2011),
(317, 'radio', 'Radio Classique', 0, 39.71, 2012),
(318, 'radio', 'Radio Classique', 0, 39.3, 2013),
(319, 'radio', 'Radio Classique', 0, 36.36, 2014),
(320, 'radio', 'Radio Classique', 0, 35.72, 2015),
(321, 'radio', 'Radio Classique', 0, 36.22, 2016),
(322, 'radio', 'Radio Classique', 0, 34.34, 2017),
(323, 'radio', 'Radio Classique', 0, 36.35, 2018),
(324, 'radio', 'Radio Classique', 0, 38.67, 2019),
(325, 'radio', 'Rire et Chansons', 0, 23.94, 2009),
(326, 'radio', 'Rire et Chansons', 0, 27.43, 2010),
(327, 'radio', 'Rire et Chansons', 0, 25.56, 2011),
(328, 'radio', 'Rire et Chansons', 0, 25.67, 2012),
(329, 'radio', 'Rire et Chansons', 0, 27.1, 2013),
(330, 'radio', 'Rire et Chansons', 0, 24.92, 2014),
(331, 'radio', 'Rire et Chansons', 0, 26.31, 2015),
(332, 'radio', 'Rire et Chansons', 0, 26.68, 2016),
(333, 'radio', 'Rire et Chansons', 0, 27.25, 2017),
(334, 'radio', 'Rire et Chansons', 0, 26.21, 2018),
(335, 'radio', 'Rire et Chansons', 0, 25.63, 2019),
(336, 'radio', 'Skyrock', 0, 18.28, 2001),
(337, 'radio', 'Skyrock', 0, 18.91, 2002),
(338, 'radio', 'Skyrock', 0, 18.79, 2003),
(339, 'radio', 'Skyrock', 0, 17.61, 2004),
(340, 'radio', 'Skyrock', 0, 18.17, 2005),
(341, 'radio', 'Skyrock', 0, 20.04, 2006),
(342, 'radio', 'Skyrock', 0, 20.13, 2007),
(343, 'radio', 'Skyrock', 0, 18.69, 2008),
(344, 'radio', 'Skyrock', 0, 18.39, 2009),
(345, 'radio', 'Skyrock', 0, 18.31, 2010),
(346, 'radio', 'Skyrock', 0, 17.08, 2011),
(347, 'radio', 'Skyrock', 0, 16.31, 2012),
(348, 'radio', 'Skyrock', 0, 16.71, 2013),
(349, 'radio', 'Skyrock', 0, 16.2, 2014),
(350, 'radio', 'Skyrock', 0, 15.5, 2015),
(351, 'radio', 'Skyrock', 0, 14.44, 2016),
(352, 'radio', 'Skyrock', 0, 15.68, 2017),
(353, 'radio', 'Skyrock', 0, 15.5, 2018),
(354, 'radio', 'Skyrock', 0, 14.91, 2019),
(355, 'radio', 'Sud Radio', 0, 21.95, 2012),
(356, 'radio', 'Sud Radio', 0, 25.72, 2013),
(357, 'radio', 'Sud Radio', 0, 27.3, 2014),
(358, 'radio', 'Sud Radio', 0, 28.88, 2015),
(359, 'radio', 'Sud Radio', 0, 31.9, 2016),
(360, 'radio', 'Sud Radio', 0, 32.56, 2017),
(361, 'radio', 'Sud Radio', 0, 32.79, 2018),
(362, 'radio', 'Sud Radio', 0, 32.47, 2019),
(363, 'radio', 'Virgin Radio', 0, 22.38, 2008),
(364, 'radio', 'Virgin Radio', 0, 25.85, 2009),
(365, 'radio', 'Virgin Radio', 0, 30.11, 2010),
(366, 'radio', 'Virgin Radio', 0, 26.63, 2011),
(367, 'radio', 'Virgin Radio', 0, 25.11, 2012),
(368, 'radio', 'Virgin Radio', 0, 30.31, 2013),
(369, 'radio', 'Virgin Radio', 0, 31.47, 2014),
(370, 'radio', 'Virgin Radio', 0, 27.82, 2015),
(371, 'radio', 'Virgin Radio', 0, 26.62, 2016),
(372, 'radio', 'Virgin Radio', 0, 24.99, 2017),
(373, 'radio', 'Virgin Radio', 0, 24.19, 2018),
(374, 'radio', 'Virgin Radio', 0, 28.23, 2019),
(375, 'tv', 'ARTE', 1, 28.14, 2010),
(376, 'tv', 'ARTE', 1, 28.06, 2011),
(377, 'tv', 'ARTE', 1, 29.94, 2012),
(378, 'tv', 'ARTE', 1, 27.58, 2013),
(379, 'tv', 'ARTE', 1, 29.09, 2014),
(380, 'tv', 'ARTE', 1, 28.28, 2015),
(381, 'tv', 'ARTE', 1, 28.25, 2016),
(382, 'tv', 'ARTE', 1, 29.86, 2017),
(383, 'tv', 'ARTE', 1, 31.14, 2018),
(384, 'tv', 'ARTE', 1, 32.81, 2019),
(385, 'tv', 'Animaux', 0, 25.9, 2010),
(386, 'tv', 'Animaux', 0, 31.55, 2011),
(387, 'tv', 'Animaux', 0, 34.93, 2012),
(388, 'tv', 'Animaux', 0, 33.73, 2013),
(389, 'tv', 'Animaux', 0, 33.9, 2014),
(390, 'tv', 'Animaux', 0, 36.77, 2015),
(391, 'tv', 'Animaux', 0, 36.56, 2016),
(392, 'tv', 'Animaux', 0, 37.68, 2017),
(393, 'tv', 'Animaux', 0, 40.99, 2018),
(394, 'tv', 'Animaux', 0, 38.53, 2019),
(395, 'tv', 'BFM TV', 0, 38.65, 2010),
(396, 'tv', 'BFM TV', 0, 36.92, 2011),
(397, 'tv', 'BFM TV', 0, 35.41, 2012),
(398, 'tv', 'BFM TV', 0, 35.81, 2013),
(399, 'tv', 'BFM TV', 0, 33.31, 2014),
(400, 'tv', 'BFM TV', 0, 33.62, 2015),
(401, 'tv', 'BFM TV', 0, 35.63, 2016),
(402, 'tv', 'BFM TV', 0, 36.05, 2017),
(403, 'tv', 'BFM TV', 0, 36.99, 2018),
(404, 'tv', 'BFM TV', 0, 34.23, 2019),
(405, 'tv', 'Canal plus', 0, 21.51, 2010),
(406, 'tv', 'Canal plus', 0, 22.15, 2011),
(407, 'tv', 'Canal plus', 0, 22.35, 2012),
(408, 'tv', 'Canal plus', 0, 23.41, 2013),
(409, 'tv', 'Canal plus', 0, 22.12, 2014),
(410, 'tv', 'Canal plus', 0, 21.53, 2015),
(411, 'tv', 'Canal plus', 0, 22.09, 2016),
(412, 'tv', 'Canal plus', 0, 22.01, 2017),
(413, 'tv', 'Canal plus', 0, 22.48, 2018),
(414, 'tv', 'Canal plus', 0, 22.7, 2019),
(415, 'tv', 'Canal plus Sport', 0, 5.72, 2010),
(416, 'tv', 'Canal plus Sport', 0, 5.32, 2011),
(417, 'tv', 'Canal plus Sport', 0, 5.11, 2012),
(418, 'tv', 'Canal plus Sport', 0, 4.44, 2013),
(419, 'tv', 'Canal plus Sport', 0, 5.95, 2014),
(420, 'tv', 'Canal plus Sport', 0, 4.12, 2015),
(421, 'tv', 'Canal plus Sport', 0, 4.38, 2016),
(422, 'tv', 'Canal plus Sport', 0, 4.13, 2017),
(423, 'tv', 'Canal plus Sport', 0, 5.37, 2018),
(424, 'tv', 'Canal plus Sport', 0, 5.36, 2019),
(425, 'tv', 'chasse et peche', 0, 7.91, 2010),
(426, 'tv', 'chasse et peche', 0, 8.44, 2011),
(427, 'tv', 'chasse et peche', 0, 7.18, 2012),
(428, 'tv', 'chasse et peche', 0, 10.09, 2013),
(429, 'tv', 'chasse et peche', 0, 10.31, 2014),
(430, 'tv', 'chasse et peche', 0, 9.49, 2015),
(431, 'tv', 'chasse et peche', 0, 7.58, 2016),
(432, 'tv', 'chasse et peche', 0, 9.08, 2017),
(433, 'tv', 'chasse et peche', 0, 11.77, 2018),
(434, 'tv', 'chasse et peche', 0, 12.04, 2019),
(435, 'tv', 'cherie 25', 0, 48.29, 2013),
(436, 'tv', 'cherie 25', 0, 48.91, 2014),
(437, 'tv', 'cherie 25', 0, 37.32, 2015),
(438, 'tv', 'cherie 25', 0, 41.83, 2016),
(439, 'tv', 'cherie 25', 0, 41.67, 2017),
(440, 'tv', 'cherie 25', 0, 39.98, 2018),
(441, 'tv', 'cherie 25', 0, 39.85, 2019),
(442, 'tv', 'Comedie plus', 0, 29.57, 2010),
(443, 'tv', 'Comedie plus', 0, 28.13, 2011),
(444, 'tv', 'Comedie plus', 0, 31.9, 2012),
(445, 'tv', 'Comedie plus', 0, 29.25, 2013),
(446, 'tv', 'Comedie plus', 0, 31.63, 2014),
(447, 'tv', 'Comedie plus', 0, 29.69, 2015),
(448, 'tv', 'Comedie plus', 0, 28.51, 2016),
(449, 'tv', 'Comedie plus', 0, 26.18, 2017),
(450, 'tv', 'Comedie plus', 0, 28.36, 2018),
(451, 'tv', 'Comedie plus', 0, 33.66, 2019),
(452, 'tv', 'D8/C8', 0, 27.81, 2013),
(453, 'tv', 'D8/C8', 0, 31.14, 2014),
(454, 'tv', 'D8/C8', 0, 27.52, 2015),
(455, 'tv', 'D8/C8', 0, 26.15, 2016),
(456, 'tv', 'D8/C8', 0, 27.29, 2017),
(457, 'tv', 'D8/C8', 0, 28.37, 2018),
(458, 'tv', 'D8/C8', 0, 29.81, 2019),
(459, 'tv', 'Euronews', 0, 34.22, 2010),
(460, 'tv', 'Euronews', 0, 30.68, 2011),
(461, 'tv', 'Euronews', 0, 30.61, 2012),
(462, 'tv', 'Euronews', 0, 36.71, 2013),
(463, 'tv', 'Euronews', 0, 37.61, 2014),
(464, 'tv', 'Euronews', 0, 35.39, 2015),
(465, 'tv', 'Euronews', 0, 30.95, 2016),
(466, 'tv', 'Euronews', 0, 31.58, 2017),
(467, 'tv', 'Euronews', 0, 34.89, 2018),
(468, 'tv', 'Euronews', 0, 35.7, 2019),
(469, 'tv', 'Eurosport France', 0, 6.57, 2010),
(470, 'tv', 'Eurosport France', 0, 7.95, 2011),
(471, 'tv', 'Eurosport France', 0, 8.83, 2012),
(472, 'tv', 'Eurosport France', 0, 8.84, 2013),
(473, 'tv', 'Eurosport France', 0, 7.61, 2014),
(474, 'tv', 'Eurosport France', 0, 7.01, 2015),
(475, 'tv', 'Eurosport France', 0, 8.12, 2016),
(476, 'tv', 'Eurosport France', 0, 5.95, 2017),
(477, 'tv', 'Eurosport France', 0, 5.17, 2018),
(478, 'tv', 'Eurosport France', 0, 9.58, 2019),
(479, 'tv', 'France 2', 1, 28.45, 2010),
(480, 'tv', 'France 2', 1, 30.6, 2011),
(481, 'tv', 'France 2', 1, 33.44, 2012),
(482, 'tv', 'France 2', 1, 34.88, 2013),
(483, 'tv', 'France 2', 1, 35.07, 2014),
(484, 'tv', 'France 2', 1, 36.21, 2015),
(485, 'tv', 'France 2', 1, 33.92, 2016),
(486, 'tv', 'France 2', 1, 36.41, 2017),
(487, 'tv', 'France 2', 1, 37.24, 2018),
(488, 'tv', 'France 2', 1, 38.91, 2019),
(489, 'tv', 'France 24', 1, 43.79, 2011),
(490, 'tv', 'France 24', 1, 45.01, 2012),
(491, 'tv', 'France 24', 1, 43.82, 2013),
(492, 'tv', 'France 24', 1, 44.99, 2014),
(493, 'tv', 'France 24', 1, 44.44, 2015),
(494, 'tv', 'France 24', 1, 45.93, 2016),
(495, 'tv', 'France 24', 1, 44.64, 2017),
(496, 'tv', 'France 24', 1, 45.99, 2018),
(497, 'tv', 'France 24', 1, 47.91, 2019),
(498, 'tv', 'France 3', 1, 29.84, 2010),
(499, 'tv', 'France 3', 1, 30.01, 2011),
(500, 'tv', 'France 3', 1, 30.32, 2012),
(501, 'tv', 'France 3', 1, 30.75, 2013),
(502, 'tv', 'France 3', 1, 30.01, 2014),
(503, 'tv', 'France 3', 1, 30.12, 2015),
(504, 'tv', 'France 3', 1, 32.63, 2016),
(505, 'tv', 'France 3', 1, 34.99, 2017),
(506, 'tv', 'France 3', 1, 35.37, 2018),
(507, 'tv', 'France 3', 1, 35.9, 2019),
(508, 'tv', 'France 5', 1, 26.89, 2010),
(509, 'tv', 'France 5', 1, 26.95, 2011),
(510, 'tv', 'France 5', 1, 28.67, 2012),
(511, 'tv', 'France 5', 1, 28.67, 2013),
(512, 'tv', 'France 5', 1, 30.77, 2014),
(513, 'tv', 'France 5', 1, 31.89, 2015),
(514, 'tv', 'France 5', 1, 34.47, 2016),
(515, 'tv', 'France 5', 1, 35.21, 2017),
(516, 'tv', 'France 5', 1, 36.09, 2018),
(517, 'tv', 'France 5', 1, 37.28, 2019),
(518, 'tv', 'France O', 1, 31.72, 2010),
(519, 'tv', 'France O', 1, 34.22, 2011),
(520, 'tv', 'France O', 1, 35.91, 2012),
(521, 'tv', 'France O', 1, 37.54, 2013),
(522, 'tv', 'France O', 1, 34.01, 2014),
(523, 'tv', 'France O', 1, 31.64, 2015),
(524, 'tv', 'France O', 1, 31.02, 2016),
(525, 'tv', 'France O', 1, 33.29, 2017),
(526, 'tv', 'France O', 1, 35.1, 2018),
(527, 'tv', 'France O', 1, 37.36, 2019),
(528, 'tv', 'Histoire', 0, 16.26, 2011),
(529, 'tv', 'Histoire', 0, 16.4, 2012),
(530, 'tv', 'Histoire', 0, 15.51, 2013),
(531, 'tv', 'Histoire', 0, 18.6, 2014),
(532, 'tv', 'Histoire', 0, 20.62, 2015),
(533, 'tv', 'Histoire', 0, 16.13, 2016),
(534, 'tv', 'Histoire', 0, 21.07, 2017),
(535, 'tv', 'Histoire', 0, 24.12, 2018),
(536, 'tv', 'Histoire', 0, 24.14, 2019),
(537, 'tv', 'I-Tele/CNews', 0, 38.46, 2010),
(538, 'tv', 'I-Tele/CNews', 0, 39.71, 2011),
(539, 'tv', 'I-Tele/CNews', 0, 37.28, 2012),
(540, 'tv', 'I-Tele/CNews', 0, 34.46, 2013),
(541, 'tv', 'I-Tele/CNews', 0, 34.21, 2014),
(542, 'tv', 'I-Tele/CNews', 0, 35.19, 2015),
(543, 'tv', 'I-Tele/CNews', 0, 33.7, 2016),
(544, 'tv', 'I-Tele/CNews', 0, 29.24, 2017),
(545, 'tv', 'I-Tele/CNews', 0, 30.43, 2018),
(546, 'tv', 'I-Tele/CNews', 0, 31.26, 2019),
(547, 'tv', 'L\'Equipe 21', 0, 22.96, 2013),
(548, 'tv', 'L\'Equipe 21', 0, 22.6, 2014),
(549, 'tv', 'L\'Equipe 21', 0, 14.67, 2015),
(550, 'tv', 'L\'Equipe 21', 0, 9.91, 2016),
(551, 'tv', 'L\'Equipe 21', 0, 12.81, 2017),
(552, 'tv', 'L\'Equipe 21', 0, 12.93, 2018),
(553, 'tv', 'L\'Equipe 21', 0, 14.27, 2019),
(554, 'tv', 'LCI', 0, 32.62, 2010),
(555, 'tv', 'LCI', 0, 33.67, 2011),
(556, 'tv', 'LCI', 0, 32.63, 2012),
(557, 'tv', 'LCI', 0, 33.47, 2013),
(558, 'tv', 'LCI', 0, 33.23, 2014),
(559, 'tv', 'LCI', 0, 36.86, 2015),
(560, 'tv', 'LCI', 0, 34.94, 2016),
(561, 'tv', 'LCI', 0, 32.21, 2017),
(562, 'tv', 'LCI', 0, 31.67, 2018),
(563, 'tv', 'LCI', 0, 31.04, 2019),
(564, 'tv', 'LCP/Public Senat', 1, 25.25, 2010),
(565, 'tv', 'LCP/Public Senat', 1, 26.8, 2011),
(566, 'tv', 'LCP/Public Senat', 1, 29.13, 2012),
(567, 'tv', 'LCP/Public Senat', 1, 27.91, 2013),
(568, 'tv', 'LCP/Public Senat', 1, 29.55, 2014),
(569, 'tv', 'LCP/Public Senat', 1, 30.98, 2015),
(570, 'tv', 'LCP/Public Senat', 1, 30.32, 2016),
(571, 'tv', 'LCP/Public Senat', 1, 31.39, 2017),
(572, 'tv', 'LCP/Public Senat', 1, 34.35, 2018),
(573, 'tv', 'LCP/Public Senat', 1, 33.92, 2019),
(574, 'tv', 'La chaine Meteo', 0, 31.16, 2010),
(575, 'tv', 'La chaine Meteo', 0, 27.03, 2011),
(576, 'tv', 'La chaine Meteo', 0, 27.77, 2012),
(577, 'tv', 'La chaine Meteo', 0, 18.42, 2013),
(578, 'tv', 'La chaine Meteo', 0, 13.06, 2014),
(579, 'tv', 'La chaine Meteo', 0, 13.61, 2015),
(580, 'tv', 'La chaine Meteo', 0, 14.95, 2016),
(581, 'tv', 'La chaine Meteo', 0, 16.77, 2017),
(582, 'tv', 'La chaine Meteo', 0, 14.2, 2018),
(583, 'tv', 'La chaine Meteo', 0, 13.71, 2019),
(584, 'tv', 'M6', 0, 39.4, 2010),
(585, 'tv', 'M6', 0, 39.04, 2011),
(586, 'tv', 'M6', 0, 40.64, 2012),
(587, 'tv', 'M6', 0, 40.7, 2013),
(588, 'tv', 'M6', 0, 41.17, 2014),
(589, 'tv', 'M6', 0, 40.63, 2015),
(590, 'tv', 'M6', 0, 41.22, 2016),
(591, 'tv', 'M6', 0, 43.59, 2017),
(592, 'tv', 'M6', 0, 42.19, 2018),
(593, 'tv', 'M6', 0, 43.68, 2019),
(594, 'tv', 'Monte Carlo TMC', 0, 28.54, 2010),
(595, 'tv', 'Monte Carlo TMC', 0, 29.44, 2011),
(596, 'tv', 'Monte Carlo TMC', 0, 30.3, 2012),
(597, 'tv', 'Monte Carlo TMC', 0, 30.81, 2013),
(598, 'tv', 'Monte Carlo TMC', 0, 30.31, 2014),
(599, 'tv', 'Monte Carlo TMC', 0, 28.79, 2015),
(600, 'tv', 'Monte Carlo TMC', 0, 29.38, 2016),
(601, 'tv', 'Monte Carlo TMC', 0, 30.08, 2017),
(602, 'tv', 'Monte Carlo TMC', 0, 31.68, 2018),
(603, 'tv', 'Monte Carlo TMC', 0, 32.94, 2019),
(604, 'tv', 'NRJ 12', 0, 30.92, 2010),
(605, 'tv', 'NRJ 12', 0, 27.4, 2011),
(606, 'tv', 'NRJ 12', 0, 32.67, 2012),
(607, 'tv', 'NRJ 12', 0, 30.67, 2013),
(608, 'tv', 'NRJ 12', 0, 35.24, 2014),
(609, 'tv', 'NRJ 12', 0, 33.06, 2015),
(610, 'tv', 'NRJ 12', 0, 33.92, 2016),
(611, 'tv', 'NRJ 12', 0, 35.45, 2017),
(612, 'tv', 'NRJ 12', 0, 35.31, 2018),
(613, 'tv', 'NRJ 12', 0, 31.21, 2019),
(614, 'tv', 'Paris Premiere', 0, 24.83, 2010),
(624, 'tv', 'Planete plus', 0, 17.71, 2010),
(625, 'tv', 'Planete plus', 0, 15.79, 2011),
(626, 'tv', 'Planete plus', 0, 16.06, 2012),
(627, 'tv', 'Planete plus', 0, 15.65, 2013),
(628, 'tv', 'Planete plus', 0, 17.28, 2014),
(629, 'tv', 'Planete plus', 0, 15.88, 2015),
(630, 'tv', 'Planete plus', 0, 16.88, 2016),
(631, 'tv', 'Planete plus', 0, 16.26, 2017),
(632, 'tv', 'Planete plus', 0, 19.09, 2018),
(633, 'tv', 'Planete plus', 0, 20.5, 2019),
(634, 'tv', 'TF1', 0, 32.37, 2010),
(635, 'tv', 'TF1', 0, 34.65, 2011),
(636, 'tv', 'TF1', 0, 35.93, 2012),
(637, 'tv', 'TF1', 0, 36.48, 2013),
(638, 'tv', 'TF1', 0, 36.73, 2014),
(639, 'tv', 'TF1', 0, 35.34, 2015),
(640, 'tv', 'TF1', 0, 37.39, 2016),
(641, 'tv', 'TF1', 0, 38.11, 2017),
(642, 'tv', 'TF1', 0, 38.2, 2018),
(643, 'tv', 'TF1', 0, 41.98, 2019),
(644, 'tv', 'TV Breizh', 0, 29.88, 2011),
(645, 'tv', 'TV Breizh', 0, 29.34, 2012),
(646, 'tv', 'TV Breizh', 0, 29.93, 2013),
(647, 'tv', 'TV Breizh', 0, 30.17, 2014),
(648, 'tv', 'TV Breizh', 0, 32.9, 2015),
(649, 'tv', 'TV Breizh', 0, 32.1, 2016),
(650, 'tv', 'TV Breizh', 0, 30.63, 2017),
(651, 'tv', 'TV Breizh', 0, 31.89, 2018),
(652, 'tv', 'TV Breizh', 0, 31.75, 2019),
(653, 'tv', 'TV5 Monde', 1, 28.02, 2010),
(654, 'tv', 'TV5 Monde', 1, 28.69, 2011),
(655, 'tv', 'TV5 Monde', 1, 28.57, 2012),
(656, 'tv', 'TV5 Monde', 1, 30.11, 2013),
(657, 'tv', 'TV5 Monde', 1, 29.5, 2014),
(658, 'tv', 'TV5 Monde', 1, 29.58, 2015),
(659, 'tv', 'TV5 Monde', 1, 31.21, 2016),
(660, 'tv', 'TV5 Monde', 1, 30.87, 2017),
(661, 'tv', 'TV5 Monde', 1, 35.08, 2018),
(662, 'tv', 'TV5 Monde', 1, 35.59, 2019),
(663, 'tv', 'Toute l\'Histoire', 0, 17.86, 2010),
(664, 'tv', 'Toute l\'Histoire', 0, 20.77, 2011),
(665, 'tv', 'Toute l\'Histoire', 0, 19.34, 2012),
(666, 'tv', 'Toute l\'Histoire', 0, 17.21, 2013),
(667, 'tv', 'Toute l\'Histoire', 0, 19.64, 2014),
(668, 'tv', 'Toute l\'Histoire', 0, 20.65, 2015),
(669, 'tv', 'Toute l\'Histoire', 0, 18.36, 2016),
(670, 'tv', 'Toute l\'Histoire', 0, 17.14, 2017),
(671, 'tv', 'Toute l\'Histoire', 0, 17.94, 2018),
(672, 'tv', 'Toute l\'Histoire', 0, 18.57, 2019),
(673, 'tv', 'Teva', 0, 44.83, 2011),
(674, 'tv', 'Teva', 0, 43.83, 2012),
(675, 'tv', 'Teva', 0, 45.76, 2013),
(676, 'tv', 'Teva', 0, 46.72, 2014),
(677, 'tv', 'Teva', 0, 51.21, 2015),
(678, 'tv', 'Teva', 0, 53.35, 2016),
(679, 'tv', 'Teva', 0, 50.65, 2017),
(680, 'tv', 'Teva', 0, 47.54, 2018),
(681, 'tv', 'Teva', 0, 49.5, 2019),
(682, 'tv', 'Voyage', 0, 23.64, 2010),
(683, 'tv', 'Voyage', 0, 25, 2011),
(684, 'tv', 'Voyage', 0, 24.32, 2012),
(685, 'tv', 'Voyage', 0, 26.81, 2013),
(686, 'tv', 'Voyage', 0, 24.42, 2014),
(687, 'tv', 'Voyage', 0, 24.07, 2015),
(688, 'tv', 'Voyage', 0, 21.86, 2016),
(689, 'tv', 'Voyage', 0, 23.53, 2017),
(690, 'tv', 'Voyage', 0, 26.08, 2018),
(691, 'tv', 'Voyage', 0, 24.91, 2019),
(692, 'tv', 'W9', 0, 30.84, 2010),
(693, 'tv', 'W9', 0, 32.86, 2011),
(694, 'tv', 'W9', 0, 32.19, 2012),
(695, 'tv', 'W9', 0, 34.93, 2013),
(696, 'tv', 'W9', 0, 36.4, 2014),
(697, 'tv', 'W9', 0, 36.93, 2015),
(698, 'tv', 'W9', 0, 37.07, 2016),
(699, 'tv', 'W9', 0, 36.08, 2017),
(700, 'tv', 'W9', 0, 35.12, 2018),
(701, 'tv', 'W9', 0, 35.75, 2019),
(702, 'tv', 'Paris Premiere', 0, 27.16, 2011);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `idPage` int(11) NOT NULL,
  `annee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUtilisateur` int(11) NOT NULL,
  `pseudo` varchar(5000) DEFAULT NULL,
  `mdp_u` varchar(5000) DEFAULT NULL,
  `mail_utilisateur` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `pseudo`, `mdp_u`, `mail_utilisateur`) VALUES
(1, 'Robin', 'a', 'rr@rr.fr'),
(2, 'R', 'r', 'r'),
(3, 'Romane27', 'op', 'opop'),
(4, 'Alphatrio', 'aqzsed', 'theodore.michelpicque@gmail.com'),
(5, 'r', 'r', 'r'),
(6, 'robin805', 'robin', 'robinbiagioni97@gmail.com'),
(7, 'a', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajoute_a`
--
ALTER TABLE `ajoute_a`
  ADD KEY `idCom` (`idCom`),
  ADD KEY `idPage` (`idPage`);

--
-- Indexes for table `amelioration`
--
ALTER TABLE `amelioration`
  ADD PRIMARY KEY (`idAmelioration`);

--
-- Indexes for table `a_commente`
--
ALTER TABLE `a_commente`
  ADD KEY `idUtil` (`idUtil`),
  ADD KEY `idCom` (`idCom`);

--
-- Indexes for table `a_propose_amelioration`
--
ALTER TABLE `a_propose_amelioration`
  ADD KEY `idUtil` (`idUtil`),
  ADD KEY `idAmelioration` (`idAmelioration`);

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`idCom`);

--
-- Indexes for table `elues`
--
ALTER TABLE `elues`
  ADD PRIMARY KEY (`idElues`);

--
-- Indexes for table `esalaire`
--
ALTER TABLE `esalaire`
  ADD PRIMARY KEY (`idEcart`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`idMed`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`idPage`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amelioration`
--
ALTER TABLE `amelioration`
  MODIFY `idAmelioration` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `idCom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `idMed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=703;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ajoute_a`
--
ALTER TABLE `ajoute_a`
  ADD CONSTRAINT `ajoute_a_ibfk_1` FOREIGN KEY (`idCom`) REFERENCES `commentaire` (`idCom`),
  ADD CONSTRAINT `ajoute_a_ibfk_2` FOREIGN KEY (`idPage`) REFERENCES `page` (`idPage`);

--
-- Constraints for table `a_commente`
--
ALTER TABLE `a_commente`
  ADD CONSTRAINT `a_commente_ibfk_1` FOREIGN KEY (`idUtil`) REFERENCES `utilisateur` (`idUtilisateur`),
  ADD CONSTRAINT `a_commente_ibfk_2` FOREIGN KEY (`idCom`) REFERENCES `commentaire` (`idCom`);

--
-- Constraints for table `a_propose_amelioration`
--
ALTER TABLE `a_propose_amelioration`
  ADD CONSTRAINT `a_propose_amelioration_ibfk_1` FOREIGN KEY (`idUtil`) REFERENCES `utilisateur` (`idUtilisateur`),
  ADD CONSTRAINT `a_propose_amelioration_ibfk_2` FOREIGN KEY (`idAmelioration`) REFERENCES `amelioration` (`idAmelioration`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
