-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2015 at 02:42 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `novosti`
--

-- --------------------------------------------------------

--
-- Table structure for table `vijest`
--

CREATE TABLE IF NOT EXISTS `vijest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(200) COLLATE utf32_slovenian_ci NOT NULL,
  `tekst` text COLLATE utf32_slovenian_ci NOT NULL,
  `autor` varchar(25) COLLATE utf32_slovenian_ci NOT NULL,
  `vrijeme` timestamp NOT NULL,
  `slika` varchar(200) COLLATE utf32_slovenian_ci NOT NULL,
  `detaljnije` text COLLATE utf32_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_slovenian_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vijest`
--

INSERT INTO `vijest` (`id`, `naslov`, `tekst`, `autor`, `vrijeme`, `slika`, `detaljnije`) VALUES
(1, 'Vijest 1', 'Asmir Begović, bh. reprezentativac iz redova Stoke Cityja, najvjerovatnije će promijeniti sredinu u nadolazećem prijelaznom roku.\r\nAko je vjerovati pisanju Daily Stara, favorit za dovođenje Asmira Begovića je Manchester United i navodno je iskusni golman od strane kluba dobio zeleno svjetlo da započne pregovore sa timom s Old Trafforda. ', 'Denis Džafo', '2015-05-27 00:02:45', '', ''),
(2, 'Vijest 2', 'Sada ću napisati neki osnovni tekst.\\r\\nOvaj osnovni tekst se nalazi u više redova.\\r\\nLorem ipsum dolor sit amet i tako dalje.', 'Denis Džafo', '2015-05-27 00:06:24', 'https://zamger.etf.unsa.ba/images/16x16/zad_ok.png', 'Ovdje sada slijedi detaljniji tekst novosti. \\r\\nLorem ipsum dolor sit amet i tako dalje mrsko mi je da kopiram.\\r\\nLorem ipsum dolor sit amet i tako dalje mrsko mi je da kopiram.'),
(3, 'Harden vodio Houston do prve pobjede u finalu Zapada', 'Fenomenalni James Harden je sa 45 poena predvodio svoj Houston do prve pobjede u finalnoj seriji Zapada. ', 'Denis Džafo', '2015-05-27 00:09:00', 'http://i.imgur.com/pp0LX0d.jpg', 'Fenomenalni James Harden je sa 45 poena predvodio svoj Houston do prve pobjede u finalnoj seriji Zapada. Tim iz Teksasa je slavio sa 128:115 i tako smanjio rezultat u seriji na 3:1.\\r\\n \r\nSve se dalo naslutiti već nakon prvih dvanaest minuta, nakon kojih je domaći tim vodio sa 45:22. \\r\\nGosti su se u drugoj dionici u potpunosti vratili u igru, ali je ipak visoka prednost Houstona stečena u prvoj četvrtini bila nedostižna do kraja utakmice.\\r\\n\r\n\r\nVeć pomenuti Harden je za 40 minuta na terenu ubacio 45 poena uz šut iz igre 13 od 22 (7 od 11 za 3 poena), a svemu tome je dodao devet skokova i pet asistencija.\\r\\n\r\n\r\nSa druge strane, najraspoloženiji je bio dvojac Thompson - Curry. Prvi je ubacio 24, a drugi 23 poena.\\r\\n\r\n\\r\\n\r\nNBA:\r\n\\r\\n\r\nHouston Rockets - Golden State Warriors 128:115');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
