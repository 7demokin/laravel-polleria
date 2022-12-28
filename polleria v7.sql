-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2022 a las 20:35:34
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `polleria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritos`
--

CREATE TABLE `carritos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario_id` bigint(20) NOT NULL,
  `producto_id` bigint(20) NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carritos`
--

INSERT INTO `carritos` (`id`, `usuario_id`, `producto_id`, `precio`, `cantidad`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '26.00', 3, '2022-11-29 19:15:08', '2022-11-29 19:21:34'),
(2, 2, 3, '50.00', 2, '2022-11-29 19:21:56', '2022-11-29 19:22:00'),
(3, 2, 51, '70.00', 2, '2022-11-30 20:12:25', '2022-11-30 20:12:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `imagen`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Pollos a la Brasa', '', '', 'A', NULL, NULL),
(2, 'Mega Mostro', '', '', 'A', NULL, NULL),
(3, 'Mostro', '', '', 'A', NULL, NULL),
(4, 'Mostrito', '', '', 'A', NULL, NULL),
(5, 'Combos Edualdo', '', '', 'A', NULL, NULL),
(6, 'Porciones', '', '', 'A', NULL, NULL),
(7, 'Chaufas', '', '', 'A', NULL, NULL),
(8, 'Parrillas', '', '', 'A', NULL, NULL),
(9, 'Combos Parrillero', '', '', 'A', NULL, NULL),
(10, 'Parrilla Familiar', '', '', 'A', NULL, NULL),
(11, 'Combo 1', '', '', 'A', NULL, NULL),
(12, 'Combo 2', '', '', 'A', NULL, NULL),
(13, 'Bebidas Frias', '', '', 'A', NULL, NULL),
(14, 'Bebidas Calientes', '', '', 'A', NULL, NULL),
(15, 'Vinos y Otros', '', '', 'A', NULL, NULL),
(16, 'Promociones', '', '', 'A', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedidos`
--

CREATE TABLE `detalle_pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pedido_id` bigint(20) NOT NULL,
  `producto_id` bigint(20) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distritos`
--

CREATE TABLE `distritos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia_id` bigint(20) NOT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacions`
--

CREATE TABLE `informacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `marca` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `informacions`
--

INSERT INTO `informacions` (`id`, `marca`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Pollos y Parrillas Edualdo y Familia', 'logo.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodos_de_pagos`
--

CREATE TABLE `metodos_de_pagos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripción` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `instrucciones` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_04_232221_create_departamentos_table', 1),
(6, '2022_11_04_232451_create_provincias_table', 1),
(7, '2022_11_04_232526_create_distritos_table', 1),
(8, '2022_11_05_191651_create_categorias_table', 1),
(9, '2022_11_05_191817_create_productos_table', 1),
(10, '2022_11_05_192552_create_carritos_table', 1),
(11, '2022_11_05_192624_create_pedidos_table', 1),
(12, '2022_11_05_192654_create_detalle_pedidos_table', 1),
(13, '2022_11_09_000051_create_metodos_de_pagos_table', 1),
(14, '2022_11_09_164237_create_permission_tables', 1),
(15, '2022_11_10_174918_create_informacions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 3),
(1, 'App\\Models\\User', 4),
(1, 'App\\Models\\User', 5),
(1, 'App\\Models\\User', 6),
(1, 'App\\Models\\User', 7),
(1, 'App\\Models\\User', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_entrega` timestamp NULL DEFAULT NULL,
  `usuario_id` bigint(20) NOT NULL,
  `total` decimal(7,2) NOT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `metodo_de_pago_id` bigint(20) NOT NULL,
  `recibo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` decimal(5,2) DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria_id` bigint(20) NOT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `descripcion`, `imagen`, `categoria_id`, `estado`, `created_at`, `updated_at`) VALUES
(1, '1/4 Pollo a la Brasa', '14.00', '', 'cuarto-de-pollo.jpg', 1, 'A', NULL, NULL),
(2, '1/2 Pollo a la Brasa', '26.00', '', 'medio-pollo.png', 1, 'A', NULL, NULL),
(3, '1 Pollo a la Brasa', '50.00', '', '1pollo.jpg', 1, 'A', NULL, NULL),
(4, '1 Pollo a la Brasa + Chaufa', '56.00', '', 'megamostro1.jpeg', 2, 'A', NULL, NULL),
(5, '1 Pollo a la Brasa + Chaufa + 1 1/2 Gaseosa', '65.00', '', 'megamostro2.jpg', 2, 'A', NULL, NULL),
(6, '1/4 Pollo a la Brasa + Chaufa + Papas', '17.00', '', 'mostro1.jpg', 3, 'A', NULL, NULL),
(7, '1/2 Pollo a la Brasa + Chaufa + Papas + Gaseosa de 1/2 lt.', '35.00', '', 'mostro2.jpg', 3, 'A', NULL, NULL),
(8, '1/8 Pollo a la Brasa + Chaufa + Papas', '11.00', '', NULL, 4, 'A', NULL, NULL),
(9, '1/4 Pollo a la Brasa + Gaseosa mediana', '16.00', '', NULL, 5, 'A', NULL, NULL),
(10, '1 Pollo a la Brasa + Gaseosa de 1 1/2', '57.00', '', NULL, 5, 'A', NULL, NULL),
(11, '1 Pollo a la Brasa + 1/4 Pollo a la Brasa + Gaseosa de 1 1/2', '60.00', '', NULL, 5, 'A', NULL, NULL),
(12, '1 Pollo a la Brasa + Gaseosa de 1 lt.', '56.00', '', NULL, 5, 'A', NULL, NULL),
(13, '1/4 Pollo a la Brasa + Palito de Anticucho', '18.00', '', NULL, 5, 'A', NULL, NULL),
(14, '1 Pollo a la Brasa solo', '40.00', '', NULL, 5, 'A', NULL, NULL),
(15, '2 Pollos a la Brasa solo', '80.00', '', 'pollo-solo2.jpg', 5, 'A', NULL, NULL),
(16, '1 Porción de Papas', '12.00', '', NULL, 6, 'A', NULL, NULL),
(17, '1 Porción de Ensalada', '7.00', '', NULL, 6, 'A', NULL, NULL),
(18, '1 Porción de Arroz', '4.00', '', NULL, 6, 'A', NULL, NULL),
(19, 'Mega Chaufa', '10.00', '', NULL, 7, 'A', NULL, NULL),
(20, 'Picaña a la Parrilla', '40.00', '', NULL, 8, 'A', NULL, NULL),
(21, '2 Anticuchos a la Parrilla corazón de Res', '18.00', '', NULL, 8, 'A', NULL, NULL),
(22, '2 Anticuchos a la Parrilla de Mollejitas de Pollo', '16.00', '', NULL, 8, 'A', NULL, NULL),
(23, 'Lomo Fino a la Parrilla', '35.00', '', NULL, 8, 'A', NULL, NULL),
(24, 'Chuleta a la Parrilla', '18.00', '', NULL, 8, 'A', NULL, NULL),
(25, 'Marucha a la Parrilla', '18.00', '', NULL, 8, 'A', NULL, NULL),
(26, 'Churrasco a la Parrilla', '25.00', '', NULL, 8, 'A', NULL, NULL),
(27, '2 Chorizos a la Parrilla', '16.00', '', NULL, 8, 'A', NULL, NULL),
(28, 'Pechuga a la Parrilla', '20.00', '', NULL, 8, 'A', NULL, NULL),
(29, '1 Pechuga + 1 Churrasco + 1 Chuleta + Anticucho + 1 Mollejita + 1 Chorizo + Ensalada + Gaseosa de 1 1/2', '90.00', '', 'combo-familiar1.jpg', 9, 'A', NULL, NULL),
(30, '1 Marucha + 1 Chorizo + 3 Hot Dog + 1 Anticucho + 1 Anticucho de Molleja + 1/2 Pollo a la Brasa + Papas Crocantes + Ensalada + Gaseosa de 1 1/2', '100.00', '', 'parrilla-familiar1.jpeg', 10, 'A', NULL, NULL),
(31, '1 Chuleta + 1 Pechuga + 1 Mollejita + 1 Anticucho + 1 Chorizo + Papas Crocantes + Ensalada + Gaseosa 1 1/2', '70.00', '', 'combo1.jpg', 11, 'A', NULL, NULL),
(32, '1/4 Pollo a la Brasa + 1 Churrasco + Mollejitas + Anticuchos + Chorizo + Papas Crocantes + Ensalada + Gaseosa 1 1/2', '80.00', '', 'combo2.webp', 12, 'A', NULL, NULL),
(33, 'Gaseosa Mediana', '2.50', '', 'gaseosa mediana.webp', 13, 'A', NULL, NULL),
(34, 'Gaseosa Gordita', '5.00', '', 'inca-kola-gordita.jpg', 13, 'A', NULL, NULL),
(35, 'Gaseosa 1 litro', '7.00', '', 'gaseosa 1.webp', 13, 'A', NULL, NULL),
(36, 'Gaseosa 1/2 litro', '4.00', '', 'gaseosa 0.5.jpg', 13, 'A', NULL, NULL),
(37, 'Gaseosa 1 1/2 litro', '9.00', '', 'gaseosa 1.5.webp', 13, 'A', NULL, NULL),
(38, 'Jarra de Limonada', '12.00', '', 'limonada.jpg', 13, 'A', NULL, NULL),
(39, 'Vaso de Limonada', '4.00', '', 'limonada.jpg', 13, 'A', NULL, NULL),
(40, 'Jarra de Maracuya', '12.00', '', 'maracuya.webp', 13, 'A', NULL, NULL),
(41, 'Vaso de Maracuya', '5.00', '', 'maracuya.webp', 13, 'A', NULL, NULL),
(42, 'Té', '3.00', '', 'te.jpg', 14, 'A', NULL, NULL),
(43, 'Anis', '3.00', '', 'anis.webp', 14, 'A', NULL, NULL),
(44, 'Manzanilla', '3.00', '', 'manzanilla.jpg', 14, 'A', NULL, NULL),
(45, 'Yerba Luisa', '3.00', '', 'hierbaluisa.jpg', 14, 'A', NULL, NULL),
(46, 'Café', '4.00', '', 'cafe.jpg', 14, 'A', NULL, NULL),
(47, 'Cerveza Pilsen', '10.00', '', NULL, 15, 'A', NULL, NULL),
(48, 'Cerveza Corona', '10.00', '', NULL, 15, 'A', NULL, NULL),
(49, 'Tabernero Rose', '45.00', '', NULL, 15, 'A', NULL, NULL),
(50, 'Vino Tacama Rose', '55.00', '', NULL, 15, 'A', NULL, NULL),
(51, 'Vino Tacama Selección Especial', '70.00', '', 'vino-tacama-seleccion-especial.webp', 15, 'A', NULL, NULL),
(52, 'Pisco Sour', '2.00', '', NULL, 15, 'A', NULL, NULL),
(53, 'Pisco Sour de maracuya', '25.00', '', NULL, 15, 'A', NULL, NULL),
(54, 'Chilcano de Pisco', '20.00', '', NULL, 15, 'A', NULL, NULL),
(55, 'Chilcano de Maracuya', '20.00', '', NULL, 15, 'A', NULL, NULL),
(56, 'Cuba Libre', '20.00', '', NULL, 15, 'A', NULL, NULL),
(57, 'Piña Colada', '22.00', '', NULL, 15, 'A', NULL, NULL),
(58, 'Machu Picchu', '22.00', '', NULL, 15, 'A', NULL, NULL),
(59, 'Perú Libre', '20.00', '', NULL, 15, 'A', NULL, NULL),
(60, 'Chilcano Edualdo', '20.00', '', NULL, 15, 'A', NULL, NULL),
(61, '1 Pollo a la Brasa + Papas Crujientes + Cremas + 1/4 Pollo + Gaseosa 1.5 L', NULL, '', 'promocion3.jpg', 16, 'A', NULL, NULL),
(62, '1 Pollo a la Brasa + Papas Crujientes + Cremas + Mega Chaufa + Gaseosa 1.5 L', NULL, '', 'promocion2.jpg', 16, 'A', NULL, NULL),
(63, '1/4 Pollo + Gaseosa 1/2', '0.00', '', 'promocion1.jpg', 16, 'A', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departamento_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'cliente', 'web', '2022-11-26 20:44:06', '2022-11-26 20:44:06'),
(2, 'admin', 'web', '2022-11-26 20:44:42', '2022-11-26 20:44:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dni` char(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` char(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referencia` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distrito_id` bigint(20) DEFAULT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_usuario` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `dni`, `nombre`, `apellido`, `celular`, `direccion`, `referencia`, `distrito_id`, `estado`, `tipo_usuario`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'test', '01', '111111111', NULL, NULL, NULL, 'A', 'C', 'test01@test.com', NULL, '$2a$12$CrQXCXVqo0PSxorUdb4dIeIiQuDpAaCKzqStT06ZDIW18DIOZGUZ.\n', NULL, '2022-11-26 21:02:40', '2022-11-26 21:02:40'),
(2, NULL, 'test', '02', '222222222', NULL, NULL, NULL, 'A', 'C', 'test02@test.com', NULL, '$2y$10$PLp0LLD/erczuHdEl7yFAepf94lq3oXQt8j1PybDE3DSDDYr4GsPy', 'yIbxZVKKzfYd2e4cPl5voncxQIZOUyuXl1dianxLm7V78D3u4SjkRFPi0aj6', '2022-11-28 18:37:23', '2022-11-28 18:37:23'),
(3, NULL, 'test', '03', '333333333', NULL, NULL, NULL, 'A', 'C', 'test03@test.com', NULL, '$2y$10$eaRHfhgyKD9iOVysjKt8Ouv6U95zZnBKSfUer7l/mOZBF2QBFCs7O', NULL, '2022-12-02 19:08:53', '2022-12-02 19:08:53'),
(4, NULL, 'test04', '04', '444444444', NULL, NULL, NULL, 'A', 'C', 'test04@test.com', NULL, '$2y$10$AxV1123YvpLEBeLneT62Iu0etlTZhAZImb9Bx5qA6LiPtos7M2zv6', NULL, '2022-12-02 19:13:43', '2022-12-02 19:13:43'),
(5, NULL, 'test05', '05', '555555555', NULL, NULL, NULL, 'A', 'C', 'test05@test.com', NULL, '$2y$10$jICvcJFhQYyQ/itHkAkeHuH4pRiOJPOgutksD9jZzTDQT4KrDw4Jm', NULL, '2022-12-02 19:14:25', '2022-12-02 19:14:25'),
(6, NULL, 'test06', '06', '666666666', NULL, NULL, NULL, 'A', 'C', 'test06@test.com', NULL, '$2y$10$L9FzUnHvF2lfVOOPydxUZezkgQUDbqAneOmIaxFOUxto45Vq4yXLO', NULL, '2022-12-02 19:16:45', '2022-12-02 19:16:45'),
(7, NULL, 'test07', '07', '666666667', NULL, NULL, NULL, 'A', 'C', 'test07@test.com', NULL, '$2y$10$QzzheIA2gKlR0oCof9YBaump9EATYNeldswvXFffzejqoiBHDVi/O', NULL, '2022-12-02 19:17:27', '2022-12-02 19:17:27'),
(8, NULL, 'test08', '08', '666666668', NULL, NULL, NULL, 'A', 'C', 'test08@test.com', NULL, '$2y$10$aH0bcI9wHs.LV8OzOVppSO6W1WsnJwYSiQQBjqLuzQrI5xnRlDjO.', 'MzqN4qEMuQXXbbPAHdfVbbhGcjapcreUWbOVHT3zcb4AaltXgaNxwsv4jQU7', '2022-12-02 19:18:54', '2022-12-02 19:18:54');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `distritos`
--
ALTER TABLE `distritos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `informacions`
--
ALTER TABLE `informacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `metodos_de_pagos`
--
ALTER TABLE `metodos_de_pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_dni_unique` (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carritos`
--
ALTER TABLE `carritos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `distritos`
--
ALTER TABLE `distritos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `informacions`
--
ALTER TABLE `informacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `metodos_de_pagos`
--
ALTER TABLE `metodos_de_pagos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
