/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ionicnews

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-05-01 17:29:07
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `news_category`
-- ----------------------------
DROP TABLE IF EXISTS `news_category`;
CREATE TABLE `news_category` (
  `NC_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NC_NAME` varchar(255) DEFAULT NULL,
  `NC_IMAGES_PATH` text,
  `NC_CREATED` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `NC_MODIFIED` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`NC_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of news_category
-- ----------------------------
INSERT INTO `news_category` VALUES ('1', 'Indonesia', null, '2018-05-01 16:52:50', '2018-05-01 16:52:50');
INSERT INTO `news_category` VALUES ('2', 'Regional', null, '2018-05-01 16:52:55', '2018-05-01 16:52:55');
INSERT INTO `news_category` VALUES ('3', 'Internasional', null, '2018-05-01 16:53:06', '2018-05-01 16:53:06');

-- ----------------------------
-- Table structure for `news_detail`
-- ----------------------------
DROP TABLE IF EXISTS `news_detail`;
CREATE TABLE `news_detail` (
  `ND_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ND_NC_ID` int(11) DEFAULT NULL,
  `ND_TITLE` text,
  `ND_DESCRIPTION` text,
  `ND_IMAGE_PATH` text,
  `ND_CONTENT` text,
  `ND_CREATED` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ND_MODIFIED` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ND_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of news_detail
-- ----------------------------
