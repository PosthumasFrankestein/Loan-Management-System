-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 06, 2021 at 04:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lonee_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `l_no` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`l_no`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `lonee`
--

CREATE TABLE `lonee` (
  `l_no` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lonee`
--

INSERT INTO `lonee` (`l_no`, `name`, `mobile`, `email`, `amount`, `date`) VALUES
(1, 'akhilesh tamang', '982222222222', 'tamangrocks@gmail.com', 50000, '2019-02-04'),
(2, 'Bikas Tamang', '794724414', 'bikastok4@gmail.com', 50000, '2020-10-14'),
(3, 'Tashi Tsering K.C', '87821764', 'chheringtashi@gmail.com', 10000, '2020-12-08'),
(4, 'Stalker Bikas', '777777777', 'icanseeyou@gmail.com', 20000, '2020-11-10'),
(5, 'Bikas Stalker', '412921421', 'iamoverpole@gmail.com', 300000, '2020-12-01'),
(6, 'Samir Moktan', '2141243', 'moktansamir@yahoo.com', 30000, '2019-10-16'),
(8, 'noimad', '98126141', 'adminnoimad@gmail.com', 10000, '2021-02-06'),
(24, 'noimantt', '983333333', 'noimantt@gmail.com', 1200, '2021-02-02'),
(25, 'noiceboi123', '78589', 'jj@gmail.com', 20000, '2021-02-05'),
(26, 'Som pd shrestha', '98723131', 'sunway.som@gmail.com', 10000, '2021-02-11'),
(27, 'Tenzin', '12414', 'tenzin@ymail.com', 11000, '2021-03-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`l_no`);

--
-- Indexes for table `lonee`
--
ALTER TABLE `lonee`
  ADD PRIMARY KEY (`l_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `l_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lonee`
--
ALTER TABLE `lonee`
  MODIFY `l_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
