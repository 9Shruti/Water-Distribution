-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 21, 2024 at 02:14 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `water_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

DROP TABLE IF EXISTS `admin_tb`;
CREATE TABLE IF NOT EXISTS `admin_tb` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_username` varchar(50) NOT NULL,
  `a_password` varchar(20) NOT NULL,
  `a_image` varchar(100) NOT NULL,
  `a_lastseen` datetime NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`a_id`, `a_username`, `a_password`, `a_image`, `a_lastseen`) VALUES
(1, 'admin', '12345', 'me.jpg', '2024-02-21 18:06:21'),
(2, 'shruti', '12345', 'gl.jpg', '2024-01-18 10:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `area_tb`
--

DROP TABLE IF EXISTS `area_tb`;
CREATE TABLE IF NOT EXISTS `area_tb` (
  `ar_id` int(11) NOT NULL AUTO_INCREMENT,
  `ar_name` varchar(50) NOT NULL,
  `ar_pincode` int(11) NOT NULL,
  `ar_status` enum('Active','Deactive') NOT NULL,
  `ar_cdate` datetime NOT NULL,
  `ar_udate` datetime NOT NULL,
  PRIMARY KEY (`ar_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area_tb`
--

INSERT INTO `area_tb` (`ar_id`, `ar_name`, `ar_pincode`, `ar_status`, `ar_cdate`, `ar_udate`) VALUES
(1, 'Krishnanagar', 382345, 'Active', '2024-02-08 15:40:23', '2024-02-08 15:40:23'),
(2, 'Vastral', 382411, 'Active', '2024-02-08 15:40:50', '2024-02-08 15:40:50'),
(3, 'Bapunagar', 380024, 'Active', '2024-02-08 15:41:10', '2024-02-08 15:41:10'),
(4, 'Narol', 382405, 'Active', '2024-02-08 15:41:24', '2024-02-08 15:41:24'),
(5, 'Vatva', 382440, 'Active', '2024-02-08 15:41:36', '2024-02-08 15:41:36'),
(6, 'Nikol', 382350, 'Active', '2024-02-08 15:42:23', '2024-02-08 15:42:23'),
(7, 'Naroda', 382330, 'Active', '2024-02-08 15:42:49', '2024-02-08 15:42:49'),
(8, 'Kalupur', 380001, 'Active', '2024-02-08 15:43:30', '2024-02-08 15:43:30'),
(9, 'Saraspur', 380018, 'Active', '2024-02-08 15:43:57', '2024-02-08 15:43:57'),
(10, 'Sahibaug', 380004, 'Active', '2024-02-08 15:45:30', '2024-02-08 15:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `cart_tb`
--

DROP TABLE IF EXISTS `cart_tb`;
CREATE TABLE IF NOT EXISTS `cart_tb` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `o_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_price` int(11) NOT NULL,
  `cart_quantity` int(11) NOT NULL,
  `cart_type` enum('Day','Alternate','Weekly') NOT NULL,
  `cart_totalprice` int(11) NOT NULL,
  `cart_status` enum('Active','Deactive') NOT NULL,
  `cart_cdate` datetime NOT NULL,
  `cart_udate` datetime NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_tb`
--

INSERT INTO `cart_tb` (`cart_id`, `o_id`, `u_id`, `p_id`, `p_price`, `cart_quantity`, `cart_type`, `cart_totalprice`, `cart_status`, `cart_cdate`, `cart_udate`) VALUES
(1, 1, 2, 1, 9, 30, 'Day', 270, 'Active', '2024-02-15 16:20:16', '2024-02-15 16:20:16'),
(2, 2, 2, 13, 49, 15, 'Alternate', 735, 'Active', '2024-02-15 16:20:53', '2024-02-15 16:20:53'),
(3, 1, 2, 3, 14, 15, 'Alternate', 210, 'Active', '2024-02-15 16:21:24', '2024-02-15 16:21:24'),
(4, 2, 2, 16, 200, 7, 'Weekly', 1400, 'Active', '2024-02-15 16:27:57', '2024-02-15 16:27:57'),
(5, 3, 2, 1, 9, 30, 'Day', 270, 'Active', '2024-02-21 14:14:05', '2024-02-21 14:14:05'),
(6, 4, 2, 1, 9, 15, 'Alternate', 135, 'Active', '2024-02-21 16:22:20', '2024-02-21 16:22:20'),
(7, 5, 2, 1, 9, 30, 'Day', 270, 'Active', '2024-02-21 16:42:02', '2024-02-21 16:42:02'),
(8, 6, 2, 1, 9, 30, 'Day', 270, 'Active', '2024-02-21 16:56:36', '2024-02-21 16:56:36'),
(9, 7, 2, 16, 200, 15, 'Alternate', 3000, 'Active', '2024-02-21 17:00:55', '2024-02-21 17:00:55'),
(10, 8, 2, 16, 200, 15, 'Alternate', 3000, 'Active', '2024-02-21 17:02:17', '2024-02-21 17:02:17'),
(11, 8, 2, 11, 19, 7, 'Weekly', 133, 'Active', '2024-02-21 17:02:44', '2024-02-21 17:02:44'),
(14, 9, 4, 1, 9, 30, 'Day', 270, 'Active', '2024-02-21 17:36:24', '2024-02-21 17:36:24'),
(13, 10, 4, 27, 89, 7, 'Weekly', 623, 'Active', '2024-02-21 17:31:49', '2024-02-21 18:06:07'),
(15, 12, 4, 1, 9, 30, 'Day', 270, 'Active', '2024-02-21 18:15:28', '2024-02-21 18:15:28'),
(16, 12, 4, 5, 20, 30, 'Day', 600, 'Active', '2024-02-21 18:15:42', '2024-02-21 18:15:42'),
(17, 13, 2, 1, 9, 15, 'Alternate', 135, 'Active', '2024-02-21 19:00:46', '2024-02-21 19:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `category_tb`
--

DROP TABLE IF EXISTS `category_tb`;
CREATE TABLE IF NOT EXISTS `category_tb` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  `cat_img` varchar(100) NOT NULL,
  `cat_status` enum('Active','Deactive') NOT NULL,
  `cat_cdate` datetime NOT NULL,
  `cat_udate` datetime NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_tb`
--

INSERT INTO `category_tb` (`cat_id`, `cat_name`, `cat_img`, `cat_status`, `cat_cdate`, `cat_udate`) VALUES
(1, 'Small Bottle', 'mini.jpg', 'Active', '2024-02-08 15:46:37', '2024-02-08 15:46:37'),
(2, 'Big Bottle', 'bigbottle.jpg', 'Active', '2024-02-08 15:46:50', '2024-02-08 15:46:50'),
(3, 'Jug', 'bisjug.jpg', 'Active', '2024-02-08 15:51:02', '2024-02-08 15:51:02'),
(4, 'Dispenser', 'dispenser.jpg', 'Active', '2024-02-08 15:51:44', '2024-02-08 15:51:44'),
(5, 'Mini Bottle', 'bsmall.jpg', 'Active', '2024-02-08 15:52:15', '2024-02-08 15:52:15');

-- --------------------------------------------------------

--
-- Table structure for table `company_tb`
--

DROP TABLE IF EXISTS `company_tb`;
CREATE TABLE IF NOT EXISTS `company_tb` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `comp_name` varchar(50) NOT NULL,
  `comp_address` text NOT NULL,
  `comp_contact` bigint(20) NOT NULL,
  `comp_ownername` varchar(50) NOT NULL,
  `comp_image` varchar(100) NOT NULL,
  `comp_certificate` varchar(100) NOT NULL,
  `comp_password` varchar(20) NOT NULL,
  `comp_status` enum('Active','Deactive') NOT NULL,
  `comp_cdate` datetime NOT NULL,
  `comp_udate` datetime NOT NULL,
  PRIMARY KEY (`comp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_tb`
--

INSERT INTO `company_tb` (`comp_id`, `comp_name`, `comp_address`, `comp_contact`, `comp_ownername`, `comp_image`, `comp_certificate`, `comp_password`, `comp_status`, `comp_cdate`, `comp_udate`) VALUES
(1, 'Bisleri International Private Limited', 'B/43 Pariseema Complex, NR Body Line Cross Road, CG Road, Ahmedabad, Gujarat', 9773234157, 'Joshi Riddhi', 'Riddhi.jpeg', 'bis-cer.jpg', '12345', 'Active', '2024-02-08 16:18:03', '2024-02-21 17:55:16'),
(2, 'Aqua Fresh Water', 'Nr Brahmani Hall, Kothariya Road, Kothariya Road Chowkdi, Rajkot, Gujarat 360002', 9510775840, 'Kadiya Shruti', 'shruti.jpeg', 'bis-cer.jpg', '951077', 'Active', '2024-02-08 16:25:55', '2024-02-21 18:02:39'),
(3, 'Aava Natural Mineral Water', 'Sheelpe, 2 China Garden, Opp Calcutta Motors, Netaji Marg, Near Mithakali 6 Roads, Ellis Bridge, Ahmedabad, Gujarat', 9825907377, 'Polara Jaynisha', 'jenny.jpeg', 'bis-cer.jpg', '982590', 'Active', '2024-02-08 16:28:46', '2024-02-09 16:51:11');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tb`
--

DROP TABLE IF EXISTS `feedback_tb`;
CREATE TABLE IF NOT EXISTS `feedback_tb` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `f_contact` bigint(20) DEFAULT NULL,
  `f_message` text NOT NULL,
  `f_status` enum('Show','Hide') NOT NULL,
  `f_cdate` datetime NOT NULL,
  `f_udate` datetime NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_tb`
--

INSERT INTO `feedback_tb` (`f_id`, `u_id`, `f_name`, `f_contact`, `f_message`, `f_status`, `f_cdate`, `f_udate`) VALUES
(1, 0, 'Shruti', 9510775840, 'Fast delivery. Bottles could be clean looking for domestic usage.', 'Show', '2024-02-08 15:59:53', '2024-02-08 16:00:15'),
(2, 0, 'Jaynisha', 9825907377, 'wonderful product, early delivery could be worked out.', 'Show', '2024-02-08 16:01:17', '2024-02-08 16:08:31'),
(3, 0, 'Riddhi', 9773234157, 'Awesome service, please increase the awareness of the program, thank you.', 'Show', '2024-02-08 16:07:54', '2024-02-08 16:08:33'),
(4, 0, 'Minal', 8733830514, 'This water bottle is great to stay hydrated and has helped me with weight loss.', 'Show', '2024-02-10 10:06:30', '2024-02-10 10:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `order_tb`
--

DROP TABLE IF EXISTS `order_tb`;
CREATE TABLE IF NOT EXISTS `order_tb` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `ar_id` int(11) DEFAULT NULL,
  `comp_id` int(11) NOT NULL,
  `ar_pincode` int(11) DEFAULT NULL,
  `o_totalprice` int(11) DEFAULT NULL,
  `o_shippingadd` text,
  `o_status` enum('Pending','Confirm','Complete','Cancel','Cart') NOT NULL,
  `o_cdate` datetime NOT NULL,
  `o_udate` datetime NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_tb`
--

INSERT INTO `order_tb` (`o_id`, `u_id`, `ar_id`, `comp_id`, `ar_pincode`, `o_totalprice`, `o_shippingadd`, `o_status`, `o_cdate`, `o_udate`) VALUES
(1, 2, 9, 1, 380018, 480, 'Ahmedabad', 'Cancel', '2024-02-15 16:20:16', '2024-02-15 16:28:14'),
(2, 2, 9, 3, 380018, 2135, 'Ahmedabad', 'Pending', '2024-02-15 16:20:53', '2024-02-15 16:28:14'),
(3, 2, 10, 1, 380004, 270, 'asdf', 'Pending', '2024-02-21 14:14:05', '2024-02-21 16:21:51'),
(4, 2, 9, 1, 380018, 135, 'Ahmedabad', 'Pending', '2024-02-21 16:22:20', '2024-02-21 16:26:02'),
(5, 2, 10, 1, 380004, 270, 'asdas', 'Pending', '2024-02-21 16:42:02', '2024-02-21 16:45:31'),
(6, 2, 7, 1, 382330, 270, 'Ahmedabad', 'Pending', '2024-02-21 16:56:36', '2024-02-21 16:57:58'),
(7, 2, 7, 3, 382330, 3000, 'gandhinagar', 'Pending', '2024-02-21 17:00:55', '2024-02-21 17:01:14'),
(8, 2, NULL, 3, NULL, NULL, NULL, 'Cart', '2024-02-21 17:02:17', '2024-02-21 17:02:17'),
(9, 4, 10, 1, 380004, 270, '302, 3rd Floor Gandhinagar', 'Confirm', '2024-02-21 17:31:14', '2024-02-21 17:49:41'),
(10, 4, 10, 2, 380004, 623, '302, 3rd Floor Gandhinagar', 'Confirm', '2024-02-21 17:31:49', '2024-02-21 17:56:24'),
(12, 4, 10, 1, 380004, 870, '302, Gandhinagar', 'Pending', '2024-02-21 18:15:28', '2024-02-21 18:15:56'),
(13, 2, NULL, 1, NULL, NULL, NULL, 'Cart', '2024-02-21 19:00:46', '2024-02-21 19:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `payment_tb`
--

DROP TABLE IF EXISTS `payment_tb`;
CREATE TABLE IF NOT EXISTS `payment_tb` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `o_id` int(11) NOT NULL,
  `pay_amount` int(11) NOT NULL,
  `pay_status` enum('Success','Failed') NOT NULL,
  `pay_cdate` datetime NOT NULL,
  `pay_groupcode` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pay_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_tb`
--

INSERT INTO `payment_tb` (`pay_id`, `o_id`, `pay_amount`, `pay_status`, `pay_cdate`, `pay_groupcode`) VALUES
(1, 1, 10000, 'Success', '2023-12-01 00:00:00', 0),
(2, 5, 15000, 'Success', '2023-12-01 00:00:00', 0),
(3, 3, 1200, 'Failed', '2023-12-01 00:00:00', 0),
(4, 4, 15000, 'Success', '2023-12-01 00:00:00', 0),
(6, 1, 480, 'Success', '2024-02-21 16:17:56', 1967),
(7, 2, 2135, 'Success', '2024-02-21 16:17:56', 1967),
(8, 3, 270, 'Failed', '2024-02-21 16:21:51', 5592),
(9, 4, 135, 'Failed', '2024-02-21 16:26:02', 7053),
(10, 5, 270, 'Failed', '2024-02-21 16:45:31', 2119),
(11, 6, 270, 'Success', '2024-02-21 17:00:15', 8697),
(12, 7, 3000, 'Success', '2024-02-21 17:01:33', 8430),
(13, 9, 270, 'Success', '2024-02-21 17:38:33', 7672),
(14, 10, 623, 'Success', '2024-02-21 17:38:33', 7672),
(15, 12, 870, 'Success', '2024-02-21 18:16:11', 3912);

-- --------------------------------------------------------

--
-- Table structure for table `product_tb`
--

DROP TABLE IF EXISTS `product_tb`;
CREATE TABLE IF NOT EXISTS `product_tb` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `p_image` varchar(100) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_details` text NOT NULL,
  `p_disclaimer` text NOT NULL,
  `p_status` enum('Active','Deactive') NOT NULL,
  `p_cdate` datetime NOT NULL,
  `p_udate` datetime NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tb`
--

INSERT INTO `product_tb` (`p_id`, `cat_id`, `p_name`, `comp_id`, `type_id`, `p_image`, `p_price`, `p_details`, `p_disclaimer`, `p_status`, `p_cdate`, `p_udate`) VALUES
(1, 5, 'Bisleri 300ml Water Bottle', 1, 1, 'bsmall.jpg', 9, 'Drinking 2-3 liters of water everyday has proven to help promote glowing skin since it keeps your kidneys gut and liver healthy boosts the collagen production of your skin and keeps it hydrated and moisturized. Drinking mineral water that is going to prove very beneficial for your skin in the long run. Adequate calcium found in mineral water helps to strengthen the bones and teeth.', 'Bisleri drinking water goes through a thorough process of mineralisation where essential minerals like potassium and magnesium are added in the water. This apart from adding taste also help to maintain the mineral balance of the consumer. Magnesium consists of 99% of our bodys mineral content. Actual product packaging and materials may contain more and different information than what is shown on our app or website. We recommend that you do not rely solely on the information presented here and that you always read labels warnings and directions before using or consuming a product.', 'Active', '2024-02-09 11:47:54', '2024-02-09 12:06:34'),
(2, 5, 'Bisleri 300ml Water Bottle', 1, 2, 'bsmall.jpg', 10, 'Drinking 2-3 liters of water everyday has proven to help promote glowing skin since it keeps your kidneys gut and liver healthy boosts the collagen production of your skin and keeps it hydrated and moisturized. Drinking mineral water that is going to prove very beneficial for your skin in the long run. Adequate calcium found in mineral water helps to strengthen the bones and teeth.', 'Bisleri drinking water goes through a thorough process of mineralisation where essential minerals like potassium and magnesium are added in the water. This apart from adding taste also help to maintain the mineral balance of the consumer. Magnesium consists of 99% of our bodys mineral content. Actual product packaging and materials may contain more and different information than what is shown on our app or website. We recommend that you do not rely solely on the information presented here and that you always read labels warnings and directions before using or consuming a product.', 'Active', '2024-02-09 12:10:34', '2024-02-09 12:11:30'),
(3, 1, 'Bisleri 250ml Water Bottle', 1, 3, 'mini.jpg', 14, 'Drinking 2-3 liters of water everyday has proven to help promote glowing skin since it keeps your kidneys gut and liver healthy boosts the collagen production of your skin and keeps it hydrated and moisturized. Drinking mineral water that is going to prove very beneficial for your skin in the long run. Adequate calcium found in mineral water helps to strengthen the bones and teeth.', 'Bisleri drinking water goes through a thorough process of mineralisation where essential minerals like potassium and magnesium are added in the water. This apart from adding taste also help to maintain the mineral balance of the consumer. Magnesium consists of 99% of our bodys mineral content. Actual product packaging and materials may contain more and different information than what is shown on our app or website. We recommend that you do not rely solely on the information presented here and that you always read labels warnings and directions before using or consuming a product.', 'Active', '2024-02-09 12:14:31', '2024-02-09 12:14:31'),
(4, 1, 'Bisleri 250ml Water Bottle', 1, 4, 'mini.jpg', 15, 'Drinking 2-3 liters of water everyday has proven to help promote glowing skin since it keeps your kidneys gut and liver healthy boosts the collagen production of your skin and keeps it hydrated and moisturized. Drinking mineral water that is going to prove very beneficial for your skin in the long run. Adequate calcium found in mineral water helps to strengthen the bones and teeth.', 'Bisleri drinking water goes through a thorough process of mineralisation where essential minerals like potassium and magnesium are added in the water. This apart from adding taste also help to maintain the mineral balance of the consumer. Magnesium consists of 99% of our bodys mineral content. Actual product packaging and materials may contain more and different information than what is shown on our app or website. We recommend that you do not rely solely on the information presented here and that you always read labels warnings and directions before using or consuming a product.', 'Active', '2024-02-09 12:16:42', '2024-02-09 12:16:42'),
(5, 2, 'Bisleri 1 Litre Water Bottle', 1, 1, 'bigbottle.jpg', 20, 'Drinking 2-3 liters of water everyday has proven to help promote glowing skin since it keeps your kidneys gut and liver healthy boosts the collagen production of your skin and keeps it hydrated and moisturized. Drinking mineral water that is going to prove very beneficial for your skin in the long run. Adequate calcium found in mineral water helps to strengthen the bones and teeth.', 'Bisleri drinking water goes through a thorough process of mineralisation where essential minerals like potassium and magnesium are added in the water. This apart from adding taste also help to maintain the mineral balance of the consumer. Magnesium consists of 99% of our bodys mineral content. Actual product packaging and materials may contain more and different information than what is shown on our app or website. We recommend that you do not rely solely on the information presented here and that you always read labels warnings and directions before using or consuming a product.', 'Active', '2024-02-09 12:20:35', '2024-02-09 12:20:35'),
(6, 2, 'Bisleri 1 Litre Water Bottle', 1, 2, 'bigbottle.jpg', 19, 'Drinking 2-3 liters of water everyday has proven to help promote glowing skin since it keeps your kidneys gut and liver healthy boosts the collagen production of your skin and keeps it hydrated and moisturized. Drinking mineral water that is going to prove very beneficial for your skin in the long run. Adequate calcium found in mineral water helps to strengthen the bones and teeth.', 'Bisleri drinking water goes through a thorough process of mineralisation where essential minerals like potassium and magnesium are added in the water. This apart from adding taste also help to maintain the mineral balance of the consumer. Magnesium consists of 99% of our bodys mineral content. Actual product packaging and materials may contain more and different information than what is shown on our app or website. We recommend that you do not rely solely on the information presented here and that you always read labels warnings and directions before using or consuming a product.', 'Active', '2024-02-09 12:22:41', '2024-02-09 12:22:41'),
(7, 3, 'Bisleri 10 Litre Water Can', 1, 3, 'bislarij.jpg', 90, 'Drinking 2-3 liters of water everyday has proven to help promote glowing skin since it keeps your kidneys gut and liver healthy boosts the collagen production of your skin and keeps it hydrated and moisturized. Drinking mineral water that is going to prove very beneficial for your skin in the long run. Adequate calcium found in mineral water helps to strengthen the bones and teeth.', 'Bisleri drinking water goes through a thorough process of mineralisation where essential minerals like potassium and magnesium are added in the water. This apart from adding taste also help to maintain the mineral balance of the consumer. Magnesium consists of 99% of our bodys mineral content. Actual product packaging and materials may contain more and different information than what is shown on our app or website. We recommend that you do not rely solely on the information presented here and that you always read labels warnings and directions before using or consuming a product.', 'Active', '2024-02-09 12:29:07', '2024-02-09 12:31:36'),
(8, 3, 'Bisleri 10 Litre Water Can', 1, 4, 'bislarij.jpg', 89, 'Drinking 2-3 liters of water everyday has proven to help promote glowing skin since it keeps your kidneys gut and liver healthy boosts the collagen production of your skin and keeps it hydrated and moisturized. Drinking mineral water that is going to prove very beneficial for your skin in the long run. Adequate calcium found in mineral water helps to strengthen the bones and teeth.', 'Bisleri drinking water goes through a thorough process of mineralisation where essential minerals like potassium and magnesium are added in the water. This apart from adding taste also help to maintain the mineral balance of the consumer. Magnesium consists of 99% of our bodys mineral content. Actual product packaging and materials may contain more and different information than what is shown on our app or website. We recommend that you do not rely solely on the information presented here and that you always read labels warnings and directions before using or consuming a product.', 'Active', '2024-02-09 12:31:13', '2024-02-09 12:31:13'),
(9, 4, 'Bisleri 20 Litre Water Can', 1, 1, 'dispenser.jpg', 159, 'Drinking 2-3 liters of water everyday has proven to help promote glowing skin since it keeps your kidneys gut and liver healthy boosts the collagen production of your skin and keeps it hydrated and moisturized. Drinking mineral water that is going to prove very beneficial for your skin in the long run. Adequate calcium found in mineral water helps to strengthen the bones and teeth.', 'Bisleri drinking water goes through a thorough process of mineralisation where essential minerals like potassium and magnesium are added in the water. This apart from adding taste also help to maintain the mineral balance of the consumer. Magnesium consists of 99% of our bodys mineral content. Actual product packaging and materials may contain more and different information than what is shown on our app or website. We recommend that you do not rely solely on the information presented here and that you always read labels warnings and directions before using or consuming a product.', 'Active', '2024-02-09 12:35:10', '2024-02-09 12:35:10'),
(10, 4, 'Bisleri 20 Litre Water Can', 1, 2, 'dispenser.jpg', 160, 'Drinking 2-3 liters of water everyday has proven to help promote glowing skin since it keeps your kidneys gut and liver healthy boosts the collagen production of your skin and keeps it hydrated and moisturized. Drinking mineral water that is going to prove very beneficial for your skin in the long run. Adequate calcium found in mineral water helps to strengthen the bones and teeth.', 'Bisleri drinking water goes through a thorough process of mineralisation where essential minerals like potassium and magnesium are added in the water. This apart from adding taste also help to maintain the mineral balance of the consumer. Magnesium consists of 99% of our bodys mineral content. Actual product packaging and materials may contain more and different information than what is shown on our app or website. We recommend that you do not rely solely on the information presented here and that you always read labels warnings and directions before using or consuming a product.', 'Active', '2024-02-09 12:45:50', '2024-02-09 12:45:50'),
(11, 5, 'AAVA 200 mL  Bottle', 3, 1, 'avamini.jpg', 19, 'pH range of Aava is between 7.9-8.1 and as per more than 500 test reports over a period of last decade the average value is more than 8.0 While we work to ensure that product information is correct on occasion manufacturers may alter their ingredient lists. Actual product packaging and materials may contain more and different information than that shown on our web site. We recommend that you do not solely rely on the information presented and that you always read labels warnings and directions before using or consuming a product. For additional information about a product please contact the manufacturer.', 'AAVA Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. AAVA Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 13:01:30', '2024-02-09 13:22:34'),
(12, 5, 'AAVA 200 mL  Bottle', 3, 2, 'avamini.jpg', 20, 'pH range of Aava is between 7.9-8.1 and as per more than 500 test reports over a period of last decade the average value is more than 8.0 While we work to ensure that product information is correct on occasion manufacturers may alter their ingredient lists. Actual product packaging and materials may contain more and different information than that shown on our web site. We recommend that you do not solely rely on the information presented and that you always read labels warnings and directions before using or consuming a product. For additional information about a product please contact the manufacturer.', 'AAVA Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. AAVA Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 13:03:49', '2024-02-09 13:22:49'),
(13, 1, 'AAVA 250 mL Glass Bottle ', 3, 3, 'ava1.jpg', 49, 'pH range of Aava is between 7.9-8.1 and as per more than 500 test reports over a period of last decade the average value is more than 8.0 While we work to ensure that product information is correct on occasion manufacturers may alter their ingredient lists. Actual product packaging and materials may contain more and different information than that shown on our web site. We recommend that you do not solely rely on the information presented and that you always read labels warnings and directions before using or consuming a product. For additional information about a product please contact the manufacturer.', 'AAVA Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. AAVA Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 13:06:42', '2024-02-09 13:23:43'),
(14, 1, 'AAVA 250 mL Glass Bottle', 3, 4, 'ava1.jpg', 50, 'pH range of Aava is between 7.9-8.1 and as per more than 500 test reports over a period of last decade the average value is more than 8.0 While we work to ensure that product information is correct on occasion manufacturers may alter their ingredient lists. Actual product packaging and materials may contain more and different information than that shown on our web site. We recommend that you do not solely rely on the information presented and that you always read labels warnings and directions before using or consuming a product. For additional information about a product please contact the manufacturer.', 'AAVA Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. AAVA Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 13:09:03', '2024-02-09 13:23:56'),
(15, 2, 'AAVA 750 mL Glass Bottle', 3, 1, 'avabig.jpg', 199, 'pH range of Aava is between 7.9-8.1 and as per more than 500 test reports over a period of last decade the average value is more than 8.0 While we work to ensure that product information is correct on occasion manufacturers may alter their ingredient lists. Actual product packaging and materials may contain more and different information than that shown on our web site. We recommend that you do not solely rely on the information presented and that you always read labels warnings and directions before using or consuming a product. For additional information about a product please contact the manufacturer.', 'AAVA Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. AAVA Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 13:14:31', '2024-02-09 13:21:56'),
(16, 2, 'AAVA 750 mL Glass Bottle', 3, 2, 'avabig.jpg', 200, 'pH range of Aava is between 7.9-8.1 and as per more than 500 test reports over a period of last decade the average value is more than 8.0 While we work to ensure that product information is correct on occasion manufacturers may alter their ingredient lists. Actual product packaging and materials may contain more and different information than that shown on our web site. We recommend that you do not solely rely on the information presented and that you always read labels warnings and directions before using or consuming a product. For additional information about a product please contact the manufacturer.', 'AAVA Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. AAVA Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 13:16:53', '2024-02-09 13:16:53'),
(17, 3, 'AAVA 2 litre water Jug', 3, 3, 'avajug.jpg', 399, 'pH range of Aava is between 7.9-8.1 and as per more than 500 test reports over a period of last decade the average value is more than 8.0 While we work to ensure that product information is correct on occasion manufacturers may alter their ingredient lists. Actual product packaging and materials may contain more and different information than that shown on our web site. We recommend that you do not solely rely on the information presented and that you always read labels warnings and directions before using or consuming a product. For additional information about a product please contact the manufacturer.', 'AAVA Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. AAVA Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 13:21:29', '2024-02-09 15:27:46'),
(18, 3, 'AAVA 2 litre water Jug', 3, 4, 'avajug.jpg', 400, 'pH range of Aava is between 7.9-8.1 and as per more than 500 test reports over a period of last decade the average value is more than 8.0 While we work to ensure that product information is correct on occasion manufacturers may alter their ingredient lists. Actual product packaging and materials may contain more and different information than that shown on our web site. We recommend that you do not solely rely on the information presented and that you always read labels warnings and directions before using or consuming a product. For additional information about a product please contact the manufacturer.', 'AAVA Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. AAVA Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 13:27:59', '2024-02-09 15:26:34'),
(19, 2, 'AAVA 1 litre water Bottle', 3, 1, 'ava.jpg', 299, 'pH range of Aava is between 7.9-8.1 and as per more than 500 test reports over a period of last decade the average value is more than 8.0 While we work to ensure that product information is correct on occasion manufacturers may alter their ingredient lists. Actual product packaging and materials may contain more and different information than that shown on our web site. We recommend that you do not solely rely on the information presented and that you always read labels warnings and directions before using or consuming a product. For additional information about a product please contact the manufacturer.', 'AAVA Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. AAVA Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 13:30:40', '2024-02-09 13:30:40'),
(20, 2, 'AAVA 1 litre water Bottle', 3, 2, 'ava.jpg', 300, 'pH range of Aava is between 7.9-8.1 and as per more than 500 test reports over a period of last decade the average value is more than 8.0 While we work to ensure that product information is correct on occasion manufacturers may alter their ingredient lists. Actual product packaging and materials may contain more and different information than that shown on our web site. We recommend that you do not solely rely on the information presented and that you always read labels warnings and directions before using or consuming a product. For additional information about a product please contact the manufacturer.', 'AAVA Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. AAVA Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 13:32:33', '2024-02-09 13:32:33'),
(21, 1, 'Aqua 200ml water Bottle', 2, 1, 'aquas.jpg', 15, 'Aqua mineral water is always a refreshing naturally hydrating drink. Its quality and taste make it perfect for serving by the glass or drinking directly from the bottle at home at school or at the gym. Aqua water has a balanced mineral composition and naturally occurring electrolytes that give it a distinctive smooth taste unique among bottled waters.', 'Aqua Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. Aqua Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 14:55:21', '2024-02-09 14:55:21'),
(22, 1, 'Aqua 200ml water Bottle', 2, 2, 'aquas.jpg', 15, 'Aqua mineral water is always a refreshing naturally hydrating drink. Its quality and taste make it perfect for serving by the glass or drinking directly from the bottle at home at school or at the gym. Aqua water has a balanced mineral composition and naturally occurring electrolytes that give it a distinctive smooth taste unique among bottled waters.', 'Aqua Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. Aqua Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 14:56:24', '2024-02-09 14:56:24'),
(23, 1, 'Aqua 200ml water Bottle', 2, 3, 'aquas.jpg', 19, 'Aqua mineral water is always a refreshing naturally hydrating drink. Its quality and taste make it perfect for serving by the glass or drinking directly from the bottle at home at school or at the gym. Aqua water has a balanced mineral composition and naturally occurring electrolytes that give it a distinctive smooth taste unique among bottled waters.', 'Aqua Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. Aqua Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 14:57:25', '2024-02-09 14:57:25'),
(24, 2, 'Aqua 2 litre water Bottle', 2, 4, 'aquab.jpg', 29, 'Aqua mineral water is always a refreshing naturally hydrating drink. Its quality and taste make it perfect for serving by the glass or drinking directly from the bottle at home at school or at the gym. Aqua water has a balanced mineral composition and naturally occurring electrolytes that give it a distinctive smooth taste unique among bottled waters.', 'Aqua Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. Aqua Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 14:59:53', '2024-02-09 14:59:53'),
(25, 2, 'Aqua 2 litre water Bottle', 2, 1, 'aquab.jpg', 29, 'Aqua mineral water is always a refreshing naturally hydrating drink. Its quality and taste make it perfect for serving by the glass or drinking directly from the bottle at home at school or at the gym. Aqua water has a balanced mineral composition and naturally occurring electrolytes that give it a distinctive smooth taste unique among bottled waters.', 'Aqua Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. Aqua Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 15:01:56', '2024-02-09 15:01:56'),
(26, 2, 'Aqua 2 litre water Bottle', 2, 2, 'aquab.jpg', 29, 'Aqua mineral water is always a refreshing naturally hydrating drink. Its quality and taste make it perfect for serving by the glass or drinking directly from the bottle at home at school or at the gym. Aqua water has a balanced mineral composition and naturally occurring electrolytes that give it a distinctive smooth taste unique among bottled waters.', 'Aqua Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. Aqua Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 15:02:58', '2024-02-09 15:02:58'),
(27, 3, 'Aqua 10 litre water Can', 2, 3, 'aquaju.jpg', 89, 'Aqua mineral water is always a refreshing naturally hydrating drink. Its quality and taste make it perfect for serving by the glass or drinking directly from the bottle at home at school or at the gym. Aqua water has a balanced mineral composition and naturally occurring electrolytes that give it a distinctive smooth taste unique among bottled waters.', 'Aqua Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. Aqua Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 15:05:43', '2024-02-09 15:14:28'),
(28, 3, 'Aqua 10 litre water Can', 2, 4, 'aquaju.jpg', 89, 'Aqua mineral water is always a refreshing naturally hydrating drink. Its quality and taste make it perfect for serving by the glass or drinking directly from the bottle at home at school or at the gym. Aqua water has a balanced mineral composition and naturally occurring electrolytes that give it a distinctive smooth taste unique among bottled waters.', 'Aqua Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. Aqua Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 15:10:49', '2024-02-09 15:14:15'),
(29, 4, 'Aqua 20 litre water Can', 2, 1, 'aquaj.jpg', 179, 'Aqua mineral water is always a refreshing naturally hydrating drink. Its quality and taste make it perfect for serving by the glass or drinking directly from the bottle at home at school or at the gym. Aqua water has a balanced mineral composition and naturally occurring electrolytes that give it a distinctive smooth taste unique among bottled waters.', 'Aqua Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. Aqua Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 15:12:38', '2024-02-09 15:12:38'),
(30, 4, 'Aqua 20 litre water Can', 2, 2, 'aquaj.jpg', 179, 'Aqua mineral water is always a refreshing naturally hydrating drink. Its quality and taste make it perfect for serving by the glass or drinking directly from the bottle at home at school or at the gym. Aqua water has a balanced mineral composition and naturally occurring electrolytes that give it a distinctive smooth taste unique among bottled waters.', 'Aqua Drinking Water is dedicated to refreshing Belize with the highest quality water. Produced with superior technology. Aqua Water passes through 11 stages of purification including double reverse osmosis ozonation and ultraviolet light to assure 100% purity. The only water in Belize certified by the American and British Armed Forces our superior filtration system guarantees Quality Taste Purity and Safety.', 'Active', '2024-02-09 15:13:54', '2024-02-15 12:05:59');

-- --------------------------------------------------------

--
-- Table structure for table `type_tb`
--

DROP TABLE IF EXISTS `type_tb`;
CREATE TABLE IF NOT EXISTS `type_tb` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) NOT NULL,
  `type_status` enum('Active','Deactive') NOT NULL,
  `type_cdate` datetime NOT NULL,
  `type_udate` datetime NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_tb`
--

INSERT INTO `type_tb` (`type_id`, `type_name`, `type_status`, `type_cdate`, `type_udate`) VALUES
(1, 'Mineral Water', 'Active', '2024-02-08 16:08:55', '2024-02-08 16:08:55'),
(2, 'Normal Water', 'Active', '2024-02-08 16:09:01', '2024-02-08 16:09:01'),
(3, 'RO Water', 'Active', '2024-02-08 16:09:07', '2024-02-08 16:09:07'),
(4, 'Simple Water', 'Active', '2024-02-08 16:09:13', '2024-02-08 16:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

DROP TABLE IF EXISTS `user_tb`;
CREATE TABLE IF NOT EXISTS `user_tb` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `u_contact` bigint(20) NOT NULL,
  `u_image` varchar(100) NOT NULL,
  `u_address` text NOT NULL,
  `u_password` varchar(20) NOT NULL,
  `u_status` enum('Active','Deactive') NOT NULL,
  `u_cdate` datetime NOT NULL,
  `u_udate` datetime NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`u_id`, `u_name`, `u_contact`, `u_image`, `u_address`, `u_password`, `u_status`, `u_cdate`, `u_udate`) VALUES
(1, 'Joshi Riddhi', 9773234157, 'Riddhi.jpeg', '1265 near trigunu farm , Himmatnagar highway Moti Shiholi Chiloda Gandhinagar', '12345', 'Active', '2024-02-08 16:11:01', '2024-02-10 17:31:06'),
(2, 'Kadiya Shruti', 9510775840, 'shruti.jpeg', 'B-104 Sakar Appartment Hirawadi,Bapunagar,Ahmedabad', '951077', 'Active', '2024-02-08 16:12:30', '2024-02-21 17:17:26'),
(3, 'Polara Jaynisha', 9825907377, 'jenny.jpeg', 'E-30 Surjit Society India-Colony,Bapunagar,Ahmedabad', '982590', 'Active', '2024-02-08 16:14:17', '2024-02-08 16:14:17'),
(4, 'Komal Patel', 9723001502, 'shruti.jpeg', '302, Gandhinagar', '12345', 'Active', '2024-02-21 17:20:03', '2024-02-21 18:16:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
