-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 04:40 PM
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
-- Database: `9232_32_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinacije`
--

CREATE TABLE `destinacije` (
  `id` int(11) NOT NULL,
  `drzava` varchar(20) NOT NULL,
  `grad` varchar(20) NOT NULL,
  `viza` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinacije`
--

INSERT INTO `destinacije` (`id`, `drzava`, `grad`, `viza`) VALUES
(1, 'Spanija', 'Madrid', 1),
(2, 'Francuska', 'Pariz', 0);

-- --------------------------------------------------------

--
-- Table structure for table `putnici`
--

CREATE TABLE `putnici` (
  `broj_pasosa` varchar(20) NOT NULL,
  `ime_prezime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `putnici`
--

INSERT INTO `putnici` (`broj_pasosa`, `ime_prezime`) VALUES
('123456', 'Marko markovic'),
('654321', 'Petar Petrovic');

-- --------------------------------------------------------

--
-- Table structure for table `putovanja`
--

CREATE TABLE `putovanja` (
  `id` int(11) NOT NULL,
  `datum_pol` date NOT NULL,
  `datum_pov` date NOT NULL,
  `destinacija_id` int(11) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `putovanja`
--

INSERT INTO `putovanja` (`id`, `datum_pol`, `datum_pov`, `destinacija_id`, `cena`) VALUES
(1, '2021-05-31', '2021-06-07', 1, 100),
(2, '2021-05-31', '2021-06-09', 2, 200);

-- --------------------------------------------------------

--
-- Table structure for table `spisak putnika`
--

CREATE TABLE `spisak putnika` (
  `id` int(11) NOT NULL,
  `id_putovanja` int(11) NOT NULL,
  `broj_pasosa` varchar(20) NOT NULL,
  `popust` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spisak putnika`
--

INSERT INTO `spisak putnika` (`id`, `id_putovanja`, `broj_pasosa`, `popust`) VALUES
(1, 1, '123456', 10),
(2, 2, '654321', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinacije`
--
ALTER TABLE `destinacije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `putnici`
--
ALTER TABLE `putnici`
  ADD PRIMARY KEY (`broj_pasosa`);

--
-- Indexes for table `putovanja`
--
ALTER TABLE `putovanja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destinacija_id` (`destinacija_id`);

--
-- Indexes for table `spisak putnika`
--
ALTER TABLE `spisak putnika`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_putovanja` (`id_putovanja`),
  ADD KEY `broj_pasosa` (`broj_pasosa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinacije`
--
ALTER TABLE `destinacije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `putovanja`
--
ALTER TABLE `putovanja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `spisak putnika`
--
ALTER TABLE `spisak putnika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `putovanja`
--
ALTER TABLE `putovanja`
  ADD CONSTRAINT `putovanja_ibfk_1` FOREIGN KEY (`destinacija_id`) REFERENCES `destinacije` (`id`);

--
-- Constraints for table `spisak putnika`
--
ALTER TABLE `spisak putnika`
  ADD CONSTRAINT `spisak putnika_ibfk_1` FOREIGN KEY (`id_putovanja`) REFERENCES `putovanja` (`id`),
  ADD CONSTRAINT `spisak putnika_ibfk_2` FOREIGN KEY (`broj_pasosa`) REFERENCES `putnici` (`broj_pasosa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
