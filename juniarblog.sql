-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 07:46 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `juniarblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blg_id` int(11) NOT NULL,
  `blg_cat_id` int(11) NOT NULL,
  `blg_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `blg_description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `blg_u_id` int(11) NOT NULL,
  `blg_created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blg_id`, `blg_cat_id`, `blg_title`, `blg_description`, `blg_u_id`, `blg_created_time`) VALUES
(1, 1, 'Messi or Ronaldo? Chelsea boss Lampard picks his favourite', 'Messi and Ronaldo have battled for supremacy at the very highest level for well over a decade, with their rivalry considered to be among the greatest in the history of football. chelsea  boss Frank Lampard has picked his favourite player between Lionel Messi and Cristiano Ronaldo, while also naming a dream team of his former opponents.', 2, '2020-10-29 23:53:12'),
(2, 1, 'Unlike Messi, Pirlo has no magic wand for resolving all of Juventus\' problems', 'Juve\'s social media team replied, You probably looked it up wrong in the dictionary. We\'ll bring the right one at Camp Nou. Barcelona could not resist poking fun at Juventus after Wednesday night\'s 2-0 win in Turin.', 2, '2020-10-29 23:54:50'),
(3, 1, 'Unlike Messi, Pirlo has no magic wand for resolving all of Juventus\' problems', 'Juve\'s social media team replied, You probably looked it up wrong in the dictionary. We\'ll bring the right one at Camp Nou. Barcelona could not resist poking fun at Juventus after Wednesday night\'s 2-0 win in Turin.', 2, '2020-10-29 23:54:50'),
(4, 1, 'Messi or Ronaldo? Chelsea boss Lampard picks his favourite', 'Messi and Ronaldo have battled for supremacy at the very highest level for well over a decade, with their rivalry considered to be among the greatest in the history of football. chelsea  boss Frank Lampard has picked his favourite player between Lionel Messi and Cristiano Ronaldo, while also naming a dream team of his former opponents.', 2, '2020-10-29 23:53:12'),
(5, 1, 'Unlike Messi, Pirlo has no magic wand for resolving all of Juventus\' problems', 'Juve\'s social media team replied, You probably looked it up wrong in the dictionary. We\'ll bring the right one at Camp Nou. Barcelona could not resist poking fun at Juventus after Wednesday night\'s 2-0 win in Turin.', 2, '2020-10-29 23:54:50'),
(6, 1, 'Unlike Messi, Pirlo has no magic wand for resolving all of Juventus\' problems', 'Juve\'s social media team replied, You probably looked it up wrong in the dictionary. We\'ll bring the right one at Camp Nou. Barcelona could not resist poking fun at Juventus after Wednesday night\'s 2-0 win in Turin.', 2, '2020-10-29 23:54:50'),
(7, 1, 'ipl sobcheye besi juya', 'à¦¸à¦®à¦¾à¦œà¦¬à¦¾à¦¦à§€ à¦ªà¦¾à¦°à§à¦Ÿà¦¿à¦° à¦¸à¦™à§à¦—à§‡ à¦œà§‹à¦Ÿ à¦­à§‡à¦™à§‡à¦‡ à¦¦à¦¿à¦²à§‡à¦¨ à¦¬à¦¿à¦à¦¸à¦ªà¦¿ à¦¨à§‡à¦¤à§à¦°à§€ à¦®à¦¾à§Ÿà¦¾à¦¬à¦¤à§€à¥¤ à¦˜à§‹à¦·à¦£à¦¾ à¦•à¦°à¦²à§‡à¦¨, à¦à¦¸à¦ªà¦¿â€™à¦° à¦¦à§à¦¬à¦¿à¦¤à§€à§Ÿ à¦ªà§à¦°à¦¾à¦°à§à¦¥à§€à¦•à§‡ à¦¹à¦¾à¦°à¦¾à¦¤à§‡ à¦¬à¦¿à¦œà§‡à¦ªà¦¿ à¦¬à¦¾ à¦…à¦¨à§à¦¯ à¦¯à§‡ à¦•à§‡à¦¾à¦¨à¦“ à¦¦à¦²à¦•à§‡ à¦­à§‹à¦Ÿ à¦¦à§‡à¦¬à§‡ à¦¬à¦¹à§à¦œà¦¨ à¦¸à¦®à¦¾à¦œ à¦ªà¦¾à¦°à§à¦Ÿà¦¿à¥¤ à¦®à¦¾à¦¯à¦¼à¦¾à¦¬à¦¤à§€à¦° à¦à¦¹à§‡à¦¨ à¦…à¦¬à¦¸à§à¦¥à¦¾à¦¨à§‡à¦° à¦ªà¦° à¦¤à¦¾à¦à¦•à§‡ à¦à¦•à¦¹à¦¾à¦¤ à¦¨à¦¿à¦¯à¦¼à§‡à¦›à§‡à¦¨ à¦•à¦‚à¦—à§à¦°à§‡à¦¸à§‡à¦° à¦¸à¦®à§à¦ªà¦¾à¦¦à¦• à¦ªà§à¦°à¦¿à¦¯à¦¼à¦¾à¦™à§à¦•à¦¾ à¦—à¦¾à¦¨à§à¦§à§€à¥¤ à¦Ÿà§à¦¯à§à¦‡à¦Ÿà¦¾à¦°à§‡ à¦–à§‹à¦à¦šà¦¾ à¦¦à¦¿à¦¯à¦¼à§‡ à¦¤à¦¿à¦¨à¦¿ à¦²à¦¿à¦–à§‡à¦›à§‡à¦¨, à¦†à¦° à¦•à¦¿ à¦•à¦¿à¦›à§ à¦¬à¦²à¦¾à¦° à¦¬à¦¾à¦•à¦¿ à¦°à¦‡à¦²?\r\nà¦¬à¦¿à¦§à¦¾à¦¨ à¦ªà¦°à¦¿à¦·à¦¦ à¦à¦¬à¦‚ à¦°à¦¾à¦œà§à¦¯à¦¸à¦­à¦¾ à¦­à§‹à¦Ÿà§‡à¦° à¦†à¦—à§‡ à¦¦à¦² à¦¬à¦¦à¦² à¦•à¦°à§‡ à¦¸à¦®à¦¾à¦œà¦¬à¦¾à¦¦à§€ à¦ªà¦¾à¦°à§à¦Ÿà¦¿à¦¤à§‡ (à¦¸à¦ªà¦¾) à¦¯à§‹à¦— à¦¦à¦¿à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨ à¦¬à¦¿à¦à¦¸à¦ªà¦¿à¦° à¦¬à§‡à¦¶ à¦•à¦¯à¦¼à§‡à¦•à¦œà¦¨ à¦¬à¦¿à¦§à¦¾à¦¯à¦¼à¦•à¥¤ à¦à¦‡ à¦ªà¦°à¦¿à¦¸à§à¦¥à¦¿à¦¤à¦¿à¦¤à§‡ à¦¬à§ƒà¦¹à¦¸à§à¦ªà¦¤à¦¿à¦¬à¦¾à¦° à¦ªà§à¦°à¦¾à¦•à§à¦¤à¦¨ à¦¶à¦°à¦¿à¦• à¦¸à¦ªà¦¾à¦•à§‡ à¦¹à§à¦à¦¶à¦¿à¦¯à¦¼à¦¾à¦°à¦¿ à¦¦à¦¿à¦²à§‡à¦¨ à¦‰à¦¤à§à¦¤à¦°à¦ªà§à¦°à¦¦à§‡à¦¶à§‡à¦° à¦ªà§à¦°à¦¾à¦•à§à¦¤à¦¨ à¦®à§à¦–à§à¦¯à¦®à¦¨à§à¦¤à§à¦°à§€ à¦®à¦¾à¦¯à¦¼à¦¾à¦¬à¦¤à§€à¥¤ à¦­à¦¾à¦‡à¦ªà§‹ à¦…à¦–à¦¿à¦²à§‡à¦¶ à¦¯à¦¾à¦¦à¦¬à§‡à¦° à¦ªà§à¦°à¦¤à¦¿ à¦¤à¦¾à¦à¦° à¦¬à¦¾à¦°à§à¦¤à¦¾, à¦¬à¦¿à¦§à¦¾à¦¨ à¦ªà¦°à¦¿à¦·à¦¦ à¦•à¦¿ à¦°à¦¾à¦œà§à¦¯à¦¸à¦­à¦¾, à¦­à¦¬à¦¿à¦·à§à¦¯à¦¤à§‡ à¦¯à§‡à¦•à§‹à¦¨à¦“ à¦¨à¦¿à¦°à§à¦¬à¦¾à¦šà¦¨à§‡ à¦¸à¦ªà¦¾à¦•à§‡ à¦¹à¦¾à¦°à¦¾à¦¤à§‡ à¦¬à¦¿à¦œà§‡à¦ªà¦¿ à¦¬à¦¾ à¦…à¦¨à§à¦¯ à¦¦à¦²à¦•à§‡ à¦­à§‹à¦Ÿ à¦¦à§‡à¦¬à§‡ à¦¬à¦¹à§à¦œà¦¨ à¦¸à¦®à¦¾à¦œà¦¬à¦¾à¦¦à§€ à¦ªà¦¾à¦°à§à¦Ÿà¦¿à¥¤ à¦¸à§‡à¦‡à¦¸à¦™à§à¦—à§‡, à¦—à¦¤ à¦²à§‹à¦•à¦¸à¦­à¦¾ à¦­à§‹à¦Ÿà§‡à¦° à¦†à¦—à§‡ à¦…à¦–à¦¿à¦²à§‡à¦¶à§‡à¦° à¦¹à¦¾à¦¤ à¦§à¦°à¦¾ à¦­à§à¦² à¦¹à¦¯à¦¼à§‡à¦›à¦¿à¦² à¦¬à¦²à§‡à¦“ à¦à¦¦à¦¿à¦¨ à¦œà¦¾à¦¨à¦¿à¦¯à¦¼à§‡à¦›à§‡à¦¨ à¦ªà¦¿à¦¸à¦¿ à¦®à¦¾à¦¯à¦¼à¦¾à¦¬à¦¤à§€à¥¤', 1, '2020-10-31 00:44:08'),
(8, 1, 'flask framework', 'Flask is a great framework that enables you to build web applications quickly with Python. It\'s fast, small, and fun to work with. In this tutorial, we\'re going to build a RESTful API with Flask framework, and some other supporting tools.', 2, '2020-11-09 20:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `blg_cat_id` int(11) NOT NULL,
  `blg_cat_name` varchar(50) NOT NULL,
  `blg_cat_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`blg_cat_id`, `blg_cat_name`, `blg_cat_created_at`) VALUES
(1, 'SPORTS', '2020-10-30 23:44:31'),
(2, 'MOVIE', '2020-10-30 23:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_username` varchar(50) DEFAULT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_password` varchar(50) NOT NULL,
  `u_phone` varchar(50) DEFAULT NULL,
  `u_address` varchar(120) NOT NULL,
  `u_ip_address` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `u_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_username`, `u_email`, `u_password`, `u_phone`, `u_address`, `u_ip_address`, `status`, `u_created_at`) VALUES
(1, 'Souvik Hajra', NULL, 'abc@gmail.com', '1234', '999799', 'kolkata', NULL, 1, '2020-10-31 13:25:27'),
(2, 'sedric james', NULL, 'aaa@gmail.com', '123', '9807654312', 'saiuaiyisiysiisiiy', NULL, 1, '2020-10-31 13:52:41'),
(3, 'govinda', NULL, 'gov@gma.com', '1234', NULL, 'kolkata', NULL, 1, '2020-11-09 20:35:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blg_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`blg_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `blg_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
