-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2021 a las 21:50:46
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbsitio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compraventa`
--

CREATE TABLE `compraventa` (
  `idcompraVenta` int(11) NOT NULL,
  `fechaCompraVenta` datetime NOT NULL,
  `conceptoCompraVenta` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tipoPago` tinyint(1) NOT NULL,
  `tipoOperacion` tinyint(1) NOT NULL,
  `estadoCompraVenta` bit(1) NOT NULL,
  `compraVentaCreacion` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fechacompraVentaCreacion` datetime NOT NULL,
  `compraVentaModificacion` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechacompraVentaModificacion` datetime DEFAULT NULL,
  `Terceros_idTerceros` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigoProducto` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `NombreProducto` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `DescripcionProducto` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `UnidadMedida` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `marcaProducto` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `precioActual` int(11) NOT NULL DEFAULT 0,
  `cantidadActual` float NOT NULL DEFAULT 0,
  `productoCreacion` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fechaProductoCreacion` datetime NOT NULL,
  `productoModificacion` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaProductoModificacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosporcompraventa`
--

CREATE TABLE `productosporcompraventa` (
  `IdProductosPorCompraVenta` int(11) NOT NULL,
  `codigoProducto` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `idcompraVenta` int(11) DEFAULT NULL,
  `EstadoProductosPorCompraVenta` bit(1) DEFAULT NULL,
  `FechaCracion` datetime DEFAULT NULL,
  `usuarioCreacion` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fechaUsuarioCreacion` datetime NOT NULL,
  `usuarioModificacion` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaUsuarioModificacion` datetime DEFAULT NULL,
  `Cantida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terceros`
--

CREATE TABLE `terceros` (
  `idTerceros` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nombreTercero` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `emailTercero` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `celularTercero` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefonoTercero` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccionTercero` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcionTercero` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contactoTercero` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estadoTercero` bit(1) NOT NULL,
  `esCliente` bit(1) NOT NULL,
  `esProveedor` bit(1) NOT NULL,
  `terceroCreacion` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fechaProductoCreacion` datetime NOT NULL,
  `terceroModificacion` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaTerceroModificacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombreUsuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `primerNombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `segundoNombre` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `primerApellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `segundoApellido` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `Cedula` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `perfilUsuario` int(11) NOT NULL,
  `Clave` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `EstadoUsuario` bit(1) NOT NULL,
  `usuarioCreacion` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fechaUsuarioCreacion` datetime NOT NULL,
  `usuarioModificacion` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaUsuarioModificacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombreUsuario`, `primerNombre`, `segundoNombre`, `primerApellido`, `segundoApellido`, `email`, `Cedula`, `celular`, `direccion`, `perfilUsuario`, `Clave`, `EstadoUsuario`, `usuarioCreacion`, `fechaUsuarioCreacion`, `usuarioModificacion`, `fechaUsuarioModificacion`) VALUES
('Kaoru', 'Daniel', '', 'Pulgarin', 'Bedoya', 'usuario@correo.com', '1088335834', '12321341124', 'dfssdsaads', 3, 'MW1jZGpTZ3RuV1NkSlpOYVMyYzYrQT09', b'1', 'system', '2021-05-29 20:25:35', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compraventa`
--
ALTER TABLE `compraventa`
  ADD PRIMARY KEY (`idcompraVenta`),
  ADD KEY `indx_fecha_compraventa` (`fechaCompraVenta`),
  ADD KEY `fk_compraVenta_Terceros1_idx` (`Terceros_idTerceros`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigoProducto`),
  ADD KEY `indx_nombre_producto` (`NombreProducto`);

--
-- Indices de la tabla `productosporcompraventa`
--
ALTER TABLE `productosporcompraventa`
  ADD PRIMARY KEY (`IdProductosPorCompraVenta`),
  ADD KEY `fk_compraVenta_has_Productos_Productos1_idx` (`codigoProducto`),
  ADD KEY `fk_compraVenta_has_Productos_compraVenta_idx` (`IdProductosPorCompraVenta`);

--
-- Indices de la tabla `terceros`
--
ALTER TABLE `terceros`
  ADD PRIMARY KEY (`idTerceros`),
  ADD KEY `indx_nombre_tercero` (`nombreTercero`),
  ADD KEY `indx_descripcion_tercero` (`descripcionTercero`),
  ADD KEY `indx_contacto_tercero` (`contactoTercero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nombreUsuario`),
  ADD KEY `indx_identificacion_us` (`Cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compraventa`
--
ALTER TABLE `compraventa`
  MODIFY `idcompraVenta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compraventa`
--
ALTER TABLE `compraventa`
  ADD CONSTRAINT `fk_compraVenta_Terceros1` FOREIGN KEY (`Terceros_idTerceros`) REFERENCES `terceros` (`idTerceros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productosporcompraventa`
--
ALTER TABLE `productosporcompraventa`
  ADD CONSTRAINT `fk_compraVenta_has_Productos_Productos1` FOREIGN KEY (`codigoProducto`) REFERENCES `productos` (`codigoProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compraVenta_has_Productos_compraVenta` FOREIGN KEY (`IdProductosPorCompraVenta`) REFERENCES `compraventa` (`idcompraVenta`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
