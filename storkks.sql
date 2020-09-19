-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2018 at 02:17 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storkks`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `id` int(11) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `landmark` varchar(1000) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL,
  `modified` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`id`, `customer_id`, `title`, `address`, `landmark`, `pincode`, `created`, `modified`) VALUES
(6, 57, 'Ram home', 'plot no 23, K P H B Phase 3, LB nager, Hyderabad, Telangana 500072, India', 'Amberpet', '500030', '2018-05-22 11:25:43', '2018-05-22 11:25:43'),
(8, 59, 'uty', 'hdfs-yu./', 'yellow', '89908764et', '2018-05-27 06:21:11', '2018-05-29 17:16:42'),
(9, 69, 'NO 120, VILLA LAMAN TASIK', 'NO 120, VILLA LAMAN TASIK', 'tre', '56100', '2018-05-29 05:42:07', '2018-05-29 05:42:07'),
(10, 59, '120', 'vi', 'mam', 'dd', '2018-05-29 18:46:30', '2018-05-29 18:46:30'),
(11, 92, '120, villa laman tasik)))))))))))', 'bandar sri permaisuri9999lllllll8**********************************************', 'near mosque)))))))))))))))))))))))))))))', '7009888))))))))))))))))))', '2018-05-30 15:23:35', '2018-05-30 15:28:28'),
(12, 92, '1-131, silver lake street', 'west moonah', 'near restaurant', '7009', '2018-05-30 15:24:22', '2018-05-30 15:24:22'),
(13, 56, 'SO - 18657106', '2/38B, Hitech City Rd, Andra Basti, Kavuri Hills Phase 1, Kavuri Hills, Madhapur, Hyderabad, Telangana 500033, India', 'Lb nager', '500081', '2018-06-11 07:13:16', '2018-06-11 07:13:16'),
(14, 105, '00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000ppppppppppp', '000000000000000000000000000000000000000000000000000000ppppppppppppppppppppppppppppppppppppp', 'uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu???????????????????????????????????????????????????????????????????????ppppppppppppppppppppppppppppppppppppppppppppppppppppppppppiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiooooooooooooooooooooooooooooo', ')))^%$%^&**(()____((*&&&*(((((&&&', '2018-06-11 10:47:25', '2018-06-11 10:47:25'),
(15, 60, '99999999988888888yyyyyyyyyyyyyyyyyyy', 'yyyyyuliful67s56zetzty8fg7txz58xbv', '777788ghgh', '(((((((*******', '2018-06-11 11:37:45', '2018-06-11 11:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `custompush`
--

CREATE TABLE `custompush` (
  `id` int(11) NOT NULL,
  `send_to` varchar(100) NOT NULL,
  `user_condition` varchar(100) NOT NULL,
  `user_active` varchar(100) NOT NULL,
  `user_rides` varchar(100) NOT NULL,
  `user_amount` varchar(100) NOT NULL,
  `user_location` varchar(100) NOT NULL,
  `provider_condition` varchar(100) NOT NULL,
  `provider_active` varchar(100) NOT NULL,
  `provider_rides` varchar(100) NOT NULL,
  `provider_amount` varchar(100) NOT NULL,
  `provider_location` varchar(150) NOT NULL,
  `message` varchar(150) NOT NULL,
  `schedule_date` varchar(100) NOT NULL,
  `schedule_time` varchar(100) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modefied_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 0, 'taya@123', 0, 0, 0, NULL, '2017-10-12 13:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `ts_addons`
--

CREATE TABLE `ts_addons` (
  `id` int(11) NOT NULL,
  `restaurant_id` varchar(100) NOT NULL,
  `restaurant_name` varchar(100) NOT NULL,
  `addon_name` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modefied_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_addons`
--

INSERT INTO `ts_addons` (`id`, `restaurant_id`, `restaurant_name`, `addon_name`, `price`, `status`, `create_date`, `modefied_date`) VALUES
(3, '7', 'Ajay krishna', 'Mexican cheesy Fries', '10', 'Inactive', '2018-03-27 07:37:23', '2018-03-27 08:05:17'),
(4, '7', 'Ajay krishna', 'Fries', '15', 'Inactive', '2018-03-27 07:37:37', '2018-03-27 08:06:27'),
(5, '7', 'Ajay krishna', 'FOOD DRINK', '8', 'Active', '2018-03-27 07:37:52', '2018-03-27 07:37:52'),
(6, '15', 'ravipulusu', 'addon1', '15', 'Active', '2018-04-02 09:50:25', '2018-04-02 09:50:25'),
(7, '15', 'ravipulusu', 'addon2', '25', 'Active', '2018-04-02 09:53:39', '2018-04-02 09:53:39'),
(9, '17', 'Spencer', 'Laasi', '5', 'Active', '2018-05-28 09:04:59', '2018-05-28 09:04:59'),
(10, '18', 'vegetarian', 'Pepsi', '2', 'Active', '2018-05-29 06:12:11', '2018-05-29 06:12:11'),
(11, '18', 'vegetarian', 'lassi', '10', 'Active', '2018-05-29 06:12:28', '2018-05-29 06:12:28'),
(12, '19', 'ganga', 'Laassi', '5', 'Active', '2018-06-01 11:16:38', '2018-06-01 11:16:38'),
(13, '20', 'Abiruchi', 'Iice cream', '20', 'Active', '2018-06-12 16:49:36', '2018-06-12 16:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `ts_category`
--

CREATE TABLE `ts_category` (
  `id` int(11) NOT NULL,
  `restaurant_id` varchar(100) NOT NULL,
  `restaurant_name` int(100) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_description` varchar(1000) NOT NULL,
  `cat_opens` int(11) NOT NULL,
  `cat_close` int(11) NOT NULL,
  `cat_order` varchar(100) NOT NULL,
  `cat_image` varchar(110) NOT NULL,
  `status` varchar(100) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modefied_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_category`
--

INSERT INTO `ts_category` (`id`, `restaurant_id`, `restaurant_name`, `cat_name`, `cat_description`, `cat_opens`, `cat_close`, `cat_order`, `cat_image`, `status`, `create_date`, `modefied_date`) VALUES
(19, '19', 0, 'Breakfast', '       7 to 11', 0, 0, '1', '1528096694Picture1.png', 'enabled', '2018-06-04 09:18:14', '2018-06-04 09:18:14'),
(20, '19', 0, 'Lunch', '      ', 0, 0, '0', '1528096829Picture1.png', 'enabled', '2018-06-04 09:20:29', '2018-06-04 09:20:29'),
(21, '20', 0, 'Breackfast', 'test      ', 8, 12, '1', '15281144611.jpg', 'enabled', '2018-06-04 14:14:21', '2018-06-04 14:14:21'),
(22, '20', 0, 'Biryani', 'Biryanies      ', 9, 18, '1', '15281145126.jpg', 'enabled', '2018-06-04 14:15:12', '2018-06-04 14:15:12'),
(23, '23', 0, 'Breakfast', 'variety of breakfast', 7, 11, '1', '1528718569Picture1.png', 'enabled', '2018-06-11 14:02:49', '2018-06-11 14:02:49'),
(24, '23', 0, 'Lunch', '      ', 13, 16, '2', '', 'enabled', '2018-06-11 21:35:34', '2018-06-11 21:35:34'),
(25, '23', 0, 'Dinner', '      ', 18, 23, '4', '', 'enabled', '2018-06-11 21:36:23', '2018-06-11 21:36:23'),
(26, '23', 0, 'Tea Time', '      TEa time', 16, 19, '3', '', 'enabled', '2018-06-11 21:37:36', '2018-06-11 21:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `ts_cuisines`
--

CREATE TABLE `ts_cuisines` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modified_date` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_cuisines`
--

INSERT INTO `ts_cuisines` (`id`, `name`, `create_date`, `modified_date`, `status`) VALUES
(8, 'Indian', '2018-06-01 11:10:18', '2018-06-01 11:10:18', ''),
(9, 'Japanese', '2018-06-01 11:10:46', '2018-06-01 11:10:46', ''),
(10, 'American', '2018-06-01 11:11:02', '2018-06-01 11:11:02', ''),
(11, 'Chinese', '2018-06-01 11:11:44', '2018-06-01 11:11:44', ''),
(12, 'Nepalese', '2018-06-01 11:12:03', '2018-06-01 11:12:03', ''),
(13, 'Italian', '2018-06-01 11:12:11', '2018-06-01 11:12:11', ''),
(14, 'Greek', '2018-06-01 11:12:30', '2018-06-01 11:12:30', ''),
(15, 'Thai', '2018-06-01 11:12:37', '2018-06-01 11:12:37', ''),
(16, 'Mexican', '2018-06-01 11:12:45', '2018-06-01 11:12:45', ''),
(17, 'Argentina', '2018-06-01 11:12:52', '2018-06-01 11:12:52', ''),
(18, 'Malaysian', '2018-06-01 11:13:14', '2018-06-01 11:13:14', ''),
(19, 'Indonesian', '2018-06-01 11:13:23', '2018-06-01 11:13:23', ''),
(20, 'Korean', '2018-06-01 11:13:31', '2018-06-01 11:13:31', ''),
(21, 'Fastfood', '2018-06-01 11:13:55', '2018-06-01 11:13:55', ''),
(22, 'Pizza', '2018-06-01 11:14:05', '2018-06-01 11:14:05', ''),
(23, 'Pakistani', '2018-06-01 11:14:16', '2018-06-01 11:14:16', ''),
(24, 'Juices', '2018-06-01 11:14:25', '2018-06-01 11:14:25', ''),
(25, 'Ice-cream', '2018-06-01 11:14:39', '2018-06-01 11:14:39', '');

-- --------------------------------------------------------

--
-- Table structure for table `ts_delivery_people`
--

CREATE TABLE `ts_delivery_people` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `profile_image` varchar(100) NOT NULL,
  `car_number` varchar(100) NOT NULL,
  `license_number` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `status` varchar(51) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modified_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_delivery_people`
--

INSERT INTO `ts_delivery_people` (`id`, `name`, `email`, `password`, `address`, `profile_image`, `car_number`, `license_number`, `phone`, `latitude`, `longitude`, `status`, `create_date`, `modified_date`) VALUES
(6, 'vinay krisna test Image', 'vinay@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Anjaiah Nagar, Gachibowli, Hyderabad, Telangana, India', '1521543948Screenshot_(15).png', '91', '', '7666219321', '', '', '', '2018-03-19 11:01:55', '2018-03-20 12:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `ts_dispute_manager`
--

CREATE TABLE `ts_dispute_manager` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `profile_image` varchar(100) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modified_date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_dispute_manager`
--

INSERT INTO `ts_dispute_manager` (`id`, `name`, `email`, `password`, `phone`, `profile_image`, `create_date`, `modified_date`, `status`) VALUES
(2, 'sudhakar test', 'sudhakar@gmail.com', '25f9e794323b453885f5181f1b624d0b', '9505191833', '1521719241Screenshot_(15).png', '2018-03-19 05:50:46', '2018-03-22 12:47:47', ''),
(3, 'yugandhar krishna ed', 'yugandhar588@gmail.com', '25f9e794323b453885f5181f1b624d0b', '9505191800', '1521546499Screenshot_(14).png', '2018-03-19 10:49:29', '2018-03-20 12:49:29', '');

-- --------------------------------------------------------

--
-- Table structure for table `ts_favourite`
--

CREATE TABLE `ts_favourite` (
  `id` int(11) NOT NULL,
  `uid` int(100) NOT NULL,
  `rid` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `create_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_favourite`
--

INSERT INTO `ts_favourite` (`id`, `uid`, `rid`, `status`, `create_date`) VALUES
(10, 56, 7, '2', '2018-05-30 15:47:21'),
(11, 56, 9, '2', '2018-05-30 15:47:22'),
(12, 59, 7, '1', '2018-05-30 15:49:20'),
(13, 59, 9, '2', '2018-05-30 15:49:22'),
(14, 96, 10, '1', '2018-05-31 05:19:47'),
(15, 96, 17, '1', '2018-05-31 05:19:54'),
(16, 60, 19, '1', '2018-06-05 09:31:44'),
(17, 60, 20, '2', '2018-06-05 09:31:46'),
(18, 0, 0, '1', '2018-06-06 15:34:10'),
(19, 56, 19, '1', '2018-06-07 12:04:31'),
(20, 56, 20, '1', '2018-06-07 12:04:42'),
(21, 60, 21, '1', '2018-06-11 08:03:50'),
(22, 60, 22, '2', '2018-06-11 08:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `ts_noticeboard`
--

CREATE TABLE `ts_noticeboard` (
  `id` int(11) NOT NULL,
  `transporter_id` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `notice` varchar(1000) NOT NULL,
  `note` varchar(100) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modified_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_noticeboard`
--

INSERT INTO `ts_noticeboard` (`id`, `transporter_id`, `title`, `notice`, `note`, `create_date`, `modified_date`) VALUES
(1, '6', 'Welcome notice', 'Welcome to Storkks', 'testing', '2018-03-19 07:48:18', '2018-03-27 10:49:53'),
(2, '6', 'Welcome notice test', 'Welcome to Storkks', 'testing', '2018-03-20 13:48:24', '2018-03-20 13:57:58'),
(3, '6', 'Welcome Notice', 'Welcome to Storkks', 'testing', '2018-03-20 13:57:21', '2018-03-20 13:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `ts_order`
--

CREATE TABLE `ts_order` (
  `o_id` int(11) NOT NULL,
  `u_id` varchar(100) NOT NULL,
  `rid` int(100) NOT NULL,
  `date_of_order` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `delivery_person` varchar(100) NOT NULL,
  `oredr_address_id` int(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_order`
--

INSERT INTO `ts_order` (`o_id`, `u_id`, `rid`, `date_of_order`, `status`, `delivery_person`, `oredr_address_id`, `total`) VALUES
(9, '56', 20, '2018-06-04 14:18:55', 'Ordered', '', 7, '65'),
(10, '60', 20, '2018-06-05 09:24:31', 'Ordered', '', 8, '65'),
(11, '56', 20, '2018-06-05 11:14:49', 'Ordered', '', 7, '50'),
(12, '56', 20, '2018-06-07 12:05:28', 'Ordered', '', 7, '45'),
(13, '56', 20, '2018-06-11 07:13:35', 'Ordered', '', 13, '70'),
(14, '105', 20, '2018-06-11 10:57:10', 'Ordered', '', 14, '3955');

-- --------------------------------------------------------

--
-- Table structure for table `ts_orderitems`
--

CREATE TABLE `ts_orderitems` (
  `id` int(11) NOT NULL,
  `order_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `create_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ts_order_details`
--

CREATE TABLE `ts_order_details` (
  `odid` int(11) NOT NULL,
  `o_id` int(100) NOT NULL,
  `u_id` int(100) NOT NULL,
  `itemid` int(100) NOT NULL,
  `rid` int(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `qty` int(200) NOT NULL,
  `item_price` int(200) NOT NULL,
  `datecreate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_order_details`
--

INSERT INTO `ts_order_details` (`odid`, `o_id`, `u_id`, `itemid`, `rid`, `item_name`, `qty`, `item_price`, `datecreate`) VALUES
(24, 9, 56, 11, 20, 'Curd Rice', 1, 25, '2018-06-04 14:18:55'),
(25, 9, 56, 10, 20, 'Tomato Bath', 2, 20, '2018-06-04 14:18:55'),
(26, 10, 60, 11, 20, 'Curd Rice', 1, 25, '2018-06-05 09:24:31'),
(27, 10, 60, 10, 20, 'Tomato Bath', 2, 20, '2018-06-05 09:24:31'),
(28, 0, 0, 0, 0, '', 0, 0, '2018-06-05 10:06:17'),
(29, 0, 0, 0, 0, '', 0, 0, '2018-06-05 11:13:35'),
(30, 11, 56, 11, 20, 'Curd Rice', 2, 25, '2018-06-05 11:14:49'),
(31, 0, 0, 0, 0, '', 0, 0, '2018-06-05 11:14:58'),
(32, 0, 0, 0, 0, '', 0, 0, '2018-06-05 11:50:19'),
(33, 12, 56, 10, 20, 'Tomato Bath', 1, 20, '2018-06-07 12:05:28'),
(34, 12, 56, 11, 20, 'Curd Rice', 1, 25, '2018-06-07 12:05:28'),
(35, 0, 0, 0, 0, '', 0, 0, '2018-06-11 06:23:32'),
(36, 0, 0, 0, 0, '', 0, 0, '2018-06-11 06:25:56'),
(37, 13, 56, 10, 20, 'Tomato Bath', 1, 20, '2018-06-11 07:13:35'),
(38, 13, 56, 11, 20, 'Curd Rice', 2, 25, '2018-06-11 07:13:35'),
(39, 0, 0, 0, 0, '', 0, 0, '2018-06-11 07:27:12'),
(40, 0, 0, 0, 0, '', 0, 0, '2018-06-11 07:28:01'),
(41, 0, 0, 0, 0, '', 0, 0, '2018-06-11 07:41:49'),
(42, 0, 0, 0, 0, '', 0, 0, '2018-06-11 07:41:51'),
(43, 0, 0, 0, 0, '', 0, 0, '2018-06-11 07:43:15'),
(44, 0, 0, 0, 0, '', 0, 0, '2018-06-11 09:54:09'),
(45, 0, 0, 0, 0, '', 0, 0, '2018-06-11 09:54:49'),
(46, 14, 105, 10, 20, 'Tomato Bath', 99, 20, '2018-06-11 10:57:10'),
(47, 14, 105, 11, 20, 'Curd Rice', 79, 25, '2018-06-11 10:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `ts_ordes`
--

CREATE TABLE `ts_ordes` (
  `id` int(11) NOT NULL,
  `p_id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `items` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ts_pages`
--

CREATE TABLE `ts_pages` (
  `page_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `content` longtext NOT NULL,
  `status` varchar(100) NOT NULL,
  `modified` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_pages`
--

INSERT INTO `ts_pages` (`page_id`, `name`, `content`, `status`, `modified`) VALUES
(1, 'About Us', '<section class=\"food__about__us__area section-padding--lg bg--white\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-12\">\r\n<div class=\"section__title title__style--2 service__align--center\">\r\n<h2 class=\"title__line\"><strong>Why Choose Us</strong></h2>\r\n<p><em>The process of our service</em></p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row m-t-40\">\r\n<div class=\"col-lg-6 col-sm-12 col-md-12 align-self-center\">\r\n<div class=\"food__container\">\r\n<div class=\"food__inner\">\r\n<h2><strong>About Storkks</strong></h2>\r\n<p><em>“Storkks”</em>delivers food ordered online based out of Tasmania, Australia. Storkks want to bring convenience and excellent delivery service to Tasmanians who are looking for food delivery. Our mission is to provide consistent food delivery to users and to assist restaurants in managing their delivery effectively. A single mobile and web application for ordering your favourite food from your favourite restaurants where you can be able to track your favourite food status in your application. Storkks started their journey from Tasmania, we are constantly looking for plans to enter into other regions.</p>\r\n<p>Your feedback is important for us to serve you more better.</p>\r\n</div>\r\n<div class=\"food__tab\">\r\n<div class=\"food__nav nav nav-tabs d-block\" role=\"tablist\"> </div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-6 col-sm-12 col-md-12\">\r\n<div id=\"nav-tabContent\" class=\"food__video__wrap tab-content\"><img src=\"../web-assets/images/1.jpg\"></div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<section class=\"food__team__area team--2 bg--white section-padding--lg bg-image--21\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-12 col-md-12\">\r\n<div class=\"section__title title__style--2 service__align--center section__bg__black\">\r\n<h2 class=\"title__line\">Meet Our Team</h2>\r\n<p>The process of our service</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"row mt--40\">\r\n<div class=\"col-lg-4 col-md-4\">\r\n<div class=\"team text-center foo\">\r\n<div class=\"team__thumb\"><a href=\"team-details.html\"> <img src=\"../web-assets/images/2.jpg\" alt=\"team images\"> </a></div>\r\n<div class=\"team__content\">\r\n<div class=\"team__info\">\r\n<h4><a href=\"team-details.html\">Najnin Supa</a></h4>\r\n<h6>Founder</h6>\r\n</div>\r\n<p>adipisicing elid tempor in dolore magna alua. Ut enim ad minim veniamexercitation llamco laboris nisi ut aliqui</p>\r\n<ul class=\"team__social__net\">\r\n<li> </li>\r\n<li> </li>\r\n<li> </li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-4 col-md-4\">\r\n<div class=\"team text-center foo\">\r\n<div class=\"team__thumb\"><a href=\"team-details.html\"> <img src=\"../web-assets/images/3.jpg\" alt=\"team images\"> </a></div>\r\n<div class=\"team__content\">\r\n<div class=\"team__info\">\r\n<h4><a href=\"team-details.html\">Wiliam Millar</a></h4>\r\n<h6>Co-Founder</h6>\r\n</div>\r\n<p>adipisicing elid tempor in dolore magna alua. Ut enim ad minim veniamexercitation llamco laboris nisi ut aliqui</p>\r\n<ul class=\"team__social__net\">\r\n<li> </li>\r\n<li> </li>\r\n<li> </li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-4 col-md-4\">\r\n<div class=\"team text-center foo\">\r\n<div class=\"team__thumb\"><a href=\"team-details.html\"> <img src=\"../web-assets/images/4.jpg\" alt=\"team images\"> </a></div>\r\n<div class=\"team__content\">\r\n<div class=\"team__info\">\r\n<h4><a href=\"team-details.html\">Irin Pervin</a></h4>\r\n<h6>Supplier</h6>\r\n</div>\r\n<p>adipisicing elid tempor in dolore magna alua. Ut enim ad minim veniamexercitation llamco laboris nisi ut aliqui</p>\r\n<ul class=\"team__social__net\">\r\n<li> </li>\r\n<li> </li>\r\n<li> </li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', '1', '2018-06-12 18:00:27'),
(2, 'FAQ', '', '1', ''),
(3, 'Privacy Policy', '', '1', '2018-06-12 17:59:53'),
(4, 'Terms & Conditions', '', '1', '2018-06-12 17:59:22'),
(5, 'Offer terms', '<section class=\"food__about__us__area section-padding--lg bg--white  static\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-12\">\r\n<div class=\"content\">\r\n<h3>Terms and Conditions: Referral Program</h3>\r\n<p>Offer is valid for users on the App only <br>Initial referral amount received for first order cannot be used in conjunction with any other coupon discount <br>Referral coupons are valid only on online payments through card or netbanking. Coupons are not valid on third party wallets <br>Offer cannot be clubbed with any other scheme <br>Dhaaksh pty ltd (storkks) reserves the right to cancel/change/modify/add/delete any of the terms and conditions of the offer at any time without notice <br>Dhaaksh pty ltd (storkks) reserves the right to terminate the offer at any time without notice <br>Dhaaksh pty ltd (storkks) reserves the right to deny honouring the offer on the grounds of suspicion or abuse of the offer by any customer without providing customer any explanation thereof <br>In no event shall Dhaaksh pty ltd(storkks) be liable for any abuse or misuse of the code due to the negligence of the customer <br>The services shall be governed by the terms and conditions set out in <a href=\"http://www.storkks.com/terms-and-conditions\">http://www.storkks.com/terms-and-conditions</a> <br>In case of any query regarding the offer, please email us at <a href=\"mailto:social@storkks.in\">social@storkks.in</a></p>\r\n<h3>Terms and Conditions: Non cashback coupons</h3>\r\n<p>Offer valid for a single restaurant only. <br>Offer cannot be clubbed with any other scheme <br>Dhaaksh pty ltd reserves the right to cancel/ change/modify/add/delete any of the terms and conditions of the offer at any time without notice <br>Dhaaksh pty ltd (storkks) reserves the right to terminate the offer at any time without notice <br>Dhaaksh pty ltd (storkks) reserves the right to deny honouring the offer on the grounds of suspicion or abuse of the offer by any customer without providing customer any explanation thereof</p>\r\n<p>No refunds/redemptions of coupons/offers offered through the website or the app for cash. <br>In no event shall Dhaaksh pty ltd (storkks) be liable for any abuse or misuse of the code due to the negligence of the customer <br>The services shall be governed by the terms and conditions set out in <a href=\"http://www.storkks.com/terms-and-conditions\">http://www.storkks.com/terms-and-conditions</a> (incorporated by reference) <br>In case of any query regarding the offer, please email us at <a href=\"mailto:social@storkks.in\">social@storkks.in</a></p>\r\n<h3>Terms and Conditions: Cashback coupons</h3>\r\n<p class=\"p1\">Coupon valid on online payments only unless specified otherwise.</p>\r\n<p class=\"p1\">Offer valid for a single restaurant only.</p>\r\n<p class=\"p1\">Offer cannot be clubbed with any other scheme</p>\r\n<p class=\"p1\">Not valid on Cash on Delivery and third party wallet payments.</p>\r\n<p class=\"p1\">Cashback will be received in form of storkks money once order delivery is complete. The cashback will automatically applied on your next order. <br>Offer valid for a single restaurant only. <br>Offer cannot be clubbed with any other scheme</p>\r\n<p class=\"p1\">No refunds/redemptions of coupons/offers offered through the website or the app for cash. <br>Dhaaksh pty ltd reserves the right to cancel/ change/modify/add/delete any of the terms and conditions of the offer at any time without notice <br>Dhaaksh pty ltd (storkks) reserves the right to terminate the offer at any time without notice <br>Dhaaksh pty ltd (storkks) reserves the right to deny honouring the offer on the grounds of suspicion or abuse of the offer by any customer without providing customer any explanation thereof <br>In no event shall Dhaaksh pty ltd (storkks) be liable for any abuse or misuse of the code due to the negligence of the customer <br>The services shall be governed by the terms and conditions set out in <a href=\"http://www.storkks.com/terms-and-conditions\">http://www.storkks.com/terms-and-conditions</a> (incorporated by reference) <br>In case of any query regarding the offer, please email us at <a href=\"mailto:social@storkks.in\">social@storkks.in</a></p>\r\n<p> </p>\r\n<p> </p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', '1', '2018-06-12 14:59:43'),
(6, 'Contact Us', '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `ts_product`
--

CREATE TABLE `ts_product` (
  `id` int(11) NOT NULL,
  `restaurant_id` varchar(10) NOT NULL,
  `restaurant_name` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL,
  `product_Order` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `is_featured` varchar(100) NOT NULL,
  `featured_position` varchar(100) NOT NULL,
  `featured_image` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `m_product_opens` varchar(100) NOT NULL,
  `m_product_close` varchar(100) NOT NULL,
  `e_product_opens` varchar(100) NOT NULL,
  `e_product_close` varchar(100) NOT NULL,
  `pure_veg` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `discount_type` varchar(100) NOT NULL,
  `addons` varchar(100) NOT NULL,
  `addons_price` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modefied_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_product`
--

INSERT INTO `ts_product` (`id`, `restaurant_id`, `restaurant_name`, `product_name`, `description`, `category`, `product_Order`, `product_image`, `is_featured`, `featured_position`, `featured_image`, `price`, `m_product_opens`, `m_product_close`, `e_product_opens`, `e_product_close`, `pure_veg`, `discount`, `discount_type`, `addons`, `addons_price`, `status`, `create_date`, `modefied_date`) VALUES
(6, '19', 'ganga', 'Plain Dosa', 'Plain Dosa', '15', '1', '1527844316food51.jpg', 'on', '1', '1527844316food51.jpg', '20', '', '', '', '', '', '1', 'percentage', '', '', 'enabled', '2018-06-01 11:11:56', 2018),
(9, '19', 'ganga', 'Chicken Biryani', 'Chicken Biryani  test', '18', '1', '152809239751.jpg', 'on', '1', '152809239751.jpg', '155', '', '', '', '', '', '10', 'percentage', '', '', 'Enabled', '2018-06-04 07:57:51', 2018),
(10, '20', 'abiruchi', 'Tomato Bath', 'Tomato Bath', '21', '', '152811455881.jpg', '', '', '152811455881.jpg', '20', '04:50', '11:29', '19:00', '21:00', '1', '1', 'percentage', '13', '20', 'Enabled', '2018-06-04 14:15:58', 2018),
(11, '20', 'abiruchi', 'Curd Rice', 'Curd Rice', '21', '', '152811460951.jpg', '', '', '152811460951.jpg', '25', '09:00', '10:00', '20:00', '21:00', 'gluten_free', '3', 'percentage', '13', '20', 'Enabled', '2018-06-04 14:16:49', 2018),
(12, '23', 'Mahanandi', 'Idly', 'ravva idly', '23', '1', '1528770623Picture11.png', 'on', '', '1528770623Picture11.png', '10', '', '', '', '', '', '10', 'percentage', '', '', 'enabled', '2018-06-12 12:00:23', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `ts_promocods`
--

CREATE TABLE `ts_promocods` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `promo_code` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `promocode_type` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `expiration` varchar(100) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modified_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_promocods`
--

INSERT INTO `ts_promocods` (`id`, `title`, `promo_code`, `discount`, `promocode_type`, `description`, `status`, `expiration`, `create_date`, `modified_date`) VALUES
(1, '', 'TAYA10', '10', 'percent', '', 'EXPIRED', '2018-04-26', '2018-03-19 06:43:23', '2018-03-20 13:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `ts_rbanner`
--

CREATE TABLE `ts_rbanner` (
  `id` int(11) NOT NULL,
  `shop_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `position` int(100) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modified_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_rbanner`
--

INSERT INTO `ts_rbanner` (`id`, `shop_id`, `product_id`, `status`, `banner`, `position`, `create_date`, `modified_date`) VALUES
(1, 7, 2, 'active', '1526454336profile-image.jpg', 4, '2018-03-19 07:10:10', '2018-05-16 09:05:36'),
(3, 11, 3, 'active', '1526454351food1.jpg', 7, '2018-03-19 07:13:57', '2018-05-16 09:05:51'),
(5, 9, 3, 'active', '15264543697.jpg', 5, '2018-03-19 10:44:16', '2018-05-16 09:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `ts_restaurant`
--

CREATE TABLE `ts_restaurant` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Cuisine` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `m_resturant_opens` varchar(100) NOT NULL,
  `m_resturant_close` varchar(100) NOT NULL,
  `e_resturant_opens` varchar(100) NOT NULL,
  `e_resturant_close` varchar(100) NOT NULL,
  `shop_logo` varchar(100) NOT NULL,
  `pure_veg` varchar(10) NOT NULL,
  `min_amount` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `offer_percentage` mediumtext NOT NULL,
  `estimated_delivery_time` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `address` varchar(10000) NOT NULL,
  `paymentmode` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `everyday` varchar(100) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modified_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_restaurant`
--

INSERT INTO `ts_restaurant` (`id`, `name`, `Cuisine`, `phone`, `contact_name`, `email`, `password`, `status`, `m_resturant_opens`, `m_resturant_close`, `e_resturant_opens`, `e_resturant_close`, `shop_logo`, `pure_veg`, `min_amount`, `discount`, `offer_percentage`, `estimated_delivery_time`, `description`, `location`, `address`, `paymentmode`, `latitude`, `longitude`, `everyday`, `create_date`, `modified_date`) VALUES
(19, 'ganga', '8', '1111111111', '', 'viswapriya2@gmail.com', '71681fb18ea283c2e9bf53ae6487a0a9', 'active', '02:00', '18:00', '', '', '1527837090Screen_Shot_2018-03-20_at_2_39_32_PM.png', '1', '15', '', '20', '45', ' ganges North Indian restaurant', '', 'Hobart City Interchange, Hobart TAS, Australia', 'Both', '', '', '1', '2018-06-01 09:11:30', '2018-06-11 12:45:22'),
(20, 'Abiruchi', '8', '9505191822', 'Ravikumar Pulusu', 'abiruchi@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'onboarding', '04:00', '12:00', '20:00', '23:50', '15278378305.jpg', 'no', '1000', '10', '10', '53', 'testing', '', 'Hitex Exhibition Center - Trade Fair Office, Izzathnagar, Kothaguda, Hyderabad, Telangana, India', 'COD', '13.0587107', '80.2757063', '', '2018-06-01 09:23:50', '2018-06-12 16:54:47'),
(21, 'Mainland China', '11', 'woong-4343434567', '', 'mainlandchina@gmail.com', '35a1587e923a330aaa4de6da8049e3d1', 'Active', '10:00', '02:00', '', '', '1527847564chinese.jpg', '0', '20', '', '20', '45', 'Chinese Restaurant', '', 'Macquarie Street, Hobart TAS, Australia', 'COD', '-42.88507', '147.32718160000002', '1', '2018-06-01 12:06:04', '2018-06-01 12:06:04'),
(22, 'mandi', '9,10', '9505191822', 'Ravikumar Pulusu', 'mandi@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'active', '21:00', '17:00', '10:00', '14:00', '1528088992b1.jpg', '0', '599', '', '15', '35', 'test', '', 'RTC X Roads Bus Stop, Indira Park Road, Vivek nagar, Himayatnagar, Hyderabad, Telangana, India', 'COD', '17.407286', '78.49493269999994', '1', '2018-06-04 07:09:52', '2018-06-04 07:09:52'),
(23, 'Mahanandi', '8', '9988567890', 'rama', 'Mahanandi@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'onboarding', '08:00', '15:00', '19:00', '00:00', '1528715839Picture1.png', 'yes', '15', '10', '25', '35', 'specialist in biryani', '', ' west moonah', 'Both', '13.0587107', '80.2757063', '1', '2018-06-11 13:17:19', '2018-06-12 20:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `ts_restaurant_timeings`
--

CREATE TABLE `ts_restaurant_timeings` (
  `id` int(11) NOT NULL,
  `rid` int(100) NOT NULL,
  `m_morning_open` varchar(100) NOT NULL,
  `m_morning_close` varchar(100) NOT NULL,
  `m_evening_open` varchar(100) NOT NULL,
  `m_evening_close` varchar(100) NOT NULL,
  `t_morning_open` varchar(100) NOT NULL,
  `t_morning_close` varchar(100) NOT NULL,
  `t_evening_open` varchar(100) NOT NULL,
  `t_evening_close` varchar(100) NOT NULL,
  `w_morning_open` varchar(100) NOT NULL,
  `w_morning_close` varchar(100) NOT NULL,
  `w_evening_open` varchar(100) NOT NULL,
  `w_eveningclose` varchar(100) NOT NULL,
  `th_morning_open` varchar(100) NOT NULL,
  `th_morning_close` varchar(100) NOT NULL,
  `th_evening_open` varchar(100) NOT NULL,
  `th_evening_close` varchar(100) NOT NULL,
  `f_morning_open` varchar(100) NOT NULL,
  `f_morning_close` varchar(100) NOT NULL,
  `f_evening_open` varchar(100) NOT NULL,
  `f_evening_close` varchar(100) NOT NULL,
  `s_morning_open` varchar(100) NOT NULL,
  `s_morning_close` varchar(100) NOT NULL,
  `s_evening_open` varchar(100) NOT NULL,
  `s_evening_close` varchar(100) NOT NULL,
  `sun_morning_open` varchar(100) NOT NULL,
  `sun_morning_close` varchar(100) NOT NULL,
  `sun_evening_open` varchar(100) NOT NULL,
  `sun_evening_close` varchar(100) NOT NULL,
  `create_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_restaurant_timeings`
--

INSERT INTO `ts_restaurant_timeings` (`id`, `rid`, `m_morning_open`, `m_morning_close`, `m_evening_open`, `m_evening_close`, `t_morning_open`, `t_morning_close`, `t_evening_open`, `t_evening_close`, `w_morning_open`, `w_morning_close`, `w_evening_open`, `w_eveningclose`, `th_morning_open`, `th_morning_close`, `th_evening_open`, `th_evening_close`, `f_morning_open`, `f_morning_close`, `f_evening_open`, `f_evening_close`, `s_morning_open`, `s_morning_close`, `s_evening_open`, `s_evening_close`, `sun_morning_open`, `sun_morning_close`, `sun_evening_open`, `sun_evening_close`, `create_date`) VALUES
(1, 19, '09:00', '23:00', '19:00', '19:00', '10:00', '14:00', '23:00', '23:00', '10:00', '13:00', '10:00', '10:00', '15:00', '23:55', '11:00', '11:00', '17:00', '08:00', '13:00', '23:00', '10:00', '10:00', '13:00', '23:00', '11:00', '14:00', '10:00', '18:00', ''),
(2, 20, '09:00', '12:50', '18:00', '23:00', '04:00', '12:00', '18:00', '22:00', '15:00', '01:00', '11:00', '11:00', '22:00', '02:00', '11:00', '11:00', '20:00', '08:00', '13:00', '23:00', '10:00', '10:00', '13:00', '23:00', '11:00', '00:00', '15:00', '23:00', ''),
(3, 21, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 22, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-06-04 07:09:53'),
(5, 23, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-06-11 13:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `profile_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','2') COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_active` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `country_code`, `phone`, `password`, `profile_image`, `address`, `created`, `modified`, `status`, `is_admin`, `last_active`) VALUES
(2, 'Admin', 'tayatech', 'admin@taya.com', '91', '9505191822', '25f9e794323b453885f5181f1b624d0b', '', '', '2018-03-14 08:20:05', '2018-03-14 08:21:05', '1', '99', ''),
(56, 'pulusu', '', 'pulusuravikumar@gmail.com', '', '9505191800', '1349437e3137826639b4f5165bc7e02b', '', '', '2018-05-21 15:21:15', '2018-06-12 20:58:14', '1', '', '2018-06-12 20:58:14'),
(60, 'visu', '', 'viswapriya2@gmail.com', '', '122301845', '71681fb18ea283c2e9bf53ae6487a0a9', '', '', '2018-05-24 12:19:37', '2018-06-11 23:31:14', '1', '', '2018-06-11 23:31:14'),
(98, 'balen', '', 'visupoo@gmail.com', '', '0129104440', '0e698a8ffc1a0af622c7b4db3cb750cc', '', '', '2018-06-11 08:07:08', '2018-06-11 08:07:08', '1', '', ''),
(99, 'balen', '', 'visupoo@gmail.com', '', '012910444', '0e698a8ffc1a0af622c7b4db3cb750cc', '', '', '2018-06-11 08:10:11', '2018-06-11 08:10:11', '1', '', ''),
(100, 'balen', '', 'test@yahoo.9999999999999999999999999999999999999999999999999999999999999999999999999999999999999999.xom', '', '5555555555', '0e698a8ffc1a0af622c7b4db3cb750cc', '', '', '2018-06-11 08:21:02', '2018-06-11 08:21:02', '1', '', ''),
(101, 'ramkumar', '', 'ramkunar@gmail.com', '', '9505182222', '18b7a168af5230b4e83412645410bc1f', '', '', '2018-06-11 08:53:27', '2018-06-11 08:53:27', '1', '', ''),
(102, 'rajesh', '', 'rajesh@gmail.com', '', '950515821', '18b7a168af5230b4e83412645410bc1f', '', '', '2018-06-11 08:54:22', '2018-06-11 08:54:22', '1', '', ''),
(103, 'test', '', 'test@yahoo.co.co.co.co.co.com', '', '8888888888', '0e698a8ffc1a0af622c7b4db3cb750cc', '', '', '2018-06-11 08:56:00', '2018-06-11 09:00:42', '1', '', '2018-06-11 09:00:42'),
(104, 'test01', '', 'test01@yahoo.com', '', '777777798', '0e698a8ffc1a0af622c7b4db3cb750cc', '', '', '2018-06-11 09:01:34', '2018-06-11 09:01:34', '1', '', ''),
(105, 'balen', '', 'test@yahoo.com', '', '0128888888', '0e698a8ffc1a0af622c7b4db3cb750cc', '', '', '2018-06-11 09:03:46', '2018-06-11 09:08:57', '1', '', '2018-06-11 09:08:57'),
(106, 'test00000000000000000000000000000000000000000000000000000000000000pppppppppppppppppppppppppppppppppp', '', '66666@yahoo.co.co.co', '', '444444444', '0e698a8ffc1a0af622c7b4db3cb750cc', '', '', '2018-06-12 15:20:00', '2018-06-12 15:20:00', '1', '', ''),
(107, 'visu', '', 'viswa@gmail.com', '', '1111111111', '25f9e794323b453885f5181f1b624d0b', '', '', '2018-06-12 18:02:51', '2018-06-12 18:02:51', '1', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custompush`
--
ALTER TABLE `custompush`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_addons`
--
ALTER TABLE `ts_addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_category`
--
ALTER TABLE `ts_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_cuisines`
--
ALTER TABLE `ts_cuisines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_delivery_people`
--
ALTER TABLE `ts_delivery_people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_dispute_manager`
--
ALTER TABLE `ts_dispute_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_favourite`
--
ALTER TABLE `ts_favourite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_noticeboard`
--
ALTER TABLE `ts_noticeboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_order`
--
ALTER TABLE `ts_order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `ts_orderitems`
--
ALTER TABLE `ts_orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_order_details`
--
ALTER TABLE `ts_order_details`
  ADD PRIMARY KEY (`odid`);

--
-- Indexes for table `ts_ordes`
--
ALTER TABLE `ts_ordes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_pages`
--
ALTER TABLE `ts_pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `ts_product`
--
ALTER TABLE `ts_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_promocods`
--
ALTER TABLE `ts_promocods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_rbanner`
--
ALTER TABLE `ts_rbanner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_restaurant`
--
ALTER TABLE `ts_restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_restaurant_timeings`
--
ALTER TABLE `ts_restaurant_timeings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `custompush`
--
ALTER TABLE `custompush`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ts_addons`
--
ALTER TABLE `ts_addons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ts_category`
--
ALTER TABLE `ts_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ts_cuisines`
--
ALTER TABLE `ts_cuisines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ts_delivery_people`
--
ALTER TABLE `ts_delivery_people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ts_dispute_manager`
--
ALTER TABLE `ts_dispute_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ts_favourite`
--
ALTER TABLE `ts_favourite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ts_noticeboard`
--
ALTER TABLE `ts_noticeboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ts_order`
--
ALTER TABLE `ts_order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ts_order_details`
--
ALTER TABLE `ts_order_details`
  MODIFY `odid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `ts_pages`
--
ALTER TABLE `ts_pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ts_product`
--
ALTER TABLE `ts_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ts_promocods`
--
ALTER TABLE `ts_promocods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ts_rbanner`
--
ALTER TABLE `ts_rbanner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ts_restaurant`
--
ALTER TABLE `ts_restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ts_restaurant_timeings`
--
ALTER TABLE `ts_restaurant_timeings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
