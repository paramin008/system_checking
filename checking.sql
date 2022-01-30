-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 19, 2020 at 02:20 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11191767_itschecking`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_class`
--

CREATE TABLE `tb_class` (
  `id_class` int(5) UNSIGNED ZEROFILL NOT NULL,
  `c_class` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_class`
--

INSERT INTO `tb_class` (`id_class`, `c_class`) VALUES
(00001, 'ITS36121N'),
(00002, 'ITS35941N'),
(00003, 'ITS35741N');

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

--
-- Dumping data for table `tb_download`
--

INSERT INTO `tb_download` (`id`, `class`, `tream`, `year`, `list_name`) VALUES
(00006, ' ITS36121N', '3', '2563', 'excel_ ITS36121N_3_2563.xls');

-- --------------------------------------------------------

--
-- Table structure for table `tb_header`
--

CREATE TABLE `tb_header` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `im_imges` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_header`
--

INSERT INTO `tb_header` (`id`, `im_imges`) VALUES
(00001, 'sci-1.png'),
(00002, 'sci-2.png'),
(00003, 'sci-3.png'),
(00004, 'sci-4.png'),
(00005, 'sci-5.png');

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

--
-- Dumping data for table `tb_subject`
--

INSERT INTO `tb_subject` (`id`, `instructor`, `sub_name`, `class`, `trem`, `year`, `list_names`, `code_number`) VALUES
(00116, '00112', 'การเขียนเว็บไซต์', 'ITS36121N', '1', '2562', 'ใบรายชื่อวิชาการเขียนเว็บไซต์_ITS36121N_1_2562.xls', '00001'),
(00117, '00112', 'ไอที', 'ITS36121N', '1', '2562', 'ใบรายชื่อวิชาไอที_ITS36121N_1_2562.xls', '00001'),
(00118, '00112', 'การออกแบบ', 'ITS36121N', '2', '2562', 'ใบรายชื่อวิชาการออกแบบ_ITS36121N_2_2562.xls', '00001'),
(00119, '00112', 'การวิเคราะห์ออกแบบระบบ', 'ITS36121N', '2', '2562', 'ใบรายชื่อวิชาการวิเคราะห์ออกแบบระบบ_ITS36121N_2_2562.xls', '00001'),
(00120, '00112', 'ระบบเครือข่าย', 'ITS36121N', '1', '2562', 'ใบรายชื่อวิชาระบบเครือข่าย_ITS36121N_1_2562.xls', '00001'),
(00130, '00127', ' ไพทอน', 'ITS36121N', '1', '2563', 'excel_ ไพทอน_ITS36121N_1_2563.xls', '00001'),
(00131, '00112', ' gis', 'ITS36121N', '1', '2563', 'excel_ gis_ITS36121N_1_2563.xls', '00001');

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
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `fname`, `lname`, `class_s`, `email`, `picture`, `status`) VALUES
(00108, 'H', 'H', '', 'oran9266@gmail.com', 'https://lh3.googleusercontent.com/-48TMVYAWsOc/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rdc1ZkDTbuM5CdeJ91fZ27qt4Fo-A/photo.jpg', '500'),
(00110, 'Kanokwan', 'Khamnuanboon', '', 'kanokwan38101@gmail.com', 'https://lh3.googleusercontent.com/a-/AAuE7mBVfleWM05tjXZhZ9YM-WHvvikfgN9MybR3lc1c', '1'),
(00112, 'อาจารย์A', 'ดีต่อใจ', '', 'oran9263@gmail.com', 'https://lh3.googleusercontent.com/a-/AAuE7mDNsiqCfjfHkpE1Vw3oGzPTYtQ5n6j4AQEAHDS2sg', 'อาจารย์ผู้สอน'),
(00113, 'ชนาภา', 'มาประเสริฐ', 'ITS35941N', 'chapa-st@rmutsb.ac.th', 'https://lh3.googleusercontent.com/a-/AAuE7mCHD2MWb_e8mkGtM0PTslxoQb2Qix4K6BQbfjaA', 'นักศึกษา'),
(00124, 'โอฬาร', 'หอมดี', 'ITS36121N', 'oranmail-st@rmutsb.ac.th', 'https://lh3.googleusercontent.com/a-/AAuE7mDVzGNcz_DT9uJmTZ_sDOWc4iJyjTjXnECOAKMI', 'นักศึกษา'),
(00125, 'วิไลวรรณ', 'นิยมทอง', 'ITS36121N', 'wilaiwanniyomthong-st@rmutsb.ac.th', 'https://lh3.googleusercontent.com/a-/AAuE7mBWgX_gOu4hdtnE0xlBwvoe4lyoGxGG85c0RJR9YA', 'นักศึกษา'),
(00126, 'อาจารย์A', 'ดีต่อใจ', '', 'oran9263@gmail.com', 'https://lh3.googleusercontent.com/a-/AAuE7mDNsiqCfjfHkpE1Vw3oGzPTYtQ5n6j4AQEAHDS2sg', 'อาจารย์ผู้สอน'),
(00127, 'Paramin', 'Supapong', '', 'kay099966358@gmail.com', 'https://lh3.googleusercontent.com/a-/AAuE7mCSJ-Ocx_JIU1Z838aG8ovGjlNwj5YNG0k9wrI1Tg', 'อาจารย์ผู้สอน'),
(00128, 'ปารมิน', 'สุภาพงษ์', 'ITS36121N', 'paraminits008@gmail.com', 'https://lh6.googleusercontent.com/-_aSyqdenmSw/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rebdXQOuUuyON9c3qz4shwPWMFp9g/photo.jpg', 'นักศึกษา'),
(00129, 'Wilaiwan', 'Min', '', 'wilaiwanmin540@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GjfAbMu-Y_UCNidE61Xr_IaZR4-db-v-p8qhX-C3A', '500');

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
