-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 07:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `9232_31`
--

-- --------------------------------------------------------

--
-- Table structure for table `djaci`
--

CREATE TABLE `djaci` (
  `id` int(11) NOT NULL,
  `broj_knjizice` varchar(20) NOT NULL,
  `ime_prezime` varchar(20) NOT NULL,
  `razred` varchar(20) NOT NULL,
  `odeljenje` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `djaci`
--

INSERT INTO `djaci` (`id`, `broj_knjizice`, `ime_prezime`, `razred`, `odeljenje`) VALUES
(1, '14-2020', 'Janko Veselinovic', 'II', '4'),
(2, '13-2020', 'Ranko Stojic', 'III', '5');

-- --------------------------------------------------------

--
-- Table structure for table `ocene`
--

CREATE TABLE `ocene` (
  `id` int(11) NOT NULL,
  `ocene` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ocene`
--

INSERT INTO `ocene` (`id`, `ocene`) VALUES
(1, 4),
(2, 5),
(3, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `predmeti`
--

CREATE TABLE `predmeti` (
  `id` int(11) NOT NULL,
  `id_djaci` int(11) NOT NULL,
  `naziv` varchar(20) NOT NULL,
  `profesor` varchar(20) NOT NULL,
  `id_ocene` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `predmeti`
--

INSERT INTO `predmeti` (`id`, `id_djaci`, `naziv`, `profesor`, `id_ocene`) VALUES
(1, 1, 'srpskog', 'SR', 1),
(2, 1, 'matematika', 'MT', 2),
(3, 2, 'matematika', 'MT', 3),
(4, 2, 'srpski', 'FF', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `djaci`
--
ALTER TABLE `djaci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ocene`
--
ALTER TABLE `ocene`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `predmeti`
--
ALTER TABLE `predmeti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_djaci` (`id_djaci`),
  ADD KEY `id_ocene` (`id_ocene`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `djaci`
--
ALTER TABLE `djaci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ocene`
--
ALTER TABLE `ocene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `predmeti`
--
ALTER TABLE `predmeti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `predmeti`
--
ALTER TABLE `predmeti`
  ADD CONSTRAINT `predmeti_ibfk_1` FOREIGN KEY (`id_djaci`) REFERENCES `djaci` (`id`),
  ADD CONSTRAINT `predmeti_ibfk_2` FOREIGN KEY (`id_ocene`) REFERENCES `ocene` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
