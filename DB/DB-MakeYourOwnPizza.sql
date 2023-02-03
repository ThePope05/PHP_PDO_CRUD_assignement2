-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 03 feb 2023 om 19:53
-- Serverversie: 8.0.30
-- PHP-versie: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makeyourown`
--
CREATE DATABASE IF NOT EXISTS `makeyourown` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `makeyourown`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pizzas`
--

DROP TABLE IF EXISTS `pizzas`;
CREATE TABLE IF NOT EXISTS `pizzas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `size` int NOT NULL,
  `sauce` varchar(20) NOT NULL,
  `topping` varchar(15) NOT NULL,
  `spices` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `pizzas`
--

INSERT INTO `pizzas` (`id`, `size`, `sauce`, `topping`, `spices`) VALUES
(3, 35, 'extraTomatoSauce', 'meat', 'parsley, chiliFlakes, '),
(5, 30, 'cremeFraice', 'meat', 'oregano blackPeper '),
(6, 35, 'tomatoSauce', 'vegetables', 'parsley oregano chiliFlakes blackPeper '),
(7, 40, 'tomatoSauce', 'meat', 'parsley chiliFlakes blackPeper '),
(8, 25, 'extraTomatoSauce', 'vegan', 'oregano chiliFlakes '),
(9, 30, 'spicyTomatoSauce', 'meat', 'chiliFlakes blackPeper ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
