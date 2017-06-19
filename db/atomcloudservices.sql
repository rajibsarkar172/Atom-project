-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2017 at 12:30 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atomcloudservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_contants`
--

DROP TABLE IF EXISTS `about_contants`;
CREATE TABLE `about_contants` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sub_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about_contants`
--

INSERT INTO `about_contants` (`id`, `title`, `sub_title`, `description`, `status`, `date`) VALUES
(9, 'ABOUT US', '', '<p>Atom AP is the current fast growing it industry in bangladesh and leading the service of Cloud computing.</p>', 1, '2016-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `contact_setting`
--

DROP TABLE IF EXISTS `contact_setting`;
CREATE TABLE `contact_setting` (
  `id` int(11) NOT NULL,
  `smtp_host` varchar(200) NOT NULL,
  `smtp_port` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'smtp'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_setting`
--

INSERT INTO `contact_setting` (`id`, `smtp_host`, `smtp_port`, `email`, `password`, `type`) VALUES
(8, 'mail.atomapgroup.com', 25, 'rajib.sarkar@atomapgroup.com', 'rajib172', 'smtp');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sub_title` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `orginal_picture` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `thumb_picture` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `sub_title`, `description`, `orginal_picture`, `thumb_picture`, `status`, `date`) VALUES
(4, 'mithuff', 'chandra nath', '<p>asfa asdf asf asa fasf asf&nbsp; saf asf</p>', 'http://localhost/malmudden/uploads/headercontent/12998493_10206199495326964_8721044679409838129_n.jpg', 'http://localhost/malmudden/uploads/headercontent/thumbs/12998493_10206199495326964_8721044679409838129_n.jpg', 2, '2016-04-19'),
(5, 'tt', 'y', '<p>y</p>', 'http://localhost/malmudden/uploads/headercontent/unnamed.png', 'http://localhost/malmudden/uploads/headercontent/thumbs/unnamed.png', 2, '2016-04-19'),
(6, 'WELCOME TO PMC', 'Contrary to popular belief.Lorem Ipsum is not simply', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sodales eros quam, sed congue nisi tincidunt at. Pellentesque a euismod orci. Sed et orci sed magna vulputate posuere. Pellentesque quis diam at augue euismod vestibulum sit amet vitae felis. Suspendisse pharetra, turpis cursus facilisis rutrum, erat erat pellentesque felis, non aliquam magna augue fringilla augue. Vivamus vitae arcu posuere, congue augue sed, maximus nulla. Duis et venenatis magna. Suspendisse aliquet suscipit interdum. Mauris pharetra diam nec quam pharetra, eu mattis justo tristique. Curabitur quis cursus ligula. Nulla facilisi. Curabitur sit amet diam vitae ligula facilisis lobortis. Nunc laoreet congue enim, eu lobortis dui suscipit ac.<br />Quisque at porta ante, ullamcorper laoreet quam. Donec ornare nisl non lorem eleifend, et lobortis nibh tincidunt. In molestie, mauris quis pretium vestibulum, tortor purus varius diam, vitae porta risus lacus eu massa. Suspendisse nec dolor vitae tellus tincidunt tincidunt. Vivamus mattis neque turpis. Nam id urna at urna pulvinar consequat eget sit amet nisl. Ut tempor ornare risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sodales eros quam, sed congue nisi tincidunt at. Pellentesque a euismod orci. Sed et orci sed magna vulputate posuere. Pellentesque quis diam at augue euismod vestibulum sit amet vitae felis. Suspendisse pharetra, turpis cursus facilisis rutrum, erat erat pellentesque felis, non aliquam magna augue fringilla augue. Vivamus vitae arcu posuere, congue augue sed, maximus nulla. Duis et venenatis magna. Suspendisse aliquet suscipit interdum. Mauris pharetra diam nec quam pharetra, eu mattis justo tristique. Curabitur quis cursus ligula. Nulla facilisi. Curabitur sit amet diam vitae ligula facilisis lobortis. Nunc laoreet congue enim, eu lobortis dui suscipit ac.Quisque at porta ante, ullamcorper laoreet quam. Donec ornare nisl non lorem eleifend, et lobortis nibh tincidunt. In molestie, mauris quis pretium vestibulum, tortor purus varius diam, vitae porta risus lacus eu massa. Suspendisse nec dolor vitae tellus tincidunt tincidunt. Vivamus mattis neque turpis. Nam id urna at urna pulvinar consequat eget sit amet nisl. Ut tempor ornare risus.</p>', 'http://localhost/malmudden/uploads/headercontent/tree.jpg', 'http://localhost/malmudden/uploads/headercontent/thumbs/tree.jpg', 2, '2016-04-20'),
(7, 'dfddsfdf', 'sdfdsf', '<p>sdafdsf</p>', '', '', 2, '2016-04-21'),
(8, 'hi', NULL, '<p>iulkhnj</p>', 'uploads/features/bg_services.png', 'uploads/features/thumbs/bg_services.png', 1, '2017-04-28'),
(9, 'test1', NULL, '<p>test1</p>', 'uploads/features/images2.jpg', 'uploads/features/thumbs/images2.jpg', 1, '2017-04-28'),
(10, 'test2', NULL, '<p>test2</p>', 'uploads/features/bg2.jpg', 'uploads/features/thumbs/bg2.jpg', 2, '2017-04-28'),
(11, 'tttttt', NULL, '<p>jhjfgg</p>', 'uploads/features/', 'uploads/features/thumbs/', 2, '2017-04-28'),
(12, 'test2', NULL, '<p>test2</p>', 'uploads/features/bg21.jpg', 'uploads/features/thumbs/bg21.jpg', 2, '2017-04-28'),
(13, 'test3', NULL, '<p>test3</p>', 'uploads/features/bg_services1.png', 'uploads/features/thumbs/bg_services1.png', 0, '2017-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `orginal_picture` varchar(256) NOT NULL,
  `thumb_picture` varchar(256) NOT NULL,
  `status` int(1) NOT NULL,
  `link` varchar(256) NOT NULL,
  `show_menu` int(1) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'PROFF_SERVICE' COMMENT 'TYEP WILL BE: PROFF_SERVICE/CLOUD_SOLUTION/CLOUD_SERVICE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `date`, `description`, `orginal_picture`, `thumb_picture`, `status`, `link`, `show_menu`, `type`) VALUES
(1, 'test services', '2017-04-25 00:00:00', '<p>test services</p>', 'uploads/events/banner/thumbs/bg_clean_pic_024.jpg', 'uploads/events/thumbs/bg_clean_pic_02.jpg', 1, 'www.google.com', 1, 'CLOUD_SOLUTION'),
(2, 'test service', '2017-04-25 00:00:00', '<p>test service</p>', 'uploads/events/banner/thumbs/bg_clean_pic_092.jpg', 'uploads/events/thumbs/bg_clean_pic_06.jpg', 1, '', 1, 'PROFF_SERVICE'),
(3, 'test service', '2017-04-25 00:00:00', '<p>test service</p>', 'uploads/events/banner/thumbs/bg_clean_pic_081.jpg', 'uploads/events/thumbs/bg_clean_pic_08.jpg', 1, '', 1, 'PROFF_SERVICE'),
(4, 'test service', '2017-04-25 00:00:00', '<p>test service</p>', 'uploads/events/banner/thumbs/bg_clean_pic_021.jpg', 'uploads/events/thumbs/bg_clean_pic_02.jpg', 1, '', 1, 'PROFF_SERVICE'),
(5, 'cloud Solution', '2017-04-26 00:00:00', '<p>cloud Solution</p>', 'uploads/events/bg_clean_pic_05.jpg', 'uploads/events/thumbs/bg_clean_pic_05.jpg', 1, '', 1, 'CLOUD_SOLUTION'),
(6, 'cloud Service', '2017-04-26 00:00:00', '<p>cloud Service</p>', 'uploads/events/bg_clean_pic_02.jpg', 'uploads/events/thumbs/bg_clean_pic_02.jpg', 1, '', 1, 'CLOUD_SOLUTION'),
(7, 'cloud Service', '2017-04-26 00:00:00', '<p>cloud Service</p>', 'uploads/events/banner/thumbs/bg_clean_pic_074.jpg', 'uploads/events/thumbs/bg_clean_pic_07.jpg', 1, '', 1, 'CLOUD_SERVICE'),
(8, 'cloud Service', '2017-04-26 00:00:00', '<p>cloud Service</p>', 'uploads/events/banner/thumbs/bg_clean_pic_094.jpg', 'uploads/events/thumbs/bg_clean_pic_09.jpg', 1, '', 1, 'CLOUD_SERVICE'),
(9, 'cloud Service', '2017-04-26 00:00:00', '<p>cloud Service</p>', 'uploads/events/banner/thumbs/bg_clean_pic_083.jpg', 'uploads/events/thumbs/bg_clean_pic_08.jpg', 1, '', 1, 'CLOUD_SERVICE');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `id` int(1) NOT NULL,
  `site_title` varchar(256) NOT NULL,
  `logo` varchar(256) NOT NULL,
  `slogan` varchar(256) NOT NULL,
  `site_offline` tinyint(1) NOT NULL,
  `offline_text` varchar(256) NOT NULL,
  `meta_description` varchar(256) NOT NULL,
  `meta_keyword` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `phone_fax` text NOT NULL,
  `email` text NOT NULL,
  `copy_right` varchar(256) NOT NULL,
  `google_analytic` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `logo`, `slogan`, `site_offline`, `offline_text`, `meta_description`, `meta_keyword`, `address`, `phone_fax`, `email`, `copy_right`, `google_analytic`) VALUES
(4, 'Cloud Service', 'uploads/settings/2017AprThu110th92125.png', 'Website Logo', 0, '3', '4', '5', '6035 University Ave Suite14 San Diego, CA 92115 ', '(000) 111 XXXX ', 'info@yourmail.com ', 'atomap 2017', 'PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPg0KCQkgIHZhciBfZ2FxID0gX2dhcSB8fCBbXTsNCgkJICBfZ2FxLnB1c2goWydfc2V0QWNjb3VudCcsICdVQS02ODQ0ODAyMS0xJ10pOw0KCQkgIF9nYXEucHVzaChbJ190cmFja1BhZ2V2aWV3J10pOw0KCQkgIChmdW5jdGlvbigpIHsNCgkJICAgIHZhciBnYSA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ3NjcmlwdCcpOyBnYS50eXBlID0gJ3RleHQvamF2YXNjcmlwdCc7IGdhLmFzeW5jID0gdHJ1ZTsNCgkJCWdhLnNyYyA9ICgnaHR0cHM6JyA9PSBkb2N1bWVudC5sb2NhdGlvbi5wcm90b2NvbCA/ICdodHRwczovL3NzbCcgOiAnaHR0cDovL3d3dycpICsgJy5nb29nbGUtYW5hbHl0aWNzLmNvbS9nYS5qcyc7DQoJCSAgICB2YXIgcyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlUYWdOYW1lKCdzY3JpcHQnKVswXTsgcy5wYXJlbnROb2RlLmluc2VydEJlZm9yZShnYSwgcyk7DQoJCSAgfSkoKTsNCgkJPC9zY3JpcHQ+');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title1` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `link` varchar(256) NOT NULL,
  `thumb_picture` varchar(256) NOT NULL,
  `orginal_picture` varchar(256) NOT NULL,
  `main_image` varchar(256) NOT NULL,
  `status` int(11) NOT NULL,
  `set_banner` tinyint(4) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title1`, `type`, `link`, `thumb_picture`, `orginal_picture`, `main_image`, `status`, `set_banner`, `date`) VALUES
(1, 'test', 'Home', '', 'uploads/slider/thumbs/bg_clean_pic_01.jpg', 'uploads/slider/croped/bg_clean_pic_01.jpg', 'uploads/slider/bg_clean_pic_01.jpg', 1, 0, '2017-04-13'),
(2, 'Test2', 'Home', '', 'uploads/slider/thumbs/bg_clean_pic_02.jpg', 'uploads/slider/croped/bg_clean_pic_02.jpg', 'uploads/slider/bg_clean_pic_02.jpg', 1, 0, '2017-04-24'),
(3, 'Test3', 'Home', '', 'uploads/slider/thumbs/bg_clean_pic_03.jpg', 'uploads/slider/croped/bg_clean_pic_03.jpg', 'uploads/slider/bg_clean_pic_03.jpg', 1, 0, '2017-04-24'),
(4, 'Aslide', 'Home', '', 'uploads/slider/thumbs/bg_clean_pic_08.jpg', 'uploads/slider/croped/bg_clean_pic_08.jpg', 'uploads/slider/bg_clean_pic_08.jpg', 1, 0, '2017-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `address` varchar(256) NOT NULL,
  `orginal_picture` varchar(256) NOT NULL,
  `thumb_picture` varchar(256) NOT NULL,
  `remark` varchar(256) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `status` int(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `email`, `contact_no`, `address`, `orginal_picture`, `thumb_picture`, `remark`, `user_type`, `status`, `date`) VALUES
(1, 'administrator', 'admin', 'bc2437b0a2d54c5d8a433ef01ede4efb0069bcd2e97edc37098ff68add1f19aa33f06d7e53bf76a4dda6ac230b8ca19ed2d50ccd96903fef0c537e62e449050a', 'refat_rar@yahoo.com', '01912830376', '386 uttarkhan dhaka', 'http://localhost/nissebeach/uploads/users/default.png', 'http://localhost/nissebeach/uploads/users/thumbs/default.png', 'test user', 'Administrator', 1, '2016-03-31'),
(6, 'test', 'test', 'bc2437b0a2d54c5d8a433ef01ede4efb0069bcd2e97edc37098ff68add1f19aa33f06d7e53bf76a4dda6ac230b8ca19ed2d50ccd96903fef0c537e62e449050a', 'test@test.com', '0197254564', 'testasdfasd fadsgsdgsdag', 'http://localhost/nissebeach/uploads/users/default.png', 'http://localhost/nissebeach/uploads/users/thumbs/default.png', 'test adsf dsfasdfsadf ', 'Administrator', 1, '2016-03-31'),
(7, '', 'safsdf', 'e2c61d2826146aaaa562ca47d4158779c4f16272541a05ee05a597e149279368b239216adb5d06ca39025e7ab97224fedecc22907f3bb8442c40ac1cd12cb55c', '', '', '', '', '', '', 'Member', 2, '2016-04-04'),
(8, 'mm', 'mm', '0a2ad9b7b5fd4878e3cd30bc7b987758973b2ba972cf878e6abe022a1a6878f8075a6e8bac44d714509f208a784178005380c8cc98d6359556a2622e23e7c114', 'mithucn@yahoo.com', '018303209314', 'dhaka', 'http://localhost/malmudden/uploads/users/a.jpg', 'http://localhost/malmudden/uploads/users/thumbs/a.jpg', 'dhaka', 'Editor', 1, '2016-04-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_contants`
--
ALTER TABLE `about_contants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_setting`
--
ALTER TABLE `contact_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `about_contants`
--
ALTER TABLE `about_contants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `contact_setting`
--
ALTER TABLE `contact_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
