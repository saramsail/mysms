/*
Navicat MySQL Data Transfer

Source Server         : Local Connection
Source Server Version : 50536
Source Host           : localhost:3306
Source Database       : shiningsmsdb

Target Server Type    : MYSQL
Target Server Version : 50536
File Encoding         : 65001

Date: 2016-03-09 15:06:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ssms087_category`
-- ----------------------------
DROP TABLE IF EXISTS `ssms087_category`;
CREATE TABLE `ssms087_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ssms087_category
-- ----------------------------
INSERT INTO `ssms087_category` VALUES ('1', '2015-10-10', 'Funny SMS', 'funny-sms', 'Deactive', 'funny sms', 'funny sms', '2015-12-01 15:31:47');
INSERT INTO `ssms087_category` VALUES ('2', '2015-10-10', 'Sad SMS', 'sad-sms', 'Deactive', 'sad sms', 'sad sms', '2015-12-01 15:32:07');
INSERT INTO `ssms087_category` VALUES ('3', '2015-10-11', 'Birthday SMS', 'birthday-sms', 'Deactive', 'birthday sms', 'birthday sms', '2015-12-01 15:33:08');
INSERT INTO `ssms087_category` VALUES ('4', '2015-10-10', 'Sad SMS', 'sad-sms', 'Deactive', 'dgsdfffffff', 'dfasdfa', '2015-12-02 10:49:17');

-- ----------------------------
-- Table structure for `ssms087_media`
-- ----------------------------
DROP TABLE IF EXISTS `ssms087_media`;
CREATE TABLE `ssms087_media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(255) DEFAULT NULL,
  `media_type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text,
  `embed_code` text,
  `media_img` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ssms087_media
-- ----------------------------

-- ----------------------------
-- Table structure for `ssms087_member`
-- ----------------------------
DROP TABLE IF EXISTS `ssms087_member`;
CREATE TABLE `ssms087_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ssms087_member
-- ----------------------------

-- ----------------------------
-- Table structure for `ssms087_sms`
-- ----------------------------
DROP TABLE IF EXISTS `ssms087_sms`;
CREATE TABLE `ssms087_sms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `create_date` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `sms` text,
  `status` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ssms087_sms
-- ----------------------------
INSERT INTO `ssms087_sms` VALUES ('1', '1', '2015-10-10', 'asdfasasf', 'sdfasdfas', 'dfasdfasdfasdf', 'Deactive', 'dfasdfasf', 'dfas', '2015-12-02 11:15:16');
INSERT INTO `ssms087_sms` VALUES ('2', '0', '2015-10-11', 'Funny SMS', 'funny-sms', 'asdasdasfas', 'Deactive', 'asfasfasdfsaf', 'safsafasf', '2015-12-02 11:15:12');

-- ----------------------------
-- Table structure for `ssms087_subscriber`
-- ----------------------------
DROP TABLE IF EXISTS `ssms087_subscriber`;
CREATE TABLE `ssms087_subscriber` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ssms087_subscriber
-- ----------------------------
INSERT INTO `ssms087_subscriber` VALUES ('2', '2015-10-10', 'Ahmed', 'hassan@gmail.com', 'Deactive', '2015-12-01 14:38:47');
INSERT INTO `ssms087_subscriber` VALUES ('3', '2015-12-12', 'Umer Bawa', 'umer@gmail.com', 'Deactive', '2015-12-01 14:44:07');

-- ----------------------------
-- Table structure for `ssms087_webmaster`
-- ----------------------------
DROP TABLE IF EXISTS `ssms087_webmaster`;
CREATE TABLE `ssms087_webmaster` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `webmaster_img` varchar(255) DEFAULT NULL,
  `profile` text,
  `status` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ssms087_webmaster
-- ----------------------------
