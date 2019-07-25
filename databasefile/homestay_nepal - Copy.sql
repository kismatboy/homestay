-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2019 at 07:09 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestay_nepal`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `star` int(11) NOT NULL,
  `text` varchar(65) NOT NULL,
  `user_id` varchar(65) NOT NULL,
  `homestay_id` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `id` int(11) NOT NULL,
  `name` varchar(65) NOT NULL,
  `relation` varchar(65) NOT NULL,
  `about` text NOT NULL,
  `social link` varchar(65) NOT NULL,
  `pic` varchar(65) NOT NULL,
  `H_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`id`, `name`, `relation`, `about`, `social link`, `pic`, `H_id`) VALUES
(1, 'suresh sapkota', 'father', 'my name is suresh sapkota. and im running    this home stay for 5 years now', 'facebook.com', 'suresh.jpg', 1),
(2, 'dhana sapkota', 'mother', 'my name is dhana sapkota. and im running    this home stay for 5 years by now. thank you.!', 'facebook.com', 'dhana.jpg', 1),
(3, 'sunil sapkota', 'son', 'hello there my name is sunil sapkota thank you.', 'facebook.com', 'sunil.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `featured_homestay`
--

CREATE TABLE `featured_homestay` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `featured_homestay`
--

INSERT INTO `featured_homestay` (`id`, `blog`) VALUES
(2, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `homestay_id` int(11) NOT NULL,
  `pic_name` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `homestay_id`, `pic_name`) VALUES
(1, 1, 'a.jpg'),
(2, 2, 'b.jpg'),
(3, 1, 'a.jpg'),
(4, 2, 'b.jpg'),
(5, 1, 'a.jpg'),
(6, 1, 'a.jpg'),
(7, 1, 'a.jpg'),
(8, 2, 'b.jpg'),
(9, 1, 'a.jpg'),
(10, 1, 'a.jpg'),
(11, 1, 'a.jpg'),
(12, 1, 'a.jpg'),
(13, 1, 'a.jpg'),
(14, 1, 'a.jpg'),
(15, 1, 'a.jpg'),
(16, 1, 'a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homestay_info`
--

CREATE TABLE `homestay_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(190) NOT NULL,
  `tags` varchar(40) NOT NULL,
  `content` longtext NOT NULL,
  `photo` varchar(50) NOT NULL,
  `location` text NOT NULL,
  `posted` varchar(40) NOT NULL,
  `date` date DEFAULT NULL,
  `author` varchar(40) DEFAULT NULL,
  `category` varchar(40) NOT NULL,
  `meals` text NOT NULL,
  `includes` text NOT NULL,
  `rules` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homestay_info`
--

INSERT INTO `homestay_info` (`id`, `title`, `tags`, `content`, `photo`, `location`, `posted`, `date`, `author`, `category`, `meals`, `includes`, `rules`) VALUES
(1, 'newest homestay', 'A home far form your home', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div><div>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</div><div>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div><div>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div><div>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</div><div>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>', '63560400_1524778647.jpg', '', 'draft', NULL, NULL, '7', 'Hosts can offer a complimentary light breakfast at their discretion. All other meals will incur an additional cost. Meals and any additional payment should be arranged directly with your host.', 'bike for use \r\nlaundry\r\nparking\r\ninternet access\r\nbreakfast\r\n\r\n', 'Please stay clean, please try to leave the room in the same condition as you take. \r\nPlease smoke outside and away from the room. \r\nInform us in advance when you are not having meal, if you go out (bars, restaurant, visit someone) let us know, where you will plan to go and in case of emergency we will know where we can find you,\r\n\r\n(:- Thank you.\r\n\r\nSmoking is not allowed.'),
(2, 'Newest homestay nepal1', 'life,life tips', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div><div>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</div><div>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div><div>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div><div>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</div><div>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>', '19292400_1524780270.jpg', '', 'publish', '2018-04-27', 'admin', '2', '', '', ''),
(3, 'Newest homestay nepal2', 'web,development,earth', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<span style="font-size: 0.857em;">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style="font-size: 0.857em;">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style="font-size: 0.857em;">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style="font-size: 0.857em;">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style="font-size: 0.857em;">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></div>', '46981800_1524780339.jpg', '', 'publish', '2018-04-27', 'admin', '3', '', '', ''),
(4, 'Newest homestay nepal3', 'books,reading,novels', '<span style="font-size: 12.855px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span><span style="font-size: 0.857em;">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style="font-size: 0.857em;">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style="font-size: 0.857em;">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style="font-size: 0.857em;">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style="font-size: 0.857em;">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span style="font-size: 12.855px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span><span style="font-size: 0.857em;">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style="font-size: 0.857em;">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style="font-size: 0.857em;">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style="font-size: 0.857em;">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style="font-size: 0.857em;">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><br>', '98308700_1524790852.jpg', '', 'publish', '2018-04-27', 'admin', '2', '', '', ''),
(5, 'Newest homestay nepal4', 'witting,blogging', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<span style="font-size: 0.857em;">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style="font-size: 0.857em;">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style="font-size: 0.857em;">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style="font-size: 0.857em;">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style="font-size: 0.857em;">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></div>', '57894000_1524856026.jpg', '', 'publish', '2018-04-27', 'etemesi', '6', '', '', ''),
(6, 'Newest homestay nepal5', 'witting,blogging', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<span style="font-size: 0.857em;">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style="font-size: 0.857em;">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style="font-size: 0.857em;">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style="font-size: 0.857em;">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style="font-size: 0.857em;">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span style="font-size: 11.0167px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span><span style="font-size: 11.0167px;">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><span style="font-size: 11.0167px;">quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span><span style="font-size: 11.0167px;">consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</span><span style="font-size: 11.0167px;">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</span><span style="font-size: 11.0167px;">proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></div>', '30278600_1524856225.jpg', '', 'draft', '2018-04-27', 'etemesi', '7', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(40) DEFAULT NULL,
  `twitter` varchar(40) DEFAULT NULL,
  `googleplus` varchar(40) DEFAULT NULL,
  `pinterest` varchar(40) DEFAULT NULL,
  `dribble` varchar(40) DEFAULT NULL,
  `comments_script` text,
  `sharing_script` text,
  `javascript` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `facebook`, `twitter`, `googleplus`, `pinterest`, `dribble`, `comments_script`, `sharing_script`, `javascript`) VALUES
(1, 'https://www.facebook.com/Homestay-nepal-', 'http://www.twitter.com', 'http://www.plus.google.com', 'http://www.pinterest.com', 'http://www.dribble.com', '<div class="fb-comments container" data-href="http://www.uoecu.org/newsview.php?id=<?php echo $row[''id''];?>" data-numposts="20" width="100%"></div>', '<div class="addthis_sharing_toolbox"></div>', '<script>(function(d, s, id) {\n		var js, fjs = d.getElementsByTagName(s)[0];\n		if (d.getElementById(id)) return;\n		js = d.createElement(s); js.id = id;\n		js.src = ''https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=298807240601869'';\n		fjs.parentNode.insertBefore(js, fjs);\n	}(document, ''script'', ''facebook-jssdk''));</script>\n<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57587edcb1479678"></script>');

-- --------------------------------------------------------

--
-- Table structure for table `local_activities`
--

CREATE TABLE `local_activities` (
  `id` int(11) NOT NULL,
  `title` varchar(65) NOT NULL,
  `picture` varchar(65) NOT NULL,
  `keyword` varchar(65) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `local_activities`
--

INSERT INTO `local_activities` (`id`, `title`, `picture`, `keyword`, `about`) VALUES
(1, 'holi', 'holi.jpg', 'celebrate with colors', 'Holi is the festival of love or colors that signifies the victory of superior over immoral. Holi festival is commemorate on February end or starting March.'),
(2, 'diwali', 'diwali.jpg', 'Dipavali is the festival of lights', 'Deepavali (also: Diwali) is one of India''s biggest festivals. The word ''Deepawali'' means rows of lighted lamps. ');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`) VALUES
(1, 'pokhara'),
(2, 'kathmandu'),
(3, 'biratnagar'),
(6, 'baglung'),
(7, 'palpa');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234'),
(2, 'Prasath', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `full_name` varchar(65) DEFAULT NULL,
  `email` varchar(56) DEFAULT NULL,
  `c_date` date DEFAULT NULL,
  `approval` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `full_name`, `email`, `c_date`, `approval`) VALUES
(1, 'sunil sapkota', 'sajilochat@gmail.com', '2019-07-13', 'Allowed'),
(3, 'sunil sapkota', 'sajilochat@gmail.com', '2019-07-13', 'Not Allowed'),
(4, 'sunil sapkota', 'sajilochat@gmail.com', '2019-07-19', 'Not Allowed');

-- --------------------------------------------------------

--
-- Table structure for table `owner_info`
--

CREATE TABLE `owner_info` (
  `id` int(11) NOT NULL,
  `full_name` varchar(65) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `profile_pic` varchar(65) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_info`
--

INSERT INTO `owner_info` (`id`, `full_name`, `username`, `password`, `email`, `phone`, `profile_pic`, `about`) VALUES
(1, 'Sunil Sapkota', 'sunil', 'sunil', 'sunil@gmail.com', 554445, 'sunil.jpg', 'Hello! I am Sunil Sapkota. web Developer, python Developer, Ethical Hacker, Network Pentester\r\n\r\nI''m currently working in Hemja Bhupu Co-opetarive ltd. and also a student at LA Grandee international College. Currently I''m studying BCA(Bachelors in Computer Application ). I''m intrested in ethical hacking and cyber security. Find Me On Facebook');

-- --------------------------------------------------------

--
-- Table structure for table `page_hits`
--

CREATE TABLE `page_hits` (
  `page` varchar(255) NOT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_hits`
--

INSERT INTO `page_hits` (`page`, `count`) VALUES
('test', 2),
('Newest homestay nepal', 2),
('Newest homestay nepal', 2),
('newest homestay', 16),
('Newest homestay nepal1', 2),
('Newest homestay nepal3', 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(1, 'Dr.', 'sunil', 'sapkota', 'Superior Room', 'Single', 7, '2019-07-16', '2019-07-19', 6720.00, 6729.60, 0.00, 'Room only', 9.60, 3),
(2, 'Dr.', 'sunil', 'sapkota', 'Superior Room', 'Single', 2, '2019-07-25', '2019-07-24', -640.00, -643.20, 0.00, 'Room only', -3.20, -1),
(3, 'Dr.', 'sunil444', 'sapkota444', 'Superior Room', 'Single', 2, '2019-07-17', '2019-07-26', 5760.00, 5846.40, 57.60, 'Breakfast', 28.80, 9);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(2, 'Superior Room', 'Double', 'Free', NULL),
(3, 'Superior Room', 'Triple', 'Free', NULL),
(4, 'Single Room', 'Quad', 'Free', NULL),
(5, 'Superior Room', 'Quad', 'Free', NULL),
(6, 'Deluxe Room', 'Single', 'Free', NULL),
(7, 'Deluxe Room', 'Double', 'Free', NULL),
(8, 'Deluxe Room', 'Triple', 'Free', NULL),
(9, 'Deluxe Room', 'Quad', 'Free', NULL),
(10, 'Guest House', 'Single', 'Free', NULL),
(11, 'Guest House', 'Double', 'Free', NULL),
(12, 'Guest House', 'Quad', 'Free', NULL),
(13, 'Single Room', 'Single', 'Free', NULL),
(14, 'Single Room', 'Double', 'Free', NULL),
(15, 'Single Room', 'Triple', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text,
  `LName` text,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL,
  `homestay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`, `homestay_id`) VALUES
(4, 'Dr.', 'sunil', 'sapkota', 'sajilochat@gmail.com', 'Nepali', 'Nepal', '9807577575', 'Guest House', 'Double', '3', 'Half Board', '2019-07-24', '2019-07-04', 'Not Conform', -20, 0),
(5, 'Mrs.', 'sunil', 'sapkota', 'sajilochat22@gmail.com', 'Nepali', 'Nepal', '9807577575', 'Deluxe Room', 'Triple', '4', 'Breakfast', '2019-07-16', '2019-07-26', 'Not Conform', 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `website_name` varchar(40) DEFAULT NULL,
  `tagline` varchar(40) DEFAULT NULL,
  `icon` varchar(40) DEFAULT NULL,
  `keywords` varchar(220) DEFAULT NULL,
  `short_description` varchar(200) DEFAULT NULL,
  `bannertext1` varchar(150) DEFAULT NULL,
  `bannertext2` varchar(150) DEFAULT NULL,
  `bannertext3` varchar(150) DEFAULT NULL,
  `bannertext4` varchar(150) DEFAULT NULL,
  `detailed_description` text,
  `address` varchar(40) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `googlemap` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `website_name`, `tagline`, `icon`, `keywords`, `short_description`, `bannertext1`, `bannertext2`, `bannertext3`, `bannertext4`, `detailed_description`, `address`, `email`, `phone`, `googlemap`) VALUES
(1, 'Homestay Nepal', 'A home far from Home', 'homestay_nepal.ico', 'homestay,best homestay nepal, online nepal homesaty', 'This is an online homesaty management system that has enlisted all the homestay of nepal with their facilities and price along with visitors reviews.', 'Feel like home <span>stay happy :)</span>', 'To be an ideal guest <span>Stay at home</span>', 'A home far from <span>home</span>', 'To feel at home <span>at home</span>', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur.', 'Pokhara,Nepal', 'info@homesataynepal.com', '+977-980-6705494', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.015357823248!2d83.97389211454805!3d28.20684598258768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39959557ec44ec37%3A0x6eeff1f9febe0a28!2sLa+grandee+international+college!5e0!3m2!1sen!2sua!4v1562550795436!5m2!1sen!2suahttps://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.015357823248!2d83.97389211454805!3d28.20684598258768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39959557ec44ec37%3A0x6eeff1f9febe0a28!2sLa+grandee+international+college!5e0!3m2!1sen!2sua!4v1562550795436!5m2!1sen!2sua');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(65) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `aproval` varchar(65) NOT NULL,
  `c_date` date NOT NULL,
  `pic` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitor_info`
--

CREATE TABLE `visitor_info` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(65) NOT NULL,
  `user_agent` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_info`
--

INSERT INTO `visitor_info` (`id`, `ip_address`, `user_agent`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(4, '192.168.195.40', 'Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4) AppleWebKit/537.36'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(9, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_homestay`
--
ALTER TABLE `featured_homestay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog` (`blog`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homestay_info`
--
ALTER TABLE `homestay_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local_activities`
--
ALTER TABLE `local_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner_info`
--
ALTER TABLE `owner_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_info`
--
ALTER TABLE `visitor_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `featured_homestay`
--
ALTER TABLE `featured_homestay`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `homestay_info`
--
ALTER TABLE `homestay_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `local_activities`
--
ALTER TABLE `local_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `owner_info`
--
ALTER TABLE `owner_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `visitor_info`
--
ALTER TABLE `visitor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
