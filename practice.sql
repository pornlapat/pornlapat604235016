-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 13, 2015 at 01:29 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `practice`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `dept`
-- 

CREATE TABLE `dept` (
  `DEPTNO` char(2) collate utf8_unicode_ci NOT NULL default '',
  `DNAME` varchar(15) collate utf8_unicode_ci default NULL,
  `LOC` varchar(10) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`DEPTNO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `dept`
-- 

INSERT INTO `dept` VALUES ('10', 'ACCOUNTING', 'NEW YORK');
INSERT INTO `dept` VALUES ('20', 'RESEARCH', 'DALLAS');
INSERT INTO `dept` VALUES ('30', 'SALES', 'CHICAGO');
INSERT INTO `dept` VALUES ('40', 'OPERATIONS', 'BOSTON');

-- --------------------------------------------------------

-- 
-- Table structure for table `emp`
-- 

CREATE TABLE `emp` (
  `EMPNO` varchar(4) collate utf8_unicode_ci NOT NULL default '',
  `ENAME` varchar(20) collate utf8_unicode_ci default NULL,
  `JOB` varchar(15) collate utf8_unicode_ci default NULL,
  `MGR` varchar(4) collate utf8_unicode_ci default NULL,
  `HIREDATE` date default NULL,
  `SAL` int(5) default NULL,
  `COMM` int(5) default NULL,
  `DEPTNO` char(2) collate utf8_unicode_ci NOT NULL default '',
  PRIMARY KEY  (`EMPNO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `emp`
-- 

INSERT INTO `emp` VALUES ('7839', 'KING', 'PRESSIDENT', NULL, '1991-11-17', 5000, NULL, '10');
INSERT INTO `emp` VALUES ('7698', 'BLAKE', 'MANAGER', '7839', '1981-05-01', 2850, NULL, '30');
INSERT INTO `emp` VALUES ('7782', 'CLARK', 'MANAGER', '7839', '1981-06-09', 2450, NULL, '10');
INSERT INTO `emp` VALUES ('7566', 'JONES', 'MANAGER', '7839', '1981-04-02', 2975, NULL, '20');
INSERT INTO `emp` VALUES ('7654', 'MARTIN', 'SALESMAN', '7698', '1981-09-28', 1250, 1400, '30');
INSERT INTO `emp` VALUES ('7499', 'ALLEN', 'SALESMAN', '7698', '1981-02-20', 1600, 300, '30');
INSERT INTO `emp` VALUES ('7844', 'TURNER', 'SALESMAN', '7698', '1981-09-08', 1500, 0, '30');
INSERT INTO `emp` VALUES ('7900', 'JAMES', 'CLERK', '7698', '1981-12-03', 950, NULL, '30');
INSERT INTO `emp` VALUES ('7521', 'WARD', 'SALESMAN', '7698', '1981-02-22', 1250, 500, '30');
INSERT INTO `emp` VALUES ('7902', 'FORD', 'ANALYST', '7566', '1981-12-03', 3000, NULL, '20');
INSERT INTO `emp` VALUES ('7369', 'SMITH', 'CLERK', '7902', '1980-12-17', 800, NULL, '20');
INSERT INTO `emp` VALUES ('7788', 'SCOTT', 'ANALYST', '7566', '1982-12-09', 3000, NULL, '20');
INSERT INTO `emp` VALUES ('7876', 'ADAMS', 'CLERK', '7788', '1983-01-12', 1100, NULL, '20');
INSERT INTO `emp` VALUES ('7934', 'MILLER', 'CLERK', '7782', '1982-01-23', 1300, NULL, '10');

-- --------------------------------------------------------

-- 
-- Table structure for table `salgrade`
-- 

CREATE TABLE `salgrade` (
  `GRADE` tinyint(1) NOT NULL default '0',
  `LOSAL` int(4) default NULL,
  `HISAL` int(4) default NULL,
  PRIMARY KEY  (`GRADE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `salgrade`
-- 

INSERT INTO `salgrade` VALUES (1, 700, 1200);
INSERT INTO `salgrade` VALUES (2, 1201, 1400);
INSERT INTO `salgrade` VALUES (3, 1401, 2000);
INSERT INTO `salgrade` VALUES (4, 2001, 3000);
INSERT INTO `salgrade` VALUES (5, 3001, 9999);
