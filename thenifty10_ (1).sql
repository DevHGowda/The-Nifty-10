-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 11:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thenifty10.`
--

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `Bid` int(11) NOT NULL,
  `userid` bigint(11) NOT NULL,
  `Reliance_Industries` int(11) NOT NULL,
  `Tata_Consultancy_Services` int(11) NOT NULL,
  `HDFC_Bank` int(11) NOT NULL,
  `Infosys` int(11) NOT NULL,
  `ICICI_Bank` int(11) NOT NULL,
  `Hindustan_Unilever` int(11) NOT NULL,
  `State_Bank_of_India` int(11) NOT NULL,
  `Housing_Dev_Finance Corp` int(11) NOT NULL,
  `Bharti_Airtel` int(11) NOT NULL,
  `Adani_Enterprises` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`Bid`, `userid`, `Reliance_Industries`, `Tata_Consultancy_Services`, `HDFC_Bank`, `Infosys`, `ICICI_Bank`, `Hindustan_Unilever`, `State_Bank_of_India`, `Housing_Dev_Finance Corp`, `Bharti_Airtel`, `Adani_Enterprises`) VALUES
(1, 2032212, 12, 0, 0, 2, 0, 0, 0, 0, 0, 10),
(7, 49219546, 7962, 244, 222, 222, 232, 222, 222, 0, 222, 422),
(8, 790265, 20, 20, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 65374629735251777, 625, 1246, 1234, 0, 0, 0, 0, 0, 0, 345),
(10, 6896806402032834, 80, 0, 0, 0, 0, 0, 0, 0, 0, 10),
(11, 4184310024659703311, 10, 0, 110, 0, 0, 0, 300, 0, 0, 200),
(12, 134617353462990, 45, 0, 0, 0, 55, 0, 0, 0, 50, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass1` varchar(15) NOT NULL,
  `pass2` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userid`, `fname`, `lname`, `email`, `uname`, `pass1`, `pass2`) VALUES
(1, 2032212, 'Dev', 'Gowda', 'devharishgowda@gmail.com', 'Dev', '123', '123'),
(11, 49219546, 'Ammu', 'G L', 'hi@hi.com', 'Ammu', '123', '123'),
(12, 790265, 'Ananya', 'S', 'hi@hi.com', 'Ananya', '1234', '1234'),
(13, 65374629735251777, 'Jithin', 'R', 'hi@hi.com', 'Jithin', '12345', '12345'),
(14, 6896806402032834, 'Anish', '12e3', 'hi@hi.com', 'Anish', '123', '123'),
(15, 4184310024659703311, 'Dummy', '123', 'hi@hi.com', 'Dummy', '123', '123'),
(16, 134617353462990, 'Divya', 'M', 'hi@hi.com', 'Divya', '123', '123'),
(17, 809212227940332063, 'Random', 'user', 'hi@hi.com', 'Random', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`Bid`) USING BTREE,
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`userid`) USING BTREE,
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `Bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
