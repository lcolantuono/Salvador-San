-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2013 a las 16:57:43
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `categoria`) VALUES
(1, 'Camisas'),
(2, 'Jeans'),
(3, 'Pantalones'),
(4, 'Calzado'),
(5, 'Camperas'),
(6, 'Sweaters'),
(7, 'Remeras'),
(8, 'Accesorios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `metodoPago` text,
  `cantidaItems` int(11) DEFAULT NULL,
  `montoTotal` double DEFAULT NULL,
  `id_compra` int(20) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `fechaCompra` datetime NOT NULL,
  `realizado` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id_compra`),
  KEY `idUsuario` (`idUsuario`),
  KEY `idUsuario_2` (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`metodoPago`, `cantidaItems`, `montoTotal`, `id_compra`, `idUsuario`, `fechaCompra`, `realizado`) VALUES
(NULL, NULL, NULL, 1, 1, '0000-00-00 00:00:00', 0),
(NULL, NULL, NULL, 3, 2, '2013-06-11 01:28:13', 0),
(NULL, NULL, NULL, 4, 2, '2013-06-11 01:29:03', 0),
(NULL, NULL, NULL, 5, 2, '2013-06-11 01:38:00', 0),
(NULL, NULL, NULL, 6, 2, '2013-06-11 01:38:02', 0),
(NULL, NULL, NULL, 7, 2, '2013-06-11 01:42:24', 0),
(NULL, NULL, NULL, 8, 2, '2013-06-11 02:12:04', 0),
(NULL, NULL, NULL, 9, 2, '2013-06-11 02:12:58', 0),
(NULL, NULL, NULL, 10, 2, '2013-06-11 02:13:33', 0),
(NULL, NULL, NULL, 11, 2, '2013-06-11 20:39:46', 0),
(NULL, NULL, NULL, 12, 2, '2013-06-11 20:43:06', 0),
(NULL, NULL, NULL, 13, 2, '2013-06-11 20:47:28', 0),
(NULL, NULL, NULL, 14, 2, '2013-06-11 20:48:28', 0),
(NULL, NULL, NULL, 15, 2, '2013-06-11 21:00:02', 0),
(NULL, NULL, NULL, 16, 2, '2013-06-11 21:00:29', 0),
(NULL, NULL, NULL, 17, 2, '2013-06-11 21:00:41', 0),
(NULL, NULL, NULL, 18, 2, '2013-06-11 21:02:54', 0),
(NULL, NULL, NULL, 19, 2, '2013-06-11 21:03:14', 0),
(NULL, NULL, NULL, 20, 2, '2013-06-11 21:03:48', 0),
(NULL, NULL, NULL, 21, 2, '2013-06-11 21:04:33', 0),
(NULL, NULL, NULL, 22, 2, '2013-06-11 21:04:42', 0),
(NULL, NULL, NULL, 23, 2, '2013-06-11 21:05:30', 0),
(NULL, NULL, NULL, 24, 2, '2013-06-11 21:05:42', 0),
(NULL, NULL, NULL, 25, 2, '2013-06-11 21:06:12', 0),
(NULL, NULL, NULL, 26, 2, '2013-06-11 21:06:26', 0),
(NULL, NULL, NULL, 27, 2, '2013-06-11 21:06:31', 0),
(NULL, NULL, NULL, 28, 2, '2013-06-11 21:06:45', 0),
(NULL, NULL, NULL, 29, 2, '2013-06-11 21:06:55', 0),
(NULL, NULL, NULL, 30, 2, '2013-06-11 21:07:11', 0),
(NULL, NULL, NULL, 31, 2, '2013-06-11 21:07:25', 0),
(NULL, NULL, NULL, 32, 2, '2013-06-11 21:07:33', 0),
(NULL, NULL, NULL, 33, 2, '2013-06-11 21:07:53', 0),
(NULL, NULL, NULL, 34, 2, '2013-06-11 21:07:53', 0),
(NULL, NULL, NULL, 35, 2, '2013-06-11 21:07:58', 0),
(NULL, NULL, NULL, 36, 2, '2013-06-11 21:55:02', 0),
(NULL, NULL, NULL, 37, 2, '2013-06-11 21:55:04', 0),
(NULL, NULL, NULL, 38, 2, '2013-06-11 21:55:20', 0),
(NULL, NULL, NULL, 39, 2, '2013-06-11 21:55:23', 0),
(NULL, NULL, NULL, 40, 2, '2013-06-11 21:56:14', 0),
(NULL, NULL, NULL, 41, 2, '2013-06-11 21:57:01', 0),
(NULL, NULL, NULL, 42, 2, '2013-06-11 21:58:47', 0),
(NULL, NULL, NULL, 43, 2, '2013-06-11 22:03:39', 0),
(NULL, NULL, NULL, 44, 2, '2013-06-11 22:04:30', 0),
(NULL, NULL, NULL, 45, 2, '2013-06-13 21:01:32', 0),
(NULL, NULL, NULL, 46, 1, '2013-06-27 01:25:19', 0),
(NULL, NULL, NULL, 47, 1, '2013-06-27 01:38:31', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `idImagenes` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(45) DEFAULT NULL,
  `productos_idProductos` int(11) NOT NULL,
  PRIMARY KEY (`idImagenes`),
  KEY `fk_imagenes_productos1_idx` (`productos_idProductos`),
  KEY `productos_idProductos` (`productos_idProductos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`idImagenes`, `imagen`, `productos_idProductos`) VALUES
(1, '1.jpg', 3),
(2, '2.jpg', 2),
(3, '1.jpg', 3),
(4, '2.jpg', 4),
(5, '1.jpg', 5),
(6, '2.jpg', 6),
(7, '1.jpg', 7),
(8, '2.jpg', 8),
(9, '2.jpg', 10),
(10, '2.jpg', 9),
(11, '2.jpg', 2),
(12, '3.jpg', 2),
(13, 'Desert95.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itemscompra`
--

CREATE TABLE IF NOT EXISTS `itemscompra` (
  `idItemCompra` int(11) NOT NULL AUTO_INCREMENT,
  `idCompra` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`idItemCompra`),
  KEY `idCompra` (`idCompra`,`idProducto`),
  KEY `idProducto` (`idProducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Volcado de datos para la tabla `itemscompra`
--

INSERT INTO `itemscompra` (`idItemCompra`, `idCompra`, `idProducto`, `cantidad`) VALUES
(1, 1, 1, 2),
(2, 1, 3, 1),
(3, 5, 2, 5),
(4, 5, 5, 22),
(5, 5, 7, 1),
(6, 7, 1, 1),
(7, 7, 2, 1),
(8, 8, 1, 2),
(9, 8, 4, 1),
(10, 10, 1, 1),
(11, 11, 9, 12),
(12, 12, 1, 1),
(13, 13, 4, 4),
(14, 14, 4, 24),
(15, 15, 4, 1),
(16, 15, 10, 19),
(17, 15, 2, 1),
(18, 16, 2, 1),
(19, 17, 2, 1),
(20, 18, 2, 1),
(21, 19, 2, 1),
(22, 20, 2, 1),
(23, 21, 2, 1),
(24, 22, 2, 1),
(25, 23, 2, 1),
(26, 24, 2, 1),
(27, 25, 2, 1),
(28, 27, 2, 1),
(29, 28, 2, 1),
(30, 29, 2, 1),
(31, 30, 2, 1),
(32, 31, 2, 1),
(33, 32, 2, 1),
(34, 33, 2, 1),
(35, 35, 2, 1),
(36, 36, 2, 5),
(37, 36, 1, 6),
(38, 36, 10, 2),
(39, 38, 1, 1),
(40, 40, 1, 1),
(41, 42, 1, 1),
(42, 43, 2, 1),
(43, 44, 2, 1),
(44, 45, 2, 1),
(45, 46, 9, 1),
(46, 47, 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `idMarca` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(45) NOT NULL,
  PRIMARY KEY (`idMarca`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `marca`) VALUES
(1, 'Salvador San'),
(2, 'Mancha Real');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca_has_categoria`
--

CREATE TABLE IF NOT EXISTS `marca_has_categoria` (
  `marca_idMarca` int(11) NOT NULL,
  `categoria_idCategoria` int(11) NOT NULL,
  PRIMARY KEY (`marca_idMarca`,`categoria_idCategoria`),
  KEY `fk_marca_has_categoria_categoria1_idx` (`categoria_idCategoria`),
  KEY `fk_marca_has_categoria_marca1_idx` (`marca_idMarca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca_has_categoria`
--

INSERT INTO `marca_has_categoria` (`marca_idMarca`, `categoria_idCategoria`) VALUES
(1, 1),
(2, 1),
(1, 2),
(2, 2),
(1, 3),
(2, 3),
(1, 4),
(2, 4),
(1, 5),
(2, 5),
(1, 6),
(2, 6),
(1, 7),
(2, 7),
(1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `idProductos` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `descripcion` text NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` double NOT NULL,
  `fechayhora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `marca_idMarca` int(11) NOT NULL,
  `categoria_idCategoria` int(11) NOT NULL,
  `codigoBarra` int(11) NOT NULL,
  PRIMARY KEY (`idProductos`),
  KEY `fk_productos_marca_idx` (`marca_idMarca`),
  KEY `fk_productos_categoria1_idx` (`categoria_idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProductos`, `titulo`, `descripcion`, `stock`, `precio`, `fechayhora`, `marca_idMarca`, `categoria_idCategoria`, `codigoBarra`) VALUES
(1, 'Conjunto nro 1', 'Campaña otoño-invierno', 23, 450, '2013-05-20 22:59:17', 1, 1, 1),
(2, 'Conjunto nro 2', 'Campaña otoño-invierno', 1, 300, '2013-05-20 22:59:25', 2, 2, 2),
(3, '123', '123123', 123, 123, '2013-05-08 23:17:06', 1, 3, 123),
(4, 'Camisa roja', 'roja', 12, 12, '2013-05-11 21:33:32', 1, 1, 1234),
(5, 'Pantalon negro', 'negro', 12, 12, '2013-05-11 21:33:32', 2, 3, 2134),
(6, 'remera', 'reme', 12, 12, '2013-05-11 21:35:10', 2, 6, 123),
(7, 'Calzado', 'calzado rojo', 123, 123, '2013-05-11 21:35:10', 2, 4, 213),
(8, 'camisa', 'remera azul', 12, 321, '2013-05-16 20:56:45', 1, 1, 312321),
(9, 'Pantalon', 'Jean', 123, 123, '2013-05-20 22:57:07', 2, 7, 0),
(10, 'Pantalon', 'Jean', 123, 123, '2013-05-20 22:57:13', 2, 7, 123123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `idrol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) NOT NULL,
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `rol`) VALUES
(1, 'administrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `idImagen` int(11) NOT NULL AUTO_INCREMENT,
  `nombreImagen` varchar(45) NOT NULL,
  PRIMARY KEY (`idImagen`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`idImagen`, `nombreImagen`) VALUES
(1, 'slide1.jpg'),
(2, 'slide2.jpg'),
(3, 'slide3.jpg'),
(4, 'slide4.jpg'),
(6, 'Tulips.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Usuario` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Clave` varchar(32) NOT NULL,
  `idRol` int(11) NOT NULL,
  `NombreApellido` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idRol` (`idRol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Usuario`, `id`, `Clave`, `idRol`, `NombreApellido`, `Email`) VALUES
('admin', 1, 'admin', 1, 'administrador', 'admin@tormenta.com'),
('cliente', 2, 'cliente', 2, 'cliente', 'cliente@tormenta.com');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `fk_imagenes_productos1` FOREIGN KEY (`productos_idProductos`) REFERENCES `productos` (`idProductos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `itemscompra`
--
ALTER TABLE `itemscompra`
  ADD CONSTRAINT `itemscompra_ibfk_1` FOREIGN KEY (`idCompra`) REFERENCES `compra` (`id_compra`),
  ADD CONSTRAINT `itemscompra_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProductos`);

--
-- Filtros para la tabla `marca_has_categoria`
--
ALTER TABLE `marca_has_categoria`
  ADD CONSTRAINT `fk_marca_has_categoria_categoria1` FOREIGN KEY (`categoria_idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_marca_has_categoria_marca1` FOREIGN KEY (`marca_idMarca`) REFERENCES `marca` (`idMarca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categoria1` FOREIGN KEY (`categoria_idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_marca` FOREIGN KEY (`marca_idMarca`) REFERENCES `marca` (`idMarca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idrol`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
