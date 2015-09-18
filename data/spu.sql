-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 18 日 17:43
-- 服务器版本: 5.5.40
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `yvvyshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `spu`
--

CREATE TABLE IF NOT EXISTS `spu` (
  `spu_id` varchar(25) NOT NULL,
  `spu_name` varchar(50) NOT NULL,
  `is_sale` int(4) NOT NULL,
  `series_id` int(10) NOT NULL,
  `series_name` varchar(50) NOT NULL,
  `spu_image` varchar(255) NOT NULL COMMENT 'SPU头图',
  `add_time` varchar(255) NOT NULL,
  `classfy_id` varchar(255) NOT NULL,
  `classfy_name` varchar(255) NOT NULL,
  PRIMARY KEY (`spu_id`),
  UNIQUE KEY `spu_id` (`spu_id`),
  KEY `spu_id_2` (`spu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='SPU表';

--
-- 转存表中的数据 `spu`
--

INSERT INTO `spu` (`spu_id`, `spu_name`, `is_sale`, `series_id`, `series_name`, `spu_image`, `add_time`, `classfy_id`, `classfy_name`) VALUES
('E121211', 'iPhone9', 1, 0, '', '', '', '5', '桌面摆饰'),
('E121219', 'iPhone12', 1, 7, '青少年3', '', '', '14', '装饰植物>生活配饰');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
