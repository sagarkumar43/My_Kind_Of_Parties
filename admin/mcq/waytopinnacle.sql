-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 12:43 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waytopinnacle`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `b_id` int(11) NOT NULL,
  `batch_name` varchar(255) NOT NULL,
  `batch_time` varchar(255) NOT NULL,
  `batch_status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`b_id`, `batch_name`, `batch_time`, `batch_status`) VALUES
(1, 'First Batch', '16:20', 1),
(2, 'Second Batch', '12:00', 1),
(3, 'Third Batch', '15:00', 1),
(4, 'Four Batch', '18:00', 1),
(5, 'six', '07:18', 1),
(6, 'CA Pre Aptitude', '15:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `category_name`, `category_status`) VALUES
(1, 'B.Tech', 1),
(2, 'MBA', 1),
(3, 'BBA', 1),
(4, 'M.Tech', 1),
(5, 'BCA', 1),
(6, 'B.Com', 1),
(7, 'LLB', 0),
(8, 'M.com', 1),
(9, 'MA', 1),
(10, 'B.sc', 1),
(11, 'M.sc', 1),
(12, 'BA', 1),
(13, '5th Standard', 1),
(19, 'CA Pre', 1);

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE `center` (
  `c_id` int(11) NOT NULL,
  `centername` varchar(255) NOT NULL,
  `centeraddress` text NOT NULL,
  `centercode` varchar(255) NOT NULL,
  `centerlogo` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_md5` varchar(255) NOT NULL,
  `theme_id` varchar(11) NOT NULL,
  `center_status` int(2) NOT NULL DEFAULT '1',
  `about_center` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`c_id`, `centername`, `centeraddress`, `centercode`, `centerlogo`, `location`, `phoneno`, `email`, `username`, `password`, `password_md5`, `theme_id`, `center_status`, `about_center`) VALUES
(3, 'Demo', 'Demo<br>Near XYZ<br>City XYZ<br>', '201502013473', '', '', '', 'center@demo.com', 'Demo', 'demo123!', 'LiRi61RYGFw=', '1', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `e_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subject_id` varchar(255) NOT NULL DEFAULT '0',
  `center_id` varchar(255) NOT NULL DEFAULT '0',
  `exam_name` varchar(255) NOT NULL,
  `exam_status` int(11) NOT NULL DEFAULT '1',
  `exam_date` date NOT NULL,
  `exam_time` varchar(255) NOT NULL DEFAULT '00:00',
  `exam_duration` varchar(255) NOT NULL,
  `neg_mark_status` int(2) NOT NULL DEFAULT '0',
  `negative_marks` int(11) NOT NULL,
  `time_reduction` int(2) NOT NULL,
  `passing_percentage` int(11) NOT NULL,
  `re_exam_day` int(11) NOT NULL,
  `terms_condition` text NOT NULL,
  `result_show_on_mail` int(2) NOT NULL DEFAULT '0',
  `show_question` varchar(255) NOT NULL DEFAULT '0',
  `sort_order` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`e_id`, `category_id`, `subcategory_id`, `subject_id`, `center_id`, `exam_name`, `exam_status`, `exam_date`, `exam_time`, `exam_duration`, `neg_mark_status`, `negative_marks`, `time_reduction`, `passing_percentage`, `re_exam_day`, `terms_condition`, `result_show_on_mail`, `show_question`, `sort_order`) VALUES
(13, 13, 20, '15,16', '3', 'Only Math', 1, '2015-04-05', '', '90', 1, 1, 1, 50, 1, 'Please read <br>', 0, '18,16,2,', ''),
(14, 19, 22, '19', '3', 'CA Pre App Test', 1, '2018-12-10', '', '10', 1, 1, 1, 50, 1, 'Tested...', 1, '5', '');

-- --------------------------------------------------------

--
-- Table structure for table `general_setting`
--

CREATE TABLE `general_setting` (
  `id` int(11) NOT NULL,
  `g_id` int(11) NOT NULL,
  `g_title` varchar(255) NOT NULL,
  `g_description` varchar(255) NOT NULL,
  `g_keywords` varchar(255) NOT NULL,
  `g_organization` varchar(255) NOT NULL,
  `g_copyright` varchar(255) NOT NULL,
  `g_logo` varchar(255) NOT NULL,
  `g_address` varchar(255) NOT NULL,
  `g_phone` varchar(255) NOT NULL,
  `g_passingscore` int(11) NOT NULL,
  `g_email` varchar(255) NOT NULL,
  `g_google_analytics` varchar(255) NOT NULL,
  `g_certificate_logo` varchar(255) NOT NULL,
  `g_certificate_content` text NOT NULL,
  `g_signature` varchar(255) NOT NULL,
  `g_text_signature` text NOT NULL,
  `g_timezone` varchar(255) NOT NULL,
  `desby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_setting`
--

INSERT INTO `general_setting` (`id`, `g_id`, `g_title`, `g_description`, `g_keywords`, `g_organization`, `g_copyright`, `g_logo`, `g_address`, `g_phone`, `g_passingscore`, `g_email`, `g_google_analytics`, `g_certificate_logo`, `g_certificate_content`, `g_signature`, `g_text_signature`, `g_timezone`, `desby`) VALUES
(1, 1, 'Online Examination System', 'Online Examination system for Educational Organizations', 'Online Examination System', 'Online Examination System', 'Online Examination System', 'your school.png', '1/48A,, Lalita Park, Laxmi Nagar, New Delhi, Delhi 110092', '011 6465 5765', 0, 'waytopinnacle1@gmail.com', '', 'Certification_LOGO.png', 'certificate<br>', 'signature.png', '<b>Director,</b><br>Online Examination System<br><br>', 'india', 'hKvcEYe4gWV5wSxFGJv4NrQy6w+PTDiZE0GT9xuIPxo=');

-- --------------------------------------------------------

--
-- Table structure for table `main_answer`
--

CREATE TABLE `main_answer` (
  `m_a_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subject_id` varchar(255) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `ans` varchar(255) NOT NULL,
  `marks` int(11) NOT NULL,
  `examdate` date NOT NULL,
  `correct_ans` varchar(255) NOT NULL,
  `typeofquestion` varchar(255) NOT NULL,
  `center_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `main_exam_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_answer`
--

INSERT INTO `main_answer` (`m_a_id`, `category_id`, `subcategory_id`, `subject_id`, `exam_id`, `question_id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `ans`, `marks`, `examdate`, `correct_ans`, `typeofquestion`, `center_id`, `student_id`, `main_exam_status_id`) VALUES
(17, 13, 20, '15,16', 13, 63, '<p>A Rubix cube has six faces with 16 colored squares per face. If each colored square has 2 cm sides, what is the surface area of the Rubix cube?</p>\r\n', '<p>78cm2</p>\r\n', '<p>96cm2</p>\r\n', '<p>192cm2</p>\r\n', '<p>384cm2</p>\r\n', 'B', 2, '2015-04-05', 'D', 'Single', 3, 7, 13),
(18, 13, 20, '15,16', 13, 60, '<p>The students in a school are having a cup stacking contest. John has a pyramid 9 layers high. How many cups will he need to add to his pyramid to increase the number of layers to 12? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>11</p>\r\n', '<p>24</p>\r\n', '<p>34</p>\r\n', '<p>48</p>\r\n', 'B', 2, '2015-04-05', 'C', 'Single', 3, 7, 13),
(19, 13, 20, '15,16', 13, 66, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-004.jpg\" type=\"image\" /></p>\r\n', '<p>1/2</p>\r\n', '<p><strong>&nbsp;</strong>2/5</p>\r\n', '<p><strong>3</strong>/5</p>\r\n', '<p><strong>&nbsp;</strong>4/5</p>\r\n', 'B', 2, '2015-04-05', 'C', 'Single', 3, 7, 13),
(20, 13, 20, '15,16', 13, 58, '<p>John bowls 3 games and has an average score of 85. If he bowled the same score in his first two games and bowled a score of 95 in his third game. What score did he bowl in either of his first two games? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>80</p>\r\n', '<p>85</p>\r\n', '<p>90</p>\r\n', '<p>95</p>\r\n', 'C', 2, '2015-04-05', 'A', 'Single', 3, 7, 13),
(21, 13, 20, '15,16', 13, 76, '<p>A bag contains identical sized balls of different colours : 10 red, 9 white, 7 yellow, 2 blue and 1 black. Without looking into the bag, Paul takes out the balls one by one from it. What is the least number of balls Paul must take out to ensure that at least 3 balls have the same colour? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>9</p>\r\n', '<p>10</p>\r\n', '<p>11</p>\r\n', '<p>12</p>\r\n', 'C', 2, '2015-04-05', 'A', 'Single', 3, 7, 13),
(22, 13, 20, '15,16', 13, 75, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-006.jpg\" type=\"image\" /></p>\r\n\r\n<p>Lines AC and BD meet at point O. Given that OA = 40 cm, OB = 50 cm, OC = 60 cm and OD = 75 cm, find the ratio of the area of triangle AOD to the area of triangle BOC.</p>\r\n', '<p>1:1</p>\r\n', '<p>1:2</p>\r\n', '<p>1:3</p>\r\n', '<p>1:4</p>\r\n', 'C', 2, '2015-04-05', 'B', 'Single', 3, 7, 13),
(23, 13, 20, '15,16', 13, 79, '<p>A box of chocolate has gone missing from the refrigerator. The suspects have been reduced to 4 children. Only one of them is telling the truth.</p>\r\n\r\n<p>A : &#39;I did not take the chocolate.&#39;<br />\r\nB : &#39;A is lying.&#39;<br />\r\nC : &#39;B is lying.&#39;<br />\r\nD : &#39;B took the chocolate.&#39;<br />\r\nWho took the chocolate ?</p>\r\n', '<p>A</p>\r\n', '<p>B</p>\r\n', '<p>C</p>\r\n', '<p>D</p>\r\n', 'C', 2, '2015-04-05', 'B', 'Single', 3, 7, 13),
(24, 13, 20, '15,16', 13, 71, '<p>Find the value of 20042005 &times; 20052004 &minus; 20042004 &times; 20052005 .</p>\r\n', '<p>10000</p>\r\n', '<p>15000</p>\r\n', '<p>18000</p>\r\n', '<p>19000</p>\r\n', 'A', 2, '2015-04-05', 'A', 'Single', 3, 7, 13),
(25, 13, 20, '15,16', 13, 77, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-007.jpg\" type=\"image\" /></p>\r\n', '<p>10/3</p>\r\n', '<p>11/3</p>\r\n', '<p>7/3</p>\r\n', '<p>5/3</p>\r\n', 'Not Answer', 2, '2015-04-05', 'D', 'Single', 3, 7, 13),
(26, 13, 20, '15,16', 13, 78, '<p>If the base of a triangle is increased by 10% while its height decreased by 10%, find the area of the new triangle as a percentage of the original one.</p>\r\n', '<p>80%</p>\r\n', '<p>120%</p>\r\n', '<p>87%</p>\r\n', '<p>99%</p>\r\n', 'Not Answer', 2, '2015-04-05', 'A', 'Single', 3, 7, 13),
(27, 13, 20, '15,16', 13, 73, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-005.jpg\" type=\"image\" /></p>\r\n', '<p>3675</p>\r\n', '<p>3805</p>\r\n', '<p>4095</p>\r\n', '<p>4255</p>\r\n', 'Not Answer', 2, '2015-04-05', 'C', 'Single', 3, 7, 13),
(28, 13, 20, '15,16', 13, 64, '<p>At the National Day parade, the local scout troop found that they could arrange themselves in rows of exactly 3, exactly 4, or exactly 5, with no one left over. What is the least number of scouts in the troop?</p>\r\n', '<p>36</p>\r\n', '<p>60</p>\r\n', '<p>100</p>\r\n', '<p>120</p>\r\n', 'Not Answer', 2, '2015-04-05', 'B', 'Single', 3, 7, 13),
(29, 13, 20, '15,16', 13, 65, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-003.jpg\" type=\"image\" /></p>\r\n\r\n<p>The diagram shows a dartboard. What is the least number of throws needed in order to get a score of exactly 100? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>2</p>\r\n', '<p>3</p>\r\n', '<p>4</p>\r\n', '<p>5</p>\r\n', 'Not Answer', 2, '2015-04-05', 'B', 'Single', 3, 7, 13),
(30, 13, 20, '15,16', 13, 68, '<p>Judy and Tim each has a sum of money. Judy&rsquo;s amount is 3/5 that of Tim&rsquo;s. If Tim were to give Judy $168, then his remaining amount will be 7/9 that of Judy&rsquo;s. How much does Judy have originally? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>242</p>\r\n', '<p>336</p>\r\n', '<p>175</p>\r\n', '<p>672</p>\r\n', 'Not Answer', 2, '2015-04-05', 'B', 'Single', 3, 7, 13),
(31, 13, 20, '15,16', 13, 70, '<p>The lengths of two rectangles are 11 m and 19 m respectively. Given that their total area is 321 m2, find the difference in their areas. <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p><strong>&nbsp;</strong>111</p>\r\n', '<p>191</p>\r\n', '<p><strong>&nbsp;</strong>211</p>\r\n', '<p><strong>&nbsp;</strong>241</p>\r\n', 'Not Answer', 2, '2015-04-05', 'C', 'Single', 3, 7, 13),
(32, 13, 20, '15,16', 13, 80, '<p>How many digits are there before the hundredth 9 in the following number<br />\r\n9797797779777797777797777779&hellip;&hellip;.? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>4059</p>\r\n', '<p>5049</p>\r\n', '<p>5273</p>\r\n', '<p>5534</p>\r\n', 'Not Answer', 2, '2015-04-05', 'B', 'Single', 3, 7, 13),
(33, 13, 20, '15,16', 13, 69, '<p>How long, in hours, after 12 noon, will it take for the hour hand of a clock to lie directly over its minute hand for the first time? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>12/11 hours</p>\r\n', '<p>8 hours</p>\r\n', '<p>8/11 hours</p>\r\n', '<p>7/11 hours</p>\r\n', 'Not Answer', 2, '2015-04-05', 'A', 'Single', 3, 7, 13),
(34, 13, 20, '15,16', 13, 61, '<p>January 31st was on a Tuesday; it was the 27th consecutive day in which it did not rain. What day of the week was it when it last rained? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>Monday</p>\r\n', '<p>Tuesday</p>\r\n', '<p>Wednesday</p>\r\n', '<p>Thursday</p>\r\n', 'Not Answer', 2, '2015-04-05', 'C', 'Single', 3, 7, 13),
(35, 13, 20, '15,16', 13, 91, '<p>A circus clown buys balloons at $1.44 per dozen and sells the balloons for 20 cents each. What will be his profit on a day when he buys and sells 20 dozen balloons? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>$17.40</p>\r\n', '<p>$18.60</p>\r\n', '<p><strong>&nbsp;</strong>$19.20</p>\r\n', '<p>$20.60</p>\r\n', 'Not Answer', 2, '2015-04-05', 'C', 'Single', 3, 7, 13),
(36, 13, 20, '15,16', 13, 88, '<p>(2 x 1/100) + (3 x 1/1000) + (7 x 1/10,000) = ? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>2.37</p>\r\n', '<p><strong>&nbsp;</strong>0.237</p>\r\n', '<p>0.0237</p>\r\n', '<p><strong>&nbsp;</strong>0.00237</p>\r\n', 'Not Answer', 2, '2015-04-05', 'C', 'Single', 3, 7, 13),
(37, 13, 20, '15,16', 13, 83, '<p>A piece of pasture grows at a constant rate everyday.<br />\r\n200 sheep will eat up the grass in 100 days.<br />\r\n150 sheep will eat up the grass in 150 days.<br />\r\nHow many days does it take for 100 sheep to eat up the grass? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>300 days</p>\r\n', '<p>320 days</p>\r\n', '<p>340 days</p>\r\n', '<p>360 days</p>\r\n', 'Not Answer', 2, '2015-04-05', 'A', 'Single', 3, 7, 13),
(38, 13, 20, '15,16', 13, 99, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-012.jpg\" style=\"width: 249px; height: 55px;\" type=\"image\" /></p>\r\n\r\n<p>A dart hits the dartboard shown at random. Find the probability of the dart landing in the shaded region. <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>1/2</p>\r\n', '<p>1/3</p>\r\n', '<p>1/4</p>\r\n', '<p>1/5</p>\r\n', 'Not Answer', 2, '2015-04-05', 'B', 'Single', 3, 7, 13),
(39, 13, 20, '15,16', 13, 105, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-014.jpg\" type=\"image\" /></p>\r\n\r\n<p>In the multiplication example above, all number from 1 through 9 have been used once, and once only. Three of the numbers are given. What is the three digit number on top?</p>\r\n', '<p>279</p>\r\n', '<p>297</p>\r\n', '<p>246</p>\r\n', '<p>264</p>\r\n', 'Not Answer', 2, '2015-04-05', 'B', 'Single', 3, 7, 13),
(40, 13, 20, '15,16', 13, 104, '<p>Peter usually travels from town P to town Q in eight hours. One day, he increased his average speed by 5km per hour so that he arrived 20 minutes earlier. Find his usual average speed, in km per hour.</p>\r\n', '<p>110 km/h</p>\r\n', '<p>115 km/h</p>\r\n', '<p>125 km/h</p>\r\n', '<p><strong>&nbsp;</strong>135 km/h</p>\r\n', 'Not Answer', 2, '2015-04-05', 'B', 'Single', 3, 7, 13),
(41, 13, 20, '15,16', 13, 93, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-009.jpg\" type=\"image\" /></p>\r\n\r\n<p>In the diagram, there is an equilateral triangle and a square. If the perimeter of the triangle is 24 m, find the area of the square. <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p><strong>&nbsp;</strong>25 m2</p>\r\n', '<p><strong>&nbsp;</strong>36 m2</p>\r\n', '<p><strong>&nbsp;</strong>49 m2</p>\r\n', '<p>64 m2</p>\r\n', 'Not Answer', 2, '2015-04-05', 'C', 'Single', 3, 7, 13),
(42, 13, 20, '15,16', 13, 82, '<p>How many rectangles are there in the diagram?</p>\r\n\r\n<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-008.jpg\" type=\"image\" /></p>\r\n', '<p>26</p>\r\n', '<p>28</p>\r\n', '<p>30</p>\r\n', '<p>32</p>\r\n', 'Not Answer', 2, '2015-04-05', 'C', 'Single', 3, 7, 13),
(43, 13, 20, '15,16', 13, 96, '<p>In a camel herd with 80 legs, half the camels have one hump and half have two. How many humps are there in this herd? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>24</p>\r\n', '<p>26</p>\r\n', '<p>28</p>\r\n', '<p>30</p>\r\n', 'Not Answer', 2, '2015-04-05', 'D', 'Single', 3, 7, 13),
(44, 13, 20, '15,16', 13, 92, '<p>Today is Saturday, May 5, 2001. One year from today will be May 5, 2002. What day of the week will that be?</p>\r\n', '<p>Sunday</p>\r\n', '<p>Monday</p>\r\n', '<p>Tuesday</p>\r\n', '<p>Wednesday</p>\r\n', 'Not Answer', 2, '2015-04-05', 'A', 'Single', 3, 7, 13),
(45, 13, 20, '15,16', 13, 95, '<p>I was paid $2.80 on the first day, and my salary doubled each day thereafter. I earned a total of $714. How many days did I work?</p>\r\n', '<p>8</p>\r\n', '<p>10</p>\r\n', '<p>12</p>\r\n', '<p>14</p>\r\n', 'Not Answer', 2, '2015-04-05', 'A', 'Single', 3, 7, 13),
(46, 13, 20, '15,16', 13, 102, '<p>In 2008, the price of car A is $20,000 and car B is $25,000. Each year, the price of car A decreases by 5% and that of car B decreases by 10%. In what year will car B be cheaper than car A? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>2011</p>\r\n', '<p>2012</p>\r\n', '<p>2013</p>\r\n', '<p>2014</p>\r\n', 'Not Answer', 2, '2015-04-05', 'C', 'Single', 3, 7, 13),
(47, 13, 20, '15,16', 13, 94, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-010.jpg\" style=\"width: 95px; height: 97px;\" type=\"image\" /></p>\r\n\r\n<p>Square ABCD has a perimeter of 8 cm. If a circle is inscribed in the square as shown, what is the area of the circle? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>1.57 m2</p>\r\n', '<p>3.14 m2</p>\r\n', '<p><strong>&nbsp;</strong>4.71 m2</p>\r\n', '<p>6.28 m2</p>\r\n', 'Not Answer', 2, '2015-04-05', 'B', 'Single', 3, 7, 13),
(48, 13, 20, '15,16', 13, 101, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-013.jpg\" type=\"image\" /></p>\r\n\r\n<p>Find the measure of angle ABC as shown in the following figure, where AC = CB = CD, and the measure of angle ADC is 29 degrees.</p>\r\n', '<p>58 degree</p>\r\n', '<p><strong>&nbsp;</strong>45 degree</p>\r\n', '<p>56 degree</p>\r\n', '<p><strong>&nbsp;</strong>61 degree</p>\r\n', 'Not Answer', 2, '2015-04-05', 'C', 'Single', 3, 7, 13),
(49, 13, 20, '15,16', 13, 81, '<p>A particular month has 5 Tuesdays. The first and the last day of the month are not Tuesday. What day is the last day of the month? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>Sunday</p>\r\n', '<p>Monday</p>\r\n', '<p>Wednesday</p>\r\n', '<p>Thursday</p>\r\n', 'Not Answer', 2, '2015-04-05', 'C', 'Single', 3, 7, 13),
(50, 13, 20, '15,16', 13, 97, '<p>Katie and Jim play a game with 2 six sided number cubes numbered 1 through 6. When the number cubes are rolled, Katie gets a point if the sum of the two is even and Jim gets a point if the product is even. What is the likelihood that on one roll of both cubes both Katie and Jim get a point?</p>\r\n', '<p>1/2</p>\r\n', '<p>1/3</p>\r\n', '<p>1/4</p>\r\n', '<p>1/5</p>\r\n', 'Not Answer', 2, '2015-04-05', 'C', 'Single', 3, 7, 13),
(85, 13, 20, '15,16', 13, 63, '<p>A Rubix cube has six faces with 16 colored squares per face. If each colored square has 2 cm sides, what is the surface area of the Rubix cube?</p>\r\n', '<p>78cm2</p>\r\n', '<p>96cm2</p>\r\n', '<p>192cm2</p>\r\n', '<p>384cm2</p>\r\n', 'Not Answer', 2, '2015-04-14', 'D', 'Single', 3, 7, 15),
(86, 13, 20, '15,16', 13, 68, '<p>Judy and Tim each has a sum of money. Judy&rsquo;s amount is 3/5 that of Tim&rsquo;s. If Tim were to give Judy $168, then his remaining amount will be 7/9 that of Judy&rsquo;s. How much does Judy have originally? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>242</p>\r\n', '<p>336</p>\r\n', '<p>175</p>\r\n', '<p>672</p>\r\n', 'Not Answer', 2, '2015-04-14', 'B', 'Single', 3, 7, 15),
(87, 13, 20, '15,16', 13, 79, '<p>A box of chocolate has gone missing from the refrigerator. The suspects have been reduced to 4 children. Only one of them is telling the truth.</p>\r\n\r\n<p>A : &#39;I did not take the chocolate.&#39;<br />\r\nB : &#39;A is lying.&#39;<br />\r\nC : &#39;B is lying.&#39;<br />\r\nD : &#39;B took the chocolate.&#39;<br />\r\nWho took the chocolate ?</p>\r\n', '<p>A</p>\r\n', '<p>B</p>\r\n', '<p>C</p>\r\n', '<p>D</p>\r\n', 'Not Answer', 2, '2015-04-14', 'B', 'Single', 3, 7, 15),
(88, 13, 20, '15,16', 13, 65, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-003.jpg\" type=\"image\" /></p>\r\n\r\n<p>The diagram shows a dartboard. What is the least number of throws needed in order to get a score of exactly 100? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>2</p>\r\n', '<p>3</p>\r\n', '<p>4</p>\r\n', '<p>5</p>\r\n', 'Not Answer', 2, '2015-04-14', 'B', 'Single', 3, 7, 15),
(89, 13, 20, '15,16', 13, 60, '<p>The students in a school are having a cup stacking contest. John has a pyramid 9 layers high. How many cups will he need to add to his pyramid to increase the number of layers to 12? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>11</p>\r\n', '<p>24</p>\r\n', '<p>34</p>\r\n', '<p>48</p>\r\n', 'Not Answer', 2, '2015-04-14', 'C', 'Single', 3, 7, 15),
(90, 13, 20, '15,16', 13, 61, '<p>January 31st was on a Tuesday; it was the 27th consecutive day in which it did not rain. What day of the week was it when it last rained?</p>\r\n', '<p>Monday</p>\r\n', '<p>Tuesday</p>\r\n', '<p>Wednesday</p>\r\n', '<p>Thursday</p>\r\n', 'Not Answer', 2, '2015-04-14', 'C', 'Single', 3, 7, 15),
(91, 13, 20, '15,16', 13, 73, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-005.jpg\" type=\"image\" /></p>\r\n', '<p>3675</p>\r\n', '<p>3805</p>\r\n', '<p>4095</p>\r\n', '<p>4255</p>\r\n', 'Not Answer', 2, '2015-04-14', 'C', 'Single', 3, 7, 15),
(92, 13, 20, '15,16', 13, 66, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-004.jpg\" type=\"image\" /></p>\r\n', '<p>1/2</p>\r\n', '<p><strong>&nbsp;</strong>2/5</p>\r\n', '<p><strong>3</strong>/5</p>\r\n', '<p><strong>&nbsp;</strong>4/5</p>\r\n', 'Not Answer', 2, '2015-04-14', 'C', 'Single', 3, 7, 15),
(93, 13, 20, '15,16', 13, 67, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-002.jpg\" type=\"image\" /></p>\r\n\r\n<p>Two squares, with lengths 4 cm and 6 cm respectively, are partially overlapped as shown in the diagram above. What is the difference between shaded area of the small square and shaded area of the big square? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>16cm2</p>\r\n', '<p>20cm2</p>\r\n', '<p>26cm2</p>\r\n', '<p>30cm2</p>\r\n', 'Not Answer', 2, '2015-04-14', 'A', 'Single', 3, 7, 15),
(94, 13, 20, '15,16', 13, 77, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-007.jpg\" type=\"image\" /></p>\r\n', '<p>10/3</p>\r\n', '<p>11/3</p>\r\n', '<p>7/3</p>\r\n', '<p>5/3</p>\r\n', 'Not Answer', 2, '2015-04-14', 'D', 'Single', 3, 7, 15),
(95, 13, 20, '15,16', 13, 75, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-006.jpg\" type=\"image\" /></p>\r\n\r\n<p>Lines AC and BD meet at point O. Given that OA = 40 cm, OB = 50 cm, OC = 60 cm and OD = 75 cm, find the ratio of the area of triangle AOD to the area of triangle BOC.</p>\r\n', '<p>1:1</p>\r\n', '<p>1:2</p>\r\n', '<p>1:3</p>\r\n', '<p>1:4</p>\r\n', 'Not Answer', 2, '2015-04-14', 'B', 'Single', 3, 7, 15),
(96, 13, 20, '15,16', 13, 62, '<p>Tan and Emelyn are waiting in line to get on the school bus. Tan is seventh in line. Emelyn is in the middle of the line. There are six students between Tan and Emelyn. How many students are waiting in line?</p>\r\n', '<p>12</p>\r\n', '<p>18</p>\r\n', '<p>25</p>\r\n', '<p>27</p>\r\n', 'Not Answer', 2, '2015-04-14', 'D', 'Single', 3, 7, 15),
(97, 13, 20, '15,16', 13, 80, '<p>How many digits are there before the hundredth 9 in the following number<br />\r\n9797797779777797777797777779&hellip;&hellip;.?</p>\r\n', '<p>4059</p>\r\n', '<p>5049</p>\r\n', '<p>5273</p>\r\n', '<p>5534</p>\r\n', 'Not Answer', 2, '2015-04-14', 'B', 'Single', 3, 7, 15),
(98, 13, 20, '15,16', 13, 57, '<p>The surface of a swimming pool is rectangular in shape and measures 12 metre by 20 metre. A concrete walk 2 metre wide is to be built around the surface of the pool. What will be the surface area of the walk?</p>\r\n', '<p>144m2</p>\r\n', '<p>240m2</p>\r\n', '<p>384m2</p>\r\n', '<p>112m2</p>\r\n', 'Not Answer', 2, '2015-04-14', 'A', 'Single', 3, 7, 15),
(99, 13, 20, '15,16', 13, 71, '<p>Find the value of 20042005 &times; 20052004 &minus; 20042004 &times; 20052005 .</p>\r\n', '<p>10000</p>\r\n', '<p>15000</p>\r\n', '<p>18000</p>\r\n', '<p>19000</p>\r\n', 'Not Answer', 2, '2015-04-14', 'A', 'Single', 3, 7, 15),
(100, 13, 20, '15,16', 13, 64, '<p>At the National Day parade, the local scout troop found that they could arrange themselves in rows of exactly 3, exactly 4, or exactly 5, with no one left over. What is the least number of scouts in the troop?</p>\r\n', '<p>36</p>\r\n', '<p>60</p>\r\n', '<p>100</p>\r\n', '<p>120</p>\r\n', 'Not Answer', 2, '2015-04-14', 'B', 'Single', 3, 7, 15),
(101, 13, 20, '15,16', 13, 70, '<p>The lengths of two rectangles are 11 m and 19 m respectively. Given that their total area is 321 m2, find the difference in their areas. <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p><strong>&nbsp;</strong>111</p>\r\n', '<p>191</p>\r\n', '<p><strong>&nbsp;</strong>211</p>\r\n', '<p><strong>&nbsp;</strong>241</p>\r\n', 'Not Answer', 2, '2015-04-14', 'C', 'Single', 3, 7, 15),
(102, 13, 20, '15,16', 13, 59, '<p>The squares on a mat are arranged in the following order color pattern; blue, green, red, yellow, brown, purple. If the mat has 64 squares, what is the greatest number of blue squares the mat will have?</p>\r\n', '<p><strong>&nbsp;</strong>8</p>\r\n', '<p>11</p>\r\n', '<p>32</p>\r\n', '<p>64</p>\r\n', 'Not Answer', 2, '2015-04-14', 'B', 'Single', 3, 7, 15),
(103, 13, 20, '15,16', 13, 95, '<p>I was paid $2.80 on the first day, and my salary doubled each day thereafter. I earned a total of $714. How many days did I work?</p>\r\n', '<p>8</p>\r\n', '<p>10</p>\r\n', '<p>12</p>\r\n', '<p>14</p>\r\n', 'Not Answer', 2, '2015-04-14', 'A', 'Single', 3, 7, 15),
(104, 13, 20, '15,16', 13, 83, '<p>A piece of pasture grows at a constant rate everyday.<br />\r\n200 sheep will eat up the grass in 100 days.<br />\r\n150 sheep will eat up the grass in 150 days.<br />\r\nHow many days does it take for 100 sheep to eat up the grass?</p>\r\n', '<p>300 days</p>\r\n', '<p>320 days</p>\r\n', '<p>340 days</p>\r\n', '<p>360 days</p>\r\n', 'Not Answer', 2, '2015-04-14', 'A', 'Single', 3, 7, 15),
(105, 13, 20, '15,16', 13, 85, '<p>Let ABCD be a square with each side of length 1 unit. If M is the intersection of its diagonals and P is the midpoint of MB, what is the square of the length of AP?</p>\r\n', '<p>3/4</p>\r\n', '<p>5/8</p>\r\n', '<p>1/2</p>\r\n', '<p>3/8</p>\r\n', 'Not Answer', 2, '2015-04-14', 'B', 'Single', 3, 7, 15),
(106, 13, 20, '15,16', 13, 93, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-009.jpg\" type=\"image\" /></p>\r\n\r\n<p>In the diagram, there is an equilateral triangle and a square. If the perimeter of the triangle is 24 m, find the area of the square.</p>\r\n', '<p><strong>&nbsp;</strong>25 m2</p>\r\n', '<p><strong>&nbsp;</strong>36 m2</p>\r\n', '<p><strong>&nbsp;</strong>49 m2</p>\r\n', '<p>64 m2</p>\r\n', 'Not Answer', 2, '2015-04-14', 'C', 'Single', 3, 7, 15),
(107, 13, 20, '15,16', 13, 102, '<p>In 2008, the price of car A is $20,000 and car B is $25,000. Each year, the price of car A decreases by 5% and that of car B decreases by 10%. In what year will car B be cheaper than car A?</p>\r\n', '<p>2011</p>\r\n', '<p>2012</p>\r\n', '<p>2013</p>\r\n', '<p>2014</p>\r\n', 'Not Answer', 2, '2015-04-14', 'C', 'Single', 3, 7, 15),
(108, 13, 20, '15,16', 13, 88, '<p>(2 x 1/100) + (3 x 1/1000) + (7 x 1/10,000) = ?</p>\r\n', '<p>2.37</p>\r\n', '<p><strong>&nbsp;</strong>0.237</p>\r\n', '<p>0.0237</p>\r\n', '<p><strong>&nbsp;</strong>0.00237</p>\r\n', 'Not Answer', 2, '2015-04-14', 'C', 'Single', 3, 7, 15),
(109, 13, 20, '15,16', 13, 89, '<p>If the pattern of the first six letters in CIRCUSCIRCUS&hellip; continues, then the pattern&rsquo;s 500th letter is?</p>\r\n', '<p>C</p>\r\n', '<p>I</p>\r\n', '<p>R</p>\r\n', '<p>S</p>\r\n', 'Not Answer', 2, '2015-04-14', 'B', 'Single', 3, 7, 15),
(110, 13, 20, '15,16', 13, 97, '<p>Katie and Jim play a game with 2 six sided number cubes numbered 1 through 6. When the number cubes are rolled, Katie gets a point if the sum of the two is even and Jim gets a point if the product is even. What is the likelihood that on one roll of both cubes both Katie and Jim get a point?</p>\r\n', '<p>1/2</p>\r\n', '<p>1/3</p>\r\n', '<p>1/4</p>\r\n', '<p>1/5</p>\r\n', 'Not Answer', 2, '2015-04-14', 'C', 'Single', 3, 7, 15),
(111, 13, 20, '15,16', 13, 100, '<p>The colored stripes pattern Red, Blue, Blue, Green, Yellow repeats on wall paper. What will be the color of the 32nd stripe?</p>\r\n', '<p>Red</p>\r\n', '<p>Blue</p>\r\n', '<p>Green</p>\r\n', '<p>Yellow</p>\r\n', 'Not Answer', 2, '2015-04-14', 'B', 'Single', 3, 7, 15),
(112, 13, 20, '15,16', 13, 104, '<p>Peter usually travels from town P to town Q in eight hours. One day, he increased his average speed by 5km per hour so that he arrived 20 minutes earlier. Find his usual average speed, in km per hour.</p>\r\n', '<p>110 km/h</p>\r\n', '<p>115 km/h</p>\r\n', '<p>125 km/h</p>\r\n', '<p><strong>&nbsp;</strong>135 km/h</p>\r\n', 'Not Answer', 2, '2015-04-14', 'B', 'Single', 3, 7, 15),
(113, 13, 20, '15,16', 13, 101, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-013.jpg\" type=\"image\" /></p>\r\n\r\n<p>Find the measure of angle ABC as shown in the following figure, where AC = CB = CD, and the measure of angle ADC is 29 degrees.</p>\r\n', '<p>58 degree</p>\r\n', '<p><strong>&nbsp;</strong>45 degree</p>\r\n', '<p>56 degree</p>\r\n', '<p><strong>&nbsp;</strong>61 degree</p>\r\n', 'Not Answer', 2, '2015-04-14', 'C', 'Single', 3, 7, 15),
(114, 13, 20, '15,16', 13, 90, '<p>The digits 1986 are written in order from largest to smallest. Next they&rsquo;re written in order from smallest to largest. What number is halfway between these two numbers?</p>\r\n', '<p>4535</p>\r\n', '<p>5775</p>\r\n', '<p>5865</p>\r\n', '<p>6035</p>\r\n', 'Not Answer', 2, '2015-04-14', 'B', 'Single', 3, 7, 15),
(115, 13, 20, '15,16', 13, 86, '<p>There are buses travelling to and fro between Station A and Station B. The buses leave the stations at regular interval and a bus will meet another bus coming in the opposite direction every 6 minutes. Peter starts cycling from A towards B at the same time Jane starts cycling from B towards A. Peter and Jane will meet a bus coming in the opposite direction every 7 and 8 minutes respectively. After 56 minutes of cycling on the road, they meet each other. Find the time taken by a bus to travel from A to B.</p>\r\n', '<p><strong>&nbsp;</strong>32 minutes</p>\r\n', '<p>46 minutes</p>\r\n', '<p>68 minutes</p>\r\n', '<p><strong>&nbsp;</strong>84 minutes</p>\r\n', 'Not Answer', 2, '2015-04-14', 'C', 'Single', 3, 7, 15),
(116, 13, 20, '15,16', 13, 96, '<p>In a camel herd with 80 legs, half the camels have one hump and half have two. How many humps are there in this herd? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>24</p>\r\n', '<p>26</p>\r\n', '<p>28</p>\r\n', '<p>30</p>\r\n', 'Not Answer', 2, '2015-04-14', 'D', 'Single', 3, 7, 15),
(117, 13, 20, '15,16', 13, 81, '<p>A particular month has 5 Tuesdays. The first and the last day of the month are not Tuesday. What day is the last day of the month?</p>\r\n', '<p>Sunday</p>\r\n', '<p>Monday</p>\r\n', '<p>Wednesday</p>\r\n', '<p>Thursday</p>\r\n', 'Not Answer', 2, '2015-04-14', 'C', 'Single', 3, 7, 15),
(118, 13, 20, '15,16', 13, 103, '<p>The average of 10 consecutive odd numbers is 120. What is the average of the 5 largest numbers?</p>\r\n', '<p>100</p>\r\n', '<p>105</p>\r\n', '<p>115</p>\r\n', '<p>125</p>\r\n', 'D', 2, '2015-04-14', 'D', 'Single', 3, 7, 15),
(119, 13, 20, '15,16', 13, 75, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-006.jpg\" type=\"image\" /></p>\r\n\r\n<p>Lines AC and BD meet at point O. Given that OA = 40 cm, OB = 50 cm, OC = 60 cm and OD = 75 cm, find the ratio of the area of triangle AOD to the area of triangle BOC.</p>\r\n', '<p>1:1</p>\r\n', '<p>1:2</p>\r\n', '<p>1:3</p>\r\n', '<p>1:4</p>\r\n', 'B', 2, '2015-04-19', 'B', 'Single', 3, 7, 16),
(120, 13, 20, '15,16', 13, 70, '<p>The lengths of two rectangles are 11 m and 19 m respectively. Given that their total area is 321 m2, find the difference in their areas. <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p><strong>&nbsp;</strong>111</p>\r\n', '<p>191</p>\r\n', '<p><strong>&nbsp;</strong>211</p>\r\n', '<p><strong>&nbsp;</strong>241</p>\r\n', 'C', 2, '2015-04-19', 'C', 'Single', 3, 7, 16),
(121, 13, 20, '15,16', 13, 74, '<p>One pan can fry 2 pieces of meat at one time. Every piece of meat needs two minutes to be cooked (one minute for each side). Using only one pan, find the least possible time required to cook 2000 pieces of meet. <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>500 minutes</p>\r\n', '<p>1000 minutes</p>\r\n', '<p>2000 minutes</p>\r\n', '<p>4000 minutes</p>\r\n', 'B', 2, '2015-04-19', 'C', 'Single', 3, 7, 16),
(122, 13, 20, '15,16', 13, 73, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-005.jpg\" type=\"image\" /></p>\r\n', '<p>3675</p>\r\n', '<p>3805</p>\r\n', '<p>4095</p>\r\n', '<p>4255</p>\r\n', 'B', 2, '2015-04-19', 'C', 'Single', 3, 7, 16),
(123, 13, 20, '15,16', 13, 59, '<p>The squares on a mat are arranged in the following order color pattern; blue, green, red, yellow, brown, purple. If the mat has 64 squares, what is the greatest number of blue squares the mat will have?</p>\r\n', '<p><strong>&nbsp;</strong>8</p>\r\n', '<p>11</p>\r\n', '<p>32</p>\r\n', '<p>64</p>\r\n', 'Not Answer', 2, '2015-04-19', 'B', 'Single', 3, 7, 16),
(124, 13, 20, '15,16', 13, 62, '<p>Tan and Emelyn are waiting in line to get on the school bus. Tan is seventh in line. Emelyn is in the middle of the line. There are six students between Tan and Emelyn. How many students are waiting in line?</p>\r\n', '<p>12</p>\r\n', '<p>18</p>\r\n', '<p>25</p>\r\n', '<p>27</p>\r\n', 'B', 2, '2015-04-19', 'D', 'Single', 3, 7, 16),
(125, 13, 20, '15,16', 13, 56, '<p>Two dice are rolled. How many different combinations of numbers can come up? Hint: If the first die shows one dot, there are six possible number-pairs which could result.</p>\r\n', '<p>12</p>\r\n', '<p>24</p>\r\n', '<p>36</p>\r\n', '<p>48</p>\r\n', 'B', 2, '2015-04-19', 'C', 'Single', 3, 7, 16),
(126, 13, 20, '15,16', 13, 64, '<p>At the National Day parade, the local scout troop found that they could arrange themselves in rows of exactly 3, exactly 4, or exactly 5, with no one left over. What is the least number of scouts in the troop?</p>\r\n', '<p>36</p>\r\n', '<p>60</p>\r\n', '<p>100</p>\r\n', '<p>120</p>\r\n', 'A', 2, '2015-04-19', 'B', 'Single', 3, 7, 16),
(127, 13, 20, '15,16', 13, 65, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-003.jpg\" type=\"image\" /></p>\r\n\r\n<p>The diagram shows a dartboard. What is the least number of throws needed in order to get a score of exactly 100? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>2</p>\r\n', '<p>3</p>\r\n', '<p>4</p>\r\n', '<p>5</p>\r\n', 'C', 2, '2015-04-19', 'B', 'Single', 3, 7, 16),
(128, 13, 20, '15,16', 13, 80, '<p>How many digits are there before the hundredth 9 in the following number<br />\r\n9797797779777797777797777779&hellip;&hellip;.?</p>\r\n', '<p>4059</p>\r\n', '<p>5049</p>\r\n', '<p>5273</p>\r\n', '<p>5534</p>\r\n', 'A', 2, '2015-04-19', 'B', 'Single', 3, 7, 16),
(129, 13, 20, '15,16', 13, 57, '<p>The surface of a swimming pool is rectangular in shape and measures 12 metre by 20 metre. A concrete walk 2 metre wide is to be built around the surface of the pool. What will be the surface area of the walk?</p>\r\n', '<p>144m2</p>\r\n', '<p>240m2</p>\r\n', '<p>384m2</p>\r\n', '<p>112m2</p>\r\n', 'B', 2, '2015-04-19', 'A', 'Single', 3, 7, 16),
(130, 13, 20, '15,16', 13, 60, '<p>The students in a school are having a cup stacking contest. John has a pyramid 9 layers high. How many cups will he need to add to his pyramid to increase the number of layers to 12? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>11</p>\r\n', '<p>24</p>\r\n', '<p>34</p>\r\n', '<p>48</p>\r\n', 'C', 2, '2015-04-19', 'C', 'Single', 3, 7, 16),
(131, 13, 20, '15,16', 13, 68, '<p>Judy and Tim each has a sum of money. Judy&rsquo;s amount is 3/5 that of Tim&rsquo;s. If Tim were to give Judy $168, then his remaining amount will be 7/9 that of Judy&rsquo;s. How much does Judy have originally? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>242</p>\r\n', '<p>336</p>\r\n', '<p>175</p>\r\n', '<p>672</p>\r\n', 'A', 2, '2015-04-19', 'B', 'Single', 3, 7, 16),
(132, 13, 20, '15,16', 13, 69, '<p>How long, in hours, after 12 noon, will it take for the hour hand of a clock to lie directly over its minute hand for the first time? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>12/11 hours</p>\r\n', '<p>8 hours</p>\r\n', '<p>8/11 hours</p>\r\n', '<p>7/11 hours</p>\r\n', 'D', 2, '2015-04-19', 'A', 'Single', 3, 7, 16),
(133, 13, 20, '15,16', 13, 58, '<p>John bowls 3 games and has an average score of 85. If he bowled the same score in his first two games and bowled a score of 95 in his third game. What score did he bowl in either of his first two games?</p>\r\n', '<p>80</p>\r\n', '<p>85</p>\r\n', '<p>90</p>\r\n', '<p>95</p>\r\n', 'B', 2, '2015-04-19', 'A', 'Single', 3, 7, 16),
(134, 13, 20, '15,16', 13, 78, '<p>If the base of a triangle is increased by 10% while its height decreased by 10%, find the area of the new triangle as a percentage of the original one.</p>\r\n', '<p>80%</p>\r\n', '<p>120%</p>\r\n', '<p>87%</p>\r\n', '<p>99%</p>\r\n', 'A', 2, '2015-04-19', 'A', 'Single', 3, 7, 16),
(135, 13, 20, '15,16', 13, 71, '<p>Find the value of 20042005 &times; 20052004 &minus; 20042004 &times; 20052005 .</p>\r\n', '<p>10000</p>\r\n', '<p>15000</p>\r\n', '<p>18000</p>\r\n', '<p>19000</p>\r\n', 'C', 2, '2015-04-19', 'A', 'Single', 3, 7, 16),
(136, 13, 20, '15,16', 13, 79, '<p>A box of chocolate has gone missing from the refrigerator. The suspects have been reduced to 4 children. Only one of them is telling the truth.</p>\r\n\r\n<p>A : &#39;I did not take the chocolate.&#39;<br />\r\nB : &#39;A is lying.&#39;<br />\r\nC : &#39;B is lying.&#39;<br />\r\nD : &#39;B took the chocolate.&#39;<br />\r\nWho took the chocolate ?</p>\r\n', '<p>A</p>\r\n', '<p>B</p>\r\n', '<p>C</p>\r\n', '<p>D</p>\r\n', 'A', 2, '2015-04-19', 'B', 'Single', 3, 7, 16),
(137, 13, 20, '15,16', 13, 103, '<p>The average of 10 consecutive odd numbers is 120. What is the average of the 5 largest numbers?</p>\r\n', '<p>100</p>\r\n', '<p>105</p>\r\n', '<p>115</p>\r\n', '<p>125</p>\r\n', 'C', 2, '2015-04-19', 'D', 'Single', 3, 7, 16),
(138, 13, 20, '15,16', 13, 87, '<p>Which number leaves a remainder of 1 when divided by 5 and also when divided by 7?</p>\r\n', '<p>671</p>\r\n', '<p>761</p>\r\n', '<p>176</p>\r\n', '<p>716</p>\r\n', 'B', 2, '2015-04-19', 'C', 'Single', 3, 7, 16),
(139, 13, 20, '15,16', 13, 102, '<p>In 2008, the price of car A is $20,000 and car B is $25,000. Each year, the price of car A decreases by 5% and that of car B decreases by 10%. In what year will car B be cheaper than car A?</p>\r\n', '<p>2011</p>\r\n', '<p>2012</p>\r\n', '<p>2013</p>\r\n', '<p>2014</p>\r\n', 'A', 2, '2015-04-19', 'C', 'Single', 3, 7, 16),
(140, 13, 20, '15,16', 13, 95, '<p>I was paid $2.80 on the first day, and my salary doubled each day thereafter. I earned a total of $714. How many days did I work?</p>\r\n', '<p>8</p>\r\n', '<p>10</p>\r\n', '<p>12</p>\r\n', '<p>14</p>\r\n', 'C', 2, '2015-04-19', 'A', 'Single', 3, 7, 16),
(141, 13, 20, '15,16', 13, 105, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-014.jpg\" type=\"image\" /></p>\r\n\r\n<p>In the multiplication example above, all number from 1 through 9 have been used once, and once only. Three of the numbers are given. What is the three digit number on top?</p>\r\n', '<p>279</p>\r\n', '<p>297</p>\r\n', '<p>246</p>\r\n', '<p>264</p>\r\n', 'B', 2, '2015-04-19', 'B', 'Single', 3, 7, 16),
(142, 13, 20, '15,16', 13, 89, '<p>If the pattern of the first six letters in CIRCUSCIRCUS&hellip; continues, then the pattern&rsquo;s 500th letter is?</p>\r\n', '<p>C</p>\r\n', '<p>I</p>\r\n', '<p>R</p>\r\n', '<p>S</p>\r\n', 'C', 2, '2015-04-19', 'B', 'Single', 3, 7, 16),
(143, 13, 20, '15,16', 13, 88, '<p>(2 x 1/100) + (3 x 1/1000) + (7 x 1/10,000) = ?</p>\r\n', '<p>2.37</p>\r\n', '<p><strong>&nbsp;</strong>0.237</p>\r\n', '<p>0.0237</p>\r\n', '<p><strong>&nbsp;</strong>0.00237</p>\r\n', 'C', 2, '2015-04-19', 'C', 'Single', 3, 7, 16),
(144, 13, 20, '15,16', 13, 83, '<p>A piece of pasture grows at a constant rate everyday.<br />\r\n200 sheep will eat up the grass in 100 days.<br />\r\n150 sheep will eat up the grass in 150 days.<br />\r\nHow many days does it take for 100 sheep to eat up the grass?</p>\r\n', '<p>300 days</p>\r\n', '<p>320 days</p>\r\n', '<p>340 days</p>\r\n', '<p>360 days</p>\r\n', 'Not Answer', 2, '2015-04-19', 'A', 'Single', 3, 7, 16),
(145, 13, 20, '15,16', 13, 101, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-013.jpg\" type=\"image\" /></p>\r\n\r\n<p>Find the measure of angle ABC as shown in the following figure, where AC = CB = CD, and the measure of angle ADC is 29 degrees.</p>\r\n', '<p>58 degree</p>\r\n', '<p><strong>&nbsp;</strong>45 degree</p>\r\n', '<p>56 degree</p>\r\n', '<p><strong>&nbsp;</strong>61 degree</p>\r\n', 'B', 2, '2015-04-19', 'C', 'Single', 3, 7, 16),
(146, 13, 20, '15,16', 13, 81, '<p>A particular month has 5 Tuesdays. The first and the last day of the month are not Tuesday. What day is the last day of the month?</p>\r\n', '<p>Sunday</p>\r\n', '<p>Monday</p>\r\n', '<p>Wednesday</p>\r\n', '<p>Thursday</p>\r\n', 'A', 2, '2015-04-19', 'C', 'Single', 3, 7, 16),
(147, 13, 20, '15,16', 13, 98, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-011.jpg\" type=\"image\" /></p>\r\n\r\n<p>Pictured is a sequence of growing chairs. The first chair is made of 6 squares. How many more squares are in the 8th chair in the sequence than in the first?</p>\r\n', '<p>24</p>\r\n', '<p>26</p>\r\n', '<p>28</p>\r\n', '<p>30</p>\r\n', 'C', 2, '2015-04-19', 'C', 'Single', 3, 7, 16),
(148, 13, 20, '15,16', 13, 94, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-010.jpg\" style=\"height:97px; width:95px\" type=\"image\" /></p>\r\n\r\n<p>Square ABCD has a perimeter of 8 cm. If a circle is inscribed in the square as shown, what is the area of the circle?</p>\r\n', '<p>1.57 m2</p>\r\n', '<p>3.14 m2</p>\r\n', '<p><strong>&nbsp;</strong>4.71 m2</p>\r\n', '<p>6.28 m2</p>\r\n', 'C', 2, '2015-04-19', 'B', 'Single', 3, 7, 16),
(149, 13, 20, '15,16', 13, 90, '<p>The digits 1986 are written in order from largest to smallest. Next they&rsquo;re written in order from smallest to largest. What number is halfway between these two numbers?</p>\r\n', '<p>4535</p>\r\n', '<p>5775</p>\r\n', '<p>5865</p>\r\n', '<p>6035</p>\r\n', 'A', 2, '2015-04-19', 'B', 'Single', 3, 7, 16),
(150, 13, 20, '15,16', 13, 84, '<p>The digits 3, 4, 5 and 7 can form twenty four different four digit numbers. Find the average of these twenty four numbers.</p>\r\n', '<p>5867.75</p>\r\n', '<p>4537.50</p>\r\n', '<p><strong>&nbsp;</strong>3548.35</p>\r\n', '<p>5277.25</p>\r\n', 'A', 2, '2015-04-19', 'D', 'Single', 3, 7, 16),
(151, 13, 20, '15,16', 13, 99, '<p><input alt=\"\" src=\"http://localhost/himachal/images/extraimage/MO-012.jpg\" style=\"height:55px; width:249px\" type=\"image\" /></p>\r\n\r\n<p>A dart hits the dartboard shown at random. Find the probability of the dart landing in the shaded region.</p>\r\n', '<p>1/2</p>\r\n', '<p>1/3</p>\r\n', '<p>1/4</p>\r\n', '<p>1/5</p>\r\n', 'B', 2, '2015-04-19', 'B', 'Single', 3, 7, 16),
(152, 13, 20, '15,16', 13, 91, '<p>A circus clown buys balloons at $1.44 per dozen and sells the balloons for 20 cents each. What will be his profit on a day when he buys and sells 20 dozen balloons?</p>\r\n', '<p>$17.40</p>\r\n', '<p>$18.60</p>\r\n', '<p><strong>&nbsp;</strong>$19.20</p>\r\n', '<p>$20.60</p>\r\n', 'A', 2, '2015-04-19', 'C', 'Single', 3, 7, 16),
(153, 13, 20, '15,16', 13, 68, '<p>Judy and Tim each has a sum of money. Judy&rsquo;s amount is 3/5 that of Tim&rsquo;s. If Tim were to give Judy $168, then his remaining amount will be 7/9 that of Judy&rsquo;s. How much does Judy have originally? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>242</p>\r\n', '<p>336</p>\r\n', '<p>175</p>\r\n', '<p>672</p>\r\n', 'A', 2, '2015-04-21', 'B', 'Single', 3, 7, 17),
(154, 13, 20, '15,16', 13, 56, '<p>Two dice are rolled. How many different combinations of numbers can come up? Hint: If the first die shows one dot, there are six possible number-pairs which could result.</p>\r\n', '<p>12</p>\r\n', '<p>24</p>\r\n', '<p>36</p>\r\n', '<p>48</p>\r\n', 'B', 2, '2015-04-21', 'C', 'Single', 3, 7, 17),
(155, 13, 20, '15,16', 13, 69, '<p>How long, in hours, after 12 noon, will it take for the hour hand of a clock to lie directly over its minute hand for the first time?</p>\r\n', '<p>12/11 hours</p>\r\n', '<p>8 hours</p>\r\n', '<p>8/11 hours</p>\r\n', '<p>7/11 hours</p>\r\n', 'Not Answer', 2, '2015-04-21', 'A', 'Single', 3, 7, 17),
(156, 13, 20, '15,16', 13, 61, '<p>January 31st was on a Tuesday; it was the 27th consecutive day in which it did not rain. What day of the week was it when it last rained?</p>\r\n', '<p>Monday</p>\r\n', '<p>Tuesday</p>\r\n', '<p>Wednesday</p>\r\n', '<p>Thursday</p>\r\n', 'C', 2, '2015-04-21', 'C', 'Single', 3, 7, 17),
(157, 13, 20, '15,16', 13, 62, '<p>Tan and Emelyn are waiting in line to get on the school bus. Tan is seventh in line. Emelyn is in the middle of the line. There are six students between Tan and Emelyn. How many students are waiting in line?</p>\r\n', '<p>12</p>\r\n', '<p>18</p>\r\n', '<p>25</p>\r\n', '<p>27</p>\r\n', 'A', 2, '2015-04-21', 'D', 'Single', 3, 7, 17),
(158, 13, 20, '15,16', 13, 73, '<p><input alt=\"\" src=\"http://textusintentio.com/product/oes-v2/images/extraimage/MO-005.jpg\" style=\"width: 412px; height: 56px;\" type=\"image\" /></p>\r\n', '<p>3675</p>\r\n', '<p>3805</p>\r\n', '<p>4095</p>\r\n', '<p>4255</p>\r\n', 'B', 2, '2015-04-21', 'C', 'Single', 3, 7, 17),
(159, 13, 20, '15,16', 13, 78, '<p>If the base of a triangle is increased by 10% while its height decreased by 10%, find the area of the new triangle as a percentage of the original one.</p>\r\n', '<p>80%</p>\r\n', '<p>120%</p>\r\n', '<p>87%</p>\r\n', '<p>99%</p>\r\n', 'C', 2, '2015-04-21', 'A', 'Single', 3, 7, 17),
(160, 13, 20, '15,16', 13, 67, '<p><input alt=\"\" src=\"http://textusintentio.com/product/oes-v2/images/extraimage/MO-002.jpg\" style=\"width: 209px; height: 206px;\" type=\"image\" /></p>\r\n\r\n<p>Two squares, with lengths 4 cm and 6 cm respectively, are partially overlapped as shown in the diagram above. What is the difference between shaded area of the small square and shaded area of the big square?</p>\r\n', '<p>16cm2</p>\r\n', '<p>20cm2</p>\r\n', '<p>26cm2</p>\r\n', '<p>30cm2</p>\r\n', 'D', 2, '2015-04-21', 'A', 'Single', 3, 7, 17),
(161, 13, 20, '15,16', 13, 74, '<p>One pan can fry 2 pieces of meat at one time. Every piece of meat needs two minutes to be cooked (one minute for each side). Using only one pan, find the least possible time required to cook 2000 pieces of meet. <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>500 minutes</p>\r\n', '<p>1000 minutes</p>\r\n', '<p>2000 minutes</p>\r\n', '<p>4000 minutes</p>\r\n', 'A', 2, '2015-04-21', 'C', 'Single', 3, 7, 17),
(162, 13, 20, '15,16', 13, 57, '<p>The surface of a swimming pool is rectangular in shape and measures 12 metre by 20 metre. A concrete walk 2 metre wide is to be built around the surface of the pool. What will be the surface area of the walk?</p>\r\n', '<p>144m2</p>\r\n', '<p>240m2</p>\r\n', '<p>384m2</p>\r\n', '<p>112m2</p>\r\n', 'C', 2, '2015-04-21', 'A', 'Single', 3, 7, 17),
(163, 13, 20, '15,16', 13, 58, '<p>John bowls 3 games and has an average score of 85. If he bowled the same score in his first two games and bowled a score of 95 in his third game. What score did he bowl in either of his first two games?</p>\r\n', '<p>80</p>\r\n', '<p>85</p>\r\n', '<p>90</p>\r\n', '<p>95</p>\r\n', 'D', 2, '2015-04-21', 'A', 'Single', 3, 7, 17),
(164, 13, 20, '15,16', 13, 65, '<p><input alt=\"\" src=\"http://textusintentio.com/product/oes-v2/images/extraimage/MO-003.jpg\" style=\"width: 201px; height: 204px;\" type=\"image\" /></p>\r\n\r\n<p>The diagram shows a dartboard. What is the least number of throws needed in order to get a score of exactly 100?</p>\r\n', '<p>2</p>\r\n', '<p>3</p>\r\n', '<p>4</p>\r\n', '<p>5</p>\r\n', 'B', 2, '2015-04-21', 'B', 'Single', 3, 7, 17),
(165, 13, 20, '15,16', 13, 63, '<p>A Rubix cube has six faces with 16 colored squares per face. If each colored square has 2 cm sides, what is the surface area of the Rubix cube?</p>\r\n', '<p>78cm2</p>\r\n', '<p>96cm2</p>\r\n', '<p>192cm2</p>\r\n', '<p>384cm2</p>\r\n', 'Not Answer', 2, '2015-04-21', 'D', 'Single', 3, 7, 17),
(166, 13, 20, '15,16', 13, 80, '<p>How many digits are there before the hundredth 9 in the following number<br />\r\n9797797779777797777797777779&hellip;&hellip;.?</p>\r\n', '<p>4059</p>\r\n', '<p>5049</p>\r\n', '<p>5273</p>\r\n', '<p>5534</p>\r\n', 'Not Answer', 2, '2015-04-21', 'B', 'Single', 3, 7, 17),
(167, 13, 20, '15,16', 13, 71, '<p>Find the value of 20042005 &times; 20052004 &minus; 20042004 &times; 20052005 .</p>\r\n', '<p>10000</p>\r\n', '<p>15000</p>\r\n', '<p>18000</p>\r\n', '<p>19000</p>\r\n', 'Not Answer', 2, '2015-04-21', 'A', 'Single', 3, 7, 17),
(168, 13, 20, '15,16', 13, 66, '<p><input alt=\"\" src=\"http://textusintentio.com/product/oes-v2/images/extraimage/MO-004.jpg\" style=\"width: 407px; height: 70px;\" type=\"image\" /></p>\r\n', '<p>1/2</p>\r\n', '<p><strong>&nbsp;</strong>2/5</p>\r\n', '<p><strong>3</strong>/5</p>\r\n', '<p><strong>&nbsp;</strong>4/5</p>\r\n', 'Not Answer', 2, '2015-04-21', 'C', 'Single', 3, 7, 17),
(169, 13, 20, '15,16', 13, 64, '<p>At the National Day parade, the local scout troop found that they could arrange themselves in rows of exactly 3, exactly 4, or exactly 5, with no one left over. What is the least number of scouts in the troop?</p>\r\n', '<p>36</p>\r\n', '<p>60</p>\r\n', '<p>100</p>\r\n', '<p>120</p>\r\n', 'Not Answer', 2, '2015-04-21', 'B', 'Single', 3, 7, 17),
(170, 13, 20, '15,16', 13, 60, '<p>The students in a school are having a cup stacking contest. John has a pyramid 9 layers high. How many cups will he need to add to his pyramid to increase the number of layers to 12?</p>\r\n', '<p>11</p>\r\n', '<p>24</p>\r\n', '<p>34</p>\r\n', '<p>48</p>\r\n', 'Not Answer', 2, '2015-04-21', 'C', 'Single', 3, 7, 17),
(171, 13, 20, '15,16', 13, 94, '<p><input alt=\"\" src=\"http://textusintentio.com/product/oes-v2/images/extraimage/MO-010.jpg\" style=\"height: 97px; width: 95px;\" type=\"image\" /></p>\r\n\r\n<p>Square ABCD has a perimeter of 8 cm. If a circle is inscribed in the square as shown, what is the area of the circle?</p>\r\n', '<p>1.57 m2</p>\r\n', '<p>3.14 m2</p>\r\n', '<p><strong>&nbsp;</strong>4.71 m2</p>\r\n', '<p>6.28 m2</p>\r\n', 'Not Answer', 2, '2015-04-21', 'B', 'Single', 3, 7, 17),
(172, 13, 20, '15,16', 13, 88, '<p>(2 x 1/100) + (3 x 1/1000) + (7 x 1/10,000) = ?</p>\r\n', '<p>2.37</p>\r\n', '<p><strong>&nbsp;</strong>0.237</p>\r\n', '<p>0.0237</p>\r\n', '<p><strong>&nbsp;</strong>0.00237</p>\r\n', 'Not Answer', 2, '2015-04-21', 'C', 'Single', 3, 7, 17),
(173, 13, 20, '15,16', 13, 102, '<p>In 2008, the price of car A is $20,000 and car B is $25,000. Each year, the price of car A decreases by 5% and that of car B decreases by 10%. In what year will car B be cheaper than car A?</p>\r\n', '<p>2011</p>\r\n', '<p>2012</p>\r\n', '<p>2013</p>\r\n', '<p>2014</p>\r\n', 'Not Answer', 2, '2015-04-21', 'C', 'Single', 3, 7, 17),
(174, 13, 20, '15,16', 13, 98, '<p><input alt=\"\" src=\"http://textusintentio.com/product/oes-v2/images/extraimage/MO-011.jpg\" style=\"width: 187px; height: 91px;\" type=\"image\" /></p>\r\n\r\n<p>Pictured is a sequence of growing chairs. The first chair is made of 6 squares. How many more squares are in the 8th chair in the sequence than in the first?</p>\r\n', '<p>24</p>\r\n', '<p>26</p>\r\n', '<p>28</p>\r\n', '<p>30</p>\r\n', 'Not Answer', 2, '2015-04-21', 'C', 'Single', 3, 7, 17),
(175, 13, 20, '15,16', 13, 93, '<p><input alt=\"\" src=\"http://textusintentio.com/product/oes-v2/images/extraimage/MO-009.jpg\" style=\"width: 75px; height: 106px;\" type=\"image\" /></p>\r\n\r\n<p>In the diagram, there is an equilateral triangle and a square. If the perimeter of the triangle is 24 m, find the area of the square.</p>\r\n', '<p><strong>&nbsp;</strong>25 m2</p>\r\n', '<p><strong>&nbsp;</strong>36 m2</p>\r\n', '<p><strong>&nbsp;</strong>49 m2</p>\r\n', '<p>64 m2</p>\r\n', 'Not Answer', 2, '2015-04-21', 'C', 'Single', 3, 7, 17),
(176, 13, 20, '15,16', 13, 82, '<p>How many rectangles are there in the diagram?</p>\r\n\r\n<p><input alt=\"\" src=\"http://textusintentio.com/product/oes-v2/images/extraimage/MO-008.jpg\" style=\"width: 157px; height: 235px;\" type=\"image\" /></p>\r\n', '<p>26</p>\r\n', '<p>28</p>\r\n', '<p>30</p>\r\n', '<p>32</p>\r\n', 'Not Answer', 2, '2015-04-21', 'C', 'Single', 3, 7, 17);
INSERT INTO `main_answer` (`m_a_id`, `category_id`, `subcategory_id`, `subject_id`, `exam_id`, `question_id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `ans`, `marks`, `examdate`, `correct_ans`, `typeofquestion`, `center_id`, `student_id`, `main_exam_status_id`) VALUES
(177, 13, 20, '15,16', 13, 85, '<p>Let ABCD be a square with each side of length 1 unit. If M is the intersection of its diagonals and P is the midpoint of MB, what is the square of the length of AP?</p>\r\n', '<p>3/4</p>\r\n', '<p>5/8</p>\r\n', '<p>1/2</p>\r\n', '<p>3/8</p>\r\n', 'Not Answer', 2, '2015-04-21', 'B', 'Single', 3, 7, 17),
(178, 13, 20, '15,16', 13, 101, '<p><input alt=\"\" src=\"http://textusintentio.com/product/oes-v2/images/extraimage/MO-013.jpg\" style=\"width: 358px; height: 167px;\" type=\"image\" /></p>\r\n\r\n<p>Find the measure of angle ABC as shown in the following figure, where AC = CB = CD, and the measure of angle ADC is 29 degrees.</p>\r\n', '<p>58 degree</p>\r\n', '<p><strong>&nbsp;</strong>45 degree</p>\r\n', '<p>56 degree</p>\r\n', '<p><strong>&nbsp;</strong>61 degree</p>\r\n', 'Not Answer', 2, '2015-04-21', 'C', 'Single', 3, 7, 17),
(179, 13, 20, '15,16', 13, 100, '<p>The colored stripes pattern Red, Blue, Blue, Green, Yellow repeats on wall paper. What will be the color of the 32nd stripe?</p>\r\n', '<p>Red</p>\r\n', '<p>Blue</p>\r\n', '<p>Green</p>\r\n', '<p>Yellow</p>\r\n', 'Not Answer', 2, '2015-04-21', 'B', 'Single', 3, 7, 17),
(180, 13, 20, '15,16', 13, 96, '<p>In a camel herd with 80 legs, half the camels have one hump and half have two. How many humps are there in this herd? <img alt=\"\" src=\"https://raffles.guru/image/blank.gif\" style=\"height:16px; width:16px\" /></p>\r\n', '<p>24</p>\r\n', '<p>26</p>\r\n', '<p>28</p>\r\n', '<p>30</p>\r\n', 'Not Answer', 2, '2015-04-21', 'D', 'Single', 3, 7, 17),
(181, 13, 20, '15,16', 13, 90, '<p>The digits 1986 are written in order from largest to smallest. Next they&rsquo;re written in order from smallest to largest. What number is halfway between these two numbers?</p>\r\n', '<p>4535</p>\r\n', '<p>5775</p>\r\n', '<p>5865</p>\r\n', '<p>6035</p>\r\n', 'A', 2, '2015-04-21', 'B', 'Single', 3, 7, 17),
(182, 13, 20, '15,16', 13, 95, '<p>I was paid $2.80 on the first day, and my salary doubled each day thereafter. I earned a total of $714. How many days did I work?</p>\r\n', '<p>8</p>\r\n', '<p>10</p>\r\n', '<p>12</p>\r\n', '<p>14</p>\r\n', 'C', 2, '2015-04-21', 'A', 'Single', 3, 7, 17),
(183, 13, 20, '15,16', 13, 86, '<p>There are buses travelling to and fro between Station A and Station B. The buses leave the stations at regular interval and a bus will meet another bus coming in the opposite direction every 6 minutes. Peter starts cycling from A towards B at the same time Jane starts cycling from B towards A. Peter and Jane will meet a bus coming in the opposite direction every 7 and 8 minutes respectively. After 56 minutes of cycling on the road, they meet each other. Find the time taken by a bus to travel from A to B.</p>\r\n', '<p><strong>&nbsp;</strong>32 minutes</p>\r\n', '<p>46 minutes</p>\r\n', '<p>68 minutes</p>\r\n', '<p><strong>&nbsp;</strong>84 minutes</p>\r\n', 'B', 2, '2015-04-21', 'C', 'Single', 3, 7, 17),
(184, 13, 20, '15,16', 13, 89, '<p>If the pattern of the first six letters in CIRCUSCIRCUS&hellip; continues, then the pattern&rsquo;s 500th letter is?</p>\r\n', '<p>C</p>\r\n', '<p>I</p>\r\n', '<p>R</p>\r\n', '<p>S</p>\r\n', 'C', 2, '2015-04-21', 'B', 'Single', 3, 7, 17),
(185, 13, 20, '15,16', 13, 84, '<p>The digits 3, 4, 5 and 7 can form twenty four different four digit numbers. Find the average of these twenty four numbers.</p>\r\n', '<p>5867.75</p>\r\n', '<p>4537.50</p>\r\n', '<p><strong>&nbsp;</strong>3548.35</p>\r\n', '<p>5277.25</p>\r\n', 'C', 2, '2015-04-21', 'D', 'Single', 3, 7, 17),
(186, 13, 20, '15,16', 13, 103, '<p>The average of 10 consecutive odd numbers is 120. What is the average of the 5 largest numbers?</p>\r\n', '<p>100</p>\r\n', '<p>105</p>\r\n', '<p>115</p>\r\n', '<p>125</p>\r\n', 'Not Answer', 2, '2015-04-21', 'D', 'Single', 3, 7, 17),
(187, 19, 22, '19', 14, 113, '<p>&nbsp;</p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"bix-tbl-container\" style=\"box-sizing:border-box; font-family:arial; margin:0px; width:100%\">\r\n	<tbody style=\"margin: 0px; box-sizing: border-box;\">\r\n		<tr style=\"margin: 0px; box-sizing: border-box;\">\r\n			<td class=\"bix-td-qtxt\" style=\"margin: 0px; box-sizing: border-box; font-size: 14px;\" valign=\"top\">\r\n			<p style=\"margin: 0px; box-sizing: border-box; line-height: 1.7;\">Most important advantage of an IC is its</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">Easy replacement in case of circuit failure</span></p>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">Extremely high reliability</span></p>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">Reduced cost</span></p>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">Low power consumption</span></p>\r\n', 'A', 1, '2018-12-12', 'B', 'Single', 3, 10, 18),
(188, 19, 22, '19', 14, 114, '<p>&nbsp;</p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"bix-tbl-container\" style=\"box-sizing:border-box; font-family:arial; margin:0px; width:100%\">\r\n	<tbody style=\"margin: 0px; box-sizing: border-box;\">\r\n		<tr style=\"margin: 0px; box-sizing: border-box;\">\r\n			<td class=\"bix-td-qtxt\" style=\"margin: 0px; box-sizing: border-box; font-size: 14px;\" valign=\"top\">\r\n			<p style=\"margin: 0px; box-sizing: border-box; line-height: 1.7;\">Data division is the third division of a _____ program.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">COBOL</span></p>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">BASIC</span></p>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">PASCAL</span></p>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">FORTH</span></p>\r\n', 'C', 1, '2018-12-12', 'A', 'Single', 3, 10, 18),
(189, 19, 22, '19', 14, 111, '<p>&nbsp;</p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"bix-tbl-container\" style=\"box-sizing:border-box; font-family:arial; margin:0px; width:100%\">\r\n	<tbody style=\"margin: 0px; box-sizing: border-box;\">\r\n		<tr style=\"margin: 0px; box-sizing: border-box;\">\r\n			<td class=\"bix-td-qtxt\" style=\"margin: 0px; box-sizing: border-box; font-size: 14px;\" valign=\"top\">\r\n			<p style=\"margin: 0px; box-sizing: border-box; line-height: 1.7;\">A technique used by codes to convert an analog signal into a digital bit stream is known as</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">Pulse code modulation</span></p>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">Pulse stretcher</span></p>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">Query processing</span></p>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">Queue management</span></p>\r\n', 'B', 1, '2018-12-12', 'A', 'Single', 3, 10, 18),
(190, 19, 22, '19', 14, 115, '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">Which language was devised by Dr. Seymour Aubrey Papert?</span></p>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">APL</span></p>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">COBOL</span></p>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">LOGO</span></p>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">FORTRAN</span></p>\r\n', 'C', 1, '2018-12-12', 'C', 'Single', 3, 10, 18),
(191, 19, 22, '19', 14, 112, '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">An optical input device that interprets pencil marks on paper media is</span></p>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">O.M.R</span></p>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">Punch card reader</span></p>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">Optical scanners</span></p>\r\n', '<p><span style=\"color:rgb(0, 0, 0); font-family:arial; font-size:14px\">Magnetic tape</span></p>\r\n', 'C', 1, '2018-12-12', 'A', 'Single', 3, 10, 18);

-- --------------------------------------------------------

--
-- Table structure for table `main_exam_status`
--

CREATE TABLE `main_exam_status` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subject_id` varchar(255) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `exam_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `starttime` varchar(255) NOT NULL,
  `endtime` varchar(255) NOT NULL,
  `center_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `noofattemps` int(11) NOT NULL,
  `pass_or_fail` varchar(255) NOT NULL,
  `user_score` decimal(10,3) NOT NULL,
  `passing_score` decimal(10,3) NOT NULL,
  `total_score` decimal(10,3) NOT NULL,
  `total_question` int(11) NOT NULL,
  `negative_mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_exam_status`
--

INSERT INTO `main_exam_status` (`id`, `category_id`, `subcategory_id`, `subject_id`, `exam_id`, `exam_date`, `status`, `starttime`, `endtime`, `center_id`, `student_id`, `noofattemps`, `pass_or_fail`, `user_score`, `passing_score`, `total_score`, `total_question`, `negative_mark`) VALUES
(13, 13, 20, '15,16', 13, '2015-04-05', 1, '', '', 3, 7, 1, 'Fail', '-5.000', '34.000', '68.000', 34, 1),
(15, 13, 20, '15,16', 13, '2015-04-14', 1, '', '', 3, 7, 2, 'Fail', '2.000', '34.000', '68.000', 34, 1),
(16, 13, 20, '15,16', 13, '2015-04-19', 1, '', '', 3, 7, 3, 'Fail', '-8.000', '34.000', '68.000', 34, 1),
(17, 13, 20, '15,16', 13, '2015-04-21', 1, '', '', 3, 7, 4, 'Fail', '-10.000', '34.000', '68.000', 34, 1),
(18, 19, 22, '19', 14, '2018-12-12', 1, '', '', 3, 10, 1, 'Fail', '-3.000', '2.500', '5.000', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `n_id` int(11) NOT NULL,
  `noitce` text NOT NULL,
  `notice_subject` varchar(255) NOT NULL,
  `notice_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `center_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`n_id`, `noitce`, `notice_subject`, `notice_date`, `status`, `center_id`, `admin_id`) VALUES
(56, 'i need a website that can show videos or pictures that embed from \r\nyoutube, and under each video or image will be button that give the \r\noption to buy it,\r\n\r\ni don\'t need option for downloading the video or image, just buy it with\r\n paypal button.    <br>', 'check admin', '2014-11-20', 1, 0, 2),
(59, 'check admin by amit check admin by amit check admin by amit check admin by amit check admin by amit check admin by amit check admin by amit check admin by amit check admin by amit check admin by amit <br><br><br><br><br><br><br>', 'check admin by amit', '2015-01-12', 1, 0, 2),
(62, 'A day after Barack Obama flew out of India, the Modi government late \r\nWednesday evening announced the abrupt â€œcurtailment of tenure of foreign\r\n secretary Sujatha Singh with immediate effectâ€œ Â­ a not very polite way \r\nof saying it was sacking her eight months before she was due to retire.<br>', 'Test Notice from admin', '2015-01-29', 1, 0, 2),
(64, 'dfsgdsgdsfg<br>', 'asd', '2015-01-30', 1, 1, 0),
(65, 'This is a testing mail<br>&nbsp;thesing mail<br>', 'Testing mail', '2015-02-01', 1, 1, 0),
(66, 'hfrjhj', 'hgjghjghj', '2015-02-07', 1, 3, 0),
(67, 'asdfasdf<br>', 'dfasdf', '2015-03-21', 1, 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `noticecenter`
--

CREATE TABLE `noticecenter` (
  `nc_id` int(11) NOT NULL,
  `center_id` int(11) NOT NULL,
  `notice_id` int(11) NOT NULL,
  `notice_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticecenter`
--

INSERT INTO `noticecenter` (`nc_id`, `center_id`, `notice_id`, `notice_date`) VALUES
(30, 2, 56, '2014-11-20'),
(38, 2, 59, '2015-01-12'),
(39, 1, 62, '2015-01-29'),
(40, 2, 62, '2015-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `noticestudent`
--

CREATE TABLE `noticestudent` (
  `ns_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `notice_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `center_id` int(11) NOT NULL,
  `notice_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticestudent`
--

INSERT INTO `noticestudent` (`ns_id`, `student_id`, `notice_id`, `admin_id`, `center_id`, `notice_date`) VALUES
(988, 1, 56, 2, 0, '2014-11-20'),
(989, 2, 56, 2, 0, '2014-11-20'),
(990, 3, 56, 2, 0, '2014-11-20'),
(991, 4, 56, 2, 0, '2014-11-20'),
(1004, 1, 59, 2, 0, '2015-01-12'),
(1005, 4, 62, 2, 0, '2015-01-29'),
(1011, 1, 65, 0, 1, '2015-02-01'),
(1012, 3, 65, 0, 1, '2015-02-01'),
(1013, 4, 65, 0, 1, '2015-02-01'),
(1014, 5, 65, 0, 1, '2015-02-01'),
(1015, 6, 65, 0, 1, '2015-02-01'),
(1016, 7, 66, 0, 3, '2015-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `practice_answer`
--

CREATE TABLE `practice_answer` (
  `p_a_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `ans` text NOT NULL,
  `marks` int(11) NOT NULL,
  `examdate` date NOT NULL,
  `correct_ans` varchar(255) NOT NULL,
  `typeofquestion` varchar(255) NOT NULL,
  `center_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `practice_exam_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practice_answer`
--

INSERT INTO `practice_answer` (`p_a_id`, `category_id`, `subcategory_id`, `subject_id`, `exam_id`, `question_id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `ans`, `marks`, `examdate`, `correct_ans`, `typeofquestion`, `center_id`, `student_id`, `practice_exam_status_id`) VALUES
(27, 13, 14, 8, 1, 16, 'Which of the following numbers are prime?<br>', '19<br>', '16<br>', '11<br>', '12<br>', 'A--C-', 2, '2015-01-30', 'A--C-', 'Multiple', 1, 5, 3),
(28, 13, 14, 8, 1, 17, 'Which number is prime?<br>', '8<br>', '18<br>', '6<br>', '3<br>', 'D', 2, '2015-01-30', 'D', 'Single', 1, 5, 3),
(29, 13, 14, 8, 1, 18, 'Which number is a factor of 9?<br>', '5<br>', '8<br>', '3<br>', '2<br>', 'C', 2, '2015-01-30', 'C', 'Single', 1, 5, 3),
(30, 13, 14, 8, 1, 19, 'Which numbers are factors of 16? Select all that apply.<br>', '4<br>', '2<br>', '8<br>', '1<br>', 'A-B-C-D', 2, '2015-01-30', 'A-B-C-D', 'Multiple', 1, 5, 3),
(31, 13, 14, 8, 1, 20, 'What is the prime factorisation of 6?<br>', '2 X 2 X 3<br>', '3<br>', '2 X 3 X 3<br>', '2 X 3<br>', 'D', 2, '2015-01-30', 'D', 'Single', 1, 5, 3),
(32, 13, 14, 8, 1, 21, 'What is the prime factorisation of 10?<br>', '5<br>', '10<br>', '2<br>', '2 X 5<br>', 'D', 2, '2015-01-30', 'D', 'Single', 1, 5, 3),
(33, 13, 14, 8, 2, 22, 'In <b>1,429</b>, in which place is the <b>1</b>?<br>', 'units<br>', 'tens<br>', 'hundreds<br>', 'thousands<br>', 'D', 2, '2015-01-30', 'D', 'Single', 1, 3, 4),
(34, 13, 14, 8, 2, 23, 'In <b>9,064</b>, what digit is in the <b>hundreds</b> place?<br>', '9<br>', '0<br>', '6<br>', '4<br>', 'B', 2, '2015-01-30', 'B', 'Single', 1, 3, 4),
(35, 13, 14, 8, 1, 16, 'Which of the following numbers are prime?<br>', '19<br>', '16<br>', '11<br>', '12<br>', 'A--C-', 2, '2015-02-01', 'A--C-', 'Multiple', 1, 5, 5),
(36, 13, 14, 8, 1, 17, 'Which number is prime?<br>', '8<br>', '18<br>', '6<br>', '3<br>', 'D', 2, '2015-02-01', 'D', 'Single', 1, 5, 5),
(37, 13, 14, 8, 1, 18, 'Which number is a factor of 9?<br>', '5<br>', '8<br>', '3<br>', '2<br>', 'C', 2, '2015-02-01', 'C', 'Single', 1, 5, 5),
(38, 13, 14, 8, 1, 19, 'Which numbers are factors of 16? Select all that apply.<br>', '4<br>', '2<br>', '8<br>', '1<br>', 'A-B-C-D', 2, '2015-02-01', 'A-B-C-D', 'Multiple', 1, 5, 5),
(39, 13, 14, 8, 1, 20, 'What is the prime factorisation of 6?<br>', '2 X 2 X 3<br>', '3<br>', '2 X 3 X 3<br>', '2 X 3<br>', 'D', 2, '2015-02-01', 'D', 'Single', 1, 5, 5),
(40, 13, 14, 8, 1, 21, 'What is the prime factorisation of 10?<br>', '5<br>', '10<br>', '2<br>', '2 X 5<br>', 'D', 2, '2015-02-01', 'D', 'Single', 1, 5, 5),
(41, 13, 14, 8, 2, 22, 'In <b>1,429</b>, in which place is the <b>1</b>?<br>', 'units<br>', 'tens<br>', 'hundreds<br>', 'thousands<br>', 'Not Answer', 2, '2015-02-04', 'D', 'Single', 0, 7, 6),
(42, 13, 14, 8, 2, 23, 'In <b>9,064</b>, what digit is in the <b>hundreds</b> place?<br>', '9<br>', '0<br>', '6<br>', '4<br>', 'Not Answer', 2, '2015-02-04', 'B', 'Single', 0, 7, 6);

-- --------------------------------------------------------

--
-- Table structure for table `practice_exam`
--

CREATE TABLE `practice_exam` (
  `p_e_id` int(11) NOT NULL,
  `passing_percentage` int(11) NOT NULL DEFAULT '1',
  `re_exam_day` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `center_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `exam_status` int(11) NOT NULL DEFAULT '1',
  `exam_duration` varchar(255) NOT NULL,
  `neg_mark_status` int(2) NOT NULL DEFAULT '0',
  `negative_marks` int(11) NOT NULL,
  `terms_condition` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practice_exam`
--

INSERT INTO `practice_exam` (`p_e_id`, `passing_percentage`, `re_exam_day`, `category_id`, `subcategory_id`, `center_id`, `subject_id`, `exam_name`, `exam_status`, `exam_duration`, `neg_mark_status`, `negative_marks`, `terms_condition`) VALUES
(1, 40, 1, 13, 14, 1, 8, 'Math-2015 jan', 1, '20', 1, 1, '<div><div>General Instructions:</div></div><ol><li>Total of 20 minutes duration will be given to attempt all the questions. And there a penalty of minus 1 marks for each wrong answer.</li><li>The clock has been set at the server and the countdown timer at the top right corner of your screen will display the time remaining for you to complete the exam. When the clock runs out the exam ends by default - you are not required to end or submit your exam.</li><li>The question palette at the right of screen shows one of the following statuses of each of the questions numbered:</li></ol><br><br>'),
(2, 50, 1, 13, 14, 1, 8, 'Whole numbers', 1, '10', 1, 1, '<div><div>General Instructions:</div></div><ol><li>Total of 10 minutes \r\nduration will be given to attempt all the questions. And there a penalty\r\n of minus 1 marks for each wrong answer.</li><li>The clock has been set \r\nat the server and the countdown timer at the top right corner of your \r\nscreen will display the time remaining for you to complete the exam. \r\nWhen the clock runs out the exam ends by default - you are not required \r\nto end or submit your exam.</li><li>The question palette at the right of screen shows one of the following statuses of each of the questions numbered:</li></ol><br><br><br>'),
(3, 60, 0, 13, 14, 1, 8, 'English-2015', 1, '10', 1, 2, 'General Instructions:<br><br>&nbsp;&nbsp; 1 Total of 10 minutes duration will be given to attempt all the questions. And there a penalty of minus 2 marks for each wrong answer.<br>&nbsp;&nbsp; 2 The clock has been set at the server and the countdown timer at the top right corner of your screen will display the time remaining for you to&nbsp;&nbsp; complete the exam. When the clock runs out the exam ends by default - you are not required to end or submit your exam.<br>&nbsp;&nbsp; 3 The question palette at the right of screen shows one of the following statuses of each of the questions numbered:<br><br>'),
(4, 40, 1, 13, 14, 3, 8, 'Maths', 1, '15', 1, 1, '<span><div><div>General Instructions:</div></div><ol><li>Total of 15 minutes duration will be given to attempt all the questions. And there a penalty of minus 1 mark for each wrong answer.</li><li>The clock has been set at the server and the countdown timer at the top right corner of your screen will display the time remaining for you to complete the exam. When the clock runs out the exam ends by default - you are not required to end or submit your exam.</li><li>The question palette at the right of screen shows one of the following statuses of each of the questions numbered:</li></ol></span><br>');

-- --------------------------------------------------------

--
-- Table structure for table `practice_exam_status`
--

CREATE TABLE `practice_exam_status` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `exam_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `starttime` varchar(255) NOT NULL,
  `endtime` varchar(255) NOT NULL,
  `center_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `noofattemps` int(11) NOT NULL,
  `pass_or_fail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practice_exam_status`
--

INSERT INTO `practice_exam_status` (`id`, `category_id`, `subcategory_id`, `subject_id`, `exam_id`, `exam_date`, `status`, `starttime`, `endtime`, `center_id`, `student_id`, `noofattemps`, `pass_or_fail`) VALUES
(3, 13, 14, 8, 1, '2015-01-30', 1, '', '', 1, 5, 1, 'Pass'),
(4, 13, 14, 8, 2, '2015-01-30', 1, '', '', 1, 3, 1, 'Pass'),
(5, 13, 14, 8, 1, '2015-02-01', 1, '', '', 1, 5, 2, 'Pass'),
(6, 13, 14, 8, 2, '2015-02-04', 1, '', '', 0, 7, 1, 'Fail');

-- --------------------------------------------------------

--
-- Table structure for table `practice_question`
--

CREATE TABLE `practice_question` (
  `p_q_id` int(11) NOT NULL,
  `p_e_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `s_c_id` int(11) NOT NULL,
  `center_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `typeofquestion` varchar(255) NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_ans` varchar(255) NOT NULL,
  `question_status` int(2) NOT NULL DEFAULT '1',
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practice_question`
--

INSERT INTO `practice_question` (`p_q_id`, `p_e_id`, `c_id`, `s_c_id`, `center_id`, `question`, `typeofquestion`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_ans`, `question_status`, `marks`) VALUES
(16, 1, 13, 14, 1, 'Which of the following numbers are prime?<br>', 'Multiple', '19<br>', '16<br>', '11<br>', '12<br>', 'A--C-', 1, 2),
(17, 1, 13, 14, 1, 'Which number is prime?<br>', 'Single', '8<br>', '18<br>', '6<br>', '3<br>', 'D', 1, 2),
(18, 1, 13, 14, 1, 'Which number is a factor of 9?<br>', 'Single', '5<br>', '8<br>', '3<br>', '2<br>', 'C', 1, 2),
(19, 1, 13, 14, 1, 'Which numbers are factors of 16? Select all that apply.<br>', 'Multiple', '4<br>', '2<br>', '8<br>', '1<br>', 'A-B-C-D', 1, 2),
(20, 1, 13, 14, 1, 'What is the prime factorisation of 6?<br>', 'Single', '2 X 2 X 3<br>', '3<br>', '2 X 3 X 3<br>', '2 X 3<br>', 'D', 1, 2),
(21, 1, 13, 14, 1, 'What is the prime factorisation of 10?<br>', 'Single', '5<br>', '10<br>', '2<br>', '2 X 5<br>', 'D', 1, 2),
(22, 2, 13, 14, 1, 'In <b>1,429</b>, in which place is the <b>1</b>?<br>', 'Single', 'units<br>', 'tens<br>', 'hundreds<br>', 'thousands<br>', 'D', 1, 2),
(23, 2, 13, 14, 1, 'In <b>9,064</b>, what digit is in the <b>hundreds</b> place?<br>', 'Single', '9<br>', '0<br>', '6<br>', '4<br>', 'B', 1, 2),
(24, 3, 13, 14, 1, 'When Sam was a small child, he â€¦â€¦â€¦ spend hours every day playing with stones in the garden.<br><br>', 'Single', 'would <br><br>', '&nbsp; was<br>&nbsp; <br><br>', '&nbsp; used<br>&nbsp;<br>', '&nbsp; should<br><br>', 'A', 1, 2),
(25, 3, 13, 14, 1, '&nbsp;We â€¦â€¦â€¦ a lovely three weeks in the south of Spain last year.<br><br>', 'Single', 'passed<br><br><br>', '&nbsp; took<br>&nbsp;<br><br>', '&nbsp; did<br>&nbsp;<br><br>', '&nbsp; spent <br><br>', 'D', 1, 2),
(26, 3, 13, 14, 1, 'You should read this novel â€” itâ€™s been â€¦â€¦â€¦ recommended by all the critics.<br><br>', 'Single', 'truly<br>&nbsp; <br>', '&nbsp; highly <br>&nbsp; <br>', '&nbsp; fully<br>&nbsp;<br>', '&nbsp; deeply<br><br>', 'B', 1, 2),
(27, 2, 13, 14, 1, 'dfhjftkvhj;', 'Single', 'ghjghjh', 'jjj', 'jjh', 'gh', 'A', 1, 4),
(28, 4, 13, 14, 3, 'Which of the following is a cone?<br>', 'Multiple', '<img src=\"http://textusintentio.com/product/onlineexamination/images/extraimage/cone1.gif\" alt=\"\"><br>', '<img src=\"http://textusintentio.com/product/onlineexamination/images/extraimage/cone2.gif\" alt=\"\"><br>', '<img src=\"http://textusintentio.com/product/onlineexamination/images/extraimage/cube1.gif\" alt=\"\"><br>', '<img src=\"http://textusintentio.com/product/onlineexamination/images/extraimage/cone3.gif\" alt=\"\"><br>', 'A-B--D', 1, 3),
(29, 4, 13, 14, 3, 'Which of the following is not a cuboid?<br>', 'Multiple', '<img src=\"http://textusintentio.com/product/onlineexamination/images/extraimage/cuboid1.gif\" alt=\"\"><br>', '<img src=\"http://textusintentio.com/product/onlineexamination/images/extraimage/cube2.gif\" alt=\"\"><br>', '<img src=\"http://textusintentio.com/product/onlineexamination/images/extraimage/cuboid2.gif\" alt=\"\"><br>', '<img src=\"http://textusintentio.com/product/onlineexamination/images/extraimage/cylinder1.gif\" alt=\"\"><br>', '-B--D', 1, 2),
(30, 4, 13, 14, 3, 'Which is a sphere?<br>', 'Multiple', '<img src=\"http://textusintentio.com/product/onlineexamination/images/extraimage/cylinder2.gif\" alt=\"\"><br>', '<img src=\"http://textusintentio.com/product/onlineexamination/images/extraimage/sphere1.gif\" alt=\"\"><br>', '<img src=\"http://textusintentio.com/product/onlineexamination/images/extraimage/sphere2.gif\" alt=\"\"><br>', '<img src=\"http://textusintentio.com/product/onlineexamination/images/extraimage/sphere3.gif\" alt=\"\"><br>', '-B-C-D', 1, 3),
(31, 4, 13, 14, 3, '<p><span class=\"math-tex\">\\(x = {-b \\pm \\sqrt{b^2-4ac} \\over 2a}\\)</span> which is correct</p>\r\n', 'Single', '<p><br />\r\n<span class=\"math-tex\">\\(x = {-b \\pm \\sqrt{b^2-4ac} \\over 2a}\\)</span></p>\r\n', '<p><span class=\"math-tex\">\\(x = {-b \\pm \\sqrt{b^2-4ac} \\over 2a}\\)</span><span class=\"math-tex\">\\(x^2 = {-b \\pm \\sqrt{b^2-4ac} \\over 2a}\\)</span></p>\r\n', '<p><span class=\"math-tex\">\\(x = {-b \\pm \\sqrt{b^2-4ac} \\over 2a}\\)</span><span class=\"math-tex\">\\(x = {-b \\pm \\sqrt{b^2-4ac} \\over 2a}\\)</span><span class=\"math-tex\">\\(x = {-b \\pm \\sqrt{b^2-4ac} \\over 2a}\\)</span></p>\r\n', '<p><span class=\"math-tex\">\\(x = {-b \\pm \\sqrt{b^2-4ac} \\over 2a^4}\\)</span></p>\r\n', 'A', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `s_c_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `typeofquestion` varchar(255) NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_ans` text NOT NULL,
  `question_status` int(2) NOT NULL DEFAULT '1',
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `s_id`, `c_id`, `s_c_id`, `question`, `typeofquestion`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_ans`, `question_status`, `marks`) VALUES
(116, 0, 0, 0, 'Kids Dresses', '', 'a', 'aa', 'a', 'e', 'a', 1, 3),
(117, 0, 0, 0, 'Toys', '', 'a', 'aa', 'c', 'er', 'a', 1, 2),
(118, 0, 0, 0, 'Snacks', '', 'a', 'aa', 'v', 'r', 'a', 1, 1),
(119, 0, 0, 0, 'Stationaries', '', 'a', 'aa', 'b', 'r', 'a', 1, 3),
(120, 0, 0, 0, 'Tools', '', 'a', 'aa', 'b', 'r', 'a', 1, 2),
(121, 0, 0, 0, 'Kids Dresses', '', 'a', 'aa', 'a', 'e', 'a', 1, 3),
(122, 0, 0, 0, 'Toys', '', 'a', 'aa', 'c', 'er', 'a', 1, 2),
(123, 0, 0, 0, 'Snacks', '', 'a', 'aa', 'v', 'r', 'a', 1, 1),
(124, 0, 0, 0, 'Stationaries', '', 'a', 'aa', 'b', 'r', 'a', 1, 3),
(125, 0, 0, 0, 'Tools', '', 'a', 'aa', 'b', 'r', 'a', 1, 2),
(126, 0, 0, 0, 'Kids Dresses', '', 'a', 'aa', 'a', 'e', 'a', 1, 3),
(127, 0, 0, 0, 'Toys', '', 'a', 'aa', 'c', 'er', 'a', 1, 2),
(128, 0, 0, 0, 'Snacks', '', 'a', 'aa', 'v', 'r', 'a', 1, 1),
(129, 0, 0, 0, 'Stationaries', '', 'a', 'aa', 'b', 'r', 'a', 1, 3),
(130, 0, 0, 0, 'Tools', '', 'a', 'aa', 'b', 'r', 'a', 1, 2),
(131, 0, 0, 0, 'Kids Dresses', '', 'a', 'aa', 'a', 'e', 'a', 1, 3),
(132, 0, 0, 0, 'Toys', '', 'a', 'aa', 'c', 'er', 'a', 1, 2),
(133, 0, 0, 0, 'Snacks', '', 'a', 'aa', 'v', 'r', 'a', 1, 1),
(134, 0, 0, 0, 'Stationaries', '', 'a', 'aa', 'b', 'r', 'a', 1, 3),
(135, 0, 0, 0, 'Tools', '', 'a', 'aa', 'b', 'r', 'a', 1, 2),
(136, 0, 0, 0, 'Kids Dresses', '', 'a', 'aa', 'a', 'e', 'a', 1, 3),
(137, 0, 0, 0, 'Toys', '', 'a', 'aa', 'c', 'er', 'a', 1, 2),
(138, 0, 0, 0, 'Snacks', '', 'a', 'aa', 'v', 'r', 'a', 1, 1),
(139, 0, 0, 0, 'Stationaries', '', 'a', 'aa', 'b', 'r', 'a', 1, 3),
(140, 0, 0, 0, 'Tools', '', 'a', 'aa', 'b', 'r', 'a', 1, 2),
(141, 0, 0, 0, 'Kids Dresses', '', 'a', 'aa', 'a', 'e', 'a', 1, 3),
(142, 0, 0, 0, 'Toys', '', 'a', 'aa', 'c', 'er', 'a', 1, 2),
(143, 0, 0, 0, 'Snacks', '', 'a', 'aa', 'v', 'r', 'a', 1, 1),
(144, 0, 0, 0, 'Stationaries', '', 'a', 'aa', 'b', 'r', 'a', 1, 3),
(145, 0, 0, 0, 'Tools', '', 'a', 'aa', 'b', 'r', 'a', 1, 2),
(146, 0, 0, 0, 'Kids Dresses', '', 'a', 'aa', 'a', 'e', 'a', 1, 3),
(147, 0, 0, 0, 'Toys', '', 'a', 'aa', 'c', 'er', 'a', 1, 2),
(148, 0, 0, 0, 'Snacks', '', 'a', 'aa', 'v', 'r', 'a', 1, 1),
(149, 0, 0, 0, 'Stationaries', '', 'a', 'aa', 'b', 'r', 'a', 1, 3),
(150, 0, 0, 0, 'Tools', '', 'a', 'aa', 'b', 'r', 'a', 1, 2),
(151, 0, 0, 0, 'Kids Dresses', '', 'a', 'aa', 'a', 'e', 'a', 1, 3),
(152, 0, 0, 0, 'Toys', '', 'a', 'aa', 'c', 'er', 'a', 1, 2),
(153, 0, 0, 0, 'Snacks', '', 'a', 'aa', 'v', 'r', 'a', 1, 1),
(154, 0, 0, 0, 'Stationaries', '', 'a', 'aa', 'b', 'r', 'a', 1, 3),
(155, 0, 0, 0, 'Tools', '', 'a', 'aa', 'b', 'r', 'a', 1, 2),
(156, 0, 0, 0, 'Kids Dresses', '', 'a', 'aa', 'a', 'e', 'a', 1, 3),
(157, 0, 0, 0, 'Toys', '', 'a', 'aa', 'c', 'er', 'a', 1, 2),
(158, 0, 0, 0, 'Snacks', '', 'a', 'aa', 'v', 'r', 'a', 1, 1),
(159, 0, 0, 0, 'Stationaries', '', 'a', 'aa', 'b', 'r', 'a', 1, 3),
(160, 0, 0, 0, 'Tools', '', 'a', 'aa', 'b', 'r', 'a', 1, 2),
(161, 0, 0, 0, 'Kids Dresses', '', 'a', 'aa', 'a', 'e', 'a', 1, 3),
(162, 0, 0, 0, 'Toys', '', 'a', 'aa', 'c', 'er', 'a', 1, 2),
(163, 0, 0, 0, 'Snacks', '', 'a', 'aa', 'v', 'r', 'a', 1, 1),
(164, 0, 0, 0, 'Stationaries', '', 'a', 'aa', 'b', 'r', 'a', 1, 3),
(165, 0, 0, 0, 'Tools', '', 'a', 'aa', 'b', 'r', 'a', 1, 2),
(166, 0, 0, 0, 'Kids Dresses', '', 'a', 'aa', 'a', 'e', 'a', 1, 3),
(167, 0, 0, 0, 'Toys', '', 'a', 'aa', 'c', 'er', 'a', 1, 2),
(168, 0, 0, 0, 'Snacks', '', 'a', 'aa', 'v', 'r', 'a', 1, 1),
(169, 0, 0, 0, 'Stationaries', '', 'a', 'aa', 'b', 'r', 'a', 1, 3),
(170, 0, 0, 0, 'Tools', '', 'a', 'aa', 'b', 'r', 'a', 1, 2),
(171, 0, 0, 0, 'Kids Dresses', '', 'a', 'aa', 'a', 'e', 'a', 1, 3),
(172, 0, 0, 0, 'Toys', '', 'a', 'aa', 'c', 'er', 'a', 1, 2),
(173, 0, 0, 0, 'Snacks', '', 'a', 'aa', 'v', 'r', 'a', 1, 1),
(174, 0, 0, 0, 'Stationaries', '', 'a', 'aa', 'b', 'r', 'a', 1, 3),
(175, 0, 0, 0, 'Tools', '', 'a', 'aa', 'b', 'r', 'a', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `center_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `student_father` varchar(255) NOT NULL,
  `student_mother` varchar(255) NOT NULL,
  `student_dob` varchar(255) NOT NULL,
  `student_address` text NOT NULL,
  `student_phone` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_md5` varchar(255) NOT NULL,
  `student_status` int(11) NOT NULL DEFAULT '1',
  `studentlogo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `category_id`, `subcategory_id`, `subject_id`, `center_id`, `b_id`, `student_name`, `student_father`, `student_mother`, `student_dob`, `student_address`, `student_phone`, `student_email`, `user_name`, `password`, `password_md5`, `student_status`, `studentlogo`) VALUES
(1, 1, 0, 0, 3, 1, 'Amit kumar garg', 'S C Garg', 'Snehlata garg', '12-08-2014', 'gdfsgdsfgdsfgdfsg', '8527585135', 'info@textusintentio.com', 'amitkumargarg', '123456789', 'Fj/fy8one4NYxC7vlsm0jQ==', 1, 'bhavshant.jpg'),
(4, 13, 0, 0, 3, 2, 'Manoj garg', 'fasdfasdfas', 'gsdfgdsfgsdfgdsg', '13-01-2015', 'sdfgsdfg fdgdsfg<br>', '456234532455', 'info@samaxtechnologie.com', '', '12345678', 'Fj/fy8one4M=', 1, ''),
(5, 13, 0, 0, 3, 3, 'Manmohan Singh', 'Siddhu Singh', 'Man preet Kaur', '17-07-1980', '7 race course, Majnu ka tila,<br>Bidhansabha road<br>Delhi<br>', '0120456786', 'manmohan@gmail.com', '', '12345678', 'Fj/fy8one4M=', 1, ''),
(6, 13, 0, 0, 3, 4, 'ram singh', 'manmohan singh', 'sneh singh', '25-07-1985', 'SG-99 ram nagar new delhi<br>', '01123456789', 'ram@rediffmail.com', '', '12345678', 'Fj/fy8one4M=', 1, ''),
(7, 13, 0, 0, 3, 1, 'Demo Student', 'Demo Father', 'Demo Mother', '14-02-1989', 'Demo studern<br>City:XYZ<br>', '1234567890', 'student@demo.com', '', 'demo123!', 'LiRi61RYGFw=', 1, ''),
(8, 1, 0, 0, 3, 2, 'Monika', 'DK GARG', 'Demo Mother', '12-06-1990', 'dasfas safa<br>fasdf<br>asd<br>f<br>as<br>df<br>as<br>', '0120456786', 'reliable@demo.com', '', '12345678', 'Fj/fy8one4M=', 1, ''),
(9, 13, 0, 0, 3, 5, 'asdfg', 'gsdfgsdfg', 'fgsdfgsdfg', '21-04-2015', 'gsdf gsfdgdsfg<br>', '646456456', 'gkhanjan@gmail.com', '', '71w3%Ze6hw', 'P3/uhUWrIviewZMz6w7M7Q==', 1, ''),
(10, 19, 0, 0, 3, 6, 'Deepak', 'Sunil', 'Rita', '12-07-1995', 'Avantika Rohini', '9711771854', 'deepakbaghel003@gmail.com', '', 'deepakbaghel003', 'k50gGhR5WEqfi1fiGpNYYA==', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `s_c_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `subcategory_status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`s_c_id`, `category_id`, `subcategory_name`, `subcategory_status`) VALUES
(2, 1, 'Computer Science', 1),
(3, 1, 'Electrical', 1),
(4, 4, 'Computer Science', 1),
(5, 1, 'Civil', 1),
(6, 1, 'Information Tehnologie', 1),
(7, 2, 'Human Resources', 1),
(8, 2, 'Finance', 1),
(9, 2, 'Administrations', 1),
(10, 4, 'Civil', 1),
(14, 13, 'Computer', 1),
(15, 1, 'Textus Intentio', 1),
(20, 13, ' Math olympiad questions', 1),
(21, 2, 'ghj', 1),
(22, 19, 'Aptitude', 1),
(23, 19, 'GK', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `s_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`s_id`, `category_id`, `subcategory_id`, `subject_name`, `subject_status`) VALUES
(15, 13, 20, 'Rational Numbers1', 1),
(16, 13, 20, 'Rational Numbers2', 1),
(17, 13, 20, 'math215', 1),
(18, 13, 20, 'asdf', 1),
(19, 19, 22, 'FA', 1),
(20, 19, 23, 'ECO', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `userpassword` varchar(255) NOT NULL,
  `userpassword_md5` varchar(255) NOT NULL,
  `user_status` int(2) NOT NULL DEFAULT '1',
  `area_permistion` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `useremail`, `userpassword`, `userpassword_md5`, `user_status`, `area_permistion`) VALUES
(11, 'Demo Admin', 'admin@demo.com', 'demo123!', 'LiRi61RYGFw=', 1, '2,3,4,5,6,7,8,9,10,11,12,13,14,15,16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `general_setting`
--
ALTER TABLE `general_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_answer`
--
ALTER TABLE `main_answer`
  ADD PRIMARY KEY (`m_a_id`);

--
-- Indexes for table `main_exam_status`
--
ALTER TABLE `main_exam_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `noticecenter`
--
ALTER TABLE `noticecenter`
  ADD PRIMARY KEY (`nc_id`);

--
-- Indexes for table `noticestudent`
--
ALTER TABLE `noticestudent`
  ADD PRIMARY KEY (`ns_id`);

--
-- Indexes for table `practice_answer`
--
ALTER TABLE `practice_answer`
  ADD PRIMARY KEY (`p_a_id`);

--
-- Indexes for table `practice_exam`
--
ALTER TABLE `practice_exam`
  ADD PRIMARY KEY (`p_e_id`);

--
-- Indexes for table `practice_exam_status`
--
ALTER TABLE `practice_exam_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practice_question`
--
ALTER TABLE `practice_question`
  ADD PRIMARY KEY (`p_q_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`s_c_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `center`
--
ALTER TABLE `center`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `general_setting`
--
ALTER TABLE `general_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_answer`
--
ALTER TABLE `main_answer`
  MODIFY `m_a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `main_exam_status`
--
ALTER TABLE `main_exam_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `noticecenter`
--
ALTER TABLE `noticecenter`
  MODIFY `nc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `noticestudent`
--
ALTER TABLE `noticestudent`
  MODIFY `ns_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;

--
-- AUTO_INCREMENT for table `practice_answer`
--
ALTER TABLE `practice_answer`
  MODIFY `p_a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `practice_exam`
--
ALTER TABLE `practice_exam`
  MODIFY `p_e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `practice_exam_status`
--
ALTER TABLE `practice_exam_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `practice_question`
--
ALTER TABLE `practice_question`
  MODIFY `p_q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `s_c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
