-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2015 at 10:27 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblactivity`
--

CREATE TABLE IF NOT EXISTS `tblactivity` (
`activityID` int(11) NOT NULL,
  `activityDescription` text NOT NULL,
  `activityTitle` text NOT NULL,
  `datePosted` datetime NOT NULL,
  `activityStatus` tinyint(4) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblactivityimage`
--

CREATE TABLE IF NOT EXISTS `tblactivityimage` (
`id` int(11) NOT NULL,
  `activityID` int(11) NOT NULL,
  `activityImage` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblaudit`
--

CREATE TABLE IF NOT EXISTS `tblaudit` (
`auditID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `auditDateTime` datetime NOT NULL,
  `auditRemarks` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblaudit`
--

INSERT INTO `tblaudit` (`auditID`, `userID`, `auditDateTime`, `auditRemarks`) VALUES
(1, 1, '2015-09-19 16:21:41', 'admin log-in <span style="color:blue;font-weight:bold;">"admin"</span>');

-- --------------------------------------------------------

--
-- Table structure for table `tblclientuser`
--

CREATE TABLE IF NOT EXISTS `tblclientuser` (
`userID` int(11) NOT NULL,
  `userName` text NOT NULL,
  `userPassword` text NOT NULL,
  `userFirstName` text NOT NULL,
  `userLastName` text NOT NULL,
  `userGender` text NOT NULL,
  `userContactNum` text NOT NULL,
  `userAddress` text NOT NULL,
  `userEmail` text NOT NULL,
  `userCourse` text NOT NULL,
  `userYearGrad` text NOT NULL,
  `userImage` text NOT NULL,
  `userStatus` tinyint(1) NOT NULL,
  `userTypeID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblclientuser`
--

INSERT INTO `tblclientuser` (`userID`, `userName`, `userPassword`, `userFirstName`, `userLastName`, `userGender`, `userContactNum`, `userAddress`, `userEmail`, `userCourse`, `userYearGrad`, `userImage`, `userStatus`, `userTypeID`) VALUES
(1, 'test', 'test', 'test', 'test', 'female', '12345', 'silicon valley', 'ghadafficoc@gmail.com', 'bsit', '2015', '', 1, 1),
(3, '00520040572', 'testing', 'tester', 'test', 'male', '09199999999', 'metro manila', 'tester@yahoo.com', 'BS in Information Technology', '2001', '', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblcompanyuser`
--

CREATE TABLE IF NOT EXISTS `tblcompanyuser` (
`userID` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `userName` text NOT NULL,
  `userPassword` text NOT NULL,
  `userStatus` tinyint(1) NOT NULL,
  `userTypeID` int(11) NOT NULL,
  `userImage` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblcompanyuser`
--

INSERT INTO `tblcompanyuser` (`userID`, `firstName`, `lastName`, `userName`, `userPassword`, `userStatus`, `userTypeID`, `userImage`) VALUES
(1, 'super', 'administrator', 'admin', 'admin', 1, 1, 'Administrator.png'),
(2, 'assitant', 'admin', 'assistant', 'assistant', 1, 3, 'Administrator.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontent`
--

CREATE TABLE IF NOT EXISTS `tblcontent` (
`contentID` int(11) NOT NULL,
  `contentName` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblcontent`
--

INSERT INTO `tblcontent` (`contentID`, `contentName`, `content`) VALUES
(1, 'History', '<p>STI commitment to establishing a lifelong relationship with its graduates has brought forth the inception of the STI Alumni Association, Inc. (STIAA).</p>\r\n<p>STIAA is a non-stock, non-profit organization duly organized and existing under and by virtue of the laws of the Republic of the Philippines. It was registered at the Securities and Exchange Commission on August 11, 1999 after top management approved its formal creation.</p>\r\n<p>The first STIAA office was located at Montepino Building in Makati City and the establishment of which is attributed to the organization effort of the following pioneer officers:</p>\r\n<p>President: Alfred P. Martinez<br />Vice-President: Ferdie B. Balcita<br />Secretary: Rosell L. Villariba<br />Treasurer in Trust: Eddie V. Musico<br />PRO: Leonardo A. Adaptante</p>\r\n<p>Through annual membership dues, STIAA is able to conduct various activities for the benefit of its members. In fact, this is what makes our association distinct. It exists not for the institution but rather for its members. STIAA management tries to ensure that each and every program must have a positive result for the members. On the average, nine thousand (9,000) STI graduates in a year are added to our membership list.</p>\r\n<p>The STI Alumni Association, Inc. is guided by the Board of Trustees and overseen by an Executive Director.</p>'),
(3, 'Vision', '<p>The STI Alumni Association envisions a strong community of STI Alumni who are constantly and actively dedicated to professional growth, personal excellence and social consciousness through our various activities..</p>'),
(4, 'Mission', '<p>The STI Alumni Association exists to connect, inform and serve STIs diverse alumni and friends through strong leadership, dynamic programs and effective communication.</p>'),
(5, 'Contact', '<p style="text-align: center;"><strong>Address: STI Academic Center Cubao, P. Tuazon Blvd. corner 5th Ave., Cubao, Quezon City</strong></p>\r\n<p style="text-align: center;"><strong>Tel. nos.: 421-1029 / 911-1824</strong></p>\r\n<p style="text-align: center;"><strong>Fax: 421-1029 loc. 110</strong></p>\r\n<p style="text-align: center;"><strong>Email address: admissions.office@cubao.sti.edu.ph</strong></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE IF NOT EXISTS `tblcourse` (
`courseID` int(11) NOT NULL,
  `courseName` text NOT NULL,
  `courseStatus` tinyint(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`courseID`, `courseName`, `courseStatus`) VALUES
(1, 'BS in Office Administration', 1),
(2, 'BS in Accounting Technology', 1),
(3, 'AB in Communication', 1),
(4, 'BS in Computer Engineering', 1),
(5, 'BS in Computer Science', 1),
(6, 'BS in Information Technology', 1),
(7, 'BS in Hotel and Restaurant Management', 1),
(8, 'BS in Tourism Management', 1),
(9, 'Associate in Computer Technology', 1),
(10, 'Hospitality and Restaurant Management', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblforumcategory`
--

CREATE TABLE IF NOT EXISTS `tblforumcategory` (
`forumCatID` int(11) NOT NULL,
  `forumCatTitle` text NOT NULL,
  `forumCatDesc` text NOT NULL,
  `dateCreated` datetime NOT NULL,
  `forumCatStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblgallery`
--

CREATE TABLE IF NOT EXISTS `tblgallery` (
`galleryID` int(11) NOT NULL,
  `galleryDesc` text NOT NULL,
  `galleryImageName` text NOT NULL,
  `datePosted` datetime NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbljob`
--

CREATE TABLE IF NOT EXISTS `tbljob` (
`jobID` int(11) NOT NULL,
  `jobTitle` text NOT NULL,
  `jobDesc` text NOT NULL,
  `datePosted` datetime NOT NULL,
  `jobStatus` tinyint(4) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblnews`
--

CREATE TABLE IF NOT EXISTS `tblnews` (
`newsID` int(11) NOT NULL,
  `newsTitle` text NOT NULL,
  `newsDesc` text NOT NULL,
  `newsImage` text NOT NULL,
  `datePosted` datetime NOT NULL,
  `newsStatus` tinyint(4) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblnewsimage`
--

CREATE TABLE IF NOT EXISTS `tblnewsimage` (
`id` int(11) NOT NULL,
  `newsID` int(11) NOT NULL,
  `newsImage` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblpost`
--

CREATE TABLE IF NOT EXISTS `tblpost` (
`postID` int(11) NOT NULL,
  `postTitle` text NOT NULL,
  `postDesc` text NOT NULL,
  `userID` int(11) NOT NULL,
  `topicID` int(11) NOT NULL,
  `datePosted` datetime NOT NULL,
  `postStatus` tinyint(1) NOT NULL,
  `postLevel` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblreply`
--

CREATE TABLE IF NOT EXISTS `tblreply` (
`replyID` int(11) NOT NULL,
  `replyContent` text NOT NULL,
  `postID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `datePosted` datetime NOT NULL,
  `replyLevel` int(11) NOT NULL,
  `replyStatus` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbltopic`
--

CREATE TABLE IF NOT EXISTS `tbltopic` (
`topicID` int(11) NOT NULL,
  `topicTitle` text NOT NULL,
  `topicDesc` text NOT NULL,
  `dateCreated` datetime NOT NULL,
  `forumCatID` int(11) NOT NULL,
  `topicStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblusertype`
--

CREATE TABLE IF NOT EXISTS `tblusertype` (
`typeID` int(11) NOT NULL,
  `typeName` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblusertype`
--

INSERT INTO `tblusertype` (`typeID`, `typeName`) VALUES
(1, 'Admin'),
(2, 'Alumni');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblactivity`
--
ALTER TABLE `tblactivity`
 ADD PRIMARY KEY (`activityID`), ADD UNIQUE KEY `activityID` (`activityID`);

--
-- Indexes for table `tblactivityimage`
--
ALTER TABLE `tblactivityimage`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tblaudit`
--
ALTER TABLE `tblaudit`
 ADD PRIMARY KEY (`auditID`);

--
-- Indexes for table `tblclientuser`
--
ALTER TABLE `tblclientuser`
 ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `tblcompanyuser`
--
ALTER TABLE `tblcompanyuser`
 ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `tblcontent`
--
ALTER TABLE `tblcontent`
 ADD UNIQUE KEY `contentID` (`contentID`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
 ADD PRIMARY KEY (`courseID`), ADD UNIQUE KEY `courseID` (`courseID`);

--
-- Indexes for table `tblforumcategory`
--
ALTER TABLE `tblforumcategory`
 ADD PRIMARY KEY (`forumCatID`);

--
-- Indexes for table `tblgallery`
--
ALTER TABLE `tblgallery`
 ADD PRIMARY KEY (`galleryID`);

--
-- Indexes for table `tbljob`
--
ALTER TABLE `tbljob`
 ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `tblnews`
--
ALTER TABLE `tblnews`
 ADD PRIMARY KEY (`newsID`);

--
-- Indexes for table `tblnewsimage`
--
ALTER TABLE `tblnewsimage`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tblpost`
--
ALTER TABLE `tblpost`
 ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `tblreply`
--
ALTER TABLE `tblreply`
 ADD PRIMARY KEY (`replyID`);

--
-- Indexes for table `tbltopic`
--
ALTER TABLE `tbltopic`
 ADD PRIMARY KEY (`topicID`);

--
-- Indexes for table `tblusertype`
--
ALTER TABLE `tblusertype`
 ADD PRIMARY KEY (`typeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblactivity`
--
ALTER TABLE `tblactivity`
MODIFY `activityID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblactivityimage`
--
ALTER TABLE `tblactivityimage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblaudit`
--
ALTER TABLE `tblaudit`
MODIFY `auditID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblclientuser`
--
ALTER TABLE `tblclientuser`
MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblcompanyuser`
--
ALTER TABLE `tblcompanyuser`
MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblcontent`
--
ALTER TABLE `tblcontent`
MODIFY `contentID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
MODIFY `courseID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tblforumcategory`
--
ALTER TABLE `tblforumcategory`
MODIFY `forumCatID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblgallery`
--
ALTER TABLE `tblgallery`
MODIFY `galleryID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbljob`
--
ALTER TABLE `tbljob`
MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblnews`
--
ALTER TABLE `tblnews`
MODIFY `newsID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblnewsimage`
--
ALTER TABLE `tblnewsimage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpost`
--
ALTER TABLE `tblpost`
MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblreply`
--
ALTER TABLE `tblreply`
MODIFY `replyID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbltopic`
--
ALTER TABLE `tbltopic`
MODIFY `topicID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblusertype`
--
ALTER TABLE `tblusertype`
MODIFY `typeID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
