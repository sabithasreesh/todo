-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 03:35 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE IF NOT EXISTS `todo` (
  `id_todo` int(11) NOT NULL AUTO_INCREMENT,
  `betreff` varchar(255) NOT NULL,
  `beschreibung` text NOT NULL,
  `erstellung_datum` date NOT NULL,
  PRIMARY KEY (`id_todo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id_todo`, `betreff`, `beschreibung`, `erstellung_datum`) VALUES
(38, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Aliquam eu eros metus. Aliquam blandit vehicula egestas. Donec ultrices interdum sapien id tempus. Sed at mauris a nunc imperdiet dictum. Integer suscipit ultricies luctus. Etiam facilisis porta justo, vitae tempus sem semper nec. Ut at magna velit. Maecenas vel nibh bibendum augue', '2016-11-02'),
(39, 'Duis fermentum mi et nisl tempor', 'Maecenas rhoncus, nisl quis consequat facilisis, tortor lectus vestibulum arcu, non feugiat nibh orci ac lectus. Aliquam', '2016-11-02');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
