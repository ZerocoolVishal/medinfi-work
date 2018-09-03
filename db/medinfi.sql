-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 06:15 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medinfi`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `launchDate` date NOT NULL,
  `project` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blogweekmatric`
--

CREATE TABLE `blogweekmatric` (
  `id` int(11) NOT NULL,
  `blog` int(11) NOT NULL,
  `projectWeek` int(11) NOT NULL,
  `tw_retweets` int(11) NOT NULL,
  `tw_impression` int(11) NOT NULL,
  `tw_comments` int(11) NOT NULL,
  `fb_likes_share` int(11) NOT NULL,
  `fb_click` int(11) NOT NULL,
  `fb_comments` int(11) NOT NULL,
  `blog_pageview` int(11) NOT NULL,
  `blog_bannerclicks` int(11) NOT NULL,
  `blog_online_sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `projects` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `clients` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company` int(11) NOT NULL,
  `tw_retweets_target` int(11) NOT NULL,
  `tw_impression_target` int(11) NOT NULL,
  `tw_comments_target` int(11) NOT NULL,
  `fb_likes_share_target` int(11) NOT NULL,
  `fb_click_target` int(11) NOT NULL,
  `fb_comments_target` int(11) NOT NULL,
  `blog_pageview_target` int(11) NOT NULL,
  `blog_bannerclicks_target` int(11) NOT NULL,
  `blog_online_sale_target` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `accountManager` int(11) NOT NULL,
  `launchDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectweek`
--

CREATE TABLE `projectweek` (
  `id` int(11) NOT NULL,
  `project` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userType` enum('client','admin','acm','') NOT NULL,
  `lastUpdateBy` int(11) NOT NULL,
  `lastUpdateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project` (`project`);

--
-- Indexes for table `blogweekmatric`
--
ALTER TABLE `blogweekmatric`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog` (`blog`),
  ADD KEY `projectWeek` (`projectWeek`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accountManager` (`accountManager`);

--
-- Indexes for table `projectweek`
--
ALTER TABLE `projectweek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project` (`project`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogweekmatric`
--
ALTER TABLE `blogweekmatric`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projectweek`
--
ALTER TABLE `projectweek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`project`) REFERENCES `project` (`id`);

--
-- Constraints for table `blogweekmatric`
--
ALTER TABLE `blogweekmatric`
  ADD CONSTRAINT `blogweekmatric_ibfk_1` FOREIGN KEY (`blog`) REFERENCES `blog` (`id`),
  ADD CONSTRAINT `blogweekmatric_ibfk_2` FOREIGN KEY (`projectWeek`) REFERENCES `projectweek` (`id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`accountManager`) REFERENCES `users` (`id`);

--
-- Constraints for table `projectweek`
--
ALTER TABLE `projectweek`
  ADD CONSTRAINT `projectweek_ibfk_1` FOREIGN KEY (`project`) REFERENCES `project` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
