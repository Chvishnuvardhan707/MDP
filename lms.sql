-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 02, 2019 at 08:29 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `adm_Id` int(11) NOT NULL AUTO_INCREMENT,
  `adm_user` varchar(255) DEFAULT NULL,
  `adm_pwd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`adm_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adm_Id`, `adm_user`, `adm_pwd`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

DROP TABLE IF EXISTS `tbl_answer`;
CREATE TABLE IF NOT EXISTS `tbl_answer` (
  `ans_Id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(255) DEFAULT NULL,
  `quiz_Id` int(11) DEFAULT NULL,
  `user_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ans_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cat_Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `side_heading` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`cat_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_Id`, `name`, `description`, `image`, `rating`, `side_heading`) VALUES
(5, 'Web Design for Beginners : Learn HTML5 Programming', 'What you\'ll learn\r\nBy the end of the course you will be able to create full fledged HTML5 websites\r\nYou will be able to use features like Drag and Drop, Geo location and Web Storage to create immersible user experience.\r\nYou will have through understanding of both HTML and CSS', 'html5.png', 0, 'Vishnu'),
(6, 'Web Design for Beginners : Learn CSS3', 'What you\'ll learn\r\nReal-world skills to build real-world websites: professional, beautiful and truly responsive websites\r\nA huge project that will teach you everything you need to know to get started with HTML5 and CSS3\r\nThe proven 7 real-world steps from complete scratch to a fully functional and optimized website', 'css.png', 0, 'Praneeth, Vishnu'),
(7, 'Build a Responsive Real world website with Bootstrap4', 'Step by Step learn Bootstrap 4 with tutorial and by creating 10 interesting projects.\r\nCreate 10 amazing projects using Bootstrap 4\r\nLearn bootstrap classes and grid system.\r\nLearn CSS3 tricks and techniques.', 'bootstrap.png', 0, 'Praneeth'),
(8, 'Modern Java Script for Beginners', 'What you\'ll learn\r\nModular learning sections & 10 real world projects with pure JavaScript\r\nMaster the DOM (document object model) WITHOUT jQuery\r\nAsynchronous programming with Ajax, Fetch API, Promises & Async / Await', 'javascript.png', 0, 'Ravi Teja'),
(9, 'Java Programming for complete Beginners', 'What you\'ll learn\r\nLearn the core Java skills needed to apply for Java developer positions in just 14 hours.\r\nBe able to sit for and pass the Oracle Java Certificate exam if you choose.\r\nBe able to demonstrate your understanding of Java to future employers.', 'java.png', 0, 'Moulika '),
(10, 'Learn Python Programming Master Class', 'What you\'ll learn\r\nHave a fundamental understanding of the Python programming language.\r\nHave the skills and understanding of Python to confidently apply for Python programming jobs.\r\nAcquire the pre-requisite Python skills to move into specific branches - Machine Learning, Data Science, etc..', 'python.png', 0, 'mcqocnicbk, nioan kll.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

DROP TABLE IF EXISTS `tbl_comment`;
CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `comment_Id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text,
  `datetime` datetime DEFAULT NULL,
  `sub_Id` int(11) DEFAULT NULL,
  `user_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`comment_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_Id`, `comment`, `datetime`, `sub_Id`, `user_Id`) VALUES
(1, '', '2015-06-01 07:48:26', 0, 0),
(2, '', '2015-06-01 07:48:56', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `contact_Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(1) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`contact_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_Id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(2, 'asd', 'sample@gmail.com', 343, 'sa', 'sadas'),
(3, 'asd', 'asdh@yahoo.com', 324, 'asd', 'asdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(4, 'Sample', 'asdh@yahoo.com', 24, 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

DROP TABLE IF EXISTS `tbl_course`;
CREATE TABLE IF NOT EXISTS `tbl_course` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`id`, `name`, `Type`) VALUES
(5, 'Introduction.pdf', 'Document'),
(5, 'Structure_of_HTML.pdf', 'Document'),
(5, 'HTML_TAGS.pdf', 'Document'),
(5, 'Header_footer.pdf', 'Document'),
(5, 'Attributes.pdf', 'Document'),
(5, 'Article_Aside_Tag.pdf', 'Document'),
(5, 'Formatting_Text.mp4', 'Video'),
(5, 'Forms.mp4', 'Video'),
(5, 'Header_Tags.mp4', 'Video'),
(5, 'Hello_World.mp4', 'Video'),
(5, 'HTML_Project.mp4', 'Video'),
(5, 'Iframes.mp4', 'Video'),
(5, 'Images.mp4', 'Video'),
(5, 'Links.mp4', 'Video'),
(5, 'Ordered_Lists.mp4', 'Video'),
(5, 'Structure_of_Webpage.mp4', 'Video'),
(5, 'Tables.mp4', 'Video'),
(5, 'Unordered_Lists.mp4', 'Video'),
(7, 'Introduction.pdf', 'Document'),
(7, 'installation.pdf', 'Document'),
(7, 'The_Grid_System.pdf', 'Document'),
(7, 'Badges.pdf', 'Document'),
(7, 'Tooltips.pdf', 'Document'),
(7, 'Dropdowns.pdf', 'Document'),
(7, 'Components.mp4', 'Video'),
(7, 'Forms_Tables.mp4', 'Video'),
(7, 'Hello_World.mp4', 'Video'),
(7, 'Modals.mp4', 'Video'),
(7, 'Navbars.mp4', 'Video'),
(7, 'Project_App_Landing_Page_Introduction.mp4', 'Video'),
(7, 'Scrollspy.mp4', 'Video'),
(7, 'The_Grid_System.mp4', 'Video'),
(7, 'What_is_Bootstrap.mp4', 'Video'),
(6, 'Introduction.pdf', 'Document'),
(6, 'Fonts_Opacity.pdf', 'Document'),
(6, 'Dropdowns.pdf', 'Document'),
(6, 'CSS_Positining.pdf', 'Document'),
(6, 'CSS_Background.pdf', 'Document'),
(6, 'Border_margin_padding.pdf', 'Document'),
(6, 'Aligning_Text.mp4', 'Video'),
(6, 'Borders.mp4', 'Video'),
(6, 'Classes.mp4', 'Video'),
(6, 'Colors.mp4', 'Video'),
(6, 'Divs.mp4', 'Video'),
(6, 'Fonts.mp4', 'Video'),
(6, 'Internal_CSS.mp4', 'Video'),
(6, 'Margins.mp4', 'Video'),
(6, 'Padding.mp4', 'Video'),
(6, 'Positioning.mp4', 'Video'),
(6, 'Styling_Links.mp4', 'Video'),
(6, 'What_Is_CSS.mp4', 'Video'),
(8, 'Introduction .pdf', 'Document'),
(8, 'Hello_world.pdf', 'Document'),
(8, 'Loops.pdf', 'Document'),
(8, 'Objects.pdf', 'Document'),
(8, 'Variables_datatypes.pdf', 'Document'),
(8, 'Classes.pdf', 'Document'),
(8, 'Functions.pdf', 'Document'),
(8, 'Accessing_Elements.mp4', 'Video'),
(8, 'Arrays.mp4', 'Video'),
(8, 'Changing_Website_Content.mp4', 'Video'),
(8, 'Disappearing_Circles.mp4', 'Video'),
(8, 'For_Loops.mp4', 'Video'),
(8, 'Functions.mp4', 'Video'),
(8, 'If_Statements.mp4', 'Video'),
(8, 'JavaScript_Game_How_Many_Fingers.mp4', 'Video'),
(8, 'Responding_To_Click.mp4', 'Video'),
(8, 'Variables.mp4', 'Video'),
(8, 'What_Is_JavaScript.mp4', 'Video'),
(8, 'While_Loops.mp4', 'Video'),
(10, 'INTRODUCTION.pdf', 'Document'),
(10, 'VARIABLES.pdf', 'Document'),
(10, 'POLYMORPHISM.pdf', 'Document'),
(10, 'FUNCTIONS .pdf', 'Document'),
(10, 'DATA_TYPES.pdf', 'Document'),
(10, 'CLASS.pdf', 'Document');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz`
--

DROP TABLE IF EXISTS `tbl_quiz`;
CREATE TABLE IF NOT EXISTS `tbl_quiz` (
  `quiz_Id` int(11) NOT NULL AUTO_INCREMENT,
  `question_name` text,
  `answer1` varchar(255) DEFAULT '',
  `answer2` varchar(255) DEFAULT NULL,
  `answe3` varchar(255) DEFAULT NULL,
  `answer4` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`quiz_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_quiz`
--

INSERT INTO `tbl_quiz` (`quiz_Id`, `question_name`, `answer1`, `answer2`, `answe3`, `answer4`, `answer`) VALUES
(1, '<pre>\r\n<span style=\"color:rgb(0, 136, 0)\">What does PHP stand for?</span></pre>\r\n', '4', '', '', '', ''),
(2, '<pre>\r\n<span style=\"color:rgb(0, 136, 0)\">What does PHP stand for?</span></pre>\r\n', 'Personal Home Page', 'Personal Hypertext Processor', 'Private Home Page', 'PHP: Hypertext Preprocessor', '4'),
(3, '<p>asd</p>\r\n', 'asd', 'asd', 'asd', 'asd', '3'),
(4, '<p>asd</p>\r\n', '45', '45', '45', '452', '2'),
(5, '<p>asd</p>\r\n', 'gfgf', 'fg', 'fg', 'fg', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subtopic`
--

DROP TABLE IF EXISTS `tbl_subtopic`;
CREATE TABLE IF NOT EXISTS `tbl_subtopic` (
  `sub_Id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_title` varchar(255) DEFAULT NULL,
  `sub_content` text,
  `datetime` datetime DEFAULT NULL,
  `topic_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`sub_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subtopic`
--

INSERT INTO `tbl_subtopic` (`sub_Id`, `sub_title`, `sub_content`, `datetime`, `topic_Id`) VALUES
(1, 'sample', '<p><iframe src=\"https://www.youtube.com/embed/zg-J7jVNix0\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p>asdasd</p>', '2015-05-31 09:46:27', 11),
(2, 'Lorem ipsum', '<h3>sample</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div>\r\n\r\n<div>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</div>\r\n\r\n<div>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div>\r\n\r\n<div>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div>\r\n\r\n<div>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</div>\r\n\r\n<div>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div><a href=\"http://iwantsourcecodes.com\" target=\"_blank\">http://iwantsourcecodes.com</a></div>\r\n', '2015-05-31 06:00:53', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

DROP TABLE IF EXISTS `tbl_teacher`;
CREATE TABLE IF NOT EXISTS `tbl_teacher` (
  `teacher_Id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`teacher_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`teacher_Id`, `fname`, `mname`, `lname`, `uname`, `pwd`) VALUES
(1, 'sample', 'sample', 'sample', 'sample', 'sample'),
(7, 'lorems', 'lorem', 'lorem', 'lorem', 'lorem');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_topic`
--

DROP TABLE IF EXISTS `tbl_topic`;
CREATE TABLE IF NOT EXISTS `tbl_topic` (
  `topic_Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `datetime_posted` timestamp NULL DEFAULT NULL,
  `cat_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`topic_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_topic`
--

INSERT INTO `tbl_topic` (`topic_Id`, `title`, `content`, `datetime_posted`, `cat_Id`) VALUES
(11, 'samples', '<p><iframe src=\"https://www.youtube.com/embed/KmCkQEkeVn8\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p>edited</p>', '2015-05-16 04:40:49', 3),
(13, 'sample', '<p>sample</p>\r\n', '2015-05-30 03:07:01', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_Id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `yrlvl` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_Id`, `fname`, `mname`, `lname`, `dob`, `gender`, `course`, `yrlvl`, `username`, `password`) VALUES
(1, 'samples', 'sample', 'sample', '2015-05-20', 'Male', 'BSIT', '4', 'sample', '5e8ff9bf55ba3508199d22e984129be6'),
(2, 'test', 'test', 'test', '2015-05-08', 'Female', 'BSIT', '1', 'test', '098f6bcd4621d373cade4e832627b4f6'),
(3, 'aaa', 'aaa', 'aaa', '2015-05-07', 'Male', 'BSCS', '4', 'aaa', '47bce5c74f589f4867dbd57e9ca9f808'),
(4, 'lorem', 'lorem', 'lorem', '2015-04-30', 'Male', 'BSIT', '2', 'lorem', 'd2e16e6ef52a45b7468f1da56bba1953');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD CONSTRAINT `tbl_course_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbl_category` (`cat_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
