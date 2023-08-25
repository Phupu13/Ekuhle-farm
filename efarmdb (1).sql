-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 02:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `efarmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`ID`, `fname`, `lname`, `phone`, `address`, `userType`, `password`, `email`) VALUES
(16, 'farmer', 'farmer', 723732395, '1200 Witbank', 'Farmer', 'farmer', 'farmer@ekuhle.com'),
(19, 'Happy', 'Tjiane', 728929709, '5473 D Maluka witbank', 'Customer', '#Reg0909', 'happytjiane@gmail.com'),
(20, 'ss', 'Sn', 723732395, '1374 Realeboga Street', 'Customer', 'solly', 'shodress11@gmail.com'),
(21, 'ekuhle', 'farm', 723732395, '1010', 'Customer', 'farm', 'farm@gmail.com'),
(22, 'ndzulamiso', 'jeleni', 812544011, 'makahlule \r\npo box 268\r\nsaselamani\r\n0928', 'Customer', 'Ndzulamiso@', 'austinjeleni@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `quantity` int(100) NOT NULL,
  `farmer_ID` int(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `quantity`, `farmer_ID`, `type`) VALUES
(7, 'oranges    ', 'oranges.jpg', 120.00, 121, 0, 'fruit'),
(22, 'spinach', 'spinash.jpeg', 75.00, 20, 16, 'veg'),
(21, 'banana  ', 'banana.webp', 65.00, 120, 16, 'fruit'),
(20, 'Potatoes  ', 'pt.jpg', 110.00, 100, 16, 'veg'),
(23, 'Tomatoes', 'tomato.jpg', 115.00, 80, 16, 'veg'),
(24, 'Carrots ', 'carrots.jpg', 85.00, 120, 16, 'veg'),
(25, 'Mango', 'Mango.jfif', 150.00, 25, 16, 'fruit'),
(26, 'beans', 'beans.jfif', 55.00, 100, 16, 'veg'),
(27, 'Apples', 'apples.jpeg', 95.00, 70, 16, 'fruit'),
(28, 'Cabbage', 'cabbage.jpeg', 95.00, 70, 16, 'veg'),
(29, 'strawberries', 'stru.jpg', 180.00, 0, 16, 'fruit'),
(30, 'lettuce', 'mix.jpeg', 135.00, 0, 16, 'veg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
