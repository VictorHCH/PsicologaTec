-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 28-11-2022 a las 08:14:58
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `piscotec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anotaciones`
--

CREATE TABLE `anotaciones` (
  `noControl` int(10) NOT NULL,
  `anotacion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `anotaciones`
--

INSERT INTO `anotaciones` (`noControl`, `anotacion`) VALUES
(19410255, 'Miedo a vivir con alguien');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `idCita` int(100) NOT NULL,
  `noControl` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `tipoConsulta` varchar(100) NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`idCita`, `noControl`, `fecha`, `tipoConsulta`, `hora`) VALUES
(1, 19410255, '2022-11-09', 'Medica', '06:07:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `id_Consulta` int(11) NOT NULL,
  `noControl` int(10) NOT NULL,
  `idCita` int(11) NOT NULL,
  `fecha_cita` date NOT NULL,
  `hora_cita` time NOT NULL,
  `estado` varchar(20) NOT NULL,
  `tipo_consulta` varchar(100) NOT NULL,
  `diagnostico_titulo` varchar(100) NOT NULL,
  `diagnostico_info` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id_Consulta`, `noControl`, `idCita`, `fecha_cita`, `hora_cita`, `estado`, `tipo_consulta`, `diagnostico_titulo`, `diagnostico_info`) VALUES
(1, 19410255, 1, '2022-11-09', '06:07:38', 'Grave', 'Consulta de terapia', 'Bipolaridad', 'Tienes 2 personas viviendo en el');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `noControl` int(10) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `peso` float NOT NULL,
  `estatura_cm` int(100) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `sangre` int(10) NOT NULL,
  `sexo` int(10) NOT NULL,
  `edad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`noControl`, `nombres`, `apellidos`, `curp`, `peso`, `estatura_cm`, `fecha_ingreso`, `sangre`, `sexo`, `edad`) VALUES
(19410255, 'Victor Hugo', 'Covarrubias Hernandez', 'aaaaaaaaaaaaaaa', 60, 180, '2022-11-01', 8, 1, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sangre`
--

CREATE TABLE `sangre` (
  `id_sangre` int(11) NOT NULL,
  `tipo` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sangre`
--

INSERT INTO `sangre` (`id_sangre`, `tipo`) VALUES
(1, 'A+'),
(2, 'A-'),
(3, 'B+'),
(4, 'B-'),
(5, 'AB+'),
(6, 'AB-'),
(7, 'O+'),
(8, 'O-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id_sexo` int(11) NOT NULL,
  `tipo_sexo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id_sexo`, `tipo_sexo`) VALUES
(1, 'H'),
(2, 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anotaciones`
--
ALTER TABLE `anotaciones`
  ADD KEY `anotacion_paciente` (`noControl`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`idCita`),
  ADD KEY `cita_paciente` (`noControl`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_Consulta`),
  ADD KEY `consulta_cita` (`idCita`),
  ADD KEY `paciente_cita` (`noControl`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`noControl`),
  ADD KEY `sangre_paciente` (`sangre`),
  ADD KEY `sexo_paciente` (`sexo`);

--
-- Indices de la tabla `sangre`
--
ALTER TABLE `sangre`
  ADD PRIMARY KEY (`id_sangre`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `idCita` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_Consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sangre`
--
ALTER TABLE `sangre`
  MODIFY `id_sangre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id_sexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anotaciones`
--
ALTER TABLE `anotaciones`
  ADD CONSTRAINT `anotacion_paciente` FOREIGN KEY (`noControl`) REFERENCES `pacientes` (`noControl`);

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `cita_paciente` FOREIGN KEY (`noControl`) REFERENCES `pacientes` (`noControl`);

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_cita` FOREIGN KEY (`idCita`) REFERENCES `citas` (`idCita`),
  ADD CONSTRAINT `paciente_cita` FOREIGN KEY (`noControl`) REFERENCES `pacientes` (`noControl`);

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `sangre_paciente` FOREIGN KEY (`sangre`) REFERENCES `sangre` (`id_sangre`),
  ADD CONSTRAINT `sexo_paciente` FOREIGN KEY (`sexo`) REFERENCES `sexo` (`id_sexo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
