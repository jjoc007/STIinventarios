-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2016 a las 04:22:12
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

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
-- Estructura de tabla para la tabla `inv_bodegas`
--

CREATE TABLE `inv_bodegas` (
  `id` int(10) UNSIGNED NOT NULL,
  `bod_codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bod_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(4, '53', 'sadfdsfd', '2016-01-13 07:46:47', '2016-01-13 07:46:47'),
(5, '612', 'sdfdsf mos', '2016-01-13 07:49:45', '2016-01-27 08:14:07');

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
('2016_01_28_031018_create_inv_vendedors_table', 6);

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
-- Indices de la tabla `inv_controlarts`
--
ALTER TABLE `inv_controlarts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inv_prevenarts`
--
ALTER TABLE `inv_prevenarts`
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
-- AUTO_INCREMENT de la tabla `inv_bodegas`
--
ALTER TABLE `inv_bodegas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inv_catarticus`
--
ALTER TABLE `inv_catarticus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `inv_controlarts`
--
ALTER TABLE `inv_controlarts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inv_prevenarts`
--
ALTER TABLE `inv_prevenarts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inv_vendedors`
--
ALTER TABLE `inv_vendedors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inv_zonas`
--
ALTER TABLE `inv_zonas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
