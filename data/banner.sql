-- phpMyAdmin SQL Dump
-- version 3.4.7
-- http://www.phpmyadmin.net
--
-- ����: localhost
-- ��������: 2015 �� 09 �� 10 �� 09:55
-- �������汾: 5.5.17
-- PHP �汾: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ���ݿ�: `yvvyshop`
--

-- --------------------------------------------------------

--
-- ��Ľṹ `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `banner_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '���ID',
  `title` varchar(64) NOT NULL COMMENT '������',
  `image` varchar(128) NOT NULL COMMENT 'ͼƬ��ַ',
  `url` varchar(128) NOT NULL COMMENT '����',
  `banner_group` varchar(128) NOT NULL COMMENT '�����',
  `active` enum('0','1') NOT NULL DEFAULT '1' COMMENT '�Ƿ���Ч',
  `introduce` varchar(1000) NOT NULL DEFAULT '' COMMENT '����',
  `banner_order` tinyint(4) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- ת����е����� `banner`
--

INSERT INTO `banner` (`banner_id`, `title`, `image`, `url`, `banner_group`, `active`, `introduce`, `banner_order`) VALUES
(3, '��������', '/uploads/images/2015-09/5bd20c1a4e150c96ebf7cea3ab2f4ae4.jpg', 'http://www.baidu.com', '231', '1', 'asdasasa', 1),
(4, '��������', '/uploads/images/2015-09/5bd20c1a4e150c96ebf7cea3ab2f4ae4.jpg', 'http://www.baidu.com', '1', '1', 'asdasasa', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
