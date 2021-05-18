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

INSERT INTO `colareportes` (`idcolaReportes`, `nombre`, `descripcionreporte`, `RutaAlQuery`, `rutasalida`, `usuarioSql`, `passwordSql`, `basedata`, `ip`, `windowsProcessId`, `EstaEnEjecucion`, `fechaencolado`, `fechafinalizado`, `FechaHoraEjecucion`) VALUES
(3, 'DETALLE', 'manto6_descr', '.\\\\QUERY_INPUTS\\\\v_manto6_formateado.txt', '.\\\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, NULL, '2021-05-14 15:23:03', NULL),
(7, 'F_TECNICAS', 'CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_formateado.txt', '.\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, '2021-05-14 15:32:55', '2021-05-14 15:33:02', NULL),
(8, 'F_TECNICAS', 'CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_formateado.txt', '.\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, '2021-05-14 15:37:15', '2021-05-14 15:37:22', NULL),
(9, 'F_TECNICAS_DETALLE', 'DETALLE_DE_CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_detalle_formateado.txt', '.\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, '2021-05-14 15:37:21', '2021-05-14 15:37:46', NULL),
(10, 'F_TECNICAS_DETALLE', 'DETALLE_DE_CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_detalle_formateado.txt', '.\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, '2021-05-14 15:37:39', '2021-05-14 15:37:48', NULL),
(11, 'F_TECNICAS_DETALLE', 'DETALLE_DE_CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_detalle_formateado.txt', '.\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, '2021-05-14 15:42:28', '2021-05-14 15:42:36', NULL),
(12, 'F_TECNICAS', 'CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_formateado.txt', '.\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, '2021-05-14 16:00:16', '2021-05-14 16:00:24', NULL),
(13, 'F_TECNICAS', 'CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_formateado.txt', '.\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, '2021-05-14 16:01:20', '2021-05-14 16:01:28', NULL),
(14, 'F_TECNICAS_DETALLE', 'DETALLE_DE_CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_detalle_formateado.txt', '.\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, '2021-05-14 16:01:51', '2021-05-14 16:01:59', NULL),
(15, 'F_TECNICAS', 'CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_formateado.txt', '.\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, '2021-05-14 16:05:37', '2021-05-14 16:05:44', NULL),
(16, 'F_TECNICAS_DETALLE', 'DETALLE_DE_CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_detalle_formateado.txt', '.\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, '2021-05-14 16:06:11', '2021-05-14 16:06:18', NULL),
(17, 'F_TECNICAS', 'CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_formateado.txt', '.\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, '2021-05-17 11:15:32', '2021-05-17 11:15:43', NULL),
(18, 'F_TECNICAS_DETALLE', 'DETALLE_DE_CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_detalle_formateado.txt', '.\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, '2021-05-17 11:17:42', '2021-05-17 11:20:39', NULL),
(19, 'F_TECNICAS_DETALLE', 'DETALLE_DE_CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_detalle_formateado.txt', '.\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, '2021-05-17 11:23:31', '2021-05-17 11:23:39', NULL),
(20, 'F_TECNICAS_DETALLE', 'DETALLE_DE_CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_detalle_formateado.txt', '.\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, '2021-05-17 11:29:42', '2021-05-17 11:29:51', NULL),
(21, 'F_TECNICAS_DETALLE', 'DETALLE_DE_CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_detalle_formateado.txt', '.\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, '2021-05-17 11:31:31', '2021-05-17 11:31:39', NULL),
(22, 'F_TECNICAS', 'CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_formateado.txt', '.\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, '2021-05-17 12:06:53', '2021-05-17 12:07:03', NULL),
(23, 'F_TECNICAS_DETALLE', 'DETALLE_DE_CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_detalle_formateado.txt', '.\\Descargas', 'sa', 'QcTb2013..', 'monitordb', '10.57.0.18', '0', NULL, '2021-05-17 12:11:41', '2021-05-17 12:11:49', NULL),
(24, 'F_TECNICASARGENTINA', 'CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_formateado.txt', '.DescargasARGENTINA', 'sa', 'anaconda1', 'monitordb', '10.54.118.60', '0', NULL, '2021-05-18 12:44:06', '2021-05-18 12:44:13', NULL),
(25, 'F_TECNICASARGENTINA', 'CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_formateado.txt', './Descargas/ARGENTINA', 'sa', 'anaconda1', 'monitordb', '10.54.118.60', '0', NULL, '2021-05-18 12:46:53', '2021-05-18 12:46:59', NULL),
(26, 'F_TECNICASARGENTINA', 'CANTIDAD_FALLAS_TECNICAS', '.\\QUERY_INPUTS\\v_manto6_formateado.txt', '.\\Descargas\\ARGENTINA', 'sa', 'anaconda1', 'monitordb', '10.54.118.60', '0', NULL, '2021-05-18 13:04:28', '2021-05-18 13:04:34', NULL);

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
