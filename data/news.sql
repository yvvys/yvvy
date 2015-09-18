-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 18 日 17:42
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
