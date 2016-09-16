-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Sep 16, 2016 at 05:53 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bmplistdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bmp_dealers`
--

CREATE TABLE `bmp_dealers` (
`id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` int(30) NOT NULL,
  `address` longtext NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` text NOT NULL,
  `userid` int(11) NOT NULL,
  `recommended_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bmp_products`
--

CREATE TABLE `bmp_products` (
`id` int(11) NOT NULL,
  `catid` int(111) NOT NULL,
  `subcatid` int(111) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `overview` longtext NOT NULL,
  `date` date NOT NULL,
  `sku` varchar(255) NOT NULL,
  `market` varchar(100) NOT NULL,
  `add_info` longtext NOT NULL,
  `img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bmp_users`
--

CREATE TABLE `bmp_users` (
`id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwdd` varchar(40) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `address` longtext NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `status` int(1) NOT NULL,
  `ipaddress` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `date` date NOT NULL,
  `lastlogin` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bmp_users`
--

INSERT INTO `bmp_users` (`id`, `fname`, `lname`, `email`, `pwdd`, `gender`, `address`, `state`, `country`, `status`, `ipaddress`, `phone`, `date`, `lastlogin`) VALUES
(1, 'Olufemi', 'Oluoje', 'kobomarun@gmail.com', 'a01610228fe998f515a72dd730294d87', '', '', '', '', 0, '::1', 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `bmp_wishlists`
--

CREATE TABLE `bmp_wishlists` (
`id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
`id` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Bathrooms', 'Bathrooms products category'),
(2, 'Electricals', 'Products category'),
(3, 'Paints', 'Products category'),
(6, 'Bedroom', 'Product Category'),
(7, 'Tiles', ''),
(8, 'Flooring', ''),
(9, 'Kitchen Utensils', 'Kitchen Category'),
(10, 'Plubering', 'PRoduct category'),
(12, 'Doors', ''),
(13, 'Sands', ''),
(14, 'Roofing', ''),
(15, 'Planks', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
`id` int(11) NOT NULL,
  `catid` int(111) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmp_dealers`
--
ALTER TABLE `bmp_dealers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmp_products`
--
ALTER TABLE `bmp_products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmp_users`
--
ALTER TABLE `bmp_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmp_wishlists`
--
ALTER TABLE `bmp_wishlists`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bmp_dealers`
--
ALTER TABLE `bmp_dealers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bmp_products`
--
ALTER TABLE `bmp_products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bmp_users`
--
ALTER TABLE `bmp_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bmp_wishlists`
--
ALTER TABLE `bmp_wishlists`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;