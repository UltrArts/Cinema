-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2023 at 04:13 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cod` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int NOT NULL,
  `session_id` int NOT NULL,
  `is_payed` tinyint NOT NULL DEFAULT '0',
  `is_seen` tinyint NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '0',
  `is_whatched` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ug_cod` (`cod`),
  KEY `fk_session_id` (`session_id`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classifications`
--

DROP TABLE IF EXISTS `classifications`;
CREATE TABLE IF NOT EXISTS `classifications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `age` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classifications`
--

INSERT INTO `classifications` (`id`, `name`, `age`) VALUES
(1, '+18', 18),
(2, '+12', 12),
(3, 'SEM SENSURA', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

DROP TABLE IF EXISTS `genders`;
CREATE TABLE IF NOT EXISTS `genders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `short_name` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `short_name` (`short_name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `name`, `short_name`, `created_at`, `updated_at`) VALUES
(1, 'ACÇÃO', 'AC', '2023-06-02 15:02:09', '2023-06-02 15:02:09'),
(2, 'AVENTURA', 'AVNT', '2023-06-02 15:02:09', '2023-06-02 15:02:09'),
(3, 'DESENHOS ANIMADOS', 'D_ANI', '2023-06-02 15:02:09', '2023-06-02 15:02:09'),
(4, 'ANIME', 'ANM', '2023-06-02 15:02:09', '2023-06-02 15:02:09'),
(5, 'ROMANCE', 'RC', '2023-06-02 15:02:09', '2023-06-02 15:02:09'),
(6, 'COMÉDIA', 'CMD', '2023-06-02 15:02:09', '2023-06-02 15:02:09'),
(7, 'FICÇAO CIENTÍFICA', 'F_CIE', '2023-06-02 15:02:09', '2023-06-02 15:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `langs`
--

DROP TABLE IF EXISTS `langs`;
CREATE TABLE IF NOT EXISTS `langs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `short_name` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `langs`
--

INSERT INTO `langs` (`id`, `name`, `short_name`, `created_at`) VALUES
(1, 'Português', 'pt', '2023-06-02 16:03:11'),
(2, 'English', 'Eng', '2023-06-02 16:03:11'),
(3, 'Chinese', 'Ch', '2023-06-02 16:03:11'),
(4, 'Spañol', 'Sp', '2023-06-02 16:03:11'),
(5, 'Italiano', 'It', '2023-06-02 16:03:11'),
(6, 'Nigerian', 'Ng', '2023-06-02 16:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `classification_id` int DEFAULT NULL,
  `cover` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `duration` int NOT NULL,
  `year` int NOT NULL,
  `sinopse` text COLLATE utf8mb4_general_ci NOT NULL,
  `lang` int NOT NULL,
  `subtitles` int DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
  KEY `lang` (`lang`,`subtitles`),
  KEY `classification_id` (`classification_id`),
  KEY `subtitles` (`subtitles`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `classification_id`, `cover`, `duration`, `year`, `sinopse`, `lang`, `subtitles`, `status`, `created_at`, `updated_at`) VALUES
(55, 'A marca', 1, 'http://localhost/Cinema/public/covers/1686009653_mv10.jpg', 200, 2021, '', 1, 5, 1, '2023-06-06 00:00:53', '2023-06-06 00:00:53'),
(56, 'A Cilada', 1, 'http://localhost/Cinema/public/covers/1686010476_mv10.jpg', 200, 2021, '', 1, 5, 1, '2023-06-06 00:14:36', '2023-06-06 18:02:00'),
(65, 'Spider-man: Sem caminho para casa', 3, 'http://localhost/Cinema/public/covers/1686013601_mv7.jpg', 150, 2022, '', 1, 4, 0, '2023-06-06 01:06:41', '2023-06-06 16:59:57'),
(67, 'John Week 3', 1, 'http://localhost/Cinema/public/covers/1686046201_mv4.jpg', 130, 2022, '', 1, 1, 1, '2023-06-06 10:10:01', '2023-06-06 10:10:01'),
(69, 'John Week 4', 1, 'http://localhost/Cinema/public/covers/1686047013_mv2.jpg', 100, 2023, '', 1, NULL, 1, '2023-06-06 10:23:33', '2023-06-06 10:23:33'),
(70, 'Wanted', 2, 'http://localhost/Cinema/public/covers/1686047199_mv9.jpg', 90, 2002, '', 1, NULL, 1, '2023-06-06 10:26:39', '2023-06-06 10:26:39'),
(71, 'Fast X', 2, 'http://localhost/Cinema/public/covers/1686006534_mv1', 70, 2023, '', 1, NULL, 1, '2023-06-06 10:47:15', '2023-06-06 17:22:29'),
(72, 'Spider-man: No aranha verso', 3, 'http://localhost/Cinema/public/covers/1686006534_mv5.jpg', 80, 2022, '', 1, NULL, 1, '2023-06-06 10:53:16', '2023-06-06 17:20:56'),
(73, 'Blind Date', 3, 'http://localhost/Cinema/public/covers/1686049816_mv14.jpg', 70, 2012, '', 1, NULL, 1, '2023-06-06 11:10:16', '2023-06-06 11:10:16'),
(74, 'A criança', 3, 'http://localhost/Cinema/public/covers/1686051243_mv10.jpg', 200, 1996, '', 1, NULL, 1, '2023-06-06 11:34:03', '2023-06-06 11:34:03'),
(75, 'Top Gun: Marverick', 3, 'http://localhost/Cinema/public/covers/1686077581_mv11.jpg', 50, 2023, '', 4, 1, 1, '2023-06-06 18:53:01', '2023-06-06 18:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `movie_gender`
--

DROP TABLE IF EXISTS `movie_gender`;
CREATE TABLE IF NOT EXISTS `movie_gender` (
  `movie_id` int NOT NULL,
  `gender_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `movie_id` (`movie_id`),
  KEY `gender_id` (`gender_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_gender`
--

INSERT INTO `movie_gender` (`movie_id`, `gender_id`, `created_at`) VALUES
(55, 2, '2023-06-06 00:00:53'),
(56, 2, '2023-06-06 00:14:37'),
(65, 2, '2023-06-06 01:06:42'),
(67, 1, '2023-06-06 10:10:01'),
(69, 1, '2023-06-06 10:23:34'),
(70, 1, '2023-06-06 10:26:39'),
(71, 1, '2023-06-06 10:47:16'),
(72, 3, '2023-06-06 10:53:16'),
(73, 6, '2023-06-06 11:10:16'),
(74, 6, '2023-06-06 11:34:04'),
(75, 1, '2023-06-06 18:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `premieres`
--

DROP TABLE IF EXISTS `premieres`;
CREATE TABLE IF NOT EXISTS `premieres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `price` double NOT NULL,
  `movie_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `movie_id` (`movie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `capacity` int NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `capacity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sala 1', 30, 1, '2023-06-06 13:00:35', '2023-06-06 13:00:35'),
(2, 'Sala 2', 50, 1, '2023-06-06 13:02:17', '2023-06-06 13:02:17'),
(3, 'Sala 3', 60, 1, '2023-06-06 17:01:58', '2023-06-06 17:01:58'),
(4, 'Teresinha', 50, 1, '2023-06-06 18:54:03', '2023-06-06 18:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `movie_id` int NOT NULL,
  `time_init` datetime NOT NULL,
  `room_id` int NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `price` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `room_id` (`room_id`),
  KEY `sessions_ibfk_1` (`movie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `movie_id`, `time_init`, `room_id`, `status`, `price`, `created_at`, `updated_at`) VALUES
(1, 67, '2023-07-20 13:06:00', 1, 1, 300, '2023-06-06 15:07:32', '2023-06-06 15:07:32'),
(2, 67, '2023-07-20 13:06:00', 1, 1, 300, '2023-06-06 15:11:43', '2023-06-06 15:11:43'),
(3, 65, '2023-06-22 22:09:00', 2, 1, 500, '2023-06-06 16:09:16', '2023-06-06 16:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `tel` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_email` (`email`),
  UNIQUE KEY `uq_tel` (`tel`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `password`, `tel`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Edson', 'DaCruz', 'edson@email.com', '$2y$10$Grc.dUFiOzjiqCVFjwvybu6EdQTA2/vXhHjNdTg7s2dIFAQUcGkKC', '876543210', 'user', '2023-05-31 10:09:36', '2023-05-31 12:09:36'),
(2, 'Patricio', 'Langa', 'patricio@email.com', '$2y$10$RUHI.1VR9GXT6DY4Ga3.S.dxFjSnNmfmA4NKfHDumWfQD3zV7cme2', '543543534', 'user', '2023-05-31 10:28:16', '2023-05-31 12:28:16'),
(3, 'Tomas', 'Bernardo', 'tomas@email.com', '$2y$10$/a.LqQ5DV4hdOsW0F3q0fu8clqggt79lOc9GVu0A5TICkhHFHEW.u', '32423432', 'user', '2023-05-31 10:29:04', '2023-05-31 12:29:04'),
(4, 'Jonas', 'Favela', 'jonas@email.com', '$2y$10$WagsA6OLZOJpkMAY3rVQlOGepGILbgJt9JZUvbJ/DbGPAXHxmGnRy', '5465465', 'user', '2023-05-31 10:29:49', '2023-05-31 12:29:49'),
(5, 'Julio', 'Macamo', 'jmacamo@email.com', '$2y$10$NwrML4Y2V.vMCsaW5RKffOBKeVAQPUmja7bAW111OWQaQwahxH4Ta', '32423423', 'admin', '2023-05-31 22:46:13', '2023-06-01 19:53:00'),
(7, 'Sebas', 'Zumguze', 'jose@asd.da', '12345678', '454252', 'user', '2023-05-31 23:43:27', '2023-06-01 01:43:27'),
(8, 'José Marcos', 'Mabote', 'mabote@email.com', '12345678', '', 'user', '2023-06-01 09:39:53', '2023-06-01 11:39:53'),
(9, 'joão Mateus', 'Baciquete', 'joao@email.com', '$2y$10$v4H4km6n.ysa5hIlvMroPuywhLm1eaeI3rp4yi3xaaFJBF9KPm6.2', '76-477-8768', 'user', '2023-06-01 10:22:34', '2023-06-01 12:22:34'),
(10, 'Jacinto Alexandre', 'Joaquim', 'jalexander@email.com', '$2y$10$rW.vKSL104.Ok6ifchKHae8mBWf/OEznhOKZxNjwVQ9TA3C0oalFO', '8732423232', 'user', '2023-06-06 19:00:17', '2023-06-06 19:00:17');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`classification_id`) REFERENCES `classifications` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `movies_ibfk_2` FOREIGN KEY (`lang`) REFERENCES `langs` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `movies_ibfk_3` FOREIGN KEY (`subtitles`) REFERENCES `langs` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `movie_gender`
--
ALTER TABLE `movie_gender`
  ADD CONSTRAINT `movie_gender_ibfk_1` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `movie_gender_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `premieres`
--
ALTER TABLE `premieres`
  ADD CONSTRAINT `premieres_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sessions_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
