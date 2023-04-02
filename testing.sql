-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 05:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `month` varchar(10) NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(9) NOT NULL,
  `offmayor` varchar(100) NOT NULL,
  `ootvm` varchar(100) NOT NULL,
  `sangbayan` varchar(100) NOT NULL,
  `hrmo` varchar(100) NOT NULL,
  `opdc` varchar(100) NOT NULL,
  `ocr` varchar(100) NOT NULL,
  `mgso` varchar(100) NOT NULL,
  `mbo` varchar(100) NOT NULL,
  `mao` varchar(100) NOT NULL,
  `mto` varchar(100) NOT NULL,
  `masso` varchar(100) NOT NULL,
  `muinfo` varchar(100) NOT NULL,
  `ldf` varchar(100) NOT NULL,
  `cf` varchar(100) NOT NULL,
  `rhu` varchar(100) NOT NULL,
  `rhuii` varchar(100) NOT NULL,
  `mswdo` varchar(100) NOT NULL,
  `magri` varchar(100) NOT NULL,
  `senior` varchar(100) NOT NULL,
  `mengi` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `eem` varchar(100) NOT NULL,
  `mdrrm` varchar(100) NOT NULL,
  `ees` varchar(100) NOT NULL,
  `chpr` varchar(100) NOT NULL,
  `eec` varchar(100) NOT NULL,
  `sef` varchar(100) NOT NULL,
  `no` varchar(100) NOT NULL,
  `gad` varchar(100) NOT NULL,
  `lyd` varchar(100) NOT NULL,
  `poad` varchar(100) NOT NULL,
  `prd` varchar(100) NOT NULL,
  `ict` varchar(100) NOT NULL,
  `udho` varchar(100) NOT NULL,
  `bplo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'rhon', 'aaa@aaa', 'rhonrhon', 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `dvno` varchar(48) NOT NULL,
  `obrno` varchar(48) NOT NULL,
  `checkno` int(48) NOT NULL,
  `particulars` varchar(200) NOT NULL,
  `dates` date NOT NULL,
  `deduction` int(14) NOT NULL,
  `total` int(12) NOT NULL,
  `department` varchar(100) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `qty`, `price`, `dvno`, `obrno`, `checkno`, `particulars`, `dates`, `deduction`, `total`, `department`, `login_id`) VALUES
(18, '1', 0, '0.00', '2022-03-0355', '02-1011-00427', 1984254, 'Honorarium as EEMO ICO February-2022', '2022-01-02', 0, 0, '', 1),
(19, '1', 0, '0.00', '2022-03-0358', '02-1011-00430', 1985080, 'Service rendered as Casual-GSO-Tuico-February 2022', '2022-01-03', 0, 11593, 'Office Of the Mayor', 1),
(20, '1', 0, '0.00', '2022-03-0357', '02-1011-00429', 1985081, 'Service rendered as Casual Sandoval Feb-2022', '2022-01-03', 0, 11593, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `viewco`
--

CREATE TABLE `viewco` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `dvno` varchar(48) NOT NULL,
  `obrno` varchar(48) NOT NULL,
  `checkno` int(48) NOT NULL,
  `particulars` int(100) NOT NULL,
  `dates` date NOT NULL,
  `deduction` int(14) NOT NULL,
  `total` int(12) NOT NULL,
  `department` varchar(100) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `viewco`
--

INSERT INTO `viewco` (`id`, `name`, `qty`, `price`, `dvno`, `obrno`, `checkno`, `particulars`, `dates`, `deduction`, `total`, `department`, `login_id`) VALUES
(10, '', 0, '0.00', '1', '2', 3, 1233, '1232-12-31', 2, 23, 'Rural Health Unit I', 1);

-- --------------------------------------------------------

--
-- Table structure for table `viewmooe`
--

CREATE TABLE `viewmooe` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `dvno` varchar(48) NOT NULL,
  `obrno` varchar(48) NOT NULL,
  `checkno` int(48) NOT NULL,
  `particulars` int(100) NOT NULL,
  `dates` date NOT NULL,
  `deduction` int(14) NOT NULL,
  `total` int(12) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `viewmooe`
--

INSERT INTO `viewmooe` (`id`, `name`, `qty`, `price`, `dvno`, `obrno`, `checkno`, `particulars`, `dates`, `deduction`, `total`, `login_id`) VALUES
(8, '1', 2, '3.00', '4', '5', 7, 6, '1111-11-11', 7, 9, 1),
(9, '', 0, '0.00', '1', '2', 3, 4, '1222-02-01', 5, 30, 1),
(11, '', 0, '0.00', '1', '2', 3, 4, '0000-00-00', 5, 6, 1),
(12, '', 0, '0.00', '1', '2', 3, 4, '0000-00-00', 5, 6, 1),
(13, '1', 0, '0.00', '3', '2', 3, 4, '0000-00-00', 5, 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_products_1` (`login_id`);

--
-- Indexes for table `viewco`
--
ALTER TABLE `viewco`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_viewmooe_1` (`login_id`);

--
-- Indexes for table `viewmooe`
--
ALTER TABLE `viewmooe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_viewmooe_1` (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `viewco`
--
ALTER TABLE `viewco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `viewmooe`
--
ALTER TABLE `viewmooe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `viewmooe`
--
ALTER TABLE `viewmooe`
  ADD CONSTRAINT `FK_viewmooe_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
