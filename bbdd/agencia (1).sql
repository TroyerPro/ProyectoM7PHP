-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2015 a las 17:44:26
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `agencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor`
--

CREATE TABLE IF NOT EXISTS `actor` (
  `DNI` char(8) NOT NULL,
  `nombre` char(20) NOT NULL,
  `apellidos` char(20) NOT NULL,
  `img` char(20) NOT NULL,
  `principal` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actor`
--

INSERT INTO `actor` (`DNI`, `nombre`, `apellidos`, `img`, `principal`) VALUES
('46598735', 'Paco', 'Alcacer', '(Pendiente)', 1),
('1549678O', 'Rodrigo', 'De León', '(Pendiente)', 0),
('4986315H', 'Anastasio', 'Mayo', '(Pendiente)', 1),
('4258769L', 'Sofia', 'García', '(Pendiente)', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE IF NOT EXISTS `director` (
  `DNI` char(8) NOT NULL,
  `nombre` char(20) NOT NULL,
  `apellidos` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`DNI`, `nombre`, `apellidos`) VALUES
('555', 'Adrià', 'Mondéjar'),
('33333', 'Sergio', 'Gonzalez'),
('22222', 'Javier', 'Bufo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra`
--

CREATE TABLE IF NOT EXISTS `obra` (
`id_obra` int(200) NOT NULL,
  `nombre` char(40) NOT NULL,
  `genero` char(20) NOT NULL,
  `fecha_incio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `actores_principales` char(100) NOT NULL,
  `actores_secundarios` char(100) NOT NULL,
  `director` char(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Volcado de datos para la tabla `obra`
--

INSERT INTO `obra` (`id_obra`, `nombre`, `genero`, `fecha_incio`, `fecha_final`, `actores_principales`, `actores_secundarios`, `director`) VALUES
(31, 'Al final del Camino', 'Drama', '2015-03-24', '2015-03-31', 'Paco, Anastasio', 'Rodrigo, Sofia', 'Adria'),
(32, 'Me tropiezo en cada camino', 'Comedia', '2015-03-19', '2015-03-26', 'Paco', 'Sofia', 'Sergio'),
(33, 'Asesino del 7 y medio', 'Terror', '2015-03-30', '2015-04-06', 'Anastasio', 'Rodrigo', 'Adria'),
(34, 'No debias haber mirado', 'Terror', '2015-03-22', '2015-03-25', 'Paco', 'Rodrigo, Sofia', 'Javier'),
(35, 'Inocencia Interrumpida', 'Drama', '2015-03-28', '2015-04-04', 'Anastasio', 'Sofia, Rodrigo', 'Javier'),
(36, 'En el punto de mira', 'Acción', '2015-03-03', '2015-03-17', 'Paco', 'Sofia', 'Sergio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', '4297f44b13955235245b2497399d7a93');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `obra`
--
ALTER TABLE `obra`
 ADD PRIMARY KEY (`id_obra`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `obra`
--
ALTER TABLE `obra`
MODIFY `id_obra` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
