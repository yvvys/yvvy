-- phpMyAdmin SQL Dump
-- version 3.4.7
-- http://www.phpmyadmin.net
--
-- ����: localhost
-- ��������: 2015 �� 09 �� 10 �� 15:23
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
-- ��Ľṹ `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `content` text NOT NULL,
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  `issuer` varchar(32) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- ת����е����� `news`
--

INSERT INTO `news` (`news_id`, `title`, `content`, `created`, `updated`, `issuer`) VALUES
(1, 'xxxxx', 'xxxxxxxx', 123, 456, '123'),
(3, 'qwwq', '<p>ǧ��ǧ��Ŷ</p>', 1441863457, 1441863457, '·�˼�'),
(4, '��������', '<p>��������</p>', 1441863465, 1441863465, '·�˼�');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
