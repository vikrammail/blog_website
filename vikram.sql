-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 09:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vikram`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `index1` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`index1`, `name`, `email`, `password`) VALUES
(0, 'vikram', 'vkraj7316@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `index1` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`index1`, `name`, `message`, `email`) VALUES
(1, 'USA', 'hgh', 'error');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `index1` int(255) NOT NULL,
  `title` text NOT NULL,
  `keyword` text NOT NULL,
  `content` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `catagory` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`index1`, `title`, `keyword`, `content`, `date`, `email`, `name`, `description`, `catagory`) VALUES
(1, 'ssss', 'sssss', '<p>ssssss</p>', '2023-12-14 09:10:21', 'vkraj7316@gmail.com', 'vikram', 'ssssss', 'memes'),
(2, 'ss', 'ss', '<p>ss</p>', '2023-12-14 09:11:33', 'vkraj7316@gmail.com', 'vikram', 'ss', 'memes'),
(3, 'ssss', 'sssss', '<p>ssssss</p>', '2023-12-14 09:12:27', 'vkraj7316@gmail.com', 'vikram', 'ssssss', '');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `index1` int(255) NOT NULL,
  `memes_id` int(255) NOT NULL,
  `like` int(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`index1`, `memes_id`, `like`, `user`) VALUES
(160, 8, 1, 'vkraj7316@gmail.com'),
(161, 8, 1, 'vkraj7316@gmail.com'),
(162, 8, 1, 'vkraj7316@gmail.com'),
(163, 8, 1, 'vkraj7316@gmail.com'),
(164, 6, 1, 'vkraj7316@gmail.com'),
(165, 8, 1, 'vkraj7316@gmail.com'),
(166, 8, 1, 'vkraj7316@gmail.com'),
(167, 6, 1, 'vkraj7316@gmail.com'),
(168, 6, 1, 'vkraj7316@gmail.com'),
(169, 8, 1, 'vkraj7316@gmail.com'),
(170, 8, 1, 'vkraj7316@gmail.com'),
(171, 6, 1, 'vkraj7316@gmail.com'),
(172, 6, 1, 'vkraj7316@gmail.com'),
(173, 8, 1, 'vkraj7316@gmail.com'),
(174, 8, 1, 'vkraj7316@gmail.com'),
(175, 6, 1, 'vkraj7316@gmail.com'),
(176, 8, 1, 'vkraj7316@gmail.com'),
(177, 8, 1, 'vkraj7316@gmail.com'),
(178, 6, 1, 'vkraj7316@gmail.com'),
(179, 8, 1, 'vkraj7316@gmail.com'),
(180, 8, 1, 'vkraj7316@gmail.com'),
(181, 6, 1, 'vkraj7316@gmail.com'),
(182, 8, 1, 'vkraj7316@gmail.com'),
(183, 6, 1, 'vkraj7316@gmail.com'),
(184, 8, 1, 'vkraj7316@gmail.com'),
(185, 8, 1, 'vkraj7316@gmail.com'),
(186, 5, 1, 'vkraj7316@gmail.com'),
(187, 8, 1, 'vkraj7316@gmail.com'),
(188, 8, 1, 'vkraj7316@gmail.com'),
(189, 6, 1, 'vkraj7316@gmail.com'),
(190, 6, 1, 'vkraj7316@gmail.com'),
(191, 8, 1, 'vkraj7316@gmail.com'),
(192, 8, 1, 'vkraj7316@gmail.com'),
(193, 5, 1, 'vkraj7316@gmail.com'),
(194, 5, 1, 'vkraj7316@gmail.com'),
(195, 5, 1, 'vkraj7316@gmail.com'),
(196, 5, 1, 'vkraj7316@gmail.com'),
(197, 5, 1, 'vkraj7316@gmail.com'),
(198, 5, 1, 'vkraj7316@gmail.com'),
(199, 5, 1, 'vkraj7316@gmail.com'),
(200, 5, 1, 'vkraj7316@gmail.com'),
(201, 5, 1, 'vkraj7316@gmail.com'),
(202, 5, 1, 'vkraj7316@gmail.com'),
(203, 5, 1, 'vkraj7316@gmail.com'),
(204, 5, 1, 'vkraj7316@gmail.com'),
(205, 5, 1, 'vkraj7316@gmail.com'),
(206, 5, 1, 'vkraj7316@gmail.com'),
(207, 5, 1, 'vkraj7316@gmail.com'),
(208, 5, 1, 'vkraj7316@gmail.com'),
(209, 5, 1, 'vkraj7316@gmail.com'),
(210, 5, 1, 'vkraj7316@gmail.com'),
(211, 5, 1, 'vkraj7316@gmail.com'),
(212, 5, 1, 'vkraj7316@gmail.com'),
(213, 5, 1, 'vkraj7316@gmail.com'),
(214, 5, 1, 'vkraj7316@gmail.com'),
(215, 5, 1, 'vkraj7316@gmail.com'),
(216, 5, 1, 'vkraj7316@gmail.com'),
(217, 5, 1, 'vkraj7316@gmail.com'),
(218, 5, 1, 'vkraj7316@gmail.com'),
(219, 5, 1, 'vkraj7316@gmail.com'),
(220, 5, 1, 'vkraj7316@gmail.com'),
(221, 5, 1, 'vkraj7316@gmail.com'),
(222, 5, 1, 'vkraj7316@gmail.com'),
(223, 5, 1, 'vkraj7316@gmail.com'),
(224, 5, 1, 'vkraj7316@gmail.com'),
(225, 5, 1, 'vkraj7316@gmail.com'),
(226, 5, 1, 'vkraj7316@gmail.com'),
(227, 5, 1, 'vkraj7316@gmail.com'),
(228, 5, 1, 'vkraj7316@gmail.com'),
(229, 5, 1, 'vkraj7316@gmail.com'),
(230, 5, 1, 'vkraj7316@gmail.com'),
(231, 5, 1, 'vkraj7316@gmail.com'),
(232, 5, 1, 'vkraj7316@gmail.com'),
(233, 5, 1, 'vkraj7316@gmail.com'),
(234, 5, 1, 'vkraj7316@gmail.com'),
(235, 5, 1, 'vkraj7316@gmail.com'),
(236, 5, 1, 'vkraj7316@gmail.com'),
(237, 5, 1, 'vkraj7316@gmail.com'),
(238, 5, 1, 'vkraj7316@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `memes`
--

CREATE TABLE `memes` (
  `index1` int(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `likes` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `memes`
--

INSERT INTO `memes` (`index1`, `content`, `image`, `likes`, `date`, `email`, `name`, `catagory`) VALUES
(5, 'error', '1702479799.jpg', 0, '2023-12-13 16:03:19', 'vkraj7316@gmail.com', 'vikram', 'memes'),
(6, 'error', '1702479848.jpg', 0, '2023-12-13 16:04:08', 'vkraj7316@gmail.com', 'vikram', 'memes'),
(8, '<h2>lllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll</h2>', '1702573237.jpg', 0, '2023-12-14 18:00:37', 'vkraj7316@gmail.com', 'vikram', 'love_shayri'),
(9, '<p>fffffffffffffffffff</p>', '1702721529.jpg', 0, '2023-12-16 11:12:09', 'vkraj7316@gmail.com', 'vikram', 'memes'),
(10, '<p>gggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg</p>', '1702727525.jpg', 0, '2023-12-16 12:52:04', 'vkraj7316@gmail.com', 'vikram', 'memes'),
(11, '<p>ffffffffffffffffffff</p>', 'error', 0, '2023-12-16 17:48:16', 'vkraj7316@gmail.com', 'vikram', 'memes');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `link`, `timestamp`) VALUES
(1, '1fffffffffff', 'ffffffffffffffffffffffffffffffff', 'fffffffffffffffffffff', '2023-12-15 11:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` enum('google','facebook','twitter','linkedin') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'google',
  `oauth_uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `index1` int(255) NOT NULL,
  `total_count` int(255) NOT NULL,
  `reload_count` int(255) NOT NULL,
  `ipadd_count` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`index1`, `total_count`, `reload_count`, `ipadd_count`) VALUES
(1, 7, 431, 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `index1` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`index1`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`index1`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`index1`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`index1`);

--
-- Indexes for table `memes`
--
ALTER TABLE `memes`
  ADD PRIMARY KEY (`index1`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`index1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `index1` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `index1` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `index1` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `memes`
--
ALTER TABLE `memes`
  MODIFY `index1` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visit`
--
ALTER TABLE `visit`
  MODIFY `index1` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
