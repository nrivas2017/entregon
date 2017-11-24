-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2017 a las 18:49:27
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
('', '', '', '', ''),
('aaaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaa@asfasf.cl', 'aaaaaaaaaaaa', 'aaaaaa'),
('aaaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaa@asfas.cl', 'aaaaaaaaaaa', 'aaaaaaaaaaaaa'),
('asdfsdaasd', 'asdfsad', 'afsfd', 'safdasd', 'asfdsd'),
('sdfsaasd', 'asdfasdf', 'asdf@sdfaf.cl', 'asdfsad', 'asdff'),
('asdfasf', 'dsfasdf', 'asdfasd', 'adsfasd', 'asdfasdf'),
('asdfasd', 'dsafas', 'asdfsda', 'asdfsadf', 'asdfsad'),
('fgdjfh', 'rttrtyr', 'fdghdfg', 'hdfghfd', 'hdfh'),
('fghfh', 'fhfg', 'fgh', 'fghfg', 'fhf'),
('sfasdfa', 'sdfgdsfg', 'sdfgdsfg@asdfd.cl', 'sdfafasfasdfad', ''),
('gsdfgsdf', 'sdfgsdf', 'sdfgsd', 'sdfgsdg', 'sdfg'),
('uuuuuuuuuuuu', 'uuuuuuuuuuuuuuuuuuuuuuuuuuu', 'uuuuuuuuuu@u.cl', 'adsfdasf', 'asdf'),
('zzzzzzzzzzzz', 'zzzzzzzzz', 'zzzzzzzzzzzzzzzzzz@zzz.cl', 'zzz', 'zzz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` int(15) NOT NULL,
  `tipo` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(4, 'asdfsda', '2017-10-02 00:00:00', 'Listo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_Producto` int(6) NOT NULL,
  `Nombre` char(100) CHARACTER SET latin1 NOT NULL,
  `Precio` int(6) NOT NULL,
  `Descripcion` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Fotos` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `Tipo` char(30) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_Producto`, `Nombre`, `Precio`, `Descripcion`, `Fotos`, `Tipo`) VALUES
(1, 'Casuela de pollo', 2500, 'asfsdfsa', 'CPollo.jpg', 'ComidaCasera'),
(2, 'Pizza Napolitana Familiar', 4000, 'safdsadf', 'PNapolitana.jpg', 'Pizza'),
(3, 'Salchipapa Chica', 1000, 'asfdsadf', 'PChica.jpg', 'Salchipapa'),
(4, 'Salchipapa Grande', 1500, 'asdfasdf', 'PGrande.jpg', 'Salchipapa'),
(5, 'Pizza Vegetariana 2 pers', 6000, 'sadfsadf', 'PVegetariana.jpg', 'Pizza'),
(6, 'CocaCola 1.5lts', 1200, 'asfdsadf', 'CC15.jpg', 'ParaBeber'),
(7, 'Jugo 1.5lts Piña', 1500, 'asdfasdf', 'Jugo15.jpg', 'ParaBeber'),
(8, 'Casuela de vacuno', 3200, 'asdfsdfasdf', 'CVacuno.jpg', 'ComidaCasera'),
(9, 'Churrasco Italiano', 2800, 'sadfsdaf', 'ChItaliano.jpg', 'Sandwichs'),
(10, 'Chacarero', 3300, 'asfdsadf', 'Chacarero.jpg', 'Sandwichs'),
(14, 'Cerveza Artesanal', 2500, 'asdfsadf', 'CArtesanal.jpg', 'ParaBeber');

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
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `N_Pedido` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_Producto` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
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
