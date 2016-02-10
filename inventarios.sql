-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-02-2016 a las 03:41:52
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_almacenes`
--

CREATE TABLE `inv_almacenes` (
  `id` int(10) UNSIGNED NOT NULL,
  `alm_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alm_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_almacenes`
--

INSERT INTO `inv_almacenes` (`id`, `alm_codigo`, `alm_nombre`, `created_at`, `updated_at`) VALUES
(1, '01', 'prueba almacen', '2016-02-03 06:01:36', '2016-02-03 06:01:36'),
(3, '03', 'almacen tres', '2016-02-03 06:02:07', '2016-02-03 06:02:07'),
(4, '04', 'almacen cuatro', '2016-02-03 06:02:15', '2016-02-03 06:02:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_articulos`
--

CREATE TABLE `inv_articulos` (
  `id` int(10) UNSIGNED NOT NULL,
  `art_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_referencia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_codalterno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_codbarra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_presentacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_nomgeneric` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_marca` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_centrocos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_utlfeccomp` datetime NOT NULL,
  `art_ultfecventa` datetime NOT NULL,
  `art_imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_fecexpedi` datetime NOT NULL,
  `art_fecvence` datetime NOT NULL,
  `art_lote` int(11) NOT NULL,
  `art_talla` int(11) NOT NULL,
  `art_refrigeracion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_paisorigen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_coddian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_codinvima` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_fecauditoria` datetime NOT NULL,
  `art_usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_terminal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_observacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_unidadmedida` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_tipmed` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `art_alm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_articulos`
--

INSERT INTO `inv_articulos` (`id`, `art_codigo`, `art_nombre`, `art_referencia`, `art_estado`, `art_codalterno`, `art_codbarra`, `art_presentacion`, `art_nomgeneric`, `art_marca`, `art_centrocos`, `art_utlfeccomp`, `art_ultfecventa`, `art_imagen`, `art_fecexpedi`, `art_fecvence`, `art_lote`, `art_talla`, `art_refrigeracion`, `art_paisorigen`, `art_coddian`, `art_codinvima`, `art_fecauditoria`, `art_usuario`, `art_terminal`, `art_observacion`, `art_unidadmedida`, `art_tipmed`, `art_alm`, `created_at`, `updated_at`) VALUES
(1, 'art_7890', 'asd', 'asd', 'a', 'asda', 'dasd', 'sd', 'a', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '2016-02-10 02:37:07', '2016-02-10 02:39:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_bodegas`
--

CREATE TABLE `inv_bodegas` (
  `id` int(10) UNSIGNED NOT NULL,
  `bod_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bod_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_bodegas`
--

INSERT INTO `inv_bodegas` (`id`, `bod_codigo`, `bod_nombre`, `created_at`, `updated_at`) VALUES
(1, '123123', 'asdasd', '2016-02-10 07:32:14', '2016-02-10 07:32:14'),
(2, '423423432', 'asdadas', '2016-02-10 07:32:19', '2016-02-10 07:32:19'),
(3, '67567567', 'gdgdfg', '2016-02-10 07:32:29', '2016-02-10 07:32:29'),
(4, '7867878', 'fgfghfgh', '2016-02-10 07:32:34', '2016-02-10 07:32:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_catarticus`
--

CREATE TABLE `inv_catarticus` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_catarticus`
--

INSERT INTO `inv_catarticus` (`id`, `cat_codigo`, `cat_nombre`, `created_at`, `updated_at`) VALUES
(3, '1145', 'asdfsdf mod', '2016-01-13 07:46:39', '2016-01-14 07:00:23'),
(5, '612', 'sdfdsf mos', '2016-01-13 07:49:45', '2016-01-27 08:14:07'),
(6, '145', 'angela mod', '2016-02-05 07:57:16', '2016-02-05 07:58:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_ciudades`
--

CREATE TABLE `inv_ciudades` (
  `id` int(10) UNSIGNED NOT NULL,
  `ciu_depart` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ciu_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ciu_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_ciudades`
--

INSERT INTO `inv_ciudades` (`id`, `ciu_depart`, `ciu_codigo`, `ciu_nombre`, `created_at`, `updated_at`) VALUES
(1, '93', '39', 'Bogota - BTA', '2016-02-05 21:33:31', '2016-02-05 21:33:57'),
(3, '465', '893', 'Neiva', '2016-02-05 21:38:07', '2016-02-05 21:38:07'),
(4, '1342312', '981', 'Tolima', '2016-02-05 21:38:26', '2016-02-05 21:38:26'),
(5, 'asdasd', 'ada', 'asdasd', '2016-02-09 02:02:50', '2016-02-09 02:02:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_combosarts`
--

CREATE TABLE `inv_combosarts` (
  `id` int(10) UNSIGNED NOT NULL,
  `cmb_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cmb_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cmb_fecdesde` datetime NOT NULL,
  `cmb_fechasta` datetime NOT NULL,
  `cmb_usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cmb_fecaud` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_combosarts`
--

INSERT INTO `inv_combosarts` (`id`, `cmb_codigo`, `cmb_nombre`, `cmb_fecdesde`, `cmb_fechasta`, `cmb_usuario`, `cmb_fecaud`, `created_at`, `updated_at`) VALUES
(1, '123', '123123', '2016-02-09 01:00:00', '2016-02-25 01:00:00', 'sdasdd', '2016-03-04 01:00:00', '2016-02-09 01:30:12', '2016-02-09 01:30:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_controlarts`
--

CREATE TABLE `inv_controlarts` (
  `id` int(10) UNSIGNED NOT NULL,
  `ctl_articulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ctl_cantstock` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_controlarts`
--

INSERT INTO `inv_controlarts` (`id`, `ctl_articulo`, `ctl_cantstock`, `created_at`, `updated_at`) VALUES
(1, 'adsasd', 23424312, '2016-02-10 05:03:27', '2016-02-10 05:03:27'),
(2, 'tdgdfgdfg', 34234234, '2016-02-10 05:03:38', '2016-02-10 05:03:38'),
(4, 'dfgfdgdf', 776576, '2016-02-10 05:03:53', '2016-02-10 05:03:53'),
(5, 'jkkjkhj', 45645645, '2016-02-10 05:04:00', '2016-02-10 05:04:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_departamentos`
--

CREATE TABLE `inv_departamentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `dep_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dep_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_departamentos`
--

INSERT INTO `inv_departamentos` (`id`, `dep_codigo`, `dep_nombre`, `created_at`, `updated_at`) VALUES
(1, '123', 'hola', '2016-02-06 08:42:25', '2016-02-06 08:42:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_detfacturas`
--

CREATE TABLE `inv_detfacturas` (
  `id` int(10) UNSIGNED NOT NULL,
  `dfa_sucursal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dfa_documento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dfa_numero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dfa_fecha` datetime NOT NULL,
  `dfa_item` int(11) NOT NULL,
  `dfa_articulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dfa_linea` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dfa_cantidad` int(11) NOT NULL,
  `dfa_vlrunitario` int(11) NOT NULL,
  `dfa_porcdescuen` int(11) NOT NULL,
  `dfa_vlrdescuen` int(11) NOT NULL,
  `dfa_presentacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dfa_impuesto` int(11) NOT NULL,
  `dfa_total` int(11) NOT NULL,
  `dfa_ubicacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dfa_usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dfa_fecaud` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_detfacturas`
--

INSERT INTO `inv_detfacturas` (`id`, `dfa_sucursal`, `dfa_documento`, `dfa_numero`, `dfa_fecha`, `dfa_item`, `dfa_articulo`, `dfa_linea`, `dfa_cantidad`, `dfa_vlrunitario`, `dfa_porcdescuen`, `dfa_vlrdescuen`, `dfa_presentacion`, `dfa_impuesto`, `dfa_total`, `dfa_ubicacion`, `dfa_usuario`, `dfa_fecaud`, `created_at`, `updated_at`) VALUES
(1, '', 'asdad', '', '0000-00-00 00:00:00', 0, '', '', 0, 0, 0, 0, '', 0, 0, '', '', '0000-00-00 00:00:00', '2016-02-10 07:24:29', '2016-02-10 07:24:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_documentos`
--

CREATE TABLE `inv_documentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `doc_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doc_descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doc_clase` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doc_secuencia` int(11) NOT NULL,
  `doc_modulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doc_estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doc_obser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doc_fecaud` datetime NOT NULL,
  `doc_usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_documentos`
--

INSERT INTO `inv_documentos` (`id`, `doc_codigo`, `doc_descripcion`, `doc_clase`, `doc_secuencia`, `doc_modulo`, `doc_estado`, `doc_obser`, `doc_fecaud`, `doc_usuario`, `created_at`, `updated_at`) VALUES
(2, 'dasd123', '1233s', '123', 12323, 'adasd', 'adasd', 'asdasd', '2018-07-03 14:02:00', 'asdsdsad', '2016-02-06 09:39:18', '2016-02-06 09:39:18'),
(3, 'dgfdg', 'dfgdfgd', 'dfgfg', 343535, 'xgfdgdfg', 'dfgdfgd', 'dfgfdgdfg', '2016-02-19 01:00:00', 'sdfsdfsdf', '2016-02-06 09:46:53', '2016-02-06 09:46:53'),
(4, '234343', 'dfdsf', 'ghbvsdfc', 213123, 'fsdfgddfg', 'sdddddd', 'ssssss', '2016-02-05 15:01:00', 'sdasdsad', '2016-02-06 09:47:29', '2016-02-06 09:47:29'),
(5, '1234567', 'angela', 'jujejeje', 1232, 'lololo', 'lalalalal', 'lalalalal', '2016-01-01 01:00:00', '102547869', '2016-02-06 09:49:11', '2016-02-06 09:49:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_encfacturas`
--

CREATE TABLE `inv_encfacturas` (
  `id` int(10) UNSIGNED NOT NULL,
  `efa_sucursal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `efa_documento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `efa_numero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `efa_fecha` datetime NOT NULL,
  `efa_cliente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `efa_fecaud` datetime NOT NULL,
  `efa_usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `efa_vendedor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `efa_observa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `efa_anulado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `efa_fecanula` datetime NOT NULL,
  `efa_usuanula` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `efa_motanula` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `efa_formpag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `efa_porcdesc` int(11) NOT NULL,
  `efa_valdesc` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_encfacturas`
--

INSERT INTO `inv_encfacturas` (`id`, `efa_sucursal`, `efa_documento`, `efa_numero`, `efa_fecha`, `efa_cliente`, `efa_fecaud`, `efa_usuario`, `efa_vendedor`, `efa_observa`, `efa_anulado`, `efa_fecanula`, `efa_usuanula`, `efa_motanula`, `efa_formpag`, `efa_porcdesc`, `efa_valdesc`, `created_at`, `updated_at`) VALUES
(1, 'sdf', '343432', 'sfd', '0000-00-00 00:00:00', 'sdf', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', '', 0, 0, '2016-02-10 04:17:52', '2016-02-10 04:17:52'),
(2, 'eqqwe', '34234234', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', '', 0, 0, '2016-02-10 04:18:04', '2016-02-10 04:18:04'),
(3, 'gfdgdfg', '87687878', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', '', 0, 0, '2016-02-10 04:18:13', '2016-02-10 04:18:13'),
(4, '678', '678768', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', '', 0, 0, '2016-02-10 04:18:19', '2016-02-10 04:18:19'),
(5, 'qweqwe', '123213213', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', '', 0, 0, '2016-02-10 04:21:23', '2016-02-10 04:21:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_formpagos`
--

CREATE TABLE `inv_formpagos` (
  `id` int(10) UNSIGNED NOT NULL,
  `fmp_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fmp_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fmp_tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_formpagos`
--

INSERT INTO `inv_formpagos` (`id`, `fmp_codigo`, `fmp_nombre`, `fmp_tipo`, `created_at`, `updated_at`) VALUES
(1, '123', 'forma pago 1', 'efectivo', '2016-02-09 00:30:12', '2016-02-09 00:30:12'),
(3, '159753', 'consignacion bancaria', 'bancos', '2016-02-09 00:30:49', '2016-02-09 00:30:49'),
(4, '4456789', 'taerjeta', 'tarjeta', '2016-02-09 00:31:07', '2016-02-09 00:31:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_imptoarts`
--

CREATE TABLE `inv_imptoarts` (
  `id` int(10) UNSIGNED NOT NULL,
  `ima_articulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ima_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ima_nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ima_porcent` int(11) NOT NULL,
  `ima_basimpto` int(11) NOT NULL,
  `ima_observacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ima_estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ima_fecaud` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_imptoarts`
--

INSERT INTO `inv_imptoarts` (`id`, `ima_articulo`, `ima_codigo`, `ima_nom`, `ima_porcent`, `ima_basimpto`, `ima_observacion`, `ima_estado`, `ima_fecaud`, `created_at`, `updated_at`) VALUES
(1, 'qasd', '123456-abc', 'adasd', 12312312, 123123, 'asdasdas', '123asdasd', '0000-00-00 00:00:00', '2016-02-09 02:05:00', '2016-02-09 02:07:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_prevenarts`
--

CREATE TABLE `inv_prevenarts` (
  `id` int(10) UNSIGNED NOT NULL,
  `prv_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prv_intervenini` int(11) NOT NULL,
  `prv_intervenfin` int(11) NOT NULL,
  `prv_unidad` int(11) NOT NULL,
  `prv_valor` int(11) NOT NULL,
  `prv_vigencia` date NOT NULL,
  `prv_usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prv_fecaud` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_prevenarts`
--

INSERT INTO `inv_prevenarts` (`id`, `prv_codigo`, `prv_intervenini`, `prv_intervenfin`, `prv_unidad`, `prv_valor`, `prv_vigencia`, `prv_usuario`, `prv_fecaud`, `created_at`, `updated_at`) VALUES
(1, '5345', 43545, 435345, 3543534, 345345, '2016-02-02', 'yo', '0000-00-00 00:00:00', '2016-02-10 04:49:11', '2016-02-10 04:49:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_sucursales`
--

CREATE TABLE `inv_sucursales` (
  `id` int(10) UNSIGNED NOT NULL,
  `suc_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suc_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suc_direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_sucursales`
--

INSERT INTO `inv_sucursales` (`id`, `suc_codigo`, `suc_nombre`, `suc_direccion`, `created_at`, `updated_at`) VALUES
(2, '041', 'angela', 'nose', '2016-02-05 08:58:10', '2016-02-05 08:58:10'),
(3, '052', 'angela 2 ', 'muy lejos modificado', '2016-02-05 08:58:24', '2016-02-05 09:04:25'),
(5, '963', 'pedro', 'nose', '2016-02-05 08:58:54', '2016-02-05 08:58:54'),
(6, '987', 'juan', 'lugar', '2016-02-10 07:35:26', '2016-02-10 07:35:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_terceros`
--

CREATE TABLE `inv_terceros` (
  `id` int(10) UNSIGNED NOT NULL,
  `ter_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_alterno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_digverif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_naturaleza` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_tipodni` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_dni` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_pais` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_depart` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_ciudad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_direcc1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_direcc2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_telefono1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_telefono2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_email1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_email12` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_pagweb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_razscial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_ faceboock` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_twiter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_instagram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_estrato` int(11) NOT NULL,
  `ter_Observaciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_fecha` datetime NOT NULL,
  `ter_rfc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Tip_doc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ter_porc` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_unidartis`
--

CREATE TABLE `inv_unidartis` (
  `id` int(10) UNSIGNED NOT NULL,
  `uni_articulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uni_peso` int(11) NOT NULL,
  `uni_volumen` int(11) NOT NULL,
  `uni_largo` int(11) NOT NULL,
  `uni_alto` int(11) NOT NULL,
  `uni_presentacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uni_presembalaje` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uni_presemventa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uni_fecaud` datetime NOT NULL,
  `uni_usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_unidartis`
--

INSERT INTO `inv_unidartis` (`id`, `uni_articulo`, `uni_peso`, `uni_volumen`, `uni_largo`, `uni_alto`, `uni_presentacion`, `uni_presembalaje`, `uni_presemventa`, `uni_fecaud`, `uni_usuario`, `created_at`, `updated_at`) VALUES
(1, 'art_1', 234234, 234324, 23434, 23424, 'dffs', '', 'sdfsdf', '0000-00-00 00:00:00', 'angela', '2016-02-10 01:23:12', '2016-02-10 01:23:29'),
(2, 'art_2', 890, 98, 988, 9898, 'art_2', '', 'art_2', '2016-02-24 14:02:00', 'indira', '2016-02-10 01:24:07', '2016-02-10 01:24:07'),
(3, 'art_3', 887, 908, 9786, 76876, 'kckkj', '', 'jhuh', '2016-02-17 01:01:00', 'juan', '2016-02-10 01:24:41', '2016-02-10 01:24:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_vendedors`
--

CREATE TABLE `inv_vendedors` (
  `id` int(10) UNSIGNED NOT NULL,
  `ven_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ven_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ven_zona` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_vendedors`
--

INSERT INTO `inv_vendedors` (`id`, `ven_codigo`, `ven_nombre`, `ven_zona`, `created_at`, `updated_at`) VALUES
(1, 'vende1', 'sfsf', 'sfsfs', '2016-02-10 06:05:34', '2016-02-10 06:05:43'),
(3, 'fghfh', 'fghfh', 'fhfgh', '2016-02-10 06:05:59', '2016-02-10 06:05:59'),
(4, 'llll', 'lll', 'll', '2016-02-10 06:08:12', '2016-02-10 06:08:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv_zonas`
--

CREATE TABLE `inv_zonas` (
  `id` int(10) UNSIGNED NOT NULL,
  `zon_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zon_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inv_zonas`
--

INSERT INTO `inv_zonas` (`id`, `zon_codigo`, `zon_nombre`, `created_at`, `updated_at`) VALUES
(2, '1231232', 'asdasdasdad', '2016-02-10 05:59:29', '2016-02-10 05:59:29'),
(3, '2342434545', 'dfgdfgdfg', '2016-02-10 05:59:37', '2016-02-10 05:59:37'),
(4, '8888888', 'zona_a', '2016-02-10 05:59:50', '2016-02-10 06:00:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_12_19_233929_create_inv_catarticus_table', 2),
('2016_01_28_030335_create_inv_prevenarts_table', 3),
('2016_01_28_030501_create_inv_bodegas_table', 4),
('2016_01_28_030645_create_inv_controlarts_table', 4),
('2016_01_28_030740_create_inv_almacenes_table', 5),
('2016_01_28_030933_create_inv_zonas_table', 6),
('2016_01_28_031018_create_inv_vendedors_table', 6),
('2016_02_05_030922_create_inv_sucursales_table', 7),
('2016_02_05_141747_create_inv_ciudades_table', 8),
('2016_02_05_165149_create_inv_departamentos_table', 9),
('2016_02_05_195315_create_inv_documentos_table', 10),
('2016_02_08_172008_create_inv_formpagos_table', 11),
('2016_02_08_195330_create_inv_combosarts_table', 12),
('2016_02_08_203609_create_inv_imptoarts_table', 13),
('2016_02_08_211737_create_inv_unidartis_table', 14),
('2016_02_09_205030_create_inv_articulos_table', 15),
('2016_02_09_215130_create_inv_terceros_table', 16),
('2016_02_09_225302_create_inv_encfacturas_table', 17),
('2016_02_10_020106_create_inv_detfacturas_table', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(1) NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `address`, `phone`, `username`, `level`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'juan', 'orjuela', 'j.j.o.c007@gmail.com', 'cra calle', 123456789, 'jjoc007', 0, '$2y$10$2bGBYRYAgLsInJv2HsI8tOMjP7eh0eE0Jz3d5.lU6lg5YNCTkNMIe', '1cknS1hbHwGqGB9Mu8HDN1hzSaC23R4vKDDZDokABYEAISoigW02UvORNxC6', '2015-12-08 07:51:20', '2016-01-11 02:07:16'),
(6, 'jose', 'orjuela', 'jjorjuelac@correo.udistrital.edu.co', 'cra calle', 123456789, 'jjoc008', 0, '$2y$10$.9UgetSHHZosjb4gU.6ZlOsiDHhm6qNTu5hMLttY7HTrxQfxcs4Ey', NULL, '2015-12-08 07:51:20', '2015-12-08 07:51:20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inv_almacenes`
--
ALTER TABLE `inv_almacenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_articulos`
--
ALTER TABLE `inv_articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_bodegas`
--
ALTER TABLE `inv_bodegas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_catarticus`
--
ALTER TABLE `inv_catarticus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_ciudades`
--
ALTER TABLE `inv_ciudades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_combosarts`
--
ALTER TABLE `inv_combosarts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_controlarts`
--
ALTER TABLE `inv_controlarts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_departamentos`
--
ALTER TABLE `inv_departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_detfacturas`
--
ALTER TABLE `inv_detfacturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_documentos`
--
ALTER TABLE `inv_documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_encfacturas`
--
ALTER TABLE `inv_encfacturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_formpagos`
--
ALTER TABLE `inv_formpagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_imptoarts`
--
ALTER TABLE `inv_imptoarts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_prevenarts`
--
ALTER TABLE `inv_prevenarts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_sucursales`
--
ALTER TABLE `inv_sucursales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_terceros`
--
ALTER TABLE `inv_terceros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_unidartis`
--
ALTER TABLE `inv_unidartis`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_vendedors`
--
ALTER TABLE `inv_vendedors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_zonas`
--
ALTER TABLE `inv_zonas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inv_almacenes`
--
ALTER TABLE `inv_almacenes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `inv_articulos`
--
ALTER TABLE `inv_articulos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `inv_bodegas`
--
ALTER TABLE `inv_bodegas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `inv_catarticus`
--
ALTER TABLE `inv_catarticus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `inv_ciudades`
--
ALTER TABLE `inv_ciudades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `inv_combosarts`
--
ALTER TABLE `inv_combosarts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `inv_controlarts`
--
ALTER TABLE `inv_controlarts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `inv_departamentos`
--
ALTER TABLE `inv_departamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `inv_detfacturas`
--
ALTER TABLE `inv_detfacturas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `inv_documentos`
--
ALTER TABLE `inv_documentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `inv_encfacturas`
--
ALTER TABLE `inv_encfacturas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `inv_formpagos`
--
ALTER TABLE `inv_formpagos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `inv_imptoarts`
--
ALTER TABLE `inv_imptoarts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `inv_prevenarts`
--
ALTER TABLE `inv_prevenarts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `inv_sucursales`
--
ALTER TABLE `inv_sucursales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `inv_terceros`
--
ALTER TABLE `inv_terceros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inv_unidartis`
--
ALTER TABLE `inv_unidartis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `inv_vendedors`
--
ALTER TABLE `inv_vendedors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `inv_zonas`
--
ALTER TABLE `inv_zonas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
