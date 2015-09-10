-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 08 日 10:01
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
