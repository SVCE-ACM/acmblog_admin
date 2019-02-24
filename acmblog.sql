-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2019 at 08:42 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acmblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `id` int(10) NOT NULL,
  `dateandtime` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `post` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`id`, `dateandtime`, `title`, `category`, `author`, `image`, `post`) VALUES
(3, 'February-24-2019 08:23:06', 'apple updated', 'Flask', 'imhphari', 'Screenshot (9).png', '														ss8 updated'),
(5, 'February-24-2019 08:41:26', 'post 2', 'Laravel', 'imhphari', 'Screenshot (5).png', 'Sample\r\n'),
(6, 'February-24-2019 08:41:43', 'post 3', 'ads', 'imhphari', 'Screenshot (7).png', 'sample 3');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `dateandtime` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `creatorname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `dateandtime`, `name`, `creatorname`) VALUES
(1, 'February-23-2019 16:05:54', 'ads', 'imhphari'),
(3, 'February-23-2019 16:46:17', 'Laravel', 'imhphari'),
(4, 'February-23-2019 16:57:38', 'Flask', 'imhphari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
