-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2015 at 07:45 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newland`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartegory`
--

CREATE TABLE IF NOT EXISTS `cartegory` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cartegory`
--

INSERT INTO `cartegory` (`id`, `name`, `description`, `image_id`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Super Deluxe', 'Super Deluxe', '1', '30000', '2015-11-11 11:33:13', '2015-11-11 11:33:13'),
(2, 'Deluxe', 'Deluxe', '2', '20000', '2015-11-11 11:33:30', '2015-11-11 11:33:30'),
(3, 'Standard', 'Standard', '3', '10000', '2015-11-11 11:33:52', '2015-11-11 11:33:52');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `room_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `slid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `disp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`room_id`, `img`, `name`, `description`, `slid`, `disp`, `created_at`, `updated_at`) VALUES
(1, 'images/portfolio/thumb/ccc.jpg', 'Restaurant', 'Restaurant', 'Y', 'Y', '2015-11-11 08:59:56', '2015-11-11 08:59:56'),
(2, 'images/portfolio/thumb/IMG-20151107-WA0002.jpg', 'Reception', 'Reception', 'Y', 'N', '2015-11-11 09:02:15', '2015-11-11 09:02:15'),
(3, 'images/portfolio/thumb/IMG-20151107-WA0019.jpg', 'Bar', 'Bar', 'Y', 'Y', '2015-11-11 09:03:02', '2015-11-11 09:03:02'),
(4, 'images/portfolio/thumb/slider-bg copy.jpg', 'Front View', 'Front View', 'N', 'N', '2015-11-11 09:04:02', '2015-11-11 09:04:02'),
(5, 'images/portfolio/thumb/IMG-20151107-WA0017.jpg', 'Accommodation', 'Accommodation', 'Y', 'Y', '2015-11-11 09:06:00', '2015-11-11 09:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_11_09_095138_create_images_table', 1),
('2015_11_11_104502_create_room-img_table', 2),
('2015_11_11_122601_create_cartegory_table', 3),
('2015_11_11_150001_create_reservation_table', 4),
('2015_11_11_151335_create_room-no_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roomNo_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `sname`, `fname`, `mobile`, `email`, `roomNo_id`, `check_in`, `check_out`, `created_at`, `updated_at`) VALUES
(1, 'dfgh', 'mh,j', '475897', 'dhf@ghn.drfg', '11', '1994-10-14', '4525-08-22', '2015-11-11 22:36:00', '2015-11-11 22:36:00'),
(2, 'Anene', 'valentine', '6789022', 'sssss@wwww.vvv', '8', '1994-10-14', '7447-10-17', '2015-11-12 09:06:28', '2015-11-12 09:06:28'),
(3, 'Anene', 'valentine', '6789022', 'sssss@wwww.vvv', '', '1994-10-14', '7447-10-17', '2015-11-12 09:08:26', '2015-11-12 09:08:26'),
(4, 'Anene', 'valentine', '6789022', 'sssss@wwww.vvv', '', '1994-10-14', '7447-10-17', '2015-11-12 09:08:34', '2015-11-12 09:08:34'),
(5, 'Anene', 'valentine', '6789022', 'sssss@wwww.vvv', '', '1994-10-14', '7447-10-17', '2015-11-12 09:09:00', '2015-11-12 09:09:00'),
(6, 'Anene', 'cccccc', '3333333', 'ggggggggg', '6', '1994-10-14', '4525-08-22', '2015-11-12 09:09:56', '2015-11-12 09:09:56'),
(7, 'Anene', 'cccccc', '3333333', 'ggggggggg', '', '1994-10-14', '4525-08-22', '2015-11-12 09:12:09', '2015-11-12 09:12:09'),
(8, 'Anene', 'cccccc', '3333333', 'ggggggggg', '', '1994-10-14', '4525-08-22', '2015-11-12 09:12:10', '2015-11-12 09:12:10'),
(9, 'Anene', 'valentine', '444444444', 'eeee@hhh.vo', '1', '1994-10-14', '4525-08-22', '2015-11-12 09:12:47', '2015-11-12 09:12:47'),
(10, 'a', 'vbdd', '33333', 'eeee@hhh.vo', '17', '1994-10-14', '4525-08-22', '2015-11-12 09:14:21', '2015-11-12 09:14:21'),
(11, 'Anene', 'valentine', '44444444', 'eeee@hhh.vo', '18', '1994-10-14', '4525-08-22', '2015-11-12 09:15:25', '2015-11-12 09:15:25'),
(12, 'Anene', 'valentine', '44444444', 'eeee@hhh.vo', '', '1994-10-14', '4525-08-22', '2015-11-12 09:15:50', '2015-11-12 09:15:50'),
(13, 'esrfrrr', 'tttttttt', '44444', '666666666', '14', '1994-10-14', '4525-08-22', '2015-11-12 09:16:18', '2015-11-12 09:16:18'),
(14, 'Anene', 'valentine', '555555', 'ggggggg', '15', '1994-10-14', '7447-10-17', '2015-11-12 10:20:03', '2015-11-12 10:20:03'),
(15, 'Anene', 'valentine', '444444', 'gggggggg', '3', '1994-10-14', '4525-08-22', '2015-11-12 10:26:30', '2015-11-12 10:26:30'),
(16, 'Anene', 'valentine', '444444', 'gggggggg', '', '1994-10-14', '4525-08-22', '2015-11-12 10:32:56', '2015-11-12 10:32:56'),
(17, 'Anene', 'valentine', '4444444444444', 'gggggg', '5', '1994-10-14', '4525-08-22', '2015-11-12 10:33:24', '2015-11-12 10:33:24'),
(18, 'Anene', 'valentine', '333333333', 'valle.neutral2015@yahoo.com', '9', '1994-10-14', '4525-08-22', '2015-11-12 10:36:41', '2015-11-12 10:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `room_img`
--

CREATE TABLE IF NOT EXISTS `room_img` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cart_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `room_img`
--

INSERT INTO `room_img` (`id`, `image`, `name`, `cart_id`, `created_at`, `updated_at`) VALUES
(1, 'images/portfolio/thumb/room/IMG-20151107-WA0015.jpg', 'Bedroom', '1', '2015-11-11 11:00:16', '2015-11-11 11:00:16'),
(2, 'images/portfolio/thumb/room/IMG-20151107-WA0017.jpg', 'Bedroom', '2', '2015-11-11 11:21:32', '2015-11-11 11:21:32'),
(3, 'images/portfolio/thumb/room/IMG-20151107-WA0020.jpg', 'Bedroom', '3', '2015-11-11 11:21:58', '2015-11-11 11:21:58'),
(4, 'images/portfolio/thumb/room/IMG-20151107-WA0011.jpg', 'Toilet', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'images/portfolio/thumb/room/IMG-20151107-WA0013.jpg', 'Suite', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'images/portfolio/thumb/room/IMG-20151107-WA0014.jpg', 'Toilet', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'images/portfolio/thumb/room/IMG-20151107-WA0021.jpg', 'Suite', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'images/portfolio/thumb/room/IMG-20151107-WA0015.jpg', 'Bedroom', '1', '2015-11-11 11:00:16', '2015-11-11 11:00:16'),
(9, 'images/portfolio/thumb/room/IMG-20151107-WA0017.jpg', 'Bedroom', '2', '2015-11-11 11:21:32', '2015-11-11 11:21:32'),
(10, 'images/portfolio/thumb/room/IMG-20151107-WA0020.jpg', 'Bedroom', '3', '2015-11-11 11:21:58', '2015-11-11 11:21:58'),
(11, 'images/portfolio/thumb/room/IMG-20151107-WA0011.jpg', 'Toilet', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'images/portfolio/thumb/room/IMG-20151107-WA0013.jpg', 'Suite', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'images/portfolio/thumb/room/IMG-20151107-WA0014.jpg', 'Toilet', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'images/portfolio/thumb/room/IMG-20151107-WA0015.jpg', 'Bedroom', '1', '2015-11-11 11:00:16', '2015-11-11 11:00:16'),
(15, 'images/portfolio/thumb/room/IMG-20151107-WA0017.jpg', 'Bedroom', '2', '2015-11-11 11:21:32', '2015-11-11 11:21:32'),
(16, 'images/portfolio/thumb/room/IMG-20151107-WA0020.jpg', 'Bedroom', '3', '2015-11-11 11:21:58', '2015-11-11 11:21:58'),
(17, 'images/portfolio/thumb/room/IMG-20151107-WA0015.jpg', 'Bedroom', '1', '2015-11-11 11:00:16', '2015-11-11 11:00:16'),
(18, 'images/portfolio/thumb/room/IMG-20151107-WA0017.jpg', 'Bedroom', '2', '2015-11-11 11:21:32', '2015-11-11 11:21:32'),
(19, 'images/portfolio/thumb/room/IMG-20151107-WA0020.jpg', 'Bedroom', '3', '2015-11-11 11:21:58', '2015-11-11 11:21:58'),
(20, 'images/portfolio/thumb/room/IMG-20151107-WA0011.jpg', 'Toilet', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'images/portfolio/thumb/room/IMG-20151107-WA0013.jpg', 'Suite', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'images/portfolio/thumb/room/IMG-20151107-WA0014.jpg', 'Toilet', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `room_no`
--

CREATE TABLE IF NOT EXISTS `room_no` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `room_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cart_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(3) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `room_no`
--

INSERT INTO `room_no` (`id`, `room_no`, `cart_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'N101', '3', 1, '2015-11-11 14:32:00', '2015-11-12 09:12:48'),
(2, 'N102', '1', 1, '2015-11-11 14:32:17', '2015-11-11 14:32:17'),
(3, 'N103', '2', 1, '2015-11-11 14:32:31', '2015-11-12 10:26:30'),
(4, 'N104', '3', 0, '2015-11-11 14:33:06', '2015-11-11 14:33:06'),
(5, 'N201', '3', 1, '2015-11-11 14:33:23', '2015-11-12 10:33:24'),
(6, 'N202', '2', 1, '2015-11-11 14:33:47', '2015-11-12 09:09:57'),
(7, 'N203', '3', 1, '2015-11-11 14:34:16', '2015-11-11 14:34:16'),
(8, 'N204', '2', 1, '2015-11-11 14:34:41', '2015-11-12 09:06:29'),
(9, 'N205', '3', 1, '2015-11-11 14:35:18', '2015-11-12 10:36:41'),
(10, 'N206', '3', 1, '2015-11-11 14:35:38', '2015-11-11 14:35:38'),
(11, 'N207', '1', 1, '2015-11-11 14:36:00', '2015-11-11 22:36:00'),
(12, 'N208', '1', 1, '2015-11-11 14:36:10', '2015-11-11 14:36:10'),
(13, 'N301', '3', 1, '2015-11-11 14:37:35', '2015-11-11 14:37:35'),
(14, 'N302', '2', 1, '2015-11-11 14:37:54', '2015-11-12 09:16:18'),
(15, 'N303', '2', 1, '2015-11-11 14:38:09', '2015-11-12 10:20:03'),
(16, 'N304', '1', 1, '2015-11-11 14:38:29', '2015-11-11 14:38:29'),
(17, 'N305', '1', 1, '2015-11-11 14:38:51', '2015-11-12 09:14:21'),
(18, 'N306', '1', 1, '2015-11-11 14:39:01', '2015-11-12 09:15:26'),
(19, 'N307', '2', 1, '2015-11-11 14:39:19', '2015-11-11 14:39:19'),
(20, 'N308', '3', 1, '2015-11-11 14:39:33', '2015-11-11 14:39:33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
