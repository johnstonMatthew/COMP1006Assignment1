-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2025 at 04:56 PM
-- Server version: 8.0.39
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comp1006database`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignonetable`
--

CREATE TABLE `assignonetable` (
  `userAccountId` int NOT NULL,
  `userName` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `firstName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `dateOfBirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignonetable`
--

INSERT INTO `assignonetable` (`userAccountId`, `userName`, `firstName`, `lastName`, `email`, `dateOfBirth`) VALUES
(1, 'Shadow_Boss1234', 'Jacen', 'Bellamy', 'jacenBellamy@gmail.com', '2005-09-10'),
(2, 'geniusphysicist436', 'Sheldon', 'Cooper', 'sheldoncooper@gmail.com', '1900-05-12'),
(4, 'Omega_Troller1269', 'Thurman_', 'Merman', 'therman.merman@hotmail.com', '1999-11-02'),
(5, 'FryEmUp', 'John', 'Lakehead', 'johnlakehead@lakeheadu.ca', '1967-07-17'),
(6, 'Fug_Nug1247', 'Alice', 'Underground', 'alice.underground@hotmail.com', '1900-12-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignonetable`
--
ALTER TABLE `assignonetable`
  ADD PRIMARY KEY (`userAccountId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignonetable`
--
ALTER TABLE `assignonetable`
  MODIFY `userAccountId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
