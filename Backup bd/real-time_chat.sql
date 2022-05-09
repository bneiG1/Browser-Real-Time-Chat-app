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

-- --------------------------------------------------------

--
-- Table structure for table `connection_logs`
--

CREATE TABLE `connection_logs` (
  `Login_index` int(12) NOT NULL,
  `User_Id` int(8) NOT NULL,
  `Logged_in` datetime NOT NULL,
  `Logged_out` datetime DEFAULT NULL,
  `Session_Id` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `connection_logs`
--

INSERT INTO `connection_logs` (`Login_index`, `User_Id`, `Logged_in`, `Logged_out`, `Session_Id`) VALUES
(1, 1, '2022-01-08 16:37:21', '2022-01-08 16:37:29', '6k0el7137cl6n76k8bcsdlf58p'),
(2, 2, '2022-01-08 16:37:38', NULL, 'qd9m2l7vbguj9721q1krdmirkl'),
(3, 3, '2022-01-08 16:37:54', '2022-01-08 16:38:05', '181geqr2r5khg8p2eqro54iqre'),
(4, 2, '2022-01-08 16:39:56', '2022-01-08 16:39:58', '1g7ksv24hqrtj3865bn23cd8ft'),
(5, 1, '2022-01-08 18:36:16', '2022-01-08 18:36:35', 'fpoiltuk2lscn33p00bjrhs9dl'),
(6, 1, '2022-01-08 18:36:45', '2022-01-08 21:19:06', 'no9jtm7hrh0f2ppa3gr1mtpbuq'),
(7, 4, '2022-01-08 19:00:56', '2022-01-08 19:01:07', 'ur02j2upqhmd2pjo72g6k1cvc5'),
(8, 4, '2022-01-08 19:01:19', '2022-01-08 19:44:52', 'ba6a2bc0lbuj98hpv3gp85q4gh'),
(9, 2, '2022-01-08 21:18:24', '2022-01-08 21:19:19', 'v5kgu1rajdp9sk7k1kpocu07kv'),
(10, 2, '2022-01-08 21:53:22', '2022-01-08 21:53:31', '3m4pklkvdhobcu410loioe0dd0'),
(11, 1, '2022-01-09 18:07:10', NULL, 'ube88tkt6vkufqkhuqlvs9rl6f'),
(12, 1, '2022-01-09 18:12:53', NULL, 'avde7mgmrab7jo1us553921ja9'),
(13, 1, '2022-01-09 18:14:17', NULL, 'c79l7884kgehvdgf2f7bnn802f'),
(14, 2, '2022-01-09 18:14:34', '2022-01-09 18:14:37', '1r5j04c4j24mtstbbr7do1q1va'),
(15, 3, '2022-01-09 18:14:40', NULL, '1jn7iqm9fgh4o1drd3po5gaokf'),
(16, 4, '2022-01-09 18:14:45', '2022-01-09 18:14:46', 'letfscup8kcp2he4lbehriv4g0'),
(17, 5, '2022-01-09 18:14:58', NULL, 'kbnl8girtqk9uajrntooca1nkr'),
(18, 6, '2022-01-09 18:15:04', NULL, '8dfsjk0k06mrlfs8695uat5dr0'),
(19, 7, '2022-01-09 18:15:11', NULL, 'in65ale9cgoegp1m6fh38lobcd'),
(20, 8, '2022-01-09 18:15:17', '2022-01-09 18:15:18', 'n08d78d4guq82r1j69caok1utp'),
(21, 9, '2022-01-09 18:15:22', NULL, 'cu5mfemkn4cgrar3ok0ligjel4'),
(22, 3, '2022-01-09 18:16:05', '2022-01-09 18:16:08', 'emk075m38vdcovk7me4bs3sl2a'),
(23, 5, '2022-01-09 18:16:18', '2022-01-09 18:16:21', '9grqdbj9t3q806146o6e3la8eh'),
(24, 6, '2022-01-09 18:16:29', '2022-01-09 18:16:31', 'midi183e6jp5pch5s66n84mk5p'),
(25, 7, '2022-01-09 18:16:35', '2022-01-09 18:16:37', 'f6op82cc85gsr837aa54va0enb'),
(26, 9, '2022-01-09 18:16:44', '2022-01-09 18:16:48', 'alrqu91covf5rmol6dnrk98d69'),
(27, 2, '2022-01-09 18:30:53', NULL, '77spld1kfk8ohqglnuev7kr27b'),
(28, 2, '2022-01-09 18:31:49', '2022-01-09 18:31:52', '4f19pn5cpmsgdpc6o0dbtt0thp');

-- --------------------------------------------------------

--
-- Table structure for table `friend_list`
--

CREATE TABLE `friend_list` (
  `User_Id` int(8) NOT NULL,
  `User_Id_friend` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friend_list`
--

INSERT INTO `friend_list` (`User_Id`, `User_Id_friend`) VALUES
(1, 2),
(1, 3),
(2, 3),
(3, 2),
(1, 4),
(4, 1),
(4, 2),
(3, 1),
(2, 4),
(2, 1),
(6, 1),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(9, 1),
(9, 2),
(1, 9);

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
-- Indexes for table `chat_instance`
--
ALTER TABLE `chat_instance`
  ADD KEY `User_Id_sender` (`User_Id_sender`),
  ADD KEY `User_Id_reciver` (`User_Id_reciver`),
  ADD KEY `Chat_Instance_Id` (`Chat_Instance_Id`);

--
-- Indexes for table `connection_logs`
--
ALTER TABLE `connection_logs`
  ADD PRIMARY KEY (`Login_index`),
  ADD UNIQUE KEY `Session_Id` (`Session_Id`),
  ADD KEY `connection_logs_ibfk_1` (`User_Id`);

--
-- Indexes for table `friend_list`
--
ALTER TABLE `friend_list`
  ADD KEY `User_Id` (`User_Id`),
  ADD KEY `User_Id_friend` (`User_Id_friend`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `connection_logs`
--
ALTER TABLE `connection_logs`
  MODIFY `Login_index` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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

--
-- Constraints for table `connection_logs`
--
ALTER TABLE `connection_logs`
  ADD CONSTRAINT `connection_logs_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `users` (`User_Id`);

--
-- Constraints for table `friend_list`
--
ALTER TABLE `friend_list`
  ADD CONSTRAINT `friend_list_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `users` (`User_Id`),
  ADD CONSTRAINT `friend_list_ibfk_2` FOREIGN KEY (`User_Id_friend`) REFERENCES `users` (`User_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
