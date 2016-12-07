-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2016 at 09:08 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_members`
--

CREATE TABLE `blog_members` (
  `memberID` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_members`
--

INSERT INTO `blog_members` (`memberID`, `username`, `password`, `email`) VALUES
(1, 'Demo', '$2y$10$wJxa1Wm0rtS2BzqKnoCPd.7QQzgu7D/aLlMR5Aw3O.m9jx3oRJ5R2', 'demo@demo.com'),
(2, 'admin', '$2y$10$q4QHfM9QPoQO/bOM3YeCrupKMtIZQnrLf22zB5h3iS8WTBqvXqQnu', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `postID` int(11) UNSIGNED NOT NULL,
  `postTitle` varchar(255) DEFAULT NULL,
  `postDesc` text,
  `postCont` text,
  `postDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postDesc`, `postCont`, `postDate`) VALUES
(7, 'New Boards', '<h1><strong>NEW BOARDS ARE HERE</strong></h1>\r\n<p><img src="http://www.skatezoo.com/page1/IMG_0321.jpg" alt="" width="600" height="450" /></p>\r\n<p>&nbsp;</p>', '<h1 style="text-align: center;"><img src="http://www.skatezoo.com/page1/K-zoo%20Triumph.jpg" alt="" width="800" height="450" />&nbsp;</h1>', '2016-12-06 17:33:31'),
(8, 'New T-shirts', '<p><img src="http://www.skatezoo.com/page1/IMG_0323.jpg" alt="" width="400" height="300" /></p>', '<p><strong>Just Arrived!</strong></p>\r\n<p>&nbsp;</p>\r\n<p><img src="http://www.skatezoo.com/page1/IMG_0323.jpg" alt="" width="400" height="300" /></p>\r\n<p><img src="http://www.skatezoo.com/Old%20Events%20and%20Orpan%20files/new%20colorstee.jpg" alt="" width="400" height="300" /></p>', '2016-12-06 19:38:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_members`
--
ALTER TABLE `blog_members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`postID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_members`
--
ALTER TABLE `blog_members`
  MODIFY `memberID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `postID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
