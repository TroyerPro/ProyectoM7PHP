-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2015 a las 18:21:51
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
('123', 'Sergio', 'Gonzalez', '', 0),
('123', 'Sergio', 'Gonzalez', '', 0),
('123', 'Sergio', 'Gonzalez', '', 0),
('321', 'Adri', 'Mondejar', '', 0),
('1', 'asdasd', 'asdsaasd', '123', 0),
('1111', '13132', '123132', '123', 1),
('123', 'ddddd', 'asdad', '', 0),
('NIF11', 'Sergio', 'Gonzalez', '', 0),
('NIF22', 'Adri', 'Mondejar', '', 0),
('NIF33', 'Raphael', 'Bufo', '', 0),
('33', 'dddd', 'ssss', '', 0),
('33', 'dddd', 'ssss', '', 0),
('asd', 'sad', 'asd', '', 0),
('123', 'sda', 'asddsa', '', 0),
('asd', 'sad', 'asd', '123', 1),
('123', 'sda', 'asddsa', '333333', 1),
('asdsa', 'asdasd', 'asdasd', 'asdasd', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `obra`
--

INSERT INTO `obra` (`id_obra`, `nombre`, `genero`, `fecha_incio`, `fecha_final`, `actores_principales`, `actores_secundarios`, `director`) VALUES
(1, '123', 'Miedo', '0000-00-00', '0000-00-00', 'asdasdsa', 'asdasddas', 'sadasd'),
(2, 'sadasd', 'Miedo', '2555-01-01', '2555-01-01', '	asdasd', 'asdasddas', 'asdasd'),
(3, '3123123', 'Miedo', '0000-00-00', '0000-00-00', '	123123', '12312312', '1213'),
(4, 'sad', 'Miedo', '0000-00-00', '2555-01-01', '	assa', 'asdasd', 'asasd');

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
MODIFY `id_obra` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
