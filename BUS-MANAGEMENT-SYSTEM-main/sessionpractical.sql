-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 05:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sessionpractical`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbus`
--

CREATE TABLE `addbus` (
  `id` int(11) NOT NULL,
  `bus_no` varchar(250) NOT NULL,
  `total_seats` int(250) NOT NULL,
  `AddedOn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addbus`
--

INSERT INTO `addbus` (`id`, `bus_no`, `total_seats`, `AddedOn`) VALUES
(1, 'KSRTC01', 50, '2021-06-14'),
(2, 'KSRTC02', 50, '2021-06-15'),
(3, 'KSRTC03', 40, '2021-06-11'),
(4, 'KSRTC04', 40, '2021-06-12'),
(5, 'KSRTC05', 50, '2021-06-14'),
(6, 'KSRTC06', 50, '2021-06-15'),
(7, 'KSRTC07', 40, '2021-06-15'),
(8, 'KSRTC08', 50, '2021-06-16'),
(9, 'KSRTC09', 50, '2021-06-16'),
(10, 'KSRTC10', 40, '2021-06-16'),
(11, 'KSRTC11', 40, '2021-06-18'),
(12, 'KSRTC12', 50, '2021-06-18'),
(13, 'KSRTC13', 40, '2021-06-19'),
(14, 'KSRTC15', 40, '2021-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `adddriver`
--

CREATE TABLE `adddriver` (
  `id` int(250) NOT NULL,
  `RegNo` varchar(250) NOT NULL,
  `DriverName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `DateOfJoin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adddriver`
--

INSERT INTO `adddriver` (`id`, `RegNo`, `DriverName`, `email`, `DateOfJoin`) VALUES
(1, 'KBT01', 'Dharani', 'dha@gmail.com', '2021-06-11'),
(2, 'KBT02', 'Bhavana', 'bha@gmail.com', '2021-06-13'),
(3, 'KBT03', 'Anjali', 'Anj@gmail.com', '2021-06-12'),
(4, 'KBT04', 'Mounica', 'Mou@gmail.com', '2021-06-15'),
(5, 'KBT05', 'Strak', 'star@gmail.com', '2021-06-18'),
(6, 'KBT06', 'eg1', 'eg1@gmail.com', '2021-06-19'),
(7, 'KBT10', 'ex', 'ex@gmail.com', '2021-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'StarksG5', 'StarksG5213');

-- --------------------------------------------------------

--
-- Table structure for table `assignbus`
--

CREATE TABLE `assignbus` (
  `id` int(250) NOT NULL,
  `DriverName` varchar(250) NOT NULL,
  `RegNo` varchar(250) NOT NULL,
  `BusNo` varchar(250) NOT NULL,
  `TotalSeats` int(250) NOT NULL,
  `DeparturePlace` varchar(250) NOT NULL,
  `ArrivalPlace` varchar(250) NOT NULL,
  `DepartureDate` date NOT NULL,
  `ArrivalDate` date NOT NULL,
  `DepartureTime` time NOT NULL,
  `ArrivalTime` time NOT NULL,
  `charge` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignbus`
--

INSERT INTO `assignbus` (`id`, `DriverName`, `RegNo`, `BusNo`, `TotalSeats`, `DeparturePlace`, `ArrivalPlace`, `DepartureDate`, `ArrivalDate`, `DepartureTime`, `ArrivalTime`, `charge`) VALUES
(1, 'dharani', 'KBT01', 'KSRTC01', 50, 'ballari', 'bengaluru', '2021-06-18', '2021-06-19', '22:28:00', '08:28:00', 'Rs.400'),
(2, 'bhavana', 'KBT02', 'KSRTC02', 50, 'bengaluru', 'mangalore', '2021-06-19', '2021-06-19', '04:29:00', '09:29:00', 'Rs.500'),
(3, 'Anjali', 'KBT03', 'KSRTC03', 40, 'mangalore', 'bengaluru', '2021-06-19', '2021-06-20', '22:31:00', '07:31:00', 'Rs.550'),
(4, 'dharani', 'KBT01', 'KSRTC01', 50, 'ballari', 'mangalore', '2021-06-20', '2021-06-20', '04:47:00', '12:47:00', 'Rs.800'),
(5, 'bhavana', 'KBT02', 'KSRTC01', 50, 'udupi', 'mangalore', '2021-06-19', '2021-06-19', '06:14:00', '12:14:00', 'Rs.950'),
(6, 'eg1', 'KBT06', 'KSRTC04', 40, 'sandur', 'hampi', '2021-06-19', '2021-06-20', '10:07:00', '16:07:00', 'Rs.520'),
(7, 'dharani', 'KBT01', 'KSRTC01', 50, 'bengaluru', 'ballari', '2021-06-20', '2021-06-20', '21:15:00', '05:15:00', 'RS.500'),
(8, 'Anjali', 'KBT03', 'KSRTC10', 40, 'ballari', 'bengaluru', '2021-06-18', '2021-06-19', '23:26:00', '11:26:00', 'RS.500');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(255) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `name`, `password`) VALUES
(1, 'dharani@gmail.com', '123'),
(2, 'StarksG@gmail.com', '222'),
(3, 'anjali@gmail.com', '213');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbus`
--
ALTER TABLE `addbus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bus_no` (`bus_no`);

--
-- Indexes for table `adddriver`
--
ALTER TABLE `adddriver`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `RegNo` (`RegNo`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignbus`
--
ALTER TABLE `assignbus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbus`
--
ALTER TABLE `addbus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `adddriver`
--
ALTER TABLE `adddriver`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assignbus`
--
ALTER TABLE `assignbus`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
