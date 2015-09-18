-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 18 日 17:56
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `banner`
--

INSERT INTO `banner` (`banner_id`, `title`, `image`, `url`, `banner_group`, `active`, `introduce`, `banner_order`) VALUES
(3, '哇哈哈内容', '/uploads/images/2015-09/5bd20c1a4e150c96ebf7cea3ab2f4ae4.jpg', 'http://www.baidu.com', '2', '1', 'asdasasa', 1),
(7, '测试', '/uploads/images/2015-09/59ff2b1dda99508f42fd3f8ad2e73d8f.jpg', '测试', '1', '1', '测试', 22);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品详细信息表' AUTO_INCREMENT=1 ;

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
(5, '测试222', '<p><img src="http://yvvy.test.com/uploads/Ueditor/20150910/14418704074681.jpg" _src="http://yvvy.test.com/uploads/Ueditor/20150910/14418704074681.jpg" style=""/></p><p><img src="http://yvvy.test.com/uploads/Ueditor/20150910/14418704117657.jpg" _src="http://yvvy.test.com/uploads/Ueditor/20150910/14418704117657.jpg" style=""/></p><p><img src="http://yvvy.test.com/uploads/Ueditor/20150910/14418704144426.jpg" _src="http://yvvy.test.com/uploads/Ueditor/20150910/14418704144426.jpg" style=""/></p><p><br/></p>', 1441870431, 1441870431, 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `series`
--

CREATE TABLE IF NOT EXISTS `series` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `parent_id` varchar(255) NOT NULL,
  `parent_name` varchar(50) NOT NULL COMMENT '所属目录',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='产品系列表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `series`
--

INSERT INTO `series` (`id`, `name`, `parent_id`, `parent_name`) VALUES
(7, '青少年3', '11', '桌面摆饰>动物图腾');

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
('122131', '测试', '北京', '北京市', '北京市丰台区', '199827323', '223232.2', '32324232', '/uploads/images/2015-09/3f67cc93716ef3041763f00583ad096d.jpg', '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `user_group`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '["1"]');

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
