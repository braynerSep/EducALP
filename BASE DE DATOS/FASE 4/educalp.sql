-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-11-2021 a las 01:24:07
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `educalp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amigos`
--

DROP TABLE IF EXISTS `amigos`;
CREATE TABLE IF NOT EXISTS `amigos` (
  `id_amigos` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_useramigo` int(11) NOT NULL,
  PRIMARY KEY (`id_amigos`),
  KEY `amigos` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comentarios` int(11) NOT NULL AUTO_INCREMENT,
  `texto` tinytext NOT NULL,
  `date` datetime NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_comentarios`),
  KEY `comentario user` (`id_user`),
  KEY `post user` (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `like`
--

DROP TABLE IF EXISTS `like`;
CREATE TABLE IF NOT EXISTS `like` (
  `id_like` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `id_typelike` int(11) NOT NULL,
  PRIMARY KEY (`id_like`),
  KEY `id_typelike` (`id_typelike`),
  KEY `like` (`id_user`,`id_post`),
  KEY `like en post_idx` (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje_chat`
--

DROP TABLE IF EXISTS `mensaje_chat`;
CREATE TABLE IF NOT EXISTS `mensaje_chat` (
  `idmensaje_chat` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `id_tipomensaje` int(11) NOT NULL,
  `url` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`idmensaje_chat`),
  KEY `mensaje` (`id_user`,`id_sala`,`id_tipomensaje`),
  KEY `msg sala_idx` (`id_sala`),
  KEY `msg tipomensaje_idx` (`id_tipomensaje`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `fecha_post` datetime NOT NULL,
  `text` text NOT NULL,
  `id_typepost` int(11) NOT NULL,
  `id_postshared` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_post`),
  KEY `tipo de post_idx` (`id_typepost`),
  KEY `post user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
(1, 'Admin'),
(2, 'Comun');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

DROP TABLE IF EXISTS `sala`;
CREATE TABLE IF NOT EXISTS `sala` (
  `id_sala` int(11) NOT NULL AUTO_INCREMENT,
  `id_tiposala` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`id_sala`),
  KEY `tipo de sala` (`id_tiposala`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salausuario`
--

DROP TABLE IF EXISTS `salausuario`;
CREATE TABLE IF NOT EXISTS `salausuario` (
  `id_salausuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_sala` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_salausuario`),
  KEY `sala usuario` (`id_user`,`id_sala`),
  KEY `sala user_idx` (`id_sala`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

DROP TABLE IF EXISTS `solicitudes`;
CREATE TABLE IF NOT EXISTS `solicitudes` (
  `id_solicitudes` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_useramigo` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `rol` varchar(45) NOT NULL,
  PRIMARY KEY (`id_solicitudes`),
  KEY `solicitudes user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipomensaje`
--

DROP TABLE IF EXISTS `tipomensaje`;
CREATE TABLE IF NOT EXISTS `tipomensaje` (
  `id_tipomensaje` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_tipomensaje`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposala`
--

DROP TABLE IF EXISTS `tiposala`;
CREATE TABLE IF NOT EXISTS `tiposala` (
  `id_tiposala` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_tiposala`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typelike`
--

DROP TABLE IF EXISTS `typelike`;
CREATE TABLE IF NOT EXISTS `typelike` (
  `id_typelike` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipolike` varchar(45) NOT NULL,
  PRIMARY KEY (`id_typelike`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typepost`
--

DROP TABLE IF EXISTS `typepost`;
CREATE TABLE IF NOT EXISTS `typepost` (
  `id_typepost` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`id_typepost`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `documento` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `clave_us` varchar(101) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `documento` (`documento`)
) ENGINE=InnoDB AUTO_INCREMENT=1000536800 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `documento`, `nombre`, `apellido`, `clave_us`) VALUES
(1000536786, 98765, 'Santiago ', 'Monsalve aaaa', ''),
(1000536787, 5678, 'Santiago', 'GÃ³mez Cano', '81dc9bdb52d04dc20036dbd8313ed055'),
(1000536788, 12345678, 'Juan Pablo', 'CastaÃ±eda ', '202cb962ac59075b964b07152d234b70'),
(1000536790, 123123, 'asd', '12312', '202cb962ac59075b964b07152d234b70'),
(1000536791, 123123123, 'rodolfo', 'sepulveda', '202cb962ac59075b964b07152d234b70'),
(1000536792, 1234, 'mocho', 'sepulveda', '202cb962ac59075b964b07152d234b70'),
(1000536794, 123456, 'arturo', 'gonzales', 'qwe'),
(1000536796, 3242351, 'isabela', 'salazar', 'aristilindo'),
(1000536799, 1022142471, 'brayner', 'sepulveda', '65bb86549756830caa529e032f829eb2');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `amigos`
--
ALTER TABLE `amigos`
  ADD CONSTRAINT `amigos de user` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `coment en post` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `coment user` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `id_typelike` FOREIGN KEY (`id_typelike`) REFERENCES `typelike` (`id_typelike`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `like de user` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `like en post` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mensaje_chat`
--
ALTER TABLE `mensaje_chat`
  ADD CONSTRAINT `msg sala` FOREIGN KEY (`id_sala`) REFERENCES `sala` (`id_sala`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `msg tipomensaje` FOREIGN KEY (`id_tipomensaje`) REFERENCES `tipomensaje` (`id_tipomensaje`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `msg user` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `posst user` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tipo de post` FOREIGN KEY (`id_typepost`) REFERENCES `typepost` (`id_typepost`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `tipo sala` FOREIGN KEY (`id_tiposala`) REFERENCES `tiposala` (`id_tiposala`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `salausuario`
--
ALTER TABLE `salausuario`
  ADD CONSTRAINT `sala user` FOREIGN KEY (`id_sala`) REFERENCES `sala` (`id_sala`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sala user1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD CONSTRAINT `solicitudes user` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
