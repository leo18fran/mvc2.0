-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2020 a las 03:40:48
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `udh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(6) NOT NULL,
  `codigo` varchar(12) NOT NULL,
  `nombres` varchar(90) NOT NULL,
  `apellidos` varchar(90) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `id_pa` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `codigo`, `nombres`, `apellidos`, `telefono`, `correo`, `id_pa`) VALUES
(3, '1231233423', 'Pedro', 'Sanchez', '90000009', 'pedros@gmail.com', 2),
(8, '1231233423', 'Jose', 'Sanchez', '90000009', 'pedros@gmail.com', 2),
(10, '1231233423', 'Jose', 'Sanchez', '90000009', 'pedros@gmail.com', 2),
(11, '1231233423', 'Jose', 'Sanchez', '90000009', 'pedros@gmail.com', 2),
(12, '1231233423', 'Jose', 'Sanchez', '90000009', 'pedros@gmail.com', 2),
(13, '1231233423', 'Jose', 'Sanchez', '90000009', 'pedros@gmail.com', 2),
(14, '1231233423', 'Jose', 'Sanchez', '90000009', 'pedros@gmail.com', 2),
(15, '1231233423', 'Jose', 'Sanchez', '90000009', 'pedros@gmail.com', 2),
(16, '1231233423', 'Jose', 'Sanchez', '90000009', 'pedros@gmail.com', 2),
(17, '1231233423', 'Jose', 'Sanchez', '90000009', 'pedros@gmail.com', 2),
(18, '1231233423', 'Jose', 'Sanchez', '90000009', 'pedros@gmail.com', 2),
(19, '1231233423', 'Jose', 'Sanchez', '90000009', 'pedros@gmail.com', 2),
(20, '1231233423', 'Jose', 'Sanchez', '90000009', 'pedros@gmail.com', 2),
(21, '1231233423', 'Jose', 'Sanchez', '90000009', 'pedros@gmail.com', 2),
(22, '1231233423', 'Jose', 'Sanchez', '90000009', 'pedros@gmail.com', 2),
(23, '1231233423', 'Jose', 'Sanchez', '90000009', 'pedros@gmail.com', 2),
(24, '1231233423', 'Jose', 'Sanchez', '90000009', 'pedros@gmail.com', 2),
(25, '1231233423', 'Andrea', 'Sanchez', '90000088', 'pedros@gmail.com', 1),
(29, '3242334', 'Omar ', 'Sulca', '32432423', 'das@gmail.com', 1),
(30, ':c', ':n', ':a', ':t', ':e', 0),
(31, ':c', ':n', ':a', ':t', ':e', 0),
(32, '3242334', 'Andrea', 'Cibelli', '32432432', 'das@gmail.com', 1),
(33, '3242334', 'Miguel', 'Perez', '32432423', '3sdas@gmail.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id` int(2) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`id`, `nombre`) VALUES
(1, 'Ingenieria'),
(3, 'Educacion'),
(4, 'Ciencias de la Salud'),
(5, 'Administración'),
(6, 'Derecho y Ciencias Políticas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pa`
--

CREATE TABLE `pa` (
  `id` int(2) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `id_facultad` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pa`
--

INSERT INTO `pa` (`id`, `nombre`, `id_facultad`) VALUES
(1, 'Ingeniería de Sistemas e Informática', 1),
(2, 'Ingeniería Civil', 1),
(3, 'Ingeniera Ambiental', 1),
(4, 'Arquitectura', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(6) NOT NULL,
  `codigo` int(11) NOT NULL,
  `pass` varchar(72) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `id_pa` int(6) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `codigo`, `pass`, `tipo`, `id_pa`, `nombres`, `apellidos`) VALUES
(6, 44448888, '$2y$10$v8Hqb3CzCnC2YPNti5GYt.CjXi4ptgeYJ88ZgcQitCSLoOz1gAz4u', 'administrador', 1, 'Fran Leo', 'Tarazona Martel'),
(9, 66667777, '$2y$10$fEjLU1jXjXtITH0Yto2XUuYS33NKGWRofqEPy6Dwc7QubmeWYsw6e', 'profesor', 1, 'Ivan Martin', 'Villanueva Matos'),
(10, 66669999, '$2y$10$j.B8cKO9e.Iy3X/nvRaRHOn0Y3GQGissuSJ99rXOUkW7hXY4yQjjG', 'estudiante', 1, 'ronaldihno lenner', 'valencia copara'),
(11, 33337777, '$2y$10$DvDNM30sKtySIhmvAR9DXu/G/BMHBteDC9jrsbMv6cXIwiFf.RiFi', 'estudiante', 1, 'Britney Andrea', 'Perez Pozo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pa`
--
ALTER TABLE `pa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pa`
--
ALTER TABLE `pa`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
