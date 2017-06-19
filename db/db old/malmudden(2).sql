-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2016 at 04:54 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `malmudden`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_contants`
--

CREATE TABLE IF NOT EXISTS `about_contants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sub_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `about_contants`
--

INSERT INTO `about_contants` (`id`, `title`, `sub_title`, `description`, `status`, `date`) VALUES
(9, 'ABOUT US', 'Contrary to popular belief.Lorem Ipsum is not simply', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sodales eros quam, sed congue nisi tincidunt at. Pellentesque a euismod orci. Sed et orci sed magna vulputate posuere. Pellentesque quis diam at augue euismod vestibulum sit amet vitae felis. Suspendisse pharetra, turpis cursus facilisis rutrum, erat erat pellentesque felis, non aliquam magna augue fringilla augue. Vivamus vitae arcu posuere, congue augue sed, maximus nulla. Duis et venenatis magna. Suspendisse aliquet suscipit interdum. Mauris pharetra diam nec quam pharetra, eu mattis justo tristique. Curabitur quis cursus ligula. Nulla facilisi. Curabitur sit amet diam vitae ligula facilisis lobortis. Nunc laoreet congue enim, eu lobortis dui suscipit ac.<br /><br />Quisque at porta ante, ullamcorper laoreet quam. Donec ornare nisl non lorem eleifend, et lobortis nibh tincidunt. In molestie, mauris quis pretium vestibulum, tortor purus varius diam, vitae porta risus lacus eu massa. Suspendisse nec dolor vitae tellus tincidunt tincidunt. Vivamus mattis neque turpis. Nam id urna at urna pulvinar consequat eget sit amet nisl. Ut tempor ornare risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sodales eros quam, sed congue nisi tincidunt at. Pellentesque a euismod orci. Sed et orci sed magna vulputate posuere. Pellentesque quis diam at augue euismod vestibulum sit amet vitae felis. Suspendisse pharetra, turpis cursus facilisis rutrum, erat erat pellentesque felis, non aliquam magna augue fringilla augue. Vivamus vitae arcu posuere, congue augue sed, maximus nulla. Duis et venenatis magna. Suspendisse aliquet suscipit interdum. Mauris pharetra diam nec quam pharetra, eu mattis justo tristique. Curabitur quis cursus ligula. Nulla facilisi. Curabitur sit amet diam vitae ligula facilisis lobortis. Nunc laoreet congue enim, eu lobortis dui suscipit ac.<br /><br />Quisque at porta ante, ullamcorper laoreet quam. Donec ornare nisl non lorem eleifend, et lobortis nibh tincidunt. In molestie, mauris quis pretium vestibulum, tortor purus varius diam, vitae porta risus lacus eu massa. Suspendisse nec dolor vitae tellus tincidunt tincidunt. Vivamus mattis neque turpis. Nam id urna at urna pulvinar consequat eget sit amet nisl. Ut tempor ornare risus.</p>', 1, '2016-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `contact_setting`
--

CREATE TABLE IF NOT EXISTS `contact_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `smtp_host` varchar(200) NOT NULL,
  `smtp_port` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `contact_setting`
--

INSERT INTO `contact_setting` (`id`, `smtp_host`, `smtp_port`, `email`, `password`) VALUES
(8, 'hasib@atomapgroup.com', 25, 'ttt@yahoo.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `header_contants`
--

CREATE TABLE IF NOT EXISTS `header_contants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sub_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `orginal_picture` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `thumb_picture` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `header_contants`
--

INSERT INTO `header_contants` (`id`, `title`, `sub_title`, `description`, `orginal_picture`, `thumb_picture`, `status`, `date`) VALUES
(4, 'mithuff', 'chandra nath', '<p>asfa asdf asf asa fasf asf&nbsp; saf asf</p>', 'http://localhost/malmudden/uploads/headercontent/12998493_10206199495326964_8721044679409838129_n.jpg', 'http://localhost/malmudden/uploads/headercontent/thumbs/12998493_10206199495326964_8721044679409838129_n.jpg', 2, '2016-04-19'),
(5, 'tt', 'y', '<p>y</p>', 'http://localhost/malmudden/uploads/headercontent/unnamed.png', 'http://localhost/malmudden/uploads/headercontent/thumbs/unnamed.png', 2, '2016-04-19'),
(6, 'WELCOME TO PMC', 'Contrary to popular belief.Lorem Ipsum is not simply', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sodales eros quam, sed congue nisi tincidunt at. Pellentesque a euismod orci. Sed et orci sed magna vulputate posuere. Pellentesque quis diam at augue euismod vestibulum sit amet vitae felis. Suspendisse pharetra, turpis cursus facilisis rutrum, erat erat pellentesque felis, non aliquam magna augue fringilla augue. Vivamus vitae arcu posuere, congue augue sed, maximus nulla. Duis et venenatis magna. Suspendisse aliquet suscipit interdum. Mauris pharetra diam nec quam pharetra, eu mattis justo tristique. Curabitur quis cursus ligula. Nulla facilisi. Curabitur sit amet diam vitae ligula facilisis lobortis. Nunc laoreet congue enim, eu lobortis dui suscipit ac.<br />Quisque at porta ante, ullamcorper laoreet quam. Donec ornare nisl non lorem eleifend, et lobortis nibh tincidunt. In molestie, mauris quis pretium vestibulum, tortor purus varius diam, vitae porta risus lacus eu massa. Suspendisse nec dolor vitae tellus tincidunt tincidunt. Vivamus mattis neque turpis. Nam id urna at urna pulvinar consequat eget sit amet nisl. Ut tempor ornare risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sodales eros quam, sed congue nisi tincidunt at. Pellentesque a euismod orci. Sed et orci sed magna vulputate posuere. Pellentesque quis diam at augue euismod vestibulum sit amet vitae felis. Suspendisse pharetra, turpis cursus facilisis rutrum, erat erat pellentesque felis, non aliquam magna augue fringilla augue. Vivamus vitae arcu posuere, congue augue sed, maximus nulla. Duis et venenatis magna. Suspendisse aliquet suscipit interdum. Mauris pharetra diam nec quam pharetra, eu mattis justo tristique. Curabitur quis cursus ligula. Nulla facilisi. Curabitur sit amet diam vitae ligula facilisis lobortis. Nunc laoreet congue enim, eu lobortis dui suscipit ac.Quisque at porta ante, ullamcorper laoreet quam. Donec ornare nisl non lorem eleifend, et lobortis nibh tincidunt. In molestie, mauris quis pretium vestibulum, tortor purus varius diam, vitae porta risus lacus eu massa. Suspendisse nec dolor vitae tellus tincidunt tincidunt. Vivamus mattis neque turpis. Nam id urna at urna pulvinar consequat eget sit amet nisl. Ut tempor ornare risus.</p>', 'http://localhost/malmudden/uploads/headercontent/tree.jpg', 'http://localhost/malmudden/uploads/headercontent/thumbs/tree.jpg', 1, '2016-04-20'),
(7, 'dfddsfdf', 'sdfdsf', '<p>sdafdsf</p>', '', '', 0, '2016-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
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
  `google_analytic` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `logo`, `slogan`, `site_offline`, `offline_text`, `meta_description`, `meta_keyword`, `address`, `phone_fax`, `email`, `copy_right`, `google_analytic`) VALUES
(4, 'Malmuddn', 'http://localhost/malmudden/uploads/settings/2016AprThu060st33959.png', '2', 1, '3', '4', '5', '6035 University Ave Suite14 San Diego, CA 92115 ', '(000) 111 XXXX ', 'info@yourmail.com ', '2017', 'PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPg0KCQkgIHZhciBfZ2FxID0gX2dhcSB8fCBbXTsNCgkJICBfZ2FxLnB1c2goWydfc2V0QWNjb3VudCcsICdVQS02ODQ0ODAyMS0xJ10pOw0KCQkgIF9nYXEucHVzaChbJ190cmFja1BhZ2V2aWV3J10pOw0KCQkgIChmdW5jdGlvbigpIHsNCgkJICAgIHZhciBnYSA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ3NjcmlwdCcpOyBnYS50eXBlID0gJ3RleHQvamF2YXNjcmlwdCc7IGdhLmFzeW5jID0gdHJ1ZTsNCgkJCWdhLnNyYyA9ICgnaHR0cHM6JyA9PSBkb2N1bWVudC5sb2NhdGlvbi5wcm90b2NvbCA/ICdodHRwczovL3NzbCcgOiAnaHR0cDovL3d3dycpICsgJy5nb29nbGUtYW5hbHl0aWNzLmNvbS9nYS5qcyc7DQoJCSAgICB2YXIgcyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlUYWdOYW1lKCdzY3JpcHQnKVswXTsgcy5wYXJlbnROb2RlLmluc2VydEJlZm9yZShnYSwgcyk7DQoJCSAgfSkoKTsNCgkJPC9zY3JpcHQ+');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title1` varchar(256) NOT NULL,
  `title2` varchar(256) NOT NULL,
  `link` varchar(256) NOT NULL,
  `thumb_picture` varchar(256) NOT NULL,
  `orginal_picture` varchar(256) NOT NULL,
  `status` int(11) NOT NULL,
  `set_banner` tinyint(4) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title1`, `title2`, `link`, `thumb_picture`, `orginal_picture`, `status`, `set_banner`, `date`) VALUES
(1, '1', '1', '', 'http://localhost/malmudden/uploads/slider/thumbs/banner.jpg', 'http://localhost/malmudden/uploads/slider/banner.jpg', 1, 1, '2016-04-20'),
(2, '2', '2', '', 'http://localhost/malmudden/uploads/slider/thumbs/01.jpg', 'http://localhost/malmudden/uploads/slider/01.jpg', 1, 0, '2016-04-20'),
(3, '5', '5', '5', 'http://localhost/malmudden/uploads/slider/thumbs/banner1.jpg', 'http://localhost/malmudden/uploads/slider/banner1.jpg', 1, 0, '2016-04-20'),
(4, '4', '4', '', '', '', 2, 0, '2016-04-21'),
(5, '4', '4', '4', '', '', 2, 0, '2016-04-21'),
(6, '33', '33', '33', '', '', 0, 0, '2016-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `email`, `contact_no`, `address`, `orginal_picture`, `thumb_picture`, `remark`, `user_type`, `status`, `date`) VALUES
(1, 'hasib bin siddique', 'hasib', 'bc2437b0a2d54c5d8a433ef01ede4efb0069bcd2e97edc37098ff68add1f19aa33f06d7e53bf76a4dda6ac230b8ca19ed2d50ccd96903fef0c537e62e449050a', 'refat_rar@yahoo.com', '01912830376', '386 uttarkhan dhaka', 'http://localhost/nissebeach/uploads/users/default.png', 'http://localhost/nissebeach/uploads/users/thumbs/default.png', 'test user', 'Administrator', 1, '2016-03-31'),
(6, 'test', 'test', 'bc2437b0a2d54c5d8a433ef01ede4efb0069bcd2e97edc37098ff68add1f19aa33f06d7e53bf76a4dda6ac230b8ca19ed2d50ccd96903fef0c537e62e449050a', 'test@test.com', '0197254564', 'testasdfasd fadsgsdgsdag', 'http://localhost/nissebeach/uploads/users/default.png', 'http://localhost/nissebeach/uploads/users/thumbs/default.png', 'test adsf dsfasdfsadf ', 'Administrator', 1, '2016-03-31'),
(7, '', 'safsdf', 'e2c61d2826146aaaa562ca47d4158779c4f16272541a05ee05a597e149279368b239216adb5d06ca39025e7ab97224fedecc22907f3bb8442c40ac1cd12cb55c', '', '', '', '', '', '', 'Member', 2, '2016-04-04'),
(8, 'mm', 'mm', '0a2ad9b7b5fd4878e3cd30bc7b987758973b2ba972cf878e6abe022a1a6878f8075a6e8bac44d714509f208a784178005380c8cc98d6359556a2622e23e7c114', 'mithucn@yahoo.com', '018303209314', 'dhaka', 'http://localhost/malmudden/uploads/users/a.jpg', 'http://localhost/malmudden/uploads/users/thumbs/a.jpg', 'dhaka', 'Editor', 1, '2016-04-19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
