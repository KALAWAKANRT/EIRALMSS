-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 10:34 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erovoutikalmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `code`, `status`, `created_at`) VALUES
(13, 'Renzzzz', 'amanterenz11@gmail.com', '$2y$10$lWvB6C/QbHlI.qfADgbureFGJfctcY9z6BMHR4ZVezSpMsaTTBv4O', 0, 'verified', '2023-12-31 18:33:09'),
(14, 'renzyyyy', 'amanterenz42@gmail.com', '$2y$10$JQPHtQZe1.nXl8XwpQvcjuQTc8PGchIFI.TX8iDo70HG5XGcobPx.', 0, 'verified', '2023-12-31 18:33:09'),
(19, 'Shane', 'shane@gmail.com', '$2y$10$jaB36brJooAx6UhGsipnyOd/v1gaX7h6NUZMxszSYy9I7/m4sjmdS', 0, 'verified', '2024-01-03 15:45:32'),
(22, 'Test', 'loljerry24@gmail.com', '123', 0, 'verified', '2024-05-03 11:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE `audit_trail` (
  `id` int(11) NOT NULL,
  `table_name` varchar(255) NOT NULL,
  `action` varchar(50) NOT NULL,
  `record_id` int(11) UNSIGNED DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `audit_trail`
--

INSERT INTO `audit_trail` (`id`, `table_name`, `action`, `record_id`, `timestamp`) VALUES
(130, 'html_students', 'add', 10, '2024-01-10 10:38:59'),
(131, 'html_students', 'add', 11, '2024-01-11 01:48:57'),
(132, 'students', 'add', 13, '2024-01-12 02:06:15'),
(133, 'students', 'edit', 13, '2024-01-12 02:06:45'),
(134, 'students', 'add', 14, '2024-01-12 04:30:49'),
(135, 'students', 'edit', 14, '2024-01-12 04:31:09'),
(136, 'students', 'edit', 12, '2024-01-12 04:34:02'),
(137, 'students', 'edit', 13, '2024-01-12 04:34:02'),
(138, 'students', 'edit', 14, '2024-01-12 04:34:02'),
(139, 'html_students', 'add', 12, '2024-01-12 04:59:15'),
(140, 'students', 'add', 15, '2024-01-12 06:43:18'),
(141, 'students', 'add', 16, '2024-01-12 06:47:18'),
(142, 'students', 'edit', 16, '2024-01-12 06:47:35'),
(143, 'html_students', 'add', 13, '2024-01-12 06:59:22'),
(144, 'students', 'delete', 15, '2024-01-12 07:16:44'),
(145, 'html_students', 'delete', 12, '2024-01-12 07:16:56'),
(146, 'students', 'delete', 16, '2024-01-12 07:41:50'),
(147, 'html_students', 'delete', 13, '2024-01-12 07:41:59'),
(148, 'students', 'add', 17, '2024-01-12 07:42:49'),
(149, 'students', 'edit', 17, '2024-01-12 07:43:07'),
(150, 'html_students', 'add', 14, '2024-01-12 07:45:00'),
(151, 'students', 'add', 18, '2024-04-22 07:42:06'),
(152, 'students', 'edit', 18, '2024-04-22 07:43:06'),
(153, 'html_students', 'add', 15, '2024-04-30 05:43:16'),
(154, 'html_students', 'edit', 15, '2024-04-30 05:43:37'),
(155, 'html_students', 'edit', 15, '2024-04-30 05:43:43'),
(156, 'students', 'edit', 18, '2024-05-03 05:52:01'),
(157, 'students', 'edit', 18, '2024-05-03 09:25:10'),
(158, 'students', 'edit', 18, '2024-05-03 09:53:06'),
(159, 'students', 'edit', 18, '2024-05-03 09:53:24'),
(160, 'students', 'edit', 18, '2024-05-03 09:55:06'),
(161, 'students', 'edit', 18, '2024-05-03 10:02:10'),
(162, 'students', 'edit', 18, '2024-05-06 01:06:56'),
(163, 'students', 'edit', 18, '2024-05-06 01:12:19'),
(164, 'students', 'edit', 18, '2024-05-06 01:12:24'),
(165, 'students', 'edit', 18, '2024-05-06 01:12:28'),
(166, 'students', 'edit', 18, '2024-05-06 01:25:58'),
(167, 'students', 'edit', 18, '2024-05-06 01:26:03'),
(168, 'students', 'edit', 18, '2024-05-06 01:46:20'),
(169, 'students', 'edit', 18, '2024-05-06 01:56:25'),
(170, 'students', 'edit', 18, '2024-05-06 01:56:29'),
(171, 'students', 'edit', 18, '2024-05-06 01:56:32'),
(172, 'students', 'edit', 18, '2024-05-06 01:56:59'),
(173, 'students', 'edit', 18, '2024-05-06 01:57:26'),
(174, 'students', 'edit', 18, '2024-05-06 02:00:44'),
(175, 'students', 'edit', 18, '2024-05-06 02:13:02'),
(176, 'students', 'edit', 18, '2024-05-06 02:17:50'),
(177, 'students', 'edit', 18, '2024-05-06 02:17:53'),
(178, 'students', 'edit', 18, '2024-05-06 02:18:13'),
(179, 'students', 'edit', 18, '2024-05-06 02:37:37'),
(180, 'students', 'edit', 18, '2024-05-06 02:42:07'),
(181, 'students', 'edit', 18, '2024-05-06 02:44:29'),
(182, 'students', 'edit', 18, '2024-05-06 02:46:13'),
(183, 'students', 'edit', 18, '2024-05-06 02:58:23'),
(184, 'students', 'edit', 18, '2024-05-06 03:49:01'),
(185, 'students', 'add', 19, '2024-05-06 03:51:53'),
(186, 'students', 'edit', 19, '2024-05-06 03:52:45'),
(187, 'students', 'edit', 18, '2024-05-06 04:51:09'),
(188, 'students', 'edit', 18, '2024-05-06 04:59:08'),
(189, 'students', 'edit', 18, '2024-05-06 05:37:14'),
(190, 'students', 'edit', 18, '2024-05-06 05:39:27'),
(191, 'students', 'edit', 18, '2024-05-06 06:26:42'),
(192, 'students', 'edit', 18, '2024-05-06 06:28:52'),
(193, 'students', 'edit', 18, '2024-05-06 09:00:28'),
(194, 'students', 'edit', 18, '2024-05-07 03:17:48'),
(195, 'students', 'edit', 18, '2024-05-07 03:32:40'),
(196, 'students', 'edit', 18, '2024-05-07 03:33:42'),
(197, 'students', 'edit', 18, '2024-05-07 03:36:09'),
(198, 'students', 'edit', 18, '2024-05-07 03:37:55'),
(199, 'students', 'edit', 18, '2024-05-07 04:02:48'),
(200, 'students', 'edit', 18, '2024-05-07 04:06:17'),
(201, 'students', 'edit', 18, '2024-05-07 04:06:25'),
(202, 'students', 'edit', 18, '2024-05-07 04:08:19'),
(203, 'students', 'edit', 18, '2024-05-07 04:14:18'),
(204, 'students', 'edit', 18, '2024-05-07 04:14:27'),
(205, 'students', 'edit', 18, '2024-05-07 04:14:33'),
(206, 'students', 'edit', 18, '2024-05-07 04:22:53'),
(207, 'students', 'edit', 18, '2024-05-07 05:04:01'),
(208, 'students', 'edit', 18, '2024-05-07 05:04:31'),
(209, 'students', 'edit', 18, '2024-05-07 05:13:50'),
(210, 'students', 'edit', 18, '2024-05-07 05:14:50'),
(211, 'students', 'edit', 18, '2024-05-07 05:16:07'),
(212, 'students', 'edit', 18, '2024-05-07 05:17:04'),
(213, 'students', 'edit', 18, '2024-05-07 05:17:38'),
(214, 'students', 'edit', 18, '2024-05-07 05:22:17'),
(215, 'students', 'edit', 18, '2024-05-07 05:29:10'),
(216, 'students', 'edit', 18, '2024-05-07 05:31:15'),
(217, 'students', 'edit', 18, '2024-05-07 05:45:13'),
(218, 'students', 'edit', 18, '2024-05-07 05:48:02'),
(219, 'students', 'edit', 18, '2024-05-07 05:48:52'),
(220, 'students', 'edit', 18, '2024-05-07 06:08:01'),
(221, 'students', 'edit', 18, '2024-05-07 06:17:49'),
(222, 'students', 'edit', 18, '2024-05-07 06:22:30'),
(223, 'students', 'edit', 18, '2024-05-07 06:24:34'),
(224, 'students', 'edit', 18, '2024-05-07 06:27:21'),
(225, 'students', 'edit', 18, '2024-05-07 06:31:51'),
(226, 'students', 'edit', 18, '2024-05-07 06:37:55'),
(227, 'students', 'edit', 18, '2024-05-07 06:39:50'),
(228, 'students', 'edit', 18, '2024-05-07 06:41:16'),
(229, 'students', 'edit', 18, '2024-05-07 06:48:32'),
(230, 'students', 'edit', 18, '2024-05-07 06:51:12'),
(231, 'students', 'edit', 18, '2024-05-07 06:52:31'),
(232, 'students', 'edit', 18, '2024-05-07 06:54:22'),
(233, 'students', 'edit', 18, '2024-05-07 06:58:22'),
(234, 'students', 'edit', 18, '2024-05-07 07:00:18'),
(235, 'students', 'edit', 18, '2024-05-07 07:01:11'),
(236, 'students', 'edit', 18, '2024-05-07 07:03:09'),
(237, 'students', 'edit', 18, '2024-05-07 07:04:40'),
(238, 'students', 'edit', 18, '2024-05-08 01:06:36'),
(239, 'students', 'edit', 18, '2024-05-08 02:04:36'),
(240, 'students', 'edit', 18, '2024-05-08 03:31:26'),
(241, 'students', 'edit', 18, '2024-05-08 04:07:03'),
(242, 'students', 'edit', 18, '2024-05-08 04:07:32'),
(243, 'students', 'edit', 18, '2024-05-08 06:24:44'),
(244, 'students', 'edit', 19, '2024-05-08 06:48:54'),
(245, 'students', 'edit', 19, '2024-05-08 06:57:33'),
(246, 'students', 'edit', 19, '2024-05-08 06:57:57'),
(247, 'students', 'edit', 19, '2024-05-08 07:00:44'),
(248, 'students', 'edit', 19, '2024-05-08 07:02:43'),
(249, 'students', 'edit', 19, '2024-05-08 07:14:01'),
(250, 'students', 'edit', 19, '2024-05-08 07:14:12'),
(251, 'students', 'edit', 19, '2024-05-08 07:27:54'),
(252, 'students', 'edit', 18, '2024-05-08 07:33:01'),
(253, 'students', 'edit', 18, '2024-05-08 07:37:58'),
(254, 'students', 'add', 20, '2024-05-08 07:51:56'),
(255, 'students', 'delete', 20, '2024-05-08 07:57:14'),
(256, 'students', 'add', 21, '2024-05-08 07:57:26'),
(257, 'students', 'edit', 21, '2024-05-08 07:59:49'),
(258, 'students', 'delete', 19, '2024-05-08 08:12:31'),
(259, 'students', 'delete', 21, '2024-05-08 08:12:41'),
(260, 'students', 'add', 22, '2024-05-08 08:13:33'),
(261, 'students', 'edit', 22, '2024-05-08 08:14:04'),
(262, 'students', 'edit', 18, '2024-05-08 08:28:42'),
(263, 'students', 'edit', 18, '2024-05-08 08:29:14'),
(264, 'students', 'edit', 18, '2024-05-08 08:30:05'),
(265, 'students', 'add', 23, '2024-05-08 08:49:09'),
(266, 'students', 'edit', 23, '2024-05-08 08:54:00'),
(267, 'students', 'edit', 18, '2024-05-08 10:01:59'),
(268, 'html_students', 'delete', 15, '2024-05-09 07:42:53'),
(269, 'students', 'delete', 23, '2024-05-09 07:43:15'),
(270, 'students', 'edit', 18, '2024-05-09 07:59:24'),
(271, 'students', 'edit', 18, '2024-05-09 07:59:28'),
(272, 'students', 'edit', 18, '2024-05-09 07:59:33'),
(273, 'students', 'add', 23, '2024-05-10 03:50:45'),
(274, 'students', 'delete', 22, '2024-05-10 03:52:27'),
(275, 'students', 'delete', 23, '2024-05-10 03:52:30'),
(276, 'students', 'add', 24, '2024-05-10 03:53:16'),
(277, 'students', 'edit', 24, '2024-05-10 03:54:00'),
(278, 'students', 'edit', 24, '2024-05-10 03:54:06'),
(279, 'students', 'edit', 24, '2024-05-10 03:55:04'),
(280, 'students', 'delete', 24, '2024-05-10 03:55:15'),
(281, 'students', 'add', 25, '2024-05-10 03:56:29'),
(282, 'students', 'delete', 25, '2024-05-10 03:57:31'),
(283, 'students', 'add', 26, '2024-05-10 03:58:36'),
(284, 'students', 'edit', 26, '2024-05-10 03:59:56'),
(285, 'students', 'edit', 26, '2024-05-10 04:00:59'),
(286, 'students', 'delete', 26, '2024-05-10 04:01:09'),
(287, 'students', 'add', 27, '2024-05-10 04:02:36'),
(288, 'students', 'add', 28, '2024-05-10 04:03:28'),
(289, 'students', 'delete', 28, '2024-05-10 04:03:42'),
(290, 'students', 'delete', 27, '2024-05-10 04:03:49'),
(291, 'students', 'add', 29, '2024-05-10 04:05:55'),
(292, 'students', 'edit', 29, '2024-05-10 04:06:41'),
(293, 'students', 'delete', 29, '2024-05-10 04:06:50'),
(294, 'students', 'edit', 18, '2024-05-10 06:41:16'),
(295, 'students', 'edit', 18, '2024-05-10 06:42:21'),
(296, 'students', 'add', 19, '2024-05-14 08:51:30'),
(297, 'students', 'edit', 19, '2024-05-14 08:51:56'),
(298, 'students', 'delete', 19, '2024-05-14 08:53:40'),
(299, 'students', 'add', 20, '2024-05-14 08:54:50'),
(300, 'students', 'edit', 20, '2024-05-14 08:55:12'),
(301, 'students', 'delete', 20, '2024-05-14 08:55:22'),
(302, 'students', 'edit', 18, '2024-05-15 06:58:20'),
(303, 'students', 'edit', 18, '2024-05-15 06:58:54'),
(304, 'students', 'edit', 18, '2024-05-15 07:50:25'),
(305, 'students', 'edit', 18, '2024-05-15 07:51:20'),
(306, 'students', 'edit', 18, '2024-05-15 08:00:41'),
(307, 'students', 'edit', 18, '2024-05-15 08:14:19'),
(308, 'students', 'edit', 18, '2024-05-15 08:14:28'),
(309, 'students', 'edit', 18, '2024-05-15 08:14:49'),
(310, 'students', 'edit', 18, '2024-05-15 08:15:04'),
(311, 'students', 'edit', 18, '2024-05-15 08:15:10'),
(312, 'students', 'edit', 18, '2024-05-15 08:25:41'),
(313, 'students', 'edit', 18, '2024-05-15 08:48:53'),
(314, 'students', 'edit', 18, '2024-05-15 08:49:00'),
(315, 'students', 'edit', 18, '2024-05-15 08:49:28'),
(316, 'students', 'edit', 18, '2024-05-15 09:09:03'),
(317, 'students', 'edit', 18, '2024-05-15 09:09:24'),
(318, 'students', 'edit', 18, '2024-05-15 09:10:28'),
(319, 'students', 'edit', 18, '2024-05-15 09:10:53'),
(320, 'students', 'edit', 18, '2024-05-15 09:11:31'),
(321, 'students', 'add', 19, '2024-05-16 07:06:13'),
(322, 'students', 'delete', 19, '2024-05-16 07:09:49'),
(323, 'students', 'add', 20, '2024-05-16 07:10:31'),
(324, 'students', 'edit', 20, '2024-05-16 07:11:01'),
(325, 'html_students', 'add', 15, '2024-05-16 08:23:15'),
(326, 'html_students', 'delete', 15, '2024-05-16 08:27:44'),
(327, 'html_students', 'add', 16, '2024-05-16 08:29:41'),
(328, 'html_students', 'delete', 16, '2024-05-16 08:30:47'),
(329, 'html_students', 'add', 17, '2024-05-16 08:31:17'),
(330, 'html_students', 'add', 18, '2024-05-17 04:31:06'),
(331, 'html_students', 'delete', 18, '2024-05-20 04:38:12'),
(332, 'html_students', 'add', 19, '2024-05-20 04:40:55'),
(333, 'html_students', 'add', 20, '2024-05-20 05:04:52'),
(334, 'html_students', 'delete', 17, '2024-05-20 05:05:44'),
(335, 'html_students', 'add', 21, '2024-05-20 05:38:42'),
(336, 'html_students', 'add', 22, '2024-05-20 05:41:48'),
(337, 'html_students', 'add', 23, '2024-05-20 07:28:37'),
(338, 'html_students', 'add', 24, '2024-05-20 07:29:22'),
(339, 'html_students', 'delete', 22, '2024-05-20 07:52:01'),
(340, 'html_students', 'delete', 20, '2024-05-20 07:52:18'),
(341, 'html_students', 'add', 25, '2024-05-20 07:53:04'),
(342, 'html_students', 'add', 26, '2024-05-20 08:00:15'),
(343, 'html_students', 'delete', 26, '2024-05-20 08:00:31'),
(344, 'html_students', 'delete', 25, '2024-05-20 08:00:37'),
(345, 'html_students', 'delete', 19, '2024-05-20 08:00:40'),
(346, 'html_students', 'edit', 21, '2024-05-20 08:50:32'),
(347, 'html_students', 'edit', 23, '2024-05-20 08:50:36'),
(348, 'html_students', 'edit', 24, '2024-05-20 08:50:40'),
(349, 'students', 'edit', 20, '2024-05-20 08:50:49'),
(350, 'html_students', 'add', 25, '2024-05-21 06:30:40'),
(351, 'html_students', 'add', 26, '2024-05-21 06:31:08'),
(352, 'html_students', 'add', 27, '2024-05-21 06:31:40'),
(353, 'html_students', 'add', 28, '2024-05-21 06:32:08'),
(354, 'students', 'edit', 20, '2024-05-22 07:46:01'),
(355, 'students', 'edit', 20, '2024-05-22 07:46:36'),
(356, 'html_students', 'edit', 8, '2024-05-22 08:19:48'),
(357, 'html_students', 'edit', 9, '2024-05-22 08:19:50'),
(358, 'html_students', 'edit', 10, '2024-05-22 08:19:52'),
(359, 'html_students', 'edit', 11, '2024-05-22 08:19:54'),
(360, 'html_students', 'edit', 14, '2024-05-22 08:19:56'),
(361, 'html_students', 'edit', 21, '2024-05-22 08:19:58'),
(362, 'html_students', 'edit', 23, '2024-05-22 08:20:00'),
(363, 'html_students', 'delete', 26, '2024-05-23 05:34:44'),
(364, 'html_students', 'delete', 27, '2024-05-23 05:34:46'),
(365, 'html_students', 'delete', 28, '2024-05-23 05:34:49'),
(366, 'html_students', 'delete', 25, '2024-05-23 05:34:51'),
(367, 'html_students', 'add', 29, '2024-05-23 05:36:05'),
(368, 'html_students', 'add', 30, '2024-05-23 07:50:00'),
(369, 'html_students', 'add', 31, '2024-05-23 07:54:28'),
(370, 'html_students', 'edit', 29, '2024-05-23 08:01:23'),
(371, 'html_students', 'edit', 30, '2024-05-23 08:01:26'),
(372, 'html_students', 'edit', 31, '2024-05-23 08:01:29'),
(373, 'html_students', 'edit', 31, '2024-05-23 08:12:27'),
(374, 'html_students', 'edit', 30, '2024-05-23 08:18:08'),
(375, 'html_students', 'add', 32, '2024-05-24 06:12:59'),
(376, 'html_students', 'delete', 32, '2024-05-24 06:30:02'),
(377, 'html_students', 'add', 33, '2024-05-24 06:31:09'),
(378, 'html_students', 'add', 34, '2024-05-24 06:32:25'),
(379, 'html_students', 'delete', 29, '2024-05-28 03:34:37'),
(380, 'html_students', 'add', 35, '2024-05-28 06:18:58'),
(381, 'html_students', 'delete', 35, '2024-05-31 04:00:15'),
(382, 'html_students', 'delete', 34, '2024-05-31 04:00:18'),
(383, 'html_students', 'delete', 33, '2024-05-31 04:00:19'),
(384, 'html_students', 'delete', 31, '2024-05-31 04:00:22'),
(385, 'html_students', 'delete', 30, '2024-05-31 04:00:25'),
(386, 'html_students', 'delete', 24, '2024-05-31 04:00:28'),
(387, 'html_students', 'delete', 23, '2024-05-31 04:00:30'),
(388, 'html_students', 'delete', 21, '2024-05-31 04:00:32'),
(389, 'html_students', 'delete', 14, '2024-05-31 04:00:34'),
(390, 'html_students', 'add', 36, '2024-05-31 05:52:07'),
(391, 'html_students', 'edit', 36, '2024-05-31 08:33:00'),
(392, 'html_students', 'edit', 36, '2024-06-03 08:10:25'),
(393, 'html_students', 'edit', 36, '2024-06-03 08:12:36'),
(394, 'html_students', 'edit', 36, '2024-06-03 08:34:15'),
(395, 'html_students', 'edit', 36, '2024-06-04 07:16:35'),
(396, 'html_students', 'add', 37, '2024-06-04 07:29:55'),
(397, 'html_students', 'add', 38, '2024-06-04 07:37:23'),
(398, 'html_students', 'edit', 38, '2024-06-05 08:12:58'),
(399, 'html_students', 'edit', 38, '2024-06-05 08:13:47'),
(400, 'html_students', 'add', 39, '2024-06-05 08:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `class_title` varchar(100) DEFAULT NULL,
  `class_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_description` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `instructor_first_name` varchar(50) NOT NULL,
  `instructor_last_name` varchar(50) NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `course_description`, `category_id`, `instructor_first_name`, `instructor_last_name`, `start_date`, `end_date`) VALUES
(1, 'A121', 'HTML', 'HTML STANDS FOR HYPERTEXT MARKUP LANGUAGE', 0, 'SELF', 'PACED', '2023-12-01 00:00:00', '2023-12-29 00:00:00'),
(2, 'A122', 'CSS', ' Cascading Style Sheets', 0, 'SELF', 'PACED', '2023-11-01 00:00:00', '2023-11-29 00:00:00'),
(3, 'A123', 'JAVASCRIPT', 'JavaScript is the worlds most popular programming language', 0, 'SELF', 'PACED', '2023-10-01 00:00:00', '2023-10-29 00:00:00'),
(4, 'A124', 'PHP', 'PHP: Hypertext Preprocessor', 0, 'SELF', 'PACED', '2023-09-01 00:00:00', '2023-09-29 00:00:00'),
(5, 'A125', 'GAME DEVELOPMENT & ANIMATION', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01 00:00:00', '2023-08-29 00:00:00'),
(6, 'A126', 'CISCO WAN TECHNOLOGY', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01 00:00:00', '2023-08-29 00:00:00'),
(7, 'A127', 'CLOUD COMPUTING', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01 00:00:00', '2023-08-29 00:00:00'),
(8, 'A128', 'MACHINE LEARNING', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01 00:00:00', '2023-08-29 00:00:00'),
(9, 'A129', 'LINUX SYSTEM ADMINISTRATION', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01 00:00:00', '2023-08-29 00:00:00'),
(10, 'A130', 'DATA ANALYTICS', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01 00:00:00', '2023-08-29 00:00:00'),
(11, 'A131', 'PLC PROGRAMMING LEVEL-1', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01 00:00:00', '2023-08-29 00:00:00'),
(12, 'A132', 'PLC PROGRAMMING LEVEL-2', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01 00:00:00', '2023-08-29 00:00:00'),
(13, 'A133', 'INNOVATION IN TELECOMMUNICATION', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01 00:00:00', '2023-08-29 00:00:00'),
(14, 'A134', 'INDUSTRIAL PNEUMATIC SYSTEM', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01 00:00:00', '2023-08-29 00:00:00');

--
-- Triggers `courses`
--
DELIMITER $$
CREATE TRIGGER `courses_audit_delete_trigger` AFTER DELETE ON `courses` FOR EACH ROW BEGIN
  INSERT INTO audit_trail (table_name, action, record_id)
  VALUES ('courses', 'delete', OLD.id);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `courses_audit_trigger` AFTER INSERT ON `courses` FOR EACH ROW BEGIN
  INSERT INTO audit_trail (table_name, action, record_id)
  VALUES ('courses', 'add', NEW.id);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `courses_audit_update_trigger` AFTER UPDATE ON `courses` FOR EACH ROW BEGIN
  INSERT INTO audit_trail (table_name, action, record_id)
  VALUES ('courses', 'edit', NEW.id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `courses_category`
--

CREATE TABLE `courses_category` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `category_descri` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses_category`
--

INSERT INTO `courses_category` (`id`, `name`, `category_descri`) VALUES
(1, 'FRONT-END DEVELOPMENT BASICS', 'WEB DEVELOPMENT'),
(2, 'BACK-END DEVELOPMENT BASICS', 'WEB DEVELOPMENT'),
(3, 'SELF-PACED TRAINING PROGRAM', 'TRAINING PROGRAM');

--
-- Triggers `courses_category`
--
DELIMITER $$
CREATE TRIGGER `courses_category_audit_delete_trigger` AFTER DELETE ON `courses_category` FOR EACH ROW BEGIN
  INSERT INTO audit_trail (table_name, action, record_id)
  VALUES ('courses_category', 'delete', OLD.id);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `courses_category_audit_trigger` AFTER INSERT ON `courses_category` FOR EACH ROW BEGIN
  INSERT INTO audit_trail (table_name, action, record_id)
  VALUES ('courses_category', 'add', NEW.id);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `courses_category_audit_update_trigger` AFTER UPDATE ON `courses_category` FOR EACH ROW BEGIN
  INSERT INTO audit_trail (table_name, action, record_id)
  VALUES ('courses_category', 'edit', NEW.id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_students`
--

CREATE TABLE `enrolled_students` (
  `id` int(11) NOT NULL,
  `enrolled_course` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `university` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `enrolled_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `progress` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolled_students`
--

INSERT INTO `enrolled_students` (`id`, `enrolled_course`, `first_name`, `last_name`, `contact`, `university`, `address`, `date_of_birth`, `gender`, `student_email`, `enrolled_at`, `progress`) VALUES
(8, 'HTML', 'Renz', 'Amante', '9218260450', 'University of Makati', 'Makati', '2024-01-03', 'Male', 'amanterenz1@gmail.com', '2024-01-10 00:00:00', 0),
(9, 'CSS', 'Renz', 'Amante', '9218260450', 'University', 'Makati', '2024-01-03', 'Male', 'amanterenz1@gmail.com', '2024-01-10 00:00:00', 0),
(10, 'CLOUD COMPUTING', 'Renz', 'Dela Fuente', '9218260450', 'University of Makati', 'Makati City', '2024-01-03', 'Male', 'amanterenz1@gmail.com', '2024-01-10 00:00:00', 0),
(11, 'HTML', 'Renz', 'Dela Fuente', '9218260450', 'University of Makati', 'Makati City', '2024-01-03', 'Male', 'amanterenz1@gmail.com', '2024-01-11 00:00:00', 0),
(36, 'HTML', 'Jim', 'Carrey', '2341546366', 'Harvard', 'test', '1987-11-11', 'Male', 'theinzanekid24@gmail.com', '2024-05-31 13:52:07', 30),
(37, 'JAVASCRIPT', 'Jim', 'Carrey', '2341546366', 'Harvard', 'test', '1987-11-11', 'Male', 'theinzanekid24@gmail.com', '2024-06-04 15:29:55', 0),
(38, 'CSS', 'Jim', 'Carrey', '2341546366', 'Harvard', 'test', '1987-11-11', 'Male', 'theinzanekid24@gmail.com', '2024-06-04 15:37:23', 0),
(39, 'PHP', 'Jim', 'Carrey', '2341546366', 'Harvard', 'test', '1987-11-11', 'Male', 'theinzanekid24@gmail.com', '2024-06-05 16:22:15', 0);

--
-- Triggers `enrolled_students`
--
DELIMITER $$
CREATE TRIGGER `html_students_audit_delete_trigger` AFTER DELETE ON `enrolled_students` FOR EACH ROW BEGIN
  INSERT INTO audit_trail (table_name, action, record_id)
  VALUES ('html_students', 'delete', OLD.id);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `html_students_audit_trigger` AFTER INSERT ON `enrolled_students` FOR EACH ROW BEGIN
  INSERT INTO audit_trail (table_name, action, record_id)
  VALUES ('html_students', 'add', NEW.id);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `html_students_audit_update_trigger` AFTER UPDATE ON `enrolled_students` FOR EACH ROW BEGIN
  INSERT INTO audit_trail (table_name, action, record_id)
  VALUES ('html_students', 'edit', NEW.id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `enrollments_id` int(11) NOT NULL,
  `enrollment_date` date NOT NULL,
  `cancelled` enum('Yes','No') DEFAULT NULL,
  `cancellation_reason` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_requests`
--

CREATE TABLE `enrollment_requests` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `token` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrollment_requests`
--

INSERT INTO `enrollment_requests` (`id`, `email`, `course_name`, `token`, `created_at`) VALUES
(2, 'theinzanekid24@gmail.com', 'JAVASCRIPT', '0f3b72a376e07a83caf8c282c68ad305', '2024-06-04 07:32:26');

-- --------------------------------------------------------

--
-- Table structure for table `quizzesdone`
--

CREATE TABLE `quizzesdone` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `quiz1` varchar(20) DEFAULT 'Not Done',
  `quiz2` varchar(20) DEFAULT 'Not Done',
  `quiz3` varchar(20) DEFAULT 'Not Done',
  `quiz4` varchar(20) DEFAULT 'Not Done',
  `quiz5` varchar(20) DEFAULT 'Not Done',
  `activity1` varchar(20) DEFAULT 'Not Done',
  `activity2` varchar(20) DEFAULT 'Not Done',
  `course` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quizzesdone`
--

INSERT INTO `quizzesdone` (`id`, `email`, `quiz1`, `quiz2`, `quiz3`, `quiz4`, `quiz5`, `activity1`, `activity2`, `course`) VALUES
(1, 'theinzanekid24@gmail.com', 'Done', 'Done', 'Done', 'Not Done', 'Not Done', 'Not Done', 'Not Done', 'HTML'),
(2, 'theinzanekid24@gmail.com', 'Not Done', 'Not Done', 'Not Done', 'Not Done', 'Not Done', 'Not Done', 'Not Done', 'JAVASCRIPT'),
(3, 'theinzanekid24@gmail.com', 'Not Done', 'Not Done', 'Not Done', 'Not Done', 'Not Done', 'Not Done', 'Not Done', 'CSS'),
(4, 'theinzanekid24@gmail.com', 'Not Done', 'Not Done', 'Not Done', 'Not Done', 'Not Done', 'Not Done', 'Not Done', 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `reference_number` varchar(255) NOT NULL,
  `image` longtext,
  `image_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`id`, `user_email`, `reference_number`, `image`, `image_type`) VALUES
(1, 'armilla.eirenegrace@gmail.com', '1234', NULL, NULL),
(2, 'armilla.eirenegrace@gmail.com', '123456', NULL, NULL),
(3, 'amanterenz3@gmail.com', '123456', NULL, NULL),
(4, 'amanterenz3@gmail.com', '1234567', NULL, NULL),
(71, 'theinzanekid24@gmail.com', '151243412341', NULL, NULL),
(72, 'theinzanekid24@gmail.com', '1341241214', NULL, NULL),
(73, 'theinzanekid24@gmail.com', '21432424', NULL, NULL),
(74, 'theinzanekid24@gmail.com', '21345424', NULL, NULL),
(75, 'theinzanekid24@gmail.com', '1341414242', NULL, NULL),
(76, 'theinzanekid24@gmail.com', '1243234', NULL, NULL),
(77, 'theinzanekid24@gmail.com', '1342542342', NULL, NULL),
(78, 'theinzanekid24@gmail.com', '1523141312', NULL, NULL),
(79, 'theinzanekid24@gmail.com', '1324514324', NULL, NULL),
(80, 'theinzanekid24@gmail.com', '124214214', NULL, NULL),
(81, 'theinzanekid24@gmail.com', '462525352', NULL, NULL),
(82, 'theinzanekid24@gmail.com', '414142512425', NULL, NULL),
(83, 'theinzanekid24@gmail.com', '143434124', NULL, NULL),
(84, 'theinzanekid24@gmail.com', '1235123541234', NULL, NULL),
(85, 'theinzanekid24@gmail.com', '1235123541234', NULL, NULL),
(86, 'theinzanekid24@gmail.com', '2351351', NULL, NULL),
(87, 'theinzanekid24@gmail.com', '123434441', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `university` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `activation` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL,
  `registered_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `contact`, `university`, `address`, `date_of_birth`, `gender`, `student_email`, `code`, `activation`, `password`, `registered_at`) VALUES
(12, 'Renz', 'Dela Fuente', '9218260450', 'University of Makati', 'Makati City', '2024-01-03', 'Male', 'amanterenz1@gmail.com', 0, 1, '$2y$10$3Ksbk3NjEgtDWmT5PlUvyOXzadcnjlxT97f2Fv59tL3DVDdJfGQ5W', '2024-01-10 00:00:00'),
(13, 'Renz', 'Dela Fuente', '9218260450', 'University of Makati', 'Makati City', '2024-01-01', 'Male', 'amanterenz2@gmail.com', 0, 1, '$2y$10$LAiVhawcSN0sUA2kuT41.uVoAYSshHh7hcianHxdM6TnrRtTQUA4O', '2024-01-12 00:00:00'),
(14, 'Eirene', 'Armilla', '9218260450', 'University of Makati', 'Makati City', '2024-01-01', 'Male', 'armilla.eirenegrace@gmail.com', 0, 1, '$2y$10$XT8P8m3nQqXvG3iSDcDVWOp6rG22W5mbROAToj.5EAMM7tvPQTMWC', '2024-01-12 00:00:00'),
(17, 'Renz', 'Amante', '9218260450', 'Erovoutika', 'Makati', '2024-01-01', 'Male', 'amanterenz3@gmail.com', 0, 1, '$2y$10$AopGCIhmFY4DcgGEShk0Vu2UeRN9uygkA8Pzm0sL8V17/UqTe0MAW', '2024-01-12 00:00:00'),
(18, 'Jim', 'Carrey', '2341546366', 'Harvard', 'test', '1987-11-11', 'Male', 'theinzanekid24@gmail.com', 0, 1, '$2y$10$h7RAiURUnzcopqBnEzK3xOGKLu42w6rnlLy9epG25ZHUw/Zgc2nri', '2024-04-22 15:42:06'),
(20, 'Johnny', 'Mundo', '3245904326', 'DLSL', 'Philippines', '1997-01-02', 'Male', 'loljerry24@gmail.com', 0, 1, '$2y$10$IIVjjuePmtlR2wIYFkaf7.yaGmX0V8DZ0lgAF86zOm.mkR8rIEkGe', '2024-05-16 15:10:31');

--
-- Triggers `students`
--
DELIMITER $$
CREATE TRIGGER `students_audit_delete_trigger` AFTER DELETE ON `students` FOR EACH ROW BEGIN
  INSERT INTO audit_trail (table_name, action, record_id)
  VALUES ('students', 'delete', OLD.id);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `students_audit_trigger` AFTER INSERT ON `students` FOR EACH ROW BEGIN
  INSERT INTO audit_trail (table_name, action, record_id)
  VALUES ('students', 'add', NEW.id);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `students_audit_update_trigger` AFTER UPDATE ON `students` FOR EACH ROW BEGIN
  INSERT INTO audit_trail (table_name, action, record_id)
  VALUES ('students', 'edit', NEW.id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `teacher_first_name` varchar(50) DEFAULT NULL,
  `teacher_last_name` varchar(50) DEFAULT NULL,
  `teacher_email` varchar(50) DEFAULT NULL,
  `teacher_phone_number` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `authorize` tinyint(1) NOT NULL DEFAULT '0',
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  `is_active` tinyint(1) DEFAULT '0',
  `registration_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `authorize`, `code`, `status`, `is_active`, `registration_date`) VALUES
(1, 'Renz', 'amanterenz11@gmail.com', '$2y$10$lWvB6C/QbHlI.qfADgbureFGJfctcY9z6BMHR4ZVezSpMsaTTBv4O', 0, 0, 'verified', 1, '2023-12-31 00:00:00'),
(22, 'amante', 'amanterenz12@gmail.com', 're123456', 0, 0, 'verified', 1, '2024-01-04 00:00:00'),
(28, 'ssss', 's@gmail.com', '$2y$10$0IpHrrUOPn2iEYQF3P6jQO4im6GfJ.9UaAE7Hgh5D7usJbBS0azaW', 0, 325753, 'notverified', 0, '2024-01-03 00:00:00'),
(29, 'rrrrr', 'r@gmail.com', '$2y$10$EJ5smYYJlhDGfnsKvOkIdutsC5Jc4OfdbEXfs3I4KsKB76/WTTyim', 0, 687376, 'notverified', 0, '2024-01-03 00:00:00'),
(30, 'ddd', 'rd@gmail.com', '$2y$10$5m8WePB6QWQ2wVIuppihkuI0JbgsbpfF76.JG6aTWY0Z7wBtItY82', 0, 750815, 'notverified', 0, '2024-01-03 00:00:00'),
(31, 'dsasd', 'rsad@gmail.com', '$2y$10$CwhZhJ7q8jwvAfJ0yk3oUO3p2ERsLqKah7j8xtPTtwxuu0Ojj/Nli', 0, 156763, 'notverified', 0, '2024-01-03 00:00:00'),
(32, 'dsasdadasd', 'asdsad@gmail.com', '$2y$10$0zNwLmMHVv0xadPlNibeZOSL5LgkvTYzobd6K6WpWmsRNuqvPjuZO', 0, 801964, 'notverified', 0, '2024-01-03 00:00:00'),
(33, 'asdsdsff', 'asdsd@gmail.com', '$2y$10$Q8HBZKmxdVAdHVuA5TTyUO8AJBxMo2rNZ9nWPDhFhryTRBBi5.Yxy', 0, 0, 'verified', 0, '2024-01-03 00:00:00'),
(34, 'wdawdwd', 'aggggg@gmail.com', '$2y$10$49KOAAnPOB6ZSA2.BisMD.opEi9cFVkL97zwBUu2FDWZfdxAGQUV2', 0, 0, 'verified', 0, '2024-01-03 00:00:00'),
(36, 'renzzz', 'renz@gmail.com', '$2y$10$2OtmkteY1OcjjhQg2371Ie7MgBaP69pnvMPwEGz0RGdGMFopNNbpa', 0, 579772, 'notverified', 0, '2024-01-04 00:00:00'),
(37, 'dhenzel', 'dz@gmail.com', '$2y$10$oZDJ.srRqA5rVwYVLfSkOenEFm/HSmRYXeFirjf9Fq3YyQJ6DAEqC', 1, 975140, 'verified', 0, '2024-01-04 00:00:00'),
(38, 'Shane', 'shanerr@gmail.com', 'renz1234', 0, 13031, 'notverified', 1, '2024-01-04 00:00:00');

--
-- Triggers `usertable`
--
DELIMITER $$
CREATE TRIGGER `usertable_audit_delete_trigger` AFTER DELETE ON `usertable` FOR EACH ROW BEGIN
  INSERT INTO audit_trail (table_name, action, record_id)
  VALUES ('usertable', 'delete', OLD.id);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `usertable_audit_trigger` AFTER INSERT ON `usertable` FOR EACH ROW BEGIN
  INSERT INTO audit_trail (table_name, action, record_id)
  VALUES ('usertable', 'add', NEW.id);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `usertable_audit_update_trigger` AFTER UPDATE ON `usertable` FOR EACH ROW BEGIN
  INSERT INTO audit_trail (table_name, action, record_id)
  VALUES ('usertable', 'edit', NEW.id);
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_trail`
--
ALTER TABLE `audit_trail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses_category`
--
ALTER TABLE `courses_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `enrolled_students`
--
ALTER TABLE `enrolled_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`enrollments_id`);

--
-- Indexes for table `enrollment_requests`
--
ALTER TABLE `enrollment_requests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `quizzesdone`
--
ALTER TABLE `quizzesdone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `audit_trail`
--
ALTER TABLE `audit_trail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `courses_category`
--
ALTER TABLE `courses_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enrolled_students`
--
ALTER TABLE `enrolled_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `enrollments_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrollment_requests`
--
ALTER TABLE `enrollment_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quizzesdone`
--
ALTER TABLE `quizzesdone`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
