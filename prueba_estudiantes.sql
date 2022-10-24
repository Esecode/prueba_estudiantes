-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2022 a las 10:57:24
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_estudiantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id_documento` int(11) NOT NULL,
  `tipo_documento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id_documento`, `tipo_documento`) VALUES
(1, 'TI'),
(2, 'CC'),
(3, 'CE'),
(4, 'PAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `nom_estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `nom_estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo'),
(3, 'Retirado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `fecha_sistema` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tipo_documento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `documento` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `PrimerNombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `SegundoNombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `PrimerApellido` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `SegundoApellido` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `fecha_sistema`, `tipo_documento`, `documento`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `id_estado`) VALUES
(28, '2022-10-24 01:10:44', 'TI', '123456', 'Pepito', 'andres', 'perez', 'rodriguez', 1),
(31, '2022-10-24 01:22:37', 'CC', '125415', 'roberto', 'alejandro', 'perez', 'jara', 3),
(33, '2022-10-24 01:14:25', 'CC', '6969859669', 'Rosa', 'linda', 'preciosa', 'roja', 1),
(34, '2022-10-24 01:14:44', 'CE', '2154215642', 'roberto', 'alejandro', 'gomez', 'bola', 1),
(36, '2022-10-24 01:22:34', 'CE', '1234548456', 'david', 'jaime', 'gomez', 'gomez', 2),
(37, '2022-10-24 01:19:04', 'TI', '2528545162', 'inactivo', 'roberto', 'prueba', 'pryeba', 1),
(38, '2022-10-24 01:19:18', 'TI', '2528545162', 'inactivo', 'roberto', 'prueba', 'pryeba', 1),
(39, '2022-10-24 01:19:36', 'PAS', '8585874745', 'prueba', 'estudiante', 'cinco', 'cuatro', 1),
(40, '2022-10-24 01:22:30', 'CE', '58245489', 'ernesto', 'enrique', 'pachon', 'ramirez', 2),
(41, '2022-10-24 02:52:52', 'CC', '12456156', 'asas', 'asasas', 'asasasas', 'asasas', 3),
(43, '2022-10-24 03:35:36', 'TI', '45245242', 'sdadsa', 'dsadsada', 'sadsadsa', 'sadads', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_estudiantes_estado` (`id_estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `FK_estudiantes_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
