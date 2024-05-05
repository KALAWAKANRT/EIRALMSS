-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 06:04 AM
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
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `code`, `status`, `created_at`) VALUES
(13, 'Renzzzz', 'amanterenz11@gmail.com', '$2y$10$lWvB6C/QbHlI.qfADgbureFGJfctcY9z6BMHR4ZVezSpMsaTTBv4O', 0, 'verified', '2023-12-31 18:33:09'),
(14, 'renzyyyy', 'amanterenz42@gmail.com', '$2y$10$JQPHtQZe1.nXl8XwpQvcjuQTc8PGchIFI.TX8iDo70HG5XGcobPx.', 0, 'verified', '2023-12-31 18:33:09'),
(19, 'Shane', 'shane@gmail.com', '$2y$10$jaB36brJooAx6UhGsipnyOd/v1gaX7h6NUZMxszSYy9I7/m4sjmdS', 0, 'verified', '2024-01-03 15:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE `audit_trail` (
  `id` int(11) NOT NULL,
  `table_name` varchar(255) NOT NULL,
  `action` varchar(50) NOT NULL,
  `record_id` int(11) UNSIGNED DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
(139, 'html_students', 'add', 12, '2024-01-12 04:59:15');

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
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `course_description`, `category_id`, `instructor_first_name`, `instructor_last_name`, `start_date`, `end_date`) VALUES
(1, 'A121', 'HTML', 'HTML STANDS FOR HYPERTEXT MARKUP LANGUAGE', 0, 'SELF', 'PACED', '2023-12-01', '2023-12-29'),
(2, 'A122', 'CSS', ' Cascading Style Sheets', 0, 'SELF', 'PACED', '2023-11-01', '2023-11-29'),
(3, 'A123', 'JAVASCRIPT', 'JavaScript is the worlds most popular programming language', 0, 'SELF', 'PACED', '2023-10-01', '2023-10-29'),
(4, 'A124', 'PHP', 'PHP: Hypertext Preprocessor', 0, 'SELF', 'PACED', '2023-09-01', '2023-09-29'),
(5, 'A125', 'GAME DEVELOPMENT & ANIMATION', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01', '2023-08-29'),
(6, 'A126', 'CISCO WAN TECHNOLOGY', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01', '2023-08-29'),
(7, 'A127', 'CLOUD COMPUTING', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01', '2023-08-29'),
(8, 'A128', 'MACHINE LEARNING', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01', '2023-08-29'),
(9, 'A129', 'LINUX SYSTEM ADMINISTRATION', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01', '2023-08-29'),
(10, 'A130', 'DATA ANALYTICS', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01', '2023-08-29'),
(11, 'A131', 'PLC PROGRAMMING LEVEL-1', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01', '2023-08-29'),
(12, 'A132', 'PLC PROGRAMMING LEVEL-2', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01', '2023-08-29'),
(13, 'A133', 'INNOVATION IN TELECOMMUNICATION', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01', '2023-08-29'),
(14, 'A134', 'INDUSTRIAL PNEUMATIC SYSTEM', 'TRAINING PROGRAM', 0, 'SELF', 'PACED', '2023-08-01', '2023-08-29');

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
  `enrolled_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolled_students`
--

INSERT INTO `enrolled_students` (`id`, `enrolled_course`, `first_name`, `last_name`, `contact`, `university`, `address`, `date_of_birth`, `gender`, `student_email`, `enrolled_at`) VALUES
(8, 'HTML', 'Renz', 'Amante', '9218260450', 'University of Makati', 'Makati', '2024-01-03', 'Male', 'amanterenz1@gmail.com', '2024-01-10'),
(9, 'CSS', 'Renz', 'Amante', '9218260450', 'University', 'Makati', '2024-01-03', 'Male', 'amanterenz1@gmail.com', '2024-01-10'),
(10, 'CLOUD COMPUTING', 'Renz', 'Dela Fuente', '9218260450', 'University of Makati', 'Makati City', '2024-01-03', 'Male', 'amanterenz1@gmail.com', '2024-01-10'),
(11, 'HTML', 'Renz', 'Dela Fuente', '9218260450', 'University of Makati', 'Makati City', '2024-01-03', 'Male', 'amanterenz1@gmail.com', '2024-01-11'),
(12, 'HTML', 'Eirene', 'Armilla', '9218260450', 'University of Makati', 'Makati City', '2024-01-01', 'Male', 'armilla.eirenegrace@gmail.com', '2024-01-12');

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
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `reference_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`id`, `user_email`, `image_path`, `reference_number`) VALUES
(1, 'armilla.eirenegrace@gmail.com', '', '1234'),
(2, 'armilla.eirenegrace@gmail.com', '', '123456');

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
  `activation` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `registered_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `contact`, `university`, `address`, `date_of_birth`, `gender`, `student_email`, `code`, `activation`, `password`, `registered_at`) VALUES
(12, 'Renz', 'Dela Fuente', '9218260450', 'University of Makati', 'Makati City', '2024-01-03', 'Male', 'amanterenz1@gmail.com', 0, 1, '$2y$10$3Ksbk3NjEgtDWmT5PlUvyOXzadcnjlxT97f2Fv59tL3DVDdJfGQ5W', '2024-01-10'),
(13, 'Renz', 'Dela Fuente', '9218260450', 'University of Makati', 'Makati City', '2024-01-01', 'Male', 'amanterenz2@gmail.com', 0, 1, '$2y$10$LAiVhawcSN0sUA2kuT41.uVoAYSshHh7hcianHxdM6TnrRtTQUA4O', '2024-01-12'),
(14, 'Eirene', 'Armilla', '9218260450', 'University of Makati', 'Makati City', '2024-01-01', 'Male', 'armilla.eirenegrace@gmail.com', 0, 1, '$2y$10$XT8P8m3nQqXvG3iSDcDVWOp6rG22W5mbROAToj.5EAMM7tvPQTMWC', '2024-01-12');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
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
  `authorize` tinyint(1) NOT NULL DEFAULT 0,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  `is_active` tinyint(1) DEFAULT 0,
  `registration_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `authorize`, `code`, `status`, `is_active`, `registration_date`) VALUES
(1, 'Renz', 'amanterenz11@gmail.com', '$2y$10$lWvB6C/QbHlI.qfADgbureFGJfctcY9z6BMHR4ZVezSpMsaTTBv4O', 0, 0, 'verified', 1, '2023-12-31'),
(22, 'amante', 'amanterenz12@gmail.com', 're123456', 0, 0, 'verified', 1, '2024-01-04'),
(28, 'ssss', 's@gmail.com', '$2y$10$0IpHrrUOPn2iEYQF3P6jQO4im6GfJ.9UaAE7Hgh5D7usJbBS0azaW', 0, 325753, 'notverified', 0, '2024-01-03'),
(29, 'rrrrr', 'r@gmail.com', '$2y$10$EJ5smYYJlhDGfnsKvOkIdutsC5Jc4OfdbEXfs3I4KsKB76/WTTyim', 0, 687376, 'notverified', 0, '2024-01-03'),
(30, 'ddd', 'rd@gmail.com', '$2y$10$5m8WePB6QWQ2wVIuppihkuI0JbgsbpfF76.JG6aTWY0Z7wBtItY82', 0, 750815, 'notverified', 0, '2024-01-03'),
(31, 'dsasd', 'rsad@gmail.com', '$2y$10$CwhZhJ7q8jwvAfJ0yk3oUO3p2ERsLqKah7j8xtPTtwxuu0Ojj/Nli', 0, 156763, 'notverified', 0, '2024-01-03'),
(32, 'dsasdadasd', 'asdsad@gmail.com', '$2y$10$0zNwLmMHVv0xadPlNibeZOSL5LgkvTYzobd6K6WpWmsRNuqvPjuZO', 0, 801964, 'notverified', 0, '2024-01-03'),
(33, 'asdsdsff', 'asdsd@gmail.com', '$2y$10$Q8HBZKmxdVAdHVuA5TTyUO8AJBxMo2rNZ9nWPDhFhryTRBBi5.Yxy', 0, 0, 'verified', 0, '2024-01-03'),
(34, 'wdawdwd', 'aggggg@gmail.com', '$2y$10$49KOAAnPOB6ZSA2.BisMD.opEi9cFVkL97zwBUu2FDWZfdxAGQUV2', 0, 0, 'verified', 0, '2024-01-03'),
(36, 'renzzz', 'renz@gmail.com', '$2y$10$2OtmkteY1OcjjhQg2371Ie7MgBaP69pnvMPwEGz0RGdGMFopNNbpa', 0, 579772, 'notverified', 0, '2024-01-04'),
(37, 'dhenzel', 'dz@gmail.com', '$2y$10$oZDJ.srRqA5rVwYVLfSkOenEFm/HSmRYXeFirjf9Fq3YyQJ6DAEqC', 1, 975140, 'verified', 0, '2024-01-04'),
(38, 'Shane', 'shanerr@gmail.com', 'renz1234', 0, 13031, 'notverified', 1, '2024-01-04');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `audit_trail`
--
ALTER TABLE `audit_trail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `courses_category`
--
ALTER TABLE `courses_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enrolled_students`
--
ALTER TABLE `enrolled_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `enrollments_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
