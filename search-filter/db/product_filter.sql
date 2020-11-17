-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 30, 2019 at 07:19 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_filter`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(20) NOT NULL,
  `product_name` varchar(120) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_quantity` mediumint(5) NOT NULL,
  `stock_avail` enum('0','1') NOT NULL COMMENT '0-active,1-inactive'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_brand`, `product_price`, `product_color`, `gender`, `product_image`, `product_quantity`, `stock_avail`) VALUES
(1, 'Women\'s Casual Short Sleeve Dresses', 'Lark & Ro', '44.00', 'White', 'Female', 'product-1.jpg', 50, '1'),
(2, 'Men\'s Short-Sleeve Indigo Round-Neck Pocket T-Shirt', 'Polo Ralph Lauren', '18.00', 'Green', 'Male', 'product-2.jpg', 50, '1'),
(3, 'Fantastic Zone Women\'s Casual Summer Dresses', 'Eliacher', '90.00', 'Purple', 'Female', 'product-3.jpg', 50, '1'),
(4, 'Men\'s \"The Perfect V-Neck T-Shirt\" Short-Sleeve ', 'Tommy Hilfiger', '29.00', 'Brown', 'Male', 'product-4.jpg', 50, '1'),
(5, 'Women\'s Short Sleeve Shirts Loose Casual', 'Urban CoCo', '19.00', 'White', 'Female', 'product-5.jpg', 50, '1'),
(6, ' 1 Button Center Vent Wool Blend Blazer Jacket', 'Tommy Hilfiger', '190.00', 'Brown', 'Male', 'product-6.jpg', 50, '1'),
(7, 'Bell Sleeve Shirt Tie Knot Casual Blouses Tops', 'oxiuly', '62.00', 'Blue', 'Female', 'product-7.jpg', 50, '1'),
(8, 'Black Men\'s Assorted Crew T-Shirt', 'Lee', '29.00', 'Black', 'Male', 'product-8.jpg', 50, '1'),
(9, 'Womens Waffle Knit Tunic Blouse Tie Knot Short', 'Lark & Ro', '21.00', 'Black', 'Female', 'product-9.jpg', 50, '1'),
(10, 'Jeans Distressed Slim Fit Ripped Jeans Comfy Stretch ', 'Urban CoCo', '29.00', 'Blue', 'Female', 'product-10.jpg', 50, '1'),
(11, 'Men\'s 2 Button Slim Fit Suit with Hemmed Pant', 'Lee', '126.00', 'Brown', 'Male', 'product-11.jpg', 50, '1'),
(12, 'Pappagallo Women\'s The Carrie Dress\r\n', 'Milumia', '64.00', 'Black', 'Female', 'product-12.jpg', 50, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
