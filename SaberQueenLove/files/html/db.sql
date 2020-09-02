CREATE DATABASE IF NOT EXISTS supersqli;

USE supersqli;

CREATE TABLE IF NOT EXISTS `word` (
  `id` int(10) NOT NULL,
  `flag_love` varchar(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


INSERT INTO `word` values(1,'flag is'),(2,'not'),(3,'here');
