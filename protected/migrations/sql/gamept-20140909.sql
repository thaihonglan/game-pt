-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2014 at 09:18 PM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gamept`
--

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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned DEFAULT NULL,
  `list_type_id` mediumint(8) unsigned DEFAULT NULL,
  `sequence` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_id_list_type_id` (`product_id`,`list_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `os`
--

INSERT INTO `os` (`id`, `name`, `avatar`, `disable`) VALUES
(1, 'Flash', NULL, 0),
(2, 'iOS', NULL, 0),
(3, 'Android', NULL, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `product_type_id`, `video`, `avatar`, `author`, `download`, `rating`, `rate_count`, `from_source`, `bundle_id`, `package_name`, `tag`, `create_date`, `lastup_date`, `disable`) VALUES
(1, 'Kingdom Rush', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>description test</p>\r\n</body>\r\n</html>', 1, '', 'kingdom_rush.png', 'THL', 0, 0, 0, '', '', '', '', '0000-00-00 00:00:00', '2014-09-09 23:31:03', 0),
(2, 'Halloween Candy', '', 8, '', 'halloween_candy.png', '', 0, 0, 0, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'Siêu Nhân Hành Động', NULL, 2, NULL, '3/SieuNhanHanhDong.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2014-09-10 21:01:34', '0000-00-00 00:00:00', 0),
(4, 'Tay Kiếm Samurai', NULL, 2, NULL, 'tay_kiem_samurai.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2014-09-10 21:01:34', '0000-00-00 00:00:00', 0),
(5, 'Super Mario', NULL, 2, NULL, '5/Mario.gif', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2014-09-10 21:01:34', '0000-00-00 00:00:00', 0),
(6, 'Kim Cương 6', NULL, 7, NULL, '6/kim_cuong_6.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2014-09-10 21:01:34', '0000-00-00 00:00:00', 0),
(7, 'Kim Cương 3', NULL, 7, NULL, '7/kim_cuong_3.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2014-09-10 21:01:34', '0000-00-00 00:00:00', 0),
(8, 'Doremon - Cuộc Chiến Xe Tăng', NULL, 8, NULL, '8/DoremonCuocChienXeTang.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2014-09-10 21:04:11', '0000-00-00 00:00:00', 0),
(9, 'Xe Tăng Đại Chiến 1', NULL, 7, NULL, '9/xe-tang-dai-chien-1.png', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2014-09-10 21:04:11', '0000-00-00 00:00:00', 0),
(10, 'Doremon - Nhà Thám Hiểm', NULL, 1, NULL, '10/Nha_tham_hiem_doremon.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2014-09-10 21:04:11', '0000-00-00 00:00:00', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `name`, `description`, `avatar`, `sequence`, `disable`) VALUES
(1, 'Nhập vai', 'Role Play Game (RPG)', NULL, 1, 0),
(2, 'Hành động', 'Action', NULL, 2, 0),
(3, 'Chiến thuật', 'Strategy', NULL, 3, 0),
(4, 'Mô phỏng', NULL, NULL, 4, 0),
(5, 'Thể thao', 'Sport', NULL, 5, 0),
(6, 'Tốc độ', 'Racing', NULL, 6, 0),
(7, 'Trí tuệ', NULL, NULL, 7, 0),
(8, 'Giải trí', 'Casual', NULL, 8, 0),
(9, 'Bạn gái', 'Game dành cho phái nữ', NULL, 9, 0),
(10, 'Đối kháng', 'Fighter', NULL, 10, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `screenshot`
--

INSERT INTO `screenshot` (`id`, `product_id`, `os_id`, `path`, `sequence`, `disable`) VALUES
(1, 1, 1, '1/scr_1.jpg', 1, 0),
(2, 1, 1, '1/scr_2.jpg', 2, 0),
(3, 1, 1, '1/scr_3.jpg', 1, 0),
(4, 2, 1, '2/scr_4.jpg', 1, 0),
(5, 2, 1, '2/scr_5.jpg', 2, 0),
(6, 2, 1, '2/scr_6.jpg', 3, 0),
(7, 3, 1, '3/scr_7.png', 1, 0),
(8, 3, 1, '3/scr_8.jpg', 2, 0),
(9, 4, 1, '4/scr_9.jpg', 1, 0),
(10, 4, 1, '4/scr_10.jpg', 2, 0),
(11, 5, 1, '5/scr_11.jpg', 1, 0),
(12, 5, 1, '5/scr_12.jpg', 2, 0),
(13, 6, 1, '6/scr_13.jpg', 1, 0),
(14, 6, 1, '6/scr_14.jpg', 2, 0),
(15, 7, 1, '7/scr_15.jpg', 1, 0),
(16, 7, 1, '7/scr_16.jpg', 2, 0),
(17, 8, 1, '8/scr_17.jpg', 1, 0),
(18, 8, 1, '8/scr_18.jpg', 2, 0),
(19, 8, 1, '8/scr_19.jpg', 3, 0),
(20, 9, 1, '9/scr_20.jpg', 1, 0),
(21, 9, 1, '9/scr_21.jpg', 2, 0),
(22, 10, 1, '10/scr_22.jpg', 1, 0),
(23, 10, 1, '10/scr_23.jpg', 2, 0),
(24, 10, 1, '10/scr_24.jpg', 3, 0),
(25, 10, 1, '10/scr_25.jpg', 4, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `source_file`
--

INSERT INTO `source_file` (`id`, `product_id`, `os_id`, `version`, `path`, `data_folder`, `data_path`, `download`, `from_source`, `create_date`, `lastup_date`, `disable`) VALUES
(1, 1, 1, '1.0', '1/kingdom_rush.swf', NULL, NULL, 0, NULL, '2014-09-10 20:00:44', '0000-00-00 00:00:00', 0),
(2, 2, 1, '1.0', '2/Lua_Keo_Halloween.swf', NULL, NULL, 0, NULL, '2014-09-10 20:00:44', '0000-00-00 00:00:00', 0);

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
