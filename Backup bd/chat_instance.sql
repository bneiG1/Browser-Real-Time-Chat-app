-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 06:32 PM
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
-- Table structure for table `chat_instance`
--

CREATE TABLE `chat_instance` (
  `User_Id_sender` int(8) NOT NULL,
  `User_Id_reciver` int(8) NOT NULL,
  `Message` varchar(1024) NOT NULL,
  `Date` datetime NOT NULL,
  `Chat_Instance_Id` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_instance`
--

INSERT INTO `chat_instance` (`User_Id_sender`, `User_Id_reciver`, `Message`, `Date`, `Chat_Instance_Id`) VALUES
(1, 2, 'Hello!', '2022-01-09 18:18:37', 'c79l7884kgehvdgf2f7bnn802f'),
(2, 1, 'Hi!', '2022-01-09 18:31:01', '77spld1kfk8ohqglnuev7kr27b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_instance`
--
ALTER TABLE `chat_instance`
  ADD KEY `User_Id_sender` (`User_Id_sender`),
  ADD KEY `User_Id_reciver` (`User_Id_reciver`),
  ADD KEY `Chat_Instance_Id` (`Chat_Instance_Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat_instance`
--
ALTER TABLE `chat_instance`
  ADD CONSTRAINT `chat_instance_ibfk_1` FOREIGN KEY (`User_Id_sender`) REFERENCES `users` (`User_Id`),
  ADD CONSTRAINT `chat_instance_ibfk_2` FOREIGN KEY (`User_Id_reciver`) REFERENCES `friend_list` (`User_Id_friend`),
  ADD CONSTRAINT `chat_instance_ibfk_3` FOREIGN KEY (`Chat_Instance_Id`) REFERENCES `connection_logs` (`Session_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
