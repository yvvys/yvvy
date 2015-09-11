-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 11 日 16:02
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
-- 表的结构 `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `shop_id` varchar(25) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `region` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `longitude` varchar(25) NOT NULL,
  `latitude` varchar(25) NOT NULL,
  `image` varchar(255) NOT NULL,
  `baidu` varchar(255) NOT NULL,
  PRIMARY KEY (`shop_id`),
  UNIQUE KEY `shop_id` (`shop_id`),
  KEY `shop_id_2` (`shop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='线下门店表';

--
-- 转存表中的数据 `shop`
--

INSERT INTO `shop` (`shop_id`, `shop_name`, `region`, `city`, `address`, `phone`, `longitude`, `latitude`, `image`, `baidu`) VALUES
('122131', '测试', '北京', '北京市', '北京市丰台区', '199827323', '223232.2', '32324232', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
