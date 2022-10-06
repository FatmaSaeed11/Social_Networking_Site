-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2022 at 01:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `key_word`
--

CREATE TABLE `key_word` (
  `description` varchar(50) NOT NULL,
  `flag` binary(2) NOT NULL,
  `user_name_key` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_description` varchar(500) NOT NULL,
  `topic_user_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_to_user`
--

CREATE TABLE `user_to_user` (
  `fuser_name` varchar(50) NOT NULL,
  `friend_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `key_word`
--
ALTER TABLE `key_word`
  ADD PRIMARY KEY (`description`),
  ADD KEY `user_name_key` (`user_name_key`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD KEY `topic_user_name` (`topic_user_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `user_to_user`
--
ALTER TABLE `user_to_user`
  ADD KEY `fuser_name` (`fuser_name`),
  ADD KEY `friend_name` (`friend_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `key_word`
--
ALTER TABLE `key_word`
  ADD CONSTRAINT `key_word_ibfk_1` FOREIGN KEY (`user_name_key`) REFERENCES `admin` (`username`);

--
-- Constraints for table `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `topic_ibfk_1` FOREIGN KEY (`topic_user_name`) REFERENCES `user` (`user_name`);

--
-- Constraints for table `user_to_user`
--
ALTER TABLE `user_to_user`
  ADD CONSTRAINT `user_to_user_ibfk_1` FOREIGN KEY (`fuser_name`) REFERENCES `user` (`user_name`),
  ADD CONSTRAINT `user_to_user_ibfk_2` FOREIGN KEY (`friend_name`) REFERENCES `user` (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
