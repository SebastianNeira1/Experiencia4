-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2016 a las 11:57:51
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE IF NOT EXISTS `peliculas` (
  `id` int NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `sinopsis` varchar(300) NOT NULL,
  `fecha_estreno` varchar(10) NOT NULL,
  `genero` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`,`nombre`,`sinopsis`, `fecha_estreno`,`genero`) VALUES
(1,'Acuaman','Un nerd fue mordido por una araña mutante y ahora tiene magia-aracnida','05-06-2000','Comedia'),
(2,'Superman','Un joven mutante del espacio llega a la tierra','12-12-2001','Accion'),
(3,'Batman','Cuando mataron a sus padres, quedo solito en la calle traumado por los vampiros','13-13-1987','Drama');





/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
