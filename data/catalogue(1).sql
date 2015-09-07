-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 07 日 12:09
-- 服务器版本: 5.5.38
-- PHP 版本: 5.4.33

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
-- 表的结构 `catalogue`
--

CREATE TABLE IF NOT EXISTS `catalogue` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `show` int(4) NOT NULL,
  `status` int(4) NOT NULL DEFAULT '1',
  `level` int(4) NOT NULL,
  `tree` varchar(255) NOT NULL,
  `describe` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='商品分类目录表' AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `catalogue`
--

INSERT INTO `catalogue` (`id`, `name`, `parent_id`, `show`, `status`, `level`, `tree`, `describe`) VALUES
(26, '餐厅', 0, 0, 1, 1, '餐厅', '餐厅'),
(27, '餐桌', 26, 0, 1, 2, '餐厅>餐桌', '餐桌'),
(28, '客厅', 0, 0, 1, 1, '客厅', '客厅'),
(29, '床头柜', 28, 0, 1, 2, '客厅>床头柜', '客厅--床头柜'),
(30, '卧室', 0, 0, 1, 1, '卧室', '卧室');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
