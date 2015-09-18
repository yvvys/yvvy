-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 18 日 17:41
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='商品分类目录表' AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `catalogue`
--

INSERT INTO `catalogue` (`id`, `name`, `parent_id`, `show`, `status`, `level`, `tree`) VALUES
(4, '潮酷家具', 0, 1, 1, 1, '潮酷家具'),
(5, '桌面摆饰', 0, 1, 1, 1, '桌面摆饰'),
(6, '个性抱枕', 0, 1, 1, 1, '个性抱枕'),
(7, '装饰植物', 0, 1, 1, 1, '装饰植物'),
(8, '艺术玻璃', 5, 1, 1, 2, '桌面摆饰>艺术玻璃'),
(9, '奢华陶瓷', 5, 1, 1, 2, '桌面摆饰>奢华陶瓷'),
(10, '手工皮革', 5, 1, 1, 2, '桌面摆饰>手工皮革'),
(11, '动物图腾', 5, 1, 1, 2, '桌面摆饰>动物图腾'),
(12, '装饰画', 7, 1, 1, 2, '装饰植物>装饰画'),
(13, '植物', 7, 1, 1, 2, '装饰植物>植物'),
(14, '生活配饰', 7, 1, 1, 2, '装饰植物>生活配饰');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
