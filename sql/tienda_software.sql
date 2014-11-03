-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2014 a las 16:58:00
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda_software`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `Id_Cliente` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(25) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id_Cliente`, `email`, `pass`, `nombre`, `telefono`, `direccion`) VALUES
(1, 'uno@gmail.com', 'uno', 'Uno', 0, ''),
(6, 'dos@uclm.es', 'dos', 'Dos', 0, ''),
(7, 'tres@gmail.com', 'tres', 'Tres', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas`
--

CREATE TABLE IF NOT EXISTS `lineas` (
  `Id_Producto` int(11) NOT NULL COMMENT 'Identificador del producto',
  `Id_Pedido` int(11) NOT NULL COMMENT 'Identificador del pedido',
  `Precio` float NOT NULL COMMENT 'Precio del producto',
  `Id_Linea` int(11) NOT NULL COMMENT 'Identificador de la linea',
  `cantidad` int(11) NOT NULL COMMENT 'numero de unidade del producto',
  PRIMARY KEY (`Id_Producto`,`Id_Pedido`),
  KEY `pedido` (`Id_Pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lineas`
--

INSERT INTO `lineas` (`Id_Producto`, `Id_Pedido`, `Precio`, `Id_Linea`, `cantidad`) VALUES
(1, 1, 0, 0, 1),
(2, 2, 0, 0, 2),
(3, 2, 0, 0, 2),
(4, 4, 0, 0, 4),
(7, 1, 0, 0, 2),
(10, 1, 0, 0, 1),
(10, 3, 0, 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `Id_Pedido` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Cliente` int(11) NOT NULL COMMENT 'El id del cliente que ha hecho el pedido',
  `estado` set('Enviado','Preparando','Devuelto','') NOT NULL,
  `Precio_Total` float NOT NULL,
  PRIMARY KEY (`Id_Pedido`),
  KEY `cliente` (`Id_Cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`Id_Pedido`, `Id_Cliente`, `estado`, `Precio_Total`) VALUES
(1, 1, 'Enviado', 237.5),
(2, 1, 'Preparando', 914),
(3, 7, 'Enviado', 300),
(4, 6, 'Devuelto', 444.44);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `Id_Producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `Caratula` varchar(40) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  PRIMARY KEY (`Id_Producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id_Producto`, `nombre`, `Caratula`, `Cantidad`, `precio`) VALUES
(1, 'Modern Warfare 3', '/images/caratulas/mw3.png', 15, 59.99),
(2, 'Team Fortress 2', '/images/caratulas/tf2.jpg', 50, 14.99),
(3, 'Dota 2', '/images/caratulas/dota2.jpg', 5, 0),
(4, 'Assasins Creed', '/images/caratulas/assasinscreed.jpg', 0, 29.99),
(5, 'Don''t Starve', '/images/caratulas/dontstarve.jpg', 3, 9.99),
(6, 'Bioshock', '/images/caratulas/bioshock.jpg', 0, 4.99),
(7, 'Killing Floor', '/images/caratulas/killingfloor.jpg', 0, 7),
(8, 'Far cry 3', '/images/caratulas/farcry3.jpg', 25, 7.49),
(9, 'Borderlands (GOTY)', '/images/caratulas/borderlands.jpg', 0, 9.99),
(10, 'Minecraft', '/images/caratulas/minecraft.jpg', 9, 19.99);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `lineas`
--
ALTER TABLE `lineas`
  ADD CONSTRAINT `lineas_ibfk_1` FOREIGN KEY (`Id_Pedido`) REFERENCES `pedidos` (`Id_Pedido`),
  ADD CONSTRAINT `lineas_ibfk_2` FOREIGN KEY (`Id_Producto`) REFERENCES `productos` (`Id_Producto`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`Id_Cliente`) REFERENCES `clientes` (`Id_Cliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
