-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-04-2024 a las 15:53:52
-- Versión del servidor: 10.5.20-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemaventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(120) NOT NULL,
  `estado_categoria` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`, `estado_categoria`) VALUES
(1, 'categoria 1', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_apellidos_cliente` varchar(120) NOT NULL,
  `genero_cliente` varchar(120) NOT NULL,
  `nro_celular_cliente` int(11) NOT NULL,
  `direccion_cliente` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_apellidos_cliente`, `genero_cliente`, `nro_celular_cliente`, `direccion_cliente`) VALUES
(1, 'yucra', 'Masculino', 987654321, 'huanta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(120) NOT NULL,
  `cantidad_producto` int(11) NOT NULL,
  `precio_producto` decimal(10,2) NOT NULL,
  `estado_producto` varchar(120) NOT NULL,
  `categoria_producto` varchar(120) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre_producto`, `cantidad_producto`, `precio_producto`, `estado_producto`, `categoria_producto`, `id_categoria`) VALUES
(1, 'producto', -2, 2.00, 'Disponible', 'categoria 1', NULL),
(2, 'prueba', 23, 2.00, 'Disponible', 'categoria 1', NULL),
(3, 'ljshfk', 234, 34.00, 'Disponible', 'categoria 1', NULL),
(4, 'kfbsd,f', 33, 3.00, 'Disponible', 'categoria 1', NULL),
(5, 'lkjjkhjdf', 34, 3.00, 'Disponible', 'categoria 1', NULL),
(6, 'asdfagag', 33, 2.00, 'Disponible', 'categoria 1', NULL),
(7, 'afasf', 22, 2.00, 'Disponible', 'categoria 1', NULL),
(8, 'kjgfdx', 23, 2.00, 'Disponible', 'categoria 1', NULL),
(9, '12fasfasf', 21, 2.00, 'Disponible', 'categoria 1', NULL),
(10, '123gsddsa', 222, 1.00, 'Disponible', 'categoria 1', NULL),
(11, 'aSDSGFDHGFMHGNBCVCX', 223, 2.00, 'Disponible', 'categoria 1', NULL),
(12, 'ASFDBFHGMHMFGD', 2424, 2.00, 'Disponible', 'categoria 1', NULL),
(13, 'ASFASF', 22, 1.00, 'Disponible', 'categoria 1', NULL),
(14, 'ASFASF', 23, 1.00, 'Disponible', 'categoria 1', NULL),
(15, 'ASFGASGFASG', 112, 1.00, 'Disponible', 'categoria 1', NULL),
(16, 'ASFASFASF', 3443, 3.00, 'Disponible', 'categoria 1', NULL),
(17, '12351', 11, 1.00, 'Disponible', 'categoria 1', NULL),
(18, 'ASKFKHAJF', 22, 1.00, 'Disponible', 'categoria 1', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombre_usuarios` varchar(120) NOT NULL,
  `estado_usuarios` varchar(120) NOT NULL,
  `empresa_usuarios` varchar(120) NOT NULL,
  `ruc_usuarios` varchar(11) NOT NULL,
  `nro_celular_usuarios` varchar(9) NOT NULL,
  `direccion_usuarios` varchar(120) NOT NULL,
  `rol_usuarios` varchar(120) NOT NULL,
  `correo_acceso_usuarios` varchar(120) NOT NULL,
  `contraseña_usuarios` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre_usuarios`, `estado_usuarios`, `empresa_usuarios`, `ruc_usuarios`, `nro_celular_usuarios`, `direccion_usuarios`, `rol_usuarios`, `correo_acceso_usuarios`, `contraseña_usuarios`) VALUES
(1, 'Demo', 'Habilitado', 'Demo', '20123456789', '912345678', 'Huanta', 'Administrador', 'demo@evoluti.pe', 'DemO123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `fecha_venta` date NOT NULL,
  `cliente_venta` varchar(120) NOT NULL,
  `producto_venta` varchar(120) NOT NULL,
  `precio_producto_venta` decimal(10,2) NOT NULL,
  `cantidad_venta` int(11) NOT NULL,
  `monto_pagado_venta` decimal(10,2) NOT NULL,
  `monto_total_venta` decimal(10,2) NOT NULL,
  `estado_pago_venta` varchar(120) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_producto` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
