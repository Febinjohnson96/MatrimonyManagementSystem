-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 04, 2020 at 03:33 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmatrimony`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutuser`
--

DROP TABLE IF EXISTS `aboutuser`;
CREATE TABLE IF NOT EXISTS `aboutuser` (
  `abtId` int(5) NOT NULL AUTO_INCREMENT,
  `userID` int(5) NOT NULL,
  `aboutme` text NOT NULL,
  `aboutyou` text NOT NULL,
  PRIMARY KEY (`abtId`),
  KEY `userID` (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutuser`
--

INSERT INTO `aboutuser` (`abtId`, `userID`, `aboutme`, `aboutyou`) VALUES
(1, 14, 'Batman beyond perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'Wonder Woman Bloodlines perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?'),
(2, 13, 'Morbi quis orci eu augue malesuada sollicitudin. Sed sodales eget ipsum ut pulvinar. Nunc nisl mauris, auctor id sodales sit amet, ullamcorper eu orci. Cras et nisl et libero cursus sagittis ut id justo. Mauris euismod eros non est porttitor egestas. Etiam elit neque, semper non risus at, porta iaculis diam. Nunc leo lectus, viverra quis elementum sed, iaculis ac metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris maximus scelerisque mauris at sodales. Nullam eleifend dolor id porttitor egestas. Cras enim magna, fermentum sit amet tincidunt at, lobortis non dolor. Aliquam in quam vel nunc commodo congue. Etiam mauris metus, pellentesque a maximus a, maximus accumsan metus. Aliquam cursus id mauris vel tincidunt', 'Praesent tempus tellus vitae arcu ullamcorper ornare. Nam porttitor porta diam non placerat. Vestibulum diam odio, malesuada sed pharetra eget, tempus ac mauris. In at odio neque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin pellentesque, sapien vel imperdiet placerat, ante orci gravida leo, a egestas lectus libero eget dolor. Integer placerat tempor orci vitae rhoncus. Aliquam erat volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod pulvinar risus non fermentum.'),
(3, 15, 'Windy o weather windy o weather', 'Batman ki jalwani'),
(4, 16, 'Hiii', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `InvoiceID` int(5) NOT NULL AUTO_INCREMENT,
  `userID` int(5) NOT NULL,
  `PckID` int(5) NOT NULL,
  `InvoiceDate` date NOT NULL,
  `InvoiceStatus` varchar(8) NOT NULL,
  PRIMARY KEY (`InvoiceID`),
  KEY `PckID` (`PckID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`InvoiceID`, `userID`, `PckID`, `InvoiceDate`, `InvoiceStatus`) VALUES
(1, 9, 1, '2020-05-29', '1'),
(2, 7, 2, '2020-03-18', '1'),
(3, 12, 1, '2020-04-01', '1'),
(10, 12, 2, '2020-04-30', '1'),
(11, 13, 2, '2020-08-03', '1'),
(12, 15, 2, '2020-08-04', '1'),
(13, 16, 2, '2020-08-04', '1');

-- --------------------------------------------------------

--
-- Stand-in structure for view `invoicedetails`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `invoicedetails`;
CREATE TABLE IF NOT EXISTS `invoicedetails` (
`userID` int(5)
,`InvoiceDate` date
,`firstName` varchar(30)
,`lastName` varchar(30)
,`PckName` varchar(10)
,`PckAmt` int(3)
,`PckValidity` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `invoice_package_details`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `invoice_package_details`;
CREATE TABLE IF NOT EXISTS `invoice_package_details` (
`InvoiceID` int(5)
,`userID` int(5)
,`Pid` int(5)
,`InvoiceDate` date
,`InvoiceStatus` varchar(8)
,`PckID` int(5)
,`PckName` varchar(10)
,`PckAmt` int(3)
,`PckValidity` int(3)
,`PckStatus` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `loginID` int(5) NOT NULL AUTO_INCREMENT,
  `userID` int(5) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`loginID`),
  KEY `userID` (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginID`, `userID`, `time`) VALUES
(6, 13, '2020-05-07 15:17:51'),
(7, 13, '2020-05-10 13:24:19'),
(8, 13, '2020-05-12 09:33:10'),
(9, 13, '2020-05-14 04:38:51'),
(10, 13, '2020-05-16 19:06:12'),
(11, 13, '2020-05-17 07:08:31'),
(12, 13, '2020-05-17 15:57:04'),
(13, 13, '2020-05-17 18:46:42'),
(14, 13, '2020-05-19 09:55:21'),
(15, 13, '2020-05-22 18:04:11'),
(16, 13, '2020-05-24 21:53:25'),
(17, 13, '2020-05-25 18:41:46'),
(18, 13, '2020-05-26 19:29:28'),
(19, 13, '2020-05-26 20:22:05'),
(20, 13, '2020-05-27 12:10:00'),
(21, 13, '2020-05-28 21:14:06'),
(22, 9, '2020-05-28 21:33:06'),
(23, 13, '2020-05-28 21:45:15'),
(24, 13, '2020-05-29 19:45:38'),
(25, 13, '2020-05-29 21:35:40'),
(26, 13, '2020-05-31 10:58:54'),
(27, 13, '2020-05-31 11:36:58'),
(28, 13, '2020-05-31 13:56:47'),
(29, 13, '2020-06-01 10:46:32'),
(30, 13, '2020-06-02 15:31:30'),
(31, 14, '2020-06-02 16:33:15'),
(32, 13, '2020-06-02 16:34:03'),
(33, 13, '2020-06-03 07:17:47'),
(34, 13, '2020-06-13 14:27:30'),
(35, 13, '2020-06-15 07:47:42'),
(36, 14, '2020-06-15 07:48:18'),
(37, 14, '2020-06-18 08:17:36'),
(38, 13, '2020-07-02 13:54:18'),
(39, 13, '2020-07-02 14:38:21'),
(40, 13, '2020-07-02 14:39:31'),
(41, 13, '2020-07-02 15:28:33'),
(42, 13, '2020-07-02 15:29:12'),
(43, 13, '2020-07-02 15:29:32'),
(44, 13, '2020-07-03 13:56:29'),
(46, 13, '2020-07-06 17:06:51'),
(47, 13, '2020-07-06 18:43:18'),
(48, 13, '2020-07-28 14:40:59'),
(49, 13, '2020-07-30 17:44:42'),
(50, 13, '2020-07-30 18:39:48'),
(51, 13, '2020-08-02 10:08:54'),
(52, 13, '2020-08-02 18:14:45'),
(53, 13, '2020-08-02 18:52:46'),
(54, 13, '2020-08-02 18:53:20'),
(55, 13, '2020-08-02 18:53:47'),
(56, 13, '2020-08-03 15:00:48'),
(57, 13, '2020-08-03 15:01:46'),
(58, 8, '2020-08-03 15:03:34'),
(59, 15, '2020-08-04 02:22:51'),
(60, 15, '2020-08-04 02:28:46'),
(61, 8, '2020-08-04 02:51:29'),
(62, 13, '2020-08-04 03:12:07'),
(63, 13, '2020-08-04 03:12:18'),
(64, 8, '2020-08-04 03:56:31'),
(65, 13, '2020-08-04 03:57:42'),
(66, 8, '2020-08-04 04:24:27'),
(67, 16, '2020-08-04 04:42:35'),
(68, 16, '2020-08-04 04:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `matchingcredentials`
--

DROP TABLE IF EXISTS `matchingcredentials`;
CREATE TABLE IF NOT EXISTS `matchingcredentials` (
  `matchmakeID` int(5) NOT NULL AUTO_INCREMENT,
  `userID` int(5) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `district` varchar(30) NOT NULL,
  `education` varchar(30) NOT NULL,
  `profession` varchar(30) NOT NULL,
  PRIMARY KEY (`matchmakeID`),
  KEY `userID` (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matchingcredentials`
--

INSERT INTO `matchingcredentials` (`matchmakeID`, `userID`, `age`, `gender`, `district`, `education`, `profession`) VALUES
(2, 13, 28, 'female', 'thrissur', 'CA', 'Accountant'),
(3, 15, 30, 'male', 'thrissur', 'CA', 'CA'),
(4, 16, 30, 'male', 'Palakkad', 'CA', 'CA');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `messageID` int(5) NOT NULL AUTO_INCREMENT,
  `userID` int(5) NOT NULL,
  `receiver ID` int(5) NOT NULL,
  `statusID` int(5) NOT NULL,
  `messageText` varchar(100) NOT NULL,
  `messageTime` datetime NOT NULL,
  PRIMARY KEY (`messageID`),
  KEY `userID` (`userID`),
  KEY `statusID` (`statusID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

DROP TABLE IF EXISTS `package`;
CREATE TABLE IF NOT EXISTS `package` (
  `PckID` int(5) NOT NULL,
  `PckName` varchar(10) NOT NULL,
  `PckAmt` int(3) NOT NULL,
  `PckValidity` int(3) NOT NULL,
  `PckStatus` int(11) NOT NULL,
  PRIMARY KEY (`PckID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`PckID`, `PckName`, `PckAmt`, `PckValidity`, `PckStatus`) VALUES
(1, 'Trial', 0, 10, 1),
(2, 'Prime', 1000, 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `paymentID` int(5) NOT NULL AUTO_INCREMENT,
  `userID` int(5) NOT NULL,
  `amount` decimal(5,0) NOT NULL,
  `date` date NOT NULL,
  `time` time(5) NOT NULL,
  PRIMARY KEY (`paymentID`),
  KEY `userID` (`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

DROP TABLE IF EXISTS `priority`;
CREATE TABLE IF NOT EXISTS `priority` (
  `priorityID` int(5) NOT NULL AUTO_INCREMENT,
  `Priority` varchar(30) NOT NULL,
  PRIMARY KEY (`priorityID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`priorityID`, `Priority`) VALUES
(1, 'full power'),
(2, 'custom');

-- --------------------------------------------------------

--
-- Stand-in structure for view `profile_view`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `profile_view`;
CREATE TABLE IF NOT EXISTS `profile_view` (
`firstName` varchar(30)
,`lastName` varchar(30)
,`age` int(3)
,`profession` varchar(30)
,`education` varchar(30)
,`propic` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `roleID` int(5) NOT NULL AUTO_INCREMENT,
  `priorityID` int(5) NOT NULL,
  `Role` varchar(10) NOT NULL,
  PRIMARY KEY (`roleID`),
  KEY `priorityID` (`priorityID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleID`, `priorityID`, `Role`) VALUES
(1, 1, 'Admin'),
(2, 2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `userpicture`
--

DROP TABLE IF EXISTS `userpicture`;
CREATE TABLE IF NOT EXISTS `userpicture` (
  `picID` int(5) NOT NULL AUTO_INCREMENT,
  `userID` int(5) NOT NULL,
  `propic` varchar(30) NOT NULL,
  PRIMARY KEY (`picID`),
  KEY `userID` (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userpicture`
--

INSERT INTO `userpicture` (`picID`, `userID`, `propic`) VALUES
(40, 9, 'Cute.jpg'),
(41, 12, 'EWy-zNpUcAAa3mG.jpg'),
(42, 13, '3.jpg'),
(43, 10, '11.jpg'),
(44, 14, 'hjl.jpg'),
(45, 15, 'propic.jpg'),
(46, 16, 'propic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(5) NOT NULL,
  `roleID` int(5) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `education` varchar(30) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `locality` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `pin` int(6) NOT NULL,
  PRIMARY KEY (`userID`),
  KEY `roleID` (`roleID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `roleID`, `firstName`, `lastName`, `age`, `username`, `password`, `gender`, `education`, `profession`, `district`, `locality`, `phone`, `pin`) VALUES
(9, 2, 'user33', 'threeeee', 29, 'userthree', 'user3', 'male', 'b.tech', 'Batman', 'Kollam', 'Kolangattukara', 9526312034, 680541),
(7, 1, 'user', 'one', 28, 'userone', 'user', 'male', 'btech', 'admin', 'ekm', 'Mundur', 8957412360, 680541),
(8, 1, 'user2', 'two', 29, 'usertwo', 'user2', 'female', 'BBA', 'Designer', 'Thrissur', 'Viyyur', 8521479630, 680541),
(10, 2, 'user4', 'four', 27, 'user4', 'user4', 'female', 'CA', 'Accountant', 'Kollam', 'dfvb', 785963, 8526),
(13, 2, 'user7', 'user7', 30, 'user7', 'user7', 'male', 'fsd', 'sdfsfsf', 'Kollam', 'adasadss', 5244454, 8596),
(12, 2, 'user5', 'five', 25, 'user5', 'user5', 'male', 'BBA', 'Accountant', 'Thrissur', 'dfvb', 785963, 8526),
(15, 2, 'User9', 'user9', 30, 'user9', 'user9', 'male', 'CA', 'CA', 'Palakkad', 'mundur', 8529631472, 685478),
(14, 2, 'user8', 'user8', 23, 'user8', 'user8', 'female', 'asdadaa', 'addad', 'Thrissur', 'adasdad', 8523697410, 758260),
(16, 2, 'user10', 'user10', 26, 'user10', 'user10', 'Female', 'CA', 'CA', 'Palakkad', 'mundur', 7859641230, 859623);

-- --------------------------------------------------------

--
-- Table structure for table `userstatus`
--

DROP TABLE IF EXISTS `userstatus`;
CREATE TABLE IF NOT EXISTS `userstatus` (
  `statusID` int(5) NOT NULL AUTO_INCREMENT,
  `userID` int(5) NOT NULL,
  `paymentID` int(5) NOT NULL,
  `Status` varchar(30) NOT NULL,
  PRIMARY KEY (`statusID`),
  KEY `userID` (`userID`),
  KEY `paymentID` (`paymentID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_public`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `user_public`;
CREATE TABLE IF NOT EXISTS `user_public` (
`userID` int(5)
,`roleID` int(5)
,`firstName` varchar(30)
,`lastName` varchar(30)
,`age` int(3)
,`gender` varchar(7)
,`education` varchar(30)
,`profession` varchar(30)
,`district` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure for view `invoicedetails`
--
DROP TABLE IF EXISTS `invoicedetails`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `invoicedetails`  AS  select `a`.`userID` AS `userID`,`a`.`InvoiceDate` AS `InvoiceDate`,`b`.`firstName` AS `firstName`,`b`.`lastName` AS `lastName`,`c`.`PckName` AS `PckName`,`c`.`PckAmt` AS `PckAmt`,`c`.`PckValidity` AS `PckValidity` from ((`invoice` `a` join `users` `b`) join `package` `c`) where ((`a`.`userID` = `b`.`userID`) and (`a`.`PckID` = `c`.`PckID`)) ;

-- --------------------------------------------------------

--
-- Structure for view `invoice_package_details`
--
DROP TABLE IF EXISTS `invoice_package_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `invoice_package_details`  AS  (select `i`.`InvoiceID` AS `InvoiceID`,`i`.`userID` AS `userID`,`i`.`PckID` AS `Pid`,`i`.`InvoiceDate` AS `InvoiceDate`,`i`.`InvoiceStatus` AS `InvoiceStatus`,`p`.`PckID` AS `PckID`,`p`.`PckName` AS `PckName`,`p`.`PckAmt` AS `PckAmt`,`p`.`PckValidity` AS `PckValidity`,`p`.`PckStatus` AS `PckStatus` from (`invoice` `i` left join `package` `p` on((`i`.`PckID` = `p`.`PckID`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `profile_view`
--
DROP TABLE IF EXISTS `profile_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_view`  AS  select `users`.`firstName` AS `firstName`,`users`.`lastName` AS `lastName`,`users`.`age` AS `age`,`users`.`profession` AS `profession`,`users`.`education` AS `education`,`userpicture`.`propic` AS `propic` from (`users` join `userpicture`) where (`users`.`userID` = `userpicture`.`userID`) ;

-- --------------------------------------------------------

--
-- Structure for view `user_public`
--
DROP TABLE IF EXISTS `user_public`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_public`  AS  select `users`.`userID` AS `userID`,`users`.`roleID` AS `roleID`,`users`.`firstName` AS `firstName`,`users`.`lastName` AS `lastName`,`users`.`age` AS `age`,`users`.`gender` AS `gender`,`users`.`education` AS `education`,`users`.`profession` AS `profession`,`users`.`district` AS `district` from `users` where (`users`.`roleID` <> 1) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
