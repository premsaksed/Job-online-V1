-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 11, 2021 at 11:08 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` int(11) NOT NULL,
  `m_user` varchar(100) NOT NULL,
  `m_pass` varchar(100) NOT NULL,
  `m_tel` varchar(20) NOT NULL,
  `m_email` varchar(100) NOT NULL,
  `m_edu` varchar(100) NOT NULL,
  `m_stu` varchar(100) NOT NULL,
  `m_uni` varchar(100) NOT NULL,
  `m_fac` varchar(100) NOT NULL,
  `m_tri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `m_user`, `m_pass`, `m_tel`, `m_email`, `m_edu`, `m_stu`, `m_uni`, `m_fac`, `m_tri`) VALUES
(1, 'จุฬาวรรณ ถวนนอก', '99999', '0942047765', 'julawantn@gmail.com', 'ม.6', 'ชั้นปีที่3', 'มรภ.อุบลราชธานี', 'วิทยาการคอมพิวเตอร์', 'วิทยาการคอมพิวเตอร์');

-- --------------------------------------------------------

--
-- Table structure for table `a_member`
--

CREATE TABLE `a_member` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(5) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Userlevel` varchar(1) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `phone` int(2) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `group` varchar(255) DEFAULT NULL,
  `lavel` int(2) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `faculty` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Firstname`, `Userlevel`, `date`, `phone`, `education`, `group`, `lavel`, `qualification`, `faculty`) VALUES
(1, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'aaa', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'bbb', '47bce5c74f589f4867dbd57e9ca9f808', 'ประยุทธ จันทร์อังคาร', 'M', '2021-06-09', 999999, 'มรภ.อุบล', 'มัลติ', 5, 'วทบ.', 'วิทคอม'),
(3, '3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'ราชภัฏอุบลราชธานี', 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'ๅ', 'c4ca4238a0b923820dcc509a6f75849b', 'ตตตตต', 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, '6', '1679091c5a880faf6fb5e6087eb1b2dc', '6', 'M', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '5', 'e4da3b7fbbce2345d7772b0674a318d5', '5', 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, '7', '8f14e45fceea167a5a36dedd4bea2543', '7', 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '55', '15de21c670ae7c3f6f3f1f37029303c9', '55', 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, '55', 'b53b3a3d6ab90ce0268229151c9bde11', '55', 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '1', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '1', 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, '1', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '1', 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'l;k;lkdf', 'c4ca4238a0b923820dcc509a6f75849b', 'preprkep', 'M', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, '11', '6512bd43d9caa6e02c990b0a82652dca', '11', 'M', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'premtodev', 'a864febc2b33a758b69c6d2b08757a55', 'เทคนิคอุบล', 'M', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, '5', 'e4da3b7fbbce2345d7772b0674a318d5', '5', 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, '9', '4afbb7cb42797a45c0b6c673eb9f0528', 'สมปอง', 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'ppp', 'f27f6f1c7c5cbf4e3e192e0a47b85300', 'ppp', 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, '9', '45c48cce2e2d7fbdea1afc51c7c6ad26', '2020-09-09', 'M', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, '10', 'd3d9446802a44259755d38e6d163e820', '1010-10-10', 'M', '2021-11-11', 2, '2', '2', 2, '2', '2'),
(36, '0', 'cfcd208495d565ef66e7dff9f98764da', '0', 'M', '0005-01-01', 0, '0', '0', 0, '0', '0'),
(37, '0', 'cfcd208495d565ef66e7dff9f98764da', '0', 'M', '0005-01-01', 0, '0', '0', 0, '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `work_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `age` varchar(2) NOT NULL,
  `ed_qual` varchar(100) NOT NULL,
  `estab` varchar(100) NOT NULL,
  `property` varchar(100) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`work_id`, `position`, `age`, `ed_qual`, `estab`, `property`, `date`, `time`, `status`) VALUES
(13, 'Online Admin', '22', ' ปริญญาตรี', 'บริษัท เอ็กซ์พี ,work from home', 'มีความเชี่ยวชาญในด้านคอมพิวเตอร์', '2021-11-09', '08.00', 0),
(15, 'พนักงานจัดของ', '19', '', 'Lotus', 'มีความขยันในการทำงาน', NULL, NULL, 0),
(17, '5', '5', '5', '5', '5', '2021/11/08', '08:12:50pm', 1),
(18, '5', '5', '5', '5', '5', '2021/11/08', '08:16:02pm', 1),
(19, '6', '1', '1', '3', '6', '2021/11/08', '08:16:21pm', 1),
(20, 'ครูคอม', '23', 'คบ.คอม', '3', 'สอนเก่ง', '2021/11/10', '05:03:50am', 0),
(21, '1', '1', '1', '32', '1', '2021/11/11', '01:59:47pm', 1),
(22, '5', '5', '5', '32', '5', '2021/11/11', '02:04:50pm', 1),
(23, 'ช่างซ่อมรถ', '18', 'ป.6', '33', 'ซ่อมจักรยานได้', '2021/11/11', '04:10:50pm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `w_work`
--

CREATE TABLE `w_work` (
  `w_id` int(11) NOT NULL,
  `work` int(50) NOT NULL,
  `user` int(5) NOT NULL,
  `status` int(11) NOT NULL,
  `business` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `w_work`
--

INSERT INTO `w_work` (`w_id`, `work`, `user`, `status`, `business`) VALUES
(17, 20, 2, 0, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_member`
--
ALTER TABLE `a_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`work_id`);

--
-- Indexes for table `w_work`
--
ALTER TABLE `w_work`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `a_member`
--
ALTER TABLE `a_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `w_work`
--
ALTER TABLE `w_work`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
