-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 02:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoaib`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT 'not null',
  `complaint` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `name`, `email`, `complaint`, `date_created`) VALUES
(1, 'walid', 'wshebl9@gmail.com', 'ghh', '2023-05-10 12:43:37'),
(2, 'walid', 'wshebl9@gmail.com', 'hfhfb  v', '2023-05-10 13:07:30'),
(8, 'walid', 'wshebl9@gmail.com', 'قباغلقفا', '2023-05-15 09:06:04'),
(9, 'walid', 'wshebl9@gmail.com', 'uyiuouuiuyi', '2023-05-15 09:25:56'),
(10, 'وسام سالم ', 'wesam1@gmail.com', '......................................', '2023-05-16 17:06:41'),
(11, 'ندا رفيق ', 'nada9@gmail.com', '/////////////////////////', '2023-05-16 17:08:53'),
(12, '', '', '', '2023-05-20 12:26:39'),
(13, 'walid', 'wshebl9@gmail.com', 'يوجد خطا في عملية الشراء ', '2023-05-24 13:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `address` varchar(55) DEFAULT NULL,
  `phone` float DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `phone`, `email`, `date_added`) VALUES
(4, 'عبد المنعم شعيب ', 'الدلنجات بحيره', 1020910000, 'abdo9@gmail.com', '2023-05-15'),
(5, 'عبد المنعم شعيب ', 'الدلنجات بحيره', 1020910000, 'abdo9@gmail.com', '2023-05-15'),
(12, 'walid', 'المنوفية', 1020910000, 'wshebl9@gmail.com', '2023-05-15'),
(13, 'walid', 'المنوفية', 1020910000, 'wshebl9@gmail.com', '2023-05-15'),
(32, 'walid', 'المنوفية', 1020910000, 'wshebl9@gmail.com', '2023-05-15'),
(33, 'walid', 'المنوفية', 1020910000, 'wshebl9@gmail.com', '2023-05-15'),
(34, 'walid', 'المنوفية', 1020910000, 'wshebl9@gmail.com', '2023-05-15'),
(35, 'walid', 'المنوفية', 1020910000, 'wshebl9@gmail.com', '2023-05-15'),
(36, 'mohamed', 'القاهره مدينه نصر', 1234660000, 'mohamed33@gmail.com', '2023-05-15'),
(37, 'walid', 'المنوفية', 1020910000, 'wshebl9@gmail.com', '2023-05-15'),
(38, 'walid', 'المنوفية', 1020910000, 'wshebl9@gmail.com', '2023-05-15'),
(40, 'ahmed', 'القاهرة', 2152460000, 'wshebl9@gmail.com', '2023-05-15'),
(41, 'walid', 'المنوفية', 1020910000, 'wshebl9@gmail.com', '2023-05-15'),
(42, 'walid', 'المنوفية54', 1020910000, 'wshebl9@gmail.com', '2023-05-16'),
(43, 'محمد عادل خلف', 'المنيا ', 1020910000, 'moadel@gmail.com', '2023-05-16'),
(44, 'walid', 'المنوفية', 1020910000, 'wshebl9@gmail.com', '2023-05-17'),
(45, 'WALID SHEBL', 'ALMONOFA', 1020910000, 'wshebl9@gmail.com', '2023-05-17'),
(46, 'WALID SHEBL', 'ALMONOFA', 1020910000, 'wshebl9@gmail.com', '2023-05-17'),
(47, 'امير محمد المسارع', 'دراجيل ', 1020310000, 'wshebl9@gmail.com', '2023-05-17'),
(48, 'walid', 'المنوفية', 1020910000, 'wshebl9@gmail.com', '2023-05-18'),
(49, 'walid', 'المنوفية', 1020910000, 'wshebl9@gmail.com', '2023-05-20'),
(50, 'walid', 'المنوفية', 1020910000, 'wshebl9@gmail.com', '2023-05-20'),
(51, 'WALID SHEBL', 'ALMONOFA', 1020910000, 'wshebl9@gmail.com', '2023-05-20'),
(52, 'WALID SHEBL', 'ALMONOFA', 1020910000, 'wshebl9@gmail.com', '2023-05-22'),
(53, 'امير محمد المسارع', 'ALMONOFA', 1020910000, 'wshebl9@gmail.com', '2023-05-22'),
(54, 'امير محمد المسارع', 'ALMONOFA', 1020910000, 'walid_shebl@yahoo.com', '2023-05-22'),
(55, 'karem', 'albhera', 1020910000, 'wshebl9@gmail.com', '2023-05-22'),
(56, 'WALID SHEBL', 'ALMONOFA', 1020910000, 'walid_shebl@yahoo.com', '2023-05-24'),
(57, 'walid', 'المنوفية', 1020910000, 'wshebl9@gmail.com', '2023-05-24'),
(58, 'ahmed', 'القاهرة', 2152460000, 'wshebl9@gmail.com', '2023-05-24'),
(59, 'WALID SHEBL', 'ALMONOFA', 1020910000, 'wshebl9@gmail.com', '2023-05-31'),
(60, 'WALID SHEBL', 'ALMONOFA', 1020910000, 'wshebl9@gmail.com', '2023-06-01'),
(61, 'WALID SHEBL', '&#1583;&#1585;&#1575;&#1580;&#1610;&#1604; ', 1020310000, 'wshebl9@gmail.com', '2023-06-01'),
(62, 'WALID SHEBL', '&#1583;&#1585;&#1575;&#1580;&#1610;&#1604; ', 1020310000, 'wshebl9@gmail.com', '2023-06-01'),
(63, 'walid', '&#1575;&#1604;&#1605;&#1606;&#1608;&#1601;&#1610;&#1577', 102091000, 'wshebl9@gmail.com', '2023-06-01'),
(64, 'walid', '&#1575;&#1604;&#1605;&#1606;&#1608;&#1601;&#1610;&#1577', 102091000, 'wshebl9@gmail.com', '2023-06-01'),
(65, 'karem', 'albhera', 1020310000, 'wshebl9@gmail.com', '2023-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `image` blob DEFAULT NULL,
  `product_price` decimal(10,2) DEFAULT NULL,
  `available_quantity` int(11) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `image`, `product_price`, `available_quantity`, `date_added`) VALUES
(88, 'ارز بسمتي', 0x52494345204241532e6a7067, '23000.00', 14, '2023-05-14 20:37:17'),
(93, 'سمسم  اصفر', 0x736d736d2e6a7067, '23000.00', 21, '2023-05-22 18:30:14'),
(94, 'ارز مصري', 0xe28094506e6774726565e2809472617720756e636f6f6b656420726963652070686f746f5f353731383432392e706e67, '30000.00', 21, '2023-05-23 13:13:46'),
(95, 'عدس', 0x4c656e74696c732e706e67, '32000.00', 12, '2023-05-24 13:08:52');

-- --------------------------------------------------------

--
-- Table structure for table `purchasess`
--

CREATE TABLE `purchasess` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `product_id` varchar(50) DEFAULT NULL,
  `quantity` int(6) UNSIGNED NOT NULL,
  `payment` varchar(20) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchasess`
--

INSERT INTO `purchasess` (`id`, `name`, `address`, `phone`, `product_id`, `quantity`, `payment`, `customer_id`, `date`) VALUES
(25, 'walid', 'المنوفية', '01020905689', '12', 23, 'card', NULL, NULL),
(26, 'علي', 'الجيزة', '01020356478', '98', 1, 'cash', NULL, NULL),
(27, 'walid', 'المنوفية', '01020905689', '89', 2, 'cash', NULL, NULL),
(28, 'walid', 'المنوفية', '01020905689', '89', 3, 'card', NULL, '2023-05-24 23:01:57'),
(29, 'walid', 'المنوفية', '01020905689', '879', 8, 'cash', NULL, NULL),
(30, 'عبد المنعم شعيب ', 'الدلنجات بحيرة ', '01020508947', '74', 1, 'card', NULL, NULL),
(31, 'WALID SHEBL', '21eded', '1020905689', '21', 2, 'cash', NULL, NULL),
(32, 'walid', 'المنوفية', '01020905689', '98', 1, 'cash', NULL, NULL),
(33, 'ahmed', 'البحيرة ابو صماده', '01020905689', '90', 2, 'cash', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'walid7', 'walid01100 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchasess`
--
ALTER TABLE `purchasess`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customer_id` (`customer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `purchasess`
--
ALTER TABLE `purchasess`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `purchasess`
--
ALTER TABLE `purchasess`
  ADD CONSTRAINT `fk_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
