-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2015 at 10:01 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin_article`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_article`
--

CREATE TABLE IF NOT EXISTS `new_article` (
`id` int(11) NOT NULL,
  `title` varchar(80) CHARACTER SET cp1251 COLLATE cp1251_bulgarian_ci NOT NULL,
  `text` varchar(260) CHARACTER SET cp1251 COLLATE cp1251_bulgarian_ci NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `new_article`
--

INSERT INTO `new_article` (`id`, `title`, `text`, `category`) VALUES
(12, 'Това е моята първа статия', 'Това е моята първа статия!!!!', 'Други'),
(13, 'Това е моята втора статия', 'Това е моята втора статия!!!!', 'Други'),
(16, 'Трета статия', 'Трета статия...', 'Полупроводници');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_article`
--
ALTER TABLE `new_article`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_article`
--
ALTER TABLE `new_article`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
