-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 02, 2014 at 04:56 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gamept`
--
CREATE DATABASE IF NOT EXISTS `gamept` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gamept`;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `hotlink` varchar(128) DEFAULT NULL,
  `position` smallint(5) unsigned NOT NULL,
  `disable` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `download_1409`
--

CREATE TABLE IF NOT EXISTS `download_1409` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `source_file_id` bigint(20) unsigned NOT NULL,
  `download` int(10) unsigned NOT NULL DEFAULT '0',
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `product_id` int(10) unsigned DEFAULT NULL,
  `list_type_id` mediumint(8) unsigned DEFAULT NULL,
  `sequence` int(10) unsigned DEFAULT NULL,
  UNIQUE KEY `product_id_list_type_id` (`product_id`,`list_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `list_type`
--

CREATE TABLE IF NOT EXISTS `list_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `key` varchar(32) NOT NULL,
  `disable` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `os`
--

CREATE TABLE IF NOT EXISTS `os` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `avatar` varchar(128) DEFAULT NULL,
  `disable` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `description` text,
  `product_type_id` mediumint(8) unsigned NOT NULL,
  `video` text,
  `avatar` varchar(128) DEFAULT NULL,
  `author` varchar(128) DEFAULT NULL,
  `download` int(10) unsigned NOT NULL DEFAULT '0',
  `rating` float unsigned NOT NULL DEFAULT '0',
  `rate_count` int(10) unsigned NOT NULL DEFAULT '0',
  `from_source` varchar(128) DEFAULT NULL,
  `bundle_id` varchar(255) DEFAULT NULL,
  `package_name` varchar(128) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `create_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `lastup_date` datetime DEFAULT '0000-00-00 00:00:00',
  `disable` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE IF NOT EXISTS `product_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `description` text,
  `avatar` varchar(128) DEFAULT NULL,
  `sequence` int(10) unsigned NOT NULL DEFAULT '0',
  `disable` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `screenshot`
--

CREATE TABLE IF NOT EXISTS `screenshot` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `os_id` mediumint(8) unsigned NOT NULL,
  `path` varchar(128) DEFAULT NULL,
  `sequence` int(10) unsigned NOT NULL DEFAULT '0',
  `disable` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `source_file`
--

CREATE TABLE IF NOT EXISTS `source_file` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `os_id` mediumint(8) unsigned NOT NULL,
  `version` varchar(32) DEFAULT NULL,
  `path` varchar(128) DEFAULT NULL,
  `data_folder` varchar(16) DEFAULT NULL,
  `data_path` varchar(128) DEFAULT NULL,
  `download` int(10) unsigned DEFAULT '0',
  `from_source` varchar(255) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastup_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `disable` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `facebook_login_id` varchar(128) DEFAULT NULL,
  `gmail_login_id` varchar(128) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `avatar` varchar(128) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `working` varchar(255) DEFAULT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `disable` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
