-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 03:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(24, 'thangsql', '$2y$10$u2fOlm8Ww2qcR0oCDAiONOzN.pdXB8uP2ZCIaeuOYIVOrV0tl.DkC', '2023-03-29 22:40:06'),
(25, 'helllo', '$2y$10$Y/Mj67kdTOpninSO00IGe.f6sfCGQtHjiGPgI0201GsAxrahmewNG', '2023-04-04 20:37:55'),
(26, '123456', '$2y$10$jZoWTWA64imOxt2.SMIIl.zKfgj70P/hyb9JsSvTvaeKIzagiY4su', '2023-04-04 20:38:36'),
(27, '12345', '$2y$10$IW3qu5I00GfWF5.68eIumu6TRVt/5EtHQSPxljg557d0nQuldfh5K', '2023-04-04 21:40:07'),
(28, 'thang1234', '$2y$10$AIXl3Sajo2Tmbrzjvk/jAeAcFQS02Do0lEtLmagDM1oZd8H3Nnwqq', '2023-05-17 17:20:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
