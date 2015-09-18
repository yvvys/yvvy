-- phpMyAdmin SQL Dump
-- version 3.4.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 18 日 14:31
-- 服务器版本: 5.5.17
-- PHP 版本: 5.3.8

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
  `image` varchar(600) NOT NULL COMMENT '商品图片',
  `is_top` enum('是','否') NOT NULL DEFAULT '否',
  `top_image` varchar(128) NOT NULL,
  PRIMARY KEY (`sku_id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品详细信息表';

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`sku_id`, `sku_name`, `spu_id`, `price`, `color`, `sku_num`, `material`, `specs`, `image`, `is_top`, `top_image`) VALUES
('aa', 'aa', '111', 11, '11', 11, '11', '11', '["\\/uploads\\/images\\/2015-09\\/4cafeee212d81c0ca70c6a57db8f520f.jpg","\\/uploads\\/images\\/2015-09\\/b6d00969712467da1546ed585a92f335.jpg","\\/uploads\\/images\\/2015-09\\/73beb66f566de723c1cac3799007dd36.jpg"]', '是', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
