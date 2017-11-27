-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2017 a las 09:22:09
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `entregon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `Id_Categoria` int(2) NOT NULL,
  `N_Categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`Id_Categoria`, `N_Categoria`) VALUES
(1, 'Pizza'),
(2, 'Promociones'),
(3, 'Comida'),
(4, 'Sandwichs'),
(5, 'Salchipapas'),
(6, 'Bebesibles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id_Cliente` int(5) NOT NULL,
  `Nombre` char(150) NOT NULL,
  `Apellido` char(120) NOT NULL,
  `Direccion` char(255) NOT NULL,
  `Id_Usuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Id_Cliente`, `Nombre`, `Apellido`, `Direccion`, `Id_Usuario`) VALUES
(1, 'Nicolas Marcelo', 'Rivas Rojas', 'Brasil 390', 4),
(2, 'admin', 'admin', 'admin', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `Id_Detalle` int(5) NOT NULL,
  `Id_Pedido` int(5) NOT NULL,
  `Id_Producto` int(3) NOT NULL,
  `Cantidad` int(2) NOT NULL,
  `Precio` int(5) NOT NULL,
  `SubTotal` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`Id_Detalle`, `Id_Pedido`, `Id_Producto`, `Cantidad`, `Precio`, `SubTotal`) VALUES
(14, 6, 4, 1, 2600, 2600),
(15, 6, 6, 1, 2800, 2800),
(16, 6, 3, 1, 4500, 4500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `Id_Estado` int(2) NOT NULL,
  `N_Estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`Id_Estado`, `N_Estado`) VALUES
(1, 'Enviado'),
(2, 'En espera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `Id_Pedido` int(5) NOT NULL,
  `FechaHora` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Id_Cliente` int(5) NOT NULL,
  `Id_Estado` int(3) NOT NULL,
  `Total` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`Id_Pedido`, `FechaHora`, `Id_Cliente`, `Id_Estado`, `Total`) VALUES
(6, '2017-11-27 04:46:50', 1, 1, 9900);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id_Producto` int(5) NOT NULL,
  `Nombre` char(50) NOT NULL,
  `Precio` int(5) NOT NULL,
  `Descripcion` char(255) NOT NULL,
  `Id_Categoria` int(3) NOT NULL,
  `Foto` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id_Producto`, `Nombre`, `Precio`, `Descripcion`, `Id_Categoria`, `Foto`) VALUES
(2, 'Pizza Napolitana Familiar', 3500, 'Pizza Napolitana', 1, 'PNapolitana.jpg'),
(3, 'Pizza Vegetariana 2 pers', 4500, 'Pizza Vegetariana 2 pers', 1, 'PVegetariana.jpg'),
(4, 'Casuela de pollo', 2600, 'Casuela de pollo', 3, 'CPollo.jpg'),
(5, 'Casuela de vacuno', 2600, 'Casuela de vacuno', 3, 'CVacuno.jpg'),
(6, 'Churrasco Italiano', 2800, 'Churrasco Italiano', 4, 'ChItaliano.jpg'),
(7, 'Chacarero', 3000, 'Chacarero', 4, 'Chacarero.jpg'),
(8, 'Salchipapa Chica', 1000, 'Salchipapa Chica', 5, 'PChica.jpg'),
(9, 'Salchipapa Grande', 1500, 'Salchipapa Grande', 5, 'PGrande.jpg'),
(10, 'CocaCola 1.5lts', 1600, 'CocaCola 1.5lts', 6, 'CC15.jpg'),
(11, 'Cerveza Artesanal', 2500, 'Cerveza Artesanal', 6, 'CArtesanal.jpg'),
(12, 'Jugo 1.5lts Piña', 1200, 'Jugo 1.5lts Piña', 6, 'Jugo15.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_Usuario` int(5) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Tipo` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_Usuario`, `Email`, `Password`, `Tipo`) VALUES
(3, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(4, 'viconsmite@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id_Categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id_Cliente`),
  ADD KEY `Id_Usuario` (`Id_Usuario`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`Id_Detalle`),
  ADD KEY `Id_Pedido` (`Id_Pedido`),
  ADD KEY `Id_Producto` (`Id_Producto`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`Id_Estado`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`Id_Pedido`),
  ADD KEY `Id_Cliente` (`Id_Cliente`),
  ADD KEY `Id_Estado` (`Id_Estado`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id_Producto`),
  ADD KEY `Id_Categoria` (`Id_Categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `Id_Categoria` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id_Cliente` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `Id_Detalle` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `Id_Estado` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `Id_Pedido` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id_Producto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_Usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`Id_Usuario`);

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle_ibfk_1` FOREIGN KEY (`Id_Pedido`) REFERENCES `pedido` (`Id_Pedido`),
  ADD CONSTRAINT `detalle_ibfk_2` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id_Producto`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`Id_Cliente`) REFERENCES `cliente` (`Id_Cliente`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`Id_Estado`) REFERENCES `estado` (`Id_Estado`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`Id_Categoria`) REFERENCES `categoria` (`Id_Categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
