-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 07:08 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reportero`
--

-- --------------------------------------------------------

--
-- Table structure for table `colareportes`
--

CREATE TABLE `colareportes` (
  `idcolaReportes` int(11) NOT NULL,
  `nombre` varchar(500) DEFAULT NULL,
  `descripcionreporte` varchar(500) DEFAULT NULL,
  `RutaAlQuery` varchar(500) DEFAULT NULL COMMENT 'Es la ruta al reporte .sql',
  `rutasalida` varchar(500) DEFAULT NULL,
  `usuarioSql` varchar(45) DEFAULT NULL,
  `passwordSql` varchar(45) DEFAULT NULL,
  `basedata` varchar(45) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `windowsProcessId` varchar(45) DEFAULT '0',
  `EstaEnEjecucion` varchar(45) DEFAULT NULL,
  `fechaencolado` datetime DEFAULT NULL,
  `fechafinalizado` datetime DEFAULT NULL,
  `FechaHoraEjecucion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colareportes`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `colareportes`
--
ALTER TABLE `colareportes`
  ADD PRIMARY KEY (`idcolaReportes`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colareportes`
--
ALTER TABLE `colareportes`
  MODIFY `idcolaReportes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
