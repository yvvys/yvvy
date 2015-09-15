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

CREATE TABLE IF NOT EXISTS `goods` (
  `goods_id` varchar(25) NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `price` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `goods_num` varchar(255) NOT NULL,
  `material` varchar(50) NOT NULL,
  `specs` varchar(25) NOT NULL,
  PRIMARY KEY (`goods_id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品详细信息表' AUTO_INCREMENT=1;



http://www.markorhome.com/search/rehome/zhuang-shi-pin_142/?selected_facets=brand_exact:REHOME  装饰品
http://www.markorhome.com/search/rehome/zhuang-shi-pin/di-tan_151/?selected_facets=brand_exact:REHOME  地毯
http://www.markorhome.com/search/rehome/zhuang-shi-pin/pi-fu_150/?selected_facets=brand_exact:REHOME  批拂
http://www.markorhome.com/search/rehome/zhuang-shi-pin/xiang-fen_149/?selected_facets=brand_exact:REHOME  香氛
http://www.markorhome.com/search/rehome/zhuang-shi-pin/shou-na_148/?selected_facets=brand_exact:REHOME  收纳
http://www.markorhome.com/search/rehome/zhuang-shi-pin/wei-yu_147/?selected_facets=brand_exact:REHOME  卫浴
http://www.markorhome.com/search/rehome/zhuang-shi-pin/can-yin_146/?selected_facets=brand_exact:REHOME  餐饮
http://www.markorhome.com/search/rehome/zhuang-shi-pin/bao-zhen_145/?selected_facets=brand_exact:REHOME  抱枕
http://www.markorhome.com/search/rehome/zhuang-shi-pin/zhuang-shi-zhi-wu_144/?selected_facets=brand_exact:REHOME  装饰植物
http://www.markorhome.com/search/rehome/zhuang-shi-pin/shui-mian-chuang-pin_143/?selected_facets=brand_exact:REHOME  睡眠床品
http://www.markorhome.com/search/rehome/zhuang-shi-pin/zhuo-mian-bai-shi_141/?selected_facets=brand_exact:REHOME  桌面摆饰
http://www.markorhome.com/search/rehome/zhuang-shi-jia-ju_152/?selected_facets=brand_exact:REHOME 装饰家具
http://www.markorhome.com/search/rehome/zhuang-shi-jia-ju/shi-mu_154/?selected_facets=brand_exact:REHOME  实木
http://www.markorhome.com/search/rehome/zhuang-shi-jia-ju/sha-fa_153/?selected_facets=brand_exact:REHOME  沙发


										<button id="sample_editable_1_new" class="btn bule">

										创建新的目录 <i class="icon-plus"></i></button>