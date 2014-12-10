-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2014 a las 18:57:01
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
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `nombre` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`nombre`, `pass`, `id`) VALUES
('santi', 'santi', 1),
('sergio', 'sergio', 2),
('fran', 'fran', 3),
('Uno', 'fdsfsfsdfs', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `Id_Cliente` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(25) NOT NULL,
  `pass` varchar(400) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `foto` varchar(200) NOT NULL,
  PRIMARY KEY (`Id_Cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id_Cliente`, `email`, `pass`, `nombre`, `foto`) VALUES
(1, 'uno@gmail.com', 'uno', 'Uno', ''),
(6, 'dos@uclm.es', 'dos', 'Dos', ''),
(7, 'tres@gmail.com', 'tres', 'Tres', ''),
(11, 'pepe@gmail.com', '$2y$10$T0B.KA9NN02jK9OSx2CYQuJkRJS5X8kCbFcfPkD66VWqaOAIPaLpS', 'pepe', './images/usuarios/pepe.png');

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
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `Id_Titular` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Producto` int(3) NOT NULL,
  `Contenido` varchar(2000) NOT NULL,
  `Titular` varchar(200) NOT NULL,
  `Subtitulo` varchar(200) NOT NULL,
  PRIMARY KEY (`Id_Titular`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`Id_Titular`, `Id_Producto`, `Contenido`, `Titular`, `Subtitulo`) VALUES
(1, 16, 'balblablalbalbalblablalblablalbl', 'Destiny 2 en ya muestra nuevas imagenes', ''),
(2, 20, 'sgfsafasdjustcausepenepnepenpenpe', 'Filtradas nuevas imagens de Just Cause 3', ''),
(3, 17, 'blablalbalpenepndragon age', 'Dragon Age: INquisition gana en ventas en europa', ''),
(4, 18, 'balblablalbalbafalloutlondon', 'Se filtran nuevas noticias de Fallout: London', ''),
(5, 25, '<p>Marcin Mormot, community manager de CD Projekt Red, ha hablado en palabras recogidas por el portal WorldsFactory en las que explica algunos aspectos muy interesantes relacionados con el segundo personaje jugable de The Witcher III: Wild Hunt que fue anunciado recientemente.</p>\n<p>"Sólo quería añadir algo importante sobre el segundo personaje jugable, que será muy importante en la historia del juego por otro lado. No podrás cambiar de manejar uno a otro a tu gusto, habrá algunos momentos en el argumento en los que asumirás el control del otro personaje. Pasarás cierto tiempo jugando con él, un tiempo significativo".</p>\n<p>Recordemos que el título, además, ha sido noticia este fin de semana por el retraso de tres meses en su fecha de lanzamiento. "Queremos decir gracias a todo el mundo que nos ha mostrado su apoyo. Sabemos que es duro cuando esperas un juego y tienes que esperar un poco más, pero os prometemos que no quedaréis decepcionados".</p>', 'Los creadores de The Witcher III explican que sólo podremos manejar al otro personaje en momentos puntuales.', '"Habrá algunos momentos concretos de la campaña en los que manejarás al otro personaje".	');

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
  `Nombre` varchar(30) NOT NULL,
  `Caratula` varchar(40) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio` double NOT NULL,
  PRIMARY KEY (`Id_Producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id_Producto`, `Nombre`, `Caratula`, `Cantidad`, `Precio`) VALUES
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
(19, 'Far Cry 4', '/images/caratulas/farcry4.png', 1, 60),
(20, 'Just Cause', '/images/caratulas/justcause.jpg', 1, 20),
(21, 'Fifa 15', '/images/caratulas/fifa15.jpg', 1, 49.99),
(22, 'NBA', '/images/caratulas/nba.jpg', 1, 30),
(23, 'Rocksmith', '/images/caratulas/rocksmith.jpg', 5, 25),
(24, 'Thief', '/images/caratulas/thief.jpg', 0, 25),
(25, 'Witcher', '/images/caratulas/witcher.jpg', 0, 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_info`
--

CREATE TABLE IF NOT EXISTS `product_info` (
  `Id_Producto` int(3) NOT NULL,
  `Plataforma` varchar(40) NOT NULL,
  `Desarrollador` varchar(40) NOT NULL,
  `Distribuidor` varchar(40) NOT NULL,
  `Genero` varchar(40) NOT NULL,
  `Jugadores` varchar(3) NOT NULL,
  `Idioma` varchar(40) NOT NULL,
  `Lanzamiento` varchar(40) NOT NULL,
  `OS` varchar(100) NOT NULL,
  `Procesador` varchar(100) NOT NULL,
  `Ram` varchar(10) NOT NULL,
  `Grafica` varchar(100) NOT NULL,
  `Directx` varchar(10) NOT NULL,
  `HDD` varchar(10) NOT NULL,
  `Sonido` varchar(40) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL,
  PRIMARY KEY (`Id_Producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product_info`
--

INSERT INTO `product_info` (`Id_Producto`, `Plataforma`, `Desarrollador`, `Distribuidor`, `Genero`, `Jugadores`, `Idioma`, `Lanzamiento`, `OS`, `Procesador`, `Ram`, `Grafica`, `Directx`, `HDD`, `Sonido`, `Descripcion`) VALUES
(1, 'PC,Mac', 'Infinity Ward', 'Activision', 'Accion', '1-3', 'Español, Ingles, Alemán, Frances', '7 de Nov, 2011', 'Windows® XP / Windows® Vista / Windows® 7 ', 'Intel® Core™ 2 Duo E6600 o AMD Phenom™ X3 8750 (o superior) ', '2 GB de RA', 'NVIDIA® GeForce™ 8600GT de 256 MB compatible con Shader 3.0 / ATI® Radeon™ X1950 o superior ', 'DirectX® 9', '16 GB', 'Realtek HD', ' Prepárate para una emocionante vivencia cinematográfica que sólo Call of Duty puede ofrecer. La experiencia multijugador definitiva regresa más grande y mejor que nunca, cargada con nuevos mapas, modos y características. El juego cooperativo ha evolucionado con misiones Spec-Ops y tablas de clasificación completamente nuevas, así como el Modo Supervivencia, un avance en el combate lleno de acción como ningún otro.'),
(2, 'PC,Mac,Linux', 'Valve', 'Steam', 'Free_to_Play', '1-3', 'Español, Ingles, Alemán, Frances', '10 de Oct, 2007', 'Windows® 7 (32/64-bit) ', 'Pentium 4 processor (3.0GHz, or better) ', '1 GB RAM ', 'nVidia GeForce 8600/9600GT, ATI/AMD Radeon HD2600/3600 (Graphic Drivers: nVidia 310, AMD 12.11), Ope', 'Version 9.', '15 GB', 'Realtek HD', 'Nueve clases diferentes ofrecen una amplia variedad de habilidades tácticas y personalidades. Constantemente actualizado con nuevos modos de juego, mapas, equipamiento y, lo que es más importante, ¡sombreros!'),
(3, 'Pc, Mac, Linux', 'Valve, IceFrog', 'Steam', 'Free_to_Play', '10', 'Español, Ingles, Alemán, Frances', '9 de Jul, 2013', ' Windows 7 ', 'Dual core from Intel or AMD at 2.8 GHz ', '4 GB', ' nVidia GeForce 8600/9600GT, ATI/AMD Radeon HD2600/3600 ', 'Version 9.', '8 GB', 'Realtek HD', 'Dota comenzó como una modificación para Warcraft 3 creada por usuarios del mismo título y se ha convertido en uno de los juegos online más jugados del mundo. Siguiendo la tradición de Counter-Strike, Day of Defeat, Team Fortress, Portal y Alien Swarm, Dota 2 es el resultado de la contratación por parte de Valve de la comunidad de desarrolladores que creó el mod, ofreciéndole una oportunidad para, finalmente, desarrollar un producto completo, con sus ideas y la ayuda de un equipo profesional de programadores y artistas de Valve.'),
(4, 'Pc, Mac', 'Ubisoft Montreal', 'Ubisoft', 'Aventura', '1', 'Español, Ingles, Alemán, Frances', '9 de Abr, 2008', 'Windows® XP / Windows Vista® (sólo) ', 'Intel® Pentium® D Dual Core a 2.6 GHz o AMD Athlon™ 64 X2 3800+ (Intel Core® 2 Duo a 2.2 GHz o AMD A', ' 1 GB', 'Familias ATI® RADEON® X1600** /1650**- 1950/ HD 2000/3000, familias nVidia GeForce® 6800**/7/8/9. ', 'Direct X 9', '8 GB', 'Realtek HD', 'Estamos en el año 1191 d.C., y la Tercera Cruzada está asolando la Tierra Santa. Tú, Altair, intentarás poner fin a las hostilidades eliminando ambas partes del conflicto. \r\nEres un Asesino, un guerrero envuelto en un halo de misterio y temido por tu crueldad. Tus acciones pueden sembrar el caos en tu entorno más cercano y tu existencia dará forma a los acontecimientos durante este momento clave de la historia. '),
(5, 'PC/Mac', 'Klei Entertainment ', 'Steam', 'Simuladores', '1', 'Español, Ingles, Aleman, Frances', '23 de Abr, 2013', 'Windows XP / Vista / Windows 7 / Windows 8 ', '1.7 GHz o superior ', '1 GB', 'Radeon HD5450 o superior ', ' 9.0c ', '500 mb ', 'Realtek HD', 'Don’t Starve es un implacable juego de supervivencia en la naturaleza repleto de ciencia y magia. \r\nJuegas como Wilson, un intrépido caballero científico que ha sido atrapado por un demonio y transportado a un misterioso mundo en estado salvaje. Wilson deberá aprender a explotar su entorno y a sus habitantes si quiere albergar alguna esperanza de escapar y encontrar la forma de regresar a casa. '),
(6, 'PC/Mac', '2K Boston ,2K Australia ', 'Steam', 'Aventura', '1', 'Español, Ingles, Aleman, Frances', '21 de Ago, 2007', 'Windows XP (con Service Pack 2) o Windows Vista', 'Intel Core 2 Duo', '2GB', 'nVidia GeForce 7900 GT o superior', '9.0c', '8GB', 'Realtek HD', 'BioShock es un shooter distinto a todos los que has jugado antes, lleno de armas y tácticas nunca vistas. Tendrás un completo arsenal a tu disposición: desde sencillos revólveres a lanzagranadas y lanzadores de productos químicos, pero también estarás obligado a modificar tu ADN para crear un arma mucho más mortífera: tú. Al inyectarte plásmidos conseguirás superpoderes: lanza descargas eléctricas al agua para electrocutar múltiples enemigos, o congélalos en un bloque de hielo para hacerlos pedazos con un golpe de llave inglesa. '),
(19, 'PC, Steam', 'Ubisoft', 'Steam, Valve', 'Aventura', '1-8', 'Español, Ingles, Frances, Aleman', '17 de Nov, 2014', 'Windows® 7 (SP1) / Windows® 8 / Windows® 8.1 / (64-bit only) ', '2.5 GHz Intel® Core™ i5-2400S or 4.0 GHz AMD FX-8350 or better ', '8 GB', 'NVIDIA GeForce GTX 680 or AMD Radeon R9 290X or better (2 GB VRAM) ', '11.0', '30 GB', 'Realtek HD', 'Oculto en la recóndita cordillera del Himalaya se encuentra Kyrat, un país anclado en la tradición y la violencia. Eres Ajay Ghale. Viajarás a Kyrat para cumplir con el último deseo de tu madre, pero una vez allí te verás atrapado en una guerra civil desatada para acabar con el régimen opresivo del dictador Pagan Min. Explora y navega este gigantesco mundo de juego, en el que el peligro y los imprevistos acechan a la vuelta de cualquier esquina. Cada decisión que tomes aquí cuenta, y cada segundo es una historia. Bienvenido a Kyrat.');

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
