-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-06-2013 a las 18:19:15
-- Versión del servidor: 5.1.69
-- Versión de PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `x26498871`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `papel`
--

CREATE TABLE IF NOT EXISTS `papel` (
  `nombre` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `web` varchar(30) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `edad` int(2) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `cpostal` int(5) NOT NULL,
  `telefono` int(9) NOT NULL,
  `fecha` date NOT NULL,
  `duracion` int(2) NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `papel`
--

INSERT INTO `papel` (`nombre`, `email`, `web`, `comentario`, `edad`, `direccion`, `cpostal`, `telefono`, `fecha`, `duracion`) VALUES
('pepa', 'pepa@yahoo.es', 'http://www.pepa.es', 'jajajajaj', 55, 'calle los mierdosos', 10000, 123456789, '2015-09-12', 12),
('Tomas Gomez', 'gomztm@terra.es', 'http://patolucas.com', 'ME lo entregais a las 12h', 34, 'calle viergen de las nieves', 45678, 654321121, '2013-09-25', 45),
('Kokero', 'koke@hotmail.com', 'http://www.google.es', 'no tengo ganas', 23, 'calle gonzalo gallas', 18003, 678233211, '2013-10-28', 0),
('Maria Melero Bello', 'mariamelkkk@yahoo.es', 'http://hole.es', 'no quiero na', 18, 'calle virgen de las nieves', 12345, 123456789, '2010-02-12', 5),
('Mari carmen robles', 'mcarrob@yahoo.es', 'http://mari.com', 'no me gusta el periodico', 45, 'calle benito numero 4', 10000, 987654321, '0000-00-00', 5),
('rueoiurwoiruwoiruw', 'mariamelkkk@yahoo.es', 'http://holo.com', 'hola', 56, 'calle los posteles', 23470, 567897534, '2013-10-21', 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
