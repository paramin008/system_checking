-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 05:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `its`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_class`
--

CREATE TABLE `tb_class` (
  `id_class` int(5) UNSIGNED ZEROFILL NOT NULL,
  `c_class` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_download`
--

CREATE TABLE `tb_download` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `class` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tream` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `list_name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_header`
--

CREATE TABLE `tb_header` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `im_imges` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_imges`
--

CREATE TABLE `tb_imges` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `im_rank` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `im_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `im_grad` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `im_imges` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_imges`
--

INSERT INTO `tb_imges` (`id`, `im_rank`, `im_name`, `im_grad`, `im_imges`) VALUES
(00001, '1', '80-100', 'A', 'imges_80-100.png'),
(00002, '2', '75-79', 'B+', 'imges_75-79.png'),
(00003, '3', '70-74', 'B', 'imges_70-74.png'),
(00004, '4', '65-69', 'C+', 'imges_65-69.png'),
(00005, '5', '60-64', 'C', 'imges_60-64.png'),
(00006, '6', '55-59', 'D+', 'imges_55-59.png'),
(00007, '7', '50-54', 'D', 'imges_50-54.png'),
(00008, '8', '1-49', 'F', 'imges_1-49.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_score`
--

CREATE TABLE `tb_score` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `sc_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sc_imges` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_score`
--

INSERT INTO `tb_score` (`id`, `sc_name`, `sc_imges`) VALUES
(00001, 'min', 'm.png'),
(00002, 'max', 'im_9.png'),
(00003, 'avg', 'a.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE `tb_student` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `fname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Reward` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_subject`
--

CREATE TABLE `tb_subject` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `instructor` varchar(5) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `trem` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `list_names` varchar(200) NOT NULL,
  `code_number` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) UNSIGNED ZEROFILL NOT NULL,
  `fname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `class_s` varchar(30) NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `picture` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_class`
--
ALTER TABLE `tb_class`
  ADD PRIMARY KEY (`id_class`);

--
-- Indexes for table `tb_download`
--
ALTER TABLE `tb_download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_header`
--
ALTER TABLE `tb_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_imges`
--
ALTER TABLE `tb_imges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_score`
--
ALTER TABLE `tb_score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_subject`
--
ALTER TABLE `tb_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_class`
--
ALTER TABLE `tb_class`
  MODIFY `id_class` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_download`
--
ALTER TABLE `tb_download`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_header`
--
ALTER TABLE `tb_header`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_imges`
--
ALTER TABLE `tb_imges`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_score`
--
ALTER TABLE `tb_score`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_student`
--
ALTER TABLE `tb_student`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_subject`
--
ALTER TABLE `tb_subject`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
