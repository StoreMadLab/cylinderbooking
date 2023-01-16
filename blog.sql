-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 01:39 PM
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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `cdview`
-- (See below for the actual view)
--
CREATE TABLE `cdview` (
);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `adress` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cylinder`
--

CREATE TABLE `cylinder` (
  `phone` varchar(191) NOT NULL,
  `amount` varchar(191) NOT NULL,
  `weightt` varchar(191) NOT NULL,
  `no_of_Cylinder` varchar(191) NOT NULL,
  `Bdate` varchar(191) NOT NULL,
  `Ddate` varchar(191) NOT NULL,
  `T_amount` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distributor_detail`
--

CREATE TABLE `distributor_detail` (
  `name` varchar(19) NOT NULL,
  `address` varchar(191) NOT NULL,
  `city` varchar(10) NOT NULL,
  `pin` varchar(17) NOT NULL,
  `m_no` varchar(12) NOT NULL,
  `e_id` varchar(12) NOT NULL,
  `statuss` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `myorderview`
-- (See below for the actual view)
--
CREATE TABLE `myorderview` (
`cname` varchar(191)
,`adress` varchar(191)
,`phone` varchar(191)
,`no_of_Cylinder` varchar(191)
,`T_amount` varchar(191)
,`Ddate` varchar(191)
,`dname` varchar(19)
,`m_no` varchar(12)
);

-- --------------------------------------------------------

--
-- Structure for view `cdview`
--
DROP TABLE IF EXISTS `cdview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cdview`  AS SELECT `c`.`name` AS `cname`, `c`.`phone` AS `cphone`, `c`.`city` AS `Ccity`, `d`.`name` AS `Dname`, `d`.`m_no` AS `Dphone`, `d`.`city` AS `Dcity` FROM (`customer` `c` join `distributor_details` `d`) WHERE `c`.`city` = `d`.`city` AND `d`.`statuss` = 'active''active'  ;

-- --------------------------------------------------------

--
-- Structure for view `myorderview`
--
DROP TABLE IF EXISTS `myorderview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `myorderview`  AS SELECT `c`.`name` AS `cname`, `c`.`adress` AS `adress`, `c`.`phone` AS `phone`, `cy`.`no_of_Cylinder` AS `no_of_Cylinder`, `cy`.`T_amount` AS `T_amount`, `cy`.`Ddate` AS `Ddate`, `d`.`name` AS `dname`, `d`.`m_no` AS `m_no` FROM ((`customer` `c` join `cylinder` `cy`) join `distributor_detail` `d`) WHERE `cy`.`phone` = `c`.`phone` AND `c`.`city` = `d`.`city``city`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `cylinder`
--
ALTER TABLE `cylinder`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `distributor_detail`
--
ALTER TABLE `distributor_detail`
  ADD PRIMARY KEY (`city`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
