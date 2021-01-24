-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 09:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pabili`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` int(12) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pword` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`user_id`, `fname`, `lname`, `address`, `birthday`, `email`, `phone`, `username`, `pword`) VALUES
(6, 'james', 'bond', 'AWDWWD', '2020-12-31', 'awdwada@g.com', 123123213, 'james', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `product_id`, `seller_id`, `product_name`, `description`, `price`, `quantity`, `product_image`) VALUES
(1, 1001, 2, 'watch for men', 'leather watch for men silver', '1899.00', 100, ' product_images/watch_men.jpg'),
(2, 1002, 2, '4gb ram desktop', 'hyperx ram for desktop pc ddr3', '1799.00', 49, ' product_images/hyperx_ram.jpg'),
(3, 1003, 2, 'brown shoes', 'brown leather shoes for men ', '2499.00', 20, ' product_images/brown_shoes.jpg'),
(4, 1004, 2, 'black shoes', 'black leather shoes for men', '2399.00', 10, ' product_images/black_shoes.jpg'),
(5, 10001, 4, 'earpods', 'earpods for iso and android', '699.00', 27, ' product_images/technology-3068617_640.jpg'),
(6, 2001, 4, 'hard drive', 'hard drive 1tb 7200 rpm', '2899.00', 99, ' product_images/hdd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_seller`
--

CREATE TABLE `tbl_user_seller` (
  `seller_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` int(12) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_seller`
--

INSERT INTO `tbl_user_seller` (`seller_id`, `fname`, `lname`, `address`, `birthday`, `email`, `phone`, `username`, `password`, `created_at`) VALUES
(2, 'ban', 'ban', 'wadaw', '2021-01-16', 'ban@g.com', 1231312123, 'ban', '202cb962ac59075b964b07152d234b70', '2021-01-20 23:34:59'),
(3, 'max', 'pain', 'new york ', '2001-11-01', 'max@pain.com', 123123123, 'max', '202cb962ac59075b964b07152d234b70', '2021-01-22 22:06:58'),
(4, 'rocky', 'rock', 'banketa', '2021-01-07', 'rocky@g.com', 123123, 'rocky', '202cb962ac59075b964b07152d234b70', '2021-01-23 01:01:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_seller`
--
ALTER TABLE `tbl_user_seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user_seller`
--
ALTER TABLE `tbl_user_seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
