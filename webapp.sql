-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-07-2016 a las 21:11:08
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `webapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `telefono`, `correo`, `created_at`, `updated_at`) VALUES
(1, 'COPPEL', '6677123456', 'COPPEL@gmail.com', '2016-06-30 17:06:51', '0000-00-00 00:00:00'),
(2, 'oxxo', '6677654321', 'oxxo@gmail.com', '2016-06-30 17:06:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `descripcion`, `id_cliente`, `created_at`, `updated_at`) VALUES
(1, 'Sistema de Cobranza', 1, '2016-06-30 17:17:15', '0000-00-00 00:00:00'),
(2, 'Sistema de Recarga', 2, '2016-06-30 17:17:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Requisitos`
--

CREATE TABLE IF NOT EXISTS `Requisitos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `priridad` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `edad`, `correo`, `created_at`, `updated_at`) VALUES
(1, 'ricardo', 23, 'racq_02@hotmail.com', '2016-06-30 16:48:32', '0000-00-00 00:00:00'),
(2, 'juan', 20, 'juan@hotmail.com', '2016-06-30 16:48:32', '0000-00-00 00:00:00'),
(3, 'jose', 21, 'jose@hotmail.com', '2016-06-30 16:48:54', '0000-00-00 00:00:00'),
(4, 'pepe', 22, 'pepito@hotmail.com', '2016-06-30 16:48:54', '0000-00-00 00:00:00'),
(5, 'mario', 23, 'marito@hotmail.com', '2016-06-30 16:49:30', '0000-00-00 00:00:00'),
(6, 'luis', 25, 'luis@hotmail.com', '2016-06-30 16:49:57', '0000-00-00 00:00:00'),
(7, 'alberto', 23, 'cuen@hotmail.com', '2016-06-30 16:49:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_proyectos`
--

CREATE TABLE IF NOT EXISTS `usuarios_proyectos` (
  `id_usuarios` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios_proyectos`
--

INSERT INTO `usuarios_proyectos` (`id_usuarios`, `id_proyecto`, `created_at`, `updated_at`) VALUES
(1, 1, '2016-07-01 23:54:56', '2016-07-01 23:54:56'),
(2, 1, '2016-07-01 23:54:56', '2016-07-01 23:54:56'),
(3, 1, '2016-07-01 23:56:31', '2016-07-01 23:56:31'),
(5, 2, '2016-07-02 00:56:41', '2016-07-02 00:56:41'),
(6, 2, '2016-07-02 00:56:41', '2016-07-02 00:56:41'),
(7, 2, '2016-07-02 00:56:41', '2016-07-02 00:56:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_req`
--

CREATE TABLE IF NOT EXISTS `usuarios_req` (
  `id_usuarios` int(11) NOT NULL,
  `id_requisitos` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `Requisitos`
--
ALTER TABLE `Requisitos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_proyectos`
--
ALTER TABLE `usuarios_proyectos`
  ADD KEY `id_usuarios` (`id_usuarios`),
  ADD KEY `id_proyecto` (`id_proyecto`);

--
-- Indices de la tabla `usuarios_req`
--
ALTER TABLE `usuarios_req`
  ADD KEY `id_usuarios` (`id_usuarios`),
  ADD KEY `id_requisitos` (`id_requisitos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Requisitos`
--
ALTER TABLE `Requisitos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
