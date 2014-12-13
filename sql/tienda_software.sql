-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2014 a las 02:08:21
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
-- Estructura de tabla para la tabla `deseos`
--

CREATE TABLE IF NOT EXISTS `deseos` (
  `Id_Cliente` int(11) NOT NULL,
  `Id_Producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `deseos`
--

INSERT INTO `deseos` (`Id_Cliente`, `Id_Producto`) VALUES
(11, 14),
(11, 13),
(11, 25),
(11, 9);

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
  `Id_Linea` int(11) NOT NULL COMMENT 'Identificador de la linea',
  `Precio` float NOT NULL,
  PRIMARY KEY (`Id_Producto`,`Id_Pedido`),
  KEY `pedido` (`Id_Pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lineas`
--

INSERT INTO `lineas` (`Id_Producto`, `Id_Pedido`, `Id_Linea`, `Precio`) VALUES
(1, 50, 3, 59.99),
(1, 51, 3, 59.99),
(1, 52, 3, 59.99),
(13, 50, 1, 50),
(13, 51, 1, 50),
(13, 52, 1, 50),
(14, 50, 2, 40),
(14, 51, 2, 40),
(14, 52, 2, 40),
(18, 53, 3, 7.5),
(23, 50, 4, 16.75),
(23, 51, 4, 16.75),
(23, 52, 4, 16.75),
(23, 53, 2, 16.75),
(24, 53, 1, 25);

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
(1, 15, '<p>Si sientes curiosidad por lo que ofrece Call of Duty: Advanced Warfare y eres usuario de Steam estás de enhorabuena, y es que la plataforma digital de Valve ofrece algunos suculentos incentivos para sus usuarios durante este fin de semana.</p>\n\n<p>Concretamente, y hasta el lunes, podremos hacernos con el videojuego con una rebaja del 25% con respecto a su precio original, quedando fijado a 44,99 euros. Por si esto fuera poco podemos probar libremente y de forma gratuita su apartado multijugador también durante este fin de semana.</p>', 'El multijugador de Call of Duty: Advanced Warfare disponible gratis este fin de semana en Steam', 'El juego, además, rebaja su precio hasta el lunes a los 44,95 euros.'),
(2, 13, '<p>Ubisoft ha actualizado su apartado de preguntas y respuestas en su web sobre la promoción de recibir un videojuego gratis para los jugadores que se hicieron con el Pase de Temporada del último capítulo de Assassin''s Creed. Unity, sigue recibiendo mejoras en forma de parche, y mientras sigue poniéndose al día, los jugadores que compraron el contenido extra podrán reservar novedad durante la próxima semana.</p>\n\n<p>Para ello se lanzará un portal web en el que los afectados podrán escoger entre The Crew, Far Cry 4, Watch Dogs, Assassin''s Creed: Black Flag, Rayman Legends o Just Dance 2015. No se ha especificado una fecha de entrega de esa compensación en forma de software, pero sí han asegurado que nunca llegaría más tarde que el 15 de marzo de 2015. Se espera que la empresa acabe concretando más datos durante los próximos días.</p>', 'Ubisoft lanzará una web para reservar el juego de compensación por el Pase de Temporada de Assassin’s Creed: Unity', 'Nuevos detalles confirman que el juego de regalo llegará antes de marzo de 2015.'),
(3, 19, '<p>Far Cry 4 ha sumado un nuevo parche para su versión en PC y actualiza el juego a 1.5.0, a la espera de poder solucionar algunos problemas técnicos y gráficos que están sufriendo algunos usuarios de compatibles. También se ha solucionado algunos problemas detectados en el control del mismo y se ha sumado la posibilidad de mostrar el juego a 21:9. La obra llegó a las tiendas a finales de octubre.</p>\n\n<p>Desde que se produjo lanzamiento en todas las plataformas (PlayStation 4, Xbox One, PlayStation 3, Xbox 360 y la presente de PC) ha ido sumando nuevos parches para mejorar sus estabilidad y corregir algunos pequeños errores que se ha ido detectando en las últimas semanas.</p>', 'Far Cry 4 se actualiza con un nuevo parche en PC', 'Arregla problemas de control, gráficos y suma la visualización a 21:9.'),
(4, 21, '<p>El fútbol manda en Reino Unido. Que se lo digan a EA Sports, que una semana más ha logrado colocar en lo más alto su notable FIFA 15, imponiéndose a títulos como Call of Duty: Advanced Warfare, GTA V o Far Cry 4.</p>\n\n<p>The Crew, el nuevo juego de velocidad desarrollado por Ubisoft, también ha tenido un buen arranque en el mercado británico ocupando la sexta posición de la tabla. En este sentido, según informa Chart Track, el reparto por plataformas quedaría en un 59 por ciento de copias en formato físico para PlayStation 4, un 33 por ciento en Xbox One, el 8 por ciento en el caso de Xbox 360, y tan solo un uno por ciento en PC –donde el mercado digital tiene más presencia, huelga decir-.</p>', 'FIFA 15 recupera el liderato en las ventas semanales del Reino Unido', 'The Crew se estrena en sexta posición y los nuevos Pokémon se caen de la tabla de los diez más vendidos.'),
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
  `Precio_Total` float NOT NULL,
  PRIMARY KEY (`Id_Pedido`),
  KEY `cliente` (`Id_Cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`Id_Pedido`, `Id_Cliente`, `Precio_Total`) VALUES
(50, 11, 166.74),
(51, 11, 166.74),
(52, 11, 166.74),
(53, 11, 49.25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `Id_Producto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(60) NOT NULL,
  `Caratula` varchar(40) NOT NULL,
  `Precio` double NOT NULL,
  PRIMARY KEY (`Id_Producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id_Producto`, `Nombre`, `Caratula`, `Precio`) VALUES
(1, 'Call of Duty Modern Warfare 3', '/images/caratulas/mw3.png', 59.99),
(2, 'Team Fortress 2', '/images/caratulas/tf2.jpg', 14.99),
(3, 'Dota 2', '/images/caratulas/dota2.jpg', 0),
(4, 'Assasin''s Creed', '/images/caratulas/assasinscreed.jpg', 29.99),
(5, 'Don''t Starve', '/images/caratulas/dontstarve.jpg', 9.99),
(6, 'Bioshock', '/images/caratulas/bioshock.jpg', 4.99),
(7, 'Killing Floor', '/images/caratulas/killingfloor.jpg', 7),
(8, 'Far Cry 3', '/images/caratulas/farcry3.jpg', 7.49),
(9, 'Borderlands (GOTY)', '/images/caratulas/borderlands.jpg', 9.99),
(10, 'Minecraft', '/images/caratulas/minecraft.jpg', 19.99),
(11, 'Ryse: Son of Rome', '/images/caratulas/ryse.jpg', 30),
(12, 'La Tierra-Media: Sombras de Mordor', '/images/caratulas/shadowofmordor.png', 30),
(13, 'Assasin''s Creed Unity', '/images/caratulas/acunity.jpg', 50),
(14, 'Batman: Arkham Origins', '/images/caratulas/batman.jpg', 40),
(15, 'Call of Duty Advanced Warfare', '/images/caratulas/codaw.jpg', 35),
(16, 'Destiny', '/images/caratulas/destiny.jpg', 40),
(17, 'Dragon Age Inquisition', '/images/caratulas/dai.jpg', 30),
(18, 'Fallout 3', '/images/caratulas/fallout.jpg', 10),
(19, 'Far Cry 4', '/images/caratulas/farcry4.png', 60),
(20, 'Just Cause 2', '/images/caratulas/justcause.jpg', 20),
(21, 'FIFA 15', '/images/caratulas/fifa15.jpg', 49.99),
(22, 'NBA 2K15', '/images/caratulas/nba.jpg', 30),
(23, 'Rocksmith', '/images/caratulas/rocksmith.jpg', 25),
(24, 'Thief', '/images/caratulas/thief.jpg', 25),
(25, 'The Witcher III: Wild Hunt', '/images/caratulas/witcher.jpg', 60);

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
  `Jugadores` varchar(10) NOT NULL,
  `Idioma` varchar(100) NOT NULL,
  `Lanzamiento` varchar(40) NOT NULL,
  `OS` varchar(100) NOT NULL,
  `Procesador` varchar(100) NOT NULL,
  `Ram` varchar(10) NOT NULL,
  `Grafica` varchar(100) NOT NULL,
  `Directx` varchar(15) NOT NULL,
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
(7, 'PC, MAC, SteamOS', 'Tripwire Interactive', 'Steam', 'Acción', '1-6', 'Textos: Español, Voces: Inglés', '14 de agosto de 2009', 'Windows XP/Vista, OS X versión Leopard 10.5.8, Ubuntu 12.04', '1.2 GHZ o Equivalente', '1 GB', 'Compatible con DX9 y con 64 MB ', 'DX9', '2 GB ', 'Compatible con DX 8.1', 'Killing Floor es un shooter Cooperativo del género Survival Horror que tiene lugar en los campos y ciudades devastadas de Inglaterra, después de que una serie de experimentos militares de clonación fracasaran con horribles consecuencias. Tú y tus amigos sois miembros de los militares desplegados en esos lugares con una sencilla misión: ¡Sobrevivir el tiempo suficiente para despejar el área de experimentos fallidos! '),
(8, 'PC', 'Ubisoft', 'Ubisoft', 'Acción', '1', 'Textos: Español, Voces: Español', '29 de noviembre de 2012', 'Windows XP, Windows Vista y Windows 7 ', 'Intel Core®2 Duo E6700 @ 2.6 GHz o AMD Athlon64 X2 6000+ @ 3.0Ghz', '4 GB', '512MB Video RAM (1GB Video RAM), DirectX9c (DirectX11)', '9.0c', '15 GB ', 'DirectX Compatible', 'Far Cry 3 es un mundo abierto de acción en primera persona ambientado en una isla diferente a cualquier otra. Un lugar donde jefes militares fuertemente armados trafican con esclavos. Tú y tus amigos sois capturados, y mientras te embarcas en una búsqueda desesperada para rescatarlos, te das cuenta de que la única manera de escapar de esta oscuridad será algo de locos.'),
(9, 'PC', 'Gearbox', '2K Games', 'Acción', '1-4', 'Textos: Español, Voces: Español', '30 de octubre de 2009', 'Windows XP/Vista ', ' 2.4 Ghz o procesador equivalente ', '1GB', 'Tarjeta de 256mb o más (GeForce serie 9 o superior/Serie Radeon R8xx)', '9.0c', '8 GB ', 'Tarjeta compatible con Windows ', 'Con su acción adictiva, combate frenético en primera persona, un arsenal masivo, elementos RPG, y co-op para cuatro jugadores*, Borderlands es una experiencia innovadora que desafía todas las convenciones de los shooters actuales. Borderlands te pone en el papel de un mercenario en el desolado planeta sin ley de Pandora, empeñado en localizar una legendaria reserva de poderosa tecnología alienígena conocida como The Vault.\r\n¡Prepárate para un auténtico disparate! ¡Juega en el papel de uno de los cuatro mercenarios de gatillo fácil y arrasa con cualquier cosa que se interponga en tu camino! '),
(10, 'PC', 'Mojang', 'Mojang', 'Estrategia', '1', 'Textos: Español', '18 de noviembre de 2011', 'Windows Vista/7', 'Intel P4/NetBurst o su equivalente en AMD (AMD K7)', '2GB', 'Intel GMA 950 o su equivalente en AMD', '9.0c', '90MB', 'Compatible con DirectX 9.0', 'En Minecraft se nos presenta un mundo creado a base de cubos en 3D en el que el usuario dispone de una amplia libertad para crear sus propias construcciones. El videojuego es considerado todo un fenómeno social por la cantidad de jugadores, posibilidades y versiones que presenta.'),
(11, 'PC', 'Crytek', 'Koch Media', 'Acción', '1-2', 'Textos: Español, Voces: Español', '10 de octubre de 2014', 'Windows Vista SP1, Windows 7 or Windows 8  (64bit)', 'Dual core with HyperThreading technology or quad core CPU', '4 GB', 'DirectX 11 graphics card with 1 GB video RAM ', 'Version 11', '26 GB', 'DirectX compatible', 'Lucha como un soldado. Lidera como un general. Conviértete en leyenda. \r\n“Ryse: Son of Rome” narra la historia de Marius Titus, un joven soldado romano que ve morir a su familia a manos de unos bandidos bárbaros y viaja con el ejército romano hasta Britania en busca de venganza. Marius deberá ascender rápidamente en el escalafón militar hasta llegar a ser un líder capaz de defender al Imperio y poder llevar a cabo su venganza. Pronto descubrirá que solo podrá cumplir su destino regresando a su hogar...\r\nViaja al corazón del Imperio romano y siente la brutalidad de la batalla como nunca antes con la versión para PC de “Ryse: Son of Rome”, compatible con la gloriosa resolución 4K. Ryse, que continúa la tradición de juegos revolucionarios de Crytek, lleva el hardware de PC al límite mientras sumerge al jugador en una sangrienta tragedia en la antigua Roma.'),
(12, 'PC', 'Monolith', 'Warner Bros', 'Acción', '1', 'Textos: Español, Voces: Español', '30 de septiembre de 2014', '64-bit: Vista SP2, Win 7 SP1, Win 8.1', 'Intel Core i5-750, 2.67 GHz | AMD Phenom II X4 965, 3.4 GHz ', '3 GB', 'NVIDIA GeForce GTX 460 | AMD Radeon HD 5850', 'Version 11', '25 GB', 'DirectX compatible', 'Lucha por todo Mordor y descubre la verdad del espíritu que te fuerza, descubre los orígenes de los Anillos de Poder, construye tu leyenda y, finalmente, enfréntate a la maldad de Sauron en esta nueva crónica de la Tierra-Media, en la piel de un misterioso aventurero conocido como Talion.'),
(13, 'PC', 'Ubisoft Montreal', 'Ubisoft', 'Acción', '1-4', 'Textos: Español, Voces: Español', '13 de noviembre de 2014', 'Windows 7 SP1, Windows 8/8.1 (64-bit)', 'Intel Core i5-2500K @ 3.3 GHz or AMD FX-8350 @ 4.0 GHz', '6 GB', 'NVIDIA GeForce GTX 680 or AMD Radeon HD 7970 (2 GB VRAM)', 'DirectX 9.0c', '50 GB', 'DirectX 9.0c compatible', 'Assassin’s Creed® Unity es un juego de acción/aventura con el que te sumerges en un París lleno de vida durante su época más oscura: la Revolución Francesa. Tendrás control total sobre Arno, ya que podrás personalizar su equipo tanto visual como técnicamente. Además de contar contar con una gran campaña individual, Assassin’s Creed Unity te da la oportunidad de jugar junto con 3 amigos en misiones concretas de una campaña cooperativa online. Durante el juego, formarás parte de momentos clave de la historia francesa que dieron lugar al enorme París que hoy todos conocemos.'),
(14, 'PC', 'Warner Bros Games Montreal', 'Warner Bros', 'Acción', '1-8', 'Textos: Español, Voces: Español', '25 de octubre de 2013', '32-bit: Vista, Win 7, Win 8', 'Intel Core 2 Duo, 2.4 GHz / AMD Athlon X2, 2.8 GHz', '2 GB', 'NVIDIA GeForce 8800 GTS / AMD Radeon HD 3850 or better with 512 MB of VRAM', 'DirectX 9.0c', '20 GB', 'DirectX 9.0 compatible', 'Tercera entrega de la serie Arkham de las aventuras de Batman que, en esta ocasión, explora los orígenes del protagonista. Un título de acción y aventuras en el que el sigilo tiene una importancia primordial y en el que volvemos a encarnar al superhéroe alado en su lucha contra una nueva oleada de temibles supervillanos. Gotham debuta como telón de fondo para su exploración, y villanos como Black Mask o Deathstroke se encargarán de ponernos las cosas muy difíciles.'),
(15, 'PC', 'Sledgehammer Games', 'Activision', 'Acción', '1-16', 'Textos: Español, Voces: Español', '4 de noviembre de 2014', 'Windows 7 64-Bit / Windows 8 64-Bit / Windows 8.1 64-Bit ', 'Intel® Core™ i3-530 @ 2.93 GHz / AMD Phenom™ II X4 810 @ 2.60 GHz', '6 GB', 'NVIDIA® GeForce® GTS 450 @ 1GB / ATI® Radeon™ HD 5870 @ 1GB', 'Version 11', '55 GB', 'DirectX Compatible', 'Call of Duty: Advanced Warfare ha sido desarrollado por Sledgehammer Games y supone el primer ciclo de desarrollo de tres años para la nueva generación en la historia de la franquicia. Call of Duty®: Advanced Warfare imagina los poderosos campos de batalla del futuro, donde la tecnología y la estrategia han evolucionado hasta dar paso a una nueva era de combate en la franquicia. El actor ganador de un Oscar Kevin Spacey interpreta de manera espectacular a Jonathan Irons, uno de los hombres más poderosos del mundo, para dar forma a esta escalofriante visión del futuro de la guerra.'),
(16, 'PC', 'Bungie', 'Bungie', 'Acción', '1-12', 'Textos: Español, Voces: Español', '9 de septiembre de 2014', 'Windows® XP Service Pack 2 o Windows Vista™', 'Intel® Pentium® a 2.4 GHz o superior o AMD® Athlon®', '1 GB', 'Tarjeta con 256 de VRAM, 100% compatible con DirectX 9.0c', 'Directx9.0c ', '15 GB', 'Compatible con Directx9.0c ', 'Nueva IP de los creadores de la serie Halo que se autodefine como un "Shared World Shooter", un videojuego de acción y aventura donde los usuarios crean y hacen evolucionar a su personaje para convertirse en leyendas de su propia historia por salvar a la Tierra.'),
(17, 'PC', 'BioWare', 'EA', 'Rol', '1-4', 'Textos: Español, Voces: Inglés', '21 de noviembre de 2014', 'Windows 7 o 8.1 64-bit', 'AMD quad-core CPU @ 2.5 GHz, Intel quad-core CPU @ 2.0 GHz', '4 GB', 'AMD Radeon HD 4870, NVIDIA GeForce 8800 GT. 512 MB', 'DirectX 10', '26 GB', 'DirectX 9.0c compatible', 'Tercera entrega del notable RPG creado por BioWare, ambientado en un mundo fantástico y medieval. El juego cuenta en esta ocasión con el motor Frostbite 3.0 y está destinado a PC y consolas de ambas generaciones.'),
(18, 'PC', 'Bethesda Softworks', 'Atari', 'Rol', '1', 'Textos: Castellano, Voces: Castellano', '30 de octubre de 2008', 'Windows XP / Vista', 'Intel Pentium 4 a 2.4 GHz o equivalente', '2 GB', 'Gráfica con 256 MB de VRAM, compatible con DirectX 9.0c (nVidia 6800 o superior/ATI X850 o superior)', 'DirectX® 9.0c', '7 GB', 'Compatible con DirectX® 9.0c', 'Los ingenieros de Vault-Tec han trabajado sin descanso en una reproducción interactiva de la vida en el Yermo para que la disfrutes desde la comodidad de tu refugio. Incluye un mundo en constante expansión, combates únicos, efectos visuales cargados de realismo, miles de decisiones para tomar y un increíble reparto de personajes dinámicos. Cada minuto es una lucha por sobrevivir a los horrores del mundo exterior: radiación, supermutantes y criaturas mutantes hostiles. Vault-Tec, la primera elección de América en simulación post-nuclear. '),
(19, 'PC, Steam', 'Ubisoft', 'Steam, Valve', 'Aventura', '1-8', 'Español, Ingles, Frances, Aleman', '17 de Nov, 2014', 'Windows® 7 (SP1) / Windows® 8 / Windows® 8.1 / (64-bit only) ', '2.5 GHz Intel® Core™ i5-2400S or 4.0 GHz AMD FX-8350 or better ', '8 GB', 'NVIDIA GeForce GTX 680 or AMD Radeon R9 290X or better (2 GB VRAM) ', '11.0', '30 GB', 'Realtek HD', 'Oculto en la recóndita cordillera del Himalaya se encuentra Kyrat, un país anclado en la tradición y la violencia. Eres Ajay Ghale. Viajarás a Kyrat para cumplir con el último deseo de tu madre, pero una vez allí te verás atrapado en una guerra civil desatada para acabar con el régimen opresivo del dictador Pagan Min. Explora y navega este gigantesco mundo de juego, en el que el peligro y los imprevistos acechan a la vuelta de cualquier esquina. Cada decisión que tomes aquí cuenta, y cada segundo es una historia. Bienvenido a Kyrat.'),
(20, 'PC', 'Avalanche Studios', 'Koch Media', 'Acción', '1', 'Textos: Español, Voces: Español', '26 de marzo de 2010', 'Microsoft Windows Vista', 'CPU Dual-core con SSE3 (Athlon 64 X2 4200 / Pentium D a 3 GHz)', '2 GB', 'Tarjeta compatible con DX10 y 256 MB de memoria \n(serie nVidia GeForce 8800/ATI Radeon HD 2600 Pro)', 'DirectX 10', '10 GB', 'Compatible DirectX 10', 'Sumérgete en una aventura frenética con total libertad. Eres el agente Rico Rodriguez, y tu misión consiste en encontrar y eliminar a tu amigo y mentor que ha desaparecido en la isla paradisíaca de Panau. Allí tendrás que causar el máximo caos posible por tierra, mar y aire para cambiar el equilibrio de fuerzas. Gracias a una combinación única formada por unos ganchos y un paracaídas, usa el salto BASE, toma el control y crea tus propias acrobacias a toda velocidad. Con más de 400 millas cuadradas de terreno escabroso y centenares de armas y vehículos, Just Cause 2 desafía a la gravedad y a la fe.'),
(21, 'PC', 'EA Sports', 'EA Sports', 'Deportes', '1-22', 'Textos: Español, Voces: Español', '25 de septiembre de 2014', 'Windows V/7/8/8.1-64 bits', 'Intel Core 2 Q6600 Quad@2.4Ghz', '4 GB', 'ATI Radeon HD 5770, NVIDIA GTX 650', 'DirectX 11', '15 GB', 'DirectX 11 compatible', 'Videojuego de la serie FIFA para la temporada de fútbol 2014-2015. El título presenta licencias de más de 25 competiciones oficiales, y entre sus novedades destacan un comportamiento de los porteros mucho más reales, nuevas animaciones para los jugadores, cambios en el comportamiento del esférico y un ritmo de juego más rápido, entre otros tantos.'),
(22, 'PC', 'Visual Concepts', '2K Sports', 'Deportes', '1-8', 'Textos: Español, Voces: Español', '10 de octubre de 2014', 'Windows 7 64 bit', 'Intel Core2 Duo', '2 GB', 'DirectX 10.1 compatible (512 MB)', 'DirectX 11', '50 GB', 'DirectX 9 Compatible', 'NBA 2K15 es la última entrega del videojuego de simulación de la NBA líder en ventas y mejor valorado. Este año, la experiencia NBA 2K15 completa de PlayStation 4 y Xbox One estará también disponible para PC, con una adaptación completa a esta plataforma. Los jugadores de PC podrán experimentar la gran variedad de nuevos modos y características de las versiones para PlayStation 4 y Xbox One con una fidelidad gráfica todavía mayor. Con el MVP de la NBA Kevin Durant en la portada y una banda sonora ecléctica seleccionada por Pharrell Williams, el artista y productor de fama internacional, NBA 2K15 es la experiencia baloncestística para PC más intensa de la historia.'),
(23, 'PC', 'Ubisoft', 'Ubisoft', 'Casual', '1', 'Textos: Español, Voces: Español', '25 de octubre de 2012', 'Windows Vista, Windows 7', '2.0 GHz Intel® Core™2 Duo E4400 or 2.0 GHz AMD Athlon™ 64 X2 3800+', '2 GB', '256 MB DirectX 9 / NVIDIA® GeForce® 8600 GT or ATI Radeon™ HD 2600 XT', 'DirectX 9.0', '12 GB', 'DirectX 9.0c Compatible', 'Rocksmith™ es el primer y único juego que te permite conectar una guitarra o un bajo de verdad mediante un conector jack de salida de 6,35 mm.\r\n\r\nNada de plástico, nada de cosas falsas, simplemente la experiencia más auténtica y completa entre los juegos de música. Enchufando una guitarra o bajo a tu PC podrás desarrollar habilidades y estilos de verdad mientras tocas música absolutamente real. Con una mecánica de juego que se ajusta automáticamente a tu capacidad, el innovador diseño de Rocksmith hará que tocar sea visualmente intuitivo y atraerá por igual a músicos experimentados y a quienes no hayan agarrado una guitarra en su vida.'),
(24, 'PC', 'Eidos Montreal', 'Koch Media', 'Acción', '1', 'Textos: Español, Voces: Español', '28 de febrero de 2014', 'Windows Vista, Windows 7 o Windows 8', 'Procesador Dual Core o Quad Core de alto rendimiento', '4 GB', 'AMD Radeon 4800 series / Nvidia GTS 250 ', 'DirectX 10', '20 GB', 'Compatible DirectX 9', 'Garrett, el maestro de ladrones, abandona las sombras para adentrarse en la Ciudad. Mientras la milicia del Barón siembra el terror y la opresión, una misteriosa enfermedad azota las calles. Bajo las órdenes de Orión, la voz del pueblo, los ciudadanos se preparan para una sangrienta revolución. \r\n\r\nAl encontrarse en la cuerda floja entre la política y el pueblo, envuelto en una maraña de conflictos, Garrett solo puede fiarse de sus habilidades de ratero. Queda poco tiempo y el experto ladrón descubre un terrible secreto sobre su oscuro pasado que podría desmoronar su mundo. '),
(25, 'PC', 'CD Projekt RED', 'Bandai Namco', 'Rol', '1', 'Textos: Español, Voces: Inglés', '19 de mayo de 2015', 'Windows 7 SP1, Windows 8/8.1 de 64 bits', 'Intel Core i5-2500K @ 3.3 GHz o AMD FX-8350 @ 4.0 GHz o AMD Phenom II x4 940 @ 3.0 GHz', '6 GB', 'NVIDIA GeForce GTX 680 o AMD Radeon HD 7970 (2 GB VRAM)', 'DirectX 11', '50 GB', 'Compatible DirectX 9.0c', 'The Witcher 3: Wild Hunt es la tercera entrega de la serie The Witcher, que nos devuelve al conocido cazador de bestias Geralt de Rivia en una nueva aventura. Rol de la vieja escuela en un fascinante mundo de fantasía, cargado de grandes historias y con un gran acabado artístico y tecnológico.');

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
