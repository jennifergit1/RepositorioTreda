-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2022 a las 04:27:53
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tredapruebatecnica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `SKU` int(11) NOT NULL,
  `nombreProducto` varchar(60) NOT NULL,
  `descripcionProducto` varchar(60) NOT NULL,
  `valorProducto` double NOT NULL,
  `tienda` int(11) NOT NULL,
  `imagenProducto` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`SKU`, `nombreProducto`, `descripcionProducto`, `valorProducto`, `tienda`, `imagenProducto`) VALUES
(1, 'Queso campesino', 'Queso del campo fresco y semiduro', 15000, 1, 'imagen de producto.jpeg'),
(2, 'Chorizo de ternera', 'Chorizo de res y ternera super tierno', 8000, 2, 'imagen de producto.jpeg'),
(3, 'Kilo de papas', '1000g de papa capira', 8000, 2, 'imagen de producto.jpeg'),
(4, 'Brownie', 'Torta de brownie con arequipe', 2500, 3, 'imagen de producto.jpeg'),
(5, 'RedBull', 'RedBull te da alas!', 5000, 4, 'imagen de producto.jpeg'),
(6, 'Tapaboca desechable', 'Tapaboca desechable antifluido', 300, 5, 'imagen de producto.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `idTienda` int(11) NOT NULL,
  `nombreTienda` varchar(50) NOT NULL,
  `fechaApertura` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`idTienda`, `nombreTienda`, `fechaApertura`) VALUES
(1, 'Exito', '2000-01-01'),
(2, 'De uno', '2015-12-18'),
(3, 'Surtimax', '1997-08-04'),
(4, 'Carulla', '2001-01-20'),
(5, 'Euro', '2008-09-15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`SKU`),
  ADD KEY `tienda` (`tienda`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`idTienda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `SKU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `idTienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`tienda`) REFERENCES `tienda` (`idTienda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
