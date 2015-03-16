-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-03-2015 a las 19:21:57
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
('asdsa', 'asdasd', 'asdasd', 'asdasd', 1),
('fssdf', 'sdfsdf', 'sdfsf', 'dssdff', 1),
('123', 'asdasd1', 'asdasd1', 'asdsad1', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `obra`
--

INSERT INTO `obra` (`id_obra`, `nombre`, `genero`, `fecha_incio`, `fecha_final`, `actores_principales`, `actores_secundarios`, `director`) VALUES
(1, '123', 'Miedo', '0000-00-00', '0000-00-00', 'asdasdsa', 'asdasddas', 'sadasd'),
(2, 'sadasd', 'Miedo', '2555-01-01', '2555-01-01', '	asdasd', 'asdasddas', 'asdasd'),
(3, '3123123', 'Miedo', '0000-00-00', '0000-00-00', '	123123', '12312312', '1213'),
(4, 'sad', 'Miedo', '0000-00-00', '2555-01-01', '	assa', 'asdasd', 'asasd'),
(5, 'asd', 'Miedo', '0000-00-00', '0000-00-00', '	asd', 'asdasd', 'asdsad'),
(6, 'asd', 'Miedo', '0000-00-00', '0000-00-00', '	asd', 'asdasd', 'asdsad'),
(7, 'asd', 'Miedo', '0000-00-00', '0000-00-00', '	asd', 'asdasd', 'asdsad'),
(8, 'asd', 'Miedo', '0000-00-00', '0000-00-00', '	asd', 'asdasd', 'asdsad'),
(9, 'asd', 'Miedo', '0000-00-00', '0000-00-00', '	asd', 'asdasd', 'asdsad'),
(10, 'asd', 'Miedo', '0000-00-00', '0000-00-00', '	asd', 'asdasd', 'asdsad'),
(11, 'asd', 'Miedo', '0000-00-00', '0000-00-00', '	asd', 'asdasd', 'asdsad'),
(12, 'asd', 'Miedo', '0000-00-00', '0000-00-00', '	asd', 'asdasd', 'asdsad'),
(13, 'asd', 'Miedo', '0000-00-00', '0000-00-00', '	asd', 'asdasd', 'asdsad'),
(14, 'asd', 'Miedo', '0000-00-00', '0000-00-00', '	asd', 'asdasd', 'asdsad'),
(15, 'asd', 'Miedo', '0000-00-00', '0000-00-00', '	asd', 'asdasd', 'asdsad'),
(16, 'asd', 'Miedo', '0000-00-00', '0000-00-00', '	asd', 'asdasd', 'asdsad'),
(17, 'asd', 'Miedo', '0000-00-00', '0000-00-00', '	asd', 'asdasd', 'asdsad'),
(18, 'asd', 'Miedo', '0000-00-00', '0000-00-00', '	asd', 'asdasd', 'asdsad'),
(19, 'asd', 'Miedo', '0000-00-00', '0000-00-00', '	asd', 'asdasd', 'asdsad'),
(20, 'asd', 'Miedo', '0000-00-00', '0000-00-00', '	asd', 'asdasd', 'asdsad'),
(21, 'asdsa', 'Miedo', '0000-00-00', '0000-00-00', 'asdsad	', 'asasdas', '123'),
(22, '111111111111', 'Miedo', '2011-11-11', '2011-11-11', '	111111111111', '111111111111', '111111111111'),
(23, 'Paplolio', 'Comedia', '0000-00-00', '0000-00-00', '	Jony Diip, Javier Bufo, Piter, Jisus', 'Jessy, Vane, Cristina, Marc Picaso', 'Adrià Mondejar'),
(24, 'Fantanieve', 'Comedia', '0000-00-00', '2555-01-01', '	Mazu, Maroto, Bartu', 'Marc picaso, Raphael Bufo', 'David bowie'),
(25, 'Pipopapolos', 'Aventura', '1991-02-25', '1991-03-25', '	Javito Bufo, Jisus', 'Peter, Bartu', 'Raphael Bufo'),
(26, 'asd', 'Miedo', '0000-00-00', '0000-00-00', '	123123', '123123', '12313'),
(27, '', 'Miedo', '0000-00-00', '0000-00-00', '	', '', ''),
(28, '', 'Miedo', '0000-00-00', '0000-00-00', '	asd', '', ''),
(29, '', 'Miedo', '0000-00-00', '0000-00-00', '	', '', ''),
(30, '', 'Miedo', '0000-00-00', '0000-00-00', '	', '', '');

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
MODIFY `id_obra` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
