-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Час створення: Бер 05 2016 р., 19:16
-- Версія сервера: 5.1.46
-- Версія PHP: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `demo`
--

-- --------------------------------------------------------

--
-- Структура таблиці `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `pid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(70) CHARACTER SET latin1 DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `idchild` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`pid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=19 ;

--
-- Дамп даних таблиці `companies`
--

INSERT INTO `companies` (`pid`, `name`, `price`, `idchild`) VALUES
(1, 'Company1', 520, 0),
(2, 'Company2', 420, 1),
(3, 'Company3', 520, 1),
(4, 'Company4', 160, 1),
(5, 'Company5', 202, 1),
(6, 'Company6', 220, 1),
(7, 'Company7', 320, 4),
(8, 'Company8', 310, 4),
(9, 'Company9', 120, 4),
(10, 'Company10', 215, 7),
(11, 'Company11', 180, 7),
(12, 'Company12', 219, 7),
(13, 'Company13', 532, 7);
