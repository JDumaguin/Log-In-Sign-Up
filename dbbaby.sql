/*
MySQL Data Transfer
Source Host: localhost
Source Database: dbbaby
Target Host: localhost
Target Database: dbbaby
Date: 9/23/2017 2:18:23 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for tbltry
-- ----------------------------
DROP TABLE IF EXISTS `tbltry`;
CREATE TABLE `tbltry` (
  `email` varchar(50) NOT NULL DEFAULT '',
  `pass` varchar(40) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `tbltry` VALUES ('oyah!?!', 'pass1234', 'Vince Gandol');
INSERT INTO `tbltry` VALUES ('assa', '123', 'jhay');
