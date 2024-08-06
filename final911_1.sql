-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2023 at 09:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final911`
--

-- --------------------------------------------------------

--
-- Table structure for table `addporduct`
--

CREATE TABLE `addporduct` (
  `id` int(11) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `old` varchar(10) NOT NULL,
  `new` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `addporduct`
--

INSERT INTO `addporduct` (`id`, `cat`, `title`, `old`, `new`, `image`, `date`) VALUES
(4, 'Laptop', 'HP', '60000', '100000', 'download (3).jpg', 2147483647),
(5, 'Laptop', 'oppo', '50000', '10000', 'download (1).jpg', 2147483647),
(7, 'Laptop', 'dell', '60000', '100000', 'orange.jpg', 2147483647),
(8, 'Laptop', 'samsung', '70000', '80000', 'tea.jpg', 2147483647),
(9, 'Laptop', 'Tecno', '2000', '50000', 'images.jpg', 2147483647),
(10, 'Mobile', 'VIVO', '50000', '80000', 'img1.jpg', 2147483647),
(11, 'Laptop', 'DELL', '50000', '100000', 'img1.jpg', 2147483647),
(12, 'Mobile', 'OPPO', '200000', '5000000', 'mob1.jpg', 2147483647),
(13, 'Tablet', 'LENOVO', '60000', '800000', 'mob3.jpg', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `adduser`
--

CREATE TABLE `adduser` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `pss` varchar(50) NOT NULL,
  `em` varchar(20) NOT NULL,
  `file` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `adduser`
--

INSERT INTO `adduser` (`id`, `fname`, `lname`, `pss`, `em`, `file`, `date`) VALUES
(8, 'saim', 'khan', 'ed265bc903a5a097f61d3ec064d96d2e', 'saim@gmai.com', '240_F_393914615_ceXm7vWAVueMbn7caCW8I4DDWCMmla5D.j', '2023-08-03 14:27:26'),
(26, 'ali', 'khan', '202cb962ac59075b964b07152d234b70', 'ali@gmail.com', 'img1.jpg', '2023-08-06 18:40:52'),
(27, 'kashan', 'khan', '202cb962ac59075b964b07152d234b70', 'kashan@gmail.com', 'img1.jpg', '2023-08-10 14:22:14'),
(28, 'saif', 'khan', '202cb962ac59075b964b07152d234b70', 'saif@gmail.com', 'img1.jpg', '2023-08-10 14:24:36'),
(29, 'aisha', 'khan', '202cb962ac59075b964b07152d234b70', 'aisha@gmail.com', 'img1.jpg', '2023-08-12 00:09:13'),
(30, 'parveez', 'khan', '202cb962ac59075b964b07152d234b70', 'parveez@gmail.com', 'img1.jpg', '2023-08-12 00:30:29'),
(31, 'sarmad', 'khan', '202cb962ac59075b964b07152d234b70', 'sarmadkhan@gmail.com', 'download (1).jpg', '2023-08-20 00:37:16'),
(32, 'aslam', 'khan', '202cb962ac59075b964b07152d234b70', 'aslam@gmail.com', 'img1.jpg', '2023-08-25 23:50:53'),
(33, 'zaffar', 'khan', '202cb962ac59075b964b07152d234b70', 'zaffar@gmail.com', 'img1.jpg', '2023-09-02 00:16:36'),
(34, 'salman', 'ali', '202cb962ac59075b964b07152d234b70', 'salman@gmail.com', 'ecom.png', '2023-09-19 00:17:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addporduct`
--
ALTER TABLE `addporduct`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `adduser`
--
ALTER TABLE `adduser`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addporduct`
--
ALTER TABLE `addporduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `adduser`
--
ALTER TABLE `adduser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
