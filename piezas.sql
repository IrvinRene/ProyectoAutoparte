-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2016 a las 02:29:43
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `autopartes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piezas`
--

CREATE TABLE IF NOT EXISTS `piezas` (
  `id` int(5) NOT NULL,
  `imagen` varchar(80) NOT NULL,
  `pieza` varchar(40) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `infoadicional` varchar(45) NOT NULL,
  `idsucursal` int(5) NOT NULL,
  `idmodelo` int(5) NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `piezas`
--

INSERT INTO `piezas` (`id`, `imagen`, `pieza`, `serie`, `marca`, `infoadicional`, `idsucursal`, `idmodelo`, `created_at`, `updated_at`) VALUES
(1, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\bujehorquillaA1SYDchico', 'Buje Horquilla', '191-407-182', 'SYD', 'Chico, Inferior', 2, 1, '', ''),
(2, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\bujehorquillaA1SYDgrande', 'Buje Horquilla', '1J0-407.181.A', 'SYD', 'Grande, Inferior', 2, 1, '', ''),
(3, 'C:\\xampp\\htdocs\\ProyectoFinal\\imagenespiezas\\buje horquilla A1 HUAT grande ', 'Buje Horquilla', 'PHAK-4028', 'HUAT', 'grande, Inferior', 2, 1, '', ''),
(4, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\disco freno A1 ruville', 'Disco Freno', 'BRR 3705 10', 'RUVILLE', 'Solido, Trasero', 2, 1, '', ''),
(5, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\disco freno A1 cano brake', 'Disco Freno', '2292', 'CANO BRAKE', '', 2, 1, '', ''),
(6, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\filtro aceite a1', 'Filtro Aceite', 'OF-6103', 'INTERFIL', '', 2, 1, '', ''),
(7, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\horquilla A1 L', 'Horquilla', '1526037', 'SYD', 'Inferior L', 2, 1, '', ''),
(8, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\horquilla A1 R', 'Horquilla', '1526038', 'SYD', 'Inferior R', 2, 1, '', ''),
(9, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\junta homocinetica A1', 'Junta Homocinetica', 'CV-328', 'SYD', 'Ext 36 Int 27, Lado Rueda', 2, 1, '', ''),
(10, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\Kit Clutch A1', 'Kit Clutch', '602 0001 00', 'LUK', '', 2, 1, '', ''),
(11, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\maza rueda trasera a1', 'Maza Rueda', '2326003', 'SYD', 'Trasera', 2, 1, '', ''),
(12, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\maza rueda delantera a1', 'Maza Rueda', '2326001', 'SYD', 'Delantera', 2, 1, '', ''),
(13, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\rotula inferior R A1', 'Rótula', '1026008', 'SYD', 'Inferior R', 2, 1, '', ''),
(14, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\rotula inferior L A1', 'Rótula', '1026009', 'SYD', 'Inferior L', 2, 1, '', ''),
(15, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\soporte motor DAI A1 Torsion', 'Soporte Motor', '7058', 'DAI', 'Torsión', 2, 1, '', ''),
(16, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\soporte motor DAI A1 Frontal R', 'Soporte Motor', '7057-H', 'DAI', 'Frontal Derecho', 2, 1, '', ''),
(17, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\soporte motor DAI A1 Transmisio', 'Soporte Motor', '7060', 'DAI', 'Estándar Transmisión', 2, 1, '', ''),
(18, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\soporte motorEAGLEBHPA1Torsion', 'Soporte Motor', '1564', 'EAGLE BHP', 'Torsión', 2, 1, '', ''),
(19, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\soporte motor EAGLE BHP T', 'Soporte Motor', '1565', 'EAGLE BHP', 'Estándar Transmisión', 2, 1, '', ''),
(20, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\soporte motor EAGLE BHP FR', 'Soporte Motor', '1330H', 'EAGLE BHP', 'Frontal Derecho', 2, 1, '', ''),
(21, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\terminal direccion A1 eR', 'Terminal Dirección', '6Q0-422-812', 'SYD', 'Exterior R', 2, 1, '', ''),
(22, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\terminal direccion A1 eL', 'Terminal Dirección', '6Q0-422-811', 'SYD', 'Exterior L', 2, 1, '', ''),
(23, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\tornillo estabilizador A1 SYD', 'Tornillo Estabilizador', '2126004', 'SYD', 'Delantero', 2, 1, '', ''),
(24, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\tornillo estabilizador A1 HUAT', 'Tornillo Estabilizador', 'PHAK.3022', 'HUAT', 'Delantero', 2, 1, '', ''),
(25, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\bujehorquillaA1SYDchico', 'Buje Horquilla', '191-407-182', 'SYD', 'Chico, Inferior', 5, 1, '', ''),
(26, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\bujehorquillaA1SYDgrande', 'Buje Horquilla', '1J0-407.181.A', 'SYD', 'Grande, Inferior', 3, 1, '', ''),
(27, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\buje horquilla A1 HUAT grande ', 'Buje Horquilla', 'PHAK-4028', 'HUAT', 'grande, Inferior', 5, 1, '', ''),
(28, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\disco freno A1 ruville', 'Disco Freno', 'BRR 3705 10', 'RUVILLE', 'Solido, Trasero', 3, 1, '', ''),
(29, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\disco freno A1 cano brake', 'Disco Freno', '2292', 'CANO BRAKE', '', 5, 1, '', ''),
(30, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\filtro aceite a1', 'Filtro Aceite', 'OF-6103', 'INTERFIL', '', 3, 1, '', ''),
(31, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\horquilla A1 L', 'Horquilla', '1526037', 'SYD', 'Inferior L', 5, 1, '', ''),
(32, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\horquilla A1 R', 'Horquilla', '1526038', 'SYD', 'Inferior R', 3, 1, '', ''),
(33, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\junta homocinetica A1', 'Junta Homocinetica', 'CV-328', 'SYD', 'Ext 36 Int 27, Lado Rueda', 5, 1, '', ''),
(34, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\Kit Clutch A1', 'Kit Clutch', '602 0001 00', 'LUK', '', 3, 1, '', ''),
(35, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\maza rueda trasera a1', 'Maza Rueda', '2326003', 'SYD', 'Trasera', 5, 1, '', ''),
(36, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\maza rueda delantera a1', 'Maza Rueda', '2326001', 'SYD', 'Delantera', 3, 1, '', ''),
(37, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\rotula inferior R A1', 'Rótula', '1026008', 'SYD', 'Inferior R', 5, 1, '', ''),
(38, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\rotula inferior L A1', 'Rótula', '1026009', 'SYD', 'Inferior L', 3, 1, '', ''),
(39, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\soporte motor DAI A1 Torsion', 'Soporte Motor', '7058', 'DAI', 'Torsión', 5, 1, '', ''),
(40, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\soporte motor DAI A1 Frontal R', 'Soporte Motor', '7057-H', 'DAI', 'Frontal Derecho', 5, 1, '', ''),
(41, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\soporte motor DAI A1 Transmisio', 'Soporte Motor', '7060', 'DAI', 'Estándar Transmisión', 3, 1, '', ''),
(42, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\soporte motorEAGLEBHPA1Torsion', 'Soporte Motor', '1564', 'EAGLE BHP', 'Torsión', 5, 1, '', ''),
(43, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\soporte motor EAGLE BHP T', 'Soporte Motor', '1565', 'EAGLE BHP', 'Estándar Transmisión', 3, 1, '', ''),
(44, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\soporte motor EAGLE BHP FR', 'Soporte Motor', '1330H', 'EAGLE BHP', 'Frontal Derecho', 5, 1, '', ''),
(45, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\terminal direccion A1 eR', 'Terminal Dirección', '6Q0-422-812', 'SYD', 'Exterior R', 3, 1, '', ''),
(46, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\terminal direccion A1 eL', 'Terminal Dirección', '6Q0-422-811', 'SYD', 'Exterior L', 5, 1, '', ''),
(47, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\tornillo estabilizador A1 SYD', 'Tornillo Estabilizador', '2126004', 'SYD', 'Delantero', 3, 1, '', ''),
(48, 'C:\\xampp\\htdocs\\ProyectoAutoparte\\imagenespiezas\\tornillo estabilizador A1 HUAT', 'Tornillo Estabilizador', 'PHAK.3022', 'HUAT', 'Delantero', 5, 1, '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `piezas`
--
ALTER TABLE `piezas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `piezas`
--
ALTER TABLE `piezas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
