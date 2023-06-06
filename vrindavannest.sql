-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 05:21 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vrindavannest`
--

-- --------------------------------------------------------

--
-- Table structure for table `about-us`
--

CREATE TABLE IF NOT EXISTS `about-us` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `image` text,
  `description` text,
  `created_on` timestamp NULL DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `about-us`
--

INSERT INTO `about-us` (`ID`, `image`, `description`, `created_on`, `modified_on`) VALUES
(4, 'thumb-1.jpg', 'Vrindavana Nest, Multi Cuisine Pure Veg Restaurant is situated at Katapadi-Udupi on National Highway-66, the highway which runs parallel to Western Ghats and Western Coast connecting 5 state Restaurant is on left of road at katapadi town while entering Udupi from Southern end -mangalgore. Restaurant serving at Katapadi and close to get of Udupi town, the town of Krishna Temple and Ashtamathas, and lends its name to the popular Udupi cuisine.<br>\r\nVrindavana Nest at Katapadi-Udupi, one of the finest fine dine multi cuisine Pure veg Restaurant is being known for its uniqueness in architectural style resembling to the rich coastal culture. It is conceptualized and developed to cater to the leisure travellers, business travellers and those looking for family get together. While the legacy of Vrindavana Veg a popular fast food joint at Kadri, Mangalore continued, ample car parking facility, hygiene wash rooms, greenery and commiteed team will be at its best to serve the guests.', '2020-09-11 02:42:42', '2020-09-13 18:26:42'),
(5, 'thumb-3.jpg', 'Vrindavana Nest, Multi Cuisine Pure Veg Restaurant is situated at Katapadi-Udupi on National Highway-66, the highway which runs parallel to Western Ghats and Western Coast connecting 5 state Restaurant is on left of road at katapadi town while entering Udupi from Southern end -mangalgore. Restaurant serving at Katapadi and close to get of Udupi town, the town of Krishna Temple and Ashtamathas, and lends its name to the popular Udupi cuisine.', '2020-09-12 10:43:22', '2020-09-12 16:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `title` text,
  `sub_title` text,
  `banner_image` text,
  `created_on` timestamp NULL DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`ID`, `title`, `sub_title`, `banner_image`, `created_on`, `modified_on`) VALUES
(12, 'Hungry!!', 'We are here to serve you', '1.png', '2020-09-10 06:02:10', '2020-09-10 11:32:10'),
(14, 'Want to order food???', 'order your food and enjoy the taste', '2.png', '2020-09-10 06:03:00', '2020-09-12 13:36:25'),
(15, 'Healthy Breakfast', 'Looking for fresh and tasty breakfasts and lunches?', '5.png', '2020-09-10 06:03:09', '2020-10-23 12:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `facebook` varchar(20) DEFAULT NULL,
  `twitter` varchar(20) DEFAULT NULL,
  `instagram` varchar(20) DEFAULT NULL,
  `map` text,
  `created_on` timestamp NULL DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `MobileNumber`, `Email`, `facebook`, `twitter`, `instagram`, `map`, `created_on`, `modified_on`) VALUES
(1, 7599990950, 'vrindavan@gmail.com', 'www.facebook/Vrindav', 'www.twitter/Vrindava', 'www.instagram/@vrind', 'src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3883.2429640550167!2d74.74534731437903!3d13.27275169065885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbcbba9a7a35645%3A0xca3b789db5336c84!2sHotel+Vrindavan+Nest!5e0!3m2!1sen!2sin!4v1529597023988"\r\n		', '2020-09-11 09:38:50', '2020-10-05 05:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` text,
  `MobileNumber` varchar(15) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `question` varchar(500) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`ID`, `name`, `MobileNumber`, `Email`, `question`, `created_on`, `modified_on`) VALUES
(1, 'Dharani kumar', '2147483647', 'dharanishfcgcd@gmail.com', 'what is opening time', '2020-09-12 11:32:48', '2020-09-12 17:02:48'),
(12, 'dharani', '9886850203', 'DHARANI@gmail.com', 'timeing', '2020-10-05 00:18:28', '2020-10-05 05:48:28'),
(13, '', '', '', '', '2020-10-23 02:49:52', '2020-10-23 08:19:52'),
(14, '', '', '', '', '2020-10-23 02:55:44', '2020-10-23 08:25:44'),
(15, '', '', '', '', '2020-10-23 02:56:04', '2020-10-23 08:26:04'),
(16, '', '', '', '', '2020-10-23 03:01:14', '2020-10-23 08:31:14'),
(17, '', '', '', '', '2020-10-23 04:16:03', '2020-10-23 09:46:03'),
(18, '', '', '', '', '2020-10-24 02:40:13', '2020-10-24 08:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `gallery_image` text,
  `created_on` timestamp NULL DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`ID`, `gallery_image`, `created_on`, `modified_on`) VALUES
(7, 'thumb-1 (1).jpg', '2020-09-10 10:27:31', '2020-09-12 09:54:08'),
(8, 'thumb-2.jpg', '2020-09-10 10:29:04', '2020-09-10 15:59:04'),
(9, 'thumb-3.jpg', '2020-09-12 07:17:26', '2020-09-12 12:47:26'),
(10, 'thumb-4.png', '2020-09-12 07:17:39', '2020-09-12 12:47:39'),
(11, 'thumb-5.png', '2020-09-12 07:17:55', '2020-09-12 12:47:55'),
(12, 'thumb-6.png', '2020-09-12 07:18:07', '2020-09-12 12:48:07'),
(13, 'thumb-7.png', '2020-09-12 07:18:21', '2020-09-12 12:48:21'),
(14, 'thumb-8.png', '2020-09-12 07:18:36', '2020-09-12 12:48:36'),
(15, 'thumb-9.png', '2020-09-12 07:18:49', '2020-09-12 12:48:49'),
(16, 'thumb-10.png', '2020-09-12 07:19:06', '2020-09-12 12:49:06'),
(17, 'thumb-11.png', '2020-09-12 07:19:26', '2020-09-12 12:49:26'),
(18, 'thumb-12.png', '2020-09-12 07:19:41', '2020-09-12 12:49:41'),
(19, 'thumb-13.png', '2020-09-12 07:19:54', '2020-09-12 12:49:54'),
(20, 'thumb-14.jpg', '2020-09-12 07:20:09', '2020-09-12 12:50:09'),
(21, 'thumb-16.jpg', '2020-09-12 07:20:22', '2020-09-12 12:50:22'),
(22, 'thumb-17.jpg', '2020-09-12 07:20:36', '2020-09-12 12:50:36'),
(23, 'thumb-18.jpg', '2020-09-12 07:20:53', '2020-09-12 12:50:53'),
(24, 'thumb-19.jpg', '2020-09-12 07:21:08', '2020-09-12 12:51:08'),
(25, 'thumb-20.jpg', '2020-09-12 07:21:26', '2020-09-12 12:51:26'),
(26, 'thumb-21.jpg', '2020-09-12 07:22:40', '2020-09-12 12:52:40'),
(27, 'contactbg.jpg', '2020-09-12 07:23:17', '2020-09-12 12:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `menu_name` text,
  `menu_image` text,
  `created_on` timestamp NULL DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `menu_name`, `menu_image`, `created_on`, `modified_on`) VALUES
(1, 'Hot Drink', 'item6.jpg', '2020-09-14 01:20:10', '2020-09-14 06:50:10'),
(2, 'Snacks', 'item2.jpg', '2020-09-14 02:10:47', '2020-09-14 07:40:47'),
(3, 'Dipped', 'item 3.jpeg', '2020-09-14 02:11:10', '2020-09-14 07:41:10'),
(4, 'Dose Items', 'item 4.jpg', '2020-09-14 02:12:54', '2020-09-14 07:42:54'),
(5, 'Chat Items', 'item 5.jpg', '2020-09-14 02:14:13', '2020-09-14 07:44:13'),
(6, 'Pav Bajji', 'Pav-Bhaji.jpg', '2020-09-14 02:18:23', '2020-09-14 07:48:23'),
(7, 'Sandwich ', 'sandwhich.jpg', '2020-09-14 02:19:07', '2020-09-14 07:49:07'),
(8, 'Fresh Fruit Juice', 'fruit-juice.jpg', '2020-09-14 02:19:46', '2020-09-14 07:49:46'),
(9, 'Milk Shake', 'milk-shake.jpg', '2020-09-14 02:20:22', '2020-09-14 07:50:22'),
(10, 'Milk Shake Ice Cream', 'milk-Shake-icecream.jpg', '2020-09-14 02:21:17', '2020-09-14 07:51:17'),
(11, 'Pappad Items', 'PAPPAD.jpg', '2020-09-14 02:21:55', '2020-09-14 07:51:55'),
(12, 'Salads/ Raitha', 'corn-salad.jpg', '2020-09-14 02:22:48', '2020-09-14 07:52:48'),
(13, 'Lassy', 'SweetLassi.jpg', '2020-09-14 02:23:23', '2020-09-14 07:53:23'),
(14, 'Roti Item', 'item4.jpg', '2020-09-15 04:09:43', '2020-09-15 09:39:43'),
(15, 'North Indian Dishes', 'north.jpg', '2020-09-14 02:24:36', '2020-09-14 07:54:36'),
(16, 'Rice Items', 'ghee-rice.jpg', '2020-09-14 02:25:14', '2020-09-14 07:55:14'),
(17, 'Chines Nudels & Rice', 'noodles_food_1.jpg', '2020-09-14 02:26:10', '2020-09-14 07:56:10'),
(18, 'Chines Soup', 'chinese soup.jpg', '2020-09-14 02:26:34', '2020-09-14 07:56:34'),
(19, 'Starter & Gobi Manchuri', 'gobi.jpg', '2020-09-14 02:27:51', '2020-09-14 07:57:51'),
(20, 'Meals', 'item3.jpg', '2020-09-14 02:28:23', '2020-09-14 07:58:23'),
(21, 'Ice Cream', 'icecream3.jpg', '2020-09-14 02:29:07', '2020-09-14 07:59:07');

-- --------------------------------------------------------

--
-- Table structure for table `menu-item`
--

CREATE TABLE IF NOT EXISTS `menu-item` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `item_name` text,
  `cost` int(11) DEFAULT NULL,
  `select` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=310 ;

--
-- Dumping data for table `menu-item`
--

INSERT INTO `menu-item` (`ID`, `item_name`, `cost`, `select`, `created_on`, `modified_on`) VALUES
(2, 'coffee', 20, 1, '2020-09-14 08:17:56', '2020-09-14 13:47:56'),
(7, 'Badam Milk', 20, 1, '2020-09-14 08:32:20', '2020-09-14 14:02:20'),
(8, 'Bournvita', 25, 1, '2020-09-14 08:32:45', '2020-09-14 14:02:45'),
(9, 'Horlicks', 25, 1, '2020-09-14 08:33:02', '2020-09-14 14:03:02'),
(10, 'Kashaya', 20, 1, '2020-09-14 08:33:20', '2020-09-14 14:03:20'),
(11, 'Lemon Tea', 20, 1, '2020-09-14 08:33:34', '2020-09-14 14:03:34'),
(12, 'Milk', 20, 1, '2020-09-14 08:33:46', '2020-09-14 14:03:46'),
(13, 'Tea', 20, 1, '2020-09-14 08:33:57', '2020-09-14 14:03:57'),
(14, 'Ambade', 45, 2, '2020-09-14 08:34:25', '2020-09-14 14:04:25'),
(15, 'Ambade Single', 25, 2, '2020-09-14 08:34:55', '2020-09-14 14:04:55'),
(16, 'Avalakki', 25, 2, '2020-09-14 08:35:21', '2020-09-14 14:05:21'),
(17, 'Banana Podi', 30, 2, '2020-09-14 08:35:50', '2020-09-14 14:05:50'),
(18, 'Bonda Single', 30, 2, '2020-09-14 08:36:11', '2020-09-14 14:06:11'),
(19, 'Buns Single', 20, 2, '2020-09-14 08:36:40', '2020-09-14 14:06:40'),
(20, 'Chapathi Kurma', 75, 2, '2020-09-14 08:37:05', '2020-09-14 14:07:05'),
(21, 'Chow Chow Bath', 40, 2, '2020-09-14 08:37:48', '2020-09-14 14:07:48'),
(22, 'Cutlet- 2', 40, 2, '2020-09-14 08:38:11', '2020-09-14 14:08:11'),
(23, 'Dahi Vada', 40, 2, '2020-09-14 08:38:41', '2020-09-14 14:08:41'),
(24, 'Golibaja Onion Pakoda', 30, 2, '2020-09-14 08:40:15', '2020-09-14 14:10:15'),
(25, 'Idli Thove', 30, 2, '2020-09-14 08:40:35', '2020-09-14 14:10:35'),
(26, 'Idli Vada', 50, 2, '2020-09-14 08:40:57', '2020-09-14 14:10:57'),
(27, 'Idli Vada Thove', 50, 2, '2020-09-14 08:41:27', '2020-09-14 14:11:27'),
(28, 'Kesari Bath', 30, 2, '2020-09-14 08:44:18', '2020-09-14 14:14:18'),
(29, 'Moong', 25, 2, '2020-09-14 08:44:34', '2020-09-14 14:14:34'),
(30, 'Moong Avalakki', 30, 2, '2020-09-14 08:44:56', '2020-09-14 14:14:56'),
(31, 'Podi', 30, 2, '2020-09-14 08:45:12', '2020-09-14 14:15:12'),
(32, 'Pulav', 35, 2, '2020-09-14 08:45:30', '2020-09-14 14:15:30'),
(33, 'Puri Bhaji', 45, 2, '2020-09-14 08:45:50', '2020-09-14 14:15:50'),
(34, 'Pundi', 30, 2, '2020-09-14 08:46:06', '2020-09-14 14:16:06'),
(35, 'Samosa', 40, 2, '2020-09-14 08:46:22', '2020-09-14 14:16:22'),
(36, 'Single Dahi Vada', 25, 2, '2020-09-14 08:56:46', '2020-09-14 14:26:46'),
(37, 'Single Idli', 15, 2, '2020-09-14 08:57:12', '2020-09-14 14:27:12'),
(38, 'Single Idli Vada', 35, 2, '2020-09-14 08:58:12', '2020-09-14 14:28:12'),
(39, 'Single Samosa / Cutlet', 25, 2, '2020-09-14 08:58:49', '2020-09-14 14:28:49'),
(40, 'Steam Idli', 30, 2, '2020-09-14 08:59:34', '2020-09-14 14:29:34'),
(41, 'Upma', 25, 2, '2020-09-14 08:59:57', '2020-09-14 14:29:57'),
(42, 'Upma Avalakki', 30, 2, '2020-09-14 09:01:21', '2020-09-14 14:31:21'),
(43, 'Vada', 40, 2, '2020-09-14 09:02:01', '2020-09-14 14:32:01'),
(44, 'Vada Single', 25, 2, '2020-09-14 09:02:27', '2020-09-14 14:32:27'),
(45, 'Idli Dipped', 35, 3, '2020-09-14 09:05:17', '2020-09-14 14:35:17'),
(46, 'Idli Vada Dipped', 55, 3, '2020-09-14 09:06:10', '2020-09-14 14:36:10'),
(47, 'Single Idli Vada Dipped', 40, 3, '2020-09-14 09:06:42', '2020-09-14 14:36:42'),
(48, 'Butter Masala Dosa', 50, 4, '2020-09-14 09:07:27', '2020-09-14 14:37:27'),
(49, 'Butter Plain Dosa', 40, 4, '2020-09-14 09:08:01', '2020-09-14 14:38:01'),
(50, 'Chees Masala Dosa', 40, 4, '2020-09-14 09:08:48', '2020-09-14 14:38:48'),
(51, 'Chees Plain Dosa', 55, 4, '2020-09-14 09:09:21', '2020-09-14 14:39:21'),
(52, 'Masala Dose', 45, 4, '2020-09-14 09:09:49', '2020-09-14 14:39:49'),
(53, 'Mushroom Masala Dosa', 60, 4, '2020-09-14 09:10:17', '2020-09-14 14:40:17'),
(54, 'Mysore Plain Dosa', 50, 4, '2020-09-14 09:10:59', '2020-09-14 14:40:59'),
(55, 'Neer Dosa', 45, 4, '2020-09-14 09:11:22', '2020-09-14 14:41:22'),
(56, 'Onion Rava Dosa', 50, 4, '2020-09-14 09:11:58', '2020-09-14 14:41:58'),
(57, 'Onion Rava Masala', 55, 4, '2020-09-14 09:12:29', '2020-09-14 14:42:29'),
(58, 'Onion Uttappa', 45, 4, '2020-09-14 09:13:03', '2020-09-14 14:43:03'),
(59, 'Palak Masala Dosa', 50, 4, '2020-09-14 09:13:34', '2020-09-14 14:43:34'),
(60, 'Mysore Masala Dosa', 55, 4, '2020-09-14 09:15:47', '2020-09-14 14:45:47'),
(61, 'Palak Plain Dosa', 45, 4, '2020-09-14 09:16:35', '2020-09-14 14:46:35'),
(62, 'Paneer Butter Masala Dosa', 65, 4, '2020-09-14 09:17:18', '2020-09-14 14:47:18'),
(63, 'Paneer Cheese Dosa', 70, 4, '2020-09-14 09:17:51', '2020-09-14 14:47:51'),
(64, 'Paneer Cheese Butter Dosa', 75, 4, '2020-09-14 09:18:27', '2020-09-14 14:48:27'),
(65, 'Panner Masala Dosa', 60, 4, '2020-09-14 09:19:00', '2020-09-14 14:49:00'),
(66, 'Paper Plain Dosa', 50, 4, '2020-09-14 09:19:25', '2020-09-14 14:49:25'),
(67, 'Paper Masala Dosa', 60, 4, '2020-09-14 09:20:07', '2020-09-14 14:50:07'),
(68, 'Plain Dosa', 35, 4, '2020-09-14 09:20:38', '2020-09-14 14:50:38'),
(69, 'Rava Dosa', 45, 4, '2020-09-14 09:21:03', '2020-09-14 14:51:03'),
(70, 'Rava Masala Dosa', 50, 4, '2020-09-14 09:21:44', '2020-09-14 14:51:44'),
(71, 'Set Dosa', 40, 4, '2020-09-14 09:22:15', '2020-09-14 14:52:15'),
(72, 'Single Neer Dosa', 20, 4, '2020-09-14 09:22:42', '2020-09-14 14:52:42'),
(73, 'Sada Dosa(single)', 20, 4, '2020-09-14 09:23:23', '2020-09-14 14:53:23'),
(75, 'Sada Dosa', 35, 4, '2020-09-14 09:23:48', '2020-09-14 14:53:48'),
(76, 'Tuppa / Ghee Roast Dosa', 45, 4, '2020-09-14 09:24:24', '2020-09-14 14:54:24'),
(77, 'Veg Roll Dosa', 65, 4, '2020-09-14 09:24:45', '2020-09-14 14:54:45'),
(78, 'Bhel Puri', 35, 5, '2020-09-14 09:25:48', '2020-09-14 14:55:48'),
(79, 'Dahi Bhel Puri', 50, 5, '2020-09-14 09:26:22', '2020-09-14 14:56:22'),
(80, 'Dahi Potato Puri', 50, 5, '2020-09-14 09:26:57', '2020-09-14 14:56:57'),
(81, 'Dahi Samosa -1', 50, 5, '2020-09-14 09:27:25', '2020-09-14 14:57:25'),
(82, 'Dahi Sev Puri', 50, 5, '2020-09-14 09:27:53', '2020-09-14 14:57:53'),
(83, 'Masala Puri', 35, 5, '2020-09-14 09:28:12', '2020-09-14 14:58:12'),
(84, 'Pani Puri', 30, 5, '2020-09-14 09:28:31', '2020-09-14 14:58:31'),
(85, 'Ragda Samosa -1', 25, 5, '2020-09-14 09:29:07', '2020-09-14 14:59:07'),
(86, 'Ragda Samosa -2', 50, 5, '2020-09-14 09:29:41', '2020-09-14 14:59:41'),
(87, 'Sev Puri', 35, 5, '2020-09-14 09:30:05', '2020-09-14 15:00:05'),
(88, 'Butter Pav Bhaji', 65, 6, '2020-09-14 09:32:38', '2020-09-14 15:02:38'),
(89, 'Cheese Pav Bhaji', 70, 6, '2020-09-14 09:33:08', '2020-09-14 15:03:08'),
(90, 'Cheese Tawa Pulav', 120, 6, '2020-09-14 09:33:43', '2020-09-14 15:03:43'),
(91, 'Cheese with Butter Pav Baji', 75, 6, '2020-09-14 09:34:27', '2020-09-14 15:04:27'),
(92, 'Dhi Samosa -2', 50, 6, '2020-09-14 09:35:13', '2020-09-14 15:05:13'),
(93, 'Extra Cheese', 20, 6, '2020-09-14 09:35:39', '2020-09-14 15:05:39'),
(94, 'Extra Pav', 15, 6, '2020-09-14 09:36:08', '2020-09-14 15:06:08'),
(95, 'Mushroom tawa Pulav', 110, 6, '2020-09-14 09:36:39', '2020-09-14 15:06:39'),
(96, 'Paneer Tawa Pulav', 110, 6, '2020-09-14 09:37:10', '2020-09-14 15:07:10'),
(97, 'Pav Bajji', 60, 6, '2020-09-14 09:37:38', '2020-09-14 15:07:38'),
(98, 'Tawa Pulav', 100, 6, '2020-09-14 09:37:58', '2020-09-14 15:07:58'),
(99, 'Bread Butter', 20, 7, '2020-09-14 09:38:45', '2020-09-14 15:08:45'),
(100, 'Bread with Jam', 30, 7, '2020-09-14 09:39:12', '2020-09-14 15:09:12'),
(101, 'Toast Sandwich', 40, 7, '2020-09-14 09:39:40', '2020-09-14 15:09:40'),
(102, 'Veg Sandwich', 30, 7, '2020-09-14 09:40:04', '2020-09-14 15:10:04'),
(103, 'Cocktail', 60, 8, '2020-09-14 09:40:36', '2020-09-14 15:10:36'),
(104, 'Fresh Lime Juice', 25, 8, '2020-09-14 09:41:02', '2020-09-14 15:11:02'),
(105, 'Fresh Lime Soda', 30, 8, '2020-09-14 09:41:33', '2020-09-14 15:11:33'),
(106, 'Grape Juice', 50, 8, '2020-09-14 09:42:01', '2020-09-14 15:12:01'),
(107, 'Mara Mari', 50, 8, '2020-09-14 09:42:21', '2020-09-14 15:12:21'),
(108, 'Musambri Juice', 50, 8, '2020-09-14 09:42:58', '2020-09-14 15:12:58'),
(109, 'Musk Mellon', 60, 8, '2020-09-14 09:43:32', '2020-09-14 15:13:32'),
(110, 'Orange Juice', 50, 8, '2020-09-14 09:44:01', '2020-09-14 15:14:01'),
(111, 'Pineapple Juice', 50, 8, '2020-09-14 09:44:41', '2020-09-14 15:14:41'),
(112, 'Water Mellon Juice', 50, 8, '2020-09-14 09:45:07', '2020-09-14 15:15:07'),
(113, 'Apple Milk Shake', 60, 9, '2020-09-14 09:46:12', '2020-09-14 15:16:12'),
(114, 'Badam Cold', 60, 9, '2020-09-14 09:46:36', '2020-09-14 15:16:36'),
(115, 'Banana Milk Shake', 60, 9, '2020-09-14 09:47:03', '2020-09-14 15:17:03'),
(116, 'Butter Scotch Milk Shake', 60, 9, '2020-09-14 09:47:34', '2020-09-14 15:17:34'),
(117, 'Chikku Milk Shake', 60, 9, '2020-09-14 09:48:33', '2020-09-14 15:18:33'),
(118, 'Chocolate Milk Shake', 65, 9, '2020-09-14 09:49:28', '2020-09-14 15:19:28'),
(119, 'Cold Coffee', 60, 9, '2020-09-14 09:50:08', '2020-09-14 15:20:08'),
(120, 'Cold Horlicks', 60, 9, '2020-09-14 09:50:46', '2020-09-14 15:20:46'),
(121, 'Dalimbe Milk Shake', 60, 9, '2020-09-14 09:51:28', '2020-09-14 15:21:28'),
(122, 'Mango Milk Shake(seasonal)', 60, 9, '2020-09-14 09:52:10', '2020-09-14 15:22:10'),
(123, 'Papaya Milk Shake', 60, 9, '2020-09-14 09:52:38', '2020-09-14 15:22:38'),
(124, 'Pista Milk Shake', 65, 9, '2020-09-14 09:53:04', '2020-09-14 15:23:04'),
(125, 'Strawberry Milk Shake(seasonal)', 60, 9, '2020-09-14 09:53:52', '2020-09-14 15:23:52'),
(126, 'Vanila Milk Shake', 60, 9, '2020-09-14 09:54:24', '2020-09-14 15:24:24'),
(127, 'Butter Scotch Milk Shake', 75, 10, '2020-09-14 09:55:58', '2020-09-14 15:25:58'),
(128, 'Chikku Milk Shake', 75, 10, '2020-09-14 09:56:25', '2020-09-14 15:26:25'),
(129, 'Choclate Milk Shake', 75, 10, '2020-09-14 09:58:23', '2020-09-14 15:28:23'),
(130, 'Mango Milk Shake', 75, 10, '2020-09-14 09:58:47', '2020-09-14 15:28:47'),
(131, 'Pista Milk Shake', 75, 10, '2020-09-14 09:59:13', '2020-09-14 15:29:13'),
(132, 'Strawberry Milk Shake', 75, 10, '2020-09-14 10:02:21', '2020-09-14 15:32:21'),
(133, 'Vanila Milk Shake', 70, 10, '2020-09-14 10:17:16', '2020-09-14 15:47:16'),
(134, 'Fry Pappad', 25, 11, '2020-09-14 10:18:15', '2020-09-14 15:48:15'),
(135, 'Masala Pappad', 30, 11, '2020-09-14 10:19:41', '2020-09-14 15:49:41'),
(136, 'Rosted Pappad', 20, 11, '2020-09-14 10:22:11', '2020-09-14 15:52:11'),
(137, 'Boondi Raitha', 50, 12, '2020-09-14 10:23:54', '2020-09-14 15:53:54'),
(138, 'Green Salad', 35, 12, '2020-09-14 10:24:58', '2020-09-14 15:54:58'),
(139, 'Kakada Salad', 35, 12, '2020-09-14 10:26:36', '2020-09-14 15:56:36'),
(140, 'Mixed Raitha', 50, 12, '2020-09-14 10:27:48', '2020-09-14 15:57:48'),
(141, 'Onion Salad', 35, 12, '2020-09-14 10:28:34', '2020-09-14 15:58:34'),
(142, 'Pineapple Raitha', 50, 12, '2020-09-14 10:29:15', '2020-09-14 15:59:15'),
(143, 'Tomato Raitha', 50, 12, '2020-09-14 10:30:10', '2020-09-14 16:00:10'),
(144, 'Tomato Salad', 35, 12, '2020-09-14 10:30:35', '2020-09-14 16:00:35'),
(145, 'Butter Milk', 20, 13, '2020-09-15 00:59:56', '2020-09-15 06:29:56'),
(146, 'Curd', 20, 13, '2020-09-15 01:01:06', '2020-09-15 06:31:06'),
(147, 'Sweet Lassy', 40, 13, '2020-09-15 01:01:34', '2020-09-15 06:31:34'),
(148, 'Salt Lassy', 40, 13, '2020-09-15 01:01:55', '2020-09-15 06:31:55'),
(149, 'Mango Lassy', 60, 13, '2020-09-15 01:02:21', '2020-09-15 06:32:21'),
(159, 'Alu Chana', 90, 15, '2020-09-15 01:21:52', '2020-09-15 06:51:52'),
(160, 'Alu Gobi/ Alu Mutter', 90, 15, '2020-09-15 01:22:15', '2020-09-15 06:52:15'),
(161, 'Alu Palak', 90, 15, '2020-09-15 01:23:01', '2020-09-15 06:53:01'),
(162, 'Bendi Fry', 100, 15, '2020-09-15 01:28:37', '2020-09-15 06:58:37'),
(163, 'Bendi Masala', 90, 15, '2020-09-15 01:29:14', '2020-09-15 06:59:14'),
(164, 'Channa Bathura', 130, 15, '2020-09-15 01:29:32', '2020-09-15 06:59:32'),
(165, 'Channa Masala', 100, 15, '2020-09-15 01:29:53', '2020-09-15 06:59:53'),
(166, 'Dal Fry', 90, 15, '2020-09-15 01:30:08', '2020-09-15 07:00:08'),
(167, 'Dal Kolhapuri', 100, 15, '2020-09-15 01:30:30', '2020-09-15 07:00:30'),
(168, 'Dal Thadka', 100, 15, '2020-09-15 01:30:49', '2020-09-15 07:00:49'),
(169, 'Gobi Masala', 90, 15, '2020-09-15 01:31:08', '2020-09-15 07:01:08'),
(170, 'Green Peas Masala', 100, 15, '2020-09-15 01:31:35', '2020-09-15 07:01:35'),
(171, 'Kaju Masala', 125, 15, '2020-09-15 01:31:54', '2020-09-15 07:01:54'),
(172, 'Kaju Mutter Masala', 125, 15, '2020-09-15 01:32:13', '2020-09-15 07:02:13'),
(173, 'Malai Koftha', 120, 15, '2020-09-15 01:32:38', '2020-09-15 07:02:38'),
(174, 'Mix Veg.Curry', 100, 15, '2020-09-15 01:33:06', '2020-09-15 07:03:06'),
(175, 'Mushroom Butter Masala', 125, 15, '2020-09-15 01:33:28', '2020-09-15 07:03:28'),
(176, 'Mushroom Kadai', 125, 15, '2020-09-15 01:33:48', '2020-09-15 07:03:48'),
(177, 'Mushroom Masala', 120, 15, '2020-09-15 01:34:04', '2020-09-15 07:04:04'),
(178, 'Mushroom Handi', 125, 15, '2020-09-15 01:34:30', '2020-09-15 07:04:30'),
(179, 'Mushroom Tikka Masala', 125, 15, '2020-09-15 01:34:49', '2020-09-15 07:04:49'),
(180, 'Nav. Kurma', 120, 15, '2020-09-15 01:35:08', '2020-09-15 07:05:08'),
(181, 'Paneer Noodels', 100, 15, '2020-09-15 01:35:26', '2020-09-15 07:05:26'),
(182, 'Paneer Handi', 125, 15, '2020-09-15 01:36:21', '2020-09-15 07:06:21'),
(183, 'Paneer Burji', 130, 15, '2020-09-15 01:36:46', '2020-09-15 07:06:46'),
(184, 'Paneer Butter Masala', 110, 15, '2020-09-15 01:37:07', '2020-09-15 07:07:07'),
(185, 'Paneer Channa', 100, 15, '2020-09-15 01:37:25', '2020-09-15 07:07:25'),
(186, 'Paneer Kadai', 120, 15, '2020-09-15 01:37:44', '2020-09-15 07:07:44'),
(187, 'Paneer Koftha', 125, 15, '2020-09-15 01:38:05', '2020-09-15 07:08:05'),
(188, 'Paneer Kolhapuri', 120, 15, '2020-09-15 01:38:29', '2020-09-15 07:08:29'),
(189, 'Paneer Makkan Wala', 110, 15, '2020-09-15 01:38:50', '2020-09-15 07:08:50'),
(190, 'Paneer Mutter Masala', 100, 15, '2020-09-15 01:39:09', '2020-09-15 07:09:09'),
(191, 'Paneer Palak', 120, 15, '2020-09-15 01:39:30', '2020-09-15 07:09:30'),
(192, 'Paneer Tikka Masala', 120, 15, '2020-09-15 01:39:49', '2020-09-15 07:09:49'),
(193, 'Plain Palak', 120, 15, '2020-09-15 01:40:06', '2020-09-15 07:10:06'),
(194, 'Tomato Burji', 100, 15, '2020-09-15 01:40:42', '2020-09-15 07:10:42'),
(195, 'Tomato Paneer', 125, 15, '2020-09-15 01:41:01', '2020-09-15 07:11:01'),
(196, 'Veg Kadai', 120, 15, '2020-09-15 01:41:16', '2020-09-15 07:11:16'),
(197, 'Veg. Makkanwala', 100, 15, '2020-09-15 01:41:42', '2020-09-15 07:11:42'),
(198, 'Veg. Shahi Kurma', 110, 15, '2020-09-15 01:42:07', '2020-09-15 07:12:07'),
(199, 'Veg. Kolhapuri', 100, 15, '2020-09-15 01:42:32', '2020-09-15 07:12:32'),
(200, 'Vrindavan Special Veg', 140, 15, '2020-09-15 01:42:53', '2020-09-15 07:12:53'),
(201, 'Cashewnut Rice', 120, 16, '2020-09-15 01:44:21', '2020-09-15 07:14:21'),
(202, 'Curd Rice', 75, 16, '2020-09-15 01:44:41', '2020-09-15 07:14:41'),
(203, 'Dal Kichidi', 120, 16, '2020-09-15 01:45:01', '2020-09-15 07:15:01'),
(204, 'Ghee Rice', 100, 16, '2020-09-15 01:45:22', '2020-09-15 07:15:22'),
(205, 'Green Peas Palav', 100, 16, '2020-09-15 01:46:12', '2020-09-15 07:16:12'),
(206, 'Jeera Rice', 90, 16, '2020-09-15 01:46:29', '2020-09-15 07:16:29'),
(207, 'Kashmiri Palav', 120, 16, '2020-09-15 01:46:50', '2020-09-15 07:16:50'),
(208, 'Kashmiri Palav', 120, 16, '2020-09-15 01:46:52', '2020-09-15 07:16:52'),
(209, 'Mushroom Biriyni', 130, 16, '2020-09-15 01:47:16', '2020-09-15 07:17:16'),
(210, 'Palak Rice', 120, 16, '2020-09-15 01:47:33', '2020-09-15 07:17:33'),
(211, 'Paneer Biriyani', 130, 16, '2020-09-15 01:47:53', '2020-09-15 07:17:53'),
(212, 'Paneer Palav ', 110, 16, '2020-09-15 01:48:15', '2020-09-15 07:18:15'),
(213, 'Veg Biriyani', 120, 16, '2020-09-15 01:48:33', '2020-09-15 07:18:33'),
(214, 'Veg Palav', 100, 16, '2020-09-15 01:48:47', '2020-09-15 07:18:47'),
(215, 'Vrindavan Special Biriyani', 130, 16, '2020-09-15 01:49:12', '2020-09-15 07:19:12'),
(216, 'American Chups', 120, 17, '2020-09-15 01:50:05', '2020-09-15 07:20:05'),
(217, 'Fried Noodles', 110, 17, '2020-09-15 01:50:26', '2020-09-15 07:20:26'),
(218, 'Garlic Fried Rice', 100, 17, '2020-09-15 01:50:54', '2020-09-15 07:20:54'),
(219, 'Ginger Fried Rice', 100, 17, '2020-09-15 01:51:13', '2020-09-15 07:21:13'),
(220, 'Jeera Fried Rice', 100, 17, '2020-09-15 01:51:31', '2020-09-15 07:21:31'),
(221, 'Mushroom Fried Rice', 120, 17, '2020-09-15 01:51:50', '2020-09-15 07:21:50'),
(222, 'Mushroom Noodles', 120, 17, '2020-09-15 01:52:14', '2020-09-15 07:22:14'),
(223, 'Paneer Fried Rice', 120, 17, '2020-09-15 01:52:35', '2020-09-15 07:22:35'),
(224, 'Paneer Mushroom Fried Rice', 130, 17, '2020-09-15 01:53:01', '2020-09-15 07:23:01'),
(225, 'Paneer Mushroom Noodles', 130, 17, '2020-09-15 01:53:26', '2020-09-15 07:23:26'),
(226, 'Paneer Noodles', 120, 17, '2020-09-15 01:53:51', '2020-09-15 07:23:51'),
(227, 'Schezwan Noodles', 110, 17, '2020-09-15 01:54:15', '2020-09-15 07:24:15'),
(228, 'Schezwan Fried Rice', 110, 17, '2020-09-15 01:54:48', '2020-09-15 07:24:48'),
(229, 'Singapore Fried Rice', 130, 17, '2020-09-15 01:55:08', '2020-09-15 07:25:08'),
(230, 'Veg. Fried Rice', 100, 17, '2020-09-15 01:55:30', '2020-09-15 07:25:30'),
(231, 'Veg. Chowmein', 120, 17, '2020-09-15 01:55:53', '2020-09-15 07:25:53'),
(232, 'Veg. Noodles', 100, 17, '2020-09-15 01:56:09', '2020-09-15 07:26:09'),
(233, 'Vrindavan Special Fried Rice', 130, 17, '2020-09-15 01:56:34', '2020-09-15 07:26:34'),
(234, 'Tripple Schezwan Noodles', 150, 17, '2020-09-15 01:57:03', '2020-09-15 07:27:03'),
(235, 'Tripple Schezwan Rice', 150, 17, '2020-09-15 01:57:24', '2020-09-15 07:27:24'),
(236, 'Cream of Mushroom Soup', 65, 18, '2020-09-15 01:58:12', '2020-09-15 07:28:12'),
(237, 'Cream of Tomato Soup', 60, 18, '2020-09-15 01:58:46', '2020-09-15 07:28:46'),
(238, 'French Onion Soup', 50, 18, '2020-09-15 01:59:12', '2020-09-15 07:29:12'),
(239, 'Green Peas Soup', 50, 18, '2020-09-15 01:59:36', '2020-09-15 07:29:36'),
(240, 'Hot & Sour Soup', 60, 18, '2020-09-15 02:00:08', '2020-09-15 07:30:08'),
(241, 'Manchow Soup', 60, 18, '2020-09-15 02:00:36', '2020-09-15 07:30:36'),
(242, 'Mushroom Clear Soup', 60, 18, '2020-09-15 02:01:04', '2020-09-15 07:31:04'),
(243, 'Noodles Clear Soup', 50, 18, '2020-09-15 02:01:26', '2020-09-15 07:31:26'),
(244, 'Schezwon Soup', 60, 18, '2020-09-15 02:01:50', '2020-09-15 07:31:50'),
(245, 'Tomato Clear Soup', 50, 18, '2020-09-15 02:02:11', '2020-09-15 07:32:11'),
(246, 'Veg. Clear Soup', 50, 18, '2020-09-15 02:02:39', '2020-09-15 07:32:39'),
(247, 'Veg. Soup', 50, 18, '2020-09-15 02:02:53', '2020-09-15 07:32:53'),
(248, 'Baby Corn Manchuri Gravy', 120, 19, '2020-09-15 02:04:22', '2020-09-15 07:34:22'),
(249, 'Baby Corn Chilly Dry', 120, 19, '2020-09-15 02:04:51', '2020-09-15 07:34:51'),
(250, 'Baby Corn Manchurian', 110, 19, '2020-09-15 02:05:19', '2020-09-15 07:35:19'),
(251, 'Baby Corn Pepper', 120, 19, '2020-09-15 02:05:44', '2020-09-15 07:35:44'),
(252, 'Gobi -65', 100, 19, '2020-09-15 02:06:02', '2020-09-15 07:36:02'),
(253, 'Gobi Manchurian', 90, 19, '2020-09-15 02:06:24', '2020-09-15 07:36:24'),
(254, 'Gobi Manchurian Gravy', 100, 19, '2020-09-15 02:06:52', '2020-09-15 07:36:52'),
(255, 'Gobi Pepper /Chilli', 100, 19, '2020-09-15 02:07:15', '2020-09-15 07:37:15'),
(256, 'Idli Chilly Dry', 100, 19, '2020-09-15 02:07:41', '2020-09-15 07:37:41'),
(257, 'Mushroom-65', 120, 19, '2020-09-15 02:08:05', '2020-09-15 07:38:05'),
(258, 'Mushroom Chilly', 130, 19, '2020-09-15 02:08:27', '2020-09-15 07:38:27'),
(259, 'Mushroom Ghee Rost', 140, 19, '2020-09-15 02:08:52', '2020-09-15 07:38:52'),
(260, 'Mushroom Manchurian', 120, 19, '2020-09-15 02:09:16', '2020-09-15 07:39:16'),
(261, 'Mushroom Manchurian Gravy', 120, 19, '2020-09-15 02:09:40', '2020-09-15 07:39:40'),
(262, 'Mushroom Pepper', 120, 19, '2020-09-15 02:09:58', '2020-09-15 07:39:58'),
(263, 'Paneer Manchurian Gravy', 130, 19, '2020-09-15 02:10:33', '2020-09-15 07:40:33'),
(264, 'Paneer Chilly Dry', 120, 19, '2020-09-15 02:10:59', '2020-09-15 07:40:59'),
(265, 'Paneer Chilly Gravy', 135, 19, '2020-09-15 02:11:26', '2020-09-15 07:41:26'),
(266, 'Paneer Garlic', 120, 19, '2020-09-15 02:11:43', '2020-09-15 07:41:43'),
(267, 'Paneer Ghee Rost', 140, 19, '2020-09-15 02:12:02', '2020-09-15 07:42:02'),
(268, 'Paneer Manchurian Dry', 120, 19, '2020-09-15 02:12:23', '2020-09-15 07:42:23'),
(269, 'Paneer Pepper', 130, 19, '2020-09-15 02:12:56', '2020-09-15 07:42:56'),
(270, 'Paneer -65', 120, 19, '2020-09-15 02:13:13', '2020-09-15 07:43:13'),
(271, 'Veg Manchurian Dry', 100, 19, '2020-09-15 02:13:41', '2020-09-15 07:43:41'),
(272, 'Paneer/Mushroom Tikka Dry', 120, 19, '2020-09-15 02:14:16', '2020-09-15 07:44:16'),
(273, 'South Indian Meals', 60, 20, '2020-09-15 02:14:40', '2020-09-15 07:44:40'),
(274, 'North Indian Meals', 150, 20, '2020-09-15 02:15:05', '2020-09-15 07:45:05'),
(275, 'Butter Scotch/Chocolate/Pista(Cup)', 0, 21, '2020-09-15 02:16:33', '2020-09-15 07:46:33'),
(276, 'Butter Scotch 1/2 Ltr.', 0, 21, '2020-09-15 02:17:17', '2020-09-15 07:47:17'),
(277, 'Cassatta', 0, 21, '2020-09-15 02:17:33', '2020-09-15 07:47:33'),
(278, 'Cone', 0, 21, '2020-09-15 02:17:50', '2020-09-15 07:47:50'),
(279, 'Mini Sundee', 0, 21, '2020-09-15 02:18:13', '2020-09-15 07:48:13'),
(280, 'Strawberry 1/2 Lts', 0, 21, '2020-09-15 02:18:54', '2020-09-15 07:48:54'),
(281, 'Tripple Sundee', 0, 21, '2020-09-15 02:19:13', '2020-09-15 07:49:13'),
(282, 'Twister', 0, 21, '2020-09-15 02:19:28', '2020-09-15 07:49:28'),
(283, 'Vanilla/ Strawberry(cup)', 0, 21, '2020-09-15 02:19:58', '2020-09-15 07:49:58'),
(284, 'Vanilla Half Ltr', 0, 21, '2020-09-15 02:20:25', '2020-09-15 07:50:25'),
(285, 'Real alphonso Candy', 0, 21, '2020-09-15 02:20:57', '2020-09-15 07:50:57'),
(286, 'Limbous Candy', 0, 21, '2020-09-15 02:21:37', '2020-09-15 07:51:37'),
(287, 'Mango Candy', 0, 21, '2020-09-15 02:21:55', '2020-09-15 07:51:55'),
(288, 'Grape Candy', 0, 21, '2020-09-15 02:22:21', '2020-09-15 07:52:21'),
(289, 'Junior Sundae 100ml', 0, 21, '2020-09-15 02:22:49', '2020-09-15 07:52:49'),
(290, 'Mango', 0, 21, '2020-09-15 02:23:01', '2020-09-15 07:53:01'),
(291, 'Black currant', 0, 21, '2020-09-15 02:23:29', '2020-09-15 07:53:29'),
(292, 'Fruit Punch', 0, 21, '2020-09-15 02:23:49', '2020-09-15 07:53:49'),
(293, 'Strawbery', 0, 21, '2020-09-15 02:24:08', '2020-09-15 07:54:08'),
(294, 'Chocolate', 0, 21, '2020-09-15 02:24:21', '2020-09-15 07:54:21'),
(295, 'Cones 120ml', 0, 21, '2020-09-15 02:24:56', '2020-09-15 07:54:56'),
(296, 'Fruit Fusion', 0, 21, '2020-09-15 02:25:30', '2020-09-15 07:55:30'),
(297, 'Butterscotch', 0, 21, '2020-09-15 02:25:54', '2020-09-15 07:55:54'),
(298, 'Belgium Chocolate', 0, 21, '2020-09-15 02:26:14', '2020-09-15 07:56:14'),
(299, 'Roti', 20, 14, '2020-09-15 04:13:44', '2020-09-15 09:43:44'),
(300, 'Nan', 25, 14, '2020-09-15 04:13:59', '2020-09-15 09:43:59'),
(301, 'Parota', 30, 14, '2020-09-15 04:14:17', '2020-09-15 09:44:17'),
(302, 'Alu Parota', 40, 14, '2020-09-15 04:14:38', '2020-09-15 09:44:38'),
(303, 'Kulcha', 25, 14, '2020-09-15 04:15:01', '2020-09-15 09:45:01'),
(304, 'Butter Kulcha', 30, 14, '2020-09-15 04:15:26', '2020-09-15 09:45:26'),
(305, 'Masala Kulcha', 45, 14, '2020-09-15 04:15:46', '2020-09-15 09:45:46'),
(306, 'Butter Roti', 25, 14, '2020-09-15 04:16:12', '2020-09-15 09:46:12'),
(307, 'Butter Nan', 30, 14, '2020-09-15 04:16:39', '2020-09-15 09:46:39'),
(308, 'Stuff Parota', 45, 14, '2020-09-15 04:16:56', '2020-09-15 09:46:56'),
(309, 'samosa', 20, 2, '2020-10-03 02:30:33', '2020-10-03 08:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` text,
  `cost` int(11) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `AdminName` char(50) DEFAULT NULL,
  `UserName` char(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `regdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `regdate`) VALUES
(12, 'Dharani Kumar', 'Dharani', 9886850203, 'dharanishdharani155@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-09-09 05:39:43'),
(13, 'Dharani kumar', 'dharanii', 9886850203, 'dharanishd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-09-10 02:44:54'),
(14, 'rascal', 'dharani kumar', 9886850203, 'dharanishdharani155@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2021-01-27 00:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` text,
  `Email` varchar(50) DEFAULT NULL,
  `MobileNumber` bigint(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `people` bigint(6) DEFAULT NULL,
  `requirement` varchar(300) DEFAULT NULL,
  `created-on` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ID`, `name`, `Email`, `MobileNumber`, `date`, `time`, `people`, `requirement`, `created-on`) VALUES
(24, 'Dharani kumar', 'dharanishd@gmail.com', 9886850203, '2020-10-22', '11:23:00', 2, 'no', '2020-10-03 02:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `servise`
--

CREATE TABLE IF NOT EXISTS `servise` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `title` text,
  `icon` text,
  `description` text,
  `created_on` timestamp NULL DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `servise`
--

INSERT INTO `servise` (`ID`, `title`, `icon`, `description`, `created_on`, `modified_on`) VALUES
(1, 'Fast Service', 'fas fa-shipping-fast', 'You will get good within 20 min after ordering in online .', '2020-09-12 01:35:08', '2020-09-12 07:05:08'),
(2, 'Great Taste', 'fas fa-hamburger', ' You will get your home taste so you will not face any health problem. ', '2020-09-12 01:36:00', '2020-09-12 07:06:00'),
(3, 'Online Payment', 'fab fa-amazon-pay', 'You can pay your bill through online and also cash on delivery', '2020-09-12 01:36:44', '2020-09-12 07:06:44'),
(4, 'Best Delivery', 'fas fa-truck', 'You will get your food on time so u can fell the taste of our food.', '2020-09-12 01:37:17', '2020-09-12 07:07:17'),
(5, 'Good Offer', 'fas fa-gift', 'You will get some special offer for your food on special days.', '2020-09-12 01:37:51', '2020-09-12 07:07:51'),
(6, 'Customer Friendly', 'fas fa-user-friends', 'You can mention about the Food in review section so we can fix the problem.', '2020-09-12 01:38:27', '2020-09-12 07:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `tdy-spl`
--

CREATE TABLE IF NOT EXISTS `tdy-spl` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `title` text,
  `tdy_image` text,
  `created_on` timestamp NULL DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tdy-spl`
--

INSERT INTO `tdy-spl` (`ID`, `title`, `tdy_image`, `created_on`, `modified_on`) VALUES
(1, 'Breakfast', 'breakfast-menu.png', '2020-09-12 04:57:43', '2020-09-12 10:27:43'),
(2, 'Lunch', 'lunch-menu.png', '2020-09-12 04:58:22', '2020-09-12 10:28:22'),
(3, 'Dinner', 'dinner-menu.png', '2020-09-12 04:58:45', '2020-09-12 10:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `tdy-spl-item`
--

CREATE TABLE IF NOT EXISTS `tdy-spl-item` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` text,
  `image` varchar(50) DEFAULT NULL,
  `select` int(10) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tdy-spl-item`
--

INSERT INTO `tdy-spl-item` (`ID`, `name`, `image`, `select`, `created_on`) VALUES
(1, 'Idly', 'item 3.jpeg', 1, '2020-09-26 00:51:48'),
(2, 'Dose', 'item 4.jpg', 1, '2020-09-26 03:27:38'),
(3, 'Palav', 'veg-BIRYANI.png', 1, '2020-09-26 03:28:25'),
(4, 'Pongal', 'ven-pongal.jpg', 1, '2020-09-26 03:28:51'),
(5, 'Puri', 'bedmi-puri.jpg', 1, '2020-09-26 03:29:32'),
(6, 'Full Meal', 'item3.jpg', 2, '2020-09-26 03:30:27'),
(7, 'North Indian Special', 'north.jpg', 2, '2020-09-26 03:31:19'),
(9, 'Chapathi', 'Roti.jpg', 3, '2020-09-26 03:37:56'),
(10, 'Fried Rice', 'vegetable-fried-rice.jpg', 3, '2020-09-26 03:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `tesinomial`
--

CREATE TABLE IF NOT EXISTS `tesinomial` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `name` text,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `message` text,
  `created_on` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tesinomial`
--

INSERT INTO `tesinomial` (`ID`, `name`, `email`, `address`, `image`, `message`, `created_on`) VALUES
(7, 'RADHA VALLABHA', 'radhavallabha@gmail.com', 'Kannur, Kasarag', 'feed-2.jpg', 'Clean and hygiene veg restaurant...they have been utilised the place properly for the purpose of eating n preparing food/juice', '2020-09-25 07:30:53'),
(8, 'PRAJWAL NAGA', 'prajwalnaga@gmail.com', 'Rajaji Nagar, Bangalore', 'feed-1.jpg', 'Good food and decent ambience.. Despite being crowded most of the times, since it is right by the bus stand wait time is less.', '2020-09-25 07:32:14'),
(10, 'BHOJARAJ', 'bhojaraj@gmail.com', 'Kunigal', 'feed-3.jpg', 'Gud place but closes ar 11 pm only so non accessable at late hours would have been better if available uptill 11:30pm', '2020-09-25 07:33:34'),
(17, 'Dharani kumar', 'dharanishd@gmail.com', 'Hiriyur ,Chitra durga', '1538444127398.jpg', 'good in taste', '2020-10-23 02:41:22');

-- --------------------------------------------------------

--
-- Table structure for table `top-item`
--

CREATE TABLE IF NOT EXISTS `top-item` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `title` text,
  `top_image` text,
  `created_on` timestamp NULL DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `top-item`
--

INSERT INTO `top-item` (`ID`, `title`, `top_image`, `created_on`, `modified_on`) VALUES
(3, 'North Indian Special', 'north.jpg', '2020-09-12 04:30:53', '2020-09-12 10:00:53'),
(4, 'South Indian Special', 'item3.jpg', '2020-09-12 04:36:56', '2020-09-12 10:06:56'),
(7, 'Ven Pongal', 'venpongal.jpg', '2020-09-12 04:44:11', '2020-09-12 10:14:11'),
(8, 'Pesarattu', 'Pesarattu.jpg', '2020-09-12 04:46:10', '2020-09-12 10:16:10'),
(9, 'Mashroom Pakora', 'mushroom.png', '2020-09-12 04:46:36', '2020-09-12 10:16:36'),
(10, 'Cutlet', 'cutli.jpg', '2020-09-12 04:47:04', '2020-09-12 10:17:04'),
(11, 'Veg-Manchurian', 'gobi.jpg', '2020-09-12 04:47:30', '2020-09-12 10:17:30'),
(12, 'Ice cream', 'icecream3.jpg', '2020-09-12 04:47:58', '2020-09-12 10:17:58');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
