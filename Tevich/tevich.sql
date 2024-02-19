-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 08:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tevich`
--

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `email` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `url` varchar(666) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `url`) VALUES
(2, 'assets/deyfi.jpg'),
(3, 'assets/falshid.jpg'),
(4, 'assets/ghorbanzadee.jpg'),
(5, 'assets/gol_baray_gol.jpg'),
(6, 'assets/windows7_bg.jpg'),
(15, '../UploadedFiles/exotic-shorthair.png'),
(16, 'UploadedFiles/himilayan.png'),
(17, 'UploadedFiles/gholban.jpg'),
(18, 'UploadedFiles/falshid.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `phonenumber`
--

CREATE TABLE `phonenumber` (
  `id` int(10) UNSIGNED NOT NULL,
  `country-shortname` enum('AZ','BM','IO','TD','CX','CK','SV','IR','IM','MG','KP') NOT NULL,
  `country-displayname` enum('Azerbaijan','Bermuda','Indian Ocean Territory','Chad','Christmas Island','Cook Islands','El Salvador','Iran','Isle of Man','Madagascar','North Korea') NOT NULL,
  `country_code` enum('994','1','246','235','61','682','503','98','44','261','850') NOT NULL,
  `number` int(10) UNSIGNED NOT NULL,
  `is_verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preference`
--

CREATE TABLE `preference` (
  `id` int(10) UNSIGNED NOT NULL,
  `theme` enum('dark','light','pink') NOT NULL,
  `email_notif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `preference`
--

INSERT INTO `preference` (`id`, `theme`, `email_notif`) VALUES
(1, 'light', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `subscriber_id` int(11) UNSIGNED NOT NULL,
  `subscribed_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(66) NOT NULL,
  `display_name` varchar(66) NOT NULL,
  `password` varchar(66) NOT NULL,
  `birth_date` date NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `view_count` int(10) UNSIGNED NOT NULL,
  `broadcaster_type` enum('Partner','N/A') NOT NULL,
  `profile_icon_id` int(11) NOT NULL,
  `offline_image_id` int(11) NOT NULL,
  `prefs id` int(10) UNSIGNED NOT NULL,
  `description` varchar(666) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `display_name`, `password`, `birth_date`, `created_time`, `view_count`, `broadcaster_type`, `profile_icon_id`, `offline_image_id`, `prefs id`, `description`) VALUES
(12, 'amir', 'amir', '1234', '2007-05-16', '2024-02-12 10:36:49', 666, 'N/A', 2, 3, 1, 'Hi I am amir'),
(30, 'wolbit', 'wolbit', '1234', '1997-03-13', '2024-02-18 10:58:21', 500, 'N/A', 16, 16, 1, 'Hi I am wolbit'),
(31, 'golban', 'golban', '1234', '2023-01-01', '2024-02-19 09:01:08', 222, 'N/A', 17, 17, 1, 'Hi I am golban'),
(32, 'farshid', 'farshid', '1234', '2007-03-16', '2024-02-19 10:30:17', 0, 'N/A', 18, 18, 1, 'Hi I am farshid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phonenumber`
--
ALTER TABLE `phonenumber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preference`
--
ALTER TABLE `preference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriber id rel` (`subscriber_id`),
  ADD KEY `subscribed id rel` (`subscribed_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `User_Name` (`user_name`),
  ADD KEY `prefs rel` (`prefs id`),
  ADD KEY `offline image rel` (`offline_image_id`),
  ADD KEY `profile icon rel` (`profile_icon_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `phonenumber`
--
ALTER TABLE `phonenumber`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preference`
--
ALTER TABLE `preference`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD CONSTRAINT `subscribed id rel` FOREIGN KEY (`subscribed_id`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `subscriber id rel` FOREIGN KEY (`subscriber_id`) REFERENCES `user` (`ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `offline image rel` FOREIGN KEY (`offline_image_id`) REFERENCES `image` (`ID`),
  ADD CONSTRAINT `prefs rel` FOREIGN KEY (`prefs id`) REFERENCES `preference` (`id`),
  ADD CONSTRAINT `profile icon rel` FOREIGN KEY (`profile_icon_id`) REFERENCES `image` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
