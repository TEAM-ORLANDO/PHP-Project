-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2015 at 06:13 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `useracount`
--

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE IF NOT EXISTS `Products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `bg_name` varchar(100) CHARACTER SET cp1251 COLLATE cp1251_bulgarian_ci NOT NULL,
  `description` text CHARACTER SET cp1251 COLLATE cp1251_bulgarian_ci NOT NULL,
  `price` double NOT NULL,
  UNIQUE KEY `id` (`id`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`id`, `name`, `bg_name`, `description`, `price`) VALUES
(1111, 'microcylinders', 'Микроцилиндри', 'Еднодействащ (предна пружина)\r\nДиаметър на буталото (вътрешен диам. на тръбата): от Ф6 до Ф16\r\nЗахранване: Резбови отвор в задния край\r\nЗакрепване: Резба по целия външен диаметър\r\nБуталлно прътче: с и без резба', 100),
(1112, 'minicylinders', 'Мини цилиндри', 'Диаметър на буталото (вътрешен диаметър на тръбата): от 8 до 25 мм\r\nКорпус: неръждаема стомата (капсуловани) и алуминий (разглобяеми)\r\nЗакрепване: Резби и от двата края + отвор в задния край\r\nС демпфер в двата края на хода на буталния прът (AISI 303) или без демпфер\r\nС магнит на буталото или без магнит', 120),
(1113, 'standartcylinders', 'Стандартни цилиндри', 'Диаметър на буталото: от Ф32 до Ф125\r\nДемпфер в двата края на хода\r\nС магнит (или без магнит) на буталото (AISI 303)\r\nЦилиндрична или профилна тръба\r\nВъзможност за закрепване на датчик за хода', 150);

-- --------------------------------------------------------

--
-- Table structure for table `userprofiles`
--

CREATE TABLE IF NOT EXISTS `userprofiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(64) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `picture` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `userprofiles`
--

INSERT INTO `userprofiles` (`id`, `fname`, `lname`, `username`, `password`, `email`, `picture`) VALUES
(1, 'John', 'Doe', 'asd', '123', 'john@example.com', '0'),
(2, 'Plamena', 'Miteva', 'plamenamiteva', '25f9e794323b453885f5181f1b624d0b', 'pl@abv.bg', '0'),
(3, 'Violeta', 'Miteva', 'villy', '85eb12be96d6ed8bc440ed631a4fe324', '', '0'),
(4, 'Anton', 'Antonov', 'anton', '723b0d1feb6abde5933958be46e7b8c7', '', '0'),
(33, 'Plamena', 'Miteva', 'njss', 'e0cb756eac7117f94b7b95f97f437357', '', '0'),
(34, 'Milena', 'Genova', 'milena', 'ee70f5c5f523f6a8ba54f37954e47115', '', '0'),
(36, 'ivan', 'Ivanov', 'vankata', '82d7b8e3e0b5f8d0e5e6e585c9cfa018', '', '0'),
(37, 'Anna', 'Miteva', 'anna123', '78c82d1a45f0a4ccf4ca36de027e3a4c', '', ''),
(38, 'Evgenia', 'Miteva', 'werbung', '42913e3e8e2d72bf88f5ff278c7542ec', '', ''),
(39, 'lilly', 'lilieva', 'lilly78', '987ae004173717d994dd377af440f732', '', 'index.jpeg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
