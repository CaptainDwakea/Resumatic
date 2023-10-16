-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 11:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resumatic`
--

-- --------------------------------------------------------

--
-- Table structure for table `resumatic_about`
--

CREATE TABLE `resumatic_about` (
  `user_id` int(11) NOT NULL,
  `about_id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `middlename` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `image` blob NOT NULL,
  `designation` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resumatic_about`
--

INSERT INTO `resumatic_about` (`user_id`, `about_id`, `firstname`, `middlename`, `lastname`, `image`, `designation`, `address`, `email`, `phoneno`, `summary`) VALUES
(1, 1, 'Dwayne', 'George', 'Nixon', '', '', '4, Dipex Kiran Society Raju Nagar, Dombivli West', 'dwaynenixon2004@gmail.com', '09321740058', ''),
(2, 2, 'Shreya', 'Chakraborty', '', '', 'Engineer', '', '', '', 'Hard-Worker'),
(6, 3, 'Dwayne', 'George', 'Nixon', '', '', '4, Dipex Kiran Society Raju Nagar, Dombivli West', 'dwaynenixon2004@gmail.com', '09321740058', '');

-- --------------------------------------------------------

--
-- Table structure for table `resumatic_achievements`
--

CREATE TABLE `resumatic_achievements` (
  `user_id` int(11) NOT NULL,
  `achieve_id` int(11) NOT NULL,
  `achieve_title` varchar(100) NOT NULL,
  `achieve_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resumatic_education`
--

CREATE TABLE `resumatic_education` (
  `user_id` int(11) NOT NULL,
  `education_id` int(11) NOT NULL,
  `education_school` varchar(100) NOT NULL,
  `education_degree` varchar(100) NOT NULL,
  `education_city` varchar(100) NOT NULL,
  `education_start` date NOT NULL,
  `education_graduation` date NOT NULL,
  `education_cgpa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resumatic_experience`
--

CREATE TABLE `resumatic_experience` (
  `user_id` int(11) NOT NULL,
  `experience_id` int(11) NOT NULL,
  `experience_title` varchar(50) NOT NULL,
  `experience_company` varchar(100) NOT NULL,
  `experience_location` varchar(100) NOT NULL,
  `experience_start` date NOT NULL,
  `experience_end` date NOT NULL,
  `experience_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resumatic_login`
--

CREATE TABLE `resumatic_login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resumatic_login`
--

INSERT INTO `resumatic_login` (`username`, `password`, `name`, `user_id`) VALUES
('Dwayne', '123', 'Dwayne Nixon', 1),
('Shreya', '1234', 'Shreya', 2),
('David', '123', 'David', 3),
('Shaun', '1234', 'Shaun', 4),
('Ramya', '123', 'Ramya', 5),
('DAvid1', '123', 'David', 6),
('david0705', '1234', 'David', 7);

-- --------------------------------------------------------

--
-- Table structure for table `resumatic_projects`
--

CREATE TABLE `resumatic_projects` (
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_link` varchar(100) NOT NULL,
  `project_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resumatic_skills`
--

CREATE TABLE `resumatic_skills` (
  `user_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `skill` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resumatic_about`
--
ALTER TABLE `resumatic_about`
  ADD PRIMARY KEY (`about_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `resumatic_achievements`
--
ALTER TABLE `resumatic_achievements`
  ADD PRIMARY KEY (`achieve_id`),
  ADD KEY `resumatic_achievements_ibfk_1` (`user_id`);

--
-- Indexes for table `resumatic_education`
--
ALTER TABLE `resumatic_education`
  ADD PRIMARY KEY (`education_id`),
  ADD KEY `resumatic_education_ibfk_1` (`user_id`);

--
-- Indexes for table `resumatic_experience`
--
ALTER TABLE `resumatic_experience`
  ADD PRIMARY KEY (`experience_id`),
  ADD KEY `resumatic_experience_ibfk_1` (`user_id`);

--
-- Indexes for table `resumatic_login`
--
ALTER TABLE `resumatic_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `resumatic_projects`
--
ALTER TABLE `resumatic_projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `resumatic_projects_ibfk_1` (`user_id`);

--
-- Indexes for table `resumatic_skills`
--
ALTER TABLE `resumatic_skills`
  ADD PRIMARY KEY (`skill_id`),
  ADD KEY `resumatic_skills_ibfk_1` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resumatic_about`
--
ALTER TABLE `resumatic_about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resumatic_achievements`
--
ALTER TABLE `resumatic_achievements`
  MODIFY `achieve_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resumatic_education`
--
ALTER TABLE `resumatic_education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resumatic_experience`
--
ALTER TABLE `resumatic_experience`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resumatic_login`
--
ALTER TABLE `resumatic_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `resumatic_projects`
--
ALTER TABLE `resumatic_projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resumatic_skills`
--
ALTER TABLE `resumatic_skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `resumatic_about`
--
ALTER TABLE `resumatic_about`
  ADD CONSTRAINT `resumatic_about_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `resumatic_login` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resumatic_achievements`
--
ALTER TABLE `resumatic_achievements`
  ADD CONSTRAINT `resumatic_achievements_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `resumatic_login` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resumatic_education`
--
ALTER TABLE `resumatic_education`
  ADD CONSTRAINT `resumatic_education_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `resumatic_login` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resumatic_experience`
--
ALTER TABLE `resumatic_experience`
  ADD CONSTRAINT `resumatic_experience_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `resumatic_login` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resumatic_projects`
--
ALTER TABLE `resumatic_projects`
  ADD CONSTRAINT `resumatic_projects_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `resumatic_login` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resumatic_skills`
--
ALTER TABLE `resumatic_skills`
  ADD CONSTRAINT `resumatic_skills_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `resumatic_login` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
