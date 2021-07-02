/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50726
Source Host           : 127.0.0.1:3306
Source Database       : noteb

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2021-07-02 14:10:21
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `sqli_1`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_1`;
CREATE TABLE `sqli_1` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_get类型注入';

-- ----------------------------
-- Records of sqli_1
-- ----------------------------
INSERT INTO `sqli_1` VALUES ('1', 'flag{t1n83f5g}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_1` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_1` VALUES ('3', '', 'noteb', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_1` VALUES ('4', '', 'c1o2a3', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_1` VALUES ('5', '', 'refeng', 'a2e927b65825d2968ddad6ef53d54e8e');

-- ----------------------------
-- Table structure for `sqli_10`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_10`;
CREATE TABLE `sqli_10` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_post1类型注入';

-- ----------------------------
-- Records of sqli_10
-- ----------------------------
INSERT INTO `sqli_10` VALUES ('1', 'flag{ugvbri07}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_10` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_10` VALUES ('3', '', 'noteb', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_10` VALUES ('4', '', 'c1o2a3', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_10` VALUES ('5', '', 'refeng', '3ade57ff99405692b5d50c2456647b95');

-- ----------------------------
-- Table structure for `sqli_10_1`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_10_1`;
CREATE TABLE `sqli_10_1` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_cookie类型注入';

-- ----------------------------
-- Records of sqli_10_1
-- ----------------------------
INSERT INTO `sqli_10_1` VALUES ('1', '', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_10_1` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_10_1` VALUES ('3', '', 'noteb', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_10_1` VALUES ('4', '', 'c1o2a3', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_10_1` VALUES ('5', '', 'c1o2a3', '3ade57ff99405692b5d50c2456647b95');

-- ----------------------------
-- Table structure for `sqli_11`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_11`;
CREATE TABLE `sqli_11` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_post2类型注入';

-- ----------------------------
-- Records of sqli_11
-- ----------------------------
INSERT INTO `sqli_11` VALUES ('1', 'flag{nyzo7o0v}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_11` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_11` VALUES ('3', '', 'noteb', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_11` VALUES ('4', '', 'c1o2a3', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_11` VALUES ('5', '', 'refeng', '3ade57ff99405692b5d50c2456647b95');

-- ----------------------------
-- Table structure for `sqli_12`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_12`;
CREATE TABLE `sqli_12` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_post3类型注入';

-- ----------------------------
-- Records of sqli_12
-- ----------------------------
INSERT INTO `sqli_12` VALUES ('1', 'flag{v7jrs3fq}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_12` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_12` VALUES ('3', '', 'noteb', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_12` VALUES ('4', '', 'c1o2a3', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_12` VALUES ('5', '', 'refeng', '3ade57ff99405692b5d50c2456647b95');

-- ----------------------------
-- Table structure for `sqli_13`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_13`;
CREATE TABLE `sqli_13` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_post4类型注入';

-- ----------------------------
-- Records of sqli_13
-- ----------------------------
INSERT INTO `sqli_13` VALUES ('1', 'flag{24xad457}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_13` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_13` VALUES ('3', '', 'noteb', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_13` VALUES ('4', '', 'c1o2a3', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_13` VALUES ('5', '', 'refeng', '3ade57ff99405692b5d50c2456647b95');

-- ----------------------------
-- Table structure for `sqli_14`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_14`;
CREATE TABLE `sqli_14` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_post5类型注入';

-- ----------------------------
-- Records of sqli_14
-- ----------------------------
INSERT INTO `sqli_14` VALUES ('1', 'flag{creyjmnr}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_14` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_14` VALUES ('3', '', 'noteb', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_14` VALUES ('4', '', 'c1o2a3', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_14` VALUES ('5', '', 'refeng', '3ade57ff99405692b5d50c2456647b95');

-- ----------------------------
-- Table structure for `sqli_15`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_15`;
CREATE TABLE `sqli_15` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_post6类型注入';

-- ----------------------------
-- Records of sqli_15
-- ----------------------------
INSERT INTO `sqli_15` VALUES ('1', 'flag{6ru26ffs}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_15` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_15` VALUES ('3', '', 'noteb', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_15` VALUES ('4', '', 'c1o2a3', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_15` VALUES ('5', '', 'refeng', '3ade57ff99405692b5d50c2456647b95');

-- ----------------------------
-- Table structure for `sqli_16`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_16`;
CREATE TABLE `sqli_16` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_post7类型注入';

-- ----------------------------
-- Records of sqli_16
-- ----------------------------
INSERT INTO `sqli_16` VALUES ('1', 'flag{k5607y4e}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_16` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_16` VALUES ('3', '', 'noteb', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_16` VALUES ('4', '', 'c1o2a3', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_16` VALUES ('5', '', 'refeng', '3ade57ff99405692b5d50c2456647b95');

-- ----------------------------
-- Table structure for `sqli_17`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_17`;
CREATE TABLE `sqli_17` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  `HTTP_X_FORWARDED_FOR` varchar(300) COLLATE utf8mb4_bin NOT NULL COMMENT '客户端IP信息',
  `HTTP_USER_AGENT` varchar(300) COLLATE utf8mb4_bin NOT NULL COMMENT 'UA头',
  `HTTP_ACCEPT` varchar(300) COLLATE utf8mb4_bin NOT NULL,
  `HTTP_HOST` varchar(300) COLLATE utf8mb4_bin NOT NULL COMMENT '服务器端口',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_post8类型注入';

-- ----------------------------
-- Records of sqli_17
-- ----------------------------
INSERT INTO `sqli_17` VALUES ('1', 'flag{1717test17}', 'admin', '21232f297a57a5a743894a0e4a801fc3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8', '127.0.0.1');
INSERT INTO `sqli_17` VALUES ('2', 'flag{1717test17}', 'test', '098f6bcd4621d373cade4e832627b4f6', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8', '1');
INSERT INTO `sqli_17` VALUES ('3', 'flag{1717test17}', 'note-b', 'e10adc3949ba59abbe56e057f20f883e', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8', '1');
INSERT INTO `sqli_17` VALUES ('4', 'flag{1717test17}', 'qyhz', '4bb35cfbddb73535de93b195f065863f', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8', '1');
INSERT INTO `sqli_17` VALUES ('5', 'flag{1717test17}', '凉风有信', '3ade57ff99405692b5d50c2456647b95', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8', '1');
INSERT INTO `sqli_17` VALUES ('6', 'flag{1717test17}', 'c66666', 'a2e927b65825d2968ddad6ef53d54e8e', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8', '1');

-- ----------------------------
-- Table structure for `sqli_18`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_18`;
CREATE TABLE `sqli_18` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_insert类型注入';

-- ----------------------------
-- Records of sqli_18
-- ----------------------------
INSERT INTO `sqli_18` VALUES ('1', 'flag{ffqy1b}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_18` VALUES ('2', 'flag{ffqy1b}', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_18` VALUES ('3', 'flag{ffqy1b}', 'note-b', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_18` VALUES ('4', 'flag{ffqy1b}', 'qyhz', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_18` VALUES ('5', 'flag{ffqy1b}', '凉风有信', '3ade57ff99405692b5d50c2456647b95');
INSERT INTO `sqli_18` VALUES ('6', 'flag{ffqy1b}', 'c66666', 'a2e927b65825d2968ddad6ef53d54e8e');

-- ----------------------------
-- Table structure for `sqli_19`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_19`;
CREATE TABLE `sqli_19` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_delect类型注入';

-- ----------------------------
-- Records of sqli_19
-- ----------------------------
INSERT INTO `sqli_19` VALUES ('1', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('2', 'flag{aabc21}', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_19` VALUES ('3', 'flag{aabc21}', 'note-b', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_19` VALUES ('4', 'flag{aabc21}', 'KenIn', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_19` VALUES ('5', 'flag{aabc21}', '凉风有信', '3ade57ff99405692b5d50c2456647b95');
INSERT INTO `sqli_19` VALUES ('6', 'flag{aabc21}', 'c66666', 'a2e927b65825d2968ddad6ef53d54e8e');
INSERT INTO `sqli_19` VALUES ('7', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('8', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('9', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('10', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('11', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('12', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('13', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('14', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('15', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('16', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('17', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('18', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('19', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('20', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('21', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('22', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('23', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('24', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('25', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_19` VALUES ('26', 'flag{aabc21}', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- ----------------------------
-- Table structure for `sqli_2`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_2`;
CREATE TABLE `sqli_2` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_str类型注入';

-- ----------------------------
-- Records of sqli_2
-- ----------------------------
INSERT INTO `sqli_2` VALUES ('1', 'flag{84v20a7x}', 'admin', '00d67c850b7ada52ca7b19bc425dbf92');
INSERT INTO `sqli_2` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_2` VALUES ('3', '', 'noteb', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_2` VALUES ('4', '', 'c1o2a3', '3ade57ff99405692b5d50c2456647b95');
INSERT INTO `sqli_2` VALUES ('5', '', 'refeng', 'a2e927b65825d2968ddad6ef53d54e8e');

-- ----------------------------
-- Table structure for `sqli_20`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_20`;
CREATE TABLE `sqli_20` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(200) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_doucsql类型注入';

-- ----------------------------
-- Records of sqli_20
-- ----------------------------
INSERT INTO `sqli_20` VALUES ('1', 'flag{1efdv}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_20` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_20` VALUES ('3', '', 'note-b', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_20` VALUES ('4', '', 'KenIn', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_20` VALUES ('5', '', '凉风有信', '3ade57ff99405692b5d50c2456647b95');
INSERT INTO `sqli_20` VALUES ('6', '', 'c66666', 'a2e927b65825d2968ddad6ef53d54e8e');
INSERT INTO `sqli_20` VALUES ('17', '', 'noteb', '7aa8ebee2608f78d980ed88e86696c24');

-- ----------------------------
-- Table structure for `sqli_21`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_21`;
CREATE TABLE `sqli_21` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_cookie类型注入';

-- ----------------------------
-- Records of sqli_21
-- ----------------------------
INSERT INTO `sqli_21` VALUES ('1', 'flag{cookie1}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_21` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_21` VALUES ('3', '', 'note-b', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_21` VALUES ('4', '', 'KenIn', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_21` VALUES ('5', '', '凉风有信', '3ade57ff99405692b5d50c2456647b95');
INSERT INTO `sqli_21` VALUES ('6', '', 'c66666', 'a2e927b65825d2968ddad6ef53d54e8e');

-- ----------------------------
-- Table structure for `sqli_3`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_3`;
CREATE TABLE `sqli_3` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) CHARACTER SET gbk NOT NULL COMMENT 'flag',
  `username` varchar(20) CHARACTER SET gbk NOT NULL COMMENT '用户名',
  `password` varchar(32) CHARACTER SET gbk NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_width_byte类型注入';

-- ----------------------------
-- Records of sqli_3
-- ----------------------------
INSERT INTO `sqli_3` VALUES ('1', 'flag{1lzumy2b}', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `sqli_3` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_3` VALUES ('3', '', 'noteb', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_3` VALUES ('4', '', 'c1o2a3', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_3` VALUES ('5', '', 'refeng', '3ade57ff99405692b5d50c2456647b95');

-- ----------------------------
-- Table structure for `sqli_4`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_4`;
CREATE TABLE `sqli_4` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_blind类型注入';

-- ----------------------------
-- Records of sqli_4
-- ----------------------------
INSERT INTO `sqli_4` VALUES ('1', 'flag{y3pn415b}', 'admin', '00d67c850b7ada52ca7b19bc425dbf92');
INSERT INTO `sqli_4` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_4` VALUES ('3', '', 'noteb', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_4` VALUES ('4', '', 'c1o2a3', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_4` VALUES ('5', '', 'refeng', '3ade57ff99405692b5d50c2456647b95');

-- ----------------------------
-- Table structure for `sqli_5`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_5`;
CREATE TABLE `sqli_5` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_time类型注入';

-- ----------------------------
-- Records of sqli_5
-- ----------------------------
INSERT INTO `sqli_5` VALUES ('1', 'flag{jjx4co4c}', 'admin', '00d67c850b7ada52ca7b19bc425dbf92');
INSERT INTO `sqli_5` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_5` VALUES ('3', '', 'noteb', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_5` VALUES ('4', '', 'c1o2a3', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_5` VALUES ('5', '', 'refeng', '3ade57ff99405692b5d50c2456647b95');

-- ----------------------------
-- Table structure for `sqli_6`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_6`;
CREATE TABLE `sqli_6` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_Double类型注入';

-- ----------------------------
-- Records of sqli_6
-- ----------------------------
INSERT INTO `sqli_6` VALUES ('1', 'flag{kao6skrw}', 'admin', '00d67c850b7ada52ca7b19bc425dbf92');
INSERT INTO `sqli_6` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_6` VALUES ('3', '', 'noteb', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_6` VALUES ('4', '', 'c1o2a3', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_6` VALUES ('5', '', 'refeng', '3ade57ff99405692b5d50c2456647b95');

-- ----------------------------
-- Table structure for `sqli_7`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_7`;
CREATE TABLE `sqli_7` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_safe1类型注入';

-- ----------------------------
-- Records of sqli_7
-- ----------------------------
INSERT INTO `sqli_7` VALUES ('1', 'flag{uhwbx20r}', 'admin', '00d67c850b7ada52ca7b19bc425dbf92');
INSERT INTO `sqli_7` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_7` VALUES ('3', '', 'noteb', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_7` VALUES ('4', '', 'c1o2a3', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_7` VALUES ('5', '', 'refeng', '3ade57ff99405692b5d50c2456647b95');

-- ----------------------------
-- Table structure for `sqli_8`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_8`;
CREATE TABLE `sqli_8` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_safe2类型注入';

-- ----------------------------
-- Records of sqli_8
-- ----------------------------
INSERT INTO `sqli_8` VALUES ('1', 'flag{bl4723o2}', 'admin', '00d67c850b7ada52ca7b19bc425dbf92');
INSERT INTO `sqli_8` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_8` VALUES ('3', '', 'noteb', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_8` VALUES ('4', '', 'c1o2a3', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_8` VALUES ('5', '', 'refeng', '3ade57ff99405692b5d50c2456647b95');

-- ----------------------------
-- Table structure for `sqli_9`
-- ----------------------------
DROP TABLE IF EXISTS `sqli_9`;
CREATE TABLE `sqli_9` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'ID序号',
  `flag` varchar(50) COLLATE utf8mb4_bin NOT NULL COMMENT 'flag',
  `username` varchar(20) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='sqli_safe3类型注入';

-- ----------------------------
-- Records of sqli_9
-- ----------------------------
INSERT INTO `sqli_9` VALUES ('1', 'flag{5canj4x4}', 'admin', '00d67c850b7ada52ca7b19bc425dbf92');
INSERT INTO `sqli_9` VALUES ('2', '', 'test', '098f6bcd4621d373cade4e832627b4f6');
INSERT INTO `sqli_9` VALUES ('3', '', 'noteb', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `sqli_9` VALUES ('4', '', 'c1o2a3', '4bb35cfbddb73535de93b195f065863f');
INSERT INTO `sqli_9` VALUES ('5', '', 'refeng', '3ade57ff99405692b5d50c2456647b95');

-- ----------------------------
-- Table structure for `s-xss1`
-- ----------------------------
DROP TABLE IF EXISTS `s-xss1`;
CREATE TABLE `s-xss1` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `text` varchar(600) COLLATE utf8mb4_bin NOT NULL COMMENT '留言信息',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='留言表';

-- ----------------------------
-- Records of s-xss1
-- ----------------------------
INSERT INTO `s-xss1` VALUES ('74', 'test');
INSERT INTO `s-xss1` VALUES ('75', 'test222');
INSERT INTO `s-xss1` VALUES ('80', 'test');

-- ----------------------------
-- Table structure for `s-xss2`
-- ----------------------------
DROP TABLE IF EXISTS `s-xss2`;
CREATE TABLE `s-xss2` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `text` varchar(600) COLLATE utf8mb4_bin NOT NULL COMMENT '留言信息',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='留言表';

-- ----------------------------
-- Records of s-xss2
-- ----------------------------
INSERT INTO `s-xss2` VALUES ('74', 'test');
INSERT INTO `s-xss2` VALUES ('75', 'test2');

-- ----------------------------
-- Table structure for `s-xss3`
-- ----------------------------
DROP TABLE IF EXISTS `s-xss3`;
CREATE TABLE `s-xss3` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `text` varchar(600) COLLATE utf8mb4_bin NOT NULL COMMENT '留言信息',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='留言表';

-- ----------------------------
-- Records of s-xss3
-- ----------------------------
INSERT INTO `s-xss3` VALUES ('74', 'test1');
INSERT INTO `s-xss3` VALUES ('75', 'test2');
INSERT INTO `s-xss3` VALUES ('84', 'test4');

-- ----------------------------
-- Table structure for `s-xss4`
-- ----------------------------
DROP TABLE IF EXISTS `s-xss4`;
CREATE TABLE `s-xss4` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `text` varchar(600) COLLATE utf8mb4_bin NOT NULL COMMENT '留言信息',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='留言表';

-- ----------------------------
-- Records of s-xss4
-- ----------------------------
INSERT INTO `s-xss4` VALUES ('74', 'test');
INSERT INTO `s-xss4` VALUES ('75', 'test');
INSERT INTO `s-xss4` VALUES ('78', 'test4');

-- ----------------------------
-- Table structure for `s-xss5`
-- ----------------------------
DROP TABLE IF EXISTS `s-xss5`;
CREATE TABLE `s-xss5` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `text` varchar(600) COLLATE utf8mb4_bin NOT NULL COMMENT '留言信息',
  `herf` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='留言表';

-- ----------------------------
-- Records of s-xss5
-- ----------------------------
INSERT INTO `s-xss5` VALUES ('79', '百度', 'http://www.baidu.com');

-- ----------------------------
-- Table structure for `test_user`
-- ----------------------------
DROP TABLE IF EXISTS `test_user`;
CREATE TABLE `test_user` (
  `id` int(15) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `username` varchar(255) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名',
  `password` char(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码',
  `money` int(255) NOT NULL DEFAULT '2000',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='CSRF使用的user表格';

-- ----------------------------
-- Records of test_user
-- ----------------------------
INSERT INTO `test_user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '8888');
INSERT INTO `test_user` VALUES ('2', 'test', 'e10adc3949ba59abbe56e057f20f883e', '2000');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id唯一标识',
  `username` varchar(255) COLLATE utf8mb4_bin NOT NULL COMMENT '用户名username',
  `password` char(32) COLLATE utf8mb4_bin NOT NULL COMMENT '密码password',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=DYNAMIC COMMENT='靶场登陆的用户';

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'noteb', '7aa8ebee2608f78d980ed88e86696c24');
