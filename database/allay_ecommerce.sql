-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 07:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `allay_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(80) NOT NULL,
  `mobileNo` varchar(60) DEFAULT NULL,
  `address` varchar(120) DEFAULT NULL,
  `registrationDate` datetime NOT NULL DEFAULT current_timestamp(),
  `verificationCode` int(11) NOT NULL,
  `codeExpiryDate` datetime NOT NULL,
  `status` varchar(60) NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `name`, `email`, `password`, `mobileNo`, `address`, `registrationDate`, `verificationCode`, `codeExpiryDate`, `status`) VALUES
(1, '123', '123', '202cb962ac59075b964b07152d234b70', NULL, NULL, '2022-05-06 00:09:56', 976843, '2022-05-08 16:50:23', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
