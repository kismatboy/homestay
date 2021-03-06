-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2019 at 03:37 PM
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
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `ad_id` int(11) NOT NULL,
  `homestay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ad_id`, `homestay_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `allowed`
--

CREATE TABLE `allowed` (
  `id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `include` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allowed`
--

INSERT INTO `allowed` (`id`, `h_id`, `include`) VALUES
(3, 1, 'male\r\n'),
(4, 1, 'family'),
(5, 1, '\r\nstudents'),
(6, 1, 'couples\r\n'),
(7, 1, '\r\nfemale\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `homestay_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `parent_comment_id`, `homestay_id`, `comment`, `comment_sender_name`, `date`) VALUES
(32, 0, 1, 'erfefefer', 'hello there', '2019-08-18 12:37:11'),
(33, 0, 1, 'testing with different homestay id', 'hello there', '2019-08-18 12:39:10'),
(34, 33, 1, 'testing reply button', 'sunil', '2019-08-18 12:39:25'),
(35, 32, 1, 'reply hello there', 'kismat', '2019-08-18 12:39:45'),
(36, 0, 2, 'comment on id 2 gandruk homestay', 'hello there', '2019-08-18 12:45:05'),
(37, 36, 2, 'check reply of ghandruk homestay 2', 'test', '2019-08-18 12:45:23'),
(38, 0, 1, 'wefsw', 'erfws', '2019-08-18 12:49:56'),
(39, 0, 1, 'new comment', 'romeo', '2019-08-19 11:07:40'),
(40, 0, 1, 'ttt666777', 'dfrfv', '2019-08-19 17:08:14'),
(41, 0, 10, 'what is the cost of 2 rooms for 1 nights and 2 day', 'sunil', '2019-08-23 15:07:36');

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
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(5, 'How to register new homestay?\r\n', '	Go to home page<br>\r\n	>	Click on REGISTER button\r\n	<br>>	Enter your details\r\n	<br>>	Enter homestay information\r\n	<br>>	Click on SUBMIT button'),
(6, 'How to manage language?\r\n', '<br> >	Go to home page\r\n<br> >	Scroll down to the bottom\r\n<br> >	Click on the select language\r\n<br> >	Choose your desired language'),
(10, 'How to search for desired homestay?', '	<br> >>	Go to home page\r\n	<br> >>	Type the area you are looking for homestay (pokhara/kathmandu...)\r\n	<br> >>	Click on SEARCH button in the header section\r\n	<br> >>	Select homestay'),
(11, 'How to book your room?\r\n', '<br> >>	Go to home page\r\n	<br> >>	Go to the profile of homestay your desired homestay.\r\n	<br> >>	Click on RESERVATION \r\n	<br> >>	 Check the availability of required rooms\r\n	<br> >>	Fill out the information '),
(12, 'How to pay for your room?\r\n', '<br> >>	During booking process there is a payment section.\r\n	<br> >>	Pay through bank or esewa\r\n	<br> >>	Click the receipt and attach it in the payment section \r\n'),
(13, 'How to see review and ratings?\r\n', '	<br> >>	Go to the profile of your desired homestays\r\n	<br> >>	Below it''s information there will be the particular reviews and ratings');

-- --------------------------------------------------------

--
-- Table structure for table `featured_homestay`
--

CREATE TABLE `featured_homestay` (
  `id` int(10) UNSIGNED NOT NULL,
  `homestay` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `featured_homestay`
--

INSERT INTO `featured_homestay` (`id`, `homestay`) VALUES
(2, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `Features` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `h_id`, `Features`) VALUES
(1, 1, 'bike for use'),
(2, 1, 'laundry'),
(3, 1, 'parking'),
(4, 1, 'breakfast');

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
(2, 2, 'b.jpg'),
(4, 2, 'b.jpg'),
(8, 2, 'b.jpg'),
(17, 0, '1564200514-66511303_369679910374100_1920999267883810816_n.jpg'),
(18, 0, '1564200599-dilo aaio gilo aaio.jpg'),
(19, 0, '1564200960-64735722_891685634503034_986357686410936320_n.jpg'),
(20, 0, '1564201046-20141117_161647.jpg'),
(23, 1, 'Homestay-Eco-Resort-Chitwan-Nepal-889x528.jpg'),
(24, 7, 'Homestay-Eco-Resort-Chitwan-Nepal.jpg'),
(25, 1, '2pano-e1520412505322.jpg'),
(26, 1, '175831420.jpg'),
(27, 1, 'Homestay-in-Nepal.jpg'),
(28, 1, 'images (1).jpg'),
(29, 1, 'room-patan-communtiy-homestay.jpg'),
(30, 1, 'images (5).jpg'),
(31, 1, 'images (4).jpg'),
(32, 1, 'images (2).jpg'),
(33, 1, 'images (3).jpg'),
(34, 8, 'facebook error.JPG'),
(35, 9, 'lomanthang.jpg'),
(36, 9, 'Gauri-Gai.jpg'),
(37, 9, 'ghale-gaun-trek-1.jpg'),
(38, 10, '777.jpg'),
(39, 10, '43006820_10215597274897887_7464817782249488384_n.jpg'),
(40, 10, 'Capture.JPG'),
(45, 11, 'test3.jpg'),
(47, 12, 'images1 (5).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homestay_info`
--

CREATE TABLE `homestay_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(190) NOT NULL,
  `tags` varchar(40) NOT NULL,
  `owner_name` varchar(65) NOT NULL,
  `icon` varchar(65) NOT NULL,
  `content` longtext NOT NULL,
  `photo` varchar(50) NOT NULL,
  `location` text NOT NULL,
  `posted` varchar(40) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `address` varchar(40) NOT NULL,
  `meals` text NOT NULL,
  `video_link` text NOT NULL,
  `rules` text NOT NULL,
  `Features` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homestay_info`
--

INSERT INTO `homestay_info` (`id`, `title`, `tags`, `owner_name`, `icon`, `content`, `photo`, `location`, `posted`, `date`, `address`, `meals`, `video_link`, `rules`, `Features`) VALUES
(1, 'Mustang(Thini)', 'Best memories starts here.', 'sunil99', 'Homestay-Eco-Resort-Chitwan-Nepal-889x528.jpg', 'It takes 30 minutes’ walk from Jomsom. The name of this village originates from Tibetan word Thin (lit. base or root). It is the oldest village in Panch Gaun (lit. five villages) region. Historically, Thini was an important village in the valley where famous king Thang Mig Chen used to rule over. As such every village had to pay tribute to Thini (either produce or labour). The village still has Kot Ghar (arsenal) where artilleries are preserved. It is also a gateway to Tilicho Lake, which is about two days walk. Other attractions include Thini Bonpo Gompa, Thini Bhadra Festival and Bhomo Ama Festival. Thini Bonpo Gompa having its affiliation with Lubra Gompa is currently looked after by the monks of Kuchep Terenga Gompa, belonging to Nyingma-Pa sect. Idols of Bon deities are placed at altar of the monastery. Thini Bhadra festival falling in August/September lasts for three days. The festival is celebrated with religious plays and is supposed to bring happiness to the village. Bhomo Ama is major festival of Thini and falls in April in every 12 years’ time for about 15 days. There are many Homestays in Thini which provides various facilities for the people.\n\n', 'Homestay-Eco-Resort-Chitwan-Nepal-889x528.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.129673079171!2d85.30907421453482!3d27.71328228278946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fdad83f141%3A0x2fd49489af9f5d7!2sMustang%20Thakali%20Kitchen!5e0!3m2!1sen!2snp!4v1569229507191!5m2!1sen!2snp', 'draft', '2019-07-09 23:55:24', 'mustang', 'Hosts can offer a complimentary light breakfast at their discretion. All other meals will incur an additional cost. Meals and any additional payment should be arranged directly with your host.Hosts can offer a complimentary light breakfast at their discretion. All other meals will incur an additional cost. Meals and any additional payment should be arranged directly with your host.<br><p><span style="font-family: ''Times'',serif; color: #222222; background: white;">Each day includes morning breakfast which contains:</span></p>\n<ul>\n<li>Tea/Coffee</li>\n<li>Bread</li>\n<li>Boiled Egg</li>\n</ul>\n<p style="margin-left: 0in; text-indent: 0in;">&nbsp;Lunch which contains:</p>\n<ul>\n<li>Rice/Dhedo/Roti</li>\n<li>Dal</li>\n<li>Veg curry</li>\n<li>Local Chicken curry</li>\n<li>Chutney</li>\n</ul>\n<p>Day snack which may contain:</p>\n<ul>\n<li>Black Tea</li>\n<li>Corn</li>\n</ul>\n<p style="margin-left: 0in; text-indent: 0in;">Dinner which may contain:</p>\n<ul>\n<li>Rice/Dhedo/Roti</li>\n<li>Dal</li>\n<li>Veg curry</li>\n<li>Local Chicken curry</li>\n<li>Chutney</li>\n</ul>', 'https://www.youtube.com/embed/AW_1ksqU1os', 'Please stay clean, please try to leave the room in the same condition as you take. \nPlease smoke outside and away from the room. \nInform us in advance when you are not having meal, if you go out (bars, restaurant, visit someone) let us know, where you will plan to go and in case of emergency we will know where we can find you,\n\n(:- Thank you.\n\nSmoking is not allowed.', '<p style="margin-left: 22.5pt; text-indent: 0in;">Features of Homestay are</p>    <div style =''color:white''>     <ul> <li>Free wifi</li> <li>Facilities of medicine in any emergency cases (medicine like painkillers)</li> <li>Guest can also enjoy cultural programs.</li> <li>Guest can enjoy the local foods.</li> <li>It provides homely environment.</li> </ul>   </div>'),
(2, 'Ghandruk', 'Check into another World.', 'homestay999', '', '.This is a popular weeklong package that offers you the panoramic beauty of mountains in Annapurna range, while you also get to immerse yourself in the warm hospitality and unique culture of indigenous Gurung people. \r\n\r\nGhandruk village lies on the lap of majestic Mt. Macchapucchre (popularly known as fishtail mountain) accompanied by Mt. Himchuli. This village has a little over thousand individual households and one will be quite amazed to see the local architecture, cultural practices and way of life. The food served is entirely home-made, authentic and organic. \r\n\r\nOne can also see the south side of Mt. Annapurna from this vantage point. This is also the route towards Annapurna Base Camp and Poon Hill another popular tourist destination. The sight of blooming rhododendrons, picturesque mountains, traditional villages and kind and welcoming people will amalgamate into an immemorable experience, one that enriches your soul.  \r\n\r\n\r\n\r\n\r\n', '19292400_1524780270.jpg', 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d112455.51307806272!2d83.82790772607218!3d28.26089684626314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d28.251814399999997!2d83.8811195!4m5!1s0x3995eb6400000001%3A0x153e2a8cec16282f!2sHappy%20House%20Home-stay%2C%20Kaskikot%204%2C%20Kaskikot%2033700!3m2!1d28.260914699999997!2d83.897948!5e0!3m2!1sen!2snp!4v1569230751029!5m2!1sen!2snp', 'publish', '2019-07-25 00:15:00', 'Ghandruk', 'Hosts can offer a complimentary light breakfast at their discretion. All other meals will incur an additional cost. Meals and any additional payment should be arranged directly with your host.<br><p><span style="font-family: ''Times'',serif; color: #222222; background: white;">Each day includes morning breakfast which contains:</span></p> <ul> <li>Tea/Coffee</li> <li>Bread</li> <li>Boiled Egg</li> </ul> <p style="margin-left: 0in; text-indent: 0in;">&nbsp;Lunch which contains:</p> <ul> <li>Rice/Dhedo/Roti</li> <li>Dal</li> <li>Veg curry</li> <li>Local Chicken curry</li> <li>Chutney</li> </ul> <p>Day snack which may contain:</p> <ul> <li>Black Tea</li> <li>Corn</li> </ul> <p style="margin-left: 0in; text-indent: 0in;">Dinner which may contain:</p> <ul> <li>Rice/Dhedo/Roti</li> <li>Dal</li> <li>Veg curry</li> <li>Local Chicken curry</li> <li>Chutney</li> </ul>', 'https://www.youtube.com/embed/BBMy0c8RBG8', '<p>Homestay Rules:</p> <ul> <li>Guest are not allowed to smoke inside the house.</li> <li>Drinking and making noise is prohibited.</li> <li>No loud noise, music and parties.</li> </ul>', '<p style="margin-left: 22.5pt; text-indent: 0in;">Features of Homestay are</p>    <div style =''color:white''>     <ul> <li>Free wifi</li> <li>Facilities of medicine in any emergency cases (medicine like painkillers)</li> <li>Guest can also enjoy cultural programs.</li> <li>Guest can enjoy the local foods.</li> <li>It provides homely environment.</li> </ul>   </div>'),
(3, 'Kaskikot Village', 'Experience the passion of hospitality.', 'susanta thakali', '', 'Kaskikot Village Homestay is always a good idea for your vacation in Nepal because it leaves you speechless, then turns you into a storyteller. Kasikot village had its history about 350 years ago when the king of Kaski built a palace here and named it Kasikot. Since then the village has flourished as a traditional heritage located near Pokhara in the Kaski district.  Kaskikot Homestay lies about 13 km west of Pokhara which can be accessed either by vehicle or by hiking for about 3 hours. The route to Kasikot village intersects with many other trekking routes around the Annapurna region. Hence, it can be included as a start point or an endpoint to the trekking route in the Annapurna region.\r\nYou can also hike up to Kasikot hilltop to witness the ruins of the old palace. The hilltop also provides a magnificent view of the sunrise over the Annapurna and Dhaulagiri in the far-west and a clear view of the Pokhara city and Fewa Lake in the East.\r\n\r\n', '46981800_1524780339.jpg', 'https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d112455.51307806272!2d83.82790772607218!3d28.26089684626314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d28.251814399999997!2d83.8811195!4m5!1s0x3995eb6400000001%3A0x153e2a8cec16282f!2sHappy%20House%20Home-stay%2C%20Kaskikot%204%2C%20Kaskikot%2033700!3m2!1d28.260914699999997!2d83.897948!5e0!3m2!1sen!2snp!4v1569230751029!5m2!1sen!2snp', 'publish', '2019-07-15 18:15:00', 'Kaskikot Village', 'Hosts can offer a complimentary light breakfast at their discretion. All other meals will incur an additional cost. Meals and any additional payment should be arranged directly with your host.<br><p><span style="font-family: ''Times'',serif; color: #222222; background: white;">Each day includes morning breakfast which contains:</span></p> <ul> <li>Tea/Coffee</li> <li>Bread</li> <li>Boiled Egg</li> </ul> <p style="margin-left: 0in; text-indent: 0in;">&nbsp;Lunch which contains:</p> <ul> <li>Rice/Dhedo/Roti</li> <li>Dal</li> <li>Veg curry</li> <li>Local Chicken curry</li> <li>Chutney</li> </ul> <p>Day snack which may contain:</p> <ul> <li>Black Tea</li> <li>Corn</li> </ul> <p style="margin-left: 0in; text-indent: 0in;">Dinner which may contain:</p> <ul> <li>Rice/Dhedo/Roti</li> <li>Dal</li> <li>Veg curry</li> <li>Local Chicken curry</li> <li>Chutney</li> </ul>', 'https://www.youtube.com/embed/BBMy0c8RBG8', '<p>Homestay Rules:</p> <ul> <li>Guest are not allowed to smoke inside the house.</li> <li>Drinking and making noise is prohibited.</li> <li>No loud noise, music and parties.</li> </ul>', '<p style="margin-left: 22.5pt; text-indent: 0in;">Features of Homestay are</p>    <div style =''color:white''>     <ul> <li>Free wifi</li> <li>Facilities of medicine in any emergency cases (medicine like painkillers)</li> <li>Guest can also enjoy cultural programs.</li> <li>Guest can enjoy the local foods.</li> <li>It provides homely environment.</li> </ul>   </div>'),
(4, 'Dhampus', 'Feel the luxury of being yourself.', 'romeo099', '', 'Dhampus is a traditional village located in Kaski District, within the Annapurna Himalayas. Hikes there start early, with a drive to Phedi, about 30 minutes from Pokhara. Right at the beginning we were rewarded by the view of Machhapuchhre (Fishtail Mountain) glowing shades of yellow and orange in a mesmerizing display of sunrise Alpenglow.\r\nIt is the best destination for the short trekking. There are various homestays which provides best hospitality.\r\n\r\n\r\n', '98308700_1524790852.jpg', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14127.221568584962!2d85.311177!3d27.7232943!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x74dbcd9629a05b05!2sShine%20Homestay%20Nayabazar!5e0!3m2!1sen!2snp!4v1569229199919!5m2!1sen!2snp', 'publish', '2019-07-14 18:15:00', 'Dhampus', 'Hosts can offer a complimentary light breakfast at their discretion. All other meals will incur an additional cost. Meals and any additional payment should be arranged directly with your host.<br><p><span style="font-family: ''Times'',serif; color: #222222; background: white;">Each day includes morning breakfast which contains:</span></p> <ul> <li>Tea/Coffee</li> <li>Bread</li> <li>Boiled Egg</li> </ul> <p style="margin-left: 0in; text-indent: 0in;">&nbsp;Lunch which contains:</p> <ul> <li>Rice/Dhedo/Roti</li> <li>Dal</li> <li>Veg curry</li> <li>Local Chicken curry</li> <li>Chutney</li> </ul> <p>Day snack which may contain:</p> <ul> <li>Black Tea</li> <li>Corn</li> </ul> <p style="margin-left: 0in; text-indent: 0in;">Dinner which may contain:</p> <ul> <li>Rice/Dhedo/Roti</li> <li>Dal</li> <li>Veg curry</li> <li>Local Chicken curry</li> <li>Chutney</li> </ul>', 'https://www.youtube.com/embed/87vSa8VhSEw', '<p lang="en-x-mtfrom-fr">1) Payment on arrival or via bank transfer</p> <p lang="en-x-mtfrom-fr">2) Roads in Nepal are dirty, so they are not allowed in home</p> <p lang="en-x-mtfrom-fr">3) Please do respect the local culture</p> <p lang="en-x-mtfrom-fr">4) After 10 pm each guest is asked to minimize noise so that we do not disturb neighbors.</p> <p>Smoking is allowed outdoors only.</p>', '<p style="margin-left: 22.5pt; text-indent: 0in;">Features of Homestay are</p>    <div style =''color:white''>     <ul> <li>Free wifi</li> <li>Facilities of medicine in any emergency cases (medicine like painkillers)</li> <li>Guest can also enjoy cultural programs.</li> <li>Guest can enjoy the local foods.</li> <li>It provides homely environment.</li> </ul>   </div>'),
(5, 'Sikles', 'Stay with us and feel like home.', 'ram prasad sapkota', '', 'Sikles Trekking in spectacular short trek with great Mountain Views. Sikles Trek leads the wilderness away from traditional Gurung Villages. This trekking route offers wonderful view of the Machhapuchhre, Annapurna, Lamjung Himal and Manaslu ranges of the Nepal Himalayas. Rhododendron flower, bamboo forest, Rivers, big Tamang Villages and their typical cultures, Local Handicraft production etc. are the main attractions in this trek. Sikles trek, we start from beautiful city of Pokhara toward north and end at Pokhara. Sikles trek as a Home Stay to know and feel local peoples and their culture direct yourself.', '57894000_1524856026.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.129673079171!2d85.30907421453482!3d27.71328228278946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fdad83f141%3A0x2fd49489af9f5d7!2sMustang%20Thakali%20Kitchen!5e0!3m2!1sen!2snp!4v1569229507191!5m2!1sen!2snp', 'publish', '2019-07-28 09:42:00', 'Sikles', 'Hosts can offer a complimentary light breakfast at their discretion. All other meals will incur an additional cost. Meals and any additional payment should be arranged directly with your host.<br><p><span style="font-family: ''Times'',serif; color: #222222; background: white;">Each day includes morning breakfast which contains:</span></p> <ul> <li>Tea/Coffee</li> <li>Bread</li> <li>Boiled Egg</li> </ul> <p style="margin-left: 0in; text-indent: 0in;">&nbsp;Lunch which contains:</p> <ul> <li>Rice/Dhedo/Roti</li> <li>Dal</li> <li>Veg curry</li> <li>Local Chicken curry</li> <li>Chutney</li> </ul> <p>Day snack which may contain:</p> <ul> <li>Black Tea</li> <li>Corn</li> </ul> <p style="margin-left: 0in; text-indent: 0in;">Dinner which may contain:</p> <ul> <li>Rice/Dhedo/Roti</li> <li>Dal</li> <li>Veg curry</li> <li>Local Chicken curry</li> <li>Chutney</li> </ul>', 'https://www.youtube.com/embed/AW_1ksqU1os', ' <p lang="en-x-mtfrom-fr">1) Payment on arrival or via bank transfer</p> <p lang="en-x-mtfrom-fr">2) Roads in Nepal are dirty, so they are not allowed in home</p> <p lang="en-x-mtfrom-fr">3) Please do respect the local culture</p> <p lang="en-x-mtfrom-fr">4) After 10 pm each guest is asked to minimize noise so that we do not disturb neighbors.</p> <p>Smoking is allowed outdoors only.</p> <div style="color: white;"> <ul> <li>Free wifi</li> <li>Facilities of medicine in any emergency cases (medicine like painkillers)</li> <li>Guest can also enjoy cultural programs.</li> <li>Guest can enjoy the local foods.</li> <li>It provides homely environment.</li> </ul> </div><p lang="en-x-mtfrom-fr">1) Payment on arrival or via bank transfer</p> <p lang="en-x-mtfrom-fr">2) Roads in Nepal are dirty, so they are not allowed in home</p> <p lang="en-x-mtfrom-fr">3) Please do respect the local culture</p> <p lang="en-x-mtfrom-fr">4) After 10 pm each guest is asked to minimize noise so that we do not disturb neighbors.</p> <p>Smoking is allowed outdoors only.</p>', '<p style="margin-left: 22.5pt; text-indent: 0in;">Features of Homestay are</p> <ul> <li>Free wifi</li> <li>Facilities of medicine in any emergency cases (medicine like painkillers)</li> <li>Guest can also enjoy cultural programs.</li> <li>Guest can enjoy the local foods.</li> <li>It provides homely environment.</li> </ul><p style="margin-left: 22.5pt; text-indent: 0in;">Features of Homestay are</p>    <div style =''color:white''>     <ul> <li>Free wifi</li> <li>Facilities of medicine in any emergency cases (medicine like painkillers)</li> <li>Guest can also enjoy cultural programs.</li> <li>Guest can enjoy the local foods.</li> <li>It provides homely environment.</li> </ul>   </div>'),
(6, 'Ghale Gaun', 'Live the Life and enjoy the moment.', 'krishna khadka', '', 'Ghale gaun trekking is newly open trekking trail in Annapurna region. Ghale gaun trekking offers superb breathtaking view of majestic western Himalayas including Machhapuchhare (6693m) Annapurna (8091m), Annapurna II (7939m) Annapurna IV (7525m), Lamjung Himal, Bouddha Himal ((6974m), Himalchuli (6747m) and many smaller peaks. Ghalegaun, situated at the foot of Lamjung Himal in north central Nepal, is an exotic pristine village endowed with an unparallel scenic grandeur and a home to world famous Gurkha soldiers- the Gurungs. \r\nGhale Gaun is not only to explore local life of Nepali people, it is also offering a superb breathtaking views of the mountain including Annapurna I, Annapurna II, Himalchuli, Mahhapuchhare, Annapurna IV, Bouddha Himal etc. Villagers were welcoming with warm greetings by wearing their traditional customs to the tourist. Local food, handicraft, Gurung Museum, Gurung Culture, spectacular mountains view ', '30278600_1524856225.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.129673079171!2d85.30907421453482!3d27.71328228278946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fdad83f141%3A0x2fd49489af9f5d7!2sMustang%20Thakali%20Kitchen!5e0!3m2!1sen!2snp!4v1569229507191!5m2!1sen!2snp', 'publish', '2019-07-21 05:32:55', 'Ghale Gaun', 'Hosts can offer a complimentary light breakfast at their discretion. All other meals will incur an additional cost. Meals and any additional payment should be arranged directly with your host.<br><p><span style="font-family: ''Times'',serif; color: #222222; background: white;">Each day includes morning breakfast which contains:</span></p> <ul> <li>Tea/Coffee</li> <li>Bread</li> <li>Boiled Egg</li> </ul> <p style="margin-left: 0in; text-indent: 0in;">&nbsp;Lunch which contains:</p> <ul> <li>Rice/Dhedo/Roti</li> <li>Dal</li> <li>Veg curry</li> <li>Local Chicken curry</li> <li>Chutney</li> </ul> <p>Day snack which may contain:</p> <ul> <li>Black Tea</li> <li>Corn</li> </ul> <p style="margin-left: 0in; text-indent: 0in;">Dinner which may contain:</p> <ul> <li>Rice/Dhedo/Roti</li> <li>Dal</li> <li>Veg curry</li> <li>Local Chicken curry</li> <li>Chutney</li> </ul>', 'https://www.youtube.com/embed/BBMy0c8RBG8', '<p>Homestay Rules:</p> <ul> <li>Guest are not allowed to smoke inside the house.</li> <li>Drinking and making noise is prohibited.</li> <li>No loud noise, music and parties.</li> </ul>', '<p style="margin-left: 22.5pt; text-indent: 0in;">Features of Homestay are</p> <ul> <li>Free wifi</li> <li>Facilities of medicine in any emergency cases (medicine like painkillers)</li> <li>Guest can also enjoy cultural programs.</li> <li>Guest can enjoy the local foods.</li> <li>It provides homely environment.</li> </ul><p style="margin-left: 22.5pt; text-indent: 0in;">Features of Homestay are</p>    <div style =''color:white''>     <ul> <li>Free wifi</li> <li>Facilities of medicine in any emergency cases (medicine like painkillers)</li> <li>Guest can also enjoy cultural programs.</li> <li>Guest can enjoy the local foods.</li> <li>It provides homely environment.</li> </ul>   </div>'),
(7, 'pokhara homestay', 'Please stay clean, please try to leave t', 'sunil999', '', 'Please stay clean, please try to leave the room in the same condition as you take. Please smoke outside and away from the room. Inform us in advance when you are not having meal, if you go out (bars, restaurant, visit someone) let us know, where you will plan to go and in case of emergency we will know where we can find you, (:- Thank you. Smoking is not allowed.\r\n', 'Homestay-Eco-Resort-Chitwan-Nepal.jpg', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14127.221568584962!2d85.311177!3d27.7232943!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x74dbcd9629a05b05!2sShine%20Homestay%20Nayabazar!5e0!3m2!1sen!2snp!4v1569229199919!5m2!1sen!2snp', 'publish', '2019-07-27 14:53:47', 'Pokhara', 'Hosts can offer a complimentary light breakfast at their discretion. All other meals will incur an additional cost. Meals and any additional payment should be arranged directly with your host.<br><p><span style="font-family: ''Times'',serif; color: #222222; background: white;">Each day includes morning breakfast which contains:</span></p>\n<ul>\n<li>Tea/Coffee</li>\n<li>Bread</li>\n<li>Boiled Egg</li>\n</ul>\n<p style="margin-left: 0in; text-indent: 0in;">&nbsp;Lunch which contains:</p>\n<ul>\n<li>Rice/Dhedo/Roti</li>\n<li>Dal</li>\n<li>Veg curry</li>\n<li>Local Chicken curry</li>\n<li>Chutney</li>\n</ul>\n<p>Day snack which may contain:</p>\n<ul>\n<li>Black Tea</li>\n<li>Corn</li>\n</ul>\n<p style="margin-left: 0in; text-indent: 0in;">Dinner which may contain:</p>\n<ul>\n<li>Rice/Dhedo/Roti</li>\n<li>Dal</li>\n<li>Veg curry</li>\n<li>Local Chicken curry</li>\n<li>Chutney</li>\n</ul>', 'https://www.youtube.com/embed/4y75lRVz5SM', 'Please stay clean, please try to leave the room in the same condition as you take. Please smoke outside and away from the room. Inform us in advance when you are not having meal, if you go out (bars, restaurant, visit someone) let us know, where you will plan to go and in case of emergency we will know where we can find you, (:- Thank you. Smoking is not allowed.\r\n', '<p style="margin-left: 22.5pt; text-indent: 0in;">Features of Homestay are</p> <ul> <li>Free wifi</li> <li>Facilities of medicine in any emergency cases (medicine like painkillers)</li> <li>Guest can also enjoy cultural programs.</li> <li>Guest can enjoy the local foods.</li> <li>It provides homely environment.</li> </ul><p style="margin-left: 22.5pt; text-indent: 0in;">Features of Homestay are</p>    <div style =''color:white''>     <ul> <li>Free wifi</li> <li>Facilities of medicine in any emergency cases (medicine like painkillers)</li> <li>Guest can also enjoy cultural programs.</li> <li>Guest can enjoy the local foods.</li> <li>It provides homely environment.</li> </ul>   </div>'),
(12, 'homestay nightingale', 'best homestay ever', 'sajilochat321', '', 'Namaste,<br>\nWe are a small family of 5, my mother-in-law, my husband, our two daughters and myself. We (both) speak fluent French, English, Hindi, Nepali and Newari (dialect of Nepal). In fact, our family is a mixture of two ethnic groups (culture). I can meet you from two different cultures and also the other cultures of Nepal.', 'images.jpg', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14127.221568584962!2d85.311177!3d27.7232943!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x74dbcd9629a05b05!2sShine%20Homestay%20Nayabazar!5e0!3m2!1sen!2snp!4v1569229199919!5m2!1sen!2snp', 'publish', '2019-09-20 06:00:41', 'Pokhara', 'Hosts can offer a complimentary light breakfast at their discretion. All other meals will incur an additional cost. Meals and any additional payment should be arranged directly with your host.<br><p><span style="font-family: ''Times'',serif; color: #222222; background: white;">Each day includes morning breakfast which contains:</span></p>\n<ul>\n<li>Tea/Coffee</li>\n<li>Bread</li>\n<li>Boiled Egg</li>\n</ul>\n<p style="margin-left: 0in; text-indent: 0in;">&nbsp;Lunch which contains:</p>\n<ul>\n<li>Rice/Dhedo/Roti</li>\n<li>Dal</li>\n<li>Veg curry</li>\n<li>Local Chicken curry</li>\n<li>Chutney</li>\n</ul>\n<p>Day snack which may contain:</p>\n<ul>\n<li>Black Tea</li>\n<li>Corn</li>\n</ul>\n<p style="margin-left: 0in; text-indent: 0in;">Dinner which may contain:</p>\n<ul>\n<li>Rice/Dhedo/Roti</li>\n<li>Dal</li>\n<li>Veg curry</li>\n<li>Local Chicken curry</li>\n<li>Chutney</li>\n</ul>', 'https://www.youtube.com/embed/4y75lRVz5SM', '<p lang="en-x-mtfrom-fr">1) Payment on arrival or via bank transfer</p>\n<p lang="en-x-mtfrom-fr">2) Roads in Nepal are dirty, so they are not allowed in home</p>\n<p lang="en-x-mtfrom-fr">3) Please do respect the local culture</p>\n<p lang="en-x-mtfrom-fr">4) After 10 pm each guest is asked to minimize noise so that we do not disturb neighbors.</p>\n<p>Smoking is allowed outdoors only.</p>\n', '<p style="margin-left: 22.5pt; text-indent: 0in;">Features of Homestay are</p>\n\n  <div style =''color:white''>\n    <ul>\n<li>Free wifi</li>\n<li>Facilities of medicine in any emergency cases (medicine like painkillers)</li>\n<li>Guest can also enjoy cultural programs.</li>\n<li>Guest can enjoy the local foods.</li>\n<li>It provides homely environment.</li>\n</ul>\n  </div>'),
(13, '', '', 'sunil123', '', '', '', '', '', '2019-09-23 13:05:53', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `description`, `price`, `image`, `created`, `modified`) VALUES
(12345678, 'iPhone 6s (Space Grey)', '<ul style="margin:0px;padding:15px;">\r\n				<li>32 GB ROM |</li>\r\n				<li>11.94 cm (4.7 inch) Retina HD Display</li>\r\n				<li>12MP Rear Camera | 5MP Front Camera</li>\r\n				<li>Apple A9 64-bit processor and Embedded M9 Motion Co-processor</li>\r\n				<li>Brand Warranty of 1 Year</li>\r\n			</ul>	', 34000, 'apple-iphone-6s.jpeg', '0000-00-00 00:00:00', '2019-01-19 08:28:04'),
(12345679, 'iPhone 6s (Silver)', '<ul style="margin:0px;padding:15px;">\r\n				<li>32 GB ROM |</li>\r\n				<li>11.94 cm (4.7 inch) Retina HD Display</li>\r\n				<li>12MP Rear Camera | 5MP Front Camera</li>\r\n				<li>Apple A9 64-bit processor and Embedded M9 Motion Co-processor</li>\r\n				<li>Brand Warranty of 1 Year</li>\r\n			</ul>	', 30000, 'apple-iphone-6.jpeg', '0000-00-00 00:00:00', '2019-01-19 08:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `item_rating`
--

CREATE TABLE `item_rating` (
  `ratingId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `email` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `ratingNumber` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Block, 0 = Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_rating`
--

INSERT INTO `item_rating` (`ratingId`, `itemId`, `userId`, `email`, `username`, `avatar`, `ratingNumber`, `title`, `comments`, `created`, `modified`, `status`) VALUES
(52, 1, 0, '', 'admin', '', 3, 'stats', 'rgergege', '2019-08-19 16:49:53', '2019-08-19 16:49:53', 1),
(53, 1, 0, '', 'admin', '', 1, 'smriti in Parbat star 2075 ', 'wefwefwe', '2019-08-19 16:55:31', '2019-08-19 16:55:31', 1),
(54, 1, 0, '', 'root', '', 1, 'toor', 'efvwev', '2019-08-19 16:58:28', '2019-08-19 16:58:28', 1),
(55, 1, 0, '', 'sunil', '', 5, 'lksajdflk', 'eeee', '2019-08-20 07:14:39', '2019-08-20 07:14:39', 1),
(56, 1, 0, '', 'sunil sapkota', '', 4, 'very good ', 'i stay in this homestay for 3 weeks and i have good experience in this homestay.  :)', '2019-08-20 07:24:06', '2019-08-20 07:24:06', 1),
(57, 9, 0, '', 'sunil sapkota', '', 5, 'very good homestay', 'test', '2019-08-20 07:46:47', '2019-08-20 07:46:47', 1),
(58, 1, 0, '', 'krivanepal@gmail.com', '', 5, 'smriti in Parbat star 2075 ', 'very good home stay', '2019-08-21 11:12:06', '2019-08-21 11:12:06', 1),
(59, 10, 0, '', 'sunil', '', 5, 'nice homestay', 'it is a nice homestay', '2019-08-23 17:08:06', '2019-08-23 17:08:06', 1),
(60, 2, 0, '', 'sunil', '', 5, 'stats', 'good', '2019-08-25 12:02:13', '2019-08-25 12:02:13', 1),
(61, 2, 0, '', 'admin', '', 5, 'lksajdflk', 'derydrfu', '2019-08-25 12:03:39', '2019-08-25 12:03:39', 1),
(62, 4, 0, '', 'sunil', '', 4, 'smriti in Parbat star 2075 ', 'testing ratings .', '2019-09-02 05:38:26', '2019-09-02 05:38:26', 1),
(63, 1, 0, '', 'sunil', '', 1, 'smriti in Parbat star 2075 ', 'wsrgegww', '2019-09-19 16:11:54', '2019-09-19 16:11:54', 1),
(64, 1, 0, 'sajilochat@gmail.com', 'admin', '', 1, 'smriti in Parbat star 2075 ', 'smriti in Parbat star 2075 smriti in Parbat star 2075 smriti in Parbat star 2075 smriti in Parbat star 2075 ', '2019-09-19 17:08:46', '2019-09-19 17:08:46', 1),
(65, 1, 0, 'sajilochat@gmail.com', 'admin', '', 1, 'smriti in Parbat star 2075 ', 'smriti in Parbat star 2075 smriti in Parbat star 2075 smriti in Parbat star 2075 ', '2019-09-19 17:23:16', '2019-09-19 17:23:16', 1),
(66, 1, 0, 'sajilochat111@gmail.com', 'sunil', '', 1, 'lksajdflk', 'VVVVitemIditemIditemId', '2019-09-19 18:22:05', '2019-09-19 18:22:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_users`
--

CREATE TABLE `item_users` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_users`
--

INSERT INTO `item_users` (`userid`, `username`, `password`, `avatar`) VALUES
(1, 'rose', '123', 'user1.jpg'),
(2, 'smith', '123', 'user2.jpg'),
(3, 'adam', '123', 'user3.jpg'),
(4, 'merry', '123', 'user4.jpg'),
(5, 'katrina', '123', 'user5.jpg'),
(6, 'rhodes', '123', 'user6.jpg');

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
  `title` varchar(65) DEFAULT NULL,
  `picture` varchar(65) NOT NULL,
  `keyword` varchar(65) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `local_activities`
--

INSERT INTO `local_activities` (`id`, `title`, `picture`, `keyword`, `about`) VALUES
(1, 'holi', 'holi.jpg', 'celebrate with colors', 'Holi is the festival of love or colors that signifies the victory of superior over immoral. Holi festival is commemorate on February end or starting March.'),
(2, 'diwali', 'diwali.jpg', 'Dipavali is the festival of lights', 'Deepavali (also: Diwali) is one of India''s biggest festivals. The word ''Deepawali'' means rows of lighted lamps. '),
(3, NULL, '', 'lsja;fljlasjfc', 'dsfafadsfdsfds'),
(4, NULL, '', 'lsja;fljlasjfc', 'dsfafadsfdsfds'),
(5, 'eddesdfsdf', 'dsfsdf', 'sdfsdf', 'dfvsdf'),
(6, 'eddesdfsdf', 'dsfsdf', 'sdfsdf', 'dfvsdf');

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
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `full_name` varchar(65) DEFAULT NULL,
  `email` varchar(56) DEFAULT NULL,
  `c_date` date DEFAULT NULL,
  `approval` varchar(65) DEFAULT NULL,
  `user_name` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `full_name`, `email`, `c_date`, `approval`, `user_name`) VALUES
(1, 'sunil sapkota', 'sajilochat@gmail.com', '2019-07-13', 'Allowed', 'sunil99'),
(5, 'sunil sapkota', 'sunilsapkota9@gmail.com', '2019-07-25', 'Allowed', 'sunil99'),
(6, 'sunil sapkota', 'demo@gmail.com', '2019-08-05', 'Not Allowed', '');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(11) NOT NULL,
  `user` varchar(65) NOT NULL,
  `title` text NOT NULL,
  `subject` text NOT NULL,
  `news` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletterlog`
--

INSERT INTO `newsletterlog` (`id`, `user`, `title`, `subject`, `news`) VALUES
(1, 'sajilochat321', 'best hosting provider', 'Starting your digital lifestyle', 'newsletterlognewsletterlognewsletterlognewsletterlognewsletterlog'),
(2, 'sajilochat321', 'this is title', 'this is subject', 'this is the main news about ourselves'),
(3, 'sajilochat321', 'this is title', 'this is subject', 'this is the main news about ourselves'),
(4, 'sajilochat321', 'this is title', 'this is subject', 'this is the main news about ourselves'),
(5, 'sajilochat321', 'this is title', 'this is subject', 'this is the main news about ourselves'),
(6, 'sajilochat321', 'this is title', 'this is subject', 'this is the main news about ourselves'),
(7, 'sajilochat321', 'welcome message', 'testing mail server', 'this is the test 2'),
(8, 'sajilochat321', 'welcome message', 'testing mail server', 'this is test 3 for checking mail server'),
(9, 'sajilochat321', 'welcome message', 'testing mail server', 'this is test 3 for checking mail server');

-- --------------------------------------------------------

--
-- Table structure for table `owner_info`
--

CREATE TABLE `owner_info` (
  `id` int(11) NOT NULL,
  `full_name` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_info`
--

INSERT INTO `owner_info` (`id`, `full_name`, `email`, `phone`, `about`) VALUES
(1, 'Sunil Sapkota', 'sunil@gmail.com', 554445, 'Hello! I am Sunil Sapkota. web Developer, python Developer, Ethical Hacker, Network Pentester\r\n\r\nI''m currently working in Hemja Bhupu Co-opetarive ltd. and also a student at LA Grandee international College. Currently I''m studying BCA(Bachelors in Computer Application ). I''m intrested in ethical hacking and cyber security. Find Me On Facebook');

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
('newest homestay', 120),
('Newest homestay nepal1', 2),
('Newest homestay nepal3', 7),
('Newest homestay nepal4', 3),
('Newest homestay nepal2', 1),
('Newest homestay nepal5', 8),
('', 5),
('Ghale Gaun', 16),
('Sikles', 9),
('Ghandruk', 28),
('Mustang(Thini)', 508),
('Dhampus', 10),
('Kaskikot Village', 11),
('sunil sapkota', 25),
('pokhara homestay', 5),
('admin999', 5),
('loply homestay099', 110),
('loply homestay', 23),
('lovebirds pokhara', 3),
('vsfse', 6),
('homestay nightingale', 23);

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
  `noofdays` int(11) DEFAULT NULL,
  `owner` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`, `owner`) VALUES
(11, 'Miss.', 'sunil', 'sapkota', 'Deluxe Room', 'Double', 3, '2019-08-16', '2019-08-31', 9900.00, 10098.00, 132.00, 'Breakfast', 66.00, 15, 'admin999'),
(13, 'Mr.', 'sunil', 'sapkota', 'Deluxe Room', 'Double', 2, '2019-09-16', '2019-09-19', 1320.00, 1359.60, 26.40, 'Breakfast', 13.20, 3, 'sajilochat321');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `no_of_room` int(11) NOT NULL,
  `cusid` int(11) DEFAULT NULL,
  `H_id` int(11) NOT NULL,
  `owner` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `price`, `no_of_room`, `cusid`, `H_id`, `owner`) VALUES
(41, 'Deluxe Room', 'Single', 'NotFree', 990, 4, 9, 1, 'sunil99'),
(42, 'Deluxe Room', 'Triple', 'NotFree', 678, 3, 3, 1, 'sunil99'),
(43, 'Single Room', 'Double', 'NotFree', 879, 5, 10, 1, 'sunil99'),
(44, 'Deluxe Room', 'Quad', 'Free', 9878, 7, NULL, 1, 'sunil99'),
(45, 'Deluxe Room', 'Double', 'Free', 900, 6, 0, 1, 'sunil99'),
(46, 'Single Room', 'Single', 'Free', 234, 1, NULL, 7, 'sunil99'),
(47, 'Single Room', 'Triple', 'Free', 23, 3, NULL, 7, 'sunil99'),
(49, 'Single Room', 'Quad', 'Free', 900, 3, NULL, 7, 'sunil99'),
(51, 'Single Room', 'Double', 'NotFree', 900, 3, 10, 8, 'admin999'),
(52, 'Deluxe Room', 'Single', 'Free', 500, 1, NULL, 0, 'admin9999'),
(53, 'Deluxe Room', 'Single', 'Free', 900, 4, NULL, 9, 'romeo099'),
(54, 'Single Room', 'Double', 'Free', 490, 3, NULL, 9, 'romeo099'),
(55, 'Single Room', 'Single', 'Free', 550, 4, NULL, 10, 'homestay999'),
(56, 'Deluxe Room', 'Single', 'Free', 990, 2, NULL, 10, 'homestay999'),
(57, 'Single Room', 'Single', 'Free', 550, 7, NULL, 12, 'sajilochat321');

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
  `homestay_id` int(11) NOT NULL,
  `voucher_pic` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`, `homestay_id`, `voucher_pic`) VALUES
(1, 'Dr.', 'sunil', 'sapkota', 'sajilochat@gmail.com', 'Nepali', 'Nepal', '9806705494', 'Deluxe Room', 'Single', '1', 'Breakfast', '2019-08-16', '2019-08-09', 'Not Conform', -7, 7, ''),
(2, 'Dr.', 'sunil', 'sapkota', 'sajilochat22@gmail.com', 'Nepali', 'Nepal', '9806705494', 'Deluxe Room', 'Single', '4', 'Room only', '2019-08-02', '2019-08-24', 'Not Conform', 22, 7, '1564674203-Homestay-Eco-Resort-Chitwan-Nepal.jpg'),
(3, 'Dr.', 'sunil', 'sapkota', 'sajilochat@gmail.com', 'Nepali', 'Nepal', '9806705494', 'Deluxe Room', 'Triple', '2', 'Breakfast', '2019-08-15', '2019-08-31', 'Conform', 16, 1, ''),
(4, 'Mr.', 'sunil', 'sapkota', 'sajilochat@gmail.com', 'Nepali', 'Nepal', '9807577575', 'Deluxe Room', 'Double', '2', 'Room only', '2019-08-15', '2019-08-31', 'Not Conform', 16, 3, ''),
(5, 'Mr.', 'sunil', 'sapkota', 'sajilochat1@gmail.com', 'Nepali', 'Nepal', '9806705494', 'Deluxe Room', 'Double', '2', 'Breakfast', '2019-08-15', '2019-08-24', 'Conform', 9, 1, '1564976604-51697043_415886522492072_6935652552679620608_n.jpg'),
(6, 'Mr.', 'test', 'test1', 'demo@gmail.com', 'Nepali', 'Nepal', '9806705494', 'Deluxe Room', 'Double', '2', 'Room only', '2019-08-14', '2019-08-29', 'Conform', 15, 1, '1564977325-49407181_2113586875367017_4645380474951172096_n.jpg'),
(7, 'Miss.', 'test', 'test2', 'sunilsapkota9@gmail.com', 'Nepali', 'Nepal', '9807577575', 'Single Room', 'Single', '2', 'Breakfast', '2019-08-16', '2019-08-26', 'Not Conform', 10, 7, ''),
(8, 'Mrs.', 'sunil', 'sapkota', 'sajilochat@gmail.com', 'Nepali', 'Nepal', '9806705494', 'Single Room', 'Double', '1', 'Breakfast', '2019-08-14', '2019-08-22', 'Conform', 8, 8, ''),
(12, 'Miss.', 'sunil', 'sapkota', 'sajilochat5t@gmail.com', 'Nepali', 'Nepal', '3333333333', 'Deluxe Room', 'Single', '1', 'Half Board', '2019-08-14', '2019-08-19', 'Not Conform', 5, 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `star_comments`
--

CREATE TABLE `star_comments` (
  `id` int(11) NOT NULL,
  `star` int(11) NOT NULL,
  `title` varchar(65) NOT NULL,
  `avatar` varchar(65) NOT NULL,
  `comments` text NOT NULL,
  `user_name` varchar(65) NOT NULL,
  `homestay_id` varchar(65) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `star_comments`
--

INSERT INTO `star_comments` (`id`, `star`, `title`, `avatar`, `comments`, `user_name`, `homestay_id`, `created`) VALUES
(1, 4, 'WORTH TO COME AGAIN', '0', 'Sed tempus vestibulum lacus blandit faucibus. Nunc Sed tempus vestibulum lacus blandit faucibus. Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, at imperdiet urna.\n\n', '1', '1', '2019-07-26 10:45:23'),
(2, 3, 'test', '0', 'lkasjfia ksjfoijafj skjfisjaoifjoa sdfkjasfjoasi fjoasfaslkdfsjdfoijas ofaosdjflksdkljf sdifjsnfksakdfj aisofklsclksijdscoi fsd', '1', '1', '2019-07-26 10:45:23');

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
(1, 'Homestay Nepal', 'A home far from Home', 'homestay_nepal.ico', 'homestay,best homestay nepal, online nepal homesaty', 'This is an online homesaty management system that has enlisted all the homestay of nepal with their facilities and price along with visitors reviews.', 'Feel like home <span>stay happy :)</span>', 'To be an ideal guest <span>Stay at home</span>', 'A home far from <span>home</span>', 'To feel at home <span>at home</span>', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur.', 'Pokhara,Nepal', 'homestaypkr@gmail.com', '+977-980-6705494', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.015357823248!2d83.97389211454805!3d28.20684598258768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39959557ec44ec37%3A0x6eeff1f9febe0a28!2sLa+grandee+international+college!5e0!3m2!1sen!2sua!4v1562550795436!5m2!1sen!2suahttps://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.015357823248!2d83.97389211454805!3d28.20684598258768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39959557ec44ec37%3A0x6eeff1f9febe0a28!2sLa+grandee+international+college!5e0!3m2!1sen!2sua!4v1562550795436!5m2!1sen!2sua');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `about` longtext NOT NULL,
  `pic` varchar(65) NOT NULL,
  `homestay_id` int(11) NOT NULL,
  `aproval` varchar(65) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `email`, `username`, `password`, `phone`, `about`, `pic`, `homestay_id`, `aproval`, `c_date`) VALUES
(1, 'sunil sapkota', 'sunilsapkota9@gmail.com', 'sunil99', '$2y$10$OVE04L50dQ8S/RM3Y434OeSKwRLcDi2zXbL5ynI8PWiJGc0Mxztni', 9806705494, '<p>Namaste,</p><p>\r\n  \r\n</p>\r\n  <br ><span style="color: rgb(81, 43, 26); font-family: &quot;Open sans&quot;; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">We are a small family of 5, my mother-in-law, my husband, our two daughters and myself. We (both) speak fluent French, English, Hindi, Nepali and Newari (dialect of Nepal). In fact, our family is a mixture of two ethnic groups (culture). I can meet you from two different cultures and also the other cultures of Nepal.</span>&nbsp;</p>\r\n<p>-Walking distance to bus stand</p>', 'sunil.jpg', 1, '', '2019-07-24 17:52:52'),
(24, 'sunil sapkota99', 'sajilochat@gmail.com', 'sunil999', '$2y$10$OZXz8BvEj7dQL.b.QFiMQeZ6XFSRVM75LoX7z7pCJIrUodZ85jiIi', 987654321, '<p>We offer private rooms and suites, including continental/Nepali breakfast, in a cozy house just 5 mins walk from Patan.</p>\n\n<p>Our House is also an urban community hub that brings together curious minds and accomplished professionals - travelers and city residents - from all walks of life to inquire about personal responsibility for social good. We are working on urban sustainability - food production, zero waste, and greywater recycling - and building a community library within our space. Our house also hosts an urban renewal initiative that aims to create and resist for a better Patan. And, we are secretariat to Kathmandu Food Collective, hosting cosy homemade dinners to connect people over food.</p>\n\n<p>During your stay, you will immediately find yourself surrounded by a unique group of people, in Kathmandu, who work hard, play fair, smile wide, think deep, and dream big. We operate the house as a bed and breakfast, and most of our guests stay longer and are involved in social projects and enterprises across Nepal.</p>', 'rabina.jpg', 7, '', '2019-08-07 17:01:05'),
(25, 'sunil sapkota', 'sajilochat@gmail.com', 'romeo099', '$2y$10$7PtkskqnexCngz5hSSNFCecMljeLBDKUI2EnizYhAMyRRboIHwtRi', 9806705494, '<p>Namaste, We are 4 members in our family. My mother in law, my husband &amp; my daughter with me. We are newar. We have 2 extra rooms at our home, and can stay 4 people comfortably. Our home stay is nearby nagarjuna jungle and we have a beautiful garden with green environment. It takes hardly 15 minute walk to Swoyambhu nath temple (monkey temple) from our home &amp; tourist''s best place Thamel is only 10 min by car. Microbus is also available at nearby our homestay for Thamel.</p>', 'DtA4e5AXgAAJJlf.jpg', 4, '', '2019-08-12 12:54:35'),
(28, 'sunil sapkota', 'sajilochat@gmail.com', 'sajilochat321', '$2y$10$X6OsX0IDKbIqLvCJP5VnCePArxke7BepIKGtQuQO2T8vWt6URVb0G', 9806705499, '<p>Namaste, My family consist of 5 members, my mother in law, my husband, 2 kids and myself. At home we speak, Nepali our mother tongue, Newari me (of the dialect of Nepal), English, French and Hindi. We are here to help you discover the different cultures, the tradition of Nepal. We have a small trekking agency &quot;Sunshine Trekking&quot; so we would assist you in organizing trip, trek, tour in Nepal if you like. I studied hotel management and Master of Tourism, I had also worked in French Embassy in Nepal</p>\n\n<p>Our destination is at heart of Kathmandu, it is at the best location for the tourist who wants to stay nearby Thamel; the touristic area which is harldy 10 min walk. As it is centrally located one should not be worried about shopping, restaurant, bus station, taxi etc. We have a guest kitchen too, where they can prepare their meal.</p>', 'abcd.jpg', 12, '', '2019-09-20 06:00:40'),
(29, 'sunil sapkota', 'sajilochat@gmail.com', 'sunil123', '$2y$10$84.ZtD0o5X4lWYz8xmdPNuR/SHmcm6evvx7nXRLUmht3gKm5zBuO6', 9806705499, '', '', 0, '', '2019-09-23 13:05:53');

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
(12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(14, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(15, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(16, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(17, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(18, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(19, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(20, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(21, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(22, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(23, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(24, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(25, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(381, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(382, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(383, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(384, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(385, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(386, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(387, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(388, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(389, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(390, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(391, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(392, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(393, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(394, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(395, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(396, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(397, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(398, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(399, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(400, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(401, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(402, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(403, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(404, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(405, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(406, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(407, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(408, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(409, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(410, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(411, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(412, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(413, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(414, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(415, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(416, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(417, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(418, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(419, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(420, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(421, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(422, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(423, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(424, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(425, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(426, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(427, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(428, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(429, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(430, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(431, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(432, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(433, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(434, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(435, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(436, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(437, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(438, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(439, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(440, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(441, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(442, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(443, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(444, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(445, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(446, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(447, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(448, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(449, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(450, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(451, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(452, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(453, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(454, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(455, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(456, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(457, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(458, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(459, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(460, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(461, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(462, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(463, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(464, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(465, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(466, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(467, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(468, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(469, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(470, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(471, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(472, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(473, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(474, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(475, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(476, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(477, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(478, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(479, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(480, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(481, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(482, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(483, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(484, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(485, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(486, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(487, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(488, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(489, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(490, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(491, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(492, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(493, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(494, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(495, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(496, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(497, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(498, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(499, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(500, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(501, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(502, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(503, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(504, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(505, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(506, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(507, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(508, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(509, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(510, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(511, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(512, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(513, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(514, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(515, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(516, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(517, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(518, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(519, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(520, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(521, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(522, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(523, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(524, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(525, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(526, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(527, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(528, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(529, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(530, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(531, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(532, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(533, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(534, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(535, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(536, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(537, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(538, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(539, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(540, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(541, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(542, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(543, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(544, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(545, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(546, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(547, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(548, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(549, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(550, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(551, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(552, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(553, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(554, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(555, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(556, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(557, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(558, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(559, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(560, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(561, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(562, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(563, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(564, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(565, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(566, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(567, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(568, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(569, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(570, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(571, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(572, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(573, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(574, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(575, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(576, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(577, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(578, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(579, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(580, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(581, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(582, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(583, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(584, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(585, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(586, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(587, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(588, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(589, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(590, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(591, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(592, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(593, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(594, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(595, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(596, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(597, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(598, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(599, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(600, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(601, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(602, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(603, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(604, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(605, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(606, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(607, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(608, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(609, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(610, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(611, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(612, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(613, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(614, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(615, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(616, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(617, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(618, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(619, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(620, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(621, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(622, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(623, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(624, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(625, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(626, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(627, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(628, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(629, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(630, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(631, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(632, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(633, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(634, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(635, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(636, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(637, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(638, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(639, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(640, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(641, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(642, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(643, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(644, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(645, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(646, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(647, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(648, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(649, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(650, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(651, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(652, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(653, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(654, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(655, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(656, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(657, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(658, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(659, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(660, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(661, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(662, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(663, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(664, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(665, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(666, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(667, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(668, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(669, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(670, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(671, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(672, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(673, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(674, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(675, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(676, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(677, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(678, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(679, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(680, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(681, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(682, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(683, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(684, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(685, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(686, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(687, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(688, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(689, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(690, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(691, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(692, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(693, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(694, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(695, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(696, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(697, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(698, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(699, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(700, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(701, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(702, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(703, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(704, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(705, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(706, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(707, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(708, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(709, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(710, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(711, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(712, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(713, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(714, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(715, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(716, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(717, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(718, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(719, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(720, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(721, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(722, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(723, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(724, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(725, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(726, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(727, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(728, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(729, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(730, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(731, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(732, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(733, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(734, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(735, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(736, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(737, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(738, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(739, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(740, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(741, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(742, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(743, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(744, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(745, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(746, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(747, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(748, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(749, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(750, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(751, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(752, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(753, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(754, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(755, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(756, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(757, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(758, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(759, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(760, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(761, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(762, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(763, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(764, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(765, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(766, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(767, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(768, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(769, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(770, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(771, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(772, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(773, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(774, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(775, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(776, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(777, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(778, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(779, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(780, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(781, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(782, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(783, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(784, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(785, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(786, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(787, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(788, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(789, '192.168.2.100', 'Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4) AppleWebKit/537.36'),
(790, '192.168.2.100', 'Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4) AppleWebKit/537.36'),
(791, '192.168.2.100', 'Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4) AppleWebKit/537.36'),
(792, '192.168.2.100', 'Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4) AppleWebKit/537.36'),
(793, '192.168.2.100', 'Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4) AppleWebKit/537.36'),
(794, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKi'),
(795, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(796, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(797, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(798, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(799, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(800, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(801, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(802, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(803, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(804, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(805, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(806, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(807, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(808, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(809, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(810, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKi'),
(811, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(812, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(813, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(814, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(815, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(816, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(817, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(818, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKi'),
(819, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(820, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(821, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(822, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(823, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(824, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(825, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(826, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(827, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(828, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKi'),
(829, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(830, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKi'),
(831, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKi'),
(832, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(833, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(834, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(835, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(836, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(837, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(838, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(839, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(840, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(841, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(842, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(843, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(844, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(845, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(846, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(847, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(848, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(849, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(850, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(851, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(852, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(853, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(854, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(855, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(856, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(857, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(858, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(859, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(860, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(861, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(862, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(863, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(864, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(865, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(866, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(867, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(868, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(869, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(870, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(871, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(872, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(873, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(874, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(875, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(876, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(877, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(878, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(879, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(880, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(881, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(882, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(883, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(884, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(885, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(886, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(887, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(888, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(889, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(890, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(891, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(892, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(893, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKi'),
(894, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(895, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(896, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(897, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(898, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(899, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(900, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(901, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(902, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(903, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(904, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(905, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(906, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(907, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(908, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(909, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(910, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(911, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(912, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(913, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(914, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKi'),
(915, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(916, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(917, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(918, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(919, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT'),
(920, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowed`
--
ALTER TABLE `allowed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

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
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_homestay`
--
ALTER TABLE `featured_homestay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog` (`homestay`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `category` (`address`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_rating`
--
ALTER TABLE `item_rating`
  ADD PRIMARY KEY (`ratingId`);

--
-- Indexes for table `item_users`
--
ALTER TABLE `item_users`
  ADD PRIMARY KEY (`userid`);

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
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
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
-- Indexes for table `star_comments`
--
ALTER TABLE `star_comments`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `visitor_info`
--
ALTER TABLE `visitor_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allowed`
--
ALTER TABLE `allowed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
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
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `featured_homestay`
--
ALTER TABLE `featured_homestay`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `homestay_info`
--
ALTER TABLE `homestay_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345680;
--
-- AUTO_INCREMENT for table `item_rating`
--
ALTER TABLE `item_rating`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `item_users`
--
ALTER TABLE `item_users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `local_activities`
--
ALTER TABLE `local_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `owner_info`
--
ALTER TABLE `owner_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `star_comments`
--
ALTER TABLE `star_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `visitor_info`
--
ALTER TABLE `visitor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=921;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
