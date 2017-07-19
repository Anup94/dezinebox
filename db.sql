-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2017 at 06:09 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dezine-box`
--
CREATE DATABASE IF NOT EXISTS `dezine-box` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dezine-box`;

-- --------------------------------------------------------

--
-- Table structure for table `architecture_enquiries`
--

DROP TABLE IF EXISTS `architecture_enquiries`;
CREATE TABLE `architecture_enquiries` (
  `enqId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `selectedArea` varchar(255) NOT NULL,
  `projectType` varchar(255) NOT NULL,
  `plotArea` float NOT NULL,
  `siteLocation` varchar(255) NOT NULL,

  `fsiAvailable` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `constTypeId` int(11) NOT NULL,
  `categoryOption` varchar(255) NOT NULL,

  `details` text NOT NULL,
  `boxTypeId` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `entryTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `box_types`
--

DROP TABLE IF EXISTS `box_types`;
CREATE TABLE `box_types` (
  `boxTypeId` int(11) NOT NULL,
  `boxType` varchar(255) NOT NULL,
  `baseFare` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `box_types`
--

INSERT INTO `box_types` (`boxTypeId`, `boxType`, `baseFare`) VALUES
(1, 'Aqua', 3000.00),
(2, 'Ember', 5000.00),
(3, 'Terra', 5000.00),
(4, 'Zephyr', 7000.00),
(5, 'Ether', 2000.00);

-- --------------------------------------------------------

--
-- Table structure for table `construction_types`
--

DROP TABLE IF EXISTS `construction_types`;
CREATE TABLE `construction_types` (
  `constTypeId` int(11) NOT NULL,
  `constType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `construction_types`
--

INSERT INTO `construction_types` (`constTypeId`, `constType`) VALUES
(1, 'Residential'),
(2, 'Commercial'),
(3, 'Hospitality'),
(4, 'Institutional');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
CREATE TABLE `coupons` (
  `couponId` int(11) NOT NULL,
  `couponCode` varchar(255) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `usageTimes` int(11) NOT NULL DEFAULT '1',
  `enabled` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`couponId`, `couponCode`, `discount`, `usageTimes`, `enabled`) VALUES
(1, 'asdf', '15.00', 1, 1),
(4, 'asdfg', '3.00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `designer_experience`
--

DROP TABLE IF EXISTS `designer_experience`;
CREATE TABLE `designer_experience` (
  `expId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `projectName` varchar(255) NOT NULL,
  `projectArea` varchar(255) NOT NULL,
  `projectHighLight` varchar(255) NOT NULL,
  `projectDesc` varchar(255) NOT NULL,
  `projectPortFolio` varchar(255) NOT NULL,
  `projectLinkedin` varchar(255) NOT NULL,
  `entryTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `design_categories`
--

DROP TABLE IF EXISTS `design_categories`;
CREATE TABLE `design_categories` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `design_categories`
--

INSERT INTO `design_categories` (`categoryId`, `categoryName`) VALUES
(1, 'Architecture'),
(2, 'Interior');

-- --------------------------------------------------------

--
-- Table structure for table `design_partners`
--

DROP TABLE IF EXISTS `design_partners`;
CREATE TABLE `design_partners` (
  `dPartnerId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `profession` text NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `companyAddress` text,
  `website` varchar(255) DEFAULT NULL,
  `hearFrom` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `driveLink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `interior_enquiries`
--

DROP TABLE IF EXISTS `interior_enquiries`;
CREATE TABLE `interior_enquiries` (
  `enqId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `selectedArea` varchar(255) NOT NULL,
  `moreDetails` varchar(255) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `siteLocation` varchar(255) NOT NULL,
  `driveLink` varchar(255) NOT NULL,
  `specificDetails` text NOT NULL,
  `constTypeId` int(11) NOT NULL,
  `categoryOption` varchar(255) NOT NULL,
  `subCategoryOption` varchar(255) NOT NULL,
  `boxTypeId` int(11) NOT NULL,
  `details` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `entryTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

DROP TABLE IF EXISTS `pricing`;
CREATE TABLE `pricing` (
  `pricingId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `constTypeId` int(11) NOT NULL,
  `categoryOption` varchar(255) NOT NULL,
  `multiplier` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`pricingId`, `categoryId`, `constTypeId`, `categoryOption`, `multiplier`) VALUES
(1, 2, 1, 'Living', '1.00'),
(2, 2, 1, 'Kitchen', '1.00'),
(3, 2, 1, 'Dinning', '1.00'),
(4, 2, 1, 'Master Bedroom', '1.00'),
(5, 2, 1, 'Kid Bedroom / Study', '1.00'),
(6, 2, 1, 'Guest Bedroom', '1.00'),
(7, 2, 1, 'Puja Room', '1.00'),
(8, 2, 1, 'Entertainment Room', '1.00'),
(9, 2, 2, '0-250', '1.00'),
(10, 2, 2, '250-500', '1.50'),
(11, 2, 2, '500-1000', '2.00'),
(12, 2, 2, '1000-1500', '2.50'),
(13, 2, 2, '1500-2000', '3.00'),
(14, 2, 2, '2000+', NULL),
(15, 1, 1, '0-1000', '1.00'),
(16, 1, 1, '1000-2000', '2.00'),
(17, 1, 1, '2000-3000', '3.00'),
(18, 1, 1, '3000-4000', '4.00'),
(19, 1, 1, '4000-5000', '5.00'),
(20, 1, 1, '5000+', NULL),
(21, 1, 2, '0-1000', '1.00'),
(22, 1, 2, '1000-2000', '2.00'),
(23, 1, 2, '2000-3000', '3.00'),
(24, 1, 2, '3000-4000', '4.00'),
(25, 1, 2, '4000-5000', '5.00'),
(26, 1, 2, '5000+', NULL),
(27, 1, 3, '0-1000', '1.00'),
(28, 1, 3, '1000-2000', '2.00'),
(29, 1, 3, '2000-3000', '3.00'),
(30, 1, 3, '3000-4000', '4.00'),
(31, 1, 3, '4000-5000', '5.00'),
(32, 1, 3, '5000+', NULL),
(33, 1, 4, '0-1000', '1.00'),
(34, 1, 4, '1000-2000', '2.00'),
(35, 1, 4, '2000-3000', '3.00'),
(36, 1, 4, '3000-4000', '4.00'),
(37, 1, 4, '4000-5000', '5.00'),
(38, 1, 4, '5000+', NULL),
(39, 2, 3, '0-250', '1.00'),
(43, 2, 3, '250-500', '1.50'),
(44, 2, 3, '500-1000', '2.00'),
(45, 2, 3, '1000-1500', '2.50'),
(46, 2, 3, '1500-2000', '3.00'),
(47, 2, 3, '2000+', NULL),
(48, 2, 4, '0-250', '1.00'),
(49, 2, 4, '250-500', '1.50'),
(50, 2, 4, '500-1000', '2.00'),
(51, 2, 4, '1000-1500', '2.50'),
(52, 2, 4, '1500-2000', '3.00'),
(53, 2, 4, '2000+', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_partners`
--

DROP TABLE IF EXISTS `product_partners`;
CREATE TABLE `product_partners` (
  `prodPartnerId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `entName` varchar(255) NOT NULL,
  `productType` text NOT NULL,
  `experience` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `website` varchar(255) NOT NULL,
  `catalog` varchar(255) NOT NULL,
  `googleDrive` text NOT NULL,
  `linkedInProfile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(15) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `block` tinyint(1) NOT NULL DEFAULT '0',
  `registeredOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastResetTime` timestamp NULL DEFAULT NULL,
  `resetCount` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users_type_map`
--

DROP TABLE IF EXISTS `users_type_map`;
CREATE TABLE `users_type_map` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userTypeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

DROP TABLE IF EXISTS `user_types`;
CREATE TABLE `user_types` (
  `userTypeId` int(11) NOT NULL,
  `userType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`userTypeId`, `userType`) VALUES
(1, 'admin'),
(2, 'customers'),
(3, 'Design Partners'),
(4, 'Product Partners');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `architecture_enquiries`
--
ALTER TABLE `architecture_enquiries`
  ADD PRIMARY KEY (`enqId`);

--
-- Indexes for table `box_types`
--
ALTER TABLE `box_types`
  ADD PRIMARY KEY (`boxTypeId`);

--
-- Indexes for table `construction_types`
--
ALTER TABLE `construction_types`
  ADD PRIMARY KEY (`constTypeId`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`couponId`),
  ADD UNIQUE KEY `couponCode` (`couponCode`);

--
-- Indexes for table `designer_experience`
--
ALTER TABLE `designer_experience`
  ADD PRIMARY KEY (`expId`);

--
-- Indexes for table `design_categories`
--
ALTER TABLE `design_categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `design_partners`
--
ALTER TABLE `design_partners`
  ADD PRIMARY KEY (`dPartnerId`);

--
-- Indexes for table `interior_enquiries`
--
ALTER TABLE `interior_enquiries`
  ADD PRIMARY KEY (`enqId`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`pricingId`),
  ADD UNIQUE KEY `category_construction_option` (`categoryId`,`constTypeId`,`categoryOption`);

--
-- Indexes for table `product_partners`
--
ALTER TABLE `product_partners`
  ADD PRIMARY KEY (`prodPartnerId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `mobile` (`mobile`) USING BTREE,
  ADD KEY `username` (`userId`);

--
-- Indexes for table `users_type_map`
--
ALTER TABLE `users_type_map`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`userTypeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `architecture_enquiries`
--
ALTER TABLE `architecture_enquiries`
  MODIFY `enqId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `box_types`
--
ALTER TABLE `box_types`
  MODIFY `boxTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `construction_types`
--
ALTER TABLE `construction_types`
  MODIFY `constTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `couponId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `designer_experience`
--
ALTER TABLE `designer_experience`
  MODIFY `expId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `design_categories`
--
ALTER TABLE `design_categories`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `design_partners`
--
ALTER TABLE `design_partners`
  MODIFY `dPartnerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `interior_enquiries`
--
ALTER TABLE `interior_enquiries`
  MODIFY `enqId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `pricingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `product_partners`
--
ALTER TABLE `product_partners`
  MODIFY `prodPartnerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `users_type_map`
--
ALTER TABLE `users_type_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `userTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `users` (`userId`, `name`, `mobile`, `username`, `password`, `email`, `block`, `registeredOn`, `lastResetTime`, `resetCount`) VALUES
(1, 'Admin User', NULL, 'admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', NULL, 0, '2017-04-22 18:19:37', NULL, 0),
(26, 'Saravanan K', 9738683446, 'sarav', '*1F8ADF9BFA00A11EC2B4A4C528FC99141ABBEC11', 'saravanan41191@gmail.com', 0, '2017-05-23 20:20:08', NULL, 0);
INSERT INTO `users_type_map` (`id`, `userId`, `userTypeId`) VALUES
(1, 1, 1),
(2, 26, 2);