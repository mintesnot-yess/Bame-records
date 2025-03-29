-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2025 at 06:51 PM
-- Server version: 8.0.41-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bame_records`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'mintesnot yesmashewa', 'mintesnotyess@gmail.com', '$2y$12$eByhpsDs3mOCUfaKA9udGufJdIaGzdQUJwTJDZBe9ju3Qm9KBdqoW', 'super user', '2024-12-15 17:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`, `picture`, `link`, `catagory`, `created_at`) VALUES
(1, 'minte', 'artist1.jpeg', 'https://th.bing.com/th/id/R.ffc2adcb86ed3f7689bb24df653691d3?rik=O0sub3JhL9x5Ew&pid=ImgRaw&r=0', 'talker', '2024-12-15 17:21:46'),
(2, 'gashe', 'images.jpeg', 'dsdfdf', 'Music Artist', '2024-12-14 21:00:00'),
(3, 'minte', 'R.png', 'https://www.youtube.com/', 'Talker', '2025-03-11 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `device_info`
--

CREATE TABLE `device_info` (
  `id` int NOT NULL,
  `device_id` varchar(255) NOT NULL,
  `device_type` varchar(255) NOT NULL,
  `last_login` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `admin-email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `device_info`
--

INSERT INTO `device_info` (`id`, `device_id`, `device_type`, `last_login`, `admin-email`) VALUES
(1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', '2024-12-15 14:38:48', 'mintesnotyess@gmail.com'),
(2, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', '2024-12-15 14:39:41', 'mintesnotyess@gmail.com'),
(3, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', '2024-12-15 14:39:50', 'mintesnotyess@gmail.com'),
(4, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', '2024-12-15 14:40:13', 'mintesnotyess@gmail.com'),
(5, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', '2024-12-15 14:44:01', 'mintesnotyess@gmail.com'),
(6, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', '2024-12-15 14:46:40', 'mintesnotyess@gmail.com'),
(7, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', '2024-12-15 14:46:45', 'mintesnotyess@gmail.com'),
(8, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', '2024-12-15 14:47:24', 'mintesnotyess@gmail.com'),
(9, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', '2024-12-15 14:47:29', 'mintesnotyss@gmail.com'),
(10, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', '2024-12-15 14:47:38', 'mintesnotyess@gmail.com'),
(11, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', '2024-12-15 14:48:35', 'mintesnotyess@gmail.com'),
(12, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', '2024-12-15 14:49:57', 'mintesnotyess@gmail.com'),
(13, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', '2024-12-15 14:50:01', 'mintesnotyess@gmail.com'),
(14, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', '2024-12-15 14:51:15', 'mintesnotyess@gmail.com'),
(15, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', '2024-12-15 16:27:49', 'mintesnotyess@gmail.com'),
(16, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-05 08:12:56', 'mintesnotyess@gmail.com'),
(17, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-05 08:17:35', 'mintesnotyess@gmail.com'),
(18, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-05 08:17:42', 'mintesnotyess@gmail.com'),
(19, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-10 10:42:20', 'mintesnotyess@gmail.com'),
(20, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-10 10:42:25', 'mintesnotyess@gmail.com'),
(21, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-10 10:57:27', 'mintesnotyess@gmail.com'),
(22, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-12 04:12:23', 'mintesnotyess@gmail.com'),
(23, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-12 04:40:03', 'mintesnotyess@gmail.com'),
(24, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-12 08:24:37', 'mintesnotyess@gmail.com'),
(25, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-13 08:41:08', 'mintesnotyess@gmail.com'),
(26, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-12 10:53:58', 'mintesnotyess@gmail.com'),
(27, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-12 12:31:07', 'mintesnotyess@gmail.com'),
(28, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-12 12:41:05', 'mintesnotyess@gmail.com'),
(29, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-12 12:44:05', 'mintesnotyess@gmail.com'),
(30, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-18 08:48:08', 'mintesnotyess@gmail.com'),
(31, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-18 09:08:16', 'mintesnotyess@gmail.com'),
(32, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-18 10:29:47', 'mintesnotyess@gmail.com'),
(33, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', '2025-03-18 10:34:04', 'mintesnotyess@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int NOT NULL,
  `link` varchar(200) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` varchar(400) NOT NULL,
  `place` varchar(200) NOT NULL,
  `created_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `link`, `picture`, `name`, `date`, `place`, `created_at`) VALUES
(1, 'https://www.youtube.com/', 'IMG_20230405_075155.jpg', 'minte', '2024-12-18', 'addis ababa', ''),
(2, 'addis.com', 'images-cover.jpg', 'mintesnot yess', '2024-12-21', 'addis ababa', '2024-12-15'),
(3, 'https://www.youtube.com/', 'R.png', 'minte', '2025-03-08', 'addis abab', '2025-03-05'),
(4, 'https://www.youtube.com/', 'R.png', 'minte', '2025-03-13', 'addis abab', '2025-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `musics`
--

CREATE TABLE `musics` (
  `id` int NOT NULL,
  `artist` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `albem-art` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `music` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created-at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `musics`
--

INSERT INTO `musics` (`id`, `artist`, `title`, `albem-art`, `music`, `link`, `created-at`) VALUES
(11, 'Gash Kebe ', 'sdsds', 'Screenshot from 2024-12-02 20-12-04.png', 'KAIZ Remix.mp3', 'https://www.youtube.com/', '2025-03-11 21:00:00'),
(12, 'Gash ', 'mine', 'Screenshot from 2024-12-20 00-32-03.png', 'sound-effects-man-screaming-02-247128.mp3', 'https://www.youtube.com/', '2025-03-17 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `studio-booking`
--

CREATE TABLE `studio-booking` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created-date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `studio-booking`
--

INSERT INTO `studio-booking` (`id`, `name`, `email`, `phone`, `date`, `time`, `created-date`) VALUES
(5, 'mintesnot yess', 'mintesnotyass@gmail.com', '0940134880', '2024-12-18', '23:03:00', '2024-12-15 21:00:00'),
(13, 'Tesfamariam', 'sami.test@gmail.com', '9122012212', '2025-03-20', '12:32:00', '2025-03-17 21:00:00'),
(15, 'mintesnot', 'mintesnotyess@gmail.com', '940134880', '2025-03-20', '23:03:00', '2025-03-17 21:00:00'),
(16, 'mintemane', 'mintesnotyess@gmail.com', '940134880', '2025-03-30', '12:32:00', '2025-03-28 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `studio-free-time`
--

CREATE TABLE `studio-free-time` (
  `id` int NOT NULL,
  `free-time-1` time NOT NULL,
  `free-time-2` time NOT NULL,
  `created-date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `studio-free-time`
--

INSERT INTO `studio-free-time` (`id`, `free-time-1`, `free-time-2`, `created-date`) VALUES
(3, '22:03:00', '23:03:00', '2024-12-15'),
(5, '20:00:00', '12:32:00', '2025-03-12'),
(6, '12:30:00', '12:00:00', '2025-03-12'),
(7, '18:30:00', '16:00:00', '2025-03-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device_info`
--
ALTER TABLE `device_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `musics`
--
ALTER TABLE `musics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studio-booking`
--
ALTER TABLE `studio-booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studio-free-time`
--
ALTER TABLE `studio-free-time`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `device_info`
--
ALTER TABLE `device_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `musics`
--
ALTER TABLE `musics`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `studio-booking`
--
ALTER TABLE `studio-booking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `studio-free-time`
--
ALTER TABLE `studio-free-time`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
