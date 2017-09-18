-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 06 月 10 日 07:56
-- 服务器版本: 5.5.8
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `data`
--

-- --------------------------------------------------------

--
-- 表的结构 `leavewords`
--

CREATE TABLE IF NOT EXISTS `leavewords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `date` datetime NOT NULL,
  `reply` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `leavewords`
--

INSERT INTO `leavewords` (`id`, `name`, `title`, `content`, `date`, `reply`) VALUES
(2, '张三', '锄禾', '锄禾日当午，\r\n汗滴禾下土。\r\n谁知盘中餐，\r\n粒粒皆辛苦。', '2015-06-10 14:14:05', NULL),
(3, '李四', '草', '离离原上草，一岁一枯荣。\r\n野火烧不尽，春风吹又生。\r\n远芳侵古道，晴翠接荒城。\r\n又送王孙去，萋萋满别情。', '2015-06-10 14:16:03', '我很好');
