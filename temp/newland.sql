-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2015 at 11:09 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`room_id`, `img`, `name`, `description`, `slid`, `disp`, `created_at`, `updated_at`) VALUES
(1, 'images/portfolio/thumb/ccc.jpg', 'Restaurant', 'Restaurant', 'Y', 'Y', '2015-11-11 08:59:56', '2015-11-11 08:59:56'),
(2, 'images/portfolio/thumb/IMG-20151107-WA0002.jpg', 'Reception', 'Reception', 'Y', 'N', '2015-11-11 09:02:15', '2015-11-11 09:02:15'),
(3, 'images/portfolio/thumb/IMG-20151107-WA0019.jpg', 'Bar', 'Bar', 'Y', 'Y', '2015-11-11 09:03:02', '2015-11-11 09:03:02'),
(4, 'images/portfolio/thumb/slider-bg copy.jpg', 'Front View', 'Front View', 'N', 'N', '2015-11-11 09:04:02', '2015-11-11 09:04:02'),
(5, 'images/portfolio/thumb/IMG-20151107-WA0017.jpg', 'Accommodation', 'Accommodation', 'Y', 'Y', '2015-11-11 09:06:00', '2015-11-11 09:06:00'),
(8, '8.jpg', 'Seun', '            hjytfexdf ty5rsezsd                            ', 'N', 'N', '2015-11-17 21:03:42', '2015-11-17 21:03:42'),
(9, '9.jpg', 'KayOh China', 'uytfgghgh yuhg', 'N', 'N', '2015-11-17 21:08:26', '2015-11-17 21:08:26');

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
  `check_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `check_out` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(3) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `sname`, `fname`, `mobile`, `email`, `roomNo_id`, `check_in`, `check_out`, `status`, `created_at`, `updated_at`) VALUES
(19, 'Anene', 'valentine', '4444444444444', 'dhf@ghn.drfg', '17', '2015-11-15 17:45:21', '2015-11-15 17:45:21', 4, '2015-11-13 07:58:47', '2015-11-13 07:58:47'),
(20, 'Kayoh', 'Obi', '6666666', 'eeee@hhh.vo', '9', '2015-11-17 20:58:00', '2015-11-15 17:24:50', 4, '2015-11-13 08:00:22', '2015-11-13 08:00:22'),
(21, 'Anene', 'mh,j', '3333333', 'dhf@ghn.drfg544', '7', '2015-11-17 20:58:00', '2015-11-15 17:24:50', 4, '2015-11-13 08:01:09', '2015-11-13 08:01:09'),
(22, 'esrfrrr', 'cccccc', '999999999999', 'eeee@hhh.vo', '14', '2015-11-17 20:58:00', '2015-11-15 17:24:50', 4, '2015-11-13 08:05:50', '2015-11-13 08:05:50'),
(23, 'fgmhhm', 'rbtnymuyr', '3333333', 'eeee@hhh.vo', '5', '2015-11-17 20:58:00', '2015-11-15 17:24:50', 4, '2015-11-13 08:06:51', '2015-11-13 08:06:51'),
(24, 'esrfrrr', 'rbtnymuyr', '475897', 'dhf@ghn.drfg', '8', '2015-11-17 20:58:00', '2015-11-15 17:24:50', 4, '2015-11-13 08:09:53', '2015-11-13 08:09:53'),
(25, 'dfgh', 'rbtnymuyr', '3333333', 'dhf@ghn.drfg544', '10', '2015-11-16 20:03:45', '2015-11-15 17:24:50', 4, '2015-11-13 08:12:24', '2015-11-13 08:12:24'),
(26, 'esrfrrr', 'rbtnymuyr', '1234566', 'dhf@ghn.drfg544', '6', '2015-11-17 20:58:00', '2015-11-15 17:24:50', 4, '2015-11-13 08:14:20', '2015-11-13 08:14:20'),
(27, 'esrfrrr', 'cccccc', '475897', 'dhf@ghn.drfg544', '15', '2015-11-17 20:58:00', '2015-11-15 17:24:50', 4, '2015-11-13 18:03:23', '2015-11-13 18:03:23');

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
(1, 'hold', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'check_in', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'check_out', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'expired', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

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
(22, 'images/portfolio/thumb/room/IMG-20151107-WA0014.jpg', 'Toilet', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '24.jpg', 'KayOh China', '2', '2015-11-17 20:48:29', '2015-11-17 20:48:29'),
(25, '25.jpg', 'Seun', '3', '2015-11-17 21:08:51', '2015-11-17 21:08:51');

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
(4, 'N104', '3', 0, '2015-11-11 14:33:06', '2015-11-11 14:33:06'),
(5, 'N201', '3', 0, '2015-11-11 14:33:23', '2015-11-13 08:06:52'),
(6, 'N202', '2', 0, '2015-11-11 14:33:47', '2015-11-13 08:14:20'),
(7, 'N203', '3', 0, '2015-11-11 14:34:16', '2015-11-13 08:01:09'),
(8, 'N204', '2', 0, '2015-11-11 14:34:41', '2015-11-13 08:09:53'),
(9, 'N205', '3', 0, '2015-11-11 14:35:18', '2015-11-13 08:00:22'),
(10, 'N206', '3', 0, '2015-11-11 14:35:38', '2015-11-13 08:12:24'),
(11, 'N207', '1', 0, '2015-11-11 14:36:00', '2015-11-11 22:36:00'),
(12, 'N208', '1', 0, '2015-11-11 14:36:10', '2015-11-11 14:36:10'),
(13, 'N301', '3', 0, '2015-11-11 14:37:35', '2015-11-11 14:37:35'),
(14, 'N302', '2', 0, '2015-11-11 14:37:54', '2015-11-13 08:05:50'),
(15, 'N303', '2', 0, '2015-11-11 14:38:09', '2015-11-13 18:03:23'),
(16, 'N304', '1', 0, '2015-11-11 14:38:29', '2015-11-11 14:38:29'),
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
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `admin` int(3) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `surname`, `lastname`, `mobile`, `address`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pascal@yahoo.com', '$2y$10$HgOHJJnlnYJs77vcvzLgf.iWBiDC9BZHNoLJMhn3r6mU.TK3b7Kvm', 'Adigwe', 'Pascal', '0987654322', 'legislative quarters Apo', 1, 'RX0fMSZOpSPNBjMPWozvWfWNUsjYEyMXq3XDYAVm8ERMOi8f7KbHA78zTyfu', '2015-11-14 06:57:05', '2015-11-16 20:46:25'),
(2, 'kingsley4united@yahoo.com', '$2y$10$vPx3xQcskat85jzZ/uZae.TxDRSBNJeGvAEE7xeJE9XET39Re4jgu', 'Chinaka', 'Kingsley', '09077665436', 'ghfcvghf dfvc fgjghfg', 0, 'EOQNrhJZ1oe8oVXCJOakmmBUSVXWD6ZUYMWwc4ecdVWHGdrZBdcSR5HMkXZt', '2015-11-16 18:14:19', '2015-11-16 20:43:59');

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
MODIFY `room_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `reservation_status`
--
ALTER TABLE `reservation_status`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `room_img`
--
ALTER TABLE `room_img`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `room_no`
--
ALTER TABLE `room_no`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `roomExpire` ON SCHEDULE EVERY 1 HOUR STARTS '2015-11-17 21:00:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE room_no SET status = 0
WHERE id IN (SELECT roomNo_id FROM reservation
WHERE NOW() >= DATE_ADD(check_in, INTERVAL 24 HOUR))$$

CREATE DEFINER=`root`@`localhost` EVENT `reservationExpire` ON SCHEDULE EVERY 1 HOUR STARTS '2015-11-17 21:00:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE reservation SET status = 4 
WHERE NOW() >= DATE_ADD(check_in, INTERVAL 24 HOUR)$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
