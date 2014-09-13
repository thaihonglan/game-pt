-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2014 at 08:22 PM
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

--
-- Truncate table before insert `banner`
--

TRUNCATE TABLE `banner`;
--
-- Truncate table before insert `download_1409`
--

TRUNCATE TABLE `download_1409`;
--
-- Truncate table before insert `list`
--

TRUNCATE TABLE `list`;
--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `product_id`, `list_type_id`, `sequence`) VALUES
(1, 1, 1, 1),
(2, 3, 1, 2),
(3, 5, 1, 3);

--
-- Truncate table before insert `list_type`
--

TRUNCATE TABLE `list_type`;
--
-- Truncate table before insert `os`
--

TRUNCATE TABLE `os`;
--
-- Dumping data for table `os`
--

INSERT INTO `os` (`id`, `name`, `avatar`, `disable`) VALUES
(1, 'Flash', NULL, 0),
(2, 'iOS', NULL, 0),
(3, 'Android', NULL, 0);

--
-- Truncate table before insert `product`
--

TRUNCATE TABLE `product`;
--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `product_type_id`, `video`, `avatar`, `author`, `source_file_id`, `download`, `rating`, `rate_count`, `from_source`, `bundle_id`, `package_name`, `tag`, `create_date`, `lastup_date`, `disable`) VALUES
(1, 'Kingdom Rush', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>description test</p>\r\n</body>\r\n</html>', 2, '', '1/kingdom_rush.png', 'THL', 1, 0, 0, 0, '', '', '', '', '0000-00-00 00:00:00', '2014-09-13 01:18:59', 0),
(2, 'Halloween Candy', '', 8, '', '2/halloween_candy.png', '', 2, 0, 0, 0, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'Siêu Nhân Hành Động', NULL, 2, NULL, '3/SieuNhanHanhDong.jpg', NULL, 3, 0, 0, 0, NULL, NULL, NULL, NULL, '2014-09-10 21:01:34', '0000-00-00 00:00:00', 0),
(4, 'Tay Kiếm Samurai', NULL, 2, NULL, '4/tay_kiem_samurai.jpg', NULL, 4, 0, 0, 0, NULL, NULL, NULL, NULL, '2014-09-10 21:01:34', '0000-00-00 00:00:00', 0),
(5, 'Super Mario', NULL, 2, NULL, '5/Mario.gif', NULL, 5, 0, 0, 0, NULL, NULL, NULL, NULL, '2014-09-10 21:01:34', '0000-00-00 00:00:00', 0),
(6, 'Kim Cương 6', NULL, 7, NULL, '6/kim_cuong_6.jpg', NULL, 6, 0, 0, 0, NULL, NULL, NULL, NULL, '2014-09-10 21:01:34', '0000-00-00 00:00:00', 0),
(7, 'Kim Cương 3', NULL, 7, NULL, '7/kim_cuong_3.jpg', NULL, 7, 0, 0, 0, NULL, NULL, NULL, NULL, '2014-09-10 21:01:34', '0000-00-00 00:00:00', 0),
(8, 'Doremon - Cuộc Chiến Xe Tăng', NULL, 8, NULL, '8/DoremonCuocChienXeTang.jpg', NULL, 8, 0, 0, 0, NULL, NULL, NULL, NULL, '2014-09-10 21:04:11', '0000-00-00 00:00:00', 0),
(9, 'Xe Tăng Đại Chiến 1', NULL, 7, NULL, '9/xe-tang-dai-chien-1.png', NULL, 9, 0, 0, 0, NULL, NULL, NULL, NULL, '2014-09-10 21:04:11', '0000-00-00 00:00:00', 0),
(10, 'Doremon - Nhà Thám Hiểm', NULL, 1, NULL, '10/Nha_tham_hiem_doremon.jpg', NULL, 10, 0, 0, 0, NULL, NULL, NULL, NULL, '2014-09-10 21:04:11', '0000-00-00 00:00:00', 0);

--
-- Truncate table before insert `product_type`
--

TRUNCATE TABLE `product_type`;
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

--
-- Truncate table before insert `screenshot`
--

TRUNCATE TABLE `screenshot`;
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

--
-- Truncate table before insert `source_file`
--

TRUNCATE TABLE `source_file`;
--
-- Dumping data for table `source_file`
--

INSERT INTO `source_file` (`id`, `product_id`, `os_id`, `version`, `path`, `data_folder`, `data_path`, `download`, `from_source`, `create_date`, `lastup_date`, `disable`) VALUES
(1, 1, 1, '1.0', '1/kingdom_rush.swf', '', '', 0, '', '2014-09-10 20:00:44', '2014-09-13 01:23:03', 0),
(2, 2, 1, '1.0', '2/Lua_Keo_Halloween.swf', NULL, NULL, 0, NULL, '2014-09-10 20:00:44', '0000-00-00 00:00:00', 0),
(3, 3, 1, '1.0', '3/SieuNhanHanhDong.swf', '', '', 0, '', '2014-09-12 04:44:37', '0000-00-00 00:00:00', 0),
(4, 4, 1, '1.0', '4/tay_kiem_samurai.swf', '', '', 0, '', '2014-09-12 04:46:58', '0000-00-00 00:00:00', 0),
(5, 5, 1, '1.0', '5/Mario.swf', '', '', 0, '', '2014-09-12 04:47:29', '0000-00-00 00:00:00', 0),
(6, 6, 1, '1.0', '6/kim_cuong_6.swf', '', '', 0, '', '2014-09-12 04:48:03', '0000-00-00 00:00:00', 0),
(7, 7, 1, '1.0', '7/kim_cuong_3.swf', '', '', 0, '', '2014-09-12 04:48:33', '0000-00-00 00:00:00', 0),
(8, 8, 1, '1.0', '8/Doremon - Chien dau xe tang.swf', '', '', 0, '', '2014-09-12 04:48:54', '0000-00-00 00:00:00', 0),
(9, 9, 1, '1.0', '9/Xe tang dai chien.swf', '', '', 0, '', '2014-09-12 04:49:20', '0000-00-00 00:00:00', 0),
(10, 10, 1, '1.1', '10/Nha_tham_hiem_DOREMON.swf', '', '', 0, '', '2014-09-12 04:49:43', '2014-09-12 04:55:28', 0);

--
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
