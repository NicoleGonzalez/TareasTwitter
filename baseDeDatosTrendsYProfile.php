-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2017 at 11:20 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `twitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int(10) UNSIGNED NOT NULL,
  `ids_followers` int(11) DEFAULT NULL,
  `id_profile` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_profile` int(11) DEFAULT NULL,
  `id_str` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `screen_name` varchar(15) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `profile_location` varchar(20) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `protected` tinyint(1) DEFAULT NULL,
  `followers_count` int(11) DEFAULT NULL,
  `friends_count` int(11) DEFAULT NULL,
  `listed_count` int(11) DEFAULT NULL,
  `created_at` varchar(40) DEFAULT NULL,
  `favourites_count` int(11) DEFAULT NULL,
  `utc_offset` int(11) DEFAULT NULL,
  `time_zone` varchar(15) DEFAULT NULL,
  `geo_enabled` tinyint(1) DEFAULT NULL,
  `verified` tinyint(1) DEFAULT NULL,
  `statuses_count` int(11) DEFAULT NULL,
  `lang` varchar(5) DEFAULT NULL,
  `contributors_enabled` tinyint(1) DEFAULT NULL,
  `is_translator` tinyint(1) DEFAULT NULL,
  `is_translation_enabled` tinyint(1) DEFAULT NULL,
  `profile_background_image_url` varchar(60) DEFAULT NULL,
  `profile_background_image_url_https` varchar(60) DEFAULT NULL,
  `profile_background_tile` tinyint(1) DEFAULT NULL,
  `profile_image_url` varchar(70) DEFAULT NULL,
  `profile_image_url_https` varchar(80) DEFAULT NULL,
  `profile_use_background_image` tinyint(1) DEFAULT NULL,
  `default_profile` tinyint(1) DEFAULT NULL,
  `default_profile_image` tinyint(1) DEFAULT NULL,
  `following` tinyint(1) DEFAULT NULL,
  `follow_request_sent` tinyint(1) DEFAULT NULL,
  `notifications` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trend`
--

CREATE TABLE `trend` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `trend` varchar(50) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `contenido` varchar(50) DEFAULT NULL,
  `query` varchar(50) DEFAULT NULL,
  `volumen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_profile` (`id_profile`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trend`
--
ALTER TABLE `trend`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trend`
--
ALTER TABLE `trend`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `followers`
--
ALTER TABLE `followers`
  ADD CONSTRAINT `followers_profile_FK` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`id`);
