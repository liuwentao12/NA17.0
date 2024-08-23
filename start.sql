-- Host: localhost
-- Date: [your-date]
-- Generator: Custom Script

/*!40101 SET NAMES utf8 */;

--
-- Create "students" database
--

DROP DATABASE IF EXISTS `students`;
CREATE DATABASE `students`;
USE `students`;

--
-- Structure for table "applications"
--

DROP TABLE IF EXISTS `applications`;
CREATE TABLE `applications` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class_` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `department_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;


--
-- Data for table "applications"
--
-- (No data provided in this script)
