-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2015 a las 03:45:00
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `olympo_v3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE IF NOT EXISTS `almacen` (
  `id_almacen` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente`
--

CREATE TABLE IF NOT EXISTS `ambiente` (
  `id_ambiente` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ambiente`
--

INSERT INTO `ambiente` (`id_ambiente`, `descripcion`, `estado`) VALUES
(1, 'raices', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amoritzacion_matricula`
--

CREATE TABLE IF NOT EXISTS `amoritzacion_matricula` (
  `id_amoritzacion_matricula` int(11) NOT NULL,
  `id_cuota_matricula` int(11) NOT NULL,
  `id_movimiento` int(11) NOT NULL,
  `monto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amortizacion_compra`
--

CREATE TABLE IF NOT EXISTS `amortizacion_compra` (
  `id_amortizacion_compra` int(11) NOT NULL,
  `id_cuota_compra` int(11) NOT NULL,
  `id_movimiento` int(11) NOT NULL,
  `monto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amortizacion_venta`
--

CREATE TABLE IF NOT EXISTS `amortizacion_venta` (
  `id_amortizacion_venta` int(11) NOT NULL,
  `id_cuota_venta` int(11) NOT NULL,
  `id_movimiento` int(11) NOT NULL,
  `monto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia_empleado`
--

CREATE TABLE IF NOT EXISTS `asistencia_empleado` (
  `id_asistencia_empleado` int(11) NOT NULL,
  `id_turno` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_servicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia_socio`
--

CREATE TABLE IF NOT EXISTS `asistencia_socio` (
  `id_asistencia_socio` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_turno` int(11) NOT NULL,
  `id_socio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE IF NOT EXISTS `caja` (
  `id_caja` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_ejercicio`
--

CREATE TABLE IF NOT EXISTS `categoria_ejercicio` (
  `id_categoria_ejercicio` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_empleado`
--

CREATE TABLE IF NOT EXISTS `categoria_empleado` (
  `id_categoria_empleado` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_evento`
--

CREATE TABLE IF NOT EXISTS `categoria_evento` (
  `id_categoria_evento` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_producto`
--

CREATE TABLE IF NOT EXISTS `categoria_producto` (
  `id_categoria_producto` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_producto`
--

INSERT INTO `categoria_producto` (`id_categoria_producto`, `descripcion`) VALUES
(1, 'Complementos'),
(2, 'Bebidas'),
(3, 'Batidos'),
(4, 'Polos'),
(5, 'Truzas'),
(6, 'Mallas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `id_compra` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_modalidad_transaccion` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_producto`
--

CREATE TABLE IF NOT EXISTS `compra_producto` (
  `id_compra_producto` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_almacen` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `monto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concepto_movimiento`
--

CREATE TABLE IF NOT EXISTS `concepto_movimiento` (
  `id_concepto_movimiento` int(11) NOT NULL,
  `id_tipo_movimiento` int(11) NOT NULL,
  `descripcion` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concepto_triaje`
--

CREATE TABLE IF NOT EXISTS `concepto_triaje` (
  `id_concepto_triaje` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuota_compra`
--

CREATE TABLE IF NOT EXISTS `cuota_compra` (
  `id_cuota_compra` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `numero_cuota` int(11) NOT NULL,
  `monto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuota_matricula`
--

CREATE TABLE IF NOT EXISTS `cuota_matricula` (
  `id_cuota_matricula` int(11) NOT NULL,
  `id_matricula` int(11) NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `numero_cuota` int(11) NOT NULL,
  `monto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuota_venta`
--

CREATE TABLE IF NOT EXISTS `cuota_venta` (
  `id_cuota_venta` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `numero_cuota` int(11) NOT NULL,
  `monto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_empresa`
--

CREATE TABLE IF NOT EXISTS `datos_empresa` (
  `id_datos_empresa` int(11) NOT NULL,
  `razon_social` varchar(40) NOT NULL,
  `ruc` int(11) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `twiter` varchar(500) NOT NULL,
  `google_mas` varchar(500) NOT NULL,
  `instagram` varchar(500) NOT NULL,
  `google_maps` varchar(500) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `id_ubigeo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio`
--

CREATE TABLE IF NOT EXISTS `ejercicio` (
  `id_ejercicio` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_categoria_ejercicio` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `id_empleado` int(11) NOT NULL,
  `id_categoria_empleado` int(11) NOT NULL,
  `id_ubigeo` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `dni` char(8) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `sexo` tinyint(4) DEFAULT NULL,
  `direccion` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `grupo_sanguineo` varchar(10) DEFAULT NULL,
  `hobby` varchar(30) DEFAULT NULL,
  `alias` varchar(30) NOT NULL,
  `nacionalidad` varchar(30) NOT NULL,
  `seguro_medico` varchar(30) NOT NULL,
  `observacion` varchar(250) DEFAULT NULL,
  `antecedente_medico` varchar(100) NOT NULL,
  `codigo_postal` varchar(10) NOT NULL,
  `numero_hijo` int(11) NOT NULL,
  `sector` varchar(30) DEFAULT NULL,
  `grado_estudio` varchar(30) NOT NULL,
  `tipo_vivienda` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `id_evento` int(11) NOT NULL,
  `id_categoria_evento` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `lugar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago`
--

CREATE TABLE IF NOT EXISTS `forma_pago` (
  `id_forma_pago` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `id_marca` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `descripcion`) VALUES
(1, 'Gloria'),
(2, 'OL-GYM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE IF NOT EXISTS `matricula` (
  `id_matricula` int(11) NOT NULL,
  `id_membresia` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_socio` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `costo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `membresia`
--

CREATE TABLE IF NOT EXISTS `membresia` (
  `id_membresia` int(11) NOT NULL,
  `id_tipo_membresia` int(11) NOT NULL,
  `id_vigencia` int(11) NOT NULL,
  `costo` float NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad_transaccion`
--

CREATE TABLE IF NOT EXISTS `modalidad_transaccion` (
  `id_modalidad_transaccion` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE IF NOT EXISTS `modulo` (
  `id_modulo` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento`
--

CREATE TABLE IF NOT EXISTS `movimiento` (
  `id_movimiento` int(11) NOT NULL,
  `id_sesion_caja` int(11) NOT NULL,
  `id_concepto_movimiento` int(11) NOT NULL,
  `id_forma_pago` int(11) NOT NULL,
  `id_serie_documento` int(11) NOT NULL,
  `monto` float NOT NULL,
  `extornado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_usuario`
--

CREATE TABLE IF NOT EXISTS `perfil_usuario` (
  `id_perfil_usuario` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `id_permisos` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `id_modulo` int(11) NOT NULL,
  `id_perfil_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` int(11) NOT NULL,
  `id_categoria_producto` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `presentacion` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` float NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `stock_min` int(11) NOT NULL,
  `stock_max` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_categoria_producto`, `id_marca`, `presentacion`, `stock`, `precio`, `nombre`, `stock_min`, `stock_max`, `imagen`) VALUES
(1, 1, 1, 'Con proteina y suero de leche', 40, 56, 'OLD-GYM', 5, 20, ''),
(2, 1, 1, 'asdasd', 22, 22, 'Truza', 4, 10, ''),
(3, 1, 1, '', 22, 22, 'PS-D', 4, 5, ''),
(4, 1, 2, '1', 5, 22, 'LP-PROTEINAS', 3, 5, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `razon_social` varchar(50) NOT NULL,
  `ruc` varchar(11) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) NOT NULL,
  `id_ubigeo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina`
--

CREATE TABLE IF NOT EXISTS `rutina` (
  `id_rutina` int(11) NOT NULL,
  `dia` varchar(20) NOT NULL,
  `id_categoria_ejercicio` int(11) NOT NULL,
  `id_socio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serie_documento`
--

CREATE TABLE IF NOT EXISTS `serie_documento` (
  `id_serie_documento` int(11) NOT NULL,
  `id_tipo_documento` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `numero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE IF NOT EXISTS `servicio` (
  `id_servicio` int(11) NOT NULL,
  `id_ambiente` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servicio`, `id_ambiente`, `nombre`, `descripcion`, `estado`, `imagen`) VALUES
(1, 1, 'cardio', 'descripcion cardio', 1, 'cardio.png'),
(2, 1, 'maquina', 'descripcion maquina', 1, 'maquina.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_x_matricula`
--

CREATE TABLE IF NOT EXISTS `servicio_x_matricula` (
  `id_servicio_x_matricula` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_matricula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion_caja`
--

CREATE TABLE IF NOT EXISTS `sesion_caja` (
  `id_sesion_caja` int(11) NOT NULL,
  `id_caja` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_turno` int(11) NOT NULL,
  `fecha_entrada` datetime NOT NULL,
  `fecha_salida` datetime NOT NULL,
  `monto_inicio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socio`
--

CREATE TABLE IF NOT EXISTS `socio` (
  `id_socio` int(11) NOT NULL,
  `id_tipo_socio` int(11) NOT NULL,
  `id_ubigeo` int(11) NOT NULL,
  `dni` char(8) NOT NULL,
  `alias` varchar(50) DEFAULT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `celular` varchar(15) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` tinyint(4) DEFAULT NULL,
  `estado_civil` varchar(20) NOT NULL,
  `ocupacion` varchar(50) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `grupo_sanguineo` varchar(10) NOT NULL,
  `hobby` varchar(30) NOT NULL,
  `nacionalidad` varchar(30) NOT NULL,
  `seguro_medico` varchar(30) DEFAULT NULL,
  `observacion` varchar(250) DEFAULT NULL,
  `antecedente_medico` varchar(100) DEFAULT NULL,
  `codigo_postal` varchar(10) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `numero_hijo` int(11) DEFAULT NULL,
  `sector` varchar(30) NOT NULL,
  `grado_estudio` varchar(30) DEFAULT NULL,
  `ingresos` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socio_x_evento`
--

CREATE TABLE IF NOT EXISTS `socio_x_evento` (
  `id_socio_x_evento` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `id_socio` int(11) NOT NULL,
  `asistencia` varchar(1) NOT NULL,
  `condicion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE IF NOT EXISTS `tipo_documento` (
  `id_tipo_documento` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_membresia`
--

CREATE TABLE IF NOT EXISTS `tipo_membresia` (
  `id_tipo_membresia` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_movimiento`
--

CREATE TABLE IF NOT EXISTS `tipo_movimiento` (
  `id_tipo_movimiento` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_socio`
--

CREATE TABLE IF NOT EXISTS `tipo_socio` (
  `id_tipo_socio` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `triaje`
--

CREATE TABLE IF NOT EXISTS `triaje` (
  `id_triaje` int(11) NOT NULL,
  `id_socio` int(11) NOT NULL,
  `id_concepto_triaje` int(11) NOT NULL,
  `unidad_medida` varchar(10) NOT NULL,
  `valor` float NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE IF NOT EXISTS `turno` (
  `id_turno` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `hora_entrada` time NOT NULL,
  `hora_salida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubigeo`
--

CREATE TABLE IF NOT EXISTS `ubigeo` (
  `id_ubigeo` int(11) NOT NULL,
  `departamento` varchar(200) NOT NULL,
  `provincia` varchar(200) NOT NULL,
  `distrito` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos_paterno` varchar(20) NOT NULL,
  `apellido_materno` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `dni` char(8) NOT NULL,
  `id_perfil_usuario` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `id_venta` int(11) NOT NULL,
  `id_socio` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_modalidad_transaccion` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_producto`
--

CREATE TABLE IF NOT EXISTS `venta_producto` (
  `id_venta_producto` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_almacen` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vigencia`
--

CREATE TABLE IF NOT EXISTS `vigencia` (
  `id_vigencia` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `duracion` int(11) NOT NULL,
  `unidad_tiempo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
 ADD PRIMARY KEY (`id_almacen`);

--
-- Indices de la tabla `ambiente`
--
ALTER TABLE `ambiente`
 ADD PRIMARY KEY (`id_ambiente`);

--
-- Indices de la tabla `amoritzacion_matricula`
--
ALTER TABLE `amoritzacion_matricula`
 ADD PRIMARY KEY (`id_amoritzacion_matricula`), ADD KEY `cuota_matricula_amoritzacion_matricula_fk` (`id_cuota_matricula`), ADD KEY `movimiento_amoritzacion_matricula_fk` (`id_movimiento`);

--
-- Indices de la tabla `amortizacion_compra`
--
ALTER TABLE `amortizacion_compra`
 ADD PRIMARY KEY (`id_amortizacion_compra`), ADD KEY `cuota_compra_autorizacion_compra_fk` (`id_cuota_compra`), ADD KEY `movimiento_autorizacion_compra_fk` (`id_movimiento`);

--
-- Indices de la tabla `amortizacion_venta`
--
ALTER TABLE `amortizacion_venta`
 ADD PRIMARY KEY (`id_amortizacion_venta`), ADD KEY `cuota_venta_autorizacion_venta_fk` (`id_cuota_venta`), ADD KEY `movimiento_autorizacion_venta_fk` (`id_movimiento`);

--
-- Indices de la tabla `asistencia_empleado`
--
ALTER TABLE `asistencia_empleado`
 ADD PRIMARY KEY (`id_asistencia_empleado`), ADD KEY `empleado_asistencia_empleado_fk` (`id_empleado`), ADD KEY `turno_asistencia_empleado_fk` (`id_turno`), ADD KEY `servicio_asistencia_empleado_fk` (`id_servicio`);

--
-- Indices de la tabla `asistencia_socio`
--
ALTER TABLE `asistencia_socio`
 ADD PRIMARY KEY (`id_asistencia_socio`), ADD KEY `socio_asistencia_socio_fk` (`id_socio`), ADD KEY `turno_asistencia_socio_fk` (`id_turno`);

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
 ADD PRIMARY KEY (`id_caja`);

--
-- Indices de la tabla `categoria_ejercicio`
--
ALTER TABLE `categoria_ejercicio`
 ADD PRIMARY KEY (`id_categoria_ejercicio`);

--
-- Indices de la tabla `categoria_empleado`
--
ALTER TABLE `categoria_empleado`
 ADD PRIMARY KEY (`id_categoria_empleado`);

--
-- Indices de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
 ADD PRIMARY KEY (`id_categoria_evento`);

--
-- Indices de la tabla `categoria_producto`
--
ALTER TABLE `categoria_producto`
 ADD PRIMARY KEY (`id_categoria_producto`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
 ADD PRIMARY KEY (`id_compra`), ADD KEY `proveedor_compra_fk` (`id_proveedor`), ADD KEY `empleado_compra_fk` (`id_empleado`), ADD KEY `modalidad_transaccion_compra_fk` (`id_modalidad_transaccion`);

--
-- Indices de la tabla `compra_producto`
--
ALTER TABLE `compra_producto`
 ADD PRIMARY KEY (`id_compra_producto`), ADD KEY `almacen_compra_producto_fk` (`id_almacen`), ADD KEY `compra_compra_producto_fk` (`id_compra`), ADD KEY `producto_compra_producto_fk` (`id_producto`);

--
-- Indices de la tabla `concepto_movimiento`
--
ALTER TABLE `concepto_movimiento`
 ADD PRIMARY KEY (`id_concepto_movimiento`), ADD KEY `tipo_movimiento_concepto_movimiento_fk` (`id_tipo_movimiento`);

--
-- Indices de la tabla `concepto_triaje`
--
ALTER TABLE `concepto_triaje`
 ADD PRIMARY KEY (`id_concepto_triaje`);

--
-- Indices de la tabla `cuota_compra`
--
ALTER TABLE `cuota_compra`
 ADD PRIMARY KEY (`id_cuota_compra`), ADD KEY `compra_cuota_compra_fk` (`id_compra`);

--
-- Indices de la tabla `cuota_matricula`
--
ALTER TABLE `cuota_matricula`
 ADD PRIMARY KEY (`id_cuota_matricula`), ADD KEY `matricula_cuota_matricula_fk` (`id_matricula`);

--
-- Indices de la tabla `cuota_venta`
--
ALTER TABLE `cuota_venta`
 ADD PRIMARY KEY (`id_cuota_venta`), ADD KEY `venta_cuota_fk` (`id_venta`);

--
-- Indices de la tabla `datos_empresa`
--
ALTER TABLE `datos_empresa`
 ADD PRIMARY KEY (`id_datos_empresa`), ADD KEY `ubigeo_datos_empresa_fk` (`id_ubigeo`);

--
-- Indices de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
 ADD PRIMARY KEY (`id_ejercicio`), ADD KEY `servicio_ejercicio_fk` (`id_servicio`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
 ADD PRIMARY KEY (`id_empleado`), ADD KEY `ubigeo_empleado_fk` (`id_ubigeo`), ADD KEY `categoria_empleado_empleado_fk` (`id_categoria_empleado`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
 ADD PRIMARY KEY (`id_evento`), ADD KEY `categoria_evento_evento_fk` (`id_categoria_evento`);

--
-- Indices de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
 ADD PRIMARY KEY (`id_forma_pago`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
 ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
 ADD PRIMARY KEY (`id_matricula`), ADD KEY `empleado_matricula_fk` (`id_empleado`), ADD KEY `membresia_matricula_fk` (`id_membresia`), ADD KEY `socio_matricula_fk` (`id_socio`);

--
-- Indices de la tabla `membresia`
--
ALTER TABLE `membresia`
 ADD PRIMARY KEY (`id_membresia`), ADD KEY `tipo_membresia_membresia_fk` (`id_tipo_membresia`), ADD KEY `vigencia_membresia_fk` (`id_vigencia`);

--
-- Indices de la tabla `modalidad_transaccion`
--
ALTER TABLE `modalidad_transaccion`
 ADD PRIMARY KEY (`id_modalidad_transaccion`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
 ADD PRIMARY KEY (`id_modulo`);

--
-- Indices de la tabla `movimiento`
--
ALTER TABLE `movimiento`
 ADD PRIMARY KEY (`id_movimiento`), ADD KEY `concepto_movimiento_movimiento_fk` (`id_concepto_movimiento`), ADD KEY `forma_pago_movimiento_fk` (`id_forma_pago`), ADD KEY `serie_documento_movimiento_fk` (`id_serie_documento`), ADD KEY `sesion_caja_movimiento_fk` (`id_sesion_caja`);

--
-- Indices de la tabla `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
 ADD PRIMARY KEY (`id_perfil_usuario`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
 ADD PRIMARY KEY (`id_permisos`), ADD KEY `perfil_usuario_permisos_fk` (`id_perfil_usuario`), ADD KEY `modulo_permisos_fk` (`id_modulo`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
 ADD PRIMARY KEY (`id_producto`), ADD KEY `marca_producto_fk` (`id_marca`), ADD KEY `categoria_producto_producto_fk` (`id_categoria_producto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
 ADD PRIMARY KEY (`id_proveedor`), ADD KEY `ubigeo_proveedor_fk` (`id_ubigeo`);

--
-- Indices de la tabla `rutina`
--
ALTER TABLE `rutina`
 ADD PRIMARY KEY (`id_rutina`), ADD KEY `socio_rutina_fk` (`id_socio`), ADD KEY `categoria_ejercicio_rutina_fk` (`id_categoria_ejercicio`);

--
-- Indices de la tabla `serie_documento`
--
ALTER TABLE `serie_documento`
 ADD PRIMARY KEY (`id_serie_documento`), ADD KEY `tipo_documento_serie_documento_fk` (`id_tipo_documento`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
 ADD PRIMARY KEY (`id_servicio`), ADD KEY `ambiente_servicio_fk` (`id_ambiente`);

--
-- Indices de la tabla `servicio_x_matricula`
--
ALTER TABLE `servicio_x_matricula`
 ADD PRIMARY KEY (`id_servicio_x_matricula`), ADD KEY `matricula_servicio_x_matricula_fk` (`id_matricula`), ADD KEY `servicio_servicio_x_matricula_fk` (`id_servicio`);

--
-- Indices de la tabla `sesion_caja`
--
ALTER TABLE `sesion_caja`
 ADD PRIMARY KEY (`id_sesion_caja`), ADD KEY `caja_sesion_caja_fk` (`id_caja`), ADD KEY `empleado_sesion_caja_fk` (`id_empleado`), ADD KEY `turno_sesion_caja_fk` (`id_turno`);

--
-- Indices de la tabla `socio`
--
ALTER TABLE `socio`
 ADD PRIMARY KEY (`id_socio`), ADD KEY `ubigeo_socio_fk` (`id_ubigeo`), ADD KEY `tipo_socio_socio_fk` (`id_tipo_socio`);

--
-- Indices de la tabla `socio_x_evento`
--
ALTER TABLE `socio_x_evento`
 ADD PRIMARY KEY (`id_socio_x_evento`), ADD KEY `socio_socio_x_evento_fk` (`id_socio`), ADD KEY `evento_socio_x_evento_fk` (`id_evento`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
 ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indices de la tabla `tipo_membresia`
--
ALTER TABLE `tipo_membresia`
 ADD PRIMARY KEY (`id_tipo_membresia`);

--
-- Indices de la tabla `tipo_movimiento`
--
ALTER TABLE `tipo_movimiento`
 ADD PRIMARY KEY (`id_tipo_movimiento`);

--
-- Indices de la tabla `tipo_socio`
--
ALTER TABLE `tipo_socio`
 ADD PRIMARY KEY (`id_tipo_socio`);

--
-- Indices de la tabla `triaje`
--
ALTER TABLE `triaje`
 ADD PRIMARY KEY (`id_triaje`), ADD KEY `socio_triaje_fk` (`id_socio`), ADD KEY `concepto_triaje_triaje_fk` (`id_concepto_triaje`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
 ADD PRIMARY KEY (`id_turno`);

--
-- Indices de la tabla `ubigeo`
--
ALTER TABLE `ubigeo`
 ADD PRIMARY KEY (`id_ubigeo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id_usuario`), ADD KEY `perfil_usuario_usuarios_fk` (`id_perfil_usuario`), ADD KEY `empleado_usuarios_fk` (`id_empleado`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
 ADD PRIMARY KEY (`id_venta`), ADD KEY `empleado_venta_fk` (`id_empleado`), ADD KEY `modalidad_transaccion_venta_fk` (`id_modalidad_transaccion`), ADD KEY `socio_venta_fk` (`id_socio`);

--
-- Indices de la tabla `venta_producto`
--
ALTER TABLE `venta_producto`
 ADD PRIMARY KEY (`id_venta_producto`), ADD KEY `almacen_venta_producto_fk` (`id_almacen`), ADD KEY `producto_venta_producto_fk` (`id_producto`), ADD KEY `venta_venta_producto_fk` (`id_venta`);

--
-- Indices de la tabla `vigencia`
--
ALTER TABLE `vigencia`
 ADD PRIMARY KEY (`id_vigencia`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `amoritzacion_matricula`
--
ALTER TABLE `amoritzacion_matricula`
ADD CONSTRAINT `cuota_matricula_amoritzacion_matricula_fk` FOREIGN KEY (`id_cuota_matricula`) REFERENCES `cuota_matricula` (`id_cuota_matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `movimiento_amoritzacion_matricula_fk` FOREIGN KEY (`id_movimiento`) REFERENCES `movimiento` (`id_movimiento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `amortizacion_compra`
--
ALTER TABLE `amortizacion_compra`
ADD CONSTRAINT `cuota_compra_autorizacion_compra_fk` FOREIGN KEY (`id_cuota_compra`) REFERENCES `cuota_compra` (`id_cuota_compra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `movimiento_autorizacion_compra_fk` FOREIGN KEY (`id_movimiento`) REFERENCES `movimiento` (`id_movimiento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `amortizacion_venta`
--
ALTER TABLE `amortizacion_venta`
ADD CONSTRAINT `cuota_venta_autorizacion_venta_fk` FOREIGN KEY (`id_cuota_venta`) REFERENCES `cuota_venta` (`id_cuota_venta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `movimiento_autorizacion_venta_fk` FOREIGN KEY (`id_movimiento`) REFERENCES `movimiento` (`id_movimiento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asistencia_empleado`
--
ALTER TABLE `asistencia_empleado`
ADD CONSTRAINT `empleado_asistencia_empleado_fk` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `servicio_asistencia_empleado_fk` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `turno_asistencia_empleado_fk` FOREIGN KEY (`id_turno`) REFERENCES `turno` (`id_turno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asistencia_socio`
--
ALTER TABLE `asistencia_socio`
ADD CONSTRAINT `socio_asistencia_socio_fk` FOREIGN KEY (`id_socio`) REFERENCES `socio` (`id_socio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `turno_asistencia_socio_fk` FOREIGN KEY (`id_turno`) REFERENCES `turno` (`id_turno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
ADD CONSTRAINT `empleado_compra_fk` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `modalidad_transaccion_compra_fk` FOREIGN KEY (`id_modalidad_transaccion`) REFERENCES `modalidad_transaccion` (`id_modalidad_transaccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `proveedor_compra_fk` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `compra_producto`
--
ALTER TABLE `compra_producto`
ADD CONSTRAINT `almacen_compra_producto_fk` FOREIGN KEY (`id_almacen`) REFERENCES `almacen` (`id_almacen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `compra_compra_producto_fk` FOREIGN KEY (`id_compra`) REFERENCES `compra` (`id_compra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `producto_compra_producto_fk` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `concepto_movimiento`
--
ALTER TABLE `concepto_movimiento`
ADD CONSTRAINT `tipo_movimiento_concepto_movimiento_fk` FOREIGN KEY (`id_tipo_movimiento`) REFERENCES `tipo_movimiento` (`id_tipo_movimiento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cuota_compra`
--
ALTER TABLE `cuota_compra`
ADD CONSTRAINT `compra_cuota_compra_fk` FOREIGN KEY (`id_compra`) REFERENCES `compra` (`id_compra`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cuota_matricula`
--
ALTER TABLE `cuota_matricula`
ADD CONSTRAINT `matricula_cuota_matricula_fk` FOREIGN KEY (`id_matricula`) REFERENCES `matricula` (`id_matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cuota_venta`
--
ALTER TABLE `cuota_venta`
ADD CONSTRAINT `venta_cuota_fk` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `datos_empresa`
--
ALTER TABLE `datos_empresa`
ADD CONSTRAINT `ubigeo_datos_empresa_fk` FOREIGN KEY (`id_ubigeo`) REFERENCES `ubigeo` (`id_ubigeo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
ADD CONSTRAINT `servicio_ejercicio_fk` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
ADD CONSTRAINT `categoria_empleado_empleado_fk` FOREIGN KEY (`id_categoria_empleado`) REFERENCES `categoria_empleado` (`id_categoria_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `ubigeo_empleado_fk` FOREIGN KEY (`id_ubigeo`) REFERENCES `ubigeo` (`id_ubigeo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
ADD CONSTRAINT `categoria_evento_evento_fk` FOREIGN KEY (`id_categoria_evento`) REFERENCES `categoria_evento` (`id_categoria_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
ADD CONSTRAINT `empleado_matricula_fk` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `membresia_matricula_fk` FOREIGN KEY (`id_membresia`) REFERENCES `membresia` (`id_membresia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `socio_matricula_fk` FOREIGN KEY (`id_socio`) REFERENCES `socio` (`id_socio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `membresia`
--
ALTER TABLE `membresia`
ADD CONSTRAINT `tipo_membresia_membresia_fk` FOREIGN KEY (`id_tipo_membresia`) REFERENCES `tipo_membresia` (`id_tipo_membresia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `vigencia_membresia_fk` FOREIGN KEY (`id_vigencia`) REFERENCES `vigencia` (`id_vigencia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `movimiento`
--
ALTER TABLE `movimiento`
ADD CONSTRAINT `concepto_movimiento_movimiento_fk` FOREIGN KEY (`id_concepto_movimiento`) REFERENCES `concepto_movimiento` (`id_concepto_movimiento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `forma_pago_movimiento_fk` FOREIGN KEY (`id_forma_pago`) REFERENCES `forma_pago` (`id_forma_pago`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `serie_documento_movimiento_fk` FOREIGN KEY (`id_serie_documento`) REFERENCES `serie_documento` (`id_serie_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `sesion_caja_movimiento_fk` FOREIGN KEY (`id_sesion_caja`) REFERENCES `sesion_caja` (`id_sesion_caja`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
ADD CONSTRAINT `modulo_permisos_fk` FOREIGN KEY (`id_modulo`) REFERENCES `modulo` (`id_modulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `perfil_usuario_permisos_fk` FOREIGN KEY (`id_perfil_usuario`) REFERENCES `perfil_usuario` (`id_perfil_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
ADD CONSTRAINT `categoria_producto_producto_fk` FOREIGN KEY (`id_categoria_producto`) REFERENCES `categoria_producto` (`id_categoria_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `marca_producto_fk` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
ADD CONSTRAINT `ubigeo_proveedor_fk` FOREIGN KEY (`id_ubigeo`) REFERENCES `ubigeo` (`id_ubigeo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rutina`
--
ALTER TABLE `rutina`
ADD CONSTRAINT `categoria_ejercicio_rutina_fk` FOREIGN KEY (`id_categoria_ejercicio`) REFERENCES `categoria_ejercicio` (`id_categoria_ejercicio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `socio_rutina_fk` FOREIGN KEY (`id_socio`) REFERENCES `socio` (`id_socio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `serie_documento`
--
ALTER TABLE `serie_documento`
ADD CONSTRAINT `tipo_documento_serie_documento_fk` FOREIGN KEY (`id_tipo_documento`) REFERENCES `tipo_documento` (`id_tipo_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
ADD CONSTRAINT `ambiente_servicio_fk` FOREIGN KEY (`id_ambiente`) REFERENCES `ambiente` (`id_ambiente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `servicio_x_matricula`
--
ALTER TABLE `servicio_x_matricula`
ADD CONSTRAINT `matricula_servicio_x_matricula_fk` FOREIGN KEY (`id_matricula`) REFERENCES `matricula` (`id_matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `servicio_servicio_x_matricula_fk` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sesion_caja`
--
ALTER TABLE `sesion_caja`
ADD CONSTRAINT `caja_sesion_caja_fk` FOREIGN KEY (`id_caja`) REFERENCES `caja` (`id_caja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `empleado_sesion_caja_fk` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `turno_sesion_caja_fk` FOREIGN KEY (`id_turno`) REFERENCES `turno` (`id_turno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `socio`
--
ALTER TABLE `socio`
ADD CONSTRAINT `tipo_socio_socio_fk` FOREIGN KEY (`id_tipo_socio`) REFERENCES `tipo_socio` (`id_tipo_socio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `ubigeo_socio_fk` FOREIGN KEY (`id_ubigeo`) REFERENCES `ubigeo` (`id_ubigeo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `socio_x_evento`
--
ALTER TABLE `socio_x_evento`
ADD CONSTRAINT `evento_socio_x_evento_fk` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `socio_socio_x_evento_fk` FOREIGN KEY (`id_socio`) REFERENCES `socio` (`id_socio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `triaje`
--
ALTER TABLE `triaje`
ADD CONSTRAINT `concepto_triaje_triaje_fk` FOREIGN KEY (`id_concepto_triaje`) REFERENCES `concepto_triaje` (`id_concepto_triaje`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `socio_triaje_fk` FOREIGN KEY (`id_socio`) REFERENCES `socio` (`id_socio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
ADD CONSTRAINT `empleado_usuarios_fk` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `perfil_usuario_usuarios_fk` FOREIGN KEY (`id_perfil_usuario`) REFERENCES `perfil_usuario` (`id_perfil_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
ADD CONSTRAINT `empleado_venta_fk` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `modalidad_transaccion_venta_fk` FOREIGN KEY (`id_modalidad_transaccion`) REFERENCES `modalidad_transaccion` (`id_modalidad_transaccion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `socio_venta_fk` FOREIGN KEY (`id_socio`) REFERENCES `socio` (`id_socio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `venta_producto`
--
ALTER TABLE `venta_producto`
ADD CONSTRAINT `almacen_venta_producto_fk` FOREIGN KEY (`id_almacen`) REFERENCES `almacen` (`id_almacen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `producto_venta_producto_fk` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `venta_venta_producto_fk` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
