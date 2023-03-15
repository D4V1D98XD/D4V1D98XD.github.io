-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2023 a las 02:07:02
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evaluacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Bebidas`
--

CREATE TABLE `bebidas` (
  `id` int(11) NOT NULL,
  `Bebida` text NOT NULL,
  `Sabor` text NOT NULL,
  `Precio` int(11) NOT NULL,
  `Dulce?` tinyint(1) NOT NULL,
  `Descuento` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Bebidas`
--

INSERT INTO `Bebidas` (`id`, `Bebida`, `Sabor`, `Precio`, `Dulce?`, `Descuento`) VALUES
(1, 'Horchata', 'Jamaica', 150, 1, '10%'),
(2, 'Jamaica', 'Horchata', 11, 0, '100%'),
(3, 'Limonada', 'Tamarindo', 15, 0, '11%'),
(4, 'Tamarindo', 'Limon', 1500, 0, '15%'),
(5, 'Fresada', 'Limon y fresa', 300, 0, '0%'),
(6, 'Agua de oro', 'Plata', 5000, 1, '0%'),
(7, 'Niño de afganistan', 'limon', 15, 1, '50%'),
(8, 'Lengua de perro', 'Tamarindo', 400, 1, '60%'),
(9, 'Tamarinfresa', 'Limon', 40, 0, '40%'),
(10, 'manzana', 'dulce', 30, 1, '11%'),
(11, 'pera', 'Fresa', 50, 1, '11%'),
(12, 'Uva', 'Manzana', 25, 1, '0%'),
(13, 'Sandia', 'Sandia con limon', 140, 0, '30%'),
(14, 'Coco', 'sal', 200, 0, '20%'),
(15, 'Perifresa', 'limon', 450, 0, '50%');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Bebidas`
--
ALTER TABLE `Bebidas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Bebidas`
--
ALTER TABLE `Bebidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
