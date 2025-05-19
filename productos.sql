-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2025 a las 04:53:40
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion_productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio_unitario` decimal(8,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio_unitario`, `cantidad`, `categoria`, `created_at`, `updated_at`) VALUES
(3, 'FOCO LED', 'Foco led de rosca W 1 000', 1.80, 100, 'Hogar', '2025-05-18 19:25:42', '2025-05-18 21:30:09'),
(4, 'CEMENTO HOLCIM', 'Cemento maestro gris 93.5 LB', 8.22, 559, 'Construccion', '2025-05-18 21:29:57', '2025-05-19 08:40:30'),
(9, 'BROCHA', 'Brocha con mango de madera', 3.50, 50, 'Hogar', '2025-05-19 08:33:39', '2025-05-19 08:33:39'),
(10, 'AGUA', 'Agua Farmacia San Nicolas 1300Ml', 0.99, 78, 'Bebidas', '2025-05-19 08:47:43', '2025-05-19 08:47:43'),
(11, 'CASCADA LIT', 'Rehidratante Cascada Lit Fresa Kiwi 500Ml', 1.00, 50, 'Bebidas', '2025-05-19 08:48:30', '2025-05-19 08:48:30'),
(12, 'LADRILLO', 'Ladrillo de obra rojo de 7 cm.', 0.42, 1000, 'Construccion', '2025-05-19 08:49:47', '2025-05-19 08:49:47'),
(13, 'ALBOROTO', 'Alboroto Diana 200GRs', 1.39, 25, 'Snack', '2025-05-19 08:50:50', '2025-05-19 08:50:50'),
(14, 'ALFAJORES', 'Alfajores Glorys Gourmet X5 Uni', 3.30, 15, 'Snack', '2025-05-19 08:51:42', '2025-05-19 08:51:42');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
