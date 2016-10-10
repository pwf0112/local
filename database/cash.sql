/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : cash

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-10-10 17:48:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for computer
-- ----------------------------
DROP TABLE IF EXISTS `computer`;
CREATE TABLE `computer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` char(15) NOT NULL COMMENT 'IP',
  `port` char(7) NOT NULL COMMENT '端口',
  `posi` char(3) NOT NULL COMMENT '位置',
  `pos` varchar(255) NOT NULL DEFAULT '' COMMENT 'POS机',
  `pri` varchar(255) NOT NULL DEFAULT '' COMMENT '打印机',
  `bil` varchar(255) NOT NULL DEFAULT '' COMMENT '小票机',
  `mac` varchar(255) NOT NULL DEFAULT '' COMMENT '主机',
  `sys` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '系统',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip` (`ip`),
  UNIQUE KEY `port` (`port`),
  UNIQUE KEY `posi` (`posi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of computer
-- ----------------------------
INSERT INTO `computer` VALUES ('1', '1235', 'BPOS101', '101', '', '', '', '', '0');

-- ----------------------------
-- Table structure for device
-- ----------------------------
DROP TABLE IF EXISTS `device`;
CREATE TABLE `device` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` int(10) unsigned NOT NULL,
  `brand` varchar(255) NOT NULL DEFAULT '',
  `model` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`type`),
  KEY `type` (`type`),
  CONSTRAINT `device_ibfk_1` FOREIGN KEY (`type`) REFERENCES `dtype` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of device
-- ----------------------------
INSERT INTO `device` VALUES ('1', '新主机', '1', '', '');
INSERT INTO `device` VALUES ('2', '旧主机', '1', '', '');
INSERT INTO `device` VALUES ('3', '打印机 - 主机', '2', '', '');
INSERT INTO `device` VALUES ('4', '打印机 - 共享', '2', '', '');
INSERT INTO `device` VALUES ('5', '银联POS机', '3', '', '');
INSERT INTO `device` VALUES ('6', '通联POS机', '3', '', '');
INSERT INTO `device` VALUES ('7', '小票打印机', '4', '', '');

-- ----------------------------
-- Table structure for dtype
-- ----------------------------
DROP TABLE IF EXISTS `dtype`;
CREATE TABLE `dtype` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dtype
-- ----------------------------
INSERT INTO `dtype` VALUES ('1', 'mac', '主机');
INSERT INTO `dtype` VALUES ('2', 'pri', '打印机');
INSERT INTO `dtype` VALUES ('3', 'pos', 'POS机');
INSERT INTO `dtype` VALUES ('4', 'bil', '小票机');

-- ----------------------------
-- Table structure for system
-- ----------------------------
DROP TABLE IF EXISTS `system`;
CREATE TABLE `system` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system
-- ----------------------------
INSERT INTO `system` VALUES ('1', 'POS_HK300');
INSERT INTO `system` VALUES ('2', 'POS_HK380');
