-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014 m. Rgs 13 d. 14:51
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `table`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `table`
--

CREATE TABLE IF NOT EXISTS `table` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci AUTO_INCREMENT=7 ;

--
-- Sukurta duomenų kopija lentelei `table`
--

INSERT INTO `table` (`id`, `name`, `surname`) VALUES
(1, 'Jonas', 'Jonaitis'),
(2, 'Petras', 'Petraitis'),
(3, 'Justinas', 'Zableckis'),
(4, 'Jonas', 'Meška');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
