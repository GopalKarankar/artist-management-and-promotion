-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2025 at 01:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artist`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(400) NOT NULL,
  `password` varchar(500) NOT NULL,
  `uploadTime` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `uploadTime`) VALUES
(2, 'admin', '$2y$10$e18USk3FxJ07rr4J2JXlHuC0VDfoZXNii/UjkDR1HhtcT1aeq.GrK', '11-Jun-2025 08:50:17:am');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(255) NOT NULL,
  `imageName` varchar(1000) NOT NULL,
  `imageType` varchar(255) NOT NULL,
  `imageSize` varchar(255) NOT NULL,
  `imageDirectory` varchar(1500) NOT NULL,
  `bTitle` varchar(300) NOT NULL,
  `bPost` varchar(2000) NOT NULL,
  `bCategory` varchar(300) NOT NULL,
  `timeOfUpload` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `imageName`, `imageType`, `imageSize`, `imageDirectory`, `bTitle`, `bPost`, `bCategory`, `timeOfUpload`) VALUES
(19, 'Annotation 2024-12-12 010531.png', 'png', '624.103 KB', 'image/blogs/Annotation 2024-12-12 010531.png', 'music blog123', '123lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', 'Midwave News', '04-Jun-2025 12:24:19:am'),
(20, 'Annotation 2024-12-12 010531.png', 'png', '624.103 KB', 'image/blogs/Annotation 2024-12-12 010531.png', 'music blog123', '123lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', 'Event Management', '01-Jun-2025 08:02:12:pm'),
(21, 'Annotation 2024-12-12 010531.png', 'png', '624.103 KB', 'image/blogs/Annotation 2024-12-12 010531.png', 'music blog123', '123lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', 'Event Management', '01-Jun-2025 08:12:50:pm'),
(22, 'Annotation 2024-12-12 010531.png', 'png', '624.103 KB', 'image/blogs/Annotation 2024-12-12 010531.png', 'music blog123', '123lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', 'Music Industry Trends', '01-Jun-2025 08:13:02:pm'),
(23, 'Annotation 2024-12-12 010531.png', 'png', '624.103 KB', 'image/blogs/Annotation 2024-12-12 010531.png', 'music blog123', '123lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', 'Midwave News', '01-Jun-2025 08:04:11:pm'),
(26, 'Annotation 2024-12-12 010531.png', 'png', '624.103 KB', 'image/blogs/Annotation 2024-12-12 010531.png', 'music blog123', '123lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', 'Music Industry Trends', '01-Jun-2025 08:12:10:pm'),
(27, 'Annotation 2024-12-12 010531.png', 'png', '624.103 KB', 'image/blogs/Annotation 2024-12-12 010531.png', 'music blog123', '123lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', 'Event Management', '01-Jun-2025 08:12:21:pm'),
(28, 'Annotation 2024-12-12 010531.png', 'png', '624.103 KB', 'image/blogs/Annotation 2024-12-12 010531.png', 'music blog123', '123lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', 'Midwave News', '01-Jun-2025 08:12:35:pm'),
(29, 'Annotation 2024-12-12 010531.png', 'png', '624.103 KB', 'image/blogs/Annotation 2024-12-12 010531.png', 'music blog123', '123lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', 'Artist Management', '31-Mar-2025 06:55:36:pm'),
(30, 'Annotation 2024-12-12 010531.png', 'png', '624.103 KB', 'image/blogs/Annotation 2024-12-12 010531.png', 'music blog123', '123lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', 'Artist Management', '31-Mar-2025 06:55:36:pm'),
(31, 'Annotation 2024-12-12 010531.png', 'png', '624.103 KB', 'image/blogs/Annotation 2024-12-12 010531.png', 'music blog123', '123lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum', 'Artist Management', '31-Mar-2025 06:55:36:pm');

-- --------------------------------------------------------

--
-- Table structure for table `bookshow`
--

CREATE TABLE `bookshow` (
  `id` int(255) NOT NULL,
  `fullName` varchar(400) NOT NULL,
  `senderEmail` varchar(300) NOT NULL,
  `phNumber` varchar(300) NOT NULL,
  `eventType` varchar(300) NOT NULL,
  `details` varchar(1500) NOT NULL,
  `status` varchar(400) NOT NULL,
  `timeOfUpload` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookshow`
--

INSERT INTO `bookshow` (`id`, `fullName`, `senderEmail`, `phNumber`, `eventType`, `details`, `status`, `timeOfUpload`) VALUES
(14, 'Gopal Sadashiv Karankar', 'karankargopal0@gmail.com', '09284840689', 'wedding', 'lorrem', 'Disapproved', '31-Mar-2025 04:11:34:pm'),
(15, 'Gopal Sadashiv Karankar', 'karankargopal0@gmail.com', '09284840689', 'corporate', 'lorem', 'Approved', '31-Mar-2025 04:10:51:pm'),
(16, 'Gopal Sadashiv Karankar', 'karankargopal0@gmail.com', '09284840689', 'wedding', 'lorrem', 'Disapproved', '31-Mar-2025 04:11:34:pm'),
(17, 'Gopal Sadashiv Karankar', 'karankargopal0@gmail.com', '09284840689', 'concert', 'lorem', 'Disapproved', '31-Mar-2025 07:25:52:pm'),
(18, 'Gopal Sadashiv Karankar', 'karankargopal0@gmail.com', '9284840689', 'private', 'tyftgfrtrd', 'pending', '04-Jun-2025 12:16:19:am');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(255) NOT NULL,
  `imageName` varchar(1000) NOT NULL,
  `imageType` varchar(255) NOT NULL,
  `imageSize` varchar(255) NOT NULL,
  `imageDirectory` varchar(1500) NOT NULL,
  `bDetails` varchar(2000) NOT NULL,
  `timeOfUpload` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `imageName`, `imageType`, `imageSize`, `imageDirectory`, `bDetails`, `timeOfUpload`) VALUES
(12, 'brnds (1).webp', 'webp', '162.508 KB', 'image/brands/brnds (1).webp', 'brand\r\n', '03-Jun-2025 11:22:16:pm'),
(13, 'brnds (3).webp', 'webp', '157.324 KB', 'image/music/brnds (3).webp', 'asc', '04-Jun-2025 07:50:31:pm'),
(14, 'brnds (7).webp', 'webp', '249.154 KB', 'image/music/brnds (7).webp', 'xcd', '04-Jun-2025 07:51:22:pm');

-- --------------------------------------------------------

--
-- Table structure for table `bts`
--

CREATE TABLE `bts` (
  `id` int(11) NOT NULL,
  `imageName` varchar(1000) NOT NULL,
  `imageType` varchar(255) NOT NULL,
  `imageSize` varchar(255) NOT NULL,
  `imageDirectory` varchar(1500) NOT NULL,
  `timeOfUpload` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bts`
--

INSERT INTO `bts` (`id`, `imageName`, `imageType`, `imageSize`, `imageDirectory`, `timeOfUpload`) VALUES
(2, 'bts (2).webp', 'webp', '342.084 KB', 'image/bts/bts (2).webp', '31-Mar-2025 03:23:14:pm'),
(3, 'bts (3).webp', 'webp', '321.036 KB', 'image/bts/bts (3).webp', '31-Mar-2025 03:59:39:pm'),
(4, 'bts (4).webp', 'webp', '334.612 KB', 'image/bts/bts (4).webp', '31-Mar-2025 03:59:48:pm'),
(5, 'bts (10).webp', 'webp', '284.128 KB', 'image/bts/bts (10).webp', '07-Apr-2025 06:21:54:pm'),
(7, 'bts (7).webp', 'webp', '336.688 KB', 'image/bts/bts (7).webp', '31-Mar-2025 04:03:51:pm'),
(8, 'bts (8).webp', 'webp', '315.864 KB', 'image/bts/bts (8).webp', '31-Mar-2025 04:03:58:pm'),
(9, 'bm (1).webp', 'webp', '382.098 KB', 'image/bts/bm (1).webp', '31-Mar-2025 07:14:12:pm');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(255) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(400) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `inquiry` varchar(300) NOT NULL,
  `message` varchar(400) NOT NULL,
  `timeOfSending` varchar(400) NOT NULL,
  `status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `inquiry`, `message`, `timeOfSending`, `status`) VALUES
(7, 'gsk', 'karankargopal0@gmail.com', '987654', 'Collaboration', 'lorem', '31-Mar-2025 05:22:30:pm', 'Seen'),
(8, 'gsk', 'karankargopal0@gmail.com', '678', 'Collaboration', 'lorem', '31-Mar-2025 05:22:30:pm', 'Seen'),
(9, 'gsk', 'karankargopal0@gmail.com', '987', 'Reserve studio', 'lorem ipsum', '10-Jun-2025 03:27:39:pm', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `coresocial`
--

CREATE TABLE `coresocial` (
  `id` int(255) NOT NULL,
  `logo` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coresocial`
--

INSERT INTO `coresocial` (`id`, `logo`) VALUES
(2, '<i class=\"fa-brands fa-instagram\"></i>'),
(3, '<i class=\"fa-brands fa-whatsapp\"></i>'),
(4, '<i class=\"fa-brands fa-twitter\"></i>'),
(6, '<i class=\"fa-brands fa-youtube\"></i>');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(255) NOT NULL,
  `imageName` varchar(1000) NOT NULL,
  `imageType` varchar(255) NOT NULL,
  `imageSize` varchar(255) NOT NULL,
  `imageDirectory` varchar(1500) NOT NULL,
  `timeOfUpload` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `imageName`, `imageType`, `imageSize`, `imageDirectory`, `timeOfUpload`) VALUES
(7, 'e (2).webp', 'webp', '403.998 KB', 'image/events/e (2).webp', '21-May-2025 04:17:59:pm'),
(8, 'e (3).webp', 'webp', '425.036 KB', 'image/events/e (3).webp', '21-May-2025 04:18:24:pm');

-- --------------------------------------------------------

--
-- Table structure for table `getintouch`
--

CREATE TABLE `getintouch` (
  `id` int(255) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `whatsapp` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `address` varchar(800) NOT NULL,
  `gmap` varchar(1000) NOT NULL,
  `timeOfSending` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `getintouch`
--

INSERT INTO `getintouch` (`id`, `phone`, `whatsapp`, `email`, `address`, `gmap`, `timeOfSending`) VALUES
(1, '09284840689', '09284840689', 'karankargopal0@gmail.com', 'Hanuman ward, near Tukdoji maharaj mandir, Desaiganj, Wadsa, District Gadchiroli', '<div class=\"embed-map-fixed\"><div class=\"embed-map-container\"><iframe class=\"embed-map-frame\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?&hl=en&q=University%20of%20Oxford&t=&z=14&ie=UTF8&iwloc=B&output=embed\"></iframe><a href=\"https://sprunkiretake.net\" style=\"font-size:2px!important;color:gray!important;position:absolute;bottom:0;left:0;z-index:1;max-height:1px;overflow:hidden\">sprunki retake</a></div><style>.embed-map-fixed{position:relative;text-align:right;}.embed-map-container{overflow:hidden;background:none!important;}.embed-map-frame{}</style></div>', '06-Jun-2025 05:53:03:pm');

-- --------------------------------------------------------

--
-- Table structure for table `hired`
--

CREATE TABLE `hired` (
  `id` int(255) NOT NULL,
  `fullName` varchar(400) NOT NULL,
  `senderEmail` varchar(300) NOT NULL,
  `phNumber` varchar(300) NOT NULL,
  `artist` varchar(300) NOT NULL,
  `details` varchar(1500) NOT NULL,
  `status` varchar(400) NOT NULL,
  `timeOfUpload` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hired`
--

INSERT INTO `hired` (`id`, `fullName`, `senderEmail`, `phNumber`, `artist`, `details`, `status`, `timeOfUpload`) VALUES
(0, 'Gopal Sadashiv Karankar', 'karankargopal0@gmail.com', '09284840689', 'Mridul arora', 'x cdc x', 'Disapproved', '04-Jun-2025 08:17:33:pm'),
(1, 'fgh1', 'karankargopal0@gmail.com', 'ghj', 'frgh', 'fghj', 'Approved', 'thj'),
(2, 'fgh2', 'evfguy@gmail.com', 'ghj', 'frgh', 'fghj', 'Approved', 'thj'),
(3, 'fgh3', 'karankargopal0@gmail.com', 'ghj', 'frgh', 'fghj', 'Approved', 'thj'),
(4, 'fgh4', 'karankargopal0@gmail.com', 'ghj', 'frgh', 'fghj', 'Disapproved', 'thj');

-- --------------------------------------------------------

--
-- Table structure for table `index1`
--

CREATE TABLE `index1` (
  `id` int(255) NOT NULL,
  `imageName` varchar(1000) NOT NULL,
  `imageType` varchar(255) NOT NULL,
  `imageSize` varchar(255) NOT NULL,
  `imageDirectory` varchar(1500) NOT NULL,
  `timeOfUpload` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `index1`
--

INSERT INTO `index1` (`id`, `imageName`, `imageType`, `imageSize`, `imageDirectory`, `timeOfUpload`) VALUES
(1, 'ws.gif', 'gif', '602.166 KB', 'image/index1/ws.gif', '12-Jun-2025 07:18:25:pm');

-- --------------------------------------------------------

--
-- Table structure for table `index2`
--

CREATE TABLE `index2` (
  `id` int(255) NOT NULL,
  `imageName` varchar(1000) NOT NULL,
  `imageType` varchar(255) NOT NULL,
  `imageSize` varchar(255) NOT NULL,
  `imageDirectory` varchar(1500) NOT NULL,
  `timeOfUpload` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `index2`
--

INSERT INTO `index2` (`id`, `imageName`, `imageType`, `imageSize`, `imageDirectory`, `timeOfUpload`) VALUES
(1, 'ws2.gif', 'gif', '2753.123 KB', 'image/index2/ws2.gif', '12-Jun-2025 07:18:43:pm');

-- --------------------------------------------------------

--
-- Table structure for table `intro`
--

CREATE TABLE `intro` (
  `id` int(255) NOT NULL,
  `imageName` varchar(1500) NOT NULL,
  `imageType` varchar(300) NOT NULL,
  `imageSize` varchar(300) NOT NULL,
  `imageDirectory` varchar(2000) NOT NULL,
  `name` varchar(400) NOT NULL,
  `role` varchar(300) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `uploadTime` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intro`
--

INSERT INTO `intro` (`id`, `imageName`, `imageType`, `imageSize`, `imageDirectory`, `name`, `role`, `details`, `uploadTime`) VALUES
(13, 'bm (5).webp', 'webp', '287.36 KB', 'image/intro/bm (5).webp', 'Mridul arora', 'chairman', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Aut quis, facere est possimus repellat velit minima maiores, quam excepturi, harum accusamus mollitia saepe sit labore odio ad voluptate enim ipsam explicabo? Ea accusantium totam doloremque enim rem modi voluptate tempora nemo magni inventore quia unde recusandae expedita maiores laudantium nostrum consequatur, adipisci libero ad. Totam, dolorem quam? Fugiat consectetur, qui repellat excepturi quaerat eaque rerum provident beatae harum eveniet atque odit a quas officia facere possimus illo eligendi saepe natus deserunt, mollitia, magnam exercitationem blanditiis itaque ab. Voluptates accusamus veritatis repellat sunt asperiores nam ducimus, corporis, ullam quam animi, at!', '09-Jun-2025 02:55:51:pm'),
(15, 'bm (4).webp', 'webp', '280.852 KB', 'image/intro/bm (4).webp', 'Daman Vohra', 'member', 'lorem ipsum', '09-Jun-2025 02:50:39:pm'),
(16, 'bm (3).webp', 'webp', '302.892 KB', 'image/intro/bm (3).webp', 'Samuel watson', 'member', 'orem ipsum', '06-Jun-2025 07:19:49:pm');

-- --------------------------------------------------------

--
-- Table structure for table `introsec2`
--

CREATE TABLE `introsec2` (
  `id` int(255) NOT NULL,
  `mps` varchar(2000) NOT NULL,
  `timeOfUpload` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `introsec2`
--

INSERT INTO `introsec2` (`id`, `mps`, `timeOfUpload`) VALUES
(1, 'Our Journey\r\nFounded in [Year], \r\n<br>\r\nMidwave Productions has grown from a small band to a renowned name in the music industry. \r\n\r\nOur journey has been marked by unforgettable performances, chart-topping albums, and collaborations with leading artists.\r\n\r\nFounded in [Year]\r\nReleased [Number] successful albums\r\nPerformed in [Number] live concerts', '12-Jun-2025 08:27:54:pm');

-- --------------------------------------------------------

--
-- Table structure for table `introsec2img`
--

CREATE TABLE `introsec2img` (
  `id` int(255) NOT NULL,
  `imageName` varchar(1000) NOT NULL,
  `imageType` varchar(255) NOT NULL,
  `imageSize` varchar(255) NOT NULL,
  `imageDirectory` varchar(1500) NOT NULL,
  `timeOfUpload` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `introsec2img`
--

INSERT INTO `introsec2img` (`id`, `imageName`, `imageType`, `imageSize`, `imageDirectory`, `timeOfUpload`) VALUES
(1, 'ws2.gif', 'gif', '2753.123 KB', 'image/intro/ws2.gif', '12-Jun-2025 08:26:26:pm');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(255) NOT NULL,
  `imageName` varchar(1000) NOT NULL,
  `imageType` varchar(255) NOT NULL,
  `imageSize` varchar(255) NOT NULL,
  `imageDirectory` varchar(1500) NOT NULL,
  `timeOfUpload` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `imageName`, `imageType`, `imageSize`, `imageDirectory`, `timeOfUpload`) VALUES
(1, 'Midwave productions logo (without caption).png', 'png', '173.471 KB', 'image/Midwave productions logo (without caption).png', '13-Jun-2025 07:09:43:pm');

-- --------------------------------------------------------

--
-- Table structure for table `mps`
--

CREATE TABLE `mps` (
  `id` int(255) NOT NULL,
  `mps` varchar(2000) NOT NULL,
  `timeOfUpload` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mps`
--

INSERT INTO `mps` (`id`, `mps`, `timeOfUpload`) VALUES
(1, '123 123 Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dicta dolorem pariatur, rem nam eligendi, incidunt. Voluptatibus ullam, illum assumenda veritatis perferendis accusamus nihil', '04-Jun-2025 04:42:33:pm');

-- --------------------------------------------------------

--
-- Table structure for table `mpsimage`
--

CREATE TABLE `mpsimage` (
  `id` int(255) NOT NULL,
  `imageName` varchar(1000) NOT NULL,
  `imageType` varchar(255) NOT NULL,
  `imageSize` varchar(255) NOT NULL,
  `imageDirectory` varchar(1500) NOT NULL,
  `timeOfUpload` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mpsimage`
--

INSERT INTO `mpsimage` (`id`, `imageName`, `imageType`, `imageSize`, `imageDirectory`, `timeOfUpload`) VALUES
(1, 'preloader.png', 'png', '54.312 KB', 'image/sections/preloader.png', '04-Jun-2025 07:45:00:pm');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(255) NOT NULL,
  `iframe` varchar(1500) NOT NULL,
  `sTitle` varchar(300) NOT NULL,
  `sArtist` varchar(300) NOT NULL,
  `category` varchar(400) NOT NULL,
  `timeOfUpload` varchar(300) NOT NULL,
  `imageName` varchar(1000) NOT NULL,
  `imageType` varchar(200) NOT NULL,
  `imageSize` varchar(200) NOT NULL,
  `imageDirectory` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `iframe`, `sTitle`, `sArtist`, `category`, `timeOfUpload`, `imageName`, `imageType`, `imageSize`, `imageDirectory`) VALUES
(4, '<iframe  src=\"https://www.youtube.com/embed/yJg-Y5byMMw?si=Tpv-9oTf-VcRCq1Y\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'makhna', 'makhna', 'Releases', '01-Jun-2025 08:29:34:pm', '', '', '', ''),
(5, '<iframe  src=\"https://www.youtube.com/embed/yJg-Y5byMMw?si=Tpv-9oTf-VcRCq1Y\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'try there', 'makhna123', 'Music n Recordings', '09-May-2025 06:55:49:pm', '', '', '', ''),
(18, '<iframe  src=\"https://www.youtube.com/embed/yJg-Y5byMMw?si=Tpv-9oTf-VcRCq1Y\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'makhna', 'makhna', 'Mixing n Mastering', '01-Jun-2025 08:29:34:pm', '', '', '', ''),
(19, '<iframe  src=\"https://www.youtube.com/embed/yJg-Y5byMMw?si=Tpv-9oTf-VcRCq1Y\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', 'try there', 'makhna123', 'Music n Recordings', '06-Jun-2025 09:03:51:pm', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pabout`
--

CREATE TABLE `pabout` (
  `id` int(255) NOT NULL,
  `uId` int(255) NOT NULL,
  `bPost` varchar(2000) NOT NULL,
  `timeOfUpload` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pabout`
--

INSERT INTO `pabout` (`id`, `uId`, `bPost`, `timeOfUpload`) VALUES
(6, 13, 'Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Quis dolor quas ullam, repellat facilis sapiente, explicabo quod earum eveniet aperiam voluptatibus sint assumenda voluptatem nostrum id repudiandae amet. Obcaecati iusto eum modi impedit odio. Consequuntur ratione mollitia ipsam corporis nostrum, dolores, alias debitis! Eligendi incidunt molestiae nesciunt, aliquid natus eveniet delectus libero atque voluptates veritatis obcaecati debitis dolore provident esse velit accusantium alias aliquam similique odio! Eligendi sed dolorem iusto delectus magni exercitationem accusantium blanditiis, consequatur consectetur, vitae, ut? Quaerat, sed. Aspernatur unde voluptas at, repudiandae assumenda ullam quaerat minus inventore ipsam non reiciendis similique eligendi modi quis possimus! Molestias?', '31-May-2025 08:51:11:pm'),
(7, 15, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, dolor velit quaerat ipsam possimus, recusandae, impedit sint culpa ipsum nisi ipsa tempora quisquam eum blanditiis sunt aut, doloribus! Laboriosam nulla voluptatibus quis, dolore illo reprehenderit quibusdam quasi impedit fuga aperiam laborum? Nam molestiae dolore blanditiis doloribus culpa fugiat cupiditate temporibus ab dolor nemo rem, id ea magnam at delectus, distinctio esse quidem. Quis, placeat voluptates, repellendus error accusamus id. Praesentium necessitatibus molestiae quas consequuntur eum blanditiis, dolorum, porro et ut voluptatibus, pariatur, debitis! Quam dolores, asperiores saepe aperiam tenetur deserunt voluptatum, harum praesentium, alias enim iure quidem, natus eos nesciunt.', '03-Jun-2025 11:52:09:pm'),
(8, 16, 'lorem ipsum', '06-Jun-2025 07:31:40:pm');

-- --------------------------------------------------------

--
-- Table structure for table `pcelebrity`
--

CREATE TABLE `pcelebrity` (
  `id` int(255) NOT NULL,
  `uId` int(255) NOT NULL,
  `pCelebName` varchar(300) NOT NULL,
  `imageName` varchar(1000) NOT NULL,
  `imageType` varchar(255) NOT NULL,
  `imageSize` varchar(255) NOT NULL,
  `imageDirectory` varchar(1500) NOT NULL,
  `timeOfUpload` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pcelebrity`
--

INSERT INTO `pcelebrity` (`id`, `uId`, `pCelebName`, `imageName`, `imageType`, `imageSize`, `imageDirectory`, `timeOfUpload`) VALUES
(13, 13, 'AK', 'bm (2).webp', 'webp', '315.62 KB', 'image/celebs/bm (2).webp', '31-May-2025 08:52:11:pm'),
(14, 15, 'Kumar sanu', 'e (3).webp', 'webp', '425.036 KB', 'image/celebs/e (3).webp', '03-Jun-2025 11:47:49:pm'),
(15, 16, 'edsxs', 'bm (6).webp', 'webp', '309.694 KB', 'image/celebs/bm (6).webp', '06-Jun-2025 07:33:17:pm');

-- --------------------------------------------------------

--
-- Table structure for table `pdighandles`
--

CREATE TABLE `pdighandles` (
  `id` int(255) NOT NULL,
  `uId` int(255) NOT NULL,
  `platform` varchar(400) NOT NULL,
  `pLink` varchar(2000) NOT NULL,
  `imageName` varchar(1000) NOT NULL,
  `imageType` varchar(255) NOT NULL,
  `imageSize` varchar(255) NOT NULL,
  `imageDirectory` varchar(1500) NOT NULL,
  `timeOfUpload` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdighandles`
--

INSERT INTO `pdighandles` (`id`, `uId`, `platform`, `pLink`, `imageName`, `imageType`, `imageSize`, `imageDirectory`, `timeOfUpload`) VALUES
(14, 13, 'Spotify', 'link', 'brnds (12).webp', 'webp', '286.852 KB', 'image/screenshots/brnds (12).webp', '31-May-2025 08:52:46:pm'),
(15, 15, 'twitter', 'ygfvh nytf', 'e (2).webp', 'webp', '403.998 KB', 'image/screenshots/e (2).webp', '03-Jun-2025 11:51:25:pm'),
(16, 16, 'dcf', 'fdc', 'bm (1).webp', 'webp', '382.098 KB', 'image/screenshots/bm (1).webp', '06-Jun-2025 07:34:00:pm');

-- --------------------------------------------------------

--
-- Table structure for table `phospi`
--

CREATE TABLE `phospi` (
  `id` int(255) NOT NULL,
  `reqName` varchar(300) NOT NULL,
  `reqDescr` varchar(1500) NOT NULL,
  `timeOfUpload` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phospi`
--

INSERT INTO `phospi` (`id`, `reqName`, `reqDescr`, `timeOfUpload`) VALUES
(1, 'Catering', 'Organic, high-quality meals\r\nCustom dietary requirements\r\nPre-performance and post-performance meals\r\n24/7 snacks and beverages', '09-Jun-2025 07:53:32:pm'),
(2, 'Accommodation', 'Luxury suites with blackout curtains\r\nSoundproof rooms\r\nWhite noise machines available\r\n24-hour room service', '09-Jun-2025 07:54:11:pm'),
(3, 'Dressing room', 'Private, secure space\r\nFull-length mirrors\r\nSteamers and ironing equipment\r\nVanity lighting', '09-Jun-2025 08:05:15:pm'),
(4, 'Wellness', 'On-call massage therapist\r\nVocal steam treatments\r\nPrivate yoga sessions\r\nMeditation space', '09-Jun-2025 07:57:01:pm'),
(5, 'Technology', 'High-speed WiFi\r\nCharging stations\r\nStreaming-capable smart TVs\r\nSecure storage for valuables', '09-Jun-2025 07:57:32:pm'),
(7, 'Support staff', 'Personal assistant Security personnel Hair and makeup artists Runner service for last-minute needs', '09-Jun-2025 08:00:39:pm');

-- --------------------------------------------------------

--
-- Table structure for table `pintro`
--

CREATE TABLE `pintro` (
  `id` int(255) NOT NULL,
  `uId` int(255) NOT NULL,
  `imageName` varchar(1000) NOT NULL,
  `imageType` varchar(255) NOT NULL,
  `imageSize` varchar(255) NOT NULL,
  `imageDirectory` varchar(1500) NOT NULL,
  `sName` varchar(300) NOT NULL,
  `sQual` varchar(2000) NOT NULL,
  `sDetails` varchar(300) NOT NULL,
  `timeOfUpload` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pintro`
--

INSERT INTO `pintro` (`id`, `uId`, `imageName`, `imageType`, `imageSize`, `imageDirectory`, `sName`, `sQual`, `sDetails`, `timeOfUpload`) VALUES
(16, 13, 'bm (5).webp', 'webp', '287.36 KB', 'image/intro/bm (5).webp', 'Mridul arora', 'Talented', 'Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Quis dolor quas ullam, repellat facilis sapiente, explicabo quod earum eveniet aperiam voluptatibus sint assumenda voluptatem nostrum id repudiandae amet. Obcaecati iusto eum modi impedit odio. Consequuntur ratione mollitia ipsam corporis no', '31-May-2025 08:51:03:pm'),
(17, 15, 'bm (4).webp', 'webp', '280.852 KB', 'image/intro/bm (4).webp', 'Daman Vohra', 'melodious', 'yfhcgyrd', '03-Jun-2025 11:39:05:pm'),
(18, 16, 'bm (3).webp', 'webp', '302.892 KB', 'image/intro/bm (3).webp', 'Samuel watson', 'cool', 'lorem ipsum', '06-Jun-2025 07:26:32:pm');

-- --------------------------------------------------------

--
-- Table structure for table `pliveshw`
--

CREATE TABLE `pliveshw` (
  `id` int(255) NOT NULL,
  `uId` int(255) NOT NULL,
  `imageName` varchar(1000) NOT NULL,
  `imageType` varchar(255) NOT NULL,
  `imageSize` varchar(255) NOT NULL,
  `imageDirectory` varchar(1500) NOT NULL,
  `timeOfUpload` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pliveshw`
--

INSERT INTO `pliveshw` (`id`, `uId`, `imageName`, `imageType`, `imageSize`, `imageDirectory`, `timeOfUpload`) VALUES
(26, 13, 'e (1).webp', 'image/webp', '449560', 'image/live/e (1).webp', '31-May-2025 08:51:38:pm'),
(27, 13, 'e (2).webp', 'image/webp', '403998', 'image/live/e (2).webp', '31-May-2025 08:51:38:pm'),
(28, 13, 'e (3).webp', 'image/webp', '425036', 'image/live/e (3).webp', '31-May-2025 08:51:38:pm'),
(29, 13, 'e (4).webp', 'image/webp', '426420', 'image/live/e (4).webp', '31-May-2025 08:51:38:pm'),
(30, 13, 'e (5).webp', 'image/webp', '288080', 'image/live/e (5).webp', '31-May-2025 08:51:38:pm'),
(31, 15, 'e (1).webp', 'image/webp', '449560', 'image/live/e (1).webp', '03-Jun-2025 11:39:56:pm'),
(32, 15, 'e (2).webp', 'image/webp', '403998', 'image/live/e (2).webp', '03-Jun-2025 11:39:56:pm'),
(33, 15, 'e (3).webp', 'image/webp', '425036', 'image/live/e (3).webp', '03-Jun-2025 11:39:56:pm'),
(34, 15, 'e (4).webp', 'image/webp', '426420', 'image/live/e (4).webp', '03-Jun-2025 11:39:56:pm'),
(35, 15, 'e (5).webp', 'image/webp', '288080', 'image/live/e (5).webp', '03-Jun-2025 11:39:56:pm'),
(36, 16, 'e (2).webp', 'image/webp', '403998', 'image/live/e (2).webp', '06-Jun-2025 07:32:08:pm');

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Table structure for table `pp`
--

CREATE TABLE `pp` (
  `id` int(255) NOT NULL,
  `pp` varchar(2000) NOT NULL,
  `timeOfUpload` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pp`
--

INSERT INTO `pp` (`id`, `pp`, `timeOfUpload`) VALUES
(1, 'We value your privacy and are committed to protecting your personal information. Any data collected through our website, such as names, email addresses, or payment details, is used solely to enhance your experience and provide relevant updates about our band.  \r\n\r\nWe do not share, sell, or distribute your personal information to third parties, except when necessary to process payments, fulfill merchandise orders, or comply with legal obligations. Your data is stored securely, and we take appropriate measures to safeguard it.  \r\n\r\nBy using our website, you consent to the collection and use of your information in accordance with this policy. We may use cookies and analytics tools to improve website functionality and provide personalized content. You can manage cookie preferences through your browser settings.  \r\n\r\nOur website may contain links to third-party sites, but we are not responsible for their privacy practices. We encourage you to review their policies before sharing personal information.  \r\n\r\nWe may update this privacy policy from time to time. If you have any questions or concerns, please contact us through our official channels. Your privacy matters to us, and we appreciate your trust in our band.  \r\n', '01-Jun-2025 09:15:06:pm');

-- --------------------------------------------------------

--
-- Table structure for table `pperformedat`
--

CREATE TABLE `pperformedat` (
  `id` int(255) NOT NULL,
  `uId` int(255) NOT NULL,
  `plocation` varchar(500) NOT NULL,
  `timeOfUpload` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pperformedat`
--

INSERT INTO `pperformedat` (`id`, `uId`, `plocation`, `timeOfUpload`) VALUES
(51, 13, 'Delhi', '31-May-2025 08:51:18:pm'),
(52, 15, 'delhi', '03-Jun-2025 11:39:22:pm'),
(53, 15, 'bombay', '03-Jun-2025 11:39:34:pm'),
(54, 15, 'Nagpur', '03-Jun-2025 11:52:27:pm'),
(55, 16, 'Noida', '06-Jun-2025 07:31:52:pm');

-- --------------------------------------------------------

--
-- Table structure for table `promote`
--

CREATE TABLE `promote` (
  `id` int(255) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(400) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `link` varchar(1500) NOT NULL,
  `message` varchar(400) NOT NULL,
  `timeOfSending` varchar(400) NOT NULL,
  `status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promote`
--

INSERT INTO `promote` (`id`, `name`, `email`, `phone`, `link`, `message`, `timeOfSending`, `status`) VALUES
(2, 'Gopal Sadashiv Karankar', 'karankargopal0@gmail.com', '09284840689', 'fghbnj', 'tghnj', '10-Jun-2025 08:19:43:pm', 'Unseen'),
(3, 'Gopal Sadashiv Karankar', 'karankargopal0@gmail.com', '09284840689', 'fghbnj', 'tghnj', '10-Jun-2025 08:19:43:pm', 'Seen');

-- --------------------------------------------------------

--
-- Table structure for table `ptechnical`
--

CREATE TABLE `ptechnical` (
  `id` int(255) NOT NULL,
  `uId` int(255) NOT NULL,
  `pDetails` varchar(2000) NOT NULL,
  `timeOfUpload` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ptechnical`
--

INSERT INTO `ptechnical` (`id`, `uId`, `pDetails`, `timeOfUpload`) VALUES
(4, 13, 'Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Quis dolor quas ullam, repellat facilis sapiente, explicabo quod earum eveniet aperiam voluptatibus sint assumenda voluptatem nostrum id repudiandae amet. Obcaecati iusto eum modi impedit odio. Consequuntur ratione mollitia ipsam corporis nostrum, dolores, alias debitis! Eligendi incidunt molestiae nesciunt, aliquid natus eveniet delectus libero atque voluptates veritatis obcaecati debitis dolore provident esse velit accusantium alias aliquam similique odio! Eligendi sed dolorem iusto delectus magni exercitationem accusantium blanditiis, consequatur consectetur, vitae, ut? Quaerat, sed. Aspernatur unde voluptas at, repudiandae assumenda ullam quaerat minus inventore ipsam non reiciendis similique eligendi modi quis possimus! Molestias?', '31-May-2025 08:52:19:pm'),
(5, 15, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, dolor velit quaerat ipsam possimus, recusandae, impedit sint culpa ipsum nisi ipsa tempora quisquam eum blanditiis sunt aut, doloribus! Laboriosam nulla voluptatibus quis, dolore illo reprehenderit quibusdam quasi impedit fuga aperiam laborum? Nam molestiae dolore blanditiis doloribus culpa fugiat cupiditate temporibus ab dolor nemo rem, id ea magnam at delectus, distinctio esse quidem. Quis, placeat voluptates, repellendus error accusamus id. Praesentium necessitatibus molestiae quas consequuntur eum blanditiis, dolorum, porro et ut voluptatibus, pariatur, debitis! Quam dolores, asperiores saepe aperiam tenetur deserunt voluptatum, harum praesentium, alias enim iure quidem, natus eos nesciunt.', '03-Jun-2025 11:50:56:pm'),
(6, 16, 'erdxcefx z', '06-Jun-2025 07:33:26:pm');

-- --------------------------------------------------------

--
-- Table structure for table `pvsocial`
--

CREATE TABLE `pvsocial` (
  `id` int(255) NOT NULL,
  `uId` int(255) NOT NULL,
  `platform` varchar(300) NOT NULL,
  `logo` varchar(300) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `status` varchar(255) NOT NULL,
  `timeOfUpload` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pvsocial`
--

INSERT INTO `pvsocial` (`id`, `uId`, `platform`, `logo`, `link`, `status`, `timeOfUpload`) VALUES
(10, 13, 'Twitter', '<i class=\"fa-brands fa-twitter\"></i>', 't.me', 'show', '31-May-2025 08:53:04:pm'),
(11, 15, 'youtube', '<i class=\"fa-brands fa-youtube\"></i>', 'fgchgutg', 'show', '03-Jun-2025 11:51:41:pm'),
(12, 16, 'dsvcx', '<i class=\"fa-brands fa-youtube\"></i>', 'dsvd', 'show', '06-Jun-2025 07:34:13:pm');

-- --------------------------------------------------------

--
-- Table structure for table `pvsongs`
--

CREATE TABLE `pvsongs` (
  `id` int(255) NOT NULL,
  `uId` int(255) NOT NULL,
  `vLink` varchar(1500) NOT NULL,
  `timeOfUpload` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pvsongs`
--

INSERT INTO `pvsongs` (`id`, `uId`, `vLink`, `timeOfUpload`) VALUES
(12, 13, 'link', '31-May-2025 08:51:47:pm'),
(13, 15, '<iframe  src=\"https://www.youtube.com/embed/w7dOOZR7Ivo?si=QQMvf-_X21GqGlTt\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>', '03-Jun-2025 11:46:10:pm'),
(14, 16, 'link', '06-Jun-2025 07:32:15:pm');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(255) NOT NULL,
  `platform` varchar(300) NOT NULL,
  `logo` varchar(300) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `status` varchar(255) NOT NULL,
  `timeOfUpload` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `platform`, `logo`, `link`, `status`, `timeOfUpload`) VALUES
(6, 'instagram', '<i class=\"fa-brands fa-instagram\"></i>', 'gvbhj', 'show', '03-Jun-2025 11:29:08:pm'),
(8, 'tw', '<i class=\"fa-brands fa-twitter\"></i>', 'tyfcg', 'show', '30-May-2025 08:47:58:pm'),
(9, 'wh', '<i class=\"fa-brands fa-whatsapp\"></i>', 'ufghv', 'show', '26-May-2025 05:52:57:am'),
(10, 'youtube', '<i class=\"fa-brands fa-youtube\"></i>', 'gfdxtrd', 'show', '03-Jun-2025 11:29:06:pm');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `id` int(255) NOT NULL,
  `equipName` varchar(300) NOT NULL,
  `equipDescr` varchar(300) NOT NULL,
  `timeOfUpload` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`id`, `equipName`, `equipDescr`, `timeOfUpload`) VALUES
(7, 'Microphones', 'Neumann U87, Shure SM7B, AKG C414', '09-Jun-2025 09:28:10:pm'),
(8, 'Monitoring ', 'Yamaha HS8, Beyerdynamic DT 990 Pro\r\n', '09-Jun-2025 09:28:36:pm'),
(9, 'Audio Interface', 'Universal Audio Apollo x8, RME Fireface', '09-Jun-2025 09:29:05:pm'),
(10, 'MIDI Controllers', ' Komplete Kontrol S88, Arturia KeyLab', '09-Jun-2025 09:29:52:pm'),
(11, 'Outboard Gear ', 'Neve 1073, SSL Fusion, Empirical Labs Distressor', '09-Jun-2025 09:30:34:pm'),
(12, 'Software', 'Pro Tools HD, Logic Pro X, Ableton Live Suite', '09-Jun-2025 09:31:12:pm');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(255) NOT NULL,
  `eventID` varchar(1000) NOT NULL,
  `fullName` varchar(400) NOT NULL,
  `senderEmail` varchar(300) NOT NULL,
  `phNumber` varchar(300) NOT NULL,
  `address` varchar(1500) NOT NULL,
  `status` varchar(400) NOT NULL,
  `timeOfUpload` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `eventID`, `fullName`, `senderEmail`, `phNumber`, `address`, `status`, `timeOfUpload`) VALUES
(1, '6', 'Gopal Sadashiv Karankar', 'karankargopal0@gmail.com', '09284840689', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore accusantium aliquam consectetur mollitia, minima beatae sequi ipsum distinctio fugit, qui quaerat, quasi quam? Possimus atque, quo molestias dolorum ad, repellendus quibusdam neque ratione, eius beatae sed aliquid repudiandae officiis. Iusto, corporis. Dolor incidunt minus in tempora cumque. Saepe vitae esse hic illo nemo in, fugiat magnam beatae velit labore tempora quam blanditiis quos officia quas exercitationem ipsam totam. Sed ab, reprehenderit ea unde necessitatibus fugit tempora perspiciatis laboriosam culpa quos ipsum expedita magnam! Alias, tenetur? Sit, in esse alias tempore quas voluptas nam veniam qui totam nostrum nesciunt est vero molestias cum mollitia ullam sint. Similique excepturi officiis, quibusdam accusamus iste magni, eos alias. Tenetur eveniet beatae sunt doloremque, corporis vel perspiciatis accusamus earum nostrum odit laboriosam a ipsam dolorem ab ex quia et culpa! Fugiat dolorum dolore aliquid magnam tempora odio veniam voluptatem, aperiam reiciendis, dicta minus aspernatur, voluptatum?\r\n', 'Unconfirmed', '02-Jun-2025 07:41:33:pm'),
(4, '6', 'Gopal Sadashiv Karankar', 'karankargopal0@gmail.com', '09284840689', 'Hanuman ward, near Tukdoji maharaj mandir, Desaiganj, Wadsa, District Gadchiroli', 'Confirmed', '04-Jun-2025 12:27:20:am');

-- --------------------------------------------------------

--
-- Table structure for table `tnc`
--

CREATE TABLE `tnc` (
  `id` int(255) NOT NULL,
  `tnc` varchar(2000) NOT NULL,
  `timeOfUpload` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tnc`
--

INSERT INTO `tnc` (`id`, `tnc`, `timeOfUpload`) VALUES
(1, 'By accessing and using this website, you agree to follow the stated terms. All content, including music, videos, and images, is for personal use only. Unauthorized distribution or reproduction is strictly prohibited.  \r\n\r\nAll music, logos, and images displayed on this website belong to the band and are protected by copyright laws. Any use, copying, or modification of these materials without permission is not allowed.  \r\n\r\nUsers must engage respectfully in comments, forums, and social media interactions linked to this website. Any abusive, illegal, or harmful behavior may result in restricted access or legal action.  \r\n\r\nPurchases of tickets and merchandise are final unless otherwise specified. Refunds or exchanges are at the band\'s discretion and subject to applicable laws. Delivery times may vary depending on location.  \r\n\r\nThe band reserves the right to update these terms at any time. Continued use of the website implies acceptance of any changes. For any inquiries, users can reach out through official contact channels.', '01-Jun-2025 09:22:10:pm');

-- --------------------------------------------------------

--
-- Table structure for table `typing`
--

CREATE TABLE `typing` (
  `id` int(255) NOT NULL,
  `txt1` varchar(500) NOT NULL,
  `txt2` varchar(500) NOT NULL,
  `txt3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `typing`
--

INSERT INTO `typing` (`id`, `txt1`, `txt2`, `txt3`) VALUES
(1, 'Welcome ', 'to ', 'Midwave productions');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming`
--

CREATE TABLE `upcoming` (
  `id` int(255) NOT NULL,
  `address` varchar(600) NOT NULL,
  `eventDate` varchar(400) NOT NULL,
  `eventTime` varchar(400) NOT NULL,
  `timeOfUpload` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upcoming`
--

INSERT INTO `upcoming` (`id`, `address`, `eventDate`, `eventTime`, `timeOfUpload`) VALUES
(6, 'Mathura', '2025-03-28', '05:08 PM', '04-Jun-2025 12:27:01:am'),
(7, 'new york', '2025-03-20', '08:02 AM', '31-Mar-2025 05:02:29:pm'),
(8, 'ong kong', '2025-03-28', '05:08 PM', '31-Mar-2025 05:02:50:pm'),
(9, 'new york', '2025-03-20', '08:02 AM', '31-Mar-2025 05:02:29:pm'),
(10, 'ong kong', '2025-03-28', '05:08 PM', '31-Mar-2025 05:02:50:pm'),
(11, 'new york', '2025-03-20', '08:02 AM', '31-Mar-2025 05:02:29:pm'),
(12, 'ong kong', '2025-03-28', '05:08 PM', '31-Mar-2025 05:02:50:pm'),
(13, 'new york', '2025-03-20', '08:02 AM', '31-Mar-2025 05:02:29:pm'),
(14, 'ong kong', '2025-03-28', '05:08 PM', '31-Mar-2025 05:02:50:pm'),
(15, 'new york', '2025-03-20', '08:02 AM', '31-Mar-2025 05:02:29:pm'),
(16, 'ong kong', '2025-03-28', '05:08 PM', '31-Mar-2025 05:02:50:pm'),
(17, 'Nagpur', '2025-06-06', '10:26 PM', '04-Jun-2025 08:26:56:pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookshow`
--
ALTER TABLE `bookshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bts`
--
ALTER TABLE `bts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coresocial`
--
ALTER TABLE `coresocial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `getintouch`
--
ALTER TABLE `getintouch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hired`
--
ALTER TABLE `hired`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index1`
--
ALTER TABLE `index1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index2`
--
ALTER TABLE `index2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `introsec2`
--
ALTER TABLE `introsec2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `introsec2img`
--
ALTER TABLE `introsec2img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mps`
--
ALTER TABLE `mps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mpsimage`
--
ALTER TABLE `mpsimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pabout`
--
ALTER TABLE `pabout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pcelebrity`
--
ALTER TABLE `pcelebrity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdighandles`
--
ALTER TABLE `pdighandles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phospi`
--
ALTER TABLE `phospi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pintro`
--
ALTER TABLE `pintro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pliveshw`
--
ALTER TABLE `pliveshw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Indexes for table `pp`
--
ALTER TABLE `pp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pperformedat`
--
ALTER TABLE `pperformedat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promote`
--
ALTER TABLE `promote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ptechnical`
--
ALTER TABLE `ptechnical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pvsocial`
--
ALTER TABLE `pvsocial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pvsongs`
--
ALTER TABLE `pvsongs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tnc`
--
ALTER TABLE `tnc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typing`
--
ALTER TABLE `typing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming`
--
ALTER TABLE `upcoming`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `bookshow`
--
ALTER TABLE `bookshow`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bts`
--
ALTER TABLE `bts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `coresocial`
--
ALTER TABLE `coresocial`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `getintouch`
--
ALTER TABLE `getintouch`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `index1`
--
ALTER TABLE `index1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `index2`
--
ALTER TABLE `index2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `intro`
--
ALTER TABLE `intro`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `introsec2`
--
ALTER TABLE `introsec2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `introsec2img`
--
ALTER TABLE `introsec2img`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mps`
--
ALTER TABLE `mps`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mpsimage`
--
ALTER TABLE `mpsimage`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pabout`
--
ALTER TABLE `pabout`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pcelebrity`
--
ALTER TABLE `pcelebrity`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pdighandles`
--
ALTER TABLE `pdighandles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `phospi`
--
ALTER TABLE `phospi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pintro`
--
ALTER TABLE `pintro`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pliveshw`
--
ALTER TABLE `pliveshw`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pp`
--
ALTER TABLE `pp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pperformedat`
--
ALTER TABLE `pperformedat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `promote`
--
ALTER TABLE `promote`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ptechnical`
--
ALTER TABLE `ptechnical`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pvsocial`
--
ALTER TABLE `pvsocial`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pvsongs`
--
ALTER TABLE `pvsongs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tnc`
--
ALTER TABLE `tnc`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `typing`
--
ALTER TABLE `typing`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upcoming`
--
ALTER TABLE `upcoming`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
