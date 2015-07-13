-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2015 at 01:06 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a1575314_sulthan`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `feedback` varchar(500) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=38 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` VALUES(25, 'Kousthub Raja', 'ghja');
INSERT INTO `feedback` VALUES(24, 'Kousthub Raja', 'gf');
INSERT INTO `feedback` VALUES(23, 'Kousthub Raja', 'New one');
INSERT INTO `feedback` VALUES(22, 'Ko', 'yo');
INSERT INTO `feedback` VALUES(21, 'Ko', 'SUCCESSf');
INSERT INTO `feedback` VALUES(20, 'Ko', 'SUCCESS');
INSERT INTO `feedback` VALUES(19, 'Ko', 'hella');
INSERT INTO `feedback` VALUES(18, 'Tom', 'new one');
INSERT INTO `feedback` VALUES(17, 'Kousthub Raja', 'hello browi');
INSERT INTO `feedback` VALUES(33, 'KR', 'Final feedback testing');
INSERT INTO `feedback` VALUES(26, 'Kousthub Raja', 'if hhd');
INSERT INTO `feedback` VALUES(27, 'Kousthub Raja', 'aoa');
INSERT INTO `feedback` VALUES(28, 'Kousthub Raja', 'final');
INSERT INTO `feedback` VALUES(29, 'Kousthub Raja', '?');
INSERT INTO `feedback` VALUES(30, 'Kousthub Raja', 'again');
INSERT INTO `feedback` VALUES(31, 'Kousthub Raja', 'hs');
INSERT INTO `feedback` VALUES(32, 'Kousthub Raja', 'idea');
INSERT INTO `feedback` VALUES(34, 'KR', 'ui');
INSERT INTO `feedback` VALUES(35, 'reena', 'hey');
INSERT INTO `feedback` VALUES(36, 'reena', 'tst');
INSERT INTO `feedback` VALUES(37, 'Kousthub Raja', 'hey');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemName` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` VALUES(1, 'Chapati', 7);
INSERT INTO `items` VALUES(2, 'Porota', 8);
INSERT INTO `items` VALUES(3, 'Chicken Chilly', 50);
INSERT INTO `items` VALUES(4, 'Green Salad', 30);
INSERT INTO `items` VALUES(5, 'Tea', 6);
INSERT INTO `items` VALUES(6, 'Chicken Biriyani', 80);
INSERT INTO `items` VALUES(11, 'Masala Dosa', 30);
INSERT INTO `items` VALUES(10, 'coffee', 8);
INSERT INTO `items` VALUES(12, 'Cup Cake', 20);
INSERT INTO `items` VALUES(13, 'Donut', 20);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `userName` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `itemjson` varchar(1000) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `date` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `totalPrice` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=41 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` VALUES(34, 25, 'Kousthub Raja', '{"userName":"Kousthub Raja","items":[{"1":2},{"3":1}]}', 'CANCELED', '5/6/2015     10:34', '64.0');
INSERT INTO `orders` VALUES(33, 25, 'Kousthub Raja', '{"userName":"Kousthub Raja","items":[{"5":1}]}', 'CANCELED', '5/6/2015     10:28', '6.0');
INSERT INTO `orders` VALUES(32, 25, 'Kousthub Raja', '{"userName":"Kousthub Raja","items":[{"3":1},{"4":1},{"6":1}]}', 'CANCELED', '5/6/2015     0:35', '160.0');
INSERT INTO `orders` VALUES(31, 24, 'reena', '{"userName":"reena","items":[{"2":3},{"3":1},{"5":1}]}', 'PLACED', '4/6/2015     23:18', '80.0');
INSERT INTO `orders` VALUES(30, 24, 'reena', '{"userName":"reena","items":[{"2":4},{"3":1},{"4":1},{"5":3}]}', 'PLACED', '4/6/2015     22:21', '130.0');
INSERT INTO `orders` VALUES(29, 24, 'reena', '{"userName":"reena","items":[{"1":1},{"3":1},{"4":1},{"5":1}]}', 'PLACED', '4/6/2015     22:20', '93.0');
INSERT INTO `orders` VALUES(28, 24, 'reena', '{"userName":"reena","items":[{"1":3},{"3":1},{"5":1}]}', 'PLACED', '4/6/2015     21:59', '77.0');
INSERT INTO `orders` VALUES(27, 24, 'reena', '{"userName":"reena","items":[{"1":1}]}', 'CANCELED', '4/6/2015     21:56', '7.0');
INSERT INTO `orders` VALUES(35, 25, 'Kousthub Raja', '{"userName":"Kousthub Raja","items":[{"4":1}]}', 'CANCELED', '5/6/2015     11:5', '30.0');
INSERT INTO `orders` VALUES(36, 25, 'Kousthub Raja', '{"userName":"Kousthub Raja","items":[{"4":1},{"5":1}]}', 'CANCELED', '5/6/2015     11:10', '36.0');
INSERT INTO `orders` VALUES(37, 25, 'Kousthub Raja', '{"userName":"Kousthub Raja","items":[{"3":1},{"5":1}]}', 'CANCELED', '5/6/2015     11:27', '56.0');
INSERT INTO `orders` VALUES(38, 25, 'Kousthub Raja', '{"userName":"Kousthub Raja","items":[{"4":1},{"10":1}]}', 'PLACED', '5/6/2015     11:38', '38.0');
INSERT INTO `orders` VALUES(39, 25, 'Kousthub Raja', '{"userName":"Kousthub Raja","items":[{"1":3},{"3":1},{"5":1}]}', 'PLACED', '24/8/2015     22:12', '77.0');
INSERT INTO `orders` VALUES(40, 25, 'Kousthub Raja', '{"userName":"Kousthub Raja","items":[{"3":1},{"4":1}]}', 'PLACED', '13/6/2015     22:27', '80.0');

-- --------------------------------------------------------

--
-- Table structure for table `OwnerBankAccount`
--

CREATE TABLE `OwnerBankAccount` (
  `transId` int(11) NOT NULL AUTO_INCREMENT,
  `transTime` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `orderId` int(11) NOT NULL,
  `userName` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `payDirection` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `totalPrice` float NOT NULL,
  PRIMARY KEY (`transId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `OwnerBankAccount`
--

INSERT INTO `OwnerBankAccount` VALUES(3, '', 34, 'Kousthub Raja', 'RECIEVED', 64);
INSERT INTO `OwnerBankAccount` VALUES(11, '', 37, 'Kousthub Raja', 'RECIEVED', 56);
INSERT INTO `OwnerBankAccount` VALUES(8, '', 36, 'Kousthub Raja', 'RECIEVED', 36);
INSERT INTO `OwnerBankAccount` VALUES(9, '', 36, 'Kousthub Raja', 'SENT', 36);
INSERT INTO `OwnerBankAccount` VALUES(10, '', 34, 'Kousthub Raja', 'SENT', 64);
INSERT INTO `OwnerBankAccount` VALUES(12, '2015-07-05 02:08:44', 38, 'Kousthub Raja', 'RECIEVED', 38);
INSERT INTO `OwnerBankAccount` VALUES(13, '', 37, 'Kousthub Raja', 'SENT', 56);
INSERT INTO `OwnerBankAccount` VALUES(14, '2015-07-06 12:41:12', 39, 'Kousthub Raja', 'RECIEVED', 77);
INSERT INTO `OwnerBankAccount` VALUES(15, '2015-07-13 12:57:52', 40, 'Kousthub Raja', 'RECIEVED', 80);

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regId` varchar(300) COLLATE latin1_general_ci NOT NULL COMMENT 'GCM id',
  PRIMARY KEY (`id`),
  UNIQUE KEY `regId` (`regId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` VALUES(22, 'APA91bGF6BVFW7HDmsSXQgmJqvk9ke4sWq6RAiy-g2jXcRBpVCmmKS7k8Aej_x6a7pL-kyPMzorL3VqKA6CJ1grHIB1gea8Sx761PFVxhWAMvuELCwYIKqTqtjKHxK1-vfnHzuvnUn8E');
INSERT INTO `owners` VALUES(21, 'APA91bH4k5p95foxaB38d8Z9KOKgvY-E2px_FG8pS63A9YbxuCQJVCvHf45OPb1D9OfsXqYbkk_sq_QpZ-CncOcW8VP-lRJCMcLAdS7w9k8SnjnP2B2ugshjuV9FhnFJfnt69xpcVDlB');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `creditcard` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES(21, 'Kou', '282');
INSERT INTO `users` VALUES(20, 'Kousthub Raja', '112010');
INSERT INTO `users` VALUES(19, 'Tom', '12903');
INSERT INTO `users` VALUES(18, 'Ko', '1212');
INSERT INTO `users` VALUES(17, 'Kousthub', '1210981836');
INSERT INTO `users` VALUES(16, 'Kousthub Raja', '1100110011');
INSERT INTO `users` VALUES(22, 'KR', 'KR');
INSERT INTO `users` VALUES(23, 'Kousthubraja', '9100');
INSERT INTO `users` VALUES(24, 'reena', '5764');
INSERT INTO `users` VALUES(25, 'Kousthub Raja', '272728');
