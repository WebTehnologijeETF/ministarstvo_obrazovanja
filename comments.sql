-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2015 at 08:46 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `comments`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nid` int(11) NOT NULL,
  `naslov` varchar(70) COLLATE ucs2_slovenian_ci NOT NULL,
  `autor` varchar(50) COLLATE ucs2_slovenian_ci NOT NULL,
  `komentar` text COLLATE ucs2_slovenian_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovenian_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `nid`, `naslov`, `autor`, `komentar`, `date`) VALUES
(1, 1, 'fsdf', 'fsdfds', 'sdfsdf', '2015-05-29 00:00:00'),
(2, 6, 'sdf', 'sdf', 'sdf', '2015-05-28 04:18:41'),
(3, 6, 'fsdf', 'sdf', 'sdf', '2015-05-28 04:19:49'),
(4, 6, 'ss', 'sss', 'aaaaa', '2015-05-28 04:19:58'),
(5, 6, 'komentar 4', 'sdas', 'bla bla', '2015-05-28 12:43:16'),
(6, 7, 'dasdas', 'asdas', 'sdasd', '2015-05-28 20:29:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
