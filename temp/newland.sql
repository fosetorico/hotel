-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2016 at 07:33 PM
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
  `start_price` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cartegory`
--

INSERT INTO `cartegory` (`id`, `name`, `description`, `image_id`, `price`, `start_price`, `created_at`, `updated_at`) VALUES
(1, 'Super Deluxe', 'Super Deluxe', '54', '17500', '15500', '2015-11-11 11:33:13', '2015-11-11 11:33:13'),
(2, 'Deluxe', 'Deluxe', '50', '15500', '12500', '2015-11-11 11:33:30', '2015-11-11 11:33:30'),
(3, 'Business Suite', 'Business Suite', '46', '25500', '20500', '2015-11-11 11:33:52', '2015-11-11 11:33:52'),
(4, 'Luxury Suite', 'Luxury Suite', '56', '45500', '40500', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Executive Suite', 'Executive Suite', '51', '35500', '30500', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Presidential Suite', 'Presidential Suite', '42', '55500', '50000', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `room_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `slid` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `disp` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`room_id`, `img`, `name`, `description`, `slid`, `disp`, `created_at`, `updated_at`) VALUES
(1, 'IMG-20151107-WA0004.jpg', 'Restaurant', 'Restaurant', 'Y', 'Y', '2015-11-11 08:59:56', '2015-11-11 08:59:56'),
(2, 'IMG-20151107-WA0002.jpg', 'Reception', 'Reception', 'Y', 'N', '2015-11-11 09:02:15', '2015-11-11 09:02:15'),
(3, 'IMG-20151107-WA0019.jpg', 'Bar', 'Bar', 'Y', 'Y', '2015-11-11 09:03:02', '2015-11-11 09:03:02'),
(4, 'slider-bg copy.jpg', 'Front View', 'Front View', 'N', 'N', '2015-11-11 09:04:02', '2015-11-11 09:04:02'),
(5, 'IMG-20151107-WA0017.jpg', 'Accommodation', 'Accommodation', 'Y', 'Y', '2015-11-11 09:06:00', '2015-11-11 09:06:00'),
(14, 'PicsArt_02-10-10.41.56.jpg', 'Stair Way', 'Stair Way', 'Y', 'N', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'IMG-20160205-WA0019.jpg', 'Reception', 'Reception', 'Y', 'N', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'PicsArt_02-10-10.39.45.jpg', 'Reception', 'Reception', 'N', 'N', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'IMG-20151107-WA0018.jpg', 'Walkway', 'Walkway', 'Y', 'N', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'PicsArt_02-10-10.43.41.jpg', 'Walk Way', 'WalkWay', 'Y', 'N', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'ccc.jpg', 'Restaurant', 'Restaurant', 'Y', 'N', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
('2015_11_11_151335_create_room-no_table', 5),
('2015_11_13_180125_create_staffLogin_table', 6),
('2015_11_13_212311_create_users_table', 7),
('2015_11_15_173317_create_reservation_status_table', 8);

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
  `check_in` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `check_out` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(3) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_status`
--

CREATE TABLE IF NOT EXISTS `reservation_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `reservation_status`
--

INSERT INTO `reservation_status` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hold', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Checked In', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Checked Out', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Expired', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=58 ;

--
-- Dumping data for table `room_img`
--

INSERT INTO `room_img` (`id`, `image`, `name`, `cart_id`, `created_at`, `updated_at`) VALUES
(42, 'presidential suite - living room.jpg', 'Living Room.', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'presidential suite - view.jpg', 'Room.', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'presidential suite.jpg', 'Room (Upper View).', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'business suite - adjoining on the right.jpg', 'Adjoining Room On The Right.', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'business suite - with adjoining room on the left.jpg', 'With Adjoining Room On The Left.', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'business suite with adjoining room on the right.jpg', 'With Adjoining Room On The Right.', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'business suite with room on the left.jpg', 'Adjoining Room On The Left.', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'deluxe.jpg', 'Room.', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'deluxe 2.jpg', 'Room (Left View).', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'executive suite - left view.jpg', 'Suite.', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'executive suite - room.jpg', 'Room.', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'IMG-20160219-WA0004.jpg', 'Room(Front View)', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'super deluxe 2.jpg', 'Room(Front View).', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'super deluxe.jpg', 'Room(Side View).', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'lixury suite- room 2.jpg', 'Room.', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'luxury suite- room 1.jpg', 'Suite.', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `room_no`
--

INSERT INTO `room_no` (`id`, `room_no`, `cart_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '101', '2', 0, '2015-11-11 14:32:00', '2015-11-12 09:12:48'),
(2, '102', '1', 0, '2015-11-11 14:32:17', '2015-11-11 14:32:17'),
(3, '103', '2', 0, '2015-11-11 14:32:31', '2015-11-12 10:26:30'),
(4, '104', '1', 0, '2015-11-11 14:33:06', '2015-11-27 10:42:26'),
(5, '105', '1', 0, '2015-11-11 14:33:23', '2015-11-13 08:06:52'),
(6, '106', '1', 0, '2015-11-11 14:33:47', '2015-11-13 08:14:20'),
(7, '201', '2', 0, '2015-11-11 14:34:16', '2015-11-23 20:37:05'),
(8, '202', '1', 0, '2015-11-11 14:34:41', '2015-11-23 20:28:27'),
(9, '203', '2', 0, '2015-11-11 14:35:18', '2015-11-13 08:00:22'),
(10, '204', '1', 0, '2015-11-11 14:35:38', '2015-11-27 14:22:22'),
(11, '205', '1', 0, '2015-11-11 14:36:00', '2015-11-23 21:58:43'),
(12, '206', '1', 0, '2015-11-11 14:36:10', '2015-11-11 14:36:10'),
(13, '207', '1', 0, '2015-11-11 14:37:35', '2015-11-11 14:37:35'),
(14, '208', '1', 0, '2015-11-11 14:37:54', '2015-12-23 03:32:17'),
(15, '209', '2', 0, '2015-11-11 14:38:09', '2015-11-24 19:28:33'),
(16, '210', '2', 0, '2015-11-11 14:38:29', '2015-11-23 20:51:28'),
(17, '211', '2', 0, '2015-11-11 14:38:51', '2015-11-13 07:58:47'),
(18, '212', '2', 0, '2015-11-11 14:39:01', '2015-11-12 09:15:26'),
(19, '220', '4', 0, '2015-11-11 14:39:19', '2015-11-11 14:39:19'),
(20, '301', '2', 0, '2015-11-11 14:39:33', '2015-11-11 14:39:33'),
(21, '302', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '303', '2', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '304', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '305', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '306', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '307', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '308', '3', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '309', '2', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '310', '5', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '311', '2', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '320', '4', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '330', '6', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(3) NOT NULL DEFAULT '0',
  `admin` int(3) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `photo`, `email`, `password`, `surname`, `lastname`, `mobile`, `address`, `status`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '85ed (10).JPG', 'pascal@yahoo.com', '$2y$10$RIA7pULHFucFDfnns3kY2uaSQY6H0lEnCb3wx4pHehLn3rJ5pXysC', 'Adigwe', 'Pascal', '09878776556', 'legislative quarters Apo', 0, 1, 'UkRenDJUMGAp7FpVcapB25kh0a8Meejkvug30Ybvkr1sk2xG74PetDXuHIkf', '2015-11-14 06:57:05', '2015-11-26 22:23:11'),
(2, 'Kul_vee.jpg', 'kingsley4united@yahoo.com', '$2y$10$whfiI51yWfYT3w..a.eXiuyR2ote9TZVLttDkm08QV97FIxPzysIm', 'Chinaka', 'Kingsley', '08996574532', 'ghfcvghf dfvc fgjghfg', 0, 0, 'FCqw3kRtHKojeCzGJC5LS4bJO7Si74uGyqBcYx23DmBWEezv1KhXefY1Af4F', '2015-11-16 18:14:19', '2015-11-27 11:42:06');

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `roomExpire` ON SCHEDULE EVERY 31 MINUTE STARTS '2015-11-17 21:00:00' ON COMPLETION PRESERVE ENABLE DO UPDATE room_no SET status = 0
WHERE id IN (SELECT roomNo_id FROM reservation
WHERE status >= 3)$$

CREATE DEFINER=`root`@`localhost` EVENT `reservationExpire` ON SCHEDULE EVERY 30 MINUTE STARTS '2015-11-17 21:00:00' ON COMPLETION PRESERVE ENABLE DO UPDATE reservation SET status = 4 
WHERE NOW() >= DATE_ADD(check_in, INTERVAL -24 HOUR) AND status = 1$$

CREATE DEFINER=`root`@`localhost` EVENT `roomClose` ON SCHEDULE EVERY 30 MINUTE STARTS '2015-11-29 00:00:00' ON COMPLETION PRESERVE ENABLE DO UPDATE room_no SET status = 1
WHERE id IN (SELECT roomNo_id FROM reservation
WHERE check_in <= DATE_ADD(NOW(), INTERVAL 48 HOUR) AND status = 1) AND status = 0$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
