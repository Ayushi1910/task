-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2017 at 09:10 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trial`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `currentdate` date NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_detail`
--

CREATE TABLE `employee_detail` (
  `ename` varchar(150) NOT NULL,
  `file_name` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ename` varchar(150) NOT NULL,
  `epassword` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ename`, `epassword`) VALUES
('Ayushi', 'cmsdc'),
('Ayushi', 's,cmsdc'),
('dcks', 'kcksc'),
('dcks', 'jcksc'),
('dcks', ' kolo'),
('dcks', 'cskj'),
('Ayushi', 'ayushi'),
('Ayush', 'jkscjskzc'),
('Ayu', 'ghhvhj'),
('aman', 'csjjsjk');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `rimg` text NOT NULL,
  `rname` varchar(150) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cno` int(11) NOT NULL,
  `ano` int(11) DEFAULT NULL,
  `vcard` text,
  `mcard` text,
  `homedelivery` varchar(5) NOT NULL,
  `note` text NOT NULL,
  `outcomes` varchar(10) NOT NULL,
  `affiliations` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`rimg`, `rname`, `name`, `cno`, `ano`, `vcard`, `mcard`, `homedelivery`, `note`, `outcomes`, `affiliations`, `date`) VALUES
('IMG_20170504_112407149.jpg', 'abc', '', 2147483647, 216588996, 'IMG-20170427-WA0006.jpg', 'IMG-20170504-WA0038.jpg', 'Yes', 'kjckjskfiioa', 'Positive', '', '0000-00-00'),
('IMG-20170504-WA0038.jpg', 'hvkjk', 'A', 2147483647, 0, '', '', 'Yes', '', 'Positive', '', '0000-00-00'),
('IMG_20170504_112407149.jpg', 'abc', 'abc', 2147483647, 216588996, 'IMG-20170427-WA0006.jpg', 'IMG-20170504-WA0038.jpg', 'Yes', 'kjckjskfiioa', 'Positive', 'smx', '0000-00-00'),
('IMG-20170504-WA0038.jpg', 'hvkjk', 'abcs', 2147483647, 0, '', '', 'Yes', '', 'Positive', '', '0000-00-00'),
('IMG-20170504-WA0038.jpg', 'hvkjk', 'abcsa', 2147483647, 0, '', '', 'Yes', '', 'Positive', '', '0000-00-00'),
('', 'jscbjsck', 'ajascbscis', 2147483647, 1215665156, '', '', 'Yes', '', 'Positive', 'mcs', '0000-00-00'),
('', 'jscbjsck', 'ajascbscisbn', 2147483647, 1215665156, '', '', 'Yes', '', 'Positive', 'mcs4', '0000-00-00'),
('', 'jscbjsck', 'ajascbscisbnnb', 2147483647, 1215665156, '', '', 'Yes', '', 'Positive', '', '0000-00-00'),
('', 'jscbjsck', 'ajascbscisbnnbn', 2147483647, 1215665156, '', '', 'Yes', '', 'Positive', 'mcs4', '0000-00-00'),
('IMG-20151129-WA0003.jpg', 'jscbjsck', 'ajascbscisbnnbnghhg', 2147483647, 1215665156, 'IMG_2850.jpeg', '[\"IMG-20151129-WA0003.jpg\",\"IMG-20170427-WA0006.jpg\",\"IMG-20170504-WA0038.jpg\"]', 'Yes', '', 'Positive', 'mcs4', '0000-00-00'),
('IMG-20151129-WA0003.jpg', 'jscbjsck', 'ajascbscisbnnbnghhgb', 2147483647, 1215665156, 'IMG_2850.jpeg', '[\"IMG-20151129-WA0003.jpg\",\"IMG-20170427-WA0006.jpg\",\"IMG-20170504-WA0038.jpg\"]', 'Yes', '', 'Positive', 'mcs4', '0000-00-00'),
('IMG-20151129-WA0003.jpg', 'jscbjsck', 'ajay', 2147483647, 1215665156, 'IMG_2850.jpeg', '[\"IMG-20151129-WA0003.jpg\",\"IMG-20170427-WA0006.jpg\",\"IMG-20170504-WA0038.jpg\"]', 'Yes', '', 'Positive', '', '0000-00-00'),
('IMG-20151129-WA0003.jpg', 'jscbjsck', 'ajayy', 2147483647, 1215665156, 'IMG_2850.jpeg', '[\"IMG-20151129-WA0003.jpg\",\"IMG-20170427-WA0006.jpg\",\"IMG-20170504-WA0038.jpg\"]', 'Yes', '', 'Positive', 'mcs4', '0000-00-00'),
('Small-Size-Capped-Bust-Dimes-Obverse.jpg', 'jscbjsck', 'ajayyy', 2147483647, 1215665156, 'images.jpeg', '[\"31STUFF_APPLES-articleLarge-v2.jpg\",\"images.jpeg\"]', 'Yes', '', 'Positive', 'mcs4', '0000-00-00'),
('Small-Size-Capped-Bust-Dimes-Obverse.jpg', 'jscbjsck', 'aman', 2147483647, 1215665156, 'images.jpeg', '[\"31STUFF_APPLES-articleLarge-v2.jpg\",\"images.jpeg\"]', 'Yes', '', 'Positive', 'mcs4', '0000-00-00'),
('images.jpeg', 'bjcjkj', 'amann', 21158848, 11564646, '31STUFF_APPLES-articleLarge-v2.jpg', '[\"31STUFF_APPLES-articleLarge-v2.jpg\",\"images.jpeg\"]', 'Yes', 'njxvnvnks', 'Positive', '', '0000-00-00'),
('IMG_20170504_112407149.jpg', 'cnjc ', 'Ay', 211551, 511115, 'IMG_20170504_112407149.jpg', 'IMG-20151129-WA0003.jpg', 'Yes', 'cjdsncsk', 'Positive', '', '2017-10-25'),
('IMG_20170504_112407149.jpg', 'cnjc ', 'Ayu', 211551, 511115, 'IMG_20170504_112407149.jpg', 'IMG-20151129-WA0003.jpg', 'Yes', 'cjdsncsk', 'Positive', '', '2017-10-25'),
('', 'hvvjk', 'Ayughhj', 255665431, 0, '', '', 'Yes', '', 'Positive', 'jbbkjkbj', '0000-00-00'),
('IMG_20170504_112407149.jpg', 'cnjc ', 'Ayus', 211551, 511115, 'IMG_20170504_112407149.jpg', 'IMG-20151129-WA0003.jpg', 'Yes', 'cjdsncsk', 'Positive', '', '2017-10-25'),
('IMG_20170504_112407149.jpg', 'cnjc ', 'Ayush', 211551, 511115, 'IMG_20170504_112407149.jpg', 'IMG-20151129-WA0003.jpg', 'Yes', 'cjdsncsk', 'Positive', 'mc kjc', '0000-00-00'),
('IMG_20170504_112407149.jpg', 'cnjc ', 'Ayush1', 211551, 511115, 'IMG_20170504_112407149.jpg', 'IMG-20151129-WA0003.jpg', 'Yes', 'cjdsncsk', 'Positive', '', '0000-00-00'),
('IMG_20170504_112407149.jpg', 'cnjc ', 'Ayush12', 211551, 511115, 'IMG_20170504_112407149.jpg', 'IMG-20151129-WA0003.jpg', 'Yes', 'cjdsncsk', 'Positive', '', '0000-00-00'),
('IMG_2850.jpeg', 'jz nk', 'Ayush45', 125564115, 1561889, 'IMG_20170504_112407149.jpg', 'IMG_20170504_112407149.jpg', 'Yes', 'jkjkb', 'Positive', '', '2017-10-25'),
('IMG_20170504_112407149.jpg', 'xyz', 'Ayushi', 2147483647, 5658466, 'IMG_20170504_112407149.jpg', 'IMG_20170504_112407149.jpg', 'Yes', 'c kckc', 'Positive', 'No', '0000-00-00'),
('IMG_2850.jpeg', 'hjbjllj', 'hjj', 32161916, 31661665, 'IMG_20170504_112407149.jpg', 'IMG-20151129-WA0003.jpg', 'Yes', 'n ,,;', 'Positive', 'No', '2017-05-25'),
('IMG_2850.jpeg', 'hjbjll', 'jblbl', 32161916, 31661665, 'IMG_20170504_112407149.jpg', 'IMG-20151129-WA0003.jpg', 'Yes', 'n ,,;', 'Positive', 'jbjbk', '2017-05-25'),
('IMG_2850.jpeg', 'hjbjllj', 'jblbljk', 32161916, 31661665, 'IMG_20170504_112407149.jpg', 'IMG-20151129-WA0003.jpg', 'Yes', 'n ,,;', 'Positive', 'No', '2017-05-25'),
('IMG_2850.jpeg', 'hjbjllj', 'jblbljknn', 32161916, 31661665, 'IMG_20170504_112407149.jpg', 'IMG-20151129-WA0003.jpg', 'Yes', 'n ,,;', 'Positive', 'No', '2017-05-25'),
('IMG-20170504-WA0038.jpg', 'hvkjk', 'nbg', 2147483647, 0, '', '', 'Yes', '', 'Positive', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
