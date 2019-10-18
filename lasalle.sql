-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2019 a las 21:53:06
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lasalle`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `clave` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `usuario`, `clave`) VALUES
(1, 'Lautaro', 'Lautaro'),
(2, 'nico', 'nico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuraciones`
--

CREATE TABLE `configuraciones` (
  `id_unica_configuracion` int(11) NOT NULL,
  `cuota_menor` double(6,2) DEFAULT NULL,
  `cuota_mayor` double(6,2) DEFAULT NULL,
  `descuento_becado` double(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `configuraciones`
--

INSERT INTO `configuraciones` (`id_unica_configuracion`, `cuota_menor`, `cuota_mayor`, `descuento_becado`) VALUES
(1, 1.00, 1.00, 1.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_socio`
--

CREATE TABLE `contacto_socio` (
  `id_socio` int(11) DEFAULT NULL,
  `domicilio` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ciudad` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `codigo_postal` int(5) DEFAULT NULL,
  `celular` int(15) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `email` varchar(70) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_socio`
--

CREATE TABLE `cuenta_socio` (
  `id_socio` int(11) DEFAULT NULL,
  `titular` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cuenta` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `numero_cuenta` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cbu` varchar(700) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `banco` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sucursal` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_socio`
--

CREATE TABLE `info_socio` (
  `id_socio` int(11) DEFAULT NULL,
  `obra_social` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `division` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_alta` date DEFAULT NULL,
  `fichado_uar` date DEFAULT NULL,
  `carnet` enum('Si','No') COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ficha` enum('Si','No') COLLATE utf8_spanish2_ci DEFAULT NULL,
  `becado` enum('Si','No') COLLATE utf8_spanish2_ci DEFAULT NULL,
  `forma_de_pago` enum('Debito','Efectivo','Cobrador') COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` enum('Alta','Baja') COLLATE utf8_spanish2_ci DEFAULT NULL,
  `categoria` enum('Mayor','Menor','Vitalicio','Empleado') COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable`
--

CREATE TABLE `responsable` (
  `id_socio` int(11) DEFAULT NULL,
  `dni` int(10) DEFAULT NULL,
  `cuit` int(15) DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `sexo` enum('F','M') COLLATE utf8_spanish2_ci DEFAULT NULL,
  `domicilio` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ciudad` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `codigo_postal` int(5) DEFAULT NULL,
  `celular` int(15) DEFAULT NULL,
  `telefono` int(15) DEFAULT NULL,
  `email` varchar(80) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socio`
--

CREATE TABLE `socio` (
  `id_socio` int(11) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellido` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cuit` int(30) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `sexo` enum('M','F') COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `configuraciones`
--
ALTER TABLE `configuraciones`
  ADD PRIMARY KEY (`id_unica_configuracion`);

--
-- Indices de la tabla `contacto_socio`
--
ALTER TABLE `contacto_socio`
  ADD KEY `id_socio` (`id_socio`);

--
-- Indices de la tabla `info_socio`
--
ALTER TABLE `info_socio`
  ADD KEY `id_socio` (`id_socio`);

--
-- Indices de la tabla `socio`
--
ALTER TABLE `socio`
  ADD PRIMARY KEY (`id_socio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contacto_socio`
--
ALTER TABLE `contacto_socio`
  ADD CONSTRAINT `contacto_socio_ibfk_1` FOREIGN KEY (`id_socio`) REFERENCES `socio` (`id_socio`);

--
-- Filtros para la tabla `info_socio`
--
ALTER TABLE `info_socio`
  ADD CONSTRAINT `info_socio_ibfk_1` FOREIGN KEY (`id_socio`) REFERENCES `socio` (`id_socio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
