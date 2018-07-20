-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 03:36 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `improvementproposal`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `commentid` int(10) NOT NULL AUTO_INCREMENT,
  `commentername` varchar(30) NOT NULL,
  `commenteremail` varchar(30) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `IPid_fk` int(10) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`commentid`),
  KEY `fk_IPid` (`IPid_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentid`, `commentername`, `commenteremail`, `comment`, `IPid_fk`, `datetime`) VALUES
(1, 'ubaid', 'raza@gmail.com', 'This is test coometn', 1, '2017-11-21 16:04:36'),
(2, 'Ronnie O Sullivan', 'ronnie147@gmail.com', 'comment by ronnie about IP', 1, '2017-11-21 16:04:36'),
(3, 'JUDD trump', 'trump@gmail.com', 'comment by trump', 1, '2017-11-21 16:04:36'),
(4, 'shaheen', 'shaheen@gmail.com', 'comment by shaheen', 1, '2017-11-21 18:30:53'),
(5, 'Comment', 'Comment@gmail.com', 'comment by comment', 2, '2017-11-21 18:36:53'),
(6, 'NewCommentTest', 'Comment@gmail.com', 'comment ........', 1, '2017-11-22 15:41:49'),
(8, 'ahmed shah', 'ahmedshah@gmail.com', 'hello this is my comment', 1, '2017-11-27 07:59:11'),
(9, 'ubaid', 'ubaid@gmail.com', 'hello this is new comment', 2, '2017-12-02 05:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `ipdetail`
--

DROP TABLE IF EXISTS `ipdetail`;
CREATE TABLE IF NOT EXISTS `ipdetail` (
  `IPid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `user` varchar(50) NOT NULL,
  `feature` varchar(1000) NOT NULL,
  `benefits` varchar(1000) NOT NULL,
  `ca` varchar(1000) NOT NULL,
  `s` varchar(1000) NOT NULL,
  `e` varchar(1000) NOT NULL,
  `priority` varchar(50) NOT NULL,
  `fasttrack` varchar(3) NOT NULL DEFAULT 'N',
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IPid`),
  KEY `IPid` (`IPid`),
  KEY `IPid_2` (`IPid`),
  KEY `IPid_3` (`IPid`),
  KEY `IPid_4` (`IPid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipdetail`
--

INSERT INTO `ipdetail` (`IPid`, `title`, `platform`, `user`, `feature`, `benefits`, `ca`, `s`, `e`, `priority`, `fasttrack`, `file`) VALUES
(1, 'Health Sciences', 'Education', 'Dr. Loreum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, \r\n', 'when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, \n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, \r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, \r\n', '5', 'Yes', NULL),
(2, 'Business Critics', 'don''t know ', 'Unknown', 'when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', 'when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', 'when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', 'when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', 'when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', '2', 'Yes', NULL),
(3, 'Loreum', 'Loreum', 'ubaid', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor\r\n incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis \r\nnostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor\r\n incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis \r\nnostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor\r\n incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis \r\nnostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor\r\n incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis \r\nnostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor\r\n incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis \r\nnostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '4', 'Yes', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_IPid` FOREIGN KEY (`IPid_fk`) REFERENCES `ipdetail` (`IPid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
