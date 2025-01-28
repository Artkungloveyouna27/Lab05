-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2025 at 04:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(10) NOT NULL,
  `emp_title` varchar(20) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_surname` varchar(50) NOT NULL,
  `emp_birthday` date NOT NULL,
  `emp_adr` text NOT NULL,
  `emp_skill` text NOT NULL,
  `emp_tel` varchar(20) NOT NULL,
  `emp_user` varchar(20) NOT NULL,
  `emp_pass` varchar(32) NOT NULL,
  `emp_level` varchar(1) NOT NULL,
  `d_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_title`, `emp_name`, `emp_surname`, `emp_birthday`, `emp_adr`, `emp_skill`, `emp_tel`, `emp_user`, `emp_pass`, `emp_level`, `d_id`) VALUES
(1, 'นาย', 'ทวีชัย', 'นามฮาด', '2025-01-03', 'ะเ้พกรเ่ำเ่นพกวเ', 'rdthrth', '0875641972', 'boom', 'da9e321600a32175600f', 'u', 0),
(2, 'นาย', 'boom', 'นามฮาด', '2017-02-09', 'segdrg', 'satun', '0875641999', 'boom25', '827ccb0eea8a706c4c34', 'u', 0),
(3, 'นาย', 'อาร์ต', 'คุง', '2017-02-01', 'หำเหด', 'หำดหำด', '0999999999', 'Art123', '827ccb0eea8a706c4c34', 'a', 0),
(4, 'นาย', 'boomgeeeee', 'beem', '2014-02-13', 'ersfgwefg', 'esfsef', '08888888888', 'beem', 'ac42419e9c914469cfa169f4ddc596d1', 'u', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
