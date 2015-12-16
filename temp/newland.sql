-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2015 at 03:51 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

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
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
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
`room_id` int(10) unsigned NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `slid` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `disp` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`room_id`, `img`, `name`, `description`, `slid`, `disp`, `created_at`, `updated_at`) VALUES
(1, 'ccc.jpg', 'Restaurant', 'Restaurant', 'Y', 'Y', '2015-11-11 08:59:56', '2015-11-11 08:59:56'),
(2, 'IMG-20151107-WA0002.jpg', 'Reception', 'Reception', 'Y', 'N', '2015-11-11 09:02:15', '2015-11-11 09:02:15'),
(3, 'IMG-20151107-WA0019.jpg', 'Bar', 'Bar', 'Y', 'Y', '2015-11-11 09:03:02', '2015-11-11 09:03:02'),
(4, 'slider-bg copy.jpg', 'Front View', 'Front View', 'N', 'N', '2015-11-11 09:04:02', '2015-11-11 09:04:02'),
(5, 'IMG-20151107-WA0017.jpg', 'Accommodation', 'Accommodation', 'Y', 'Y', '2015-11-11 09:06:00', '2015-11-11 09:06:00'),
(12, '12.png', 'amen', 'eeeee                                        ', 'N', 'N', '2015-11-18 09:09:41', '2015-11-18 09:09:41');

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
`id` int(10) unsigned NOT NULL,
  `sname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roomNo_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `check_in` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `check_out` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(3) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=43 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `sname`, `fname`, `mobile`, `email`, `roomNo_id`, `check_in`, `check_out`, `status`, `created_at`, `updated_at`) VALUES
(19, 'Anene', 'valentine', '4444444444444', 'dhf@ghn.drfg', '17', '2015-11-15 11:04:20', '2015-11-15 17:45:21', 4, '2015-11-13 07:58:47', '2015-11-13 07:58:47'),
(20, 'Kayoh', 'Obi', '6666666', 'eeee@hhh.vo', '9', '2015-12-02 10:52:41', '2015-12-04 17:24:50', 4, '2015-11-13 08:00:22', '2015-11-13 08:00:22'),
(21, 'Anene', 'vallee', '3333333', 'dhf@ghn.drfg544', '7', '2015-12-02 20:37:05', '2015-12-03 17:24:50', 4, '2015-11-13 08:01:09', '2015-11-23 20:37:05'),
(22, 'esrfrrr', 'cccccc', '999999999999', 'eeee@hhh.vo', '14', '2015-12-04 10:52:41', '2015-12-02 17:24:50', 1, '2015-11-13 08:05:50', '2015-11-13 08:05:50'),
(23, 'fgmhhm', 'rbtnymuyr', '3333333', 'eeee@hhh.vo', '5', '2015-12-02 10:52:41', '2015-12-01 17:24:50', 4, '2015-11-13 08:06:51', '2015-11-13 08:06:51'),
(24, 'esrfrrr', 'rbtnymuyr', '475897', 'dhf@ghn.drfg', '8', '2015-11-18 10:52:41', '2015-11-15 17:24:50', 4, '2015-11-13 08:09:53', '2015-11-13 08:09:53'),
(35, 'Opus', 'Daniel', '443332397744', 'john@doe.yosss', '8', '2015-12-02 19:43:22', '2015-12-02 18:13:22', 4, '2015-11-30 18:13:22', '2015-11-30 18:13:22'),
(37, 'aaaaa', 'ssssss', '22222', 'janet@jane.juliet', '8', '2015-12-03 19:05:58', '2015-12-03 19:05:58', 1, '2015-11-30 19:05:58', '2015-11-30 19:05:58'),
(38, 'aaaa', 'qqqqqq', '2222', 'emma@gmail.com', '7', '2015-12-03 11:00:56', '2015-12-04 11:00:56', 4, '2015-12-02 11:00:56', '2015-12-02 11:00:56'),
(39, 'aaaaa', 'ssssss', '2222222', 'sss@gmail.com', '9', '2015-12-03 11:04:31', '2015-12-03 11:04:31', 4, '2015-12-02 11:04:31', '2015-12-02 11:04:32'),
(40, 'ssssss', 'ssssss', '22222', 'inuwa@isiaka.zuma', '10', '2015-12-03 11:07:21', '2015-12-03 11:07:21', 4, '2015-12-02 11:07:21', '2015-12-02 11:07:21'),
(41, 'dddddd', 'cccc', '09077665436', 'george@gmail.com', '13', '2015-12-03 11:08:50', '2015-12-04 11:08:50', 4, '2015-12-02 11:08:50', '2015-12-02 11:08:50'),
(42, 'ccccc', 'dddddd', '2222222', 'ben04@gmail.com', '15', '2015-12-04 11:28:03', '2015-12-04 11:28:03', 1, '2015-12-02 11:28:03', '2015-12-02 11:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_status`
--

CREATE TABLE IF NOT EXISTS `reservation_status` (
`id` int(10) unsigned NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
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
`id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cart_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `room_img`
--

INSERT INTO `room_img` (`id`, `image`, `name`, `cart_id`, `created_at`, `updated_at`) VALUES
(1, 'IMG-20151107-WA0015.jpg', 'Bedroom', '1', '2015-11-11 11:00:16', '2015-11-11 11:00:16'),
(2, 'IMG-20151107-WA0017.jpg', 'Bedroom', '2', '2015-11-11 11:21:32', '2015-11-11 11:21:32'),
(3, 'IMG-20151107-WA0020.jpg', 'Bedroom', '3', '2015-11-11 11:21:58', '2015-11-11 11:21:58'),
(4, 'IMG-20151107-WA0011.jpg', 'Toilet', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'IMG-20151107-WA0013.jpg', 'Suite', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'IMG-20151107-WA0014.jpg', 'Toilet', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'IMG-20151107-WA0021.jpg', 'Suite', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'IMG-20151107-WA0015.jpg', 'Bedroom', '1', '2015-11-11 11:00:16', '2015-11-11 11:00:16'),
(9, 'IMG-20151107-WA0017.jpg', 'Bedroom', '2', '2015-11-11 11:21:32', '2015-11-11 11:21:32'),
(10, 'IMG-20151107-WA0020.jpg', 'Bedroom', '3', '2015-11-11 11:21:58', '2015-11-11 11:21:58'),
(11, 'IMG-20151107-WA0011.jpg', 'Toilet', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'IMG-20151107-WA0013.jpg', 'Suite', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'IMG-20151107-WA0014.jpg', 'Toilet', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'IMG-20151107-WA0015.jpg', 'Bedroom', '1', '2015-11-11 11:00:16', '2015-11-11 11:00:16'),
(15, 'IMG-20151107-WA0017.jpg', 'Bedroom', '2', '2015-11-11 11:21:32', '2015-11-11 11:21:32'),
(16, 'IMG-20151107-WA0020.jpg', 'Bedroom', '3', '2015-11-11 11:21:58', '2015-11-11 11:21:58'),
(17, 'IMG-20151107-WA0015.jpg', 'Bedroom', '1', '2015-11-11 11:00:16', '2015-11-11 11:00:16'),
(18, 'IMG-20151107-WA0017.jpg', 'Bedroom', '2', '2015-11-11 11:21:32', '2015-11-11 11:21:32'),
(19, 'IMG-20151107-WA0020.jpg', 'Bedroom', '3', '2015-11-11 11:21:58', '2015-11-11 11:21:58'),
(20, 'IMG-20151107-WA0011.jpg', 'Toilet', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'IMG-20151107-WA0013.jpg', 'Suite', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'IMG-20151107-WA0014.jpg', 'Toilet', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '32.png', 'amen', '2', '2015-11-18 09:10:47', '2015-11-18 09:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `room_no`
--

CREATE TABLE IF NOT EXISTS `room_no` (
`id` int(10) unsigned NOT NULL,
  `room_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cart_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(3) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `room_no`
--

INSERT INTO `room_no` (`id`, `room_no`, `cart_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'N101', '3', 0, '2015-11-11 14:32:00', '2015-11-12 09:12:48'),
(2, 'N102', '1', 0, '2015-11-11 14:32:17', '2015-11-11 14:32:17'),
(3, 'N103', '2', 0, '2015-11-11 14:32:31', '2015-11-12 10:26:30'),
(4, 'N104', '3', 0, '2015-11-11 14:33:06', '2015-11-27 10:42:26'),
(5, 'N201', '3', 0, '2015-11-11 14:33:23', '2015-11-13 08:06:52'),
(6, 'N202', '2', 0, '2015-11-11 14:33:47', '2015-11-13 08:14:20'),
(7, 'N203', '3', 0, '2015-11-11 14:34:16', '2015-11-23 20:37:05'),
(8, 'N204', '2', 1, '2015-11-11 14:34:41', '2015-11-23 20:28:27'),
(9, 'N205', '3', 0, '2015-11-11 14:35:18', '2015-11-13 08:00:22'),
(10, 'N206', '3', 0, '2015-11-11 14:35:38', '2015-11-27 14:22:22'),
(11, 'N207', '1', 0, '2015-11-11 14:36:00', '2015-11-23 21:58:43'),
(12, 'N208', '1', 0, '2015-11-11 14:36:10', '2015-11-11 14:36:10'),
(13, 'N301', '3', 0, '2015-11-11 14:37:35', '2015-11-11 14:37:35'),
(14, 'N302', '2', 1, '2015-11-11 14:37:54', '2015-11-13 08:05:50'),
(15, 'N303', '2', 1, '2015-11-11 14:38:09', '2015-11-24 19:28:33'),
(16, 'N304', '1', 0, '2015-11-11 14:38:29', '2015-11-23 20:51:28'),
(17, 'N305', '1', 0, '2015-11-11 14:38:51', '2015-11-13 07:58:47'),
(18, 'N306', '1', 0, '2015-11-11 14:39:01', '2015-11-12 09:15:26'),
(19, 'N307', '2', 0, '2015-11-11 14:39:19', '2015-11-11 14:39:19'),
(20, 'N308', '3', 0, '2015-11-11 14:39:33', '2015-11-11 14:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
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
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `photo`, `email`, `password`, `surname`, `lastname`, `mobile`, `address`, `status`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '85ed (10).JPG', 'pascal@yahoo.com', '$2y$10$RIA7pULHFucFDfnns3kY2uaSQY6H0lEnCb3wx4pHehLn3rJ5pXysC', 'Adigwe', 'Pascal', '09878776556', 'legislative quarters Apo', 0, 1, 'UkRenDJUMGAp7FpVcapB25kh0a8Meejkvug30Ybvkr1sk2xG74PetDXuHIkf', '2015-11-14 06:57:05', '2015-11-26 22:23:11'),
(2, 'Kul_vee.jpg', 'kingsley4united@yahoo.com', '$2y$10$whfiI51yWfYT3w..a.eXiuyR2ote9TZVLttDkm08QV97FIxPzysIm', 'Chinaka', 'Kingsley', '08996574532', 'ghfcvghf dfvc fgjghfg', 0, 0, 'FCqw3kRtHKojeCzGJC5LS4bJO7Si74uGyqBcYx23DmBWEezv1KhXefY1Af4F', '2015-11-16 18:14:19', '2015-11-27 11:42:06'),
(4, '4.jpg', 'admin@gmail.com', '$2y$10$PyLQxxGP1MKR3pgIi1aTGe.12gNCWmBwlZxpw38p5.dX6R.63FV7.', 'Jane', 'jhgf', '23456788988', 'ssssss', 0, 0, 'g16wwu54VBdhQWomg76seEOYTEWf4f0KjF0j72kkCDWHUKDLt1ouvDEOYMA0', '2015-11-24 21:34:00', '2015-11-26 18:54:27'),
(5, '5.png', 'admin@gmailu.com', '$2y$10$IqNRk/uiGkXPqnRX2TmX5ODkIj/Ic82qb4Pd3qUChygiHhN8x6QhK', 'ffff', 'jhgf', '233333333', 'ssasx', 0, 0, NULL, '2015-11-24 21:38:03', '2015-11-24 21:38:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartegory`
--
ALTER TABLE `cartegory`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_status`
--
ALTER TABLE `reservation_status`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_img`
--
ALTER TABLE `room_img`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_no`
--
ALTER TABLE `room_no`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartegory`
--
ALTER TABLE `cartegory`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `room_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `reservation_status`
--
ALTER TABLE `reservation_status`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `room_img`
--
ALTER TABLE `room_img`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `room_no`
--
ALTER TABLE `room_no`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `roomExpire` ON SCHEDULE EVERY 31 MINUTE STARTS '2015-11-17 21:00:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE room_no SET status = 0
WHERE id IN (SELECT roomNo_id FROM reservation
WHERE status >= 3)$$

CREATE DEFINER=`root`@`localhost` EVENT `reservationExpire` ON SCHEDULE EVERY 30 MINUTE STARTS '2015-11-17 21:00:00' ON COMPLETION PRESERVE ENABLE DO UPDATE reservation SET status = 4 
WHERE NOW() >= DATE_ADD(check_in, INTERVAL -24 HOUR) AND status = 1$$

CREATE DEFINER=`root`@`localhost` EVENT `roomClose` ON SCHEDULE EVERY 30 MINUTE STARTS '2015-11-29 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE room_no SET status = 1
WHERE id IN (SELECT roomNo_id FROM reservation
WHERE check_in <= DATE_ADD(NOW(), INTERVAL 48 HOUR) AND status = 1) AND status = 0$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
