-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2017 at 01:00 AM
-- Server version: 5.5.55-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `abstrato`
--

-- --------------------------------------------------------

--
-- Table structure for table `membros`
--

CREATE TABLE IF NOT EXISTS `membros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(12) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `permissao` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `membros`
--

INSERT INTO `membros` (`id`, `login`, `senha`, `permissao`) VALUES
(1, 'root', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(16) NOT NULL,
  `link` varchar(255) NOT NULL,
  `hover` varchar(11) NOT NULL,
  `class` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nome`, `link`, `hover`, `class`) VALUES
(1, 'Menu1', '', '', ''),
(2, 'Menu2', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `opcoes`
--

CREATE TABLE IF NOT EXISTS `opcoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opcao` varchar(16) NOT NULL,
  `link` varchar(255) NOT NULL,
  `hover` varchar(11) NOT NULL,
  `class` varchar(16) NOT NULL,
  `menu` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `opcoes`
--

INSERT INTO `opcoes` (`id`, `opcao`, `link`, `hover`, `class`, `menu`) VALUES
(0, 'yahoo', 'www.yahoo.com.br', '', '', '1'),
(1, 'google', 'www.google.com', '', '', '1'),
(3, 'microsoft', '', '', '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tabela`
--

CREATE TABLE IF NOT EXISTS `tabela` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `varchar1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `varchar2` varchar(255) CHARACTER SET utf8 NOT NULL,
  `varchar3` varchar(255) CHARACTER SET utf8 NOT NULL,
  `varchar4` varchar(255) CHARACTER SET utf8 NOT NULL,
  `varchar5` varchar(255) CHARACTER SET utf8 NOT NULL,
  `num1` int(11) NOT NULL,
  `num2` int(11) NOT NULL,
  `num3` int(11) NOT NULL,
  `num4` int(11) NOT NULL,
  `num5` int(11) NOT NULL,
  `data1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data2` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data3` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data4` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `data5` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `bit1` int(1) NOT NULL,
  `bit2` int(1) NOT NULL,
  `bit3` int(1) NOT NULL,
  `bit4` int(1) NOT NULL,
  `bit5` int(1) NOT NULL,
  `texto1` longtext CHARACTER SET utf8 NOT NULL,
  `texto2` longtext CHARACTER SET utf8 NOT NULL,
  `texto3` longtext CHARACTER SET utf8 NOT NULL,
  `texto4` longtext CHARACTER SET utf8 NOT NULL,
  `texto5` longtext CHARACTER SET utf8 NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tabela` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tabela`
--

INSERT INTO `tabela` (`id`, `varchar1`, `varchar2`, `varchar3`, `varchar4`, `varchar5`, `num1`, `num2`, `num3`, `num4`, `num5`, `data1`, `data2`, `data3`, `data4`, `data5`, `bit1`, `bit2`, `bit3`, `bit4`, `bit5`, `texto1`, `texto2`, `texto3`, `texto4`, `texto5`, `alias`, `tabela`) VALUES
(1, 'JoÃ£o Carlos', 'joca', 'abc123', '', '', 0, 0, 0, 0, 0, '2017-03-24 23:51:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', '', ''),
(5, 'Pedro Henrique', 'maria@email.com', 'novasenha', '', '', 0, 0, 0, 0, 0, '2017-03-25 02:19:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', '', ''),
(7, 'Carlos Manuel', 'carlos@hotmail.com', 'abc1234', '', '', 0, 0, 0, 0, 0, '2017-03-25 02:26:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', '', ''),
(8, 'Carlos Manuel2', 'carlos@hotmail.com', 'abc1234', '', '', 0, 0, 0, 0, 0, '2017-03-25 02:27:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', '', ''),
(9, 'Novo Manuel', 'carlos@hotmail.com', 'abc123', '', '', 0, 0, 0, 0, 0, '2017-03-25 03:02:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', '', ''),
(10, 'hackeado', 'carlos@hotmail.com', 'abc123', '', '', 0, 0, 0, 0, 0, '2017-03-25 03:08:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', '', '', '', 'login', 'cadastrados');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
