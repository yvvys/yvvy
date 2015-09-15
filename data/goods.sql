-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 15 日 09:35
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
-- 表的结构 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `sku_id` varchar(25) NOT NULL,
  `sku_name` varchar(255) NOT NULL,
  `spu_id` varchar(25) NOT NULL,
  `price` int(10) NOT NULL,
  `color` varchar(50) NOT NULL,
  `sku_num` int(10) NOT NULL,
  `material` varchar(50) NOT NULL COMMENT '材质',
  `specs` varchar(50) NOT NULL COMMENT '规格',
  `image` varchar(255) NOT NULL COMMENT '商品图片',
  `is_top` int(2) NOT NULL COMMENT '是否头图',
  PRIMARY KEY (`sku_id`),
  UNIQUE KEY `goods_id` (`sku_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品详细信息表';

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`sku_id`, `sku_name`, `spu_id`, `price`, `color`, `sku_num`, `material`, `specs`, `image`, `is_top`) VALUES
('E12121', '21', '12222', 12121, '1212', 12, '121', '1212', '/uploads/images/2015-09/6ae2279980619efaeafef3692528f672.jpg', 0),
('E12123', '21', '12222', 12121, '1212', 12, '121', '1212', '/uploads/images/2015-09/6ae2279980619efaeafef3692528f672.jpg', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
