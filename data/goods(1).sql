-- phpMyAdmin SQL Dump
-- version 3.4.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 18 日 17:23
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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sku_id` varchar(25) NOT NULL,
  `sku_name` varchar(255) NOT NULL,
  `spu_id` varchar(25) NOT NULL,
  `price` int(10) NOT NULL,
  `color` varchar(50) NOT NULL,
  `sku_num` int(10) NOT NULL,
  `material` varchar(50) NOT NULL COMMENT '材质',
  `specs` varchar(50) NOT NULL COMMENT '规格',
  `image` varchar(600) NOT NULL COMMENT '商品图片',
  `is_top` enum('是','否') NOT NULL DEFAULT '否' COMMENT '主展示',
  `top_image` varchar(128) NOT NULL COMMENT '头图',
  `introduce` varchar(1000) NOT NULL DEFAULT '' COMMENT '介绍',
  `content` text NOT NULL COMMENT '内容',
  `color_pic` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='商品详细信息表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`id`, `sku_id`, `sku_name`, `spu_id`, `price`, `color`, `sku_num`, `material`, `specs`, `image`, `is_top`, `top_image`, `introduce`, `content`, `color_pic`) VALUES
(1, '222', '11', '11', 11, '11', 11, '11', '11', '["\\/uploads\\/images\\/2015-09\\/9288e12de0cc07cbf2b13f04ad7c9eb6.jpg","\\/uploads\\/images\\/2015-09\\/9b9198538019fb01485652b2a7f78d1a.jpg"]', '否', '/uploads/images/2015-09/9b9198538019fb01485652b2a7f78d1a.jpg', '<p>333<br/></p>', '<p>444</p>', '/uploads/images/2015-09/175fca49c838b69165af632fa6513ea0.jpg'),
(2, '1212121', '12', '11', 1212, '11', 11, '11', '21', '["\\/uploads\\/images\\/2015-09\\/e62e15201876f4d36b31b4738ecc70ee.jpg","\\/uploads\\/images\\/2015-09\\/e7a66f7cb198c6d49cb2b7a79fa1146d.jpg"]', '否', '/uploads/images/2015-09/e62e15201876f4d36b31b4738ecc70ee.jpg', '<p>完全<br/></p>', '<p>1221 <br/></p>', '11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
