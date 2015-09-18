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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
