-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2019 a las 18:42:52
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `products`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `id_brands` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`id_brands`, `description`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Puma'),
(4, 'Fila'),
(5, 'Reebok'),
(6, 'Lacoste'),
(7, 'Topper'),
(8, 'otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colors`
--

CREATE TABLE `colors` (
  `id_colors` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colors`
--

INSERT INTO `colors` (`id_colors`, `description`) VALUES
(1, 'Black'),
(2, 'Writhe'),
(3, 'Red'),
(4, 'Blue'),
(5, 'Green'),
(6, 'Orange');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sneakers`
--

CREATE TABLE `sneakers` (
  `id_sneakers` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `price` decimal(7,2) DEFAULT NULL,
  `id_colors` int(11) NOT NULL,
  `id_brands` int(11) NOT NULL,
  `initial_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) DEFAULT NULL,
  `obervation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sneakers`
--

INSERT INTO `sneakers` (`id_sneakers`, `model`, `price`, `id_colors`, `id_brands`, `initial_date`, `image`, `obervation`) VALUES
(3, 'nike md Runner 2', '12.00', 6, 1, '2019-09-12 22:33:03', '../images/Nike_Md_Runner_2.jpg', '																										'),
(5, 'Adidas f50', '8599.00', 1, 2, '2019-10-01 22:28:50', '../images/adidas_starlux.jpg', '							pruebatest						'),
(9, 'zapas', '50000.00', 1, 6, '2019-10-10 21:45:40', '../images/lacoste.jpg', ''),
(10, 'topper', '250.00', 2, 7, '2019-10-10 22:34:49', '../images/topper.jpg', 'la ultimas'),
(13, 'nike', '3500.00', 1, 1, '2019-10-15 23:45:12', '../images/nike.jpg', 'nada');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id_brands`);

--
-- Indices de la tabla `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id_colors`);

--
-- Indices de la tabla `sneakers`
--
ALTER TABLE `sneakers`
  ADD PRIMARY KEY (`id_sneakers`),
  ADD KEY `colors_sneakers` (`id_colors`),
  ADD KEY `brands_sneakers` (`id_brands`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `id_brands` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `colors`
--
ALTER TABLE `colors`
  MODIFY `id_colors` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sneakers`
--
ALTER TABLE `sneakers`
  MODIFY `id_sneakers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sneakers`
--
ALTER TABLE `sneakers`
  ADD CONSTRAINT `brands_sneakers` FOREIGN KEY (`id_brands`) REFERENCES `brands` (`id_brands`),
  ADD CONSTRAINT `colors_sneakers` FOREIGN KEY (`id_colors`) REFERENCES `colors` (`id_colors`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
