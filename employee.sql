-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2021 at 11:43 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_number` varchar(10) NOT NULL,
  `last_name` char(50) NOT NULL,
  `first_name` char(50) NOT NULL,
  `middle_name` char(50) NOT NULL,
  `sex` char(1) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(2) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tel_phone` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_number`, `last_name`, `first_name`, `middle_name`, `sex`, `birthdate`, `age`, `address`, `tel_phone`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1', 'Johnasdasd', 'Doesasdasd', 'Michealasdasd', 'M', '2021-10-14', 0, 'a', 'asdasd', '2021-10-15 11:02:00', '2021-10-15 11:33:00', '2021-10-15 11:33:00'),
('2', 'Doeasdasd', 'Andrew', 'Belgera', 'M', '2021-10-13', 0, 'test address', 'asd asd', '2021-10-15 11:04:00', '2021-10-15 11:33:00', '2021-10-15 11:41:00'),
('213123', 'Andrew', 'Doe', 'Belgera', 'M', '2021-10-14', 0, 'test address', 'asdasd', '2021-10-15 11:40:00', '2021-10-15 11:40:00', NULL),
('3', 'Cabato', 'Renz', 'Munozzz', 'M', '2021-06-01', 0, 'a2', '21adasd', '2021-10-15 11:05:00', '2021-10-15 11:33:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_number`),
  ADD KEY `name` (`last_name`,`first_name`),
  ADD KEY `unique_id` (`employee_number`,`created_at`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
