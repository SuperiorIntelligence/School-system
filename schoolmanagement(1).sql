-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 07:42 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_students`
--

CREATE TABLE IF NOT EXISTS `assign_students` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `studentId` int(11) NOT NULL COMMENT 'authorsId = studentId',
  `role` int(11) DEFAULT NULL,
  `classId` int(11) NOT NULL,
  `yearId` int(11) NOT NULL,
  `groupId` int(11) DEFAULT NULL,
  `shiftId` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_students`
--

INSERT INTO `assign_students` (`id`, `studentId`, `role`, `classId`, `yearId`, `groupId`, `shiftId`, `created_at`, `updated_at`) VALUES
(2, 3, NULL, 13, 12, 2, 1, '2021-09-25 11:02:21', '2021-10-09 08:48:59'),
(3, 4, NULL, 20, 7, 2, 2, '2021-09-25 15:31:55', '2021-10-09 07:30:36'),
(4, 5, NULL, 13, 13, 2, 1, '2021-09-25 15:34:05', '2021-09-25 15:34:05'),
(5, 6, NULL, 13, 14, 6, 2, '2021-09-25 15:39:28', '2021-09-25 15:39:28'),
(6, 7, NULL, 20, 13, 5, 1, '2021-09-26 02:51:13', '2021-09-26 02:51:13'),
(7, 8, NULL, 20, 13, 2, 2, '2021-09-26 02:55:10', '2021-09-26 02:55:10'),
(9, 10, NULL, 21, 14, 2, 1, '2021-09-28 05:55:54', '2021-09-28 05:55:54'),
(10, 3, NULL, 20, 14, 2, 1, '2021-09-28 15:54:42', '2021-09-28 15:54:42'),
(13, 14, NULL, 20, 14, 2, 1, '2021-10-09 08:13:55', '2021-10-09 09:01:50'),
(15, 32, NULL, 22, 13, 6, 2, '2022-07-02 06:06:46', '2022-07-02 06:06:46'),
(16, 33, NULL, 23, 7, 7, 1, '2022-07-02 06:48:17', '2022-07-02 06:48:17'),
(17, 37, NULL, 23, 18, 6, 4, '2022-07-10 07:55:54', '2022-07-10 07:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `assign_subjects`
--

CREATE TABLE IF NOT EXISTS `assign_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `classId` int(11) NOT NULL,
  `subjectId` int(11) NOT NULL,
  `fullMark` double NOT NULL,
  `passMark` double NOT NULL,
  `subjectiveMark` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_subjects`
--

INSERT INTO `assign_subjects` (`id`, `classId`, `subjectId`, `fullMark`, `passMark`, `subjectiveMark`, `created_at`, `updated_at`) VALUES
(1, 13, 1, 100, 33, 100, '2021-09-06 05:36:11', '2021-09-06 05:36:11'),
(2, 13, 2, 100, 33, 100, '2021-09-06 05:36:11', '2021-09-06 05:36:11'),
(3, 13, 5, 100, 33, 100, '2021-09-06 05:36:11', '2021-09-06 05:36:11'),
(4, 13, 7, 100, 33, 100, '2021-09-06 05:36:11', '2021-09-06 05:36:11'),
(5, 20, 1, 100, 33, 100, '2021-09-06 05:45:37', '2021-09-06 05:45:37'),
(6, 20, 2, 100, 33, 100, '2021-09-06 05:45:37', '2021-09-06 05:45:37'),
(7, 20, 5, 100, 33, 100, '2021-09-06 05:45:37', '2021-09-06 05:45:37'),
(8, 20, 7, 100, 33, 100, '2021-09-06 05:45:37', '2021-09-06 05:45:37'),
(9, 21, 1, 100, 33, 100, '2021-09-06 05:46:06', '2021-09-06 05:46:06'),
(10, 21, 2, 100, 33, 100, '2021-09-06 05:46:06', '2021-09-06 05:46:06'),
(11, 21, 5, 100, 33, 100, '2021-09-06 05:46:06', '2021-09-06 05:46:06'),
(12, 21, 7, 100, 33, 100, '2021-09-06 05:46:06', '2021-09-06 05:46:06'),
(13, 22, 1, 100, 33, 100, '2021-10-27 15:39:15', '2021-10-27 15:39:15'),
(18, 29, 1, 100, 33, 100, '2022-06-30 10:17:05', '2022-06-30 10:17:05'),
(19, 29, 2, 100, 33, 100, '2022-06-30 10:17:05', '2022-06-30 10:17:05'),
(20, 23, 11, 100, 33, 100, '2022-07-10 08:08:04', '2022-07-10 08:08:04'),
(21, 23, 12, 100, 33, 100, '2022-07-10 08:08:04', '2022-07-10 08:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Student,Employee,Admin',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fatherName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motherName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idNO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'admin,operator,user',
  `designationId` int(11) DEFAULT NULL,
  `joinDate` date DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=inactive,1=active',
  `remember_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `usertype`, `name`, `email`, `password`, `mobile`, `address`, `gender`, `profile_photo`, `fatherName`, `motherName`, `religion`, `idNO`, `dateOfBirth`, `code`, `role`, `designationId`, `joinDate`, `salary`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'jack', 'jack@gmail.com', '$2y$10$29yY.3GJgKAcebxklsTJ0.KGNRg9diHzWK/FYjWZb4Ew9L8KGTtte', '+12137700843', 'USA', 'Male', 'image\\picProfile\\2022\\1736974085214931.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'Admin', NULL, NULL, NULL, 0, '', NULL, '2022-09-16 13:11:07'),
(3, 'Student', 'Harry Hairston', 'Harry.Hairston5169@gmail.com', '$2y$10$9T5FpyH2wgos9wzFE/yKletOIkoghMkdDxUNPdVR7Hypb6.IwNXaS', '+12137747843', 'USA', 'Male', 'image\\studentPhotos\\2021\\2021092818091712170047741271.jpg', 'Sergio Hairston', 'Geraldine Hairston', 'Islam', '20180001', '1993-08-10', '5169', 'Student', NULL, NULL, NULL, 0, '', '2021-09-25 11:02:21', '2022-07-06 10:38:09'),
(4, 'Student', 'Alison Mark', 'Alison.Mark2492@gmail.com', '$2y$10$WMARD5iovzPx0dHqXFp92OYfgNbXrLyjioGWq6xB.l0Fgt0CUk4Bq', '+12157748843', 'USA', 'Female', 'image\\studentPhotos\\2021\\2021092519011711901524236402.jpg', 'Alan Mark', 'Ava Mark', 'Christian', '20200004', '2008-05-15', '2492', 'Student', NULL, NULL, NULL, 0, NULL, '2021-09-25 15:31:55', '2021-10-09 07:30:28'),
(5, 'Student', 'Colin Hubler', 'Colin.Hubler8858@gmail.com', '$2y$10$kSft2dR4K95K6UsUCnLT/.133W.00yK2AtTfSO.FZOJog2ap4PM.m', '+12127147842', 'UK', 'Male', 'image\\studentPhotos\\2021\\2021092519041711901660539627.jpg', 'David Hubler', 'Sally Hubler', 'Islam', '20210005', '2009-07-14', '8858', 'Student', NULL, NULL, NULL, 0, NULL, '2021-09-25 15:34:05', '2021-09-25 15:34:05'),
(6, 'Student', 'Tracey Lambert', NULL, '$2y$10$QswIod6/ngzFUuXfZwMe6utDz1gd9MgSaO1frUgPvE7EYkFyDt3MS', '+13131743843', 'Canada', 'Female', 'image\\studentPhotos\\2021\\2021092519091711901999002233.jpg', 'Joe Lambert', 'Victoria Lambert', 'Christian', '20170006', '1998-02-11', '7366', 'Student', NULL, NULL, NULL, 0, NULL, '2021-09-25 15:39:28', '2021-09-25 15:39:28'),
(7, 'Student', 'Frank Osteen', NULL, '$2y$10$zjHDIPVuy54BR/mIVaxl2.g8v.QOKxT8a4X2GRw6bH6rqpczykNky', '7158272541', 'USA', 'Male', 'image\\studentPhotos\\2021\\2021092606211711944261617532.jpg', 'Will Osteen', 'Elizabeth Osteen', 'Islam', '20210007', '2005-08-09', '8177', 'Student', NULL, NULL, NULL, 0, NULL, '2021-09-26 02:51:13', '2021-09-26 02:51:13'),
(8, 'Student', 'Helen McDonald', NULL, '$2y$10$iquZKDe21K1CMzBqAX9XpeeOvIpE9FR/5gRVLZNDGB9d.I8RW.hbq', '5029186225', 'USA', 'Female', 'image\\studentPhotos\\2021\\2021092606251711944509717318.jpg', 'Curtis McDonald', 'Lindsay McDonald', 'Christian', '20210008', '1995-09-07', '3855', 'Student', NULL, NULL, NULL, 0, NULL, '2021-09-26 02:55:10', '2021-09-26 02:55:10'),
(10, 'Student', 'Marjorie Martin', NULL, '$2y$10$ZPDAIl0CA8HjoVpTdmqjluNX/Bb3ftGtcuFBpcf5wSysUzHc8N9Cm', '3475133296', 'USA', 'Female', '', 'Oswaldo Martin', 'Elinor Martin', 'Christian', '20170009', '1970-08-13', '8104', 'Student', NULL, NULL, NULL, 0, NULL, '2021-09-28 05:55:54', '2021-10-09 07:31:05'),
(11, 'Admin', 'jack2', 'jack2@gmail.com', '$2y$10$5uiGv7e0glPycdRGwVC2M.vBk5YDbxbBB8GRFA3mB7ZrzwDGqSg4W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Admin', NULL, NULL, NULL, 0, NULL, '2021-10-07 06:29:34', '2021-10-07 06:29:34'),
(14, 'Student', 'dsfh', NULL, '$2y$10$4l557KRJTKc4f/./Fqp.CeNMgVKmYD7Rkzk8AsK0zxZB69ELmZcV.', '+6564654555', 'dfasd112', 'Female', 'image\\studentPhotos\\2022\\2022052805301734046724953448.jpg', 'kjhasdkf12', 'khaldfh3', 'Christian', '20180011', '2021-10-11', '98', 'Student', NULL, NULL, NULL, 0, NULL, '2021-10-09 08:13:55', '2022-07-10 07:47:40'),
(15, 'Employee', 'Dorothy Cannon', 'Dorothy@gmail.com', '$2y$10$TQxdMUndaMGe83sInwOyBON1p/sXUdWjBH0ORtse0FTtTOcWvyUjK', '4126570532', 'UK', 'Female', 'image\\employeePhotos\\2022\\2022070405501737400064573701.jpg', 'Martin Cannon', 'Sheila Cannon', 'Christian', '2021100001', '1989-09-04', '7810', NULL, 3, '2021-10-09', 2500, 0, '', '2021-10-09 14:47:31', '2022-07-06 10:42:12'),
(16, 'Employee', 'Sarah Daniels', 'sara@gmail.com', '$2y$10$sWpBuDK1jSlYjZKzvDnH8ehV4NM2qKWqMrYgLtBHARtUmuRDzZFEi', '5028214966', 'Canada', 'Female', 'image\\employeePhotos\\2021\\2021101010251713227971177641.jpg', 'Albert Daniels', 'Florence Daniels', 'Christian', '2021100016', '1985-08-14', '7859', NULL, 7, '2021-10-10', 4400, 0, '', '2021-10-10 06:55:14', '2022-07-06 10:44:57'),
(17, 'Employee', 'test', NULL, '$2y$10$C8Ziyh4IrhxJSbneE1EF7ucJg3UsgkCcOspt3AgnpgDPtzkoQD/fS', '88888888888', 'test', 'Other', 'image\\employeePhotos\\2022\\2022070405511737400119835096.jpg', 'test', 'test', 'Christian', '2021100017', '2021-10-13', '8584', NULL, 1, '2021-10-13', 0, 0, NULL, '2021-10-13 16:19:56', '2022-07-04 01:21:11'),
(18, 'Admin', 'fati1', 'fati@gmail.com', '$2y$10$7VNJ0oMNtXBpGgXzmrZG1.Ua4bgdFg7Ey2jdpMLBkLqCtYUMRPKvO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9193', 'Admin', NULL, NULL, NULL, 0, NULL, '2021-11-14 15:05:41', '2022-06-27 08:02:02'),
(19, 'Admin', 'Mahdi1', 'Mahdi@gmail.com', '$2y$10$FhQXpl/0lkPXnf5lMgRbuO3fTcDRl0XTd2V158pSIdgefqiVZ2Mp.', NULL, NULL, NULL, 'image\\picProfile\\2022\\1736785272606507.jpg', NULL, NULL, NULL, NULL, NULL, '6004', 'Employee', NULL, NULL, NULL, 0, '', '2022-01-09 07:37:59', '2022-06-27 06:29:02'),
(21, NULL, 'me', 'me@gmail.com', '$2y$10$ZtrxJ8fIRha.giUMBwHNVe9MODx2tWqJN1YDu3ZYXN5LL5OYzeW/C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '2022-06-27 10:20:12', '2022-06-27 10:29:02'),
(32, 'Student', 'Nancy Walker', 'Nancy.Walker3456@gmail.com', '$2y$10$n17sh94apvFRqEelurCP6OS41lctyeGVHBa0z26SS8KI3u3E.n6oe', '8153013935', 'UKA', 'Female', 'image\\studentPhotos\\2022\\2022070210361737236892728656.jpg', 'Charles Walker', 'Kathryn Rogers', 'Islam', '20210015', '2010-07-20', '3456', 'Student', NULL, NULL, NULL, 0, '', '2022-07-02 06:06:46', '2022-07-02 06:37:32'),
(33, 'Student', 'Darrin Leach', 'Darrin.Leach9118@gmail.com', '$2y$10$Itr2OkkZwRaKXhdmf1HNmuTya0McbAG.0MMGWtTqX.qwhP02G26Iu', '6032222931', 'IRAN', 'Male', 'image\\studentPhotos\\2022\\2022070211181737239505536919.jpg', 'Edward Leach', 'Dawn Shumate', 'Christian', '20200033', '1996-07-05', '9118', 'Student', NULL, NULL, NULL, 0, '', '2022-07-02 06:48:17', '2022-08-22 03:46:15'),
(34, 'Employee', 'Queen Corkery', 'Queen.Corkery697@gmail.com', '$2y$10$8onqHSrXExm8bex2PfY2.uaRDinu4gN1kcPFqx.kItEXHgJTBw1F2', '12209582252', 'USA', 'Female', 'image\\employeePhotos\\2022\\2022070318351737357597404546.jpg', 'Dandre Corkery', 'Lue Langworth', 'Christian', '2022070018', '1989-05-18', '697', NULL, 7, '2022-07-03', 5000, 0, '', '2022-07-03 13:07:24', '2022-07-09 10:38:17'),
(36, 'Admin', 'Roberta Boyd', 'RobertaBoyd@gmail.com', '$2y$10$HPAGo4Pv932w65eQxdTRGehe0wP2pMmVpmlTx5ggqvZng2dACAOnq', NULL, NULL, NULL, 'image\\picProfile\\2022\\1737967195442128.jpg', NULL, NULL, NULL, NULL, NULL, '7115', 'Admin', NULL, NULL, NULL, 0, '', '2022-07-10 07:31:30', '2022-07-10 07:56:27'),
(37, 'Student', 'Hasan Sabori', 'Hasan.Sabori3600@gmail.com', '$2y$10$XwMnd6EiJLHUzqcARtGmqugI.dqJBYlNQwAfNewuvn3LHRykoHCb2', '09124569019', 'Iran Tehran', 'Male', 'image\\picProfile\\2022\\1738148296386752.jpg', 'Mohsen Sabori', 'Sara Almasi', 'Islam', '20220034', '2001-07-14', '3600', 'Student', NULL, NULL, NULL, 0, '', '2022-07-10 07:55:54', '2022-07-13 01:48:20'),
(38, 'Employee', 'Eunice Boylan', 'Eunice.Boylan8791@gmail.com', '$2y$10$I8VpPyNa7btBb1AFG8Kiwe5YCbCS4E32itdX1gha2U4U/k/R.a.ve', '9015529035', 'Canadian', 'Female', 'image\\employeePhotos\\2022\\2022071210151738141516104310.jpg', 'Tony Boylan', 'Ann Patterson', 'Christian', '2022040035', '1978-07-21', '8791', NULL, 7, '2022-04-10', 3000, 0, '', '2022-07-12 05:45:22', '2022-07-13 05:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE IF NOT EXISTS `designations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `designations_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Head Teacher', '2021-09-18 08:14:36', '2021-09-18 13:43:29'),
(2, 'Assistant Teacher', '2021-09-18 08:15:36', '2021-09-18 08:15:36'),
(3, 'Teacher', '2021-09-18 08:16:00', '2021-09-18 08:16:00'),
(7, 'Clerk', '2022-07-03 01:58:42', '2022-07-03 01:58:42');

-- --------------------------------------------------------

--
-- Table structure for table `discount_students`
--

CREATE TABLE IF NOT EXISTS `discount_students` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `assignStudentId` int(11) NOT NULL,
  `feeCategoryId` int(11) DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount_students`
--

INSERT INTO `discount_students` (`id`, `assignStudentId`, `feeCategoryId`, `discount`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 81, '2021-09-25 11:02:21', '2021-10-09 08:17:20'),
(3, 3, 1, 15, '2021-09-25 15:31:55', '2021-10-09 07:30:43'),
(4, 4, 1, 7, '2021-09-25 15:34:05', '2021-09-25 15:34:05'),
(5, 5, 1, 4, '2021-09-25 15:39:28', '2021-09-25 15:39:28'),
(6, 6, 1, 20, '2021-09-26 02:51:13', '2021-09-26 02:51:13'),
(7, 7, 1, 1, '2021-09-26 02:55:10', '2021-09-26 02:55:10'),
(9, 9, 1, 0, '2021-09-28 05:55:54', '2021-09-28 05:55:54'),
(10, 10, 1, 8, '2021-09-28 15:54:42', '2021-09-28 15:54:42'),
(11, 11, 1, 14, '2021-10-09 04:46:09', '2021-10-09 04:46:09'),
(13, 13, 1, 651, '2021-10-09 08:13:55', '2021-10-09 09:01:27'),
(14, 14, 1, 14, '2022-07-02 05:52:25', '2022-07-02 05:52:25'),
(15, 15, 1, 14, '2022-07-02 06:06:46', '2022-07-02 06:06:46'),
(16, 16, 1, 22, '2022-07-02 06:48:17', '2022-07-02 06:48:17'),
(17, 17, 1, 0, '2022-07-10 07:55:54', '2022-07-10 07:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `employee_attendances`
--

CREATE TABLE IF NOT EXISTS `employee_attendances` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `employeeId` int(11) NOT NULL,
  `date` date NOT NULL,
  `attendStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_attendances`
--

INSERT INTO `employee_attendances` (`id`, `employeeId`, `date`, `attendStatus`, `created_at`, `updated_at`) VALUES
(37, 15, '2021-09-26', 'Absent', '2021-10-26 16:43:46', '2021-10-26 16:43:46'),
(38, 16, '2021-09-26', 'Present', '2021-10-26 16:43:46', '2021-10-26 16:43:46'),
(39, 17, '2021-09-26', 'Present', '2021-10-26 16:43:46', '2021-10-26 16:43:46'),
(48, 15, '2021-11-27', 'Present', '2021-11-13 07:14:34', '2021-11-13 07:14:34'),
(49, 16, '2021-11-27', 'Absent', '2021-11-13 07:14:34', '2021-11-13 07:14:34'),
(50, 15, '2021-10-25', 'Present', '2021-11-13 07:15:22', '2021-11-13 07:15:22'),
(51, 16, '2021-10-25', 'Present', '2021-11-13 07:15:22', '2021-11-13 07:15:22'),
(52, 17, '2021-10-25', 'Absent', '2021-11-13 07:15:22', '2021-11-13 07:15:22'),
(61, 15, '2021-11-26', 'Absent', '2022-07-04 07:40:56', '2022-07-04 07:40:56'),
(62, 16, '2021-11-26', 'Present', '2022-07-04 07:40:56', '2022-07-04 07:40:56'),
(63, 17, '2021-11-26', 'Present', '2022-07-04 07:40:56', '2022-07-04 07:40:56'),
(79, 15, '2021-11-29', 'Absent', '2022-07-04 14:08:20', '2022-07-04 14:08:20'),
(80, 16, '2021-11-29', 'Absent', '2022-07-04 14:08:20', '2022-07-04 14:08:20'),
(81, 34, '2021-11-29', 'Present', '2022-07-04 14:08:20', '2022-07-04 14:08:20'),
(82, 15, '2021-11-28', 'Absent', '2022-07-04 14:08:23', '2022-07-04 14:08:23'),
(83, 16, '2021-11-28', 'Absent', '2022-07-04 14:08:23', '2022-07-04 14:08:23'),
(84, 34, '2021-11-28', 'Absent', '2022-07-04 14:08:23', '2022-07-04 14:08:23'),
(85, 15, '2021-10-24', 'Present', '2022-07-05 01:01:59', '2022-07-05 01:01:59'),
(86, 16, '2021-10-24', 'Present', '2022-07-05 01:01:59', '2022-07-05 01:01:59'),
(87, 17, '2021-10-24', 'Absent', '2022-07-05 01:01:59', '2022-07-05 01:01:59'),
(88, 15, '2021-10-26', 'Present', '2022-07-05 01:02:05', '2022-07-05 01:02:05'),
(89, 16, '2021-10-26', 'Present', '2022-07-05 01:02:05', '2022-07-05 01:02:05'),
(90, 17, '2021-10-26', 'Absent', '2022-07-05 01:02:05', '2022-07-05 01:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leaves`
--

CREATE TABLE IF NOT EXISTS `employee_leaves` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `employeeId` int(11) NOT NULL,
  `leavePurposeId` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary_logs`
--

CREATE TABLE IF NOT EXISTS `employee_salary_logs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `employeeId` int(11) NOT NULL COMMENT 'employeeId= authorsId ',
  `previousSalary` int(11) DEFAULT NULL,
  `presentSalary` int(11) DEFAULT NULL,
  `incrementSalary` int(11) DEFAULT NULL,
  `effectedSalary` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_salary_logs`
--

INSERT INTO `employee_salary_logs` (`id`, `employeeId`, `previousSalary`, `presentSalary`, `incrementSalary`, `effectedSalary`, `created_at`, `updated_at`) VALUES
(1, 15, 3000, 3000, 0, '2021-10-09', '2021-10-09 14:47:31', '2021-10-09 14:47:31'),
(2, 16, 3500, 3500, 0, '2021-10-10', '2021-10-10 06:55:14', '2021-10-10 06:55:14'),
(6, 16, 3500, 4500, 1000, '2021-10-12', '2021-10-12 13:02:38', '2021-10-12 13:02:38'),
(7, 15, 3000, 7000, 4000, '2021-10-12', '2021-10-12 16:49:58', '2021-10-12 16:49:58'),
(8, 15, 7000, 6000, -1000, '2021-10-13', '2021-10-13 08:00:16', '2021-10-13 08:00:16'),
(9, 17, 0, 0, 0, '2021-10-13', '2021-10-13 16:19:56', '2021-10-13 16:19:56'),
(10, 34, 5000, 5000, 0, '2022-07-03', '2022-07-03 13:07:24', '2022-07-03 13:07:24'),
(11, 15, 6000, 12500, 6500, '2022-07-04', '2022-07-04 01:40:20', '2022-07-04 01:40:20'),
(12, 15, 12500, 2500, -10000, '2022-07-04', '2022-07-04 01:40:54', '2022-07-04 01:40:54'),
(13, 16, 4500, 4400, -100, '2022-07-05', '2022-07-05 03:43:32', '2022-07-05 03:43:32'),
(14, 38, 3000, 3000, 0, '2022-04-10', '2022-07-12 05:45:22', '2022-07-12 05:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `exam_types`
--

CREATE TABLE IF NOT EXISTS `exam_types` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `exam_types_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_types`
--

INSERT INTO `exam_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, '1st Terminal Exam', '2021-09-04 05:30:33', '2021-09-04 06:02:15'),
(4, '2nd Terminal Exam', '2021-09-04 05:31:39', '2021-09-04 05:31:39'),
(5, '3rd Terminal Exam', '2021-09-04 05:32:01', '2021-09-04 05:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_categories`
--

CREATE TABLE IF NOT EXISTS `fee_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fee_categories_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_categories`
--

INSERT INTO `fee_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Registration Fee', '2021-08-31 02:56:01', '2021-08-31 02:56:01'),
(2, 'Monthly Fee', '2021-08-31 03:07:48', '2021-08-31 05:14:29'),
(3, 'Exam Fee', '2021-08-31 03:08:24', '2021-08-31 05:14:34'),
(7, 'test', '2021-08-31 11:27:19', '2021-08-31 11:27:19'),
(13, 'mee', '2022-06-30 08:01:08', '2022-06-30 08:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `fee_category_amounts`
--

CREATE TABLE IF NOT EXISTS `fee_category_amounts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `feeCategoryId` int(11) NOT NULL,
  `classId` int(11) NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_category_amounts`
--

INSERT INTO `fee_category_amounts` (`id`, `feeCategoryId`, `classId`, `amount`, `created_at`, `updated_at`) VALUES
(41, 7, 13, 54646554, '2022-06-30 06:20:17', '2022-06-30 06:20:17'),
(42, 7, 21, 23234, '2022-06-30 06:20:17', '2022-06-30 06:20:17'),
(45, 13, 20, 8989, '2022-06-30 08:02:32', '2022-06-30 08:02:32'),
(46, 13, 20, 78787, '2022-06-30 08:02:32', '2022-06-30 08:02:32'),
(55, 1, 13, 300, '2022-07-02 10:43:35', '2022-07-02 10:43:35'),
(56, 1, 20, 600, '2022-07-02 10:43:35', '2022-07-02 10:43:35'),
(57, 1, 21, 800, '2022-07-02 10:43:35', '2022-07-02 10:43:35'),
(58, 1, 22, 1000, '2022-07-02 10:43:35', '2022-07-02 10:43:35'),
(59, 1, 23, 10000, '2022-07-02 10:43:35', '2022-07-02 10:43:35'),
(60, 2, 13, 10001, '2022-07-02 10:43:58', '2022-07-02 10:43:58'),
(61, 2, 20, 2000, '2022-07-02 10:43:58', '2022-07-02 10:43:58'),
(62, 2, 21, 3000, '2022-07-02 10:43:58', '2022-07-02 10:43:58'),
(63, 2, 22, 5000, '2022-07-02 10:43:58', '2022-07-02 10:43:58'),
(64, 2, 23, 500, '2022-07-02 10:43:58', '2022-07-02 10:43:58'),
(70, 3, 13, 1700, '2022-07-12 05:35:18', '2022-07-12 05:35:18'),
(71, 3, 20, 400, '2022-07-12 05:35:18', '2022-07-12 05:35:18'),
(72, 3, 21, 3000, '2022-07-12 05:35:18', '2022-07-12 05:35:18'),
(73, 3, 22, 2000, '2022-07-12 05:35:18', '2022-07-12 05:35:18'),
(74, 3, 23, 25000, '2022-07-12 05:35:18', '2022-07-12 05:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `grade_names`
--

CREATE TABLE IF NOT EXISTS `grade_names` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grade_names`
--

INSERT INTO `grade_names` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'A+', '2021-11-03 11:02:21', '2021-11-03 11:02:21'),
(3, 'A', '2021-11-03 11:05:07', '2021-11-03 11:05:07'),
(4, 'B+', '2021-11-03 11:05:07', '2021-11-03 11:05:07'),
(7, 'B', '2021-11-03 11:06:19', '2021-11-03 11:06:19'),
(8, 'C+', '2021-11-03 11:06:19', '2021-11-03 11:06:19'),
(9, 'C', '2021-11-03 11:07:08', '2021-11-03 11:07:08'),
(10, 'D+', '2021-11-03 11:07:08', '2021-11-03 11:07:08'),
(11, 'D', '2021-11-03 11:07:57', '2021-11-03 11:07:57'),
(12, 'F', '2021-11-03 11:07:57', '2021-11-03 11:07:57');

-- --------------------------------------------------------

--
-- Table structure for table `leave_purposes`
--

CREATE TABLE IF NOT EXISTS `leave_purposes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `leave_purposes_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_purposes`
--

INSERT INTO `leave_purposes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Family Problem', '2021-10-13 12:11:08', NULL),
(2, 'Personal Problem', '2021-10-13 12:11:30', NULL),
(3, 'Health Problem', '2021-10-13 16:21:29', '2021-10-13 16:21:29');

-- --------------------------------------------------------

--
-- Table structure for table `marks_grades`
--

CREATE TABLE IF NOT EXISTS `marks_grades` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `gradeName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gradePoint` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startMark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endMark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startPoint` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endPoint` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marks_grades`
--

INSERT INTO `marks_grades` (`id`, `gradeName`, `gradePoint`, `startMark`, `endMark`, `startPoint`, `endPoint`, `remark`, `created_at`, `updated_at`) VALUES
(1, '1', '4', '95', '100', '4', '4', 'Outstanding', '2021-11-04 11:43:19', '2022-07-05 08:37:20'),
(2, '3', '3.75', '90', '94', '3.75', '3.75', 'Excellent', '2021-11-04 13:42:22', '2021-11-04 13:42:22'),
(3, '4', '3.5', '85', '89', '3.5', '3.5', 'very good', '2021-11-04 13:43:50', '2021-11-04 13:43:50'),
(4, '9', '2', '70', '74', '2', '2', 'Average', '2021-11-14 15:47:21', '2021-11-14 15:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(28, '2014_10_12_000000_create_users_table', 1),
(29, '2014_10_12_100000_create_password_resets_table', 1),
(30, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(31, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(32, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(33, '2016_06_01_000004_create_oauth_clients_table', 1),
(34, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(35, '2019_08_19_000000_create_failed_jobs_table', 1),
(38, '2021_08_26_082200_create_student_classes_table', 3),
(39, '2021_08_28_062611_create_student_years_table', 4),
(40, '2021_08_28_142206_create_student_groups_table', 5),
(41, '2021_08_29_082550_create_student_shifts_table', 6),
(42, '2021_08_30_112609_create_fee_categories_table', 7),
(43, '2021_08_31_103211_create_fee_category_amounts_table', 8),
(44, '2021_09_04_070428_create_exam_types_table', 9),
(45, '2021_09_04_171340_create_school_subjects_table', 10),
(46, '2021_09_05_070145_create_assign_subjects_table', 11),
(47, '2021_09_18_055756_create_designations_table', 12),
(49, '2021_09_21_105412_create_assign_students_table', 14),
(50, '2021_09_21_111321_create_discount_students_table', 14),
(53, '2021_08_03_051735_create_authors_table', 15),
(54, '2021_10_07_102025_create_employee_salary_logs_table', 16),
(55, '2021_10_13_114507_create_leave_purposes_table', 17),
(56, '2021_10_13_114618_create_employee_leaves_table', 17),
(57, '2021_10_20_054055_create_employee_attendances_table', 18),
(58, '2021_10_27_131439_create_student_marks_table', 19),
(59, '2021_11_03_094320_create_marks_grades_table', 20),
(60, '2021_11_03_110031_create_grade_names_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'Sq1xu17oFmZS0a3VQqi1vghg921npvm3HwgQB58U', NULL, 'http://localhost', 1, 0, 0, '2021-08-04 11:29:46', '2021-08-04 11:29:46'),
(2, NULL, 'Laravel Password Grant Client', 'ZJzJHctn528rS7qrOrMIzvqOuU7eLtf4g9suxw25', 'users', 'http://localhost', 0, 1, 0, '2021-08-04 11:29:46', '2021-08-04 11:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(2, 1, '2021-10-14 14:31:33', '2021-10-14 14:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_subjects`
--

CREATE TABLE IF NOT EXISTS `school_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `school_subjects_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_subjects`
--

INSERT INTO `school_subjects` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'English', '2021-09-04 14:12:13', '2021-09-04 14:12:13'),
(5, 'Mathematics', '2021-09-06 01:44:40', '2021-09-06 01:44:40'),
(7, 'Arts', '2021-09-06 01:45:30', '2021-09-06 01:45:43'),
(10, 'Chemistry', '2022-07-10 08:06:45', '2022-07-10 08:06:45'),
(11, 'Algebra', '2022-07-10 08:07:01', '2022-07-10 08:07:01'),
(12, 'Religious', '2022-07-10 08:07:29', '2022-07-10 08:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE IF NOT EXISTS `student_classes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_classes_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(13, 'Class One', '2021-10-30 06:14:54', '2021-10-30 06:14:54'),
(20, 'Class Tow', '2021-08-31 13:27:53', '2021-09-22 08:50:16'),
(21, 'Class Three', '2021-09-02 03:08:28', '2021-09-02 03:08:28'),
(22, 'Class Four', '2021-09-06 01:43:43', '2021-09-22 08:49:36'),
(23, 'Class Five', '2021-09-06 01:43:52', '2021-09-22 08:49:41'),
(26, 'Class Seven', '2021-11-14 15:16:58', '2021-11-14 15:16:58'),
(29, 'Class test', '2022-06-30 10:12:53', '2022-06-30 10:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `student_groups`
--

CREATE TABLE IF NOT EXISTS `student_groups` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_groups_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_groups`
--

INSERT INTO `student_groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Math', '2021-08-28 13:14:18', '2021-08-28 13:14:18'),
(5, 'Art', '2021-08-30 05:11:36', '2021-08-30 05:11:36'),
(6, 'Sport', '2021-09-25 15:35:08', '2021-09-25 15:35:08'),
(7, 'Physics', '2021-09-25 15:36:01', '2021-09-25 15:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE IF NOT EXISTS `student_marks` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `studentId` int(11) NOT NULL,
  `idNO` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yearId` int(11) DEFAULT NULL,
  `classId` int(11) DEFAULT NULL,
  `assignSubjectId` int(11) DEFAULT NULL,
  `examTypeId` int(255) DEFAULT NULL,
  `Marks` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`id`, `studentId`, `idNO`, `yearId`, `classId`, `assignSubjectId`, `examTypeId`, `Marks`, `created_at`, `updated_at`) VALUES
(1, 7, '20210007', 13, 20, 1, 3, 72, '2021-10-30 08:44:34', '2021-11-03 05:51:56'),
(3, 7, '20210007', 13, 20, 2, 4, 93, '2021-10-30 13:06:16', '2021-10-30 13:06:16'),
(4, 8, '20210008', 13, 20, 2, 4, 90, '2021-10-30 13:06:16', '2021-10-30 13:06:16'),
(6, 8, '20210008', 13, 20, 1, 3, 97, '2021-10-31 16:26:17', '2021-10-31 16:26:17'),
(7, 5, '20210005', 13, 13, 1, 3, 87, '2021-11-14 15:39:43', '2021-11-14 15:40:31'),
(8, 3, '20180001', 12, 13, 1, 3, 96, '2022-07-05 05:16:05', '2022-07-05 05:16:05'),
(9, 37, '20220034', 18, 23, 11, 3, 90, '2022-07-12 06:02:48', '2022-07-12 06:33:21'),
(10, 33, '20200033', 7, 23, 11, 3, 89, '2022-08-22 03:34:25', '2022-08-22 03:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `student_shifts`
--

CREATE TABLE IF NOT EXISTS `student_shifts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_shifts_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_shifts`
--

INSERT INTO `student_shifts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Shift A', '2021-08-30 03:18:57', '2021-08-30 03:18:57'),
(2, 'Shift B', '2021-08-30 03:19:49', '2021-08-30 03:19:49'),
(3, 'Shift Test1', '2021-08-30 03:42:01', '2021-08-30 05:48:17'),
(4, 'Shift C', '2021-08-30 05:07:01', '2021-08-30 05:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `student_years`
--

CREATE TABLE IF NOT EXISTS `student_years` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_years_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_years`
--

INSERT INTO `student_years` (`id`, `name`, `created_at`, `updated_at`) VALUES
(7, '2020', '2021-08-28 07:53:37', '2021-08-28 07:53:37'),
(12, '2018', '2021-09-22 07:31:19', '2021-09-22 07:31:19'),
(13, '2021', '2021-09-22 07:31:43', '2021-09-22 07:31:43'),
(14, '2017', '2021-09-25 15:34:33', '2021-09-25 15:34:33'),
(15, '2016', '2021-09-25 15:34:40', '2021-09-25 15:34:40'),
(18, '2022', '2022-07-02 06:16:31', '2022-07-02 06:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
