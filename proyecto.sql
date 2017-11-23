-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2017 a las 23:26:49
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
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `ID_Carrito` int(6) NOT NULL,
  `N_Pedido` int(6) NOT NULL,
  `ID_Producto` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `N_Telefono` varchar(12) DEFAULT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Referencia` char(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`N_Telefono`, `Nombre`, `Email`, `Direccion`, `Referencia`) VALUES
('asdfsdaasd', 'asdfsad', 'afsfd', 'safdasd', 'asfdsd'),
('sdfsaasd', 'asdfasdf', 'asdf@sdfaf.cl', 'asdfsad', 'asdff'),
('asdfasf', 'dsfasdf', 'asdfasd', 'adsfasd', 'asdfasdf'),
('asdfasd', 'dsafas', 'asdfsda', 'asdfsadf', 'asdfsad'),
('fgdjfh', 'rttrtyr', 'fdghdfg', 'hdfghfd', 'hdfh'),
('fghfh', 'fhfg', 'fgh', 'fghfg', 'fhf'),
('gsdfgsdf', 'sdfgsdf', 'sdfgsd', 'sdfgsdg', 'sdfg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `N_Pedido` int(6) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `FechaHora` datetime DEFAULT NULL,
  `Estado` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`N_Pedido`, `Email`, `FechaHora`, `Estado`) VALUES
(4, 'asdfsda', '2017-10-02 00:00:00', NULL),
(5, 'asdfasd', '2017-10-17 00:00:00', 'Listo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_Producto` int(6) NOT NULL,
  `Nombre` char(50) NOT NULL,
  `Precio` int(5) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Fotos` varchar(30) DEFAULT NULL,
  `Tipo` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_Producto`, `Nombre`, `Precio`, `Descripcion`, `Fotos`, `Tipo`) VALUES
(1, 'Casuela de pollo', 2500, NULL, NULL, 'ComidaCasera'),
(2, 'Pizza Napolitana Familiar', 4000, NULL, NULL, 'Pizza'),
(3, 'Salchipapa Chica', 1000, NULL, 'Salchipapa.jpg', 'Salchipapa'),
(4, 'Salchipapa Grande', 2000, NULL, 'Salchipapa.jpg', 'Salchipapa'),
(5, 'Pizza Vegetariana 2 pers', 6000, NULL, NULL, 'Pizza'),
(6, 'CocaCola 1.5lts', 1200, NULL, NULL, 'ParaBeber'),
(7, 'Jugo 1.5lts Piña', 1500, NULL, NULL, 'ParaBeber'),
(8, 'Casuela de vacuno', 3200, NULL, NULL, 'ComidaCasera'),
(9, 'Churrasco Italiano', 2800, NULL, NULL, 'Sandwichs'),
(10, 'Chacarero', 3300, NULL, NULL, 'Sandwichs'),
(12, 'qqqqqqqqqqqqqqqqqq', 2147483647, NULL, NULL, NULL),
(13, 'uuuuuuuuuuuuuuu', 4, NULL, NULL, 'ASDASD');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`ID_Carrito`),
  ADD KEY `pedido` (`N_Pedido`),
  ADD KEY `prodcuto` (`ID_Producto`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Email`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`N_Pedido`),
  ADD KEY `Email` (`Email`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_Producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `ID_Carrito` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `N_Pedido` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_Producto` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `pedido` FOREIGN KEY (`N_Pedido`) REFERENCES `pedido` (`N_Pedido`),
  ADD CONSTRAINT `prodcuto` FOREIGN KEY (`ID_Producto`) REFERENCES `producto` (`ID_Producto`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `cliente` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
