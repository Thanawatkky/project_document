-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 03:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_document`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_document`
--

CREATE TABLE `tb_document` (
  `doc_id` int(3) NOT NULL,
  `doc_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doc_info` text COLLATE utf8_unicode_ci NOT NULL,
  `doc_date` date NOT NULL,
  `doc_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doc_numbook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doc_usersent` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_document`
--

INSERT INTO `tb_document` (`doc_id`, `doc_name`, `doc_info`, `doc_date`, `doc_file`, `doc_numbook`, `doc_usersent`) VALUES
(58, 'เอกสารทดสอบ 1', 'เอกสารทดสอบ 1', '2022-10-23', 'Order # D22092912295.pdf', 'book1', 'ธนัชพร พุ่มเข็ม'),
(59, 'สร้างเอกสาร', '', '2022-10-24', 'Order # D22092912295.pdf', 'ทดสอบเอกสาร', 'ธนัชพร พุ่มเข็ม'),
(60, '', '', '0000-00-00', 'asdff.pdf', '', 'ธนัชพร พุ่มเข็ม');

-- --------------------------------------------------------

--
-- Table structure for table `tb_group`
--

CREATE TABLE `tb_group` (
  `group_id` int(3) NOT NULL,
  `group_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_info` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_group`
--

INSERT INTO `tb_group` (`group_id`, `group_name`, `group_info`) VALUES
(1, 'Admin', ''),
(2, 'User', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_group` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `password`, `fullname`, `email`, `user_group`) VALUES
(1, 'user1', '2222', 'ธนัชพร พุ่มเข็ม', 'Tanutporn@stc.edu', 'user'),
(2, 'admin', '1111', 'ญาณพล จันทร์ขำ', 'yannaphon@stc.edu', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_document`
--
ALTER TABLE `tb_document`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `tb_group`
--
ALTER TABLE `tb_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_document`
--
ALTER TABLE `tb_document`
  MODIFY `doc_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tb_group`
--
ALTER TABLE `tb_group`
  MODIFY `group_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
