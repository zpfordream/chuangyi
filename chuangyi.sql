-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 04 月 02 日 16:25
-- 服务器版本: 5.5.40
-- PHP 版本: 5.4.33

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `chuangyi`
--

-- --------------------------------------------------------

--
-- 表的结构 `ar_admin`
--

CREATE TABLE IF NOT EXISTS `ar_admin` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(30) NOT NULL,
  `ad_password` varchar(32) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `ar_admin`
--

INSERT INTO `ar_admin` (`ad_id`, `ad_name`, `ad_password`) VALUES
(19, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- 表的结构 `ar_article`
--

CREATE TABLE IF NOT EXISTS `ar_article` (
  `ar_id` int(5) NOT NULL AUTO_INCREMENT,
  `ar_title` varchar(200) NOT NULL,
  `ar_author` varchar(20) NOT NULL,
  `ar_pic` varchar(200) NOT NULL,
  `ar_rem` tinyint(1) NOT NULL DEFAULT '0',
  `ar_content` text NOT NULL,
  `ar_cateid` int(5) NOT NULL,
  `ar_time` varchar(20) NOT NULL,
  PRIMARY KEY (`ar_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `ar_article`
--

INSERT INTO `ar_article` (`ar_id`, `ar_title`, `ar_author`, `ar_pic`, `ar_rem`, `ar_content`, `ar_cateid`, `ar_time`) VALUES
(16, '测试文章', '', '', 0, '&lt;p&gt;测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章&lt;/p&gt;&lt;p&gt;&lt;img alt=&quot;63491684381314367101437039.jpg&quot; src=&quot;/ueditor/php/upload/image/20160330/1459349545423088.jpg&quot; title=&quot;1459349545423088.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章&lt;/p&gt;&lt;p&gt;测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章&lt;/p&gt;&lt;p&gt;测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章&lt;/p&gt;&lt;p&gt;测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章&lt;/p&gt;&lt;p&gt;测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章&lt;/p&gt;&lt;p&gt;测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章&lt;/p&gt;&lt;p&gt;测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章&lt;/p&gt;&lt;p&gt;测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章&lt;/p&gt;&lt;p&gt;测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 67, '1459349549'),
(14, '测试文章5', '', '', 0, '', 65, '1456674447'),
(15, '测试文章61', '童攀', './Public/Uploads/2016-02-29/56d3212cad3e4.jpg', 1, '&lt;p&gt;测试文章6测试文章6测试文章6测试文章6测试文章6测试文章6测试文章6&lt;br/&gt;&lt;/p&gt;', 65, '1456674463'),
(10, '测试文章1', '童攀', './Public/Uploads/2016-02-28/56d3134320eee.jpg', 1, '&lt;p&gt;测试文章1测试文章1测试文章1测试文章1测试文章1测试文章1测试文章1测试文章1测试文章1测试文章1测试文章1测试文章1测试文章1&lt;br/&gt;&lt;/p&gt;', 65, '1456673603'),
(17, '测试文章12', '', '', 0, '&lt;p&gt;测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12&lt;br/&gt;&lt;/p&gt;&lt;p&gt;测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12&lt;br/&gt;&lt;/p&gt;&lt;p&gt;测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12&lt;br/&gt;&lt;/p&gt;&lt;p&gt;测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12&lt;br/&gt;&lt;/p&gt;&lt;p&gt;测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12&lt;br/&gt;&lt;/p&gt;&lt;p&gt;测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12测试文章12&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;img alt=&quot;b556a2adddcda5777d7c11407bac4dec.jpg&quot; src=&quot;/ueditor/php/upload/image/20160331/1459419503652490.jpg&quot; title=&quot;1459419503652490.jpg&quot;/&gt;&lt;/p&gt;', 65, '1459419505'),
(18, '测试文章1234', '', './Public/Uploads/2016-04-01/56fde8b00999c.jpg', 1, '&lt;p&gt;测试文章1234测试文章1234测试文章1234测试文章1234测试文章1234测试文章1234测试文章1234测试文章1234测试文章1234测试文章1234测试文章1234测试文章1234&lt;/p&gt;', 65, '1459480752');

-- --------------------------------------------------------

--
-- 表的结构 `ar_category`
--

CREATE TABLE IF NOT EXISTS `ar_category` (
  `cate_id` int(5) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(20) NOT NULL,
  `cate_ename` varchar(20) NOT NULL,
  `cate_pic` varchar(200) NOT NULL,
  `cate_keywords` varchar(200) NOT NULL,
  `cate_desc` text NOT NULL,
  `cate_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0封面,1列表,2产品',
  `parentid` int(5) NOT NULL DEFAULT '0',
  `cate_content` text NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=71 ;

--
-- 转存表中的数据 `ar_category`
--

INSERT INTO `ar_category` (`cate_id`, `cate_name`, `cate_ename`, `cate_pic`, `cate_keywords`, `cate_desc`, `cate_type`, `parentid`, `cate_content`) VALUES
(70, '创宜访谈', '', '', '', '', 0, 69, ''),
(67, '产品中心', 'product', '', '', '', 1, 0, ''),
(68, '育宜康', '', '', '', '', 1, 67, ''),
(69, '企业风采', 'Company style', '', '', '', 0, 0, '&lt;p&gt;&lt;img alt=&quot;63491684381314367101437039.jpg&quot; src=&quot;/ueditor/php/upload/image/20160330/1459350423110032.jpg&quot; title=&quot;1459350423110032.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;企业风采企业风采企业风采企业风采企业风采&lt;/p&gt;&lt;p&gt;企业风采企业风采企业风采企业风采企业风采&lt;/p&gt;'),
(65, '公司动态', '', '', '', '', 1, 64, ''),
(66, '最新新闻', '', '', '', '', 1, 64, ''),
(64, '最新动态', 'News', '', '最新动态', '最新动态', 1, 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `ar_conf`
--

CREATE TABLE IF NOT EXISTS `ar_conf` (
  `cf_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `cf_name` varchar(30) NOT NULL,
  `cf_ename` varchar(30) NOT NULL,
  `cf_type` varchar(30) NOT NULL,
  `cf_values` text NOT NULL,
  `cf_value` text NOT NULL,
  PRIMARY KEY (`cf_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `ar_conf`
--

INSERT INTO `ar_conf` (`cf_id`, `cf_name`, `cf_ename`, `cf_type`, `cf_values`, `cf_value`) VALUES
(1, '我的网站', 'myweb', 'text', '', '我的网站1'),
(7, '网站描述', 'desc', 'textarea', '', '网站描述网站描述网站描述网站描述1'),
(6, '是否关闭', 'colse', 'radio', '是,否', '是'),
(8, '当前状态', 'staic', 'radio', '关闭,打开', '关闭');

-- --------------------------------------------------------

--
-- 表的结构 `ar_link`
--

CREATE TABLE IF NOT EXISTS `ar_link` (
  `li_id` int(5) NOT NULL AUTO_INCREMENT,
  `li_title` varchar(60) NOT NULL,
  `li_url` varchar(100) NOT NULL,
  `li_pic` varchar(200) NOT NULL,
  `li_des` text NOT NULL,
  PRIMARY KEY (`li_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `ar_link`
--

INSERT INTO `ar_link` (`li_id`, `li_title`, `li_url`, `li_pic`, `li_des`) VALUES
(7, '360', 'http://www.360.cn', '', '360360');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
