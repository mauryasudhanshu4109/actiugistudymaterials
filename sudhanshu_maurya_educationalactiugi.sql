-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 07:01 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sudhanshu_maurya_educationalactiugi`
--

-- --------------------------------------------------------

--
-- Table structure for table `sudhanshu_maurya_educationalactiugi_user_tbl`
--

CREATE TABLE `sudhanshu_maurya_educationalactiugi_user_tbl` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(25) NOT NULL DEFAULT '',
  `user_full_name` varchar(50) NOT NULL DEFAULT '',
  `user_email` varchar(255) NOT NULL DEFAULT '',
  `mobile_no` int(13) DEFAULT NULL,
  `user_password` varchar(255) NOT NULL DEFAULT '',
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sudhanshu_maurya_educationalactiugi_user_tbl`
--

INSERT INTO `sudhanshu_maurya_educationalactiugi_user_tbl` (`user_id`, `user_name`, `user_full_name`, `user_email`, `mobile_no`, `user_password`, `user_role`) VALUES
(8, 'Bob1', 'Sudhanshu', 'sudh12@gmail.com', 1234567890, 'Face@12', 2),
(9, 'admin', 'Sudhanshu Maurya', 'sudhanshug5423@gmail.com', NULL, 'Suadmin@2021', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sudhanshu_maurya_educationalactiugi_user_tbl`
--
ALTER TABLE `sudhanshu_maurya_educationalactiugi_user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sudhanshu_maurya_educationalactiugi_user_tbl`
--
ALTER TABLE `sudhanshu_maurya_educationalactiugi_user_tbl`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
