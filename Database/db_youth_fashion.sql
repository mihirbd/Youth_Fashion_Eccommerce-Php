-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2016 at 08:08 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_youth_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_ligin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_ligin` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `admin` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_admin_ligin`
--

INSERT INTO `tbl_admin_ligin` (`user_id`, `admin`, `username`, `password`) VALUES
(1, 'MD. TI MIHIR', 'Mihir', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Tarequl islam', 'tarequl', '827ccb0eea8a706'),
(3, 'Sohag', 'sohag', 'fcea920f7412b5da7be0cf42b8c93759');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(3) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(5, 'Hawaii', 'well', 0),
(7, 'Women Fashion', 'well', 1),
(8, 'Men Fashion', 'well', 1),
(9, 'Smart Phone', 'well', 1),
(10, 'Sign In', 'well', 0),
(11, 'Contact', 'well', 0),
(12, 'Samsung', 'well', 0),
(13, 'Exclusive Offer', 'well', 1),
(14, '', '', 0),
(15, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `name`, `email`, `phone`, `message`) VALUES
(5, 'Ibrahim khan', 'mikhan@gmail.com', '0946528', ' Table Cells that Span Many Columns To make a cell span more than one column, use the colspan attribute:  Table Cells that Span Many Columns To make a cell span more than one column, use the colspan attribute: Table Cells that Span Many Columns To make a cell span more than one column, use the colspan attribute: Table Cells that Span Many Columns To make a cell span more than one column, use the colspan attribute: Table Cells that Span Many Columns To make a cell span more than one column, use the colspan attribute: Table Cells that Span Many Columns To make a cell span more than one column, use the colspan attribute: Table Cells that Span Many Columns To make a cell span more than one column, use the colspan attribute:');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `password` varchar(32) NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `district` varchar(50) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `first_name`, `last_name`, `email_address`, `password`, `address`, `phone_number`, `district`) VALUES
(1, 'TI', 'Mihir', 'mihir@gmail.com', '202cb962ac59075b964b07152d234b70', 'Dhaka', '12324354', 'Lakshmipur'),
(4, 'MI', 'Khan', 'mikhan@gmail.com', '202cb962ac59075b964b07152d234b70', 'Dhaka', '9878663', 'Pabna'),
(5, '', '', 'mikhan@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', ''),
(6, 'Md', 'Rubel', 'rubel@gmail.com', '202cb962ac59075b964b07152d234b70', 'dhaka', '23543657', 'pabna'),
(7, '', '', 'mihir@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', ''),
(8, 'Asafur', 'nai', 'asfur119@gmail.com', '202cb962ac59075b964b07152d234b70', '20/4 suzatnagar, pallabi, dhaka', '01911700859', 'dhaka'),
(9, 'MI', 'khan', 'mikhan@gmail.com', '202cb962ac59075b964b07152d234b70', 'ghfd', '435346', 'Pabna'),
(10, 'Anisur', 'Rahman', 'anisur@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'hkjhiuio', '1234234534', 'dhaka'),
(11, '', '', 'mikhan@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', ''),
(12, '', '', 'mikhan@gmail.com', '202cb962ac59075b964b07152d234b70', '', '', ''),
(13, 'Tarequl', 'Islam', 'mstarequlislam@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '20/4 sujatnagar', '13247975409', 'Dhaka'),
(14, 'Rubel', 'hasan', 'rubel34@gmail.com', '202cb962ac59075b964b07152d234b70', 'hgkhk', '5476587687', 'Pabna');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacturer`
--

CREATE TABLE IF NOT EXISTS `tbl_manufacturer` (
  `manufacturer_id` int(3) NOT NULL AUTO_INCREMENT,
  `manufacturer_name` varchar(100) NOT NULL,
  `manufacturer_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`manufacturer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_manufacturer`
--

INSERT INTO `tbl_manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_description`, `publication_status`) VALUES
(1, 'Sony', 'well', 0),
(2, 'Samsung', 'welll', 1),
(4, 'Apple', 'weeel', 0),
(5, 'T-shirt Y', 'well', 1),
(6, 'Pant', 'well', 1),
(7, 'Symphony', 'well', 1),
(8, 'Offer', 'well', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` float(10,2) NOT NULL,
  `order_status` varchar(15) NOT NULL DEFAULT 'pending',
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `order_date`) VALUES
(1, 2, 1, 0.00, 'Sent0', '2016-08-03 09:07:13'),
(2, 2, 1, 29900.00, 'Sent0', '2016-08-03 09:17:29'),
(3, 4, 2, 1840.00, 'Sent0', '2016-08-03 10:06:14'),
(5, 6, 4, 17250.00, 'Sent0', '2016-08-03 14:54:57'),
(6, 7, 5, 132250.00, 'Sent0', '2016-08-04 08:58:52'),
(7, 8, 1, 1380.00, 'Sent0', '2016-08-07 15:50:11'),
(18, 10, 14, 125120.00, 'Sent0', '2016-08-09 17:34:52'),
(20, 13, 16, 18400.00, 'Sent0', '2016-08-10 07:22:44'),
(21, 14, 17, 6210.00, 'Sent0', '2016-08-11 08:50:45'),
(22, 14, 18, 20125.00, 'Sent0', '2016-08-11 11:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE IF NOT EXISTS `tbl_order_details` (
  `order_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(7) NOT NULL,
  `product_image` text NOT NULL,
  PRIMARY KEY (`order_details_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `product_image`) VALUES
(1, 1, 17, 'Palazoo', 2299, 5, '../assets/admin_assets/product_images/pi.png'),
(2, 2, 17, 'Palazoo', 2299, 6, '../assets/admin_assets/product_images/pi.png'),
(3, 2, 21, 'Palazoo', 2500, 3, '../assets/admin_assets/product_images/pi12.png'),
(4, 3, 20, 'Trouser', 1800, 2, '../assets/admin_assets/product_images/pi11.png'),
(5, 3, 16, 'Trouser', 1800, 3, '../assets/admin_assets/product_images/pi1.png'),
(6, 4, 15, 'Trouser', 1800, 2, '../assets/admin_assets/product_images/pi2.png'),
(7, 8, 20, 'Trouser', 1800, 3, '../assets/admin_assets/product_images/pi11.png'),
(8, 9, 19, 'Palazoo', 3200, 89, '../assets/admin_assets/product_images/pi10.png'),
(9, 9, 14, 'Palazzo', 2000, 100, '../assets/admin_assets/product_images/pi3.png'),
(10, 10, 22, 'Palazoo', 1500, 4, '../assets/admin_assets/product_images/pi4.png'),
(11, 11, 19, 'Palazoo', 3200, 4, '../assets/admin_assets/product_images/pi10.png'),
(12, 12, 22, 'Palazoo', 1500, 3, '../assets/admin_assets/product_images/pi4.png'),
(13, 13, 25, 'Samsung sii (45% Offer)', 30000, 3, '../assets/admin_assets/product_images/6.jpg'),
(14, 14, 19, 'Palazoo', 3200, 4, '../assets/admin_assets/product_images/pi10.png'),
(15, 15, 14, 'Palazzo', 2000, 4, '../assets/admin_assets/product_images/pi3.png'),
(16, 16, 22, 'Palazoo', 1500, 2, '../assets/admin_assets/product_images/pi4.png'),
(17, 17, 23, 'T Shart (50% offer)', 2000, 5, '../assets/admin_assets/product_images/LogoMakr(2).png'),
(18, 18, 19, 'Palazoo', 3200, 34, '../assets/admin_assets/product_images/pi10.png'),
(19, 19, 20, 'Trouser', 1800, 6, '../assets/admin_assets/product_images/pi11.png'),
(20, 20, 18, 'Trouser', 2500, 4, '../assets/admin_assets/product_images/pi9.png'),
(21, 20, 22, 'Palazoo', 1500, 4, '../assets/admin_assets/product_images/pi4.png'),
(22, 21, 15, 'Trouser', 1800, 3, '../assets/admin_assets/product_images/pi2.png'),
(23, 22, 21, 'Palazoo', 2500, 7, '../assets/admin_assets/product_images/pi12.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_other`
--

CREATE TABLE IF NOT EXISTS `tbl_other` (
  `other_id` int(3) NOT NULL,
  `facebook` varchar(256) NOT NULL,
  `google_plus` varchar(256) NOT NULL,
  `linked_in` varchar(256) NOT NULL,
  `twitter` varchar(256) NOT NULL,
  `copyright` text NOT NULL,
  `address` text NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  PRIMARY KEY (`other_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_other`
--

INSERT INTO `tbl_other` (`other_id`, `facebook`, `google_plus`, `linked_in`, `twitter`, `copyright`, `address`, `email`, `phone`, `mobile`) VALUES
(0, 'www.facebook.com/', 'www.google.com/', 'www.linkedin.com/', 'www.twitter.com/', 'Â© 2016 Youth Fashion . All Rights Reserved', 'Dhaka Bangladesh.', 'info@example.com', '+1234 567 567', '+8801828311225');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(16) NOT NULL,
  `payment_status` varchar(30) NOT NULL DEFAULT 'pending',
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `order_id`, `payment_type`, `payment_status`, `payment_date`) VALUES
(1, 1, 'cash_on_delivary', 'Paied', '2016-08-07 12:41:07'),
(2, 2, 'cash_on_delivary', 'Paied', '2016-08-07 13:08:14'),
(3, 3, 'cash_on_delivary', 'Paied', '2016-08-07 16:56:53'),
(4, 4, 'cash_on_delivary', 'Paied3', '2016-08-07 17:02:18'),
(5, 8, 'cash_on_delivary', 'Paied', '2016-08-09 11:34:18'),
(6, 9, 'cash_on_delivary', 'Paied', '2016-08-09 14:08:31'),
(7, 10, 'cash_on_delivary', 'Paied', '2016-08-09 14:14:17'),
(8, 11, 'cash_on_delivary', 'Paied3', '2016-08-09 14:19:05'),
(9, 12, 'cash_on_delivary', 'Paied3', '2016-08-09 16:25:10'),
(10, 13, 'cash_on_delivary', 'Paied3', '2016-08-09 16:49:09'),
(11, 14, 'cash_on_delivary', 'Paied3', '2016-08-09 17:14:09'),
(12, 15, 'cash_on_delivary', 'Paied3', '2016-08-09 17:16:22'),
(13, 16, 'cash_on_delivary', 'Paied3', '2016-08-09 17:20:14'),
(14, 17, 'cash_on_delivary', 'Paied3', '2016-08-09 17:27:01'),
(15, 18, 'cash_on_delivary', 'Paied3', '2016-08-09 17:34:52'),
(16, 19, 'cash_on_delivary', 'Paied3', '2016-08-10 07:09:44'),
(17, 20, 'cash_on_delivary', 'Paied3', '2016-08-10 07:22:44'),
(18, 21, 'cash_on_delivary', 'Paied', '2016-08-11 08:50:45'),
(19, 22, 'cash_on_delivary', 'pending', '2016-08-11 11:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `category_id` int(3) NOT NULL,
  `manufacturer_id` int(3) NOT NULL,
  `product_price` float NOT NULL,
  `stock_quantity` int(7) NOT NULL,
  `product_sku` varchar(5) NOT NULL,
  `product_short_description` text NOT NULL,
  `product_long_description` text NOT NULL,
  `product_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `manufacturer_id`, `product_price`, `stock_quantity`, `product_sku`, `product_short_description`, `product_long_description`, `product_image`, `publication_status`) VALUES
(14, 'Palazzo', 7, 6, 2000, 40, '5', '<span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</span>', '<span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</span><span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</span>', '../assets/admin_assets/product_images/pi3.png', 1),
(15, 'Trouser', 7, 6, 1800, 45, '5', '<span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</span>', '<span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</span><span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</span>', '../assets/admin_assets/product_images/pi2.png', 1),
(16, 'Trouser', 7, 6, 1800, 50, '5', '<span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</span>', '<span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</span><span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</span>', '../assets/admin_assets/product_images/pi1.png', 1),
(17, 'Palazoo', 7, 6, 2299, 40, '5', '<span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of classical Latin</span>', '<span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of classical Latin</span>', '../assets/admin_assets/product_images/pi.png', 1),
(18, 'Trouser', 8, 6, 2500, 34, '5', '<span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of&nbsp;</span>', '<span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of&nbsp;</span><span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of&nbsp;</span>', '../assets/admin_assets/product_images/pi9.png', 1),
(19, 'Palazoo', 8, 6, 3200, 30, '5', '<span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</span>', '<span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</span><span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece</span>', '../assets/admin_assets/product_images/pi10.png', 1),
(20, 'Trouser', 8, 6, 1800, 45, '5', '<span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</span>', '<span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</span><span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</span>', '../assets/admin_assets/product_images/pi11.png', 1),
(21, 'Palazoo', 8, 6, 2500, 25, '5', '<span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</span>', '<span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</span><span style="color: rgb(178, 178, 178); font-family: Roboto-Regular; font-size: 16.2px; line-height: 29.16px; background-color: rgb(255, 255, 255);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</span>', '../assets/admin_assets/product_images/pi12.png', 1),
(22, 'Palazoo', 7, 6, 1500, 45, '5', '<span style="color: rgb(54, 52, 50); font-family: Roboto, sans-serif; font-size: 16px; line-height: 22.8571px; background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style="color: rgb(54, 52, 50); font-family: Roboto, sans-serif; font-size: 16px; line-height: 22.8571px; background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style="color: rgb(54, 52, 50); font-family: Roboto, sans-serif; font-size: 16px; line-height: 22.8571px; background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed&nbsp;</span>', '<span style="color: rgb(54, 52, 50); font-family: Roboto, sans-serif; font-size: 16px; line-height: 22.8571px; background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style="color: rgb(54, 52, 50); font-family: Roboto, sans-serif; font-size: 16px; line-height: 22.8571px; background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style="color: rgb(54, 52, 50); font-family: Roboto, sans-serif; font-size: 16px; line-height: 22.8571px; background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style="color: rgb(54, 52, 50); font-family: Roboto, sans-serif; font-size: 16px; line-height: 22.8571px; background-color: rgb(255, 255, 255);">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>', '../assets/admin_assets/product_images/pi4.png', 1),
(23, 'T Shart (50% offer)', 13, 8, 2000, 49, '5', '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: Verdana; font-size: 15px; line-height: 21.4286px; background-color: rgb(255, 255, 255);">Until now we have been writing jQuery statements one at a time (one after the other).&nbsp;<span style="line-height: 21.4286px;">However, there is a technique called chaining, that allows us to run multiple jQuery commands, one after the other, on the same element(s)</span></p>', '<span style="color: rgb(51, 51, 51); font-family: Verdana; font-size: 15px; line-height: 21.4286px; background-color: rgb(255, 255, 255);">Until now we have been writing jQuery statements one at a time (one after the other).&nbsp;</span><span style="color: rgb(51, 51, 51); font-family: Verdana; font-size: 15px; line-height: 21.4286px;">However, there is a technique called chaining, that allows us to run multiple jQuery commands, one after the other, on the same element(s)</span><span style="color: rgb(51, 51, 51); font-family: Verdana; font-size: 15px; line-height: 21.4286px; background-color: rgb(255, 255, 255);">Until now we have been writing jQuery statements one at a time (one after the other).&nbsp;</span><span style="color: rgb(51, 51, 51); font-family: Verdana; font-size: 15px; line-height: 21.4286px;">However, there is a technique called chaining, that allows us to run multiple jQuery commands, one after the other, on the same element(s)</span>', '../assets/admin_assets/product_images/LogoMakr(2).png', 1),
(24, 'Trouser', 8, 6, 2500, 50, '5', '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: Verdana; font-size: 15px; line-height: 21.4286px; background-color: rgb(255, 255, 255);">Until now we have been writing jQuery statements one at a time (one after the other).&nbsp;<span style="line-height: 21.4286px;">However, there is a technique called chaining, that allows us to run multiple jQuery commands, one after the other, on the same element</span></p>', '<span style="color: rgb(51, 51, 51); font-family: Verdana; font-size: 15px; line-height: 21.4286px; background-color: rgb(255, 255, 255);">Until now we have been writing jQuery statements one at a time (one after the other).&nbsp;</span><span style="color: rgb(51, 51, 51); font-family: Verdana; font-size: 15px; line-height: 21.4286px;">However, there is a technique called chaining, that allows us to run multiple jQuery commands, one after the other, on the same element</span><span style="color: rgb(51, 51, 51); font-family: Verdana; font-size: 15px; line-height: 21.4286px; background-color: rgb(255, 255, 255);">Until now we have been writing jQuery statements one at a time (one after the other).&nbsp;</span><span style="color: rgb(51, 51, 51); font-family: Verdana; font-size: 15px; line-height: 21.4286px;">However, there is a technique called chaining, that allows us to run multiple jQuery commands, one after the other, on the same element</span>', '../assets/admin_assets/product_images/pi25.png', 1),
(25, 'Samsung sii (45% Offer)', 13, 8, 30000, 40, '5', '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: Verdana; font-size: 15px; line-height: 21.4286px; background-color: rgb(255, 255, 255);">Until now we have been writing jQuery statements one at a time (one after the other).&nbsp;<span style="line-height: 21.4286px;">However, there is a technique called chaining, that allows us to run multiple jQuery commands, one after the other, on the same element</span></p>', '<p style="box-sizing: border-box; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: Verdana; font-size: 15px; line-height: 21.4286px; background-color: rgb(255, 255, 255);"><span style="line-height: 21.4286px;">Until now we have been writing jQuery statements one at a time (one after the other).&nbsp;</span><span style="line-height: 21.4286px;">However, there is a technique called chaining, that allows us to run multiple jQuery commands, one after the other, on the same element</span><span style="line-height: 21.4286px;">Until now we have been writing jQuery statements one at a time (one after the other).&nbsp;</span><span style="line-height: 21.4286px;">However, there is a technique called chaining, that allows us to run multiple jQuery commands, one after the other, on the same element</span></p>', '../assets/admin_assets/product_images/6.jpg', 1),
(26, 'Flat (50% Offer)', 13, 8, 100000, 10, '2', 'when an unknown printer took a galley of type and scrambled it to makewhen an unknown printer took a galley of type and scrambled it to makewhen an unknown printer took a galley of type and scrambled it to makewhen an unknown printer took a galley of type and scrambled it to makewhen an unknown printer took a galley of type and scrambled it to makewhen an unknown printer took a galley of type and scrambled it to makewhen an unknown printer took a galley of type and scrambled it to make', 'when an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmake', '../assets/admin_assets/product_images/12.jpg', 1),
(27, 'Flat (40% Offer)', 13, 8, 110000, 12, '3', 'when an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmake', 'when an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmake', '../assets/admin_assets/product_images/10.jpg', 1),
(28, 'Blazer (50% Offer)', 13, 8, 3000, 40, '5', 'when an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmake', 'when an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmake', '../assets/admin_assets/product_images/13.jpg', 1),
(29, 'Shart (50% Offer)', 13, 8, 5900, 45, '5', 'when an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmake', 'when an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmake', '../assets/admin_assets/product_images/14.jpg', 1),
(30, 'T-Shirt (30% Offer)', 13, 8, 3456, 43, '5', 'when an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmake', 'when an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmake', '../assets/admin_assets/product_images/9.jpg', 1),
(31, 'Flat 50% Offer', 13, 8, 130000, 15, '3', 'when an unknown printer took a galley of type and scrambled it to makewhen an unknown printer took a galley of type and scrambled it to makewhen an unknown printer took a galley of type and scrambled it to makewhen an unknown printer took a galley of type and scrambled it to makewhen an unknown printer took a galley of type and scrambled it to makewhen an unknown printer took a galley of type and scrambled it to makewhen an unknown printer took a galley of type and scrambled it to make', 'when an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmakewhen an unknown printer took a galley of type and scrambled it to \r\nmake', '../assets/admin_assets/product_images/11.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE IF NOT EXISTS `tbl_shipping` (
  `shipping_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `district` varchar(50) NOT NULL,
  PRIMARY KEY (`shipping_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `full_name`, `email`, `address`, `phone_number`, `district`) VALUES
(1, 'MI Khan', 'mikhan@gmail.com', 'mirpur 12, Dhaka', '9878663', 'Pabna'),
(2, 'Md Rubel', 'rubel@gmail.com', 'dhaka, mirpur 12', '23543657', 'pabna'),
(3, 'Ti Mihir', 'mihir@gmail.com', '20/4 suzatnagar, pallabi, Dhaka.', '36547658', 'Dhaka'),
(4, 'Asafur nai', 'asfur119@gmail.com', '20/4 suzatnagar, pallabi, dhaka', '01911700859', 'dhaka'),
(5, 'Asafur nai', 'asfur119@gmail.com', '20/4 suzatnagar, pallabi, dhaka', '01911700859', 'dhaka'),
(6, 'Asafur hasan', 'asfur119@gmail.com', '20/4 suzatnagar, pallabi, dhaka', '01911700859', 'dhaka'),
(7, 'MI khan', 'mikhan@gmail.com', 'ghfdjhgjh', '435346', 'Pabna'),
(8, 'MI khan', 'mikhan@gmail.com', 'ghfd', '435346', 'Pabna'),
(9, 'MI khan', 'mikhan@gmail.com', 'ghfd', '435346', 'Pabna'),
(10, 'MI khan', 'mikhan@gmail.com', 'ghfd', '435346', 'Pabna'),
(11, 'MI khan', 'mikhan@gmail.com', 'ghfd', '435346', 'Pabna'),
(12, 'Anisur Rahman', 'anisur@gmail.com', 'hkjhiuiodeff', '1234234534', 'dhaka'),
(13, 'Anisur Rahman', 'anisur@gmail.com', 'hkjhiuio56', '1234234534', 'dhaka'),
(14, 'Anisur Rahman', 'anisur@gmail.com', 'hkjhiuio78', '1234234534', 'dhaka'),
(15, ' MI KHAN', 'mikhan@gmail.com', 'kjhj', '6588', 'Pabna'),
(16, 'Tarequl Islam', 'mstarequlislam@gmail.com', '20/4 sujatnagar', '13247975409', 'Dhaka'),
(17, 'Rubel hasan', 'rubel34@gmail.com', 'hgkhkkjuhkhkl', '5476587687', 'Pabna'),
(18, 'Rubel hasan', 'rubel34@gmail.com', 'hgkhko', '5476587687', 'Pabna');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `slider_id` int(3) NOT NULL AUTO_INCREMENT,
  `category` varchar(256) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `offer` varchar(256) NOT NULL,
  `slider_image` text NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `category`, `product_name`, `offer`, `slider_image`) VALUES
(3, 'MEN & WOMEN', 'Trousers & Chinos', 'UPTO 50% OFFER', '../assets/admin_assets/slider_image/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temp_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_temp_cart` (
  `temp_cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(256) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(7) NOT NULL,
  `product_image` text NOT NULL,
  PRIMARY KEY (`temp_cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_temp_cart`
--

INSERT INTO `tbl_temp_cart` (`temp_cart_id`, `session_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `product_image`) VALUES
(4, 'iilah5rlnbvh0dmks0hjakemj1', 19, 'Palazoo', 3200, 5, '../assets/admin_assets/product_images/pi10.png'),
(5, 'iilah5rlnbvh0dmks0hjakemj1', 25, 'Samsung sii (45% Offer)', 30000, 3, '../assets/admin_assets/product_images/6.jpg'),
(6, 'iilah5rlnbvh0dmks0hjakemj1', 14, 'Palazzo', 2000, 4, '../assets/admin_assets/product_images/pi3.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
