-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2017 at 06:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparklive`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '7488e331b8b64e5794da3fa4eb10ad5d', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contactpagedata`
--

CREATE TABLE `contactpagedata` (
  `id` int(6) UNSIGNED NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `goal`
--

CREATE TABLE `goal` (
  `s_no` int(11) NOT NULL,
  `area` varchar(50) NOT NULL,
  `otherarea` text NOT NULL,
  `goal` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goal`
--

INSERT INTO `goal` (`s_no`, `area`, `otherarea`, `goal`, `email`) VALUES
(1, 'Financial Planning', '', 'Want to be a million', ''),
(2, 'Team Management', '', 'self driven and moti', ''),
(3, 'Health & Wellness', '', 'ozr98070@oepia.com', ''),
(4, 'Work-Life Balance', '', 'Ghj', ''),
(5, 'Carrier Development', '', 'Achive the best poss', ''),
(6, 'Team Management', '', 'Hdnek', ''),
(7, 'Parenting', '', 'Parenting', 'ozr98070@oepia.com'),
(8, 'Health & Wellness', '', 'Focus on health and ', ''),
(9, 'Health & Wellness', '', 'Focus on health and ', ''),
(10, 'Relationship', '', 'Relationship', 'ozr98070@oepia.com'),
(11, 'Boss Management', '', 'Boss', 'ozr98070@oepia.com'),
(12, 'Boss Management', '', 'Boss', 'ozr98070@oepia.com'),
(13, 'Work-Life Balance', '', 'BAlance', 'ozr98070@oepia.com'),
(14, 'Carrier Development', '', 'Being the Global CEO', ''),
(15, 'Health & Wellness', '', 'Test', 'sorbo@happcoach.com'),
(16, 'Team Management', '', 'Increase team engage', ''),
(17, 'Health & Wellness', '', 'Lose weight', ''),
(18, 'Health & Wellness', '', 'Gain 5 kg in 2 month', ''),
(19, 'Boss Management', '', 'Be the dependable te', ''),
(20, 'Work-Life Balance', '', 'Managing work and li', ''),
(21, 'Carrier Development', '', 'A MD in 10 years', ''),
(22, 'Carrier Development', '', 'Leader svp by 3 year', ''),
(23, 'Health & Wellness', '', 'To be fit enough to ', ''),
(24, 'Financial Planning', '', 'Become debt free', ''),
(25, 'Carrier Development', '', 'Alternate career by ', ''),
(26, 'Financial Planning', '', 'Test', 'abhijitprakash@gmail.com'),
(27, 'Health & Wellness', '', 'Get fitter', 'abhijitprakash@gmail.com'),
(28, 'Time Management', '', 'Achieve work life ba', ''),
(29, 'Health & Wellness', '', '80 Kgs by Nov 21st 2', ''),
(30, 'Financial Planning', '', 'Retirement @ 45', ''),
(31, 'Health & Wellness', '', 'Test', 'Sorbojeet@yahoo.com'),
(32, 'Health & Wellness', '', 'Want to reverse my d', 'Saurabhjakhadi@dbs.com'),
(33, 'Health & Wellness', '', 'Test', 'Sorbojeet@yahoo.com'),
(34, 'Team Management', '', 'Build strong relatio', ''),
(35, 'Parenting', '', 'Test', ''),
(36, 'Health & Wellness', '', 'Sometimes', ''),
(37, 'Financial Planning', '', 'Close DEM2 by July 3', ''),
(38, 'Financial Planning', '', 'Close DEM2 by July 3', ''),
(39, 'Parenting', '', 'Heu', ''),
(40, 'Entrepreneur', '', 'Biggest market place', ''),
(41, 'Health & Wellness', '', 'Run faster', ''),
(42, 'Personality Development', '', 'Be the best', ''),
(43, 'Health & Wellness', '', 'Test', ''),
(44, 'Carrier Development', '', 'Cracking the corpora', 'sorbo@happcoach.com'),
(45, 'Work-Life Balance', '', 'Retire at the age of', ''),
(46, 'Carrier Development', '', 'Become the CEO in 7 ', ''),
(47, 'Work-Life Balance', '', 'Take care of health ', 'Rahulgandhi@dbs.com'),
(48, 'Health & Wellness', '', 'To be fit', ''),
(49, 'Health & Wellness', '', 'Full Marathon by 201', 'Gargi. Panvel@gmail.com'),
(50, 'Carrier Development', '', 'Ceo', 'Sandeepdalvi@DBS.COM'),
(51, 'Health & Wellness', '', 'Better fitness', 'Lakshmi@dbs.com'),
(52, 'Work-Life Balance', '', 'Test', ''),
(53, 'Carrier Development', '', 'Global Head of Produ', ''),
(54, 'jnknnknk', '', 'ijijlmn ninkk jnjn j', ''),
(55, 'Parenting', '', 'skdjdsksj', ''),
(56, 'Team Management', '', 'dfdfdf', ''),
(57, 'Personality Development', '', 'efe', ''),
(58, 'Stress Management', '', 'hey there', ''),
(59, 'sdsdsdsd', '', 'dsdsdsdsdsd', 'oqr24349@oepia.com'),
(60, 'Relationship', '', 'Shsmm', ''),
(61, 'Health & Wellness', '', 'Test ', ''),
(62, 'Parenting', '', 'Test ', ''),
(63, 'Parenting', '', 'Tests ', ''),
(64, 'Relationship', '', 'Tera ', ''),
(65, 'Team Management', '', 'Tera ', ''),
(66, 'Relationship', '', 'Tere', ''),
(67, 'Parenting', '', 'test', ''),
(68, 'Stress Management', '', 'wefwf', ''),
(69, 'Personality Development', '', 'hey there', ''),
(70, 'Personality Development', '', 'Some goal', ''),
(71, 'Parenting', '', 'Test ', ''),
(72, 'Stress Management', '', 'Twdt', ''),
(73, 'Time Management', '', 'some text', 'felixnadar123@gmail.com'),
(74, 'Boss Management', '', 'dsdsdsd', ''),
(75, 'Parenting', '', 'the goal is to dance', 'felixnadar123@gmail.com'),
(76, 'Financial Planning', '', 'nbhghghghg', ''),
(77, 'Carrier Development', '', 'gffhfhfhfh', 'yuyuyu@ddsd.sdsd'),
(78, 'Parenting', '', 'some text', 'felixnadar123@gmail.com'),
(79, 'Health & Wellness', '', 'ohh thats ', 'felixnadar123@gmail.com'),
(80, 'Health & Wellness', '', 'fejwfiuwe', ''),
(81, 'Team Management', '', 'some goal', ''),
(82, 'Relationship', '', 'dsdsdsd', ''),
(83, 'Health & Wellness', '', 'dsdsdsd', ''),
(84, 'Health & Wellness', '', 'gfrerg', ''),
(85, 'Parenting', '', 'some text', 'felixnadar123@gmail.com'),
(86, 'Parenting', '', 'wefgerg', ''),
(87, 'qwdwqefwefwef', '', 'fregerg', 'uihfwe@gmail.com'),
(88, 'Financial Planning', '', 'hey wf wefbwef', ''),
(89, 'Personality Development', '', 'dsdsdsdsd', 'xyl20200@oepia.com'),
(90, 'Financial Planning', '', 'ererer', 'xyl20200@oepia.com'),
(91, 'Boss Management', '', 'eerererer', ''),
(92, 'Financial Planning', '', 'dsdsdsds', ''),
(93, 'Financial Planning', '', 'fdfdfdfdf', ''),
(94, 'Financial Planning', '', 'dsdsdsd', ''),
(95, 'Carrier Development', '', 'sdsdsdsd', ''),
(96, 'Carrier Development', '', 's', ''),
(97, 'Financial Planning', '', 'sdsdsdsdsd', ''),
(98, 'Health & Wellness', '', 'sdsdsdsd', ''),
(99, 'Financial Planning', '', 'fdfdfd', ''),
(100, 'Financial Planning', '', 'fdfdfdf', ''),
(101, 'Stress Management', '', 'sdsds', ''),
(102, 'Personality Development', '', 'Simvf hnnn', ''),
(103, 'Personality Development', '', 'efwnfinwef', ''),
(104, 'Carrier Development', '', 'Tuyu', ''),
(105, 'Team Management', '', 'Test', ''),
(106, 'Boss Management', '', 'Test', 'Sorbo@happcoach.com'),
(107, 'Financial Planning', '', 'hey ', ''),
(108, 'Relationship', '', 'dsdsdsds', 'iig01062@tqosi.com'),
(109, 'Boss Management', '', '2000', ''),
(110, 'Work-Life Balance', '', 'askjdn', ''),
(111, 'Personality Development', '', 'Gjskskm', ''),
(112, 'Carrier Development', '', 'sss', ''),
(113, 'Time Management', '', 'v', 'sif@gmail.com'),
(114, 'Time Management', '', 'v', 'sif@gmail.com'),
(115, 'Boss Management', '', 'ffff', ''),
(116, 'Carrier Development', '', 'jkkjk', ''),
(117, 'Carrier Development', '', 'director', ''),
(118, 'Team Management', '', 'test', ''),
(119, 'Carrier Development', '', 'gjhjghjgh', ''),
(120, 'Work-Life Balance', '', 'Etfy', ''),
(121, 'Relationship', '', 'dheyb', ''),
(122, 'Health & Wellness', '', 'test', ''),
(123, 'Boss Management', '', 'director', ''),
(124, 'Health & Wellness', '', 'Test', ''),
(125, 'Carrier Development', '', 'Test', ''),
(126, 'Health & Wellness', '', 'khkjhk', ''),
(127, 'Financial Planning', '', 'test', ''),
(128, 'Carrier Development', '', 'Test', ''),
(129, 'Carrier Development', '', 'Test', ''),
(130, 'Boss Management', '', 'My goal', ''),
(131, 'Boss Management', '', 'Hello world', 'Test@ex.com'),
(132, 'Work-Life Balance', '', 'Sggf', ''),
(133, 'Boss Management', '', 'FDDDD', 'DSFSDF@DFDF'),
(134, 'Carrier Development', '', 'Career', ''),
(135, 'Boss Management', '', 'Hello World', ''),
(136, 'Carrier Development', '', 'Test', ''),
(137, 'Financial Planning', '', 'lolololo', 'bbq28382@tqosi.com'),
(138, 'Financial Planning', '', 'sdsdsds', 'ankurnarkhede@gmail.com'),
(139, 'Health & Wellness', '', 'dsdsdsdsdsd', 'i821026@mvrht.net'),
(140, 'Health & Wellness', '', 'ankurnarkhede@gmail.', 'ankurnarkhede@gmail.com'),
(141, 'Financial Planning', '', 'learn n grow', 'rishabh.shopp@gmail.com'),
(142, 'Parenting', '', 'lol', 'ankurnarkhede@gmail.com'),
(143, 'Parenting', '', 'Test', ''),
(144, 'Carrier Development', '', 'Lawyer by 2019', ''),
(145, 'Parenting', '', 'fsddfdf', 'cmd31852@oalsp.com'),
(146, 'Financial Planning', '', 'fdfdfdf', 'cmd31852@oalsp.com');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scollable`
--

CREATE TABLE `scollable` (
  `id` int(11) NOT NULL,
  `temp_id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `aname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name` longblob NOT NULL,
  `email` varchar(100) NOT NULL,
  `whenneed` datetime NOT NULL,
  `phone` varchar(25) NOT NULL,
  `save` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scollable`
--

INSERT INTO `scollable` (`id`, `temp_id`, `title`, `sname`, `aname`, `name`, `email`, `whenneed`, `phone`, `save`) VALUES
(2, 2, 'Dnt stop till you get enough', '', 'Kersi', 0x696d616765737069632f70686f746f5f313439373530363733342e6a7067, 'kersi007pb@gmail.com', '2017-06-15 11:35:55', '9769120722', '0'),
(3, 2, 'Bnggbbb', '', 'Fgbbbb', 0x696d616765737069632f70686f746f5f313439373530373234362e6a7067, 'hhjsajj@gmail.com', '2017-06-15 11:44:54', '9999999999', '0'),
(4, 4, 'Cashless is kig', 'Ndndnkahsndndgajdnbs', 'Hsndnd an ehdkdn', 0x696d616765737069632f70686f746f5f313439373530383631332e6a7067, 'hdjdnd@gmail.com', '2017-06-15 12:07:03', '9999999999', '0'),
(5, 1, 'Parenting', 'Parenting', 'Parenting', 0x696d616765737069632f70686f746f5f313439373530383632352e6a7067, 'ozr98070@oepia.com', '2017-06-15 12:07:15', '', '1'),
(6, 2, 'Relationship', '', 'Ankur', 0x696d616765737069632f70686f746f5f313439373530383738332e6a7067, 'ozr98070@oepia.com', '2017-06-15 12:09:49', '', '1'),
(7, 3, 'Career', 'Career', 'Ankur', 0x696d616765737069632f70686f746f5f313439373530383838342e6a7067, 'ozr98070@oepia.com', '2017-06-15 12:11:30', '', '1'),
(9, 4, 'BAlance', 'BAlance', 'BAlance', 0x696d616765737069632f70686f746f5f313439373530393136352e6a7067, 'ozr98070@oepia.com', '2017-06-15 12:16:19', '', '1'),
(10, 2, 'Living the dream', '', 'Sufal Kumar gupta', 0x696d616765737069632f70686f746f5f313439373530393431322e6a7067, 'Gupta.sufal@gmail.com', '2017-06-15 12:20:23', '9167406604', '0'),
(11, 2, 'The best of the best', '', 'Indraneil', 0x696d616765737069632f70686f746f5f313439373531383637372e6a7067, 'indraneilghose@dbs.com', '2017-06-15 14:55:02', '', '0'),
(12, 2, 'Road to Wellness', '', 'Aniket', 0x696d616765737069632f70686f746f5f313439373531393332302e6a7067, 'aniket.bhagat17@gmail.com', '2017-06-15 15:05:25', '1234567890', '0'),
(13, 4, 'Break boundaries', '', 'Prathyusha', 0x696d616765737069632f70686f746f5f313439373531393630392e6a7067, 'nalliprathyusha@gmail.com', '2017-06-15 15:10:17', '', '0'),
(14, 2, 'Getting done ', '', 'GOPI', 0x696d616765737069632f70686f746f5f313439373531393630332e6a7067, 'Vpgm1@yahoo.com', '2017-06-15 15:10:36', '9892294608', '0'),
(15, 1, 'Resourceful, dependable always', '', 'Alan Shirazi', 0x696d616765737069632f70686f746f5f313439373531393539382e6a7067, 'alanshirazi1@gmail.com', '2017-06-15 15:10:40', '', '0'),
(16, 1, 'Strike a balance', '', 'Kruti', 0x696d616765737069632f70686f746f5f313439373531393639312e6a7067, 'Krutigandhi@dbs.com ', '2017-06-15 15:11:37', '', '0'),
(17, 3, 'Endless journey', 'Destiny ', 'Saurabh jakhadi', 0x696d616765737069632f70686f746f5f313439373532323431302e6a7067, 'Saurabhjakhadi@dbs.com', '2017-06-15 15:56:59', '9769298138', '0'),
(18, 3, 'Changing tracks', 'Towards fulfilling journey', 'Abhijit', 0x696d616765737069632f70686f746f5f313439373532333139302e6a7067, 'abhijitprakash@gmail.com', '2017-06-15 16:09:57', '', '0'),
(19, 2, 'Healthy is new rich !', '', 'Narayanan Sreenivasan', 0x696d616765737069632f70686f746f5f313439373532363239312e6a7067, 'nsreenivasan16@gmail.com', '2017-06-15 17:02:35', '9967662061', '1'),
(20, 4, 'Enjoy Life post 45', 'Life starts at 45', 'Nirav Shah ', 0x696d616765737069632f70686f746f5f313439373532363935342e6a7067, 'niravushah@gmail.com', '2017-06-15 17:12:39', '9987059881', '0'),
(21, 3, 'achieve balance with smashing work driveresukts', 'be an inspiration to others in the team', 'Taral Shah', 0x696d616765737069632f70686f746f5f313439373532373333312e6a7067, 'taralshah@dbs.com', '2017-06-15 17:18:59', '', '0'),
(22, 2, 'Rebirth', '', 'Ninad', 0x696d616765737069632f70686f746f5f313439373532383330342e6a7067, 'Ninadovalekar@dbs.com', '2017-06-15 17:35:12', '9819052010', '0'),
(23, 2, 'Healthy mind in a healthy body', '', 'Rishabh', 0x696d616765737069632f70686f746f5f313439373538363236382e6a7067, 'Rishi8866@gmail.com', '2017-06-16 09:41:25', '9819444728', '0'),
(24, 2, 'From grind to glory', '', 'Sandeep ', 0x696d616765737069632f70686f746f5f313439373539323733352e6a7067, 'sgrathod@gmail.com', '2017-06-16 11:28:59', '9320503470', '1'),
(25, 1, 'My Pet Project', 'The journey!', 'Ashutosh Sharotri', 0x696d616765737069632f70686f746f5f313439373539333738382e6a7067, 'Ashutosh.sharotri@gmail.com', '2017-06-16 11:48:08', '', '0'),
(26, 2, 'Run faster and stronger', '', 'Ashish Navarange', 0x696d616765737069632f70686f746f5f313439373539373132372e6a7067, 'ashish@dbs.com', '2017-06-16 12:42:24', '', '0'),
(27, 1, 'Cracking the corporate code', 'Navigating complex organisations for new execs', 'Alfian S', 0x696d616765737069632f70686f746f5f313439373630363232302e6a7067, 'alfians@gmail.com', '2017-06-16 15:13:56', '', '0'),
(28, 1, 'Cracking the corporate code', 'Navigating complex organisations for new execs', 'Alfian S', 0x696d616765737069632f70686f746f5f313439373630363332372e6a7067, 'alfians@gmail.com', '2017-06-16 15:16:26', '', '0'),
(29, 1, '55', 'Cut to chase', 'Rahul G. ', 0x696d616765737069632f70686f746f5f313439373630383833342e6a7067, 'Rahulgandhi@dbs.com', '2017-06-16 15:57:22', '', '0'),
(30, 3, 'Fat to Fit', 'Journey towards fitness', 'Lakshmi Vijay', 0x696d616765737069632f70686f746f5f313439373631323632392e6a7067, 'Lakshmi@dbs.com', '2017-06-16 17:00:40', '', '0'),
(31, 1, 'Dream Run', '', 'Sandeep Dalvi', 0x696d616765737069632f70686f746f5f313439373631333336352e6a7067, 'Sandeepdalvi@DBS.COM', '2017-06-16 17:12:54', '', '0'),
(32, 4, 'Rise and shine', 'Changing the landscape of banking', 'Pramit', 0x696d616765737069632f70686f746f5f313439373631333630382e6a7067, 'Pramit@dbs.com', '2017-06-16 17:16:56', '', '0'),
(33, 3, 'Smashing Fit!', 'My journey to fitness', 'Rajan Athreya', 0x696d616765737069632f70686f746f5f313439373631333632302e6a7067, 'Rajani@dbs.com', '2017-06-16 17:17:06', '', '0'),
(34, 1, 'Reshape history', 'How to make a dent in the world', 'Abhishek', 0x696d616765737069632f70686f746f5f313439373631303630312e6a7067, 'abhishek@dbs.com', '2017-06-16 18:04:37', '9819723398', '0'),
(35, 1, 'the most wehyf wefwe', 'wefdjwe wefuwek fewfbenwfewbfew fewufbwej', 'wefwefw wfefnjwfew efwefnwe', 0x696d616765737069632f70686f746f5f313439373839353234322e6a7067, 'felixnadar123@gmail.com', '2017-06-19 23:30:48', '7894561237', '1'),
(36, 1, 'Some text', 'Some text', 'some', 0x696d616765737069632f70686f746f5f313439373935333335372e6a7067, 'felixnadar123@gmail.com', '2017-06-20 15:39:20', '', '1'),
(37, 2, 'some text', '', 'some text', 0x696d616765737069632f70686f746f5f313439373935343134382e6a7067, 'felixnadar123@gmail.com', '2017-06-20 15:52:32', '', '1'),
(38, 0, 'hjhhjhjh', 'jhjhjhjhj', 'hjhjhjhjhjh', 0x696d616765737069632f70686f746f5f313439373935353533302e6a7067, 'zly23365@tipsb.com', '2017-06-20 16:15:35', '7777777777', '0'),
(39, 1, 'something', 'okay', 'qwjdbwqbfubowf', 0x696d616765737069632f70686f746f5f313439373936303636392e6a7067, '', '2017-06-20 17:41:13', '', '1'),
(40, 1, 'hjgghghg', 'hghghghg', 'hghghghghgh', 0x696d616765737069632f70686f746f5f313439373937353139352e6a7067, 'fgf2@yty.dere', '2017-06-20 21:43:18', '7777777777', '1'),
(41, 3, 'Smashing Stereotypes', 'The inspirational Story of India\'s most successful woman Olympian', 'pv sindhu', 0x696d616765737069632f70686f746f5f313439373937383738322e6a7067, 'felixnadar123@gmail.com', '2017-06-20 22:43:17', '', '1'),
(42, 3, 'sadfw fewief wefuiwehfwe fiewhfwef we', 'weuf fewufwef hfweuf fwiuf bfweiuf fwe', 'ewfewfwf', 0x696d616765737069632f70686f746f5f313439373938303738352e6a7067, 'felixnadar123@gmail.com', '2017-06-20 23:16:28', '', '0'),
(43, 1, 'some text ', 'ewhfiuewf wuf ufweh', 'uh wfh', 0x696d616765737069632f70686f746f5f313439373938343837352e6a7067, 'uihfwe@gmail.com', '2017-06-21 00:24:40', '8795643217', '0'),
(44, 4, 'iuwf wfuwef fweuifw fwehfew fw', 'fwef fweiuofew owefn fweoifhwe fweofn', 'fweruif wf', 0x696d616765737069632f70686f746f5f313439373938343933312e6a7067, 'brwfw@gurwf.com', '2017-06-21 00:25:36', '8795462137', '1'),
(45, 4, 'rfeiog', 'fweufnuiewn', 'werijg', 0x696d616765737069632f70686f746f5f313439383033323138372e6a7067, 'felixnadar123@gmail.com', '2017-06-21 13:33:11', '7896543217', '1'),
(46, 1, 'ghgghghghghg', 'ghghghghghghg', 'hghghghghghgh', 0x696d616765737069632f70686f746f5f313439383033373132342e6a7067, 'xyl20200@oepia.com', '2017-06-21 14:55:27', '', '1'),
(47, 2, 'ggghghghg', '', 'hghghghghg', 0x696d616765737069632f70686f746f5f313439383033373231332e6a7067, 'xyl20200@oepia.com', '2017-06-21 14:56:59', '', '1'),
(48, 1, 'dqwidq dweifn', 'dwef weifwenfi', 'wfefwnf weifniwef ', 0x696d616765737069632f70686f746f5f313439383132303334382e6a7067, 'felixnadar123@gmail.com', '2017-06-22 14:02:32', '7895642317', '0'),
(49, 1, 'dqwidq dweifn', 'dwef weifwenfi', 'wfefwnf weifniwef ', 0x696d616765737069632f70686f746f5f313439383132303337322e6a7067, 'hima.mone11@gmail.com', '2017-06-22 14:02:55', '7895642317', '0'),
(50, 3, 'Infinite Energy', '', 'Sorbojeet Chatterjee', 0x696d616765737069632f70686f746f5f313439383139373730342e6a7067, 'Sorbo@happcoach.com', '2017-06-23 11:32:06', '', '0'),
(51, 2, 'Infinite Power', '', 'Rishabh Johri', 0x696d616765737069632f70686f746f5f313439383139373835362e6a7067, 'Rishabh@happcoach.com', '2017-06-23 11:34:23', '', '0'),
(52, 1, 'Hello', 'asdlajsd', 'alksdjalsdj ', 0x696d616765737069632f70686f746f5f313439383231323034372e6a7067, 'lasd@gmail.com', '2017-06-23 15:31:08', '9897979456', '0'),
(53, 1, 'sasasc aas saasas s  a', 'sas', 'asasasac asa', 0x696d616765737069632f70686f746f5f313439383239363631312e6a7067, 'sasas@sas.com', '2017-06-24 15:00:23', '9090120900', '0'),
(54, 3, 'c', 'c', 'c', 0x696d616765737069632f70686f746f5f313439383332373632322e6a7067, 'sif@gmail.com', '2017-06-24 23:37:16', '', '0'),
(55, 2, 'Man from the soil', '', 'Jaguar rich', 0x696d616765737069632f70686f746f5f313439383333313639312e6a7067, 'alabamustapha@gmail.com', '2017-06-25 00:49:36', '8095034525', '0'),
(56, 1, 'test', 'life', 'deep', 0x696d616765737069632f70686f746f5f313439383436353330322e6a7067, 'd@d.com', '2017-06-26 13:51:59', '1222223333', '0'),
(57, 1, 'rgrgerrg', 'errgerrg', 'errgerrge', 0x696d616765737069632f70686f746f5f313439383533363732302e6a7067, 'ere@gmail.com', '2017-06-27 09:42:23', '3265987845', '1'),
(58, 1, 'dewbifiwbef weiubfiewf ', 'fbwuef wehfbhwebf wefibewif', 'fwebf weufwef wuef', 0x696d616765737069632f70686f746f5f313439383535393730382e6a7067, 'felixnadar123@gmail.com', '2017-06-27 16:05:20', '7895462137', '0'),
(59, 2, 'ed md ', '', 'med m d', 0x696d616765737069632f70686f746f5f313439383535393731322e6a7067, 'mfedm@hdh.com', '2017-06-27 16:05:22', '1234567890', '0'),
(60, 1, 'Test', 'Test', 'Test', 0x696d616765737069632f70686f746f5f313439383536303234332e6a7067, 'D@d.com', '2017-06-27 16:14:23', '1234567890', '0'),
(61, 1, 'test', 'test', 'test', 0x696d616765737069632f70686f746f5f313439383633303134302e6a7067, 't@t.com', '2017-06-28 11:39:18', '8888888888', '0'),
(62, 2, 'This is test', '', 'Thakur', 0x696d616765737069632f70686f746f5f313439383633303530332e6a7067, 'test@ex.com', '2017-06-28 11:45:23', '1234567854', '1'),
(63, 1, 'This is test for cover image', 'Hello world', 'sumit', 0x696d616765737069632f70686f746f5f313439383633303838392e6a7067, 'Test@ex.com', '2017-06-28 11:52:00', '987654321', '0'),
(64, 1, 'Hhh', 'Hhhahhaj', 'Ghskisu', 0x696d616765737069632f70686f746f5f313439383633323133322e6a7067, 'Gsh@ex.com', '2017-06-28 12:14:17', '2579345667', '0'),
(65, 1, 'Hhh', 'Hhhahhaj', 'Ghskisu', 0x696d616765737069632f70686f746f5f313439383633323431352e6a7067, 'Gsh@ex.com', '2017-06-28 12:17:13', '2579345667', '0'),
(66, 2, 'Hello World', '', 'Thakur', 0x696d616765737069632f70686f746f5f313439383831353339362e6a7067, 'test@ex.com', '2017-06-30 15:06:47', '9876543210', '0'),
(67, 1, 'bbq28382@tqosi.com', 'bbq28382@tqosi.com', 'bbq28382@tqosi.com', 0x696d616765737069632f70686f746f5f313439393130333537312e6a7067, 'bbq28382@tqosi.com', '2017-07-03 23:09:34', '', '0'),
(68, 1, 'bbh', 'ghghghgh', 'ghghghghg', 0x696d616765737069632f70686f746f5f313439393130333930362e6a7067, 'ankurnarkhede@gmail.com', '2017-07-03 23:15:08', '', '0'),
(69, 1, 'fluorine02@usa.com', 'fluorine02@usa.com', 'fluorine02@usa.com', 0x696d616765737069632f70686f746f5f313439393130353832352e6a7067, 'i821026@mvrht.net', '2017-07-03 23:47:11', '', '0'),
(70, 1, 'fluorine02@usa.com', 'fluorine02@usa.com', 'fluorine02@usa.com', 0x696d616765737069632f70686f746f5f313439393130353834392e6a7067, 'i821026@mvrht.net', '2017-07-03 23:47:33', '', '0'),
(71, 1, 'ankurnarkhede@gmail.com', 'ankurnarkhede@gmail.com', 'ankurnarkhede@gmail.com', 0x696d616765737069632f70686f746f5f313439393134383930312e6a7067, 'ankurnarkhede@gmail.com', '2017-07-04 11:45:05', '', '1'),
(72, 2, 'Rise and Shine', '', 'Rishabh', 0x696d616765737069632f70686f746f5f313439393134393733302e6a7067, 'rishabh.shopp@gmail.com', '2017-07-04 11:58:59', '', '0'),
(73, 3, 'jjhjj', 'hjhjhjhjh', 'jhjhjhjhjhj', 0x696d616765737069632f70686f746f5f313439393135323233312e6a7067, 'ankurnarkhede@gmail.com', '2017-07-04 12:40:34', '', '1'),
(74, 1, 'fsfdfd', 'ffdfdf', 'dfdsfdsfd', 0x696d616765737069632f70686f746f5f313439393930393832302e6a7067, 'cmd31852@oalsp.com', '2017-07-13 07:07:08', '', '1'),
(75, 3, 'dsasas', 'dsasas', 'dsasas', 0x696d616765737069632f70686f746f5f313439393931303036332e6a7067, 'cmd31852@oalsp.com', '2017-07-13 07:11:06', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `goal` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `name` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempep`
--

CREATE TABLE `tempep` (
  `email` varchar(50) NOT NULL,
  `temppass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `sr_no` int(11) NOT NULL,
  `Goal` varchar(300) NOT NULL,
  `key` varchar(300) NOT NULL,
  `Title` varchar(300) NOT NULL,
  `Sub` varchar(300) NOT NULL,
  `Author` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test2`
--

CREATE TABLE `test2` (
  `sr_no` int(11) NOT NULL,
  `Goal` varchar(300) NOT NULL,
  `key` varchar(300) NOT NULL,
  `Title` varchar(300) NOT NULL,
  `Sub` varchar(300) NOT NULL,
  `Author` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usern`
--

CREATE TABLE `usern` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `useroptions`
--

CREATE TABLE `useroptions` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `temp_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `temp_pass` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `lastlogin` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `temp_pass`, `ip`, `lastlogin`) VALUES
(1, 'ozr98070@oepia.com', 'e27d9c3fe8f3d9031abb19f784ec7280', 'ozr98070@oepia.com', '', '', ''),
(2, 'himanshu', '98416ce3cef96791e691038aada5646f', 'hima.mone11@gmail.com', '', '', ''),
(3, 'uvf77509@oepia.com', 'c2ac6bd3143669184798747cd4ce7542', 'uvf77509@oepia.com', '', '', ''),
(4, 'azd90027@oepia.com', '441546b6e3cb1eb4a0a7aaa34ca46b04', 'azd90027@oepia.com', '', '', ''),
(5, 'felix', '25779f8829ab7a7650e85a4cc871e6ac', 'felixnadar123@gmail.com', '', '', ''),
(6, 'xyl20200@oepia.com', '46771e0ed7519021f7165e040fdb5e8b', 'xyl20200@oepia.com', '', '', ''),
(7, 'iig01062@tqosi.com', '377866f660c8d1f2a63651e9a715238b', 'iig01062@tqosi.com', '', '', ''),
(8, 'sif', '56581c7895ba7bc343c9a6f111314898', 'sif@gmail.com', '', '', ''),
(9, 'DSFDS', '552b54fa96e90cd6565fb71968e9fc5a', 'DSFSDF@DFDF', '', '', ''),
(10, 'admin', '7488e331b8b64e5794da3fa4eb10ad5d', 'admin@gmail.com', '', '', ''),
(11, 'bbq28382@tqosi.com', 'ec8ccfa1b34a868b66a1087f405e8ab3', 'bbq28382@tqosi.com', '', '', ''),
(15, 'ankurnarkhede@gmail.com', '193eaf54d91d25264a18fef3ef1c2413', 'ankurnarkhede@gmail.com', '', '', '2017-07-13 06:34:55'),
(13, 'i821026@mvrht.net', 'd11be2a062805a50b72989db33caa954', 'i821026@mvrht.net', '', '', ''),
(14, 'fluorine02@usa.com', '131caaff1c50fca5323fb8d54579d3d2', 'fluorine02@usa.com', '', '', ''),
(16, 'Rishabh', '81dc9bdb52d04dc20036dbd8313ed055', 'rishabh.shopp@gmail.com', '', '', ''),
(17, 'cmd31852@oalsp.com', '785415cf394aed549f414dc04cc5931f', 'cmd31852@oalsp.com', '', '52.170.36.168', '2017-07-13 06:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `usertest`
--

CREATE TABLE `usertest` (
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactpagedata`
--
ALTER TABLE `contactpagedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goal`
--
ALTER TABLE `goal`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scollable`
--
ALTER TABLE `scollable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `test2`
--
ALTER TABLE `test2`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `usern`
--
ALTER TABLE `usern`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useroptions`
--
ALTER TABLE `useroptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contactpagedata`
--
ALTER TABLE `contactpagedata`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `goal`
--
ALTER TABLE `goal`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `scollable`
--
ALTER TABLE `scollable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test2`
--
ALTER TABLE `test2`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usern`
--
ALTER TABLE `usern`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `useroptions`
--
ALTER TABLE `useroptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
