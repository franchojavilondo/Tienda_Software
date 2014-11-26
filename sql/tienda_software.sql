-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-11-2014 a las 18:58:25
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
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE IF NOT EXISTS `destacados` (
  `id_producto` int(3) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `destacados`
--

INSERT INTO `destacados` (`id_producto`, `descripcion`) VALUES
(13, 'La Revolución Francesa estalla en la nueva generación'),
(14, 'Batman vuelve a extender sus oscuras alas sobre Gotham'),
(15, 'Frenético y vertical. Call of Duty vuelve a sus origenes'),
(17, 'Fuego y rol inquisidor. El largo camino para salvar a la humanidad.'),
(19, 'Far Cry vuelve, y lo hace como mejor sabe: con más acción y mas locura.'),
(22, 'Basket a lo grande. Volvemos a visitar las canchas.'),
(25, 'Geralt de Rivia vuelve a la actualidad.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_extra`
--

CREATE TABLE IF NOT EXISTS `imagenes_extra` (
  `Id_Producto` int(3) NOT NULL,
  `Imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes_extra`
--

INSERT INTO `imagenes_extra` (`Id_Producto`, `Imagen`) VALUES
(13, '/images/extras/acunity.jpg'),
(14, '/images/extras/batman.jpg'),
(15, '/images/extras/codaw.jpg'),
(17, '/images/extras/dai.jpg'),
(16, '/images/extras/destiny.jpg'),
(16, '/images/extras/destinyT.jpg'),
(18, '/images/extras/fallout.jpg'),
(19, '/images/extras/farcry4.jpg'),
(20, '/images/extras/justcause.jpg'),
(21, '/images/extras/fifa15.jpg'),
(22, '/images/extras/nba.jpg'),
(11, '/images/extras/ryse.jpg'),
(12, '/images/extras/shadow_of_mordor.jpg'),
(24, '/images/extras/thief.jpg'),
(25, '/images/extras/witcher.jpg'),
(23, '/images/extras/rocksmith.jpg');

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
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE IF NOT EXISTS `ofertas` (
  `Id_Producto` int(3) NOT NULL,
  `Porcentaje` int(3) NOT NULL,
  PRIMARY KEY (`Id_Producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`Id_Producto`, `Porcentaje`) VALUES
(11, 50),
(15, 75),
(18, 25),
(23, 33);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

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
(10, 'Minecraft', '/images/caratulas/minecraft.jpg', 9, 19.99),
(11, 'Ryse', '/images/caratulas/ryse.jpg', 15, 30),
(12, 'shadow of mordor', '/images/caratulas/shadowofmordor.png', 20, 30),
(13, 'Assasins Creed Unity', '/images/caratulas/acunity.jpg', 1, 50),
(14, 'batman', '/images/caratulas/batman.jpg', 1, 40),
(15, 'Call of Duty Advanced Warfare', '/images/caratulas/codaw.jpg', 1, 35),
(16, 'Destiny', '/images/caratulas/destiny.jpg', 1, 40),
(17, 'Dragon Age Inquisition', '/images/caratulas/dai.jpg', 1, 30),
(18, 'Fallout', '/images/caratulas/fallout.jpg', 1, 10),
(19, 'far cry 4', '/images/caratulas/farcry4.png', 1, 60),
(20, 'Just Cause', '/images/caratulas/justcause.jpg', 1, 20),
(21, 'Fifa 15', '/images/caratulas/fifa15.jpg', 1, 49.99),
(22, 'NBA', '/images/caratulas/nba.jpg', 1, 30),
(23, 'Rocksmith', '/images/caratulas/rocksmith.jpg', 5, 25),
(24, 'Thief', '/images/caratulas/thief.jpg', 0, 25),
(25, 'Witcher', '/images/caratulas/witcher.jpg', 0, 60);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD CONSTRAINT `destacados_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`Id_Producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lineas`
--
ALTER TABLE `lineas`
  ADD CONSTRAINT `lineas_ibfk_1` FOREIGN KEY (`Id_Pedido`) REFERENCES `pedidos` (`Id_Pedido`),
  ADD CONSTRAINT `lineas_ibfk_2` FOREIGN KEY (`Id_Producto`) REFERENCES `productos` (`Id_Producto`);

--
-- Filtros para la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD CONSTRAINT `ofertas_ibfk_1` FOREIGN KEY (`Id_Producto`) REFERENCES `productos` (`Id_Producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`Id_Cliente`) REFERENCES `clientes` (`Id_Cliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
