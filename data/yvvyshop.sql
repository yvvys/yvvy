-- phpMyAdmin SQL Dump
-- version 3.4.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 18 日 14:30
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
-- 表的结构 `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `banner_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '广告ID',
  `title` varchar(64) NOT NULL COMMENT '广告标题',
  `image` varchar(128) NOT NULL COMMENT '图片地址',
  `url` varchar(128) NOT NULL COMMENT '链接',
  `banner_group` varchar(128) NOT NULL COMMENT '广告组',
  `active` enum('0','1') NOT NULL DEFAULT '1' COMMENT '是否有效',
  `introduce` varchar(1000) NOT NULL DEFAULT '' COMMENT '介绍',
  `banner_order` tinyint(4) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `banner`
--

INSERT INTO `banner` (`banner_id`, `title`, `image`, `url`, `banner_group`, `active`, `introduce`, `banner_order`) VALUES
(3, '花花内容', '/uploads/images/2015-09/5bd20c1a4e150c96ebf7cea3ab2f4ae4.jpg', 'http://www.baidu.com', '2', '1', 'asdasasa', 1),
(4, 'hh内容', '/uploads/images/2015-09/5bd20c1a4e150c96ebf7cea3ab2f4ae4.jpg', 'http://www.baidu.com', '1', '1', 'asdasasa', 1);

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

-- --------------------------------------------------------

--
-- 表的结构 `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(32) NOT NULL,
  `ipone` char(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `city` varchar(32) NOT NULL,
  `created` char(11) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `ipone`, `email`, `password`, `city`, `created`) VALUES
(1, '王小呀', '1861033241', 'wangxiaoya@163.com', '868ee6d8f4ad7c060c4181e137677c50', '北京', '1391033241');

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
  UNIQUE KEY `goods_id` (`sku_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品详细信息表';

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`sku_id`, `sku_name`, `spu_id`, `price`, `color`, `sku_num`, `material`, `specs`, `image`, `is_top`, `top_image`) VALUES
('aa', 'aa', '111', 11, '11', 11, '11', '11', '["\\/uploads\\/images\\/2015-09\\/4cafeee212d81c0ca70c6a57db8f520f.jpg","\\/uploads\\/images\\/2015-09\\/b6d00969712467da1546ed585a92f335.jpg","\\/uploads\\/images\\/2015-09\\/73beb66f566de723c1cac3799007dd36.jpg"]', '是', '');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `content` text NOT NULL,
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  `issuer` varchar(32) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`news_id`, `title`, `content`, `created`, `updated`, `issuer`) VALUES
(1, 'xxxxx', 'xxxxxxxx', 123, 456, '123'),
(5, '2112', '<p>1221<br/></p>', 1442477543, 1442477543, '龙娃也');

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

-- --------------------------------------------------------

--
-- 表的结构 `spu`
--

CREATE TABLE IF NOT EXISTS `spu` (
  `spu_id` varchar(25) NOT NULL,
  `spu_name` varchar(50) NOT NULL,
  `is_sale` int(4) NOT NULL,
  `describe` varchar(255) NOT NULL,
  `classfy_id` varchar(255) NOT NULL,
  `classfy_name` varchar(255) NOT NULL,
  PRIMARY KEY (`spu_id`),
  UNIQUE KEY `spu_id` (`spu_id`),
  KEY `spu_id_2` (`spu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='SPU表';

--
-- 转存表中的数据 `spu`
--

INSERT INTO `spu` (`spu_id`, `spu_name`, `is_sale`, `describe`, `classfy_id`, `classfy_name`) VALUES
('E121211', '0', 1, '测试2', '23', '客厅 > 床头柜'),
('E121212', '1212', 1, '', '21', '客厅'),
('E121213', '0', 0, '', '21', '客厅'),
('E121214', 'iPhone12', 1, '', '23', '客厅 > 床头柜'),
('E121215', '测试44', 1, '测试44', '27', '餐厅>餐桌');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(36) NOT NULL,
  `password` varchar(64) NOT NULL,
  `user_group` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `user_group`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '["1"]'),
(3, '龙娃也', '21232f297a57a5a743894a0e4a801fc3', '["2","3","4"]');

-- --------------------------------------------------------

--
-- 表的结构 `user_group`
--

CREATE TABLE IF NOT EXISTS `user_group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(36) NOT NULL,
  `controller` varchar(36) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `user_group`
--

INSERT INTO `user_group` (`group_id`, `group_name`, `controller`) VALUES
(1, '全部权限', 'all'),
(2, '商品分类', 'catalogue'),
(3, '前端用户', 'customer'),
(4, '新闻管理', 'news'),
(5, '线下店铺', 'shop'),
(6, 'spu管理', 'spu'),
(7, 'sku管理', 'goods'),
(8, '后台帐号', 'user'),
(9, '权限管理', 'user_group'),
(10, '广告管理', 'banner');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
