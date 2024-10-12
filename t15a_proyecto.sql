-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2024 a las 07:27:04
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `t15a_proyecto`
--
CREATE DATABASE IF NOT EXISTS `t15a_proyecto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `t15a_proyecto`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `carrera` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `semestres` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`carrera`, `nombre`, `semestres`) VALUES
(1, 'Ingenieria en Tecnologias de la Informacion', 9),
(2, 'Licenciatura en Ingenieria en Tecnologias de la Informacion', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `grupo` int(11) NOT NULL,
  `clave_grupo` text NOT NULL,
  `maestro` int(11) NOT NULL,
  `materia` int(11) NOT NULL,
  `horario` int(11) NOT NULL,
  `salon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `horario` int(11) NOT NULL,
  `tipo` text NOT NULL,
  `hora_lunes` text NOT NULL,
  `hora_martes` text NOT NULL,
  `hora_miercoles` text NOT NULL,
  `hora_jueves` text NOT NULL,
  `hora_viernes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `materia` int(11) NOT NULL,
  `nombre_materia` text NOT NULL,
  `clave_materia` text NOT NULL,
  `numero_horas` int(11) NOT NULL,
  `creditos` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `materia_anterior` int(11) NOT NULL,
  `area` text NOT NULL,
  `carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salones`
--

CREATE TABLE `salones` (
  `salon` int(11) NOT NULL,
  `clave_salon` text NOT NULL,
  `nombre_salon` text NOT NULL,
  `ubicacion_fisica` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `matricula` int(11) NOT NULL,
  `nombre_completo` text NOT NULL,
  `carrera` int(11) NOT NULL,
  `generacion` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`matricula`, `nombre_completo`, `carrera`, `generacion`, `semestre`, `username`, `password`, `tipo`) VALUES
(183636, 'David Beltran Reyna', 2, 2020, 3, '183636', 'Porcinos', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`carrera`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`grupo`),
  ADD KEY `materia` (`materia`),
  ADD KEY `maestro` (`maestro`),
  ADD KEY `horario` (`horario`),
  ADD KEY `salon` (`salon`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`horario`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`materia`),
  ADD KEY `carrera` (`carrera`),
  ADD KEY `materia_anterior` (`materia_anterior`);

--
-- Indices de la tabla `salones`
--
ALTER TABLE `salones`
  ADD PRIMARY KEY (`salon`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `carrera` (`carrera`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`materia`) REFERENCES `materias` (`materia`),
  ADD CONSTRAINT `grupos_ibfk_2` FOREIGN KEY (`maestro`) REFERENCES `usuarios` (`matricula`),
  ADD CONSTRAINT `grupos_ibfk_3` FOREIGN KEY (`horario`) REFERENCES `horarios` (`horario`),
  ADD CONSTRAINT `grupos_ibfk_4` FOREIGN KEY (`salon`) REFERENCES `salones` (`salon`);

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`carrera`) REFERENCES `carreras` (`carrera`),
  ADD CONSTRAINT `materias_ibfk_2` FOREIGN KEY (`materia_anterior`) REFERENCES `materias` (`materia`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`carrera`) REFERENCES `carreras` (`carrera`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`carrera`) REFERENCES `carreras` (`carrera`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
