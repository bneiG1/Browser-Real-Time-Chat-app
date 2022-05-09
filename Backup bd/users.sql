-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 06:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real-time chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Id` int(8) NOT NULL,
  `Username` varchar(128) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Logged_in` datetime NOT NULL,
  `Logged_out` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `Username`, `Email`, `Password`, `Logged_in`, `Logged_out`) VALUES
(1, 'admin', 'iosif.goga01@e-uvt.ro', 'kKURI18=', '2022-01-09 18:14:17', NULL),
(2, 'beni', 'benig1@yahoo.com', 'wPNP', '2022-01-09 18:31:49', '2022-01-09 18:31:52'),
(3, 'iosif', 'compactb1@gamil.com', 'wPNP', '2022-01-09 18:16:05', '2022-01-09 18:16:08'),
(4, 'goga', 'goga.iosif.beniamin@gmail.com', 'wPNP', '2022-01-09 18:14:45', '2022-01-09 18:14:46'),
(5, 'qwertyuiop', 'email@adress.com', 'wPNP', '2022-01-09 18:16:18', '2022-01-09 18:16:21'),
(6, 'qwe', 'qwe@qwe.qwe', 'gLYZ', '2022-01-09 18:16:29', '2022-01-09 18:16:31'),
(7, '123', 'qwe123@qwe123.qwe123', 'wPNP', '2022-01-09 18:16:35', '2022-01-09 18:16:37'),
(8, 'user', 'user@user.com', 'wPNP', '2022-01-09 18:15:17', '2022-01-09 18:15:18'),
(9, 'qwe1234', 'compactb1@eamil.com', 'wPNP', '2022-01-09 18:16:44', '2022-01-09 18:16:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
