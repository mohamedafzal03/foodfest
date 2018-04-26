-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2017 at 03:17 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodfest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pass`) VALUES
('a@a', 'a'),
('admin01@bitsathy.ac.in', 'admin'),
('admin@bitsathy.ac.in', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `break`
--

CREATE TABLE `break` (
  `id` int(30) NOT NULL,
  `break_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `break`
--

INSERT INTO `break` (`id`, `break_name`) VALUES
(1, 'idle'),
(2, 'pongal'),
(3, 'dosa'),
(4, 'chapathi'),
(5, 'noodles\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `break1`
--

CREATE TABLE `break1` (
  `id` int(11) NOT NULL,
  `break1_name` text NOT NULL,
  `break_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `break1`
--

INSERT INTO `break1` (`id`, `break1_name`, `break_id`) VALUES
(1, 'sambar,vada', 1),
(2, 'venpongal,sambar', 1),
(3, 'semiya,sambar', 1),
(4, 'vada', 2),
(5, 'egg curry', 2),
(6, 'veg curry', 3),
(7, 'vada', 3),
(8, 'egg curry', 4),
(9, 'fruit salad', 4),
(10, 'veg butcher', 4),
(11, 'bread', 5),
(12, 'semiya', 5);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(30) NOT NULL,
  `country_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`) VALUES
(1, 'brazil'),
(2, 'china'),
(3, 'france');

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

CREATE TABLE `dinner` (
  `id` int(11) NOT NULL,
  `dinner_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinner`
--

INSERT INTO `dinner` (`id`, `dinner_name`) VALUES
(1, 'chapathi'),
(2, 'parota'),
(3, 'variety rice'),
(4, 'noodles'),
(5, 'egg rice'),
(6, 'rotti');

-- --------------------------------------------------------

--
-- Table structure for table `dinner1`
--

CREATE TABLE `dinner1` (
  `id` int(11) NOT NULL,
  `dinner1_name` text NOT NULL,
  `dinner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinner1`
--

INSERT INTO `dinner1` (`id`, `dinner1_name`, `dinner_id`) VALUES
(1, 'egg', 1),
(2, 'fruit salad', 1),
(3, 'banana', 2),
(4, 'egg curry', 2),
(5, 'vadagam', 3),
(6, 'veg curry', 3),
(7, 'egg curry', 4),
(8, 'veg curry', 4),
(9, 'recipe', 5),
(10, 'banana', 6),
(11, 'Veg curry', 6);

-- --------------------------------------------------------

--
-- Table structure for table `dum`
--

CREATE TABLE `dum` (
  `state` text NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dum`
--

INSERT INTO `dum` (`state`, `city`) VALUES
('tamilnadu', 'madurai'),
('tamilnadu', 'chennai'),
('tamilnadu', 'erode'),
('kerela', 'vaalpaarai'),
('kerela', 'kottayam'),
('kerela', 'boating');

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`id`, `name`) VALUES
('afzal', '151cs202'),
('bharath', '151cs125'),
('gokul', '151cs143'),
('a', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `dummy2`
--

CREATE TABLE `dummy2` (
  `a` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` text NOT NULL,
  `rno` varchar(30) NOT NULL,
  `breakfast` text NOT NULL,
  `breakfast1` text NOT NULL,
  `lunch` text NOT NULL,
  `lunch1` text NOT NULL,
  `dinner` text NOT NULL,
  `dinner1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `rno`, `breakfast`, `breakfast1`, `lunch`, `lunch1`, `dinner`, `dinner1`) VALUES
('bharay', '125', 'Idle', 'Semiya', 'Rice', 'Beetroot', 'Semiya', 'Egg'),
('afrafzal', '1511511515151', '3', '7', '2', '5', '1', '1'),
('maddy', '151cs198', '4', '10', '3', '7', '1', '1'),
('Afzal', '151cs202', 'Dosa', 'Vada', 'Veg Biriyani', 'Egg', 'Chapathi', 'Egg'),
('AF', '151cs20202', 'Idle', 'Kesari', 'Mushroom Biriyani', 'Beetroot', 'Chapathi', 'Tomato'),
('mugunth', '151cs209', '5', '12', '1', '1', '1', '2'),
('viki', '151mc206', '3', '6', '1', '2', '3', '5'),
('q', 'a', '0', '', '', '', '', ''),
('aaa', 'aaa', 'aaa', '', '', '', '', ''),
('AaAA', 'aaAA', 'Idle', '', '', '', '', 'Egg'),
('afra', 'afra', '1', '1', 'Veg Biriyani', 'Beetroot', 'Semiya', 'Egg'),
('cc', 'cc', '2', 'egg curry', '2', 'egg curry', '2', '4'),
('dd', 'dd', '4', 'fruit salad', '1', '2', '3', 'veg curry'),
('eee', 'eee', '', '', 'Mushroom Biriyani', 'Egg', 'Chapathi', 'Tomato'),
('errr', 'errr', '3', 'vada', '2', '7', '5', 'recipe'),
('llll', 'lll', '2', 'vada', '1', 'sambar,vada', '1', '1'),
('pppppppppppppp', 'ppppppppppppppppppppp', '3', 'vada', '2', '7', '1', 'egg'),
('q', 'q', '3', '', '', '', '', ''),
('qqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqq', '', 'egg curry', '3', 'egg curry', '1', 'egg'),
('qwertyu', 'qwertyu', 'Pongal', 'Semiya', 'Veg Biriyani', 'Beetroot', 'Chapathi', 'Fruit Salad '),
('qwertyuio', 'qwertyuio', '', '', '', '', '', 'Egg'),
('rat', 'rat', '4', 'fruit salad', '2', '7', '5', 'recipe'),
('ss', 'ss', '', 'Semiya', 'Rice', 'Egg', 'Chapathi', 'Egg'),
('vv', 'vv', '1', 'semiya,sambar', '1', '2', '2', 'egg curry'),
('www', 'www', '2', '4', '2', '4', '3', '6'),
('xxx', 'xxx', '', '', 'Rice', 'Egg', 'Semiya', 'Egg');

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `id` int(30) NOT NULL,
  `lunch_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`id`, `lunch_name`) VALUES
(1, 'white rice'),
(2, 'veg biriyani'),
(3, 'mushrum biriyani');

-- --------------------------------------------------------

--
-- Table structure for table `lunch1`
--

CREATE TABLE `lunch1` (
  `id` int(11) NOT NULL,
  `lunch1_name` text NOT NULL,
  `lunch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunch1`
--

INSERT INTO `lunch1` (`id`, `lunch1_name`, `lunch_id`) VALUES
(1, 'egg', 1),
(2, 'amblate', 1),
(3, 'potato recipes', 1),
(4, 'beetroot', 1),
(5, 'meal maker', 1),
(6, 'egg', 2),
(7, 'meal maker', 2),
(8, 'egg curry', 3),
(9, 'veg curry\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `new2`
--

CREATE TABLE `new2` (
  `country` text NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new2`
--

INSERT INTO `new2` (`country`, `state`) VALUES
('india', 'tn'),
('india', 'karnataka'),
('Usa', 'barzil'),
('usa', 'aaaaa'),
('usa', 'washingdon');

-- --------------------------------------------------------

--
-- Table structure for table `rno`
--

CREATE TABLE `rno` (
  `rno` int(11) NOT NULL,
  `sub` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rno`
--

INSERT INTO `rno` (`rno`, `sub`) VALUES
(0, ''),
(7, 'PHP'),
(123, ''),
(151, 'PHP'),
(1111, 'PHP'),
(12345, ''),
(123455, ''),
(23456789, ''),
(1234567890, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `lname`, `email`, `pass`) VALUES
('', '', '', ''),
('a', 'a', 'a@a', 'a'),
('a', 'a', 'a@g', 'a'),
('aa', 'a', 'a@w', 'a'),
('aaa', 'aaa', 'aaa@aaa', 'aaa'),
('aaa', 'aaa', 'aaa@qq', 'a'),
('afAF', 'AFZAL', 'AAAA2@3', 'q12323'),
('a', 'aaaa', 'aaaaa@aa', 'aaaa'),
('aaaaaa', 'aaaaa', 'aaaaa@qqq', 'aaaaa'),
('aaaaaaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaaa@aaaaaaaa', 'aaaaaaaaaaaa'),
('af', 'af', 'af@af', 'af'),
('af', 'afzal', 'afzal@gmail.com', 'afffff'),
('asd', 'asd', 'asd@a', 'asd'),
('qwe', 'qwe', 'asdf@asdf', 'asdf'),
('b', 'b', 'b@b', 'b'),
('b', 'b', 'b@g', 'b'),
('c', 'c', 'c@c', 'c'),
('q', 'q', 'f@sd', 'd'),
('ff', 'ff', 'ff@f', 'ff'),
('GOKUL', 'N', 'GOKU@G', 'GOKUL'),
('h', 'h', 'h@h', 'h'),
('MANOJ', 'KUMAR', 'manojkumar.cs15@bitsathy.ac.in', 'preethika'),
('moha', 'med', 'moha@gmail', 'aaaa'),
('n', 'n', 'n@n', 'n'),
('q', 'q', 'q@q', 'qqq'),
('qqqqqqqqqq', 'qqqqqqqq', 'qqqqqq@11111111111', '1111111'),
('q', 'q', 'qwertyuiop@qwertyuio', 'qwertyuiop'),
('qqq', 'qqq', 'rr@r', 'rrr'),
('t', 't', 't@t', 't'),
('v', 'v', 'v@v', 'v'),
('wwwww', 'www', 'w2wwwwwwwwwee2W@s', 'ss'),
('w', 'w', 'w@W', 'w'),
('www', 'www', 'www@www', 'www'),
('XXX', 'XXX', 'XXX@X', 'XXX'),
('z', 'z', 'z@z', 'z'),
('zz', 'zz', 'zz@x', 'x');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `countryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `countryID`) VALUES
(1, 'madura', 1),
(2, 'chennai', 1),
(3, 'afganistan', 3),
(4, 'paki', 2),
(5, 'aaaaaaa', 3),
(6, 'aaaaaaaaaa', 3);

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `rno` varchar(20) NOT NULL,
  `breakfast` text NOT NULL,
  `breakfastcurry` text NOT NULL,
  `lunch` text NOT NULL,
  `lunchcurry` text NOT NULL,
  `dinner` text NOT NULL,
  `dinnercurry` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`rno`, `breakfast`, `breakfastcurry`, `lunch`, `lunchcurry`, `dinner`, `dinnercurry`) VALUES
('151cs202', 'idle', 'chutney', 'biriyani', 'egg curry', 'chapathi', 'sambar'),
('aa', 'aa', 'aa', '', 'aa', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `waste`
--

CREATE TABLE `waste` (
  `kg` int(10) NOT NULL,
  `rs` int(10) NOT NULL,
  `rupees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waste`
--

INSERT INTO `waste` (`kg`, `rs`, `rupees`) VALUES
(0, 100, 0),
(2, 2, 0),
(3, 3, 0),
(3, 3, 0),
(2, 6, 0),
(1, 1, 0),
(1, 1, 0),
(100, 1, 0),
(1, 1, 0),
(1, 1, 0),
(100, 100, 0),
(1234, 123, 0),
(1234, 123, 0),
(3, 200, 600),
(22, 2, 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `break`
--
ALTER TABLE `break`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `break1`
--
ALTER TABLE `break1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `rno`
--
ALTER TABLE `rno`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`rno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
