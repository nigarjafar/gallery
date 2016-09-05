-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2016 at 11:14 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(3) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `type`, `location`) VALUES
(10, 'Cartoon', 'video', 'uploads/video/0509201610147.mp4'),
(11, 'Learn C#', 'video', 'uploads/video/0509201610106.mp4'),
(12, 'Hotel California', 'audio', 'uploads/audio/0509201610126.mp3'),
(13, 'Imagine', 'audio', 'uploads/audio/0509201610139.mp3'),
(14, 'Bohemian Rhapsody', 'audio', 'uploads/audio/0509201610147.mp3'),
(15, 'Baku ', 'image', 'uploads/image/0509201610110.jpg'),
(16, 'Inner City', 'image', 'uploads/image/0509201610118.jpg'),
(17, 'Baku again', 'image', 'uploads/image/0509201610128.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
