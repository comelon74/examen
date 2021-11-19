-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2021 a las 16:06:44
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estacionamiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_vehiculos`
--

CREATE TABLE `registro_vehiculos` (
  `idRegistro` int(4) NOT NULL,
  `noPlaca` varchar(8) NOT NULL,
  `horaEnt` datetime NOT NULL,
  `horaSal` datetime NOT NULL,
  `tiempoEstacionado` int(11) NOT NULL,
  `tipoVehiculo` varchar(13) NOT NULL,
  `cantidad` int(11) NOT NULL DEFAULT 0,
  `estatus` varchar(10) NOT NULL DEFAULT 'activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_vehiculos`
--

INSERT INTO `registro_vehiculos` (`idRegistro`, `noPlaca`, `horaEnt`, `horaSal`, `tiempoEstacionado`, `tipoVehiculo`, `cantidad`, `estatus`) VALUES
(510, 'smdfn,sf', '2021-11-19 02:54:20', '2021-11-19 03:04:38', 10, 'Residente', 10, 'finalizado'),
(511, 'kjsdhfjd', '2021-11-19 02:54:39', '2021-11-19 03:04:41', 10, 'No Residente', 30, 'finalizado'),
(512, 'kjlsdfmm', '2021-11-19 02:54:49', '2021-11-19 02:57:40', 3, 'Oficial', 0, 'finalizado'),
(513, 'kljflkaj', '2021-11-19 08:28:01', '0000-00-00 00:00:00', 0, 'No Residente', 0, 'activo'),
(514, 'lsdfjapk', '2021-11-19 08:29:54', '2021-11-19 08:56:52', 27, 'Oficial', 0, 'finalizado'),
(515, 'ksjklada', '2021-11-19 08:33:23', '2021-11-19 08:36:07', 3, 'No Residente', 9, 'finalizado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_vehiculos`
--
ALTER TABLE `registro_vehiculos`
  ADD PRIMARY KEY (`idRegistro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_vehiculos`
--
ALTER TABLE `registro_vehiculos`
  MODIFY `idRegistro` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=516;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
